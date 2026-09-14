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
        --ivr-gold: #F97316;

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

    /* //////////////////////////////////// Key Features Section Start ///////////////////////////////////// */
    /* Self-contained: this block carries its own copy of the card-grid styling
       (same design language as the Products section) so it renders correctly
       even if included on a page by itself. If :root is already declared
       elsewhere on the page, this duplicate declaration is harmless. */

    .ivr-features {
        position: relative;
        overflow: hidden;
        padding: 40px 80px;
        background: var(--ivr-bg);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .ivr-features_content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ivr-features_content--heading {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 12px;
    }

    .ivr-features_content--heading h1 {
        font-size: clamp(28px, 3.6vw, 42px);
        line-height: 1.2;
        font-weight: 800;
        letter-spacing: -.5px;
        color: var(--ivr-text-primary);
        margin: 0;
    }

    .ivr-features_content--heading h1 span {
        background: var(--ivr-gradient-ai);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ivr-features_content--heading p {
        margin-top: 16px;
        font-size: 16px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
    }

    .ivr-feat-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-top: 52px;
    }

    .ivr-feat-card {
        background: var(--ivr-card);
        border: 1.5px solid var(--ivr-border);
        border-radius: var(--ivr-radius-lg);
        padding: 28px;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        transition: var(--ivr-transition);
    }

    .ivr-feat-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--ivr-gold);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .25s ease;
    }

    .ivr-feat-card:hover {
        border-color: rgba(37, 99, 235, .25);
        box-shadow: var(--ivr-shadow-lg);
        transform: translateY(-4px);
    }

    .ivr-feat-card:hover::after {
        transition: 1s ease;
        transform: scaleX(1);
    }

    .ivr-feat-ico {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        margin-bottom: 20px;
        background: #EEF2FF;
        color: #4F46E5;
    }

    .ivr-feat-name {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 9px;
        color: var(--ivr-text-primary);
    }

    .ivr-feat-desc {
        font-size: 14px;
        color: var(--ivr-text-secondary);
        line-height: 1.75;
        margin-bottom: 18px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .ivr-feat-tags {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
    }

    .ivr-feat-tags .stag {
        font-size: 11px;
        font-weight: 600;
        color: var(--ivr-text-muted);
        background: var(--ivr-bg);
        padding: 3px 10px;
        border-radius: 20px;
        border: 1px solid var(--ivr-border);
    }

    .ivr-feat-link {
        position: absolute;
        top: 24px;
        right: 24px;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 1.5px solid var(--ivr-border);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        color: var(--ivr-text-muted);
        text-decoration: none;
        transition: var(--ivr-transition);
    }

    .ivr-feat-card:hover .ivr-feat-link {
        background: var(--ivr-blue);
        border-color: var(--ivr-blue);
        color: #fff;
    }

    /* cursor-follow glow — spreads outward from wherever the cursor enters the card */
    .ifc-cursor-glow {
        position: absolute;
        left: 0;
        top: 0;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.2) 0%, rgba(139, 92, 246, .22) 30%, rgba(34, 211, 238, .08) 55%, rgba(34, 211, 238, 0) 72%);
        opacity: 0;
        pointer-events: none;
        transition: opacity .35s ease;
        z-index: 0;
    }

    /* ── Decor: top-left rotating dashed ring ── */
    .feat-decor-tl {
        position: absolute;
        top: -110px;
        left: -110px;
        width: 220px;
        height: 220px;
        border: 2px dashed var(--ivr-primary);
        border-radius: 50%;
        opacity: .25;
        animation: feat-decor-spin 18s linear infinite;
        pointer-events: none;
        z-index: 0;
    }

    @keyframes feat-decor-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* ── Decor: top-right fading dot-grid ── */
    .feat-decor-tr {
        position: absolute;
        top: -20px;
        right: -20px;
        width: 220px;
        height: 200px;
        background-image: radial-gradient(circle, var(--ivr-blue) 1.6px, transparent 1.6px);
        background-size: 22px 22px;
        -webkit-mask-image: radial-gradient(ellipse at top right, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at top right, black 0%, black 25%, transparent 72%);
        opacity: .3;
        pointer-events: none;
        z-index: 0;
        animation: feat-grid-shift 10s ease-in-out infinite;
    }

    @keyframes feat-grid-shift {

        0%,
        100% {
            background-position: 0 0;
        }

        50% {
            background-position: -8px 8px;
        }
    }

    /* ── Decor: bottom-left floating sparkle dots ── */
    .feat-decor-bl {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 200px;
        height: 220px;
        pointer-events: none;
        z-index: 0;
    }

    .feat-decor-dot {
        position: absolute;
        border-radius: 50%;
        background: var(--ivr-gold);
    }

    .feat-decor-dot.d1 {
        width: 12px;
        height: 12px;
        bottom: 30px;
        left: 26px;
        opacity: .35;
        animation: feat-dot-bob-1 5.5s ease-in-out infinite;
    }

    .feat-decor-dot.d2 {
        width: 8px;
        height: 8px;
        bottom: 90px;
        left: 70px;
        opacity: .3;
        background: var(--ivr-primary);
        animation: feat-dot-bob-2 6.5s ease-in-out infinite;
    }

    .feat-decor-dot.d3 {
        width: 16px;
        height: 16px;
        bottom: 50px;
        left: 120px;
        opacity: .24;
        animation: feat-dot-bob-3 7.5s ease-in-out infinite;
    }

    .feat-decor-dot.d4 {
        width: 9px;
        height: 9px;
        bottom: 140px;
        left: 40px;
        opacity: .28;
        background: var(--ivr-primary);
        animation: feat-dot-bob-1 6s ease-in-out infinite .4s;
    }

    @keyframes feat-dot-bob-1 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(10px, -16px);
        }
    }

    @keyframes feat-dot-bob-2 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-12px, 10px);
        }
    }

    @keyframes feat-dot-bob-3 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(8px, 14px);
        }
    }

    /* ── Decor: bottom-right soft ambient glow ── */
    .feat-decor-br {
        position: absolute;
        bottom: -180px;
        right: -150px;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.16) 0%, rgba(37, 99, 235, 0.10) 45%, rgba(255, 255, 255, 0) 72%);
        filter: blur(8px);
        pointer-events: none;
        z-index: 0;
        animation: feat-glow-pulse 9s ease-in-out infinite;
    }

    @keyframes feat-glow-pulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.08);
            opacity: .85;
        }
    }

    @media (max-width: 900px) {
        .ivr-features {
            padding: 60px 24px;
        }
    }

    /* //////////////////////////////////// Key Features Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// Key Features Section //////////////////////////////////////-->
<section class="ivr-features" id="features">
    <div class="feat-decor-tl"></div>
    <div class="feat-decor-tr"></div>
    <div class="feat-decor-bl">
        <div class="feat-decor-dot d1"></div>
        <div class="feat-decor-dot d2"></div>
        <div class="feat-decor-dot d3"></div>
        <div class="feat-decor-dot d4"></div>
    </div>
    <div class="feat-decor-br"></div>

    <div class="ivr-features_content">
        <div class="ivr-features_content--heading">
            <h1>Key Features of <span>Cloud IVR Solutions</span></h1>
            <p>Modern IVR software offers robust tools engineered to optimize voice communication, track customer behavior, and maximize live agent efficiency.</p>
        </div>

        <div class="ivr-feat-grid" id="ivrFeatGrid">

            <div class="ivr-feat-card">
                <div class="ivr-feat-ico"><i class="fa-solid fa-route"></i></div>
                <div class="ivr-feat-name">Smart Call Routing</div>
                <div class="ivr-feat-desc">Intelligence-powered routing — skill-based, round-robin, priority, and geographical — limits wait times and connects callers with the right expert directly.</div>
                <div class="ivr-feat-tags">
                    <span class="stag">Skill-Based Routing</span>
                    <span class="stag">Round-Robin</span>
                    <span class="stag">Priority Routing</span>
                    <span class="stag">Geo Routing</span>
                </div>
            </div>

            <div class="ivr-feat-card">
                <div class="ivr-feat-ico"><i class="fa-solid fa-sitemap"></i></div>
                <div class="ivr-feat-name">Multi-Level IVR Menus</div>
                <div class="ivr-feat-desc">Unlimited nested menu hierarchies — "Press 1 for Sales, Press 2 for Support" — handle call traffic properly and route complex issues to the right sub-department.</div>
                <div class="ivr-feat-tags">
                    <span class="stag">Nested Menus</span>
                    <span class="stag">Multi-Level IVR</span>
                    <span class="stag">Call Traffic Management</span>
                </div>
            </div>

            <div class="ivr-feat-card">
                <div class="ivr-feat-ico"><i class="fa-solid fa-language"></i></div>
                <div class="ivr-feat-name">Multilingual Support</div>
                <div class="ivr-feat-desc">Voice prompts spoken in local regional dialects and international languages, so customers feel comfortable communicating in their language of choice.</div>
                <div class="ivr-feat-tags">
                    <span class="stag">Regional Dialects</span>
                    <span class="stag">International Languages</span>
                    <span class="stag">Localized Prompts</span>
                </div>
            </div>

            <div class="ivr-feat-card">
                <div class="ivr-feat-ico"><i class="fa-solid fa-chart-line"></i></div>
                <div class="ivr-feat-name">Real-Time Analytics & Reporting</div>
                <div class="ivr-feat-desc">Live dashboards, call volume trends, agent performance monitoring, and downloadable logs to get the most out of your data.</div>
                <div class="ivr-feat-tags">
                    <span class="stag">Live Dashboards</span>
                    <span class="stag">Call Volume Trends</span>
                    <span class="stag">Agent Performance</span>
                </div>
            </div>

            <div class="ivr-feat-card">
                <div class="ivr-feat-ico"><i class="fa-solid fa-circle-play"></i></div>
                <div class="ivr-feat-name">Call Recording & Monitoring</div>
                <div class="ivr-feat-desc">Cloud-based call recording with barge-in monitoring and call whispering, so supervisors can guide agents in real time.</div>
                <div class="ivr-feat-tags">
                    <span class="stag">Cloud Call Recording</span>
                    <span class="stag">Barge-In</span>
                    <span class="stag">Whisper Coaching</span>
                </div>
            </div>

            <div class="ivr-feat-card">
                <div class="ivr-feat-ico"><i class="fa-solid fa-plug"></i></div>
                <div class="ivr-feat-name">CRM & Webhook Integration</div>
                <div class="ivr-feat-desc">REST API integration with Salesforce, HubSpot, Zoho, and databases — sending call history and account data to agent screens before the call connects.</div>
                <div class="ivr-feat-tags">
                    <span class="stag">REST API</span>
                    <span class="stag">Salesforce</span>
                    <span class="stag">HubSpot</span>
                    <span class="stag">Zoho</span>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Key Features Section End ///////////////////////////////////////////-->

<script>
    (function() {
        "use strict";

        var grid = document.getElementById('ivrFeatGrid');
        if (!grid) return;

        var cards = grid.querySelectorAll('.ivr-feat-card');
        var glowRadius = 230; // px
        var maxTilt = 12; // deg

        cards.forEach(function(card) {
            var glow = document.createElement('div');
            glow.className = 'ifc-cursor-glow';
            glow.style.width = (glowRadius * 0.5) + 'px';
            glow.style.height = (glowRadius * 0.5) + 'px';
            card.appendChild(glow);

            card.addEventListener('mousemove', function(e) {
                var rect = card.getBoundingClientRect();
                var x = e.clientX - rect.left;
                var y = e.clientY - rect.top;

                var px = (x / rect.width) - 0.5;
                var py = (y / rect.height) - 0.5;
                var rotateY = px * maxTilt * 2;
                var rotateX = py * -maxTilt * 2;
                card.style.transform =
                    'perspective(800px) rotateX(' + rotateX.toFixed(2) + 'deg) rotateY(' + rotateY.toFixed(2) + 'deg) translateZ(-6px) translateY(-4px)';

                glow.style.left = x + 'px';
                glow.style.top = y + 'px';
                glow.style.opacity = '1';
            });

            card.addEventListener('mouseleave', function() {
                card.style.transform = '';
                glow.style.opacity = '0';
            });
        });
    })();
</script>