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
       WHATSAPP APP VS API — COMPARE SECTION
       ======================================== */

    .whatsappapi-compare {
        padding: 40px 24px;
        background: var(--color-bg);
    }

    .whatsappapi-compare_content {
        max-width: 1080px;
        margin: 0 auto;
    }

    .whatsappapi-compare_header {
        text-align: center;
        max-width: 640px;
        margin: 0 auto 52px;
    }

    .whatsappapi-compare_eyebrow {
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

    .whatsappapi-compare_title {
        font-size: clamp(1.75rem, 3vw, 46px);
        line-height: 1.25;
        font-weight: 800 !important;
        color: var(--color-text);
        margin: 0;
    }

    .whatsappapi-compare_title em {
        display: block;
        font-style: normal;
        font-weight: 800 !important;
        background: var(--gradient-primary-dark);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappapi-compare_sub {
        margin: 14px 0 0;
        font-size: 0.98rem;
        color: var(--color-text-secondary);
        line-height: 1.6;
    }

    .whatsappapi-compare_grid {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        align-items: center;
        gap: 28px;
    }

    .whatsappapi-compare_card {
        background: var(--color-bg);
        border: 1px solid var(--color-border);
        border-radius: var(--radius-lg);
        padding: 34px 32px;
        box-shadow: var(--shadow-sm);
        transition: box-shadow var(--transition-normal), transform var(--transition-normal);
    }

    .whatsappapi-compare_card:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-2px);
    }

    .whatsappapi-compare_icon {
        width: 46px;
        height: 46px;
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .whatsappapi-compare_icon svg {
        width: 22px;
        height: 22px;
    }

    .whatsappapi-compare_card--app .whatsappapi-compare_icon {
        background: var(--color-bg-muted);
        color: var(--color-secondary);
    }

    .whatsappapi-compare_card--api .whatsappapi-compare_icon {
        background: var(--color-bg-muted);
        color: var(--color-primary-dark);
    }

    .whatsappapi-compare_card-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--color-text);
        margin: 0 0 10px;
    }

    .whatsappapi-compare_card-desc {
        font-size: 0.92rem;
        line-height: 1.65;
        color: var(--color-text-secondary);
        margin: 0 0 26px;
    }

    .whatsappapi-compare_feature {
        display: flex;
        gap: 14px;
        padding: 16px 0;
        border-top: 1px solid var(--color-border);
    }

    .whatsappapi-compare_feature:first-of-type {
        border-top: none;
        padding-top: 0;
    }

    .whatsappapi-compare_feature-num {
        flex-shrink: 0;
        width: 26px;
        height: 26px;
        border-radius: var(--radius-full);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.72rem;
        font-weight: 700;
        color: var(--color-text-light);
    }

    .whatsappapi-compare_card--app .whatsappapi-compare_feature-num {
        background: var(--color-secondary);
    }

    .whatsappapi-compare_card--api .whatsappapi-compare_feature-num {
        background: var(--color-primary);
    }

    .whatsappapi-compare_feature-title {
        font-size: 0.9rem;
        font-weight: 700;
        color: var(--color-text);
        margin: 0 0 4px;
    }

    .whatsappapi-compare_feature-desc {
        font-size: 0.85rem;
        line-height: 1.6;
        color: var(--color-text-secondary);
        margin: 0;
    }

    .whatsappapi-compare_vs {
        width: 52px;
        height: 52px;
        border-radius: var(--radius-full);
        background: var(--gradient-dark);
        color: var(--color-text-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.78rem;
        font-weight: 700;
        letter-spacing: 0.04em;
        box-shadow: var(--shadow-teal);
        justify-self: center;
    }

    @media (max-width: 780px) {
        .whatsappapi-compare_grid {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .whatsappapi-compare_vs {
            margin: 22px auto;
        }
    }
</style>

<section class="whatsappapi-compare">
    <div class="whatsappapi-compare_content">

        <div class="whatsappapi-compare_header">
            <span class="whatsappapi-compare_eyebrow">Choosing the right fit</span>
            <h2 class="whatsappapi-compare_title">
                WhatsApp Business App
                <em>vs WhatsApp Business API</em>
            </h2>
            <p class="whatsappapi-compare_sub">
                The right choice depends on your messaging volume, need for automation,
                integration with back-end systems, and the size of your support team.
            </p>
        </div>

        <div class="whatsappapi-compare_grid">

            <div class="whatsappapi-compare_card whatsappapi-compare_card--app">
                <div class="whatsappapi-compare_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="7" y="2" width="10" height="20" rx="2" stroke="currentColor" stroke-width="1.8" />
                        <path d="M11 18.5H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </div>
                <h3 class="whatsappapi-compare_card-title">WhatsApp Business App</h3>
                <p class="whatsappapi-compare_card-desc">
                    Aimed at entrepreneurs, individual professionals, and small local
                    businesses that need simple, direct customer conversations without
                    complex setup or back-end integrations.
                </p>

                <div class="whatsappapi-compare_feature">
                    <span class="whatsappapi-compare_feature-num">1</span>
                    <div>
                        <h4 class="whatsappapi-compare_feature-title">Limited Device Connectivity</h4>
                        <p class="whatsappapi-compare_feature-desc">
                            Connects with only up to 5 linked devices — enough for a
                            solo operator or a single small team.
                        </p>
                    </div>
                </div>

                <div class="whatsappapi-compare_feature">
                    <span class="whatsappapi-compare_feature-num">2</span>
                    <div>
                        <h4 class="whatsappapi-compare_feature-title">Restricted Broadcast Size</h4>
                        <p class="whatsappapi-compare_feature-desc">
                            Broadcast messages reach a maximum of 256 subscribed
                            contacts per list, with no option for bulk automation.
                        </p>
                    </div>
                </div>

                <div class="whatsappapi-compare_feature">
                    <span class="whatsappapi-compare_feature-num">3</span>
                    <div>
                        <h4 class="whatsappapi-compare_feature-title">Quick Replies, No CRM</h4>
                        <p class="whatsappapi-compare_feature-desc">
                            Quick replies help you respond faster, but the app does
                            not support CRM or helpdesk integration.
                        </p>
                    </div>
                </div>
            </div>

            <span class="whatsappapi-compare_vs">VS</span>

            <div class="whatsappapi-compare_card whatsappapi-compare_card--api">
                <div class="whatsappapi-compare_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 3L4 12L9 21" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 3L20 12L15 21" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="whatsappapi-compare_card-title">WhatsApp Business API</h3>
                <p class="whatsappapi-compare_card-desc">
                    Built for growing and enterprise businesses that need automation,
                    scale, and deep integration with their existing back-end
                    technologies and support workflows.
                </p>

                <div class="whatsappapi-compare_feature">
                    <span class="whatsappapi-compare_feature-num">1</span>
                    <div>
                        <h4 class="whatsappapi-compare_feature-title">Multi-Agent Login</h4>
                        <p class="whatsappapi-compare_feature-desc">
                            Multiple support agents can access one shared business
                            number at the same time through connected tools.
                        </p>
                    </div>
                </div>

                <div class="whatsappapi-compare_feature">
                    <span class="whatsappapi-compare_feature-num">2</span>
                    <div>
                        <h4 class="whatsappapi-compare_feature-title">Mass Messaging at Scale</h4>
                        <p class="whatsappapi-compare_feature-desc">
                            Send notifications and updates to unlimited verified
                            contacts, without any manual broadcast limit.
                        </p>
                    </div>
                </div>

                <div class="whatsappapi-compare_feature">
                    <span class="whatsappapi-compare_feature-num">3</span>
                    <div>
                        <h4 class="whatsappapi-compare_feature-title">Developer-Friendly APIs</h4>
                        <p class="whatsappapi-compare_feature-desc">
                            Professional APIs connect directly to CRMs, helpdesks,
                            and internal systems to automate full workflows.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>