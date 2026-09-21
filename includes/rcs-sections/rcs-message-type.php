<!-- ============ What Types of RCS Messages Can You Send? ============ -->
<style>
  .kd-rcs-types {
    --navy: #18283f;
    --blue: #315fc6;
    --indigo: #5b4bb7;
    --orange: #f0642f;
    --muted: #647087;
    --line: rgba(43, 67, 105, .12);
    --surface: #ffffff;

    position: relative;
    padding: 40px 0;
    background: linear-gradient(180deg, #f5f6fd 0%, #ffffff 100%);
    color: var(--navy);
    font-family: inherit;
  }

  .kd-rcs-types *,
  .kd-rcs-types *::before,
  .kd-rcs-types *::after {
    box-sizing: border-box;
  }

  .kd-rcs-types__wrap {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 24px;
  }

  /* ---------- Header ---------- */
  .kd-rcs-types__head {
    max-width: 780px;
    margin: 0 auto clamp(28px, 4vw, 40px);
    text-align: center;
  }

  .kd-rcs-types__eyebrow {
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

  .kd-rcs-types__eyebrow::before {
    content: "";
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--orange);
  }

  .kd-rcs-types__title {
    margin: 0 0 20px;
    font-size: clamp(30px, 4.2vw, 50px);
    line-height: 1.12;
    font-weight: 800;
    letter-spacing: -.02em;
    color: var(--navy);
  }

  .kd-rcs-types__title span {
    background: linear-gradient(90deg, var(--blue), var(--indigo));
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    color: var(--blue);
    /* fallback */
  }

  .kd-rcs-types__intro {
    margin: 0 auto;
    max-width: 62ch;
    font-size: 16.5px;
    line-height: 1.75;
    color: var(--muted);
  }

  /* ---------- Tabs (only shown when JS is running) ---------- */
  .kd-rcs-types__tabs {
    display: none;
    justify-content: center;
    margin-bottom: 26px;
  }

  .kd-rcs-types.is-js .kd-rcs-types__tabs {
    display: flex;
  }

  .kd-rcs-types__tablist {
    display: inline-flex;
    gap: 4px;
    padding: 5px;
    border: 1px solid var(--line);
    border-radius: 999px;
    background: #ebeefa;
  }

  .kd-rcs-types__tab {
    appearance: none;
    padding: 12px 22px;
    border: 0;
    border-radius: 999px;
    background: transparent;
    font: inherit;
    font-size: 14.5px;
    font-weight: 700;
    line-height: 1.2;
    color: var(--muted);
    cursor: pointer;
    white-space: nowrap;
    transition: background-color .2s ease, color .2s ease;
  }

  .kd-rcs-types__tab:hover {
    color: var(--navy);
  }

  .kd-rcs-types__tab[aria-selected="true"] {
    background: linear-gradient(90deg, var(--blue), var(--indigo));
    color: #ffffff;
    box-shadow: 0 10px 22px -10px rgba(49, 95, 198, .7);
  }

  .kd-rcs-types__tab:focus-visible {
    outline: 3px solid rgba(49, 95, 198, .45);
    outline-offset: 2px;
  }

  /* ---------- Panels ---------- */
  .kd-rcs-types__panel {
    --accent: var(--blue);
    --accent-soft: rgba(49, 95, 198, .1);
    --accent-wash: linear-gradient(160deg, rgba(49, 95, 198, .12), rgba(91, 75, 183, .06));

    display: grid;
    grid-template-columns: .9fr 1.1fr;
    border: 1px solid var(--line);
    border-radius: 28px;
    background: var(--surface);
    box-shadow: 0 34px 70px -38px rgba(43, 67, 105, .5);
    overflow: hidden;
  }

  .kd-rcs-types__panel[hidden] {
    display: none;
  }

  .kd-rcs-types:not(.is-js) .kd-rcs-types__panel+.kd-rcs-types__panel {
    margin-top: 24px;
  }

  .kd-rcs-types__panel--indigo {
    --accent: var(--indigo);
    --accent-soft: rgba(91, 75, 183, .12);
    --accent-wash: linear-gradient(160deg, rgba(91, 75, 183, .14), rgba(49, 95, 198, .05));
  }

  .kd-rcs-types__panel--orange {
    --accent: var(--orange);
    --accent-soft: rgba(240, 100, 47, .12);
    --accent-wash: linear-gradient(160deg, rgba(240, 100, 47, .13), rgba(91, 75, 183, .05));
  }

  .kd-rcs-types__side {
    padding: clamp(28px, 4vw, 48px);
    background: var(--accent-wash);
    border-right: 1px solid var(--line);
  }

  .kd-rcs-types__icon {
    display: grid;
    place-items: center;
    width: 60px;
    height: 60px;
    margin-bottom: 26px;
    border-radius: 18px;
    background: #ffffff;
    color: var(--accent);
    box-shadow: 0 16px 30px -16px rgba(43, 67, 105, .45);
  }

  .kd-rcs-types__panel-title {
    margin: 0 0 14px;
    font-size: clamp(24px, 2.8vw, 32px);
    line-height: 1.2;
    font-weight: 800;
    letter-spacing: -.015em;
    color: var(--navy);
  }

  .kd-rcs-types__panel-text {
    margin: 0;
    max-width: 44ch;
    font-size: 16px;
    line-height: 1.75;
    color: var(--muted);
  }

  .kd-rcs-types__list {
    margin: 0;
    padding: clamp(8px, 1.5vw, 14px) clamp(24px, 3.5vw, 44px);
    list-style: none;
    align-self: center;
  }

  .kd-rcs-types__item {
    display: grid;
    grid-template-columns: 28px 1fr;
    gap: 16px;
    padding: 22px 0;
    font-size: 15.5px;
    line-height: 1.7;
    color: var(--navy);
  }

  .kd-rcs-types__item+.kd-rcs-types__item {
    border-top: 1px solid var(--line);
  }

  .kd-rcs-types__check {
    display: grid;
    place-items: center;
    width: 28px;
    height: 28px;
    margin-top: 1px;
    border-radius: 50%;
    background: var(--accent-soft);
    color: var(--accent);
  }

  /* ---------- Responsive ---------- */
  @media (max-width: 860px) {
    .kd-rcs-types__panel {
      grid-template-columns: 1fr;
    }

    .kd-rcs-types__side {
      border-right: 0;
      border-bottom: 1px solid var(--line);
    }

    .kd-rcs-types__panel-text {
      max-width: 62ch;
    }
  }

  @media (max-width: 640px) {
    .kd-rcs-types__wrap {
      padding: 0 18px;
    }

    .kd-rcs-types__tabs {
      display: none;
      justify-content: stretch;
    }

    .kd-rcs-types.is-js .kd-rcs-types__tabs {
      display: flex;
    }

    .kd-rcs-types__tablist {
      display: flex;
      flex-direction: column;
      width: 100%;
      border-radius: 22px;
    }

    .kd-rcs-types__tab {
      padding: 13px 18px;
      text-align: center;
    }
  }
</style>

<section class="kd-rcs-types" id="rcs-message-types" aria-labelledby="kd-rcs-types-title">
  <div class="kd-rcs-types__wrap">

    <header class="kd-rcs-types__head">
      <span class="kd-rcs-types__eyebrow">RCS Message Types</span>
      <h2 class="kd-rcs-types__title" id="kd-rcs-types-title">
        What Types of <span>RCS Messages</span> Can You Send?
      </h2>
      <p class="kd-rcs-types__intro">
        The Kings Digital RCS platform supports multiple messaging formats tailored to specific campaign goals and operational workflows:
      </p>
    </header>

    <div class="kd-rcs-types__tabs">
      <div class="kd-rcs-types__tablist" role="tablist" aria-label="RCS message types">
        <button class="kd-rcs-types__tab" role="tab" type="button" id="kd-rcs-types-tab-1" aria-controls="kd-rcs-types-panel-1">Promotional &amp; Marketing</button>
        <button class="kd-rcs-types__tab" role="tab" type="button" id="kd-rcs-types-tab-2" aria-controls="kd-rcs-types-panel-2">Transactional &amp; Utility</button>
        <button class="kd-rcs-types__tab" role="tab" type="button" id="kd-rcs-types-tab-3" aria-controls="kd-rcs-types-panel-3">Conversational Support</button>
      </div>
    </div>

    <!-- 1. Promotional -->
    <div class="kd-rcs-types__panel" id="kd-rcs-types-panel-1" aria-labelledby="kd-rcs-types-tab-1">
      <div class="kd-rcs-types__side">
        <div class="kd-rcs-types__icon" aria-hidden="true">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 11v2a1 1 0 0 0 1 1h2l7 4V6L6 10H4a1 1 0 0 0-1 1z" />
            <path d="M16.5 9a4 4 0 0 1 0 6" />
            <path d="M19 6.5a7.5 7.5 0 0 1 0 11" />
          </svg>
        </div>
        <h3 class="kd-rcs-types__panel-title">Promotional &amp; Marketing Messages</h3>
        <p class="kd-rcs-types__panel-text">To improve profits online and in-store, create promotional campaigns that utilize attractive advertisements and can facilitate purchases.</p>
      </div>
      <ul class="kd-rcs-types__list">
        <li class="kd-rcs-types__item">
          <span class="kd-rcs-types__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m5 12 4.5 4.5L19 7" />
            </svg></span>
          <span>Use visually appealing slide presentations to inform customers about seasonal items, discounts, and sales.</span>
        </li>
        <li class="kd-rcs-types__item">
          <span class="kd-rcs-types__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m5 12 4.5 4.5L19 7" />
            </svg></span>
          <span>Send engaging invitations that include an “RSVP” option.</span>
        </li>
        <li class="kd-rcs-types__item">
          <span class="kd-rcs-types__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m5 12 4.5 4.5L19 7" />
            </svg></span>
          <span>Encourage users to buy items by sending emails that notify them that they have abandoned their carts while shopping.</span>
        </li>
      </ul>
    </div>

    <!-- 2. Transactional -->
    <div class="kd-rcs-types__panel kd-rcs-types__panel--indigo" id="kd-rcs-types-panel-2" aria-labelledby="kd-rcs-types-tab-2">
      <div class="kd-rcs-types__side">
        <div class="kd-rcs-types__icon" aria-hidden="true">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 3h12v18l-3-2-3 2-3-2-3 2z" />
            <path d="M9 8h6M9 12h6" />
          </svg>
        </div>
        <h3 class="kd-rcs-types__panel-title">Transactional &amp; Utility Alerts</h3>
        <p class="kd-rcs-types__panel-text">Make sure to send customers information about operations that are done on their behalf in real time in their usual mailbox.</p>
      </div>
      <ul class="kd-rcs-types__list">
        <li class="kd-rcs-types__item">
          <span class="kd-rcs-types__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m5 12 4.5 4.5L19 7" />
            </svg></span>
          <span>Deliver latest news on aviation, railway, or bus bookings and offer customers to download tickets and use QR codes for travel. Make sure to send notifications about orders being confirmed and shipped so that customers receive live maps and schedule their deliveries.</span>
        </li>
        <li class="kd-rcs-types__item">
          <span class="kd-rcs-types__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m5 12 4.5 4.5L19 7" />
            </svg></span>
          <span>Provide customers with monthly account statements, remind them about utility bill payments, and offer them one-click payment solutions.</span>
        </li>
      </ul>
    </div>

    <!-- 3. Conversational -->
    <div class="kd-rcs-types__panel kd-rcs-types__panel--orange" id="kd-rcs-types-panel-3" aria-labelledby="kd-rcs-types-tab-3">
      <div class="kd-rcs-types__side">
        <div class="kd-rcs-types__icon" aria-hidden="true">
          <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 5.5A2.5 2.5 0 0 1 5.5 3h8A2.5 2.5 0 0 1 16 5.5v4a2.5 2.5 0 0 1-2.5 2.5H9l-3.5 3v-3A2.5 2.5 0 0 1 3 9.5z" />
            <path d="M19 9.5A2.5 2.5 0 0 1 21 12v4a2.5 2.5 0 0 1-2.5 2.5V21.5L15 19h-3a2.5 2.5 0 0 1-2.2-1.3" />
          </svg>
        </div>
        <h3 class="kd-rcs-types__panel-title">Conversational Support &amp; Two-Way Workflows</h3>
        <p class="kd-rcs-types__panel-text">Turn one-way notifications into two-way customer service exchanges through AI chatbots or live agent handoffs.</p>
      </div>
      <ul class="kd-rcs-types__list">
        <li class="kd-rcs-types__item">
          <span class="kd-rcs-types__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m5 12 4.5 4.5L19 7" />
            </svg></span>
          <span>Automatically provide 24/7 customer service for common questions and issues such as FAQs, return policies, and locations of service branches.</span>
        </li>
        <li class="kd-rcs-types__item">
          <span class="kd-rcs-types__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m5 12 4.5 4.5L19 7" />
            </svg></span>
          <span>Get instant feedback from consumers after their purchases such as NPS and service scores through the interactive tap-to-rate buttons.</span>
        </li>
        <li class="kd-rcs-types__item">
          <span class="kd-rcs-types__check" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m5 12 4.5 4.5L19 7" />
            </svg></span>
          <span>Filter prospective leads from the inbound inquiries by offering them choices from pre-defined multi-choice menu before passing on to the sales representative.</span>
        </li>
      </ul>
    </div>

  </div>
</section>

<script>
  /* Tabs for the RCS message types section.
     Without JavaScript all three panels simply stack and stay visible. */
  (function() {
    var root = document.getElementById('rcs-message-types');
    if (!root) return;

    var tabs = [].slice.call(root.querySelectorAll('[role="tab"]'));
    var panels = [].slice.call(root.querySelectorAll('.kd-rcs-types__panel'));
    if (!tabs.length || tabs.length !== panels.length) return;

    root.classList.add('is-js');
    panels.forEach(function(p) {
      p.setAttribute('role', 'tabpanel');
    });

    function select(index, moveFocus) {
      tabs.forEach(function(tab, n) {
        var on = n === index;
        tab.setAttribute('aria-selected', on ? 'true' : 'false');
        tab.tabIndex = on ? 0 : -1;
        panels[n].hidden = !on;
      });
      if (moveFocus) tabs[index].focus();
    }

    tabs.forEach(function(tab, i) {
      tab.addEventListener('click', function() {
        select(i, false);
      });
      tab.addEventListener('keydown', function(e) {
        var next = null;
        if (e.key === 'ArrowRight' || e.key === 'ArrowDown') next = (i + 1) % tabs.length;
        else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') next = (i - 1 + tabs.length) % tabs.length;
        else if (e.key === 'Home') next = 0;
        else if (e.key === 'End') next = tabs.length - 1;
        if (next !== null) {
          e.preventDefault();
          select(next, true);
        }
      });
    });

    select(0, false);
  })();
</script>
<!-- ============ /What Types of RCS Messages Can You Send? ============ -->