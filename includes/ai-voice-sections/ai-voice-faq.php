<style>
    #kdAiVoiceFaqSection,
    #kdAiVoiceFaqSection * {
        box-sizing: border-box;
    }

    #kdAiVoiceFaqSection {
        /* ---------- Primary ---------- */
        --ai-orange: #EA5C28;
        --ai-orange-bright: #F4511E;
        --ai-orange-dark: #D94717;

        /* ---------- Secondary ---------- */
        --ai-red: #E3413E;
        --ai-pink: #E31D5B;

        /* ---------- Gradients ---------- */
        --ai-gradient: linear-gradient(90deg, #F4511E 0%, #E3413E 50%, #E31D5B 100%);
        --ai-gradient-soft: linear-gradient(135deg, rgba(244, 81, 30, 0.08), rgba(227, 29, 91, 0.08));

        /* ---------- Light surfaces ---------- */
        --ai-bg: #FFFFFF;
        --ai-bg-warm: #FFF9F4;
        --ai-bg-muted: #F7F5F2;

        /* ---------- Text ---------- */
        --ai-text-heading: #14110E;
        --ai-text-body: #4B4640;
        --ai-text-muted: #8A857D;
        --ai-text-faint: #B4AFA7;

        /* ---------- Borders ---------- */
        --ai-border: #EAE6E0;
        --ai-border-strong: #DED8CF;
        --ai-border-orange: rgba(234, 92, 40, 0.28);

        /* ---------- Status ---------- */
        --ai-success: #1E9E5A;
        --ai-success-bg: #E9F8EF;
        --ai-neutral-bg: #F1EFEC;

        /* ---------- Shape / spacing ---------- */
        --ai-radius-sm: 6px;
        --ai-radius-md: 10px;
        --ai-radius-lg: 16px;
        --ai-radius-full: 999px;
        --ai-section-padding: 100px;
        --ai-container-width: 1100px;
        --ai-transition: 0.25s ease;

        /* extra tokens derived for this page only */
        --ai-whatsapp: #25D366;
        --ai-whatsapp-dark: #1DA851;
        --ai-navy: #0F1E3D;
        --ai-navy-dark: #0A1530;

        position: relative;
        width: 100%;
        overflow: hidden;
        padding: 40px 60px;
        background: var(--ai-bg-warm);
    }

    /* soft ambient waveform glow, top center */
    #kdAiVoiceFaqSection::before {
        content: "";
        position: absolute;
        width: 620px;
        height: 260px;
        top: -190px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 50%;
        background: radial-gradient(ellipse, rgba(244, 81, 30, 0.14) 0%, rgba(227, 29, 91, 0.06) 45%, transparent 72%);
        filter: blur(30px);
        pointer-events: none;
    }

    /* =========================================================
    CONTAINER
    ========================================================= */
    #kdAiVoiceFaqSection .ai-faq-container {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: var(--ai-container-width);
        margin: 0 auto;
    }

    /* =========================================================
    HEADER
    ========================================================= */
    #kdAiVoiceFaqSection .ai-faq-header {
        max-width: 720px;
        margin: 0 auto 36px;
        text-align: center;
    }

    #kdAiVoiceFaqSection .ai-faq-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        padding: 8px 16px;
        margin-bottom: 16px;
        border: 1px solid var(--ai-border-orange);
        border-radius: var(--ai-radius-full);
        color: var(--ai-orange-dark);
        background: var(--ai-gradient-soft);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.8px;
        text-transform: uppercase;
    }

    #kdAiVoiceFaqSection .ai-faq-badge-dot {
        position: relative;
        width: 7px;
        height: 7px;
        flex: 0 0 7px;
        border-radius: 50%;
        background: var(--ai-gradient);
        animation: aiFaqBlink 1.5s ease-in-out infinite;
    }

    #kdAiVoiceFaqSection .ai-faq-badge-dot::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: rgba(227, 29, 91, 0.25);
        transform: translate(-50%, -50%);
        animation: aiFaqPulse 1.5s ease-out infinite;
    }

    @keyframes aiFaqBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.4;
            transform: scale(0.72);
        }
    }

    @keyframes aiFaqPulse {
        0% {
            width: 7px;
            height: 7px;
            opacity: 0.8;
        }

        70% {
            width: 22px;
            height: 22px;
            opacity: 0;
        }

        100% {
            width: 22px;
            height: 22px;
            opacity: 0;
        }
    }

    #kdAiVoiceFaqSection .ai-faq-header h2 {
        margin: 0;
        color: var(--ai-text-heading);
        font-size: clamp(30px, 3.8vw, 44px);
        line-height: 1.2;
        font-weight: 800;
        letter-spacing: -1.1px;
    }

    #kdAiVoiceFaqSection .ai-faq-header h2 span {
        background: var(--ai-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    #kdAiVoiceFaqSection .ai-faq-header p {
        max-width: 660px;
        margin: 15px auto 0;
        color: var(--ai-text-muted);
        font-size: 13px;
        line-height: 1.8;
        font-weight: 400;
    }

    /* =========================================================
    LAYOUT — FAQ LIST + CTA PANEL
    ========================================================= */
    #kdAiVoiceFaqSection .ai-layout {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 28px;
        align-items: start;
    }

    /* =========================================================
    FAQ LIST
    ========================================================= */
    #kdAiVoiceFaqSection .ai-faq-list {
        display: flex;
        flex-direction: column;
        gap: 11px;
    }

    #kdAiVoiceFaqSection .ai-faq-item {
        overflow: hidden;
        border: 1px solid var(--ai-border);
        border-radius: var(--ai-radius-lg);
        background: var(--ai-bg);
        box-shadow: 0 9px 25px rgba(217, 71, 23, 0.05);
        transition: border-color var(--ai-transition), box-shadow var(--ai-transition), transform var(--ai-transition);
    }

    #kdAiVoiceFaqSection .ai-faq-item:hover {
        border-color: var(--ai-border-orange);
        box-shadow: 0 14px 32px rgba(217, 71, 23, 0.09);
        transform: translateY(-1px);
    }

    #kdAiVoiceFaqSection .ai-faq-item.active {
        border-color: rgba(234, 92, 40, 0.35);
        box-shadow: 0 17px 38px rgba(217, 71, 23, 0.11);
    }

    #kdAiVoiceFaqSection .ai-faq-question {
        width: 100%;
        min-height: 66px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding: 15px 20px 15px 22px;
        border: 0;
        outline: none;
        background: transparent;
        color: var(--ai-text-heading);
        cursor: pointer;
        text-align: left;
        transition: color var(--ai-transition), background var(--ai-transition);
    }

    #kdAiVoiceFaqSection .ai-faq-question:hover {
        color: var(--ai-orange-dark);
    }

    #kdAiVoiceFaqSection .ai-faq-item.active .ai-faq-question {
        color: var(--ai-orange-dark);
        background: linear-gradient(90deg, rgba(244, 81, 30, 0.07), rgba(227, 29, 91, 0.03), transparent);
    }

    #kdAiVoiceFaqSection .ai-faq-question-text {
        flex: 1;
        font-size: 14px;
        line-height: 1.5;
        font-weight: 600;
    }

    #kdAiVoiceFaqSection .ai-faq-icon {
        position: relative;
        width: 30px;
        height: 30px;
        flex: 0 0 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid var(--ai-border-orange);
        border-radius: 50%;
        background: rgba(234, 92, 40, 0.04);
        transition: background var(--ai-transition), border-color var(--ai-transition), transform var(--ai-transition);
    }

    #kdAiVoiceFaqSection .ai-faq-icon-horizontal,
    #kdAiVoiceFaqSection .ai-faq-icon-vertical {
        position: absolute;
        width: 11px;
        height: 2px;
        border-radius: 10px;
        background: var(--ai-orange-dark);
        transition: opacity var(--ai-transition), background var(--ai-transition);
    }

    #kdAiVoiceFaqSection .ai-faq-icon-vertical {
        transform: rotate(90deg);
    }

    #kdAiVoiceFaqSection .ai-faq-item.active .ai-faq-icon {
        border-color: transparent;
        background: var(--ai-gradient);
        transform: rotate(180deg);
    }

    #kdAiVoiceFaqSection .ai-faq-item.active .ai-faq-icon-horizontal,
    #kdAiVoiceFaqSection .ai-faq-item.active .ai-faq-icon-vertical {
        background: #ffffff;
    }

    #kdAiVoiceFaqSection .ai-faq-item.active .ai-faq-icon-vertical {
        opacity: 0;
    }

    #kdAiVoiceFaqSection .ai-faq-answer {
        display: grid;
        grid-template-rows: 0fr;
        opacity: 0;
        transition: grid-template-rows 0.4s ease, opacity 0.3s ease;
    }

    #kdAiVoiceFaqSection .ai-faq-answer-inner {
        min-height: 0;
        overflow: hidden;
    }

    #kdAiVoiceFaqSection .ai-faq-item.active .ai-faq-answer {
        grid-template-rows: 1fr;
        opacity: 1;
    }

    #kdAiVoiceFaqSection .ai-faq-answer p {
        margin: 0 22px;
        padding: 14px 0 17px;
        border-top: 1px solid var(--ai-border);
        color: var(--ai-text-body);
        font-size: 12px;
        line-height: 1.8;
        font-weight: 400;
    }

    /* =========================================================
    CTA PANEL
    ========================================================= */
    #kdAiVoiceFaqSection .ai-cta {
        position: sticky;
        top: 24px;
        background: var(--ai-gradient);
        border-radius: 22px;
        padding: 42px 34px;
        box-shadow: 0 20px 48px rgba(227, 29, 91, 0.24);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 14px;
        color: #ffffff;
        overflow: hidden;
    }

    #kdAiVoiceFaqSection .ai-cta::after {
        content: "";
        position: absolute;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.14);
        top: -120px;
        left: -80px;
        pointer-events: none;
    }

    #kdAiVoiceFaqSection .ai-cta>* {
        position: relative;
    }

    #kdAiVoiceFaqSection .ai-cta h3 {
        font-size: 25px;
        font-weight: 800;
        margin: 0;
        letter-spacing: -0.5px;
    }

    #kdAiVoiceFaqSection .ai-cta p {
        margin: 0;
        font-size: 13.5px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.92);
        font-weight: 400;
        max-width: 320px;
    }

    #kdAiVoiceFaqSection .ai-cta-btn {
        width: 100%;
        max-width: 300px;
        border: none;
        border-radius: var(--ai-radius-md);
        padding: 14px 20px;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: transform var(--ai-transition), box-shadow var(--ai-transition);
        margin-top: 8px;
        text-decoration: none;
    }

    #kdAiVoiceFaqSection .ai-cta-btn:hover {
        transform: translateY(-2px);
    }

    #kdAiVoiceFaqSection .ai-cta-btn--primary {
        background: var(--ai-text-heading);
        color: #ffffff;
        box-shadow: 0 10px 24px rgba(20, 17, 14, 0.32);
    }

    #kdAiVoiceFaqSection .ai-cta-btn--secondary {
        background: #ffffff;
        color: var(--ai-orange-dark);
    }

    #kdAiVoiceFaqSection .ai-cta-divider {
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100%;
        max-width: 300px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.06em;
        margin-top: 4px;
        text-transform: uppercase;
    }

    #kdAiVoiceFaqSection .ai-cta-divider::before,
    #kdAiVoiceFaqSection .ai-cta-divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background: rgba(255, 255, 255, 0.35);
    }

    #kdAiVoiceFaqSection .ai-cta-foot {
        margin-top: 16px;
        padding-top: 18px;
        border-top: 1px solid rgba(255, 255, 255, 0.28);
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    #kdAiVoiceFaqSection .ai-cta-foot span {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.06em;
        color: rgba(255, 255, 255, 0.8);
        text-transform: uppercase;
    }

    #kdAiVoiceFaqSection .ai-cta-links {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: center;
    }

    #kdAiVoiceFaqSection .ai-cta-link {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 10px 18px;
        border-radius: var(--ai-radius-full);
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        color: #ffffff;
        border: none;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    #kdAiVoiceFaqSection .ai-cta-link:hover {
        transform: translateY(-2px);
    }

    /* WhatsApp — brand green */
    #kdAiVoiceFaqSection .ai-cta-link--whatsapp {
        background: var(--ai-whatsapp);
        box-shadow: 0 10px 22px rgba(37, 211, 102, 0.35);
    }

    #kdAiVoiceFaqSection .ai-cta-link--whatsapp:hover {
        background: var(--ai-whatsapp-dark);
    }

    /* Meet Online — navy blue */
    #kdAiVoiceFaqSection .ai-cta-link--meet {
        background: var(--ai-navy);
        box-shadow: 0 10px 22px rgba(15, 30, 61, 0.45);
    }

    #kdAiVoiceFaqSection .ai-cta-link--meet:hover {
        background: var(--ai-navy-dark);
    }

    #kdAiVoiceFaqSection .ai-cta-link svg {
        width: 15px;
        height: 15px;
        flex: none;
    }

    @media (prefers-reduced-motion: reduce) {

        #kdAiVoiceFaqSection .ai-faq-answer,
        #kdAiVoiceFaqSection .ai-faq-icon,
        #kdAiVoiceFaqSection .ai-faq-icon-horizontal,
        #kdAiVoiceFaqSection .ai-faq-icon-vertical,
        #kdAiVoiceFaqSection .ai-cta-btn,
        #kdAiVoiceFaqSection .ai-cta-link {
            transition: none;
        }

        #kdAiVoiceFaqSection .ai-faq-badge-dot,
        #kdAiVoiceFaqSection .ai-faq-badge-dot::before {
            animation: none;
        }
    }

    /* =========================================================
    TABLET
    ========================================================= */
    @media (max-width: 1024px) {
        #kdAiVoiceFaqSection {
            padding: 72px 24px 60px;
        }
    }

    @media (max-width: 900px) {
        #kdAiVoiceFaqSection .ai-layout {
            grid-template-columns: 1fr;
        }

        #kdAiVoiceFaqSection .ai-cta {
            position: static;
        }
    }

    /* =========================================================
    MOBILE
    ========================================================= */
    @media (max-width: 767px) {
        #kdAiVoiceFaqSection {
            padding: 52px 15px 48px;
        }

        #kdAiVoiceFaqSection .ai-faq-header {
            margin-bottom: 27px;
        }

        #kdAiVoiceFaqSection .ai-faq-badge {
            font-size: 9px;
        }

        #kdAiVoiceFaqSection .ai-faq-header h2 {
            font-size: 28px;
            letter-spacing: -0.8px;
        }

        #kdAiVoiceFaqSection .ai-faq-header p {
            margin-top: 13px;
            font-size: 12px;
            line-height: 1.75;
        }

        #kdAiVoiceFaqSection .ai-faq-list {
            gap: 9px;
        }

        #kdAiVoiceFaqSection .ai-faq-item {
            border-radius: 12px;
        }

        #kdAiVoiceFaqSection .ai-faq-question {
            min-height: 61px;
            gap: 13px;
            padding: 13px 14px 13px 16px;
        }

        #kdAiVoiceFaqSection .ai-faq-question-text {
            font-size: 12px;
            line-height: 1.5;
        }

        #kdAiVoiceFaqSection .ai-faq-icon {
            width: 27px;
            height: 27px;
            flex-basis: 27px;
        }

        #kdAiVoiceFaqSection .ai-faq-answer p {
            margin: 0 16px;
            padding: 13px 0 15px;
            font-size: 11px;
            line-height: 1.75;
        }

        #kdAiVoiceFaqSection .ai-cta {
            padding: 34px 24px;
        }
    }

    /* =========================================================
    SMALL MOBILE
    ========================================================= */
    @media (max-width: 480px) {
        #kdAiVoiceFaqSection {
            padding: 46px 12px 44px;
        }

        #kdAiVoiceFaqSection .ai-faq-header h2 {
            font-size: 26px;
        }

        #kdAiVoiceFaqSection .ai-faq-badge {
            padding: 7px 11px;
        }

        #kdAiVoiceFaqSection .ai-faq-question {
            padding-left: 13px;
        }

        #kdAiVoiceFaqSection .ai-faq-question-text {
            font-size: 11.5px;
        }
    }
</style>

<section class="ai-faq-section" id="kdAiVoiceFaqSection">

    <div class="ai-faq-container">

        <!-- =====================================================
        SECTION HEADER
        ====================================================== -->
        <div class="ai-faq-header">

            <div class="ai-faq-badge">
                <span class="ai-faq-badge-dot"></span>
                <span>Frequently Asked Questions</span>
            </div>

            <h2>
                Questions About Our
                <span>AI Voice Agents?</span>
            </h2>

            <p>
                Find answers to common questions about AI voice calling, how it
                sounds, where it fits into your existing setup, and how King
                Digital builds voice agents that handle real customer conversations.
            </p>

        </div>

        <!-- =====================================================
        FAQ LIST + CTA PANEL
        ====================================================== -->
        <div class="ai-layout">

            <div class="ai-faq-list">

                <!-- FAQ 1 -->
                <div class="ai-faq-item">
                    <button class="ai-faq-question" type="button" aria-expanded="false">
                        <span class="ai-faq-question-text">What is an AI voice agent?</span>
                        <span class="ai-faq-icon" aria-hidden="true">
                            <span class="ai-faq-icon-horizontal"></span>
                            <span class="ai-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="ai-faq-answer">
                        <div class="ai-faq-answer-inner">
                            <p>An AI voice agent is a system that can answer or make phone calls on your business's behalf, holding a real spoken conversation rather than reading from a fixed script. It can answer questions, qualify leads, book appointments, and hand off to a human whenever a call needs one.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="ai-faq-item">
                    <button class="ai-faq-question" type="button" aria-expanded="false">
                        <span class="ai-faq-question-text">How natural does the voice actually sound?</span>
                        <span class="ai-faq-icon" aria-hidden="true">
                            <span class="ai-faq-icon-horizontal"></span>
                            <span class="ai-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="ai-faq-answer">
                        <div class="ai-faq-answer-inner">
                            <p>We use modern text-to-speech voices with natural pacing, pauses, and intonation, so most callers experience a smooth, human-like conversation. You can preview and choose a voice, tone, and speaking style before it goes live on your line.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="ai-faq-item">
                    <button class="ai-faq-question" type="button" aria-expanded="false">
                        <span class="ai-faq-question-text">Which languages and accents can it handle?</span>
                        <span class="ai-faq-icon" aria-hidden="true">
                            <span class="ai-faq-icon-horizontal"></span>
                            <span class="ai-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="ai-faq-answer">
                        <div class="ai-faq-answer-inner">
                            <p>The voice agent supports English and Hindi out of the box, including common regional accents, and can be configured for additional languages depending on your audience. It can also switch language mid-call if a caller responds in a different one.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="ai-faq-item">
                    <button class="ai-faq-question" type="button" aria-expanded="false">
                        <span class="ai-faq-question-text">Can it connect to my existing phone system or CRM?</span>
                        <span class="ai-faq-icon" aria-hidden="true">
                            <span class="ai-faq-icon-horizontal"></span>
                            <span class="ai-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="ai-faq-answer">
                        <div class="ai-faq-answer-inner">
                            <p>Yes. The voice agent can plug into your existing phone number, IVR, or dialer, and sync call outcomes, transcripts, and lead details directly into your CRM so your team always has the full picture.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="ai-faq-item">
                    <button class="ai-faq-question" type="button" aria-expanded="false">
                        <span class="ai-faq-question-text">What happens if the AI can't resolve a call?</span>
                        <span class="ai-faq-icon" aria-hidden="true">
                            <span class="ai-faq-icon-horizontal"></span>
                            <span class="ai-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="ai-faq-answer">
                        <div class="ai-faq-answer-inner">
                            <p>Every voice agent is set up with clear handoff rules, so if a call gets too complex or a caller asks for a person, it transfers smoothly to your team with a summary of the conversation so far, no repeated questions.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="ai-faq-item">
                    <button class="ai-faq-question" type="button" aria-expanded="false">
                        <span class="ai-faq-question-text">Is customer call data kept secure?</span>
                        <span class="ai-faq-icon" aria-hidden="true">
                            <span class="ai-faq-icon-horizontal"></span>
                            <span class="ai-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="ai-faq-answer">
                        <div class="ai-faq-answer-inner">
                            <p>Call recordings, transcripts, and customer details are encrypted and stored with restricted access. We work with you to set retention and compliance rules that match your industry's requirements.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="ai-faq-item">
                    <button class="ai-faq-question" type="button" aria-expanded="false">
                        <span class="ai-faq-question-text">How do I get started with King Digital's AI Voice service?</span>
                        <span class="ai-faq-icon" aria-hidden="true">
                            <span class="ai-faq-icon-horizontal"></span>
                            <span class="ai-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="ai-faq-answer">
                        <div class="ai-faq-answer-inner">
                            <p>Share the calls you want to automate — support, sales, reminders, or follow-ups — and our team will script, train, and test a voice agent around your business before it ever picks up a real call.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- =====================================================
            CTA PANEL
            ====================================================== -->
            <div class="ai-cta">
                <h3>Still have questions?</h3>
                <p>Our team is here to help. Get a free 30-minute consultation with our AI voice specialist — no pressure, no obligation.</p>

                <a href="contact.php" class="ai-cta-btn ai-cta-btn--primary">✉ Send Us a Message</a>

                <div class="ai-cta-divider">OR</div>

                <button type="button" class="ai-cta-btn ai-cta-btn--secondary">📞 Call Now</button>

                <div class="ai-cta-foot">
                    <span>Also Reach Us On</span>
                    <div class="ai-cta-links">
                        <a href="https://wa.me/919211339966?text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services." class="ai-cta-link ai-cta-link--whatsapp">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.29-1.39a9.9 9.9 0 0 0 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.13-2.9-7C17.19 3.03 14.7 2 12.04 2zm0 18.06h-.01a8.2 8.2 0 0 1-4.18-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.15 8.15 0 0 1-1.25-4.34c0-4.53 3.69-8.22 8.24-8.22 2.2 0 4.27.86 5.82 2.42a8.17 8.17 0 0 1 2.41 5.81c0 4.54-3.7 8.21-8.23 8.21zm4.52-6.16c-.25-.12-1.46-.72-1.68-.8-.23-.08-.39-.12-.56.13-.16.24-.64.8-.78.96-.15.16-.29.18-.54.06-.25-.12-1.04-.38-1.98-1.22-.73-.65-1.23-1.46-1.37-1.7-.15-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.24-.4.08-.16.04-.3-.02-.42-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.15 0-.31-.02-.48-.02-.16 0-.43.06-.66.3-.23.25-.86.84-.86 2.04 0 1.2.88 2.36 1 2.52.12.16 1.73 2.64 4.2 3.7.59.25 1.05.4 1.41.52.59.19 1.13.16 1.55.1.47-.07 1.46-.6 1.67-1.18.2-.58.2-1.08.14-1.18-.06-.1-.22-.16-.47-.28z" />
                            </svg>
                            WhatsApp
                        </a>
                        <a href="#" class="ai-cta-link ai-cta-link--meet">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17 10.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4z" />
                            </svg>
                            Meet Online
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<script>
    (function() {
        const faqSection = document.getElementById("kdAiVoiceFaqSection");
        if (!faqSection) return;

        const faqItems = faqSection.querySelectorAll(".ai-faq-item");

        faqItems.forEach(function(item) {
            const question = item.querySelector(".ai-faq-question");
            if (!question) return;

            question.addEventListener("click", function() {
                const isCurrentlyOpen = item.classList.contains("active");

                faqItems.forEach(function(faqItem) {
                    faqItem.classList.remove("active");
                    const faqButton = faqItem.querySelector(".ai-faq-question");
                    if (faqButton) faqButton.setAttribute("aria-expanded", "false");
                });

                if (!isCurrentlyOpen) {
                    item.classList.add("active");
                    question.setAttribute("aria-expanded", "true");
                }
            });
        });
    })();
</script>