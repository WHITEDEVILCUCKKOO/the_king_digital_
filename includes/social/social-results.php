<style>
/* ================= SSM RESULTS ================= */
.ssm-results{
  --rs-bg:#0b0f17;
  --rs-card:#111723;
  --rs-line:rgba(255,255,255,.09);
  --rs-orange:#ff7a1a;
  --rs-muted:#aab2c0;
  --rs-green:#27d17f;
  position:relative;overflow:hidden;
  background:
    radial-gradient(800px 480px at 15% 0%, rgba(255,122,26,.10), transparent 60%),
    radial-gradient(700px 500px at 100% 100%, rgba(60,90,160,.20), transparent 60%),
    var(--rs-bg);
  color:#fff;
  font-family:"Inter","Segoe UI",system-ui,-apple-system,Arial,sans-serif;
  padding:80px 5% 70px;box-sizing:border-box;
}
.ssm-results *{box-sizing:border-box;margin:0;padding:0}
.ssm-results svg{display:block}
.ssm-results .rs-wrap{max-width:1240px;margin:0 auto}

/* ---------- heading ---------- */
.ssm-results .rs-head{text-align:center;max-width:720px;margin:0 auto 48px}
.ssm-results .rs-eyebrow{
  display:inline-flex;align-items:center;gap:14px;margin-bottom:20px;
  font-size:12px;letter-spacing:.22em;text-transform:uppercase;color:var(--rs-muted);
}
.ssm-results .rs-eyebrow::before,.ssm-results .rs-eyebrow::after{content:"";width:40px;height:2px;background:var(--rs-orange)}
.ssm-results h2{font-size:clamp(34px,4.6vw,56px);line-height:1.08;font-weight:800;letter-spacing:-.02em;margin-bottom:18px}
.ssm-results h2 span{color:var(--rs-orange)}
.ssm-results .rs-lead{font-size:16px;line-height:1.65;color:#c6ccd8}

/* ---------- big counters ---------- */
.ssm-results .rs-counters{
  display:grid;grid-template-columns:repeat(4,1fr);
  background:rgba(17,23,35,.85);border:1px solid var(--rs-line);border-radius:18px;margin-bottom:26px;
}
.ssm-results .rs-count{padding:30px 26px;border-left:1px solid var(--rs-line);text-align:center}
.ssm-results .rs-count:first-child{border-left:0}
.ssm-results .rs-num{font-size:clamp(34px,4vw,50px);font-weight:800;letter-spacing:-.02em;line-height:1}
.ssm-results .rs-num em{font-style:normal;color:var(--rs-orange)}
.ssm-results .rs-clabel{margin-top:10px;font-size:13px;color:var(--rs-muted)}

/* ---------- chart + case studies ---------- */
.ssm-results .rs-grid{display:grid;grid-template-columns:minmax(0,1.05fr) minmax(0,1fr);gap:22px;align-items:stretch}
.ssm-results .rs-panel{
  background:var(--rs-card);border:1px solid var(--rs-line);border-radius:18px;padding:26px;
}
.ssm-results .rs-ptop{display:flex;justify-content:space-between;align-items:flex-start;gap:16px;margin-bottom:12px}
.ssm-results .rs-ptop small{font-size:12px;color:var(--rs-muted);display:block;margin-bottom:4px}
.ssm-results .rs-ptop strong{font-size:30px;font-weight:800}
.ssm-results .rs-badge{
  font-size:12px;font-weight:700;color:var(--rs-green);background:rgba(39,209,127,.12);
  border:1px solid rgba(39,209,127,.3);padding:6px 12px;border-radius:999px;white-space:nowrap;
}
.ssm-results .rs-chart{width:100%;height:230px}
.ssm-results .rs-chart .grid{stroke:rgba(255,255,255,.07);stroke-width:1}
.ssm-results .rs-chart .lbl{fill:#7d8696;font-size:11px}
.ssm-results .rs-chart .line{
  fill:none;stroke:var(--rs-orange);stroke-width:3;stroke-linecap:round;stroke-linejoin:round;
  stroke-dasharray:1200;stroke-dashoffset:1200;
}
.ssm-results .rs-chart .line2{
  fill:none;stroke:#5b9bff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;opacity:.8;
  stroke-dasharray:1200;stroke-dashoffset:1200;
}
.ssm-results.is-in .rs-chart .line,.ssm-results.is-in .rs-chart .line2{stroke-dashoffset:0;transition:stroke-dashoffset 2s ease .3s}
.ssm-results .rs-legend{display:flex;gap:20px;margin-top:10px;font-size:12px;color:var(--rs-muted)}
.ssm-results .rs-legend i{display:inline-block;width:10px;height:10px;border-radius:50%;margin-right:7px}

/* case studies */
.ssm-results .rs-cases{display:flex;flex-direction:column;gap:14px}
.ssm-results .rs-case{
  background:var(--rs-card);border:1px solid var(--rs-line);border-radius:16px;padding:20px 22px;
  display:grid;grid-template-columns:1fr auto;gap:10px 18px;align-items:center;
  transition:transform .25s ease,border-color .25s ease;
}
.ssm-results .rs-case:hover{transform:translateX(6px);border-color:rgba(255,122,26,.5)}
.ssm-results .rs-case h3{font-size:15px;font-weight:700;margin-bottom:3px}
.ssm-results .rs-case p{font-size:12.5px;color:var(--rs-muted);line-height:1.5}
.ssm-results .rs-big{font-size:28px;font-weight:800;color:var(--rs-green);text-align:right;line-height:1}
.ssm-results .rs-big small{display:block;font-size:11px;font-weight:500;color:var(--rs-muted);margin-top:5px}
.ssm-results .rs-bar{grid-column:1 / -1;height:6px;border-radius:6px;background:rgba(255,255,255,.07);overflow:hidden}
.ssm-results .rs-bar i{
  display:block;height:100%;width:0;border-radius:6px;
  background:linear-gradient(90deg,var(--rs-orange),#ffb15c);transition:width 1.6s ease .4s;
}
.ssm-results.is-in .rs-bar i{width:var(--w)}

/* CTA */
.ssm-results .rs-cta{text-align:center;margin-top:40px}
.ssm-results .rs-btn{
  display:inline-flex;align-items:center;gap:12px;text-decoration:none;color:#fff;font-weight:700;font-size:15px;
  background:linear-gradient(180deg,var(--rs-orange),#f26100);padding:16px 32px;border-radius:999px;
  box-shadow:0 12px 26px rgba(242,97,0,.32);transition:transform .2s ease,box-shadow .2s ease;
}
.ssm-results .rs-btn:hover{transform:translateY(-2px);box-shadow:0 16px 32px rgba(242,97,0,.42)}

/* ---------- responsive ---------- */
@media (max-width:1020px){
  .ssm-results .rs-grid{grid-template-columns:1fr}
  .ssm-results .rs-counters{grid-template-columns:repeat(2,1fr)}
  .ssm-results .rs-count:nth-child(3){border-left:0}
  .ssm-results .rs-count:nth-child(n+3){border-top:1px solid var(--rs-line)}
}
@media (max-width:560px){
  .ssm-results{padding:56px 20px 50px}
  .ssm-results .rs-counters{grid-template-columns:1fr}
  .ssm-results .rs-count{border-left:0;border-top:1px solid var(--rs-line)}
  .ssm-results .rs-count:first-child{border-top:0}
  .ssm-results .rs-panel{padding:20px}
  .ssm-results .rs-case:hover{transform:none}
}

/* reveal */
.ssm-results .rs-reveal{opacity:0;transform:translateY(20px);transition:opacity .7s ease,transform .7s ease}
.ssm-results.is-in .rs-reveal{opacity:1;transform:none}
.ssm-results.is-in .rs-grid.rs-reveal{transition-delay:.12s}
@media (prefers-reduced-motion:reduce){
  .ssm-results .rs-reveal{opacity:1;transform:none;transition:none}
  .ssm-results .rs-chart .line,.ssm-results .rs-chart .line2{stroke-dashoffset:0;transition:none}
  .ssm-results .rs-bar i{width:var(--w);transition:none}
}
</style>

<section class="ssm-results">
  <div class="rs-wrap">

    <div class="rs-head rs-reveal">
      <div class="rs-eyebrow">Our Results</div>
      <h2>Real Growth. <span>Real Results.</span></h2>
      <p class="rs-lead">Numbers don't lie. Here's what consistent content, smart strategy and data-backed campaigns deliver for our clients.</p>
    </div>

    <!-- COUNTERS (replace with your real numbers) -->
    <div class="rs-counters rs-reveal">
      <div class="rs-count"><div class="rs-num"><span data-count="2.4" data-dec="1">2.4</span><em>M+</em></div><div class="rs-clabel">Total Reach Generated</div></div>
      <div class="rs-count"><div class="rs-num"><span data-count="150">150</span><em>+</em></div><div class="rs-clabel">Campaigns Delivered</div></div>
      <div class="rs-count"><div class="rs-num"><span data-count="3.8" data-dec="1">3.8</span><em>x</em></div><div class="rs-clabel">Average Return on Ad Spend</div></div>
      <div class="rs-count"><div class="rs-num"><span data-count="98">98</span><em>%</em></div><div class="rs-clabel">Client Retention</div></div>
    </div>

    <div class="rs-grid rs-reveal">

      <!-- CHART -->
      <div class="rs-panel">
        <div class="rs-ptop">
          <div><small>Audience growth · last 6 months</small><strong>12.6K followers</strong></div>
          <span class="rs-badge">↑ 142%</span>
        </div>
        <svg class="rs-chart" viewBox="0 0 560 230" preserveAspectRatio="none" role="img" aria-label="Audience growth chart">
          <g class="grid">
            <line x1="0" y1="30" x2="560" y2="30"/><line x1="0" y1="80" x2="560" y2="80"/>
            <line x1="0" y1="130" x2="560" y2="130"/><line x1="0" y1="180" x2="560" y2="180"/>
          </g>
          <path class="line2" d="M0 170 L100 160 L200 150 L300 138 L400 128 L500 118 L560 112"/>
          <path class="line" d="M0 185 L100 168 L200 150 L300 112 L400 78 L500 46 L560 20"/>
          <g class="lbl" text-anchor="middle">
            <text x="20" y="220">May</text><text x="120" y="220">Jun</text><text x="220" y="220">Jul</text>
            <text x="320" y="220">Aug</text><text x="420" y="220">Sep</text><text x="520" y="220">Oct</text>
          </g>
        </svg>
        <div class="rs-legend">
          <span><i style="background:#ff7a1a"></i>With King Digital</span>
          <span><i style="background:#5b9bff"></i>Before (organic baseline)</span>
        </div>
      </div>

      <!-- CASE STUDIES (placeholder clients) -->
      <div class="rs-cases">
        <div class="rs-case">
          <div><h3>Local Restaurant Brand</h3><p>Reels + Meta Ads drove walk-ins and online orders.</p></div>
          <div class="rs-big">+312%<small>Reach</small></div>
          <div class="rs-bar"><i style="--w:88%"></i></div>
        </div>
        <div class="rs-case">
          <div><h3>Wellness &amp; Lifestyle Store</h3><p>Content strategy and community engagement.</p></div>
          <div class="rs-big">+187%<small>Engagement</small></div>
          <div class="rs-bar"><i style="--w:72%"></i></div>
        </div>
        <div class="rs-case">
          <div><h3>B2B Services Company</h3><p>LinkedIn lead generation and paid social.</p></div>
          <div class="rs-big">892<small>Qualified leads</small></div>
          <div class="rs-bar"><i style="--w:64%"></i></div>
        </div>
      </div>
    </div>

    <div class="rs-cta rs-reveal">
      <a href="#contact" class="rs-btn">Get Results Like These
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </div>
</section>

<script>
(function(){
  var sec=document.querySelector('.ssm-results');
  if(!sec) return;

  function countUp(el){
    var target=parseFloat(el.getAttribute('data-count')),
        dec=parseInt(el.getAttribute('data-dec')||'0',10),
        dur=1500,start=null;
    function step(ts){
      if(!start) start=ts;
      var p=Math.min((ts-start)/dur,1),e=1-Math.pow(1-p,3);
      el.textContent=(target*e).toFixed(dec);
      if(p<1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  function run(){
    sec.classList.add('is-in');
    if(window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
    sec.querySelectorAll('[data-count]').forEach(countUp);
  }

  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(e){
      if(e[0].isIntersecting){ run(); io.disconnect(); }
    },{threshold:.2});
    io.observe(sec);
  } else { run(); }
})();
</script>
