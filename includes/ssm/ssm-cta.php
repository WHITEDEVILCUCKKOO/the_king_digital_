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
       CTA BANNER
       ======================================== */

    .ssm-cta {
        background: var(--smm-bg-soft);
        margin-bottom: 15px;
    }

    .ssm-cta_content {
        position: relative;
        max-width: var(--smm-container);
        margin: 0 auto;
        overflow: hidden;
        display: grid;
        grid-template-columns: minmax(200px, 240px) 1fr auto;
        align-items: center;
        gap: 32px;
        padding: 40px 48px;
        border-radius: var(--smm-radius-xl);
        background: var(--smm-gradient);
        box-shadow: var(--smm-shadow-lg);
    }

    /* soft glow shapes for depth */
    .ssm-cta_content::before,
    .ssm-cta_content::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        filter: blur(70px);
        pointer-events: none;
    }

    .ssm-cta_content::before {
        width: 260px;
        height: 260px;
        top: -120px;
        left: 10%;
        background: rgba(255, 255, 255, .18);
    }

    .ssm-cta_content::after {
        width: 220px;
        height: 220px;
        bottom: -130px;
        right: 20%;
        background: rgba(249, 115, 22, .25);
    }

    /* ---------- visual collage ---------- */

    .ssm-cta_content-visual {
        position: relative;
        z-index: 1;
        height: 168px;
    }

    .ssm-cta_content-visual::before {
        content: "";
        position: absolute;
        top: -14px;
        left: 6px;
        width: 30px;
        height: 30px;
        background: var(--smm-accent-light);
        opacity: .9;
        -webkit-mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 2l1.8 5.6L19 9l-5.2 1.4L12 16l-1.8-5.6L5 9l5.2-1.4z'/%3E%3C/svg%3E") center / contain no-repeat;
        mask: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M12 2l1.8 5.6L19 9l-5.2 1.4L12 16l-1.8-5.6L5 9l5.2-1.4z'/%3E%3C/svg%3E") center / contain no-repeat;
        animation: ctaTwinkle 2.4s ease-in-out infinite;
    }

    @keyframes ctaTwinkle {

        0%,
        100% {
            transform: scale(1) rotate(0deg);
            opacity: .55;
        }

        50% {
            transform: scale(1.25) rotate(12deg);
            opacity: 1;
        }
    }

    .ssm-cta_content-visual img,
    .ssm-cta_content-visual-card {
        position: absolute;
        border-radius: 14px;
        border: 3px solid rgba(255, 255, 255, .9);
        box-shadow: 0 12px 28px rgba(24, 16, 38, .28);
        object-fit: cover;
        transition: transform .4s ease;
    }

    .ssm-cta_content-visual:hover img,
    .ssm-cta_content-visual:hover .ssm-cta_content-visual-card {
        transform: translateY(-4px);
    }

    .ssm-cta_content-visual img {
        width: 96px;
        height: 122px;
        left: 8px;
        top: 14px;
        transform: rotate(-6deg);
        z-index: 3;
        background: linear-gradient(160deg, #7C3AED, #EC4899);
    }

    .ssm-cta_content-visual:hover img {
        transform: rotate(-6deg) translateY(-4px);
    }

    .ssm-cta_content-visual-card {
        display: flex;
        align-items: flex-end;
        padding: 6px;
    }

    .ssm-cta_content-visual-card--a {
        width: 78px;
        height: 60px;
        left: 74px;
        bottom: 6px;
        transform: rotate(4deg);
        z-index: 2;
        background: linear-gradient(160deg, #FDE0C4, #F2A65A);
    }

    .ssm-cta_content-visual:hover .ssm-cta_content-visual-card--a {
        transform: rotate(4deg) translateY(-4px);
    }

    .ssm-cta_content-visual-card--b {
        width: 74px;
        height: 92px;
        right: 6px;
        top: 4px;
        transform: rotate(6deg);
        z-index: 2;
        background: linear-gradient(160deg, #F9A8D4, #7C3AED);
    }

    .ssm-cta_content-visual:hover .ssm-cta_content-visual-card--b {
        transform: rotate(6deg) translateY(-4px);
    }

    .ssm-cta_content-visual-card--c {
        width: 60px;
        height: 60px;
        right: 18px;
        bottom: 2px;
        transform: rotate(-5deg);
        z-index: 3;
        background: linear-gradient(160deg, #FBCFE8, #FDBA74);
    }

    .ssm-cta_content-visual:hover .ssm-cta_content-visual-card--c {
        transform: rotate(-5deg) translateY(-4px);
    }

    .ssm-cta_content-visual-avatar {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid rgba(255, 255, 255, .95);
        box-shadow: 0 2px 6px rgba(0, 0, 0, .2);
    }

    /* ---------- heading ---------- */

    .ssm-cta_content-heading {
        position: relative;
        z-index: 1;
    }

    .ssm-cta_content-heading h2 {
        margin: 0 0 10px;
        color: #fff;
        font-size: clamp(24px, 2.6vw, 32px);
        font-weight: 800;
        letter-spacing: -0.02em;
        line-height: 1.2;
    }

    .ssm-cta_content-heading p {
        margin: 0;
        max-width: 46ch;
        color: rgba(255, 255, 255, .85);
        font-size: 15px;
        line-height: 1.6;
    }

    /* ---------- cta buttons ---------- */

    .ssm-cta_content-cta {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 14px;
    }

    .ssm-cta_content-cta a {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        white-space: nowrap;
        transition: transform .3s ease, box-shadow .3s ease, opacity .3s ease;
    }

    .ssm-cta_content-cta a:first-child {
        padding: 14px 10px 14px 24px;
        border-radius: 999px;
        background: #fff;
        color: var(--smm-text);
        font-size: 15px;
        font-weight: 700;
        box-shadow: 0 10px 24px rgba(24, 16, 38, .25);
    }

    .ssm-cta_content-cta a:first-child:hover {
        transform: translateY(-3px);
        box-shadow: 0 16px 32px rgba(24, 16, 38, .32);
    }

    .ssm-cta_content-cta a:first-child span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: var(--smm-dark);
        transition: transform .35s cubic-bezier(.34, 1.56, .64, 1);
    }

    .ssm-cta_content-cta a:first-child:hover span {
        transform: rotate(45deg);
    }

    .ssm-cta_content-cta a:first-child svg {
        width: 13px;
        height: 13px;
        fill: #fff;
    }

    .ssm-cta_content-cta a:last-child {
        margin-left: 6px;
        color: rgba(255, 255, 255, .92);
        font-size: 13.5px;
        font-weight: 600;
        padding-bottom: 1px;
        border-bottom: 1px solid rgba(255, 255, 255, .35);
    }

    .ssm-cta_content-cta a:last-child:hover {
        opacity: .8;
    }

    .ssm-cta_content-cta a:last-child svg {
        width: 15px;
        height: 15px;
        fill: rgba(255, 255, 255, .92);
    }

    /* ---------- responsive ---------- */

    @media (max-width: 900px) {
        .ssm-cta_content {
            grid-template-columns: 1fr;
            text-align: center;
            padding: 36px 28px;
        }

        .ssm-cta_content-visual {
            margin: 0 auto 12px;
            width: 200px;
        }

        .ssm-cta_content-heading p {
            margin-left: auto;
            margin-right: auto;
        }

        .ssm-cta_content-cta {
            align-items: center;
            width: 100%;
        }

        .ssm-cta_content-cta a:last-child {
            margin-left: 0;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .ssm-cta_content-visual::before {
            animation: none;
        }
    }
</style>

<section class="ssm-cta">
    <div class="ssm-cta_content">
        <div class="ssm-cta_content-visual">
            <img src="#" alt="Social content preview">
            <span class="ssm-cta_content-visual-card ssm-cta_content-visual-card--a"><span class="ssm-cta_content-visual-avatar"></span></span>
            <span class="ssm-cta_content-visual-card ssm-cta_content-visual-card--b"><span class="ssm-cta_content-visual-avatar"></span></span>
            <span class="ssm-cta_content-visual-card ssm-cta_content-visual-card--c"><span class="ssm-cta_content-visual-avatar"></span></span>
        </div>
        <div class="ssm-cta_content-heading">
            <h2>Ready to Grow Your Business?</h2>
            <p>Let's create powerful social media campaign that drive real result for your business.</p>
        </div>
        <div class="ssm-cta_content-cta">
            <a href="#">Start Your Compaign
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M536.4-26.3c9.8-3.5 20.6-1 28 6.3s9.8 18.2 6.3 28l-178 496.9c-5 13.9-18.1 23.1-32.8 23.1-14.2 0-27-8.6-32.3-21.7l-64.2-158c-4.5-11-2.5-23.6 5.2-32.6l94.5-112.4c5.1-6.1 4.7-15-.9-20.6s-14.6-6-20.6-.9L229.2 276.1c-9.1 7.6-21.6 9.6-32.6 5.2L38.1 216.8c-13.1-5.3-21.7-18.1-21.7-32.3 0-14.7 9.2-27.8 23.1-32.8l496.9-178z" />
                    </svg>
                </span>
            </a>
            <a href="#">Talk to Our Expert
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M384 144c0 97.2-86 176-192 176-26.7 0-52.1-5-75.2-14L35.2 349.2c-9.3 4.9-20.7 3.2-28.2-4.2s-9.2-18.9-4.2-28.2l35.6-67.2C14.3 220.2 0 183.6 0 144 0 46.8 86-32 192-32S384 46.8 384 144zm0 368c-94.1 0-172.4-62.1-188.8-144 120-1.5 224.3-86.9 235.8-202.7 83.3 19.2 145 88.3 145 170.7 0 39.6-14.3 76.2-38.4 105.6l35.6 67.2c4.9 9.3 3.2 20.7-4.2 28.2s-18.9 9.2-28.2 4.2L459.2 498c-23.1 9-48.5 14-75.2 14z" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>