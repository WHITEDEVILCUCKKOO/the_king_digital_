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
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-4 h-4 text-blue-700">
        <circle cx="12" cy="12" r="10"></circle>
        <circle cx="12" cy="12" r="6"></circle>
        <circle cx="12" cy="12" r="2"></circle>
      </svg>
      Key Highlights
    </div>

    <h1 class="asdihas7121we">Why Choose <em> Our Platform</em></h1>
    <p class="subtitle">Complete communication infrastructure designed for aggregators and service providers</p>

    <div class="grid">

      <!-- card 1 -->
      <div class="card1298he">
        <div class="icon magenta">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-8 h-8 text-white">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
            <path d="M2 12h20"></path>
          </svg>
        </div>
        <h3>End-to-End Communication Suite</h3>
        <p>Fully enables you to provide comprehensive messaging and voice services to your clients</p>
      </div>

      <!-- card 2 -->
      <div class="card1298he">
        <div class="icon blue">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers w-8 h-8 text-white">
            <path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path>
            <path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"></path>
            <path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"></path>
          </svg>
        </div>
        <h3>On-Premises or VPS Deployment</h3>
        <p>Hosted securely on your own server for maximum data ownership and privacy</p>
      </div>

      <!-- card 3 -->
      <div class="card1298he">
        <div class="icon violet">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-8 h-8 text-white">
            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
            <polyline points="16 7 22 7 22 13"></polyline>
          </svg>
        </div>
        <h3>Scalable Architecture</h3>
        <p>Designed to grow with your business and support additional channels in the future</p>
      </div>

      <!-- card 4 -->
      <div class="card1298he">
        <div class="icon orange">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="#f4f5f8">
            <path d="M160 96C124.7 96 96 124.7 96 160L96 224C96 259.3 124.7 288 160 288L480 288C515.3 288 544 259.3 544 224L544 160C544 124.7 515.3 96 480 96L160 96zM376 168C389.3 168 400 178.7 400 192C400 205.3 389.3 216 376 216C362.7 216 352 205.3 352 192C352 178.7 362.7 168 376 168zM432 192C432 178.7 442.7 168 456 168C469.3 168 480 178.7 480 192C480 205.3 469.3 216 456 216C442.7 216 432 205.3 432 192zM160 352C124.7 352 96 380.7 96 416L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 416C544 380.7 515.3 352 480 352L160 352zM376 424C389.3 424 400 434.7 400 448C400 461.3 389.3 472 376 472C362.7 472 352 461.3 352 448C352 434.7 362.7 424 376 424zM432 448C432 434.7 442.7 424 456 424C469.3 424 480 434.7 480 448C480 461.3 469.3 472 456 472C442.7 472 432 461.3 432 448z"></path>
          </svg>
        </div>
        <h3>All Channels Under One Roof</h3>
        <p>Consolidates SMS, RCS, WhatsApp, and Voice within a unified platform</p>
      </div>

      <!-- card 5 -->
      <div class="card1298he">
        <div class="icon green">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings w-8 h-8 text-white">
            <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
            <circle cx="12" cy="12" r="3"></circle>
          </svg>
        </div>
        <h3>Centralized Administration</h3>
        <p>Streamlined dashboard for customer management, reporting, monitoring, and service delivery</p>
      </div>



      <!-- card 6 -->
      <!-- <div class="card1298he">
        <div class="icon pink">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M8 6l-6 6 6 6M16 6l6 6-6 6" />
          </svg>
        </div>
        <h3>Developer Friendly API</h3>
        <p>RESTful SMS API, SDKs in multiple languages, webhooks, and Postman collection</p>
      </div> -->

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