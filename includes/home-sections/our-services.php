<style>
  /* ===========================
   SERVICES HEADING SCROLL ANIMATION
=========================== */

  .tag,
  .sh,
  .sub {
    opacity: 0;
    transition: all .9s cubic-bezier(.22, 1, .36, 1);
    will-change: transform, opacity;
  }

  /* Left */
  .tag {
    transform: translateX(-120px);
  }

  /* Right */
  .sh,
  .sub {
    transform: translateX(120px);
  }

  .services.show-animation .tag {
    opacity: 1;
    transform: translateX(0);
  }

  .services.show-animation .sh {
    opacity: 1;
    transform: translateX(0);
    transition-delay: .2s;
  }

  .services.show-animation .sub {
    opacity: 1;
    transform: translateX(0);
    transition-delay: .4s;
  }





  /* ════ SERVICES ════ */
  .services {
    background: var(--bg)
  }

  .svc-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
    gap: 18px;
    margin-top: 52px
  }

  .svc-card {
    background: #fff;
    border: 1.5px solid var(--bdr);
    border-radius: var(--rlg);
    padding: 28px;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    transition: var(--trans)
  }

  .svc-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .25s ease
  }

  .svc-card:hover {
    border-color: rgba(27, 61, 123, .2);
    box-shadow: var(--shlg);
    transform: translateY(-4px)
  }

  .svc-card:hover::after {
    transition: 1s ease;
    transform: scaleX(1)
  }

  .svc-ico {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 21px;
    margin-bottom: 20px
  }

  .svc-name {
    font-size: 17px;
    font-weight: 700;
    margin-bottom: 9px
  }

  .svc-desc {
    font-size: 14px;
    color: var(--txt2);
    line-height: 1.75;
    margin-bottom: 18px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    /* Kitni lines dikhani hain */
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .svc-tags {
    display: flex;
    gap: 6px;
    flex-wrap: wrap
  }

  .stag {
    font-size: 11px;
    font-weight: 600;
    color: var(--txt3);
    background: var(--bg);
    padding: 3px 10px;
    border-radius: 20px;
    border: 1px solid var(--bdr)
  }

  .svc-link {
    position: absolute;
    top: 24px;
    right: 24px;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    border: 1.5px solid var(--bdr);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    color: var(--txt3);
    transition: var(--trans)
  }

  .svc-card:hover .svc-link {
    background: var(--blue);
    border-color: var(--blue);
    color: #fff
  }

  /* ════ RESPONSIVE ════ */
  @media(max-width:960px) {
    .hero-grid {
      grid-template-columns: 1fr
    }

    .hero-card {
      display: none
    }

    .why-wrap {
      grid-template-columns: 1fr
    }

    .faq-wrap {
      grid-template-columns: 1fr
    }

    .faq-cta-box {
      position: static
    }

    .contact-wrap {
      grid-template-columns: 1fr
    }

    .footer-grid {
      grid-template-columns: 1fr 1fr
    }

    .wp-panel {
      position: static
    }

    .process-steps::before {
      display: none
    }
  }

  @media(max-width:640px) {

    .nav-links,
    .nav-right .btn-outline {
      display: none
    }

    .hamburger {
      display: flex
    }

    .topbar .tb-right {
      display: none
    }

    .section {
      padding: 60px 0
    }

    .form-row {
      grid-template-columns: 1fr
    }

    .footer-grid {
      grid-template-columns: 1fr
    }

    .hc-svcs {
      grid-template-columns: repeat(3, 1fr)
    }

    .rating-bar {
      flex-wrap: wrap
    }

    .rb-div {
      display: none
    }

    .recog-row {
      gap: 20px
    }
  }

  /* green cursor-follow glow — spreads outward from wherever the cursor enters the card */
  .icp-cursor-glow {
    position: absolute;
    left: 0;
    top: 0;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    background: radial-gradient(circle, rgba(34, 197, 94, 0.2) 0%, rgba(45, 190, 150, .22) 30%, rgba(34, 197, 94, .08) 55%, rgba(34, 197, 94, 0) 72%);
    opacity: 0;
    pointer-events: none;
    transition: opacity .35s ease;
    z-index: 0;
  }

  .services {
    position: relative;
    overflow: hidden;
  }

  .services .container {
    position: relative;
    z-index: 1;
  }

  /* top-left: rotating dashed ring */
  .decor-tl {
    position: absolute;
    top: -110px;
    left: -110px;
    width: 220px;
    height: 220px;
    border: 2px dashed var(--blue);
    border-radius: 50%;
    opacity: .3;
    animation: decor-spin 18s linear infinite;
    pointer-events: none;
    z-index: 0;
  }

  @keyframes decor-spin {
    from {
      transform: rotate(0deg);
    }

    to {
      transform: rotate(360deg);
    }
  }

  /* top-right: fading dot-grid */
  .decor-tr {
    position: absolute;
    top: -20px;
    right: -20px;
    width: 220px;
    height: 200px;
    background-image: radial-gradient(circle, var(--blue) 1.6px, transparent 1.6px);
    background-size: 22px 22px;
    -webkit-mask-image: radial-gradient(ellipse at top right, black 0%, black 25%, transparent 72%);
    mask-image: radial-gradient(ellipse at top right, black 0%, black 25%, transparent 72%);
    opacity: .35;
    pointer-events: none;
    z-index: 0;
    animation: grid-shift 10s ease-in-out infinite;
  }

  @keyframes grid-shift {

    0%,
    100% {
      background-position: 0 0;
    }

    50% {
      background-position: -8px 8px;
    }
  }

  /* bottom-left: floating sparkle dots */
  .decor-bl {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 200px;
    height: 220px;
    pointer-events: none;
    z-index: 0;
  }

  .decor-dot {
    position: absolute;
    border-radius: 50%;
    background: var(--gold);
  }

  .decor-dot.d1 {
    width: 12px;
    height: 12px;
    bottom: 30px;
    left: 26px;
    opacity: .4;
    animation: dot-bob-1 5.5s ease-in-out infinite;
  }

  .decor-dot.d2 {
    width: 8px;
    height: 8px;
    bottom: 90px;
    left: 70px;
    opacity: .32;
    background: var(--blue-md);
    animation: dot-bob-2 6.5s ease-in-out infinite;
  }

  .decor-dot.d3 {
    width: 16px;
    height: 16px;
    bottom: 50px;
    left: 120px;
    opacity: .26;
    animation: dot-bob-3 7.5s ease-in-out infinite;
  }

  .decor-dot.d4 {
    width: 9px;
    height: 9px;
    bottom: 140px;
    left: 40px;
    opacity: .3;
    background: var(--blue-md);
    animation: dot-bob-1 6s ease-in-out infinite .4s;
  }

  @keyframes dot-bob-1 {

    0%,
    100% {
      transform: translate(0, 0);
    }

    50% {
      transform: translate(10px, -16px);
    }
  }

  @keyframes dot-bob-2 {

    0%,
    100% {
      transform: translate(0, 0);
    }

    50% {
      transform: translate(-12px, 10px);
    }
  }

  @keyframes dot-bob-3 {

    0%,
    100% {
      transform: translate(0, 0);
    }

    50% {
      transform: translate(8px, 14px);
    }
  }

  /* bottom-right: soft ambient glow */
  .decor-br {
    position: absolute;
    bottom: -180px;
    right: -150px;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(249, 115, 22, 0.16) 0%, rgba(27, 61, 123, 0.10) 45%, rgba(255, 255, 255, 0) 72%);
    filter: blur(8px);
    pointer-events: none;
    z-index: 0;
    animation: glow-pulse 9s ease-in-out infinite;
  }

  @keyframes glow-pulse {

    0%,
    100% {
      transform: scale(1);
      opacity: 1;
    }

    50% {
      transform: scale(1.08);
      opacity: .85;
    }
  }
</style>


<!-- ════ SERVICES ════ -->
<section class="services section" id="services">

  <div class="decor-tl"></div>
  <div class="decor-tr"></div>
  <div class="decor-bl">
    <div class="decor-dot d1"></div>
    <div class="decor-dot d2"></div>
    <div class="decor-dot d3"></div>
    <div class="decor-dot d4"></div>
  </div>
  <div class="decor-br"></div>
  <div class="container">
    <div class="reveal">
      <div class="tag"><span class="dot"></span> Our Services</div>
      <h2 class="sh">150+ services. One trusted partner.</h2>
      <p class="sub">From the first message to a complete digital ecosystem — King Digital delivers everything you need to grow your business online.</p>
    </div>
    <div class="svc-grid">
      <div class="svc-card reveal">
        <a href="/website-designing-company-india.html" class="svc-link"><i class="fas fa-arrow-right"></i></a>
        <div class="svc-ico" style="background:#EEF2FF;color:#4F46E5"><i class="fas fa-globe"></i></div>
        <div class="svc-name">Website Design & Development</div>
        <div class="svc-desc">Mobile-first, SEO-ready websites designed to convert visitors into leads. E-commerce, portals, landing pages, and custom web apps.</div>
        <div class="svc-tags"><span class="stag">Static Sites</span><span class="stag">E-Commerce</span><span class="stag">Portals</span><span class="stag">Mobile Apps</span></div>
      </div>
      <div class="svc-card reveal">
        <a href="https://www.staticking.com/bulk-sms.shtml" class="svc-link"><i class="fas fa-arrow-right"></i></a>
        <div class="svc-ico" style="background:#FFF0E6;color:#F97316"><i class="fas fa-comment-sms"></i></div>
        <div class="svc-name">Bulk SMS Services</div>
        <div class="svc-desc">DLT-compliant promotional, transactional, OTP, and election SMS. Reach lakhs of customers in seconds with 99%+ delivery rates.</div>
        <div class="svc-tags"><span class="stag">Promotional</span><span class="stag">Transactional</span><span class="stag">OTP</span><span class="stag">Election</span></div>
      </div>
      <div class="svc-card reveal">
        <a href="/wabasignup.html" class="svc-link"><i class="fas fa-arrow-right"></i></a>
        <div class="svc-ico" style="background:#ECFDF5;color:#059669"><i class="fab fa-whatsapp"></i></div>
        <div class="svc-name">WhatsApp Business API</div>
        <div class="svc-desc">Official Meta-approved WhatsApp Business API. Bulk campaigns, chatbots, automated workflows, and real-time analytics.</div>
        <div class="svc-tags"><span class="stag">WABA Signup</span><span class="stag">Chatbot</span><span class="stag">Automation</span></div>
      </div>
      <div class="svc-card reveal">
        <a href="https://www.ivrking.in/" class="svc-link"><i class="fas fa-arrow-right"></i></a>
        <div class="svc-ico" style="background:#FEF3C7;color:#D97706"><i class="fas fa-phone-volume"></i></div>
        <div class="svc-name">IVR, Voice & Telecom</div>
        <div class="svc-desc">Hosted IVR, toll-free numbers, missed call alerts, OBD voice broadcasting, virtual numbers, and cloud telephony for businesses.</div>
        <div class="svc-tags"><span class="stag">IVR</span><span class="stag">Toll Free</span><span class="stag">Miss Call</span><span class="stag">Shortcode</span></div>
      </div>
      <div class="svc-card reveal">
        <a href="/seo-service-company-in-delhi.html" class="svc-link"><i class="fas fa-arrow-right"></i></a>
        <div class="svc-ico" style="background:#EFF6FF;color:#2563EB"><i class="fas fa-magnifying-glass-chart"></i></div>
        <div class="svc-name">SEO & Digital Marketing</div>
        <div class="svc-desc">Rank on page 1 of Google. Full SEO, PPC, Google Ads, social media marketing (SMO), and ORM services for sustained online growth.</div>
        <div class="svc-tags"><span class="stag">SEO</span><span class="stag">PPC / SEM</span><span class="stag">SMO</span><span class="stag">ORM</span></div>
      </div>
      <div class="svc-card reveal">
        <a href="/email-marketing-company-india.html" class="svc-link"><i class="fas fa-arrow-right"></i></a>
        <div class="svc-ico" style="background:#F5F3FF;color:#7C3AED"><i class="fas fa-envelope-open-text"></i></div>
        <div class="svc-name">Bulk Email Marketing</div>
        <div class="svc-desc">High-deliverability email campaigns with beautiful templates, segmentation, automation drips, and real-time open/click analytics.</div>
        <div class="svc-tags"><span class="stag">Campaigns</span><span class="stag">Automation</span><span class="stag">Analytics</span></div>
      </div>
      <div class="svc-card reveal">
        <a href="https://www.kingcloud.in/" class="svc-link"><i class="fas fa-arrow-right"></i></a>
        <div class="svc-ico" style="background:#F0FDF4;color:#16A34A"><i class="fas fa-server"></i></div>
        <div class="svc-name">Hosting & Cloud Servers</div>
        <div class="svc-desc">Shared, reseller, VPS, dedicated, and cloud servers with 99.9% uptime SLA. Free domain registration and SSL included.</div>
        <div class="svc-tags"><span class="stag">Shared</span><span class="stag">VPS</span><span class="stag">Dedicated</span><span class="stag">Cloud</span></div>
      </div>
      <div class="svc-card reveal">
        <a href="https://kingdigitalstudio.in/" class="svc-link"><i class="fas fa-arrow-right"></i></a>
        <div class="svc-ico" style="background:#FFF1F2;color:#E11D48"><i class="fas fa-video"></i></div>
        <div class="svc-name">Video & Audio Production</div>
        <div class="svc-desc">Corporate videos, explainer animations, professional voice-overs in Hindi & English, podcast production, and audio branding.</div>
        <div class="svc-tags"><span class="stag">Video</span><span class="stag">Voice Over</span><span class="stag">Podcast</span><span class="stag">Audio</span></div>
      </div>
    </div>
  </div>
</section>


<script>
  /* ===========================
   SERVICES HEADING SCROLL EFFECT
=========================== */

  const serviceSection = document.querySelector(".services");

  const serviceObserver = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

      if (entry.isIntersecting) {
        entry.target.classList.add("show-animation");
      }

    });

  }, {
    threshold: 0.35
  });

  serviceObserver.observe(serviceSection);


  (function() {
    "use strict";

    var icpCards = document.querySelectorAll('.svc-card');
    var icpGlowRadius = 230; // px — soft green glow that spreads out from the cursor's corner
    var icpMaxTilt = 12; // deg — max corner tilt

    icpCards.forEach(function(card) {

      // create the green cursor-follow glow layer once per card
      var icpGlow = document.createElement('div');
      icpGlow.className = 'icp-cursor-glow';
      icpGlow.style.width = (icpGlowRadius * 0.5) + 'px';
      icpGlow.style.height = (icpGlowRadius * 0.5) + 'px';
      card.appendChild(icpGlow);

      card.addEventListener('mousemove', function(e) {
        var rect = card.getBoundingClientRect();
        var x = e.clientX - rect.left;
        var y = e.clientY - rect.top;

        // 3D tilt — rotate toward whichever corner/edge the cursor is near
        var px = (x / rect.width) - 0.5; // -0.5 .. 0.5
        var py = (y / rect.height) - 0.5; // -0.5 .. 0.5
        var rotateY = px * icpMaxTilt * 2;
        var rotateX = py * -icpMaxTilt * 2;
        card.style.transform =
          'perspective(800px) rotateX(' + rotateX.toFixed(2) + 'deg) rotateY(' + rotateY.toFixed(2) + 'deg) translateZ(-6px) translateY(-4px)';

        // green glow following the cursor, clipped to a 50px radius
        icpGlow.style.left = x + 'px';
        icpGlow.style.top = y + 'px';
        icpGlow.style.opacity = '1';
      });

      card.addEventListener('mouseleave', function() {
        card.style.transform = '';
        icpGlow.style.opacity = '0';
      });
    });

  })();
</script>