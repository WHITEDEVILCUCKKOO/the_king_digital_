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
   SEO "WHAT IT CAN DO" CARD GRID
   ========================= */

    .seo-what {
        background: var(--seo-bg);
        padding: 50px 5vw;
    }

    .seo-what_content {
        max-width: 1280px;
        margin: 0 auto;
    }

    .seo-what_content--heading {
        font-size: clamp(1.9rem, 3vw, 44px);
        font-weight: 700;
        color: var(--seo-heading);
        text-align: center;
        max-width: 800px;
        margin: 0 auto 56px;
        line-height: 1.25;
    }

    .seo-what_content--heading span {
        background: var(--seo-gradient);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 50px;
        font-weight: 800;
    }

    /* ---------- Grid ---------- */

    .seo-card-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        align-items: stretch;
    }

    .seo-card-container {
        height: 100%;
        display: flex;
        align-items: stretch;
        justify-content: center;
    }

    /* ---------- Card ---------- */

    .seo-card {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        padding: 2.25em 1.75em;
        background: var(--seo-white);
        border: 1px solid var(--seo-border);
        border-radius: var(--seo-radius-lg);
        box-shadow: var(--seo-shadow);
        overflow: hidden;
        cursor: pointer;
        transition: transform var(--seo-transition), box-shadow var(--seo-transition), border-color var(--seo-transition);
    }

    .seo-card::before,
    .seo-card::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 4px;
    }

    .seo-card::before {
        width: 0;
        background: var(--seo-gradient);
        opacity: 0;
        transition: opacity 0s ease, width 0s ease;
        transition-delay: 0.4s;
    }

    .seo-card::after {
        width: 100%;
        background: var(--seo-bg-soft);
        transition: width 0.4s ease;
    }

    .seo-card-content {
        width: 100%;
    }

    .seo-card-content .logo {
        margin: 0 0 1em;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: var(--seo-primary);
    }

    .seo-card-content .h6 {
        font-size: 1.15rem;
        font-weight: 600;
        color: var(--seo-heading);
        margin: 0;
    }

    .seo-card-content .hover_content {
        overflow: hidden;
        max-height: 0;
        transform: translateY(0.75em);
        opacity: 0;
        transition: max-height 0.45s ease, transform 0.45s ease, opacity 0.35s ease;
    }

    .seo-card-content .hover_content p {
        margin: 1.25em 0 0;
        color: var(--seo-muted);
        line-height: 1.5em;
        font-size: 0.92rem;
    }

    /* ---------- Hover state ---------- */

    .seo-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--seo-shadow-hover);
        border-color: var(--seo-primary-light);
    }

    .seo-card:hover::before {
        width: 100%;
        opacity: 1;
        transition: opacity 0.4s ease, width 0.4s ease;
        transition-delay: 0s;
    }

    .seo-card:hover::after {
        width: 0;
        opacity: 0;
        transition: width 0s ease;
    }

    .seo-card:hover .logo {
        color: var(--seo-primary-dark);
    }

    .seo-card:hover .hover_content {
        max-height: 8em;
        transform: none;
        opacity: 1;
    }

    /* =========================
   RESPONSIVE
   4 columns laptop/desktop -> 2 tablet -> 1 mobile
   ========================= */

    @media (max-width: 1023px) {
        .seo-card-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .seo-what {
            padding: 72px 6vw;
        }

        .seo-what_content--heading {
            margin-bottom: 40px;
        }

        .seo-card-grid {
            grid-template-columns: 1fr;
        }

        /* hover reveal doesn't work well on touch — show content by default on mobile */
        .seo-card-content .hover_content {
            max-height: 8em;
            transform: none;
            opacity: 1;
        }

        .seo-card::before {
            width: 100%;
            opacity: 1;
        }

        .seo-card::after {
            display: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .seo-card,
        .seo-card::before,
        .seo-card::after,
        .seo-card-content .hover_content {
            transition: none;
        }
    }
</style>

<section class="seo-what">
    <div class="seo-what_content">
        <h1 class="seo-what_content--heading">What SEO Can Do For <span>Your Business</span></h1>
        <div class="seo-card-grid">
            <div class="seo-card-container">
                <div class="seo-card">
                    <div class="seo-card-content">
                        <p class="logo">King Digital</p>
                        <div class="h6">Increase Visibility</div>
                        <div class="hover_content">
                            <p>Appear where your
                                customers are searching.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seo-card-container">
                <div class="seo-card">
                    <div class="seo-card-content">
                        <p class="logo">King Digital</p>
                        <div class="h6">Drive Qualified Traffic</div>
                        <div class="hover_content">
                            <p>Attract people actively
                                looking for your services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seo-card-container">
                <div class="seo-card">
                    <div class="seo-card-content">
                        <p class="logo">King Digital</p>
                        <div class="h6">Generate More Leads</div>
                        <div class="hover_content">
                            <p>Turn search traffic into
                                meaningful enquiries.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seo-card-container">
                <div class="seo-card">
                    <div class="seo-card-content">
                        <p class="logo">King Digital</p>
                        <div class="h6">Build Long-Term Growth</div>
                        <div class="hover_content">
                            <p>Create sustainable organic
                                visibility.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>