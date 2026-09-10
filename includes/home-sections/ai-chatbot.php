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

    /* ============================================================
       SECTION LAYOUT
       ============================================================ */
    .chatbot_section {
        background: var(--color-bg);
        padding: 20px 24px;
        position: relative;
        font-family: 'Segoe UI', Roboto, Tahoma, Geneva, Verdana, sans-serif;
        overflow: hidden;
    }

    /* ambient brand blobs behind everything — decorative only */
    .chatbot_section::before,
    .chatbot_section::after {
        content: "";
        position: absolute;
        width: 620px;
        height: 620px;
        border-radius: 50%;
        filter: blur(10px);
        pointer-events: none;
        z-index: 0;
    }

    .chatbot_section::before {
        background: var(--gradient-glow);
        top: -220px;
        left: -220px;
    }

    .chatbot_section::after {
        background: var(--gradient-glow-secondary);
        bottom: -260px;
        right: -220px;
    }

    .chatbot_intro {
        position: relative;
        z-index: 1;
        max-width: 680px;
        margin: 0 auto 56px;
        text-align: center;
    }

    .chatbot_section h1 {
        max-width: 620px;
        margin: 0 auto 14px;
        font-size: clamp(28px, 4vw, 42px);
        line-height: 1.18;
        font-weight: 800;
        color: var(--color-text);
    }

    .chatbot_subtitle {
        margin: 0 auto;
        max-width: 52ch;
        font-size: 15.5px;
        line-height: 1.7;
        color: var(--color-text-secondary);
    }

    .chatbot_content {
        max-width: 1180px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 64px;
        align-items: center;
        position: relative;
        z-index: 1;
    }

    /* ---------- Left: feature list ---------- */

    .chatbot_features {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin-bottom: 32px;
    }

    .chatbot_feature-item {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 18px;
        border-radius: var(--radius-lg);
        border: 1px solid transparent;
        transition: border-color var(--transition-normal), background var(--transition-normal), transform var(--transition-normal), box-shadow var(--transition-normal);
    }

    .chatbot_feature-item:hover {
        background: var(--color-bg-soft);
        border-color: var(--color-border);
        box-shadow: var(--shadow-sm);
        transform: translateY(-2px);
    }

    .chatbot_feature-icon {
        flex: 0 0 auto;
        width: 46px;
        height: 46px;
        border-radius: var(--radius-md);
        background: var(--gradient-brand);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: var(--shadow-orange);
    }

    /* alternate the accent per item so the list has visual rhythm
       instead of one repeated icon color */
    .chatbot_feature-item:nth-child(2) .chatbot_feature-icon {
        background: var(--gradient-secondary);
        box-shadow: var(--shadow-blue);
    }

    .chatbot_feature-item:nth-child(3) .chatbot_feature-icon {
        background: var(--gradient-brand-reverse);
        box-shadow: var(--shadow-blue);
    }

    .chatbot_feature-icon svg {
        width: 20px;
        height: 20px;
    }

    .chatbot_feature-title {
        margin: 0 0 6px;
        font-size: 16.5px;
        font-weight: 700;
        color: var(--color-text);
    }

    .chatbot_feature-para {
        margin: 0;
        font-size: 14px;
        line-height: 1.65;
        color: var(--color-text-secondary);
        max-width: 46ch;
    }

    /* ---------- Left: metrics card ---------- */

    .chatbot_report {
        background: var(--gradient-dark);
        border-radius: var(--radius-lg);
        padding: 26px 28px;
        box-shadow: var(--shadow-lg);
    }

    .chatbot_report-heading {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0 0 18px;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 0.09em;
        text-transform: uppercase;
        color: var(--color-text-light-secondary);
    }

    .chatbot_report-heading span {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--color-success);
        box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.22);
        animation: pulse-dot 2s ease-in-out infinite;
    }

    .chatbot_report-item {
        padding: 13px 0;
        border-top: 1px solid var(--color-border-dark);
        font-size: 13.5px;
    }

    .chatbot_report-item:first-of-type {
        border-top: none;
        padding-top: 0;
    }

    .chatbot_report-item-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 8px;
    }

    .chatbot_report-item p {
        margin: 0;
        color: var(--color-text-light-secondary);
    }

    .chatbot_report-item span {
        font-weight: 700;
        color: var(--color-text-light);
        font-variant-numeric: tabular-nums;
    }

    .chatbot_report-bar {
        height: 5px;
        border-radius: var(--radius-full);
        background: rgba(255, 255, 255, 0.08);
        overflow: hidden;
    }

    .chatbot_report-bar span {
        display: block;
        height: 100%;
        border-radius: var(--radius-full);
        background: var(--gradient-primary);
        width: 0;
        animation: bar-fill 1.4s ease-in-out infinite alternate;
        animation-delay: 0.4s;
    }

    .chatbot_report-item:nth-of-type(2) .chatbot_report-bar span {
        animation-delay: 0.65s;
        background: var(--gradient-secondary);
    }

    .chatbot_report-item:nth-of-type(3) .chatbot_report-bar span {
        animation-delay: 0.75s;
        background: var(--gradient-brand);
    }

    @keyframes bar-fill {
        from {
            width: 30%;
        }

        to {
            width: var(--bar-width);
        }
    }

    /* ---------- Right: visual ---------- */

    .chatbot_visual {
        display: flex;
        justify-content: center;
    }

    .chatbot_visual-card {
        position: relative;
        width: 100%;
        max-width: 380px;
        background: var(--gradient-dark);
        border-radius: var(--radius-xl);
        padding: 26px 22px 20px;
        box-shadow: var(--shadow-lg);
        overflow: hidden;
        text-align: center;
        animation: card-float 6s ease-in-out infinite;
    }

    .chatbot_visual-card::before {
        content: "";
        position: absolute;
        inset: -40% -40% auto auto;
        width: 70%;
        aspect-ratio: 1;
        background: var(--gradient-glow-secondary);
        pointer-events: none;
    }

    .chatbot_visual-card::after {
        content: "";
        position: absolute;
        inset: auto auto -35% -35%;
        width: 65%;
        aspect-ratio: 1;
        background: var(--gradient-glow);
        pointer-events: none;
    }

    .chatbot_visual-status {
        position: relative;
        z-index: 1;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin: 0 0 6px;
        padding: 5px 12px;
        border-radius: var(--radius-full);
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        color: var(--color-text-light-secondary);
    }

    .chatbot_visual-status::before {
        content: "";
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--color-success);
        box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.25);
    }

    .chatbot_visual-card-heading {
        position: relative;
        margin: 0 0 4px;
        min-height: 1px;
        color: var(--color-text-light);
        font-size: 15px;
        font-weight: 700;
    }

    .chatbot_visual-card .loader {
        position: relative;
        width: 100px;
        height: 100px;
        margin: 2px auto 14px;
        z-index: 1;
        transform: scale(0.78);
    }

    /* fixed footprint so the card no longer grows as bubbles fill in */
    .chatbot_visual-card-livechat {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        gap: 8px;
        text-align: left;
        min-height: 268px;
        margin-bottom: 14px;
    }

    .chatbot_bubble-row {
        display: flex;
        align-items: flex-end;
        gap: 8px;
        min-height: 40px;
    }

    .chatbot_bubble-row--right {
        justify-content: flex-end;
    }

    .chatbot_avatar {
        flex: 0 0 auto;
        width: 22px;
        height: 22px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        font-weight: 700;
        color: #fff;
        opacity: 0;
        transform: translateY(6px);
        transition: opacity var(--transition-normal), transform var(--transition-normal);
    }

    .chatbot_avatar--bot {
        background: var(--gradient-secondary);
    }

    .chatbot_avatar--user {
        background: var(--gradient-primary);
    }

    .chatbot_bubble-row.is-visible .chatbot_avatar {
        opacity: 1;
        transform: translateY(0);
    }

    .chatbot_visual-card-livechat p {
        margin: 0;
        max-width: 78%;
        min-height: 34px;
        padding: 9px 13px;
        border-radius: var(--radius-md);
        font-size: 12.5px;
        line-height: 1.5;
        opacity: 0;
        transform: translateY(8px);
        transition: opacity var(--transition-normal), transform var(--transition-normal);
    }

    .chatbot_visual-card-livechat p.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .chatbot_left {
        background: rgba(255, 255, 255, 0.08);
        color: var(--color-text-light);
        border-bottom-left-radius: 4px;
    }

    .chatbot_right {
        background: var(--gradient-primary);
        color: #fff;
        border-bottom-right-radius: 4px;
    }

    /* typing cursor, shown only on the bubble currently being typed */
    .chatbot_visual-card-livechat p.is-typing::after {
        content: "";
        display: inline-block;
        width: 2px;
        height: 11px;
        margin-left: 2px;
        background: currentColor;
        vertical-align: -2px;
        animation: cursor-blink 0.8s step-end infinite;
    }

    /* decorative, static message-input bar to finish the widget look */
    .chatbot_visual-inputbar {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 8px 10px 14px;
        border-radius: var(--radius-full);
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .chatbot_visual-inputbar span {
        flex: 1;
        text-align: left;
        font-size: 12px;
        color: var(--color-text-light-secondary);
    }

    .chatbot_visual-inputbar button {
        flex: 0 0 auto;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: none;
        background: var(--gradient-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: default;
    }

    .chatbot_visual-inputbar button svg {
        width: 14px;
        height: 14px;
        fill: #fff;
    }

    /* ============================================================
       ANIMATIONS
       ============================================================ */
    @keyframes card-float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-14px);
        }
    }

    @keyframes pulse-dot {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.35;
        }
    }

    @keyframes cursor-blink {

        0%,
        50% {
            opacity: 1;
        }

        51%,
        100% {
            opacity: 0;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .chatbot_visual-card {
            animation: none;
        }

        .chatbot_report-heading span,
        .chatbot_visual-status::before {
            animation: none;
        }

        .chatbot_visual-card-livechat p.is-typing::after {
            animation: none;
        }

        .chatbot_visual-card-livechat p,
        .chatbot_avatar,
        .chatbot_feature-item {
            transition: none;
        }
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width: 960px) {
        .chatbot_content {
            grid-template-columns: 1fr;
            gap: 48px;
        }

        .chatbot_visual {
            order: -1;
        }
    }

    @media (max-width: 480px) {
        .chatbot_section {
            padding: 64px 18px;
        }

        .chatbot_visual-card {
            padding: 22px 18px 18px;
        }

        .chatbot_intro {
            margin-bottom: 40px;
        }
    }

    .loader {
        --color-one: #D6E8FF;
        --color-two: #8BB9F7;
        --color-three: #4F8FEF;
        --color-four: #2864C7;
        --color-five: #123A7A;
        --time-animation: 5s;
        --size: 1;
        position: relative;
        border-radius: 50%;
        transform: scale(var(--size));
        box-shadow:
            0 0 25px 0 var(--color-three),
            0 20px 50px 0 var(--color-four);
        animation: colorize calc(var(--time-animation) * 3) ease-in-out infinite;
    }

    .loader::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border-top: solid 1px var(--color-one);
        border-bottom: solid 1px var(--color-two);
        background: linear-gradient(180deg, var(--color-five), var(--color-four));
        box-shadow:
            inset 0 10px 10px 0 var(--color-three),
            inset 0 -10px 10px 0 var(--color-four);
    }

    .loader .box {
        width: 100px;
        height: 100px;
        background: linear-gradient(180deg,
                var(--color-one) 30%,
                var(--color-two) 70%);
        mask: url(#clipping);
        -webkit-mask: url(#clipping);
    }

    .loader svg {
        position: absolute;
    }

    .loader svg #clipping {
        filter: contrast(15);
        animation: roundness calc(var(--time-animation) / 2) linear infinite;
    }

    .loader svg #clipping polygon {
        filter: blur(7px);
    }

    .loader svg #clipping polygon:nth-child(1) {
        transform-origin: 75% 25%;
        transform: rotate(90deg);
    }

    .loader svg #clipping polygon:nth-child(2) {
        transform-origin: 50% 50%;
        animation: rotation var(--time-animation) linear infinite reverse;
    }

    .loader svg #clipping polygon:nth-child(3) {
        transform-origin: 50% 60%;
        animation: rotation var(--time-animation) linear infinite;
        animation-delay: calc(var(--time-animation) / -3);
    }

    .loader svg #clipping polygon:nth-child(4) {
        transform-origin: 40% 40%;
        animation: rotation var(--time-animation) linear infinite reverse;
    }

    .loader svg #clipping polygon:nth-child(5) {
        transform-origin: 40% 40%;
        animation: rotation var(--time-animation) linear infinite reverse;
        animation-delay: calc(var(--time-animation) / -2);
    }

    .loader svg #clipping polygon:nth-child(6) {
        transform-origin: 60% 40%;
        animation: rotation var(--time-animation) linear infinite;
    }

    .loader svg #clipping polygon:nth-child(7) {
        transform-origin: 60% 40%;
        animation: rotation var(--time-animation) linear infinite;
        animation-delay: calc(var(--time-animation) / -1.5);
    }

    @keyframes rotation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes roundness {
        0% {
            filter: contrast(15);
        }

        20% {
            filter: contrast(3);
        }

        40% {
            filter: contrast(3);
        }

        60% {
            filter: contrast(15);
        }

        100% {
            filter: contrast(15);
        }
    }

    @keyframes colorize {
        0% {
            filter: hue-rotate(-10deg);
        }

        20% {
            filter: hue-rotate(5deg);
        }

        40% {
            filter: hue-rotate(20deg);
        }

        60% {
            filter: hue-rotate(10deg);
        }

        80% {
            filter: hue-rotate(-5deg);
        }

        100% {
            filter: hue-rotate(-10deg);
        }
    }
</style>


<section class="chatbot_section">

    <div class="chatbot_intro">
        <h1>How AI Chatbot Works for the Businesses</h1>
        <p class="chatbot_subtitle">
            One conversational layer, deployed everywhere your customers already are — trained on your own knowledge base and live in minutes.
        </p>
    </div>

    <div class="chatbot_content">
        <div class="chatbot_text">
            <div class="chatbot_features">
                <div class="chatbot_feature-item">
                    <span class="chatbot_feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M9 12h6M12 9v6" />
                        </svg>
                    </span>
                    <div class="chatbot_features-text">
                        <h3 class="chatbot_feature-title">Generative AI Conversations</h3>
                        <p class="chatbot_feature-para">
                            Build LLM-powered bots with hyper personalization and deep context awareness.
                        </p>
                    </div>
                </div>
                <div class="chatbot_feature-item">
                    <span class="chatbot_feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <path d="M12 2l2.5 5 5.5.8-4 3.9.9 5.5-4.9-2.6-4.9 2.6.9-5.5-4-3.9 5.5-.8z" />
                        </svg>
                    </span>
                    <div class="chatbot_features-text">
                        <h3 class="chatbot_feature-title">RAG-Powered Knowledge Base</h3>
                        <p class="chatbot_feature-para">
                            Fetch instant, accurate answers from your enterprise documents and PDF data.
                        </p>
                    </div>
                </div>
                <div class="chatbot_feature-item">
                    <span class="chatbot_feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                        </svg>
                    </span>
                    <div class="chatbot_features-text">
                        <h3 class="chatbot_feature-title">Omnichannel AI Deployment</h3>
                        <p class="chatbot_feature-para">
                            Deploy smart bots seamlessly across WhatsApp API, RCS messaging, and Web Chat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="chatbot_report">
                <h4 class="chatbot_report-heading">
                    <span></span>
                    AI Performance Metrics
                </h4>
                <div class="chatbot_report-item">
                    <div class="chatbot_report-item-row">
                        <p>Intent Recognition Accuracy</p>
                        <span>98.9%</span>
                    </div>
                    <div class="chatbot_report-bar"><span style="--bar-width: 98.9%;"></span></div>
                </div>
                <div class="chatbot_report-item">
                    <div class="chatbot_report-item-row">
                        <p>Real-time Response Latency</p>
                        <span>&lt;500ms</span>
                    </div>
                    <div class="chatbot_report-bar"><span style="--bar-width: 92%;"></span></div>
                </div>
                <div class="chatbot_report-item">
                    <div class="chatbot_report-item-row">
                        <p>Global Language Support</p>
                        <span>100+</span>
                    </div>
                    <div class="chatbot_report-bar"><span style="--bar-width: 100%;"></span></div>
                </div>
            </div>
        </div>
        <div class="chatbot_visual">
            <div class="chatbot_visual-card">
                <span class="chatbot_visual-status">Online</span>
                <h2 class="chatbot_visual-card-heading"></h2>
                <div class="loader">
                    <svg width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                            <mask id="clipping">
                                <polygon points="0,0 100,0 100,100 0,100" fill="black"></polygon>
                                <polygon points="25,25 75,25 50,75" fill="white"></polygon>
                                <polygon points="50,25 75,75 25,75" fill="white"></polygon>
                                <polygon points="35,35 65,35 50,65" fill="white"></polygon>
                                <polygon points="35,35 65,35 50,65" fill="white"></polygon>
                                <polygon points="35,35 65,35 50,65" fill="white"></polygon>
                                <polygon points="35,35 65,35 50,65" fill="white"></polygon>
                            </mask>
                        </defs>
                    </svg>
                    <div class="box"></div>
                </div>
                <div class="chatbot_visual-card-livechat">
                    <div class="chatbot_bubble-row"><span class="chatbot_avatar chatbot_avatar--bot">AI</span>
                        <p class="chatbot_left"></p>
                    </div>
                    <div class="chatbot_bubble-row chatbot_bubble-row--right">
                        <p class="chatbot_right"></p><span class="chatbot_avatar chatbot_avatar--user">Y</span>
                    </div>
                    <div class="chatbot_bubble-row"><span class="chatbot_avatar chatbot_avatar--bot">AI</span>
                        <p class="chatbot_left"></p>
                    </div>
                    <div class="chatbot_bubble-row chatbot_bubble-row--right">
                        <p class="chatbot_right"></p><span class="chatbot_avatar chatbot_avatar--user">Y</span>
                    </div>
                    <div class="chatbot_bubble-row"><span class="chatbot_avatar chatbot_avatar--bot">AI</span>
                        <p class="chatbot_left"></p>
                    </div>
                    <div class="chatbot_bubble-row chatbot_bubble-row--right">
                        <p class="chatbot_right"></p><span class="chatbot_avatar chatbot_avatar--user">Y</span>
                    </div>
                </div>
                <div class="chatbot_visual-inputbar">
                    <span>Type a message…</span>
                    <button type="button" aria-hidden="true" tabindex="-1">
                        <svg viewBox="0 0 24 24">
                            <path d="M2 21l21-9L2 3v7l15 2-15 2z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        /* ============================================================
           Live-chat script — one entry per <p> bubble, in DOM order.
           Swap this for real transcript content whenever it's available.
           ============================================================ */
        var CHAT_SCRIPT = [
            "Hi! I'm your AI assistant \u2014 how can I help today?",
            "Can you check my last order status?",
            "Sure! Order #48213 shipped this morning \uD83D\uDE9A",
            "Perfect, thank you!",
            "Anything else I can help with?",
            "Nope, that's all. Thanks!"
        ];

        var TYPE_SPEED_MS = 28; // per character
        var BUBBLE_GAP_MS = 450; // pause between bubbles

        var livechat = document.querySelector('.chatbot_visual-card-livechat');
        var rows = livechat ? Array.prototype.slice.call(livechat.querySelectorAll('.chatbot_bubble-row')) : [];
        var bubbles = rows.map(function(row) {
            return row.querySelector('p');
        });
        var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        var timers = [];
        var isPlaying = false;

        function clearTimers() {
            timers.forEach(function(t) {
                clearTimeout(t);
            });
            timers = [];
        }

        function resetBubbles() {
            rows.forEach(function(row) {
                row.classList.remove('is-visible');
            });
            bubbles.forEach(function(bubble) {
                bubble.textContent = '';
                bubble.classList.remove('is-visible', 'is-typing');
            });
        }

        function typeInto(row, bubble, text, onDone) {
            row.classList.add('is-visible');
            bubble.classList.add('is-visible', 'is-typing');

            if (prefersReducedMotion) {
                bubble.textContent = text;
                bubble.classList.remove('is-typing');
                onDone();
                return;
            }

            var i = 0;
            (function step() {
                bubble.textContent = text.slice(0, i);
                i++;
                if (i <= text.length) {
                    timers.push(setTimeout(step, TYPE_SPEED_MS));
                } else {
                    bubble.classList.remove('is-typing');
                    timers.push(setTimeout(onDone, BUBBLE_GAP_MS));
                }
            })();
        }

        function playSequence(index) {
            index = index || 0;
            if (index >= bubbles.length) {
                isPlaying = false;
                return;
            }
            typeInto(rows[index], bubbles[index], CHAT_SCRIPT[index] || '', function() {
                playSequence(index + 1);
            });
        }

        function startPlaying() {
            if (isPlaying || !bubbles.length) return;
            isPlaying = true;
            resetBubbles();
            playSequence(0);
        }

        function stopAndReset() {
            clearTimers();
            isPlaying = false;
            resetBubbles();
        }

        if ('IntersectionObserver' in window && bubbles.length) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        startPlaying();
                    } else {
                        stopAndReset();
                    }
                });
            }, {
                threshold: 0.45
            });

            observer.observe(document.querySelector('.chatbot_visual-card'));
        } else {
            // no IntersectionObserver support — just show the conversation
            rows.forEach(function(row, i) {
                row.classList.add('is-visible');
                bubbles[i].textContent = CHAT_SCRIPT[i] || '';
                bubbles[i].classList.add('is-visible');
            });
        }
    })();
</script>