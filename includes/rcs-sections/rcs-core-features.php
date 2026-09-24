<!-- ============ Core Features of the King Digital RCS Messaging Gateway ============ -->
<style>
  /* ========================================
   RCS CORE FEATURES
  ======================================== */

  .rcs-features {
    position: relative;
    width: 100%;
    background: #ffffff;
    padding: 100px 0;
    overflow: visible;
  }

  .rcs-features__container {
    width: min(1180px, calc(100% - 80px));
    margin: 0 auto;

    display: grid;
    grid-template-columns: minmax(300px, 0.8fr) minmax(500px, 1.2fr);

    gap: 80px;

    align-items: start;
  }


  /* ========================================
   LEFT INTRO
   (No CSS position:sticky here — handled by JS.
   The slot reserves the grid cell's width/position;
   the intro is swapped to fixed/absolute by script.)
  ======================================== */

  .rcs-features__intro-slot {
    position: relative;
    align-self: start;
    max-width: 440px;
  }

  .rcs-features__intro {
    max-width: 440px;
    z-index: 2;
  }


  /* Label */

  .rcs-features__label {
    display: inline-flex;
    align-items: center;
    gap: 9px;

    padding: 8px 14px;

    border: 1px solid #dfe5f2;
    border-radius: 999px;

    background: #ffffff;

    color: #2855c7;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 0.08em;
    text-transform: uppercase;

    box-shadow: 0 5px 20px rgba(30, 50, 100, 0.06);

    margin-bottom: 24px;
  }

  .rcs-features__label span {
    width: 7px;
    height: 7px;

    border-radius: 50%;

    background: #ff6432;

    box-shadow: 0 0 0 4px rgba(255, 100, 50, 0.10);
  }


  /* Heading */

  .rcs-features__intro h2 {
    margin: 0 0 24px;

    font-size: clamp(36px, 4vw, 56px);

    line-height: 1.08;

    letter-spacing: -0.035em;

    font-weight: 800;

    color: #102448;
  }

  .rcs-features__intro h2 span {
    display: block;

    background: linear-gradient(135deg,
        #315fcf,
        #5449bd);

    -webkit-background-clip: text;
    background-clip: text;

    -webkit-text-fill-color: transparent;
  }


  /* Description */

  .rcs-features__intro>p {
    max-width: 430px;

    margin: 0 0 28px;

    color: #61708d;

    font-size: 15px;

    line-height: 1.75;
  }


  /* Tags */

  .rcs-features__tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }

  .rcs-features__tags span {
    padding: 9px 17px;

    border: 1px solid #d8dfed;

    border-radius: 999px;

    background: #f7f9fd;

    color: #24385f;

    font-size: 13px;
    font-weight: 500;

    transition:
      transform 250ms ease,
      background 250ms ease,
      border-color 250ms ease;
  }

  .rcs-features__tags span:hover {
    transform: translateY(-2px);

    background: #ffffff;

    border-color: #9fb2df;
  }


  /* ========================================
   RIGHT FEATURE LIST
  ======================================== */

  .rcs-features__list {
    position: relative;

    width: 100%;

    border: 1px solid #dbe2ed;

    border-radius: 28px;

    overflow: hidden;

    background: #ffffff;

    box-shadow:
      0 25px 60px rgba(24, 44, 82, 0.10);
  }


  /* ========================================
   FEATURE CARD
  ======================================== */

  .rcs-features__card {
    position: relative;

    display: grid;

    grid-template-columns: 54px minmax(0, 1fr);

    gap: 20px;

    padding: 30px 32px;

    background: #ffffff;

    border-bottom: 1px solid #e1e6ef;

    transition:
      background 250ms ease,
      transform 250ms ease;
  }

  .rcs-features__card:last-child {
    border-bottom: none;
  }


  /* Icon */

  .rcs-features__card-icon {
    width: 54px;
    height: 54px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    border-radius: 16px;

    background: #eef1ff;

    color: #5551c7;
  }

  .rcs-features__card-icon i,
  .rcs-features__card-icon svg {
    width: 23px;
    height: 23px;
  }


  /* Content */

  .rcs-features__card-content h3 {
    margin: 0 0 9px;

    color: #102448;

    font-size: 18px;

    line-height: 1.35;

    font-weight: 700;
  }

  .rcs-features__card-content p {
    margin: 0;

    color: #61708d;

    font-size: 14px;

    line-height: 1.7;
  }


  /* Tags inside cards */

  .rcs-features__card-tags {
    display: flex;

    flex-wrap: wrap;

    gap: 8px;

    margin-top: 18px;
  }

  .rcs-features__card-tags span {
    padding: 7px 13px;

    border: 1px solid #d8dfed;

    border-radius: 999px;

    background: #f8faff;

    color: #1e335d;

    font-size: 12px;

    font-weight: 500;
  }


  /* Hover */

  .rcs-features__card:hover {
    background: #fbfcff;
  }

  .rcs-features__card:hover .rcs-features__card-icon {
    transform: translateY(-2px);

    box-shadow:
      0 8px 20px rgba(79, 70, 200, 0.12);
  }


  /* ========================================
   TABLET
  ======================================== */

  @media (max-width: 950px) {

    .rcs-features {
      padding: 80px 0;
    }

    .rcs-features__container {
      width: min(100% - 40px, 760px);

      grid-template-columns: 1fr;

      gap: 50px;
    }

    .rcs-features__intro-slot {
      max-width: 680px;
    }

    .rcs-features__intro {
      max-width: 680px;
    }

    .rcs-features__intro h2 {
      font-size: clamp(34px, 6vw, 46px);
    }

    .rcs-features__intro>p {
      max-width: 620px;
    }
  }


  /* ========================================
   MOBILE
  ======================================== */

  @media (max-width: 600px) {

    .rcs-features {
      padding: 65px 0;
    }

    .rcs-features__container {
      width: calc(100% - 28px);

      gap: 35px;
    }

    .rcs-features__intro h2 {
      font-size: clamp(32px, 9vw, 42px);
    }

    .rcs-features__intro>p {
      font-size: 14px;
    }

    .rcs-features__list {
      border-radius: 20px;
    }

    .rcs-features__card {
      grid-template-columns: 42px minmax(0, 1fr);

      gap: 14px;

      padding: 22px 18px;
    }

    .rcs-features__card-icon {
      width: 42px;
      height: 42px;

      border-radius: 12px;
    }

    .rcs-features__card-content h3 {
      font-size: 16px;
    }

    .rcs-features__card-content p {
      font-size: 13px;
      line-height: 1.6;
    }
  }


  /* ========================================
   REDUCED MOTION
  ======================================== */

  @media (prefers-reduced-motion: reduce) {

    .rcs-features__card,
    .rcs-features__tags span,
    .rcs-features__card-icon {
      transition: none;
    }
  }
</style>

<section class="rcs-features">

  <div class="rcs-features__container" id="rcsFeaturesWrapper">

    <!-- LEFT: STICKY (via JS, mirrors the WhatsApp FAQ card technique) -->
    <div class="rcs-features__intro-slot" id="rcsFeaturesIntroSlot">
      <div class="rcs-features__intro" id="rcsFeaturesIntro">

        <span class="rcs-features__label">
          <span></span>
          CORE FEATURES
        </span>

        <h2>
          Core Features of
          the King Digital
          <span>RCS Messaging Gateway</span>
        </h2>

        <p>
          Our RCS platform provides communication capabilities
          to marketing, sales, and operation departments to help
          them boost their conversion metrics:
        </p>

        <div class="rcs-features__tags">
          <span>Marketing</span>
          <span>Sales</span>
          <span>Operations</span>
        </div>

      </div>
    </div>


    <!-- RIGHT: SCROLLING -->
    <div class="rcs-features__list" id="rcsFeaturesList">

      <article class="rcs-features__card">
        <div class="rcs-features__card-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="9" cy="8" r="3.5" />
            <path d="M2.5 20c.6-3.6 3.2-5.5 6.5-5.5" />
            <path d="m14.5 17 2.2 2.2 4.3-4.6" />
          </svg>
        </div>
        <div class="rcs-features__card-content">
          <h3>Authentication of Business Inboxes</h3>
          <p>Create the trust of the clients through the authenticated sender profile with the name of your company, logo, banner, an authenticity certificate, contact information of a company.</p>
        </div>
      </article>

      <article class="rcs-features__card">
        <div class="rcs-features__card-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
            <path d="m12 3 9 5-9 5-9-5z" />
            <path d="m3 12.5 9 5 9-5" />
            <path d="m3 17 9 5 9-5" />
          </svg>
        </div>
        <div class="rcs-features__card-content">
          <h3>Powerful Multimedia and Carousel View</h3>
          <p>Present the items visually with the high-resolution images, information notes, prize tags, and active buttons.</p>
        </div>
      </article>

      <article class="rcs-features__card">
        <div class="rcs-features__card-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9 8 4 12l5 4" />
            <path d="M4 12h10a6 6 0 0 1 6 6v1" />
          </svg>
        </div>
        <div class="rcs-features__card-content">
          <h3>Ready-Made Response Templates</h3>
          <p>Make the communication with clients easier with the aid of one click reply buttons in the text messages.</p>
        </div>
      </article>

      <article class="rcs-features__card">
        <div class="rcs-features__card-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
            <path d="M13 3 5 13.5h6L10 21l8-10.5h-6z" />
          </svg>
        </div>
        <div class="rcs-features__card-content">
          <h3>Ready-Made Actions</h3>
          <p>Make a client take action using one click; to open the webpage, make a phone call, get the location on the map, or add an event in the calendar.</p>
        </div>
      </article>

      <article class="rcs-features__card">
        <div class="rcs-features__card-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
            <path d="m8 8-4 4 4 4" />
            <path d="m16 8 4 4-4 4" />
            <path d="m13.5 5-3 14" />
          </svg>
        </div>
        <div class="rcs-features__card-content">
          <h3>Straightforward API and Webhook Connection</h3>
          <p>Integrate all RCS features with your backend systems, such as different CRMs like Salesforce, HubSpot, Zoho; e-commerce stores like Shopify, Woo-commerce; billing systems via standard REST API.</p>
          <div class="rcs-features__card-tags" aria-label="Supported integrations">
            <span>Salesforce</span>
            <span>HubSpot</span>
            <span>Zoho</span>
            <span>Shopify</span>
            <span>WooCommerce</span>
            <span>REST API</span>
          </div>
        </div>
      </article>

      <article class="rcs-features__card">
        <div class="rcs-features__card-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 12a8 8 0 0 1 14-5.3L20 9" />
            <path d="M20 4v5h-5" />
            <path d="M20 12a8 8 0 0 1-14 5.3L4 15" />
            <path d="M4 20v-5h5" />
          </svg>
        </div>
        <div class="rcs-features__card-content">
          <h3>Automatic Failover message system</h3>
          <p>Ensure the message is delivered to all subscribers by using the automatic fallback feature that sends the Regular SMS or WhatsApp if RCS is not available.</p>
          <div class="rcs-features__card-tags" aria-label="Fallback channels">
            <span>SMS</span>
            <span>WhatsApp</span>
          </div>
        </div>
      </article>

    </div>

  </div>

</section>

<script>
  (function() {
    var wrapper = document.getElementById('rcsFeaturesWrapper');
    var slot = document.getElementById('rcsFeaturesIntroSlot');
    var intro = document.getElementById('rcsFeaturesIntro');

    if (!wrapper || !slot || !intro) {
      console.warn(
        '[rcs-features sticky] Script ran, but could not find the elements it needs.', {
          wrapper: wrapper,
          slot: slot,
          intro: intro
        },
        'This means either the <script> tag was stripped when this section was pasted into the page, ' +
        'or the ids rcsFeaturesWrapper / rcsFeaturesIntroSlot / rcsFeaturesIntro already exist ' +
        'elsewhere on the page (duplicate ids — check if this section appears more than once).'
      );
      return;
    }

    console.log('[rcs-features sticky] Initialized OK — elements found, sticky is active.');

    var OFFSET = 110;
    var mq = window.matchMedia('(max-width: 950px)');
    var ticking = false;

    function reset() {
      intro.style.position = '';
      intro.style.top = '';
      intro.style.left = '';
      intro.style.width = '';
    }

    function update() {
      ticking = false;

      if (mq.matches) {
        reset();
        return;
      }

      var wrapperRect = wrapper.getBoundingClientRect();
      var slotRect = slot.getBoundingClientRect();
      var introHeight = intro.offsetHeight;
      var slotWidth = slot.offsetWidth;

      if (wrapperRect.top > OFFSET) {
        // Section hasn't reached the sticky point yet.
        reset();
      } else if (wrapperRect.bottom < OFFSET + introHeight) {
        // Bottom of the section has scrolled past — release the
        // intro so it moves down with the page instead of staying pinned.
        intro.style.position = 'absolute';
        intro.style.left = '0';
        intro.style.width = slotWidth + 'px';
        intro.style.top = (wrapper.offsetHeight - introHeight) + 'px';
      } else {
        // Pin to the viewport while the feature cards scroll beside it.
        intro.style.position = 'fixed';
        intro.style.top = OFFSET + 'px';
        intro.style.left = slotRect.left + 'px';
        intro.style.width = slotWidth + 'px';
      }
    }

    function onScroll() {
      if (!ticking) {
        ticking = true;
        window.requestAnimationFrame(update);
      }
    }

    wrapper.style.position = 'relative';
    slot.style.position = 'relative';

    window.addEventListener('scroll', onScroll, {
      passive: true
    });
    window.addEventListener('resize', onScroll);
    if (mq.addEventListener) {
      mq.addEventListener('change', onScroll);
    } else if (mq.addListener) {
      mq.addListener(onScroll);
    }

    update();
  })();
</script>
<!-- ============ /Core Features of the King Digital RCS Messaging Gateway ============ -->