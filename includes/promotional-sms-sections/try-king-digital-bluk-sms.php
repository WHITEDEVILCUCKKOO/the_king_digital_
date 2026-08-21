<style>
  #kdFreeBulkSmsTrial {
    --kd-primary: #b61f29;
    --kd-primary-dark: #961922;
    --kd-primary-soft: #f8eaeb;
    --kd-navy: #000000;
    --kd-text: #657084;
    --kd-light-text: #8b95a3;
    --kd-border: #e7eaf0;
    --kd-white: #ffffff;
    --kd-soft-bg: #f8f9fb;

    position: relative;
    width: 100%;
    padding: 58px 25px;
    overflow: hidden;


    background-color: #7b7b7b1a;
    /* background:
      radial-gradient(circle at 95% 15%,
        rgba(182, 31, 41, 0.05) 0,
        transparent 24%),
      radial-gradient(circle at 5% 90%,
        rgba(182, 31, 41, 0.035) 0,
        transparent 22%),
      #ffffff; */


  }


  /* =========================================================
MAIN CONTAINER
========================================================= */

  #kdFreeBulkSmsTrial .kd-free-trial-container {
    width: 100%;
    max-width: 1240px;
    margin: 0 auto;

    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(420px, 0.9fr);
    align-items: center;
    gap: 70px;
  }


  /* =========================================================
LEFT CONTENT
========================================================= */

  #kdFreeBulkSmsTrial .kd-free-trial-content {
    min-width: 0;
  }


  /* LABEL */

  #kdFreeBulkSmsTrial .kd-free-trial-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    padding: 8px 13px;
    margin-bottom: 17px;

    border: 1px solid rgba(182, 31, 41, 0.14);
    border-radius: 7px;

    background: var(--kd-primary-soft);
    color: var(--kd-primary);

    font-size: 10px;
    font-weight: 800;
    letter-spacing: 0.8px;
  }

  #kdFreeBulkSmsTrial .kd-free-trial-label-icon {
    font-size: 13px;
    line-height: 1;
  }


  /* HEADING */

  #kdFreeBulkSmsTrial .kd-free-trial-content h2 {
    max-width: 650px;
    margin: 0;

    color: var(--kd-navy);

    font-size: clamp(32px, 3.6vw, 44px);
    line-height: 1.14;

    font-weight: 800;
    letter-spacing: -1.3px;
  }

  #kdFreeBulkSmsTrial .kd-free-trial-content h2 span {
    display: block;
    margin-top: 4px;

    color: var(--kd-primary);
  }


  /* INTRO */

  #kdFreeBulkSmsTrial .kd-free-trial-intro {
    max-width: 600px;

    margin: 18px 0 0;

    color: var(--kd-text);

    font-size: 15px;
    line-height: 1.75;
  }


  /* =========================================================
BENEFITS
========================================================= */

  #kdFreeBulkSmsTrial .kd-free-trial-benefits {
    display: grid;
    gap: 14px;

    margin-top: 25px;
  }

  #kdFreeBulkSmsTrial .kd-free-trial-benefit {
    display: flex;
    align-items: flex-start;
    gap: 11px;
  }

  #kdFreeBulkSmsTrial .kd-free-benefit-icon {
    width: 25px;
    height: 25px;

    flex: 0 0 25px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-top: 1px;

    border-radius: 50%;

    color: #ffffff;
    background: linear-gradient(135deg,
        #c72b35,
        #a81721);

    box-shadow: 0 7px 16px rgba(182, 31, 41, 0.14);

    font-size: 11px;
    font-weight: 800;
  }

  #kdFreeBulkSmsTrial .kd-free-benefit-text strong {
    display: block;

    margin-bottom: 3px;

    color: #000000;

    font-size: 13px;
    font-weight: 700;
  }

  #kdFreeBulkSmsTrial .kd-free-benefit-text span {
    display: block;

    color: var(--kd-light-text);

    font-size: 11px;
    line-height: 1.55;
  }


  /* =========================================================
CTA
========================================================= */

  #kdFreeBulkSmsTrial .kd-free-trial-actions {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;

    margin-top: 27px;
  }

  #kdFreeBulkSmsTrial .kd-free-trial-btn {
    min-height: 43px;

    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;

    padding: 10px 18px;

    border-radius: 8px;

    background: linear-gradient(135deg,
        #c52b35,
        #a81721);

    color: #ffffff !important;

    box-shadow: 0 10px 22px rgba(182, 31, 41, 0.18);

    text-decoration: none !important;

    font-size: 12px;
    font-weight: 700;

    transition:
      transform 0.25s ease,
      box-shadow 0.25s ease;
  }

  #kdFreeBulkSmsTrial .kd-free-trial-btn:hover {
    color: #ffffff !important;

    transform: translateY(-3px);

    box-shadow: 0 15px 28px rgba(182, 31, 41, 0.25);
  }

  #kdFreeBulkSmsTrial .kd-free-trial-btn span {
    font-size: 17px;
    line-height: 1;
  }

  #kdFreeBulkSmsTrial .kd-free-trial-note {
    display: flex;
    align-items: center;
    gap: 7px;

    color: #7e8895;

    font-size: 10px;
    font-weight: 600;
  }

  #kdFreeBulkSmsTrial .kd-free-note-check {
    width: 17px;
    height: 17px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    color: var(--kd-primary);
    background: var(--kd-primary-soft);

    font-size: 9px;
    font-weight: 800;
  }


  /* =========================================================
RIGHT VISUAL
========================================================= */

  #kdFreeBulkSmsTrial .kd-free-trial-visual {
    position: relative;

    min-height: 390px;

    display: flex;
    align-items: center;
    justify-content: center;
  }


  /* BACKGROUND SHAPES */

  #kdFreeBulkSmsTrial .kd-free-visual-shape {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
  }

  #kdFreeBulkSmsTrial .kd-free-shape-one {
    width: 330px;
    height: 330px;

    background:
      radial-gradient(circle,
        rgba(182, 31, 41, 0.09),
        rgba(182, 31, 41, 0.025) 60%,
        transparent 70%);
  }

  #kdFreeBulkSmsTrial .kd-free-shape-two {
    width: 280px;
    height: 280px;

    border: 1px dashed rgba(182, 31, 41, 0.12);

    transform: rotate(18deg);
  }


  /* =========================================================
DASHBOARD
========================================================= */

  #kdFreeBulkSmsTrial .kd-free-dashboard {
    position: relative;
    z-index: 3;

    width: 100%;
    max-width: 390px;

    padding: 18px;

    border: 1px solid rgba(224, 228, 235, 0.95);
    border-radius: 19px;

    background: rgba(255, 255, 255, 0.96);

    box-shadow:
      0 25px 60px rgba(36, 50, 72, 0.11),
      0 5px 15px rgba(36, 50, 72, 0.04);

    backdrop-filter: blur(8px);
  }


  /* DASHBOARD HEADER */

  #kdFreeBulkSmsTrial .kd-free-dashboard-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;

    padding-bottom: 16px;

    border-bottom: 1px solid #edf0f3;
  }

  #kdFreeBulkSmsTrial .kd-free-dashboard-brand {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  #kdFreeBulkSmsTrial .kd-free-brand-icon {
    width: 38px;
    height: 38px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 10px;

    color: #ffffff;
    background: linear-gradient(135deg,
        #c72b35,
        #a81721);

    box-shadow: 0 7px 16px rgba(182, 31, 41, 0.15);

    font-size: 17px;
  }

  #kdFreeBulkSmsTrial .kd-free-dashboard-brand strong {
    display: block;

    margin-bottom: 3px;

    color: #344153;

    font-size: 12px;
    font-weight: 800;
  }

  #kdFreeBulkSmsTrial .kd-free-dashboard-brand span {
    display: block;

    color: #929ba6;

    font-size: 9px;
  }

  #kdFreeBulkSmsTrial .kd-free-live-status {
    display: inline-flex;
    align-items: center;
    gap: 6px;

    padding: 6px 8px;

    border-radius: 20px;

    color: #4f5967;
    background: #f5f7f8;

    font-size: 9px;
    font-weight: 700;
  }

  #kdFreeBulkSmsTrial .kd-free-live-status span {
    width: 6px;
    height: 6px;

    border-radius: 50%;

    background: #3ba276;
  }


  /* =========================================================
CAMPAIGN CARD
========================================================= */

  #kdFreeBulkSmsTrial .kd-free-campaign-card {
    margin-top: 16px;
    padding: 16px;

    border: 1px solid rgba(182, 31, 41, 0.09);
    border-radius: 14px;

    background:
      linear-gradient(135deg,
        rgba(182, 31, 41, 0.055),
        rgba(255, 255, 255, 0.9));
  }

  #kdFreeBulkSmsTrial .kd-free-campaign-top {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 15px;
  }

  #kdFreeBulkSmsTrial .kd-free-small-label {
    display: block;

    margin-bottom: 5px;

    color: var(--kd-primary);

    font-size: 8px;
    font-weight: 800;
    letter-spacing: 0.8px;
  }

  #kdFreeBulkSmsTrial .kd-free-campaign-top h3 {
    margin: 0;

    color: #000000;

    font-size: 14px;
    font-weight: 700;
  }

  #kdFreeBulkSmsTrial .kd-free-send-icon {
    width: 33px;
    height: 33px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 9px;

    color: #ffffff;
    background: var(--kd-primary);

    font-size: 15px;
  }


  /* MESSAGE PREVIEW */

  #kdFreeBulkSmsTrial .kd-free-message-preview {
    margin-top: 14px;
    padding: 11px;

    border-radius: 9px;

    background: rgba(255, 255, 255, 0.78);
  }

  #kdFreeBulkSmsTrial .kd-free-preview-title {
    display: block;

    margin-bottom: 5px;

    color: #697586;

    font-size: 9px;
    font-weight: 700;
  }

  #kdFreeBulkSmsTrial .kd-free-message-preview p {
    margin: 0;

    color: #818b98;

    font-size: 10px;
    line-height: 1.55;
  }


  /* =========================================================
STATS
========================================================= */

  #kdFreeBulkSmsTrial .kd-free-dashboard-stats {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;

    margin-top: 13px;
  }

  #kdFreeBulkSmsTrial .kd-free-dashboard-stat {
    padding: 11px;

    border: 1px solid #edf0f3;
    border-radius: 10px;

    background: #ffffff;
  }

  #kdFreeBulkSmsTrial .kd-free-dashboard-stat span {
    display: block;

    margin-bottom: 5px;

    color: #929ba6;

    font-size: 9px;
  }

  #kdFreeBulkSmsTrial .kd-free-dashboard-stat strong {
    display: block;

    color: #000000;

    font-size: 11px;
    font-weight: 700;
  }


  /* =========================================================
BOTTOM ACTION
========================================================= */

  #kdFreeBulkSmsTrial .kd-free-dashboard-bottom {
    display: flex;
    align-items: center;
    justify-content: space-between;

    margin-top: 13px;
    padding: 11px 2px 1px;
  }

  #kdFreeBulkSmsTrial .kd-free-credit-info {
    display: flex;
    align-items: center;
    gap: 7px;

    color: #7d8794;

    font-size: 9px;
  }

  #kdFreeBulkSmsTrial .kd-free-credit-dot {
    width: 7px;
    height: 7px;

    border-radius: 50%;

    background: var(--kd-primary);
  }

  #kdFreeBulkSmsTrial .kd-free-mini-arrow {
    width: 28px;
    height: 28px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 8px;

    color: var(--kd-primary);
    background: var(--kd-primary-soft);

    font-size: 15px;
    font-weight: 700;
  }


  /* =========================================================
FLOATING CARD
========================================================= */

  #kdFreeBulkSmsTrial .kd-free-floating-card {
    position: absolute;
    z-index: 5;

    right: -10px;
    bottom: 22px;

    display: flex;
    align-items: center;
    gap: 10px;

    padding: 11px 14px;

    border: 1px solid #e9edf1;
    border-radius: 12px;

    background: rgba(255, 255, 255, 0.96);

    box-shadow: 0 14px 30px rgba(36, 50, 72, 0.1);
  }

  #kdFreeBulkSmsTrial .kd-free-floating-icon {
    width: 30px;
    height: 30px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    color: #ffffff;
    background: var(--kd-primary);

    font-size: 11px;
    font-weight: 800;
  }

  #kdFreeBulkSmsTrial .kd-free-floating-card strong {
    display: block;

    margin-bottom: 3px;

    color: #3a4655;

    font-size: 10px;
    font-weight: 700;
  }

  #kdFreeBulkSmsTrial .kd-free-floating-card span {
    display: block;

    color: #929ba6;

    font-size: 8px;
  }


  /* =========================================================
TABLET
========================================================= */

  @media (max-width: 1024px) {

    #kdFreeBulkSmsTrial {
      padding: 50px 22px;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-container {
      grid-template-columns: minmax(0, 1fr) minmax(350px, 0.8fr);
      gap: 40px;
    }

    #kdFreeBulkSmsTrial .kd-free-floating-card {
      right: -5px;
    }

  }


  /* =========================================================
MOBILE
========================================================= */

  @media (max-width: 767px) {

    #kdFreeBulkSmsTrial {
      padding: 43px 16px;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-container {
      grid-template-columns: 1fr;
      gap: 35px;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-content {
      text-align: center;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-label {
      margin-left: auto;
      margin-right: auto;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-content h2 {
      margin-left: auto;
      margin-right: auto;

      font-size: 32px;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-intro {
      margin-left: auto;
      margin-right: auto;

      font-size: 13px;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-benefits {
      max-width: 450px;

      margin-left: auto;
      margin-right: auto;

      text-align: left;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-actions {
      justify-content: center;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-visual {
      min-height: 375px;
    }

    #kdFreeBulkSmsTrial .kd-free-dashboard {
      max-width: 370px;
    }

  }


  /* =========================================================
SMALL MOBILE
========================================================= */

  @media (max-width: 480px) {

    #kdFreeBulkSmsTrial {
      padding: 38px 12px;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-label {
      padding: 7px 10px;

      font-size: 9px;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-content h2 {
      font-size: 28px;

      line-height: 1.17;
      letter-spacing: -0.8px;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-intro {
      font-size: 12px;
      line-height: 1.7;
    }

    #kdFreeBulkSmsTrial .kd-free-benefit-text strong {
      font-size: 12px;
    }

    #kdFreeBulkSmsTrial .kd-free-benefit-text span {
      font-size: 10px;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-actions {
      gap: 11px;
    }

    #kdFreeBulkSmsTrial .kd-free-trial-visual {
      min-height: 350px;
    }

    #kdFreeBulkSmsTrial .kd-free-dashboard {
      padding: 13px;

      border-radius: 16px;
    }

    #kdFreeBulkSmsTrial .kd-free-dashboard-brand strong {
      font-size: 11px;
    }

    #kdFreeBulkSmsTrial .kd-free-floating-card {
      right: 0;
      bottom: 8px;

      padding: 9px 10px;
    }

    #kdFreeBulkSmsTrial .kd-free-floating-card strong {
      font-size: 9px;
    }

    #kdFreeBulkSmsTrial .kd-free-floating-card span {
      font-size: 7px;
    }

    #kdFreeBulkSmsTrial .kd-free-floating-icon {
      width: 26px;
      height: 26px;
    }

  }


  .decor-hero-orb.o31 {
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

  .decor-hero-orb.o32 {
    position: absolute;
    width: 9px;
    height: 9px;
    bottom: 100px;
    right: 70px;
    background: #22D3EE;
    opacity: .5;
    animation: hero-orb-2 6s ease-in-out infinite .3s;
    border-radius: 50%;
  }

  .decor-hero-orb.o33 {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 200px;
    right: 53px;
    background: #2563EB;
    opacity: .3;
    animation: hero-orb-1 7s ease-in-out infinite .6s;
    border-radius: 50%;
  }
</style>
<section class="kd-free-trial-section" id="kdFreeBulkSmsTrial">
<div class="decor-hero-ring"></div>
  <div class="decor-hero-orb o31"></div>
  <div class="decor-hero-orb o32"></div>
  <div class="decor-hero-orb o33"></div>

  <div class="kd-free-trial-container">

    <div class="kd-free-trial-content">

      <div class="kd-free-trial-label">
        <span class="kd-free-trial-label-icon">✦</span>
        FREE BULK SMS TRIAL
      </div>

      <h2>
        Try King Digital Bulk SMS
        <span>Messaging Services for Free</span>
      </h2>

      <p class="kd-free-trial-intro">
        Experience a smarter way to connect with your customers. Explore
        reliable bulk SMS messaging designed to help businesses send
        promotional campaigns quickly and efficiently.
      </p>

      <!-- Benefits -->
      <div class="kd-free-trial-benefits">

        <div class="kd-free-trial-benefit">
          <div class="kd-free-benefit-icon">✓</div>
          <div class="kd-free-benefit-text">
            <strong>Easy to Get Started</strong>
            <span>Launch your SMS campaigns with a simple and user-friendly platform.</span>
          </div>
        </div>

        <div class="kd-free-trial-benefit">
          <div class="kd-free-benefit-icon">✓</div>
          <div class="kd-free-benefit-text">
            <strong>Reach More Customers</strong>
            <span>Send promotional messages and offers directly to your audience.</span>
          </div>
        </div>

        <div class="kd-free-trial-benefit">
          <div class="kd-free-benefit-icon">✓</div>
          <div class="kd-free-benefit-text">
            <strong>Reliable Message Delivery</strong>
            <span>Communicate with confidence through dependable SMS solutions.</span>
          </div>
        </div>

      </div>

      <!-- CTA -->
      <div class="kd-free-trial-actions">

        <a href="#enquiry" class="kd-free-trial-btn">
          Start Free Trial
          <span>→</span>
        </a>

        <div class="kd-free-trial-note">
          <span class="kd-free-note-check">✓</span>
          Quick and simple setup
        </div>

      </div>

    </div>


    <!-- =====================================================
    RIGHT VISUAL CARD
    ====================================================== -->
    <div class="kd-free-trial-visual">

      <!-- Decorative Background -->
      <div class="kd-free-visual-shape kd-free-shape-one"></div>
      <div class="kd-free-visual-shape kd-free-shape-two"></div>


      <!-- Main Dashboard -->
      <div class="kd-free-dashboard">

        <!-- Dashboard Top -->
        <div class="kd-free-dashboard-header">

          <div class="kd-free-dashboard-brand">
            <div class="kd-free-brand-icon">✉</div>
            <div>
              <strong>Bulk SMS</strong>
              <span>Campaign Dashboard</span>
            </div>
          </div>

          <div class="kd-free-live-status">
            <span></span>
            Ready
          </div>

        </div>


        <!-- Campaign Card -->
        <div class="kd-free-campaign-card">

          <div class="kd-free-campaign-top">
            <div>
              <span class="kd-free-small-label">YOUR CAMPAIGN</span>
              <h3>Promotional Campaign</h3>
            </div>

            <div class="kd-free-send-icon">↗</div>
          </div>

          <div class="kd-free-message-preview">
            <span class="kd-free-preview-title">SMS Preview</span>
            <p>
              Special offer just for you! Discover exciting deals and connect
              with us today.
            </p>
          </div>

        </div>


        <!-- Dashboard Stats -->
        <div class="kd-free-dashboard-stats">

          <div class="kd-free-dashboard-stat">
            <span>Campaign Setup</span>
            <strong>Easy</strong>
          </div>

          <div class="kd-free-dashboard-stat">
            <span>Message Delivery</span>
            <strong>Reliable</strong>
          </div>

        </div>


        <!-- Bottom Action -->
        <div class="kd-free-dashboard-bottom">

          <div class="kd-free-credit-info">
            <span class="kd-free-credit-dot"></span>
            Ready to send your message
          </div>

          <div class="kd-free-mini-arrow">→</div>

        </div>

      </div>


      <!-- Floating Card -->
      <div class="kd-free-floating-card">

        <div class="kd-free-floating-icon">✓</div>

        <div>
          <strong>Simple & Reliable</strong>
          <span>Built for better communication</span>
        </div>

      </div>

    </div>

  </div>

</section>