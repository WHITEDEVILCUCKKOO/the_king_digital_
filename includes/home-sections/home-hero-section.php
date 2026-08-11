<style>
    :root {

        /* ========================================
       BRAND COLORS
         ======================================== */

        --color-primary: #F47B20;
        --color-primary-light: #FF9A4A;
        --color-primary-dark: #D85F0B;

        --color-secondary: #4F7FF7;
        --color-secondary-light: #7FA3FF;
        --color-secondary-dark: #315FCC;


        /* ========================================
       BACKGROUNDS
        ======================================== */

        --color-bg: #FFFFFF;
        --color-bg-soft: #F7F8FA;
        --color-bg-muted: #EEF1F5;

        --color-bg-dark: #1C3D7B;
        --color-bg-dark-soft: #1A2233;


        /* ========================================
       TEXT
        ======================================== */

        --color-text: #171B26;
        --color-text-secondary: #5F6673;
        --color-text-muted: #8A919D;

        --color-text-light: #FFFFFF;
        --color-text-light-secondary: #C4C9D2;


        /* ========================================
       BORDERS
        ======================================== */

        --color-border: #E3E7ED;
        --color-border-dark: #30394A;


        /* ========================================
       PRIMARY GRADIENTS
    ======================================== */

        --gradient-primary:
            linear-gradient(135deg,
                #F47B20 0%,
                #FF9A4A 100%);

        --gradient-primary-dark:
            linear-gradient(135deg,
                #D85F0B 0%,
                #F47B20 100%);


        /* ========================================
       SECONDARY GRADIENTS
    ======================================== */

        --gradient-secondary:
            linear-gradient(135deg,
                #315FCC 0%,
                #4F7FF7 50%,
                #7FA3FF 100%);

        --gradient-secondary-dark:
            linear-gradient(135deg,
                #244BA5 0%,
                #315FCC 100%);


        /* ========================================
       BRAND GRADIENTS
    ======================================== */

        --gradient-brand:
            linear-gradient(135deg,
                #F47B20 0%,
                #FF9A4A 45%,
                #4F7FF7 100%);

        --gradient-brand-reverse:
            linear-gradient(135deg,
                #4F7FF7 0%,
                #7FA3FF 55%,
                #F47B20 100%);


        /* ========================================
       DARK GRADIENTS
    ======================================== */

        --gradient-dark:
            linear-gradient(135deg,
                #111827 0%,
                #1A2233 100%);


        /* ========================================
       GLOW
    ======================================== */

        --gradient-glow:
            radial-gradient(circle,
                rgba(244, 123, 32, 0.16) 0%,
                rgba(244, 123, 32, 0) 70%);

        --gradient-glow-secondary:
            radial-gradient(circle,
                rgba(79, 127, 247, 0.18) 0%,
                rgba(79, 127, 247, 0) 70%);


        /* ========================================
       STATUS COLORS
    ======================================== */

        --color-success: #16A34A;
        --color-warning: #D99100;
        --color-danger: #DC2626;
        --color-info: #4F7FF7;


        /* ========================================
       SHADOWS
    ======================================== */

        --shadow-sm:
            0 2px 8px rgba(15, 23, 42, 0.06);

        --shadow-md:
            0 8px 24px rgba(15, 23, 42, 0.10);

        --shadow-lg:
            0 16px 40px rgba(15, 23, 42, 0.14);

        --shadow-orange:
            0 10px 30px rgba(244, 123, 32, 0.18);

        --shadow-blue:
            0 10px 30px rgba(79, 127, 247, 0.18);


        /* ========================================
       RADIUS
    ======================================== */

        --radius-sm: 6px;
        --radius-md: 10px;
        --radius-lg: 16px;
        --radius-xl: 24px;
        --radius-full: 999px;


        /* ========================================
       TRANSITIONS
    ======================================== */

        --transition-fast: 150ms ease;
        --transition-normal: 250ms ease;
        --transition-slow: 400ms ease;
    }


    #home-hero-section {
        position: relative;
        background: radial-gradient(ellipse 90% 70% at 15% 15%, #081742 0%, #254295 45%, #08384e 75%, #082146 100%);
        padding: 60px;
        overflow: hidden;
    }

    #home-hero-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 78% 45%, rgba(56, 191, 140, 0.18) 0%, transparent 45%);
        pointer-events: none;
    }

    .home-hero-water {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;

        pointer-events: none;
        z-index: 1;
    }

    .home-hero-section_conetent {
        position: relative;
        z-index: 1;
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 30px;
        align-items: center;
    }

    /* ---------- Left info column ---------- */

    .home-hero-section_info {
        display: flex;
        flex-direction: column;
        align-items: flex-start;

    }

    .home-hero-section_badge {
        display: flex;
        align-items: center;
        gap: 10px;
        background: rgba(255, 255, 255, 0.35);
        border: 1px solid rgba(255, 255, 255, 0.14);
        padding: 7px 14px 7px 10px;
        border-radius: 999px;
        margin-bottom: 18px;
    }

    .home-hero-section_badge-google {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 10px;
        font-weight: 700;
        color: var(--color-text-light);
    }

    .home-hero-section_badge-google-icon {
        width: 14px;
        height: 14px;
        display: inline-flex;
    }

    .home-hero-section_badge-google-icon img {
        width: 100%;
        height: 100%;
        display: block;
    }

    .home-hero-section_badge-stars {
        display: inline-flex;
        gap: 2px;
        padding-left: 8px;
        border-left: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 10px;
        color: yellow;
    }

    .home-hero-section_badge-stars::before {
        content: none;
    }

    .home-hero-section_badge-stars span {
        display: inline-block;
    }

    .home-hero-section_badge-rating {
        font-size: 10px;
        color: var(--color-bg-muted);
        /* padding-left: 8px; */
    }

    .home-hero-section_badge-rating span {
        color: #ffffff;
        font-weight: 800;
    }

    .home-hero-section_title {
        margin: 0 0 18px;
        font-size: 42px;
        line-height: 1.18;
        color: var(--color-text-light);
        letter-spacing: -0.5px;
    }

    .home-hero-section_title span {
        background: var(--gradient-primary-dark);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
    }

    .home-hero-section_autotyping {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 20px;
        font-weight: 700;
        color: var(--color-bg-soft);
        margin-bottom: 18px;
        min-height: 22px;
    }

    .home-hero-section_autotyping .typing {
        color: var(--color-text-light-secondary);
        border-right: 2px solid #7fe3bd;
        padding-right: 3px;
        animation: blink-caret 0.8s step-end infinite;
        white-space: nowrap;
    }

    @keyframes blink-caret {

        0%,
        100% {
            border-color: #7fe3bd;
        }

        50% {
            border-color: transparent;
        }
    }

    .home-hero-section_description {
        font-size: 15px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.62);
        max-width: 460px;
        margin: 0 0 34px;
    }

    .home-hero-section_cta-section {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .home-hero-section_cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 13px 26px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        transition: transform 0.2s ease, background 0.2s ease, opacity 0.2s ease;
    }

    a.home-hero-section_cta-button:first-of-type {
        background: #ffffff;
        color: var(--color-primary);
    }

    a.home-hero-section_cta-button:first-of-type:hover {
        transform: translateY(-2px);
        opacity: 0.92;
        background: var(--color-info);
        color: var(--color-text-light);

    }

    a.home-hero-section_cta-button:last-of-type {
        background: transparent;
        color: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    a.home-hero-section_cta-button:last-of-type:hover {
        transform: translateY(-2px);
        border-color: #ffffff;
    }

    /* ---------- Right AI card ---------- */

    .home-hero-section_ai {
        display: flex;
        justify-content: center;
    }

    /* NOTE: overflow is intentionally NOT hidden here anymore — that was clipping/hiding
     the agent dropdown when it opened. Rounding is instead handled per-section below. */
    .home-hero-section_ai-card {
        position: relative;
        width: 100%;
        max-width: 450px;
        background: var(--gradient-secondary-dark);
        filter: blur(0.2);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 22px;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.35);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .home-hero-section_ai-card h3 {
        width: 100%;
        margin: 0;
        text-align: center;
        background: var(--gradient-secondary);
        color: var(--color-text-light);
        font-size: 14px;
        padding: 14px 0;
        border-radius: 22px 22px 0 0;
    }

    .ai-assistant-card {
        position: relative;
        width: 100%;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: radial-gradient(circle at center, rgba(58, 199, 150, 0.16) 0%, transparent 65%);
        overflow: hidden;
    }

    /* ---- pulse waves ---- */
    .ai-assistant-card>span {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        border: 1px solid;
        transform: translate(-50%, -50%) scale(0.15);
        opacity: 0;
        pointer-events: none;
        animation: ripple 3s linear infinite;
    }

    .ai-assistant-card>span:nth-of-type(1) {
        border-color: rgba(255, 255, 255, 0.5);
        animation-delay: 0s;
    }

    .ai-assistant-card>span:nth-of-type(2) {
        border-color: rgba(250, 204, 21, 0.5);
        animation-delay: 0.8s;
    }

    .ai-assistant-card>span:nth-of-type(3) {
        border-color: rgba(239, 68, 68, 0.5);
        animation-delay: 1.5s;
    }

    .ai-assistant-card>span:nth-of-type(4) {
        border-color: rgba(59, 130, 246, 0.5);
        animation-delay: 2s;
    }

    @keyframes ripple {
        0% {
            transform: translate(-50%, -50%) scale(0.15);
            opacity: 0;
            border-width: 1px;
        }

        10% {
            transform: translate(-50%, -50%) scale(0.35);
            opacity: 0.18;
            border-width: 1px;
        }

        20% {
            transform: translate(-50%, -50%) scale(0.7);
            opacity: 0.32;
            border-width: 1.5px;
        }

        30% {
            transform: translate(-50%, -50%) scale(1.15);
            opacity: 0.48;
            border-width: 1.7px;
        }

        40% {
            transform: translate(-50%, -50%) scale(1.7);
            opacity: 0.58;
            border-width: 2px;
        }

        50% {
            transform: translate(-50%, -50%) scale(2.3);
            opacity: 0.5;
            border-width: 1.5px;
        }

        60% {
            transform: translate(-50%, -50%) scale(3);
            opacity: 0.38;
            border-width: 1.4px;
        }

        70% {
            transform: translate(-50%, -50%) scale(3.8);
            opacity: 0.25;
            border-width: 1.2px;
        }

        80% {
            transform: translate(-50%, -50%) scale(4.6);
            opacity: 0.14;
            border-width: 1px;
        }

        90% {
            transform: translate(-50%, -50%) scale(5.3);
            opacity: 0.06;
            border-width: 1px;
        }

        100% {
            transform: translate(-50%, -50%) scale(6);
            opacity: 0;
            border-width: 1px;
        }
    }

    /* ---- central glass AI orb ---- */
    .ai-assistant-circle {
        position: relative;
        z-index: 2;
        width: 96px;
        height: 96px;
        background: radial-gradient(circle at 35% 30%, #BFD3FF 0%, #5F88F5 42%, #284FAE 75%, #183579 100%);
        filter: drop-shadow(0 0 34px rgba(79, 211, 154, 0.65));
        animation:
            blob-glow 2.6s ease-in-out infinite,
            blob-drift 7s ease-in-out infinite,
            blob-morph 6s linear infinite;
    }

    @keyframes blob-glow {

        0%,
        100% {
            filter: drop-shadow(0 0 26px rgba(51, 112, 193, 0.55));
        }

        50% {
            filter: drop-shadow(0 0 46px rgba(16, 68, 210, 0.9));
        }
    }

    @keyframes blob-drift {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(0, -2.5px) scale(1.02);
        }
    }

    @keyframes blob-morph {
        0% {
            border-radius: 58% 42% 45% 55% / 55% 48% 58% 42%;
        }

        16.6% {
            border-radius: 72% 28% 42% 58% / 58% 46% 68% 32%;
        }

        33.3% {
            border-radius: 38% 62% 68% 32% / 70% 30% 40% 60%;
        }

        50% {
            border-radius: 60% 40% 30% 70% / 35% 68% 60% 32%;
        }

        66.6% {
            border-radius: 30% 70% 62% 38% / 62% 38% 30% 70%;
        }

        83.3% {
            border-radius: 65% 35% 55% 45% / 40% 62% 45% 55%;
        }

        100% {
            border-radius: 58% 42% 45% 55% / 55% 48% 58% 42%;
        }
    }

    /* ---- internal glass reflections ---- */
    .ai-assistant-circle span {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    .ai-assistant-circle span:nth-of-type(1) {
        top: 14%;
        left: 22%;
        width: 34px;
        height: 20px;
        background: rgba(255, 255, 255, 0.75);
        filter: blur(3px);
        transform: rotate(-20deg);
        animation: light-shift 5s ease-in-out infinite;
    }

    .ai-assistant-circle span:nth-of-type(3) {
        top: 30%;
        left: 32%;
        width: 20px;
        height: 12px;
        background: rgba(255, 255, 255, 0.30);
        filter: blur(4px);
        transform: rotate(-15deg);
    }

    .ai-assistant-circle span:nth-of-type(2) {
        bottom: 10px;
        left: 10px;
        right: 10px;
        height: 24px;
        background: rgba(6, 40, 28, 0.35);
        filter: blur(6px);
    }

    .ai-assistant-circle span:nth-of-type(4) {
        display: none;
    }

    @keyframes light-shift {

        0%,
        100% {
            opacity: 0.75;
            transform: rotate(-20deg) translate(0, 0);
        }

        50% {
            opacity: 0.9;
            transform: rotate(-18deg) translate(1px, -1px);
        }
    }

    .home-hero-section_ai-card>p {
        font-size: 12px;
        font-style: italic;
        color: var(--color-text-muted);
        margin: 0 0 18px;
    }

    /* ---- Select Agent trigger button ---- */
    .ai-assistant-options {
        padding: 0;
        width: 100%;
    }

    .ai-assistant-options>button {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.16);
        color: #ffffff;
        font-size: 13px;
        font-weight: 600;
        padding: 10px 16px;
        border-radius: 999px;
        cursor: pointer;
        width: 100%;
        justify-content: center;
    }

    .ai-assistant-options>button span:first-child {
        width: 14px;
        height: 14px;
        display: inline-flex;
        background: rgba(255, 255, 255, 0.7);
        -webkit-mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.5c-3.5 0-10.4 1.7-10.4 5.2v2.1h20.8v-2.1c0-3.5-6.9-5.2-10.4-5.2z'/></svg>") center / contain no-repeat;
        mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.5c-3.5 0-10.4 1.7-10.4 5.2v2.1h20.8v-2.1c0-3.5-6.9-5.2-10.4-5.2z'/></svg>") center / contain no-repeat;
    }

    .ai-assistant-options>button span:last-child {
        width: 10px;
        height: 10px;
        border-right: 2px solid rgba(255, 255, 255, 0.7);
        border-bottom: 2px solid rgba(255, 255, 255, 0.7);
        transform: rotate(45deg);
        margin-top: -4px;
        transition: transform 0.2s ease;
    }

    .ai-assistant-options.open>button span:last-child {
        transform: rotate(-135deg);
        margin-top: 4px;
    }

    /* Positioned relative to the whole card (not the half-width button column)
     so it spans the full card width and is never clipped. */
    .ai-assistant-options_list {
        position: absolute;
        bottom: 70px;
        left: 20px;
        right: 20px;
        max-height: 260px;
        overflow-y: auto;
        background: radial-gradient(ellipse 90% 70% at 15% 15%, #081742 0%, #254295 45%, #08384e 75%, #082146 100%);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 6px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(8px);
        transition: opacity 0.2s ease, transform 0.2s ease;
        z-index: 20;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
    }

    .ai-assistant-options.open .ai-assistant-options_list {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .ai-assistant-options_item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px;
        border-radius: 10px;
        cursor: pointer;
    }

    .ai-assistant-options_item:hover {
        background: rgba(255, 255, 255, 0.05);
    }

    .ai-assistant-options_item-icon {
        width: 26px;
        height: 26px;
        flex-shrink: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ai-assistant-options_item-icon svg {
        width: 12px;
        height: 12px;
        fill: rgba(255, 255, 255, 0.6);
    }

    .ai-assistant-options_item-text {
        flex: 1;
        min-width: 0;
    }

    .ai-assistant-options_item-text strong {
        display: block;
        font-size: 12.5px;
        line-height: 1.3;
        color: #ffffff;
        font-weight: 700;
        white-space: nowrap;
    }

    .ai-assistant-options_item-text small {
        display: block;
        font-size: 10.5px;
        line-height: 1.3;
        color: rgba(255, 255, 255, 0.5);
        margin-top: 1px;
        white-space: nowrap;
    }

    .ai-assistant-options_item-tag {
        flex-shrink: 0;
        font-size: 9px;
        font-weight: 800;
        padding: 2px 6px;
        border-radius: 4px;
        letter-spacing: 0.3px;
    }

    .ai-assistant-options_item-tag.ind {
        background: var(--color-primary);
        color: var(--color-bg-soft);
    }

    .ai-assistant-options_item-tag.eng {
        background: var(--color-primary-light);
        color: var(--color-bg-soft);
    }

    /* ---- Talk With AI button ---- */
    .buttons-row>button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: var(--gradient-primary);
        color: #ffffff;
        border: none;
        font-size: 13px;
        font-weight: 700;
        padding: 11px 20px;
        border-radius: 999px;
        cursor: pointer;
        flex: 1;
    }

    .buttons-row>button::before {
        content: "";
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 8px solid #ffffff;
    }

    .home-hero-section_ai-card .buttons-row {
        display: flex;
        gap: 10px;
        padding: 0 20px 20px;
        width: 100%;
    }

    .buttons-row .ai-assistant-options {
        flex: 1;
    }

    @media (max-width: 900px) {
        .home-hero-section_conetent {
            grid-template-columns: 1fr;
        }

        .home-hero-section_info {
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .home-hero-section_title {
            /* text-align: center; */
            font-size: 34px;
        }

        .home-hero-section_title span {
            display: block;
            /* text-align: center; */
        }

        #home-hero-section {
            padding: 60px 24px;
        }
    }
</style>

<section class="home-hero-section" id="home-hero-section">
    <canvas class="home-hero-water" id="homeHeroWater"></canvas>
    <div class="home-hero-section_conetent">
        <div class="home-hero-section_info">
            <div class="home-hero-section_badge">
                <div class="home-hero-section_badge-google">
                    <span class="home-hero-section_badge-google-icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google Icon">
                    </span>
                    <span>Google</span>
                </div>
                <span class="home-hero-section_badge-stars">★★★★★</span>
                <div class="home-hero-section_badge-rating"><span>4.9</span> Customer Rating</div>
            </div>
            <h1 class="home-hero-section_title">
                Empowering Communication with
                <span>AI-Driven KingDigital</span>
            </h1>
            <div class="home-hero-section_autotyping">
                <span class="typed">Smart Solutions for</span>
                <span class="typing"></span>
            </div>
            <p class="home-hero-section_description">
                Deploy official WhatsApp Business API, A2P bulk SMS, IVR, and AI voice bots on your own server — or use our secure cloud communications platform.
            </p>
            <div class="home-hero-section_cta-section">
                <a href="#contact" class="home-hero-section_cta-button">Get Started</a>
                <a href="#services" class="home-hero-section_cta-button">Explore Services</a>
            </div>
        </div>
        <div class="home-hero-section_ai">
            <div class="home-hero-section_ai-card">
                <h3>AI Assistant</h3>
                <div class="ai-assistant-card">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="ai-assistant-circle">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <p>Select an agent, then Talk With AI</p>
                <div class="buttons-row">
                    <div class="ai-assistant-options" id="agentDropdown">
                        <button type="button" id="agentDropdownToggle">
                            <span></span>
                            Select Agent
                            <span></span>
                        </button>
                        <div class="ai-assistant-options_list">
                            <div class="ai-assistant-options_item">
                                <div class="ai-assistant-options_item-icon">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                    </svg>
                                </div>
                                <div class="ai-assistant-options_item-text">
                                    <strong>AI Assistant</strong>
                                    <small>Female · Hinglish</small>
                                </div>
                                <span class="ai-assistant-options_item-tag ind">IND</span>
                            </div>
                            <div class="ai-assistant-options_item">
                                <div class="ai-assistant-options_item-icon">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                    </svg>
                                </div>
                                <div class="ai-assistant-options_item-text">
                                    <strong>AI Assistant</strong>
                                    <small>Male · Hinglish</small>
                                </div>
                                <span class="ai-assistant-options_item-tag ind">IND</span>
                            </div>
                            <div class="ai-assistant-options_item">
                                <div class="ai-assistant-options_item-icon">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                    </svg>
                                </div>
                                <div class="ai-assistant-options_item-text">
                                    <strong>AI Assistant</strong>
                                    <small>Male · English</small>
                                </div>
                                <span class="ai-assistant-options_item-tag eng">ENG</span>
                            </div>
                            <div class="ai-assistant-options_item">
                                <div class="ai-assistant-options_item-icon">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                    </svg>
                                </div>
                                <div class="ai-assistant-options_item-text">
                                    <strong>AI Assistant</strong>
                                    <small>Female · English</small>
                                </div>
                                <span class="ai-assistant-options_item-tag eng">ENG</span>
                            </div>
                        </div>
                    </div>
                    <button type="button">Talk With AI</button>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        /* ---- Autotyping effect ---- */
        var phrases = ["Business WhatsApp API", "IVR Solutions", "Bulk SMS"];
        var typingEl = document.querySelector('.home-hero-section_autotyping .typing');
        var phraseIndex = 0;
        var charIndex = 0;
        var deleting = false;

        function tick() {
            var current = phrases[phraseIndex];

            if (!deleting) {
                charIndex++;
                typingEl.textContent = current.substring(0, charIndex);
                if (charIndex === current.length) {
                    deleting = true;
                    setTimeout(tick, 1400);
                    return;
                }
            } else {
                charIndex--;
                typingEl.textContent = current.substring(0, charIndex);
                if (charIndex === 0) {
                    deleting = false;
                    phraseIndex = (phraseIndex + 1) % phrases.length;
                }
            }

            setTimeout(tick, deleting ? 40 : 80);
        }

        tick();

        /* ---- Agent dropdown toggle ---- */
        var dropdown = document.getElementById('agentDropdown');
        var toggle = document.getElementById('agentDropdownToggle');

        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            dropdown.classList.toggle('open');
        });

        document.addEventListener('click', function() {
            dropdown.classList.remove('open');
        });

        dropdown.querySelectorAll('.ai-assistant-options_item').forEach(function(item) {
            item.addEventListener('click', function() {
                var name = item.querySelector('strong').textContent;
                toggle.childNodes[1].textContent = ' ' + name + ' ';
                dropdown.classList.remove('open');
            });
        });
    });

    document.addEventListener("DOMContentLoaded", () => {

        /* ========================================
           ELEMENTS
        ======================================== */

        const hero = document.querySelector(".home-hero-section");
        const canvas = document.getElementById("homeHeroWater");

        if (!hero || !canvas) {
            return;
        }

        const ctx = canvas.getContext("2d");

        if (!ctx) {
            return;
        }


        /* ========================================
           CANVAS VARIABLES
        ======================================== */

        let width = 0;
        let height = 0;

        let dpr = Math.min(
            window.devicePixelRatio || 1,
            2
        );


        /* ========================================
           MOUSE VARIABLES
        ======================================== */

        let mouseX = -1000;
        let mouseY = -1000;

        let previousMouseX = -1000;
        let previousMouseY = -1000;

        let lastRippleX = -1000;
        let lastRippleY = -1000;

        let mouseInside = false;


        /* ========================================
           RIPPLE STORAGE
        ======================================== */

        const ripples = [];


        /* ========================================
           SETTINGS
        ======================================== */

        const settings = {

            /*
             * Minimum and maximum final ripple size.
             *
             * These are deliberately much larger
             * than the previous version.
             */

            minSize: 50,
            maxSize: 150,


            /*
             * Expansion speed.
             */

            animationSpeed: 2.1,


            /*
             * Existing water color family.
             *
             * This does NOT change your hero theme.
             */

            color: "148, 217, 255",


            /*
             * Keep the effect subtle.
             */

            opacity: 0.18,


            /*
             * Cursor must move this far before
             * another disturbance is created.
             */

            rippleDistance: 26,


            /*
             * Maximum simultaneous disturbances.
             */

            maxRipples: 16,


            /*
             * Number of points used to draw
             * an irregular water circumference.
             */

            ringPoints: 100
        };


        /* ========================================
           RESIZE CANVAS
        ======================================== */

        function resizeCanvas() {

            const rect =
                hero.getBoundingClientRect();


            width = rect.width;
            height = rect.height;


            dpr = Math.min(
                window.devicePixelRatio || 1,
                2
            );


            canvas.width =
                Math.round(width * dpr);

            canvas.height =
                Math.round(height * dpr);


            canvas.style.width =
                `${width}px`;

            canvas.style.height =
                `${height}px`;


            /*
             * Draw using CSS pixel coordinates
             * while keeping the canvas sharp on
             * high-DPI displays.
             */

            ctx.setTransform(
                dpr,
                0,
                0,
                dpr,
                0,
                0
            );
        }


        resizeCanvas();


        window.addEventListener(
            "resize",
            resizeCanvas
        );


        /* ========================================
           DISTANCE
        ======================================== */

        function getDistance(
            x1,
            y1,
            x2,
            y2
        ) {

            const dx = x2 - x1;
            const dy = y2 - y1;

            return Math.sqrt(
                dx * dx +
                dy * dy
            );
        }


        /* ========================================
           CREATE RIPPLE
        ======================================== */

        function createRipple(
            x,
            y,
            velocity
        ) {

            /*
             * Remove oldest ripple if we
             * reach the maximum.
             */

            if (
                ripples.length >=
                settings.maxRipples
            ) {

                ripples.shift();
            }


            /*
             * Convert cursor velocity into
             * a value between 0 and 1.
             */

            const strength =
                Math.min(
                    velocity / 35,
                    1
                );


            /*
             * Faster cursor =
             * larger disturbance.
             */

            const maxRadius =
                settings.minSize +
                (
                    settings.maxSize -
                    settings.minSize
                ) * strength;


            /*
             * Give every ripple slightly
             * different characteristics.
             */

            const ripple = {

                x: x,
                y: y,


                /*
                 * Current radius.
                 */

                radius: 5,


                /*
                 * Final radius.
                 */

                maxRadius: maxRadius,


                /*
                 * Animation speed.
                 */

                speed: settings.animationSpeed +
                    strength * 1.3,


                /*
                 * Base opacity.
                 */

                opacity: settings.opacity +
                    strength * 0.10,


                /*
                 * Random seed for
                 * irregular water shape.
                 */

                seed: Math.random() * 10000,


                /*
                 * Rotation prevents all
                 * ripples from looking identical.
                 */

                rotation: Math.random() *
                    Math.PI *
                    2,


                /*
                 * Small variation in shape.
                 */

                distortion: 0.018 +
                    Math.random() * 0.012,


                /*
                 * Current life.
                 */

                life: 0
            };


            ripples.push(ripple);
        }


        /* ========================================
           CREATE MULTIPLE WATER BANDS
        ======================================== */

        function drawWaterRing(
            ripple,
            radius,
            opacity,
            lineWidth,
            blur
        ) {

            ctx.save();


            ctx.translate(
                ripple.x,
                ripple.y
            );


            ctx.rotate(
                ripple.rotation
            );


            /*
             * Slightly flatten the ring.
             *
             * This prevents it from looking
             * like a perfect geometric circle.
             */

            ctx.scale(
                1,
                0.88
            );


            ctx.beginPath();


            const points =
                settings.ringPoints;


            for (
                let i = 0; i <= points; i++
            ) {

                const angle =
                    (
                        i / points
                    ) *
                    Math.PI *
                    2;


                /*
                 * Multiple low-frequency
                 * sine waves create the
                 * irregular water surface.
                 */

                const noise1 =
                    Math.sin(
                        angle * 3 +
                        ripple.seed
                    ) *
                    ripple.distortion;


                const noise2 =
                    Math.sin(
                        angle * 6 +
                        ripple.seed * 1.7
                    ) *
                    ripple.distortion *
                    0.55;


                const noise3 =
                    Math.sin(
                        angle * 11 +
                        ripple.seed * 0.63
                    ) *
                    ripple.distortion *
                    0.25;


                /*
                 * Combine the distortions.
                 */

                const distortion =
                    1 +
                    noise1 +
                    noise2 +
                    noise3;


                const currentRadius =
                    radius *
                    distortion;


                const x =
                    Math.cos(angle) *
                    currentRadius;


                const y =
                    Math.sin(angle) *
                    currentRadius;


                if (i === 0) {

                    ctx.moveTo(
                        x,
                        y
                    );

                } else {

                    ctx.lineTo(
                        x,
                        y
                    );
                }
            }


            ctx.closePath();


            /*
             * Blur creates the soft water
             * appearance from your reference.
             */

            ctx.filter =
                `blur(${blur}px)`;


            ctx.strokeStyle =
                `rgba(
                ${settings.color},
                ${opacity}
            )`;


            ctx.lineWidth =
                lineWidth;


            ctx.stroke();


            ctx.restore();
        }


        /* ========================================
           DRAW ONE RIPPLE
        ======================================== */

        function drawRipple(ripple) {

            /*
             * Progress from 0 to 1.
             */

            const progress =
                ripple.radius /
                ripple.maxRadius;


            /*
             * Smooth expansion.
             *
             * Starts gently and expands
             * naturally.
             */

            const easedProgress =
                1 -
                Math.pow(
                    1 - progress,
                    3
                );


            const radius =
                5 +
                (
                    ripple.maxRadius - 5
                ) *
                easedProgress;


            /* ====================================
               OPACITY CURVE
            ====================================

            0%       invisible
            10%      appears
            30-40%   strongest
            60%      fading
            80%      very faint
            100%     gone
            */

            let fade;


            if (progress < 0.10) {

                fade =
                    progress / 0.10;

            } else if (progress < 0.38) {

                fade = 1;

            } else {

                fade =
                    1 -
                    (
                        (progress - 0.38) /
                        0.62
                    );
            }


            fade =
                Math.max(
                    0,
                    Math.min(
                        1,
                        fade
                    )
                );


            /*
             * Slight organic movement.
             */

            const movement =
                Math.sin(
                    ripple.life * 8 +
                    ripple.seed
                ) *
                0.025;


            const finalOpacity =
                ripple.opacity *
                fade;


            /* ====================================
               OUTER ATMOSPHERIC GLOW
            ==================================== */

            ctx.save();


            ctx.translate(
                ripple.x,
                ripple.y
            );


            ctx.rotate(
                ripple.rotation
            );


            ctx.scale(
                1 + movement,
                0.88 - movement
            );


            /*
             * Large soft gradient surrounding
             * the actual water ring.
             */

            const outerGradient =
                ctx.createRadialGradient(
                    0,
                    0,
                    radius * 0.72,

                    0,
                    0,
                    radius * 1.04
                );


            outerGradient.addColorStop(
                0,
                `rgba(
                ${settings.color},
                0
            )`
            );


            outerGradient.addColorStop(
                0.72,
                `rgba(
                ${settings.color},
                0
            )`
            );


            outerGradient.addColorStop(
                0.86,
                `rgba(
                ${settings.color},
                ${finalOpacity * 0.08}
            )`
            );


            outerGradient.addColorStop(
                0.93,
                `rgba(
                ${settings.color},
                ${finalOpacity * 0.20}
            )`
            );


            outerGradient.addColorStop(
                0.97,
                `rgba(
                ${settings.color},
                ${finalOpacity * 0.10}
            )`
            );


            outerGradient.addColorStop(
                1,
                `rgba(
                ${settings.color},
                0
            )`
            );


            ctx.fillStyle =
                outerGradient;


            ctx.beginPath();


            ctx.arc(
                0,
                0,
                radius * 1.04,
                0,
                Math.PI * 2
            );


            ctx.fill();


            ctx.restore();


            /* ====================================
               MAIN WATER RING
            ==================================== */

            drawWaterRing(
                ripple,
                radius,
                finalOpacity * 0.62,
                1.2,
                4
            );


            /* ====================================
               SECONDARY WAVE
            ==================================== */

            /*
             * A second ring slightly inside
             * the main ring makes the effect
             * feel like actual water rather
             * than one outline.
             */

            drawWaterRing(
                ripple,
                radius * 0.91,
                finalOpacity * 0.30,
                1,
                7
            );


            /* ====================================
               INNER WAVE
            ==================================== */

            drawWaterRing(
                ripple,
                radius * 0.78,
                finalOpacity * 0.16,
                1,
                9
            );


            /* ====================================
               SUBTLE HIGHLIGHT
            ==================================== */

            /*
             * Only visible while the ripple
             * is relatively young.
             */

            if (progress < 0.55) {

                const highlightFade =
                    Math.max(
                        0,
                        1 -
                        progress / 0.55
                    );


                drawWaterRing(
                    ripple,
                    radius * 0.96,
                    finalOpacity *
                    highlightFade *
                    0.20,
                    0.8,
                    2
                );
            }


            /*
             * Increase life.
             */

            ripple.life += 0.016;
        }


        /* ========================================
           MOUSE ENTER
        ======================================== */

        hero.addEventListener(
            "mouseenter",
            (event) => {

                mouseInside = true;


                const rect =
                    hero.getBoundingClientRect();


                mouseX =
                    event.clientX -
                    rect.left;


                mouseY =
                    event.clientY -
                    rect.top;


                previousMouseX =
                    mouseX;


                previousMouseY =
                    mouseY;


                lastRippleX =
                    mouseX;


                lastRippleY =
                    mouseY;
            }
        );


        /* ========================================
           MOUSE MOVE
        ======================================== */

        hero.addEventListener(
            "mousemove",
            (event) => {

                const rect =
                    hero.getBoundingClientRect();


                mouseX =
                    event.clientX -
                    rect.left;


                mouseY =
                    event.clientY -
                    rect.top;


                /*
                 * How quickly is the cursor moving?
                 */

                const velocity =
                    getDistance(
                        mouseX,
                        mouseY,
                        previousMouseX,
                        previousMouseY
                    );


                /*
                 * How far since the last
                 * ripple was generated?
                 */

                const distanceSinceRipple =
                    getDistance(
                        mouseX,
                        mouseY,
                        lastRippleX,
                        lastRippleY
                    );


                /*
                 * Only generate another
                 * disturbance after the cursor
                 * has travelled a certain distance.
                 */

                if (
                    distanceSinceRipple >=
                    settings.rippleDistance
                ) {

                    createRipple(
                        mouseX,
                        mouseY,
                        velocity
                    );


                    lastRippleX =
                        mouseX;


                    lastRippleY =
                        mouseY;
                }


                previousMouseX =
                    mouseX;


                previousMouseY =
                    mouseY;
            }
        );


        /* ========================================
           MOUSE LEAVE
        ======================================== */

        hero.addEventListener(
            "mouseleave",
            () => {

                mouseInside = false;

                mouseX = -1000;
                mouseY = -1000;

                previousMouseX = -1000;
                previousMouseY = -1000;
            }
        );


        /* ========================================
           ANIMATION LOOP
        ======================================== */

        function animate() {

            /*
             * Completely clear the transparent
             * canvas every frame.
             */

            ctx.clearRect(
                0,
                0,
                width,
                height
            );


            /*
             * Draw ripples from newest to oldest.
             */

            for (
                let i = ripples.length - 1; i >= 0; i--
            ) {

                const ripple =
                    ripples[i];


                /*
                 * Expand ripple.
                 */

                ripple.radius +=
                    ripple.speed;


                /*
                 * Remove finished ripples.
                 */

                if (
                    ripple.radius >=
                    ripple.maxRadius
                ) {

                    ripples.splice(
                        i,
                        1
                    );

                    continue;
                }


                /*
                 * Draw current ripple.
                 */

                drawRipple(
                    ripple
                );
            }


            requestAnimationFrame(
                animate
            );
        }


        /* ========================================
           START
        ======================================== */

        animate();

    });
</script>