

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
    /* =========================================================
 RESET + VARIABLES
========================================================= */

    #kdav-final,
    #kdav-final * {
        box-sizing: border-box;
    }

    #kdav-final {
        --orange: #f47b20;
        --orange-light: #ff9347;
        --orange-dark: #dc6211;

        --navy: #060f3e;
        --navy-2: #0b2148;
        --navy-3: #123766;

        --text: #5f6878;
        --border: #e2e7ed;

        position: relative;
        width: 100%;
        overflow: hidden;

        padding: 68px 50px 70px;

        /*   */

        background:
            radial-gradient(circle at 88% 15%,
                rgba(244, 123, 32, .11),
                transparent 29%),
            radial-gradient(circle at 7% 92%,
                rgba(6, 15, 62, .05),
                transparent 29%),
            linear-gradient(115deg,
                #ffffff 0%,
                #fbfcfd 48%,
                #f5f7f9 100%);
    }


    /* =========================================================
 BACKGROUND DECORATION
========================================================= */

    #kdav-final::before {
        content: "";

        position: absolute;
        right: -125px;
        top: -205px;

        width: 390px;
        height: 390px;

        border-radius: 50%;

        border: 2px dashed rgba(244, 123, 32, .11);

        pointer-events: none;

        animation: kdavOuterRotate 35s linear infinite;
    }

    #kdav-final::after {
        content: "";

        position: absolute;
        left: -45px;
        bottom: -55px;

        width: 170px;
        height: 170px;

        opacity: .45;

        background-image:
            radial-gradient(rgba(6, 15, 62, .18) 1.3px,
                transparent 1.3px);

        background-size: 17px 17px;

        pointer-events: none;
    }

    @keyframes kdavOuterRotate {
        to {
            transform: rotate(360deg);
        }
    }


    /* =========================================================
 CONTAINER
========================================================= */

    #kdav-final .kdav-container {
        position: relative;
        z-index: 5;

        width: 100%;
        max-width: 1440px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(0, 1fr) minmax(0, 1fr);

        align-items: center;

        gap: 72px;
    }


    /* =========================================================
 LEFT CONTENT
========================================================= */

    #kdav-final .kdav-left {
        width: 100%;
        max-width: 700px;

        overflow: visible;
    }


    /* =========================================================
 BADGE
========================================================= */

    #kdav-final .kdav-badge {
        width: max-content;

        display: inline-flex;
        align-items: center;

        gap: 8px;

        margin-bottom: 21px;

        padding: 8px 13px;

        border-radius: 50px;

        color: var(--orange);

        font-size: 11px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .055em;

        background: rgba(255, 255, 255, .94);

        border: 1px solid rgba(244, 123, 32, .22);

        box-shadow:
            0 7px 20px rgba(6, 15, 62, .045);
    }

    #kdav-final .kdav-badge i {
        width: 20px;
        height: 20px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex: 0 0 20px;

        border-radius: 50%;

        color: #ffffff;

        font-size: 8px;

        background:
            linear-gradient(135deg,
                var(--orange),
                var(--orange-light));
    }


    /* =========================================================
 MAIN HEADING
 CHARACTER CUT FIXED
========================================================= */

    #kdav-final .kdav-title {
        display: block;

        margin: 0;

        padding: 4px 0 7px;

        overflow: visible !important;

        color: var(--navy);

        /*  fon */

        font-size: 56px;
        line-height: 1.16;

        font-weight: 800;

        letter-spacing: -2.1px;
    }

    #kdav-final .kdav-title .kdav-title-dark {
        display: block;

        padding: 2px 0 4px;

        line-height: 1.17;

        overflow: visible !important;
    }

    #kdav-final .kdav-title .kdav-title-gradient {
        display: block;

        position: relative;

        margin-top: -1px;

        padding: 3px 2px 7px 0;

        line-height: 1.19;

        overflow: visible !important;

        background:
            linear-gradient(90deg,
                #e96512 0%,
                #f47b20 48%,
                #ff9347 100%);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;

        color: transparent;
    }


    /* =========================================================
 DESCRIPTION
========================================================= */

    #kdav-final .kdav-desc {
        max-width: 650px;

        margin: 17px 0 0;

        color: var(--text);

        font-size: 15px;
        line-height: 1.72;

        font-weight: 500;
    }

    #kdav-final .kdav-desc strong {
        color: var(--navy-2);

        font-weight: 700;
    }


    /* =========================================================
 FEATURES
========================================================= */

    #kdav-final .kdav-features {
        display: flex;
        align-items: center;
        flex-wrap: wrap;

        gap: 10px 18px;

        margin-top: 21px;
    }

    #kdav-final .kdav-feature {
        display: flex;
        align-items: center;

        gap: 7px;

        color: #465267;

        font-size: 12px;
        line-height: 1.3;

        font-weight: 700;
    }

    #kdav-final .kdav-feature i {
        width: 20px;
        height: 20px;

        flex: 0 0 20px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        color: var(--orange);

        font-size: 8px;

        background: #ffffff;

        border: 1px solid rgba(244, 123, 32, .25);
    }


    /* =========================================================
 BUTTONS
========================================================= */

    #kdav-final .kdav-buttons {
        display: flex;
        align-items: center;

        gap: 12px;

        margin-top: 27px;
    }

    #kdav-final .kdav-btn {
        min-height: 51px;

        padding: 0 23px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 9px;

        border-radius: 9px;

         

        font-size: 12px;
        line-height: 1;

        font-weight: 800;

        text-decoration: none !important;

        transition:
            transform .28s ease,
            box-shadow .28s ease,
            border-color .28s ease,
            color .28s ease;
    }


    /* PRIMARY */

    #kdav-final .kdav-btn-primary {
        color: #ffffff !important;

        background:
            linear-gradient(135deg,
                #e96512,
                #f47b20 55%,
                #ff8e3f);

        box-shadow:
            0 11px 25px rgba(244, 123, 32, .23);
    }

    #kdav-final .kdav-btn-primary:hover {
        transform: translateY(-3px);

        box-shadow:
            0 16px 32px rgba(244, 123, 32, .32);
    }

    #kdav-final .kdav-btn-primary i {
        transition: transform .28s ease;
    }

    #kdav-final .kdav-btn-primary:hover i {
        transform: translateX(3px);
    }


    /* SECONDARY */

    #kdav-final .kdav-btn-secondary {
        color: var(--navy) !important;

        background: #ffffff;

        border: 1px solid #d9dfe6;

        box-shadow:
            0 6px 17px rgba(6, 15, 62, .035);
    }

    #kdav-final .kdav-btn-secondary:hover {
        color: var(--orange) !important;

        transform: translateY(-3px);

        border-color: rgba(244, 123, 32, .30);

        box-shadow:
            0 11px 25px rgba(6, 15, 62, .08);
    }


    /* =========================================================
 RIGHT VISUAL
========================================================= */

    #kdav-final .kdav-right {
        position: relative;

        width: 100%;
        min-height: 455px;

        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* =========================================================
 ORBIT
========================================================= */

    #kdav-final .kdav-orbit {
        position: absolute;

        width: 390px;
        height: 390px;

        border-radius: 50%;

        border: 1px dashed rgba(244, 123, 32, .20);

        animation: kdavOrbit 30s linear infinite;
    }

    #kdav-final .kdav-orbit::before {
        content: "";

        position: absolute;

        width: 9px;
        height: 9px;

        top: 46px;
        left: 66px;

        border-radius: 50%;

        background: var(--orange);

        box-shadow:
            0 0 0 6px rgba(244, 123, 32, .11);
    }

    #kdav-final .kdav-orbit::after {
        content: "";

        position: absolute;

        width: 8px;
        height: 8px;

        right: 44px;
        bottom: 67px;

        border-radius: 50%;

        background: var(--navy-2);

        box-shadow:
            0 0 0 5px rgba(6, 15, 62, .06);
    }

    @keyframes kdavOrbit {
        to {
            transform: rotate(360deg);
        }
    }


    /* =========================================================
 AI STUDIO
========================================================= */

    #kdav-final .kdav-studio {
        position: relative;
        z-index: 5;

        width: 445px;

        overflow: hidden;

        border-radius: 17px;

        background: #ffffff;

        border: 1px solid rgba(6, 15, 62, .11);

        box-shadow:
            0 27px 58px rgba(6, 15, 62, .16),
            0 4px 13px rgba(6, 15, 62, .05);
    }


    /* =========================================================
 STUDIO HEADER
========================================================= */

    #kdav-final .kdav-studio-header {
        min-height: 59px;

        padding: 0 15px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 10px;

        border-bottom: 1px solid #e9edf1;
    }

    #kdav-final .kdav-brand {
        display: flex;
        align-items: center;

        gap: 9px;

        min-width: 0;
    }

    #kdav-final .kdav-logo {
        width: 34px;
        height: 34px;

        flex: 0 0 34px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        color: #ffffff;

        font-size: 12px;

        background:
            linear-gradient(135deg,
                var(--navy),
                var(--orange));

        box-shadow:
            0 6px 14px rgba(6, 15, 62, .13);
    }

    #kdav-final .kdav-brand-copy {
        min-width: 0;

        display: flex;
        flex-direction: column;

        gap: 3px;
    }

    #kdav-final .kdav-brand-copy strong {
        color: var(--navy);

        font-size: 12px;
        line-height: 1.2;

        font-weight: 800;
    }

    #kdav-final .kdav-brand-copy span {
        color: #76808e;

        font-size: 9px;
        line-height: 1.3;

        font-weight: 600;
    }


    /* STATUS */

    #kdav-final .kdav-status {
        flex: 0 0 auto;

        display: flex;
        align-items: center;

        gap: 6px;

        padding: 7px 9px;

        border-radius: 7px;

        color: var(--orange);

        font-size: 8px;
        line-height: 1;

        font-weight: 800;

        background: #fff3eb;

        border: 1px solid rgba(244, 123, 32, .12);
    }

    #kdav-final .kdav-status-dot {
        width: 6px;
        height: 6px;

        flex: 0 0 6px;

        border-radius: 50%;

        background: var(--orange);

        animation: kdavBlink 1.25s ease-in-out infinite;
    }

    @keyframes kdavBlink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: .25;
        }
    }


    /* =========================================================
 EDITOR
========================================================= */

    #kdav-final .kdav-editor {
        display: grid;

        grid-template-columns:
            minmax(0, 1fr) 118px;

        gap: 9px;

        padding: 11px;
    }


    /* =========================================================
 PREVIEW
========================================================= */

    #kdav-final .kdav-preview {
        position: relative;

        height: 260px;

        overflow: hidden;

        border-radius: 11px;

        background: var(--navy);
    }

    #kdav-final .kdav-preview-bg {
        position: absolute;
        inset: 0;

        background:
            radial-gradient(circle at 79% 25%,
                rgba(244, 123, 32, .66),
                transparent 29%),
            radial-gradient(circle at 17% 82%,
                rgba(255, 147, 71, .22),
                transparent 34%),
            linear-gradient(135deg,
                #040b29 0%,
                #071c43 50%,
                #103766 100%);

        animation:
            kdavSceneMove 8s ease-in-out infinite alternate;
    }

    @keyframes kdavSceneMove {
        from {
            transform: scale(1);
        }

        to {
            transform: scale(1.05);
        }
    }


    /* =========================================================
 ABSTRACT ELEMENTS
========================================================= */

    #kdav-final .kdav-shape-one,
    #kdav-final .kdav-shape-two,
    #kdav-final .kdav-shape-three {
        position: absolute;

        border-radius: 50%;

        pointer-events: none;
    }

    #kdav-final .kdav-shape-one {
        width: 155px;
        height: 155px;

        right: -53px;
        top: -51px;

        background:
            linear-gradient(145deg,
                rgba(244, 123, 32, .66),
                rgba(244, 123, 32, .03));

        animation:
            kdavShapeOne 7s ease-in-out infinite;
    }

    #kdav-final .kdav-shape-two {
        width: 110px;
        height: 110px;

        left: -39px;
        bottom: -36px;

        border: 1px solid rgba(255, 255, 255, .18);

        animation:
            kdavShapeTwo 8s ease-in-out infinite;
    }

    #kdav-final .kdav-shape-three {
        width: 62px;
        height: 62px;

        right: 33px;
        bottom: 35px;

        border: 1px solid rgba(255, 147, 71, .40);

        animation:
            kdavShapeThree 5s ease-in-out infinite;
    }

    @keyframes kdavShapeOne {
        50% {
            transform:
                translate(-14px, 15px) scale(1.08);
        }
    }

    @keyframes kdavShapeTwo {
        50% {
            transform:
                translate(18px, -10px);
        }
    }

    @keyframes kdavShapeThree {
        50% {
            transform: scale(1.18);
        }
    }


    /* =========================================================
 PREVIEW TOP LABELS
========================================================= */

    #kdav-final .kdav-generating {
        position: absolute;
        z-index: 8;

        left: 10px;
        top: 10px;

        display: flex;
        align-items: center;

        gap: 6px;

        padding: 6px 8px;

        border-radius: 6px;

        color: #ffffff;

        font-size: 8px;
        line-height: 1;

        font-weight: 800;

        background: rgba(4, 11, 41, .70);

        border: 1px solid rgba(255, 255, 255, .13);

        backdrop-filter: blur(7px);
    }

    #kdav-final .kdav-generating i {
        color: var(--orange-light);
    }

    #kdav-final .kdav-resolution {
        position: absolute;
        z-index: 8;

        right: 10px;
        top: 10px;

        padding: 6px 7px;

        border-radius: 5px;

        color: #ffffff;

        font-size: 7px;
        line-height: 1;

        font-weight: 800;

        background: rgba(4, 11, 41, .70);

        border: 1px solid rgba(255, 255, 255, .09);
    }


    /* =========================================================
 PREVIEW COPY
========================================================= */

    #kdav-final .kdav-video-copy {
        position: absolute;
        z-index: 5;

        left: 22px;
        right: 17px;

        top: 50%;

        transform: translateY(-50%);
    }

    #kdav-final .kdav-video-label {
        display: flex;
        align-items: center;

        gap: 6px;

        margin-bottom: 9px;

        color: #ffd1b5;

        font-size: 9px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .10em;
    }

    #kdav-final .kdav-video-label::before {
        content: "";

        width: 19px;
        height: 2px;

        border-radius: 10px;

        background: var(--orange);
    }

    #kdav-final .kdav-video-title {
        max-width: 235px;

        margin: 0;

        padding: 2px 0 4px;

        overflow: visible;

        color: #ffffff;

        font-size: 29px;
        line-height: 1.13;

        font-weight: 800;

        letter-spacing: -.8px;

        animation:
            kdavPreviewText 6s ease-in-out infinite;
    }

    #kdav-final .kdav-video-title span {
        display: block;

        padding-bottom: 2px;

        color: #ff9c60;
    }

    #kdav-final .kdav-video-desc {
        max-width: 245px;

        margin-top: 11px;

        color: rgba(255, 255, 255, .80);

        font-size: 12px;
        line-height: 1.55;

        font-weight: 500;
    }

    @keyframes kdavPreviewText {

        0%,
        100% {
            transform: translateY(4px);
            opacity: .82;
        }

        20%,
        75% {
            transform: translateY(0);
            opacity: 1;
        }
    }


    /* =========================================================
 SCAN LINE
========================================================= */

    #kdav-final .kdav-scan {
        position: absolute;
        z-index: 7;

        left: 0;
        right: 0;

        height: 1px;

        background:
            linear-gradient(90deg,
                transparent,
                rgba(244, 123, 32, .65),
                #ffffff,
                rgba(244, 123, 32, .65),
                transparent);

        box-shadow:
            0 0 12px rgba(244, 123, 32, .50);

        animation:
            kdavScan 4s ease-in-out infinite;
    }

    @keyframes kdavScan {
        0% {
            top: 12%;
            opacity: 0;
        }

        15% {
            opacity: 1;
        }

        80% {
            opacity: 1;
        }

        100% {
            top: 88%;
            opacity: 0;
        }
    }


    /* =========================================================
 AUDIO WAVE
========================================================= */

    #kdav-final .kdav-wave {
        position: absolute;
        z-index: 9;

        left: 11px;
        bottom: 11px;

        height: 17px;

        display: flex;
        align-items: center;

        gap: 2px;
    }

    #kdav-final .kdav-wave span {
        width: 2px;
        height: 5px;

        border-radius: 3px;

        background: var(--orange-light);

        animation:
            kdavWave .75s ease-in-out infinite alternate;
    }

    #kdav-final .kdav-wave span:nth-child(2) {
        height: 10px;
        animation-delay: .08s;
    }

    #kdav-final .kdav-wave span:nth-child(3) {
        height: 15px;
        animation-delay: .16s;
    }

    #kdav-final .kdav-wave span:nth-child(4) {
        height: 8px;
        animation-delay: .24s;
    }

    #kdav-final .kdav-wave span:nth-child(5) {
        height: 13px;
        animation-delay: .32s;
    }

    #kdav-final .kdav-wave span:nth-child(6) {
        height: 7px;
        animation-delay: .40s;
    }

    #kdav-final .kdav-wave span:nth-child(7) {
        height: 12px;
        animation-delay: .48s;
    }

    #kdav-final .kdav-wave span:nth-child(8) {
        height: 8px;
        animation-delay: .56s;
    }

    @keyframes kdavWave {
        to {
            transform: scaleY(.4);
        }
    }


    /* =========================================================
 RIGHT CONTROLS
========================================================= */

    #kdav-final .kdav-controls {
        display: flex;
        flex-direction: column;

        gap: 7px;
    }

    #kdav-final .kdav-control {
        padding: 9px 8px;

        border-radius: 8px;

        border: 1px solid #e7ebef;

        background: #fafbfc;
    }

    #kdav-final .kdav-control-row {
        display: flex;
        align-items: center;

        gap: 7px;
    }

    #kdav-final .kdav-control-icon {
        width: 27px;
        height: 27px;

        flex: 0 0 27px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 7px;

        color: var(--orange);

        font-size: 9px;

        background: #fff0e7;
    }

    #kdav-final .kdav-control:nth-child(2) .kdav-control-icon {
        color: var(--navy-2);

        background: #e9eef5;
    }

    #kdav-final .kdav-control:nth-child(3) .kdav-control-icon {
        color: var(--orange-dark);

        background: #fff1e9;
    }

    #kdav-final .kdav-control-copy {
        min-width: 0;
    }

    #kdav-final .kdav-control-copy strong {
        display: block;

        color: var(--navy);

        font-size: 9px;
        line-height: 1.2;

        font-weight: 800;
    }

    #kdav-final .kdav-control-copy span {
        display: block;

        margin-top: 3px;

        color: #76808e;

        font-size: 8px;
        line-height: 1.3;

        font-weight: 600;
    }


    /* =========================================================
 CONTROL PROGRESS
========================================================= */

    #kdav-final .kdav-progress {
        width: 100%;
        height: 4px;

        margin-top: 8px;

        overflow: hidden;

        border-radius: 20px;

        background: #e4e8ec;
    }

    #kdav-final .kdav-progress span {
        display: block;

        width: 10%;
        height: 100%;

        border-radius: inherit;

        background:
            linear-gradient(90deg,
                var(--navy-2),
                var(--orange));

        animation:
            kdavProgress 4.5s ease-in-out infinite;
    }

    #kdav-final .kdav-control:nth-child(2) .kdav-progress span {
        animation-delay: .35s;
    }

    #kdav-final .kdav-control:nth-child(3) .kdav-progress span {
        animation-delay: .70s;
    }

    @keyframes kdavProgress {
        0% {
            width: 10%;
        }

        55%,
        80% {
            width: 100%;
        }

        100% {
            width: 10%;
        }
    }


    /* =========================================================
 FORMAT
========================================================= */

    #kdav-final .kdav-format {
        padding: 8px;

        border-radius: 8px;

        background: #ffffff;

        border: 1px solid #e7ebef;
    }

    #kdav-final .kdav-format-title {
        margin-bottom: 7px;

        color: #727d8b;

        font-size: 8px;
        line-height: 1;

        font-weight: 800;
    }

    #kdav-final .kdav-format-row {
        display: flex;

        gap: 4px;
    }

    #kdav-final .kdav-format-item {
        flex: 1;

        padding: 6px 2px;

        text-align: center;

        border-radius: 5px;

        color: #606b79;

        font-size: 7px;
        line-height: 1;

        font-weight: 700;

        border: 1px solid #e2e6eb;
    }

    #kdav-final .kdav-format-item.active {
        color: var(--orange);

        background: #fff1e9;

        border-color: rgba(244, 123, 32, .30);
    }


    /* =========================================================
 TIMELINE
========================================================= */

    #kdav-final .kdav-timeline {
        margin: 0 11px 11px;

        padding: 9px;

        border-radius: 9px;

        background: #f8f9fa;

        border: 1px solid #e7ebef;
    }

    #kdav-final .kdav-time-head {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-bottom: 7px;

        color: #687484;

        font-size: 8px;
        line-height: 1;

        font-weight: 800;
    }

    #kdav-final .kdav-track-wrap {
        position: relative;
    }

    #kdav-final .kdav-track {
        display: flex;

        gap: 4px;

        height: 22px;
    }

    #kdav-final .kdav-clip {
        position: relative;

        height: 100%;

        overflow: hidden;

        border-radius: 4px;
    }

    #kdav-final .kdav-c1 {
        width: 24%;
        background: #dce4ec;
    }

    #kdav-final .kdav-c2 {
        width: 34%;
        background: #ffe1d0;
    }

    #kdav-final .kdav-c3 {
        width: 21%;
        background: #dbe4ec;
    }

    #kdav-final .kdav-c4 {
        width: 21%;
        background: #ffeadf;
    }

    #kdav-final .kdav-clip::before {
        content: "";

        position: absolute;

        left: 4px;
        right: 4px;

        top: 50%;

        height: 7px;

        transform: translateY(-50%);

        background:
            repeating-linear-gradient(90deg,
                rgba(6, 15, 62, .25) 0 2px,
                transparent 2px 6px);
    }


    /* PLAYHEAD */

    #kdav-final .kdav-playhead {
        position: absolute;
        z-index: 6;

        top: -3px;
        left: 3%;

        width: 2px;
        height: 29px;

        background: var(--orange);

        animation:
            kdavPlayhead 6s linear infinite;
    }

    #kdav-final .kdav-playhead::before {
        content: "";

        position: absolute;

        width: 7px;
        height: 7px;

        left: -2.5px;
        top: 0;

        border-radius: 2px;

        background: var(--orange);
    }

    @keyframes kdavPlayhead {
        from {
            left: 3%;
        }

        to {
            left: 97%;
        }
    }


    /* =========================================================
 FLOATING CARDS
========================================================= */

    #kdav-final .kdav-float {
        position: absolute;
        z-index: 12;

        display: flex;
        align-items: center;

        gap: 8px;

        padding: 9px 11px;

        border-radius: 10px;

        background: rgba(255, 255, 255, .97);

        border: 1px solid rgba(6, 15, 62, .10);

        box-shadow:
            0 13px 29px rgba(6, 15, 62, .13);
    }

    #kdav-final .kdav-float-icon {
        width: 30px;
        height: 30px;

        flex: 0 0 30px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 8px;

        font-size: 10px;
    }

    #kdav-final .kdav-float-copy strong {
        display: block;

        color: var(--navy);

        font-size: 10px;
        line-height: 1.2;

        font-weight: 800;
    }

    #kdav-final .kdav-float-copy span {
        display: block;

        margin-top: 3px;

        color: #707a88;

        font-size: 8px;
        line-height: 1.3;

        font-weight: 600;
    }


    /* SCRIPT */

    #kdav-final .kdav-float-script {
        left: 7px;
        top: 69px;

        animation:
            kdavFloatOne 4s ease-in-out infinite;
    }

    #kdav-final .kdav-float-script .kdav-float-icon {
        color: var(--orange);

        background: #fff0e7;
    }


    /* VOICE */

    #kdav-final .kdav-float-voice {
        right: 4px;
        top: 153px;

        animation:
            kdavFloatTwo 4.8s ease-in-out infinite;
    }

    #kdav-final .kdav-float-voice .kdav-float-icon {
        color: var(--navy-2);

        background: #e9eef5;
    }


    /* EXPORT */

    #kdav-final .kdav-float-export {
        right: 13px;
        bottom: 57px;

        animation:
            kdavFloatThree 5.2s ease-in-out infinite;
    }

    #kdav-final .kdav-float-export .kdav-float-icon {
        color: var(--orange);

        background: #fff0e7;
    }


    @keyframes kdavFloatOne {
        50% {
            transform: translateY(-6px);
        }
    }

    @keyframes kdavFloatTwo {
        50% {
            transform: translateY(6px);
        }
    }

    @keyframes kdavFloatThree {
        50% {
            transform: translateY(-6px);
        }
    }


    /* =========================================================
 RESPONSIVE — LAPTOP
========================================================= */

    @media(max-width:1250px) {

        #kdav-final {
            padding:
                62px 36px 64px;
        }

        #kdav-final .kdav-container {
            gap: 48px;
        }

        #kdav-final .kdav-title {
            font-size: 49px;
            line-height: 1.17;

            letter-spacing: -1.7px;
        }

        #kdav-final .kdav-title .kdav-title-dark {
            line-height: 1.18;
        }

        #kdav-final .kdav-title .kdav-title-gradient {
            line-height: 1.20;

            padding-bottom: 7px;
        }

        #kdav-final .kdav-studio {
            width: 425px;
        }

    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:960px) {

        #kdav-final {
            padding:
                56px 27px 60px;
        }

        #kdav-final .kdav-container {
            grid-template-columns: 1fr;

            gap: 42px;
        }

        #kdav-final .kdav-left {
            max-width: 740px;

            margin: 0 auto;

            text-align: center;
        }

        #kdav-final .kdav-badge {
            margin-left: auto;
            margin-right: auto;
        }

        #kdav-final .kdav-desc {
            margin-left: auto;
            margin-right: auto;
        }

        #kdav-final .kdav-features,
        #kdav-final .kdav-buttons {
            justify-content: center;
        }

        #kdav-final .kdav-right {
            max-width: 570px;

            min-height: 455px;

            margin: 0 auto;
        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        #kdav-final {
            padding:
                42px 17px 46px;
        }

        #kdav-final .kdav-container {
            gap: 34px;
        }

        #kdav-final .kdav-badge {
            margin-bottom: 16px;

            padding: 7px 10px;

            font-size: 8px;
        }

        #kdav-final .kdav-badge i {
            width: 18px;
            height: 18px;

            flex-basis: 18px;

            font-size: 7px;
        }


        /* HEADING CLIPPING FIX MOBILE */

        #kdav-final .kdav-title {
            font-size: 36px;
            line-height: 1.19;

            letter-spacing: -1.15px;

            padding:
                3px 0 6px;

            overflow: visible !important;
        }

        #kdav-final .kdav-title .kdav-title-dark {
            padding:
                2px 0 3px;

            line-height: 1.20;

            overflow: visible !important;
        }

        #kdav-final .kdav-title .kdav-title-gradient {
            margin-top: 0;

            padding:
                3px 1px 6px 0;

            line-height: 1.22;

            overflow: visible !important;
        }


        #kdav-final .kdav-desc {
            margin-top: 14px;

            font-size: 13px;
            line-height: 1.68;
        }

        #kdav-final .kdav-features {
            gap: 9px 12px;

            margin-top: 18px;
        }

        #kdav-final .kdav-feature {
            font-size: 10px;
        }

        #kdav-final .kdav-buttons {
            width: 100%;

            gap: 7px;

            margin-top: 22px;
        }

        #kdav-final .kdav-btn {
            flex: 1;

            min-width: 0;
            min-height: 47px;

            padding: 0 9px;

            font-size: 9px;
        }


        /* RIGHT */

        #kdav-final .kdav-right {
            min-height: 370px;
        }

        #kdav-final .kdav-orbit {
            width: 290px;
            height: 290px;
        }

        #kdav-final .kdav-studio {
            width: calc(100% - 12px);

            max-width: 370px;

            border-radius: 14px;
        }

        #kdav-final .kdav-studio-header {
            min-height: 51px;

            padding: 0 9px;
        }

        #kdav-final .kdav-logo {
            width: 27px;
            height: 27px;

            flex-basis: 27px;

            font-size: 9px;
        }

        #kdav-final .kdav-brand-copy strong {
            font-size: 8px;
        }

        #kdav-final .kdav-brand-copy span {
            font-size: 7px;
        }

        #kdav-final .kdav-status {
            padding: 5px 6px;

            font-size: 6px;
        }

        #kdav-final .kdav-status-dot {
            width: 5px;
            height: 5px;

            flex-basis: 5px;
        }

        #kdav-final .kdav-editor {
            grid-template-columns:
                minmax(0, 1fr) 87px;

            gap: 6px;

            padding: 7px;
        }

        #kdav-final .kdav-preview {
            height: 202px;
        }

        #kdav-final .kdav-generating {
            left: 7px;
            top: 7px;

            padding: 5px 6px;

            font-size: 6px;
        }

        #kdav-final .kdav-resolution {
            right: 7px;
            top: 7px;

            padding: 5px;

            font-size: 5px;
        }

        #kdav-final .kdav-video-copy {
            left: 15px;
            right: 11px;
        }

        #kdav-final .kdav-video-label {
            margin-bottom: 6px;

            font-size: 6px;
        }

        #kdav-final .kdav-video-label::before {
            width: 14px;
        }

        #kdav-final .kdav-video-title {
            max-width: 170px;

            font-size: 20px;
            line-height: 1.15;

            letter-spacing: -.4px;
        }

        #kdav-final .kdav-video-desc {
            max-width: 170px;

            margin-top: 7px;

            font-size: 8px;
        }

        #kdav-final .kdav-control {
            padding: 6px 5px;
        }

        #kdav-final .kdav-control-row {
            gap: 5px;
        }

        #kdav-final .kdav-control-icon {
            width: 21px;
            height: 21px;

            flex-basis: 21px;

            font-size: 7px;
        }

        #kdav-final .kdav-control-copy strong {
            font-size: 6px;
        }

        #kdav-final .kdav-control-copy span {
            font-size: 5px;
        }

        #kdav-final .kdav-progress {
            height: 3px;

            margin-top: 5px;
        }

        #kdav-final .kdav-format {
            padding: 5px;
        }

        #kdav-final .kdav-format-title {
            margin-bottom: 5px;

            font-size: 5px;
        }

        #kdav-final .kdav-format-item {
            padding: 5px 1px;

            font-size: 5px;
        }

        #kdav-final .kdav-timeline {
            margin:
                0 7px 7px;

            padding: 7px;
        }

        #kdav-final .kdav-time-head {
            font-size: 6px;
        }

        #kdav-final .kdav-track {
            height: 18px;
        }

        #kdav-final .kdav-playhead {
            height: 25px;
        }


        /* FLOATS */

        #kdav-final .kdav-float {
            padding: 6px 7px;

            gap: 5px;
        }

        #kdav-final .kdav-float-icon {
            width: 23px;
            height: 23px;

            flex-basis: 23px;

            font-size: 7px;
        }

        #kdav-final .kdav-float-copy strong {
            font-size: 7px;
        }

        #kdav-final .kdav-float-copy span {
            font-size: 6px;
        }

        #kdav-final .kdav-float-script {
            left: 0;
            top: 52px;
        }

        #kdav-final .kdav-float-voice {
            right: 0;
            top: 113px;
        }

        #kdav-final .kdav-float-export {
            right: 3px;
            bottom: 40px;
        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:380px) {

        #kdav-final {
            padding-left: 14px;
            padding-right: 14px;
        }

        #kdav-final .kdav-title {
            font-size: 32px;
            line-height: 1.20;

            letter-spacing: -.9px;
        }

        #kdav-final .kdav-title .kdav-title-dark {
            line-height: 1.21;
        }

        #kdav-final .kdav-title .kdav-title-gradient {
            line-height: 1.23;

            padding-bottom: 6px;
        }

        #kdav-final .kdav-right {
            min-height: 340px;
        }

        #kdav-final .kdav-editor {
            grid-template-columns:
                minmax(0, 1fr) 77px;
        }

        #kdav-final .kdav-preview {
            height: 183px;
        }

        #kdav-final .kdav-video-title {
            font-size: 18px;
        }

        #kdav-final .kdav-float-voice {
            display: none;
        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kdav-final *,
        #kdav-final::before {
            animation: none !important;
            transition: none !important;
        }

    }
</style>


<!-- =========================================================
 HERO SECTION HTML
========================================================= -->

<section id="kdav-final">


    <div class="kdav-container">


        <!-- =================================================
             LEFT SIDE
        ================================================== -->

        <div class="kdav-left">


            <!-- BADGE -->

            <div class="kdav-badge">

                <i class="fa-solid fa-wand-magic-sparkles"></i>

                AI VIDEO PRODUCTION BY KING DIGITAL

            </div>


            <!-- HEADING -->

            <h1 class="kdav-title">

                <span class="kdav-title-dark">
                    Create Videos Smarter.
                </span>

                <span class="kdav-title-gradient">
                    Powered By AI.
                </span>

            </h1>


            <!-- DESCRIPTION -->

            <p class="kdav-desc">

                Turn your ideas into professional,
                engaging videos with

                <strong>
                    AI-powered scripts, visuals,
                    voiceovers and creative editing.
                </strong>

                From social media reels and ads to
                product and brand videos, King Digital
                helps bring your ideas to life through
                modern AI video production.

            </p>


            <!-- FEATURES -->

            <div class="kdav-features">


                <div class="kdav-feature">

                    <i class="fa-solid fa-check"></i>

                    AI Visuals

                </div>


                <div class="kdav-feature">

                    <i class="fa-solid fa-check"></i>

                    AI Voiceovers

                </div>


                <div class="kdav-feature">

                    <i class="fa-solid fa-check"></i>

                    Reels & Ads

                </div>


                <div class="kdav-feature">

                    <i class="fa-solid fa-check"></i>

                    Brand Videos

                </div>


            </div>


            <!-- BUTTONS -->

            <div class="kdav-buttons">


                <a
                    href="/enquiry.php"
                    class="kdav-btn kdav-btn-primary">

                    Create Your AI Video

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


                <a
                    href="/portfolio.php"
                    class="kdav-btn kdav-btn-secondary">

                    <i class="fa-solid fa-play"></i>

                    View Our Work

                </a>


            </div>


        </div>


        <!-- =================================================
             RIGHT SIDE
        ================================================== -->

        <div class="kdav-right">


            <!-- ROTATING ORBIT -->

            <div class="kdav-orbit"></div>


            <!-- =================================================
                 AI STUDIO
            ================================================== -->

            <div class="kdav-studio">


                <!-- HEADER -->

                <div class="kdav-studio-header">


                    <div class="kdav-brand">


                        <div class="kdav-logo">

                            <i class="fa-solid fa-clapperboard"></i>

                        </div>


                        <div class="kdav-brand-copy">

                            <strong>
                                King Digital AI Studio
                            </strong>

                            <span>
                                Creative Video Workspace
                            </span>

                        </div>


                    </div>


                    <div class="kdav-status">

                        <span class="kdav-status-dot"></span>

                        AI PROCESSING

                    </div>


                </div>


                <!-- =================================================
                     EDITOR
                ================================================== -->

                <div class="kdav-editor">


                    <!-- VIDEO PREVIEW -->

                    <div class="kdav-preview">


                        <div class="kdav-preview-bg">


                            <span class="kdav-shape-one"></span>

                            <span class="kdav-shape-two"></span>

                            <span class="kdav-shape-three"></span>


                        </div>


                        <!-- TOP LEFT -->

                        <div class="kdav-generating">

                            <i class="fa-solid fa-wand-magic-sparkles"></i>

                            AI GENERATING

                        </div>


                        <!-- TOP RIGHT -->

                        <div class="kdav-resolution">

                            1080 × 1920

                        </div>


                        <!-- PREVIEW CONTENT -->

                        <div class="kdav-video-copy">


                            <div class="kdav-video-label">

                                AI CREATIVE

                            </div>


                            <div class="kdav-video-title">

                                Ideas Into

                                <span>
                                    Impact.
                                </span>

                            </div>


                            <div class="kdav-video-desc">

                                Creative video content
                                built for modern brands
                                and digital platforms.

                            </div>


                        </div>


                        <!-- SCAN -->

                        <div class="kdav-scan"></div>


                        <!-- AUDIO WAVE -->

                        <div class="kdav-wave">

                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>

                        </div>


                    </div>


                    <!-- =================================================
                         CONTROLS
                    ================================================== -->

                    <div class="kdav-controls">


                        <!-- SCRIPT -->

                        <div class="kdav-control">


                            <div class="kdav-control-row">


                                <div class="kdav-control-icon">

                                    <i class="fa-solid fa-file-pen"></i>

                                </div>


                                <div class="kdav-control-copy">

                                    <strong>
                                        AI Script
                                    </strong>

                                    <span>
                                        Story ready
                                    </span>

                                </div>


                            </div>


                            <div class="kdav-progress">

                                <span></span>

                            </div>


                        </div>


                        <!-- VOICE -->

                        <div class="kdav-control">


                            <div class="kdav-control-row">


                                <div class="kdav-control-icon">

                                    <i class="fa-solid fa-microphone-lines"></i>

                                </div>


                                <div class="kdav-control-copy">

                                    <strong>
                                        Voiceover
                                    </strong>

                                    <span>
                                        Processing
                                    </span>

                                </div>


                            </div>


                            <div class="kdav-progress">

                                <span></span>

                            </div>


                        </div>


                        <!-- VISUAL -->

                        <div class="kdav-control">


                            <div class="kdav-control-row">


                                <div class="kdav-control-icon">

                                    <i class="fa-solid fa-wand-magic-sparkles"></i>

                                </div>


                                <div class="kdav-control-copy">

                                    <strong>
                                        Visual FX
                                    </strong>

                                    <span>
                                        Enhanced
                                    </span>

                                </div>


                            </div>


                            <div class="kdav-progress">

                                <span></span>

                            </div>


                        </div>


                        <!-- FORMAT -->

                        <div class="kdav-format">


                            <div class="kdav-format-title">

                                VIDEO FORMAT

                            </div>


                            <div class="kdav-format-row">


                                <div class="kdav-format-item active">
                                    9:16
                                </div>


                                <div class="kdav-format-item">
                                    1:1
                                </div>


                                <div class="kdav-format-item">
                                    16:9
                                </div>


                            </div>


                        </div>


                    </div>


                </div>


                <!-- =================================================
                     TIMELINE
                ================================================== -->

                <div class="kdav-timeline">


                    <div class="kdav-time-head">

                        <span>
                            VIDEO TIMELINE
                        </span>

                        <span>
                            00:30
                        </span>

                    </div>


                    <div class="kdav-track-wrap">


                        <div class="kdav-track">


                            <div class="kdav-clip kdav-c1"></div>

                            <div class="kdav-clip kdav-c2"></div>

                            <div class="kdav-clip kdav-c3"></div>

                            <div class="kdav-clip kdav-c4"></div>


                        </div>


                        <div class="kdav-playhead"></div>


                    </div>


                </div>


            </div>


            <!-- =================================================
                 FLOATING — SCRIPT
            ================================================== -->

            <div class="kdav-float kdav-float-script">


                <div class="kdav-float-icon">

                    <i class="fa-solid fa-file-lines"></i>

                </div>


                <div class="kdav-float-copy">

                    <strong>
                        AI Script Ready
                    </strong>

                    <span>
                        Hook • Story • CTA
                    </span>

                </div>


            </div>


            <!-- =================================================
                 FLOATING — VOICE
            ================================================== -->

            <div class="kdav-float kdav-float-voice">


                <div class="kdav-float-icon">

                    <i class="fa-solid fa-wave-square"></i>

                </div>


                <div class="kdav-float-copy">

                    <strong>
                        AI Voice
                    </strong>

                    <span>
                        Voice synchronized
                    </span>

                </div>


            </div>


            <!-- =================================================
                 FLOATING — EXPORT
            ================================================== -->

            <div class="kdav-float kdav-float-export">


                <div class="kdav-float-icon">

                    <i class="fa-solid fa-circle-check"></i>

                </div>


                <div class="kdav-float-copy">

                    <strong>
                        Ready To Publish
                    </strong>

                    <span>
                        Reels • Ads • Shorts
                    </span>

                </div>


            </div>


        </div>


    </div>


</section>