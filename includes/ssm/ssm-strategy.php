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
        --smm-gradient: linear-gradient(135deg, #7C3AED 0%, #EC4899 55%, #F97316 100%);
        --smm-gradient-soft: linear-gradient(135deg, #F5F3FF 0%, #FCE7F3 55%, #FFF7ED 100%);

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
        --smm-shadow-sm: 0 2px 8px rgba(24, 16, 38, 0.05);
        --smm-shadow-md: 0 8px 30px rgba(24, 16, 38, 0.08);
        --smm-shadow-lg: 0 20px 50px rgba(124, 58, 237, 0.12);
        --smm-shadow-glow: 0 0 40px rgba(124, 58, 237, 0.18);

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
       STRATEGY / PROCESS SECTION  (redesigned)
       Light section, white cards, one accent colour per step,
       big step number, arrow connectors between cards.
    ========================================================= */

    .ssm-strategy {
        position: relative;
        overflow: hidden;
        background: linear-gradient(160deg, var(--smm-bg-purple) 0%, var(--smm-bg-pink) 100%);
        padding: 40px 0;
    }

    /* ambient glows */
    .ssm-strategy::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 0;
        background:
            radial-gradient(circle, rgba(124, 58, 237, 0.18) 0%, rgba(124, 58, 237, 0) 65%) -140px -120px / 480px 480px no-repeat,
            radial-gradient(circle, rgba(236, 72, 153, 0.14) 0%, rgba(236, 72, 153, 0) 65%) calc(100% + 140px) calc(100% + 100px) / 460px 460px no-repeat;
    }

    /* faint dot grid, top-right */
    .ssm-strategy::after {
        content: "";
        position: absolute;
        top: 20px;
        right: 20px;
        width: 200px;
        height: 200px;
        background-image: radial-gradient(rgba(124, 58, 237, 0.22) 1.4px, transparent 1.4px);
        background-size: 16px 16px;
        -webkit-mask-image: radial-gradient(circle at 70% 30%, #000 0%, transparent 70%);
        mask-image: radial-gradient(circle at 70% 30%, #000 0%, transparent 70%);
        pointer-events: none;
        z-index: 0;
    }

    .ssm-strategy_content {
        position: relative;
        z-index: 1;
        max-width: var(--smm-container);
        margin-inline: auto;
        padding-inline: 24px;
    }

    /* ---------- Heading ---------- */

    .ssm-strategy_content--heading {
        text-align: center;
        max-width: 600px;
        margin: 0 auto 56px;
    }

    .ssm-strategy_content--heading-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin: 0 0 16px;
        padding: 7px 16px 7px 12px;
        border-radius: 999px;
        background: #fff;
        border: 1px solid var(--smm-border-purple);
        color: var(--smm-primary);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        box-shadow: var(--smm-shadow-sm);
    }

    .ssm-strategy_content--heading-eyebrow span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--smm-gradient);
        box-shadow: 0 0 0 4px rgba(124, 58, 237, .14);
    }

    .ssm-strategy_content--heading h2 {
        margin: 0 0 12px;
        font-size: clamp(28px, 3.4vw, 40px);
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        color: var(--smm-text-dark);
    }

    .ssm-strategy_content--heading h2 em {
        font-style: normal;
        background: var(--smm-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
    }

    .ssm-strategy_content--heading p {
        margin: 0;
        font-size: 16px;
        line-height: 1.6;
        color: var(--smm-text-muted);
    }

    /* ---------- Cards ---------- */

    .ssm-strategy_content--progress {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 28px;
    }

    .ssm-strategy_content--progress-card {
        --accent: var(--smm-primary);
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 22px;
        padding: 28px 26px 34px;
        background: var(--smm-card);
        border: 1px solid var(--smm-border-light);
        border-radius: var(--smm-radius-lg);
        box-shadow: var(--smm-shadow-md);
        transition: transform .35s cubic-bezier(.2, .8, .2, 1), box-shadow .35s ease, border-color .35s ease;
    }

    .ssm-strategy_content--progress-card:nth-child(1) {
        --accent: #7C3AED;
    }

    .ssm-strategy_content--progress-card:nth-child(2) {
        --accent: #EC4899;
    }

    .ssm-strategy_content--progress-card:nth-child(3) {
        --accent: #F97316;
    }

    .ssm-strategy_content--progress-card:nth-child(4) {
        --accent: #3B82F6;
    }

    /* top colour wash */
    .ssm-strategy_content--progress-card::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: inherit;
        background: linear-gradient(180deg, color-mix(in srgb, var(--accent) 9%, transparent) 0%, transparent 46%);
        pointer-events: none;
    }

    /* bottom accent bar that grows on hover */
    .ssm-strategy_content--progress-card::after {
        content: "";
        position: absolute;
        left: 26px;
        right: 26px;
        bottom: 0;
        height: 4px;
        border-radius: 4px 4px 0 0;
        background: var(--accent);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .4s cubic-bezier(.2, .8, .2, 1);
    }

    .ssm-strategy_content--progress-card:hover {
        transform: translateY(-8px);
        border-color: color-mix(in srgb, var(--accent) 35%, transparent);
        box-shadow: 0 24px 50px color-mix(in srgb, var(--accent) 20%, transparent);
    }

    .ssm-strategy_content--progress-card:hover::after {
        transform: scaleX(1);
    }

    /* arrow connector between cards */
    .ssm-strategy_content--progress-card:not(:last-child) .ssm-strategy_content--progress-card-top::after {
        content: "";
        position: absolute;
        top: 24px;
        right: -40px;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%237C3AED' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='m9 6 6 6-6 6'/%3E%3C/svg%3E") center / 13px no-repeat;
        border: 1px solid var(--smm-border-purple);
        box-shadow: var(--smm-shadow-sm);
        z-index: 2;
    }

    .ssm-strategy_content--progress-card-top {
        position: relative;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }

    .ssm-strategy_content--progress-card-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        border-radius: 18px;
        color: var(--accent);
        background: color-mix(in srgb, var(--accent) 12%, #fff);
        box-shadow: inset 0 0 0 1px color-mix(in srgb, var(--accent) 22%, transparent);
        transition: transform .35s cubic-bezier(.34, 1.56, .64, 1), background .3s ease, color .3s ease, box-shadow .3s ease;
    }

    .ssm-strategy_content--progress-card-icon svg {
        width: 28px;
        height: 28px;
        display: block;
    }

    .ssm-strategy_content--progress-card:hover .ssm-strategy_content--progress-card-icon {
        transform: rotate(-6deg) scale(1.08);
        color: #fff;
        background: var(--accent);
        box-shadow: 0 10px 24px color-mix(in srgb, var(--accent) 40%, transparent);
    }

    /* big outlined step number */
    .ssm-strategy_content--progress-card-num {
        font-size: 46px;
        font-weight: 800;
        line-height: 1;
        letter-spacing: -0.03em;
        color: transparent;
        -webkit-text-stroke: 1.5px color-mix(in srgb, var(--accent) 38%, transparent);
        user-select: none;
        transition: -webkit-text-stroke-color .3s ease;
    }

    .ssm-strategy_content--progress-card:hover .ssm-strategy_content--progress-card-num {
        -webkit-text-stroke-color: var(--accent);
    }

    .ssm-strategy_content--progress-card-content {
        position: relative;
    }

    .ssm-strategy_content--progress-card-content h3 {
        margin: 0 0 8px;
        font-size: 20px;
        font-weight: 800;
        letter-spacing: -0.01em;
        color: var(--smm-text-dark);
    }

    .ssm-strategy_content--progress-card-content p {
        margin: 0;
        font-size: 14.5px;
        line-height: 1.65;
        color: var(--smm-text-muted);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 1100px) {
        .ssm-strategy_content--progress {
            grid-template-columns: repeat(2, 1fr);
            row-gap: 24px;
        }

        .ssm-strategy_content--progress-card .ssm-strategy_content--progress-card-top::after {
            display: none;
        }
    }

    @media (max-width: 560px) {
        .ssm-strategy_content--heading {
            margin-bottom: 36px;
        }

        .ssm-strategy_content--progress {
            grid-template-columns: 1fr;
        }

        .ssm-strategy_content--progress-card {
            padding: 24px 22px 30px;
        }

        .ssm-strategy_content--progress-card:hover {
            transform: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .ssm-strategy_content--progress-card,
        .ssm-strategy_content--progress-card::after,
        .ssm-strategy_content--progress-card-icon {
            transition: none;
        }
    }
</style>

<section class="ssm-strategy">
    <div class="ssm-strategy_content">
        <div class="ssm-strategy_content--heading">
            <p class="ssm-strategy_content--heading-eyebrow"><span></span>How We Work</p>
            <h2>Our Social Media <em>Strategy</em></h2>
            <p>A proven process that turns followers into customers.</p>
        </div>

        <div class="ssm-strategy_content--progress">

            <!-- 01 Discover -->
            <div class="ssm-strategy_content--progress-card">
                <div class="ssm-strategy_content--progress-card-top">
                    <span class="ssm-strategy_content--progress-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </span>
                    <span class="ssm-strategy_content--progress-card-num">01</span>
                </div>
                <div class="ssm-strategy_content--progress-card-content">
                    <h3>Discover</h3>
                    <p>We analyse your brand, audience and competitors.</p>
                </div>
            </div>

            <!-- 02 Strategise -->
            <div class="ssm-strategy_content--progress-card">
                <div class="ssm-strategy_content--progress-card-top">
                    <span class="ssm-strategy_content--progress-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9.5" />
                            <circle cx="12" cy="12" r="5.5" />
                            <circle cx="12" cy="12" r="1.6" fill="currentColor" />
                        </svg>
                    </span>
                    <span class="ssm-strategy_content--progress-card-num">02</span>
                </div>
                <div class="ssm-strategy_content--progress-card-content">
                    <h3>Strategise</h3>
                    <p>We build a custom strategy aligned with your goals.</p>
                </div>
            </div>

            <!-- 03 Create -->
            <div class="ssm-strategy_content--progress-card">
                <div class="ssm-strategy_content--progress-card-top">
                    <span class="ssm-strategy_content--progress-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20h9" />
                            <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
                        </svg>
                    </span>
                    <span class="ssm-strategy_content--progress-card-num">03</span>
                </div>
                <div class="ssm-strategy_content--progress-card-content">
                    <h3>Create</h3>
                    <p>We produce engaging content that connects.</p>
                </div>
            </div>

            <!-- 04 Optimise -->
            <div class="ssm-strategy_content--progress-card">
                <div class="ssm-strategy_content--progress-card-top">
                    <span class="ssm-strategy_content--progress-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                            <polyline points="16 7 22 7 22 13" />
                        </svg>
                    </span>
                    <span class="ssm-strategy_content--progress-card-num">04</span>
                </div>
                <div class="ssm-strategy_content--progress-card-content">
                    <h3>Optimise</h3>
                    <p>We track performance and optimise for better results.</p>
                </div>
            </div>

        </div>
    </div>
</section>