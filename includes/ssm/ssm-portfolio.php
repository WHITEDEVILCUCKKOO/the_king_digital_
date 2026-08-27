<style>
    :root {
        /* ========================================
       SOCIAL MEDIA MARKETING THEME
       ======================================== */

        /* Primary */
        --smm-primary: #7C3AED;
        --smm-primary-light: #A78BFA;
        --smm-primary-dark: #5B21B6;

        /* Secondary */
        --smm-secondary: #EC4899;
        --smm-secondary-light: #F9A8D4;
        --smm-secondary-dark: #BE185D;

        /* Accent */
        --smm-accent: #F97316;
        --smm-accent-light: #FDBA74;
        --smm-accent-dark: #EA580C;

        /* Gradient */
        --smm-gradient: linear-gradient(135deg, #7C3AED 0%, #EC4899 55%, #F97316 100%);
        --smm-gradient-soft: linear-gradient(135deg, #F5F3FF 0%, #FCE7F3 55%, #FFF7ED 100%);

        /* Backgrounds */
        --smm-bg: #FFFFFF;
        --smm-bg-soft: #FAF9FF;
        --smm-bg-purple: #F5F3FF;
        --smm-bg-pink: #FDF2F8;
        --smm-bg-orange: #FFF7ED;

        /* Dark Sections */
        --smm-dark: #181026;
        --smm-dark-2: #24163A;
        --smm-dark-card: #2D1B46;

        /* Text */
        --smm-text: #18181B;
        --smm-text-dark: #27272A;
        --smm-text-muted: #71717A;
        --smm-text-light: #A1A1AA;
        --smm-text-white: #FFFFFF;

        /* Borders */
        --smm-border: #E4E4E7;
        --smm-border-light: #F0ECF8;
        --smm-border-purple: #DDD6FE;

        /* Cards */
        --smm-card: #FFFFFF;
        --smm-card-hover: #FCFAFF;

        /* Status / Metrics */
        --smm-success: #22C55E;
        --smm-success-light: #DCFCE7;
        --smm-danger: #EF4444;
        --smm-warning: #F59E0B;
        --smm-info: #3B82F6;

        /* Shadows */
        --smm-shadow-sm: 0 2px 8px rgba(24, 16, 38, 0.05);
        --smm-shadow-md: 0 8px 30px rgba(24, 16, 38, 0.08);
        --smm-shadow-lg: 0 20px 50px rgba(124, 58, 237, 0.12);
        --smm-shadow-glow: 0 0 40px rgba(124, 58, 237, 0.18);

        /* Radius */
        --smm-radius-sm: 10px;
        --smm-radius-md: 16px;
        --smm-radius-lg: 24px;
        --smm-radius-xl: 32px;

        /* Spacing */
        --smm-section-space: clamp(70px, 8vw, 120px);

        /* Container */
        --smm-container: 1240px;
    }

    /* ========================================
       PORTFOLIO / CONTENT SWIPER
       ======================================== */

    .ssm-portfolio {
        position: relative;
        overflow: hidden;
        background: var(--smm-dark);
        padding: 40px 30px;
    }

    .ssm-portfolio::before,
    .ssm-portfolio::after {
        content: "";
        position: absolute;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        filter: blur(120px);
        opacity: .28;
        pointer-events: none;
    }

    .ssm-portfolio::before {
        top: -160px;
        left: -120px;
        background: var(--smm-primary);
    }

    .ssm-portfolio::after {
        bottom: -180px;
        right: -140px;
        background: var(--smm-secondary);
    }

    .ssm-portfolio_content {
        position: relative;
        max-width: var(--smm-container);
        margin: 0 auto;
        display: grid;
        grid-template-columns: minmax(250px, 340px) 1fr;
        align-items: center;
        gap: 32px;
    }

    /* ---------- text column ---------- */

    .ssm-portfolio_content--text-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin: 0 0 20px;
        padding: 8px 16px 8px 12px;
        border-radius: 999px;
        background: rgba(124, 58, 237, .16);
        border: 1px solid rgba(167, 139, 250, .3);
        color: var(--smm-primary-light);
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .08em;
        text-transform: uppercase;
    }

    .ssm-portfolio_content--text-eyebrow span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--smm-gradient);
        box-shadow: 0 0 0 4px rgba(124, 58, 237, .18);
    }

    .ssm-portfolio_content--text-heading {
        margin: 0 0 14px;
        color: var(--smm-text-white);
        font-size: clamp(28px, 3vw, 38px);
        font-weight: 800;
        line-height: 1.18;
        letter-spacing: -0.02em;
        white-space: pre-line;
    }

    .ssm-portfolio_content--text-para {
        margin: 0 0 18px;
        max-width: 34ch;
        color: rgba(255, 255, 255, .62);
        font-size: 15px;
        line-height: 1.7;
    }

    .ssm-portfolio_content--text-cta {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 14px 16px 14px 26px;
        border-radius: var(--smm-radius-md);
        background: var(--smm-gradient);
        background-size: 160% 160%;
        background-position: 0% 50%;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: var(--smm-shadow-glow);
        transition: background-position .5s ease, transform .3s ease, box-shadow .3s ease;
    }

    .ssm-portfolio_content--text-cta:hover {
        background-position: 100% 50%;
        transform: translateY(-2px);
        box-shadow: 0 0 55px rgba(124, 58, 237, .3);
    }

    .ssm-portfolio_content--text-cta span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: rgba(0, 0, 0, .18);
        transition: transform .35s cubic-bezier(.34, 1.56, .64, 1);
    }

    .ssm-portfolio_content--text-cta span svg {
        width: 14px;
        height: 14px;
        display: block;
    }

    .ssm-portfolio_content--text-cta:hover span {
        transform: rotate(45deg);
    }

    /* ---------- floating hearts ---------- */

    .ssm-portfolio_content-floating-heart-left,
    .ssm-portfolio_content-floating-heart-right {
        position: absolute;
        z-index: 2;
        width: 46px;
        height: 46px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, .06);
        border: 1px solid rgba(255, 255, 255, .12);
        backdrop-filter: blur(6px);
        box-shadow: 0 0 30px rgba(236, 72, 153, .25);
        animation: heartFloat 4.5s ease-in-out infinite;
    }

    .ssm-portfolio_content-floating-heart-left::after,
    .ssm-portfolio_content-floating-heart-right::after {
        content: "";
        width: 18px;
        height: 18px;
        background: var(--smm-gradient);
        -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 21s-6.7-4.35-9.3-8.1C.6 9.9 1.7 6.2 5 5.1c2-.66 3.9.1 5 1.7 1.1-1.6 3-2.36 5-1.7 3.3 1.1 4.4 4.8 2.3 7.8C18.7 16.65 12 21 12 21z'/%3E%3C/svg%3E") center / contain no-repeat;
        mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 21s-6.7-4.35-9.3-8.1C.6 9.9 1.7 6.2 5 5.1c2-.66 3.9.1 5 1.7 1.1-1.6 3-2.36 5-1.7 3.3 1.1 4.4 4.8 2.3 7.8C18.7 16.65 12 21 12 21z'/%3E%3C/svg%3E") center / contain no-repeat;
    }

    .ssm-portfolio_content-floating-heart-left {
        left: -6px;
        top: 58%;
    }

    .ssm-portfolio_content-floating-heart-right {
        right: -6px;
        top: 12%;
        animation-delay: 1.4s;
    }

    @keyframes heartFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-14px);
        }
    }

    /* ---------- swiper track ---------- */

    .ssm-portfolio_content-swipper {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        scrollbar-width: none;
        -ms-overflow-style: none;
        cursor: grab;
        padding: 4px 4px 10px;
        user-select: none;
    }

    .ssm-portfolio_content-swipper.is-dragging {
        cursor: grabbing;
        scroll-snap-type: none;
    }

    .ssm-portfolio_content-swipper::-webkit-scrollbar {
        display: none;
    }

    .ssm-portfolio_content-swipper-card {
        flex: 0 0 auto;
        width: clamp(140px, 17vw, 190px);
        scroll-snap-align: start;
        display: flex;
        flex-direction: column;
        gap: 14px;
        opacity: 0;
        transform: translateY(20px);
        animation: portfolioIn .6s ease forwards;
        animation-delay: calc(var(--pf-i, 0) * 100ms);
    }

    .ssm-portfolio_content-swipper-card:nth-child(1) {
        --pf-i: 1;
    }

    .ssm-portfolio_content-swipper-card:nth-child(2) {
        --pf-i: 2;
    }

    .ssm-portfolio_content-swipper-card:nth-child(3) {
        --pf-i: 3;
    }

    .ssm-portfolio_content-swipper-card:nth-child(4) {
        --pf-i: 4;
    }

    .ssm-portfolio_content-swipper-card:nth-child(5) {
        --pf-i: 5;
    }

    @keyframes portfolioIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .ssm-portfolio_content-swipper-card-media {
        position: relative;
        aspect-ratio: 4/5;
        border-radius: var(--smm-radius-lg);
        overflow: hidden;
        box-shadow: var(--smm-shadow-lg);
        transition: transform .4s cubic-bezier(.2, .8, .2, 1), box-shadow .4s ease;
    }

    .ssm-portfolio_content-swipper-card:hover .ssm-portfolio_content-swipper-card-media {
        transform: translateY(-6px) scale(1.02);
        /* box-shadow: 0 26px 60px rgba(124, 58, 237, .28); */
    }

    .ssm-portfolio_content-swipper-card-media video {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
    }

    /* mood backgrounds standing in for real reels until real footage is wired up */
    .ssm-portfolio_content-swipper-card--fashion .ssm-portfolio_content-swipper-card-media {
        background: linear-gradient(165deg, #F2A65A 0%, #E8628F 55%, #7C3AED 130%);
    }

    .ssm-portfolio_content-swipper-card--skincare .ssm-portfolio_content-swipper-card-media {
        background: linear-gradient(165deg, #F3E4D4 0%, #E1BE9B 100%);
    }

    .ssm-portfolio_content-swipper-card--food .ssm-portfolio_content-swipper-card-media {
        background: linear-gradient(165deg, #241d16 0%, #3d2f21 100%);
    }

    .ssm-portfolio_content-swipper-card--sneaker .ssm-portfolio_content-swipper-card-media {
        background: var(--smm-gradient-soft);
    }

    .ssm-portfolio_content-swipper-card--portrait .ssm-portfolio_content-swipper-card-media {
        background: linear-gradient(165deg, #8A3145 0%, #C24A5D 100%);
    }

    .ssm-portfolio_content-swipper-card-icon {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: .5;
    }

    .ssm-portfolio_content-swipper-card-icon svg {
        width: 46%;
        height: 46%;
    }

    .ssm-portfolio_content-swipper-card--fashion .ssm-portfolio_content-swipper-card-icon,
    .ssm-portfolio_content-swipper-card--food .ssm-portfolio_content-swipper-card-icon,
    .ssm-portfolio_content-swipper-card--portrait .ssm-portfolio_content-swipper-card-icon {
        color: rgba(255, 255, 255, .85);
    }

    .ssm-portfolio_content-swipper-card--skincare .ssm-portfolio_content-swipper-card-icon {
        color: rgba(120, 84, 56, .75);
    }

    .ssm-portfolio_content-swipper-card--sneaker .ssm-portfolio_content-swipper-card-icon {
        color: var(--smm-primary);
        opacity: .85;
    }

    .ssm-portfolio_content-swipper-card-top {
        position: absolute;
        top: 10px;
        left: 10px;
        right: 10px;
        z-index: 2;
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .ssm-portfolio_content-swipper-card-avatar {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .9);
        border: 1.5px solid rgba(255, 255, 255, .9);
        flex-shrink: 0;
    }

    .ssm-portfolio_content-swipper-card-lines {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 3px;
        min-width: 0;
    }

    .ssm-portfolio_content-swipper-card-lines i {
        display: block;
        height: 5px;
        border-radius: 3px;
        background: rgba(255, 255, 255, .85);
        font-style: normal;
    }

    .ssm-portfolio_content-swipper-card-lines i:first-child {
        width: 70%;
    }

    .ssm-portfolio_content-swipper-card-lines i:last-child {
        width: 45%;
        opacity: .6;
    }

    .ssm-portfolio_content-swipper-card-menu {
        color: rgba(255, 255, 255, .85);
        font-size: 12px;
        line-height: 1;
        letter-spacing: 1px;
    }

    .ssm-portfolio_content-swipper-card-bottom {
        position: absolute;
        left: 10px;
        right: 10px;
        bottom: 10px;
        z-index: 2;
        display: flex;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .ssm-portfolio_content-swipper-card-stat {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        color: #fff;
        font-size: 11px;
        font-weight: 600;
        text-shadow: 0 1px 4px rgba(0, 0, 0, .35);
    }

    .ssm-portfolio_content-swipper-card-stat svg {
        width: 12px;
        height: 12px;
    }

    .ssm-portfolio_content-swipper-card-tag {
        position: absolute;
        top: 40%;
        left: 10px;
        right: 10px;
        z-index: 2;
        color: #fff;
        font-size: 17px;
        font-weight: 800;
        line-height: 1.15;
        text-align: center;
        text-shadow: 0 2px 10px rgba(91, 33, 182, .4);
    }

    .ssm-portfolio_content-swipper-card-shop {
        position: absolute;
        bottom: 34px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 2;
        padding: 5px 12px;
        border-radius: 999px;
        background: var(--smm-gradient);
        color: #fff;
        font-size: 9px;
        font-weight: 700;
        letter-spacing: .04em;
        text-transform: uppercase;
        white-space: nowrap;
    }

    .ssm-portfolio_content-swipper-card-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 3px;
        padding: 10px 8px 12px;
        border-radius: var(--smm-radius-md);
        background: var(--smm-card);
        box-shadow: var(--smm-shadow-md);
        transition: transform .4s cubic-bezier(.2, .8, .2, 1);
    }

    .ssm-portfolio_content-swipper-card:hover .ssm-portfolio_content-swipper-card-label {
        transform: translateY(-4px);
    }

    .ssm-portfolio_content-swipper-card-label-name {
        font-size: 12.5px;
        font-weight: 600;
        color: var(--smm-text-dark);
    }

    .ssm-portfolio_content-swipper-card-label-value {
        font-size: 14px;
        font-weight: 800;
        color: var(--smm-success);
    }

    /* ---------- pagination ---------- */

    .ssm-portfolio_content-swipper-control-pignation {
        grid-column: 2;
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-top: 6px;
    }

    .ssm-portfolio_content-swipper-control-pignation button {
        width: 8px;
        height: 8px;
        padding: 0;
        border: none;
        border-radius: 999px;
        background: rgba(255, 255, 255, .18);
        cursor: pointer;
        transition: width .35s ease, background .35s ease;
    }

    .ssm-portfolio_content-swipper-control-pignation button.is-active {
        width: 22px;
        background: var(--smm-gradient);
    }

    /* ---------- responsive ---------- */

    @media (max-width: 900px) {
        .ssm-portfolio_content {
            grid-template-columns: 1fr;
        }

        .ssm-portfolio_content--text {
            text-align: center;
        }

        .ssm-portfolio_content--text-para {
            margin-left: auto;
            margin-right: auto;
        }

        .ssm-portfolio_content--text-cta {
            margin: 0 auto;
        }

        .ssm-portfolio_content-swipper-control-pignation {
            grid-column: 1;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .ssm-portfolio_content-swipper-card {
            opacity: 1;
            transform: none;
            animation: none;
        }

        .ssm-portfolio_content-floating-heart-left,
        .ssm-portfolio_content-floating-heart-right {
            animation: none;
        }

        .ssm-portfolio_content-swipper {
            scroll-behavior: auto;
        }
    }
</style>

<section class="ssm-portfolio">
    <div class="ssm-portfolio_content">
        <div class="ssm-portfolio_content--text">
            <p class="ssm-portfolio_content--text-eyebrow">
                <span></span>
                Content That Gets Attention
            </p>
            <h2 class="ssm-portfolio_content--text-heading">Creative Content.
                Real Results.</h2>
            <p class="ssm-portfolio_content--text-para">
                We create scroll-stopping content that spark conversations, build brand love and delivers real business outcomes.
            </p>
            <a href="#" class="ssm-portfolio_content--text-cta">See More Work
                <span>
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9438 3.33038C22.0707 2.96779 21.9787 2.56456 21.7071 2.29292C21.4354 2.02128 21.0322 1.92926 20.6696 2.05617L1.85999 8.63954C0.577721 9.08834 0.504876 10.8743 1.74631 11.426L9.24237 14.7576L12.574 22.2537C13.1257 23.4951 14.9117 23.4223 15.3605 22.14L21.9438 3.33038ZM9.77851 12.8073L3.71105 10.1106L19.37 4.63L13.8894 20.289L11.1927 14.2215L14.7071 10.7071C15.0976 10.3166 15.0976 9.68342 14.7071 9.29289C14.3166 8.90237 13.6834 8.90237 13.2929 9.29289L9.77851 12.8073Z" fill="#ffffff"></path>
                    </svg>
                </span>
            </a>
        </div>

        <div class="ssm-portfolio_content-swipper">
            <div class="ssm-portfolio_content-swipper-card ssm-portfolio_content-swipper-card--fashion">
                <div class="ssm-portfolio_content-swipper-card-media">
                    <video src="#"></video>
                    <div class="ssm-portfolio_content-swipper-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <circle cx="8" cy="13" r="3.2" />
                            <circle cx="16" cy="13" r="3.2" />
                            <path d="M11.2 12.5h1.6M4.5 12.5 2 10M19.5 12.5 22 10" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="ssm-portfolio_content-swipper-card-top">
                        <span class="ssm-portfolio_content-swipper-card-avatar"></span>
                        <span class="ssm-portfolio_content-swipper-card-lines"><i></i><i></i></span>
                        <span class="ssm-portfolio_content-swipper-card-menu">&#8942;</span>
                    </div>
                    <div class="ssm-portfolio_content-swipper-card-bottom">
                        <span class="ssm-portfolio_content-swipper-card-stat">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                            24.5K
                        </span>
                    </div>
                </div>
                <div class="ssm-portfolio_content-swipper-card-label">
                    <span class="ssm-portfolio_content-swipper-card-label-name">Reach</span>
                    <span class="ssm-portfolio_content-swipper-card-label-value">+127%</span>
                </div>
            </div>

            <div class="ssm-portfolio_content-swipper-card ssm-portfolio_content-swipper-card--skincare">
                <div class="ssm-portfolio_content-swipper-card-media">
                    <video src="#"></video>
                    <div class="ssm-portfolio_content-swipper-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <rect x="9" y="8" width="6" height="13" rx="1.4" />
                            <path d="M10.5 8V5.6a1.5 1.5 0 0 1 1.5-1.5h0a1.5 1.5 0 0 1 1.5 1.5V8" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="ssm-portfolio_content-swipper-card-top">
                        <span class="ssm-portfolio_content-swipper-card-avatar"></span>
                        <span class="ssm-portfolio_content-swipper-card-lines"><i></i><i></i></span>
                        <span class="ssm-portfolio_content-swipper-card-menu">&#8942;</span>
                    </div>
                    <div class="ssm-portfolio_content-swipper-card-bottom">
                        <span class="ssm-portfolio_content-swipper-card-stat">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 21s-6.7-4.35-9.3-8.1C.6 9.9 1.7 6.2 5 5.1c2-.66 3.9.1 5 1.7 1.1-1.6 3-2.36 5-1.7 3.3 1.1 4.4 4.8 2.3 7.8C18.7 16.65 12 21 12 21z" />
                            </svg>
                            3,792
                        </span>
                        <span class="ssm-portfolio_content-swipper-card-stat">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M21 6h-18a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h4v3.5a.5.5 0 0 0 .85.35L12.7 18H21a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1z" />
                            </svg>
                            189
                        </span>
                    </div>
                </div>
                <div class="ssm-portfolio_content-swipper-card-label">
                    <span class="ssm-portfolio_content-swipper-card-label-name">Engagement</span>
                    <span class="ssm-portfolio_content-swipper-card-label-value">+82%</span>
                </div>
            </div>

            <div class="ssm-portfolio_content-swipper-card ssm-portfolio_content-swipper-card--food">
                <div class="ssm-portfolio_content-swipper-card-media">
                    <video src="#"></video>
                    <div class="ssm-portfolio_content-swipper-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <circle cx="12" cy="12" r="8" />
                            <circle cx="12" cy="12" r="3.2" />
                        </svg>
                    </div>
                    <div class="ssm-portfolio_content-swipper-card-top">
                        <span class="ssm-portfolio_content-swipper-card-avatar"></span>
                        <span class="ssm-portfolio_content-swipper-card-lines"><i></i><i></i></span>
                        <span class="ssm-portfolio_content-swipper-card-menu">&#8942;</span>
                    </div>
                    <div class="ssm-portfolio_content-swipper-card-bottom">
                        <span class="ssm-portfolio_content-swipper-card-stat">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                            122K
                        </span>
                    </div>
                </div>
                <div class="ssm-portfolio_content-swipper-card-label">
                    <span class="ssm-portfolio_content-swipper-card-label-name">Shares</span>
                    <span class="ssm-portfolio_content-swipper-card-label-value">+91%</span>
                </div>
            </div>

            <div class="ssm-portfolio_content-swipper-card ssm-portfolio_content-swipper-card--sneaker">
                <div class="ssm-portfolio_content-swipper-card-media">
                    <video src="#"></video>
                    <div class="ssm-portfolio_content-swipper-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <path d="M3 16.5c0-1.2.9-1.9 1.8-2.4L9 12c.6-.3 1-.9 1-1.6V9c1.7 1.9 4.1 3 6.7 3H20a2 2 0 0 1 2 2v.5c0 1.1-.9 2-2 2H4a1 1 0 0 1-1-1z" />
                        </svg>
                    </div>
                    <div class="ssm-portfolio_content-swipper-card-top">
                        <span class="ssm-portfolio_content-swipper-card-avatar"></span>
                        <span class="ssm-portfolio_content-swipper-card-lines"><i></i><i></i></span>
                        <span class="ssm-portfolio_content-swipper-card-menu">&#8942;</span>
                    </div>
                    <div class="ssm-portfolio_content-swipper-card-tag">NEW<br>ARRIVAL</div>
                    <div class="ssm-portfolio_content-swipper-card-shop">Shop Now</div>
                    <div class="ssm-portfolio_content-swipper-card-bottom">
                        <span class="ssm-portfolio_content-swipper-card-stat" style="color:var(--smm-primary-dark)">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                            128K
                        </span>
                    </div>
                </div>
                <div class="ssm-portfolio_content-swipper-card-label">
                    <span class="ssm-portfolio_content-swipper-card-label-name">Leads</span>
                    <span class="ssm-portfolio_content-swipper-card-label-value">+64%</span>
                </div>
            </div>

            <div class="ssm-portfolio_content-swipper-card ssm-portfolio_content-swipper-card--portrait">
                <div class="ssm-portfolio_content-swipper-card-media">
                    <video src="#"></video>
                    <div class="ssm-portfolio_content-swipper-card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                            <circle cx="12" cy="8.5" r="3.2" />
                            <path d="M5 20c0-3.6 3.1-6.5 7-6.5s7 2.9 7 6.5" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="ssm-portfolio_content-swipper-card-top">
                        <span class="ssm-portfolio_content-swipper-card-avatar"></span>
                        <span class="ssm-portfolio_content-swipper-card-lines"><i></i><i></i></span>
                        <span class="ssm-portfolio_content-swipper-card-menu">&#8942;</span>
                    </div>
                    <div class="ssm-portfolio_content-swipper-card-bottom">
                        <span class="ssm-portfolio_content-swipper-card-stat">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                            80.9K
                        </span>
                    </div>
                </div>
                <div class="ssm-portfolio_content-swipper-card-label">
                    <span class="ssm-portfolio_content-swipper-card-label-name">Followers</span>
                    <span class="ssm-portfolio_content-swipper-card-label-value">+58%</span>
                </div>
            </div>
        </div>

        <div class="ssm-portfolio_content-swipper-control-pignation"></div>
        <div class="ssm-portfolio_content-floating-heart-left"></div>
        <div class="ssm-portfolio_content-floating-heart-right"></div>
    </div>
</section>

<script>
    (function() {
        var track = document.querySelector('.ssm-portfolio_content-swipper');
        var dotsWrap = document.querySelector('.ssm-portfolio_content-swipper-control-pignation');
        var cards = Array.prototype.slice.call(track.children);
        var GAP = 20;
        var rafId = null;

        function step() {
            var w = cards[0].getBoundingClientRect().width + GAP;
            var perView = Math.max(1, Math.round(track.clientWidth / w));
            return {
                cardW: w,
                perView: perView
            };
        }

        function pageCount() {
            var s = step();
            return Math.max(1, Math.ceil((cards.length - s.perView) / s.perView) + 1);
        }

        function buildDots() {
            dotsWrap.innerHTML = '';
            var pages = pageCount();
            for (var i = 0; i < pages; i++) {
                var b = document.createElement('button');
                b.type = 'button';
                b.setAttribute('aria-label', 'Go to slide group ' + (i + 1));
                b.addEventListener('click', function(idx) {
                    return function() {
                        var s = step();
                        track.scrollTo({
                            left: idx * s.perView * s.cardW,
                            behavior: 'smooth'
                        });
                    };
                }(i));
                dotsWrap.appendChild(b);
            }
            updateActiveDot();
        }

        function updateActiveDot() {
            var s = step();
            var active = Math.round(track.scrollLeft / (s.perView * s.cardW));
            var dots = dotsWrap.children;
            for (var i = 0; i < dots.length; i++) {
                dots[i].classList.toggle('is-active', i === active);
            }
        }

        track.addEventListener('scroll', function() {
            if (rafId) cancelAnimationFrame(rafId);
            rafId = requestAnimationFrame(updateActiveDot);
        });

        var resizeT;
        window.addEventListener('resize', function() {
            clearTimeout(resizeT);
            resizeT = setTimeout(buildDots, 150);
        });

        /* drag-to-scroll for mouse / trackpad users */
        var isDown = false,
            startX = 0,
            startScroll = 0;

        track.addEventListener('pointerdown', function(e) {
            isDown = true;
            track.classList.add('is-dragging');
            startX = e.clientX;
            startScroll = track.scrollLeft;
            track.setPointerCapture(e.pointerId);
        });

        track.addEventListener('pointermove', function(e) {
            if (!isDown) return;
            track.scrollLeft = startScroll - (e.clientX - startX);
        });

        function endDrag() {
            isDown = false;
            track.classList.remove('is-dragging');
            updateActiveDot();
        }
        track.addEventListener('pointerup', endDrag);
        track.addEventListener('pointerleave', endDrag);

        buildDots();
    })();
</script>