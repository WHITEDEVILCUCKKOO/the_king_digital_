<style>
    :root {

        /* ========================================
       AI VOICE — COLOR SYSTEM
        ======================================== */

        /* ---------- Primary ---------- */
        --ai-orange: #EA5C28;
        --ai-orange-bright: #F4511E;
        --ai-orange-dark: #D94717;

        /* ---------- Secondary ---------- */
        --ai-red: #E3413E;
        --ai-pink: #E31D5B;
        --ai-pink-light: #EC4899;

        /* ---------- Gradients ---------- */
        --ai-gradient: linear-gradient(90deg,
                #F4511E 0%,
                #E3413E 50%,
                #E31D5B 100%);

        --ai-gradient-reverse: linear-gradient(90deg,
                #E31D5B 0%,
                #E3413E 50%,
                #F4511E 100%);

        --ai-gradient-soft: linear-gradient(135deg,
                rgba(244, 81, 30, 0.12),
                rgba(227, 29, 91, 0.12));


        /* ========================================
       DARK / AI SECTIONS
        ======================================== */

        --ai-dark: #120E20;
        --ai-dark-secondary: #171126;
        --ai-dark-purple: #251636;
        --ai-dark-card: #1F1A31;
        --ai-dark-card-hover: #2A2040;

        --ai-dark-border: rgba(255, 255, 255, 0.08);

        --ai-dark-text: #FFFFFF;
        --ai-dark-text-secondary: #E5E7EB;
        --ai-dark-text-muted: #A1A1AA;


        /* ========================================
       LIGHT SECTIONS
        ======================================== */

        --ai-white: #FFFFFF;
        --ai-bg: #FFFFFF;

        --ai-bg-warm: #ffffffdc;
        --ai-bg-soft: #FEF3F1;
        --ai-bg-orange: #FFF1E8;

        --ai-bg-pink: #FFF1F5;
        --ai-bg-purple: #F7F3FF;


        /* ========================================
       TEXT
        ======================================== */

        --ai-text: #111827;
        --ai-text-heading: #111827;
        --ai-text-body: #374151;
        --ai-text-muted: #6B7280;
        --ai-text-light: #9CA3AF;

        --ai-text-white: #FFFFFF;


        /* ========================================
       BORDERS
        ======================================== */

        --ai-border: #E5E7EB;
        --ai-border-light: #F3F4F6;
        --ai-border-orange: rgba(234, 92, 40, 0.25);
        --ai-border-pink: rgba(227, 29, 91, 0.20);


        /* ========================================
       CARDS
        ======================================== */

        --ai-card-bg: #FFFFFF;
        --ai-card-bg-soft: #FFF9F5;

        --ai-card-shadow:
            0 4px 20px rgba(17, 24, 39, 0.06);

        --ai-card-shadow-hover:
            0 12px 35px rgba(17, 24, 39, 0.10);


        /* ========================================
       STATUS / UI COLORS
        ======================================== */

        --ai-success: #22C55E;
        --ai-success-light: #DCFCE7;

        --ai-warning: #F59E0B;
        --ai-warning-light: #FEF3C7;

        --ai-info: #3B82F6;
        --ai-info-light: #DBEAFE;

        --ai-danger: #EF4444;
        --ai-danger-light: #FEE2E2;


        /* ========================================
       VOICE / WAVEFORM
        ======================================== */

        --ai-wave-primary: #F4511E;
        --ai-wave-secondary: #E31D5B;
        --ai-wave-light: rgba(244, 81, 30, 0.20);

        --ai-pulse: rgba(234, 92, 40, 0.25);


        /* ========================================
       BUTTONS
        ======================================== */

        --ai-btn-primary: #EA5C28;
        --ai-btn-primary-hover: #D94717;

        --ai-btn-gradient: linear-gradient(90deg,
                #F4511E,
                #E31D5B);

        --ai-btn-text: #FFFFFF;


        /* ========================================
       RADIUS
        ======================================== */

        --ai-radius-sm: 6px;
        --ai-radius-md: 10px;
        --ai-radius-lg: 14px;
        --ai-radius-xl: 20px;
        --ai-radius-full: 999px;


        /* ========================================
       SPACING
        ======================================== */

        --ai-section-padding: 100px;
        --ai-container-width: 1200px;


        /* ========================================
       TRANSITIONS
        ======================================== */

        --ai-transition-fast: 0.2s ease;
        --ai-transition: 0.3s ease;
        --ai-transition-slow: 0.5s ease;
    }

    /* ========================================
       HERO SECTION
    ======================================== */

    .ai-voice-hero {
        background: linear-gradient(135deg, var(--ai-bg-warm) 0%, var(--ai-white) 55%, var(--ai-bg-pink) 100%);
        padding: 30px 120px;
    }

    .ai-voice-hero_content {
        max-width: var(--ai-container-width);
        margin: 0 auto;
        padding: 0 40px;
        display: grid;
        grid-template-columns: 1fr 0.95fr;
        gap: 60px;
        align-items: center;
    }

    .ai-voice-hero_content--text {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
    }

    /* ---------- Eyebrow ---------- */

    .ai-voice-hero_content--eyebrow {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: var(--ai-bg-orange);
        border: 1px solid var(--ai-border-orange);
        color: var(--ai-orange-dark);
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.2px;
        padding: 7px 16px 7px 12px;
        border-radius: var(--ai-radius-full);
        margin-bottom: 20px;
    }

    .ai-voice-hero_content--eyebrow span svg {
        width: 20px;
        height: 20px;
        display: block;
    }

    .ai-voice-hero_content--eyebrow span svg path {
        fill: var(--ai-orange-dark);
    }

    /* ---------- Heading ---------- */

    .ai-voice-hero_content--heading {
        font-size: 52px;
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -1.2px;
        color: var(--ai-orange-bright);
        margin-bottom: 18px;
    }

    /* ---------- Paragraph ---------- */

    .ai-voice-hero_content--para {
        font-size: 16px;
        line-height: 1.65;
        color: var(--ai-text-body);
        max-width: 520px;
        margin-bottom: 28px;
    }

    /* ---------- Bullet points ---------- */

    .ai-voice-hero_content--points {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 30px;
    }

    .ai-voice-hero_content--points p {
        position: relative;
        padding-left: 28px;
        font-size: 15px;
        font-weight: 500;
        color: var(--ai-text-body);
    }

    .ai-voice-hero_content--points p::before {
        content: "";
        position: absolute;
        left: 0;
        top: 2px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: var(--ai-bg-orange);
        border: 1.5px solid var(--ai-orange);
    }

    .ai-voice-hero_content--points p::after {
        content: "✔";
        position: absolute;
        left: 4px;
        top: 2px;
        width: 8px;
        height: 4px;
        color: var(--ai-orange);
    }

    .ai-voice-hero_content--points span {
        display: none;
    }

    /* ---------- CTA ---------- */

    .ai-voice-hero_content--cta {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--ai-btn-primary);
        color: var(--ai-btn-text);
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        padding: 15px 26px;
        border-radius: var(--ai-radius-full);
        box-shadow: 0 8px 20px rgba(234, 92, 40, 0.30);
        transition: var(--ai-transition-fast);
    }

    .ai-voice-hero_content--cta:hover {
        background: var(--ai-btn-primary-hover);
        transform: translateY(-1px);
    }

    .ai-voice-hero_content--cta span svg {
        width: 16px;
        height: 16px;
        display: block;
    }

    .ai-voice-hero_content--cta span svg path {
        stroke: var(--ai-btn-text);
    }

    /* ---------- Visual / Card ---------- */

    .ai-voice-hero_content--visual {
        position: relative;
    }

    .ai-voice-hero_content--visual-card-shadow {
        position: absolute;
        inset: -38px 48px;
        background: var(--ai-bg-pink);
        border-radius: var(--ai-radius-xl);
        z-index: 0;
        transform: rotate(5deg);
    }

    .ai-voice-hero_content--visual-card {
        position: relative;
        z-index: 1;
        background: var(--ai-card-bg);
        border: 1px solid var(--ai-border-light);
        border-radius: var(--ai-radius-xl);
        box-shadow: var(--ai-card-shadow-hover);
        padding: 26px;
        max-width: 400px;
        margin-left: auto;
    }

    .ai-voice-hero_content--visual-card-heading {
        display: grid;
        grid-template-columns: 44px 1fr auto;
        align-items: center;
        gap: 12px;
        padding-bottom: 20px;
        margin-bottom: 20px;
        border-bottom: 1px solid var(--ai-border-light);
    }

    .ai-voice-hero_content--visual-card-heading>span {
        width: 44px;
        height: 44px;
        border-radius: var(--ai-radius-md);
        background: var(--ai-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ai-voice-hero_content--visual-card-heading>span svg {
        width: 20px;
        height: 20px;
    }

    .ai-voice-hero_content--visual-card-heading>span svg path {
        fill: var(--ai-white);
    }

    .ai-voice-hero_content--visual-card-heading-text {
        font-size: 15px;
        font-weight: 700;
        color: var(--ai-text-heading);
    }

    .ai-voice-hero_content--visual-card-heading-text p {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        font-weight: 500;
        color: var(--ai-text-muted);
        margin-top: 4px;
    }

    .ai-voice-hero_content--visual-card-heading-text p span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--ai-success);
        box-shadow: 0 0 0 3px var(--ai-success-light);
    }

    .ai-voice-hero_content--visual-card-heading a {
        background: var(--ai-success-light);
        color: var(--ai-success);
        font-size: 12px;
        font-weight: 700;
        padding: 5px 12px;
        border-radius: var(--ai-radius-full);
        text-decoration: none;
    }

    .ai-voice-hero_content--visual-card-body {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    /* ========================================
   VOICE BAR
======================================== */

    .ai-voice-hero_content--visual-card-bar {
        position: relative;

        width: 100%;
        height: 6px;

        overflow: hidden;

        border-radius: 999px;

        background: rgba(0, 0, 0, 0.08);
    }


    /* ========================================
   ANIMATED FILL
======================================== */

    .ai-voice-hero_content--visual-card-bar span {
        display: block;

        width: 0%;
        height: 100%;

        border-radius: inherit;

        background: var(--ai-gradient);

        transform-origin: left center;

        animation: aiVoiceBarFill 3s ease-in-out infinite;
    }


    /* ========================================
   EMPTY → FULL → EMPTY
======================================== */

    @keyframes aiVoiceBarFill {

        /* -------------------------------
       START EMPTY
    ------------------------------- */

        0% {
            width: 0%;
        }


        /* -------------------------------
       BEGIN FILLING
    ------------------------------- */

        8% {
            width: 8%;
        }

        16% {
            width: 18%;
        }

        25% {
            width: 32%;
        }

        35% {
            width: 48%;
        }

        45% {
            width: 64%;
        }

        55% {
            width: 78%;
        }

        65% {
            width: 91%;
        }


        /* -------------------------------
       COMPLETELY FULL
    ------------------------------- */

        72% {
            width: 100%;
        }

        78% {
            width: 100%;
        }


        /* -------------------------------
       EMPTY AGAIN
    ------------------------------- */

        84% {
            width: 82%;
        }

        90% {
            width: 55%;
        }

        95% {
            width: 25%;
        }

        100% {
            width: 0%;
        }
    }


    /* ========================================
   REDUCED MOTION
    ======================================== */

    @media (prefers-reduced-motion: reduce) {

        .ai-voice-hero_content--visual-card-bar span {
            animation: none;
            width: 65%;
        }
    }

    .ai-voice-hero_content--visual-card-stip {
        background: var(--ai-bg-warm);
        padding: 10px 15px;
        border-radius: var(--ai-radius-md);
    }

    .ai-voice-hero_content--visual-card-stip-text {
        display: grid;
        grid-template-columns: 1fr auto;
        column-gap: 10px;
        row-gap: 8px;
        align-items: center;
    }

    .ai-voice-hero_content--visual-card-stip-text p {
        font-size: 13px;
        font-weight: 500;
        color: var(--ai-text-muted);
    }

    .ai-voice-hero_content--visual-card-stip-text span {
        font-size: 15px;
        font-weight: 700;
        color: var(--ai-text-heading);
    }

    .ai-voice-hero_content--visual-card-stip-bar {
        grid-column: 1 / -1;
        position: relative;
        height: 7px;
        border-radius: var(--ai-radius-full);
        background: var(--ai-border-light);
        overflow: hidden;
    }

    .ai-voice-hero_content--visual-card-stip-bar::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        border-radius: var(--ai-radius-full);
        background: var(--ai-gradient);
        width: 72%;
    }

    .ai-voice-hero_content--visual-card-stip:nth-of-type(2) .ai-voice-hero_content--visual-card-stip-bar::after {
        background: var(--ai-success);
        width: 68%;
    }



    .ai-voice-hero_content--visual-card-features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        margin-top: 6px;
    }

    .ai-voice-hero_content--visual-card-features-items {
        background: var(--ai-card-bg-soft);
        border: 1px solid var(--ai-border-light);
        border-radius: var(--ai-radius-md);
        padding: 14px 8px;
        text-align: center;
    }

    .ai-voice-hero_content--visual-card-features-items span {
        display: block;
        font-size: 18px;
        font-weight: 800;
        color: var(--ai-success);
        margin-bottom: 4px;
    }

    .ai-voice-hero_content--visual-card-features-items:nth-child(2) span {
        color: var(--ai-orange-bright);
    }

    .ai-voice-hero_content--visual-card-features-items:nth-child(3) span {
        color: var(--ai-text);
    }

    .ai-voice-hero_content--visual-card-features-items small {
        font-size: 11px;
        font-weight: 500;
        color: var(--ai-text-muted);
    }

    /* ========================================
   RESPONSIVE
   ======================================== */

    /* ========================================
   TABLET
   Visual hidden
   ======================================== */

    @media (max-width: 900px) {

        .ai-voice-hero {
            padding: 70px 30px;
        }

        .ai-voice-hero_content {
            grid-template-columns: 1fr;
            gap: 50px;
            padding: 0;
        }

        .ai-voice-hero_content--text {
            width: 100%;
            max-width: 720px;
            margin: 0 auto;
            align-items: center;
            text-align: center;
        }

        .ai-voice-hero_content--heading {
            font-size: clamp(38px, 6vw, 44px);
            line-height: 1.12;
            max-width: 700px;
        }

        .ai-voice-hero_content--para {
            width: 100%;
            max-width: 650px;
            font-size: 15px;
        }

        .ai-voice-hero_content--points {
            width: 100%;
            max-width: 520px;
            text-align: left;
        }

        .ai-voice-hero_content--cta {
            align-self: center;
        }

        /* HIDE VISUAL ON TABLET */
        .ai-voice-hero_content--visual {
            display: none;
        }
    }


    /* ========================================
   MOBILE
   Visual becomes visible again
   ======================================== */

    @media (max-width: 600px) {

        .ai-voice-hero {
            padding: 60px 20px;
        }

        .ai-voice-hero_content {
            gap: 40px;
        }

        .ai-voice-hero_content--heading {
            width: 100%;
            font-size: clamp(32px, 9vw, 40px);
            line-height: 1.12;
            letter-spacing: -0.8px;
        }

        .ai-voice-hero_content--para {
            width: 100%;
            max-width: 520px;
            font-size: 14px;
            line-height: 1.6;
        }

        .ai-voice-hero_content--points {
            width: 100%;
            max-width: 480px;
            gap: 10px;
        }

        .ai-voice-hero_content--points p {
            font-size: 14px;
            padding-left: 26px;
        }

        .ai-voice-hero_content--cta {
            align-self: center;
            padding: 13px 22px;
            font-size: 14px;
        }

        /* SHOW VISUAL AGAIN ON MOBILE */
        .ai-voice-hero_content--visual {
            order: -1;
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .ai-voice-hero_content--visual-card {
            width: min(100%, 390px);
            max-width: 390px;
            padding: 20px;
            margin: 0 auto;
        }

        .ai-voice-hero_content--visual-card-shadow {
            inset: -15px 18px;
            transform: rotate(3deg);
        }
    }


    /* ========================================
   SMALL MOBILE
   ======================================== */

    @media (max-width: 420px) {

        .ai-voice-hero {
            padding: 50px 16px;
        }

        .ai-voice-hero_content {
            gap: 35px;
        }

        .ai-voice-hero_content--heading {
            font-size: clamp(28px, 9vw, 32px);
            line-height: 1.15;
        }

        .ai-voice-hero_content--para {
            font-size: 13.5px;
        }

        .ai-voice-hero_content--points {
            gap: 9px;
        }

        .ai-voice-hero_content--points p {
            font-size: 13px;
        }

        .ai-voice-hero_content--cta {
            width: 100%;
            max-width: 240px;
            justify-content: center;
            padding: 13px 18px;
        }

        .ai-voice-hero_content--visual {
            display: flex;
        }

        .ai-voice-hero_content--visual-card {
            width: 100%;
            max-width: 360px;
            padding: 16px;
        }

        .ai-voice-hero_content--visual-card-heading {
            grid-template-columns: 36px minmax(0, 1fr) auto;
            gap: 8px;
        }

        .ai-voice-hero_content--visual-card-heading>span {
            width: 36px;
            height: 36px;
        }

        .ai-voice-hero_content--visual-card-heading-text {
            font-size: 13px;
        }

        .ai-voice-hero_content--visual-card-heading-text p {
            font-size: 10px;
        }

        .ai-voice-hero_content--visual-card-heading a {
            font-size: 9px;
            padding: 4px 7px;
        }

        .ai-voice-hero_content--visual-card-stip-text p {
            font-size: 11px;
        }

        .ai-voice-hero_content--visual-card-stip-text span {
            font-size: 13px;
        }

        .ai-voice-hero_content--visual-card-features {
            gap: 6px;
        }

        .ai-voice-hero_content--visual-card-features-items {
            padding: 10px 4px;
        }

        .ai-voice-hero_content--visual-card-features-items span {
            font-size: 14px;
        }

        .ai-voice-hero_content--visual-card-features-items small {
            font-size: 9px;
        }
    }


    /* ========================================
   VERY SMALL MOBILE
   ======================================== */

    @media (max-width: 350px) {

        .ai-voice-hero {
            padding: 45px 12px;
        }

        .ai-voice-hero_content {
            gap: 30px;
        }

        .ai-voice-hero_content--heading {
            font-size: 27px;
        }

        .ai-voice-hero_content--para {
            font-size: 13px;
        }

        .ai-voice-hero_content--visual {
            display: flex;
        }

        .ai-voice-hero_content--visual-card {
            width: 100%;
            padding: 14px;
        }

        .ai-voice-hero_content--visual-card-features {
            grid-template-columns: 1fr;
        }

        .ai-voice-hero_content--visual-card-features-items {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 12px;
        }

        .ai-voice-hero_content--visual-card-features-items span {
            margin-bottom: 0;
        }
    }


    /* ---------- Reduced Motion ---------- */

    @media (prefers-reduced-motion: reduce) {

        .ai-voice-hero_content--cta,
        .ai-voice-hero_content--visual-card,
        .ai-voice-hero_content--visual-card-shadow {
            transition: none !important;
            animation: none !important;
        }

        .ai-voice-hero_content--cta:hover,
        .ai-voice-hero_content--visual-card:hover {
            transform: none;
        }
    }
</style>


<section class="ai-voice-hero">
    <div class="ai-voice-hero_content">
        <div class="ai-voice-hero_content--text">
            <p class="ai-voice-hero_content--eyebrow">
                <span>
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#1C274C"></path>
                    </svg>
                </span>
                Bulk Voice Call Platform
            </p>
            <h1 class="ai-voice-hero_content--heading">Reach Millions with Bulk Voice Calls</h1>
            <p class="ai-voice-hero_content--para">Send pre-recorded voice messages to thousands of contacts instantly. Perfect for marketing, elections, alerts, reminders, and more — in 20+ regional languages.</p>
            <div class="ai-voice-hero_content--points">
                <p>Upload CSV or integrate via API</p>
                <p>Schedule campaigns with ease</p>
                <p>Live delivery reports & analytics</p>
                <p>DTMF / IVR keypress responses</p>
                <p>100% DND compliant</p>
            </div>
            <a class="ai-voice-hero_content--cta">Try Free Demo
                <span>
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 22V17M4.5 7V2M2 4.5H7M2 19.5H7M13 3L11.2658 7.50886C10.9838 8.24209 10.8428 8.60871 10.6235 8.91709C10.4292 9.1904 10.1904 9.42919 9.91709 9.62353C9.60871 9.84281 9.24209 9.98381 8.50886 10.2658L4 12L8.50886 13.7342C9.24209 14.0162 9.60871 14.1572 9.91709 14.3765C10.1904 14.5708 10.4292 14.8096 10.6235 15.0829C10.8428 15.3913 10.9838 15.7579 11.2658 16.4911L13 21L14.7342 16.4911C15.0162 15.7579 15.1572 15.3913 15.3765 15.0829C15.5708 14.8096 15.8096 14.5708 16.0829 14.3765C16.3913 14.1572 16.7579 14.0162 17.4911 13.7342L22 12L17.4911 10.2658C16.7579 9.98381 16.3913 9.8428 16.0829 9.62353C15.8096 9.42919 15.5708 9.1904 15.3765 8.91709C15.1572 8.60871 15.0162 8.24209 14.7342 7.50886L13 3Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
            </a>
        </div>
        <div class="ai-voice-hero_content--visual">
            <div class="ai-voice-hero_content--visual-card-shadow"></div>
            <div class="ai-voice-hero_content--visual-card">
                <div class="ai-voice-hero_content--visual-card-heading">
                    <span>
                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#1C274C"></path>
                        </svg>
                    </span>
                    <h2 class="ai-voice-hero_content--visual-card-heading-text">
                        Voice Broadcast
                        <p><span></span>Campaign Live</p>
                    </h2>
                    <a href="#">Active</a>
                </div>
                <div class="ai-voice-hero_content--visual-card-body">
                    <div class="ai-voice-hero_content--visual-card-stip">
                        <div class="ai-voice-hero_content--visual-card-stip-text">
                            <p>Calls Dialed</p>
                            <span>24,582</span>
                            <div class="ai-voice-hero_content--visual-card-bar">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="ai-voice-hero_content--visual-card-stip">
                        <div class="ai-voice-hero_content--visual-card-stip-text">
                            <p>Pick-Up Rate</p>
                            <span>68%</span>
                            <div class="ai-voice-hero_content--visual-card-bar">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="ai-voice-hero_content--visual-card-features">
                        <div class="ai-voice-hero_content--visual-card-features-items">
                            <span>16,716</span>
                            <small>Delivered</small>
                        </div>
                        <div class="ai-voice-hero_content--visual-card-features-items">
                            <span>7,866</span>
                            <small>Pending</small>
                        </div>
                        <div class="ai-voice-hero_content--visual-card-features-items">
                            <span>0</span>
                            <small>Failed</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>