<!-- ==================================================================== -->
<!-- ==== SECTION 6: WHY CHOOSE US ==== -->
<!-- ==================================================================== -->
<style>
  .kdc-section {
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #fff;
    padding: 56px 20px;
    text-align: center;
  }

  .kdc-eyebrow {
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #2f6df3;
    margin: 0 0 8px 0;
  }

  .kdc-heading {
    font-size: 44px;
    font-weight: 800;
    color: #101828;
    margin: 0 0 40px 0;
  }

  .kdc-heading em {
    color: #2f6df3;
    font-style: normal;
  }

  .kdc-grid {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 26px;
    text-align: left;
  }

  .kdc-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    opacity: 0;
    transform: translateY(12px);
    animation: kdc-item-in 0.5s ease forwards;
  }

  @keyframes kdc-item-in {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .kdc-grid .kdc-item:nth-child(1) {
    animation-delay: 0.02s;
  }

  .kdc-grid .kdc-item:nth-child(2) {
    animation-delay: 0.10s;
  }

  .kdc-grid .kdc-item:nth-child(3) {
    animation-delay: 0.18s;
  }

  .kdc-grid .kdc-item:nth-child(4) {
    animation-delay: 0.26s;
  }

  .kdc-icon {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex: 0 0 auto;
    transition: transform 0.3s ease;
  }

  .kdc-item:hover .kdc-icon {
    transform: scale(1.1) rotate(-4deg);
  }

  .kdc-icon-blue {
    background: #eaf0ff;
  }

  .kdc-icon-green {
    background: #e8f9f0;
  }

  .kdc-icon-purple {
    background: #f3ecff;
  }

  .kdc-icon-orange {
    background: #fff1e9;
  }

  .kdc-item-title {
    font-size: 14.5px;
    font-weight: 700;
    color: #101828;
    margin: 0 0 4px 0;
  }

  .kdc-item-text {
    font-size: 12.5px;
    color: #667085;
    line-height: 1.55;
  }

  @media (max-width: 900px) {
    .kdc-grid {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media (max-width: 560px) {
    .kdc-grid {
      grid-template-columns: 1fr;
    }

    .kdc-heading {
      font-size: 19px;
    }
  }


  .asdhhadka {


    svg {

      fill: #2f6df3;
      width: 25px;

    }
  }
</style>

<section class="kdc-section">
  <p class="kdc-eyebrow">WHY CHOOSE US</p>
  <h2 class="kdc-heading">We Build Websites That <br> <em> Deliver Success</em></h2>
  <br>
  <div class="kdc-grid">

    <div class="kdc-item">
      <div class="kdc-icon kdc-icon-blue"><span class="asdhhadka"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
            <path d="M128 320L156.5 92C158.5 76 172.1 64 188.3 64L356.9 64C371.9 64 384 76.1 384 91.1C384 94.3 383.4 97.6 382.3 100.6L336 224L475.3 224C495.5 224 512 240.4 512 260.7C512 268.1 509.8 275.3 505.6 281.4L313.4 562.4C307.5 571 297.8 576.1 287.5 576.1L284.6 576.1C268.9 576.1 256.1 563.3 256.1 547.6C256.1 545.3 256.4 543 257 540.7L304 352L160 352C142.3 352 128 337.7 128 320z" />
          </svg></span></div>
      <div>
        <p class="kdc-item-title">High Performance</p>
        <p class="kdc-item-text">Fast loading websites optimized for the best performance.</p>
      </div>
    </div>

    <div class="kdc-item">
      <div class="kdc-icon kdc-icon-green"><span class="asdhhadka"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z"/></svg></span></div>
      <div>
        <p class="kdc-item-title">Secure &amp; Reliable</p>
        <p class="kdc-item-text">We follow best practices to keep your website safe and secure.</p>
      </div>
    </div>

    <div class="kdc-item">
      <div class="kdc-icon kdc-icon-purple"><span class="asdhhadka"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M392.8 65.2C375.8 60.3 358.1 70.2 353.2 87.2L225.2 535.2C220.3 552.2 230.2 569.9 247.2 574.8C264.2 579.7 281.9 569.8 286.8 552.8L414.8 104.8C419.7 87.8 409.8 70.1 392.8 65.2zM457.4 201.3C444.9 213.8 444.9 234.1 457.4 246.6L530.8 320L457.4 393.4C444.9 405.9 444.9 426.2 457.4 438.7C469.9 451.2 490.2 451.2 502.7 438.7L598.7 342.7C611.2 330.2 611.2 309.9 598.7 297.4L502.7 201.4C490.2 188.9 469.9 188.9 457.4 201.4zM182.7 201.3C170.2 188.8 149.9 188.8 137.4 201.3L41.4 297.3C28.9 309.8 28.9 330.1 41.4 342.6L137.4 438.6C149.9 451.1 170.2 451.1 182.7 438.6C195.2 426.1 195.2 405.8 182.7 393.3L109.3 320L182.6 246.6C195.1 234.1 195.1 213.8 182.6 201.3z"/></svg></span></div>
      <div>
        <p class="kdc-item-title">Clean &amp; Scalable Code</p>
        <p class="kdc-item-text">Well-structured and clean code that's easy to maintain and scale in the future.</p>
      </div>
    </div>

    <div class="kdc-item">
      <div class="kdc-icon kdc-icon-orange"><span class="asdhhadka"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z"/></svg></span></div>
      <div>
        <p class="kdc-item-title">Results Driven</p>
        <p class="kdc-item-text">Our websites are designed to generate leads, conversions and real business growth.</p>
      </div>
    </div>

  </div>
</section>

<script>
  // Section 6: no interactive JS required beyond CSS hover/animations
</script>