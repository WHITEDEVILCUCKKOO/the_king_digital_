<!-- ==================================================================== -->
<!-- ==== SECTION 7: STATS BAR ==== -->
<!-- ==================================================================== -->
<style>

  .kdst-section{
    font-family: 'Segoe UI', Arial, sans-serif;
    background: linear-gradient(100deg, #101c4d, #1a1160);
    padding: 40px 20px;
  }

  .kdst-container{
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  .kdst-stat{
    display: flex;
    align-items: center;
    gap: 14px;
    color: #fff;
    justify-content: center;
    opacity: 0;
    transform: translateY(10px);
    animation: kdst-stat-in 0.5s ease forwards;
  }

  @keyframes kdst-stat-in{
    to{ opacity: 1; transform: translateY(0); }
  }

  .kdst-container .kdst-stat:nth-child(1){ animation-delay: 0.02s; }
  .kdst-container .kdst-stat:nth-child(2){ animation-delay: 0.10s; }
  .kdst-container .kdst-stat:nth-child(3){ animation-delay: 0.18s; }
  .kdst-container .kdst-stat:nth-child(4){ animation-delay: 0.26s; }

  .kdst-icon{
    font-size: 24px;
  }

  .kdst-num{
    font-size: 20px;
    font-weight: 800;
    line-height: 1.2;
  }

  .kdst-label{
    font-size: 12px;
    color: #b9c2e6;
  }

  @media (max-width: 700px){
    .kdst-container{ grid-template-columns: 1fr 1fr; }
  }

  @media (max-width: 420px){
    .kdst-container{ grid-template-columns: 1fr; }
  }

</style>

<section class="kdst-section">
  <div class="kdst-container">

    <div class="kdst-stat">
      <span class="kdst-icon">&#128578;</span>
      <div>
        <div class="kdst-num">150+</div>
        <div class="kdst-label">Happy Clients</div>
      </div>
    </div>

    <div class="kdst-stat">
      <span class="kdst-icon">&#128188;</span>
      <div>
        <div class="kdst-num">250+</div>
        <div class="kdst-label">Projects Completed</div>
      </div>
    </div>

    <div class="kdst-stat">
      <span class="kdst-icon">&#127942;</span>
      <div>
        <div class="kdst-num">8+</div>
        <div class="kdst-label">Years of Experience</div>
      </div>
    </div>

    <div class="kdst-stat">
      <span class="kdst-icon">&#127911;</span>
      <div>
        <div class="kdst-num">24/7</div>
        <div class="kdst-label">Support Available</div>
      </div>
    </div>

  </div>
</section>

<script>
  // Section 7: no interactive JS required beyond CSS animations
</script>
