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
   STRATEGY / PROGRESS SECTION
   (dark, to give the page some rhythm against the light
   hero and stats sections)
========================================================= */

    .ssm-strategy {
        position: relative;
        overflow: hidden;
        background: linear-gradient(160deg, var(--smm-bg-purple) 0%, var(--smm-bg-pink) 100%);
        padding: 24px 0;
    }

    /* Ambient glows */
    .ssm-strategy::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 0;
        background:
            radial-gradient(circle, rgba(124, 58, 237, 0.30) 0%, rgba(124, 58, 237, 0) 65%) -140px -120px / 480px 480px no-repeat,
            radial-gradient(circle, rgba(236, 72, 153, 0.20) 0%, rgba(236, 72, 153, 0) 65%) calc(100% + 140px) calc(100% + 100px) / 460px 460px no-repeat;
    }

    /* Faint dot grid, bottom-right */
    .ssm-strategy::after {
        content: "";
        position: absolute;
        right: -20px;
        bottom: -20px;
        width: 220px;
        height: 220px;
        background-image: radial-gradient(rgba(255, 255, 255, 0.16) 1.4px, transparent 1.4px);
        background-size: 15px 15px;
        -webkit-mask-image: radial-gradient(circle at 70% 30%, #000 0%, #000 35%, transparent 72%);
        mask-image: radial-gradient(circle at 70% 30%, #000 0%, #000 35%, transparent 72%);
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
        position: relative;
        text-align: center;
        max-width: 560px;
        margin: 0 auto 56px;
    }

    .ssm-strategy_content--heading::before {
        content: "";
        position: absolute;
        left: 50%;
        top: -30px;
        width: 360px;
        height: 190px;
        transform: translateX(-50%);
        background: radial-gradient(ellipse at center, rgba(124, 58, 237, 0.28) 0%, rgba(124, 58, 237, 0) 72%);
        pointer-events: none;
        z-index: -1;
    }

    .ssm-strategy_content--heading h2 {
        font-size: clamp(26px, 3.2vw, 36px);
        font-weight: 800;
        color: var(--smm-text-dark);
        margin-bottom: 12px;
    }

    .ssm-strategy_content--heading p {
        font-size: 14.5px;
        line-height: 1.6;
        color: var(--smm-text-muted);
        font-weight: 600;
    }

    /* Small gradient underline accent */
    .ssm-strategy_content--heading h2::after {
        content: "";
        display: block;
        width: 56px;
        height: 3px;
        margin: 14px auto 0;
        border-radius: 2px;
        background: var(--smm-gradient);
    }

    /* ---------- Progress row ---------- */

    .ssm-strategy_content--progress {
        position: relative;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 22px;
        counter-reset: smm-step;
    }

    /* Dotted connector threading through the icon centers */
    .ssm-strategy_content--progress::before {
        content: "";
        position: absolute;
        top: 52px;
        left: 12%;
        right: 12%;
        border-top: 2px dotted rgba(255, 255, 255, 0.16);
        z-index: 0;
    }

    .ssm-strategy_content--progress-card {
        counter-increment: smm-step;
        position: relative;
        z-index: 1;
        display: flex;
        /* flex-direction: column; */
        align-items: center;
        text-align: center;
        gap: 30px;
        background: var(--smm-dark-card);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--smm-radius-lg);
        padding: 20px 14px 24px;
        transition: transform 300ms ease, border-color 300ms ease, background 300ms ease, box-shadow 300ms ease;
    }

    /* Small "01" style step badge */
    .ssm-strategy_content--progress-card::before {
        content: counter(smm-step, decimal-leading-zero);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.05em;
        color: var(--smm-text-light);
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 3px 10px;
        border-radius: 999px;
    }

    .ssm-strategy_content--progress-card:hover {
        transform: translateY(-6px);
        border-color: rgba(255, 255, 255, 0.18);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.35);
    }

    /* Per-card accent, echoing each icon's own color */
    .ssm-strategy_content--progress-card:nth-child(1) {
        --smm-step-accent: #b037d2;
    }

    .ssm-strategy_content--progress-card:nth-child(2) {
        --smm-step-accent: #dc62e4;
    }

    .ssm-strategy_content--progress-card:nth-child(3) {
        --smm-step-accent: #4b85c3;
    }

    .ssm-strategy_content--progress-card:nth-child(4) {
        --smm-step-accent: #8855aa;
    }

    .ssm-strategy_content--progress-card:hover {
        background: linear-gradient(180deg, var(--smm-dark-card) 0%, color-mix(in srgb, var(--smm-step-accent) 10%, var(--smm-dark-card)) 100%);
    }

    .ssm-strategy_content--progress-card-icon {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 70px;
        height: 38px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.04);
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.06);
        transition: transform 300ms ease, box-shadow 300ms ease;
    }

    .ssm-strategy_content--progress-card-icon svg {
        width: 24px;
        height: 24px;
        filter: drop-shadow(0 6px 14px rgba(0, 0, 0, 0.35));
    }

    .ssm-strategy_content--progress-card:hover .ssm-strategy_content--progress-card-icon {
        transform: scale(1.08);
        box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.12), 0 0 0 8px color-mix(in srgb, var(--smm-step-accent) 16%, transparent);
    }

    .ssm-strategy_content--progress-card-content h3 {
        font-size: 14px;
        font-weight: 700;
        color: var(--smm-text-white);
        margin-bottom: 8px;
    }

    .ssm-strategy_content--progress-card-content p {
        font-size: 12px;
        line-height: 1.6;
        color: var(--smm-text-light);
        max-width: 210px;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 980px) {
        .ssm-strategy_content--progress {
            grid-template-columns: repeat(2, 1fr);
            row-gap: 22px;
        }

        .ssm-strategy_content--progress::before {
            display: none;
        }
    }

    @media (max-width: 560px) {
        .ssm-strategy {
            padding: 56px 0;
        }

        .ssm-strategy_content--heading {
            margin-bottom: 36px;
        }

        .ssm-strategy_content--progress {
            grid-template-columns: 1fr;
        }

        .ssm-strategy_content--progress-card:hover {
            transform: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .ssm-strategy_content--progress-card,
        .ssm-strategy_content--progress-card-icon {
            transition: none;
        }
    }
</style>

<section class="ssm-strategy">
    <div class="ssm-strategy_content">
        <div class="ssm-strategy_content--heading">
            <h2>Our Social Media Strategy</h2>
            <p>A Proven process that turns followers into customer.</p>
        </div>
        <div class="ssm-strategy_content--progress">
            <div class="ssm-strategy_content--progress-card">
                <span class="ssm-strategy_content--progress-card-icon">
                    <svg width="64px" height="64px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#b037d2">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <rect width="16" height="16" id="icon-bound" fill="none"></rect>
                            <path d="M15.708,13.587l-3.675-3.675C12.646,8.92,13,7.751,13,6.5C13,2.91,10.09,0,6.5,0S0,2.91,0,6.5S2.91,13,6.5,13 c1.251,0,2.42-0.354,3.412-0.967l3.675,3.675c0.389,0.389,1.025,0.389,1.414,0l0.707-0.707 C16.097,14.612,16.097,13.976,15.708,13.587z M3.318,9.682C2.468,8.832,2,7.702,2,6.5s0.468-2.332,1.318-3.182S5.298,2,6.5,2 s2.332,0.468,3.182,1.318C10.532,4.168,11,5.298,11,6.5s-0.468,2.332-1.318,3.182C8.832,10.532,7.702,11,6.5,11 S4.168,10.532,3.318,9.682z"></path>
                        </g>
                    </svg>
                </span>
                <div class="ssm-strategy_content--progress-card-content">
                    <h3>Discover</h3>
                    <p>We analyse your brand, audience and compititors.</p>
                </div>
            </div>
            <div class="ssm-strategy_content--progress-card">
                <span class="ssm-strategy_content--progress-card-icon">
                    <svg fill="#dc62e4" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 470 470" xml:space="preserve" stroke="#dc62e4">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M346.5,415h-6.426l-5.639-21.113c-3.14-11.754-13.733-21.361-25.627-24.101l-14.079-122.871 c8.347-3.292,14.271-11.432,14.271-20.935c0-9.777-6.271-18.114-15-21.21v-33.39l5.697-53.197 c0.797-7.434-1.423-14.485-6.249-19.856C288.622,92.958,281.847,90,274.37,90H257.5v-7.5c0-4.136,3.364-7.5,7.5-7.5h15 c4.143,0,7.5-3.358,7.5-7.5v-30c0-4.142-3.357-7.5-7.5-7.5h-15c-4.136,0-7.5-3.364-7.5-7.5v-15c0-4.142-3.357-7.5-7.5-7.5h-30 c-4.143,0-7.5,3.358-7.5,7.5v15c0,4.136-3.364,7.5-7.5,7.5h-15c-4.143,0-7.5,3.358-7.5,7.5v30c0,4.142,3.357,7.5,7.5,7.5h15 c4.136,0,7.5,3.364,7.5,7.5V90h-16.87c-7.476,0-14.251,2.958-19.077,8.328s-7.046,12.422-6.25,19.857L176,171.382v33.39 c-8.729,3.096-15,11.433-15,21.21c0,9.503,5.925,17.642,14.271,20.935l-14.078,122.871c-11.894,2.739-22.488,12.347-25.627,24.101 L129.927,415H123.5c-4.143,0-7.5,3.358-7.5,7.5v40c0,4.142,3.357,7.5,7.5,7.5h223c4.143,0,7.5-3.358,7.5-7.5v-40 C354,418.358,350.643,415,346.5,415z M279.81,248.481L293.62,369H176.381l13.809-120.519H279.81z M205,60h-7.5V45h7.5 c12.406,0,22.5-10.093,22.5-22.5V15h15v7.5c0,12.407,10.094,22.5,22.5,22.5h7.5v15H265c-12.406,0-22.5,10.093-22.5,22.5V90h-15v-7.5 C227.5,70.093,217.406,60,205,60z M187.71,108.354c1.943-2.163,4.756-3.354,7.92-3.354h78.74c3.164,0,5.978,1.191,7.921,3.355 c1.944,2.163,2.829,5.086,2.492,8.232l-5.022,46.894H213.5c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5H279v25h-88v-32.5 c0-0.267-0.015-0.533-0.043-0.799l-5.74-53.595C184.88,113.441,185.766,110.518,187.71,108.354z M183.5,218.481h103 c4.136,0,7.5,3.364,7.5,7.5s-3.364,7.5-7.5,7.5H183.59c-0.01,0-0.09,0-0.09,0c-4.136,0-7.5-3.364-7.5-7.5 S179.364,218.481,183.5,218.481z M339,455H131v-25h143.314c4.143,0,7.5-3.358,7.5-7.5s-3.357-7.5-7.5-7.5H145.453l4.605-17.242 c1.958-7.329,10.329-13.758,17.915-13.758c0.02,0,134.035,0,134.035,0c7.606,0,15.977,6.429,17.935,13.758L324.548,415h-20.234 c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5,7.5,7.5h29.972c0.053,0,4.714,0,4.714,0V455z"></path>
                        </g>
                    </svg>
                </span>
                <div class="ssm-strategy_content--progress-card-content">
                    <h3>Strategise</h3>
                    <p>We create a custom strategy align with your goals.</p>
                </div>
            </div>
            <div class="ssm-strategy_content--progress-card">
                <span class="ssm-strategy_content--progress-card-icon">
                    <svg width="64px" height="64px" viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g fill="none" fill-rule="evenodd" stroke="#4b85c3" stroke-linecap="round" stroke-linejoin="round" transform="translate(3 3)">
                                <path d="m7 1.5h-4.5c-1.1045695 0-2 .8954305-2 2v9.0003682c0 1.1045695.8954305 2 2 2h10c1.1045695 0 2-.8954305 2-2v-4.5003682"></path>
                                <path d="m14.5.46667982c.5549155.5734054.5474396 1.48588056-.0167966 2.05011677l-6.9832034 6.98320341-3 1 1-3 6.9874295-7.04563515c.5136195-.5178979 1.3296676-.55351813 1.8848509-.1045243z"></path>
                                <path d="m12.5 2.5.953 1"></path>
                            </g>
                        </g>
                    </svg>
                </span>
                <div class="ssm-strategy_content--progress-card-content">
                    <h3>Create</h3>
                    <p>We produce engaging content that connects.</p>
                </div>
            </div>
            <div class="ssm-strategy_content--progress-card">
                <span class="ssm-strategy_content--progress-card-icon">
                    <svg fill="#8855aa" width="64px" height="64px" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: none;
                                    }
                                </style>
                            </defs>
                            <title>analytics</title>
                            <path d="M4,2H2V28a2,2,0,0,0,2,2H30V28H4Z"></path>
                            <path d="M30,9H23v2h3.59L19,18.59l-4.29-4.3a1,1,0,0,0-1.42,0L6,21.59,7.41,23,14,16.41l4.29,4.3a1,1,0,0,0,1.42,0L28,12.41V16h2Z"></path>
                            <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"></rect>
                        </g>
                    </svg>
                </span>
                <div class="ssm-strategy_content--progress-card-content">
                    <h3>Optimise</h3>
                    <p>We track perfomance and optimise for better results.</p>
                </div>
            </div>
        </div>
    </div>
</section>