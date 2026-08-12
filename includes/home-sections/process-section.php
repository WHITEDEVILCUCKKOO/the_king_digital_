<style>
  :root {
    --blue: #1B3D7B;
    --blue-dk: #122954;
    --blue-md: #2451A0;
    --blue-lt: #E8EFFE;
    --blue-xl: #F0F4FF;
    --gold: #F97316;
    --gold-dk: #C45E0A;
    --gold-lt: #FFF4EC;
    --gold-mid: #FDBA74;
    --green: #059669;
    --white: #FFFFFF;
    --bg: #F6F8FD;
    --bg2: #EEF3FF;
    --txt: #0F172A;
    --txt2: #475569;
    --txt3: #94A3B8;
    --bdr: #E2E8F0;
    --r: 10px;
    --rlg: 16px;
    --sh: 0 2px 8px rgba(0, 0, 0, .06);
    --shlg: 0 8px 32px rgba(27, 61, 123, .12);
    --trans: all .22s ease;
  }






  /* Utilities */
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px
  }

  .sectionqw {
    padding: 8px 0
  }

  .section-sm {
    padding: 56px 0
  }

  .flex {
    display: flex;
    align-items: center
  }

  .gap-8 {
    gap: 8px
  }

  .gap-12 {
    gap: 12px
  }

  .gap-16 {
    gap: 16px
  }

  .gap-24 {
    gap: 24px
  }

  .tag {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    font-family: 'Poppins', sans-serif;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    background: var(--blue-lt);
    color: var(--blue);
    padding: 5px 14px;
    border-radius: 20px;
    margin-bottom: 16px
  }

  .tag.orange {
    background: var(--gold-lt);
    color: var(--gold)
  }

  .tag .dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: currentColor;
    flex-shrink: 0
  }

  .sh {
    font-size: clamp(26px, 3.8vw, 40px);
    font-weight: 800;
    margin-bottom: 14px;
    letter-spacing: -.5px
  }

  .sub {
    font-size: 16px;
    color: var(--txt2);
    line-height: 1.85;
    max-width: 560px
  }

  .btn {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 600;
    padding: 11px 24px;
    border-radius: 8px;
    border: 2px solid transparent;
    cursor: pointer;
    transition: var(--trans);
    white-space: nowrap
  }

  .btn-primary {
    background: var(--gold);
    color: #fff;
    border-color: var(--gold)
  }

  .btn-primary:hover {
    background: var(--gold-dk);
    border-color: var(--gold-dk);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(249, 115, 22, .35)
  }

  .btn-blue {
    background: var(--blue);
    color: #fff;
    border-color: var(--blue)
  }

  .btn-blue:hover {
    background: var(--blue-dk);
    border-color: var(--blue-dk);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(27, 61, 123, .3)
  }

  .btn-outline {
    background: transparent;
    color: var(--blue);
    border-color: var(--blue)
  }

  .btn-outline:hover {
    background: var(--blue);
    color: #fff;
    transform: translateY(-2px)
  }

  .btn-white {
    background: #fff;
    color: var(--blue);
    border-color: #fff
  }

  .btn-white:hover {
    background: var(--blue-lt);
    transform: translateY(-2px)
  }

  .btn-sm {
    padding: 8px 18px;
    font-size: 13px
  }


  /* ════ PROCESS ════ */
  .processewq {
    padding: 40px 0;
    background: #e8e8eeec;
  }

  .process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 0;
    margin-top: 52px;
    position: relative;
  }

  .process-steps::before {
    content: '';
    position: absolute;
    top: 30px;
    left: 60px;
    right: 60px;
    height: 4px;
    background: linear-gradient(90deg, #ef560d 0%, #ff9448 31%, #123d6b 68%, #ef560d 100%);
    background-size: 300% 100%;
    /* Gradient ko bada karna zaroori hai shift karne ke liye */
    border-radius: 20px;
    z-index: 0;
    animation: aboutHeadingGradient 4s ease-in-out infinite;
  }

  /* Gradient Move karne ke liye Animation Keyframes */
  @keyframes aboutHeadingGradient {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0% 50%;
    }
  }

  .proc-step {
    text-align: center;
    position: relative;
    z-index: 1;
    padding: 0 16px
  }

  .proc-num {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: var(--blue);
    color: #fff;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 18px;
    border: 4px solid #fff;
    box-shadow: 0 0 0 2px var(--blue);
    position: relative;
    isolation: isolate;
  }

  .proc-step h4 {
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 7px
  }

  .proc-step p {
    font-size: 13px;
    color: var(--txt2);
    line-height: 1.7
  }

  .proc-step:nth-child(2) .proc-num {
    background: var(--blue-md)
  }

  .proc-step:nth-child(3) .proc-num {
    background: var(--gold)
  }

  .proc-step:nth-child(4) .proc-num {
    background: var(--green)
  }





  /* Container styling */
  .reveal-78 {
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    color: #101828;
  }


  /* Badge Parent Styling */
  .tag-orange {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background-color: #FFF2EC;
    color: #FF5A22;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 6px 16px;
    border-radius: 50px;
    margin-bottom: 20px;
  }

  /* Base Dot (Stacking context fix ke saath) */
  .dot-78 {
    width: 8px;
    height: 8px;
    background-color: #FF5A22;
    border-radius: 50%;
    display: inline-block;
    position: relative;
    isolation: isolate;
    /* Wave ko badge background ke peeche chhupne se rokta hai */
  }

  /* Wave Pseudo-Elements */
  .dot-78::before,
  .dot-78::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    background-color: #ff592252;
    border-radius: 50%;
    z-index: -1;
    transform: translate(-50%, -50%) scale(1);
    animation: wavePulse 2s infinite ease-out;
  }

  /* Second Wave Delay */
  .dot-78::after {
    animation-delay: 1s;
  }

  /* Animation Keyframes */
  @keyframes wavePulse {
    0% {
      transform: translate(-50%, -50%) scale(1);
      opacity: 0.8;
    }

    100% {
      transform: translate(-50%, -50%) scale(3.5);
      /* Scale size */
      opacity: 0;
    }
  }

  /* Wave Pseudo-Elements */
  .proc-num::before,
  .proc-num::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    background-color: #3f3d3d52;
    border-radius: 50%;
    z-index: -2;
    opacity: 0;
    visibility: hidden;
    transform: translate(-50%, -50%) scale(1);
    animation: wavePulse 2s infinite ease-out;
  }

  /* Second Wave Delay */
  .proc-num::after {
    animation-delay: 1s;
  }

  .proc-num:hover::before,
  .proc-num:hover::after{
    opacity: 1;
    visibility:visible;
  }

  /* Animation Keyframes */
  @keyframes wavePulse {
    0% {
      transform: translate(-50%, -50%) scale(1);
      opacity: 0.8;
    }

    100% {
      transform: translate(-50%, -50%) scale(3.5);
      /* Scale size */
      opacity: 0;
    }
  }


  /* Heading Styling */
  .sh12 {
    font-size: 42px;
    font-weight: 800;
    line-height: 1.15;
    color: #0E1726;
    margin: 0 0 18px 0;
    letter-spacing: -0.5px;
  }

  /* Subtitle Paragraph Styling */
  .sub67 {
    font-size: 13.5px;
    line-height: 1.6;
    color: #4A5568;
    margin: 0;
    /* font-weight: 400; */
  }

  /* Responsive adjust for mobile screens */
  @media (max-width: 600px) {
    .sh12 {
      font-size: 30px;
    }

    .sub67 {
      font-size: 16px;
    }
  }


  .sdh6412nnknk3 {
    background: linear-gradient(90deg, #ef560d 0%, #ff9448 31%, #123d6b 68%, #ef560d 100%);
    background-size: 250% 100%;
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: aboutHeadingGradient 4s ease-in-out infinite;
    margin-right: 10px;
  }
</style>

<!-- ════ HOW WE WORK ════ -->
<section class="processewq sectionq" id="process">
  <div class="container">


    <div class="reveal-78" style="text-align:center;max-width:560px;margin:0 auto 0">
      <div class="tag-orange"><span class="dot-78"></span>How We Work</div>
      <h2 class="sh12">Simple process. <span class="sdh6412nnknk3">Powerful results.</span></h2>
      <p class="sub67" style="max-width:100%">From the first call to live delivery — here's exactly how we work with every client.</p>
    </div>


    <div class="process-steps">
      <div class="proc-step reveal">
        <div class="proc-num">1</div>
        <h4>Consultation & Discovery</h4>
        <p>We understand your business goals, target audience, and current challenges in a free 30-minute call.</p>
      </div>
      <div class="proc-step reveal">
        <div class="proc-num">2</div>
        <h4>Strategy & Proposal</h4>
        <p>Our team designs a custom digital strategy and shares a clear proposal with timeline and pricing.</p>
      </div>
      <div class="proc-step reveal">
        <div class="proc-num">3</div>
        <h4>Design & Development</h4>
        <p>We build, test, and review your solution — keeping you in the loop at every stage with regular updates.</p>
      </div>
      <div class="proc-step reveal">
        <div class="proc-num">4</div>
        <h4>Launch & Support</h4>
        <p>We go live, train your team, and provide dedicated post-launch support to ensure everything runs perfectly.</p>
      </div>
    </div>
  </div>
</section>