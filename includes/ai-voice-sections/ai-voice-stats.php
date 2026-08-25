<style>
    :root {

        /* ========================================
       AI VOICE — COLOR SYSTEM
        ======================================== */

        /* ---------- Primary ---------- */
        --ai-orange: #EA5C28;
        --ai-orange-bright: #F4511E;
        --ai-orange-dark: #D94717;

        /* ---------- Secondary ---------- */
        --ai-red: #E3413E;
        --ai-pink: #E31D5B;
        --ai-pink-light: #EC4899;

        /* ---------- Gradients ---------- */
        --ai-gradient: linear-gradient(90deg,
                #F4511E 0%,
                #E3413E 50%,
                #E31D5B 100%);

        --ai-gradient-reverse: linear-gradient(90deg,
                #E31D5B 0%,
                #E3413E 50%,
                #F4511E 100%);

        --ai-gradient-soft: linear-gradient(135deg,
                rgba(244, 81, 30, 0.12),
                rgba(227, 29, 91, 0.12));


        /* ========================================
       DARK / AI SECTIONS
        ======================================== */

        --ai-dark: #120E20;
        --ai-dark-secondary: #171126;
        --ai-dark-purple: #251636;
        --ai-dark-card: #1F1A31;
        --ai-dark-card-hover: #2A2040;

        --ai-dark-border: rgba(255, 255, 255, 0.08);

        --ai-dark-text: #FFFFFF;
        --ai-dark-text-secondary: #E5E7EB;
        --ai-dark-text-muted: #A1A1AA;


        /* ========================================
       LIGHT SECTIONS
        ======================================== */

        --ai-white: #FFFFFF;
        --ai-bg: #FFFFFF;

        --ai-bg-warm: #FFF6EE;
        --ai-bg-soft: #FEF3F1;
        --ai-bg-orange: #FFF1E8;

        --ai-bg-pink: #FFF1F5;
        --ai-bg-purple: #F7F3FF;


        /* ========================================
       TEXT
        ======================================== */

        --ai-text: #111827;
        --ai-text-heading: #111827;
        --ai-text-body: #374151;
        --ai-text-muted: #6B7280;
        --ai-text-light: #9CA3AF;

        --ai-text-white: #FFFFFF;


        /* ========================================
       BORDERS
        ======================================== */

        --ai-border: #E5E7EB;
        --ai-border-light: #F3F4F6;
        --ai-border-orange: rgba(234, 92, 40, 0.25);
        --ai-border-pink: rgba(227, 29, 91, 0.20);


        /* ========================================
       CARDS
        ======================================== */

        --ai-card-bg: #FFFFFF;
        --ai-card-bg-soft: #FFF9F5;

        --ai-card-shadow:
            0 4px 20px rgba(17, 24, 39, 0.06);

        --ai-card-shadow-hover:
            0 12px 35px rgba(17, 24, 39, 0.10);


        /* ========================================
       STATUS / UI COLORS
        ======================================== */

        --ai-success: #22C55E;
        --ai-success-light: #DCFCE7;

        --ai-warning: #F59E0B;
        --ai-warning-light: #FEF3C7;

        --ai-info: #3B82F6;
        --ai-info-light: #DBEAFE;

        --ai-danger: #EF4444;
        --ai-danger-light: #FEE2E2;


        /* ========================================
       VOICE / WAVEFORM
        ======================================== */

        --ai-wave-primary: #F4511E;
        --ai-wave-secondary: #E31D5B;
        --ai-wave-light: rgba(244, 81, 30, 0.20);

        --ai-pulse: rgba(234, 92, 40, 0.25);


        /* ========================================
       BUTTONS
        ======================================== */

        --ai-btn-primary: #EA5C28;
        --ai-btn-primary-hover: #D94717;

        --ai-btn-gradient: linear-gradient(90deg,
                #F4511E,
                #E31D5B);

        --ai-btn-text: #FFFFFF;


        /* ========================================
       RADIUS
        ======================================== */

        --ai-radius-sm: 6px;
        --ai-radius-md: 10px;
        --ai-radius-lg: 14px;
        --ai-radius-xl: 20px;
        --ai-radius-full: 999px;


        /* ========================================
       SPACING
        ======================================== */

        --ai-section-padding: 100px;
        --ai-container-width: 1200px;


        /* ========================================
       TRANSITIONS
        ======================================== */

        --ai-transition-fast: 0.2s ease;
        --ai-transition: 0.3s ease;
        --ai-transition-slow: 0.5s ease;
    }


    /* ========================================
       STATS SECTION
    ======================================== */

    .ai-voice-stats {
        background: linear-gradient(115deg,
                var(--ai-orange-bright) 0%,
                var(--ai-red) 45%,
                var(--ai-pink) 100%);
        padding: 64px 0;
        position: relative;
        overflow: hidden;
    }

    .ai-voice-stats::before {
        content: "";
        position: absolute;
        top: -80px;
        left: -60px;
        width: 320px;
        height: 320px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.06);
    }

    .ai-voice-stats::after {
        content: "";
        position: absolute;
        bottom: -120px;
        right: 10%;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
    }

    .ai-voice-stats_content {
        position: relative;
        z-index: 1;
        max-width: var(--ai-container-width);
        margin: 0 auto;
        padding: 0 40px;
    }

    .ai-voice-stats_content-heading {
        text-align: center;
        font-size: 44px;
        font-weight: 800;
        color: var(--ai-text-white);
        letter-spacing: -0.3px;
        margin-bottom: 36px;
    }

    .ai-voice-stats_content-stats-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .ai-voice-stats_content-stat {
        background: rgba(255, 255, 255, 0.14);
        border: 1px solid rgba(255, 255, 255, 0.22);
        border-radius: var(--ai-radius-lg);
        padding: 26px 16px 22px;
        text-align: center;
        backdrop-filter: blur(6px);
        transition: var(--ai-transition-fast);
    }

    .ai-voice-stats_content-stat:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-3px);
    }



    .ai-voice-stats_content-stat>span:first-child {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        margin-bottom: 14px;
    }

    .ai-voice-stats_content-stat>span:first-child svg {
        width: 28px;
        height: 28px;
        fill: var(--ai-text-white);
    }

    .ai-voice-stats_content-stat h3 {
        font-size: 30px;
        font-weight: 800;
        color: var(--ai-text-white);
        margin-bottom: 8px;
        letter-spacing: -0.5px;
        font-variant-numeric: tabular-nums;
    }

    .ai-voice-stats_content-stat>span:last-child {
        display: block;
        font-size: 13px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.85);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 768px) {
        .ai-voice-stats_content-stats-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /* ---------- Reduced motion: show final value immediately ---------- */

    @media (prefers-reduced-motion: reduce) {
        .ai-voice-stats_content-stat h3.count-number {
            transition: none;
        }
    }
</style>

<section class="ai-voice-stats">
    <div class="ai-voice-stats_content">
        <h1 class="ai-voice-stats_content-heading">
            Platform Performance
        </h1>
        <div class="ai-voice-stats_content-stats-container">
            <div class="ai-voice-stats_content-stat">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M407.9 319.9L177.1 317c-.7 0-1.4-.2-2-.5s-1.2-.8-1.6-1.4c-.4-.6-.7-1.3-.7-2s0-1.4 .2-2.1c.4-1.1 1.1-2.1 2.1-2.8s2.1-1.2 3.3-1.2l232.9-2.9c27.6-1.3 57.5-23.6 68-50.8l13.3-34.5c.4-.9 .5-1.9 .5-2.9 0-.5-.1-1.1-.2-1.6-7.4-32.2-25-61.1-50.3-82.3s-56.7-33.7-89.7-35.5-65.6 7.3-93 25.7-48 45.3-58.8 76.5c-11.3-8.5-24.9-13.3-39-13.7s-28 3.5-39.8 11.4-20.8 19.1-25.9 32.3-5.9 27.6-2.4 41.3c-52.3 1.5-94.2 44.1-94.2 96.5 0 4.7 .3 9.3 1 14 .2 1.1 .7 2.1 1.5 2.8s1.9 1.1 2.9 1.1l426.1 .1c0 0 .1 0 .1 0 1.2 0 2.3-.4 3.3-1.1s1.6-1.7 2-2.9l3.3-11.3c3.9-13.4 2.4-25.8-4.1-34.9-6-8.4-16.1-13.3-28.2-13.9zm105.9-98.8c-2.1 0-4.3 .1-6.4 .2-.8 .1-1.5 .3-2.1 .8s-1 1.1-1.3 1.8l-9.1 31.2c-3.9 13.4-2.4 25.8 4.1 34.9 6 8.4 16.1 13.3 28.2 13.9l49.2 2.9c.7 0 1.4 .2 2 .5s1.1 .8 1.5 1.4c.4 .6 .7 1.3 .8 2s0 1.5-.2 2.1c-.4 1.1-1.1 2.1-2.1 2.8s-2.1 1.2-3.3 1.2l-51.1 2.9c-27.8 1.3-57.7 23.6-68.1 50.8l-3.7 9.6c-.2 .4-.2 .8-.2 1.3s.2 .8 .4 1.2 .6 .7 .9 .9 .8 .3 1.2 .3c0 0 .1 0 .1 0l175.9 0c1 0 2-.3 2.8-.9s1.4-1.5 1.7-2.4c3.1-11.1 4.7-22.5 4.7-34 0-69.3-56.5-125.5-126.1-125.5z" />
                    </svg>
                </span>
                <h3 class="count-number" data-target="99" data-suffix="%">0%</h3>
                <span>Delivery Rate</span>
            </div>
            <div class="ai-voice-stats_content-stat">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M0 256L28.5 28c2-16 15.6-28 31.8-28L228.9 0c15 0 27.1 12.1 27.1 27.1 0 3.2-.6 6.5-1.7 9.5L208 160 347.3 160c20.2 0 36.7 16.4 36.7 36.7 0 7.4-2.2 14.6-6.4 20.7l-192.2 281c-5.9 8.6-15.6 13.7-25.9 13.7l-2.9 0c-15.7 0-28.5-12.8-28.5-28.5 0-2.3 .3-4.6 .9-6.9L176 288 32 288c-17.7 0-32-14.3-32-32z" />
                    </svg>
                </span>
                <h3 class="count-number" data-target="2" data-prefix="< " data-suffix="s">&lt; 0s</h3>
                <span>Dial Speed</span>
            </div>
            <div class="ai-voice-stats_content-stat">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M50 284.8c4.2 2.1 9 3.2 14 3.2l50.7 0c8.5 0 16.6 3.4 22.6 9.4l13.3 13.3c6 6 14.1 9.4 22.6 9.4l18.7 0c17.7 0 32-14.3 32-32l0-40c0-13.3 10.7-24 24-24s24-10.7 24-24l0-42.7c0-8.5 3.4-16.6 9.4-22.6l13.3-13.3c6-6 9.4-14.1 9.4-22.6L304 57c0-1.2-.1-2.3-.2-3.5-15.4-3.6-31.4-5.5-47.8-5.5-114.9 0-208 93.1-208 208 0 9.8 .7 19.4 2 28.8zm403.3 37.3c-3.2-1.4-6.7-2.1-10.5-2.1L432 320c-8.8 0-16-7.2-16-16s-7.2-16-16-16l-34.7 0c-8.5 0-16.6 3.4-22.6 9.4l-45.3 45.3c-6 6-9.4 14.1-9.4 22.6l0 18.7c0 17.7 14.3 32 32 32l18.7 0c8.5 0 16.6 3.4 22.6 9.4 2.2 2.2 4.7 4.1 7.3 5.5 39.3-25.4 69.5-63.6 84.6-108.8zM0 256a256 256 0 1 1 512 0 256 256 0 1 1 -512 0zM128 368c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zM272 256c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16s16-7.2 16-16l0-32c0-8.8-7.2-16-16-16zm48-112l0 32c0 8.8 7.2 16 16 16s16-7.2 16-16l0-32c0-8.8-7.2-16-16-16s-16 7.2-16 16z" />
                    </svg>
                </span>
                <h3 class="count-number" data-target="20" data-suffix="+">0+</h3>
                <span>Languages</span>
            </div>
            <div class="ai-voice-stats_content-stat">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M464 256a208 208 0 1 1 -416 0 208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0 256 256 0 1 0 -512 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                    </svg>
                </span>
                <h3>24/7</h3>
                <span>Support</span>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const statsSection = document.querySelector(".ai-voice-stats");
        if (!statsSection) return;

        const counters = statsSection.querySelectorAll(".count-number");
        if (!counters.length) return;

        /* =====================================================
           COUNT FUNCTION
           ===================================================== */

        function animateCounter(element) {
            const target = Number(element.dataset.target);
            const prefix = element.dataset.prefix || "";
            const suffix = element.dataset.suffix || "";

            const duration = 1600;
            const startTime = performance.now();

            function updateCounter(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);

                /*
                 * Ease-out effect.
                 * Starts quickly and slows down near the target.
                 */
                const easedProgress = 1 - Math.pow(1 - progress, 3);

                const currentValue = Math.floor(easedProgress * target);

                element.textContent = prefix + currentValue.toLocaleString() + suffix;

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = prefix + target.toLocaleString() + suffix;
                }
            }

            requestAnimationFrame(updateCounter);
        }

        /* =====================================================
           START ANIMATIONS WHEN SECTION ENTERS VIEW
           ===================================================== */

        const prefersReducedMotion = window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        ).matches;

        if (prefersReducedMotion) {
            counters.forEach(function(counter) {
                const target = Number(counter.dataset.target);
                const prefix = counter.dataset.prefix || "";
                const suffix = counter.dataset.suffix || "";
                counter.textContent = prefix + target.toLocaleString() + suffix;
            });
            return;
        }

        const observer = new IntersectionObserver(
            function(entries) {
                entries.forEach(function(entry) {
                    if (!entry.isIntersecting) return;

                    counters.forEach(function(counter) {
                        animateCounter(counter);
                    });

                    /* Run only once. */
                    observer.unobserve(statsSection);
                });
            }, {
                threshold: 0.35
            }
        );

        observer.observe(statsSection);
    });
</script>