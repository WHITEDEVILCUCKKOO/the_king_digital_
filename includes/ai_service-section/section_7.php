<!-- =========================================================
 KING DIGITAL — AI VIDEO SERVICES
 PREMIUM COMPACT IMAGE CARDS
 DARK NAVY + ORANGE
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

    #kd-ai-services-compact,
    #kd-ai-services-compact * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    #kd-ai-services-compact {

        --navy: #060F3E;
        --navy2: #0B2148;
        --navy3: #10355E;

        --orange: #F47B20;
        --orange2: #FF9145;
        --orange3: #FFAA70;

        --text: #667085;
        --border: #E3E7EC;

        position: relative;

        width: 100%;

        overflow: hidden;

        padding: 45px 30px 47px;

         

        background:
            radial-gradient(circle at 5% 10%,
                rgba(244, 123, 32, .06),
                transparent 22%),
            radial-gradient(circle at 95% 90%,
                rgba(6, 15, 62, .045),
                transparent 23%),
            linear-gradient(135deg,
                #F7F8FA 0%,
                #FFFFFF 50%,
                #F5F6F8 100%);
    }


    /* =========================================================
 BACKGROUND GRID
========================================================= */

    #kd-ai-services-compact::before {

        content: "";

        position: absolute;
        inset: 0;

        pointer-events: none;

        opacity: .36;

        background-image:
            linear-gradient(rgba(6, 15, 62, .022) 1px,
                transparent 1px),
            linear-gradient(90deg,
                rgba(6, 15, 62, .022) 1px,
                transparent 1px);

        background-size: 52px 52px;
    }


    /* =========================================================
 BACKGROUND DOTS
========================================================= */

    #kd-ai-services-compact .kdsc-dots {

        position: absolute;

        right: 28px;
        top: 25px;

        width: 95px;
        height: 95px;

        opacity: .28;

        background-image:
            radial-gradient(rgba(244, 123, 32, .55) 1px,
                transparent 1px);

        background-size: 14px 14px;

        pointer-events: none;

        animation:
            kdscDots 7s ease-in-out infinite;
    }


    @keyframes kdscDots {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(8px);
        }

    }


    /* =========================================================
 BACKGROUND CIRCLE
========================================================= */

    #kd-ai-services-compact::after {

        content: "";

        position: absolute;

        width: 250px;
        height: 250px;

        left: -150px;
        bottom: -130px;

        border-radius: 50%;

        border:
            1px solid rgba(244, 123, 32, .09);

        box-shadow:
            0 0 0 38px rgba(244, 123, 32, .018),
            0 0 0 76px rgba(6, 15, 62, .012);

        pointer-events: none;
    }


    /* =========================================================
 CONTAINER
========================================================= */

    #kd-ai-services-compact .kdsc-container {

        position: relative;
        z-index: 5;

        width: 100%;
        max-width: 1440px;

        margin: 0 auto;
    }


    /* =========================================================
 HEADER
========================================================= */

    #kd-ai-services-compact .kdsc-header {

        max-width: 720px;

        margin: 0 auto 27px;

        padding: 0 0 4px;

        text-align: center;

        overflow: visible !important;
    }


    /* =========================================================
 EYEBROW
========================================================= */

    #kd-ai-services-compact .kdsc-eyebrow {

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 8px;

        margin-bottom: 10px;

        color: var(--orange);

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .12em;

        text-transform: uppercase;
    }


    #kd-ai-services-compact .kdsc-line {

        width: 23px;
        height: 1px;

        background:
            linear-gradient(90deg,
                transparent,
                var(--orange));
    }


    #kd-ai-services-compact .kdsc-line:last-child {

        transform: rotate(180deg);
    }


    /* =========================================================
 HEADING
========================================================= */

    #kd-ai-services-compact .kdsc-title {

        display: block;

        margin: 0;

        padding: 3px 0 7px;

        overflow: visible !important;

        color: var(--navy);

        font-size: 40px;
        line-height: 1.18;

        font-weight: 800;

        letter-spacing: -1.5px;
    }


    /* SECOND LINE */

    #kd-ai-services-compact .kdsc-title span {

        display: block;

        padding: 2px 2px 5px;

        overflow: visible !important;

        line-height: 1.21;

        background:
            linear-gradient(90deg,
                #E86513,
                #F47B20 55%,
                #FF9145);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;

        color: transparent;
    }


    /* =========================================================
 DESCRIPTION
========================================================= */

    #kd-ai-services-compact .kdsc-description {

        max-width: 600px;

        margin: 8px auto 0;

        color: var(--text);

        font-size: 13.5px;
        line-height: 1.65;

        font-weight: 500;
    }


    /* =========================================================
 ANIMATED HEADING BAR
========================================================= */

    #kd-ai-services-compact .kdsc-heading-bar {

        position: relative;

        width: 80px;
        height: 2px;

        margin: 15px auto 0;

        overflow: hidden;

        border-radius: 20px;

        background: #E1E4E8;
    }


    #kd-ai-services-compact .kdsc-heading-bar::after {

        content: "";

        position: absolute;

        left: 0;
        top: 0;

        width: 40%;
        height: 100%;

        border-radius: 20px;

        background:
            linear-gradient(90deg,
                var(--navy2),
                var(--orange),
                var(--orange2));

        animation:
            kdscBar 3s ease-in-out infinite;
    }


    @keyframes kdscBar {

        0% {
            transform: translateX(-100%);
        }

        50% {
            transform: translateX(250%);
        }

        100% {
            transform: translateX(-100%);
        }

    }


    /* =========================================================
 GRID
========================================================= */

    #kd-ai-services-compact .kdsc-grid {

        display: grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        gap: 14px;

        align-items: stretch;
    }


    /* =========================================================
 CARD
========================================================= */

    #kd-ai-services-compact .kdsc-card {

        position: relative;

        min-width: 0;

        display: flex;
        flex-direction: column;

        overflow: hidden;

        border-radius: 15px;

        background: #FFFFFF;

        border:
            1px solid var(--border);

        box-shadow:
            0 8px 24px rgba(6, 15, 62, .05);

        transition:
            transform .35s ease,
            border-color .35s ease,
            box-shadow .35s ease;
    }


    #kd-ai-services-compact .kdsc-card:hover {

        transform: translateY(-6px);

        border-color:
            rgba(244, 123, 32, .30);

        box-shadow:
            0 19px 40px rgba(6, 15, 62, .12);
    }


    /* =========================================================
 TOP ACCENT
========================================================= */

    #kd-ai-services-compact .kdsc-card::before {

        content: "";

        position: absolute;

        z-index: 20;

        left: 0;
        top: 0;

        width: 100%;
        height: 3px;

        transform: scaleX(.22);

        transform-origin: left;

        background:
            linear-gradient(90deg,
                #E86513,
                var(--orange),
                var(--orange2));

        transition:
            transform .4s ease;
    }


    #kd-ai-services-compact .kdsc-card:hover::before {

        transform: scaleX(1);
    }


    /* =========================================================
 IMAGE
========================================================= */

    #kd-ai-services-compact .kdsc-image {

        position: relative;

        width: 100%;
        height: 180px;

        overflow: hidden;

        background: #E9EBEF;
    }


    #kd-ai-services-compact .kdsc-image img {

        width: 100%;
        height: 100%;

        display: block;

        object-fit: cover;

        transition:
            transform .65s cubic-bezier(.2, .7, .2, 1),
            filter .4s ease;
    }


    #kd-ai-services-compact .kdsc-card:hover .kdsc-image img {

        transform: scale(1.055);
    }


    /* IMAGE OVERLAY */

    #kd-ai-services-compact .kdsc-image::before {

        content: "";

        position: absolute;

        z-index: 2;

        inset: 0;

        pointer-events: none;

        background:
            linear-gradient(180deg,
                rgba(6, 15, 62, .04) 0%,
                rgba(6, 15, 62, .01) 45%,
                rgba(255, 255, 255, .02) 70%,
                rgba(255, 255, 255, .97) 100%);
    }


    /* ORANGE IMAGE GLOW */

    #kd-ai-services-compact .kdsc-image::after {

        content: "";

        position: absolute;

        z-index: 3;

        width: 110px;
        height: 110px;

        right: -65px;
        top: -60px;

        border-radius: 50%;

        background:
            rgba(244, 123, 32, .12);

        pointer-events: none;

        transition:
            transform .45s ease;
    }


    #kd-ai-services-compact .kdsc-card:hover .kdsc-image::after {

        transform: scale(1.35);
    }


    /* =========================================================
 ICON
========================================================= */

    #kd-ai-services-compact .kdsc-icon {

        position: absolute;

        z-index: 15;

        right: 13px;
        top: 13px;

        width: 42px;
        height: 42px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 11px;

        color: var(--orange);

        font-size: 15px;

        background:
            rgba(255, 255, 255, .95);

        border:
            1px solid rgba(244, 123, 32, .20);

        box-shadow:
            0 8px 20px rgba(6, 15, 62, .12);

        backdrop-filter: blur(8px);

        -webkit-backdrop-filter: blur(8px);

        transition:
            transform .3s ease,
            color .3s ease,
            background .3s ease,
            border-color .3s ease;
    }


    #kd-ai-services-compact .kdsc-card:hover .kdsc-icon {

        color: #FFFFFF;

        transform:
            translateY(-2px) rotate(-4deg);

        border-color:
            rgba(255, 255, 255, .15);

        background:
            linear-gradient(135deg,
                var(--navy2) 0%,
                var(--navy3) 48%,
                var(--orange) 100%);
    }


    /* =========================================================
 CONTENT
========================================================= */

    #kd-ai-services-compact .kdsc-content {

        position: relative;
        z-index: 5;

        flex: 1;

        margin-top: -9px;

        padding:
            17px 16px 16px;

        display: flex;

        flex-direction: column;
    }


    /* =========================================================
 LABEL
========================================================= */

    #kd-ai-services-compact .kdsc-label {

        margin-bottom: 6px;

        color: var(--orange);

        font-size: 9px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .10em;

        text-transform: uppercase;
    }


    /* =========================================================
 CARD TITLE
========================================================= */

    #kd-ai-services-compact .kdsc-card-title {

        margin: 0;

        padding: 1px 0 3px;

        overflow: visible;

        color: var(--navy);

        font-size: 17px;
        line-height: 1.36;

        font-weight: 800;

        letter-spacing: -.25px;
    }


    /* =========================================================
 CARD TEXT
========================================================= */

    #kd-ai-services-compact .kdsc-card-text {

        margin: 6px 0 0;

        color: #687185;

        font-size: 12px;
        line-height: 1.62;

        font-weight: 500;
    }


    /* =========================================================
 FOOT
========================================================= */

    #kd-ai-services-compact .kdsc-foot {

        position: relative;

        margin-top: auto;

        padding-top: 14px;

        display: flex;

        align-items: center;

        gap: 7px;
    }


    /* =========================================================
 READ MORE BUTTON
========================================================= */

    #kd-ai-services-compact .kdsc-btn {

        min-height: 38px;

        padding: 0 13px;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 7px;

        border-radius: 7px;

        color: #FFFFFF !important;

        text-decoration: none !important;

        font-size: 9px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .025em;

        text-transform: uppercase;

        background:
            linear-gradient(135deg,
                #E86513 0%,
                var(--orange) 58%,
                var(--orange2) 100%);

        border:
            1px solid rgba(255, 255, 255, .10);

        box-shadow:
            0 7px 17px rgba(244, 123, 32, .20);

        transition:
            transform .3s ease,
            box-shadow .3s ease,
            background .3s ease;
    }


    #kd-ai-services-compact .kdsc-btn:hover {

        transform: translateY(-2px);

        color: #FFFFFF !important;

        background:
            linear-gradient(135deg,
                var(--orange),
                var(--orange2));

        box-shadow:
            0 11px 23px rgba(244, 123, 32, .29);
    }


    #kd-ai-services-compact .kdsc-btn i {

        font-size: 8px;

        transition:
            transform .3s ease;
    }


    #kd-ai-services-compact .kdsc-btn:hover i {

        transform: translateX(3px);
    }


    /* =========================================================
 PORTFOLIO PLAY BUTTON
========================================================= */

    #kd-ai-services-compact .kdsc-play {

        width: 38px;
        height: 38px;

        flex: 0 0 38px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 7px;

        color: var(--orange) !important;

        text-decoration: none !important;

        font-size: 10px;

        background: #FFF0E6;

        border:
            1px solid #FFDCC5;

        transition:
            transform .3s ease,
            color .3s ease,
            background .3s ease,
            border-color .3s ease;
    }


    #kd-ai-services-compact .kdsc-play:hover {

        color: #FFFFFF !important;

        transform: translateY(-2px);

        background: var(--navy);

        border-color: var(--navy);
    }


    /* =========================================================
 WATERMARK NUMBER
========================================================= */

    #kd-ai-services-compact .kdsc-number {

        position: absolute;

        right: 14px;
        bottom: 10px;

        color: #EFF1F4;

        font-size: 31px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: -1.5px;

        pointer-events: none;

        transition:
            color .3s ease,
            transform .3s ease;
    }


    #kd-ai-services-compact .kdsc-card:hover .kdsc-number {

        color: #FBE8DA;

        transform: translateY(-2px);
    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:1100px) {

        #kd-ai-services-compact {

            padding:
                43px 25px 45px;
        }


        #kd-ai-services-compact .kdsc-grid {

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 15px;
        }


        #kd-ai-services-compact .kdsc-image {

            height: 205px;
        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:620px) {

        #kd-ai-services-compact {

            padding:
                38px 16px 40px;
        }


        #kd-ai-services-compact .kdsc-dots {

            display: none;
        }


        #kd-ai-services-compact .kdsc-header {

            margin-bottom: 23px;

            overflow: visible !important;
        }


        #kd-ai-services-compact .kdsc-eyebrow {

            margin-bottom: 9px;

            font-size: 9px;
        }


        /* HEADING CLIPPING FIX */

        #kd-ai-services-compact .kdsc-title {

            font-size: 31px;

            line-height: 1.22;

            letter-spacing: -1px;

            padding:
                3px 0 7px;

            overflow: visible !important;
        }


        #kd-ai-services-compact .kdsc-title span {

            line-height: 1.24;

            padding:
                2px 1px 5px;

            overflow: visible !important;
        }


        #kd-ai-services-compact .kdsc-description {

            margin-top: 7px;

            font-size: 12.5px;

            line-height: 1.65;
        }


        #kd-ai-services-compact .kdsc-heading-bar {

            margin-top: 13px;
        }


        /* GRID */

        #kd-ai-services-compact .kdsc-grid {

            grid-template-columns: 1fr;

            gap: 12px;
        }


        #kd-ai-services-compact .kdsc-card {

            border-radius: 14px;
        }


        #kd-ai-services-compact .kdsc-image {

            height: 200px;
        }


        #kd-ai-services-compact .kdsc-content {

            padding:
                16px 15px 15px;
        }


        #kd-ai-services-compact .kdsc-card-title {

            font-size: 17px;
        }


        #kd-ai-services-compact .kdsc-card-text {

            font-size: 12.5px;
        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        #kd-ai-services-compact .kdsc-title {

            font-size: 28px;

            line-height: 1.23;
        }


        #kd-ai-services-compact .kdsc-title span {

            line-height: 1.25;
        }


        #kd-ai-services-compact .kdsc-image {

            height: 190px;
        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kd-ai-services-compact *,
        #kd-ai-services-compact *::before,
        #kd-ai-services-compact *::after {

            animation: none !important;
            transition: none !important;
        }

    }
</style>


<!-- =========================================================
 HTML
========================================================= -->

<section id="kd-ai-services-compact">

    <span class="kdsc-dots"></span>


    <div class="kdsc-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="kdsc-header">


            <div class="kdsc-eyebrow">

                <span class="kdsc-line"></span>

                AI VIDEO SERVICES

                <span class="kdsc-line"></span>

            </div>


            <h2 class="kdsc-title">

                Creative AI Video Services

                <span>
                    For Modern Brands.
                </span>

            </h2>


            <p class="kdsc-description">

                From concept and scripting to visuals,
                editing and campaign-ready videos —
                everything your brand needs in one creative workflow.

            </p>


            <div class="kdsc-heading-bar"></div>


        </div>


        <!-- =================================================
             CARDS
        ================================================== -->

        <div class="kdsc-grid">


            <!-- =================================================
                 CARD 01
            ================================================== -->

            <article class="kdsc-card">


                <div class="kdsc-image">

                    <img
                        src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1200"
                        alt="AI video creation"
                        loading="lazy">

                </div>


                <div class="kdsc-icon">

                    <i class="fa-solid fa-wand-magic-sparkles"></i>

                </div>


                <div class="kdsc-content">


                    <div class="kdsc-label">
                        AI PRODUCTION
                    </div>


                    <h3 class="kdsc-card-title">

                        AI Video Creation

                    </h3>


                    <p class="kdsc-card-text">

                        Turn your ideas into engaging
                        AI-powered videos with creative
                        visuals, motion and a style shaped
                        around your brand.

                    </p>


                    <div class="kdsc-foot">


                        <a
                            href="/enquiry.php"
                            class="kdsc-btn">

                            Read More

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>


                        <a
                            href="/portfolio.php"
                            class="kdsc-play"
                            aria-label="View AI video work">

                            <i class="fa-solid fa-play"></i>

                        </a>


                    </div>


                </div>


                <span class="kdsc-number">
                    01
                </span>


            </article>


            <!-- =================================================
                 CARD 02
            ================================================== -->

            <article class="kdsc-card">


                <div class="kdsc-image">

                    <img
                        src="https://images.pexels.com/photos/8100342/pexels-photo-8100342.jpeg?auto=compress&cs=tinysrgb&w=1200"
                        alt="Professional video editing and motion"
                        loading="lazy">

                </div>


                <div class="kdsc-icon">

                    <i class="fa-solid fa-clapperboard"></i>

                </div>


                <div class="kdsc-content">


                    <div class="kdsc-label">
                        EDIT &amp; MOTION
                    </div>


                    <h3 class="kdsc-card-title">

                        Video Editing &amp; Motion

                    </h3>


                    <p class="kdsc-card-text">

                        Combine scenes with clean editing,
                        transitions, pacing and motion
                        elements for polished digital
                        video content.

                    </p>


                    <div class="kdsc-foot">


                        <a
                            href="/enquiry.php"
                            class="kdsc-btn">

                            Read More

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>


                        <a
                            href="/portfolio.php"
                            class="kdsc-play"
                            aria-label="View video editing work">

                            <i class="fa-solid fa-play"></i>

                        </a>


                    </div>


                </div>


                <span class="kdsc-number">
                    02
                </span>


            </article>


            <!-- =================================================
                 CARD 03
            ================================================== -->

            <article class="kdsc-card">


                <div class="kdsc-image">

                    <img
                        src="https://images.pexels.com/photos/261949/pexels-photo-261949.jpeg?auto=compress&cs=tinysrgb&w=1200"
                        alt="Script writing and creative planning"
                        loading="lazy">

                </div>


                <div class="kdsc-icon">

                    <i class="fa-solid fa-pen-nib"></i>

                </div>


                <div class="kdsc-content">


                    <div class="kdsc-label">
                        STORY &amp; CONCEPT
                    </div>


                    <h3 class="kdsc-card-title">

                        Script &amp; Creative Direction

                    </h3>


                    <p class="kdsc-card-text">

                        Shape your idea into a clear hook,
                        script and scene direction before
                        bringing the complete video
                        concept to life.

                    </p>


                    <div class="kdsc-foot">


                        <a
                            href="/enquiry.php"
                            class="kdsc-btn">

                            Read More

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>


                        <a
                            href="/portfolio.php"
                            class="kdsc-play"
                            aria-label="View creative work">

                            <i class="fa-solid fa-play"></i>

                        </a>


                    </div>


                </div>


                <span class="kdsc-number">
                    03
                </span>


            </article>


            <!-- =================================================
                 CARD 04
            ================================================== -->

            <article class="kdsc-card">


                <div class="kdsc-image">

                    <img
                        src="https://images.pexels.com/photos/3205735/pexels-photo-3205735.jpeg?auto=compress&cs=tinysrgb&w=1200"
                        alt="Video advertising and content production"
                        loading="lazy">

                </div>


                <div class="kdsc-icon">

                    <i class="fa-solid fa-bullhorn"></i>

                </div>


                <div class="kdsc-content">


                    <div class="kdsc-label">
                        VIDEO ADVERTISING
                    </div>


                    <h3 class="kdsc-card-title">

                        AI Video Ads

                    </h3>


                    <p class="kdsc-card-text">

                        Create campaign-ready videos
                        for promotions, products and
                        brand messaging across modern
                        digital platforms.

                    </p>


                    <div class="kdsc-foot">


                        <a
                            href="/enquiry.php"
                            class="kdsc-btn">

                            Read More

                            <i class="fa-solid fa-arrow-right"></i>

                        </a>


                        <a
                            href="/portfolio.php"
                            class="kdsc-play"
                            aria-label="View AI video ads">

                            <i class="fa-solid fa-play"></i>

                        </a>


                    </div>


                </div>


                <span class="kdsc-number">
                    04
                </span>


            </article>


        </div>


    </div>


</section>