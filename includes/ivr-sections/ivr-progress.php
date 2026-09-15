<style>
    /* //////////////////////////////////// How It Works (Process) Section Start ///////////////////////////////////// */
    /* Uses the same :root variables defined in the hero/products sections (--ivr-primary, --ivr-gradient-*, etc.)
       Include this section alongside those, or copy the :root block here too. */

    .ivr-process {
        position: relative;
        overflow: hidden;
        padding: 40px 80px;
        background: var(--ivr-bg);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .ivr-process_content {
        position: relative;
        z-index: 10;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ivr-process_head {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 70px;
    }

    .ivr-process_head .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--ivr-primary-dark);
        background: var(--ivr-card);
        border: 1px solid var(--ivr-border-purple);
        padding: 6px 14px;
        border-radius: var(--ivr-radius-pill);
        box-shadow: var(--ivr-shadow-sm);
        margin-bottom: 20px;
    }

    .ivr-process_head .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-process_head h2 {
        font-size: clamp(28px, 3.4vw, 44px);
        line-height: 1.2;
        font-weight: 800;
        margin: 0 0 16px;
        color: var(--ivr-text-primary);
    }

    .ivr-process_head p {
        font-size: 16px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    /* ── Track: the interactive line + cursor + steps ── */
    .ivr-process_track {
        position: relative;
        padding-top: 34px;
        cursor: none;
    }

    .ivr-process_line-base,
    .ivr-process_line-fill {
        position: absolute;
        top: 34px;
        left: 34px;
        right: 34px;
        height: 3px;
        border-radius: 999px;
        transform: translateY(-50%);
    }

    .ivr-process_line-base {
        background: var(--ivr-border);
        z-index: 0;
    }

    .ivr-process_line-fill {
        background: var(--ivr-gradient-ai);
        width: 0%;
        z-index: 1;
        box-shadow: 0 0 16px rgba(99, 102, 241, .45);
        transition: width .12s linear;
    }

    .ivr-process_cursor-dot {
        position: absolute;
        top: 34px;
        left: 34px;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        box-shadow: 0 0 22px rgba(34, 211, 238, .55), 0 0 0 4px rgba(255, 255, 255, .8);
        transform: translate(-50%, -50%);
        opacity: 0;
        pointer-events: none;
        z-index: 3;
        transition: opacity .2s ease;
    }

    .ivr-process_track:hover .ivr-process_cursor-dot {
        opacity: 1;
    }

    .ivr-process_steps {
        position: relative;
        z-index: 2;
        display: flex;
        justify-content: space-between;
        gap: 12px;
    }

    .ivr-process_step {
        flex: 1 1 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        max-width: 220px;
    }

    .ivr-process_step--circle {
        width: 68px;
        height: 68px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--ivr-card);
        border: 2px solid var(--ivr-border);
        font-size: 22px;
        color: var(--ivr-primary-dark);
        margin-bottom: 22px;
        transition: transform var(--ivr-transition-fast), border-color var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast), background var(--ivr-transition-fast), color var(--ivr-transition-fast);
    }

    .ivr-process_step.is-active .ivr-process_step--circle {
        background: var(--ivr-gradient-ai);
        border-color: transparent;
        color: var(--ivr-text-light);
        box-shadow: var(--ivr-glow-purple);
        transform: scale(1.08);
    }

    .ivr-process_step--num {
        position: absolute;
        top: -6px;
        right: -2px;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: var(--ivr-gold);
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid var(--ivr-bg);
    }

    .ivr-process_step--circle {
        position: relative;
    }

    .ivr-process_step h3 {
        font-size: 15.5px;
        font-weight: 700;
        margin: 0 0 8px;
        color: var(--ivr-text-primary);
    }

    .ivr-process_step p {
        font-size: 13px;
        line-height: 1.6;
        color: var(--ivr-text-muted);
        margin: 0;
    }

    @media (max-width: 900px) {
        .ivr-process {
            padding: 64px 20px;
        }

        .ivr-process_track {
            padding-top: 0;
        }

        .ivr-process_line-base,
        .ivr-process_line-fill {
            top: 34px;
            bottom: 34px;
            left: 34px;
            right: auto;
            width: 3px;
            height: auto;
            transform: translateX(-50%);
        }

        .ivr-process_line-fill {
            height: 0%;
            width: 3px;
        }

        .ivr-process_cursor-dot {
            top: 34px;
            left: 34px;
        }

        .ivr-process_steps {
            flex-direction: column;
            align-items: flex-start;
            gap: 36px;
        }

        .ivr-process_step {
            flex-direction: row;
            text-align: left;
            max-width: 100%;
            gap: 18px;
        }

        .ivr-process_step--circle {
            margin-bottom: 0;
            flex: 0 0 auto;
        }
    }

    .decor-process-glow {
        position: absolute;
        top: -160px;
        left: -140px;
        width: 440px;
        height: 440px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .13;
        filter: blur(75px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 14s ease-in-out infinite;
    }

    .decor-process-dots {
        position: absolute;
        bottom: -10px;
        right: -10px;
        width: 220px;
        height: 200px;
        background-image: radial-gradient(circle, var(--ivr-blue) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at bottom right, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at bottom right, black 0%, black 25%, transparent 72%);
        opacity: .2;
        z-index: 0;
        pointer-events: none;
    }

    /* //////////////////////////////////// How It Works (Process) Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// How It Works (Process) Section //////////////////////////////////////-->
<section class="ivr-process" id="process-section">
    <div class="decor-process-glow"></div>
    <div class="decor-process-dots"></div>

    <div class="ivr-process_content">
        <div class="ivr-process_head">
            <span class="eyebrow"><i></i>THE CALL FLOW</span>
            <h2>How Does an IVR System Work?</h2>
            <p>There are several steps in the entirety of the IVR call, and it all happens automatically.</p>
        </div>

        <div class="ivr-process_track" id="ivrProcessTrack">
            <div class="ivr-process_line-base"></div>
            <div class="ivr-process_line-fill" id="ivrProcessFill"></div>
            <div class="ivr-process_cursor-dot" id="ivrProcessCursor"></div>

            <div class="ivr-process_steps">
                <div class="ivr-process_step">
                    <div class="ivr-process_step--circle">
                        <span class="ivr-process_step--num">1</span>
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h3>Incoming Call</h3>
                    <p>The customer calls your virtual or toll-free number, and the call is picked up by the IVR engine instantly.</p>
                </div>

                <div class="ivr-process_step">
                    <div class="ivr-process_step--circle">
                        <span class="ivr-process_step--num">2</span>
                        <i class="fa-solid fa-comment-dots"></i>
                    </div>
                    <h3>Opening & Menu Options</h3>
                    <p>The system delivers a clean, good-quality opening message and presents the caller with menu options.</p>
                </div>

                <div class="ivr-process_step">
                    <div class="ivr-process_step--circle">
                        <span class="ivr-process_step--num">3</span>
                        <i class="fa-solid fa-hashtag"></i>
                    </div>
                    <h3>Signal Processing</h3>
                    <p>The system detects DTMF keypad (touch-tone) signals or voice inputs from the caller.</p>
                </div>

                <div class="ivr-process_step">
                    <div class="ivr-process_step--circle">
                        <span class="ivr-process_step--num">4</span>
                        <i class="fa-solid fa-shuffle"></i>
                    </div>
                    <h3>Verification & Routing</h3>
                    <p>The IVR engine checks the CRM or other pools to fetch the caller's profile, diagnose the situation, and route the call per operational rules.</p>
                </div>

                <div class="ivr-process_step">
                    <div class="ivr-process_step--circle">
                        <span class="ivr-process_step--num">5</span>
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3>Resolution or Live Connect</h3>
                    <p>The customer self-resolves via self-service options, or connects to a live agent with relevant details already on screen.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// How It Works (Process) Section End ///////////////////////////////////////////-->

<script>
    (function() {
        "use strict";

        var track = document.getElementById('ivrProcessTrack');
        if (!track) return;

        var fill = document.getElementById('ivrProcessFill');
        var cursor = document.getElementById('ivrProcessCursor');
        var steps = track.querySelectorAll('.ivr-process_step');

        var targetPct = 0; // 0..100, where the mouse currently is
        var currentPct = 0; // eased value actually rendered
        var isVertical = false;
        var rafId = null;

        function checkOrientation() {
            isVertical = window.matchMedia('(max-width: 900px)').matches;
        }

        function updateActiveSteps(pct) {
            var stepCount = steps.length;
            // each step "activates" once the line passes its horizontal/vertical position
            steps.forEach(function(step, i) {
                var stepPct = (i / (stepCount - 1)) * 100;
                if (pct + 4 >= stepPct) {
                    step.classList.add('is-active');
                } else {
                    step.classList.remove('is-active');
                }
            });
        }

        function render() {
            // ease currentPct toward targetPct for a smooth trailing animation
            currentPct += (targetPct - currentPct) * 0.15;
            if (Math.abs(targetPct - currentPct) < 0.05) {
                currentPct = targetPct;
            }

            if (isVertical) {
                fill.style.width = '3px';
                fill.style.height = currentPct + '%';
                cursor.style.top = 'calc(34px + (100% - 68px) * ' + (currentPct / 100) + ')';
                cursor.style.left = '34px';
            } else {
                fill.style.height = '3px';
                fill.style.width = currentPct + '%';
                cursor.style.left = 'calc(34px + (100% - 68px) * ' + (currentPct / 100) + ')';
                cursor.style.top = '34px';
            }

            updateActiveSteps(currentPct);

            if (Math.abs(targetPct - currentPct) > 0.05) {
                rafId = requestAnimationFrame(render);
            } else {
                rafId = null;
            }
        }

        function kick() {
            if (!rafId) {
                rafId = requestAnimationFrame(render);
            }
        }

        function onMove(e) {
            var rect = track.getBoundingClientRect();
            var pct;
            if (isVertical) {
                var y = e.clientY - rect.top;
                pct = (y / rect.height) * 100;
            } else {
                var x = e.clientX - rect.left;
                pct = (x / rect.width) * 100;
            }
            targetPct = Math.max(0, Math.min(100, pct));
            kick();
        }

        function onLeave() {
            targetPct = 0;
            kick();
        }

        checkOrientation();
        window.addEventListener('resize', checkOrientation);

        track.addEventListener('mousemove', onMove);
        track.addEventListener('mouseleave', onLeave);

        // touch support: follow the finger while dragging across the track
        track.addEventListener('touchmove', function(e) {
            if (!e.touches || !e.touches[0]) return;
            var t = e.touches[0];
            onMove({
                clientX: t.clientX,
                clientY: t.clientY
            });
        }, {
            passive: true
        });
        track.addEventListener('touchend', onLeave);
    })();
</script>