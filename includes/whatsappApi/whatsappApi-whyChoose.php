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
       WHY CHOOSE KINGS DIGITAL SECTION
       ======================================== */

    .whatsappapi-why-choose {
        padding: 40px 24px;
        background: var(--color-bg-soft);
    }

    .whatsappapi-why-choose_content {
        max-width: 1080px;
        margin: 0 auto;
    }

    .whatsappapi-why-choose_header {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 52px;
    }

    .whatsappapi-why-choose_eyebrow {
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

    .whatsappapi-why-choose_title {
        font-size: clamp(1.75rem, 3vw, 46px);
        line-height: 1.25;
        font-weight: 800 !important;
        color: var(--color-text);
        margin: 0;
    }

    .whatsappapi-why-choose_title em {
        display: block;
        font-style: normal;
        font-weight: 800 !important;
        background: var(--gradient-primary-dark);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappapi-why-choose_sub {
        margin: 14px 0 0;
        font-size: 0.98rem;
        color: var(--color-text-secondary);
        line-height: 1.6;
    }

    .whatsappapi-why-choose_grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        margin-bottom: 48px;
    }

    .whatsappapi-why-choose_card {
        background: var(--color-bg);
        border: 1px solid var(--color-border);
        border-radius: var(--radius-lg);
        padding: 30px 26px;
        box-shadow: var(--shadow-sm);
        transition: box-shadow var(--transition-normal), transform var(--transition-normal);
    }

    .whatsappapi-why-choose_card:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-2px);
    }

    .whatsappapi-why-choose_icon {
        width: 46px;
        height: 46px;
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        background: var(--gradient-primary);
        color: var(--color-text-light);
        box-shadow: var(--shadow-green);
    }

    .whatsappapi-why-choose_icon svg {
        width: 22px;
        height: 22px;
    }

    .whatsappapi-why-choose_card-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--color-text);
        margin: 0 0 10px;
    }

    .whatsappapi-why-choose_card-desc {
        font-size: 0.9rem;
        line-height: 1.65;
        color: var(--color-text-secondary);
        margin: 0;
    }

    .whatsappapi-why-choose_cta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
        background: var(--gradient-dark);
        border-radius: var(--radius-xl);
        padding: 40px 44px;
        box-shadow: var(--shadow-lg);
    }

    .whatsappapi-why-choose_cta-text h3 {
        font-size: 1.4rem;
        font-weight: 800;
        color: var(--color-text-light);
        margin: 0 0 8px;
    }

    .whatsappapi-why-choose_cta-text p {
        font-size: 0.95rem;
        color: var(--color-text-light-secondary);
        margin: 0;
        line-height: 1.6;
        max-width: 480px;
    }

    .whatsappapi-why-choose_cta-btn {
        flex-shrink: 0;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--gradient-primary);
        color: var(--color-text-light);
        font-size: 0.95rem;
        font-weight: 700;
        text-decoration: none;
        padding: 15px 30px;
        border-radius: var(--radius-full);
        box-shadow: var(--shadow-green-strong);
        transition: transform var(--transition-normal), box-shadow var(--transition-normal);
        white-space: nowrap;
    }

    .whatsappapi-why-choose_cta-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-green-strong), var(--shadow-lg);
    }

    .whatsappapi-why-choose_cta-btn svg {
        width: 18px;
        height: 18px;
    }

    @media (max-width: 980px) {
        .whatsappapi-why-choose_grid {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 640px) {
        .whatsappapi-why-choose_grid {
            grid-template-columns: 1fr;
        }

        .whatsappapi-why-choose_cta {
            flex-direction: column;
            text-align: center;
            padding: 32px 28px;
        }

        .whatsappapi-why-choose_cta-text p {
            max-width: 100%;
        }
    }
</style>

<section class="whatsappapi-why-choose">
    <div class="whatsappapi-why-choose_content">

        <div class="whatsappapi-why-choose_header">
            <span class="whatsappapi-why-choose_eyebrow">Why Kings Digital</span>
            <h2 class="whatsappapi-why-choose_title">
                Why Choose Kings Digital
                <em>for Your Official WhatsApp Business API Solution?</em>
            </h2>
            <p class="whatsappapi-why-choose_sub">
                When you choose Kings Digital for your business WhatsApp messaging solutions,
                you can benefit from our expert technical support and services.
            </p>
        </div>

        <div class="whatsappapi-why-choose_grid">

            <div class="whatsappapi-why-choose_card">
                <div class="whatsappapi-why-choose_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 3L20 7V12C20 16.5 16.9 20.4 12 21.5C7.1 20.4 4 16.5 4 12V7L12 3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="whatsappapi-why-choose_card-title">Complete Setup Assistance</h3>
                <p class="whatsappapi-why-choose_card-desc">
                    Get the entire process done by our crew, including account
                    verification, number binding, template writing, and green
                    badge request.
                </p>
            </div>

            <div class="whatsappapi-why-choose_card">
                <div class="whatsappapi-why-choose_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 20V14M10 20V9M16 20V4M22 20H2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="whatsappapi-why-choose_card-title">Usage Tracking</h3>
                <p class="whatsappapi-why-choose_card-desc">
                    We offer clear reports regarding marketing campaign
                    effectiveness, message volumes, deliveries, read rates,
                    link clicks, and engagement statistics for customers.
                </p>
            </div>

            <div class="whatsappapi-why-choose_card">
                <div class="whatsappapi-why-choose_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8" />
                        <path d="M12 7V12L15.5 14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="whatsappapi-why-choose_card-title">Round-the-Clock Support</h3>
                <p class="whatsappapi-why-choose_card-desc">
                    Get help at any time with our technical experts providing
                    support in API integrations, webhook setup, workflow
                    building, and conducting campaigns.
                </p>
            </div>

            <div class="whatsappapi-why-choose_card">
                <div class="whatsappapi-why-choose_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8" />
                        <rect x="14" y="3" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8" />
                        <rect x="3" y="14" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8" />
                        <rect x="14" y="14" width="7" height="7" rx="1.5" stroke="currentColor" stroke-width="1.8" />
                    </svg>
                </div>
                <h3 class="whatsappapi-why-choose_card-title">Capable Infrastructure</h3>
                <p class="whatsappapi-why-choose_card-desc">
                    Our services are suitable for both small and large
                    companies sending millions of messages monthly.
                </p>
            </div>

        </div>

        <!-- <div class="whatsappapi-why-choose_cta">
            <div class="whatsappapi-why-choose_cta-text">
                <h3>Ready to get your Green Tick verified WhatsApp API?</h3>
                <p>
                    Talk to our team today and get your official WhatsApp Business
                    API set up, verified, and running in no time.
                </p>
            </div>
            <a href="#contact" class="whatsappapi-why-choose_cta-btn">
                Get Started Now
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div> -->

    </div>
</section>