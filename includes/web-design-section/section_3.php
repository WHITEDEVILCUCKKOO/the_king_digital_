<!-- ==================================================================== -->
<!-- ==== SECTION 3: OUR PROCESS (5-STEP TIMELINE) ==== -->
<!-- ==================================================================== -->
<style>
  .kdp-section {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #eef2fb;
    padding: 56px 20px;
  }

  .kdp-container {
    max-width: 1180px;
    margin: 0 auto;
    text-align: center;
  }

  .kdp-eyebrow {
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #2f6df3;
    margin: 0 0 8px 0;
  }

  .kdp-heading {
    font-size: 44px;
    font-weight: 800;
    color: #101828;
    margin: 0 0 8px 0;
  }

  .kdp-heading em {
    color: #4E8DFF;
    font-style: normal;
  }


  .kdp-subtext {
    font-size: 13.5px;
    color: #667085;
    margin: 0 0 44px 0;
  }

  .kdp-steps {
    position: relative;
    display: flex;
    justify-content: space-between;
    gap: 10px;
  }

  .kdp-steps::before {
    content: "";
    position: absolute;
    top: 26px;
    left: 10%;
    right: 10%;
    height: 2px;
    background: repeating-linear-gradient(90deg, #c7cfe6 0 8px, transparent 8px 16px);
    z-index: 0;
  }

  .kdp-step {
    position: relative;
    z-index: 1;
    flex: 1 1 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    opacity: 0;
    transform: translateY(12px);
    animation: kdp-step-in 0.5s ease forwards;
  }

  @keyframes kdp-step-in {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .kdp-steps .kdp-step:nth-child(2) {
    animation-delay: 0.08s;
  }

  .kdp-steps .kdp-step:nth-child(3) {
    animation-delay: 0.16s;
  }

  .kdp-steps .kdp-step:nth-child(4) {
    animation-delay: 0.24s;
  }

  .kdp-steps .kdp-step:nth-child(5) {
    animation-delay: 0.32s;
  }

  .kdp-step-icon {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    box-shadow: 0 8px 18px rgba(16, 24, 40, 0.10);
    margin-bottom: 14px;
    /* transition: transform 0.3s ease, box-shadow 0.3s ease; */
    position: relative;
    z-index: 2;
  }

  /* .kdp-step:hover .kdp-step-icon {
    transform: scale(1.1);
    box-shadow: 0 12px 24px rgba(16, 24, 40, 0.16);
  } */

  .kdp-step-num {
    font-size: 11px;
    font-weight: 700;
    color: #98a2b3;
    margin-bottom: 6px;
  }

  .kdp-step-title {
    font-size: 14.5px;
    font-weight: 700;
    color: #101828;
    margin: 0 0 6px 0;
  }

  .kdp-step-text {
    font-size: 12px;
    color: #667085;
    line-height: 1.55;
    max-width: 160px;
  }

  @media (max-width: 860px) {
    .kdp-steps {
      flex-direction: column;
      gap: 26px;
    }

    .kdp-steps::before {
      display: none;
    }

    .kdp-step-text {
      max-width: 300px;
    }
  }

  .huhsh212 {

    svg {
      fill: #0438F0;
      width: 25px;
    }
  }

  .kdp-step-icon::before,
  .kdp-step-icon::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 2px solid #3f3d3d52;
    z-index: -1;
    pointer-events: none;
    opacity: 0;
  }

  .kdp-step:hover .kdp-step-icon::before,
  .kdp-step:hover .kdp-step-icon::after {
    opacity: 1;
    animation: wavePulse 1s infinite ease-out;
  }

  .kdp-step:hover .kdp-step-icon::after {
    animation-delay: 1s;
  }

  @keyframes wavePulse {
    0% {
      transform: scale(1);
      opacity: 0.8;
    }

    100% {
      transform: scale(3.5);
      opacity: 0;
    }
  }
</style>

<section class="kdp-section">
  <div class="kdp-container">

    <p class="kdp-eyebrow">OUR PROCESS</p>
    <h2 class="kdp-heading">Our Simple <em> 5-Step Process</em></h2>
    <p class="kdp-subtext">A clear and effective process to turn your ideas into successful digital solutions.</p>

    <div class="kdp-steps">

      <div class="kdp-step">
        <div class="kdp-step-icon"><span class="huhsh212"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M576 304C576 436.5 461.4 544 320 544C282.9 544 247.7 536.6 215.9 523.3L97.5 574.1C88.1 578.1 77.3 575.8 70.4 568.3C63.5 560.8 62 549.8 66.8 540.8L115.6 448.6C83.2 408.3 64 358.3 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304z" />
            </svg></span></div>
        <span class="kdp-step-num">01</span>
        <h4 class="kdp-step-title">Discuss &amp; Plan</h4>
        <p class="kdp-step-text">We understand your goals and plan the best strategy.</p>
      </div>

      <div class="kdp-step">
        <div class="kdp-step-icon"><span class="huhsh212"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M100.4 417.2C104.5 402.6 112.2 389.3 123 378.5L304.2 197.3L338.1 163.4C354.7 180 389.4 214.7 442.1 267.4L476 301.3L442.1 335.2L260.9 516.4C250.2 527.1 236.8 534.9 222.2 539L94.4 574.6C86.1 576.9 77.1 574.6 71 568.4C64.9 562.2 62.6 553.3 64.9 545L100.4 417.2zM156 413.5C151.6 418.2 148.4 423.9 146.7 430.1L122.6 517L209.5 492.9C215.9 491.1 221.7 487.8 226.5 483.2L155.9 413.5zM510 267.4C493.4 250.8 458.7 216.1 406 163.4L372 129.5C398.5 103 413.4 88.1 416.9 84.6C430.4 71 448.8 63.4 468 63.4C487.2 63.4 505.6 71 519.1 84.6L554.8 120.3C568.4 133.9 576 152.3 576 171.4C576 190.5 568.4 209 554.8 222.5C551.3 226 536.4 240.9 509.9 267.4z" />
            </svg></span></div>
        <span class="kdp-step-num">02</span>
        <h4 class="kdp-step-title">Design</h4>
        <p class="kdp-step-text">Our designers create stunning UI/UX designs for your approval.</p>
      </div>

      <div class="kdp-step">
        <div class="kdp-step-icon"><span class="huhsh212"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M392.8 65.2C375.8 60.3 358.1 70.2 353.2 87.2L225.2 535.2C220.3 552.2 230.2 569.9 247.2 574.8C264.2 579.7 281.9 569.8 286.8 552.8L414.8 104.8C419.7 87.8 409.8 70.1 392.8 65.2zM457.4 201.3C444.9 213.8 444.9 234.1 457.4 246.6L530.8 320L457.4 393.4C444.9 405.9 444.9 426.2 457.4 438.7C469.9 451.2 490.2 451.2 502.7 438.7L598.7 342.7C611.2 330.2 611.2 309.9 598.7 297.4L502.7 201.4C490.2 188.9 469.9 188.9 457.4 201.4zM182.7 201.3C170.2 188.8 149.9 188.8 137.4 201.3L41.4 297.3C28.9 309.8 28.9 330.1 41.4 342.6L137.4 438.6C149.9 451.1 170.2 451.1 182.7 438.6C195.2 426.1 195.2 405.8 182.7 393.3L109.3 320L182.6 246.6C195.1 234.1 195.1 213.8 182.6 201.3z" />
            </svg></span></div>
        <span class="kdp-step-num">03</span>
        <h4 class="kdp-step-title">Develop</h4>
        <p class="kdp-step-text">We build your website with clean code and latest tech.</p>
      </div>

      <div class="kdp-step">
        <div class="kdp-step-icon"><span class="huhsh212"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z" />
            </svg></span></div>
        <span class="kdp-step-num">04</span>
        <h4 class="kdp-step-title">Test &amp; Launch</h4>
        <p class="kdp-step-text">We test everything thoroughly and launch your website.</p>
      </div>

      <div class="kdp-step">
        <div class="kdp-step-icon"><span class="huhsh212"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M192 384L88.5 384C63.6 384 48.3 356.9 61.1 335.5L114 247.3C122.7 232.8 138.3 224 155.2 224L250.2 224C326.3 95.1 439.8 88.6 515.7 99.7C528.5 101.6 538.5 111.6 540.3 124.3C551.4 200.2 544.9 313.7 416 389.8L416 484.8C416 501.7 407.2 517.3 392.7 526L304.5 578.9C283.2 591.7 256 576.3 256 551.5L256 448C256 412.7 227.3 384 192 384L191.9 384zM464 224C464 197.5 442.5 176 416 176C389.5 176 368 197.5 368 224C368 250.5 389.5 272 416 272C442.5 272 464 250.5 464 224z" />
            </svg></span></div>
        <span class="kdp-step-num">05</span>
        <h4 class="kdp-step-title">Support</h4>
        <p class="kdp-step-text">We provide continuous support and help your business grow.</p>
      </div>

    </div>

  </div>
</section>

<script>
  // Section 3: no interactive JS required beyond CSS animations
</script>