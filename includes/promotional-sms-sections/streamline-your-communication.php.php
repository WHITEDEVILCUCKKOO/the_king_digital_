<style>
  #kdPromoSmsSolutions {
    --kd-primary: #b61f29;
    --kd-primary-dark: #981923;
    --kd-navy: #070707;
    --kd-blue: #315fa9;
    --kd-text: #667085;
    --kd-light-text: #8993a1;
    --kd-border: #e5e9ee;
    --kd-white: #ffffff;
    --kd-green: #16856c;

    position: relative;
    width: 100%;

    padding: 58px 20px 52px;

    overflow: hidden;

    /* background:
      radial-gradient(circle at 5% 40%,
        rgba(49, 95, 169, 0.045) 0,
        transparent 27%),
      radial-gradient(circle at 95% 15%,
        rgba(182, 31, 41, 0.035) 0,
        transparent 24%),
      linear-gradient(180deg,
        #ffffff 0%,
        #fafbfd 100%);
 */

  }


  #kdPromoSmsSolutions .kd-promo-solutions-container {
    width: 100%;
    max-width: 1280px;

    margin: 0 auto;

    position: relative;
    z-index: 2;
  }


  #kdPromoSmsSolutions .kd-promo-solutions-heading {
    max-width: 900px;

    margin:
      0 auto 38px;

    text-align: center;
  }


  #kdPromoSmsSolutions .kd-promo-solutions-badge {
    display: inline-flex;
    align-items: center;

    gap: 9px;

    padding: 8px 14px;

    margin-bottom: 17px;

    border:
      1px solid rgba(182, 31, 41, 0.13);

    border-radius: 50px;

    color: var(--kd-primary);

    background:
      rgba(182, 31, 41, 0.045);

    font-size: 10px;
    font-weight: 800;

    letter-spacing: 0.8px;

    text-transform: uppercase;
  }


  #kdPromoSmsSolutions .kd-promo-badge-dot {
    width: 7px;
    height: 7px;

    flex: 0 0 7px;

    border-radius: 50%;

    background: var(--kd-primary);
  }



  #kdPromoSmsSolutions .kd-promo-solutions-heading h2 {
    max-width: 850px;

    margin: 0 auto;

    color: var(--kd-navy);

    font-size:
      clamp(32px,
        3.4vw,
        44px);

    line-height: 1.16;

    font-weight: 800;

    letter-spacing: -1.5px;
  }


  /* RED SECOND LINE */

  #kdPromoSmsSolutions .kd-promo-solutions-heading h2 span {
    display: block;

    margin-top: 2px;

    color: var(--kd-primary);

    font-weight: 800;
  }



  #kdPromoSmsSolutions .kd-promo-heading-line {
    width: 58px;
    height: 3px;

    margin:
      20px auto 17px;

    border-radius: 50px;

    background:
      linear-gradient(90deg,
        var(--kd-primary),
        #d84a53);
  }


  #kdPromoSmsSolutions .kd-promo-solutions-heading p {
    max-width: 700px;

    margin: 0 auto;

    color: var(--kd-text);

    font-size: 15px;

    line-height: 1.7;

    font-weight: 400;
  }


  #kdPromoSmsSolutions .kd-promo-solutions-grid {
    display: grid;

    grid-template-columns:
      repeat(3,
        minmax(0, 1fr));

    gap: 18px;

    width: 100%;
  }


  #kdPromoSmsSolutions .kd-promo-solution-card {
    position: relative;

    min-height: 275px;

    display: flex;
    flex-direction: column;

    padding:
      22px 21px 18px;

    border:
      1px solid var(--kd-border);

    border-radius: 16px;

    background:
      rgba(255,
        255,
        255,
        0.94);

    box-shadow:
      0 10px 28px rgba(31,
        45,
        61,
        0.045);

    transition:
      transform 0.3s ease,
      box-shadow 0.3s ease,
      border-color 0.3s ease;
  }


  #kdPromoSmsSolutions .kd-promo-solution-card:hover {
    transform:
      translateY(-6px);

    border-color:
      rgba(182,
        31,
        41,
        0.18);

    box-shadow:
      0 19px 38px rgba(31,
        45,
        61,
        0.09);
  }



  #kdPromoSmsSolutions .kd-promo-featured-card {
    border-color:
      rgba(182,
        31,
        41,
        0.16);

    background:
      linear-gradient(145deg,
        rgba(182,
          31,
          41,
          0.035),
        rgba(255,
          255,
          255,
          0.98));
  }

  #kdPromoSmsSolutions .kd-promo-card-top {
    display: flex;

    align-items: center;
    justify-content: space-between;

    margin-bottom: 19px;
  }


  #kdPromoSmsSolutions .kd-promo-card-number {
    color: #c1c8d0;

    font-size: 12px;

    font-weight: 700;

    letter-spacing: 1px;
  }


  #kdPromoSmsSolutions .kd-promo-card-icon {
    width: 47px;
    height: 47px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 13px;
  }


  #kdPromoSmsSolutions .kd-promo-card-icon svg {
    width: 22px;
    height: 22px;

    fill: none;

    stroke: #ffffff;

    stroke-width: 2;

    stroke-linecap: round;
    stroke-linejoin: round;
  }


  /* BLUE ICON */

  #kdPromoSmsSolutions .kd-icon-blue {
    background:
      linear-gradient(135deg,
        #4b83ca,
        #2f5fa9);

    box-shadow:
      0 9px 19px rgba(47,
        95,
        169,
        0.16);
  }


  /* RED ICON */

  #kdPromoSmsSolutions .kd-icon-red {
    background:
      linear-gradient(135deg,
        #c9343e,
        #a81722);

    box-shadow:
      0 9px 19px rgba(182,
        31,
        41,
        0.16);
  }


  /* GREEN ICON */

  #kdPromoSmsSolutions .kd-icon-green {
    background:
      linear-gradient(135deg,
        #38aa89,
        #168269);

    box-shadow:
      0 9px 19px rgba(22,
        130,
        105,
        0.15);
  }


  #kdPromoSmsSolutions .kd-promo-solution-card h3 {
    margin:
      0 0 10px;

    color: var(--kd-navy);

    font-size: 18px;

    line-height: 1.35;

    font-weight: 750;

    letter-spacing: -0.2px;
  }


  #kdPromoSmsSolutions .kd-promo-solution-card p {
    margin: 0;

    color: var(--kd-text);

    font-size: 13px;

    line-height: 1.72;

    font-weight: 400;
  }



  #kdPromoSmsSolutions .kd-promo-card-footer {
    display: flex;

    align-items: center;
    justify-content: space-between;

    gap: 10px;

    margin-top: auto;

    padding-top: 16px;

    border-top:
      1px solid #edf0f3;
  }


  #kdPromoSmsSolutions .kd-promo-card-footer span {
    color: #566476;

    font-size: 11px;

    font-weight: 700;
  }


  #kdPromoSmsSolutions .kd-promo-arrow {
    width: 29px;
    height: 29px;

    flex: 0 0 29px;

    display: flex;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    color: #ffffff;

    background: var(--kd-blue);

    font-size: 16px;

    line-height: 1;

    transition:
      transform 0.25s ease;
  }


  #kdPromoSmsSolutions .kd-promo-featured-card .kd-promo-arrow {
    background: var(--kd-primary);
  }


  #kdPromoSmsSolutions .kd-promo-solution-card:hover .kd-promo-arrow {
    transform:
      translateX(3px);
  }


  @media (max-width: 1024px) {

    #kdPromoSmsSolutions {
      padding:
        50px 20px 45px;
    }

    #kdPromoSmsSolutions .kd-promo-solutions-grid {
      gap: 13px;
    }

    #kdPromoSmsSolutions .kd-promo-solution-card {
      min-height: 285px;

      padding:
        20px 17px 16px;
    }

    #kdPromoSmsSolutions .kd-promo-solution-card h3 {
      font-size: 16px;
    }

  }

  @media (max-width: 767px) {

    #kdPromoSmsSolutions {
      padding:
        42px 15px 38px;
    }

    #kdPromoSmsSolutions .kd-promo-solutions-heading {
      margin-bottom: 28px;
    }

    #kdPromoSmsSolutions .kd-promo-solutions-heading h2 {
      font-size: 30px;

      letter-spacing: -1px;
    }

    #kdPromoSmsSolutions .kd-promo-heading-line {
      margin-top: 17px;
      margin-bottom: 14px;
    }

    #kdPromoSmsSolutions .kd-promo-solutions-heading p {
      font-size: 13px;
    }

    #kdPromoSmsSolutions .kd-promo-solutions-grid {
      grid-template-columns: 1fr;

      gap: 13px;
    }

    #kdPromoSmsSolutions .kd-promo-solution-card {
      min-height: 225px;

      padding:
        19px 17px 16px;
    }

  }

  @media (max-width: 480px) {

    #kdPromoSmsSolutions {
      padding:
        38px 12px 34px;
    }

    #kdPromoSmsSolutions .kd-promo-solutions-badge {
      padding:
        7px 11px;

      font-size: 9px;
    }

    #kdPromoSmsSolutions .kd-promo-solutions-heading h2 {
      font-size: 27px;

      line-height: 1.2;
    }

    #kdPromoSmsSolutions .kd-promo-solutions-heading p {
      font-size: 12px;
    }

    #kdPromoSmsSolutions .kd-promo-card-icon {
      width: 44px;
      height: 44px;

      border-radius: 12px;
    }

    #kdPromoSmsSolutions .kd-promo-card-icon svg {
      width: 20px;
      height: 20px;
    }

    #kdPromoSmsSolutions .kd-promo-solution-card h3 {
      font-size: 17px;
    }

    #kdPromoSmsSolutions .kd-promo-solution-card p {
      font-size: 12px;
    }

  }
</style>

<section class="kd-promo-solutions-section" id="kdPromoSmsSolutions">

<div class="decor-hero-glow1_2"></div>
<div class="decor-hero-glow1"></div>

  <div class="kd-promo-solutions-container">

    <!-- SECTION HEADING -->
    <div class="kd-promo-solutions-heading">

      <div class="kd-promo-solutions-badge">
        <span class="kd-promo-badge-dot"></span>
        PROMOTIONAL SMS SERVICE
      </div>

      <h2>
        Streamline Your Communication with
        <span>Powerful Promotional SMS Solutions</span>
      </h2>

      <div class="kd-promo-heading-line"></div>

      <p>
        Reach your target audience faster, promote your offers effectively,
        and manage impactful SMS campaigns with reliable and scalable
        promotional messaging solutions.
      </p>

    </div>


    <!-- THREE CARDS -->
    <div class="kd-promo-solutions-grid">


      <!-- CARD 1 -->
      <div class="kd-promo-solution-card">

        <div class="kd-promo-card-top">

          <div class="kd-promo-card-icon kd-icon-blue">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M4 5h16v14H4z"></path>
              <path d="m5 7 7 5 7-5"></path>
            </svg>
          </div>

          <span class="kd-promo-card-number">01</span>

        </div>

        <h3>Reach More Customers Instantly</h3>

        <p>
          Connect with your target audience quickly and deliver promotional
          messages directly to their mobile devices at the right time.
        </p>

        <div class="kd-promo-card-footer">
          <span>Wider Audience Reach</span>
          <div class="kd-promo-arrow">→</div>
        </div>

      </div>


      <!-- CARD 2 -->
      <div class="kd-promo-solution-card kd-promo-featured-card">

        <div class="kd-promo-card-top">

          <div class="kd-promo-card-icon kd-icon-red">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M4 11v2"></path>
              <path d="M7 7v10"></path>
              <path d="M10 4v16"></path>
              <path d="M13 7v10"></path>
              <path d="M16 9v6"></path>
              <path d="M19 11v2"></path>
            </svg>
          </div>

          <span class="kd-promo-card-number">02</span>

        </div>

        <h3>Run High-Impact Campaigns</h3>

        <p>
          Create effective promotional SMS campaigns for offers, discounts,
          launches and special updates that encourage customer engagement.
        </p>

        <div class="kd-promo-card-footer">
          <span>Better Campaign Results</span>
          <div class="kd-promo-arrow">→</div>
        </div>

      </div>


      <!-- CARD 3 -->
      <div class="kd-promo-solution-card">

        <div class="kd-promo-card-top">

          <div class="kd-promo-card-icon kd-icon-green">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M4 19V5"></path>
              <path d="M4 19h16"></path>
              <path d="m7 15 4-4 3 2 5-6"></path>
              <path d="M16 7h3v3"></path>
            </svg>
          </div>

          <span class="kd-promo-card-number">03</span>

        </div>

        <h3>Manage Campaigns with Ease</h3>

        <p>
          Plan, launch and monitor your promotional SMS campaigns from one
          simple platform built to support your growing business needs.
        </p>

        <div class="kd-promo-card-footer">
          <span>Simple Campaign Management</span>
          <div class="kd-promo-arrow">→</div>
        </div>

      </div>


    </div>

  </div>

</section>


