<style>
/* ================= SSM PROCESS ================= */
.ssm-process{
  --pr-navy:#0e1b3d;
  --pr-text:#5b6477;
  --pr-line:#e6eaf2;
  --pr-orange:#ff7a1a;
  --pr-purple:#7b3fe4;
  --pr-blue:#2d6bff;
  --pr-green:#18b36b;
  --pr-green-t:#18b36b;
  position:relative;overflow:hidden;
  background:
    radial-gradient(760px 460px at 80% 8%, #e9eeff 0%, transparent 62%),
    radial-gradient(520px 380px at 0% 40%, #f3ecff 0%, transparent 60%),
    #fafbff;
  color:var(--pr-navy);
  font-family:"Inter","Segoe UI",system-ui,-apple-system,Arial,sans-serif;
  padding:64px 5% 80px;box-sizing:border-box;
}
.ssm-process *{box-sizing:border-box;margin:0;padding:0}
.ssm-process svg{display:block}
.ssm-process .pr-wrap{max-width:1240px;margin:0 auto;position:relative;z-index:2}

/* decorative corners */
.ssm-process .pr-blob1{
  position:absolute;left:-90px;bottom:-110px;width:280px;height:280px;border-radius:50%;
  background:linear-gradient(135deg,#ff6a9a,#7b3fe4 60%,#2d6bff);opacity:.9;z-index:1;
}
.ssm-process .pr-blob2{
  position:absolute;right:-70px;bottom:-90px;width:220px;height:220px;border-radius:50%;
  background:linear-gradient(135deg,#ff9a3c,#ff5a2a);opacity:.9;z-index:1;
}
.ssm-process .pr-dots{
  position:absolute;right:26px;bottom:90px;width:70px;height:70px;z-index:1;opacity:.7;
  background-image:radial-gradient(#ff7a1a 1.6px,transparent 1.8px);background-size:12px 12px;
}
.ssm-process .pr-heart{
  position:absolute;left:36px;bottom:34px;width:46px;height:46px;border-radius:14px;z-index:3;
  background:linear-gradient(135deg,#ff6a9a,#e8416f);display:grid;place-items:center;color:#fff;
  box-shadow:0 12px 26px rgba(232,65,111,.4);transform:rotate(-10deg);
}

.ssm-process .pr-main{display:grid;grid-template-columns:minmax(0,.9fr) minmax(0,1.1fr);gap:20px;align-items:center}

/* ---------- copy ---------- */
.ssm-process .pr-eyebrow{
  display:flex;align-items:center;gap:14px;margin-bottom:22px;
  font-size:12px;letter-spacing:.22em;text-transform:uppercase;color:#7b8498;
}
.ssm-process .pr-eyebrow::before{content:"";width:46px;height:2px;background:var(--pr-orange)}
.ssm-process h2{font-size:clamp(36px,4.8vw,60px);line-height:1.06;font-weight:800;letter-spacing:-.02em;margin-bottom:22px}
.ssm-process h2 span{
  display:block;
  background:linear-gradient(90deg,var(--pr-purple),#d946ef 55%,var(--pr-orange));
  -webkit-background-clip:text;background-clip:text;color:transparent;-webkit-text-fill-color:transparent;
}
.ssm-process .pr-lead{font-size:16px;line-height:1.65;color:var(--pr-text);max-width:440px}

/* ---------- visual ---------- */
.ssm-process .pr-visual{position:relative;height:400px}
.ssm-process .pr-script{
  position:absolute;left:14%;top:-6px;z-index:5;
  font-family:"Segoe Script","Brush Script MT","Snell Roundhand",cursive;font-style:italic;
  font-size:15px;line-height:1.25;color:var(--pr-navy);
}
.ssm-process .pr-script svg{position:absolute;left:100%;top:8px;margin-left:6px}

/* laptop */
.ssm-process .pr-laptop{position:absolute;left:50%;top:48px;transform:translateX(-50%);width:430px;z-index:2}
.ssm-process .pr-lscreen{
  background:#10131b;border-radius:14px 14px 4px 4px;padding:9px 9px 12px;
  box-shadow:0 30px 60px rgba(14,27,61,.28);
}
.ssm-process .pr-dash{background:#f6f8fd;border-radius:6px;display:grid;grid-template-columns:42px 1fr;height:220px;overflow:hidden}
.ssm-process .pr-side{background:#fff;border-right:1px solid var(--pr-line);padding:10px 8px;display:flex;flex-direction:column;gap:9px;align-items:center}
.ssm-process .pr-side i{width:20px;height:20px;border-radius:6px;background:#e5e9f4;display:block}
.ssm-process .pr-side i:first-child{background:var(--pr-purple)}
.ssm-process .pr-body{padding:10px 12px;min-width:0}
.ssm-process .pr-prof{display:flex;align-items:center;gap:8px;margin-bottom:9px}
.ssm-process .pr-prof .av{width:26px;height:26px;border-radius:50%;background:var(--pr-navy);color:#fff;font-size:9px;font-weight:800;display:grid;place-items:center;flex:none}
.ssm-process .pr-prof b{font-size:10px;display:block}
.ssm-process .pr-prof small{font-size:8px;color:#8a93a6}
.ssm-process .pr-kpis{display:grid;grid-template-columns:repeat(3,1fr) 1.4fr;gap:6px;margin-bottom:9px}
.ssm-process .pr-kpi{background:#fff;border:1px solid var(--pr-line);border-radius:6px;padding:6px 7px}
.ssm-process .pr-kpi small{display:block;font-size:7px;color:#8a93a6}
.ssm-process .pr-kpi b{font-size:11px}
.ssm-process .pr-kpi.chart{padding:4px}
.ssm-process .pr-kpi.chart svg{width:100%;height:26px}
.ssm-process .pr-posts-t{font-size:8px;font-weight:700;margin-bottom:5px;display:flex;justify-content:space-between}
.ssm-process .pr-posts{display:grid;grid-template-columns:repeat(4,1fr);gap:6px}
.ssm-process .pr-posts div{height:48px;border-radius:5px}
.ssm-process .pr-posts div:nth-child(1){background:linear-gradient(135deg,#5b7aa6,#1d2b4d)}
.ssm-process .pr-posts div:nth-child(2){background:linear-gradient(135deg,#8ea3c2,#4b6285)}
.ssm-process .pr-posts div:nth-child(3){background:linear-gradient(135deg,#f2b36b,#d9822b)}
.ssm-process .pr-posts div:nth-child(4){background:linear-gradient(135deg,#7b3fe4,#2d6bff)}
.ssm-process .pr-lbase{
  height:12px;margin:0 -22px;border-radius:0 0 18px 18px;
  background:linear-gradient(180deg,#dfe3ec,#b9c0cf);box-shadow:0 12px 24px rgba(14,27,61,.18);
}

/* mug */
.ssm-process .pr-mug{
  position:absolute;right:4%;bottom:6px;width:54px;height:62px;border-radius:6px 6px 12px 12px;z-index:3;
  background:linear-gradient(135deg,#1a2347,#0a1020);color:#fff;font-size:8px;font-weight:700;
  display:grid;place-items:center;text-align:center;line-height:1.2;box-shadow:0 12px 22px rgba(14,27,61,.3);
}
.ssm-process .pr-mug::after{content:"";position:absolute;right:-12px;top:14px;width:14px;height:26px;border:4px solid #1a2347;border-left:0;border-radius:0 12px 12px 0}

/* floating chips + bubbles */
.ssm-process .pr-chip{
  position:absolute;background:#fff;border-radius:14px;padding:9px 13px;z-index:4;
  box-shadow:0 16px 34px rgba(14,27,61,.16);border:1px solid var(--pr-line);
  display:flex;align-items:center;gap:8px;font-size:13px;font-weight:800;animation:prFloat 6s ease-in-out infinite;
}
.ssm-process .pr-chip .up{color:var(--pr-green)}
.ssm-process .pr-c1{right:8%;top:14px}
.ssm-process .pr-c2{right:-2%;top:252px;animation-delay:1.4s}
.ssm-process .pr-bub{
  position:absolute;width:52px;height:52px;border-radius:15px;display:grid;place-items:center;color:#fff;z-index:4;
  box-shadow:0 14px 28px rgba(14,27,61,.22);animation:prFloat 5.5s ease-in-out infinite;
}
.ssm-process .pr-b1{left:0;top:90px;background:linear-gradient(135deg,#ff9a3c,#e8416f)}
.ssm-process .pr-b2{left:-4%;top:200px;background:linear-gradient(135deg,#3f7bff,#2a52d6);animation-delay:1s}
.ssm-process .pr-b3{right:-3%;top:76px;background:linear-gradient(135deg,#1a1f2e,#3a4260);animation-delay:.5s;width:46px;height:46px}
.ssm-process .pr-b4{right:-4%;top:156px;background:linear-gradient(135deg,#ff5a4d,#d82c2c);animation-delay:1.8s;width:46px;height:46px}
.ssm-process .pr-b5{right:6%;top:300px;background:linear-gradient(135deg,#2f7fd0,#1a5a9e);animation-delay:2.4s;width:44px;height:44px}
@keyframes prFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}

/* ---------- steps ---------- */
.ssm-process .pr-steps{
  margin-top:34px;display:grid;grid-template-columns:repeat(5,1fr);gap:0;align-items:stretch;
}
.ssm-process .pr-stepwrap{display:flex;align-items:center;position:relative}
.ssm-process .pr-step{
  flex:1;height:100%;background:#fff;border:1px solid var(--pr-line);border-radius:16px;padding:20px 18px 18px;
  box-shadow:0 10px 24px rgba(20,40,90,.06);
  transition:transform .25s ease,box-shadow .25s ease;
}
.ssm-process .pr-step:hover{transform:translateY(-6px);box-shadow:0 20px 38px rgba(20,40,90,.13)}
.ssm-process .pr-sh{display:flex;align-items:center;justify-content:space-between;margin-bottom:14px}
.ssm-process .pr-badge{
  width:30px;height:30px;border-radius:50%;display:grid;place-items:center;color:#fff;font-size:12px;font-weight:800;
  background:var(--c);box-shadow:0 6px 14px color-mix(in srgb,var(--c) 40%,transparent);
}
.ssm-process .pr-sico{color:var(--c);opacity:.9}
.ssm-process .pr-step h3{font-size:14.5px;font-weight:700;margin-bottom:8px}
.ssm-process .pr-step p{font-size:12.5px;line-height:1.55;color:var(--pr-text);margin-bottom:14px}
.ssm-process .pr-uline{width:28px;height:3px;border-radius:3px;background:var(--c)}
.ssm-process .pr-arrow{width:26px;flex:none;color:#9aa5c0;display:grid;place-items:center}

/* ---------- bottom cta ---------- */
.ssm-process .pr-cta{
  margin:34px auto 0;max-width:900px;display:flex;align-items:center;justify-content:space-between;gap:22px;flex-wrap:wrap;
  background:#fff;border:1px solid var(--pr-line);border-radius:18px;padding:16px 20px 16px 26px;
  box-shadow:0 14px 34px rgba(20,40,90,.08);
}
.ssm-process .pr-cta-l{display:flex;align-items:center;gap:16px}
.ssm-process .pr-cta-ico{
  width:42px;height:42px;border-radius:50%;display:grid;place-items:center;flex:none;
  background:#eef0ff;color:var(--pr-blue);
}
.ssm-process .pr-cta-l b{display:block;font-size:14.5px;margin-bottom:2px}
.ssm-process .pr-cta-l span{font-size:12.5px;color:var(--pr-text)}
.ssm-process .pr-btn{
  display:inline-flex;align-items:center;gap:12px;text-decoration:none;color:#fff;font-weight:700;font-size:14px;
  background:linear-gradient(90deg,var(--pr-blue),var(--pr-purple));padding:14px 28px;border-radius:999px;
  box-shadow:0 12px 24px rgba(91,63,228,.32);transition:transform .2s ease,box-shadow .2s ease;
}
.ssm-process .pr-btn:hover{transform:translateY(-2px);box-shadow:0 16px 30px rgba(91,63,228,.42)}

/* ---------- responsive ---------- */
@media (max-width:1100px){
  .ssm-process .pr-steps{grid-template-columns:repeat(3,1fr);gap:14px}
  .ssm-process .pr-arrow{display:none}
}
@media (max-width:980px){
  .ssm-process .pr-main{grid-template-columns:1fr}
  .ssm-process .pr-visual{max-width:560px;margin:10px auto 0;width:100%}
}
@media (max-width:640px){
  .ssm-process{padding:50px 20px 70px}
  .ssm-process .pr-steps{grid-template-columns:1fr 1fr}
  .ssm-process .pr-visual{height:340px}
  .ssm-process .pr-laptop{width:320px;top:56px}
  .ssm-process .pr-dash{height:170px}
  .ssm-process .pr-posts div{height:34px}
  .ssm-process .pr-b1,.ssm-process .pr-b2,.ssm-process .pr-b5,.ssm-process .pr-mug,.ssm-process .pr-c2{display:none}
  .ssm-process .pr-script{left:2%}
  .ssm-process .pr-heart{display:none}
}
@media (max-width:440px){.ssm-process .pr-steps{grid-template-columns:1fr}}

/* reveal */
.ssm-process .pr-reveal{opacity:0;transform:translateY(20px);transition:opacity .7s ease,transform .7s ease}
.ssm-process.is-in .pr-reveal{opacity:1;transform:none}
.ssm-process.is-in .pr-steps .pr-stepwrap:nth-child(2){transition-delay:.08s}
.ssm-process.is-in .pr-steps .pr-stepwrap:nth-child(3){transition-delay:.16s}
.ssm-process.is-in .pr-steps .pr-stepwrap:nth-child(4){transition-delay:.24s}
.ssm-process.is-in .pr-steps .pr-stepwrap:nth-child(5){transition-delay:.32s}
@media (prefers-reduced-motion:reduce){
  .ssm-process .pr-reveal{opacity:1;transform:none;transition:none}
  .ssm-process .pr-chip,.ssm-process .pr-bub{animation:none}
}
</style>

<section class="ssm-process">
  <div class="pr-blob1"></div><div class="pr-blob2"></div><div class="pr-dots"></div>
  <div class="pr-heart" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg></div>

  <div class="pr-wrap">
    <div class="pr-main">

      <!-- LEFT -->
      <div class="pr-copy pr-reveal">
        <div class="pr-eyebrow">Our Process</div>
        <h2>Simple Steps. <span>Real Results.</span></h2>
        <p class="pr-lead">We keep things simple, transparent and effective. Our proven process helps your brand grow on social media — with the right strategy, creative content and continuous optimization.</p>
      </div>

      <!-- RIGHT -->
      <div class="pr-visual pr-reveal" aria-hidden="true">
        <div class="pr-script">Your Social Media<br>Growth Partner
          <svg width="46" height="26" viewBox="0 0 46 26" fill="none" stroke="#0e1b3d" stroke-width="1.4" stroke-linecap="round"><path d="M2 4 C 20 -2, 38 6, 42 20"/><path d="M36 17l6 5 2-8"/></svg>
        </div>

        <!-- generic bubbles -->
        <div class="pr-bub pr-b1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r=".8" fill="currentColor"/></svg></div>
        <div class="pr-bub pr-b2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 11v9H4v-9zM7 11l4-7c2 0 3 1.5 2.5 3.5L13 10h6a2 2 0 012 2.3l-1 6A2 2 0 0118 20H7"/></svg></div>
        <div class="pr-bub pr-b3"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V6l10-2v12"/><circle cx="6.5" cy="18" r="2.5"/><circle cx="16.5" cy="16" r="2.5"/></svg></div>
        <div class="pr-bub pr-b4"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="4"/><path d="M10 9.5l5 2.5-5 2.5z" fill="currentColor"/></svg></div>
        <div class="pr-bub pr-b5"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M9 7V5a1 1 0 011-1h4a1 1 0 011 1v2"/></svg></div>

        <!-- stat chips -->
        <div class="pr-chip pr-c1"><svg width="18" height="18" viewBox="0 0 24 24" fill="#e8416f"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8L12 21l8.8-8.6a5.5 5.5 0 000-7.8z"/></svg>8.6% <span class="up">↑</span></div>
        <div class="pr-chip pr-c2"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2d6bff" stroke-width="2.4" stroke-linecap="round"><path d="M4 20V12M10 20V6M16 20v-6M22 20H2"/></svg>+68%</div>

        <!-- laptop -->
        <div class="pr-laptop">
          <div class="pr-lscreen">
            <div class="pr-dash">
              <div class="pr-side"><i></i><i></i><i></i><i></i><i></i></div>
              <div class="pr-body">
                <div class="pr-prof"><div class="av">K</div><div><b>King Digital</b><small>@kingdigital</small></div></div>
                <div class="pr-kpis">
                  <div class="pr-kpi"><small>Total Reach</small><b>125K</b></div>
                  <div class="pr-kpi"><small>Engagement</small><b>8.6%</b></div>
                  <div class="pr-kpi"><small>New Followers</small><b>12.8K</b></div>
                  <div class="pr-kpi chart"><svg viewBox="0 0 80 26" preserveAspectRatio="none"><path d="M0 22 L14 18 L28 20 L42 11 L56 14 L70 5 L80 2" fill="none" stroke="#7b3fe4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                </div>
                <div class="pr-posts-t"><span>Recent Posts</span><span style="color:#8a93a6;font-weight:500">View All →</span></div>
                <div class="pr-posts"><div></div><div></div><div></div><div></div></div>
              </div>
            </div>
          </div>
          <div class="pr-lbase"></div>
        </div>

        <div class="pr-mug">King<br>Digital</div>
      </div>
    </div>

    <!-- STEPS -->
    <div class="pr-steps">
      <div class="pr-stepwrap pr-reveal">
        <div class="pr-step" style="--c:#2d6bff">
          <div class="pr-sh"><span class="pr-badge">01</span>
            <svg class="pr-sico" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z"/><path d="M8 11h8M8 14h5"/></svg></div>
          <h3>Discover &amp; Plan</h3>
          <p>We understand your goals, brand and audience. Then we create a custom strategy that fits your business.</p>
          <div class="pr-uline"></div>
        </div>
        <div class="pr-arrow"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div>
      </div>

      <div class="pr-stepwrap pr-reveal">
        <div class="pr-step" style="--c:#7b3fe4">
          <div class="pr-sh"><span class="pr-badge">02</span>
            <svg class="pr-sico" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M3 9h18M8 2v4M16 2v4M9 15l2 2 4-4"/></svg></div>
          <h3>Create &amp; Schedule</h3>
          <p>We design eye-catching content — from posts to reels — and schedule it for maximum reach and impact.</p>
          <div class="pr-uline"></div>
        </div>
        <div class="pr-arrow"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div>
      </div>

      <div class="pr-stepwrap pr-reveal">
        <div class="pr-step" style="--c:#18b36b">
          <div class="pr-sh"><span class="pr-badge">03</span>
            <svg class="pr-sico" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11v2a1 1 0 001 1h3l8 4V6L7 10H4a1 1 0 00-1 1z"/><path d="M18 9a4 4 0 010 6"/></svg></div>
          <h3>Launch &amp; Engage</h3>
          <p>We publish your content, manage your community and keep the conversation active.</p>
          <div class="pr-uline"></div>
        </div>
        <div class="pr-arrow"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div>
      </div>

      <div class="pr-stepwrap pr-reveal">
        <div class="pr-step" style="--c:#ff7a1a">
          <div class="pr-sh"><span class="pr-badge">04</span>
            <svg class="pr-sico" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20V10M10 20V4M16 20v-8M22 20H2"/></svg></div>
          <h3>Track &amp; Optimize</h3>
          <p>We monitor performance in real-time and make data-driven adjustments for better results.</p>
          <div class="pr-uline"></div>
        </div>
        <div class="pr-arrow"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div>
      </div>

      <div class="pr-stepwrap pr-reveal">
        <div class="pr-step" style="--c:#8b3fe4">
          <div class="pr-sh"><span class="pr-badge">05</span>
            <svg class="pr-sico" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.5"/></svg></div>
          <h3>Grow Together</h3>
          <p>More reach. More engagement. More leads. We keep scaling your brand for long-term success.</p>
          <div class="pr-uline"></div>
        </div>
      </div>
    </div>

    <!-- CTA BAR -->
    <div class="pr-cta pr-reveal">
      <div class="pr-cta-l">
        <div class="pr-cta-ico"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="13" r="8"/><circle cx="11" cy="13" r="4.5"/><circle cx="11" cy="13" r="1"/><path d="M11 13l9-9M16 4h4v4"/></svg></div>
        <div><b>Ready to grow your brand on social media?</b><span>Let's turn your goals into engagement, followers and real business results.</span></div>
      </div>
      <a href="#contact" class="pr-btn">Get Started
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </div>
</section>

<script>
(function(){
  var sec=document.querySelector('.ssm-process');
  if(!sec) return;
  function show(){ sec.classList.add('is-in'); }
  if('IntersectionObserver' in window){
    var io=new IntersectionObserver(function(e){
      if(e[0].isIntersecting){ show(); io.disconnect(); }
    },{threshold:.12});
    io.observe(sec);
  } else { show(); }
})();
</script>
