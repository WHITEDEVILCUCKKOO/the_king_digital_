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
       BASIC APP -> API SCALE SECTION
       (growth-journey panel layout, distinct
       from the earlier VS-card design)
       ======================================== */

    .whatsappapi-scale {
        padding: 88px 24px;
        background: var(--color-bg-soft);
    }

    .whatsappapi-scale_content {
        max-width: 1120px;
        margin: 0 auto;
    }

    .whatsappapi-scale_header {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 52px;
    }

    .whatsappapi-scale_eyebrow {
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

    .whatsappapi-scale_title {
        font-size: clamp(1.75rem, 3vw, 2.35rem);
        line-height: 1.28;
        font-weight: 800;
        color: var(--color-text);
        margin: 0;
    }

    .whatsappapi-scale_sub {
        margin: 14px 0 0;
        font-size: 0.98rem;
        color: var(--color-text-secondary);
        line-height: 1.6;
    }

    .whatsappapi-scale_track {
        display: grid;
        grid-template-columns: 1fr 96px 1fr;
        align-items: stretch;
        gap: 0;
    }

    .whatsappapi-scale_panel {
        border-radius: var(--radius-xl);
        padding: 36px 32px;
    }

    .whatsappapi-scale_panel--basic {
        background: var(--color-bg);
        border: 1px solid var(--color-border);
        box-shadow: var(--shadow-sm);
    }

    .whatsappapi-scale_panel--api {
        background: var(--gradient-api);
        box-shadow: var(--shadow-lg);
    }

    .whatsappapi-scale_panel-tag {
        display: inline-block;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.01em;
        padding: 5px 14px;
        border-radius: var(--radius-full);
        margin-bottom: 16px;
    }

    .whatsappapi-scale_panel--basic .whatsappapi-scale_panel-tag {
        background: var(--color-bg-muted);
        color: var(--color-secondary-dark);
    }

    .whatsappapi-scale_panel--api .whatsappapi-scale_panel-tag {
        background: rgba(255, 255, 255, 0.12);
        color: var(--color-primary-light);
    }

    .whatsappapi-scale_panel-title {
        font-size: 1.3rem;
        font-weight: 700;
        margin: 0 0 10px;
    }

    .whatsappapi-scale_panel--basic .whatsappapi-scale_panel-title {
        color: var(--color-text);
    }

    .whatsappapi-scale_panel--api .whatsappapi-scale_panel-title {
        color: var(--color-text-light);
    }

    .whatsappapi-scale_panel-desc {
        font-size: 0.92rem;
        line-height: 1.65;
        margin: 0 0 28px;
    }

    .whatsappapi-scale_panel--basic .whatsappapi-scale_panel-desc {
        color: var(--color-text-secondary);
    }

    .whatsappapi-scale_panel--api .whatsappapi-scale_panel-desc {
        color: var(--color-text-light-secondary);
    }

    .whatsappapi-scale_tiles {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .whatsappapi-scale_tile {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .whatsappapi-scale_tile-icon {
        width: 38px;
        height: 38px;
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .whatsappapi-scale_tile-icon svg {
        width: 18px;
        height: 18px;
    }

    .whatsappapi-scale_panel--basic .whatsappapi-scale_tile-icon {
        background: var(--color-bg-muted);
        color: var(--color-secondary);
    }

    .whatsappapi-scale_panel--api .whatsappapi-scale_tile-icon {
        background: rgba(255, 255, 255, 0.10);
        color: var(--color-primary-light);
    }

    .whatsappapi-scale_tile-title {
        font-size: 0.88rem;
        font-weight: 700;
        margin: 0;
    }

    .whatsappapi-scale_panel--basic .whatsappapi-scale_tile-title {
        color: var(--color-text);
    }

    .whatsappapi-scale_panel--api .whatsappapi-scale_tile-title {
        color: var(--color-text-light);
    }

    .whatsappapi-scale_tile-desc {
        font-size: 0.82rem;
        line-height: 1.55;
        margin: 0;
    }

    .whatsappapi-scale_panel--basic .whatsappapi-scale_tile-desc {
        color: var(--color-text-secondary);
    }

    .whatsappapi-scale_panel--api .whatsappapi-scale_tile-desc {
        color: var(--color-text-light-secondary);
    }

    .whatsappapi-scale_connector {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .whatsappapi-scale_connector-label {
        writing-mode: vertical-rl;
        transform: rotate(180deg);
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.06em;
        color: var(--color-text-muted);
        white-space: nowrap;
    }

    .whatsappapi-scale_connector-arrow {
        width: 44px;
        height: 44px;
        border-radius: var(--radius-full);
        background: var(--gradient-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: var(--shadow-green);
        flex-shrink: 0;
    }

    .whatsappapi-scale_connector-arrow svg {
        width: 20px;
        height: 20px;
        color: var(--color-text-light);
    }

    @media (max-width: 860px) {
        .whatsappapi-scale_track {
            grid-template-columns: 1fr;
            gap: 28px;
        }

        .whatsappapi-scale_connector {
            flex-direction: row;
        }

        .whatsappapi-scale_connector-label {
            writing-mode: horizontal-tb;
            transform: none;
        }

        .whatsappapi-scale_connector-arrow {
            transform: rotate(90deg);
        }
    }

    @media (max-width: 560px) {
        .whatsappapi-scale_tiles {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="whatsappapi-scale">
    <div class="whatsappapi-scale_content">

        <div class="whatsappapi-scale_header">
            <span class="whatsappapi-scale_eyebrow">From first chat to full scale</span>
            <h2 class="whatsappapi-scale_title">
                How Local Businesses Start — and How Enterprises Scale
            </h2>
            <p class="whatsappapi-scale_sub">
                Every business starts messaging customers the same simple way.
                Here's what changes once growth demands automation, integration, and reach.
            </p>
        </div>

        <div class="whatsappapi-scale_track">

            <div class="whatsappapi-scale_panel whatsappapi-scale_panel--basic">
                <span class="whatsappapi-scale_panel-tag">Basic App</span>
                <h3 class="whatsappapi-scale_panel-title">Built for Local Small Businesses</h3>
                <p class="whatsappapi-scale_panel-desc">
                    A beginner-friendly digital tool vendors use for personal,
                    conversion-focused contact with a handful of customers.
                </p>

                <div class="whatsappapi-scale_tiles">
                    <div class="whatsappapi-scale_tile">
                        <span class="whatsappapi-scale_tile-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="7" y="2" width="10" height="20" rx="2" stroke="currentColor" stroke-width="1.8"/>
                                <path d="M11 18.5H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <h4 class="whatsappapi-scale_tile-title">Device Restriction</h4>
                        <p class="whatsappapi-scale_tile-desc">
                            Runs on one capable smartphone, with no more than
                            4 connected web sessions alongside it.
                        </p>
                    </div>

                    <div class="whatsappapi-scale_tile">
                        <span class="whatsappapi-scale_tile-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L20 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                                <path d="M4 12L20 12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                                <path d="M4 18L14 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <h4 class="whatsappapi-scale_tile-title">Manual Broadcasting</h4>
                        <p class="whatsappapi-scale_tile-desc">
                            Requires both sides to save each other's number,
                            and broadcast lists top out at 256 people.
                        </p>
                    </div>

                    <div class="whatsappapi-scale_tile">
                        <span class="whatsappapi-scale_tile-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="8" r="3.2" stroke="currentColor" stroke-width="1.8"/>
                                <path d="M5 20C5 16.5 8 14 12 14C16 14 19 16.5 19 20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <h4 class="whatsappapi-scale_tile-title">Basic Profile</h4>
                        <p class="whatsappapi-scale_tile-desc">
                            Covers the essentials — working hours and
                            business location, nothing more.
                        </p>
                    </div>

                    <div class="whatsappapi-scale_tile">
                        <span class="whatsappapi-scale_tile-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4L20 20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                                <path d="M7 12C7 9.2 9.2 7 12 7C13.4 7 14.7 7.6 15.6 8.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                                <path d="M17 12C17 14.8 14.8 17 12 17C11 17 10.1 16.7 9.4 16.2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <h4 class="whatsappapi-scale_tile-title">No Software Automation</h4>
                        <p class="whatsappapi-scale_tile-desc">
                            No connection to external databases, e-commerce
                            platforms, payment systems, or CRM tools.
                        </p>
                    </div>
                </div>
            </div>

            <div class="whatsappapi-scale_connector">
                <span class="whatsappapi-scale_connector-label">SCALES INTO</span>
                <span class="whatsappapi-scale_connector-arrow">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 12H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M14 6L20 12L14 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </div>

            <div class="whatsappapi-scale_panel whatsappapi-scale_panel--api">
                <span class="whatsappapi-scale_panel-tag">Business API</span>
                <h3 class="whatsappapi-scale_panel-title">Engineered for Corporate Growth</h3>
                <p class="whatsappapi-scale_panel-desc">
                    Removes every physical-device limitation, replacing it with
                    automated, multi-channel engagement built for productivity.
                </p>

                <div class="whatsappapi-scale_tiles">
                    <div class="whatsappapi-scale_tile">
                        <span class="whatsappapi-scale_tile-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 12C4 12 7 6 12 6C17 6 20 12 20 12C20 12 17 18 12 18C7 18 4 12 4 12Z" stroke="currentColor" stroke-width="1.8"/>
                                <circle cx="12" cy="12" r="2.4" stroke="currentColor" stroke-width="1.8"/>
                            </svg>
                        </span>
                        <h4 class="whatsappapi-scale_tile-title">Broadcasting at Scale</h4>
                        <p class="whatsappapi-scale_tile-desc">
                            Reach thousands of contacts with promotions and
                            updates instantly, with no cap and no saved-contact requirement.
                        </p>
                    </div>

                    <div class="whatsappapi-scale_tile">
                        <span class="whatsappapi-scale_tile-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="4" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8"/>
                                <rect x="13" y="13" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8"/>
                                <path d="M11 7.5H15.5V13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <h4 class="whatsappapi-scale_tile-title">CRM & Workflow Integration</h4>
                        <p class="whatsappapi-scale_tile-desc">
                            Connects messaging directly to HubSpot, Salesforce,
                            Zoho, Shopify, WooCommerce, and more.
                        </p>
                    </div>

                    <div class="whatsappapi-scale_tile">
                        <span class="whatsappapi-scale_tile-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="5" y="5" width="14" height="11" rx="2" stroke="currentColor" stroke-width="1.8"/>
                                <circle cx="9.5" cy="10.5" r="1" fill="currentColor"/>
                                <circle cx="14.5" cy="10.5" r="1" fill="currentColor"/>
                                <path d="M12 5V2.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <h4 class="whatsappapi-scale_tile-title">24/7 AI Chatbots</h4>
                        <p class="whatsappapi-scale_tile-desc">
                            Answer common questions, vet leads, collect data,
                            and hand off complex cases to human agents.
                        </p>
                    </div>

                    <div class="whatsappapi-scale_tile">
                        <span class="whatsappapi-scale_tile-icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 19V9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                                <path d="M12 19V5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                                <path d="M19 19V12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <h4 class="whatsappapi-scale_tile-title">In-Depth Analytics</h4>
                        <p class="whatsappapi-scale_tile-desc">
                            Track every message from dispatch to delivery,
                            acknowledgement, button clicks, and agent response time.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>