<style>
    /* =========================================================
   WHATSAPP API PHASE 3 — DEEP INSIGHTS
    ========================================================= */

    .whatsappApi-phase3 {
        width: 100%;
        padding: 80px 20px;
        font-family: 'Segoe UI', Roboto, Tahoma, Geneva, Verdana, sans-serif;
        background: #f7f9fc;
    }


    .whatsappApi-phase3_content {
        display: flex;
        align-items: center;

        gap: 60px;

        width: 100%;
        max-width: 1200px;

        margin: 0 auto;
    }


    /* =========================================================
   INFO SIDE
    ========================================================= */

    .whatsappApi-phase3_content-info {
        flex: 1;
        min-width: 0;
    }


    .whatsappApi-phase3_content-info-badge {
        display: inline-flex;

        padding: 6px 12px;

        margin-bottom: 20px;

        border-radius: 20px;

        background: #e3faed;
    }


    .whatsappApi-phase3_content-info-badge span {
        font-size: 10px;
        font-weight: 800;
        letter-spacing: .6px;

        color: #1fae67;
    }


    .whatsappApi-phase3_content-info-heading {
        font-size: 40px;
        font-weight: 800;
        line-height: 1.15;

        color: #16202e;
    }


    .whatsappApi-phase3_content-info-heading span {
        display: block;

        color: #1fae67;
    }


    .whatsappApi-phase3_content-info-para {
        max-width: 460px;

        margin-top: 20px;

        font-size: 15px;
        line-height: 1.7;

        color: #66738a;
    }


    /* =========================================================
   FEATURES
    ========================================================= */

    .whatsappApi-phase3_content-info-features {
        margin-top: 36px;

        display: flex;
        flex-direction: column;

        gap: 26px;
    }


    .whatsappApi-phase3_content-info-features-item {
        display: flex;
        align-items: flex-start;

        gap: 16px;
    }


    .whatsappApi-phase3_content-info-features-item>span {
        flex-shrink: 0;

        width: 44px;
        height: 44px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 12px;

        background: #fff;

        border: 1px solid #eef1f6;

        box-shadow:
            0 8px 20px rgba(46, 62, 130, .06);
    }


    .whatsappApi-phase3_content-info-features-item>span svg {
        width: 22px !important;
        height: 22px !important;
    }


    .whatsappApi-phase3_content-info-features-item:nth-child(1) svg path {
        stroke: #1fae67 !important;
    }


    .whatsappApi-phase3_content-info-features-item:nth-child(2) svg path,
    .whatsappApi-phase3_content-info-features-item:nth-child(2) svg polyline {
        stroke: #3b82f6 !important;
    }


    .whatsappApi-phase3_content-info-features-item:nth-child(3) svg path {
        fill: #8b5cf6 !important;
    }


    .whatsappApi-phase3_content-info-features-item-content h2 {
        font-size: 15px;
        font-weight: 700;

        color: #16202e;
    }


    .whatsappApi-phase3_content-info-features-item-content p {
        margin-top: 5px;

        font-size: 13px;
        line-height: 1.6;

        color: #8792a3;
    }


    /* =========================================================
   VISUAL SIDE
========================================================= */

    .whatsappApi-phase3_content-visual {
        position: relative;

        flex: 1;
        min-width: 0;
    }


    /* =========================================================
   PERFORMANCE CARD
========================================================= */

    .whatsappApi-phase3_content-visual-card {
        position: relative;

        width: 100%;
        max-width: 420px;

        margin: 0 auto 60px;

        padding: 28px;

        border-radius: 20px;

        background: #ffffff;

        box-shadow:
            0 30px 70px rgba(46, 62, 130, 0.12);
    }


    /* =========================================================
   CARD HEADER
========================================================= */

    .whatsappApi-phase3_content-visual-card-heading {
        display: flex;

        align-items: center;
        justify-content: space-between;

        margin-bottom: 26px;
    }


    .whatsappApi-phase3_content-visual-card-heading h2 {
        margin: 0;

        font-size: 15px;
        font-weight: 800;

        color: #16202e;
    }


    .whatsappApi-phase3_content-visual-card-heading span {
        padding: 4px 10px;

        border-radius: 20px;

        background: #e3faed;

        color: #1fae67;

        font-size: 9px;
        font-weight: 800;

        letter-spacing: 0.5px;
    }


    /* =========================================================
   GRAPH ROW
========================================================= */

    .whatsappApi-phase3_content-visual-card-graph {
        margin-bottom: 18px;
    }


    /* =========================================================
   GRAPH TEXT
========================================================= */

    .whatsappApi-phase3_content-visual-card-graph-text {
        display: flex;

        align-items: center;
        justify-content: space-between;

        margin-bottom: 8px;
    }


    .whatsappApi-phase3_content-visual-card-graph-text p {
        margin: 0;

        font-size: 11px;
        font-weight: 700;

        color: #66738a;
    }


    .whatsappApi-phase3_content-visual-card-graph-text span {
        font-size: 12px;
        font-weight: 800;

        color: #16202e;
    }


    /* Percentage sign */

    .whatsappApi-phase3_content-visual-card-graph-text span::after {
        content: "%";
    }


    /* =========================================================
   GRAPH BAR BACKGROUND
========================================================= */

    .whatsappApi-phase3_content-visual-card-graph-bar {
        position: relative;

        width: 100%;
        height: 6px;

        overflow: hidden;

        border-radius: 999px;

        background: #eef1f6;
    }


    /* =========================================================
   GRAPH BAR FILL
========================================================= */

    .whatsappApi-phase3_content-visual-card-graph-bar::before {
        content: "";

        position: absolute;

        top: 0;
        left: 0;

        width: var(--bar-progress, 0%);
        height: 100%;

        border-radius: inherit;

        background: var(--bar-color, #1fae67);
    }


    /* =========================================================
   DELIVERY
========================================================= */

    .whatsappApi-phase3_content-visual-card-graph:nth-child(1) .whatsappApi-phase3_content-visual-card-graph-text p {
        color: #1fae67;
    }


    .whatsappApi-phase3_content-visual-card-graph:nth-child(1) .whatsappApi-phase3_content-visual-card-graph-bar {
        --bar-color: #1fae67;
    }


    /* =========================================================
   READ RATE
========================================================= */

    .whatsappApi-phase3_content-visual-card-graph:nth-child(2) .whatsappApi-phase3_content-visual-card-graph-text p {
        color: #3b82f6;
    }


    .whatsappApi-phase3_content-visual-card-graph:nth-child(2) .whatsappApi-phase3_content-visual-card-graph-bar {
        --bar-color: #3b82f6;
    }


    /* =========================================================
   CLICKED
========================================================= */

    .whatsappApi-phase3_content-visual-card-graph:nth-child(3) .whatsappApi-phase3_content-visual-card-graph-text p {
        color: #8b5cf6;
    }


    .whatsappApi-phase3_content-visual-card-graph:nth-child(3) .whatsappApi-phase3_content-visual-card-graph-bar {
        --bar-color: #8b5cf6;
    }


    /* =========================================================
   DIVIDER
========================================================= */

    .whatsappApi-phase3_content-visual-card hr {
        margin: 22px 0 20px;

        border: none;

        height: 1px;

        background: #eef1f6;
    }


    /* =========================================================
   EXTRA FEATURES
========================================================= */

    .whatsappApi-phase3_content-visual-features {
        display: flex;

        align-items: stretch;

        gap: 14px;
    }


    .whatsappApi-phase3_content-visual-features-item1,
    .whatsappApi-phase3_content-visual-features-item2 {
        flex: 1;

        padding: 16px;

        border-radius: 14px;

        background: #f7f9fc;
    }


    .whatsappApi-phase3_content-visual-features-item1 strong,
    .whatsappApi-phase3_content-visual-features-item2 strong {
        display: block;

        font-size: 18px;
        font-weight: 800;

        color: #16202e;
    }


    .whatsappApi-phase3_content-visual-features-item2 strong {
        color: #1fae67;
    }


    .whatsappApi-phase3_content-visual-features-item1 small,
    .whatsappApi-phase3_content-visual-features-item2 small {
        display: block;

        margin-top: 4px;

        font-size: 10px;

        color: #8792a3;
    }


    /* =========================================================
   FLOATING AI PREDICTION
========================================================= */

    .whatsappApi-phase3_content-visual-floating {
        position: absolute;

        left: 4%;
        bottom: -46px;

        width: 240px;

        padding: 16px;

        border-radius: 14px;

        background: #14202f;

        box-shadow:
            0 25px 50px rgba(20, 32, 47, 0.3);
    }


    .whatsappApi-phase3_content-visual-floating span {
        display: block;

        margin-bottom: 6px;

        font-size: 9px;
        font-weight: 800;

        letter-spacing: 0.6px;

        color: #3ecf8e;
    }


    .whatsappApi-phase3_content-visual-floating small {
        display: block;

        font-size: 11px;
        line-height: 1.6;

        color: #cfd6e3;
    }


    /* =========================================================
   RESPONSIVE
========================================================= */

    @media (max-width: 992px) {

        .whatsappApi-phase3_content {
            flex-direction: column;

            gap: 70px;
        }


        .whatsappApi-phase3_content-info,
        .whatsappApi-phase3_content-visual {
            width: 100%;
        }

    }


    @media (max-width: 480px) {

        .whatsappApi-phase3_content-visual-card {
            padding: 22px;

            margin-bottom: 0;
        }


        .whatsappApi-phase3_content-visual-floating {
            position: static;

            width: 100%;

            margin-top: 16px;
        }


        .whatsappApi-phase3_content-visual-features {
            flex-direction: column;
        }

    }


    /* =========================================================
   RESPONSIVE
    ========================================================= */

    @media (max-width: 992px) {

        .whatsappApi-phase3_content {
            flex-direction: column;

            gap: 70px;
        }

        .whatsappApi-phase3_content-info,
        .whatsappApi-phase3_content-visual {
            width: 100%;
        }

    }


    @media (max-width: 480px) {

        .whatsappApi-phase3 {
            padding: 56px 16px;
        }

        .whatsappApi-phase3_content-info-heading {
            font-size: 30px;
        }

        .whatsappApi-phase3_content-visual-card {
            padding: 22px;
        }

        .whatsappApi-phase3_content-visual-floating {
            position: static;

            width: 100%;

            margin-top: 16px;
        }

        .whatsappApi-phase3_content-visual-card {
            margin-bottom: 0;
        }

    }
</style>

<section class="whatsappApi-phase3">
    <div class="whatsappApi-phase3_content">
        <div class="whatsappApi-phase3_content-info">
            <div class="whatsappApi-phase3_content-info-badge">
                <span>Phase 3: Deep Insights</span>
            </div>
            <h1 class="whatsappApi-phase3_content-info-heading">Data-Driven
                <span>Service Analysis</span>
            </h1>
            <p class="whatsappApi-phase3_content-info-para">
                Don't just send messages—understand them. Our real-time analytics suite provides deep visibility into every aspect of your WhatsApp communication strategy.
            </p>
            <div class="whatsappApi-phase3_content-info-features">
                <div class="whatsappApi-phase3_content-info-features-item">
                    <span>
                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M21 21H6.2C5.07989 21 4.51984 21 4.09202 20.782C3.71569 20.5903 3.40973 20.2843 3.21799 19.908C3 19.4802 3 18.9201 3 17.8V3M7 10.5V17.5M11.5 5.5V17.5M16 10.5V17.5M20.5 5.5V17.5" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </span>
                    <div class="whatsappApi-phase3_content-info-features-item-content">
                        <h2>Conversation Categorization</h2>
                        <p>Track spending and engagement across Marketing, Utility, and Authentication sessions in real-time.</p>
                    </div>
                </div>
                <div class="whatsappApi-phase3_content-info-features-item">
                    <span>
                        <svg fill="#000000" width="64px" height="64px" viewBox="0 0 24 24" id="up-trend-left-round" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line" transform="matrix(-1, 0, 0, 1, 0, 0)">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path id="primary" d="M21,17l-5.79-5.79a1,1,0,0,0-1.42,0l-2.58,2.58a1,1,0,0,1-1.42,0L3,7" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                <polyline id="primary-2" data-name="primary" points="7 7 3 7 3 11" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline>
                            </g>
                        </svg>
                    </span>
                    <div class="whatsappApi-phase3_content-info-features-item-content">
                        <h2>Funnel Drop-off Analysis</h2>
                        <p>Identify exactly where users leave your WhatsApp Flows to optimize conversion rates.</p>
                    </div>
                </div>
                <div class="whatsappApi-phase3_content-info-features-item">
                    <span>
                        <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M23 12C23 12.3545 22.9832 12.7051 22.9504 13.051C22.3838 12.4841 21.7204 12.014 20.9871 11.6675C20.8122 6.85477 16.8555 3.00683 12 3.00683C7.03321 3.00683 3.00683 7.03321 3.00683 12C3.00683 16.8555 6.85477 20.8122 11.6675 20.9871C12.014 21.7204 12.4841 22.3838 13.051 22.9504C12.7051 22.9832 12.3545 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" fill="#0F0F0F"></path>
                                <path d="M13 11.8812L13.8426 12.3677C13.2847 12.7802 12.7902 13.2737 12.3766 13.8307L11.5174 13.3346C11.3437 13.2343 11.2115 13.0898 11.1267 12.9235C11 12.7274 11 12.4667 11 12.4667V6C11 5.44771 11.4477 5 12 5C12.5523 5 13 5.44772 13 6V11.8812Z" fill="#0F0F0F"></path>
                                <path d="M15.2929 17.7071C15.6834 17.3166 16.3166 17.3166 16.7071 17.7071L17.3482 18.3482L19.2473 16.4491C19.6379 16.0586 20.271 16.0586 20.6615 16.4491C21.0521 16.8397 21.0521 17.4728 20.6615 17.8634L18.1213 20.4036C18.0349 20.49 17.9367 20.5573 17.8318 20.6054C17.4488 20.8294 16.9487 20.7772 16.6203 20.4487L15.2929 19.1213C14.9024 18.7308 14.9024 18.0976 15.2929 17.7071Z" fill="#0F0F0F"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 24C21.3137 24 24 21.3137 24 18C24 14.6863 21.3137 12 18 12C14.6863 12 12 14.6863 12 18C12 21.3137 14.6863 24 18 24ZM18 22.0181C15.7809 22.0181 13.9819 20.2191 13.9819 18C13.9819 15.7809 15.7809 13.9819 18 13.9819C20.2191 13.9819 22.0181 15.7809 22.0181 18C22.0181 20.2191 20.2191 22.0181 18 22.0181Z" fill="#0F0F0F"></path>
                            </g>
                        </svg>
                    </span>
                    <div class="whatsappApi-phase3_content-info-features-item-content">
                        <h2>Agent Efficiency KPIs</h2>
                        <p>Monitor First Response Time (FRT) and Resolution Time (RT) to maintain high service standards.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="whatsappApi-phase3_content-visual">

            <div class="whatsappApi-phase3_content-visual-card">

                <!-- =========================================
             CARD HEADER
        ========================================== -->

                <div class="whatsappApi-phase3_content-visual-card-heading">

                    <h2>Campaign Performance</h2>

                    <span>Real-time</span>

                </div>


                <!-- =========================================
             DELIVERY
        ========================================== -->

                <div class="whatsappApi-phase3_content-visual-card-graph">

                    <div class="whatsappApi-phase3_content-visual-card-graph-text">

                        <p>Delivery</p>

                        <span
                            class="whatsappApi-counter"
                            data-target="98.2">0</span>

                    </div>


                    <div class="whatsappApi-phase3_content-visual-card-graph-bar"></div>

                </div>


                <!-- =========================================
             READ RATE
        ========================================== -->

                <div class="whatsappApi-phase3_content-visual-card-graph">

                    <div class="whatsappApi-phase3_content-visual-card-graph-text">

                        <p>Read Rate</p>

                        <span
                            class="whatsappApi-counter"
                            data-target="84.5">0</span>

                    </div>


                    <div class="whatsappApi-phase3_content-visual-card-graph-bar"></div>

                </div>


                <!-- =========================================
             CLICKED
        ========================================== -->

                <div class="whatsappApi-phase3_content-visual-card-graph">

                    <div class="whatsappApi-phase3_content-visual-card-graph-text">

                        <p>Clicked</p>

                        <span
                            class="whatsappApi-counter"
                            data-target="42.1">0</span>

                    </div>


                    <div class="whatsappApi-phase3_content-visual-card-graph-bar"></div>

                </div>


                <!-- =========================================
             DIVIDER
        ========================================== -->

                <hr>


                <!-- =========================================
             EXTRA STATS
        ========================================== -->

                <div class="whatsappApi-phase3_content-visual-features">

                    <div class="whatsappApi-phase3_content-visual-features-item1">

                        <strong>₹0.80</strong>

                        <small>
                            Avg. Cost Per Lead
                        </small>

                    </div>


                    <div class="whatsappApi-phase3_content-visual-features-item2">

                        <strong>+12%</strong>

                        <small>
                            ROI Lift MoM
                        </small>

                    </div>

                </div>


                <!-- =========================================
             FLOATING AI PREDICTION
        ========================================== -->

                <div class="whatsappApi-phase3_content-visual-floating">

                    <span>AI Prediction</span>

                    <small>
                        Campaign 'Summer_Sale_25' is expected
                        to hit 95% read rate in 2 hours.
                    </small>

                </div>

            </div>

        </div>
    </div>
</section>


<!-- <script>
    document.addEventListener("DOMContentLoaded", () => {

        const counters = document.querySelectorAll(".whatsappApi-counter");

        const observer = new IntersectionObserver((entries, observer) => {

            entries.forEach(entry => {

                if (!entry.isIntersecting) {
                    return;
                }

                const counter = entry.target;

                observer.unobserve(counter);

                const target = Number(counter.dataset.target);

                const duration = 2000;

                let startTime = null;

                // Detect decimal places from target
                const decimalPlaces = target.toString().includes(".") ?
                    target.toString().split(".")[1].length :
                    0;


                function animateCounter(timestamp) {

                    if (startTime === null) {
                        startTime = timestamp;
                    }

                    const elapsed = timestamp - startTime;

                    const progress = Math.min(
                        elapsed / duration,
                        1
                    );

                    // Smooth easing
                    const easeOut =
                        1 - Math.pow(1 - progress, 3);


                    const current = target * easeOut;


                    // Keep the correct number of decimal places
                    counter.textContent =
                        current.toLocaleString(undefined, {
                            minimumFractionDigits: decimalPlaces,
                            maximumFractionDigits: decimalPlaces
                        });


                    if (progress < 1) {

                        requestAnimationFrame(
                            animateCounter
                        );

                    } else {

                        counter.textContent =
                            target.toLocaleString(undefined, {
                                minimumFractionDigits: decimalPlaces,
                                maximumFractionDigits: decimalPlaces
                            });

                    }

                }


                requestAnimationFrame(animateCounter);

            });

        }, {

            threshold: 0.5

        });


        counters.forEach(counter => {
            observer.observe(counter);
        });

    });
</script> -->

<script>
    document.addEventListener("DOMContentLoaded", () => {

        /* =====================================================
           GET PERFORMANCE CARD
        ===================================================== */

        const card = document.querySelector(
            ".whatsappApi-phase3_content-visual-card"
        );


        /*
         * Stop if this card does not exist
         */

        if (!card) {
            return;
        }


        /* =====================================================
           GET ALL GRAPH ROWS
        ===================================================== */

        const rows = card.querySelectorAll(
            ".whatsappApi-phase3_content-visual-card-graph"
        );


        /*
         * Stop if there are no graph rows
         */

        if (!rows.length) {
            return;
        }


        /* =====================================================
           INTERSECTION OBSERVER
        ===================================================== */

        const observer = new IntersectionObserver(
            (entries, observer) => {

                entries.forEach(entry => {

                    /*
                     * Card hasn't entered viewport
                     */

                    if (!entry.isIntersecting) {
                        return;
                    }


                    /*
                     * Stop observing.
                     *
                     * The animation will only happen once.
                     */

                    observer.unobserve(entry.target);


                    /* =================================================
                       ANIMATION SETTINGS
                    ================================================= */

                    const duration = 2000;

                    let startTime = null;


                    /* =================================================
                       ANIMATION FUNCTION
                    ================================================= */

                    function animate(timestamp) {


                        /*
                         * Store initial timestamp
                         */

                        if (startTime === null) {

                            startTime = timestamp;

                        }


                        /*
                         * Calculate elapsed time
                         */

                        const elapsed =
                            timestamp - startTime;


                        /*
                         * Convert elapsed time
                         * into 0 → 1 progress.
                         */

                        const progress = Math.min(
                            elapsed / duration,
                            1
                        );


                        /* =================================================
                           EASING
                        ================================================= */

                        const easedProgress =
                            1 - Math.pow(
                                1 - progress,
                                3
                            );


                        /* =================================================
                           UPDATE EVERY ROW
                        ================================================= */

                        rows.forEach(row => {


                            /*
                             * Find counter
                             */

                            const counter =
                                row.querySelector(
                                    ".whatsappApi-counter"
                                );


                            /*
                             * Find progress bar
                             */

                            const bar =
                                row.querySelector(
                                    ".whatsappApi-phase3_content-visual-card-graph-bar"
                                );


                            /*
                             * Safety check
                             */

                            if (!counter || !bar) {
                                return;
                            }


                            /* =================================================
                               GET TARGET
                            ================================================= */

                            const target =
                                Number(
                                    counter.dataset.target
                                );


                            /* =================================================
                               CALCULATE CURRENT VALUE
                            ================================================= */

                            const current =
                                target * easedProgress;


                            /* =================================================
                               DETECT DECIMAL PLACES
                            ================================================= */

                            const targetString =
                                counter.dataset.target;


                            let decimalPlaces = 0;


                            if (targetString.includes(".")) {

                                decimalPlaces =
                                    targetString
                                    .split(".")[1]
                                    .length;

                            }


                            /* =================================================
                               UPDATE COUNTER
                            ================================================= */

                            counter.textContent =
                                current.toLocaleString(
                                    undefined, {
                                        minimumFractionDigits: decimalPlaces,

                                        maximumFractionDigits: decimalPlaces
                                    }
                                );


                            /* =================================================
                               UPDATE BAR
                            =================================================

                               IMPORTANT:

                               The bar uses the exact same
                               `current` value as the counter.

                               Therefore:

                               Counter = 50%
                               Bar     = 50%

                               Counter = 80%
                               Bar     = 80%

                               No separate animation.
                            */

                            bar.style.setProperty(
                                "--bar-progress",
                                `${current}%`
                            );

                        });


                        /* =================================================
                           CONTINUE ANIMATION
                        ================================================= */

                        if (progress < 1) {

                            requestAnimationFrame(
                                animate
                            );

                        }


                        /* =================================================
                           FINAL VALUES
                        ================================================= */
                        else {

                            rows.forEach(row => {


                                const counter =
                                    row.querySelector(
                                        ".whatsappApi-counter"
                                    );


                                const bar =
                                    row.querySelector(
                                        ".whatsappApi-phase3_content-visual-card-graph-bar"
                                    );


                                if (!counter || !bar) {
                                    return;
                                }


                                /*
                                 * Get exact target
                                 */

                                const target =
                                    Number(
                                        counter.dataset.target
                                    );


                                /*
                                 * Get decimal precision
                                 */

                                const targetString =
                                    counter.dataset.target;


                                let decimalPlaces = 0;


                                if (targetString.includes(".")) {

                                    decimalPlaces =
                                        targetString
                                        .split(".")[1]
                                        .length;

                                }


                                /*
                                 * Force exact final counter
                                 */

                                counter.textContent =
                                    target.toLocaleString(
                                        undefined, {
                                            minimumFractionDigits: decimalPlaces,

                                            maximumFractionDigits: decimalPlaces
                                        }
                                    );


                                /*
                                 * Force exact final bar
                                 */

                                bar.style.setProperty(
                                    "--bar-progress",
                                    `${target}%`
                                );

                            });

                        }

                    }


                    /* =================================================
                       START ANIMATION
                    ================================================= */

                    requestAnimationFrame(
                        animate
                    );

                });

            },


            /* =====================================================
               OBSERVER OPTIONS
            ===================================================== */

            {
                /*
                 * Animation starts when
                 * 50% of the card is visible.
                 */

                threshold: 0.5
            }

        );


        /* =====================================================
           START OBSERVING CARD
        ===================================================== */

        observer.observe(card);

    });
</script>