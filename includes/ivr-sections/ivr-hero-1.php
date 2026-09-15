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

    /* ////////////////////////// IVR Hero Section ///////////////////////////////////// */

    .ivr-hero {
        position: relative;
        width: 100%;
        padding: 40px 80px 60px;
        overflow: hidden;
        background: linear-gradient(180deg, var(--ivr-bg-light) 0%, var(--ivr-bg) 55%);
    }

    .ivr-hero_glow {
        position: absolute;
        top: -120px;
        right: -100px;
        width: 520px;
        height: 520px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .18;
        filter: blur(90px);
        z-index: 0;
        pointer-events: none;
        animation: ivr-hero-blob-drift 16s ease-in-out infinite;
    }

    .ivr-hero_grid {
        position: absolute;
        bottom: -10px;
        left: -20px;
        width: 220px;
        height: 200px;
        background-image: radial-gradient(circle, var(--ivr-primary) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        opacity: .2;
        z-index: 0;
        pointer-events: none;
    }

    .ivr-hero_content {
        position: relative;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 60px;
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
    }

    .ivr-hero_text {
        max-width: 500px;
        flex: 0 0 auto;
    }

    .ivr-hero_eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--ivr-primary-dark);
        background: var(--ivr-card);
        border: 1px solid var(--ivr-border-purple);
        padding: 6px 14px;
        border-radius: var(--ivr-radius-pill);
        box-shadow: var(--ivr-shadow-sm);
        margin-bottom: 22px;
    }

    .ivr-hero_eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-hero_text h1 {
        font-size: clamp(32px, 4vw, 52px);
        line-height: 1.15;
        font-weight: 800;
        margin: 0 0 20px;
        color: var(--ivr-text-primary);
    }

    .ivr-hero_text h1 span {
        background: var(--ivr-gradient-primary);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .ivr-hero_text p {
        font-size: 16px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0 0 32px;
    }

    .ivr-hero_cta {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 15px 30px;
        border-radius: var(--ivr-radius-pill);
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        background: var(--ivr-gradient-primary);
        color: var(--ivr-text-light);
        box-shadow: var(--ivr-glow-purple);
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast);
    }

    .ivr-hero_cta i {
        font-size: 13px;
        transition: transform var(--ivr-transition-fast);
    }

    .ivr-hero_cta:hover {
        transform: translateY(-2px);
        box-shadow: var(--ivr-glow-blue);
    }

    .ivr-hero_cta:hover i {
        transform: translateX(3px);
    }


    /* Visual */

    .ivr-hero_visual {
        position: relative;
        flex: 1 1 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 420px;
    }

    .ivr-hero_visual-blob {
        position: absolute;
        width: 360px;
        height: 360px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        opacity: .16;
        z-index: 0;
    }

    .ivr-hero_visual-card {
        position: relative;
        z-index: 2;
        width: 280px;
        padding: 36px 28px;
        border-radius: var(--ivr-radius-xl);
        background: var(--ivr-gradient-dark);
        box-shadow: var(--ivr-shadow-lg);
        text-align: center;
        animation: ivr-hero-float 6s ease-in-out infinite;
    }

    .ivr-hero_visual-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 22px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--ivr-gradient-ai);
        color: var(--ivr-text-light);
        font-size: 32px;
        box-shadow: var(--ivr-glow-purple);
    }

    .ivr-hero_visual-wave {
        display: flex;
        align-items: flex-end;
        justify-content: center;
        gap: 5px;
        height: 32px;
        margin-bottom: 18px;
    }

    .ivr-hero_visual-wave span {
        width: 4px;
        border-radius: 3px;
        background: var(--ivr-cyan);
        display: block;
        animation: ivr-hero-wave 1.2s ease-in-out infinite;
    }

    .ivr-hero_visual-wave span:nth-child(1) {
        height: 40%;
        animation-delay: 0s;
    }

    .ivr-hero_visual-wave span:nth-child(2) {
        height: 70%;
        animation-delay: .1s;
    }

    .ivr-hero_visual-wave span:nth-child(3) {
        height: 100%;
        animation-delay: .2s;
    }

    .ivr-hero_visual-wave span:nth-child(4) {
        height: 60%;
        animation-delay: .3s;
    }

    .ivr-hero_visual-wave span:nth-child(5) {
        height: 85%;
        animation-delay: .4s;
    }

    .ivr-hero_visual-wave span:nth-child(6) {
        height: 45%;
        animation-delay: .5s;
    }

    .ivr-hero_visual-card p {
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .03em;
        color: var(--ivr-text-muted-light);
        margin: 0;
    }

    .ivr-hero_badge {
        position: absolute;
        z-index: 3;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 16px;
        border-radius: var(--ivr-radius-pill);
        background: var(--ivr-card);
        box-shadow: var(--ivr-shadow-md);
        font-size: 13px;
        font-weight: 700;
        color: var(--ivr-text-primary);
        white-space: nowrap;
        animation: ivr-hero-float 5s ease-in-out infinite;
    }

    .ivr-hero_badge i {
        color: var(--ivr-primary);
        font-size: 12px;
    }

    .ivr-hero_badge strong {
        color: var(--ivr-primary-dark);
    }

    .ivr-hero_badge--top {
        top: 4%;
        right: 2%;
        animation-delay: -1s;
    }

    .ivr-hero_badge--left {
        top: 42%;
        left: -8%;
        animation-delay: -2.4s;
    }

    .ivr-hero_badge--bottom {
        bottom: 6%;
        right: -4%;
        animation-delay: -3.6s;
    }


    /* Stat cards row */

    .ivr-hero_stats {
        position: relative;
        z-index: 10;
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: 56px auto 0;
        width: 100%;
    }

    .ivr-hero_stat-card {
        background: var(--ivr-card);
        border: 1px solid var(--ivr-border);
        border-radius: var(--ivr-radius-lg);
        padding: 24px 22px;
        box-shadow: var(--ivr-shadow-sm);
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast);
    }

    .ivr-hero_stat-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--ivr-shadow-md);
    }

    .ivr-hero_stat-card-bar {
        display: block;
        width: 28px;
        height: 3px;
        border-radius: 2px;
        background: var(--ivr-gradient-primary);
        margin-bottom: 14px;
    }

    .ivr-hero_stat-card h3 {
        font-size: 16px;
        font-weight: 700;
        margin: 0 0 8px;
        color: var(--ivr-text-primary);
    }

    .ivr-hero_stat-card p {
        font-size: 14px;
        line-height: 1.6;
        color: var(--ivr-text-muted);
        margin: 0;
    }

    @keyframes ivr-hero-float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

    }

    @keyframes ivr-hero-wave {

        0%,
        100% {
            transform: scaleY(.4);
        }

        50% {
            transform: scaleY(1);
        }

    }

    @keyframes ivr-hero-blob-drift {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-30px, 30px);
        }

    }

    @media (max-width: 980px) {

        .ivr-hero_content {
            flex-direction: column;
            text-align: center;
        }

        .ivr-hero_text {
            max-width: 100%;
        }

        .ivr-hero_cta {
            margin: 0 auto;
        }

        .ivr-hero_badge--left {
            left: 2%;
        }
    }

    @media (max-width: 900px) {

        .ivr-hero {
            padding: 70px 20px 40px;
        }

        .ivr-hero_stats {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 560px) {

        .ivr-hero_stats {
            grid-template-columns: 1fr;
        }

        .ivr-hero_visual {
            min-height: unset;
            padding: 40px 0;
            flex-direction: column;
        }

        .ivr-hero_badge {
            position: static;
            margin: 6px auto;
            animation: none;
        }
    }

    /* ////////////////////////// IVR Hero Section End ///////////////////////////////////// */


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
        display: inline-flex;
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

    .ivr-about_content-text .ivr-about_cta:hover {
        transform: translateY(-2px);
        box-shadow: var(--ivr-glow-blue);
    }

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

<!-- /////////////////////////////////// IVR Hero Section //////////////////////////////////////-->
<section class="ivr-hero" id="ivr-hero-section">
    <div class="ivr-hero_glow"></div>
    <div class="ivr-hero_grid"></div>

    <div class="ivr-hero_content">
        <div class="ivr-hero_text">
            <span class="ivr-hero_eyebrow"><i></i>CLOUD-HOSTED IVR SOLUTION</span>
            <h1>Turn every missed call into <span>business growth</span></h1>
            <p>KingDigital builds enterprise-grade IVR systems that keep every line open, route every caller correctly, and never sleep. Partner with an IVR provider that turns busy signals into booked business.</p>
            <a href="contact.php" class="ivr-hero_cta">Start Automating <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="ivr-hero_visual">
            <div class="ivr-hero_visual-blob"></div>

            <div class="ivr-hero_visual-card">
                <div class="ivr-hero_visual-icon">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <div class="ivr-hero_visual-wave">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <p>Handling call #4,812 live</p>
            </div>

            <div class="ivr-hero_badge ivr-hero_badge--top">
                <i class="fa-solid fa-route"></i>
                AI Call Routing
            </div>

            <div class="ivr-hero_badge ivr-hero_badge--left">
                <i class="fa-solid fa-clock"></i>
                24/7 Availability
            </div>

            <div class="ivr-hero_badge ivr-hero_badge--bottom">
                <i class="fa-solid fa-arrow-trend-up"></i>
                Resolution <strong>&uarr; 68%</strong>
            </div>
        </div>
    </div>

    <div class="ivr-hero_stats">
        <div class="ivr-hero_stat-card">
            <span class="ivr-hero_stat-card-bar"></span>
            <h3>Specialized Expertise</h3>
            <p>Purpose-built call flows for sales, support, and appointment-driven teams across every industry.</p>
        </div>

        <div class="ivr-hero_stat-card">
            <span class="ivr-hero_stat-card-bar"></span>
            <h3>Core Call Automation</h3>
            <p>Comprehensive routing, self-service menus, and real-time call analytics.</p>
        </div>

        <div class="ivr-hero_stat-card">
            <span class="ivr-hero_stat-card-bar"></span>
            <h3>Supporting Services</h3>
            <p>Full-service setup that pairs seamlessly with your CRM, helpdesk, and telephony stack for one unified workflow.</p>
        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// IVR Hero Section End ///////////////////////////////////////////-->

<!-- /////////////////////////////////// About / Value Section //////////////////////////////////////-->
<section class="ivr-about" id="about-section">
    <div class="decor-about-glow"></div>
    <div class="decor-about-grid"></div>

    <div class="ivr-about_content">
        <div class="ivr-about_content-text">
            <span class="eyebrow"><i></i>CLOUD-HOSTED IVR SOLUTION</span>
            <h2>Turn Every Missed Call Into Business Growth</h2>
            <p>Every busy tone is a lost customer. When urgent buyers call, long hold times, manual line transfers, and restrictive office hours drive them straight to your competitors.</p>
            <p>An enterprise-grade IVR service transforms your voice channels into an automated, 24/7 sales and customer support engine — answering thousands of calls simultaneously without missing a beat. Hosted in the cloud, it gives fast-growing startups, e-commerce brands, and large enterprises alike the backbone they need for a smooth, professional customer experience at a fraction of the cost.</p>
            <a href="contact.php" class="ivr-about_cta">Talk to an Expert</a>
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