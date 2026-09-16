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
        --seo-gradient: linear-gradient(135deg, #F97316 0%, #F59E0B 100%);
        --seo-gradient-soft: linear-gradient(135deg, #FFF7ED 0%, #FFEDD5 100%);

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
        padding: 40px 24px;
        overflow: hidden;
    }

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
        max-width: 1180px;
        margin: 0 auto;
    }

    .seo-faqs_content--heading {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 44px;
        text-align: left;
        max-width: 640px;
    }

    .seo-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.02em;
        color: var(--seo-primary-dark);
        background: var(--seo-bg-soft);
        border: 1px solid var(--seo-border);
        padding: 6px 16px;
        border-radius: 999px;
    }

    .seo-eyebrow::before {
        content: "";
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--seo-primary);
        display: inline-block;
    }

    .seo-faqs_content--heading h1 {
        font-size: 44px;
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
        line-height: 1.6;
    }

    .seo-layout {
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 28px;
        align-items: start;
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

    /* ============ CTA PANEL ============ */
    .seo-cta {
        position: sticky;
        top: 24px;
        background: var(--seo-gradient);
        border-radius: var(--seo-radius-xl);
        padding: 44px 36px;
        box-shadow: var(--seo-shadow-hover);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 14px;
        color: var(--seo-white);
        overflow: hidden;
        position: relative;
    }

    .seo-cta::after {
        content: "";
        position: absolute;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.12);
        top: -120px;
        left: -80px;
        pointer-events: none;
    }

    .seo-cta>* {
        position: relative;
    }

    .seo-cta h2 {
        font-size: 26px;
        font-weight: 800;
        margin: 0;
        letter-spacing: -0.01em;
    }

    .seo-cta p {
        margin: 0;
        font-size: 14.5px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.9);
        max-width: 340px;
    }

    .seo-cta-btn {
        width: 100%;
        max-width: 300px;
        border: none;
        border-radius: var(--seo-radius-md);
        padding: 14px 20px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: transform var(--seo-transition), box-shadow var(--seo-transition);
        margin-top: 10px;
        text-decoration: none;
    }

    .seo-cta-btn:hover {
        transform: translateY(-2px);
    }

    .seo-cta-btn--primary {
        background: var(--seo-heading);
        color: var(--seo-white);
        box-shadow: 0 10px 24px rgba(31, 41, 55, 0.28);
    }

    .seo-cta-btn--secondary {
        background: var(--seo-white);
        color: var(--seo-primary-dark);
        margin-top: 4px;
    }

    .seo-cta-divider {
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100%;
        max-width: 300px;
        color: rgba(255, 255, 255, 0.75);
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.04em;
        margin-top: 6px;
    }

    .seo-cta-divider::before,
    .seo-cta-divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background: rgba(255, 255, 255, 0.35);
    }

    .seo-cta-foot {
        margin-top: 18px;
        padding-top: 18px;
        border-top: 1px solid rgba(255, 255, 255, 0.25);
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    .seo-cta-foot span {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.04em;
        color: rgba(255, 255, 255, 0.75);
    }

    .seo-cta-links {
        display: flex;
        gap: 10px;
    }

    .seo-cta-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 9px 16px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        color: var(--seo-white);
        background: rgba(28, 59, 231, 0.84);
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: background var(--seo-transition);
    }

    .seo-cta-link:hover {
        background: rgba(255, 255, 255, 0.26);
    }

    .seo-cta-link-whatsapp {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;

        padding: 12px 22px;

        background: #25D366;
        color: #ffffff;

        font-size: 15px;
        font-weight: 600;
        text-decoration: none;

        border-radius: 8px;

        transition: all 0.25s ease;

        box-shadow: 0 5px 15px rgba(37, 211, 102, 0.25);
    }

    .seo-cta-link-whatsapp:hover {
        background: #20bd5a;
        color: #ffffff;

        transform: translateY(-2px);

        box-shadow: 0 8px 20px rgba(37, 211, 102, 0.35);
    }

    .seo-cta-link-whatsapp:active {
        transform: translateY(0);
    }

    @media (prefers-reduced-motion: reduce) {

        .seo-answer-wrap,
        .seo-question-icon,
        .seo-question-icon::before,
        .seo-question-icon::after,
        .seo-cta-btn {
            transition: none;
        }
    }

    @media (max-width: 860px) {
        .seo-layout {
            grid-template-columns: 1fr;
        }

        .seo-cta {
            position: static;
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

        .seo-cta {
            padding: 36px 24px;
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

        <div class="seo-layout">
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

            <div class="seo-cta">
                <h2>Still have questions?</h2>
                <p>Our team is here to help. Get a free 30-minute consultation with our SEO expert — no pressure, no obligation.</p>

                <a href="contact.php" class="seo-cta-btn seo-cta-btn--primary">✉ Send Us a Message</a>

                <div class="seo-cta-divider">OR</div>

                <button type="button" class="seo-cta-btn seo-cta-btn--secondary">📞 Call Now</button>

                <div class="seo-cta-foot">
                    <span>ALSO REACH US ON</span>
                    <div class="seo-cta-links">
                        <a href="https://wa.me/919211339966?text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services."
                            class="seo-cta-link-whatsapp"
                            target="_blank"
                            rel="noopener noreferrer">
                            WhatsApp
                        </a>
                        <a href="+91-9211339966" class="seo-cta-link">Meet Online</a>
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