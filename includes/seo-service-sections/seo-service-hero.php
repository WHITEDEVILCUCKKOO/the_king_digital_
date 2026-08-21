<style>
    :root {
        /* =========================
       SEO SERVICE COLOR THEME
       ========================= */

        --seo-primary: #F97316;
        --seo-primary-dark: #EA580C;
        --seo-primary-light: #FB923C;

        --seo-accent: #F59E0B;

        --seo-bg: #FDF1E5;
        --seo-bg-soft: #FFEDD5;

        --seo-white: #FFFFFF;

        --seo-heading: #1F2937;
        --seo-text: #374151;
        --seo-muted: #6B7280;

        --seo-border: #FED7AA;


        /* =========================
       SEO GRADIENTS
       ========================= */

        --seo-gradient: linear-gradient(135deg,
                #F97316 0%,
                #F59E0B 100%);

        --seo-gradient-soft: linear-gradient(135deg,
                #FFF7ED 0%,
                #FFEDD5 100%);


        /* =========================
       SEO SHADOWS
       ========================= */

        --seo-shadow: 0 10px 30px rgba(249, 115, 22, 0.10);

        --seo-shadow-hover: 0 18px 45px rgba(249, 115, 22, 0.18);


        /* =========================
       SEO UI
       ========================= */

        --seo-radius-sm: 8px;
        --seo-radius-md: 14px;
        --seo-radius-lg: 20px;
        --seo-radius-xl: 28px;

        --seo-transition: 0.3s ease;
    }

    /* =========================
   SEO HERO SECTION
   ========================= */

    .seo-hero {
        position: relative;
        background: var(--seo-bg);
        overflow: hidden;
    }

    .seo-hero::before {
        content: "";
        position: absolute;
        top: -180px;
        right: -160px;
        width: 520px;
        height: 520px;
        background: var(--seo-gradient-soft);
        border-radius: 50%;
        filter: blur(10px);
        opacity: 0.7;
        z-index: 0;
    }

    .seo-hero_content {
        position: relative;
        z-index: 1;
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        gap: 50px;
        padding: 20px 80px;
    }

    /* ---------- Text column ---------- */

    .seo-hero_content--text {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .seo-hero_content--heading {
        font-size: clamp(2rem, 3.6vw, 44px);
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.02em;
        color: var(--seo-heading);
        margin: 0 0 24px;
        white-space: pre-line;
    }

    .seo-hero_content--heading span {
        background: var(--seo-gradient);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .seo-hero_content--text hr {
        height: 2px;
        width: 100px;
        color: var(--seo-primary);
    }

    .seo-hero_content--text>p {
        font-size: 1.05rem;
        line-height: 1.7;
        color: var(--seo-text);
        max-width: 60ch;
        margin: 0 0 40px;
    }

    /* ---------- CTA ---------- */

    .seo-hero_content--cta {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--seo-gradient);
        color: var(--seo-white);
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        padding: 15px 30px;
        border-radius: var(--seo-radius-xl);
        box-shadow: var(--seo-shadow);
        transition: transform var(--seo-transition), box-shadow var(--seo-transition), background var(--seo-transition);
        margin-bottom: 20px;
    }

    .seo-hero_content--cta span {
        display: inline-block;
        transition: transform var(--seo-transition);
    }

    .seo-hero_content--cta:hover {
        transform: translateY(-2px);
        box-shadow: var(--seo-shadow-hover);
        background: var(--seo-primary-dark);
    }

    .seo-hero_content--cta:hover span {
        transform: translateX(4px);
    }

    .seo-hero_content--cta:focus-visible {
        outline: 2px solid var(--seo-primary-dark);
        outline-offset: 3px;
    }

    /* ---------- Visual column ---------- */

    .seo-hero_content--visual {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .seo-hero_content--visual::before {
        content: "";
        position: absolute;
        inset: 6%;
        /* background: var(--seo-gradient); */
        border-radius: var(--seo-radius-xl);
        opacity: 0.14;
        /* filter: blur(30px); */
        z-index: 0;
    }

    .seo-hero_content--visual img {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 460px;
        height: auto;
        border-radius: var(--seo-radius-lg);
    }

    /* ========================================
   FLOATING STAT BADGES
    ======================================== */

    .seo-hero_content--visual-floatingPoints {
        position: absolute;
        z-index: 2;
        background: var(--seo-white);
        color: var(--seo-heading);
        font-size: 0.8rem;
        font-weight: 800;
        padding: 10px 16px;
        border-radius: var(--seo-radius-md);
        box-shadow: var(--seo-shadow-hover);
        border: 1px solid var(--seo-border);
        white-space: nowrap;
        will-change: transform;
        transform: translate3d(0, 0, 0);
        animation: seoFloatingBadge 3.5s ease-in-out infinite;
    }


    /* ========================================
   BADGE POSITIONS
    ======================================== */

    .seo-hero_content--visual-floatingPoints:nth-of-type(1) {
        bottom: 8%;
        left: 76%;
        animation-delay: 0s;
    }


    .seo-hero_content--visual-floatingPoints:nth-of-type(2) {
        bottom: 50%;
        left: 4%;
        animation-delay: 1.4s;
    }


    .seo-hero_content--visual-floatingPoints:nth-of-type(3) {
        top: 2%;
        right: 4%;
        animation-delay: 2.6s;
    }


    /* ========================================
   SMOOTH FLOAT
    ======================================== */

    @keyframes seoFloatingBadge {

        0% {
            transform: translate3d(0, 0, 0);
        }

        8% {
            transform: translate3d(0, -2px, 0);
        }

        16% {
            transform: translate3d(0, -4px, 0);
        }

        24% {
            transform: translate3d(0, -6px, 0);
        }

        32% {
            transform: translate3d(0, -8px, 0);
        }

        40% {
            transform: translate3d(0, -9.5px, 0);
        }

        48% {
            transform: translate3d(0, -10.5px, 0);
        }

        55% {
            transform: translate3d(0, -11px, 0);
        }

        62% {
            transform: translate3d(0, -10px, 0);
        }

        68% {
            transform: translate3d(0, -8.5px, 0);
        }

        74% {
            transform: translate3d(0, -7px, 0);
        }

        80% {
            transform: translate3d(0, -5.5px, 0);
        }

        86% {
            transform: translate3d(0, -3.5px, 0);
        }

        92% {
            transform: translate3d(0, -1.8px, 0);
        }

        100% {
            transform: translate3d(0, 0, 0);
        }
    }


    /* ========================================
   REDUCED MOTION
    ======================================== */

    @media (prefers-reduced-motion: reduce) {

        .seo-hero_content--visual-floatingPoints {
            animation: none;
        }
    }

    /* ========================================
   SEO FEATURE STRIP
    ======================================== */

    .seo-hero_content--features {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 16px;
        width: min(100%, 1180px);
        margin: 0 auto 36px;
        padding: 0 16px;
    }


    /* ========================================
   FEATURE CARD
    ======================================== */

    .seo-hero_content--features-items {
        position: relative;
        display: flex;
        flex-direction: column;
        min-height: 118px;
        padding: 18px 18px 16px;
        background: rgba(255, 255, 255, 0.92);
        border: 1px solid var(--seo-border);
        border-radius: var(--seo-radius-md);
        box-shadow:
            0 6px 20px rgba(15, 23, 42, 0.06);
        transition:
            transform 350ms cubic-bezier(.22, 1, .36, 1),
            box-shadow 350ms cubic-bezier(.22, 1, .36, 1),
            border-color 350ms ease;
        overflow: hidden;
    }


    /* ========================================
   TOP ACCENT
    ======================================== */

    .seo-hero_content--features-items::before {
        content: "";
        display: block;
        width: 28px;
        height: 3px;
        margin-bottom: 11px;
        border-radius: 999px;
        background: var(--seo-gradient);
        transition:
            width 350ms cubic-bezier(.22, 1, .36, 1);
    }


    /* ========================================
   CARD HOVER
    ======================================== */

    .seo-hero_content--features-items:hover {
        transform: translateY(-5px);
        box-shadow:
            0 14px 30px rgba(15, 23, 42, 0.10);
        border-color: var(--seo-primary-light);
    }

    .seo-hero_content--features-items:hover::before {
        width: 100%;
    }


    /* ========================================
   CARD HEADING
    ======================================== */

    .seo-hero_content--features-items h2 {
        margin: 0 0 6px;

        font-size: 0.9rem;
        line-height: 1.3;

        font-weight: 650;

        color: var(--seo-heading);
    }


    /* ========================================
   CARD DESCRIPTION
    ======================================== */

    .seo-hero_content--features-items p {
        margin: 0;

        max-width: 100%;

        font-size: 0.78rem;
        line-height: 1.5;

        color: var(--seo-muted);
    }


    /* =========================================================
   SEO HERO RESPONSIVE SYSTEM
   Replace ALL existing SEO hero media queries with this
   ========================================================= */


    /* =========================================================
   LARGE TABLET / SMALL DESKTOP
   1024px and below
   ========================================================= */

    @media (max-width: 1024px) {

        .seo-hero_content {
            max-width: 100%;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            padding: 40px 40px;
        }

        .seo-hero_content--heading {
            font-size: clamp(2rem, 4vw, 2.7rem);
        }

        .seo-hero_content--text>p {
            max-width: 55ch;
            font-size: 1rem;
        }

        .seo-hero_content--visual {
            min-width: 0;
        }

        /* Floating badges become less intrusive */
        .seo-hero_content--visual-floatingPoints {
            display: none;
        }

        /* Feature cards */
        .seo-hero_content--features {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            padding: 0 40px;
        }

        .seo-hero_content--features-items {
            min-width: 0;
            padding: 18px 16px;
        }

        .seo-hero_content--features-items h2 {
            font-size: 0.88rem;
        }

        .seo-hero_content--features-items p {
            font-size: 0.76rem;
        }
    }


    /* =========================================================
   TABLET
   900px and below
   ========================================================= */

    @media (max-width: 900px) {

        .seo-hero_content {
            grid-template-columns: 1fr;
            gap: 30px;
            padding: 50px 35px 30px;
        }

        /*
       Hide visual completely.
       Since grid is now 1 column, there is no empty
       second column left behind.
    */
        .seo-hero_content--visual {
            display: none;
        }

        .seo-hero_content--text {
            width: 100%;
            max-width: 760px;
            margin: 0 auto;
            align-items: center;
            text-align: center;
        }

        .seo-hero_content--heading {
            width: 100%;
            max-width: 700px;
            font-size: clamp(2rem, 5vw, 2.8rem);
        }

        .seo-hero_content--text hr {
            width: 80px;
            margin: 0 auto 20px;
        }

        .seo-hero_content--text>p {
            max-width: 65ch;
            margin-bottom: 28px;
            font-size: 1rem;
        }

        .seo-hero_content--features {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            padding: 0 35px;
            margin-bottom: 35px;
        }

        .seo-hero_content--features-items {
            min-height: 120px;
            padding: 17px 15px;
        }
    }


    /* =========================================================
   MOBILE
   700px and below
   ========================================================= */

    @media (max-width: 700px) {

        .seo-hero {
            padding: 60px 16px 45px;
        }

        .seo-hero_content {
            width: 100%;
            padding: 0;
            gap: 25px;
        }

        .seo-hero_content--text {
            width: 100%;
            max-width: 100%;
        }

        .seo-hero_content--heading {
            width: 100%;
            max-width: 100%;
            font-size: clamp(1.8rem, 8vw, 2.35rem);
            line-height: 1.15;
            margin-bottom: 18px;
            letter-spacing: -0.015em;
        }

        .seo-hero_content--text>p {
            width: 100%;
            max-width: 100%;
            font-size: 0.92rem;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .seo-hero_content--cta {
            font-size: 0.88rem;
            padding: 13px 24px;
            margin-bottom: 10px;
        }


        /* ========================================
       FEATURE CARDS
       ======================================== */

        .seo-hero_content--features {
            display: grid;
            grid-template-columns: 1fr;
            width: 100%;
            max-width: 520px;
            gap: 12px;
            padding: 0;
            margin: 0 auto;
            margin-bottom: 25px;
        }

        .seo-hero_content--features-items {
            width: 100%;
            min-height: auto;
            padding: 16px 17px;
            border-radius: var(--seo-radius-md);
        }

        .seo-hero_content--features-items::before {
            width: 25px;
            height: 3px;
            margin-bottom: 9px;
        }

        .seo-hero_content--features-items h2 {
            font-size: 0.88rem;
            line-height: 1.3;
            margin-bottom: 6px;
        }

        .seo-hero_content--features-items p {
            font-size: 0.76rem;
            line-height: 1.5;
        }

        .seo-hero_content--features-items:hover {
            transform: translateY(-3px);
        }
    }


    /* =========================================================
   SMALL MOBILE
   480px and below
   ========================================================= */

    @media (max-width: 480px) {

        .seo-hero {
            padding: 50px 14px 35px;
        }

        .seo-hero_content {
            gap: 22px;
        }

        .seo-hero_content--heading {
            font-size: clamp(1.7rem, 8.5vw, 2rem);
            line-height: 1.18;
            margin-bottom: 16px;
        }

        .seo-hero_content--text hr {
            width: 60px;
            height: 2px;
            margin-bottom: 17px;
        }

        .seo-hero_content--text>p {
            font-size: 0.86rem;
            line-height: 1.55;
            margin-bottom: 22px;
        }

        .seo-hero_content--cta {
            font-size: 0.84rem;
            padding: 12px 21px;
            gap: 8px;
        }

        .seo-hero_content--features {
            width: 100%;
            max-width: 100%;
            gap: 10px;
        }

        .seo-hero_content--features-items {
            padding: 14px;
        }

        .seo-hero_content--features-items::before {
            width: 23px;
            height: 3px;
            margin-bottom: 8px;
        }

        .seo-hero_content--features-items h2 {
            font-size: 0.83rem;
        }

        .seo-hero_content--features-items p {
            font-size: 0.73rem;
            line-height: 1.45;
        }
    }


    /* =========================================================
   VERY SMALL PHONES
   360px and below
   ========================================================= */

    @media (max-width: 360px) {

        .seo-hero {
            padding-left: 12px;
            padding-right: 12px;
        }

        .seo-hero_content--heading {
            font-size: 1.65rem;
        }

        .seo-hero_content--text>p {
            font-size: 0.82rem;
        }

        .seo-hero_content--cta {
            padding: 11px 18px;
            font-size: 0.8rem;
        }

        .seo-hero_content--features-items {
            padding: 13px;
        }

        .seo-hero_content--features-items h2 {
            font-size: 0.8rem;
        }

        .seo-hero_content--features-items p {
            font-size: 0.7rem;
        }
    }


    /* =========================================================
   REDUCED MOTION
   ========================================================= */

    @media (prefers-reduced-motion: reduce) {

        .seo-hero_content--features-items,
        .seo-hero_content--cta,
        .seo-hero_content--cta span {
            transition: none;
        }

        .seo-hero_content--features-items:hover {
            transform: none;
        }
    }
</style>

<section class="seo-hero">
    <div class="seo-hero_content">
        <div class="seo-hero_content--text">
            <h1 class="seo-hero_content--heading">
                SEO Services that results
                in <span>MQLs and orders</span>
            </h1>
            <hr>
            <p>
                KingDigital delivers performance-focused SEO solutions that help brands grow faster and drive targeted traffic. Partner with an affordable SEO company that turns strategy into success.
            </p>

            <a href="#" class="seo-hero_content--cta">Start Conquering <span>➜</span></a>
        </div>
        <div class="seo-hero_content--visual">
            <img src="assets/images/seo1.png" alt="#">
            <div class="seo-hero_content--visual-floatingPoints floating-point-1">
                <span>AI Visibility ↑ 68%</span>
            </div>

            <div class="seo-hero_content--visual-floatingPoints floating-point-2">
                <span>Zero-click search optimization</span>
            </div>

            <div class="seo-hero_content--visual-floatingPoints floating-point-3">
                <span>Answer Engine Optimization</span>
            </div>
        </div>
    </div>
    <div class="seo-hero_content--features">
        <div class="seo-hero_content--features-items">
            <h2>Specialized Expertise</h2>
            <p>Experts in Local SEO, Ecommerce SEO, Voice SEO, and emerging AI SEO.</p>
        </div>
        <div class="seo-hero_content--features-items">
            <h2>Core Optimization</h2>
            <p>Comprehensive On-page, Off-page, and Technical SEO.</p>
        </div>
        <div class="seo-hero_content--features-items">
            <h2>Supporting Services</h2>
            <p>Full-service agencies often integrate Content Marketing, Web Design, Paid Advertising, and Social Media to create a unified digital presence.</p>
        </div>
    </div>
</section>