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

        --color-bg-dark: #111827;
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
        background: radial-gradient(ellipse 90% 70% at 15% 15%, var(--color-secondary-light) 0%, var(--color-secondary) 45%, var(--color-secondary-dark) 75%, var(--color-secondary-light) 100%);
        padding: 100px 60px;
        overflow: hidden;
    }

    #home-hero-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 78% 45%, rgba(56, 191, 140, 0.18) 0%, transparent 45%);
        pointer-events: none;
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
        font-size: 35px;
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
        font-size: 15px;
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
        color: #0e3327;
    }

    a.home-hero-section_cta-button:first-of-type:hover {
        transform: translateY(-2px);
        opacity: 0.92;
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
        /* clip only the ripple rings, not the whole card */
    }

    .ai-assistant-card>span {
        position: absolute;
        top: 50%;
        left: 50%;

        width: 90px;
        height: 90px;

        border-radius: 50%;
        border: 1px solid rgba(127, 227, 189, 0.35);

        transform: translate(-50%, -50%) scale(0.2);
        opacity: 0;

        pointer-events: none;

        animation: ripple 6s ease-out infinite;
    }


    /* Stagger the waves */

    .ai-assistant-card>span:nth-of-type(1) {
        animation-delay: 0s;
    }

    .ai-assistant-card>span:nth-of-type(2) {
        animation-delay: 1.5s;
    }

    .ai-assistant-card>span:nth-of-type(3) {
        animation-delay: 3s;
    }

    .ai-assistant-card>span:nth-of-type(4) {
        animation-delay: 4.5s;
    }


    @keyframes ripple {

        /* Start small and almost invisible */

        0% {
            transform: translate(-50%, -50%) scale(0.35);
            opacity: 0;
            border-width: 1px;
        }


        /* Slowly appear */

        12% {
            transform: translate(-50%, -50%) scale(0.55);
            opacity: 0.18;
            border-width: 1px;
        }


        /* Middle = strongest */

        25% {
            transform: translate(-50%, -50%) scale(1.2);
            opacity: 0.42;
            border-width: 2px;
        }


        /* Continue expanding */

        45% {
            transform: translate(-50%, -50%) scale(1.7);
            opacity: 0.30;
            border-width: 2px;
        }


        /* Large and fading */

        67% {
            transform: translate(-50%, -50%) scale(2.5);
            opacity: 0.14;
            border-width: 1px;
        }


        /* Almost gone */

        85% {
            transform: translate(-50%, -50%) scale(3.3);
            opacity: 0.04;
            border-width: 1px;
        }


        /* Completely gone */

        100% {
            transform: translate(-50%, -50%) scale(4);
            opacity: 0;
            border-width: 1px;
        }
    }

    /* ---- amoeba-like blob orb (clip-path polygon morph, no border-radius circle) ---- */
    .ai-assistant-circle {
        position: relative;
        z-index: 2;

        width: 96px;
        height: 96px;

        border-radius: 50%;

        background: radial-gradient(circle at 35% 30%,
                #BFD3FF 0%,
                #5F88F5 42%,
                #284FAE 75%,
                #183579 100%);

        filter: drop-shadow(0 0 34px rgba(79, 211, 154, 0.65));

        animation:
            blob-glow 2.6s ease-in-out infinite,
            blob-drift 9s ease-in-out infinite;
    }

    /* @keyframes blob-morph {

        0%,
        100% {
            clip-path: polygon(58% 2%, 82% 10%, 96% 32%, 94% 58%, 78% 82%, 54% 96%, 28% 90%, 8% 70%, 4% 42%, 20% 16%, 40% 4%);
        }

        25% {
            clip-path: polygon(52% 4%, 78% 6%, 98% 26%, 90% 52%, 96% 76%, 68% 94%, 40% 98%, 14% 82%, 2% 58%, 8% 32%, 30% 8%);
        }

        50% {
            clip-path: polygon(62% 0%, 86% 16%, 94% 44%, 98% 68%, 74% 90%, 48% 100%, 22% 92%, 4% 68%, 6% 40%, 24% 14%, 44% 2%);
        }

        75% {
            clip-path: polygon(48% 6%, 74% 2%, 96% 22%, 92% 50%, 92% 74%, 64% 96%, 36% 92%, 12% 76%, 2% 50%, 12% 24%, 34% 6%);
        }
    } */

    @keyframes blob-glow {

        0%,
        100% {
            filter: drop-shadow(0 0 26px rgba(79, 211, 154, 0.55));
        }

        50% {
            filter: drop-shadow(0 0 46px rgba(79, 211, 154, 0.9));
        }
    }

    @keyframes blob-drift {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        33% {
            transform: translate(2px, -3px) scale(1.03);
        }

        66% {
            transform: translate(-3px, 2px) scale(0.97);
        }
    }

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
    }

    .ai-assistant-circle span:nth-of-type(2) {
        bottom: 10px;
        left: 10px;
        right: 10px;
        height: 24px;
        background: rgba(6, 40, 28, 0.35);
        filter: blur(6px);
    }

    .ai-assistant-circle span:nth-of-type(3),
    .ai-assistant-circle span:nth-of-type(4) {
        display: none;
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
        background: var(--gradient-secondary);
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
        background: var(--gradient-brand-reverse);
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
</script>