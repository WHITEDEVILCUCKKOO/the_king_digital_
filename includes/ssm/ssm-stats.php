<style>
    :root {
        /* ========================================
       SOCIAL MEDIA MARKETING THEME
       ======================================== */

        /* Primary */
        --smm-primary: #7C3AED;
        --smm-primary-light: #A78BFA;
        --smm-primary-dark: #5B21B6;

        /* Secondary */
        --smm-secondary: #EC4899;
        --smm-secondary-light: #F9A8D4;
        --smm-secondary-dark: #BE185D;

        /* Accent */
        --smm-accent: #F97316;
        --smm-accent-light: #FDBA74;
        --smm-accent-dark: #EA580C;

        /* Gradient */
        --smm-gradient: linear-gradient(135deg,
                #7C3AED 0%,
                #EC4899 55%,
                #F97316 100%);

        --smm-gradient-soft: linear-gradient(135deg,
                #F5F3FF 0%,
                #FCE7F3 55%,
                #FFF7ED 100%);

        /* Backgrounds */
        --smm-bg: #FFFFFF;
        --smm-bg-soft: #FAF9FF;
        --smm-bg-purple: #F5F3FF;
        --smm-bg-pink: #FDF2F8;
        --smm-bg-orange: #FFF7ED;

        /* Dark Sections */
        --smm-dark: #181026;
        --smm-dark-2: #24163A;
        --smm-dark-card: #2D1B46;

        /* Text */
        --smm-text: #18181B;
        --smm-text-dark: #27272A;
        --smm-text-muted: #71717A;
        --smm-text-light: #A1A1AA;
        --smm-text-white: #FFFFFF;

        /* Borders */
        --smm-border: #E4E4E7;
        --smm-border-light: #F0ECF8;
        --smm-border-purple: #DDD6FE;

        /* Cards */
        --smm-card: #FFFFFF;
        --smm-card-hover: #FCFAFF;

        /* Status / Metrics */
        --smm-success: #22C55E;
        --smm-success-light: #DCFCE7;

        --smm-danger: #EF4444;
        --smm-warning: #F59E0B;
        --smm-info: #3B82F6;

        /* Shadows */
        --smm-shadow-sm:
            0 2px 8px rgba(24, 16, 38, 0.05);

        --smm-shadow-md:
            0 8px 30px rgba(24, 16, 38, 0.08);

        --smm-shadow-lg:
            0 20px 50px rgba(124, 58, 237, 0.12);

        --smm-shadow-glow:
            0 0 40px rgba(124, 58, 237, 0.18);

        /* Radius */
        --smm-radius-sm: 10px;
        --smm-radius-md: 16px;
        --smm-radius-lg: 24px;
        --smm-radius-xl: 32px;

        /* Spacing */
        --smm-section-space: clamp(70px, 8vw, 120px);

        /* Container */
        --smm-container: 1240px;
    }

    /* =========================================================
   STATS SECTION
========================================================= */

    .smm-stats {
        position: relative;
        overflow: hidden;
        background: linear-gradient(180deg, var(--smm-bg-soft) 0%, #FFFFFF 100%);
        /* padding: clamp(56px, 6vw, 88px) 0; */
    }

    /* Faint dotted grid, tucked into the top-right corner */
    .smm-stats::before {
        content: "";
        position: absolute;
        top: -30px;
        right: -30px;
        width: 220px;
        height: 220px;
        background-image: radial-gradient(var(--smm-border-purple) 1.6px, transparent 1.6px);
        background-size: 16px 16px;
        -webkit-mask-image: radial-gradient(circle at 70% 30%, #000 0%, #000 40%, transparent 75%);
        mask-image: radial-gradient(circle at 70% 30%, #000 0%, #000 40%, transparent 75%);
        opacity: 0.8;
        pointer-events: none;
        z-index: 0;
    }

    /* Soft ambient glows behind the card */
    .smm-stats::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 0;
        background:
            radial-gradient(circle, rgba(124, 58, 237, 0.09) 0%, rgba(124, 58, 237, 0) 70%) -100px 50% / 340px 340px no-repeat,
            radial-gradient(circle, rgba(249, 115, 22, 0.07) 0%, rgba(249, 115, 22, 0) 70%) calc(100% + 100px) 50% / 320px 320px no-repeat;
    }

    .smm-stats_container {
        position: relative;
        z-index: 1;
        max-width: var(--smm-container);
        margin-inline: auto;
        padding-inline: 24px;
    }

    /* ---------- Card panel ---------- */

    .smm-stats_card {
        position: relative;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        background: #FFFFFF;
        border: 1px solid var(--smm-border-light);
        border-radius: var(--smm-radius-xl);
        box-shadow: var(--smm-shadow-lg);
        overflow: hidden;
        transition: box-shadow 320ms ease;
    }

    .smm-stats_card:hover {
        box-shadow: 0 26px 60px rgba(124, 58, 237, 0.16);
    }

    /* Thin brand-gradient strip along the top */
    .smm-stats_card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--smm-gradient);
        z-index: 2;
    }

    /* ---------- Individual stat ---------- */

    .smm-stat {
        position: relative;
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 30px 26px;
        transition: background 300ms ease, transform 300ms ease;
    }

    .smm-stat:not(:last-child)::after {
        content: "";
        position: absolute;
        top: 22px;
        bottom: 22px;
        right: 0;
        width: 1px;
        background: linear-gradient(180deg,
                rgba(228, 228, 231, 0) 0%,
                var(--smm-border) 50%,
                rgba(228, 228, 231, 0) 100%);
    }

    .smm-stat:hover {
        transform: translateY(-3px);
        background: var(--smm-card-hover);
    }

    /* ---------- Icon ---------- */

    .smm-stat_icon {
        width: 56px;
        height: 56px;
        flex: 0 0 56px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        box-shadow: 0 0 0 6px #FFFFFF;
        transition: transform 300ms ease, box-shadow 300ms ease;
    }

    .smm-stat:hover .smm-stat_icon {
        transform: scale(1.08) rotate(-4deg);
    }

    .smm-stat_icon--purple {
        background: var(--smm-bg-purple);
        color: var(--smm-primary);
    }

    .smm-stat:hover .smm-stat_icon--purple {
        box-shadow: 0 0 0 6px #FFFFFF, 0 10px 20px rgba(124, 58, 237, 0.25);
    }

    .smm-stat_icon--pink {
        background: var(--smm-bg-pink);
        color: var(--smm-secondary);
    }

    .smm-stat:hover .smm-stat_icon--pink {
        box-shadow: 0 0 0 6px #FFFFFF, 0 10px 20px rgba(236, 72, 153, 0.25);
    }

    .smm-stat_icon--orange {
        background: var(--smm-bg-orange);
        color: var(--smm-accent);
    }

    .smm-stat:hover .smm-stat_icon--orange {
        box-shadow: 0 0 0 6px #FFFFFF, 0 10px 20px rgba(249, 115, 22, 0.25);
    }

    .smm-stat_icon--blue {
        background: rgba(59, 130, 246, 0.12);
        color: var(--smm-info);
    }

    .smm-stat:hover .smm-stat_icon--blue {
        box-shadow: 0 0 0 6px #FFFFFF, 0 10px 20px rgba(59, 130, 246, 0.25);
    }

    /* ---------- Content ---------- */

    .smm-stat_content {
        min-width: 0;
    }

    .smm-stat_content h3 {
        font-size: 26px;
        line-height: 1.1;
        font-weight: 800;
        color: var(--smm-text);
        margin-bottom: 6px;
        white-space: nowrap;
    }

    /* Renamed & scoped to this section only — see note below the
       code block for why this replaces .smm-stat_count */
    .smm-stats-counter__value {
        color: inherit;
    }

    .smm-stat_content p {
        font-size: 12px;
        line-height: 1.4;
        color: var(--smm-text-muted);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 900px) {
        .smm-stats_card {
            grid-template-columns: repeat(2, 1fr);
        }

        .smm-stat:nth-child(2)::after {
            display: none;
        }

        .smm-stat:nth-child(3)::after {
            display: block;
        }

        .smm-stats::after {
            background:
                radial-gradient(circle, rgba(124, 58, 237, 0.09) 0%, rgba(124, 58, 237, 0) 70%) -80px 30% / 260px 260px no-repeat,
                radial-gradient(circle, rgba(249, 115, 22, 0.07) 0%, rgba(249, 115, 22, 0) 70%) calc(100% + 80px) 70% / 240px 240px no-repeat;
        }
    }

    @media (max-width: 600px) {
        .smm-stats_card {
            grid-template-columns: 1fr;
            border-radius: var(--smm-radius-lg);
        }

        .smm-stat {
            padding: 22px 22px;
        }

        .smm-stat:hover {
            transform: none;
        }

        .smm-stat::after {
            top: auto !important;
            right: 22px !important;
            bottom: 0 !important;
            left: 22px;
            width: auto !important;
            height: 1px;
            background: linear-gradient(90deg,
                    rgba(228, 228, 231, 0) 0%,
                    var(--smm-border) 50%,
                    rgba(228, 228, 231, 0) 100%) !important;
        }

        .smm-stat:last-child::after {
            display: none;
        }

        .smm-stat_content h3 {
            font-size: 23px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .smm-stats_card,
        .smm-stat,
        .smm-stat_icon {
            transition: none;
        }
    }
</style>

<section class="smm-stats" id="smm-stats-section">
    <div class="container smm-stats_container">
        <div class="smm-stats_card">
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--purple">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stats-counter__value" data-stats-count="10">0</span>M+
                    </h3>
                    <p>Impressions Generated</p>
                </div>
            </div>
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--pink">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stats-counter__value" data-stats-count="500">0</span>+
                    </h3>
                    <p>Successful Campaigns</p>
                </div>
            </div>
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--orange">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stats-counter__value" data-stats-count="80">0</span>%+
                    </h3>
                    <p>Average Engagement Growth</p>
                </div>
            </div>
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--blue">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stats-counter__value" data-stats-count="4.8">0</span>/5
                    </h3>
                    <p>Client Satisfaction Rating</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    /**
     * Section-scoped counter animation for #smm-stats-section only.
     * ----------------------------------------------------------------
     * This is intentionally namespaced and self-contained so it cannot
     * collide with any other counter script on the page, even one that
     * also targets `data-count` / `.smm-stat_count`-style elements:
     *
     *   - Selector is scoped to the section id: only elements INSIDE
     *     #smm-stats-section are ever touched.
     *   - Uses its own attribute name, `data-stats-count`, instead of
     *     the generic `data-count` that another script might already
     *     be watching.
     *   - Uses its own class, `.smm-stats-counter__value`, instead of
     *     the more generic `.smm-stat_count`.
     *   - Wrapped in an IIFE with a unique namespace
     *     (`SmmStatsSectionCounters`) so it never leaks globals or
     *     re-runs if included twice by accident.
     *
     * It writes ONLY the plain number into the element — no "+", "%",
     * "M", "/5", etc. Those suffixes stay as static text in the HTML,
     * right after each span, exactly as written above.
     */

    var SmmStatsSectionCounters = SmmStatsSectionCounters || (function() {
        "use strict";

        var SECTION_ID = "smm-stats-section";
        var COUNTER_ATTR = "data-stats-count";
        var ANIMATION_DURATION_MS = 1600;

        function easeOutQuad(t) {
            return 1 - (1 - t) * (1 - t);
        }

        function getDecimalPlaces(numString) {
            var dotIndex = numString.indexOf(".");
            return dotIndex === -1 ? 0 : numString.length - dotIndex - 1;
        }

        function formatValue(value, decimalPlaces, useThousandsSeparator) {
            var fixed = value.toFixed(decimalPlaces);

            if (!useThousandsSeparator) {
                return fixed;
            }

            var parts = fixed.split(".");
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return parts.join(".");
        }

        function animateCounter(el) {
            if (el.dataset.smmStatsCounted === "true") {
                return;
            }

            var rawTarget = el.getAttribute(COUNTER_ATTR);
            var target = parseFloat(rawTarget);

            if (isNaN(target)) {
                return;
            }

            var decimalPlaces = getDecimalPlaces(rawTarget);
            var useThousandsSeparator = target >= 1000;

            el.dataset.smmStatsCounted = "true";

            var startTime = null;

            function step(timestamp) {
                if (startTime === null) {
                    startTime = timestamp;
                }

                var elapsed = timestamp - startTime;
                var progress = Math.min(elapsed / ANIMATION_DURATION_MS, 1);
                var eased = easeOutQuad(progress);
                var currentValue = target * eased;

                el.textContent = formatValue(currentValue, decimalPlaces, useThousandsSeparator);

                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    el.textContent = formatValue(target, decimalPlaces, useThousandsSeparator);
                }
            }

            requestAnimationFrame(step);
        }

        function init() {
            var section = document.getElementById(SECTION_ID);

            if (!section) {
                return;
            }

            var counters = section.querySelectorAll("[" + COUNTER_ATTR + "]");

            if (!counters.length) {
                return;
            }

            var prefersReducedMotion = window.matchMedia &&
                window.matchMedia("(prefers-reduced-motion: reduce)").matches;

            if (prefersReducedMotion) {
                counters.forEach(function(el) {
                    var rawTarget = el.getAttribute(COUNTER_ATTR);
                    var target = parseFloat(rawTarget);
                    if (!isNaN(target)) {
                        var decimalPlaces = getDecimalPlaces(rawTarget);
                        el.textContent = formatValue(target, decimalPlaces, target >= 1000);
                    }
                });
                return;
            }

            if (!("IntersectionObserver" in window)) {
                counters.forEach(animateCounter);
                return;
            }

            var observer = new IntersectionObserver(
                function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            animateCounter(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.4
                }
            );

            counters.forEach(function(el) {
                observer.observe(el);
            });
        }

        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", init);
        } else {
            init();
        }

        return {
            init: init
        };
    })();
</script>