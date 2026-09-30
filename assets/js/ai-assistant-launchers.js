/**
 * Site-wide AI launchers -- replaces the green ICPaaS blob.
 *
 *   1. VOICE  -> a dark "signal capsule" (bottom-right, where the green blob
 *      was). One tap starts/ends the call; the equalizer bars inside it move
 *      with the live audio level. No panel needed.
 *   2. TEXT   -> a paper-white speech-bubble button (sits just left of the
 *      capsule) that opens a light messenger card.
 *
 * Load order in footer.php (before this file):
 *   ai-assistant-icpaas-adapter.js  -> window.AIAssistantICPaaSAdapter
 *   ai-assistant-text-chat.js       -> window.AIAssistantTextChat
 *   blob-widget.js (ICPaaS)         -> window.KD (its own green bubble is hidden here)
 *
 * Both launchers hide while #home-hero-section is on screen (the hero has its
 * own AI card).
 */
(function (global) {
  "use strict";

  var HERO_SELECTOR = "#home-hero-section";
  var DEFAULT_PERSONA = "ENG_Male"; // IND_Male | IND_Female | ENG_Male | ENG_Female
  var TITLE = "King Digital Assistant";

  var CSS = [
    /* Hide the vendor's own green launcher permanently (KD API keeps working). */
    // ".icpaas-floating-widget:not(#aild){display:none!important;}",
    /* global.js tags any fixed body-level element as the vendor widget and
       hides it on the hero -- never let that touch our own launchers. */
    "#aild.icpaas-floating-widget,#aild.icpaas-widget-hidden{display:flex!important;}",

    "#aild{position:fixed;right:20px;bottom:20px;z-index:2147483000;display:flex;",
    "flex-direction:column-reverse;align-items:flex-end;gap:25px;",
    "font-family:'Segoe UI',Roboto,'Helvetica Neue',Arial,sans-serif;}",
    "#aild.aild-hidden{display:none!important;}",
    "#aild button{font-family:inherit;}",
    "#aild :focus-visible{outline:3px solid #8FB2FF;outline-offset:3px;}",

    /* shared hover tag (sits left of each button) */
    ".aild-label,.aild-chat__t{position:absolute;right:calc(100% + 12px);top:50%;",
    "transform:translateY(-50%) translateX(6px);padding:7px 12px;border-radius:10px;background:#1B1A17;",
    "color:#FFFCF6;font-size:13px;font-weight:600;white-space:nowrap;opacity:0;pointer-events:none;",
    "transition:opacity .15s ease,transform .15s ease;}",
    ".aild-voice:hover .aild-label,.aild-voice.in-call .aild-label,.aild-voice.is-error .aild-label,",
    ".aild-chat:hover .aild-chat__t,.aild-chat:focus-visible .aild-chat__t{opacity:1;transform:translateY(-50%);}",
    ".aild-voice.is-error .aild-label{color:#FFB4B4;}",

    /* ============ VOICE: ripple orb ============ */
    ".aild-voice{position:relative;width:64px;height:64px;padding:0;border:0;border-radius:50%;cursor:pointer;",
    "color:#fff;display:grid;place-items:center;",
    "background:radial-gradient(circle at 30% 25%,#A283F0,#5D26C1 48%,#2152FF);",
    "box-shadow:0 12px 28px rgba(60,50,200,.45),inset 0 -7px 14px rgba(0,0,0,.22),inset 0 5px 9px rgba(255,255,255,.35);",
    "transition:transform .18s ease;}",
    ".aild-voice:hover{transform:scale(1.06);}",
    ".aild-voice::before,.aild-voice::after{content:'';position:absolute;inset:0;border-radius:50%;",
    "border:2px solid rgba(93,38,193,.6);pointer-events:none;animation:aild-ripple 3.2s ease-out infinite;}",
    ".aild-voice::after{animation-delay:1.6s;}",
    "@keyframes aild-ripple{from{transform:scale(1);opacity:.75;}to{transform:scale(1.75);opacity:0;}}",
    ".aild-mic{display:grid;place-items:center;}",
    ".aild-mic svg{grid-area:1/1;width:27px;height:27px;fill:#fff;}",
    /* live: rings are driven by audio level instead of the idle loop */
    ".aild-voice[data-phase='listening']::before,.aild-voice[data-phase='speaking']::before,",
    ".aild-voice[data-phase='listening']::after,.aild-voice[data-phase='speaking']::after{animation:none;",
    "transition:transform .07s linear,opacity .07s linear;}",
    ".aild-voice[data-phase='listening']::before,.aild-voice[data-phase='speaking']::before{",
    "transform:scale(calc(1.08 + var(--lvl,0) * .8));opacity:.7;}",
    ".aild-voice[data-phase='listening']::after,.aild-voice[data-phase='speaking']::after{",
    "transform:scale(calc(1.25 + var(--lvl,0) * 1.2));opacity:.4;}",
    ".aild-voice[data-phase='speaking']::before,.aild-voice[data-phase='speaking']::after{border-color:#F47B20;}",
    ".aild-voice[data-phase='thinking']::before,.aild-voice[data-phase='thinking']::after{animation-duration:1s;}",
    ".aild-voice[data-phase='thinking']::after{animation-delay:.5s;}",
    ".aild-voice.in-call{background:radial-gradient(circle at 30% 25%,#FF8A8E,#E5484D 55%,#B42332);}",
    ".aild-voice.in-call::before,.aild-voice.in-call::after{border-color:rgba(229,72,77,.6);}",
    ".aild-voice.in-call svg.aild-i-mic,.aild-voice.in-call .aild-i-mic{display:none;}",
    ".aild-voice .aild-i-end{display:none;}.aild-voice.in-call .aild-i-end{display:block;}",

    /* ============ TEXT: keycap ============ */
    ".aild-chat{position:relative;width:52px;height:52px;padding:0;cursor:pointer;display:flex;",
    "align-items:center;justify-content:center;gap:2px;background:#FFFCF6;color:#1B1A17;",
    "border:1.5px solid #1B1A17;border-bottom-width:5px;border-radius:14px;",
    "font-size:19px;font-weight:800;letter-spacing:-.02em;",
    "box-shadow:0 10px 20px rgba(60,40,10,.18);transition:transform .1s ease,border-bottom-width .1s ease;}",
    ".aild-chat:hover{transform:translateY(-2px);}",
    ".aild-chat:active{transform:translateY(3px);border-bottom-width:2px;}",
    ".aild-caret{width:2.5px;height:20px;border-radius:2px;background:#F47B20;animation:aild-blink 1.1s steps(1) infinite;}",
    "@keyframes aild-blink{50%{opacity:0;}}",
    "#aild[data-open='true'] .aild-caret{animation:none;}",

    /* ============ TEXT PANEL ============ */
    ".aild-panel{position:absolute;right:calc(100% + 14px);bottom:0;width:344px;max-width:calc(100vw - 32px);",
    "height:490px;max-height:calc(100vh - 40px);display:flex;flex-direction:column;overflow:hidden;",
    "background:#FFFCF6;color:#1B1A17;border-radius:20px 20px 6px 20px;",
    "box-shadow:0 18px 50px rgba(60,40,10,.25),0 0 0 1.5px #1B1A17;",
    "opacity:0;transform:translateY(10px) scale(.98);transform-origin:bottom right;pointer-events:none;",
    "transition:opacity .18s ease,transform .18s ease;}",
    "#aild[data-open='true'] .aild-panel{opacity:1;transform:none;pointer-events:auto;}",

    ".aild-head{display:flex;align-items:center;gap:10px;padding:14px 14px 12px 16px;",
    "border-bottom:1.5px solid #1B1A17;flex:none;}",
    ".aild-avatar{width:34px;height:34px;border-radius:10px;background:#F47B20;flex:none;display:grid;place-items:center;}",
    ".aild-avatar svg{width:18px;height:18px;fill:#fff;}",
    ".aild-head__t{flex:1;min-width:0;line-height:1.25;}",
    ".aild-head__t b{display:block;font-size:14.5px;}",
    ".aild-head__t span{font-size:12px;color:#6B665C;display:flex;align-items:center;gap:5px;}",
    ".aild-head__t span::before{content:'';width:7px;height:7px;border-radius:50%;background:#2FA36B;}",
    ".aild-x{width:30px;height:30px;border:0;border-radius:8px;background:transparent;color:#1B1A17;cursor:pointer;display:grid;place-items:center;}",
    ".aild-x:hover{background:#F1EAD9;}",
    ".aild-x svg{width:16px;height:16px;}",

    ".aild-text{flex:1;min-height:0;display:flex;flex-direction:column;}",
    ".aild-thread{flex:1;min-height:0;overflow-y:auto;padding:14px;display:flex;flex-direction:column;gap:10px;}",
    ".aild-welcome{margin:auto 0;padding:6px 4px;}",
    ".aild-text.has-messages .aild-welcome{display:none;}",
    ".aild-welcome h4{margin:0 0 6px;font-size:20px;line-height:1.2;font-weight:700;}",
    ".aild-welcome p{margin:0 0 14px;font-size:13px;line-height:1.5;color:#6B665C;}",
    ".aild-chips{display:flex;flex-direction:column;gap:7px;align-items:flex-start;}",
    ".aild-chip{border:1.5px solid #1B1A17;background:#fff;border-radius:999px;padding:7px 13px;font-size:12.5px;",
    "font-weight:600;color:#1B1A17;cursor:pointer;transition:background .15s ease,transform .15s ease;}",
    ".aild-chip:hover{background:#FFE8D2;transform:translateX(3px);}",

    ".ai-msg{display:flex;gap:8px;max-width:88%;}",
    ".ai-msg--user{align-self:flex-end;flex-direction:row-reverse;}",
    ".ai-msg--assistant{align-self:flex-start;}",
    ".ai-msg__avatar{width:22px;height:22px;border-radius:7px;flex:none;margin-top:2px;background:#F47B20;}",
    ".ai-msg__bubble{font-size:13px;line-height:1.5;padding:8px 12px;border-radius:14px;word-break:break-word;}",
    ".ai-msg--assistant .ai-msg__bubble{background:#fff;border:1.5px solid #E4DCC8;border-bottom-left-radius:4px;}",
    ".ai-msg--user .ai-msg__bubble{background:#1B1A17;color:#FFFCF6;border-bottom-right-radius:4px;}",
    ".ai-msg__bubble p{margin:0;}.ai-msg__bubble p+p{margin-top:6px;}",
    ".ai-msg__bubble ul,.ai-msg__bubble ol{margin:6px 0 0;padding-left:18px;}",
    ".ai-msg__bubble a{color:inherit;text-decoration:underline;}",
    ".ai-msg__bubble code{background:rgba(0,0,0,.07);padding:1px 4px;border-radius:4px;font-size:12px;}",
    ".ai-msg--error .ai-msg__bubble{background:#FDEDEC;color:#B42318;border-color:#F5C2BE;}",
    ".ai-msg__retry{margin-top:6px;border:1px solid currentColor;background:transparent;color:inherit;",
    "font-size:12px;font-weight:600;padding:3px 10px;border-radius:999px;cursor:pointer;}",
    ".ai-typing{display:inline-flex;gap:3px;align-items:center;padding:3px 0;}",
    ".ai-typing__dot{width:5px;height:5px;border-radius:50%;background:#F47B20;animation:aild-hop 1.1s ease-in-out infinite;}",
    "@keyframes aild-hop{0%,60%,100%{transform:translateY(0);}30%{transform:translateY(-4px);}}",
    ".ai-typing__dot:nth-child(2){animation-delay:.15s}.ai-typing__dot:nth-child(3){animation-delay:.3s}",

    ".aild-bar{display:flex;padding:0 12px;flex:none;}",
    ".aild-clear{display:none;margin-left:auto;border:0;background:transparent;color:#6B665C;font-size:12px;",
    "font-weight:600;cursor:pointer;padding:4px 6px;}",
    ".aild-text.has-messages .aild-clear{display:inline-flex;}",
    ".aild-clear:hover{color:#1B1A17;}",

    ".aild-form{display:flex;gap:8px;padding:10px 12px 12px;border-top:1.5px solid #1B1A17;flex:none;}",
    ".aild-form input{flex:1;min-width:0;border:1.5px solid #D9D0BA;border-radius:12px;padding:10px 12px;font-size:13px;",
    "background:#fff;color:#1B1A17;outline:none;}",
    ".aild-form input:focus{border-color:#1B1A17;}",
    ".aild-form button{width:40px;height:40px;border:0;border-radius:12px;background:#F47B20;color:#fff;cursor:pointer;",
    "display:grid;place-items:center;flex:none;}",
    ".aild-form button svg{width:17px;height:17px;fill:currentColor;}",
    ".aild-form button:disabled{opacity:.45;cursor:not-allowed;}",

    "@media (max-width:560px){#aild{right:12px;bottom:12px;}",
    ".aild-panel{right:0;bottom:calc(100% + 12px);width:calc(100vw - 24px);height:460px;max-height:calc(100vh - 190px);",
    "transform-origin:bottom right;}}",

    "@media (prefers-reduced-motion:reduce){.aild-voice::before,.aild-voice::after,.aild-caret,.ai-typing__dot{animation:none!important;}}",
  ].join("");

  function svg(vb, inner) {
    return '<svg viewBox="' + vb + '" aria-hidden="true">' + inner + "</svg>";
  }
  var I_MIC = svg("0 0 24 24", '<path class="aild-i-mic" d="M12 15a3.5 3.5 0 0 0 3.5-3.5v-6a3.5 3.5 0 0 0-7 0v6A3.5 3.5 0 0 0 12 15zm6-3.5a6 6 0 0 1-12 0H4.5a7.5 7.5 0 0 0 6.75 7.46V22h1.5v-3.04A7.5 7.5 0 0 0 19.5 11.5z"/>');
  var I_END = svg("0 0 24 24", '<path class="aild-i-end" d="M6 6h12v12H6z"/>');
  var I_SPARK = svg("0 0 24 24", '<path d="M12 2l2.2 6.3L20.5 10l-6.3 1.7L12 18l-2.2-6.3L3.5 10l6.3-1.7zM19 15l1 2.6 2.6 1-2.6 1-1 2.6-1-2.6-2.6-1 2.6-1z"/>');
  var I_X = svg("0 0 24 24", '<path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"/>');
  var I_SEND = svg("0 0 24 24", '<path d="M2.01 21 23 12 2.01 3 2 10l15 2-15 2z"/>');

  function build() {
    var root = document.createElement("div");
    root.id = "aild";
    root.setAttribute("data-open", "false");
    root.innerHTML =
      '<button type="button" class="aild-voice" id="aildVoice" data-phase="idle" aria-label="Talk to our AI assistant">' +
      '<span class="aild-mic">' + I_MIC + I_END + "</span>" +
      '<span class="aild-label" id="aildLabel" aria-live="polite">Talk to AI</span>' +
      "</button>" +
      '<button type="button" class="aild-chat" id="aildChat" aria-label="Chat with our AI assistant" aria-expanded="false" aria-controls="aildPanel">' +
      '<span aria-hidden="true">Aa</span><i class="aild-caret" aria-hidden="true"></i>' +
      '<span class="aild-chat__t">Chat with us</span>' +
      "</button>" +
      '<section class="aild-panel" id="aildPanel" role="dialog" aria-label="' + TITLE + '">' +
      '<header class="aild-head"><span class="aild-avatar">' + I_SPARK + "</span>" +
      '<div class="aild-head__t"><b>' + TITLE + "</b><span>Replies instantly</span></div>" +
      '<button type="button" class="aild-x" id="aildClose" aria-label="Close chat">' + I_X + "</button></header>" +
      '<div class="aild-text" data-ai-panel>' +
      '<div class="aild-thread" data-ai-thread role="log" aria-live="polite" aria-label="Conversation">' +
      '<div class="aild-welcome"><h4>What can we build for you?</h4>' +
      "<p>Ask about websites, SMS, WhatsApp, IVR, SEO or hosting.</p>" +
      '<div class="aild-chips">' +
      '<button type="button" class="aild-chip" data-ai-chip="What services do you offer?">What services do you offer?</button>' +
      '<button type="button" class="aild-chip" data-ai-chip="How much does a website cost?">How much does a website cost?</button>' +
      '<button type="button" class="aild-chip" data-ai-chip="Tell me about Bulk SMS and WhatsApp API">Bulk SMS &amp; WhatsApp API</button>' +
      "</div></div></div>" +
      '<div class="aild-bar"><button type="button" class="aild-clear" data-ai-clear>New chat</button></div>' +
      "</div>" +
      '<form class="aild-form" data-ai-form autocomplete="off">' +
      '<input type="text" data-ai-input placeholder="Type your message…" maxlength="1000" aria-label="Type your message">' +
      '<button type="submit" data-ai-send aria-label="Send message" disabled>' + I_SEND + "</button></form>" +
      "</section>";
    return root;
  }

  function Launchers() {
    var st = document.createElement("style");
    st.id = "aild-styles";
    st.textContent = CSS;
    document.head.appendChild(st);

    this.root = build();
    document.body.appendChild(this.root);
    this.voice = this.root.querySelector("#aildVoice");
    this.label = this.root.querySelector("#aildLabel");
    this.chat = this.root.querySelector("#aildChat");
    this.panel = this.root.querySelector("#aildPanel");
    this.adapter = null;
    this.textChat = null;
    this._raf = null;
    this._errTimer = null;

    this._initVoice();
    this._initText();
    this._initHero();
  }

  Launchers.prototype._setLabel = function (t, err) {
    this.label.textContent = t;
    this.voice.classList.toggle("is-error", !!err);
  };

  Launchers.prototype._refresh = function () {
    var inCall = !!(global.KD && global.KD.inCall);
    this.voice.classList.toggle("in-call", inCall);
    this.voice.setAttribute("aria-label", inCall ? "End call" : "Talk to our AI assistant");
    if (!inCall) this._setLabel("Talk to AI");
    if (inCall) this._startTicker();
  };

  Launchers.prototype._startTicker = function () {
    var self = this;
    if (this._raf) return;
    (function tick() {
      if (!self.adapter) { self._raf = null; return; }
      self.adapter.tick();
      self.voice.setAttribute("data-phase", self.adapter.phase);
      self.voice.style.setProperty("--lvl", self.adapter.currentLevel.toFixed(3));
      var idle = self.adapter.phase === "idle" && self.adapter.currentLevel === 0;
      self._raf = idle ? null : requestAnimationFrame(tick);
    })();
  };

  Launchers.prototype._initVoice = function () {
    var self = this;
    if (!global.AIAssistantICPaaSAdapter) {
      console.error("[AILaunchers] ai-assistant-icpaas-adapter.js must load first.");
      this.voice.disabled = true;
      this._setLabel("Voice off", true);
      return;
    }
    this.adapter = new global.AIAssistantICPaaSAdapter({
      onChange: function (s) {
        if (!global.KD) return;
        var map = { listening: "Listening…", thinking: "Thinking…", speaking: "Speaking…" };
        if (map[s.phase]) self._setLabel(map[s.phase]);
        else if (global.KD.inCall) self._setLabel("Connected");
        else self._setLabel("Talk to AI");
        self._startTicker();
      },
    });

    this.voice.addEventListener("click", function () {
      if (!global.KD) {
        self._setLabel("Unavailable", true);
        clearTimeout(self._errTimer);
        self._errTimer = setTimeout(function () { self._setLabel("Talk to AI"); }, 2500);
        return;
      }
      try {
        if (global.KD.inCall) {
          self.adapter.forcePhase("idle");
          global.KD.end();
        } else {
          self._setOpen(false); // one mode at a time
          self.adapter.forcePhase("listening");
          if (typeof global.KD.setPersona === "function") global.KD.setPersona(DEFAULT_PERSONA);
          global.KD.start();
        }
      } catch (err) {
        self.adapter.forcePhase("idle");
        self._setLabel("Try again", true);
        console.error("[AILaunchers] KD toggle failed:", err);
      }
      setTimeout(function () { self._refresh(); }, 150);
    });

    global.addEventListener("kd:state", function () { self._refresh(); });
    setTimeout(function () { self._refresh(); }, 500);
  };

  Launchers.prototype._initText = function () {
    var self = this;
    var close = this.root.querySelector("#aildClose");

    if (global.AIAssistantTextChat) {
      try {
        this.textChat = new global.AIAssistantTextChat({ root: this.panel });
      } catch (err) {
        console.error("[AILaunchers] text chat failed to start:", err);
      }
    } else {
      console.error("[AILaunchers] ai-assistant-text-chat.js must load first.");
      this.chat.disabled = true;
    }

    this.chat.addEventListener("click", function () {
      self._setOpen(self.root.getAttribute("data-open") !== "true");
    });
    close.addEventListener("click", function () { self._setOpen(false); });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") self._setOpen(false);
    });
  };

  Launchers.prototype._setOpen = function (open) {
    if (open === (this.root.getAttribute("data-open") === "true")) return;
    this.root.setAttribute("data-open", open ? "true" : "false");
    this.chat.setAttribute("aria-expanded", open ? "true" : "false");
    if (open) {
      // Hang up any live call so the mic isn't open behind the text UI.
      if (global.KD && global.KD.inCall) {
        if (this.adapter) this.adapter.forcePhase("idle");
        try { global.KD.end(); } catch (e) {}
        this._refresh();
      }
      if (this.textChat) this.textChat.open();
    }
  };

  Launchers.prototype._initHero = function () {
    var self = this;
    var hero = document.querySelector(HERO_SELECTOR);
    if (!hero || !("IntersectionObserver" in global)) return;
    new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        self.root.classList.toggle("aild-hidden", en.isIntersecting);
        if (en.isIntersecting) self._setOpen(false);
      });
    }, { threshold: 0.15 }).observe(hero);
  };


  /* --------------------------------------------------------------------
   * Hide the vendor's green blob no matter what it's called or whether it
   * lives in a shadow root: any body-level fixed element (or "kd"/"icpaas"
   * named one / shadow host) sitting small in the bottom-right corner that
   * isn't ours gets display:none. KD's JS API keeps working.
   * ------------------------------------------------------------------ */
  var VENDOR_RE = /(^|[-_])(kd|icpaas)([-_]|$)/i;
  function looksLikeVendorBlob(el) {
    if (!(el instanceof Element) || el.id === "aild") return false;
    if (/^(SCRIPT|STYLE|LINK|HEADER|FOOTER|NAV|MAIN)$/.test(el.tagName)) return false;
    var named = VENDOR_RE.test(el.id || "") ||
      (typeof el.className === "string" && el.className.split(/\s+/).some(function (c) { return VENDOR_RE.test(c); }));
    if (named || el.shadowRoot) return true;
    var cs = global.getComputedStyle(el);
    if (cs.position !== "fixed") return false;
    var r = el.getBoundingClientRect();
    return r.width > 0 && r.width <= 140 && r.height <= 140 &&
      r.right >= global.innerWidth - 160 && r.bottom >= global.innerHeight - 160;
  }
  function sweepVendorBlob() {
    Array.prototype.forEach.call(document.body.children, function (el) {
      if (looksLikeVendorBlob(el)) el.style.setProperty("display", "none", "important");
    });
  }
  function watchVendorBlob() {
    sweepVendorBlob();
    new MutationObserver(sweepVendorBlob).observe(document.body, { childList: true });
    setTimeout(sweepVendorBlob, 1500);
    setTimeout(sweepVendorBlob, 4000);
  }

  function init() {
    if (document.getElementById("aild")) return;
    global.__aiLaunchers = new Launchers();
    watchVendorBlob();
  }
  if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", init);
  else init();
})(window);