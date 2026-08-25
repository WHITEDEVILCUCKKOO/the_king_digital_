
<!-- ==================================================================== -->
<!-- ==== SECTION 8: CLIENT TESTIMONIALS ==== -->
<!-- ==================================================================== -->
<style>

  .kdte-section{
    font-family: 'Segoe UI', Arial, sans-serif;
    background: #f7f9fc;
    padding: 56px 20px;
    text-align: center;
  }

  .kdte-eyebrow{
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #2f6df3;
    margin: 0 0 8px 0;
  }

  .kdte-heading{
    font-size: 24px;
    font-weight: 800;
    color: #101828;
    margin: 0 0 36px 0;
  }

  .kdte-grid{
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    text-align: left;
  }

  .kdte-card{
    background: #fff;
    border-radius: 12px;
    padding: 22px 20px;
    box-shadow: 0 8px 22px rgba(16,24,40,0.06);
    opacity: 0;
    transform: translateY(12px);
    animation: kdte-card-in 0.5s ease forwards;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  @keyframes kdte-card-in{
    to{ opacity: 1; transform: translateY(0); }
  }

  .kdte-grid .kdte-card:nth-child(1){ animation-delay: 0.02s; }
  .kdte-grid .kdte-card:nth-child(2){ animation-delay: 0.10s; }
  .kdte-grid .kdte-card:nth-child(3){ animation-delay: 0.18s; }

  .kdte-card:hover{
    transform: translateY(-5px);
    box-shadow: 0 16px 32px rgba(16,24,40,0.10);
  }

  .kdte-quote-icon{
    font-size: 22px;
    color: #2f6df3;
    margin-bottom: 10px;
  }

  .kdte-quote-text{
    font-size: 13px;
    color: #475467;
    line-height: 1.65;
    margin: 0 0 18px 0;
  }

  .kdte-person{
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .kdte-avatar{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #eaf0ff;
    border: 1.5px dashed #b8c9f5;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    color: #7590d6;
    flex: 0 0 auto;
  }

  .kdte-person-name{
    font-size: 13px;
    font-weight: 700;
    color: #101828;
  }

  .kdte-person-role{
    font-size: 11.5px;
    color: #667085;
  }

  .kdte-dots{
    display: flex;
    justify-content: center;
    gap: 6px;
    margin-top: 28px;
  }

  .kdte-dot{
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #d0d5dd;
    cursor: pointer;
    transition: background 0.25s ease, transform 0.25s ease;
  }

  .kdte-dot.kdte-dot-active{
    background: #2f6df3;
    transform: scale(1.2);
  }

  @media (max-width: 900px){
    .kdte-grid{ grid-template-columns: 1fr; }
  }

</style>

<section class="kdte-section">
  <p class="kdte-eyebrow">CLIENTS FEEDBACK</p>
  <h2 class="kdte-heading">What Our Clients Say</h2>

  <div class="kdte-grid" id="kdteGrid">

    <div class="kdte-card">
      <div class="kdte-quote-icon">&#8220;</div>
      <p class="kdte-quote-text">King Digital transformed our vision into a stunning website. Their attention to detail and support is incredible!</p>
      <div class="kdte-person">
        <span class="kdte-avatar">Img</span>
        <div>
          <div class="kdte-person-name">Rohit Sharma</div>
          <div class="kdte-person-role">CEO, Interior Studio</div>
        </div>
      </div>
    </div>

    <div class="kdte-card">
      <div class="kdte-quote-icon">&#8220;</div>
      <p class="kdte-quote-text">Professional, creative and reliable! Our website not only looks great but also brings in more customers.</p>
      <div class="kdte-person">
        <span class="kdte-avatar">Img</span>
        <div>
          <div class="kdte-person-name">Priya Mehta</div>
          <div class="kdte-person-role">Marketing Head, Foodies</div>
        </div>
      </div>
    </div>

    <div class="kdte-card">
      <div class="kdte-quote-icon">&#8220;</div>
      <p class="kdte-quote-text">Excellent team to work with. They delivered on time and the support after launch is fantastic.</p>
      <div class="kdte-person">
        <span class="kdte-avatar">Img</span>
        <div>
          <div class="kdte-person-name">Vikram Patel</div>
          <div class="kdte-person-role">Founder, TechVision</div>
        </div>
      </div>
    </div>

  </div>

  <div class="kdte-dots" id="kdteDots">
    <span class="kdte-dot kdte-dot-active"></span>
    <span class="kdte-dot"></span>
    <span class="kdte-dot"></span>
  </div>

</section>

<script>
  (function(){
    var kdteDots = document.querySelectorAll('#kdteDots .kdte-dot');
    kdteDots.forEach(function(dot){
      dot.addEventListener('click', function(){
        kdteDots.forEach(function(d){ d.classList.remove('kdte-dot-active'); });
        dot.classList.add('kdte-dot-active');
      });
    });
  })();
</script>
