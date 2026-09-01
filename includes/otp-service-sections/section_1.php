<style>
    #kdOtpHeroBanner {
        --kd-otp-blue: #2563eb;
        --kd-otp-blue-dark: #1747c5;
        --kd-otp-blue-light: #eef5ff;

        --kd-otp-purple: #6d4aff;
        --kd-otp-purple-dark: #5534df;
        --kd-otp-purple-light: #f3f0ff;

        --kd-otp-navy: #17233b;
        --kd-otp-text: #687386;
        --kd-otp-light-text: #8d97a8;

        --kd-otp-border: #e5eaf1;
        --kd-otp-white: #ffffff;

        position: relative;

        width: 100%;
        min-height: 620px;

        padding: 70px 25px;

        overflow: hidden;

        background:
            radial-gradient(circle at 5% 15%,
                rgba(37, 99, 235, .075) 0,
                transparent 26%),
            radial-gradient(circle at 92% 78%,
                rgba(109, 74, 255, .08) 0,
                transparent 27%),
            linear-gradient(135deg,
                #ffffffab 0%,
                #f8faff88 52%,
                #ffffff4d 100%);

        /* font-family: Inter, Arial, Helvetica, sans-serif; */
    }


    #kdOtpHeroBanner .kd-otp-hero-orb {
        position: absolute;

        border-radius: 50%;

        pointer-events: none;
    }


    #kdOtpHeroBanner .kd-otp-hero-orb-one {
        width: 440px;
        height: 440px;

        top: -280px;
        right: -160px;

        border: 2px dashed rgba(37, 100, 235, 0.24);
         animation: decor-spin 35s linear infinite;
    }


     @keyframes decor-spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    #kdOtpHeroBanner .kd-otp-hero-orb-two {
        width: 320px;
        height: 320px;

        bottom: -200px;
        left: -130px;

        background: rgba(110, 74, 255, 0.2);
    }


    #kdOtpHeroBanner .kd-otp-hero-dots {
        position: absolute;

        width: 260px;
        height: 220px;

        top: 50%;
        right: 5%;

        transform: translateY(-50%);

        opacity: .65;

        background-image:
            radial-gradient(rgba(37, 100, 235, 0.27) 1px,
                transparent 1px);

        background-size: 17px 17px;

        mask-image:
            radial-gradient(ellipse,
                #000 20%,
                transparent 70%);

        -webkit-mask-image:
            radial-gradient(ellipse,
                #000 20%,
                transparent 70%);

        pointer-events: none;
    }

    #kdOtpHeroBanner .kd-otp-hero-container {
        position: relative;
        z-index: 2;

        width: 100%;
        max-width: 1280px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(0, 1.05fr) minmax(420px, .95fr);

        align-items: center;

        gap: 70px;
    }


    #kdOtpHeroBanner .kd-otp-hero-content {
        min-width: 0;
    }


    /* Badge */

    #kdOtpHeroBanner .kd-otp-hero-badge {
        display: inline-flex;
        align-items: center;

        gap: 9px;

        padding: 8px 14px;

        margin-bottom: 19px;

        border: 1px solid rgba(37, 99, 235, .16);

        border-radius: 50px;

        color: var(--kd-otp-blue);

        background: var(--kd-otp-blue-light);

        font-size: 11px;
        font-weight: 800;

        letter-spacing: .6px;

        text-transform: uppercase;
    }


    #kdOtpHeroBanner .kd-otp-hero-badge-dot {
        width: 7px;
        height: 7px;

        flex: 0 0 7px;

        border-radius: 50%;

        background: var(--kd-otp-blue);

        animation: kdOtpDotBlink 1.5s ease-in-out infinite;
    }


    #kdOtpHeroBanner .kd-otp-hero-title {
        max-width: 680px;

        margin: 0;

        color: var(--kd-otp-navy);

        font-size: 44px;

        line-height: 1.12;

        font-weight: 800;

        letter-spacing: -2px;
    }


    #kdOtpHeroBanner .kd-otp-title-line-one,
    #kdOtpHeroBanner .kd-otp-title-line-two {
        display: block;
    }


    #kdOtpHeroBanner .kd-otp-title-line-one {
        color: var(--kd-otp-navy);
    }


    #kdOtpHeroBanner .kd-otp-title-line-two {
        margin-top: 2px;

        color: var(--kd-otp-blue);
    }


    #kdOtpHeroBanner .kd-otp-hero-description {
        max-width: 610px;

        margin: 22px 0 0;

        color: var(--kd-otp-text);

        font-size: 15px;

        line-height: 1.8;
    }


    #kdOtpHeroBanner .kd-otp-hero-features {
        display: grid;

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        gap: 14px;

        margin-top: 29px;
    }


    #kdOtpHeroBanner .kd-otp-hero-feature {
        display: flex;
        align-items: flex-start;

        gap: 9px;
    }


    #kdOtpHeroBanner .kd-otp-feature-icon {
        width: 25px;
        height: 25px;

        flex: 0 0 25px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-top: 1px;

        border-radius: 8px;

        color: #ffffff;

        background:
            linear-gradient(135deg,
                var(--kd-otp-blue),
                var(--kd-otp-purple));

        font-size: 11px;
        font-weight: 800;

        box-shadow:
            0 8px 18px rgba(37, 99, 235, .14);
    }


    #kdOtpHeroBanner .kd-otp-feature-content strong {
        display: block;

        margin-bottom: 3px;

        color: #344158;

        font-size: 12px;

        line-height: 1.4;

        font-weight: 700;
    }


    #kdOtpHeroBanner .kd-otp-feature-content span {
        display: block;

        color: var(--kd-otp-light-text);

        font-size: 9px;

        line-height: 1.5;
    }


    #kdOtpHeroBanner .kd-otp-hero-actions {
        display: flex;
        align-items: center;
        flex-wrap: wrap;

        gap: 11px;

        margin-top: 30px;
    }


    #kdOtpHeroBanner .kd-otp-primary-btn,
    #kdOtpHeroBanner .kd-otp-secondary-btn {
        min-height: 46px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 10px;

        padding: 10px 18px;

        border-radius: 9px;

        text-decoration: none !important;

        font-size: 12px;
        font-weight: 700;

        transition:
            background .25s ease,
            border-color .25s ease,
            box-shadow .25s ease;
    }


    /* Primary Button */

    #kdOtpHeroBanner .kd-otp-primary-btn {
        color: #ffffff !important;

        background:
            linear-gradient(135deg,
                #2563eb,
                #5b45e8);

        box-shadow:
            0 12px 26px rgba(37, 99, 235, .20);
    }


    #kdOtpHeroBanner .kd-otp-primary-btn:hover {
        color: #ffffff !important;

        background:
            linear-gradient(135deg,
                #1747c5,
                #4d36d8);

        box-shadow:
            0 15px 30px rgba(37, 99, 235, .25);
    }


    #kdOtpHeroBanner .kd-otp-primary-btn span {
        font-size: 18px;
        line-height: 1;
    }


    /* Secondary Button */

    #kdOtpHeroBanner .kd-otp-secondary-btn {
        border: 1px solid #dfe5ef;

        color: var(--kd-otp-navy) !important;

        background: #ffffff;
    }


    #kdOtpHeroBanner .kd-otp-secondary-btn:hover {
        border-color: rgba(37, 99, 235, .25);

        color: var(--kd-otp-blue) !important;

        background: var(--kd-otp-blue-light);
    }


    #kdOtpHeroBanner .kd-otp-hero-visual {
        position: relative;

        min-height: 450px;

        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* Decorative Rings */

    #kdOtpHeroBanner .kd-otp-visual-ring {
        position: absolute;

        border-radius: 50%;

        pointer-events: none;
    }


    #kdOtpHeroBanner .kd-otp-ring-one {
        width: 390px;
        height: 390px;

        border:
            1px solid rgba(37, 99, 235, .12);
    }


    #kdOtpHeroBanner .kd-otp-ring-two {
        width: 320px;
        height: 320px;

        border:
            1px dashed rgba(109, 74, 255, .14);
    }


    #kdOtpHeroBanner .kd-otp-main-card {
        position: relative;
        z-index: 2;

        width: 325px;

        padding: 21px 22px 18px;

        border:
            1px solid rgba(37, 99, 235, .12);

        border-radius: 23px;

        background:
            linear-gradient(145deg,
                rgba(255, 255, 255, .98),
                rgba(249, 251, 255, .98));

        box-shadow:
            0 25px 60px rgba(23, 35, 59, .11),
            0 5px 16px rgba(37, 99, 235, .04);
    }


    /* Card Header */

    #kdOtpHeroBanner .kd-otp-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }


    #kdOtpHeroBanner .kd-otp-card-brand {
        display: flex;
        align-items: center;

        gap: 8px;

        color: #667287;

        font-size: 9px;
        font-weight: 700;
    }


    #kdOtpHeroBanner .kd-otp-card-brand-icon {
        width: 32px;
        height: 32px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        color: #ffffff;

        background:
            linear-gradient(135deg,
                var(--kd-otp-blue),
                var(--kd-otp-purple));

        font-size: 9px;
        font-weight: 800;
    }


    #kdOtpHeroBanner .kd-otp-card-status {
        display: inline-flex;
        align-items: center;

        gap: 5px;

        color: #708096;

        font-size: 8px;
        font-weight: 700;
    }


    #kdOtpHeroBanner .kd-otp-card-status span {
        width: 7px;
        height: 7px;

        border-radius: 50%;

        background: #25ae78;
    }


    #kdOtpHeroBanner .kd-otp-shield-wrap {
        display: flex;
        justify-content: center;

        margin-top: 22px;
    }


    #kdOtpHeroBanner .kd-otp-shield {
        width: 66px;
        height: 66px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 20px;

        background:
            linear-gradient(135deg,
                #2563eb,
                #6848ee);

        box-shadow:
            0 16px 30px rgba(37, 99, 235, .18);
    }


    #kdOtpHeroBanner .kd-otp-shield svg {
        width: 32px;
        height: 32px;
    }


    #kdOtpHeroBanner .kd-otp-shield svg path:first-child {
        fill: rgba(255, 255, 255, .18);

        stroke: #ffffff;

        stroke-width: 1.4;
    }


    #kdOtpHeroBanner .kd-otp-check-path {
        fill: none !important;

        stroke: #ffffff;

        stroke-width: 2.1;

        stroke-linecap: round;

        stroke-linejoin: round;
    }


    #kdOtpHeroBanner .kd-otp-main-card h3 {
        margin: 17px 0 6px;

        text-align: center;

        color: var(--kd-otp-navy);

        font-size: 19px;
        font-weight: 800;
    }


    #kdOtpHeroBanner .kd-otp-main-card p {
        max-width: 245px;

        margin: 0 auto;

        text-align: center;

        color: #8994a5;

        font-size: 10px;

        line-height: 1.6;
    }


    #kdOtpHeroBanner .kd-otp-inputs {
        display: grid;

        grid-template-columns:
            repeat(4, 1fr);

        gap: 8px;

        margin-top: 20px;
    }


    #kdOtpHeroBanner .kd-otp-input {
        height: 43px;

        display: flex;
        align-items: center;
        justify-content: center;

        border:
            1px solid #e2e7ef;

        border-radius: 9px;

        color: var(--kd-otp-navy);

        background: #ffffff;

        font-size: 16px;
        font-weight: 800;
    }


    #kdOtpHeroBanner .kd-otp-input.active {
        border-color:
            rgba(37, 99, 235, .35);

        color: var(--kd-otp-blue);

        background: var(--kd-otp-blue-light);
    }


    #kdOtpHeroBanner .kd-otp-verified-bar {
        min-height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        gap: 7px;

        margin-top: 13px;

        border-radius: 9px;

        color: #ffffff;

        background:
            linear-gradient(135deg,
                #2563eb,
                #6045e8);

        font-size: 10px;
        font-weight: 700;
    }


    #kdOtpHeroBanner .kd-otp-verified-icon {
        width: 18px;
        height: 18px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background:
            rgba(255, 255, 255, .18);

        font-size: 9px;
    }


    #kdOtpHeroBanner .kd-otp-security-note {
        display: flex;
        align-items: center;
        justify-content: center;

        gap: 5px;

        margin-top: 12px;

        color: #9aa4b2;

        font-size: 8px;
    }


    #kdOtpHeroBanner .kd-otp-security-lock {
        color: var(--kd-otp-purple);

        font-size: 7px;
    }


    #kdOtpHeroBanner .kd-otp-float-card {
        position: absolute;
        z-index: 3;

        display: flex;
        align-items: center;

        gap: 9px;

        padding: 11px 13px;

        border:
            1px solid rgba(226, 231, 239, .9);

        border-radius: 12px;

        background:
            rgba(255, 255, 255, .96);

        box-shadow:
            0 16px 35px rgba(23, 35, 59, .09);
    }


    #kdOtpHeroBanner .kd-otp-float-card-one {
        top: 40px;
        left: -5px;
    }


    #kdOtpHeroBanner .kd-otp-float-card-two {
        right: -5px;
        bottom: 40px;
    }


    #kdOtpHeroBanner .kd-otp-float-icon {
        width: 31px;
        height: 31px;

        flex: 0 0 31px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        color: #ffffff;

        font-size: 12px;
        font-weight: 800;
    }


    #kdOtpHeroBanner .kd-otp-float-icon-blue {
        background:
            linear-gradient(135deg,
                #2563eb,
                #3c7cf1);
    }


    #kdOtpHeroBanner .kd-otp-float-icon-purple {
        background:
            linear-gradient(135deg,
                #7654f7,
                #5d3ee3);
    }


    #kdOtpHeroBanner .kd-otp-float-card strong {
        display: block;

        margin-bottom: 2px;

        color: #3c485b;

        font-size: 10px;
        font-weight: 700;
    }


    #kdOtpHeroBanner .kd-otp-float-card span {
        display: block;

        color: #9aa4b2;

        font-size: 8px;
    }


    @keyframes kdOtpDotBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .35;
            transform: scale(.72);
        }

    }



    @media (max-width: 1100px) {

        #kdOtpHeroBanner {
            padding: 60px 22px;
        }

        #kdOtpHeroBanner .kd-otp-hero-container {
            grid-template-columns:
                minmax(0, 1fr) minmax(360px, .85fr);

            gap: 40px;
        }

        #kdOtpHeroBanner .kd-otp-hero-features {
            grid-template-columns: 1fr;

            gap: 11px;
        }

    }


    @media (max-width: 767px) {

        #kdOtpHeroBanner {
            min-height: auto;

            padding: 50px 16px 42px;
        }

        #kdOtpHeroBanner .kd-otp-hero-container {
            grid-template-columns: 1fr;

            gap: 35px;
        }

        #kdOtpHeroBanner .kd-otp-hero-content {
            text-align: center;
        }

        #kdOtpHeroBanner .kd-otp-hero-badge {
            margin-left: auto;
            margin-right: auto;
        }

        #kdOtpHeroBanner .kd-otp-hero-title {
            margin-left: auto;
            margin-right: auto;

            font-size: 38px;
        }

        #kdOtpHeroBanner .kd-otp-hero-description {
            margin-left: auto;
            margin-right: auto;

            font-size: 13px;
        }

        #kdOtpHeroBanner .kd-otp-hero-features {
            max-width: 340px;

            margin-left: auto;
            margin-right: auto;

            text-align: left;
        }

        #kdOtpHeroBanner .kd-otp-hero-actions {
            justify-content: center;
        }

        #kdOtpHeroBanner .kd-otp-hero-visual {
            min-height: 430px;
        }

        #kdOtpHeroBanner .kd-otp-float-card-one {
            left: 5px;
        }

        #kdOtpHeroBanner .kd-otp-float-card-two {
            right: 5px;
        }

    }


    @media (max-width: 480px) {

        #kdOtpHeroBanner {
            padding: 43px 12px 38px;
        }

        #kdOtpHeroBanner .kd-otp-hero-badge {
            padding: 7px 11px;

            font-size: 9px;
        }

        /* HEADING REMAINS IN 2 ROWS */
        #kdOtpHeroBanner .kd-otp-hero-title {
            font-size: 30px;

            line-height: 1.18;

            letter-spacing: -1px;
        }

        #kdOtpHeroBanner .kd-otp-title-line-one,
        #kdOtpHeroBanner .kd-otp-title-line-two {
            display: block;
        }

        #kdOtpHeroBanner .kd-otp-hero-description {
            margin-top: 17px;

            font-size: 12px;

            line-height: 1.75;
        }

        #kdOtpHeroBanner .kd-otp-hero-features {
            margin-top: 24px;
        }

        #kdOtpHeroBanner .kd-otp-feature-content strong {
            font-size: 11px;
        }

        #kdOtpHeroBanner .kd-otp-feature-content span {
            font-size: 9px;
        }

        #kdOtpHeroBanner .kd-otp-hero-actions {
            display: grid;

            grid-template-columns: 1fr;

            max-width: 290px;

            margin-left: auto;
            margin-right: auto;
        }

        #kdOtpHeroBanner .kd-otp-primary-btn,
        #kdOtpHeroBanner .kd-otp-secondary-btn {
            width: 100%;
        }

        #kdOtpHeroBanner .kd-otp-hero-visual {
            min-height: 385px;
        }

        #kdOtpHeroBanner .kd-otp-main-card {
            width: min(280px, 82vw);

            padding: 19px 17px 17px;
        }

        #kdOtpHeroBanner .kd-otp-ring-one {
            width: 330px;
            height: 330px;
        }

        #kdOtpHeroBanner .kd-otp-ring-two {
            width: 270px;
            height: 270px;
        }

        #kdOtpHeroBanner .kd-otp-float-card {
            padding: 8px 9px;

            gap: 7px;
        }

        #kdOtpHeroBanner .kd-otp-float-card-one {
            top: 14px;
            left: 0;
        }

        #kdOtpHeroBanner .kd-otp-float-card-two {
            right: 0;
            bottom: 14px;
        }

        #kdOtpHeroBanner .kd-otp-float-icon {
            width: 27px;
            height: 27px;

            flex-basis: 27px;

            font-size: 10px;
        }

        #kdOtpHeroBanner .kd-otp-float-card strong {
            font-size: 8px;
        }

        #kdOtpHeroBanner .kd-otp-float-card span {
            font-size: 7px;
        }

    }



    /* up → down → up  animation */
    .up-animation {
        animation: moveUp 2s ease-in-out infinite alternate;
    }

    @keyframes moveUp {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }



    /* down → up → down  animation */
    .down-up-animation {
        animation: downUp 3s ease-in-out infinite alternate;
    }

    @keyframes downUp {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(20px);
        }

        100% {
            transform: translateY(0);
        }
    }



    /* right → left → right  animation */
    .right-left-animation {
        animation: rightLeft 3s ease-in-out infinite;
    }

    @keyframes rightLeft {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(-25px);
        }
    }


    /* left → right → left animation */
    .left-right-animation {
        animation: leftRight 3s ease-in-out infinite;
    }

    @keyframes leftRight {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(25px);
        }
    }


    .jisd9998{
        svg{
            width: 15px;
            fill: white;
        }
    }
    .jisd99982{
        svg{
            width: 20px;
            fill: white;
        }
    }
</style>


<section class="kd-otp-hero-banner" id="kdOtpHeroBanner">

    <!-- Background Elements -->
    <div class="kd-otp-hero-orb kd-otp-hero-orb-one"></div>
    <div class="kd-otp-hero-orb kd-otp-hero-orb-two"></div>
    <div class="kd-otp-hero-dots"></div>

    <div class="kd-otp-hero-container">

        <!-- =====================================================
         LEFT CONTENT
    ====================================================== -->
        <div class="kd-otp-hero-content">

            <!-- Badge -->
            <div class="kd-otp-hero-badge">
                <span class="kd-otp-hero-badge-dot"></span>
                OTP SMS SERVICE
            </div>


            <!-- Heading - EXACTLY 2 ROWS -->
            <h1 class="kd-otp-hero-title">
                <span class="kd-otp-title-line-one">
                    Secure Verification with
                </span>

                <span class="kd-otp-title-line-two ">
                    Instant OTP SMS
                </span>
            </h1>


            <!-- Description -->
            <p class="kd-otp-hero-description">
                Deliver secure, fast and reliable one-time passwords directly to
                your users. Protect logins, transactions and account verification
                with powerful OTP SMS solutions built for modern businesses.
            </p>


            <!-- Security Features -->
            <div class="kd-otp-hero-features">

                <div class="kd-otp-hero-feature">

                    <div class="kd-otp-feature-icon">
                        ✓
                    </div>

                    <div class="kd-otp-feature-content">
                        <strong>Secure Authentication</strong>
                        <span>Protect every user verification</span>
                    </div>

                </div>


                <div class="kd-otp-hero-feature">

                    <div class="kd-otp-feature-icon">
                    <span class="jisd9998"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M434.8 54.1C446.7 62.7 451.1 78.3 445.7 91.9L367.3 288L512 288C525.5 288 537.5 296.4 542.1 309.1C546.7 321.8 542.8 336 532.5 344.6L244.5 584.6C233.2 594 217.1 594.5 205.2 585.9C193.3 577.3 188.9 561.7 194.3 548.1L272.7 352L128 352C114.5 352 102.5 343.6 97.9 330.9C93.3 318.2 97.2 304 107.5 295.4L395.5 55.4C406.8 46 422.9 45.5 434.8 54.1z"/></svg></span>
                    </div>

                    <div class="kd-otp-feature-content">
                        <strong>Instant Delivery</strong>
                        <span>Send OTPs within seconds</span>
                    </div>

                </div>


                <div class="kd-otp-hero-feature">

                    <div class="kd-otp-feature-icon">
                        ✓
                    </div>

                    <div class="kd-otp-feature-content">
                        <strong>Reliable Platform</strong>
                        <span>Built for seamless communication</span>
                    </div>

                </div>

            </div>


            <!-- Buttons -->
            <div class="kd-otp-hero-actions">

                <a href="#enquiry" class="kd-otp-primary-btn">
                    Get Started
                    <span>→</span>
                </a>

                <a href="#otp-service-details" class="kd-otp-secondary-btn">
                    Explore OTP SMS
                </a>

            </div>

        </div>



        <!-- =====================================================
         RIGHT OTP VISUAL
    ====================================================== -->
        <div class="kd-otp-hero-visual">

            <!-- Decorative Ring -->
            <div class="kd-otp-visual-ring kd-otp-ring-one"></div>
            <div class="kd-otp-visual-ring kd-otp-ring-two"></div>


            <!-- Main Verification Card -->
            <div class="kd-otp-main-card">

                <!-- Card Top -->
                <div class="kd-otp-card-header">

                    <div class="kd-otp-card-brand">
                        <div class="kd-otp-card-brand-icon">
                            KD
                        </div>

                        <span>Secure Access</span>
                    </div>


                    <div class="kd-otp-card-status">
                        <span></span>
                        Protected
                    </div>

                </div>


                <!-- Shield -->
                <div class="kd-otp-shield-wrap">

                    <div class="kd-otp-shield">

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2L20 5.5V11C20 16.2 16.6 20.4 12 22C7.4 20.4 4 16.2 4 11V5.5L12 2Z"></path>
                            <path class="kd-otp-check-path" d="M8.2 11.8L10.7 14.3L15.9 9"></path>
                        </svg>

                    </div>

                </div>


                <!-- OTP Heading -->
                <h3>Verify Your Identity</h3>

                <p>
                    Enter the secure verification code sent to your mobile number.
                </p>


                <!-- OTP Code Boxes -->
                <div class="kd-otp-inputs">

                    <div class="kd-otp-input active randomNumber">0</div>
                    <div class="kd-otp-input active randomNumber">0</div>
                    <div class="kd-otp-input active randomNumber">0</div>
                    <div class="kd-otp-input active randomNumber">0</div>

                </div>


                <!-- Verification Bar -->
                <div class="kd-otp-verified-bar">

                    <div class="kd-otp-verified-icon">
                        ✓
                    </div>

                    <span>OTP Verified Successfully</span>

                </div>


                <!-- Security Note -->
                <div class="kd-otp-security-note">

                    <span class="kd-otp-security-lock">●</span>

                    End-to-end secure verification

                </div>

            </div>


            <!-- Floating Card 1 -->
            <div class="kd-otp-float-card kd-otp-float-card-one up-animation">

                <div class="kd-otp-float-icon kd-otp-float-icon-blue">
                    <span class="jisd9998"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M434.8 54.1C446.7 62.7 451.1 78.3 445.7 91.9L367.3 288L512 288C525.5 288 537.5 296.4 542.1 309.1C546.7 321.8 542.8 336 532.5 344.6L244.5 584.6C233.2 594 217.1 594.5 205.2 585.9C193.3 577.3 188.9 561.7 194.3 548.1L272.7 352L128 352C114.5 352 102.5 343.6 97.9 330.9C93.3 318.2 97.2 304 107.5 295.4L395.5 55.4C406.8 46 422.9 45.5 434.8 54.1z"/></svg></span>
                </div>

                <div>
                    <strong>Instant OTP</strong>
                    <span>Delivered in seconds</span>
                </div>

            </div>


            <!-- Floating Card 2 -->
            <div class="kd-otp-float-card kd-otp-float-card-two down-up-animation ">

                <div class="kd-otp-float-icon kd-otp-float-icon-purple">
                    ✓
                </div>

                <div>
                    <strong>Secure & Reliable</strong>
                    <span>Trusted verification</span>
                </div>

            </div>

        </div>

    </div>

</section>