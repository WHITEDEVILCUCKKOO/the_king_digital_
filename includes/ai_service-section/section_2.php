<!-- =========================================================
 KING DIGITAL — AI VIDEO SERVICE
 SECTION 02 — COMPACT COUNTER BAR
 DARK NAVY BLUE + ORANGE THEME
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    /* =========================================================
 RESET
========================================================= */

    #kd-ai-counterbar,
    #kd-ai-counterbar * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    #kd-ai-counterbar {

        --navy: #060F3E;
        --navy2: #0B2148;
        --navy3: #102E57;

        --orange: #F47B20;
        --orange2: #FF9347;
        --orange3: #FFB078;

        position: relative;

        width: 100%;
        overflow: hidden;

        padding: 23px 50px;



        background:
            radial-gradient(circle at 10% 50%,
                rgba(244, 123, 32, .12),
                transparent 25%),
            radial-gradient(circle at 90% 45%,
                rgba(244, 123, 32, .08),
                transparent 25%),
            linear-gradient(110deg,
                #040B29 0%,
                #060F3E 45%,
                #0B2148 100%);

        border-top:
            1px solid rgba(255, 255, 255, .04);

        border-bottom:
            1px solid rgba(255, 255, 255, .05);
    }


    /* =========================================================
 CENTER GLOW
========================================================= */

    #kd-ai-counterbar::before {

        content: "";

        position: absolute;

        left: 50%;
        top: 50%;

        width: 440px;
        height: 130px;

        transform: translate(-50%, -50%);

        border-radius: 50%;

        background:
            rgba(244, 123, 32, .055);

        filter: blur(52px);

        pointer-events: none;
    }


    /* =========================================================
 TOP ACCENT LINE
========================================================= */

    #kd-ai-counterbar::after {

        content: "";

        position: absolute;

        left: 50%;
        top: 0;

        width: 40%;
        height: 1px;

        transform: translateX(-50%);

        background:
            linear-gradient(90deg,
                transparent,
                rgba(244, 123, 32, .25),
                rgba(255, 147, 71, .80),
                rgba(244, 123, 32, .25),
                transparent);

        pointer-events: none;
    }


    /* =========================================================
 CONTAINER
========================================================= */

    #kd-ai-counterbar .kdcb-container {

        position: relative;
        z-index: 5;

        width: 100%;
        max-width: 1380px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            repeat(4, minmax(0, 1fr));

        align-items: center;
    }


    /* =========================================================
 ITEM
========================================================= */

    #kd-ai-counterbar .kdcb-item {

        position: relative;

        min-height: 80px;

        padding: 4px 24px;

        display: flex;
        flex-direction: column;

        align-items: center;
        justify-content: center;

        text-align: center;

        transition:
            transform .3s ease;
    }


    #kd-ai-counterbar .kdcb-item:hover {

        transform: translateY(-3px);

    }


    /* =========================================================
 DIVIDERS
========================================================= */

    #kd-ai-counterbar .kdcb-item:not(:last-child)::after {

        content: "";

        position: absolute;

        right: 0;
        top: 50%;

        width: 1px;
        height: 48px;

        transform: translateY(-50%);

        background:
            linear-gradient(to bottom,
                transparent,
                rgba(255, 255, 255, .18),
                transparent);
    }


    /* =========================================================
 NUMBER LINE
========================================================= */

    #kd-ai-counterbar .kdcb-number-line {

        display: flex;

        align-items: flex-start;
        justify-content: center;

        line-height: 1;

        padding: 2px 0 3px;

        overflow: visible;
    }


    /* =========================================================
 NUMBER
========================================================= */

    #kd-ai-counterbar .kdcb-number {

        display: inline-block;

        padding-bottom: 2px;

        color: #ffffff;

        font-size: 44px;
        line-height: 1.08;

        font-weight: 800;

        letter-spacing: -1.7px;

        font-variant-numeric:
            tabular-nums;

        text-shadow:
            0 8px 26px rgba(244, 123, 32, .12);
    }


    /* =========================================================
 PLUS
========================================================= */

    #kd-ai-counterbar .kdcb-plus {

        display: inline-block;

        margin-left: 4px;
        margin-top: 3px;

        padding-bottom: 2px;

        font-size: 21px;
        line-height: 1;

        font-weight: 800;

        background:
            linear-gradient(135deg,
                #F47B20,
                #FF9347);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;

        color: transparent;
    }


    /* =========================================================
 TITLE
========================================================= */

    #kd-ai-counterbar .kdcb-title {

        margin-top: 6px;

        color: #B8C1D0;

        font-size: 11px;
        line-height: 1.4;

        font-weight: 600;

        letter-spacing: .015em;
    }


    /* =========================================================
 ORANGE ACCENT
========================================================= */

    #kd-ai-counterbar .kdcb-accent {

        position: relative;

        width: 20px;
        height: 2px;

        margin-top: 7px;

        overflow: hidden;

        border-radius: 20px;

        background:
            rgba(244, 123, 32, .28);
    }


    #kd-ai-counterbar .kdcb-accent::after {

        content: "";

        position: absolute;

        left: 0;
        top: 0;

        width: 100%;
        height: 100%;

        border-radius: inherit;

        background:
            linear-gradient(90deg,
                #F47B20,
                #FF9A55);

        animation:
            kdcbAccent 2.8s ease-in-out infinite;
    }


    @keyframes kdcbAccent {

        0%,
        100% {
            transform: scaleX(.35);
            opacity: .65;
        }

        50% {
            transform: scaleX(1);
            opacity: 1;
        }

    }


    /* =========================================================
 SMALL ORANGE GLOW DOT
========================================================= */

    #kd-ai-counterbar .kdcb-item::before {

        content: "";

        position: absolute;

        top: 2px;
        left: 50%;

        width: 3px;
        height: 3px;

        transform: translateX(-50%);

        border-radius: 50%;

        background: #F47B20;

        opacity: .45;

        box-shadow:
            0 0 9px rgba(244, 123, 32, .55);

        animation:
            kdcbDot 2.5s ease-in-out infinite;
    }


    #kd-ai-counterbar .kdcb-item:nth-child(2)::before {
        animation-delay: .3s;
    }

    #kd-ai-counterbar .kdcb-item:nth-child(3)::before {
        animation-delay: .6s;
    }

    #kd-ai-counterbar .kdcb-item:nth-child(4)::before {
        animation-delay: .9s;
    }


    @keyframes kdcbDot {

        0%,
        100% {
            opacity: .30;
            transform:
                translateX(-50%) scale(.8);
        }

        50% {
            opacity: 1;
            transform:
                translateX(-50%) scale(1.25);
        }

    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:850px) {

        #kd-ai-counterbar {

            padding:
                22px 24px;

        }


        #kd-ai-counterbar .kdcb-container {

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            row-gap: 14px;

        }


        #kd-ai-counterbar .kdcb-item {

            min-height: 77px;

        }


        #kd-ai-counterbar .kdcb-item:nth-child(2)::after {

            display: none;

        }


        #kd-ai-counterbar .kdcb-item:nth-child(1),

        #kd-ai-counterbar .kdcb-item:nth-child(2) {

            padding-bottom: 14px;

            border-bottom:
                1px solid rgba(255, 255, 255, .07);

        }


        #kd-ai-counterbar .kdcb-number {

            font-size: 40px;

        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:520px) {

        #kd-ai-counterbar {

            padding:
                18px 13px;

        }


        #kd-ai-counterbar .kdcb-container {

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            row-gap: 11px;

        }


        #kd-ai-counterbar .kdcb-item {

            min-height: 68px;

            padding:
                4px 7px;

        }


        #kd-ai-counterbar .kdcb-item:nth-child(odd)::after {

            display: block;

            height: 38px;

        }


        #kd-ai-counterbar .kdcb-item:nth-child(even)::after {

            display: none;

        }


        #kd-ai-counterbar .kdcb-item:nth-child(1),

        #kd-ai-counterbar .kdcb-item:nth-child(2) {

            padding-bottom: 12px;

        }


        #kd-ai-counterbar .kdcb-number {

            font-size: 33px;

            line-height: 1.1;

            letter-spacing: -1px;

        }


        #kd-ai-counterbar .kdcb-plus {

            margin-top: 2px;

            font-size: 17px;

        }


        #kd-ai-counterbar .kdcb-title {

            margin-top: 5px;

            font-size: 9px;

            line-height: 1.35;

        }


        #kd-ai-counterbar .kdcb-accent {

            width: 15px;

            margin-top: 5px;

        }


        #kd-ai-counterbar .kdcb-item::before {

            display: none;

        }

    }


    /* =========================================================
 REDUCED MOTION
========================================================= */

    @media(prefers-reduced-motion:reduce) {

        #kd-ai-counterbar *,
        #kd-ai-counterbar *::before,
        #kd-ai-counterbar *::after {

            animation: none !important;

            transition: none !important;

        }

    }
</style>


<!-- =========================================================
 HTML
========================================================= -->

<section id="kd-ai-counterbar">


    <div class="kdcb-container">


        <!-- COUNTER 01 -->

        <div class="kdcb-item">


            <div class="kdcb-number-line">

                <span
                    class="kdcb-number"
                    data-target="50">
                    0
                </span>

                <span class="kdcb-plus">
                    +
                </span>

            </div>


            <div class="kdcb-title">

                AI Videos Created

            </div>


            <span class="kdcb-accent"></span>


        </div>


        <!-- COUNTER 02 -->

        <div class="kdcb-item">


            <div class="kdcb-number-line">

                <span
                    class="kdcb-number"
                    data-target="100">
                    0
                </span>

                <span class="kdcb-plus">
                    +
                </span>

            </div>


            <div class="kdcb-title">

                Creative Concepts Generated

            </div>


            <span class="kdcb-accent"></span>


        </div>


        <!-- COUNTER 03 -->

        <div class="kdcb-item">


            <div class="kdcb-number-line">

                <span
                    class="kdcb-number"
                    data-target="10">
                    0
                </span>

                <span class="kdcb-plus">
                    +
                </span>

            </div>


            <div class="kdcb-title">

                Content Styles Available

            </div>


            <span class="kdcb-accent"></span>


        </div>


        <!-- COUNTER 04 -->

        <div class="kdcb-item">


            <div class="kdcb-number-line">

                <span
                    class="kdcb-number"
                    data-target="5">
                    0
                </span>

                <span class="kdcb-plus">
                    +
                </span>

            </div>


            <div class="kdcb-title">

                Digital Platforms Covered

            </div>


            <span class="kdcb-accent"></span>


        </div>


    </div>


</section>


<!-- =========================================================
 COUNTER ANIMATION
========================================================= -->

<script>
    (function() {

        const section =
            document.getElementById(
                'kd-ai-counterbar'
            );

        if (!section) return;


        const counters =
            section.querySelectorAll(
                '.kdcb-number'
            );


        let hasStarted = false;


        function runCounter(element) {

            const target =
                Number(
                    element.getAttribute(
                        'data-target'
                    )
                );


            const duration = 1500;

            const startTime =
                performance.now();


            function update(currentTime) {

                const elapsed =
                    currentTime - startTime;


                const progress =
                    Math.min(
                        elapsed / duration,
                        1
                    );


                const eased =
                    1 -
                    Math.pow(
                        1 - progress,
                        4
                    );


                const current =
                    Math.floor(
                        target * eased
                    );


                element.textContent =
                    current;


                if (progress < 1) {

                    requestAnimationFrame(
                        update
                    );

                } else {

                    element.textContent =
                        target;

                }

            }


            requestAnimationFrame(
                update
            );

        }


        /* START COUNTERS ON SCROLL */

        if (
            'IntersectionObserver' in window
        ) {

            const observer =
                new IntersectionObserver(

                    function(entries) {

                        entries.forEach(
                            function(entry) {

                                if (
                                    entry.isIntersecting &&
                                    !hasStarted
                                ) {

                                    hasStarted = true;


                                    counters.forEach(
                                        function(counter, index) {

                                            setTimeout(
                                                function() {

                                                    runCounter(
                                                        counter
                                                    );

                                                },

                                                index * 90
                                            );

                                        }
                                    );


                                    observer.unobserve(
                                        section
                                    );

                                }

                            }
                        );

                    },

                    {
                        threshold: 0.25
                    }

                );


            observer.observe(
                section
            );

        } else {

            counters.forEach(
                function(counter) {

                    counter.textContent =
                        counter.getAttribute(
                            'data-target'
                        );

                }
            );

        }

    })();
</script>