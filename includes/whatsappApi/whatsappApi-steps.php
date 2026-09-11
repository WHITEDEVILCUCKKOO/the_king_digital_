<style>
    :root {

        /* ========================================
       WHATSAPP API BRAND COLORS
        ======================================== */

        --color-primary: #25D366;
        --color-primary-light: #5BE58A;
        --color-primary-dark: #1DA851;


        /* ========================================
       SECONDARY / API COLORS
        ======================================== */

        --color-secondary: #128C7E;
        --color-secondary-light: #25A99A;
        --color-secondary-dark: #075E54;


        /* ========================================
       BACKGROUNDS
        ======================================== */

        --color-bg: #FFFFFF;
        --color-bg-soft: #F3FBF7;
        --color-bg-muted: #E8F5EF;

        --color-bg-dark: #061B16;
        --color-bg-dark-soft: #0B2922;


        /* ========================================
       TEXT
        ======================================== */

        --color-text: #12231D;
        --color-text-secondary: #53665F;
        --color-text-muted: #82928C;

        --color-text-light: #FFFFFF;
        --color-text-light-secondary: #C7D8D2;


        /* ========================================
       BORDERS
        ======================================== */

        --color-border: #D9EAE3;
        --color-border-dark: #25443B;


        /* ========================================
       PRIMARY GRADIENTS
        ======================================== */

        --gradient-primary:
            linear-gradient(135deg,
                #1DA851 0%,
                #25D366 55%,
                #5BE58A 100%);


        --gradient-primary-dark:
            linear-gradient(135deg,
                #075E54 0%,
                #128C7E 55%,
                #1DA851 100%);


        /* ========================================
       SECONDARY GRADIENTS
        ======================================== */

        --gradient-secondary:
            linear-gradient(135deg,
                #075E54 0%,
                #128C7E 50%,
                #25A99A 100%);


        --gradient-secondary-dark:
            linear-gradient(135deg,
                #043F39 0%,
                #075E54 100%);


        /* ========================================
       API / BRAND GRADIENTS
        ======================================== */

        --gradient-brand:
            linear-gradient(135deg,
                #075E54 0%,
                #128C7E 35%,
                #25D366 75%,
                #5BE58A 100%);


        --gradient-brand-reverse:
            linear-gradient(135deg,
                #5BE58A 0%,
                #25D366 30%,
                #128C7E 70%,
                #075E54 100%);


        /* ========================================
       DARK API GRADIENT
        ======================================== */

        --gradient-dark:
            linear-gradient(135deg,
                #061B16 0%,
                #0B2922 50%,
                #075E54 100%);


        /* ========================================
       CODE / API TECH GRADIENT
        ======================================== */

        --gradient-api:
            linear-gradient(135deg,
                #0B2922 0%,
                #075E54 45%,
                #128C7E 100%);


        /* ========================================
       GLOW
        ======================================== */

        --gradient-glow:
            radial-gradient(circle,
                rgba(37, 211, 102, 0.20) 0%,
                rgba(37, 211, 102, 0) 70%);


        --gradient-glow-secondary:
            radial-gradient(circle,
                rgba(18, 140, 126, 0.20) 0%,
                rgba(18, 140, 126, 0) 70%);


        /* ========================================
       WHATSAPP MESSAGE GLOW
        ======================================== */

        --gradient-message:
            linear-gradient(135deg,
                #E8FFF1 0%,
                #D7F9E5 100%);


        /* ========================================
       STATUS COLORS
        ======================================== */

        --color-success: #25D366;
        --color-warning: #E8A317;
        --color-danger: #DC3545;
        --color-info: #128C7E;


        /* ========================================
       SHADOWS
        ======================================== */

        --shadow-sm:
            0 2px 8px rgba(6, 27, 22, 0.06);


        --shadow-md:
            0 8px 24px rgba(6, 27, 22, 0.10);


        --shadow-lg:
            0 16px 40px rgba(6, 27, 22, 0.14);


        --shadow-green:
            0 10px 30px rgba(37, 211, 102, 0.20);


        --shadow-green-strong:
            0 12px 35px rgba(37, 211, 102, 0.28);


        --shadow-teal:
            0 10px 30px rgba(18, 140, 126, 0.18);


        /* ========================================
       RADIUS
        ======================================== */

        --radius-sm: 6px;
        --radius-md: 10px;
        --radius-lg: 16px;
        --radius-xl: 24px;
        --radius-full: 999px;


        /* ========================================
       TRANSITIONS
        ======================================== */

        --transition-fast: 150ms ease;
        --transition-normal: 250ms ease;
        --transition-slow: 400ms ease;
    }

    /* ========================================
       GET STARTED — ZIGZAG SCROLL TIMELINE
       ======================================== */

    .whatsappapi-steps {
        padding: 96px 24px 104px;
        background: var(--color-bg-soft);
    }

    .whatsappapi-steps_content {
        max-width: 920px;
        margin: 0 auto;
    }

    .whatsappapi-steps_header {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 40px;
    }

    .whatsappapi-steps_eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--color-secondary-dark);
        background: var(--color-bg-muted);
        border: 1px solid var(--color-border);
        padding: 6px 16px;
        border-radius: var(--radius-full);
        margin-bottom: 18px;
    }

    .whatsappapi-steps_title {
        font-size: clamp(1.75rem, 3vw, 2.35rem);
        line-height: 1.28;
        font-weight: 800;
        color: var(--color-text);
        margin: 0;
    }

    .whatsappapi-steps_sub {
        margin: 14px 0 0;
        font-size: 0.98rem;
        color: var(--color-text-secondary);
        line-height: 1.6;
    }

    .whatsappapi-steps_timeline {
        position: relative;
        margin-top: 24px;
    }

    .whatsappapi-steps_track,
    .whatsappapi-steps_fill {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 2px;
        transform: translateX(-50%);
    }

    .whatsappapi-steps_track {
        background: var(--color-border);
        z-index: 1;
    }

    .whatsappapi-steps_fill {
        height: 0%;
        background: var(--gradient-primary);
        z-index: 1;
        transition: height 0.9s ease;
    }

    .whatsappapi-steps_step {
        position: relative;
        z-index: 2;
        display: grid;
        grid-template-columns: 1fr 64px 1fr;
        align-items: center;
        column-gap: 32px;
        padding: 34px 0;
    }

    .whatsappapi-steps_marker {
        grid-column: 2;
        justify-self: center;
        width: 52px;
        height: 52px;
        border-radius: var(--radius-full);
        background: var(--color-bg);
        border: 2px solid var(--color-border);
        color: var(--color-text-muted);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.05rem;
        font-weight: 800;
        transition: background var(--transition-slow), border-color var(--transition-slow),
            color var(--transition-slow), box-shadow var(--transition-slow);
    }

    .whatsappapi-steps_card {
        max-width: 380px;
        background: var(--color-bg);
        border: 1px solid var(--color-border);
        border-radius: var(--radius-lg);
        padding: 24px 26px;
        box-shadow: var(--shadow-sm);
        opacity: 0;
        transition: opacity 0.7s ease, transform 0.7s ease;
    }

    .whatsappapi-steps_step--left .whatsappapi-steps_card {
        grid-column: 1;
        justify-self: end;
        text-align: right;
        transform: translate(28px, 18px);
    }

    .whatsappapi-steps_step--right .whatsappapi-steps_card {
        grid-column: 3;
        justify-self: start;
        text-align: left;
        transform: translate(-28px, 18px);
    }

    .whatsappapi-steps_step.is-visible .whatsappapi-steps_card {
        opacity: 1;
        transform: translate(0, 0);
    }

    .whatsappapi-steps_step.is-visible .whatsappapi-steps_marker {
        background: var(--gradient-primary);
        border-color: transparent;
        color: var(--color-text-light);
        box-shadow: var(--shadow-green);
    }

    .whatsappapi-steps_kicker {
        display: block;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        color: var(--color-primary-dark);
        margin-bottom: 6px;
    }

    .whatsappapi-steps_card-title {
        font-size: 1.02rem;
        font-weight: 700;
        color: var(--color-text);
        margin: 0 0 8px;
    }

    .whatsappapi-steps_card-desc {
        font-size: 0.86rem;
        line-height: 1.6;
        color: var(--color-text-secondary);
        margin: 0;
    }

    @media (max-width: 720px) {

        .whatsappapi-steps_track,
        .whatsappapi-steps_fill {
            left: 26px;
        }

        .whatsappapi-steps_step {
            grid-template-columns: 52px 1fr;
            column-gap: 20px;
            padding: 26px 0;
        }

        .whatsappapi-steps_marker {
            grid-column: 1;
            justify-self: start;
        }

        .whatsappapi-steps_step--left .whatsappapi-steps_card,
        .whatsappapi-steps_step--right .whatsappapi-steps_card {
            grid-column: 2;
            justify-self: start;
            text-align: left;
            max-width: 100%;
            transform: translateY(18px);
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .whatsappapi-steps_card,
        .whatsappapi-steps_marker,
        .whatsappapi-steps_fill {
            transition: none !important;
        }

        .whatsappapi-steps_card {
            opacity: 1 !important;
            transform: none !important;
        }
    }
</style>

<section class="whatsappapi-steps">
    <div class="whatsappapi-steps_content">

        <div class="whatsappapi-steps_header">
            <span class="whatsappapi-steps_eyebrow">Getting started</span>
            <h2 class="whatsappapi-steps_title">
                Simple Steps to Get Started with WhatsApp Business API
            </h2>
            <p class="whatsappapi-steps_sub">
                Launching the official WhatsApp Business API takes four
                straightforward steps — from verifying your business to
                connecting your back-end systems and going live.
            </p>
        </div>

        <div class="whatsappapi-steps_timeline" id="whatsappapiStepsTimeline">
            <span class="whatsappapi-steps_track"></span>
            <span class="whatsappapi-steps_fill" id="whatsappapiStepsFill"></span>

            <div class="whatsappapi-steps_step whatsappapi-steps_step--left">
                <span class="whatsappapi-steps_marker">1</span>
                <div class="whatsappapi-steps_card">
                    <span class="whatsappapi-steps_kicker">STEP 1</span>
                    <h3 class="whatsappapi-steps_card-title">Complete Meta Business Verification</h3>
                    <p class="whatsappapi-steps_card-desc">
                        Submit your official business registration, tax
                        documents, and website details in Meta Business
                        Manager to validate your entity, unlock higher
                        messaging volumes, and clear the path for badge approval.
                    </p>
                </div>
            </div>

            <div class="whatsappapi-steps_step whatsappapi-steps_step--right">
                <span class="whatsappapi-steps_marker">2</span>
                <div class="whatsappapi-steps_card">
                    <span class="whatsappapi-steps_kicker">STEP 2</span>
                    <h3 class="whatsappapi-steps_card-title">Connect Your Dedicated Phone Number</h3>
                    <p class="whatsappapi-steps_card-desc">
                        Assign a dedicated corporate number to the WhatsApp
                        API, so it becomes your official identity for every
                        incoming inquiry and outgoing broadcast.
                    </p>
                </div>
            </div>

            <div class="whatsappapi-steps_step whatsappapi-steps_step--left">
                <span class="whatsappapi-steps_marker">3</span>
                <div class="whatsappapi-steps_card">
                    <span class="whatsappapi-steps_kicker">STEP 3</span>
                    <h3 class="whatsappapi-steps_card-title">Configure Templates and AI Chatbot Workflows</h3>
                    <p class="whatsappapi-steps_card-desc">
                        Draft utility, marketing, and authentication templates
                        for fast Meta approval, and build your chatbot flow
                        and auto-reply logic for the customer journey.
                    </p>
                </div>
            </div>

            <div class="whatsappapi-steps_step whatsappapi-steps_step--right">
                <span class="whatsappapi-steps_marker">4</span>
                <div class="whatsappapi-steps_card">
                    <span class="whatsappapi-steps_kicker">STEP 4</span>
                    <h3 class="whatsappapi-steps_card-title">Integrate Systems and Launch Campaigns</h3>
                    <p class="whatsappapi-steps_card-desc">
                        Connect our REST APIs and Webhooks to your CRM,
                        billing, or e-commerce store. Upload contacts, send
                        broadcasts, and track delivery and engagement in one place.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    (function() {
        var steps = document.querySelectorAll('#whatsappapiStepsTimeline .whatsappapi-steps_step');
        var fill = document.getElementById('whatsappapiStepsFill');
        var total = steps.length;

        function revealStep(el) {
            el.classList.add('is-visible');
            var idx = Array.prototype.indexOf.call(steps, el) + 1;
            if (fill) {
                fill.style.height = (idx / total * 100) + '%';
            }
        }

        if (!('IntersectionObserver' in window)) {
            steps.forEach(revealStep);
            return;
        }

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    revealStep(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.35,
            rootMargin: '0px 0px -80px 0px'
        });

        steps.forEach(function(el) {
            observer.observe(el);
        });
    })();
</script>