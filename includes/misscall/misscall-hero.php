<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>
    /* =========================================================
                        MAIN HERO
    ========================================================= */
    .kdmcall-hero {
        position: relative;

        isolation: isolate;

        width: 100%;

        overflow: hidden;

        padding:
            10px 28px;

        font-family:
            "Poppins",
            Arial,
            sans-serif;

        background:

            radial-gradient(circle at 92% 10%,
                rgba(135, 92, 246, .19),
                transparent 29%),

            radial-gradient(circle at 65% 100%,
                rgba(236, 72, 153, .08),
                transparent 35%),

            linear-gradient(115deg,
                #ffffff 0%,
                #faf8ff 48%,
                #f0ebff 100%);

    }


    /* =========================================================
                        GRID
    ========================================================= */

    .kdmcall-grid {

        position: absolute;

        inset: 0;

        z-index: 0;

        opacity: .12;

        pointer-events: none;

        background-image:

            linear-gradient(rgba(91, 63, 176, .09) 1px,
                transparent 1px),

            linear-gradient(90deg,
                rgba(91, 63, 176, .09) 1px,
                transparent 1px);

        background-size:
            60px 60px;

        -webkit-mask-image:
            linear-gradient(90deg,
                transparent 0%,
                transparent 38%,
                #000 100%);

        mask-image:
            linear-gradient(90deg,
                transparent 0%,
                transparent 38%,
                #000 100%);

    }


    /* =========================================================
                        GLOWS
    ========================================================= */

    .kdmcall-glow {

        position: absolute;

        border-radius: 50%;

        pointer-events: none;

        filter:
            blur(90px);

    }


    .glow-purple {

        width: 420px;

        height: 420px;

        right: -140px;

        top: -170px;

        background:
            rgba(126, 87, 244, .18);

    }


    .glow-pink {

        width: 330px;

        height: 330px;

        right: 27%;

        bottom: -230px;

        background:
            rgba(230, 78, 154, .08);

    }


    /* =========================================================
                        CONTAINER
    ========================================================= */

    .kdmcall-container {

        position: relative;

        z-index: 3;

        width: 100%;

        max-width: 1320px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(0, 1fr) 530px;

        gap: 65px;

        align-items: center;

    }


    /* =========================================================
                        LEFT CONTENT
    ========================================================= */

    .kdmcall-content {

        max-width: 690px;

    }


    /* =========================================================
                        LABEL
    ========================================================= */

    .kdmcall-label {

        width: max-content;

        display: inline-flex;

        align-items: center;

        gap: 9px;

        margin-bottom: 18px;

        padding:
            7px 15px 7px 8px;

        border:
            1px solid rgba(114, 79, 207, .10);

        border-radius: 30px;

        background: #f1edff;

        color: #7250c6;

        font-size: 10px;

        line-height: 1;

        font-weight: 750;

        letter-spacing: 1.5px;

    }


    .kdmcall-label-icon {

        width: 28px;

        height: 28px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background: #ffffff;

        color: #7652d3;

        box-shadow:
            0 5px 13px rgba(88, 57, 172, .08);

    }


    /* =========================================================
                        HEADING
    ========================================================= */

    .kdmcall-heading {

        margin:
            0 0 21px;

        padding: 0;

        color: #211638;

        font-size:
            clamp(40px,
                3.9vw,
                56px);

        line-height: 1.08;

        font-weight: 760;

        letter-spacing: -1.8px;

    }


    .kdmcall-heading span {

        display: block;

    }


    .kdmcall-heading-accent {

        margin-top: 6px;

        color: #7853d8;

    }


    /* =========================================================
                        DESCRIPTION
    ========================================================= */

    .kdmcall-description {

        max-width: 625px;

        margin: 0;

        color: #716d7d;

        font-size: 14px;

        line-height: 1.85;

    }


    /* =========================================================
                        BUTTON AREA
    ========================================================= */

    .kdmcall-buttons {

        display: flex;

        align-items: center;

        flex-wrap: wrap;

        gap: 12px;

        margin-top: 27px;

    }


    /* =========================================================
                        PRIMARY BUTTON
    ========================================================= */

    .kdmcall-btn-primary,
    .kdmcall-btn-primary:link,
    .kdmcall-btn-primary:visited,
    .kdmcall-btn-primary:hover,
    .kdmcall-btn-primary:focus {

        min-height: 48px;

        padding:
            0 21px;

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 9px;

        border-radius: 9px;

        background:

            linear-gradient(100deg,
                #6545bd,
                #8a62ec);

        color: #ffffff !important;

        -webkit-text-fill-color:
            #ffffff !important;

        text-decoration: none !important;

        font-size: 12px;

        line-height: 1;

        font-weight: 650;

        box-shadow:

            0 12px 26px rgba(108, 75, 194, .22);

        transition:
            transform .3s ease,
            box-shadow .3s ease;

    }


    .kdmcall-btn-primary:hover {

        transform:
            translateY(-2px);

        box-shadow:

            0 17px 32px rgba(108, 75, 194, .30);

    }


    /* =========================================================
                        SECONDARY BUTTON
    ========================================================= */

    .kdmcall-btn-secondary,
    .kdmcall-btn-secondary:link,
    .kdmcall-btn-secondary:visited,
    .kdmcall-btn-secondary:hover,
    .kdmcall-btn-secondary:focus {

        min-height: 48px;

        padding:
            0 20px;

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 9px;

        border:
            1px solid #d8cef5;

        border-radius: 9px;

        background: #ffffff;

        color: #392b59 !important;

        -webkit-text-fill-color:
            #392b59 !important;

        text-decoration: none !important;

        font-size: 12px;

        line-height: 1;

        font-weight: 600;

        transition:
            transform .3s ease,
            border-color .3s ease;

    }


    .kdmcall-btn-secondary i {

        color: #7652d3;

    }


    .kdmcall-btn-secondary:hover {

        transform:
            translateY(-2px);

        border-color: #7652d3;

    }


    /* =========================================================
                        POINTS
    ========================================================= */

    .kdmcall-points {

        display: flex;

        align-items: center;

        flex-wrap: wrap;

        gap: 19px;

        margin-top: 24px;

    }


    .kdmcall-points>div {

        display: flex;

        align-items: center;

        gap: 7px;

        color: #736f7f;

        font-size: 10px;

        font-weight: 550;

    }


    .kdmcall-points>div>span {

        width: 18px;

        height: 18px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background: #eee9fc;

        color: #7853d8;

        font-size: 8px;

    }


    /* =========================================================
                        VISUAL
    ========================================================= */

    .kdmcall-visual {

        position: relative;

        width: 100%;

        max-width: 530px;

        min-height: 520px;

        margin-left: auto;

    }


    /* =========================================================
                        VISUAL BG
    ========================================================= */

    .kdmcall-visual-bg {

        position: absolute;

        left: 50%;

        top: 50%;

        width: 390px;

        height: 390px;

        transform:
            translate(-50%, -50%);

        border-radius: 50%;

        background:

            radial-gradient(circle at 42% 36%,
                rgba(255, 255, 255, .98),
                rgba(239, 233, 255, .84) 44%,
                rgba(172, 147, 239, .18) 70%,
                transparent 74%);

    }


    /* =========================================================
                        RINGS
    ========================================================= */

    .kdmcall-ring {

        position: absolute;

        left: 50%;

        top: 50%;

        transform:
            translate(-50%, -50%);

        border-radius: 50%;

        pointer-events: none;

    }


    .ring-one {

        width: 330px;

        height: 330px;

        border:
            1px solid rgba(119, 82, 213, .17);

        animation:
            kdmcallRing 4s ease-out infinite;

    }


    .ring-two {

        width: 390px;

        height: 390px;

        border:
            1px solid rgba(119, 82, 213, .11);

        animation:
            kdmcallRing 4s ease-out infinite 1s;

    }


    .ring-three {

        width: 450px;

        height: 450px;

        border:
            1px dashed rgba(119, 82, 213, .10);

    }


    @keyframes kdmcallRing {

        0% {

            opacity: .2;

            transform:
                translate(-50%, -50%) scale(.93);

        }

        55% {
            opacity: .65;
        }

        100% {

            opacity: 0;

            transform:
                translate(-50%, -50%) scale(1.08);

        }

    }


    /* =========================================================
                        MAIN CARD
    ========================================================= */

    .kdmcall-main-card {

        position: absolute;

        z-index: 8;

        left: 50%;

        top: 50%;

        width: 275px;

        min-height: 300px;

        transform:
            translate(-50%, -50%);

        padding:
            20px;

        text-align: center;

        border:
            1px solid rgba(113, 78, 200, .11);

        border-radius: 30px;

        background:

            linear-gradient(145deg,
                rgba(255, 255, 255, .99),
                rgba(249, 247, 255, .98));

        box-shadow:

            0 30px 65px rgba(76, 53, 134, .15);

        backdrop-filter:
            blur(14px);

    }


    /* =========================================================
                        LIVE LABEL
    ========================================================= */

    .kdmcall-live {

        display: inline-flex;

        align-items: center;

        gap: 7px;

        margin-bottom: 18px;

        padding:
            7px 11px;

        border-radius: 20px;

        background: #f1edff;

        color: #766a8c;

        font-size: 7.5px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: .8px;

    }


    .kdmcall-live span {

        width: 8px;

        height: 8px;

        border-radius: 50%;

        background: #8a61e8;

        box-shadow:

            0 0 0 4px rgba(138, 97, 232, .12);

        animation:
            kdmcallBlink 1.7s ease-in-out infinite;

    }


    @keyframes kdmcallBlink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: .35;
        }

    }


    /* =========================================================
                        CALL AREA
    ========================================================= */

    .kdmcall-call-area {

        position: relative;

        width: 94px;

        height: 94px;

        margin:
            0 auto 18px;

        display: flex;

        align-items: center;

        justify-content: center;

    }


    .kdmcall-call-icon {

        position: relative;

        z-index: 4;

        width: 72px;

        height: 72px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background:

            linear-gradient(135deg,
                #6141b8,
                #8d65ec);

        color: #ffffff;

        font-size: 25px;

        box-shadow:

            0 13px 28px rgba(107, 75, 194, .28);

    }


    /* =========================================================
                        PULSE
    ========================================================= */

    .kdmcall-pulse {

        position: absolute;

        left: 50%;

        top: 50%;

        border-radius: 50%;

        border:
            1px solid rgba(129, 91, 225, .25);

        transform:
            translate(-50%, -50%);

    }


    .pulse-1 {

        width: 84px;

        height: 84px;

        animation:
            kdmcallCallPulse 2.4s ease-out infinite;

    }


    .pulse-2 {

        width: 98px;

        height: 98px;

        animation:
            kdmcallCallPulse 2.4s ease-out infinite .8s;

    }


    @keyframes kdmcallCallPulse {

        0% {

            opacity: .85;

            transform:
                translate(-50%, -50%) scale(.85);

        }

        100% {

            opacity: 0;

            transform:
                translate(-50%, -50%) scale(1.15);

        }

    }


    /* =========================================================
                        MAIN CONTENT
    ========================================================= */

    .kdmcall-main-content small {

        display: block;

        margin-bottom: 7px;

        color: #938aa7;

        font-size: 8px;

        line-height: 1;

        letter-spacing: .8px;

    }


    .kdmcall-main-content strong {

        display: block;

        margin-bottom: 5px;

        color: #2c2045;

        font-size: 21px;

        line-height: 1.2;

        font-weight: 720;

    }


    .kdmcall-main-content p {

        margin: 0;

        color: #80788f;

        font-size: 11px;

        line-height: 1.4;

    }


    /* =========================================================
                        MAIN STATUS
    ========================================================= */

    .kdmcall-main-status {

        margin-top: 20px;

        padding:
            12px 13px;

        display: flex;

        align-items: center;

        justify-content: space-between;

        border-radius: 13px;

        background: #f2effb;

    }


    .kdmcall-main-status>div {

        display: flex;

        align-items: center;

        gap: 7px;

        color: #5e4f80;

        font-size: 10px;

        font-weight: 600;

    }


    .kdmcall-main-status i {

        color: #7c58d5;

        font-size: 12px;

    }


    .kdmcall-main-status>strong {

        color: #6245a9;

        font-size: 11px;

    }


    /* =========================================================
                        CONNECTORS
    ========================================================= */

    .kdmcall-connector {

        position: absolute;

        z-index: 4;

        pointer-events: none;

    }


    .connector-left {

        left: 88px;

        top: 214px;

        width: 100px;

        height: 1px;

        background:

            linear-gradient(90deg,
                transparent,
                rgba(124, 87, 213, .31));

    }


    .connector-right {

        right: 87px;

        top: 214px;

        width: 100px;

        height: 1px;

        background:

            linear-gradient(90deg,
                rgba(124, 87, 213, .31),
                transparent);

    }


    .connector-bottom {

        left: 50%;

        bottom: 94px;

        width: 1px;

        height: 83px;

        background:

            linear-gradient(180deg,
                rgba(124, 87, 213, .30),
                transparent);

    }


    /* MOVING DOT */

    .kdmcall-connector span {

        position: absolute;

        width: 8px;

        height: 8px;

        border-radius: 50%;

        background: #815be0;

        box-shadow:

            0 0 0 5px rgba(129, 91, 224, .09);

    }


    .connector-left span,
    .connector-right span {

        top: -4px;

        left: 0;

        animation:
            connectorMoveX 2.8s linear infinite;

    }


    .connector-right span {
        animation-delay: .7s;
    }


    .connector-bottom span {

        left: -4px;

        top: 0;

        animation:
            connectorMoveY 2.8s linear infinite 1.2s;

    }


    @keyframes connectorMoveX {

        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(95px);
        }

    }


    @keyframes connectorMoveY {

        from {
            transform: translateY(0);
        }

        to {
            transform: translateY(78px);
        }

    }


    /* =========================================================
                        STEP CARDS
    ========================================================= */

    .kdmcall-step-card {

        position: absolute;

        z-index: 12;

        display: grid;

        align-items: center;

        gap: 10px;

        padding:
            13px;

        border:
            1px solid rgba(109, 77, 188, .11);

        border-radius: 15px;

        background:
            rgba(255, 255, 255, .98);

        box-shadow:

            0 16px 36px rgba(75, 53, 127, .11);

        backdrop-filter:
            blur(10px);

    }


    /* STEP 1 */

    .step-call {

        left: -8px;

        top: 142px;

        width: 205px;

        grid-template-columns:
            42px 1fr auto;

        animation:
            kdmcallFloat 5s ease-in-out infinite;

    }


    /* STEP 2 */

    .step-lead {

        right: -8px;

        top: 142px;

        width: 205px;

        grid-template-columns:
            42px 1fr 17px;

        animation:
            kdmcallFloat 5.4s ease-in-out infinite -2s;

    }


    /* STEP 3 */

    .step-callback {

        left: 50%;

        bottom: 14px;

        width: 250px;

        grid-template-columns:
            42px 1fr 31px;

        transform:
            translateX(-50%);

        animation:
            kdmcallBottomFloat 5s ease-in-out infinite -1s;

    }


    /* =========================================================
                        STEP ICON
    ========================================================= */

    .kdmcall-step-icon {

        width: 42px;

        height: 42px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 11px;

        font-size: 15px;

    }


    .kdmcall-step-icon.purple {

        background: #eee8ff;

        color: #7651d5;

    }


    .kdmcall-step-icon.dark {

        background: #eceaf1;

        color: #4c405f;

    }


    .kdmcall-step-icon.pink {

        background: #fbe8f2;

        color: #d84c8d;

    }


    /* =========================================================
                        STEP CONTENT - BIGGER
    ========================================================= */

    .kdmcall-step-content {

        min-width: 0;

    }


    .kdmcall-step-content small,
    .kdmcall-step-content strong,
    .kdmcall-step-content span {

        display: block;

    }


    .kdmcall-step-content small {

        margin-bottom: 4px;

        color: #a49bab;

        font-size: 7px;

        line-height: 1;

        letter-spacing: .8px;

    }


    .kdmcall-step-content strong {

        margin-bottom: 4px;

        color: #382a50;

        font-size: 10.5px;

        line-height: 1.25;

        font-weight: 650;

    }


    .kdmcall-step-content span {

        color: #8c8296;

        font-size: 8px;

        line-height: 1.35;

    }


    /* =========================================================
                        LIVE BADGE
    ========================================================= */

    .kdmcall-live-badge {

        padding:
            5px 7px;

        border-radius: 12px;

        background: #eee8ff;

        color: #7650d1;

        font-size: 6px;

        font-weight: 750;

    }


    .kdmcall-complete {

        color: #8059dc;

        font-size: 16px;

    }


    /* =========================================================
                        STEP ARROW
    ========================================================= */

    .kdmcall-step-arrow {

        width: 31px;

        height: 31px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background:
            linear-gradient(135deg,
                #6847be,
                #8b63e8);

        color: #ffffff;

        font-size: 10px;

    }


    /* =========================================================
                        PERFORMANCE
    ========================================================= */

    .kdmcall-performance {

        position: absolute;

        z-index: 13;

        right: 7px;

        bottom: 111px;

        width: 180px;

        display: grid;

        grid-template-columns:
            38px 1fr auto;

        align-items: center;

        gap: 9px;

        padding:
            11px;

        border:
            1px solid rgba(110, 77, 190, .10);

        border-radius: 14px;

        background:
            rgba(255, 255, 255, .98);

        box-shadow:

            0 13px 30px rgba(75, 53, 127, .10);

    }


    /* ICON */

    .kdmcall-performance-icon {

        width: 38px;

        height: 38px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 10px;

        background: #eee9fc;

        color: #7955d3;

        font-size: 14px;

    }


    .kdmcall-performance small {

        display: block;

        margin-bottom: 3px;

        color: #9d94a7;

        font-size: 6.5px;

        line-height: 1;

        letter-spacing: .4px;

    }


    .kdmcall-performance strong {

        display: block;

        color: #34274d;

        font-size: 15px;

        line-height: 1;

    }


    .kdmcall-performance>span {

        padding:
            5px 7px;

        border-radius: 10px;

        background: #fbe8f2;

        color: #d64b8b;

        font-size: 7px;

        font-weight: 650;

    }


    /* =========================================================
                        FLOAT ANIMATION
    ========================================================= */

    @keyframes kdmcallFloat {

        0%,
        100% {
            transform:
                translateY(0);
        }

        50% {
            transform:
                translateY(-7px);
        }

    }


    @keyframes kdmcallBottomFloat {

        0%,
        100% {

            transform:
                translateX(-50%) translateY(0);

        }

        50% {

            transform:
                translateX(-50%) translateY(-7px);

        }

    }


    /* =========================================================
                        TABLET
    ========================================================= */

    @media(max-width:1080px) {

        .kdmcall-container {

            grid-template-columns:
                minmax(0, 1fr) 455px;

            gap: 35px;

        }


        .kdmcall-visual {

            transform:
                scale(.88);

            transform-origin:
                center right;

        }

    }


    /* =========================================================
                        TABLET STACK
    ========================================================= */

    @media(max-width:850px) {

        .kdmcall-hero {

            padding:
                48px 20px;

        }


        .kdmcall-container {

            grid-template-columns: 1fr;

            gap: 30px;

        }


        .kdmcall-content {

            margin: 0 auto;

            text-align: center;

        }


        .kdmcall-label {

            margin-left: auto;

            margin-right: auto;

        }


        .kdmcall-description {

            margin-left: auto;

            margin-right: auto;

        }


        .kdmcall-buttons,
        .kdmcall-points {

            justify-content: center;

        }


        .kdmcall-visual {

            margin:
                0 auto;

            transform: none;

        }

    }


    /* =========================================================
                        MOBILE
    ========================================================= */

    @media(max-width:600px) {

        .kdmcall-hero {

            padding:
                36px 14px 28px;

        }


        .kdmcall-heading {

            font-size: 29px;

            line-height: 1.09;

            letter-spacing: -1px;

        }


        .kdmcall-description {

            font-size: 12.5px;

            line-height: 1.72;

        }


        /* BUTTONS SAME ROW */

        .kdmcall-buttons {

            width: 100%;

            max-width: 360px;

            margin:
                21px auto 0;

            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 8px;

        }


        .kdmcall-btn-primary,
        .kdmcall-btn-secondary {

            width: 100%;

            min-width: 0;

            min-height: 44px;

            padding:
                0 8px;

            gap: 6px;

            font-size: 9.8px;

            white-space: nowrap;

        }


        .kdmcall-points {

            gap:
                9px 13px;

        }


        .kdmcall-points>div {

            font-size: 8.8px;

        }


        /*
      VISUAL SMALLER AS A WHOLE,
      BUT INTERNAL CONTENT REMAINS BIG
    */

        .kdmcall-visual {

            min-height: 430px;

            transform:
                scale(.80);

            transform-origin:
                top center;

            margin-bottom: -80px;

        }

    }


    /* =========================================================
                        SMALL MOBILE
    ========================================================= */

    @media(max-width:390px) {

        .kdmcall-heading {

            font-size: 26px;

        }


        .kdmcall-buttons {

            gap: 6px;

        }


        .kdmcall-btn-primary,
        .kdmcall-btn-secondary {

            padding:
                0 5px;

            font-size: 8.9px;

        }


        .kdmcall-visual {

            width:
                calc(100% + 100px);

            margin-left: -50px;

            transform:
                scale(.71);

            margin-bottom: -125px;

        }

    }
</style>

<section class="kdmcall-hero">

    <!-- BACKGROUND ELEMENTS -->
    <div class="kdmcall-grid"></div>
    <div class="kdmcall-glow glow-purple"></div>
    <div class="kdmcall-glow glow-pink"></div>

    <div class="kdmcall-container">

        <!-- =================================================
             LEFT CONTENT
        ================================================== -->
        <div class="kdmcall-content">

            <div class="kdmcall-label">

                <span class="kdmcall-label-icon">
                    <i class="fa-solid fa-phone-volume"></i>
                </span>

                MISSED CALL SERVICE

            </div>


            <!-- HEADING -->
            <h1 class="kdmcall-heading">

                <span>
                    Turn Every Missed Call
                </span>

                <span class="kdmcall-heading-accent">
                    Into A Business Opportunity
                </span>

            </h1>


            <!-- DESCRIPTION -->
            <p class="kdmcall-description">

                Capture customer interest through a simple missed call.
                Automatically collect lead details, trigger smart follow-ups
                and connect potential customers with your business faster.

            </p>


            <!-- BUTTONS -->
            <div class="kdmcall-buttons">

                <a href="contact.php" class="kdmcall-btn-primary">

                    Get Started

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


                <a href="contact.php" class="kdmcall-btn-secondary">

                    <i class="fa-solid fa-phone"></i>

                    Request Demo

                </a>

            </div>


            <!-- POINTS -->
            <div class="kdmcall-points">

                <div>

                    <span>
                        <i class="fa-solid fa-check"></i>
                    </span>

                    Instant Lead Capture

                </div>


                <div>

                    <span>
                        <i class="fa-solid fa-check"></i>
                    </span>

                    Automated Callback

                </div>


                <div>

                    <span>
                        <i class="fa-solid fa-check"></i>
                    </span>

                    Live Tracking

                </div>

            </div>

        </div>



        <!-- =================================================
             RIGHT ANIMATION
        ================================================== -->
        <div class="kdmcall-visual">

            <!-- BACK PLATE -->
            <div class="kdmcall-visual-bg"></div>

            <!-- ANIMATED RINGS -->
            <div class="kdmcall-ring ring-one"></div>
            <div class="kdmcall-ring ring-two"></div>
            <div class="kdmcall-ring ring-three"></div>


            <!-- =================================================
                 LEFT CONNECTION
            ================================================== -->
            <div class="kdmcall-connector connector-left">
                <span></span>
            </div>


            <!-- RIGHT CONNECTION -->
            <div class="kdmcall-connector connector-right">
                <span></span>
            </div>


            <!-- BOTTOM CONNECTION -->
            <div class="kdmcall-connector connector-bottom">
                <span></span>
            </div>



            <!-- =================================================
                 MAIN CALL CARD
            ================================================== -->
            <div class="kdmcall-main-card">

                <div class="kdmcall-live">

                    <span></span>

                    LIVE CALL ACTIVITY

                </div>


                <!-- BIG CALL ICON -->
                <div class="kdmcall-call-area">

                    <div class="kdmcall-pulse pulse-1"></div>
                    <div class="kdmcall-pulse pulse-2"></div>

                    <div class="kdmcall-call-icon">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>

                </div>


                <!-- CALL CONTENT -->
                <div class="kdmcall-main-content">

                    <small>
                        INCOMING MISSED CALL
                    </small>

                    <strong>
                        +91 98XX XX3636
                    </strong>

                    <p>
                        Potential Customer
                    </p>

                </div>


                <!-- STATUS -->
                <div class="kdmcall-main-status">

                    <div>

                        <i class="fa-solid fa-circle-check"></i>

                        Call Detected

                    </div>

                    <strong>
                        00:02
                    </strong>

                </div>

            </div>



            <!-- =================================================
                 STEP 1
            ================================================== -->
            <div class="kdmcall-step-card step-call">

                <div class="kdmcall-step-icon purple">

                    <i class="fa-solid fa-phone-slash"></i>

                </div>


                <div class="kdmcall-step-content">

                    <small>
                        STEP 01
                    </small>

                    <strong>
                        Missed Call Received
                    </strong>

                    <span>
                        Customer intent detected
                    </span>

                </div>


                <div class="kdmcall-live-badge">
                    LIVE
                </div>

            </div>



            <!-- =================================================
                 STEP 2
            ================================================== -->
            <div class="kdmcall-step-card step-lead">

                <div class="kdmcall-step-icon dark">

                    <i class="fa-solid fa-user-plus"></i>

                </div>


                <div class="kdmcall-step-content">

                    <small>
                        STEP 02
                    </small>

                    <strong>
                        Lead Captured
                    </strong>

                    <span>
                        Contact saved automatically
                    </span>

                </div>


                <i class="fa-solid fa-circle-check kdmcall-complete"></i>

            </div>



            <!-- =================================================
                 STEP 3
            ================================================== -->
            <div class="kdmcall-step-card step-callback">

                <div class="kdmcall-step-icon pink">

                    <i class="fa-solid fa-headset"></i>

                </div>


                <div class="kdmcall-step-content">

                    <small>
                        STEP 03
                    </small>

                    <strong>
                        Callback Triggered
                    </strong>

                    <span>
                        Lead routed to your team
                    </span>

                </div>


                <div class="kdmcall-step-arrow">

                    <i class="fa-solid fa-arrow-right"></i>

                </div>

            </div>



            <!-- =================================================
                 PERFORMANCE
            ================================================== -->
            <div class="kdmcall-performance">

                <div class="kdmcall-performance-icon">

                    <i class="fa-solid fa-chart-line"></i>

                </div>


                <div>

                    <small>
                        LEAD CAPTURE RATE
                    </small>

                    <strong>
                        92%
                    </strong>

                </div>


                <span>
                    +12%
                </span>

            </div>

        </div>

    </div>

</section>