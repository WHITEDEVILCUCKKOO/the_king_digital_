<style>
        /* =========================================================
        WHATSAPP API PHASE 2 — LIVE INBOX
        ========================================================= */

    .whatsappApi-phase2 {
        width: 100%;
        padding: 40px 80px 80px;
        background: #f8fbff;
    }

    .whatsapp-phase2-heading {
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 40px;
    }

    .whatsapp-phase2-heading span {
        color: #3d70df;
    }

    .whatsapp-phase2-heading h1 {
        font-size: 50px;
        font-weight: 800;
        color: #27354a;
    }

    .whatsapp-phase2-heading p {
        font-size: 16px;
        font-weight: 400;
        color: var(--text-mute);
    }


        /* =========================================================
    TOP BAR
        ========================================================= */

    .whatsappApi-phase2_topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        width: 100%;
        max-width: 1360px;
        margin: 0 auto;
        height: 56px;
        padding: 0 20px;
        border-radius: 20px 20px 0 0;
        background: #fff;
        border: 1px solid #e6edf7;
        box-shadow: 0 10px 30px rgba(46, 80, 130, .08);
    }


    .whatsappApi-phase2_topbar-dots {
        display: flex;
        align-items: center;
        gap: 6px;
        flex-shrink: 0;
    }


    .whatsappApi-phase2_topbar-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #e2685f;
    }


    .whatsappApi-phase2_topbar-dot.warning {
        background: #ecb84a;
    }


    .whatsappApi-phase2_topbar-dot.success {
        background: #4cc98a;
    }


    .whatsappApi-phase2_topbar-search {
        display: flex;
        align-items: center;
        gap: 8px;
        width: 220px;
        height: 32px;
        padding: 0 12px;
        border-radius: 8px;
        background: #f4f7fc;
        border: 1px solid #e6edf7;
        color: #9aa6b8;
        font-size: 11px;
    }


    .whatsappApi-phase2_topbar-search i {
        font-size: 12px;
        font-style: normal;
    }


    .whatsappApi-phase2_topbar-status {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-left: auto;
        padding: 6px 12px;
        border-radius: 20px;
        background: #eafbf1;
        color: #1c9a5b;
        font-size: 10px;
        font-weight: 700;
        white-space: nowrap;
    }


    .whatsappApi-phase2_topbar-status i {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #1c9a5b;
    }


    .whatsappApi-phase2_topbar-avatar {
        width: 32px;
        height: 32px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #eef1f6;
        color: #52607a;
        font-size: 10px;
        font-weight: 800;
    }


    /* =========================================================
   LAYOUT
    ========================================================= */

    .whatsappApi-phase2_layout {
        display: flex;
        align-items: stretch;
        width: 100%;
        max-width: 1360px;
        margin: 0 auto;
    }


    /* =========================================================
   CONVERSATION LIST
    ========================================================= */

    .whatsappApi-phase2_list {
        width: 240px;
        flex-shrink: 0;
        height: 500px;
        overflow-y: auto;
        background: #fff;
        border: 1px solid #e6edf7;
        border-top: none;
    }


    .whatsappApi-phase2_list-item {
        position: relative;
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 13px 16px;
        border-bottom: 1px solid #f0f4fa;
    }


    .whatsappApi-phase2_list-item.active {
        background: #f5f8ff;
        border-left: 3px solid #3d70df;
        padding-left: 13px;
    }


    .whatsappApi-phase2_list-item-avatar {
        position: relative;
        flex-shrink: 0;
        width: 34px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        font-size: 11px;
        font-weight: 800;
    }


    .whatsappApi-phase2_list-item-avatar-dot {
        position: absolute;
        right: -1px;
        bottom: -1px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #3ecf8e;
        border: 2px solid #fff;
    }


    .whatsappApi-phase2_list-item-body {
        flex: 1;
        min-width: 0;
    }


    .whatsappApi-phase2_list-item-name {
        font-size: 11px;
        font-weight: 800;
        color: #27354a;
    }


    .whatsappApi-phase2_list-item-preview {
        margin-top: 3px;
        font-size: 10px;
        color: #8a96a8;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    .whatsappApi-phase2_list-item-meta {
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 6px;
    }


    .whatsappApi-phase2_list-item-time {
        font-size: 9px;
        color: #b1bbca;
    }


    .whatsappApi-phase2_list-item-star {
        font-size: 10px;
        color: #f2ac3d;
    }


    /* =========================================================
   CHAT PANEL
    ========================================================= */

    .whatsappApi-phase2_chat {
        flex: 1;

        min-width: 0;

        height: 500px;

        display: flex;
        flex-direction: column;

        background: #eef2f8;

        border: 1px solid #e6edf7;

        border-top: none;
        border-left: none;
        border-right: none;
    }


    /* =========================================================
   HEADER
    ========================================================= */

    .whatsappApi-phase2_chat-header {
        display: flex;
        align-items: center;

        gap: 10px;

        padding: 12px 20px;

        background: #fff;

        border-bottom: 1px solid #e6edf7;
    }


    .whatsappApi-phase2_chat-header-avatar {
        width: 34px;
        height: 34px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        color: #fff;

        font-size: 11px;
        font-weight: 800;
    }


    .whatsappApi-phase2_chat-header-info {
        flex: 1;
        min-width: 0;
    }


    .whatsappApi-phase2_chat-header-name {
        font-size: 12px;

        font-weight: 800;

        color: #27354a;
    }


    .whatsappApi-phase2_chat-header-status {
        margin-top: 2px;

        font-size: 10px;

        color: #8a96a8;
    }


    .whatsappApi-phase2_chat-header-menu {
        display: flex;
        flex-direction: column;
        align-items: center;

        gap: 3px;

        padding: 6px;

        flex-shrink: 0;
    }


    .whatsappApi-phase2_chat-header-menu i {
        width: 3px;
        height: 3px;

        border-radius: 50%;

        background: #b1bbca;
    }


    /* =========================================================
   CHAT BODY
    ========================================================= */

    .whatsappApi-phase2_chat-body {
        flex: 1;

        overflow: hidden;

        padding: 20px;
    }


    .whatsappApi-phase2_chat-day {
        width: fit-content;

        margin: 0 auto 20px;

        padding: 5px 14px;

        border-radius: 20px;

        background: #fff;

        color: #9aa6b8;

        font-size: 9px;

        font-weight: 700;

        letter-spacing: .6px;
    }


    .whatsappApi-phase2_chat-service {
        text-align: center;

        margin-bottom: 10px;

        font-size: 8px;

        font-weight: 700;

        letter-spacing: .8px;

        color: #b1bbca;
    }


    /* =========================================================
   MESSAGE ROW
    ========================================================= */

    .whatsappApi-phase2_chat-row {
        display: flex;

        align-items: flex-end;

        gap: 8px;

        margin-bottom: 20px;
    }


    .whatsappApi-phase2_chat-row.outgoing-row {
        justify-content: flex-end;
    }


    /* =========================================================
   AVATAR
    ========================================================= */

    .whatsappApi-phase2_chat-avatar {
        flex-shrink: 0;

        width: 22px;
        height: 22px;

        border-radius: 50%;

        background: #d7dee9;
    }


    /* =========================================================
   MESSAGE BUBBLE
    ========================================================= */

    .whatsappApi-phase2_chat-bubble {
        max-width: 300px;

        padding: 11px 14px;

        border-radius: 14px;

        font-size: 10px;

        line-height: 1.6;

        opacity: 0;
    }


    /* =========================================================
   INCOMING MESSAGE
   LEFT → CENTER
    ========================================================= */

    .whatsappApi-phase2_chat-bubble.incoming {
        background: #fff;

        color: #3a4759;

        border-bottom-left-radius: 4px;

        box-shadow:
            0 6px 16px rgba(36, 68, 110, .06);

        animation:
            whatsappApi-phase2_incomingMessage 7s ease-in-out infinite;
    }


    /* =========================================================
   OUTGOING MESSAGE
   RIGHT → CENTER
    ========================================================= */

    .whatsappApi-phase2_chat-bubble.outgoing {
        background: #3d70df;

        color: #fff;

        border-bottom-right-radius: 4px;

        animation:
            whatsappApi-phase2_outgoingMessage 7s ease-in-out infinite;
    }


    /* =========================================================
   INCOMING ANIMATION
    ========================================================= */

    @keyframes whatsappApi-phase2_incomingMessage {

        /* Waiting */

        0% {
            opacity: 0;

            transform:
                translateX(-45px) translateY(8px);
        }


        /* Appear */

        8% {
            opacity: 1;

            transform:
                translateX(0) translateY(0);
        }


        /* Stay */

        45% {
            opacity: 1;

            transform:
                translateX(0) translateY(0);
        }


        /* Disappear */

        55% {
            opacity: 0;

            transform:
                translateX(-15px) translateY(4px);
        }


        /* Reset */

        100% {
            opacity: 0;

            transform:
                translateX(-45px) translateY(8px);
        }

    }


    /* =========================================================
   OUTGOING ANIMATION
    ========================================================= */

    @keyframes whatsappApi-phase2_outgoingMessage {

        /* Waiting */

        0% {
            opacity: 0;

            transform:
                translateX(45px) translateY(8px);
        }


        /* Stay hidden */

        20% {
            opacity: 0;

            transform:
                translateX(45px) translateY(8px);
        }


        /* Appear */

        28% {
            opacity: 1;

            transform:
                translateX(0) translateY(0);
        }


        /* Stay */

        65% {
            opacity: 1;

            transform:
                translateX(0) translateY(0);
        }


        /* Disappear */

        75% {
            opacity: 0;

            transform:
                translateX(15px) translateY(4px);
        }


        /* Reset */

        100% {
            opacity: 0;

            transform:
                translateX(45px) translateY(8px);
        }

    }


    /* =========================================================
   INPUT
    ========================================================= */

    .whatsappApi-phase2_chat-input {
        display: flex;

        align-items: center;

        gap: 10px;

        padding: 14px 20px;

        background: #fff;

        border-top: 1px solid #e6edf7;
    }


    .whatsappApi-phase2_chat-input-add {
        width: 26px;
        height: 26px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        border: 1px solid #e3eaf3;

        color: #8a96a8;

        font-size: 13px;
    }


    .whatsappApi-phase2_chat-input-field {
        flex: 1;

        font-size: 10px;

        color: #b1bbca;
    }


    .whatsappApi-phase2_chat-input-send {
        width: 26px;
        height: 26px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #3d70df;

        color: #fff;

        font-size: 10px;
    }


    /* =========================================================
   CUSTOMER DETAILS PANEL
    ========================================================= */

    .whatsappApi-phase2_details {
        width: 260px;
        flex-shrink: 0;
        height: 500px;
        overflow-y: auto;
        padding: 24px 18px;
        background: #fff;
        border-radius: 0 0 20px 0;
        border: 1px solid #e6edf7;
        border-top: none;
        border-left: none;
    }


    .whatsappApi-phase2_details-avatar {
        width: 60px;
        height: 60px;
        margin: 0 auto 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #8b5cf6;
        color: #fff;
        font-size: 16px;
        font-weight: 800;
    }


    .whatsappApi-phase2_details-name {
        text-align: center;
        font-size: 13px;
        font-weight: 800;
        color: #27354a;
    }


    .whatsappApi-phase2_details-phone {
        text-align: center;
        margin-top: 4px;
        font-size: 10px;
        color: #9aa6b8;
    }


    .whatsappApi-phase2_details-export {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        width: fit-content;
        margin: 14px auto 0;
        padding: 8px 16px;
        border-radius: 20px;
        border: 1px solid #dbe3f0;
        color: #52607a;
        font-size: 9px;
        font-weight: 700;
    }


    .whatsappApi-phase2_details-block {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        width: 100%;
        margin-top: 20px;
        padding: 10px;
        border-radius: 10px;
        background: #fdecec;
        color: #e2453f;
        font-size: 10px;
        font-weight: 700;
    }


    .whatsappApi-phase2_details-accordion {
        margin-top: 18px;
    }


    .whatsappApi-phase2_details-accordion-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 13px 4px;
        border-bottom: 1px solid #f0f4fa;
    }


    .whatsappApi-phase2_details-accordion-icon {
        width: 22px;
        height: 22px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        background: #f1f5ff;
        color: #3d70df;
        font-size: 11px;
    }


    .whatsappApi-phase2_details-accordion-label {
        flex: 1;
        font-size: 10px;
        font-weight: 700;
        color: #3d70df;
    }


    .whatsappApi-phase2_details-accordion-chevron {
        flex-shrink: 0;
        font-size: 9px;
        color: #b1bbca;
    }


    .whatsappApi-phase2_details-insight {
        margin-top: 18px;
        padding: 12px;
        border-radius: 10px;
        background: #f1f5ff;
        border: 1px solid #d9e5ff;
        font-size: 9px;
        line-height: 1.6;
        color: #4a5b73;
    }


    .whatsappApi-phase2_details-insight strong {
        color: #3d70df;
    }


    /* =========================================================
   RESPONSIVE
    ========================================================= */

    @media (max-width: 992px) {

        .whatsappApi-phase2_layout {
            flex-direction: column;
        }

        .whatsappApi-phase2_topbar-search {
            width: 160px;
        }

        .whatsappApi-phase2_list{
            display: none;
        }

        .whatsappApi-phase2_chat
         {
            width: 100%;
            height: 340px;
            border-radius: 0;
        }

        

        .whatsappApi-phase2_details {
            display: none;
        }

    }


    @media (max-width: 768px) {

        .whatsappApi-phase2_topbar {
            padding: 0 14px;
            gap: 10px;
        }

        .whatsappApi-phase2_topbar-search {
            width: 120px;
        }

        .whatsappApi-phase2_topbar-status span {
            display: none;
        }

        .whatsappApi-phase2_topbar-status::after {
            content: "12";
        }

        .whatsappApi-phase2_list {
            height: 260px;
        }

        .whatsappApi-phase2_chat {
            height: 420px;
        }

        .whatsappApi-phase2_chat-bubble {
            max-width: 220px;
        }

    }


    @media (max-width: 480px) {

        .whatsappApi-phase2_topbar-search {
            width: 90px;
        }

        .whatsappApi-phase2_list {
            height: 220px;
        }

        .whatsappApi-phase2_chat-bubble {
            max-width: 180px;
        }

    }
</style>


<section class="whatsappApi-phase2">

    <div class="whatsapp-phase2-heading">
        <span>Phase 2: Scaling Support</span>
        <h1>Advanced WhatsApp Agent Interface</h1>
        <p>A powerful, unified dashboard for your entire team to manage high-volume sales and support.</p>
    </div>

    <!-- TOP BAR -->
    <div class="whatsappApi-phase2_topbar">

        <div class="whatsappApi-phase2_topbar-dots">
            <span class="whatsappApi-phase2_topbar-dot"></span>
            <span class="whatsappApi-phase2_topbar-dot warning"></span>
            <span class="whatsappApi-phase2_topbar-dot success"></span>
        </div>

        <div class="whatsappApi-phase2_topbar-search">
            <i>⌕</i>
            Search conversations...
        </div>

        <div class="whatsappApi-phase2_topbar-status">
            <i></i>
            <span>Live: 12 Agents Online</span>
        </div>

        <div class="whatsappApi-phase2_topbar-avatar">
            AD
        </div>

    </div>


    <div class="whatsappApi-phase2_layout">

        <!-- CONVERSATION LIST -->
        <div class="whatsappApi-phase2_list">

            <div class="whatsappApi-phase2_list-item active">
                <div class="whatsappApi-phase2_list-item-avatar" style="background:#8b5cf6">
                    N
                    <span class="whatsappApi-phase2_list-item-avatar-dot"></span>
                </div>
                <div class="whatsappApi-phase2_list-item-body">
                    <div class="whatsappApi-phase2_list-item-name">Nisha</div>
                    <div class="whatsappApi-phase2_list-item-preview">Sure Nisha!</div>
                </div>
                <div class="whatsappApi-phase2_list-item-meta">
                    <span class="whatsappApi-phase2_list-item-time">11:46 AM</span>
                </div>
            </div>

            <div class="whatsappApi-phase2_list-item">
                <div class="whatsappApi-phase2_list-item-avatar" style="background:#22c55e">
                    M
                    <span class="whatsappApi-phase2_list-item-avatar-dot"></span>
                </div>
                <div class="whatsappApi-phase2_list-item-body">
                    <div class="whatsappApi-phase2_list-item-name">Maimun</div>
                    <div class="whatsappApi-phase2_list-item-preview">Document shared</div>
                </div>
                <div class="whatsappApi-phase2_list-item-meta">
                    <span class="whatsappApi-phase2_list-item-time">10:24 AM</span>
                    <span class="whatsappApi-phase2_list-item-star">★</span>
                </div>
            </div>

            <div class="whatsappApi-phase2_list-item">
                <div class="whatsappApi-phase2_list-item-avatar" style="background:#3b82f6">
                    R
                </div>
                <div class="whatsappApi-phase2_list-item-body">
                    <div class="whatsappApi-phase2_list-item-name">Rahul</div>
                    <div class="whatsappApi-phase2_list-item-preview">Pricing question</div>
                </div>
                <div class="whatsappApi-phase2_list-item-meta">
                    <span class="whatsappApi-phase2_list-item-time">Yesterday</span>
                </div>
            </div>

            <div class="whatsappApi-phase2_list-item">
                <div class="whatsappApi-phase2_list-item-avatar" style="background:#f97316">
                    S
                    <span class="whatsappApi-phase2_list-item-avatar-dot"></span>
                </div>
                <div class="whatsappApi-phase2_list-item-body">
                    <div class="whatsappApi-phase2_list-item-name">Sneha</div>
                    <div class="whatsappApi-phase2_list-item-preview">Order status update</div>
                </div>
                <div class="whatsappApi-phase2_list-item-meta">
                    <span class="whatsappApi-phase2_list-item-time">Yesterday</span>
                </div>
            </div>

            <div class="whatsappApi-phase2_list-item">
                <div class="whatsappApi-phase2_list-item-avatar" style="background:#10b981">
                    A
                    <span class="whatsappApi-phase2_list-item-avatar-dot"></span>
                </div>
                <div class="whatsappApi-phase2_list-item-body">
                    <div class="whatsappApi-phase2_list-item-name">Amit</div>
                    <div class="whatsappApi-phase2_list-item-preview">Can we schedule a demo?</div>
                </div>
                <div class="whatsappApi-phase2_list-item-meta">
                    <span class="whatsappApi-phase2_list-item-time">Yesterday</span>
                </div>
            </div>

            <div class="whatsappApi-phase2_list-item">
                <div class="whatsappApi-phase2_list-item-avatar" style="background:#6366f1">
                    V
                </div>
                <div class="whatsappApi-phase2_list-item-body">
                    <div class="whatsappApi-phase2_list-item-name">Vikram</div>
                    <div class="whatsappApi-phase2_list-item-preview">Thanks for the support</div>
                </div>
                <div class="whatsappApi-phase2_list-item-meta">
                    <span class="whatsappApi-phase2_list-item-time">Monday</span>
                </div>
            </div>

            <div class="whatsappApi-phase2_list-item">
                <div class="whatsappApi-phase2_list-item-avatar" style="background:#ec4899">
                    P
                    <span class="whatsappApi-phase2_list-item-avatar-dot"></span>
                </div>
                <div class="whatsappApi-phase2_list-item-body">
                    <div class="whatsappApi-phase2_list-item-name">Priya</div>
                    <div class="whatsappApi-phase2_list-item-preview">Payment received</div>
                </div>
                <div class="whatsappApi-phase2_list-item-meta">
                    <span class="whatsappApi-phase2_list-item-time">Monday</span>
                    <span class="whatsappApi-phase2_list-item-star">★</span>
                </div>
            </div>

            <div class="whatsappApi-phase2_list-item">
                <div class="whatsappApi-phase2_list-item-avatar" style="background:#14b8a6">
                    D
                </div>
                <div class="whatsappApi-phase2_list-item-body">
                    <div class="whatsappApi-phase2_list-item-name">Deepak</div>
                    <div class="whatsappApi-phase2_list-item-preview">Looking forward to it</div>
                </div>
                <div class="whatsappApi-phase2_list-item-meta">
                    <span class="whatsappApi-phase2_list-item-time">Sunday</span>
                </div>
            </div>

        </div>


        <!-- CHAT PANEL -->
        <div class="whatsappApi-phase2_chat">

            <!-- HEADER -->
            <div class="whatsappApi-phase2_chat-header">

                <div
                    class="whatsappApi-phase2_chat-header-avatar"
                    style="background:#8b5cf6">
                    NI
                </div>

                <div class="whatsappApi-phase2_chat-header-info">

                    <div class="whatsappApi-phase2_chat-header-name">
                        Nisha
                    </div>

                    <div class="whatsappApi-phase2_chat-header-status">
                        Typing...
                    </div>

                </div>

                <div class="whatsappApi-phase2_chat-header-menu">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>

            </div>


            <!-- CHAT BODY -->
            <div class="whatsappApi-phase2_chat-body">

                <div class="whatsappApi-phase2_chat-day">
                    TODAY
                </div>


                <div class="whatsappApi-phase2_chat-service">
                    SERVICE MESSAGE SENT
                </div>


                <!-- INCOMING MESSAGE -->

                <div class="whatsappApi-phase2_chat-row incoming-row">

                    <div class="whatsappApi-phase2_chat-avatar"></div>

                    <div class="whatsappApi-phase2_chat-bubble incoming">

                        Hey! I am interested in your premium plan.

                    </div>

                </div>


                <div class="whatsappApi-phase2_chat-service">
                    SERVICE MESSAGE SENT
                </div>


                <!-- OUTGOING MESSAGE -->

                <div class="whatsappApi-phase2_chat-row outgoing-row">

                    <div class="whatsappApi-phase2_chat-bubble outgoing">

                        Sure Nisha! I see you just selected
                        'Check Availability' in the chat flow.
                        I am here to help you with our Enterprise rates.

                    </div>

                </div>

            </div>


            <!-- INPUT -->

            <div class="whatsappApi-phase2_chat-input">

                <div class="whatsappApi-phase2_chat-input-add">
                    +
                </div>

                <div class="whatsappApi-phase2_chat-input-field">
                    Type your message...
                </div>

                <div class="whatsappApi-phase2_chat-input-send">
                    ➤
                </div>

            </div>

        </div>


        <!-- CUSTOMER DETAILS -->
        <div class="whatsappApi-phase2_details">

            <div class="whatsappApi-phase2_details-avatar">NI</div>
            <div class="whatsappApi-phase2_details-name">Nisha</div>
            <div class="whatsappApi-phase2_details-phone">859 754 88••</div>

            <div class="whatsappApi-phase2_details-export">
                ⬇ Export Chat
            </div>

            <div class="whatsappApi-phase2_details-block">
                ⊘ Block Customer
            </div>

            <div class="whatsappApi-phase2_details-accordion">

                <div class="whatsappApi-phase2_details-accordion-item">
                    <span class="whatsappApi-phase2_details-accordion-icon">◎</span>
                    <span class="whatsappApi-phase2_details-accordion-label">Assign Agent</span>
                    <span class="whatsappApi-phase2_details-accordion-chevron">▾</span>
                </div>

                <div class="whatsappApi-phase2_details-accordion-item">
                    <span class="whatsappApi-phase2_details-accordion-icon">▤</span>
                    <span class="whatsappApi-phase2_details-accordion-label">Notes &amp; Logs</span>
                    <span class="whatsappApi-phase2_details-accordion-chevron">▾</span>
                </div>

                <div class="whatsappApi-phase2_details-accordion-item">
                    <span class="whatsappApi-phase2_details-accordion-icon">⇢</span>
                    <span class="whatsappApi-phase2_details-accordion-label">Customer Journey</span>
                    <span class="whatsappApi-phase2_details-accordion-chevron">▾</span>
                </div>

            </div>

            <div class="whatsappApi-phase2_details-insight">
                <strong>Quick Insight:</strong> Customers from Mumbai region show 40% higher conversion on Product Inquiry.
            </div>

        </div>

    </div>

</section>