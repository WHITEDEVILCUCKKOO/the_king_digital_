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

        --ai-bg-warm: #FFF6EE;
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

    .voice-tools {
        background: var(--ai-dark);
        padding: var(--ai-section-padding) 24px;
    }

    .voice-tools_content {
        max-width: var(--ai-container-width);
        margin: 0 auto;
    }

    .voice-tools_content--heading {
        max-width: 640px;
        margin: 0 auto 56px;
        text-align: center;
    }

    .voice-tools_content-text {
        color: var(--ai-dark-text);
        font-size: 2.25rem;
        font-weight: 700;
        letter-spacing: -0.02em;
        margin: 0 0 14px;
    }

    .voice-tools_content-para {
        color: var(--ai-dark-text-muted);
        font-size: 1.05rem;
        line-height: 1.6;
        margin: 0;
    }

    /* ========================================
       CARD GRID
       ======================================== */

    .voice-tools_content--cards-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    @media (max-width: 900px) {
        .voice-tools_content--cards-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 620px) {
        .voice-tools_content--cards-container {
            grid-template-columns: 1fr;
        }
    }

    /* ========================================
       CARD
       ======================================== */

    .voice-tools_content--card {
        position: relative;
        display: flex;
        flex-direction: column;
        background: var(--ai-dark-card);
        border: 1px solid var(--ai-dark-border);
        border-radius: var(--ai-radius-lg);
        padding: 24px;
        transition: border-color var(--ai-transition), transform var(--ai-transition), background var(--ai-transition);
    }

    .voice-tools_content--card:hover {
        background: var(--ai-dark-card-hover);
        border-color: var(--ai-border-orange);
        transform: translateY(-4px);
    }

    /* top row: icon + tag */
    .voice-tools_content--card-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .voice-tools_content--card-icon {
        width: 44px;
        height: 44px;
        border-radius: var(--ai-radius-md);
        background: var(--ai-gradient-soft);
        border: 1px solid var(--ai-border-orange);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .voice-tools_content--card-icon svg {
        width: 22px;
        height: 22px;
        stroke: var(--ai-orange-bright);
    }

    .voice-tools_content--card-tag {
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        color: var(--ai-orange-bright);
        background: rgba(244, 81, 30, 0.12);
        border: 1px solid var(--ai-border-orange);
        border-radius: var(--ai-radius-full);
        padding: 5px 12px;
        white-space: nowrap;
    }

    /* tech + category */
    .voice-tools_content--card-tech {
        color: var(--ai-dark-text-muted);
        font-size: 0.78rem;
        font-weight: 600;
        letter-spacing: 0.03em;
        text-transform: uppercase;
        margin: 0 0 6px;
    }

    .voice-tools_content--card-cate {
        color: var(--ai-dark-text);
        font-size: 1.15rem;
        font-weight: 700;
        margin: 0 0 12px;
        letter-spacing: -0.01em;
    }

    .voice-tools_content--card-para {
        color: var(--ai-dark-text-secondary);
        font-size: 0.92rem;
        line-height: 1.6;
        margin: 0 0 24px;
        flex-grow: 1;
    }

    /* integration level footer */
    .voice-tools_content--card-level {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding-top: 16px;
        border-top: 1px solid var(--ai-dark-border);
    }

    .voice-tools_content--card-level-label {
        color: var(--ai-dark-text-muted);
        font-size: 0.75rem;
        font-weight: 500;
        letter-spacing: 0.02em;
        white-space: nowrap;
    }

    .voice-tools_content--card-level-track {
        position: relative;
        flex-grow: 1;
        height: 3px;
        border-radius: var(--ai-radius-full);
        background: var(--ai-dark-border);
        overflow: visible;
    }

    .voice-tools_content--card-level-fill {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        border-radius: var(--ai-radius-full);
        background: var(--ai-gradient);
    }

    .voice-tools_content--card-level-dot {
        position: absolute;
        top: 50%;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ai-orange-bright);
        box-shadow: 0 0 0 3px rgba(244, 81, 30, 0.25);
        transform: translate(-50%, -50%);
    }
</style>


<section class="voice-tools">
    <div class="voice-tools_content">
        <div class="voice-tools_content--heading">
            <h1 class="voice-tools_content-text">Top AI Voice Technologies We Integrate With</h1>
            <p class="voice-tools_content-para">
                We work with leading AI voice and language technologies to build reliable, natural, and scalable voice experiences.
            </p>
        </div>
        <div class="voice-tools_content--cards-container">

            <!-- ElevenLabs -->
            <div class="voice-tools_content--card">
                <div class="voice-tools_content--card-top">
                    <span class="voice-tools_content--card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 12h2l2-6 3 12 3-9 2 3h6" />
                        </svg>
                    </span>
                    <span class="voice-tools_content--card-tag">Popular</span>
                </div>
                <p class="voice-tools_content--card-tech">ElevenLabs</p>
                <h3 class="voice-tools_content--card-cate">Voice Synthesis</h3>
                <p class="voice-tools_content--card-para">Natural-sounding voice generation and realistic speech for conversational AI agents.</p>
                <div class="voice-tools_content--card-level">
                    <span class="voice-tools_content--card-level-label">Integration Level</span>
                    <span class="voice-tools_content--card-level-track">
                        <span class="voice-tools_content--card-level-fill" style="width: 95%;"></span>
                        <span class="voice-tools_content--card-level-dot" style="left: 95%;"></span>
                    </span>
                </div>
            </div>

            <!-- OpenAI -->
            <div class="voice-tools_content--card">
                <div class="voice-tools_content--card-top">
                    <span class="voice-tools_content--card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="4" y="4" width="16" height="16" rx="3" />
                            <path d="M9 9h.01M15 9h.01M8 15c1.2 1.2 2.6 1.8 4 1.8s2.8-.6 4-1.8" />
                        </svg>
                    </span>
                    <span class="voice-tools_content--card-tag">Core</span>
                </div>
                <p class="voice-tools_content--card-tech">OpenAI</p>
                <h3 class="voice-tools_content--card-cate">Conversational AI</h3>
                <p class="voice-tools_content--card-para">Advanced language intelligence for understanding requests, reasoning, and generating responses.</p>
                <div class="voice-tools_content--card-level">
                    <span class="voice-tools_content--card-level-label">Integration Level</span>
                    <span class="voice-tools_content--card-level-track">
                        <span class="voice-tools_content--card-level-fill" style="width: 100%;"></span>
                        <span class="voice-tools_content--card-level-dot" style="left: 100%;"></span>
                    </span>
                </div>
            </div>

            <!-- Deepgram -->
            <div class="voice-tools_content--card">
                <div class="voice-tools_content--card-top">
                    <span class="voice-tools_content--card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a4 4 0 0 1 4 4v6a4 4 0 0 1-8 0V6a4 4 0 0 1 4-4Z" />
                            <path d="M6 11a6 6 0 0 0 12 0M12 19v3" />
                        </svg>
                    </span>
                    <span class="voice-tools_content--card-tag">Fast</span>
                </div>
                <p class="voice-tools_content--card-tech">Deepgram</p>
                <h3 class="voice-tools_content--card-cate">Speech Recognition</h3>
                <p class="voice-tools_content--card-para">Fast and accurate speech-to-text processing for real-time voice conversations.</p>
                <div class="voice-tools_content--card-level">
                    <span class="voice-tools_content--card-level-label">Integration Level</span>
                    <span class="voice-tools_content--card-level-track">
                        <span class="voice-tools_content--card-level-fill" style="width: 90%;"></span>
                        <span class="voice-tools_content--card-level-dot" style="left: 90%;"></span>
                    </span>
                </div>
            </div>

            <!-- Google Cloud AI -->
            <div class="voice-tools_content--card">
                <div class="voice-tools_content--card-top">
                    <span class="voice-tools_content--card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 18H7a4 4 0 1 1 .6-7.96A5.5 5.5 0 0 1 18 10a3.5 3.5 0 0 1-1 8Z" />
                        </svg>
                    </span>
                    <span class="voice-tools_content--card-tag">Scalable</span>
                </div>
                <p class="voice-tools_content--card-tech">Google Cloud AI</p>
                <h3 class="voice-tools_content--card-cate">AI & Speech</h3>
                <p class="voice-tools_content--card-para">Speech, language, and cloud AI capabilities for scalable conversational applications.</p>
                <div class="voice-tools_content--card-level">
                    <span class="voice-tools_content--card-level-label">Integration Level</span>
                    <span class="voice-tools_content--card-level-track">
                        <span class="voice-tools_content--card-level-fill" style="width: 85%;"></span>
                        <span class="voice-tools_content--card-level-dot" style="left: 85%;"></span>
                    </span>
                </div>
            </div>

            <!-- Twilio -->
            <div class="voice-tools_content--card">
                <div class="voice-tools_content--card-top">
                    <span class="voice-tools_content--card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6.6 10.8c1.5 3 3.9 5.4 6.9 6.9l2.3-2.3c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C11.6 21 3 12.4 3 2c0-.6.4-1 1-1h3.2c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8Z" />
                        </svg>
                    </span>
                    <span class="voice-tools_content--card-tag">Reliable</span>
                </div>
                <p class="voice-tools_content--card-tech">Twilio</p>
                <h3 class="voice-tools_content--card-cate">Voice Infrastructure</h3>
                <p class="voice-tools_content--card-para">Reliable telephony infrastructure for connecting AI voice agents with real phone calls.</p>
                <div class="voice-tools_content--card-level">
                    <span class="voice-tools_content--card-level-label">Integration Level</span>
                    <span class="voice-tools_content--card-level-track">
                        <span class="voice-tools_content--card-level-fill" style="width: 100%;"></span>
                        <span class="voice-tools_content--card-level-dot" style="left: 100%;"></span>
                    </span>
                </div>
            </div>

            <!-- AssemblyAI -->
            <div class="voice-tools_content--card">
                <div class="voice-tools_content--card-top">
                    <span class="voice-tools_content--card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19V9M9 19V5M14 19v-7M19 19v-4" />
                        </svg>
                    </span>
                    <span class="voice-tools_content--card-tag">Analytics</span>
                </div>
                <p class="voice-tools_content--card-tech">AssemblyAI</p>
                <h3 class="voice-tools_content--card-cate">Voice Intelligence</h3>
                <p class="voice-tools_content--card-para">Speech intelligence and audio analysis for extracting useful information from conversations.</p>
                <div class="voice-tools_content--card-level">
                    <span class="voice-tools_content--card-level-label">Integration Level</span>
                    <span class="voice-tools_content--card-level-track">
                        <span class="voice-tools_content--card-level-fill" style="width: 75%;"></span>
                        <span class="voice-tools_content--card-level-dot" style="left: 75%;"></span>
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>