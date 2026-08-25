

<!-- ==================================================================== -->
<!-- ==== SECTION 5: TECHNOLOGIES WE USE ==== -->
<!-- ==================================================================== -->
<style>

  .kdt-section{
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #0a0e1a;
    padding: 56px 20px;
  }

  .kdt-container{
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
  }

  .kdt-eyebrow{
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #4d8dff;
    margin: 0 0 8px 0;
  }

  .kdt-heading{
    font-size: 24px;
    font-weight: 800;
    color: #fff;
    margin: 0 0 40px 0;
  }

  .kdt-grid{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 18px;
  }

  .kdt-badge{
    width: 130px;
    padding: 20px 10px;
    background: #11162a;
    border: 1px solid #232a45;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    opacity: 0;
    transform: translateY(12px);
    animation: kdt-badge-in 0.5s ease forwards;
    transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
  }

  @keyframes kdt-badge-in{
    to{ opacity: 1; transform: translateY(0); }
  }

  .kdt-grid .kdt-badge:nth-child(1){ animation-delay: 0.02s; }
  .kdt-grid .kdt-badge:nth-child(2){ animation-delay: 0.08s; }
  .kdt-grid .kdt-badge:nth-child(3){ animation-delay: 0.14s; }
  .kdt-grid .kdt-badge:nth-child(4){ animation-delay: 0.20s; }
  .kdt-grid .kdt-badge:nth-child(5){ animation-delay: 0.26s; }
  .kdt-grid .kdt-badge:nth-child(6){ animation-delay: 0.32s; }
  .kdt-grid .kdt-badge:nth-child(7){ animation-delay: 0.38s; }

  .kdt-badge:hover{
    transform: translateY(-6px);
    border-color: #4d8dff;
    box-shadow: 0 14px 28px rgba(77,141,255,0.20);
  }

  .kdt-icon{
    width: 44px;
    height: 44px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 800;
    color: #fff;
  }

  .kdt-icon-html{ background: #e34f26; }
  .kdt-icon-css{ background: #1572b6; }
  .kdt-icon-js{ background: #f0db4f; color: #1a1a1a; }
  .kdt-icon-react{ background: #20232a; color: #61dafb; }
  .kdt-icon-php{ background: #777bb4; }
  .kdt-icon-mysql{ background: #1c2733; color: #00758f; }
  .kdt-icon-wp{ background: #21759b; }

  .kdt-label{
    font-size: 12.5px;
    font-weight: 600;
    color: #cbd2e6;
  }

  @media (max-width: 560px){
    .kdt-heading{ font-size: 19px; }
    .kdt-badge{ width: 100px; padding: 16px 8px; }
  }

</style>

<section class="kdt-section">
  <div class="kdt-container">

    <p class="kdt-eyebrow">TECHNOLOGIES WE USE</p>
    <h2 class="kdt-heading">Powerful Technologies for Best Results</h2>

    <div class="kdt-grid">
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-html">5</span><span class="kdt-label">HTML5</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-css">3</span><span class="kdt-label">CSS3</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-js">JS</span><span class="kdt-label">JavaScript</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-react">&#9883;</span><span class="kdt-label">React JS</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-php">php</span><span class="kdt-label">PHP</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-mysql">&#128034;</span><span class="kdt-label">MySQL</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-wp">W</span><span class="kdt-label">WordPress</span></div>
    </div>

  </div>
</section>

<script>
  // Section 5: no interactive JS required beyond CSS hover/animations
</script>
