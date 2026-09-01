<style>
    #otp-api-features {
        width: 100%;
        padding: 55px 20px 60px;
        background:
            radial-gradient(circle at 50% 0%, rgba(58, 103, 191, 0.08), transparent 32%),
            #ffffff;
        overflow: hidden;
    }

    .otp-api-features__container {
        width: 100%;
        max-width: 1420px;
        margin: 0 auto;
    }


    .otp-api-features__heading {
        max-width: 1000px;
        margin: 0 auto 36px;
        text-align: center;
    }

    .otp-api-features__eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        margin-bottom: 12px;
        padding: 8px 15px;
        border: 1px solid rgba(51, 96, 183, 0.16);
        border-radius: 100px;
        background: rgba(51, 96, 183, 0.05);
        color: #315fae;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.3px;
        line-height: 1;
    }

    .otp-api-features__dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #3d68bd;
        animation: otpDotBlink 1.5s infinite;
    }

    @keyframes otpDotBlink {

        0%,
        100% {
            opacity: 1;
            box-shadow: 0 0 0 0 rgba(61, 104, 189, 0.35);
        }

        50% {
            opacity: 0.45;
            box-shadow: 0 0 0 6px rgba(61, 104, 189, 0);
        }
    }

    .otp-api-features__heading h2 {
        margin: 0;
        color: #20334d;
        font-family: inherit;
        font-size: 44px;
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -1.2px;
    }

    .otp-api-features__heading h2 em {
        color: #315FB8;
        font-style: normal;
    }

    .otp-api-features__heading p {
        max-width: 790px;
        margin: 16px auto 0;
        color: #607087;
        font-family: inherit;
        font-size: 17px;
        font-weight: 400;
        line-height: 1.65;
    }


    .otp-api-features__grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 16px;
    }

    .otp-api-feature-card {
        position: relative;
        min-height: 185px;
        padding: 22px 22px 20px;
        border: 1px solid #e2e8f1;
        border-radius: 14px;
        background: #ffffff;
        box-shadow: 0 8px 25px rgba(29, 50, 80, 0.035);
        overflow: hidden;
        transition:
            border-color 0.25s ease,
            box-shadow 0.25s ease,
            background 0.25s ease;
    }

    /* Top line accent */
    .otp-api-feature-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 22px;
        width: 48px;
        height: 3px;
        border-radius: 0 0 10px 10px;
        background: linear-gradient(90deg, #2f64bb, #607fcd);
        opacity: 0.9;
    }

    .otp-api-feature-card:hover {
        border-color: rgba(52, 99, 185, 0.35);
        background: #fcfdff;
        box-shadow: 0 12px 30px rgba(38, 67, 113, 0.08);
    }

    .otp-api-feature-card__top {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 14px;
    }

    .otp-api-feature-card__icon {
        display: flex;
        flex: 0 0 48px;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: linear-gradient(135deg, #edf3ff, #e4edfc);
        color: #315fae;
        font-size: 20px;
        line-height: 1;
    }

    .otp-api-feature-card__number {
        display: block;
        margin-bottom: 4px;
        color: #5578ba;
        font-size: 10px;
        font-weight: 800;
        letter-spacing: 1.4px;
        line-height: 1;
    }

    .otp-api-feature-card h3 {
        margin: 0;
        color: #263952;
        font-family: inherit;
        font-size: 19px;
        font-weight: 750;
        line-height: 1.3;
    }

    .otp-api-feature-card p {
        margin: 0;
        color: #657389;
        font-family: inherit;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.65;
    }


    @media (max-width: 1024px) {
        #otp-api-features {
            padding: 50px 18px 55px;
        }

        .otp-api-features__grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 15px;
        }

        .otp-api-feature-card {
            min-height: 175px;
        }
    }

    @media (max-width: 650px) {
        #otp-api-features {
            padding: 42px 15px 48px;
        }

        .otp-api-features__heading {
            margin-bottom: 28px;
        }

        .otp-api-features__heading h2 {
            font-size: 28px;
            letter-spacing: -0.6px;
        }

        .otp-api-features__heading p {
            font-size: 15px;
            line-height: 1.6;
        }

        .otp-api-features__grid {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .otp-api-feature-card {
            min-height: auto;
            padding: 19px 18px;
            border-radius: 13px;
        }

        .otp-api-feature-card::before {
            left: 18px;
        }

        .otp-api-feature-card__icon {
            flex-basis: 44px;
            width: 44px;
            height: 44px;
            font-size: 18px;
        }

        .otp-api-feature-card h3 {
            font-size: 17px;
        }

        .otp-api-feature-card p {
            font-size: 13.5px;
        }
    }


    /* green cursor-follow glow — spreads outward from wherever the cursor enters the card */
    .icp-cursor-glow {
        position: absolute;
        left: 0;
        top: 0;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: radial-gradient(circle, rgba(34, 64, 197, 0.2) 0%, rgba(45, 91, 190, 0.22) 30%, rgba(34, 91, 197, 0.08) 55%, rgba(34, 72, 197, 0) 72%);
        opacity: 0;
        pointer-events: none;
        transition: opacity .35s ease;
        z-index: 0;
    }

    .jso9532 {

        svg {
            width: 25px;
            fill: #4761C4;
        }
    }
</style>

<section class="otp-api-features" id="otp-api-features">
    <div class="otp-api-features__container">

        <!-- Section Heading -->
        <div class="otp-api-features__heading">
            <span class="otp-api-features__eyebrow">
                <span class="otp-api-features__dot"></span>
                OTP API SOLUTIONS
            </span>

            <h2>Secure OTP Authentication with the Mtalkz OTP <em>Authenticator API</em></h2>

            <p>
                Integrate fast, secure and reliable OTP verification into your website
                or application with a simple and powerful authentication API.
            </p>
        </div>

        <!-- Feature Cards -->
        <div class="otp-api-features__grid">

            <!-- Card 1 -->
            <article class="otp-api-feature-card qwety">
                <div class="otp-api-feature-card__top">
                    <div class="otp-api-feature-card__icon"><span class="jso9532"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M528 320C528 434.9 434.9 528 320 528C205.1 528 112 434.9 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320zM64 320C64 461.4 178.6 576 320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320zM296 184L296 320C296 328 300 335.5 306.7 340L402.7 404C413.7 411.4 428.6 408.4 436 397.3C443.4 386.2 440.4 371.4 429.3 364L344 307.2L344 184C344 170.7 333.3 160 320 160C306.7 160 296 170.7 296 184z" />
                            </svg></span></div>
                    <div>
                        <span class="otp-api-feature-card__number">01</span>
                        <h3>Fast OTP Delivery</h3>
                    </div>
                </div>
                <p>
                    Optimized SMS routes help deliver verification codes quickly
                    and reduce authentication delays.
                </p>
            </article>

            <!-- Card 2 -->
            <article class="otp-api-feature-card qwety">
                <div class="otp-api-feature-card__top">
                    <div class="otp-api-feature-card__icon"><span class="jso952"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z" />
                            </svg></span></div>
                    <div>
                        <span class="otp-api-feature-card__number">02</span>
                        <h3>Secure User Authentication</h3>
                    </div>
                </div>
                <p>
                    Add an extra layer of security for logins, signups,
                    transactions and sensitive user actions.
                </p>
            </article>

            <!-- Card 3 -->
            <article class="otp-api-feature-card qwety">
                <div class="otp-api-feature-card__top">
                    <div class="otp-api-feature-card__icon"><span class="jso952"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M91.6 73.8C79.3 68.8 65.3 74.7 60.4 87C47.2 119.5 40 154.9 40 192C40 229.1 47.2 264.5 60.4 297C65.4 309.3 79.4 315.2 91.7 310.2C104 305.2 109.9 291.2 104.9 278.9C94 252.2 88 222.8 88 192C88 161.2 94 131.8 104.9 105C109.9 92.7 103.9 78.7 91.7 73.7zM548.4 73.8C536.1 78.8 530.2 92.8 535.2 105.1C546.1 131.9 552.1 161.3 552.1 192.1C552.1 222.9 546.1 252.3 535.2 279.1C530.2 291.4 536.2 305.4 548.4 310.4C560.6 315.4 574.7 309.4 579.7 297.2C592.8 264.7 600.1 229.3 600.1 192.2C600.1 155.1 592.9 119.7 579.7 87.2C574.7 74.9 560.7 69 548.4 74zM372.1 229.2C379.6 218.7 384 205.9 384 192C384 156.7 355.3 128 320 128C284.7 128 256 156.7 256 192C256 205.9 260.4 218.7 267.9 229.2L130.9 530.8C123.6 546.9 130.7 565.9 146.8 573.2C162.9 580.5 181.9 573.4 189.2 557.3L209.8 512.1L430.4 512.1L451 557.3C458.3 573.4 477.3 580.5 493.4 573.2C509.5 565.9 516.6 546.9 509.3 530.8L372.1 229.2zM408.5 464L231.5 464L253.3 416L386.6 416L408.4 464zM320 269.3L364.8 368L275.1 368L319.9 269.3zM195.3 137.6C200.6 125.5 195.1 111.3 182.9 106C170.7 100.7 156.6 106.2 151.3 118.4C141.5 141 136 165.9 136 192C136 218.1 141.5 243 151.3 265.6C156.6 277.7 170.8 283.3 182.9 278C195 272.7 200.6 258.5 195.3 246.4C188 229.8 184 211.4 184 192C184 172.6 188 154.2 195.3 137.6zM488.7 118.4C483.4 106.3 469.2 100.7 457.1 106C445 111.3 439.4 125.5 444.7 137.6C452 154.2 456 172.6 456 192C456 211.4 452 229.8 444.7 246.4C439.4 258.5 444.9 272.7 457.1 278C469.3 283.3 483.4 277.8 488.7 265.6C498.5 243 504 218.1 504 192C504 165.9 498.5 141 488.7 118.4z" />
                            </svg></span></div>
                    <div>
                        <span class="otp-api-feature-card__number">03</span>
                        <h3>Reliable SMS Routes</h3>
                    </div>
                </div>
                <p>
                    Dedicated carrier connectivity helps maintain consistent
                    OTP delivery, even during high-volume traffic.
                </p>
            </article>

            <!-- Card 4 -->
            <article class="otp-api-feature-card qwety">
                <div class="otp-api-feature-card__top">
                    <div class="otp-api-feature-card__icon">
                        <span class="jso952">
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <g id="OTP">
                                    <path d="M458.4741,112H265V62.41A31.3815,31.3815,0,0,0,233.5879,31H62.4077A31.3806,31.3806,0,0,0,31,62.41V449.59A31.4379,31.4379,0,0,0,62.4077,481h171.18A31.4388,31.4388,0,0,0,265,449.59V292H458.4771A22.5231,22.5231,0,0,0,481,269.4771V134.5259A22.5257,22.5257,0,0,0,458.4741,112ZM125.5,50.08h45a11.25,11.25,0,0,1,0,22.5h-45a11.25,11.25,0,0,1,0-22.5Zm44.9956,411.7651h-45a11.25,11.25,0,1,1,0-22.5h45a11.25,11.25,0,0,1,0,22.5ZM245.1982,420.25H50.7974V91.75H245.1982V112H125.3149A22.3149,22.3149,0,0,0,103,134.3149V269.6641A22.3357,22.3357,0,0,0,125.3359,292H166v36.1489a11.1221,11.1221,0,0,0,18.9868,7.8643L229,292h16.1982Zm-24.39-210.06a11.3086,11.3086,0,0,1,4.14,15.39,11.198,11.198,0,0,1-15.39,4.14L195.25,221.44V238a11.25,11.25,0,0,1-22.5,0V221.44L158.437,229.72a11.198,11.198,0,0,1-15.39-4.14,11.3164,11.3164,0,0,1,4.14-15.39L161.5,202l-14.313-8.28a11.2689,11.2689,0,0,1,11.25-19.5293L172.75,182.47V166a11.25,11.25,0,0,1,22.5,0v16.47l14.3086-8.2793a11.2689,11.2689,0,0,1,11.25,19.5293L206.5,202Zm108,0a11.3086,11.3086,0,0,1,4.14,15.39,11.198,11.198,0,0,1-15.39,4.14L303.25,221.44V238a11.25,11.25,0,0,1-22.5,0V221.44L266.437,229.72a11.198,11.198,0,0,1-15.39-4.14,11.3164,11.3164,0,0,1,4.14-15.39L269.5,202l-14.313-8.28a11.2689,11.2689,0,0,1,11.25-19.5293L280.75,182.47V166a11.25,11.25,0,0,1,22.5,0v16.47l14.3086-8.2793a11.2689,11.2689,0,0,1,11.25,19.5293L314.5,202Zm108,0a11.3086,11.3086,0,0,1,4.14,15.39,11.198,11.198,0,0,1-15.39,4.14L411.25,221.44V238a11.25,11.25,0,0,1-22.5,0V221.44L374.437,229.72a11.198,11.198,0,0,1-15.39-4.14,11.3164,11.3164,0,0,1,4.14-15.39L377.5,202l-14.313-8.28a11.2689,11.2689,0,0,1,11.25-19.5293L388.75,182.47V166a11.25,11.25,0,0,1,22.5,0v16.47l14.3086-8.2793a11.2689,11.2689,0,0,1,11.25,19.5293L422.5,202Z" />

                                </g>

                            </svg>
                        </span>
                    </div>
                    <div>
                        <span class="otp-api-feature-card__number">04</span>
                        <h3>Flexible OTP Length</h3>
                    </div>
                </div>
                <p>
                    Configure 4 or 6 digit OTPs according to your application's
                    security and verification requirements.
                </p>
            </article>

            <!-- Card 5 -->
            <article class="otp-api-feature-card qwety">
                <div class="otp-api-feature-card__top">
                    <div class="otp-api-feature-card__icon"><span class="jso952"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M96 96C113.7 96 128 110.3 128 128L128 464C128 472.8 135.2 480 144 480L544 480C561.7 480 576 494.3 576 512C576 529.7 561.7 544 544 544L144 544C99.8 544 64 508.2 64 464L64 128C64 110.3 78.3 96 96 96zM208 288C225.7 288 240 302.3 240 320L240 384C240 401.7 225.7 416 208 416C190.3 416 176 401.7 176 384L176 320C176 302.3 190.3 288 208 288zM352 224L352 384C352 401.7 337.7 416 320 416C302.3 416 288 401.7 288 384L288 224C288 206.3 302.3 192 320 192C337.7 192 352 206.3 352 224zM432 256C449.7 256 464 270.3 464 288L464 384C464 401.7 449.7 416 432 416C414.3 416 400 401.7 400 384L400 288C400 270.3 414.3 256 432 256zM576 160L576 384C576 401.7 561.7 416 544 416C526.3 416 512 401.7 512 384L512 160C512 142.3 526.3 128 544 128C561.7 128 576 142.3 576 160z" />
                            </svg></span></div>
                    <div>
                        <span class="otp-api-feature-card__number">05</span>
                        <h3>Real-Time Reports &amp; Analytics</h3>
                    </div>
                </div>
                <p>
                    Monitor OTP activity, delivery performance and verification
                    trends with useful real-time reporting.
                </p>
            </article>

            <!-- Card 6 -->
            <article class="otp-api-feature-card qwety">
                <div class="otp-api-feature-card__top">
                    <div class="otp-api-feature-card__icon"><span class="jso952"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                <path d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z" />
                            </svg></span></div>
                    <div>
                        <span class="otp-api-feature-card__number">06</span>
                        <h3>Configurable OTP Validity</h3>
                    </div>
                </div>
                <p>
                    Set OTP expiration times in seconds, minutes or hours
                    based on your security and user-flow requirements.
                </p>
            </article>

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