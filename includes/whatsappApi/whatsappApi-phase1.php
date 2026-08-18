<style>
    /* =========================================================
   WHATSAPP API PHASE 1
    ========================================================= */

    .whatsappApi-phase1 {
        width: 100%;
        padding: 40px 20px 80px;
        background: #f8fbff;
    }

    .whatsappApi-phase1-heading {
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 40px;
    }

    .whatsappApi-phase1-heading strong {
        color: #3d70df;
    }

    .whatsappApi-phase1-heading h1 {
        font-size: 50px;
        font-weight: 800;
        color: #27354a;
    }

    .whatsappApi-phase1-heading p {
        font-size: 16px;
        font-weight: 400;
        color: var(--text-mute);
    }


    /* =========================================================
   TOP BAR
    ========================================================= */

    .whatsappApi-phase1_topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        max-width: 1360px;
        height: 56px;
        padding: 0 20px;
        border-radius: 20px 20px 0 0;
        background: #fff;
        border: 1px solid #e6edf7;
        box-shadow:
            0 10px 30px rgba(46, 80, 130, .08);
    }


    .whatsappApi-phase1_topbar-dots {
        display: flex;
        align-items: center;
        gap: 6px;
    }


    .whatsappApi-phase1_topbar-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #e2685f;
    }


    .whatsappApi-phase1_topbar-dot.warning {
        background: #ecb84a;
    }


    .whatsappApi-phase1_topbar-dot.success {
        background: #4cc98a;
    }


    .whatsappApi-phase1_topbar-meta {
        display: flex;
        align-items: center;
        gap: 32px;
    }


    .whatsappApi-phase1_topbar-meta-item {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }


    .whatsappApi-phase1_topbar-meta-label {
        font-size: 8px;
        font-weight: 700;
        letter-spacing: .6px;
        color: #98a5b7;
    }


    .whatsappApi-phase1_topbar-meta-value {
        font-size: 11px;
        font-weight: 700;
        color: #3d70df;
    }


    .whatsappApi-phase1_topbar-actions {
        display: flex;
        align-items: center;
        gap: 14px;
    }


    .whatsappApi-phase1_topbar-settings {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        border: 1px solid #e6edf7;
        color: #7c8aa0;
        font-size: 13px;
    }


    .whatsappApi-phase1_topbar-save {
        height: 34px;
        display: flex;
        align-items: center;
        padding: 0 16px;
        border-radius: 8px;
        background: #3d70df;
        color: #fff;
        font-size: 10px;
        font-weight: 800;
        letter-spacing: .6px;
    }


    /* =========================================================
   LAYOUT (CANVAS + SIDEBAR)
    ========================================================= */

    .whatsappApi-phase1_layout {
        display: flex;
        align-items: stretch;
        width: 100%;
        max-width: 1360px;
        margin: 0 auto;
    }


    /* =========================================================
   CONTENT
    ========================================================= */

    .whatsappApi-phase1_content {
        position: relative;
        flex: 1;
        width: 100%;
        height: 500px;
        border-radius: 0 0 0 20px;
        background: #fff radial-gradient(circle, #e3eaf5 1px, transparent 1px) 0 0 / 22px 22px;
        border: 1px solid #e6edf7;
    }


    /* =========================================================
   CONNECTION LINES
    ========================================================= */

    .whatsappApi-phase1_content-lines {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        overflow: visible;
        z-index: 1;
    }


    .whatsappApi-phase1_content-lines path {
        fill: none;
        stroke: #6c96f4;
        stroke-width: 2.5;
        stroke-linecap: round;
        opacity: .65;
        stroke-dasharray: 8 10;
        animation: whatsappApi-phase1_flowLine 3s linear infinite;
    }


    @keyframes whatsappApi-phase1_flowLine {

        to {
            stroke-dashoffset: -36;
        }

    }


    /* =========================================================
   COMMON FLOATING ANIMATION
  ======================================================== */

    .whatsappApi-phase1_content-trigger,
    .whatsappApi-phase1_content-message,
    .whatsappApi-phase1_content-crm,
    .whatsappApi-phase1_content-ai,
    .whatsappApi-phase1_content-finish {
        position: absolute;

        z-index: 5;

        animation:
            whatsappApi-phase1_floatingFlow 5s ease-in-out infinite;
    }


    @keyframes whatsappApi-phase1_floatingFlow {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }

    }


    /* =========================================================
   TRIGGER
    ========================================================= */

    .whatsappApi-phase1_content-trigger {
        left: 3%;
        top: 43%;

        display: flex;
        flex-direction: column;
        align-items: center;

        gap: 8px;
    }


    .whatsappApi-phase1_content-trigger-circle {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #fff;
        border: 1px solid #dce7f5;
        box-shadow: 0 10px 30px rgba(46, 80, 130, .12);
    }


    .whatsappApi-phase1_content-trigger-circle::before {
        content: "";
        position: absolute;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: #15c987;
        z-index: -1;
    }


    .whatsappApi-phase1_content-trigger-label,
    .whatsappApi-phase1_content-finish-label {
        font-size: 8px;
        font-weight: 700;
        letter-spacing: 1px;
        color: #8795a8;
    }


    /* =========================================================
   MESSAGE
    ========================================================= */

    .whatsappApi-phase1_content-message {
        left: 15%;
        top: 28%;
        animation-delay: -.8s;
    }


    .whatsappApi-phase1_content-message-card {
        position: relative;
        width: 260px;
        padding: 20px;
        border-radius: 16px;
        background:rgba(255, 255, 255, .92);
        border: 1px solid rgba(218, 227, 239, .9);
        box-shadow:
            0 15px 40px rgba(36, 68, 110, .10);
    }


    .whatsappApi-phase1_content-message-card-label {
        margin-bottom: 12px;
        font-size: 8px;
        font-weight: 800;
        letter-spacing: .8px;
        color: #8b98aa;
    }


    .whatsappApi-phase1_content-message-card-text {
        margin-bottom: 14px;
        font-size: 10px;
        line-height: 1.6;
        color: #607087;
    }


    .whatsappApi-phase1_content-message-card-option {
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 11px;
        margin-top: 7px;
        border-radius: 8px;
        border: 1px solid #e3eaf3;
        font-size: 9px;
        color: #8290a2;
    }


    .whatsappApi-phase1_content-message-card-option.active {
        background: #f1f5ff;
        border-color: #cad9ff;
        color: #3d70df;
    }


    .whatsappApi-phase1_content-message-card-option i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #dce5f1;
    }


    .whatsappApi-phase1_content-message-card-option.active i {
        background: #4d82ee;
    }


    /* =========================================================
   CRM
    ========================================================= */

    .whatsappApi-phase1_content-crm {
        left: 50%;
        top: 12%;
        animation-delay: -2.1s;
    }


    .whatsappApi-phase1_content-crm-card {
        width: 220px;
        padding: 16px;
        border-radius: 16px;
        background: rgba(255, 255, 255, .92);
        border: 1px solid rgba(218, 227, 239, .9);
        box-shadow:
            0 15px 40px rgba(36, 68, 110, .10);
    }


    .whatsappApi-phase1_content-crm-card-title {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 8px;
        font-size: 10px;
        font-weight: 700;
        color: #27354a;
    }


    .whatsappApi-phase1_content-crm-card-icon {
        width: 22px;
        height: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        background: #f0edff;
        color: #765de7;
        font-size: 10px;
    }


    .whatsappApi-phase1_content-crm-card-text {
        font-size: 10px;
        line-height: 1.6;
        color: #607087;
    }


    /* =========================================================
   AI
    ========================================================= */

    .whatsappApi-phase1_content-ai {
        left: 50%;
        top: 58%;
        animation-delay: -3.4s;
    }


    .whatsappApi-phase1_content-ai-card {
        width: 220px;
        padding: 16px;
        border-radius: 16px;
        background: rgba(255, 255, 255, .92);
        border: 1px solid rgba(218, 227, 239, .9);
        box-shadow:
            0 15px 40px rgba(36, 68, 110, .10);
    }


    .whatsappApi-phase1_content-ai-card-title {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 8px;
        font-size: 10px;
        font-weight: 700;
        color: #27354a;
    }


    .whatsappApi-phase1_content-ai-card-icon {
        width: 22px;
        height: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        background: #fff1df;
        color: #ff941f;
        font-size: 10px;
    }


    .whatsappApi-phase1_content-ai-card-text {
        font-size: 10px;
        line-height: 1.6;
        color: #607087;
    }


    /* =========================================================
   FINISH
    ========================================================= */

    .whatsappApi-phase1_content-finish {
        right: 5%;
        top: 43%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        animation-delay: -1.5s;
    }


    .whatsappApi-phase1_content-finish-circle {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #ff5365;
        color: #fff;
        font-size: 18px;
        box-shadow:
            0 10px 30px rgba(255, 83, 101, .25);
    }


    /* =========================================================
   SUBTLE CARD SHINE
    ========================================================= */

    .whatsappApi-phase1_content-message-card::after,
    .whatsappApi-phase1_content-crm-card::after,
    .whatsappApi-phase1_content-ai-card::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: inherit;
        background:
            linear-gradient(120deg,
                transparent 20%,
                rgba(255, 255, 255, .45),
                transparent 80%);
        transform: translateX(-100%);
        animation:
            whatsappApi-phase1_cardShine 6s ease-in-out infinite;
        pointer-events: none;
    }


    @keyframes whatsappApi-phase1_cardShine {

        0%,
        65% {
            transform: translateX(-100%);
        }

        85%,
        100% {
            transform: translateX(100%);
        }

    }


    /* =========================================================
   SIDEBAR
    ========================================================= */

    .whatsappApi-phase1_sidebar {
        width: 260px;
        flex-shrink: 0;
        height: 500px;
        overflow-y: auto;
        padding: 20px;
        border-radius: 0px 0 20px 0px;
        background: #fff;
        border: 1px solid #e6edf7;
        box-shadow:
            0 10px 30px rgba(46, 80, 130, .06);
    }


    .whatsappApi-phase1_sidebar-title {
        margin-bottom: 16px;
        font-size: 9px;
        font-weight: 800;
        letter-spacing: 1px;
        color: #98a5b7;
    }


    .whatsappApi-phase1_sidebar-field {
        margin-bottom: 18px;
    }


    .whatsappApi-phase1_sidebar-field-label {
        display: block;
        margin-bottom: 7px;
        font-size: 8px;
        font-weight: 700;
        letter-spacing: .6px;
        color: #98a5b7;
    }


    .whatsappApi-phase1_sidebar-field-input,
    .whatsappApi-phase1_sidebar-field-textarea {
        width: 100%;
        padding: 9px 11px;
        border-radius: 8px;
        border: 1px solid #e3eaf3;
        background: #f8fbff;
        font-size: 10px;
        line-height: 1.6;
        color: #3a4759;
    }


    .whatsappApi-phase1_sidebar-field-textarea {
        min-height: 64px;
        resize: none;
    }


    .whatsappApi-phase1_sidebar-divider {
        height: 1px;
        margin: 20px 0 16px;
        background: #edf2f9;
    }


    .whatsappApi-phase1_sidebar-toggle {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 14px;
    }


    .whatsappApi-phase1_sidebar-toggle-label {
        font-size: 10px;
        font-weight: 700;
        color: #3d70df;
    }


    .whatsappApi-phase1_sidebar-toggle-switch {
        position: relative;
        width: 30px;
        height: 17px;
        border-radius: 20px;
        background: #dce5f1;
    }


    .whatsappApi-phase1_sidebar-toggle-switch::before {
        content: "";
        position: absolute;
        top: 2px;
        left: 2px;
        width: 13px;
        height: 13px;
        border-radius: 50%;
        background: #fff;
    }


    .whatsappApi-phase1_sidebar-toggle-switch.active {
        background: #3ecf8e;
    }


    .whatsappApi-phase1_sidebar-toggle-switch.active::before {
        left: 15px;
    }


    .whatsappApi-phase1_sidebar-note {
        padding: 12px;
        border-radius: 10px;
        background: #f1f5ff;
        border: 1px solid #d9e5ff;
        font-size: 9px;
        line-height: 1.6;
        color: #4a5b73;
    }


    .whatsappApi-phase1_sidebar-note strong {
        color: #3d70df;
    }


    /* =========================================================
   RESPONSIVE
    ========================================================= */

    @media (max-width: 992px) {

        .whatsappApi-phase1_layout {
            flex-direction: column;
        }

        /* the desktop canvas positions nodes with left/top percentages
           tuned for a ~1360px stage. Scaling that box down (transform,
           zoom) fights the absolute-positioned children and causes
           overlap. Instead we drop the absolute canvas entirely and
           flow the nodes as a plain vertical stack. */

        .whatsappApi-phase1_content {
            width: 100%;
            height: auto;
            border-radius: 0;

            display: flex;
            flex-direction: column;
            align-items: center;

            gap: 8px;

            padding: 32px 16px;
        }

        .whatsappApi-phase1_content-lines {
            display: none;
        }

        .whatsappApi-phase1_content-trigger,
        .whatsappApi-phase1_content-message,
        .whatsappApi-phase1_content-crm,
        .whatsappApi-phase1_content-ai,
        .whatsappApi-phase1_content-finish {
            position: static;
            left: auto;
            right: auto;
            top: auto;
        }

        /* stacked-layout connector: a straight dashed line stands in for
           the desktop SVG paths, which are plotted for the fixed 1000x500
           canvas and don't map onto a vertical stack */

        .whatsappApi-phase1_content-message::before,
        .whatsappApi-phase1_content-crm::before,
        .whatsappApi-phase1_content-ai::before,
        .whatsappApi-phase1_content-finish::before {
            content: "";
            display: block;
            width: 2px;
            height: 22px;
            margin: 0 auto;
            background: repeating-linear-gradient(to bottom, #6c96f4 0 6px, transparent 6px 12px);
            opacity: .65;
        }

        .whatsappApi-phase1_content-message-card,
        .whatsappApi-phase1_content-crm-card,
        .whatsappApi-phase1_content-ai-card {
            width: 100%;
            max-width: 320px;
        }

        .whatsappApi-phase1_sidebar {
            width: 100%;
            height: auto;
            border-radius: 0 0 20px 20px;
        }

    }


    @media (max-width: 768px) {

        .whatsappApi-phase1-heading {
            margin-bottom: 28px;
        }

        .whatsappApi-phase1-heading h1 {
            font-size: 32px;
        }

        .whatsappApi-phase1-heading p {
            font-size: 14px;
            padding: 0 12px;
        }

        .whatsappApi-phase1_topbar {
            flex-wrap: wrap;
            height: auto;
            padding: 14px 16px;
            row-gap: 12px;
        }

        .whatsappApi-phase1_topbar-meta {
            gap: 20px;
        }

        .whatsappApi-phase1_topbar-actions {
            margin-left: auto;
        }

    }


    @media (max-width: 480px) {

        .whatsappApi-phase1-heading h1 {
            font-size: 26px;
        }

        .whatsappApi-phase1_topbar-dots {
            display: none;
        }

        .whatsappApi-phase1_topbar-meta {
            gap: 14px;
        }

        .whatsappApi-phase1_content-message-card,
        .whatsappApi-phase1_content-crm-card,
        .whatsappApi-phase1_content-ai-card {
            max-width: 100%;
        }

    }
</style>


<section class="whatsappApi-phase1">

    <div class="whatsappApi-phase1-heading">
        <strong>Phase 1: Automation</strong>
        <h1>Visual Chatbot Flow Builder</h1>
        <p>Design seamless customer journeys that qualify leads and answer FAQs 24/7 without human intervention.</p>
    </div>

    <!-- TOP BAR -->
    <div class="whatsappApi-phase1_topbar">

        <div class="whatsappApi-phase1_topbar-dots">
            <span class="whatsappApi-phase1_topbar-dot"></span>
            <span class="whatsappApi-phase1_topbar-dot warning"></span>
            <span class="whatsappApi-phase1_topbar-dot success"></span>
        </div>

        <div class="whatsappApi-phase1_topbar-meta">

            <div class="whatsappApi-phase1_topbar-meta-item">
                <span class="whatsappApi-phase1_topbar-meta-label">ACTIVE BOT</span>
                <span class="whatsappApi-phase1_topbar-meta-value">Sales Assistant Alpha</span>
            </div>

            <div class="whatsappApi-phase1_topbar-meta-item">
                <span class="whatsappApi-phase1_topbar-meta-label">ASSIGNED TO</span>
                <span class="whatsappApi-phase1_topbar-meta-value">Shared Team Inbox</span>
            </div>

        </div>

        <div class="whatsappApi-phase1_topbar-actions">
            <span class="whatsappApi-phase1_topbar-settings">⚙</span>
            <span class="whatsappApi-phase1_topbar-save">SAVE FLOW</span>
        </div>

    </div>


    <div class="whatsappApi-phase1_layout">

        <div class="whatsappApi-phase1_content">

            <!-- SVG CONNECTIONS -->
            <svg
                class="whatsappApi-phase1_content-lines"
                viewBox="0 0 1000 500"
                preserveAspectRatio="none">

                <!-- Trigger → Message -->
                <path
                    d="M 90 250 C 130 250, 140 210, 190 210" />

                <!-- Message → CRM -->
                <path
                    d="M 410 190 C 470 190, 470 120, 550 120" />

                <!-- Message → AI -->
                <path
                    d="M 410 230 C 470 230, 470 330, 550 330" />

                <!-- CRM → Finish -->
                <path
                    d="M 750 120 C 800 120, 800 250, 860 250" />

                <!-- AI → Finish -->
                <path
                    d="M 750 330 C 800 330, 800 250, 860 250" />

            </svg>


            <!-- TRIGGER -->

            <div class="whatsappApi-phase1_content-trigger">

                <div class="whatsappApi-phase1_content-trigger-circle">
                    ✦
                </div>

                <span class="whatsappApi-phase1_content-trigger-label">
                    TRIGGER
                </span>

            </div>


            <!-- MESSAGE -->

            <div class="whatsappApi-phase1_content-message">

                <div class="whatsappApi-phase1_content-message-card">

                    <div class="whatsappApi-phase1_content-message-card-label">
                        MESSAGE PROMPT
                    </div>

                    <p class="whatsappApi-phase1_content-message-card-text">
                        Hello there! Welcome to support.
                        How can I help?
                    </p>


                    <div class="whatsappApi-phase1_content-message-card-option active">

                        <span>
                            Product Support
                        </span>

                        <i></i>

                    </div>


                    <div class="whatsappApi-phase1_content-message-card-option">

                        <span>
                            Pricing Inquiry
                        </span>

                        <i></i>

                    </div>

                </div>

            </div>


            <!-- CRM -->

            <div class="whatsappApi-phase1_content-crm">

                <div class="whatsappApi-phase1_content-crm-card">

                    <div class="whatsappApi-phase1_content-crm-card-title">

                        <span class="whatsappApi-phase1_content-crm-card-icon">
                            ▣
                        </span>

                        Assign CRM

                    </div>

                    <p class="whatsappApi-phase1_content-crm-card-text">
                        Log activity to CRM and mark
                        lead as Hot.
                    </p>

                </div>

            </div>


            <!-- AI -->

            <div class="whatsappApi-phase1_content-ai">

                <div class="whatsappApi-phase1_content-ai-card">

                    <div class="whatsappApi-phase1_content-ai-card-title">

                        <span class="whatsappApi-phase1_content-ai-card-icon">
                            ✦
                        </span>

                        Support AI

                    </div>

                    <p class="whatsappApi-phase1_content-ai-card-text">
                        Redirect to Technical Support
                        Knowledge Base.
                    </p>

                </div>

            </div>


            <!-- FINISH -->

            <div class="whatsappApi-phase1_content-finish">

                <div class="whatsappApi-phase1_content-finish-circle">
                    ✓
                </div>

                <span class="whatsappApi-phase1_content-finish-label">
                    FINISH
                </span>

            </div>

        </div>


        <!-- SIDEBAR -->

        <div class="whatsappApi-phase1_sidebar">

            <div class="whatsappApi-phase1_sidebar-title">
                NODE SETTINGS
            </div>

            <div class="whatsappApi-phase1_sidebar-field">
                <label class="whatsappApi-phase1_sidebar-field-label">NODE TITLE</label>
                <div class="whatsappApi-phase1_sidebar-field-input">Welcome Prompt (ID #42)</div>
            </div>

            <div class="whatsappApi-phase1_sidebar-field">
                <label class="whatsappApi-phase1_sidebar-field-label">MESSAGE CONTENT</label>
                <div class="whatsappApi-phase1_sidebar-field-textarea">Hello there! Welcome to support. How can I help?</div>
            </div>

            <div class="whatsappApi-phase1_sidebar-divider"></div>

            <div class="whatsappApi-phase1_sidebar-title">
                AUTOMATION RULES
            </div>

            <div class="whatsappApi-phase1_sidebar-toggle">
                <span class="whatsappApi-phase1_sidebar-toggle-label">Enable AI Reply</span>
                <span class="whatsappApi-phase1_sidebar-toggle-switch active"></span>
            </div>

            <div class="whatsappApi-phase1_sidebar-toggle">
                <span class="whatsappApi-phase1_sidebar-toggle-label">Log to Analytics</span>
                <span class="whatsappApi-phase1_sidebar-toggle-switch active"></span>
            </div>

            <div class="whatsappApi-phase1_sidebar-toggle">
                <span class="whatsappApi-phase1_sidebar-toggle-label">Auto-Assign Agent</span>
                <span class="whatsappApi-phase1_sidebar-toggle-switch"></span>
            </div>

            <div class="whatsappApi-phase1_sidebar-divider"></div>

            <div class="whatsappApi-phase1_sidebar-note">
                <strong>Platform Power</strong><br>
                This flow is capable of handling over 50,000 concurrent sessions without any lag.
            </div>

        </div>

    </div>

</section>