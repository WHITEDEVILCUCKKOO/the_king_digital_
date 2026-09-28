<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">



<style>
    /* =========================================================
 RESET
========================================================= */

    .mctimeline-section,
    .mctimeline-section * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    .mctimeline-section {

        position: relative;

        isolation: isolate;

        width: 100%;

        overflow: hidden;

        padding: 62px 28px 65px;

        font-family:
            "Poppins",
            Arial,
            sans-serif;

        background:

            radial-gradient(circle at 90% 8%,
                rgba(123, 84, 211, .08),
                transparent 27%),

            radial-gradient(circle at 5% 92%,
                rgba(232, 112, 56, .045),
                transparent 25%),

            linear-gradient(180deg,
                #ffffff 0%,
                #fdfcff 100%);

    }


    /* =========================================================
 GLOWS
========================================================= */

    .mctimeline-glow {

        position: absolute;

        pointer-events: none;

        border-radius: 50%;

        filter: blur(100px);

    }


    .mctimeline-glow.glow-one {

        width: 330px;

        height: 330px;

        right: -180px;

        top: -160px;

        background:
            rgba(121, 83, 211, .08);

    }


    .mctimeline-glow.glow-two {

        width: 280px;

        height: 280px;

        left: -160px;

        bottom: -150px;

        background:
            rgba(232, 111, 55, .045);

    }


    /* =========================================================
 CONTAINER
========================================================= */

    .mctimeline-container {

        position: relative;

        z-index: 3;

        width: 100%;

        max-width: 1200px;

        margin: 0 auto;

    }


    /* =========================================================
 HEADER
========================================================= */

    .mctimeline-header {

        max-width: 820px;

        margin:
            0 auto 36px;

        text-align: center;

    }


    /* BADGE */

    .mctimeline-badge {

        width: max-content;

        margin:
            0 auto 13px;

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding:
            6px 14px 6px 7px;

        border:
            1px solid rgba(117, 81, 203, .10);

        border-radius: 30px;

        background: #f1ecff;

        color: #704ec5;

        font-size: 9px;

        line-height: 1;

        font-weight: 750;

        letter-spacing: 1.3px;

    }


    .mctimeline-badge span {

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

    .mctimeline-header h2 {

        margin:
            0 0 12px;

        padding: 0;

        color: #241933;

        font-size:
            clamp(34px,
                3.3vw,
                46px);

        line-height: 1.14;

        font-weight: 730;

        letter-spacing: -1.3px;

    }


    /* DESCRIPTION */

    .mctimeline-header p {

        max-width: 720px;

        margin: 0 auto;

        color: #756d7d;

        font-size: 14.5px;

        line-height: 1.75;

    }


    /* =========================================================
 TIMELINE WRAPPER
========================================================= */

    .mctimeline-wrap {

        position: relative;

        width: 100%;

        max-width: 1020px;

        margin: 0 auto;

        padding:
            0 0 15px;

    }


    /* =========================================================
 CENTER LINE
========================================================= */

    .mctimeline-line {

        position: absolute;

        z-index: 0;

        left: 50%;

        top: 140px;

        bottom: 13px;

        width: 2px;

        transform:
            translateX(-50%);

        background: #e7dff4;

        overflow: hidden;

    }


    /* SCROLL GROW LINE */

    .mctimeline-line-fill {

        position: absolute;

        left: 0;

        top: 0;

        width: 100%;

        height: 0%;

        border-radius: 4px;

        background:

            linear-gradient(180deg,
                #8c65e3 0%,
                #7852d1 55%,
                #ef873d 100%);

        transition:
            height .18s linear;

    }


    /* =========================================================
 TOP CARD
========================================================= */

    .mctimeline-top-card {

        position: relative;

        z-index: 3;

        width: 440px;

        min-height: 120px;

        margin:
            0 auto 42px;

        display: grid;

        grid-template-columns:
            54px 1fr;

        align-items: center;

        gap: 14px;

        padding:
            20px;

        border:
            1px solid rgba(119, 84, 210, .26);

        border-radius: 17px;

        background:

            linear-gradient(145deg,
                #ffffff,
                #fbf9ff);

        box-shadow:

            0 13px 32px rgba(74, 52, 119, .07);

    }


    /* TOP ICON */

    .mctimeline-top-icon {

        width: 54px;

        height: 54px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 15px;

        background:

            linear-gradient(135deg,
                #6847bd,
                #9167e9);

        color: #ffffff;

        font-size: 18px;

        box-shadow:

            0 10px 23px rgba(105, 72, 189, .20);

    }


    /* TOP CONTENT */

    .mctimeline-top-content small,
    .mctimeline-top-content strong {

        display: block;

    }


    .mctimeline-top-content small {

        margin-bottom: 3px;

        color: #7955d4;

        font-size: 8px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: .6px;

    }


    .mctimeline-top-content strong {

        margin-bottom: 5px;

        color: #e56e25;

        font-size: 20px;

        line-height: 1.2;

        font-weight: 700;

        letter-spacing: .5px;

    }


    .mctimeline-top-content p {

        margin: 0;

        color: #817987;

        font-size: 11px;

        line-height: 1.55;

    }


    /* =========================================================
 ITEM
========================================================= */

    .mctimeline-item {

        position: relative;

        z-index: 2;

        width: 50%;

        min-height: 145px;

        display: flex;

        align-items: center;

        margin-bottom: 18px;

    }


    /* LEFT */

    .mctimeline-left {

        padding-right: 62px;

        justify-content: flex-end;

    }


    /* RIGHT */

    .mctimeline-right {

        margin-left: 50%;

        padding-left: 62px;

        justify-content: flex-start;

    }


    /* =========================================================
 CARD
========================================================= */

    .mctimeline-card {

        width: 100%;

        max-width: 380px;

        min-height: 118px;

        display: grid;

        grid-template-columns:
            55px 1fr;

        align-items: center;

        gap: 14px;

        padding:
            17px;

        border:
            1px solid rgba(119, 84, 210, .20);

        border-radius: 16px;

        background: #ffffff;

        box-shadow:

            0 12px 30px rgba(70, 49, 116, .055);

        transition:
            transform .35s ease,
            box-shadow .35s ease,
            border-color .35s ease;

    }


    .mctimeline-card:hover {

        transform:
            translateY(-4px);

        border-color:
            rgba(118, 82, 208, .35);

        box-shadow:

            0 18px 38px rgba(70, 49, 116, .10);

    }


    /* =========================================================
 ICON
========================================================= */

    .mctimeline-card-icon {

        width: 55px;

        height: 55px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 15px;

        background: #eee8ff;

        color: #7853d3;

        font-size: 19px;

    }


    .mctimeline-card-icon.purple {

        background: #eee8ff;

        color: #6848bd;

    }


    .mctimeline-card-icon.orange {

        background: #fff0e6;

        color: #ea7228;

    }


    .mctimeline-card-icon.rose {

        background: #fceaf3;

        color: #cf4f8d;

    }


    .mctimeline-card-icon.dark {

        background: #efedf2;

        color: #51435f;

    }


    .mctimeline-card-icon.lavender {

        background: #efe9ff;

        color: #855ccb;

    }


    /* =========================================================
 CARD CONTENT
========================================================= */

    .mctimeline-card-content span {

        display: block;

        margin-bottom: 4px;

        color: #9e94a7;

        font-size: 7px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: .7px;

    }


    .mctimeline-card-content h3 {

        margin:
            0 0 6px;

        color: #3c2c4f;

        font-size: 14px;

        line-height: 1.3;

        font-weight: 650;

    }


    .mctimeline-card-content p {

        margin: 0;

        color: #857d8b;

        font-size: 10.5px;

        line-height: 1.55;

    }


    /* =========================================================
 CONNECTOR
========================================================= */

    .mctimeline-connector {

        position: absolute;

        z-index: 1;

        top: 50%;

        width: 62px;

        height: 2px;

        background:
            #dcd2ee;

    }


    .mctimeline-left .mctimeline-connector {

        right: 0;

    }


    .mctimeline-right .mctimeline-connector {

        left: 0;

    }


    /* =========================================================
 NODES
========================================================= */

    .mctimeline-node {

        position: absolute;

        z-index: 4;

        top: 50%;

        width: 15px;

        height: 15px;

        transform:
            translateY(-50%);

        border:
            3px solid #ffffff;

        border-radius: 50%;

        background: #815ade;

        box-shadow:

            0 0 0 1px #815ade;

        transition:
            transform .35s ease,
            box-shadow .35s ease;

    }


    .mctimeline-left .mctimeline-node {

        right: -7.5px;

    }


    .mctimeline-right .mctimeline-node {

        left: -7.5px;

    }


    /* NODE ACTIVE */

    .mctimeline-item.is-visible .mctimeline-node {

        box-shadow:

            0 0 0 1px #815ade,
            0 0 0 7px rgba(129, 90, 222, .10);

    }


    /* =========================================================
 END DOT
========================================================= */

    .mctimeline-end-dot {

        position: absolute;

        z-index: 4;

        left: 50%;

        bottom: 4px;

        width: 11px;

        height: 11px;

        transform:
            translateX(-50%);

        border-radius: 50%;

        background: #815ade;

        box-shadow:

            0 0 0 6px rgba(129, 90, 222, .08);

    }


    /* =========================================================
 SCROLL REVEAL DEFAULT
========================================================= */

    .mctimeline-reveal {

        opacity: 0;

        filter: blur(3px);

        transition:

            opacity .65s ease,
            transform .65s cubic-bezier(.2, .75, .25, 1),
            filter .65s ease;

    }


    /* TOP */

    .mctimeline-top-card.mctimeline-reveal {

        transform:
            translateY(25px) scale(.97);

    }


    /* LEFT */

    .mctimeline-left.mctimeline-reveal {

        transform:
            translateX(-45px);

    }


    /* RIGHT */

    .mctimeline-right.mctimeline-reveal {

        transform:
            translateX(45px);

    }


    /* VISIBLE */

    .mctimeline-reveal.is-visible {

        opacity: 1;

        filter: blur(0);

        transform:
            translate(0, 0) scale(1);

    }


    /* =========================================================
 CARD ICON ANIMATION
========================================================= */

    .mctimeline-item.is-visible .mctimeline-card-icon {

        animation:
            mctimelineIconPop .55s ease .20s both;

    }


    @keyframes mctimelineIconPop {

        0% {

            transform:
                scale(.75) rotate(-8deg);

            opacity: .4;

        }

        70% {

            transform:
                scale(1.08) rotate(2deg);

        }

        100% {

            transform:
                scale(1) rotate(0deg);

            opacity: 1;

        }

    }


    /* =========================================================
 DESKTOP SMALL
========================================================= */

    @media(max-width:1000px) {

        .mctimeline-wrap {

            max-width: 900px;

        }


        .mctimeline-left {

            padding-right: 48px;

        }


        .mctimeline-right {

            padding-left: 48px;

        }


        .mctimeline-connector {

            width: 48px;

        }

    }


    /* =========================================================
 MOBILE / TABLET
========================================================= */

    @media(max-width:760px) {

        .mctimeline-section {

            padding:
                48px 18px;

        }


        .mctimeline-header {

            margin-bottom: 30px;

        }


        .mctimeline-header h2 {

            font-size: 30px;

        }


        .mctimeline-header p {

            font-size: 13px;

        }


        /* TIMELINE LEFT SIDE */

        .mctimeline-line {

            left: 18px;

            top: 138px;

        }


        .mctimeline-top-card {

            width:
                calc(100% - 38px);

            margin:
                0 0 35px 38px;

        }


        .mctimeline-item {

            width: 100%;

            min-height: auto;

            margin:
                0 0 16px;

            padding:
                0 0 0 58px;

            justify-content: flex-start;

        }


        .mctimeline-right {

            margin-left: 0;

        }


        .mctimeline-card {

            max-width: none;

        }


        .mctimeline-connector {

            left: 18px !important;

            right: auto !important;

            width: 40px;

        }


        .mctimeline-left .mctimeline-node,
        .mctimeline-right .mctimeline-node {

            left: 10.5px;

            right: auto;

        }


        .mctimeline-end-dot {

            left: 18px;

        }


        /* ALL ENTER FROM RIGHT */

        .mctimeline-left.mctimeline-reveal,
        .mctimeline-right.mctimeline-reveal {

            transform:
                translateX(30px);

        }


        .mctimeline-reveal.is-visible {

            transform:
                translateX(0) scale(1);

        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:520px) {

        .mctimeline-section {

            padding:
                40px 14px;

        }


        .mctimeline-header h2 {

            font-size: 27px;

            line-height: 1.16;

        }


        .mctimeline-header p {

            font-size: 12.5px;

            line-height: 1.7;

        }


        .mctimeline-top-card {

            grid-template-columns:
                47px 1fr;

            gap: 11px;

            padding: 15px;

        }


        .mctimeline-top-icon {

            width: 47px;

            height: 47px;

            font-size: 15px;

        }


        .mctimeline-top-content strong {

            font-size: 17px;

        }


        .mctimeline-top-content p {

            font-size: 9.5px;

        }


        .mctimeline-card {

            grid-template-columns:
                48px 1fr;

            gap: 11px;

            min-height: auto;

            padding: 14px;

        }


        .mctimeline-card-icon {

            width: 48px;

            height: 48px;

            font-size: 16px;

        }


        .mctimeline-card-content h3 {

            font-size: 13px;

        }


        .mctimeline-card-content p {

            font-size: 9.8px;

        }

    }
</style>


<script>
    (function() {

        const sections =
            document.querySelectorAll('.mctimeline-section');


        sections.forEach(function(section) {

            const revealItems =
                section.querySelectorAll('.mctimeline-reveal');

            const timelineWrap =
                section.querySelector('.mctimeline-wrap');

            const lineFill =
                section.querySelector('.mctimeline-line-fill');


            /* =====================================================
               REVEAL ITEMS ON SCROLL
            ====================================================== */

            const observer =
                new IntersectionObserver(

                    function(entries) {

                        entries.forEach(function(entry) {

                            if (entry.isIntersecting) {

                                entry.target
                                    .classList
                                    .add('is-visible');

                                observer.unobserve(
                                    entry.target
                                );

                            }

                        });

                    },

                    {
                        threshold: 0.24,
                        rootMargin: '0px 0px -8% 0px'
                    }

                );


            revealItems.forEach(

                function(item, index) {

                    item.style.transitionDelay =
                        (index * 70) + 'ms';

                    observer.observe(item);

                }

            );


            /* =====================================================
               VERTICAL LINE FILL WITH SCROLL
            ====================================================== */

            function updateTimeline() {

                if (
                    !timelineWrap ||
                    !lineFill
                ) {
                    return;
                }


                const rect =
                    timelineWrap.getBoundingClientRect();

                const viewportHeight =
                    window.innerHeight;


                /*
                  Animation begins as timeline
                  enters lower area of screen.
                */

                const start =
                    viewportHeight * .78;

                const totalDistance =
                    rect.height +
                    viewportHeight * .30;

                const travelled =
                    start - rect.top;

                let progress =
                    travelled /
                    totalDistance;


                progress =
                    Math.max(
                        0,
                        Math.min(
                            1,
                            progress
                        )
                    );


                lineFill.style.height =
                    (progress * 100) + '%';

            }


            updateTimeline();


            window.addEventListener(
                'scroll',
                updateTimeline, {
                    passive: true
                }
            );


            window.addEventListener(
                'resize',
                updateTimeline
            );

        });

    })();
</script>


<section class="mctimeline-section">

    <!-- DECORATION -->
    <div class="mctimeline-glow glow-one"></div>
    <div class="mctimeline-glow glow-two"></div>

    <div class="mctimeline-container">

        <!-- =====================================================
             HEADER
        ====================================================== -->
        <div class="mctimeline-header">

            <div class="mctimeline-badge">
                <span>
                    <i class="fa-solid fa-phone-volume"></i>
                </span>
                MISSED CALL WORKFLOW
            </div>

            <h2>
                What Can You Do With a Missed Call Number Service?
            </h2>

            <p>
                A missed call number gives customers a simple way to connect
                with your business while helping you capture leads, trigger
                automated responses and organize follow-up actions in real time.
            </p>

        </div>


        <!-- =====================================================
             TIMELINE
        ====================================================== -->
        <div class="mctimeline-wrap">

            <!-- CENTER LINE -->
            <div class="mctimeline-line">

                <div class="mctimeline-line-fill"></div>

            </div>


            <!-- =================================================
                 TOP NUMBER CARD
            ================================================== -->
            <div class="mctimeline-top-card mctimeline-reveal">

                <div class="mctimeline-top-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="mctimeline-top-content">

                    <small>
                        YOUR MISSED CALL NUMBER
                    </small>

                    <strong>
                        XXXXX-XXXXX
                    </strong>

                    <p>
                        Promote your dedicated missed call number across
                        digital campaigns, print media, websites and ads.
                    </p>

                </div>

            </div>


            <!-- =================================================
                 ITEM 01 LEFT
            ================================================== -->
            <div class="mctimeline-item mctimeline-left mctimeline-reveal">

                <div class="mctimeline-card">

                    <div class="mctimeline-card-icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>

                    <div class="mctimeline-card-content">

                        <span>STEP 01</span>

                        <h3>
                            Missed Call Initiation
                        </h3>

                        <p>
                            A customer places a missed call on your dedicated
                            number to show interest in your business.
                        </p>

                    </div>

                </div>

                <div class="mctimeline-connector"></div>

                <span class="mctimeline-node"></span>

            </div>


            <!-- =================================================
                 ITEM 02 RIGHT
            ================================================== -->
            <div class="mctimeline-item mctimeline-right mctimeline-reveal">

                <span class="mctimeline-node"></span>

                <div class="mctimeline-connector"></div>

                <div class="mctimeline-card">

                    <div class="mctimeline-card-icon purple">
                        <i class="fa-solid fa-database"></i>
                    </div>

                    <div class="mctimeline-card-content">

                        <span>STEP 02</span>

                        <h3>
                            Real-Time Lead Capture
                        </h3>

                        <p>
                            The caller's number is captured automatically
                            and can be added to your lead database or CRM.
                        </p>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 ITEM 03 LEFT
            ================================================== -->
            <div class="mctimeline-item mctimeline-left mctimeline-reveal">

                <div class="mctimeline-card">

                    <div class="mctimeline-card-icon orange">
                        <i class="fa-solid fa-comment-sms"></i>
                    </div>

                    <div class="mctimeline-card-content">

                        <span>STEP 03</span>

                        <h3>
                            Instant SMS Response
                        </h3>

                        <p>
                            Send an automated confirmation, offer message
                            or other response immediately after the missed call.
                        </p>

                    </div>

                </div>

                <div class="mctimeline-connector"></div>

                <span class="mctimeline-node"></span>

            </div>


            <!-- =================================================
                 ITEM 04 RIGHT
            ================================================== -->
            <div class="mctimeline-item mctimeline-right mctimeline-reveal">

                <span class="mctimeline-node"></span>

                <div class="mctimeline-connector"></div>

                <div class="mctimeline-card">

                    <div class="mctimeline-card-icon rose">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>

                    <div class="mctimeline-card-content">

                        <span>STEP 04</span>

                        <h3>
                            Team Notification Alert
                        </h3>

                        <p>
                            Notify your team about the new enquiry so the
                            customer can be contacted without unnecessary delay.
                        </p>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 ITEM 05 LEFT
            ================================================== -->
            <div class="mctimeline-item mctimeline-left mctimeline-reveal">

                <div class="mctimeline-card">

                    <div class="mctimeline-card-icon dark">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <div class="mctimeline-card-content">

                        <span>STEP 05</span>

                        <h3>
                            Agent Callback
                        </h3>

                        <p>
                            Your sales or support team can call the captured
                            lead and continue the conversation personally.
                        </p>

                    </div>

                </div>

                <div class="mctimeline-connector"></div>

                <span class="mctimeline-node"></span>

            </div>


            <!-- =================================================
                 ITEM 06 RIGHT
            ================================================== -->
            <div class="mctimeline-item mctimeline-right mctimeline-reveal">

                <span class="mctimeline-node"></span>

                <div class="mctimeline-connector"></div>

                <div class="mctimeline-card">

                    <div class="mctimeline-card-icon lavender">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>

                    <div class="mctimeline-card-content">

                        <span>STEP 06</span>

                        <h3>
                            Campaign Tracking
                        </h3>

                        <p>
                            Monitor incoming missed calls, captured leads
                            and campaign activity from one organized workflow.
                        </p>

                    </div>

                </div>

            </div>


            <!-- BOTTOM DOT -->
            <div class="mctimeline-end-dot"></div>

        </div>

    </div>

</section>