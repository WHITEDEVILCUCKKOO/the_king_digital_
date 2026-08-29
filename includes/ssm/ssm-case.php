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
        --smm-gradient: linear-gradient(135deg,
                #7C3AED 0%,
                #EC4899 55%,
                #F97316 100%);

        --smm-gradient-soft: linear-gradient(135deg,
                #F5F3FF 0%,
                #FCE7F3 55%,
                #FFF7ED 100%);

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
        --smm-shadow-sm:
            0 2px 8px rgba(24, 16, 38, 0.05);

        --smm-shadow-md:
            0 8px 30px rgba(24, 16, 38, 0.08);

        --smm-shadow-lg:
            0 20px 50px rgba(124, 58, 237, 0.12);

        --smm-shadow-glow:
            0 0 40px rgba(124, 58, 237, 0.18);

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

    /* =========================================================
   CASE STUDIES SECTION
========================================================= */

    .ssm-case {
        position: relative;
        overflow: hidden;
        background: var(--smm-bg-soft);
        padding: 20px 10px;
    }

    /* Faint dotted grid, top-left */
    .ssm-case::before {
        content: "";
        position: absolute;
        top: -30px;
        left: -30px;
        width: 220px;
        height: 220px;
        background-image: radial-gradient(var(--smm-border-purple) 1.6px, transparent 1.6px);
        background-size: 16px 16px;
        -webkit-mask-image: radial-gradient(circle at 30% 30%, #000 0%, #000 40%, transparent 75%);
        mask-image: radial-gradient(circle at 30% 30%, #000 0%, #000 40%, transparent 75%);
        opacity: 0.8;
        pointer-events: none;
        z-index: 0;
    }

    /* Ambient glows */
    .ssm-case::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 0;
        background:
            radial-gradient(circle, rgba(124, 58, 237, 0.07) 0%, rgba(124, 58, 237, 0) 70%) calc(100% + 120px) -60px / 340px 340px no-repeat,
            radial-gradient(circle, rgba(236, 72, 153, 0.06) 0%, rgba(236, 72, 153, 0) 70%) -100px calc(100% + 100px) / 320px 320px no-repeat;
    }

    .ssm-case_content {
        position: relative;
        z-index: 1;
        max-width: var(--smm-container);
        margin-inline: auto;
        padding-inline: 24px;
    }

    /* ---------- Header row ---------- */

    .ssm-case_content-head {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 24px;
        margin-bottom: 32px;
    }

    .ssm-case_content-heading h2 {
        font-size: clamp(22px, 2.8vw, 27px);
        font-weight: 800;
        color: var(--smm-text);
        margin-bottom: 6px;
    }

    .ssm-case_content-heading p {
        font-size: 14px;
        font-weight: 600;
        color: var(--smm-text-muted);
    }

    .ssm-case_content-cta {
        flex: 0 0 auto;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 18px;
        border-radius: 999px;
        border: 1.5px solid var(--smm-border-purple);
        background: #FFFFFF;
        color: var(--smm-primary);
        font-size: 12px;
        font-weight: 700;
        text-decoration: none;
        white-space: nowrap;
        box-shadow: var(--smm-shadow-sm);
        transition: background 260ms ease, color 260ms ease, transform 260ms ease, box-shadow 260ms ease;
    }

    .ssm-case_content-cta::after {
        content: "\2192";
        transition: transform 220ms ease;
    }

    .ssm-case_content-cta:hover {
        background: var(--smm-gradient);
        color: #FFFFFF;
        border-color: transparent;
        transform: translateY(-2px);
        box-shadow: var(--smm-shadow-glow);
    }

    .ssm-case_content-cta:hover::after {
        transform: translateX(3px);
    }

    /* ---------- Card grid ---------- */

    .ssm-case_content-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
    }

    /* Card is a horizontal strip: a tall photo on the left,
       details stacked beside it on the right */
    .ssm-case_content-container-card {
        display: flex;
        align-items: stretch;
        background: #FFFFFF;
        border: 1px solid var(--smm-border-light);
        border-radius: var(--smm-radius-md);
        box-shadow: var(--smm-shadow-sm);
        overflow: hidden;
        transition: transform 280ms ease, box-shadow 280ms ease, border-color 280ms ease;
    }

    .ssm-case_content-container-card:hover {
        transform: translateY(-4px);
        box-shadow: var(--smm-shadow-lg);
        border-color: var(--smm-border-purple);
    }

    /* ---------- Visual strip (image/video placeholder) ---------- */

    .ssm-case_content-container-card-visual {
        position: relative;
        flex: 0 0 108px;
        width: 108px;
        align-self: stretch;
        background: var(--smm-gradient-soft);
        overflow: hidden;
    }

    .ssm-case_content-container-card-visual img,
    .ssm-case_content-container-card-visual video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 420ms ease;
    }

    .ssm-case_content-container-card:hover .ssm-case_content-container-card-visual img {
        transform: scale(1.06);
    }

    /* Placeholder tint + glyph shown until real media is added */
    .ssm-case_content-container-card-visual::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 30% 25%, rgba(124, 58, 237, 0.20), transparent 60%),
            radial-gradient(circle at 75% 75%, rgba(236, 72, 153, 0.18), transparent 60%);
    }

    .ssm-case_content-container-card-visual::after {
        content: "\f03e";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 17px;
        color: rgba(124, 58, 237, 0.35);
    }

    /* ---------- Content ---------- */

    .ssm-case_content-container-card-content {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 16px 18px;
    }

    .ssm-case_content-container-card-content h3 {
        font-size: 14.5px;
        font-weight: 700;
        color: var(--smm-text);
        margin-bottom: 2px;
    }

    .ssm-case_content-container-card-content > p {
        font-size: 11px;
        line-height: 1.4;
        color: var(--smm-text-muted);
        margin-bottom: 12px;
    }

    /* ---------- Stat row ----------
       Flat text, no chip background — three figures in a row, each
       colored by POSITION (1st = purple, 2nd = pink, 3rd = orange),
       cycling the same brand trio regardless of +/- sign. */

    .ssm-case_content-container-card-stats {
        display: flex;
        gap: 16px;
        margin-bottom: 10px;
    }

    .ssm-case_content-container-card-stats-card {
        text-align: left;
    }

    .ssm-case_content-container-card-stats-card strong {
        display: block;
        font-size: 13.5px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 2px;
    }

    .ssm-case_content-container-card-stats-card p {
        font-size: 9px;
        line-height: 1.3;
        color: var(--smm-text-muted);
        white-space: nowrap;
    }

    .ssm-case_content-container-card-stats-card:nth-child(1) strong {
        color: var(--smm-primary);
    }

    .ssm-case_content-container-card-stats-card:nth-child(2) strong {
        color: var(--smm-secondary);
    }

    .ssm-case_content-container-card-stats-card:nth-child(3) strong {
        color: var(--smm-accent);
    }

    /* ---------- View case study link ----------
       Not present in the original markup — added since the design
       calls for it. Safe, minimal addition: one <a>, no other
       structural changes. */

    .ssm-case_content-container-card-link {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 11px;
        font-weight: 700;
        color: var(--smm-primary);
        text-decoration: none;
        width: fit-content;
        transition: color 220ms ease, gap 220ms ease;
    }

    .ssm-case_content-container-card-link::after {
        content: "\2192";
        transition: transform 220ms ease;
    }

    .ssm-case_content-container-card:hover .ssm-case_content-container-card-link {
        color: var(--smm-secondary);
    }

    .ssm-case_content-container-card:hover .ssm-case_content-container-card-link::after {
        transform: translateX(3px);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 980px) {
        .ssm-case_content-container {
            grid-template-columns: repeat(2, 1fr);
        }

        .ssm-case_content-container-card:last-child {
            grid-column: 1 / -1;
        }
    }

    @media (max-width: 640px) {
        .ssm-case {
            padding: 56px 0;
        }

        .ssm-case_content-head {
            flex-direction: column;
            align-items: flex-start;
            gap: 14px;
        }

        .ssm-case_content-container {
            grid-template-columns: 1fr;
        }

        .ssm-case_content-container-card:last-child {
            grid-column: auto;
        }

        .ssm-case_content-container-card:hover {
            transform: none;
        }
    }

    @media (max-width: 420px) {
        .ssm-case_content-container-card-visual {
            flex-basis: 84px;
            width: 84px;
        }

        .ssm-case_content-container-card-stats {
            gap: 10px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .ssm-case_content-container-card,
        .ssm-case_content-container-card-visual img,
        .ssm-case_content-container-card-link,
        .ssm-case_content-cta {
            transition: none;
        }
    }
</style>

<section class="ssm-case">
    <div class="ssm-case_content">
        <div class="ssm-case_content-head">
            <div class="ssm-case_content-heading">
                <h2>Result That Speak</h2>
                <p>Real Results from Real Businesses</p>
            </div>
            <a class="ssm-case_content-cta">View All Case Studies</a>
        </div>
        <div class="ssm-case_content-container">
            <div class="ssm-case_content-container-card">
                <div class="ssm-case_content-container-card-visual">
                    <!-- Here we will have video or image -->
                </div>
                <div class="ssm-case_content-container-card-content">
                    <h3>Fashion Brand</h3>
                    <p>Instagram Growth Campiagn</p>
                    <div class="ssm-case_content-container-card-stats">
                        <div class="ssm-case_content-container-card-stats-card">
                            <strong>125%+</strong>
                            <p>Growth</p>
                        </div>
                        <div class="ssm-case_content-container-card-stats-card">
                            <strong>82%+</strong>
                            <p>Engagement</p>
                        </div>
                        <div class="ssm-case_content-container-card-stats-card">
                            <strong>42%+</strong>
                            <p>Website Traffic</p>
                        </div>
                    </div>
                    <a class="ssm-case_content-container-card-link" href="#">View Case Study</a>
                </div>
            </div>
            <div class="ssm-case_content-container-card">
                <div class="ssm-case_content-container-card-visual">
                    <!-- Here we will have video or image -->
                </div>
                <div class="ssm-case_content-container-card-content">
                    <h3>Home Decor Brand</h3>
                    <p>Facebook and Insta Ads</p>
                    <div class="ssm-case_content-container-card-stats">
                        <div class="ssm-case_content-container-card-stats-card">
                            <strong>92%+</strong>
                            <p>Leads</p>
                        </div>
                        <div class="ssm-case_content-container-card-stats-card">
                            <strong>32%-</strong>
                            <p>Cost per Lead</p>
                        </div>
                        <div class="ssm-case_content-container-card-stats-card">
                            <strong>68%+</strong>
                            <p>ROAS</p>
                        </div>
                    </div>
                    <a class="ssm-case_content-container-card-link" href="#">View Case Study</a>
                </div>
            </div>
            <div class="ssm-case_content-container-card">
                <div class="ssm-case_content-container-card-visual">
                    <!-- Here we will have video or image -->
                </div>
                <div class="ssm-case_content-container-card-content">
                    <h3>SaaS Company</h3>
                    <p>Linkedin Awarness Campiagn</p>
                    <div class="ssm-case_content-container-card-stats">
                        <div class="ssm-case_content-container-card-stats-card">
                            <strong>75%+</strong>
                            <p>Followers</p>
                        </div>
                        <div class="ssm-case_content-container-card-stats-card">
                            <strong>60%+</strong>
                            <p>Engagement</p>
                        </div>
                        <div class="ssm-case_content-container-card-stats-card">
                            <strong>120%+</strong>
                            <p>Demo Requests</p>
                        </div>
                    </div>
                    <a class="ssm-case_content-container-card-link" href="#">View Case Study</a>
                </div>
            </div>
        </div>
    </div>
</section>