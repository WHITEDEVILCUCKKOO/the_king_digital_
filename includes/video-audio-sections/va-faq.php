<style>
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

        right: -80px;
        bottom: 40px;

        border-radius: 50%;

        background: rgba(255, 120, 50, 0.045);

        filter: blur(12px);

        pointer-events: none;
    }

    .faq-container {
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

    @media (prefers-reduced-motion: reduce) {
        .faq-answer-wrap {
            transition: none;
        }

        .faq-toggle::before,
        .faq-toggle::after {
            transition: none;
        }
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 720px) {
        .faq-columns {
            grid-template-columns: 1fr;
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