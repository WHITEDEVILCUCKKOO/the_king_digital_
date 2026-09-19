/**
 * Site-wide floating "AI Assistant" bubble -- voice + text.
 *
 * This REPLACES the ICPaaS auto-injected floating widget (blob-widget.js,
 * namespace "KD"), which is voice-only. That vendor widget's DOM isn't ours
 * to safely extend (no text hook, no published selectors), so this file
 * builds its own small, self-mounting widget instead:
 *   - a launcher bubble, fixed bottom-right, on every page
 *   - a panel with two tabs: Voice (talks to window.KD, same API the Home
 *     hero card uses) and Text (renders via AIAssistantTextChat, the exact
 *     same module/agent the hero's Text Chat tab uses)
 *   - hidden while the Home hero is on screen, since the hero already has
 *     its own built-in voice+text card (see home-hero-section.php)
 *
 * Depends on (must load before this file, in this order):
 *   1. blob-widget.js            (ICPaaS connector -- defines window.KD)
 *   2. ai-assistant-icpaas-adapter.js  (window.AIAssistantICPaaSAdapter)
 *   3. ai-assistant-text-chat.js       (window.AIAssistantTextChat)
 *   4. this file
 *
 * No markup needs to be added to any page/footer beyond the <script> tags
 * above -- the widget builds and injects its own DOM on DOMContentLoaded.
 *
 * Assumption flagged for review: there's no agent picker here (by design --
 * single default agent), so a fixed persona is set before starting a voice
 * call. Change DEFAULT_PERSONA below if 'ENG_Male' isn't the right default.
 */
(function (global) {
  "use strict";

  var HERO_SELECTOR = "#home-hero-section";
  var DEFAULT_PERSONA = "ENG_Male"; // IND_Male | IND_Female | ENG_Male | ENG_Female
  var WIDGET_TITLE = "King Digital Assistant";

  /* --------------------------------------------------------------------
   * Styles (scoped under .aifw- / #aifwRoot, self-contained -- doesn't
   * assume the page defines --color-primary etc., but will use them via
   * var(..., fallback) when a page (like the hero) does).
   * ------------------------------------------------------------------ */

  var CSS = [
    "#aifwRoot{position:fixed;right:20px;bottom:20px;z-index:2147483000;",
    "font-family:'Segoe UI',Roboto,Oxygen,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;}",

    "#aifwRoot.aifw-hidden{display:none;}",

    ".aifw-launcher{width:56px;height:56px;border-radius:50%;border:none;",
    "background:var(--color-primary,#F47B20);color:#fff;cursor:pointer;",
    "box-shadow:0 8px 24px rgba(15,23,42,.18);display:flex;align-items:center;",
    "justify-content:center;transition:transform .18s ease,box-shadow .18s ease;",
    "position:relative;}",
    ".aifw-launcher:hover{transform:translateY(-2px);box-shadow:0 12px 28px rgba(15,23,42,.22);}",
    ".aifw-launcher svg{width:26px;height:26px;fill:currentColor;position:absolute;",
    "transition:opacity .15s ease,transform .15s ease;}",
    ".aifw-launcher .aifw-icon-close{opacity:0;transform:rotate(-45deg);}",
    ".aifw-launcher .aifw-icon-chat{opacity:1;transform:rotate(0);}",
    "#aifwRoot[data-open=\"true\"] .aifw-launcher .aifw-icon-close{opacity:1;transform:rotate(0);}",
    "#aifwRoot[data-open=\"true\"] .aifw-launcher .aifw-icon-chat{opacity:0;transform:rotate(45deg);}",

    ".aifw-panel{position:absolute;right:0;bottom:72px;width:336px;max-width:calc(100vw - 32px);",
    "height:480px;max-height:calc(100vh - 120px);background:#fff;border-radius:16px;",
    "box-shadow:0 16px 48px rgba(15,23,42,.2);border:1px solid #E3E7ED;",
    "display:flex;flex-direction:column;overflow:hidden;",
    "opacity:0;transform:translateY(12px) scale(.98);pointer-events:none;",
    "transition:opacity .18s ease,transform .18s ease;}",
    "#aifwRoot[data-open=\"true\"] .aifw-panel{opacity:1;transform:translateY(0) scale(1);pointer-events:auto;}",

    ".aifw-panel__header{display:flex;align-items:center;gap:8px;padding:14px 14px;",
    "background:var(--color-primary,#F47B20);color:#fff;flex:none;}",
    ".aifw-panel__title{font-size:14.5px;font-weight:600;flex:1;",
    "overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}",
    ".aifw-panel__close{background:transparent;border:none;color:#fff;opacity:.9;",
    "cursor:pointer;width:26px;height:26px;display:flex;align-items:center;justify-content:center;",
    "border-radius:6px;}",
    ".aifw-panel__close:hover{opacity:1;background:rgba(255,255,255,.15);}",
    ".aifw-panel__close svg{width:16px;height:16px;fill:currentColor;}",

    ".aifw-tabs{display:flex;gap:4px;padding:8px;flex:none;background:#F7F8FA;",
    "border-bottom:1px solid #E3E7ED;}",
    ".aifw-tab{flex:1;padding:7px 10px;border:none;border-radius:8px;background:transparent;",
    "color:#5F6673;font-size:13px;font-weight:600;cursor:pointer;transition:background .15s ease,color .15s ease;}",
    ".aifw-tab:hover{background:#EEF1F5;}",
    ".aifw-tab.is-active{background:#fff;color:var(--color-primary-dark,#D85F0B);",
    "box-shadow:0 1px 4px rgba(15,23,42,.1);}",

    ".aifw-body{flex:1;min-height:0;display:flex;flex-direction:column;}",

    /* ---- Voice pane ---- */
    ".aifw-voice{flex:1;display:none;flex-direction:column;align-items:center;",
    "justify-content:center;gap:14px;padding:24px;text-align:center;}",
    "#aifwRoot[data-mode=\"voice\"] .aifw-voice{display:flex;}",

    ".aifw-orb{width:88px;height:88px;border-radius:50%;position:relative;",
    "background:radial-gradient(circle at 35% 30%,#EEF1F5,#C9D2E0);",
    "box-shadow:0 0 0 0 rgba(79,127,247,.35);transition:background .3s ease;}",
    ".aifw-orb::after{content:'';position:absolute;inset:0;border-radius:50%;",
    "box-shadow:0 0 0 calc(6px + var(--aifw-level,0) * 14px) rgba(79,127,247, calc(.25 - var(--aifw-level,0) * .15));",
    "transition:box-shadow .08s linear;}",
    ".aifw-orb[data-phase=\"listening\"]{background:radial-gradient(circle at 35% 30%,#DCE8FF,#7FA3FF);}",
    ".aifw-orb[data-phase=\"listening\"]::after{box-shadow:0 0 0 calc(6px + var(--aifw-level,0) * 14px) rgba(79,127,247, calc(.35 - var(--aifw-level,0) * .15));}",
    ".aifw-orb[data-phase=\"thinking\"]{background:radial-gradient(circle at 35% 30%,#FFE9CF,#FFB673);",
    "animation:aifw-think 1.1s ease-in-out infinite;}",
    ".aifw-orb[data-phase=\"speaking\"]{background:radial-gradient(circle at 35% 30%,#DFFAEE,#3FBE5A);}",
    ".aifw-orb[data-phase=\"speaking\"]::after{box-shadow:0 0 0 calc(6px + var(--aifw-level,0) * 16px) rgba(63,190,90, calc(.35 - var(--aifw-level,0) * .15));}",
    "@keyframes aifw-think{0%,100%{transform:scale(1);}50%{transform:scale(1.06);}}",

    ".aifw-status{margin:0;font-size:13px;color:#5F6673;min-height:16px;}",
    ".aifw-status.is-error{color:#DC2626;}",
    ".aifw-status.is-live{color:#315FCC;}",

    ".aifw-call-btn{border:none;border-radius:999px;padding:10px 22px;font-size:14px;",
    "font-weight:600;color:#fff;background:var(--color-primary,#F47B20);cursor:pointer;",
    "transition:background .15s ease,transform .1s ease;}",
    ".aifw-call-btn:hover{transform:translateY(-1px);}",
    ".aifw-call-btn.in-call{background:#DC2626;}",
    ".aifw-call-btn:disabled{opacity:.6;cursor:not-allowed;transform:none;}",

    /* ---- Text pane ---- */
    ".aifw-text{flex:1;min-height:0;display:none;flex-direction:column;}",
    "#aifwRoot[data-mode=\"text\"] .aifw-text{display:flex;}",

    ".aifw-text__thread{flex:1;min-height:0;overflow-y:auto;padding:14px;",
    "display:flex;flex-direction:column;gap:10px;}",

    ".aifw-text__welcome{flex:1;display:flex;flex-direction:column;align-items:center;",
    "justify-content:center;text-align:center;gap:6px;padding:20px;color:#5F6673;}",
    ".aifw-text.has-messages .aifw-text__welcome{display:none;}",
    ".aifw-text__hello{font-size:14px;font-weight:600;color:#171B26;}",
    ".aifw-text__hint{font-size:12.5px;line-height:1.4;}",

    ".ai-msg{display:flex;gap:8px;max-width:88%;}",
    ".ai-msg--user{align-self:flex-end;flex-direction:row-reverse;}",
    ".ai-msg--assistant{align-self:flex-start;}",
    ".ai-msg__avatar{width:22px;height:22px;border-radius:50%;flex:none;margin-top:2px;",
    "background:var(--color-primary,#F47B20);}",
    ".ai-msg__bubble{font-size:13px;line-height:1.45;padding:8px 11px;border-radius:12px;",
    "word-break:break-word;}",
    ".ai-msg--assistant .ai-msg__bubble{background:#F1F3F7;color:#171B26;border-bottom-left-radius:4px;}",
    ".ai-msg--user .ai-msg__bubble{background:var(--color-primary,#F47B20);color:#fff;border-bottom-right-radius:4px;}",
    ".ai-msg__bubble p{margin:0;}",
    ".ai-msg__bubble p+p{margin-top:6px;}",
    ".ai-msg__bubble ul,.ai-msg__bubble ol{margin:6px 0 0;padding-left:18px;}",
    ".ai-msg__bubble a{color:inherit;text-decoration:underline;}",
    ".ai-msg__bubble code{background:rgba(0,0,0,.08);padding:1px 4px;border-radius:4px;",
    "font-size:12px;}",
    ".ai-msg--error .ai-msg__bubble{background:#FDEDEC;color:#B42318;}",
    ".ai-msg__retry{margin-top:6px;border:1px solid currentColor;background:transparent;",
    "color:inherit;font-size:12px;font-weight:600;padding:3px 10px;border-radius:999px;cursor:pointer;}",

    ".ai-typing{display:inline-flex;gap:3px;align-items:center;padding:2px 0;}",
    ".ai-typing__dot{width:5px;height:5px;border-radius:50%;background:#8A919D;",
    "animation:aifw-blink 1.1s ease-in-out infinite;}",
    ".ai-typing__dot:nth-child(2){animation-delay:.15s;}",
    ".ai-typing__dot:nth-child(3){animation-delay:.3s;}",
    "@keyframes aifw-blink{0%,80%,100%{opacity:.3;}40%{opacity:1;}}",

    ".aifw-text__bar{display:flex;align-items:center;padding:6px 10px;",
    "border-top:1px solid #EEF1F5;}",
    ".aifw-text__clear{display:none;margin-left:auto;border:none;background:transparent;",
    "color:#5F6673;font-size:12px;font-weight:600;cursor:pointer;padding:4px 6px;",
    "align-items:center;gap:4px;}",
    ".aifw-text.has-messages .aifw-text__clear{display:inline-flex;}",
    ".aifw-text__clear svg{width:13px;height:13px;fill:currentColor;}",

    ".aifw-composer{display:none;gap:8px;padding:10px 12px;border-top:1px solid #E3E7ED;flex:none;}",
    "#aifwRoot[data-mode=\"text\"] .aifw-composer{display:flex;}",
    ".aifw-composer input{flex:1;border:1px solid #E3E7ED;border-radius:999px;padding:9px 14px;",
    "font-size:13px;outline:none;background:#F7F8FA;}",
    ".aifw-composer input:focus{border-color:var(--color-primary,#F47B20);background:#fff;}",
    ".aifw-composer button{width:36px;height:36px;border-radius:50%;border:none;flex:none;",
    "background:var(--color-primary,#F47B20);color:#fff;cursor:pointer;display:flex;",
    "align-items:center;justify-content:center;}",
    ".aifw-composer button svg{width:16px;height:16px;fill:currentColor;}",
    ".aifw-composer button:disabled{opacity:.5;cursor:not-allowed;}",

    "@media (max-width:420px){#aifwRoot{right:12px;bottom:12px;}",
    ".aifw-panel{width:calc(100vw - 24px);}}",

    "@media (prefers-reduced-motion:reduce){.aifw-orb[data-phase=\"thinking\"]{animation:none;}",
    ".ai-typing__dot{animation:none;opacity:.7;}}",
  ].join("");

  function injectStyles() {
    if (document.getElementById("aifw-styles")) return;
    var style = document.createElement("style");
    style.id = "aifw-styles";
    style.textContent = CSS;
    document.head.appendChild(style);
  }

  /* --------------------------------------------------------------------
   * Markup
   * ------------------------------------------------------------------ */

  function svg(paths) {
    return (
      '<svg viewBox="0 0 24 24" aria-hidden="true">' + paths + "</svg>"
    );
  }

  var ICON_CHAT = svg(
    '<path class="aifw-icon-chat" d="M20 2H4a2 2 0 0 0-2 2v18l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"/>',
  );
  var ICON_CLOSE = svg(
    '<path class="aifw-icon-close" d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"/>',
  );
  var ICON_X = svg('<path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"/>');
  var ICON_SEND = svg('<path d="M2.01 21 23 12 2.01 3 2 10l15 2-15 2z"/>');
  var ICON_NEW_CHAT = svg(
    '<path d="M17.65 6.35A7.96 7.96 0 0 0 12 4a8 8 0 1 0 7.73 10h-2.08A6 6 0 1 1 12 6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/>',
  );

  function buildMarkup() {
    var root = document.createElement("div");
    root.id = "aifwRoot";
    root.setAttribute("data-open", "false");
    root.setAttribute("data-mode", "voice");

    root.innerHTML =
      '<button type="button" class="aifw-launcher" id="aifwLauncher" ' +
      'aria-label="Chat with us" aria-expanded="false">' +
      ICON_CHAT +
      ICON_CLOSE +
      "</button>" +
      '<div class="aifw-panel" id="aifwPanel" role="dialog" aria-label="' +
      WIDGET_TITLE +
      '">' +
      '<div class="aifw-panel__header">' +
      '<span class="aifw-panel__title">' +
      WIDGET_TITLE +
      "</span>" +
      '<button type="button" class="aifw-panel__close" id="aifwCloseBtn" aria-label="Close chat">' +
      ICON_X +
      "</button>" +
      "</div>" +
      '<div class="aifw-tabs" role="group" aria-label="Choose how to chat">' +
      '<button type="button" class="aifw-tab is-active" data-aifw-mode="voice" aria-pressed="true">Voice</button>' +
      '<button type="button" class="aifw-tab" data-aifw-mode="text" aria-pressed="false">Text</button>' +
      "</div>" +
      '<div class="aifw-body">' +
      '<div class="aifw-voice" data-aifw-voice>' +
      '<div class="aifw-orb" id="aifwOrb" data-phase="idle"></div>' +
      '<p class="aifw-status" id="aifwStatus">Tap below to talk with us</p>' +
      '<button type="button" class="aifw-call-btn" id="aifwCallBtn"><span id="aifwCallLabel">Start Call</span></button>' +
      "</div>" +
      '<div class="aifw-text" data-ai-panel>' +
      '<div class="aifw-text__thread" data-ai-thread role="log" aria-live="polite" aria-label="Conversation">' +
      '<div class="aifw-text__welcome" data-ai-welcome>' +
      '<div class="aifw-text__hello">Hi! I\'m the ' +
      WIDGET_TITLE +
      "</div>" +
      '<div class="aifw-text__hint">Ask me anything about our services.</div>' +
      "</div>" +
      "</div>" +
      '<div class="aifw-text__bar">' +
      '<button type="button" class="aifw-text__clear" data-ai-clear aria-label="Start a new chat" title="Start a new chat">' +
      ICON_NEW_CHAT +
      "New chat</button>" +
      "</div>" +
      "</div>" +
      '<form class="aifw-composer" data-ai-form autocomplete="off">' +
      '<input type="text" data-ai-input placeholder="Type your message…" maxlength="1000" aria-label="Type your message">' +
      '<button type="submit" data-ai-send aria-label="Send message" disabled>' +
      ICON_SEND +
      "</button>" +
      "</form>" +
      "</div>" +
      "</div>";

    return root;
  }

  /* --------------------------------------------------------------------
   * Widget controller
   * ------------------------------------------------------------------ */

  function FloatingWidget() {
    injectStyles();
    this.root = buildMarkup();
    document.body.appendChild(this.root);

    this.launcher = this.root.querySelector("#aifwLauncher");
    this.panel = this.root.querySelector("#aifwPanel");
    this.closeBtn = this.root.querySelector("#aifwCloseBtn");
    this.tabs = Array.prototype.slice.call(
      this.root.querySelectorAll("[data-aifw-mode]"),
    );
    this.orb = this.root.querySelector("#aifwOrb");
    this.statusEl = this.root.querySelector("#aifwStatus");
    this.callBtn = this.root.querySelector("#aifwCallBtn");
    this.callLabel = this.root.querySelector("#aifwCallLabel");
    this.textPane = this.root.querySelector(".aifw-text");

    this.adapter = null;
    this.textChat = null;
    this._rafId = null;
    this.defaultStatusText = this.statusEl.textContent;

    this._initVoice();
    this._initText();
    this._bindUi();
    this._initHeroVisibility();
  }

  /* ---- Voice: reuses the same window.KD API + adapter the hero uses ---- */
  FloatingWidget.prototype._initVoice = function () {
    var self = this;

    if (!global.AIAssistantICPaaSAdapter) {
      console.error(
        "[AIAssistantFloatingWidget] AIAssistantICPaaSAdapter not found on window -- " +
          "check that ai-assistant-icpaas-adapter.js loads before this file.",
      );
      this.callBtn.disabled = true;
      this._setStatus("Voice assistant is unavailable right now.", "error");
      return;
    }

    this.adapter = new global.AIAssistantICPaaSAdapter({
      onChange: function (state) {
        if (!global.KD) return;
        if (state.phase === "listening") self._setStatus("Listening…", "live");
        else if (state.phase === "speaking") self._setStatus("Speaking…", "live");
        else if (state.phase === "thinking") self._setStatus("Thinking…", "live");
        else if (global.KD.inCall) self._setStatus("Connected.", "live");
        else self._setStatus(self.defaultStatusText);
      },
    });

    this.callBtn.addEventListener("click", function () {
      if (!global.KD) {
        self._setStatus("AI voice assistant is not available right now.", "error");
        return;
      }
      try {
        if (global.KD.inCall) {
          self.adapter.forcePhase("idle");
          global.KD.end();
        } else {
          self.adapter.forcePhase("listening");
          if (typeof global.KD.setPersona === "function") {
            global.KD.setPersona(DEFAULT_PERSONA);
          }
          global.KD.start();
        }
      } catch (err) {
        self.adapter.forcePhase("idle");
        self._setStatus("Something went wrong starting the call.", "error");
        console.error("[AIAssistantFloatingWidget] KD call toggle failed:", err);
      }
    });

    global.addEventListener("kd:state", function () {
      self._refreshCallUi();
    });
    setTimeout(function () {
      self._refreshCallUi();
    }, 500);
  };

  FloatingWidget.prototype._refreshCallUi = function () {
    if (!global.KD) return;
    if (global.KD.inCall) {
      this.callBtn.classList.add("in-call");
      this.callLabel.textContent = "End Call";
    } else {
      this.callBtn.classList.remove("in-call");
      this.callLabel.textContent = "Start Call";
    }
  };

  FloatingWidget.prototype._startVoiceTicker = function () {
    var self = this;
    if (this._rafId) return;

    function tick() {
      if (!self.adapter) return;
      self.adapter.tick();
      self.orb.setAttribute("data-phase", self.adapter.phase);
      self.orb.style.setProperty(
        "--aifw-level",
        self.adapter.currentLevel.toFixed(3),
      );
      self._rafId = requestAnimationFrame(tick);
    }
    this._rafId = requestAnimationFrame(tick);
  };

  FloatingWidget.prototype._stopVoiceTicker = function () {
    if (this._rafId) {
      cancelAnimationFrame(this._rafId);
      this._rafId = null;
    }
  };

  /* ---- Text: the exact same module/agent the hero's Text Chat uses ---- */
  FloatingWidget.prototype._initText = function () {
    var self = this;
    if (!global.AIAssistantTextChat) {
      console.error(
        "[AIAssistantFloatingWidget] AIAssistantTextChat not found on window -- " +
          "check that ai-assistant-text-chat.js loads before this file.",
      );
      this.tabs.forEach(function (btn) {
        if (btn.getAttribute("data-aifw-mode") === "text") {
          btn.disabled = true;
          btn.title = "Text chat is unavailable right now";
        }
      });
      return;
    }

    try {
      this.textChat = new global.AIAssistantTextChat({
        root: this.panel,
        onStatus: function () {
          // Status text for text mode is shown as chat bubbles/typing
          // indicator already; no separate status line in this compact
          // widget, so intentionally not surfaced elsewhere.
        },
      });
    } catch (err) {
      console.error(
        "[AIAssistantFloatingWidget] Could not start text chat (non-fatal):",
        err,
      );
    }
  };

  /* ---- Open/close + tab switching ---- */
  FloatingWidget.prototype._bindUi = function () {
    var self = this;

    this.launcher.addEventListener("click", function () {
      self._setOpen(self.root.getAttribute("data-open") !== "true");
    });
    this.closeBtn.addEventListener("click", function () {
      self._setOpen(false);
    });

    this.tabs.forEach(function (btn) {
      btn.addEventListener("click", function () {
        self._setMode(btn.getAttribute("data-aifw-mode"));
      });
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && self.root.getAttribute("data-open") === "true") {
        self._setOpen(false);
      }
    });
  };

  FloatingWidget.prototype._setOpen = function (open) {
    this.root.setAttribute("data-open", open ? "true" : "false");
    this.launcher.setAttribute("aria-expanded", open ? "true" : "false");

    if (open) {
      if (this.root.getAttribute("data-mode") === "voice") {
        this._startVoiceTicker();
      } else if (this.textChat) {
        this.textChat.open();
      }
    } else {
      this._stopVoiceTicker();
    }
  };

  FloatingWidget.prototype._setMode = function (mode) {
    var current = this.root.getAttribute("data-mode");
    if (mode === current) return;
    if (mode === "text" && !this.textChat) return;

    // Leaving voice mode hangs up any live call so the mic never stays
    // open behind the text UI.
    if (mode === "text" && global.KD && global.KD.inCall) {
      if (this.adapter) this.adapter.forcePhase("idle");
      try {
        global.KD.end();
      } catch (err) {
        console.error(
          "[AIAssistantFloatingWidget] KD.end failed while switching to text:",
          err,
        );
      }
      this._setStatus(this.defaultStatusText);
    }

    this.root.setAttribute("data-mode", mode);
    this.tabs.forEach(function (btn) {
      var on = btn.getAttribute("data-aifw-mode") === mode;
      btn.classList.toggle("is-active", on);
      btn.setAttribute("aria-pressed", on ? "true" : "false");
    });

    if (mode === "voice") {
      this._startVoiceTicker();
    } else {
      this._stopVoiceTicker();
      if (this.textChat) this.textChat.open();
    }
  };

  FloatingWidget.prototype._setStatus = function (text, kind) {
    this.statusEl.textContent = text;
    this.statusEl.classList.remove("is-error", "is-live");
    if (kind === "error") this.statusEl.classList.add("is-error");
    else if (kind === "live") this.statusEl.classList.add("is-live");
  };

  /* ---- Hide while the Home hero (which has its own voice+text card) is
     on screen; show everywhere else. ---- */
  FloatingWidget.prototype._initHeroVisibility = function () {
    var self = this;
    var hero = document.querySelector(HERO_SELECTOR);

    if (!hero || !("IntersectionObserver" in global)) {
      return; // no hero on this page (or no IO support) -- stay visible
    }

    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          self.root.classList.toggle("aifw-hidden", entry.isIntersecting);
          if (entry.isIntersecting) self._setOpen(false);
        });
      },
      { threshold: 0.15 },
    );
    io.observe(hero);
  };

  /* --------------------------------------------------------------------
   * Boot
   * ------------------------------------------------------------------ */

  function init() {
    if (document.getElementById("aifwRoot")) return; // already mounted
    global.__aiFloatingWidget = new FloatingWidget();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})(window);
