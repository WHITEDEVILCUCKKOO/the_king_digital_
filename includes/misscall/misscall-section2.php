<!-- =========================================================
 KING DIGITAL - MISSED CALL SERVICE
 SECTION 02 - ABOUT MISSED CALL SERVICE
 LEFT IMAGE + RIGHT CONTENT
 3 CARDS IN ONE ROW
 COMPLETE FINAL CODE
========================================================= -->

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>
    /* =========================================================
 RESET
========================================================= */

    .mcsec2,
    .mcsec2 * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    .mcsec2 {

        position: relative;

        isolation: isolate;

        width: 100%;

        overflow: hidden;

        padding:
            90px 28px;

        font-family:
            "Poppins",
            Arial,
            sans-serif;

        background:

            radial-gradient(circle at 5% 90%,
                rgba(119, 80, 211, .08),
                transparent 26%),

            radial-gradient(circle at 94% 8%,
                rgba(219, 76, 150, .05),
                transparent 25%),

            #ffffff;

    }


    /* =========================================================
 GLOW
========================================================= */

    .mcsec2-glow {

        position: absolute;

        pointer-events: none;

        border-radius: 50%;

        filter:
            blur(100px);

    }


    .mcsec2-glow-one {

        width: 350px;

        height: 350px;

        left: -220px;

        bottom: -180px;

        background:
            rgba(112, 76, 204, .09);

    }


    .mcsec2-glow-two {

        width: 300px;

        height: 300px;

        right: -180px;

        top: -150px;

        background:
            rgba(218, 75, 147, .05);

    }


    /* =========================================================
 CONTAINER
========================================================= */

    .mcsec2-container {

        position: relative;

        z-index: 2;

        width: 100%;

        max-width: 1320px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(0, .92fr) minmax(0, 1.08fr);

        align-items: center;

        gap: 72px;

    }


    /* =========================================================
 LEFT IMAGE AREA
========================================================= */

    .mcsec2-image-wrap {

        position: relative;

        width: 100%;

        min-height: 555px;

        display: flex;

        align-items: center;

        justify-content: center;

    }


    /* DECORATIVE BACK SHAPE */

    .mcsec2-shape {

        position: absolute;

        z-index: 0;

        width: 84%;

        height: 87%;

        left: 2%;

        top: 5%;

        border-radius: 30px;

        transform:
            rotate(-5deg);

        background:

            linear-gradient(145deg,
                #eee8ff,
                #f8f4ff);

    }


    /* =========================================================
 IMAGE BOX
========================================================= */

    .mcsec2-image-box {

        position: relative;

        z-index: 2;

        width: 91%;

        height: 515px;

        overflow: hidden;

        border-radius: 28px;

        background: #eeeaf5;

        box-shadow:

            0 30px 60px rgba(59, 43, 94, .16);

    }


    /* IMAGE */

    .mcsec2-image-box>img {

        width: 100%;

        height: 100%;

        display: block;

        object-fit: cover;

        object-position: center;

    }


    /* IMAGE OVERLAY */

    .mcsec2-image-overlay {

        position: absolute;

        inset: 0;

        pointer-events: none;

        background:

            linear-gradient(180deg,
                rgba(25, 18, 41, .01) 25%,
                rgba(26, 19, 42, .08) 55%,
                rgba(28, 19, 45, .70) 100%);

    }


    /* =========================================================
 IMAGE LABEL
========================================================= */

    .mcsec2-image-label {

        position: absolute;

        z-index: 4;

        left: 20px;

        top: 20px;

        display: flex;

        align-items: center;

        gap: 10px;

        padding:
            10px 13px;

        border:
            1px solid rgba(255, 255, 255, .30);

        border-radius: 14px;

        background:
            rgba(255, 255, 255, .93);

        backdrop-filter:
            blur(12px);

        box-shadow:
            0 12px 26px rgba(29, 20, 44, .10);

    }


    .mcsec2-label-icon {

        flex:
            0 0 40px;

        width: 40px;

        height: 40px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 11px;

        background:

            linear-gradient(135deg,
                #6544ba,
                #8e65e8);

        color: #ffffff;

        font-size: 14px;

    }


    .mcsec2-image-label small,
    .mcsec2-image-label strong {

        display: block;

    }


    .mcsec2-image-label small {

        margin-bottom: 4px;

        color: #9d93a8;

        font-size: 7px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: .8px;

    }


    .mcsec2-image-label strong {

        color: #392b50;

        font-size: 11px;

        line-height: 1.3;

        font-weight: 650;

    }


    /* =========================================================
 BOTTOM GLASS CARD
========================================================= */

    .mcsec2-image-card {

        position: absolute;

        z-index: 4;

        left: 20px;

        right: 20px;

        bottom: 20px;

        display: grid;

        grid-template-columns:
            48px 1fr;

        align-items: center;

        gap: 12px;

        padding: 15px;

        border:
            1px solid rgba(255, 255, 255, .25);

        border-radius: 17px;

        background:
            rgba(255, 255, 255, .95);

        backdrop-filter:
            blur(14px);

        box-shadow:
            0 15px 35px rgba(30, 20, 47, .12);

    }


    .mcsec2-card-icon {

        width: 48px;

        height: 48px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 13px;

        background: #eee8ff;

        color: #7853d2;

        font-size: 17px;

    }


    .mcsec2-image-card small,
    .mcsec2-image-card strong {

        display: block;

    }


    .mcsec2-image-card small {

        margin-bottom: 5px;

        color: #9d93a7;

        font-size: 7px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: .8px;

    }


    .mcsec2-image-card strong {

        color: #433257;

        font-size: 12px;

        line-height: 1.45;

        font-weight: 600;

    }


    /* =========================================================
 RIGHT CONTENT
========================================================= */

    .mcsec2-content {

        max-width: 690px;

    }


    /* =========================================================
 EYEBROW
========================================================= */

    .mcsec2-eyebrow {

        width: max-content;

        display: inline-flex;

        align-items: center;

        gap: 8px;

        margin-bottom: 16px;

        padding:
            6px 14px 6px 7px;

        border:
            1px solid rgba(114, 79, 201, .10);

        border-radius: 30px;

        background: #f2edff;

        color: #7050c5;

        font-size: 9px;

        line-height: 1;

        font-weight: 750;

        letter-spacing: 1.4px;

    }


    .mcsec2-eyebrow span {

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

    .mcsec2-heading {

        margin:
            0 0 22px;

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


    .mcsec2-heading span {

        display: block;

        margin-top: 5px;

        color: #7955d4;

    }


    /* =========================================================
 PARAGRAPHS - BIGGER FONT
========================================================= */

    .mcsec2-main-text {

        max-width: 680px;

        margin: 0;

        color: #6b6574;

        font-size: 16px;

        line-height: 1.85;

        font-weight: 400;

    }


    .mcsec2-second-text {

        margin-top: 12px;

        color: #817987;

    }


    /* =========================================================
 FEATURE GRID - 3 CARDS ONE ROW
========================================================= */

    .mcsec2-features {

        width: 100%;

        display: grid;

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        gap: 12px;

        margin-top: 30px;

    }


    /* =========================================================
 FEATURE CARD
========================================================= */

    .mcsec2-feature {

        position: relative;

        min-width: 0;

        min-height: 215px;

        overflow: hidden;

        padding:
            17px 15px;

        border:
            1px solid #ece7f3;

        border-radius: 16px;

        background:

            linear-gradient(145deg,
                #ffffff,
                #fdfcff);

        box-shadow:

            0 10px 28px rgba(66, 45, 111, .045);

        transition:
            transform .35s ease,
            border-color .35s ease,
            box-shadow .35s ease;

    }


    /* TOP ACCENT */

    .mcsec2-feature:before {

        content: "";

        position: absolute;

        left: 0;

        top: 0;

        width: 100%;

        height: 3px;

        opacity: 0;

        background:

            linear-gradient(90deg,
                #6c49c3,
                #946ae9,
                #d85898);

        transition:
            opacity .3s ease;

    }


    .mcsec2-feature:hover {

        transform:
            translateY(-6px);

        border-color:
            rgba(121, 85, 210, .22);

        box-shadow:

            0 18px 36px rgba(66, 45, 111, .09);

    }


    .mcsec2-feature:hover:before {

        opacity: 1;

    }


    /* =========================================================
 FEATURE TOP
========================================================= */

    .mcsec2-feature-top {

        display: flex;

        align-items: center;

        justify-content: space-between;

        margin-bottom: 18px;

    }


    /* FEATURE ICON */

    .mcsec2-feature-icon {

        width: 47px;

        height: 47px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 13px;

        background:

            linear-gradient(145deg,
                #eee8ff,
                #f7f3ff);

        color: #7651d1;

        font-size: 16px;

    }


    .mcsec2-icon-dark {

        background:

            linear-gradient(145deg,
                #ece9f2,
                #f7f5fa);

        color: #50425f;

    }


    .mcsec2-icon-pink {

        background:

            linear-gradient(145deg,
                #fceaf3,
                #fff5f9);

        color: #d35191;

    }


    /* NUMBER */

    .mcsec2-feature-num {

        color:
            rgba(116, 80, 202, .18);

        font-size: 22px;

        line-height: 1;

        font-weight: 800;

    }


    /* =========================================================
 FEATURE TITLE
========================================================= */

    .mcsec2-feature h3 {

        margin:
            0 0 8px;

        color: #3b2c50;

        font-size: 13px;

        line-height: 1.4;

        font-weight: 650;

    }


    /* =========================================================
 FEATURE PARAGRAPH
========================================================= */

    .mcsec2-feature p {

        margin: 0;

        color: #89818e;

        font-size: 10.5px;

        line-height: 1.7;

    }


    /* =========================================================
 LAPTOP
========================================================= */

    @media(max-width:1150px) {

        .mcsec2-container {

            gap: 45px;

            grid-template-columns:
                minmax(390px, .9fr) minmax(0, 1.1fr);

        }


        .mcsec2-image-wrap {

            min-height: 500px;

        }


        .mcsec2-image-box {

            width: 95%;

            height: 465px;

        }


        .mcsec2-main-text {

            font-size: 15px;

        }


        .mcsec2-feature {

            padding:
                15px 12px;

        }


        .mcsec2-feature h3 {

            font-size: 12px;

        }


        .mcsec2-feature p {

            font-size: 9.5px;

        }

    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:850px) {

        .mcsec2 {

            padding:
                70px 20px;

        }


        .mcsec2-container {

            grid-template-columns: 1fr;

            gap: 45px;

        }


        /* IMAGE FIRST */

        .mcsec2-image-wrap {

            order: 1;

            width: 100%;

            max-width: 600px;

            min-height: 500px;

            margin: 0 auto;

        }


        .mcsec2-image-box {

            width: 90%;

            height: 470px;

        }


        /* CONTENT SECOND */

        .mcsec2-content {

            order: 2;

            width: 100%;

            max-width: 720px;

            margin: 0 auto;

            text-align: center;

        }


        .mcsec2-eyebrow {

            margin-left: auto;

            margin-right: auto;

        }


        .mcsec2-main-text {

            margin-left: auto;

            margin-right: auto;

        }


        .mcsec2-features {

            text-align: left;

        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        .mcsec2 {

            padding:
                55px 14px;

        }


        /* IMAGE */

        .mcsec2-image-wrap {

            min-height: 380px;

        }


        .mcsec2-image-box {

            width: 100%;

            height: 360px;

            border-radius: 21px;

        }


        .mcsec2-shape {

            width: 88%;

            height: 90%;

        }


        .mcsec2-image-label {

            left: 13px;

            top: 13px;

            padding:
                8px 10px;

        }


        .mcsec2-label-icon {

            width: 35px;

            height: 35px;

            flex-basis: 35px;

        }


        .mcsec2-image-card {

            left: 13px;

            right: 13px;

            bottom: 13px;

            padding: 12px;

        }


        .mcsec2-card-icon {

            width: 42px;

            height: 42px;

        }


        /* HEADING */

        .mcsec2-heading {

            font-size: 29px;

            line-height: 1.15;

            letter-spacing: -1px;

        }


        /* PARAGRAPH */

        .mcsec2-main-text {

            font-size: 14px;

            line-height: 1.8;

        }


        /* 3 CARDS -> STACK ON MOBILE */

        .mcsec2-features {

            grid-template-columns: 1fr;

            gap: 10px;

            margin-top: 24px;

        }


        .mcsec2-feature {

            min-height: auto;

            padding: 15px;

        }


        .mcsec2-feature-top {

            margin-bottom: 13px;

        }


        .mcsec2-feature h3 {

            font-size: 13px;

        }


        .mcsec2-feature p {

            font-size: 10.5px;

        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        .mcsec2-heading {

            font-size: 26px;

        }


        .mcsec2-main-text {

            font-size: 13.5px;

        }


        .mcsec2-image-wrap {

            min-height: 350px;

        }


        .mcsec2-image-box {

            height: 330px;

        }

    }
</style>


<section class="mcsec2">

    <div class="mcsec2-glow mcsec2-glow-one"></div>
    <div class="mcsec2-glow mcsec2-glow-two"></div>

    <div class="mcsec2-container">

        <!-- =================================================
             LEFT IMAGE
        ================================================== -->
        <div class="mcsec2-image-wrap">

            <div class="mcsec2-shape"></div>

            <div class="mcsec2-image-box">

                <img
                    src="https://images.unsplash.com/photo-1553775282-20af80779df7?auto=format&fit=crop&w=1200&q=85"
                    alt="Missed Call Service">

                <div class="mcsec2-image-overlay"></div>

                <!-- TOP IMAGE LABEL -->
                <div class="mcsec2-image-label">

                    <span class="mcsec2-label-icon">
                        <i class="fa-solid fa-phone-volume"></i>
                    </span>

                    <div>
                        <small>SMART CONNECTIVITY</small>
                        <strong>Missed Call Service</strong>
                    </div>

                </div>


                <!-- BOTTOM GLASS CARD -->
                <div class="mcsec2-image-card">

                    <div class="mcsec2-card-icon">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>

                    <div>

                        <small>INSTANT LEAD CAPTURE</small>

                        <strong>
                            Turn customer interest into actionable leads.
                        </strong>

                    </div>

                </div>

            </div>

        </div>


        <!-- =================================================
             RIGHT CONTENT
        ================================================== -->
        <div class="mcsec2-content">

            <div class="mcsec2-eyebrow">

                <span>
                    <i class="fa-solid fa-circle-info"></i>
                </span>

                ABOUT THE SERVICE

            </div>


            <h2 class="mcsec2-heading">

                A Smarter Way To

                <span>
                    Capture Customer Interest
                </span>

            </h2>


            <p class="mcsec2-main-text">

                Missed Call Service allows customers to connect with your
                business by simply giving a missed call to a dedicated number.
                The system automatically detects the incoming call and captures
                the caller's mobile number as a potential business lead.

            </p>


            <p class="mcsec2-main-text mcsec2-second-text">

                Once the customer is captured, your business can automatically
                trigger a callback, send an SMS confirmation, notify your sales
                team or connect the lead with your existing workflow. It creates
                a simple and convenient customer journey without lengthy forms
                or complicated steps.

            </p>


            <!-- =================================================
                 3 FEATURE CARDS - SAME ROW
            ================================================== -->
            <div class="mcsec2-features">

                <!-- CARD 01 -->
                <div class="mcsec2-feature">

                    <div class="mcsec2-feature-top">

                        <div class="mcsec2-feature-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <span class="mcsec2-feature-num">
                            01
                        </span>

                    </div>

                    <h3>
                        Simple Customer Action
                    </h3>

                    <p>
                        Customers simply place a missed call to show interest
                        in your product, service or campaign.
                    </p>

                </div>


                <!-- CARD 02 -->
                <div class="mcsec2-feature">

                    <div class="mcsec2-feature-top">

                        <div class="mcsec2-feature-icon mcsec2-icon-dark">
                            <i class="fa-solid fa-user-check"></i>
                        </div>

                        <span class="mcsec2-feature-num">
                            02
                        </span>

                    </div>

                    <h3>
                        Automatic Lead Capture
                    </h3>

                    <p>
                        The caller's mobile number is captured automatically
                        and made available for immediate follow-up.
                    </p>

                </div>


                <!-- CARD 03 -->
                <div class="mcsec2-feature">

                    <div class="mcsec2-feature-top">

                        <div class="mcsec2-feature-icon mcsec2-icon-pink">
                            <i class="fa-solid fa-bolt"></i>
                        </div>

                        <span class="mcsec2-feature-num">
                            03
                        </span>

                    </div>

                    <h3>
                        Instant Follow-Up
                    </h3>

                    <p>
                        Trigger callbacks, SMS alerts or team notifications
                        as soon as customer interest is detected.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>