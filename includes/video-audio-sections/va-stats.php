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
        padding: 0 20px;
        margin-top: -1px;
        position: relative;
        z-index: 2;
    }

    .video-stats-container {
        width: 100%;
        /* max-width: 1100px; */
        margin: 0 auto;

        display: grid;
        grid-template-columns: repeat(4, 1fr);

        background: var(--video-bg);
        /* border: 1px solid var(--video-border); */

        /* border-radius: var(--video-radius-xl); */

        /* box-shadow: var(--video-shadow-md); */

        overflow: hidden;
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
    }


    /* Vertical divider */

    .video-stat-card:not(:last-child)::after {
        content: "";

        position: absolute;

        top: 24px;
        right: 0;
        bottom: 24px;

        width: 1px;

        background: var(--video-border);
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
    }


    /* Different icon backgrounds */

    .video-stat-card:nth-child(2) .video-stat-icon {
        background: var(--service-blue-soft);
        color: var(--service-blue);
    }

    .video-stat-card:nth-child(3) .video-stat-icon {
        background: var(--service-purple-soft);
        color: var(--service-purple);
    }

    .video-stat-card:nth-child(4) .video-stat-icon {
        background: var(--service-green-soft);
        color: var(--service-green);
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

        color: var(--video-text-secondary);
    }


    /* =========================================================
   HOVER
========================================================= */

    .video-stat-card {
        transition:
            background var(--video-transition-normal),
            transform var(--video-transition-normal);
    }

    .video-stat-card:hover {
        background: var(--video-bg-soft);
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

    }


    /* =========================================================
   MOBILE
========================================================= */

    @media (max-width: 600px) {

        .video-stats {
            padding: 0 16px;
        }

        .video-stats-container {
            grid-template-columns: 1fr;

            border-radius: var(--video-radius-lg);
        }

        .video-stat-card {
            min-height: 85px;
            padding: 18px 20px;
        }

        .video-stat-card::after {
            top: auto !important;
            right: 20px !important;
            bottom: 0 !important;
            left: 20px;

            width: auto !important;
            height: 1px;
        }

        .video-stat-card:last-child::after {
            display: none;
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