<style>
    :root {

        /* ========================================
       BRAND COLORS
         ======================================== */

        --color-primary: #F47B20;
        --color-primary-light: #FF9A4A;
        --color-primary-dark: #D85F0B;

        --color-secondary: #4F7FF7;
        --color-secondary-light: #7FA3FF;
        --color-secondary-dark: #315FCC;


        /* ========================================
       BACKGROUNDS
        ======================================== */

        --color-bg: #FFFFFF;
        --color-bg-soft: #F7F8FA;
        --color-bg-muted: #EEF1F5;

        --color-bg-dark: #1C3D7B;
        --color-bg-dark-soft: #1A2233;


        /* ========================================
       TEXT
        ======================================== */

        --color-text: #171B26;
        --color-text-secondary: #5F6673;
        --color-text-muted: #8A919D;

        --color-text-light: #FFFFFF;
        --color-text-light-secondary: #C4C9D2;


        /* ========================================
       BORDERS
        ======================================== */

        --color-border: #E3E7ED;
        --color-border-dark: #30394A;


        /* ========================================
       PRIMARY GRADIENTS
    ======================================== */

        --gradient-primary:
            linear-gradient(135deg,
                #F47B20 0%,
                #FF9A4A 100%);

        --gradient-primary-dark:
            linear-gradient(135deg,
                #D85F0B 0%,
                #F47B20 100%);


        /* ========================================
       SECONDARY GRADIENTS
    ======================================== */

        --gradient-secondary:
            linear-gradient(135deg,
                #315FCC 0%,
                #4F7FF7 50%,
                #7FA3FF 100%);

        --gradient-secondary-dark:
            linear-gradient(135deg,
                #244BA5 0%,
                #315FCC 100%);


        /* ========================================
       BRAND GRADIENTS
    ======================================== */

        --gradient-brand:
            linear-gradient(135deg,
                #F47B20 0%,
                #FF9A4A 45%,
                #4F7FF7 100%);

        --gradient-brand-reverse:
            linear-gradient(135deg,
                #4F7FF7 0%,
                #7FA3FF 55%,
                #F47B20 100%);


        /* ========================================
       DARK GRADIENTS
    ======================================== */

        --gradient-dark:
            linear-gradient(135deg,
                #111827 0%,
                #1A2233 100%);


        /* ========================================
       GLOW
    ======================================== */

        --gradient-glow:
            radial-gradient(circle,
                rgba(244, 123, 32, 0.16) 0%,
                rgba(244, 123, 32, 0) 70%);

        --gradient-glow-secondary:
            radial-gradient(circle,
                rgba(79, 127, 247, 0.18) 0%,
                rgba(79, 127, 247, 0) 70%);


        /* ========================================
       STATUS COLORS
    ======================================== */

        --color-success: #16A34A;
        --color-warning: #D99100;
        --color-danger: #DC2626;
        --color-info: #4F7FF7;


        /* ========================================
       SHADOWS
    ======================================== */

        --shadow-sm:
            0 2px 8px rgba(15, 23, 42, 0.06);

        --shadow-md:
            0 8px 24px rgba(15, 23, 42, 0.10);

        --shadow-lg:
            0 16px 40px rgba(15, 23, 42, 0.14);

        --shadow-orange:
            0 10px 30px rgba(244, 123, 32, 0.18);

        --shadow-blue:
            0 10px 30px rgba(79, 127, 247, 0.18);


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

    .about-stats {
        background: linear-gradient(to bottom, #3c5fa5 0%, #082a6e 70%);
        padding: 40px 20px;
    }

    .about-stats_content {
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        gap: 30px;
    }

    .about-stats_item {
        text-align: left;
    }

    .about-stats_number {
        display: flex;
        align-items: baseline;
        font-size: 40px;
        font-weight: 800;
        color: #ffffff;
        line-height: 1;
        margin: 0 0 14px;
    }

    .about-stats_number .about-count-suffix {
        font-size: 40px;
        font-weight: 800;
        color: #ffffff;
    }

    .about-stats_label {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #8b87a3;
        margin: 0;
    }

    @media (max-width: 900px) {
        .about-stats_number {
            display: flex;
            font-size: 24px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1;
            margin: 0 0 14px;
        }

        .about-stats_number .about-count-suffix {
            font-size: 24px;
            font-weight: 800;
            color: #ffffff;
        }

        .about-stats_label {
            font-size: 8px;
            font-weight: 600;
        }
    }

    @media (max-width: 450px) {
        .about-stats_number {
            display: flex;
            font-size: 12px;
            font-weight: 600;
            color: #ffffff;
            line-height: 1;
            margin: 0 0 14px;
        }

        .about-stats_number .about-count-suffix {
            font-size: 12px;
            font-weight: 600;
            color: #ffffff;
        }

        .about-stats_label {
            font-size: 8px;
            font-weight: 600;
        }
    }

    .sms_de {
        position: relative;
    }

    .sms_de svg {
        margin-right: 10px;
    }

    .sms_de::before {
        content: '';
        margin: auto;
    }

    @media (max-width: 900px) {
        .sms-speed-icon {
            width: 16px;
            height: 16px;
            margin-left: 4px;
        }
    }

    @media (max-width: 450px) {
        .sms-speed-icon {
            width: 12px;
            height: 12px;
            margin-left: 3px;
        }
    }
</style>

<section class="about-stats">
    <div class="about-stats_content">
        <div class="about-stats_item sms_de">
            <p class="about-stats_number">
                <!-- <svg class="sms-speed-icon"
                    width="28"
                    height="28"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">

                    <path
                        d="M13 2L4 14H11L10 22L20 9H13L13 2Z"
                        fill="currentColor" />
                </svg> -->

                <svg xmlns="http://www.w3.org/2000/svg" width="28"
                    height="28" viewBox="0 0 640 640" fill="white">
                    <path d="M224 64C241.7 64 256 78.3 256 96L256 128L384 128L384 96C384 78.3 398.3 64 416 64C433.7 64 448 78.3 448 96L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 96C192 78.3 206.3 64 224 64zM160 304L160 336C160 344.8 167.2 352 176 352L208 352C216.8 352 224 344.8 224 336L224 304C224 295.2 216.8 288 208 288L176 288C167.2 288 160 295.2 160 304zM288 304L288 336C288 344.8 295.2 352 304 352L336 352C344.8 352 352 344.8 352 336L352 304C352 295.2 344.8 288 336 288L304 288C295.2 288 288 295.2 288 304zM432 288C423.2 288 416 295.2 416 304L416 336C416 344.8 423.2 352 432 352L464 352C472.8 352 480 344.8 480 336L480 304C480 295.2 472.8 288 464 288L432 288zM160 432L160 464C160 472.8 167.2 480 176 480L208 480C216.8 480 224 472.8 224 464L224 432C224 423.2 216.8 416 208 416L176 416C167.2 416 160 423.2 160 432zM304 416C295.2 416 288 423.2 288 432L288 464C288 472.8 295.2 480 304 480L336 480C344.8 480 352 472.8 352 464L352 432C352 423.2 344.8 416 336 416L304 416zM416 432L416 464C416 472.8 423.2 480 432 480L464 480C472.8 480 480 472.8 480 464L480 432C480 423.2 472.8 416 464 416L432 416C423.2 416 416 423.2 416 432z" />
                </svg>

                <span class="qunik-count" data-target="27" data-suffix="/">0</span>
                <span class="qunik-count" data-target="7" data-suffix="">0</span>


            </p>

            <p class="about-stats_label">System Availability</p>
        </div>
        <div class="about-stats_item sms_de">
            <p class="about-stats_number">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" viewBox="0 0 640 640"><!--!Font Awesome Free v7.3.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                    <path d="M160 96C124.7 96 96 124.7 96 160L96 224C96 259.3 124.7 288 160 288L480 288C515.3 288 544 259.3 544 224L544 160C544 124.7 515.3 96 480 96L160 96zM376 168C389.3 168 400 178.7 400 192C400 205.3 389.3 216 376 216C362.7 216 352 205.3 352 192C352 178.7 362.7 168 376 168zM432 192C432 178.7 442.7 168 456 168C469.3 168 480 178.7 480 192C480 205.3 469.3 216 456 216C442.7 216 432 205.3 432 192zM160 352C124.7 352 96 380.7 96 416L96 480C96 515.3 124.7 544 160 544L480 544C515.3 544 544 515.3 544 480L544 416C544 380.7 515.3 352 480 352L160 352zM376 424C389.3 424 400 434.7 400 448C400 461.3 389.3 472 376 472C362.7 472 352 461.3 352 448C352 434.7 362.7 424 376 424zM432 448C432 434.7 442.7 424 456 424C469.3 424 480 434.7 480 448C480 461.3 469.3 472 456 472C442.7 472 432 461.3 432 448z" />
                </svg>
                <span class="qunik-count" data-target="6" data-suffix="+">0</span>
            </p>
            <p class="about-stats_label">Communication Channels</p>
        </div>
        <div class="about-stats_item sms_de">
            <p class="about-stats_number">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-12 h-12 mx-auto mb-4 text-white">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    <path d="M2 12h20"></path>
                </svg> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity w-8 h-8 text-blue-600">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
                <span class="qunik-count" data-target="98.9" data-suffix="%">0</span>
            </p>
            <p class="about-stats_label">Uptime SLA</p>
        </div>
        <div class="about-stats_item sms_de">
            <p class="about-stats_number">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-12 h-12 mx-auto mb-4 text-white">
                    <circle cx="12" cy="8" r="6"></circle>
                    <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                </svg> -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="28" height="28" viewBox="0 0 24 24" fill="white">
                    <path d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z" />
                </svg>
                <span class="qunik-count" data-target="100" data-suffix="%">0</span>
            </p>
            <p class="about-stats_label">Data Ownership</p>
        </div>
        <!-- <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="10">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Countries Served</p>
        </div> -->
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const aboutContent1 = document.querySelector('.home-about_content');
        const aboutContent2 = document.querySelector('.home-about_content2');

        if (aboutContent1 || aboutContent2) {
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    entry.target.classList.toggle('in-view', entry.isIntersecting);
                });
            }, {
                threshold: 0.2,
                rootMargin: '0px 0px -10% 0px'
            });

            if (aboutContent1) revealObserver.observe(aboutContent1);
            if (aboutContent2) revealObserver.observe(aboutContent2);
        }

        const counters = document.querySelectorAll(".about-count");

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;

                const counter = entry.target;
                const target = +counter.dataset.count;
                const duration = 2000;
                let startTime = null;

                function tick(timestamp) {
                    if (startTime === null) startTime = timestamp;
                    const elapsed = timestamp - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    const current = Math.floor(progress * target);
                    counter.textContent = current.toLocaleString();

                    if (progress < 1) {
                        requestAnimationFrame(tick);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                }

                requestAnimationFrame(tick);
                counterObserver.unobserve(counter);
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => counterObserver.observe(counter));
    });
</script>