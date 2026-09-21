<!-- ============ Official RCS Business Messaging Service ============ -->
<style>
    .kd-rcs-official {
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

    .kd-rcs-official *,
    .kd-rcs-official *::before,
    .kd-rcs-official *::after {
        box-sizing: border-box;
    }

    .kd-rcs-official__wrap {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 24px;
    }

    .kd-rcs-official__grid {
        display: grid;
        grid-template-columns: 1.05fr .95fr;
        gap: clamp(32px, 5vw, 64px);
        align-items: center;
    }

    /* ---------- Eyebrow pill (same pattern as the other sections) ---------- */
    .kd-rcs-official__eyebrow {
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

    .kd-rcs-official__eyebrow::before {
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--orange);
    }

    /* ---------- Heading + copy ---------- */
    .kd-rcs-official__title {
        margin: 0 0 22px;
        font-size: clamp(32px, 4.4vw, 52px);
        line-height: 1.1;
        font-weight: 800;
        letter-spacing: -.02em;
        color: var(--navy);
    }

    .kd-rcs-official__title span {
        background: linear-gradient(90deg, var(--blue), var(--indigo));
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: var(--blue);
        /* fallback */
    }

    .kd-rcs-official__text {
        margin: 0;
        max-width: 62ch;
        font-size: 16.5px;
        line-height: 1.75;
        color: var(--muted);
    }

    /* ---------- Plain SMS vs RCS illustration ---------- */
    .kd-rcs-official__compare {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1.15fr;
        gap: 18px;
        align-items: end;
        padding: 28px;
        border: 1px solid var(--line);
        border-radius: 28px;
        background: linear-gradient(160deg, #ffffff 0%, #eef1fc 100%);
        box-shadow: 0 30px 60px -28px rgba(49, 95, 198, .28);
    }

    .kd-rcs-official__panel-label {
        display: block;
        margin-bottom: 10px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .06em;
        text-transform: uppercase;
        color: var(--muted);
    }

    .kd-rcs-official__panel--rcs .kd-rcs-official__panel-label {
        color: var(--blue);
    }

    /* Plain SMS: flat, grey, capped at 160 */
    .kd-rcs-official__sms {
        padding: 16px;
        border: 1.5px dashed rgba(100, 112, 135, .4);
        border-radius: 18px;
        background: rgba(255, 255, 255, .55);
    }

    .kd-rcs-official__bubble {
        padding: 14px;
        border-radius: 16px 16px 16px 4px;
        background: #e6e9f0;
    }

    .kd-rcs-official__line {
        display: block;
        height: 7px;
        margin-bottom: 8px;
        border-radius: 4px;
        background: #c3c9d6;
    }

    .kd-rcs-official__line:last-child {
        margin-bottom: 0;
    }

    .kd-rcs-official__line--w90 {
        width: 90%;
    }

    .kd-rcs-official__line--w75 {
        width: 75%;
    }

    .kd-rcs-official__line--w50 {
        width: 50%;
    }

    .kd-rcs-official__count {
        display: block;
        margin-top: 12px;
        font-size: 12px;
        font-weight: 600;
        color: var(--muted);
        text-align: right;
    }

    /* RCS: branded, media-rich, interactive */
    .kd-rcs-official__rcs {
        overflow: hidden;
        border: 1px solid var(--line);
        border-radius: 20px;
        background: var(--surface);
        box-shadow: 0 22px 40px -18px rgba(49, 95, 198, .35);
    }

    .kd-rcs-official__brand {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 14px;
        border-bottom: 1px solid var(--line);
    }

    .kd-rcs-official__logo {
        display: grid;
        place-items: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--blue), var(--indigo));
        color: #fff;
        font-size: 12px;
        font-weight: 800;
    }

    .kd-rcs-official__brand-name {
        font-size: 13px;
        font-weight: 700;
        line-height: 1.2;
        color: var(--navy);
    }

    .kd-rcs-official__verified {
        display: block;
        font-size: 10.5px;
        font-weight: 600;
        color: var(--blue);
    }

    .kd-rcs-official__media {
        height: 104px;
        background:
            radial-gradient(circle at 25% 30%, rgba(255, 255, 255, .5), transparent 45%),
            linear-gradient(135deg, var(--blue) 0%, var(--indigo) 60%, var(--orange) 130%);
    }

    .kd-rcs-official__body {
        padding: 14px;
    }

    .kd-rcs-official__body .kd-rcs-official__line {
        background: #dfe3ee;
    }

    .kd-rcs-official__actions {
        display: flex;
        gap: 8px;
        margin-top: 14px;
    }

    .kd-rcs-official__btn {
        flex: 1;
        padding: 8px 6px;
        border-radius: 999px;
        border: 1px solid var(--line);
        background: #f4f6fc;
        font-size: 11px;
        font-weight: 700;
        text-align: center;
        color: var(--blue);
    }

    .kd-rcs-official__btn--primary {
        border-color: transparent;
        background: var(--blue);
        color: #fff;
    }

    /* ---------- Second paragraph + who it's for ---------- */
    .kd-rcs-official__note {
        margin-top: clamp(36px, 5vw, 56px);
        padding: clamp(24px, 3.5vw, 40px);
        border: 1px solid var(--line);
        border-radius: 24px;
        background: var(--surface);
        box-shadow: 0 24px 50px -30px rgba(43, 67, 105, .3);
    }

    .kd-rcs-official__note .kd-rcs-official__text {
        max-width: 88ch;
    }

    .kd-rcs-official__chips {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin: 24px 0 0;
        padding: 0;
        list-style: none;
    }

    .kd-rcs-official__chip {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 16px;
        border: 1px solid var(--line);
        border-radius: 999px;
        background: #f6f8fe;
        font-size: 13.5px;
        font-weight: 600;
        color: var(--navy);
    }

    .kd-rcs-official__chip svg {
        flex: none;
    }

    .kd-rcs-official__chip--accent {
        border-color: rgba(240, 100, 47, .3);
        background: #fff4ee;
        color: #b8431a;
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 900px) {
        .kd-rcs-official__grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .kd-rcs-official__wrap {
            padding: 0 18px;
        }

        .kd-rcs-official__compare {
            grid-template-columns: 1fr;
            padding: 20px;
        }
    }
</style>

<section class="kd-rcs-official" id="official-rcs-business-messaging" aria-labelledby="kd-rcs-official-title">
    <div class="kd-rcs-official__wrap">

        <div class="kd-rcs-official__grid">

            <!-- Left: heading + intro -->
            <div>
                <span class="kd-rcs-official__eyebrow">Official RCS Business Messaging</span>
                <h2 class="kd-rcs-official__title" id="kd-rcs-official-title">
                    Official RCS Business <span>Messaging Service</span>
                </h2>
                <p class="kd-rcs-official__text">
                    Stop losing the interest of customers with plain, dull 160-character text messages. The traditional SMS plain text no longer offers enough possibilities to make an impression in either one’s messages‘ inbox or into the crowded mobile industry. Consumers nowadays are accustomed to enjoying interactive app-like experiences right in their own messaging applications, without the need to download and use third-party services. Rich Communication Services (RCS) offers you a chance to turn traditional text messaging routines into an engaging, branded, media-rich experience, as it is made possible by Kings Digital and its RCS business messaging platform that works among all major mobile messaging platforms.
                </p>
            </div>

            <!-- Right: plain SMS vs RCS illustration -->
            <div class="kd-rcs-official__compare" aria-hidden="true">
                <div class="kd-rcs-official__panel">
                    <span class="kd-rcs-official__panel-label">Plain SMS</span>
                    <div class="kd-rcs-official__sms">
                        <div class="kd-rcs-official__bubble">
                            <span class="kd-rcs-official__line kd-rcs-official__line--w90"></span>
                            <span class="kd-rcs-official__line kd-rcs-official__line--w75"></span>
                            <span class="kd-rcs-official__line kd-rcs-official__line--w50"></span>
                        </div>
                        <span class="kd-rcs-official__count">160 characters</span>
                    </div>
                </div>

                <div class="kd-rcs-official__panel kd-rcs-official__panel--rcs">
                    <span class="kd-rcs-official__panel-label">RCS Business Messaging</span>
                    <div class="kd-rcs-official__rcs">
                        <div class="kd-rcs-official__brand">
                            <span class="kd-rcs-official__logo">B</span>
                            <span class="kd-rcs-official__brand-name">
                                Your Brand
                                <span class="kd-rcs-official__verified">Verified sender</span>
                            </span>
                        </div>
                        <div class="kd-rcs-official__media"></div>
                        <div class="kd-rcs-official__body">
                            <span class="kd-rcs-official__line kd-rcs-official__line--w75"></span>
                            <span class="kd-rcs-official__line kd-rcs-official__line--w50"></span>
                            <div class="kd-rcs-official__actions">
                                <span class="kd-rcs-official__btn kd-rcs-official__btn--primary">Shop now</span>
                                <span class="kd-rcs-official__btn">Learn more</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom: who it's for -->
        <div class="kd-rcs-official__note">
            <p class="kd-rcs-official__text">
                If whatever you do is e-commerce business, financial enterprise, or large-scale service business, the RCS business messaging system will help your company carry out trusted communication. Now your company has no need of using shortcodes, thus causing no misunderstanding among the consumers.
            </p>

            <ul class="kd-rcs-official__chips">
                <li class="kd-rcs-official__chip">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#315fc6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 6h15l-1.5 9h-12z" />
                        <path d="M6 6 5 3H2" />
                        <circle cx="9" cy="20" r="1.3" />
                        <circle cx="18" cy="20" r="1.3" />
                    </svg>
                    E-commerce
                </li>
                <li class="kd-rcs-official__chip">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#315fc6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3 10 12 4l9 6" />
                        <path d="M5 10v8M10 10v8M14 10v8M19 10v8" />
                        <path d="M3 20h18" />
                    </svg>
                    Financial enterprises
                </li>
                <li class="kd-rcs-official__chip">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#315fc6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="4" y="3" width="16" height="18" rx="2" />
                        <path d="M9 8h.01M15 8h.01M9 12h.01M15 12h.01M10 21v-4h4v4" />
                    </svg>
                    Large-scale service businesses
                </li>
                <li class="kd-rcs-official__chip kd-rcs-official__chip--accent">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f0642f" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="m5 12 4.5 4.5L19 7" />
                    </svg>
                    No shortcodes needed
                </li>
            </ul>
        </div>

    </div>
</section>
<!-- ============ /Official RCS Business Messaging Service ============ -->