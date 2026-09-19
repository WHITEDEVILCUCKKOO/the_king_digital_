<!-- =========================================================
 KING DIGITAL — AI VIDEO SERVICE
 FINAL CTA BEFORE FAQ
 DARK NAVY + ORANGE THEME
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

    #kd-ai-final-cta,
    #kd-ai-final-cta * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    #kd-ai-final-cta {

        --navy: #060F3E;
        --navy2: #0B2148;
        --navy3: #10355E;

        --orange: #F47B20;
        --orange2: #FF9145;
        --orange3: #FFB078;

        --white: #FFFFFF;

        position: relative;
        width: 100%;
        overflow: hidden;

        padding: 52px 50px 55px;

         

        background:
            linear-gradient(180deg,
                #FFFFFF 0%,
                #F8F9FA 100%);
    }


    /* =========================================================
 MAIN WRAPPER
========================================================= */

    #kd-ai-final-cta .kdafc-container {

        position: relative;

        width: 100%;
        max-width: 1380px;
        min-height: 400px;

        margin: 0 auto;

        overflow: hidden;

        border-radius: 26px;

        background:
            radial-gradient(circle at 88% 18%,
                rgba(244, 123, 32, .24),
                transparent 28%),
            radial-gradient(circle at 62% 115%,
                rgba(244, 123, 32, .10),
                transparent 35%),
            radial-gradient(circle at 12% 0%,
                rgba(16, 53, 94, .34),
                transparent 32%),
            linear-gradient(125deg,
                #040A2B 0%,
                #060F3E 45%,
                #0B2148 100%);

        border:
            1px solid rgba(255, 255, 255, .08);

        box-shadow:
            0 25px 65px rgba(6, 15, 62, .18);
    }


    /* =========================================================
 BACKGROUND GRID
========================================================= */

    #kd-ai-final-cta .kdafc-grid-bg {

        position: absolute;
        inset: 0;

        opacity: .15;

        pointer-events: none;

        background-image:
            linear-gradient(rgba(255, 255, 255, .05) 1px,
                transparent 1px),
            linear-gradient(90deg,
                rgba(255, 255, 255, .05) 1px,
                transparent 1px);

        background-size: 42px 42px;

        -webkit-mask-image:
            linear-gradient(90deg,
                transparent,
                #000 30%,
                #000);

        mask-image:
            linear-gradient(90deg,
                transparent,
                #000 30%,
                #000);
    }


    /* =========================================================
 BACKGROUND ORBS
========================================================= */

    #kd-ai-final-cta .kdafc-orb {

        position: absolute;

        border-radius: 50%;

        pointer-events: none;
    }


    #kd-ai-final-cta .kdafc-orb-one {

        width: 280px;
        height: 280px;

        right: -100px;
        top: -110px;

        border:
            1px solid rgba(255, 145, 69, .18);

        box-shadow:
            0 0 0 38px rgba(244, 123, 32, .035),
            0 0 0 76px rgba(244, 123, 32, .018);

        animation:
            kdafcOrbOne 9s ease-in-out infinite;
    }


    #kd-ai-final-cta .kdafc-orb-two {

        width: 125px;
        height: 125px;

        left: 47%;
        bottom: -75px;

        background:
            rgba(244, 123, 32, .12);

        filter: blur(2px);

        animation:
            kdafcOrbTwo 7s ease-in-out infinite;
    }


    @keyframes kdafcOrbOne {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-18px, 18px);
        }
    }


    @keyframes kdafcOrbTwo {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.16);
        }
    }


    /* =========================================================
 INNER
========================================================= */

    #kd-ai-final-cta .kdafc-inner {

        position: relative;
        z-index: 5;

        min-height: 400px;

        padding: 50px 56px;

        display: grid;

        grid-template-columns:
            minmax(430px, 1fr) minmax(400px, .90fr);

        gap: 62px;

        align-items: center;
    }


    /* =========================================================
 LEFT CONTENT
========================================================= */

    #kd-ai-final-cta .kdafc-content {

        width: 100%;
        max-width: 640px;

        overflow: visible !important;
    }


    /* =========================================================
 EYEBROW
========================================================= */

    #kd-ai-final-cta .kdafc-eyebrow {

        display: inline-flex;

        align-items: center;

        gap: 9px;

        margin-bottom: 14px;

        color: #FFB078;

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .12em;

        text-transform: uppercase;
    }


    #kd-ai-final-cta .kdafc-blink {

        position: relative;

        width: 8px;
        height: 8px;

        flex: 0 0 8px;

        border-radius: 50%;

        background: var(--orange2);

        box-shadow:
            0 0 0 4px rgba(244, 123, 32, .13);

        animation:
            kdafcBlink 1.5s ease-in-out infinite;
    }


    #kd-ai-final-cta .kdafc-blink::after {

        content: "";

        position: absolute;

        inset: -5px;

        border-radius: 50%;

        border:
            1px solid rgba(255, 145, 69, .34);

        animation:
            kdafcPulse 1.5s ease-out infinite;
    }


    @keyframes kdafcBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .45;
            transform: scale(.75);
        }
    }


    @keyframes kdafcPulse {

        0% {
            opacity: .7;
            transform: scale(.5);
        }

        100% {
            opacity: 0;
            transform: scale(1.45);
        }
    }


    /* =========================================================
 HEADING — CLIPPING FIX
========================================================= */

    #kd-ai-final-cta .kdafc-title {

        display: block;

        margin: 0;

        padding: 3px 0 8px;

        overflow: visible !important;

        color: #FFFFFF;

        font-size: 46px;
        line-height: 1.16;

        font-weight: 800;

        letter-spacing: -1.9px;
    }


    #kd-ai-final-cta .kdafc-title span {

        display: block;

        padding: 2px 2px 6px 0;

        overflow: visible !important;

        line-height: 1.20;

        background:
            linear-gradient(90deg,
                #FFB078 0%,
                #FF9145 45%,
                #F47B20 100%);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;

        color: transparent;
    }


    /* =========================================================
 DESCRIPTION
========================================================= */

    #kd-ai-final-cta .kdafc-desc {

        max-width: 585px;

        margin: 14px 0 0;

        color:
            rgba(255, 255, 255, .72);

        font-size: 14px;
        line-height: 1.72;

        font-weight: 500;
    }


    /* =========================================================
 FEATURES
========================================================= */

    #kd-ai-final-cta .kdafc-features {

        margin-top: 22px;

        display: flex;

        flex-wrap: wrap;

        gap: 8px;
    }


    #kd-ai-final-cta .kdafc-feature {

        min-height: 36px;

        padding: 0 12px;

        display: flex;

        align-items: center;

        gap: 8px;

        border-radius: 8px;

        color:
            rgba(255, 255, 255, .86);

        font-size: 11px;
        line-height: 1;

        font-weight: 700;

        background:
            rgba(255, 255, 255, .055);

        border:
            1px solid rgba(255, 255, 255, .10);

        transition:
            transform .25s ease,
            background .25s ease,
            border-color .25s ease;
    }


    #kd-ai-final-cta .kdafc-feature:hover {

        transform: translateY(-2px);

        background:
            rgba(244, 123, 32, .10);

        border-color:
            rgba(255, 145, 69, .26);
    }


    #kd-ai-final-cta .kdafc-feature-dot {

        width: 6px;
        height: 6px;

        flex: 0 0 6px;

        border-radius: 50%;

        background: var(--orange2);

        box-shadow:
            0 0 0 3px rgba(244, 123, 32, .10);
    }


    /* =========================================================
 BUTTONS
========================================================= */

    #kd-ai-final-cta .kdafc-actions {

        margin-top: 24px;

        display: flex;

        align-items: center;

        gap: 10px;

        flex-wrap: wrap;
    }


    #kd-ai-final-cta .kdafc-primary,
    #kd-ai-final-cta .kdafc-secondary {

        min-height: 48px;

        padding: 0 20px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        border-radius: 10px;

        color: #FFFFFF !important;

        text-decoration: none !important;

        font-size: 11px;
        line-height: 1;

        font-weight: 800;

        transition:
            transform .3s ease,
            box-shadow .3s ease,
            background .3s ease,
            border-color .3s ease;
    }


    /* PRIMARY */

    #kd-ai-final-cta .kdafc-primary {

        background:
            linear-gradient(135deg,
                #E86613 0%,
                #F47B20 52%,
                #FF9145 100%);

        border:
            1px solid rgba(255, 255, 255, .08);

        box-shadow:
            0 13px 30px rgba(244, 123, 32, .27);
    }


    #kd-ai-final-cta .kdafc-primary:hover {

        transform: translateY(-3px);

        box-shadow:
            0 18px 36px rgba(244, 123, 32, .36);
    }


    #kd-ai-final-cta .kdafc-primary i {

        transition:
            transform .3s ease;
    }


    #kd-ai-final-cta .kdafc-primary:hover i {

        transform: translateX(3px);
    }


    /* SECONDARY */

    #kd-ai-final-cta .kdafc-secondary {

        background:
            rgba(255, 255, 255, .055);

        border:
            1px solid rgba(255, 255, 255, .15);
    }


    #kd-ai-final-cta .kdafc-secondary:hover {

        transform: translateY(-3px);

        background:
            rgba(244, 123, 32, .08);

        border-color:
            rgba(255, 145, 69, .32);
    }


    /* =========================================================
 RIGHT VISUAL
========================================================= */

    #kd-ai-final-cta .kdafc-visual {

        position: relative;

        width: 100%;
        min-height: 325px;

        display: flex;

        align-items: center;
        justify-content: center;
    }


    /* =========================================================
 VISUAL GLOW
========================================================= */

    #kd-ai-final-cta .kdafc-visual-glow {

        position: absolute;

        left: 50%;
        top: 50%;

        width: 340px;
        height: 340px;

        transform:
            translate(-50%, -50%);

        border-radius: 50%;

        background:
            radial-gradient(circle,
                rgba(244, 123, 32, .20) 0%,
                rgba(244, 123, 32, .08) 38%,
                rgba(16, 53, 94, .08) 55%,
                transparent 72%);

        animation:
            kdafcVisualGlow 5s ease-in-out infinite;
    }


    @keyframes kdafcVisualGlow {

        0%,
        100% {
            transform:
                translate(-50%, -50%) scale(1);
        }

        50% {
            transform:
                translate(-50%, -50%) scale(1.08);
        }
    }


    /* =========================================================
 AI VIDEO STUDIO
========================================================= */

    #kd-ai-final-cta .kdafc-studio {

        position: relative;
        z-index: 4;

        width: 390px;
        max-width: 90%;

        overflow: hidden;

        border-radius: 18px;

        background: #040A27;

        border:
            1px solid rgba(255, 255, 255, .13);

        box-shadow:
            0 28px 60px rgba(0, 0, 20, .38);
    }


    /* =========================================================
 STUDIO HEADER
========================================================= */

    #kd-ai-final-cta .kdafc-studio-head {

        height: 46px;

        padding: 0 14px;

        display: flex;

        align-items: center;
        justify-content: space-between;

        border-bottom:
            1px solid rgba(255, 255, 255, .08);

        background:
            rgba(255, 255, 255, .025);
    }


    #kd-ai-final-cta .kdafc-studio-brand {

        display: flex;

        align-items: center;

        gap: 9px;
    }


    #kd-ai-final-cta .kdafc-studio-logo {

        width: 27px;
        height: 27px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 7px;

        color: #FFFFFF;

        font-size: 10px;

        font-weight: 800;

        background:
            linear-gradient(135deg,
                var(--navy3),
                var(--orange));

        box-shadow:
            0 5px 12px rgba(244, 123, 32, .18);
    }


    #kd-ai-final-cta .kdafc-studio-brand strong {

        display: block;

        color: #FFFFFF;

        font-size: 10px;

        font-weight: 800;
    }


    #kd-ai-final-cta .kdafc-studio-brand small {

        display: block;

        margin-top: 2px;

        color: #9099AE;

        font-size: 8px;

        font-weight: 600;
    }


    /* GENERATING */

    #kd-ai-final-cta .kdafc-generating {

        display: flex;

        align-items: center;

        gap: 6px;

        color: #FFB078;

        font-size: 8px;

        font-weight: 800;

        letter-spacing: .04em;
    }


    #kd-ai-final-cta .kdafc-generating-dot {

        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: var(--orange2);

        box-shadow:
            0 0 0 3px rgba(244, 123, 32, .10);

        animation:
            kdafcGenerateDot 1.1s ease-in-out infinite;
    }


    @keyframes kdafcGenerateDot {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: .25;
        }
    }


    /* =========================================================
 VIDEO PREVIEW
========================================================= */

    #kd-ai-final-cta .kdafc-preview {

        position: relative;

        height: 218px;

        overflow: hidden;

        background:
            radial-gradient(circle at 78% 23%,
                rgba(244, 123, 32, .34),
                transparent 30%),
            radial-gradient(circle at 22% 85%,
                rgba(16, 53, 94, .48),
                transparent 35%),
            linear-gradient(145deg,
                #07132E 0%,
                #0A2042 55%,
                #102F55 100%);
    }


    /* PREVIEW GRID */

    #kd-ai-final-cta .kdafc-preview::before {

        content: "";

        position: absolute;
        inset: 0;

        opacity: .15;

        background-image:
            linear-gradient(rgba(255, 255, 255, .07) 1px,
                transparent 1px),
            linear-gradient(90deg,
                rgba(255, 255, 255, .07) 1px,
                transparent 1px);

        background-size: 27px 27px;
    }


    /* =========================================================
 ANIMATED MAIN SHAPE
========================================================= */

    #kd-ai-final-cta .kdafc-shape-main {

        position: absolute;

        width: 128px;
        height: 128px;

        right: 24px;
        top: 24px;

        border-radius:
            42% 58% 63% 37% / 44% 38% 62% 56%;

        background:
            linear-gradient(135deg,
                #10355E 0%,
                #F47B20 58%,
                #FF9145 100%);

        box-shadow:
            0 22px 40px rgba(244, 123, 32, .20);

        animation:
            kdafcShapeMain 6.5s ease-in-out infinite;
    }


    @keyframes kdafcShapeMain {

        0%,
        100% {
            transform:
                translateY(0) rotate(0deg) scale(1);
        }

        50% {
            transform:
                translateY(-8px) rotate(7deg) scale(1.04);
        }
    }


    /* =========================================================
 SHAPE RING
========================================================= */

    #kd-ai-final-cta .kdafc-shape-ring {

        position: absolute;

        right: 103px;
        top: 87px;

        width: 62px;
        height: 62px;

        border-radius: 50%;

        border:
            1px solid rgba(255, 255, 255, .30);

        box-shadow:
            0 0 0 11px rgba(244, 123, 32, .035);

        animation:
            kdafcShapeRing 5s ease-in-out infinite;
    }


    @keyframes kdafcShapeRing {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(8px);
        }
    }


    /* =========================================================
 SCAN LIGHT
========================================================= */

    #kd-ai-final-cta .kdafc-scan {

        position: absolute;

        z-index: 3;

        left: -20%;
        top: 0;

        width: 35%;
        height: 100%;

        transform: skewX(-18deg);

        background:
            linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, .08),
                transparent);

        animation:
            kdafcScan 4.5s ease-in-out infinite;
    }


    @keyframes kdafcScan {

        0% {
            left: -40%;
        }

        55%,
        100% {
            left: 120%;
        }
    }


    /* =========================================================
 PREVIEW COPY
========================================================= */

    #kd-ai-final-cta .kdafc-preview-copy {

        position: absolute;

        z-index: 5;

        left: 22px;
        bottom: 25px;

        max-width: 225px;
    }


    #kd-ai-final-cta .kdafc-preview-label {

        margin-bottom: 6px;

        color: #FFB078;

        font-size: 9px;

        font-weight: 800;

        letter-spacing: .11em;

        text-transform: uppercase;
    }


    #kd-ai-final-cta .kdafc-preview-title {

        color: #FFFFFF;

        font-size: 22px;
        line-height: 1.20;

        font-weight: 800;

        letter-spacing: -.5px;
    }


    #kd-ai-final-cta .kdafc-preview-title span {

        color: #FF9A58;
    }


    #kd-ai-final-cta .kdafc-preview-desc {

        margin-top: 7px;

        color:
            rgba(255, 255, 255, .68);

        font-size: 10px;
        line-height: 1.45;

        font-weight: 500;
    }


    /* =========================================================
 PROCESS BADGE
========================================================= */

    #kd-ai-final-cta .kdafc-process-badge {

        position: absolute;

        z-index: 6;

        right: 14px;
        bottom: 14px;

        padding: 7px 9px;

        display: flex;

        align-items: center;

        gap: 6px;

        border-radius: 7px;

        color: #FFFFFF;

        font-size: 8px;

        font-weight: 800;

        background:
            rgba(4, 10, 39, .70);

        border:
            1px solid rgba(255, 255, 255, .13);

        backdrop-filter: blur(8px);

        -webkit-backdrop-filter: blur(8px);
    }


    #kd-ai-final-cta .kdafc-process-badge i {

        color: var(--orange2);

        font-size: 7px;
    }


    /* =========================================================
 TIMELINE
========================================================= */

    #kd-ai-final-cta .kdafc-timeline {

        position: relative;

        height: 62px;

        padding: 11px 13px;

        background: #030821;

        border-top:
            1px solid rgba(255, 255, 255, .07);
    }


    #kd-ai-final-cta .kdafc-timeline-top {

        margin-bottom: 8px;

        display: flex;

        align-items: center;
        justify-content: space-between;
    }


    #kd-ai-final-cta .kdafc-timeline-top span {

        color: #8F96AD;

        font-size: 8px;

        font-weight: 700;
    }


    #kd-ai-final-cta .kdafc-timeline-top strong {

        color: #FFAE76;

        font-size: 8px;

        font-weight: 800;
    }


    /* TRACK */

    #kd-ai-final-cta .kdafc-track {

        position: relative;

        height: 20px;

        display: grid;

        grid-template-columns:
            1.05fr .8fr 1.2fr .65fr;

        gap: 4px;
    }


    #kd-ai-final-cta .kdafc-clip {

        position: relative;

        overflow: hidden;

        border-radius: 4px;

        background:
            rgba(255, 255, 255, .07);
    }


    #kd-ai-final-cta .kdafc-clip::before {

        content: "";

        position: absolute;
        inset: 0;

        background:
            linear-gradient(90deg,
                rgba(16, 53, 94, .95),
                rgba(244, 123, 32, .70));
    }


    #kd-ai-final-cta .kdafc-clip:nth-child(2)::before {

        opacity: .65;
    }


    #kd-ai-final-cta .kdafc-clip:nth-child(3)::before {

        background:
            linear-gradient(90deg,
                rgba(244, 123, 32, .70),
                rgba(255, 145, 69, .82));
    }


    #kd-ai-final-cta .kdafc-clip:nth-child(4)::before {

        opacity: .50;
    }


    /* =========================================================
 PLAYHEAD
========================================================= */

    #kd-ai-final-cta .kdafc-playhead {

        position: absolute;

        z-index: 5;

        left: 4%;
        top: -4px;

        width: 2px;
        height: 28px;

        border-radius: 5px;

        background: var(--orange2);

        box-shadow:
            0 0 9px rgba(255, 145, 69, .72);

        animation:
            kdafcPlayhead 5s ease-in-out infinite;
    }


    #kd-ai-final-cta .kdafc-playhead::before {

        content: "";

        position: absolute;

        left: 50%;
        top: -2px;

        width: 6px;
        height: 6px;

        transform:
            translateX(-50%);

        border-radius: 50%;

        background: var(--orange2);
    }


    @keyframes kdafcPlayhead {

        0% {
            left: 4%;
        }

        50% {
            left: 92%;
        }

        100% {
            left: 4%;
        }
    }


    /* =========================================================
 FLOATING CARDS
========================================================= */

    #kd-ai-final-cta .kdafc-float-script,
    #kd-ai-final-cta .kdafc-float-export,
    #kd-ai-final-cta .kdafc-format-card {

        background:
            rgba(255, 255, 255, .98);

        border:
            1px solid rgba(255, 255, 255, .88);

        box-shadow:
            0 15px 35px rgba(0, 0, 20, .22);
    }


    /* =========================================================
 SCRIPT FLOAT
========================================================= */

    #kd-ai-final-cta .kdafc-float-script {

        position: absolute;

        z-index: 8;

        left: -10px;
        top: 26px;

        min-width: 156px;

        padding: 11px 12px;

        border-radius: 11px;

        animation:
            kdafcFloatScript 4.8s ease-in-out infinite;
    }


    @keyframes kdafcFloatScript {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-7px);
        }
    }


    /* =========================================================
 FLOAT ROW
========================================================= */

    #kd-ai-final-cta .kdafc-float-row {

        display: flex;

        align-items: center;

        gap: 9px;
    }


    #kd-ai-final-cta .kdafc-float-icon {

        width: 31px;
        height: 31px;

        flex: 0 0 31px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 8px;

        color: var(--orange);

        font-size: 10px;

        background: #FFF0E5;
    }


    #kd-ai-final-cta .kdafc-float-copy strong {

        display: block;

        color: var(--navy);

        font-size: 10px;

        font-weight: 800;
    }


    #kd-ai-final-cta .kdafc-float-copy span {

        display: block;

        margin-top: 3px;

        color: #788196;

        font-size: 9px;

        font-weight: 600;
    }


    /* =========================================================
 EXPORT FLOAT
========================================================= */

    #kd-ai-final-cta .kdafc-float-export {

        position: absolute;

        z-index: 8;

        right: -6px;
        bottom: 27px;

        min-width: 160px;

        padding: 11px 12px;

        border-radius: 11px;

        animation:
            kdafcFloatExport 5.2s ease-in-out infinite;
    }


    @keyframes kdafcFloatExport {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(7px);
        }
    }


    /* =========================================================
 FORMAT CARD
========================================================= */

    #kd-ai-final-cta .kdafc-format-card {

        position: absolute;

        z-index: 8;

        right: -1px;
        top: 18px;

        padding: 9px 10px;

        border-radius: 10px;

        animation:
            kdafcFormatFloat 5.8s ease-in-out infinite;
    }


    @keyframes kdafcFormatFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }
    }


    #kd-ai-final-cta .kdafc-format-label {

        margin-bottom: 6px;

        color: #737B90;

        font-size: 8px;

        font-weight: 800;

        text-transform: uppercase;
    }


    #kd-ai-final-cta .kdafc-format-options {

        display: flex;

        gap: 4px;
    }


    #kd-ai-final-cta .kdafc-format-options span {

        padding: 5px 6px;

        border-radius: 5px;

        color: #737B90;

        font-size: 7px;

        font-weight: 800;

        background: #F1F2F6;
    }


    #kd-ai-final-cta .kdafc-format-options .active {

        color: #FFFFFF;

        background:
            linear-gradient(135deg,
                var(--navy2),
                var(--orange));
    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:1050px) {

        #kd-ai-final-cta {

            padding:
                48px 30px 51px;
        }


        #kd-ai-final-cta .kdafc-inner {

            padding:
                45px 38px;

            grid-template-columns:
                1fr .88fr;

            gap: 40px;
        }


        #kd-ai-final-cta .kdafc-title {

            font-size: 40px;
        }


        #kd-ai-final-cta .kdafc-studio {

            width: 360px;
        }

    }


    /* =========================================================
 STACK
========================================================= */

    @media(max-width:850px) {

        #kd-ai-final-cta .kdafc-inner {

            grid-template-columns: 1fr;

            gap: 40px;

            text-align: center;
        }


        #kd-ai-final-cta .kdafc-content {

            max-width: 700px;

            margin: 0 auto;
        }


        #kd-ai-final-cta .kdafc-eyebrow {

            justify-content: center;
        }


        #kd-ai-final-cta .kdafc-desc {

            margin-left: auto;
            margin-right: auto;
        }


        #kd-ai-final-cta .kdafc-features,
        #kd-ai-final-cta .kdafc-actions {

            justify-content: center;
        }


        #kd-ai-final-cta .kdafc-visual {

            width: 100%;
            max-width: 560px;

            margin: 0 auto;
        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        #kd-ai-final-cta {

            padding:
                38px 15px 41px;
        }


        #kd-ai-final-cta .kdafc-container {

            border-radius: 19px;
        }


        #kd-ai-final-cta .kdafc-inner {

            min-height: 0;

            padding:
                34px 18px 38px;

            gap: 32px;
        }


        #kd-ai-final-cta .kdafc-grid-bg {

            background-size:
                32px 32px;
        }


        #kd-ai-final-cta .kdafc-eyebrow {

            margin-bottom: 11px;

            font-size: 9px;
        }


        /* HEADING SAFE */

        #kd-ai-final-cta .kdafc-title {

            font-size: 32px;

            line-height: 1.20;

            letter-spacing: -1.1px;

            padding: 3px 0 7px;

            overflow: visible !important;
        }


        #kd-ai-final-cta .kdafc-title span {

            line-height: 1.23;

            padding: 2px 1px 5px;

            overflow: visible !important;
        }


        #kd-ai-final-cta .kdafc-desc {

            margin-top: 10px;

            font-size: 13px;

            line-height: 1.65;
        }


        #kd-ai-final-cta .kdafc-features {

            margin-top: 18px;

            gap: 6px;

            justify-content: center;
        }


        #kd-ai-final-cta .kdafc-feature {

            min-height: 33px;

            padding: 0 9px;

            font-size: 10px;
        }


        /* BUTTONS ONE ROW */

        #kd-ai-final-cta .kdafc-actions {

            margin-top: 20px;

            gap: 7px;

            flex-wrap: nowrap;
        }


        #kd-ai-final-cta .kdafc-primary,
        #kd-ai-final-cta .kdafc-secondary {

            width: auto;

            flex: 1;

            min-width: 0;

            min-height: 45px;

            padding: 0 10px;

            font-size: 9px;
        }


        /* VISUAL */

        #kd-ai-final-cta .kdafc-visual {

            min-height: 280px;
        }


        #kd-ai-final-cta .kdafc-visual-glow {

            width: 260px;
            height: 260px;
        }


        #kd-ai-final-cta .kdafc-studio {

            width: 92%;
            max-width: 350px;

            border-radius: 15px;
        }


        #kd-ai-final-cta .kdafc-studio-head {

            height: 40px;

            padding: 0 10px;
        }


        #kd-ai-final-cta .kdafc-studio-logo {

            width: 23px;
            height: 23px;

            font-size: 8px;
        }


        #kd-ai-final-cta .kdafc-studio-brand strong {

            font-size: 8px;
        }


        #kd-ai-final-cta .kdafc-studio-brand small {

            font-size: 7px;
        }


        #kd-ai-final-cta .kdafc-generating {

            font-size: 7px;
        }


        #kd-ai-final-cta .kdafc-preview {

            height: 185px;
        }


        #kd-ai-final-cta .kdafc-shape-main {

            width: 90px;
            height: 90px;

            right: 15px;
            top: 18px;
        }


        #kd-ai-final-cta .kdafc-shape-ring {

            width: 45px;
            height: 45px;

            right: 70px;
            top: 65px;
        }


        #kd-ai-final-cta .kdafc-preview-copy {

            left: 15px;
            bottom: 18px;

            max-width: 175px;
        }


        #kd-ai-final-cta .kdafc-preview-label {

            font-size: 7px;
        }


        #kd-ai-final-cta .kdafc-preview-title {

            font-size: 17px;
        }


        #kd-ai-final-cta .kdafc-preview-desc {

            font-size: 8px;
        }


        #kd-ai-final-cta .kdafc-process-badge {

            right: 9px;
            bottom: 9px;

            padding: 5px 7px;

            font-size: 6px;
        }


        #kd-ai-final-cta .kdafc-timeline {

            height: 54px;

            padding: 9px 10px;
        }


        /* FLOATS */

        #kd-ai-final-cta .kdafc-float-script {

            left: -2px;
            top: 18px;

            min-width: 125px;

            padding: 8px;
        }


        #kd-ai-final-cta .kdafc-float-export {

            right: -2px;
            bottom: 16px;

            min-width: 130px;

            padding: 8px;
        }


        #kd-ai-final-cta .kdafc-float-icon {

            width: 25px;
            height: 25px;

            flex-basis: 25px;

            font-size: 8px;
        }


        #kd-ai-final-cta .kdafc-float-copy strong {

            font-size: 8px;
        }


        #kd-ai-final-cta .kdafc-float-copy span {

            font-size: 7px;
        }


        #kd-ai-final-cta .kdafc-format-card {

            display: none;
        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        #kd-ai-final-cta .kdafc-title {

            font-size: 29px;

            line-height: 1.21;
        }


        #kd-ai-final-cta .kdafc-title span {

            line-height: 1.24;
        }


        #kd-ai-final-cta .kdafc-preview {

            height: 172px;
        }


        #kd-ai-final-cta .kdafc-preview-desc {

            display: none;
        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kd-ai-final-cta *,
        #kd-ai-final-cta *::before,
        #kd-ai-final-cta *::after {

            animation: none !important;
            transition: none !important;
        }

    }
</style>


<!-- =========================================================
 HTML
========================================================= -->

<section id="kd-ai-final-cta">


    <div class="kdafc-container">


        <!-- BACKGROUND -->

        <div class="kdafc-grid-bg"></div>

        <span class="kdafc-orb kdafc-orb-one"></span>
        <span class="kdafc-orb kdafc-orb-two"></span>


        <div class="kdafc-inner">


            <!-- =================================================
                 LEFT CONTENT
            ================================================== -->

            <div class="kdafc-content">


                <div class="kdafc-eyebrow">

                    <span class="kdafc-blink"></span>

                    CREATE WITH KING DIGITAL

                </div>


                <h2 class="kdafc-title">

                    Have An Idea?

                    <span>
                        Turn It Into Video.
                    </span>

                </h2>


                <p class="kdafc-desc">

                    Bring us your idea, product or campaign message.
                    King Digital turns it into professionally crafted
                    AI video content with the right story, visuals,
                    voice and editing for your brand.

                </p>


                <!-- FEATURES -->

                <div class="kdafc-features">


                    <div class="kdafc-feature">

                        <span class="kdafc-feature-dot"></span>

                        Reels & Shorts

                    </div>


                    <div class="kdafc-feature">

                        <span class="kdafc-feature-dot"></span>

                        AI Video Ads

                    </div>


                    <div class="kdafc-feature">

                        <span class="kdafc-feature-dot"></span>

                        Product Videos

                    </div>


                    <div class="kdafc-feature">

                        <span class="kdafc-feature-dot"></span>

                        Brand Videos

                    </div>


                </div>


                <!-- BUTTONS -->

                <div class="kdafc-actions">


                    <a
                        href="/enquiry.php"
                        class="kdafc-primary">

                        Create Your AI Video

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>


                    <a
                        href="/portfolio.php"
                        class="kdafc-secondary">

                        View Our Work

                    </a>


                </div>


            </div>


            <!-- =================================================
                 RIGHT VISUAL
            ================================================== -->

            <div class="kdafc-visual">


                <div class="kdafc-visual-glow"></div>


                <!-- CREATIVE SCRIPT FLOAT -->

                <div class="kdafc-float-script">


                    <div class="kdafc-float-row">


                        <div class="kdafc-float-icon">

                            <i class="fa-solid fa-pen-nib"></i>

                        </div>


                        <div class="kdafc-float-copy">

                            <strong>
                                Creative Script
                            </strong>

                            <span>
                                Hook • Story • CTA
                            </span>

                        </div>


                    </div>


                </div>


                <!-- FORMAT CARD -->

                <div class="kdafc-format-card">


                    <div class="kdafc-format-label">
                        Video Format
                    </div>


                    <div class="kdafc-format-options">

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
                     AI VIDEO STUDIO
                ================================================== -->

                <div class="kdafc-studio">


                    <!-- HEADER -->

                    <div class="kdafc-studio-head">


                        <div class="kdafc-studio-brand">


                            <div class="kdafc-studio-logo">
                                K
                            </div>


                            <div>

                                <strong>
                                    King Digital
                                </strong>

                                <small>
                                    AI Video Studio
                                </small>

                            </div>


                        </div>


                        <div class="kdafc-generating">

                            <span class="kdafc-generating-dot"></span>

                            CREATING VIDEO

                        </div>


                    </div>


                    <!-- =================================================
                         VIDEO PREVIEW
                    ================================================== -->

                    <div class="kdafc-preview">


                        <span class="kdafc-shape-main"></span>

                        <span class="kdafc-shape-ring"></span>

                        <span class="kdafc-scan"></span>


                        <div class="kdafc-preview-copy">


                            <div class="kdafc-preview-label">
                                AI VIDEO PRODUCTION
                            </div>


                            <div class="kdafc-preview-title">

                                From Idea To

                                <span>
                                    Visual Story.
                                </span>

                            </div>


                            <div class="kdafc-preview-desc">

                                Script, visuals, voice and motion
                                brought together in one creative flow.

                            </div>


                        </div>


                        <div class="kdafc-process-badge">

                            <i class="fa-solid fa-wand-magic-sparkles"></i>

                            AI VISUALS GENERATING

                        </div>


                    </div>


                    <!-- =================================================
                         TIMELINE
                    ================================================== -->

                    <div class="kdafc-timeline">


                        <div class="kdafc-timeline-top">

                            <span>
                                VIDEO TIMELINE
                            </span>

                            <strong>
                                00:30
                            </strong>

                        </div>


                        <div class="kdafc-track">


                            <div class="kdafc-clip"></div>

                            <div class="kdafc-clip"></div>

                            <div class="kdafc-clip"></div>

                            <div class="kdafc-clip"></div>


                            <div class="kdafc-playhead"></div>


                        </div>


                    </div>


                </div>


                <!-- =================================================
                     VIDEO READY FLOAT
                ================================================== -->

                <div class="kdafc-float-export">


                    <div class="kdafc-float-row">


                        <div class="kdafc-float-icon">

                            <i class="fa-solid fa-check"></i>

                        </div>


                        <div class="kdafc-float-copy">

                            <strong>
                                Video Ready
                            </strong>

                            <span>
                                Edit • Export • Publish
                            </span>

                        </div>


                    </div>


                </div>


            </div>


        </div>


    </div>


</section>