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

  .ljisfiah6 {
    position: relative;
    overflow: hidden;
  }

  .ljisfiah6::after {
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

  .qind-title em {
    background: linear-gradient(to bottom, #0A5CFF 0%, #0A5CFF 70%);
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
    from {
      opacity: 0;
      transform: translateY(18px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
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
    from {
      opacity: 0;
      transform: translateY(24px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .qind-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(30, 34, 90, 0.09);
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
    .qind-grid {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 640px) {
    .qind-wrap {
      padding: 56px 16px;
    }

    .qind-title {
      font-size: 27px;
    }

    .qind-sub {
      font-size: 14px;
    }

    .qind-card {
      padding: 26px 22px 24px;
      gap: 16px;
    }

    .qind-emoji-box {
      width: 46px;
      height: 46px;
      font-size: 22px;
    }

    .qind-card-title {
      font-size: 18px;
    }
  }

  @media (max-width: 420px) {
    .qind-card {
      flex-direction: column;
    }
  }

  @media (prefers-reduced-motion: reduce) {

    .qind-title,
    .qind-sub,
    .qind-card {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }

    .qind-card:hover {
      transform: none;
    }
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

  .svg_952_wn-la9 {
    width: 35px;
    height: 35px;
    display: inline-block;
  }

  .svg_952_wn-la9 svg {
    width: 100%;
    height: 100%;
    fill: #0A5CFF;
  }

  .qind-card:hover .svg_952_wn-la9 svg {
    fill: #ff9d0a;

  }

  .qind-card:hover .qind-emoji-box {
    background-color: #ff8c0a4a;

  }
</style>

<section class="qind-wrap ljisfiah6">
  <div class="decor-hero-ring12"></div>
  <div class="decor-hero-orb o11"></div>
  <div class="decor-hero-orb o12"></div>
  <div class="decor-hero-orb o13"></div>


  <div class="qind-inner">

    <span style="text-align: center;width: 100%;display: block;margin:0 0 25px;">

      <div class="badge" style="margin: auto;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="#2b4e95">
          <path d="M160 96C124.7 96 96 124.7 96 160L96 224C96 259.3 124.7 288 160 288L480 288C515.3 288 544 259.3 544 224L544 160C544 124.7 515.3 96 480 96L160 96zM376 168C389.3 168 400 178.7 400 192C400 205.3 389.3 216 376 216C362.7 216 352 205.3 352 192C352 178.7 362.7 168 376 168zM432 192C432 178.7 442.7 168 456 168C469.3 168 480 178.7 480 192C480 205.3 469.3 216 456 216C442.7 216 432 205.3 432 192zM160 352C124.7 352 96 380.7 96 416L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 416C544 380.7 515.3 352 480 352L160 352zM376 424C389.3 424 400 434.7 400 448C400 461.3 389.3 472 376 472C362.7 472 352 461.3 352 448C352 434.7 362.7 424 376 424zM432 448C432 434.7 442.7 424 456 424C469.3 424 480 434.7 480 448C480 461.3 469.3 472 456 472C442.7 472 432 461.3 432 448z" />
        </svg>
        Platform Features
      </div>
    </span>

    <div class="qind-head">
      <h2 class="qind-title">Comprehensive <em>Feature Set </em></h2>
      <p class="qind-sub">Everything you need to run a successful communication business</p>
    </div>

    <div class="qind-grid" id="qindGrid">

      <div class="qind-card">
        <div class="qind-emoji-box">
          <span class="svg_952_wn-la9">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M576 304C576 436.5 461.4 544 320 544C282.9 544 247.7 536.6 215.9 523.3L97.5 574.1C88.1 578.1 77.3 575.8 70.4 568.3C63.5 560.8 62 549.8 66.8 540.8L115.6 448.6C83.2 408.3 64 358.3 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304z" />
            </svg>
          </span>
        </div>
        <div class="qind-card-body">
          <h3 class="qind-card-title">Unified Communication Management</h3>
          <!-- <p class="qind-card-desc">Order confirmation SMS, shipping updates, cart abandonment recovery, and promotional bulk SMS campaigns</p> -->
          <!-- <div class="qind-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
              <polyline points="17 6 23 6 23 12" />
            </svg>
            4x conversion rate
          </div> -->
          <ul class="qind-list">
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Single interface to manage SMS, RCS, WhatsApp, and Voice services
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Real-time notifications, delivery updates, and service alerts
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Centralized message queue management
            </li>
          </ul>
        </div>
      </div>

      <div class="qind-card">
        <div class="qind-emoji-box">
          <span class="svg_952_wn-la9">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
              <path d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64zM320 130.8L320 508.9C458 442.1 495.1 294.1 496 205.5L320 130.9L320 130.9z" />
            </svg>
          </span>
        </div>
        <div class="qind-card-body">
          <h3 class="qind-card-title">Security &amp; Infrastructure</h3>
          <!-- <p class="qind-card-desc">OTP SMS verification, transaction alerts, fraud detection, and account update notifications</p> -->
          <!-- <div class="qind-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
              <polyline points="17 6 23 6 23 12" />
            </svg>
            98.9% OTP delivery rate
          </div> -->
          <ul class="qind-list">
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Hosted on your own server for full data governance
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Role-based access control (RBAC)
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Secure and encrypted data handling throughout the platform
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Audit logs and compliance tracking
            </li>
          </ul>
        </div>
      </div>

      <div class="qind-card">
        <div class="qind-emoji-box">
          <span class="svg_952_wn-la9">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M96 96C113.7 96 128 110.3 128 128L128 464C128 472.8 135.2 480 144 480L544 480C561.7 480 576 494.3 576 512C576 529.7 561.7 544 544 544L144 544C99.8 544 64 508.2 64 464L64 128C64 110.3 78.3 96 96 96zM208 288C225.7 288 240 302.3 240 320L240 384C240 401.7 225.7 416 208 416C190.3 416 176 401.7 176 384L176 320C176 302.3 190.3 288 208 288zM352 224L352 384C352 401.7 337.7 416 320 416C302.3 416 288 401.7 288 384L288 224C288 206.3 302.3 192 320 192C337.7 192 352 206.3 352 224zM432 256C449.7 256 464 270.3 464 288L464 384C464 401.7 449.7 416 432 416C414.3 416 400 401.7 400 384L400 288C400 270.3 414.3 256 432 256zM576 160L576 384C576 401.7 561.7 416 544 416C526.3 416 512 401.7 512 384L512 160C512 142.3 526.3 128 544 128C561.7 128 576 142.3 576 160z"/></svg>
          </span>
        </div>
        <div class="qind-card-body">
          <h3 class="qind-card-title">Reports & Analytics</h3>
          <!-- <p class="qind-card-desc">Appointment reminder SMS, prescription alerts, lab result notifications, and health tips</p> -->
          <!-- <div class="qind-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
              <polyline points="17 6 23 6 23 12" />
            </svg>
            70% no-show reduction
          </div> -->
          <ul class="qind-list">
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Channel-wise performance statistics
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Detailed delivery insights
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Voice call logs and usage analytics
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Exportable reports (CSV, PDF, Excel)
            </li>
          </ul>
        </div>
      </div>

      <div class="qind-card">
        <div class="qind-emoji-box">
          <span class="svg_952_wn-la9">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M96 192C96 130.1 146.1 80 208 80C269.9 80 320 130.1 320 192C320 253.9 269.9 304 208 304C146.1 304 96 253.9 96 192zM32 528C32 430.8 110.8 352 208 352C305.2 352 384 430.8 384 528L384 534C384 557.2 365.2 576 342 576L74 576C50.8 576 32 557.2 32 534L32 528zM464 128C517 128 560 171 560 224C560 277 517 320 464 320C411 320 368 277 368 224C368 171 411 128 464 128zM464 368C543.5 368 608 432.5 608 512L608 534.4C608 557.4 589.4 576 566.4 576L421.6 576C428.2 563.5 432 549.2 432 534L432 528C432 476.5 414.6 429.1 385.5 391.3C408.1 376.6 435.1 368 464 368z"/></svg>
          </span>
        </div>
        <div class="qind-card-body">
          <h3 class="qind-card-title">Customer & Agent Management</h3>
          <!-- <p class="qind-card-desc">Admission update SMS, fee reminder alerts, exam notifications, and attendance tracking</p> -->
          <!-- <div class="qind-stat">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
              <polyline points="17 6 23 6 23 12" />
            </svg>
            90% SMS open rate
          </div> -->
          <ul class="qind-list">
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Unified customer profiles with complete communication history
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Ticketing workflow with agent assignment and role management
            </li>
            <li>
              <svg class="qind-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
              Multi-level hierarchy for resellers and sub-accounts
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

    var qindObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('qind-in-view');
          qindObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15
    });

    qindCards.forEach(function(card) {
      qindObserver.observe(card);
    });
  })();
</script>