
<!-- ==================================================================== -->
<!-- ==== SECTION 2: WHAT WE DO (SERVICES GRID) ==== -->
<!-- ==================================================================== -->
<style>

  .kds-section{
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #fff;
    padding: 60px 20px;
  }

  .kds-container{
    max-width: 1180px;
    margin: 0 auto;
    text-align: center;
  }

  .kds-eyebrow{
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #2f6df3;
    margin: 0 0 8px 0;
  }

  .kds-heading{
    font-size: 27px;
    font-weight: 800;
    color: #101828;
    margin: 0 0 10px 0;
  }

  .kds-subtext{
    font-size: 14px;
    color: #667085;
    max-width: 520px;
    margin: 0 auto 40px;
    line-height: 1.6;
  }

  .kds-grid{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
    text-align: left;
  }

  .kds-card{
    border: 1px solid #eaecf0;
    border-radius: 12px;
    padding: 24px 22px;
    background: #fff;
    opacity: 0;
    transform: translateY(14px);
    animation: kds-card-in 0.5s ease forwards;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
  }

  @keyframes kds-card-in{
    to{ opacity: 1; transform: translateY(0); }
  }

  .kds-card:hover{
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(16,24,40,0.10);
    border-color: #d6e0ff;
  }

  .kds-grid .kds-card:nth-child(1){ animation-delay: 0.02s; }
  .kds-grid .kds-card:nth-child(2){ animation-delay: 0.08s; }
  .kds-grid .kds-card:nth-child(3){ animation-delay: 0.14s; }
  .kds-grid .kds-card:nth-child(4){ animation-delay: 0.20s; }
  .kds-grid .kds-card:nth-child(5){ animation-delay: 0.26s; }
  .kds-grid .kds-card:nth-child(6){ animation-delay: 0.32s; }

  .kds-icon{
    width: 42px;
    height: 42px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    margin-bottom: 16px;
  }

  .kds-icon-blue{ background: #eaf0ff; }
  .kds-icon-purple{ background: #f3ecff; }
  .kds-icon-green{ background: #e8f9f0; }
  .kds-icon-orange{ background: #fff1e9; }
  .kds-icon-navy{ background: #eaf1ff; }
  .kds-icon-violet{ background: #f2ecff; }

  .kds-card-title{
    font-size: 16px;
    font-weight: 700;
    color: #101828;
    margin: 0 0 8px 0;
  }

  .kds-card-text{
    font-size: 13px;
    color: #667085;
    line-height: 1.6;
    margin: 0 0 14px 0;
  }

  .kds-learn-more{
    font-size: 13px;
    font-weight: 600;
    color: #2f6df3;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: gap 0.25s ease;
  }

  .kds-learn-more:hover{
    gap: 9px;
  }

  @media (max-width: 900px){
    .kds-grid{ grid-template-columns: 1fr 1fr; }
  }

  @media (max-width: 560px){
    .kds-grid{ grid-template-columns: 1fr; }
    .kds-heading{ font-size: 21px; }
    .kds-section{ padding: 44px 16px; }
  }

</style>

<section class="kds-section">
  <div class="kds-container">

    <p class="kds-eyebrow">WHAT WE DO</p>
    <h2 class="kds-heading">Complete Web Solutions for Your Business</h2>
    <p class="kds-subtext">From stunning design to powerful development, we provide end-to-end solutions to help your business grow online.</p>

    <div class="kds-grid">

      <div class="kds-card">
        <div class="kds-icon kds-icon-blue">&#128394;</div>
        <h3 class="kds-card-title">Custom Web Design</h3>
        <p class="kds-card-text">We design unique, modern and user-friendly websites that represent your brand perfectly.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

      <div class="kds-card">
        <div class="kds-icon kds-icon-purple">&#128187;</div>
        <h3 class="kds-card-title">Web Development</h3>
        <p class="kds-card-text">Clean, scalable and efficient code using the latest technologies for the best performance.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

      <div class="kds-card">
        <div class="kds-icon kds-icon-green">&#128241;</div>
        <h3 class="kds-card-title">Responsive Design</h3>
        <p class="kds-card-text">Pixel-perfect websites that look and work great on all devices — desktop, tablet and mobile.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

      <div class="kds-card">
        <div class="kds-icon kds-icon-orange">&#128722;</div>
        <h3 class="kds-card-title">E-Commerce Solutions</h3>
        <p class="kds-card-text">Secure and feature-rich e-commerce websites that help you sell more and grow your business.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

      <div class="kds-card">
        <div class="kds-icon kds-icon-navy">&#128200;</div>
        <h3 class="kds-card-title">SEO Friendly</h3>
        <p class="kds-card-text">We build SEO-optimized websites that rank higher and bring more organic traffic.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

      <div class="kds-card">
        <div class="kds-icon kds-icon-violet">&#127911;</div>
        <h3 class="kds-card-title">Support &amp; Maintenance</h3>
        <p class="kds-card-text">Ongoing support and maintenance to keep your website secure, updated and running smoothly.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

    </div>

  </div>
</section>

<script>
  // Section 2: no interactive JS required beyond CSS hover/animations
</script>
