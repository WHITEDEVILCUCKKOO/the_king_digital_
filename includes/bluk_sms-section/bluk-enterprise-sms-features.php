<style>
  :root {
    --bg: #f4f6fb;
    --purple: #6d28d9;
    --purple-dark: #4c1d95;
    --text-dark: #1a1a2e;
    --text-body: #4b5563;
    --card-bg: #ffffff;
    --badge-bg: #e9e6fb;
    --badge-text: #5b21b6;
  }

  .wrap {
    max-width: 1120px;
    margin: 0 auto;
    text-align: center;
  }

  .badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #07355f21;
    color: #2b4e95;
    font-size: 14px;
    font-weight: 600;
    padding: 8px 18px;
    border-radius: 999px;
    margin-bottom: 28px;
  }

  .badge svg {
    width: 16px;
    height: 16px;
  }

  .asdihas7121we {
    font-size: 44px;
    font-weight: 800;

    line-height: 1.15;
    margin-bottom: 20px;
  }

  .asdihas7121we em{
    background: linear-gradient(to bottom, #0A5CFF 0%, #0A5CFF 70%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-style: normal;
  }

  .subtitle {
    font-size: 15px;
    color: var(--text-body);
    max-width: 640px;
    margin: 0 auto 56px;
    line-height: 1.6;
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    text-align: left;
  }

  .card1298he {
    background: var(--card-bg);
    border-radius: 16px;
    padding: 32px;
    box-shadow: 0 1px 3px rgba(20, 20, 50, 0.06);
    position: relative;
    overflow: hidden;
  }

  /* ================================
   SNAKE BORDER
================================ */

  @property --snake-angle {
    syntax: "<angle>";
    initial-value: 0deg;
    inherits: false;
  }

  .card1298he::before {
    content: "";
    position: absolute;
    inset: 0;
    padding: 2px;
    border-radius: 16px;

    background: conic-gradient(from var(--snake-angle),
        transparent 0deg,
        transparent 270deg,
        rgba(60, 95, 165, 0.2) 285deg,
        #3c5fa5 310deg,
        #082a6e 345deg,
        transparent 360deg);

    -webkit-mask:
      linear-gradient(#fff 0 0) content-box,
      linear-gradient(#fff 0 0);

    -webkit-mask-composite: xor;

    mask:
      linear-gradient(#fff 0 0) content-box,
      linear-gradient(#fff 0 0);

    mask-composite: exclude;

    opacity: 0;
    pointer-events: none;
    z-index: 10;
  }

  .card1298he:hover::before {
    opacity: 1;
    animation: snakeBorderMove 1.5s linear infinite;
  }


  @keyframes snakeBorderMove {

    from {
      --snake-angle: 0deg;
    }

    to {
      --snake-angle: 360deg;
    }

  }

  .icon {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 22px;
  }

  .icon svg {
    width: 26px;
    height: 26px;
    color: #fff;
  }

  .icon.orange {
    background: linear-gradient(135deg, #fb923c, #f97316);
  }

  .icon.blue {
    background: linear-gradient(135deg, #3b82f6, #2563eb);
  }

  .icon.green {
    background: linear-gradient(135deg, #10b981, #059669);
  }

  .icon.magenta {
    background: linear-gradient(135deg, #d946ef, #c026d3);
  }

  .icon.violet {
    background: linear-gradient(135deg, #8b5cf6, #7c3aed);
  }

  .icon.pink {
    background: linear-gradient(135deg, #f43f5e, #e11d48);
  }

  .card1298he h3 {
    font-size: 20px;
    font-weight: 700;
    color: var(--text-dark);
    margin-bottom: 10px;
  }

  .card1298he p {
    font-size: 15px;
    color: var(--text-body);
    line-height: 1.6;
  }

  @media (max-width:900px) {
    .grid {
      grid-template-columns: 1fr 1fr;
    }

    .asdihas7121we {
      font-size: 34px;
    }
  }

  @media (max-width:600px) {
    .grid {
      grid-template-columns: 1fr;
    }

    .asdihas7121we {
      font-size: 28px;
    }

    body {
      padding: 48px 16px;
    }
  }

  /* green cursor-follow glow — spreads outward from wherever the cursor enters the card */
  .icp-cursor-glow {
    position: absolute;
    left: 0;
    top: 0;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    background: radial-gradient(circle, rgba(34, 64, 197, 0.2) 0%, rgba(45, 91, 190, 0.22) 30%, rgba(34, 91, 197, 0.08) 55%, rgba(34, 72, 197, 0) 72%);
    opacity: 0;
    pointer-events: none;
    transition: opacity .35s ease;
    z-index: 0;
  }


  .bluk-enterprise-sms-features {
    background: #f1f1f1;
    font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    padding: 80px 24px;
  }

  .effect_version_20 {
    position: relative;
    overflow: hidden;
  }


  .decor-hero-ring {
    position: absolute;
    top: -90px;
    left: -90px;
    width: 300px;
    height: 300px;
    border: 2px dashed var(--ivr-primary-light, #818CF8);
    border-radius: 50%;
    opacity: .3;
    z-index: 1;
    pointer-events: none;
    animation: hero-ring-spin 20s linear infinite;
  }

  .decor-hero-ring::before {
    content: '';
    position: absolute;
    inset: 34px;
    border: 2px dashed #22D3EE;
    border-radius: 50%;
    opacity: .6;
  }


  @keyframes hero-ring-spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  .decor-hero-orb.o1 {
    width: 14px;
    height: 14px;
    top: 40px;
    right: 70px;
    background: #8B5CF6;
    opacity: .5;
    animation: hero-orb-1 5s ease-in-out infinite;
    position: absolute;
    border-radius: 50%;
  }

  .decor-hero-orb.o2 {
    position: absolute;
    width: 9px;
    height: 9px;
    bottom: 100px;
    right: 20px;
    background: #22D3EE;
    opacity: .5;
    animation: hero-orb-2 6s ease-in-out infinite .3s;
    border-radius: 50%;
  }

  .decor-hero-orb.o3 {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 200px;
    right: -10px;
    background: #2563EB;
    opacity: .3;
    animation: hero-orb-1 7s ease-in-out infinite .6s;
    border-radius: 50%;
  }


  @keyframes hero-orb-1 {

    0%,
    100% {
      transform: translate(0, 0);
    }

    50% {
      transform: translate(-10px, -14px);
    }
  }

  @keyframes hero-orb-2 {

    0%,
    100% {
      transform: translate(0, 0);
    }

    50% {
      transform: translate(-8px, 10px);
    }
  }

  .decor-hero-grid {
    position: absolute;
    bottom: -20px;
    right: -20px;
    width: 260px;
    height: 220px;
    background-image: radial-gradient(circle, #4F46E5 1.6px, transparent 1.6px);
    background-size: 24px 24px;
    -webkit-mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
    mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
    opacity: .28;
    z-index: 0;
    pointer-events: none;
    animation: hero-grid-shift 9s ease-in-out infinite;
  }


  @keyframes hero-grid-shift {

    0%,
    100% {
      background-position: 0 0;
    }

    50% {
      background-position: 8px -8px;
    }
  }

  .decor-hero-glow1 {
    position: absolute;
    top: -180px;
    left: -160px;
    width: 480px;
    height: 480px;
    border-radius: 50%;
    background: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
    opacity: .18;
    filter: blur(60px);
    z-index: 0;
    pointer-events: none;
    animation: hero-glow-drift 12s ease-in-out infinite;
  }


  @keyframes hero-glow-drift {

    0%,
    100% {
      transform: translate(0, 0) scale(1);
    }

    50% {
      transform: translate(30px, 20px) scale(1.08);
    }
  }
</style>

<section class="bluk-enterprise-sms-features effect_version_20">
  <div class="decor-hero-glow1"></div>
  <div class="decor-hero-ring"></div>
  <div class="decor-hero-orb o1"></div>
  <div class="decor-hero-orb o2"></div>
  <div class="decor-hero-orb o3"></div>
  <div class="decor-hero-grid"></div>


  <div class="wrap">
    <div class="badge">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M22 2L11 13" />
        <path d="M22 2l-7 20-4-9-9-4 20-7z" />
      </svg>
      Enterprise SMS Features
    </div>

    <h1 class="asdihas7121we">Power Your <em>Business with Bulk SMS</em></h1>
    <p class="subtitle">Industry-leading bulk SMS gateway built for scale, fast delivery, DLT compliance, and enterprise reliability</p>

    <div class="grid">
      <div class="card1298he">
        <div class="icon orange">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z" />
          </svg>
        </div>
        <h3>Lightning Fast Delivery</h3>
        <p>Send millions of bulk SMS in seconds with 98.9% delivery rate and sub-3s OTP delivery</p>
      </div>

      <div class="card1298he">
        <div class="icon blue">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10" />
            <path d="M2 12h20M12 2a15 15 0 010 20M12 2a15 15 0 000 20" />
          </svg>
        </div>
        <h3>Global Reach</h3>
        <p>Connect with customers in 195+ countries — trusted international SMS gateway</p>
      </div>

      <div class="card1298he">
        <div class="icon green">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 2l8 3v6c0 5-3.5 9-8 11-4.5-2-8-6-8-11V5l8-3z" />
          </svg>
        </div>
        <h3>DLT Compliant &amp; Secure</h3>
        <p>End-to-end encryption, TRAI DLT registration, GDPR &amp; CCPA compliant SMS platform</p>
      </div>

      <div class="card1298he">
        <div class="icon magenta">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="9" />
            <circle cx="12" cy="12" r="5" />
            <circle cx="12" cy="12" r="1" />
          </svg>
        </div>
        <h3>Smart Routing</h3>
        <p>Intelligent carrier selection for best bulk SMS delivery and lowest latency</p>
      </div>

      <div class="card1298he">
        <div class="icon violet">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 3v18h18" />
            <rect x="7" y="12" width="3" height="6" />
            <rect x="12" y="8" width="3" height="10" />
            <rect x="17" y="5" width="3" height="13" />
          </svg>
        </div>
        <h3>Real-Time Analytics</h3>
        <p>Live DLR tracking, delivery reports, and campaign analytics dashboard</p>
      </div>

      <div class="card1298he">
        <div class="icon pink">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M8 6l-6 6 6 6M16 6l6 6-6 6" />
          </svg>
        </div>
        <h3>Developer Friendly API</h3>
        <p>RESTful SMS API, SDKs in multiple languages, webhooks, and Postman collection</p>
      </div>
    </div>
  </div>
</section>

<script>
  (function() {
    "use strict";

    var icpCards = document.querySelectorAll('.card1298he');
    var icpGlowRadius = 230; // px — soft green glow that spreads out from the cursor's corner
    var icpMaxTilt = 12; // deg — max corner tilt

    icpCards.forEach(function(card) {

      // create the green cursor-follow glow layer once per card
      var icpGlow = document.createElement('div');
      icpGlow.className = 'icp-cursor-glow';
      icpGlow.style.width = (icpGlowRadius * 0.5) + 'px';
      icpGlow.style.height = (icpGlowRadius * 0.5) + 'px';
      card.appendChild(icpGlow);

      card.addEventListener('mousemove', function(e) {
        var rect = card.getBoundingClientRect();
        var x = e.clientX - rect.left;
        var y = e.clientY - rect.top;

        // 3D tilt — rotate toward whichever corner/edge the cursor is near
        var px = (x / rect.width) - 0.5; // -0.5 .. 0.5
        var py = (y / rect.height) - 0.5; // -0.5 .. 0.5
        var rotateY = px * icpMaxTilt * 2;
        var rotateX = py * -icpMaxTilt * 2;
        card.style.transform =
          'perspective(800px) rotateX(' + rotateX.toFixed(2) + 'deg) rotateY(' + rotateY.toFixed(2) + 'deg) translateZ(-6px) translateY(-4px)';

        // green glow following the cursor, clipped to a 50px radius
        icpGlow.style.left = x + 'px';
        icpGlow.style.top = y + 'px';
        icpGlow.style.opacity = '1';
      });

      card.addEventListener('mouseleave', function() {
        card.style.transform = '';
        icpGlow.style.opacity = '0';
      });
    });

  })();
</script>