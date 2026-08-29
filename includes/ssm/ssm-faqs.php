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
   FAQ SECTION
========================================================= */

    .ssm-faqs {
        position: relative;
        overflow: hidden;
        background: #FFFFFF;
        padding: var(--smm-section-space) 0;
    }

    /* Thin brand-gradient strip along the bottom, echoing the one
       used on the card panels elsewhere on the site */
    /* .ssm-faqs::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 3px;
        background: var(--smm-gradient);
        opacity: 0.7;
        z-index: 0;
    } */

    /* Faint dotted grid, bottom-right */
    .ssm-faqs::after {
        content: "";
        position: absolute;
        right: -20px;
        bottom: 10px;
        width: 200px;
        height: 200px;
        background-image: radial-gradient(var(--smm-border-purple) 1.6px, transparent 1.6px);
        background-size: 16px 16px;
        -webkit-mask-image: radial-gradient(circle at 70% 60%, #000 0%, #000 35%, transparent 72%);
        mask-image: radial-gradient(circle at 70% 60%, #000 0%, #000 35%, transparent 72%);
        opacity: 0.8;
        pointer-events: none;
        z-index: 0;
    }

    .ssm-faqs_content {
        position: relative;
        z-index: 1;
        max-width: var(--smm-container);
        margin-inline: auto;
        padding-inline: 24px;
        display: grid;
        grid-template-columns: 0.62fr 1.38fr;
        gap: 40px;
        align-items: start;
    }

    /* ---------- Left: heading + illustration panel ---------- */

    .ssm-faqs_content--visual {
        position: sticky;
        top: 100px;
        display: flex;
        flex-direction: column;
        border-radius: var(--smm-radius-xl);
        background: var(--smm-gradient-soft);
        border: 1px solid var(--smm-border-light);
        padding: 30px 28px 22px;
        overflow: hidden;
    }

    /* Soft blurred glow behind the illustration */
    .ssm-faqs_content--visual::before {
        content: "";
        position: absolute;
        top: 20%;
        left: 50%;
        width: 220px;
        height: 220px;
        transform: translateX(-50%);
        background: radial-gradient(circle, rgba(124, 58, 237, 0.16) 0%, rgba(124, 58, 237, 0) 70%);
        pointer-events: none;
        z-index: 0;
    }

    .ssm-faqs_content--visual-title {
        position: relative;
        z-index: 1;
        font-size: 21px;
        font-weight: 800;
        line-height: 1.3;
        color: var(--smm-text);
        margin-bottom: 20px;
    }

    .ssm-faqs_content--visual img {
        position: relative;
        z-index: 1;
        width: 100%;
        height: auto;
        object-fit: contain;
        display: block;
    }

    /* ---------- Right: accordion ---------- */

    .ssm-faqs_content--qa-container {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .ssm-faqs_content--qa-card {
        background: #FFFFFF;
        border: 1px solid var(--smm-border-light);
        border-radius: var(--smm-radius-md);
        box-shadow: var(--smm-shadow-sm);
        padding-inline: 22px;

        /* Accordion height animation without JS measuring: the row
           heights are 0fr while closed, and the open card switches
           its answer row to 1fr — smoothly animated by the browser. */
        display: grid;
        grid-template-rows: auto 0fr;
        transition: grid-template-rows 320ms ease, box-shadow 260ms ease, border-color 260ms ease;
    }

    .ssm-faqs_content--qa-card:hover {
        box-shadow: var(--smm-shadow-md);
        border-color: var(--smm-border-purple);
    }

    .ssm-faqs_content--qa-card.is-open {
        grid-template-rows: auto 1fr;
        box-shadow: var(--smm-shadow-md);
        border-color: var(--smm-border-purple);
    }

    .ssm-faqs_content--qa-card h4 {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        padding: 20px 40px 0 0;
        font-size: 14px;
        font-weight: 800;
        line-height: 1.4;
        color: var(--smm-text);
        cursor: pointer;
        -webkit-user-select: none;
        user-select: none;
    }

    .ssm-faqs_content--qa-card h4::after {
        content: "";
        position: absolute;
        right: 0;
        top: 70%;
        width: 20px;
        height: 20px;
        transform: translateY(-50%);
        background:
            linear-gradient(var(--smm-primary), var(--smm-primary)) center / 12px 2px no-repeat,
            linear-gradient(var(--smm-primary), var(--smm-primary)) center / 2px 12px no-repeat;
        transition: transform 300ms ease, background-color 260ms ease;
        flex: 0 0 20px;
    }

    .ssm-faqs_content--qa-card.is-open h4::after {
        transform: translateY(-50%) rotate(45deg);
    }

    .ssm-faqs_content--qa-card:hover h4 {
        color: var(--smm-primary);
    }

    .ssm-faqs_content--qa-card p {
        overflow: hidden;
        min-height: 0;
        font-size: 13px;
        line-height: 1.7;
        color: var(--smm-text-muted);
        margin: 0 0 20px;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 980px) {
        .ssm-faqs_content {
            grid-template-columns: 1fr;
            gap: 32px;
        }

        .ssm-faqs_content--visual {
            position: static;
            max-width: 420px;
            margin-inline: auto;
        }
    }

    @media (max-width: 560px) {
        .ssm-faqs {
            padding: 56px 0;
        }

        .ssm-faqs_content--visual {
            padding: 24px 20px 18px;
        }

        .ssm-faqs_content--visual-title {
            font-size: 19px;
        }

        .ssm-faqs_content--qa-card h4 {
            font-size: 13.5px;
            padding-right: 34px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .ssm-faqs_content--qa-card,
        .ssm-faqs_content--qa-card h4::after {
            transition: none;
        }
    }
</style>

<section class="ssm-faqs">
    <div class="ssm-faqs_content">
        <div class="ssm-faqs_content--visual">
            <h2 class="ssm-faqs_content--visual-title">Frequently Asked Questions</h2>
            <img src="assets/images/ssm2.webp" alt="#">
        </div>
        <div class="ssm-faqs_content--qa-container">
            <div class="ssm-faqs_content--qa-card">
                <h4>Which social media platforms do you manage?</h4>
                <p>We manage major platforms such as Instagram, Facebook, LinkedIn, X, and YouTube, depending on your business goals and target audience.</p>
            </div>
            <div class="ssm-faqs_content--qa-card">
                <h4>Do you create the content for our social media?</h4>
                <p>Yes. We handle the complete content process, including content strategy, post ideas, captions, creative designs, videos, reels, and scheduling.</p>
            </div>
            <div class="ssm-faqs_content--qa-card">
                <h4>Do you run paid social media ad campaigns?</h4>
                <p>Yes. We plan, create, manage, and optimize paid campaigns across platforms like Meta, Instagram, LinkedIn, and other relevant channels to reach the right audience.</p>
            </div>
            <div class="ssm-faqs_content--qa-card">
                <h4>How often will you post on our social media?</h4>
                <p>Posting frequency depends on your strategy and platform. Typically, we create and publish several posts per week while maintaining a consistent content calendar.</p>
            </div>
            <div class="ssm-faqs_content--qa-card">
                <h4>How do you measure the success of campaigns?</h4>
                <p>We track metrics such as reach, engagement, follower growth, website traffic, leads, conversions, and return on ad spend. We use these insights to continuously improve campaign performance.</p>
            </div>
        </div>
    </div>
</section>

<script>
    (function () {
        "use strict";

        var section = document.querySelector(".ssm-faqs");
        if (!section) return;

        var cards = section.querySelectorAll(".ssm-faqs_content--qa-card");

        cards.forEach(function (card) {
            var trigger = card.querySelector("h4");
            if (!trigger) return;

            trigger.setAttribute("role", "button");
            trigger.setAttribute("tabindex", "0");
            trigger.setAttribute("aria-expanded", "false");

            function toggle() {
                var isOpen = card.classList.contains("is-open");

                cards.forEach(function (otherCard) {
                    otherCard.classList.remove("is-open");
                    var otherTrigger = otherCard.querySelector("h4");
                    if (otherTrigger) {
                        otherTrigger.setAttribute("aria-expanded", "false");
                    }
                });

                if (!isOpen) {
                    card.classList.add("is-open");
                    trigger.setAttribute("aria-expanded", "true");
                }
            }

            trigger.addEventListener("click", toggle);
            trigger.addEventListener("keydown", function (event) {
                if (event.key === "Enter" || event.key === " ") {
                    event.preventDefault();
                    toggle();
                }
            });
        });

        // Open the first question by default, same as the reference.
        if (cards.length) {
            cards[0].classList.add("is-open");
            var firstTrigger = cards[0].querySelector("h4");
            if (firstTrigger) {
                firstTrigger.setAttribute("aria-expanded", "true");
            }
        }
    })();
</script>