<style>
   
    #kdOtpCounterSection {
        --kd-otp-primary: #3b67c9;
        --kd-otp-primary-dark: #294fa8;
        --kd-otp-purple: #5a4fc7;
        --kd-otp-cyan: #178da6;
        --kd-otp-navy: #263347;
        --kd-otp-text: #697586;
        --kd-otp-border: #dfe7f4;
        --kd-otp-white: #ffffff;

        position: relative;
        width: 100%;
        overflow: hidden;

        padding: 68px 24px 60px;

        background:
            radial-gradient(circle at 8% 45%,
                rgba(59, 103, 201, .075) 0%,
                transparent 24%),
            radial-gradient(circle at 92% 70%,
                rgba(90, 79, 199, .06) 0%,
                transparent 25%),
            linear-gradient(135deg,
                #ffffff 0%,
                #f7f9fd 48%,
                #ffffff 100%);
/* 
        font-family:
            Inter,
            Arial,
            Helvetica,
            sans-serif; */
    }


    #kdOtpCounterSection .kd-otp-counter-orb {
        position: absolute;

        border-radius: 50%;

        pointer-events: none;
    }

    #kdOtpCounterSection .kd-otp-counter-orb-one {
        width: 380px;
        height: 380px;

        top: -260px;
        right: -140px;

        border: 1px solid rgba(59, 103, 201, .09);
    }

    #kdOtpCounterSection .kd-otp-counter-orb-two {
        width: 300px;
        height: 300px;

        bottom: -230px;
        left: -130px;

        background: rgba(90, 79, 199, .035);
    }


    #kdOtpCounterSection .kd-otp-counter-container {
        position: relative;
        z-index: 2;

        width: 100%;
        max-width: 1220px;

        margin: 0 auto;
    }


    #kdOtpCounterSection .kd-otp-counter-heading {
        max-width: 700px;

        margin: 0 auto 38px;

        text-align: center;
    }

    #kdOtpCounterSection .kd-otp-counter-badge {
        display: inline-flex;

        align-items: center;

        gap: 8px;

        padding: 8px 14px;

        margin-bottom: 16px;

        border: 1px solid rgba(59, 103, 201, .16);
        border-radius: 50px;

        color: var(--kd-otp-primary);

        background: rgba(59, 103, 201, .045);

        font-size: 10px;
        font-weight: 800;

        letter-spacing: .8px;

        text-transform: uppercase;
    }

    #kdOtpCounterSection .kd-otp-counter-badge-dot {
        width: 7px;
        height: 7px;

        border-radius: 50%;

        background: var(--kd-otp-primary);

        animation: kdOtpBadgeBlink 1.5s infinite ease-in-out;
    }

    #kdOtpCounterSection .kd-otp-counter-heading h2 {
        margin: 0;

        color: var(--kd-otp-navy);

        font-size: 44px;

        line-height: 1.15;

        font-weight: 800;

        letter-spacing: -1.3px;
    }

    #kdOtpCounterSection .kd-otp-counter-heading h2 span {
        color: var(--kd-otp-primary);
    }

    #kdOtpCounterSection .kd-otp-counter-heading p {
        max-width: 620px;

        margin: 16px auto 0;

        color: var(--kd-otp-text);

        font-size: 14px;

        line-height: 1.75;
    }



    #kdOtpCounterSection .kd-otp-counter-grid {
        display: grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        gap: 14px;
    }


    #kdOtpCounterSection .kd-otp-counter-card {
        position: relative;

        min-width: 0;

        min-height: 225px;

        padding: 22px 18px;

        border: 1px solid var(--kd-otp-border);

        border-radius: 17px;

        background:
            linear-gradient(145deg,
                rgba(255, 255, 255, .98),
                rgba(247, 250, 255, .92));

        box-shadow:
            0 10px 28px rgba(36, 55, 87, .045);

        text-align: center;

        transition:
            border-color .25s ease,
            box-shadow .25s ease,
            background .25s ease;
    }


    /* NO CARD MOVE ON HOVER */

    #kdOtpCounterSection .kd-otp-counter-card:hover {
        border-color: rgba(59, 103, 201, .28);

        background:
            linear-gradient(145deg,
                #ffffff,
                #f4f7ff);

        box-shadow:
            0 14px 30px rgba(59, 103, 201, .08);
    }

    #kdOtpCounterSection .kd-otp-counter-icon {
        width: 42px;
        height: 42px;

        display: flex;

        align-items: center;
        justify-content: center;

        margin: 0 auto 16px;

        border-radius: 12px;

        color: #ffffff;

        background:
            linear-gradient(135deg,
                #4a76d4,
                #3158b6);

        box-shadow:
            0 8px 18px rgba(59, 103, 201, .16);

        font-size: 18px;

        font-weight: 800;
    }

    #kdOtpCounterSection .kd-otp-counter-icon-purple {
        background:
            linear-gradient(135deg,
                #7669d8,
                #5545bb);

        box-shadow:
            0 8px 18px rgba(90, 79, 199, .16);
    }

    #kdOtpCounterSection .kd-otp-counter-icon-cyan {
        background:
            linear-gradient(135deg,
                #39a7be,
                #197c94);

        box-shadow:
            0 8px 18px rgba(23, 141, 166, .15);
    }

    #kdOtpCounterSection .kd-otp-counter-icon-indigo {
        background:
            linear-gradient(135deg,
                #586ee1,
                #3c4cc0);

        box-shadow:
            0 8px 18px rgba(60, 76, 192, .15);
    }


    #kdOtpCounterSection .kd-otp-counter-number {
        margin-bottom: 9px;

        color: var(--kd-otp-primary);

        font-size: clamp(29px, 3vw, 38px);

        line-height: 1;

        font-weight: 800;

        letter-spacing: -.8px;
    }

    #kdOtpCounterSection .kd-otp-counter-card:nth-child(2) .kd-otp-counter-number {
        color: var(--kd-otp-purple);
    }

    #kdOtpCounterSection .kd-otp-counter-card:nth-child(3) .kd-otp-counter-number {
        color: var(--kd-otp-cyan);
    }

    #kdOtpCounterSection .kd-otp-counter-card:nth-child(4) .kd-otp-counter-number {
        color: #4b5fd0;
    }

    #kdOtpCounterSection .kd-otp-counter-card h3 {
        margin: 0 0 8px;

        color: #344255;

        font-size: 14px;

        line-height: 1.35;

        font-weight: 700;
    }

    #kdOtpCounterSection .kd-otp-counter-card p {
        margin: 0;

        color: #8793a4;

        font-size: 11px;

        line-height: 1.65;
    }

    #kdOtpCounterSection .kd-otp-counter-bottom {
        max-width: 720px;

        display: flex;

        align-items: center;
        justify-content: center;

        gap: 10px;

        margin: 24px auto 0;

        padding: 12px 18px;

        border: 1px solid rgba(59, 103, 201, .13);

        border-radius: 12px;

        background:
            linear-gradient(90deg,
                rgba(59, 103, 201, .045),
                rgba(90, 79, 199, .04));
    }

    #kdOtpCounterSection .kd-otp-counter-bottom-icon {
        width: 24px;
        height: 24px;

        flex: 0 0 24px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        color: #ffffff;

        background:
            linear-gradient(135deg,
                #4a76d4,
                #5545bb);

        font-size: 11px;

        font-weight: 800;
    }

    #kdOtpCounterSection .kd-otp-counter-bottom p {
        margin: 0;

        color: #647286;

        font-size: 11px;

        line-height: 1.5;

        font-weight: 500;
    }


    @keyframes kdOtpBadgeBlink {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: .3;
            transform: scale(.7);
        }

    }


    @media (max-width: 1024px) {

        #kdOtpCounterSection {
            padding: 58px 20px 52px;
        }

        #kdOtpCounterSection .kd-otp-counter-grid {
            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 14px;
        }

        #kdOtpCounterSection .kd-otp-counter-card {
            min-height: 205px;
        }

    }


    @media (max-width: 767px) {

        #kdOtpCounterSection {
            padding: 48px 15px 42px;
        }

        #kdOtpCounterSection .kd-otp-counter-heading {
            margin-bottom: 28px;
        }

        #kdOtpCounterSection .kd-otp-counter-heading h2 {
            font-size: 31px;

            letter-spacing: -1px;
        }

        #kdOtpCounterSection .kd-otp-counter-heading p {
            font-size: 13px;
        }

        #kdOtpCounterSection .kd-otp-counter-grid {
            gap: 10px;
        }

        #kdOtpCounterSection .kd-otp-counter-card {
            min-height: 190px;

            padding: 18px 12px;

            border-radius: 14px;
        }

        #kdOtpCounterSection .kd-otp-counter-icon {
            width: 38px;
            height: 38px;

            margin-bottom: 13px;

            border-radius: 10px;

            font-size: 16px;
        }

        #kdOtpCounterSection .kd-otp-counter-number {
            font-size: 28px;
        }

        #kdOtpCounterSection .kd-otp-counter-card h3 {
            font-size: 12px;
        }

        #kdOtpCounterSection .kd-otp-counter-card p {
            font-size: 10px;

            line-height: 1.55;
        }

        #kdOtpCounterSection .kd-otp-counter-bottom {
            align-items: flex-start;

            padding: 12px 14px;

            text-align: left;
        }

    }


    @media (max-width: 480px) {

        #kdOtpCounterSection {
            padding: 42px 11px 35px;
        }

        #kdOtpCounterSection .kd-otp-counter-badge {
            padding: 7px 11px;

            font-size: 9px;
        }

        #kdOtpCounterSection .kd-otp-counter-heading h2 {
            font-size: 27px;
        }

        #kdOtpCounterSection .kd-otp-counter-heading p {
            max-width: 340px;

            font-size: 12px;
        }

        #kdOtpCounterSection .kd-otp-counter-grid {
            gap: 8px;
        }

        #kdOtpCounterSection .kd-otp-counter-card {
            min-height: 178px;

            padding: 15px 9px;
        }

        #kdOtpCounterSection .kd-otp-counter-icon {
            width: 35px;
            height: 35px;

            margin-bottom: 11px;

            font-size: 14px;
        }

        #kdOtpCounterSection .kd-otp-counter-number {
            margin-bottom: 7px;

            font-size: 25px;
        }

        #kdOtpCounterSection .kd-otp-counter-card h3 {
            margin-bottom: 6px;

            font-size: 11px;
        }

        #kdOtpCounterSection .kd-otp-counter-card p {
            font-size: 9px;
        }

        #kdOtpCounterSection .kd-otp-counter-bottom {
            gap: 8px;

            margin-top: 16px;

            padding: 11px;
        }

        #kdOtpCounterSection .kd-otp-counter-bottom p {
            font-size: 10px;
        }

    }

    .afhiad87{

    svg{
        fill: white;
        width: 23px;
    }
    }
</style>

<section class="kd-otp-counter-section" id="kdOtpCounterSection">

    <!-- Background Decorations -->
    <div class="kd-otp-counter-orb kd-otp-counter-orb-one"></div>
    <div class="kd-otp-counter-orb kd-otp-counter-orb-two"></div>

    <div class="kd-otp-counter-container">

        <!-- SECTION HEADING -->
        <div class="kd-otp-counter-heading">

            <div class="kd-otp-counter-badge">
                <span class="kd-otp-counter-badge-dot"></span>
                OTP SMS PERFORMANCE
            </div>

            <h2>
                Secure Verification.<br>
                <span>Reliable Results.</span>
            </h2>

            <p>
                Built for fast, secure and dependable one-time password delivery
                whenever your users need verification.
            </p>

        </div>


        <!-- COUNTER CARDS -->
        <div class="kd-otp-counter-grid">


            <!-- Counter 1 -->
            <div class="kd-otp-counter-card">

                <div class="kd-otp-counter-icon">
                    <span class="afhiad87"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M128 320L156.5 92C158.5 76 172.1 64 188.3 64L356.9 64C371.9 64 384 76.1 384 91.1C384 94.3 383.4 97.6 382.3 100.6L336 224L475.3 224C495.5 224 512 240.4 512 260.7C512 268.1 509.8 275.3 505.6 281.4L313.4 562.4C307.5 571 297.8 576.1 287.5 576.1L284.6 576.1C268.9 576.1 256.1 563.3 256.1 547.6C256.1 545.3 256.4 543 257 540.7L304 352L160 352C142.3 352 128 337.7 128 320z"/></svg></span>
                </div>

                <div class="kd-otp-counter-number">
                    <span class="kd-otp-count" data-target="10" data-suffix="s">0</span>
                </div>

                <h3>Fast OTP Delivery</h3>

                <p>
                    Deliver verification codes quickly when every second matters.
                </p>

            </div>


            <!-- Counter 2 -->
            <div class="kd-otp-counter-card">

                <div class="kd-otp-counter-icon kd-otp-counter-icon-purple">
                    <span>✓</span>
                </div>

                <div class="kd-otp-counter-number">
                    <span class="kd-otp-count" data-target="99.9" data-decimal="true" data-suffix="%">0</span>
                </div>

                <h3>Reliable Delivery</h3>

                <p>
                    Dependable messaging infrastructure for important verifications.
                </p>

            </div>


            <!-- Counter 3 -->
            <div class="kd-otp-counter-card">

                <div class="kd-otp-counter-icon kd-otp-counter-icon-cyan">
                    <span>◉</span>
                </div>

                <div class="kd-otp-counter-number">
                    <span class="kd-otp-count" data-target="24" data-suffix="/7">0</span>
                </div>

                <h3>Always Available</h3>

                <p>
                    Support your authentication flow around the clock.
                </p>

            </div>


            <!-- Counter 4 -->
            <div class="kd-otp-counter-card">

                <div class="kd-otp-counter-icon kd-otp-counter-icon-indigo">
                    <span>⌁</span>
                </div>

                <div class="kd-otp-counter-number">
                    <span class="kd-otp-count" data-target="100" data-suffix="%">0</span>
                </div>

                <h3>Secure Communication</h3>

                <p>
                    Designed to support safer and smoother user verification.
                </p>

            </div>

        </div>


        <!-- BOTTOM TRUST BAR -->
        <div class="kd-otp-counter-bottom">

            <div class="kd-otp-counter-bottom-icon">✓</div>

            <p>
                Trusted OTP messaging designed for secure logins, account verification and transactions.
            </p>

        </div>

    </div>

</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const counterSection = document.querySelector(
            "#kdOtpCounterSection"
        );

        const counters = document.querySelectorAll(
            "#kdOtpCounterSection .kd-otp-count"
        );

        let hasAnimated = false;


        function animateCounters() {

            if (hasAnimated) return;

            hasAnimated = true;


            counters.forEach(function(counter) {

                const target = parseFloat(
                    counter.getAttribute("data-target")
                );

                const suffix =
                    counter.getAttribute("data-suffix") || "";

                const isDecimal =
                    counter.getAttribute("data-decimal") === "true";

                const duration = 1800;

                const startTime = performance.now();


                function updateCounter(currentTime) {

                    const elapsed =
                        currentTime - startTime;

                    const progress =
                        Math.min(elapsed / duration, 1);

                    const easeOut =
                        1 - Math.pow(1 - progress, 3);

                    const currentValue =
                        target * easeOut;


                    if (isDecimal) {

                        counter.textContent =
                            currentValue.toFixed(1) + suffix;

                    } else {

                        counter.textContent =
                            Math.floor(currentValue) + suffix;

                    }


                    if (progress < 1) {

                        requestAnimationFrame(updateCounter);

                    } else {

                        if (isDecimal) {

                            counter.textContent =
                                target.toFixed(1) + suffix;

                        } else {

                            counter.textContent =
                                target + suffix;

                        }

                    }

                }


                requestAnimationFrame(updateCounter);

            });

        }


        const observer = new IntersectionObserver(

            function(entries) {

                entries.forEach(function(entry) {

                    if (entry.isIntersecting) {

                        animateCounters();

                    }

                });

            },

            {
                threshold: 0.35
            }

        );


        if (counterSection) {

            observer.observe(counterSection);

        }

    });
</script>