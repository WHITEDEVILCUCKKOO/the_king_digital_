<style>
    :root {
        --ivr-primary: #6366F1;
        --ivr-primary-dark: #4F46E5;
        --ivr-primary-light: #818CF8;

        --ivr-blue: #2563EB;
        --ivr-blue-dark: #1D4ED8;
        --ivr-blue-light: #60A5FA;

        --ivr-cyan: #22D3EE;
        --ivr-purple: #8B5CF6;
        --ivr-violet: #A78BFA;
        --ivr-gold: #F97316;

        --ivr-bg: #F8FAFC;
        --ivr-bg-light: #EEF2FF;
        --ivr-bg-blue: #EFF6FF;
        --ivr-bg-dark: #0B1020;
        --ivr-bg-dark-alt: #111827;

        --ivr-card: #FFFFFF;
        --ivr-card-dark: #1E293B;
        --ivr-border: #E2E8F0;
        --ivr-border-purple: #C7D2FE;

        --ivr-text-primary: #0F172A;
        --ivr-text-secondary: #475569;
        --ivr-text-muted: #64748B;
        --ivr-text-light: #F8FAFC;
        --ivr-text-muted-light: #A5B4CB;

        --ivr-gradient-primary: linear-gradient(135deg, #6366F1 0%, #2563EB 100%);
        --ivr-gradient-ai: linear-gradient(135deg, #8B5CF6 0%, #6366F1 45%, #2563EB 100%);
        --ivr-gradient-glow: linear-gradient(100deg, #F472B6 0%, #A78BFA 50%, #2563EB 100%);
        --ivr-gradient-dark: linear-gradient(160deg, #0B1020 0%, #1E1B4B 55%, #172554 100%);

        --ivr-glow-purple: 0 0 40px rgba(139, 92, 246, 0.25);
        --ivr-glow-blue: 0 0 40px rgba(37, 99, 235, 0.25);
        --ivr-glow-cyan: 0 0 40px rgba(34, 211, 238, 0.20);

        --ivr-shadow-sm: 0 4px 12px rgba(15, 23, 42, 0.06);
        --ivr-shadow-md: 0 10px 30px rgba(15, 23, 42, 0.10);
        --ivr-shadow-lg: 0 20px 50px rgba(15, 23, 42, 0.14);

        --ivr-radius-sm: 8px;
        --ivr-radius-md: 14px;
        --ivr-radius-lg: 20px;
        --ivr-radius-xl: 28px;
        --ivr-radius-pill: 999px;

        --ivr-transition-fast: 0.2s ease;
        --ivr-transition: 0.35s cubic-bezier(0.22, 1, 0.36, 1);
        --ivr-transition-slow: 0.6s ease;

        --ivr-line: rgba(79, 70, 229, 0.38);
        --ivr-line-active: #4F46E5;
    }

    .ivr-faq {
        position: relative;
        width: 100%;
        padding: 100px 80px 110px;
        background: var(--ivr-bg);
        overflow: hidden;
    }

    /* Faint radial wash behind the headline, echoes the gradient accent */
    .ivr-faq::before {
        content: "";
        position: absolute;
        top: -120px;
        left: 50%;
        transform: translateX(-50%);
        width: 900px;
        height: 420px;
        background: radial-gradient(ellipse at center, rgba(167, 139, 250, 0.14) 0%, rgba(244, 114, 182, 0.08) 45%, rgba(248, 250, 252, 0) 75%);
        pointer-events: none;
    }

    .ivr-faq_content {
        position: relative;
        z-index: 2;
        max-width: 800px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 48px;
    }

    .ivr-faq_content-heading {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 16px;
        text-align: center;
    }

    .ivr-faq_eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 16px;
        border-radius: var(--ivr-radius-pill);
        background: var(--ivr-bg-light);
        border: 1px solid var(--ivr-border-purple);
        color: var(--ivr-primary-dark);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
    }

    .ivr-faq_content-heading h1 {
        margin: 0;
        font-size: 48px;
        line-height: 1.08;
        font-weight: 900;
        letter-spacing: -0.02em;
        color: var(--ivr-text-primary);
    }

    .ivr-faq_content-heading h1 span {
        background: var(--ivr-gradient-glow);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ivr-faq_content-heading p {
        margin: 0;
        max-width: 480px;
        color: var(--ivr-text-secondary);
        font-size: 16px;
        line-height: 1.6;
    }

    .ivr-faq_content--qa {
        border-radius: var(--ivr-radius-lg);
        background: var(--ivr-card);
        border: 1px solid var(--ivr-border);
        box-shadow: var(--ivr-shadow-sm);
        overflow: hidden;
        transition: border-color var(--ivr-transition), box-shadow var(--ivr-transition);
    }

    .ivr-faq_content--qa:hover {
        border-color: var(--ivr-border-purple);
        box-shadow: var(--ivr-shadow-md);
    }

    .ivr-faq_content--qa[open] {
        border-color: var(--ivr-border-purple);
        box-shadow: var(--ivr-shadow-md);
    }

    .ivr-faq_content--qa summary {
        list-style: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 22px 26px;
        font-size: 16.5px;
        font-weight: 700;
        color: var(--ivr-text-primary);
        -webkit-tap-highlight-color: transparent;
    }

    .ivr-faq_content--container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 10px;
    }

    .ivr-faq_content--qa summary::-webkit-details-marker {
        display: none;
    }

    .ivr-faq_icon {
        flex-shrink: 0;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--ivr-bg-blue);
        color: var(--ivr-blue);
        position: relative;
        transition: background var(--ivr-transition-fast), transform var(--ivr-transition);
    }

    .ivr-faq_icon::before,
    .ivr-faq_icon::after {
        content: "";
        position: absolute;
        background: currentColor;
        border-radius: 2px;
        transition: transform var(--ivr-transition), opacity var(--ivr-transition-fast);
    }

    .ivr-faq_icon::before {
        width: 12px;
        height: 2px;
    }

    .ivr-faq_icon::after {
        width: 2px;
        height: 12px;
    }

    .ivr-faq_content--qa[open] .ivr-faq_icon {
        background: var(--ivr-gradient-primary);
        color: #fff;
        transform: rotate(180deg);
    }

    .ivr-faq_content--qa[open] .ivr-faq_icon::after {
        transform: scaleY(0);
    }

    .ivr-faq_answer {
        padding: 0 26px 24px 70px;
        margin: 0;
        color: var(--ivr-text-secondary);
        font-size: 15px;
        line-height: 1.65;
    }

    @media (max-width: 640px) {
        .ivr-faq {
            padding: 64px 20px;
        }

        .ivr-faq_content-heading h1 {
            font-size: 32px;
        }

        .ivr-faq_answer {
            padding-left: 26px;
        }

        .ivr-faq_content--qa summary {
            padding: 18px 20px;
            font-size: 15px;
        }
    }
</style>


<section class="ivr-faq">
    <div class="ivr-faq_content">
        <div class="ivr-faq_content-heading">
            <span class="ivr-faq_eyebrow">FAQ</span>
            <h1>Frequently Asked <span>Questions</span></h1>
            <p>Everything you need to know about how our IVR system works, keeps calls secure, and fits into your setup.</p>
        </div>
        <div class="ivr-faq_content--container">
            <details class="ivr-faq_content--qa" open>
                <summary><span class="ivr-faq_icon"></span>How does IVR work?</summary>
                <p class="ivr-faq_answer">Systems translate touch-tone keypad presses or voice commands (via speech recognition) into specific actions, such as routing a caller to a department or playing a pre-recorded message.</p>
            </details>
            <details class="ivr-faq_content--qa">
                <summary><span class="ivr-faq_icon"></span>What are the main types of IVR?</summary>
                <p class="ivr-faq_answer">Inbound IVR handles incoming calls for support or self-service, while Outbound IVR initiates calls for surveys, reminders, or payment collections.</p>
            </details>
            <details class="ivr-faq_content--qa">
                <summary><span class="ivr-faq_icon"></span>How is payment security handled?</summary>
                <p class="ivr-faq_answer">Secure IVR systems use DTMF-clamping to mask tone sounds and remove credit card data from recordings, complying with PCI-DSS standards to protect financial transactions.</p>
            </details>
            <details class="ivr-faq_content--qa">
                <summary><span class="ivr-faq_icon"></span>What are best practices for user experience?</summary>
                <p class="ivr-faq_answer">Keep menus short (3–5 options), avoid industry jargon, ensure high-quality audio without background noise, and allow frequent callers to skip ahead or bypass menus using caller ID recognition.</p>
            </details>
        </div>
    </div>
</section>