<section class="kd-next-intro" id="kdNextIntro">


    <div class="kd-next-intro__circle kd-next-intro__circle--left" aria-hidden="true"></div>
    <div class="kd-next-intro__circle kd-next-intro__circle--right" aria-hidden="true"></div>
    <div class="kd-next-intro__dots" aria-hidden="true"></div>

    <div class="kd-next-intro__container">

        <div class="kd-next-intro__content">

            <div class="kd-next-intro__eyebrow">
                <span class="kd-next-intro__dot"></span>
                <span>Powerful SMS Solutions</span>
            </div>


            <h2 class="kd-next-intro__title">
                Connect Better. Reach Further.<br>
                <span>Grow Your Business Faster.</span>
            </h2>

            <div class="kd-next-intro__line"></div>

            <p class="kd-next-intro__description">
                Connect with your customers through fast, reliable and effective SMS
                communication. From promotional campaigns to important updates and
                secure OTP delivery, our smart SMS solutions help your business
                reach the right audience at the right time.
            </p>

        </div>

    </div>

</section>


<style>
    #kdNextIntro {
        --kd-red: #b4232b;
        --kd-red-dark: #962027;
        --kd-red-light: #f8eeee;
        --kd-navy: #26364a;
        --kd-text: #5d6a79;
        --kd-border: rgba(38, 54, 74, .12);

        position: relative;
        overflow: hidden;
        isolation: isolate;

        padding: 80px 20px 84px;
        /* background:linear-gradient( 226deg , rgba(176,26,39,0.84) 10% , rgb(211, 157, 157) 52% , rgba(176,26,39,0.84) 90% ); */
       
                background:
            radial-gradient(circle at 50% 45%,
                rgba(180, 35, 43, .045) 0%,
                rgba(180, 35, 43, 0) 36%),
            linear-gradient(180deg,
                #ffffff 0%,
                #fafafa 100%);

            font-family: 'Segoe UI', Roboto, Helvetica Neue, Arial, sans-serif;
    }



    #kdNextIntro .kd-next-intro__container {
        position: relative;
        z-index: 2;

        width: 100%;
        max-width: 1050px;

        margin: 0 auto;
    }


    #kdNextIntro .kd-next-intro__content {
        width: 100%;
        max-width: 880px;

        margin: 0 auto;

        text-align: center;
    }


    #kdNextIntro .kd-next-intro__eyebrow {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        padding: 10px 18px;

        margin: 0 auto 18px;

        border: 1px solid var(--kd-border);
        border-radius: 100px;

        background: rgba(255, 255, 255, .90);

        box-shadow:
            0 8px 28px rgba(35, 48, 65, .06);

        color: var(--kd-red-dark);

        font-size: 12px;
        font-weight: 700;

        letter-spacing: .06em;
        line-height: 1;

        text-transform: uppercase;
    }


    #kdNextIntro .kd-next-intro__dot {
        width: 8px;
        height: 8px;

        flex: 0 0 8px;

        border-radius: 50%;

        background: var(--kd-red);

        box-shadow:
            0 0 0 5px rgba(180, 35, 43, .08);

        animation: kdNextPulse 1.8s ease-in-out infinite;
    }


    @keyframes kdNextPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;

            box-shadow:
                0 0 0 5px rgba(180, 35, 43, .08);
        }

        50% {
            transform: scale(.78);
            opacity: .65;

            box-shadow:
                0 0 0 10px rgba(180, 35, 43, .02);
        }

    }


    #kdNextIntro .kd-next-intro__title {
        margin: 0;

        color: black;

        font-size: clamp(38px, 3.3vw, 44px);

        font-weight: 800;

        line-height: 1.15;

        letter-spacing: -.04em;
    }


    #kdNextIntro .kd-next-intro__title span {
        color: var(--kd-red);
    }


    #kdNextIntro .kd-next-intro__line {
        width: 64px;
        height: 3px;

        margin: 24px auto 22px;

        border-radius: 100px;

        background:
            linear-gradient(90deg,
                var(--kd-red-dark),
                #d04b51);
    }



    #kdNextIntro .kd-next-intro__description {
        width: 100%;
        max-width: 780px;

        margin: 0 auto;

        color: black;

        font-size: 14px;
        font-weight: 400;

        line-height: 1.8;

        letter-spacing: 0;
    }



    #kdNextIntro .kd-next-intro__circle {
        position: absolute;

        z-index: 0;

        border-radius: 50%;

        pointer-events: none;
    }


    #kdNextIntro .kd-next-intro__circle--left {
        width: 330px;
        height: 330px;

        top: -190px;
        left: -190px;

        border:
            1px solid rgba(180, 35, 43, .11);

        box-shadow:
            0 0 0 65px rgba(180, 35, 43, .02);
    }



    #kdNextIntro .kd-next-intro__circle--right {
        width: 390px;
        height: 390px;

        right: -250px;
        bottom: -270px;

        border:
            1px solid rgba(38, 54, 74, .09);

        box-shadow:
            0 0 0 70px rgba(38, 54, 74, .018);
    }


    #kdNextIntro .kd-next-intro__dots {
        position: absolute;

        z-index: 0;

        width: 190px;
        height: 190px;

        right: 7%;
        top: 50%;

        transform: translateY(-50%);

        opacity: .28;

        background-image:
            radial-gradient(circle,
                rgba(180, 35, 43, .34) 1px,
                transparent 1.5px);

        background-size: 15px 15px;

        -webkit-mask-image:
            radial-gradient(circle at center,
                #000 15%,
                transparent 72%);

        mask-image:
            radial-gradient(circle at center,
                #000 15%,
                transparent 72%);

        pointer-events: none;
    }


    @media(max-width: 768px) {

        #kdNextIntro {
            padding:
                68px 18px 70px;
        }


        #kdNextIntro .kd-next-intro__title {
            font-size:
                clamp(30px,
                    4vw,
                    44px);
        }


        #kdNextIntro .kd-next-intro__description {
            font-size: 13px;

            line-height: 1.75;
        }


        #kdNextIntro .kd-next-intro__dots {
            width: 160px;
            height: 160px;

            right: -30px;

            opacity: .18;
        }

    }


    @media(max-width: 480px) {

        #kdNextIntro {
            padding:
                55px 16px 58px;
        }


        /* Center Content */

        #kdNextIntro .kd-next-intro__content {
            text-align: center;
        }


        /* Small Subtitle */

        #kdNextIntro .kd-next-intro__eyebrow {
            margin:
                0 auto 15px;

            padding:
                9px 14px;

            font-size: 10.5px;

            letter-spacing: .045em;
        }


        /* Mobile Heading */

        #kdNextIntro .kd-next-intro__title {
            font-size:
                clamp(25px,
                    7vw,
                    34px);

            line-height: 1.17;

            letter-spacing: -.03em;
        }


        /* Accent Line */

        #kdNextIntro .kd-next-intro__line {
            width: 54px;

            margin:
                19px auto 18px;
        }


        /* Paragraph */

        #kdNextIntro .kd-next-intro__description {
            max-width: 100%;

            font-size: 12.5px;

            line-height: 1.72;
        }


        /* Background Dots */

        #kdNextIntro .kd-next-intro__dots {
            width: 150px;
            height: 150px;

            right: -55px;

            top: 60%;

            opacity: .14;
        }

    }
</style>