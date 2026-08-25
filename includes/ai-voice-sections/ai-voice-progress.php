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
        font-size: 44px;
        line-height: 1.15;
        font-weight: 800;
        letter-spacing: -1px;
        color: var(--ai-text-heading);
        margin-bottom: 16px;
    }

    .voice-timeline_content--texting span {
        background: var(--ai-gradient);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 48px;
    }

    .voice-timeline_content--para {
        font-size: 16px;
        line-height: 1.65;
        color: var(--ai-text-muted);
    }

    /* ---------- Timeline ---------- */

    .voice-timeline_content--steps {
        --fill: 0%;
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

    /* fill line — height driven live by scroll position via --fill, no auto-loop animation */
    .voice-timeline_content--steps::after {
        content: "";
        position: absolute;
        left: 27px;
        top: 8px;
        width: 2px;
        height: var(--fill);
        background: var(--ai-gradient);
        transition: height 0.2s ease-out;
        will-change: height;
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
        color: var(--ai-text-muted);
        transition: background var(--ai-transition-fast), border-color var(--ai-transition-fast),
            color var(--ai-transition-fast), box-shadow var(--ai-transition-fast),
            transform var(--ai-transition-fast);
    }

    /* Active state toggled by JS as scroll progress passes each node, not a keyframe loop */
    .tl-node.is-active {
        border-color: var(--ai-orange);
        color: var(--ai-white);
        background: var(--ai-gradient);
        box-shadow: 0 0 0 6px var(--ai-border-orange);
        transform: scale(1.08);
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
        fill: var(--ai-orange);
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

        .voice-timeline_content--texting span {
            font-size: 34px;
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
            <h1 class="voice-timeline_content--texting">How <span>AI Voice Agents</span> Work</h1>
            <p class="voice-timeline_content--para">From the first word spoken to the final response, every conversation passes through an intelligent real-time voice pipeline.</p>
        </div>

        <div class="voice-timeline_content--steps" id="voiceTimelineSteps">

            <div class="tl-step">
                <span class="tl-node">1</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M96 96c0-53 43-96 96-96 50.3 0 91.6 38.7 95.7 88L232 88c-13.3 0-24 10.7-24 24s10.7 24 24 24l56 0 0 48-56 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l55.7 0c-4.1 49.3-45.3 88-95.7 88-53 0-96-43-96-96L96 96zM24 160c13.3 0 24 10.7 24 24l0 40c0 79.5 64.5 144 144 144s144-64.5 144-144l0-40c0-13.3 10.7-24 24-24s24 10.7 24 24l0 40c0 97.9-73.3 178.7-168 190.5l0 49.5 48 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-144 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l48 0 0-49.5C73.3 402.7 0 321.9 0 224l0-40c0-13.3 10.7-24 24-24z" />
                        </svg>
                    </span>
                    <div>
                        <h3>Capturing the User's Voice Input</h3>
                        <p>The pipeline starts the instant a caller begins speaking, streaming raw audio in real time.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step">
                <span class="tl-node">2</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path d="M533.6 32.5c-10.3-8.4-25.4-6.8-33.8 3.5s-6.8 25.4 3.5 33.8C557.5 113.8 592 180.8 592 256s-34.5 142.2-88.7 186.3c-10.3 8.4-11.8 23.5-3.5 33.8s23.5 11.8 33.8 3.5C598.5 426.7 640 346.2 640 256S598.5 85.2 533.6 32.5zM473.1 107c-10.3-8.4-25.4-6.8-33.8 3.5s-6.8 25.4 3.5 33.8C475.3 170.7 496 210.9 496 256s-20.7 85.3-53.2 111.8c-10.3 8.4-11.8 23.5-3.5 33.8s23.5 11.8 33.8 3.5c43.2-35.2 70.9-88.9 70.9-149s-27.7-113.8-70.9-149zm-60.5 74.5c-10.3-8.4-25.4-6.8-33.8 3.5s-6.8 25.4 3.5 33.8C393.1 227.6 400 241 400 256s-6.9 28.4-17.7 37.3c-10.3 8.4-11.8 23.5-3.5 33.8s23.5 11.8 33.8 3.5C434.1 312.9 448 286.1 448 256s-13.9-56.9-35.4-74.5zM80 352l48 0 134.1 119.2c6.4 5.7 14.6 8.8 23.1 8.8 19.2 0 34.8-15.6 34.8-34.8l0-378.4c0-19.2-15.6-34.8-34.8-34.8-8.5 0-16.7 3.1-23.1 8.8L128 160 80 160c-26.5 0-48 21.5-48 48l0 96c0 26.5 21.5 48 48 48z" />
                        </svg>
                    </span>
                    <div>
                        <h3>Automatic Speech Recognition (ASR)</h3>
                        <p>Spoken audio is transcribed into accurate text within milliseconds.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step">
                <span class="tl-node">3</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M160 0c17.7 0 32 14.3 32 32l0 32 128 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-9.6 0-8.4 23.1c-16.4 45.2-41.1 86.5-72.2 122 14.2 8.8 29 16.6 44.4 23.5l50.4 22.4 62.2-140c5.1-11.6 16.6-19 29.2-19s24.1 7.4 29.2 19l128 288c7.2 16.2-.1 35.1-16.2 42.2s-35.1-.1-42.2-16.2l-20-45-157.5 0-20 45c-7.2 16.2-26.1 23.4-42.2 16.2s-23.4-26.1-16.2-42.2l39.8-89.5-50.4-22.4c-23-10.2-45-22.4-65.8-36.4-21.3 17.2-44.6 32.2-69.5 44.7L78.3 380.6c-15.8 7.9-35 1.5-42.9-14.3s-1.5-35 14.3-42.9l34.5-17.3c16.3-8.2 31.8-17.7 46.4-28.3-13.8-12.7-26.8-26.4-38.9-40.9L81.6 224.7c-11.3-13.6-9.5-33.8 4.1-45.1s33.8-9.5 45.1 4.1l10.2 12.2c11.5 13.9 24.1 26.8 37.4 38.7 27.5-30.4 49.2-66.1 63.5-105.4l.5-1.2-210.3 0C14.3 128 0 113.7 0 96S14.3 64 32 64l96 0 0-32c0-17.7 14.3-32 32-32zM416 270.8L365.7 384 466.3 384 416 270.8z" />
                        </svg>
                    </span>
                    <div>
                        <h3>Natural Language Processing (NLP)</h3>
                        <p>The AI interprets meaning, intent, and context behind what was said.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step">
                <span class="tl-node">4</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M320 32l-8.6 0C300.4 12.9 279.7 0 256 0L128 0C104.3 0 83.6 12.9 72.6 32L64 32C28.7 32 0 60.7 0 96L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-352c0-35.3-28.7-64-64-64zM136 112c-13.3 0-24-10.7-24-24s10.7-24 24-24l112 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-112 0z" />
                        </svg>
                    </span>
                    <div>
                        <h3>Decision-Making and Task Execution</h3>
                        <p>The right action, answer, or workflow is chosen and carried out.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step">
                <span class="tl-node">5</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M384 144c0 97.2-86 176-192 176-26.7 0-52.1-5-75.2-14L35.2 349.2c-9.3 4.9-20.7 3.2-28.2-4.2s-9.2-18.9-4.2-28.2l35.6-67.2C14.3 220.2 0 183.6 0 144 0 46.8 86-32 192-32S384 46.8 384 144zm0 368c-94.1 0-172.4-62.1-188.8-144 120-1.5 224.3-86.9 235.8-202.7 83.3 19.2 145 88.3 145 170.7 0 39.6-14.3 76.2-38.4 105.6l35.6 67.2c4.9 9.3 3.2 20.7-4.2 28.2s-18.9 9.2-28.2 4.2L459.2 498c-23.1 9-48.5 14-75.2 14z" />
                        </svg>
                    </span>
                    <div>
                        <h3>Generating a Natural Response</h3>
                        <p>A conversational reply is composed to sound natural and on-topic.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step">
                <span class="tl-node">6</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M285.1 50.7C279.9 39.3 268.5 32 256 32s-23.9 7.3-29.1 18.7L59.5 416 48 416c-17.7 0-32 14.3-32 32s14.3 32 32 32l88 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-6.1 0 22-48 208.3 0 22 48-6.1 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l88 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-11.5 0-167.4-365.3zM330.8 304L181.2 304 256 140.8 330.8 304z" />
                        </svg>
                    </span>
                    <div>
                        <h3>Converting Text to Speech</h3>
                        <p>The reply is turned into natural-sounding voice audio in real time.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step">
                <span class="tl-node">7</span>
                <div class="tl-card">
                    <span class="tl-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path d="M0 256c0-88.4 71.6-160 160-160 50.4 0 97.8 23.7 128 64l32 42.7 32-42.7c30.2-40.3 77.6-64 128-64 88.4 0 160 71.6 160 160S568.4 416 480 416c-50.4 0-97.8-23.7-128-64l-32-42.7-32 42.7c-30.2 40.3-77.6 64-128 64-88.4 0-160-71.6-160-160zm280 0l-43.2-57.6c-18.1-24.2-46.6-38.4-76.8-38.4-53 0-96 43-96 96s43 96 96 96c30.2 0 58.7-14.2 76.8-38.4L280 256zm80 0l43.2 57.6c18.1 24.2 46.6 38.4 76.8 38.4 53 0 96-43 96-96s-43-96-96-96c-30.2 0-58.7 14.2-76.8 38.4L360 256z" />
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

<script>
    (function() {
        var container = document.getElementById('voiceTimelineSteps');
        if (!container) return;

        var nodes = container.querySelectorAll('.tl-node');
        var ticking = false;

        function calcProgress() {
            var rect = container.getBoundingClientRect();
            var vh = window.innerHeight;

            // Line starts filling once the top of the timeline reaches 80% down the
            // viewport (just entering view), and reaches 100% once the bottom of the
            // timeline reaches 20% from the top (mostly scrolled past).
            var startLine = vh * 0.8;
            var endLine = vh * 0.2;
            var totalDistance = rect.height + (startLine - endLine);
            var scrolled = startLine - rect.top;

            var progress = scrolled / totalDistance;
            return Math.max(0, Math.min(1, progress));
        }

        function update() {
            ticking = false;

            var progress = calcProgress();
            container.style.setProperty('--fill', (progress * 100) + '%');

            nodes.forEach(function(node) {
                var rect = container.getBoundingClientRect();
                var nodeRect = node.getBoundingClientRect();
                var nodeProgress = ((nodeRect.top + nodeRect.height / 2) - rect.top) / rect.height;

                if (nodeProgress <= progress) {
                    node.classList.add('is-active');
                } else {
                    node.classList.remove('is-active');
                }
            });
        }

        function requestUpdate() {
            if (!ticking) {
                ticking = true;
                window.requestAnimationFrame(update);
            }
        }

        window.addEventListener('scroll', requestUpdate, {
            passive: true
        });
        window.addEventListener('resize', requestUpdate);

        // Set the initial state on load, in case the section is already in view.
        update();
    })();
</script>