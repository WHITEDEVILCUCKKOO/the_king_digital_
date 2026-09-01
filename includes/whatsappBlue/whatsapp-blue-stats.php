<style>
    :root {
        /* ========================================
       WHATSAPP — GREEN + BLUE THEME
       ======================================== */

        /* ---------- Primary Green ---------- */
        --wa-green: #25D366;
        --wa-green-dark: #16A34A;
        --wa-green-light: #4ADE80;
        --wa-green-soft: #ECFDF3;
        --wa-green-pale: #DCFCE7;

        /* ---------- Primary Blue ---------- */
        --wa-blue: #2563EB;
        --wa-blue-dark: #1D4ED8;
        --wa-blue-light: #3B82F6;
        --wa-blue-soft: #EFF6FF;
        --wa-blue-pale: #DBEAFE;

        /* ---------- Deep Brand ---------- */
        --wa-navy: #0F172A;
        --wa-navy-light: #1E293B;

        /* ---------- Text ---------- */
        --wa-text-primary: #0F172A;
        --wa-text-secondary: #475569;
        --wa-text-muted: #64748B;
        --wa-text-white: #FFFFFF;

        /* ---------- Backgrounds ---------- */
        --wa-bg: #FFFFFF;
        --wa-bg-soft: #F8FAFC;
        --wa-bg-green: #F0FDF4;
        --wa-bg-blue: #EFF6FF;

        /* ---------- Surface ---------- */
        --wa-surface: #FFFFFF;
        --wa-border: #E2E8F0;

        /* ---------- Gradients ---------- */

        --wa-gradient:
            linear-gradient(135deg,
                #25D366 0%,
                #22C55E 35%,
                #3B82F6 100%);

        --wa-gradient-blue:
            linear-gradient(135deg,
                #2563EB 0%,
                #3B82F6 60%,
                #60A5FA 100%);

        --wa-gradient-green:
            linear-gradient(135deg,
                #16A34A 0%,
                #25D366 60%,
                #4ADE80 100%);

        --wa-gradient-soft:
            linear-gradient(135deg,
                #ECFDF3 0%,
                #EFF6FF 100%);

        /* ---------- Shadows ---------- */

        --wa-shadow-sm:
            0 4px 15px rgba(15, 23, 42, 0.06);

        --wa-shadow-green:
            0 15px 40px rgba(37, 211, 102, 0.16);

        --wa-shadow-blue:
            0 15px 40px rgba(37, 99, 235, 0.16);

        /* ---------- Radius ---------- */

        --wa-radius-sm: 10px;
        --wa-radius-md: 16px;
        --wa-radius-lg: 24px;
        --wa-radius-xl: 32px;

        /* ========================================
       SMM ALIASES — this section's markup was
       written against --smm-* variable names that
       were never defined. Mapping them onto the
       existing WhatsApp green/blue theme so the
       card actually renders (radius, shadow, icon
       colors, container width, etc.) instead of
       silently falling back to browser defaults.
       ======================================== */

        --smm-container: 1200px;

        --smm-bg-soft: var(--wa-bg-soft);
        --smm-text: var(--wa-navy);
        --smm-text-muted: var(--wa-text-muted);
        --smm-border: var(--wa-border);
        --smm-border-light: var(--wa-border);
        --smm-card-hover: var(--wa-bg-soft);

        --smm-radius-lg: var(--wa-radius-lg);
        --smm-radius-xl: var(--wa-radius-xl);
        --smm-shadow-lg: 0 20px 50px rgba(15, 23, 42, 0.10);

        --smm-gradient: var(--wa-gradient);

        /* four icon accents pulled from the green/blue palette
           (no purple/pink/orange in the base theme, so these
           reuse blue + green at different weights/tints) */
        --smm-primary: var(--wa-blue-dark);
        --smm-bg-purple: var(--wa-blue-soft);
        --smm-border-purple: var(--wa-blue-light);

        --smm-secondary: var(--wa-green-dark);
        --smm-bg-pink: var(--wa-green-soft);

        --smm-accent: #B45309;
        --smm-bg-orange: #FEF3C7;

        --smm-info: var(--wa-blue);
        /* --smm-bg-blue already implied via rgba() inline in the CSS below */
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* =========================================================
   STATS SECTION
    ========================================================= */

    .smm-stats {
        position: relative;
        overflow: hidden;
        background: linear-gradient(180deg, var(--smm-bg-soft) 0%, #FFFFFF 100%);
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
            radial-gradient(circle, rgba(37, 99, 235, 0.09) 0%, rgba(37, 99, 235, 0) 70%) -100px 50% / 340px 340px no-repeat,
            radial-gradient(circle, rgba(37, 211, 102, 0.08) 0%, rgba(37, 211, 102, 0) 70%) calc(100% + 100px) 50% / 320px 320px no-repeat;
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
        box-shadow: 0 26px 60px rgba(37, 99, 235, 0.16);
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
        box-shadow: 0 0 0 6px #FFFFFF, 0 10px 20px rgba(37, 99, 235, 0.25);
    }

    .smm-stat_icon--pink {
        background: var(--smm-bg-pink);
        color: var(--smm-secondary);
    }

    .smm-stat:hover .smm-stat_icon--pink {
        box-shadow: 0 0 0 6px #FFFFFF, 0 10px 20px rgba(22, 163, 74, 0.25);
    }

    .smm-stat_icon--orange {
        background: var(--smm-bg-orange);
        color: var(--smm-accent);
    }

    .smm-stat:hover .smm-stat_icon--orange {
        box-shadow: 0 0 0 6px #FFFFFF, 0 10px 20px rgba(180, 83, 9, 0.25);
    }

    .smm-stat_icon--blue {
        background: rgba(37, 99, 235, 0.12);
        color: var(--smm-info);
    }

    .smm-stat:hover .smm-stat_icon--blue {
        box-shadow: 0 0 0 6px #FFFFFF, 0 10px 20px rgba(37, 99, 235, 0.25);
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
                radial-gradient(circle, rgba(37, 99, 235, 0.09) 0%, rgba(37, 99, 235, 0) 70%) -80px 30% / 260px 260px no-repeat,
                radial-gradient(circle, rgba(37, 211, 102, 0.08) 0%, rgba(37, 211, 102, 0) 70%) calc(100% + 80px) 70% / 240px 240px no-repeat;
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
                    <i class="fa-solid fa-handshake-angle"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stats-counter__value" data-stats-count="1520">0</span>+
                    </h3>
                    <p>Businesses Assisted</p>
                </div>
            </div>
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--pink">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stats-counter__value" data-stats-count="100">0</span>+
                    </h3>
                    <p>Verification Cases</p>
                </div>
            </div>
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--orange">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stats-counter__value">24/7</span>
                    </h3>
                    <p>Support Assistance</p>
                </div>
            </div>
            <div class="smm-stat">
                <div class="smm-stat_icon smm-stat_icon--blue">
                    <i class="fa-solid fa-spinner"></i>
                </div>
                <div class="smm-stat_content">
                    <h3>
                        <span class="smm-stats-counter__value" data-stats-count="100">0</span>%
                    </h3>
                    <p>Guided Process</p>
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