<style>
/* =====================================================
   WHITE LABEL AGGREGATOR HERO - FINAL SMOOTH VERSION
===================================================== */

.kd-aggregator-hero,
.kd-aggregator-hero * {
    box-sizing: border-box;
}

.kd-aggregator-hero {
    position: relative;
    width: 100%;
    overflow: hidden;
    padding: 62px 24px 55px;
    font-family: "Segoe UI", Arial, sans-serif;

    background:
        radial-gradient(circle at 10% 85%,
            rgba(92, 88, 255, 0.14) 0%,
            rgba(92, 88, 255, 0.05) 25%,
            transparent 48%),

        radial-gradient(circle at 90% 10%,
            rgba(10, 92, 255, 0.15) 0%,
            rgba(10, 92, 255, 0.05) 30%,
            transparent 55%),

        linear-gradient(
            135deg,
            #ffffff 0%,
            #f8faff 35%,
            #eef3ff 70%,
            #e5edff 100%
        );
}


/* =====================================================
   BACKGROUND DECORATIONS
===================================================== */

.kd-ag-grid {
    position: absolute;
    left: -25px;
    bottom: -25px;
    width: 300px;
    height: 260px;

    background-image:
        radial-gradient(
            circle,
            rgba(79, 70, 229, .40) 1.5px,
            transparent 1.5px
        );

    background-size: 25px 25px;

    -webkit-mask-image:
        radial-gradient(
            ellipse at bottom left,
            #000 0%,
            #000 25%,
            transparent 73%
        );

    mask-image:
        radial-gradient(
            ellipse at bottom left,
            #000 0%,
            #000 25%,
            transparent 73%
        );

    pointer-events: none;
    animation: kd-gridMove 9s ease-in-out infinite;
}

@keyframes kd-gridMove {
    0%, 100% {
        background-position: 0 0;
    }

    50% {
        background-position: 10px -10px;
    }
}


.kd-ag-circle {
    position: absolute;
    width: 350px;
    height: 350px;
    border-radius: 50%;
    border: 2px dashed rgba(10, 92, 255, .12);
    right: -110px;
    top: -120px;
    animation: kd-circleSpin 30s linear infinite;
}

.kd-ag-circle::before {
    content: "";
    position: absolute;
    width: 270px;
    height: 270px;
    border-radius: 50%;
    border: 1px solid rgba(10, 92, 255, .10);
    top: 38px;
    left: 38px;
}

@keyframes kd-circleSpin {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}


/* =====================================================
   MAIN CONTAINER
===================================================== */

.kd-ag-container {
    position: relative;
    z-index: 3;
    max-width: 1240px;
    margin: auto;

    display: grid;
    grid-template-columns: 1.08fr .92fr;
    align-items: center;
    gap: 75px;
}


/* =====================================================
   LEFT CONTENT
===================================================== */

.kd-ag-content {
    max-width: 690px;
}

.kd-ag-badge {
    width: max-content;
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 8px 15px;
    border-radius: 100px;

    color: #0A5CFF;
    background: rgba(10, 92, 255, .08);
    border: 1px solid rgba(10, 92, 255, .12);

    font-size: 12px;
    font-weight: 700;
    letter-spacing: .4px;
    margin-bottom: 20px;
}

.kd-ag-badge-icon {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #0A5CFF;
    box-shadow: 0 0 0 5px rgba(10, 92, 255, .10);
}


.kd-ag-title {
    margin: 0;
    max-width: 680px;
    color: #101828;

    font-size: clamp(42px, 5vw, 68px);
    line-height: 1.04;
    letter-spacing: -2.8px;
    font-weight: 800;
}

.kd-ag-title span {
    background: linear-gradient(
        90deg,
        #0A5CFF 0%,
        #5548e8 55%,
        #243b8e 100%
    );

    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}


.kd-ag-description {
    max-width: 620px;
    margin: 24px 0 0;
    font-size: 16px;
    line-height: 1.75;
    color: #5e6879;
}

.kd-ag-description strong {
    color: #16233c;
    font-weight: 650;
}


/* =====================================================
   FEATURES
===================================================== */

.kd-ag-features {
    margin-top: 26px;
    display: flex;
    flex-wrap: wrap;
    gap: 11px;
}

.kd-ag-feature {
    display: flex;
    align-items: center;
    gap: 8px;

    background: rgba(255, 255, 255, .75);
    border: 1px solid rgba(10, 92, 255, .11);
    border-radius: 100px;

    padding: 8px 13px;
    font-size: 12px;
    font-weight: 650;
    color: #40506a;

    backdrop-filter: blur(8px);
}

.kd-ag-check {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 17px;
    height: 17px;
    border-radius: 50%;

    background: #e9f1ff;
    color: #0A5CFF;

    font-size: 10px;
    font-weight: 900;
}


/* =====================================================
   BUTTONS
===================================================== */

.kd-ag-actions {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 14px;
    margin-top: 28px;
}

.kd-ag-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;

    min-height: 50px;
    padding: 0 23px;

    text-decoration: none;
    color: #ffffff;

    background: linear-gradient(
        135deg,
        #0A5CFF 0%,
        #25395f 100%
    );

    border-radius: 12px;
    font-size: 14px;
    font-weight: 700;

    box-shadow: 0 10px 28px rgba(10, 92, 255, .22);

    transition:
        transform .25s ease,
        box-shadow .25s ease;
}

.kd-ag-primary:hover {
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 16px 35px rgba(10, 92, 255, .30);
}

.kd-ag-primary svg {
    width: 18px;
    height: 18px;
    transition: transform .25s ease;
}

.kd-ag-primary:hover svg {
    transform: translateX(3px);
}

.kd-ag-secondary {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    padding: 12px 8px;
    font-size: 13px;
    font-weight: 650;

    color: #283a58;
    text-decoration: none;
}

.kd-ag-secondary svg {
    width: 17px;
    color: #0A5CFF;
}


/* =====================================================
   RIGHT VISUAL
===================================================== */

.kd-ag-visual {
    position: relative;
    min-height: 445px;

    display: flex;
    align-items: center;
    justify-content: center;
}

.kd-ag-glow {
    position: absolute;
    width: 340px;
    height: 340px;
    border-radius: 50%;

    background: radial-gradient(
        circle,
        rgba(73, 119, 255, .18),
        rgba(73, 119, 255, .03) 55%,
        transparent 70%
    );

    filter: blur(10px);
    pointer-events: none;
}


/* =====================================================
   DASHBOARD PANEL
===================================================== */

.kd-ag-panel {
    position: relative;
    z-index: 5;

    width: 100%;
    max-width: 470px;

    background: linear-gradient(
        150deg,
        rgba(255, 255, 255, .96),
        rgba(248, 251, 255, .91)
    );

    border: 1px solid rgba(65, 96, 165, .13);
    border-radius: 25px;
    padding: 22px;

    box-shadow:
        0 30px 70px rgba(38, 66, 130, .13),
        0 8px 20px rgba(35, 58, 110, .06);

    backdrop-filter: blur(14px);

    animation: kd-panelFloat 6s ease-in-out infinite;
}

@keyframes kd-panelFloat {
    0%, 100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-6px);
    }
}


/* =====================================================
   PANEL HEADER
===================================================== */

.kd-ag-panel-head {
    display: flex;
    align-items: center;
    justify-content: space-between;

    padding-bottom: 18px;
    border-bottom: 1px solid #edf0f6;
}

.kd-ag-panel-profile {
    display: flex;
    align-items: center;
    gap: 12px;
}

.kd-ag-panel-logo {
    width: 43px;
    height: 43px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 13px;

    background: linear-gradient(
        135deg,
        #0A5CFF,
        #263b63
    );

    color: #ffffff;
    box-shadow: 0 8px 20px rgba(10, 92, 255, .17);
}

.kd-ag-panel-logo svg {
    width: 22px;
    height: 22px;
}

.kd-ag-panel-profile h4 {
    margin: 0 0 4px;
    color: #17243b;
    font-size: 14px;
    font-weight: 750;
}

.kd-ag-status {
    display: flex;
    align-items: center;
    gap: 6px;

    color: #27a65a;
    font-size: 10px;
    font-weight: 600;
}

.kd-ag-status-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #26bf64;

    animation: kd-statusPulse 2.2s ease-in-out infinite;
}

@keyframes kd-statusPulse {
    0%, 100% {
        box-shadow: 0 0 0 4px rgba(38, 191, 100, .12);
    }

    50% {
        box-shadow: 0 0 0 8px rgba(38, 191, 100, .03);
    }
}

.kd-ag-live {
    padding: 5px 9px;
    border-radius: 100px;

    background: #edf5ff;
    color: #0A5CFF;

    font-size: 9px;
    font-weight: 750;
}


/* =====================================================
   CHANNEL GRID
===================================================== */

.kd-ag-channel-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 12px;
    margin-top: 19px;
}

.kd-ag-channel {
    min-height: 91px;
    padding: 15px;

    border-radius: 15px;
    border: 1px solid rgba(26, 61, 131, .06);

    transition:
        transform .25s ease,
        box-shadow .25s ease;
}

.kd-ag-channel:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rgba(29, 55, 109, .08);
}

.kd-ag-channel-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.kd-ag-channel-icon {
    width: 31px;
    height: 31px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 9px;
}

.kd-ag-channel-icon svg {
    width: 16px;
    height: 16px;
}

.kd-ag-channel small {
    font-size: 9px;
    color: #6c7789;
}

.kd-ag-channel h5 {
    margin: 10px 0 0;
    color: #1e2b41;
    font-size: 12px;
    font-weight: 700;
}


/* CHANNEL COLORS */

.kd-sms {
    background: #edf5ff;
}

.kd-sms .kd-ag-channel-icon {
    color: #0A5CFF;
    background: #dbeaff;
}

.kd-whatsapp {
    background: #effaf3;
}

.kd-whatsapp .kd-ag-channel-icon {
    color: #20a55b;
    background: #dff5e8;
}

.kd-voice {
    background: #fff7ed;
}

.kd-voice .kd-ag-channel-icon {
    color: #e26925;
    background: #ffeadc;
}

.kd-rcs {
    background: #f7f1ff;
}

.kd-rcs .kd-ag-channel-icon {
    color: #9254d7;
    background: #ece0fb;
}


/* =====================================================
   TOTAL MESSAGES
===================================================== */

.kd-ag-performance {
    margin-top: 13px;
    padding: 15px 15px 12px;

    border-radius: 16px;

    background: linear-gradient(
        135deg,
        #f7faff,
        #edf3ff
    );

    border: 1px solid rgba(10, 92, 255, .07);
}

.kd-ag-performance-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.kd-ag-performance-top span:first-child {
    color: #556277;
    font-size: 10px;
    font-weight: 600;
}

.kd-ag-performance-top span:last-child {
    color: #27a65a;
    font-size: 10px;
    font-weight: 700;
}

.kd-ag-number {
    margin-top: 5px;
    color: #17233a;

    font-size: 30px;
    line-height: 1;
    font-weight: 800;
}

.kd-ag-number small {
    font-size: 12px;
    color: #748094;
    font-weight: 500;
}


/* =====================================================
   SUPER SMOOTH SLOW LIVE GRAPH
===================================================== */

.kd-ag-chart {
    height: 58px;
    margin-top: 15px;

    display: flex;
    align-items: flex-end;
    gap: 6px;

    overflow: hidden;
}

.kd-ag-bar {
    flex: 1;
    min-width: 4px;

    border-radius: 5px 5px 2px 2px;

    background: linear-gradient(
        180deg,
        #0A5CFF 0%,
        #7aa5ff 100%
    );

    transform-origin: bottom center;

    /* SMOOTH & SLOW */
    animation-name: kdSmoothGraph;
    animation-duration: 3.8s;
    animation-timing-function: ease-in-out;
    animation-iteration-count: infinite;

    will-change: transform;
}


/* BASE HEIGHTS */

.kd-ag-bar:nth-child(1) {
    height: 38%;
    animation-delay: -0.2s;
}

.kd-ag-bar:nth-child(2) {
    height: 55%;
    animation-delay: -1.4s;
}

.kd-ag-bar:nth-child(3) {
    height: 43%;
    animation-delay: -2.3s;
}

.kd-ag-bar:nth-child(4) {
    height: 67%;
    animation-delay: -0.8s;
}

.kd-ag-bar:nth-child(5) {
    height: 53%;
    animation-delay: -2.8s;
}

.kd-ag-bar:nth-child(6) {
    height: 80%;
    animation-delay: -1.7s;
}

.kd-ag-bar:nth-child(7) {
    height: 64%;
    animation-delay: -3.2s;
}

.kd-ag-bar:nth-child(8) {
    height: 88%;
    animation-delay: -1.1s;
}

.kd-ag-bar:nth-child(9) {
    height: 71%;
    animation-delay: -2.5s;
}

.kd-ag-bar:nth-child(10) {
    height: 94%;
    animation-delay: -0.5s;
}


/* 
   CONTINUOUS SMOOTH LOOP
   Same start/end value = no jump when loop restarts.
*/

@keyframes kdSmoothGraph {

    0% {
        transform: scaleY(.72);
    }

    25% {
        transform: scaleY(.92);
    }

    50% {
        transform: scaleY(.64);
    }

    75% {
        transform: scaleY(1);
    }

    100% {
        transform: scaleY(.72);
    }
}


/* =====================================================
   FLOATING CARDS
===================================================== */

.kd-ag-float-card {
    position: absolute;
    z-index: 7;

    display: flex;
    align-items: center;
    gap: 10px;

    padding: 11px 13px;

    background: rgba(255, 255, 255, .95);

    border: 1px solid rgba(44, 81, 153, .10);
    border-radius: 13px;

    box-shadow: 0 15px 35px rgba(44, 64, 112, .12);

    backdrop-filter: blur(10px);
}

.kd-ag-float-one {
        left: -91px;
    top: 62px;


    animation: kd-floatOne 5.5s ease-in-out infinite;
}

.kd-ag-float-two {
        right: -118px;
    bottom: 83px;

    animation: kd-floatTwo 6s ease-in-out infinite;
}

@keyframes kd-floatOne {
    0%, 100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-7px);
    }
}

@keyframes kd-floatTwo {
    0%, 100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(7px);
    }
}

.kd-ag-mini-icon {
    width: 31px;
    height: 31px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 9px;

    background: #e9f2ff;
    color: #0A5CFF;
}

.kd-ag-mini-icon svg {
    width: 15px;
    height: 15px;
}

.kd-ag-float-card strong {
    display: block;

    color: #202e46;

    font-size: 10px;
    font-weight: 750;
}

.kd-ag-float-card span {
    display: block;

    margin-top: 2px;

    color: #7a8495;

    font-size: 8px;
}


/* =====================================================
   TABLET
===================================================== */

@media (max-width: 1024px) {

    .kd-aggregator-hero {
        padding: 55px 28px 50px;
    }

    .kd-ag-container {
        grid-template-columns: 1fr;
        gap: 45px;
    }

    .kd-ag-content {
        max-width: 760px;
        text-align: center;
        margin: auto;
    }

    .kd-ag-badge {
        margin-left: auto;
        margin-right: auto;
    }

    .kd-ag-title {
        margin-left: auto;
        margin-right: auto;
    }

    .kd-ag-description {
        margin-left: auto;
        margin-right: auto;
    }

    .kd-ag-features,
    .kd-ag-actions {
        justify-content: center;
    }

    .kd-ag-visual {
        max-width: 600px;
        width: 100%;
        margin: auto;
    }
}


/* =====================================================
   MOBILE
===================================================== */

@media (max-width: 640px) {

    .kd-aggregator-hero {
        padding: 45px 18px 40px;
    }

    .kd-ag-container {
        gap: 38px;
    }

    .kd-ag-title {
        font-size: 38px;
        line-height: 1.08;
        letter-spacing: -1.7px;
    }

    .kd-ag-description {
        font-size: 14px;
        line-height: 1.7;
        margin-top: 18px;
    }

    .kd-ag-features {
        gap: 8px;
        margin-top: 20px;
    }

    .kd-ag-feature {
        padding: 7px 10px;
        font-size: 10px;
    }

    .kd-ag-actions {
        flex-direction: column;
        align-items: stretch;
        margin-top: 23px;
    }

    .kd-ag-primary {
        width: 100%;
    }

    .kd-ag-secondary {
        justify-content: center;
    }

    .kd-ag-visual {
        min-height: auto;
        margin-top: 0;
    }

    .kd-ag-panel {
        padding: 16px;
        border-radius: 20px;
    }

    .kd-ag-channel {
        min-height: 82px;
        padding: 12px;
    }

    .kd-ag-float-card {
        display: none;
    }

    .kd-ag-circle {
        width: 270px;
        height: 270px;
    }

    .kd-ag-chart {
        height: 52px;
    }
}
</style>


<section class="kd-aggregator-hero">

    <div class="kd-ag-grid"></div>
    <div class="kd-ag-circle"></div>


    <div class="kd-ag-container">


        <!-- LEFT CONTENT -->

        <div class="kd-ag-content">

            <div class="kd-ag-badge">
                <span class="kd-ag-badge-icon"></span>
                WHITE-LABEL AGGREGATOR PLATFORM
            </div>


            <h1 class="kd-ag-title">
                Build Your Own
                <span>Communication Platform.</span>
            </h1>


            <p class="kd-ag-description">

                Launch and scale your communication business with a

                <strong>
                    powerful white-label aggregator platform
                </strong>.

                Manage SMS, RCS, WhatsApp and Voice from one centralized
                system — with your own branding, infrastructure and complete
                business control.

            </p>


            <div class="kd-ag-features">

                <div class="kd-ag-feature">
                    <span class="kd-ag-check">✓</span>
                    Your Brand
                </div>

                <div class="kd-ag-feature">
                    <span class="kd-ag-check">✓</span>
                    Multi-Channel
                </div>

                <div class="kd-ag-feature">
                    <span class="kd-ag-check">✓</span>
                    API Ready
                </div>

                <div class="kd-ag-feature">
                    <span class="kd-ag-check">✓</span>
                    Full Data Control
                </div>

            </div>


            <div class="kd-ag-actions">

                <a href="#"
                   class="kd-ag-primary">

                    Request a Demo

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">

                        <path d="M5 12h14"></path>
                        <path d="m13 6 6 6-6 6"></path>

                    </svg>

                </a>


                <a href="#"
                   class="kd-ag-secondary">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2">

                        <path d="M12 22a10 10 0 1 0 0-20 10 10 0 0 0 0 20Z"></path>

                        <path d="m10 8 6 4-6 4V8Z"></path>

                    </svg>

                    Explore Platform

                </a>

            </div>

        </div>



        <!-- RIGHT DASHBOARD -->

        <div class="kd-ag-visual">

            <div class="kd-ag-glow"></div>


            <!-- API CARD -->

            <div class="kd-ag-float-card kd-ag-float-one">

                <div class="kd-ag-mini-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2">

                        <path d="M20 6 9 17l-5-5"></path>

                    </svg>

                </div>


                <div>
                    <strong>API Connected</strong>
                    <span>All routes operational</span>
                </div>

            </div>



            <!-- DASHBOARD -->

            <div class="kd-ag-panel">


                <div class="kd-ag-panel-head">

                    <div class="kd-ag-panel-profile">


                        <div class="kd-ag-panel-logo">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2">

                                <ellipse
                                    cx="12"
                                    cy="5"
                                    rx="8"
                                    ry="3">
                                </ellipse>

                                <path
                                    d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5">
                                </path>

                                <path
                                    d="M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6">
                                </path>

                            </svg>

                        </div>


                        <div>

                            <h4>
                                Aggregator Dashboard
                            </h4>

                            <div class="kd-ag-status">

                                <span class="kd-ag-status-dot"></span>

                                All systems active

                            </div>

                        </div>

                    </div>


                    <span class="kd-ag-live">
                        LIVE
                    </span>

                </div>



                <!-- CHANNELS -->

                <div class="kd-ag-channel-grid">


                    <!-- SMS -->

                    <div class="kd-ag-channel kd-sms">

                        <div class="kd-ag-channel-top">

                            <div class="kd-ag-channel-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2">

                                    <path
                                        d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4Z">
                                    </path>

                                </svg>

                            </div>

                            <small>Active</small>

                        </div>

                        <h5>SMS Gateway</h5>

                    </div>



                    <!-- WHATSAPP -->

                    <div class="kd-ag-channel kd-whatsapp">

                        <div class="kd-ag-channel-top">

                            <div class="kd-ag-channel-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2">

                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6A8.38 8.38 0 0 1 12.5 3h.5a8.48 8.48 0 0 1 8 8Z">
                                    </path>

                                </svg>

                            </div>

                            <small>Active</small>

                        </div>

                        <h5>WhatsApp API</h5>

                    </div>



                    <!-- VOICE -->

                    <div class="kd-ag-channel kd-voice">

                        <div class="kd-ag-channel-top">

                            <div class="kd-ag-channel-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2">

                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.63a2 2 0 0 1-.45 2.11L8 9.73a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.85.29 1.73.5 2.63.62A2 2 0 0 1 22 16.92Z">
                                    </path>

                                </svg>

                            </div>

                            <small>Active</small>

                        </div>

                        <h5>Voice Platform</h5>

                    </div>



                    <!-- RCS -->

                    <div class="kd-ag-channel kd-rcs">

                        <div class="kd-ag-channel-top">

                            <div class="kd-ag-channel-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2">

                                    <path d="M8 10h8"></path>
                                    <path d="M8 14h4"></path>

                                    <rect
                                        width="18"
                                        height="16"
                                        x="3"
                                        y="4"
                                        rx="3">
                                    </rect>

                                </svg>

                            </div>

                            <small>Active</small>

                        </div>

                        <h5>RCS Messaging</h5>

                    </div>

                </div>



                <!-- TOTAL MESSAGES -->

                <div class="kd-ag-performance">


                    <div class="kd-ag-performance-top">

                        <span>
                            Total Messages
                        </span>

                        <span>
                            +18.4%
                        </span>

                    </div>


                    <div class="kd-ag-number">

                        5.9M

                        <small>
                            / monthly
                        </small>

                    </div>



                    <!-- SMOOTH LIVE GRAPH -->

                    <div class="kd-ag-chart">

                        <span class="kd-ag-bar"></span>
                        <span class="kd-ag-bar"></span>
                        <span class="kd-ag-bar"></span>
                        <span class="kd-ag-bar"></span>
                        <span class="kd-ag-bar"></span>
                        <span class="kd-ag-bar"></span>
                        <span class="kd-ag-bar"></span>
                        <span class="kd-ag-bar"></span>
                        <span class="kd-ag-bar"></span>
                        <span class="kd-ag-bar"></span>

                    </div>


                </div>

            </div>



            <!-- SECURITY CARD -->

            <div class="kd-ag-float-card kd-ag-float-two">

                <div class="kd-ag-mini-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2">

                        <path
                            d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10">
                        </path>

                        <path
                            d="m9 12 2 2 4-4">
                        </path>

                    </svg>

                </div>


                <div>

                    <strong>
                        Your Data. Your Control.
                    </strong>

                    <span>
                        Secure infrastructure
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>