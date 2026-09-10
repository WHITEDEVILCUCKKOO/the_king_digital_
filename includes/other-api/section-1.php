<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap');

    .kd-crm-hero,
    .kd-crm-hero * {
        box-sizing: border-box;
    }

    .kd-crm-hero {
        --orange: #ff6422;
        --red: #ef4444;
        --purple: #7457d6;
        --blue: #316de5;
        --green: #17a56a;
        --dark: #171c29;
        --body: #566173;

        position: relative;
        width: 100%;
        overflow: hidden;

        font-family: 'Manrope', Arial, sans-serif;

        background:
            radial-gradient(circle at 10% 10%,
                rgba(255, 100, 34, .085),
                transparent 28%),
            radial-gradient(circle at 88% 10%,
                rgba(70, 92, 255, .075),
                transparent 28%),
            #ffffff;
    }


    /* DOT BACKGROUND */

    .kd-bg-grid {
        position: absolute;
        inset: 0;

        background-image:
            radial-gradient(circle,
                rgba(196, 158, 134, .75) 1.05px,
                transparent 1.15px);

        background-size: 24px 24px;

        opacity: .72;

        -webkit-mask-image:
            linear-gradient(to bottom,
                rgba(0, 0, 0, 1) 0%,
                rgba(0, 0, 0, .92) 45%,
                rgba(0, 0, 0, .62) 72%,
                transparent 96%);

        mask-image:
            linear-gradient(to bottom,
                rgba(0, 0, 0, 1) 0%,
                rgba(0, 0, 0, .92) 45%,
                rgba(0, 0, 0, .62) 72%,
                transparent 96%);

        pointer-events: none;
    }


    /* GLOW */

    .kd-orb {
        position: absolute;
        pointer-events: none;
        border-radius: 50%;
    }

    .kd-orb-left {
        width: 390px;
        height: 390px;

        left: -215px;
        top: 120px;

        background:
            radial-gradient(circle,
                rgba(255, 105, 37, .13),
                transparent 68%);
    }

    .kd-orb-right {
        width: 390px;
        height: 390px;

        right: -220px;
        top: 60px;

        background:
            radial-gradient(circle,
                rgba(67, 89, 255, .105),
                transparent 68%);
    }


    /* CONTAINER */

    .kd-crm-container {
        position: relative;
        z-index: 3;

        width: min(1120px, calc(100% - 40px));

        margin: 0 auto;

        padding: 46px 0 54px;

        text-align: center;
    }


    /* TOP STATUS */

    .kd-crm-top-badge {
        width: max-content;
        max-width: 100%;

        margin: 0 auto;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .kd-badge-status {
        display: flex;
        align-items: center;

        gap: 7px;

        padding: 7px 12px;

        border: 1px solid #d9eee2;

        border-radius: 50px;

        color: #128951;

        background: rgba(239, 250, 244, .95);

        box-shadow:
            0 6px 18px rgba(20, 120, 74, .07);

        font-size: 9px;

        font-weight: 800;

        text-transform: uppercase;

        letter-spacing: .06em;
    }

    .kd-badge-status i {
        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: #18ae6d;

        box-shadow:
            0 0 0 4px rgba(24, 174, 109, .12);
    }


    /* HERO */

    .kd-crm-content {
        max-width: 850px;

        margin: 23px auto 0;
    }

    .kd-crm-content h1 {
        margin: 0;

        color: var(--dark);

        font-size: clamp(36px, 4vw, 53px);

        line-height: 1.07;

        font-weight: 800;

        letter-spacing: -.045em;
    }

    .kd-crm-content h1 span {
        display: block;

        margin-top: 4px;

        background:
            linear-gradient(90deg,
                #f75c20 0%,
                #ed4044 35%,
                #7458d6 67%,
                #2b71db 100%);

        -webkit-background-clip: text;
        background-clip: text;

        -webkit-text-fill-color: transparent;
    }

    .kd-main-desc {
        max-width: 750px;

        margin: 21px auto 0 !important;

        color: #566173;

        font-size: 17px !important;

        font-weight: 500;

        line-height: 1.75;

        letter-spacing: -.01em;
    }


    /* BUTTONS */

    .kd-crm-buttons {
        margin-top: 28px;

        display: flex;
        justify-content: center;
        align-items: center;

        gap: 11px;
    }

    .kd-btn {
        min-height: 49px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 9px;

        padding: 0 22px;

        border-radius: 10px;

        text-decoration: none !important;

        font-size: 12px;

        font-weight: 800;

        transition: .28s ease;
    }

    .kd-btn svg {
        width: 15px;
        height: 15px;

        transition: .28s ease;
    }

    .kd-btn-primary {
        color: #fff !important;

        background:
            linear-gradient(135deg,
                #ff6a1e,
                #ef482d);

        box-shadow:
            0 11px 28px rgba(244, 85, 34, .25);
    }

    .kd-btn-primary:hover {
        color: #fff !important;

        transform: translateY(-2px);

        box-shadow:
            0 15px 35px rgba(244, 85, 34, .32);
    }

    .kd-btn-primary:hover svg {
        transform: translateX(3px);
    }

    .kd-btn-secondary {
        color: #222a39 !important;

        border: 1px solid #dfe4eb;

        background: rgba(255, 255, 255, .96);

        box-shadow:
            0 8px 22px rgba(24, 30, 42, .055);
    }

    .kd-btn-secondary:hover {
        transform: translateY(-2px);

        border-color: #d2d8e1;

        box-shadow:
            0 12px 28px rgba(24, 30, 42, .09);
    }


    /* PLATFORM CARDS */

    .kd-crm-platforms {
        width: 100%;
        max-width: 920px;

        margin: 38px auto 0;

        display: grid;

        grid-template-columns: repeat(4, 1fr);

        gap: 12px;
    }

    .kd-platform-card {
        position: relative;

        min-height: 88px;

        padding: 15px;

        display: flex;
        align-items: center;

        gap: 12px;

        text-align: left;

        border: 1px solid rgba(224, 228, 235, .92);

        border-radius: 16px;

        background: rgba(255, 255, 255, .93);

        backdrop-filter: blur(8px);

        box-shadow:
            0 10px 28px rgba(20, 27, 39, .06);

        transition: .3s ease;
    }

    .kd-platform-card:hover {
        transform: translateY(-5px);

        border-color: #d5dbe4;

        box-shadow:
            0 18px 40px rgba(20, 27, 39, .10);
    }

    .kd-platform-logo {
        width: 46px;
        height: 46px;

        flex: 0 0 46px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 12px;

        font-size: 17px;

        font-weight: 800;
    }

    .kd-logo-zoho {
        color: #e2493d;
        background: #fff0ec;
    }

    .kd-logo-web {
        color: #ed7c10;
        background: #fff3e6;
    }

    .kd-logo-mo {
        color: #6654d9;
        background: #efedff;
    }

    .kd-logo-clever {
        color: #18a27d;
        background: #eaf9f4;
    }

    .kd-platform-text {
        min-width: 0;
    }

    .kd-platform-text h3 {
        margin: 0 0 5px;

        color: #181e2c;

        font-size: 14px;

        line-height: 1.2;

        font-weight: 800;
    }

    .kd-platform-text p {
        margin: 0;

        color: #7a8493;

        font-size: 10px;

        line-height: 1.45;

        font-weight: 600;
    }

    .kd-card-dot {
        position: absolute;

        right: 12px;
        top: 12px;

        width: 7px;
        height: 7px;

        border-radius: 50%;

        background: #1bb16f;

        box-shadow:
            0 0 0 4px rgba(27, 177, 111, .09);
    }


    /* FEATURES */

    .kd-mini-features {
        margin-top: 25px;

        display: flex;
        justify-content: center;
        align-items: center;

        flex-wrap: wrap;

        gap: 13px 26px;
    }

    .kd-mini-item {
        display: flex;
        align-items: center;

        gap: 7px;

        color: #666f7e;

        font-size: 10px;

        font-weight: 700;

        letter-spacing: .025em;

        text-transform: uppercase;
    }

    .kd-mini-item span {
        width: 18px;
        height: 18px;

        flex: 0 0 18px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        color: #159e60;

        background: #e9f8f0;
    }

    .kd-mini-item svg {
        width: 10px;
        height: 10px;
    }


    /* DARK MARQUEE */

    .kd-marquee {
        position: relative;

        z-index: 8;

        width: 100%;
        height: 58px;

        overflow: hidden;

        display: flex;
        align-items: center;

        background:
            linear-gradient(90deg,
                #0d1325 0%,
                #151c31 50%,
                #0d1325 100%);

        border-top:
            1px solid rgba(255, 255, 255, .07);
    }

    .kd-marquee-track {
        display: flex;

        width: max-content;

        flex-shrink: 0;

        animation:
            kdInfiniteMarquee 30s linear infinite;

        will-change: transform;
    }

    .kd-marquee-group {
        display: flex;
        align-items: center;

        flex-shrink: 0;

        white-space: nowrap;
    }

    .kd-marquee-item {
        display: flex;
        align-items: center;

        gap: 9px;

        padding: 0 23px;

        color: #edf1f8;

        font-size: 10px;

        font-weight: 700;

        letter-spacing: .075em;

        text-transform: uppercase;
    }

    .kd-marquee-icon {
        width: 26px;
        height: 26px;

        flex: 0 0 26px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border-radius: 8px;

        color: #fff;

        font-size: 10px;

        font-weight: 800;

        background:
            linear-gradient(135deg,
                #ff7029,
                #ef4544);
    }

    .kd-marquee-separator {
        width: 5px;
        height: 5px;

        flex: 0 0 5px;

        border-radius: 2px;

        transform: rotate(45deg);

        background: #ff6b29;
    }

    .kd-marquee-fade {
        position: absolute;

        top: 0;

        z-index: 4;

        width: 90px;
        height: 100%;

        pointer-events: none;
    }

    .kd-fade-left {
        left: 0;

        background:
            linear-gradient(90deg,
                #0d1325,
                rgba(13, 19, 37, 0));
    }

    .kd-fade-right {
        right: 0;

        background:
            linear-gradient(-90deg,
                #0d1325,
                rgba(13, 19, 37, 0));
    }

    @keyframes kdInfiniteMarquee {

        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }

    }

    .kd-marquee:hover .kd-marquee-track {
        animation-play-state: paused;
    }


    /* TABLET */

    @media(max-width:1024px) {

        .kd-crm-content h1 {
            font-size: 46px;
        }

        .kd-main-desc {
            font-size: 16px !important;
        }

        .kd-crm-platforms {
            max-width: 720px;
            grid-template-columns: repeat(2, 1fr);
        }

    }


    /* MOBILE */

    @media(max-width:767px) {

        .kd-bg-grid {
            background-size: 20px 20px;
            opacity: .68;
        }

        .kd-crm-container {
            width: min(100% - 28px, 600px);
            padding: 35px 0 43px;
        }

        .kd-badge-status {
            padding: 6px 10px;
            font-size: 7px;
        }

        .kd-crm-content {
            margin-top: 20px;
        }

        .kd-crm-content h1 {
            font-size: 35px;
            line-height: 1.08;
        }

        .kd-main-desc {
            font-size: 14px !important;
            line-height: 1.7;
        }

        .kd-crm-buttons {
            margin-top: 23px;
            gap: 8px;
        }

        .kd-btn {
            min-height: 45px;
            padding: 0 15px;
            font-size: 10px;
        }

        .kd-crm-platforms {
            margin-top: 30px;

            grid-template-columns: repeat(2, 1fr);

            gap: 9px;
        }

        .kd-platform-card {
            min-height: 78px;
            padding: 11px;
            gap: 9px;
        }

        .kd-platform-logo {
            width: 39px;
            height: 39px;

            flex-basis: 39px;

            font-size: 14px;
        }

        .kd-platform-text h3 {
            font-size: 11px;
        }

        .kd-platform-text p {
            font-size: 8px;
        }

        .kd-mini-item {
            font-size: 8px;
        }

        .kd-marquee {
            height: 52px;
        }

        .kd-marquee-item {
            padding: 0 17px;
            font-size: 8.5px;
        }

        .kd-marquee-icon {
            width: 23px;
            height: 23px;

            flex-basis: 23px;
        }

        .kd-marquee-fade {
            width: 45px;
        }

    }


    /* SMALL MOBILE */

    @media(max-width:480px) {

        .kd-crm-content h1 {
            font-size: 30px;
        }

        .kd-main-desc {
            font-size: 13px !important;
        }

        .kd-crm-buttons {
            width: 100%;

            display: grid;

            grid-template-columns: 1fr 1fr;
        }

        .kd-btn {
            width: 100%;
            padding: 0 8px;
        }

        .kd-platform-card {
            min-height: 75px;
            padding: 9px 8px;
        }

        .kd-platform-logo {
            width: 34px;
            height: 34px;

            flex-basis: 34px;

            font-size: 12px;
        }

        .kd-platform-text h3 {
            font-size: 10px;
        }

        .kd-platform-text p {
            font-size: 7px;
        }

    }


    /* REDUCED MOTION */

    @media(prefers-reduced-motion:reduce) {

        .kd-marquee-track {
            animation: none;
        }

        .kd-platform-card,
        .kd-btn {
            transition: none;
        }

    }
</style>


<section class="kd-crm-hero">

    <div class="kd-bg-grid"></div>
    <div class="kd-orb kd-orb-left"></div>
    <div class="kd-orb kd-orb-right"></div>

    <div class="kd-crm-container">

        <!-- TOP STATUS BADGE -->
        <div class="kd-crm-top-badge">
            <span class="kd-badge-status">
                <i></i>
                Enterprise Ready
            </span>
        </div>


        <!-- HERO CONTENT -->
        <div class="kd-crm-content">

            <h1>
                Connect Your CRM.
                <span>Automate Every Customer Journey.</span>
            </h1>

            <p class="kd-main-desc">
                Connect Zoho CRM, WebEngage, MoEngage and CleverTap with King Digital
                to create intelligent automations, personalised customer journeys,
                real-time data sync and seamless communication across every channel.
            </p>

            <div class="kd-crm-buttons">

                <a href="#contact" class="kd-btn kd-btn-primary">
                    Start Integration

                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M5 12H19M13 6L19 12L13 18"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>

                <a href="#solutions" class="kd-btn kd-btn-secondary">
                    Explore Solutions

                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M9 18L15 12L9 6"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>

            </div>

        </div>


        <!-- PLATFORM CARDS -->
        <div class="kd-crm-platforms">

            <div class="kd-platform-card">
                <div class="kd-platform-logo kd-logo-zoho">Z</div>

                <div class="kd-platform-text">
                    <h3>Zoho CRM</h3>
                    <p>CRM Automation & Lead Management</p>
                </div>

                <span class="kd-card-dot"></span>
            </div>


            <div class="kd-platform-card">
                <div class="kd-platform-logo kd-logo-web">W</div>

                <div class="kd-platform-text">
                    <h3>WebEngage</h3>
                    <p>Customer Journey Automation</p>
                </div>

                <span class="kd-card-dot"></span>
            </div>


            <div class="kd-platform-card">
                <div class="kd-platform-logo kd-logo-mo">M</div>

                <div class="kd-platform-text">
                    <h3>MoEngage</h3>
                    <p>Personalised Customer Engagement</p>
                </div>

                <span class="kd-card-dot"></span>
            </div>


            <div class="kd-platform-card">
                <div class="kd-platform-logo kd-logo-clever">C</div>

                <div class="kd-platform-text">
                    <h3>CleverTap</h3>
                    <p>Omnichannel Journey Automation</p>
                </div>

                <span class="kd-card-dot"></span>
            </div>

        </div>


        <!-- MINI BENEFITS -->
        <div class="kd-mini-features">

            <div class="kd-mini-item">
                <span>
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M6 12.5L10 16.5L18 8.5"
                            stroke="currentColor"
                            stroke-width="2.2"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
                API Integration
            </div>

            <div class="kd-mini-item">
                <span>
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M6 12.5L10 16.5L18 8.5"
                            stroke="currentColor"
                            stroke-width="2.2"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
                Real-Time Sync
            </div>

            <div class="kd-mini-item">
                <span>
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M6 12.5L10 16.5L18 8.5"
                            stroke="currentColor"
                            stroke-width="2.2"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
                Smart Automation
            </div>

            <div class="kd-mini-item">
                <span>
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M6 12.5L10 16.5L18 8.5"
                            stroke="currentColor"
                            stroke-width="2.2"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
                Expert Support
            </div>

        </div>

    </div>


    <!-- DARK INFINITE MARQUEE -->
    <div class="kd-marquee">

        <div class="kd-marquee-fade kd-fade-left"></div>
        <div class="kd-marquee-fade kd-fade-right"></div>

        <div class="kd-marquee-track">

            <div class="kd-marquee-group">

                <div class="kd-marquee-item">
                    <span class="kd-marquee-icon">Z</span>
                    Zoho CRM
                </div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">
                    <span class="kd-marquee-icon">W</span>
                    WebEngage
                </div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">
                    <span class="kd-marquee-icon">M</span>
                    MoEngage
                </div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">
                    <span class="kd-marquee-icon">C</span>
                    CleverTap
                </div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">CRM Automation</div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">Real-Time Sync</div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">Customer Journeys</div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">Omnichannel Messaging</div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">API Integration</div>

                <span class="kd-marquee-separator"></span>

            </div>


            <div class="kd-marquee-group" aria-hidden="true">

                <div class="kd-marquee-item">
                    <span class="kd-marquee-icon">Z</span>
                    Zoho CRM
                </div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">
                    <span class="kd-marquee-icon">W</span>
                    WebEngage
                </div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">
                    <span class="kd-marquee-icon">M</span>
                    MoEngage
                </div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">
                    <span class="kd-marquee-icon">C</span>
                    CleverTap
                </div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">CRM Automation</div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">Real-Time Sync</div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">Customer Journeys</div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">Omnichannel Messaging</div>

                <span class="kd-marquee-separator"></span>

                <div class="kd-marquee-item">API Integration</div>

                <span class="kd-marquee-separator"></span>

            </div>

        </div>

    </div>

</section>