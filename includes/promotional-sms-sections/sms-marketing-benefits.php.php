<style>
    #kdSmsEffectiveness {

        --kd-primary: #b61f29;
        --kd-primary-dark: #981923;

        --kd-navy: #0a0a0a;
        --kd-heading: #0a0a0a;

        --kd-text: #667085;
        --kd-light-text: #8a94a3;

        --kd-border: #e6eaf0;

        position: relative;

        width: 100%;

        padding: 60px 20px;

        overflow: hidden;


        background-color: #7b7b7b1a;
        /* background:
            radial-gradient(circle at 8% 30%,
                rgba(182, 31, 41, .045),
                transparent 24%),
            radial-gradient(circle at 90% 65%,
                rgba(55, 117, 190, .055),
                transparent 28%),
            #ffffff; */

        /* font-family:
            Inter,
            Arial,
            Helvetica,
            sans-serif; */
    }


    /* =========================================================
        BACKGROUND SHAPES
        ========================================================= */

    #kdSmsEffectiveness .kd-effect-bg {
        position: absolute;

        border-radius: 50%;

        pointer-events: none;
    }

    #kdSmsEffectiveness .kd-effect-bg-one {

        width: 330px;
        height: 330px;

        top: -180px;
        right: -130px;

        border:
            1px solid rgba(182, 31, 41, 0.16);

    }

    #kdSmsEffectiveness .kd-effect-bg-two {

        width: 250px;
        height: 250px;

        bottom: -170px;
        left: -100px;

        background:
            rgba(182, 31, 41, 0.09);

    }


    /* =========================================================
        CONTAINER
        ========================================================= */

    #kdSmsEffectiveness .kd-effect-container {

        position: relative;

        z-index: 2;

        width: 100%;

        max-width: 1220px;

        margin: 0 auto;

    }


    /* =========================================================
            SECTION HEADING
            ========================================================= */

    #kdSmsEffectiveness .kd-effect-heading {

        max-width: 750px;

        margin:
            0 auto 48px;

        text-align: center;

    }

    #kdSmsEffectiveness .kd-effect-badge {

        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding:
            8px 14px;

        margin-bottom: 16px;

        border:
            1px solid rgba(182, 31, 41, .14);

        border-radius: 50px;

        background:
            rgba(182, 31, 41, .045);

        color:
            var(--kd-primary);

        font-size: 11px;

        font-weight: 700;

        letter-spacing: .5px;

        text-transform: uppercase;

    }

    #kdSmsEffectiveness .kd-effect-badge-dot {

        width: 7px;
        height: 7px;

        border-radius: 50%;

        background:
            var(--kd-primary);

    }

    #kdSmsEffectiveness .kd-effect-heading h2 {

        margin: 0;

        color:
            var(--kd-navy);

        font-size:
            clamp(32px,
                4vw,
                44px);

        line-height: 1.15;

        font-weight: 800;

        letter-spacing: -1.5px;

    }

    #kdSmsEffectiveness .kd-effect-heading h2 span {

        display: block;

        color:
            var(--kd-primary);

    }

    #kdSmsEffectiveness .kd-effect-heading p {

        max-width: 630px;

        margin:
            16px auto 0;

        color:
            var(--kd-text);

        font-size: 15px;

        line-height: 1.7;

    }


    /* =========================================================
        MAIN GRID
        ========================================================= */

    #kdSmsEffectiveness .kd-effect-grid {

        display: grid;

        grid-template-columns:
            minmax(0, 1fr) minmax(0, 1fr);

        align-items: center;

        gap: 70px;

    }


    /* =========================================================
            LEFT CONTENT
            ========================================================= */

    #kdSmsEffectiveness .kd-effect-content {

        min-width: 0;

    }

    #kdSmsEffectiveness .kd-effect-small-title {

        display: flex;

        align-items: center;

        gap: 10px;

        margin-bottom: 13px;

        color:
            var(--kd-primary);

        font-size: 11px;

        font-weight: 700;

        letter-spacing: .5px;

        text-transform: uppercase;

    }

    #kdSmsEffectiveness .kd-effect-small-title>span {

        width: 34px;

        height: 2px;

        border-radius: 20px;

        background:
            var(--kd-primary);

    }

    #kdSmsEffectiveness .kd-effect-content h3 {

        max-width: 540px;

        margin:
            0 0 15px;

        color:
            var(--kd-heading);

        font-size:
            clamp(28px,
                3vw,
                38px);

        line-height: 1.2;

        font-weight: 800;

        letter-spacing: -1px;

    }

    #kdSmsEffectiveness .kd-effect-content h3 strong {

        color:
            var(--kd-primary);

    }

    #kdSmsEffectiveness .kd-effect-description {

        max-width: 550px;

        margin:
            0 0 27px;

        color:
            var(--kd-text);

        font-size: 14px;

        line-height: 1.8;

    }


    /* =========================================================
            BENEFIT ITEMS
            ========================================================= */

    #kdSmsEffectiveness .kd-effect-benefit {

        display: flex;

        align-items: flex-start;

        gap: 14px;

        padding:
            15px 0;

        border-bottom:
            1px solid var(--kd-border);

    }

    #kdSmsEffectiveness .kd-effect-icon {

        width: 42px;
        height: 42px;

        flex:
            0 0 42px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 12px;

        color: #ffffff;

        font-size: 16px;

        font-weight: 800;

    }

    #kdSmsEffectiveness .kd-effect-icon-red {

        background:
            linear-gradient(135deg,
                #ca303a,
                #a81721);

        box-shadow:
            0 9px 20px rgba(182, 31, 41, .15);

    }

    #kdSmsEffectiveness .kd-effect-icon-blue {

        background:
            linear-gradient(135deg,
                #528ddd,
                #2e63b6);

        box-shadow:
            0 9px 20px rgba(46, 99, 182, .14);

    }

    #kdSmsEffectiveness .kd-effect-icon-green {

        background:
            linear-gradient(135deg,
                #42ae8e,
                #178466);

        box-shadow:
            0 9px 20px rgba(23, 132, 102, .14);

    }

    #kdSmsEffectiveness .kd-effect-benefit-content h4 {

        margin:
            1px 0 5px;

        color:
            #050505;

        font-size: 15px;

        line-height: 1.4;

        font-weight: 700;

    }

    #kdSmsEffectiveness .kd-effect-benefit-content p {

        margin: 0;

        color:
            var(--kd-light-text);

        font-size: 11px;

        line-height: 1.65;

    }


    /* =========================================================
            BUTTON
            ========================================================= */

    #kdSmsEffectiveness .kd-effect-actions {

        margin-top: 27px;

    }

    #kdSmsEffectiveness .kd-effect-button {

        min-height: 48px;

        display: inline-flex;

        align-items: center;

        justify-content: center;

        gap: 13px;

        padding:
            11px 20px;

        border-radius: 9px;

        background:
            linear-gradient(135deg,
                #c72c35,
                #a81721);

        color: #ffffff !important;

        box-shadow:
            0 13px 28px rgba(182, 31, 41, .17);

        text-decoration: none !important;

        font-size: 13px;

        font-weight: 700;

        transition:
            transform .25s ease,
            box-shadow .25s ease;

    }

    #kdSmsEffectiveness .kd-effect-button:hover {

        color: #ffffff !important;

        transform:
            translateY(-3px);

        box-shadow:
            0 18px 35px rgba(182, 31, 41, .24);

    }

    #kdSmsEffectiveness .kd-effect-button span {

        font-size: 19px;

        line-height: 1;

    }


    /* =========================================================
            RIGHT VISUAL AREA
            ========================================================= */

    #kdSmsEffectiveness .kd-effect-visual {

        position: relative;

        min-height: 490px;

        display: flex;

        align-items: center;

        justify-content: center;

    }


    /* =========================================================
            IMAGE BACKGROUND CIRCLE
            ========================================================= */

    #kdSmsEffectiveness .kd-effect-image-circle {

        position: absolute;

        width: 430px;

        max-width: 100%;

        aspect-ratio: 1 / 1;

        border-radius: 50%;

        background: radial-gradient(circle at center, #aac5e7 0%, #f1f7ff 55%, rgba(237, 242, 248, .25) 75%);


    }


    /* =========================================================
                DECORATIVE RINGS
                ========================================================= */

    #kdSmsEffectiveness .kd-effect-ring {

        position: absolute;

        border-radius: 50%;

        pointer-events: none;

    }

    #kdSmsEffectiveness .kd-effect-ring-one {

        width: 350px;
        height: 350px;

        border:
            1px dashed rgba(182, 31, 41, 0.36);

        animation: homeAdsSpin12 40s linear infinite;

    }


    @keyframes homeAdsSpin12 {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    #kdSmsEffectiveness .kd-effect-ring-two {

        width: 460px;
        height: 460px;

        border:
            1px dashed rgba(55, 118, 190, 0.41);

        animation: homeAdsSpinReverse12 30s linear infinite;


    }


    @keyframes homeAdsSpinReverse12 {
        0% {
            transform: rotate(360deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    /* =========================================================
                IMAGE
                ========================================================= */

    #kdSmsEffectiveness .kd-effect-image-wrap {

        position: relative;

        z-index: 2;

        width: 390px;

        max-width: 78%;

        display: flex;

        align-items: center;

        justify-content: center;

        animation: kingDigSocialFloat1 3.8s ease-in-out infinite;

    }


    @keyframes kingDigSocialFloat1 {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-12px);
        }
    }



    #kdSmsEffectiveness .kd-effect-main-image {

        display: block;

        width: 100%;

        height: auto;

        max-height: 430px;

        object-fit: contain;

        /* Transparent SVG image - no white box */
        background: transparent;

        filter:
            drop-shadow(0 20px 30px rgba(31, 45, 61, .12));

    }


    /* =========================================================
                FLOATING CARDS
                ========================================================= */

    #kdSmsEffectiveness .kd-effect-floating {

        position: absolute;

        z-index: 5;

        display: flex;

        align-items: center;

        gap: 9px;

        padding:
            10px 13px;

        border:
            1px solid rgba(224, 230, 237, .95);

        border-radius: 13px;

        background:
            rgba(255, 255, 255, .96);

        box-shadow:
            0 15px 35px rgba(31, 45, 61, .10);

    }

    #kdSmsEffectiveness .kd-effect-floating-top {

        top: 15%;

        left: 0;

        animation: kingDigSocialFloat2 3.8s ease-in-out infinite;

    }


    @keyframes kingDigSocialFloat2 {

        0%,
        100% {
            transform: translateY(-12px);
        }

        50% {
            transform: translateY(0px);
        }
    }


    #kdSmsEffectiveness .kd-effect-floating-bottom {

        right: 0;

        bottom: 16%;
        animation: kingDigSocialFloat2 3.8s ease-in-out infinite;
    }

    #kdSmsEffectiveness .kd-effect-floating-icon {

        width: 34px;
        height: 34px;

        flex:
            0 0 34px;

        display: flex;

        align-items: center;

        justify-content: center;

        border-radius: 10px;

        color: #ffffff;

        font-size: 13px;

        font-weight: 700;

    }

    #kdSmsEffectiveness .kd-effect-float-red {

        background:
            var(--kd-primary);

    }

    #kdSmsEffectiveness .kd-effect-float-green {

        background:
            #208c70;

    }

    #kdSmsEffectiveness .kd-effect-floating strong {

        display: block;

        margin-bottom: 2px;

        color:
            #344154;

        font-size: 11px;

        font-weight: 700;

    }

    #kdSmsEffectiveness .kd-effect-floating span {

        display: block;

        color:
            #8a94a2;

        font-size: 9px;

        white-space: nowrap;

    }


    /* =========================================================
                MESSAGE BUBBLE
                ========================================================= */

    #kdSmsEffectiveness .kd-effect-message-bubble {

        position: absolute;

        z-index: 4;

        top: 25%;

        right: 4%;

        display: flex;

        align-items: center;

        gap: 4px;

        padding:
            11px 14px;

        border-radius:
            15px 15px 4px 15px;

        background:
            var(--kd-primary);

        box-shadow:
            0 12px 25px rgba(182, 31, 41, .18);

        animation: kingDigSocialFloat3 3.8s ease-in-out infinite;
    }



    @keyframes kingDigSocialFloat3 {

        0%,
        80% {
            transform: translateY(0px);
        }

        40% {
            transform: translateY(-12px);
        }
    }


    #kdSmsEffectiveness .kd-effect-message-bubble>span {

        width: 5px;
        height: 5px;

        border-radius: 50%;

        background: #ffffff;

        opacity: .9;

    }


    /* =========================================================
                TABLET
                ========================================================= */

    @media (max-width: 1024px) {

        #kdSmsEffectiveness {

            padding:
                55px 20px;

        }

        #kdSmsEffectiveness .kd-effect-grid {

            gap: 35px;

        }

        #kdSmsEffectiveness .kd-effect-visual {

            min-height: 440px;

        }

        #kdSmsEffectiveness .kd-effect-image-wrap {

            width: 340px;

        }

        #kdSmsEffectiveness .kd-effect-ring-two {

            width: 400px;
            height: 400px;

        }

    }


    /* =========================================================
                MOBILE
                ========================================================= */

    @media (max-width: 767px) {

        #kdSmsEffectiveness {

            padding:
                45px 15px;

        }

        #kdSmsEffectiveness .kd-effect-heading {

            margin-bottom: 35px;

        }

        #kdSmsEffectiveness .kd-effect-heading h2 {

            font-size: 32px;

        }

        #kdSmsEffectiveness .kd-effect-heading p {

            font-size: 13px;

        }

        #kdSmsEffectiveness .kd-effect-grid {

            grid-template-columns: 1fr;

            gap: 35px;

        }

        #kdSmsEffectiveness .kd-effect-content {

            text-align: center;

        }

        #kdSmsEffectiveness .kd-effect-small-title {

            justify-content: center;

        }

        #kdSmsEffectiveness .kd-effect-description {

            margin-left: auto;
            margin-right: auto;

            font-size: 13px;

        }

        #kdSmsEffectiveness .kd-effect-benefit {

            text-align: left;

        }

        #kdSmsEffectiveness .kd-effect-visual {

            min-height: 430px;

        }

        #kdSmsEffectiveness .kd-effect-floating-top {

            left: 2%;

        }

        #kdSmsEffectiveness .kd-effect-floating-bottom {

            right: 2%;

        }

    }


    /* =========================================================
            SMALL MOBILE
            ========================================================= */

    @media (max-width: 480px) {

        #kdSmsEffectiveness {

            padding:
                40px 12px;

        }

        #kdSmsEffectiveness .kd-effect-badge {

            padding:
                7px 11px;

            font-size: 9px;

        }

        #kdSmsEffectiveness .kd-effect-heading h2 {

            font-size: 28px;

            letter-spacing: -1px;

        }

        #kdSmsEffectiveness .kd-effect-heading p {

            font-size: 12px;

        }

        #kdSmsEffectiveness .kd-effect-content h3 {

            font-size: 27px;

        }

        #kdSmsEffectiveness .kd-effect-description {

            font-size: 12px;

        }

        #kdSmsEffectiveness .kd-effect-benefit {

            gap: 11px;

            padding:
                14px 0;

        }

        #kdSmsEffectiveness .kd-effect-icon {

            width: 38px;
            height: 38px;

            flex-basis: 38px;

            border-radius: 10px;

            font-size: 14px;

        }

        #kdSmsEffectiveness .kd-effect-benefit-content h4 {

            font-size: 13px;

        }

        #kdSmsEffectiveness .kd-effect-benefit-content p {

            font-size: 10px;

        }

        #kdSmsEffectiveness .kd-effect-button {

            width: 100%;

        }

        #kdSmsEffectiveness .kd-effect-visual {

            min-height: 360px;

        }

        #kdSmsEffectiveness .kd-effect-image-circle {

            width: 300px;

        }

        #kdSmsEffectiveness .kd-effect-ring-one {

            width: 260px;
            height: 260px;

        }

        #kdSmsEffectiveness .kd-effect-ring-two {

            width: 330px;
            height: 330px;

        }

        #kdSmsEffectiveness .kd-effect-image-wrap {

            width: 255px;

            max-width: 72%;

        }

        #kdSmsEffectiveness .kd-effect-main-image {

            max-height: 300px;

        }

        #kdSmsEffectiveness .kd-effect-floating {

            padding:
                8px 9px;

            gap: 7px;

            border-radius: 10px;

        }

        #kdSmsEffectiveness .kd-effect-floating-icon {

            width: 28px;
            height: 28px;

            flex-basis: 28px;

            border-radius: 8px;

            font-size: 11px;

        }

        #kdSmsEffectiveness .kd-effect-floating strong {

            font-size: 9px;

        }

        #kdSmsEffectiveness .kd-effect-floating span {

            font-size: 7px;

        }

        #kdSmsEffectiveness .kd-effect-floating-top {

            top: 11%;

            left: 0;

        }

        #kdSmsEffectiveness .kd-effect-floating-bottom {

            right: 0;

            bottom: 10%;

        }

        #kdSmsEffectiveness .kd-effect-message-bubble {

            top: 21%;

            right: 5%;

            padding:
                8px 10px;

        }

        #kdSmsEffectiveness .kd-effect-message-bubble>span {

            width: 4px;
            height: 4px;

        }

    }
</style>

<section class="kd-sms-effectiveness" id="kdSmsEffectiveness">

 <div class="decor-hero-orb o21"></div>
  <div class="decor-hero-orb o22"></div>
  <div class="decor-hero-orb o23"></div>
    <!-- Decorative Background -->
    <div class="kd-effect-bg kd-effect-bg-one"></div>
    <div class="kd-effect-bg kd-effect-bg-two"></div>

    <div class="kd-effect-container">

        <!-- TOP HEADING -->
        <div class="kd-effect-heading">

            <div class="kd-effect-badge">
                <span class="kd-effect-badge-dot"></span>
                SMS Marketing Benefits
            </div>

            <h2>
                Unmatched SMS Marketing
                <span>Effectiveness</span>
            </h2>

            <p>
                Reach your audience faster, improve engagement and build stronger
                customer connections with powerful SMS marketing solutions.
            </p>

        </div>


        <!-- MAIN CONTENT -->
        <div class="kd-effect-grid">


            <div class="kd-effect-content">

                <div class="kd-effect-small-title">
                    <span></span>
                    Why Bulk SMS Works
                </div>

                <h3>
                    Connect Faster. Engage Better.
                    <strong>Grow Smarter.</strong>
                </h3>

                <p class="kd-effect-description">
                    SMS marketing gives your business a direct way to reach customers.
                    Deliver promotional offers, important updates and personalised
                    messages straight to your audience without unnecessary delays.
                </p>


                <!-- BENEFIT 1 -->
                <div class="kd-effect-benefit">

                    <div class="kd-effect-icon kd-effect-icon-red">
                        <span>⚡</span>
                    </div>

                    <div class="kd-effect-benefit-content">
                        <h4>Quick Engagement</h4>
                        <p>
                            Reach your customers instantly and encourage faster
                            interaction with your business.
                        </p>
                    </div>

                </div>


                <!-- BENEFIT 2 -->
                <div class="kd-effect-benefit">

                    <div class="kd-effect-icon kd-effect-icon-blue">
                        <span>✓</span>
                    </div>

                    <div class="kd-effect-benefit-content">
                        <h4>High Open Rates</h4>
                        <p>
                            SMS messages are noticed quickly, helping your campaigns
                            achieve better visibility and engagement.
                        </p>
                    </div>

                </div>


                <!-- BENEFIT 3 -->
                <div class="kd-effect-benefit">

                    <div class="kd-effect-icon kd-effect-icon-green">
                        <span>↗</span>
                    </div>

                    <div class="kd-effect-benefit-content">
                        <h4>Exceptional Reach</h4>
                        <p>
                            Connect with a wider audience through a fast and reliable
                            communication channel.
                        </p>
                    </div>

                </div>


                <!-- BUTTON -->
                <div class="kd-effect-actions">

                    <a href="#enquiry" class="kd-effect-button">
                        Start Your SMS Campaign
                        <span>→</span>
                    </a>

                </div>

            </div>


            <div class="kd-effect-visual">


                <!-- Circle Background -->
                <div class="kd-effect-image-circle"></div>


                <!-- Decorative Ring -->
                <div class="kd-effect-ring kd-effect-ring-one"></div>
                <div class="kd-effect-ring kd-effect-ring-two"></div>


                <!-- IMAGE -->
                <div class="kd-effect-image-wrap">

                    <img
                        src="assets/images/img/sms_phone_img.png"
                        alt="SMS Marketing and Mobile Communication"
                        class="kd-effect-main-image"
                        loading="lazy">

                </div>


                <!-- Floating SMS Card -->
                <div class="kd-effect-floating kd-effect-floating-top">

                    <div class="kd-effect-floating-icon kd-effect-float-red">
                        ✉
                    </div>

                    <div>
                        <strong>Instant SMS</strong>
                        <span>Fast message delivery</span>
                    </div>

                </div>


                <!-- Floating Reach Card -->
                <div class="kd-effect-floating kd-effect-floating-bottom">

                    <div class="kd-effect-floating-icon kd-effect-float-green">
                        ✓
                    </div>

                    <div>
                        <strong>Better Reach</strong>
                        <span>Connect instantly</span>
                    </div>

                </div>


                <!-- Small Message Bubble -->
                <div class="kd-effect-message-bubble">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>


            </div>

        </div>

    </div>

</section>