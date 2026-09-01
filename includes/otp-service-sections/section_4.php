<style>
    .otp-secure-section {
        width: 100%;
        padding: 55px 25px;
        /* background:
            radial-gradient(circle at 10% 10%, rgba(55, 95, 190, 0.08), transparent 28%),
            radial-gradient(circle at 90% 85%, rgba(91, 72, 198, 0.08), transparent 30%),
            #f8f9fc; */
        /* font-family: inherit; */
        
        overflow: hidden;

        background: #E5E5EC;
    }



    .otp-secure-container {
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 70px;
        align-items: center;
    }


    .otp-secure-content {
        width: 100%;
    }


    /* SMALL LABEL */

    .otp-secure-label {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 15px;
        border: 1px solid rgba(53, 91, 190, 0.18);
        border-radius: 30px;
        background: #ffffff;
        color: #3d5fb4;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1.2px;
        margin-bottom: 18px;
    }

    .otp-secure-label span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #466ac2;
        animation: otpDotBlink 1.5s infinite;
    }

    @keyframes otpDotBlink {
        0% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.35;
            transform: scale(0.7);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }


    .otp-secure-content h2 {
        margin: 0 0 16px;
        color: #1f2d44;
        font-size: 44px;
        line-height: 1.16;
        font-weight: 800;
        letter-spacing: -1px;
    }
    .otp-secure-content h2 em{
        color: #3B67C9;
        font-style: normal;
    }


    /* DESCRIPTION */

    .otp-secure-description {
        max-width: 670px;
        margin: 0 0 26px;
        color: #5c6a7d;
        font-size: 17px;
        line-height: 1.7;
    }


    .otp-feature-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 14px;
    }


    /* FEATURE CARD */
    .otp-feature-card {
        display: flex;
        align-items: flex-start;
        gap: 13px;
        padding: 18px;
        min-height: 112px;
            background: rgb(255 255 255 / 57%);
        /* background: #ffffff; */
        border: 1px solid #e3e8f2;
        border-radius: 14px;
        transition:
            background 0.25s ease,
            border-color 0.25s ease,
            box-shadow 0.25s ease;
    }

    .otp-feature-card:hover {
        transform: none;
        background: #eef0f5;
        border-color: #b9c8eb;
        box-shadow: 0 10px 25px rgba(48, 74, 132, 0.08);
    }


    /* FEATURE ICON */

    .otp-feature-icon {
        flex: 0 0 43px;
        width: 43px;
        height: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        background: linear-gradient(135deg, #4169c7, #5b4bc4);
        color: #ffffff;
        font-size: 19px;
        font-weight: 700;
        box-shadow: 0 7px 15px rgba(64, 91, 190, 0.18);
    }


    /* FEATURE TEXT */

    .otp-feature-text {
        flex: 1;
    }

    .otp-feature-text h3 {
        margin: 1px 0 6px;
        color: #26354c;
        font-size: 15px;
        line-height: 1.35;
        font-weight: 700;
    }

    .otp-feature-text p {
        margin: 0;
        color: #6a7688;
        font-size: 13px;
        line-height: 1.55;
    }



    .otp-secure-visual {
        position: relative;
        min-height: 430px;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* BACKGROUND SHAPE */

    .otp-visual-bg {
        position: absolute;
        width: 390px;
        height: 390px;
        border-radius: 50%;
        background:
            radial-gradient(circle at 35% 30%, rgba(90, 124, 215, 0.22), transparent 40%),
            linear-gradient(135deg, #edf2fc, #dce6f8);
    }


    /* IMAGE CIRCLE */

    .otp-image-circle {
        position: relative;
        z-index: 2;
        width: 315px;
        height: 315px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.55);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.8);
        box-shadow: 0 25px 60px rgba(54, 79, 140, 0.12);
    }

    .otp-image-circle img {
        width: 75%;
        height: auto;
        object-fit: contain;
        display: block;
    }



    .otp-floating-card {
        position: absolute;
        z-index: 4;
        display: flex;
        align-items: center;
        gap: 11px;
        padding: 13px 16px;
        min-width: 185px;
        background: rgb(255 255 255 / 57%);
        /* background: rgba(255, 255, 255, 0.96); */
        border: 1px solid #e0e7f3;
        border-radius: 14px;
        box-shadow: 0 14px 35px rgba(35, 56, 104, 0.12);
    }

    .otp-card-top {
        top: 20px;
        right: 5px;
    }

    .otp-card-bottom {
        bottom: 25px;
        left: 10px;
    }


    /* MINI ICON */

    .otp-mini-icon {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 10px;
        background: linear-gradient(135deg, #4268c4, #5b4bc5);
        color: #ffffff;
        font-size: 17px;
    }

    .otp-mini-icon.check {
        background: linear-gradient(135deg, #258169, #3f9b7d);
    }


    /* FLOATING CARD TEXT */

    .otp-floating-card strong {
        display: block;
        margin-bottom: 3px;
        color: #30405a;
        font-size: 13px;
        font-weight: 700;
    }

    .otp-floating-card span {
        display: block;
        color: #7b8798;
        font-size: 11px;
    }


    @media(max-width:1024px) {

        .otp-secure-section {
            padding: 50px 25px;
        }

        .otp-secure-container {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .otp-secure-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .otp-secure-visual {
            min-height: 400px;
        }

    }



    @media(max-width:650px) {

        .otp-secure-section {
            padding: 40px 16px;
        }

        .otp-secure-content h2 {
            font-size: 31px;
            letter-spacing: -0.5px;
        }

        .otp-secure-description {
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 22px;
        }

        .otp-feature-grid {
            grid-template-columns: 1fr;
        }

        .otp-feature-card {
            min-height: auto;
        }

        .otp-secure-visual {
            min-height: 350px;
        }

        .otp-visual-bg {
            width: 285px;
            height: 285px;
        }

        .otp-image-circle {
            width: 230px;
            height: 230px;
        }

        .otp-floating-card {
            min-width: 150px;
            padding: 10px 12px;
        }

        .otp-card-top {
            top: 10px;
            right: 0;
        }

        .otp-card-bottom {
            bottom: 10px;
            left: 0;
        }

        .otp-mini-icon {
            width: 34px;
            height: 34px;
        }

    }

    .jso951{

    svg{
        fill: #f1f1f1;
        width: 20px;
    }
    }

</style>

<section class="otp-secure-section">

    <div class="otp-secure-container">

        <!-- LEFT CONTENT -->
        <div class="otp-secure-content">

            <div class="otp-secure-label">
                <span></span>
                OTP SMS SECURITY
            </div>

            <h2>
                Fast, Secure & Reliable<br>
                <em>OTP Authentication</em>
            </h2>

            <p class="otp-secure-description">
                Deliver one-time passwords instantly with a secure and reliable OTP SMS
                solution built for modern businesses. Protect logins, transactions and
                user verification across every important customer touchpoint.
            </p>

            <!-- FEATURE CARDS -->
            <div class="otp-feature-grid">

                <div class="otp-feature-card">
                    <div class="otp-feature-icon"><span class="jso951"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M128 320L156.5 92C158.5 76 172.1 64 188.3 64L356.9 64C371.9 64 384 76.1 384 91.1C384 94.3 383.4 97.6 382.3 100.6L336 224L475.3 224C495.5 224 512 240.4 512 260.7C512 268.1 509.8 275.3 505.6 281.4L313.4 562.4C307.5 571 297.8 576.1 287.5 576.1L284.6 576.1C268.9 576.1 256.1 563.3 256.1 547.6C256.1 545.3 256.4 543 257 540.7L304 352L160 352C142.3 352 128 337.7 128 320z"/></svg></span></div>
                    <div class="otp-feature-text">
                        <h3>Instant Delivery</h3>
                        <p>Send OTPs within seconds for faster verification.</p>
                    </div>
                </div>

                <div class="otp-feature-card">
                    <div class="otp-feature-icon"><span class="jso951"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z"/></svg></span></div>
                    <div class="otp-feature-text">
                        <h3>Secure Authentication</h3>
                        <p>Protect every login with trusted OTP verification.</p>
                    </div>
                </div>

                <div class="otp-feature-card">
                    <div class="otp-feature-icon">✓</div>
                    <div class="otp-feature-text">
                        <h3>High Reliability</h3>
                        <p>Ensure dependable delivery for every verification.</p>
                    </div>
                </div>

                <div class="otp-feature-card">
                    <div class="otp-feature-icon">◉</div>
                    <div class="otp-feature-text">
                        <h3>Multi-Channel Support</h3>
                        <p>Reach users through SMS and other secure channels.</p>
                    </div>
                </div>

            </div>

        </div>


        <!-- RIGHT IMAGE -->
        <div class="otp-secure-visual">

            <div class="otp-visual-bg"></div>

            <div class="otp-image-circle">
                <img
                    src="https://cdn-icons-png.flaticon.com/512/2919/2919592.png"
                    alt="Secure OTP Authentication">
            </div>

            <div class="otp-floating-card otp-card-top left-right-animation">
                <div class="otp-mini-icon"><span class="jso951"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z"/></svg></span></div>
                <div>
                    <strong>Secure OTP</strong>
                    <span>Protected Verification</span>
                </div>
            </div>

            <div class="otp-floating-card otp-card-bottom right-left-animation ">
                <div class="otp-mini-icon check">✓</div>
                <div>
                    <strong>OTP Verified</strong>
                    <span>Fast & Reliable</span>
                </div>
            </div>

        </div>

    </div>

</section>


