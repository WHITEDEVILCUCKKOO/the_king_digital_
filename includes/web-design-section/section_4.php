
<!-- ==================================================================== -->
<!-- ==== SECTION 4: OUR RECENT PROJECTS ==== -->
<!-- ==================================================================== -->
<style>

  .kdj-section{
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #fff;
    padding: 56px 20px;
  }

  .kdj-container{
    max-width: 1180px;
    margin: 0 auto;
  }

  .kdj-top-row{
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 30px;
    flex-wrap: wrap;
    gap: 14px;
  }

  .kdj-eyebrow{
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #2f6df3;
    margin: 0 0 6px 0;
  }

  .kdj-heading{
    font-size: 44px;
    font-weight: 800;
    color: #101828;
    margin: 0;
  }

  .kdj-heading em {
    color: #4E8DFF;
    font-style: normal;
  }

  .kdj-view-all{
    padding: 9px 18px;
    border: 1.5px solid #2f6df3;
    border-radius: 20px;
    font-size: 12.5px;
    font-weight: 600;
    color: #2f6df3;
    background: #fff;
    cursor: pointer;
    transition: background 0.25s ease, color 0.25s ease, transform 0.2s ease;
  }

  .kdj-view-all:hover{
    background: #2f6df3;
    color: #fff;
    transform: translateY(-2px);
  }

  .kdj-grid{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  .kdj-card{
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #eaecf0;
    opacity: 0;
    transform: translateY(14px);
    animation: kdj-card-in 0.5s ease forwards;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  @keyframes kdj-card-in{
    to{ opacity: 1; transform: translateY(0); }
  }

  .kdj-grid .kdj-card:nth-child(1){ animation-delay: 0.02s; }
  .kdj-grid .kdj-card:nth-child(2){ animation-delay: 0.10s; }
  .kdj-grid .kdj-card:nth-child(3){ animation-delay: 0.18s; }
  .kdj-grid .kdj-card:nth-child(4){ animation-delay: 0.26s; }

  .kdj-card:hover{
    transform: translateY(-6px);
    box-shadow: 0 16px 32px rgba(16,24,40,0.12);
  }

  .kdj-thumb{
    width: 100%;
    /* height: 150px; */
    display: flex;
    /* align-items: flex-start; */
    /* padding: 14px; */
    /* color: #fff; */
    /* font-size: 13px; */
    /* font-weight: 700; */
    /* box-sizing: border-box; */

    img{
      width: 100%;
      object-fit: cover;
    }
  }

  .kdj-thumb-1{ background: linear-gradient(160deg, #4a3524, #241a14); }
  .kdj-thumb-2{ background: linear-gradient(160deg, #1f3d24, #0e1c11); }
  .kdj-thumb-3{ background: linear-gradient(160deg, #1a2433, #0a0f18); }
  .kdj-thumb-4{ background: linear-gradient(160deg, #3a1f6b, #140a2e); }

  .kdj-info{
    padding: 14px 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .kdj-info-title{
    font-size: 14px;
    font-weight: 700;
    color: #101828;
    margin: 0 0 2px 0;
  }

  .kdj-info-sub{
    font-size: 11.5px;
    color: #667085;
  }

  .kdj-arrow{
    color: #2f6df3;
    font-size: 15px;
    transition: transform 0.25s ease;
  }

  .kdj-card:hover .kdj-arrow{
    transform: translateX(4px);
  }

  .kdj-dots{
    display: flex;
    justify-content: center;
    gap: 6px;
    margin-top: 26px;
  }

  .kdj-dot{
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #d0d5dd;
    cursor: pointer;
    transition: background 0.25s ease, transform 0.25s ease;
  }

  .kdj-dot.kdj-dot-active{
    background: #2f6df3;
    transform: scale(1.2);
  }

  @media (max-width: 900px){
    .kdj-grid{ grid-template-columns: 1fr 1fr; }
  }

  @media (max-width: 560px){
    .kdj-grid{ grid-template-columns: 1fr; }
    .kdj-heading{ font-size: 20px; }
  }

</style>

<section class="kdj-section">
  <div class="kdj-container">

    <div class="kdj-top-row">
      <div>
        <p class="kdj-eyebrow">OUR WORK</p>
        <h2 class="kdj-heading">Our Recent <em> Projects</em></h2>
      </div>
      <button class="kdj-view-all">View All Projects &#8594;</button>
    </div>

    <div class="kdj-grid" id="kdjGrid">

      <div class="kdj-card">
        <div class="kdj-thumb kdj-thumb-1"><img src="assets/images/img/design_web_ss.png" alt=""></div>
        <div class="kdj-info">
          <div>
            <p class="kdj-info-title">Interior Design</p>
            <span class="kdj-info-sub">Web Design</span>
          </div>
          <span class="kdj-arrow">&#8594;</span>
        </div>
      </div>

      <div class="kdj-card">
        <div class="kdj-thumb kdj-thumb-2"><img src="assets/images/img/food_web_ss.png" alt=""></div>
        <div class="kdj-info">
          <div>
            <p class="kdj-info-title">Healthy Food Delivery</p>
            <span class="kdj-info-sub">Web Development</span>
          </div>
          <span class="kdj-arrow">&#8594;</span>
        </div>
      </div>

      <div class="kdj-card">
        <div class="kdj-thumb kdj-thumb-3"><img src="assets/images/img/villa_lux.png" alt=""></div>
        <div class="kdj-info">
          <div>
            <p class="kdj-info-title">Luxury Villas</p>
            <span class="kdj-info-sub">Web Design &amp; Development</span>
          </div>
          <span class="kdj-arrow">&#8594;</span>
        </div>
      </div>

      <div class="kdj-card">
        <div class="kdj-thumb kdj-thumb-4"><img src="assets/images/img/digital_agence.png" alt=""></div>
        <div class="kdj-info">
          <div>
            <p class="kdj-info-title">Digital Agency</p>
            <span class="kdj-info-sub">Web Development</span>
          </div>
          <span class="kdj-arrow">&#8594;</span>
        </div>
      </div>

    </div>

    <div class="kdj-dots" id="kdjDots" style="display: none;">
      <span class="kdj-dot kdj-dot-active"></span>
      <span class="kdj-dot"></span>
      <span class="kdj-dot"></span>
    </div>

  </div>
</section>

<script>
  (function(){
    var kdjDots = document.querySelectorAll('#kdjDots .kdj-dot');
    kdjDots.forEach(function(dot){
      dot.addEventListener('click', function(){
        kdjDots.forEach(function(d){ d.classList.remove('kdj-dot-active'); });
        dot.classList.add('kdj-dot-active');
      });
    });
  })();
</script>
