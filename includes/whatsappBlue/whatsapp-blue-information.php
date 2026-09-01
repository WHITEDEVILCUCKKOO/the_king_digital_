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
       SECTION 3 — WHAT IS WHATSAPP BLUE TICK?
       ============================================ */

    .whatsappBlue-about {
        position: relative;
        padding: 40px 0;
        background: var(--wa-bg);
        overflow: hidden;
    }

    .whatsappBlue-about_bg-circle {
        position: absolute;
        top: -180px;
        right: -180px;
        width: 480px;
        height: 480px;
        border-radius: 50%;
        background: var(--wa-gradient-soft);
        filter: blur(10px);
        opacity: 0.7;
        pointer-events: none;
        z-index: 0;
    }

    .whatsappBlue-about_wrapper {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 64px;
        align-items: center;
    }

    /* ---------- Shared badge (matches other sections) ---------- */

    .whatsappBlue-section_badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        width: fit-content;
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

    /* ---------- Left: content ---------- */

    .whatsappBlue-about_content {
        display: flex;
        flex-direction: column;
    }

    .whatsappBlue-about_title {
        font-size: 38px;
        line-height: 1.2;
        font-weight: 800;
        letter-spacing: -0.02em;
        color: var(--wa-navy);
        margin-bottom: 20px;
    }

    .whatsappBlue-about_title span {
        display: block;
        background: var(--wa-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappBlue-about_text {
        font-size: 15px;
        line-height: 1.7;
        color: var(--wa-text-secondary);
        margin-bottom: 16px;
    }

    .whatsappBlue-about_text:last-of-type {
        margin-bottom: 32px;
    }

    /* ---------- Key points ---------- */

    .whatsappBlue-about_points {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .whatsappBlue-about_point {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 16px;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: var(--wa-radius-md);
        box-shadow: var(--wa-shadow-sm);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .whatsappBlue-about_point:hover {
        transform: translateY(-3px);
        box-shadow: var(--wa-shadow-green);
    }

    .whatsappBlue-about_point-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        flex-shrink: 0;
        border-radius: var(--wa-radius-sm);
        background: var(--wa-gradient);
        color: var(--wa-text-white);
        font-size: 16px;
    }

    .whatsappBlue-about_point h3 {
        font-size: 15px;
        font-weight: 700;
        color: var(--wa-navy);
        margin-bottom: 4px;
    }

    .whatsappBlue-about_point p {
        font-size: 13px;
        line-height: 1.5;
        color: var(--wa-text-muted);
    }

    /* ---------- Right: visual ---------- */

    .whatsappBlue-about_visual {
        position: relative;
        display: flex;
        justify-content: center;
    }

    .whatsappBlue-about_glow {
        position: absolute;
        width: 320px;
        height: 320px;
        border-radius: 50%;
        background: var(--wa-gradient);
        opacity: 0.18;
        filter: blur(50px);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 0;
    }

    /* ---------- Profile card (phone mockup) ---------- */

    .whatsappBlue-about_profile {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 340px;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: var(--wa-radius-xl);
        box-shadow: var(--wa-shadow-blue);
        overflow: hidden;
    }

    .whatsappBlue-about_profile-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 18px;
        background: var(--wa-gradient);
        color: var(--wa-text-white);
        font-size: 14px;
        font-weight: 600;
    }

    .profile-header_left,
    .profile-header_right {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        font-size: 13px;
        opacity: 0.9;
    }

    .whatsappBlue-about_profile-body {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 28px 22px 24px;
    }

    .whatsappBlue-about_avatar {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 84px;
        height: 84px;
        border-radius: 50%;
        background: var(--wa-gradient);
        padding: 3px;
        margin-bottom: 14px;
    }

    .whatsappBlue-about_avatar-inner {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: var(--wa-surface);
        color: var(--wa-green-dark);
        font-size: 32px;
    }

    .whatsappBlue-about_business-name h3 {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 18px;
        font-weight: 700;
        color: var(--wa-navy);
        margin-bottom: 4px;
    }

    .whatsappBlue-blue-tick {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: var(--wa-gradient-blue);
        color: var(--wa-text-white);
        font-size: 10px;
        flex-shrink: 0;
    }

    .whatsappBlue-about_business-name p {
        font-size: 13px;
        color: var(--wa-text-muted);
        margin-bottom: 20px;
    }

    /* ---------- Verified status card ---------- */

    .whatsappBlue-about_verified {
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100%;
        padding: 14px;
        background: var(--wa-green-soft);
        border: 1px solid var(--wa-green-pale);
        border-radius: var(--wa-radius-md);
        text-align: left;
        margin-bottom: 20px;
    }

    .verified-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        flex-shrink: 0;
        border-radius: 50%;
        background: var(--wa-gradient-green);
        color: var(--wa-text-white);
        font-size: 15px;
    }

    .verified-content {
        display: flex;
        flex-direction: column;
        gap: 2px;
        flex: 1;
    }

    .verified-content strong {
        font-size: 13px;
        font-weight: 700;
        color: var(--wa-navy);
    }

    .verified-content span {
        font-size: 12px;
        line-height: 1.4;
        color: var(--wa-text-muted);
    }

    .verified-check {
        font-size: 14px;
        color: var(--wa-green-dark);
        flex-shrink: 0;
    }

    /* ---------- Profile details ---------- */

    .whatsappBlue-about_details {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 0;
    }

    .about-detail {
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100%;
        padding: 12px 4px;
        text-align: left;
        border-top: 1px solid var(--wa-border);
    }

    .about-detail i {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        flex-shrink: 0;
        border-radius: var(--wa-radius-sm);
        background: var(--wa-blue-soft);
        color: var(--wa-blue-dark);
        font-size: 13px;
    }

    .about-detail div {
        display: flex;
        flex-direction: column;
        gap: 2px;
        min-width: 0;
    }

    .about-detail span {
        font-size: 11px;
        color: var(--wa-text-muted);
    }

    .about-detail strong {
        font-size: 13px;
        font-weight: 600;
        color: var(--wa-navy);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* ---------- Floating cards ---------- */

    .whatsappBlue-floating_tick,
    .whatsappBlue-floating_trust {
        position: absolute;
        z-index: 2;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: var(--wa-radius-md);
        box-shadow: var(--wa-shadow-sm);
    }

    .whatsappBlue-floating_tick {
        top: 6%;
        left: -6%;
    }

    .whatsappBlue-floating_tick span {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        flex-shrink: 0;
        border-radius: 50%;
        background: var(--wa-gradient-blue);
        color: var(--wa-text-white);
        font-size: 14px;
    }

    .whatsappBlue-floating_trust {
        bottom: 10%;
        right: -8%;
    }

    .floating-trust_icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        flex-shrink: 0;
        border-radius: 50%;
        background: var(--wa-gradient-green);
        color: var(--wa-text-white);
        font-size: 14px;
    }

    .whatsappBlue-floating_tick div,
    .whatsappBlue-floating_trust div {
        display: flex;
        flex-direction: column;
        gap: 1px;
    }

    .whatsappBlue-floating_tick strong,
    .whatsappBlue-floating_trust strong {
        font-size: 13px;
        font-weight: 700;
        color: var(--wa-navy);
        white-space: nowrap;
    }

    .whatsappBlue-floating_tick small,
    .whatsappBlue-floating_trust small {
        font-size: 11px;
        color: var(--wa-text-muted);
        white-space: nowrap;
    }

    /* ============================================
       RESPONSIVE
       Content + mockup stack on smaller viewports;
       sizes scale down progressively rather than
       reshuffling internal card structure.
       ============================================ */

    @media (max-width: 980px) {
        .whatsappBlue-about {
            padding: 64px 0;
        }

        .whatsappBlue-about_wrapper {
            grid-template-columns: 1fr;
            gap: 48px;
        }

        .whatsappBlue-about_visual {
            order: -1;
        }

        .whatsappBlue-about_title {
            font-size: 30px;
        }

        .whatsappBlue-floating_tick,
        .whatsappBlue-floating_trust {
            padding: 8px 12px;
        }

        .whatsappBlue-floating_tick {
            left: 0;
        }

        .whatsappBlue-floating_trust {
            right: 0;
        }
    }

    @media (max-width: 560px) {
        .whatsappBlue-about {
            padding: 48px 0;
        }

        .whatsappBlue-about_title {
            font-size: 24px;
        }

        .whatsappBlue-about_text {
            font-size: 14px;
        }

        .whatsappBlue-about_point {
            padding: 12px;
            gap: 12px;
        }

        .whatsappBlue-about_point-icon {
            width: 34px;
            height: 34px;
            font-size: 14px;
        }

        .whatsappBlue-about_profile {
            max-width: 300px;
        }

        .whatsappBlue-floating_tick strong,
        .whatsappBlue-floating_trust strong {
            font-size: 12px;
        }

        .whatsappBlue-floating_tick small,
        .whatsappBlue-floating_trust small {
            font-size: 10px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .whatsappBlue-about_point {
            transition: none;
        }
    }
</style>
<!-- ============================================
     SECTION 3 — WHAT IS WHATSAPP BLUE TICK?
     ============================================ -->

<section class="whatsappBlue-about" id="whatsappBlueAbout">

    <!-- Decorative Background -->
    <div class="whatsappBlue-about_bg-circle"></div>

    <div class="container">

        <div class="whatsappBlue-about_wrapper">

            <!-- =================================
                 LEFT — CONTENT
                 ================================= -->

            <div class="whatsappBlue-about_content">

                <span class="whatsappBlue-section_badge">
                    <i class="fa-solid fa-circle-info"></i>
                    Understanding Verification
                </span>

                <h2 class="whatsappBlue-about_title">
                    What Is the
                    <span>WhatsApp Blue Tick?</span>
                </h2>

                <p class="whatsappBlue-about_text">
                    The WhatsApp Blue Tick is a verification signal
                    associated with an eligible business presence on
                    WhatsApp. It helps distinguish an official business
                    presence and gives customers an additional signal
                    of authenticity.
                </p>

                <p class="whatsappBlue-about_text">
                    For growing brands, verification can become part
                    of a broader strategy to build a professional and
                    recognizable presence while communicating with
                    customers on WhatsApp.
                </p>


                <!-- Key Points -->

                <div class="whatsappBlue-about_points">

                    <div class="whatsappBlue-about_point">

                        <div class="whatsappBlue-about_point-icon">
                            <i class="fa-solid fa-check"></i>
                        </div>

                        <div>
                            <h3>Recognizable Business</h3>
                            <p>
                                Help customers identify your intended
                                business presence.
                            </p>
                        </div>

                    </div>


                    <div class="whatsappBlue-about_point">

                        <div class="whatsappBlue-about_point-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <div>
                            <h3>Added Trust Signal</h3>
                            <p>
                                Present your business with a more
                                professional identity.
                            </p>
                        </div>

                    </div>


                    <div class="whatsappBlue-about_point">

                        <div class="whatsappBlue-about_point-icon">
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div>
                            <h3>Stronger Brand Presence</h3>
                            <p>
                                Build a consistent and recognizable
                                customer communication experience.
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================
                 RIGHT — VISUAL
                 ================================= -->

            <div class="whatsappBlue-about_visual">

                <!-- Decorative Glow -->
                <div class="whatsappBlue-about_glow"></div>


                <!-- Main Profile Card -->

                <div class="whatsappBlue-about_profile">

                    <!-- Profile Header -->
                    <div class="whatsappBlue-about_profile-header">

                        <div class="profile-header_left">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>

                        <span>Business Profile</span>

                        <div class="profile-header_right">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </div>

                    </div>


                    <!-- Profile Body -->

                    <div class="whatsappBlue-about_profile-body">

                        <div class="whatsappBlue-about_avatar">

                            <div class="whatsappBlue-about_avatar-inner">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>

                        </div>


                        <!-- Business Name -->

                        <div class="whatsappBlue-about_business-name">

                            <h3>
                                Your Business

                                <span class="whatsappBlue-blue-tick">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </h3>

                            <p>Business Account</p>

                        </div>


                        <!-- Verification Status -->

                        <div class="whatsappBlue-about_verified">

                            <div class="verified-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>

                            <div class="verified-content">

                                <strong>
                                    Verified Business
                                </strong>

                                <span>
                                    Customers can recognize your
                                    official business presence.
                                </span>

                            </div>

                            <i class="fa-solid fa-check verified-check"></i>

                        </div>


                        <!-- Profile Details -->

                        <div class="whatsappBlue-about_details">

                            <div class="about-detail">

                                <i class="fa-solid fa-building"></i>

                                <div>
                                    <span>Business</span>
                                    <strong>Your Company</strong>
                                </div>

                            </div>


                            <div class="about-detail">

                                <i class="fa-solid fa-globe"></i>

                                <div>
                                    <span>Website</span>
                                    <strong>yourbusiness.com</strong>
                                </div>

                            </div>


                            <div class="about-detail">

                                <i class="fa-solid fa-location-dot"></i>

                                <div>
                                    <span>Location</span>
                                    <strong>New Delhi, India</strong>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Floating Tick -->

                <div class="whatsappBlue-floating_tick">

                    <span>
                        <i class="fa-solid fa-check"></i>
                    </span>

                    <div>
                        <strong>Verified</strong>
                        <small>Business Identity</small>
                    </div>

                </div>


                <!-- Floating Trust Card -->

                <div class="whatsappBlue-floating_trust">

                    <div class="floating-trust_icon">
                        <i class="fa-solid fa-shield-check"></i>
                    </div>

                    <div>
                        <strong>Trust Signal</strong>
                        <small>Professional Presence</small>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>