<!-- =========================================================
KING DIGITAL – RCS SERVICE PAGE | SECTION 2: PERFORMANCE STATS
Professional Poppins Design | Responsive | Animated
========================================================= -->

<section class="kd-rcs-performance" aria-label="RCS performance statistics">
    <div class="kd-rcs-performance__bg-orb kd-orb-one"></div>
    <div class="kd-rcs-performance__bg-orb kd-orb-two"></div>

    <div class="kd-rcs-performance__container">

        <div class="kd-rcs-performance__item">
            <div class="kd-rcs-performance__icon kd-icon-read">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4 12.5l4.2 4.2L20 5.5" />
                </svg>
            </div>
            <div class="kd-rcs-performance__content">
                <div class="kd-rcs-performance__number">
                    <span class="kd-stat-count" data-target="98" data-suffix="%">98%</span>
                </div>
                <div class="kd-rcs-performance__label">Message Read Rate</div>
            </div>
        </div>

        <div class="kd-rcs-performance__item">
            <div class="kd-rcs-performance__icon kd-icon-ctr">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 17L10 12L13 15L20 7" />
                    <path d="M15 7h5v5" />
                </svg>
            </div>
            <div class="kd-rcs-performance__content">
                <div class="kd-rcs-performance__number">
                    <span class="kd-stat-count" data-target="3" data-suffix="×">3×</span>
                </div>
                <div class="kd-rcs-performance__label">Higher CTR vs SMS</div>
            </div>
        </div>

        <div class="kd-rcs-performance__item">
            <div class="kd-rcs-performance__icon kd-icon-brands">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
            </div>
            <div class="kd-rcs-performance__content">
                <div class="kd-rcs-performance__number">
                    <span class="kd-stat-count" data-target="500" data-suffix="+">500+</span>
                </div>
                <div class="kd-rcs-performance__label">Brands Trust Us</div>
            </div>
        </div>

        <div class="kd-rcs-performance__item">
            <div class="kd-rcs-performance__icon kd-icon-speed">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M3 12a9 9 0 1 1 18 0" />
                    <path d="M12 12l4-4" />
                    <circle cx="12" cy="12" r="1" />
                </svg>
            </div>
            <div class="kd-rcs-performance__content">
                <div class="kd-rcs-performance__number">&lt; 2s</div>
                <div class="kd-rcs-performance__label">Average Delivery Speed</div>
            </div>
        </div>

    </div>
</section>

<style>

    .kd-rcs-performance,
    .kd-rcs-performance * {
        box-sizing: border-box;
    }

    .kd-rcs-performance {
        --kd-blue: #315abf;
        --kd-indigo: #4b43b9;
        --kd-deep: #253f9c;
        --kd-orange: #f06a28;
        --kd-white: #ffffff;
        --kd-muted: rgba(255, 255, 255, .76);

        position: relative;
        width: 100%;
        overflow: hidden;
        isolation: isolate;
        padding: 18px 5%;
        background:
            linear-gradient(105deg, #315abf 0%, #3e52bb 52%, #4b43b9 100%);
    }

    .kd-rcs-performance::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -2;
        background:
            radial-gradient(circle at 4% 50%, rgba(255, 255, 255, .12), transparent 23%),
            radial-gradient(circle at 96% 50%, rgba(255, 255, 255, .08), transparent 24%);
    }

    .kd-rcs-performance::after {
        content: "";
        position: absolute;
        top: 0;
        left: 7%;
        width: 86%;
        height: 1px;
        background: rgba(255, 255, 255, .15);
        z-index: 1;
    }

    .kd-rcs-performance__bg-orb {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        z-index: -1;
        filter: blur(18px);
    }

    .kd-orb-one {
        width: 210px;
        height: 210px;
        left: -105px;
        top: -130px;
        background: rgba(143, 188, 255, .25);
    }

    .kd-orb-two {
        width: 190px;
        height: 190px;
        right: -90px;
        bottom: -130px;
        background: rgba(187, 152, 255, .20);
    }

    .kd-rcs-performance__container {
        width: min(100%, 1320px);
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        align-items: center;
    }

    .kd-rcs-performance__item {
        position: relative;
        min-height: 88px;
        padding: 12px 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        transition: transform .35s ease;
    }

    .kd-rcs-performance__item:not(:first-child)::before {
        content: "";
        position: absolute;
        left: 0;
        top: 18%;
        width: 1px;
        height: 64%;
        background: linear-gradient(to bottom,
                transparent,
                rgba(255, 255, 255, .24),
                transparent);
    }

    .kd-rcs-performance__icon {
        width: 40px;
        height: 40px;
        flex: 0 0 40px;
        display: grid;
        place-items: center;
        border: 1px solid rgba(255, 255, 255, .18);
        border-radius: 12px;
        background: rgba(255, 255, 255, .10);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .12);
        transition: all .35s ease;
    }

    .kd-rcs-performance__icon svg {
        width: 20px;
        height: 20px;
        fill: none;
        stroke: #ffffff;
        stroke-width: 1.8;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .kd-rcs-performance__content {
        min-width: 0;
        text-align: left;
    }

    .kd-rcs-performance__number {
        margin-bottom: 4px;
        color: var(--kd-white);
        font-size: clamp(24px, 2vw, 34px);
        font-weight: 800;
        line-height: 1.05;
        letter-spacing: -.03em;
        white-space: nowrap;
    }

    .kd-rcs-performance__label {
        color: var(--kd-muted);
        font-size: clamp(11px, .9vw, 14px);
        font-weight: 500;
        line-height: 1.4;
        white-space: nowrap;
    }

    .kd-rcs-performance__item:hover {
        transform: translateY(-3px);
    }

    .kd-rcs-performance__item:hover .kd-rcs-performance__icon {
        background: rgba(255, 255, 255, .18);
        border-color: rgba(255, 255, 255, .35);
        transform: scale(1.08) rotate(-4deg);
        box-shadow: 0 8px 22px rgba(17, 32, 110, .22);
    }

    /* Mobile */
    @media (max-width: 950px) {
        .kd-rcs-performance {
            padding: 14px 4%;
        }

        .kd-rcs-performance__container {
            grid-template-columns: repeat(2, 1fr);
        }

        .kd-rcs-performance__item {
            min-height: 78px;
            padding: 10px 18px;
        }

        .kd-rcs-performance__item:nth-child(3)::before {
            display: none;
        }

        .kd-rcs-performance__item:nth-child(n+3) {
            border-top: 1px solid rgba(255, 255, 255, .12);
        }
    }

    @media (max-width: 560px) {
        .kd-rcs-performance {
            padding: 8px 10px;
        }

        .kd-rcs-performance__container {
            grid-template-columns: 1fr 1fr;
        }

        .kd-rcs-performance__item {
            min-height: 72px;
            padding: 8px 9px;
            gap: 9px;
        }

        .kd-rcs-performance__item:not(:first-child)::before {
            top: 20%;
            height: 60%;
        }

        .kd-rcs-performance__icon {
            width: 32px;
            height: 32px;
            flex-basis: 32px;
            border-radius: 9px;
        }

        .kd-rcs-performance__icon svg {
            width: 16px;
            height: 16px;
        }

        .kd-rcs-performance__number {
            font-size: 21px;
            margin-bottom: 3px;
        }

        .kd-rcs-performance__label {
            font-size: 9.5px;
            line-height: 1.35;
            white-space: normal;
        }
    }

    @media (max-width: 360px) {
        .kd-rcs-performance__item {
            gap: 7px;
            padding: 7px 5px;
        }

        .kd-rcs-performance__icon {
            width: 29px;
            height: 29px;
            flex-basis: 29px;
        }

        .kd-rcs-performance__number {
            font-size: 19px;
        }

        .kd-rcs-performance__label {
            font-size: 8.5px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .kd-rcs-performance__item,
        .kd-rcs-performance__icon {
            transition: none;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const section = document.querySelector(".kd-rcs-performance");
        const counters = section ? section.querySelectorAll(".kd-stat-count") : [];

        if (!section || !counters.length) return;

        function animateCounter(counter) {
            const target = Number(counter.getAttribute("data-target")) || 0;
            const suffix = counter.getAttribute("data-suffix") || "";
            const duration = 1200;
            const start = performance.now();

            function update(time) {
                const progress = Math.min((time - start) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 4);
                counter.textContent = Math.round(target * eased) + suffix;

                if (progress < 1) requestAnimationFrame(update);
            }

            requestAnimationFrame(update);
        }

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    counters.forEach(animateCounter);
                    observer.unobserve(section);
                }
            });
        }, {
            threshold: 0.35
        });

        observer.observe(section);
    });
</script>