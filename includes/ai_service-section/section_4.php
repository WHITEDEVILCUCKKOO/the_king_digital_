<!-- =========================================================
 KING DIGITAL — AI VIDEO SHOWCASE
 DARK NAVY BLUE + ORANGE
 5 TABS × 6 VIDEOS
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

    #kd-final-gallery,
    #kd-final-gallery * {
        box-sizing: border-box;
    }

    #kd-final-gallery button {
        font-family: 'Manrope', sans-serif !important;
    }


    /* =========================================================
 MAIN SECTION
========================================================= */

    #kd-final-gallery {

        --navy: #060F3E;
        --navy2: #0B2148;
        --navy3: #102D58;

        --orange: #F47B20;
        --orange2: #FF9145;
        --orange3: #FFB17B;

        --text: #626B7B;

        position: relative;
        width: 100%;
        overflow: hidden;

        padding: 48px 42px 51px;

         

        background:
            radial-gradient(circle at 5% 12%,
                rgba(244, 123, 32, .075),
                transparent 24%),
            radial-gradient(circle at 94% 15%,
                rgba(6, 15, 62, .06),
                transparent 23%),
            radial-gradient(circle at 84% 94%,
                rgba(244, 123, 32, .055),
                transparent 25%),
            linear-gradient(135deg,
                #F6F7F9 0%,
                #FFFFFF 48%,
                #F4F5F7 100%);
    }


    /* =========================================================
 GRID BACKGROUND
========================================================= */

    #kd-final-gallery::before {

        content: "";

        position: absolute;
        inset: 0;

        pointer-events: none;

        opacity: .40;

        background-image:
            linear-gradient(rgba(6, 15, 62, .028) 1px,
                transparent 1px),
            linear-gradient(90deg,
                rgba(6, 15, 62, .028) 1px,
                transparent 1px);

        background-size: 52px 52px;
    }


    /* =========================================================
 TOP GLOW
========================================================= */

    #kd-final-gallery::after {

        content: "";

        position: absolute;

        width: 430px;
        height: 430px;

        left: 50%;
        top: -330px;

        transform: translateX(-50%);

        border-radius: 50%;

        background:
            rgba(244, 123, 32, .10);

        filter: blur(85px);

        pointer-events: none;
    }


    /* =========================================================
 CONTAINER
========================================================= */

    #kd-final-gallery .kdfg-container {

        position: relative;
        z-index: 4;

        width: 100%;
        max-width: 1450px;

        margin: 0 auto;
    }


    /* =========================================================
 DECORATIVE DOTS
========================================================= */

    #kd-final-gallery .kdfg-container::before {

        content: "";

        position: absolute;

        width: 110px;
        height: 110px;

        right: 0;
        top: -10px;

        z-index: -1;

        opacity: .32;

        background-image:
            radial-gradient(rgba(244, 123, 32, .48) 1.2px,
                transparent 1.2px);

        background-size: 15px 15px;
    }


    /* =========================================================
 DECORATIVE CIRCLE
========================================================= */

    #kd-final-gallery .kdfg-container::after {

        content: "";

        position: absolute;
        z-index: -1;

        width: 155px;
        height: 155px;

        left: -75px;
        bottom: 25px;

        border-radius: 50%;

        border:
            1px solid rgba(244, 123, 32, .11);

        box-shadow:
            0 0 0 27px rgba(244, 123, 32, .022),
            0 0 0 54px rgba(6, 15, 62, .014);
    }


    /* =========================================================
 HEADER
========================================================= */

    #kd-final-gallery .kdfg-head {

        max-width: 790px;

        margin: 0 auto 24px;

        text-align: center;

        overflow: visible !important;
    }


    /* EYEBROW */

    #kd-final-gallery .kdfg-eyebrow {

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        margin-bottom: 11px;

        color: var(--orange);

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .11em;

        text-transform: uppercase;
    }


    #kd-final-gallery .kdfg-eyebrow::before,
    #kd-final-gallery .kdfg-eyebrow::after {

        content: "";

        width: 21px;
        height: 1px;

        background:
            linear-gradient(90deg,
                transparent,
                var(--orange));
    }


    #kd-final-gallery .kdfg-eyebrow::after {
        transform: rotate(180deg);
    }


    /* =========================================================
 HEADING — CLIPPING FIX
========================================================= */

    #kd-final-gallery .kdfg-title {

        display: block;

        max-width: 790px;

        margin: 0 auto;

        padding: 3px 0 7px;

        overflow: visible !important;

        color: var(--navy);

        font-size: 42px;
        line-height: 1.18;

        font-weight: 800;

        letter-spacing: -1.7px;
    }


    #kd-final-gallery .kdfg-title span {

        display: inline-block;

        padding:
            2px 2px 5px;

        overflow: visible !important;

        line-height: 1.20;

        background:
            linear-gradient(90deg,
                #E86412 0%,
                #F47B20 55%,
                #FF9347 100%);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;

        color: transparent;
    }


    /* DESCRIPTION */

    #kd-final-gallery .kdfg-desc {

        max-width: 690px;

        margin: 9px auto 0;

        color: #626C7B;

        font-size: 14px;
        line-height: 1.68;

        font-weight: 500;
    }


    /* =========================================================
 TABS WRAPPER
========================================================= */

    #kd-final-gallery .kdfg-tabs-wrap {

        width: 100%;

        display: flex;

        justify-content: center;

        margin-bottom: 26px;
    }


    #kd-final-gallery .kdfg-tabs {

        display: inline-flex;

        align-items: center;

        gap: 5px;

        padding: 5px;

        border-radius: 13px;

        background:
            rgba(255, 255, 255, .82);

        border:
            1px solid rgba(6, 15, 62, .10);

        box-shadow:
            0 8px 25px rgba(6, 15, 62, .055);

        backdrop-filter: blur(10px);

        -webkit-backdrop-filter: blur(10px);
    }


    /* =========================================================
 TAB
========================================================= */

    #kd-final-gallery .kdfg-tab {

        height: 41px !important;

        display: inline-flex !important;

        align-items: center !important;
        justify-content: center !important;

        gap: 7px;

        padding: 0 17px !important;

        margin: 0 !important;

        border: 0 !important;
        outline: 0 !important;

        border-radius: 8px !important;

        cursor: pointer;

        color: #626D7E !important;

        background: transparent !important;

        box-shadow: none !important;

        text-decoration: none !important;

        font-size: 10px !important;
        line-height: 1 !important;

        font-weight: 800 !important;

        white-space: nowrap;

        transition:
            color .25s ease,
            background .25s ease,
            transform .25s ease,
            box-shadow .25s ease !important;
    }


    #kd-final-gallery .kdfg-tab i {

        font-size: 9px;

        color: inherit;
    }


    /* TAB HOVER */

    #kd-final-gallery .kdfg-tab:hover,
    #kd-final-gallery .kdfg-tab:focus,
    #kd-final-gallery .kdfg-tab:focus-visible {

        color: var(--orange) !important;

        background: #FFF0E6 !important;

        outline: none !important;

        box-shadow: none !important;
    }


    /* ACTIVE TAB */

    #kd-final-gallery .kdfg-tab.active,
    #kd-final-gallery .kdfg-tab.active:hover,
    #kd-final-gallery .kdfg-tab.active:focus {

        color: #ffffff !important;

        background:
            linear-gradient(135deg,
                #E86513 0%,
                #F47B20 58%,
                #FF9145 100%) !important;

        box-shadow:
            0 8px 20px rgba(244, 123, 32, .24) !important;
    }


    /* =========================================================
 GALLERY
========================================================= */

    #kd-final-gallery .kdfg-gallery {

        position: relative;

        width: 100%;

        display: grid;

        grid-template-columns:
            repeat(6, minmax(0, 1fr));

        gap: 13px;
    }


    /* =========================================================
 CARD
========================================================= */

    #kd-final-gallery .kdfg-card {

        position: relative;

        width: 100%;

        aspect-ratio: 9 / 16;

        min-width: 0;

        overflow: hidden;

        border-radius: 17px;

        background: var(--navy);

        border:
            1px solid rgba(6, 15, 62, .12);

        box-shadow:
            0 12px 28px rgba(6, 15, 62, .11);

        isolation: isolate;

        animation:
            kdfgEnter .42s ease both;

        transition:
            transform .32s ease,
            box-shadow .32s ease,
            border-color .32s ease;
    }


    #kd-final-gallery .kdfg-card:hover {

        transform: translateY(-5px);

        border-color:
            rgba(244, 123, 32, .28);

        box-shadow:
            0 20px 42px rgba(6, 15, 62, .18);
    }


    @keyframes kdfgEnter {

        from {
            opacity: 0;

            transform:
                translateY(10px) scale(.98);
        }

        to {
            opacity: 1;

            transform:
                translateY(0) scale(1);
        }

    }


    #kd-final-gallery .kdfg-card:nth-child(2) {
        animation-delay: .04s;
    }

    #kd-final-gallery .kdfg-card:nth-child(3) {
        animation-delay: .08s;
    }

    #kd-final-gallery .kdfg-card:nth-child(4) {
        animation-delay: .12s;
    }

    #kd-final-gallery .kdfg-card:nth-child(5) {
        animation-delay: .16s;
    }

    #kd-final-gallery .kdfg-card:nth-child(6) {
        animation-delay: .20s;
    }


    /* =========================================================
 YOUTUBE MODE
========================================================= */

    #kd-final-gallery .kdfg-gallery.youtube-mode {

        grid-template-columns:
            repeat(3, minmax(0, 1fr));

        gap: 17px;
    }


    #kd-final-gallery .kdfg-gallery.youtube-mode .kdfg-card {

        aspect-ratio: 16 / 9;

        border-radius: 16px;
    }


    /* =========================================================
 MEDIA
========================================================= */

    #kd-final-gallery .kdfg-media {

        position: absolute;

        z-index: 1;

        inset: 0;

        overflow: hidden;

        background:
            radial-gradient(circle at 76% 17%,
                rgba(244, 123, 32, .44),
                transparent 29%),
            radial-gradient(circle at 13% 85%,
                rgba(255, 145, 69, .19),
                transparent 34%),
            linear-gradient(145deg,
                #040A29 0%,
                #060F3E 54%,
                #102A50 100%);
    }


    #kd-final-gallery .kdfg-media video {

        position: absolute;

        inset: 0;

        width: 100%;
        height: 100%;

        display: block;

        object-fit: cover;
        object-position: center;

        background: var(--navy);

        transition:
            transform .65s cubic-bezier(.2, .7, .2, 1);
    }


    #kd-final-gallery .kdfg-card:hover .kdfg-media video {

        transform: scale(1.035);
    }


    /* =========================================================
 FALLBACK
========================================================= */

    #kd-final-gallery .kdfg-fallback {

        position: absolute;

        inset: 0;

        display: flex;

        align-items: center;
        justify-content: center;

        background:
            radial-gradient(circle at 72% 20%,
                rgba(244, 123, 32, .44),
                transparent 29%),
            radial-gradient(circle at 18% 82%,
                rgba(255, 145, 69, .15),
                transparent 34%),
            linear-gradient(145deg,
                #040A29,
                #060F3E 55%,
                #102A50);
    }


    #kd-final-gallery .kdfg-fallback::before {

        content: "";

        position: absolute;

        width: 130px;
        height: 130px;

        border-radius: 50%;

        border:
            1px solid rgba(255, 255, 255, .07);

        box-shadow:
            0 0 0 25px rgba(255, 255, 255, .018);
    }


    #kd-final-gallery .kdfg-fallback::after {

        content: "";

        position: absolute;

        width: 65px;
        height: 65px;

        border-radius: 50%;

        background:
            rgba(244, 123, 32, .08);

        filter: blur(7px);
    }


    #kd-final-gallery .kdfg-fallback i {

        position: relative;

        z-index: 2;

        color:
            rgba(255, 255, 255, .12);

        font-size: 52px;
    }


    #kd-final-gallery .kdfg-gallery.youtube-mode .kdfg-fallback i {

        font-size: 65px;
    }


    /* =========================================================
 DARK OVERLAY
========================================================= */

    #kd-final-gallery .kdfg-overlay {

        position: absolute;

        z-index: 2;

        inset: 0;

        pointer-events: none;

        background:
            linear-gradient(180deg,
                rgba(3, 7, 27, .10) 0%,
                rgba(3, 7, 27, .01) 39%,
                rgba(4, 9, 34, .87) 100%);
    }


    /* =========================================================
 TOP TYPE
========================================================= */

    #kd-final-gallery .kdfg-top {

        position: absolute;

        z-index: 5;

        left: 12px;
        top: 12px;
    }


    #kd-final-gallery .kdfg-type {

        display: inline-flex;

        align-items: center;

        gap: 6px;

        padding: 7px 9px;

        border-radius: 7px;

        color: #ffffff;

        font-size: 7px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .05em;

        text-transform: uppercase;

        background:
            rgba(6, 15, 62, .65);

        border:
            1px solid rgba(255, 255, 255, .15);

        backdrop-filter: blur(9px);

        -webkit-backdrop-filter: blur(9px);
    }


    #kd-final-gallery .kdfg-dot {

        width: 5px;
        height: 5px;

        flex: 0 0 5px;

        border-radius: 50%;

        background: var(--orange2);

        box-shadow:
            0 0 8px rgba(255, 145, 69, .95);

        animation:
            kdfgDot 1.8s ease-in-out infinite;
    }


    @keyframes kdfgDot {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: .35;
        }

    }


    /* =========================================================
 PLAY BUTTON
========================================================= */

    #kd-final-gallery .kdfg-play {

        position: absolute !important;

        z-index: 8 !important;

        left: 50% !important;
        top: 47% !important;

        width: 52px !important;
        height: 52px !important;

        min-width: 52px !important;
        max-width: 52px !important;

        min-height: 52px !important;
        max-height: 52px !important;

        aspect-ratio: 1 / 1 !important;

        padding: 0 !important;
        margin: 0 !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        transform:
            translate(-50%, -50%) !important;

        border-radius: 999px !important;

        border:
            1px solid rgba(255, 255, 255, .37) !important;

        outline: none !important;

        color: #ffffff !important;

        background:
            rgba(6, 15, 62, .56) !important;

        box-shadow:
            0 8px 25px rgba(0, 0, 0, .22) !important;

        backdrop-filter: blur(10px);

        -webkit-backdrop-filter: blur(10px);

        cursor: pointer;

        overflow: hidden !important;

        line-height: 1 !important;

        transition:
            background .3s ease,
            box-shadow .3s ease,
            border-color .3s ease !important;
    }


    #kd-final-gallery .kdfg-play:hover,
    #kd-final-gallery .kdfg-play:focus {

        width: 52px !important;
        height: 52px !important;

        min-width: 52px !important;
        max-width: 52px !important;

        min-height: 52px !important;
        max-height: 52px !important;

        border-radius: 999px !important;

        color: #ffffff !important;

        border-color:
            rgba(255, 166, 104, .72) !important;

        background:
            linear-gradient(135deg,
                #E86513,
                #F47B20,
                #FF9145) !important;

        box-shadow:
            0 11px 30px rgba(244, 123, 32, .35) !important;
    }


    #kd-final-gallery .kdfg-play i {

        margin: 0 !important;
        padding: 0 !important;

        color: #ffffff !important;

        font-size: 12px !important;
        line-height: 1 !important;
    }


    #kd-final-gallery .kdfg-play .fa-play {

        transform: translateX(1px);
    }


    /* =========================================================
 BOTTOM COPY
========================================================= */

    #kd-final-gallery .kdfg-copy {

        position: absolute;

        z-index: 6;

        left: 14px;
        right: 14px;

        bottom: 15px;
    }


    #kd-final-gallery .kdfg-category {

        margin-bottom: 5px;

        color: #FFAA70;

        font-size: 7px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .08em;

        text-transform: uppercase;
    }


    #kd-final-gallery .kdfg-card-title {

        margin: 0;

        color: #ffffff;

        font-size: 13px;
        line-height: 1.35;

        font-weight: 800;

        letter-spacing: -.15px;
    }


    #kd-final-gallery .kdfg-sub {

        margin-top: 5px;

        color:
            rgba(255, 255, 255, .68);

        font-size: 8px;
        line-height: 1.4;

        font-weight: 600;
    }


    /* YOUTUBE COPY */

    #kd-final-gallery .kdfg-gallery.youtube-mode .kdfg-card-title {

        font-size: 16px;
    }


    #kd-final-gallery .kdfg-gallery.youtube-mode .kdfg-sub {

        font-size: 9px;
    }


    /* =========================================================
 PROGRESS
========================================================= */

    #kd-final-gallery .kdfg-progress {

        position: absolute;

        z-index: 9;

        left: 14px;
        right: 14px;

        bottom: 7px;

        height: 2px;

        overflow: hidden;

        border-radius: 20px;

        background:
            rgba(255, 255, 255, .18);

        opacity: 0;

        transition:
            opacity .2s ease;
    }


    #kd-final-gallery .kdfg-card.playing .kdfg-progress {

        opacity: 1;
    }


    #kd-final-gallery .kdfg-progress span {

        display: block;

        width: 0%;
        height: 100%;

        border-radius: 20px;

        background:
            linear-gradient(90deg,
                #E86513,
                #F47B20,
                #FFAD73);
    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:1150px) {

        #kd-final-gallery {

            padding:
                45px 28px 48px;
        }


        #kd-final-gallery .kdfg-gallery {

            grid-template-columns:
                repeat(3, minmax(0, 1fr));

            gap: 14px;
        }


        #kd-final-gallery .kdfg-gallery.youtube-mode {

            grid-template-columns:
                repeat(2, minmax(0, 1fr));
        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:650px) {

        #kd-final-gallery {

            padding:
                38px 16px 40px;
        }


        #kd-final-gallery .kdfg-container::before {

            width: 70px;
            height: 70px;
        }


        #kd-final-gallery .kdfg-container::after {

            display: none;
        }


        #kd-final-gallery .kdfg-head {

            margin-bottom: 18px;

            overflow: visible !important;
        }


        #kd-final-gallery .kdfg-eyebrow {

            margin-bottom: 9px;

            font-size: 9px;
        }


        /* HEADING CLIP FIX */

        #kd-final-gallery .kdfg-title {

            font-size: 31px;

            line-height: 1.22;

            letter-spacing: -1px;

            padding:
                2px 0 6px;

            overflow: visible !important;
        }


        #kd-final-gallery .kdfg-title span {

            line-height: 1.24;

            padding:
                2px 1px 5px;

            overflow: visible !important;
        }


        #kd-final-gallery .kdfg-desc {

            margin-top: 8px;

            font-size: 12.5px;

            line-height: 1.65;
        }


        /* TABS */

        #kd-final-gallery .kdfg-tabs-wrap {

            width:
                calc(100% + 32px);

            margin-left: -16px;

            padding-left: 16px;

            margin-bottom: 20px;

            justify-content: flex-start;

            overflow-x: auto;

            scrollbar-width: none;
        }


        #kd-final-gallery .kdfg-tabs-wrap::-webkit-scrollbar {

            display: none;
        }


        #kd-final-gallery .kdfg-tabs {

            flex: none;

            margin-right: 16px;
        }


        #kd-final-gallery .kdfg-tab {

            height: 38px !important;

            padding:
                0 13px !important;

            font-size:
                9px !important;
        }


        /* REELS */

        #kd-final-gallery .kdfg-gallery {

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 10px;
        }


        #kd-final-gallery .kdfg-card {

            border-radius: 13px;
        }


        /* YOUTUBE */

        #kd-final-gallery .kdfg-gallery.youtube-mode {

            grid-template-columns: 1fr;

            gap: 11px;
        }


        #kd-final-gallery .kdfg-gallery.youtube-mode .kdfg-card {

            aspect-ratio: 16 / 9;

            border-radius: 13px;
        }


        #kd-final-gallery .kdfg-card-title {

            font-size: 11px;
        }


        #kd-final-gallery .kdfg-sub {

            font-size: 7px;
        }


        #kd-final-gallery .kdfg-gallery.youtube-mode .kdfg-card-title {

            font-size: 14px;
        }


        /* PLAY */

        #kd-final-gallery .kdfg-play,
        #kd-final-gallery .kdfg-play:hover,
        #kd-final-gallery .kdfg-play:focus {

            width: 44px !important;
            height: 44px !important;

            min-width: 44px !important;
            max-width: 44px !important;

            min-height: 44px !important;
            max-height: 44px !important;

            border-radius: 999px !important;
        }


        #kd-final-gallery .kdfg-copy {

            left: 11px;
            right: 11px;

            bottom: 12px;
        }


        #kd-final-gallery .kdfg-top {

            left: 9px;
            top: 9px;
        }


        #kd-final-gallery .kdfg-type {

            padding: 6px 7px;

            font-size: 6px;
        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:370px) {

        #kd-final-gallery .kdfg-title {

            font-size: 28px;

            line-height: 1.23;
        }


        #kd-final-gallery .kdfg-title span {

            line-height: 1.25;
        }


        #kd-final-gallery .kdfg-gallery {

            gap: 8px;
        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kd-final-gallery *,
        #kd-final-gallery *::before,
        #kd-final-gallery *::after {

            animation: none !important;

            transition: none !important;
        }

    }
</style>


<!-- =========================================================
 HTML
========================================================= -->

<section id="kd-final-gallery">

    <div class="kdfg-container">


        <!-- =====================================================
         HEADER
    ====================================================== -->

        <div class="kdfg-head">

            <div class="kdfg-eyebrow">
                AI VIDEO SHOWCASE
            </div>

            <h2 class="kdfg-title">
                See What We Can
                <span>Create With AI.</span>
            </h2>

            <p class="kdfg-desc">
                Explore AI-powered reels, advertising creatives,
                product videos, brand content and YouTube videos
                created for today's digital platforms.
            </p>

        </div>


        <!-- =====================================================
         TABS
    ====================================================== -->

        <div class="kdfg-tabs-wrap">

            <div class="kdfg-tabs">

                <button
                    type="button"
                    class="kdfg-tab active"
                    data-category="reels">

                    <i class="fa-solid fa-mobile-screen-button"></i>
                    AI Reels

                </button>


                <button
                    type="button"
                    class="kdfg-tab"
                    data-category="ads">

                    <i class="fa-solid fa-bullhorn"></i>
                    AI Ads

                </button>


                <button
                    type="button"
                    class="kdfg-tab"
                    data-category="product">

                    <i class="fa-solid fa-box-open"></i>
                    Product Videos

                </button>


                <button
                    type="button"
                    class="kdfg-tab"
                    data-category="brand">

                    <i class="fa-solid fa-building"></i>
                    Brand Videos

                </button>


                <button
                    type="button"
                    class="kdfg-tab"
                    data-category="youtube">

                    <i class="fa-brands fa-youtube"></i>
                    YouTube Videos

                </button>

            </div>

        </div>


        <!-- =====================================================
         SIX REUSABLE VIDEO CARDS
    ====================================================== -->

        <div class="kdfg-gallery">


            <!-- CARD 01 -->

            <article class="kdfg-card">

                <div class="kdfg-media">

                    <div class="kdfg-fallback">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                    </div>

                    <video
                        muted
                        loop
                        playsinline
                        preload="metadata">
                    </video>

                </div>

                <div class="kdfg-overlay"></div>

                <div class="kdfg-top">

                    <div class="kdfg-type">

                        <span class="kdfg-dot"></span>

                        <span class="kdfg-type-text">
                            AI REEL
                        </span>

                    </div>

                </div>

                <button
                    type="button"
                    class="kdfg-play"
                    aria-label="Play video">

                    <i class="fa-solid fa-play"></i>

                </button>

                <div class="kdfg-copy">

                    <div class="kdfg-category">
                        AI CREATIVE
                    </div>

                    <h3 class="kdfg-card-title">
                        Creative AI Reel
                    </h3>

                    <div class="kdfg-sub">
                        Visual • Voice • Edit
                    </div>

                </div>

                <div class="kdfg-progress">
                    <span></span>
                </div>

            </article>


            <!-- CARD 02 -->

            <article class="kdfg-card">

                <div class="kdfg-media">

                    <div class="kdfg-fallback">
                        <i class="fa-solid fa-clapperboard"></i>
                    </div>

                    <video
                        muted
                        loop
                        playsinline
                        preload="metadata">
                    </video>

                </div>

                <div class="kdfg-overlay"></div>

                <div class="kdfg-top">

                    <div class="kdfg-type">

                        <span class="kdfg-dot"></span>

                        <span class="kdfg-type-text">
                            AI REEL
                        </span>

                    </div>

                </div>

                <button
                    type="button"
                    class="kdfg-play"
                    aria-label="Play video">

                    <i class="fa-solid fa-play"></i>

                </button>

                <div class="kdfg-copy">

                    <div class="kdfg-category">
                        SOCIAL CONTENT
                    </div>

                    <h3 class="kdfg-card-title">
                        Social AI Reel
                    </h3>

                    <div class="kdfg-sub">
                        Short • Fast • Creative
                    </div>

                </div>

                <div class="kdfg-progress">
                    <span></span>
                </div>

            </article>


            <!-- CARD 03 -->

            <article class="kdfg-card">

                <div class="kdfg-media">

                    <div class="kdfg-fallback">
                        <i class="fa-solid fa-bolt"></i>
                    </div>

                    <video
                        muted
                        loop
                        playsinline
                        preload="metadata">
                    </video>

                </div>

                <div class="kdfg-overlay"></div>

                <div class="kdfg-top">

                    <div class="kdfg-type">

                        <span class="kdfg-dot"></span>

                        <span class="kdfg-type-text">
                            AI REEL
                        </span>

                    </div>

                </div>

                <button
                    type="button"
                    class="kdfg-play"
                    aria-label="Play video">

                    <i class="fa-solid fa-play"></i>

                </button>

                <div class="kdfg-copy">

                    <div class="kdfg-category">
                        SHORT FORM
                    </div>

                    <h3 class="kdfg-card-title">
                        Dynamic AI Reel
                    </h3>

                    <div class="kdfg-sub">
                        Hook • Story • CTA
                    </div>

                </div>

                <div class="kdfg-progress">
                    <span></span>
                </div>

            </article>


            <!-- CARD 04 -->

            <article class="kdfg-card">

                <div class="kdfg-media">

                    <div class="kdfg-fallback">
                        <i class="fa-solid fa-video"></i>
                    </div>

                    <video
                        muted
                        loop
                        playsinline
                        preload="metadata">
                    </video>

                </div>

                <div class="kdfg-overlay"></div>

                <div class="kdfg-top">

                    <div class="kdfg-type">

                        <span class="kdfg-dot"></span>

                        <span class="kdfg-type-text">
                            AI REEL
                        </span>

                    </div>

                </div>

                <button
                    type="button"
                    class="kdfg-play"
                    aria-label="Play video">

                    <i class="fa-solid fa-play"></i>

                </button>

                <div class="kdfg-copy">

                    <div class="kdfg-category">
                        VISUAL STORY
                    </div>

                    <h3 class="kdfg-card-title">
                        AI Story Reel
                    </h3>

                    <div class="kdfg-sub">
                        Script • Visual • Sound
                    </div>

                </div>

                <div class="kdfg-progress">
                    <span></span>
                </div>

            </article>


            <!-- CARD 05 -->

            <article class="kdfg-card">

                <div class="kdfg-media">

                    <div class="kdfg-fallback">
                        <i class="fa-solid fa-microphone-lines"></i>
                    </div>

                    <video
                        muted
                        loop
                        playsinline
                        preload="metadata">
                    </video>

                </div>

                <div class="kdfg-overlay"></div>

                <div class="kdfg-top">

                    <div class="kdfg-type">

                        <span class="kdfg-dot"></span>

                        <span class="kdfg-type-text">
                            AI REEL
                        </span>

                    </div>

                </div>

                <button
                    type="button"
                    class="kdfg-play"
                    aria-label="Play video">

                    <i class="fa-solid fa-play"></i>

                </button>

                <div class="kdfg-copy">

                    <div class="kdfg-category">
                        AI VOICE
                    </div>

                    <h3 class="kdfg-card-title">
                        Voiceover AI Reel
                    </h3>

                    <div class="kdfg-sub">
                        Voice • Captions • Edit
                    </div>

                </div>

                <div class="kdfg-progress">
                    <span></span>
                </div>

            </article>


            <!-- CARD 06 -->

            <article class="kdfg-card">

                <div class="kdfg-media">

                    <div class="kdfg-fallback">
                        <i class="fa-solid fa-film"></i>
                    </div>

                    <video
                        muted
                        loop
                        playsinline
                        preload="metadata">
                    </video>

                </div>

                <div class="kdfg-overlay"></div>

                <div class="kdfg-top">

                    <div class="kdfg-type">

                        <span class="kdfg-dot"></span>

                        <span class="kdfg-type-text">
                            AI REEL
                        </span>

                    </div>

                </div>

                <button
                    type="button"
                    class="kdfg-play"
                    aria-label="Play video">

                    <i class="fa-solid fa-play"></i>

                </button>

                <div class="kdfg-copy">

                    <div class="kdfg-category">
                        CREATIVE VIDEO
                    </div>

                    <h3 class="kdfg-card-title">
                        Cinematic AI Reel
                    </h3>

                    <div class="kdfg-sub">
                        Concept • Motion • Edit
                    </div>

                </div>

                <div class="kdfg-progress">
                    <span></span>
                </div>

            </article>


        </div>

    </div>

</section>


<!-- =========================================================
 JAVASCRIPT
========================================================= -->

<script>
    (function() {

        const section =
            document.querySelector(
                '#kd-final-gallery'
            );

        if (!section) return;


        const gallery =
            section.querySelector(
                '.kdfg-gallery'
            );


        const tabs =
            section.querySelectorAll(
                '.kdfg-tab'
            );


        const cards =
            Array.from(
                section.querySelectorAll(
                    '.kdfg-card'
                )
            );


        /* =====================================================
           VIDEO DATA

           IMPORTANT:
           Apne MP4 / WEBM video URL ko src:"" ke andar paste karein.

           Example:
           src:"https://yourwebsite.com/video.mp4"
        ====================================================== */

        const data = {


            /* ================= AI REELS ================= */

            reels: [

                {
                    src: "",
                    type: "AI Reel",
                    category: "AI Creative",
                    title: "Creative AI Reel",
                    sub: "Visual • Voice • Edit"
                },

                {
                    src: "",
                    type: "AI Reel",
                    category: "Social Content",
                    title: "Social AI Reel",
                    sub: "Short • Fast • Creative"
                },

                {
                    src: "",
                    type: "AI Reel",
                    category: "Short Form",
                    title: "Dynamic AI Reel",
                    sub: "Hook • Story • CTA"
                },

                {
                    src: "",
                    type: "AI Reel",
                    category: "Visual Story",
                    title: "AI Story Reel",
                    sub: "Script • Visual • Sound"
                },

                {
                    src: "",
                    type: "AI Reel",
                    category: "AI Voice",
                    title: "Voiceover AI Reel",
                    sub: "Voice • Captions • Edit"
                },

                {
                    src: "",
                    type: "AI Reel",
                    category: "Creative Video",
                    title: "Cinematic AI Reel",
                    sub: "Concept • Motion • Edit"
                }

            ],


            /* ================= AI ADS ================= */

            ads: [

                {
                    src: "",
                    type: "AI Ad",
                    category: "Campaign Creative",
                    title: "Product Launch Ad",
                    sub: "Hook • Offer • CTA"
                },

                {
                    src: "",
                    type: "AI Ad",
                    category: "Performance Ad",
                    title: "Conversion Video Ad",
                    sub: "Creative • Message • CTA"
                },

                {
                    src: "",
                    type: "AI Ad",
                    category: "Social Advertising",
                    title: "AI Social Campaign",
                    sub: "Visual • Copy • Motion"
                },

                {
                    src: "",
                    type: "AI Ad",
                    category: "Promotion",
                    title: "Offer Promotion Ad",
                    sub: "Offer • Visual • Action"
                },

                {
                    src: "",
                    type: "AI Ad",
                    category: "Brand Campaign",
                    title: "AI Brand Advertisement",
                    sub: "Story • Identity • CTA"
                },

                {
                    src: "",
                    type: "AI Ad",
                    category: "Digital Campaign",
                    title: "Performance Creative",
                    sub: "Hook • Benefit • Action"
                }

            ],


            /* ================= PRODUCT VIDEOS ================= */

            product: [

                {
                    src: "",
                    type: "Product",
                    category: "Product Video",
                    title: "Premium Product Reveal",
                    sub: "Product • Motion • Detail"
                },

                {
                    src: "",
                    type: "Product",
                    category: "Product Showcase",
                    title: "AI Product Showcase",
                    sub: "Features • Visual • Edit"
                },

                {
                    src: "",
                    type: "Product",
                    category: "Product Creative",
                    title: "Cinematic Product Reel",
                    sub: "Detail • Light • Motion"
                },

                {
                    src: "",
                    type: "Product",
                    category: "Feature Video",
                    title: "Product Feature Story",
                    sub: "Benefit • Feature • CTA"
                },

                {
                    src: "",
                    type: "Product",
                    category: "Ecommerce",
                    title: "AI Ecommerce Video",
                    sub: "Product • Offer • CTA"
                },

                {
                    src: "",
                    type: "Product",
                    category: "Product Promo",
                    title: "Creative Product Promo",
                    sub: "Visual • Text • Motion"
                }

            ],


            /* ================= BRAND VIDEOS ================= */

            brand: [

                {
                    src: "",
                    type: "Brand Video",
                    category: "Brand Story",
                    title: "AI Brand Story",
                    sub: "Story • Visual • Identity"
                },

                {
                    src: "",
                    type: "Brand Video",
                    category: "Brand Film",
                    title: "Cinematic Brand Film",
                    sub: "Concept • Story • Edit"
                },

                {
                    src: "",
                    type: "Brand Video",
                    category: "Corporate",
                    title: "Modern Corporate Video",
                    sub: "Brand • Message • Visual"
                },

                {
                    src: "",
                    type: "Brand Video",
                    category: "Brand Identity",
                    title: "Visual Brand Experience",
                    sub: "Identity • Motion • Sound"
                },

                {
                    src: "",
                    type: "Brand Video",
                    category: "Business Story",
                    title: "AI Business Story",
                    sub: "Message • People • Brand"
                },

                {
                    src: "",
                    type: "Brand Video",
                    category: "Creative Film",
                    title: "Creative Brand Reel",
                    sub: "Story • Motion • Identity"
                }

            ],


            /* ================= YOUTUBE ================= */

            youtube: [

                {
                    src: "",
                    type: "YouTube",
                    category: "YouTube Video",
                    title: "AI Business Story",
                    sub: "Story • Visual • Voice"
                },

                {
                    src: "",
                    type: "YouTube",
                    category: "YouTube Content",
                    title: "AI Explainer Video",
                    sub: "Script • Voice • Visual"
                },

                {
                    src: "",
                    type: "YouTube",
                    category: "Long Form",
                    title: "Brand Story Video",
                    sub: "Brand • Story • Edit"
                },

                {
                    src: "",
                    type: "YouTube",
                    category: "Educational",
                    title: "AI Educational Video",
                    sub: "Learn • Explain • Engage"
                },

                {
                    src: "",
                    type: "YouTube",
                    category: "Product Story",
                    title: "Product Overview Video",
                    sub: "Product • Detail • Story"
                },

                {
                    src: "",
                    type: "YouTube",
                    category: "Creative Content",
                    title: "Cinematic YouTube Video",
                    sub: "Concept • Visual • Edit"
                }

            ]

        };


        /* =====================================================
           FALLBACK ICONS
        ====================================================== */

        const icons = {

            reels: [
                "fa-solid fa-wand-magic-sparkles",
                "fa-solid fa-clapperboard",
                "fa-solid fa-bolt",
                "fa-solid fa-video",
                "fa-solid fa-microphone-lines",
                "fa-solid fa-film"
            ],

            ads: [
                "fa-solid fa-bullhorn",
                "fa-solid fa-chart-line",
                "fa-solid fa-mobile-screen-button",
                "fa-solid fa-tags",
                "fa-solid fa-bullseye",
                "fa-solid fa-arrow-trend-up"
            ],

            product: [
                "fa-solid fa-box-open",
                "fa-solid fa-cube",
                "fa-solid fa-bag-shopping",
                "fa-solid fa-star",
                "fa-solid fa-cart-shopping",
                "fa-solid fa-gem"
            ],

            brand: [
                "fa-solid fa-building",
                "fa-solid fa-film",
                "fa-solid fa-briefcase",
                "fa-solid fa-fingerprint",
                "fa-solid fa-layer-group",
                "fa-solid fa-clapperboard"
            ],

            youtube: [
                "fa-brands fa-youtube",
                "fa-solid fa-circle-play",
                "fa-solid fa-film",
                "fa-solid fa-graduation-cap",
                "fa-solid fa-box-open",
                "fa-brands fa-youtube"
            ]

        };


        /* =====================================================
           STOP ALL VIDEOS
        ====================================================== */

        function stopAll() {

            cards.forEach(function(card) {

                const video =
                    card.querySelector('video');

                const icon =
                    card.querySelector(
                        '.kdfg-play i'
                    );

                video.pause();

                try {
                    video.currentTime = 0;
                } catch (e) {}

                card.classList.remove(
                    'playing'
                );

                icon.className =
                    'fa-solid fa-play';

            });

        }


        /* =====================================================
           LOAD CATEGORY
        ====================================================== */

        function loadCategory(category) {

            if (!data[category]) return;

            stopAll();


            /* YOUTUBE 16:9 */

            if (category === 'youtube') {

                gallery.classList.add(
                    'youtube-mode'
                );

            } else {

                gallery.classList.remove(
                    'youtube-mode'
                );

            }


            cards.forEach(
                function(card, index) {

                    const item =
                        data[category][index];

                    if (!item) return;


                    const video =
                        card.querySelector(
                            'video'
                        );


                    const type =
                        card.querySelector(
                            '.kdfg-type-text'
                        );


                    const cat =
                        card.querySelector(
                            '.kdfg-category'
                        );


                    const title =
                        card.querySelector(
                            '.kdfg-card-title'
                        );


                    const sub =
                        card.querySelector(
                            '.kdfg-sub'
                        );


                    const fallback =
                        card.querySelector(
                            '.kdfg-fallback i'
                        );


                    const progress =
                        card.querySelector(
                            '.kdfg-progress span'
                        );


                    type.textContent =
                        item.type;


                    cat.textContent =
                        item.category;


                    title.textContent =
                        item.title;


                    sub.textContent =
                        item.sub;


                    fallback.className =
                        icons[category][index];


                    progress.style.width =
                        '0%';


                    video.pause();


                    video.removeAttribute(
                        'src'
                    );


                    if (item.src) {

                        video.src =
                            item.src;

                    }


                    video.load();


                    /* RESTART CARD ENTRANCE */

                    card.style.animation =
                        'none';

                    void card.offsetWidth;

                    card.style.animation =
                        '';

                }
            );

        }


        /* =====================================================
           TAB CLICK
        ====================================================== */

        tabs.forEach(function(tab) {

            tab.addEventListener(
                'click',
                function() {

                    tabs.forEach(
                        function(button) {

                            button.classList.remove(
                                'active'
                            );

                        }
                    );


                    this.classList.add(
                        'active'
                    );


                    loadCategory(
                        this.dataset.category
                    );

                }
            );

        });


        /* =====================================================
           PLAY / PAUSE
        ====================================================== */

        cards.forEach(function(card) {

            const video =
                card.querySelector(
                    'video'
                );


            const button =
                card.querySelector(
                    '.kdfg-play'
                );


            const icon =
                button.querySelector('i');


            const progress =
                card.querySelector(
                    '.kdfg-progress span'
                );


            button.addEventListener(
                'click',
                function(event) {

                    event.preventDefault();

                    event.stopPropagation();


                    /* NO VIDEO URL */

                    if (
                        !video.getAttribute('src')
                    ) {
                        return;
                    }


                    /* PAUSE OTHER VIDEOS */

                    cards.forEach(
                        function(otherCard) {

                            if (
                                otherCard === card
                            ) {
                                return;
                            }


                            const otherVideo =
                                otherCard.querySelector(
                                    'video'
                                );


                            const otherIcon =
                                otherCard.querySelector(
                                    '.kdfg-play i'
                                );


                            otherVideo.pause();


                            otherCard.classList.remove(
                                'playing'
                            );


                            otherIcon.className =
                                'fa-solid fa-play';

                        }
                    );


                    /* CURRENT VIDEO */

                    if (video.paused) {

                        video.play()
                            .then(function() {

                                card.classList.add(
                                    'playing'
                                );


                                icon.className =
                                    'fa-solid fa-pause';

                            })
                            .catch(function() {});

                    } else {

                        video.pause();


                        card.classList.remove(
                            'playing'
                        );


                        icon.className =
                            'fa-solid fa-play';

                    }

                }
            );


            /* =================================================
               VIDEO PROGRESS
            ================================================= */

            video.addEventListener(
                'timeupdate',
                function() {

                    if (
                        video.duration &&
                        isFinite(video.duration)
                    ) {

                        const percentage =
                            (
                                video.currentTime /
                                video.duration
                            ) * 100;


                        progress.style.width =
                            percentage + '%';

                    }

                }
            );


            /* =================================================
               VIDEO ENDED
            ================================================= */

            video.addEventListener(
                'ended',
                function() {

                    card.classList.remove(
                        'playing'
                    );

                    icon.className =
                        'fa-solid fa-play';

                    progress.style.width =
                        '0%';

                }
            );

        });


        /* =====================================================
           DEFAULT CATEGORY
        ====================================================== */

        loadCategory('reels');

    })();
</script>