<style>
  .qscale-wrap {
    background: #ffffff;
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
      <h2 class="qscale-title">Scale Your Reach with<span class="qscale-title-accent">Bulk SMS Precision</span></h2>
      <p class="qscale-desc">Experience high-volume messaging that doesn't compromise on speed or reliability. Our enterprise-grade gateway ensures your time-sensitive alerts and marketing campaigns reach their destination in seconds.</p>

      <div class="qscale-features" id="qscaleFeatures">

        <div class="qscale-feature">
          <div class="qscale-feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <line x1="2" y1="12" x2="22" y2="12" />
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
            </svg>
          </div>
          <h3 class="qscale-feature-title">Global Coverage</h3>
          <p class="qscale-feature-desc">Reach customers in over 190 countries with direct carrier connections.</p>
        </div>

        <div class="qscale-feature">
          <div class="qscale-feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
          </div>
          <h3 class="qscale-feature-title">OTP Specialized</h3>
          <p class="qscale-feature-desc">Prioritized routing for ultra-fast OTP and 2FA authentication.</p>
        </div>

        <div class="qscale-feature">
          <div class="qscale-feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="18" y1="20" x2="18" y2="10" />
              <line x1="12" y1="20" x2="12" y2="4" />
              <line x1="6" y1="20" x2="6" y2="14" />
            </svg>
          </div>
          <h3 class="qscale-feature-title">Real-Time Insights</h3>
          <p class="qscale-feature-desc">Track every message with detailed delivery reports and analytics.</p>
        </div>

        <div class="qscale-feature">
          <div class="qscale-feature-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <polyline points="9 12 11 14 15 10" />
            </svg>
          </div>
          <h3 class="qscale-feature-title">DLT Assistance</h3>
          <p class="qscale-feature-desc">Complete support for DLT registration and template management.</p>
        </div>

      </div>
    </div>

    <div class="qscale-visual">
      <div class="qscale-visual-glow"></div>
      <!-- Replace the src below with the path to your illustration image -->
      <img class="qscale-visual-img" src="assets/images/bluk_sms_severc.png" alt="Bulk SMS communication and analytics illustration">
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