<!-- ============ How Does RCS Messaging Work? ============ -->
<style>
  .kd-rcs-how {
    --navy: #18283f;
    --blue: #315fc6;
    --indigo: #5b4bb7;
    --orange: #f0642f;
    --muted: #647087;
    --line: rgba(43, 67, 105, .12);
    --surface: #ffffff;

    position: relative;
    padding: 40px 0;
    background: #ffffff;
    color: var(--navy);
    font-family: inherit;
  }

  .kd-rcs-how *,
  .kd-rcs-how *::before,
  .kd-rcs-how *::after {
    box-sizing: border-box;
  }

  .kd-rcs-how__wrap {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 24px;
  }

  /* ---------- Header ---------- */
  .kd-rcs-how__head {
    max-width: 780px;
    margin: 0 auto clamp(28px, 4vw, 40px);
    text-align: center;
  }

  .kd-rcs-how__eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 7px 14px;
    margin-bottom: 20px;
    border: 1px solid var(--line);
    border-radius: 999px;
    background: var(--surface);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: var(--blue);
    box-shadow: 0 6px 18px rgba(43, 67, 105, .06);
  }

  .kd-rcs-how__eyebrow::before {
    content: "";
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--orange);
  }

  .kd-rcs-how__title {
    margin: 0 0 20px;
    font-size: clamp(30px, 4.2vw, 50px);
    line-height: 1.12;
    font-weight: 800;
    letter-spacing: -.02em;
    color: var(--navy);
  }

  .kd-rcs-how__title span {
    background: linear-gradient(90deg, var(--blue), var(--indigo));
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    color: var(--blue);
    /* fallback */
  }

  .kd-rcs-how__intro {
    margin: 0 auto;
    max-width: 62ch;
    font-size: 16.5px;
    line-height: 1.75;
    color: var(--muted);
  }

  /* ---------- Steps ---------- */
  .kd-rcs-how__steps {
    position: relative;
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
  }

  .kd-rcs-how__steps::before {
    content: "";
    position: absolute;
    top: 44px;
    left: calc(10% + 4px);
    right: calc(10% + 4px);
    height: 2px;
    background-image: linear-gradient(90deg, var(--line) 0, var(--line) 8px, transparent 8px, transparent 16px);
    background-size: 16px 2px;
    z-index: 0;
  }

  .kd-rcs-how__step {
    --accent: var(--blue);
    --accent-soft: rgba(49, 95, 198, .1);

    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    gap: 14px;
    padding: clamp(22px, 2.4vw, 28px) 20px;
    border: 1px solid var(--line);
    border-radius: 20px;
    background: var(--surface);
    box-shadow: 0 20px 44px -30px rgba(43, 67, 105, .5);
    transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
  }

  .kd-rcs-how__step:hover {
    transform: translateY(-4px);
    border-color: rgba(49, 95, 198, .3);
    box-shadow: 0 26px 50px -28px rgba(43, 67, 105, .55);
  }

  .kd-rcs-how__step--indigo {
    --accent: var(--indigo);
    --accent-soft: rgba(91, 75, 183, .12);
  }

  .kd-rcs-how__step--orange {
    --accent: var(--orange);
    --accent-soft: rgba(240, 100, 47, .12);
  }

  .kd-rcs-how__top {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .kd-rcs-how__num {
    display: grid;
    place-items: center;
    width: 30px;
    height: 30px;
    border-radius: 9px;
    background: linear-gradient(135deg, var(--accent), var(--indigo));
    color: #ffffff;
    font-size: 12.5px;
    font-weight: 800;
  }

  .kd-rcs-how__icon {
    display: grid;
    place-items: center;
    width: 40px;
    height: 40px;
    border-radius: 12px;
    background: var(--accent-soft);
    color: var(--accent);
  }

  .kd-rcs-how__step-title {
    margin: 0;
    font-size: 17px;
    line-height: 1.35;
    font-weight: 700;
    letter-spacing: -.01em;
    color: var(--navy);
  }

  .kd-rcs-how__step-text {
    margin: 0;
    font-size: 14.5px;
    line-height: 1.7;
    color: var(--muted);
  }

  /* ---------- Foot note ---------- */
  .kd-rcs-how__foot {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-top: clamp(32px, 4vw, 48px);
    font-size: 14px;
    color: var(--muted);
  }

  .kd-rcs-how__foot svg {
    width: 16px;
    height: 16px;
    color: var(--blue);
    flex-shrink: 0;
  }

  /* ---------- Responsive ---------- */
  @media (max-width: 860px) {
    .kd-rcs-how__steps {
      grid-template-columns: repeat(2, 1fr);
    }

    .kd-rcs-how__steps::before {
      display: none;
    }
  }

  @media (max-width: 640px) {
    .kd-rcs-how__wrap {
      padding: 0 18px;
    }

    .kd-rcs-how__steps {
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="kd-rcs-how" id="rcs-how-it-works" aria-labelledby="kd-rcs-how-title">
  <div class="kd-rcs-how__wrap">

    <header class="kd-rcs-how__head">
      <span class="kd-rcs-how__eyebrow">How RCS Works</span>
      <h2 class="kd-rcs-how__title" id="kd-rcs-how-title">
        How Does <span>RCS Messaging</span> Work?
      </h2>
      <p class="kd-rcs-how__intro">
        The complete routing process for RCS messages consists of technology that helps facilitate the rapid delivery of multimedia content.
      </p>
    </header>

    <div class="kd-rcs-how__steps">

      <div class="kd-rcs-how__step">
        <div class="kd-rcs-how__top">
          <span class="kd-rcs-how__num">01</span>
          <span class="kd-rcs-how__icon" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M13 2 3 14h7l-1 8 10-12h-7l1-8z" />
            </svg>
          </span>
        </div>
        <h3 class="kd-rcs-how__step-title">Campaign Initiation</h3>
        <p class="kd-rcs-how__step-text">Your marketing campaign may be activated using our online dashboard or via an automated notification sent from your system using REST APIs.</p>
      </div>

      <div class="kd-rcs-how__step">
        <div class="kd-rcs-how__top">
          <span class="kd-rcs-how__num">02</span>
          <span class="kd-rcs-how__icon" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="9" />
              <path d="m9 12 2 2 4-4" />
            </svg>
          </span>
        </div>
        <h3 class="kd-rcs-how__step-title">Capability Validation</h3>
        <p class="kd-rcs-how__step-text">Kings Digital gateway checks whether the recipient's phone number is in the carrier databases to confirm the RCS capability of the network and the device.</p>
      </div>

      <div class="kd-rcs-how__step kd-rcs-how__step--indigo">
        <div class="kd-rcs-how__top">
          <span class="kd-rcs-how__num">03</span>
          <span class="kd-rcs-how__icon" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="5" width="18" height="14" rx="2" />
              <path d="M3 9h18M8 14h3M8 17h6" />
            </svg>
          </span>
        </div>
        <h3 class="kd-rcs-how__step-title">Rich Media Delivery</h3>
        <p class="kd-rcs-how__step-text">If the recipient's device supports the RCS format, the entire rich content consisting of logos, multimedia, and action buttons will be sent to the recipient's SMS app.</p>
      </div>

      <div class="kd-rcs-how__step kd-rcs-how__step--orange">
        <div class="kd-rcs-how__top">
          <span class="kd-rcs-how__num">04</span>
          <span class="kd-rcs-how__icon" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 12a9 9 0 0 1 15-6.7L21 8" />
              <path d="M21 12a9 9 0 0 1-15 6.7L3 16" />
              <path d="M21 3v5h-5M3 21v-5h5" />
            </svg>
          </span>
        </div>
        <h3 class="kd-rcs-how__step-title">Automatic Backup</h3>
        <p class="kd-rcs-how__step-text">When the device or the currently used network does not support RCS, the system will automatically resend the fallback message using either SMS or MMS to ensure the campaign reaches its intended audience.</p>
      </div>

      <div class="kd-rcs-how__step">
        <div class="kd-rcs-how__top">
          <span class="kd-rcs-how__num">05</span>
          <span class="kd-rcs-how__icon" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 3v18h18" />
              <path d="M7 15l4-6 3 4 5-8" />
            </svg>
          </span>
        </div>
        <h3 class="kd-rcs-how__step-title">Real-Time Data Monitoring</h3>
        <p class="kd-rcs-how__step-text">The system tracks how many messages were actually delivered, viewed, and interacted with.</p>
      </div>

    </div>

    <p class="kd-rcs-how__foot">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M13 2 3 14h7l-1 8 10-12h-7l1-8z" />
      </svg>
      Average end-to-end delivery in under 2 seconds
    </p>

  </div>
</section>
<!-- ============ /How Does RCS Messaging Work? ============ -->