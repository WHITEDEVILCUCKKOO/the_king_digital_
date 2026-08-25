
<!-- ==================================================================== -->
<!-- ==== SECTION 1: HERO ==== -->
<!-- ==================================================================== -->
<style>

  .kdh-hero{
    position: relative;
    font-family: 'Segoe UI', Arial, sans-serif;
    padding: 110px 20px 100px;
    overflow: hidden;

    background-image: url('web-design_hero.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Only phone */
@media (max-width: 768px) {
    .kdh-hero {
        background-image: none;
    }

    .kdh-hero::before {
        content: "";
        position: absolute;
        inset: -10px;
        background-image: url('web-design_hero.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: blur(4px);
        z-index: 0;
    }

    .kdh-hero > * {
        position: relative;
        z-index: 1;
    }
}


  .kdh-container{
    max-width: 1180px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
  }

  .kdh-eyebrow{
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #4d8dff;
    margin: 0 0 14px 0;
    opacity: 0;
    animation: kdh-fade-up 0.6s ease forwards;
  }

  .kdh-heading{
    font-size: 36px;
    font-weight: 800;
    line-height: 1.3;
    color: #fff;
    margin: 0 0 18px 0;
    opacity: 0;
    animation: kdh-fade-up 0.6s ease 0.1s forwards;
  }

  .kdh-heading-accent{
    color: #4d8dff;
  }

  @keyframes kdh-fade-up{
    from{ opacity: 0; transform: translateY(16px); }
    to{ opacity: 1; transform: translateY(0); }
  }

  .kdh-subtext{
    font-size: 15px;
    color: #a9b3c9;
    line-height: 1.7;
    margin: 0 0 24px 0;
    max-width: 460px;
    opacity: 0;
    animation: kdh-fade-up 0.6s ease 0.2s forwards;
  }

  .kdh-feature-grid{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 10px 20px;
    margin-bottom: 28px;
    opacity: 0;
    animation: kdh-fade-up 0.6s ease 0.3s forwards;
  }

  .kdh-feature-item{
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 12.5px;
    color: #d7dcea;
  }

  .kdh-check{
    width: 16px;
    height: 16px;
    border-radius: 50%;
    background: #2f6df3;
    color: #fff;
    font-size: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 auto;
  }

  .kdh-btn-row{
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    opacity: 0;
    animation: kdh-fade-up 0.6s ease 0.4s forwards;
  }

  .kdh-btn{
    padding: 13px 24px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    transition: transform 0.2s ease, box-shadow 0.25s ease, background 0.25s ease;
  }

  .kdh-btn-solid{
    background: #2f6df3;
    color: #fff;
    border: none;
  }

  .kdh-btn-solid:hover{
    background: #1d54d1;
    transform: translateY(-2px);
    box-shadow: 0 10px 22px rgba(47,109,243,0.35);
  }

  .kdh-btn-outline{
    background: transparent;
    color: #fff;
    border: 1.5px solid rgba(255,255,255,0.35);
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }

  .kdh-btn-outline:hover{
    border-color: #fff;
    background: rgba(255,255,255,0.06);
    transform: translateY(-2px);
  }

  /* ---------- device mockup ---------- */

  .kdh-mockup-wrap{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 320px;
    opacity: 0;
    animation: kdh-fade-up 0.6s ease 0.3s forwards;
        display:none;

  }

  .kdh-laptop{
    position: relative;
    width: 100%;
    max-width: 460px;
  }

  .kdh-laptop-screen{
    background: linear-gradient(150deg, #0b1c4a, #050a1e 70%);
    border: 6px solid #1c2338;
    border-radius: 14px 14px 4px 4px;
    padding: 16px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.5);
    position: relative;
    overflow: hidden;
  }

  .kdh-laptop-screen::before{
    content: "";
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 30% 80%, rgba(77,141,255,0.35), transparent 55%),
      radial-gradient(circle at 80% 20%, rgba(120,90,255,0.3), transparent 50%);
    animation: kdh-glow-shift 6s ease-in-out infinite;
  }

  @keyframes kdh-glow-shift{
    0%, 100%{ opacity: 0.7; }
    50%{ opacity: 1; }
  }

  .kdh-laptop-topbar{
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    z-index: 1;
    margin-bottom: 30px;
  }

  .kdh-laptop-logo{
    font-size: 10px;
    font-weight: 800;
    color: #fff;
  }

  .kdh-laptop-nav{
    display: flex;
    gap: 8px;
  }

  .kdh-laptop-nav span{
    font-size: 8px;
    color: #8a94b8;
  }

  .kdh-laptop-content{
    position: relative;
    z-index: 1;
  }

  .kdh-laptop-label{
    font-size: 10px;
    color: #8fa5e0;
    letter-spacing: 1px;
    margin-bottom: 4px;
  }

  .kdh-laptop-title{
    font-size: 22px;
    font-weight: 800;
    color: #fff;
    line-height: 1.2;
  }

  .kdh-laptop-title-accent{
    color: #4d8dff;
    display: block;
  }

  .kdh-laptop-sub{
    font-size: 9px;
    color: #99a5c9;
    margin: 8px 0 14px;
  }

  .kdh-laptop-btn{
    display: inline-block;
    background: #2f6df3;
    color: #fff;
    font-size: 9px;
    font-weight: 700;
    padding: 7px 14px;
    border-radius: 5px;
  }

  .kdh-laptop-base{
    height: 14px;
    background: linear-gradient(180deg, #2a2f42, #14161f);
    border-radius: 0 0 10px 10px;
    margin-top: -2px;
  }

  .kdh-laptop-base::after{
    content: "";
    display: block;
    width: 26%;
    height: 5px;
    background: #3a3f55;
    margin: 0 auto;
    border-radius: 0 0 6px 6px;
  }

  .kdh-phone{
    position: absolute;
    right: -6%;
    bottom: -8%;
    width: 140px;
    background: #111;
    border: 5px solid #1c2338;
    border-radius: 20px;
    padding: 10px 8px;
    box-shadow: 0 16px 40px rgba(0,0,0,0.5);
    animation: kdh-float 5s ease-in-out infinite;
  }

  @keyframes kdh-float{
    0%, 100%{ transform: translateY(0); }
    50%{ transform: translateY(-10px); }
  }

  .kdh-phone-screen{
    background: linear-gradient(160deg, #0b1c4a, #050a1e 70%);
    border-radius: 10px;
    padding: 10px 8px;
    position: relative;
    overflow: hidden;
  }

  .kdh-phone-label{
    font-size: 7px;
    color: #8fa5e0;
    letter-spacing: 1px;
  }

  .kdh-phone-title{
    font-size: 12px;
    font-weight: 800;
    color: #fff;
    line-height: 1.2;
    margin: 4px 0;
  }

  .kdh-phone-title span{
    color: #4d8dff;
    display: block;
  }

  .kdh-phone-btn{
    display: inline-block;
    background: #2f6df3;
    color: #fff;
    font-size: 6.5px;
    font-weight: 700;
    padding: 4px 8px;
    border-radius: 4px;
    margin-top: 6px;
  }

  .kdh-phone-check-row{
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
  }

  .kdh-phone-check-row span{
    font-size: 6px;
    color: #99a5c9;
  }

  /* ---------- responsive ---------- */

  @media (max-width: 900px){
    .kdh-container{
      grid-template-columns: 1fr;
    }
    .kdh-mockup-wrap{
      order: -1;
      min-height: 260px;
    }
    .kdh-phone{
      width: 110px;
    }
  }

  @media (max-width: 480px){
    .kdh-heading{ font-size: 26px; }
    .kdh-feature-grid{ grid-template-columns: 1fr 1fr; }
    .kdh-hero{ padding: 120px 16px 80px; }
  }

</style>

<section class="kdh-hero">
  <div class="kdh-container">

    <div>
      <p class="kdh-eyebrow">WEB DESIGN &amp; DEVELOPMENT</p>
      <h1 class="kdh-heading">We Design. We Develop.<br>We <span class="kdh-heading-accent">Grow Your Business.</span></h1>
      <p class="kdh-subtext">We create modern, responsive websites and web applications that not only look amazing but also deliver results.</p>

      <div class="kdh-feature-grid">
        <div class="kdh-feature-item"><span class="kdh-check">&#10003;</span>Modern &amp; Responsive Design</div>
        <div class="kdh-feature-item"><span class="kdh-check">&#10003;</span>Clean &amp; Optimized Code</div>
        <div class="kdh-feature-item"><span class="kdh-check">&#10003;</span>SEO Friendly</div>
        <div class="kdh-feature-item"><span class="kdh-check">&#10003;</span>Fast Loading Speed</div>
        <div class="kdh-feature-item"><span class="kdh-check">&#10003;</span>Secure &amp; Scalable Solutions</div>
        <div class="kdh-feature-item"><span class="kdh-check">&#10003;</span>Ongoing Support</div>
      </div>

      <div class="kdh-btn-row">
        <button class="kdh-btn kdh-btn-solid">Explore Our Services &#8594;</button>
        <button class="kdh-btn kdh-btn-outline">&#9742; Let's Talk</button>
      </div>
    </div>

    <div class="kdh-mockup-wrap">
      <div class="kdh-laptop">
        <div class="kdh-laptop-screen">
          <div class="kdh-laptop-topbar">
            <span class="kdh-laptop-logo">KING DIGITAL</span>
            <div class="kdh-laptop-nav">
              <span>Home</span><span>About</span><span>Services</span>
            </div>
          </div>
          <div class="kdh-laptop-content">
            <p class="kdh-laptop-label">BUILDING</p>
            <h3 class="kdh-laptop-title">Digital<span class="kdh-laptop-title-accent">Experiences</span></h3>
            <p class="kdh-laptop-sub">That Drive Real Results</p>
            <span class="kdh-laptop-btn">Discover More</span>
          </div>
        </div>
        <div class="kdh-laptop-base"></div>

        <div class="kdh-phone">
          <div class="kdh-phone-screen">
            <p class="kdh-phone-label">BUILDING</p>
            <h4 class="kdh-phone-title">Digital<span>Experiences</span></h4>
            <p style="font-size:6px;color:#99a5c9;margin:0;">That Drive Real Results</p>
            <span class="kdh-phone-btn">Discover More</span>
            <div class="kdh-phone-check-row">
              <span>&#10003; Design</span><span>&#10003; Develop</span><span>&#10003; Deploy</span>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
  // Section 1: no interactive JS required beyond CSS animations
</script>

