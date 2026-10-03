<style>
.qcontact-wrap{background:#fff;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;padding:80px 20px}
.qcontact-inner{max-width:1180px;margin:0 auto}
.qcontact-head{text-align:center;margin-bottom:50px}
.qcontact-title{font-size:44px;font-weight:800;line-height:1.25;letter-spacing:-.5px;color:#171a2b;margin:0 0 16px;opacity:0;transform:translateY(18px);animation:qcontactFadeUp .7s ease forwards}
.qcontact-title-accent{background:linear-gradient(90deg,#ef560d 0%,#ff9448 31%,#123d6b 68%,#ef560d 100%);background-size:250% 100%;background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:aboutHeadingGradient 4s ease-in-out infinite}
@keyframes aboutHeadingGradient{0%{background-position:0% 50%}50%{background-position:100% 50%}100%{background-position:0% 50%}}
.qcontact-sub{font-size:15px;line-height:1.7;color:#5c6178;max-width:620px;margin:0 auto;opacity:0;transform:translateY(18px);animation:qcontactFadeUp .7s ease forwards .12s}
@keyframes qcontactFadeUp{from{opacity:0;transform:translateY(18px)}to{opacity:1;transform:translateY(0)}}

.qcontact-grid{display:grid;grid-template-columns:1.15fr .85fr;gap:24px;align-items:start}

/* Right info panel */
.qcontact-panel{background:#f3eae2;border-radius:22px;padding:34px 30px;opacity:0;transform:translateY(24px);animation:qcontactFadeUp .7s ease forwards .2s}
.qcontact-panel-title{font-size:21px;font-weight:700;color:#141414;margin:0 0 12px}
.qcontact-panel-desc{font-size:13.8px;line-height:1.7;color:#636364;margin:0 0 24px}
.qcontact-info-card{display:flex;align-items:flex-start;gap:14px;background:#ffffff8f;border-radius:14px;padding:16px 18px;margin-bottom:14px;transition:transform .3s ease,box-shadow .3s ease}
.qcontact-info-card:hover{transform:translateY(-4px);box-shadow:0 14px 28px rgba(23,176,110,.12)}
.qcontact-info-icon{flex-shrink:0;width:38px;height:38px;border-radius:50%;background:#f3e7d8;color:#17b06e;display:flex;align-items:center;justify-content:center;transition:transform .4s cubic-bezier(.34,1.56,.64,1)}
.qcontact-info-card:hover .qcontact-info-icon{transform:rotate(-8deg) scale(1.1)}
.qcontact-info-icon svg{width:18px;height:18px}
.qcontact-info-label{font-size:11px;font-weight:700;letter-spacing:.6px;text-transform:uppercase;color:#8a8fa3;margin:0 0 4px}
.qcontact-info-value{font-size:15px;font-weight:700;color:#171a2b;margin:0}
.qcontact-info-value.qcontact-teal{color:#111}
.qcontact-response-card{background:#ffffff6e;border-radius:14px;padding:18px 18px 20px;transition:transform .3s ease,box-shadow .3s ease}
.qcontact-response-card:hover{transform:translateY(-4px);box-shadow:0 14px 28px rgba(23,176,110,.1)}
.qcontact-response-head{display:flex;align-items:center;gap:10px;margin-bottom:8px}
.qcontact-response-head span:first-child{font-size:18px}
.qcontact-response-title{font-size:14.5px;font-weight:700;color:#171a2b;margin:0}

/* Left form panel */
.qcontact-form-panel{background:#1C3D7B;border:1px solid #ececf5;border-radius:22px;padding:20px 34px 12px;box-shadow:0 20px 50px rgba(30,34,90,.06);opacity:0;transform:translateY(24px);animation:qcontactFadeUp .7s ease forwards .3s}
.qcontact-field{margin-bottom:20px}
.qcontact-field-row{display:grid;grid-template-columns:1fr 1fr;gap:18px}
.qcontact-label{display:block;font-size:13.5px;font-weight:700;color:#f4f5f8;margin-bottom:8px}
.qcontact-required{color:#ff7d9d}
.qcontact-input,.qcontact-select,.qcontact-textarea{width:100%;box-sizing:border-box;font-family:inherit;font-size:14px;color:#171a2b;background:#fff;border:1px solid #dcdfe8;border-radius:10px;padding:8px 14px;transition:border-color .25s ease,box-shadow .25s ease}
.qcontact-input::placeholder,.qcontact-textarea::placeholder{color:#a7abbb}
.qcontact-input:focus,.qcontact-select:focus,.qcontact-textarea:focus{outline:none;border-color:#17b06e;box-shadow:0 0 0 4px rgba(23,176,110,.12)}
.qcontact-textarea{resize:vertical;min-height:68px}
.qcontact-select{appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%235c6178' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 14px center;background-size:16px;cursor:pointer}
.qcontact-captcha-row{display:flex;gap:14px;align-items:stretch}
.qcontact-captcha-code{flex-shrink:0;min-width:110px;display:flex;align-items:center;justify-content:center;font-size:19px;font-weight:800;letter-spacing:3px;color:#3d3fae;background:#eef0fe;border-radius:10px;padding:0 16px;user-select:none}
.qcontact-captcha-input{flex:1}
.qcontact-submit-btn{width:100%;display:flex;align-items:center;justify-content:center;gap:10px;font-size:15px;font-weight:700;color:#fff;background:linear-gradient(100deg,#db681b,#c46914);border:none;border-radius:12px;padding:15px 20px;cursor:pointer;margin-top:4px;transition:transform .25s ease,box-shadow .25s ease,filter .25s ease}
.qcontact-submit-btn:hover{transform:translateY(-3px);box-shadow:0 16px 32px rgba(176,79,23,.28);filter:brightness(1.04)}
.qcontact-submit-btn:disabled{opacity:.65;cursor:not-allowed;transform:none;box-shadow:none}
.qcontact-submit-btn svg{width:17px;height:17px}
.qcontact-terms{text-align:center;font-size:12px;color:#c9d3ea;margin:14px 0 0}
.qcontact-terms a{color:#ffb27a;font-weight:600;text-decoration:none}
.qcontact-terms a:hover{text-decoration:underline}

/* Messages + validation */
.qcontact-form-msg{text-align:center;font-size:13.5px;font-weight:600;border-radius:10px;padding:12px 14px;margin-bottom:18px;display:none}
.qcontact-form-msg.qcontact-msg-show{display:block}
.qcontact-form-msg.qcontact-msg-success{background:#e3f7ee;color:#128a56}
.qcontact-form-msg.qcontact-msg-error{background:#fde5ea;color:#c23158}
.qcontact-error{font-size:12.5px;font-weight:600;color:#ffb4c4;margin:6px 0 0;line-height:1.4}
.qcontact-error:empty{display:none}
.qcontact-invalid{border-color:#ff6b8b!important;box-shadow:0 0 0 3px rgba(255,107,139,.18)!important}
.qcontact-count{font-size:11.5px;color:#c9d3ea;text-align:right;margin:5px 0 0}
.qcontact-hp{position:absolute!important;left:-9999px;width:1px;height:1px;overflow:hidden}

/* Interested in */
.check-item{display:flex;align-items:center;gap:8px;font-size:14.5px;color:#fff}
.check-item input{width:16px;height:16px;accent-color:#ff7a1a;margin:0}
.checks{display:flex;gap:20px;padding:10px 0 30px;flex-wrap:wrap}
.req{color:#ff7d9d}
.field{display:flex;flex-direction:column}
.field.full{grid-column:1/-1}
.aer5454{display:flex;color:#fff;font-weight:700}
.checks .qcontact-error{flex-basis:100%;margin:0}
.iauwe{position:relative}

@media (max-width:960px){.qcontact-grid{grid-template-columns:1fr}}
@media (max-width:900px){.field.full{grid-column:1}}
@media (max-width:620px){
  .qcontact-wrap{padding:56px 16px}
  .qcontact-title{font-size:27px}
  .qcontact-sub{font-size:13.8px}
  .qcontact-panel{padding:26px 22px}
  .qcontact-form-panel{padding:26px 22px 24px}
  .qcontact-field-row{grid-template-columns:1fr;gap:0}
  .qcontact-field-row>div+div{margin-top:20px}
  .qcontact-captcha-row{flex-direction:column}
  .qcontact-captcha-code{min-width:0;padding:12px}
}
@media (prefers-reduced-motion:reduce){
  .qcontact-title,.qcontact-sub,.qcontact-panel,.qcontact-form-panel{animation:none!important;opacity:1!important;transform:none!important}
  .qcontact-info-card:hover,.qcontact-response-card:hover,.qcontact-submit-btn:hover{transform:none}
}
</style>

<section class="qcontact-wrap">
  <div class="qcontact-inner">

    <div class="qcontact-head">
      <h2 class="qcontact-title">Get in touch with <span class="qcontact-title-accent"> King Digital</span></h2>
      <p class="qcontact-sub">Have questions about WhatsApp API or Bulk SMS? Reach out to King Digital leading communication experts.</p>
    </div>

    <div class="qcontact-grid">

      <!-- Form panel -->
      <div class="qcontact-form-panel">

        <div class="qcontact-form-msg" id="qcontactFormMsg" role="alert" aria-live="polite"></div>

        <form id="qcontactForm" novalidate autocomplete="on">

          <div class="qcontact-field qcontact-field-row">
            <div>
              <label class="qcontact-label" for="qcontactName">Full Name <span class="qcontact-required">*</span></label>
              <input class="qcontact-input" type="text" id="qcontactName" name="fullName" placeholder="John Doe" maxlength="60" autocomplete="name" aria-describedby="err-name">
              <p class="qcontact-error" id="err-name"></p>
            </div>
            <div>
              <label class="qcontact-label" for="qcontactEmail">Work Email <span class="qcontact-required">*</span></label>
              <input class="qcontact-input" type="email" id="qcontactEmail" name="workEmail" placeholder="you@company.com" maxlength="100" autocomplete="email" aria-describedby="err-email">
              <p class="qcontact-error" id="err-email"></p>
            </div>
          </div>

          <div class="qcontact-field qcontact-field-row">
            <div>
              <label class="qcontact-label" for="qcontactPhone">Phone Number</label>
              <input class="qcontact-input" type="tel" id="qcontactPhone" name="phone" placeholder="+917894561230" maxlength="18" inputmode="tel" autocomplete="tel" aria-describedby="err-phone">
              <p class="qcontact-error" id="err-phone"></p>
            </div>
            <div>
              <label class="qcontact-label" for="qcontactSubject">Subject <span class="qcontact-required">*</span></label>
              <select class="qcontact-select" id="qcontactSubject" name="subject" aria-describedby="err-subject">
                <option value="" selected disabled>Select Service</option>
                <option value="bulk-sms">Bulk SMS</option>
                <option value="whatsapp-api">WhatsApp API</option>
                <option value="otp-sms">OTP SMS</option>
                <option value="voice">Voice / IVR</option>
                <option value="other">Other</option>
              </select>
              <p class="qcontact-error" id="err-subject"></p>
            </div>
          </div>

          <div class="qcontact-field">
            <label class="qcontact-label" for="qcontactMessage">Message <span class="qcontact-required">*</span></label>
            <textarea class="qcontact-textarea" id="qcontactMessage" name="message" placeholder="Tell us about your requirements, use case, or question..." maxlength="1000" aria-describedby="err-message"></textarea>
            <p class="qcontact-count" id="qcontactCount">0 / 1000</p>
            <p class="qcontact-error" id="err-message"></p>
          </div>

          <div class="field full aer5454">
            <label>Interested In<span class="req">*</span></label>
            <div class="checks" id="qcontactChecks" role="group" aria-label="Interested in" aria-describedby="err-interest">
              <label class="check-item"><input type="checkbox" name="interest" value="Partnership"> Partnership</label>
              <label class="check-item"><input type="checkbox" name="interest" value="Bulk Purchase"> Bulk Purchase</label>
              <label class="check-item"><input type="checkbox" name="interest" value="Integration"> Integration</label>
              <label class="check-item"><input type="checkbox" name="interest" value="Reseller"> Reseller</label>
              <label class="check-item"><input type="checkbox" name="interest" value="Other"> Other</label>
              <p class="qcontact-error" id="err-interest"></p>
            </div>
          </div>

          <!-- Honeypot: real users ko nahi dikhta, bots bhar dete hain -->
          <div class="qcontact-hp" aria-hidden="true">
            <label>Website <input type="text" id="qcontactWebsite" name="website" tabindex="-1" autocomplete="off"></label>
          </div>

          <div class="qcontact-field">
            <label class="qcontact-label" for="qcontactCaptchaInput">Enter CAPTCHA: <span class="qcontact-required">*</span></label>
            <div class="qcontact-captcha-row">
              <div class="qcontact-captcha-code" id="qcontactCaptchaCode" aria-label="CAPTCHA code"></div>
              <input class="qcontact-input qcontact-captcha-input" type="text" id="qcontactCaptchaInput" placeholder="Enter the CAPTCHA" maxlength="6" inputmode="numeric" autocomplete="off" aria-describedby="err-captcha">
            </div>
            <p class="qcontact-error" id="err-captcha"></p>
          </div>

          <button type="submit" class="qcontact-submit-btn" id="qcontactSubmit">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            <span id="qcontactSubmitText">Send Inquiry</span>
          </button>

          <p class="qcontact-terms">By submitting, you agree to our <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></p>
        </form>
      </div>

      <!-- Info panel -->
      <div class="qcontact-panel">
        <h3 class="qcontact-panel-title">Let's Connect</h3>
        <p class="qcontact-panel-desc">Have a question or a project in mind? Fill out the form and our team will get back to you within 24 hours.</p>

        <div class="qcontact-info-card">
          <div class="qcontact-info-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="#F97B30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 6c0 1.1-.9 2-2 2H4a2 2 0 0 1-2-2"/>
              <path d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6z"/>
              <polyline points="2 6 12 13 22 6"/>
            </svg>
          </div>
          <div>
            <p class="qcontact-info-label">MAIN EMAIL</p>
            <p class="qcontact-info-value qcontact-teal">info@kingdigital.in</p>
          </div>
          <div></div>
          <div>
            <p class="qcontact-info-label">Sales</p>
            <p class="qcontact-info-value qcontact-teal">support@kingdigital.in</p>
          </div>
        </div>

        <div class="qcontact-info-card">
          <div class="qcontact-info-icon">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.5 0-9.96 4.46-9.96 9.96 0 1.76.46 3.48 1.34 5L2 22l5.2-1.36a9.94 9.94 0 0 0 4.84 1.23h.01c5.5 0 9.96-4.46 9.96-9.96S17.54 2 12.04 2zm5.85 14.24c-.24.68-1.4 1.3-1.93 1.35-.5.05-1.02.24-3.43-.72-2.9-1.16-4.76-4.13-4.9-4.33-.14-.2-1.17-1.56-1.17-2.97 0-1.4.74-2.09 1-2.38.26-.28.57-.35.76-.35.19 0 .38 0 .55.01.18.01.42-.07.65.5.24.58.82 2 .89 2.15.07.15.12.32.02.52-.1.2-.15.32-.3.5-.15.18-.32.4-.45.53-.15.15-.31.31-.13.61.18.3.79 1.3 1.7 2.1 1.17 1.04 2.15 1.37 2.45 1.52.3.15.48.13.66-.08.18-.2.75-.87.95-1.17.2-.3.4-.25.66-.15.27.1 1.72.81 2.02.96.3.15.5.22.57.35.08.13.08.75-.16 1.43z"/></svg>
          </div>
          <div>
            <p class="qcontact-info-label">WHATSAPP</p>
            <p class="qcontact-info-value qcontact-teal">+91-9211-33-9966</p>
          </div>
          <div></div>
          <div>
            <p class="qcontact-info-label">Sales</p>
            <p class="qcontact-info-value qcontact-teal">+91-9210763636</p>
          </div>
        </div>

        <div class="qcontact-response-card">
          <div class="qcontact-response-head" style="justify-content:center;">
            <span>⏱️</span>
            <p class="qcontact-response-title">Scan To Connect ( 24 / 7 )</p>
          </div>
          <div class="qcontact-response-body" style="display:flex;align-items:center;justify-content:space-around;gap:40px;flex-wrap:wrap;">
            <div class="qr-code-container iauwe" style="flex-shrink:0;position:relative;">
              <img src="assets/whatsapp_qr_9641.png" alt="Scan QR Code" style="width:133px;height:151px;object-fit:contain;">
            </div>
            <div class="qr-code-container iauwe" style="flex-shrink:0;position:relative;">
              <img src="assets/contact-qr.jpg.jpeg" alt="Scan QR Code" style="width:133px;height:151px;object-fit:contain;">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
(function qcontactInit() {
  'use strict';

  /* ===== CONFIG =====
     Live karte waqt apna PHP endpoint yahan daalo, e.g. 'send-inquiry.php'
     Khali hai to form sirf demo success dikhayega (kuch bhejega nahi). */
  var ENDPOINT = '';
  var MIN_FILL_MS = 3000;   // 3 sec se pehle submit = bot
  var COOLDOWN_MS = 30000;  // dobara submit ke beech 30 sec

  var $ = function (id) { return document.getElementById(id); };
  var form = $('qcontactForm'), msgEl = $('qcontactFormMsg');
  var btn = $('qcontactSubmit'), btnText = $('qcontactSubmitText');
  var captchaEl = $('qcontactCaptchaCode'), captchaIn = $('qcontactCaptchaInput');
  var msgBox = $('qcontactMessage'), countEl = $('qcontactCount');
  var checks = form.querySelectorAll('input[name="interest"]');
  var captchaCode = '', loadedAt = Date.now(), lastSent = 0, submitting = false;

  /* ===== RULES: har rule error message return karta hai, sahi ho to '' ===== */
  var fields = {
    name: {
      el: $('qcontactName'), err: $('err-name'),
      get: function () { return this.el.value.replace(/\s+/g, ' ').trim(); },
      check: function (v) {
        if (!v) return 'Please enter your full name.';
        if (v.length < 2) return 'Name must be at least 2 characters.';
        if (v.length > 60) return 'Name must be 60 characters or less.';
        if (!/^[\p{L}][\p{L}\s.'\-]*$/u.test(v)) return "Name can only contain letters, spaces, . ' and -";
        return '';
      }
    },
    email: {
      el: $('qcontactEmail'), err: $('err-email'),
      get: function () { return this.el.value.trim(); },
      check: function (v) {
        if (!v) return 'Please enter your work email.';
        if (v.length > 100) return 'Email is too long.';
        if (/\.\./.test(v) || !/^[A-Za-z0-9._%+\-]+@[A-Za-z0-9\-]+(\.[A-Za-z0-9\-]+)*\.[A-Za-z]{2,}$/.test(v))
          return 'Enter a valid email, e.g. you@company.com';
        return '';
      }
    },
    phone: {
      el: $('qcontactPhone'), err: $('err-phone'),
      get: function () { return this.el.value.trim(); },
      check: function (v) {
        if (!v) return ''; // optional
        var n = v.replace(/[\s\-()]/g, '');
        if (/^(\d)\1+$/.test(n.replace(/^\+?91/, ''))) return 'Please enter a valid phone number.';
        if (/^(\+?91|0)?[6-9]\d{9}$/.test(n)) return '';
        if (/^\+[1-9]\d{7,14}$/.test(n)) return '';
        return 'Enter a valid 10-digit mobile number (or +country code number).';
      }
    },
    subject: {
      el: $('qcontactSubject'), err: $('err-subject'),
      get: function () { return this.el.value; },
      check: function (v) { return v ? '' : 'Please select a service.'; }
    },
    message: {
      el: msgBox, err: $('err-message'),
      get: function () { return this.el.value.trim(); },
      check: function (v) {
        if (!v) return 'Please write your message.';
        if (v.length < 10) return 'Message must be at least 10 characters.';
        if (v.length > 1000) return 'Message must be 1000 characters or less.';
        if ((v.match(/https?:\/\/|www\./gi) || []).length > 2) return 'Please remove extra links from the message.';
        return '';
      }
    },
    captcha: {
      el: captchaIn, err: $('err-captcha'),
      get: function () { return this.el.value.trim(); },
      check: function (v) {
        if (!v) return 'Please enter the CAPTCHA.';
        if (v !== captchaCode) return 'CAPTCHA does not match. Try again.';
        return '';
      }
    }
  };

  var interestErr = $('err-interest');
  function checkInterest() {
    for (var i = 0; i < checks.length; i++) if (checks[i].checked) return '';
    return 'Please select at least one option.';
  }

  /* ===== UI helpers ===== */
  function setError(f, text) {
    f.err.textContent = text;
    f.el.classList.toggle('qcontact-invalid', !!text);
    f.el.setAttribute('aria-invalid', text ? 'true' : 'false');
  }
  function validateField(key) {
    var f = fields[key], text = f.check(f.get());
    setError(f, text);
    return !text;
  }
  function validateInterest() {
    var text = checkInterest();
    interestErr.textContent = text;
    $('qcontactChecks').setAttribute('aria-invalid', text ? 'true' : 'false');
    return !text;
  }
  function showMsg(text, type) {
    msgEl.textContent = text;
    msgEl.className = 'qcontact-form-msg qcontact-msg-show ' + (type === 'success' ? 'qcontact-msg-success' : 'qcontact-msg-error');
  }
  function hideMsg() { msgEl.className = 'qcontact-form-msg'; msgEl.textContent = ''; }
  function newCaptcha() {
    var n = new Uint32Array(1);
    (window.crypto || window.msCrypto).getRandomValues(n);
    captchaCode = String(100000 + (n[0] % 900000));
    captchaEl.textContent = captchaCode;
    captchaIn.value = '';
  }
  function updateCount() { countEl.textContent = msgBox.value.length + ' / 1000'; }
  function clearAll() {
    Object.keys(fields).forEach(function (k) { setError(fields[k], ''); touched[k] = false; });
    interestErr.textContent = '';
  }

  /* ===== Live validation: blur par check, uske baad har keystroke par ===== */
  var touched = {};
  Object.keys(fields).forEach(function (key) {
    var el = fields[key].el;
    el.addEventListener('blur', function () {
      if (key === 'captcha' && !el.value) return;
      touched[key] = true; validateField(key);
    });
    el.addEventListener(key === 'subject' ? 'change' : 'input', function () {
      if (touched[key]) validateField(key);
    });
  });
  Array.prototype.forEach.call(checks, function (c) { c.addEventListener('change', validateInterest); });

  // Phone mein sirf allowed characters, captcha mein sirf digits
  fields.phone.el.addEventListener('input', function () { this.value = this.value.replace(/[^\d+\s\-()]/g, ''); });
  captchaIn.addEventListener('input', function () { this.value = this.value.replace(/\D/g, ''); });
  msgBox.addEventListener('input', updateCount);

  /* ===== Submit ===== */
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (submitting) return;
    hideMsg();

    // Saari fields check karo (sab ek saath dikhao)
    var firstBad = null;
    Object.keys(fields).forEach(function (key) {
      touched[key] = true;
      if (!validateField(key) && !firstBad) firstBad = fields[key].el;
    });
    if (!validateInterest() && !firstBad) firstBad = checks[0];

    if (firstBad) {
      showMsg('Please fix the highlighted fields and try again.', 'error');
      firstBad.focus();
      // CAPTCHA galat type hua ho to naya code de do
      if (captchaIn.value && captchaIn.value !== captchaCode) newCaptchaKeepUi();
      return;
    }

    // Honeypot: bot ko chup-chaap fake success
    if ($('qcontactWebsite').value) { showMsg('Thanks! Your inquiry has been sent.', 'success'); form.reset(); newCaptcha(); updateCount(); return; }

    if (Date.now() - loadedAt < MIN_FILL_MS) { showMsg('Please take a moment to review your details and submit again.', 'error'); return; }
    if (Date.now() - lastSent < COOLDOWN_MS) { showMsg('Please wait a few seconds before sending another inquiry.', 'error'); return; }

    var data = {
      fullName: fields.name.get(),
      workEmail: fields.email.get(),
      phone: fields.phone.get().replace(/[\s\-()]/g, ''),
      subject: fields.subject.get(),
      message: fields.message.get(),
      interest: Array.prototype.filter.call(checks, function (c) { return c.checked; }).map(function (c) { return c.value; })
    };

    submitting = true; btn.disabled = true; btnText.textContent = 'Sending...';

    var send = ENDPOINT
      ? fetch(ENDPOINT, { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(data) })
          .then(function (r) { if (!r.ok) throw new Error('Server error'); })
      : new Promise(function (res) { setTimeout(res, 700); });

    send.then(function () {
      lastSent = Date.now();
      showMsg("Thanks! Your inquiry has been sent — we'll get back to you within 24 hours.", 'success');
      form.reset(); clearAll(); newCaptcha(); updateCount(); loadedAt = Date.now();
    }).catch(function () {
      showMsg('Something went wrong. Please try again or call us directly.', 'error');
    }).then(function () {
      submitting = false; btn.disabled = false; btnText.textContent = 'Send Inquiry';
    });
  });

  // Galat CAPTCHA ke baad naya code (error message wahi rehta hai)
  function newCaptchaKeepUi() { var msg = fields.captcha.err.textContent; newCaptcha(); fields.captcha.err.textContent = msg; }

  newCaptcha();
  updateCount();
})();
</script>