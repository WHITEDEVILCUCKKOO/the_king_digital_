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

    a {
        text-decoration: none;
        color: inherit;
    }

    /* ============================================
       HERO SECTION
       ============================================ */

    .whatsappBlue-hero {
        position: relative;
        overflow: hidden;
        padding: 40px 0;
        background: var(--wa-gradient-soft);
    }

    .whatsappBlue-hero_wrapper {
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 64px;
        align-items: center;
    }

    /* ---------- Content ---------- */

    .whatsappBlue-hero_badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px 8px 10px;
        background: var(--wa-surface);
        border: 1px solid var(--wa-border);
        border-radius: 999px;
        font-size: 13px;
        font-weight: 600;
        color: var(--wa-green-dark);
        box-shadow: var(--wa-shadow-sm);
        margin-bottom: 28px;
    }

    .whatsappBlue-hero_badge-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: var(--wa-gradient-green);
        color: var(--wa-text-white);
        font-size: 11px;
    }

    .whatsappBlue-hero_title {
        font-size: 44px;
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -0.02em;
        color: var(--wa-navy);
        margin-bottom: 24px;
    }

    .whatsappBlue-hero_title em {
        font-style: normal;
        font-size: 52px;
    }

    .whatsappBlue-hero_title span {
        display: block;
        background: var(--wa-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappBlue-hero_description {
        font-size: 18px;
        line-height: 1.6;
        color: var(--wa-text-secondary);
        max-width: 480px;
        margin-bottom: 36px;
    }

    .whatsappBlue-hero_actions {
        display: flex;
        gap: 14px;
        margin-bottom: 44px;
        flex-wrap: wrap;
    }

    .whatsapp-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 15px 26px;
        border-radius: var(--wa-radius-sm);
        font-size: 15px;
        font-weight: 600;
        transition: transform 0.15s ease, box-shadow 0.15s ease;
    }

    .whatsapp-btn-primary {
        background: var(--wa-gradient);
        color: var(--wa-text-white);
        box-shadow: var(--wa-shadow-green);
    }

    .whatsapp-btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 20px 45px rgba(37, 211, 102, 0.22);
    }

    .whatsapp-btn-secondary {
        background: var(--wa-surface);
        color: var(--wa-navy);
        border: 1px solid var(--wa-border);
    }

    .whatsapp-btn-secondary:hover {
        transform: translateY(-2px);
        box-shadow: var(--wa-shadow-sm);
    }

    .whatsapp-btn i {
        font-size: 13px;
    }

    .whatsappBlue-hero_trust {
        display: flex;
        gap: 28px;
        flex-wrap: wrap;
    }

    .whatsappBlue-hero_trust-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 13.5px;
        font-weight: 500;
        color: var(--wa-text-muted);
    }

    .whatsappBlue-hero_trust-item i {
        color: var(--wa-green-dark);
        font-size: 13px;
    }

    /* ---------- Visual ---------- */

    .whatsappBlue-hero_visual {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 560px;
    }

    .whatsappBlue-hero_orb {
        position: absolute;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: var(--wa-gradient);
        opacity: 0.14;
        filter: blur(60px);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* ---------- Profile Card ---------- */

    .whatsappBlue-profile {
        position: relative;
        width: 320px;
        background: var(--wa-surface);
        border-radius: var(--wa-radius-lg);
        box-shadow: 0 25px 60px rgba(15, 23, 42, 0.14);
        overflow: hidden;
        z-index: 2;
    }

    .whatsappBlue-profile_header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 20px;
        background: var(--wa-gradient-green);
        color: var(--wa-text-white);
        font-size: 15px;
        font-weight: 600;
    }

    .whatsappBlue-profile_back,
    .whatsappBlue-profile_header i.fa-ellipsis-vertical {
        font-size: 15px;
        opacity: 0.9;
    }

    .whatsappBlue-profile_body {
        padding: 32px 24px 28px;
        text-align: center;
    }

    .whatsappBlue-profile_avatar {
        position: relative;
        width: 84px;
        height: 84px;
        margin: 0 auto 18px;
    }

    .whatsappBlue-profile_avatar-icon {
        width: 84px;
        height: 84px;
        border-radius: 50%;
        background: var(--wa-gradient-soft);
        border: 2px solid var(--wa-green-pale);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 34px;
        color: var(--wa-green-dark);
    }

    .whatsappBlue-profile_check {
        position: absolute;
        bottom: 2px;
        right: 0;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: var(--wa-blue);
        border: 3px solid var(--wa-surface);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--wa-text-white);
        font-size: 11px;
    }

    .whatsappBlue-profile_name h3 {
        font-family: 'Manrope', sans-serif;
        font-size: 19px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        color: var(--wa-navy);
        margin-bottom: 4px;
    }

    .whatsappBlue-profile_verified {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: var(--wa-blue);
        color: var(--wa-text-white);
        font-size: 9px;
    }

    .whatsappBlue-profile_name p {
        font-size: 13.5px;
        color: var(--wa-text-muted);
        margin-bottom: 22px;
    }

    .whatsappBlue-profile_status {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 22px;
    }

    .profile-status_item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        background: var(--wa-bg-soft);
        border-radius: var(--wa-radius-sm);
        font-size: 13px;
        font-weight: 500;
        color: var(--wa-text-secondary);
    }

    .profile-status_item i {
        color: var(--wa-green-dark);
        font-size: 13px;
    }

    .whatsappBlue-profile_info {
        display: flex;
        flex-direction: column;
        gap: 14px;
        text-align: left;
        border-top: 1px solid var(--wa-border);
        padding-top: 20px;
    }

    .profile-info_item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .profile-info_item i {
        margin-top: 3px;
        color: var(--wa-blue);
        font-size: 14px;
        width: 16px;
    }

    .profile-info_item small {
        display: block;
        font-size: 11.5px;
        color: var(--wa-text-muted);
        margin-bottom: 2px;
    }

    .profile-info_item span {
        font-size: 13.5px;
        font-weight: 600;
        color: var(--wa-navy);
    }

    /* ---------- Floating elements ---------- */

    .whatsappBlue-hero_verification-badge {
        position: absolute;
        top: 30px;
        left: -10px;
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--wa-surface);
        padding: 12px 18px 12px 12px;
        border-radius: var(--wa-radius-md);
        box-shadow: var(--wa-shadow-blue);
        z-index: 3;
    }

    .verification-badge_icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: var(--wa-gradient-blue);
        color: var(--wa-text-white);
        font-size: 14px;
    }

    .verification-badge_text {
        display: flex;
        flex-direction: column;
        line-height: 1.3;
    }

    .verification-badge_text strong {
        font-size: 13.5px;
        color: var(--wa-navy);
    }

    .verification-badge_text small {
        font-size: 11.5px;
        color: var(--wa-text-muted);
    }

    .whatsappBlue-hero_notification {
        position: absolute;
        bottom: 40px;
        right: -20px;
        display: flex;
        align-items: center;
        gap: 12px;
        background: var(--wa-surface);
        padding: 14px 18px;
        border-radius: var(--wa-radius-md);
        box-shadow: var(--wa-shadow-green);
        z-index: 3;
        max-width: 250px;
    }

    .notification-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: var(--wa-gradient-green);
        color: var(--wa-text-white);
        font-size: 15px;
        flex-shrink: 0;
    }

    .notification-content {
        display: flex;
        flex-direction: column;
        line-height: 1.35;
    }

    .notification-content strong {
        font-size: 13px;
        color: var(--wa-navy);
    }

    .notification-content span {
        font-size: 11.5px;
        color: var(--wa-text-muted);
    }

    .notification-check {
        margin-left: auto;
        color: var(--wa-green-dark);
        font-size: 13px;
        flex-shrink: 0;
    }

    .whatsappBlue-decoration {
        position: absolute;
        border-radius: 50%;
        background: var(--wa-gradient);
        opacity: 0.5;
    }

    .dot-1 {
        width: 14px;
        height: 14px;
        top: 8%;
        right: 10%;
    }

    .dot-2 {
        width: 9px;
        height: 9px;
        bottom: 14%;
        left: 4%;
        opacity: 0.35;
    }

    .dot-3 {
        width: 20px;
        height: 20px;
        top: 46%;
        right: -2%;
        opacity: 0.2;
    }

    /* =========================================================
   WHATSAPP BLUE — SMOOTH FLOATING ANIMATION
   ========================================================= */

    /* Main profile card */
    .whatsappBlue-profile {
        animation: whatsappBlueFloatMain 6s ease-in-out infinite;
        will-change: transform;
    }


    /* Verification badge */
    .whatsappBlue-hero_verification-badge {
        animation: whatsappBlueFloatBadge 4.8s ease-in-out infinite;
        animation-delay: -1.2s;
        will-change: transform;
    }


    /* Notification */
    .whatsappBlue-hero_notification {
        animation: whatsappBlueFloatNotification 5.6s ease-in-out infinite;
        animation-delay: -2.4s;
        will-change: transform;
    }


    /* Background orb */
    .whatsappBlue-hero_orb {
        animation: whatsappBlueOrbFloat 8s ease-in-out infinite;
        animation-delay: -3s;
        will-change: transform;
    }


    /* Decorative dots */
    .whatsappBlue-decoration.dot-1 {
        animation: whatsappBlueDotFloat 4s ease-in-out infinite;
        animation-delay: -0.8s;
    }

    .whatsappBlue-decoration.dot-2 {
        animation: whatsappBlueDotFloat 5.5s ease-in-out infinite;
        animation-delay: -2s;
    }

    .whatsappBlue-decoration.dot-3 {
        animation: whatsappBlueDotFloat 4.7s ease-in-out infinite;
        animation-delay: -3.2s;
    }


    /* =========================================================
   MAIN CARD
   Very subtle so text/UI remains stable
   ========================================================= */

    @keyframes whatsappBlueFloatMain {

        0%,
        100% {
            transform: translate3d(0, 0, 0);
        }

        12% {
            transform: translate3d(0, -2px, 0);
        }

        25% {
            transform: translate3d(0, -5px, 0);
        }

        38% {
            transform: translate3d(0, -7px, 0);
        }

        50% {
            transform: translate3d(0, -8px, 0);
        }

        62% {
            transform: translate3d(0, -7px, 0);
        }

        75% {
            transform: translate3d(0, -4px, 0);
        }

        88% {
            transform: translate3d(0, -2px, 0);
        }
    }


    /* =========================================================
   VERIFICATION BADGE
   Slightly more movement than main card
   ========================================================= */

    @keyframes whatsappBlueFloatBadge {

        0%,
        100% {
            transform: translate3d(0, 0, 0);
        }

        15% {
            transform: translate3d(0, -3px, 0);
        }

        30% {
            transform: translate3d(0, -7px, 0);
        }

        45% {
            transform: translate3d(0, -10px, 0);
        }

        60% {
            transform: translate3d(0, -8px, 0);
        }

        75% {
            transform: translate3d(0, -4px, 0);
        }

        90% {
            transform: translate3d(0, -2px, 0);
        }
    }


    /* =========================================================
   NOTIFICATION
   ========================================================= */

    @keyframes whatsappBlueFloatNotification {

        0%,
        100% {
            transform: translate3d(0, 0, 0);
        }

        12% {
            transform: translate3d(0, -2px, 0);
        }

        25% {
            transform: translate3d(0, -5px, 0);
        }

        40% {
            transform: translate3d(0, -8px, 0);
        }

        55% {
            transform: translate3d(0, -9px, 0);
        }

        70% {
            transform: translate3d(0, -7px, 0);
        }

        85% {
            transform: translate3d(0, -3px, 0);
        }
    }


    /* =========================================================
   ORB
   Slow background movement
   ========================================================= */

    @keyframes whatsappBlueOrbFloat {

        0%,
        100% {
            transform: translate3d(0, 0, 0) scale(1);
        }

        20% {
            transform: translate3d(4px, -5px, 0) scale(1.015);
        }

        40% {
            transform: translate3d(-3px, -9px, 0) scale(1.025);
        }

        60% {
            transform: translate3d(-6px, -6px, 0) scale(1.015);
        }

        80% {
            transform: translate3d(3px, -3px, 0) scale(1.008);
        }
    }


    /* =========================================================
   DECORATIVE DOTS
   ========================================================= */

    @keyframes whatsappBlueDotFloat {

        0%,
        100% {
            transform: translate3d(0, 0, 0);
        }

        20% {
            transform: translate3d(0, -3px, 0);
        }

        40% {
            transform: translate3d(2px, -6px, 0);
        }

        60% {
            transform: translate3d(-1px, -8px, 0);
        }

        80% {
            transform: translate3d(-2px, -4px, 0);
        }
    }


    /* =========================================================
   REDUCED MOTION
   ========================================================= */

    @media (prefers-reduced-motion: reduce) {

        .whatsappBlue-profile,
        .whatsappBlue-hero_verification-badge,
        .whatsappBlue-hero_notification,
        .whatsappBlue-hero_orb,
        .whatsappBlue-decoration.dot-1,
        .whatsappBlue-decoration.dot-2,
        .whatsappBlue-decoration.dot-3 {
            animation: none;
        }
    }

    /* ============================================
       RESPONSIVE
       ============================================ */

    @media (max-width: 980px) {
        .whatsappBlue-hero_wrapper {
            grid-template-columns: 1fr;
        }

        .whatsappBlue-hero_title {
            font-size: 42px;
        }

        .whatsappBlue-hero_content {
            text-align: center;
        }

        .whatsappBlue-hero_description {
            margin-left: auto;
            margin-right: auto;
        }

        .whatsappBlue-hero_actions,
        .whatsappBlue-hero_trust {
            justify-content: center;
        }

        .whatsappBlue-hero_visual {
            margin-top: 40px;
        }
    }

    @media (max-width: 480px) {
        .whatsappBlue-hero {
            padding: 90px 0 70px;
        }

        .whatsappBlue-hero_title {
            font-size: 32px;
        }

        .whatsappBlue-profile {
            width: 100%;
            max-width: 300px;
        }

        .whatsappBlue-hero_verification-badge,
        .whatsappBlue-hero_notification {
            position: static;
            margin: 16px auto 0;
            max-width: 300px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .whatsapp-btn {
            transition: none;
        }
    }
</style>

<!-- ============================================
     WHATSAPP BLUE TICK — HERO SECTION
     ============================================ -->

<section class="whatsappBlue-hero" id="whatsappBlueHero">

    <div class="container">

        <div class="whatsappBlue-hero_wrapper">
            <!-- ================================
                 HERO CONTENT
                 ================================ -->
            <div class="whatsappBlue-hero_content">
                <span class="whatsappBlue-hero_badge">
                    <span class="whatsappBlue-hero_badge-icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </span>
                    WhatsApp Business Verification
                </span>
                <h1 class="whatsappBlue-hero_title">
                    <em>Get</em> <span>What'sApp Blue Tick</span> Verification for Businesses.
                </h1>
                <p class="whatsappBlue-hero_description">
                    Using WhatsApp Blue Tick Verification will strengthen your brand and build trust. In order to increase client confidence, raise brand awareness, and create a recognized business presence, King Digital assists companies in completing the verification process, satisfying Meta’s standards, and obtaining the official WhatsApp Business Blue Tick.
                </p>
                <div class="whatsappBlue-hero_actions">
                    <a href="#contact" class="whatsapp-btn whatsapp-btn-primary">
                        Get Verified
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#how-it-works" class="whatsapp-btn whatsapp-btn-secondary">
                        How It Works
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="whatsappBlue-hero_trust">
                    <div class="whatsappBlue-hero_trust-item">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Professional Support</span>
                    </div>
                    <div class="whatsappBlue-hero_trust-item">
                        <i class="fa-solid fa-check"></i>
                        <span>Guided Process</span>
                    </div>
                    <div class="whatsappBlue-hero_trust-item">
                        <i class="fa-solid fa-headset"></i>
                        <span>Expert Assistance</span>
                    </div>
                </div>
            </div>
            <!-- ================================
                 HERO VISUAL
                 ================================ -->
            <div class="whatsappBlue-hero_visual">
                <div class="whatsappBlue-hero_orb"></div>
                <!-- Floating verification badge -->
                <div class="whatsappBlue-hero_verification-badge">
                    <span class="verification-badge_icon">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <div class="verification-badge_text">
                        <strong>Verified</strong>
                        <small>Business Account</small>
                    </div>
                </div>
                <!-- WhatsApp Profile Card -->
                <div class="whatsappBlue-profile">
                    <div class="whatsappBlue-profile_header">
                        <div class="whatsappBlue-profile_back">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>
                        <span>Business Profile</span>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>
                    <div class="whatsappBlue-profile_body">
                        <div class="whatsappBlue-profile_avatar">
                            <div class="whatsappBlue-profile_avatar-icon">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <span class="whatsappBlue-profile_check">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </div>
                        <div class="whatsappBlue-profile_name">
                            <h3>
                                King Digital
                                <span class="whatsappBlue-profile_verified">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </h3>
                            <p>Business Account</p>
                        </div>
                        <div class="whatsappBlue-profile_status">
                            <div class="profile-status_item">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>Verified Business</span>
                            </div>
                            <div class="profile-status_item">
                                <i class="fa-solid fa-shield-halved"></i>
                                <span>Trusted Profile</span>
                            </div>
                        </div>
                        <div class="whatsappBlue-profile_info">
                            <div class="profile-info_item">
                                <i class="fa-solid fa-building"></i>
                                <div>
                                    <small>Business</small>
                                    <span>King Digital Private Limited</span>
                                </div>
                            </div>
                            <div class="profile-info_item">
                                <i class="fa-solid fa-globe"></i>
                                <div>
                                    <small>Website</small>
                                    <span>kingdigital.in</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Floating notification -->
                <div class="whatsappBlue-hero_notification">
                    <div class="notification-icon">
                        <i class="fa-solid fa-shield-check"></i>
                    </div>
                    <div class="notification-content">
                        <strong>Business Verified</strong>
                        <span>Your profile is trusted</span>
                    </div>
                    <i class="fa-solid fa-check notification-check"></i>
                </div>
                <!-- Decorative dots -->
                <span class="whatsappBlue-decoration dot-1"></span>
                <span class="whatsappBlue-decoration dot-2"></span>
                <span class="whatsappBlue-decoration dot-3"></span>
            </div>
        </div>
    </div>
</section>