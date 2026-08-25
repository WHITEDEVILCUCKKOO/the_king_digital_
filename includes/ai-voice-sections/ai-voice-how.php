<style>
    :root {

        /* ========================================
       AI VOICE — COLOR SYSTEM
        ======================================== */

        /* ---------- Primary ---------- */
        --ai-orange: #EA5C28;
        --ai-orange-bright: #F4511E;
        --ai-orange-dark: #D94717;

        /* ---------- Secondary ---------- */
        --ai-red: #E3413E;
        --ai-pink: #E31D5B;
        --ai-pink-light: #EC4899;

        /* ---------- Gradients ---------- */
        --ai-gradient: linear-gradient(90deg,
                #F4511E 0%,
                #E3413E 50%,
                #E31D5B 100%);

        --ai-gradient-reverse: linear-gradient(90deg,
                #E31D5B 0%,
                #E3413E 50%,
                #F4511E 100%);

        --ai-gradient-soft: linear-gradient(135deg,
                rgba(244, 81, 30, 0.12),
                rgba(227, 29, 91, 0.12));


        /* ========================================
       DARK / AI SECTIONS
        ======================================== */

        --ai-dark: #120E20;
        --ai-dark-secondary: #171126;
        --ai-dark-purple: #251636;
        --ai-dark-card: #1F1A31;
        --ai-dark-card-hover: #2A2040;

        --ai-dark-border: rgba(255, 255, 255, 0.08);

        --ai-dark-text: #FFFFFF;
        --ai-dark-text-secondary: #E5E7EB;
        --ai-dark-text-muted: #A1A1AA;


        /* ========================================
       LIGHT SECTIONS
        ======================================== */

        --ai-white: #FFFFFF;
        --ai-bg: #FFFFFF;

        --ai-bg-warm: #ffffffdc;
        --ai-bg-soft: #FEF3F1;
        --ai-bg-orange: #FFF1E8;

        --ai-bg-pink: #FFF1F5;
        --ai-bg-purple: #F7F3FF;


        /* ========================================
       TEXT
        ======================================== */

        --ai-text: #111827;
        --ai-text-heading: #111827;
        --ai-text-body: #374151;
        --ai-text-muted: #6B7280;
        --ai-text-light: #9CA3AF;

        --ai-text-white: #FFFFFF;


        /* ========================================
       BORDERS
        ======================================== */

        --ai-border: #E5E7EB;
        --ai-border-light: #F3F4F6;
        --ai-border-orange: rgba(234, 92, 40, 0.25);
        --ai-border-pink: rgba(227, 29, 91, 0.20);


        /* ========================================
       CARDS
        ======================================== */

        --ai-card-bg: #FFFFFF;
        --ai-card-bg-soft: #FFF9F5;

        --ai-card-shadow:
            0 4px 20px rgba(17, 24, 39, 0.06);

        --ai-card-shadow-hover:
            0 12px 35px rgba(17, 24, 39, 0.10);


        /* ========================================
       STATUS / UI COLORS
        ======================================== */

        --ai-success: #22C55E;
        --ai-success-light: #DCFCE7;

        --ai-warning: #F59E0B;
        --ai-warning-light: #FEF3C7;

        --ai-info: #3B82F6;
        --ai-info-light: #DBEAFE;

        --ai-danger: #EF4444;
        --ai-danger-light: #FEE2E2;


        /* ========================================
       VOICE / WAVEFORM
        ======================================== */

        --ai-wave-primary: #F4511E;
        --ai-wave-secondary: #E31D5B;
        --ai-wave-light: rgba(244, 81, 30, 0.20);

        --ai-pulse: rgba(234, 92, 40, 0.25);


        /* ========================================
       BUTTONS
        ======================================== */

        --ai-btn-primary: #EA5C28;
        --ai-btn-primary-hover: #D94717;

        --ai-btn-gradient: linear-gradient(90deg,
                #F4511E,
                #E31D5B);

        --ai-btn-text: #FFFFFF;


        /* ========================================
       RADIUS
        ======================================== */

        --ai-radius-sm: 6px;
        --ai-radius-md: 10px;
        --ai-radius-lg: 14px;
        --ai-radius-xl: 20px;
        --ai-radius-full: 999px;


        /* ========================================
       SPACING
        ======================================== */

        --ai-section-padding: 100px;
        --ai-container-width: 1200px;


        /* ========================================
       TRANSITIONS
        ======================================== */

        --ai-transition-fast: 0.2s ease;
        --ai-transition: 0.3s ease;
        --ai-transition-slow: 0.5s ease;
    }

    .voice-how {
        position: relative;
        background: var(--ai-dark);
        padding: var(--ai-section-padding) 24px;
        overflow: hidden;
        isolation: isolate;
    }

    /* Ambient glows — quiet, keeps the dark canvas from feeling flat */
    .voice-how::before,
    .voice-how::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        z-index: -1;
        pointer-events: none;
    }

    .voice-how::before {
        width: 520px;
        height: 520px;
        top: -260px;
        left: -160px;
        background: var(--ai-orange-bright);
        opacity: 0.10;
    }

    .voice-how::after {
        width: 480px;
        height: 480px;
        bottom: -240px;
        right: -160px;
        background: var(--ai-pink);
        opacity: 0.10;
    }

    .voice-how_content {
        position: relative;
        width: 100%;
        max-width: var(--ai-container-width);
        margin: 0 auto;
    }

    .voice-how_content--heading {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 14px;
        text-align: center;
        max-width: 640px;
        margin: 0 auto 72px;
    }

    .voice-how_content--heading h1 {
        margin: 0;
        font-size: 40px;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.01em;
        color: var(--ai-dark-text);
    }

    .voice-how_content--heading p {
        margin: 0;
        font-size: 17px;
        line-height: 1.6;
        color: var(--ai-dark-text-muted);
    }

    .voice-how_content--progress {
        position: relative;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
        counter-reset: voice-step;
    }

    /* Connecting line threading through each icon's center */
    .voice-how_content--progress::before {
        content: "";
        position: absolute;
        top: 34px;
        left: calc(10% + 34px);
        right: calc(10% + 34px);
        height: 2px;
        background: linear-gradient(90deg,
                rgba(244, 81, 30, 0.55),
                rgba(227, 65, 62, 0.55),
                rgba(227, 29, 91, 0.55));
        z-index: 0;
    }

    .voice-how_content--progress-card {
        counter-increment: voice-step;
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
        background: var(--ai-dark-card);
        border: 1px solid var(--ai-dark-border);
        border-radius: var(--ai-radius-lg);
        padding: 28px 22px 26px;
        transition: background var(--ai-transition), border-color var(--ai-transition), transform var(--ai-transition), box-shadow var(--ai-transition);
    }

    .voice-how_content--progress-card:hover {
        background: var(--ai-dark-card-hover);
        border-color: var(--ai-border-orange);
        transform: translateY(-6px);
        box-shadow: var(--ai-card-shadow-hover);
    }

    .voice-how_content--progress-card::after {
        content: counter(voice-step, decimal-leading-zero);
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.04em;
        color: var(--ai-dark-text-muted);
    }

    .voice-how_content--progress-card > span {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 68px;
        height: 68px;
        border-radius: var(--ai-radius-full);
        background: var(--ai-gradient);
        box-shadow: 0 0 0 6px rgba(244, 81, 30, 0.08);
        flex: none;
        transition: box-shadow var(--ai-transition), transform var(--ai-transition);
    }

    .voice-how_content--progress-card:hover > span {
        box-shadow: 0 0 0 8px rgba(244, 81, 30, 0.14);
        transform: scale(1.05);
    }

    .voice-how_content--progress-card > span svg {
        width: 24px;
        height: 24px;
        fill: var(--ai-text-white);
    }

    .voice-how_content--progress-card h3 {
        margin: 0;
        font-size: 17px;
        font-weight: 700;
        line-height: 1.3;
        color: var(--ai-dark-text);
        padding-right: 30px;
    }

    .voice-how_content--progress-card p {
        margin: 0;
        font-size: 14.5px;
        line-height: 1.6;
        color: var(--ai-dark-text-muted);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 1100px) {
        .voice-how_content--progress {
            grid-template-columns: repeat(3, 1fr);
            row-gap: 44px;
        }

        .voice-how_content--progress::before {
            display: none;
        }
    }

    @media (max-width: 640px) {
        :root {
            --ai-section-padding: 64px;
        }

        .voice-how_content--heading {
            margin-bottom: 44px;
        }

        .voice-how_content--heading h1 {
            font-size: 28px;
        }

        .voice-how_content--heading p {
            font-size: 15px;
        }

        .voice-how_content--progress {
            grid-template-columns: 1fr;
            gap: 0;
            row-gap: 0;
        }

        .voice-how_content--progress-card {
            position: relative;
            padding-left: 24px;
            border: none;
            background: none;
            border-radius: 0;
            padding-top: 0;
            padding-bottom: 36px;
        }

        .voice-how_content--progress-card:hover {
            transform: none;
            box-shadow: none;
            background: none;
        }

        /* Vertical connecting line on mobile timeline */
        .voice-how_content--progress-card::before {
            content: "";
            position: absolute;
            top: 68px;
            bottom: -8px;
            left: 33px;
            width: 2px;
            background: linear-gradient(180deg,
                    rgba(244, 81, 30, 0.5),
                    rgba(227, 29, 91, 0.15));
        }

        .voice-how_content--progress-card:last-child {
            padding-bottom: 0;
        }

        .voice-how_content--progress-card:last-child::before {
            display: none;
        }

        .voice-how_content--progress-card::after {
            top: 0;
            right: 0;
        }

        .voice-how_content--progress-card h3 {
            padding-right: 0;
        }
    }
</style>

<section class="voice-how">
    <div class="voice-how_content">
        <div class="voice-how_content--heading">
            <h1>How It Works</h1>
            <p>From your first conversation with us to a fully operational AI Voice solution, we keep the process simple and transparent.</p>
        </div>
        <div class="voice-how_content--progress">
            <div class="voice-how_content--progress-card">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M232 96l-80 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l80 0c13.3 0 24 10.7 24 24s-10.7 24-24 24zm0 48c37.1 0 67.6-28 71.6-64L320 80c8.8 0 16 7.2 16 16l0 352c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16L48 96c0-8.8 7.2-16 16-16l16.4 0c4 36 34.5 64 71.6 64l80 0zM291.9 32C279 12.7 257 0 232 0L152 0c-25 0-47 12.7-59.9 32L64 32C28.7 32 0 60.7 0 96L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-352c0-35.3-28.7-64-64-64l-28.1 0z" />
                    </svg>
                </span>
                <h3>Share Your Requirements</h3>
                <p>Tell us about your business, calling requirements, target audience, and the problems you want to automate.</p>
            </div>
            <div class="voice-how_content--progress-card">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M80 32C53.5 32 32 53.5 32 80s21.5 48 48 48l152 0 0 40-48 48-72 0c-39.8 0-72 32.2-72 72l0 64-8 0c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l64 0c17.7 0 32-14.3 32-32l0-64c0-17.7-14.3-32-32-32l-8 0 0-64c0-13.3 10.7-24 24-24l72 0 48 48 0 40-8 0c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l64 0c17.7 0 32-14.3 32-32l0-64c0-17.7-14.3-32-32-32l-8 0 0-40 48-48 72 0c13.3 0 24 10.7 24 24l0 64-8 0c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l64 0c17.7 0 32-14.3 32-32l0-64c0-17.7-14.3-32-32-32l-8 0 0-64c0-39.8-32.2-72-72-72l-72 0-48-48 0-40 152 0c26.5 0 48-21.5 48-48s-21.5-48-48-48L80 32z" />
                    </svg>
                </span>
                <h3>Plan Your Voice Solution</h3>
                <p>We design the conversation flow, define use cases, configure the AI behavior, and plan the required integrations.</p>
            </div>
            <div class="voice-how_content--progress-card">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M415.9 210.5c12.2-3.3 25 2.5 30.5 13.8L465 261.9c10.3 1.4 20.4 4.2 29.9 8.1l35-23.3c10.5-7 24.4-5.6 33.3 3.3l19.2 19.2c8.9 8.9 10.3 22.9 3.3 33.3l-23.3 34.9c1.9 4.7 3.6 9.6 5 14.7 1.4 5.1 2.3 10.1 3 15.2l37.7 18.6c11.3 5.6 17.1 18.4 13.8 30.5l-7 26.2c-3.3 12.1-14.6 20.3-27.2 19.5l-42-2.7c-6.3 8.1-13.6 15.6-21.9 22l2.7 41.9c.8 12.6-7.4 24-19.5 27.2l-26.2 7c-12.2 3.3-24.9-2.5-30.5-13.8l-18.6-37.6c-10.3-1.4-20.4-4.2-29.9-8.1l-35 23.3c-10.5 7-24.4 5.6-33.3-3.3l-19.2-19.2c-8.9-8.9-10.3-22.8-3.3-33.3l23.3-35c-1.9-4.7-3.6-9.6-5-14.7s-2.3-10.2-3-15.2l-37.7-18.6c-11.3-5.6-17-18.4-13.8-30.5l7-26.2c3.3-12.1 14.6-20.3 27.2-19.5l41.9 2.7c6.3-8.1 13.6-15.6 21.9-22l-2.7-41.8c-.8-12.6 7.4-24 19.5-27.2l26.2-7zM448.4 340a44 44 0 1 0 .1 88 44 44 0 1 0 -.1-88zM224.9-45.5l26.2 7c12.1 3.3 20.3 14.7 19.5 27.2l-2.7 41.8c8.3 6.4 15.6 13.8 21.9 22l42-2.7c12.5-.8 23.9 7.4 27.2 19.5l7 26.2c3.2 12.1-2.5 24.9-13.8 30.5l-37.7 18.6c-.7 5.1-1.7 10.2-3 15.2s-3.1 10-5 14.7l23.3 35c7 10.5 5.6 24.4-3.3 33.3L307.3 262c-8.9 8.9-22.8 10.3-33.3 3.3L239 242c-9.5 3.9-19.6 6.7-29.9 8.1l-18.6 37.6c-5.6 11.3-18.4 17-30.5 13.8l-26.2-7c-12.2-3.3-20.3-14.7-19.5-27.2l2.7-41.9c-8.3-6.4-15.6-13.8-21.9-22l-42 2.7c-12.5 .8-23.9-7.4-27.2-19.5l-7-26.2c-3.2-12.1 2.5-24.9 13.8-30.5l37.7-18.6c.7-5.1 1.7-10.1 3-15.2 1.4-5.1 3-10 5-14.7L55.1 46.5c-7-10.5-5.6-24.4 3.3-33.3L77.6-6c8.9-8.9 22.8-10.3 33.3-3.3l35 23.3c9.5-3.9 19.6-6.7 29.9-8.1l18.6-37.6c5.6-11.3 18.3-17 30.5-13.8zM192.4 84a44 44 0 1 0 0 88 44 44 0 1 0 0-88z" />
                    </svg>
                </span>
                <h3>Build & Configure</h3>
                <p>Our team develops and configures your AI voice agent, including prompts, workflows, voice, business logic, and integrations.</p>
            </div>
            <div class="voice-how_content--progress-card">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M256 0c23.7 0 44.4 12.9 55.4 32l8.6 0c35.3 0 64 28.7 64 64l0 352c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 96C0 60.7 28.7 32 64 32l8.6 0C83.6 12.9 104.3 0 128 0L256 0zm26.9 212.6c-10.7-7.8-25.7-5.4-33.5 5.3l-85.6 117.7-26.5-27.4c-9.2-9.5-24.4-9.8-33.9-.6s-9.8 24.4-.6 33.9l46.4 48c4.9 5.1 11.8 7.8 18.9 7.3s13.6-4.1 17.8-9.8L288.2 246.1c7.8-10.7 5.4-25.7-5.3-33.5zM136 64c-13.3 0-24 10.7-24 24s10.7 24 24 24l112 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L136 64z" />
                    </svg>
                </span>
                <h3>Test & Optimize</h3>
                <p>We test conversations, edge cases, call quality, response accuracy, and workflows before deployment.</p>
            </div>
            <div class="voice-how_content--progress-card">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M32 32c17.7 0 32 14.3 32 32l0 336c0 8.8 7.2 16 16 16l400 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L80 480c-44.2 0-80-35.8-80-80L0 64C0 46.3 14.3 32 32 32zM144 224c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32zm144-64l0 160c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-160c0-17.7 14.3-32 32-32s32 14.3 32 32zm80 32c17.7 0 32 14.3 32 32l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96c0-17.7 14.3-32 32-32zM512 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-224c0-17.7 14.3-32 32-32s32 14.3 32 32z" />
                    </svg>
                </span>
                <h3>Launch & Monitor</h3>
                <p>Your AI voice agent goes live, while performance and conversations are monitored to continuously improve the experience.</p>
            </div>
        </div>
    </div>
</section>