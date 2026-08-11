<style>
    #home-hero-section {
        position: relative;
        background: radial-gradient(ellipse 90% 70% at 15% 15%, #1f5f47 0%, #123f2f 45%, #0a2a20 75%, #071f18 100%);
        padding: 100px 60px;
        overflow: hidden;
    }

    #home-hero-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 78% 45%, rgba(56, 191, 140, 0.18) 0%, transparent 45%);
        pointer-events: none;
    }

    .home-hero-section_conetent {
        position: relative;
        z-index: 1;
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.05fr 0.85fr;
        gap: 40px;
        align-items: center;
    }

    /* ---------- Left info column ---------- */

    .home-hero-section_info {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .home-hero-section_badge {
        display: flex;
        align-items: center;
        gap: 10px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.14);
        padding: 7px 14px 7px 10px;
        border-radius: 999px;
        margin-bottom: 28px;
    }

    .home-hero-section_badge-google {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 700;
        color: #ffffff;
    }

    .home-hero-section_badge-google-icon {
        width: 16px;
        height: 16px;
        display: inline-flex;
    }

    .home-hero-section_badge-google-icon img {
        width: 100%;
        height: 100%;
        display: block;
    }

    .home-hero-section_badge-stars {
        display: inline-flex;
        gap: 2px;
        padding-left: 8px;
        border-left: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 11px;
        color: #ffcf4d;
    }

    .home-hero-section_badge-stars::before {
        content: none;
    }

    .home-hero-section_badge-stars span {
        display: inline-block;
    }

    .home-hero-section_badge-rating {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.75);
        padding-left: 8px;
        border-left: 1px solid rgba(255, 255, 255, 0.2);
    }

    .home-hero-section_badge-rating span {
        color: #ffffff;
        font-weight: 800;
    }

    .home-hero-section_title {
        margin: 0 0 18px;
        font-size: 46px;
        line-height: 1.18;
        font-weight: 800;
        color: #ffffff;
        letter-spacing: -0.5px;
    }

    .home-hero-section_title span {
        display: block;
        color: #7fe3bd;
    }

    .home-hero-section_autotyping {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 15px;
        font-weight: 700;
        color: #eafff5;
        margin-bottom: 18px;
        min-height: 22px;
    }

    .home-hero-section_autotyping .typing {
        border-right: 2px solid #7fe3bd;
        padding-right: 3px;
        animation: blink-caret 0.8s step-end infinite;
        white-space: nowrap;
    }

    @keyframes blink-caret {

        0%,
        100% {
            border-color: #7fe3bd;
        }

        50% {
            border-color: transparent;
        }
    }

    .home-hero-section_description {
        font-size: 15px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.62);
        max-width: 460px;
        margin: 0 0 34px;
    }

    .home-hero-section_cta-section {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .home-hero-section_cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 13px 26px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        transition: transform 0.2s ease, background 0.2s ease, opacity 0.2s ease;
    }

    a.home-hero-section_cta-button:first-of-type {
        background: #ffffff;
        color: #0e3327;
    }

    a.home-hero-section_cta-button:first-of-type:hover {
        transform: translateY(-2px);
        opacity: 0.92;
    }

    a.home-hero-section_cta-button:last-of-type {
        background: transparent;
        color: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    a.home-hero-section_cta-button:last-of-type:hover {
        transform: translateY(-2px);
        border-color: #ffffff;
    }

    /* ---------- Right AI card ---------- */

    .home-hero-section_ai {
        display: flex;
        justify-content: center;
    }

    /* NOTE: overflow is intentionally NOT hidden here anymore — that was clipping/hiding
     the agent dropdown when it opened. Rounding is instead handled per-section below. */
    .home-hero-section_ai-card {
        position: relative;
        width: 100%;
        max-width: 380px;
        background: #061e17;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 22px;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.35);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .home-hero-section_ai-card h3 {
        width: 100%;
        margin: 0;
        text-align: center;
        background: linear-gradient(180deg, #2a9873, #1c7357);
        color: #ffffff;
        font-size: 14px;
        font-weight: 700;
        padding: 14px 0;
        border-radius: 22px 22px 0 0;
    }

    .ai-assistant-card {
        position: relative;
        width: 100%;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: radial-gradient(circle at center, rgba(58, 199, 150, 0.16) 0%, transparent 65%);
        overflow: hidden;
        /* clip only the ripple rings, not the whole card */
    }

    .ai-assistant-card>span {
        position: absolute;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        border: 1px solid rgba(127, 227, 189, 0.35);
        animation: ripple 3.2s ease-out infinite;
    }

    .ai-assistant-card>span:nth-of-type(1) {
        animation-delay: 0s;
    }

    .ai-assistant-card>span:nth-of-type(2) {
        animation-delay: 0.8s;
    }

    .ai-assistant-card>span:nth-of-type(3) {
        animation-delay: 1.6s;
    }

    .ai-assistant-card>span:nth-of-type(4) {
        animation-delay: 2.4s;
    }

    @keyframes ripple {
        0% {
            width: 90px;
            height: 90px;
            opacity: 0.55;
        }

        100% {
            width: 380px;
            height: 380px;
            opacity: 0;
        }
    }

    /* ---- amoeba-like blob orb (clip-path polygon morph, no border-radius circle) ---- */
    .ai-assistant-circle {
        position: relative;
        z-index: 2;
        width: 96px;
        height: 96px;
        background: radial-gradient(circle at 35% 30%, #d6fff0 0%, #4fd39a 42%, #1c8f63 75%, #0c5c3d 100%);
        filter: drop-shadow(0 0 34px rgba(79, 211, 154, 0.65));
        animation:
            blob-morph 7s ease-in-out infinite,
            blob-glow 2.6s ease-in-out infinite,
            blob-drift 9s ease-in-out infinite;
    }

    @keyframes blob-morph {

        0%,
        100% {
            clip-path: polygon(58% 2%, 82% 10%, 96% 32%, 94% 58%, 78% 82%, 54% 96%, 28% 90%, 8% 70%, 4% 42%, 20% 16%, 40% 4%);
        }

        25% {
            clip-path: polygon(52% 4%, 78% 6%, 98% 26%, 90% 52%, 96% 76%, 68% 94%, 40% 98%, 14% 82%, 2% 58%, 8% 32%, 30% 8%);
        }

        50% {
            clip-path: polygon(62% 0%, 86% 16%, 94% 44%, 98% 68%, 74% 90%, 48% 100%, 22% 92%, 4% 68%, 6% 40%, 24% 14%, 44% 2%);
        }

        75% {
            clip-path: polygon(48% 6%, 74% 2%, 96% 22%, 92% 50%, 92% 74%, 64% 96%, 36% 92%, 12% 76%, 2% 50%, 12% 24%, 34% 6%);
        }
    }

    @keyframes blob-glow {

        0%,
        100% {
            filter: drop-shadow(0 0 26px rgba(79, 211, 154, 0.55));
        }

        50% {
            filter: drop-shadow(0 0 46px rgba(79, 211, 154, 0.9));
        }
    }

    @keyframes blob-drift {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        33% {
            transform: translate(2px, -3px) scale(1.03);
        }

        66% {
            transform: translate(-3px, 2px) scale(0.97);
        }
    }

    .ai-assistant-circle span {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    .ai-assistant-circle span:nth-of-type(1) {
        top: 14%;
        left: 22%;
        width: 34px;
        height: 20px;
        background: rgba(255, 255, 255, 0.75);
        filter: blur(3px);
        transform: rotate(-20deg);
    }

    .ai-assistant-circle span:nth-of-type(2) {
        bottom: 10px;
        left: 10px;
        right: 10px;
        height: 24px;
        background: rgba(6, 40, 28, 0.35);
        filter: blur(6px);
    }

    .ai-assistant-circle span:nth-of-type(3),
    .ai-assistant-circle span:nth-of-type(4) {
        display: none;
    }

    .home-hero-section_ai-card>p {
        font-size: 12px;
        font-style: italic;
        color: rgba(255, 255, 255, 0.55);
        margin: 0 0 18px;
    }

    /* ---- Select Agent trigger button ---- */
    .ai-assistant-options {
        padding: 0;
        width: 100%;
    }

    .ai-assistant-options>button {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.16);
        color: #ffffff;
        font-size: 13px;
        font-weight: 600;
        padding: 10px 16px;
        border-radius: 999px;
        cursor: pointer;
        width: 100%;
        justify-content: center;
    }

    .ai-assistant-options>button span:first-child {
        width: 14px;
        height: 14px;
        display: inline-flex;
        background: rgba(255, 255, 255, 0.7);
        -webkit-mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.5c-3.5 0-10.4 1.7-10.4 5.2v2.1h20.8v-2.1c0-3.5-6.9-5.2-10.4-5.2z'/></svg>") center / contain no-repeat;
        mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.5c-3.5 0-10.4 1.7-10.4 5.2v2.1h20.8v-2.1c0-3.5-6.9-5.2-10.4-5.2z'/></svg>") center / contain no-repeat;
    }

    .ai-assistant-options>button span:last-child {
        width: 10px;
        height: 10px;
        border-right: 2px solid rgba(255, 255, 255, 0.7);
        border-bottom: 2px solid rgba(255, 255, 255, 0.7);
        transform: rotate(45deg);
        margin-top: -4px;
        transition: transform 0.2s ease;
    }

    .ai-assistant-options.open>button span:last-child {
        transform: rotate(-135deg);
        margin-top: 4px;
    }

    /* Positioned relative to the whole card (not the half-width button column)
     so it spans the full card width and is never clipped. */
    .ai-assistant-options_list {
        position: absolute;
        bottom: calc(100% + 12px);
        left: 20px;
        right: 20px;
        max-height: 260px;
        overflow-y: auto;
        background: #0a2b21;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 6px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(8px);
        transition: opacity 0.2s ease, transform 0.2s ease;
        z-index: 20;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
    }

    .ai-assistant-options.open .ai-assistant-options_list {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .ai-assistant-options_item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px;
        border-radius: 10px;
        cursor: pointer;
    }

    .ai-assistant-options_item:hover {
        background: rgba(255, 255, 255, 0.05);
    }

    .ai-assistant-options_item-icon {
        width: 26px;
        height: 26px;
        flex-shrink: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ai-assistant-options_item-icon svg {
        width: 12px;
        height: 12px;
        fill: rgba(255, 255, 255, 0.6);
    }

    .ai-assistant-options_item-text {
        flex: 1;
        min-width: 0;
    }

    .ai-assistant-options_item-text strong {
        display: block;
        font-size: 12.5px;
        line-height: 1.3;
        color: #ffffff;
        font-weight: 700;
        white-space: nowrap;
    }

    .ai-assistant-options_item-text small {
        display: block;
        font-size: 10.5px;
        line-height: 1.3;
        color: rgba(255, 255, 255, 0.5);
        margin-top: 1px;
        white-space: nowrap;
    }

    .ai-assistant-options_item-tag {
        flex-shrink: 0;
        font-size: 8.5px;
        font-weight: 800;
        padding: 2px 6px;
        border-radius: 4px;
        letter-spacing: 0.3px;
    }

    .ai-assistant-options_item-tag.ind {
        background: rgba(230, 168, 46, 0.18);
        color: #e6a82e;
    }

    .ai-assistant-options_item-tag.eng {
        background: rgba(58, 141, 230, 0.18);
        color: #4f9dff;
    }

    /* ---- Talk With AI button ---- */
    .buttons-row>button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: linear-gradient(180deg, #38c98f, #1f9a68);
        color: #ffffff;
        border: none;
        font-size: 13px;
        font-weight: 700;
        padding: 11px 20px;
        border-radius: 999px;
        cursor: pointer;
        flex: 1;
    }

    .buttons-row>button::before {
        content: "";
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 8px solid #ffffff;
    }

    .home-hero-section_ai-card .buttons-row {
        display: flex;
        gap: 10px;
        padding: 0 20px 20px;
        width: 100%;
    }

    .buttons-row .ai-assistant-options {
        flex: 1;
    }

    @media (max-width: 900px) {
        .home-hero-section_conetent {
            grid-template-columns: 1fr;
        }

        .home-hero-section_title {
            font-size: 34px;
        }

        #home-hero-section {
            padding: 60px 24px;
        }
    }
</style>

<section class="home-hero-section" id="home-hero-section">
    <div class="home-hero-section_conetent">
        <div class="home-hero-section_info">
            <div class="home-hero-section_badge">
                <div class="home-hero-section_badge-google">
                    <span class="home-hero-section_badge-google-icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google Icon">
                    </span>
                    <span>Google</span>
                </div>
                <span class="home-hero-section_badge-stars">★★★★★</span>
                <div class="home-hero-section_badge-rating"><span>4.9</span> Customer Rating</div>
            </div>
            <h1 class="home-hero-section_title">
                Empowering Communication with
                <span>AI-Driven KingDigital</span>
            </h1>
            <div class="home-hero-section_autotyping">
                <span class="typed">Smart Solutions for</span>
                <span class="typing"></span>
            </div>
            <p class="home-hero-section_description">
                Deploy official WhatsApp Business API, A2P bulk SMS, IVR, and AI voice bots on your own server — or use our secure cloud communications platform.
            </p>
            <div class="home-hero-section_cta-section">
                <a href="#contact" class="home-hero-section_cta-button">Get Started</a>
                <a href="#services" class="home-hero-section_cta-button">Explore Services</a>
            </div>
        </div>
        <div class="home-hero-section_ai">
            <div class="home-hero-section_ai-card">
                <h3>AI Assistant</h3>
                <div class="ai-assistant-card">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="ai-assistant-circle">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <p>Select an agent, then Talk With AI</p>
                <div class="buttons-row">
                    <div class="ai-assistant-options" id="agentDropdown">
                        <button type="button" id="agentDropdownToggle">
                            <span></span>
                            Select Agent
                            <span></span>
                        </button>
                        <div class="ai-assistant-options_list">
                            <div class="ai-assistant-options_item">
                                <div class="ai-assistant-options_item-icon">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                    </svg>
                                </div>
                                <div class="ai-assistant-options_item-text">
                                    <strong>AI Assistant</strong>
                                    <small>Female · Hinglish</small>
                                </div>
                                <span class="ai-assistant-options_item-tag ind">IND</span>
                            </div>
                            <div class="ai-assistant-options_item">
                                <div class="ai-assistant-options_item-icon">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                    </svg>
                                </div>
                                <div class="ai-assistant-options_item-text">
                                    <strong>AI Assistant</strong>
                                    <small>Male · Hinglish</small>
                                </div>
                                <span class="ai-assistant-options_item-tag ind">IND</span>
                            </div>
                            <div class="ai-assistant-options_item">
                                <div class="ai-assistant-options_item-icon">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                    </svg>
                                </div>
                                <div class="ai-assistant-options_item-text">
                                    <strong>AI Assistant</strong>
                                    <small>Male · English</small>
                                </div>
                                <span class="ai-assistant-options_item-tag eng">ENG</span>
                            </div>
                            <div class="ai-assistant-options_item">
                                <div class="ai-assistant-options_item-icon">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                    </svg>
                                </div>
                                <div class="ai-assistant-options_item-text">
                                    <strong>AI Assistant</strong>
                                    <small>Female · English</small>
                                </div>
                                <span class="ai-assistant-options_item-tag eng">ENG</span>
                            </div>
                        </div>
                    </div>
                    <button type="button">Talk With AI</button>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        /* ---- Autotyping effect ---- */
        var phrases = ["Business WhatsApp Api", "IVR Solutions", "Bulk Sms"];
        var typingEl = document.querySelector('.home-hero-section_autotyping .typing');
        var phraseIndex = 0;
        var charIndex = 0;
        var deleting = false;

        function tick() {
            var current = phrases[phraseIndex];

            if (!deleting) {
                charIndex++;
                typingEl.textContent = current.substring(0, charIndex);
                if (charIndex === current.length) {
                    deleting = true;
                    setTimeout(tick, 1400);
                    return;
                }
            } else {
                charIndex--;
                typingEl.textContent = current.substring(0, charIndex);
                if (charIndex === 0) {
                    deleting = false;
                    phraseIndex = (phraseIndex + 1) % phrases.length;
                }
            }

            setTimeout(tick, deleting ? 40 : 80);
        }

        tick();

        /* ---- Agent dropdown toggle ---- */
        var dropdown = document.getElementById('agentDropdown');
        var toggle = document.getElementById('agentDropdownToggle');

        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            dropdown.classList.toggle('open');
        });

        document.addEventListener('click', function() {
            dropdown.classList.remove('open');
        });

        dropdown.querySelectorAll('.ai-assistant-options_item').forEach(function(item) {
            item.addEventListener('click', function() {
                var name = item.querySelector('strong').textContent;
                toggle.childNodes[1].textContent = ' ' + name + ' ';
                dropdown.classList.remove('open');
            });
        });
    });
</script>
