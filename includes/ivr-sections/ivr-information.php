<style>
    :root {
        /* Primary */
        --ivr-primary: #6366F1;
        --ivr-primary-dark: #4F46E5;
        --ivr-primary-light: #818CF8;

        /* Secondary */
        --ivr-blue: #2563EB;
        --ivr-blue-dark: #1D4ED8;
        --ivr-blue-light: #60A5FA;

        /* Accent */
        --ivr-cyan: #22D3EE;
        --ivr-purple: #8B5CF6;
        --ivr-violet: #A78BFA;

        /* Backgrounds */
        --ivr-bg: #F8FAFC;
        --ivr-bg-light: #EEF2FF;
        --ivr-bg-blue: #EFF6FF;
        --ivr-bg-dark: #0F172A;
        --ivr-bg-dark-alt: #111827;

        /* Cards */
        --ivr-card: #FFFFFF;
        --ivr-card-dark: #1E293B;
        --ivr-border: #E2E8F0;
        --ivr-border-purple: #C7D2FE;

        /* Text */
        --ivr-text-primary: #0F172A;
        --ivr-text-secondary: #475569;
        --ivr-text-muted: #64748B;
        --ivr-text-light: #F8FAFC;
        --ivr-text-muted-light: #A5B4CB;

        /* Gradients */
        --ivr-gradient-primary: linear-gradient(135deg, #6366F1 0%, #2563EB 100%);
        --ivr-gradient-ai: linear-gradient(135deg, #8B5CF6 0%, #6366F1 45%, #2563EB 100%);
        --ivr-gradient-glow: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
        --ivr-gradient-dark: linear-gradient(135deg, #0F172A 0%, #1E1B4B 50%, #172554 100%);

        /* Glows */
        --ivr-glow-purple: 0 0 40px rgba(139, 92, 246, 0.25);
        --ivr-glow-blue: 0 0 40px rgba(37, 99, 235, 0.25);
        --ivr-glow-cyan: 0 0 40px rgba(34, 211, 238, 0.20);

        /* Shadows */
        --ivr-shadow-sm: 0 4px 12px rgba(15, 23, 42, 0.06);
        --ivr-shadow-md: 0 10px 30px rgba(15, 23, 42, 0.10);
        --ivr-shadow-lg: 0 20px 50px rgba(15, 23, 42, 0.14);

        /* Border Radius */
        --ivr-radius-sm: 8px;
        --ivr-radius-md: 14px;
        --ivr-radius-lg: 20px;
        --ivr-radius-xl: 28px;
        --ivr-radius-pill: 999px;

        /* Animation */
        --ivr-transition-fast: 0.2s ease;
        --ivr-transition: 0.35s ease;
        --ivr-transition-slow: 0.6s ease;
    }

    /* //////////////////////////////////// Information Section Start ///////////////////////////////////// */

    .ivr-information {
        position: relative;
        width: 100%;
        min-height: 578px;
        display: flex;
        align-items: center;
        padding: 80px;
        overflow: hidden;
        background: var(--ivr-gradient-dark);
    }

    .ivr-information_content {
        position: relative;
        z-index: 10;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        gap: 44px;
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
    }

    .ivr-information_content--text {
        flex: 1;
        max-width: 700px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .ivr-information_content--heading {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 18px;
    }

    /* ── Eyebrow badge + pulsing orb ── */
    .ivr-information_content--heading .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        background: rgba(99, 102, 241, 0.15);
        border: 1px solid rgba(139, 92, 246, 0.35);
        border-radius: var(--ivr-radius-pill);
        width: fit-content;
        padding: 7px 16px;
    }

    .ivr-information_content--heading .eyebrow span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--ivr-cyan);
        position: relative;
        isolation: isolate;
        flex-shrink: 0;
        box-shadow: 0 0 8px var(--ivr-cyan);
    }

    .ivr-information_content--heading .eyebrow span::before,
    .ivr-information_content--heading .eyebrow span::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: var(--ivr-cyan);
        z-index: -1;
        transform: translate(-50%, -50%) scale(1);
        animation: eyebrow-pulse 2s infinite ease-out;
    }

    .ivr-information_content--heading .eyebrow span::after {
        animation-delay: 1s;
    }

    @keyframes eyebrow-pulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: .8;
        }

        100% {
            transform: translate(-50%, -50%) scale(4);
            opacity: 0;
        }
    }

    .ivr-information_content--heading .eyebrow p {
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 0.09em;
        text-transform: uppercase;
        color: #C7D2FE;
        margin: 0;
    }

    .ivr-information_content--heading h1 {
        font-size: clamp(30px, 4vw, 45px);
        line-height: 1.25;
        text-align: center;
        font-weight: 700;
        margin: 0;
        color: #fff;
    }

    .ivr-information_content--heading h1 span {
        background: var(--ivr-gradient-glow);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ivr-information_content--info p {
        text-align: center;
        color: var(--ivr-text-muted-light);
        font-size: 16px;
        line-height: 1.7;
        max-width: 560px;
        margin: 0 auto;
    }

    /* ── Stat cards ── */
    .ivr-information_content--card {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .ivr-information_content--card-item {
        position: relative;
        width: 190px;
        padding: 22px 18px;
        border-radius: var(--ivr-radius-lg);
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 6px;
        transition: transform var(--ivr-transition), border-color var(--ivr-transition), box-shadow var(--ivr-transition);
    }

    .ivr-information_content--card-item:hover {
        transform: translateY(-6px);
        border-color: rgba(139, 92, 246, 0.5);
        box-shadow: var(--ivr-glow-purple);
    }

    .ivr-information_content--card-item strong {
        font-size: 26px;
        font-weight: 800;
        background: var(--ivr-gradient-glow);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ivr-information_content--card-item p {
        font-size: 13px;
        color: var(--ivr-text-muted-light);
        margin: 0;
        font-weight: 600;
        letter-spacing: .02em;
    }

    /* ── Decor 1: soft glow blob, top-right ── */
    .decor-info-glow {
        position: absolute;
        top: -200px;
        right: -180px;
        width: 460px;
        height: 460px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .16;
        filter: blur(70px);
        z-index: 0;
        pointer-events: none;
        animation: info-glow-drift 11s ease-in-out infinite;
    }

    @keyframes info-glow-drift {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(-25px, 25px) scale(1.08);
        }
    }

    /* ── Decor 2: rotating dashed ring, bottom-left ── */
    .decor-info-ring {
        position: absolute;
        bottom: -130px;
        left: -130px;
        width: 320px;
        height: 320px;
        border: 2px dashed var(--ivr-primary-light);
        border-radius: 50%;
        opacity: .22;
        z-index: 0;
        pointer-events: none;
        animation: info-ring-spin 24s linear infinite;
    }

    .decor-info-ring::before {
        content: '';
        position: absolute;
        inset: 36px;
        border: 2px dashed var(--ivr-cyan);
        border-radius: 50%;
        opacity: .5;
    }

    @keyframes info-ring-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* ── Decor 3: faint dot-grid, top-left ── */
    .decor-info-grid {
        position: absolute;
        top: -10px;
        left: -10px;
        width: 240px;
        height: 200px;
        background-image: radial-gradient(circle, var(--ivr-blue-light) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at top left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at top left, black 0%, black 25%, transparent 72%);
        opacity: .18;
        z-index: 0;
        pointer-events: none;
        animation: info-grid-shift 9s ease-in-out infinite;
    }

    @keyframes info-grid-shift {

        0%,
        100% {
            background-position: 0 0;
        }

        50% {
            background-position: 8px -8px;
        }
    }

    /* ── Decor 4: small floating orbs scattered across ── */
    .decor-info-orb {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        z-index: 0;
    }

    .decor-info-orb.o1 {
        width: 8px;
        height: 8px;
        top: 60px;
        right: 130px;
        background: var(--ivr-cyan);
        opacity: .6;
        box-shadow: 0 0 10px var(--ivr-cyan);
        animation: info-orb-1 5.5s ease-in-out infinite;
    }

    .decor-info-orb.o2 {
        width: 12px;
        height: 12px;
        bottom: 120px;
        right: 60px;
        background: var(--ivr-purple);
        opacity: .5;
        box-shadow: 0 0 10px var(--ivr-purple);
        animation: info-orb-2 6.5s ease-in-out infinite .4s;
    }

    .decor-info-orb.o3 {
        width: 6px;
        height: 6px;
        top: 140px;
        left: 90px;
        background: var(--ivr-primary-light);
        opacity: .55;
        animation: info-orb-1 6s ease-in-out infinite .2s;
    }

    @keyframes info-orb-1 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-10px, -14px);
        }
    }

    @keyframes info-orb-2 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(10px, 12px);
        }
    }

    @media (max-width: 900px) {
        .ivr-information {
            padding: 60px 24px;
        }

        .ivr-information_content--card {
            gap: 14px;
        }

        .ivr-information_content--card-item {
            width: 150px;
            padding: 18px 14px;
        }
    }
</style>

<!-- ////////////////////////////////////////////////// Information Section //////////////////////////////////////-->
<section class="ivr-information">
    <div class="decor-info-glow"></div>
    <div class="decor-info-ring"></div>
    <div class="decor-info-grid"></div>
    <div class="decor-info-orb o1"></div>
    <div class="decor-info-orb o2"></div>
    <div class="decor-info-orb o3"></div>

    <div class="ivr-information_content">
        <div class="ivr-information_content--text">
            <div class="ivr-information_content--heading">
                <div class="eyebrow">
                    <span></span>
                    <p>VOICE THAT WORKS FOR YOU</p>
                </div>
                <h1>
                    Connect every customer to the
                    <span>right conversation.</span>
                </h1>
            </div>
            <div class="ivr-information_content--info">
                <p>
                    From automated IVR and toll-free numbers
                    to missed-call campaigns and outbound
                    voice, manage your business communication
                    from one ecosystem.
                </p>
            </div>
        </div>
        <div class="ivr-information_content--visual">
            <div class="ivr-information_content--card">
                <div class="ivr-information_content--card-item">
                    <strong>24/7</strong>
                    <p>Voice</p>
                </div>
                <div class="ivr-information_content--card-item">
                    <strong>Automate</strong>
                    <p>Calls</p>
                </div>
                <div class="ivr-information_content--card-item">
                    <strong>Scale</strong>
                    <p>Easily</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Information Section End ///////////////////////////////////////////-->