<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>
    /* =========================================================
 RESET
========================================================= */

    .mcflow-section,
    .mcflow-section * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    .mcflow-section {

        position: relative;

        isolation: isolate;

        width: 100%;

        overflow: hidden;

        padding: 90px 28px;

        font-family: "Poppins", Arial, sans-serif;

        background:

            radial-gradient(circle at 90% 10%,
                rgba(120, 82, 210, .10),
                transparent 27%),

            radial-gradient(circle at 8% 90%,
                rgba(217, 79, 148, .055),
                transparent 25%),

            linear-gradient(135deg,
                #faf8ff 0%,
                #f5f1ff 100%);

    }


    /* =========================================================
 GLOW
========================================================= */

    .mcflow-glow {

        position: absolute;

        pointer-events: none;

        border-radius: 50%;

        filter: blur(100px);

    }


    .mcflow-glow-one {

        width: 350px;

        height: 350px;

        right: -170px;

        top: -160px;

        background:
            rgba(120, 82, 210, .10);

    }


    .mcflow-glow-two {

        width: 300px;

        height: 300px;

        left: -180px;

        bottom: -160px;

        background:
            rgba(218, 78, 149, .05);

    }


    /* =========================================================
 CONTAINER
========================================================= */

    .mcflow-container {

        position: relative;

        z-index: 2;

        width: 100%;

        max-width: 1280px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(0, .82fr) minmax(0, 1.18fr);

        align-items: center;

        gap: 80px;

    }


    /* =========================================================
 LEFT SIDE
========================================================= */

    .mcflow-left {

        max-width: 540px;

    }


    /* =========================================================
 LABEL
========================================================= */

    .mcflow-label {

        width: max-content;

        display: inline-flex;

        align-items: center;

        gap: 8px;

        margin-bottom: 17px;

        padding:
            6px 14px 6px 7px;

        border-radius: 30px;

        background: #ebe5fb;

        color: #6f4dc2;

        font-size: 9px;

        line-height: 1;

        font-weight: 750;

        letter-spacing: 1.4px;

    }


    .mcflow-label span {

        width: 28px;

        height: 28px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background: #ffffff;

        color: #7854d4;

    }


    /* =========================================================
 HEADING
========================================================= */

    .mcflow-left h2 {

        margin:
            0 0 20px;

        padding: 0;

        color: #291d3f;

        font-size:
            clamp(35px,
                3.4vw,
                48px);

        line-height: 1.12;

        font-weight: 730;

        letter-spacing: -1.5px;

    }


    .mcflow-left h2 span {

        display: block;

        margin-top: 5px;

        color: #7955d4;

    }


    /* =========================================================
 PARAGRAPH
========================================================= */

    .mcflow-left>p {

        margin: 0;

        color: #6e6878;

        font-size: 16px;

        line-height: 1.85;

    }


    /* =========================================================
 INFO BOX
========================================================= */

    .mcflow-info {

        display: grid;

        grid-template-columns:
            48px 1fr;

        align-items: center;

        gap: 12px;

        margin-top: 27px;

        padding: 16px;

        border:
            1px solid rgba(116, 80, 200, .11);

        border-radius: 16px;

        background:
            rgba(255, 255, 255, .72);

        box-shadow:
            0 12px 28px rgba(69, 48, 114, .05);

    }


    /* ICON */

    .mcflow-info-icon {

        width: 48px;

        height: 48px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 13px;

        background:

            linear-gradient(135deg,
                #6746ba,
                #8e64e9);

        color: #ffffff;

        font-size: 16px;

    }


    .mcflow-info small,
    .mcflow-info strong {

        display: block;

    }


    .mcflow-info small {

        margin-bottom: 5px;

        color: #9d94a8;

        font-size: 7px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: .8px;

    }


    .mcflow-info strong {

        color: #443357;

        font-size: 12px;

        line-height: 1.5;

        font-weight: 600;

    }


    /* =========================================================
 3 POINTS - ONE ROW
========================================================= */

    .mcflow-mini-points {

        width: 100%;

        display: grid;

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        align-items: start;

        gap: 9px;

        margin-top: 22px;

    }


    /* EACH POINT */

    .mcflow-mini-points>div {

        min-width: 0;

        min-height: 62px;

        display: flex;

        align-items: center;

        gap: 7px;

        padding:
            10px 9px;

        border:
            1px solid rgba(117, 81, 203, .10);

        border-radius: 11px;

        background:
            rgba(255, 255, 255, .70);

        color: #655d70;

        font-size: 8.5px;

        line-height: 1.35;

        font-weight: 550;

    }


    /* CHECK */

    .mcflow-point-check {

        flex:
            0 0 21px;

        width: 21px;

        height: 21px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background: #ebe5fb;

        color: #7854d4;

        font-size: 8px;

    }


    /* =========================================================
 RIGHT PROCESS
========================================================= */

    .mcflow-right {

        position: relative;

        display: grid;

        gap: 15px;

    }


    /* =========================================================
 VERTICAL LINE
========================================================= */

    .mcflow-line {

        position: absolute;

        z-index: 0;

        left: 27px;

        top: 28px;

        bottom: 28px;

        width: 2px;

        overflow: hidden;

        background: #dfd6f1;

    }


    .mcflow-line span {

        position: absolute;

        left: 0;

        top: -120px;

        width: 100%;

        height: 120px;

        background:

            linear-gradient(180deg,
                transparent,
                #7955d4,
                transparent);

        animation:
            mcflowLineMove 3.8s linear infinite;

    }


    @keyframes mcflowLineMove {

        from {
            top: -120px;
        }

        to {
            top: 100%;
        }

    }


    /* =========================================================
 STEP
========================================================= */

    .mcflow-step {

        position: relative;

        z-index: 2;

        display: grid;

        grid-template-columns:
            56px 1fr;

        align-items: center;

        gap: 15px;

    }


    /* =========================================================
 NUMBER
========================================================= */

    .mcflow-number {

        position: relative;

        z-index: 4;

        width: 56px;

        height: 56px;

        display: flex;

        align-items: center;

        justify-content: center;

        border:
            5px solid #f5f1ff;

        border-radius: 50%;

        background:

            linear-gradient(135deg,
                #6747ba,
                #8b62e7);

        color: #ffffff;

        font-size: 11px;

        line-height: 1;

        font-weight: 750;

        box-shadow:
            0 8px 18px rgba(102, 70, 184, .18);

    }


    /* =========================================================
 PROCESS CARD
========================================================= */

    .mcflow-card {

        min-height: 122px;

        display: grid;

        grid-template-columns:
            52px 1fr 30px;

        align-items: center;

        gap: 14px;

        padding:
            17px 18px;

        border:
            1px solid #e9e3f1;

        border-radius: 17px;

        background: #ffffff;

        box-shadow:
            0 12px 30px rgba(65, 46, 106, .055);

        transition:
            transform .35s ease,
            border-color .35s ease,
            box-shadow .35s ease;

    }


    .mcflow-card:hover {

        transform:
            translateX(6px);

        border-color:
            rgba(121, 84, 210, .23);

        box-shadow:
            0 18px 36px rgba(65, 46, 106, .09);

    }


    /* =========================================================
 CARD ICONS
========================================================= */

    .mcflow-card-icon {

        width: 52px;

        height: 52px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 14px;

        background:

            linear-gradient(145deg,
                #eee8ff,
                #f7f4ff);

        color: #7551d0;

        font-size: 17px;

    }


    .mcflow-icon-dark {

        background:

            linear-gradient(145deg,
                #ebe9f0,
                #f8f6fa);

        color: #51455f;

    }


    .mcflow-icon-pink {

        background:

            linear-gradient(145deg,
                #fceaf3,
                #fff5f9);

        color: #d35191;

    }


    .mcflow-icon-gradient {

        background:

            linear-gradient(135deg,
                #6847bd,
                #8d64e9);

        color: #ffffff;

    }


    /* =========================================================
 CARD CONTENT
========================================================= */

    .mcflow-card-content {

        min-width: 0;

    }


    .mcflow-card-content>span {

        display: block;

        margin-bottom: 5px;

        color: #9c91a8;

        font-size: 7px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: .8px;

    }


    .mcflow-card-content h3 {

        margin:
            0 0 6px;

        color: #392a4d;

        font-size: 14px;

        line-height: 1.3;

        font-weight: 650;

    }


    .mcflow-card-content p {

        margin: 0;

        color: #867e8d;

        font-size: 11px;

        line-height: 1.6;

    }


    /* =========================================================
 ALL CARD TICKS
========================================================= */

    .mcflow-status {

        width: 28px;

        height: 28px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background: #eee8ff;

        color: #7954d4;

        font-size: 9px;

        transition:
            background .3s ease,
            color .3s ease,
            transform .3s ease;

    }


    .mcflow-card:hover .mcflow-status {

        transform:
            scale(1.07);

        background: #7955d4;

        color: #ffffff;

    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:1000px) {

        .mcflow-container {

            gap: 45px;

            grid-template-columns:
                minmax(0, .82fr) minmax(0, 1.18fr);

        }


        .mcflow-left>p {

            font-size: 15px;

        }


        .mcflow-mini-points>div {

            padding:
                9px 7px;

            font-size: 7.8px;

        }

    }


    /* =========================================================
 STACK
========================================================= */

    @media(max-width:820px) {

        .mcflow-section {

            padding:
                70px 20px;

        }


        .mcflow-container {

            grid-template-columns: 1fr;

            gap: 45px;

        }


        .mcflow-left {

            max-width: 680px;

            margin: 0 auto;

            text-align: center;

        }


        .mcflow-label {

            margin-left: auto;

            margin-right: auto;

        }


        .mcflow-info {

            max-width: 540px;

            margin-left: auto;

            margin-right: auto;

            text-align: left;

        }


        .mcflow-mini-points {

            max-width: 600px;

            margin-left: auto;

            margin-right: auto;

            text-align: left;

        }


        .mcflow-right {

            max-width: 700px;

            width: 100%;

            margin: 0 auto;

        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        .mcflow-section {

            padding:
                55px 14px;

        }


        .mcflow-left h2 {

            font-size: 29px;

            line-height: 1.15;

        }


        .mcflow-left>p {

            font-size: 14px;

            line-height: 1.8;

        }


        .mcflow-info {

            grid-template-columns:
                43px 1fr;

            padding: 13px;

        }


        .mcflow-info-icon {

            width: 43px;

            height: 43px;

        }


        /* =====================================================
       KEEP ALL 3 POINTS IN SAME ROW
    ===================================================== */

        .mcflow-mini-points {

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 5px;

            margin-top: 18px;

        }


        .mcflow-mini-points>div {

            min-height: 67px;

            flex-direction: column;

            align-items: center;

            justify-content: center;

            gap: 5px;

            padding:
                8px 4px;

            text-align: center;

            font-size: 7.3px;

            line-height: 1.35;

        }


        .mcflow-point-check {

            flex-basis: 20px;

            width: 20px;

            height: 20px;

            font-size: 7px;

        }


        /* PROCESS */

        .mcflow-step {

            grid-template-columns:
                46px 1fr;

            gap: 10px;

        }


        .mcflow-number {

            width: 46px;

            height: 46px;

            border-width: 4px;

            font-size: 9px;

        }


        .mcflow-line {

            left: 22px;

        }


        .mcflow-card {

            min-height: auto;

            grid-template-columns:
                45px 1fr 25px;

            gap: 10px;

            padding:
                14px 12px;

        }


        .mcflow-card-icon {

            width: 45px;

            height: 45px;

            font-size: 14px;

        }


        .mcflow-card-content h3 {

            font-size: 12px;

        }


        .mcflow-card-content p {

            font-size: 10px;

            line-height: 1.55;

        }


        .mcflow-status {

            width: 24px;

            height: 24px;

            font-size: 8px;

        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        .mcflow-left h2 {

            font-size: 26px;

        }


        .mcflow-mini-points>div {

            min-height: 65px;

            font-size: 6.8px;

        }


        .mcflow-step {

            grid-template-columns:
                42px 1fr;

            gap: 8px;

        }


        .mcflow-number {

            width: 42px;

            height: 42px;

        }


        .mcflow-line {

            left: 20px;

        }


        .mcflow-card {

            grid-template-columns:
                40px 1fr 22px;

            gap: 8px;

            padding:
                12px 9px;

        }


        .mcflow-card-icon {

            width: 40px;

            height: 40px;

        }


        .mcflow-status {

            width: 21px;

            height: 21px;

            font-size: 7px;

        }

    }
</style>


<section class="mcflow-section">

    <div class="mcflow-glow mcflow-glow-one"></div>
    <div class="mcflow-glow mcflow-glow-two"></div>

    <div class="mcflow-container">

        <!-- =================================================
             LEFT CONTENT
        ================================================== -->
        <div class="mcflow-left">

            <div class="mcflow-label">

                <span>
                    <i class="fa-solid fa-route"></i>
                </span>

                HOW IT WORKS

            </div>


            <h2>
                From Missed Call
                <span>To Customer Follow-Up</span>
            </h2>


            <p>
                Our missed call service creates a simple automated journey
                between customer interest and your sales team. Once a customer
                gives a missed call, the system captures the number, records
                the lead and initiates the required follow-up action.
            </p>


            <!-- INFO BOX -->
            <div class="mcflow-info">

                <div class="mcflow-info-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

                <div>

                    <small>
                        AUTOMATED PROCESS
                    </small>

                    <strong>
                        Capture, organize and respond to customer interest faster.
                    </strong>

                </div>

            </div>


            <!-- =================================================
                 3 POINTS - ONE ROW
            ================================================== -->
            <div class="mcflow-mini-points">

                <div>

                    <span class="mcflow-point-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    <span>
                        No Manual Lead Entry
                    </span>

                </div>


                <div>

                    <span class="mcflow-point-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    <span>
                        Instant Notifications
                    </span>

                </div>


                <div>

                    <span class="mcflow-point-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    <span>
                        Faster Response Workflow
                    </span>

                </div>

            </div>

        </div>



        <!-- =================================================
             RIGHT PROCESS
        ================================================== -->
        <div class="mcflow-right">

            <div class="mcflow-line">
                <span></span>
            </div>


            <!-- =================================================
                 STEP 01
            ================================================== -->
            <div class="mcflow-step">

                <div class="mcflow-number">
                    01
                </div>


                <div class="mcflow-card">

                    <div class="mcflow-card-icon">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>


                    <div class="mcflow-card-content">

                        <span>
                            CUSTOMER ACTION
                        </span>

                        <h3>
                            Customer Gives A Missed Call
                        </h3>

                        <p>
                            A customer calls your dedicated missed call number
                            and disconnects without needing to speak with an agent.
                        </p>

                    </div>


                    <div class="mcflow-status">
                        <i class="fa-solid fa-check"></i>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 STEP 02
            ================================================== -->
            <div class="mcflow-step">

                <div class="mcflow-number">
                    02
                </div>


                <div class="mcflow-card">

                    <div class="mcflow-card-icon mcflow-icon-dark">
                        <i class="fa-solid fa-tower-broadcast"></i>
                    </div>


                    <div class="mcflow-card-content">

                        <span>
                            SYSTEM DETECTION
                        </span>

                        <h3>
                            Call Is Captured Automatically
                        </h3>

                        <p>
                            The platform instantly detects the incoming number
                            and records the interaction in your campaign data.
                        </p>

                    </div>


                    <div class="mcflow-status">
                        <i class="fa-solid fa-check"></i>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 STEP 03
            ================================================== -->
            <div class="mcflow-step">

                <div class="mcflow-number">
                    03
                </div>


                <div class="mcflow-card">

                    <div class="mcflow-card-icon mcflow-icon-pink">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>


                    <div class="mcflow-card-content">

                        <span>
                            LEAD CREATION
                        </span>

                        <h3>
                            Customer Becomes A Lead
                        </h3>

                        <p>
                            The caller's number can be added to your lead
                            database, CRM or assigned to the appropriate team.
                        </p>

                    </div>


                    <div class="mcflow-status">
                        <i class="fa-solid fa-check"></i>
                    </div>

                </div>

            </div>


            <!-- =================================================
                 STEP 04
            ================================================== -->
            <div class="mcflow-step">

                <div class="mcflow-number">
                    04
                </div>


                <div class="mcflow-card">

                    <div class="mcflow-card-icon mcflow-icon-gradient">
                        <i class="fa-solid fa-headset"></i>
                    </div>


                    <div class="mcflow-card-content">

                        <span>
                            FOLLOW-UP
                        </span>

                        <h3>
                            Automated Action Is Triggered
                        </h3>

                        <p>
                            Trigger a callback, send an SMS confirmation or
                            alert your team so the lead can be followed up quickly.
                        </p>

                    </div>


                    <!-- TICK INSTEAD OF ARROW -->
                    <div class="mcflow-status">
                        <i class="fa-solid fa-check"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>