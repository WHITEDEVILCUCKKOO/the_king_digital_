<style>
  #kdCounterSection {
    --kd-primary: #b61f29;
    --kd-primary-dark: #991923;
    --kd-navy: #1f2d3d;
    --kd-text: black;
    --kd-border: #e7ebf0;
    --kd-white: #ffffff;

    position: relative;
    width: 100%;
    padding: 55px 25px 42px;
    overflow: hidden;
    background: #7b7b7b1a;
    /* background:
    radial-gradient(
      circle at 15% 50%,
      rgba(182, 31, 41, 0.045) 0%,
      transparent 24%
    ),
    radial-gradient(
      circle at 85% 20%,
      rgba(56, 103, 180, 0.045) 0%,
      transparent 23%
    ),
    linear-gradient(
      135deg,
      #f7f8fa 0%,
      #ffffff 50%,
      #f8f9fb 100%
    ); */
    font-family: 'Segoe UI', Roboto, Helvetica Neue, Arial, sans-serif;
  }


  #kdCounterSection .kd-counter-container {
    width: 100%;
    max-width: 1320px;
    margin: 0 auto;
  }

  #kdCounterSection .kd-counter-heading {
    max-width: 720px;
    margin: 0 auto 35px;
    text-align: center;
  }

  #kdCounterSection .kd-counter-eyebrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 7px 14px;
    margin-bottom: 13px;
    border: 1px solid rgba(182, 31, 41, 0.13);
    border-radius: 50px;
    color: var(--kd-primary);
    background: rgba(182, 31, 41, 0.055);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
  }

  #kdCounterSection .kd-counter-heading h2 {
    margin: 0;
    color: black;
    font-size: clamp(28px, 3vw, 44px);
    line-height: 1.2;
    font-weight: 800;
    letter-spacing: -1.2px;
  }

  #kdCounterSection .kd-counter-heading h2 em {
    color: #b61f29;
    font-style: normal;
  }

  #kdCounterSection .kd-counter-heading p {
    max-width: 620px;
    margin: 13px auto 0;
    color: var(--kd-text);
    font-size: 15px;
    line-height: 1.7;
  }

  #kdCounterSection .kd-counter-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 13px;
    width: 100%;
  }


  #kdCounterSection .kd-counter-card {
    position: relative;
    min-height: 220px;
    padding: 24px 16px 20px;
    overflow: hidden;
    border: 1px solid var(--kd-border);
    border-radius: 15px;
    background: rgb(255 255 255 / 45%);
    text-align: center;
    box-shadow: 0 8px 25px rgba(31, 45, 61, 0.035);
    transition:
      transform 0.28s ease,
      box-shadow 0.28s ease,
      border-color 0.28s ease;
  }

  #kdCounterSection .kd-counter-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 50%;
    width: 45px;
    height: 3px;
    border-radius: 0 0 5px 5px;
    background: var(--kd-primary);
    transform: translateX(-50%);
    opacity: 0;
    transition: 0.28s ease;
  }

  #kdCounterSection .kd-counter-card:hover {
    border-color: rgba(182, 31, 41, 0.18);
    box-shadow: 0 15px 35px rgba(31, 45, 61, 0.08);
    transform: translateY(-5px);
  }

  #kdCounterSection .kd-counter-card:hover::before {
    opacity: 1;
  }


  #kdCounterSection .kd-counter-icon {
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
    border-radius: 14px;
    color: #ffffff;
    font-size: 24px;
    font-weight: 700;
    box-shadow: 0 10px 20px rgba(31, 45, 61, 0.1);
  }

  #kdCounterSection .kd-icon-blue {
    background: linear-gradient(135deg, #4f8fe6, #2f62b8);
  }

  #kdCounterSection .kd-icon-red {
    background: linear-gradient(135deg, #d94b55, #a81924);
  }

  #kdCounterSection .kd-icon-green {
    background: linear-gradient(135deg, #38ad89, #168264);
  }

  #kdCounterSection .kd-icon-purple {
    background: linear-gradient(135deg, #9a6ae1, #6d42bc);
  }

  #kdCounterSection .kd-icon-orange {
    background: linear-gradient(135deg, #f3a835, #dc7d09);
  }

  #kdCounterSection .kd-counter-number {
    display: flex;
    align-items: baseline;
    justify-content: center;
    gap: 2px;
    margin-bottom: 8px;
    color: #000000;
  }

  #kdCounterSection .kd-count {
    font-size: clamp(32px, 2.8vw, 42px);
    line-height: 1;
    font-weight: 800;
    letter-spacing: -1.5px;
  }

  #kdCounterSection .kd-counter-number small {
    color: var(--kd-primary);
    font-size: 20px;
    font-weight: 800;
  }


  #kdCounterSection .kd-counter-card h3 {
    margin: 0 0 7px;
    color: #344054;
    font-size: 15px;
    line-height: 1.35;
    font-weight: 700;
  }

  #kdCounterSection .kd-counter-card p {
    margin: 0;
    color: #8a94a3;
    font-size: 11px;
    line-height: 1.55;
  }

  #kdCounterSection .kd-counter-bottom-points {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 28px;
    margin-top: 28px;
  }

  #kdCounterSection .kd-bottom-point {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    color: #536171;
    font-size: 12px;
    font-weight: 600;
  }

  #kdCounterSection .kd-bottom-check {
    width: 21px;
    height: 21px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 21px;
    border-radius: 50%;
    color: #ffffff;
    background: var(--kd-primary);
    font-size: 11px;
    font-weight: 800;
  }

  @media (max-width: 1100px) {

    #kdCounterSection .kd-counter-grid {
      grid-template-columns: repeat(3, 1fr);
    }

  }

  @media (max-width: 767px) {

    #kdCounterSection {
      padding: 42px 15px 35px;
    }

    #kdCounterSection .kd-counter-heading {
      margin-bottom: 27px;
    }

    #kdCounterSection .kd-counter-heading h2 {
      font-size: 29px;
      letter-spacing: -0.8px;
    }

    #kdCounterSection .kd-counter-heading p {
      font-size: 13px;
      line-height: 1.65;
    }

    #kdCounterSection .kd-counter-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
    }

    #kdCounterSection .kd-counter-card {
      min-height: 190px;
      padding: 19px 10px 16px;
      border-radius: 13px;
    }

    #kdCounterSection .kd-counter-icon {
      width: 45px;
      height: 45px;
      margin-bottom: 13px;
      border-radius: 12px;
      font-size: 20px;
    }

    #kdCounterSection .kd-count {
      font-size: 32px;
    }

    #kdCounterSection .kd-counter-number small {
      font-size: 16px;
    }

    #kdCounterSection .kd-counter-card h3 {
      font-size: 13px;
    }

    #kdCounterSection .kd-counter-card p {
      font-size: 10px;
    }

    /* Last card center */
    #kdCounterSection .kd-counter-card:last-child {
      grid-column: 1 / -1;
      width: calc(50% - 5px);
      justify-self: center;
    }


    /* ===============================================
      MOBILE BOTTOM POINTS
      FIRST ROW = 2 POINTS
      SECOND ROW = 1 POINT CENTER
    =============================================== */

    #kdCounterSection .kd-counter-bottom-points {
      max-width: 380px;
      margin: 22px auto 0;

      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));

      align-items: center;
      justify-items: center;

      gap: 13px 8px;
    }

    #kdCounterSection .kd-bottom-point {
      width: 100%;
      min-width: 0;
      gap: 6px;
      text-align: center;
      font-size: 10px;
      white-space: nowrap;
    }

    /* Third point center in second row */
    #kdCounterSection .kd-bottom-point:nth-child(3) {
      grid-column: 1 / -1;
      width: auto;
      min-width: 175px;
      margin: 0 auto;
    }

    #kdCounterSection .kd-bottom-check {
      width: 18px;
      height: 18px;
      flex: 0 0 18px;
      font-size: 9px;
    }

  }


  /* =========================================================
        SMALL MOBILE
        ========================================================= */

  @media (max-width: 480px) {

    #kdCounterSection {
      padding: 38px 10px 30px;
    }

    #kdCounterSection .kd-counter-eyebrow {
      padding: 6px 11px;
      margin-bottom: 11px;
      font-size: 9px;
    }

    #kdCounterSection .kd-counter-heading h2 {
      font-size: 26px;
    }

    #kdCounterSection .kd-counter-heading p {
      padding: 0 5px;
      font-size: 12px;
    }

    #kdCounterSection .kd-counter-grid {
      gap: 8px;
    }

    #kdCounterSection .kd-counter-card {
      min-height: 175px;
      padding: 16px 7px 13px;
    }

    #kdCounterSection .kd-counter-icon {
      width: 41px;
      height: 41px;
      margin-bottom: 11px;
      font-size: 18px;
    }

    #kdCounterSection .kd-count {
      font-size: 29px;
    }

    #kdCounterSection .kd-counter-number small {
      font-size: 14px;
    }

    #kdCounterSection .kd-counter-card h3 {
      margin-bottom: 5px;
      font-size: 12px;
    }

    #kdCounterSection .kd-counter-card p {
      font-size: 9px;
      line-height: 1.4;
    }

    #kdCounterSection .kd-bottom-point {
      font-size: 9px;
    }

    #kdCounterSection .kd-bottom-point:nth-child(3) {
      min-width: 155px;
    }

  }


  /* =========================================================
      COUNTER ANIMATION
      ========================================================= */

  @media (prefers-reduced-motion: reduce) {

    #kdCounterSection .kd-counter-card {
      transition: none;
    }

  }



  /* green cursor-follow glow — spreads outward from wherever the cursor enters the card */
  .icp-cursor-glow {
    position: absolute;
    left: 0;
    top: 0;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    background: radial-gradient(circle, rgba(197, 34, 34, 0.2) 0%, rgba(190, 45, 45, 0.22) 30%, rgba(197, 72, 34, 0.08) 55%, rgba(197, 59, 34, 0) 72%);
    opacity: 0;
    pointer-events: none;
    transition: opacity .35s ease;
    z-index: 0;
  }

  .devils_655 {
    position: relative;
    overflow: hidden;
  }

  .devils_655::after {
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


  @keyframes decor-spin {

    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }


  
  .decor-hero-orb.o21 {
    width: 14px;
    height: 14px;
    top: 40px;
    left: 70px;
    background: #8B5CF6;
    opacity: .5;
    animation: hero-orb-1 5s ease-in-out infinite;
    position: absolute;
    border-radius: 50%;
  }

  .decor-hero-orb.o22 {
    position: absolute;
    width: 9px;
    height: 9px;
    bottom: 100px;
    left: 70px;
    background: #22D3EE;
    opacity: .5;
    animation: hero-orb-2 6s ease-in-out infinite .3s;
    border-radius: 50%;
  }

  .decor-hero-orb.o23 {
    position: absolute;
    width: 20px;
    height: 20px;
    top: 200px;
    left: 53px;
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

  
  .decor-hero-ring {
    position: absolute;
    top: -90px;
    left: -90px;
    width: 300px;
    height: 300px;
    border: 2px dashed var(--ivr-primary-light, #818CF8);
    border-radius: 50%;
    opacity: .3;
    z-index: 1;
    pointer-events: none;
    animation: hero-ring-spin 20s linear infinite;
  }

  .decor-hero-ring::before {
    content: '';
    position: absolute;
    inset: 34px;
    border: 2px dashed #22D3EE;
    border-radius: 50%;
    opacity: .6;
  }

</style>


<section class="kd-counter-section devils_655" id="kdCounterSection">
  <div class="decor-hero-orb o21"></div>
  <div class="decor-hero-orb o22"></div>
  <div class="decor-hero-orb o23"></div>
  <div class="decor-hero-ring"></div>

  <div class="kd-counter-container">

    <!-- SECTION HEADING -->
    <div class="kd-counter-heading">
      <span class="kd-counter-eyebrow">Why Businesses Choose Us</span>

      <h2>Powerful Results That <em>Speak for Themselves</em></h2>

      <p>
        Delivering reliable, fast and effective SMS communication solutions
        designed to help businesses connect with their audience.
      </p>
    </div>


    <!-- COUNTER CARDS -->
    <div class="kd-counter-grid">

      <!-- CARD 1 -->
      <div class="kd-counter-card hover_card_ani">
        <div class="kd-counter-icon kd-icon-blue">
          <span>✉</span>
        </div>

        <div class="kd-counter-number">
          <span class="kd-count" data-target="1">0</span><small>B+</small>
        </div>

        <h3>Messages Sent</h3>

        <p>Reliable communication at scale</p>
      </div>


      <!-- CARD 2 -->
      <div class="kd-counter-card hover_card_ani">
        <div class="kd-counter-icon kd-icon-red">
          <span>✓</span>
        </div>

        <div class="kd-counter-number">
          <span class="kd-count" data-target="99">0</span><small>%</small>
        </div>

        <h3>Uptime Rate</h3>

        <p>Consistent and dependable service</p>
      </div>


      <!-- CARD 3 -->
      <div class="kd-counter-card hover_card_ani">
        <div class="kd-counter-icon kd-icon-green">
          <span>↗</span>
        </div>

        <div class="kd-counter-number">
          <span class="kd-count" data-target="98">0</span><small>%</small>
        </div>

        <h3>Delivery Success</h3>

        <p>Fast and reliable SMS delivery</p>
      </div>


      <!-- CARD 4 -->
      <div class="kd-counter-card hover_card_ani">
        <div class="kd-counter-icon kd-icon-purple">
          <span>★</span>
        </div>

        <div class="kd-counter-number">
          <span class="kd-count" data-target="99">0</span><small>%</small>
        </div>

        <h3>Client Satisfaction</h3>

        <p>Trusted by growing businesses</p>
      </div>


      <!-- CARD 5 -->
      <div class="kd-counter-card hover_card_ani">
        <div class="kd-counter-icon kd-icon-orange">
          <span>⚡</span>
        </div>

        <div class="kd-counter-number">
          <span class="kd-count" data-target="24">0</span><small>/7</small>
        </div>

        <h3>Service Support</h3>

        <p>Support whenever you need it</p>
      </div>

    </div>


    <!-- BOTTOM POINTS -->
    <div class="kd-counter-bottom-points">

      <div class="kd-bottom-point">
        <span class="kd-bottom-check">✓</span>
        <span>Secure SMS Platform</span>
      </div>

      <div class="kd-bottom-point">
        <span class="kd-bottom-check">✓</span>
        <span>Fast Campaign Delivery</span>
      </div>

      <div class="kd-bottom-point">
        <span class="kd-bottom-check">✓</span>
        <span>Easy Campaign Management</span>
      </div>

    </div>

  </div>

</section>



<script>
  (function() {

    var counterSection = document.getElementById('kdCounterSection');

    if (!counterSection) return;

    var counters = counterSection.querySelectorAll('.kd-count');
    var hasStarted = false;


    function animateCounter(counter) {

      var target = parseInt(counter.getAttribute('data-target'), 10);
      var duration = 1800;
      var startTime = null;

      function updateCounter(currentTime) {

        if (!startTime) {
          startTime = currentTime;
        }

        var progress = Math.min(
          (currentTime - startTime) / duration,
          1
        );

        var easeOut = 1 - Math.pow(1 - progress, 3);

        var currentValue = Math.floor(
          easeOut * target
        );

        counter.textContent = currentValue;

        if (progress < 1) {
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target;
        }

      }

      requestAnimationFrame(updateCounter);

    }


    function startCounters() {

      if (hasStarted) return;

      hasStarted = true;

      counters.forEach(function(counter) {
        animateCounter(counter);
      });

    }


    if ('IntersectionObserver' in window) {

      var observer = new IntersectionObserver(
        function(entries) {

          entries.forEach(function(entry) {

            if (entry.isIntersecting) {
              startCounters();
              observer.unobserve(entry.target);
            }

          });

        }, {
          threshold: 0.25
        }
      );

      observer.observe(counterSection);

    } else {

      startCounters();

    }

  })();





  // card animtion box 
  (function() {
    "use strict";

    var icpCards = document.querySelectorAll('.hover_card_ani');
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