<style>
    .qsms-wrap {
        background: #F1F1F1;
        /* background: linear-gradient(135deg, #f4f7fd 0%, #eef1fb00 45%, #f1f0fb00 100%); */
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        padding: 80px 20px;
    }

    .qsms-inner {
        max-width: 1180px;
        margin: 0 auto;
    }

    /* ---------- Head ---------- */

    .qsms-head {
        text-align: center;
        margin-bottom: 44px;
    }

    .qsms-title {
        font-size: 44px;
        font-weight: 800;
        letter-spacing: -0.5px;
        color: #171a2b;
        margin: 0 0 18px;
        opacity: 0;
        transform: translateY(18px);
        animation: qsmsFadeUp 0.7s ease forwards;
    }


    .qsms-title em {
        font-style: normal;

        background: linear-gradient(to bottom, #0A5CFF 0%, #0A5CFF 70%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .qsms-sub {
        font-size: 15.5px;
        line-height: 1.7;
        color: #5c6178;
        max-width: 700px;
        margin: 0 auto;
        opacity: 0;
        transform: translateY(18px);
        animation: qsmsFadeUp 0.7s ease forwards 0.12s;
    }

    @keyframes qsmsFadeUp {
        from {
            opacity: 0;
            transform: translateY(18px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ---------- Tabs ---------- */

    .qsms-tabs {
        position: relative;
        display: flex;
        align-items: center;
        gap: 4px;
        background: #ffffff;
        border-radius: 999px;
        padding: 6px;
        width: max-content;
        max-width: 100%;
        margin: 0 auto 46px;
        box-shadow: 0 10px 30px rgba(30, 34, 90, 0.08);
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        opacity: 0;
        transform: translateY(18px);
        animation: qsmsFadeUp 0.7s ease forwards 0.24s;
    }

    .qsms-tabs::-webkit-scrollbar {
        display: none;
    }

    .qsms-tab-indicator {
        position: absolute;
        top: 6px;
        left: 6px;
        height: calc(100% - 12px);
        border-radius: 999px;
        background: linear-gradient(120deg, #5b4bf5, #7b3ff2);
        z-index: 1;
        transition: left 0.4s cubic-bezier(0.65, 0, 0.35, 1), width 0.4s cubic-bezier(0.65, 0, 0.35, 1);
    }

    .qsms-tab-btn {
        position: relative;
        z-index: 2;
        background: transparent;
        border: none;
        outline: none;
        font-size: 14.5px;
        font-weight: 600;
        color: #4d5169;
        padding: 13px 24px;
        border-radius: 999px;
        cursor: pointer;
        white-space: nowrap;
        transition: color 0.35s ease;
    }

    .qsms-tab-btn:hover {
        color: #171a2b;
    }

    .qsms-tab-btn.qsms-tab-active {
        color: #ffffff;
    }

    /* ---------- Panels & Cards ---------- */

    .qsms-panels {
        position: relative;
    }

    .qsms-panel {
        display: none;
    }

    .qsms-panel.qsms-panel-active {
        display: block;
        animation: qsmsPanelIn 0.45s ease forwards;
    }

    @keyframes qsmsPanelIn {
        from {
            opacity: 0;
            transform: translateY(14px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .qsms-card12s {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .qsms-card12 {
        position: relative;
        background: #ffffff;
        border: 1px solid #ececf5;
        border-radius: 18px;
        padding: 28px 26px 26px;
        overflow: hidden;
        opacity: 0;
        transform: translateY(20px);
        animation: qsmsCardIn 0.5s ease forwards;
        transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
    }

    .qsms-card12:nth-child(1) {
        animation-delay: 0.05s;
    }

    .qsms-card12:nth-child(2) {
        animation-delay: 0.15s;
    }

    .qsms-card12:nth-child(3) {
        animation-delay: 0.25s;
    }

    @keyframes qsmsCardIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .qsms-card12:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(30, 34, 90, 0.1);
        border-color: #dfe1f2;
    }

    .qsms-card12-blob {
        position: absolute;
        top: -30px;
        right: -30px;
        width: 110px;
        height: 110px;
        border-radius: 50%;
        opacity: 0.55;
        z-index: 0;
        transition: transform 0.5s ease;
    }

    .qsms-card12:hover .qsms-card12-blob {
        transform: scale(1.25) translate(-6px, 6px);
    }

    .qsms-icon {
        position: relative;
        z-index: 1;
        width: 52px;
        height: 52px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: #ffffff;
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .qsms-card12:hover .qsms-icon {
        transform: rotate(-6deg) scale(1.08);
    }

    .qsms-icon svg {
        width: 24px;
        height: 24px;
    }

    .qsms-card12-title {
        position: relative;
        z-index: 1;
        font-size: 19px;
        font-weight: 700;
        color: #171a2b;
        margin: 0 0 10px;
    }

    .qsms-card12-desc {
        position: relative;
        z-index: 1;
        font-size: 14px;
        line-height: 1.65;
        color: #6b6f85;
        margin: 0;
    }

    /* ---------- Gradient themes ---------- */

    .qsms-grad-blue {
        background: linear-gradient(135deg, #4f6bf0, #6d4ef0);
    }

    .qsms-grad-indigo {
        background: linear-gradient(135deg, #6d4ef0, #8e4ef0);
    }

    .qsms-grad-purple {
        background: linear-gradient(135deg, #8b3ff2, #a83ff2);
    }

    .qsms-grad-pink {
        background: linear-gradient(135deg, #ef3f7a, #f2405e);
    }

    .qsms-grad-green {
        background: linear-gradient(135deg, #17b06e, #12c48a);
    }

    .qsms-grad-teal {
        background: linear-gradient(135deg, #10b6a7, #14c9c1);
    }

    .qsms-grad-cyan {
        background: linear-gradient(135deg, #14b8c4, #1ccfd8);
    }

    .qsms-grad-orange {
        background: linear-gradient(135deg, #f0913f, #f2a63f);
    }

    .qsms-grad-red {
        background: linear-gradient(135deg, #f0405f, #f2496f);
    }

    .qsms-grad-amber {
        background: linear-gradient(135deg, #f0a83f, #f2c23f);
    }

    .qsms-blob-blue {
        background: #dfe6fd;
    }

    .qsms-blob-indigo {
        background: #e6dffd;
    }

    .qsms-blob-purple {
        background: #f0e0fb;
    }

    .qsms-blob-pink {
        background: #fbe0ea;
    }

    .qsms-blob-green {
        background: #d9f5e6;
    }

    .qsms-blob-teal {
        background: #d8f5f2;
    }

    .qsms-blob-cyan {
        background: #d7f2f5;
    }

    .qsms-blob-orange {
        background: #fbe9d9;
    }

    .qsms-blob-red {
        background: #fbdde3;
    }

    .qsms-blob-amber {
        background: #fbecd6;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 980px) {
        .qsms-title {
            font-size: 34px;
        }

        .qsms-card12s {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 700px) {
        .qsms-wrap {
            padding: 56px 16px;
        }

        .qsms-title {
            font-size: 27px;
        }

        .qsms-sub {
            font-size: 14px;
        }

        .qsms-tabs {
            width: 100%;
            justify-content: flex-start;
        }

        .qsms-tab-btn {
            padding: 11px 18px;
            font-size: 13.5px;
        }

        .qsms-card12s {
            grid-template-columns: 1fr;
        }

        .qsms-card12 {
            padding: 24px 20px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .qsms-title,
        .qsms-sub,
        .qsms-tabs,
        .qsms-card12,
        .qsms-panel {
            animation: none !important;
            opacity: 1 !important;
            transform: none !important;
        }

        .qsms-card12:hover {
            transform: none;
        }
    }

    /* green cursor-follow glow — spreads outward from wherever the cursor enters the card */
    .icp-cursor-glow {
        position: absolute;
        left: 0;
        top: 0;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: radial-gradient(circle, rgba(34, 64, 197, 0.2) 0%, rgba(45, 91, 190, 0.22) 30%, rgba(34, 91, 197, 0.08) 55%, rgba(34, 72, 197, 0) 72%);
        opacity: 0;
        pointer-events: none;
        transition: opacity .35s ease;
        z-index: 0;
    }

    .dofj11564 {
        position: relative;
        overflow: hidden;
    }

    .decor-hero-grid1 {
        position: absolute;
        top: -10px;
        left: -20px;
        width: 260px;
        height: 220px;
        background-image: radial-gradient(circle, #4F46E5 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        opacity: .28;
        z-index: 0;
        pointer-events: none;
        animation: hero-grid-shift 9s ease-in-out infinite;
        transform: rotate(90deg);
    }


    @keyframes hero-grid-shift {

        0%,
        100% {
            background-position: 0 0;
        }

        50% {
            background-position: 8px -8px;
        }
    }

    .decor-hero-glow1 {
        position: absolute;
        top: -180px;
        left: -160px;
        width: 480px;
        height: 480px;
        border-radius: 50%;
        background: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
        opacity: .18;
        filter: blur(60px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 12s ease-in-out infinite;
    }

    .decor-hero-glow {
        position: absolute;
        bottom: -180px;
        right: -160px;
        width: 480px;
        height: 480px;
        border-radius: 50%;
        background: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
        opacity: .18;
        filter: blur(60px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 12s ease-in-out infinite;
    }

    @keyframes hero-glow-drift {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(30px, 20px) scale(1.08);
        }
    }
</style>


<section class="qsms-wrap dofj11564">
    <div class="decor-hero-glow"></div>
    <div class="decor-hero-grid1"></div>


    <div class="qsms-inner">

        <div class="qsms-head">
            <h2 class="qsms-title">Bulk SMS Solutions for <em> Every Business Need.</em></h2>
            <p class="qsms-sub">From transactional SMS and OTP verification to promotional campaigns and real-time alerts — our DLT-compliant bulk SMS gateway covers every use case</p>
        </div>

        <div class="qsms-tabs" id="qsmsTabs">
            <div class="qsms-tab-indicator" id="qsmsIndicator"></div>
            <button class="qsms-tab-btn qsms-tab-active" data-tab="transactional">Transactional SMS</button>
            <button class="qsms-tab-btn" data-tab="promotional">Promotional SMS</button>
            <button class="qsms-tab-btn" data-tab="otp">OTP SMS</button>
            <button class="qsms-tab-btn" data-tab="alerts">Voice SMS & OBD</button>
            <button class="qsms-tab-btn" data-tab="campaigns">Industry Solutions</button>
        </div>

        <div class="qsms-panels" id="qsmsPanels">

            <!-- Transactional SMS -->
            <div class="qsms-panel qsms-panel-active" data-panel="transactional">
                <div class="qsms-card12s">
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-blue"></div>
                        <div class="qsms-icon qsms-grad-blue">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Worldwide Reach</h3>
                        <p class="qsms-card12-desc">Continuous delivery services to all customers, whether signed up for DND or not.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-indigo"></div>
                        <div class="qsms-icon qsms-grad-indigo">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Ultra-Low Latency</h3>
                        <p class="qsms-card12-desc">Fast routing for urgent information like OTPs, alerts and other critical notifications.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-blue"></div>
                        <div class="qsms-icon qsms-grad-blue">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Simple API Connectivity</h3>
                        <p class="qsms-card12-desc">Connect your SMS service with business management systems, billing software and e-commerce services.</p>
                    </div>
                </div>
            </div>

            <!-- Promotional SMS -->
            <div class="qsms-panel" data-panel="promotional">
                <div class="qsms-card12s">
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-pink"></div>
                        <div class="qsms-icon qsms-grad-pink">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
                                <polyline points="17 6 23 6 23 12" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Targeted Delivery</h3>
                        <p class="qsms-card12-desc">Reach customers with bulk messages for new arrivals, seasonal deals and new launches.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-purple"></div>
                        <div class="qsms-icon qsms-grad-purple">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="6" />
                                <circle cx="12" cy="12" r="2" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Web UI Control</h3>
                        <p class="qsms-card12-desc">Schedule campaigns easily from a user-friendly dashboard with customer list segmentation.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-purple"></div>
                        <div class="qsms-icon qsms-grad-purple">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Trackable Links</h3>
                        <p class="qsms-card12-desc">Use URL shorteners to monitor customer engagement with your marketing messages.</p>
                    </div>
                </div>
            </div>

            <!-- OTP SMS -->
            <div class="qsms-panel" data-panel="otp">
                <div class="qsms-card12s">
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-green"></div>
                        <div class="qsms-icon qsms-grad-green">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Real-Time Authentication</h3>
                        <p class="qsms-card12-desc">Send important authentication codes to customers instantly.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-teal"></div>
                        <div class="qsms-icon qsms-grad-teal">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Fast & Reliable Delivery</h3>
                        <p class="qsms-card12-desc">Deliver urgent OTPs with ultra-low latency for secure verification.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-cyan"></div>
                        <div class="qsms-icon qsms-grad-cyan">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Business Integration</h3>
                        <p class="qsms-card12-desc">Connect OTP messaging with your existing business systems through REST API connectivity.</p>
                    </div>
                </div>
            </div>

            <!-- Voice SMS & OBD -->
            <div class="qsms-panel" data-panel="alerts">
                <div class="qsms-card12s">
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-orange"></div>
                        <div class="qsms-icon qsms-grad-orange">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Geographically-Based Messaging</h3>
                        <p class="qsms-card12-desc">Use pre-recorded voice messages in regional languages to reach different audiences.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-red"></div>
                        <div class="qsms-icon qsms-grad-red">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Reciprocal Communication</h3>
                        <p class="qsms-card12-desc">Use DTMF-enabled keypad interaction to collect instant feedback from your audience.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-amber"></div>
                        <div class="qsms-icon qsms-grad-amber">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Automated Voice Messaging</h3>
                        <p class="qsms-card12-desc">Deliver localized voice messages automatically to your target customers.</p>
                    </div>
                </div>
            </div>

            <!-- Industry Solutions -->
            <div class="qsms-panel" data-panel="campaigns">
                <div class="qsms-card12s">
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-blue"></div>
                        <div class="qsms-icon qsms-grad-blue">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="22" y1="2" x2="11" y2="13" />
                                <polygon points="22 2 15 22 11 13 2 9 22 2" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Retail & E-Commerce</h3>
                        <p class="qsms-card12-desc">Seasonal sales, shipping updates, delivery tracking and cart abandonment reminders.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-purple"></div>
                        <div class="qsms-icon qsms-grad-purple">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="6" />
                                <circle cx="12" cy="12" r="2" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Real Estate & Property</h3>
                        <p class="qsms-card12-desc">Property launches, site visit updates, appointment reminders and broker communication.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-purple"></div>
                        <div class="qsms-icon qsms-grad-purple">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Education & EdTech</h3>
                        <p class="qsms-card12-desc">Admissions, exam schedules, results, fee deadlines and attendance notifications.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-purple"></div>
                        <div class="qsms-icon qsms-grad-purple">
                            <svg viewBox="0 0 512 512" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fffcfc">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <style type="text/css">
                                        .st0 {
                                            fill: #fff;
                                        }

                                        .st1 {
                                            fill: #fff;
                                        }
                                    </style>
                                    <g>
                                        <g>
                                            <g>
                                                <polygon class="st1" points="288.6,176.6 223.4,176.6 223.4,219.9 180.1,219.9 180.1,285.2 223.4,285.2 223.4,328.5 288.6,328.5 288.6,285.2 332,285.2 332,219.9 288.6,219.9 "></polygon>
                                            </g>
                                            <path class="st0" d="M441.2,114.2c-6.3,1.4-12.8,2.1-19.5,2.1c-48.4,0-87.7-38.6-87.7-86.3H177.9c0,47.6-39.3,86.3-87.7,86.3 c-6.7,0-13.2-0.7-19.5-2.1C13.9,354,256,482,256,482S498.1,354,441.2,114.2z M339.5,361.8c-30.5,35.4-63.4,59.9-83.4,73.2 c-20.5-13.6-54.4-38.9-85.1-75c-41.7-49.1-64.5-102-68.1-157.9h30.5c3.9,0,7-3.1,7-7c0-3.9-3.1-7-7-7h-31 c-0.1-10.7,0.5-21.4,1.8-32.3c50.2-5.4,91.8-39.6,107.3-85.6h89.1c15.6,45.9,57.2,80.2,107.3,85.6 C416.6,229.7,393.7,298.9,339.5,361.8z"></path>
                                            <path class="st0" d="M159.9,192.3c-0.2-0.4-0.4-0.8-0.6-1.2c-0.3-0.4-0.6-0.7-0.9-1.1c-0.3-0.3-0.7-0.6-1.1-0.9 c-0.4-0.3-0.8-0.5-1.2-0.6c-0.4-0.2-0.9-0.3-1.3-0.4c-0.9-0.2-1.8-0.2-2.7,0c-0.4,0.1-0.9,0.2-1.3,0.4c-0.4,0.2-0.8,0.4-1.2,0.6 c-0.4,0.3-0.7,0.6-1.1,0.9c-0.3,0.3-0.6,0.7-0.9,1.1c-0.3,0.4-0.5,0.8-0.7,1.2c-0.2,0.4-0.3,0.9-0.4,1.3c-0.1,0.5-0.1,0.9-0.1,1.4 c0,1.8,0.7,3.6,2.1,4.9c0.3,0.3,0.7,0.6,1.1,0.9s0.8,0.5,1.2,0.7c0.4,0.2,0.9,0.3,1.3,0.4c0.4,0.1,0.9,0.1,1.4,0.1 c0.5,0,0.9,0,1.4-0.1c0.4-0.1,0.9-0.2,1.3-0.4c0.4-0.2,0.8-0.4,1.2-0.7c0.4-0.3,0.7-0.5,1.1-0.9c1.3-1.3,2-3.1,2-4.9 c0-0.4,0-0.9-0.1-1.4C160.2,193.2,160,192.8,159.9,192.3z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h3 class="qsms-card12-title">Healthcare & Diagnostics</h3>
                        <p class="qsms-card12-desc">Appointment reminders, report links, vaccination reminders and health updates.</p>
                    </div>
                    <div class="qsms-card12 btn-789_card_sole">
                        <div class="qsms-card12-blob qsms-blob-purple"></div>
                        <div class="qsms-icon qsms-grad-purple">
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M335.9 84.2C326.1 78.6 314 78.6 304.1 84.2L80.1 212.2C67.5 219.4 61.3 234.2 65 248.2C68.7 262.2 81.5 272 96 272L128 272L128 480L128 480L76.8 518.4C68.7 524.4 64 533.9 64 544C64 561.7 78.3 576 96 576L544 576C561.7 576 576 561.7 576 544C576 533.9 571.3 524.4 563.2 518.4L512 480L512 272L544 272C558.5 272 571.2 262.2 574.9 248.2C578.6 234.2 572.4 219.4 559.8 212.2L335.8 84.2zM464 272L464 480L400 480L400 272L464 272zM352 272L352 480L288 480L288 272L352 272zM240 272L240 480L176 480L176 272L240 272zM320 160C337.7 160 352 174.3 352 192C352 209.7 337.7 224 320 224C302.3 224 288 209.7 288 192C288 174.3 302.3 160 320 160z"/></svg>
                        </div>
                        <h3 class="qsms-card12-title">BFSI</h3>
                        <p class="qsms-card12-desc">OTP verification, transaction alerts, premium renewals, loan updates and EMI reminders.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    (function() {
        "use strict";

        var icpCards = document.querySelectorAll('.btn-789_card_sole');
        var icpGlowRadius = 230; // px — soft green glow that spreads out from the cursor's corner
        var icpMaxTilt = 12; // deg — max corner tilt

        icpCards.forEach(function(card) {

            // create the green cursor-follow glow layer once per card
            var icpGlow = document.createElement('div');
            icpGlow.className = 'icp-cursor-glow';
            icpGlow.style.width = (icpGlowRadius * 0.5) + 'px';
            icpGlow.style.height = (icpGlowRadius * 0.5) + 'px';
            card.appendChild(icpGlow);

            card.addEventListener('mousemove', function(e) {
                var rect = card.getBoundingClientRect();
                var x = e.clientX - rect.left;
                var y = e.clientY - rect.top;

                // 3D tilt — rotate toward whichever corner/edge the cursor is near
                var px = (x / rect.width) - 0.5; // -0.5 .. 0.5
                var py = (y / rect.height) - 0.5; // -0.5 .. 0.5
                var rotateY = px * icpMaxTilt * 2;
                var rotateX = py * -icpMaxTilt * 2;
                card.style.transform =
                    'perspective(800px) rotateX(' + rotateX.toFixed(2) + 'deg) rotateY(' + rotateY.toFixed(2) + 'deg) translateZ(-6px) translateY(-4px)';

                // green glow following the cursor, clipped to a 50px radius
                icpGlow.style.left = x + 'px';
                icpGlow.style.top = y + 'px';
                icpGlow.style.opacity = '1';
            });

            card.addEventListener('mouseleave', function() {
                card.style.transform = '';
                icpGlow.style.opacity = '0';
            });
        });

    })();


    (function qsmsInit() {
        var qsmsTabsWrap = document.getElementById('qsmsTabs');
        var qsmsIndicator = document.getElementById('qsmsIndicator');
        var qsmsButtons = qsmsTabsWrap.querySelectorAll('.qsms-tab-btn');
        var qsmsPanels = document.querySelectorAll('.qsms-panel');

        function qsmsPositionIndicator(btn) {
            qsmsIndicator.style.left = btn.offsetLeft + 'px';
            qsmsIndicator.style.width = btn.offsetWidth + 'px';
        }

        function qsmsActivateTab(tabKey, btn) {
            qsmsButtons.forEach(function(b) {
                b.classList.remove('qsms-tab-active');
            });
            btn.classList.add('qsms-tab-active');
            qsmsPositionIndicator(btn);

            qsmsPanels.forEach(function(panel) {
                if (panel.getAttribute('data-panel') === tabKey) {
                    panel.classList.add('qsms-panel-active');
                } else {
                    panel.classList.remove('qsms-panel-active');
                }
            });
        }

        qsmsButtons.forEach(function(btn) {
            btn.addEventListener('click', function() {
                qsmsActivateTab(btn.getAttribute('data-tab'), btn);
            });
        });

        window.addEventListener('resize', function() {
            var activeBtn = qsmsTabsWrap.querySelector('.qsms-tab-active');
            if (activeBtn) qsmsPositionIndicator(activeBtn);
        });

        window.addEventListener('load', function() {
            var activeBtn = qsmsTabsWrap.querySelector('.qsms-tab-active');
            if (activeBtn) qsmsPositionIndicator(activeBtn);
        });

        // position immediately too, in case load already fired
        var initialBtn = qsmsTabsWrap.querySelector('.qsms-tab-active');
        if (initialBtn) qsmsPositionIndicator(initialBtn);
    })();
</script>