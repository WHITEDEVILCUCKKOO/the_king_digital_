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

    /* ========================================
   SMM STATS
======================================== */

    .smm-stats {
        position: relative;
        z-index: 5;
        /* padding: 0 0 90px; */
        background: var(--smm-bg);
    }

    .smm-stats_container {
        max-width: var(--smm-container);
        margin: 0 auto;
        padding: 0 24px;
    }


    /* ========================================
   STATS CARD
======================================== */

    .smm-stats_card {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        background: var(--smm-white);
        border: 1px solid var(--smm-border);
        border-radius: var(--smm-radius-lg);
        box-shadow: var(--smm-shadow-md);
        overflow: hidden;
    }


    /* ========================================
   INDIVIDUAL STAT
======================================== */

    .smm-stat {
        position: relative;

        display: flex;
        align-items: center;
        gap: 16px;

        min-height: 130px;
        padding: 28px;
    }

    .smm-stat:not(:last-child)::after {
        content: "";

        position: absolute;
        top: 28px;
        right: 0;

        width: 1px;
        height: calc(100% - 56px);

        background: var(--smm-border);
    }


    /* ========================================
   ICON
======================================== */

    .smm-stat_icon {
        flex-shrink: 0;

        width: 48px;
        height: 48px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 14px;

        font-size: 18px;
    }

    .smm-stat_icon--purple {
        color: var(--smm-primary);
        background: var(--smm-bg-purple);
    }

    .smm-stat_icon--pink {
        color: var(--smm-secondary);
        background: var(--smm-bg-pink);
    }

    .smm-stat_icon--orange {
        color: var(--smm-accent);
        background: var(--smm-bg-orange);
    }

    .smm-stat_icon--blue {
        color: var(--smm-info);
        background: #EFF6FF;
    }


    /* ========================================
   CONTENT
======================================== */

    .smm-stat_content {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .smm-stat_content h3 {
        margin: 0;

        color: var(--smm-text);

        font-size: 30px;
        line-height: 1;
        letter-spacing: -0.03em;
    }

    .smm-stat_content p {
        margin: 0;

        color: var(--smm-text-muted);

        font-size: 12px;
        line-height: 1.4;
    }
</style>

<section class="smm-stats">
    <div class="container smm-stats_container">
        <div class="smm-stats_card">
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--purple">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stat_count" data-count="10">0</span>M+
                    </h3>
                    <p>Impressions Generated</p>
                </div>
            </div>
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--pink">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stat_count" data-count="500">0</span>+
                    </h3>
                    <p>Successful Campaigns</p>
                </div>
            </div>
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--orange">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stat_count" data-count="80">0</span>%+
                    </h3>
                    <p>Average Engagement Growth</p>
                </div>
            </div>
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--blue">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stat_count" data-count="4.8">0</span>/5
                    </h3>
                    <p>Client Satisfaction Rating</p>
                </div>
            </div>
        </div>
    </div>
</section>