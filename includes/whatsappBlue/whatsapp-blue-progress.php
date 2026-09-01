<style>

    .whatsappBlue-process {
        position: relative;
        padding: 40px 0 20px;
        background: var(--wa-bg);
    }

    .whatsappBlue-process .container {
        max-width: 980px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* ---------- Header ---------- */

    .whatsappBlue-process_header {
        text-align: center;
        margin: 0 auto 60px;
        max-width: 620px;
        margin-bottom: 56px;
    }

    .whatsappBlue-section_badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        color: var(--wa-blue);
        margin-bottom: 10px;
    }

    .whatsappBlue-section_badge::before {
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--wa-gradient);
        flex-shrink: 0;
    }

    .whatsappBlue-section_badge i {
        display: none;
    }

    .whatsappBlue-process_title {
        font-weight: 500;
        font-size: clamp(32px, 4vw, 44px);
        line-height: 1.22;
        letter-spacing: -0.3px;
        color: var(--wa-text-primary);
        margin-bottom: 20px;
    }

    .whatsappBlue-process_title span {
        font-style: italic;
        color: var(--wa-green-dark);
        font-size: 60px;
        font-weight: 800;
    }

    .whatsappBlue-process_description {
        font-size: 16.5px;
        line-height: 1.7;
        color: var(--wa-text-secondary);
        /* max-width: 52ch; */
    }

    /* ---------- Terminal card ---------- */

    .whatsappBlue-terminal {
        position: relative;
        background: #0B1220;
        border: 1px solid #1E293B;
        border-radius: 20px;
        padding: 0 0 8px;
        overflow: hidden;
        box-shadow: 0 30px 60px -20px rgba(15, 23, 42, 0.35);
    }

    .whatsappBlue-terminal::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(148, 163, 184, 0.09) 1px, transparent 1px);
        background-size: 18px 18px;
        mask-image: radial-gradient(ellipse 90% 70% at 50% 0%, black 40%, transparent 100%);
        pointer-events: none;
    }

    /* chrome bar */

    .whatsappBlue-terminal_chrome {
        position: relative;
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 18px 24px;
        border-bottom: 1px solid #1E293B;
    }

    .whatsappBlue-terminal_dots {
        display: flex;
        gap: 7px;
    }

    .whatsappBlue-terminal_dots span {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #334155;
    }

    .whatsappBlue-terminal_dots span:nth-child(1) {
        background: #EF4444;
        opacity: 0.7;
    }

    .whatsappBlue-terminal_dots span:nth-child(2) {
        background: #F59E0B;
        opacity: 0.7;
    }

    .whatsappBlue-terminal_dots span:nth-child(3) {
        background: #22C55E;
        opacity: 0.7;
    }

    .whatsappBlue-terminal_filename {
        font-family: 'JetBrains Mono', monospace;
        font-size: 12.5px;
        color: #64748B;
    }

    .whatsappBlue-terminal_copy {
        margin-left: auto;
        width: 28px;
        height: 28px;
        border-radius: 7px;
        border: 1px solid #1E293B;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #64748B;
        font-size: 12px;
    }

    /* steps grid */

    .whatsappBlue-terminal_grid {
        position: relative;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        padding: 36px 24px 30px;
    }

    .whatsappBlue-terminal_step {
        padding: 0 22px;
        border-left: 1px dashed #1E293B;
    }

    .whatsappBlue-terminal_step:first-child {
        border-left: none;
        padding-left: 2px;
    }

    .whatsappBlue-terminal_step-index {
        font-family: 'JetBrains Mono', monospace;
        font-size: 13px;
        color: #475569;
        margin-bottom: 18px;
    }

    .whatsappBlue-terminal_step-label {
        font-family: 'JetBrains Mono', monospace;
        font-weight: 600;
        font-size: 13px;
        letter-spacing: 0.5px;
        margin-bottom: 14px;
    }

    .whatsappBlue-terminal_step.green .whatsappBlue-terminal_step-label {
        color: var(--wa-green-light);
    }

    .whatsappBlue-terminal_step.blue .whatsappBlue-terminal_step-label {
        color: var(--wa-blue-light);
    }

    .whatsappBlue-terminal_step-desc {
        font-family: 'JetBrains Mono', monospace;
        font-size: 13px;
        line-height: 1.75;
        color: #CBD5E1;
    }

    /* connector rail */

    .whatsappBlue-terminal_rail {
        position: relative;
        margin: 6px 24px 26px;
        padding: 22px 22px 20px;
        border-top: 1px solid #1E293B;
    }

    .whatsappBlue-terminal_rail-numbers {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        color: #475569;
        margin-bottom: 14px;
    }

    .whatsappBlue-terminal_rail-numbers span:nth-child(1) {
        text-align: left;
    }

    .whatsappBlue-terminal_rail-numbers span:nth-child(2) {
        text-align: center;
    }

    .whatsappBlue-terminal_rail-numbers span:nth-child(3) {
        text-align: center;
    }

    .whatsappBlue-terminal_rail-numbers span:nth-child(4) {
        text-align: right;
    }

    .whatsappBlue-terminal_rail-track {
        position: relative;
        height: 2px;
        background: #1E293B;
        border-radius: 2px;
    }

    .whatsappBlue-terminal_rail-progress {
        position: absolute;
        inset: 0;
        width: 0%;
        background: linear-gradient(90deg, var(--wa-green) 0%, var(--wa-blue) 100%);
        border-radius: 2px;
        transition: width 1.6s cubic-bezier(0.65, 0, 0.35, 1);
    }

    .whatsappBlue-terminal_rail-dots {
        position: absolute;
        inset: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .whatsappBlue-terminal_rail-dots span {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #334155;
        transform: scale(1);
        transition: background 0.3s ease, box-shadow 0.3s ease;
        transition-delay: var(--d, 0s);
    }

    .whatsappBlue-terminal.is-visible .whatsappBlue-terminal_rail-progress {
        width: 100%;
    }

    .whatsappBlue-terminal.is-visible .whatsappBlue-terminal_rail-dots span {
        background: var(--wa-green-light);
        box-shadow: 0 0 0 4px rgba(74, 222, 128, 0.16);
    }

    .whatsappBlue-terminal_rail-dots span:nth-child(1) {
        --d: 0.1s;
    }

    .whatsappBlue-terminal_rail-dots span:nth-child(2) {
        --d: 0.55s;
    }

    .whatsappBlue-terminal_rail-dots span:nth-child(3) {
        --d: 1s;
    }

    .whatsappBlue-terminal_rail-dots span:nth-child(4) {
        --d: 1.45s;
        background: var(--wa-blue-light);
    }

    .whatsappBlue-terminal_cursor {
        display: inline-block;
        width: 7px;
        height: 13px;
        background: var(--wa-green-light);
        margin-left: 2px;
        vertical-align: -2px;
        animation: whatsappBlueBlink 1.1s steps(1) infinite;
    }

    @keyframes whatsappBlueBlink {

        0%,
        49% {
            opacity: 1;
        }

        50%,
        100% {
            opacity: 0;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .whatsappBlue-terminal_rail-progress,
        .whatsappBlue-terminal_rail-dots span {
            transition: none;
        }

        .whatsappBlue-terminal_cursor {
            animation: none;
        }
    }

    /* ---------- Note ---------- */

    .whatsappBlue-process_note {
        display: flex;
        gap: 10px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 13px;
        line-height: 1.7;
        color: var(--wa-text-muted);
        margin: 28px 4px 48px;
    }

    .whatsappBlue-process_note-icon {
        color: var(--wa-blue);
        flex-shrink: 0;
        padding-top: 1px;
    }

    .whatsappBlue-process_note-content strong {
        color: var(--wa-text-primary);
        font-weight: 600;
    }

    /* ---------- CTA ---------- */

    .whatsappBlue-process_cta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        padding: 34px 40px;
        background: var(--wa-bg-soft);
        border: 1px solid var(--wa-border);
        border-radius: 16px;
        flex-wrap: wrap;
    }

    .whatsappBlue-process_cta-content {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .whatsappBlue-process_cta-content span {
        font-size: 13px;
        font-weight: 600;
        color: var(--wa-green-dark);
    }

    .whatsappBlue-process_cta-content h3 {
        font-family: 'Fraunces', serif;
        font-weight: 500;
        font-size: 21px;
        color: var(--wa-text-primary);
    }

    .whatsappBlue-process_cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 24px;
        background: var(--wa-navy);
        color: #4ADE80;
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        font-weight: 500;
        border-radius: 8px;
        text-decoration: none;
        white-space: nowrap;
        transition: transform 0.2s ease;
    }

    .whatsappBlue-process_cta-btn:hover {
        transform: translateY(-2px);
    }

    .whatsappBlue-process_cta-btn i {
        color: #94A3B8;
        font-size: 12px;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 760px) {
        .whatsappBlue-terminal_grid {
            grid-template-columns: repeat(2, 1fr);
            row-gap: 30px;
        }

        .whatsappBlue-terminal_step:nth-child(3) {
            border-left: none;
        }

        .whatsappBlue-terminal_rail-numbers span:nth-child(2) {
            text-align: left;
        }

        .whatsappBlue-terminal_rail-numbers span:nth-child(3) {
            text-align: right;
        }
    }

    @media (max-width: 560px) {
        .whatsappBlue-process {
            padding: 90px 0 80px;
        }

        .whatsappBlue-terminal_grid {
            grid-template-columns: 1fr;
        }

        .whatsappBlue-terminal_step {
            border-left: none;
            padding-left: 2px;
            padding-bottom: 4px;
        }

        .whatsappBlue-terminal_rail {
            display: none;
        }

        .whatsappBlue-process_cta {
            flex-direction: column;
            align-items: flex-start;
        }

        .whatsappBlue-process_cta-btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>


<section class="whatsappBlue-process" id="whatsappBlueProcess">

    <div class="container">

        <div class="whatsappBlue-process_header">
            <span class="whatsappBlue-section_badge">Simple &amp; guided</span>
            <h2 class="whatsappBlue-process_title">
                Your path to a <span>verified</span> business presence
            </h2>
            <p class="whatsappBlue-process_description">
                We guide you through the key stages of the verification
                journey, helping you prepare the right information and
                navigate the process with greater clarity.
            </p>
        </div>


        <div class="whatsappBlue-terminal" id="whatsappBlueTerminal">

            <div class="whatsappBlue-terminal_chrome">
                <div class="whatsappBlue-terminal_dots">
                    <span></span><span></span><span></span>
                </div>
                <span class="whatsappBlue-terminal_filename">verification.sh</span>
                <div class="whatsappBlue-terminal_copy">
                    <i class="fa-regular fa-copy"></i>
                </div>
            </div>

            <div class="whatsappBlue-terminal_grid">

                <div class="whatsappBlue-terminal_step green">
                    <div class="whatsappBlue-terminal_step-index">01</div>
                    <div class="whatsappBlue-terminal_step-label">ASSESS</div>
                    <p class="whatsappBlue-terminal_step-desc">
                        Review your business eligibility
                    </p>
                </div>

                <div class="whatsappBlue-terminal_step blue">
                    <div class="whatsappBlue-terminal_step-index">02</div>
                    <div class="whatsappBlue-terminal_step-label">PREPARE</div>
                    <p class="whatsappBlue-terminal_step-desc">
                        Prepare your business information
                    </p>
                </div>

                <div class="whatsappBlue-terminal_step green">
                    <div class="whatsappBlue-terminal_step-index">03</div>
                    <div class="whatsappBlue-terminal_step-label">SUBMIT</div>
                    <p class="whatsappBlue-terminal_step-desc">
                        Submit the required details
                    </p>
                </div>

                <div class="whatsappBlue-terminal_step blue">
                    <div class="whatsappBlue-terminal_step-index">04</div>
                    <div class="whatsappBlue-terminal_step-label">VERIFY<span class="whatsappBlue-terminal_cursor"></span></div>
                    <p class="whatsappBlue-terminal_step-desc">
                        Verification process progresses
                    </p>
                </div>

            </div>

            <div class="whatsappBlue-terminal_rail">
                <div class="whatsappBlue-terminal_rail-numbers">
                    <span>01</span><span>02</span><span>03</span><span>04</span>
                </div>
                <div class="whatsappBlue-terminal_rail-track">
                    <div class="whatsappBlue-terminal_rail-progress"></div>
                    <div class="whatsappBlue-terminal_rail-dots">
                        <span></span><span></span><span></span><span></span>
                    </div>
                </div>
            </div>

        </div>


        <div class="whatsappBlue-process_note">
            <i class="fa-solid fa-circle-info whatsappBlue-process_note-icon"></i>
            <span class="whatsappBlue-process_note-content">
                <strong>// Important:</strong>
                Verification approval is determined by WhatsApp and Meta
                based on applicable eligibility and review criteria.
                No third party can guarantee approval.
            </span>
        </div>


        <div class="whatsappBlue-process_cta">
            <div class="whatsappBlue-process_cta-content">
                <span>Ready to get started?</span>
                <h3>Let us help you prepare for verification.</h3>
            </div>
            <a href="#contact" class="whatsappBlue-process_cta-btn">
                $ start-verification
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>

</section>


<script>
    (function() {
        var terminal = document.getElementById('whatsappBlueTerminal');
        if (!terminal || typeof IntersectionObserver === 'undefined') return;

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    terminal.classList.add('is-visible');
                    observer.unobserve(terminal);
                }
            });
        }, {
            threshold: 1
        });

        observer.observe(terminal);
    })();
</script>