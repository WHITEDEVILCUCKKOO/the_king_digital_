<!-- =========================================================
 KING DIGITAL — AI VIDEO SERVICE
 FINAL FAQ + CTA SECTION
 DARK NAVY + ORANGE THEME
 COMPLETE FINAL RESPONSIVE CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
    /* =========================================================
 BASE
========================================================= */

    #kd-ai-faq-cta,
    #kd-ai-faq-cta * {
        box-sizing: border-box;
    }

    #kd-ai-faq-cta {

        --navy: #060F3E;
        --navy2: #0B2148;
        --navy3: #10355E;

        --orange: #F47B20;
        --orange2: #FF9145;
        --orange3: #FFB078;

        --dark: #060F3E;
        --text: #667085;
        --border: #E4E7EC;

        position: relative;
        width: 100%;
        overflow: hidden;

        padding: 58px 50px 62px;

         

        background:
            radial-gradient(circle at 4% 7%,
                rgba(244, 123, 32, .065),
                transparent 23%),
            radial-gradient(circle at 97% 92%,
                rgba(6, 15, 62, .055),
                transparent 26%),
            linear-gradient(135deg,
                #FAFAFB 0%,
                #FFFFFF 50%,
                #F7F8FA 100%);
    }


    /* =========================================================
 BACKGROUND DECORATION
========================================================= */

    #kd-ai-faq-cta .kdfc-bg-dots {

        position: absolute;

        right: 35px;
        top: 34px;

        width: 120px;
        height: 120px;

        opacity: .24;

        background-image:
            radial-gradient(rgba(244, 123, 32, .60) 1.1px,
                transparent 1.1px);

        background-size: 16px 16px;

        animation:
            kdfcDotsMove 7s ease-in-out infinite;
    }

    @keyframes kdfcDotsMove {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(12px);
        }
    }


    #kd-ai-faq-cta .kdfc-bg-ring {

        position: absolute;

        left: -145px;
        bottom: -160px;

        width: 310px;
        height: 310px;

        border-radius: 50%;

        border:
            1px solid rgba(244, 123, 32, .08);

        box-shadow:
            0 0 0 42px rgba(244, 123, 32, .018),
            0 0 0 84px rgba(6, 15, 62, .012);

        pointer-events: none;
    }


    /* =========================================================
 CONTAINER
========================================================= */

    #kd-ai-faq-cta .kdfc-container {

        position: relative;
        z-index: 5;

        width: 100%;
        max-width: 1380px;

        margin: 0 auto;
    }


    /* =========================================================
 TOP HEADER
========================================================= */

    #kd-ai-faq-cta .kdfc-header {

        max-width: 760px;

        margin-bottom: 35px;

        overflow: visible !important;
    }


    /* EYEBROW */

    #kd-ai-faq-cta .kdfc-eyebrow {

        display: inline-flex;

        align-items: center;

        gap: 9px;

        margin-bottom: 13px;

        color: var(--orange);

        font-size: 11px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .12em;

        text-transform: uppercase;
    }


    #kd-ai-faq-cta .kdfc-blink {

        position: relative;

        width: 8px;
        height: 8px;

        flex: 0 0 8px;

        border-radius: 50%;

        background: var(--orange);

        box-shadow:
            0 0 0 4px rgba(244, 123, 32, .10);

        animation:
            kdfcBlink 1.5s ease-in-out infinite;
    }


    #kd-ai-faq-cta .kdfc-blink::after {

        content: "";

        position: absolute;

        inset: -5px;

        border-radius: 50%;

        border:
            1px solid rgba(244, 123, 32, .28);

        animation:
            kdfcPulse 1.5s ease-out infinite;
    }


    @keyframes kdfcBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .4;
            transform: scale(.72);
        }
    }


    @keyframes kdfcPulse {

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
 HEADING — CUT / CLIPPING FIXED
========================================================= */

    #kd-ai-faq-cta .kdfc-heading {

        display: block;

        max-width: 760px;

        margin: 0;

        padding: 3px 3px 8px 0;

        overflow: visible !important;

        color: var(--navy);

        font-size: 44px;
        line-height: 1.16;

        font-weight: 800;

        letter-spacing: -1.7px;
    }


    #kd-ai-faq-cta .kdfc-heading span {

        display: block;

        padding: 2px 2px 5px 0;

        overflow: visible !important;

        line-height: 1.21;

        background:
            linear-gradient(90deg,
                #E96512 0%,
                #F47B20 50%,
                #FF9145 100%);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;

        color: transparent;
    }


    #kd-ai-faq-cta .kdfc-header-desc {

        max-width: 650px;

        margin: 12px 0 0;

        color: var(--text);

        font-size: 14px;
        line-height: 1.72;

        font-weight: 500;
    }


    /* =========================================================
 MAIN TWO COLUMN LAYOUT
========================================================= */

    #kd-ai-faq-cta .kdfc-layout {

        display: grid;

        grid-template-columns:
            minmax(0, 1.12fr) minmax(390px, .88fr);

        gap: 38px;

        align-items: start;
    }


    /* =========================================================
 FAQ LIST
========================================================= */

    #kd-ai-faq-cta .kdfc-faq-list {

        display: flex;

        flex-direction: column;

        gap: 10px;
    }


    /* =========================================================
 FAQ ITEM
========================================================= */

    #kd-ai-faq-cta .kdfc-faq-item {

        position: relative;

        width: 100%;

        overflow: hidden;

        border-radius: 14px;

        background: #FFFFFF;

        border:
            1px solid var(--border);

        box-shadow:
            0 5px 18px rgba(6, 15, 62, .035);

        transition:
            transform .3s ease,
            border-color .3s ease,
            box-shadow .3s ease;
    }


    #kd-ai-faq-cta .kdfc-faq-item::before {

        content: "";

        position: absolute;

        left: 0;
        top: 0;
        bottom: 0;

        width: 3px;

        transform: scaleY(0);

        transform-origin: center;

        background:
            linear-gradient(180deg,
                #FF9145,
                #F47B20,
                #E96512);

        transition:
            transform .35s ease;
    }


    #kd-ai-faq-cta .kdfc-faq-item:hover {

        transform: translateY(-1px);

        border-color:
            rgba(244, 123, 32, .30);

        box-shadow:
            0 10px 26px rgba(6, 15, 62, .065);
    }


    #kd-ai-faq-cta .kdfc-faq-item.active {

        border-color:
            rgba(244, 123, 32, .32);

        box-shadow:
            0 12px 30px rgba(6, 15, 62, .075);
    }


    #kd-ai-faq-cta .kdfc-faq-item.active::before {

        transform: scaleY(1);
    }


    /* =========================================================
 QUESTION
========================================================= */

    #kd-ai-faq-cta .kdfc-question {

        width: 100%;
        min-height: 70px;

        padding:
            15px 17px 15px 19px;

        display: grid;

        grid-template-columns:
            36px minmax(0, 1fr) 36px;

        gap: 13px;

        align-items: center;

        border: 0;
        outline: 0;

        appearance: none;
        -webkit-appearance: none;

        cursor: pointer;

        text-align: left;

        background: transparent;

         
    }


    /* =========================================================
 FAQ NUMBER
========================================================= */

    #kd-ai-faq-cta .kdfc-number {

        width: 36px;
        height: 36px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 9px;

        color: var(--orange);

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        background:
            linear-gradient(135deg,
                #FFF7F1,
                #FFF0E5);

        border:
            1px solid #FADCC8;

        transition:
            color .3s ease,
            background .3s ease,
            transform .3s ease;
    }


    #kd-ai-faq-cta .kdfc-faq-item.active .kdfc-number {

        color: #FFFFFF;

        transform: scale(1.03);

        border-color: transparent;

        background:
            linear-gradient(135deg,
                #E96512,
                #F47B20 58%,
                #FF9145);

        box-shadow:
            0 7px 15px rgba(244, 123, 32, .20);
    }


    /* =========================================================
 QUESTION TEXT
========================================================= */

    #kd-ai-faq-cta .kdfc-question-text {

        color: var(--navy);

        font-size: 15px;
        line-height: 1.48;

        font-weight: 800;

        letter-spacing: -.1px;
    }


    /* =========================================================
 PLUS / MINUS ICON
========================================================= */

    #kd-ai-faq-cta .kdfc-icon {

        position: relative;

        width: 36px;
        height: 36px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #F7F8FA;

        border:
            1px solid #E5E7EB;

        transition:
            transform .35s ease,
            background .3s ease,
            border-color .3s ease;
    }


    #kd-ai-faq-cta .kdfc-icon::before,
    #kd-ai-faq-cta .kdfc-icon::after {

        content: "";

        position: absolute;

        left: 50%;
        top: 50%;

        width: 11px;
        height: 1.5px;

        border-radius: 20px;

        background: #657085;

        transform:
            translate(-50%, -50%);

        transition:
            transform .3s ease,
            background .3s ease;
    }


    #kd-ai-faq-cta .kdfc-icon::after {

        transform:
            translate(-50%, -50%) rotate(90deg);
    }


    #kd-ai-faq-cta .kdfc-faq-item.active .kdfc-icon {

        transform: rotate(180deg);

        background: #FFF0E5;

        border-color: #F8D4BC;
    }


    #kd-ai-faq-cta .kdfc-faq-item.active .kdfc-icon::before,
    #kd-ai-faq-cta .kdfc-faq-item.active .kdfc-icon::after {

        background: var(--orange);
    }


    #kd-ai-faq-cta .kdfc-faq-item.active .kdfc-icon::after {

        transform:
            translate(-50%, -50%) rotate(0deg);
    }


    /* =========================================================
 ANSWER
========================================================= */

    #kd-ai-faq-cta .kdfc-answer {

        max-height: 0;

        overflow: hidden;

        opacity: 0;

        border-top:
            1px solid transparent;

        transition:
            max-height .42s ease,
            opacity .3s ease,
            border-color .3s ease;
    }


    #kd-ai-faq-cta .kdfc-faq-item.active .kdfc-answer {

        opacity: 1;

        border-top-color: #ECEEF1;
    }


    #kd-ai-faq-cta .kdfc-answer-inner {

        padding:
            17px 22px 18px 68px;
    }


    #kd-ai-faq-cta .kdfc-answer-content {

        position: relative;

        padding-left: 13px;
    }


    #kd-ai-faq-cta .kdfc-answer-content::before {

        content: "";

        position: absolute;

        left: 0;
        top: 4px;
        bottom: 4px;

        width: 2px;

        border-radius: 20px;

        background:
            linear-gradient(180deg,
                #FF9145,
                #F47B20);

        opacity: .65;
    }


    #kd-ai-faq-cta .kdfc-answer p {

        margin: 0;

        color: #687185;

        font-size: 14px;
        line-height: 1.72;

        font-weight: 500;
    }


    /* =========================================================
 RIGHT CTA
========================================================= */

    #kd-ai-faq-cta .kdfc-cta {

        position: sticky;

        top: 105px;

        min-height: 500px;

        overflow: hidden;

        padding:
            36px 34px 33px;

        border-radius: 22px;

        color: #FFFFFF;

        background:
            radial-gradient(circle at 88% 8%,
                rgba(244, 123, 32, .28),
                transparent 30%),
            radial-gradient(circle at 4% 100%,
                rgba(244, 123, 32, .10),
                transparent 36%),
            linear-gradient(145deg,
                #040A2B 0%,
                #060F3E 45%,
                #0B2148 100%);

        border:
            1px solid rgba(255, 255, 255, .08);

        box-shadow:
            0 22px 50px rgba(6, 15, 62, .18);
    }


    /* CTA GRID */

    #kd-ai-faq-cta .kdfc-cta-grid {

        position: absolute;

        inset: 0;

        opacity: .14;

        background-image:
            linear-gradient(rgba(255, 255, 255, .05) 1px,
                transparent 1px),
            linear-gradient(90deg,
                rgba(255, 255, 255, .05) 1px,
                transparent 1px);

        background-size:
            34px 34px;

        pointer-events: none;
    }


    /* CTA RING */

    #kd-ai-faq-cta .kdfc-cta-ring {

        position: absolute;

        width: 180px;
        height: 180px;

        right: -65px;
        top: -65px;

        border-radius: 50%;

        border:
            1px solid rgba(255, 145, 69, .22);

        box-shadow:
            0 0 0 28px rgba(244, 123, 32, .025),
            0 0 0 56px rgba(244, 123, 32, .012);

        animation:
            kdfcCtaRing 7s ease-in-out infinite;
    }


    @keyframes kdfcCtaRing {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-10px, 10px);
        }
    }


    /* CTA CONTENT */

    #kd-ai-faq-cta .kdfc-cta-content {

        position: relative;

        z-index: 3;
    }


    /* =========================================================
 CTA ICON
========================================================= */

    #kd-ai-faq-cta .kdfc-cta-icon {

        width: 52px;
        height: 52px;

        display: flex;

        align-items: center;
        justify-content: center;

        margin-bottom: 25px;

        border-radius: 14px;

        color: #FFFFFF;

        font-size: 18px;

        background:
            linear-gradient(135deg,
                #E96512,
                #F47B20 58%,
                #FF9145);

        box-shadow:
            0 13px 28px rgba(244, 123, 32, .28);
    }


    /* =========================================================
 CTA LABEL
========================================================= */

    #kd-ai-faq-cta .kdfc-cta-label {

        margin-bottom: 11px;

        color: #FFB078;

        font-size: 11px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .11em;

        text-transform: uppercase;
    }


    /* =========================================================
 CTA TITLE — CLIPPING SAFE
========================================================= */

    #kd-ai-faq-cta .kdfc-cta-title {

        display: block;

        max-width: 390px;

        margin: 0;

        padding: 2px 2px 6px 0;

        overflow: visible !important;

        color: #FFFFFF;

        font-size: 34px;
        line-height: 1.18;

        font-weight: 800;

        letter-spacing: -1.2px;
    }


    #kd-ai-faq-cta .kdfc-cta-title span {

        display: block;

        padding-top: 3px;

        line-height: 1.22;

        color: #FF9A58;
    }


    /* =========================================================
 CTA DESCRIPTION
========================================================= */

    #kd-ai-faq-cta .kdfc-cta-desc {

        max-width: 390px;

        margin: 13px 0 0;

        color:
            rgba(255, 255, 255, .70);

        font-size: 14px;
        line-height: 1.7;

        font-weight: 500;
    }


    /* =========================================================
 CTA POINTS
========================================================= */

    #kd-ai-faq-cta .kdfc-cta-points {

        margin-top: 23px;

        display: flex;

        flex-direction: column;

        gap: 9px;
    }


    #kd-ai-faq-cta .kdfc-cta-point {

        min-height: 45px;

        padding: 9px 11px;

        display: flex;

        align-items: center;

        gap: 10px;

        border-radius: 10px;

        color:
            rgba(255, 255, 255, .87);

        font-size: 12px;
        line-height: 1.4;

        font-weight: 700;

        background:
            rgba(255, 255, 255, .055);

        border:
            1px solid rgba(255, 255, 255, .085);

        transition:
            transform .25s ease,
            background .25s ease,
            border-color .25s ease;
    }


    #kd-ai-faq-cta .kdfc-cta-point:hover {

        transform: translateX(3px);

        background:
            rgba(244, 123, 32, .09);

        border-color:
            rgba(255, 145, 69, .22);
    }


    /* CHECK */

    #kd-ai-faq-cta .kdfc-check {

        width: 25px;
        height: 25px;

        flex: 0 0 25px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 7px;

        color: #FFB078;

        font-size: 9px;

        background:
            rgba(244, 123, 32, .12);

        border:
            1px solid rgba(255, 145, 69, .17);
    }


    /* =========================================================
 CTA BUTTON
========================================================= */

    #kd-ai-faq-cta .kdfc-cta-btn {

        width: 100%;
        height: 51px;

        margin-top: 25px;

        display: flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        border-radius: 10px;

        color: #FFFFFF !important;

        text-decoration: none !important;

        font-size: 12px;
        line-height: 1;

        font-weight: 800;

        background:
            linear-gradient(135deg,
                #E96512,
                #F47B20 58%,
                #FF9145);

        border:
            1px solid rgba(255, 255, 255, .08);

        box-shadow:
            0 13px 28px rgba(244, 123, 32, .27);

        transition:
            transform .3s ease,
            box-shadow .3s ease;
    }


    #kd-ai-faq-cta .kdfc-cta-btn:hover {

        transform: translateY(-3px);

        box-shadow:
            0 18px 36px rgba(244, 123, 32, .38);
    }


    #kd-ai-faq-cta .kdfc-cta-btn i {

        font-size: 11px;

        transition:
            transform .3s ease;
    }


    #kd-ai-faq-cta .kdfc-cta-btn:hover i {

        transform: translateX(3px);
    }


    /* =========================================================
 CTA FOOT
========================================================= */

    #kd-ai-faq-cta .kdfc-cta-foot {

        margin-top: 14px;

        display: flex;

        align-items: center;
        justify-content: center;

        gap: 7px;

        color:
            rgba(255, 255, 255, .52);

        font-size: 11px;
        line-height: 1.4;

        font-weight: 600;

        text-align: center;
    }


    #kd-ai-faq-cta .kdfc-cta-foot span {

        width: 6px;
        height: 6px;

        flex: 0 0 6px;

        border-radius: 50%;

        background: var(--orange2);

        box-shadow:
            0 0 0 3px rgba(244, 123, 32, .10);
    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:1050px) {

        #kd-ai-faq-cta {

            padding:
                52px 30px 56px;
        }


        #kd-ai-faq-cta .kdfc-layout {

            grid-template-columns:
                minmax(0, 1fr) minmax(340px, .78fr);

            gap: 28px;
        }


        #kd-ai-faq-cta .kdfc-heading {

            font-size: 39px;
        }


        #kd-ai-faq-cta .kdfc-cta {

            padding:
                31px 27px;

            min-height: 480px;
        }


        #kd-ai-faq-cta .kdfc-cta-title {

            font-size: 30px;
        }

    }


    /* =========================================================
 STACK
========================================================= */

    @media(max-width:850px) {

        #kd-ai-faq-cta .kdfc-header {

            max-width: 680px;

            margin-left: auto;
            margin-right: auto;

            text-align: center;
        }


        #kd-ai-faq-cta .kdfc-eyebrow {

            justify-content: center;
        }


        #kd-ai-faq-cta .kdfc-header-desc {

            margin-left: auto;
            margin-right: auto;
        }


        #kd-ai-faq-cta .kdfc-layout {

            grid-template-columns: 1fr;

            gap: 28px;

            max-width: 760px;

            margin: 0 auto;
        }


        #kd-ai-faq-cta .kdfc-cta {

            position: relative;

            top: auto;

            min-height: 0;
        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        #kd-ai-faq-cta {

            padding:
                42px 17px 46px;
        }


        #kd-ai-faq-cta .kdfc-bg-dots {

            display: none;
        }


        #kd-ai-faq-cta .kdfc-header {

            margin-bottom: 25px;
        }


        #kd-ai-faq-cta .kdfc-eyebrow {

            margin-bottom: 11px;

            font-size: 9px;
        }


        /* HEADING */

        #kd-ai-faq-cta .kdfc-heading {

            font-size: 31px;

            line-height: 1.20;

            letter-spacing: -1px;

            padding:
                3px 2px 7px;

            overflow: visible !important;
        }


        #kd-ai-faq-cta .kdfc-heading span {

            line-height: 1.24;

            padding:
                2px 1px 5px;

            overflow: visible !important;
        }


        #kd-ai-faq-cta .kdfc-header-desc {

            margin-top: 10px;

            font-size: 13px;
            line-height: 1.66;
        }


        /* FAQ */

        #kd-ai-faq-cta .kdfc-faq-list {

            gap: 8px;
        }


        #kd-ai-faq-cta .kdfc-faq-item {

            border-radius: 12px;
        }


        #kd-ai-faq-cta .kdfc-question {

            min-height: 66px;

            padding:
                13px 12px;

            grid-template-columns:
                32px minmax(0, 1fr) 31px;

            gap: 9px;
        }


        #kd-ai-faq-cta .kdfc-number {

            width: 32px;
            height: 32px;

            border-radius: 8px;

            font-size: 9px;
        }


        #kd-ai-faq-cta .kdfc-question-text {

            font-size: 13px;
            line-height: 1.46;
        }


        #kd-ai-faq-cta .kdfc-icon {

            width: 31px;
            height: 31px;
        }


        #kd-ai-faq-cta .kdfc-answer-inner {

            padding:
                15px 14px 15px 53px;
        }


        #kd-ai-faq-cta .kdfc-answer p {

            font-size: 12.5px;
            line-height: 1.68;
        }


        /* CTA */

        #kd-ai-faq-cta .kdfc-layout {

            gap: 23px;
        }


        #kd-ai-faq-cta .kdfc-cta {

            padding:
                27px 21px 25px;

            border-radius: 18px;
        }


        #kd-ai-faq-cta .kdfc-cta-icon {

            width: 46px;
            height: 46px;

            margin-bottom: 20px;

            border-radius: 12px;

            font-size: 16px;
        }


        #kd-ai-faq-cta .kdfc-cta-label {

            font-size: 9px;

            margin-bottom: 9px;
        }


        #kd-ai-faq-cta .kdfc-cta-title {

            font-size: 28px;

            line-height: 1.20;

            padding-bottom: 5px;
        }


        #kd-ai-faq-cta .kdfc-cta-title span {

            line-height: 1.23;
        }


        #kd-ai-faq-cta .kdfc-cta-desc {

            margin-top: 10px;

            font-size: 13px;
            line-height: 1.65;
        }


        #kd-ai-faq-cta .kdfc-cta-points {

            margin-top: 20px;
        }


        #kd-ai-faq-cta .kdfc-cta-point {

            min-height: 43px;

            font-size: 11px;
        }


        #kd-ai-faq-cta .kdfc-cta-btn {

            height: 48px;

            margin-top: 21px;

            font-size: 11px;
        }


        #kd-ai-faq-cta .kdfc-cta-foot {

            font-size: 10px;
        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        #kd-ai-faq-cta .kdfc-heading {

            font-size: 28px;
        }


        #kd-ai-faq-cta .kdfc-question {

            grid-template-columns:
                29px minmax(0, 1fr) 29px;

            gap: 8px;

            padding:
                12px 10px;
        }


        #kd-ai-faq-cta .kdfc-number {

            width: 29px;
            height: 29px;
        }


        #kd-ai-faq-cta .kdfc-icon {

            width: 29px;
            height: 29px;
        }


        #kd-ai-faq-cta .kdfc-answer-inner {

            padding:
                14px 12px 14px 47px;
        }


        #kd-ai-faq-cta .kdfc-cta {

            padding:
                25px 18px 23px;
        }


        #kd-ai-faq-cta .kdfc-cta-title {

            font-size: 25px;
        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kd-ai-faq-cta *,
        #kd-ai-faq-cta *::before,
        #kd-ai-faq-cta *::after {

            animation: none !important;
            transition: none !important;
        }

    }
</style>


<!-- =========================================================
 HTML
========================================================= -->

<section id="kd-ai-faq-cta">


    <!-- BACKGROUND DECORATION -->

    <span class="kdfc-bg-dots"></span>
    <span class="kdfc-bg-ring"></span>


    <div class="kdfc-container">


        <!-- =================================================
             SECTION HEADER
        ================================================== -->

        <div class="kdfc-header">


            <div class="kdfc-eyebrow">

                <span class="kdfc-blink"></span>

                AI VIDEO FAQs

            </div>


            <h2 class="kdfc-heading">

                Questions Before You

                <span>
                    Start Creating?
                </span>

            </h2>


            <p class="kdfc-header-desc">

                Find clear answers about our AI video production
                process, creative formats, brand customization
                and what we need to start your project.

            </p>


        </div>


        <!-- =================================================
             TWO COLUMN AREA
        ================================================== -->

        <div class="kdfc-layout">


            <!-- =================================================
                 LEFT FAQ
            ================================================== -->

            <div class="kdfc-faq-list">


                <!-- FAQ 01 -->

                <div class="kdfc-faq-item active">


                    <button
                        type="button"
                        class="kdfc-question"
                        aria-expanded="true">


                        <span class="kdfc-number">
                            01
                        </span>


                        <span class="kdfc-question-text">

                            What kind of AI videos can King Digital create?

                        </span>


                        <span class="kdfc-icon"></span>


                    </button>


                    <div class="kdfc-answer">


                        <div class="kdfc-answer-inner">


                            <div class="kdfc-answer-content">

                                <p>

                                    We create AI-powered reels,
                                    shorts, advertising creatives,
                                    product videos, brand content
                                    and YouTube videos based on
                                    your message, audience and
                                    publishing platform.

                                </p>

                            </div>


                        </div>


                    </div>


                </div>


                <!-- FAQ 02 -->

                <div class="kdfc-faq-item">


                    <button
                        type="button"
                        class="kdfc-question"
                        aria-expanded="false">


                        <span class="kdfc-number">
                            02
                        </span>


                        <span class="kdfc-question-text">

                            Do I need to provide a complete script?

                        </span>


                        <span class="kdfc-icon"></span>


                    </button>


                    <div class="kdfc-answer">


                        <div class="kdfc-answer-inner">


                            <div class="kdfc-answer-content">

                                <p>

                                    No. Share your idea, product,
                                    service or campaign objective.
                                    Our team can develop the hook,
                                    script structure, message flow
                                    and creative direction.

                                </p>

                            </div>


                        </div>


                    </div>


                </div>


                <!-- FAQ 03 -->

                <div class="kdfc-faq-item">


                    <button
                        type="button"
                        class="kdfc-question"
                        aria-expanded="false">


                        <span class="kdfc-number">
                            03
                        </span>


                        <span class="kdfc-question-text">

                            Can the AI video match my brand style?

                        </span>


                        <span class="kdfc-icon"></span>


                    </button>


                    <div class="kdfc-answer">


                        <div class="kdfc-answer-inner">


                            <div class="kdfc-answer-content">

                                <p>

                                    Yes. We can shape the visual
                                    direction, messaging, pacing
                                    and overall presentation around
                                    your brand identity and content
                                    objective.

                                </p>

                            </div>


                        </div>


                    </div>


                </div>


                <!-- FAQ 04 -->

                <div class="kdfc-faq-item">


                    <button
                        type="button"
                        class="kdfc-question"
                        aria-expanded="false">


                        <span class="kdfc-number">
                            04
                        </span>


                        <span class="kdfc-question-text">

                            Which video formats can you create?

                        </span>


                        <span class="kdfc-icon"></span>


                    </button>


                    <div class="kdfc-answer">


                        <div class="kdfc-answer-inner">


                            <div class="kdfc-answer-content">

                                <p>

                                    Videos can be prepared in
                                    vertical, square and landscape
                                    formats for reels, social media,
                                    digital advertising and YouTube.

                                </p>

                            </div>


                        </div>


                    </div>


                </div>


                <!-- FAQ 05 -->

                <div class="kdfc-faq-item">


                    <button
                        type="button"
                        class="kdfc-question"
                        aria-expanded="false">


                        <span class="kdfc-number">
                            05
                        </span>


                        <span class="kdfc-question-text">

                            Can AI voiceovers be added to the video?

                        </span>


                        <span class="kdfc-icon"></span>


                    </button>


                    <div class="kdfc-answer">


                        <div class="kdfc-answer-inner">


                            <div class="kdfc-answer-content">

                                <p>

                                    Yes. AI voiceovers can be used
                                    where they suit the project.
                                    Voice, captions, background audio
                                    and visual pacing can be combined
                                    during final editing.

                                </p>

                            </div>


                        </div>


                    </div>


                </div>


                <!-- FAQ 06 -->

                <div class="kdfc-faq-item">


                    <button
                        type="button"
                        class="kdfc-question"
                        aria-expanded="false">


                        <span class="kdfc-number">
                            06
                        </span>


                        <span class="kdfc-question-text">

                            What do you need from me to get started?

                        </span>


                        <span class="kdfc-icon"></span>


                    </button>


                    <div class="kdfc-answer">


                        <div class="kdfc-answer-inner">


                            <div class="kdfc-answer-content">

                                <p>

                                    Share your objective, key
                                    message, product or service
                                    details, target audience and
                                    preferred platform. Brand
                                    references can also help define
                                    the visual direction.

                                </p>

                            </div>


                        </div>


                    </div>


                </div>


            </div>


            <!-- =================================================
                 RIGHT CTA
            ================================================== -->

            <aside class="kdfc-cta">


                <div class="kdfc-cta-grid"></div>

                <span class="kdfc-cta-ring"></span>


                <div class="kdfc-cta-content">


                    <div class="kdfc-cta-icon">

                        <i class="fa-solid fa-wand-magic-sparkles"></i>

                    </div>


                    <div class="kdfc-cta-label">

                        READY TO CREATE?

                    </div>


                    <h3 class="kdfc-cta-title">

                        Have A Video Idea?

                        <span>
                            Let's Bring It To Life.
                        </span>

                    </h3>


                    <p class="kdfc-cta-desc">

                        Tell us what you want to create.
                        Our team will help shape your idea
                        into professional AI-powered video
                        content for your brand.

                    </p>


                    <!-- POINTS -->

                    <div class="kdfc-cta-points">


                        <div class="kdfc-cta-point">

                            <span class="kdfc-check">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            Share your idea or campaign brief

                        </div>


                        <div class="kdfc-cta-point">

                            <span class="kdfc-check">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            Get the right creative direction

                        </div>


                        <div class="kdfc-cta-point">

                            <span class="kdfc-check">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            Create content for your platform

                        </div>


                    </div>


                    <!-- CTA BUTTON -->

                    <a
                        href="/enquiry.php"
                        class="kdfc-cta-btn">

                        Discuss Your AI Video

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>


                    <div class="kdfc-cta-foot">

                        <span></span>

                        Start with your idea — we'll help with the rest.

                    </div>


                </div>


            </aside>


        </div>


    </div>


</section>


<!-- =========================================================
 FAQ ACCORDION SCRIPT
 OPEN ONE → CLOSE PREVIOUS
========================================================= -->

<script>
    (function() {

        const section =
            document.querySelector('#kd-ai-faq-cta');

        if (!section) return;


        const items =
            section.querySelectorAll('.kdfc-faq-item');


        function closeItem(item) {

            const button =
                item.querySelector('.kdfc-question');

            const answer =
                item.querySelector('.kdfc-answer');


            item.classList.remove('active');


            button.setAttribute(
                'aria-expanded',
                'false'
            );


            answer.style.maxHeight = null;

        }


        function openItem(item) {

            const button =
                item.querySelector('.kdfc-question');

            const answer =
                item.querySelector('.kdfc-answer');


            item.classList.add('active');


            button.setAttribute(
                'aria-expanded',
                'true'
            );


            answer.style.maxHeight =
                answer.scrollHeight + 'px';

        }


        items.forEach(function(item) {

            const button =
                item.querySelector('.kdfc-question');


            button.addEventListener(
                'click',
                function() {

                    const isOpen =
                        item.classList.contains('active');


                    /* CLOSE ALL */

                    items.forEach(function(other) {

                        closeItem(other);

                    });


                    /* OPEN CLICKED */

                    if (!isOpen) {

                        openItem(item);

                    }

                }
            );

        });


        /* DEFAULT FIRST FAQ OPEN */

        const firstOpen =
            section.querySelector(
                '.kdfc-faq-item.active'
            );


        if (firstOpen) {

            requestAnimationFrame(function() {

                openItem(firstOpen);

            });

        }


        /* RESPONSIVE HEIGHT FIX */

        window.addEventListener(
            'resize',
            function() {

                const active =
                    section.querySelector(
                        '.kdfc-faq-item.active'
                    );


                if (active) {

                    const answer =
                        active.querySelector(
                            '.kdfc-answer'
                        );


                    answer.style.maxHeight =
                        answer.scrollHeight + 'px';

                }

            }
        );

    })();
</script>