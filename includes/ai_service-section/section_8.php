<!-- =========================================================
 KING DIGITAL — AI VIDEO SERVICE
 LEFT IMAGE + RIGHT CONTENT
 DARK NAVY + ORANGE THEME
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


<style>
    /* =========================================================
 RESET
========================================================= */

    #kd-ai-creative-section,
    #kd-ai-creative-section * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    #kd-ai-creative-section {

        --navy: #060F3E;
        --navy2: #0B2148;
        --navy3: #10355E;

        --orange: #F47B20;
        --orange2: #FF9145;
        --orange3: #FFAD72;

        --text: #626C7B;
        --border: #E2E6EB;

        position: relative;

        width: 100%;

        overflow: hidden;

        padding: 58px 50px 60px;

         

        background:
            radial-gradient(circle at 4% 12%,
                rgba(244, 123, 32, .065),
                transparent 24%),
            radial-gradient(circle at 95% 88%,
                rgba(6, 15, 62, .05),
                transparent 25%),
            linear-gradient(135deg,
                #FFFFFF 0%,
                #FAFAFB 50%,
                #F6F7F9 100%);
    }


    /* =========================================================
 BACKGROUND DOTS
========================================================= */

    #kd-ai-creative-section .kdacs-bg-dots {

        position: absolute;

        width: 115px;
        height: 115px;

        right: 28px;
        top: 30px;

        opacity: .28;

        background-image:
            radial-gradient(rgba(244, 123, 32, .52) 1.15px,
                transparent 1.15px);

        background-size: 16px 16px;

        pointer-events: none;

        animation:
            kdacsDotsMove 7s ease-in-out infinite;
    }


    @keyframes kdacsDotsMove {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(13px);
        }

    }


    /* =========================================================
 BACKGROUND CIRCLE
========================================================= */

    #kd-ai-creative-section .kdacs-bg-circle {

        position: absolute;

        width: 270px;
        height: 270px;

        left: -170px;
        bottom: -150px;

        border-radius: 50%;

        border:
            1px solid rgba(244, 123, 32, .10);

        box-shadow:
            0 0 0 42px rgba(244, 123, 32, .020),
            0 0 0 84px rgba(6, 15, 62, .014);

        pointer-events: none;

        animation:
            kdacsCircleMove 9s ease-in-out infinite;
    }


    @keyframes kdacsCircleMove {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(20px, -17px);
        }

    }


    /* =========================================================
 CONTAINER
========================================================= */

    #kd-ai-creative-section .kdacs-container {

        position: relative;
        z-index: 5;

        width: 100%;
        max-width: 1380px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(480px, 1.08fr) minmax(380px, .92fr);

        gap: 72px;

        align-items: center;
    }


    /* =========================================================
 LEFT VISUAL
========================================================= */

    #kd-ai-creative-section .kdacs-visual {

        position: relative;

        width: 100%;
        max-width: 650px;

        min-height: 455px;

        display: flex;

        align-items: center;
        justify-content: center;
    }


    /* =========================================================
 VISUAL GLOW
========================================================= */

    #kd-ai-creative-section .kdacs-visual::before {

        content: "";

        position: absolute;

        width: 430px;
        height: 430px;

        border-radius: 50%;

        background:
            radial-gradient(circle,
                rgba(244, 123, 32, .12) 0%,
                rgba(244, 123, 32, .055) 30%,
                rgba(6, 15, 62, .035) 52%,
                transparent 70%);

        animation:
            kdacsGlow 7s ease-in-out infinite;
    }


    @keyframes kdacsGlow {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.06);
        }

    }


    /* =========================================================
 IMAGE FRAME
========================================================= */

    #kd-ai-creative-section .kdacs-image-frame {

        position: relative;
        z-index: 3;

        width: 550px;
        max-width: 91%;

        height: 390px;

        padding: 8px;

        border-radius: 23px;

        background: #FFFFFF;

        border:
            1px solid #E0E4E9;

        box-shadow:
            0 28px 65px rgba(6, 15, 62, .15);

        transition:
            transform .4s ease,
            box-shadow .4s ease;
    }


    #kd-ai-creative-section .kdacs-image-frame:hover {

        transform: translateY(-4px);

        box-shadow:
            0 34px 75px rgba(6, 15, 62, .19);
    }


    /* =========================================================
 IMAGE
========================================================= */

    #kd-ai-creative-section .kdacs-image {

        position: relative;

        width: 100%;
        height: 100%;

        overflow: hidden;

        border-radius: 16px;

        background: var(--navy);
    }


    #kd-ai-creative-section .kdacs-image img {

        display: block;

        width: 100%;
        height: 100%;

        object-fit: cover;
        object-position: center;

        transition:
            transform .8s cubic-bezier(.2, .7, .2, 1);
    }


    #kd-ai-creative-section .kdacs-image-frame:hover .kdacs-image img {

        transform: scale(1.045);
    }


    /* =========================================================
 IMAGE OVERLAY
========================================================= */

    #kd-ai-creative-section .kdacs-image::after {

        content: "";

        position: absolute;
        inset: 0;

        pointer-events: none;

        background:
            linear-gradient(180deg,
                rgba(6, 15, 62, .02) 20%,
                rgba(6, 15, 62, .08) 52%,
                rgba(6, 15, 62, .82) 100%);
    }


    /* =========================================================
 IMAGE BADGE
========================================================= */

    #kd-ai-creative-section .kdacs-image-badge {

        position: absolute;
        z-index: 5;

        left: 22px;
        top: 21px;

        display: flex;

        align-items: center;

        gap: 8px;

        padding: 9px 12px;

        border-radius: 8px;

        color: #FFFFFF;

        font-size: 9px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .055em;

        background:
            rgba(6, 15, 62, .76);

        border:
            1px solid rgba(255, 255, 255, .16);

        backdrop-filter: blur(10px);

        -webkit-backdrop-filter: blur(10px);

        box-shadow:
            0 8px 20px rgba(6, 15, 62, .14);
    }


    /* LIVE DOT */

    #kd-ai-creative-section .kdacs-image-live {

        width: 7px;
        height: 7px;

        flex: 0 0 7px;

        border-radius: 50%;

        background: var(--orange2);

        box-shadow:
            0 0 0 4px rgba(244, 123, 32, .16);

        animation:
            kdacsBlink 1.5s ease-in-out infinite;
    }


    @keyframes kdacsBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .45;
            transform: scale(.72);
        }

    }


    /* =========================================================
 IMAGE BOTTOM COPY
========================================================= */

    #kd-ai-creative-section .kdacs-image-copy {

        position: absolute;
        z-index: 5;

        left: 24px;
        right: 24px;
        bottom: 21px;
    }


    #kd-ai-creative-section .kdacs-image-small {

        margin-bottom: 6px;

        color: #FFAE77;

        font-size: 9px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .11em;

        text-transform: uppercase;
    }


    #kd-ai-creative-section .kdacs-image-title {

        max-width: 410px;

        color: #FFFFFF;

        font-size: 19px;
        line-height: 1.38;

        font-weight: 800;
    }


    /* =========================================================
 FLOATING FORMAT CARD
========================================================= */

    #kd-ai-creative-section .kdacs-format {

        position: absolute;
        z-index: 7;

        right: -4px;
        top: 44px;

        padding: 11px 12px;

        border-radius: 12px;

        background:
            rgba(255, 255, 255, .97);

        border:
            1px solid #E1E5EA;

        box-shadow:
            0 15px 35px rgba(6, 15, 62, .13);

        animation:
            kdacsFloatOne 4.5s ease-in-out infinite;
    }


    #kd-ai-creative-section .kdacs-format-label {

        margin-bottom: 8px;

        color: #70798C;

        font-size: 9px;

        font-weight: 800;
    }


    #kd-ai-creative-section .kdacs-format-options {

        display: flex;

        gap: 5px;
    }


    #kd-ai-creative-section .kdacs-format-options span {

        height: 28px;

        padding: 0 8px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 6px;

        color: #747D90;

        font-size: 9px;

        font-weight: 800;

        background: #F3F4F6;

        border:
            1px solid #E5E7EB;
    }


    #kd-ai-creative-section .kdacs-format-options .kdacs-active {

        color: #FFFFFF;

        border-color: var(--orange);

        background:
            linear-gradient(135deg,
                var(--navy2) 0%,
                var(--orange) 100%);

        box-shadow:
            0 5px 12px rgba(244, 123, 32, .18);
    }


    @keyframes kdacsFloatOne {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-7px);
        }

    }


    /* =========================================================
 FLOATING READY CARD
========================================================= */

    #kd-ai-creative-section .kdacs-ready {

        position: absolute;
        z-index: 7;

        left: -4px;
        bottom: 38px;

        min-width: 180px;

        padding: 11px 12px;

        display: flex;

        align-items: center;

        gap: 10px;

        border-radius: 12px;

        background:
            rgba(255, 255, 255, .97);

        border:
            1px solid #E1E5EA;

        box-shadow:
            0 15px 35px rgba(6, 15, 62, .13);

        animation:
            kdacsFloatTwo 4.8s ease-in-out infinite;
    }


    /* READY ICON */

    #kd-ai-creative-section .kdacs-ready-icon {

        width: 36px;
        height: 36px;

        flex: 0 0 36px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 9px;

        color: #FFFFFF;

        font-size: 12px;

        background:
            linear-gradient(135deg,
                var(--navy2),
                var(--orange));

        box-shadow:
            0 7px 15px rgba(244, 123, 32, .16);
    }


    #kd-ai-creative-section .kdacs-ready strong {

        display: block;

        margin-bottom: 2px;

        color: var(--navy);

        font-size: 11px;

        font-weight: 800;
    }


    #kd-ai-creative-section .kdacs-ready span {

        display: block;

        color: #7B8497;

        font-size: 9px;

        font-weight: 600;
    }


    @keyframes kdacsFloatTwo {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(7px);
        }

    }


    /* =========================================================
 RIGHT CONTENT
========================================================= */

    #kd-ai-creative-section .kdacs-content {

        width: 100%;
        max-width: 570px;

        overflow: visible !important;
    }


    /* =========================================================
 EYEBROW
========================================================= */

    #kd-ai-creative-section .kdacs-eyebrow {

        display: inline-flex;

        align-items: center;

        gap: 9px;

        margin-bottom: 13px;

        color: var(--orange);

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .11em;

        text-transform: uppercase;
    }


    #kd-ai-creative-section .kdacs-eyebrow-dot {

        position: relative;

        width: 8px;
        height: 8px;

        flex: 0 0 8px;

        border-radius: 50%;

        background: var(--orange);

        box-shadow:
            0 0 0 4px rgba(244, 123, 32, .10);

        animation:
            kdacsEyebrowBlink 1.5s ease-in-out infinite;
    }


    #kd-ai-creative-section .kdacs-eyebrow-dot::after {

        content: "";

        position: absolute;

        inset: -5px;

        border-radius: 50%;

        border:
            1px solid rgba(244, 123, 32, .25);

        animation:
            kdacsEyebrowRing 1.5s ease-out infinite;
    }


    @keyframes kdacsEyebrowBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .45;
            transform: scale(.72);
        }

    }


    @keyframes kdacsEyebrowRing {

        0% {
            opacity: .7;
            transform: scale(.6);
        }

        100% {
            opacity: 0;
            transform: scale(1.45);
        }

    }


    /* =========================================================
 HEADING — CLIPPING FIXED
========================================================= */

    #kd-ai-creative-section .kdacs-title {

        display: block;

        margin: 0;

        padding:
            3px 0 8px;

        overflow: visible !important;

        color: var(--navy);

        font-size: 44px;
        line-height: 1.18;

        font-weight: 800;

        letter-spacing: -1.8px;
    }


    #kd-ai-creative-section .kdacs-title-line {

        display: block;

        padding:
            1px 2px 4px 0;

        line-height: 1.20;

        overflow: visible !important;
    }


    /* ORANGE GRADIENT */

    #kd-ai-creative-section .kdacs-title-gradient {

        padding:
            2px 2px 6px 0;

        line-height: 1.22;

        background:
            linear-gradient(90deg,
                #E86513 0%,
                #F47B20 52%,
                #FF9145 100%);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;

        color: transparent;

        overflow: visible !important;
    }


    /* =========================================================
 DESCRIPTION
========================================================= */

    #kd-ai-creative-section .kdacs-description {

        max-width: 550px;

        margin: 14px 0 0;

        color: var(--text);

        font-size: 14px;
        line-height: 1.72;

        font-weight: 500;
    }


    /* =========================================================
 FEATURES
========================================================= */

    #kd-ai-creative-section .kdacs-features {

        margin-top: 21px;

        border-top:
            1px solid #E3E7EB;
    }


    #kd-ai-creative-section .kdacs-feature {

        position: relative;

        min-height: 72px;

        display: grid;

        grid-template-columns:
            38px minmax(0, 1fr);

        gap: 13px;

        align-items: center;

        border-bottom:
            1px solid #E3E7EB;

        transition:
            padding-left .3s ease;
    }


    #kd-ai-creative-section .kdacs-feature:hover {

        padding-left: 5px;
    }


    /* =========================================================
 FEATURE NUMBER
========================================================= */

    #kd-ai-creative-section .kdacs-feature-number {

        width: 34px;
        height: 34px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        color: var(--orange);

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        background: #FFF0E6;

        border:
            1px solid #FFDCC5;

        transition:
            transform .3s ease,
            background .3s ease,
            color .3s ease,
            box-shadow .3s ease;
    }


    #kd-ai-creative-section .kdacs-feature:hover .kdacs-feature-number {

        transform: scale(1.08);

        color: #FFFFFF;

        background:
            linear-gradient(135deg,
                var(--navy2),
                var(--orange));

        box-shadow:
            0 7px 15px rgba(244, 123, 32, .16);
    }


    /* =========================================================
 FEATURE COPY
========================================================= */

    #kd-ai-creative-section .kdacs-feature-copy strong {

        display: block;

        margin-bottom: 3px;

        color: var(--navy);

        font-size: 15px;
        line-height: 1.4;

        font-weight: 800;
    }


    #kd-ai-creative-section .kdacs-feature-copy span {

        display: block;

        max-width: 470px;

        color: #687286;

        font-size: 12.5px;
        line-height: 1.55;

        font-weight: 500;
    }


    /* =========================================================
 PLATFORM ROW
========================================================= */

    #kd-ai-creative-section .kdacs-platforms {

        margin-top: 19px;

        display: flex;

        align-items: center;

        gap: 7px;

        flex-wrap: wrap;
    }


    #kd-ai-creative-section .kdacs-platform-label {

        margin-right: 3px;

        color: #7B8497;

        font-size: 11px;

        font-weight: 700;
    }


    #kd-ai-creative-section .kdacs-platform {

        padding: 7px 10px;

        border-radius: 7px;

        color: #4F596B;

        font-size: 10px;
        line-height: 1;

        font-weight: 700;

        background: #F7F8F9;

        border:
            1px solid #E3E6EA;

        transition:
            color .25s ease,
            border-color .25s ease,
            background .25s ease,
            transform .25s ease;
    }


    #kd-ai-creative-section .kdacs-platform:hover {

        color: var(--orange);

        border-color:
            #FFD5B8;

        background: #FFF4EC;

        transform: translateY(-2px);
    }


    /* =========================================================
 LAPTOP
========================================================= */

    @media(max-width:1080px) {

        #kd-ai-creative-section {

            padding:
                54px 30px 56px;
        }


        #kd-ai-creative-section .kdacs-container {

            grid-template-columns:
                minmax(400px, 1fr) minmax(340px, .9fr);

            gap: 45px;
        }


        #kd-ai-creative-section .kdacs-image-frame {

            height: 355px;
        }


        #kd-ai-creative-section .kdacs-title {

            font-size: 39px;

            line-height: 1.19;
        }


        #kd-ai-creative-section .kdacs-title-line {

            line-height: 1.21;
        }


        #kd-ai-creative-section .kdacs-title-gradient {

            line-height: 1.23;
        }

    }


    /* =========================================================
 TABLET / STACK
========================================================= */

    @media(max-width:900px) {

        #kd-ai-creative-section .kdacs-container {

            grid-template-columns: 1fr;

            gap: 34px;
        }


        #kd-ai-creative-section .kdacs-visual {

            max-width: 680px;

            margin: 0 auto;
        }


        #kd-ai-creative-section .kdacs-content {

            max-width: 700px;

            margin: 0 auto;

            text-align: center;
        }


        #kd-ai-creative-section .kdacs-eyebrow {

            justify-content: center;
        }


        #kd-ai-creative-section .kdacs-description {

            max-width: 650px;

            margin-left: auto;
            margin-right: auto;
        }


        #kd-ai-creative-section .kdacs-features {

            text-align: left;
        }


        #kd-ai-creative-section .kdacs-platforms {

            justify-content: center;
        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        #kd-ai-creative-section {

            padding:
                42px 17px 44px;
        }


        #kd-ai-creative-section .kdacs-bg-dots {

            display: none;
        }


        #kd-ai-creative-section .kdacs-container {

            gap: 25px;
        }


        /* =====================
       IMAGE
    ===================== */

        #kd-ai-creative-section .kdacs-visual {

            min-height: 325px;
        }


        #kd-ai-creative-section .kdacs-visual::before {

            width: 280px;
            height: 280px;
        }


        #kd-ai-creative-section .kdacs-image-frame {

            width: 87%;

            max-width: none;

            height: 270px;

            padding: 6px;

            border-radius: 18px;
        }


        #kd-ai-creative-section .kdacs-image {

            border-radius: 13px;
        }


        #kd-ai-creative-section .kdacs-image-badge {

            left: 14px;
            top: 14px;

            padding: 7px 9px;

            font-size: 7.5px;
        }


        #kd-ai-creative-section .kdacs-image-copy {

            left: 16px;
            right: 16px;
            bottom: 15px;
        }


        #kd-ai-creative-section .kdacs-image-small {

            font-size: 7.5px;
        }


        #kd-ai-creative-section .kdacs-image-title {

            max-width: 245px;

            font-size: 14px;
        }


        /* FORMAT */

        #kd-ai-creative-section .kdacs-format {

            right: 0;
            top: 32px;

            padding: 8px;
        }


        #kd-ai-creative-section .kdacs-format-label {

            margin-bottom: 6px;

            font-size: 7.5px;
        }


        #kd-ai-creative-section .kdacs-format-options span {

            height: 23px;

            padding: 0 5px;

            font-size: 7px;
        }


        /* READY */

        #kd-ai-creative-section .kdacs-ready {

            left: 0;
            bottom: 26px;

            min-width: 140px;

            padding: 8px;
        }


        #kd-ai-creative-section .kdacs-ready-icon {

            width: 29px;
            height: 29px;

            flex-basis: 29px;

            font-size: 9px;
        }


        #kd-ai-creative-section .kdacs-ready strong {

            font-size: 8.5px;
        }


        #kd-ai-creative-section .kdacs-ready span {

            font-size: 7.5px;
        }


        /* =====================
       CONTENT
    ===================== */

        #kd-ai-creative-section .kdacs-eyebrow {

            margin-bottom: 10px;

            font-size: 9px;
        }


        /* HEADING CLIPPING FIX */

        #kd-ai-creative-section .kdacs-title {

            font-size: 32px;

            line-height: 1.21;

            letter-spacing: -1.1px;

            padding:
                3px 0 7px;

            overflow: visible !important;
        }


        #kd-ai-creative-section .kdacs-title-line {

            line-height: 1.23;

            padding:
                1px 1px 3px;

            overflow: visible !important;
        }


        #kd-ai-creative-section .kdacs-title-gradient {

            line-height: 1.25;

            padding:
                2px 1px 5px;

            overflow: visible !important;
        }


        #kd-ai-creative-section .kdacs-description {

            margin-top: 10px;

            font-size: 13px;

            line-height: 1.65;
        }


        /* FEATURES */

        #kd-ai-creative-section .kdacs-features {

            margin-top: 18px;
        }


        #kd-ai-creative-section .kdacs-feature {

            min-height: 74px;

            grid-template-columns:
                32px minmax(0, 1fr);

            gap: 10px;
        }


        #kd-ai-creative-section .kdacs-feature-number {

            width: 30px;
            height: 30px;

            font-size: 9px;
        }


        #kd-ai-creative-section .kdacs-feature-copy strong {

            font-size: 14px;
        }


        #kd-ai-creative-section .kdacs-feature-copy span {

            font-size: 12px;

            line-height: 1.5;
        }


        #kd-ai-creative-section .kdacs-platforms {

            margin-top: 17px;

            gap: 6px;
        }


        #kd-ai-creative-section .kdacs-platform-label {

            width: 100%;

            margin: 0 0 2px;

            font-size: 10px;
        }


        #kd-ai-creative-section .kdacs-platform {

            padding: 7px 9px;

            font-size: 9px;
        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        #kd-ai-creative-section .kdacs-title {

            font-size: 29px;

            line-height: 1.22;
        }


        #kd-ai-creative-section .kdacs-title-line {

            line-height: 1.24;
        }


        #kd-ai-creative-section .kdacs-title-gradient {

            line-height: 1.26;
        }


        #kd-ai-creative-section .kdacs-visual {

            min-height: 300px;
        }


        #kd-ai-creative-section .kdacs-image-frame {

            height: 250px;
        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kd-ai-creative-section *,
        #kd-ai-creative-section *::before,
        #kd-ai-creative-section *::after {

            animation: none !important;
            transition: none !important;
        }

    }
</style>


<!-- =========================================================
 HTML
========================================================= -->

<section id="kd-ai-creative-section">


    <!-- BACKGROUND -->

    <span class="kdacs-bg-dots"></span>
    <span class="kdacs-bg-circle"></span>


    <div class="kdacs-container">


        <!-- =================================================
             LEFT SIDE — IMAGE
        ================================================== -->

        <div class="kdacs-visual">


            <!-- FORMAT CARD -->

            <div class="kdacs-format">


                <div class="kdacs-format-label">
                    VIDEO FORMAT
                </div>


                <div class="kdacs-format-options">

                    <span class="kdacs-active">
                        9:16
                    </span>

                    <span>
                        1:1
                    </span>

                    <span>
                        16:9
                    </span>

                </div>


            </div>


            <!-- MAIN IMAGE -->

            <div class="kdacs-image-frame">


                <div class="kdacs-image">


                    <img
                        src="https://storage.ghost.io/c/eb/7d/eb7d4c74-db89-4536-8fac-dd9ab04659f6/content/images/size/w1200/2026/05/cover-242.jpg"
                        alt="AI video creative production"
                        loading="lazy"
                        decoding="async">


                    <div class="kdacs-image-badge">

                        <span class="kdacs-image-live"></span>

                        AI CREATIVE PRODUCTION

                    </div>


                    <div class="kdacs-image-copy">

                        <div class="kdacs-image-small">
                            KING DIGITAL AI VIDEO
                        </div>

                        <div class="kdacs-image-title">
                            From a simple brief to a complete visual story.
                        </div>

                    </div>


                </div>


            </div>


            <!-- READY CARD -->

            <div class="kdacs-ready">


                <div class="kdacs-ready-icon">

                    <i class="fa-solid fa-wand-magic-sparkles"></i>

                </div>


                <div>

                    <strong>
                        Production Ready
                    </strong>

                    <span>
                        Concept • Visual • Edit
                    </span>

                </div>


            </div>


        </div>


        <!-- =================================================
             RIGHT SIDE — CONTENT
        ================================================== -->

        <div class="kdacs-content">


            <div class="kdacs-eyebrow">

                <span class="kdacs-eyebrow-dot"></span>

                FROM CONCEPT TO SCREEN

            </div>


            <!-- HEADING -->

            <h2 class="kdacs-title">

                <span class="kdacs-title-line">
                    One Brief.
                </span>

                <span class="kdacs-title-line kdacs-title-gradient">
                    A Complete Visual Story.
                </span>

            </h2>


            <!-- DESCRIPTION -->

            <p class="kdacs-description">

                Great AI video starts with more than generating
                visuals. We understand the purpose behind your
                content, develop the creative direction and bring
                every scene together into a video that feels
                consistent with your brand.

            </p>


            <!-- =================================================
                 FEATURES
            ================================================== -->

            <div class="kdacs-features">


                <!-- FEATURE 01 -->

                <div class="kdacs-feature">


                    <div class="kdacs-feature-number">
                        01
                    </div>


                    <div class="kdacs-feature-copy">

                        <strong>
                            Start With The Right Story
                        </strong>

                        <span>
                            We structure the message, hook and flow before
                            building the visual direction of your video.
                        </span>

                    </div>


                </div>


                <!-- FEATURE 02 -->

                <div class="kdacs-feature">


                    <div class="kdacs-feature-number">
                        02
                    </div>


                    <div class="kdacs-feature-copy">

                        <strong>
                            Build Every Scene With Purpose
                        </strong>

                        <span>
                            AI visuals, voice and motion are selected to
                            support the story instead of simply filling the screen.
                        </span>

                    </div>


                </div>


                <!-- FEATURE 03 -->

                <div class="kdacs-feature">


                    <div class="kdacs-feature-number">
                        03
                    </div>


                    <div class="kdacs-feature-copy">

                        <strong>
                            Finish With A Consistent Brand Look
                        </strong>

                        <span>
                            Editing, captions, pacing and final details are
                            refined so the complete video feels polished and connected.
                        </span>

                    </div>


                </div>


            </div>


            <!-- =================================================
                 PLATFORMS
            ================================================== -->

            <div class="kdacs-platforms">


                <span class="kdacs-platform-label">
                    Created for:
                </span>


                <span class="kdacs-platform">
                    Reels
                </span>


                <span class="kdacs-platform">
                    Ads
                </span>


                <span class="kdacs-platform">
                    Products
                </span>


                <span class="kdacs-platform">
                    Brands
                </span>


                <span class="kdacs-platform">
                    YouTube
                </span>


            </div>


        </div>


    </div>


</section>