<style>
    :root {

        /* =========================================================
       BRAND / PRIMARY
        ========================================================= */

        --video-primary: #FF6B1A;
        --video-primary-light: #FF8A45;
        --video-primary-dark: #E95508;

        --video-secondary: #111A33;
        --video-secondary-light: #1C2948;
        --video-secondary-dark: #080E21;


        /* =========================================================
       BACKGROUNDS
        ========================================================= */

        --video-bg: #FFFFFF;
        --video-bg-soft: #f1e7df;
        --video-bg-muted: #e0eaf7;

        --video-bg-dark: #111A33;
        --video-bg-dark-soft: #18223D;


        /* =========================================================
       TEXT
        ========================================================= */

        --video-text: #14213D;
        --video-text-secondary: #52627A;
        --video-text-muted: #8290A3;

        --video-text-light: #FFFFFF;
        --video-text-light-secondary: #C7CFDC;


        /* =========================================================
       BORDERS
        ========================================================= */

        --video-border: #E4E8EE;
        --video-border-light: #EDF0F4;
        --video-border-dark: #303A52;


        /* =========================================================
       ORANGE GRADIENTS
        ========================================================= */

        --video-gradient-primary:
            linear-gradient(135deg,
                #E95508 0%,
                #FF6B1A 55%,
                #FF8A45 100%);


        --video-gradient-orange-soft:
            linear-gradient(135deg,
                #FFF1E8 0%,
                #FFE4D3 100%);


        /* =========================================================
       DARK CTA GRADIENT
        ========================================================= */

        --video-gradient-dark:
            linear-gradient(135deg,
                #080E21 0%,
                #111A33 55%,
                #1C2948 100%);


        /* =========================================================
       HERO OVERLAY
        ========================================================= */

        --video-gradient-hero:
            linear-gradient(90deg,
                rgba(255, 255, 255, 0.98) 0%,
                rgba(255, 255, 255, 0.94) 35%,
                rgba(255, 255, 255, 0.30) 65%,
                rgba(255, 255, 255, 0) 100%);


        /* =========================================================
       SOFT GLOWS
        ========================================================= */

        --video-glow-orange:
            radial-gradient(circle,
                rgba(255, 107, 26, 0.16) 0%,
                rgba(255, 107, 26, 0) 70%);


        --video-glow-blue:
            radial-gradient(circle,
                rgba(66, 133, 244, 0.12) 0%,
                rgba(66, 133, 244, 0) 70%);


        --video-glow-purple:
            radial-gradient(circle,
                rgba(139, 92, 246, 0.12) 0%,
                rgba(139, 92, 246, 0) 70%);


        /* =========================================================
       SERVICE ACCENT COLORS
       Used for individual service cards/icons
        ========================================================= */

        --service-orange: #FF6B1A;
        --service-orange-soft: #FFF0E8;

        --service-blue: #4285F4;
        --service-blue-soft: #EDF4FF;

        --service-purple: #8B5CF6;
        --service-purple-soft: #F3EEFF;

        --service-green: #22C55E;
        --service-green-soft: #ECFDF3;

        --service-pink: #EC4899;
        --service-pink-soft: #FDF0F7;


        /* =========================================================
       STATUS / UI COLORS
        ========================================================= */

        --video-success: #22C55E;
        --video-warning: #F59E0B;
        --video-danger: #EF4444;
        --video-info: #4285F4;


        /* =========================================================
       SHADOWS
        ========================================================= */

        --video-shadow-sm:
            0 3px 10px rgba(17, 26, 51, 0.06);

        --video-shadow-md:
            0 8px 24px rgba(17, 26, 51, 0.09);

        --video-shadow-lg:
            0 16px 40px rgba(17, 26, 51, 0.12);

        --video-shadow-orange:
            0 10px 28px rgba(255, 107, 26, 0.20);


        /* =========================================================
       RADIUS
        ========================================================= */

        --video-radius-sm: 8px;
        --video-radius-md: 12px;
        --video-radius-lg: 18px;
        --video-radius-xl: 24px;
        --video-radius-2xl: 32px;

        --video-radius-pill: 999px;


        /* =========================================================
       SPACING
        ========================================================= */

        --video-space-xs: 4px;
        --video-space-sm: 8px;
        --video-space-md: 16px;
        --video-space-lg: 24px;
        --video-space-xl: 32px;
        --video-space-2xl: 48px;
        --video-space-3xl: 64px;
        --video-space-4xl: 96px;


        /* =========================================================
       TRANSITIONS
        ========================================================= */

        --video-transition-fast: 150ms ease;
        --video-transition-normal: 250ms ease;
        --video-transition-slow: 400ms ease;


        /* =========================================================
       FONT SIZES
        ========================================================= */

        --video-text-xs: 11px;
        --video-text-sm: 13px;
        --video-text-md: 15px;
        --video-text-lg: 18px;

        --video-heading-sm: 24px;
        --video-heading-md: 32px;
        --video-heading-lg: 48px;
        --video-heading-xl: 64px;


        /* =========================================================
       CONTAINER
        ========================================================= */

        --video-container: 1280px;

    }

    /* =========================================================
   VIDEO STATS
========================================================= */

    .video-stats {
        width: 100%;
        padding: 0 20px 8px;
        margin-top: -1px;
        position: relative;
        z-index: 2;
        overflow: hidden;
    }

    /* ========================================
   STATS DECORATION
    ======================================== */

    .video-stats {
        background: #ffffff;
        z-index: 2;
    }

    .video-stats::before {
        content: "";
        position: absolute;

        width: 120%;
        height: 70px;

        top: -35px;
        left: -10%;

        background: #ffffff;

        border-radius: 50% 50% 0 0 / 100% 100% 0 0;

        pointer-events: none;
        z-index: 3;
    }

    /* Ambient decorative glows floating behind the stat cards.
       Purely atmospheric — kept soft so the numbers stay the focus. */
    .video-stats::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 0;

        background:
            var(--video-glow-orange) -60px -80px / 340px 340px no-repeat,
            var(--video-glow-blue) calc(100% + 40px) 10% / 300px 300px no-repeat,
            var(--video-glow-purple) 30% calc(100% + 60px) / 280px 280px no-repeat;

        opacity: 0.9;
        animation: video-stats-drift 14s ease-in-out infinite;
    }

    @keyframes video-stats-drift {
        0%, 100% { transform: translate3d(0, 0, 0); }
        50% { transform: translate3d(0, 8px, 0); }
    }

    .video-stats-container {
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;

        display: grid;
        grid-template-columns: repeat(4, 1fr);

        background: linear-gradient(180deg, #ffffff 0%, #fdfbf9 100%);
        border: 1px solid var(--video-border-light);

        border-radius: var(--video-radius-xl);

        box-shadow: var(--video-shadow-md);

        position: relative;
        z-index: 3;

        overflow: hidden;

        transition: box-shadow var(--video-transition-slow);
    }

    .video-stats-container:hover {
        box-shadow: var(--video-shadow-lg);
    }

    /* Thin brand-gradient accent strip along the top of the panel */
    .video-stats-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;

        background: linear-gradient(90deg,
            var(--service-orange) 0%,
            var(--service-blue) 33%,
            var(--service-purple) 66%,
            var(--service-green) 100%);

        opacity: 0.9;
        z-index: 2;
    }


    /* =========================================================
   CARD
========================================================= */

    .video-stat-card {
        min-height: 105px;

        display: flex;
        align-items: center;
        gap: 14px;

        padding: 22px 24px;

        position: relative;
        z-index: 1;

        transition:
            background var(--video-transition-normal),
            transform var(--video-transition-normal);
    }

    .video-stat-card:hover {
        transform: translateY(-2px);
        background: linear-gradient(180deg, rgba(255, 107, 26, 0.05), rgba(255, 107, 26, 0) 70%);
    }

    .video-stat-card:nth-child(2):hover {
        background: linear-gradient(180deg, rgba(66, 133, 244, 0.05), rgba(66, 133, 244, 0) 70%);
    }

    .video-stat-card:nth-child(3):hover {
        background: linear-gradient(180deg, rgba(139, 92, 246, 0.05), rgba(139, 92, 246, 0) 70%);
    }

    .video-stat-card:nth-child(4):hover {
        background: linear-gradient(180deg, rgba(34, 197, 94, 0.05), rgba(34, 197, 94, 0) 70%);
    }


    /* Vertical divider — soft fade instead of a hard line */

    .video-stat-card:not(:last-child)::after {
        content: "";

        position: absolute;

        top: 20px;
        right: 0;
        bottom: 20px;

        width: 1px;

        background: linear-gradient(180deg,
            rgba(228, 232, 238, 0) 0%,
            var(--video-border) 50%,
            rgba(228, 232, 238, 0) 100%);
    }


    /* =========================================================
   ICON
========================================================= */

    .video-stat-icon {
        width: 46px;
        height: 46px;

        flex: 0 0 46px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: var(--service-orange-soft);

        color: var(--video-primary);

        font-size: 19px;

        position: relative;
        z-index: 1;

        box-shadow: 0 0 0 5px rgba(255, 107, 26, 0.06);

        transition:
            transform var(--video-transition-normal),
            box-shadow var(--video-transition-normal);
    }

    .video-stat-card:hover .video-stat-icon {
        transform: scale(1.08) rotate(-4deg);
        box-shadow: 0 0 0 6px rgba(255, 107, 26, 0.12), var(--video-shadow-sm);
    }


    /* Different icon backgrounds */

    .video-stat-card:nth-child(2) .video-stat-icon {
        background: var(--service-blue-soft);
        color: var(--service-blue);
        box-shadow: 0 0 0 5px rgba(66, 133, 244, 0.06);
    }

    .video-stat-card:nth-child(2):hover .video-stat-icon {
        box-shadow: 0 0 0 6px rgba(66, 133, 244, 0.12), var(--video-shadow-sm);
    }

    .video-stat-card:nth-child(3) .video-stat-icon {
        background: var(--service-purple-soft);
        color: var(--service-purple);
        box-shadow: 0 0 0 5px rgba(139, 92, 246, 0.06);
    }

    .video-stat-card:nth-child(3):hover .video-stat-icon {
        box-shadow: 0 0 0 6px rgba(139, 92, 246, 0.12), var(--video-shadow-sm);
    }

    .video-stat-card:nth-child(4) .video-stat-icon {
        background: var(--service-green-soft);
        color: var(--service-green);
        box-shadow: 0 0 0 5px rgba(34, 197, 94, 0.06);
    }

    .video-stat-card:nth-child(4):hover .video-stat-icon {
        box-shadow: 0 0 0 6px rgba(34, 197, 94, 0.12), var(--video-shadow-sm);
    }


    /* =========================================================
   CONTENT
========================================================= */

    .video-stat-content {
        min-width: 0;
    }

    .video-stat-number {
        font-size: 25px;
        line-height: 1;

        font-weight: 800;

        color: var(--video-text);
    }

    .video-stat-plus {
        font-size: 20px;
        font-weight: 800;

        color: var(--video-primary);
    }

    .video-stat-content p {
        margin: 7px 0 0;

        font-size: 11px;
        line-height: 1.3;
        letter-spacing: 0.2px;

        color: var(--video-text-secondary);
    }


    /* =========================================================
   TABLET
========================================================= */

    @media (max-width: 900px) {

        .video-stats-container {
            grid-template-columns: repeat(2, 1fr);
        }

        .video-stat-card:nth-child(2)::after {
            display: none;
        }

        .video-stat-card:nth-child(3)::after {
            display: block;
        }

        .video-stats::after {
            background:
                var(--video-glow-orange) -80px -60px / 260px 260px no-repeat,
                var(--video-glow-purple) calc(100% + 60px) calc(100% + 40px) / 240px 240px no-repeat;
        }

    }


    /* =========================================================
   MOBILE
========================================================= */

    @media (max-width: 600px) {

        .video-stats {
            padding: 0 16px 8px;
        }

        .video-stats-container {
            grid-template-columns: 1fr;

            border-radius: var(--video-radius-lg);
        }

        .video-stat-card {
            min-height: 85px;
            padding: 18px 20px;
        }

        .video-stat-card:hover {
            transform: none;
        }

        .video-stat-card::after {
            top: auto !important;
            right: 20px !important;
            bottom: 0 !important;
            left: 20px;

            width: auto !important;
            height: 1px;

            background: linear-gradient(90deg,
                rgba(228, 232, 238, 0) 0%,
                var(--video-border) 50%,
                rgba(228, 232, 238, 0) 100%) !important;
        }

        .video-stat-card:last-child::after {
            display: none;
        }

        .video-stats::after {
            background:
                var(--video-glow-orange) -100px -60px / 220px 220px no-repeat,
                var(--video-glow-blue) calc(100% + 80px) calc(100% + 60px) / 220px 220px no-repeat;
        }

    }

    /* Respect users who prefer reduced motion */
    @media (prefers-reduced-motion: reduce) {
        .video-stats::after {
            animation: none;
        }

        .video-stat-card,
        .video-stat-icon,
        .video-stats-container {
            transition: none;
        }
    }
</style>

<section class="video-stats">
    <div class="video-stats-container">

        <div class="video-stat-card">
            <div class="video-stat-icon">
                🎙
            </div>

            <div class="video-stat-content">
                <strong class="video-stat-number" data-count="1000">0</strong>
                <span class="video-stat-plus">+</span>
                <p>Projects Completed</p>
            </div>
        </div>


        <div class="video-stat-card">
            <div class="video-stat-icon">
                👥
            </div>

            <div class="video-stat-content">
                <strong class="video-stat-number" data-count="300">0</strong>
                <span class="video-stat-plus">+</span>
                <p>Happy Clients</p>
            </div>
        </div>


        <div class="video-stat-card">
            <div class="video-stat-icon">
                ◉
            </div>

            <div class="video-stat-content">
                <strong class="video-stat-number" data-count="7">0</strong>
                <span class="video-stat-plus">+</span>
                <p>Years of Experience</p>
            </div>
        </div>


        <div class="video-stat-card">
            <div class="video-stat-icon">
                🎬
            </div>

            <div class="video-stat-content">
                <strong class="video-stat-number" data-count="50">0</strong>
                <span class="video-stat-plus">+</span>
                <p>Studio Productions</p>
            </div>
        </div>

    </div>
</section>