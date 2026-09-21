<!-- ============ Core Features of the Kings Digital RCS Messaging Gateway ============ -->
<style>
  .kd-rcs-core {
    --navy: #18283f;
    --blue: #315fc6;
    --indigo: #5b4bb7;
    --orange: #f0642f;
    --muted: #647087;
    --line: rgba(43, 67, 105, .12);
    --surface: #ffffff;

    position: relative;
    padding: 40px 0;
    background:
      radial-gradient(50% 40% at 0% 0%, rgba(49, 95, 198, .08), transparent 70%),
      radial-gradient(45% 40% at 100% 100%, rgba(91, 75, 183, .08), transparent 70%),
      #ffffff;
    color: var(--navy);
    font-family: inherit;
  }

  .kd-rcs-core *,
  .kd-rcs-core *::before,
  .kd-rcs-core *::after {
    box-sizing: border-box;
  }

  .kd-rcs-core__wrap {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 24px;
  }

  .kd-rcs-core__grid {
    display: grid;
    grid-template-columns: .82fr 1.18fr;
    gap: clamp(32px, 5vw, 72px);
    align-items: start;
  }

  /* ---------- Left: sticky heading ---------- */
  .kd-rcs-core__intro {
    position: sticky;
    top: 110px;
  }

  .kd-rcs-core__eyebrow {
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

  .kd-rcs-core__eyebrow::before {
    content: "";
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--orange);
  }

  .kd-rcs-core__title {
    margin: 0 0 20px;
    font-size: clamp(30px, 3.8vw, 46px);
    line-height: 1.12;
    font-weight: 800;
    letter-spacing: -.02em;
    color: var(--navy);
  }

  .kd-rcs-core__title span {
    background: linear-gradient(90deg, var(--blue), var(--indigo));
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    color: var(--blue);
    /* fallback */
  }

  .kd-rcs-core__lead {
    margin: 0 0 24px;
    max-width: 46ch;
    font-size: 16.5px;
    line-height: 1.75;
    color: var(--muted);
  }

  .kd-rcs-core__teams {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .kd-rcs-core__team {
    padding: 8px 16px;
    border: 1px solid var(--line);
    border-radius: 999px;
    background: #f4f6fd;
    font-size: 13.5px;
    font-weight: 600;
    color: var(--navy);
  }

  /* ---------- Right: feature list ---------- */
  .kd-rcs-core__list {
    margin: 0;
    padding: 0;
    list-style: none;
    border: 1px solid var(--line);
    border-radius: 26px;
    background: var(--surface);
    box-shadow: 0 32px 64px -36px rgba(43, 67, 105, .45);
  }

  .kd-rcs-core__item {
    --accent: var(--blue);
    --accent-soft: rgba(49, 95, 198, .1);

    display: grid;
    grid-template-columns: 52px 1fr;
    gap: 20px;
    padding: 28px clamp(20px, 3vw, 32px);
  }

  .kd-rcs-core__item+.kd-rcs-core__item {
    border-top: 1px solid var(--line);
  }

  .kd-rcs-core__item--indigo {
    --accent: var(--indigo);
    --accent-soft: rgba(91, 75, 183, .1);
  }

  .kd-rcs-core__item--orange {
    --accent: var(--orange);
    --accent-soft: rgba(240, 100, 47, .1);
  }

  .kd-rcs-core__icon {
    display: grid;
    place-items: center;
    width: 52px;
    height: 52px;
    border-radius: 16px;
    background: var(--accent-soft);
    color: var(--accent);
  }

  .kd-rcs-core__item-title {
    margin: 2px 0 8px;
    font-size: 18.5px;
    line-height: 1.3;
    font-weight: 700;
    color: var(--navy);
  }

  .kd-rcs-core__item-text {
    margin: 0;
    font-size: 15px;
    line-height: 1.7;
    color: var(--muted);
  }

  .kd-rcs-core__tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 16px 0 0;
    padding: 0;
    list-style: none;
  }

  .kd-rcs-core__tag {
    padding: 5px 12px;
    border: 1px solid var(--line);
    border-radius: 999px;
    background: #f6f8fe;
    font-size: 12.5px;
    font-weight: 600;
    color: var(--navy);
  }

  /* ---------- Responsive ---------- */
  @media (max-width: 960px) {
    .kd-rcs-core__grid {
      grid-template-columns: 1fr;
    }

    .kd-rcs-core__intro {
      position: static;
    }

    .kd-rcs-core__lead {
      max-width: 62ch;
    }
  }

  @media (max-width: 520px) {
    .kd-rcs-core__wrap {
      padding: 0 18px;
    }

    .kd-rcs-core__item {
      grid-template-columns: 1fr;
      gap: 14px;
    }
  }
</style>

<section class="kd-rcs-core" id="rcs-core-features" aria-labelledby="kd-rcs-core-title">
  <div class="kd-rcs-core__wrap">
    <div class="kd-rcs-core__grid">

      <!-- Left: heading + intro -->
      <div class="kd-rcs-core__intro">
        <span class="kd-rcs-core__eyebrow">Core Features</span>
        <h2 class="kd-rcs-core__title" id="kd-rcs-core-title">
          Core Features of the Kings Digital <span>RCS Messaging Gateway</span>
        </h2>
        <p class="kd-rcs-core__lead">
          Our RCS platform provides communication capabilities to marketing, sales, and operation departments to help them boost their conversion metrics:
        </p>
        <ul class="kd-rcs-core__teams">
          <li class="kd-rcs-core__team">Marketing</li>
          <li class="kd-rcs-core__team">Sales</li>
          <li class="kd-rcs-core__team">Operations</li>
        </ul>
      </div>

      <!-- Right: six features -->
      <ul class="kd-rcs-core__list">

        <li class="kd-rcs-core__item">
          <div class="kd-rcs-core__icon" aria-hidden="true">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="9" cy="8" r="3.5" />
              <path d="M2.5 20c.6-3.6 3.2-5.5 6.5-5.5" />
              <path d="m14.5 17 2.2 2.2 4.3-4.6" />
            </svg>
          </div>
          <div>
            <h3 class="kd-rcs-core__item-title">Authentication of Business Inboxes</h3>
            <p class="kd-rcs-core__item-text">Create the trust of the clients through the authenticated sender profile with the name of your company, logo, banner, an authenticity certificate, contact information of a company.</p>
          </div>
        </li>

        <li class="kd-rcs-core__item kd-rcs-core__item--indigo">
          <div class="kd-rcs-core__icon" aria-hidden="true">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
              <path d="m12 3 9 5-9 5-9-5z" />
              <path d="m3 12.5 9 5 9-5" />
              <path d="m3 17 9 5 9-5" />
            </svg>
          </div>
          <div>
            <h3 class="kd-rcs-core__item-title">Powerful Multimedia and Carousel View</h3>
            <p class="kd-rcs-core__item-text">Present the items visually with the high-resolution images, information notes, prize tags, and active buttons.</p>
          </div>
        </li>

        <li class="kd-rcs-core__item kd-rcs-core__item--orange">
          <div class="kd-rcs-core__icon" aria-hidden="true">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 8 4 12l5 4" />
              <path d="M4 12h10a6 6 0 0 1 6 6v1" />
            </svg>
          </div>
          <div>
            <h3 class="kd-rcs-core__item-title">Ready-Made Response Templates</h3>
            <p class="kd-rcs-core__item-text">Make the communication with clients easier with the aid of one click reply buttons in the text messages.</p>
          </div>
        </li>

        <li class="kd-rcs-core__item">
          <div class="kd-rcs-core__icon" aria-hidden="true">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
              <path d="M13 3 5 13.5h6L10 21l8-10.5h-6z" />
            </svg>
          </div>
          <div>
            <h3 class="kd-rcs-core__item-title">Ready-Made Actions</h3>
            <p class="kd-rcs-core__item-text">Make a client take action using one click; to open the webpage, make a phone call, get the location on the map, or add an event in the calendar.</p>
          </div>
        </li>

        <li class="kd-rcs-core__item kd-rcs-core__item--indigo">
          <div class="kd-rcs-core__icon" aria-hidden="true">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
              <path d="m8 8-4 4 4 4" />
              <path d="m16 8 4 4-4 4" />
              <path d="m13.5 5-3 14" />
            </svg>
          </div>
          <div>
            <h3 class="kd-rcs-core__item-title">Straightforward API and Webhook Connection</h3>
            <p class="kd-rcs-core__item-text">Integrate all RCS features with your backend systems, such as different CRMs like Salesforce, HubSpot, Zoho; e-commerce stores like Shopify, Woo-commerce; billing systems via standard REST API.</p>
            <ul class="kd-rcs-core__tags" aria-label="Supported integrations">
              <li class="kd-rcs-core__tag">Salesforce</li>
              <li class="kd-rcs-core__tag">HubSpot</li>
              <li class="kd-rcs-core__tag">Zoho</li>
              <li class="kd-rcs-core__tag">Shopify</li>
              <li class="kd-rcs-core__tag">WooCommerce</li>
              <li class="kd-rcs-core__tag">REST API</li>
            </ul>
          </div>
        </li>

        <li class="kd-rcs-core__item kd-rcs-core__item--orange">
          <div class="kd-rcs-core__icon" aria-hidden="true">
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 12a8 8 0 0 1 14-5.3L20 9" />
              <path d="M20 4v5h-5" />
              <path d="M20 12a8 8 0 0 1-14 5.3L4 15" />
              <path d="M4 20v-5h5" />
            </svg>
          </div>
          <div>
            <h3 class="kd-rcs-core__item-title">Automatic Failover message system</h3>
            <p class="kd-rcs-core__item-text">Ensure the message is delivered to all subscribers by using the automatic fallback feature that sends the Regular SMS or WhatsApp if RCS is not available.</p>
            <ul class="kd-rcs-core__tags" aria-label="Fallback channels">
              <li class="kd-rcs-core__tag">SMS</li>
              <li class="kd-rcs-core__tag">WhatsApp</li>
            </ul>
          </div>
        </li>

      </ul>

    </div>
  </div>
</section>
<!-- ============ /Core Features of the Kings Digital RCS Messaging Gateway ============ -->