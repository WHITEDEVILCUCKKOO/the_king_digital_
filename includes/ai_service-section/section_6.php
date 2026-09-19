<!-- =========================================================
 KING DIGITAL — AI VIDEO
 WHY AI VIDEO
 DARK NAVY + ORANGE THEME
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
    /* =========================================================
 RESET
========================================================= */

    #kd-ai-benefits,
    #kd-ai-benefits * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    #kd-ai-benefits {

        --navy: #060F3E;
        --navy2: #0B2148;
        --navy3: #10335F;

        --orange: #F47B20;
        --orange2: #FF9145;
        --orange3: #FFAD70;

        --text: #626C7B;
        --border: #E2E6EB;

        position: relative;

        width: 100%;

        overflow: hidden;

        padding: 55px 50px 58px;

         

        background:
            radial-gradient(circle at 92% 12%,
                rgba(244, 123, 32, .075),
                transparent 25%),
            radial-gradient(circle at 8% 92%,
                rgba(6, 15, 62, .045),
                transparent 24%),
            linear-gradient(135deg,
                #F7F8FA 0%,
                #FFFFFF 52%,
                #F5F6F8 100%);
    }


    /* =========================================================
 DOT BACKGROUND
========================================================= */

    #kd-ai-benefits .kdabf-dots-bg {

        position: absolute;

        width: 110px;
        height: 110px;

        left: 25px;
        top: 25px;

        opacity: .28;

        pointer-events: none;

        background-image:
            radial-gradient(rgba(244, 123, 32, .48) 1.2px,
                transparent 1.2px);

        background-size: 15px 15px;

        animation:
            kdabfDotsMove 7s ease-in-out infinite;
    }


    @keyframes kdabfDotsMove {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(12px);
        }

    }


    /* =========================================================
 DECORATIVE CIRCLE 01
========================================================= */

    #kd-ai-benefits .kdabf-circle-one {

        position: absolute;

        width: 280px;
        height: 280px;

        right: -145px;
        top: -80px;

        border-radius: 50%;

        border:
            1px solid rgba(244, 123, 32, .10);

        box-shadow:
            0 0 0 40px rgba(244, 123, 32, .022),
            0 0 0 80px rgba(6, 15, 62, .014);

        pointer-events: none;

        animation:
            kdabfCircleMove 9s ease-in-out infinite;
    }


    @keyframes kdabfCircleMove {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-15px, 20px);
        }

    }


    /* =========================================================
 DECORATIVE CIRCLE 02
========================================================= */

    #kd-ai-benefits .kdabf-circle-two {

        position: absolute;

        width: 125px;
        height: 125px;

        left: 4%;
        bottom: -75px;

        border-radius: 50%;

        background:
            rgba(244, 123, 32, .06);

        pointer-events: none;

        animation:
            kdabfCircleTwo 7s ease-in-out infinite;
    }


    @keyframes kdabfCircleTwo {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.12);
        }

    }


    /* =========================================================
 CONTAINER
========================================================= */

    #kd-ai-benefits .kdabf-container {

        position: relative;
        z-index: 5;

        width: 100%;
        max-width: 1380px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(360px, .80fr) minmax(0, 1.30fr);

        gap: 65px;

        align-items: center;
    }


    /* =========================================================
 LEFT CONTENT
========================================================= */

    #kd-ai-benefits .kdabf-content {

        width: 100%;
        max-width: 540px;

        overflow: visible !important;
    }


    /* =========================================================
 EYEBROW
========================================================= */

    #kd-ai-benefits .kdabf-eyebrow {

        display: inline-flex;

        align-items: center;

        gap: 9px;

        margin-bottom: 14px;

        color: var(--orange);

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .12em;

        text-transform: uppercase;
    }


    /* =========================================================
 BLINK DOT
========================================================= */

    #kd-ai-benefits .kdabf-blink {

        position: relative;

        width: 8px;
        height: 8px;

        flex: 0 0 8px;

        border-radius: 50%;

        background: var(--orange);

        box-shadow:
            0 0 0 4px rgba(244, 123, 32, .10);

        animation:
            kdabfBlinkDot 1.45s ease-in-out infinite;
    }


    #kd-ai-benefits .kdabf-blink::after {

        content: "";

        position: absolute;

        inset: -5px;

        border-radius: 50%;

        border:
            1px solid rgba(244, 123, 32, .35);

        animation:
            kdabfBlinkRing 1.45s ease-out infinite;
    }


    @keyframes kdabfBlinkDot {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .55;
            transform: scale(.78);
        }

    }


    @keyframes kdabfBlinkRing {

        0% {
            opacity: .65;
            transform: scale(.6);
        }

        100% {
            opacity: 0;
            transform: scale(1.45);
        }

    }


    /* =========================================================
 HEADING
 CLIPPING FIXED
========================================================= */

    #kd-ai-benefits .kdabf-title {

        display: block;

        margin: 0;

        padding:
            3px 0 8px;

        overflow: visible !important;

        color: var(--navy);

        font-size: 44px;
        line-height: 1.18;

        font-weight: 800;

        letter-spacing: -1.7px;
    }


    #kd-ai-benefits .kdabf-title-line {

        display: block;

        padding:
            1px 2px 4px;

        line-height: 1.21;

        overflow: visible !important;

        white-space: nowrap;
    }


    /* ORANGE HEADING */

    #kd-ai-benefits .kdabf-title-gradient {

        padding-bottom: 6px;

        background:
            linear-gradient(90deg,
                #E86513 0%,
                #F47B20 55%,
                #FF9145 100%);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;

        color: transparent;
    }


    /* =========================================================
 DESCRIPTION
========================================================= */

    #kd-ai-benefits .kdabf-desc {

        max-width: 515px;

        margin:
            14px 0 0;

        color: var(--text);

        font-size: 14px;
        line-height: 1.72;

        font-weight: 500;
    }


    /* =========================================================
 POINTS
========================================================= */

    #kd-ai-benefits .kdabf-points {

        margin-top: 21px;

        display: grid;

        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 11px 17px;
    }


    #kd-ai-benefits .kdabf-point {

        min-width: 0;

        display: flex;

        align-items: center;

        gap: 8px;

        color: #4D5769;

        font-size: 12px;
        line-height: 1.45;

        font-weight: 700;
    }


    /* CHECK */

    #kd-ai-benefits .kdabf-check {

        width: 23px;
        height: 23px;

        flex: 0 0 23px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        color: var(--orange);

        font-size: 8px;

        background: #FFF0E6;

        border:
            1px solid #FFDCC5;
    }


    /* =========================================================
 BUTTON
========================================================= */

    #kd-ai-benefits .kdabf-btn {

        width: max-content;
        height: 47px;

        margin-top: 24px;

        padding: 0 20px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        border-radius: 9px;

        color: #FFFFFF !important;

        text-decoration: none !important;

        font-size: 11px;
        line-height: 1;

        font-weight: 800;

        background:
            linear-gradient(135deg,
                #E86513 0%,
                #F47B20 58%,
                #FF9145 100%);

        border:
            1px solid rgba(255, 255, 255, .12);

        box-shadow:
            0 10px 24px rgba(244, 123, 32, .22);

        transition:
            transform .3s ease,
            box-shadow .3s ease,
            background .3s ease;
    }


    #kd-ai-benefits .kdabf-btn:hover {

        transform: translateY(-3px);

        color: #FFFFFF !important;

        background:
            linear-gradient(135deg,
                #F47B20,
                #FF9145);

        box-shadow:
            0 16px 31px rgba(244, 123, 32, .30);
    }


    #kd-ai-benefits .kdabf-btn i {

        transition:
            transform .3s ease;
    }


    #kd-ai-benefits .kdabf-btn:hover i {

        transform: translateX(3px);
    }


    /* =========================================================
 RIGHT GRID
========================================================= */

    #kd-ai-benefits .kdabf-grid {

        width: 100%;

        display: grid;

        grid-template-columns:
            repeat(2, minmax(0, 1fr));

        gap: 14px;
    }


    /* =========================================================
 CARD
========================================================= */

    #kd-ai-benefits .kdabf-card {

        position: relative;

        min-width: 0;

        height: 235px;

        overflow: hidden;

        padding:
            26px 24px;

        display: flex;

        flex-direction: column;

        align-items: center;
        justify-content: center;

        text-align: center;

        border-radius: 17px;

        background:
            rgba(255, 255, 255, .95);

        border:
            1px solid var(--border);

        box-shadow:
            0 8px 25px rgba(6, 15, 62, .045);

        transition:
            transform .35s ease,
            box-shadow .35s ease,
            border-color .35s ease;
    }


    #kd-ai-benefits .kdabf-card:hover {

        transform: translateY(-5px);

        border-color:
            rgba(244, 123, 32, .30);

        box-shadow:
            0 18px 40px rgba(6, 15, 62, .10);
    }


    /* =========================================================
 CARD TOP ACCENT
========================================================= */

    #kd-ai-benefits .kdabf-card::before {

        content: "";

        position: absolute;

        left: 50%;
        top: 0;

        width: 55px;
        height: 3px;

        transform: translateX(-50%);

        border-radius:
            0 0 10px 10px;

        background:
            linear-gradient(90deg,
                #E86513,
                #F47B20,
                #FF9145);

        transition:
            width .35s ease;
    }


    #kd-ai-benefits .kdabf-card:hover::before {

        width: 100px;
    }


    /* =========================================================
 CARD DECORATIVE CIRCLE
========================================================= */

    #kd-ai-benefits .kdabf-card::after {

        content: "";

        position: absolute;

        width: 115px;
        height: 115px;

        right: -65px;
        bottom: -65px;

        border-radius: 50%;

        background:
            rgba(244, 123, 32, .045);

        transition:
            transform .4s ease;
    }


    #kd-ai-benefits .kdabf-card:hover::after {

        transform: scale(1.35);
    }


    /* =========================================================
 FEATURED CARD
========================================================= */

    #kd-ai-benefits .kdabf-card-featured {

        background:
            radial-gradient(circle at 88% 12%,
                rgba(244, 123, 32, .26),
                transparent 34%),
            radial-gradient(circle at 10% 90%,
                rgba(255, 145, 69, .07),
                transparent 30%),
            linear-gradient(145deg,
                #040A29 0%,
                #060F3E 48%,
                #0B284E 100%);

        border-color:
            rgba(244, 123, 32, .18);

        box-shadow:
            0 15px 35px rgba(6, 15, 62, .16);
    }


    #kd-ai-benefits .kdabf-card-featured:hover {

        border-color:
            rgba(244, 123, 32, .38);

        box-shadow:
            0 20px 42px rgba(6, 15, 62, .22);
    }


    #kd-ai-benefits .kdabf-card-featured::before {

        background:
            linear-gradient(90deg,
                #F47B20,
                #FFB078);
    }


    #kd-ai-benefits .kdabf-card-featured::after {

        width: 150px;
        height: 150px;

        right: -75px;
        bottom: -90px;

        background: transparent;

        border:
            1px solid rgba(255, 255, 255, .08);

        box-shadow:
            0 0 0 25px rgba(255, 255, 255, .018),
            0 0 0 50px rgba(244, 123, 32, .012);
    }


    /* =========================================================
 NUMBER
========================================================= */

    #kd-ai-benefits .kdabf-number {

        position: absolute;

        top: 18px;
        right: 20px;

        color: #AAB2BE;

        font-size: 11px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .08em;
    }


    #kd-ai-benefits .kdabf-card-featured .kdabf-number {

        color:
            rgba(255, 255, 255, .58);
    }


    /* =========================================================
 CARD CONTENT
========================================================= */

    #kd-ai-benefits .kdabf-card-content {

        position: relative;
        z-index: 3;

        width: 100%;
        max-width: 310px;

        margin: 0 auto;
    }


    /* TITLE */

    #kd-ai-benefits .kdabf-card h3 {

        margin:
            0 0 10px;

        padding:
            2px 0;

        overflow: visible;

        color: #171D2E;

        font-size: 18px;
        line-height: 1.4;

        font-weight: 800;

        letter-spacing: -.3px;
    }


    /* TEXT */

    #kd-ai-benefits .kdabf-card p {

        margin: 0 auto;

        color: #667085;

        font-size: 13px;
        line-height: 1.65;

        font-weight: 500;

        overflow-wrap: break-word;

        word-break: normal;
    }


    /* FEATURED TEXT */

    #kd-ai-benefits .kdabf-card-featured h3 {

        color: #FFFFFF;
    }


    #kd-ai-benefits .kdabf-card-featured p {

        color:
            rgba(255, 255, 255, .70);
    }


    /* =========================================================
 CARD LABEL
========================================================= */

    #kd-ai-benefits .kdabf-card-label {

        position: relative;
        z-index: 3;

        margin-top: 14px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 7px;

        color: var(--orange);

        font-size: 11px;
        line-height: 1.3;

        font-weight: 800;
    }


    #kd-ai-benefits .kdabf-card-label-dot {

        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: var(--orange);

        box-shadow:
            0 0 0 3px rgba(244, 123, 32, .08);
    }


    /* FEATURED LABEL */

    #kd-ai-benefits .kdabf-card-featured .kdabf-card-label {

        color: #FFAE75;
    }


    #kd-ai-benefits .kdabf-card-featured .kdabf-card-label-dot {

        background: #FF9145;

        box-shadow:
            0 0 8px rgba(255, 145, 69, .55);
    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:1100px) {

        #kd-ai-benefits {

            padding:
                50px 30px 53px;
        }


        #kd-ai-benefits .kdabf-container {

            grid-template-columns: 1fr;

            gap: 36px;
        }


        #kd-ai-benefits .kdabf-content {

            max-width: 760px;

            margin: 0 auto;

            text-align: center;
        }


        #kd-ai-benefits .kdabf-eyebrow {

            justify-content: center;
        }


        #kd-ai-benefits .kdabf-desc {

            max-width: 680px;

            margin-left: auto;
            margin-right: auto;
        }


        #kd-ai-benefits .kdabf-points {

            max-width: 560px;

            margin-left: auto;
            margin-right: auto;

            text-align: left;
        }


        #kd-ai-benefits .kdabf-btn {

            margin-left: auto;
            margin-right: auto;
        }


        #kd-ai-benefits .kdabf-grid {

            max-width: 850px;

            margin: 0 auto;
        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:650px) {

        #kd-ai-benefits {

            padding:
                40px 17px 42px;
        }


        #kd-ai-benefits .kdabf-dots-bg {

            display: none;
        }


        #kd-ai-benefits .kdabf-container {

            gap: 26px;
        }


        #kd-ai-benefits .kdabf-eyebrow {

            margin-bottom: 11px;

            font-size: 9px;
        }


        /* HEADING FIX */

        #kd-ai-benefits .kdabf-title {

            font-size: 31px;

            line-height: 1.22;

            letter-spacing: -1px;

            padding:
                3px 0 7px;

            overflow: visible !important;
        }


        #kd-ai-benefits .kdabf-title-line {

            white-space: normal;

            line-height: 1.24;

            padding:
                1px 1px 4px;

            overflow: visible !important;
        }


        #kd-ai-benefits .kdabf-title-gradient {

            padding-bottom: 6px;
        }


        #kd-ai-benefits .kdabf-desc {

            margin-top: 8px;

            font-size: 12.5px;
            line-height: 1.65;
        }


        /* POINTS */

        #kd-ai-benefits .kdabf-points {

            max-width: 100%;

            margin-top: 18px;

            grid-template-columns: 1fr;

            gap: 9px;

            text-align: left;
        }


        #kd-ai-benefits .kdabf-point {

            font-size: 12px;
        }


        #kd-ai-benefits .kdabf-btn {

            width: 100%;

            height: 46px;

            margin-top: 20px;
        }


        /* CARDS */

        #kd-ai-benefits .kdabf-grid {

            grid-template-columns: 1fr;

            gap: 10px;
        }


        #kd-ai-benefits .kdabf-card {

            height: auto;

            min-height: 205px;

            padding:
                31px 20px 22px;

            border-radius: 15px;
        }


        #kd-ai-benefits .kdabf-card-content {

            max-width: 350px;
        }


        #kd-ai-benefits .kdabf-card h3 {

            margin-bottom: 8px;

            font-size: 17px;
            line-height: 1.4;
        }


        #kd-ai-benefits .kdabf-card p {

            font-size: 12.5px;
            line-height: 1.65;
        }


        #kd-ai-benefits .kdabf-number {

            top: 16px;
            right: 17px;

            font-size: 10px;
        }


        #kd-ai-benefits .kdabf-card-label {

            margin-top: 12px;

            font-size: 10.5px;
        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:380px) {

        #kd-ai-benefits .kdabf-title {

            font-size: 28px;

            line-height: 1.23;
        }


        #kd-ai-benefits .kdabf-title-line {

            line-height: 1.25;
        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kd-ai-benefits *,
        #kd-ai-benefits *::before,
        #kd-ai-benefits *::after {

            animation: none !important;

            transition: none !important;
        }

    }
</style>


<!-- =========================================================
 HTML
========================================================= -->

<section id="kd-ai-benefits">


    <!-- BACKGROUND ELEMENTS -->

    <span class="kdabf-dots-bg"></span>

    <span class="kdabf-circle-one"></span>

    <span class="kdabf-circle-two"></span>


    <div class="kdabf-container">


        <!-- =================================================
             LEFT CONTENT
        ================================================== -->

        <div class="kdabf-content">


            <div class="kdabf-eyebrow">

                <span class="kdabf-blink"></span>

                WHY AI VIDEO

            </div>


            <h2 class="kdabf-title">

                <span class="kdabf-title-line">
                    Create More Content.
                </span>

                <span class="kdabf-title-line kdabf-title-gradient">
                    Limit Creativity Less.
                </span>

            </h2>


            <p class="kdabf-desc">

                AI-powered production gives brands more flexibility
                to transform ideas into professional video content.
                With the right creative direction, one idea can become
                engaging content for different campaigns, audiences
                and digital platforms.

            </p>


            <!-- POINTS -->

            <div class="kdabf-points">


                <div class="kdabf-point">

                    <span class="kdabf-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    Flexible Video Formats

                </div>


                <div class="kdabf-point">

                    <span class="kdabf-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    Creative Visual Options

                </div>


                <div class="kdabf-point">

                    <span class="kdabf-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    Multi-Platform Content

                </div>


                <div class="kdabf-point">

                    <span class="kdabf-check">
                        <i class="fa-solid fa-check"></i>
                    </span>

                    Brand-Focused Production

                </div>


            </div>


            <!-- BUTTON -->

            <a
                href="/enquiry.php"
                class="kdabf-btn">

                Discuss Your Video

                <i class="fa-solid fa-arrow-right"></i>

            </a>


        </div>


        <!-- =================================================
             RIGHT CARDS
        ================================================== -->

        <div class="kdabf-grid">


            <!-- CARD 01 -->

            <article class="kdabf-card kdabf-card-featured">


                <span class="kdabf-number">
                    01
                </span>


                <div class="kdabf-card-content">


                    <h3>
                        More Creative Freedom
                    </h3>


                    <p>

                        Explore new visual concepts, scenes and
                        creative directions that help turn simple
                        ideas into engaging video content.

                    </p>


                    <div class="kdabf-card-label">

                        <span class="kdabf-card-label-dot"></span>

                        Expand Your Ideas

                    </div>


                </div>


            </article>


            <!-- CARD 02 -->

            <article class="kdabf-card">


                <span class="kdabf-number">
                    02
                </span>


                <div class="kdabf-card-content">


                    <h3>
                        Multiple Content Formats
                    </h3>


                    <p>

                        Create videos for reels, advertising,
                        product campaigns, social media and
                        YouTube from one creative direction.

                    </p>


                    <div class="kdabf-card-label">

                        <span class="kdabf-card-label-dot"></span>

                        Platform Ready

                    </div>


                </div>


            </article>


            <!-- CARD 03 -->

            <article class="kdabf-card">


                <span class="kdabf-number">
                    03
                </span>


                <div class="kdabf-card-content">


                    <h3>
                        Adapt Ideas Faster
                    </h3>


                    <p>

                        Adapt your creative concept for different
                        messages, formats and campaign needs
                        without starting from zero every time.

                    </p>


                    <div class="kdabf-card-label">

                        <span class="kdabf-card-label-dot"></span>

                        Flexible Production

                    </div>


                </div>


            </article>


            <!-- CARD 04 -->

            <article class="kdabf-card">


                <span class="kdabf-number">
                    04
                </span>


                <div class="kdabf-card-content">


                    <h3>
                        Built Around Your Brand
                    </h3>


                    <p>

                        Shape every video around your message,
                        visual identity, target audience and
                        overall content objective.

                    </p>


                    <div class="kdabf-card-label">

                        <span class="kdabf-card-label-dot"></span>

                        Brand Focused

                    </div>


                </div>


            </article>


        </div>


    </div>


</section>