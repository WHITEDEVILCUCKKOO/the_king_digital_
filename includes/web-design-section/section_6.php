<!-- ==================================================================== -->
<!-- ==== SECTION 6: WHY CHOOSE US ==== -->
<!-- ==================================================================== -->
<style>

  .kdc-section{
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #fff;
    padding: 56px 20px;
    text-align: center;
  }

  .kdc-eyebrow{
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #2f6df3;
    margin: 0 0 8px 0;
  }

  .kdc-heading{
    font-size: 24px;
    font-weight: 800;
    color: #101828;
    margin: 0 0 40px 0;
  }

  .kdc-grid{
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 26px;
    text-align: left;
  }

  .kdc-item{
    display: flex;
    align-items: flex-start;
    gap: 14px;
    opacity: 0;
    transform: translateY(12px);
    animation: kdc-item-in 0.5s ease forwards;
  }

  @keyframes kdc-item-in{
    to{ opacity: 1; transform: translateY(0); }
  }

  .kdc-grid .kdc-item:nth-child(1){ animation-delay: 0.02s; }
  .kdc-grid .kdc-item:nth-child(2){ animation-delay: 0.10s; }
  .kdc-grid .kdc-item:nth-child(3){ animation-delay: 0.18s; }
  .kdc-grid .kdc-item:nth-child(4){ animation-delay: 0.26s; }

  .kdc-icon{
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

  .kdc-item:hover .kdc-icon{
    transform: scale(1.1) rotate(-4deg);
  }

  .kdc-icon-blue{ background: #eaf0ff; }
  .kdc-icon-green{ background: #e8f9f0; }
  .kdc-icon-purple{ background: #f3ecff; }
  .kdc-icon-orange{ background: #fff1e9; }

  .kdc-item-title{
    font-size: 14.5px;
    font-weight: 700;
    color: #101828;
    margin: 0 0 4px 0;
  }

  .kdc-item-text{
    font-size: 12.5px;
    color: #667085;
    line-height: 1.55;
  }

  @media (max-width: 900px){
    .kdc-grid{ grid-template-columns: 1fr 1fr; }
  }

  @media (max-width: 560px){
    .kdc-grid{ grid-template-columns: 1fr; }
    .kdc-heading{ font-size: 19px; }
  }

</style>

<section class="kdc-section">
  <p class="kdc-eyebrow">WHY CHOOSE US</p>
  <h2 class="kdc-heading">We Build Websites That Deliver Success</h2>

  <div class="kdc-grid">

    <div class="kdc-item">
      <div class="kdc-icon kdc-icon-blue">&#9889;</div>
      <div>
        <p class="kdc-item-title">High Performance</p>
        <p class="kdc-item-text">Fast loading websites optimized for the best performance.</p>
      </div>
    </div>

    <div class="kdc-item">
      <div class="kdc-icon kdc-icon-green">&#128737;</div>
      <div>
        <p class="kdc-item-title">Secure &amp; Reliable</p>
        <p class="kdc-item-text">We follow best practices to keep your website safe and secure.</p>
      </div>
    </div>

    <div class="kdc-item">
      <div class="kdc-icon kdc-icon-purple">&#60;/&#62;</div>
      <div>
        <p class="kdc-item-title">Clean &amp; Scalable Code</p>
        <p class="kdc-item-text">Well-structured and clean code that's easy to maintain and scale in the future.</p>
      </div>
    </div>

    <div class="kdc-item">
      <div class="kdc-icon kdc-icon-orange">&#128200;</div>
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
