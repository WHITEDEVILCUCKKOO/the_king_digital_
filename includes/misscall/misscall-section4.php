<!-- =========================================================
 KING DIGITAL - MISSED CALL SERVICE
 SECTION 04 - KEY FEATURES
 PREMIUM DARK PURPLE + LAVENDER THEME
 COMPLETE FINAL CODE
========================================================= -->

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


<style>

    /* =========================================================
 SECTION
========================================================= */

    .mcfeat-section {

        position: relative;

        isolation: isolate;

        width: 100%;

        overflow: hidden;

        padding: 40px 28px;

        font-family:
            "Poppins",
            Arial,
            sans-serif;

        background:

            radial-gradient(circle at 92% 8%,
                rgba(144, 99, 234, .21),
                transparent 27%),

            radial-gradient(circle at 5% 95%,
                rgba(220, 78, 151, .09),
                transparent 28%),

            linear-gradient(135deg,
                #171123 0%,
                #211732 50%,
                #2b1c40 100%);

    }


    /* =========================================================
 BACKGROUND GRID
========================================================= */

    .mcfeat-grid {

        position: absolute;

        inset: 0;

        z-index: 0;

        opacity: .055;

        pointer-events: none;

        background-image:

            linear-gradient(rgba(255, 255, 255, .25) 1px,
                transparent 1px),

            linear-gradient(90deg,
                rgba(255, 255, 255, .25) 1px,
                transparent 1px);

        background-size:
            60px 60px;

    }


    /* =========================================================
 GLOWS
========================================================= */

    .mcfeat-glow {

        position: absolute;

        pointer-events: none;

        border-radius: 50%;

        filter: blur(100px);

    }


    .mcfeat-glow-one {

        width: 390px;

        height: 390px;

        right: -180px;

        top: -170px;

        background:
            rgba(140, 91, 234, .18);

    }


    .mcfeat-glow-two {

        width: 330px;

        height: 330px;

        left: -190px;

        bottom: -180px;

        background:
            rgba(222, 75, 150, .07);

    }


    /* =========================================================
 CONTAINER
========================================================= */

    .mcfeat-container {

        position: relative;

        z-index: 3;

        width: 100%;

        max-width: 1280px;

        margin: 0 auto;

    }


    /* =========================================================
 HEADER
========================================================= */

    .mcfeat-header {

        max-width: 760px;

        margin:
            0 auto 48px;

        text-align: center;

    }


    /* =========================================================
 LABEL
========================================================= */

    .mcfeat-label {

        width: max-content;

        margin:
            0 auto 16px;

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding:
            6px 14px 6px 7px;

        border:
            1px solid rgba(255, 255, 255, .09);

        border-radius: 30px;

        background:
            rgba(255, 255, 255, .07);

        color: #c4adff;

        font-size: 9px;

        line-height: 1;

        font-weight: 750;

        letter-spacing: 1.5px;

        backdrop-filter:
            blur(8px);

    }


    .mcfeat-label span {

        width: 28px;

        height: 28px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background:
            rgba(255, 255, 255, .09);

        color: #cdb9ff;

    }


    /* =========================================================
 HEADING
========================================================= */

    .mcfeat-header h2 {

        margin:
            0 0 16px;

        padding: 0;

        color: #ffffff;

        font-size:
            clamp(35px,
                3.5vw,
                49px);

        line-height: 1.12;

        font-weight: 730;

        letter-spacing: -1.5px;

    }


    .mcfeat-header h2 span {

        display: block;

        margin-top: 5px;

        color: #ac8af4;

    }


    /* =========================================================
 HEADER PARAGRAPH
========================================================= */

    .mcfeat-header p {

        max-width: 680px;

        margin: 0 auto;

        color:
            rgba(255, 255, 255, .65);

        font-size: 15px;

        line-height: 1.8;

    }


    /* =========================================================
 GRID - 3 CARDS PER ROW
========================================================= */

    .mcfeat-grid-wrap {

        display: grid;

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        gap: 18px;

    }


    /* =========================================================
 CARD
========================================================= */

    .mcfeat-card {

        position: relative;

        min-height: 285px;

        overflow: hidden;

        padding:
            23px 22px 20px;

        border:
            1px solid rgba(255, 255, 255, .09);

        border-radius: 20px;

        background:

            linear-gradient(145deg,
                rgba(255, 255, 255, .09),
                rgba(255, 255, 255, .045));

        box-shadow:

            0 18px 40px rgba(5, 3, 10, .17);

        backdrop-filter:
            blur(12px);

        transition:
            transform .35s ease,
            border-color .35s ease,
            background .35s ease,
            box-shadow .35s ease;

    }


    /* ACCENT TOP LINE */

    .mcfeat-card:before {

        content: "";

        position: absolute;

        left: 22px;

        right: 22px;

        top: 0;

        height: 2px;

        opacity: 0;

        background:

            linear-gradient(90deg,
                transparent,
                #a27cf0,
                #df589c,
                transparent);

        transition:
            opacity .35s ease;

    }


    /* SOFT CARD GLOW */

    .mcfeat-card:after {

        content: "";

        position: absolute;

        z-index: -1;

        width: 150px;

        height: 150px;

        right: -70px;

        top: -80px;

        border-radius: 50%;

        background:
            rgba(148, 103, 233, .12);

        filter:
            blur(20px);

        opacity: 0;

        transition:
            opacity .35s ease;

    }


    /* HOVER */

    .mcfeat-card:hover {

        transform:
            translateY(-7px);

        border-color:
            rgba(182, 146, 255, .23);

        background:

            linear-gradient(145deg,
                rgba(255, 255, 255, .115),
                rgba(255, 255, 255, .055));

        box-shadow:

            0 25px 50px rgba(3, 2, 8, .24);

    }


    .mcfeat-card:hover:before,
    .mcfeat-card:hover:after {

        opacity: 1;

    }


    /* =========================================================
 CARD TOP
========================================================= */

    .mcfeat-card-top {

        display: flex;

        align-items: center;

        justify-content: space-between;

        margin-bottom: 22px;

    }


    /* =========================================================
 ICON
========================================================= */

    .mcfeat-icon {

        width: 53px;

        height: 53px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 15px;

        background:

            linear-gradient(135deg,
                #7652cf,
                #9c76ed);

        color: #ffffff;

        font-size: 18px;

        box-shadow:

            0 11px 25px rgba(110, 72, 199, .22);

        transition:
            transform .35s ease;

    }


    .mcfeat-card:hover .mcfeat-icon {

        transform:
            translateY(-3px) scale(1.04);

    }


    /* ICON 2 */

    .mcfeat-icon-two {

        background:

            linear-gradient(135deg,
                #514260,
                #756482);

    }


    /* ICON 3 */

    .mcfeat-icon-three {

        background:

            linear-gradient(135deg,
                #b44880,
                #df6da6);

    }


    /* ICON 4 */

    .mcfeat-icon-four {

        background:

            linear-gradient(135deg,
                #6a4cac,
                #9272dd);

    }


    /* ICON 5 */

    .mcfeat-icon-five {

        background:

            linear-gradient(135deg,
                #52405d,
                #776489);

    }


    /* ICON 6 */

    .mcfeat-icon-six {

        background:

            linear-gradient(135deg,
                #ab4478,
                #d9669c);

    }


    /* =========================================================
 NUMBER
========================================================= */

    .mcfeat-number {

        color:
            rgba(255, 255, 255, .14);

        font-size: 26px;

        line-height: 1;

        font-weight: 800;

    }


    /* =========================================================
 TITLE
========================================================= */

    .mcfeat-card h3 {

        margin:
            0 0 11px;

        color: #ffffff;

        font-size: 17px;

        line-height: 1.4;

        font-weight: 650;

    }


    /* =========================================================
 DESCRIPTION
========================================================= */

    .mcfeat-card>p {

        margin: 0;

        color:
            rgba(255, 255, 255, .60);

        font-size: 13px;

        line-height: 1.75;

    }


    /* =========================================================
 CARD FOOTER
========================================================= */

    .mcfeat-footer {

        position: absolute;

        left: 22px;

        right: 22px;

        bottom: 20px;

        display: flex;

        align-items: center;

        gap: 8px;

        padding-top: 14px;

        border-top:
            1px solid rgba(255, 255, 255, .08);

        color:
            rgba(255, 255, 255, .60);

        font-size: 9.5px;

        line-height: 1.3;

        font-weight: 550;

    }


    .mcfeat-footer i {

        width: 20px;

        height: 20px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 50%;

        background:
            rgba(174, 139, 244, .14);

        color: #c4a9fa;

        font-size: 8px;

    }


    /* =========================================================
 LAPTOP
========================================================= */

    @media(max-width:1050px) {

        .mcfeat-card {

            min-height: 300px;

            padding:
                21px 18px 19px;

        }


        .mcfeat-footer {

            left: 18px;

            right: 18px;

            bottom: 18px;

        }


        .mcfeat-card h3 {

            font-size: 15px;

        }


        .mcfeat-card>p {

            font-size: 12px;

        }

    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:850px) {

        .mcfeat-section {

            padding:
                70px 20px;

        }


        .mcfeat-grid-wrap {

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

        }


        .mcfeat-card {

            min-height: 285px;

        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        .mcfeat-section {

            padding:
                55px 14px;

        }


        .mcfeat-header {

            margin-bottom: 32px;

        }


        .mcfeat-header h2 {

            font-size: 29px;

            line-height: 1.15;

        }


        .mcfeat-header p {

            font-size: 13.5px;

            line-height: 1.75;

        }


        .mcfeat-grid-wrap {

            grid-template-columns: 1fr;

            gap: 12px;

        }


        .mcfeat-card {

            min-height: auto;

            padding:
                19px 17px;

        }


        .mcfeat-card-top {

            margin-bottom: 16px;

        }


        .mcfeat-icon {

            width: 48px;

            height: 48px;

            font-size: 16px;

        }


        .mcfeat-card h3 {

            font-size: 15px;

        }


        .mcfeat-card>p {

            font-size: 12px;

            line-height: 1.7;

        }


        .mcfeat-footer {

            position: relative;

            left: auto;

            right: auto;

            bottom: auto;

            margin-top: 17px;

        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        .mcfeat-header h2 {

            font-size: 26px;

        }

    }
</style>


<section class="mcfeat-section">

    <!-- DECORATION -->
    <div class="mcfeat-grid"></div>
    <div class="mcfeat-glow mcfeat-glow-one"></div>
    <div class="mcfeat-glow mcfeat-glow-two"></div>

    <div class="mcfeat-container">

        <!-- =================================================
             HEADER
        ================================================== -->
        <div class="mcfeat-header">

            <div class="mcfeat-label">

                <span>
                    <i class="fa-solid fa-layer-group"></i>
                </span>

                KEY FEATURES

            </div>


            <h2>
                Everything You Need For
                <span>Smarter Missed Call Campaigns</span>
            </h2>


            <p>
                Manage customer responses, capture leads and automate follow-ups
                with features designed to make missed call campaigns easier to
                operate, monitor and scale.
            </p>

        </div>



        <!-- =================================================
             FEATURE GRID
        ================================================== -->
        <div class="mcfeat-grid-wrap">

            <!-- =================================================
                 CARD 01
            ================================================== -->
            <div class="mcfeat-card">

                <div class="mcfeat-card-top">

                    <div class="mcfeat-icon">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>

                    <span class="mcfeat-number">
                        01
                    </span>

                </div>


                <h3>
                    Dedicated Missed Call Number
                </h3>


                <p>
                    Give customers a dedicated number where they can express
                    interest with a simple missed call.
                </p>


                <div class="mcfeat-footer">

                    <i class="fa-solid fa-circle-check"></i>

                    Easy customer interaction

                </div>

            </div>


            <!-- =================================================
                 CARD 02
            ================================================== -->
            <div class="mcfeat-card">

                <div class="mcfeat-card-top">

                    <div class="mcfeat-icon mcfeat-icon-two">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>

                    <span class="mcfeat-number">
                        02
                    </span>

                </div>


                <h3>
                    Real-Time Lead Capture
                </h3>


                <p>
                    Capture caller numbers automatically and make customer
                    information available for faster follow-up.
                </p>


                <div class="mcfeat-footer">

                    <i class="fa-solid fa-circle-check"></i>

                    No manual lead entry

                </div>

            </div>


            <!-- =================================================
                 CARD 03
            ================================================== -->
            <div class="mcfeat-card">

                <div class="mcfeat-card-top">

                    <div class="mcfeat-icon mcfeat-icon-three">
                        <i class="fa-solid fa-message"></i>
                    </div>

                    <span class="mcfeat-number">
                        03
                    </span>

                </div>


                <h3>
                    Automated SMS Response
                </h3>


                <p>
                    Trigger confirmation messages or campaign responses
                    immediately after a missed call is received.
                </p>


                <div class="mcfeat-footer">

                    <i class="fa-solid fa-circle-check"></i>

                    Instant communication

                </div>

            </div>


            <!-- =================================================
                 CARD 04
            ================================================== -->
            <div class="mcfeat-card">

                <div class="mcfeat-card-top">

                    <div class="mcfeat-icon mcfeat-icon-four">
                        <i class="fa-solid fa-plug"></i>
                    </div>

                    <span class="mcfeat-number">
                        04
                    </span>

                </div>


                <h3>
                    CRM & API Integration
                </h3>


                <p>
                    Connect captured lead data with your CRM or business
                    workflow to keep customer information organized.
                </p>


                <div class="mcfeat-footer">

                    <i class="fa-solid fa-circle-check"></i>

                    Connected workflows

                </div>

            </div>


            <!-- =================================================
                 CARD 05
            ================================================== -->
            <div class="mcfeat-card">

                <div class="mcfeat-card-top">

                    <div class="mcfeat-icon mcfeat-icon-five">
                        <i class="fa-solid fa-chart-column"></i>
                    </div>

                    <span class="mcfeat-number">
                        05
                    </span>

                </div>


                <h3>
                    Campaign Reports
                </h3>


                <p>
                    Review call activity, captured leads and campaign data
                    to understand customer response more clearly.
                </p>


                <div class="mcfeat-footer">

                    <i class="fa-solid fa-circle-check"></i>

                    Better campaign visibility

                </div>

            </div>


            <!-- =================================================
                 CARD 06
            ================================================== -->
            <div class="mcfeat-card">

                <div class="mcfeat-card-top">

                    <div class="mcfeat-icon mcfeat-icon-six">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <span class="mcfeat-number">
                        06
                    </span>

                </div>


                <h3>
                    Smart Lead Follow-Up
                </h3>


                <p>
                    Route captured leads to your team and create a faster
                    response process for interested customers.
                </p>


                <div class="mcfeat-footer">

                    <i class="fa-solid fa-circle-check"></i>

                    Faster customer response

                </div>

            </div>

        </div>

    </div>

</section>