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

  .asdihas7121we em {
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
    box-shadow:
      0 10px 15px -3px rgb(0 0 0 / 10%),
      0 4px 6px -4px rgb(0 0 0 / 10%);
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
    /* background: #f1f1f1; */
    font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    padding: 80px 24px;
    /* box-shadow: var(0 0 #0000, 0 0 #0000), var( 0 0 #0000;, 0 0 #0000), var(--tw-shadow); */

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
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-briefcase w-4 h-4 text-green-700">
        <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
      </svg>
      Business Advantages
    </div>

    <h1 class="asdihas7121we">Drive Your <em> Business Forward</em></h1>
    <p class="subtitle">Strategic benefits that give you competitive edge in the market</p>

    <div class="grid">

      <!-- card 1 -->
      <div class="card1298he">
        <div class="icon magenta">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock w-8 h-8 text-white"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
        </div>
        <h3>Total Control</h3>
        <p>Maintain full ownership over all communication channels and data</p>
      </div>

      <!-- card 2 -->
      <div class="card1298he">
        <div class="icon blue">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-8 h-8 text-white"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
        </div>
        <h3>No Third-Party Dependency</h3>
        <p>Operate independently without relying on external platforms or service providers</p>
      </div>

      <!-- card 3 -->
      <div class="card1298he">
        <div class="icon violet">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers w-8 h-8 text-white"><path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path><path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"></path><path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"></path></svg>
        </div>
        <h3>Unified Customer Offering</h3>
        <p>Deliver SMS, RCS, WhatsApp, and Voice from a single, professional system</p>
      </div>

      <!-- card 4 -->
      <div class="card1298he">
        <div class="icon orange">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign w-8 h-8 text-white"><line x1="12" x2="12" y1="2" y2="22"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
        </div>
        <h3>Cost Efficiency</h3>
        <p>Reduce operational expenses associated with multiple disconnected tools or vendors</p>
      </div>

      <!-- card 5 -->
      <div class="card1298he">
        <div class="icon green">
          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity w-8 h-8 text-white"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
        </div>
        <h3>High Reliability</h3>
        <p>Stable, scalable, and performance-driven architecture ensures uninterrupted service</p>
      </div>

      <!-- card 6 -->
      <div class="card1298he">
        <div class="icon pink">
          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-8 h-8 text-white"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg>
        </div>
        <h3>Enhanced Brand Value</h3>
        <p>Strengthen your brand by offering a robust, end-to-end communication suite</p>
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