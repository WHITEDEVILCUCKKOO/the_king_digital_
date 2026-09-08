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
        background-color: #fff;
        /* background: var(--ai-bg-soft); */
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
        background: #095CFF;
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
        background: #095CFF;
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
        border-color: #183d86;
        color: #ffffff;
        background: #1d4188;
        box-shadow: 0 0 0 6px #a3b7e05e;
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
            <p class="voice-timeline_content--eyebrow" style="display: none;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M208 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm0 416a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM48 208a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm368 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM75 369.1A48 48 0 1 1 142.9 437 48 48 0 1 1 75 369.1zM75 75A48 48 0 1 1 142.9 142.9 48 48 0 1 1 75 75zM437 369.1A48 48 0 1 1 369.1 437 48 48 0 1 1 437 369.1z"></path>
                </svg>

            </p>
            <h1 class="voice-timeline_content--texting"> <span> Step-by-Step </span> Execution Workflow to Launch a Campaign</h1>
            <p class="voice-timeline_content--para">Executing a successful campaign with a leading Bulk SMS Service Provider in Delhi involves a clear operational methodology.</p>
        </div>

        <div class="voice-timeline_content--steps" id="voiceTimelineSteps" style="--fill: 9.954915136601254%;">

            <div class="tl-step">
                <span class="tl-node is-active">1</span>
                <div class="tl-card">

                    <div>
                        <h3>DLT Registration & Setup</h3>
                        <p>All businesses that send commercial text messages in India must register with the Distributed Ledger Technology (DLT) platform of a major telecom operator. This step is essential to generate Principal Entity (PE) ID so that your business is compliant with TRAI regulations.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step">
                <span class="tl-node">2</span>
                <div class="tl-card">

                    <div>
                        <h3>Sender ID & Template Whitelisting</h3>
                        <p>After your entity registration becomes active, proceed by registering your 6-character Alpha (Transactional) or 6-digit Numeric (Promotional) Sender IDs. Subsequently, you should upload your content templates for approval by the operator, while ensuring that all variable tokens are correctly placed.
                        </p>
                    </div>
                </div>
            </div>

            <div class="tl-step">
                <span class="tl-node">3</span>
                <div class="tl-card">

                    <div>
                        <h3>Natural Language Processing (NLP)</h3>
                        <p>The AI interprets meaning, intent, and context behind what was said.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step">
                <span class="tl-node">4</span>
                <div class="tl-card">
                    
                    <div>
                        <h3>Database Preparation & System Integration</h3>
                        <p>Plus, you can also import the required contacts into the Kings Digital control panel by applying filtering tags that relate to geolocation, history of purchases, or demographics. For transactional communication, integrate our API endpoints into the software of your website, CRM, or billing software.</p>
                    </div>
                </div>
            </div>

            <div class="tl-step">
                <span class="tl-node">5</span>
                <div class="tl-card">
                    
                    <div>
                        <h3>Campaign Execution & Performance Analytics</h3>
                        <p>Choose the right moments for promotional broadcast or realize transactional flow in real-time. With our live analytics dashboard, you can see the success rate, track the number of short links clicked, and use the information to improve future campaigns.</p>
                    </div>
                </div>
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