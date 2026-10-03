<style>
/* ================= SSM PORTFOLIO ================= */
.ssm-portfolio{
  --pt-navy:#0e1b3d;
  --pt-text:#5b6477;
  --pt-line:#e6eaf2;
  --pt-orange:#ff7a1a;
  --pt-blue:#2d6bff;
  position:relative;overflow:hidden;
  background:
    radial-gradient(760px 420px at 85% 0%, #e9f0ff 0%, transparent 62%),
    radial-gradient(520px 380px at 0% 30%, #fff1e4 0%, transparent 60%),
    #fafbff;
  color:var(--pt-navy);
  font-family:"Inter","Segoe UI",system-ui,-apple-system,Arial,sans-serif;
  padding:60px 5% 60px;box-sizing:border-box;
}
.ssm-portfolio *{box-sizing:border-box;margin:0;padding:0}
.ssm-portfolio svg{display:block}
.ssm-portfolio .pt-wrap{max-width:1240px;margin:0 auto}

/* ---------- header ---------- */
.ssm-portfolio .pt-head{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:24px;align-items:center;margin-bottom:34px}
.ssm-portfolio .pt-eyebrow{
  display:flex;align-items:center;gap:14px;margin-bottom:18px;
  font-size:12px;letter-spacing:.22em;text-transform:uppercase;color:#7b8498;
}
.ssm-portfolio .pt-eyebrow::before{content:"";width:46px;height:2px;background:var(--pt-orange)}
.ssm-portfolio h2{font-size:clamp(36px,4.8vw,58px);line-height:1.05;font-weight:800;letter-spacing:-.02em;margin-bottom:18px}
.ssm-portfolio h2 span{display:block;color:var(--pt-orange)}
.ssm-portfolio .pt-lead{font-size:15px;line-height:1.65;color:var(--pt-text);max-width:420px}

.ssm-portfolio .pt-right{display:flex;align-items:center;justify-content:flex-end;gap:26px;flex-wrap:wrap}
.ssm-portfolio .pt-script{
  position:relative;font-family:"Segoe Script","Brush Script MT","Snell Roundhand",cursive;font-style:italic;
  font-size:17px;line-height:1.3;color:#1c3a8a;text-align:center;padding-right:26px;
}
.ssm-portfolio .pt-script svg{position:absolute;right:-6px;bottom:-4px}
.ssm-portfolio .pt-nets{display:flex;gap:10px}
.ssm-portfolio .pt-net{
  width:40px;height:40px;border-radius:12px;display:grid;place-items:center;color:#fff;
  box-shadow:0 8px 18px rgba(14,27,61,.18);
}
.ssm-portfolio .pt-net:nth-child(1){background:linear-gradient(135deg,#ff9a3c,#e8416f)}
.ssm-portfolio .pt-net:nth-child(2){background:linear-gradient(135deg,#3f7bff,#2a52d6)}
.ssm-portfolio .pt-net:nth-child(3){background:linear-gradient(135deg,#1a1f2e,#3a4260)}
.ssm-portfolio .pt-net:nth-child(4){background:linear-gradient(135deg,#ff5a4d,#d82c2c)}
.ssm-portfolio .pt-points{
  background:#fff;border:1px solid var(--pt-line);border-radius:14px;padding:12px 18px;
  box-shadow:0 10px 24px rgba(20,40,90,.06);display:flex;flex-direction:column;gap:10px;
}
.ssm-portfolio .pt-points div{display:flex;align-items:center;gap:10px;font-size:12.5px;font-weight:600;color:#2a3558}
.ssm-portfolio .pt-points svg{color:var(--pt-blue)}

/* ---------- carousel ---------- */
.ssm-portfolio .pt-track{
  display:grid;grid-auto-flow:column;grid-auto-columns:calc((100% - 54px)/4);gap:18px;
  overflow-x:auto;scroll-snap-type:x mandatory;scroll-behavior:smooth;padding:6px 4px 22px;
  scrollbar-width:none;
}
.ssm-portfolio .pt-track::-webkit-scrollbar{display:none}
.ssm-portfolio .pt-card{
  scroll-snap-align:start;border-radius:20px;padding:18px 16px 16px;border:1px solid var(--pt-line);
  background:var(--tint);display:flex;flex-direction:column;
  box-shadow:0 12px 28px rgba(20,40,90,.07);
  transition:transform .25s ease,box-shadow .25s ease;
}
.ssm-portfolio .pt-card:hover{transform:translateY(-6px);box-shadow:0 22px 40px rgba(20,40,90,.14)}
.ssm-portfolio .pt-top{display:grid;grid-template-columns:104px 1fr;gap:14px;align-items:start;margin-bottom:14px}

/* reel phone */
.ssm-portfolio .pt-phone{
  position:relative;width:104px;height:210px;border-radius:20px;background:#10131b;padding:4px;
  box-shadow:0 14px 26px rgba(14,27,61,.28);
}
.ssm-portfolio .pt-reel{
  position:relative;width:100%;height:100%;border-radius:16px;overflow:hidden;color:#fff;
  background:var(--reel);padding:8px 8px 10px;display:flex;flex-direction:column;
}
.ssm-portfolio .pt-reel::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(0,0,0,.25),transparent 35%,rgba(0,0,0,.55));pointer-events:none}
.ssm-portfolio .pt-reel > *{position:relative;z-index:1}
.ssm-portfolio .pt-rtop{display:flex;justify-content:space-between;font-size:7px;font-weight:700;margin-bottom:auto}
.ssm-portfolio .pt-rtext{font-size:15px;line-height:1.1;font-weight:800;text-shadow:0 2px 8px rgba(0,0,0,.45);margin-bottom:auto;margin-top:18px}
.ssm-portfolio .pt-rtext em{font-style:normal;color:#ffb15c}
.ssm-portfolio .pt-rside{position:absolute;right:5px;bottom:30px;display:flex;flex-direction:column;gap:7px;z-index:2}
.ssm-portfolio .pt-rside i{width:10px;height:10px;border-radius:50%;background:rgba(255,255,255,.85);display:block}
.ssm-portfolio .pt-ruser{display:flex;align-items:center;gap:4px;font-size:6.5px;font-weight:600}
.ssm-portfolio .pt-ruser i{width:10px;height:10px;border-radius:50%;background:#fff;display:block}

/* brand + stats */
.ssm-portfolio .pt-brand{display:flex;align-items:center;gap:9px;margin-bottom:12px}
.ssm-portfolio .pt-mark{
  width:34px;height:34px;border-radius:50%;display:grid;place-items:center;flex:none;
  background:#fff;border:1.5px solid var(--accent);color:var(--accent);font-weight:800;font-size:13px;
}
.ssm-portfolio .pt-brand b{display:block;font-size:13.5px;line-height:1.2}
.ssm-portfolio .pt-brand small{font-size:11px;color:#6b7488}
.ssm-portfolio .pt-stats{display:flex;flex-direction:column;gap:11px}
.ssm-portfolio .pt-stat{display:flex;align-items:center;gap:9px}
.ssm-portfolio .pt-stat svg{color:#3b4a7a;flex:none}
.ssm-portfolio .pt-stat b{display:block;font-size:14px;line-height:1.1}
.ssm-portfolio .pt-stat small{font-size:10.5px;color:#7b8498}
.ssm-portfolio .pt-card > p{font-size:12px;line-height:1.55;color:#4f5a72;flex:1;margin-bottom:14px}
.ssm-portfolio .pt-foot{display:flex;justify-content:space-between;align-items:center;font-size:11px;color:#4f5a72}
.ssm-portfolio .pt-tag{
  font-size:11px;font-weight:700;color:var(--accent);background:#fff;border:1px solid var(--accent);
  padding:5px 12px;border-radius:999px;
}
.ssm-portfolio .pt-plat{display:flex;align-items:center;gap:6px}

/* controls */
.ssm-portfolio .pt-controls{display:flex;justify-content:center;align-items:center;gap:14px;margin:4px 0 26px}
.ssm-portfolio .pt-btn{
  width:32px;height:32px;border-radius:50%;border:1px solid var(--pt-line);background:#fff;color:var(--pt-navy);
  display:grid;place-items:center;cursor:pointer;box-shadow:0 6px 14px rgba(20,40,90,.08);transition:all .2s ease;
}
.ssm-portfolio .pt-btn:hover{background:var(--pt-navy);color:#fff}
.ssm-portfolio .pt-dots{display:flex;gap:7px}
.ssm-portfolio .pt-dots button{
  width:7px;height:7px;border-radius:50%;border:0;background:#c9d1e4;cursor:pointer;padding:0;transition:all .2s ease;
}
.ssm-portfolio .pt-dots button.on{background:var(--pt-orange);width:20px;border-radius:6px}

/* ---------- bottom banner ---------- */
.ssm-portfolio .pt-banner{
  display:grid;grid-template-columns:auto 1px 1.2fr 1fr auto;gap:26px;align-items:center;
  background:linear-gradient(100deg,#0c1f55,#14307e 60%,#1b3f9c);color:#fff;border-radius:16px;padding:22px 30px;
  box-shadow:0 20px 40px rgba(14,40,110,.3);
}
.ssm-portfolio .pt-bs{
  font-family:"Segoe Script","Brush Script MT","Snell Roundhand",cursive;font-style:italic;font-size:16px;line-height:1.3;
  display:flex;align-items:center;gap:12px;color:#fff;
}
.ssm-portfolio .pt-bs svg{color:#ffb15c;flex:none}
.ssm-portfolio .pt-vline{width:1px;height:50px;background:rgba(255,255,255,.25)}
.ssm-portfolio .pt-bh{font-size:clamp(18px,2vw,25px);font-weight:800;line-height:1.2}
.ssm-portfolio .pt-bh span{color:#ffa64d}
.ssm-portfolio .pt-bp{font-size:12.5px;line-height:1.6;color:#cfd8f3}
.ssm-portfolio .pt-wa{display:flex;flex-direction:column;align-items:center;gap:8px}
.ssm-portfolio .pt-wabtn{
  display:inline-flex;align-items:center;gap:9px;text-decoration:none;color:#fff;font-weight:700;font-size:13px;white-space:nowrap;
  background:linear-gradient(180deg,#ff8a2a,#f26100);padding:12px 22px;border-radius:10px;
  box-shadow:0 10px 22px rgba(242,97,0,.4);transition:transform .2s ease;
}
.ssm-portfolio .pt-wabtn:hover{transform:translateY(-2px)}
.ssm-portfolio .pt-phone-n{font-size:12px;color:#dbe3fa;display:flex;align-items:center;gap:6px;text-decoration:none}

/* ---------- responsive ---------- */
@media (max-width:1180px){
  .ssm-portfolio .pt-track{grid-auto-columns:calc((100% - 36px)/3)}
  .ssm-portfolio .pt-banner{grid-template-columns:1fr;text-align:center}
  .ssm-portfolio .pt-vline{display:none}
  .ssm-portfolio .pt-bs{justify-content:center}
}
@media (max-width:980px){
  .ssm-portfolio .pt-head{grid-template-columns:1fr}
  .ssm-portfolio .pt-right{justify-content:flex-start}
  .ssm-portfolio .pt-track{grid-auto-columns:calc((100% - 18px)/2)}
}
@media (max-width:620px){
  .ssm-portfolio{padding:48px 20px 48px}
  .ssm-portfolio .pt-track{grid-auto-columns:88%}
  .ssm-portfolio .pt-banner{padding:22px 20px}
}

/* reveal */
.ssm-portfolio .pt-reveal{opacity:0;transform:translateY(20px);transition:opacity .7s ease,transform .7s ease}
.ssm-portfolio.is-in .pt-reveal{opacity:1;transform:none}
@media (prefers-reduced-motion:reduce){
  .ssm-portfolio .pt-reveal{opacity:1;transform:none;transition:none}
  .ssm-portfolio .pt-track{scroll-behavior:auto}
}
</style>

<section class="ssm-portfolio">
  <div class="pt-wrap">

    <!-- HEADER -->
    <div class="pt-head pt-reveal">
      <div>
        <div class="pt-eyebrow">Our Portfolio</div>
        <h2>Real Brands. <span>Real Reels.</span></h2>
        <p class="pt-lead">Short videos. Big impact. We create engaging reels that bring brands to life, spark conversations and drive real results.</p>
      </div>
      <div class="pt-right">
        <div class="pt-script">Creative Reels.<br>Real Engagement.
          <svg width="40" height="22" viewBox="0 0 40 22" fill="none" stroke="#0e1b3d" stroke-width="1.4" stroke-linecap="round"><path d="M2 3 C 18 -2, 34 4, 38 16"/><path d="M32 13l6 5 1-8"/></svg>
        </div>
        <!-- generic network icons: swap for your own licensed logos if you like -->
        <div class="pt-nets" aria-hidden="true">
          <div class="pt-net"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r=".8" fill="currentColor"/></svg></div>
          <div class="pt-net"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 11v9H4v-9zM7 11l4-7c2 0 3 1.5 2.5 3.5L13 10h6a2 2 0 012 2.3l-1 6A2 2 0 0118 20H7"/></svg></div>
          <div class="pt-net"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V6l10-2v12"/><circle cx="6.5" cy="18" r="2.5"/><circle cx="16.5" cy="16" r="2.5"/></svg></div>
          <div class="pt-net"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="4"/><path d="M10 9.5l5 2.5-5 2.5z" fill="currentColor"/></svg></div>
        </div>
        <div class="pt-points">
          <div><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="2" width="12" height="20" rx="3"/><path d="M10.5 9.5l3.5 2.5-3.5 2.5z"/></svg>Short-form Videos</div>
          <div><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l6-6 4 4 8-8"/><path d="M15 7h6v6"/></svg>Higher Engagement</div>
          <div><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2 20c0-3.5 3-6 7-6s7 2.5 7 6"/><circle cx="17.5" cy="9" r="2.5"/></svg>Real Audience Growth</div>
        </div>
      </div>
    </div>

    <!-- CAROUSEL (sample brands & numbers: replace with your real client work) -->
    <div class="pt-track pt-reveal" id="ptTrack">

      <!-- 1 -->
      <article class="pt-card" style="--tint:#fff4ea;--accent:#ff7a1a">
        <div class="pt-top">
          <div class="pt-phone"><div class="pt-reel" style="--reel:linear-gradient(160deg,#e8a04a,#8a4a12)">
            <div class="pt-rtop"><span>Reels</span><span>●</span></div>
            <div class="pt-rtext">Healthy<br><em>Tasty</em><br>Naturally!</div>
            <div class="pt-rside"><i></i><i></i><i></i></div>
            <div class="pt-ruser"><i></i>tastebite</div>
          </div></div>
          <div>
            <div class="pt-brand"><div class="pt-mark">T</div><div><b>TastyBite Foods</b><small>Food &amp; Beverages</small></div></div>
            <div class="pt-stats">
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M10 8.5l5 3.5-5 3.5z"/></svg><div><b>1.2M</b><small>Views</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg><div><b>48.7K</b><small>Likes</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z"/></svg><div><b>1.3K</b><small>Comments</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4z"/></svg><div><b>7.8K</b><small>Shares</small></div></div>
            </div>
          </div>
        </div>
        <p>A series of mouth-watering reels showcasing their signature dishes, resulting in a 3.2X increase in profile visits.</p>
        <div class="pt-foot"><span class="pt-tag">Reels Campaign</span><span class="pt-plat"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/></svg>Instagram</span></div>
      </article>

      <!-- 2 -->
      <article class="pt-card" style="--tint:#eef4ff;--accent:#2d6bff">
        <div class="pt-top">
          <div class="pt-phone"><div class="pt-reel" style="--reel:linear-gradient(160deg,#2a3550,#05070d)">
            <div class="pt-rtop"><span>Reels</span><span>●</span></div>
            <div class="pt-rtext">Stronger<br>Than<br><em>Yesterday</em></div>
            <div class="pt-rside"><i></i><i></i><i></i></div>
            <div class="pt-ruser"><i></i>fitlifeclub</div>
          </div></div>
          <div>
            <div class="pt-brand"><div class="pt-mark">F</div><div><b>FitLife Club</b><small>Fitness &amp; Wellness</small></div></div>
            <div class="pt-stats">
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M10 8.5l5 3.5-5 3.5z"/></svg><div><b>856K</b><small>Views</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg><div><b>32.4K</b><small>Likes</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z"/></svg><div><b>892</b><small>Comments</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4z"/></svg><div><b>3.1K</b><small>Shares</small></div></div>
            </div>
          </div>
        </div>
        <p>Motivational reels + workout clips helped them grow their Instagram presence and get more sign-ups for their gym.</p>
        <div class="pt-foot"><span class="pt-tag">Reels Campaign</span><span class="pt-plat"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/></svg>Instagram</span></div>
      </article>

      <!-- 3 -->
      <article class="pt-card" style="--tint:#eefaf1;--accent:#18a05a">
        <div class="pt-top">
          <div class="pt-phone"><div class="pt-reel" style="--reel:linear-gradient(160deg,#8fb98a,#2f5a3a)">
            <div class="pt-rtop"><span>Reels</span><span>●</span></div>
            <div class="pt-rtext">Pure<br>Natural<br><em>Care</em></div>
            <div class="pt-rside"><i></i><i></i><i></i></div>
            <div class="pt-ruser"><i></i>vedorshi</div>
          </div></div>
          <div>
            <div class="pt-brand"><div class="pt-mark">V</div><div><b>Vedorshi Ayurveda</b><small>Ayurvedic Products</small></div></div>
            <div class="pt-stats">
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M10 8.5l5 3.5-5 3.5z"/></svg><div><b>642K</b><small>Views</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg><div><b>21.6K</b><small>Likes</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z"/></svg><div><b>654</b><small>Comments</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4z"/></svg><div><b>2.4K</b><small>Shares</small></div></div>
            </div>
          </div>
        </div>
        <p>Educational &amp; product reels increased brand awareness and drove consistent engagement from the right audience.</p>
        <div class="pt-foot"><span class="pt-tag">Reels Campaign</span><span class="pt-plat"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/></svg>Instagram</span></div>
      </article>

      <!-- 4 -->
      <article class="pt-card" style="--tint:#fff0f3;--accent:#e8416f">
        <div class="pt-top">
          <div class="pt-phone"><div class="pt-reel" style="--reel:linear-gradient(160deg,#e9b9a0,#a8604a)">
            <div class="pt-rtop"><span>Reels</span><span>●</span></div>
            <div class="pt-rtext">Glow<br><em>Naturally</em></div>
            <div class="pt-rside"><i></i><i></i><i></i></div>
            <div class="pt-ruser"><i></i>glowco</div>
          </div></div>
          <div>
            <div class="pt-brand"><div class="pt-mark">G</div><div><b>GlowCo Skincare</b><small>Beauty &amp; Skincare</small></div></div>
            <div class="pt-stats">
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M10 8.5l5 3.5-5 3.5z"/></svg><div><b>1.4M</b><small>Views</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg><div><b>56.3K</b><small>Likes</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z"/></svg><div><b>1.9K</b><small>Comments</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4z"/></svg><div><b>5.2K</b><small>Shares</small></div></div>
            </div>
          </div>
        </div>
        <p>Engaging reels with real customer reactions and product demos helped them boost sales and brand trust.</p>
        <div class="pt-foot"><span class="pt-tag">Reels Campaign</span><span class="pt-plat"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/></svg>Instagram</span></div>
      </article>

      <!-- 5 (extra slide so the carousel scrolls) -->
      <article class="pt-card" style="--tint:#f3efff;--accent:#7b3fe4">
        <div class="pt-top">
          <div class="pt-phone"><div class="pt-reel" style="--reel:linear-gradient(160deg,#8a6be0,#2b1a63)">
            <div class="pt-rtop"><span>Reels</span><span>●</span></div>
            <div class="pt-rtext">Home<br>That<br><em>Inspires</em></div>
            <div class="pt-rside"><i></i><i></i><i></i></div>
            <div class="pt-ruser"><i></i>yourbrand</div>
          </div></div>
          <div>
            <div class="pt-brand"><div class="pt-mark">U</div><div><b>Client Name</b><small>Home &amp; Interiors</small></div></div>
            <div class="pt-stats">
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M10 8.5l5 3.5-5 3.5z"/></svg><div><b>0.0M</b><small>Views</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg><div><b>0.0K</b><small>Likes</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z"/></svg><div><b>0</b><small>Comments</small></div></div>
              <div class="pt-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4z"/></svg><div><b>0</b><small>Shares</small></div></div>
            </div>
          </div>
        </div>
        <p>Add your next client story here: what you made and the result it delivered.</p>
        <div class="pt-foot"><span class="pt-tag">Reels Campaign</span><span class="pt-plat"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/></svg>Instagram</span></div>
      </article>
    </div>

    <div class="pt-controls pt-reveal">
      <button class="pt-btn" id="ptPrev" aria-label="Previous"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 6l-6 6 6 6"/></svg></button>
      <div class="pt-dots" id="ptDots"></div>
      <button class="pt-btn" id="ptNext" aria-label="Next"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"/></svg></button>
    </div>

    <!-- BANNER -->
    <div class="pt-banner pt-reveal">
      <div class="pt-bs">
        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M3 11h18M7 7l3 4M12 7l3 4M17 7l2 4M5 4l14 3"/></svg>
        <span>Ready to Create<br>Your Own Success Story?</span>
      </div>
      <div class="pt-vline"></div>
      <div class="pt-bh">Let's Turn Your Brand<br>into a <span>Social Media Success.</span></div>
      <div class="pt-bp">Get a free consultation and see how short-form videos can help your brand grow, engage and get real results.</div>
      <div class="pt-wa">
        <!-- replace the number in the link and the label -->
        <a class="pt-wabtn" href="https://wa.me/910000000000" target="_blank" rel="noopener">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z"/></svg>
          Chat on WhatsApp
        </a>
        <a class="pt-phone-n" href="tel:+910000000000">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 012-2z"/></svg>
          +91 00000 00000
        </a>
      </div>
    </div>
  </div>
</section>

<script>
(function(){
  var sec=document.querySelector('.ssm-portfolio');
  if(!sec) return;

  /* reveal on scroll */
  function show(){ sec.classList.add('is-in'); }
  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(e){
      if(e[0].isIntersecting){ show(); io.disconnect(); }
    },{threshold:.1});
    io.observe(sec);
  } else { show(); }

  /* carousel */
  var track=document.getElementById('ptTrack'),
      prev=document.getElementById('ptPrev'),
      next=document.getElementById('ptNext'),
      dotsWrap=document.getElementById('ptDots');
  if(!track) return;

  var dots=[];
  function pages(){ return Math.max(1,Math.ceil((track.scrollWidth-4)/track.clientWidth)); }

  function build(){
    dotsWrap.innerHTML=''; dots=[];
    for(var i=0;i<pages();i++){
      (function(i){
        var b=document.createElement('button');
        b.setAttribute('aria-label','Go to page '+(i+1));
        b.addEventListener('click',function(){
          track.scrollTo({left:i*track.clientWidth,behavior:'smooth'});
        });
        dotsWrap.appendChild(b); dots.push(b);
      })(i);
    }
    update();
  }

  function update(){
    var max=track.scrollWidth-track.clientWidth,
        n=pages(),
        idx=max<=0?0:Math.round(track.scrollLeft/max*(n-1));
    dots.forEach(function(d,i){ d.className=i===idx?'on':''; });
  }

  prev.addEventListener('click',function(){ track.scrollBy({left:-track.clientWidth,behavior:'smooth'}); });
  next.addEventListener('click',function(){ track.scrollBy({left:track.clientWidth,behavior:'smooth'}); });
  track.addEventListener('scroll',function(){ window.requestAnimationFrame(update); });
  window.addEventListener('resize',build);
  build();
})();
</script>
