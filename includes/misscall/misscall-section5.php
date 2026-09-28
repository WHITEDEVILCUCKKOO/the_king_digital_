<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>
    /* =========================================================
 RESET
========================================================= */

    .mcseq-section,
    .mcseq-section * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION - REDUCED TOP/BOTTOM SPACE
========================================================= */

    .mcseq-section {

        position: relative;
        isolation: isolate;

        width: 100%;
        overflow: hidden;

        padding: 58px 28px;

        font-family: "Poppins", Arial, sans-serif;

        background:

            radial-gradient(circle at 92% 10%,
                rgba(130, 91, 219, .10),
                transparent 27%),

            radial-gradient(circle at 5% 92%,
                rgba(219, 79, 151, .05),
                transparent 26%),

            linear-gradient(135deg,
                #ffffff 0%,
                #fcfaff 52%,
                #f5f0ff 100%);

    }


    /* =========================================================
 GRID
========================================================= */

    .mcseq-bg-grid {

        position: absolute;
        inset: 0;
        z-index: 0;

        opacity: .045;
        pointer-events: none;

        background-image:

            linear-gradient(rgba(98, 67, 174, .25) 1px,
                transparent 1px),

            linear-gradient(90deg,
                rgba(98, 67, 174, .25) 1px,
                transparent 1px);

        background-size: 62px 62px;

    }


    /* =========================================================
 GLOW
========================================================= */

    .mcseq-glow {

        position: absolute;
        pointer-events: none;
        border-radius: 50%;
        filter: blur(100px);

    }


    .mcseq-glow-one {

        width: 360px;
        height: 360px;

        right: -170px;
        top: -170px;

        background:
            rgba(128, 87, 217, .09);

    }


    .mcseq-glow-two {

        width: 300px;
        height: 300px;

        left: -170px;
        bottom: -160px;

        background:
            rgba(218, 77, 149, .05);

    }


    /* =========================================================
 CONTAINER
========================================================= */

    .mcseq-container {

        position: relative;
        z-index: 3;

        width: 100%;
        max-width: 1320px;

        margin: 0 auto;

    }


    /* =========================================================
 HEADER
========================================================= */

    .mcseq-header {

        max-width: 760px;

        margin:
            0 auto 26px;

        text-align: center;

    }


    /* EYEBROW */

    .mcseq-eyebrow {

        width: max-content;

        margin:
            0 auto 12px;

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding:
            6px 14px 6px 7px;

        border:
            1px solid rgba(118, 81, 203, .10);

        border-radius: 30px;

        background: #f1ecff;

        color: #704ec6;

        font-size: 9px;

        line-height: 1;

        font-weight: 750;

        letter-spacing: 1.4px;

    }


    .mcseq-eyebrow>span {

        width: 28px;
        height: 28px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #ffffff;

        color: #7854d4;

    }


    /* =========================================================
 HEADER TITLE
========================================================= */

    .mcseq-header h2 {

        margin:
            0 0 12px;

        color: #291d3f;

        font-size:
            clamp(36px,
                3.4vw,
                48px);

        line-height: 1.12;

        font-weight: 730;

        letter-spacing: -1.5px;

    }


    .mcseq-header h2 span {

        display: block;

        margin-top: 4px;

        color: #7955d4;

    }


    .mcseq-header p {

        max-width: 690px;

        margin: 0 auto;

        color: #746d7d;

        font-size: 15px;

        line-height: 1.7;

    }


    /* =========================================================
 MAIN ANIMATION
========================================================= */

    .mcseq-animation {

        position: relative;

        width: 100%;

        min-height: 430px;

        display: grid;

        grid-template-columns:
            minmax(0, .92fr) 52px minmax(0, 1fr) 52px minmax(0, 1.35fr);

        align-items: center;

        gap: 5px;

        padding: 20px;

        overflow: hidden;

        border:
            1px solid rgba(116, 79, 201, .10);

        border-radius: 27px;

        background:

            linear-gradient(145deg,
                rgba(255, 255, 255, .97),
                rgba(249, 246, 255, .94));

        box-shadow:

            0 22px 55px rgba(64, 44, 105, .075);

    }


    /* =========================================================
 PANELS
========================================================= */

    .mcseq-panel {

        position: relative;
        z-index: 5;

        width: 100%;

        padding: 18px;

        border:
            1px solid #eae4f2;

        border-radius: 19px;

        background: #ffffff;

        box-shadow:

            0 14px 32px rgba(64, 44, 105, .06);

        opacity: 0;

        visibility: hidden;

        transform:
            translateY(14px) scale(.975);

        transition:

            opacity .45s ease,
            transform .45s ease,
            visibility .45s ease;

    }


    .mcseq-panel.is-visible {

        opacity: 1;

        visibility: visible;

        transform:
            translateY(0) scale(1);

    }


    /* OPEN EFFECT - FASTER */

    .mcseq-panel.is-opening {

        animation:
            mcseqPanelOpen .55s ease forwards;

    }


    @keyframes mcseqPanelOpen {

        0% {

            opacity: 0;

            transform:
                translateY(15px) scale(.97);

        }

        65% {

            transform:
                translateY(-2px) scale(1.006);

        }

        100% {

            opacity: 1;

            transform:
                translateY(0) scale(1);

        }

    }


    /* =========================================================
 PANEL HEIGHT
========================================================= */

    .mcseq-panel-one,
    .mcseq-panel-two,
    .mcseq-panel-three {

        min-height: 345px;

    }


    /* =========================================================
 PANEL HEADER
========================================================= */

    .mcseq-panel-head {

        display: flex;

        align-items: center;

        justify-content: space-between;

        gap: 12px;

        margin-bottom: 14px;

        text-align: left;

    }


    .mcseq-panel-head small,
    .mcseq-panel-head strong {

        display: block;

    }


    .mcseq-panel-head small {

        margin-bottom: 4px;

        color: #a198a9;

        font-size: 8px;

        font-weight: 700;

        letter-spacing: .8px;

    }


    .mcseq-panel-head strong {

        color: #3e2e52;

        font-size: 15px;

        line-height: 1.3;

        font-weight: 650;

    }


    /* =========================================================
 STATUS
========================================================= */

    .mcseq-status-live,
    .mcseq-status-auto,
    .mcseq-status-ready {

        padding:
            6px 9px;

        border-radius: 20px;

        background: #eee8ff;

        color: #7651d0;

        font-size: 7px;

        font-weight: 750;

    }


    .mcseq-status-live {

        animation:
            mcseqBlink 1.4s ease-in-out infinite;

    }


    @keyframes mcseqBlink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: .45;
        }

    }


    /* =========================================================
 CALL
========================================================= */

    .mcseq-call-wrap {

        position: relative;

        width: 98px;
        height: 98px;

        margin:
            2px auto 12px;

        display: flex;

        align-items: center;

        justify-content: center;

    }


    .mcseq-call-icon {

        position: relative;
        z-index: 5;

        width: 70px;
        height: 70px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background:

            linear-gradient(135deg,
                #6847bd,
                #9167e8);

        color: #ffffff;

        font-size: 24px;

        box-shadow:

            0 13px 28px rgba(104, 72, 188, .25);

        animation:
            mcseqPhoneMove 2.6s ease-in-out infinite;

    }


    @keyframes mcseqPhoneMove {

        0%,
        100% {

            transform:
                translateY(0) rotate(-2deg);

        }

        50% {

            transform:
                translateY(-4px) rotate(2deg);

        }

    }


    /* RINGS */

    .mcseq-call-ring {

        position: absolute;

        left: 50%;
        top: 50%;

        border:
            1px solid rgba(126, 89, 218, .24);

        border-radius: 50%;

        transform:
            translate(-50%, -50%);

    }


    .mcseq-call-ring.ring-one {

        width: 78px;
        height: 78px;

        animation:
            mcseqRing 2.5s ease-out infinite;

    }


    .mcseq-call-ring.ring-two {

        width: 91px;
        height: 91px;

        animation:
            mcseqRing 2.5s ease-out infinite .7s;

    }


    .mcseq-call-ring.ring-three {

        width: 103px;
        height: 103px;

        animation:
            mcseqRing 2.5s ease-out infinite 1.4s;

    }


    @keyframes mcseqRing {

        0% {

            opacity: .85;

            transform:
                translate(-50%, -50%) scale(.82);

        }

        100% {

            opacity: 0;

            transform:
                translate(-50%, -50%) scale(1.13);

        }

    }


    /* =========================================================
 CARD ONE TEXT
========================================================= */

    .mcseq-call-label {

        display: block;

        margin-bottom: 6px;

        color: #978da1;

        font-size: 8px;

        font-weight: 650;

        letter-spacing: .8px;

    }


    .mcseq-panel-one>h3 {

        margin:
            0 0 7px;

        color: #322248;

        font-size: 22px;

        line-height: 1.2;

        font-weight: 720;

    }


    .mcseq-card-desc {

        margin: 0;

        color: #7c7484;

        font-size: 12.5px;

        line-height: 1.58;

    }


    /* =========================================================
 INFO ROW
========================================================= */

    .mcseq-info-row {

        margin-top: 15px;

        display: grid;

        grid-template-columns:
            40px 1fr 25px;

        align-items: center;

        gap: 10px;

        padding: 10px;

        text-align: left;

        border-radius: 12px;

        background: #f6f2ff;

    }


    .mcseq-info-icon {

        width: 40px;
        height: 40px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 11px;

        background: #ebe4fb;

        color: #7853d3;

        font-size: 13px;

    }


    .mcseq-info-row small,
    .mcseq-info-row strong {

        display: block;

    }


    .mcseq-info-row small {

        margin-bottom: 3px;

        color: #a198a9;

        font-size: 6.5px;

        letter-spacing: .6px;

    }


    .mcseq-info-row strong {

        color: #4a385d;

        font-size: 10px;

    }


    .mcseq-check {

        width: 25px;
        height: 25px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #e8e0fa;

        color: #7651d0;

        font-size: 8px;

    }


    /* =========================================================
 BRIDGES
========================================================= */

    .mcseq-bridge {

        position: relative;
        z-index: 6;

        width: 100%;

        opacity: .30;

        transition:
            opacity .25s ease;

    }


    .mcseq-bridge.is-loading {

        opacity: 1;

    }


    /* TRACK */

    .mcseq-bridge-track {

        position: relative;

        width: 100%;
        height: 2px;

        overflow: hidden;

        background:

            linear-gradient(90deg,
                rgba(126, 89, 215, .07),
                rgba(126, 89, 215, .34),
                rgba(126, 89, 215, .07));

    }


    /* DOT */

    .mcseq-moving-dot {

        position: absolute;

        top: -3px;
        left: 0;

        width: 8px;
        height: 8px;

        border-radius: 50%;

        background: #8059db;

        box-shadow:

            0 0 0 5px rgba(128, 89, 219, .08);

        opacity: 0;

    }


    .mcseq-bridge.is-loading .mcseq-moving-dot {

        animation:
            mcseqPacket .72s linear infinite;

    }


    @keyframes mcseqPacket {

        0% {

            left: 0;
            opacity: 0;

        }

        15% {
            opacity: 1;
        }

        85% {
            opacity: 1;
        }

        100% {

            left:
                calc(100% - 8px);

            opacity: 0;

        }

    }


    /* LOADER TEXT */

    .mcseq-bridge-loading {

        margin-top: 7px;

        display: flex;

        align-items: center;

        justify-content: center;

        gap: 5px;

        opacity: 0;

        color: #7e6b98;

        font-size: 7.5px;

        font-weight: 600;

        transition:
            opacity .2s ease;

    }


    .mcseq-bridge.is-loading .mcseq-bridge-loading {

        opacity: 1;

    }


    /* SPINNER */

    .mcseq-spinner {

        width: 14px;
        height: 14px;

        border:
            2px solid #e1d9ef;

        border-top-color: #7954d3;

        border-radius: 50%;

        animation:
            mcseqSpin .55s linear infinite;

    }


    @keyframes mcseqSpin {

        to {
            transform: rotate(360deg);
        }

    }


    /* =========================================================
 ENGINE ICON
========================================================= */

    .mcseq-engine-icon {

        position: relative;

        width: 58px;
        height: 58px;

        margin:
            0 auto 10px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 16px;

        background:

            linear-gradient(135deg,
                #6746ba,
                #9067e7);

        color: #ffffff;

        font-size: 20px;

        box-shadow:

            0 11px 25px rgba(103, 70, 184, .20);

    }


    .mcseq-engine-pulse {

        position: absolute;

        inset: -6px;

        border:
            1px solid rgba(125, 87, 215, .22);

        border-radius: 21px;

        animation:
            mcseqEnginePulse 1.8s ease-in-out infinite;

    }


    @keyframes mcseqEnginePulse {

        0%,
        100% {

            opacity: .3;
            transform: scale(.96);

        }

        50% {

            opacity: .9;
            transform: scale(1.07);

        }

    }


    /* =========================================================
 ENGINE TITLE
========================================================= */

    .mcseq-engine-title {

        margin:
            0 0 7px;

        text-align: center;

        color: #38284e;

        font-size: 17px;

        line-height: 1.3;

        font-weight: 680;

    }


    .mcseq-panel-two>.mcseq-card-desc {

        text-align: center;

    }


    /* =========================================================
 PROCESS
========================================================= */

    .mcseq-steps {

        margin-top: 14px;

    }


    .mcseq-step {

        display: grid;

        grid-template-columns:
            37px 1fr 22px;

        align-items: center;

        gap: 9px;

    }


    .mcseq-step-icon {

        width: 37px;
        height: 37px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 10px;

        background: #f0ebfb;

        color: #7954d4;

        font-size: 12px;

    }


    .mcseq-step small,
    .mcseq-step strong {

        display: block;

    }


    .mcseq-step small {

        margin-bottom: 3px;

        color: #aaa1b1;

        font-size: 6px;

        letter-spacing: .6px;

    }


    .mcseq-step strong {

        color: #49385d;

        font-size: 10px;

    }


    .mcseq-step-check {

        width: 22px;
        height: 22px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #e9e2fa;

        color: #7853d3;

        font-size: 7px;

    }


    .mcseq-step-line {

        position: relative;

        width: 2px;
        height: 10px;

        margin:
            2px 0 2px 18px;

        overflow: hidden;

        background: #e4ddef;

    }


    .mcseq-step-line span {

        position: absolute;

        top: -8px;

        width: 100%;
        height: 8px;

        background: #7c57d4;

        animation:
            mcseqVerticalFlow 1.3s linear infinite;

    }


    @keyframes mcseqVerticalFlow {

        from {
            top: -8px;
        }

        to {
            top: 100%;
        }

    }


    /* =========================================================
 CARD 03
========================================================= */

    .mcseq-results-intro {

        margin:
            -1px 0 12px;

        color: #7b7383;

        font-size: 12px;

        line-height: 1.55;

    }


    /* =========================================================
 USE GRID
========================================================= */

    .mcseq-use-grid {

        display: grid;

        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 7px;

    }


    .mcseq-use-card {

        min-width: 0;

        display: grid;

        grid-template-columns:
            40px 1fr 22px;

        align-items: center;

        gap: 8px;

        padding: 9px;

        border:
            1px solid #eee9f3;

        border-radius: 12px;

        background: #fdfcff;

        transition:
            transform .3s ease,
            border-color .3s ease,
            box-shadow .3s ease;

    }


    .mcseq-use-card:hover {

        transform:
            translateY(-3px);

        border-color:
            rgba(120, 84, 209, .20);

        box-shadow:

            0 9px 22px rgba(66, 45, 108, .06);

    }


    /* ICON */

    .mcseq-use-icon {

        width: 40px;
        height: 40px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 11px;

        background: #eee8ff;

        color: #7651d0;

        font-size: 13px;

    }


    .mcseq-use-icon.pink {

        background: #fbe9f2;
        color: #d44f90;

    }


    .mcseq-use-icon.grey {

        background: #efedf2;
        color: #554760;

    }


    .mcseq-use-icon.rose {

        background: #fbeaf3;
        color: #cc4d8a;

    }


    .mcseq-use-icon.lavender {

        background: #eee8ff;
        color: #8259ce;

    }


    .mcseq-use-icon.soft {

        background: #f1eef5;
        color: #5c4d69;

    }


    /* =========================================================
 USE TEXT
========================================================= */

    .mcseq-use-card small,
    .mcseq-use-card strong,
    .mcseq-use-card span {

        display: block;

    }


    .mcseq-use-card small {

        margin-bottom: 3px;

        color: #aaa1b0;

        font-size: 6px;

    }


    .mcseq-use-card strong {

        margin-bottom: 3px;

        color: #433257;

        font-size: 10px;

        line-height: 1.3;

        font-weight: 650;

    }


    .mcseq-use-card span {

        color: #8c8393;

        font-size: 8px;

        line-height: 1.35;

    }


    .mcseq-use-check {

        width: 22px;
        height: 22px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #ebe4fa;

        color: #7954d4;

        font-size: 7px;

    }


    /* =========================================================
 LAPTOP
========================================================= */

    @media(max-width:1150px) {

        .mcseq-animation {

            grid-template-columns:
                minmax(0, .9fr) 38px minmax(0, 1fr) 38px minmax(0, 1.25fr);

            padding: 17px;

            gap: 4px;

        }


        .mcseq-panel {

            padding: 16px;

        }


        .mcseq-use-card {

            grid-template-columns:
                35px 1fr 19px;

            gap: 6px;

            padding: 7px;

        }


        .mcseq-use-icon {

            width: 35px;
            height: 35px;

        }


        .mcseq-use-card strong {

            font-size: 9px;

        }

    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:900px) {

        .mcseq-section {

            padding:
                48px 20px;

        }


        .mcseq-animation {

            max-width: 720px;

            min-height: auto;

            margin: 0 auto;

            grid-template-columns: 1fr;

            gap: 4px;

            padding: 15px;

        }


        .mcseq-panel {

            max-width: 590px;

            width: 100%;

            min-height: auto;

            margin: 0 auto;

        }


        /* VERTICAL BRIDGE */

        .mcseq-bridge {

            width: 2px;

            height: 34px;

            margin: 0 auto;

        }


        .mcseq-bridge-track {

            width: 2px;
            height: 34px;

            background:

                linear-gradient(180deg,
                    rgba(126, 89, 215, .07),
                    rgba(126, 89, 215, .30),
                    rgba(126, 89, 215, .07));

        }


        .mcseq-moving-dot {

            left: -3px;
            top: 0;

        }


        .mcseq-bridge.is-loading .mcseq-moving-dot {

            animation:
                mcseqPacketVertical .72s linear infinite;

        }


        @keyframes mcseqPacketVertical {

            0% {

                top: 0;
                opacity: 0;

            }

            15% {
                opacity: 1;
            }

            85% {
                opacity: 1;
            }

            100% {

                top:
                    calc(100% - 8px);

                opacity: 0;

            }

        }


        .mcseq-bridge-loading {

            position: absolute;

            left: 11px;

            top: 50%;

            width: max-content;

            margin: 0;

            transform:
                translateY(-50%);

        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        .mcseq-section {

            padding:
                40px 14px;

        }


        .mcseq-header {

            margin-bottom: 22px;

        }


        .mcseq-header h2 {

            font-size: 29px;

            line-height: 1.15;

        }


        .mcseq-header p {

            font-size: 13.5px;

            line-height: 1.65;

        }


        .mcseq-animation {

            padding: 11px;

            border-radius: 20px;

        }


        .mcseq-panel {

            padding: 15px;

            border-radius: 17px;

        }


        .mcseq-panel-head {

            margin-bottom: 12px;

        }


        .mcseq-panel-head strong {

            font-size: 14px;

        }


        .mcseq-card-desc {

            font-size: 12px;

        }


        .mcseq-panel-one>h3 {

            font-size: 20px;

        }


        .mcseq-use-grid {

            grid-template-columns: 1fr;

            gap: 6px;

        }


        .mcseq-use-card {

            grid-template-columns:
                40px 1fr 22px;

            padding: 9px;

        }


        .mcseq-use-icon {

            width: 40px;
            height: 40px;

        }


        .mcseq-use-card strong {

            font-size: 10.5px;

        }


        .mcseq-use-card span {

            font-size: 8px;

        }


        .mcseq-bridge {

            height: 28px;

        }


        .mcseq-bridge-track {

            height: 28px;

        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        .mcseq-section {

            padding:
                36px 12px;

        }


        .mcseq-header h2 {

            font-size: 26px;

        }


        .mcseq-animation {

            padding: 9px;

        }


        .mcseq-panel {

            padding: 13px;

        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        .mcseq-panel {

            opacity: 1 !important;

            visibility: visible !important;

            transform: none !important;

        }


        .mcseq-bridge {

            opacity: 1 !important;

        }


        .mcseq-call-icon,
        .mcseq-call-ring,
        .mcseq-engine-pulse,
        .mcseq-step-line span {

            animation: none !important;

        }

    }
</style>



<script>
    (function() {

        const sections = document.querySelectorAll('.mcseq-section');

        sections.forEach(function(section) {

            const card1 = section.querySelector('.mcseq-panel-one');
            const card2 = section.querySelector('.mcseq-panel-two');
            const card3 = section.querySelector('.mcseq-panel-three');

            const bridge1 = section.querySelector('.mcseq-bridge-one');
            const bridge2 = section.querySelector('.mcseq-bridge-two');

            let timers = [];


            /* =====================================================
               REDUCED MOTION
            ====================================================== */

            if (
                window.matchMedia &&
                window.matchMedia('(prefers-reduced-motion: reduce)').matches
            ) {

                card1.classList.add('is-visible');
                card2.classList.add('is-visible');
                card3.classList.add('is-visible');

                return;

            }


            function clearAllTimers() {

                timers.forEach(function(timer) {
                    clearTimeout(timer);
                });

                timers = [];

            }


            /* =====================================================
               RESET
            ====================================================== */

            function resetAnimation() {

                clearAllTimers();


                /* CARD 1 ALWAYS STARTS */
                card1.classList.add('is-visible');


                /* HIDE 2 & 3 */
                card2.classList.remove(
                    'is-visible',
                    'is-opening'
                );

                card3.classList.remove(
                    'is-visible',
                    'is-opening'
                );


                /* STOP LOADERS */
                bridge1.classList.remove('is-loading');
                bridge2.classList.remove('is-loading');


                /* =================================================
                   NEW FAST TIMELINE

                   0.00 sec  Card 1 visible

                   0.55 sec  Loader 1 starts
                   1.30 sec  Card 2 opens

                   1.95 sec  Loader 2 starts
                   2.75 sec  Card 3 opens

                   Card 3 remains visible for 6 seconds

                   8.75 sec  Restart from Card 1
                ================================================= */


                /* LOADER 1 */

                timers.push(

                    setTimeout(function() {

                        bridge1.classList.add('is-loading');

                    }, 550)

                );


                /* CARD 2 */

                timers.push(

                    setTimeout(function() {

                        bridge1.classList.remove('is-loading');

                        card2.classList.add(
                            'is-visible',
                            'is-opening'
                        );

                    }, 1300)

                );


                timers.push(

                    setTimeout(function() {

                        card2.classList.remove('is-opening');

                    }, 1900)

                );


                /* LOADER 2 */

                timers.push(

                    setTimeout(function() {

                        bridge2.classList.add('is-loading');

                    }, 1950)

                );


                /* CARD 3 */

                timers.push(

                    setTimeout(function() {

                        bridge2.classList.remove('is-loading');

                        card3.classList.add(
                            'is-visible',
                            'is-opening'
                        );

                    }, 2750)

                );


                timers.push(

                    setTimeout(function() {

                        card3.classList.remove('is-opening');

                    }, 3350)

                );


                /* =================================================
                   CARD 3 OPEN HONE KE BAAD
                   EXACTLY 6 SEC WAIT
                   THEN RESTART
                ================================================= */

                timers.push(

                    setTimeout(function() {

                        resetAnimation();

                    }, 8750)

                );

            }


            resetAnimation();

        });

    })();
</script>

<section class="mcseq-section">

    <div class="mcseq-bg-grid"></div>
    <div class="mcseq-glow mcseq-glow-one"></div>
    <div class="mcseq-glow mcseq-glow-two"></div>

    <div class="mcseq-container">

        <!-- =====================================================
             HEADER
        ====================================================== -->
        <div class="mcseq-header">

            <div class="mcseq-eyebrow">
                <span>
                    <i class="fa-solid fa-diagram-project"></i>
                </span>
                BUSINESS USE CASES
            </div>

            <h2>
                One Missed Call Can Start
                <span>Multiple Customer Journeys</span>
            </h2>

            <p>
                See how a simple missed call moves through an automated workflow
                and turns into different customer engagement actions for your business.
            </p>

        </div>


        <!-- =====================================================
             ANIMATION AREA
        ====================================================== -->
        <div class="mcseq-animation">


            <!-- =================================================
                 CARD 01
            ================================================== -->
            <div class="mcseq-panel mcseq-panel-one is-visible">

                <div class="mcseq-panel-head">

                    <div>
                        <small>STEP 01</small>
                        <strong>Customer Missed Call</strong>
                    </div>

                    <span class="mcseq-status-live">
                        LIVE
                    </span>

                </div>


                <div class="mcseq-call-wrap">

                    <div class="mcseq-call-ring ring-one"></div>
                    <div class="mcseq-call-ring ring-two"></div>
                    <div class="mcseq-call-ring ring-three"></div>

                    <div class="mcseq-call-icon">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>

                </div>


                <span class="mcseq-call-label">
                    INCOMING MISSED CALL
                </span>

                <h3>
                    +91 98XX XX5421
                </h3>

                <p class="mcseq-card-desc">
                    A potential customer gives a missed call to your
                    dedicated business number.
                </p>


                <div class="mcseq-info-row">

                    <div class="mcseq-info-icon">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div>
                        <small>CUSTOMER STATUS</small>
                        <strong>Interest Detected</strong>
                    </div>

                    <span class="mcseq-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                </div>

            </div>



            <!-- =================================================
                 LOADER 01
            ================================================== -->
            <div class="mcseq-bridge mcseq-bridge-one">

                <div class="mcseq-bridge-track">
                    <span class="mcseq-moving-dot"></span>
                </div>

                <div class="mcseq-bridge-loading">

                    <div class="mcseq-spinner"></div>

                    <span>
                        Processing
                    </span>

                </div>

            </div>



            <!-- =================================================
                 CARD 02
            ================================================== -->
            <div class="mcseq-panel mcseq-panel-two">

                <div class="mcseq-panel-head">

                    <div>
                        <small>STEP 02</small>
                        <strong>Smart Automation</strong>
                    </div>

                    <span class="mcseq-status-auto">
                        AUTO
                    </span>

                </div>


                <div class="mcseq-engine-icon">

                    <div class="mcseq-engine-pulse"></div>

                    <i class="fa-solid fa-bolt"></i>

                </div>


                <h3 class="mcseq-engine-title">
                    Lead Routing Engine
                </h3>

                <p class="mcseq-card-desc">
                    The caller number is captured, converted into a lead
                    and routed into your business workflow automatically.
                </p>


                <div class="mcseq-steps">

                    <div class="mcseq-step">

                        <span class="mcseq-step-icon">
                            <i class="fa-solid fa-phone"></i>
                        </span>

                        <div>
                            <small>PROCESS 01</small>
                            <strong>Call Captured</strong>
                        </div>

                        <i class="fa-solid fa-check mcseq-step-check"></i>

                    </div>


                    <div class="mcseq-step-line">
                        <span></span>
                    </div>


                    <div class="mcseq-step">

                        <span class="mcseq-step-icon">
                            <i class="fa-solid fa-user-plus"></i>
                        </span>

                        <div>
                            <small>PROCESS 02</small>
                            <strong>Lead Created</strong>
                        </div>

                        <i class="fa-solid fa-check mcseq-step-check"></i>

                    </div>


                    <div class="mcseq-step-line">
                        <span></span>
                    </div>


                    <div class="mcseq-step">

                        <span class="mcseq-step-icon">
                            <i class="fa-solid fa-gears"></i>
                        </span>

                        <div>
                            <small>PROCESS 03</small>
                            <strong>Workflow Triggered</strong>
                        </div>

                        <i class="fa-solid fa-check mcseq-step-check"></i>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 LOADER 02
            ================================================== -->
            <div class="mcseq-bridge mcseq-bridge-two">

                <div class="mcseq-bridge-track">
                    <span class="mcseq-moving-dot"></span>
                </div>

                <div class="mcseq-bridge-loading">

                    <div class="mcseq-spinner"></div>

                    <span>
                        Routing
                    </span>

                </div>

            </div>



            <!-- =================================================
                 CARD 03
            ================================================== -->
            <div class="mcseq-panel mcseq-panel-three">

                <div class="mcseq-panel-head">

                    <div>
                        <small>STEP 03</small>
                        <strong>Customer Journey Activated</strong>
                    </div>

                    <span class="mcseq-status-ready">
                        READY
                    </span>

                </div>


                <p class="mcseq-results-intro">
                    Route the captured lead into the action that matches
                    your campaign or business requirement.
                </p>


                <div class="mcseq-use-grid">


                    <div class="mcseq-use-card">

                        <div class="mcseq-use-icon">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>

                        <div>
                            <small>01</small>
                            <strong>Lead Generation</strong>
                            <span>Capture interested customers</span>
                        </div>

                        <i class="fa-solid fa-check mcseq-use-check"></i>

                    </div>


                    <div class="mcseq-use-card">

                        <div class="mcseq-use-icon pink">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div>
                            <small>02</small>
                            <strong>Callback Request</strong>
                            <span>Connect leads with your team</span>
                        </div>

                        <i class="fa-solid fa-check mcseq-use-check"></i>

                    </div>


                    <div class="mcseq-use-card">

                        <div class="mcseq-use-icon grey">
                            <i class="fa-solid fa-ticket"></i>
                        </div>

                        <div>
                            <small>03</small>
                            <strong>Campaign Registration</strong>
                            <span>Easy campaign participation</span>
                        </div>

                        <i class="fa-solid fa-check mcseq-use-check"></i>

                    </div>


                    <div class="mcseq-use-card">

                        <div class="mcseq-use-icon rose">
                            <i class="fa-solid fa-square-poll-vertical"></i>
                        </div>

                        <div>
                            <small>04</small>
                            <strong>Feedback & Polls</strong>
                            <span>Collect customer responses</span>
                        </div>

                        <i class="fa-solid fa-check mcseq-use-check"></i>

                    </div>


                    <div class="mcseq-use-card">

                        <div class="mcseq-use-icon lavender">
                            <i class="fa-solid fa-headset"></i>
                        </div>

                        <div>
                            <small>05</small>
                            <strong>Customer Support</strong>
                            <span>Start a support request</span>
                        </div>

                        <i class="fa-solid fa-check mcseq-use-check"></i>

                    </div>


                    <div class="mcseq-use-card">

                        <div class="mcseq-use-icon soft">
                            <i class="fa-solid fa-bell"></i>
                        </div>

                        <div>
                            <small>06</small>
                            <strong>Information Request</strong>
                            <span>Trigger automated updates</span>
                        </div>

                        <i class="fa-solid fa-check mcseq-use-check"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>