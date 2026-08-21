<style>
  #kdWhyChooseKingDigital,
  #kdWhyChooseKingDigital * {
    box-sizing: border-box;
  }

  #kdWhyChooseKingDigital {
    --kd-primary: #b61f29;
    --kd-primary-dark: #981923;
    --kd-navy: #000000;
    --kd-text: #667085;
    --kd-light-text: #8993a1;
    --kd-border: #e5e9ee;
    --kd-white: #ffffff;

    position: relative;
    width: 100%;
    padding: 60px 25px;
    overflow: hidden;

    background:
      radial-gradient(circle at 10% 20%,
        rgba(182, 31, 41, .045) 0,
        transparent 25%),
      radial-gradient(circle at 90% 80%,
        rgba(182, 31, 41, .035) 0,
        transparent 24%),
      linear-gradient(135deg,
        #ffffff 0%,
        #f9fafb 50%,
        #ffffff 100%);

    /* font-family: Inter, Arial, Helvetica, sans-serif; */
  }



  #kdWhyChooseKingDigital .kd-why-bg-circle {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
  }

  #kdWhyChooseKingDigital .kd-why-bg-circle-one {
    width: 350px;
    height: 350px;
    top: -180px;
    left: -160px;
    background: #c4abad13;

    border: 2px solid rgba(182, 31, 41, 0.52);
    border-style: dashed;
     animation: hero-ring-spin 20s linear infinite; 
  }

  #kdWhyChooseKingDigital .kd-why-bg-circle-one::after {

  }

  #kdWhyChooseKingDigital .kd-why-bg-circle-two {
    width: 250px;
    height: 250px;
    bottom: -150px;
    left: -120px;

    background: rgba(182, 31, 41, .025);
  }




  #kdWhyChooseKingDigital .kd-why-container {
    position: relative;
    z-index: 2;

    width: 100%;
    max-width: 1280px;
    margin: 0 auto;

    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
    align-items: center;
    gap: 70px;
  }


  #kdWhyChooseKingDigital .kd-why-content {
    min-width: 0;
  }

  #kdWhyChooseKingDigital .kd-why-badge {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    padding: 8px 14px;
    margin-bottom: 19px;

    border: 1px solid rgba(182, 31, 41, .13);
    border-radius: 50px;

    color: var(--kd-primary);
    background: rgba(182, 31, 41, .045);

    font-size: 11px;
    font-weight: 700;
    letter-spacing: .4px;
    text-transform: uppercase;
  }

  #kdWhyChooseKingDigital .kd-why-badge-dot {
    width: 7px;
    height: 7px;

    border-radius: 50%;

    background: var(--kd-primary);

    animation: kdWhyBlink 1.6s ease-in-out infinite;
  }

  #kdWhyChooseKingDigital .kd-why-content h2 {
    max-width: max-content;
    margin: 0;

    color: var(--kd-navy);

    font-size: clamp(32px, 3.5vw, 48px);
    line-height: 1.16;

    font-weight: 800;
    letter-spacing: -1.5px;
  }

  #kdWhyChooseKingDigital .kd-why-content h2 span {
    display: block;
    color: var(--kd-primary);
  }

  #kdWhyChooseKingDigital .kd-why-line {
    width: 62px;
    height: 3px;

    margin: 22px 0;

    border-radius: 50px;

    background: var(--kd-primary);
  }

  #kdWhyChooseKingDigital .kd-why-description {
    max-width: 560px;

    margin: 0;

    color: var(--kd-text);

    font-size: 15px;
    line-height: 1.8;
  }

  #kdWhyChooseKingDigital .kd-why-description-second {
    margin-top: 13px;
  }



  #kdWhyChooseKingDigital .kd-why-trust-list {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));

    gap: 20px;

    margin-top: 27px;
  }

  #kdWhyChooseKingDigital .kd-why-trust-item {
    display: flex;
    align-items: flex-start;

    gap: 11px;
  }

  #kdWhyChooseKingDigital .kd-why-trust-icon {
    width: 25px;
    height: 25px;

    flex: 0 0 25px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-top: 1px;

    border-radius: 50%;

    color: #ffffff;
    background: var(--kd-primary);

    font-size: 11px;
    font-weight: 800;
  }

  #kdWhyChooseKingDigital .kd-why-trust-item strong {
    display: block;

    margin-bottom: 4px;

    color: #020202;

    font-size: 13px;
    font-weight: 700;
  }

  #kdWhyChooseKingDigital .kd-why-trust-item span {
    display: block;

    color: var(--kd-light-text);

    font-size: 10px;
    line-height: 1.5;
  }


  #kdWhyChooseKingDigital .kd-why-actions {
    margin-top: 30px;
  }

  #kdWhyChooseKingDigital .kd-why-btn {
    min-height: 48px;

    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 14px;

    padding: 11px 20px;

    border-radius: 9px;

    color: #ffffff !important;
    background: linear-gradient(135deg,
        #c62831,
        #a81721);

    box-shadow: 0 13px 28px rgba(182, 31, 41, .16);

    text-decoration: none !important;

    font-size: 13px;
    font-weight: 700;

    transition: .25s ease;
  }

  #kdWhyChooseKingDigital .kd-why-btn:hover {
    color: #ffffff !important;

    transform: translateY(-3px);

    box-shadow: 0 18px 35px rgba(182, 31, 41, .23);
  }

  #kdWhyChooseKingDigital .kd-why-btn span {
    font-size: 19px;
    line-height: 1;
  }



  #kdWhyChooseKingDigital .kd-why-benefits {
    display: grid;

    grid-template-columns: repeat(2, minmax(0, 1fr));

    gap: 14px;
  }

  #kdWhyChooseKingDigital .kd-why-benefit-card {
    position: relative;

    min-height: 155px;

    padding: 19px 16px;

    border: 1px solid var(--kd-border);
    border-radius: 15px;

    background: rgba(255, 255, 255, .86);

    box-shadow: 0 9px 25px rgba(31, 45, 61, .035);

    transition:
      transform .25s ease,
      box-shadow .25s ease,
      border-color .25s ease;
  }

  #kdWhyChooseKingDigital .kd-why-benefit-card:hover {
    border-color: rgba(182, 31, 41, .18);

    box-shadow: 0 16px 32px rgba(31, 45, 61, .08);

    transform: translateY(-5px);
  }

  #kdWhyChooseKingDigital .kd-why-benefit-featured {
    grid-column: 1 / -1;

    min-height: 132px;

    display: flex;
    align-items: center;

    gap: 16px;

    border-color: rgba(182, 31, 41, .15);

    background:
      linear-gradient(135deg,
        rgba(182, 31, 41, .055),
        rgba(255, 255, 255, .95));
  }



  #kdWhyChooseKingDigital .kd-why-card-icon {
    width: 46px;
    height: 46px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 13px;

    border-radius: 13px;

    color: #ffffff;

    background: linear-gradient(135deg,
        #c72c35,
        #a81822);

    box-shadow: 0 9px 18px rgba(182, 31, 41, .16);

    font-size: 21px;
    font-weight: 700;
  }

  #kdWhyChooseKingDigital .kd-why-benefit-featured .kd-why-card-icon {
    flex: 0 0 48px;

    width: 48px;
    height: 48px;

    margin-bottom: 0;
  }

  #kdWhyChooseKingDigital .kd-why-icon-blue {
    background: linear-gradient(135deg,
        #4d8fe3,
        #2d62b7);

    box-shadow: 0 9px 18px rgba(45, 98, 183, .14);
  }

  #kdWhyChooseKingDigital .kd-why-icon-green {
    background: linear-gradient(135deg,
        #39ad89,
        #168264);

    box-shadow: 0 9px 18px rgba(22, 130, 100, .14);
  }

  #kdWhyChooseKingDigital .kd-why-icon-purple {
    background: linear-gradient(135deg,
        #9870df,
        #6b43bb);

    box-shadow: 0 9px 18px rgba(107, 67, 187, .14);
  }

  #kdWhyChooseKingDigital .kd-why-icon-orange {
    background: linear-gradient(135deg,
        #efa534,
        #d57c0a);

    box-shadow: 0 9px 18px rgba(213, 124, 10, .14);
  }




  #kdWhyChooseKingDigital .kd-why-card-content h3 {
    margin: 0 0 7px;

    color: #020202;

    font-size: 14px;
    line-height: 1.35;

    font-weight: 700;
  }

  #kdWhyChooseKingDigital .kd-why-card-content p {
    margin: 0;

    color: #87919d;

    font-size: 11px;
    line-height: 1.6;
  }




  @keyframes kdWhyBlink {

    0%,
    100% {
      opacity: 1;
      transform: scale(1);
    }

    50% {
      opacity: .35;
      transform: scale(.75);
    }

  }


  @media (max-width: 1024px) {

    #kdWhyChooseKingDigital {
      padding: 50px 22px;
    }

    #kdWhyChooseKingDigital .kd-why-container {
      gap: 40px;
    }

    #kdWhyChooseKingDigital .kd-why-benefits {
      gap: 11px;
    }

  }



  @media (max-width: 767px) {

    #kdWhyChooseKingDigital {
      padding: 45px 16px 40px;
    }

    #kdWhyChooseKingDigital .kd-why-container {
      grid-template-columns: 1fr;

      gap: 35px;
    }

    #kdWhyChooseKingDigital .kd-why-content {
      text-align: center;
    }

    #kdWhyChooseKingDigital .kd-why-badge {
      margin-left: auto;
      margin-right: auto;
    }

    #kdWhyChooseKingDigital .kd-why-content h2 {
      margin-left: auto;
      margin-right: auto;

      font-size: 32px;
    }

    #kdWhyChooseKingDigital .kd-why-line {
      margin-left: auto;
      margin-right: auto;
    }

    #kdWhyChooseKingDigital .kd-why-description {
      margin-left: auto;
      margin-right: auto;

      font-size: 13px;
      line-height: 1.75;
    }

    #kdWhyChooseKingDigital .kd-why-trust-list {
      max-width: 500px;

      margin-left: auto;
      margin-right: auto;

      text-align: left;
    }

    #kdWhyChooseKingDigital .kd-why-actions {
      margin-top: 25px;
    }

    #kdWhyChooseKingDigital .kd-why-benefits {
      grid-template-columns: 1fr;

      max-width: 520px;

      margin: 0 auto;
    }

    #kdWhyChooseKingDigital .kd-why-benefit-featured {
      display: block;

      min-height: auto;
    }

    #kdWhyChooseKingDigital .kd-why-benefit-featured .kd-why-card-icon {
      margin-bottom: 13px;
    }

    #kdWhyChooseKingDigital .kd-why-benefit-card {
      min-height: auto;

      padding: 17px 15px;
    }

  }




  @media (max-width: 480px) {

    #kdWhyChooseKingDigital {
      padding: 40px 12px 35px;
    }

    #kdWhyChooseKingDigital .kd-why-badge {
      padding: 7px 11px;

      font-size: 9px;
    }

    #kdWhyChooseKingDigital .kd-why-content h2 {
      font-size: 28px;

      letter-spacing: -1px;
    }

    #kdWhyChooseKingDigital .kd-why-description {
      font-size: 12px;
    }

    #kdWhyChooseKingDigital .kd-why-trust-list {
      grid-template-columns: 1fr;

      gap: 16px;

      max-width: 290px;
    }

    #kdWhyChooseKingDigital .kd-why-trust-item {
      text-align: left;
    }

    #kdWhyChooseKingDigital .kd-why-btn {
      width: 100%;

      min-height: 47px;
    }

    #kdWhyChooseKingDigital .kd-why-benefit-card {
      padding: 16px 14px;
    }

    #kdWhyChooseKingDigital .kd-why-card-icon {
      width: 42px;
      height: 42px;

      margin-bottom: 11px;

      border-radius: 11px;

      font-size: 18px;
    }

    #kdWhyChooseKingDigital .kd-why-card-content h3 {
      font-size: 13px;
    }

    #kdWhyChooseKingDigital .kd-why-card-content p {
      font-size: 10px;
    }

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

  .decor-hero-glow1 {
    position: absolute;
    bottom: -180px;
    right: -160px;
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

  .decor-hero-glow1_2 {
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

<section class="kd-why-section" id="kdWhyChooseKingDigital">
  <!-- <div class="decor-hero-ring"></div> -->
  <div class="decor-hero-glow1"></div>
  <!-- <div class="decor-hero-glow1_2"></div> -->

  <!-- Background Elements -->
  <div class="kd-why-bg-circle kd-why-bg-circle-one"></div>
  <div class="kd-why-bg-circle kd-why-bg-circle-two"></div>

  <div class="kd-why-container">

    <!-- LEFT CONTENT -->
    <div class="kd-why-content">

      <div class="kd-why-badge">
        <span class="kd-why-badge-dot"></span>
        Why Choose King Digital
      </div>

      <h2>
        Why Do Businesses Choose
        <span>King Digital?</span>
      </h2>

      <div class="kd-why-line"></div>

      <p class="kd-why-description">
        Businesses need more than just an SMS platform. They need a reliable
        communication partner that helps them connect with customers quickly,
        manage campaigns efficiently and deliver messages with confidence.
      </p>

      <p class="kd-why-description kd-why-description-second">
        King Digital provides smart, scalable and easy-to-manage SMS solutions
        designed to support businesses at every stage of their growth.
      </p>


      <!-- TRUST POINTS -->
      <div class="kd-why-trust-list">

        <div class="kd-why-trust-item">
          <div class="kd-why-trust-icon">✓</div>
          <div>
            <strong>Reliable Communication</strong>
            <span>Built for consistent message delivery</span>
          </div>
        </div>

        <div class="kd-why-trust-item">
          <div class="kd-why-trust-icon">✓</div>
          <div>
            <strong>Simple & Easy to Use</strong>
            <span>Manage campaigns without complexity</span>
          </div>
        </div>

      </div>


      <!-- CTA -->
      <div class="kd-why-actions">
        <a href="#enquiry" class="kd-why-btn">
          Get Started Today
          <span>→</span>
        </a>
      </div>

    </div>


    <!-- RIGHT BENEFIT CARDS -->
    <div class="kd-why-benefits">


      <!-- Benefit 1 -->
      <div class="kd-why-benefit-card kd-why-benefit-featured">

        <div class="kd-why-card-icon">
          <span>⚡</span>
        </div>

        <div class="kd-why-card-content">
          <h3>Fast & Reliable Delivery</h3>
          <p>
            Send promotional campaigns quickly and reach your audience
            with dependable message delivery.
          </p>
        </div>

      </div>


      <!-- Benefit 2 -->
      <div class="kd-why-benefit-card">

        <div class="kd-why-card-icon kd-why-icon-blue">
          <span>◉</span>
        </div>

        <div class="kd-why-card-content">
          <h3>Easy Campaign Management</h3>
          <p>
            Create, manage and monitor your SMS campaigns from one
            simple and easy-to-use platform.
          </p>
        </div>

      </div>


      <!-- Benefit 3 -->
      <div class="kd-why-benefit-card">

        <div class="kd-why-card-icon kd-why-icon-green">
          <span>↗</span>
        </div>

        <div class="kd-why-card-content">
          <h3>Better Customer Reach</h3>
          <p>
            Connect with your target audience instantly and promote
            your offers more effectively.
          </p>
        </div>

      </div>


      <!-- Benefit 4 -->
      <div class="kd-why-benefit-card">

        <div class="kd-why-card-icon kd-why-icon-purple">
          <span>◈</span>
        </div>

        <div class="kd-why-card-content">
          <h3>Scalable SMS Solutions</h3>
          <p>
            Our platform supports your communication needs as your
            campaigns and business continue to grow.
          </p>
        </div>

      </div>


      <!-- Benefit 5 -->
      <div class="kd-why-benefit-card">

        <div class="kd-why-card-icon kd-why-icon-orange">
          <span>◔</span>
        </div>

        <div class="kd-why-card-content">
          <h3>Dedicated Support</h3>
          <p>
            Get professional assistance whenever you need help with
            your SMS communication requirements.
          </p>
        </div>

      </div>

    </div>

  </div>

</section>