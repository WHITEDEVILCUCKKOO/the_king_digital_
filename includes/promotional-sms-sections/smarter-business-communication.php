<style>
  #kdSmsComparison {
    --kd-red: #b61f29;
    --kd-red-dark: #991923;
    --kd-red-light: #f8eeee;

    --kd-green: #247d67;
    --kd-green-dark: #176653;
    --kd-green-light: #edf7f3;

    --kd-navy: #050505;
    --kd-text: #657284;
    --kd-light-text: #8993a0;

    --kd-border: #e3e8ed;
    --kd-white: #ffffff;

    position: relative;
    width: 100%;
    overflow: hidden;

    padding: 55px 20px;


    background: #7b7b7b1a;
    /* background:
      radial-gradient(circle at 8% 20%, rgba(182, 31, 41, .04), transparent 22%),
      radial-gradient(circle at 92% 75%, rgba(36, 125, 103, .045), transparent 24%),
      linear-gradient(135deg, #ffffff 0%, #fafbfc 50%, #ffffff 100%); */

    /* font-family: Inter, Arial, Helvetica, sans-serif; */
  }



  #kdSmsComparison .kd-sms-comparison-container {
    width: 100%;
    max-width: 1280px;
    margin: 0 auto;
  }



  #kdSmsComparison .kd-sms-comparison-badge {
    width: fit-content;

    display: flex;
    align-items: center;
    gap: 9px;

    margin: 0 auto 18px;
    padding: 8px 17px;

    border: 1px solid rgba(182, 31, 41, .18);
    border-radius: 50px;

    background: rgba(182, 31, 41, .04);
    color: var(--kd-red);

    font-size: 11px;
    font-weight: 800;
    letter-spacing: .9px;
    text-transform: uppercase;
  }

  #kdSmsComparison .kd-sms-comparison-badge span {
    width: 7px;
    height: 7px;

    border-radius: 50%;
    background: var(--kd-red);
  }


  #kdSmsComparison .kd-sms-comparison-heading {
    max-width: 850px;
    margin: 0 auto 42px;
    text-align: center;
  }

  #kdSmsComparison .kd-sms-comparison-heading h2 {
    margin: 0;

    color: var(--kd-navy);

    font-size: clamp(31px, 4vw, 44px);
    line-height: 1.18;

    font-weight: 800;
    letter-spacing: -1.5px;
  }

  #kdSmsComparison .kd-sms-comparison-heading h2 span {
    color: var(--kd-red);
    text-transform: lowercase;
  }

  #kdSmsComparison .kd-sms-comparison-heading h2 strong {
    display: block;
    margin-top: 3px;

    color: var(--kd-red);
    font: inherit;
    font-weight: 800;
  }

  #kdSmsComparison .kd-sms-comparison-heading p {
    max-width: 720px;

    margin: 16px auto 0;

    color: var(--kd-text);

    font-size: 15px;
    line-height: 1.7;
  }



  #kdSmsComparison .kd-sms-comparison-wrapper {
    position: relative;

    display: grid;
    grid-template-columns: minmax(0, 1fr) 54px minmax(0, 1fr);
    align-items: center;

    gap: 0;
  }



  #kdSmsComparison .kd-sms-comparison-card {
    min-width: 0;

    padding: 28px;

    border-radius: 20px;

    background: rgba(255, 255, 255, .92);

    transition: border-color .25s ease, box-shadow .25s ease;
  }

  #kdSmsComparison .kd-sms-without-card {
    border: 1px solid rgba(182, 31, 41, .18);

    box-shadow: 0 15px 40px rgba(182, 31, 41, .055);
  }

  #kdSmsComparison .kd-sms-with-card {
    border: 1px solid rgba(36, 125, 103, .2);

    box-shadow: 0 15px 40px rgba(36, 125, 103, .06);
  }



  #kdSmsComparison .kd-sms-card-top {
    display: flex;
    align-items: center;

    gap: 15px;
  }

  #kdSmsComparison .kd-sms-card-main-icon {
    width: 57px;
    height: 57px;

    flex: 0 0 57px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 16px;

    color: #ffffff;

    font-size: 29px;
    font-weight: 500;
  }

  #kdSmsComparison .kd-sms-without-icon {
    background: linear-gradient(135deg, #c42d35, #a71821);

    box-shadow: 0 10px 22px rgba(182, 31, 41, .16);
  }

  #kdSmsComparison .kd-sms-with-icon {
    background: linear-gradient(135deg, #328b74, #1b6b58);

    box-shadow: 0 10px 22px rgba(36, 125, 103, .16);
  }

  #kdSmsComparison .kd-sms-card-label {
    display: block;

    margin-bottom: 5px;

    color: var(--kd-red);

    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  #kdSmsComparison .kd-sms-with-label {
    color: var(--kd-green);
  }

  #kdSmsComparison .kd-sms-card-top h3 {
    margin: 0;

    color: var(--kd-navy);

    font-size: 19px;
    line-height: 1.35;
    font-weight: 750;
  }

  #kdSmsComparison .kd-sms-card-divider {
    width: 100%;
    height: 1px;

    margin: 23px 0 20px;

    background: var(--kd-border);
  }



  #kdSmsComparison .kd-sms-solution-point {
    display: flex;
    align-items: flex-start;

    gap: 14px;

    cursor: default;
  }


  /* NUMBER CIRCLE */

  #kdSmsComparison .kd-sms-solution-number {
    width: 39px;
    height: 39px;

    flex: 0 0 39px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    color: var(--kd-red);

    background: var(--kd-red-light);

    font-size: 11px;
    font-weight: 800;

    transition:
      background .22s ease,
      color .22s ease,
      box-shadow .22s ease;
  }


  /* LEFT SIDE HOVER - ONLY NUMBER */

  #kdSmsComparison .kd-sms-without-point:hover .kd-sms-solution-number {
    color: #ffffff;
    background: var(--kd-red-dark);

    box-shadow: 0 7px 17px rgba(153, 25, 35, .2);
  }


  /* RIGHT SIDE DEFAULT NUMBER */

  #kdSmsComparison .kd-sms-with-point .kd-sms-solution-number {
    color: var(--kd-green);
    background: var(--kd-green-light);
  }


  /* RIGHT SIDE HOVER - ONLY NUMBER */

  #kdSmsComparison .kd-sms-with-point:hover .kd-sms-solution-number {
    color: #ffffff;
    background: var(--kd-green-dark);

    box-shadow: 0 7px 17px rgba(23, 102, 83, .2);
  }



  #kdSmsComparison .kd-sms-solution-content {
    padding-top: 1px;
  }

  #kdSmsComparison .kd-sms-solution-content h4 {
    margin: 0 0 5px;

    color: #394657;

    font-size: 15px;
    line-height: 1.4;
    font-weight: 700;
  }

  #kdSmsComparison .kd-sms-solution-content p {
    margin: 0;

    color: var(--kd-light-text);

    font-size: 12px;
    line-height: 1.55;
  }


  #kdSmsComparison .kd-sms-point-arrow {
    width: 39px;

    margin: 3px 0 3px;

    padding-left: 13px;

    color: var(--kd-red);

    font-size: 23px;
    line-height: 1;
  }

  #kdSmsComparison .kd-sms-with-arrow {
    color: var(--kd-green);
  }


  #kdSmsComparison .kd-sms-card-result {
    display: flex;
    align-items: center;

    gap: 13px;

    margin-top: 22px;
    padding: 15px 16px;

    border-radius: 14px;
  }

  #kdSmsComparison .kd-sms-without-result {
    background: linear-gradient(90deg,
        rgba(182, 31, 41, .08),
        rgba(182, 31, 41, .035));
  }

  #kdSmsComparison .kd-sms-with-result {
    background: linear-gradient(90deg,
        rgba(36, 125, 103, .1),
        rgba(36, 125, 103, .04));
  }

  #kdSmsComparison .kd-sms-result-icon {
    width: 36px;
    height: 36px;

    flex: 0 0 36px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    color: #ffffff;

    font-size: 17px;
    font-weight: 800;
  }

  #kdSmsComparison .kd-sms-without-result .kd-sms-result-icon {
    background: var(--kd-red);
  }

  #kdSmsComparison .kd-sms-with-result .kd-sms-result-icon {
    background: var(--kd-green);
  }

  #kdSmsComparison .kd-sms-card-result strong {
    display: block;

    margin-bottom: 3px;

    color: #354152;

    font-size: 13px;
    font-weight: 700;
  }

  #kdSmsComparison .kd-sms-card-result span {
    display: block;

    color: var(--kd-text);

    font-size: 11px;
    line-height: 1.45;
  }



  #kdSmsComparison .kd-sms-vs-wrapper {
    position: relative;
    z-index: 5;

    display: flex;
    align-items: center;
    justify-content: center;
  }

  #kdSmsComparison .kd-sms-vs-circle {
    width: 54px;
    height: 54px;

    display: flex;
    align-items: center;
    justify-content: center;

    border: 1px solid #dbe2e8;
    border-radius: 50%;

    background: #ffffff;

    box-shadow: 0 8px 24px rgba(36, 50, 71, .09);
  }

  #kdSmsComparison .kd-sms-vs-circle span {
    color: var(--kd-navy);

    font-size: 14px;
    font-weight: 800;
  }



  @media (max-width: 1024px) {

    #kdSmsComparison {
      padding: 50px 20px;
    }

    #kdSmsComparison .kd-sms-comparison-card {
      padding: 23px 20px;
    }

    #kdSmsComparison .kd-sms-card-top h3 {
      font-size: 17px;
    }

  }



  @media (max-width: 767px) {

    #kdSmsComparison {
      padding: 42px 15px;
    }

    #kdSmsComparison .kd-sms-comparison-badge {
      margin-bottom: 14px;

      font-size: 9px;
    }

    #kdSmsComparison .kd-sms-comparison-heading {
      margin-bottom: 30px;
    }

    #kdSmsComparison .kd-sms-comparison-heading h2 {
      font-size: 30px;
      letter-spacing: -1px;
    }

    #kdSmsComparison .kd-sms-comparison-heading p {
      margin-top: 13px;

      font-size: 13px;
    }

    #kdSmsComparison .kd-sms-comparison-wrapper {
      grid-template-columns: 1fr;

      gap: 20px;
    }

    #kdSmsComparison .kd-sms-vs-wrapper {
      order: 2;

      height: 18px;
    }

    #kdSmsComparison .kd-sms-without-card {
      order: 1;
    }

    #kdSmsComparison .kd-sms-with-card {
      order: 3;
    }

    #kdSmsComparison .kd-sms-vs-circle {
      width: 50px;
      height: 50px;
    }

    #kdSmsComparison .kd-sms-comparison-card {
      padding: 22px 17px;

      border-radius: 17px;
    }

    #kdSmsComparison .kd-sms-card-main-icon {
      width: 48px;
      height: 48px;

      flex-basis: 48px;

      border-radius: 14px;

      font-size: 24px;
    }

    #kdSmsComparison .kd-sms-card-top h3 {
      font-size: 16px;
    }

    #kdSmsComparison .kd-sms-solution-content h4 {
      font-size: 13px;
    }

    #kdSmsComparison .kd-sms-solution-content p {
      font-size: 11px;
    }

  }


  @media (max-width: 480px) {

    #kdSmsComparison {
      padding: 38px 11px;
    }

    #kdSmsComparison .kd-sms-comparison-heading h2 {
      font-size: 27px;
    }

    #kdSmsComparison .kd-sms-comparison-heading h2 strong {
      margin-top: 1px;
    }

    #kdSmsComparison .kd-sms-comparison-card {
      padding: 19px 14px;
    }

    #kdSmsComparison .kd-sms-card-label {
      font-size: 9px;
    }

    #kdSmsComparison .kd-sms-card-top {
      gap: 11px;
    }

    #kdSmsComparison .kd-sms-solution-point {
      gap: 11px;
    }

    #kdSmsComparison .kd-sms-solution-number {
      width: 36px;
      height: 36px;

      flex-basis: 36px;

      font-size: 10px;
    }

    #kdSmsComparison .kd-sms-point-arrow {
      width: 36px;

      padding-left: 11px;

      font-size: 20px;
    }

    #kdSmsComparison .kd-sms-card-result {
      padding: 13px 12px;
    }

  }
</style>
<section class="kd-sms-comparison-section" id="kdSmsComparison">

  <div class="kd-sms-comparison-container">

    <!-- SECTION BADGE -->
    <div class="kd-sms-comparison-badge">
      <span></span>
      Smarter Business Communication
    </div>

    <!-- HEADING -->
    <div class="kd-sms-comparison-heading">
      <h2>
        Without Promotional SMS <span>vs</span>
        <strong>With Promotional SMS</strong>
      </h2>

      <p>
        See how Promotional SMS helps businesses save time, reach more customers
        and manage campaigns more efficiently.
      </p>
    </div>


    <!-- COMPARISON WRAPPER -->
    <div class="kd-sms-comparison-wrapper">

      <!-- LEFT CARD -->
      <div class="kd-sms-comparison-card kd-sms-without-card">

        <div class="kd-sms-card-top">
          <div class="kd-sms-card-main-icon kd-sms-without-icon">×</div>

          <div>
            <span class="kd-sms-card-label">Without Promotional SMS</span>
            <h3>Manual &amp; Time-Consuming</h3>
          </div>
        </div>

        <div class="kd-sms-card-divider"></div>


        <!-- POINT 1 -->
        <div class="kd-sms-solution-point kd-sms-without-point">
          <div class="kd-sms-solution-number">01</div>

          <div class="kd-sms-solution-content">
            <h4>Contact Customers Individually</h4>
            <p>Reach customers one at a time through manual communication.</p>
          </div>
        </div>

        <div class="kd-sms-point-arrow">↓</div>


        <!-- POINT 2 -->
        <div class="kd-sms-solution-point kd-sms-without-point">
          <div class="kd-sms-solution-number">02</div>

          <div class="kd-sms-solution-content">
            <h4>More Time &amp; Effort</h4>
            <p>Managing large customer lists becomes slow and difficult.</p>
          </div>
        </div>

        <div class="kd-sms-point-arrow">↓</div>


        <!-- POINT 3 -->
        <div class="kd-sms-solution-point kd-sms-without-point">
          <div class="kd-sms-solution-number">03</div>

          <div class="kd-sms-solution-content">
            <h4>Limited Customer Reach</h4>
            <p>Your campaign reaches fewer people with inconsistent results.</p>
          </div>
        </div>

        <div class="kd-sms-point-arrow">↓</div>


        <!-- POINT 4 -->
        <div class="kd-sms-solution-point kd-sms-without-point">
          <div class="kd-sms-solution-number">04</div>

          <div class="kd-sms-solution-content">
            <h4>Hard to Track Results</h4>
            <p>It becomes difficult to measure campaign performance clearly.</p>
          </div>
        </div>


        <!-- RESULT -->
        <div class="kd-sms-card-result kd-sms-without-result">
          <div class="kd-sms-result-icon">!</div>

          <div>
            <strong>Lower Reach &amp; More Effort</strong>
            <span>Slower communication and limited campaign efficiency.</span>
          </div>
        </div>

      </div>


      <!-- CENTER VS -->
      <div class="kd-sms-vs-wrapper">
        <div class="kd-sms-vs-circle">
          <span>VS</span>
        </div>
      </div>


      <!-- RIGHT CARD -->
      <div class="kd-sms-comparison-card kd-sms-with-card">

        <div class="kd-sms-card-top">
          <div class="kd-sms-card-main-icon kd-sms-with-icon">✓</div>

          <div>
            <span class="kd-sms-card-label kd-sms-with-label">
              With Promotional SMS
            </span>
            <h3>Fast &amp; Scalable Communication</h3>
          </div>
        </div>

        <div class="kd-sms-card-divider"></div>


        <!-- POINT 1 -->
        <div class="kd-sms-solution-point kd-sms-with-point">
          <div class="kd-sms-solution-number">01</div>

          <div class="kd-sms-solution-content">
            <h4>Create One SMS Campaign</h4>
            <p>Prepare your promotional message from one simple platform.</p>
          </div>
        </div>

        <div class="kd-sms-point-arrow kd-sms-with-arrow">↓</div>


        <!-- POINT 2 -->
        <div class="kd-sms-solution-point kd-sms-with-point">
          <div class="kd-sms-solution-number">02</div>

          <div class="kd-sms-solution-content">
            <h4>Reach Thousands of Customers</h4>
            <p>Send promotional messages to a large audience instantly.</p>
          </div>
        </div>

        <div class="kd-sms-point-arrow kd-sms-with-arrow">↓</div>


        <!-- POINT 3 -->
        <div class="kd-sms-solution-point kd-sms-with-point">
          <div class="kd-sms-solution-number">03</div>

          <div class="kd-sms-solution-content">
            <h4>Fast Customer Engagement</h4>
            <p>Promote offers, discounts and updates with better reach.</p>
          </div>
        </div>

        <div class="kd-sms-point-arrow kd-sms-with-arrow">↓</div>


        <!-- POINT 4 -->
        <div class="kd-sms-solution-point kd-sms-with-point">
          <div class="kd-sms-solution-number">04</div>

          <div class="kd-sms-solution-content">
            <h4>Monitor Campaign Performance</h4>
            <p>Track delivery and improve future communication strategies.</p>
          </div>
        </div>


        <!-- RESULT -->
        <div class="kd-sms-card-result kd-sms-with-result">
          <div class="kd-sms-result-icon">✓</div>

          <div>
            <strong>Higher Reach &amp; Better Results</strong>
            <span>Faster campaigns with smarter customer communication.</span>
          </div>
        </div>

      </div>

    </div>

  </div>

</section>