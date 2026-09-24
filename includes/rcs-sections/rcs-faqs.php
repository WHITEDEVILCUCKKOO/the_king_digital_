<style>
    #kdRcsFaqSection,
    #kdRcsFaqSection * {
        box-sizing: border-box;
    }

    #kdRcsFaqSection {
        --kd-rcs-primary: #3478ff;
        --kd-rcs-primary-dark: #2366ed;
        --kd-rcs-cyan: #20d9ff;
        --kd-rcs-purple: #8957ff;
        --kd-rcs-heading: #18243d;
        --kd-rcs-text: #68758c;
        --kd-rcs-border: rgba(52, 120, 255, 0.12);
        --kd-rcs-white: #ffffff;

        --kd-rcs-whatsapp: #25D366;
        --kd-rcs-whatsapp-dark: #1DA851;
        --kd-rcs-navy: #0F1E3D;
        --kd-rcs-navy-dark: #0A1530;

        position: relative;
        width: 100%;
        overflow: hidden;

        padding: 58px 20px 62px;

        font-family: "Poppins", sans-serif;

        background:
            radial-gradient(circle at 8% 12%, rgba(137, 87, 255, 0.07) 0%, transparent 25%),
            radial-gradient(circle at 92% 85%, rgba(32, 217, 255, 0.07) 0%, transparent 27%),
            linear-gradient(180deg, #f5f8ff 0%, #ffffff 45%, #f8faff 100%);
    }

    /* TOP SOFT GLOW */
    #kdRcsFaqSection::before {
        content: "";
        position: absolute;
        width: 560px;
        height: 250px;
        top: -185px;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 50%;
        background: radial-gradient(ellipse, rgba(52, 120, 255, 0.13) 0%, rgba(137, 87, 255, 0.055) 45%, transparent 72%);
        filter: blur(25px);
        pointer-events: none;
    }

    /* =========================================================
        CONTAINER
    ========================================================= */
    #kdRcsFaqSection .kd-rcs-faq-container {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 1180px;
        margin: 0 auto;
    }

    /* =========================================================
    HEADER
    ========================================================= */
    #kdRcsFaqSection .kd-rcs-faq-header {
        max-width: 760px;
        margin: 0 auto 34px;
        text-align: center;
    }

    #kdRcsFaqSection .kd-rcs-faq-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        padding: 8px 15px;
        margin-bottom: 15px;
        border: 1px solid rgba(52, 120, 255, 0.14);
        border-radius: 50px;
        color: var(--kd-rcs-primary);
        background: linear-gradient(135deg, rgba(32, 217, 255, 0.06), rgba(52, 120, 255, 0.055), rgba(137, 87, 255, 0.04));
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.8px;
        text-transform: uppercase;
    }

    #kdRcsFaqSection .kd-rcs-faq-badge-dot {
        position: relative;
        width: 7px;
        height: 7px;
        flex: 0 0 7px;
        border-radius: 50%;
        background: var(--kd-rcs-primary);
        animation: kdRcsFaqBlink 1.5s ease-in-out infinite;
    }

    #kdRcsFaqSection .kd-rcs-faq-badge-dot::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: rgba(52, 120, 255, 0.25);
        transform: translate(-50%, -50%);
        animation: kdRcsFaqPulse 1.5s ease-out infinite;
    }

    @keyframes kdRcsFaqBlink {

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

    @keyframes kdRcsFaqPulse {
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

    #kdRcsFaqSection .kd-rcs-faq-header h2 {
        margin: 0;
        color: var(--kd-rcs-heading);
        font-size: clamp(30px, 3.8vw, 44px);
        line-height: 1.2;
        font-weight: 700;
        letter-spacing: -1.1px;
    }

    #kdRcsFaqSection .kd-rcs-faq-header h2 span {
        color: var(--kd-rcs-primary);
    }

    #kdRcsFaqSection .kd-rcs-faq-header p {
        max-width: 690px;
        margin: 15px auto 0;
        color: var(--kd-rcs-text);
        font-size: 13px;
        line-height: 1.8;
        font-weight: 400;
    }

    /* =========================================================
    LAYOUT — FAQ LIST + CTA PANEL
    ========================================================= */
    #kdRcsFaqSection .kd-rcs-layout {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 28px;
        align-items: start;
    }

    /* =========================================================
    FAQ LIST
    ========================================================= */
    #kdRcsFaqSection .kd-rcs-faq-list {
        display: flex;
        flex-direction: column;
        gap: 11px;
    }

    #kdRcsFaqSection .kd-rcs-faq-item {
        overflow: hidden;
        border: 1px solid var(--kd-rcs-border);
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.92);
        box-shadow: 0 9px 25px rgba(35, 65, 120, 0.045);
        transition: border-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    }

    #kdRcsFaqSection .kd-rcs-faq-item:hover {
        border-color: rgba(52, 120, 255, 0.22);
        box-shadow: 0 14px 32px rgba(35, 65, 120, 0.07);
        transform: translateY(-1px);
    }

    #kdRcsFaqSection .kd-rcs-faq-item.active {
        border-color: rgba(52, 120, 255, 0.28);
        box-shadow: 0 17px 38px rgba(35, 65, 120, 0.09);
    }

    #kdRcsFaqSection .kd-rcs-faq-question {
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
        color: var(--kd-rcs-heading);
        cursor: pointer;
        text-align: left;
        font-family: inherit;
        transition: color 0.3s ease, background 0.3s ease;
    }

    #kdRcsFaqSection .kd-rcs-faq-question:hover {
        color: var(--kd-rcs-primary);
    }

    #kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-question {
        color: var(--kd-rcs-primary);
        background: linear-gradient(90deg, rgba(52, 120, 255, 0.06), rgba(137, 87, 255, 0.025), transparent);
    }

    #kdRcsFaqSection .kd-rcs-faq-question-text {
        flex: 1;
        font-size: 14px;
        line-height: 1.5;
        font-weight: 600;
    }

    #kdRcsFaqSection .kd-rcs-faq-icon {
        position: relative;
        width: 30px;
        height: 30px;
        flex: 0 0 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(52, 120, 255, 0.14);
        border-radius: 50%;
        background: rgba(52, 120, 255, 0.035);
        transition: background 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
    }

    #kdRcsFaqSection .kd-rcs-faq-icon-horizontal,
    #kdRcsFaqSection .kd-rcs-faq-icon-vertical {
        position: absolute;
        width: 11px;
        height: 2px;
        border-radius: 10px;
        background: var(--kd-rcs-primary);
        transition: opacity 0.3s ease, background 0.3s ease;
    }

    #kdRcsFaqSection .kd-rcs-faq-icon-vertical {
        transform: rotate(90deg);
    }

    #kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-icon {
        border-color: var(--kd-rcs-primary);
        background: linear-gradient(135deg, var(--kd-rcs-primary), var(--kd-rcs-purple));
        transform: rotate(180deg);
    }

    #kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-icon-horizontal,
    #kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-icon-vertical {
        background: #ffffff;
    }

    #kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-icon-vertical {
        opacity: 0;
    }

    #kdRcsFaqSection .kd-rcs-faq-answer {
        display: grid;
        grid-template-rows: 0fr;
        opacity: 0;
        transition: grid-template-rows 0.4s ease, opacity 0.3s ease;
    }

    #kdRcsFaqSection .kd-rcs-faq-answer-inner {
        min-height: 0;
        overflow: hidden;
    }

    #kdRcsFaqSection .kd-rcs-faq-item.active .kd-rcs-faq-answer {
        grid-template-rows: 1fr;
        opacity: 1;
    }

    #kdRcsFaqSection .kd-rcs-faq-answer p {
        margin: 0 22px;
        padding: 14px 0 17px;
        border-top: 1px solid rgba(52, 120, 255, 0.09);
        color: var(--kd-rcs-text);
        font-size: 12px;
        line-height: 1.8;
        font-weight: 400;
    }

    /* =========================================================
    CTA PANEL
    ========================================================= */
    #kdRcsFaqSection .kd-rcs-cta {
        position: sticky;
        top: 24px;
        background: linear-gradient(135deg, var(--kd-rcs-primary) 0%, var(--kd-rcs-purple) 100%);
        border-radius: 22px;
        padding: 42px 34px;
        box-shadow: 0 20px 48px rgba(52, 120, 255, 0.28);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 14px;
        color: var(--kd-rcs-white);
        overflow: hidden;
    }

    #kdRcsFaqSection .kd-rcs-cta::after {
        content: "";
        position: absolute;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.12);
        top: -120px;
        left: -80px;
        pointer-events: none;
    }

    #kdRcsFaqSection .kd-rcs-cta>* {
        position: relative;
    }

    #kdRcsFaqSection .kd-rcs-cta h3 {
        font-size: 25px;
        font-weight: 800;
        margin: 0;
        letter-spacing: -0.5px;
    }

    #kdRcsFaqSection .kd-rcs-cta p {
        margin: 0;
        font-size: 13.5px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 400;
        max-width: 320px;
    }

    #kdRcsFaqSection .kd-rcs-cta-btn {
        width: 100%;
        max-width: 300px;
        border: none;
        border-radius: 12px;
        padding: 14px 20px;
        font-family: inherit;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-top: 8px;
        text-decoration: none;
    }

    #kdRcsFaqSection .kd-rcs-cta-btn:hover {
        transform: translateY(-2px);
    }

    #kdRcsFaqSection .kd-rcs-cta-btn--primary {
        background: var(--kd-rcs-heading);
        color: var(--kd-rcs-white);
        box-shadow: 0 10px 24px rgba(24, 36, 61, 0.32);
    }

    #kdRcsFaqSection .kd-rcs-cta-btn--secondary {
        background: var(--kd-rcs-white);
        color: var(--kd-rcs-primary-dark);
    }

    #kdRcsFaqSection .kd-rcs-cta-divider {
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100%;
        max-width: 300px;
        color: rgba(255, 255, 255, 0.75);
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.06em;
        margin-top: 4px;
        text-transform: uppercase;
    }

    #kdRcsFaqSection .kd-rcs-cta-divider::before,
    #kdRcsFaqSection .kd-rcs-cta-divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background: rgba(255, 255, 255, 0.35);
    }

    #kdRcsFaqSection .kd-rcs-cta-foot {
        margin-top: 16px;
        padding-top: 18px;
        border-top: 1px solid rgba(255, 255, 255, 0.25);
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    #kdRcsFaqSection .kd-rcs-cta-foot span {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.06em;
        color: rgba(255, 255, 255, 0.75);
        text-transform: uppercase;
    }

    #kdRcsFaqSection .kd-rcs-cta-links {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: center;
    }

    #kdRcsFaqSection .kd-rcs-cta-link {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 10px 18px;
        border-radius: 999px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        color: var(--kd-rcs-white);
        border: none;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    #kdRcsFaqSection .kd-rcs-cta-link:hover {
        transform: translateY(-2px);
    }

    /* WhatsApp — brand green */
    #kdRcsFaqSection .kd-rcs-cta-link--whatsapp {
        background: var(--kd-rcs-whatsapp);
        box-shadow: 0 10px 22px rgba(37, 211, 102, 0.35);
    }

    #kdRcsFaqSection .kd-rcs-cta-link--whatsapp:hover {
        background: var(--kd-rcs-whatsapp-dark);
    }

    /* Meet Online — navy blue */
    #kdRcsFaqSection .kd-rcs-cta-link--meet {
        background: var(--kd-rcs-navy);
        box-shadow: 0 10px 22px rgba(15, 30, 61, 0.45);
    }

    #kdRcsFaqSection .kd-rcs-cta-link--meet:hover {
        background: var(--kd-rcs-navy-dark);
    }

    #kdRcsFaqSection .kd-rcs-cta-link svg {
        width: 15px;
        height: 15px;
        flex: none;
    }

    @media (prefers-reduced-motion: reduce) {

        #kdRcsFaqSection .kd-rcs-faq-answer,
        #kdRcsFaqSection .kd-rcs-faq-icon,
        #kdRcsFaqSection .kd-rcs-faq-icon-horizontal,
        #kdRcsFaqSection .kd-rcs-faq-icon-vertical,
        #kdRcsFaqSection .kd-rcs-cta-btn,
        #kdRcsFaqSection .kd-rcs-cta-link {
            transition: none;
        }

        #kdRcsFaqSection .kd-rcs-faq-badge-dot,
        #kdRcsFaqSection .kd-rcs-faq-badge-dot::before {
            animation: none;
        }
    }

    /* =========================================================
    TABLET
    ========================================================= */
    @media (max-width: 1024px) {
        #kdRcsFaqSection {
            padding: 52px 24px 55px;
        }
    }

    @media (max-width: 900px) {
        #kdRcsFaqSection .kd-rcs-layout {
            grid-template-columns: 1fr;
        }

        #kdRcsFaqSection .kd-rcs-cta {
            position: static;
        }
    }

    /* =========================================================
    MOBILE
    ========================================================= */
    @media (max-width: 767px) {
        #kdRcsFaqSection {
            padding: 44px 15px 48px;
        }

        #kdRcsFaqSection .kd-rcs-faq-header {
            margin-bottom: 27px;
        }

        #kdRcsFaqSection .kd-rcs-faq-badge {
            font-size: 9px;
        }

        #kdRcsFaqSection .kd-rcs-faq-header h2 {
            font-size: 28px;
            letter-spacing: -0.8px;
        }

        #kdRcsFaqSection .kd-rcs-faq-header p {
            margin-top: 13px;
            font-size: 12px;
            line-height: 1.75;
        }

        #kdRcsFaqSection .kd-rcs-faq-list {
            gap: 9px;
        }

        #kdRcsFaqSection .kd-rcs-faq-item {
            border-radius: 12px;
        }

        #kdRcsFaqSection .kd-rcs-faq-question {
            min-height: 61px;
            gap: 13px;
            padding: 13px 14px 13px 16px;
        }

        #kdRcsFaqSection .kd-rcs-faq-question-text {
            font-size: 12px;
            line-height: 1.5;
        }

        #kdRcsFaqSection .kd-rcs-faq-icon {
            width: 27px;
            height: 27px;
            flex-basis: 27px;
        }

        #kdRcsFaqSection .kd-rcs-faq-answer p {
            margin: 0 16px;
            padding: 13px 0 15px;
            font-size: 11px;
            line-height: 1.75;
        }

        #kdRcsFaqSection .kd-rcs-cta {
            padding: 34px 24px;
        }
    }

    /* =========================================================
    SMALL MOBILE
    ========================================================= */
    @media (max-width: 480px) {
        #kdRcsFaqSection {
            padding: 40px 12px 44px;
        }

        #kdRcsFaqSection .kd-rcs-faq-header h2 {
            font-size: 26px;
        }

        #kdRcsFaqSection .kd-rcs-faq-badge {
            padding: 7px 11px;
        }

        #kdRcsFaqSection .kd-rcs-faq-question {
            padding-left: 13px;
        }

        #kdRcsFaqSection .kd-rcs-faq-question-text {
            font-size: 11.5px;
        }
    }
</style>


<section class="kd-rcs-faq-section" id="kdRcsFaqSection">

    <div class="kd-rcs-faq-container">

        <!-- =====================================================
        SECTION HEADER
        ====================================================== -->
        <div class="kd-rcs-faq-header">

            <div class="kd-rcs-faq-badge">
                <span class="kd-rcs-faq-badge-dot"></span>
                <span>Frequently Asked Questions</span>
            </div>

            <h2>
                Questions About Our
                <span>RCS Messaging Service?</span>
            </h2>

            <p>
                Find answers to common questions about RCS messaging, interactive
                communication, branded messages and how King Digital can help your
                business create more engaging customer experiences.
            </p>

        </div>

        <!-- =====================================================
        FAQ LIST + CTA PANEL
        ====================================================== -->
        <div class="kd-rcs-layout">

            <div class="kd-rcs-faq-list">

                <!-- FAQ 1 -->
                <div class="kd-rcs-faq-item">
                    <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                        <span class="kd-rcs-faq-question-text">What is the primary difference between SMS and RCS Messaging?</span>
                        <span class="kd-rcs-faq-icon" aria-hidden="true">
                            <span class="kd-rcs-faq-icon-horizontal"></span>
                            <span class="kd-rcs-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="kd-rcs-faq-answer">
                        <div class="kd-rcs-faq-answer-inner">
                            <p>SMS is a traditional text-only messaging service limited to 160 plain characters. RCS (Rich Communication Services) is an advanced IP-based messaging protocol that supports verified branded sender IDs, high-res photos, video, audio, interactive action buttons, swipable carousels, and rich analytics directly within native messaging apps.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="kd-rcs-faq-item">
                    <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                        <span class="kd-rcs-faq-question-text">Does the recipient need to install a separate mobile app to receive RCS messages?</span>
                        <span class="kd-rcs-faq-icon" aria-hidden="true">
                            <span class="kd-rcs-faq-icon-horizontal"></span>
                            <span class="kd-rcs-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="kd-rcs-faq-answer">
                        <div class="kd-rcs-faq-answer-inner">
                            <p>No. RCS messages arrive directly within the smartphone's pre-installed, default SMS/messaging application (such as Google Messages on Android devices), requiring no separate software downloads.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="kd-rcs-faq-item">
                    <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                        <span class="kd-rcs-faq-question-text">What happens if a recipient's phone or carrier network does not support RCS?</span>
                        <span class="kd-rcs-faq-icon" aria-hidden="true">
                            <span class="kd-rcs-faq-icon-horizontal"></span>
                            <span class="kd-rcs-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="kd-rcs-faq-answer">
                        <div class="kd-rcs-faq-answer-inner">
                            <p>The King Digital platform uses intelligent, automated fallback technology. If a device or network cannot process RCS content, the system automatically delivers a traditional SMS or MMS message to ensure 100% campaign reach.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="kd-rcs-faq-item">
                    <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                        <span class="kd-rcs-faq-question-text">How do businesses obtain the verified brand checkmark on RCS messaging?</span>
                        <span class="kd-rcs-faq-icon" aria-hidden="true">
                            <span class="kd-rcs-faq-icon-horizontal"></span>
                            <span class="kd-rcs-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="kd-rcs-faq-answer">
                        <div class="kd-rcs-faq-answer-inner">
                            <p>Brand verification is conducted through Google and underlying telecom carrier registries. King Digital manages this complete onboarding process by submitting your official business registration documents, website details, brand logo, and sender profile for verification.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="kd-rcs-faq-item">
                    <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                        <span class="kd-rcs-faq-question-text">Can RCS messaging be integrated into our company's existing CRM or ERP software?</span>
                        <span class="kd-rcs-faq-icon" aria-hidden="true">
                            <span class="kd-rcs-faq-icon-horizontal"></span>
                            <span class="kd-rcs-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="kd-rcs-faq-answer">
                        <div class="kd-rcs-faq-answer-inner">
                            <p>Yes. King Digital provides developer-ready REST APIs, Webhooks, and pre-built integration modules that allow seamless connection to platforms like Salesforce, HubSpot, Zoho, Shopify, and custom databases.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="kd-rcs-faq-item">
                    <button class="kd-rcs-faq-question" type="button" aria-expanded="false">
                        <span class="kd-rcs-faq-question-text">How are message dispatches charged on an RCS Business Messaging platform?</span>
                        <span class="kd-rcs-faq-icon" aria-hidden="true">
                            <span class="kd-rcs-faq-icon-horizontal"></span>
                            <span class="kd-rcs-faq-icon-vertical"></span>
                        </span>
                    </button>
                    <div class="kd-rcs-faq-answer">
                        <div class="kd-rcs-faq-answer-inner">
                            <p>RCS pricing operates on a session-based or event-based model divided into single rich messages, basic transactional alerts, or interactive two-way conversational sessions depending on campaign structure.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- =====================================================
            CTA PANEL
            ====================================================== -->
            <div class="kd-rcs-cta">
                <h3>Still have questions?</h3>
                <p>Our team is here to help. Get a free 30-minute consultation with our RCS messaging expert — no pressure, no obligation.</p>

                <a href="contact.php" class="kd-rcs-cta-btn kd-rcs-cta-btn--primary">✉ Send Us a Message</a>

                <div class="kd-rcs-cta-divider">OR</div>

                <button type="button" class="kd-rcs-cta-btn kd-rcs-cta-btn--secondary">📞 Call Now</button>

                <div class="kd-rcs-cta-foot">
                    <span>Also Reach Us On</span>
                    <div class="kd-rcs-cta-links">
                        <a href="https://wa.me/919211339966?text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services." class="kd-rcs-cta-link kd-rcs-cta-link--whatsapp">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.29-1.39a9.9 9.9 0 0 0 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.13-2.9-7C17.19 3.03 14.7 2 12.04 2zm0 18.06h-.01a8.2 8.2 0 0 1-4.18-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.15 8.15 0 0 1-1.25-4.34c0-4.53 3.69-8.22 8.24-8.22 2.2 0 4.27.86 5.82 2.42a8.17 8.17 0 0 1 2.41 5.81c0 4.54-3.7 8.21-8.23 8.21zm4.52-6.16c-.25-.12-1.46-.72-1.68-.8-.23-.08-.39-.12-.56.13-.16.24-.64.8-.78.96-.15.16-.29.18-.54.06-.25-.12-1.04-.38-1.98-1.22-.73-.65-1.23-1.46-1.37-1.7-.15-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.24-.4.08-.16.04-.3-.02-.42-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.15 0-.31-.02-.48-.02-.16 0-.43.06-.66.3-.23.25-.86.84-.86 2.04 0 1.2.88 2.36 1 2.52.12.16 1.73 2.64 4.2 3.7.59.25 1.05.4 1.41.52.59.19 1.13.16 1.55.1.47-.07 1.46-.6 1.67-1.18.2-.58.2-1.08.14-1.18-.06-.1-.22-.16-.47-.28z" />
                            </svg>
                            WhatsApp
                        </a>
                        <a href="#" class="kd-rcs-cta-link kd-rcs-cta-link--meet">
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
        const faqSection = document.getElementById("kdRcsFaqSection");
        if (!faqSection) return;

        const faqItems = faqSection.querySelectorAll(".kd-rcs-faq-item");

        faqItems.forEach(function(item) {
            const question = item.querySelector(".kd-rcs-faq-question");
            if (!question) return;

            question.addEventListener("click", function() {
                const isCurrentlyOpen = item.classList.contains("active");

                faqItems.forEach(function(faqItem) {
                    faqItem.classList.remove("active");
                    const faqButton = faqItem.querySelector(".kd-rcs-faq-question");
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