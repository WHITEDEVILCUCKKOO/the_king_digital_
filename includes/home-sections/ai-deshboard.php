<style>
    :root {
        /* ======== BRAND COLORS ======== */
        --color-primary: #F47B20;
        --color-primary-light: #FF9A4A;
        --color-primary-dark: #D85F0B;

        --color-secondary: #4F7FF7;
        --color-secondary-light: #7FA3FF;
        --color-secondary-dark: #315FCC;

        /* ======== BACKGROUNDS ======== */
        --color-bg: #FFFFFF;
        --color-bg-soft: #F7F8FA;
        --color-bg-muted: #EEF1F5;
        --color-bg-dark: #1C3D7B;
        --color-bg-dark-soft: #1A2233;

        /* ======== TEXT ======== */
        --color-text: #171B26;
        --color-text-secondary: #5F6673;
        --color-text-muted: #8A919D;
        --color-text-light: #FFFFFF;
        --color-text-light-secondary: #C4C9D2;

        /* ======== BORDERS ======== */
        --color-border: #E3E7ED;
        --color-border-dark: #30394A;

        /* ======== GRADIENTS ======== */
        --gradient-primary: linear-gradient(135deg, #F47B20 0%, #FF9A4A 100%);
        --gradient-primary-dark: linear-gradient(135deg, #D85F0B 0%, #F47B20 100%);
        --gradient-secondary: linear-gradient(135deg, #315FCC 0%, #4F7FF7 50%, #7FA3FF 100%);
        --gradient-secondary-dark: linear-gradient(135deg, #244BA5 0%, #315FCC 100%);
        --gradient-brand: linear-gradient(135deg, #F47B20 0%, #FF9A4A 45%, #4F7FF7 100%);
        --gradient-brand-reverse: linear-gradient(135deg, #4F7FF7 0%, #7FA3FF 55%, #F47B20 100%);
        --gradient-dark: linear-gradient(135deg, #111827 0%, #1A2233 100%);
        --gradient-glow: radial-gradient(circle, rgba(244, 123, 32, 0.16) 0%, rgba(244, 123, 32, 0) 70%);
        --gradient-glow-secondary: radial-gradient(circle, rgba(79, 127, 247, 0.18) 0%, rgba(79, 127, 247, 0) 70%);

        /* ======== STATUS ======== */
        --color-success: #16A34A;
        --color-warning: #D99100;
        --color-danger: #DC2626;
        --color-info: #4F7FF7;

        /* ======== SHADOWS ======== */
        --shadow-sm: 0 2px 8px rgba(15, 23, 42, 0.06);
        --shadow-md: 0 8px 24px rgba(15, 23, 42, 0.10);
        --shadow-lg: 0 16px 40px rgba(15, 23, 42, 0.14);
        --shadow-orange: 0 10px 30px rgba(244, 123, 32, 0.18);
        --shadow-blue: 0 10px 30px rgba(79, 127, 247, 0.18);

        /* ======== RADIUS ======== */
        --radius-sm: 6px;
        --radius-md: 10px;
        --radius-lg: 16px;
        --radius-xl: 24px;
        --radius-full: 999px;

        /* ======== TRANSITIONS ======== */
        --transition-fast: 150ms ease;
        --transition-normal: 250ms ease;
        --transition-slow: 400ms ease;
    }

    .home-deshboard-section {
        margin: 0 auto;
        padding: 64px 24px 96px;
    }

    /* ---------- Heading ---------- */
    .home-deshboard_heading {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 56px;
    }

    .home-deshboard_eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(244, 123, 32, 0.10);
        color: var(--color-primary-dark);
        font-size: 13px;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: var(--radius-full);
        margin-bottom: 20px;
    }

    .home-deshboard_eyebrow svg {
        width: 14px;
        height: 14px;
    }

    .home-deshboard_title {
        font-family: 'Roboto', 'San';
        font-size: 50px;
        line-height: 1.15;
        font-weight: 900;
        letter-spacing: -0.02em;
        margin: 0 0 16px;
    }

    .home-deshboard_title span {
        background: var(--gradient-brand);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .home-deshboard_para {
        color: var(--color-text-secondary);
        font-size: 16px;
        line-height: 1.6;
        margin: 0;
    }

    /* ---------- Content grid ---------- */
    .home-deshboard_content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 56px;
        align-items: start;
        max-width: 1024px;
        margin: 0 auto;
    }

    .home-deshboard_features {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin-bottom: 16px;
    }

    .home-deshboard_feature-item {
        border: 1px solid var(--color-border);
        border-radius: 14px;
        padding: 20px 20px 22px;
        background: #fff;
        transition: box-shadow var(--transition-normal), transform var(--transition-normal);
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 20px;
    }

    .home-deshboard_feature-item:hover {
        box-shadow: var(--shadow-md);
        transform: translateY(-2px);
    }

    .home-deshboard_feature-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 44px;
        flex-shrink: 0;
        border-radius: 9px;
        background: var(--gradient-primary);
    }

    .home-deshboard_feature-icon svg {
        width: 20px;
        height: 20px;
        stroke: #fff;
    }

    .home-deshboard_feature-title {
        font-size: 17px;
        font-weight: 700;
        margin: 0 0 6px;
        color: var(--color-text);
    }

    .home-deshboard_feature-para {
        font-size: 13px;
        line-height: 1.5;
        color: var(--color-text-secondary);
        margin: 0;
    }

    .home-deshboard_report {
        background: rgba(244, 123, 32, 0.06);
        border-radius: 20px;
        padding: 16px 26px 8px;
    }

    .home-deshboard_report-heading {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 15px;
        font-weight: 700;
        color: var(--color-primary-dark);
        margin: 0 0 14px;
    }

    .home-deshboard_report-heading span {
        width: 16px;
        height: 16px;
        background: var(--color-primary-dark);
        -webkit-mask: polygon(60% 0, 0 60%, 40% 60%, 40% 100%, 100% 40%, 60% 40%);
        mask: polygon(60% 0, 0 60%, 40% 60%, 40% 100%, 100% 40%, 60% 40%);
    }

    .home-deshboard_report-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border-top: 1px solid rgba(244, 123, 32, .14);
        font-size: 13.5px;
    }

    .home-deshboard_report-item:first-of-type {
        border-top: none;
    }

    .home-deshboard_report-item p {
        margin: 0;
        color: var(--color-text-secondary);
    }

    .home-deshboard_report-item span {
        font-weight: 700;
        color: var(--color-success);
        font-size: 14px;
    }

    /* ---------- Visual / right column (carousel) ---------- */
    .home-visual_content {
        display: grid;
        position: relative;
    }

    .home-visual_content-item,
    .home-visual_content-item2 {
        grid-column: 1;
        grid-row: 1;
        opacity: 1;
        transition: opacity var(--transition-slow) ease;
    }

    .home-visual_content-item.is-hidden,
    .home-visual_content-item2.is-hidden {
        opacity: 0;
        pointer-events: none;
    }

    .home-visual_content-card,
    .home-visual_content-item2>.home-visual_content-heading,
    .home-visual_content-item2 {
        background: #fff;
    }

    .home-visual_content-card,
    .home-visual_content-item2 {
        border-radius: 18px;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        border: 1px solid var(--color-border);
    }

    .home-visual_content-heading {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 16px 18px;
        position: relative;
        color: #fff;
    }

    .home-visual_content-card .home-visual_content-heading {
        background: var(--gradient-secondary);
    }

    .home-visual_content-item2 .home-visual_content-heading {
        background: var(--gradient-primary);
    }

    .home-visual_content-icon {
        width: 30px;
        height: 30px;
        border-radius: var(--radius-full);
        background: rgba(255, 255, 255, .2);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .home-visual_content-icon svg {
        width: 16px;
        height: 16px;
    }

    .home-visual_content-title {
        font-size: 14px;
        font-weight: 700;
        margin: 0;
        line-height: 1.3;
    }

    .home-visual_content-para {
        font-size: 11px;
        letter-spacing: .04em;
        opacity: .88;
        margin: 2px 0 0;
        font-weight: 600;
    }

    .home-visual_content-icon1 {
        margin-left: auto;
        width: 18px;
        height: 18px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .home-visual_content-icon1 svg {
        width: 16px;
        height: 16px;
        stroke: rgba(255, 255, 255, .85);
    }

    /* ---- Card 1: Voice care ---- */
    .home-visual_content-screen {
        padding: 22px 20px 20px;
        min-height: 210px;
    }

    .home-visual_content-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #FDECEC;
        color: #E0433D;
        font-size: 11px;
        font-weight: 700;
        padding: 5px 10px;
        border-radius: var(--radius-full);
        margin-bottom: 22px;
    }

    .home-visual_content-badge span {
        width: 6px;
        height: 6px;
        border-radius: var(--radius-full);
        background: #E0433D;
    }

    .home-visual_content-animation {
        display: flex;
        align-items: center;
        gap: 4px;
        height: 34px;
        margin-bottom: 18px;
    }

    .home-visual_content-animation span {
        display: block;
        width: 3px;
        border-radius: 2px;
        background: var(--gradient-secondary);
        animation: wave 1.1s ease-in-out infinite;
    }

    .home-visual_content-animation span:nth-child(1) {
        height: 14px;
        animation-delay: 0s;
    }

    .home-visual_content-animation span:nth-child(2) {
        height: 26px;
        animation-delay: .1s;
    }

    .home-visual_content-animation span:nth-child(3) {
        height: 34px;
        animation-delay: .2s;
    }

    .home-visual_content-animation span:nth-child(4) {
        height: 20px;
        animation-delay: .3s;
    }

    .home-visual_content-animation span:nth-child(5) {
        height: 30px;
        animation-delay: .4s;
    }

    .home-visual_content-animation span:nth-child(6) {
        height: 16px;
        animation-delay: .5s;
    }

    @keyframes wave {

        0%,
        100% {
            transform: scaleY(.6);
        }

        50% {
            transform: scaleY(1);
        }
    }

    .home-visual_content-writing {
        border-left: 3px solid var(--color-secondary);
        padding: 4px 0 4px 14px;
        margin-bottom: 22px;
        min-height: 20px;
    }

    .home-visual_content-writing span {
        font-size: 13.5px;
        font-style: italic;
        color: var(--color-text);
    }

    .home-visual_content-writing .type-cursor {
        display: inline-block;
        width: 2px;
        height: 14px;
        margin-left: 2px;
        background: var(--color-secondary);
        vertical-align: -2px;
        animation: blink 0.9s step-end infinite;
    }

    @keyframes blink {
        50% {
            opacity: 0;
        }
    }

    .home-visual_content-btn {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .home-visual_content-btn span {
        font-size: 12px;
        font-weight: 600;
        color: var(--color-secondary-dark);
        background: rgba(79, 127, 247, 0.08);
        padding: 8px 12px;
        border-radius: 8px;
    }

    .home-visual_content-btn span:nth-child(1)::before {
        content: 'Check Balance';
    }

    .home-visual_content-btn span:nth-child(2)::before {
        content: 'Loan Status';
    }

    .home-visual_content-btn span:nth-child(3)::before {
        content: 'Talk to Human';
    }

    .home-visual_content-card .home-visual_content-bottom {
        display: flex;
        justify-content: center;
        gap: 6px;
        padding: 10px 0 16px;
        font-size: 10.5px;
        letter-spacing: .05em;
        color: var(--color-text-muted);
        font-weight: 600;
    }

    .home-visual_content-card .home-visual_content-bottom::before {
        content: 'ENCRYPTION ACTIVE · SESSION #8293';
    }

    /* ---- Card 2: Chat widget ---- */
    .home-visual_content-item2 .home-visual_content-screen {
        padding: 18px;
        min-height: 260px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .msg-step {
        opacity: 0;
        transform: translateY(8px);
        transition: opacity .35s ease, transform .35s ease;
    }

    .msg-step.msg-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .home-visual_content-msg {
        max-width: 78%;
        margin: 0;
        padding: 10px 14px;
        border-radius: 12px;
        font-size: 13px;
        line-height: 1.5;
    }

    .home-visual_content-msg:nth-of-type(1) {
        align-self: flex-end;
        background: var(--gradient-primary);
        color: #fff;
        border-bottom-right-radius: 4px;
    }

    .home-visual_content-msg:nth-of-type(1)::before {
        content: "Hi! I'd like to schedule a quick meeting to discuss our API needs.";
    }

    .home-visual_content-msg:nth-of-type(2) {
        align-self: flex-start;
        background: var(--color-bg-muted);
        color: var(--color-text);
        border-bottom-left-radius: 4px;
    }

    .home-visual_content-msg:nth-of-type(2)::before {
        content: "Hi there! I'm Omni, your AI Assistant. I can certainly help with that — could you fill out this quick form?";
    }

    .home-visual_content-msg:nth-of-type(3),
    .home-visual_content-msg:nth-of-type(4) {
        display: none;
    }

    .home-visual_content-form {
        background: var(--color-bg-soft);
        border: 1px solid var(--color-border);
        border-radius: 12px;
        padding: 14px;
        align-self: flex-start;
        width: 90%;
    }

    .home-visual_content-form-label {
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: .06em;
        color: var(--color-text-muted);
        margin: 0 0 10px;
    }

    .home-visual_content-form input {
        width: 100%;
        border: 1px solid var(--color-border);
        background: #fff;
        border-radius: 8px;
        padding: 9px 10px;
        font-size: 12.5px;
        margin-bottom: 8px;
        color: var(--color-text-secondary);
        font-family: inherit;
    }

    .home-visual_content-form button {
        width: 100%;
        border: none;
        background: var(--gradient-primary);
        color: #fff;
        font-weight: 700;
        font-size: 12.5px;
        padding: 10px;
        border-radius: 8px;
        cursor: pointer;
        font-family: inherit;
    }

    .home-visual_content-item2 .home-visual_content-inputbar {
        margin-top: auto;
        display: flex;
        align-items: center;
        gap: 8px;
        border-top: 1px solid var(--color-border);
        padding-top: 12px;
    }

    .home-visual_content-item2 .home-visual_content-inputbar input {
        flex: 1;
        border: none;
        outline: none;
        font-size: 13px;
        color: var(--color-text-muted);
        font-family: inherit;
    }

    .home-visual_content-item2 .home-visual_content-inputbar button {
        width: 30px;
        height: 30px;
        border-radius: var(--radius-full);
        border: none;
        background: var(--color-primary);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .home-visual_content-item2 .home-visual_content-inputbar button svg {
        width: 14px;
        height: 14px;
    }

    /* ========================================
   INITIAL STATE
======================================== */

    .home-deshoard_features-side {
        opacity: 0;
        transform: translateX(-80px);

        transition:
            opacity 0.8s ease,
            transform 0.8s ease;

        will-change: opacity, transform;
    }


    .home-visual_content {
        opacity: 0;
        transform: translateX(80px);

        transition:
            opacity 0.8s ease,
            transform 0.8s ease;

        will-change: opacity, transform;
    }


    /* ========================================
   IN VIEW
======================================== */

    .home-deshoard_features-side.in-view {
        opacity: 1;
        transform: translateX(0);
    }


    .home-visual_content.in-view {
        opacity: 1;
        transform: translateX(0);
    }

    .home-deshboard-section {
        position: relative;
        overflow: hidden;
    }

    .decor-circle {
        position: absolute;
        top: -140px;
        right: -140px;
        width: 450px;
        height: 450px;
        border: 5px dashed var(--color-primary);
        border-radius: 50%;
        opacity: 0.35;
        animation: decor-spin 16s linear infinite;
        pointer-events: none;
        z-index: 0;
    }

    .decor-circle::before {
        content: '';
        position: absolute;
        inset: 24px;
        border: 7px dashed var(--color-secondary);
        border-radius: 50%;
        opacity: 0.6;
    }

    @keyframes decor-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .decor-clouds {
        position: absolute;
        bottom: -260px;
        left: 14.3%;
        width: 980px;
        height: 720px;
        transform: translateX(-50%);
        pointer-events: none;
        z-index: 0;
    }

    .decor-cloud {
        position: absolute;
        filter: blur(70px);
    }

    .decor-cloud.c1 {
        width: 420px;
        height: 280px;
        left: 40px;
        bottom: 70px;
        background: var(--color-primary);
        opacity: 0.36;
        border-radius: 42% 58% 63% 37% / 55% 45% 55% 45%;
        animation: cloud-drift-1 17s ease-in-out infinite;
    }

    .decor-cloud.c2 {
        width: 360px;
        height: 240px;
        left: 240px;
        bottom: 150px;
        background: var(--color-primary-light);
        opacity: 0.32;
        border-radius: 55% 45% 40% 60% / 45% 60% 40% 55%;
        animation: cloud-drift-2 14s ease-in-out infinite;
    }

    .decor-cloud.c3 {
        width: 480px;
        height: 300px;
        left: 360px;
        bottom: 30px;
        background: var(--color-secondary);
        opacity: 0.34;
        border-radius: 60% 40% 45% 55% / 50% 55% 45% 50%;
        animation: cloud-drift-3 21s ease-in-out infinite;
    }

    .decor-cloud.c4 {
        width: 310px;
        height: 220px;
        left: 560px;
        bottom: 170px;
        background: var(--color-secondary-light);
        opacity: 0.30;
        border-radius: 48% 52% 58% 42% / 60% 40% 60% 40%;
        animation: cloud-drift-4 12s ease-in-out infinite;
    }

    .decor-cloud.c5 {
        width: 280px;
        height: 190px;
        left: 140px;
        bottom: 250px;
        background: var(--color-primary);
        opacity: 0.24;
        border-radius: 50% 50% 45% 55% / 55% 45% 55% 45%;
        animation: cloud-drift-5 19s ease-in-out infinite;
    }

    @keyframes cloud-drift-1 {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(70px, -35px) scale(1.06);
        }
    }

    @keyframes cloud-drift-2 {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(-45px, 30px) scale(0.94);
        }
    }

    @keyframes cloud-drift-3 {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(-75px, -28px) scale(1.05);
        }
    }

    @keyframes cloud-drift-4 {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(42px, 36px) scale(0.92);
        }
    }

    @keyframes cloud-drift-5 {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(-38px, -42px) scale(1.1);
        }
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 880px) {
        .home-deshboard_content {
            grid-template-columns: 1fr;
        }

        .home-deshboard_title {
            font-size: 32px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .home-visual_content-animation span {
            animation: none;
        }

        .type-cursor {
            animation: none;
        }

        .home-visual_content-item,
        .home-visual_content-item2,
        .msg-step {
            transition: none;
        }
    }
</style>


<section class="home-deshboard-section">
    <div class="decor-circle"></div>
    <div class="decor-clouds">
        <div class="decor-cloud c1"></div>
        <div class="decor-cloud c2"></div>
        <div class="decor-cloud c3"></div>
        <div class="decor-cloud c4"></div>
        <div class="decor-cloud c5"></div>
    </div>
    <div class="home-deshboard_heading">
        <div class="home-deshboard_eyebrow">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10" />
                <path d="M12 8v4l3 2" />
            </svg>
            AI-Powered Platform
        </div>
        <h1 class="home-deshboard_title">Next-Gen <span>Conversational AI</span></h1>
        <p class="home-deshboard_para">
            We combine LLaMA, OpenAI, and Smart Technology frameworks to automate conversations and improve outcomes across channels.
        </p>
    </div>

    <div class="home-deshboard_content">
        <div class="home-deshoard_features-side">
            <div class="home-deshboard_features">
                <div class="home-deshboard_feature-item">
                    <span class="home-deshboard_feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M9 12h6M12 9v6" />
                        </svg>
                    </span>
                    <div class="home-deshboard_features-text">
                        <h3 class="home-deshboard_feature-title">Generative AI Conversations</h3>
                        <p class="home-deshboard_feature-para">
                            Build LLM-powered bots with hyper personalization and deep context awareness.
                        </p>
                    </div>
                </div>
                <div class="home-deshboard_feature-item">
                    <span class="home-deshboard_feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <path d="M12 2l2.5 5 5.5.8-4 3.9.9 5.5-4.9-2.6-4.9 2.6.9-5.5-4-3.9 5.5-.8z" />
                        </svg>
                    </span>
                    <div class="home-deshboard_features-text">
                        <h3 class="home-deshboard_feature-title">RAG-Powered Knowledge Base</h3>
                        <p class="home-deshboard_feature-para">
                            Fetch instant, accurate answers from your enterprise documents and PDF data.
                        </p>
                    </div>
                </div>
                <div class="home-deshboard_feature-item">
                    <span class="home-deshboard_feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                        </svg>
                    </span>
                    <div class="home-deshboard_features-text">
                        <h3 class="home-deshboard_feature-title">Omnichannel AI Deployment</h3>
                        <p class="home-deshboard_feature-para">
                            Deploy smart bots seamlessly across WhatsApp API, RCS messaging, and Web Chat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="home-deshboard_report">
                <h4 class="home-deshboard_report-heading">
                    <span></span>
                    AI Performance Metrics
                </h4>
                <div class="home-deshboard_report-item">
                    <p>Intent Recognition Accuracy</p>
                    <span>98.9%</span>
                </div>
                <div class="home-deshboard_report-item">
                    <p>Real-time Response Latency</p>
                    <span>&lt;500ms</span>
                </div>
                <div class="home-deshboard_report-item">
                    <p>Global Language Support</p>
                    <span>100+</span>
                </div>
            </div>
        </div>

        <div class="home-visual_content">
            <div class="home-visual_content-item" style="margin-top: 55px;" id="card1">
                <div class="home-visual_content-card">
                    <div class="home-visual_content-heading">
                        <span class="home-visual_content-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                <path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z" />
                                <path d="M19 10v2a7 7 0 01-14 0v-2M12 19v3" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="home-visual_content-title">Banking Voice Care</h3>
                            <p class="home-visual_content-para">ACTIVE · SECURE LINE</p>
                        </div>
                        <span class="home-visual_content-icon1">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 17l6-6 4 4 8-8" />
                                <path d="M15 7h6v6" />
                            </svg>
                        </span>
                    </div>
                    <div class="home-visual_content-screen">
                        <div class="home-visual_content-badge"><span></span>LIVE TRANSCRIPTION</div>
                        <div class="home-visual_content-animation">
                            <span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>
                        <div class="home-visual_content-writing">
                            <span id="typingText"></span><span class="type-cursor"></span>
                        </div>
                        <div class="home-visual_content-btn"><span></span><span></span><span></span></div>
                    </div>
                    <p class="home-visual_content-bottom"></p>
                </div>
            </div>

            <div class="home-visual_content-item2 is-hidden" id="card2">
                <div class="home-visual_content-heading">
                    <span class="home-visual_content-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <rect x="3" y="4" width="18" height="14" rx="2" />
                            <path d="M8 20h8M12 18v2" />
                        </svg>
                    </span>
                    <div>
                        <h3 class="home-visual_content-title">Omni AI Assistant</h3>
                        <p class="home-visual_content-para">ONLINE · REPLIES IN SECONDS</p>
                    </div>
                    <span class="home-visual_content-icon1">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="18" cy="6" r="2" />
                            <path d="M4 6h10M4 12h16M4 18h10" />
                        </svg>
                    </span>
                </div>
                <div class="home-visual_content-screen">
                    <p class="home-visual_content-msg msg-step" id="msg1"></p>
                    <p class="home-visual_content-msg msg-step" id="msg2"></p>
                    <div class="home-visual_content-form msg-step" id="msgForm">
                        <p class="home-visual_content-form-label">SCHEDULE MEETING</p>
                        <input type="text" placeholder="Your Full Name" disabled>
                        <input type="text" placeholder="Appointment Date" disabled>
                        <button type="button">Complete Scheduling</button>
                    </div>
                    <div class="home-visual_content-inputbar msg-step" id="msgInputbar">
                        <input type="text" placeholder="Type your message..." disabled>
                        <button type="button">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                                <path d="M22 2L11 13M22 2l-7 20-4-9-9-4z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const aboutContent1 = document.querySelector(
            '.home-deshoard_features-side'
        );

        const aboutContent2 = document.querySelector(
            '.home-visual_content'
        );


        /* ========================================
           STOP IF ELEMENTS DON'T EXIST
        ======================================== */

        if (!aboutContent1 && !aboutContent2) {
            return;
        }


        /* ========================================
           INTERSECTION OBSERVER
        ======================================== */

        const revealObserver = new IntersectionObserver(
            (entries) => {

                entries.forEach((entry) => {

                    if (entry.isIntersecting) {

                        entry.target.classList.add('in-view');

                    } else {

                        entry.target.classList.remove('in-view');

                    }

                });

            }, {
                threshold: 0.2,
                rootMargin: '0px'
            }
        );


        /* ========================================
           OBSERVE ELEMENTS
        ======================================== */

        if (aboutContent1) {
            revealObserver.observe(aboutContent1);
        }

        if (aboutContent2) {
            revealObserver.observe(aboutContent2);
        }

    });

    (function() {
        var card1 = document.getElementById('card1');
        var card2 = document.getElementById('card2');
        var typingEl = document.getElementById('typingText');
        var typingText = 'Welcome to Crest Bank. Authenticating your…';
        var typeSpeed = 42;

        var msgSteps = [
            document.getElementById('msg1'),
            document.getElementById('msg2'),
            document.getElementById('msgForm'),
            document.getElementById('msgInputbar')
        ];
        var msgDelays = [150, 950, 2050, 150];

        var HOLD_TIME = 5000; // how long each card stays fully visible before switching
        var typeTimer = null;
        var stepTimers = [];

        function clearTimers() {
            if (typeTimer) {
                clearInterval(typeTimer);
                typeTimer = null;
            }
            stepTimers.forEach(function(t) {
                clearTimeout(t);
            });
            stepTimers = [];
        }

        function runTyping(onDone) {
            typingEl.textContent = '';
            var i = 0;
            typeTimer = setInterval(function() {
                typingEl.textContent += typingText.charAt(i);
                i++;
                if (i >= typingText.length) {
                    clearInterval(typeTimer);
                    typeTimer = null;
                    if (onDone) onDone();
                }
            }, typeSpeed);
        }

        function resetMessages() {
            msgSteps.forEach(function(el) {
                el.classList.remove('msg-visible');
            });
        }

        function runMessageReveal() {
            resetMessages();
            msgSteps.forEach(function(el, idx) {
                var t = setTimeout(function() {
                    el.classList.add('msg-visible');
                }, msgDelays[idx]);
                stepTimers.push(t);
            });
        }

        function showCard1() {
            clearTimers();
            card2.classList.add('is-hidden');
            card1.classList.remove('is-hidden');
            runTyping(function() {
                // typing finished — hold, then move to card 2
                var t = setTimeout(showCard2, HOLD_TIME - (typingText.length * typeSpeed));
                stepTimers.push(t);
            });
        }

        function showCard2() {
            clearTimers();
            card1.classList.add('is-hidden');
            card2.classList.remove('is-hidden');
            runMessageReveal();
            var lastDelay = msgDelays[msgDelays.length - 1];
            var t = setTimeout(showCard1, Math.max(HOLD_TIME, lastDelay + 1200));
            stepTimers.push(t);
        }

        showCard1();
    })();
</script>