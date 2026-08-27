<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    :root {
        /* ========================================
       SOCIAL MEDIA MARKETING THEME
       ======================================== */

        /* Primary */
        --smm-primary: #7C3AED;
        --smm-primary-light: #A78BFA;
        --smm-primary-dark: #5B21B6;

        /* Secondary */
        --smm-secondary: #EC4899;
        --smm-secondary-light: #F9A8D4;
        --smm-secondary-dark: #BE185D;

        /* Accent */
        --smm-accent: #F97316;
        --smm-accent-light: #FDBA74;
        --smm-accent-dark: #EA580C;

        /* Gradient */
        --smm-gradient: linear-gradient(135deg,
                #7C3AED 0%,
                #EC4899 55%,
                #F97316 100%);

        --smm-gradient-soft: linear-gradient(135deg,
                #F5F3FF 0%,
                #FCE7F3 55%,
                #FFF7ED 100%);

        /* Backgrounds */
        --smm-bg: #FFFFFF;
        --smm-bg-soft: #FAF9FF;
        --smm-bg-purple: #F5F3FF;
        --smm-bg-pink: #FDF2F8;
        --smm-bg-orange: #FFF7ED;

        /* Dark Sections */
        --smm-dark: #181026;
        --smm-dark-2: #24163A;
        --smm-dark-card: #2D1B46;

        /* Text */
        --smm-text: #18181B;
        --smm-text-dark: #27272A;
        --smm-text-muted: #71717A;
        --smm-text-light: #A1A1AA;
        --smm-text-white: #FFFFFF;

        /* Borders */
        --smm-border: #E4E4E7;
        --smm-border-light: #F0ECF8;
        --smm-border-purple: #DDD6FE;

        /* Cards */
        --smm-card: #FFFFFF;
        --smm-card-hover: #FCFAFF;

        /* Status / Metrics */
        --smm-success: #22C55E;
        --smm-success-light: #DCFCE7;

        --smm-danger: #EF4444;
        --smm-warning: #F59E0B;
        --smm-info: #3B82F6;

        /* Shadows */
        --smm-shadow-sm:
            0 2px 8px rgba(24, 16, 38, 0.05);

        --smm-shadow-md:
            0 8px 30px rgba(24, 16, 38, 0.08);

        --smm-shadow-lg:
            0 20px 50px rgba(124, 58, 237, 0.12);

        --smm-shadow-glow:
            0 0 40px rgba(124, 58, 237, 0.18);

        /* Radius */
        --smm-radius-sm: 10px;
        --smm-radius-md: 16px;
        --smm-radius-lg: 24px;
        --smm-radius-xl: 32px;

        /* Spacing */
        --smm-section-space: clamp(70px, 8vw, 120px);

        /* Container */
        --smm-container: 1240px;
    }

    /* =========================================================
   HERO SECTION
========================================================= */

    .ssm-hero {
        position: relative;
        overflow: hidden;
        background: linear-gradient(180deg, #FFFFFF 0%, var(--smm-bg-soft) 100%);
        padding: 60px 0;
    }

    /* Faint dotted grid tucked into the bottom-left corner */
    .ssm-hero::before {
        content: "";
        position: absolute;
        left: -30px;
        bottom: -30px;
        width: 240px;
        height: 240px;
        background-image: radial-gradient(var(--smm-border-purple) 1.6px, transparent 1.6px);
        background-size: 16px 16px;
        -webkit-mask-image: radial-gradient(circle at 30% 70%, #000 0%, #000 40%, transparent 75%);
        mask-image: radial-gradient(circle at 30% 70%, #000 0%, #000 40%, transparent 75%);
        opacity: 0.8;
        pointer-events: none;
        z-index: 0;
    }

    /* Faint rotated square accent, top right */
    .ssm-hero::after {
        content: "";
        position: absolute;
        top: 9%;
        right: 7%;
        width: 74px;
        height: 74px;
        border: 2px solid var(--smm-border-purple);
        border-radius: 18px;
        transform: rotate(18deg);
        opacity: 0.6;
        pointer-events: none;
        z-index: 0;
    }

    .ssm-hero_content {
        position: relative;
        z-index: 1;
        max-width: var(--smm-container);
        margin-inline: auto;
        padding-inline: 24px;
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        align-items: center;
        gap: 48px;
    }

    /* ---------- Text column ---------- */

    .ssm-hero_content-text-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        border: 1.5px solid var(--smm-border-purple);
        border-radius: 999px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.06em;
        color: var(--smm-primary);
        background: #FFFFFF;
        box-shadow: var(--smm-shadow-sm);
        margin-bottom: 22px;
    }

    .ssm-hero_content-text-eyebrow span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: var(--smm-secondary);
        font-size: 11px;
        height: 20px;
        width: 20px;
        line-height: 1;
    }

    .ssm-hero_content-text-heading h1 {
        position: relative;
        font-size: clamp(32px, 4.1vw, 52px);
        line-height: 1;
        font-weight: 800;
        color: var(--smm-text);
        max-width: 540px;
        margin-bottom: 20px;
    }

    .ssm-hero_content-text-heading-highlight {
        background: linear-gradient(90deg, var(--smm-primary) 0%, var(--smm-secondary) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    /* Small hand-drawn-style trend arrow after "Growth", built from
       two pseudo-elements so no extra image asset is needed */
    .ssm-hero_content-text-heading-arrow {
        position: relative;
        display: inline-block;
        width: 30px;
        height: 22px;
        margin-left: 6px;
        vertical-align: middle;
    }

    .ssm-hero_content-text-heading-arrow::before {
        content: "";
        position: absolute;
        left: 2px;
        top: 55%;
        width: 22px;
        height: 3px;
        border-radius: 2px;
        background: var(--smm-secondary);
        transform: rotate(-30deg);
    }

    .ssm-hero_content-text-heading-arrow::after {
        content: "";
        position: absolute;
        right: -1px;
        top: 1px;
        width: 0;
        height: 0;
        border-left: 8px solid var(--smm-secondary);
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        transform: rotate(-30deg);
    }

    .ssm-hero_content-text-para {
        font-size: 15px;
        line-height: 1.75;
        color: var(--smm-text-muted);
        max-width: 460px;
        margin-bottom: 30px;
    }

    .ssm-hero_content-text-cta {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-bottom: 34px;
    }

    .ssm-hero_content-text-cta a {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 22px 14px 26px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        transition: transform 260ms ease, box-shadow 260ms ease, border-color 260ms ease, color 260ms ease;
    }

    .ssm-hero_content-text-cta a span {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 24px;
    }

    .ssm-hero_content-text-cta a span::before {
        content: "";
        width: 0;
        height: 0;
        margin-left: 2px;
        border-top: 4.5px solid transparent;
        border-bottom: 4.5px solid transparent;
        border-left: 6.5px solid #fff;
    }

    .ssm-hero_content-text-cta a:first-child {
        background: var(--smm-gradient);
        color: #FFFFFF;
        box-shadow: var(--smm-shadow-lg);
    }

    .ssm-hero_content-text-cta a:first-child span {
        background: rgba(255, 255, 255, 0.25);
    }

    .ssm-hero_content-text-cta a:first-child:hover {
        transform: translateY(-2px);
        box-shadow: var(--smm-shadow-glow);
    }

    .ssm-hero_content-text-cta a:last-child {
        background: #FFFFFF;
        color: var(--smm-text);
        border: 1.5px solid var(--smm-border);
        box-shadow: var(--smm-shadow-sm);
    }

    .ssm-hero_content-text-cta a:last-child span {
        background: var(--smm-bg-purple);
    }

    .ssm-hero_content-text-cta a:last-child span::before {
        border-left-color: var(--smm-primary);
    }

    .ssm-hero_content-text-cta a:last-child:hover {
        border-color: var(--smm-primary);
        color: var(--smm-primary);
        transform: translateY(-2px);
    }

    .ssm-hero_content-text-trust {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .ssm-hero_content-text-trust span {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 2.5px solid #FFFFFF;
        box-shadow: var(--smm-shadow-sm);
        margin-left: -10px;
    }

    .ssm-hero_content-text-trust span:first-child {
        margin-left: 0;
    }

    .ssm-hero_content-text-trust span:nth-child(1) {
        background: linear-gradient(135deg, #7C3AED, #A78BFA);
    }

    .ssm-hero_content-text-trust span:nth-child(2) {
        background: linear-gradient(135deg, #EC4899, #F9A8D4);
    }

    .ssm-hero_content-text-trust span:nth-child(3) {
        background: linear-gradient(135deg, #F97316, #FDBA74);
    }

    .ssm-hero_content-text-trust span:nth-child(4) {
        background: linear-gradient(135deg, #3B82F6, #93C5FD);
    }

    .ssm-hero_content-text-trust p {
        font-size: 13px;
        line-height: 1.45;
        color: var(--smm-text-muted);
    }

    .ssm-hero_content-text-trust p strong {
        color: var(--smm-text);
        font-weight: 800;
    }

    /* ---------- Visual column ---------- */

    .smm-hero_visual {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 400px;
        z-index: 1;
    }

    .smm-hero_glow {
        position: absolute;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: radial-gradient(circle,
                rgba(124, 58, 237, 0.22) 0%,
                rgba(236, 72, 153, 0.13) 45%,
                rgba(249, 115, 22, 0) 75%);
        filter: blur(40px);
        z-index: 0;
        animation: smm-pulse-glow 6s ease-in-out infinite;
    }

    /* ---------- Phone mockup ---------- */

    .smm-hero_phone {
        position: relative;
        z-index: 2;
        width: 260px;
        height: 500px;
        background: #0B0B10;
        border-radius: 38px;
        padding: 14px;
        box-shadow: 0 30px 60px rgba(24, 16, 38, 0.30), 0 0 0 8px rgba(255, 255, 255, 0.55);
        animation: smm-float 6s ease-in-out infinite;
        animation-delay: 0s;
    }

    .smm-phone_notch {
        position: absolute;
        top: 14px;
        left: 50%;
        transform: translateX(-50%);
        width: 82px;
        height: 18px;
        background: #000;
        border-radius: 10px;
        z-index: 4;
    }

    .smm-phone_screen {
        position: relative;
        width: 100%;
        height: 100%;
        background: #FFFFFF;
        border-radius: 28px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        padding-top: 24px;
    }

    .smm-social_header {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
    }

    .smm-social_avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        flex: 0 0 32px;
        background: var(--smm-gradient);
    }

    .smm-social_header div {
        display: flex;
        flex-direction: column;
        line-height: 1.3;
    }

    .smm-social_header strong {
        font-size: 12px;
        font-weight: 700;
        color: var(--smm-text);
    }

    .smm-social_header span {
        font-size: 9.5px;
        color: var(--smm-text-muted);
    }

    .smm-social_header i {
        margin-left: auto;
        font-size: 14px;
        color: var(--smm-text-muted);
    }

    .smm-social_image {
        position: relative;
        width: 100%;
        aspect-ratio: 1 / 1;
        background: linear-gradient(160deg, var(--smm-primary-light), var(--smm-secondary) 55%, var(--smm-accent-light));
    }

    .smm-social_image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        color: transparent;
    }

    .smm-social_actions {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 12px 14px 2px;
    }

    .smm-social_actions i {
        font-size: 16px;
        color: var(--smm-text);
    }

    .smm-social_actions i:last-child {
        margin-left: auto;
    }

    .smm-social_likes {
        display: block;
        padding: 8px 14px 0;
        font-size: 12px;
        font-weight: 700;
        color: var(--smm-text);
    }

    .smm-phone_screen>p {
        padding: 4px 14px 14px;
        font-size: 11px;
        line-height: 1.5;
        color: var(--smm-text-dark);
    }

    /* ---------- Floating metric cards ---------- */

    .smm-hero_metric {
        position: absolute;
        z-index: 3;
        display: flex;
        align-items: center;
        gap: 10px;
        background: #FFFFFF;
        padding: 12px 16px;
        border-radius: var(--smm-radius-md);
        box-shadow: var(--smm-shadow-md);
        animation: smm-float 5s ease-in-out infinite;
    }

    .smm-hero_metric strong {
        display: block;
        font-size: 16px;
        font-weight: 800;
        color: var(--smm-text);
        line-height: 1.2;
    }

    .smm-hero_metric span {
        font-size: 10.5px;
        color: var(--smm-text-muted);
    }

    .smm-hero_metric_icon,
    .smm-hero_metric_graph {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        flex: 0 0 32px;
    }

    .smm-hero_metric--reach {
        top: 3%;
        left: -9%;
        animation-delay: 0.3s;
    }

    .smm-hero_metric--reach .smm-hero_metric_icon {
        background: var(--smm-success-light);
        color: var(--smm-success);
    }

    .smm-hero_metric--engagement {
        bottom: 13%;
        right: -11%;
        animation-delay: 1.1s;
    }

    .smm-hero_metric--engagement .smm-hero_metric_graph {
        background: var(--smm-bg-pink);
        color: var(--smm-secondary);
    }

    /* ---------- Floating social icons ---------- */

    .smm-social_icon {
        position: absolute;
        z-index: 3;
        width: 52px;
        height: 52px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        font-size: 20px;
        box-shadow: var(--smm-shadow-md);
        animation: smm-float 5.5s ease-in-out infinite;
    }

    .smm-social_icon--instagram {
        top: 40%;
        left: -11%;
        animation-delay: 0.6s;
        background: radial-gradient(circle at 30% 30%, #F58529, #DD2A7B 45%, #8134AF 75%, #515BD4);
    }

    .smm-social_icon--facebook {
        bottom: 4%;
        left: -7%;
        animation-delay: 1.6s;
        background: #1877F2;
    }

    /* ---------- Floating reactions ---------- */

    .smm-reaction {
        position: absolute;
        z-index: 4;
        animation: smm-float 4.5s ease-in-out infinite;
    }

    .smm-reaction--heart {
        top: 60%;
        right: -9%;
        width: 46px;
        height: 46px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        font-size: 18px;
        background: linear-gradient(135deg, var(--smm-secondary), var(--smm-accent));
        box-shadow: var(--smm-shadow-md);
        animation-delay: 2s;
    }

    .smm-reaction--love {
        top: 12%;
        right: 13%;
        font-size: 26px;
        filter: drop-shadow(0 6px 10px rgba(24, 16, 38, 0.18));
        animation-delay: 2.6s;
    }

    /* ---------- Float / pulse keyframes ---------- */

    @keyframes smm-float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-14px);
        }
    }

    @keyframes smm-pulse-glow {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.9;
        }

        50% {
            transform: scale(1.08);
            opacity: 1;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .smm-hero_phone,
        .smm-hero_metric,
        .smm-social_icon,
        .smm-reaction,
        .smm-hero_glow {
            animation: none;
        }
    }

    /* =========================================================
   RESPONSIVE
========================================================= */

    @media (max-width: 1100px) {
        .ssm-hero_content {
            grid-template-columns: 1fr;
            gap: 56px;
        }

        .ssm-hero_content-text {
            text-align: center;
        }

        .ssm-hero_content-text-heading h1,
        .ssm-hero_content-text-para {
            margin-inline: auto;
        }

        .ssm-hero_content-text-cta,
        .ssm-hero_content-text-trust {
            justify-content: center;
        }

        .smm-hero_visual {
            min-height: 520px;
        }
    }

    @media (max-width: 600px) {
        .ssm-hero {
            padding: 56px 0;
        }

        .ssm-hero_content-text-trust {
            flex-wrap: wrap;
            justify-content: center;
            text-align: left;
        }

        .smm-hero_phone {
            width: 220px;
            height: 458px;
        }

        .smm-hero_glow {
            width: 320px;
            height: 320px;
        }

        .smm-hero_metric {
            padding: 10px 12px;
            gap: 8px;
        }

        .smm-hero_metric strong {
            font-size: 13.5px;
        }

        .smm-hero_metric--reach {
            top: -2%;
            left: 0;
        }

        .smm-hero_metric--engagement {
            bottom: -2%;
            right: 0;
        }

        .smm-social_icon {
            width: 42px;
            height: 42px;
            font-size: 16px;
        }

        .smm-social_icon--instagram {
            left: 0;
            top: 42%;
        }

        .smm-social_icon--facebook {
            display: none;
        }

        .smm-reaction--heart {
            right: 0;
            top: 62%;
        }

        .smm-reaction--love {
            display: none;
        }
    }
</style>

<section class="ssm-hero">
    <div class="ssm-hero_content">
        <div class="ssm-hero_content-text">
            <p class="ssm-hero_content-text-eyebrow">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 450" width="100%" height="100%">
                        <defs>
                            <!-- Multi-stop diagonal gradient matching the exact color flow -->
                            <linearGradient id="sparkleGradient" x1="20%" y1="0%" x2="80%" y2="100%">
                                <stop offset="0%" stop-color="#5544CE" />
                                <stop offset="30%" stop-color="#9C17E4" />
                                <stop offset="55%" stop-color="#F905BD" />
                                <stop offset="78%" stop-color="#FF385C" />
                                <stop offset="100%" stop-color="#FF5C00" />
                            </linearGradient>

                            <!-- Precise 4-point sparkle path with deep inward curves -->
                            <path id="sparkle" d="M 0,-85 C 5,-25 25,-5 85,0 C 25,5 5,25 0,85 C -5,25 -25,5 -85,0 C -25,-5 -5,-25 0,-85 Z" />
                        </defs>

                        <!-- Sparkles Group -->
                        <g fill="none"
                            stroke="url(#sparkleGradient)"
                            stroke-width="16"
                            stroke-linecap="round"
                            stroke-linejoin="round">

                            <!-- Top-Right Sparkle -->
                            <use href="#sparkle" transform="translate(275, 115) scale(0.65)" />

                            <!-- Main (Left) Sparkle -->
                            <use href="#sparkle" transform="translate(160, 240) scale(1.05)" />

                            <!-- Bottom-Right Sparkle -->
                            <use href="#sparkle" transform="translate(325, 310) scale(0.48)" />

                        </g>
                    </svg>
                </span>
                SOCIAL MEDIA MARKETING
            </p>
            <div class="ssm-hero_content-text-heading">
                <h1>
                    Turn Your Social
                    Presence Into
                    <span class="ssm-hero_content-text-heading-highlight">Business Growth</span><span class="ssm-hero_content-text-heading-arrow"></span>
                </h1>
            </div>
            <p class="ssm-hero_content-text-para">
                We create data-driven social media strategies and
                engaging content that attract attention, build
                communities, and turn followers into customers.
            </p>
            <div class="ssm-hero_content-text-cta">
                <a href="contact.php">Start Your Campeign<span></span></a>
                <a href="#ssm-content">See Our Work<span></span></a>
            </div>
            <div class="ssm-hero_content-text-trust">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <p><strong>500+</strong> Businesses Trust
                    us to grow their brand</p>
            </div>
        </div>
        <div class="smm-hero_visual">
            <div class="smm-hero_glow"></div>
            <div class="smm-hero_metric smm-hero_metric--reach">
                <div class="smm-hero_metric_icon">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <div>
                    <strong>+48%</strong>
                    <span>Reach</span>
                </div>
            </div>
            <div class="smm-hero_phone">
                <div class="smm-phone_notch"></div>
                <div class="smm-phone_screen">
                    <div class="smm-social_header">
                        <div class="smm-social_avatar"></div>
                        <div>
                            <strong>King Digital</strong>
                            <span>Sponsored</span>
                        </div>
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                    <div class="smm-social_image">
                        <img
                            src="assets/images/ssm1.avif"
                            alt="Social media marketing campaign">
                    </div>
                    <div class="smm-social_actions">
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-regular fa-comment"></i>
                        <i class="fa-regular fa-paper-plane"></i>
                        <i class="fa-regular fa-bookmark"></i>
                    </div>
                    <strong class="smm-social_likes">
                        2,458 likes
                    </strong>
                    <p>
                        Building brands that people
                        actually want to follow.
                    </p>
                </div>
            </div>
            <div class="smm-hero_metric smm-hero_metric--engagement">
                <div class="smm-hero_metric_graph">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <div>
                    <strong>12.8K</strong>
                    <span>Engagement</span>
                </div>
            </div>
            <div class="smm-social_icon smm-social_icon--instagram">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <div class="smm-social_icon smm-social_icon--facebook">
                <i class="fa-brands fa-facebook-f"></i>
            </div>
            <div class="smm-reaction smm-reaction--heart">
                <i class="fa-solid fa-heart"></i>
            </div>
            <div class="smm-reaction smm-reaction--love">
                ❤️
            </div>
        </div>
    </div>
</section>