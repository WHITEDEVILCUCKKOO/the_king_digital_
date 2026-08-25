<!-- ==================================================================== -->
<!-- ==== SECTION 3: OUR PROCESS (5-STEP TIMELINE) ==== -->
<!-- ==================================================================== -->
<style>

  .kdp-section{
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #eef2fb;
    padding: 56px 20px;
  }

  .kdp-container{
    max-width: 1180px;
    margin: 0 auto;
    text-align: center;
  }

  .kdp-eyebrow{
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #2f6df3;
    margin: 0 0 8px 0;
  }

  .kdp-heading{
    font-size: 24px;
    font-weight: 800;
    color: #101828;
    margin: 0 0 8px 0;
  }

  .kdp-subtext{
    font-size: 13.5px;
    color: #667085;
    margin: 0 0 44px 0;
  }

  .kdp-steps{
    position: relative;
    display: flex;
    justify-content: space-between;
    gap: 10px;
  }

  .kdp-steps::before{
    content: "";
    position: absolute;
    top: 26px;
    left: 10%;
    right: 10%;
    height: 2px;
    background: repeating-linear-gradient(90deg, #c7cfe6 0 8px, transparent 8px 16px);
    z-index: 0;
  }

  .kdp-step{
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

  @keyframes kdp-step-in{
    to{ opacity: 1; transform: translateY(0); }
  }

  .kdp-steps .kdp-step:nth-child(2){ animation-delay: 0.08s; }
  .kdp-steps .kdp-step:nth-child(3){ animation-delay: 0.16s; }
  .kdp-steps .kdp-step:nth-child(4){ animation-delay: 0.24s; }
  .kdp-steps .kdp-step:nth-child(5){ animation-delay: 0.32s; }

  .kdp-step-icon{
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    box-shadow: 0 8px 18px rgba(16,24,40,0.10);
    margin-bottom: 14px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .kdp-step:hover .kdp-step-icon{
    transform: scale(1.1);
    box-shadow: 0 12px 24px rgba(16,24,40,0.16);
  }

  .kdp-step-num{
    font-size: 11px;
    font-weight: 700;
    color: #98a2b3;
    margin-bottom: 6px;
  }

  .kdp-step-title{
    font-size: 14.5px;
    font-weight: 700;
    color: #101828;
    margin: 0 0 6px 0;
  }

  .kdp-step-text{
    font-size: 12px;
    color: #667085;
    line-height: 1.55;
    max-width: 160px;
  }

  @media (max-width: 860px){
    .kdp-steps{
      flex-direction: column;
      gap: 26px;
    }
    .kdp-steps::before{
      display: none;
    }
    .kdp-step-text{
      max-width: 300px;
    }
  }

</style>

<section class="kdp-section">
  <div class="kdp-container">

    <p class="kdp-eyebrow">OUR PROCESS</p>
    <h2 class="kdp-heading">Our Simple 5-Step Process</h2>
    <p class="kdp-subtext">A clear and effective process to turn your ideas into successful digital solutions.</p>

    <div class="kdp-steps">

      <div class="kdp-step">
        <div class="kdp-step-icon">&#128172;</div>
        <span class="kdp-step-num">01</span>
        <h4 class="kdp-step-title">Discuss &amp; Plan</h4>
        <p class="kdp-step-text">We understand your goals and plan the best strategy.</p>
      </div>

      <div class="kdp-step">
        <div class="kdp-step-icon">&#9998;</div>
        <span class="kdp-step-num">02</span>
        <h4 class="kdp-step-title">Design</h4>
        <p class="kdp-step-text">Our designers create stunning UI/UX designs for your approval.</p>
      </div>

      <div class="kdp-step">
        <div class="kdp-step-icon">&#128187;</div>
        <span class="kdp-step-num">03</span>
        <h4 class="kdp-step-title">Develop</h4>
        <p class="kdp-step-text">We build your website with clean code and latest tech.</p>
      </div>

      <div class="kdp-step">
        <div class="kdp-step-icon">&#9989;</div>
        <span class="kdp-step-num">04</span>
        <h4 class="kdp-step-title">Test &amp; Launch</h4>
        <p class="kdp-step-text">We test everything thoroughly and launch your website.</p>
      </div>

      <div class="kdp-step">
        <div class="kdp-step-icon">&#128640;</div>
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
