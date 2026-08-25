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

    .seo-faqs {
        position: relative;
        background: var(--seo-bg);
        padding: 80px 24px;
        overflow: hidden;
    }

    /* Soft ambient glow, subtle, in the corner — echoes the gradient without competing with content */
    .seo-faqs::before {
        content: "";
        position: absolute;
        top: -220px;
        right: -160px;
        width: 480px;
        height: 480px;
        border-radius: 50%;
        background: var(--seo-gradient);
        opacity: 0.10;
        filter: blur(90px);
        pointer-events: none;
    }

    .seo-faqs_content {
        position: relative;
        width: 100%;
        max-width: 760px;
        margin: 0 auto;
    }

    .seo-faqs_content--heading {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        margin-bottom: 44px;
        text-align: center;
    }

    .seo-faqs_content--heading .seo-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: var(--seo-primary-dark);
        background: var(--seo-bg-soft);
        border: 1px solid var(--seo-border);
        padding: 6px 16px;
        border-radius: 999px;
    }

    .seo-faqs_content--heading h1 {
        font-size: 36px;
        font-weight: 800;
        line-height: 1.15;
        margin: 0;
        color: var(--seo-heading);
        letter-spacing: -0.01em;
    }

    .seo-faqs_content--heading p {
        font-size: 16px;
        color: var(--seo-muted);
        margin: 0;
        max-width: 480px;
    }

    .seo-faq-container {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .seo-faq-qa {
        background: var(--seo-white);
        border: 1px solid var(--seo-border);
        border-radius: var(--seo-radius-lg);
        box-shadow: var(--seo-shadow);
        overflow: hidden;
        transition: box-shadow var(--seo-transition), border-color var(--seo-transition);
    }

    .seo-faq-qa:hover {
        box-shadow: var(--seo-shadow-hover);
    }

    .seo-faq-qa.is-open {
        border-color: var(--seo-primary-light);
    }

    .seo-question {
        margin: 0;
        font-size: 16px;
    }

    .seo-question-btn {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        text-align: left;
        background: none;
        border: none;
        cursor: pointer;
        padding: 20px 24px;
        font: inherit;
        font-weight: 700;
        font-size: 16px;
        color: var(--seo-heading);
        -webkit-tap-highlight-color: transparent;
    }

    .seo-question-btn:focus-visible {
        outline: 2px solid var(--seo-primary);
        outline-offset: -2px;
        border-radius: var(--seo-radius-sm);
    }

    .seo-question-icon {
        flex: none;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: var(--seo-gradient-soft);
        border: 1px solid var(--seo-border);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        transition: background var(--seo-transition), border-color var(--seo-transition), transform var(--seo-transition);
    }

    .seo-question-icon::before,
    .seo-question-icon::after {
        content: "";
        position: absolute;
        background: var(--seo-primary-dark);
        border-radius: 2px;
        transition: transform var(--seo-transition), opacity var(--seo-transition);
    }

    .seo-question-icon::before {
        width: 12px;
        height: 2px;
    }

    .seo-question-icon::after {
        width: 2px;
        height: 12px;
    }

    .seo-faq-qa.is-open .seo-question-icon {
        background: var(--seo-gradient);
        border-color: var(--seo-primary-dark);
    }

    .seo-faq-qa.is-open .seo-question-icon::before,
    .seo-faq-qa.is-open .seo-question-icon::after {
        background: var(--seo-white);
    }

    .seo-faq-qa.is-open .seo-question-icon::after {
        transform: rotate(90deg);
        opacity: 0;
    }

    .seo-answer-wrap {
        display: grid;
        grid-template-rows: 0fr;
        transition: grid-template-rows 0.35s ease;
    }

    .seo-faq-qa.is-open .seo-answer-wrap {
        grid-template-rows: 1fr;
    }

    .seo-answer-inner {
        overflow: hidden;
    }

    .seo-answer {
        margin: 0;
        padding: 0 24px 22px 24px;
        font-size: 15px;
        line-height: 1.65;
        color: var(--seo-text);
    }

    @media (prefers-reduced-motion: reduce) {
        .seo-answer-wrap {
            transition: none;
        }

        .seo-question-icon,
        .seo-question-icon::before,
        .seo-question-icon::after {
            transition: none;
        }
    }

    @media (max-width: 640px) {
        .seo-faqs {
            padding: 56px 18px;
        }

        .seo-faqs_content--heading h1 {
            font-size: 28px;
        }

        .seo-question-btn {
            padding: 16px 18px;
            font-size: 15px;
            gap: 14px;
        }

        .seo-answer {
            padding: 0 18px 18px 18px;
            font-size: 14px;
        }
    }
</style>

<section class="seo-faqs">
    <div class="seo-faqs_content">
        <div class="seo-faqs_content--heading">
            <span class="seo-eyebrow">FAQ</span>
            <h1>People Also Ask</h1>
            <p>Straight answers to the questions we hear most from clients considering SEO.</p>
        </div>

        <div class="seo-faq-container">
            <div class="seo-faq-qa is-open">
                <h3 class="seo-question">
                    <button type="button" class="seo-question-btn" aria-expanded="true" aria-controls="seo-answer-1" id="seo-question-1">
                        How long does SEO take to show results?
                        <span class="seo-question-icon" aria-hidden="true"></span>
                    </button>
                </h3>
                <div class="seo-answer-wrap" id="seo-answer-1" role="region" aria-labelledby="seo-question-1">
                    <div class="seo-answer-inner">
                        <p class="seo-answer">3 to 6 months for early signals (impressions, low-competition keywords) and 6 to 12 months for meaningful traffic and revenue growth. Google officials cite a 4 to 12 month window for significant impact.</p>
                    </div>
                </div>
            </div>

            <div class="seo-faq-qa">
                <h3 class="seo-question">
                    <button type="button" class="seo-question-btn" aria-expanded="false" aria-controls="seo-answer-2" id="seo-question-2">
                        What is included in your SEO service?
                        <span class="seo-question-icon" aria-hidden="true"></span>
                    </button>
                </h3>
                <div class="seo-answer-wrap" id="seo-answer-2" role="region" aria-labelledby="seo-question-2">
                    <div class="seo-answer-inner">
                        <p class="seo-answer">King Digital SEO service typically includes four core pillars: Technical SEO, On-Page Optimization, Content Strategy, and Off-Page Authority Building.</p>
                    </div>
                </div>
            </div>

            <div class="seo-faq-qa">
                <h3 class="seo-question">
                    <button type="button" class="seo-question-btn" aria-expanded="false" aria-controls="seo-answer-3" id="seo-question-3">
                        Do you guarantee first-page rankings?
                        <span class="seo-question-icon" aria-hidden="true"></span>
                    </button>
                </h3>
                <div class="seo-answer-wrap" id="seo-answer-3" role="region" aria-labelledby="seo-question-3">
                    <div class="seo-answer-inner">
                        <p class="seo-answer">No legitimate SEO agency or expert can guarantee first-page rankings. Any provider promising specific positions (e.g., "#1 on Google" or "First Page in 30 Days") is either misleading you or using high-risk tactics that could penalize your site.</p>
                    </div>
                </div>
            </div>

            <div class="seo-faq-qa">
                <h3 class="seo-question">
                    <button type="button" class="seo-question-btn" aria-expanded="false" aria-controls="seo-answer-4" id="seo-question-4">
                        Do you provide monthly SEO reports?
                        <span class="seo-question-icon" aria-hidden="true"></span>
                    </button>
                </h3>
                <div class="seo-answer-wrap" id="seo-answer-4" role="region" aria-labelledby="seo-question-4">
                    <div class="seo-answer-inner">
                        <p class="seo-answer">Yes, comprehensive monthly SEO reports are standard.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        var items = document.querySelectorAll('.seo-faq-qa');

        items.forEach(function(item) {
            var btn = item.querySelector('.seo-question-btn');

            btn.addEventListener('click', function() {
                var isOpen = item.classList.contains('is-open');

                items.forEach(function(other) {
                    other.classList.remove('is-open');
                    other.querySelector('.seo-question-btn').setAttribute('aria-expanded', 'false');
                });

                if (!isOpen) {
                    item.classList.add('is-open');
                    btn.setAttribute('aria-expanded', 'true');
                }
            });
        });
    })();
</script>