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
       FREQUENTLY ASKED QUESTIONS SECTION
       ======================================== */

    .whatsappapi-faqs {
        padding: 40px 24px;
        background: var(--color-bg);
    }

    .whatsappapi-faqs_content {
        max-width: 860px;
        margin: 0 auto;
    }

    .whatsappapi-faqs_header {
        text-align: center;
        max-width: 640px;
        margin: 0 auto 44px;
    }

    .whatsappapi-faqs_eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--color-secondary);
        background: var(--color-bg-muted);
        border: 1px solid var(--color-border);
        padding: 6px 16px;
        border-radius: var(--radius-full);
        margin-bottom: 18px;
    }

    .whatsappapi-faqs_title {
        font-size: clamp(1.75rem, 3vw, 46px);
        line-height: 1.25;
        font-weight: 800 !important;
        color: var(--color-text);
        margin: 0;
    }

    .whatsappapi-faqs_title em {
        font-style: normal;
        font-weight: 800 !important;
        background: var(--gradient-primary-dark);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappapi-faqs_sub {
        margin: 14px 0 0;
        font-size: 0.98rem;
        color: var(--color-text-secondary);
        line-height: 1.6;
    }

    .whatsappapi-faqs_list {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .whatsappapi-faqs_item {
        border: 1px solid var(--color-border);
        border-radius: var(--radius-lg);
        background: var(--color-bg);
        box-shadow: var(--shadow-sm);
        overflow: hidden;
        transition: box-shadow var(--transition-normal), border-color var(--transition-normal);
    }

    .whatsappapi-faqs_item.is-open {
        border-color: var(--color-primary-light);
        box-shadow: var(--shadow-md);
    }

    .whatsappapi-faqs_question {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        text-align: left;
        background: none;
        border: none;
        cursor: pointer;
        padding: 20px 24px;
        font-family: inherit;
        font-size: 0.98rem;
        font-weight: 700;
        color: var(--color-text);
    }

    .whatsappapi-faqs_question-icon {
        flex-shrink: 0;
        width: 30px;
        height: 30px;
        border-radius: var(--radius-full);
        background: var(--color-bg-muted);
        color: var(--color-secondary);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background var(--transition-normal), color var(--transition-normal), transform var(--transition-normal);
    }

    .whatsappapi-faqs_question-icon svg {
        width: 16px;
        height: 16px;
        transition: transform var(--transition-normal);
    }

    .whatsappapi-faqs_item.is-open .whatsappapi-faqs_question-icon {
        background: var(--gradient-primary);
        color: var(--color-text-light);
    }

    .whatsappapi-faqs_item.is-open .whatsappapi-faqs_question-icon svg {
        transform: rotate(45deg);
    }

    .whatsappapi-faqs_answer {
        display: grid;
        grid-template-rows: 0fr;
        transition: grid-template-rows var(--transition-slow);
    }

    .whatsappapi-faqs_item.is-open .whatsappapi-faqs_answer {
        grid-template-rows: 1fr;
    }

    .whatsappapi-faqs_answer-inner {
        overflow: hidden;
    }

    .whatsappapi-faqs_answer p {
        margin: 0;
        padding: 0 24px 22px;
        font-size: 0.92rem;
        line-height: 1.7;
        color: var(--color-text-secondary);
    }

    @media (prefers-reduced-motion: reduce) {
        .whatsappapi-faqs_answer,
        .whatsappapi-faqs_question-icon,
        .whatsappapi-faqs_question-icon svg {
            transition: none;
        }
    }

    @media (max-width: 640px) {
        .whatsappapi-faqs_question {
            padding: 16px 18px;
            font-size: 0.92rem;
        }

        .whatsappapi-faqs_answer p {
            padding: 0 18px 18px;
        }
    }
</style>

<section class="whatsappapi-faqs">
    <div class="whatsappapi-faqs_content">

        <div class="whatsappapi-faqs_header">
            <span class="whatsappapi-faqs_eyebrow">Got Questions?</span>
            <h2 class="whatsappapi-faqs_title">
                Frequently Asked <em>Questions</em>
            </h2>
            <p class="whatsappapi-faqs_sub">
                Everything you need to know about setting up and running your
                official WhatsApp Business API with Kings Digital.
            </p>
        </div>

        <div class="whatsappapi-faqs_list" id="whatsappapiFaqsList">

            <div class="whatsappapi-faqs_item">
                <button type="button" class="whatsappapi-faqs_question">
                    <span>What is the primary difference between the WhatsApp Business App and the WhatsApp Business API?</span>
                    <span class="whatsappapi-faqs_question-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div class="whatsappapi-faqs_answer">
                    <div class="whatsappapi-faqs_answer-inner">
                        <p>
                            The standard app is a free mobile application created for small
                            businesses to handle local customer conversations manually on
                            up to 5 linked devices. The official WhatsApp Business API is
                            an enterprise-grade cloud communication platform supporting
                            unlimited multi-agent team logins, automated AI chatbots,
                            custom CRM integrations, detailed performance analytics, and
                            high-volume broadcast campaigns to opt-in customer databases.
                        </p>
                    </div>
                </div>
            </div>

            <div class="whatsappapi-faqs_item">
                <button type="button" class="whatsappapi-faqs_question">
                    <span>Is Meta Business Verification mandatory to use the official business WhatsApp API?</span>
                    <span class="whatsappapi-faqs_question-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div class="whatsappapi-faqs_answer">
                    <div class="whatsappapi-faqs_answer-inner">
                        <p>
                            Yes. Meta Business Verification is required to confirm your
                            organization's legal identity, ensure platform security, unlock
                            higher daily messaging volume tiers, and apply for the official
                            Meta Green Tick verification badge.
                        </p>
                    </div>
                </div>
            </div>

            <div class="whatsappapi-faqs_item">
                <button type="button" class="whatsappapi-faqs_question">
                    <span>Can my existing corporate phone number be used for the WhatsApp Business API?</span>
                    <span class="whatsappapi-faqs_question-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div class="whatsappapi-faqs_answer">
                    <div class="whatsappapi-faqs_answer-inner">
                        <p>
                            Yes, your existing corporate phone number can be used, provided
                            it is first deleted or unlinked from any active standard
                            WhatsApp or WhatsApp Business mobile app accounts prior to
                            binding it to the enterprise API gateway.
                        </p>
                    </div>
                </div>
            </div>

            <div class="whatsappapi-faqs_item">
                <button type="button" class="whatsappapi-faqs_question">
                    <span>How do messaging costs work on the WhatsApp Business API platform?</span>
                    <span class="whatsappapi-faqs_question-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div class="whatsappapi-faqs_answer">
                    <div class="whatsappapi-faqs_answer-inner">
                        <p>
                            Messaging costs operate on Meta's conversation-based pricing
                            model. Charges are calculated based on 24-hour conversation
                            sessions and vary depending on the specific conversation
                            category — Utility, Service, Marketing, or Authentication.
                        </p>
                    </div>
                </div>
            </div>

            <div class="whatsappapi-faqs_item">
                <button type="button" class="whatsappapi-faqs_question">
                    <span>Can we integrate the WhatsApp API with our internal CRM or e-commerce website?</span>
                    <span class="whatsappapi-faqs_question-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div class="whatsappapi-faqs_answer">
                    <div class="whatsappapi-faqs_answer-inner">
                        <p>
                            Yes. Kings Digital provides developer-ready REST APIs, Webhooks,
                            and pre-built connectors that integrate smoothly with major
                            platforms like Salesforce, HubSpot, Zoho, Shopify, WooCommerce,
                            custom ERPs, and billing software.
                        </p>
                    </div>
                </div>
            </div>

            <div class="whatsappapi-faqs_item">
                <button type="button" class="whatsappapi-faqs_question">
                    <span>How long does it take to activate an official WhatsApp Business API account?</span>
                    <span class="whatsappapi-faqs_question-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                </button>
                <div class="whatsappapi-faqs_answer">
                    <div class="whatsappapi-faqs_answer-inner">
                        <p>
                            Once your Meta Business Manager account verification details
                            are submitted and your corporate phone number is connected,
                            template setup, workflow configuration, and full account
                            activation can typically be completed within a few
                            business days.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    (function () {
        var list = document.getElementById('whatsappapiFaqsList');
        if (!list) return;

        var items = list.querySelectorAll('.whatsappapi-faqs_item');

        items.forEach(function (item) {
            var question = item.querySelector('.whatsappapi-faqs_question');
            question.addEventListener('click', function () {
                var isOpen = item.classList.contains('is-open');

                items.forEach(function (el) {
                    el.classList.remove('is-open');
                });

                if (!isOpen) {
                    item.classList.add('is-open');
                }
            });
        });
    })();
</script>