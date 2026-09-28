<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>
    /* =========================================================
 RESET
========================================================= */

    .mcfinalcta-section,
    .mcfinalcta-section * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    .mcfinalcta-section {

        position: relative;
        isolation: isolate;

        width: 100%;
        overflow: hidden;

        padding: 60px 28px;

        font-family: "Poppins", Arial, sans-serif;

        background:

            radial-gradient(circle at 92% 10%,
                rgba(124, 86, 214, .08),
                transparent 26%),

            radial-gradient(circle at 4% 92%,
                rgba(221, 79, 149, .045),
                transparent 25%),

            linear-gradient(135deg,
                #ffffff 0%,
                #fcfaff 100%);

    }


    /* =========================================================
 GLOWS
========================================================= */

    .mcfinalcta-glow {

        position: absolute;

        border-radius: 50%;

        pointer-events: none;

        filter: blur(100px);

    }


    .mcfinalcta-glow.glow-one {

        width: 360px;
        height: 360px;

        right: -190px;
        top: -180px;

        background:
            rgba(122, 84, 210, .08);

    }


    .mcfinalcta-glow.glow-two {

        width: 300px;
        height: 300px;

        left: -170px;
        bottom: -170px;

        background:
            rgba(219, 78, 149, .04);

    }


    /* =========================================================
 CONTAINER
========================================================= */

    .mcfinalcta-container {

        position: relative;
        z-index: 3;

        width: 100%;
        max-width: 1280px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(0, 1fr) minmax(440px, .92fr);

        align-items: center;

        gap: 70px;

    }


    /* =========================================================
 LEFT CONTENT
========================================================= */

    .mcfinalcta-content {

        max-width: 670px;

    }


    /* =========================================================
 LABEL
========================================================= */

    .mcfinalcta-label {

        width: max-content;

        display: inline-flex;

        align-items: center;

        gap: 8px;

        margin-bottom: 16px;

        padding:
            6px 14px 6px 7px;

        border:
            1px solid rgba(116, 80, 201, .10);

        border-radius: 30px;

        background: #f1ecff;

        color: #704ec5;

        font-size: 9px;

        line-height: 1;

        font-weight: 750;

        letter-spacing: 1.3px;

    }


    .mcfinalcta-label>span {

        width: 28px;
        height: 28px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #ffffff;

        color: #7954d4;

    }


    /* =========================================================
 HEADING
========================================================= */

    .mcfinalcta-content h2 {

        margin:
            0 0 19px;

        color: #291d3f;

        font-size:
            clamp(36px,
                3.5vw,
                49px);

        line-height: 1.12;

        font-weight: 730;

        letter-spacing: -1.5px;

    }


    .mcfinalcta-content h2 span {

        display: block;

        margin-top: 5px;

        color: #7955d4;

    }


    /* =========================================================
 MAIN PARAGRAPH
========================================================= */

    .mcfinalcta-description {

        max-width: 650px;

        margin: 0;

        color: #6f6878;

        font-size: 16px;

        line-height: 1.82;

    }


    /* =========================================================
 2 BENEFIT CARDS - SAME ROW
========================================================= */

    .mcfinalcta-points {

        width: 100%;

        display: grid;

        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 12px;

        margin-top: 27px;

    }


    /* =========================================================
 BENEFIT CARD
========================================================= */

    .mcfinalcta-point {

        position: relative;

        min-width: 0;

        display: grid;

        grid-template-columns:
            39px 1fr;

        align-items: start;

        gap: 12px;

        padding:
            16px 15px;

        border:
            1px solid rgba(116, 80, 201, .10);

        border-radius: 15px;

        background:

            linear-gradient(145deg,
                #ffffff,
                #fdfcff);

        box-shadow:

            0 10px 26px rgba(67, 46, 108, .045);

        transition:
            transform .3s ease,
            border-color .3s ease,
            box-shadow .3s ease;

    }


    .mcfinalcta-point:hover {

        transform:
            translateY(-4px);

        border-color:
            rgba(121, 84, 210, .22);

        box-shadow:

            0 15px 31px rgba(67, 46, 108, .08);

    }


    /* =========================================================
 CHECK ICON
========================================================= */

    .mcfinalcta-check {

        width: 39px;
        height: 39px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 11px;

        background: #eee8ff;

        color: #7752d1;

        font-size: 12px;

    }


    .mcfinalcta-check.pink {

        background: #fbeaf3;

        color: #cf4f8e;

    }


    /* =========================================================
 CARD HEADING
========================================================= */

    .mcfinalcta-point strong {

        display: block;

        margin-bottom: 6px;

        color: #443354;

        font-size: 14px;

        line-height: 1.35;

        font-weight: 650;

    }


    /* =========================================================
 CARD PARAGRAPH - BIGGER
========================================================= */

    .mcfinalcta-point small {

        display: block;

        color: #7f7787;

        font-size: 13px;

        line-height: 1.65;

        font-weight: 400;

    }


    /* =========================================================
 BUTTONS
========================================================= */

    .mcfinalcta-buttons {

        display: flex;

        align-items: center;

        flex-wrap: wrap;

        gap: 11px;

        margin-top: 28px;

    }


    /* PRIMARY */

    .mcfinalcta-primary,
    .mcfinalcta-primary:link,
    .mcfinalcta-primary:visited,
    .mcfinalcta-primary:hover,
    .mcfinalcta-primary:focus {

        min-height: 48px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        padding: 0 21px;

        border-radius: 9px;

        background:

            linear-gradient(100deg,
                #6545bd,
                #8a62ec);

        color: #ffffff !important;

        -webkit-text-fill-color: #ffffff !important;

        text-decoration: none !important;

        font-size: 12px;

        line-height: 1;

        font-weight: 650;

        box-shadow:

            0 11px 25px rgba(107, 74, 191, .20);

        transition:
            transform .3s ease,
            box-shadow .3s ease;

    }


    .mcfinalcta-primary:hover {

        transform:
            translateY(-2px);

        box-shadow:

            0 16px 30px rgba(107, 74, 191, .28);

    }


    /* SECONDARY */

    .mcfinalcta-secondary,
    .mcfinalcta-secondary:link,
    .mcfinalcta-secondary:visited,
    .mcfinalcta-secondary:hover,
    .mcfinalcta-secondary:focus {

        min-height: 48px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        padding: 0 20px;

        border:
            1px solid #d8cef4;

        border-radius: 9px;

        background: #ffffff;

        color: #3d2e54 !important;

        -webkit-text-fill-color: #3d2e54 !important;

        text-decoration: none !important;

        font-size: 12px;

        line-height: 1;

        font-weight: 600;

        transition:
            transform .3s ease,
            border-color .3s ease;

    }


    .mcfinalcta-secondary i {
        color: #7954d4;
    }


    .mcfinalcta-secondary:hover {

        transform:
            translateY(-2px);

        border-color: #7954d4;

    }


    /* =========================================================
 RIGHT IMAGE AREA
========================================================= */

    .mcfinalcta-image-area {

        position: relative;

        width: 100%;

        min-height: 500px;

        display: flex;

        align-items: center;
        justify-content: center;

    }


    /* =========================================================
 BACK SHAPES
========================================================= */

    .mcfinalcta-shape {

        position: absolute;

        border-radius: 28px;

    }


    .mcfinalcta-shape.shape-one {

        width: 84%;
        height: 86%;

        left: 3%;
        top: 6%;

        transform:
            rotate(-5deg);

        background:

            linear-gradient(145deg,
                #eee8ff,
                #f8f5ff);

    }


    .mcfinalcta-shape.shape-two {

        width: 68%;
        height: 68%;

        right: 0;
        bottom: 0;

        transform:
            rotate(7deg);

        border:
            1px solid rgba(121, 84, 210, .10);

    }


    /* =========================================================
 IMAGE BOX
========================================================= */

    .mcfinalcta-image-box {

        position: relative;
        z-index: 4;

        width: 91%;
        height: 455px;

        overflow: hidden;

        border-radius: 27px;

        background: #eeeaf4;

        box-shadow:

            0 28px 60px rgba(59, 42, 96, .15);

    }


    .mcfinalcta-image-box>img {

        width: 100%;
        height: 100%;

        display: block;

        object-fit: cover;

        object-position: center;

        transition:
            transform 6s ease;

    }


    .mcfinalcta-image-box:hover>img {

        transform:
            scale(1.04);

    }


    /* =========================================================
 IMAGE OVERLAY
========================================================= */

    .mcfinalcta-overlay {

        position: absolute;

        inset: 0;

        pointer-events: none;

        background:

            linear-gradient(180deg,
                rgba(26, 18, 40, .02) 25%,
                rgba(27, 19, 42, .10) 57%,
                rgba(28, 19, 44, .68) 100%);

    }


    /* =========================================================
 IMAGE TOP BADGE
========================================================= */

    .mcfinalcta-image-badge {

        position: absolute;

        z-index: 5;

        left: 18px;
        top: 18px;

        display: grid;

        grid-template-columns:
            42px 1fr;

        align-items: center;

        gap: 10px;

        padding:
            10px 13px;

        border:
            1px solid rgba(255, 255, 255, .28);

        border-radius: 14px;

        background:
            rgba(255, 255, 255, .93);

        backdrop-filter:
            blur(12px);

        box-shadow:

            0 12px 28px rgba(28, 19, 43, .10);

    }


    .mcfinalcta-image-badge-icon {

        width: 42px;
        height: 42px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 11px;

        background:

            linear-gradient(135deg,
                #6847bd,
                #9067e8);

        color: #ffffff;

        font-size: 14px;

    }


    .mcfinalcta-image-badge small,
    .mcfinalcta-image-badge strong {

        display: block;

    }


    .mcfinalcta-image-badge small {

        margin-bottom: 4px;

        color: #9c93a5;

        font-size: 7px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: .7px;

    }


    .mcfinalcta-image-badge strong {

        color: #402f53;

        font-size: 11px;

        line-height: 1.3;

    }


    /* =========================================================
 BOTTOM IMAGE CARD
========================================================= */

    .mcfinalcta-image-card {

        position: absolute;

        z-index: 5;

        left: 18px;
        right: 18px;
        bottom: 18px;

        display: grid;

        grid-template-columns:
            48px 1fr 28px;

        align-items: center;

        gap: 11px;

        padding: 14px;

        border:
            1px solid rgba(255, 255, 255, .25);

        border-radius: 16px;

        background:
            rgba(255, 255, 255, .94);

        backdrop-filter:
            blur(12px);

        box-shadow:

            0 15px 35px rgba(29, 20, 46, .13);

    }


    .mcfinalcta-card-icon {

        width: 48px;
        height: 48px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 13px;

        background: #eee8ff;

        color: #7752d1;

        font-size: 16px;

    }


    .mcfinalcta-image-card small,
    .mcfinalcta-image-card strong {

        display: block;

    }


    .mcfinalcta-image-card small {

        margin-bottom: 4px;

        color: #a097a6;

        font-size: 7px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: .7px;

    }


    .mcfinalcta-image-card strong {

        color: #433257;

        font-size: 12px;

        line-height: 1.4;

        font-weight: 600;

    }


    .mcfinalcta-card-check {

        width: 28px;
        height: 28px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #e9e2fa;

        color: #7752d1;

        font-size: 9px;

    }


    /* =========================================================
 LAPTOP
========================================================= */

    @media(max-width:1050px) {

        .mcfinalcta-container {

            grid-template-columns:
                minmax(0, 1fr) minmax(390px, .9fr);

            gap: 42px;

        }


        .mcfinalcta-point small {

            font-size: 12px;

        }


        .mcfinalcta-image-area {

            min-height: 450px;

        }


        .mcfinalcta-image-box {

            height: 415px;

        }

    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:820px) {

        .mcfinalcta-section {

            padding:
                50px 20px;

        }


        .mcfinalcta-container {

            grid-template-columns: 1fr;

            gap: 38px;

        }


        .mcfinalcta-content {

            max-width: 700px;

            margin: 0 auto;

            text-align: center;

        }


        .mcfinalcta-label {

            margin-left: auto;
            margin-right: auto;

        }


        .mcfinalcta-points {

            max-width: 650px;

            margin-left: auto;
            margin-right: auto;

            text-align: left;

        }


        .mcfinalcta-buttons {

            justify-content: center;

        }


        .mcfinalcta-image-area {

            max-width: 620px;

            width: 100%;

            min-height: 470px;

            margin: 0 auto;

        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        .mcfinalcta-section {

            padding:
                40px 14px;

        }


        .mcfinalcta-content h2 {

            font-size: 29px;

            line-height: 1.15;

            letter-spacing: -1px;

        }


        .mcfinalcta-description {

            font-size: 14px;

            line-height: 1.75;

        }


        /* TWO CARDS STACK ON MOBILE */

        .mcfinalcta-points {

            grid-template-columns: 1fr;

            gap: 9px;

            margin-top: 22px;

        }


        .mcfinalcta-point {

            grid-template-columns:
                37px 1fr;

            padding: 13px;

        }


        .mcfinalcta-check {

            width: 37px;
            height: 37px;

        }


        .mcfinalcta-point strong {

            font-size: 13px;

        }


        .mcfinalcta-point small {

            font-size: 12px;

            line-height: 1.6;

        }


        /* BUTTONS SAME ROW */

        .mcfinalcta-buttons {

            width: 100%;

            max-width: 360px;

            margin:
                22px auto 0;

            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 7px;

        }


        .mcfinalcta-primary,
        .mcfinalcta-secondary {

            width: 100%;

            min-width: 0;

            min-height: 44px;

            padding: 0 7px;

            font-size: 9.5px;

            white-space: nowrap;

        }


        /* IMAGE */

        .mcfinalcta-image-area {

            min-height: 375px;

        }


        .mcfinalcta-image-box {

            width: 100%;

            height: 350px;

            border-radius: 21px;

        }


        .mcfinalcta-image-badge {

            left: 12px;
            top: 12px;

            padding:
                8px 10px;

        }


        .mcfinalcta-image-badge-icon {

            width: 37px;
            height: 37px;

        }


        .mcfinalcta-image-card {

            left: 12px;
            right: 12px;
            bottom: 12px;

            grid-template-columns:
                42px 1fr 26px;

            padding: 11px;

        }


        .mcfinalcta-card-icon {

            width: 42px;
            height: 42px;

        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        .mcfinalcta-content h2 {

            font-size: 26px;

        }


        .mcfinalcta-primary,
        .mcfinalcta-secondary {

            font-size: 8.8px;

        }


        .mcfinalcta-point small {

            font-size: 11.5px;

        }


        .mcfinalcta-image-area {

            min-height: 340px;

        }


        .mcfinalcta-image-box {

            height: 320px;

        }

    }
</style>


<section class="mcfinalcta-section">

    <div class="mcfinalcta-glow glow-one"></div>
    <div class="mcfinalcta-glow glow-two"></div>

    <div class="mcfinalcta-container">

        <!-- =================================================
             LEFT CONTENT
        ================================================== -->
        <div class="mcfinalcta-content">

            <div class="mcfinalcta-label">

                <span>
                    <i class="fa-solid fa-phone-volume"></i>
                </span>

                GET STARTED WITH MISSED CALL SERVICE

            </div>


            <h2>
                Make Every Customer
                <span>Missed Call Count</span>
            </h2>


            <p class="mcfinalcta-description">
                Give your customers a simple way to connect with your business
                and turn every missed call into a structured lead opportunity.
                Capture caller details automatically, trigger instant responses
                and help your team follow up faster.
            </p>


            <!-- =================================================
                 2 BENEFIT CARDS
            ================================================== -->
            <div class="mcfinalcta-points">

                <!-- CARD 01 -->
                <div class="mcfinalcta-point">

                    <span class="mcfinalcta-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    <div>

                        <strong>
                            Automated Lead Capture
                        </strong>

                        <small>
                            Capture incoming caller information automatically
                            and organize every enquiry for faster sales
                            follow-up.
                        </small>

                    </div>

                </div>


                <!-- CARD 02 -->
                <div class="mcfinalcta-point">

                    <span class="mcfinalcta-check pink">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    <div>

                        <strong>
                            Faster Follow-Up
                        </strong>

                        <small>
                            Route captured leads directly to your team so
                            interested customers can receive a timely response.
                        </small>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 BUTTONS
            ================================================== -->
            <div class="mcfinalcta-buttons">

                <a href="#contact" class="mcfinalcta-primary">

                    Get Started

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


                <a href="#contact" class="mcfinalcta-secondary">

                    <i class="fa-solid fa-phone"></i>

                    Request Demo

                </a>

            </div>

        </div>



        <!-- =================================================
             RIGHT IMAGE
        ================================================== -->
        <div class="mcfinalcta-image-area">

            <div class="mcfinalcta-shape shape-one"></div>
            <div class="mcfinalcta-shape shape-two"></div>

            <div class="mcfinalcta-image-box">

                <img
                    src="https://images.unsplash.com/photo-1551836022-d5d88e9218df7?auto=format&fit=crop&w=1200&q=85"
                    alt="Missed Call Service">

                <div class="mcfinalcta-overlay"></div>


                <!-- TOP BADGE -->
                <div class="mcfinalcta-image-badge">

                    <span class="mcfinalcta-image-badge-icon">
                        <i class="fa-solid fa-phone-volume"></i>
                    </span>

                    <div>

                        <small>
                            MISSED CALL SERVICE
                        </small>

                        <strong>
                            Simple. Fast. Automated.
                        </strong>

                    </div>

                </div>


                <!-- BOTTOM CARD -->
                <div class="mcfinalcta-image-card">

                    <div class="mcfinalcta-card-icon">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>

                    <div>

                        <small>
                            CUSTOMER INTEREST
                        </small>

                        <strong>
                            Capture leads from every missed call
                        </strong>

                    </div>

                    <span class="mcfinalcta-card-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>