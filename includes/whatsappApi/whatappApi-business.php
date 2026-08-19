<style>
    :root {

        /* ========================================
       WHATSAPP API BRAND COLORS
        ======================================== */

        --color-primary: #25D366;
        --color-primary-light: #5BE58A;
        --color-primary-dark: #1DA851;


        /* ========================================
       SECONDARY / API COLORS
        ======================================== */

        --color-secondary: #128C7E;
        --color-secondary-light: #25A99A;
        --color-secondary-dark: #075E54;


        /* ========================================
       BACKGROUNDS
        ======================================== */

        --color-bg: #FFFFFF;
        --color-bg-soft: #F3FBF7;
        --color-bg-muted: #E8F5EF;

        --color-bg-dark: #061B16;
        --color-bg-dark-soft: #0B2922;


        /* ========================================
       TEXT
        ======================================== */

        --color-text: #12231D;
        --color-text-secondary: #53665F;
        --color-text-muted: #82928C;

        --color-text-light: #FFFFFF;
        --color-text-light-secondary: #C7D8D2;


        /* ========================================
       BORDERS
        ======================================== */

        --color-border: #D9EAE3;
        --color-border-dark: #25443B;


        /* ========================================
       PRIMARY GRADIENTS
        ======================================== */

        --gradient-primary:
            linear-gradient(135deg,
                #1DA851 0%,
                #25D366 55%,
                #5BE58A 100%);


        --gradient-primary-dark:
            linear-gradient(135deg,
                #075E54 0%,
                #128C7E 55%,
                #1DA851 100%);


        /* ========================================
       SECONDARY GRADIENTS
        ======================================== */

        --gradient-secondary:
            linear-gradient(135deg,
                #075E54 0%,
                #128C7E 50%,
                #25A99A 100%);


        --gradient-secondary-dark:
            linear-gradient(135deg,
                #043F39 0%,
                #075E54 100%);


        /* ========================================
       API / BRAND GRADIENTS
        ======================================== */

        --gradient-brand:
            linear-gradient(135deg,
                #075E54 0%,
                #128C7E 35%,
                #25D366 75%,
                #5BE58A 100%);


        --gradient-brand-reverse:
            linear-gradient(135deg,
                #5BE58A 0%,
                #25D366 30%,
                #128C7E 70%,
                #075E54 100%);


        /* ========================================
       DARK API GRADIENT
        ======================================== */

        --gradient-dark:
            linear-gradient(135deg,
                #061B16 0%,
                #0B2922 50%,
                #075E54 100%);


        /* ========================================
       CODE / API TECH GRADIENT
        ======================================== */

        --gradient-api:
            linear-gradient(135deg,
                #0B2922 0%,
                #075E54 45%,
                #128C7E 100%);


        /* ========================================
       GLOW
        ======================================== */

        --gradient-glow:
            radial-gradient(circle,
                rgba(37, 211, 102, 0.20) 0%,
                rgba(37, 211, 102, 0) 70%);


        --gradient-glow-secondary:
            radial-gradient(circle,
                rgba(18, 140, 126, 0.20) 0%,
                rgba(18, 140, 126, 0) 70%);


        /* ========================================
       WHATSAPP MESSAGE GLOW
        ======================================== */

        --gradient-message:
            linear-gradient(135deg,
                #E8FFF1 0%,
                #D7F9E5 100%);


        /* ========================================
       STATUS COLORS
        ======================================== */

        --color-success: #25D366;
        --color-warning: #E8A317;
        --color-danger: #DC3545;
        --color-info: #128C7E;


        /* ========================================
       SHADOWS
        ======================================== */

        --shadow-sm:
            0 2px 8px rgba(6, 27, 22, 0.06);


        --shadow-md:
            0 8px 24px rgba(6, 27, 22, 0.10);


        --shadow-lg:
            0 16px 40px rgba(6, 27, 22, 0.14);


        --shadow-green:
            0 10px 30px rgba(37, 211, 102, 0.20);


        --shadow-green-strong:
            0 12px 35px rgba(37, 211, 102, 0.28);


        --shadow-teal:
            0 10px 30px rgba(18, 140, 126, 0.18);


        /* ========================================
       RADIUS
        ======================================== */

        --radius-sm: 6px;
        --radius-md: 10px;
        --radius-lg: 16px;
        --radius-xl: 24px;
        --radius-full: 999px;


        /* ========================================
       TRANSITIONS
        ======================================== */

        --transition-fast: 150ms ease;
        --transition-normal: 250ms ease;
        --transition-slow: 400ms ease;
    }

    .whatsapp-business_content {
        width: 100%;
        padding: 30px 0;
        margin-top: 20px;
        box-sizing: border-box;
        font-family: 'Segoe UI', Roboto, Tahoma, Geneva, Verdana, sans-serif;
        background: var(--color-bg-muted);
    }

    .whatsapp-business_content-heading {
        width: 700px;
        margin: 0 auto;
        text-align: center;
        margin-bottom: 50px;
    }

    .whatsapp-business_content-heading h1 {
        font-size: 42px;
        color: var(--color-primary-dark);
        font-weight: 800;
    }

    .whatsapp-business_content-heading p {
        color: var(--color-text-muted);
        font-size: 18px;
        font-weight: 500;
    }

    /* ========================================
       WHATSAPP BUSINESS MARQUEE
    ======================================== */

    .whatsapp-business_marquee {
        width: 100%;
        background: linear-gradient(356deg, #b9c3e726, #535c7429);
    }

    .whatsapp-business_marquee-slider {
        background: linear-gradient(356deg, #b9c3e726, #535c7429);
        position: relative;
        overflow: hidden;
        margin: auto;
    }

    /* ========================================
       FADE EDGES
    ======================================== */

    .whatsapp-business_marquee-slider::before,
    .whatsapp-business_marquee-slider::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 90px;
        z-index: 2;
        pointer-events: none;
    }

    .whatsapp-business_marquee-slider::before {
        left: 0;

        background: linear-gradient(to right,
                #E8E9ED 0%,
                rgba(232, 233, 237, 0.9) 50%,
                transparent 100%);
    }

    .whatsapp-business_marquee-slider::after {
        right: 0;

        background: linear-gradient(to left,
                #E8E9ED 0%,
                rgba(232, 233, 237, 0.9) 50%,
                transparent 100%);
    }

    /* ========================================
       MARQUEE TRACK
    ======================================== */

    .whatsapp-business_marquee-track {
        display: flex;
        width: max-content;
        animation: whatsappBusinessMarqueeScroll 75s linear infinite;
        padding: 10px 0;
    }

    @keyframes whatsappBusinessMarqueeScroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* ========================================
       LOGO CARD
    ======================================== */

    .whatsapp-business_marquee-logo {
        flex: 0 0 auto;

        width: 100px;
        height: 57px;

        margin: 0 9px;

        border-radius: 15px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #f4f5f7;

        overflow: hidden;
    }

    .whatsapp-business_marquee-logo img {
        max-width: 100%;
        max-height: 100%;

        object-fit: contain;
    }
</style>

<section class="whatsapp-business">
    <div class="whatsapp-business_content">
        <div class="whatsapp-business_content-heading">
            <h1>Join <span class="whatsappApi-counter" data-target="10000">0</span>+ Businesses, Growing using KingDigital</h1>
            <p>Trusted by business owners across all industries for sales and customer service.</p>
        </div>
        <!-- ========================================
            WHATSAPP BUSINESS MARQUEE
        ======================================== -->
        <div class="whatsapp-business_marquee">
            <div class="whatsapp-business_marquee-slider">
                <div
                    class="whatsapp-business_marquee-track"
                    id="whatsappBusinessMarqueeTrack">
                    <!-- Logos generated by JavaScript -->
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const counters = document.querySelectorAll(".whatsappApi-counter");

        const observer = new IntersectionObserver((entries, observer) => {

            entries.forEach(entry => {

                // Counter is not visible yet
                if (!entry.isIntersecting) {
                    return;
                }

                const counter = entry.target;

                // Prevent the same counter from running again
                observer.unobserve(counter);

                const target = Number(counter.dataset.target);

                const duration = 2000;

                let startTime = null;


                function animateCounter(timestamp) {

                    // Set starting time
                    if (startTime === null) {
                        startTime = timestamp;
                    }


                    // Calculate elapsed time
                    const elapsed = timestamp - startTime;


                    // Progress from 0 → 1
                    const progress = Math.min(
                        elapsed / duration,
                        1
                    );


                    // Smooth easing
                    const easeOut =
                        1 - Math.pow(1 - progress, 3);


                    // Calculate current number
                    const current = Math.floor(
                        target * easeOut
                    );


                    // Display number
                    counter.textContent =
                        current.toLocaleString();


                    // Continue animation
                    if (progress < 1) {

                        requestAnimationFrame(
                            animateCounter
                        );

                    } else {

                        // Make absolutely sure the final
                        // number is correct
                        counter.textContent =
                            target.toLocaleString();

                    }

                }


                // Start ONLY when the counter
                // enters the viewport
                requestAnimationFrame(
                    animateCounter
                );

            });

        }, {

            /*
             * Start when 50% of the counter
             * becomes visible.
             */
            threshold: 0.5

        });


        // Observe every counter
        counters.forEach(counter => {

            observer.observe(counter);

        });

    });
</script>

<script>
    const whatsappBusinessLogos = [
        "assets/images/brand_img/1.png",
        "assets/images/brand_img/2.png",
        "assets/images/brand_img/3.png",
        "assets/images/brand_img/4.png",
        "assets/images/brand_img/5.png",
        "assets/images/brand_img/6.png",
        "assets/images/brand_img/7.png",
        "assets/images/brand_img/8.png",
        "assets/images/brand_img/9.png",
        "assets/images/brand_img/10.png",
        "assets/images/brand_img/11.png",
        "assets/images/brand_img/12.png",
        "assets/images/brand_img/13.png",
        "assets/images/brand_img/14.png",
        "assets/images/brand_img/15.png",
        "assets/images/brand_img/16.png",
        "assets/images/brand_img/17.png",
        "assets/images/brand_img/18.png",
        "assets/images/brand_img/19.png",
        "assets/images/brand_img/20.png",
        "assets/images/brand_img/21.png",
        "assets/images/brand_img/22.png",
        "assets/images/brand_img/23.png",
        "assets/images/brand_img/24.png",
        "assets/images/brand_img/25.png",
        "assets/images/brand_img/26.png",
        "assets/images/brand_img/27.png",
        "assets/images/brand_img/28.png"
    ];


    const whatsappBusinessMarqueeTrack =
        document.getElementById(
            "whatsappBusinessMarqueeTrack"
        );


    function renderWhatsappBusinessLogos() {

        whatsappBusinessLogos.forEach(src => {

            const card =
                document.createElement("div");

            card.className =
                "whatsapp-business_marquee-logo";


            const img =
                document.createElement("img");

            img.src = src;

            img.alt = "Client logo";


            card.appendChild(img);

            whatsappBusinessMarqueeTrack.appendChild(card);
        });
    }


    /* First set */
    renderWhatsappBusinessLogos();

    /* Duplicate set for seamless infinite loop */
    renderWhatsappBusinessLogos();
</script>