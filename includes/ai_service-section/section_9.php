<!-- =========================================================
 KING DIGITAL — AI VIDEO SERVICE
 OUR CREATIVE PROCESS
 DARK NAVY + ORANGE
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">


<style>
    /* =========================================================
 RESET
========================================================= */

    #kd-ai-process,
    #kd-ai-process * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    #kd-ai-process {

        --navy: #060F3E;
        --navy2: #0B2148;
        --navy3: #10355E;

        --orange: #F47B20;
        --orange2: #FF9145;
        --orange3: #FFAD72;

        --text: #626C80;
        --border: #E1E5EA;

        position: relative;

        width: 100%;

        overflow: hidden;

        padding: 56px 50px 60px;

         

        background:
            radial-gradient(circle at 8% 15%,
                rgba(244, 123, 32, .07),
                transparent 24%),
            radial-gradient(circle at 93% 80%,
                rgba(6, 15, 62, .05),
                transparent 26%),
            linear-gradient(180deg,
                #F8F9FA 0%,
                #FFFFFF 52%,
                #F7F8FA 100%);
    }


    /* =========================================================
 DOT DECORATION
========================================================= */

    #kd-ai-process .kdap-dots {

        position: absolute;

        left: 28px;
        top: 27px;

        width: 105px;
        height: 105px;

        opacity: .27;

        background-image:
            radial-gradient(rgba(244, 123, 32, .52) 1.2px,
                transparent 1.2px);

        background-size: 15px 15px;

        pointer-events: none;

        animation:
            kdapDots 7s ease-in-out infinite;
    }


    @keyframes kdapDots {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(12px);
        }

    }


    /* =========================================================
 TOP RIGHT RING
========================================================= */

    #kd-ai-process .kdap-ring {

        position: absolute;

        width: 250px;
        height: 250px;

        right: -135px;
        top: -135px;

        border-radius: 50%;

        border:
            1px solid rgba(244, 123, 32, .10);

        box-shadow:
            0 0 0 38px rgba(244, 123, 32, .020),
            0 0 0 76px rgba(6, 15, 62, .015);

        pointer-events: none;

        animation:
            kdapRing 9s ease-in-out infinite;
    }


    @keyframes kdapRing {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-15px, 15px);
        }

    }


    /* =========================================================
 CONTAINER
========================================================= */

    #kd-ai-process .kdap-container {

        position: relative;
        z-index: 5;

        width: 100%;
        max-width: 1380px;

        margin: 0 auto;
    }


    /* =========================================================
 HEADER
========================================================= */

    #kd-ai-process .kdap-header {

        max-width: 760px;

        margin: 0 auto 36px;

        padding: 0 0 4px;

        text-align: center;

        overflow: visible !important;
    }


    /* =========================================================
 EYEBROW
========================================================= */

    #kd-ai-process .kdap-eyebrow {

        display: inline-flex;

        align-items: center;

        gap: 9px;

        margin-bottom: 12px;

        color: var(--orange);

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .11em;

        text-transform: uppercase;
    }


    #kd-ai-process .kdap-blink {

        position: relative;

        width: 8px;
        height: 8px;

        flex: 0 0 8px;

        border-radius: 50%;

        background: var(--orange);

        box-shadow:
            0 0 0 4px rgba(244, 123, 32, .10);

        animation:
            kdapBlink 1.5s ease-in-out infinite;
    }


    #kd-ai-process .kdap-blink::after {

        content: "";

        position: absolute;

        inset: -5px;

        border-radius: 50%;

        border:
            1px solid rgba(244, 123, 32, .25);

        animation:
            kdapBlinkRing 1.5s ease-out infinite;
    }


    @keyframes kdapBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .45;
            transform: scale(.72);
        }

    }


    @keyframes kdapBlinkRing {

        0% {
            opacity: .7;
            transform: scale(.55);
        }

        100% {
            opacity: 0;
            transform: scale(1.45);
        }

    }


    /* =========================================================
 HEADING — CLIPPING FIXED
========================================================= */

    #kd-ai-process .kdap-title {

        display: block;

        margin: 0;

        padding: 3px 0 8px;

        overflow: visible !important;

        color: var(--navy);

        font-size: 42px;
        line-height: 1.18;

        font-weight: 800;

        letter-spacing: -1.7px;
    }


    #kd-ai-process .kdap-title span {

        display: block;

        padding: 2px 2px 6px;

        overflow: visible !important;

        line-height: 1.21;

        background:
            linear-gradient(90deg,
                #E86513 0%,
                var(--orange) 52%,
                var(--orange2) 100%);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;

        color: transparent;
    }


    /* =========================================================
 DESCRIPTION
========================================================= */

    #kd-ai-process .kdap-description {

        max-width: 650px;

        margin: 9px auto 0;

        color: var(--text);

        font-size: 14px;
        line-height: 1.7;

        font-weight: 500;
    }


    /* =========================================================
 PROCESS WRAP
========================================================= */

    #kd-ai-process .kdap-process-wrap {

        position: relative;

        width: 100%;

        padding-top: 7px;
    }


    /* =========================================================
 CONNECTING TRACK
========================================================= */

    #kd-ai-process .kdap-track {

        position: absolute;

        z-index: 0;

        left: 11%;
        right: 11%;

        top: 53px;

        height: 2px;

        overflow: hidden;

        border-radius: 20px;

        background: #DFE3E8;
    }


    #kd-ai-process .kdap-track::after {

        content: "";

        position: absolute;

        left: -100%;
        top: 0;

        width: 100%;
        height: 100%;

        background:
            linear-gradient(90deg,
                var(--navy2) 0%,
                var(--orange) 55%,
                var(--orange2) 100%);

        animation:
            kdapLineMove 5s ease-in-out infinite;
    }


    @keyframes kdapLineMove {

        0% {
            left: -100%;
        }

        45%,
        65% {
            left: 0;
        }

        100% {
            left: 100%;
        }

    }


    /* =========================================================
 GRID
========================================================= */

    #kd-ai-process .kdap-grid {

        position: relative;
        z-index: 2;

        display: grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        gap: 16px;

        align-items: stretch;
    }


    /* =========================================================
 PROCESS ITEM
========================================================= */

    #kd-ai-process .kdap-item {

        position: relative;

        display: flex;

        flex-direction: column;

        text-align: center;
    }


    /* =========================================================
 NUMBER NODE
========================================================= */

    #kd-ai-process .kdap-node {

        position: relative;

        width: 92px;
        height: 92px;

        margin: 0 auto 18px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #FFFFFF;

        border:
            1px solid #DCE1E6;

        box-shadow:
            0 10px 28px rgba(6, 15, 62, .08);

        transition:
            transform .35s ease,
            border-color .35s ease,
            box-shadow .35s ease;
    }


    /* INNER CIRCLE */

    #kd-ai-process .kdap-node::before {

        content: "";

        position: absolute;

        inset: 7px;

        border-radius: 50%;

        background:
            linear-gradient(135deg,
                #FFF6EF,
                #FFF0E5);

        border:
            1px solid #FFDCC5;

        transition:
            background .35s ease,
            border-color .35s ease,
            box-shadow .35s ease;
    }


    /* NODE NUMBER */

    #kd-ai-process .kdap-number {

        position: relative;
        z-index: 3;

        color: var(--orange);

        font-size: 23px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: -.7px;

        transition:
            color .35s ease,
            transform .35s ease;
    }


    /* NODE HOVER */

    #kd-ai-process .kdap-item:hover .kdap-node {

        transform: translateY(-5px);

        border-color:
            rgba(244, 123, 32, .35);

        box-shadow:
            0 17px 36px rgba(6, 15, 62, .14);
    }


    #kd-ai-process .kdap-item:hover .kdap-node::before {

        border-color: transparent;

        background:
            linear-gradient(135deg,
                var(--navy2) 0%,
                var(--navy3) 45%,
                var(--orange) 100%);

        box-shadow:
            inset 0 0 0 1px rgba(255, 255, 255, .08);
    }


    #kd-ai-process .kdap-item:hover .kdap-number {

        color: #FFFFFF;

        transform: scale(1.06);
    }


    /* =========================================================
 PROCESS CARD
========================================================= */

    #kd-ai-process .kdap-card {

        position: relative;

        flex: 1;

        min-height: 205px;

        padding: 23px 20px 21px;

        overflow: hidden;

        border-radius: 16px;

        text-align: left;

        background: #FFFFFF;

        border:
            1px solid var(--border);

        box-shadow:
            0 7px 22px rgba(6, 15, 62, .045);

        transition:
            transform .35s ease,
            border-color .35s ease,
            box-shadow .35s ease;
    }


    /* =========================================================
 CARD TOP LINE
========================================================= */

    #kd-ai-process .kdap-card::before {

        content: "";

        position: absolute;

        left: 0;
        top: 0;

        width: 100%;
        height: 3px;

        transform: scaleX(.20);

        transform-origin: left;

        background:
            linear-gradient(90deg,
                var(--navy2) 0%,
                var(--orange) 52%,
                var(--orange2) 100%);

        transition:
            transform .4s ease;
    }


    #kd-ai-process .kdap-item:hover .kdap-card {

        transform: translateY(-4px);

        border-color:
            rgba(244, 123, 32, .28);

        box-shadow:
            0 16px 36px rgba(6, 15, 62, .09);
    }


    #kd-ai-process .kdap-item:hover .kdap-card::before {

        transform: scaleX(1);
    }


    /* =========================================================
 CARD LABEL
========================================================= */

    #kd-ai-process .kdap-card-label {

        margin-bottom: 9px;

        color: var(--orange);

        font-size: 10px;
        line-height: 1;

        font-weight: 800;

        letter-spacing: .085em;

        text-transform: uppercase;
    }


    /* =========================================================
 CARD HEADING
========================================================= */

    #kd-ai-process .kdap-card h3 {

        margin: 0 0 9px;

        padding: 1px 0 2px;

        color: var(--navy);

        font-size: 18px;
        line-height: 1.4;

        font-weight: 800;

        letter-spacing: -.3px;
    }


    /* =========================================================
 CARD PARAGRAPH
========================================================= */

    #kd-ai-process .kdap-card p {

        margin: 0;

        color: #667085;

        font-size: 13px;
        line-height: 1.62;

        font-weight: 500;
    }


    /* =========================================================
 STATUS
========================================================= */

    #kd-ai-process .kdap-status {

        margin-top: 15px;

        display: flex;

        align-items: center;

        gap: 8px;

        color: #505B71;

        font-size: 11px;
        line-height: 1.3;

        font-weight: 700;
    }


    #kd-ai-process .kdap-status-dot {

        width: 7px;
        height: 7px;

        flex: 0 0 7px;

        border-radius: 50%;

        background: var(--orange);

        box-shadow:
            0 0 0 4px rgba(244, 123, 32, .08);
    }


    /* =========================================================
 SUBTLE CARD CORNER GLOW
========================================================= */

    #kd-ai-process .kdap-card::after {

        content: "";

        position: absolute;

        width: 90px;
        height: 90px;

        right: -55px;
        bottom: -55px;

        border-radius: 50%;

        background:
            rgba(244, 123, 32, .055);

        pointer-events: none;

        transition:
            transform .4s ease,
            background .4s ease;
    }


    #kd-ai-process .kdap-item:hover .kdap-card::after {

        transform: scale(1.4);

        background:
            rgba(244, 123, 32, .09);
    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:1000px) {

        #kd-ai-process {

            padding:
                53px 30px 56px;
        }


        #kd-ai-process .kdap-grid {

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 27px 17px;
        }


        #kd-ai-process .kdap-track {

            display: none;
        }


        #kd-ai-process .kdap-card {

            min-height: 190px;
        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        #kd-ai-process {

            padding:
                42px 17px 44px;
        }


        #kd-ai-process .kdap-dots {

            display: none;
        }


        #kd-ai-process .kdap-header {

            margin-bottom: 27px;
        }


        #kd-ai-process .kdap-eyebrow {

            margin-bottom: 10px;

            font-size: 9px;
        }


        /* HEADING */

        #kd-ai-process .kdap-title {

            font-size: 32px;

            line-height: 1.21;

            letter-spacing: -1.1px;

            padding: 3px 0 7px;

            overflow: visible !important;
        }


        #kd-ai-process .kdap-title span {

            line-height: 1.24;

            padding: 2px 1px 5px;

            overflow: visible !important;
        }


        #kd-ai-process .kdap-description {

            margin-top: 7px;

            font-size: 13px;

            line-height: 1.65;
        }


        /* GRID */

        #kd-ai-process .kdap-grid {

            grid-template-columns: 1fr;

            gap: 14px;
        }


        #kd-ai-process .kdap-item {

            display: grid;

            grid-template-columns:
                59px minmax(0, 1fr);

            gap: 12px;

            align-items: start;

            text-align: left;
        }


        /* NODE */

        #kd-ai-process .kdap-node {

            width: 56px;
            height: 56px;

            margin: 5px 0 0;
        }


        #kd-ai-process .kdap-node::before {

            inset: 5px;
        }


        #kd-ai-process .kdap-number {

            font-size: 16px;
        }


        /* CARD */

        #kd-ai-process .kdap-card {

            min-height: 0;

            padding:
                18px 16px;

            border-radius: 14px;
        }


        #kd-ai-process .kdap-card-label {

            margin-bottom: 7px;

            font-size: 9px;
        }


        #kd-ai-process .kdap-card h3 {

            margin-bottom: 6px;

            font-size: 16px;
        }


        #kd-ai-process .kdap-card p {

            font-size: 12px;

            line-height: 1.58;
        }


        #kd-ai-process .kdap-status {

            margin-top: 11px;

            font-size: 10px;
        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        #kd-ai-process .kdap-title {

            font-size: 29px;

            line-height: 1.22;
        }


        #kd-ai-process .kdap-title span {

            line-height: 1.25;
        }


        #kd-ai-process .kdap-item {

            grid-template-columns:
                51px minmax(0, 1fr);

            gap: 9px;
        }


        #kd-ai-process .kdap-node {

            width: 49px;
            height: 49px;
        }


        #kd-ai-process .kdap-number {

            font-size: 14px;
        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kd-ai-process *,
        #kd-ai-process *::before,
        #kd-ai-process *::after {

            animation: none !important;
            transition: none !important;
        }

    }
</style>


<!-- =========================================================
 HTML
========================================================= -->

<section id="kd-ai-process">


    <!-- BACKGROUND -->

    <span class="kdap-dots"></span>
    <span class="kdap-ring"></span>


    <div class="kdap-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="kdap-header">


            <div class="kdap-eyebrow">

                <span class="kdap-blink"></span>

                OUR CREATIVE PROCESS

            </div>


            <h2 class="kdap-title">

                From Your Idea To A

                <span>
                    Finished AI Video.
                </span>

            </h2>


            <p class="kdap-description">

                A clear production process keeps every video focused.
                We take your idea through creative planning, AI production
                and final editing to create content ready for your audience.

            </p>


        </div>


        <!-- =================================================
             PROCESS
        ================================================== -->

        <div class="kdap-process-wrap">


            <!-- ANIMATED CONNECTING LINE -->

            <div class="kdap-track"></div>


            <div class="kdap-grid">


                <!-- =================================================
                     STEP 01
                ================================================== -->

                <div class="kdap-item">


                    <div class="kdap-node">

                        <span class="kdap-number">
                            01
                        </span>

                    </div>


                    <div class="kdap-card">


                        <div class="kdap-card-label">
                            YOUR BRIEF
                        </div>


                        <h3>
                            Share The Idea
                        </h3>


                        <p>

                            Tell us what you want to communicate,
                            who the video is for and where you
                            plan to use the content.

                        </p>


                        <div class="kdap-status">

                            <span class="kdap-status-dot"></span>

                            Goal • Audience • Platform

                        </div>


                    </div>


                </div>


                <!-- =================================================
                     STEP 02
                ================================================== -->

                <div class="kdap-item">


                    <div class="kdap-node">

                        <span class="kdap-number">
                            02
                        </span>

                    </div>


                    <div class="kdap-card">


                        <div class="kdap-card-label">
                            CREATIVE DIRECTION
                        </div>


                        <h3>
                            Shape The Story
                        </h3>


                        <p>

                            We develop the script, hook, message
                            flow and visual direction so every
                            scene has a clear purpose.

                        </p>


                        <div class="kdap-status">

                            <span class="kdap-status-dot"></span>

                            Script • Hook • Scenes

                        </div>


                    </div>


                </div>


                <!-- =================================================
                     STEP 03
                ================================================== -->

                <div class="kdap-item">


                    <div class="kdap-node">

                        <span class="kdap-number">
                            03
                        </span>

                    </div>


                    <div class="kdap-card">


                        <div class="kdap-card-label">
                            AI PRODUCTION
                        </div>


                        <h3>
                            Bring It To Life
                        </h3>


                        <p>

                            Visuals, motion and voice are produced
                            and combined to transform the creative
                            direction into an engaging video.

                        </p>


                        <div class="kdap-status">

                            <span class="kdap-status-dot"></span>

                            Visual • Motion • Voice

                        </div>


                    </div>


                </div>


                <!-- =================================================
                     STEP 04
                ================================================== -->

                <div class="kdap-item">


                    <div class="kdap-node">

                        <span class="kdap-number">
                            04
                        </span>

                    </div>


                    <div class="kdap-card">


                        <div class="kdap-card-label">
                            FINAL DELIVERY
                        </div>


                        <h3>
                            Edit. Polish. Deliver.
                        </h3>


                        <p>

                            We refine the pacing, captions,
                            transitions and sound before preparing
                            the final video in the required format.

                        </p>


                        <div class="kdap-status">

                            <span class="kdap-status-dot"></span>

                            Edit • Review • Export

                        </div>


                    </div>


                </div>


            </div>


        </div>


    </div>


</section>