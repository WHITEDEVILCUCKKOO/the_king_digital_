
<section class="kd-promo-hero" id="kdPromoHero">
    <div class="kd-bg-shape kd-bg-shape--top"></div>
    <div class="kd-bg-shape kd-bg-shape--bottom"></div>
    <div class="kd-dot-grid"></div>

    <div class="kd-promo-wrap">

        <!-- LEFT CONTENT -->
        <div class="kd-promo-content">
            <div class="kd-badge">
                <span class="kd-live-dot"></span>
                <span>Smart SMS Marketing Solutions</span>
            </div>

            <h1 class="kd-title">
                <span>Reach More Customers</span>
                <span>with <em>Promotional SMS</em></span>
            </h1>

            <div class="kd-title-line"></div>

            <p class="kd-description">
                Promote offers, products and services with fast, reliable and scalable
                SMS campaigns designed to help your business reach the right audience
                and drive better results.
            </p>

            <div class="kd-service-tags">
                <span>Bulk SMS</span>
                <span>Promotional SMS</span>
                <span>Transactional SMS</span>
                <span>OTP SMS</span>
            </div>

            <div class="kd-actions">
                <a href="#enquiry" class="kd-btn kd-btn-primary">
                    Get Started Now <b>→</b>
                </a>
                <a href="#services" class="kd-btn kd-btn-secondary">
                    Explore Services
                </a>
            </div>
        </div>

        <!-- RIGHT VISUAL -->
        <div class="kd-visual">

            <div class="kd-orbit kd-orbit-one"></div>
            <div class="kd-orbit kd-orbit-two"></div>
            <div class="kd-red-glow"></div>

            <!-- HIGH REACH CARD: POSITIONED TOUCHING PHONE -->
            <div class="kd-floating-card kd-high-reach">
                <div class="kd-reach-icon">↗</div>
                <div>
                    <strong>High Reach</strong>
                    <small>Connect instantly</small>
                </div>
            </div>

            <div class="kd-connection-line">
                <span class="kd-connection-dot kd-dot-a"></span>
                <span class="kd-connection-dot kd-dot-b"></span>
                <svg viewBox="0 0 200 150" preserveAspectRatio="none" aria-hidden="true">
                    <path d="M15,10 C15,72 65,105 170,132" />
                </svg>
            </div>

            <!-- PHONE -->
            <div class="kd-phone kd-phone-live" aria-label="Live SMS campaign animation">
                <div class="kd-phone-notch"></div>
                <div class="kd-phone-side kd-phone-side-one"></div>
                <div class="kd-phone-side kd-phone-side-two"></div>

                <div class="kd-screen">
                    <div class="kd-app-header kd-live-header">
                        <div class="kd-app-brand">
                            <div class="kd-app-logo">K</div>
                            <div>
                                <strong>King Digital</strong>
                                <small>SMS Marketing</small>
                            </div>
                        </div>
                        <span class="kd-online"><i></i>Online</span>
                    </div>

                    <div class="kd-app-divider"></div>
                    <div class="kd-today">Today</div>

                    <div class="kd-message kd-message-light kd-live-offer">
                        <p><span class="kd-msg-emoji">✨</span> Special Offer! Get exciting deals on our latest products.</p>
                        <small>10:30 AM</small>
                    </div>

                    <div class="kd-message kd-message-red kd-live-sent">
                        <p>Campaign Sent Successfully <span>✓</span></p>
                        <small>10:31 AM</small>
                    </div>

                    <div class="kd-campaign-card kd-live-campaign">
                        <div class="kd-mail">✉</div>
                        <div class="kd-campaign-copy">
                            <strong>Campaign Sent</strong>
                            <small><span class="kd-live-count">10,000</span> SMS Delivered</small>
                        </div>
                        <span class="kd-success kd-live-check">✓</span>
                        <div class="kd-live-progress" aria-hidden="true"><span></span></div>
                    </div>

                    <div class="kd-phone-footer">
                        <span class="kd-footer-dot active"></span>
                        <span class="kd-footer-dot"></span>
                        <span class="kd-footer-dot"></span>
                    </div>
                </div>
            </div>

            <!-- SMS TILE -->
            <div class="kd-sms-tile">SMS</div>

            <!-- DELIVERY CARD -->
            <div class="kd-floating-card kd-delivery-card">
                <div class="kd-progress-ring">
                    <span class="qunik-count" data-target="98" data-suffix="%">0</span>
                </div>
                <div>
                    <strong>Delivery</strong>
                    <small>Reliable SMS service</small>
                </div>
            </div>

            <span class="kd-visual-dot kd-visual-dot-one"></span>
            <span class="kd-visual-dot kd-visual-dot-two"></span>
        </div>
    </div>
</section>

<style>


    #kdPromoHero {
        --kd-red: #b61f29;
        --kd-red-dark: #9e1822;
        --kd-red-soft: #f8e9ea;
        --kd-navy: #263347;
        --kd-text: #59687a;
        --kd-border: #dbe0e6;
        --kd-white: #ffffff;
        position: relative;
        width: 100%;
        min-height: 610px;
        overflow: hidden;
        padding: 58px 28px 52px;
        isolation: isolate;
       font-family: 'Segoe UI', Roboto, Helvetica Neue, Arial, sans-serif;
        /* background:
            radial-gradient(circle at 70% 45%, rgba(201, 44, 52, 0.37) 0, rgba(201, 44, 53, .045) 12%, transparent 29%),
            linear-gradient(110deg, #f8f8f7 0%, #ffffff 48%, #faf9f8 100%); */

             background: linear-gradient(226deg, rgba(235, 244, 245, 1) 0%, rgba(176, 26, 39, 0.36) 100%);
                
    }

    /* BACKGROUND */
    #kdPromoHero .kd-bg-shape {
        position: absolute;
        z-index: -2;
        border: 1px solid rgba(182, 31, 41, .09);
        border-radius: 50%;
        pointer-events: none;
    }

    #kdPromoHero .kd-bg-shape--top {
        width: 380px;
        height: 380px;
        right: -175px;
        top: -190px;
        background: rgba(255, 250, 250, .45);
    }

    #kdPromoHero .kd-bg-shape--bottom {
        width: 340px;
        height: 340px;
        left: -210px;
        bottom: -245px;
        background: rgba(182, 31, 41, .025);
    }

    #kdPromoHero .kd-dot-grid {
        position: absolute;
        z-index: -1;
        width: 210px;
        height: 660px;
        right: 8%;
        top: 85px;
        opacity: .26;
        background-image: radial-gradient(rgba(182, 31, 41, .38) 1px, transparent 1.3px);
        background-size: 12px 12px;
        mask-image: linear-gradient(to bottom, transparent 0%, #000 20%, #000 70%, transparent 100%);
        pointer-events: none;
    }

    /* MAIN GRID */
    #kdPromoHero .kd-promo-wrap {
        width: 100%;
        max-width: 1360px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: minmax(0, 660px) minmax(520px, 1fr);
        align-items: center;
        gap: 45px;
    }

    /* LEFT */
    #kdPromoHero .kd-promo-content {
        min-width: 0;
        padding-top: 3px;
    }

    #kdPromoHero .kd-badge {
        width: max-content;
        max-width: 100%;
        min-height: 40px;
        display: inline-flex;
        align-items: center;
        gap: 11px;
        padding: 8px 20px;
        margin-bottom: 34px;
        border: 1px solid #d9dde2;
        border-radius: 999px;
        color: #a1262e;
        background: rgba(255, 255, 255, .72);
        box-shadow: 0 10px 28px rgba(31, 42, 55, .035);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: .35px;
    }

    #kdPromoHero .kd-live-dot {
        position: relative;
        width: 8px;
        height: 8px;
        flex: 0 0 8px;
        border-radius: 50%;
        background: var(--kd-red);
        animation: kdLiveBlink 1.5s infinite ease-in-out;
    }

    #kdPromoHero .kd-live-dot:after {
        content: "";
        position: absolute;
        inset: -5px;
        border-radius: 50%;
        border: 1px solid rgba(182, 31, 41, .25);
        animation: kdLivePulse 1.5s infinite ease-out;
    }

    #kdPromoHero .kd-title {
        margin: 0;
        color: black;
        font-size: clamp(40px, 3.55vw, 44px);
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -2px;
    }

    #kdPromoHero .kd-title span {
        display: block;
        white-space: nowrap;
    }

    #kdPromoHero .kd-title em {
        color: var(--kd-red);
        font-style: normal;
    }

    #kdPromoHero .kd-title-line {
        width: 75px;
        height: 3px;
        margin: 24px 0 25px;
        border-radius: 999px;
        background: var(--kd-red);
    }

    #kdPromoHero .kd-description {
        max-width: 610px;
        margin: 0;
        color: var(--kd-text);
        font-size: 16px;
        line-height: 1.85;
    }

    #kdPromoHero .kd-service-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 29px;
    }

    #kdPromoHero .kd-service-tags span {
        display: inline-flex;
        align-items: center;
        min-height: 43px;
        padding: 9px 19px;
        border: 1px solid #d8dee5;
        border-radius: 999px;
        background: rgba(255, 255, 255, .66);
        color: #526173;
        font-size: 13px;
        font-weight: 600;
        transition: .25s ease;
    }

    #kdPromoHero .kd-service-tags span:hover {
        color: var(--kd-red);
        border-color: rgba(182, 31, 41, .35);
        background: #fff;
        transform: translateY(-2px);
    }

    #kdPromoHero .kd-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 22px;
        margin-top: 37px;
    }

    #kdPromoHero .kd-btn {
        min-width: 160px;
        min-height: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 16px;
        padding: 12px 20px;
        border-radius: 9px;
        text-decoration: none !important;
        font-size: 14px;
        font-weight: 700;
        transition: .25s ease;
    }

    #kdPromoHero .kd-btn-primary {
        color: #fff !important;
        background: linear-gradient(135deg, #c62831, #a71721);
        box-shadow: 0 16px 32px rgba(182, 31, 41, .19);
    }

    #kdPromoHero .kd-btn-primary:hover {
        color: #fff !important;
        transform: translateY(-3px);
        box-shadow: 0 20px 40px rgba(182, 31, 41, .27);
    }

    #kdPromoHero .kd-btn-primary b {
        font-size: 23px;
        line-height: 1;
    }

    #kdPromoHero .kd-btn-secondary {
        color: #334155 !important;
        border: 1px solid #d5dce3;
        background: rgba(255, 255, 255, .60);
    }

    #kdPromoHero .kd-btn-secondary:hover {
        color: var(--kd-red) !important;
        border-color: rgba(182, 31, 41, .35);
        background: #fff;
        transform: translateY(-3px);
    }


    /* RIGHT VISUAL */
    #kdPromoHero .kd-visual {
        position: relative;
        min-height: 480px;
        min-width: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #kdPromoHero .kd-red-glow {
        position: absolute;
        width: 430px;
        height: 430px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(218, 49, 58, .18) 0%, rgba(218, 49, 58, .08) 34%, transparent 69%);
    }

    #kdPromoHero .kd-orbit {
        position: absolute;
        border: 1px solid rgba(182, 31, 41, .09);
        border-radius: 50%;
    }

    #kdPromoHero .kd-orbit-one {
        width: 370px;
        height: 370px;
    }

    #kdPromoHero .kd-orbit-two {
        width: 425px;
        height: 425px;
        border-color: rgba(182, 31, 41, .045);
    }

    /* PHONE */
    #kdPromoHero .kd-phone {
        position: relative;
        z-index: 4;
        width: 270px;
        height: 500px;
        padding: 10px;
        border-radius: 43px;
        background: linear-gradient(145deg, #0d1013, #232b32);
        box-shadow:
            0 30px 52px rgba(22, 31, 41, .24),
            0 0 0 6px rgba(255, 255, 255, .55);
    }

    #kdPromoHero .kd-phone-notch {
        position: absolute;
        z-index: 8;
        top: 13px;
        left: 50%;
        width: 92px;
        height: 25px;
        border-radius: 0 0 16px 16px;
        background: #0a0d10;
        transform: translateX(-50%);
    }

    #kdPromoHero .kd-phone-notch:after {
        content: "";
        position: absolute;
        width: 37px;
        height: 4px;
        top: 8px;
        left: 50%;
        border-radius: 999px;
        background: #272e35;
        transform: translateX(-50%);
    }

    #kdPromoHero .kd-phone-side {
        position: absolute;
        right: -4px;
        width: 4px;
        border-radius: 0 4px 4px 0;
        background: #3a424a;
    }

    #kdPromoHero .kd-phone-side-one {
        top: 180px;
        height: 65px;
    }

    #kdPromoHero .kd-phone-side-two {
        top: 270px;
        height: 100px;
    }

    #kdPromoHero .kd-screen {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        padding: 60px 18px 16px;
        border-radius: 35px;
        background: linear-gradient(180deg, #fbfbfa 0%, #f1f3f4 100%);
    }

    #kdPromoHero .kd-app-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #kdPromoHero .kd-app-brand {
        display: flex;
        align-items: center;
        gap: 11px;
    }

    #kdPromoHero .kd-app-logo {
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        color: #fff;
        background: var(--kd-red);
        font-size: 21px;
        font-weight: 800;
    }

    #kdPromoHero .kd-app-brand strong {
        display: block;
        color: #354150;
        font-size: 14px;
    }

    #kdPromoHero .kd-app-brand small {
        display: block;
        margin-top: 4px;
        color: #87919b;
        font-size: 9px;
    }

    #kdPromoHero .kd-online {
        padding: 7px 11px;
        border-radius: 999px;
        color: #4a7b64;
        background: #edf5ef;
        font-size: 9px;
        font-weight: 700;
    }

    #kdPromoHero .kd-app-divider {
        height: 1px;
        margin: 17px 0 14px;
        background: #dde1e4;
    }

    #kdPromoHero .kd-today {
        margin-bottom: 14px;
        color: #9199a1;
        text-align: center;
        font-size: 9px;
    }

    #kdPromoHero .kd-message {
        padding: 16px 14px;
        border-radius: 17px;
        box-shadow: 0 7px 18px rgba(31, 41, 55, .045);
    }

    #kdPromoHero .kd-message p {
        margin: 0;
        font-size: 11px;
        line-height: 1.62;
    }

    #kdPromoHero .kd-message small {
        display: block;
        margin-top: 9px;
        font-size: 8px;
    }

    #kdPromoHero .kd-message-light {
        width: 100%;
        color: #455262;
        background: #fff;
        border-bottom-left-radius: 5px;
    }

    #kdPromoHero .kd-message-light small {
        color: #98a0a8;
    }

    #kdPromoHero .kd-message-red {
        width: 88%;
        margin: 18px 0 0 auto;
        color: #fff;
        background: linear-gradient(135deg, #bd2630, #a71923);
        border-bottom-right-radius: 5px;
    }

    #kdPromoHero .kd-message-red small {
        color: rgba(255, 255, 255, .76);
    }

    #kdPromoHero .kd-campaign-card {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 38px;
        padding: 13px;
        border: 1px solid #e1e5e8;
        border-radius: 16px;
        background: rgba(255, 255, 255, .86);
        box-shadow: 0 8px 22px rgba(31, 41, 55, .035);
    }

    #kdPromoHero .kd-mail {
        width: 40px;
        height: 40px;
        flex: 0 0 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 11px;
        color: var(--kd-red);
        background: #faeeee;
        font-size: 17px;
    }

    #kdPromoHero .kd-campaign-copy {
        flex: 1;
    }

    #kdPromoHero .kd-campaign-copy strong {
        display: block;
        color: #3c4754;
        font-size: 11px;
    }

    #kdPromoHero .kd-campaign-copy small {
        display: block;
        margin-top: 5px;
        color: #8d969e;
        font-size: 8px;
    }

    #kdPromoHero .kd-success {
        width: 26px;
        height: 26px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        background: #39806a;
        font-size: 12px;
    }

    /* FLOATING HIGH REACH CARD - MOVED TO PHONE EDGE */
    #kdPromoHero .kd-floating-card {
        position: absolute;
        z-index: 9;
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 13px 15px;
        border: 1px solid rgba(218, 222, 227, .95);
        border-radius: 17px;
        background: rgba(255, 255, 255, .95);
        box-shadow: 0 18px 38px rgba(25, 35, 48, .10);
        backdrop-filter: blur(10px);
    }

    #kdPromoHero .kd-floating-card strong {
        display: block;
        color: #3c4856;
        font-size: 12px;
    }

    #kdPromoHero .kd-floating-card small {
        display: block;
        margin-top: 4px;
        color: #8a949d;
        font-size: 8px;
    }

    /* IMPORTANT: CARD TOUCHES PHONE, NOT HEADING */
    #kdPromoHero .kd-high-reach {
        top: 4px;
        left: calc(50% - 170px);
        min-width: 164px;
        animation: kdFloatReach 4s ease-in-out infinite;
    }

    #kdPromoHero .kd-reach-icon {
        width: 44px;
        height: 44px;
        flex: 0 0 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 11px;
        color: #fff;
        background: linear-gradient(135deg, #c52832, #aa1822);
        font-size: 24px;
        font-weight: 700;
    }

    #kdPromoHero .kd-connection-line {
        position: absolute;
        z-index: 5;
        top: 57px;
        left: calc(50% - 82px);
        width: 145px;
        height: 130px;
        pointer-events: none;
    }

    #kdPromoHero .kd-connection-line svg {
        width: 100%;
        height: 100%;
        overflow: visible;
    }

    #kdPromoHero .kd-connection-line path {
        fill: none;
        stroke: rgba(182, 31, 41, .55);
        stroke-width: 1.5;
        stroke-dasharray: 4 5;
    }

    #kdPromoHero .kd-connection-dot {
        position: absolute;
        z-index: 2;
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: var(--kd-red);
        box-shadow: 0 0 0 5px rgba(182, 31, 41, .07);
    }

    #kdPromoHero .kd-dot-a {
        top: -1px;
        left: -4px;
    }

    #kdPromoHero .kd-dot-b {
        bottom: 2px;
        right: 1px;
    }

    /* SMS TILE */
    #kdPromoHero .kd-sms-tile {
        position: absolute;
        z-index: 8;
        top: 118px;
        right: 8%;
        width: 72px;
        height: 72px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        color: #fff;
        background: linear-gradient(135deg, #cf3039, #ae1b25);
        box-shadow: 0 18px 35px rgba(182, 31, 41, .20);
        font-size: 14px;
        font-weight: 800;
        transform: rotate(10deg);
        animation: kdTileFloat 5s ease-in-out infinite;
    }

    /* DELIVERY */
    #kdPromoHero .kd-delivery-card {
        right: -2%;
        bottom: 58px;
        min-width: 197px;
        animation: kdDeliveryFloat 4.7s ease-in-out infinite;
    }

    /* #kdPromoHero .kd-progress-ring {
        width: 53px;
        height: 53px;
        flex: 0 0 53px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background:
            radial-gradient(circle closest-side, #fff 74%, transparent 75%),
            conic-gradient(var(--kd-red) 0 98%, #f0e1e3 98% 100%);
    } */


    #kdPromoHero .kd-progress-ring {
        --progress: 0;

        width: 44px;
        height: 44px;
        border-radius: 50%;

        background: conic-gradient(#b61f29 calc(var(--progress) * 1%),
                #e5e5e5 0);

        display: flex;
        align-items: center;
        justify-content: center;

        position: relative;
    }

    #kdPromoHero .kd-progress-ring::before {
        content: "";
        position: absolute;

        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: #fff;
    }

    #kdPromoHero .kd-progress-ring .qunik-count {
        position: relative;
        z-index: 2;
    }


    #kdPromoHero .kd-progress-ring span {
        color: #59636f;
        font-size: 10px;
        font-weight: 800;
    }

    #kdPromoHero .kd-visual-dot {
        position: absolute;
        z-index: 3;
        border-radius: 50%;
        background: rgba(182, 31, 41, .34);
    }

    #kdPromoHero .kd-visual-dot-one {
        width: 7px;
        height: 7px;
        right: 8%;
        top: 310px;
    }

    #kdPromoHero .kd-visual-dot-two {
        width: 12px;
        height: 12px;
        right: 14%;
        bottom: 105px;
        opacity: .4;
    }

    /* ANIMATION */
    @keyframes kdLiveBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .25;
            transform: scale(.78);
        }
    }

    @keyframes kdLivePulse {
        0% {
            opacity: .7;
            transform: scale(.65);
        }

        75%,
        100% {
            opacity: 0;
            transform: scale(1.55);
        }
    }

    @keyframes kdFloatReach {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(4px, -8px);
        }
    }

    @keyframes kdTileFloat {

        0%,
        100% {
            transform: rotate(10deg) translateY(0);
        }

        50% {
            transform: rotate(6deg) translateY(-10px);
        }
    }

    @keyframes kdDeliveryFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(8px);
        }
    }

    /* RESPONSIVE */
    @media (max-width: 1200px) {
        #kdPromoHero .kd-promo-wrap {
            grid-template-columns: minmax(0, 590px) minmax(430px, 1fr);
            gap: 30px;
        }

        #kdPromoHero .kd-benefits {
            gap: 20px;
        }

        #kdPromoHero .kd-benefit small {
            white-space: normal;
        }

        #kdPromoHero .kd-delivery-card {
            right: 0;
        }
    }

    @media (max-width: 1020px) {
        #kdPromoHero {
            padding: 50px 24px 45px;
        }

        #kdPromoHero .kd-promo-wrap {
            grid-template-columns: 1fr;
            gap: 38px;
        }

        #kdPromoHero .kd-promo-content {
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
        }

        #kdPromoHero .kd-badge {
            margin-left: auto;
            margin-right: auto;
        }

        #kdPromoHero .kd-title span {
            white-space: normal;
        }

        #kdPromoHero .kd-title-line {
            margin-left: auto;
            margin-right: auto;
        }

        #kdPromoHero .kd-description {
            margin-left: auto;
            margin-right: auto;
        }

        #kdPromoHero .kd-service-tags,
        #kdPromoHero .kd-actions,
        #kdPromoHero .kd-benefits {
            justify-content: center;
        }

        #kdPromoHero .kd-visual {
            min-height: 500px;
        }
    }

    @media (max-width: 650px) {
        #kdPromoHero {
            padding: 42px 16px 36px;
            min-height: auto;
        }

        #kdPromoHero .kd-badge {
            font-size: 10px;
            padding: 8px 13px;
            margin-bottom: 25px;
        }

        #kdPromoHero .kd-title {
            font-size: clamp(31px, 9vw, 42px);
            letter-spacing: -1.2px;
            line-height: 1.13;
        }

        #kdPromoHero .kd-description {
            font-size: 14px;
            line-height: 1.75;
        }

        #kdPromoHero .kd-service-tags {
            gap: 8px;
        }

        #kdPromoHero .kd-service-tags span {
            min-height: 36px;
            padding: 7px 11px;
            font-size: 11px;
        }

        #kdPromoHero .kd-actions {
            gap: 12px;
            flex-direction: column;
        }

        #kdPromoHero .kd-btn {
            width: 100%;
            min-width: 0;
            min-height: 54px;
        }

        #kdPromoHero .kd-benefits {
            flex-direction: column;
            align-items: flex-start;
            margin-top: 38px;
            gap: 18px;
        }

        #kdPromoHero .kd-promo-content {
            text-align: left;
        }

        #kdPromoHero .kd-badge,
        #kdPromoHero .kd-title-line {
            margin-left: 0;
            margin-right: 0;
        }

        #kdPromoHero .kd-description {
            margin-left: 0;
            margin-right: 0;
        }

        #kdPromoHero .kd-service-tags,
        #kdPromoHero .kd-actions {
            justify-content: flex-start;
        }

        #kdPromoHero .kd-visual {
            min-height: 450px;
            transform: scale(.82);
            transform-origin: center top;
            margin-bottom: -80px;
        }

        #kdPromoHero .kd-phone {
            width: 270px;
            height: 500px;
        }

        #kdPromoHero .kd-screen {
            padding-top: 58px;
        }

        /* mobile: high reach remains attached to phone */
        #kdPromoHero .kd-high-reach {
            left: calc(50% - 165px);
            top: 7px;
            transform: scale(.9);
            transform-origin: left top;
        }

        #kdPromoHero .kd-connection-line {
            left: calc(50% - 70px);
        }

        #kdPromoHero .kd-sms-tile {
            width: 58px;
            height: 58px;
            right: 2%;
            top: 135px;
            font-size: 12px;
        }

        #kdPromoHero .kd-delivery-card {
            min-width: 165px;
            right: -3%;
            bottom: 65px;
            padding: 10px;
            transform: scale(.88);
            transform-origin: right center;
        }
    }

    @media (max-width: 390px) {
        #kdPromoHero .kd-title {
            font-size: 32px;
        }

        #kdPromoHero .kd-visual {
            transform: scale(.80);
            margin-bottom: -95px;
        }
    }

    /* =========================================================
   FINAL PHONE / GIF VISUAL REFINEMENT
   Clean layout - no text clipping inside the mobile
========================================================= */
    #kdPromoHero .kd-phone {
        width: 282px;
        height: 510px;
        padding: 9px;
        border-radius: 44px;
        box-shadow: 0 24px 48px rgba(22, 31, 41, .22), 0 0 0 5px rgba(255, 255, 255, .62);
    }

    #kdPromoHero .kd-screen {
        padding: 58px 16px 18px;
        border-radius: 36px;
        overflow: hidden;
    }

    #kdPromoHero .kd-phone-notch {
        top: 13px;
        width: 94px;
        height: 26px;
        border-radius: 0 0 15px 15px;
    }

    #kdPromoHero .kd-phone-notch:after {
        width: 34px;
        height: 4px;
        top: 7px;
    }

    #kdPromoHero .kd-app-header {
        gap: 8px;
    }

    #kdPromoHero .kd-app-brand {
        gap: 9px;
        min-width: 0;
    }

    #kdPromoHero .kd-app-logo {
        width: 40px;
        height: 40px;
        flex: 0 0 40px;
        border-radius: 11px;
        font-size: 18px;
    }

    #kdPromoHero .kd-app-brand strong {
        font-size: 13px;
        line-height: 1.2;
        white-space: nowrap;
    }

    #kdPromoHero .kd-app-brand small {
        font-size: 8px;
        margin-top: 3px;
    }

    #kdPromoHero .kd-online {
        flex: 0 0 auto;
        padding: 6px 9px;
        font-size: 8px;
    }

    #kdPromoHero .kd-app-divider {
        margin: 13px 0 10px;
    }

    #kdPromoHero .kd-today {
        margin-bottom: 10px;
        font-size: 8px;
    }

    #kdPromoHero .kd-message {
        width: 100%;
        max-width: 100%;
        overflow: visible;
        padding: 13px 12px;
        border-radius: 15px;
    }

    #kdPromoHero .kd-message p {
        width: 100%;
        margin: 0;
        font-size: 10px;
        line-height: 1.55;
        white-space: normal;
        overflow-wrap: anywhere;
        word-break: normal;
    }

    #kdPromoHero .kd-message-light {
        border-bottom-left-radius: 5px;
    }

    #kdPromoHero .kd-msg-emoji {
        margin-right: 3px;
    }

    #kdPromoHero .kd-message small {
        margin-top: 7px;
        font-size: 7px;
    }

    #kdPromoHero .kd-message-red {
        width: 91%;
        margin-top: 15px;
        margin-left: auto;
        padding: 13px 12px;
        border-bottom-right-radius: 5px;
    }

    #kdPromoHero .kd-message-red p {
        font-size: 9px;
        font-weight: 700;
    }

    #kdPromoHero .kd-message-red p span {
        font-size: 11px;
    }

    #kdPromoHero .kd-campaign-card {
        width: 100%;
        margin-top: 36px;
        padding: 11px;
        gap: 9px;
        border-radius: 14px;
    }

    #kdPromoHero .kd-mail {
        width: 36px;
        height: 36px;
        flex: 0 0 36px;
        border-radius: 10px;
        font-size: 15px;
    }

    #kdPromoHero .kd-campaign-copy {
        min-width: 0;
    }

    #kdPromoHero .kd-campaign-copy strong,
    #kdPromoHero .kd-campaign-copy small {
        white-space: nowrap;
    }

    #kdPromoHero .kd-campaign-copy strong {
        font-size: 10px;
    }

    #kdPromoHero .kd-campaign-copy small {
        margin-top: 4px;
        font-size: 7px;
    }

    #kdPromoHero .kd-success {
        width: 23px;
        height: 23px;
        flex: 0 0 23px;
        font-size: 10px;
    }

    #kdPromoHero .kd-phone-footer {
        display: flex;
        justify-content: center;
        gap: 6px;
        margin-top: 34px;
    }

    #kdPromoHero .kd-footer-dot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: #d6dbe0;
    }

    #kdPromoHero .kd-footer-dot.active {
        width: 17px;
        border-radius: 999px;
        background: #b61f29;
    }

    /* Supporting floating elements adjusted to the refined phone */
    #kdPromoHero .kd-high-reach {
        left: calc(50% - 174px);
        top: 12px;
        padding: 11px 13px;
        min-width: 150px;
    }

    #kdPromoHero .kd-high-reach strong {
        font-size: 11px;
    }

    #kdPromoHero .kd-high-reach small {
        font-size: 7px;
    }

    #kdPromoHero .kd-reach-icon {
        width: 39px;
        height: 39px;
        flex: 0 0 39px;
        font-size: 20px;
    }

    #kdPromoHero .kd-connection-line {
        left: calc(50% - 82px);
        top: 62px;
    }

    #kdPromoHero .kd-delivery-card {
        right: -1%;
        bottom: 56px;
    }

    @media (max-width: 650px) {
        #kdPromoHero .kd-visual {
            min-height: 450px;
            transform: scale(.86);
            transform-origin: center top;
            margin-bottom: -65px;
        }

        #kdPromoHero .kd-phone {
            width: 282px;
            height: 510px;
        }

        #kdPromoHero .kd-high-reach {
            left: calc(50% - 172px);
        }

        #kdPromoHero .kd-sms-tile {
            right: 1%;
        }
    }

    @media (max-width: 390px) {
        #kdPromoHero .kd-visual {
            transform: scale(.77);
            margin-bottom: -100px;
        }
    }


    /* =========================================================
   LIVE SMS APP ANIMATION
   Replays continuously like a polished GIF inside the phone
========================================================= */
    #kdPromoHero .kd-phone-live .kd-live-header,
    #kdPromoHero .kd-phone-live .kd-app-divider,
    #kdPromoHero .kd-phone-live .kd-today,
    #kdPromoHero .kd-phone-live .kd-live-offer,
    #kdPromoHero .kd-phone-live .kd-live-sent,
    #kdPromoHero .kd-phone-live .kd-live-campaign,
    #kdPromoHero .kd-phone-live .kd-phone-footer {
        opacity: 0;
        transform: translateY(12px);
        will-change: opacity, transform;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-live-header {
        animation: kdAppIn .45s ease forwards;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-app-divider {
        animation: kdAppIn .35s ease .18s forwards;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-today {
        animation: kdAppIn .35s ease .28s forwards;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-live-offer {
        animation: kdMessageIn .65s cubic-bezier(.22, .8, .28, 1) .65s forwards, kdOfferGlow 2.2s ease 1.4s infinite;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-live-sent {
        animation: kdMessageIn .6s cubic-bezier(.22, .8, .28, 1) 2.15s forwards;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-live-campaign {
        animation: kdMessageIn .65s cubic-bezier(.22, .8, .28, 1) 3.25s forwards;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-phone-footer {
        animation: kdAppIn .45s ease 3.9s forwards;
    }

    #kdPromoHero .kd-online i {
        display: inline-block;
        width: 6px;
        height: 6px;
        margin-right: 5px;
        border-radius: 50%;
        background: #4aa678;
        box-shadow: 0 0 0 0 rgba(74, 166, 120, .5);
        vertical-align: middle;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-online i {
        animation: kdOnlinePulse 1.5s ease 1s infinite;
    }

    #kdPromoHero .kd-live-offer {
        position: relative;
        overflow: hidden;
    }

    #kdPromoHero .kd-live-offer:after {
        content: "";
        position: absolute;
        top: 0;
        left: -45%;
        width: 32%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .78), transparent);
        transform: skewX(-20deg);
        opacity: 0;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-live-offer:after {
        animation: kdShimmer 1.2s ease 1.15s 1;
    }

    #kdPromoHero .kd-live-sent p span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transform: scale(.2) rotate(-30deg);
        opacity: 0;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-live-sent p span {
        animation: kdCheckPop .5s cubic-bezier(.2, 1.5, .4, 1) 2.65s forwards;
    }

    #kdPromoHero .kd-live-campaign {
        position: relative;
    }

    #kdPromoHero .kd-live-progress {
        position: absolute;
        left: 12px;
        right: 12px;
        bottom: 7px;
        height: 3px;
        overflow: hidden;
        border-radius: 999px;
        background: rgba(182, 31, 41, .10);
        opacity: 0;
    }

    #kdPromoHero .kd-live-progress span {
        display: block;
        width: 0;
        height: 100%;
        border-radius: inherit;
        background: linear-gradient(90deg, #b61f29, #db3b43);
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-live-progress {
        animation: kdFadeIn .25s ease 3.5s forwards;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-live-progress span {
        animation: kdProgress 2.4s ease-out 3.55s forwards;
    }

    #kdPromoHero .kd-live-check {
        transform: scale(.2);
        opacity: 0;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-live-check {
        animation: kdCheckPop .5s cubic-bezier(.2, 1.5, .4, 1) 4.15s forwards;
    }

    #kdPromoHero .kd-phone-live.kd-replay .kd-footer-dot.active {
        animation: kdFooterPulse 1.8s ease 4.2s infinite;
    }

    @keyframes kdAppIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes kdMessageIn {
        0% {
            opacity: 0;
            transform: translateY(18px) scale(.96);
        }

        70% {
            opacity: 1;
            transform: translateY(-2px) scale(1.01);
        }

        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    @keyframes kdOfferGlow {

        0%,
        100% {
            box-shadow: 0 8px 22px rgba(30, 42, 55, .06);
        }

        50% {
            box-shadow: 0 10px 25px rgba(182, 31, 41, .10);
        }
    }

    @keyframes kdShimmer {
        0% {
            left: -45%;
            opacity: 0;
        }

        20% {
            opacity: 1;
        }

        100% {
            left: 125%;
            opacity: 0;
        }
    }

    @keyframes kdOnlinePulse {
        0% {
            box-shadow: 0 0 0 0 rgba(74, 166, 120, .5);
        }

        70% {
            box-shadow: 0 0 0 7px rgba(74, 166, 120, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(74, 166, 120, 0);
        }
    }

    @keyframes kdCheckPop {
        0% {
            opacity: 0;
            transform: scale(.15) rotate(-25deg);
        }

        70% {
            opacity: 1;
            transform: scale(1.16) rotate(5deg);
        }

        100% {
            opacity: 1;
            transform: scale(1) rotate(0);
        }
    }

    @keyframes kdFadeIn {
        to {
            opacity: 1;
        }
    }

    @keyframes kdProgress {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    @keyframes kdFooterPulse {

        0%,
        100% {
            transform: scale(1);
            box-shadow: none;
        }

        50% {
            transform: scale(1.08);
            box-shadow: 0 0 0 4px rgba(182, 31, 41, .08);
        }
    }


    /* =========================================================
   FINAL COMPACT SPACING + SMALLER MOBILE ANIMATION
========================================================= */

    /* Reduce excess gap between the top subtitle badge and main heading */
    #kdPromoHero .kd-left {
        padding-top: 0 !important;
    }

    #kdPromoHero .kd-eyebrow {
        margin-bottom: 16px !important;
    }

    #kdPromoHero .kd-title {
        margin-top: 0 !important;
        margin-bottom: 22px !important;
    }

    /* Reduce the overall right-side animation area */
    #kdPromoHero .kd-visual {
        min-height: 440px !important;
        transform: scale(.84);
        transform-origin: center center;
        margin: 0 -55px 0 -55px;
    }

    /* Keep phone and floating cards visually compact */
    #kdPromoHero .kd-phone {
        width: 268px !important;
        height: 486px !important;
    }

    #kdPromoHero .kd-screen {
        padding: 55px 15px 16px !important;
    }

    #kdPromoHero .kd-high-reach {
        transform: scale(.90);
        transform-origin: right center;
    }

    #kdPromoHero .kd-delivery-card {
        transform: scale(.88);
        transform-origin: left center;
    }

    #kdPromoHero .kd-sms-tile {
        transform: scale(.88);
        transform-origin: left center;
    }

    /* Tablet */
    @media (max-width: 1024px) {
        #kdPromoHero .kd-visual {
            transform: scale(.82);
            margin: 0 -40px;
        }
    }

    /* Mobile */
    @media (max-width: 650px) {
        #kdPromoHero .kd-eyebrow {
            margin-bottom: 13px !important;
        }

        #kdPromoHero .kd-title {
            margin-bottom: 18px !important;
        }

        #kdPromoHero .kd-visual {
            min-height: 405px !important;
            transform: scale(.76) !important;
            transform-origin: center top;
            margin: 0 -78px -95px -78px !important;
        }

        #kdPromoHero .kd-phone {
            width: 268px !important;
            height: 486px !important;
        }
    }

    @media (max-width: 390px) {
        #kdPromoHero .kd-visual {
            transform: scale(.69) !important;
            margin: 0 -90px -120px -90px !important;
        }
    }


    /* =========================================================
   FINAL MOBILE-ONLY LAYOUT FIX
   Centered content + smaller heading + single-row cards/buttons
========================================================= */
    @media (max-width: 767px) {

        /* Center all left-side hero content */
        #kdPromoHero .kd-content,
        #kdPromoHero .kd-left {
            text-align: center !important;
            align-items: center !important;
        }

        #kdPromoHero .kd-eyebrow {
            margin-left: auto !important;
            margin-right: auto !important;
            margin-bottom: 12px !important;
        }

        /* Smaller mobile heading */
        #kdPromoHero .kd-title {
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 auto 16px !important;
            font-size: clamp(31px, 8.5vw, 40px) !important;
            line-height: 1.14 !important;
            letter-spacing: -0.035em !important;
            text-align: center !important;
        }

        #kdPromoHero .kd-title span,
        #kdPromoHero .kd-title strong {
            display: inline !important;
        }

        /* Center decorative line and paragraph */
        #kdPromoHero .kd-title-line,
        #kdPromoHero .kd-title-underline {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        #kdPromoHero .kd-description,
        #kdPromoHero .kd-desc,
        #kdPromoHero p {
            text-align: center !important;
        }

        #kdPromoHero .kd-description,
        #kdPromoHero .kd-desc {
            max-width: 520px !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* All four SMS service cards in ONE row */
        #kdPromoHero .kd-tags,
        #kdPromoHero .kd-service-tags,
        #kdPromoHero .kd-pills {
            width: 100% !important;
            display: flex !important;
            flex-wrap: nowrap !important;
            justify-content: center !important;
            align-items: center !important;
            gap: 7px !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        #kdPromoHero .kd-tags>*,
        #kdPromoHero .kd-service-tags>*,
        #kdPromoHero .kd-pills>* {
            flex: 1 1 0 !important;
            min-width: 0 !important;
            white-space: nowrap !important;
            padding: 10px 5px !important;
            font-size: clamp(10px, 2.7vw, 12px) !important;
            text-align: center !important;
        }

        /* Two CTA buttons in ONE row */
        #kdPromoHero .kd-actions,
        #kdPromoHero .kd-buttons,
        #kdPromoHero .kd-cta {
            width: 100% !important;
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            justify-content: center !important;
            align-items: center !important;
            gap: 9px !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        #kdPromoHero .kd-actions>a,
        #kdPromoHero .kd-actions>button,
        #kdPromoHero .kd-buttons>a,
        #kdPromoHero .kd-buttons>button,
        #kdPromoHero .kd-cta>a,
        #kdPromoHero .kd-cta>button {
            flex: 1 1 0 !important;
            min-width: 0 !important;
            min-height: 48px !important;
            padding: 10px 8px !important;
            font-size: clamp(12px, 3.1vw, 14px) !important;
            white-space: nowrap !important;
            justify-content: center !important;
        }

        /* Smaller GIF/mobile animation on mobile only */
        #kdPromoHero .kd-visual {
            min-height: 330px !important;
            transform: scale(.62) !important;
            transform-origin: center top !important;
            margin: 4px -115px -150px -115px !important;
        }

        #kdPromoHero .kd-phone {
            width: 268px !important;
            height: 486px !important;
        }

        /* Keep floating elements proportional */
        #kdPromoHero .kd-high-reach {
            transform: scale(.84) !important;
        }

        #kdPromoHero .kd-delivery-card {
            transform: scale(.80) !important;
        }

        #kdPromoHero .kd-sms-tile {
            transform: scale(.80) !important;
        }
    }

    /* Extra small phones */
    @media (max-width: 420px) {
        #kdPromoHero .kd-title {
            font-size: clamp(29px, 8.2vw, 35px) !important;
            line-height: 1.13 !important;
        }

        #kdPromoHero .kd-tags,
        #kdPromoHero .kd-service-tags,
        #kdPromoHero .kd-pills {
            gap: 5px !important;
        }

        #kdPromoHero .kd-tags>*,
        #kdPromoHero .kd-service-tags>*,
        #kdPromoHero .kd-pills>* {
            padding: 9px 3px !important;
            font-size: 10px !important;
        }

        #kdPromoHero .kd-actions,
        #kdPromoHero .kd-buttons,
        #kdPromoHero .kd-cta {
            gap: 7px !important;
        }

        #kdPromoHero .kd-actions>a,
        #kdPromoHero .kd-actions>button,
        #kdPromoHero .kd-buttons>a,
        #kdPromoHero .kd-buttons>button,
        #kdPromoHero .kd-cta>a,
        #kdPromoHero .kd-cta>button {
            min-height: 45px !important;
            padding: 9px 6px !important;
            font-size: 12px !important;
        }

        #kdPromoHero .kd-visual {
            transform: scale(.57) !important;
            margin: 0 -125px -175px -125px !important;
        }
    }


    /* =========================================================
   FINAL MOBILE UPDATE
   Center subtitle + remove SMS category cards
========================================================= */
    @media (max-width: 767px) {

        /* Center the subtitle badge on mobile */
        #kdPromoHero .kd-eyebrow,
        #kdPromoHero .kd-subheading,
        #kdPromoHero .kd-hero-subheading {
            display: flex !important;
            width: fit-content !important;
            max-width: calc(100% - 30px) !important;
            margin-left: auto !important;
            margin-right: auto !important;
            justify-content: center !important;
            align-items: center !important;
            text-align: center !important;
        }

        /* Remove Bulk SMS / Promotional SMS / Transactional SMS / OTP SMS */
        #kdPromoHero .kd-tags,
        #kdPromoHero .kd-service-tags,
        #kdPromoHero .kd-pills {
            display: none !important;
        }

        /* Keep spacing clean after removing the service cards */
        #kdPromoHero .kd-actions,
        #kdPromoHero .kd-buttons,
        #kdPromoHero .kd-cta {
            margin-top: 18px !important;
        }
    }


    /* =========================================================
   MOBILE SUBHEADING – TRUE CENTER ALIGNMENT FINAL FIX
========================================================= */
    @media (max-width: 767px) {
        #kdPromoHero .kd-left {
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            width: 100% !important;
        }

        #kdPromoHero .kd-eyebrow,
        #kdPromoHero .kd-subheading,
        #kdPromoHero .kd-hero-subheading {
            position: relative !important;
            left: auto !important;
            right: auto !important;
            transform: none !important;
            float: none !important;
            clear: both !important;
            width: auto !important;
            max-width: calc(100% - 32px) !important;
            margin: 0 auto 18px auto !important;
            align-self: center !important;
            justify-content: center !important;
            text-align: center !important;
        }

        /* Center the content inside the badge as well */
        #kdPromoHero .kd-eyebrow *,
        #kdPromoHero .kd-subheading *,
        #kdPromoHero .kd-hero-subheading * {
            text-align: center !important;
        }
    }
</style>


<script>
    // ring width count function 
    const ring = document.querySelector(".kd-progress-ring");

    let ringProgress = 0;

    const ringAnimation = setInterval(() => {
        ringProgress++;

        ring.style.setProperty("--progress", ringProgress);

        if (ringProgress >= 98) {
            clearInterval(ringAnimation);
        }
    }, 30);



    (function() {
        function startLiveSmsAnimation() {
            var phone = document.querySelector('#kdPromoHero .kd-phone-live');
            var count = document.querySelector('#kdPromoHero .kd-live-count');
            if (!phone) return;

            function replay() {
                phone.classList.remove('kd-replay');
                void phone.offsetWidth;
                phone.classList.add('kd-replay');

                if (count) {
                    var start = 0,
                        end = 10000,
                        duration = 2350,
                        started = null;

                    function tick(time) {
                        if (!started) started = time;
                        var progress = Math.min((time - started) / duration, 1);
                        var value = Math.floor(end * (1 - Math.pow(1 - progress, 3)));
                        count.textContent = value.toLocaleString('en-IN');
                        if (progress < 1) requestAnimationFrame(tick);
                    }
                    count.textContent = '0';
                    setTimeout(function() {
                        requestAnimationFrame(tick);
                    }, 3450);
                }
            }

            replay();
            setInterval(replay, 7200);
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', startLiveSmsAnimation);
        } else {
            startLiveSmsAnimation();
        }
    })();
</script>