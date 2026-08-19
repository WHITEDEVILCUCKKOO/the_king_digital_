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

    /* =========================================================
   WHATSAPP CTA CARD
    ========================================================= */

    .whatsapp-cta-card {
        width: 100%;
        padding: 0 0 22px;
        margin-top: 20px;
        box-sizing: border-box;
        font-family: 'Segoe UI', Roboto, Tahoma, Geneva, Verdana, sans-serif;
    }


    .whatsapp-cta-card_content {
        width: fit-content;
        min-height: 320px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 48px 30px;
        margin: 0 auto;
        box-sizing: border-box;
        border-radius: 44px;
        background:
            linear-gradient(110deg,
                #07916f 0%,
                #11886f 45%,
                #126f67 100%);
        text-align: center;
        overflow: hidden;
        position: relative;
    }


    /* =========================================================
   HEADING
    ========================================================= */

    .whatsapp-cta-card-heading {
        margin: 0;
        max-width: 720px;
        font-size: 40px;
        line-height: 1.08;
        font-weight: 800;
        letter-spacing: -1px;
        color: #ffffff;
    }


    /* =========================================================
   DESCRIPTION
    ========================================================= */

    .whatsapp-cta-card-para {
        max-width: 650px;
        margin: 20px 0 0;
        font-size: 18px;
        line-height: 1.5;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.88);
    }


    /* =========================================================
   BUTTON CONTAINER
    ========================================================= */

    .whatsapp-cta-card-cta-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 16px;
        margin-top: 32px;
    }


    /* =========================================================
   COMMON BUTTON
    ========================================================= */

    .whatsapp-cta-card-cta-btn .btn-one,
    .whatsapp-cta-card-cta-btn .btn-two {
        min-width: 155px;
        height: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0 28px;
        box-sizing: border-box;
        border-radius: 16px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        transition:
            transform 0.25s ease,
            background 0.25s ease,
            box-shadow 0.25s ease,
            color 0.25s ease;
    }


    /* =========================================================
   PRIMARY BUTTON
    ========================================================= */

    .whatsapp-cta-card-cta-btn .btn-one {
        background: #ffffff;

        color: #087d68;

        border: 1px solid #ffffff;

        box-shadow:
            0 8px 20px rgba(0, 0, 0, 0.08);
    }


    .whatsapp-cta-card-cta-btn .btn-one:hover {
        transform: translateY(-3px);

        box-shadow:
            0 12px 25px rgba(0, 0, 0, 0.15);

        background: #f5fffc;
    }


    /* =========================================================
   SECONDARY BUTTON
    ========================================================= */

    .whatsapp-cta-card-cta-btn .btn-two {
        background: transparent;

        color: #ffffff;

        border: 1px solid rgba(255, 255, 255, 0.35);
    }


    .whatsapp-cta-card-cta-btn .btn-two:hover {
        transform: translateY(-3px);

        background: rgba(255, 255, 255, 0.10);

        border-color: rgba(255, 255, 255, 0.65);
    }


    /* =========================================================
   TABLET
    ========================================================= */

    @media (max-width: 768px) {

        .whatsapp-cta-card_content {
            min-height: 300px;

            padding: 45px 25px;

            border-radius: 0 0 36px 36px;
        }


        .whatsapp-cta-card-heading {
            font-size: 34px;

            line-height: 1.1;
        }


        .whatsapp-cta-card-para {
            max-width: 580px;

            margin-top: 18px;

            font-size: 14px;
        }


        .whatsapp-cta-card-cta-btn {
            margin-top: 28px;
        }

    }


    /* =========================================================
   MOBILE
    ========================================================= */

    @media (max-width: 600px) {

        .whatsapp-cta-card_content {
            min-height: 330px;

            padding: 40px 20px;

            border-radius: 0 0 30px 30px;
        }


        .whatsapp-cta-card-heading {
            max-width: 420px;

            font-size: 29px;

            letter-spacing: -0.5px;
        }


        .whatsapp-cta-card-para {
            max-width: 380px;

            margin-top: 18px;

            font-size: 13px;

            line-height: 1.6;
        }


        .whatsapp-cta-card-cta-btn {
            width: 100%;

            flex-direction: column;

            gap: 12px;

            margin-top: 26px;
        }


        .whatsapp-cta-card-cta-btn-one,
        .whatsapp-cta-card-cta-btn-two {
            width: 180px;

            height: 48px;

            border-radius: 14px;
        }

    }


    /* =========================================================
   SMALL MOBILE
    ========================================================= */

    @media (max-width: 400px) {

        .whatsapp-cta-card-heading {
            font-size: 25px;
        }


        .whatsapp-cta-card_content {
            padding-left: 16px;
            padding-right: 16px;
        }

    }
</style>

<section class="whatsapp-cta-card">
    <div class="whatsapp-cta-card_content">
        <h1 class="whatsapp-cta-card-heading">
            Ready to Unleash the
            Power of WhatsApp Business?
        </h1>
        <p class="whatsapp-cta-card-para">
            Ready to Unleash the
            Power of WhatsApp Business?
        </p>
        <div class="whatsapp-cta-card-cta-btn">
            <a href="#" class="btn-one">Book Your Demo</a>
            <a href="contact.php" class="btn-two">Talk to Sales</a>
        </div>
    </div>
</section>