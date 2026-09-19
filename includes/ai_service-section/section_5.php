<!-- =========================================================
 KING DIGITAL — AI VIDEO
 SECTION 05 — CREATIVE WORKFLOW / CAPABILITIES
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

    #kd-ai-capabilities,
    #kd-ai-capabilities * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    #kd-ai-capabilities {

        --navy: #060F3E;
        --navy2: #0B2148;
        --navy3: #10335F;

        --orange: #F47B20;
        --orange2: #FF9145;
        --orange3: #FFB078;

        --text: #626C7B;
        --border: #E3E6EA;

        position: relative;

        width: 100%;

        overflow: hidden;

        padding: 55px 50px 58px;

         

        background:
            radial-gradient(circle at 8% 18%,
                rgba(244, 123, 32, .065),
                transparent 24%),
            radial-gradient(circle at 92% 85%,
                rgba(6, 15, 62, .045),
                transparent 26%),
            linear-gradient(180deg,
                #FFFFFF 0%,
                #FAFBFC 100%);
    }


    /* =========================================================
 BACKGROUND ORBS
========================================================= */

    #kd-ai-capabilities .kdac-bg-orb {

        position: absolute;

        border-radius: 50%;

        pointer-events: none;
    }


    #kd-ai-capabilities .kdac-orb-one {

        width: 310px;
        height: 310px;

        left: -175px;
        top: 55px;

        border:
            1px solid rgba(244, 123, 32, .11);

        box-shadow:
            0 0 0 45px rgba(244, 123, 32, .025),
            0 0 0 90px rgba(6, 15, 62, .015);

        animation:
            kdacFloatOne 8s ease-in-out infinite;
    }


    #kd-ai-capabilities .kdac-orb-two {

        width: 230px;
        height: 230px;

        right: -110px;
        bottom: -75px;

        background:
            radial-gradient(circle,
                rgba(244, 123, 32, .105),
                rgba(244, 123, 32, .025) 52%,
                transparent 72%);

        animation:
            kdacFloatTwo 9s ease-in-out infinite;
    }


    @keyframes kdacFloatOne {

        0%,
        100% {
            transform: translate3d(0, 0, 0);
        }

        50% {
            transform:
                translate3d(18px, -22px, 0);
        }

    }


    @keyframes kdacFloatTwo {

        0%,
        100% {
            transform:
                translate3d(0, 0, 0) scale(1);
        }

        50% {
            transform:
                translate3d(-20px, -16px, 0) scale(1.08);
        }

    }


    /* =========================================================
 DOT PATTERN
========================================================= */

    #kd-ai-capabilities .kdac-dots {

        position: absolute;

        width: 125px;
        height: 125px;

        right: 35px;
        top: 32px;

        opacity: .32;

        pointer-events: none;

        background-image:
            radial-gradient(rgba(244, 123, 32, .48) 1.2px,
                transparent 1.2px);

        background-size:
            16px 16px;

        animation:
            kdacDots 7s ease-in-out infinite;
    }


    @keyframes kdacDots {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(14px);
        }

    }


    /* =========================================================
 SMALL PLUS
========================================================= */

    #kd-ai-capabilities .kdac-plus {

        position: absolute;

        left: 7%;
        bottom: 55px;

        width: 18px;
        height: 18px;

        opacity: .32;

        pointer-events: none;

        animation:
            kdacRotate 10s linear infinite;
    }


    #kd-ai-capabilities .kdac-plus::before,
    #kd-ai-capabilities .kdac-plus::after {

        content: "";

        position: absolute;

        border-radius: 10px;

        background: var(--orange);
    }


    #kd-ai-capabilities .kdac-plus::before {

        width: 18px;
        height: 2px;

        left: 0;
        top: 8px;
    }


    #kd-ai-capabilities .kdac-plus::after {

        width: 2px;
        height: 18px;

        left: 8px;
        top: 0;
    }


    @keyframes kdacRotate {

        to {
            transform: rotate(360deg);
        }

    }


    /* =========================================================
 CONTAINER
========================================================= */

    #kd-ai-capabilities .kdac-container {

        position: relative;
        z-index: 4;

        width: 100%;
        max-width: 1380px;

        margin: 0 auto;
    }


    /* =========================================================
 HEADER
========================================================= */

    #kd-ai-capabilities .kdac-header {

        max-width: 800px;

        margin:
            0 auto 31px;

        padding:
            0 0 4px;

        text-align: center;

        overflow: visible !important;
    }


    /* =========================================================
 EYEBROW
========================================================= */

    #kd-ai-capabilities .kdac-eyebrow {

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        margin-bottom: 12px;

        color: var(--orange);

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .11em;

        text-transform: uppercase;
    }


    #kd-ai-capabilities .kdac-eyebrow::before,
    #kd-ai-capabilities .kdac-eyebrow::after {

        content: "";

        width: 22px;
        height: 1px;

        background:
            linear-gradient(90deg,
                transparent,
                var(--orange));
    }


    #kd-ai-capabilities .kdac-eyebrow::after {
        transform: rotate(180deg);
    }


    /* =========================================================
 HEADING
 CLIPPING FIXED
========================================================= */

    #kd-ai-capabilities .kdac-title {

        display: block;

        max-width: 800px;

        margin: 0 auto;

        padding:
            4px 4px 8px;

        overflow: visible !important;

        color: var(--navy);

        font-size: 43px;
        line-height: 1.19;

        font-weight: 800;

        letter-spacing: -1.65px;

        word-break: normal;

        text-wrap: balance;
    }


    #kd-ai-capabilities .kdac-title span {

        display: block;

        margin-top: 0;

        padding:
            2px 3px 6px;

        overflow: visible !important;

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
    }


    /* =========================================================
 DESCRIPTION
========================================================= */

    #kd-ai-capabilities .kdac-desc {

        max-width: 720px;

        margin:
            11px auto 0;

        color: var(--text);

        font-size: 14px;
        line-height: 1.7;

        font-weight: 500;
    }


    /* =========================================================
 CARD GRID
========================================================= */

    #kd-ai-capabilities .kdac-grid {

        display: grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        gap: 14px;
    }


    /* =========================================================
 CARD
========================================================= */

    #kd-ai-capabilities .kdac-card {

        position: relative;

        min-width: 0;
        min-height: 280px;

        display: flex;
        flex-direction: column;

        overflow: hidden;

        padding:
            22px 21px 20px;

        border-radius: 16px;

        background:
            rgba(255, 255, 255, .96);

        border:
            1px solid var(--border);

        box-shadow:
            0 8px 25px rgba(6, 15, 62, .045);

        transition:
            transform .35s ease,
            box-shadow .35s ease,
            border-color .35s ease;
    }


    #kd-ai-capabilities .kdac-card:hover {

        transform: translateY(-6px);

        border-color:
            rgba(244, 123, 32, .30);

        box-shadow:
            0 20px 43px rgba(6, 15, 62, .11);
    }


    /* =========================================================
 TOP ORANGE LINE
========================================================= */

    #kd-ai-capabilities .kdac-card::before {

        content: "";

        position: absolute;

        z-index: 4;

        left: 0;
        right: 0;
        top: 0;

        height: 3px;

        transform: scaleX(0);

        transform-origin:
            left center;

        background:
            linear-gradient(90deg,
                #E86513,
                #F47B20,
                #FF9D5B);

        transition:
            transform .4s ease;
    }


    #kd-ai-capabilities .kdac-card:hover::before {

        transform: scaleX(1);
    }


    /* =========================================================
 CARD GLOW
========================================================= */

    #kd-ai-capabilities .kdac-card::after {

        content: "";

        position: absolute;

        width: 130px;
        height: 130px;

        right: -70px;
        top: -70px;

        border-radius: 50%;

        background:
            rgba(244, 123, 32, .045);

        pointer-events: none;

        transition:
            transform .45s ease,
            background .45s ease;
    }


    #kd-ai-capabilities .kdac-card:hover::after {

        transform: scale(1.25);

        background:
            rgba(244, 123, 32, .09);
    }


    /* =========================================================
 ICON ROW
========================================================= */

    #kd-ai-capabilities .kdac-icon-row {

        position: relative;
        z-index: 2;

        display: flex;

        align-items: center;
        justify-content: space-between;

        margin-bottom: 20px;
    }


    /* =========================================================
 ICON
========================================================= */

    #kd-ai-capabilities .kdac-icon {

        width: 50px;
        height: 50px;

        flex: 0 0 50px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 13px;

        color: var(--orange);

        font-size: 17px;

        background:
            linear-gradient(135deg,
                #FFF0E6,
                #FFF9F5);

        border:
            1px solid #FFE0CC;

        box-shadow:
            0 5px 14px rgba(244, 123, 32, .05);

        transition:
            transform .35s ease,
            color .35s ease,
            background .35s ease,
            box-shadow .35s ease;
    }


    #kd-ai-capabilities .kdac-card:hover .kdac-icon {

        transform:
            rotate(-5deg) scale(1.07);

        color: #ffffff;

        background:
            linear-gradient(135deg,
                var(--navy2) 0%,
                var(--navy3) 43%,
                var(--orange) 100%);

        box-shadow:
            0 9px 22px rgba(6, 15, 62, .15);
    }


    /* =========================================================
 DIFFERENT ICON TONES
========================================================= */

    #kd-ai-capabilities .kdac-card:nth-child(2) .kdac-icon {

        color: #E86513;

        background: #FFF4EC;

        border-color: #FFE1CC;
    }


    #kd-ai-capabilities .kdac-card:nth-child(3) .kdac-icon {

        color: var(--navy2);

        background: #F0F3F7;

        border-color: #DCE2E9;
    }


    #kd-ai-capabilities .kdac-card:nth-child(4) .kdac-icon {

        color: #F47B20;

        background: #FFF1E8;

        border-color: #FFDDC5;
    }


    #kd-ai-capabilities .kdac-card:nth-child(2):hover .kdac-icon,
    #kd-ai-capabilities .kdac-card:nth-child(3):hover .kdac-icon,
    #kd-ai-capabilities .kdac-card:nth-child(4):hover .kdac-icon {

        color: #ffffff;

        background:
            linear-gradient(135deg,
                var(--navy2),
                var(--orange));
    }


    /* =========================================================
 NUMBER
========================================================= */

    #kd-ai-capabilities .kdac-number {

        color: #AEB5C0;

        font-size: 11px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .08em;
    }


    /* =========================================================
 CARD TITLE
========================================================= */

    #kd-ai-capabilities .kdac-card h3 {

        position: relative;
        z-index: 2;

        margin:
            0 0 9px;

        padding:
            1px 0 3px;

        overflow: visible;

        color: #151C2D;

        font-size: 17px;
        line-height: 1.4;

        font-weight: 800;

        letter-spacing: -.25px;
    }


    /* =========================================================
 CARD PARAGRAPH
========================================================= */

    #kd-ai-capabilities .kdac-card p {

        position: relative;
        z-index: 2;

        margin: 0;

        color: #667080;

        font-size: 13px;
        line-height: 1.68;

        font-weight: 500;
    }


    /* =========================================================
 CARD BOTTOM
========================================================= */

    #kd-ai-capabilities .kdac-card-bottom {

        position: relative;
        z-index: 2;

        margin-top: auto;

        padding-top: 18px;

        display: flex;

        align-items: center;
        justify-content: space-between;

        gap: 10px;
    }


    /* FEATURE */

    #kd-ai-capabilities .kdac-feature {

        display: flex;

        align-items: center;

        gap: 7px;

        color: #525D70;

        font-size: 11px;
        line-height: 1.35;

        font-weight: 700;
    }


    #kd-ai-capabilities .kdac-feature i {

        color: var(--orange);

        font-size: 9px;
    }


    /* =========================================================
 ARROW
========================================================= */

    #kd-ai-capabilities .kdac-arrow {

        width: 31px;
        height: 31px;

        flex: 0 0 31px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        color: var(--orange);

        font-size: 9px;

        background: #FFF0E6;

        border:
            1px solid #FFDDC7;

        transition:
            transform .3s ease,
            background .3s ease,
            color .3s ease,
            border-color .3s ease;
    }


    #kd-ai-capabilities .kdac-card:hover .kdac-arrow {

        transform: rotate(-35deg);

        color: #ffffff;

        background: var(--orange);

        border-color: var(--orange);
    }


    /* =========================================================
 CTA STRIP
========================================================= */

    #kd-ai-capabilities .kdac-cta {

        position: relative;

        margin-top: 17px;

        min-height: 75px;

        padding:
            14px 16px 14px 19px;

        display: flex;

        align-items: center;
        justify-content: space-between;

        gap: 25px;

        overflow: hidden;

        border-radius: 15px;

        background:
            linear-gradient(105deg,
                #071633 0%,
                #0A2144 52%,
                #0C294D 100%);

        border:
            1px solid rgba(255, 255, 255, .08);

        box-shadow:
            0 13px 30px rgba(6, 15, 62, .12);
    }


    /* ORANGE GLOW */

    #kd-ai-capabilities .kdac-cta::after {

        content: "";

        position: absolute;

        width: 220px;
        height: 150px;

        right: 120px;
        top: -70px;

        border-radius: 50%;

        pointer-events: none;

        background:
            rgba(244, 123, 32, .11);

        filter: blur(30px);
    }


    /* MOVING LINE */

    #kd-ai-capabilities .kdac-cta::before {

        content: "";

        position: absolute;

        z-index: 3;

        width: 180px;
        height: 1px;

        top: 0;
        left: -180px;

        background:
            linear-gradient(90deg,
                transparent,
                #FF9145,
                transparent);

        animation:
            kdacLine 5s linear infinite;
    }


    @keyframes kdacLine {

        from {
            left: -180px;
        }

        to {
            left: 100%;
        }

    }


    /* =========================================================
 CTA COPY
========================================================= */

    #kd-ai-capabilities .kdac-cta-copy {

        position: relative;
        z-index: 4;

        min-width: 0;

        display: flex;

        align-items: center;

        gap: 12px;
    }


    /* CTA ICON */

    #kd-ai-capabilities .kdac-cta-icon {

        width: 42px;
        height: 42px;

        flex: 0 0 42px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 10px;

        color: #ffffff;

        font-size: 13px;

        background:
            rgba(244, 123, 32, .14);

        border:
            1px solid rgba(255, 145, 69, .28);

        box-shadow:
            inset 0 0 20px rgba(244, 123, 32, .035);
    }


    /* CTA TITLE */

    #kd-ai-capabilities .kdac-cta-text strong {

        display: block;

        margin-bottom: 3px;

        padding:
            1px 0 2px;

        color: #ffffff;

        font-size: 14px;
        line-height: 1.4;

        font-weight: 800;
    }


    /* CTA DESCRIPTION */

    #kd-ai-capabilities .kdac-cta-text span {

        display: block;

        color:
            rgba(255, 255, 255, .65);

        font-size: 12px;
        line-height: 1.5;

        font-weight: 500;
    }


    /* =========================================================
 CTA BUTTON
========================================================= */

    #kd-ai-capabilities .kdac-btn {

        position: relative;
        z-index: 5;

        height: 46px;

        flex: 0 0 auto;

        padding: 0 18px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 8px;

        border-radius: 9px;

        color: #ffffff !important;

        text-decoration: none !important;

         

        font-size: 11px;
        line-height: 1;

        font-weight: 800;

        white-space: nowrap;

        background:
            linear-gradient(135deg,
                #E86513,
                #F47B20 58%,
                #FF9145);

        border:
            1px solid rgba(255, 255, 255, .09);

        box-shadow:
            0 9px 22px rgba(244, 123, 32, .23);

        transition:
            transform .3s ease,
            box-shadow .3s ease,
            background .3s ease;
    }


    #kd-ai-capabilities .kdac-btn:hover {

        transform: translateY(-2px);

        color: #ffffff !important;

        background:
            linear-gradient(135deg,
                #F47B20,
                #FF9145);

        box-shadow:
            0 14px 28px rgba(244, 123, 32, .32);
    }


    #kd-ai-capabilities .kdac-btn i {

        transition:
            transform .3s ease;
    }


    #kd-ai-capabilities .kdac-btn:hover i {

        transform: translateX(3px);
    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:1050px) {

        #kd-ai-capabilities {

            padding:
                50px 30px 53px;
        }


        #kd-ai-capabilities .kdac-grid {

            grid-template-columns:
                repeat(2, minmax(0, 1fr));
        }


        #kd-ai-capabilities .kdac-card {

            min-height: 255px;
        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        #kd-ai-capabilities {

            padding:
                40px 17px 42px;
        }


        #kd-ai-capabilities .kdac-dots {

            width: 75px;
            height: 75px;

            right: 3px;
            top: 12px;

            background-size:
                13px 13px;
        }


        #kd-ai-capabilities .kdac-plus {

            display: none;
        }


        /* HEADER */

        #kd-ai-capabilities .kdac-header {

            margin-bottom: 23px;

            padding-bottom: 3px;

            overflow: visible !important;
        }


        #kd-ai-capabilities .kdac-eyebrow {

            margin-bottom: 10px;

            font-size: 8px;
        }


        /* HEADING CLIPPING FIX */

        #kd-ai-capabilities .kdac-title {

            font-size: 31px;

            line-height: 1.22;

            letter-spacing: -1px;

            padding:
                3px 2px 7px;

            overflow: visible !important;
        }


        #kd-ai-capabilities .kdac-title span {

            line-height: 1.24;

            padding:
                2px 2px 5px;

            overflow: visible !important;
        }


        #kd-ai-capabilities .kdac-desc {

            margin-top: 8px;

            font-size: 12.5px;
            line-height: 1.65;
        }


        /* CARDS */

        #kd-ai-capabilities .kdac-grid {

            grid-template-columns: 1fr;

            gap: 10px;
        }


        #kd-ai-capabilities .kdac-card {

            min-height: 0;

            padding:
                18px;

            border-radius: 14px;
        }


        #kd-ai-capabilities .kdac-icon-row {

            margin-bottom: 15px;
        }


        #kd-ai-capabilities .kdac-icon {

            width: 46px;
            height: 46px;

            flex-basis: 46px;

            font-size: 15px;

            border-radius: 12px;
        }


        #kd-ai-capabilities .kdac-card h3 {

            margin-bottom: 7px;

            font-size: 17px;
            line-height: 1.4;
        }


        #kd-ai-capabilities .kdac-card p {

            font-size: 12.5px;
            line-height: 1.62;
        }


        #kd-ai-capabilities .kdac-card-bottom {

            margin-top: 15px;

            padding-top: 0;
        }


        #kd-ai-capabilities .kdac-feature {

            font-size: 11px;
        }


        /* CTA */

        #kd-ai-capabilities .kdac-cta {

            margin-top: 11px;

            padding: 16px;

            flex-direction: column;

            align-items: stretch;

            gap: 14px;

            border-radius: 14px;
        }


        #kd-ai-capabilities .kdac-cta-copy {

            align-items: flex-start;
        }


        #kd-ai-capabilities .kdac-cta-icon {

            width: 39px;
            height: 39px;

            flex-basis: 39px;
        }


        #kd-ai-capabilities .kdac-cta-text strong {

            font-size: 13px;
        }


        #kd-ai-capabilities .kdac-cta-text span {

            font-size: 11px;
        }


        #kd-ai-capabilities .kdac-btn {

            width: 100%;

            height: 45px;
        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:380px) {

        #kd-ai-capabilities {

            padding-left: 14px;
            padding-right: 14px;
        }


        #kd-ai-capabilities .kdac-title {

            font-size: 28px;

            line-height: 1.23;
        }


        #kd-ai-capabilities .kdac-title span {

            line-height: 1.25;
        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kd-ai-capabilities *,
        #kd-ai-capabilities *::before,
        #kd-ai-capabilities *::after {

            animation: none !important;

            transition: none !important;
        }

    }
</style>


<!-- =========================================================
 HTML
========================================================= -->

<section id="kd-ai-capabilities">


    <!-- BACKGROUND ELEMENTS -->

    <span class="kdac-bg-orb kdac-orb-one"></span>

    <span class="kdac-bg-orb kdac-orb-two"></span>

    <span class="kdac-dots"></span>

    <span class="kdac-plus"></span>


    <div class="kdac-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="kdac-header">


            <div class="kdac-eyebrow">

                BUILT FOR MODERN VIDEO

            </div>


            <h2 class="kdac-title">

                Everything Your Video Needs,

                <span>
                    In One Creative Workflow.
                </span>

            </h2>


            <p class="kdac-desc">

                We combine creative thinking, AI-powered production
                and professional editing to build videos that look
                polished, communicate clearly and are ready for
                today's digital platforms.

            </p>


        </div>


        <!-- =================================================
             CARDS
        ================================================== -->

        <div class="kdac-grid">


            <!-- CARD 01 -->

            <article class="kdac-card">


                <div class="kdac-icon-row">


                    <div class="kdac-icon">

                        <i class="fa-solid fa-pen-nib"></i>

                    </div>


                    <span class="kdac-number">

                        01

                    </span>


                </div>


                <h3>

                    Creative Concept &amp; Script

                </h3>


                <p>

                    We shape your idea into a clear creative
                    direction with the right hook, message,
                    structure and script for your audience.

                </p>


                <div class="kdac-card-bottom">


                    <div class="kdac-feature">

                        <i class="fa-solid fa-circle-check"></i>

                        Idea to Story

                    </div>


                    <div class="kdac-arrow">

                        <i class="fa-solid fa-arrow-right"></i>

                    </div>


                </div>


            </article>


            <!-- CARD 02 -->

            <article class="kdac-card">


                <div class="kdac-icon-row">


                    <div class="kdac-icon">

                        <i class="fa-solid fa-wand-magic-sparkles"></i>

                    </div>


                    <span class="kdac-number">

                        02

                    </span>


                </div>


                <h3>

                    AI Visual Production

                </h3>


                <p>

                    AI-powered visuals, scenes and creative
                    elements are produced around your brand,
                    message and overall video concept.

                </p>


                <div class="kdac-card-bottom">


                    <div class="kdac-feature">

                        <i class="fa-solid fa-circle-check"></i>

                        Custom AI Visuals

                    </div>


                    <div class="kdac-arrow">

                        <i class="fa-solid fa-arrow-right"></i>

                    </div>


                </div>


            </article>


            <!-- CARD 03 -->

            <article class="kdac-card">


                <div class="kdac-icon-row">


                    <div class="kdac-icon">

                        <i class="fa-solid fa-microphone-lines"></i>

                    </div>


                    <span class="kdac-number">

                        03

                    </span>


                </div>


                <h3>

                    Voice, Motion &amp; Editing

                </h3>


                <p>

                    Voiceovers, captions, motion, transitions
                    and audio are carefully combined to create
                    a smooth and professional final video.

                </p>


                <div class="kdac-card-bottom">


                    <div class="kdac-feature">

                        <i class="fa-solid fa-circle-check"></i>

                        Polished Final Edit

                    </div>


                    <div class="kdac-arrow">

                        <i class="fa-solid fa-arrow-right"></i>

                    </div>


                </div>


            </article>


            <!-- CARD 04 -->

            <article class="kdac-card">


                <div class="kdac-icon-row">


                    <div class="kdac-icon">

                        <i class="fa-solid fa-display"></i>

                    </div>


                    <span class="kdac-number">

                        04

                    </span>


                </div>


                <h3>

                    Platform-Ready Delivery

                </h3>


                <p>

                    Your video is prepared in the right format
                    for reels, advertising, social media,
                    product campaigns or YouTube content.

                </p>


                <div class="kdac-card-bottom">


                    <div class="kdac-feature">

                        <i class="fa-solid fa-circle-check"></i>

                        Ready to Publish

                    </div>


                    <div class="kdac-arrow">

                        <i class="fa-solid fa-arrow-right"></i>

                    </div>


                </div>


            </article>


        </div>


        <!-- =================================================
             BOTTOM CTA
        ================================================== -->

        <div class="kdac-cta">


            <div class="kdac-cta-copy">


                <div class="kdac-cta-icon">

                    <i class="fa-solid fa-clapperboard"></i>

                </div>


                <div class="kdac-cta-text">


                    <strong>

                        Have an idea for your next video?

                    </strong>


                    <span>

                        Share your concept with King Digital and turn it into professional AI-powered content.

                    </span>


                </div>


            </div>


            <a
                href="/enquiry.php"
                class="kdac-btn">

                Create Your AI Video

                <i class="fa-solid fa-arrow-right"></i>

            </a>


        </div>


    </div>


</section>