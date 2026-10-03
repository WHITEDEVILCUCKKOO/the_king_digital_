<style>
/* ================= SSM WHY ================= */
.ssm-why{
  --wy-navy:#0e1b3d;
  --wy-text:#5b6477;
  --wy-line:#e6eaf2;
  --wy-orange:#ff7a1a;
  --wy-blue:#2d6bff;
  --wy-green:#18b36b;
  position:relative;overflow:hidden;
  background:
    radial-gradient(760px 420px at 85% 0%, #e9f0ff 0%, transparent 62%),
    radial-gradient(520px 380px at 0% 25%, #fff1e4 0%, transparent 60%),
    #fafbff;
  color:var(--wy-navy);
  font-family:"Inter","Segoe UI",system-ui,-apple-system,Arial,sans-serif;
  padding:60px 5% 60px;box-sizing:border-box;
}
.ssm-why *{box-sizing:border-box;margin:0;padding:0}
.ssm-why svg{display:block}
.ssm-why .wy-wrap{max-width:1240px;margin:0 auto}

/* ---------- header ---------- */
.ssm-why .wy-head{display:grid;grid-template-columns:minmax(0,1.05fr) minmax(0,.95fr);gap:20px;align-items:center;margin-bottom:34px}
.ssm-why .wy-eyebrow{
  display:flex;align-items:center;gap:14px;margin-bottom:18px;
  font-size:12px;letter-spacing:.22em;text-transform:uppercase;color:#7b8498;
}
.ssm-why .wy-eyebrow::before{content:"";width:46px;height:2px;background:var(--wy-orange)}
.ssm-why h2{font-size:clamp(32px,4.4vw,54px);line-height:1.06;font-weight:800;letter-spacing:-.02em;margin-bottom:18px}
.ssm-why h2 span{display:block;color:var(--wy-orange)}
.ssm-why .wy-lead{font-size:15px;line-height:1.65;color:var(--wy-text);max-width:520px}

/* ---------- visual ---------- */
.ssm-why .wy-visual{position:relative;height:300px}
.ssm-why .wy-phone{
  position:absolute;left:50%;top:-4px;transform:translateX(-46%) rotate(5deg);
  width:190px;height:330px;border-radius:30px;background:#10131b;padding:7px;z-index:2;
  box-shadow:0 30px 56px rgba(14,27,61,.3);
}
.ssm-why .wy-screen{width:100%;height:100%;background:#fff;border-radius:24px;overflow:hidden;padding:20px 10px 8px}
.ssm-why .wy-notch{position:absolute;top:12px;left:50%;transform:translateX(-50%);width:52px;height:14px;background:#10131b;border-radius:9px;z-index:3}
.ssm-why .wy-sh{display:flex;justify-content:space-between;font-size:10px;font-weight:800;margin-bottom:5px}
.ssm-why .wy-seg{display:flex;gap:4px;font-size:7px;margin-bottom:8px}
.ssm-why .wy-seg span{padding:3px 7px;border-radius:5px;background:#eef1f8;color:#6b7488}
.ssm-why .wy-seg span:first-child{background:var(--wy-navy);color:#fff}
.ssm-why .wy-reach small{font-size:7.5px;color:#7b8498}
.ssm-why .wy-reach b{display:block;font-size:19px;line-height:1.1}
.ssm-why .wy-reach em{font-style:normal;font-size:8px;font-weight:700;color:var(--wy-green)}
.ssm-why .wy-mini{width:100%;height:42px;margin:4px 0 8px}
.ssm-why .wy-top{font-size:8px;font-weight:700;margin-bottom:5px}
.ssm-why .wy-plats{display:flex;justify-content:space-between}
.ssm-why .wy-pl{text-align:center;font-size:7.5px;font-weight:700}
.ssm-why .wy-pl i{display:block;width:22px;height:22px;border-radius:7px;margin:0 auto 3px}

.ssm-why .wy-chip{
  position:absolute;background:#fff;border:1px solid var(--wy-line);border-radius:999px;padding:7px 13px;z-index:4;
  display:flex;align-items:center;gap:8px;font-size:11.5px;font-weight:700;box-shadow:0 10px 22px rgba(14,27,61,.12);
  animation:wyFloat 6s ease-in-out infinite;
}
.ssm-why .wy-chip svg{color:var(--wy-blue)}
.ssm-why .wy-ch1{left:0;top:20px}
.ssm-why .wy-ch2{left:-4%;top:80px;animation-delay:.8s}
.ssm-why .wy-ch3{left:0;top:140px;animation-delay:1.6s}
.ssm-why .wy-ch4{right:-2%;top:150px;animation-delay:1.1s}
.ssm-why .wy-ch5{right:-2%;top:200px;animation-delay:2s}

.ssm-why .wy-bub{
  position:absolute;width:46px;height:46px;border-radius:14px;display:grid;place-items:center;color:#fff;z-index:3;
  box-shadow:0 12px 24px rgba(14,27,61,.22);animation:wyFloat 5.5s ease-in-out infinite;
}
.ssm-why .wy-b1{left:30%;top:-8px;background:linear-gradient(135deg,#ff9a3c,#e8416f)}
.ssm-why .wy-b2{left:24%;top:96px;background:linear-gradient(135deg,#3f7bff,#2a52d6);animation-delay:1s;width:50px;height:50px}
.ssm-why .wy-b3{left:34%;top:200px;background:linear-gradient(135deg,#2f7fd0,#1a5a9e);animation-delay:1.8s;width:40px;height:40px}
.ssm-why .wy-b4{right:12%;top:0;background:linear-gradient(135deg,#1a1f2e,#3a4260);animation-delay:.5s;width:40px;height:40px}
.ssm-why .wy-b5{right:6%;top:70px;background:linear-gradient(135deg,#ff5a4d,#d82c2c);animation-delay:1.4s;width:40px;height:40px}
.ssm-why .wy-script{
  position:absolute;right:-2%;top:-10px;z-index:5;max-width:130px;text-align:right;
  font-family:"Segoe Script","Brush Script MT","Snell Roundhand",cursive;font-style:italic;
  font-size:12px;line-height:1.35;color:#1c3a8a;
}
@keyframes wyFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-7px)}}

/* ---------- cards ---------- */
.ssm-why .wy-cards{display:grid;grid-template-columns:repeat(5,1fr);gap:14px}
.ssm-why .wy-card{
  position:relative;background:#fff;border:1px solid var(--wy-line);border-top:3px solid var(--c);border-radius:16px;
  padding:18px 16px 16px;display:flex;flex-direction:column;
  box-shadow:0 12px 26px rgba(20,40,90,.06);
  transition:transform .25s ease,box-shadow .25s ease;
}
.ssm-why .wy-card:hover{transform:translateY(-6px);box-shadow:0 22px 40px rgba(20,40,90,.13)}
.ssm-why .wy-num{position:absolute;left:14px;top:12px;font-size:10px;font-weight:800;color:var(--c);opacity:.8}
.ssm-why .wy-ico{
  width:48px;height:48px;border-radius:50%;margin:8px auto 10px;display:grid;place-items:center;color:#fff;
  background:var(--c);box-shadow:0 10px 20px color-mix(in srgb,var(--c) 35%,transparent);
}
.ssm-why .wy-card h3{font-size:15px;font-weight:800;text-align:center;margin-bottom:8px}
.ssm-why .wy-card > p{font-size:12px;line-height:1.5;color:var(--wy-text);text-align:center;margin-bottom:12px}
.ssm-why .wy-list{list-style:none;display:flex;flex-direction:column;gap:7px;margin-bottom:14px}
.ssm-why .wy-list li{display:flex;align-items:center;gap:8px;font-size:12px;color:#2a3558}
.ssm-why .wy-list svg{color:var(--c);flex:none}
.ssm-why .wy-note{
  margin-top:auto;background:var(--t);border-radius:10px;padding:10px 12px;display:flex;align-items:center;gap:10px;
  font-size:11px;line-height:1.4;color:#33406a;font-weight:500;
}
.ssm-why .wy-note svg{color:var(--c);flex:none}

/* ---------- banner ---------- */
.ssm-why .wy-banner{
  margin-top:24px;display:grid;grid-template-columns:auto 1px 1.1fr 1fr auto;gap:26px;align-items:center;
  background:linear-gradient(100deg,#0c1f55,#14307e 60%,#1b3f9c);color:#fff;border-radius:16px;padding:22px 30px;
  box-shadow:0 20px 40px rgba(14,40,110,.3);
}
.ssm-why .wy-bs{
  display:flex;align-items:center;gap:12px;font-family:"Segoe Script","Brush Script MT","Snell Roundhand",cursive;
  font-style:italic;font-size:16px;line-height:1.3;
}
.ssm-why .wy-bs svg{color:#ffb15c;flex:none}
.ssm-why .wy-vline{width:1px;height:50px;background:rgba(255,255,255,.25)}
.ssm-why .wy-bh{font-size:clamp(18px,2vw,25px);font-weight:800;line-height:1.2}
.ssm-why .wy-bh span{color:#ffa64d}
.ssm-why .wy-bp{font-size:12.5px;line-height:1.6;color:#cfd8f3}
.ssm-why .wy-wa{display:flex;flex-direction:column;align-items:center;gap:8px}
.ssm-why .wy-wabtn{
  display:inline-flex;align-items:center;gap:9px;text-decoration:none;color:#fff;font-weight:700;font-size:13px;white-space:nowrap;
  background:linear-gradient(180deg,#ff8a2a,#f26100);padding:12px 22px;border-radius:999px;
  box-shadow:0 10px 22px rgba(242,97,0,.4);transition:transform .2s ease;
}
.ssm-why .wy-wabtn:hover{transform:translateY(-2px)}
.ssm-why .wy-tel{font-size:12px;color:#dbe3fa;display:flex;align-items:center;gap:6px;text-decoration:none}

/* ---------- responsive ---------- */
@media (max-width:1180px){
  .ssm-why .wy-cards{grid-template-columns:repeat(3,1fr)}
  .ssm-why .wy-banner{grid-template-columns:1fr;text-align:center}
  .ssm-why .wy-vline{display:none}
  .ssm-why .wy-bs{justify-content:center}
}
@media (max-width:980px){
  .ssm-why .wy-head{grid-template-columns:1fr}
  .ssm-why .wy-visual{max-width:520px;margin:0 auto;width:100%;height:330px}
}
@media (max-width:700px){
  .ssm-why{padding:48px 20px 48px}
  .ssm-why .wy-cards{grid-template-columns:1fr 1fr}
  .ssm-why .wy-ch2,.ssm-why .wy-ch3,.ssm-why .wy-ch5,.ssm-why .wy-b3,.ssm-why .wy-b5{display:none}
  .ssm-why .wy-banner{padding:22px 20px}
}
@media (max-width:480px){.ssm-why .wy-cards{grid-template-columns:1fr}}

/* reveal */
.ssm-why .wy-reveal{opacity:0;transform:translateY(20px);transition:opacity .7s ease,transform .7s ease}
.ssm-why.is-in .wy-reveal{opacity:1;transform:none}
.ssm-why.is-in .wy-cards .wy-card:nth-child(2){transition-delay:.08s}
.ssm-why.is-in .wy-cards .wy-card:nth-child(3){transition-delay:.16s}
.ssm-why.is-in .wy-cards .wy-card:nth-child(4){transition-delay:.24s}
.ssm-why.is-in .wy-cards .wy-card:nth-child(5){transition-delay:.32s}
@media (prefers-reduced-motion:reduce){
  .ssm-why .wy-reveal{opacity:1;transform:none;transition:none}
  .ssm-why .wy-chip,.ssm-why .wy-bub{animation:none}
}
</style>

<section class="ssm-why">
  <div class="wy-wrap">

    <!-- HEADER -->
    <div class="wy-head">
      <div class="wy-reveal">
        <div class="wy-eyebrow">Why It Matters</div>
        <h2>Why Businesses Need <span>Social Media Marketing</span></h2>
        <p class="wy-lead">Social media isn't just about likes and followers — it's a powerful business growth engine. Here's how it helps your brand, drives real results and puts you ahead of the competition.</p>
      </div>

      <div class="wy-visual wy-reveal" aria-hidden="true">
        <div class="wy-script">More Visibility.<br>Better Leads.<br>Higher Sales.</div>

        <!-- generic network bubbles -->
        <div class="wy-bub wy-b1"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r=".8" fill="currentColor"/></svg></div>
        <div class="wy-bub wy-b2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 11v9H4v-9zM7 11l4-7c2 0 3 1.5 2.5 3.5L13 10h6a2 2 0 012 2.3l-1 6A2 2 0 0118 20H7"/></svg></div>
        <div class="wy-bub wy-b3"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V5a1 1 0 011-1h4a1 1 0 011 1v2"/></svg></div>
        <div class="wy-bub wy-b4"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V6l10-2v12"/><circle cx="6.5" cy="18" r="2.5"/><circle cx="16.5" cy="16" r="2.5"/></svg></div>
        <div class="wy-bub wy-b5"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="4"/><path d="M10 9.5l5 2.5-5 2.5z" fill="currentColor"/></svg></div>

        <!-- phone -->
        <div class="wy-phone">
          <div class="wy-notch"></div>
          <div class="wy-screen">
            <div class="wy-sh"><span>Insights</span><span>⋯</span></div>
            <div class="wy-seg"><span>Overview</span><span>30 Days</span><span>90 Days</span></div>
            <div class="wy-reach"><small>Reach</small><b>256.4K</b><em>↑ 41.2%</em></div>
            <svg class="wy-mini" viewBox="0 0 160 42" preserveAspectRatio="none"><path d="M0 36 L24 30 L48 33 L72 20 L96 24 L120 10 L160 3" fill="none" stroke="#2d6bff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M0 36 L24 30 L48 33 L72 20 L96 24 L120 10 L160 3 V42 H0Z" fill="rgba(45,107,255,.12)"/></svg>
            <div class="wy-top">Top Platforms</div>
            <div class="wy-plats">
              <div class="wy-pl"><i style="background:linear-gradient(135deg,#ff9a3c,#e8416f)"></i>42%</div>
              <div class="wy-pl"><i style="background:linear-gradient(135deg,#3f7bff,#2a52d6)"></i>28%</div>
              <div class="wy-pl"><i style="background:linear-gradient(135deg,#1a1f2e,#3a4260)"></i>16%</div>
              <div class="wy-pl"><i style="background:linear-gradient(135deg,#2f7fd0,#1a5a9e)"></i>12%</div>
            </div>
          </div>
        </div>

        <!-- floating chips -->
        <div class="wy-chip wy-ch1"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l6-6 4 4 8-8M15 7h6v6"/></svg>Brand Growth</div>
        <div class="wy-chip wy-ch2"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 4h18l-7 9v6l-4 2v-8z"/></svg>More Leads</div>
        <div class="wy-chip wy-ch3"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#7b3fe4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg>Engagement</div>
        <div class="wy-chip wy-ch4"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="4.5"/><circle cx="12" cy="12" r="1"/></svg>Retargeting</div>
        <div class="wy-chip wy-ch5"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg>Credibility</div>
      </div>
    </div>

    <!-- 5 CARDS -->
    <div class="wy-cards">

      <article class="wy-card wy-reveal" style="--c:#ff7a1a;--t:#fff2e6">
        <span class="wy-num">01</span>
        <div class="wy-ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11v2a1 1 0 001 1h3l8 4V6L7 10H4a1 1 0 00-1 1z"/><path d="M18 9a4 4 0 010 6"/></svg></div>
        <h3>Brand Visibility</h3>
        <p>Get noticed by the right audience, where they spend their time.</p>
        <ul class="wy-list">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Increase brand awareness</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Reach new audiences</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Stay top of mind</li>
        </ul>
        <div class="wy-note"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"/><circle cx="12" cy="12" r="3"/></svg>Build a stronger and recognizable brand across platforms.</div>
      </article>

      <article class="wy-card wy-reveal" style="--c:#2d6bff;--t:#eaf1ff">
        <span class="wy-num">02</span>
        <div class="wy-ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2 20c0-3.5 3-6 7-6s7 2.5 7 6"/><circle cx="17.5" cy="9" r="2.5"/><path d="M18 14c2.5.3 4 2 4 5"/></svg></div>
        <h3>Qualified Leads</h3>
        <p>Turn followers into real business opportunities.</p>
        <ul class="wy-list">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Attract interested audience</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Drive website traffic</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Generate quality inquiries</li>
        </ul>
        <div class="wy-note"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 4h18l-7 9v6l-4 2v-8z"/></svg>More right people. Less time wasted.</div>
      </article>

      <article class="wy-card wy-reveal" style="--c:#7b3fe4;--t:#f1ebff">
        <span class="wy-num">03</span>
        <div class="wy-ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z"/><path d="M12 15s-3-1.8-3-4a1.7 1.7 0 013-1 1.7 1.7 0 013 1c0 2.2-3 4-3 4z"/></svg></div>
        <h3>Customer Engagement</h3>
        <p>Build real relationships and keep your audience coming back.</p>
        <ul class="wy-list">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Two-way communication</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Stronger community</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Higher customer loyalty</li>
        </ul>
        <div class="wy-note"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg>Engaged customers buy more and stay longer.</div>
      </article>

      <article class="wy-card wy-reveal" style="--c:#18b36b;--t:#e8f8ef">
        <span class="wy-num">04</span>
        <div class="wy-ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5"/></svg></div>
        <h3>Retargeting</h3>
        <p>Bring back interested users and turn them into customers.</p>
        <ul class="wy-list">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Re-engage website visitors</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Remind past customers</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Boost conversion rates</li>
        </ul>
        <div class="wy-note"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a9 9 0 01-15.5 6.2M3 12A9 9 0 0118.5 5.8"/><path d="M18.5 2v4h-4M5.5 22v-4h4"/></svg>The right message. At the right time.</div>
      </article>

      <article class="wy-card wy-reveal" style="--c:#12a5b5;--t:#e6f7f9">
        <span class="wy-num">05</span>
        <div class="wy-ico"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M9 12l2 2 4-4"/></svg></div>
        <h3>Brand Credibility</h3>
        <p>Show your value, build trust, and stand out from the competition.</p>
        <ul class="wy-list">
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Authentic content &amp; reviews</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Social proof (UGC)</li>
          <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5 5 9-10"/></svg>Professional brand presence</li>
        </ul>
        <div class="wy-note"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/></svg>Trust turns followers into loyal customers.</div>
      </article>
    </div>

    <!-- BANNER -->
    <div class="wy-banner wy-reveal">
      <div class="wy-bs">
        <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20V13M10 20V9M16 20v-8M22 20H2"/><path d="M4 9l6-5 4 3 7-4"/></svg>
        <span>Grow Your<br>Business with<br>Social Media!</span>
      </div>
      <div class="wy-vline"></div>
      <div class="wy-bh">Let's Turn Your Social Media<br>into <span>Real Business Results.</span></div>
      <div class="wy-bp">Get a free consultation and discover how social media marketing can help your brand grow, engage and generate more leads.</div>
      <div class="wy-wa">
        <!-- replace the number in both links and the label -->
        <a class="wy-wabtn" href="https://wa.me/910000000000" target="_blank" rel="noopener">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z"/></svg>
          Chat on WhatsApp
        </a>
        <a class="wy-tel" href="tel:+910000000000">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2A16 16 0 013 6a2 2 0 012-2z"/></svg>
          +91 00000 00000
        </a>
      </div>
    </div>
  </div>
</section>

<script>
(function(){
  var sec=document.querySelector('.ssm-why');
  if(!sec) return;
  function show(){ sec.classList.add('is-in'); }
  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(e){
      if(e[0].isIntersecting){ show(); io.disconnect(); }
    },{threshold:.1});
    io.observe(sec);
  } else { show(); }
})();
</script>
