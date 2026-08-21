<style>
    /* =========================================================
   WHY CHOOSE KING DIGITAL SECTION
   All rules scoped under .seo-why — safe to drop into an
   existing PHP page without touching global styles.
   ========================================================= */

    .seo-why {

        /*
    Rebrand: pull from the site's existing design-system tokens first,
    falling back to the previous SEO-page palette only if a given
    token isn't defined yet. Swap/remove the fallbacks once the real
    var(--color-*) values are confirmed against the live site.
  */

            /* ========================================
       SEO WHY SECTION - BRAND THEME
    ======================================== */

            --seo-why-accent: var(--seo-primary, #F47B20);

            --seo-why-accent-2: var(--seo-secondary, #4F7FF7);

            --seo-why-accent-3: var(--seo-primary-light, #FF9A4A);


            /* ========================================
       BACKGROUND
    ======================================== */

            --seo-why-bg: var(--seo-bg-soft, #F7F8FA);

            --seo-why-card-bg: var(--seo-white, #FFFFFF);


            /* ========================================
       TEXT
    ======================================== */

            --seo-why-text: var(--seo-heading, #171B26);

            --seo-why-text-secondary: var(--seo-muted, #5F6673);


            /* ========================================
       BORDER
    ======================================== */

            --seo-why-border: var(--seo-border, #E3E7ED);


            /* ========================================
       STATUS
    ======================================== */

            --seo-why-success: var(--seo-success, #16A34A);


            /* ========================================
       COMPONENT
    ======================================== */

            --seo-why-radius: 24px;

            --seo-why-ease:
                300ms cubic-bezier(0.22, 0.61, 0.36, 1);


            /* ========================================
       SHADOW
    ======================================== */

            --seo-why-shadow:
                var(--seo-shadow,
                    0 8px 24px rgba(15, 23, 42, 0.10));
        

        /*
    RGB channels for the accent/text tokens, used to build the
    translucent shadows/glows below with rgba(). If the site's
    design system already exposes --color-primary-rgb (or similar),
    swap these to reference it directly instead of hardcoding.
  */
        --seo-why-accent-rgb: 37,
        99,
        235;
        --seo-why-text-rgb: 15,
        23,
        42;

        /*
    IMPORTANT — sticky boundary note:
    This element must NOT have overflow other than "visible" (hidden/
    auto/scroll/clip), or it becomes the scrolling/clipping ancestor
    for .seo-why_intro below and breaks position: sticky on it.
    The previous version had `overflow: hidden` here just to contain
    the decorative radial-gradient background — unnecessary, since a
    background never overflows its own box. Removed.
  */
        position: relative;
        box-sizing: border-box;
        background: radial-gradient(circle at 18% 25%, rgba(var(--seo-why-accent-rgb), 0.06), transparent 42%),
        var(--seo-why-bg);
        padding: 120px 0;
    }

    /*
  STICKY BOUNDARY:
  .seo-why_container is the grid that controls when the sticky intro
  releases. It's a single-row, two-column grid, so its row height is
  set by the TALLER column (the six stacked cards). `align-items:
  start` keeps the intro pinned to the top of that row instead of
  being stretched to match it — this is what gives the intro
  "extra" vertical room to travel through as sticky, and lets it
  naturally unstick once the row (i.e. the last card) runs out.
  Do not change align-items to stretch/center, and do not give this
  grid a fixed/min-height — both would break the release behavior.
*/
    .seo-why_container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px;
        display: grid;
        grid-template-columns: minmax(300px, 0.8fr) minmax(500px, 1.2fr);
        gap: 80px;
        align-items: start;
    }

    /* ---------------------------------------------------------
   LEFT — INTRO (the sticky element)
   --------------------------------------------------------- */

    .seo-why_intro {
        /*
    Offset below the site header. Uses --header-height if the
    project defines it (update/rename to match the real token);
    falls back to 80px. The extra 24px is breathing room so the
    intro doesn't sit flush under the header while sticky.
  */
        position: sticky;
        top: calc(var(--header-height, 80px) + 24px);
        opacity: 0;
        transform: translateY(24px);
        transition: opacity 600ms var(--seo-why-ease), transform 600ms var(--seo-why-ease);
    }

    .seo-why.is-visible .seo-why_intro {
        opacity: 1;
        transform: translateY(0);
    }

    .seo-why_label {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.14em;
        color: var(--seo-why-accent);
        margin-bottom: 18px;
    }

    .seo-why_heading {
        font-size: clamp(32px, 4.4vw, 56px);
        line-height: 1.12;
        font-weight: 800;
        color: var(--seo-why-text);
        margin: 0 0 22px;
    }

    .seo-why_heading span {
        background: linear-gradient(90deg, var(--seo-why-accent), var(--seo-why-accent-3));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .seo-why_description {
        font-size: 16px;
        line-height: 1.65;
        color: var(--seo-why-text-secondary);
        max-width: 440px;
        margin: 0 0 34px;
    }

    .seo-why_cta {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--seo-why-accent);
        color: var(--seo-why-card-bg);
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        padding: 14px 24px;
        border-radius: 12px;
        box-shadow: 0 10px 24px -10px rgba(var(--seo-why-accent-rgb), 0.5);
        transition: transform var(--seo-why-ease), box-shadow var(--seo-why-ease), background var(--seo-why-ease);
    }

    .seo-why_cta svg {
        width: 18px;
        height: 18px;
        transition: transform var(--seo-why-ease);
    }

    .seo-why_cta:hover,
    .seo-why_cta:focus-visible {
        transform: translateY(-2px);
        box-shadow: 0 14px 30px -10px rgba(var(--seo-why-accent-rgb), 0.55);
        background: color-mix(in srgb, var(--seo-why-accent) 85%, black);
    }

    .seo-why_cta:hover svg,
    .seo-why_cta:focus-visible svg {
        transform: translateX(3px);
    }

    .seo-why_cta:focus-visible {
        outline: 2px solid var(--seo-why-accent);
        outline-offset: 3px;
    }

    /* subtle decorative dots under the CTA */
    .seo-why_intro-visual {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 48px;
    }

    .seo-why_intro-visual span {
        display: block;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: var(--seo-why-accent);
        opacity: 0.15;
    }

    .seo-why_intro-visual span:nth-child(1) {
        opacity: 0.45;
        width: 7px;
        height: 7px;
    }

    .seo-why_intro-visual span:nth-child(2) {
        opacity: 0.32;
    }

    .seo-why_intro-visual span:nth-child(3) {
        opacity: 0.24;
    }

    .seo-why_intro-visual span:nth-child(4) {
        opacity: 0.18;
    }

    .seo-why_intro-visual span:nth-child(5) {
        opacity: 0.12;
    }

    /* ---------------------------------------------------------
   RIGHT — REASONS STACK
   --------------------------------------------------------- */

    .seo-why_reasons {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* faint connecting line running behind the number column */
    .seo-why_reasons::before {
        content: "";
        position: absolute;
        top: 30px;
        bottom: 30px;
        left: 39px;
        width: 1px;
        background: repeating-linear-gradient(to bottom,
                rgba(var(--seo-why-accent-rgb), 0.22) 0,
                rgba(var(--seo-why-accent-rgb), 0.22) 4px,
                transparent 4px,
                transparent 10px);
        z-index: 0;
    }

    /* faint growth graph behind the cards */
    .seo-why_graph {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        opacity: 0.08;
        z-index: 0;
        pointer-events: none;
    }

    /* ---------------------------------------------------------
   CARD
   --------------------------------------------------------- */

    .seo-why_card {
        position: relative;
        z-index: 1;
        background: var(--seo-why-card-bg);
        border: 1px solid var(--seo-why-border);
        border-radius: var(--seo-why-radius);
        padding: 30px 32px;
        box-shadow: var(--seo-why-shadow);
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 600ms var(--seo-why-ease), transform 600ms var(--seo-why-ease),
            border-color var(--seo-why-ease), box-shadow var(--seo-why-ease);
        outline-offset: 3px;
    }

    .seo-why.is-visible .seo-why_card {
        opacity: 1;
        transform: translateY(0);
    }

    .seo-why_card[data-seo-why-card]:nth-of-type(1) {
        transition-delay: 100ms;
    }

    .seo-why_card[data-seo-why-card]:nth-of-type(2) {
        transition-delay: 200ms;
    }

    .seo-why_card[data-seo-why-card]:nth-of-type(3) {
        transition-delay: 300ms;
    }

    .seo-why_card[data-seo-why-card]:nth-of-type(4) {
        transition-delay: 400ms;
    }

    .seo-why_card[data-seo-why-card]:nth-of-type(5) {
        transition-delay: 500ms;
    }

    .seo-why_card[data-seo-why-card]:nth-of-type(6) {
        transition-delay: 600ms;
    }

    .seo-why_card-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 18px;
    }

    .seo-why_card-number {
        font-size: 15px;
        font-weight: 800;
        letter-spacing: 0.02em;
        color: var(--seo-why-text-secondary);
        opacity: 0.5;
        transition: opacity var(--seo-why-ease), color var(--seo-why-ease);
    }

    .seo-why_card-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        background: var(--seo-why-bg);
        border: 1px solid var(--seo-why-border);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--seo-why-accent);
        transition: transform var(--seo-why-ease), background var(--seo-why-ease), border-color var(--seo-why-ease);
    }

    .seo-why_card-icon svg {
        width: 24px;
        height: 24px;
    }

    .seo-why_card-title {
        font-size: 20px;
        font-weight: 700;
        color: var(--seo-why-text);
        margin: 0 0 10px;
    }

    .seo-why_card-description {
        font-size: 15px;
        line-height: 1.6;
        color: var(--seo-why-text-secondary);
        margin: 0;
    }

    /* --- hover / focus --- */
    .seo-why_card:hover,
    .seo-why_card:focus-visible {
        transform: translateY(-5px);
        border-color: var(--seo-why-accent);
        box-shadow: 0 16px 32px -16px rgba(var(--seo-why-accent-rgb), 0.28);
    }

    .seo-why.is-visible .seo-why_card:hover,
    .seo-why.is-visible .seo-why_card:focus-visible {
        transform: translateY(-5px);
    }

    .seo-why_card:hover .seo-why_card-icon,
    .seo-why_card:focus-visible .seo-why_card-icon {
        transform: scale(1.05);
        background: rgba(var(--seo-why-accent-rgb), 0.08);
        border-color: var(--seo-why-accent);
    }

    .seo-why_card:hover .seo-why_card-number,
    .seo-why_card:focus-visible .seo-why_card-number {
        opacity: 1;
        color: var(--seo-why-accent);
    }

    .seo-why_card:focus-visible {
        outline: 2px solid var(--seo-why-accent);
    }

    /* --- scroll-driven active state (closest card to viewport center) --- */
    .seo-why_card.is-active-scroll {
        border-color: var(--seo-why-accent);
        background: rgba(var(--seo-why-accent-rgb), 0.03);
        box-shadow: 0 16px 32px -18px rgba(var(--seo-why-accent-rgb), 0.22);
    }

    .seo-why_card.is-active-scroll .seo-why_card-number {
        opacity: 1;
        color: var(--seo-why-accent);
    }

    .seo-why_card.is-active-scroll .seo-why_card-icon {
        background: rgba(var(--seo-why-accent-rgb), 0.08);
        border-color: var(--seo-why-accent);
    }

    /* ---------------------------------------------------------
   TABLET (<= 900px)
   --------------------------------------------------------- */

    @media (max-width: 900px) {
        .seo-why {
            padding: 90px 0;
        }

        .seo-why_container {
            grid-template-columns: 1fr;
            gap: 48px;
        }

        .seo-why_intro {
            position: static;
            max-width: 640px;
        }

        .seo-why_description {
            max-width: 100%;
        }
    }

    /* ---------------------------------------------------------
   MOBILE (<= 600px)
   --------------------------------------------------------- */

    @media (max-width: 600px) {
        .seo-why {
            padding: 70px 0;
        }

        .seo-why_container {
            padding: 0 18px;
            gap: 40px;
        }

        .seo-why_heading {
            font-size: clamp(28px, 8vw, 38px);
        }

        .seo-why_description {
            font-size: 15px;
        }

        .seo-why_card {
            padding: 22px;
            border-radius: 20px;
        }

        .seo-why_card-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
        }

        .seo-why_card-icon svg {
            width: 20px;
            height: 20px;
        }

        .seo-why_card-title {
            font-size: 18px;
        }

        .seo-why_card-description {
            font-size: 14px;
        }

        .seo-why_reasons::before {
            left: 33px;
        }
    }

    /* ---------------------------------------------------------
   REDUCED MOTION
   --------------------------------------------------------- */

    @media (prefers-reduced-motion: reduce) {

        .seo-why_intro,
        .seo-why_card,
        .seo-why_cta,
        .seo-why_card-icon,
        .seo-why_card-number {
            transition: none !important;
        }

        .seo-why_intro,
        .seo-why_card {
            opacity: 1 !important;
            transform: none !important;
        }

        .seo-why_card:hover,
        .seo-why_card:focus-visible {
            transform: none;
        }
    }
</style>

<!--
  WHY CHOOSE KING DIGITAL SECTION
  Paste this block into the SEO service page where the section should appear.
  Requires: seo-why.css (in <head> or before this block)
            seo-why.js  (before </body>, loaded with `defer`)
  All styles/scripts are scoped under .seo-why — safe to drop into
  an existing page without affecting other sections.

  NOTE: update the CTA href below to point at the site's actual
  contact / lead-generation page.
-->
<section class="seo-why" id="seo-why">

    <div class="seo-why_container">

        <div class="seo-why_intro" data-seo-why-intro>

            <span class="seo-why_label">WHY KING DIGITAL</span>

            <h2 class="seo-why_heading">
                SEO Built Around
                <span>Measurable Growth.</span>
            </h2>

            <p class="seo-why_description">
                We combine technical SEO, content strategy, search intent, and continuous optimization to build sustainable organic visibility that supports real business growth.
            </p>

            <a href="/contact" class="seo-why_cta">
                Start Growing
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="5" y1="12" x2="19" y2="12" />
                    <polyline points="13 6 19 12 13 18" />
                </svg>
            </a>

            <div class="seo-why_intro-visual" aria-hidden="true">
                <span></span><span></span><span></span><span></span><span></span>
            </div>

        </div>

        <div class="seo-why_reasons" data-seo-why-reasons>

            <svg class="seo-why_graph" viewBox="0 0 400 640" preserveAspectRatio="none" aria-hidden="true">
                <polyline points="10,600 80,560 150,520 210,460 270,380 330,280 390,150" fill="none" stroke="url(#seoWhyGraphGradient)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                <circle cx="10" cy="600" r="3.5" fill="#2563EB" />
                <circle cx="150" cy="520" r="3.5" fill="#2563EB" />
                <circle cx="270" cy="380" r="3.5" fill="#6366F1" />
                <circle cx="390" cy="150" r="3.5" fill="#7C3AED" />
                <defs>
                    <linearGradient id="seoWhyGraphGradient" x1="0" y1="1" x2="0" y2="0">
                        <stop offset="0%" stop-color="#2563EB" />
                        <stop offset="100%" stop-color="#7C3AED" />
                    </linearGradient>
                </defs>
            </svg>

            <!-- CARD 01 -->
            <article class="seo-why_card" data-seo-why-card tabindex="0">
                <div class="seo-why_card-top">
                    <span class="seo-why_card-number">01</span>
                    <div class="seo-why_card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="4" y1="20" x2="20" y2="20" />
                            <rect x="6" y="13" width="3" height="7" />
                            <rect x="11" y="9" width="3" height="11" />
                            <rect x="16" y="5" width="3" height="15" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-why_card-title">Data-Driven SEO Strategy</h3>
                <p class="seo-why_card-description">
                    Every campaign starts with research, search intent, competition, and measurable opportunities. We build strategies around data instead of assumptions.
                </p>
            </article>

            <!-- CARD 02 -->
            <article class="seo-why_card" data-seo-why-card tabindex="0">
                <div class="seo-why_card-top">
                    <span class="seo-why_card-number">02</span>
                    <div class="seo-why_card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3.5" y="4.5" width="17" height="12" rx="1.4" />
                            <line x1="8.5" y1="20" x2="15.5" y2="20" />
                            <line x1="12" y1="16.5" x2="12" y2="20" />
                            <circle cx="12" cy="10.5" r="2.3" />
                            <path d="M12 6.7v1.1M12 12.7v1.1M8.2 10.5h1.1M14.7 10.5h1.1M9.5 7.8l.8.8M14.5 12.4l.8.8M14.5 8.6l-.8.8M9.5 13.2l-.8.8" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-why_card-title">Technical SEO Expertise</h3>
                <p class="seo-why_card-description">
                    We strengthen the technical foundation of your website by addressing crawling, indexing, site structure, performance, and other technical SEO factors.
                </p>
            </article>

            <!-- CARD 03 -->
            <article class="seo-why_card" data-seo-why-card tabindex="0">
                <div class="seo-why_card-top">
                    <span class="seo-why_card-number">03</span>
                    <div class="seo-why_card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 4h8l4 4v12H6Z" />
                            <path d="M14 4v4h4" />
                            <path d="M9 20.5 8.1 22.8 5.6 22l.5-2.5 6-6 2.5.5-.5 2.5Z" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-why_card-title">Content Built for Search &amp; Users</h3>
                <p class="seo-why_card-description">
                    We create and optimize content around real search intent, useful information, and meaningful topics instead of filling pages with unnecessary keywords.
                </p>
            </article>

            <!-- CARD 04 -->
            <article class="seo-why_card" data-seo-why-card tabindex="0">
                <div class="seo-why_card-top">
                    <span class="seo-why_card-number">04</span>
                    <div class="seo-why_card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3.5" y="3.5" width="17" height="17" rx="1.4" />
                            <line x1="7.2" y1="15" x2="7.2" y2="17.2" />
                            <line x1="12" y1="11.5" x2="12" y2="17.2" />
                            <line x1="16.8" y1="8" x2="16.8" y2="17.2" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-why_card-title">Transparent Reporting</h3>
                <p class="seo-why_card-description">
                    Get clear visibility into campaign performance, organic traffic, rankings, visibility, conversions, and ongoing progress.
                </p>
            </article>

            <!-- CARD 05 -->
            <article class="seo-why_card" data-seo-why-card tabindex="0">
                <div class="seo-why_card-top">
                    <span class="seo-why_card-number">05</span>
                    <div class="seo-why_card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="8" />
                            <circle cx="12" cy="12" r="4" />
                            <circle cx="12" cy="12" r="0.6" fill="currentColor" />
                            <line x1="12" y1="2" x2="12" y2="5" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-why_card-title">Focus on Business Growth</h3>
                <p class="seo-why_card-description">
                    SEO is more than ranking a keyword. We focus on attracting relevant visitors and turning organic visibility into meaningful business opportunities.
                </p>
            </article>

            <!-- CARD 06 -->
            <article class="seo-why_card" data-seo-why-card tabindex="0">
                <div class="seo-why_card-top">
                    <span class="seo-why_card-number">06</span>
                    <div class="seo-why_card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12a8 8 0 0 1 13.7-5.7L20 8.5" />
                            <path d="M20 4.5v4h-4" />
                            <path d="M20 12a8 8 0 0 1-13.7 5.7L4 15.5" />
                            <path d="M4 19.5v-4h4" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-why_card-title">Continuous Optimization</h3>
                <p class="seo-why_card-description">
                    Search behavior and algorithms change constantly. We monitor performance, identify new opportunities, and continuously refine the strategy.
                </p>
            </article>

        </div>

    </div>

</section>

<script>
    /* =========================================================
   WHY CHOOSE KING DIGITAL SECTION — vanilla JS
   No dependencies. Manages classes only; CSS handles motion.
   ========================================================= */

    (function() {
        'use strict';

        var seoWhySection = document.getElementById('seo-why');
        if (!seoWhySection) return;

        var seoWhyCards = Array.prototype.slice.call(
            seoWhySection.querySelectorAll('[data-seo-why-card]')
        );

        var seoWhyPrefersReducedMotion =
            window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        /* ---------------------------------------------------------
           Entrance animation — trigger once, let CSS stagger it
           --------------------------------------------------------- */
        if (seoWhyPrefersReducedMotion) {
            seoWhySection.classList.add('is-visible');
        } else if ('IntersectionObserver' in window) {
            var seoWhyEntranceObserver = new IntersectionObserver(
                function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            seoWhySection.classList.add('is-visible');
                            observer.disconnect();
                        }
                    });
                }, {
                    threshold: 0.25
                }
            );

            seoWhyEntranceObserver.observe(seoWhySection);
        } else {
            // no IntersectionObserver support — reveal immediately
            seoWhySection.classList.add('is-visible');
        }

        /* ---------------------------------------------------------
           Scroll-driven active card — the card closest to the
           viewport's vertical center gets the active treatment.
           Uses a single IntersectionObserver with a center band,
           never a scroll-event listener.
           --------------------------------------------------------- */
        if (!seoWhyPrefersReducedMotion && 'IntersectionObserver' in window && seoWhyCards.length) {
            var seoWhyActiveObserver = new IntersectionObserver(
                function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            seoWhyCards.forEach(function(cardEl) {
                                cardEl.classList.remove('is-active-scroll');
                            });
                            entry.target.classList.add('is-active-scroll');
                        }
                    });
                }, {
                    rootMargin: '-45% 0px -45% 0px',
                    threshold: 0
                }
            );

            seoWhyCards.forEach(function(cardEl) {
                seoWhyActiveObserver.observe(cardEl);
            });
        }
    })();
</script>