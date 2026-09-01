<style>

    .whatsappBlue-king {
        position: relative;
        padding: 40px 0;
        background: var(--wa-bg-soft);
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    .whatsappBlue-king .container {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 24px;
    }

    .whatsappBlue-king_wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 56px;
        align-items: center;
    }

    /* ---------- LEFT: content ---------- */

    .whatsappBlue-king .whatsappBlue-section_badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 18px 9px 16px;
        background: var(--wa-green-soft);
        color: var(--wa-green-dark);
        font-size: 13px;
        font-weight: 600;
        border-radius: 18px 18px 18px 4px;
        margin-bottom: 22px;
    }

    .whatsappBlue-king .whatsappBlue-section_badge i {
        font-size: 12px;
    }

    .whatsappBlue-king_title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: clamp(30px, 3.6vw, 40px);
        line-height: 1.25;
        letter-spacing: -0.4px;
        color: var(--wa-text-primary);
        margin-bottom: 20px;
    }

    .whatsappBlue-king_title span {
        background: var(--wa-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappBlue-king_description {
        font-size: 16px;
        line-height: 1.75;
        color: var(--wa-text-secondary);
        max-width: 50ch;
        margin-bottom: 30px;
    }

    .whatsappBlue-king_btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 24px 14px 22px;
        background: var(--wa-green);
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        border-radius: 999px;
        text-decoration: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        margin-bottom: 40px;
    }

    .whatsappBlue-king_btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--wa-shadow-green);
    }

    .whatsappBlue-king_btn i {
        font-size: 13px;
    }

    .whatsappBlue-king_trust {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    .whatsappBlue-king_trust-item {
        display: flex;
        align-items: center;
        gap: 9px;
        padding: 9px 16px 9px 12px;
        background: var(--wa-bg);
        border: 1px solid var(--wa-border);
        border-radius: 12px;
        font-size: 13.5px;
        font-weight: 500;
        color: var(--wa-text-primary);
    }

    .whatsappBlue-king_trust-item i {
        color: var(--wa-green-dark);
        font-size: 14px;
    }

    /* ---------- RIGHT: visual ---------- */

    .whatsappBlue-king_visual {
        position: relative;
    }

    .whatsappBlue-king_glow {
        position: absolute;
        top: -60px;
        left: -40px;
        width: 280px;
        height: 280px;
        background: var(--wa-gradient-soft);
        border-radius: 50%;
        filter: blur(75px);
        opacity: 0.7;
        z-index: 0;
    }

    /* main card = chat profile panel */

    .whatsappBlue-king_card {
        position: relative;
        z-index: 1;
        background: var(--wa-bg);
        border: 1px solid var(--wa-border);
        border-radius: var(--wa-radius-lg);
        overflow: hidden;
        box-shadow: var(--wa-shadow-sm);
        max-width: 400px;
        margin: 0 auto;
    }

    .whatsappBlue-king_card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 20px;
        background: var(--wa-navy);
    }

    .whatsappBlue-king_card-brand {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .whatsappBlue-king_card-logo {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        background: var(--wa-gradient);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: 13px;
        flex-shrink: 0;
    }

    .whatsappBlue-king_card-brand strong {
        display: block;
        color: #fff;
        font-size: 14.5px;
        font-weight: 600;
    }

    .whatsappBlue-king_card-brand span {
        font-size: 12px;
        color: #94A3B8;
    }

    .whatsappBlue-king_card_status {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 11.5px;
        font-weight: 600;
        color: var(--wa-green-light);
    }

    .whatsappBlue-king_card_status i {
        font-size: 7px;
        animation: whatsappBluePulseDot 1.8s ease-in-out infinite;
    }

    @keyframes whatsappBluePulseDot {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.3;
        }
    }

    /* progress */

    .whatsappBlue-king_progress {
        padding: 20px 20px 16px;
        border-bottom: 1px solid var(--wa-border);
    }

    .whatsappBlue-king_progress-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 12px;
    }

    .whatsappBlue-king_progress-top span {
        display: block;
        font-size: 11.5px;
        color: var(--wa-text-muted);
        margin-bottom: 2px;
    }

    .whatsappBlue-king_progress-top strong {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 14.5px;
        font-weight: 700;
        color: var(--wa-text-primary);
    }

    .whatsappBlue-king_progress-check {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: var(--wa-gradient-green);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
    }

    .whatsappBlue-king_progress-bar {
        height: 6px;
        border-radius: 4px;
        background: var(--wa-border);
        overflow: hidden;
    }

    .whatsappBlue-king_progress-bar span {
        display: block;
        height: 100%;
        width: 0%;
        border-radius: 4px;
        background: var(--wa-gradient);
        transition: width 1.4s cubic-bezier(0.65, 0, 0.35, 1);
    }

    .whatsappBlue-king_card.is-visible .whatsappBlue-king_progress-bar span {
        width: 62%;
    }

    /* steps = message-style rows */

    .whatsappBlue-king_steps {
        padding: 6px 12px;
    }

    .whatsappBlue-king_step {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 8px;
        border-radius: 12px;
        opacity: 0;
        transform: translateX(-8px);
        transition: opacity 0.45s ease, transform 0.45s ease, background 0.2s ease;
        transition-delay: var(--d, 0s);
    }

    .whatsappBlue-king_card.is-visible .whatsappBlue-king_step {
        opacity: 1;
        transform: translateX(0);
    }

    .whatsappBlue-king_step:nth-child(1) {
        --d: 0.1s;
    }

    .whatsappBlue-king_step:nth-child(2) {
        --d: 0.28s;
    }

    .whatsappBlue-king_step:nth-child(3) {
        --d: 0.46s;
    }

    .whatsappBlue-king_step:nth-child(4) {
        --d: 0.64s;
    }

    .whatsappBlue-king_step.current {
        background: var(--wa-green-soft);
    }

    .whatsappBlue-king_step-icon {
        width: 38px;
        height: 38px;
        border-radius: 11px;
        background: var(--wa-bg-soft);
        border: 1px solid var(--wa-border);
        color: var(--wa-text-muted);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        flex-shrink: 0;
    }

    .whatsappBlue-king_step.completed .whatsappBlue-king_step-icon {
        background: var(--wa-gradient-green);
        border-color: transparent;
        color: #fff;
    }

    .whatsappBlue-king_step.current .whatsappBlue-king_step-icon {
        background: var(--wa-gradient-blue);
        border-color: transparent;
        color: #fff;
    }

    .whatsappBlue-king_step-content {
        flex: 1;
        min-width: 0;
    }

    .whatsappBlue-king_step-content strong {
        display: block;
        font-size: 13.5px;
        font-weight: 600;
        color: var(--wa-text-primary);
    }

    .whatsappBlue-king_step-content span {
        font-size: 12px;
        color: var(--wa-text-muted);
    }

    .whatsappBlue-king_step-check {
        color: var(--wa-blue);
        font-size: 12px;
        flex-shrink: 0;
    }

    .whatsappBlue-king_step-live {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: 0.4px;
        color: var(--wa-green-dark);
        background: var(--wa-green-pale);
        padding: 5px 10px;
        border-radius: 999px;
        flex-shrink: 0;
    }

    .whatsappBlue-king_step-live::before {
        content: "";
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--wa-green-dark);
        animation: whatsappBluePulseDot 1.4s ease-in-out infinite;
    }

    /* footer = pinned note */

    .whatsappBlue-king_card-footer {
        display: flex;
        align-items: center;
        gap: 12px;
        margin: 8px 20px 20px;
        padding: 14px 16px;
        background: var(--wa-blue-soft);
        border-left: 3px solid var(--wa-blue);
        border-radius: 0 10px 10px 0;
    }

    .whatsappBlue-king_footer-icon {
        color: var(--wa-blue);
        font-size: 15px;
        flex-shrink: 0;
    }

    .whatsappBlue-king_card-footer strong {
        display: block;
        font-size: 13px;
        font-weight: 600;
        color: var(--wa-text-primary);
    }

    .whatsappBlue-king_card-footer span {
        font-size: 12px;
        color: var(--wa-text-secondary);
    }

    /* floating badges = notification bubbles */

    .whatsappBlue-king_float {
        position: absolute;
        z-index: 2;
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--wa-bg);
        border: 1px solid var(--wa-border);
        border-radius: 14px 14px 14px 4px;
        padding: 11px 15px;
        box-shadow: var(--wa-shadow-sm);
        opacity: 0;
        transform: translateY(10px) scale(0.95);
        transition: opacity 0.45s ease, transform 0.45s ease;
    }

    .whatsappBlue-king_visual.is-visible .whatsappBlue-king_float {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .whatsappBlue-king_float-verified {
        top: 6%;
        right: -6%;
        transition-delay: 0.7s;
    }

    .whatsappBlue-king_float-support {
        bottom: 10%;
        left: -8%;
        transition-delay: 0.9s;
    }

    .whatsappBlue-king_float-icon {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 12px;
        flex-shrink: 0;
    }

    .whatsappBlue-king_float-verified .whatsappBlue-king_float-icon {
        background: var(--wa-blue);
    }

    .whatsappBlue-king_float-support .whatsappBlue-king_float-icon {
        background: var(--wa-gradient-green);
    }

    .whatsappBlue-king_float strong {
        display: block;
        font-size: 12.5px;
        font-weight: 700;
        color: var(--wa-text-primary);
    }

    .whatsappBlue-king_float span {
        font-size: 11px;
        color: var(--wa-text-muted);
    }

    /* decorative dots */

    .whatsappBlue-king_dot {
        position: absolute;
        border-radius: 50%;
        background: var(--wa-gradient);
        opacity: 0.5;
        z-index: 0;
    }

    .dot-1 {
        width: 10px;
        height: 10px;
        top: 12%;
        left: 4%;
    }

    .dot-2 {
        width: 6px;
        height: 6px;
        bottom: 22%;
        right: 2%;
    }

    .dot-3 {
        width: 8px;
        height: 8px;
        bottom: -4%;
        left: 30%;
    }

    @media (prefers-reduced-motion: reduce) {

        .whatsappBlue-king_progress-bar span,
        .whatsappBlue-king_step,
        .whatsappBlue-king_float,
        .whatsappBlue-king_card_status i,
        .whatsappBlue-king_step-live::before {
            transition: none;
            animation: none;
        }
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 960px) {
        .whatsappBlue-king_wrapper {
            grid-template-columns: 1fr;
            gap: 64px;
        }

        .whatsappBlue-king_float-verified,
        .whatsappBlue-king_float-support {
            position: static;
            margin-top: 14px;
            transform: none;
        }

        .whatsappBlue-king_card {
            margin: 0 auto;
        }
    }

    @media (max-width: 560px) {
        .whatsappBlue-king {
            padding: 90px 0;
        }

        .whatsappBlue-king_trust {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>


<section class="whatsappBlue-king" id="whatsappBlueKing">

    <div class="container">

        <div class="whatsappBlue-king_wrapper">

            <!-- LEFT — CONTENT -->

            <div class="whatsappBlue-king_content">

                <span class="whatsappBlue-section_badge">
                    <i class="fa-solid fa-crown"></i>
                    Why King Digital
                </span>

                <h2 class="whatsappBlue-king_title">
                    Your business. <span>Our expertise.</span> A stronger WhatsApp presence.
                </h2>

                <p class="whatsappBlue-king_description">
                    Getting ready for WhatsApp verification can involve
                    multiple business details and eligibility considerations.
                    Our team helps you understand the process, prepare
                    your information and move forward with confidence.
                </p>

                <a href="#contact" class="whatsappBlue-king_btn">
                    Talk to our experts
                    <i class="fa-solid fa-paper-plane"></i>
                </a>

                <div class="whatsappBlue-king_trust">
                    <div class="whatsappBlue-king_trust-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Business-focused guidance</span>
                    </div>
                    <div class="whatsappBlue-king_trust-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Step-by-step assistance</span>
                    </div>
                    <div class="whatsappBlue-king_trust-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Transparent process</span>
                    </div>
                </div>

            </div>


            <!-- RIGHT — VISUAL -->

            <div class="whatsappBlue-king_visual" id="whatsappBlueKingVisual">

                <div class="whatsappBlue-king_glow"></div>

                <div class="whatsappBlue-king_card" id="whatsappBlueKingCard">

                    <div class="whatsappBlue-king_card-header">
                        <div class="whatsappBlue-king_card-brand">
                            <div class="whatsappBlue-king_card-logo">KD</div>
                            <div>
                                <strong>King Digital</strong>
                                <span>Verification support</span>
                            </div>
                        </div>
                        <span class="whatsappBlue-king_card_status">
                            <i class="fa-solid fa-circle"></i>
                            Active
                        </span>
                    </div>

                    <div class="whatsappBlue-king_progress">
                        <div class="whatsappBlue-king_progress-top">
                            <div>
                                <span>Verification journey</span>
                                <strong>Guided support</strong>
                            </div>
                            <div class="whatsappBlue-king_progress-check"><i class="fa-solid fa-check"></i></div>
                        </div>
                        <div class="whatsappBlue-king_progress-bar"><span></span></div>
                    </div>

                    <div class="whatsappBlue-king_steps">

                        <div class="whatsappBlue-king_step completed">
                            <div class="whatsappBlue-king_step-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                            <div class="whatsappBlue-king_step-content">
                                <strong>Business assessment</strong>
                                <span>Understand your requirements</span>
                            </div>
                            <i class="fa-solid fa-check whatsappBlue-king_step-check"></i>
                        </div>

                        <div class="whatsappBlue-king_step completed">
                            <div class="whatsappBlue-king_step-icon"><i class="fa-solid fa-file-circle-check"></i></div>
                            <div class="whatsappBlue-king_step-content">
                                <strong>Information preparation</strong>
                                <span>Organize relevant business details</span>
                            </div>
                            <i class="fa-solid fa-check whatsappBlue-king_step-check"></i>
                        </div>

                        <div class="whatsappBlue-king_step current">
                            <div class="whatsappBlue-king_step-icon"><i class="fa-solid fa-user-headset"></i></div>
                            <div class="whatsappBlue-king_step-content">
                                <strong>Expert assistance</strong>
                                <span>Guidance throughout the process</span>
                            </div>
                            <span class="whatsappBlue-king_step-live">YOU</span>
                        </div>

                        <div class="whatsappBlue-king_step">
                            <div class="whatsappBlue-king_step-icon"><i class="fa-solid fa-circle-check"></i></div>
                            <div class="whatsappBlue-king_step-content">
                                <strong>Verification review</strong>
                                <span>Final review is handled by Meta</span>
                            </div>
                        </div>

                    </div>

                    <div class="whatsappBlue-king_card-footer">
                        <i class="fa-solid fa-shield-halved whatsappBlue-king_footer-icon"></i>
                        <div>
                            <strong>Professional guidance</strong>
                            <span>No false promises. Just a clear process.</span>
                        </div>
                    </div>

                </div>

                <div class="whatsappBlue-king_float whatsappBlue-king_float-verified">
                    <div class="whatsappBlue-king_float-icon"><i class="fa-solid fa-check"></i></div>
                    <div>
                        <strong>Verified</strong>
                        <span>Business identity</span>
                    </div>
                </div>

                <div class="whatsappBlue-king_float whatsappBlue-king_float-support">
                    <div class="whatsappBlue-king_float-icon"><i class="fa-solid fa-headset"></i></div>
                    <div>
                        <strong>Expert support</strong>
                        <span>Step-by-step guidance</span>
                    </div>
                </div>

                <span class="whatsappBlue-king_dot dot-1"></span>
                <span class="whatsappBlue-king_dot dot-2"></span>
                <span class="whatsappBlue-king_dot dot-3"></span>

            </div>

        </div>

    </div>

</section>


<script>
    (function() {
        var card = document.getElementById('whatsappBlueKingCard');
        var visual = document.getElementById('whatsappBlueKingVisual');
        if (typeof IntersectionObserver === 'undefined') return;

        [card, visual].forEach(function(el) {
            if (!el) return;
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.3
            });
            observer.observe(el);
        });
    })();
</script>