<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
    }

    .faq-section {
        --faq-orange: #FF6B1A;
        --faq-ink: #14213D;
        --faq-muted: #6B7686;
        --faq-border: #ECEEF2;
        --faq-red-soft: #FDECEC;
        --faq-blue-soft: #EAF2FE;
        --faq-purple-soft: #F3EEFF;
        --faq-green-soft: #E9F8EF;
        --faq-orange-soft: #FFF0E8;

        --faq-whatsapp: #25D366;
        --faq-whatsapp-dark: #1DA851;
        --faq-navy: #0F1E3D;
        --faq-navy-dark: #0A1530;

        position: relative;
        background: var(--faq-orange-soft);
        padding: 64px 0;
        overflow: hidden;
    }

    .faq-section::before {
        content: "";
        position: absolute;
        width: 260px;
        height: 260px;
        top: -130px;
        left: -100px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.45);
        filter: blur(8px);
        pointer-events: none;
    }

    .faq-section::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        right: 80px;
        bottom: 40px;
        border-radius: 50%;
        background: rgba(255, 120, 50, 0.045);
        filter: blur(12px);
        pointer-events: none;
    }

    .faq-container {
        position: relative;
        z-index: 2;
        max-width: 960px;
        margin-inline: auto;
        padding-inline: 24px;
    }

    /* ---------- Header ---------- */

    .faq-header {
        text-align: center;
        margin-bottom: 32px;
    }

    .faq-eyebrow {
        display: block;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--faq-orange);
        margin-bottom: 8px;
    }

    .faq-title {
        font-size: clamp(22px, 3vw, 28px);
        font-weight: 800;
        color: var(--faq-ink);
        margin: 0;
    }

    /* ---------- Columns ---------- */

    .faq-columns {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px 16px;
    }

    .faq-column {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    /* ---------- Item ---------- */

    .faq-item {
        background: #FFFFFF;
        border: 1px solid var(--faq-border);
        border-radius: 10px;
        transition: border-color 220ms ease;
    }

    .faq-item.is-open {
        border-color: rgba(255, 107, 26, 0.25);
    }

    .faq-question {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        background: none;
        border: none;
        text-align: left;
        cursor: pointer;
        padding: 14px 18px;
        font: inherit;
        font-size: 13px;
        font-weight: 600;
        color: var(--faq-ink);
    }

    .faq-question:focus-visible {
        outline: 2px solid var(--faq-orange);
        outline-offset: -2px;
        border-radius: 8px;
    }

    .faq-toggle {
        flex: none;
        position: relative;
        width: 16px;
        height: 16px;
    }

    .faq-toggle::before,
    .faq-toggle::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        background: var(--faq-orange);
        transition: transform 260ms ease, opacity 260ms ease;
    }

    .faq-toggle::before {
        width: 12px;
        height: 2px;
        transform: translate(-50%, -50%);
    }

    .faq-toggle::after {
        width: 2px;
        height: 12px;
        transform: translate(-50%, -50%);
    }

    .faq-item.is-open .faq-toggle::after {
        transform: translate(-50%, -50%) rotate(90deg);
        opacity: 0;
    }

    /* ---------- Answer ---------- */

    .faq-answer-wrap {
        display: grid;
        grid-template-rows: 0fr;
        transition: grid-template-rows 320ms ease;
    }

    .faq-item.is-open .faq-answer-wrap {
        grid-template-rows: 1fr;
    }

    .faq-answer-inner {
        overflow: hidden;
    }

    .faq-answer {
        margin: 0;
        padding: 0 18px 16px;
        font-size: 12px;
        line-height: 1.65;
        color: var(--faq-muted);
    }

    /* =========================================================
    CONTACT CTA BANNER — combined with studio theme
    ========================================================= */

    .faq-cta {
        position: relative;
        margin-top: 32px;
        background: linear-gradient(135deg, #FF6B1A 0%, #FF8A47 100%);
        border-radius: 18px;
        padding: 34px 32px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        flex-wrap: wrap;
        overflow: hidden;
        box-shadow: 0 18px 40px rgba(255, 107, 26, 0.22);
    }

    .faq-cta::before {
        content: "";
        position: absolute;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.12);
        top: -110px;
        right: -60px;
        pointer-events: none;
    }

    .faq-cta-text {
        position: relative;
        max-width: 400px;
    }

    .faq-cta-text h3 {
        margin: 0 0 6px;
        font-size: 19px;
        font-weight: 800;
        color: #FFFFFF;
    }

    .faq-cta-text p {
        margin: 0;
        font-size: 12.5px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.9);
    }

    .faq-cta-actions {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .faq-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 18px;
        border-radius: 999px;
        font-size: 12.5px;
        font-weight: 700;
        text-decoration: none;
        border: none;
        cursor: pointer;
        font-family: inherit;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .faq-cta-btn:hover {
        transform: translateY(-2px);
    }

    .faq-cta-btn svg {
        width: 14px;
        height: 14px;
        flex: none;
    }

    .faq-cta-btn--primary {
        background: var(--faq-ink);
        color: #FFFFFF;
        box-shadow: 0 10px 22px rgba(20, 33, 61, 0.3);
    }

    .faq-cta-btn--secondary {
        background: #FFFFFF;
        color: var(--faq-orange);
    }

    .faq-cta-btn--whatsapp {
        background: var(--faq-whatsapp);
        color: #FFFFFF;
        box-shadow: 0 10px 22px rgba(37, 211, 102, 0.35);
    }

    .faq-cta-btn--whatsapp:hover {
        background: var(--faq-whatsapp-dark);
    }

    .faq-cta-btn--meet {
        background: var(--faq-navy);
        color: #FFFFFF;
        box-shadow: 0 10px 22px rgba(15, 30, 61, 0.4);
    }

    .faq-cta-btn--meet:hover {
        background: var(--faq-navy-dark);
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-answer-wrap {
            transition: none;
        }

        .faq-toggle::before,
        .faq-toggle::after {
            transition: none;
        }

        .faq-cta-btn {
            transition: none;
        }
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 720px) {
        .faq-columns {
            grid-template-columns: 1fr;
        }

        .faq-cta {
            flex-direction: column;
            align-items: flex-start;
            padding: 28px 24px;
        }

        .faq-cta-text {
            max-width: 100%;
        }

        .faq-cta-actions {
            width: 100%;
        }

        .faq-cta-btn {
            flex: 1;
            justify-content: center;
        }
    }
</style>

<section class="faq-section">
    <div class="faq-container">

        <div class="faq-header">
            <span class="faq-eyebrow">FAQs</span>
            <h2 class="faq-title">Frequently Asked Questions</h2>
        </div>

        <div class="faq-columns">

            <div class="faq-column">

                <div class="faq-item">
                    <button type="button" class="faq-question" aria-expanded="false">
                        What services do you offer in your studio?
                        <span class="faq-toggle"></span>
                    </button>
                    <div class="faq-answer-wrap">
                        <div class="faq-answer-inner">
                            <p class="faq-answer">We offer podcast production, video ads, animation, voice over, scriptwriting &amp; translation, and full studio rental — everything under one roof.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" aria-expanded="false">
                        Can we rent the studio for a few hours?
                        <span class="faq-toggle"></span>
                    </button>
                    <div class="faq-answer-wrap">
                        <div class="faq-answer-inner">
                            <p class="faq-answer">Yes, we offer flexible hourly, half-day and full-day rental options depending on your shoot or recording needs.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" aria-expanded="false">
                        Do you provide equipment with the studio rental?
                        <span class="faq-toggle"></span>
                    </button>
                    <div class="faq-answer-wrap">
                        <div class="faq-answer-inner">
                            <p class="faq-answer">Yes, professional cameras, microphones, lighting and recording gear are included with every studio booking.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" aria-expanded="false">
                        How long does a typical project take?
                        <span class="faq-toggle"></span>
                    </button>
                    <div class="faq-answer-wrap">
                        <div class="faq-answer-inner">
                            <p class="faq-answer">Turnaround depends on scope, but most podcast episodes and voice-over jobs are delivered within 2–4 business days.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="faq-column">

                <div class="faq-item">
                    <button type="button" class="faq-question" aria-expanded="false">
                        Do you offer voice over in multiple languages?
                        <span class="faq-toggle"></span>
                    </button>
                    <div class="faq-answer-wrap">
                        <div class="faq-answer-inner">
                            <p class="faq-answer">Yes, we provide voice-over and dubbing services in 20+ regional and international languages.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" aria-expanded="false">
                        Can you help with scriptwriting and translation?
                        <span class="faq-toggle"></span>
                    </button>
                    <div class="faq-answer-wrap">
                        <div class="faq-answer-inner">
                            <p class="faq-answer">Absolutely — our team writes and translates scripts to fit your brand voice and target audience.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" aria-expanded="false">
                        What file formats will we receive?
                        <span class="faq-toggle"></span>
                    </button>
                    <div class="faq-answer-wrap">
                        <div class="faq-answer-inner">
                            <p class="faq-answer">We deliver in all standard formats including MP4, MP3 and WAV, with platform-specific exports available on request.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item">
                    <button type="button" class="faq-question" aria-expanded="false">
                        How can I book the studio or request a service?
                        <span class="faq-toggle"></span>
                    </button>
                    <div class="faq-answer-wrap">
                        <div class="faq-answer-inner">
                            <p class="faq-answer">Simply reach out through our contact page or give us a call, and our team will schedule a session that works for you.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- ================================================
        CONTACT CTA BANNER
        ================================================= -->
        <div class="faq-cta">
            <div class="faq-cta-text">
                <h3>Still have questions?</h3>
                <p>Tell us what you're recording and our studio team will help you plan the right session — no pressure, no obligation.</p>
            </div>

            <div class="faq-cta-actions">
                <a href="contact.php" class="faq-cta-btn faq-cta-btn--primary">✉ Send Us a Message</a>
                <button type="button" class="faq-cta-btn faq-cta-btn--secondary">📞 Call Now</button>
                <a href="https://wa.me/919211339966?text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services." class="faq-cta-btn faq-cta-btn--whatsapp">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.29-1.39a9.9 9.9 0 0 0 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.13-2.9-7C17.19 3.03 14.7 2 12.04 2zm0 18.06h-.01a8.2 8.2 0 0 1-4.18-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.15 8.15 0 0 1-1.25-4.34c0-4.53 3.69-8.22 8.24-8.22 2.2 0 4.27.86 5.82 2.42a8.17 8.17 0 0 1 2.41 5.81c0 4.54-3.7 8.21-8.23 8.21zm4.52-6.16c-.25-.12-1.46-.72-1.68-.8-.23-.08-.39-.12-.56.13-.16.24-.64.8-.78.96-.15.16-.29.18-.54.06-.25-.12-1.04-.38-1.98-1.22-.73-.65-1.23-1.46-1.37-1.7-.15-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.24-.4.08-.16.04-.3-.02-.42-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.15 0-.31-.02-.48-.02-.16 0-.43.06-.66.3-.23.25-.86.84-.86 2.04 0 1.2.88 2.36 1 2.52.12.16 1.73 2.64 4.2 3.7.59.25 1.05.4 1.41.52.59.19 1.13.16 1.55.1.47-.07 1.46-.6 1.67-1.18.2-.58.2-1.08.14-1.18-.06-.1-.22-.16-.47-.28z" />
                    </svg>
                    WhatsApp
                </a>
                <a href="#" class="faq-cta-btn faq-cta-btn--meet">
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
        const items = document.querySelectorAll(".faq-section .faq-item");

        items.forEach(function(item) {
            const button = item.querySelector(".faq-question");
            if (!button) return;

            button.addEventListener("click", function() {
                const isOpen = item.classList.contains("is-open");
                item.classList.toggle("is-open", !isOpen);
                button.setAttribute("aria-expanded", String(!isOpen));
            });
        });
    })();
</script>