<style>
    .otp-info-section {
        width: 100%;
        padding: 72px 20px;
        /* background:
            radial-gradient(circle at 8% 25%, rgba(54, 101, 205, 0.09), transparent 24%),
            radial-gradient(circle at 88% 80%, rgba(81, 68, 193, 0.08), transparent 25%),
            #ffffff; */
        background: #E5E5EC;
        overflow: hidden;
    }

    .otp-info-container {
        width: min(1280px, 100%);
        margin: 0 auto;
        display: grid;
        grid-template-columns: minmax(420px, 0.9fr) minmax(0, 1.1fr);
        align-items: center;
        gap: 72px;
    }


    .otp-info-visual {
        min-height: 500px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .otp-visual-bg {
        position: absolute;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background:
            radial-gradient(circle at 35% 30%, rgba(80, 126, 225, 0.2), rgba(69, 83, 185, 0.1) 50%, transparent 72%);
    }

    .otp-visual-bg::before,
    .otp-visual-bg::after {
        content: "";
        position: absolute;
        border-radius: 50%;
    }

    .otp-visual-bg::before {
        border: 1.5px dashed rgba(54, 89, 179, 0.8);
        animation: decor-spin 35s linear infinite;
    }

    @keyframes decor-spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .otp-visual-bg::after {
        border: 1.5px dashed rgba(179, 54, 54, 0.8);
        animation: decor-spin 35s linear infinite reverse;

    }


    .otp-visual-bg::before {
        inset: -24px;
    }

    .otp-visual-bg::after {
        inset: 36px;
    }

    .otp-phone-wrap {
        position: relative;
        z-index: 3;
        filter: drop-shadow(0 22px 32px rgba(26, 43, 83, 0.18));
    }

    .otp-phone {
        width: 265px;
        height: 470px;
        border: 7px solid #1d2738;
        border-radius: 34px;
        background: #F4F4F7;
        overflow: hidden;
        position: relative;
    }

    .otp-phone-top {
        height: 44px;
        padding: 12px 16px 0;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        font-size: 8px;
        font-weight: 700;
        color: #25334a;
    }

    .otp-camera {
        position: absolute;
        width: 54px;
        height: 15px;
        background: #1d2738;
        border-radius: 0 0 12px 12px;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .otp-status {
        font-size: 7px;
        letter-spacing: 1px;
    }

    .otp-phone-screen {
        padding: 25px 19px;
        text-align: center;
    }

    .otp-shield {
        width: 72px;
        height: 72px;
        margin: 0 auto 13px;
        border-radius: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #2e65c7, #5745bf);
        color: #ffffff;
        box-shadow: 0 12px 24px rgba(58, 82, 185, 0.25);
    }

    .otp-shield svg {
        width: 38px;
        height: 38px;
    }

    .otp-secure-tag {
        display: inline-flex;
        padding: 5px 10px;
        margin-bottom: 10px;
        border-radius: 20px;
        background: #edf3ff;
        color: #315fbb;
        font-size: 8px;
        font-weight: 800;
        letter-spacing: 0.8px;
    }

    .otp-phone-screen h3 {
        margin: 0 0 8px;
        color: #243148;
        font-size: 19px;
        line-height: 1.25;
        font-weight: 800;
    }

    .otp-phone-screen>p {
        margin: 0 auto 20px;
        max-width: 205px;
        color: #738095;
        font-size: 9px;
        line-height: 1.6;
    }

    .otp-code-boxes {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 7px;
        margin-bottom: 17px;
    }

    .otp-code-boxes span {
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #d8dfeb;
        border-radius: 9px;
        background: #f9fbff;
        color: #2c4162;
        font-size: 17px;
        font-weight: 800;
    }

    .otp-code-boxes span{
        border-color: #85a8eb;
        background: #edf4ff;
        color: #3567c5;
    }

    .otp-success-bar {
        min-height: 42px;
        padding: 8px 10px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        background: linear-gradient(90deg, #2e65c7, #5946be);
        color: #ffffff;
        font-size: 9px;
        font-weight: 700;
    }

    .success-icon {
        width: 19px;
        height: 19px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.18);
        font-size: 12px;
    }

    .otp-phone-bottom {
        position: absolute;
        width: 92px;
        height: 4px;
        border-radius: 5px;
        background: #1d2738;
        bottom: 11px;
        left: 50%;
        transform: translateX(-50%);
    }

    /* FLOATING CARDS */

    .otp-message-card {
        position: absolute;
        z-index: 5;
        background: #F4F4F7;
        /* background: rgba(255, 255, 255, 0.96); */
        border: 1px solid rgba(78, 106, 170, 0.16);
        box-shadow: 0 16px 35px rgba(30, 52, 94, 0.13);
        backdrop-filter: blur(8px);
    }

    .otp-message-card-left {
        width: 210px;
        padding: 16px;
        left: 0;
        top: 130px;
        border-radius: 14px;
    }

    .otp-message-label {
        margin-bottom: 6px;
        color: #315fb7;
        font-size: 8px;
        font-weight: 800;
        letter-spacing: 1px;
    }

    .otp-message-text {
        color: #4e5d72;
        font-size: 10px;
        line-height: 1.55;
    }

    .otp-message-card-right {
        width: 190px;
        padding: 13px;
        right: -10px;
        bottom: 75px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .otp-small-icon {
        flex: 0 0 34px;
        width: 34px;
        height: 34px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #2f65c5, #5b45be);
        color: #ffffff;
        font-size: 17px;
        font-weight: 800;
    }

    .otp-message-card-right strong {
        display: block;
        margin-bottom: 3px;
        color: #2a3850;
        font-size: 11px;
    }

    .otp-message-card-right span {
        display: block;
        color: #758195;
        font-size: 8px;
    }

    .otp-floating-lock {
        position: absolute;
        z-index: 4;
        top: 65px;
        right: 50px;
        width: 58px;
        height: 58px;
        padding: 15px;
        border-radius: 18px;
         background: #F4F4F7;
        color: #426ec8;
        box-shadow: 0 14px 28px rgba(33, 57, 105, 0.13);
    }

    .otp-floating-lock svg {
        width: 100%;
        height: 100%;
    }


    .otp-info-content {
        max-width: 650px;
    }

    .otp-section-badge {
        width: fit-content;
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 14px;
        margin-bottom: 17px;
        border: 1px solid rgba(59, 99, 188, 0.18);
        border-radius: 30px;
        background: #f7faff;
        color: #315eaf;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1px;
    }

    .otp-section-badge span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #4c61c7;
        animation: otpBlink 1.5s infinite;
    }

    @keyframes otpBlink {

        0%,
        100% {
            opacity: 1;
            box-shadow: 0 0 0 0 rgba(76, 97, 199, 0.4);
        }

        50% {
            opacity: 0.5;
            box-shadow: 0 0 0 6px rgba(76, 97, 199, 0);
        }
    }

    .otp-info-content h2 {
        margin: 0;
        color: #233148;
        font-size: 44px;
        line-height: 1.16;
        font-weight: 800;
        letter-spacing: -1.2px;
    }

    .otp-info-content h2 span {
        display: block;
        color: #3566bf;
    }

    .otp-title-line {
        width: 68px;
        height: 4px;
        margin: 20px 0 21px;
        border-radius: 5px;
        background: linear-gradient(90deg, #3165c6, #5848bf);
    }

    .otp-info-content>p {
        margin: 0 0 16px;
        color: #58677b;
        font-size: 16px;
        line-height: 1.75;
    }

    .otp-info-points {
        margin-top: 26px;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
    }

    .otp-info-point {
        padding: 16px;
        display: flex;
        align-items: flex-start;
        gap: 12px;
        border: 1px solid #e3e9f2;
        border-radius: 15px;
      background: #F4F4F7;
    }

    .otp-point-icon {
        flex: 0 0 38px;
        width: 38px;
        height: 38px;
        border-radius: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eef4ff;
        color: #3867c1;
    }

    .otp-point-icon svg {
        width: 21px;
        height: 21px;
    }

    .otp-info-point h4 {
        margin: 0 0 4px;
        color: #29374d;
        font-size: 14px;
        font-weight: 800;
    }

    .otp-info-point p {
        margin: 0;
        color: #758196;
        font-size: 11px;
        line-height: 1.55;
    }

    @media (max-width: 1050px) {
        .otp-info-container {
            grid-template-columns: 1fr;
            gap: 45px;
        }

        .otp-info-visual {
            order: 2;
            min-height: 450px;
        }

        .otp-info-content {
            max-width: 760px;
            margin: 0 auto;
            text-align: center;
        }

        .otp-section-badge {
            margin-left: auto;
            margin-right: auto;
        }

        .otp-title-line {
            margin-left: auto;
            margin-right: auto;
        }

        .otp-info-points {
            text-align: left;
        }
    }

    @media (max-width: 650px) {
        .otp-info-section {
            padding: 52px 16px;
        }

        .otp-info-container {
            gap: 30px;
        }

        .otp-info-content h2 {
            font-size: 31px;
            letter-spacing: -0.7px;
        }

        .otp-info-content>p {
            font-size: 14px;
            line-height: 1.7;
        }

        .otp-info-points {
            grid-template-columns: 1fr;
        }

        .otp-info-visual {
            min-height: 410px;
            transform: scale(0.86);
            transform-origin: center;
            margin: -30px 0;
        }

        .otp-visual-bg {
            width: 390px;
            height: 390px;
        }

        .otp-message-card-left {
            left: -25px;
        }

        .otp-message-card-right {
            right: -30px;
        }

        .otp-floating-lock {
            right: 5px;
        }
    }

    @media (max-width: 430px) {
        .otp-info-visual {
            transform: scale(0.73);
            margin: -58px 0;
        }

        .otp-info-content h2 {
            font-size: 28px;
        }
    }
</style>


<section class="otp-info-section">
    <div class="otp-info-container">

        <!-- LEFT SIDE IMAGE -->
        <div class="otp-info-visual">
            <div class="otp-visual-bg"></div>

            <div class="otp-message-card otp-message-card-left up-animation">
                <div class="otp-message-label">INSTANT DELIVERY</div>
                <div class="otp-message-text">Your verification code has been sent successfully.</div>
            </div>

            <div class="otp-phone-wrap">
                <div class="otp-phone">

                    <div class="otp-phone-top">
                        <span class="otp-time">9:41</span>
                        <div class="otp-camera"></div>
                        <span class="otp-status">● ● ●</span>
                    </div>

                    <div class="otp-phone-screen">
                        <div class="otp-shield">
                            <svg viewBox="0 0 64 64" aria-hidden="true">
                                <path d="M32 4L54 13V29C54 43 45 54 32 60C19 54 10 43 10 29V13L32 4Z"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="4" />
                                <path d="M22 31L29 38L43 23"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="4"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>

                        <span class="otp-secure-tag">SECURE OTP</span>

                        <h3>Verify Your Identity</h3>
                        <p>Enter the secure verification code sent to your mobile number.</p>

                        <div class="otp-code-boxes">
                            <span class="randomNumber ">0</span>
                            <span class="randomNumber">0</span>
                            <span class="randomNumber">0</span>
                            <span class="randomNumber">30</span>
                        </div>

                        <div class="otp-success-bar">
                            <span class="success-icon">✓</span>
                            OTP Verified Successfully
                        </div>
                    </div>

                    <div class="otp-phone-bottom"></div>
                </div>
            </div>

            <div class="otp-message-card otp-message-card-right left-right-animation">
                <div class="otp-small-icon">✓</div>
                <div>
                    <strong>Secure & Reliable</strong>
                    <span>Protected authentication</span>
                </div>
            </div>

            <div class="otp-floating-lock right-left-animation">
                <svg viewBox="0 0 64 64" aria-hidden="true">
                    <rect x="14" y="28" width="36" height="26" rx="5"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="4" />
                    <path d="M22 28V19C22 12 26 8 32 8C38 8 42 12 42 19V28"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="4"
                        stroke-linecap="round" />
                    <circle cx="32" cy="41" r="3" fill="currentColor" />
                    <path d="M32 44V49"
                        stroke="currentColor"
                        stroke-width="3"
                        stroke-linecap="round" />
                </svg>
            </div>
        </div>

        <!-- RIGHT SIDE CONTENT -->
        <div class="otp-info-content">
            <div class="otp-section-badge">
                <span></span>
                OTP SMS SERVICES
            </div>

            <h2>
                Secure Authentication for
                <span>Every Customer Interaction</span>
            </h2>

            <div class="otp-title-line"></div>

            <p>
                OTP SMS is one of the most reliable ways to protect digital
                communication and verify users during important actions such as
                account access, sign-ups, transactions, and password resets.
            </p>

            <p>
                Our OTP messaging solution helps businesses deliver unique
                verification codes quickly and securely, creating a smoother
                authentication experience while adding an extra layer of protection
                to every customer interaction.
            </p>

            <div class="otp-info-points">
                <div class="otp-info-point">
                    <div class="otp-point-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 12L10 17L19 7"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <h4>Fast Code Delivery</h4>
                        <p>Send verification codes quickly when users need them.</p>
                    </div>
                </div>

                <div class="otp-info-point">
                    <div class="otp-point-icon">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 3L19 6V11C19 15.5 16.2 19.3 12 21C7.8 19.3 5 15.5 5 11V6L12 3Z"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linejoin="round" />
                            <path d="M9 12L11 14L15 10"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <h4>Secure Verification</h4>
                        <p>Protect sensitive user actions with trusted authentication.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>