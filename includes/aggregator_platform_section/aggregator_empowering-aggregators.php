<style>
  .qscale-wrap {
    background: #f1f1f1;
    font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    padding: 90px 20px;
  }

  .qscale-inner {
    max-width: 1180px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
  }

  /* ---------- Left column ---------- */

  .qscale-title {
    font-size: 42px;
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.5px;
    color: #171a2b;
    margin: 0 0 22px;
    opacity: 0;
    transform: translateY(20px);
    animation: qscaleFadeUp 0.7s ease forwards;
  }

  .qscale-title-accent {
    display: block;
    background: linear-gradient(to bottom, #0A5CFF 0%, #0A5CFF 70%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }

  .qscale-desc {
    font-size: 15.5px;
    line-height: 1.75;
    color: #5c6178;
    max-width: 500px;
    margin: 0 0 40px;
    opacity: 0;
    transform: translateY(20px);
    animation: qscaleFadeUp 0.7s ease forwards 0.12s;
  }

  @keyframes qscaleFadeUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* ---------- Feature grid ---------- */

  .qscale-features {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px 28px;
  }

  .qscale-feature {
    opacity: 0;
    transform: translateY(20px);
  }

  .qscale-feature.qscale-in-view {
    animation: qscaleFadeUp 0.55s ease forwards;
  }

  .qscale-feature-icon {
    width: 46px;
    height: 46px;
    border-radius: 12px;
    background: #eef0fe;
    color: #0A5CFF;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), background 0.3s ease;
  }

  .qscale-feature:hover .qscale-feature-icon {
    transform: rotate(-8deg) scale(1.1);
    background: linear-gradient(to bottom, #0A5CFF 0%, #0A5CFF 70%);
    color: #ffffff;
  }

  .qscale-feature-icon svg {
    width: 22px;
    height: 22px;
  }

  .qscale-feature-title {
    font-size: 16.5px;
    font-weight: 700;
    color: #171a2b;
    margin: 0 0 8px;
  }

  .qscale-feature-desc {
    font-size: 13.5px;
    line-height: 1.6;
    color: #6b6f85;
    margin: 0;
  }

  /* ---------- Right column (image) ---------- */

  .qscale-visual {
    position: relative;
    background: #ffffff;
    border: 1px solid #ececf5;
    border-radius: 26px;
    padding: 22px;
    box-shadow: 0 24px 60px rgba(30, 34, 90, 0.1);
    opacity: 0;
    transform: translateY(24px) scale(0.98);
    animation: qscaleVisualIn 0.8s ease forwards 0.15s;
  }

  @keyframes qscaleVisualIn {
    from {
      opacity: 0;
      transform: translateY(24px) scale(0.98);
    }

    to {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  .qscale-visual-glow {
    position: absolute;
    top: -40px;
    right: -40px;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(91, 75, 245, 0.12), transparent 70%);
    pointer-events: none;
    z-index: 0;
    animation: qscaleFloat 6s ease-in-out infinite;
  }

  @keyframes qscaleFloat {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-16px);
    }
  }

  .qscale-visual-img {
    position: relative;
    z-index: 1;
    width: 100%;
    height: auto;
    display: block;
    border-radius: 16px;
  }

  /* ---------- Responsive ---------- */

  @media (max-width: 980px) {
    .qscale-inner {
      grid-template-columns: 1fr;
      gap: 44px;
    }

    .qscale-title {
      font-size: 34px;
    }

    .qscale-visual {
      order: -1;
      max-width: 480px;
      margin: 0 auto;
    }
  }

  @media (max-width: 620px) {
    .qscale-wrap {
      padding: 60px 18px;
    }

    .qscale-title {
      font-size: 27px;
    }

    .qscale-desc {
      font-size: 14px;
    }

    .qscale-features {
      grid-template-columns: 1fr;
      gap: 26px;
    }

    .qscale-visual {
      padding: 16px;
      border-radius: 20px;
    }
  }

  @media (prefers-reduced-motion: reduce) {

    .qscale-title,
    .qscale-desc,
    .qscale-feature,
    .qscale-visual,
    .qscale-visual-glow {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }

    .qscale-feature:hover .qscale-feature-icon {
      transform: none;
    }
  }



  .decor-hero-ring22 {
    position: absolute;
    bottom: -90px;
    right: -90px;
    width: 300px;
    height: 300px;
    border: 2px dashed var(--ivr-primary-light, #818CF8);
    border-radius: 50%;
    opacity: .3;
    z-index: 0;
    pointer-events: none;
    animation: hero-ring-spin 20s linear infinite;
  }

  .decor-hero-ring23 {
    position: absolute;
    top: -90px;
    right: -90px;
    width: 300px;
    height: 300px;
    border: 2px dashed var(--ivr-primary-light, #818CF8);
    border-radius: 50%;
    opacity: .3;
    z-index: 0;
    pointer-events: none;
    animation: hero-ring-spin 20s linear infinite;
  }

  .decor-hero-ring22::before {
    content: '';
    position: absolute;
    inset: 34px;
    border: 2px dashed #22D3EE;
    border-radius: 50%;
    opacity: .6;
  }

  .decor-hero-ring23::after {
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



  .decor-hero-orb.o21 {
    width: 14px;
    height: 14px;
    top: 40px;
    left: 70px;
    background: #8B5CF6;
    opacity: .5;
    animation: hero-orb-1 5s ease-in-out infinite;
    position: absolute;
    border-radius: 50%;
  }

  .decor-hero-orb.o22 {
    position: absolute;
    width: 9px;
    height: 9px;
    bottom: 100px;
    left: 70px;
    background: #22D3EE;
    opacity: .5;
    animation: hero-orb-2 6s ease-in-out infinite .3s;
    border-radius: 50%;
  }

  .decor-hero-orb.o23 {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 200px;
    left: 53px;
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

  .sdiasdojo {
    position: relative;
    overflow: hidden;
  }
</style>

<section class="qscale-wrap sdiasdojo">

  <div class="decor-hero-ring22"></div>
  <div class="decor-hero-ring23"></div>
  <div class="decor-hero-orb o21"></div>
  <div class="decor-hero-orb o22"></div>
  <div class="decor-hero-orb o23"></div>
  <div class="qscale-inner">

    <div class="qscale-left">
      <h3 class="qscale-title">Empowering Aggregators <span class="qscale-title-accent">with Next-Gen Tech</span></h3>
      <p class="qscale-desc">Step into the future of communication with a platform built for high-volume aggregators. Our solution provides the scale, security, and flexibility you need to dominate the market and deliver exceptional value to your partners.</p>

      <div class="qscale-features" id="qscaleFeatures">

        <!-- card 1 -->
        <div class="qscale-feature">
          <div class="qscale-feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-6 h-6">
              <circle cx="12" cy="8" r="6"></circle>
              <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
            </svg>
          </div>
          <h3 class="qscale-feature-title">White-Label Excellence</h3>
          <p class="qscale-feature-desc">Full branding control for a professional market presence.</p>
        </div>

        <!-- card 2 -->
        <div class="qscale-feature">
          <div class="qscale-feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock w-6 h-6">
              <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
          </div>
          <h3 class="qscale-feature-title">Data Independence</h3>
          <p class="qscale-feature-desc">Your data, your server, your rules. Total ownership.</p>
        </div>

        <!-- card 3 -->
        <div class="qscale-feature">
          <div class="qscale-feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layers w-6 h-6">
              <path d="m12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83Z"></path>
              <path d="m22 17.65-9.17 4.16a2 2 0 0 1-1.66 0L2 17.65"></path>
              <path d="m22 12.65-9.17 4.16a2 2 0 0 1-1.66 0L2 12.65"></path>
            </svg>
          </div>
          <h3 class="qscale-feature-title">Multi-Channel Power</h3>
          <p class="qscale-feature-desc">SMS, RCS, WhatsApp, and Voice in one unified system.</p>
        </div>

        <!-- card 4 -->
        <div class="qscale-feature">
          <div class="qscale-feature-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-6 h-6">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
            </svg>
          </div>
          <h3 class="qscale-feature-title">Rapid Deployment</h3>
          <p class="qscale-feature-desc">Go live in days with our streamlined setup process.</p>
        </div>

      </div>
    </div>

    <div class="qscale-visual">
      <div class="qscale-visual-glow"></div>
      <!-- Replace the src below with the path to your illustration image -->
      <img class="qscale-visual-img" src="assets/images/Empowering_Aggregators.png" alt="Bulk SMS communication and analytics illustration">
    </div>

  </div>
</section>

<script>
  (function qscaleInit() {
    var qscaleFeatureEls = document.querySelectorAll('.qscale-feature');

    var qscaleObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry, i) {
        if (entry.isIntersecting) {
          setTimeout(function() {
            entry.target.classList.add('qscale-in-view');
          }, i * 80);
          qscaleObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.2
    });

    qscaleFeatureEls.forEach(function(el) {
      qscaleObserver.observe(el);
    });
  })();
</script>