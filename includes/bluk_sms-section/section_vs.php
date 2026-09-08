<style>
 :root{
    --navy_123:#0b1f4d;
    --navy_123-deep:#081536;
    --orange_123:#ff6a2b;
    --blue_123:#2f6fed;
    --bg-soft_123:#f4f7ff;
    --text-dark_123:#101a33;
    --text-muted_123:#5b6785;
    --card-white_123:#ffffff;
    --radius_123:18px;
    --shadow_123:0 12px 30px rgba(11,31,77,0.08);
  }

    .tp-section{
    /* font-family: "Segoe UI", system-ui, -apple-system, "Helvetica Neue", Arial, sans-serif; */
    background:var(--bg-soft_123);
    padding:80px 20px;
    overflow:hidden;
    position:relative;
  }
 
  .tp-section::before{
    content:"";
    position:absolute;
    top:-120px; right:-120px;
    width:320px; height:320px;
    border-radius:50%;
    background:radial-gradient(circle,rgba(47,111,237,0.10),transparent 70%);
    pointer-events:none;
  }
 
  .tp-wrap{
    max-width:1180px;
    margin:0 auto;
    position:relative;
    z-index:1;
  }
 
  .tp-header{
    text-align:center;
    max-width:720px;
    margin:0 auto 56px auto;
  }
 
  .tp-header h2{
    font-size:44px;
    font-weight:800;
    color:var(--text-dark_123);
    line-height:1.3;
    margin:0 0 14px 0;
  }
 
  .tp-header h2 span{ color:var(--blue_123); }
 
  .tp-header p{
    color:var(--text-muted_123);
    font-size:1rem;
    line-height:1.7;
    margin:0;
  }
 
  /* ---- comparison grid ---- */
  .tp-grid{
    display:grid;
    grid-template-columns:1fr auto 1fr;
    gap:28px;
    align-items:stretch;
  }
 
  .tp-card{
    background:var(--card-white_123);
    border-radius:var(--radius_123);
    box-shadow:var(--shadow_123);
    padding:36px 32px;
    opacity:0;
    transform:translateY(28px);
    transition:opacity .7s ease, transform .7s ease;
  }
 
  .tp-card.tp-visible{
    opacity:1;
    transform:translateY(0);
  }
 
  .tp-card.tp-delay{ transition-delay:.15s; }
 
  .tp-icon{
    width:52px; height:52px;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-bottom:20px;
    font-size:22px;
  }
 
  .tp-card--transactional .tp-icon{
    background:rgba(255,106,43,0.12);
    color:var(--orange_123);
  }
 
  .tp-card--promotional .tp-icon{
    background:rgba(47,111,237,0.12);
    color:var(--blue_123);
  }
 
  .tp-card h3{
    font-size:1.28rem;
    font-weight:700;
    color:var(--text-dark_123);
    margin:0 0 10px 0;
    line-height:1.4;
  }
 
  .tp-card > p{
    color:var(--text-muted_123);
    font-size:.96rem;
    line-height:1.7;
    margin:0 0 24px 0;
  }
 
  .tp-feature{
    display:flex;
    gap:14px;
    padding:16px 0;
    border-top:1px solid rgba(11,31,77,0.07);
  }
 
  .tp-feature:first-of-type{ border-top:none; padding-top:0; }
 
  .tp-bullet{
    flex:0 0 auto;
    width:26px; height:26px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:13px;
    font-weight:700;
    color:#fff;
    margin-top:2px;
  }
 
  .tp-card--transactional .tp-bullet{ background:var(--orange_123); }
  .tp-card--promotional .tp-bullet{ background:var(--blue_123); }
 
  .tp-feature-text strong{
    display:block;
    color:var(--text-dark_123);
    font-size:.98rem;
    margin-bottom:4px;
  }
 
  .tp-feature-text span{
    color:var(--text-muted_123);
    font-size:.9rem;
    line-height:1.6;
    display:block;
  }
 
  /* ---- VS divider ---- */
  .tp-vs{
    align-self:center;
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:10px;
  }
 
  .tp-vs-line{
    width:1px;
    flex:1;
    background:linear-gradient(to bottom, transparent, rgba(11,31,77,0.15), transparent);
    min-height:60px;
  }
 
  .tp-vs-badge{
    width:56px; height:56px;
    border-radius:50%;
    background:linear-gradient(135deg, var(--navy_123), var(--navy_123-deep));
    color:#fff;
    font-weight:700;
    font-size:.85rem;
    letter-spacing:.5px;
    display:flex;
    align-items:center;
    justify-content:center;
    box-shadow:0 10px 24px rgba(11,31,77,0.3);
    flex:0 0 auto;
  }
 
  /* ---- Responsive ---- */
  @media (max-width:900px){
    .tp-grid{
      grid-template-columns:1fr;
    }
    .tp-vs{
      flex-direction:row;
      justify-content:center;
      padding:6px 0;
    }
    .tp-vs-line{
      width:auto;
      flex:1;
      height:1px;
      min-height:0;
      background:linear-gradient(to right, transparent, rgba(11,31,77,0.15), transparent);
    }
  }
 
  @media (max-width:520px){
    .tp-section{ padding:56px 16px; }
    .tp-card{ padding:28px 22px; }
    .tp-header{ margin-bottom:40px; }
  }
 
  @media (prefers-reduced-motion: reduce){
    .tp-card{ transition:none; opacity:1; transform:none; }
  }
</style>

<section class="tp-section">
  <div class="tp-wrap">
 
    <div class="tp-header">
      <h2>Transactional <span>vs</span> Promotional Bulk SMS</h2>
    </div>
 
    <div class="tp-grid">
 
      <!-- Transactional Card -->
      <div class="tp-card tp-card--transactional" data-reveal>
        <div class="tp-icon">⚡</div>
        <h3>Transactional Bulk SMS</h3>
        <p>Strictly operational communication, essential alerts aur non-promotional updates ke liye jo receiver turant paana chahta hai.</p>
 
        <div class="tp-feature">
          <div class="tp-bullet">1</div>
          <div class="tp-feature-text">
            <strong>24/7 Constant Delivery</strong>
            <span>Messages din ho ya raat, real-time mein deliver hote hain — important alerts kabhi late nahi hote.</span>
          </div>
        </div>
 
        <div class="tp-feature">
          <div class="tp-bullet">2</div>
          <div class="tp-feature-text">
            <strong>DND Restrictions se Free</strong>
            <span>Transaction confirmation ya login codes jaisi important info hone ki wajah se, TRAI rules in messages ko sabhi active connections tak pahunchne dete hain.</span>
          </div>
        </div>
 
        <div class="tp-feature">
          <div class="tp-bullet">3</div>
          <div class="tp-feature-text">
            <strong>High Priority Routing</strong>
            <span>Separate low-latency routes se bheje jaate hain taaki OTP jaise urgent notifications seconds mein receive ho.</span>
          </div>
        </div>
      </div>
 
      <!-- VS Divider -->
      <div class="tp-vs">
        <div class="tp-vs-line"></div>
        <div class="tp-vs-badge">VS</div>
        <div class="tp-vs-line"></div>
      </div>
 
      <!-- Promotional Card -->
      <div class="tp-card tp-card--promotional tp-delay" data-reveal>
        <div class="tp-icon">📈</div>
        <h3>Promotional Bulk SMS</h3>
        <p>Marketing outreach par fully focused, jisse brands targeted campaigns run karte hain, naye products launch karte hain aur sales revenue drive karte hain.</p>
 
        <div class="tp-feature">
          <div class="tp-bullet">1</div>
          <div class="tp-feature-text">
            <strong>Timely Delivery</strong>
            <span>Consumer interest aur TRAI regulations ke mutabik sirf 10 AM se 9 PM ke beech deliver hote hain.</span>
          </div>
        </div>
 
        <div class="tp-feature">
          <div class="tp-bullet">2</div>
          <div class="tp-feature-text">
            <strong>DND Compliance</strong>
            <span>National Do-Not-Disturb list ke against automatically filter ho jaate hain — brand ki taraf se complete compliance.</span>
          </div>
        </div>
 
        <div class="tp-feature">
          <div class="tp-bullet">3</div>
          <div class="tp-feature-text">
            <strong>Rich Link Integration</strong>
            <span>Short trackable links customers ko seedha landing page, web store ya app download page tak le jaate hain.</span>
          </div>
        </div>
      </div>
 
    </div>
  </div>
</section>
 
<!-- ============ 3. JS (scroll reveal effect) ============ -->
<script>
  (function () {
    var reveals = document.querySelectorAll('[data-reveal]');
 
    if (!('IntersectionObserver' in window)) {
      reveals.forEach(function (el) { el.classList.add('tp-visible'); });
      return;
    }
 
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('tp-visible');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.2,
      rootMargin: '0px 0px -60px 0px'
    });
 
    reveals.forEach(function (el) { observer.observe(el); });
  })();
</script>