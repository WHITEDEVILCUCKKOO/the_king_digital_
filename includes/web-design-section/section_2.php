<!-- ==================================================================== -->
<!-- ==== SECTION 2: WHAT WE DO (SERVICES GRID) ==== -->
<!-- ==================================================================== -->
<style>
  .kds-section {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #fff;
    padding: 60px 20px;
  }

  .kds-container {
    max-width: 1180px;
    margin: 0 auto;
    text-align: center;
  }

  .kds-eyebrow {
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #2f6df3;
    margin: 0 0 8px 0;
  }

  .kds-heading {
    font-size: 44px;
    font-weight: 800;
    color: #101828;
    margin: 0 0 10px 0;
  }

  .kds-heading  em{
    color: #2f6df3;
    font-style: normal;

  }

  .kds-subtext {
    font-size: 14px;
    color: #667085;
    max-width: 520px;
    margin: 0 auto 40px;
    line-height: 1.6;
  }

  .kds-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
    text-align: left;
  }

  .kds-card {
    border: 1px solid #eaecf0;
    border-radius: 12px;
    padding: 24px 22px;
    background: #fff;
    opacity: 0;
    transform: translateY(14px);
    animation: kds-card-in 0.5s ease forwards;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
  }

  @keyframes kds-card-in {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .kds-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(16, 24, 40, 0.10);
    border-color: #d6e0ff;
  }

  .kds-grid .kds-card:nth-child(1) {
    animation-delay: 0.02s;
  }

  .kds-grid .kds-card:nth-child(2) {
    animation-delay: 0.08s;
  }

  .kds-grid .kds-card:nth-child(3) {
    animation-delay: 0.14s;
  }

  .kds-grid .kds-card:nth-child(4) {
    animation-delay: 0.20s;
  }

  .kds-grid .kds-card:nth-child(5) {
    animation-delay: 0.26s;
  }

  .kds-grid .kds-card:nth-child(6) {
    animation-delay: 0.32s;
  }

  .kds-icon {
    width: 42px;
    height: 42px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    margin-bottom: 16px;
  }

  .kds-icon-blue {
    background: #eaf0ff;
  }

  .kds-icon-purple {
    background: #f3ecff;
  }

  .kds-icon-green {
    background: #e8f9f0;
  }

  .kds-icon-orange {
    background: #fff1e9;
  }

  .kds-icon-navy {
    background: #eaf1ff;
  }

  .kds-icon-violet {
    background: #f2ecff;
  }

  .kds-card-title {
    font-size: 16px;
    font-weight: 700;
    color: #101828;
    margin: 0 0 8px 0;
  }

  .kds-card-text {
    font-size: 13px;
    color: #667085;
    line-height: 1.6;
    margin: 0 0 14px 0;
  }

  .kds-learn-more {
    font-size: 13px;
    font-weight: 600;
    color: #2f6df3;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: gap 0.25s ease;
  }

  .kds-learn-more:hover {
    gap: 9px;
  }

  @media (max-width: 900px) {
    .kds-grid {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media (max-width: 560px) {
    .kds-grid {
      grid-template-columns: 1fr;
    }

    .kds-heading {
      font-size: 21px;
    }

    .kds-section {
      padding: 44px 16px;
    }
  }

  .section_2_cards_icons {

    svg {
      fill: #0438F0;
      width: 25px;
    }
  }

  .section_2_cards_icon1 {

    svg {
      fill: #0438F0;
      width: 25px;
    }
  }
</style>

<section class="kds-section">
  <div class="kds-container">

    <p class="kds-eyebrow">WHAT WE DO</p>
    <h2 class="kds-heading">Complete Web Solutions for <br> <em> Your Business</em></h2>
    <p class="kds-subtext">From stunning design to powerful development, we provide end-to-end solutions to help your business grow online.</p>

    <div class="kds-grid">

      <div class="kds-card">
        <div class="kds-icon kds-icon-blue"><span class="section_2_cards_icons"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M100.4 417.2C104.5 402.6 112.2 389.3 123 378.5L304.2 197.3L338.1 163.4C354.7 180 389.4 214.7 442.1 267.4L476 301.3L442.1 335.2L260.9 516.4C250.2 527.1 236.8 534.9 222.2 539L94.4 574.6C86.1 576.9 77.1 574.6 71 568.4C64.9 562.2 62.6 553.3 64.9 545L100.4 417.2zM156 413.5C151.6 418.2 148.4 423.9 146.7 430.1L122.6 517L209.5 492.9C215.9 491.1 221.7 487.8 226.5 483.2L155.9 413.5zM510 267.4C493.4 250.8 458.7 216.1 406 163.4L372 129.5C398.5 103 413.4 88.1 416.9 84.6C430.4 71 448.8 63.4 468 63.4C487.2 63.4 505.6 71 519.1 84.6L554.8 120.3C568.4 133.9 576 152.3 576 171.4C576 190.5 568.4 209 554.8 222.5C551.3 226 536.4 240.9 509.9 267.4z" />
            </svg></span></div>
        <h3 class="kds-card-title">Custom Web Design</h3>
        <p class="kds-card-text">We design unique, modern and user-friendly websites that represent your brand perfectly.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

      <div class="kds-card">
        <div class="kds-icon kds-icon-purple"><span class="section_2_cards_icons"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M392.8 65.2C375.8 60.3 358.1 70.2 353.2 87.2L225.2 535.2C220.3 552.2 230.2 569.9 247.2 574.8C264.2 579.7 281.9 569.8 286.8 552.8L414.8 104.8C419.7 87.8 409.8 70.1 392.8 65.2zM457.4 201.3C444.9 213.8 444.9 234.1 457.4 246.6L530.8 320L457.4 393.4C444.9 405.9 444.9 426.2 457.4 438.7C469.9 451.2 490.2 451.2 502.7 438.7L598.7 342.7C611.2 330.2 611.2 309.9 598.7 297.4L502.7 201.4C490.2 188.9 469.9 188.9 457.4 201.4zM182.7 201.3C170.2 188.8 149.9 188.8 137.4 201.3L41.4 297.3C28.9 309.8 28.9 330.1 41.4 342.6L137.4 438.6C149.9 451.1 170.2 451.1 182.7 438.6C195.2 426.1 195.2 405.8 182.7 393.3L109.3 320L182.6 246.6C195.1 234.1 195.1 213.8 182.6 201.3z" />
            </svg></span></div>
        <h3 class="kds-card-title">Web Development</h3>
        <p class="kds-card-text">Clean, scalable and efficient code using the latest technologies for the best performance.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

      <div class="kds-card">
        <div class="kds-icon kds-icon-green"><span class="section_2_cards_icon1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" colo>
              <path d="M208 64C172.7 64 144 92.7 144 128L144 512C144 547.3 172.7 576 208 576L432 576C467.3 576 496 547.3 496 512L496 128C496 92.7 467.3 64 432 64L208 64zM280 480L360 480C373.3 480 384 490.7 384 504C384 517.3 373.3 528 360 528L280 528C266.7 528 256 517.3 256 504C256 490.7 266.7 480 280 480z" />
            </svg></span></div>
        <h3 class="kds-card-title">Responsive Design</h3>
        <p class="kds-card-text">Pixel-perfect websites that look and work great on all devices — desktop, tablet and mobile.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

      <div class="kds-card">
        <div class="kds-icon kds-icon-orange"><span class="section_2_cards_icons"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M24 48C10.7 48 0 58.7 0 72C0 85.3 10.7 96 24 96L69.3 96C73.2 96 76.5 98.8 77.2 102.6L129.3 388.9C135.5 423.1 165.3 448 200.1 448L456 448C469.3 448 480 437.3 480 424C480 410.7 469.3 400 456 400L200.1 400C188.5 400 178.6 391.7 176.5 380.3L171.4 352L475 352C505.8 352 532.2 330.1 537.9 299.8L568.9 133.9C572.6 114.2 557.5 96 537.4 96L124.7 96L124.3 94C119.5 67.4 96.3 48 69.2 48L24 48zM208 576C234.5 576 256 554.5 256 528C256 501.5 234.5 480 208 480C181.5 480 160 501.5 160 528C160 554.5 181.5 576 208 576zM432 576C458.5 576 480 554.5 480 528C480 501.5 458.5 480 432 480C405.5 480 384 501.5 384 528C384 554.5 405.5 576 432 576z" />
            </svg></span></div>
        <h3 class="kds-card-title">E-Commerce Solutions</h3>
        <p class="kds-card-text">Secure and feature-rich e-commerce websites that help you sell more and grow your business.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

      <div class="kds-card">
        <div class="kds-icon kds-icon-navy"><span class="section_2_cards_icons">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z" />
            </svg>
          </span></div>
        <h3 class="kds-card-title">SEO Friendly</h3>
        <p class="kds-card-text">We build SEO-optimized websites that rank higher and bring more organic traffic.</p>
        <a href="#" class="kds-learn-more">Learn More &#8594;</a>
      </div>

      <div class="kds-card">
        <div class="kds-icon kds-icon-violet"><span class="section_2_cards_icons"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M320 128C241 128 175.3 185.3 162.3 260.7C171.6 257.7 181.6 256 192 256L208 256C234.5 256 256 277.5 256 304L256 400C256 426.5 234.5 448 208 448L192 448C139 448 96 405 96 352L96 288C96 164.3 196.3 64 320 64C443.7 64 544 164.3 544 288L544 456.1C544 522.4 490.2 576.1 423.9 576.1L336 576L304 576C277.5 576 256 554.5 256 528C256 501.5 277.5 480 304 480L336 480C362.5 480 384 501.5 384 528L384 528L424 528C463.8 528 496 495.8 496 456L496 435.1C481.9 443.3 465.5 447.9 448 447.9L432 447.9C405.5 447.9 384 426.4 384 399.9L384 303.9C384 277.4 405.5 255.9 432 255.9L448 255.9C458.4 255.9 468.3 257.5 477.7 260.6C464.7 185.3 399.1 127.9 320 127.9z" />
            </svg></span></div>
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