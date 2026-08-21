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
   SEO SERVICES — PORTRAIT CARD GRID (v2)
   ========================= */

    .seo-service {
        background: var(--seo-muted);
        padding: 50px 5vw;
    }

    .seo-service_content {
        max-width: 1280px;
        margin: 0 auto;
    }

    .seo-service_content--heading {
        max-width: 680px;
        margin: 0 auto 56px;
        text-align: center;
    }

    .seo-service_content--heading h2 {
        font-size: clamp(1.9rem, 3vw, 44px);
        font-weight: 700;
        color: var(--seo-white);
        margin: 0 0 14px;
        line-height: 1.25;
    }

    .seo-service_content--heading h2 span {
        background: var(--seo-gradient);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 50px;
    }

    .seo-service_content--heading p {
        font-size: 1rem;
        line-height: 1.65;
        color: var(--seo-bg);
        margin: 0;
    }

    /* ---------- Grid ---------- */

    .seo-service_content--grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        align-items: stretch;
    }

    /* ---------- Card ---------- */

    .seo-service_content--card {
        position: relative;
        display: flex;
        width: 100%;
        border-radius: var(--seo-radius-lg);
        overflow: hidden;
    }

    .seo-service_content--card-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        /* min-height: 380px; */
        /* aspect-ratio: 3 / 4; */
        padding: 32px 30px 28px;
        background: var(--seo-white);
        border: 1px solid var(--seo-border);
        border-radius: var(--seo-radius-lg);
        transition: transform var(--seo-transition), border-color var(--seo-transition), box-shadow var(--seo-transition);
    }

    /* faint index numeral, set via CSS counter so no markup change is needed */
    .seo-service_content--grid {
        counter-reset: seo-service-index;
    }

    .seo-service_content--card {
        counter-increment: seo-service-index;
    }

    .seo-service_content--card-content::before {
        content: "0" counter(seo-service-index);
        position: absolute;
        top: -20px;
        right: 24px;
        font-size: 5rem;
        font-weight: 700;
        color: var(--seo-bg-soft);
        z-index: 0;
        transition: color var(--seo-transition);
    }

    .seo-service_content--card-heading {
        position: relative;
        z-index: 1;
        font-weight: 700;
        font-size: 1.25rem;
        line-height: 1.3;
        color: var(--seo-heading);
        max-width: 80%;
        margin: 4px 0 14px;
    }

    .seo-service_content--card-para {
        position: relative;
        z-index: 1;
        font-size: 0.92rem;
        line-height: 1.6;
        color: var(--seo-muted);
        margin: 0;
        flex-grow: 1;
    }

    /* small accent arrow, pinned to the bottom of the card */
    /* .seo-service_content--card-content::after {
        content: "➜";
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        margin-top: 20px;
        border-radius: 50%;
        border: 1px solid var(--seo-border);
        color: var(--seo-primary);
        font-size: 0.9rem;
        transition: background var(--seo-transition), border-color var(--seo-transition), color var(--seo-transition), transform var(--seo-transition);
    } */

    /* ---------- Hover state ---------- */

    .seo-service_content--card-content:hover {
        transform: translateY(-6px);
        border-color: var(--seo-primary-light);
        box-shadow: var(--seo-shadow);
    }

    .seo-service_content--card-content:hover::before {
        color: var(--seo-border);
    }

    .seo-service_content--card-content:hover::after {
        background: var(--seo-gradient);
        border-color: transparent;
        color: var(--seo-white);
        transform: translateX(3px);
    }

    /* =========================
   RESPONSIVE
   3 columns laptop/desktop -> 2 tablet -> 1 mobile
   ========================= */

    @media (max-width: 1023px) {
        .seo-service_content--grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .seo-service {
            padding: 72px 6vw;
        }

        .seo-service_content--heading {
            margin-bottom: 40px;
        }

        .seo-service_content--grid {
            grid-template-columns: 1fr;
        }

        .seo-service_content--card-content {
            aspect-ratio: auto;
            min-height: 0;
            padding: 28px 26px 24px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .seo-service_content--card-content,
        .seo-service_content--card-content::before,
        .seo-service_content--card-content::after {
            transition: none;
        }
    }
</style>

<section class="seo-service">
    <div class="seo-service_content">
        <div class="seo-service_content--heading">
            <h2>Our <span>SEO</span> Services</h2>
            <p>The King Digital SEO Service to help businesses improve online visibility, drive organic traffic, and increase search engine rankings at affordable rates.</p>
        </div>
        <div class="seo-service_content--grid">
            <!-- From Uiverse.io by gharsh11032000 -->
            <div class="seo-service_content--card">
                <div class="seo-service_content--card-content">
                    <p class="seo-service_content--card-heading">Technical SEO</p>
                    <p class="seo-service_content--card-para">
                        Technical SEO is the optimization of a website’s infrastructure—such as speed, mobile-friendliness, and crawlability—to ensure search engines can efficiently access, index, and rank its content.
                    </p>
                </div>
            </div>
            <div class="seo-service_content--card">
                <div class="seo-service_content--card-content">
                    <p class="seo-service_content--card-heading">On-Page SEO</p>
                    <p class="seo-service_content--card-para">
                        On-Page SEO is the optimization of individual web pages—focusing on content quality, keywords, and HTML elements like title tags and headers—to improve search engine rankings and attract relevant traffic.
                    </p>
                </div>
            </div>
            <div class="seo-service_content--card">
                <div class="seo-service_content--card-content">
                    <p class="seo-service_content--card-heading">Local SEO</p>
                    <p class="seo-service_content--card-para">
                        Local SEO is the optimization of a business’s online presence—such as its Google Business Profile, local citations, and reviews—to improve visibility in location-based search results and attract nearby customers.
                    </p>
                </div>
            </div>
            <div class="seo-service_content--card">
                <div class="seo-service_content--card-content">
                    <p class="seo-service_content--card-heading">Keyword Research</p>
                    <p class="seo-service_content--card-para">
                        Keyword Research is the process of identifying and analyzing the specific terms and phrases users enter into search engines to guide content creation, optimize relevance, and target high-value traffic opportunities.
                    </p>
                </div>
            </div>
            <div class="seo-service_content--card">
                <div class="seo-service_content--card-content">
                    <p class="seo-service_content--card-heading">Content SEO</p>
                    <p class="seo-service_content--card-para">
                        Content SEO is the strategic creation and optimization of high-quality, relevant text, images, and media to satisfy user search intent, establish topical authority, and drive organic traffic through valuable information rather than just keyword matching.
                    </p>
                </div>
            </div>
            <div class="seo-service_content--card">
                <div class="seo-service_content--card-content">
                    <p class="seo-service_content--card-heading">Link Building</p>
                    <p class="seo-service_content--card-para">
                        Link Building is the off-page SEO strategy of acquiring hyperlinks from other reputable websites to your own, signaling authority and trust to search engines to improve rankings and drive referral traffic.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>