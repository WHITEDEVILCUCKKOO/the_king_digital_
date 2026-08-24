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

    /* ========================================
       SECTION
    ======================================== */

    .voice-progress {
        background: var(--ai-bg-soft);
        padding: var(--ai-section-padding) 0;
    }

    .voice-progress_content {
        max-width: var(--ai-container-width);
        margin: 0 auto;
        padding: 0 40px;
    }

    /* ---------- Heading ---------- */

    .voice-progress_content--heading {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 64px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .voice-progress_content--eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--ai-bg-orange);
        border: 1px solid var(--ai-border-orange);
        color: var(--ai-orange-dark);
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.2px;
        padding: 7px 16px 7px 12px;
        border-radius: var(--ai-radius-full);
        margin-bottom: 20px;
    }

    .voice-progress_content--eyebrow span svg {
        width: 15px;
        height: 15px;
        display: block;
        fill: var(--ai-orange-dark);
    }

    .voice-progress_content--texting {
        font-size: 40px;
        line-height: 1.15;
        font-weight: 800;
        letter-spacing: -1px;
        color: var(--ai-text-heading);
        margin-bottom: 16px;
    }

    .voice-progress_content--para {
        font-size: 16px;
        line-height: 1.65;
        color: var(--ai-text-muted);
    }

    /* ---------- Flow / Progress diagram ---------- */

    .voice-progress_content--progress {
        --flow-color: var(--ai-text-heading);
        margin: 0 auto 70px;
        max-width: 1000px;
    }

    .flow-row {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        gap: 10px;
    }

    .flow-row-2 {
        margin-top: 46px;
    }

    .flow-spacer {
        width: 176px;
        flex-shrink: 0;
    }

    .flow-step {
        width: 176px;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 16px;
    }

    .flow-step .flow-icon {
        width: 68px;
        height: 68px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1.5px solid transparent;
        color: var(--flow-color);
        animation: flowGlow 7s infinite;
        animation-delay: calc(var(--i) * 1s);
    }

    .flow-step .flow-icon svg {
        width: 40px;
        height: 40px;
    }

    .flow-step p {
        font-size: 13.5px;
        font-weight: 600;
        line-height: 1.4;
        color: var(--ai-text-heading);
    }

    @keyframes flowGlow {

        0%,
        8%,
        100% {
            box-shadow: none;
            border-color: transparent;
            color: var(--flow-color);
            transform: scale(1);
        }

        3% {
            box-shadow: 0 0 0 8px var(--ai-border-orange);
            border-color: var(--ai-orange);
            color: var(--ai-orange-bright);
            transform: scale(1.08);
        }
    }

    .flow-arrow {
        margin-top: 24px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        color: var(--ai-text-light);
    }

    .flow-arrow svg {
        width: 34px;
        height: 14px;
    }

    .flow-arrow svg path {
        stroke-dasharray: 4 4;
        animation: dashFlow 1s linear infinite;
    }

    .flow-row-2 .flow-arrow svg {
        transform: scaleX(-1);
    }

    @keyframes dashFlow {
        to {
            stroke-dashoffset: -16;
        }
    }

    .flow-connector {
        display: flex;
        justify-content: flex-end;
        padding-right: 40px;
        margin: -6px 0 -6px;
    }

    .flow-connector svg {
        width: 60px;
        height: 46px;
        color: var(--ai-text-light);
    }

    .flow-connector svg path {
        stroke-dasharray: 5 5;
        animation: dashFlow 1.2s linear infinite;
    }

    /* ---------- Matrix / stat cards ---------- */

    .voice-progress_content--matrix {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .voice-progress_content--matrix-card {
        background: var(--ai-card-bg);
        border: 1px solid var(--ai-border-light);
        border-radius: var(--ai-radius-lg);
        box-shadow: var(--ai-card-shadow);
        padding: 26px 18px;
        text-align: center;
        transition: var(--ai-transition-fast);
    }

    .voice-progress_content--matrix-card:hover {
        box-shadow: var(--ai-card-shadow-hover);
        transform: translateY(-3px);
    }

    .voice-progress_content--matrix-card strong {
        display: block;
        font-size: 22px;
        font-weight: 800;
        color: var(--ai-orange-bright);
        margin-bottom: 8px;
        letter-spacing: -0.3px;
    }

    .voice-progress_content--matrix-card small {
        font-size: 13px;
        font-weight: 500;
        color: var(--ai-text-muted);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 900px) {
        .flow-row {
            flex-wrap: wrap;
        }

        .flow-spacer {
            display: none;
        }

        .flow-connector {
            display: none;
        }

        .flow-row-2 {
            margin-top: 10px;
        }

        .voice-progress_content--matrix {
            grid-template-columns: repeat(2, 1fr);
        }

        .voice-progress_content--texting {
            font-size: 30px;
        }
    }
</style>

<section class="voice-progress">
    <div class="voice-progress_content">
        <div class="voice-progress_content--heading">
            <p class="voice-progress_content--eyebrow">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M208 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm0 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM48 208a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm368 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM75 369.1A48 48 0 1 1 142.9 437 48 48 0 1 1 75 369.1zM75 75A48 48 0 1 1 142.9 142.9 48 48 0 1 1 75 75zM437 369.1A48 48 0 1 1 369.1 437 48 48 0 1 1 437 369.1z" />
                    </svg>
                </span>
                How
            </p>
            <h1 class="voice-progress_content--texting">How AI Voice Agents Work</h1>
            <p class="voice-progress_content--para">From the first word spoken to the final response, every conversation passes through an intelligent real-time voice pipeline.</p>
        </div>

        <div class="voice-progress_content--progress">

            <!-- Row 1: steps 1 -> 4, left to right -->
            <div class="flow-row flow-row-1">
                <div class="flow-step" style="--i:0">
                    <span class="flow-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M24 14c-6 0-10 5-10 12s2 12 6 15l-4 6h12l3-6c5-1 8-5 8-11" />
                            <path d="M40 24c2 2 3 5 3 8s-1 6-3 8" opacity="0.85" />
                            <path d="M46 20c4 4 6 9 6 14s-2 10-6 14" opacity="0.55" />
                        </svg>
                    </span>
                    <p>Capturing the User's Voice Input</p>
                </div>

                <span class="flow-arrow">
                    <svg viewBox="0 0 34 14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <path d="M1 7h26M20 1l7 6-7 6" />
                    </svg>
                </span>

                <div class="flow-step" style="--i:1">
                    <span class="flow-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="6" y="6" width="26" height="20" rx="4" />
                            <path d="M12 20v-8M18 22v-12M24 20v-8" stroke-width="2.5" />
                            <rect x="26" y="24" width="30" height="26" rx="4" />
                            <path d="M33 34h16M33 40h12M33 46h16" stroke-width="2.5" />
                        </svg>
                    </span>
                    <p>Automatic Speech Recognition (ASR)</p>
                </div>

                <span class="flow-arrow">
                    <svg viewBox="0 0 34 14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <path d="M1 7h26M20 1l7 6-7 6" />
                    </svg>
                </span>

                <div class="flow-step" style="--i:2">
                    <span class="flow-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="32" cy="18" r="10" />
                            <path d="M32 4v4M32 28v4M46 18h-4M22 18h-4M42 8l-3 3M25 27l-3 3M42 28l-3-3M25 9l-3 3" />
                            <path d="M32 28v8" />
                            <rect x="10" y="38" width="44" height="8" rx="2" />
                            <rect x="10" y="48" width="44" height="8" rx="2" />
                            <circle cx="16" cy="42" r="1.4" fill="currentColor" />
                            <circle cx="16" cy="52" r="1.4" fill="currentColor" />
                        </svg>
                    </span>
                    <p>Natural Language Processing (NLP)</p>
                </div>

                <span class="flow-arrow">
                    <svg viewBox="0 0 34 14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <path d="M1 7h26M20 1l7 6-7 6" />
                    </svg>
                </span>

                <div class="flow-step" style="--i:3">
                    <span class="flow-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="12" r="8" />
                            <path d="M14 12l3 3 6-6" />
                            <circle cx="46" cy="12" r="8" />
                            <path d="M42 8l8 8M50 8l-8 8" />
                            <path d="M18 20v6h28v-6M32 26v10" />
                            <path d="M24 44c-2-4 0-8 4-9-1-4 2-8 6-7 3-8 12-6 12 2 4 1 5 6 2 9 2 3 0 7-3 8-1 3-5 4-7 2-3 3-8 1-8-3-4 0-6-3-6-2z" />
                        </svg>
                    </span>
                    <p>Decision-Making and Task Execution</p>
                </div>
            </div>

            <!-- curved connector wrapping row 1 -> row 2 -->
            <div class="flow-connector">
                <svg viewBox="0 0 60 46" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <path d="M10 2v18a8 8 0 0 0 8 8h20M46 20l-8 8 8 8" />
                </svg>
            </div>

            <!-- Row 2: steps 5 -> 7, displayed right to left -->
            <div class="flow-row flow-row-2">
                <div class="flow-spacer"></div>

                <div class="flow-step" style="--i:6">
                    <span class="flow-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22a20 20 0 1 1 -2 14" />
                            <path d="M8 16l2 8 8-2" />
                            <rect x="24" y="30" width="6" height="14" rx="1.5" />
                            <rect x="33" y="24" width="6" height="20" rx="1.5" />
                            <rect x="42" y="34" width="6" height="10" rx="1.5" />
                        </svg>
                    </span>
                    <p>Continuous Learning and Improvement</p>
                </div>

                <span class="flow-arrow">
                    <svg viewBox="0 0 34 14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <path d="M1 7h26M20 1l7 6-7 6" />
                    </svg>
                </span>

                <div class="flow-step" style="--i:5">
                    <span class="flow-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="6" y="24" width="30" height="26" rx="4" />
                            <path d="M13 34h16M13 40h12M13 46h16" stroke-width="2.5" />
                            <rect x="32" y="6" width="26" height="20" rx="4" />
                            <path d="M40 20v-8M46 22v-12M52 20v-8" stroke-width="2.5" />
                        </svg>
                    </span>
                    <p>Converting Text to Speech</p>
                </div>

                <span class="flow-arrow">
                    <svg viewBox="0 0 34 14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                        <path d="M1 7h26M20 1l7 6-7 6" />
                    </svg>
                </span>

                <div class="flow-step" style="--i:4">
                    <span class="flow-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="32" cy="32" r="10" />
                            <path d="M32 18v4M32 42v4M46 32h-4M22 32h-4M42 22l-3 3M25 39l-3 3M42 42l-3-3M25 25l-3-3" />
                            <path d="M14 20a24 24 0 0 1 40-6" />
                            <path d="M50 44a24 24 0 0 1-40 6" />
                            <path d="M50 10l4 4-6 2M14 54l-4-4 6-2" />
                        </svg>
                    </span>
                    <p>Generating a Natural Response</p>
                </div>
            </div>
        </div>

        <div class="voice-progress_content--matrix">
            <div class="voice-progress_content--matrix-card">
                <strong>&lt; 1 sec</strong>
                <small>Response Latency</small>
            </div>
            <div class="voice-progress_content--matrix-card">
                <strong>99%+</strong>
                <small>Speech Recognition Accuracy</small>
            </div>
            <div class="voice-progress_content--matrix-card">
                <strong>24/7</strong>
                <small>AI Availability</small>
            </div>
            <div class="voice-progress_content--matrix-card">
                <strong>Multi-Language</strong>
                <small>Voice Support</small>
            </div>
        </div>
    </div>
</section>