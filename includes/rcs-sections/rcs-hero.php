<style>
    :root {
        --ink: #18253a;
        --muted: #66758a;
        --blue: #315ec4;
        --purple: #694ec7;
        --orange: #e96526;
        --line: #dfe6f0;
    }

    body {
        font-family: Manrope, Arial, sans-serif;
        background: #f3f5f8;
        color: var(--ink)
    }

    .kd-rcs-hero {
        position: relative;
        overflow: hidden;
        padding: 56px 20px 62px;
        background:
            radial-gradient(circle at 88% 15%, rgba(75, 91, 211, .14), transparent 26%),
            radial-gradient(circle at 8% 82%, rgba(233, 101, 38, .10), transparent 27%),
            linear-gradient(180deg, #eef1f5 0%, #e7ebf1 100%);
    }

    .kd-rcs-hero:before,
    .kd-rcs-hero:after {
        content: "";
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    .kd-rcs-hero:before {
        width: 460px;
        height: 460px;
        right: -210px;
        top: -230px;
        border: 1px solid rgba(64, 91, 189, .12);
        box-shadow: 0 0 0 45px rgba(64, 91, 189, .025), 0 0 0 90px rgba(64, 91, 189, .018);
    }

    .kd-rcs-hero:after {
        width: 260px;
        height: 260px;
        left: -150px;
        bottom: -180px;
        background: radial-gradient(circle, rgba(232, 100, 36, .09), transparent 68%);
    }

    .kd-rcs-inner {
        width: min(1240px, 100%);
        margin: auto;
        display: grid;
        grid-template-columns: minmax(0, 1.18fr) minmax(430px, .82fr);
        gap: 28px;
        align-items: center;
        position: relative;
        z-index: 2;
    }

    .kd-copy {
        max-width: 690px
    }

    .kd-label {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 14px;
        border-radius: 100px;
        background: #fff;
        border: 1px solid #dce4ef;
        color: #36538a;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: .06em;
        text-transform: uppercase;
        box-shadow: 0 8px 20px rgba(35, 55, 86, .05);
        margin-bottom: 20px;
    }

    .kd-label i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--orange);
        box-shadow: 0 0 0 5px rgba(233, 101, 38, .10);
        animation: pulse 1.8s infinite;
    }

    .kd-title {
        font-family: "Plus Jakarta Sans", sans-serif;
        font-size: clamp(40px, 3.5vw, 50px);
        line-height: 1.12;
        letter-spacing: -.05em;
        font-weight: 800;
        margin-bottom: 19px;
    }

    .kd-title .row {
        display: block;
        white-space: nowrap
    }

    .kd-title .accent {
        background: linear-gradient(90deg, #2d5ec2, #654dcc 68%, #8a4bc3);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .kd-desc {
        max-width: 535px;
        font-size: 15.5px;
        line-height: 1.72;
        color: var(--muted);
        margin-bottom: 20px;
    }

    .kd-desc b {
        color: #30425c
    }

    .kd-points {
        display: flex;
        flex-wrap: wrap;
        gap: 8px 17px;
        margin-bottom: 24px;
    }

    .kd-point {
        display: flex;
        align-items: center;
        gap: 7px;
        color: #526278;
        font-size: 11.5px;
        font-weight: 700;
    }

    .kd-point span {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        background: #eef3ff;
        color: #3d62bd;
        font-size: 10px;
    }

    .kd-actions {
        display: flex;
        gap: 12px;
        align-items: center
    }

    .kd-btn {
        min-height: 50px;
        padding: 0 21px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 13px;
        font-weight: 800;
        transition: .3s ease;
    }

    .kd-btn-primary {
        color: #fff;
        background: linear-gradient(110deg, #2e63c8, #544ec9 55%, #7450c5);
        box-shadow: 0 13px 28px rgba(60, 75, 190, .22);
    }

    .kd-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 18px 35px rgba(60, 75, 190, .3)
    }

    .kd-btn-secondary {
        color: #35445b;
        background: #fff;
        border: 1px solid var(--line)
    }

    .kd-btn-secondary:hover {
        transform: translateY(-2px);
        border-color: #aebddb
    }

    /* VISUAL */
    .kd-visual {
        min-height: 430px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .kd-orbit {
        position: absolute;
        width: 390px;
        height: 390px;
        border-radius: 50%;
        border: 1px dashed rgba(71, 91, 190, .22);
        animation: spin 28s linear infinite;
        pointer-events: none;
    }

    .kd-orbit-dot {
        position: absolute;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        box-shadow: 0 0 0 5px rgba(238, 107, 47, .08);
        background: #ee6b2f;
    }

    .kd-orbit-dot.one {
        top: 0;
        left: 50%;
        transform: translate(-50%, 0);
    }

    .kd-orbit-dot.two {
        right: 18px;
        bottom: 54px;
        background: #4f62c8;
        box-shadow: 0 0 0 5px rgba(79, 98, 200, .08);
    }

    .kd-dashboard {
        width: min(455px, 88%);
        position: relative;
        z-index: 3;
        padding: 18px;
        border-radius: 27px;
        background: rgba(255, 255, 255, .92);
        border: 1px solid rgba(210, 219, 235, .9);
        box-shadow: 0 28px 70px rgba(29, 48, 83, .16);
        backdrop-filter: blur(16px);
        animation: mainFloat 5.5s ease-in-out infinite;
    }

    .kd-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px
    }

    .kd-brand {
        display: flex;
        align-items: center;
        gap: 10px
    }

    .kd-brand-icon {
        width: 40px;
        height: 40px;
        border-radius: 13px;
        display: grid;
        place-items: center;
        color: #fff;
        font-size: 17px;
        background: linear-gradient(135deg, #315fc7, #754fc5);
    }

    .kd-brand b {
        display: block;
        font-size: 13px
    }

    .kd-brand small {
        font-size: 9px;
        color: #748198;
        font-weight: 700
    }

    .kd-live {
        padding: 7px 10px;
        border-radius: 100px;
        background: #fff5ef;
        color: #c95a2c;
        font-size: 9px;
        font-weight: 800;
    }

    .kd-live:before {
        content: "";
        display: inline-block;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #e8642d;
        margin-right: 5px;
        animation: blink 1.2s infinite
    }

    .kd-message {
        padding: 13px;
        border-radius: 17px;
        background: #f7f9fd;
        border: 1px solid #e7edf5;
        margin-bottom: 10px;
    }

    .kd-message .mini-title {
        font-size: 10px;
        font-weight: 800;
        color: #526176;
        margin-bottom: 9px
    }

    .kd-rich-preview {
        display: grid;
        grid-template-columns: 78px 1fr;
        gap: 10px;
        align-items: center;
    }

    .kd-preview-img {
        height: 59px;
        border-radius: 10px;
        background: linear-gradient(135deg, #344b78, #6d91bf 48%, #e8b078);
        position: relative;
        overflow: hidden;
    }

    .kd-preview-img:after {
        content: "";
        position: absolute;
        width: 65px;
        height: 65px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .16);
        right: -25px;
        top: -20px;
    }

    .kd-preview-content b {
        font-size: 10px;
        display: block;
        margin-bottom: 4px
    }

    .kd-preview-content p {
        font-size: 8.5px;
        line-height: 1.45;
        color: #748198
    }

    .kd-quick {
        display: flex;
        gap: 6px;
        margin-top: 7px;
    }

    .kd-quick span {
        padding: 5px 7px;
        border-radius: 6px;
        background: #eaf0ff;
        color: #4161b9;
        font-size: 7px;
        font-weight: 800;
    }

    .kd-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 9px;
        margin-top: 10px
    }

    .kd-stat {
        text-align: center;
        padding: 12px 7px;
        border-radius: 13px;
        background: #fff;
        border: 1px solid #e7ecf4;
    }

    .kd-stat b {
        display: block;
        font-size: 16px;
        color: #304f9d
    }

    .kd-stat:nth-child(2) b {
        color: #32805d
    }

    .kd-stat:nth-child(3) b {
        color: #d2632e
    }

    .kd-stat span {
        font-size: 8px;
        color: #7b8798;
        font-weight: 700
    }

    .kd-float-card {
        position: absolute;
        z-index: 5;
        padding: 12px 15px;
        border-radius: 15px;
        background: rgba(255, 255, 255, .96);
        border: 1px solid #e6ebf3;
        box-shadow: 0 17px 30px rgba(29, 48, 83, .12);
    }

    .kd-float-card b {
        display: block;
        font-size: 18px;
        color: #3e5eaf
    }

    .kd-float-card span {
        font-size: 9px;
        color: #758196;
        font-weight: 700
    }

    .kd-float-one {
        right: -8px;
        top: 50px;
        animation: floatA 5s ease-in-out infinite
    }

    .kd-float-two {
        left: -8px;
        bottom: 45px;
        animation: floatB 5.8s ease-in-out infinite
    }

    .kd-float-two b {
        color: #d2622c
    }

    .kd-mini-icon {
        position: absolute;
        z-index: 4;
        width: 42px;
        height: 42px;
        border-radius: 14px;
        display: grid;
        place-items: center;
        background: #fff;
        box-shadow: 0 13px 24px rgba(29, 48, 83, .13);
        color: #6b55c8;
        font-size: 17px;
    }

    .kd-icon-a {
        left: 24px;
        top: 56px;
        animation: floatA 4.5s ease-in-out infinite -1s
    }

    .kd-icon-b {
        right: 38px;
        bottom: 34px;
        color: #e9682f;
        animation: floatB 4.8s ease-in-out infinite -2s
    }

    @keyframes spin {
        to {
            transform: rotate(360deg)
        }
    }

    @keyframes mainFloat {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(-8px)
        }
    }

    @keyframes floatA {

        0%,
        100% {
            transform: translate(0, 0)
        }

        50% {
            transform: translate(0, -11px)
        }
    }

    @keyframes floatB {

        0%,
        100% {
            transform: translate(0, 0)
        }

        50% {
            transform: translate(0, 9px)
        }
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1
        }

        50% {
            opacity: .25
        }
    }

    @keyframes pulse {

        0%,
        100% {
            box-shadow: 0 0 0 5px rgba(233, 101, 38, .10)
        }

        50% {
            box-shadow: 0 0 0 9px rgba(233, 101, 38, .02)
        }
    }

    @media(max-width:1100px) and (min-width:901px) {
        .kd-rcs-inner {
            grid-template-columns: minmax(0, 1.08fr) minmax(410px, .92fr);
            gap: 22px
        }

        .kd-title {
            font-size: 42px
        }

        .kd-copy {
            max-width: 620px
        }

        .kd-visual {
            min-height: 400px
        }

        .kd-dashboard {
            width: min(430px, 88%)
        }

        .kd-orbit {
            width: 350px;
            height: 350px
        }
    }

    @media(max-width:900px) {
        .kd-rcs-hero {
            padding: 46px 18px 55px
        }

        .kd-rcs-inner {
            grid-template-columns: 1fr;
            gap: 35px;
            text-align: center
        }

        .kd-copy {
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .kd-title {
            font-size: clamp(31px, 6.4vw, 48px)
        }

        .kd-title .row {
            white-space: nowrap
        }

        .kd-desc {
            max-width: 600px
        }

        .kd-points {
            justify-content: center
        }

        .kd-actions {
            justify-content: center
        }

        .kd-visual {
            width: min(520px, 100%);
            min-height: 395px;
            margin: auto
        }

        .kd-float-one {
            right: 0
        }

        .kd-float-two {
            left: 0
        }
    }

    @media(max-width:560px) {
        .kd-rcs-hero {
            padding: 38px 15px 46px
        }

        .kd-label {
            font-size: 9px;
            padding: 7px 11px;
            margin-bottom: 16px
        }

        .kd-title {
            font-size: clamp(27px, 8.2vw, 34px);
            line-height: 1.14;
            margin-bottom: 15px;
            letter-spacing: -.045em
        }

        .kd-title .row {
            white-space: nowrap
        }

        .kd-desc {
            font-size: 13px;
            line-height: 1.65;
            margin-bottom: 17px
        }

        .kd-points {
            gap: 7px 10px;
            margin-bottom: 19px
        }

        .kd-point {
            font-size: 9.5px
        }

        .kd-point span {
            width: 16px;
            height: 16px
        }

        .kd-actions {
            width: 100%;
            gap: 9px
        }

        .kd-btn {
            min-height: 46px;
            padding: 0 14px;
            font-size: 11px;
            flex: 1
        }

        .kd-visual {
            min-height: 330px;
            margin-top: 4px
        }

        .kd-orbit {
            width: 280px;
            height: 280px
        }

        .kd-dashboard {
            width: 82%;
            padding: 12px;
            border-radius: 21px
        }

        .kd-brand-icon {
            width: 33px;
            height: 33px;
            border-radius: 10px;
            font-size: 14px
        }

        .kd-brand b {
            font-size: 10px
        }

        .kd-brand small {
            font-size: 7px
        }

        .kd-live {
            font-size: 7px;
            padding: 6px 7px
        }

        .kd-message {
            padding: 9px;
            border-radius: 13px
        }

        .kd-rich-preview {
            grid-template-columns: 57px 1fr;
            gap: 7px
        }

        .kd-preview-img {
            height: 45px
        }

        .kd-preview-content b {
            font-size: 8px
        }

        .kd-preview-content p {
            font-size: 6.5px
        }

        .kd-quick span {
            font-size: 5.8px;
            padding: 4px 5px
        }

        .kd-stat {
            padding: 8px 3px
        }

        .kd-stat b {
            font-size: 12px
        }

        .kd-stat span {
            font-size: 6.5px
        }

        .kd-float-card {
            padding: 9px 11px;
            border-radius: 12px
        }

        .kd-float-card b {
            font-size: 13px
        }

        .kd-float-card span {
            font-size: 7px
        }

        .kd-float-one {
            right: 0;
            top: 27px
        }

        .kd-float-two {
            left: 0;
            bottom: 25px
        }

        .kd-mini-icon {
            width: 32px;
            height: 32px;
            border-radius: 10px;
            font-size: 13px
        }

        .kd-icon-a {
            left: 3px;
            top: 43px
        }

        .kd-icon-b {
            right: 8px;
            bottom: 17px
        }
    }
</style>

<style id="king-digital-no-underline-fix">
    /* Global underline removal */
    #kingDigitalRcsHero,
    #kingDigitalRcsHero *,
    #kingDigitalRcsHero a,
    #kingDigitalRcsHero a:hover,
    #kingDigitalRcsHero a:focus,
    #kingDigitalRcsHero a:active,
    #kingDigitalRcsHero a:visited {
        text-decoration: none !important;
        text-decoration-line: none !important;
    }
</style>


<style id="king-digital-rcs-mobile-final-fix">
    /* ===== FINAL GLOBAL UNDERLINE FIX ===== */
    #kingDigitalRcsHero a,
    #kingDigitalRcsHero a *,
    #kingDigitalRcsHero .rcs-btn,
    #kingDigitalRcsHero .rcs-btn *,
    #kingDigitalRcsHero button,
    #kingDigitalRcsHero button *,
    #kingDigitalRcsHero [class*="btn"],
    #kingDigitalRcsHero [class*="btn"] *,
    #kingDigitalRcsHero [role="button"],
    #kingDigitalRcsHero [role="button"] * {
        text-decoration: none !important;
        text-decoration-line: none !important;
        text-decoration-thickness: 0 !important;
        text-underline-offset: 0 !important;
        border-bottom-color: transparent !important;
    }

    #kingDigitalRcsHero a:hover,
    #kingDigitalRcsHero a:focus,
    #kingDigitalRcsHero a:active,
    #kingDigitalRcsHero a:visited,
    #kingDigitalRcsHero a:hover *,
    #kingDigitalRcsHero a:focus *,
    #kingDigitalRcsHero a:active * {
        text-decoration: none !important;
        text-decoration-line: none !important;
    }

    /* Prevent theme/container horizontal clipping */
    #kingDigitalRcsHero {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
        overflow: hidden !important;
        box-sizing: border-box !important;
    }

    #kingDigitalRcsHero *,
    #kingDigitalRcsHero *::before,
    #kingDigitalRcsHero *::after {
        box-sizing: border-box;
    }

    /* ===== MOBILE FINAL LAYOUT ===== */
    @media (max-width: 767px) {
        #kingDigitalRcsHero {
            padding: 36px 16px 42px !important;
            text-align: center !important;
        }

        #kingDigitalRcsHero .hero-container,
        #kingDigitalRcsHero .hero-inner,
        #kingDigitalRcsHero .hero-grid,
        #kingDigitalRcsHero .rcs-hero-grid,
        #kingDigitalRcsHero .hero-content,
        #kingDigitalRcsHero .hero-copy,
        #kingDigitalRcsHero .hero-visual,
        #kingDigitalRcsHero .visual-wrap {
            width: 100% !important;
            max-width: 100% !important;
            min-width: 0 !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        #kingDigitalRcsHero .hero-grid,
        #kingDigitalRcsHero .rcs-hero-grid {
            grid-template-columns: 1fr !important;
            gap: 32px !important;
            align-items: center !important;
            justify-items: center !important;
        }

        #kingDigitalRcsHero .hero-content,
        #kingDigitalRcsHero .hero-copy {
            order: 1 !important;
            text-align: center !important;
            align-items: center !important;
            justify-content: center !important;
        }

        #kingDigitalRcsHero .hero-visual,
        #kingDigitalRcsHero .visual-wrap {
            order: 2 !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            overflow: visible !important;
        }

        #kingDigitalRcsHero .eyebrow,
        #kingDigitalRcsHero .hero-eyebrow {
            margin-left: auto !important;
            margin-right: auto !important;
            justify-content: center !important;
        }

        #kingDigitalRcsHero h1,
        #kingDigitalRcsHero .hero-title {
            width: 100% !important;
            max-width: 100% !important;
            margin-left: auto !important;
            margin-right: auto !important;
            font-size: clamp(31px, 9vw, 44px) !important;
            line-height: 1.12 !important;
            letter-spacing: -0.045em !important;
            text-align: center !important;
            overflow-wrap: normal !important;
            word-break: normal !important;
        }

        #kingDigitalRcsHero .hero-description,
        #kingDigitalRcsHero .hero-copy p {
            width: 100% !important;
            max-width: 520px !important;
            margin-left: auto !important;
            margin-right: auto !important;
            text-align: center !important;
            font-size: 16px !important;
            line-height: 1.7 !important;
        }

        #kingDigitalRcsHero .hero-points,
        #kingDigitalRcsHero .trust-points,
        #kingDigitalRcsHero .hero-features {
            width: 100% !important;
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: center !important;
            align-items: center !important;
            gap: 10px 14px !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        #kingDigitalRcsHero .hero-actions,
        #kingDigitalRcsHero .cta-group {
            width: 100% !important;
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: center !important;
            align-items: center !important;
            gap: 12px !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        #kingDigitalRcsHero .hero-actions a,
        #kingDigitalRcsHero .hero-actions button,
        #kingDigitalRcsHero .cta-group a,
        #kingDigitalRcsHero .cta-group button {
            width: auto !important;
            min-width: 0 !important;
            max-width: calc(100vw - 32px) !important;
            white-space: normal !important;
            text-align: center !important;
        }

        /* Scale visual/dashboard down so nothing is cut on mobile */
        #kingDigitalRcsHero .dashboard-wrap,
        #kingDigitalRcsHero .rcs-dashboard-wrap,
        #kingDigitalRcsHero .hero-dashboard,
        #kingDigitalRcsHero .dashboard {
            width: min(100%, 430px) !important;
            max-width: 100% !important;
            min-width: 0 !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* Keep floating decorations inside the viewport */
        #kingDigitalRcsHero .floating-card,
        #kingDigitalRcsHero .float-card,
        #kingDigitalRcsHero .metric-card {
            max-width: 44vw !important;
        }
    }

    @media (max-width: 480px) {
        #kingDigitalRcsHero {
            padding-left: 12px !important;
            padding-right: 12px !important;
        }

        #kingDigitalRcsHero h1,
        #kingDigitalRcsHero .hero-title {
            font-size: clamp(29px, 8.5vw, 38px) !important;
        }

        #kingDigitalRcsHero .hero-actions,
        #kingDigitalRcsHero .cta-group {
            flex-direction: column !important;
        }

        #kingDigitalRcsHero .hero-actions a,
        #kingDigitalRcsHero .hero-actions button,
        #kingDigitalRcsHero .cta-group a,
        #kingDigitalRcsHero .cta-group button {
            width: min(100%, 300px) !important;
        }
    }
</style>


<section class="kd-rcs-hero">
    <div class="kd-rcs-inner">

        <div class="kd-copy">
            <div class="kd-label"><i></i> RCS Business Messaging by KING DIGITAL</div>

            <h1 class="kd-title">
                <span class="row">Turn Every Message Into a</span>
                <span class="row accent">Rich Customer Experience.</span>
            </h1>

            <p class="kd-desc">
                Create interactive conversations with <b>rich media, branded messages, quick replies and smart actions</b> — all through a modern RCS experience built to engage customers better.
            </p>

            <div class="kd-points">
                <div class="kd-point"><span>✓</span> Google RCS Ready</div>
                <div class="kd-point"><span>✓</span> Rich Interactive Media</div>
                <div class="kd-point"><span>✓</span> Enterprise Scale</div>
            </div>

            <div class="kd-actions">
                <a class="kd-btn kd-btn-primary" href="#contact">Get Started with RCS</a>
                <a class="kd-btn kd-btn-secondary" href="#features">Explore Features</a>
            </div>
        </div>

        <div class="kd-visual">
            <div class="kd-orbit"><span class="kd-orbit-dot one"></span><span class="kd-orbit-dot two"></span></div>
            <div class="kd-mini-icon kd-icon-a">✦</div>
            <div class="kd-mini-icon kd-icon-b">◌</div>

            <div class="kd-dashboard">
                <div class="kd-top">
                    <div class="kd-brand">
                        <div class="kd-brand-icon">▣</div>
                        <div>
                            <b>KING DIGITAL RCS</b>
                            <small>Business Messaging Platform</small>
                        </div>
                    </div>
                    <div class="kd-live">Live Campaign</div>
                </div>

                <div class="kd-message">
                    <div class="mini-title">Rich message preview</div>
                    <div class="kd-rich-preview">
                        <div class="kd-preview-img"></div>
                        <div class="kd-preview-content">
                            <b>Your next customer conversation starts here</b>
                            <p>Send rich cards, images and action-driven messages in one seamless experience.</p>
                            <div class="kd-quick"><span>View Details</span><span>Get Started</span></div>
                        </div>
                    </div>
                </div>

                <div class="kd-stats">
                    <div class="kd-stat"><b>98%</b><span>Read Rate</span></div>
                    <div class="kd-stat"><b>3×</b><span>Higher CTR</span></div>
                    <div class="kd-stat"><b>24/7</b><span>Campaigns</span></div>
                </div>
            </div>

            <div class="kd-float-card kd-float-one">
                <b>+62%</b>
                <span>Customer engagement</span>
            </div>

            <div class="kd-float-card kd-float-two">
                <b>RCS</b>
                <span>Verified brand messaging</span>
            </div>
        </div>

    </div>
</section>