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
       SECTION 4 — WHY GET VERIFIED?
       ============================================ */

    .whatsappBlue-why {
        position: relative;
        padding: 88px 0;
        background: var(--wa-green-soft);
        overflow: hidden;
    }

    .whatsappBlue-why_bg {
        position: absolute;
        top: -160px;
        left: -160px;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: var(--wa-gradient-soft);
        filter: blur(10px);
        opacity: 0.6;
        pointer-events: none;
        z-index: 0;
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

    .whatsappBlue-why_header {
        position: relative;
        z-index: 1;
        text-align: center;
        max-width: 640px;
        margin: 0 auto 56px;
    }

    .whatsappBlue-why_title {
        font-size: 38px;
        line-height: 1.3;
        font-weight: 800;
        letter-spacing: -0.02em;
        color: var(--wa-navy);
        margin-bottom: 16px;
    }

    .whatsappBlue-why_title span {
        background: var(--wa-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappBlue-why_description {
        font-size: 15px;
        line-height: 1.6;
        color: var(--wa-text-secondary);
    }

    /* ---------- Wrapper ---------- */

    .whatsappBlue-why_wrapper {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 56px;
        align-items: center;
    }

    /* ---------- Left: benefit cards ---------- */

    .whatsappBlue-why_benefits {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .whatsappBlue-why_card {
        position: relative;
        display: flex;
        align-items: flex-start;
        gap: 18px;
        padding: 22px;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: var(--wa-radius-lg);
        box-shadow: var(--wa-shadow-sm);
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
    }

    .whatsappBlue-why_card:hover {
        transform: translateY(-4px);
        border-color: transparent;
        box-shadow: var(--wa-shadow-green);
    }

    .whatsappBlue-why_card-number {
        position: absolute;
        right: 12px;
        bottom: -14px;
        font-size: 64px;
        font-weight: 800;
        line-height: 1;
        color: var(--wa-navy);
        opacity: 0.05;
        pointer-events: none;
        z-index: 0;
    }

    .whatsappBlue-why_card-icon {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        flex-shrink: 0;
        border-radius: var(--wa-radius-md);
        font-size: 20px;
    }

    .whatsappBlue-why_card-icon.green {
        background: var(--wa-green-soft);
        color: var(--wa-green-dark);
    }

    .whatsappBlue-why_card-icon.blue {
        background: var(--wa-blue-soft);
        color: var(--wa-blue-dark);
    }

    .whatsappBlue-why_card-content {
        position: relative;
        z-index: 1;
        flex: 1;
        min-width: 0;
        padding-right: 28px;
    }

    .whatsappBlue-why_card-content h3 {
        font-size: 17px;
        font-weight: 700;
        color: var(--wa-navy);
        margin-bottom: 6px;
    }

    .whatsappBlue-why_card-content p {
        font-size: 13px;
        line-height: 1.55;
        color: var(--wa-text-secondary);
    }

    .whatsappBlue-why_card-arrow {
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        border: 1px solid var(--wa-border);
        color: var(--wa-text-muted);
        font-size: 13px;
        transition: transform 0.2s ease, background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
    }

    .whatsappBlue-why_card:hover .whatsappBlue-why_card-arrow {
        background: var(--wa-gradient);
        border-color: transparent;
        color: var(--wa-text-white);
        transform: translate(2px, -2px);
    }

    /* ---------- Right: verification visual ---------- */

    .whatsappBlue-why_visual {
        position: relative;
        z-index: 1;
        min-height: 460px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .whatsappBlue-why_visual-glow {
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: var(--wa-gradient);
        opacity: 0.16;
        filter: blur(60px);
        z-index: 0;
    }

    /* ---------- Central verification card ---------- */

    .whatsappBlue-why_verification {
        position: relative;
        z-index: 2;
        width: 240px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 32px 24px;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: var(--wa-radius-xl);
        box-shadow: var(--wa-shadow-blue);
    }

    .whatsappBlue-why_verification-ring {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 88px;
        height: 88px;
        border-radius: 50%;
        background: var(--wa-gradient);
        padding: 4px;
        margin-bottom: 16px;
    }

    .whatsappBlue-why_verification-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: var(--wa-surface);
        color: var(--wa-green-dark);
        font-size: 28px;
    }

    .whatsappBlue-why_verification-label {
        display: inline-block;
        padding: 4px 12px;
        margin-bottom: 12px;
        background: var(--wa-green-soft);
        color: var(--wa-green-dark);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.08em;
        border-radius: 999px;
    }

    .whatsappBlue-why_verification h3 {
        font-size: 18px;
        font-weight: 700;
        color: var(--wa-navy);
        margin-bottom: 6px;
    }

    .whatsappBlue-why_verification p {
        font-size: 13px;
        line-height: 1.5;
        color: var(--wa-text-muted);
    }

    /* ---------- Floating cards ---------- */

    .whatsappBlue-why_float {
        position: absolute;
        z-index: 3;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: var(--wa-radius-md);
        box-shadow: var(--wa-shadow-sm);
    }

    .whatsappBlue-why_float-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        flex-shrink: 0;
        border-radius: 50%;
        font-size: 13px;
    }

    .whatsappBlue-why_float-icon.green {
        background: var(--wa-green-soft);
        color: var(--wa-green-dark);
    }

    .whatsappBlue-why_float-icon.blue {
        background: var(--wa-blue-soft);
        color: var(--wa-blue-dark);
    }

    .whatsappBlue-why_float-content {
        display: flex;
        flex-direction: column;
        gap: 1px;
    }

    .whatsappBlue-why_float-content strong {
        font-size: 12px;
        font-weight: 700;
        color: var(--wa-navy);
        white-space: nowrap;
    }

    .whatsappBlue-why_float-content span {
        font-size: 11px;
        color: var(--wa-text-muted);
        white-space: nowrap;
    }

    .whatsappBlue-why_float-check {
        font-size: 12px;
        color: var(--wa-green-dark);
        flex-shrink: 0;
        margin-left: 2px;
    }

    .whatsappBlue-why_float-trust {
        top: 2%;
        left: 0;
    }

    .whatsappBlue-why_float-brand {
        bottom: 6%;
        right: 0;
    }

    .whatsappBlue-why_float-recognition {
        top: 42%;
        right: -4%;
    }

    /* ---------- Decorative dots ---------- */

    .whatsappBlue-why_dot {
        position: absolute;
        border-radius: 50%;
        z-index: 1;
        pointer-events: none;
    }

    .whatsappBlue-why_dot.dot-1 {
        width: 14px;
        height: 14px;
        top: 8%;
        right: 18%;
        background: var(--wa-green-light);
        opacity: 0.5;
    }

    .whatsappBlue-why_dot.dot-2 {
        width: 10px;
        height: 10px;
        bottom: 16%;
        left: 8%;
        background: var(--wa-blue-light);
        opacity: 0.5;
    }

    .whatsappBlue-why_dot.dot-3 {
        width: 8px;
        height: 8px;
        top: 66%;
        right: 6%;
        background: var(--wa-green);
        opacity: 0.4;
    }

    /* ============================================
       RESPONSIVE
       Wrapper stacks below the benefit list; floating
       cards pull inside the visual bounds so nothing
       clips the viewport. Sizes scale down beyond that.
       ============================================ */

    @media (max-width: 980px) {
        .whatsappBlue-why {
            padding: 64px 0;
        }

        .whatsappBlue-why_title {
            font-size: 30px;
        }

        .whatsappBlue-why_wrapper {
            grid-template-columns: 1fr;
            gap: 48px;
        }

        .whatsappBlue-why_visual {
            min-height: 380px;
        }

        .whatsappBlue-why_float-trust {
            top: 4%;
            left: 2%;
        }

        .whatsappBlue-why_float-brand {
            bottom: 8%;
            right: 2%;
        }

        .whatsappBlue-why_float-recognition {
            top: 44%;
            right: 2%;
        }
    }

    @media (max-width: 560px) {
        .whatsappBlue-why {
            padding: 48px 0;
        }

        .whatsappBlue-why_title {
            font-size: 24px;
        }

        .whatsappBlue-why_description {
            font-size: 14px;
        }

        .whatsappBlue-why_card {
            padding: 16px;
            gap: 14px;
        }

        .whatsappBlue-why_card-icon {
            width: 42px;
            height: 42px;
            font-size: 16px;
        }

        .whatsappBlue-why_card-content {
            padding-right: 0;
        }

        .whatsappBlue-why_card-arrow {
            display: none;
        }

        .whatsappBlue-why_verification {
            width: 200px;
            padding: 24px 18px;
        }

        .whatsappBlue-why_visual {
            min-height: 320px;
        }

        .whatsappBlue-why_float {
            padding: 8px 10px;
        }

        .whatsappBlue-why_float-icon {
            width: 26px;
            height: 26px;
            font-size: 11px;
        }

        .whatsappBlue-why_float-content strong {
            font-size: 11px;
        }

        .whatsappBlue-why_float-content span {
            font-size: 10px;
        }

        .whatsappBlue-why_float-recognition {
            display: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .whatsappBlue-why_card {
            transition: none;
        }
    }
</style>
<!-- ============================================
     SECTION 4 — WHY GET VERIFIED?
     ============================================ -->

<section class="whatsappBlue-why" id="whatsappBlueWhy">

    <!-- Background Decoration -->
    <div class="whatsappBlue-why_bg"></div>

    <div class="container">

        <!-- Section Header -->
        <div class="whatsappBlue-why_header">

            <span class="whatsappBlue-section_badge">
                <i class="fa-solid fa-circle-check"></i>
                Why Verification Matters
            </span>

            <h2 class="whatsappBlue-why_title">
                Turn Your WhatsApp Presence
                Into a <span>Trusted Brand</span>
            </h2>

            <p class="whatsappBlue-why_description">
                A verified business presence can help customers
                recognize your brand and feel more confident when
                interacting with your business on WhatsApp.
            </p>

        </div>


        <!-- Main Content -->
        <div class="whatsappBlue-why_wrapper">


            <!-- =================================
                 LEFT — BENEFITS
                 ================================= -->

            <div class="whatsappBlue-why_benefits">

                <!-- Benefit 01 -->
                <div class="whatsappBlue-why_card">

                    <div class="whatsappBlue-why_card-number">
                        01
                    </div>

                    <div class="whatsappBlue-why_card-icon green">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div class="whatsappBlue-why_card-content">

                        <h3>
                            Build Customer Trust
                        </h3>

                        <p>
                            Give customers an additional signal that
                            they are interacting with your intended
                            business presence.
                        </p>

                    </div>

                    <div class="whatsappBlue-why_card-arrow">
                        <i class="fa-solid fa-arrow-up-right"></i>
                    </div>

                </div>


                <!-- Benefit 02 -->
                <div class="whatsappBlue-why_card">

                    <div class="whatsappBlue-why_card-number">
                        02
                    </div>

                    <div class="whatsappBlue-why_card-icon blue">
                        <i class="fa-solid fa-building"></i>
                    </div>

                    <div class="whatsappBlue-why_card-content">

                        <h3>
                            Strengthen Your Brand
                        </h3>

                        <p>
                            Create a more professional and recognizable
                            business identity across your customer
                            communication.
                        </p>

                    </div>

                    <div class="whatsappBlue-why_card-arrow">
                        <i class="fa-solid fa-arrow-up-right"></i>
                    </div>

                </div>


                <!-- Benefit 03 -->
                <div class="whatsappBlue-why_card">

                    <div class="whatsappBlue-why_card-number">
                        03
                    </div>

                    <div class="whatsappBlue-why_card-icon green">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <div class="whatsappBlue-why_card-content">

                        <h3>
                            Stand Out From Imposters
                        </h3>

                        <p>
                            Make your business identity easier for
                            customers to recognize when communicating
                            through WhatsApp.
                        </p>

                    </div>

                    <div class="whatsappBlue-why_card-arrow">
                        <i class="fa-solid fa-arrow-up-right"></i>
                    </div>

                </div>


                <!-- Benefit 04 -->
                <div class="whatsappBlue-why_card">

                    <div class="whatsappBlue-why_card-number">
                        04
                    </div>

                    <div class="whatsappBlue-why_card-icon blue">
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <div class="whatsappBlue-why_card-content">

                        <h3>
                            Create a Professional Presence
                        </h3>

                        <p>
                            Present your business with a polished
                            identity that supports long-term customer
                            relationships.
                        </p>

                    </div>

                    <div class="whatsappBlue-why_card-arrow">
                        <i class="fa-solid fa-arrow-up-right"></i>
                    </div>

                </div>

            </div>


            <!-- =================================
                 RIGHT — VERIFICATION VISUAL
                 ================================= -->

            <div class="whatsappBlue-why_visual">

                <div class="whatsappBlue-why_visual-glow"></div>


                <!-- Central Verification Card -->

                <div class="whatsappBlue-why_verification">

                    <div class="whatsappBlue-why_verification-ring">

                        <div class="whatsappBlue-why_verification-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>

                    </div>

                    <span class="whatsappBlue-why_verification-label">
                        VERIFIED
                    </span>

                    <h3>
                        Your Business
                    </h3>

                    <p>
                        A recognizable identity
                        customers can trust.
                    </p>

                </div>


                <!-- Floating Trust Card -->

                <div class="whatsappBlue-why_float whatsappBlue-why_float-trust">

                    <div class="whatsappBlue-why_float-icon green">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div class="whatsappBlue-why_float-content">

                        <strong>
                            Trust
                        </strong>

                        <span>
                            Recognizable identity
                        </span>

                    </div>

                    <i class="fa-solid fa-check whatsappBlue-why_float-check"></i>

                </div>


                <!-- Floating Brand Card -->

                <div class="whatsappBlue-why_float whatsappBlue-why_float-brand">

                    <div class="whatsappBlue-why_float-icon blue">
                        <i class="fa-solid fa-building"></i>
                    </div>

                    <div class="whatsappBlue-why_float-content">

                        <strong>
                            Brand
                        </strong>

                        <span>
                            Professional presence
                        </span>

                    </div>

                    <i class="fa-solid fa-check whatsappBlue-why_float-check"></i>

                </div>


                <!-- Floating Recognition Card -->

                <div class="whatsappBlue-why_float whatsappBlue-why_float-recognition">

                    <div class="whatsappBlue-why_float-icon green">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <div class="whatsappBlue-why_float-content">

                        <strong>
                            Recognition
                        </strong>

                        <span>
                            Easier to identify
                        </span>

                    </div>

                    <i class="fa-solid fa-check whatsappBlue-why_float-check"></i>

                </div>


                <!-- Decorative Elements -->

                <span class="whatsappBlue-why_dot dot-1"></span>
                <span class="whatsappBlue-why_dot dot-2"></span>
                <span class="whatsappBlue-why_dot dot-3"></span>

            </div>

        </div>

    </div>

</section>