<style>


  .qind-wrap {
    background: #f1f1f1;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    padding: 80px 20px;
  }
 
  .qind-inner {
    max-width: 1180px;
    margin: 0 auto;
  }
 
  /* ---------- Head ---------- */
 
  .qind-head {
    text-align: center;
    margin-bottom: 50px;
  }

  .ljisfiah6{
    position: relative;
    overflow: hidden;
  }

  .ljisfiah6::after{
    content: "";
    position: absolute;
    top: -80px;
    right: -30px;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    border: 7.5px dashed rgba(7, 63, 167, 0.14);
    pointer-events: none;
    animation: decor-spin 16s linear infinite;

  }
  
  .qind-title {
    font-size: 44px;
    font-weight: 800;
    letter-spacing: -0.5px;
    color: #171a2b;
    margin: 0 0 18px;
    opacity: 0;
    transform: translateY(18px);
    animation: qindFadeUp 0.7s ease forwards;
  }

  .qind-title em{
    background:  linear-gradient(to bottom, #0A5CFF 0%, #0A5CFF 70%);
     -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }
 
  .qind-sub {
    font-size: 15.5px;
    line-height: 1.7;
    color: #5c6178;
    max-width: 620px;
    margin: 0 auto;
    opacity: 0;
    transform: translateY(18px);
    animation: qindFadeUp 0.7s ease forwards 0.12s;
  }
 
  @keyframes qindFadeUp {
    from { opacity: 0; transform: translateY(18px); }
    to   { opacity: 1; transform: translateY(0); }
  }
 
  /* ---------- Grid ---------- */
 
  .qind-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
 
  .qind-card {
    background: #ffffff;
    border: 1px solid #ececf5;
    border-radius: 18px;
    padding: 32px 32px 30px;
    display: flex;
    gap: 20px;
    opacity: 0;
    transform: translateY(24px);
    transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
  }
 
  .qind-card.qind-in-view {
    animation: qindCardIn 0.55s ease forwards;
  }
 
  @keyframes qindCardIn {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }
 
  .qind-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(30,34,90,0.09);
    border-color: #dfe1f2;
  }
 
  .qind-emoji-box {
    flex-shrink: 0;
    width: 52px;
    height: 52px;
    border-radius: 14px;
    background: #f4f5fb;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }
 
  .qind-card:hover .qind-emoji-box {
    transform: rotate(-8deg) scale(1.1);
  }
 
  .qind-card-body {
    flex: 1;
    min-width: 0;
  }
 
  .qind-card-title {
    font-size: 20px;
    font-weight: 700;
    color: #171a2b;
    margin: 4px 0 12px;
  }
 
  .qind-card-desc {
    font-size: 14px;
    line-height: 1.65;
    color: #6b6f85;
    margin: 0 0 16px;
  }
 
  .qind-stat {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13.5px;
    font-weight: 700;
    color: #5b4bf5;
    margin: 0 0 18px;
  }
 
  .qind-stat svg {
    width: 15px;
    height: 15px;
    flex-shrink: 0;
  }
 
  .qind-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
 
  .qind-list li {
    display: flex;
    align-items: center;
    gap: 9px;
    font-size: 13.8px;
    color: #3d4152;
  }
 
  .qind-check {
    flex-shrink: 0;
    width: 17px;
    height: 17px;
    color: #17b06e;
  }
 
  /* ---------- Responsive ---------- */
 
  @media (max-width: 860px) {
    .qind-grid { grid-template-columns: 1fr; }
  }
 
  @media (max-width: 640px) {
    .qind-wrap { padding: 56px 16px; }
    .qind-title { font-size: 27px; }
    .qind-sub { font-size: 14px; }
    .qind-card { padding: 26px 22px 24px; gap: 16px; }
    .qind-emoji-box { width: 46px; height: 46px; font-size: 22px; }
    .qind-card-title { font-size: 18px; }
  }
 
  @media (max-width: 420px) {
    .qind-card { flex-direction: column; }
  }
 
  @media (prefers-reduced-motion: reduce) {
    .qind-title, .qind-sub, .qind-card {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }
    .qind-card:hover { transform: none; }
  }

  
  .decor-hero-ring12 {
    position: absolute;
    bottom: -90px;
    left: -90px;
    width: 300px;
    height: 300px;
    border: 2px dashed var(--ivr-primary-light, #818CF8);
    border-radius: 50%;
    opacity: .3;
    z-index: 0;
    pointer-events: none;
    animation: hero-ring-spin 20s linear infinite;
  }

  .decor-hero-ring12::before {
    content: '';
    position: absolute;
    inset: 34px;
    border: 2px dashed #22D3EE;
    border-radius: 50%;
    opacity: .6;
  }


  @keyframes hero-ring-spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }


  
  .decor-hero-orb.o11 {
    width: 14px;
    height: 14px;
    top: 40px;
    right: 70px;
    background: #8B5CF6;
    opacity: .5;
    animation: hero-orb-1 5s ease-in-out infinite;
    position: absolute;
    border-radius: 50%;
  }

  .decor-hero-orb.o12 {
    position: absolute;
    width: 9px;
    height: 9px;
    bottom: 100px;
    right: 20px;
    background: #22D3EE;
    opacity: .5;
    animation: hero-orb-2 6s ease-in-out infinite .3s;
    border-radius: 50%;
  }

  .decor-hero-orb.o13 {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 200px;
    right: -10px;
    background: #2563EB;
    opacity: .3;
    animation: hero-orb-1 7s ease-in-out infinite .6s;
    border-radius: 50%;
  }


  @keyframes hero-orb-1 {

    0%,
    100% {
      transform: translate(0, 0);
    }

    50% {
      transform: translate(-10px, -14px);
    }
  }

  @keyframes hero-orb-2 {

    0%,
    100% {
      transform: translate(0, 0);
    }

    50% {
      transform: translate(-8px, 10px);
    }
  }

 
</style>

<section class="qind-wrap ljisfiah6">
  <div class="decor-hero-ring12"></div>
  <div class="decor-hero-orb o11"></div>
  <div class="decor-hero-orb o12"></div>
  <div class="decor-hero-orb o13"></div>


  <div class="qind-inner">
 
    <div class="qind-head">
      <h2 class="qind-title">Bulk SMS Industry <em>Solutions</em></h2>
      <p class="qind-sub">Trusted bulk SMS gateway for e-commerce, banking, healthcare, and education — fast, reliable, DLT compliant</p>
    </div>
 
    <div class="qind-grid" id="qindGrid">
 
      <div class="qind-card">
        <div class="qind-emoji-box">🛒</div>
        <div class="qind-card-body">
          <h3 class="qind-card-title">E-commerce &amp; Retail</h3>
          <p class="qind-card-desc">Order confirmation SMS, shipping updates, cart abandonment recovery, and promotional bulk SMS campaigns</p>
          <div class="qind-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
            4x conversion rate
          </div>
          <ul class="qind-list">
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Cart abandonment SMS recovery
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Flash sale bulk SMS alerts
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Delivery notification SMS
            </li>
          </ul>
        </div>
      </div>
 
      <div class="qind-card">
        <div class="qind-emoji-box">🏦</div>
        <div class="qind-card-body">
          <h3 class="qind-card-title">Banking &amp; Finance</h3>
          <p class="qind-card-desc">OTP SMS verification, transaction alerts, fraud detection, and account update notifications</p>
          <div class="qind-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
            98.9% OTP delivery rate
          </div>
          <ul class="qind-list">
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Fraud prevention SMS alerts
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Balance &amp; limit SMS notifications
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Payment confirmation SMS
            </li>
          </ul>
        </div>
      </div>
 
      <div class="qind-card">
        <div class="qind-emoji-box">⚕️</div>
        <div class="qind-card-body">
          <h3 class="qind-card-title">Healthcare</h3>
          <p class="qind-card-desc">Appointment reminder SMS, prescription alerts, lab result notifications, and health tips</p>
          <div class="qind-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
            70% no-show reduction
          </div>
          <ul class="qind-list">
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Appointment reminder SMS
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Medicine &amp; prescription alerts
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Health tip campaigns
            </li>
          </ul>
        </div>
      </div>
 
      <div class="qind-card">
        <div class="qind-emoji-box">🎓</div>
        <div class="qind-card-body">
          <h3 class="qind-card-title">Education</h3>
          <p class="qind-card-desc">Admission update SMS, fee reminder alerts, exam notifications, and attendance tracking</p>
          <div class="qind-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
            90% SMS open rate
          </div>
          <ul class="qind-list">
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Attendance alert SMS
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Result notification SMS
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="9 12 11 14 15 10"/></svg>
              Event &amp; holiday updates
            </li>
          </ul>
        </div>
      </div>
 
    </div>
 
  </div>
</section>
 
<script>
  (function qindInit() {
    var qindCards = document.querySelectorAll('.qind-card');
 
    var qindObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('qind-in-view');
          qindObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
 
    qindCards.forEach(function (card) {
      qindObserver.observe(card);
    });
  })();
</script>
 
