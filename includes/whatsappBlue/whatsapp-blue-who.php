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
       SECTION 6 — WHO SHOULD GET VERIFIED?
       ============================================ */

    .whatsappBlue-who {
        position: relative;
        padding: 40px 0;
        background: var(--wa-bg-soft);
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

    .whatsappBlue-who_header {
        text-align: center;
        max-width: 640px;
        margin: 0 auto 48px;
    }

    .whatsappBlue-who_title {
        font-size: 38px;
        line-height: 1.3;
        font-weight: 800;
        letter-spacing: -0.02em;
        color: var(--wa-navy);
        margin-bottom: 16px;
    }

    .whatsappBlue-who_title span {
        display: block;
        background: var(--wa-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappBlue-who_description {
        font-size: 15px;
        line-height: 1.6;
        color: var(--wa-text-secondary);
    }

    /* ---------- Wrapper ---------- */

    .whatsappBlue-who_wrapper {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 32px;
        align-items: start;
    }

    /* ---------- Left: category cards ---------- */

    .whatsappBlue-who_categories {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
    }

    .whatsappBlue-who_card {
        position: relative;
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 22px 22px 22px 20px;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: var(--wa-radius-lg);
        box-shadow: var(--wa-shadow-sm);
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .whatsappBlue-who_card:hover {
        transform: translateY(-4px);
        box-shadow: var(--wa-shadow-green);
    }

    .whatsappBlue-who_card-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        flex-shrink: 0;
        border-radius: var(--wa-radius-md);
        font-size: 17px;
    }

    .whatsappBlue-who_card-icon.green {
        background: var(--wa-green-soft);
        color: var(--wa-green-dark);
    }

    .whatsappBlue-who_card-icon.blue {
        background: var(--wa-blue-soft);
        color: var(--wa-blue-dark);
    }

    .whatsappBlue-who_card-content {
        flex: 1;
        min-width: 0;
        padding-right: 20px;
    }

    .whatsappBlue-who_card-content span {
        display: block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.06em;
        color: var(--wa-text-muted);
        margin-bottom: 8px;
    }

    .whatsappBlue-who_card-content h3 {
        font-size: 15px;
        font-weight: 700;
        color: var(--wa-navy);
        margin-bottom: 6px;
    }

    .whatsappBlue-who_card-content p {
        font-size: 12.5px;
        line-height: 1.55;
        color: var(--wa-text-secondary);
    }

    .whatsappBlue-who_card-arrow {
        position: absolute;
        top: 20px;
        right: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        border: 1px solid var(--wa-border);
        color: var(--wa-text-muted);
        font-size: 11px;
        transition: transform 0.2s ease, background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
    }

    .whatsappBlue-who_card:hover .whatsappBlue-who_card-arrow {
        background: var(--wa-gradient);
        border-color: transparent;
        color: var(--wa-text-white);
        transform: translate(2px, -2px);
    }

    /* ---------- Right: qualification panel ---------- */

    .whatsappBlue-who_panel {
        position: relative;
        position: sticky;
        top: 32px;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: var(--wa-radius-xl);
        box-shadow: var(--wa-shadow-blue);
        padding: 36px 32px;
        overflow: hidden;
    }

    .whatsappBlue-who_panel-glow {
        position: absolute;
        top: -80px;
        right: -80px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: var(--wa-gradient);
        opacity: 0.14;
        filter: blur(50px);
        z-index: 0;
        pointer-events: none;
    }

    .whatsappBlue-who_panel-content {
        position: relative;
        z-index: 1;
    }

    .whatsappBlue-who_panel-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: var(--wa-gradient-green);
        color: var(--wa-text-white);
        font-size: 22px;
        margin-bottom: 18px;
    }

    .whatsappBlue-who_panel-label {
        display: inline-block;
        padding: 4px 12px;
        margin-bottom: 14px;
        background: var(--wa-green-soft);
        color: var(--wa-green-dark);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.08em;
        border-radius: 999px;
    }

    .whatsappBlue-who_panel-content h3 {
        font-size: 22px;
        line-height: 1.3;
        font-weight: 700;
        color: var(--wa-navy);
        margin-bottom: 12px;
    }

    .whatsappBlue-who_panel-content > p {
        font-size: 14px;
        line-height: 1.6;
        color: var(--wa-text-secondary);
        margin-bottom: 24px;
    }

    /* ---------- Checklist ---------- */

    .whatsappBlue-who_checklist {
        display: flex;
        flex-direction: column;
        gap: 14px;
        padding-bottom: 28px;
        margin-bottom: 28px;
        border-bottom: 1px solid var(--wa-border);
    }

    .whatsappBlue-who_check {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .whatsappBlue-who_check span {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 26px;
        height: 26px;
        flex-shrink: 0;
        border-radius: 50%;
        background: var(--wa-green-soft);
        color: var(--wa-green-dark);
        font-size: 11px;
    }

    .whatsappBlue-who_check p {
        font-size: 13.5px;
        line-height: 1.4;
        color: var(--wa-text-primary);
    }

    /* ---------- CTA ---------- */

    .whatsappBlue-who_cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        padding: 15px 28px;
        background: var(--wa-gradient);
        color: var(--wa-text-white);
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        border-radius: 999px;
        box-shadow: var(--wa-shadow-green);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .whatsappBlue-who_cta i {
        font-size: 13px;
        transition: transform 0.2s ease;
    }

    .whatsappBlue-who_cta:hover {
        transform: translateY(-2px);
        box-shadow: 0 20px 45px rgba(37, 211, 102, 0.28);
    }

    .whatsappBlue-who_cta:hover i {
        transform: translateX(3px);
    }

    /* ============================================
       RESPONSIVE
       Panel unsticks and moves below the category
       list; category grid steps 2 → 1 columns.
       Sizes scale down rather than restructuring
       individual cards.
       ============================================ */

    @media (max-width: 980px) {
        .whatsappBlue-who {
            padding: 64px 0;
        }

        .whatsappBlue-who_title {
            font-size: 30px;
        }

        .whatsappBlue-who_wrapper {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .whatsappBlue-who_panel {
            position: static;
        }
    }

    @media (max-width: 640px) {
        .whatsappBlue-who {
            padding: 48px 0;
        }

        .whatsappBlue-who_title {
            font-size: 24px;
        }

        .whatsappBlue-who_description {
            font-size: 14px;
        }

        .whatsappBlue-who_categories {
            grid-template-columns: 1fr;
        }

        .whatsappBlue-who_card {
            padding: 18px;
        }

        .whatsappBlue-who_card-content {
            padding-right: 0;
        }

        .whatsappBlue-who_card-arrow {
            display: none;
        }

        .whatsappBlue-who_panel {
            padding: 28px 22px;
        }

        .whatsappBlue-who_panel-content h3 {
            font-size: 19px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .whatsappBlue-who_card,
        .whatsappBlue-who_cta {
            transition: none;
        }
    }
</style>

<!-- ============================================
     SECTION 6 — WHO SHOULD GET VERIFIED?
     ============================================ -->

<section class="whatsappBlue-who" id="whatsappBlueWho">

    <div class="container">

        <!-- Section Header -->
        <div class="whatsappBlue-who_header">

            <span class="whatsappBlue-section_badge">
                <i class="fa-solid fa-users"></i>
                Built for Businesses
            </span>

            <h2 class="whatsappBlue-who_title">
                Is WhatsApp Verification
                <span>Right for Your Business?</span>
            </h2>

            <p class="whatsappBlue-who_description">
                Businesses that depend on customer communication can
                benefit from building a recognizable and professional
                presence on WhatsApp.
            </p>

        </div>


        <!-- Main Content -->
        <div class="whatsappBlue-who_wrapper">


            <!-- =================================
                 LEFT — BUSINESS TYPES
                 ================================= -->

            <div class="whatsappBlue-who_categories">

                <!-- Category 01 -->
                <article class="whatsappBlue-who_card">

                    <div class="whatsappBlue-who_card-icon green">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>

                    <div class="whatsappBlue-who_card-content">

                        <span>
                            01
                        </span>

                        <h3>
                            E-Commerce Businesses
                        </h3>

                        <p>
                            Build confidence around customer conversations,
                            order updates and business communication.
                        </p>

                    </div>

                    <i class="fa-solid fa-arrow-up-right whatsappBlue-who_card-arrow"></i>

                </article>


                <!-- Category 02 -->
                <article class="whatsappBlue-who_card">

                    <div class="whatsappBlue-who_card-icon blue">
                        <i class="fa-solid fa-store"></i>
                    </div>

                    <div class="whatsappBlue-who_card-content">

                        <span>
                            02
                        </span>

                        <h3>
                            D2C & Consumer Brands
                        </h3>

                        <p>
                            Establish a recognizable WhatsApp presence
                            for customers interacting directly with your brand.
                        </p>

                    </div>

                    <i class="fa-solid fa-arrow-up-right whatsappBlue-who_card-arrow"></i>

                </article>


                <!-- Category 03 -->
                <article class="whatsappBlue-who_card">

                    <div class="whatsappBlue-who_card-icon green">
                        <i class="fa-solid fa-building"></i>
                    </div>

                    <div class="whatsappBlue-who_card-content">

                        <span>
                            03
                        </span>

                        <h3>
                            Established Businesses
                        </h3>

                        <p>
                            Strengthen your existing business identity
                            across customer communication channels.
                        </p>

                    </div>

                    <i class="fa-solid fa-arrow-up-right whatsappBlue-who_card-arrow"></i>

                </article>


                <!-- Category 04 -->
                <article class="whatsappBlue-who_card">

                    <div class="whatsappBlue-who_card-icon blue">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>

                    <div class="whatsappBlue-who_card-content">

                        <span>
                            04
                        </span>

                        <h3>
                            Marketing & Digital Agencies
                        </h3>

                        <p>
                            Help maintain a professional communication
                            identity when managing customer-facing brands.
                        </p>

                    </div>

                    <i class="fa-solid fa-arrow-up-right whatsappBlue-who_card-arrow"></i>

                </article>


                <!-- Category 05 -->
                <article class="whatsappBlue-who_card">

                    <div class="whatsappBlue-who_card-icon green">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <div class="whatsappBlue-who_card-content">

                        <span>
                            05
                        </span>

                        <h3>
                            Service Businesses
                        </h3>

                        <p>
                            Create a professional WhatsApp presence for
                            enquiries, customer support and business conversations.
                        </p>

                    </div>

                    <i class="fa-solid fa-arrow-up-right whatsappBlue-who_card-arrow"></i>

                </article>


                <!-- Category 06 -->
                <article class="whatsappBlue-who_card">

                    <div class="whatsappBlue-who_card-icon blue">
                        <i class="fa-solid fa-rocket"></i>
                    </div>

                    <div class="whatsappBlue-who_card-content">

                        <span>
                            06
                        </span>

                        <h3>
                            Growing Startups
                        </h3>

                        <p>
                            Establish a recognizable business identity as
                            your customer base and communication needs grow.
                        </p>

                    </div>

                    <i class="fa-solid fa-arrow-up-right whatsappBlue-who_card-arrow"></i>

                </article>

            </div>


            <!-- =================================
                 RIGHT — QUALIFICATION PANEL
                 ================================= -->

            <div class="whatsappBlue-who_panel">

                <div class="whatsappBlue-who_panel-glow"></div>

                <div class="whatsappBlue-who_panel-content">

                    <div class="whatsappBlue-who_panel-icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>

                    <span class="whatsappBlue-who_panel-label">
                        GOOD FIT
                    </span>

                    <h3>
                        Your Business Relies
                        on Customer Conversations
                    </h3>

                    <p>
                        If WhatsApp is an important part of how your
                        customers discover, contact or communicate
                        with your business, a professional business
                        presence can be valuable.
                    </p>


                    <!-- Checklist -->

                    <div class="whatsappBlue-who_checklist">

                        <div class="whatsappBlue-who_check">

                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>

                            <p>
                                You communicate with customers on WhatsApp
                            </p>

                        </div>


                        <div class="whatsappBlue-who_check">

                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>

                            <p>
                                Your business has an established identity
                            </p>

                        </div>


                        <div class="whatsappBlue-who_check">

                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>

                            <p>
                                Brand trust is important to your business
                            </p>

                        </div>


                        <div class="whatsappBlue-who_check">

                            <span>
                                <i class="fa-solid fa-check"></i>
                            </span>

                            <p>
                                You want guidance through the verification process
                            </p>

                        </div>

                    </div>


                    <!-- CTA -->

                    <a href="#contact" class="whatsappBlue-who_cta">
                        Check Your Eligibility
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>