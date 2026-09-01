<style>
    .mtalkz-otp-flow-section {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding: 72px 20px;
        background:
            radial-gradient(circle at 8% 15%,
                rgba(61, 103, 200, 0.08) 0,
                rgba(61, 103, 200, 0) 24%),
            radial-gradient(circle at 92% 85%,
                rgba(88, 70, 200, 0.08) 0,
                rgba(88, 70, 200, 0) 26%),
            #f7f9fd;
    }

    .mtalkz-otp-flow-container {
        width: 100%;
        max-width: 1320px;
        margin: 0 auto;
    }


    .mtalkz-otp-flow-heading {
        max-width: 800px;
        margin: 0 auto 45px;
        text-align: center;
    }

    .mtalkz-otp-flow-label {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 8px 15px;
        margin-bottom: 17px;
        border: 1px solid rgba(54, 92, 181, 0.16);
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.75);
        color: #365cb5;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.4px;
    }

    .mtalkz-otp-flow-label span {
        width: 7px;
        height: 7px;
        display: block;
        border-radius: 50%;
        background: #4168c5;
        box-shadow: 0 0 0 5px rgba(65, 104, 197, 0.1);
        animation: mtalkzOtpPulse 1.8s infinite;
    }

    .mtalkz-otp-flow-heading h2 {
        margin: 0;
        color: #1e2f4a;
        font-size: 44px;
        line-height: 1.15;
        font-weight: 800;
        letter-spacing: -1.2px;
    }

    .mtalkz-otp-flow-heading h2 span {
        color: #3d66c5;
    }

    .mtalkz-otp-flow-heading p {
        max-width: 690px;
        margin: 18px auto 0;
        color: #617087;
        font-size: 17px;
        line-height: 1.75;
    }


    .mtalkz-otp-flow-grid {
        position: relative;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 18px;
    }

    .mtalkz-otp-flow-card {
        position: relative;
        min-height: 250px;
        padding: 26px 24px 25px;
        overflow: hidden;
        border: 1px solid #e1e7f1;
        border-radius: 18px;
        background: #ffffff;
        box-shadow: 0 10px 30px rgba(31, 51, 91, 0.05);
        transition:
            border-color 0.25s ease,
            box-shadow 0.25s ease;
    }

    /* Card UP move nahi karega */
    .mtalkz-otp-flow-card:hover {
        border-color: rgba(58, 98, 194, 0.45);
        box-shadow: 0 14px 32px rgba(44, 72, 136, 0.1);
    }

    .mtalkz-otp-step-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 24px;
    }

    .mtalkz-otp-step-number {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 46px;
        height: 46px;
        flex: 0 0 46px;
        border-radius: 13px;
        background: #eef3ff;
        color: #4168c5;
        font-size: 14px;
        font-weight: 800;
        transition:
            background 0.25s ease,
            color 0.25s ease;
    }

    /* ONLY NUMBER BOX COLOR CHANGE */
    .mtalkz-otp-flow-card:hover .mtalkz-otp-step-number {
        background: #4168c5;
        color: #ffffff;
    }

    .mtalkz-otp-step-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 14px;
        background: #f5f7fb;
        font-size: 21px;
    }

    .mtalkz-otp-flow-card h3 {
        margin: 0 0 10px;
        color: #24354e;
        font-size: 20px;
        line-height: 1.35;
        font-weight: 700;
    }

    .mtalkz-otp-flow-card p {
        margin: 0;
        color: #68778d;
        font-size: 15px;
        line-height: 1.7;
    }

    .mtalkz-otp-card-line {
        position: absolute;
        left: 24px;
        bottom: 0;
        width: 48px;
        height: 3px;
        border-radius: 10px 10px 0 0;
        background: linear-gradient(90deg, #4168c5, #6251c8);
        transition: width 0.3s ease;
    }

    .mtalkz-otp-flow-card:hover .mtalkz-otp-card-line {
        width: calc(100% - 48px);
    }

    @keyframes mtalkzOtpPulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.5;
            transform: scale(1.15);
        }
    }



    @media (max-width: 1100px) {

        .mtalkz-otp-flow-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .mtalkz-otp-flow-card {
            min-height: 230px;
        }

    }


    @media (max-width: 767px) {

        .mtalkz-otp-flow-section {
            padding: 55px 16px;
        }

        .mtalkz-otp-flow-heading {
            margin-bottom: 32px;
        }

        .mtalkz-otp-flow-heading h2 {
            font-size: 31px;
            letter-spacing: -0.6px;
        }

        .mtalkz-otp-flow-heading p {
            font-size: 15px;
            line-height: 1.65;
        }

        .mtalkz-otp-flow-grid {
            grid-template-columns: 1fr;
            gap: 14px;
        }

        .mtalkz-otp-flow-card {
            min-height: auto;
            padding: 22px 20px 24px;
        }

        .mtalkz-otp-flow-card h3 {
            font-size: 19px;
        }

        .mtalkz-otp-flow-label {
            font-size: 10px;
        }

    }

    .jso952{
        svg{
            fill: #4761C4;
            width: 25px;
        }
    }
</style>

<section class="mtalkz-otp-flow-section">
    <div class="mtalkz-otp-flow-container">

        <!-- Section Heading -->
        <div class="mtalkz-otp-flow-heading">
            <div class="mtalkz-otp-flow-label">
                <span></span>
                HOW OTP AUTHENTICATION WORKS
            </div>

            <h2>
                Secure Verification in
                <span>Four Simple Steps</span>
            </h2>

            <p>
                From requesting a verification code to confirming user identity,
                Mtalkz OTP SMS makes every authentication process fast, secure
                and reliable.
            </p>
        </div>

        <!-- Steps -->
        <div class="mtalkz-otp-flow-grid">

            <!-- Step 01 -->
            <div class="mtalkz-otp-flow-card qwety">
                <div class="mtalkz-otp-step-top">
                    <div class="mtalkz-otp-step-number">01</div>
                    <div class="mtalkz-otp-step-icon"><span class="jso952"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M208 64C172.7 64 144 92.7 144 128L144 512C144 547.3 172.7 576 208 576L432 576C467.3 576 496 547.3 496 512L496 128C496 92.7 467.3 64 432 64L208 64zM280 480L360 480C373.3 480 384 490.7 384 504C384 517.3 373.3 528 360 528L280 528C266.7 528 256 517.3 256 504C256 490.7 266.7 480 280 480z"/></svg></span></div>
                </div>

                <h3>User Requests OTP</h3>

                <p>
                    The user starts a login, signup, transaction or account
                    verification process.
                </p>

                <div class="mtalkz-otp-card-line"></div>
            </div>

            <!-- Step 02 -->
            <div class="mtalkz-otp-flow-card qwety">
                <div class="mtalkz-otp-step-top">
                    <div class="mtalkz-otp-step-number">02</div>
                    <div class="mtalkz-otp-step-icon"><span class="jso952"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M128 320L156.5 92C158.5 76 172.1 64 188.3 64L356.9 64C371.9 64 384 76.1 384 91.1C384 94.3 383.4 97.6 382.3 100.6L336 224L475.3 224C495.5 224 512 240.4 512 260.7C512 268.1 509.8 275.3 505.6 281.4L313.4 562.4C307.5 571 297.8 576.1 287.5 576.1L284.6 576.1C268.9 576.1 256.1 563.3 256.1 547.6C256.1 545.3 256.4 543 257 540.7L304 352L160 352C142.3 352 128 337.7 128 320z"></path></svg></span></div>
                </div>

                <h3>OTP Is Generated</h3>

                <p>
                    A unique and time-sensitive one-time password is generated
                    securely for the user.
                </p>

                <div class="mtalkz-otp-card-line"></div>
            </div>

            <!-- Step 03 -->
            <div class="mtalkz-otp-flow-card qwety">
                <div class="mtalkz-otp-step-top">
                    <div class="mtalkz-otp-step-number">03</div>
                    <div class="mtalkz-otp-step-icon"><span class="jso952"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M576 304C576 436.5 461.4 544 320 544C282.9 544 247.7 536.6 215.9 523.3L97.5 574.1C88.1 578.1 77.3 575.8 70.4 568.3C63.5 560.8 62 549.8 66.8 540.8L115.6 448.6C83.2 408.3 64 358.3 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304z"/></svg></span></div>
                </div>

                <h3>OTP Delivered Instantly</h3>

                <p>
                    The verification code is delivered to the user's registered
                    mobile number through secure SMS routes.
                </p>

                <div class="mtalkz-otp-card-line"></div>
            </div>

            <!-- Step 04 -->
            <div class="mtalkz-otp-flow-card qwety">
                <div class="mtalkz-otp-step-top">
                    <div class="mtalkz-otp-step-number">04</div>
                    <div class="mtalkz-otp-step-icon"><span class="jso952"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M530.8 134.1C545.1 144.5 548.3 164.5 537.9 178.8L281.9 530.8C276.4 538.4 267.9 543.1 258.5 543.9C249.1 544.7 240 541.2 233.4 534.6L105.4 406.6C92.9 394.1 92.9 373.8 105.4 361.3C117.9 348.8 138.2 348.8 150.7 361.3L252.2 462.8L486.2 141.1C496.6 126.8 516.6 123.6 530.9 134z"/></svg></span></div>
                </div>

                <h3>Identity Verified</h3>

                <p>
                    The user enters the correct OTP and gets authenticated
                    quickly for secure access or transactions.
                </p>

                <div class="mtalkz-otp-card-line"></div>
            </div>

        </div>

    </div>
</section>

<script>
  (function() {
    "use strict";

    var icpCards = document.querySelectorAll('.qwety');
    var icpGlowRadius = 230; // px — soft green glow that spreads out from the cursor's corner
    var icpMaxTilt = 12; // deg — max corner tilt

    icpCards.forEach(function(card) {

      // create the green cursor-follow glow layer once per card
      var icpGlow = document.createElement('div');
      icpGlow.className = 'icp-cursor-glow';
      icpGlow.style.width = (icpGlowRadius * 0.5) + 'px';
      icpGlow.style.height = (icpGlowRadius * 0.5) + 'px';
      card.appendChild(icpGlow);

      card.addEventListener('mousemove', function(e) {
        var rect = card.getBoundingClientRect();
        var x = e.clientX - rect.left;
        var y = e.clientY - rect.top;

        // 3D tilt — rotate toward whichever corner/edge the cursor is near
        var px = (x / rect.width) - 0.5; // -0.5 .. 0.5
        var py = (y / rect.height) - 0.5; // -0.5 .. 0.5
        var rotateY = px * icpMaxTilt * 2;
        var rotateX = py * -icpMaxTilt * 2;
        card.style.transform =
          'perspective(800px) rotateX(' + rotateX.toFixed(2) + 'deg) rotateY(' + rotateY.toFixed(2) + 'deg) translateZ(-6px) translateY(-4px)';

        // green glow following the cursor, clipped to a 50px radius
        icpGlow.style.left = x + 'px';
        icpGlow.style.top = y + 'px';
        icpGlow.style.opacity = '1';
      });

      card.addEventListener('mouseleave', function() {
        card.style.transform = '';
        icpGlow.style.opacity = '0';
      });
    });

  })();
</script>