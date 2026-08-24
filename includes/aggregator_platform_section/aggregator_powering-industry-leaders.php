<style>
    
  .qplead-wrap {
    /* background: #f1f1f1; */
    font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    padding: 80px 20px;
  }
 
  .qplead-inner {
    max-width: 1180px;
    margin: 0 auto;
  }
 
  /* ---------- Head ---------- */
 
  .qplead-head {
    text-align: center;
    margin-bottom: 54px;
  }
 
  .qplead-title {
    font-size: 44px;
    font-weight: 800;
    letter-spacing: -0.5px;
    color: #171a2b;
    margin: 0 0 18px;
    opacity: 0;
    transform: translateY(18px);
    animation: qpleadFadeUp 0.7s ease forwards;
  }
 
  .qplead-title-accent {
    background: linear-gradient(to bottom, #0A5CFF 0%, #0A5CFF 70%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
  }
 
  .qplead-rule {
    width: 0;
    height: 4px;
    border-radius: 4px;
    background: linear-gradient(90deg, #5b4bf5, #1fc8db);
    margin: 0 auto 26px;
    animation: qpleadDrawLine 0.8s ease forwards 0.5s;
  }
 
  @keyframes qpleadDrawLine {
    from { width: 0; }
    to   { width: 90px; }
  }
 
  .qplead-sub {
    font-size: 15.5px;
    line-height: 1.7;
    color: #5c6178;
    max-width: 640px;
    margin: 0 auto;
    opacity: 0;
    transform: translateY(18px);
    animation: qpleadFadeUp 0.7s ease forwards 0.15s;
  }
 
  @keyframes qpleadFadeUp {
    from { opacity: 0; transform: translateY(18px); }
    to   { opacity: 1; transform: translateY(0); }
  }
 
  /* ---------- Stats grid ---------- */
 
  .qplead-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
    margin-bottom: 26px;
  }
 
  .qplead-stat-card {
    background: #ffffff;
    border: 1px solid #ececf5;
    border-radius: 16px;
    padding: 32px 24px 28px;
    text-align: center;
    opacity: 0;
    transform: translateY(22px);
    transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
  }
 
  .qplead-stat-card.qplead-in-view {
    animation: qpleadCardIn 0.55s ease forwards;
  }
 
  @keyframes qpleadCardIn {
    from { opacity: 0; transform: translateY(22px); }
    to   { opacity: 1; transform: translateY(0); }
  }
 
  .qplead-stat-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 36px rgba(30,34,90,0.09);
    border-color: #dfe1f2;
  }
 
  .qplead-stat-icon {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    background: linear-gradient(to bottom, #0A5CFF 0%, #0A5CFF 70%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    margin: 0 auto 20px;
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
 
  .qplead-stat-card:hover .qplead-stat-icon {
    transform: rotate(-6deg) scale(1.08);
  }
 
  .qplead-stat-icon svg {
    width: 26px;
    height: 26px;
  }
 
  .qplead-stat-num {
    font-size: 30px;
    font-weight: 800;
    color: #171a2b;
    margin: 0 0 8px;
  }
 
  .qplead-stat-label {
    font-size: 13.5px;
    font-weight: 500;
    color: #6b6f85;
    margin: 0;
  }
 
  /* ---------- Client grid ---------- */
 
  .qplead-clients {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 20px;
    margin-top: 32px;
  }
 
  .qplead-client-card {
    background: #ffffff;
    border: 1px solid #ececf5;
    border-radius: 14px;
    padding: 24px 18px;
    text-align: center;
    opacity: 0;
    transform: translateY(20px);
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
  }
 
  .qplead-client-card.qplead-in-view {
    animation: qpleadCardIn 0.5s ease forwards;
  }
 
  .qplead-client-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 28px rgba(30,34,90,0.08);
    border-color: #dfe1f2;
  }
 
  .qplead-client-name {
    font-size: 15.5px;
    font-weight: 700;
    color: #171a2b;
    margin: 0 0 6px;
  }
 
  .qplead-client-cat {
    font-size: 12px;
    color: #8a8fa3;
    margin: 0;
  }
 
  /* ---------- Responsive ---------- */
 
  @media (max-width: 1024px) {
    .qplead-stats { grid-template-columns: repeat(2, 1fr); }
    .qplead-clients { grid-template-columns: repeat(3, 1fr); }
  }
 
  @media (max-width: 720px) {
    .qplead-wrap { padding: 56px 16px; }
    .qplead-title { font-size: 28px; }
    .qplead-sub { font-size: 14px; }
    .qplead-stats { grid-template-columns: repeat(2, 1fr); gap: 14px; }
    .qplead-stat-card { padding: 24px 16px 22px; }
    .qplead-stat-num { font-size: 24px; }
    .qplead-clients { grid-template-columns: repeat(2, 1fr); gap: 14px; }
    .qplead-client-card { padding: 20px 14px; }
  }
 
  @media (max-width: 420px) {
    .qplead-title { font-size: 23px; }
    .qplead-stat-icon { width: 48px; height: 48px; }
  }
 
  @media (prefers-reduced-motion: reduce) {
    .qplead-title, .qplead-rule, .qplead-sub,
    .qplead-stat-card, .qplead-client-card {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
      width: 90px !important;
    }
    .qplead-stat-card:hover, .qplead-client-card:hover {
      transform: none;
    }
  }


  .jcoasj88223n{
    position: relative;
    overflow: hidden;
  }

    .decor-hero-glow2 {
    position: absolute;
    top: -180px;
    right: -160px;
    width: 480px;
    height: 480px;
    border-radius: 50%;
    background: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
    opacity: .18;
    filter: blur(60px);
    z-index: 0;
    pointer-events: none;
    animation: hero-glow-drift 12s ease-in-out infinite;
  }
    .decor-hero-glow3 {
    position: absolute;
    bottom: -180px;
    left: -160px;
    width: 480px;
    height: 480px;
    border-radius: 50%;
    background: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
    opacity: .18;
    filter: blur(60px);
    z-index: 0;
    pointer-events: none;
    animation: hero-glow-drift 12s ease-in-out infinite;
  }


  @keyframes hero-glow-drift {

    0%,
    100% {
      transform: translate(0, 0) scale(1);
    }

    50% {
      transform: translate(30px, 20px) scale(1.08);
    }
  }


  .jcoasj88223n::after {
    content: "";
    position: absolute;
    top: -80px;
    left: -30px;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    border: 7.5px dashed rgba(7, 63, 167, 0.14);
    pointer-events: none;
    animation: decor-spin 16s linear infinite;
}
</style>


<section class="qplead-wrap jcoasj88223n">
  
  <div class="decor-hero-glow2"></div>
  <div class="decor-hero-glow3"></div>

  <div class="qplead-inner">
 
    <div class="qplead-head">
      <h2 class="qplead-title">Powering <span class="qplead-title-accent">Industry Leaders</span></h2>
      <div class="qplead-rule"></div>
      <p class="qplead-sub">Enterprises across industries choose Smart Technology for secure, scalable, and innovative communication solutions that drive real results.</p>
    </div>
 
    <div class="qplead-stats" id="qpleadStats">
      <div class="qplead-stat-card card1298he">
        <div class="qplead-stat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <p class="qplead-stat-num" data-target="500" data-suffix="+">0</p>
        <p class="qplead-stat-label" style="font-size:12px">Enterprise Partnerships</p>
      </div>
 
      <div class="qplead-stat-card card1298he">
        <div class="qplead-stat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
        </div>
        <p class="qplead-stat-num" data-target="10" data-suffix="B+">0</p>
        <p class="qplead-stat-label" style="font-size:12px">High-Volume Deliveries</p>
      </div>
 
      <div class="qplead-stat-card card1298he">
        <div class="qplead-stat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.5 13.5 17 22l-5-3-5 3 1.5-8.5"/></svg>
        </div>
        <p class="qplead-stat-num" data-target="99.99" data-decimal="2" data-suffix="%">0</p>
        <p class="qplead-stat-label" style="font-size:12px">Uptime SLA Guarantee</p>
      </div>
 
      <div class="qplead-stat-card card1298he">
        <div class="qplead-stat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
        </div>
        <p class="qplead-stat-num" data-target="195" data-suffix="+">0</p>
        <p class="qplead-stat-label" style="font-size:12px">Global Connectivity</p>
      </div>
    </div>
 
    <div class="qplead-clients" id="qpleadClients">
      <div class="qplead-client-card card1298he">
        <h3 class="qplead-client-name" style="font-size: 15px;color:var(--text-body);">Pizza Hut</h3>
        <p class="qplead-client-cat" style="font-size: 12px;">QSR &amp; Food Tech</p>
      </div>
      <div class="qplead-client-card card1298he">
        <h3 class="qplead-client-name" style="font-size: 15px;color:var(--text-body);">FirstCry</h3>
        <p class="qplead-client-cat" style="font-size: 12px;">E-commerce &amp; Retail</p>
      </div>
      <div class="qplead-client-card card1298he">
        <h3 class="qplead-client-name" style="font-size: 15px;color:var(--text-body);">Mamaearth</h3>
        <p class="qplead-client-cat" style="font-size: 12px;">D2C &amp; Personal Care</p>
      </div>
      <div class="qplead-client-card card1298he">
        <h3 class="qplead-client-name" style="font-size: 15px;color:var(--text-body);">AU Bank</h3>
        <p class="qplead-client-cat" style="font-size: 12px;">BFSI &amp; Digital Banking</p>
      </div>
      <div class="qplead-client-card card1298he">
        <h3 class="qplead-client-name" style="font-size: 15px;color:var(--text-body);">Guardian</h3>
        <p class="qplead-client-cat" style="font-size: 12px;">HealthTech &amp; Pharmacy</p>
      </div>
      <div class="qplead-client-card card1298he">
        <h3 class="qplead-client-name" style="font-size: 15px;color:var(--text-body);">Huphen</h3>
        <p class="qplead-client-cat" style="font-size: 12px;">SaaS &amp; Enterprise Tech</p>
      </div>
    </div>
 
  </div>
</section>
 
<script>
  (function qpleadInit() {
    var qpleadRevealEls = document.querySelectorAll('.qplead-stat-card, .qplead-client-card');
 
    var qpleadRevealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('qplead-in-view');
          qpleadRevealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
 
    qpleadRevealEls.forEach(function (el) {
      qpleadRevealObserver.observe(el);
    });
 
    // Animated counters for stats
    var qpleadCounted = false;
 
    function qpleadRunCounters() {
      if (qpleadCounted) return;
      qpleadCounted = true;
 
      document.querySelectorAll('.qplead-stat-num').forEach(function (el) {
        var target = parseFloat(el.getAttribute('data-target'));
        var decimals = parseInt(el.getAttribute('data-decimal') || '0', 10);
        var suffix = el.getAttribute('data-suffix') || '';
        var duration = 1400;
        var startTime = null;
 
        function step(timestamp) {
          if (!startTime) startTime = timestamp;
          var progress = Math.min((timestamp - startTime) / duration, 1);
          var eased = 1 - Math.pow(1 - progress, 3);
          var current = (target * eased).toFixed(decimals);
          el.textContent = current + suffix;
          if (progress < 1) {
            requestAnimationFrame(step);
          } else {
            el.textContent = target.toFixed(decimals) + suffix;
          }
        }
        requestAnimationFrame(step);
      });
    }
 
    var qpleadStatsEl = document.getElementById('qpleadStats');
    var qpleadCounterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          qpleadRunCounters();
          qpleadCounterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });
 
    qpleadCounterObserver.observe(qpleadStatsEl);
  })();
</script>
 