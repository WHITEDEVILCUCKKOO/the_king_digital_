<style>
/* ================= SSM PLATFORMS ================= */
.ssm-platforms{
  --pf-navy:#0e1b3d;
  --pf-orange:#ff7a1a;
  --pf-text:#5b6477;
  --pf-line:#e6eaf2;
  position:relative;overflow:hidden;
  background:
    radial-gradient(700px 420px at 78% 10%, #eaf2ff 0%, transparent 62%),
    radial-gradient(500px 360px at 0% 100%, #fff3e8 0%, transparent 60%),
    #fbfcff;
  color:var(--pf-navy);
  font-family:"Inter","Segoe UI",system-ui,-apple-system,Arial,sans-serif;
  padding:64px 5% 50px;
  box-sizing:border-box;
}
.ssm-platforms *{box-sizing:border-box;margin:0;padding:0}
.ssm-platforms svg{display:block}
.ssm-platforms .pf-wrap{max-width:1240px;margin:0 auto}
.ssm-platforms .pf-main{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:20px;align-items:center}

/* ---------- copy ---------- */
.ssm-platforms .pf-eyebrow{
  display:flex;align-items:center;gap:14px;margin-bottom:22px;
  font-size:12px;letter-spacing:.22em;text-transform:uppercase;color:#7b8498;
}
.ssm-platforms .pf-eyebrow::before{content:"";width:46px;height:2px;background:var(--pf-orange)}
.ssm-platforms h2{font-size:clamp(34px,4.6vw,58px);line-height:1.08;font-weight:800;letter-spacing:-.02em;margin-bottom:22px}
.ssm-platforms h2 span{display:block;color:var(--pf-orange)}
.ssm-platforms .pf-lead{font-size:16px;line-height:1.65;color:var(--pf-text);max-width:470px}

/* ---------- visual ---------- */
.ssm-platforms .pf-visual{position:relative;height:430px}
.ssm-platforms .pf-phone{
  position:absolute;left:50%;top:-6px;transform:translateX(-46%) rotate(8deg);
  width:230px;height:450px;border-radius:36px;background:#10131b;padding:9px;z-index:2;
  box-shadow:0 36px 64px rgba(14,27,61,.32);
}
.ssm-platforms .pf-screen{width:100%;height:100%;background:#fff;border-radius:28px;overflow:hidden;padding:22px 11px 8px;display:flex;flex-direction:column}
.ssm-platforms .pf-notch{position:absolute;top:15px;left:50%;transform:translateX(-50%);width:62px;height:16px;background:#10131b;border-radius:10px;z-index:3}
.ssm-platforms .pf-appbar{font-family:Georgia,serif;font-style:italic;font-weight:700;font-size:15px;text-align:center;margin-bottom:8px}
.ssm-platforms .pf-stories{display:flex;gap:7px;margin-bottom:9px}
.ssm-platforms .pf-stories i{width:28px;height:28px;border-radius:50%;flex:none;background:linear-gradient(135deg,#8ea3c2,#4b6285);box-shadow:0 0 0 1.5px #fff,0 0 0 3px #e8416f}
.ssm-platforms .pf-stories i:nth-child(2n){background:linear-gradient(135deg,#f2b36b,#d9822b)}
.ssm-platforms .pf-post-h{display:flex;align-items:center;gap:6px;font-size:9px;font-weight:700;margin-bottom:6px}
.ssm-platforms .pf-post-h i{width:16px;height:16px;border-radius:50%;background:var(--pf-navy)}
.ssm-platforms .pf-post{
  flex:1;border-radius:8px;padding:12px;color:#fff;min-height:0;
  background:linear-gradient(160deg,rgba(10,16,32,.35),rgba(10,16,32,.85)),linear-gradient(135deg,#5b7aa6,#1d2b4d);
  display:flex;flex-direction:column;justify-content:flex-start;
}
.ssm-platforms .pf-post b{font-size:15px;line-height:1.15;font-weight:800}
.ssm-platforms .pf-post b em{font-style:normal;color:var(--pf-orange)}
.ssm-platforms .pf-actions{display:flex;gap:10px;padding:7px 0 3px;color:#222}
.ssm-platforms .pf-likes{font-size:9px;font-weight:700}
.ssm-platforms .pf-cap{font-size:8.5px;color:#555;line-height:1.4}

/* floating mini post cards */
.ssm-platforms .pf-mini{
  position:absolute;background:#fff;border-radius:12px;padding:8px;z-index:3;
  box-shadow:0 16px 34px rgba(14,27,61,.15);border:1px solid var(--pf-line);
  display:flex;gap:9px;align-items:center;animation:pfFloat 6s ease-in-out infinite;
}
.ssm-platforms .pf-thumb{width:58px;height:50px;border-radius:8px;flex:none}
.ssm-platforms .pf-thumb.t1{background:linear-gradient(135deg,#9bb98c,#3f6b4a)}
.ssm-platforms .pf-thumb.t2{background:linear-gradient(135deg,#d8a56a,#8a5a2c)}
.ssm-platforms .pf-thumb.t3{background:linear-gradient(135deg,#7da0c8,#2f4f7d)}
.ssm-platforms .pf-thumb.t4{background:linear-gradient(135deg,#caa57d,#7a5236)}
.ssm-platforms .pf-mini p{font-size:10px;font-weight:700;line-height:1.3;max-width:96px}
.ssm-platforms .pf-mini small{display:block;font-size:9px;color:#8a93a6;font-weight:500;margin-top:3px}
.ssm-platforms .pf-m1{left:8%;top:56px;animation-delay:0s}
.ssm-platforms .pf-m2{left:12%;top:230px;animation-delay:1.3s}
.ssm-platforms .pf-m3{right:0;top:24px;animation-delay:.6s}
.ssm-platforms .pf-m4{right:2%;top:150px;animation-delay:1.9s}
.ssm-platforms .pf-m5{right:6%;top:290px;animation-delay:2.5s}

/* generic network bubbles */
.ssm-platforms .pf-bub{
  position:absolute;width:48px;height:48px;border-radius:14px;display:grid;place-items:center;color:#fff;z-index:4;
  box-shadow:0 12px 26px rgba(14,27,61,.22);animation:pfFloat 5.5s ease-in-out infinite;
}
.ssm-platforms .pf-bb1{left:2%;top:0;background:linear-gradient(135deg,#ff9a3c,#e8416f)}
.ssm-platforms .pf-bb2{left:0;top:170px;background:linear-gradient(135deg,#3f7bff,#2a52d6);animation-delay:1s}
.ssm-platforms .pf-bb3{right:10%;top:-6px;background:linear-gradient(135deg,#2f7fd0,#1a5a9e);animation-delay:.5s;width:40px;height:40px;border-radius:11px}
.ssm-platforms .pf-bb4{right:-2%;top:100px;background:linear-gradient(135deg,#ff5a4d,#d82c2c);animation-delay:1.7s;width:42px;height:42px;border-radius:12px}
.ssm-platforms .pf-bb5{right:8%;top:250px;background:linear-gradient(135deg,#1a1f2e,#3a4260);animation-delay:2.3s;width:42px;height:42px;border-radius:12px}
.ssm-platforms .pf-arc{position:absolute;right:8%;top:-10px;width:130px;opacity:.55;z-index:1}
@keyframes pfFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}

/* ---------- platform cards ---------- */
.ssm-platforms .pf-cards{margin-top:34px;display:grid;grid-template-columns:repeat(5,1fr);gap:14px}
.ssm-platforms .pf-card{
  background:#fff;border:1px solid var(--pf-line);border-radius:16px;padding:20px 18px 16px;
  display:flex;flex-direction:column;text-decoration:none;color:inherit;
  box-shadow:0 10px 24px rgba(20,40,90,.05);
  transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease;
}
.ssm-platforms .pf-card:hover{transform:translateY(-6px);box-shadow:0 20px 38px rgba(20,40,90,.12);border-color:rgba(255,122,26,.45)}
/*
  LOGO SLOT: each .pf-logo holds a neutral icon by default.
  To use the official platform logo, replace the <svg> inside .pf-logo
  with <img src="your-logo.svg" alt="Instagram"> (use your own licensed asset).
*/
.ssm-platforms .pf-logo{width:40px;height:40px;border-radius:11px;display:grid;place-items:center;color:#fff;margin-bottom:14px;flex:none}
.ssm-platforms .pf-logo img{width:100%;height:100%;object-fit:contain}
.ssm-platforms .pf-card:nth-child(1) .pf-logo{background:linear-gradient(135deg,#ff9a3c,#e8416f)}
.ssm-platforms .pf-card:nth-child(2) .pf-logo{background:linear-gradient(135deg,#3f7bff,#2a52d6)}
.ssm-platforms .pf-card:nth-child(3) .pf-logo{background:linear-gradient(135deg,#2f7fd0,#1a5a9e)}
.ssm-platforms .pf-card:nth-child(4) .pf-logo{background:linear-gradient(135deg,#ff5a4d,#d82c2c)}
.ssm-platforms .pf-card:nth-child(5) .pf-logo{background:linear-gradient(135deg,#34a853,#1e7a3a)}
.ssm-platforms .pf-card h3{font-size:15px;font-weight:700;margin-bottom:8px}
.ssm-platforms .pf-card p{font-size:12.5px;line-height:1.55;color:var(--pf-text);flex:1;margin-bottom:14px}
.ssm-platforms .pf-more{display:inline-flex;align-items:center;gap:7px;font-size:12.5px;font-weight:700;color:var(--pf-orange)}
.ssm-platforms .pf-more svg{transition:transform .2s ease}
.ssm-platforms .pf-card:hover .pf-more svg{transform:translateX(5px)}

/* ---------- bottom banner ---------- */
.ssm-platforms .pf-banner{
  margin-top:22px;display:flex;align-items:center;justify-content:space-between;gap:24px;flex-wrap:wrap;
  background:linear-gradient(90deg,#eaf1ff,#f3f7ff);border:1px solid #dde7fb;border-radius:16px;padding:20px 28px;
}
.ssm-platforms .pf-b-left{display:flex;align-items:center;gap:18px}
.ssm-platforms .pf-b-ico{color:#2d4fd6;flex:none}
.ssm-platforms .pf-b-left h4{font-size:15px;font-weight:700;margin-bottom:3px}
.ssm-platforms .pf-b-left p{font-size:12.5px;color:var(--pf-text);line-height:1.5;max-width:520px}
.ssm-platforms .pf-tag{
  font-family:"Segoe Script","Brush Script MT","Snell Roundhand",cursive;font-style:italic;
  font-size:20px;color:#1c3a8a;
  position:relative;padding-bottom:8px;
}
.ssm-platforms .pf-tag::after{content:"";position:absolute;left:0;right:0;bottom:0;height:3px;border-radius:3px;background:var(--pf-orange);transform:rotate(-1.2deg)}

/* ---------- responsive ---------- */
@media (max-width:1180px){.ssm-platforms .pf-cards{grid-template-columns:repeat(3,1fr)}}
@media (max-width:980px){
  .ssm-platforms .pf-main{grid-template-columns:1fr}
  .ssm-platforms .pf-visual{max-width:560px;margin:10px auto 0;width:100%}
}
@media (max-width:620px){
  .ssm-platforms{padding:50px 20px 40px}
  .ssm-platforms .pf-cards{grid-template-columns:1fr 1fr;gap:12px}
  .ssm-platforms .pf-visual{height:420px}
  .ssm-platforms .pf-m1,.ssm-platforms .pf-m2,.ssm-platforms .pf-m5,.ssm-platforms .pf-bb2,.ssm-platforms .pf-bb5{display:none}
  .ssm-platforms .pf-tag{font-size:17px}
}
@media (max-width:420px){.ssm-platforms .pf-cards{grid-template-columns:1fr}}

/* reveal */
.ssm-platforms .pf-reveal{opacity:0;transform:translateY(20px);transition:opacity .7s ease,transform .7s ease}
.ssm-platforms.is-in .pf-reveal{opacity:1;transform:none}
.ssm-platforms.is-in .pf-cards .pf-card:nth-child(2){transition-delay:.08s}
.ssm-platforms.is-in .pf-cards .pf-card:nth-child(3){transition-delay:.16s}
.ssm-platforms.is-in .pf-cards .pf-card:nth-child(4){transition-delay:.24s}
.ssm-platforms.is-in .pf-cards .pf-card:nth-child(5){transition-delay:.32s}
@media (prefers-reduced-motion:reduce){
  .ssm-platforms .pf-reveal{opacity:1;transform:none;transition:none}
  .ssm-platforms .pf-mini,.ssm-platforms .pf-bub{animation:none}
}
</style>

<section class="ssm-platforms">
  <div class="pf-wrap">
    <div class="pf-main">

      <!-- LEFT -->
      <div class="pf-copy pf-reveal">
        <div class="pf-eyebrow">Platforms We Manage</div>
        <h2>Your Brand. <span>On the Right Platforms.</span></h2>
        <p class="pf-lead">We create and manage content across the platforms where your audience spends time — helping you stay visible, engage your community and drive real business results.</p>
      </div>

      <!-- RIGHT -->
      <div class="pf-visual pf-reveal" aria-hidden="true">
        <svg class="pf-arc" viewBox="0 0 130 40" fill="none" stroke="#6f8fe0" stroke-width="1.4" stroke-dasharray="4 5" stroke-linecap="round"><path d="M2 34 C 30 0, 90 0, 124 22"/><path d="M118 15l7 8-10 2" stroke-dasharray="0"/></svg>

        <!-- generic network bubbles -->
        <div class="pf-bub pf-bb1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r=".8" fill="currentColor"/></svg></div>
        <div class="pf-bub pf-bb2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 11v9H4v-9zM7 11l4-7c2 0 3 1.5 2.5 3.5L13 10h6a2 2 0 012 2.3l-1 6A2 2 0 0118 20H7"/></svg></div>
        <div class="pf-bub pf-bb3"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V5a1 1 0 011-1h4a1 1 0 011 1v2"/></svg></div>
        <div class="pf-bub pf-bb4"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="4"/><path d="M10 9.5l5 2.5-5 2.5z" fill="currentColor"/></svg></div>
        <div class="pf-bub pf-bb5"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M5 5l14 14M19 5L5 19"/></svg></div>

        <!-- phone -->
        <div class="pf-phone">
          <div class="pf-notch"></div>
          <div class="pf-screen">
            <div class="pf-appbar">Feed</div>
            <div class="pf-stories"><i></i><i></i><i></i><i></i><i></i><i></i></div>
            <div class="pf-post-h"><i></i>yourbrand</div>
            <div class="pf-post"><b>Better Choices<br><em>Healthier</em> You</b></div>
            <div class="pf-actions">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#e8416f" stroke="#e8416f" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z"/></svg>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4z"/></svg>
            </div>
            <div class="pf-likes">1,248 likes</div>
            <div class="pf-cap"><b>yourbrand</b> Live healthy. Live better.</div>
          </div>
        </div>

        <!-- floating post cards -->
        <div class="pf-mini pf-m1"><div class="pf-thumb t1"></div><p>Nature Care for a Better You<small>♥ 2.4K &nbsp; 💬 120</small></p></div>
        <div class="pf-mini pf-m2"><div class="pf-thumb t2"></div><p>Wellness Starts With Nature<small>♥ 1.9K &nbsp; 💬 96</small></p></div>
        <div class="pf-mini pf-m3"><div class="pf-thumb t3"></div><p>Growing Together<small>♥ 880 &nbsp; 💬 73</small></p></div>
        <div class="pf-mini pf-m4"><div class="pf-thumb t4"></div><p>Ancient Wisdom, Modern Life<small>♥ 1.2K &nbsp; 💬 67</small></p></div>
        <div class="pf-mini pf-m5"><div class="pf-thumb t1"></div><p>Small Steps, Big Changes<small>♥ 860 &nbsp; 💬 54</small></p></div>
      </div>
    </div>

    <!-- PLATFORM CARDS -->
    <div class="pf-cards">
      <a class="pf-card pf-reveal" href="#contact">
        <div class="pf-logo"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r=".8" fill="currentColor"/></svg></div>
        <h3>Instagram</h3>
        <p>Visual storytelling, reels, brand building and community engagement.</p>
        <span class="pf-more">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
      <a class="pf-card pf-reveal" href="#contact">
        <div class="pf-logo"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 11v9H4v-9zM7 11l4-7c2 0 3 1.5 2.5 3.5L13 10h6a2 2 0 012 2.3l-1 6A2 2 0 0118 20H7"/></svg></div>
        <h3>Facebook</h3>
        <p>Build awareness, engage your audience and drive meaningful interactions.</p>
        <span class="pf-more">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
      <a class="pf-card pf-reveal" href="#contact">
        <div class="pf-logo"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V5a1 1 0 011-1h4a1 1 0 011 1v2M3 13h18"/></svg></div>
        <h3>LinkedIn</h3>
        <p>Connect with professionals, generate B2B leads and showcase your expertise.</p>
        <span class="pf-more">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
      <a class="pf-card pf-reveal" href="#contact">
        <div class="pf-logo"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="4"/><path d="M10 9.5l5 2.5-5 2.5z" fill="currentColor"/></svg></div>
        <h3>YouTube</h3>
        <p>Long-form &amp; short videos to educate, entertain and convert.</p>
        <span class="pf-more">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
      <a class="pf-card pf-reveal" href="#contact">
        <div class="pf-logo"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s7-6.2 7-11.5A7 7 0 005 9.5C5 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg></div>
        <h3>Google Business Profile</h3>
        <p>Improve local visibility, get more reviews and attract nearby customers.</p>
        <span class="pf-more">Learn More <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></span>
      </a>
    </div>

    <!-- BANNER -->
    <div class="pf-banner pf-reveal">
      <div class="pf-b-left">
        <svg class="pf-b-ico" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="13" r="8"/><circle cx="11" cy="13" r="4.5"/><circle cx="11" cy="13" r="1"/><path d="M11 13l9-9M16 4h4v4"/></svg>
        <div>
          <h4>The right platform. The right audience.</h4>
          <p>We don't just post — we plan, optimize and grow your presence across the platforms that matter most to your business.</p>
        </div>
      </div>
      <div class="pf-tag">More Reach. More Engagement. More Business.</div>
    </div>
  </div>
</section>

<script>
(function(){
  var sec=document.querySelector('.ssm-platforms');
  if(!sec) return;
  function show(){ sec.classList.add('is-in'); }
  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(e){
      if(e[0].isIntersecting){ show(); io.disconnect(); }
    },{threshold:.15});
    io.observe(sec);
  } else { show(); }
})();
</script>
