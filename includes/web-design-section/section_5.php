

<!-- ==================================================================== -->
<!-- ==== SECTION 5: TECHNOLOGIES WE USE ==== -->
<!-- ==================================================================== -->
<style>

  .kdt-section{
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #0a0e1a;
    padding: 56px 20px;
    position: relative;
  }

  .kdt-container{
    max-width: 1130px;
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
    font-size: 44px;
    font-weight: 800;
    color: #fff;
    margin: 0 0 40px 0;
  }
  .kdt-heading em{
    font-style: normal;
    color: #4E8DFF;
  }

  .kdt-grid{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
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
    width: 50px;
    height: 50px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: 800;
    color: #fff;
  }

  /* .kdt-icon-html{ background: #e34f26; }
  .kdt-icon-css{ background: #1572b6; }
  .kdt-icon-js{ background: #f0db4f; color: #1a1a1a; }
  .kdt-icon-react{ background: #20232a; color: #61dafb; }
  .kdt-icon-php{ background: #777bb4; }
  .kdt-icon-mysql{ background: #fcfcfc; color: #ffffff; }
  .kdt-icon-wp{ background: #21759b; } */

  .kdt-label{
    font-size: 12.5px;
    font-weight: 600;
    color: #cbd2e6;
  }

  @media (max-width: 560px){
    .kdt-heading{ font-size: 19px; }
    .kdt-badge{ width: 100px; padding: 16px 8px; }
  }

.glowing_box {
    position: absolute;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    background: radial-gradient(
        circle,
        rgba(255,255,255,0.8) 0%,
        rgba(120,120,120,0.3) 35%,
        transparent 70%
    );
    filter: blur(20px);
    opacity: 0.45;
    pointer-events: none;
    animation: floatingGlow 6s ease-in-out infinite alternate;
}

.glowing_box:nth-child(1) {
    top: -100px;
    left: -80px;
}

.glowing_box:nth-child(2) {
    top: 15%;
    right: -120px;
    animation-delay: 1s;
}

.glowing_box:nth-child(3) {
    bottom: -120px;
    left: 25%;
    animation-delay: 2s;
}

.glowing_box:nth-child(4) {
    bottom: 5%;
    right: 10%;
    animation-delay: 3s;
}

@keyframes floatingGlow {
    0% {
        transform: translate(0, 0) scale(1);
    }

    100% {
        transform: translate(30px, -25px) scale(1.15);
    }
}

</style>

<section class="kdt-section">
  <div class="glowing_box"></div>
  <div class="glowing_box"></div>
  <div class="glowing_box"></div>
  <!-- <div class="glowing_box"></div> -->
  <div class="kdt-container">

    <p class="kdt-eyebrow">TECHNOLOGIES WE USE</p>
    <h2 class="kdt-heading"><em>Powerful Technologies </em> <br> for Best Results</h2>

    <div class="kdt-grid">
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-html"><img src="assets/images/logos/html_logo.png" alt=""></span><span class="kdt-label">HTML5</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-css"><img src="assets/images/logos/css_logo.png" alt=""></span><span class="kdt-label">CSS3</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-js"><img src="assets/images/logos/js_logo.png" alt=""></span><span class="kdt-label">JavaScript</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-react"><img src="assets/images/logos/react_logo.png" alt=""></span><span class="kdt-label">React JS</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-php"><img src="assets/images/logos/python_logo.png" alt=""></span><span class="kdt-label">Python</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-php"><img src="assets/images/logos/php_logo.png" alt=""></span><span class="kdt-label">PHP</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-mysql"><img src="assets/images/logos/mysql_logo.png" alt=""></span><span class="kdt-label">MySQL</span></div>
      <div class="kdt-badge"><span class="kdt-icon kdt-icon-wp"><img src="assets/images/logos/wordpress_logo.png" alt=""></span><span class="kdt-label">WordPress</span></div>
    </div>

  </div>
</section>

<script>
  // Section 5: no interactive JS required beyond CSS hover/animations
</script>
