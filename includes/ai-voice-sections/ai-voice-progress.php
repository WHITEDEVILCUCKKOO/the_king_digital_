<style>
    :root {
        --ai-orange: #EA5C28;
        --ai-orange-bright: #F4511E;
        --ai-orange-dark: #D94717;
        --ai-red: #E3413E;
        --ai-pink: #E31D5B;
        --ai-pink-light: #EC4899;

        --ai-gradient: linear-gradient(90deg, #F4511E 0%, #E3413E 50%, #E31D5B 100%);

        --ai-dark: #120E20;
        --ai-dark-secondary: #171126;
        --ai-dark-card: #1F1A31;
        --ai-dark-border: rgba(255, 255, 255, 0.08);
        --ai-dark-text: #FFFFFF;
        --ai-dark-text-muted: #A1A1AA;

        --ai-white: #FFFFFF;
        --ai-bg-soft: #FEF3F1;
        --ai-bg-orange: #FFF1E8;

        --ai-text: #111827;
        --ai-text-heading: #111827;
        --ai-text-body: #374151;
        --ai-text-muted: #6B7280;

        --ai-border: #E5E7EB;
        --ai-border-light: #F3F4F6;
        --ai-border-orange: rgba(234, 92, 40, 0.25);

        --ai-card-bg: #FFFFFF;
        --ai-card-shadow: 0 4px 20px rgba(17, 24, 39, 0.06);
        --ai-card-shadow-hover: 0 12px 35px rgba(17, 24, 39, 0.10);

        --ai-radius-sm: 6px;
        --ai-radius-md: 10px;
        --ai-radius-lg: 14px;
        --ai-radius-xl: 20px;
        --ai-radius-full: 999px;

        --ai-section-padding: 100px;
        --ai-container-width: 1200px;
        --ai-transition-fast: 0.2s ease;
    }


    /* ========================================
       SECTION
    ======================================== */

    .voice-timeline {
        background: var(--ai-bg-soft);
        padding: var(--ai-section-padding) 0;
    }

    .voice-timeline_content {
        max-width: 940px;
        margin: 0 auto;
        padding: 0 40px;
    }

    /* ---------- Heading ---------- */

    .voice-timeline_content--heading {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 72px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .voice-timeline_content--eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--ai-bg-orange);
        border: 1px solid var(--ai-border-orange);
        color: var(--ai-orange-dark);
        font-size: 13px;
        font-weight: 600;
        padding: 7px 16px 7px 12px;
        border-radius: var(--ai-radius-full);
        margin-bottom: 20px;
    }

    .voice-timeline_content--eyebrow svg {
        width: 15px;
        height: 15px;
        fill: var(--ai-orange-dark);
    }

    .voice-timeline_content--texting {
        font-size: 40px;
        line-height: 1.15;
        font-weight: 800;
        letter-spacing: -1px;
        color: var(--ai-text-heading);
        margin-bottom: 16px;
    }

    .voice-timeline_content--para {
        font-size: 16px;
        line-height: 1.65;
        color: var(--ai-text-muted);
    }

    /* ---------- Timeline ---------- */

    .voice-timeline_content--steps {
        position: relative;
        margin-bottom: 70px;
    }

    /* the vertical track */
    .voice-timeline_content--steps::before {
        content: "";
        position: absolute;
        left: 27px;
        top: 8px;
        bottom: 8px;
        width: 2px;
        background: var(--ai-border);
    }

    /* animated fill line running down the track, looping */
    .voice-timeline_content--steps::after {
        content: "";
        position: absolute;
        left: 27px;
        top: 8px;
        width: 2px;
        height: 0%;
        background: var(--ai-gradient);
        animation: fillDown 9s ease-in-out infinite;
    }

    @keyframes fillDown {
        0% {
            height: 0%;
        }

        85% {
            height: 100%;
        }

        100% {
            height: 100%;
        }
    }

    .tl-step {
        position: relative;
        display: flex;
        align-items: flex-start;
        gap: 26px;
        padding-bottom: 44px;
    }

    .tl-step:last-child {
        padding-bottom: 0;
    }

    .tl-node {
        position: relative;
        z-index: 1;
        flex-shrink: 0;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: var(--ai-card-bg);
        border: 2px solid var(--ai-border);
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 18px;
        color: var(--ai-text-light, #9CA3AF);
        animation: nodeActivate 9s infinite;
        animation-delay: calc(var(--i) * 1.15s);
    }

    @keyframes nodeActivate {

        0%,
        6%,
        100% {
            border-color: var(--ai-border);
            color: var(--ai-text-muted);
            background: var(--ai-card-bg);
            box-shadow: none;
            transform: scale(1);
        }

        3% {
            border-color: var(--ai-orange);
            color: var(--ai-white);
            background: var(--ai-gradient);
            box-shadow: 0 0 0 6px var(--ai-border-orange);
            transform: scale(1.08);
        }
    }

    .tl-card {
        flex: 1;
        background: var(--ai-card-bg);
        border: 1px solid var(--ai-border-light);
        border-radius: var(--ai-radius-lg);
        box-shadow: var(--ai-card-shadow);
        padding: 20px 24px;
        display: flex;
        align-items: center;
        gap: 18px;
        transition: var(--ai-transition-fast);
    }

    .tl-card:hover {
        box-shadow: var(--ai-card-shadow-hover);
        transform: translateY(-2px);
    }

    .tl-card .tl-icon {
        flex-shrink: 0;
        width: 42px;
        height: 42px;
        border-radius: var(--ai-radius-md);
        background: var(--ai-bg-orange);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--ai-orange-bright);
    }

    .tl-card .tl-icon svg {
        width: 22px;
        height: 22px;
    }

    .tl-card h3 {
        font-size: 16px;
        font-weight: 700;
        color: var(--ai-text-heading);
        margin-bottom: 4px;
    }

    .tl-card p {
        font-size: 13.5px;
        line-height: 1.5;
        color: var(--ai-text-muted);
    }

    /* ---------- Matrix / stat cards ---------- */

    .voice-timeline_content--matrix {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .voice-timeline_content--matrix-card {
        background: var(--ai-dark);
        border-radius: var(--ai-radius-lg);
        padding: 26px 18px;
        text-align: center;
    }

    .voice-timeline_content--matrix-card strong {
        display: block;
        font-size: 22px;
        font-weight: 800;
        background: var(--ai-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 8px;
        letter-spacing: -0.3px;
    }

    .voice-timeline_content--matrix-card small {
        font-size: 13px;
        font-weight: 500;
        color: var(--ai-dark-text-muted);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 640px) {
        .tl-card {
            flex-direction: column;
            align-items: flex-start;
        }

        .voice-timeline_content--matrix {
            grid-template-columns: repeat(2, 1fr);
        }

        .voice-timeline_content--texting {
            font-size: 30px;
        }
    }
</style>


<section class="voice-timeline">
    <div class="voice-timeline_content">

        <div class="voice-timeline_content--heading">
            <p class="voice-timeline_content--eyebrow">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M208 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm0 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM48 208a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm368 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM75 369.1A48 48 0 1 1 142.9 437 48 48 0 1 1 75 369.1zM75 75A48 48 0 1 1 142.9 142.9 48 48 0 1 1 75 75zM437 369.1A48 48 0 1 1 369.1 437 48 48 0 1 1 437 369.1z" />
                </svg>
                How
            </p>
            <h1 class="voice-timeline_content--texting">How AI Voice Agents Work</h1>
            <p class="voice-timeline_content--para">From the first word spoken to the final response, every conversation passes through an intelligent real-time voice pipeline.</p>
        </div>

        <div class="voice-timeline_content--steps">

            <div class="tl-step" style="--i:0">
                <span class="tl-node">1</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M24 14c-6 0-10 5-10 12s2 12 6 15l-4 6h12l3-6c5-1 8-5 8-11" />
                            <path d="M40 24c2 2 3 5 3 8s-1 6-3 8" opacity="0.85" />
                        </svg>
                    </span>
                    <div>
                        <h3>Capturing the User's Voice Input</h3>
                        <p>The pipeline starts the instant a caller begins speaking, streaming raw audio in real time.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step" style="--i:1">
                <span class="tl-node">2</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="6" y="10" width="24" height="18" rx="4" />
                            <path d="M12 22v-6M18 24v-10M24 22v-6" stroke-width="3" />
                            <rect x="28" y="26" width="28" height="24" rx="4" />
                            <path d="M35 35h14M35 41h10M35 47h14" stroke-width="3" />
                        </svg>
                    </span>
                    <div>
                        <h3>Automatic Speech Recognition (ASR)</h3>
                        <p>Spoken audio is transcribed into accurate text within milliseconds.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step" style="--i:2">
                <span class="tl-node">3</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="32" cy="16" r="9" />
                            <path d="M32 26v6" />
                            <rect x="12" y="36" width="40" height="7" rx="2" />
                            <rect x="12" y="46" width="40" height="7" rx="2" />
                        </svg>
                    </span>
                    <div>
                        <h3>Natural Language Processing (NLP)</h3>
                        <p>The AI interprets meaning, intent, and context behind what was said.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step" style="--i:3">
                <span class="tl-node">4</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="14" r="7" />
                            <path d="M15 14l2 2 4-4" />
                            <circle cx="46" cy="14" r="7" />
                            <path d="M43 11l6 6M49 11l-6 6" />
                            <path d="M18 21v6h28v-6M32 27v10" />
                        </svg>
                    </span>
                    <div>
                        <h3>Decision-Making and Task Execution</h3>
                        <p>The right action, answer, or workflow is chosen and carried out.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step" style="--i:4">
                <span class="tl-node">5</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="32" cy="32" r="9" />
                            <path d="M14 22a22 22 0 0 1 38-4M50 42a22 22 0 0 1-38 4" />
                            <path d="M50 12l4 4-6 2M14 52l-4-4 6-2" />
                        </svg>
                    </span>
                    <div>
                        <h3>Generating a Natural Response</h3>
                        <p>A conversational reply is composed to sound natural and on-topic.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step" style="--i:5">
                <span class="tl-node">6</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="6" y="26" width="28" height="24" rx="4" />
                            <path d="M13 35h14M13 41h10" stroke-width="3" />
                            <rect x="30" y="10" width="24" height="18" rx="4" />
                            <path d="M37 22v-6M43 24v-10M49 22v-6" stroke-width="3" />
                        </svg>
                    </span>
                    <div>
                        <h3>Converting Text to Speech</h3>
                        <p>The reply is turned into natural-sounding voice audio in real time.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step" style="--i:6">
                <span class="tl-node">7</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22a20 20 0 1 1 -2 14" />
                            <path d="M8 16l2 8 8-2" />
                            <rect x="24" y="30" width="6" height="14" rx="1.5" />
                            <rect x="33" y="24" width="6" height="20" rx="1.5" />
                            <rect x="42" y="34" width="6" height="10" rx="1.5" />
                        </svg>
                    </span>
                    <div>
                        <h3>Continuous Learning and Improvement</h3>
                        <p>Every interaction feeds back in, sharpening accuracy over time.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="voice-timeline_content--matrix">
            <div class="voice-timeline_content--matrix-card">
                <strong>&lt; 1 sec</strong>
                <small>Response Latency</small>
            </div>
            <div class="voice-timeline_content--matrix-card">
                <strong>99%+</strong>
                <small>Speech Recognition Accuracy</small>
            </div>
            <div class="voice-timeline_content--matrix-card">
                <strong>24/7</strong>
                <small>AI Availability</small>
            </div>
            <div class="voice-timeline_content--matrix-card">
                <strong>Multi-Language</strong>
                <small>Voice Support</small>
            </div>
        </div>

    </div>
</section>