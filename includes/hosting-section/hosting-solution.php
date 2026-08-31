<style>
    :root {

        /* ========================================
       PRIMARY — ORANGE
        ======================================== */

        --host-primary: #F97316;
        --host-primary-light: #FB923C;
        --host-primary-dark: #EA580C;

        --host-primary-soft: #FFF7ED;


        /* ========================================
       SECONDARY — BLUE
       Used sparingly for technology
        ======================================== */

        --host-secondary: #2563EB;
        --host-secondary-light: #60A5FA;
        --host-secondary-dark: #1D4ED8;

        --host-secondary-soft: #EFF6FF;


        /* ========================================
       DARK INFRASTRUCTURE
        ======================================== */

        --host-dark: #111827;
        --host-dark-2: #1F2937;
        --host-dark-card: #273449;


        /* ========================================
       BACKGROUNDS
        ======================================== */

        --host-bg: #FFFFFF;
        --host-bg-soft: #FAFAF9;
        --host-bg-orange: #FFF7ED;
        --host-bg-blue: #F8FAFF;


        /* ========================================
       TEXT
        ======================================== */

        --host-text: #111827;
        --host-text-secondary: #374151;
        --host-text-muted: #6B7280;

        --host-white: #FFFFFF;


        /* ========================================
       BORDERS
        ======================================== */

        --host-border: #E5E7EB;
        --host-border-orange: #FED7AA;
        --host-border-blue: #BFDBFE;


        /* ========================================
       STATUS
        ======================================== */

        --host-success: #16A34A;
        --host-warning: #F59E0B;
        --host-danger: #DC2626;


        /* ========================================
       GRADIENTS
        ======================================== */

        /* Main orange gradient */
        --host-gradient: linear-gradient(135deg,
                #F97316,
                #EA580C);

        /* Orange → subtle blue */
        --host-gradient-tech: linear-gradient(135deg,
                #F97316 0%,
                #F97316 65%,
                #2563EB 100%);

        /* Soft section background */
        --host-gradient-soft: linear-gradient(135deg,
                #FFF7ED,
                #FFFFFF);


        /* ========================================
       SHADOWS
        ======================================== */

        --host-shadow-sm:
            0 2px 8px rgba(17, 24, 39, 0.05);

        --host-shadow-md:
            0 10px 30px rgba(17, 24, 39, 0.08);

        --host-shadow-lg:
            0 20px 50px rgba(249, 115, 22, 0.12);

        --host-shadow-orange:
            0 12px 30px rgba(249, 115, 22, 0.20);


        /* ========================================
       RADIUS
        ======================================== */

        --host-radius-sm: 10px;
        --host-radius-md: 16px;
        --host-radius-lg: 24px;
        --host-radius-xl: 32px;


        /* ========================================
       LAYOUT
        ======================================== */

        --host-container: 1240px;

        --host-section-space:
            clamp(70px, 8vw, 120px);
    }

    /* ========================================
   HOSTING SOLUTIONS
    ======================================== */

    .hosting-solution {
        position: relative;
        overflow: hidden;
        padding: 30px 20px;
        background: var(--host-dark);
    }

    /* faint dot grid */
    .hosting-solution::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 0;
        background-image: radial-gradient(circle, rgba(255, 255, 255, .09) 1px, transparent 1px);
        background-size: 28px 28px;
        -webkit-mask-image: radial-gradient(ellipse 80% 70% at 50% 0%, #000 0%, transparent 75%);
        mask-image: radial-gradient(ellipse 80% 70% at 50% 0%, #000 0%, transparent 75%);
    }

    /* drifting gradient blobs */
    .hosting-solution_blob {
        position: absolute;
        z-index: 0;
        border-radius: 50%;
        filter: blur(100px);
        opacity: .35;
        pointer-events: none;
    }

    .hosting-solution_blob--a {
        width: 420px;
        height: 420px;
        top: -140px;
        left: -100px;
        background: var(--host-primary);
        animation: hsDriftA 16s ease-in-out infinite;
    }

    .hosting-solution_blob--b {
        width: 380px;
        height: 380px;
        bottom: -160px;
        right: -100px;
        background: var(--host-secondary);
        animation: hsDriftB 20s ease-in-out infinite;
    }

    .hosting-solution_blob--c {
        width: 260px;
        height: 260px;
        top: 40%;
        left: 46%;
        background: var(--host-primary-light);
        opacity: .18;
        animation: hsDriftA 24s ease-in-out infinite reverse;
    }

    @keyframes hsDriftA {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(40px, 30px) scale(1.12);
        }
    }

    @keyframes hsDriftB {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(-35px, -25px) scale(1.1);
        }
    }

    /* large faint decorative icon marks */
    .hosting-solution_deco {
        position: absolute;
        z-index: 0;
        color: rgba(255, 255, 255, .04);
        pointer-events: none;
    }

    .hosting-solution_deco svg {
        width: 100%;
        height: 100%;
    }

    .hosting-solution_deco--server {
        width: 160px;
        height: 160px;
        top: 12%;
        right: 6%;
        animation: hsSpin 40s linear infinite;
    }

    .hosting-solution_deco--cloud {
        width: 130px;
        height: 130px;
        bottom: 8%;
        left: 4%;
        animation: hsFloatDeco 9s ease-in-out infinite;
    }

    @keyframes hsSpin {
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes hsFloatDeco {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-18px);
        }
    }

    .hosting-solution_content {
        position: relative;
        z-index: 1;
        max-width: var(--host-container);
        margin: 0 auto;
    }

    /* ---------- heading ---------- */

    .hosting-solution_content-heading {
        text-align: center;
        max-width: 620px;
        margin: 0 auto 56px;
        opacity: 0;
        animation: hsRise .7s ease forwards;
    }

    .hosting-solution_content-heading h2 {
        margin: 0 0 14px;
        color: var(--host-white);
        font-size: clamp(28px, 3.2vw, 42px);
        font-weight: 800;
        letter-spacing: -0.03em;
        line-height: 1.15;
    }

    .hosting-solution_content-heading p {
        margin: 0;
        color: rgba(255, 255, 255, .62);
        font-size: 15.5px;
        line-height: 1.7;
    }

    /* ---------- cards ---------- */

    .hosting-solution_content-card-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 22px;
    }

    .hosting-solution_content-card {
        position: relative;
        padding: 30px 24px 28px;
        border-radius: var(--host-radius-lg);
        background: rgba(255, 255, 255, .055);
        border: 1px solid rgba(255, 255, 255, .12);
        backdrop-filter: blur(20px) saturate(160%);
        -webkit-backdrop-filter: blur(20px) saturate(160%);
        box-shadow: 0 8px 32px rgba(0, 0, 0, .25);
        overflow: hidden;
        opacity: 0;
        transform: translateY(24px);
        animation: hsCardIn .65s cubic-bezier(.2, .8, .2, 1) forwards;
        animation-delay: calc(var(--hs-i, 0) * 100ms);
        transition: transform .45s cubic-bezier(.2, .8, .2, 1),
            box-shadow .45s ease,
            border-color .45s ease,
            background .45s ease;
    }

    .hosting-solution_content-card:nth-child(1) {
        --hs-i: 1;
    }

    .hosting-solution_content-card:nth-child(2) {
        --hs-i: 2;
    }

    .hosting-solution_content-card:nth-child(3) {
        --hs-i: 3;
    }

    .hosting-solution_content-card:nth-child(4) {
        --hs-i: 4;
    }

    .hosting-solution_content-card:nth-child(5) {
        --hs-i: 5;
    }

    /* sheen sweep on hover */
    .hosting-solution_content-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: -68%;
        width: 45%;
        height: 100%;
        background: linear-gradient(115deg, transparent, rgba(255, 255, 255, .14), transparent);
        transform: skewX(-18deg);
        transition: left .75s ease;
        pointer-events: none;
        opacity: 0.5;
    }

    .hosting-solution_content-card:hover::before {
        left: 130%;
    }

    .hosting-solution_content-card:hover {
        transform: translateY(-8px);
        background: rgba(255, 255, 255, .09);
        border-color: rgba(251, 146, 60, .4);
        box-shadow: 0 20px 45px rgba(249, 115, 22, .18);
    }

    .hosting-solution_content-card>span {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 56px;
        height: 56px;
        margin-bottom: 20px;
        border-radius: var(--host-radius-md);
        background: var(--host-gradient);
        box-shadow: var(--host-shadow-orange);
        transition: transform .45s cubic-bezier(.34, 1.56, .64, 1);
    }

    .hosting-solution_content-card>span::after {
        content: "";
        position: absolute;
        inset: -6px;
        border-radius: inherit;
        border: 1.5px solid rgba(251, 146, 60, .45);
        opacity: 0;
        transform: scale(.85);
        transition: opacity .4s ease, transform .4s ease;
    }

    .hosting-solution_content-card:hover>span {
        transform: rotate(-8deg) scale(1.08);
    }

    .hosting-solution_content-card:hover>span::after {
        opacity: 1;
        transform: scale(1);
    }

    .hosting-solution_content-card>span svg {
        width: 26px;
        height: 26px;
        color: #fff;
    }

    .hosting-solution_content-card h3 {
        margin: 0 0 10px;
        color: var(--host-white);
        font-size: 18.5px;
        font-weight: 700;
    }

    .hosting-solution_content-card p {
        margin: 0 0 20px;
        color: rgba(255, 255, 255, .6);
        font-size: 14px;
        line-height: 1.65;
    }

    .hosting-solution_content-card a {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: var(--host-primary-light);
        font-size: 13.5px;
        font-weight: 700;
        text-decoration: none;
    }

    .hosting-solution_content-card a span {
        display: inline-block;
        transition: transform .3s ease;
    }

    .hosting-solution_content-card a:hover span {
        transform: translateX(5px);
    }

    .hosting-solution_content-card a::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -3px;
        width: 0%;
        height: 1.5px;
        background: var(--host-primary-light);
        transition: width .35s ease;
    }

    .hosting-solution_content-card a:hover::after {
        width: calc(100% - 20px);
    }

    @media (prefers-reduced-motion: reduce) {

        .hosting-solution_content-heading,
        .hosting-solution_content-card {
            opacity: 1;
            transform: none;
            animation: none;
        }

        .hosting-solution_blob--a,
        .hosting-solution_blob--b,
        .hosting-solution_blob--c,
        .hosting-solution_deco--server,
        .hosting-solution_deco--cloud {
            animation: none;
        }
    }

    @keyframes hsRise {
        from {
            opacity: 0;
            transform: translateY(14px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes hsCardIn {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<section class="hosting-solution">
    <div class="hosting-solution_blob hosting-solution_blob--a"></div>
    <div class="hosting-solution_blob hosting-solution_blob--b"></div>
    <div class="hosting-solution_blob hosting-solution_blob--c"></div>

    <div class="hosting-solution_deco hosting-solution_deco--server">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
            <rect x="3" y="4" width="18" height="6" rx="1.2" />
            <rect x="3" y="14" width="18" height="6" rx="1.2" />
            <circle cx="7" cy="7" r=".6" fill="currentColor" stroke="none" />
            <circle cx="7" cy="17" r=".6" fill="currentColor" stroke="none" />
        </svg>
    </div>
    <div class="hosting-solution_deco hosting-solution_deco--cloud">
        <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M18 18H6a4 4 0 0 1-.6-7.96A6 6 0 0 1 17.2 8.1 4.5 4.5 0 0 1 18 18z" />
        </svg>
    </div>

    <div class="hosting-solution_content">
        <div class="hosting-solution_content-heading">
            <h2>Hosting Solutions For Every Need</h2>
            <p>Reliable hosting built to match the size, speed, and demands of your business.</p>
        </div>
        <div class="hosting-solution_content-card-container">
            <div class="hosting-solution_content-card">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="6" rx="1.5" />
                        <rect x="3" y="14" width="18" height="6" rx="1.5" />
                        <circle cx="7" cy="7" r=".6" fill="currentColor" stroke="none" />
                        <circle cx="7" cy="17" r=".6" fill="currentColor" stroke="none" />
                    </svg>
                </span>
                <h3>Shared Hosting</h3>
                <p>Affordable and reliable hosting for websites, blogs, and growing businesses.</p>
                <a href="#">Learn More <span>→</span></a>
            </div>
            <div class="hosting-solution_content-card">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="4" y="3" width="16" height="7" rx="1.5" />
                        <rect x="4" y="14" width="16" height="7" rx="1.5" />
                        <path d="M8 6.5h.01M8 17.5h.01" />
                    </svg>
                </span>
                <h3>VPS Hosting</h3>
                <p>Dedicated resources and greater control for applications and growing businesses.</p>
                <a href="#">Learn More <span>→</span></a>
            </div>
            <div class="hosting-solution_content-card">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3.5" y="3.5" width="17" height="17" rx="2.5" />
                        <path d="M7.5 8.5l2.2 7 2.3-5 2.3 5 2.2-7" />
                    </svg>
                </span>
                <h3>WordPress Hosting</h3>
                <p>Optimized hosting designed for fast, secure, and reliable WordPress websites.</p>
                <a href="#">Learn More <span>→</span></a>
            </div>
            <div class="hosting-solution_content-card">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 18H6.5a4 4 0 0 1-.6-7.96 6 6 0 0 1 11.8-1.94A4.5 4.5 0 0 1 18 18z" />
                    </svg>
                </span>
                <h3>Cloud Hosting</h3>
                <p>Scalable cloud infrastructure built for flexibility, performance, and growth.</p>
                <a href="#">Learn More <span>→</span></a>
            </div>
            <div class="hosting-solution_content-card">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="6" y="2.5" width="12" height="19" rx="1.5" />
                        <path d="M9 6.5h.01M9 11h.01M9 15.5h.01" />
                    </svg>
                </span>
                <h3>Dedicated Servers</h3>
                <p>Maximum performance and complete control for demanding applications.</p>
                <a href="#">Learn More <span>→</span></a>
            </div>
        </div>
    </div>
</section>