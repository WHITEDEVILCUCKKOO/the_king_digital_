<!-- =========================================================
 KING DIGITAL — AI VIDEO SERVICE
 SECTION 03 — LEFT CONTENT + RIGHT IMAGE
 DARK NAVY BLUE + ORANGE THEME
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
    /* =========================================================
 RESET
========================================================= */

    #kd-ai-about,
    #kd-ai-about * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    #kd-ai-about {

        --navy: #060F3E;
        --navy2: #0B2148;
        --navy3: #123766;

        --orange: #F47B20;
        --orange2: #FF9347;
        --orange3: #FFB27D;

        --text: #5C6677;

        position: relative;

        width: 100%;

        overflow: hidden;

        padding: 66px 50px;

         

        background:
            radial-gradient(circle at 91% 35%,
                rgba(244, 123, 32, .09),
                transparent 27%),
            radial-gradient(circle at 5% 90%,
                rgba(6, 15, 62, .045),
                transparent 25%),
            linear-gradient(180deg,
                #ffffff 0%,
                #fafbfc 100%);
    }


    /* =========================================================
 DECORATIVE BACKGROUND
========================================================= */

    #kd-ai-about::before {

        content: "";

        position: absolute;

        width: 330px;
        height: 330px;

        left: -190px;
        bottom: -200px;

        border-radius: 50%;

        border:
            1px dashed rgba(244, 123, 32, .15);

        pointer-events: none;
    }


    #kd-ai-about::after {

        content: "";

        position: absolute;

        width: 220px;
        height: 220px;

        right: -110px;
        top: -120px;

        border-radius: 50%;

        background:
            rgba(244, 123, 32, .045);

        filter: blur(15px);

        pointer-events: none;
    }


    /* =========================================================
 CONTAINER
========================================================= */

    #kd-ai-about .kdaa-container {

        position: relative;
        z-index: 3;

        width: 100%;
        max-width: 1380px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(0, .94fr) minmax(450px, 1.06fr);

        align-items: center;

        gap: 76px;
    }


    /* =========================================================
 LEFT CONTENT
========================================================= */

    #kd-ai-about .kdaa-content {

        width: 100%;

        max-width: 610px;

        overflow: visible;
    }


    /* =========================================================
 BADGE
========================================================= */

    #kd-ai-about .kdaa-badge {

        width: max-content;

        display: inline-flex;
        align-items: center;

        gap: 8px;

        padding: 8px 12px;

        margin-bottom: 17px;

        border-radius: 8px;

        color: var(--orange);

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .09em;

        text-transform: uppercase;

        background: #FFF3EB;

        border:
            1px solid rgba(244, 123, 32, .20);
    }


    #kd-ai-about .kdaa-badge span {

        width: 7px;
        height: 7px;

        flex: 0 0 7px;

        border-radius: 50%;

        background: var(--orange);

        box-shadow:
            0 0 0 4px rgba(244, 123, 32, .10);

        animation:
            kdaaBadgePulse 2s ease-in-out infinite;
    }


    @keyframes kdaaBadgePulse {

        0%,
        100% {

            box-shadow:
                0 0 0 4px rgba(244, 123, 32, .10);

        }

        50% {

            box-shadow:
                0 0 0 7px rgba(244, 123, 32, .04);

        }

    }


    /* =========================================================
 HEADING
 CLIPPING FIXED
========================================================= */

    #kd-ai-about .kdaa-title {

        max-width: 610px;

        margin: 0;

        padding: 3px 0 7px;

        overflow: visible !important;

        color: var(--navy);

         

        font-size: 46px;
        line-height: 1.18;

        font-weight: 800;

        letter-spacing: -1.8px;
    }


    #kd-ai-about .kdaa-title span {

        display: block;

        position: relative;

        margin-top: 0;

        padding:
            2px 2px 6px 0;

        line-height: 1.20;

        overflow: visible !important;

        background:
            linear-gradient(90deg,
                #E76512 0%,
                #F47B20 50%,
                #FF9347 100%);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;

        color: transparent;
    }


    /* =========================================================
 DESCRIPTION
========================================================= */

    #kd-ai-about .kdaa-description {

        max-width: 590px;

        margin: 17px 0 0;

        color: var(--text);

        font-size: 15px;
        line-height: 1.75;

        font-weight: 500;
    }


    /* =========================================================
 FEATURES
========================================================= */

    #kd-ai-about .kdaa-features {

        display: grid;

        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 12px 20px;

        margin-top: 23px;
    }


    #kd-ai-about .kdaa-feature {

        display: flex;

        align-items: center;

        gap: 9px;

        color: #303A4E;

        font-size: 13px;
        line-height: 1.4;

        font-weight: 700;
    }


    #kd-ai-about .kdaa-check {

        flex: 0 0 23px;

        width: 23px;
        height: 23px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        color: var(--orange);

        font-size: 8px;

        background: #FFF1E8;

        border:
            1px solid rgba(244, 123, 32, .22);

        transition:
            background .25s ease,
            color .25s ease,
            transform .25s ease;
    }


    #kd-ai-about .kdaa-feature:hover .kdaa-check {

        color: #ffffff;

        background: var(--orange);

        transform: scale(1.08);
    }


    /* =========================================================
 BUTTONS
========================================================= */

    #kd-ai-about .kdaa-actions {

        display: flex;

        align-items: center;

        gap: 11px;

        margin-top: 27px;
    }


    #kd-ai-about .kdaa-btn-primary,
    #kd-ai-about .kdaa-btn-secondary {

        min-height: 49px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        padding: 0 20px;

        border-radius: 9px;

        text-decoration: none !important;

         

        font-size: 11px;
        line-height: 1;

        font-weight: 800;

        transition:
            transform .3s ease,
            box-shadow .3s ease,
            border-color .3s ease,
            color .3s ease;
    }


    /* PRIMARY */

    #kd-ai-about .kdaa-btn-primary {

        color: #ffffff !important;

        background:
            linear-gradient(135deg,
                #E96512,
                #F47B20 55%,
                #FF9144);

        box-shadow:
            0 12px 27px rgba(244, 123, 32, .20);
    }


    #kd-ai-about .kdaa-btn-primary:hover {

        transform: translateY(-3px);

        box-shadow:
            0 17px 34px rgba(244, 123, 32, .29);
    }


    #kd-ai-about .kdaa-btn-primary i {

        transition:
            transform .3s ease;
    }


    #kd-ai-about .kdaa-btn-primary:hover i {

        transform: translateX(3px);
    }


    /* SECONDARY */

    #kd-ai-about .kdaa-btn-secondary {

        color: var(--navy) !important;

        background: #ffffff;

        border:
            1px solid #DCE1E7;

        box-shadow:
            0 5px 15px rgba(6, 15, 62, .025);
    }


    #kd-ai-about .kdaa-btn-secondary:hover {

        transform: translateY(-3px);

        color: var(--orange) !important;

        border-color:
            rgba(244, 123, 32, .30);

        box-shadow:
            0 10px 24px rgba(6, 15, 62, .07);
    }


    /* =========================================================
 RIGHT VISUAL
========================================================= */

    #kd-ai-about .kdaa-visual {

        position: relative;

        width: 100%;
        max-width: 625px;

        min-height: 455px;

        margin-left: auto;

        display: flex;

        align-items: center;
        justify-content: center;
    }


    /* =========================================================
 BACKGROUND GLOW
========================================================= */

    #kd-ai-about .kdaa-visual::before {

        content: "";

        position: absolute;

        width: 430px;
        height: 430px;

        border-radius: 50%;

        background:
            radial-gradient(circle,
                rgba(244, 123, 32, .13) 0%,
                rgba(6, 15, 62, .055) 46%,
                transparent 70%);

        animation:
            kdaaGlow 6s ease-in-out infinite;
    }


    @keyframes kdaaGlow {

        0%,
        100% {
            transform: scale(.96);
            opacity: .8;
        }

        50% {
            transform: scale(1.04);
            opacity: 1;
        }

    }


    /* =========================================================
 DOT PATTERN
========================================================= */

    #kd-ai-about .kdaa-dots {

        position: absolute;

        width: 130px;
        height: 130px;

        right: -2px;
        top: 15px;

        opacity: .43;

        background-image:
            radial-gradient(rgba(244, 123, 32, .40) 1.3px,
                transparent 1.3px);

        background-size:
            16px 16px;
    }


    /* =========================================================
 IMAGE FRAME
========================================================= */

    #kd-ai-about .kdaa-image-frame {

        position: relative;
        z-index: 3;

        width: 500px;
        height: 380px;

        padding: 8px;

        border-radius: 23px;

        background:
            rgba(255, 255, 255, .97);

        border:
            1px solid #DFE3E8;

        box-shadow:
            0 27px 65px rgba(6, 15, 62, .16);

        transition:
            transform .4s ease,
            box-shadow .4s ease;
    }


    #kd-ai-about .kdaa-image-frame:hover {

        transform: translateY(-4px);

        box-shadow:
            0 34px 75px rgba(6, 15, 62, .19);
    }


    /* =========================================================
 IMAGE
========================================================= */

    #kd-ai-about .kdaa-image {

        position: relative;

        width: 100%;
        height: 100%;

        overflow: hidden;

        border-radius: 17px;

        background: var(--navy);
    }


    #kd-ai-about .kdaa-image img {

        width: 100%;
        height: 100%;

        display: block;

        object-fit: cover;

        object-position: center;

        transition:
            transform .7s cubic-bezier(.2, .7, .2, 1);
    }


    #kd-ai-about .kdaa-image-frame:hover img {

        transform: scale(1.045);
    }


    /* =========================================================
 IMAGE OVERLAY
========================================================= */

    #kd-ai-about .kdaa-image::after {

        content: "";

        position: absolute;

        inset: 0;

        pointer-events: none;

        background:
            linear-gradient(180deg,
                rgba(6, 15, 62, .02) 25%,
                rgba(6, 15, 62, .08) 48%,
                rgba(4, 11, 41, .72) 100%);
    }


    /* =========================================================
 IMAGE TOP BADGE
========================================================= */

    #kd-ai-about .kdaa-image-badge {

        position: absolute;
        z-index: 5;

        top: 21px;
        left: 21px;

        display: flex;

        align-items: center;

        gap: 8px;

        padding: 8px 11px;

        border-radius: 8px;

        color: #ffffff;

        font-size: 9px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .05em;

        background:
            rgba(6, 15, 62, .74);

        border:
            1px solid rgba(255, 255, 255, .16);

        backdrop-filter:
            blur(12px);

        -webkit-backdrop-filter:
            blur(12px);
    }


    #kd-ai-about .kdaa-live {

        width: 7px;
        height: 7px;

        flex: 0 0 7px;

        border-radius: 50%;

        background: var(--orange);

        box-shadow:
            0 0 10px rgba(244, 123, 32, .95);

        animation:
            kdaaBlink 1.7s ease infinite;
    }


    @keyframes kdaaBlink {

        50% {
            opacity: .35;
        }

    }


    /* =========================================================
 IMAGE BOTTOM COPY
========================================================= */

    #kd-ai-about .kdaa-image-copy {

        position: absolute;
        z-index: 5;

        left: 24px;
        right: 24px;

        bottom: 21px;
    }


    #kd-ai-about .kdaa-image-small {

        margin-bottom: 5px;

        color: #FFAE76;

        font-size: 9px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .10em;

        text-transform: uppercase;
    }


    #kd-ai-about .kdaa-image-title {

        max-width: 370px;

        padding: 2px 0 3px;

        color: #ffffff;

        font-size: 18px;
        line-height: 1.38;

        font-weight: 800;
    }


    /* =========================================================
 FLOATING STATUS CARD
========================================================= */

    #kd-ai-about .kdaa-floating {

        position: absolute;
        z-index: 7;

        right: -4px;
        bottom: 31px;

        width: 180px;

        padding: 13px;

        border-radius: 13px;

        background:
            rgba(255, 255, 255, .98);

        border:
            1px solid #E0E4E9;

        box-shadow:
            0 16px 37px rgba(6, 15, 62, .13);

        animation:
            kdaaFloat 4s ease-in-out infinite;
    }


    #kd-ai-about .kdaa-floating-head {

        display: flex;

        align-items: center;

        gap: 9px;
    }


    #kd-ai-about .kdaa-floating-icon {

        flex: 0 0 34px;

        width: 34px;
        height: 34px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 9px;

        color: #ffffff;

        font-size: 11px;

        background:
            linear-gradient(135deg,
                #E96512,
                #F47B20);

        box-shadow:
            0 7px 16px rgba(244, 123, 32, .20);
    }


    #kd-ai-about .kdaa-floating-title {

        color: var(--navy);

        font-size: 10px;
        line-height: 1.25;

        font-weight: 800;
    }


    #kd-ai-about .kdaa-floating-text {

        margin-top: 3px;

        color: #788291;

        font-size: 9px;
        line-height: 1.4;

        font-weight: 600;
    }


    /* =========================================================
 FLOATING PROGRESS
========================================================= */

    #kd-ai-about .kdaa-progress {

        width: 100%;
        height: 4px;

        margin-top: 9px;

        overflow: hidden;

        border-radius: 20px;

        background: #E9ECF0;
    }


    #kd-ai-about .kdaa-progress span {

        display: block;

        width: 92%;
        height: 100%;

        border-radius: 20px;

        background:
            linear-gradient(90deg,
                var(--navy2),
                var(--orange));

        transform-origin: left center;

        animation:
            kdaaProgress 3.5s ease-in-out infinite;
    }


    @keyframes kdaaProgress {

        0%,
        100% {
            transform: scaleX(.55);
        }

        50% {
            transform: scaleX(1);
        }

    }


    @keyframes kdaaFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-7px);
        }

    }


    /* =========================================================
 FORMAT CARD
========================================================= */

    #kd-ai-about .kdaa-format {

        position: absolute;
        z-index: 7;

        left: -7px;
        top: 48px;

        padding: 12px 13px;

        border-radius: 12px;

        background:
            rgba(255, 255, 255, .98);

        border:
            1px solid #E0E4E9;

        box-shadow:
            0 15px 34px rgba(6, 15, 62, .12);

        animation:
            kdaaFloat2 4.5s ease-in-out infinite;
    }


    #kd-ai-about .kdaa-format-label {

        margin-bottom: 7px;

        color: #747E8D;

        font-size: 8px;
        line-height: 1;

        font-weight: 800;
    }


    #kd-ai-about .kdaa-format-options {

        display: flex;

        gap: 5px;
    }


    #kd-ai-about .kdaa-format-options span {

        padding: 6px 8px;

        border-radius: 6px;

        color: #747E8D;

        font-size: 8px;
        line-height: 1;

        font-weight: 800;

        background: #F1F3F5;

        border:
            1px solid transparent;
    }


    #kd-ai-about .kdaa-format-options .active {

        color: #ffffff;

        background:
            linear-gradient(135deg,
                var(--navy2),
                var(--orange));

        box-shadow:
            0 5px 12px rgba(244, 123, 32, .14);
    }


    @keyframes kdaaFloat2 {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(6px);
        }

    }


    /* =========================================================
 LAPTOP
========================================================= */

    @media(max-width:1100px) {

        #kd-ai-about {

            padding:
                61px 34px;

        }


        #kd-ai-about .kdaa-container {

            gap: 47px;

            grid-template-columns:
                .92fr 1.08fr;

        }


        #kd-ai-about .kdaa-title {

            font-size: 41px;

            line-height: 1.19;

        }


        #kd-ai-about .kdaa-title span {

            line-height: 1.21;

        }


        #kd-ai-about .kdaa-description {

            font-size: 14px;

        }


        #kd-ai-about .kdaa-image-frame {

            width: 440px;
            height: 340px;

        }

    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:900px) {

        #kd-ai-about .kdaa-container {

            grid-template-columns: 1fr;

            gap: 38px;

        }


        #kd-ai-about .kdaa-content {

            max-width: 720px;

            margin: 0 auto;

            text-align: center;

        }


        #kd-ai-about .kdaa-badge {

            margin-left: auto;
            margin-right: auto;

        }


        #kd-ai-about .kdaa-title,
        #kd-ai-about .kdaa-description {

            margin-left: auto;
            margin-right: auto;

        }


        #kd-ai-about .kdaa-features {

            max-width: 570px;

            margin-left: auto;
            margin-right: auto;

            margin-top: 23px;

        }


        #kd-ai-about .kdaa-actions {

            justify-content: center;

        }


        #kd-ai-about .kdaa-visual {

            max-width: 620px;

            margin: 0 auto;

        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        #kd-ai-about {

            padding:
                45px 18px 48px;

        }


        #kd-ai-about .kdaa-container {

            gap: 27px;

        }


        #kd-ai-about .kdaa-badge {

            margin-bottom: 13px;

            padding: 7px 10px;

            font-size: 8px;

        }


        /* HEADING CUT FIX */

        #kd-ai-about .kdaa-title {

            font-size: 33px;
            line-height: 1.21;

            letter-spacing: -1.05px;

            padding:
                2px 0 6px;

            overflow: visible !important;

        }


        #kd-ai-about .kdaa-title span {

            padding:
                2px 1px 5px 0;

            line-height: 1.23;

            overflow: visible !important;

        }


        #kd-ai-about .kdaa-description {

            margin-top: 13px;

            font-size: 13px;
            line-height: 1.68;

        }


        /* FEATURES */

        #kd-ai-about .kdaa-features {

            gap: 9px 11px;

            margin-top: 19px;

        }


        #kd-ai-about .kdaa-feature {

            font-size: 10px;

            text-align: left;

        }


        #kd-ai-about .kdaa-check {

            flex-basis: 21px;

            width: 21px;
            height: 21px;

            font-size: 7px;

        }


        /* BUTTONS */

        #kd-ai-about .kdaa-actions {

            width: 100%;

            margin-top: 22px;

            gap: 7px;

            flex-wrap: nowrap;

        }


        #kd-ai-about .kdaa-btn-primary,
        #kd-ai-about .kdaa-btn-secondary {

            flex: 1;

            min-width: 0;

            min-height: 45px;

            padding: 0 9px;

            font-size: 9px;

        }


        /* RIGHT */

        #kd-ai-about .kdaa-visual {

            min-height: 335px;

        }


        #kd-ai-about .kdaa-visual::before {

            width: 290px;
            height: 290px;

        }


        #kd-ai-about .kdaa-image-frame {

            width: 84%;
            height: 275px;

            padding: 6px;

            border-radius: 18px;

        }


        #kd-ai-about .kdaa-image {

            border-radius: 13px;

        }


        #kd-ai-about .kdaa-image-badge {

            top: 14px;
            left: 14px;

            padding: 7px 8px;

            font-size: 7px;

        }


        #kd-ai-about .kdaa-image-copy {

            left: 16px;
            right: 16px;

            bottom: 15px;

        }


        #kd-ai-about .kdaa-image-small {

            font-size: 7px;

        }


        #kd-ai-about .kdaa-image-title {

            max-width: 230px;

            font-size: 14px;

        }


        /* FORMAT */

        #kd-ai-about .kdaa-format {

            left: 0;
            top: 39px;

            padding: 9px;

        }


        #kd-ai-about .kdaa-format-label {

            font-size: 7px;

        }


        #kd-ai-about .kdaa-format-options span {

            padding: 5px 6px;

            font-size: 7px;

        }


        /* FLOAT */

        #kd-ai-about .kdaa-floating {

            right: 0;
            bottom: 23px;

            width: 142px;

            padding: 9px;

        }


        #kd-ai-about .kdaa-floating-icon {

            width: 28px;
            height: 28px;

            flex-basis: 28px;

            font-size: 9px;

        }


        #kd-ai-about .kdaa-floating-title {

            font-size: 8px;

        }


        #kd-ai-about .kdaa-floating-text {

            font-size: 7px;

        }


        #kd-ai-about .kdaa-dots {

            width: 85px;
            height: 85px;

            background-size:
                13px 13px;

        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        #kd-ai-about {

            padding-left: 15px;
            padding-right: 15px;

        }


        #kd-ai-about .kdaa-title {

            font-size: 30px;
            line-height: 1.22;

        }


        #kd-ai-about .kdaa-title span {

            line-height: 1.24;

        }


        #kd-ai-about .kdaa-description {

            font-size: 12px;

        }


        #kd-ai-about .kdaa-feature {

            font-size: 9px;

        }


        #kd-ai-about .kdaa-visual {

            min-height: 310px;

        }


        #kd-ai-about .kdaa-image-frame {

            width: 87%;
            height: 250px;

        }


        #kd-ai-about .kdaa-floating {

            width: 130px;

        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kd-ai-about *,
        #kd-ai-about *::before,
        #kd-ai-about *::after {

            animation: none !important;

            transition: none !important;

        }

    }
</style>


<!-- =========================================================
 HTML
========================================================= -->

<section id="kd-ai-about">


    <div class="kdaa-container">


        <!-- =================================================
             LEFT CONTENT
        ================================================== -->

        <div class="kdaa-content">


            <!-- BADGE -->

            <div class="kdaa-badge">

                <span></span>

                AI VIDEO CREATION

            </div>


            <!-- HEADING -->

            <h2 class="kdaa-title">

                Your Ideas Deserve

                <span>
                    More Than Ordinary Video.
                </span>

            </h2>


            <!-- DESCRIPTION -->

            <p class="kdaa-description">

                King Digital combines creative thinking with
                AI-powered production to transform your ideas into
                engaging video content. From concept and script to
                visuals, voiceovers and final editing, we create
                videos designed for today's fast-moving digital platforms.

            </p>


            <!-- FEATURES -->

            <div class="kdaa-features">


                <div class="kdaa-feature">

                    <span class="kdaa-check">

                        <i class="fa-solid fa-check"></i>

                    </span>

                    AI-Generated Visuals

                </div>


                <div class="kdaa-feature">

                    <span class="kdaa-check">

                        <i class="fa-solid fa-check"></i>

                    </span>

                    Natural AI Voiceovers

                </div>


                <div class="kdaa-feature">

                    <span class="kdaa-check">

                        <i class="fa-solid fa-check"></i>

                    </span>

                    Creative Video Editing

                </div>


                <div class="kdaa-feature">

                    <span class="kdaa-check">

                        <i class="fa-solid fa-check"></i>

                    </span>

                    Multi-Platform Formats

                </div>


            </div>


            <!-- BUTTONS -->

            <div class="kdaa-actions">


                <a
                    href="/enquiry.php"
                    class="kdaa-btn-primary">

                    Create Your AI Video

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


                <a
                    href="/portfolio.php"
                    class="kdaa-btn-secondary">

                    View Our Work

                    <i class="fa-solid fa-play"></i>

                </a>


            </div>


        </div>


        <!-- =================================================
             RIGHT IMAGE AREA
        ================================================== -->

        <div class="kdaa-visual">


            <!-- DOT PATTERN -->

            <div class="kdaa-dots"></div>


            <!-- =================================================
                 FORMAT CARD
            ================================================== -->

            <div class="kdaa-format">


                <div class="kdaa-format-label">

                    VIDEO FORMAT

                </div>


                <div class="kdaa-format-options">


                    <span class="active">
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


            <!-- =================================================
                 MAIN IMAGE
            ================================================== -->

            <div class="kdaa-image-frame">


                <div class="kdaa-image">


                    <img
                        src="https://storage.ghost.io/c/eb/7d/eb7d4c74-db89-4536-8fac-dd9ab04659f6/content/images/size/w1200/2026/05/cover-242.jpg"
                        alt="AI video production and editing studio"
                        loading="lazy"
                        decoding="async">


                    <!-- IMAGE BADGE -->

                    <div class="kdaa-image-badge">

                        <span class="kdaa-live"></span>

                        AI VIDEO PRODUCTION

                    </div>


                    <!-- IMAGE COPY -->

                    <div class="kdaa-image-copy">


                        <div class="kdaa-image-small">

                            KING DIGITAL CREATIVE

                        </div>


                        <div class="kdaa-image-title">

                            Ideas transformed into
                            modern visual content.

                        </div>


                    </div>


                </div>


            </div>


            <!-- =================================================
                 FLOATING STATUS
            ================================================== -->

            <div class="kdaa-floating">


                <div class="kdaa-floating-head">


                    <div class="kdaa-floating-icon">

                        <i class="fa-solid fa-wand-magic-sparkles"></i>

                    </div>


                    <div>


                        <div class="kdaa-floating-title">

                            Creative Ready

                        </div>


                        <div class="kdaa-floating-text">

                            Visuals • Voice • Edit

                        </div>


                    </div>


                </div>


                <div class="kdaa-progress">

                    <span></span>

                </div>


            </div>


        </div>


    </div>


</section>