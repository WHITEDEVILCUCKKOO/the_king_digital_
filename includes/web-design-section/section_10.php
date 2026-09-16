<style>
    :root {
        --wd-blue: #3B6FF2;
        --wd-blue-dark: #2952D6;
        --wd-ink: #0F172A;
        --wd-text: #4B5568;
        --wd-muted: #8792A2;
        --wd-border: #EAEDF3;
        --wd-white: #FFFFFF;
        --wd-bg: #FFFFFF;

        --wd-blue-soft: #E9EEFF;
        --wd-green-soft: #E4F8ED;
        --wd-green: #16A34A;
        --wd-purple-soft: #F1EAFE;
        --wd-purple: #7C3AED;
        --wd-orange-soft: #FDECE1;
        --wd-orange: #EA6C21;

        --wd-whatsapp: #25D366;
        --wd-whatsapp-dark: #1DA851;
        --wd-navy: #0F1E3D;
        --wd-navy-dark: #0A1530;
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        background: var(--wd-bg);
        font-family: "Inter", system-ui, sans-serif;
    }

    .wd-faq-section {
        position: relative;
        padding: 76px 24px;
        overflow: hidden;
    }

    .wd-faq-section::before {
        content: "";
        position: absolute;
        top: -80px;
        left: 8%;
        width: 420px;
        height: 220px;
        background: radial-gradient(ellipse, rgba(15, 23, 42, 0.05) 0%, transparent 70%);
        filter: blur(20px);
        pointer-events: none;
    }

    .wd-faq-container {
        position: relative;
        max-width: 820px;
        margin: 0 auto;
    }

    .wd-faq-header {
        text-align: center;
        margin-bottom: 44px;
    }

    .wd-faq-eyebrow {
        display: block;
        font-family: "Inter", sans-serif;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--wd-blue);
        margin-bottom: 14px;
    }

    .wd-faq-header h1 {
        font-family: "Baloo 2", sans-serif;
        margin: 0;
        font-size: clamp(30px, 4vw, 42px);
        line-height: 1.18;
        font-weight: 700;
        color: var(--wd-ink);
    }

    .wd-faq-header h1 span {
        display: block;
        color: var(--wd-blue);
    }

    .wd-faq-header p {
        margin: 16px auto 0;
        max-width: 480px;
        font-size: 15px;
        line-height: 1.7;
        color: var(--wd-muted);
    }

    /* ---------------- FAQ LIST ---------------- */

    .wd-faq-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-bottom: 40px;
    }

    .wd-faq-item {
        background: var(--wd-white);
        border: 1px solid var(--wd-border);
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(15, 23, 42, 0.03);
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .wd-faq-item.active {
        border-color: rgba(59, 111, 242, 0.25);
        box-shadow: 0 10px 26px rgba(59, 111, 242, 0.08);
    }

    .wd-faq-question {
        width: 100%;
        display: flex;
        align-items: center;
        gap: 16px;
        background: none;
        border: none;
        cursor: pointer;
        text-align: left;
        padding: 18px 20px;
        font-family: "Inter", sans-serif;
        font-size: 15px;
        font-weight: 600;
        color: var(--wd-ink);
    }

    .wd-faq-question:focus-visible {
        outline: 2px solid var(--wd-blue);
        outline-offset: -2px;
    }

    .wd-faq-icon {
        flex: none;
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wd-faq-icon svg {
        width: 18px;
        height: 18px;
    }

    .wd-faq-item:nth-child(4n+1) .wd-faq-icon {
        background: var(--wd-blue-soft);
        color: var(--wd-blue);
    }

    .wd-faq-item:nth-child(4n+2) .wd-faq-icon {
        background: var(--wd-green-soft);
        color: var(--wd-green);
    }

    .wd-faq-item:nth-child(4n+3) .wd-faq-icon {
        background: var(--wd-purple-soft);
        color: var(--wd-purple);
    }

    .wd-faq-item:nth-child(4n+4) .wd-faq-icon {
        background: var(--wd-orange-soft);
        color: var(--wd-orange);
    }

    .wd-faq-question-text {
        flex: 1;
    }

    .wd-faq-chevron {
        flex: none;
        width: 18px;
        height: 18px;
        color: var(--wd-muted);
        transition: transform 0.25s ease, color 0.25s ease;
    }

    .wd-faq-item.active .wd-faq-chevron {
        transform: rotate(180deg);
        color: var(--wd-blue);
    }

    .wd-faq-answer {
        display: grid;
        grid-template-rows: 0fr;
        opacity: 0;
        transition: grid-template-rows 0.35s ease, opacity 0.3s ease;
    }

    .wd-faq-item.active .wd-faq-answer {
        grid-template-rows: 1fr;
        opacity: 1;
    }

    .wd-faq-answer-inner {
        overflow: hidden;
    }

    .wd-faq-answer p {
        margin: 0;
        padding: 0 20px 20px 74px;
        font-size: 13.5px;
        line-height: 1.75;
        color: var(--wd-text);
    }

    /* ---------------- CTA BANNER ---------------- */

    .wd-cta {
        position: relative;
        background: linear-gradient(135deg, #3B6FF2 0%, #2952D6 100%);
        border-radius: 20px;
        padding: 38px 34px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(59, 111, 242, 0.25);
    }

    .wd-cta::before {
        content: "";
        position: absolute;
        width: 230px;
        height: 230px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        top: -110px;
        right: -60px;
        pointer-events: none;
    }

    .wd-cta-text {
        position: relative;
        max-width: 400px;
    }

    .wd-cta-text h3 {
        margin: 0 0 6px;
        font-family: "Baloo 2", sans-serif;
        font-size: 21px;
        font-weight: 700;
        color: #FFFFFF;
    }

    .wd-cta-text p {
        margin: 0;
        font-size: 13px;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.85);
    }

    .wd-cta-actions {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .wd-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 18px;
        border-radius: 999px;
        font-family: "Inter", sans-serif;
        font-size: 12.5px;
        font-weight: 700;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .wd-cta-btn:hover {
        transform: translateY(-2px);
    }

    .wd-cta-btn svg {
        width: 14px;
        height: 14px;
        flex: none;
    }

    .wd-cta-btn--primary {
        background: var(--wd-ink);
        color: #FFFFFF;
        box-shadow: 0 10px 22px rgba(15, 23, 42, 0.35);
    }

    .wd-cta-btn--secondary {
        background: #FFFFFF;
        color: var(--wd-blue);
    }

    .wd-cta-btn--whatsapp {
        background: var(--wd-whatsapp);
        color: #FFFFFF;
        box-shadow: 0 10px 22px rgba(37, 211, 102, 0.35);
    }

    .wd-cta-btn--whatsapp:hover {
        background: var(--wd-whatsapp-dark);
    }

    .wd-cta-btn--meet {
        background: var(--wd-navy);
        color: #FFFFFF;
        box-shadow: 0 10px 22px rgba(15, 30, 61, 0.4);
    }

    .wd-cta-btn--meet:hover {
        background: var(--wd-navy-dark);
    }

    @media (prefers-reduced-motion: reduce) {

        .wd-faq-answer,
        .wd-faq-chevron,
        .wd-cta-btn {
            transition: none;
        }
    }

    @media (max-width: 640px) {
        .wd-faq-section {
            padding: 52px 16px;
        }

        .wd-faq-answer p {
            padding-left: 20px;
        }

        .wd-cta {
            flex-direction: column;
            align-items: flex-start;
            padding: 30px 24px;
        }

        .wd-cta-text {
            max-width: 100%;
        }

        .wd-cta-actions {
            width: 100%;
        }

        .wd-cta-btn {
            flex: 1;
            justify-content: center;
        }
    }
</style>

<section class="wd-faq-section">
    <div class="wd-faq-container">

        <div class="wd-faq-header">
            <span class="wd-faq-eyebrow">FAQ</span>
            <h1>
                Got Questions About Our
                <span>Web Design Process?</span>
            </h1>
            <p>Everything you need to know before we start building your website.</p>
        </div>

        <div class="wd-faq-list">

            <!-- 1 -->
            <div class="wd-faq-item">
                <button type="button" class="wd-faq-question" aria-expanded="false">
                    <span class="wd-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2 2 7l10 5 10-5-10-5z" />
                            <path d="M2 17l10 5 10-5" />
                            <path d="M2 12l10 5 10-5" />
                        </svg>
                    </span>
                    <span class="wd-faq-question-text">What does your web design process look like?</span>
                    <svg class="wd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="wd-faq-answer">
                    <div class="wd-faq-answer-inner">
                        <p>We start with discovery to understand your business and goals, move into wireframes and design, then build, test and launch — with your feedback built into every stage rather than saved for the end.</p>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="wd-faq-item">
                <button type="button" class="wd-faq-question" aria-expanded="false">
                    <span class="wd-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                    </span>
                    <span class="wd-faq-question-text">How long does it take to design and build a website?</span>
                    <svg class="wd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="wd-faq-answer">
                    <div class="wd-faq-answer-inner">
                        <p>Most business websites take 2 to 4 weeks from kickoff to launch. Larger sites, custom features or online stores usually take longer, and we'll give you a clear timeline before work begins.</p>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="wd-faq-item">
                <button type="button" class="wd-faq-question" aria-expanded="false">
                    <span class="wd-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="2" />
                            <line x1="12" y1="18" x2="12.01" y2="18" />
                        </svg>
                    </span>
                    <span class="wd-faq-question-text">Will my website work well on mobile devices?</span>
                    <svg class="wd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="wd-faq-answer">
                    <div class="wd-faq-answer-inner">
                        <p>Yes. Every website we build is fully responsive and tested across phones, tablets and desktops, so it looks and performs well no matter what device your visitors use.</p>
                    </div>
                </div>
            </div>

            <!-- 4 -->
            <div class="wd-faq-item">
                <button type="button" class="wd-faq-question" aria-expanded="false">
                    <span class="wd-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z" />
                        </svg>
                    </span>
                    <span class="wd-faq-question-text">How many rounds of revisions are included?</span>
                    <svg class="wd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="wd-faq-answer">
                    <div class="wd-faq-answer-inner">
                        <p>Every package includes structured revision rounds at the design and pre-launch stages, so you can request changes before anything goes live. Extra rounds beyond that can be added if needed.</p>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="wd-faq-item">
                <button type="button" class="wd-faq-question" aria-expanded="false">
                    <span class="wd-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1" />
                            <circle cx="20" cy="21" r="1" />
                            <path d="M1 1h4l2.7 13.4a2 2 0 0 0 2 1.6h9.7a2 2 0 0 0 2-1.6L23 6H6" />
                        </svg>
                    </span>
                    <span class="wd-faq-question-text">Can you build an e-commerce or online store website?</span>
                    <svg class="wd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="wd-faq-answer">
                    <div class="wd-faq-answer-inner">
                        <p>Yes. We build online stores with product catalogs, cart and checkout, payment gateway integration, and order management, tailored to how you plan to sell and fulfill orders.</p>
                    </div>
                </div>
            </div>

            <!-- 6 -->
            <div class="wd-faq-item">
                <button type="button" class="wd-faq-question" aria-expanded="false">
                    <span class="wd-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </span>
                    <span class="wd-faq-question-text">Will the website be SEO-friendly and fast to load?</span>
                    <svg class="wd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="wd-faq-answer">
                    <div class="wd-faq-answer-inner">
                        <p>Yes. We follow clean, semantic code, optimize images and page speed, and set up on-page SEO basics from day one, so your site is ready to rank and loads fast for visitors.</p>
                    </div>
                </div>
            </div>

            <!-- 7 -->
            <div class="wd-faq-item">
                <button type="button" class="wd-faq-question" aria-expanded="false">
                    <span class="wd-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3H14z" />
                        </svg>
                    </span>
                    <span class="wd-faq-question-text">Do you provide support after the website is launched?</span>
                    <svg class="wd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9" />
                    </svg>
                </button>
                <div class="wd-faq-answer">
                    <div class="wd-faq-answer-inner">
                        <p>Yes. Every project includes a post-launch support window, and we offer ongoing maintenance plans after that for updates, fixes and any new features you want to add.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA BANNER -->
        <div class="wd-cta">
            <div class="wd-cta-text">
                <h3>Still have questions?</h3>
                <p>Tell us about your project and our web design team will help you plan the right approach — no pressure, no obligation.</p>
            </div>

            <div class="wd-cta-actions">
                <button type="button" class="wd-cta-btn wd-cta-btn--primary">✉ Send Us a Message</button>
                <button type="button" class="wd-cta-btn wd-cta-btn--secondary">📞 Call Now</button>
                <a href="#" class="wd-cta-btn wd-cta-btn--whatsapp">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.29-1.39a9.9 9.9 0 0 0 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.13-2.9-7C17.19 3.03 14.7 2 12.04 2zm0 18.06h-.01a8.2 8.2 0 0 1-4.18-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.15 8.15 0 0 1-1.25-4.34c0-4.53 3.69-8.22 8.24-8.22 2.2 0 4.27.86 5.82 2.42a8.17 8.17 0 0 1 2.41 5.81c0 4.54-3.7 8.21-8.23 8.21zm4.52-6.16c-.25-.12-1.46-.72-1.68-.8-.23-.08-.39-.12-.56.13-.16.24-.64.8-.78.96-.15.16-.29.18-.54.06-.25-.12-1.04-.38-1.98-1.22-.73-.65-1.23-1.46-1.37-1.7-.15-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.24-.4.08-.16.04-.3-.02-.42-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.15 0-.31-.02-.48-.02-.16 0-.43.06-.66.3-.23.25-.86.84-.86 2.04 0 1.2.88 2.36 1 2.52.12.16 1.73 2.64 4.2 3.7.59.25 1.05.4 1.41.52.59.19 1.13.16 1.55.1.47-.07 1.46-.6 1.67-1.18.2-.58.2-1.08.14-1.18-.06-.1-.22-.16-.47-.28z" />
                    </svg>
                    WhatsApp
                </a>
                <a href="#" class="wd-cta-btn wd-cta-btn--meet">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17 10.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4z" />
                    </svg>
                    Meet Online
                </a>
            </div>
        </div>

    </div>
</section>

<script>
    (function() {
        document.querySelectorAll(".wd-faq-item").forEach(function(item) {
            var btn = item.querySelector(".wd-faq-question");
            btn.addEventListener("click", function() {
                var isOpen = item.classList.contains("active");
                item.classList.toggle("active", !isOpen);
                btn.setAttribute("aria-expanded", String(!isOpen));
            });
        });
    })();
</script>