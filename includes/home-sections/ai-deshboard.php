<style>
    :root {
        --teal: #0EA98E;
        --teal-dark: #0C8A75;
        --teal-light: #E7F7F3;
        --ink: #101828;
        --gray: #667085;
        --gray-light: #98A2B3;
        --border: #E7EAEE;
        --green: #12B76A;
        --purple-1: #7B4FE0;
        --purple-2: #9B6BF2;
        --blue-1: #3B6FF0;
        --blue-2: #5B8CF7;
        --bg: #FFFFFF;
    }

    .home-deshboard-section {
        max-width: 1180px;
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
        background: var(--teal-light);
        color: var(--teal-dark);
        font-size: 13px;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 20px;
    }

    .home-deshboard_eyebrow svg {
        width: 14px;
        height: 14px;
    }

    .home-deshboard_title {
        font-size: 44px;
        line-height: 1.15;
        font-weight: 800;
        letter-spacing: -0.02em;
        margin: 0 0 16px;
    }

    .home-deshboard_title span {
        background: linear-gradient(90deg, #14B8A6, #3B82C4);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .home-deshboard_para {
        color: var(--gray);
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
    }

    .home-deshboard_features {
        display: flex;
        flex-direction: column;
        gap: 16px;
        margin-bottom: 16px;
    }

    .home-deshboard_feature-item {
        border: 1px solid var(--border);
        border-radius: 14px;
        padding: 20px 20px 22px;
        background: #fff;
        transition: box-shadow .2s ease, transform .2s ease;
    }

    .home-deshboard_feature-item:hover {
        box-shadow: 0 8px 24px rgba(16, 24, 40, .06);
        transform: translateY(-2px);
    }

    .home-deshboard_feature-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 9px;
        background: linear-gradient(135deg, var(--teal), #17C9AC);
        margin-bottom: 12px;
    }

    .home-deshboard_feature-icon svg {
        width: 18px;
        height: 18px;
        stroke: #fff;
    }

    .home-deshboard_feature-title {
        font-size: 15px;
        font-weight: 700;
        margin: 0 0 6px;
        color: var(--ink);
    }

    .home-deshboard_feature-para {
        font-size: 13.5px;
        line-height: 1.55;
        color: var(--gray);
        margin: 0;
    }

    .home-deshboard_report {
        background: var(--teal-light);
        border-radius: 14px;
        padding: 20px 22px 8px;
    }

    .home-deshboard_report-heading {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 700;
        color: var(--teal-dark);
        margin: 0 0 14px;
    }

    .home-deshboard_report-heading span {
        width: 16px;
        height: 16px;
        background: var(--teal-dark);
        -webkit-mask: polygon(60% 0, 0 60%, 40% 60%, 40% 100%, 100% 40%, 60% 40%);
        mask: polygon(60% 0, 0 60%, 40% 60%, 40% 100%, 100% 40%, 60% 40%);
    }

    .home-deshboard_report-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border-top: 1px solid rgba(15, 157, 140, .14);
        font-size: 13.5px;
    }

    .home-deshboard_report-item:first-of-type {
        border-top: none;
    }

    .home-deshboard_report-item p {
        margin: 0;
        color: #3B5B54;
    }

    .home-deshboard_report-item span {
        font-weight: 700;
        color: var(--green);
        font-size: 14px;
    }

    /* ---------- Visual / right column ---------- */
    .home-visual_content {
        display: flex;
        flex-direction: column;
        gap: 24px;
        position: relative;
    }

    .home-visual_content-card,
    .home-visual_content-item2 {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(16, 24, 40, .10), 0 2px 8px rgba(16, 24, 40, .05);
        border: 1px solid var(--border);
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
        background: linear-gradient(120deg, var(--purple-1), var(--purple-2));
    }

    .home-visual_content-item2 .home-visual_content-heading {
        background: linear-gradient(120deg, var(--blue-1), var(--blue-2));
    }

    .home-visual_content-icon {
        width: 30px;
        height: 30px;
        border-radius: 999px;
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
        border-radius: 999px;
        margin-bottom: 22px;
    }

    .home-visual_content-badge span {
        width: 6px;
        height: 6px;
        border-radius: 999px;
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
        background: linear-gradient(180deg, var(--purple-1), var(--purple-2));
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
        border-left: 3px solid var(--purple-1);
        padding: 4px 0 4px 14px;
        margin-bottom: 22px;
    }

    .home-visual_content-writing span {
        font-size: 13.5px;
        font-style: italic;
        color: #3a3550;
    }

    .home-visual_content-writing span::before {
        content: '"Welcome to Crest Bank. Authenticating your…" ';
    }

    .home-visual_content-btn {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .home-visual_content-btn span {
        font-size: 12px;
        font-weight: 600;
        color: var(--purple-1);
        background: #F2EDFC;
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
        color: var(--gray-light);
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
        background: linear-gradient(120deg, var(--blue-1), var(--blue-2));
        color: #fff;
        border-bottom-right-radius: 4px;
    }

    .home-visual_content-msg:nth-of-type(1)::before {
        content: "Hi! I'd like to schedule a quick meeting to discuss our API needs.";
    }

    .home-visual_content-msg:nth-of-type(2) {
        align-self: flex-start;
        background: #F2F4F7;
        color: var(--ink);
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
        background: #F9FAFB;
        border: 1px solid var(--border);
        border-radius: 12px;
        padding: 14px;
        align-self: flex-start;
        width: 90%;
    }

    .home-visual_content-form-label {
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: .06em;
        color: var(--gray-light);
        margin: 0 0 10px;
    }

    .home-visual_content-form input {
        width: 100%;
        border: 1px solid var(--border);
        background: #fff;
        border-radius: 8px;
        padding: 9px 10px;
        font-size: 12.5px;
        margin-bottom: 8px;
        color: var(--gray);
        font-family: inherit;
    }

    .home-visual_content-form button {
        width: 100%;
        border: none;
        background: var(--green);
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
        border-top: 1px solid var(--border);
        padding-top: 12px;
    }

    .home-visual_content-item2 .home-visual_content-inputbar input {
        flex: 1;
        border: none;
        outline: none;
        font-size: 13px;
        color: var(--gray-light);
        font-family: inherit;
    }

    .home-visual_content-item2 .home-visual_content-inputbar button {
        width: 30px;
        height: 30px;
        border-radius: 999px;
        border: none;
        background: var(--blue-1);
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

    /* ---------- Responsive ---------- */
    @media (max-width: 880px) {
        .home-deshboard_content {
            grid-template-columns: 1fr;
        }

        .home-deshboard_title {
            font-size: 32px;
        }
    }
</style>

<section class="home-deshboard-section">
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
        <div>
            <div class="home-deshboard_features">
                <div class="home-deshboard_feature-item">
                    <span class="home-deshboard_feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M9 12h6M12 9v6" />
                        </svg>
                    </span>
                    <h3 class="home-deshboard_feature-title">Generative AI Conversations</h3>
                    <p class="home-deshboard_feature-para">
                        Build LLM-powered bots with hyper personalization and deep context awareness.
                    </p>
                </div>
                <div class="home-deshboard_feature-item">
                    <span class="home-deshboard_feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <path d="M12 2l2.5 5 5.5.8-4 3.9.9 5.5-4.9-2.6-4.9 2.6.9-5.5-4-3.9 5.5-.8z" />
                        </svg>
                    </span>
                    <h3 class="home-deshboard_feature-title">RAG-Powered Knowledge Base</h3>
                    <p class="home-deshboard_feature-para">
                        Fetch instant, accurate answers from your enterprise documents and PDF data.
                    </p>
                </div>
                <div class="home-deshboard_feature-item">
                    <span class="home-deshboard_feature-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2">
                            <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                        </svg>
                    </span>
                    <h3 class="home-deshboard_feature-title">Omnichannel AI Deployment</h3>
                    <p class="home-deshboard_feature-para">
                        Deploy smart bots seamlessly across WhatsApp API, RCS messaging, and Web Chat.
                    </p>
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
            <div class="home-visual_content-item">
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
                        <div class="home-visual_content-writing"><span></span></div>
                        <div class="home-visual_content-btn"><span></span><span></span><span></span></div>
                    </div>
                    <p class="home-visual_content-bottom"></p>
                </div>
            </div>

            <div class="home-visual_content-item2">
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
                            <path d="M4 4h16v16H4z" opacity="0" />
                            <circle cx="18" cy="6" r="2" />
                            <path d="M4 6h10M4 12h16M4 18h10" />
                        </svg>
                    </span>
                </div>
                <div class="home-visual_content-screen">
                    <p class="home-visual_content-msg"></p>
                    <p class="home-visual_content-msg"></p>
                    <div class="home-visual_content-form">
                        <p class="home-visual_content-form-label">SCHEDULE MEETING</p>
                        <input type="text" placeholder="Your Full Name" disabled>
                        <input type="text" placeholder="Appointment Date" disabled>
                        <button type="button">Complete Scheduling</button>
                    </div>
                    <div class="home-visual_content-inputbar">
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