<style>
    :root {
        /* ========================================
       WHATSAPP — GREEN + BLUE THEME
       ======================================== */

        /* ---------- Primary Green ---------- */
        --wa-green: #25D366;
        --wa-green-dark: #16A34A;
        --wa-green-light: #4ADE80;
        --wa-green-soft: #ECFDF3;
        --wa-green-pale: #DCFCE7;

        /* ---------- Primary Blue ---------- */
        --wa-blue: #2563EB;
        --wa-blue-dark: #1D4ED8;
        --wa-blue-light: #3B82F6;
        --wa-blue-soft: #EFF6FF;
        --wa-blue-pale: #DBEAFE;

        /* ---------- Deep Brand ---------- */
        --wa-navy: #0F172A;
        --wa-navy-light: #1E293B;

        /* ---------- Text ---------- */
        --wa-text-primary: #0F172A;
        --wa-text-secondary: #475569;
        --wa-text-muted: #64748B;
        --wa-text-white: #FFFFFF;

        /* ---------- Backgrounds ---------- */
        --wa-bg: #FFFFFF;
        --wa-bg-soft: #F8FAFC;
        --wa-bg-green: #F0FDF4;
        --wa-bg-blue: #EFF6FF;

        /* ---------- Surface ---------- */
        --wa-surface: #FFFFFF;
        --wa-border: #E2E8F0;

        /* ---------- Gradients ---------- */

        --wa-gradient:
            linear-gradient(135deg,
                #25D366 0%,
                #22C55E 35%,
                #3B82F6 100%);

        --wa-gradient-blue:
            linear-gradient(135deg,
                #2563EB 0%,
                #3B82F6 60%,
                #60A5FA 100%);

        --wa-gradient-green:
            linear-gradient(135deg,
                #16A34A 0%,
                #25D366 60%,
                #4ADE80 100%);

        --wa-gradient-soft:
            linear-gradient(135deg,
                #ECFDF3 0%,
                #EFF6FF 100%);

        /* ---------- Shadows ---------- */

        --wa-shadow-sm:
            0 4px 15px rgba(15, 23, 42, 0.06);

        --wa-shadow-green:
            0 15px 40px rgba(37, 211, 102, 0.16);

        --wa-shadow-blue:
            0 15px 40px rgba(37, 99, 235, 0.16);

        /* ---------- Radius ---------- */

        --wa-radius-sm: 10px;
        --wa-radius-md: 16px;
        --wa-radius-lg: 24px;
        --wa-radius-xl: 32px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 32px;
    }

    /* ============================================
       SECTION 5 — BENEFITS
       ============================================ */

    .whatsappBlue-benefits {
        position: relative;
        padding: 60px 0;
        background: var(--wa-bg);
    }

    /* ---------- Shared badge (matches other sections) ---------- */

    .whatsappBlue-section_badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: 999px;
        font-size: 13px;
        font-weight: 600;
        color: var(--wa-green-dark);
        box-shadow: var(--wa-shadow-sm);
        margin-bottom: 22px;
    }

    .whatsappBlue-section_badge i {
        font-size: 12px;
    }

    /* ---------- Header ---------- */

    .whatsappBlue-benefits_header {
        text-align: center;
        max-width: 640px;
        margin: 0 auto 48px;
    }

    .whatsappBlue-benefits_title {
        font-size: 38px;
        line-height: 1.3;
        font-weight: 800;
        letter-spacing: -0.02em;
        color: var(--wa-navy);
        margin-bottom: 16px;
    }

    .whatsappBlue-benefits_title span {
        display: block;
        background: var(--wa-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappBlue-benefits_description {
        font-size: 15px;
        line-height: 1.6;
        color: var(--wa-text-secondary);
    }

    /* ---------- Grid ---------- */

    .whatsappBlue-benefits_grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 22px;
        margin-bottom: 40px;
    }

    /* ---------- Card base ---------- */

    .whatsappBlue-benefit-card {
        position: relative;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: var(--wa-radius-lg);
        padding: 26px;
        box-shadow: var(--wa-shadow-sm);
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .whatsappBlue-benefit-card:not(.featured) {
        flex: 0 0 calc((100% - 44px) / 3);
    }

    .whatsappBlue-benefit-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--wa-shadow-green);
    }

    .whatsappBlue-benefit-card_top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .whatsappBlue-benefit-number {
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.06em;
        color: var(--wa-text-muted);
    }

    .whatsappBlue-benefit-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: var(--wa-radius-md);
        font-size: 19px;
    }

    .whatsappBlue-benefit-icon.green {
        background: var(--wa-green-soft);
        color: var(--wa-green-dark);
    }

    .whatsappBlue-benefit-icon.blue {
        background: var(--wa-blue-soft);
        color: var(--wa-blue-dark);
    }

    .whatsappBlue-benefit-card_content h3 {
        font-size: 16px;
        font-weight: 700;
        color: var(--wa-navy);
        margin-bottom: 8px;
    }

    .whatsappBlue-benefit-card_content p {
        font-size: 13px;
        line-height: 1.55;
        color: var(--wa-text-secondary);
    }

    /* ---------- Arrow (non-featured cards) ---------- */

    .whatsappBlue-benefit-card_arrow {
        position: absolute;
        top: 160px;
        right: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 1px solid var(--wa-border);
        color: var(--wa-text-muted);
        font-size: 12px;
        transition: transform 0.2s ease, background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
    }

    .whatsappBlue-benefit-card:hover .whatsappBlue-benefit-card_arrow {
        background: var(--wa-gradient);
        border-color: transparent;
        color: var(--wa-text-white);
        transform: translate(2px, -2px);
    }

    /* ---------- Featured card (wide bento banner) ---------- */

    .whatsappBlue-benefit-card.featured {
        flex: 1 1 100%;
        display: flex;
        align-items: center;
        gap: 32px;
        padding: 32px 36px;
        background: var(--wa-gradient-soft);
        border-color: transparent;
    }

    .whatsappBlue-benefit-card.featured .whatsappBlue-benefit-card_top {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
        margin-bottom: 0;
        flex-shrink: 0;
    }

    .whatsappBlue-benefit-card.featured .whatsappBlue-benefit-number {
        font-size: 14px;
        color: var(--wa-green-dark);
    }

    .whatsappBlue-benefit-card.featured .whatsappBlue-benefit-icon {
        width: 60px;
        height: 60px;
        font-size: 24px;
        background: var(--wa-surface);
        box-shadow: var(--wa-shadow-sm);
    }

    .whatsappBlue-benefit-card.featured .whatsappBlue-benefit-card_content {
        flex: 1;
        min-width: 0;
    }

    .whatsappBlue-benefit-card.featured .whatsappBlue-benefit-card_content h3 {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .whatsappBlue-benefit-card.featured .whatsappBlue-benefit-card_content p {
        font-size: 14px;
        max-width: 440px;
    }

    /* ---------- Featured decorative visual ---------- */

    .whatsappBlue-benefit-card_visual {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
        margin-left: auto;
        padding-right: 8px;
    }

    .benefit-line {
        width: 56px;
        height: 2px;
        border-radius: 2px;
        background: linear-gradient(90deg, transparent, var(--wa-green-light));
    }

    .benefit-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--wa-gradient);
        opacity: 0.55;
    }

    .benefit-dot:nth-child(3) {
        width: 10px;
        height: 10px;
        opacity: 0.75;
    }

    .benefit-dot:nth-child(4) {
        width: 12px;
        height: 12px;
        opacity: 1;
    }

    /* ---------- Bottom highlight ---------- */

    .whatsappBlue-benefits_highlight {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 20px 24px;
        background: var(--wa-blue-soft);
        border: 1px solid var(--wa-blue-pale);
        border-radius: var(--wa-radius-lg);
    }

    .whatsappBlue-benefits_highlight-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        flex-shrink: 0;
        border-radius: 50%;
        background: var(--wa-gradient-blue);
        color: var(--wa-text-white);
        font-size: 18px;
    }

    .whatsappBlue-benefits_highlight-content {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .whatsappBlue-benefits_highlight-content strong {
        font-size: 14px;
        font-weight: 700;
        color: var(--wa-navy);
    }

    .whatsappBlue-benefits_highlight-content span {
        font-size: 13px;
        line-height: 1.5;
        color: var(--wa-text-secondary);
    }

    /* ============================================
       RESPONSIVE
       Grid steps 3 → 2 → 1 columns; featured card
       always spans the full row width. Sizes and
       the decorative visual scale down or drop out
       rather than restructuring the card internals.
       ============================================ */

    @media (max-width: 980px) {
        .whatsappBlue-benefits {
            padding: 64px 0;
        }

        .whatsappBlue-benefits_title {
            font-size: 30px;
        }

        .whatsappBlue-benefits_grid {
            gap: 18px;
        }

        .whatsappBlue-benefit-card:not(.featured) {
            flex-basis: calc((100% - 18px) / 2);
        }

        .whatsappBlue-benefit-card.featured {
            gap: 20px;
        }

        .whatsappBlue-benefit-card_visual {
            display: none;
        }
    }

    @media (max-width: 640px) {
        .whatsappBlue-benefits {
            padding: 48px 0;
        }

        .whatsappBlue-benefits_title {
            font-size: 24px;
        }

        .whatsappBlue-benefits_description {
            font-size: 14px;
        }

        .whatsappBlue-benefit-card:not(.featured) {
            flex-basis: 100%;
        }

        .whatsappBlue-benefit-card {
            padding: 20px;
        }

        .whatsappBlue-benefit-card.featured {
            flex-direction: column;
            align-items: flex-start;
            padding: 24px 22px;
        }

        .whatsappBlue-benefit-card.featured .whatsappBlue-benefit-card_content h3 {
            font-size: 19px;
        }

        .whatsappBlue-benefits_highlight {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .whatsappBlue-benefit-card {
            transition: none;
        }
    }
</style>

<!-- ============================================
     SECTION 5 — BENEFITS
     ============================================ -->

<section class="whatsappBlue-benefits" id="whatsappBlueBenefits">

    <div class="container">

        <!-- Section Header -->
        <div class="whatsappBlue-benefits_header">

            <span class="whatsappBlue-section_badge">
                <i class="fa-solid fa-sparkles"></i>
                Business Benefits
            </span>

            <h2 class="whatsappBlue-benefits_title">
                More Than a Tick.
                <span>A Stronger Business Presence.</span>
            </h2>

            <p class="whatsappBlue-benefits_description">
                A verified WhatsApp presence can support your brand
                credibility and help create a more professional
                experience for your customers.
            </p>

        </div>


        <!-- Benefits Grid -->
        <div class="whatsappBlue-benefits_grid">

            <!-- Benefit 01 -->
            <article class="whatsappBlue-benefit-card featured">

                <div class="whatsappBlue-benefit-card_top">

                    <span class="whatsappBlue-benefit-number">
                        01
                    </span>

                    <div class="whatsappBlue-benefit-icon green">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                </div>

                <div class="whatsappBlue-benefit-card_content">

                    <h3>
                        Build Brand Credibility
                    </h3>

                    <p>
                        Present your business with a recognizable
                        and professional identity that helps strengthen
                        customer confidence.
                    </p>

                </div>

                <div class="whatsappBlue-benefit-card_visual">
                    <span class="benefit-line"></span>
                    <span class="benefit-dot"></span>
                    <span class="benefit-dot"></span>
                    <span class="benefit-dot"></span>
                </div>

            </article>


            <!-- Benefit 02 -->
            <article class="whatsappBlue-benefit-card">

                <div class="whatsappBlue-benefit-card_top">

                    <span class="whatsappBlue-benefit-number">
                        02
                    </span>

                    <div class="whatsappBlue-benefit-icon blue">
                        <i class="fa-solid fa-user-check"></i>
                    </div>

                </div>

                <div class="whatsappBlue-benefit-card_content">

                    <h3>
                        Help Customers Identify You
                    </h3>

                    <p>
                        Make it easier for customers to recognize
                        your intended business presence when they
                        interact with you on WhatsApp.
                    </p>

                </div>

                <div class="whatsappBlue-benefit-card_arrow">
                    <i class="fa-solid fa-arrow-up-right"></i>
                </div>

            </article>


            <!-- Benefit 03 -->
            <article class="whatsappBlue-benefit-card">

                <div class="whatsappBlue-benefit-card_top">

                    <span class="whatsappBlue-benefit-number">
                        03
                    </span>

                    <div class="whatsappBlue-benefit-icon green">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>

                </div>

                <div class="whatsappBlue-benefit-card_content">

                    <h3>
                        Strengthen Brand Recognition
                    </h3>

                    <p>
                        Build a consistent identity across your
                        customer conversations and business
                        communication.
                    </p>

                </div>

                <div class="whatsappBlue-benefit-card_arrow">
                    <i class="fa-solid fa-arrow-up-right"></i>
                </div>

            </article>


            <!-- Benefit 04 -->
            <article class="whatsappBlue-benefit-card">

                <div class="whatsappBlue-benefit-card_top">

                    <span class="whatsappBlue-benefit-number">
                        04
                    </span>

                    <div class="whatsappBlue-benefit-icon blue">
                        <i class="fa-solid fa-comments"></i>
                    </div>

                </div>

                <div class="whatsappBlue-benefit-card_content">

                    <h3>
                        Improve Customer Confidence
                    </h3>

                    <p>
                        Give customers an additional reason to feel
                        confident when communicating with your business.
                    </p>

                </div>

                <div class="whatsappBlue-benefit-card_arrow">
                    <i class="fa-solid fa-arrow-up-right"></i>
                </div>

            </article>


            <!-- Benefit 05 -->
            <article class="whatsappBlue-benefit-card">

                <div class="whatsappBlue-benefit-card_top">

                    <span class="whatsappBlue-benefit-number">
                        05
                    </span>

                    <div class="whatsappBlue-benefit-icon green">
                        <i class="fa-solid fa-store"></i>
                    </div>

                </div>

                <div class="whatsappBlue-benefit-card_content">

                    <h3>
                        Look More Professional
                    </h3>

                    <p>
                        Give your WhatsApp business presence a
                        polished identity that aligns with your
                        overall brand.
                    </p>

                </div>

                <div class="whatsappBlue-benefit-card_arrow">
                    <i class="fa-solid fa-arrow-up-right"></i>
                </div>

            </article>


            <!-- Benefit 06 -->
            <article class="whatsappBlue-benefit-card">

                <div class="whatsappBlue-benefit-card_top">

                    <span class="whatsappBlue-benefit-number">
                        06
                    </span>

                    <div class="whatsappBlue-benefit-icon blue">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>

                </div>

                <div class="whatsappBlue-benefit-card_content">

                    <h3>
                        Support Business Growth
                    </h3>

                    <p>
                        Combine a professional WhatsApp presence
                        with your wider customer engagement and
                        communication strategy.
                    </p>

                </div>

                <div class="whatsappBlue-benefit-card_arrow">
                    <i class="fa-solid fa-arrow-up-right"></i>
                </div>

            </article>

        </div>


        <!-- Bottom Highlight -->
        <div class="whatsappBlue-benefits_highlight">

            <div class="whatsappBlue-benefits_highlight-icon">
                <i class="fa-solid fa-circle-check"></i>
            </div>

            <div class="whatsappBlue-benefits_highlight-content">

                <strong>
                    Verification is a trust signal, not a guarantee.
                </strong>

                <span>
                    Eligibility and approval are determined according
                    to WhatsApp and Meta's applicable requirements.
                </span>

            </div>

        </div>

    </div>

</section>