<!-- ============ Technical Comparison: Traditional SMS vs. WhatsApp API vs. RCS Business Messaging ============ -->
<style>
  .kd-rcs-compare {
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
    overflow: hidden;
  }

  .kd-rcs-compare *,
  .kd-rcs-compare *::before,
  .kd-rcs-compare *::after {
    box-sizing: border-box;
  }

  .kd-rcs-compare__wrap {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 24px;
  }

  .kd-rcs-compare__sr {
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
  }

  /* ---------- Header ---------- */
  .kd-rcs-compare__head {
    max-width: 860px;
    margin: 0 auto clamp(32px, 5vw, 52px);
    text-align: center;
  }

  .kd-rcs-compare__eyebrow {
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

  .kd-rcs-compare__eyebrow::before {
    content: "";
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--orange);
  }

  .kd-rcs-compare__title {
    margin: 0 0 20px;
    font-size: clamp(28px, 4vw, 46px);
    line-height: 1.15;
    font-weight: 800;
    letter-spacing: -.02em;
    color: var(--navy);
  }

  .kd-rcs-compare__title span {
    background: linear-gradient(90deg, var(--blue), var(--indigo));
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    color: var(--blue);
    /* fallback */
  }

  .kd-rcs-compare__intro {
    margin: 0 auto;
    max-width: 66ch;
    font-size: 16.5px;
    line-height: 1.75;
    color: var(--muted);
  }

  /* ---------- Table ---------- */
  .kd-rcs-compare__table-wrap {
    border: 1px solid var(--line);
    border-radius: 22px;
    background: var(--surface);
    box-shadow: 0 30px 60px -34px rgba(43, 67, 105, .4);
    overflow: hidden;
  }

  .kd-rcs-compare__table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
    text-align: left;
  }

  .kd-rcs-compare__table thead th {
    padding: 18px 22px;
    background: var(--navy);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .06em;
    text-transform: uppercase;
    color: #ffffff;
    vertical-align: middle;
  }

  .kd-rcs-compare__table thead th.is-rcs {
    background: linear-gradient(90deg, var(--blue), var(--indigo));
  }

  .kd-rcs-compare__table tbody th,
  .kd-rcs-compare__table tbody td {
    padding: 22px;
    border-top: 1px solid var(--line);
    font-size: 15px;
    line-height: 1.6;
    vertical-align: top;
  }

  .kd-rcs-compare__table tbody th {
    font-weight: 700;
    color: var(--navy);
  }

  .kd-rcs-compare__table tbody td {
    color: var(--muted);
  }

  .kd-rcs-compare__table tbody td.is-rcs {
    background: rgba(49, 95, 198, .05);
    font-weight: 600;
    color: var(--navy);
  }

  .kd-rcs-compare__table col.c-feature {
    width: 22%;
  }

  /* yes / no markers (only used where the copy is a clear yes/no) */
  .kd-rcs-compare__status {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 22px;
    height: 22px;
    margin-right: 8px;
    border-radius: 50%;
    vertical-align: -5px;
  }

  .kd-rcs-compare__status--yes {
    background: rgba(31, 157, 98, .14);
    color: #1a8a55;
  }

  .kd-rcs-compare__status--no {
    background: rgba(224, 62, 62, .12);
    color: #d03a3a;
  }

  /* ---------- Fallback callout ---------- */
  .kd-rcs-compare__fallback {
    display: grid;
    grid-template-columns: 1.15fr .85fr;
    gap: clamp(24px, 4vw, 56px);
    align-items: center;
    margin-top: 28px;
    padding: clamp(26px, 4vw, 44px);
    border-radius: 24px;
    background:
      radial-gradient(60% 80% at 100% 0%, rgba(240, 100, 47, .22), transparent 60%),
      linear-gradient(135deg, #2c52b3 0%, var(--indigo) 100%);
    color: #ffffff;
    box-shadow: 0 30px 60px -30px rgba(49, 95, 198, .6);
  }

  .kd-rcs-compare__fallback-title {
    margin: 0 0 14px;
    font-size: clamp(22px, 2.6vw, 28px);
    line-height: 1.25;
    font-weight: 800;
    letter-spacing: -.01em;
    color: #ffffff;
  }

  .kd-rcs-compare__fallback-text {
    margin: 0;
    max-width: 62ch;
    font-size: 15.5px;
    line-height: 1.75;
    color: rgba(255, 255, 255, .88);
  }

  .kd-rcs-compare__flow {
    display: flex;
    flex-direction: column;
    align-items: stretch;
    gap: 6px;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .kd-rcs-compare__step {
    padding: 13px 16px;
    border: 1px solid rgba(255, 255, 255, .22);
    border-radius: 14px;
    background: rgba(255, 255, 255, .1);
    font-size: 14px;
    font-weight: 600;
    line-height: 1.4;
    text-align: center;
  }

  .kd-rcs-compare__step--end {
    border-color: transparent;
    background: #ffffff;
    color: var(--navy);
  }

  .kd-rcs-compare__arrow {
    display: flex;
    justify-content: center;
    color: rgba(255, 255, 255, .7);
  }

  /* ---------- Responsive ---------- */
  @media (max-width: 900px) {
    .kd-rcs-compare__fallback {
      grid-template-columns: 1fr;
    }
  }

  /* table turns into stacked cards on phones */
  @media (max-width: 760px) {
    .kd-rcs-compare__wrap {
      padding: 0 18px;
    }

    .kd-rcs-compare__table-wrap {
      border: 0;
      background: transparent;
      box-shadow: none;
      overflow: visible;
    }

    .kd-rcs-compare__table,
    .kd-rcs-compare__table tbody,
    .kd-rcs-compare__table tr,
    .kd-rcs-compare__table th,
    .kd-rcs-compare__table td {
      display: block;
      width: 100%;
    }

    .kd-rcs-compare__table thead {
      position: absolute;
      width: 1px;
      height: 1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
    }

    .kd-rcs-compare__table tbody tr {
      margin-bottom: 18px;
      border: 1px solid var(--line);
      border-radius: 20px;
      background: var(--surface);
      box-shadow: 0 20px 40px -28px rgba(43, 67, 105, .4);
      overflow: hidden;
    }

    .kd-rcs-compare__table tbody th {
      padding: 16px 20px;
      border-top: 0;
      background: var(--navy);
      color: #ffffff;
    }

    .kd-rcs-compare__table tbody td {
      padding: 14px 20px;
    }

    .kd-rcs-compare__table tbody td::before {
      content: attr(data-label);
      display: block;
      margin-bottom: 4px;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .06em;
      text-transform: uppercase;
      color: var(--blue);
    }
  }
</style>

<section class="kd-rcs-compare" id="rcs-vs-sms-vs-whatsapp" aria-labelledby="kd-rcs-compare-title">
  <div class="kd-rcs-compare__wrap">

    <header class="kd-rcs-compare__head">
      <span class="kd-rcs-compare__eyebrow">Technical Comparison</span>
      <h2 class="kd-rcs-compare__title" id="kd-rcs-compare-title">
        Technical Comparison: Traditional SMS vs. WhatsApp API vs. <span>RCS Business Messaging</span>
      </h2>
      <p class="kd-rcs-compare__intro">
        Choosing the best mobile messaging channel will depend on your brand reach, audience device ecosystem, visual presentation requirements, and verification requirements.
      </p>
    </header>

    <div class="kd-rcs-compare__table-wrap">
      <table class="kd-rcs-compare__table">
        <caption class="kd-rcs-compare__sr">Comparison of Traditional SMS, WhatsApp API and RCS Business Messaging</caption>
        <colgroup>
          <col class="c-feature">
          <col>
          <col>
          <col>
        </colgroup>
        <thead>
          <tr>
            <th scope="col">Feature</th>
            <th scope="col">Traditional SMS</th>
            <th scope="col">WhatsApp API</th>
            <th scope="col" class="is-rcs">RCS Business Messaging</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row">Brand Sender Identification</th>
            <td data-label="Traditional SMS">Numeric shortcodes or alphabetic sender IDs of 6 characters.</td>
            <td data-label="WhatsApp API">Verified business phone numbers in the WhatsApp application environment.</td>
            <td class="is-rcs" data-label="RCS Business Messaging">Displays the full name of the company, logos, and custom colors of the company.</td>
          </tr>

          <tr>
            <th scope="row">App Installation Requirements</th>
            <td data-label="Traditional SMS">
              <span class="kd-rcs-compare__status kd-rcs-compare__status--yes" aria-hidden="true"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m5 12 4.5 4.5L19 7" />
                </svg></span>Works in the default mobile messaging app. No external app download.
            </td>
            <td data-label="WhatsApp API">
              <span class="kd-rcs-compare__status kd-rcs-compare__status--no" aria-hidden="true"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 6l12 12M18 6 6 18" />
                </svg></span>Users need to download the right mobile app and install it.
            </td>
            <td class="is-rcs" data-label="RCS Business Messaging">
              <span class="kd-rcs-compare__status kd-rcs-compare__status--yes" aria-hidden="true"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.4" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m5 12 4.5 4.5L19 7" />
                </svg></span>Works in the default mobile messaging app. No external app download.
            </td>
          </tr>

          <tr>
            <th scope="row">Character Limits and Content Payload</th>
            <td data-label="Traditional SMS">Limits text to 160 characters.</td>
            <td data-label="WhatsApp API">Allows for some text formatting, images, and documents.</td>
            <td class="is-rcs" data-label="RCS Business Messaging">Allows up to 2,048 characters and multimedia files.</td>
          </tr>

        </tbody>
      </table>
    </div>

    <!-- Fallback communications (RCS-only, so it sits outside the table) -->
    <div class="kd-rcs-compare__fallback">
      <div>
        <h3 class="kd-rcs-compare__fallback-title">Fallback Communications</h3>
        <p class="kd-rcs-compare__fallback-text">
          RCS does have a fallback routing mechanism whereby messages are routed to SMS and MMS automatically. If the recipient's device and carrier do not support RCS, the content is converted into standard text or web-link message for the users to ensure 100% campaign delivery.
        </p>
      </div>

      <ol class="kd-rcs-compare__flow" aria-label="How RCS fallback works">
        <li class="kd-rcs-compare__step">RCS message sent</li>
        <li class="kd-rcs-compare__arrow" aria-hidden="true">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 5v14M6 13l6 6 6-6" />
          </svg>
        </li>
        <li class="kd-rcs-compare__step">Device or carrier does not support RCS</li>
        <li class="kd-rcs-compare__arrow" aria-hidden="true">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 5v14M6 13l6 6 6-6" />
          </svg>
        </li>
        <li class="kd-rcs-compare__step kd-rcs-compare__step--end">Delivered as SMS, MMS or a web-link message</li>
      </ol>
    </div>

  </div>
</section>
<!-- ============ /Technical Comparison ============ -->