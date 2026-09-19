/**
 * Text chat for the hero "AI Assistant" card, built on the ICPaaS text SDK
 * (https://connector.icpaas.ai/dist/sdk.min.js -> window.ICPaasAI).
 *
 * The SDK's own createTextWidget() would inject a second, floating chat UI,
 * so this file deliberately does NOT use it. It calls ICPaasAI.init() +
 * ai.sendMessage() and renders the conversation inside the card's own
 * markup instead, so the text chat looks and behaves like the voice side.
 *
 * What it handles:
 *   - lazy-loads the SDK the first time Text Chat is opened (zero cost for
 *     visitors who only ever use voice)
 *   - reads the API key from the existing voice <script data-api-key> tag,
 *     so the key lives in exactly one place (footer.php)
 *   - user / assistant bubbles, typing indicator, suggestion chips,
 *     "new chat", friendly errors with retry, 45s request timeout
 *   - renders assistant replies as safe DOM (bold, lists, code, links) --
 *     never innerHTML, so model output can't inject markup
 *
 * Usage:
 *   var chat = new AIAssistantTextChat({
 *     root: document.getElementById('aiAssistantRoot'),
 *     onStatus: function (text, kind) { ... }   // kind: undefined | 'live' | 'error'
 *   });
 *   chat.open();   // call when the Text Chat tab is shown
 *
 * Expected hooks inside `root` (all data attributes, no ids needed):
 *   [data-ai-panel]  [data-ai-thread]  [data-ai-form]  [data-ai-input]
 *   [data-ai-send]   [data-ai-clear]   [data-ai-chip="message to send"]
 */
(function (global) {
  "use strict";

  var DEBUG = true; // flip to false once you've confirmed the sendMessage() payload shape

  var DEFAULTS = {
    sdkUrl: "https://connector.icpaas.ai/dist/sdk.min.js",
    baseURL: "https://connector.icpaas.ai",
    agentId: "agent_0442d6869a13424ae12d41535bf498be",
    apiKey: "", // leave empty to reuse the voice script tag's data-api-key
    requestTimeoutMs: 45000,
    onStatus: null,
  };

  var STATUS_IDLE = "Ask anything about our services";
  var STATUS_BUSY = "Assistant is typing…";
  var STATUS_ERROR = "Couldn't get a reply — please retry.";

  var USER_ROLES = ["user", "human", "visitor", "customer", "client"];

  /* --------------------------------------------------------------------
   * Small helpers
   * ------------------------------------------------------------------ */

  function log() {
    if (DEBUG && global.console) {
      var args = ["[AIAssistantTextChat]"].concat(
        Array.prototype.slice.call(arguments),
      );
      console.log.apply(console, args);
    }
  }

  function el(tag, className, text) {
    var node = document.createElement(tag);
    if (className) node.className = className;
    if (text !== undefined) node.textContent = text;
    return node;
  }

  function makeError(code, message) {
    var err = new Error(message);
    err.aiCode = code;
    return err;
  }

  function prefersReducedMotion() {
    return !!(
      global.matchMedia &&
      global.matchMedia("(prefers-reduced-motion: reduce)").matches
    );
  }

  function withTimeout(promise, ms) {
    return new Promise(function (resolve, reject) {
      var timer = setTimeout(function () {
        reject(makeError("timeout", "Request timed out"));
      }, ms);
      Promise.resolve(promise).then(
        function (value) {
          clearTimeout(timer);
          resolve(value);
        },
        function (err) {
          clearTimeout(timer);
          reject(err);
        },
      );
    });
  }

  function loadScript(src) {
    return new Promise(function (resolve, reject) {
      var existing = document.querySelector('script[data-ai-text-sdk="1"]');
      if (existing) {
        existing.addEventListener("load", function () {
          resolve();
        });
        existing.addEventListener("error", function () {
          reject(makeError("sdk", "SDK failed to load"));
        });
        return;
      }
      var s = document.createElement("script");
      s.src = src;
      s.async = true;
      s.setAttribute("data-ai-text-sdk", "1");
      s.onload = function () {
        resolve();
      };
      s.onerror = function () {
        // Drop the dead tag so a later retry can inject a fresh one.
        if (s.parentNode) s.parentNode.removeChild(s);
        reject(makeError("sdk", "SDK failed to load"));
      };
      document.head.appendChild(s);
    });
  }

  // The voice widget's <script data-api-key=... data-agent-id=...> tag is the
  // single source of truth for credentials, so nothing is duplicated here.
  function readVoiceScriptConfig() {
    var s = document.querySelector("script[data-api-key]");
    if (!s) return {};
    return {
      apiKey: s.getAttribute("data-api-key") || "",
      agentId: s.getAttribute("data-agent-id") || "",
    };
  }

  /* --------------------------------------------------------------------
   * Response parsing / error mapping
   * The "guessing" about payload shape lives ONLY here, so it's a
   * one-place fix once you've confirmed a real sendMessage() response.
   * ------------------------------------------------------------------ */

  function isUserRole(role) {
    return (
      typeof role === "string" && USER_ROLES.indexOf(role.toLowerCase()) !== -1
    );
  }

  function messageText(m) {
    if (!m) return "";
    if (typeof m === "string") return m.trim();
    var t = m.text !== undefined ? m.text : m.content;
    if (t === undefined) t = m.message;
    if (typeof t === "string") return t.trim();
    if (Array.isArray(t)) {
      return t
        .map(function (part) {
          return typeof part === "string" ? part : (part && part.text) || "";
        })
        .join("")
        .trim();
    }
    return "";
  }

  // Documented shape is { messages: [{ role, text }] }. This works whether
  // that array holds just the new reply, or the whole conversation so far:
  // only assistant turns AFTER the visitor's last message count as new.
  function extractReply(res) {
    if (!res) return "";
    if (typeof res === "string") return res.trim();

    var msgs = Array.isArray(res)
      ? res
      : res.messages || (res.data && res.data.messages) || null;

    if (msgs && msgs.length) {
      var start = 0;
      for (var i = msgs.length - 1; i >= 0; i--) {
        if (msgs[i] && isUserRole(msgs[i].role)) {
          start = i + 1;
          break;
        }
      }
      var parts = [];
      for (var j = start; j < msgs.length; j++) {
        var text = messageText(msgs[j]);
        if (text) parts.push(text);
      }
      return parts.join("\n\n").trim();
    }

    var flat =
      res.reply || res.response || res.text || res.message || res.output;
    return typeof flat === "string" ? flat.trim() : "";
  }

  function describeError(err) {
    var code = err && err.aiCode;
    var status =
      err &&
      (err.status || err.statusCode || (err.response && err.response.status));
    var msg = err && err.message ? String(err.message) : String(err || "");

    if (code === "config") {
      return { text: "Text chat isn't set up on this page yet.", retry: false };
    }
    if (status === 401 || /\b401\b|unauthori[sz]ed/i.test(msg)) {
      return {
        text: "The assistant couldn't verify this site. Please contact us if this keeps happening.",
        retry: false,
      };
    }
    if (status === 404 || /\b404\b|agent not found/i.test(msg)) {
      return { text: "The assistant isn't available right now.", retry: false };
    }
    if (status === 429 || /\b429\b|rate limit|too many/i.test(msg)) {
      return {
        text: "We're getting a lot of messages. Please try again in a moment.",
        retry: true,
      };
    }
    if (code === "timeout") {
      return {
        text: "That took longer than expected. Please try again.",
        retry: true,
      };
    }
    if (global.navigator && navigator.onLine === false) {
      return {
        text: "You seem to be offline. Check your connection and retry.",
        retry: true,
      };
    }
    return {
      text: "Something went wrong reaching the assistant. Please try again.",
      retry: true,
    };
  }

  /* --------------------------------------------------------------------
   * Safe rich-text rendering (DOM nodes only, never innerHTML)
   * Supports: **bold**, `code`, [label](https://url), bare https:// links,
   * "-", "*", "•" bullets, "1." numbered lists, and "#" headings (shown bold).
   * ------------------------------------------------------------------ */

  var INLINE_RE =
    /\*\*([^*\n]+)\*\*|__([^_\n]+)__|`([^`\n]+)`|\[([^\]\n]+)\]\((https?:\/\/[^\s)]+)\)|(https?:\/\/[^\s<]+[^\s<.,;:!?)\]])/g;

  function makeLink(href, label) {
    var a = el("a", null, label);
    a.href = href;
    a.target = "_blank";
    a.rel = "noopener noreferrer";
    return a;
  }

  function renderInline(parent, text) {
    var last = 0;
    var m;
    INLINE_RE.lastIndex = 0;
    while ((m = INLINE_RE.exec(text)) !== null) {
      if (m.index > last) {
        parent.appendChild(document.createTextNode(text.slice(last, m.index)));
      }
      if (m[1] !== undefined || m[2] !== undefined) {
        parent.appendChild(
          el("strong", null, m[1] !== undefined ? m[1] : m[2]),
        );
      } else if (m[3] !== undefined) {
        parent.appendChild(el("code", null, m[3]));
      } else if (m[4] !== undefined) {
        parent.appendChild(makeLink(m[5], m[4]));
      } else if (m[6] !== undefined) {
        parent.appendChild(makeLink(m[6], m[6]));
      }
      last = INLINE_RE.lastIndex;
    }
    if (last < text.length) {
      parent.appendChild(document.createTextNode(text.slice(last)));
    }
  }

  function renderRich(container, text) {
    var lines = String(text).replace(/\r\n?/g, "\n").split("\n");
    var para = null;
    var list = null;
    var listType = null;

    function closeBlocks() {
      para = null;
      list = null;
      listType = null;
    }

    for (var i = 0; i < lines.length; i++) {
      var line = lines[i];
      var bullet = /^\s*[-*•]\s+(.*)$/.exec(line);
      var numbered = /^\s*\d+[.)]\s+(.*)$/.exec(line);
      var heading = /^\s*#{1,6}\s+(.*)$/.exec(line);

      if (!line.trim()) {
        closeBlocks();
      } else if (bullet || numbered) {
        var type = bullet ? "ul" : "ol";
        if (!list || listType !== type) {
          list = el(type);
          listType = type;
          para = null;
          container.appendChild(list);
        }
        var li = el("li");
        renderInline(li, (bullet || numbered)[1]);
        list.appendChild(li);
      } else if (heading) {
        closeBlocks();
        var hp = el("p");
        hp.appendChild(el("strong", null, heading[1]));
        container.appendChild(hp);
      } else {
        list = null;
        listType = null;
        if (!para) {
          para = el("p");
          container.appendChild(para);
        } else {
          para.appendChild(document.createElement("br"));
        }
        renderInline(para, line);
      }
    }
  }

  /* --------------------------------------------------------------------
   * The chat controller
   * ------------------------------------------------------------------ */

  function AIAssistantTextChat(options) {
    options = options || {};
    if (!options.root) {
      throw new Error("[AIAssistantTextChat] root is required");
    }

    this.cfg = {};
    for (var k in DEFAULTS) {
      this.cfg[k] = options[k] !== undefined ? options[k] : DEFAULTS[k];
    }

    var root = (this.root = options.root);
    this.panel = root.querySelector("[data-ai-panel]") || root;
    this.thread = root.querySelector("[data-ai-thread]");
    this.form = root.querySelector("[data-ai-form]");
    this.input = root.querySelector("[data-ai-input]");
    this.sendBtn = root.querySelector("[data-ai-send]");

    if (!this.thread || !this.form || !this.input || !this.sendBtn) {
      throw new Error(
        "[AIAssistantTextChat] missing [data-ai-thread] / [data-ai-form] / [data-ai-input] / [data-ai-send] inside root",
      );
    }

    this._clientPromise = null;
    this._busy = false;
    this._epoch = 0; // bumped by clear() so a late reply can't land in a fresh chat

    this._bind();
    this._syncSendBtn();
    this._emitStatus(STATUS_IDLE);
  }

  /* ---------------------------- Public API --------------------------- */

  /** Call when the Text Chat tab becomes visible. */
  AIAssistantTextChat.prototype.open = function () {
    var self = this;
    // Warm up in the background so the first message doesn't pay for the
    // SDK download + init. Failures are silent here; send() surfaces them.
    this._getClient().catch(function (err) {
      log("warm-up failed (will retry on send):", err);
    });

    var coarse =
      global.matchMedia && global.matchMedia("(pointer: coarse)").matches;
    if (!coarse) {
      setTimeout(function () {
        self.input.focus({ preventScroll: true });
      }, 320); // after the panel's cross-fade
    }
  };

  AIAssistantTextChat.prototype.send = function (text) {
    text = String(text || "").trim();
    if (!text || this._busy) return;

    this.input.value = "";
    this._syncSendBtn();
    this._setHasMessages(true);
    this._addMessage("user", text);
    this._dispatch(text);
  };

  /** Wipe the conversation and go back to the welcome screen. */
  AIAssistantTextChat.prototype.clear = function () {
    this._epoch++;
    this._setBusy(false);
    this.thread.textContent = "";
    this._setHasMessages(false);
    this._emitStatus(STATUS_IDLE);
    this.input.focus({ preventScroll: true });
  };

  AIAssistantTextChat.prototype.destroy = function () {
    this._epoch++;
    this.form.removeEventListener("submit", this._onSubmit);
    this.input.removeEventListener("input", this._onInput);
    this.root.removeEventListener("click", this._onClick);
  };

  /* ---------------------------- Internals ---------------------------- */

  AIAssistantTextChat.prototype._bind = function () {
    var self = this;

    this._onSubmit = function (e) {
      e.preventDefault();
      self.send(self.input.value);
    };
    this._onInput = function () {
      self._syncSendBtn();
    };
    // One delegated click handler for chips, retry and "new chat".
    this._onClick = function (e) {
      var t = e.target;
      if (!t || !t.closest) return;

      var chip = t.closest("[data-ai-chip]");
      if (chip && self.root.contains(chip)) {
        self.send(chip.getAttribute("data-ai-chip"));
        self.input.focus({ preventScroll: true });
        return;
      }
      var retry = t.closest("[data-ai-retry]");
      if (retry && self.root.contains(retry)) {
        self._retry(retry);
        return;
      }
      var clear = t.closest("[data-ai-clear]");
      if (clear && self.root.contains(clear)) {
        self.clear();
      }
    };

    this.form.addEventListener("submit", this._onSubmit);
    this.input.addEventListener("input", this._onInput);
    this.root.addEventListener("click", this._onClick);
  };

  AIAssistantTextChat.prototype._resolveConfig = function () {
    var voice = readVoiceScriptConfig();
    return {
      apiKey: this.cfg.apiKey || voice.apiKey || "",
      agentId: this.cfg.agentId || voice.agentId || DEFAULTS.agentId,
    };
  };

  AIAssistantTextChat.prototype._getClient = function () {
    var self = this;
    if (this._clientPromise) return this._clientPromise;

    var conf = this._resolveConfig();
    if (!conf.apiKey) {
      // Not cached, so it re-checks next time (the voice tag may load late).
      return Promise.reject(makeError("config", "Missing API key"));
    }

    this._clientPromise = (
      global.ICPaasAI ? Promise.resolve() : loadScript(this.cfg.sdkUrl)
    )
      .then(function () {
        if (!global.ICPaasAI || typeof global.ICPaasAI.init !== "function") {
          throw makeError(
            "sdk",
            "ICPaasAI.init not found after loading the SDK",
          );
        }
        return global.ICPaasAI.init({
          apiKey: conf.apiKey,
          baseURL: self.cfg.baseURL,
        });
      })
      .catch(function (err) {
        self._clientPromise = null; // allow a clean retry
        throw err;
      });

    return this._clientPromise;
  };

  AIAssistantTextChat.prototype._request = function (text) {
    var self = this;
    var agentId = this._resolveConfig().agentId;

    return this._getClient()
      .then(function (ai) {
        return withTimeout(
          ai.sendMessage(text, agentId),
          self.cfg.requestTimeoutMs,
        );
      })
      .then(function (res) {
        log("sendMessage response:", res);
        var reply = extractReply(res);
        if (!reply) {
          if (DEBUG) {
            console.warn(
              "[AIAssistantTextChat] sendMessage returned no readable reply. " +
                "Tell me the exact shape of the response logged above and I will fix extractReply() to read it directly.",
            );
          }
          throw makeError("empty", "Empty reply");
        }
        return reply;
      });
  };

  AIAssistantTextChat.prototype._dispatch = function (text) {
    var self = this;
    var epoch = this._epoch;

    this._lastText = text;
    this._setBusy(true);
    this._emitStatus(STATUS_BUSY, "live");
    var typing = this._showTyping();

    this._request(text).then(
      function (reply) {
        if (epoch !== self._epoch) return; // chat was cleared meanwhile
        self._removeNode(typing);
        self._addMessage("assistant", reply);
        self._setBusy(false);
        self._emitStatus(STATUS_IDLE);
      },
      function (err) {
        if (epoch !== self._epoch) return;
        log("request failed:", err);
        if (global.console) console.error("[AIAssistantTextChat]", err);
        self._removeNode(typing);
        self._addError(err);
        self._setBusy(false);
        self._emitStatus(STATUS_ERROR, "error");
      },
    );
  };

  AIAssistantTextChat.prototype._retry = function (btn) {
    if (this._busy || !this._lastText) return;
    var bubbleRow = btn.closest(".ai-msg");
    this._removeNode(bubbleRow);
    this._dispatch(this._lastText);
  };

  /* ------------------------------ DOM -------------------------------- */

  AIAssistantTextChat.prototype._addMessage = function (role, text) {
    var row = el("div", "ai-msg ai-msg--" + role);
    if (role === "assistant") row.appendChild(el("span", "ai-msg__avatar"));

    var bubble = el("div", "ai-msg__bubble");
    if (role === "assistant") {
      renderRich(bubble, text);
    } else {
      bubble.textContent = text;
    }
    row.appendChild(bubble);

    this.thread.appendChild(row);
    this._scrollToEnd();
    return row;
  };

  AIAssistantTextChat.prototype._showTyping = function () {
    var row = el("div", "ai-msg ai-msg--assistant ai-msg--typing");
    row.setAttribute("role", "status");
    row.setAttribute("aria-label", "Assistant is typing");
    row.appendChild(el("span", "ai-msg__avatar"));

    var bubble = el("div", "ai-msg__bubble");
    var dots = el("span", "ai-typing");
    for (var i = 0; i < 3; i++) dots.appendChild(el("span", "ai-typing__dot"));
    bubble.appendChild(dots);
    row.appendChild(bubble);

    this.thread.appendChild(row);
    this._scrollToEnd();
    return row;
  };

  AIAssistantTextChat.prototype._addError = function (err) {
    var info = describeError(err);
    var row = el("div", "ai-msg ai-msg--assistant ai-msg--error");
    row.appendChild(el("span", "ai-msg__avatar"));

    var bubble = el("div", "ai-msg__bubble");
    bubble.appendChild(el("span", "ai-msg__error-text", info.text));

    if (info.retry) {
      var btn = el("button", "ai-msg__retry", "Retry");
      btn.type = "button";
      btn.setAttribute("data-ai-retry", "");
      bubble.appendChild(btn);
    }

    row.appendChild(bubble);
    this.thread.appendChild(row);
    this._scrollToEnd();
  };

  AIAssistantTextChat.prototype._removeNode = function (node) {
    if (node && node.parentNode) node.parentNode.removeChild(node);
  };

  AIAssistantTextChat.prototype._scrollToEnd = function () {
    var t = this.thread;
    if (typeof t.scrollTo === "function" && !prefersReducedMotion()) {
      t.scrollTo({ top: t.scrollHeight, behavior: "smooth" });
    } else {
      t.scrollTop = t.scrollHeight;
    }
  };

  AIAssistantTextChat.prototype._setHasMessages = function (has) {
    this.panel.classList.toggle("has-messages", !!has);
  };

  AIAssistantTextChat.prototype._setBusy = function (busy) {
    this._busy = busy;
    this.panel.classList.toggle("is-busy", busy);
    this.thread.setAttribute("aria-busy", busy ? "true" : "false");
    this._syncSendBtn();
  };

  AIAssistantTextChat.prototype._syncSendBtn = function () {
    this.sendBtn.disabled = this._busy || !this.input.value.trim();
  };

  AIAssistantTextChat.prototype._emitStatus = function (text, kind) {
    if (typeof this.cfg.onStatus === "function") {
      try {
        this.cfg.onStatus(text, kind);
      } catch (err) {
        if (global.console)
          console.error("[AIAssistantTextChat] onStatus threw:", err);
      }
    }
  };

  global.AIAssistantTextChat = AIAssistantTextChat;
})(window);
