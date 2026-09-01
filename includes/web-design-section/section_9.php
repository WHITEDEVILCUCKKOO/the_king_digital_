
<!-- ==================================================================== -->
<!-- ==== SECTION 9: FINAL CTA ==== -->
<!-- ==================================================================== -->
<style>

  .kdf-section{
    font-family: 'Segoe UI', Arial, sans-serif;
    background: linear-gradient(100deg, #10164a, #3a1080);
    padding: 34px 20px;
  }

  .kdf-container{
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
  }

  .kdf-left{
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .kdf-icon{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: rgba(255,255,255,0.12);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #fff;
    flex: 0 0 auto;
    animation: kdf-icon-pulse 2.5s ease-in-out infinite;
  }

  @keyframes kdf-icon-pulse{
    0%, 100%{ transform: scale(1); }
    50%{ transform: scale(1.1); }
  }

  .kdf-title{
    font-size: 25px;
    font-weight: 800;
    color: #fff;
    margin: 0 0 4px 0;
  }

  .kdf-text{
    font-size: 12.5px;
    color: #cbd2f0;
    margin: 0;
    max-width: 420px;
  }

  .kdf-btn{
    padding: 13px 24px;
    background: #fff;
    color: #10164a;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    white-space: nowrap;
    transition: transform 0.2s ease, box-shadow 0.25s ease;
  }

  .kdf-btn:hover{
    transform: translateY(-2px);
    box-shadow: 0 12px 26px rgba(0,0,0,0.3);
  }

  @media (max-width: 700px){
    .kdf-container{ flex-direction: column; text-align: center; }
    .kdf-left{ flex-direction: column; text-align: center; }
  }

</style>

<section class="kdf-section">
  <div class="kdf-container">

    <div class="kdf-left">
      <span class="kdf-icon">&#9993;</span>
      <div>
        <p class="kdf-title">Ready to Build Your Dream Website?</p>
        <p class="kdf-text">Let's work together to create a website that represents your brand, engages your audience and drives real results.</p>
      </div>
    </div>

    <button class="kdf-btn">Get a Free Quote &#8594;</button>

  </div>
</section>

<script>
  // Section 9: no interactive JS required beyond CSS animations
</script>

