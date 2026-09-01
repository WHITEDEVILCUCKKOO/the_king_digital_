<style>
    #kdOtpInfoSection {
        --kd-otp-primary: #315fc2;
        --kd-otp-primary-dark: #244a9c;
        --kd-otp-purple: #5a45c7;
        --kd-otp-heading: #24334a;
        --kd-otp-text: #66768b;
        --kd-otp-light-text: #8a96a6;
        --kd-otp-border: #e3e9f2;
        --kd-otp-white: #ffffff;

        position: relative;
        width: 100%;
        overflow: hidden;

        padding: 72px 25px;

        background: #EAE9EF;
        /* font-family: Inter, Arial, Helvetica, sans-serif; */

        /* background:
            radial-gradient(circle at 7% 15%,
                rgba(49, 95, 194, .06) 0,
                transparent 24%),
            radial-gradient(circle at 91% 75%,
                rgba(90, 69, 199, .05) 0,
                transparent 25%),
            linear-gradient(135deg,
                #a8baf7 0%,
                #ccd0daaf 52%,
                #71819e 100%); */
    }



    #kdOtpInfoSection .kd-otp-info-orb {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    #kdOtpInfoSection .kd-otp-info-orb-one {
        width: 420px;
        height: 420px;

        top: -250px;
        right: -160px;

        border: 1px dashed rgba(49, 95, 194, 0.29);
    }

    #kdOtpInfoSection .kd-otp-info-orb-two {
        width: 270px;
        height: 270px;

        bottom: -180px;
        left: -120px;

        background: rgba(49, 95, 194, 0.31);
    }

    #kdOtpInfoSection .kd-otp-info-container {
        position: relative;
        z-index: 2;

        width: 100%;
        max-width: 1280px;

        margin: 0 auto;

        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(430px, .9fr);

        align-items: center;
        gap: 70px;
    }


    #kdOtpInfoSection .kd-otp-info-content {
        min-width: 0;
    }


    #kdOtpInfoSection .kd-otp-info-badge {
        display: inline-flex;
        align-items: center;
        gap: 9px;

        padding: 8px 14px;
        margin-bottom: 18px;

        border: 1px solid rgba(49, 95, 194, .16);
        border-radius: 50px;

        color: var(--kd-otp-primary);
        background: rgba(49, 95, 194, .045);

        font-size: 10px;
        font-weight: 800;
        letter-spacing: .8px;

        text-transform: uppercase;
    }


    #kdOtpInfoSection .kd-otp-info-badge-dot {
        width: 7px;
        height: 7px;

        flex: 0 0 7px;

        border-radius: 50%;

        background: var(--kd-otp-primary);

        animation: kdOtpBadgeBlink 1.5s ease-in-out infinite;
    }


    #kdOtpInfoSection .kd-otp-info-heading {
        /* max-width: 670px; */

        margin: 0;

        color: var(--kd-otp-heading);

        font-size: 44px;
        line-height: 1.16;

        font-weight: 800;
        letter-spacing: -1.4px;
    }


    #kdOtpInfoSection .kd-otp-info-heading span {
        display: block;

        color: var(--kd-otp-primary);
    }


    #kdOtpInfoSection .kd-otp-info-line {
        width: 62px;
        height: 3px;

        margin: 21px 0;

        border-radius: 50px;

        background: linear-gradient(90deg,
                var(--kd-otp-primary),
                var(--kd-otp-purple));
    }


    #kdOtpInfoSection .kd-otp-info-text {
        max-width: 650px;

        margin: 0 0 13px;

        color: var(--kd-otp-text);

        font-size: 15px;
        line-height: 1.8;
    }

    #kdOtpInfoSection .kd-otp-process-list {
        display: grid;
        grid-template-columns: 1fr;

        gap: 9px;

        max-width: 670px;

        margin-top: 24px;
    }


    #kdOtpInfoSection .kd-otp-process-card {
        display: flex;
        align-items: center;

        gap: 14px;

        padding: 11px 13px;

        border: 1px solid var(--kd-otp-border);
        border-radius: 12px;

        background: rgb(255 255 255 / 57%);
        /* background: rgba(255, 255, 255, .82); */

        transition:
            border-color .25s ease,
            box-shadow .25s ease;
    }


    #kdOtpInfoSection .kd-otp-process-card:hover {
        border-color: rgba(49, 95, 194, .32);

        box-shadow: 0 10px 25px rgba(37, 72, 145, .06);
    }


    #kdOtpInfoSection .kd-otp-process-number {
        width: 40px;
        height: 40px;

        flex: 0 0 40px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 11px;

        color: var(--kd-otp-primary);

        background: rgba(49, 95, 194, .09);

        font-size: 11px;
        font-weight: 800;

        transition:
            color .25s ease,
            background .25s ease;
    }


    #kdOtpInfoSection .kd-otp-process-card:hover .kd-otp-process-number {
        color: #ffffff;

        background: linear-gradient(135deg,
                var(--kd-otp-primary),
                var(--kd-otp-purple));
    }


    #kdOtpInfoSection .kd-otp-process-details h3 {
        margin: 0 0 3px;

        color: #344257;

        font-size: 13px;
        font-weight: 750;
    }


    #kdOtpInfoSection .kd-otp-process-details p {
        margin: 0;

        color: var(--kd-otp-light-text);

        font-size: 10px;
        line-height: 1.5;
    }

    #kdOtpInfoSection .kd-otp-info-actions {
        margin-top: 25px;
    }


    #kdOtpInfoSection .kd-otp-info-btn {
        min-height: 45px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 13px;

        padding: 10px 19px;

        border-radius: 9px;

        color: #ffffff !important;

        background: linear-gradient(135deg,
                #315fc2,
                #5344c7);

        box-shadow: 0 12px 25px rgba(49, 95, 194, .18);

        text-decoration: none !important;

        font-size: 12px;
        font-weight: 700;

        transition:
            transform .25s ease,
            box-shadow .25s ease;
    }


    #kdOtpInfoSection .kd-otp-info-btn:hover {
        color: #ffffff !important;

        transform: translateY(-2px);

        box-shadow: 0 16px 30px rgba(49, 95, 194, .25);
    }


    #kdOtpInfoSection .kd-otp-info-btn span {
        font-size: 18px;
        line-height: 1;
    }

    #kdOtpInfoSection .kd-otp-visual {
        position: relative;

        min-height: 530px;

        display: flex;
        align-items: center;
        justify-content: center;
    }


    #kdOtpInfoSection .kd-otp-visual-glow {
        position: absolute;

        width: 420px;
        height: 420px;

        top: 50%;
        left: 50%;

        border-radius: 50%;

        transform: translate(-50%, -50%);

        background:
            radial-gradient(circle,
                rgba(49, 95, 194, .13) 0%,
                rgba(49, 95, 194, .07) 42%,
                rgba(49, 95, 194, 0) 72%);

        pointer-events: none;
    }


    #kdOtpInfoSection .kd-otp-image-wrap {
        position: relative;
        z-index: 2;

        width: 100%;
        max-width: 470px;

        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 18px;
    }


    #kdOtpInfoSection .kd-otp-main-image {
        width: 100%;
        /* max-width: 450px; */
        height: auto;

        display: block;

        object-fit: cover;

        mix-blend-mode: multiply;

        filter:
            drop-shadow(0 22px 35px rgba(38, 65, 120, .13));
    }

    #kdOtpInfoSection .kd-otp-floating-card {
        position: absolute;
        z-index: 4;

        display: flex;
        align-items: center;

        gap: 10px;

        padding: 10px 12px;

        border: 1px solid rgba(218, 226, 239, .95);
        border-radius: 13px;

        background: rgba(255, 255, 255, .94);

        box-shadow: 0 14px 30px rgba(35, 58, 105, .10);

        backdrop-filter: blur(8px);
    }


    #kdOtpInfoSection .kd-otp-floating-card-one {
        top: 58px;
        left: -12px;
    }


    #kdOtpInfoSection .kd-otp-floating-card-two {
        right: -5px;
        bottom: 86px;
    }


    #kdOtpInfoSection .kd-otp-floating-icon,
    #kdOtpInfoSection .kd-otp-mini-lock {
        width: 35px;
        height: 35px;

        flex: 0 0 35px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 10px;

        color: #ffffff;

        background: linear-gradient(135deg,
                #315fc2,
                #5a45c7);

        font-size: 17px;
        font-weight: 800;
    }


    #kdOtpInfoSection .kd-otp-floating-card strong {
        display: block;

        margin-bottom: 2px;

        color: #3c485b;

        font-size: 10px;
        font-weight: 750;
    }


    #kdOtpInfoSection .kd-otp-floating-card span {
        display: block;

        color: #8b96a6;

        font-size: 8px;
        line-height: 1.4;
    }


    #kdOtpInfoSection .kd-otp-status-card {
        position: absolute;
        z-index: 4;

        left: 50%;
        bottom: 15px;

        min-width: 220px;

        display: flex;
        align-items: center;

        gap: 10px;

        padding: 11px 15px;

        border: 1px solid rgba(49, 95, 194, .13);
        border-radius: 50px;

        background: rgba(255, 255, 255, .92);

        box-shadow: 0 12px 28px rgba(35, 58, 105, .09);

        transform: translateX(-50%);
    }


    #kdOtpInfoSection .kd-otp-status-dot {
        width: 9px;
        height: 9px;

        flex: 0 0 9px;

        border-radius: 50%;

        background: #28a36b;

        box-shadow: 0 0 0 5px rgba(40, 163, 107, .10);

        animation: kdOtpStatusPulse 1.7s ease-in-out infinite;
    }


    #kdOtpInfoSection .kd-otp-status-card strong {
        display: block;

        margin-bottom: 2px;

        color: #3b485a;

        font-size: 10px;
        font-weight: 750;
    }


    #kdOtpInfoSection .kd-otp-status-card small {
        display: block;

        color: #909aaa;

        font-size: 8px;
    }

    @keyframes kdOtpBadgeBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .35;
            transform: scale(.7);
        }

    }


    @keyframes kdOtpStatusPulse {

        0%,
        100% {
            box-shadow: 0 0 0 5px rgba(40, 163, 107, .10);
        }

        50% {
            box-shadow: 0 0 0 9px rgba(40, 163, 107, .03);
        }

    }

    @media (max-width: 1100px) {

        #kdOtpInfoSection {
            padding: 60px 22px;
        }

        #kdOtpInfoSection .kd-otp-info-container {
            grid-template-columns: minmax(0, 1fr) minmax(350px, .85fr);

            gap: 40px;
        }

        #kdOtpInfoSection .kd-otp-visual {
            min-height: 470px;
        }

        #kdOtpInfoSection .kd-otp-main-image {
            max-width: 400px;
        }

    }


    @media (max-width: 767px) {

        #kdOtpInfoSection {
            padding: 50px 16px 45px;
        }

        #kdOtpInfoSection .kd-otp-info-container {
            grid-template-columns: 1fr;

            gap: 35px;
        }

        #kdOtpInfoSection .kd-otp-info-content {
            text-align: center;
        }

        #kdOtpInfoSection .kd-otp-info-badge {
            margin-left: auto;
            margin-right: auto;
        }

        #kdOtpInfoSection .kd-otp-info-heading {
            margin-left: auto;
            margin-right: auto;

            font-size: 31px;
        }

        #kdOtpInfoSection .kd-otp-info-line {
            margin-left: auto;
            margin-right: auto;
        }

        #kdOtpInfoSection .kd-otp-info-text {
            margin-left: auto;
            margin-right: auto;

            font-size: 13px;
            line-height: 1.75;
        }

        #kdOtpInfoSection .kd-otp-process-list {
            text-align: left;
        }

        #kdOtpInfoSection .kd-otp-info-actions {
            margin-top: 23px;
        }

        #kdOtpInfoSection .kd-otp-visual {
            min-height: 440px;
        }

        #kdOtpInfoSection .kd-otp-visual-glow {
            width: 340px;
            height: 340px;
        }

        #kdOtpInfoSection .kd-otp-image-wrap {
            max-width: 380px;
        }

        #kdOtpInfoSection .kd-otp-main-image {
            max-width: 360px;
        }

        #kdOtpInfoSection .kd-otp-floating-card-one {
            top: 22px;
            left: 0;
        }

        #kdOtpInfoSection .kd-otp-floating-card-two {
            right: 0;
            bottom: 80px;
        }

    }


    @media (max-width: 480px) {

        #kdOtpInfoSection {
            padding: 42px 12px 38px;
        }

        #kdOtpInfoSection .kd-otp-info-badge {
            padding: 7px 11px;

            font-size: 8px;
        }

        #kdOtpInfoSection .kd-otp-info-heading {
            font-size: 27px;
            line-height: 1.18;

            letter-spacing: -1px;
        }

        #kdOtpInfoSection .kd-otp-info-text {
            font-size: 12px;
        }

        #kdOtpInfoSection .kd-otp-process-card {
            align-items: flex-start;

            padding: 10px;
        }

        #kdOtpInfoSection .kd-otp-process-number {
            width: 36px;
            height: 36px;

            flex-basis: 36px;

            font-size: 10px;
        }

        #kdOtpInfoSection .kd-otp-process-details h3 {
            font-size: 12px;
        }

        #kdOtpInfoSection .kd-otp-process-details p {
            font-size: 9px;
        }

        #kdOtpInfoSection .kd-otp-info-btn {
            min-height: 43px;

            padding: 9px 17px;

            font-size: 11px;
        }

        #kdOtpInfoSection .kd-otp-visual {
            min-height: 390px;
        }

        #kdOtpInfoSection .kd-otp-image-wrap {
            max-width: 310px;
        }

        #kdOtpInfoSection .kd-otp-main-image {
            max-width: 300px;
        }

        #kdOtpInfoSection .kd-otp-visual-glow {
            width: 285px;
            height: 285px;
        }

        #kdOtpInfoSection .kd-otp-floating-card {
            gap: 7px;

            padding: 8px 9px;

            border-radius: 10px;
        }

        #kdOtpInfoSection .kd-otp-floating-card-one {
            top: 10px;
            left: 0;
        }

        #kdOtpInfoSection .kd-otp-floating-card-two {
            right: 0;
            bottom: 62px;
        }

        #kdOtpInfoSection .kd-otp-floating-icon,
        #kdOtpInfoSection .kd-otp-mini-lock {
            width: 28px;
            height: 28px;

            flex-basis: 28px;

            border-radius: 8px;

            font-size: 13px;
        }

        #kdOtpInfoSection .kd-otp-floating-card strong {
            font-size: 8px;
        }

        #kdOtpInfoSection .kd-otp-floating-card span {
            font-size: 7px;
        }

        #kdOtpInfoSection .kd-otp-status-card {
            bottom: 5px;

            min-width: 195px;

            padding: 9px 12px;
        }

        #kdOtpInfoSection .kd-otp-status-card strong {
            font-size: 9px;
        }

        #kdOtpInfoSection .kd-otp-status-card small {
            font-size: 7px;
        }

    }
</style>

<section class="kd-otp-info-section" id="kdOtpInfoSection">

    <!-- Background Shapes -->
    <div class="kd-otp-info-orb kd-otp-info-orb-one"></div>
    <div class="kd-otp-info-orb kd-otp-info-orb-two"></div>

    <div class="kd-otp-info-container">

        <!-- =========================
         LEFT CONTENT
    ========================== -->
        <div class="kd-otp-info-content">

            <div class="kd-otp-info-badge">
                <span class="kd-otp-info-badge-dot"></span>
                OTP AUTHENTICATION EXPLAINED
            </div>

            <h2 class="kd-otp-info-heading">
                What is an OTP and How Does
                <span>OTP Authentication Work?</span>
            </h2>

            <div class="kd-otp-info-line"></div>

            <p class="kd-otp-info-text">
                An OTP, or One-Time Password, is a unique and temporary verification
                code used to authenticate users securely. Unlike traditional passwords,
                an OTP is generated for a single login, transaction or verification
                request.
            </p>

            <p class="kd-otp-info-text">
                When a user tries to access an account or complete a transaction, a
                secure code is instantly sent to their registered mobile number through
                SMS. The user enters the code, the system verifies it, and access is
                granted securely.
            </p>


            <!-- Process Cards -->
            <div class="kd-otp-process-list">

                <!-- Step 1 -->
                <div class="kd-otp-process-card">

                    <div class="kd-otp-process-number">01</div>

                    <div class="kd-otp-process-details">
                        <h3>OTP is Generated</h3>
                        <p>
                            A unique one-time verification code is created securely for
                            the user.
                        </p>
                    </div>

                </div>


                <!-- Step 2 -->
                <div class="kd-otp-process-card">

                    <div class="kd-otp-process-number">02</div>

                    <div class="kd-otp-process-details">
                        <h3>Code is Delivered</h3>
                        <p>
                            The OTP is delivered quickly to the user's registered mobile
                            number.
                        </p>
                    </div>

                </div>


                <!-- Step 3 -->
                <div class="kd-otp-process-card">

                    <div class="kd-otp-process-number">03</div>

                    <div class="kd-otp-process-details">
                        <h3>User is Verified</h3>
                        <p>
                            The entered OTP is validated and secure access is completed.
                        </p>
                    </div>

                </div>

            </div>


            <!-- CTA -->
            <div class="kd-otp-info-actions">
                <a href="#enquiry" class="kd-otp-info-btn">
                    Get Started
                    <span>→</span>
                </a>
            </div>

        </div>


        <!-- =========================
         RIGHT IMAGE AREA
    ========================== -->
        <div class="kd-otp-visual">

            <div class="kd-otp-visual-glow"></div>

            <!-- Floating Security Badge -->
            <div class="kd-otp-floating-card kd-otp-floating-card-one down-up-animation ">
                <div class="kd-otp-floating-icon">✓</div>

                <div>
                    <strong>Secure Verification</strong>
                    <span>Protected authentication</span>
                </div>
            </div>


            <!-- Main OTP Image -->
            <div class="kd-otp-image-wrap">

                <img
                    src="https://cdn.prod.website-files.com/68f719f8144c174d2d7b5753/6912a9bbbb0f0b7364bc81e1_OTP_hero.png"
                    alt="Secure OTP verification on mobile"
                    class="kd-otp-main-image">

            </div>


            <!-- Floating OTP Card -->
            <div class="kd-otp-floating-card kd-otp-floating-card-two up-animation">

                <div class="kd-otp-mini-lock">⌁</div>

                <div>
                    <strong>Instant OTP Delivery</strong>
                    <span>Delivered within seconds</span>
                </div>

            </div>


            <!-- Bottom Security Status -->
            <div class="kd-otp-status-card">

                <span class="kd-otp-status-dot"></span>

                <div>
                    <strong>Authentication Secured</strong>
                    <small>Fast, reliable and protected</small>
                </div>

            </div>

        </div>

    </div>

</section>