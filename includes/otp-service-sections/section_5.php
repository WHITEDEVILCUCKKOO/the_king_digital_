<style>
    .otp-delivery-section {
        position: relative;
        width: 100%;
        padding: 60px 25px;
        overflow: hidden;
        background:
            radial-gradient(circle at 15% 50%, rgba(62, 101, 196, 0.08), transparent 28%),
            radial-gradient(circle at 90% 20%, rgba(92, 75, 196, 0.06), transparent 25%),
            #f8f9fc;

    }

    .otp-delivery-container {
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 0.95fr 1.05fr;
        gap: 80px;
        align-items: center;
    }


    .otp-delivery-visual {
        position: relative;
        min-height: 440px;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* BACKGROUND CIRCLE */

    .otp-delivery-circle {
        position: absolute;
        width: 410px;
        height: 410px;
        border-radius: 50%;
        background:
            radial-gradient(circle at 30% 25%, rgba(111, 161, 215, 0.20), transparent 38%),
            linear-gradient(135deg, #dce8f6 0%, #edf3fb 100%);
        z-index: 1;
    }


    /* MAIN IMAGE BOX */

    .otp-delivery-image-box {
        position: relative;
        z-index: 2;
        width: 340px;
        height: 340px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .otp-delivery-image-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: block;
        filter: drop-shadow(0 20px 28px rgba(36, 60, 112, 0.12));
    }


    .otp-delivery-floating {
        position: absolute;
        z-index: 4;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 15px;
        background: rgba(255, 255, 255, 0.97);
        border: 1px solid rgba(71, 101, 176, 0.13);
        border-radius: 14px;
        box-shadow: 0 14px 35px rgba(35, 54, 100, 0.12);
    }

    .otp-floating-secure {
        top: 42px;
        right: 5px;
    }

    .otp-floating-speed {
        bottom: 42px;
        left: 5px;
    }


    /* FLOATING ICON */

    .otp-floating-icon {
        width: 38px;
        height: 38px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: linear-gradient(135deg, #4268c4, #5c4bc5);
        color: #ffffff;
        font-size: 16px;
    }

    .otp-delivery-floating strong {
        display: block;
        margin-bottom: 3px;
        color: #2a3951;
        font-size: 13px;
        font-weight: 700;
    }

    .otp-delivery-floating span {
        display: block;
        color: #778395;
        font-size: 11px;
    }


    .otp-delivery-content {
        width: 100%;
    }


    /* LABEL */

    .otp-delivery-label {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 15px;
        margin-bottom: 18px;
        border: 1px solid rgba(61, 95, 180, 0.16);
        border-radius: 30px;
        background: #ffffff;
        color: #3d5fb4;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.2px;
    }

    .otp-delivery-label span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #486bc2;
        animation: otpDeliveryBlink 1.5s ease-in-out infinite;
    }

    @keyframes otpDeliveryBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.35;
            transform: scale(0.65);
        }

    }


    /* HEADING */

    .otp-delivery-content h2 {
        margin: 0 0 22px;
        color: #1f2d44;
        font-size: 44px;
        line-height: 1.22;
        font-weight: 800;
        letter-spacing: -1px;
    }

    .otp-delivery-content h2 em {
        font-style: normal;
        color: #3d63bd;
    }


    /* PARAGRAPHS */

    .otp-delivery-content>p {
        max-width: 680px;
        margin: 0 0 16px;
        color: #5c697b;
        font-size: 16px;
        line-height: 1.75;
    }


    .otp-delivery-highlights {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-top: 28px;
    }

    .otp-delivery-highlight {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 14px 12px;
        min-height: 74px;
        background: #ffffff;
        border: 1px solid #e2e8f2;
        border-radius: 12px;
        transition:
            background 0.25s ease,
            border-color 0.25s ease,
            box-shadow 0.25s ease;
    }


    /* NO CARD MOVEMENT */

    .otp-delivery-highlight:hover {
        transform: none;
        background: #f4f7ff;
        border-color: #bdcbed;
        box-shadow: 0 8px 20px rgba(50, 76, 135, 0.07);
    }


    /* HIGHLIGHT ICON */

    .otp-highlight-icon {
        width: 36px;
        height: 36px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: #eef3ff;
        color: #4167c0;
        font-size: 16px;
        font-weight: 700;
    }

    .otp-delivery-highlight strong {
        display: block;
        margin-bottom: 3px;
        color: #314057;
        font-size: 12px;
        line-height: 1.3;
        font-weight: 700;
    }

    .otp-delivery-highlight span {
        display: block;
        color: #8791a0;
        font-size: 10px;
        line-height: 1.35;
    }


    @media(max-width:1024px) {

        .otp-delivery-section {
            padding: 55px 25px;
        }

        .otp-delivery-container {
            grid-template-columns: 1fr;
            gap: 45px;
        }

        .otp-delivery-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .otp-delivery-visual {
            min-height: 410px;
        }

    }


    @media(max-width:767px) {

        .otp-delivery-section {
            padding: 45px 16px;
        }

        .otp-delivery-container {
            gap: 35px;
        }

        .otp-delivery-content h2 {
            font-size: 30px;
            line-height: 1.2;
            letter-spacing: -0.5px;
        }

        .otp-delivery-content h2 br {
            display: none;
        }

        .otp-delivery-content>p {
            font-size: 15px;
            line-height: 1.7;
        }

        .otp-delivery-highlights {
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .otp-delivery-visual {
            min-height: 350px;
        }

        .otp-delivery-circle {
            width: 290px;
            height: 290px;
        }

        .otp-delivery-image-box {
            width: 250px;
            height: 250px;
        }

        .otp-delivery-floating {
            padding: 10px 12px;
        }

        .otp-floating-secure {
            top: 5px;
            right: 0;
        }

        .otp-floating-speed {
            bottom: 5px;
            left: 0;
        }

        .otp-floating-icon {
            width: 34px;
            height: 34px;
        }

    }


    .jso95{

    svg{
        fill: #3A63C1;
        width: 20px;
    }
    }
</style>

<section class="otp-delivery-section">

    <div class="otp-delivery-container">

        <!-- LEFT VISUAL -->
        <div class="otp-delivery-visual">

            <div class="otp-delivery-circle"></div>

            <div class="otp-delivery-image-box">
                <img
                    src="assets/images/otp_sms_6s.png-removebg-preview.png"
                    alt="Secure OTP SMS Authentication">
            </div>

            <!-- Floating Security Card -->
            <div class="otp-delivery-floating otp-floating-secure left-right-animation ">
                <div class="otp-floating-icon"><span class="jso951"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z"/></svg></span></div>
                <div>
                    <strong>Secure Delivery</strong>
                    <span>Protected OTP Routing</span>
                </div>
            </div>

            <!-- Floating Speed Card -->
            <div class="otp-delivery-floating otp-floating-speed right-left-animation ">
                <div class="otp-floating-icon"><span class="jso95"><svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M128 320L156.5 92C158.5 76 172.1 64 188.3 64L356.9 64C371.9 64 384 76.1 384 91.1C384 94.3 383.4 97.6 382.3 100.6L336 224L475.3 224C495.5 224 512 240.4 512 260.7C512 268.1 509.8 275.3 505.6 281.4L313.4 562.4C307.5 571 297.8 576.1 287.5 576.1L284.6 576.1C268.9 576.1 256.1 563.3 256.1 547.6C256.1 545.3 256.4 543 257 540.7L304 352L160 352C142.3 352 128 337.7 128 320z"/></svg></span></div>
                <div>
                    <strong>Under 6 Seconds</strong>
                    <span>Ultra-Fast OTP Delivery</span>
                </div>
            </div>

        </div>


        <!-- RIGHT CONTENT -->
        <div class="otp-delivery-content">

            <div class="otp-delivery-label">
                <span></span>
                FAST & SECURE OTP DELIVERY
            </div>

            <h2>
                OTP SMS Service: Guaranteed<br>
                Delivery in Under <em>6 Seconds</em>
            </h2>

            <p>
                At Mtalkz, we use premium SMS routes to deliver OTPs in under six
                seconds, helping users complete authentication without unnecessary
                delays. Our intelligent route optimization ensures fast delivery and
                dependable accuracy for every verification request.
            </p>

            <p>
                With enterprise-grade uptime and robust failover routing, our OTP SMS
                service supports secure authentication for login, signup, banking,
                transactions, e-commerce, and other critical business applications.
            </p>


            <!-- BOTTOM HIGHLIGHTS -->
            <div class="otp-delivery-highlights">

                <div class="otp-delivery-highlight">
                    <div class="otp-highlight-icon"><span class="jso95"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M128 320L156.5 92C158.5 76 172.1 64 188.3 64L356.9 64C371.9 64 384 76.1 384 91.1C384 94.3 383.4 97.6 382.3 100.6L336 224L475.3 224C495.5 224 512 240.4 512 260.7C512 268.1 509.8 275.3 505.6 281.4L313.4 562.4C307.5 571 297.8 576.1 287.5 576.1L284.6 576.1C268.9 576.1 256.1 563.3 256.1 547.6C256.1 545.3 256.4 543 257 540.7L304 352L160 352C142.3 352 128 337.7 128 320z"/></svg></span></div>
                    <div>
                        <strong>Lightning Fast</strong>
                        <span>Delivered in seconds</span>
                    </div>
                </div>

                <div class="otp-delivery-highlight">
                    <div class="otp-highlight-icon">✓</div>
                    <div>
                        <strong>High Accuracy</strong>
                        <span>Optimized delivery routes</span>
                    </div>
                </div>

                <div class="otp-delivery-highlight">
                    <div class="otp-highlight-icon">◉</div>
                    <div>
                        <strong>Always Reliable</strong>
                        <span>Built for critical verifications</span>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>