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
        --ivr-gradient-glow: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
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

    .ivr-why {
        position: relative;
        width: 100%;
        min-height: 640px;
        display: flex;
        align-items: center;
        padding: 96px 80px;
        overflow: hidden;
        background: var(--ivr-bg-blue);
        isolation: isolate;
    }

    .ivr-why::before,
    .ivr-why::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        filter: blur(90px);
        z-index: 0;
        pointer-events: none;
    }

    .ivr-why::before {
        width: 480px;
        height: 480px;
        top: -180px;
        left: -120px;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.45) 0%, rgba(139, 92, 246, 0) 70%);
    }

    .ivr-why::after {
        width: 520px;
        height: 520px;
        bottom: -220px;
        right: -140px;
        background: radial-gradient(circle, rgba(34, 211, 238, 0.35) 0%, rgba(34, 211, 238, 0) 70%);
    }

    .ivr-why_noise {
        position: absolute;
        inset: 0;
        z-index: 1;
        opacity: 0.35;
        background-image: radial-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px);
        background-size: 26px 26px;
        pointer-events: none;
    }

    .ivr-why_content {
        position: relative;
        z-index: 10;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        gap: 52px;
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
    }

    .ivr-why_content--heading {
        max-width: 720px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 14px;
    }

    /* .ivr-why_eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 16px;
        border-radius: var(--ivr-radius-pill);
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        color: var(--ivr-violet);
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.06em;
        text-transform: uppercase;
    }

    .ivr-why_eyebrow-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--ivr-cyan);
        box-shadow: 0 0 8px var(--ivr-cyan);
    } */

    .ivr-why_content--heading h1 {
        font-size: 40px;
        line-height: 1.2;
        font-weight: 800;
        text-align: center;
        color: var(--ivr-text-primary);
        margin: 0;
        letter-spacing: -0.01em;
    }

    .ivr-why_content--heading h1 span {
        font-size: 45px;
        font-weight: 900;
        background: var(--ivr-gradient-glow);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ivr-why_content--card {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-auto-rows: 1fr;
        gap: 20px;
        width: 100%;
    }

    .ivr-why_content--card-items {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 14px;
        padding: 28px 26px;
        border-radius: var(--ivr-radius-lg);

        /* Glassmorphism core */
        background: linear-gradient(160deg, rgba(255, 255, 255, 0.10) 0%, rgba(255, 255, 255, 0.04) 100%);
        border: 1px solid rgba(255, 255, 255, 0.14);
        backdrop-filter: blur(18px) saturate(140%);
        -webkit-backdrop-filter: blur(18px) saturate(140%);
        box-shadow:
            0 8px 32px rgba(2, 6, 23, 0.35),
            inset 0 1px 0 rgba(255, 255, 255, 0.16);

        transition: transform var(--ivr-transition), box-shadow var(--ivr-transition), border-color var(--ivr-transition), background var(--ivr-transition);
    }

    /* Top hairline sheen — sells the "glass edge" */
    .ivr-why_content--card-items::before {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: inherit;
        padding: 1px;
        background: linear-gradient(160deg, rgba(255, 255, 255, 0.35), rgba(255, 255, 255, 0) 40%);
        -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
    }

    .ivr-why_content--card-items:hover {
        transform: translateY(-6px);
        border-color: rgba(255, 255, 255, 0.28);
        background: linear-gradient(160deg, rgba(255, 255, 255, 0.16) 0%, rgba(255, 255, 255, 0.06) 100%);
        box-shadow:
            0 20px 45px rgba(2, 6, 23, 0.45),
            var(--ivr-glow-purple),
            inset 0 1px 0 rgba(255, 255, 255, 0.22);
    }

    .ivr-why_icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--ivr-gradient-ai);
        box-shadow: 0 6px 18px rgba(99, 102, 241, 0.35);
        flex-shrink: 0;
    }

    .ivr-why_icon svg {
        width: 22px;
        height: 22px;
        stroke: #fff;
        fill: none;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .ivr-why_content--card-items h2 {
        font-size: 17px;
        font-weight: 700;
        color: var(--ivr-text-primary);
        margin: 0;
        letter-spacing: -0.01em;
    }

    .ivr-why_content--card-items p {
        font-size: 14.5px;
        line-height: 1.55;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    @media (prefers-reduced-motion: reduce) {
        .ivr-why_content--card-items {
            transition: none;
        }

        .ivr-why_content--card-items:hover {
            transform: none;
        }
    }

    @media (max-width: 640px) {
        .ivr-why {
            padding: 64px 24px;
        }

        .ivr-why_content--heading h1 {
            font-size: 28px;
        }

        .ivr-why_content--heading h1 span {
            font-size: 31px;
        }
    }
</style>


<section class="ivr-why">
    <div class="ivr-why_noise"></div>
    <div class="ivr-why_content">
        <div class="ivr-why_content--heading">
            <!-- <span class="ivr-why_eyebrow"><span class="ivr-why_eyebrow-dot"></span>Why IVR</span> -->
            <h1>What makes an <span>IVR system</span> essential for modern businesses?</h1>
        </div>

        <div class="ivr-why_content--card">
            <div class="ivr-why_content--card-items">
                <div class="ivr-why_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="rgb(255, 255, 255)" d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64l0 11c0 42.4 16.9 83.1 46.9 113.1l67.9 67.9-67.9 67.9C48.9 353.9 32 394.6 32 437l0 11c-17.7 0-32 14.3-32 32s14.3 32 32 32l320 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-11c0-42.4-16.9-83.1-46.9-113.1l-67.9-67.9 67.9-67.9c30-30 46.9-70.7 46.9-113.1l0-11c17.7 0 32-14.3 32-32S369.7 0 352 0L32 0zM96 75l0-11 192 0 0 11c0 19-5.6 37.4-16 53L112 128c-10.3-15.6-16-34-16-53zm16 309c3.5-5.3 7.6-10.3 12.1-14.9l67.9-67.9 67.9 67.9c4.6 4.6 8.6 9.6 12.2 14.9L112 384z" />
                    </svg>
                </div>
                <h2>Instant Call Routing</h2>
                <p>Connects callers to the correct department with over 99% accuracy using keypad or voice inputs.</p>
            </div>

            <div class="ivr-why_content--card-items">
                <div class="ivr-why_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="rgb(255, 255, 255)" d="M224 0l0 64c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-64 32 0c35.3 0 64 28.7 64 64l0 128c0 5.5-.7 10.9-2 16l-252 0c-1.3-5.1-2-10.5-2-16l0-128c0-35.3 28.7-64 64-64l32 0zm96 512c-11.2 0-21.8-2.9-31-8 9.5-16.5 15-35.6 15-56l0-128c0-20.4-5.5-39.5-15-56 9.2-5.1 19.7-8 31-8l32 0 0 64c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-64 32 0c35.3 0 64 28.7 64 64l0 128c0 35.3-28.7 64-64 64l-128 0zM0 320c0-35.3 28.7-64 64-64l32 0 0 64c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-64 32 0c35.3 0 64 28.7 64 64l0 128c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 320z" />
                    </svg>
                </div>
                <h2>High Call Containment</h2>
                <p>Resolves up to 60% of routine customer inquiries entirely through automated self-service.</p>
            </div>

            <div class="ivr-why_content--card-items">
                <div class="ivr-why_icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 3v18h18" />
                        <path d="M7 15l3-3 3 3 5-6" />
                    </svg>
                </div>
                <h2>Scalable Workload Management</h2>
                <p>Effortlessly handles sudden spikes in call volume during peak hours or promotional campaigns.</p>
            </div>

            <div class="ivr-why_content--card-items">
                <div class="ivr-why_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path fill="rgb(255, 255, 255)" d="M352 0c0-17.7-14.3-32-32-32S288-17.7 288 0l0 64-96 0c-53 0-96 43-96 96l0 224c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-224c0-53-43-96-96-96l-96 0 0-64zM160 368c0-13.3 10.7-24 24-24l32 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-32 0c-13.3 0-24-10.7-24-24zm120 0c0-13.3 10.7-24 24-24l32 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-32 0c-13.3 0-24-10.7-24-24zm120 0c0-13.3 10.7-24 24-24l32 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-32 0c-13.3 0-24-10.7-24-24zM224 176a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm144 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM64 224c0-17.7-14.3-32-32-32S0 206.3 0 224l0 96c0 17.7 14.3 32 32 32s32-14.3 32-32l0-96zm544-32c-17.7 0-32 14.3-32 32l0 96c0 17.7 14.3 32 32 32s32-14.3 32-32l0-96c0-17.7-14.3-32-32-32z" />
                    </svg>
                </div>
                <h2>AI and Natural Language Processing (NLP)</h2>
                <p>Interprets conversational human speech, letting customers explain their issues in their own words instead of navigating endless sub-menus.</p>
            </div>

            <div class="ivr-why_content--card-items">
                <div class="ivr-why_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="rgb(255, 255, 255)" d="M224 128a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM176 336c0-61.9 50.1-112 112-112s112 50.1 112 112l0 8c0 13.3-10.7 24-24 24l-176 0c-13.3 0-24-10.7-24-24l0-8zM392 144a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm27.2 100.4c9.1-2.9 18.8-4.4 28.8-4.4 53 0 96 43 96 96l0 10.7c0 11.8-9.6 21.3-21.3 21.3l-78.8 0c2.7-7.5 4.1-15.6 4.1-24l0-8c0-34.1-10.6-65.7-28.8-91.6zm-262.4 0c-18.2 26-28.8 57.5-28.8 91.6l0 8c0 8.4 1.4 16.5 4.1 24l-78.8 0C41.6 368 32 358.4 32 346.7L32 336c0-53 43-96 96-96 10 0 19.7 1.5 28.8 4.4zM72 144a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zM0 440c0-13.3 10.7-24 24-24l528 0c13.3 0 24 10.7 24 24s-10.7 24-24 24L24 464c-13.3 0-24-10.7-24-24z" />
                    </svg>
                </div>
                <h2>Queue Callbacks</h2>
                <p>Offers waiting customers the option to hang up and receive a call back when an agent becomes available, preserving customer satisfaction.</p>
            </div>

            <div class="ivr-why_content--card-items">
                <div class="ivr-why_icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9" />
                        <path d="M12 7v5l3 3" />
                    </svg>
                </div>
                <h2>Continuous Availability</h2>
                <p>Provides customers with round-the-clock support for basic inquiries without hiring overnight staff.</p>
            </div>
        </div>
    </div>
</section>