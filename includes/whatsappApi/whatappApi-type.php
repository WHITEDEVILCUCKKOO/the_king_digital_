<style>
    /* =========================================================
       WHATSAPP API BRAND VARIABLES
    ========================================================= */

    :root {
        /* PRIMARY */
        --color-primary: #25D366;
        --color-primary-light: #5BE58A;
        --color-primary-dark: #1DA851;

        /* SECONDARY / API */
        --color-secondary: #128C7E;
        --color-secondary-light: #25A99A;
        --color-secondary-dark: #075E54;

        /* BACKGROUNDS */
        --color-bg: #FFFFFF;
        --color-bg-soft: #F3FBF7;
        --color-bg-muted: #E8F5EF;

        --color-bg-dark: #061B16;
        --color-bg-dark-soft: #0B2922;

        /* TEXT */
        --color-text: #12231D;
        --color-text-secondary: #53665F;
        --color-text-muted: #82928C;

        --color-text-light: #FFFFFF;
        --color-text-light-secondary: #C7D8D2;

        /* BORDERS */
        --color-border: #D9EAE3;
        --color-border-dark: #25443B;

        /* GRADIENTS */
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

        --gradient-secondary:
            linear-gradient(135deg,
                #075E54 0%,
                #128C7E 50%,
                #25A99A 100%);

        --gradient-secondary-dark:
            linear-gradient(135deg,
                #043F39 0%,
                #075E54 100%);

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

        /* GLOW */
        --gradient-glow:
            radial-gradient(circle,
                rgba(37, 211, 102, 0.20) 0%,
                rgba(37, 211, 102, 0) 70%);

        --gradient-glow-secondary:
            radial-gradient(circle,
                rgba(18, 140, 126, 0.20) 0%,
                rgba(18, 140, 126, 0) 70%);

        /* MESSAGE */
        --gradient-message:
            linear-gradient(135deg,
                #E8FFF1 0%,
                #D7F9E5 100%);

        /* SHADOWS */
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

        /* RADIUS */
        --radius-sm: 6px;
        --radius-md: 10px;
        --radius-lg: 16px;
        --radius-xl: 24px;
        --radius-full: 999px;

        /* TRANSITIONS */
        --transition-fast: 150ms ease;
        --transition-normal: 250ms ease;
        --transition-slow: 400ms ease;
    }


    /* =========================================================
       WHATSAPP TYPE SECTION
    ========================================================= */

    .whatsappApi-type {
        width: 100%;
        padding: 80px 20px;

        font-family:
            'Segoe UI',
            Roboto,
            Tahoma,
            Geneva,
            Verdana,
            sans-serif;

        /* WhatsApp API soft green background */
        background:
            radial-gradient(circle at 15% 20%,
                rgba(37, 211, 102, 0.08),
                transparent 35%),
            radial-gradient(circle at 85% 80%,
                rgba(18, 140, 126, 0.08),
                transparent 35%),
            var(--color-bg-soft);

        position: relative;
        overflow: hidden;
    }


    /* =========================================================
       CONTENT
    ========================================================= */

    .whatsapp-type_content {
        width: 100%;
        max-width: 900px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }


    /* =========================================================
       HEADING
    ========================================================= */

    .whatsapp-type_content-heading {
        text-align: center;
        margin-bottom: 48px;
    }

    .whatsapp-type_content-heading h1 {
        margin: 0;

        font-size: 50px;
        font-weight: 800;
        line-height: 1.15;

        color: var(--color-text);
    }

    .whatsapp-type_content-heading p {
        margin: 14px 0 0;

        font-size: 16px;
        font-weight: 600;
        line-height: 1.6;

        color: var(--color-text-secondary);
    }


    /* =========================================================
       CARD CONTAINER
    ========================================================= */

    .whatsapp-type_content-card-container {
        display: flex;
        align-items: stretch;
        gap: 24px;
    }


    /* =========================================================
       CARD
    ========================================================= */

    .whatsapp-type_content-card {
        position: relative;

        flex: 1;

        padding: 36px 32px;

        border-radius: var(--radius-lg);

        /*
         * Very subtle green glass effect
         */
        background:
            linear-gradient(145deg,
                rgba(255, 255, 255, 0.96),
                rgba(243, 251, 247, 0.92));

        border: 1px solid rgba(37, 211, 102, 0.12);

        box-shadow:
            0 20px 45px rgba(6, 27, 22, 0.07),
            0 4px 12px rgba(37, 211, 102, 0.04);

        overflow: hidden;

        transition:
            transform var(--transition-normal),
            box-shadow var(--transition-normal),
            border-color var(--transition-normal);
    }


    /* Subtle green glow inside card */

    .whatsapp-type_content-card::before {
        content: "";

        position: absolute;

        width: 180px;
        height: 180px;

        top: -100px;
        right: -80px;

        background: var(--gradient-glow);

        border-radius: 50%;

        pointer-events: none;
    }


    /* Small teal glow */

    .whatsapp-type_content-card::after {
        content: "";

        position: absolute;

        width: 120px;
        height: 120px;

        bottom: -80px;
        left: -60px;

        background: var(--gradient-glow-secondary);

        border-radius: 50%;

        pointer-events: none;
    }


    /* =========================================================
       CARD HOVER
    ========================================================= */

    .whatsapp-type_content-card:hover {
        transform: translateY(-6px);

        border-color:
            rgba(37, 211, 102, 0.28);

        box-shadow:
            0 24px 50px rgba(6, 27, 22, 0.10),
            0 12px 30px rgba(37, 211, 102, 0.10);
    }


    /* =========================================================
       CARD HEADING
    ========================================================= */

    .whatsapp-type_content-card h2 {
        position: relative;
        z-index: 2;

        margin: 0;

        font-size: 28px;
        font-weight: 700;
        line-height: 1.25;

        color: var(--color-text);
    }


    /* =========================================================
       DIVIDER
    ========================================================= */

    .whatsapp-type_content-card hr {
        position: relative;
        z-index: 2;

        height: 2px;

        margin: 20px 0 22px;

        border: none;

        background:
            linear-gradient(90deg,
                var(--color-primary),
                var(--color-secondary),
                transparent);
    }


    /* =========================================================
       CARD DESCRIPTION
    ========================================================= */

    .whatsapp-type_content-card>p {
        position: relative;
        z-index: 2;

        margin: 0 0 20px;

        font-size: 13px;
        font-weight: 500;
        line-height: 1.7;

        color: var(--color-text-secondary);
    }


    /* =========================================================
       LIST ITEMS
    ========================================================= */

    .type-list {
        position: relative;
        z-index: 2;

        display: flex;
        align-items: flex-start;

        gap: 8px;

        margin-bottom: 12px;

        font-size: 14px;
        font-weight: 500;
        line-height: 1.6;

        color: var(--color-text);
    }


    .type-list:last-child {
        margin-bottom: 0;
    }


    /* =========================================================
       CHECK ICON
    ========================================================= */

    .type-list i {
        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        width: 18px;
        height: 18px;

        margin-top: 2px;

        font-style: normal;

        border-radius: 50%;

        background: rgba(37, 211, 102, 0.12);
    }


    .type-list i::before {
        content: "✓";

        font-size: 11px;
        font-weight: 800;

        color: var(--color-primary-dark);
    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 768px) {

        .whatsappApi-type {
            padding: 56px 20px;
        }


        .whatsapp-type_content-heading {
            margin-bottom: 36px;
        }


        .whatsapp-type_content-heading h1 {
            font-size: 30px;
        }


        .whatsapp-type_content-heading p {
            font-size: 14px;
        }


        .whatsapp-type_content-card-container {
            flex-direction: column;
        }


        .whatsapp-type_content-card {
            padding: 28px 24px;
        }


        .whatsapp-type_content-card h2 {
            font-size: 24px;
        }
    }


    /* =========================================================
       SMALL MOBILE
    ========================================================= */

    @media (max-width: 480px) {

        .whatsappApi-type {
            padding: 48px 16px;
        }

        .whatsapp-type_content-heading h1 {
            font-size: 27px;
        }

        .whatsapp-type_content-card {
            padding: 24px 20px;
        }

        .whatsapp-type_content-card h2 {
            font-size: 22px;
        }

        .type-list {
            font-size: 13px;
        }
    }
</style>


<section class="whatsappApi-type">

    <div class="whatsapp-type_content">

        <!-- HEADING -->
        <div class="whatsapp-type_content-heading">

            <h1>
                Message types supported
            </h1>

            <p>
                Engage customers efficiently for every use case.
            </p>

        </div>


        <!-- CARDS -->
        <div class="whatsapp-type_content-card-container">


            <!-- TEMPLATE MESSAGES -->
            <div class="whatsapp-type_content-card">

                <h2>
                    Template messages
                </h2>

                <hr>

                <p>
                    Business-initiated messages that require
                    pre-approval by WhatsApp and are used for:
                </p>


                <span class="type-list">
                    <i></i>
                    Order confirmations and delivery updates
                </span>

                <span class="type-list">
                    <i></i>
                    Appointment reminders
                </span>

                <span class="type-list">
                    <i></i>
                    Authentication and OTP messages
                </span>

                <span class="type-list">
                    <i></i>
                    Promotional notifications (where permitted)
                </span>

            </div>


            <!-- FREE-FORM MESSAGES -->
            <div class="whatsapp-type_content-card">

                <h2>
                    Free-form messages
                </h2>

                <hr>

                <p>
                    Non-templated messages used for real-time
                    conversations when a customer initiates a chat,
                    such as through a chatbot or directly with a
                    support agent:
                </p>


                <span class="type-list">
                    <i></i>
                    Customer support inquiries
                </span>

                <span class="type-list">
                    <i></i>
                    Product questions
                </span>

                <span class="type-list">
                    <i></i>
                    Order follow-ups
                </span>

            </div>


        </div>

    </div>

</section>