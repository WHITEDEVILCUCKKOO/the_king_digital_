<style>
    :root {
        --kd-navy: #1B2A5B;
        --kd-navy-dark: #142048;
        --kd-orange: #F2701D;
        --kd-orange-dark: #DB5F12;
        --kd-whatsapp: #25D366;
        --kd-whatsapp-dark: #1DA851;
        --kd-meet: #48567A;
        --kd-meet-dark: #3B4766;

        --kd-bg: #F4F6FB;
        --kd-heading: #14213D;
        --kd-text-muted: #6B7280;
        --kd-border: #E7E9F0;
        --kd-white: #FFFFFF;
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        background: var(--kd-bg);
        font-family: "Inter", system-ui, sans-serif;
    }

    .kd-faq-section {
        padding: 64px 24px;
    }

    .kd-faq-container {
        max-width: 1160px;
        margin: 0 auto;
    }

    .kd-faq-header {
        margin-bottom: 30px;
    }

    .kd-faq-header h1 {
        margin: 0 0 10px;
        font-size: clamp(28px, 3.4vw, 36px);
        font-weight: 800;
        color: var(--kd-heading);
        letter-spacing: -0.02em;
    }

    .kd-faq-header p {
        margin: 0;
        font-size: 15px;
        color: var(--kd-text-muted);
    }

    .kd-faq-layout {
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 24px;
        align-items: start;
    }

    /* ---------------- FAQ LIST ---------------- */

    .kd-faq-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .kd-faq-item {
        background: var(--kd-white);
        border: 1px solid var(--kd-border);
        border-radius: 10px;
        overflow: hidden;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .kd-faq-item.active {
        border-color: rgba(27, 42, 91, 0.18);
        box-shadow: 0 6px 18px rgba(20, 33, 61, 0.05);
    }

    .kd-faq-question {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        background: none;
        border: none;
        cursor: pointer;
        text-align: left;
        padding: 17px 20px;
        font-family: inherit;
        font-size: 14.5px;
        font-weight: 600;
        color: var(--kd-heading);
    }

    .kd-faq-question:focus-visible {
        outline: 2px solid var(--kd-orange);
        outline-offset: -2px;
    }

    .kd-faq-chevron {
        flex: none;
        width: 18px;
        height: 18px;
        color: var(--kd-text-muted);
        transition: transform 0.25s ease, color 0.25s ease;
    }

    .kd-faq-item.active .kd-faq-chevron {
        transform: rotate(180deg);
        color: var(--kd-orange);
    }

    .kd-faq-answer {
        display: grid;
        grid-template-rows: 0fr;
        opacity: 0;
        transition: grid-template-rows 0.35s ease, opacity 0.3s ease;
    }

    .kd-faq-item.active .kd-faq-answer {
        grid-template-rows: 1fr;
        opacity: 1;
    }

    .kd-faq-answer-inner {
        overflow: hidden;
    }

    .kd-faq-answer p {
        margin: 0;
        padding: 0 20px 18px;
        font-size: 13.5px;
        line-height: 1.7;
        color: var(--kd-text-muted);
    }

    /* ---------------- CTA PANEL ---------------- */

    .kd-cta {
        position: sticky;
        top: 24px;
        background: var(--kd-navy);
        border-radius: 20px;
        padding: 46px 40px;
        text-align: center;
        color: var(--kd-white);
        overflow: hidden;
        position: relative;
    }

    .kd-cta::before {
        content: "";
        position: absolute;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.04);
        top: -130px;
        right: -80px;
        pointer-events: none;
    }

    .kd-cta>* {
        position: relative;
    }

    .kd-cta h2 {
        margin: 0 0 12px;
        font-size: 27px;
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .kd-cta p {
        margin: 0 auto 26px;
        max-width: 380px;
        font-size: 13.5px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.72);
    }

    .kd-cta-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        width: 100%;
        max-width: 340px;
        margin: 0 auto;
        border: none;
        border-radius: 10px;
        padding: 14px 20px;
        font-family: inherit;
        font-size: 14.5px;
        font-weight: 700;
        cursor: pointer;
        text-decoration: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .kd-cta-btn:hover {
        transform: translateY(-2px);
    }

    .kd-cta-btn svg {
        width: 15px;
        height: 15px;
        flex: none;
    }

    .kd-cta-btn--primary {
        background: var(--kd-orange);
        color: #FFFFFF;
        box-shadow: 0 10px 24px rgba(242, 112, 29, 0.35);
    }

    .kd-cta-btn--primary:hover {
        background: var(--kd-orange-dark);
    }

    .kd-cta-divider {
        display: flex;
        align-items: center;
        gap: 12px;
        max-width: 340px;
        margin: 16px auto;
        color: rgba(255, 255, 255, 0.4);
        font-size: 12px;
    }

    .kd-cta-divider::before,
    .kd-cta-divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background: rgba(255, 255, 255, 0.18);
    }

    .kd-cta-btn--secondary {
        background: #FFFFFF;
        color: var(--kd-navy);
    }

    .kd-cta-foot {
        margin-top: 26px;
        padding-top: 22px;
        border-top: 1px solid rgba(255, 255, 255, 0.14);
    }

    .kd-cta-foot span {
        display: block;
        margin-bottom: 14px;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.5);
    }

    .kd-cta-links {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .kd-cta-link {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 10px 18px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        color: #FFFFFF;
        border: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .kd-cta-link:hover {
        transform: translateY(-2px);
    }

    .kd-cta-link svg {
        width: 14px;
        height: 14px;
        flex: none;
    }

    .kd-cta-link--whatsapp {
        background: var(--kd-whatsapp);
        box-shadow: 0 8px 18px rgba(37, 211, 102, 0.35);
    }

    .kd-cta-link--whatsapp:hover {
        background: var(--kd-whatsapp-dark);
    }

    .kd-cta-link--meet {
        background: var(--kd-meet);
        box-shadow: 0 8px 18px rgba(72, 86, 122, 0.35);
    }

    .kd-cta-link--meet:hover {
        background: var(--kd-meet-dark);
    }

    @media (prefers-reduced-motion: reduce) {

        .kd-faq-answer,
        .kd-faq-chevron,
        .kd-cta-btn,
        .kd-cta-link {
            transition: none;
        }
    }

    @media (max-width: 900px) {
        .kd-faq-layout {
            grid-template-columns: 1fr;
        }

        .kd-cta {
            position: static;
        }
    }

    @media (max-width: 480px) {
        .kd-faq-section {
            padding: 44px 16px;
        }

        .kd-cta {
            padding: 36px 24px;
        }

        .kd-cta-links {
            flex-direction: column;
        }
    }
</style>

<section class="kd-faq-section">
    <div class="kd-faq-container">

        <div class="kd-faq-header">
            <h1>Frequently asked questions</h1>
            <p>Everything you need to know before getting started with the King Digital Aggregator Platform.</p>
        </div>

        <div class="kd-faq-layout">

            <!-- FAQ LIST -->
            <div class="kd-faq-list">

                <div class="kd-faq-item">
                    <button type="button" class="kd-faq-question" aria-expanded="false">
                        What is the King Digital Aggregator Platform?
                        <svg class="kd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="kd-faq-answer">
                        <div class="kd-faq-answer-inner">
                            <p>It's a single platform that brings SMS, WhatsApp, RCS, Voice and Email into one dashboard and one set of APIs, so you can send and manage every customer communication channel from the same place instead of juggling separate vendor logins.</p>
                        </div>
                    </div>
                </div>

                <div class="kd-faq-item">
                    <button type="button" class="kd-faq-question" aria-expanded="false">
                        Which channels can I access through the platform?
                        <svg class="kd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="kd-faq-answer">
                        <div class="kd-faq-answer-inner">
                            <p>Bulk SMS (promotional and transactional), WhatsApp Business API, RCS messaging, voice calling and AI voice agents, and email — all routed and reported through the same account.</p>
                        </div>
                    </div>
                </div>

                <div class="kd-faq-item">
                    <button type="button" class="kd-faq-question" aria-expanded="false">
                        Can I white-label the platform for my own clients?
                        <svg class="kd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="kd-faq-answer">
                        <div class="kd-faq-answer-inner">
                            <p>Yes. Agencies and resellers can run the platform under their own brand, with their own logo, domain and pricing, while King Digital handles the underlying infrastructure and operator connections.</p>
                        </div>
                    </div>
                </div>

                <div class="kd-faq-item">
                    <button type="button" class="kd-faq-question" aria-expanded="false">
                        Does the platform support multiple routes for better delivery?
                        <svg class="kd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="kd-faq-answer">
                        <div class="kd-faq-answer-inner">
                            <p>Yes. The platform connects to multiple telecom operators and channel partners and can automatically route messages through the best-performing path, so delivery stays reliable even if one route is congested.</p>
                        </div>
                    </div>
                </div>

                <div class="kd-faq-item">
                    <button type="button" class="kd-faq-question" aria-expanded="false">
                        Is there a single API for all channels?
                        <svg class="kd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="kd-faq-answer">
                        <div class="kd-faq-answer-inner">
                            <p>Yes. A unified REST API lets you send SMS, WhatsApp, RCS or trigger voice calls with the same integration pattern, so your developers don't need to build and maintain separate integrations for each channel.</p>
                        </div>
                    </div>
                </div>

                <div class="kd-faq-item">
                    <button type="button" class="kd-faq-question" aria-expanded="false">
                        What kind of reporting and analytics do I get?
                        <svg class="kd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="kd-faq-answer">
                        <div class="kd-faq-answer-inner">
                            <p>You get real-time delivery reports, channel-wise usage and cost breakdowns, campaign performance, and exportable logs across every channel from one unified dashboard.</p>
                        </div>
                    </div>
                </div>

                <div class="kd-faq-item">
                    <button type="button" class="kd-faq-question" aria-expanded="false">
                        How do I get started and onboard onto the platform?
                        <svg class="kd-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </button>
                    <div class="kd-faq-answer">
                        <div class="kd-faq-answer-inner">
                            <p>Share which channels you need and your expected volume, and our team will set up your account, complete any DLT or WhatsApp approvals required, and hand you API keys and dashboard access to go live.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA PANEL -->
            <div class="kd-cta">
                <h2>Still have questions?</h2>
                <p>Our team is here to help. Get a free 30-minute walkthrough of the platform with our integration expert — no pressure, no obligation.</p>

                <button type="button" class="kd-cta-btn kd-cta-btn--primary">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M2 21l21-9L2 3v7l15 2-15 2z" />
                    </svg>
                    Send Us a Message
                </button>

                <div class="kd-cta-divider">— or —</div>

                <button type="button" class="kd-cta-btn kd-cta-btn--secondary">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.5 21 3 13.5 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.4 0 .8-.2 1L6.6 10.8z" />
                    </svg>
                    Call Now
                </button>

                <div class="kd-cta-foot">
                    <span>Also Reach Us On</span>
                    <div class="kd-cta-links">
                        <a href="#" class="kd-cta-link kd-cta-link--whatsapp">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.29-1.39a9.9 9.9 0 0 0 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.13-2.9-7C17.19 3.03 14.7 2 12.04 2zm0 18.06h-.01a8.2 8.2 0 0 1-4.18-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.15 8.15 0 0 1-1.25-4.34c0-4.53 3.69-8.22 8.24-8.22 2.2 0 4.27.86 5.82 2.42a8.17 8.17 0 0 1 2.41 5.81c0 4.54-3.7 8.21-8.23 8.21zm4.52-6.16c-.25-.12-1.46-.72-1.68-.8-.23-.08-.39-.12-.56.13-.16.24-.64.8-.78.96-.15.16-.29.18-.54.06-.25-.12-1.04-.38-1.98-1.22-.73-.65-1.23-1.46-1.37-1.7-.15-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.24-.4.08-.16.04-.3-.02-.42-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.15 0-.31-.02-.48-.02-.16 0-.43.06-.66.3-.23.25-.86.84-.86 2.04 0 1.2.88 2.36 1 2.52.12.16 1.73 2.64 4.2 3.7.59.25 1.05.4 1.41.52.59.19 1.13.16 1.55.1.47-.07 1.46-.6 1.67-1.18.2-.58.2-1.08.14-1.18-.06-.1-.22-.16-.47-.28z" />
                            </svg>
                            WhatsApp
                        </a>
                        <a href="#" class="kd-cta-link kd-cta-link--meet">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17 10.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4z" />
                            </svg>
                            Meet Online
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    (function() {
        document.querySelectorAll(".kd-faq-item").forEach(function(item) {
            var btn = item.querySelector(".kd-faq-question");
            btn.addEventListener("click", function() {
                var isOpen = item.classList.contains("active");
                item.classList.toggle("active", !isOpen);
                btn.setAttribute("aria-expanded", String(!isOpen));
            });
        });
    })();
</script>