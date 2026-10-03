<style>
/* ================= SSM SERVICES ================= */
.ssm-services{
  --sv-navy:#0e1b3d;
  --sv-orange:#ff7a1a;
  --sv-orange-d:#f26100;
  --sv-text:#5b6477;
  --sv-line:#e6eaf2;
  --sv-green:#18b36b;
  position:relative;overflow:hidden;
  background:
    radial-gradient(800px 480px at 80% 15%, #e8f0ff 0%, transparent 60%),
    radial-gradient(600px 400px at 0% 100%, #fff1e4 0%, transparent 60%),
    #f7f9fd;
  color:var(--sv-navy);
  font-family:"Inter","Segoe UI",system-ui,-apple-system,Arial,sans-serif;
  padding:70px 5% 50px;
  box-sizing:border-box;
}
.ssm-services *{box-sizing:border-box;margin:0;padding:0}
.ssm-services svg{display:block}
.ssm-services .sv-wrap{max-width:1240px;margin:0 auto}
.ssm-services .sv-main{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:20px;align-items:center}

/* ---------- copy ---------- */
.ssm-services .sv-eyebrow{
  display:flex;align-items:center;gap:14px;margin-bottom:22px;
  font-size:12px;letter-spacing:.22em;text-transform:uppercase;color:#7b8498;
}
.ssm-services .sv-eyebrow::before{content:"";width:46px;height:2px;background:var(--sv-orange)}
.ssm-services h2{
  font-size:clamp(34px,4.4vw,56px);line-height:1.08;font-weight:800;letter-spacing:-.02em;margin-bottom:22px;
}
.ssm-services h2 span{display:block;color:var(--sv-orange)}
.ssm-services .sv-lead{font-size:16px;line-height:1.65;color:var(--sv-text);max-width:480px;margin-bottom:26px}
.ssm-services .sv-chips{display:flex;flex-wrap:wrap;gap:12px;margin-bottom:32px}
.ssm-services .sv-chip{
  display:flex;align-items:center;gap:9px;background:#fff;border:1px solid var(--sv-line);
  border-radius:12px;padding:11px 18px;font-size:13.5px;font-weight:600;
  box-shadow:0 6px 16px rgba(20,40,90,.05);
}
.ssm-services .sv-chip svg{color:#2d4fd6}
.ssm-services .sv-cta{display:flex;align-items:center;gap:30px;flex-wrap:wrap}
.ssm-services .sv-btn{
  display:inline-flex;align-items:center;gap:12px;background:linear-gradient(180deg,var(--sv-orange),var(--sv-orange-d));
  color:#fff;text-decoration:none;font-weight:700;font-size:15px;padding:16px 30px;border-radius:999px;
  box-shadow:0 12px 26px rgba(242,97,0,.32);transition:transform .2s ease,box-shadow .2s ease;
}
.ssm-services .sv-btn:hover{transform:translateY(-2px);box-shadow:0 16px 32px rgba(242,97,0,.4)}
.ssm-services .sv-link{
  display:inline-flex;align-items:center;gap:8px;color:var(--sv-navy);text-decoration:none;font-weight:600;font-size:14px;
}
.ssm-services .sv-link:hover{color:var(--sv-orange)}

/* ---------- visual ---------- */
.ssm-services .sv-visual{position:relative;height:540px}
.ssm-services .sv-phone{
  position:absolute;left:50%;top:0;transform:translateX(-50%) rotate(-4deg);
  width:260px;height:520px;border-radius:38px;background:#10131b;padding:10px;
  box-shadow:0 40px 70px rgba(14,27,61,.35);z-index:2;
}
.ssm-services .sv-screen{
  width:100%;height:100%;background:#fff;border-radius:30px;overflow:hidden;padding:26px 14px 10px;
  display:flex;flex-direction:column;
}
.ssm-services .sv-notch{position:absolute;top:16px;left:50%;transform:translateX(-50%);width:70px;height:18px;background:#10131b;border-radius:12px}
.ssm-services .sv-ptop{display:flex;justify-content:space-between;font-size:11px;font-weight:700;margin-bottom:10px}
.ssm-services .sv-phead{display:flex;align-items:center;gap:10px;margin-bottom:8px}
.ssm-services .sv-av{width:44px;height:44px;border-radius:50%;background:var(--sv-navy);color:#fff;display:grid;place-items:center;font-size:12px;font-weight:800;box-shadow:0 0 0 2px #fff,0 0 0 4px var(--sv-orange);flex:none}
.ssm-services .sv-pnums{display:flex;gap:12px;font-size:9px;color:#666;text-align:center}
.ssm-services .sv-pnums b{display:block;font-size:12px;color:#111}
.ssm-services .sv-bio{font-size:9px;color:#555;line-height:1.4;margin-bottom:8px}
.ssm-services .sv-hl{display:flex;justify-content:space-between;margin-bottom:10px}
.ssm-services .sv-hl i{width:34px;height:34px;border-radius:50%;background:#eef2fb;border:1.5px solid #d5ddf0;display:block}
.ssm-services .sv-pgrid{flex:1;display:grid;grid-template-columns:1fr 1fr;grid-template-rows:1fr 1fr;gap:4px;min-height:0}
.ssm-services .sv-pt{border-radius:6px;padding:8px;font-size:11px;font-weight:800;line-height:1.15;color:#fff;display:flex;flex-direction:column;justify-content:flex-end}
.ssm-services .sv-pt em{font-style:normal;color:var(--sv-orange)}
.ssm-services .sv-pt.a{background:linear-gradient(160deg,#16213d,#0a1020)}
.ssm-services .sv-pt.b{background:linear-gradient(135deg,#f2b36b,#d9822b)}
.ssm-services .sv-pt.c{background:linear-gradient(135deg,#8ea3c2,#4b6285)}
.ssm-services .sv-pt.d{background:linear-gradient(160deg,#1c2a52,#0c1430)}
.ssm-services .sv-pnav{display:flex;justify-content:space-around;padding-top:8px;color:#222}

/* floating stat cards */
.ssm-services .sv-float{
  position:absolute;background:#fff;border-radius:14px;padding:12px 16px;z-index:3;
  box-shadow:0 18px 40px rgba(14,27,61,.14);border:1px solid var(--sv-line);
  animation:svFloat 6s ease-in-out infinite;
}
.ssm-services .sv-float small{display:block;font-size:11px;color:#7b8498;margin-bottom:2px}
.ssm-services .sv-float strong{font-size:22px;font-weight:800;display:inline-block;margin-right:6px}
.ssm-services .sv-float .up{font-size:11px;font-weight:700;color:var(--sv-green)}
.ssm-services .sv-f1{left:2%;top:150px;animation-delay:0s}
.ssm-services .sv-f2{right:0;top:30px;animation-delay:1.2s}
.ssm-services .sv-f3{right:2%;bottom:70px;animation-delay:2.4s}
.ssm-services .sv-f2 svg{width:110px;height:34px;margin-top:4px}
@keyframes svFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}

/* generic floating icon bubbles */
.ssm-services .sv-bubble{
  position:absolute;width:54px;height:54px;border-radius:16px;display:grid;place-items:center;color:#fff;z-index:3;
  box-shadow:0 14px 28px rgba(14,27,61,.22);animation:svFloat 5.5s ease-in-out infinite;
}
.ssm-services .sv-b1{left:12%;top:20px;background:linear-gradient(135deg,#ff9a3c,#e8416f);animation-delay:.4s}
.ssm-services .sv-b2{left:0;top:300px;background:linear-gradient(135deg,#3f7bff,#2a52d6);animation-delay:1.6s}
.ssm-services .sv-b3{right:6%;top:190px;background:linear-gradient(135deg,#1a1f2e,#3a4260);animation-delay:2.2s}
.ssm-services .sv-b4{right:-1%;top:290px;background:linear-gradient(135deg,#ff5a4d,#d82c2c);animation-delay:.9s}

/* ---------- service cards ---------- */
.ssm-services .sv-cards{
  margin-top:40px;display:grid;grid-template-columns:repeat(6,1fr);gap:14px;
}
.ssm-services .sv-card{
  background:rgba(255,255,255,.9);border:1px solid var(--sv-line);border-radius:16px;padding:20px 18px 16px;
  display:flex;flex-direction:column;box-shadow:0 10px 24px rgba(20,40,90,.05);
  transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease;
}
.ssm-services .sv-card:hover{transform:translateY(-6px);box-shadow:0 20px 38px rgba(20,40,90,.12);border-color:rgba(255,122,26,.45)}
.ssm-services .sv-ico{
  width:42px;height:42px;border-radius:11px;display:grid;place-items:center;margin-bottom:14px;
  background:#fff3e8;color:var(--sv-orange);
}
.ssm-services .sv-card:nth-child(even) .sv-ico{background:#eaf0ff;color:#2d4fd6}
.ssm-services .sv-card h3{font-size:14.5px;font-weight:700;line-height:1.3;margin-bottom:8px}
.ssm-services .sv-card p{font-size:12.5px;line-height:1.55;color:var(--sv-text);flex:1}
.ssm-services .sv-arrow{margin-top:14px;color:var(--sv-navy);transition:transform .2s ease,color .2s ease}
.ssm-services .sv-card:hover .sv-arrow{transform:translateX(5px);color:var(--sv-orange)}

/* ---------- responsive ---------- */
@media (max-width:1180px){.ssm-services .sv-cards{grid-template-columns:repeat(3,1fr)}}
@media (max-width:980px){
  .ssm-services .sv-main{grid-template-columns:1fr}
  .ssm-services .sv-visual{max-width:560px;margin:20px auto 0;width:100%}
}
@media (max-width:620px){
  .ssm-services{padding:50px 20px 40px}
  .ssm-services .sv-cards{grid-template-columns:1fr 1fr;gap:12px}
  .ssm-services .sv-visual{height:500px}
  .ssm-services .sv-phone{width:230px;height:460px}
  .ssm-services .sv-f1,.ssm-services .sv-b2,.ssm-services .sv-b4{display:none}
}
@media (max-width:420px){.ssm-services .sv-cards{grid-template-columns:1fr}}

/* reveal */
.ssm-services .sv-reveal{opacity:0;transform:translateY(20px);transition:opacity .7s ease,transform .7s ease}
.ssm-services.is-in .sv-reveal{opacity:1;transform:none}
.ssm-services.is-in .sv-cards .sv-card:nth-child(1){transition-delay:.05s}
.ssm-services.is-in .sv-cards .sv-card:nth-child(2){transition-delay:.12s}
.ssm-services.is-in .sv-cards .sv-card:nth-child(3){transition-delay:.19s}
.ssm-services.is-in .sv-cards .sv-card:nth-child(4){transition-delay:.26s}
.ssm-services.is-in .sv-cards .sv-card:nth-child(5){transition-delay:.33s}
.ssm-services.is-in .sv-cards .sv-card:nth-child(6){transition-delay:.4s}
@media (prefers-reduced-motion:reduce){
  .ssm-services .sv-reveal{opacity:1;transform:none;transition:none}
  .ssm-services .sv-float,.ssm-services .sv-bubble{animation:none}
}
</style>

<section class="ssm-services">
  <div class="sv-wrap">
    <div class="sv-main">

      <!-- LEFT -->
      <div class="sv-copy sv-reveal">
        <div class="sv-eyebrow">What We Do</div>
        <h2>Complete Social Media Solutions <span>Under One Roof</span></h2>
        <p class="sv-lead">From strategy to results, we handle every part of your social media journey — so you can focus on running your business.</p>

        <div class="sv-chips">
          <div class="sv-chip"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5"/></svg>Strategy</div>
          <div class="sv-chip"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8h8M8 12h8M8 16h5"/></svg>Content</div>
          <div class="sv-chip"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2 20c0-3.5 3-6 7-6s7 2.5 7 6"/><circle cx="17.5" cy="9" r="2.5"/></svg>Engagement</div>
          <div class="sv-chip"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20V10M10 20V4M16 20v-8M22 20H2"/></svg>Growth</div>
        </div>

        <div class="sv-cta">
          <a href="#contact" class="sv-btn">Let's Grow Together
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
          <a href="#services" class="sv-link">Our Services
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="sv-visual sv-reveal" aria-hidden="true">

        <!-- generic network bubbles -->
        <div class="sv-bubble sv-b1"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r=".8" fill="currentColor"/></svg></div>
        <div class="sv-bubble sv-b2"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 11v9H4v-9zM7 11l4-7c2 0 3 1.5 2.5 3.5L13 10h6a2 2 0 012 2.3l-1 6A2 2 0 0118 20H7"/></svg></div>
        <div class="sv-bubble sv-b3"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V6l10-2v12"/><circle cx="6.5" cy="18" r="2.5"/><circle cx="16.5" cy="16" r="2.5"/></svg></div>
        <div class="sv-bubble sv-b4"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="4"/><path d="M10 9.5l5 2.5-5 2.5z" fill="currentColor"/></svg></div>

        <!-- phone -->
        <div class="sv-phone">
          <div class="sv-notch"></div>
          <div class="sv-screen">
            <div class="sv-ptop"><span>‹ yourbrand</span><span>⋯</span></div>
            <div class="sv-phead">
              <div class="sv-av">YB</div>
              <div class="sv-pnums"><div><b>268</b>Posts</div><div><b>12.4K</b>Followers</div><div><b>212</b>Following</div></div>
            </div>
            <div class="sv-bio"><b>Your Brand</b><br>Building better brands through creative content &amp; smart strategy.</div>
            <div class="sv-hl"><i></i><i></i><i></i><i></i></div>
            <div class="sv-pgrid">
              <div class="sv-pt a">Good Content Builds <em>Trust</em></div>
              <div class="sv-pt b"></div>
              <div class="sv-pt c"></div>
              <div class="sv-pt d">Small Steps <em>Big Results</em></div>
            </div>
            <div class="sv-pnav">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l9-8 9 8v10H3z"/></svg>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="M21 21l-5-5"/></svg>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><path d="M12 8v8M8 12h8"/></svg>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg>
            </div>
          </div>
        </div>

        <!-- floating stat cards -->
        <div class="sv-float sv-f1"><small>Engagement Rate</small><strong>8.6%</strong><span class="up">↑ 92%</span></div>
        <div class="sv-float sv-f2"><small>Total Reach</small><strong>125K</strong><span class="up">↑ 68%</span>
          <svg viewBox="0 0 110 34" preserveAspectRatio="none"><path d="M0 30 L18 24 L36 26 L55 14 L74 18 L92 8 L110 3" fill="none" stroke="#2d4fd6" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="sv-float sv-f3"><small>New Followers</small><strong>12.8K</strong><span class="up">↑ 74%</span></div>
      </div>
    </div>

    <!-- SERVICE CARDS -->
    <div class="sv-cards" id="services">
      <a class="sv-card sv-reveal" href="#contact" style="text-decoration:none;color:inherit">
        <div class="sv-ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M3 9h18M8 2v4M16 2v4"/><path d="M8 14h3v3H8z"/></svg></div>
        <h3>Social Media Management</h3>
        <p>We handle your daily posting, engagement and community management across all platforms.</p>
        <svg class="sv-arrow" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a class="sv-card sv-reveal" href="#contact" style="text-decoration:none;color:inherit">
        <div class="sv-ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="9" cy="9" r="1.8"/><path d="M21 16l-5-5-8 8"/></svg></div>
        <h3>Content Creation</h3>
        <p>Eye-catching posts, graphics, short videos and branded content that speaks your brand's language.</p>
        <svg class="sv-arrow" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a class="sv-card sv-reveal" href="#contact" style="text-decoration:none;color:inherit">
        <div class="sv-ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><path d="M10 8.5l5 3.5-5 3.5z"/></svg></div>
        <h3>Reels &amp; Short Videos</h3>
        <p>Short, engaging videos to grab attention, increase reach and drive real engagement.</p>
        <svg class="sv-arrow" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a class="sv-card sv-reveal" href="#contact" style="text-decoration:none;color:inherit">
        <div class="sv-ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11v2a1 1 0 001 1h3l8 4V6L7 10H4a1 1 0 00-1 1z"/><path d="M18 9a4 4 0 010 6"/></svg></div>
        <h3>Meta Ads</h3>
        <p>Targeted ad campaigns that bring the right audience to your business and boost conversions.</p>
        <svg class="sv-arrow" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a class="sv-card sv-reveal" href="#contact" style="text-decoration:none;color:inherit">
        <div class="sv-ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="6" r="3"/><circle cx="5" cy="17" r="3"/><circle cx="19" cy="17" r="3"/><path d="M10 8.5L6.5 14.5M14 8.5l3.5 6M8 17h8"/></svg></div>
        <h3>Community Management</h3>
        <p>Build stronger relationships with your audience through active engagement and real conversations.</p>
        <svg class="sv-arrow" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <a class="sv-card sv-reveal" href="#contact" style="text-decoration:none;color:inherit">
        <div class="sv-ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20V10M10 20V4M16 20v-8M22 20H2"/></svg></div>
        <h3>Social Media Strategy</h3>
        <p>Data-driven strategies tailored to your goals, audience and industry for long-term growth.</p>
        <svg class="sv-arrow" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </div>
</section>

<script>
(function(){
  var sec=document.querySelector('.ssm-services');
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
