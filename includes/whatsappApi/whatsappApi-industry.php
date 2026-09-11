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
       INDUSTRY SOLUTIONS — CARD GRID SECTION
       ======================================== */

    .whatsappapi-industries {
        padding: 40px 24px;
        background: var(--color-bg);
    }

    .whatsappapi-industries_content {
        max-width: 1180px;
        margin: 0 auto;
    }

    .whatsappapi-industries_header {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 52px;
    }

    .whatsappapi-industries_eyebrow {
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

    .whatsappapi-industries_title {
        font-size: clamp(1.75rem, 3vw, 2.35rem);
        line-height: 1.28;
        font-weight: 800;
        color: var(--color-text);
        margin: 0;
    }

    .whatsappapi-industries_sub {
        margin: 14px 0 0;
        font-size: 0.98rem;
        color: var(--color-text-secondary);
        line-height: 1.6;
    }

    .whatsappapi-industries_grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 24px;
    }

    .whatsappapi-industries_card {
        grid-column: span 2;
        position: relative;
        background: var(--color-bg);
        border: 1px solid var(--color-border);
        border-radius: var(--radius-lg);
        padding: 28px 26px 26px;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        transition: box-shadow var(--transition-normal), transform var(--transition-normal);
    }

    .whatsappapi-industries_card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--accent, var(--color-primary));
    }

    .whatsappapi-industries_card:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-md);
    }

    .whatsappapi-industries_card:nth-child(4) {
        grid-column: 2 / span 2;
    }

    .whatsappapi-industries_card:nth-child(5) {
        grid-column: 4 / span 2;
    }

    .whatsappapi-industries_icon {
        width: 44px;
        height: 44px;
        border-radius: var(--radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        background: var(--color-bg-muted);
        color: var(--accent, var(--color-primary));
    }

    .whatsappapi-industries_icon svg {
        width: 21px;
        height: 21px;
    }

    .whatsappapi-industries_card-title {
        font-size: 1.08rem;
        font-weight: 700;
        color: var(--color-text);
        margin: 0 0 16px;
    }

    .whatsappapi-industries_list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .whatsappapi-industries_list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 0.85rem;
        line-height: 1.55;
        color: var(--color-text-secondary);
    }

    .whatsappapi-industries_list li svg {
        flex-shrink: 0;
        width: 16px;
        height: 16px;
        margin-top: 2px;
        color: var(--accent, var(--color-primary));
    }

    @media (max-width: 900px) {
        .whatsappapi-industries_grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .whatsappapi-industries_card,
        .whatsappapi-industries_card:nth-child(4),
        .whatsappapi-industries_card:nth-child(5) {
            grid-column: span 1;
        }
    }

    @media (max-width: 560px) {
        .whatsappapi-industries_grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="whatsappapi-industries">
    <div class="whatsappapi-industries_content">

        <div class="whatsappapi-industries_header">
            <span class="whatsappapi-industries_eyebrow">Built for every industry</span>
            <h2 class="whatsappapi-industries_title">
                How Specific Industries Leverage WhatsApp API Solutions
            </h2>
            <p class="whatsappapi-industries_sub">
                From chat-based storefronts to patient care reminders, the same
                messaging engine adapts to how each industry actually works.
            </p>
        </div>

        <div class="whatsappapi-industries_grid">

            <!-- E-Commerce -->
            <div class="whatsappapi-industries_card" style="--accent: var(--color-primary);">
                <span class="whatsappapi-industries_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 8H18L17 20H7L6 8Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                        <path d="M9 8V6C9 4.3 10.3 3 12 3C13.7 3 15 4.3 15 6V8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
                <h3 class="whatsappapi-industries_card-title">E-Commerce</h3>
                <ul class="whatsappapi-industries_list">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Highlight seasonal collections through interactive multi-product messages.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Send automatic post-purchase surveys, care instructions, and review requests.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Answer questions on returns, refunds, and size fitting instantly.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Bring shoppers back with personalized restock alerts and member-only sales.
                    </li>
                </ul>
            </div>

            <!-- Real Estate -->
            <div class="whatsappapi-industries_card" style="--accent: var(--color-secondary);">
                <span class="whatsappapi-industries_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 21V9L12 3L20 9V21" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                        <path d="M9 21V14H15V21" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                    </svg>
                </span>
                <h3 class="whatsappapi-industries_card-title">Real Estate</h3>
                <ul class="whatsappapi-industries_list">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Auto-send e-brochures, floor plans, pricing lists, and virtual tours after every inquiry.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Schedule in-person or virtual site visits through calendar booking bots.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Announce new residential or commercial launches to selected investor groups.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Send automated payment reminders alongside live construction photos.
                    </li>
                </ul>
            </div>

            <!-- Education -->
            <div class="whatsappapi-industries_card" style="--accent: var(--color-primary-dark);">
                <span class="whatsappapi-industries_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 9L12 5L21 9L12 13L3 9Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                        <path d="M7 11V16C7 17.7 9.2 19 12 19C14.8 19 17 17.7 17 16V11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
                <h3 class="whatsappapi-industries_card-title">Education</h3>
                <ul class="whatsappapi-industries_list">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Qualify leads automatically by asking about preferred study areas and learning styles.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Share document deadlines and exam dates the moment they're set.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Give students direct access to lesson information and class links.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Deliver completion certificates and job opportunities without delay.
                    </li>
                </ul>
            </div>

            <!-- Healthcare -->
            <div class="whatsappapi-industries_card" style="--accent: var(--color-secondary-light);">
                <span class="whatsappapi-industries_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 12H8L10 7L14 17L16 12H20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <h3 class="whatsappapi-industries_card-title">Healthcare</h3>
                <ul class="whatsappapi-industries_list">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Automate appointment booking, specialist search, and consultation confirmations.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Share lab reports and test results through secure, password-protected links.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Send preventative care tips, vaccination reminders, and seasonal checkup offers.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Cut admin calls by answering pre-procedure questions through automated chat.
                    </li>
                </ul>
            </div>

            <!-- Travel & Tourism -->
            <div class="whatsappapi-industries_card" style="--accent: var(--color-secondary-dark);">
                <span class="whatsappapi-industries_icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 13L21 6L14 20L11 14L3 13Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" />
                        <path d="M11 14L21 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
                <h3 class="whatsappapi-industries_card-title">Travel &amp; Tourism</h3>
                <ul class="whatsappapi-industries_list">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Deliver booking confirmations, e-tickets, boarding passes, and hotel vouchers instantly.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Auto-reply to check-in, room service, and airport transfer questions.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Share real-time updates on itineraries, gate changes, and local guides.
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12L9.5 17.5L20 6" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Offer personalized upsells like room upgrades, spa add-ons, and late check-out.
                    </li>
                </ul>
            </div>

        </div>

    </div>
</section>