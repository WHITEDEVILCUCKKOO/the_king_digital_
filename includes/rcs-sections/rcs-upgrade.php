<!-- ============ Why Should Your Brand Upgrade to RCS Business Messaging? ============ -->
<style>
    .kd-rcs-upgrade {
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
            radial-gradient(60% 50% at 90% 0%, rgba(91, 75, 183, .08), transparent 70%),
            radial-gradient(50% 40% at 0% 100%, rgba(49, 95, 198, .07), transparent 70%),
            #ffffff;
        color: var(--navy);
        font-family: inherit;
        overflow: hidden;
    }

    .kd-rcs-upgrade *,
    .kd-rcs-upgrade *::before,
    .kd-rcs-upgrade *::after {
        box-sizing: border-box;
    }

    .kd-rcs-upgrade__wrap {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* ---------- Header ---------- */
    .kd-rcs-upgrade__head {
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .kd-rcs-upgrade__eyebrow {
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

    .kd-rcs-upgrade__eyebrow::before {
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--orange);
    }

    .kd-rcs-upgrade__title {
        margin: 0 0 20px;
        font-size: clamp(30px, 4.2vw, 50px);
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -.02em;
        color: var(--navy);
    }

    .kd-rcs-upgrade__title span {
        background: linear-gradient(90deg, var(--blue), var(--indigo));
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: var(--blue);
        /* fallback */
    }

    .kd-rcs-upgrade__intro {
        margin: 0 auto;
        max-width: 70ch;
        font-size: 16.5px;
        line-height: 1.75;
        color: var(--muted);
    }

    /* ---------- Sub-heading ---------- */
    .kd-rcs-upgrade__sub {
        display: flex;
        align-items: center;
        gap: 20px;
        margin: clamp(44px, 6vw, 68px) 0 28px;
        font-size: clamp(20px, 2.4vw, 26px);
        font-weight: 700;
        letter-spacing: -.01em;
        color: var(--navy);
    }

    .kd-rcs-upgrade__sub::before,
    .kd-rcs-upgrade__sub::after {
        content: "";
        flex: 1;
        height: 1px;
        background: var(--line);
    }

    .kd-rcs-upgrade__sub span {
        text-align: center;
    }

    /* ---------- Feature cards (3 + 2 on a 6-col grid) ---------- */
    .kd-rcs-upgrade__grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 22px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .kd-rcs-upgrade__card {
        --accent: var(--blue);
        --accent-soft: rgba(49, 95, 198, .1);

        position: relative;
        grid-column: span 2;
        padding: 28px 26px 32px;
        border: 1px solid var(--line);
        border-radius: 22px;
        background: var(--surface);
        box-shadow: 0 24px 46px -30px rgba(43, 67, 105, .35);
        overflow: hidden;
    }

    .kd-rcs-upgrade__card:nth-child(4),
    .kd-rcs-upgrade__card:nth-child(5) {
        grid-column: span 3;
    }

    .kd-rcs-upgrade__card--indigo {
        --accent: var(--indigo);
        --accent-soft: rgba(91, 75, 183, .1);
    }

    .kd-rcs-upgrade__card--orange {
        --accent: var(--orange);
        --accent-soft: rgba(240, 100, 47, .1);
    }

    /* Card */
    .kd-rcs-upgrade__card {
        position: relative;
        overflow: hidden;
    }

    /* Bottom accent bar */
    .kd-rcs-upgrade__card::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 38%;
        height: 4px;
        border-radius: 0 4px 0 0;
        background: var(--accent);

        /* Smooth expansion */
        transition: width 0.6s ease;
    }

    /* Icon */
    .kd-rcs-upgrade__icon {
        display: grid;
        place-items: center;
        width: 52px;
        height: 52px;
        margin-bottom: 20px;
        border-radius: 16px;
        background: var(--accent-soft);
        color: var(--accent);

        /* Smooth rotation */
        transition: transform 0.4s ease;
    }

    /* Hover: line expands */
    .kd-rcs-upgrade__card:hover::after {
        width: 100%;
    }

    /* Hover: icon rotates */
    .kd-rcs-upgrade__card:hover .kd-rcs-upgrade__icon {
        transform: rotate(30deg);
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 980px) {
        .kd-rcs-upgrade__grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .kd-rcs-upgrade__card,
        .kd-rcs-upgrade__card:nth-child(4),
        .kd-rcs-upgrade__card:nth-child(5) {
            grid-column: span 1;
        }

        .kd-rcs-upgrade__card:nth-child(5) {
            grid-column: span 2;
        }
    }

    @media (max-width: 640px) {
        .kd-rcs-upgrade__wrap {
            padding: 0 18px;
        }

        .kd-rcs-upgrade__grid {
            grid-template-columns: 1fr;
        }

        .kd-rcs-upgrade__card,
        .kd-rcs-upgrade__card:nth-child(4),
        .kd-rcs-upgrade__card:nth-child(5) {
            grid-column: span 1;
        }

        .kd-rcs-upgrade__sub {
            gap: 14px;
        }
    }
</style>

<section class="kd-rcs-upgrade" id="upgrade-to-rcs" aria-labelledby="kd-rcs-upgrade-title">
    <div class="kd-rcs-upgrade__wrap">

        <header class="kd-rcs-upgrade__head">
            <span class="kd-rcs-upgrade__eyebrow">Why Upgrade to RCS</span>
            <h2 class="kd-rcs-upgrade__title" id="kd-rcs-upgrade-title">
                Why Should Your Brand Upgrade to <span>RCS Business Messaging?</span>
            </h2>
            <p class="kd-rcs-upgrade__intro">
                Rich Communication Services (RCS) is a mobile message protocol developed by GSMA and is best described as a modern alternative to SMS and MMS networks. Its features make an RCS a perfect enterprise-level messaging solution that allows transforming basic notifications into interactive services and support channels directly in standard texting apps.
            </p>
        </header>

        <h3 class="kd-rcs-upgrade__sub"><span>What Makes RCS Superior to Traditional SMS?</span></h3>

        <ul class="kd-rcs-upgrade__grid">

            <li class="kd-rcs-upgrade__card">
                <div class="kd-rcs-upgrade__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 3 4.5 6v5.5c0 4.4 3.1 8.3 7.5 9.5 4.4-1.2 7.5-5.1 7.5-9.5V6z" />
                        <path d="m8.8 12 2.4 2.4L15.4 10" />
                    </svg>
                </div>
                <h4 class="kd-rcs-upgrade__card-title">Verified Sender Trust</h4>
                <p class="kd-rcs-upgrade__card-text">Your company logo, colors and a verification badge appear along with every message sent out, ensuring that your target audience is not scammed by phishers or shallow duplicators.</p>
            </li>

            <li class="kd-rcs-upgrade__card kd-rcs-upgrade__card--indigo">
                <div class="kd-rcs-upgrade__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="16" rx="3" />
                        <circle cx="9" cy="10" r="1.7" />
                        <path d="m21 16-5-5-8 9" />
                    </svg>
                </div>
                <h4 class="kd-rcs-upgrade__card-title">High Impact Visual Engagement</h4>
                <p class="kd-rcs-upgrade__card-text">Send not just text information but also high quality images, video previews, PDF documents, GIF files, as well as localization pins.</p>
            </li>

            <li class="kd-rcs-upgrade__card kd-rcs-upgrade__card--orange">
                <div class="kd-rcs-upgrade__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 11V5.5a1.6 1.6 0 0 1 3.2 0V10" />
                        <path d="M12.2 10V8.7a1.6 1.6 0 0 1 3.2 0V11" />
                        <path d="M15.4 11v-.3a1.6 1.6 0 0 1 3.1 0V15c0 3.3-2.4 6-5.7 6h-.6c-2 0-3.3-.8-4.5-2.3L4.7 15a1.6 1.6 0 0 1 2.5-2L9 14.6V11" />
                    </svg>
                </div>
                <h4 class="kd-rcs-upgrade__card-title">Interactive Quick Action Buttons</h4>
                <p class="kd-rcs-upgrade__card-text">Allow users to respond instantly via one-click options such as “buy now”, “book an appointment”, “track the order”, “visit my website” or “call customer support” directly from the message.</p>
            </li>

            <li class="kd-rcs-upgrade__card kd-rcs-upgrade__card--indigo">
                <div class="kd-rcs-upgrade__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="7" y="5" width="10" height="14" rx="2.2" />
                        <path d="M3.5 8v8M20.5 8v8" />
                    </svg>
                </div>
                <h4 class="kd-rcs-upgrade__card-title">Dynamic Media Carousels</h4>
                <p class="kd-rcs-upgrade__card-text">Feature multiple products, deals and service benefits in the coming box organize horizontally for instant access.</p>
            </li>

            <li class="kd-rcs-upgrade__card">
                <div class="kd-rcs-upgrade__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 20V10M10 20V4M16 20v-7M22 20H2" />
                    </svg>
                </div>
                <h4 class="kd-rcs-upgrade__card-title">Comprehensive Analytics and Engagement Tracking</h4>
                <p class="kd-rcs-upgrade__card-text">Achieve complete visibility of your campaign, with all delivery rates tracked, messages opened, buttons clicks and conversions measured.</p>
            </li>

        </ul>

    </div>
</section>
<!-- ============ /Why Should Your Brand Upgrade to RCS Business Messaging? ============ -->