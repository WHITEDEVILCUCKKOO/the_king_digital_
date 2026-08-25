<style>
    :root {

        /* ---------- Primary ---------- */
        --ai-orange: #EA5C28;
        --ai-orange-bright: #F4511E;
        --ai-orange-dark: #D94717;

        /* ---------- Secondary ---------- */
        --ai-red: #E3413E;
        --ai-pink: #E31D5B;

        /* ---------- Gradients ---------- */
        --ai-gradient: linear-gradient(90deg, #F4511E 0%, #E3413E 50%, #E31D5B 100%);
        --ai-gradient-soft: linear-gradient(135deg, rgba(244, 81, 30, 0.08), rgba(227, 29, 91, 0.08));

        /* ---------- Light surfaces ---------- */
        --ai-bg: #FFFFFF;
        --ai-bg-warm: #FFF9F4;
        --ai-bg-muted: #F7F5F2;

        /* ---------- Text ---------- */
        --ai-text-heading: #14110E;
        --ai-text-body: #4B4640;
        --ai-text-muted: #8A857D;
        --ai-text-faint: #B4AFA7;

        /* ---------- Borders ---------- */
        --ai-border: #EAE6E0;
        --ai-border-strong: #DED8CF;
        --ai-border-orange: rgba(234, 92, 40, 0.28);

        /* ---------- Status ---------- */
        --ai-success: #1E9E5A;
        --ai-success-bg: #E9F8EF;
        --ai-neutral-bg: #F1EFEC;

        /* ---------- Shape / spacing ---------- */
        --ai-radius-sm: 6px;
        --ai-radius-md: 10px;
        --ai-radius-lg: 16px;
        --ai-radius-full: 999px;
        --ai-section-padding: 100px;
        --ai-container-width: 1100px;
        --ai-transition: 0.25s ease;
    }

    /* ========================================
       SECTION
       ======================================== */

    .voice-compare {
        background: var(--ai-bg-warm);
        padding: var(--ai-section-padding) 24px;
    }

    .voice-compare_content {
        max-width: var(--ai-container-width);
        margin: 0 auto;
    }

    /* ---------- Heading ---------- */

    .voice-compare_content--heading {
        max-width: 620px;
        margin: 0 auto 56px;
        text-align: center;
    }

    .voice-compare_content-heading-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin: 0 auto 18px;
        padding: 6px 16px 6px 12px;
        border-radius: var(--ai-radius-full);
        background: var(--ai-bg);
        border: 1px solid var(--ai-border-orange);
    }

    .voice-compare_content-heading-eyebrow span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--ai-gradient);
        flex-shrink: 0;
    }

    .voice-compare_content-heading-eyebrow p {
        margin: 0;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 0.02em;
        color: var(--ai-orange-dark);
    }

    .voice-compare_content-heading-text {
        color: var(--ai-text-heading);
        font-size: 44px;
        font-weight: 700;
        letter-spacing: -0.02em;
        margin: 0 0 14px;
    }

    .voice-compare_content-heading-para {
        color: var(--ai-text-muted);
        font-size: 1.05rem;
        line-height: 1.6;
        margin: 0;
    }

    /* ========================================
       COMPARISON TABLE
       ======================================== */

    .voice-compare_content--container {
        position: relative;
        display: flex;
        flex-direction: column;
    }

    .voice-compare_content--container-heading,
    .voice-compare_content--container-body {
        display: grid;
        grid-template-columns: 1.2fr 1fr 1fr;
        align-items: center;
        column-gap: 20px;
    }

    /* ---------- Header row ---------- */

    .voice-compare_content--container-heading {
        background: var(--ai-success);
        border: 1px solid var(--ai-border);
        border-top-left-radius: 16px;
        border-top-right-radius: 16px;
        padding: 28px 0 18px;
    }

    .voice-compare_content--container-head {
        margin: 0;
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 0.02em;
        color: var(--ai-bg-warm);
        padding: 0 20px;
    }

    .voice-compare_content--container-head:first-child {
        color: var(--ai-bg-warm);
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.06em;
        border-right: 1px solid var(--ai-bg);
    }

    .voice-compare_content--container-head:nth-child(2) {
        text-align: center;
        border-right: 1px solid var(--ai-bg);
    }

    .voice-compare_content--container-head:nth-child(3) {
        text-align: center;
        position: relative;
        color: var(--ai-bg-warm);
        font-size: 1rem;
        font-weight: 700;
        padding-top: 14px;
    }

    .voice-compare_content--container-head:nth-child(3)::before {
        content: "RECOMMENDED";
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        color: #FFFFFF;
        background: var(--ai-gradient);
        padding: 5px 12px;
        border-radius: var(--ai-radius-full);
        white-space: nowrap;
    }

    /* ---------- Body rows ---------- */

    .voice-compare_content--container-body {
        background: var(--ai-bg);
        border: 1px solid var(--ai-border);
        border-bottom: none;
        padding: 20px 0;
    }

    .voice-compare_content--container-body:first-of-type {
        border-top-left-radius: var(--ai-radius-lg);
        border-top-right-radius: var(--ai-radius-lg);
    }

    .voice-compare_content--container-body:last-of-type {
        border-bottom: 1px solid var(--ai-border);
        border-bottom-left-radius: var(--ai-radius-lg);
        border-bottom-right-radius: var(--ai-radius-lg);
    }

    .voice-compare_content--container-Feature {
        margin: 0;
        padding: 0 20px;
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--ai-text-heading);
    }

    .voice-compare_content--container-traditional,
    .voice-compare_content--container-voice {
        margin: 0;
        padding: 14px 18px;
        font-size: 0.88rem;
        font-weight: 400;
        line-height: 1.5;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    .voice-compare_content--container-traditional {
        color: var(--ai-text-muted);
    }

    .voice-compare_content--container-traditional::before {
        content: "";
        flex-shrink: 0;
        margin-top: 5px;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: var(--ai-neutral-bg);
        border: 1px solid var(--ai-border-strong);
        background-image: linear-gradient(45deg, transparent 45%, var(--ai-text-faint) 45%, var(--ai-text-faint) 55%, transparent 55%),
            linear-gradient(-45deg, transparent 45%, var(--ai-text-faint) 45%, var(--ai-text-faint) 55%, transparent 55%);
    }

    /* highlighted AI column */
    .voice-compare_content--container-voice {
        position: relative;
        color: var(--ai-text-heading);
        font-weight: 500;
        /* background: var(--ai-gradient-soft); */
        border-radius: var(--ai-radius-md);
        margin: -2px 4px -2px 0;
    }

    .voice-compare_content--container-voice::before {
        content: "";
        flex-shrink: 0;
        margin-top: 4px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: var(--ai-success);
        -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M20 6 9 17l-5-5'/%3E%3C/svg%3E") center / 60% no-repeat;
        mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M20 6 9 17l-5-5'/%3E%3C/svg%3E") center / 60% no-repeat;
    }

    .voice-compare_content--container-body:hover {
        background: var(--ai-bg-muted);
    }

    .voice-compare_content--container-body:hover .voice-compare_content--container-voice {
        background: rgba(244, 81, 30, 0.1);
    }

    /* ========================================
       RESPONSIVE — stack into cards
       ======================================== */

    @media (max-width: 720px) {

        .voice-compare_content-heading-text {
            font-size: 38px;
        }

        .voice-compare_content--container-heading {
            display: none;
        }

        .voice-compare_content--container-body {
            grid-template-columns: 1fr;
            row-gap: 10px;
            padding: 18px 16px;
            margin-bottom: 14px;
            border-radius: var(--ai-radius-lg) !important;
        }

        .voice-compare_content--container-Feature {
            padding: 0 0 4px;
            font-size: 1rem;
        }

        .voice-compare_content--container-traditional,
        .voice-compare_content--container-voice {
            padding: 10px 12px;
            border-radius: var(--ai-radius-sm);
            margin: 0;
        }

        .voice-compare_content--container-traditional {
            background: var(--ai-neutral-bg);
        }

        .voice-compare_content--container-traditional::before,
        .voice-compare_content--container-voice::before {
            display: none;
        }

        .voice-compare_content--container-traditional::after,
        .voice-compare_content--container-voice::after {
            display: block;
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
    }
</style>

<section class="voice-compare">
    <div class="voice-compare_content">
        <div class="voice-compare_content--heading">
            <div class="voice-compare_content-heading-eyebrow">
                <span></span>
                <p>Why Upgrade ?</p>
            </div>
            <h1 class="voice-compare_content-heading-text">AI Voice vs Traditional IVR</h1>
            <p class="voice-compare_content-heading-para">See how intelligent voice automation transforms the way businesses handle customer calls.</p>
        </div>
        <div class="voice-compare_content--container">
            <div class="voice-compare_content--container-heading">
                <h2 class="voice-compare_content--container-head">Feature</h2>
                <h2 class="voice-compare_content--container-head">Traditional IVR</h2>
                <h2 class="voice-compare_content--container-head">AI Voice Agent</h2>
            </div>
            <div class="voice-compare_content--container-body">
                <h3 class="voice-compare_content--container-Feature">Conversation Style</h3>
                <h3 class="voice-compare_content--container-traditional">Press 1 for Sales, Press 2 for Support</h3>
                <h3 class="voice-compare_content--container-voice">Natural conversations with open-ended questions</h3>
            </div>
            <div class="voice-compare_content--container-body">
                <h3 class="voice-compare_content--container-Feature">Language Support</h3>
                <h3 class="voice-compare_content--container-traditional">Limited to predefined languages</h3>
                <h3 class="voice-compare_content--container-voice">Supports multilingual conversations</h3>
            </div>
            <div class="voice-compare_content--container-body">
                <h3 class="voice-compare_content--container-Feature">Context Awareness</h3>
                <h3 class="voice-compare_content--container-traditional">Each interaction follows a fixed flow</h3>
                <h3 class="voice-compare_content--container-voice">Understands conversation context and intent</h3>
            </div>
            <div class="voice-compare_content--container-body">
                <h3 class="voice-compare_content--container-Feature">Customer Queries</h3>
                <h3 class="voice-compare_content--container-traditional">Handles predefined questions and options</h3>
                <h3 class="voice-compare_content--container-voice">Handles dynamic and unexpected questions</h3>
            </div>
            <div class="voice-compare_content--container-body">
                <h3 class="voice-compare_content--container-Feature">Call Routing</h3>
                <h3 class="voice-compare_content--container-traditional">Rule-based menu navigation</h3>
                <h3 class="voice-compare_content--container-voice">Intelligently routes based on caller intent</h3>
            </div>
            <div class="voice-compare_content--container-body">
                <h3 class="voice-compare_content--container-Feature">Setup & Changes</h3>
                <h3 class="voice-compare_content--container-traditional">Requires manual flow configuration</h3>
                <h3 class="voice-compare_content--container-voice">AI workflows can be configured and updated quickly</h3>
            </div>
            <div class="voice-compare_content--container-body">
                <h3 class="voice-compare_content--container-Feature">Availability</h3>
                <h3 class="voice-compare_content--container-traditional">Dependent on predefined call flows</h3>
                <h3 class="voice-compare_content--container-voice">Available 24/7 for automated conversations</h3>
            </div>
            <div class="voice-compare_content--container-body">
                <h3 class="voice-compare_content--container-Feature">Scalability</h3>
                <h3 class="voice-compare_content--container-traditional">Requires additional infrastructure as volume grows</h3>
                <h3 class="voice-compare_content--container-voice">Handles large call volumes through automated agents</h3>
            </div>
        </div>
    </div>
</section>