<style>
    :root {
        /* =========================
       SEO SERVICE COLOR THEME
       ========================= */

        --seo-primary: #F97316;
        --seo-primary-dark: #EA580C;
        --seo-primary-light: #FB923C;

        --seo-accent: #F59E0B;

        --seo-bg: #FDF1E5;
        --seo-bg-soft: #FFEDD5;

        --seo-white: #FFFFFF;

        --seo-heading: #1F2937;
        --seo-text: #374151;
        --seo-muted: #6B7280;

        --seo-border: #FED7AA;


        /* =========================
       SEO GRADIENTS
       ========================= */

        --seo-gradient: linear-gradient(135deg,
                #F97316 0%,
                #F59E0B 100%);

        --seo-gradient-soft: linear-gradient(135deg,
                #FFF7ED 0%,
                #FFEDD5 100%);


        /* =========================
       SEO SHADOWS
       ========================= */

        --seo-shadow: 0 10px 30px rgba(249, 115, 22, 0.10);

        --seo-shadow-hover: 0 18px 45px rgba(249, 115, 22, 0.18);


        /* =========================
       SEO UI
       ========================= */

        --seo-radius-sm: 8px;
        --seo-radius-md: 14px;
        --seo-radius-lg: 20px;
        --seo-radius-xl: 28px;

        --seo-transition: 0.3s ease;
    }

    /* =========================
   SEO STATS STRIP
   ========================= */

    .seo-stats {
        position: relative;
        background: var(--seo-heading);
        padding: 25px 5vw;
        isolation: isolate;
    }

    .seo-stats::before {
        content: "";
        position: absolute;
        inset: 0 0 auto 0;
        height: 5px;
        background: var(--seo-gradient);
    }

    .seo-stats_content {
        max-width: 1280px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 48px;
        flex-wrap: wrap;
    }

    .seo-stats_content-heading {
        font-size: clamp(1.3rem, 2vw, 1.6rem);
        font-weight: 700;
        line-height: 1.35;
        color: var(--seo-white);
        max-width: 300px;
        margin: 0;
        flex-shrink: 0;
    }

    .seo-stats_content-item {
        display: flex;
        align-items: stretch;
        flex-wrap: wrap;
        gap: 0;
    }

    .seo-stats_content-item-value {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 4px 44px;
        border-left: 1px solid rgba(255, 255, 255, 0.14);
    }

    .seo-stats_content-item-value:first-child {
        border-left: none;
        padding-left: 0;
    }

    .seo-stats_content-item-value strong {
        font-family: 'Space Grotesk', 'Inter', sans-serif;
        font-size: clamp(2rem, 3vw, 2.75rem);
        font-weight: 700;
        line-height: 1;
        background: var(--seo-gradient);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        white-space: nowrap;
    }

    .seo-stats_content-item-value small {
        display: block;
        margin-top: 8px;
        font-size: 0.85rem;
        font-weight: 500;
        letter-spacing: 0.01em;
        color: #C6CBD4;
        white-space: nowrap;
    }

    /* =========================
   RESPONSIVE
   ========================= */

    @media (max-width: 900px) {
        .seo-stats_content {
            flex-direction: column;
            align-items: flex-start;
            gap: 32px;
        }

        .seo-stats_content-heading {
            max-width: none;
        }

        .seo-stats_content-item {
            width: 100%;
            justify-content: space-between;
        }

        .seo-stats_content-item-value {
            padding: 4px 20px;
            flex: 1;
        }
    }

    @media (max-width: 560px) {
        .seo-stats {
            padding: 44px 6vw;
        }

        .seo-stats_content-item {
            flex-direction: column;
            gap: 20px;
        }

        .seo-stats_content-item-value {
            border-left: none;
            padding: 0 0 0 16px;
            border-left: 2px solid var(--seo-primary);
            width: 100%;
        }

        .seo-stats_content-item-value:first-child {
            padding-left: 16px;
            border-left: 2px solid var(--seo-primary);
        }
    }
</style>

<section class="seo-stats">
    <div class="seo-stats_content">
        <h2 class="seo-stats_content-heading">
            Trusted SEO That Delivers Results
        </h2>
        <div class="seo-stats_content-item">
            <div class="seo-stats_content-item-value">
                <strong>500+</strong>
                <small>Keywords Ranked</small>
            </div>
            <div class="seo-stats_content-item-value">
                <strong>95%+</strong>
                <small>Client Retained</small>
            </div>
            <div class="seo-stats_content-item-value">
                <strong>3X</strong>
                <small>Traffic Growth</small>
            </div>
        </div>
    </div>
</section>

<script>

    (function() {
        "use strict";

        var DURATION = 1400; // ms
        var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

        function easeOutExpo(t) {
            return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
        }

        function parseValue(text) {
            var match = text.trim().match(/^([\d.]+)(.*)$/);
            if (!match) return null;
            return {
                target: parseFloat(match[1]),
                decimals: (match[1].split(".")[1] || "").length,
                suffix: match[2] || ""
            };
        }

        function animateEl(el) {
            var parsed = parseValue(el.dataset.rawValue);
            if (!parsed) return;

            if (reduceMotion) {
                el.textContent = parsed.target.toFixed(parsed.decimals) + parsed.suffix;
                return;
            }

            var start = null;

            function step(timestamp) {
                if (start === null) start = timestamp;
                var progress = Math.min((timestamp - start) / DURATION, 1);
                var eased = easeOutExpo(progress);
                var current = parsed.target * eased;

                el.textContent = current.toFixed(parsed.decimals) + parsed.suffix;

                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    el.textContent = parsed.target.toFixed(parsed.decimals) + parsed.suffix;
                }
            }

            requestAnimationFrame(step);
        }

        function init() {
            var strips = document.querySelectorAll(".seo-stats");
            if (!strips.length) return;

            strips.forEach(function(strip) {
                var values = strip.querySelectorAll(".seo-stats_content-item-value strong");
                if (!values.length) return;

                // cache original text once so re-triggering never loses the real value
                values.forEach(function(el) {
                    if (!el.dataset.rawValue) el.dataset.rawValue = el.textContent;
                });

                var observer = new IntersectionObserver(
                    function(entries, obs) {
                        entries.forEach(function(entry) {
                            if (entry.isIntersecting) {
                                values.forEach(animateEl);
                                obs.unobserve(entry.target);
                            }
                        });
                    }, {
                        threshold: 0.4
                    }
                );

                observer.observe(strip);
            });
        }

        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", init);
        } else {
            init();
        }
    })();
</script>