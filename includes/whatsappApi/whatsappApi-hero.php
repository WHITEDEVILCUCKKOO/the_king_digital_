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

    .whatsappApi-hero {
        position: relative;
        background: var(--gradient-dark);
        padding: 50px 40px;
        overflow: hidden;
        font-family: 'Segoe UI', Roboto, Tahoma, Geneva, Verdana, sans-serif;
    }

    .whatsappApi-hero::before {
        content: "";
        position: absolute;
        top: -80px;
        right: -30px;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        border: 7.5px dashed rgba(255, 255, 255, 0.14);
        pointer-events: none;
        animation: decor-spin 16s linear infinite;
    }

    @keyframes decor-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .whatsappApi-hero_content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        gap: 40px;
    }

    .whatsappApi-hero_content-text h1 {
        font-size: 52px;
        letter-spacing: 1.2px;
        font-weight: 800;
        line-height: 1.25;
        color: var(--color-text-light);
        margin: 0 0 22px;
    }

    .whatsappApi-hero_content-text h1 .hero-accent {
        background: linear-gradient(90deg, var(--color-primary) 0%, var(--color-primary-light) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappApi-hero_content-text>p {
        font-size: 16px;
        line-height: 1.75;
        color: var(--color-text-light-secondary);
        margin: 0 0 34px;
    }

    .whatsappApi-hero_content-text a {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--color-primary);
        color: var(--color-text-light);
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        padding: 15px 28px;
        border-radius: var(--radius-full);
        box-shadow: var(--shadow-green-strong);
        transition: background var(--transition-normal), transform var(--transition-normal);
    }

    .whatsappApi-hero_content-text a:hover {
        background: var(--color-primary-dark);
        transform: translateY(-2px);
    }

    .whatsappApi-hero_content-text a span {
        display: inline-flex;
        width: 20px;
        height: 20px;
        color: var(--color-text-light);
    }

    .whatsappApi-hero_content-text a span svg {
        width: 100%;
        height: 100%;
    }

    .whatsappApi-hero_content-text-features {
        display: flex;
        flex-wrap: wrap;
        gap: 34px;
        list-style: none;
        margin: 52px 0 0;
        padding: 0;
    }

    .whatsappApi-hero_content-text-features li strong {
        display: block;
        font-size: 24px;
        font-weight: 800;
        color: var(--color-text-light);
        margin-bottom: 6px;
    }

    .whatsappApi-hero_content-text-features li:nth-child(1) strong::after {
        content: "%";
    }

    .whatsappApi-hero_content-text-features li:nth-child(2) strong::after {
        content: "%+";
    }

    .whatsappApi-hero_content-text-features li:nth-child(3) strong::after {
        content: "%";
    }

    .whatsappApi-hero_content-text-features li:nth-child(4) strong::after {
        content: "%+";
    }

    .whatsappApi-hero_content-text-features li span {
        display: block;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.4px;
        text-transform: uppercase;
        color: var(--color-primary-light);
    }

    .whatsappApi-hero_content-visual {
        display: flex;
        justify-content: center;
        position: relative;
    }

    .whatsappApi-hero_content-visual-outerborder {
        width: 285px;
        background: #0c1512;
        border-radius: 42px;
        padding: 10px;
        box-shadow:
            0 25px 45px rgba(0, 0, 0, 0.22),
            0 10px 20px rgba(79, 127, 247, 0.12);
        animation: whatsappPhoneFloat 4s ease-in-out infinite;
    }

    @keyframes whatsappPhoneFloat {

        0% {
            transform: translateY(0) rotate(0deg);
        }

        25% {
            transform: translateY(-8px) rotate(0.3deg);
        }

        50% {
            transform: translateY(-15px) rotate(0deg);
        }

        75% {
            transform: translateY(-7px) rotate(-0.3deg);
        }

        100% {
            transform: translateY(0) rotate(0deg);
        }
    }

    .whatsappApi-hero_content-visual-innerborder {
        background: #000000;
        border-radius: 32px;
        padding: 6px;
    }

    .whatsappApi-hero_content-visual-screen {
        background: #EFE7D8;
        border-radius: 26px;
        overflow: hidden;
    }

    .whatsappApi-hero_content-visual-header {
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--color-secondary-dark);
        padding: 16px;
    }



    .whatsappApi-hero_content-visual-header span {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: var(--color-primary);
        color: var(--color-text-light);
        font-size: 13px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .whatsappApi-hero_content-visual-header p {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        column-gap: 4px;
        color: var(--color-text-light);
        font-weight: 600;
        font-size: 12px;
    }

    .verified-shield {
        width: 14px;
        height: 14px;
        flex-shrink: 0;
        fill: #4F7FF7;
    }

    .verified-shield .shield-check {
        fill: none;
        stroke: #FFFFFF;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .whatsappApi-hero_content-visual-header p small {
        flex-basis: 100%;
    }

    .whatsappApi-hero_content-visual-body {
        padding: 18px 14px;
        min-height: 300px;
    }

    .whatsappApi-hero_content-visual-body-msg {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .whatsappApi-hero_content-visual-body-msg>small {
        display: block;
        background: var(--color-bg);
        color: var(--color-text);
        font-size: 12.5px;
        line-height: 1.6;
        padding: 10px 13px;
        border-radius: var(--radius-md);
        box-shadow: var(--shadow-sm);
        max-width: 82%;
        align-self: flex-start;
        border-bottom-left-radius: 3px;
    }

    .whatsappApi-hero_content-visual-body-msg>small.incoming-msg {
        background: var(--gradient-message);
        align-self: flex-end;
        border-bottom-left-radius: var(--radius-md);
        border-bottom-right-radius: 3px;
    }

    .whatsappApi-hero_content-visual-card {
        background: var(--color-bg);
        border-radius: var(--radius-md);
        padding: 14px;
        box-shadow: var(--shadow-sm);
        max-width: 88%;
        align-self: flex-start;
        border-bottom-left-radius: 3px;
    }

    .whatsappApi-hero_content-visual-card strong {
        display: block;
        font-size: 12.5px;
        font-weight: 700;
        color: var(--color-secondary-dark);
        margin-bottom: 8px;
    }

    .whatsappApi-hero_content-visual-card ul {
        list-style: none;
        margin: 0 0 12px;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .whatsappApi-hero_content-visual-card ul li {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 11.5px;
        color: var(--color-text-secondary);
    }

    .whatsappApi-hero_content-visual-card ul li::before {
        content: "✓";
        color: var(--color-primary-dark);
        font-size: 11px;
        font-weight: 700;
    }

    .whatsappApi-hero_content-visual-card button {
        width: 100%;
        border: none;
        background: var(--color-primary);
        color: var(--color-text-light);
        font-size: 12px;
        font-weight: 700;
        padding: 9px;
        border-radius: var(--radius-sm);
        cursor: default;
    }

    /* ========================================
   CHAT MESSAGE LOOP
    ======================================== */

    /* Message 1 stays permanently */
    .whatsappApi-hero_content-visual-body-msg> :nth-child(1) {
        opacity: 1;
        transform: translateX(0);
    }


    /* Messages 2, 3 and 4 */
    .whatsappApi-hero_content-visual-body-msg> :nth-child(2),
    .whatsappApi-hero_content-visual-body-msg> :nth-child(3),
    .whatsappApi-hero_content-visual-body-msg> :nth-child(4) {
        opacity: 0;

        animation-duration: 8s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
    }


    /* ========================================
   MESSAGE 2
   RIGHT → CENTER → RIGHT
    ======================================== */

    .whatsappApi-hero_content-visual-body-msg> :nth-child(2) {
        animation-name: chatMessage2;
    }


    /* ========================================
   MESSAGE 3
   LEFT → CENTER → LEFT
    ======================================== */

    .whatsappApi-hero_content-visual-body-msg> :nth-child(3) {
        animation-name: chatMessage3;
    }


    /* ========================================
   MESSAGE 4
   RIGHT → CENTER → RIGHT
    ======================================== */

    .whatsappApi-hero_content-visual-body-msg> :nth-child(4) {
        animation-name: chatMessage4;
    }


    /* ========================================
   MESSAGE 2 ANIMATION
    ======================================== */

    @keyframes chatMessage2 {

        /* Hidden outside right */
        0% {
            opacity: 0;
            transform: translateX(80px);
        }

        /* Enter */
        8% {
            opacity: 1;
            transform: translateX(0);
        }

        /* Stay */
        55% {
            opacity: 1;
            transform: translateX(0);
        }

        /* Leave back to right */
        65% {
            opacity: 0;
            transform: translateX(80px);
        }

        /* Wait for restart */
        100% {
            opacity: 0;
            transform: translateX(80px);
        }
    }


    /* ========================================
   MESSAGE 3 ANIMATION
    ======================================== */

    @keyframes chatMessage3 {

        /* Hidden outside left */
        0% {
            opacity: 0;
            transform: translateX(-80px);
        }

        /* Wait */
        18% {
            opacity: 0;
            transform: translateX(-80px);
        }

        /* Enter */
        26% {
            opacity: 1;
            transform: translateX(0);
        }

        /* Stay */
        55% {
            opacity: 1;
            transform: translateX(0);
        }

        /* Leave back to left */
        65% {
            opacity: 0;
            transform: translateX(-80px);
        }

        /* Wait for restart */
        100% {
            opacity: 0;
            transform: translateX(-80px);
        }
    }


    /* ========================================
   MESSAGE 4 ANIMATION
    ======================================== */

    @keyframes chatMessage4 {

        /* Hidden outside left */
        0% {
            opacity: 0;
            transform: translateX(-80px);
        }

        /* Wait */
        34% {
            opacity: 0;
            transform: translateX(-80px);
        }

        /* Enter from left */
        42% {
            opacity: 1;
            transform: translateX(0);
        }

        /* Stay */
        55% {
            opacity: 1;
            transform: translateX(0);
        }

        /* Leave back to left */
        65% {
            opacity: 0;
            transform: translateX(-80px);
        }

        /* Wait for restart */
        100% {
            opacity: 0;
            transform: translateX(-80px);
        }

    }

    @media (max-width: 1023px) {
        .whatsappApi-hero_content {
            grid-template-columns: 1fr;
            gap: 60px;
        }

        .whatsappApi-hero_content-text h1,
        .whatsappApi-hero_content-text>p {
            max-width: 100%;
        }

        .whatsappApi-hero_content-visual {
            display: none;
        }
    }

    @media (max-width: 500px) {
        .whatsappApi-hero {
            padding: 90px 20px 70px;
        }

        .whatsappApi-hero_content-text h1 {
            font-size: 38px;
        }

        .whatsappApi-hero_content-text-features {
            gap: 24px;
        }
    }
</style>

<section class="whatsappApi-hero">
    <div class="whatsappApi-hero_content">
        <div class="whatsappApi-hero_content-text">
            <h1>Official WhatsApp<br>
                <span class="hero-accent">Business API</span>
            </h1>
            <p>The absolute standard for enterprise communication. Build trust with a verified identity, automate sales with native forms, and scale support with AI.</p>
            <a href="#">
                <span>
                    <svg width="64px" height="64px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill="currentColor" d="m60.359 160.867 2.894-5.256a6.003 6.003 0 0 0-4.284-.581l1.39 5.837ZM22 170l-5.837-1.39a6.002 6.002 0 0 0 7.227 7.227L22 170Zm9.133-38.359 5.837 1.39a6.001 6.001 0 0 0-.581-4.284l-5.256 2.894ZM96 176c44.183 0 80-35.817 80-80h-12c0 37.555-30.445 68-68 68v12Zm-38.535-9.877C68.9 172.42 82.04 176 96 176v-12c-11.884 0-23.04-3.043-32.747-8.389l-5.788 10.512Zm-34.075 9.714 38.358-9.133-2.78-11.674-38.358 9.133 2.78 11.674Zm1.906-45.585-9.133 38.358 11.674 2.78 9.133-38.359-11.674-2.779ZM16 96c0 13.959 3.58 27.1 9.877 38.535l10.512-5.788C31.043 119.039 28 107.884 28 96H16Zm80-80c-44.183 0-80 35.817-80 80h12c0-37.555 30.445-68 68-68V16Zm80 80c0-44.183-35.817-80-80-80v12c37.555 0 68 30.445 68 68h12Z"></path>
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="12" d="M103 130H76V96h27c9.389 0 17 7.611 17 17s-7.611 17-17 17Zm-2-34H76V62h25c9.389 0 17 7.611 17 17s-7.611 17-17 17Z"></path>
                        </g>
                    </svg>
                </span>
                Get Started For Free
            </a>
            <ul class="whatsappApi-hero_content-text-features">
                <li>
                    <strong class="whatsappApi-counter" data-target="98">0%</strong>
                    <span>Message Open Rate</span>
                </li>
                <li>
                    <strong class="whatsappApi-counter" data-target="45">0%+</strong>
                    <span>CTA Click Rate</span>
                </li>
                <li>
                    <strong class="whatsappApi-counter" data-target="92">0%</strong>
                    <span>Satisfaction Rate</span>
                </li>
                <li>
                    <strong class="whatsappApi-counter" data-target="60">0%+</strong>
                    <span>Automation</span>
                </li>
            </ul>
        </div>
        <div class="whatsappApi-hero_content-visual">
            <div class="whatsappApi-hero_content-visual-outerborder">
                <div class="whatsappApi-hero_content-visual-innerborder">
                    <div class="whatsappApi-hero_content-visual-screen">
                        <div class="whatsappApi-hero_content-visual-header">
                            <span>i</span>
                            <p>
                                kdcpaas ai
                                <svg class="verified-shield" viewBox="0 0 24 24" aria-label="Verified">
                                    <path d="M12 2.5L20 5.5V11.5C20 16.8 16.7 20.3 12 22C7.3 20.3 4 16.8 4 11.5V5.5L12 2.5Z" />
                                    <path class="shield-check" d="M8.5 12L10.8 14.3L15.8 9.3" />
                                </svg>

                                <small>Official Business Account</small>
                            </p>
                        </div>
                        <div class="whatsappApi-hero_content-visual-body">
                            <div class="whatsappApi-hero_content-visual-body-msg">
                                <small>👋 Welcome back! Ready to upgrade to the Official API?</small>
                                <small class="incoming-msg">Yes, I need the Green Tick for my brand!</small>
                                <div class="whatsappApi-hero_content-visual-card">
                                    <strong>Business Verification</strong>
                                    <ul>
                                        <li>WhatsApp Official Status</li>
                                        <li>Blue Tick Live on Profile</li>
                                    </ul>
                                    <button>Submit for Approval</button>
                                </div>
                                <small>Perfect! ✅ Your request is being processed. Meta status usually updates in 3 days.</small>
                            </div>
                        </div>
                    </div>
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