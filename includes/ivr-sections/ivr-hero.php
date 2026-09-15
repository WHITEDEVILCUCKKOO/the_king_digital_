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

    .ivr-about {
        position: relative;
        width: 100%;
        padding: 40px 80px;
        overflow: hidden;
        background: var(--ivr-bg);
    }

    .ivr-about_content {
        position: relative;
        z-index: 10;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 54px;
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
    }

    .ivr-about_content-text {
        max-width: 480px;
        flex: 0 0 auto;
    }

    .ivr-about_content-text .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--ivr-primary-dark);
        background: var(--ivr-card);
        border: 1px solid var(--ivr-border-purple);
        padding: 6px 14px;
        border-radius: var(--ivr-radius-pill);
        box-shadow: var(--ivr-shadow-sm);
        margin-bottom: 20px;
    }

    .ivr-about_content-text .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-about_content-text h2 {
        font-size: clamp(28px, 3.4vw, 44px);
        line-height: 1.18;
        font-weight: 700;
        margin: 0 0 20px;
        color: var(--ivr-text-primary);
    }

    .ivr-about_content-text p {
        font-size: 16px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0 0 18px;
    }

    .ivr-about_content-text p:last-of-type {
        margin-bottom: 32px;
    }

    .ivr-about_content-text .ivr-about_cta {
        display: none;
        align-items: center;
        justify-content: center;
        padding: 14px 28px;
        border-radius: var(--ivr-radius-pill);
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        background: var(--ivr-gradient-primary);
        color: var(--ivr-text-light);
        box-shadow: var(--ivr-glow-purple);
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast);
    } 

    /* .ivr-about_content-text .ivr-about_cta:hover {
        transform: translateY(-2px);
        box-shadow: var(--ivr-glow-blue);
    } */

    .ivr-about_content-features {
        flex: 1 1 auto;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
    }

    .ivr-feature-card {
        position: relative;
        background: var(--ivr-card);
        border: 1px solid var(--ivr-border);
        border-radius: var(--ivr-radius-lg);
        padding: 26px 22px;
        box-shadow: var(--ivr-shadow-sm);
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast);
    }

    .ivr-feature-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--ivr-shadow-md);
    }

    .ivr-feature-card--icon {
        width: 44px;
        height: 44px;
        border-radius: var(--ivr-radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
        background: var(--ivr-gradient-ai);
        color: var(--ivr-text-light);
        font-size: 18px;
    }

    .ivr-feature-card h3 {
        font-size: 18px;
        font-weight: 700;
        margin: 0 0 8px;
        color: var(--ivr-text-primary);
    }

    .ivr-feature-card p {
        font-size: 14px;
        line-height: 1.6;
        color: var(--ivr-text-muted);
        margin: 0;
    }

    @media (max-width: 900px) {
        .ivr-about {
            padding: 60px 20px;
        }

        .ivr-about_content {
            flex-direction: column;
        }

        .ivr-about_content-text {
            max-width: 100%;
            text-align: center;
        }

        .ivr-about_content-text .ivr-about_cta {
            margin: 0 auto;
        }

        .ivr-about_content-features {
            grid-template-columns: 1fr 1fr;
            width: 100%;
        }
    }

    @media (max-width: 560px) {
        .ivr-about_content-features {
            grid-template-columns: 1fr;
        }
    }

    .decor-about-glow {
        position: absolute;
        bottom: -160px;
        right: -140px;
        width: 460px;
        height: 460px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .14;
        filter: blur(70px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 14s ease-in-out infinite;
    }

    .decor-about-grid {
        position: absolute;
        top: -10px;
        left: -20px;
        width: 220px;
        height: 200px;
        background-image: radial-gradient(circle, var(--ivr-primary) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at top left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at top left, black 0%, black 25%, transparent 72%);
        opacity: .22;
        z-index: 0;
        pointer-events: none;
    }

    /* ////////////////////////// About / Value Section End ///////////////////////////////////// */
</style>

<!-- /////////////////////////////////// About / Value Section //////////////////////////////////////-->
<section class="ivr-about" id="about-section">
    <div class="decor-about-glow"></div>
    <div class="decor-about-grid"></div>

    <div class="ivr-about_content">
        <div class="ivr-about_content-text">
            <span class="eyebrow"><i></i>CLOUD-HOSTED IVR SOLUTION</span>
            <h2>How to Turn Dropped Calls Into Sales</h2>
            <p>Every busy tone is a lost customer. When urgent buyers call, long hold times, manual line transfers, and restrictive office hours drive them straight to your competitors.</p>
            <p>An enterprise-grade IVR service transforms your voice channels into an automated, 24/7 sales and customer support engine — answering thousands of calls simultaneously without missing a beat. Hosted in the cloud, it gives fast-growing startups, e-commerce brands, and large enterprises alike the backbone they need for a smooth, professional customer experience at a fraction of the cost.</p>
            <!-- <a href="contact.php" class="ivr-about_cta">Talk to an Expert</a> -->
        </div>

        <div class="ivr-about_content-features">
            <div class="ivr-feature-card">
                <div class="ivr-feature-card--icon">
                    <i class="fa-solid fa-route"></i>
                </div>
                <h3>Intelligent Call Routing</h3>
                <p>Automatically direct every caller to the right department or agent, every single time.</p>
            </div>

            <div class="ivr-feature-card">
                <div class="ivr-feature-card--icon">
                    <i class="fa-solid fa-hand-pointer"></i>
                </div>
                <h3>Self-Service Options</h3>
                <p>Let customers resolve common queries instantly, without waiting on hold for an agent.</p>
            </div>

            <div class="ivr-feature-card">
                <div class="ivr-feature-card--icon">
                    <i class="fa-solid fa-language"></i>
                </div>
                <h3>Multi-Language Prompts</h3>
                <p>Greet and guide callers in the language they're most comfortable with.</p>
            </div>

            <div class="ivr-feature-card">
                <div class="ivr-feature-card--icon">
                    <i class="fa-solid fa-arrows-rotate"></i>
                </div>
                <h3>Easy CRM Integration</h3>
                <p>Sync call data seamlessly with your existing CRM for one unified customer view.</p>
            </div>
        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// About / Value Section End ///////////////////////////////////////////-->
