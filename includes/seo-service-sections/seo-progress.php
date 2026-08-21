<style>
    /* =========================================================
   SEO WORKFLOW SECTION
   All rules scoped under .seo-workflow — safe to drop into
   an existing PHP page without touching global styles.
   ========================================================= */

    .seo-workflow {
        --seo-workflow-accent: #FB923C;
        --seo-workflow-accent-2: #6366F1;
        --seo-workflow-inactive: #E5EAF1;
        --seo-workflow-text: #111827;
        --seo-workflow-text-secondary: #64748B;
        --seo-workflow-card-bg: #FFFFFF;
        --seo-workflow-section-bg: #F8FAFC;
        --seo-workflow-completed: #22C55E;
        --seo-workflow-connector: #DCE3ED;
        --seo-workflow-connector-active: #2563EB;
        --seo-workflow-radius: 16px;
        --seo-workflow-transition: 320ms cubic-bezier(0.22, 0.61, 0.36, 1);

        box-sizing: border-box;
        background: var(--seo-workflow-section-bg);
        padding: clamp(48px, 7vw, 96px) clamp(16px, 4vw, 32px);
    }

    /* ---------------------------------------------------------
   HEADER
   --------------------------------------------------------- */

    .seo-workflow-header {
        max-width: 680px;
        margin: 0 auto clamp(40px, 6vw, 72px);
        text-align: center;
    }

    .seo-workflow-label {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.14em;
        color: var(--seo-workflow-accent);
        margin-bottom: 12px;
    }

    .seo-workflow-heading {
        font-size: clamp(26px, 3.6vw, 38px);
        line-height: 1.2;
        font-weight: 800;
        color: var(--seo-workflow-text);
        margin: 0 0 14px;
    }

    .seo-workflow-description {
        font-size: 15px;
        line-height: 1.6;
        color: var(--seo-workflow-text-secondary);
        margin: 0;
    }

    /* ---------------------------------------------------------
   TRACK — desktop zig-zag grid (>= 901px)
   7 columns: card, connector, card, connector, card,
   connector, card  ×  3 rows: row1, vertical-gap, row2
   --------------------------------------------------------- */

    .seo-workflow-track {
        max-width: 1240px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 20px;
    }

    /* ---------------------------------------------------------
   STEP CARD
   --------------------------------------------------------- */

    .seo-workflow-step {
        position: relative;
        background: var(--seo-workflow-card-bg);
        border: 1px solid var(--seo-workflow-inactive);
        border-radius: var(--seo-workflow-radius);
        padding: 22px 20px;
        box-shadow: 0 1px 2px rgba(17, 24, 39, 0.04);
        transition: transform var(--seo-workflow-transition),
            box-shadow var(--seo-workflow-transition),
            border-color var(--seo-workflow-transition);
        outline-offset: 3px;
    }

    .seo-workflow-step-inner {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .seo-workflow-step-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 14px;
    }

    .seo-workflow-step-number {
        position: relative;
        font-size: 13px;
        font-weight: 800;
        letter-spacing: 0.03em;
        color: var(--seo-workflow-text-secondary);
        background: var(--seo-workflow-inactive);
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background var(--seo-workflow-transition),
            color var(--seo-workflow-transition),
            transform var(--seo-workflow-transition);
    }

    .seo-workflow-step-check {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        padding: 8px;
        fill: none;
        stroke: #fff;
        stroke-width: 2.4;
        stroke-linecap: round;
        stroke-linejoin: round;
        opacity: 0;
        transform: scale(0.5);
        transition: opacity 220ms ease, transform 220ms ease;
    }

    .seo-workflow-step-icon {
        width: 34px;
        height: 34px;
        color: var(--seo-workflow-text-secondary);
        opacity: 0.55;
        transition: color var(--seo-workflow-transition),
            opacity var(--seo-workflow-transition),
            transform var(--seo-workflow-transition);
    }

    .seo-workflow-step-icon svg {
        width: 100%;
        height: 100%;
    }

    .seo-workflow-step-title {
        font-size: 18px;
        font-weight: 700;
        color: var(--seo-workflow-text);
        margin: 0 0 8px;
    }

    .seo-workflow-step-description {
        font-size: 13.5px;
        line-height: 1.55;
        color: var(--seo-workflow-text-secondary);
        margin: 0;
    }

    /* --- INACTIVE (default) already styled above --- */

    /* --- ACTIVE --- */
    .seo-workflow-step.is-active {
        border-color: var(--seo-workflow-accent);
        box-shadow: 0 12px 28px -12px rgba(37, 99, 235, 0.35);
        transform: translateY(-4px);
    }

    .seo-workflow-step.is-active .seo-workflow-step-number {
        background: var(--seo-workflow-accent);
        color: #fff;
        transform: scale(1.08);
    }

    .seo-workflow-step.is-active .seo-workflow-step-icon {
        color: var(--seo-workflow-accent);
        opacity: 1;
        transform: scale(1.08);
    }

    /* --- COMPLETED --- */
    .seo-workflow-step.is-completed {
        border-color: #CDE9D8;
    }

    .seo-workflow-step.is-completed .seo-workflow-step-number {
        background: var(--seo-workflow-completed);
        color: #fff;
    }

    .seo-workflow-step.is-completed .seo-workflow-step-number-text {
        opacity: 0;
    }

    .seo-workflow-step.is-completed .seo-workflow-step-check {
        opacity: 1;
        transform: scale(1);
    }

    .seo-workflow-step.is-completed .seo-workflow-step-icon {
        color: var(--seo-workflow-completed);
        opacity: 0.85;
    }

    /* --- HOVER / FOCUS (not touch-dependent for function) --- */
    @media (hover: hover) {
        .seo-workflow-step:hover {
            border-color: var(--seo-workflow-accent);
            box-shadow: 0 12px 28px -14px rgba(37, 99, 235, 0.3);
            transform: translateY(-3px);
        }

        .seo-workflow-step:hover .seo-workflow-step-icon {
            opacity: 1;
            transform: scale(1.05);
        }
    }

    .seo-workflow-step:focus-visible {
        outline: 2px solid var(--seo-workflow-accent);
    }

    /* ---------------------------------------------------------
   CONNECTORS (mobile-first: simple vertical connector)
   --------------------------------------------------------- */

    .seo-workflow-connector {
        display: none;
        /* shown per-breakpoint below */
    }

    .seo-workflow-connector-line {
        display: block;
        background: var(--seo-workflow-connector);
        position: relative;
        overflow: hidden;
        border-radius: 999px;
    }

    .seo-workflow-connector-fill {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, var(--seo-workflow-connector-active), var(--seo-workflow-accent-2));
        transform: scaleX(0);
        transform-origin: left center;
        transition: transform 700ms cubic-bezier(0.4, 0, 0.2, 1);
    }

    .seo-workflow-connector-arrow {
        position: relative;
        width: 8px;
        height: 8px;
        border-right: 2px solid var(--seo-workflow-connector);
        border-bottom: 2px solid var(--seo-workflow-connector);
        transition: border-color var(--seo-workflow-transition);
        flex-shrink: 0;
    }

    .seo-workflow-connector.is-active .seo-workflow-connector-fill,
    .seo-workflow-connector.is-completed .seo-workflow-connector-fill {
        transform: scaleX(1);
    }

    .seo-workflow-connector.is-active .seo-workflow-connector-arrow,
    .seo-workflow-connector.is-completed .seo-workflow-connector-arrow {
        border-color: var(--seo-workflow-accent);
    }

    /* ---------------------------------------------------------
   MOBILE / TABLET LAYOUT (<= 900px)
   Vertical single-column stack, cards full width,
   connector = short vertical line + downward chevron.
   --------------------------------------------------------- */

    @media (max-width: 900px) {
        .seo-workflow-track {
            display: flex;
            flex-direction: column;
            gap: 0;
            max-width: 520px;
        }

        .seo-workflow-connector {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            height: 40px;
            padding: 4px 0;
        }

        .seo-workflow-connector-line {
            width: 3px;
            flex: 1;
        }

        .seo-workflow-connector-fill {
            transform: scaleY(0);
            transform-origin: top center;
            background: linear-gradient(180deg, var(--seo-workflow-connector-active), var(--seo-workflow-accent-2));
        }

        .seo-workflow-connector.is-active .seo-workflow-connector-fill,
        .seo-workflow-connector.is-completed .seo-workflow-connector-fill {
            transform: scaleY(1);
        }

        .seo-workflow-connector-arrow {
            transform: rotate(45deg);
            margin-top: -2px;
        }
    }

    /* ---------------------------------------------------------
   DESKTOP ZIG-ZAG LAYOUT (>= 901px)
   --------------------------------------------------------- */

    @media (min-width: 901px) {
        .seo-workflow-track {
            grid-template-columns: 1fr 44px 1fr 44px 1fr 44px 1fr;
            grid-template-rows: auto 44px auto;
            align-items: stretch;
        }

        .seo-workflow-connector {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* --- horizontal connectors (top row: pointing right) --- */
        .seo-workflow-connector--right {
            flex-direction: row;
            gap: 6px;
        }

        .seo-workflow-connector--right .seo-workflow-connector-line {
            height: 3px;
            width: 100%;
        }

        .seo-workflow-connector--right .seo-workflow-connector-fill {
            transform: scaleX(0);
        }

        .seo-workflow-connector--right .seo-workflow-connector-arrow {
            transform: rotate(-45deg);
        }

        /* --- horizontal connectors (bottom row: pointing left) --- */
        .seo-workflow-connector--left {
            flex-direction: row-reverse;
            gap: 6px;
        }

        .seo-workflow-connector--left .seo-workflow-connector-line {
            height: 3px;
            width: 100%;
        }

        .seo-workflow-connector--left .seo-workflow-connector-fill {
            transform: scaleX(0);
            transform-origin: right center;
            background: linear-gradient(270deg, var(--seo-workflow-connector-active), var(--seo-workflow-accent-2));
        }

        .seo-workflow-connector--left .seo-workflow-connector-arrow {
            transform: rotate(135deg);
        }

        /* --- vertical connector (row1 -> row2 transition) --- */
        .seo-workflow-connector--down {
            flex-direction: column;
            gap: 4px;
            height: 100%;
        }

        .seo-workflow-connector--down .seo-workflow-connector-line {
            width: 3px;
            flex: 1;
        }

        .seo-workflow-connector--down .seo-workflow-connector-fill {
            transform: scaleY(0);
            transform-origin: top center;
            background: linear-gradient(180deg, var(--seo-workflow-connector-active), var(--seo-workflow-accent-2));
        }

        .seo-workflow-connector--down .seo-workflow-connector-arrow {
            transform: rotate(45deg);
        }

        .seo-workflow-connector--right.is-active .seo-workflow-connector-fill,
        .seo-workflow-connector--right.is-completed .seo-workflow-connector-fill,
        .seo-workflow-connector--left.is-active .seo-workflow-connector-fill,
        .seo-workflow-connector--left.is-completed .seo-workflow-connector-fill {
            transform: scaleX(1);
        }

        .seo-workflow-connector--down.is-active .seo-workflow-connector-fill,
        .seo-workflow-connector--down.is-completed .seo-workflow-connector-fill {
            transform: scaleY(1);
        }

        /* explicit grid placement — matches DOM order (step, connector) x8 */
        .seo-workflow-track>*:nth-child(1) {
            grid-column: 1;
            grid-row: 1;
        }

        .seo-workflow-track>*:nth-child(2) {
            grid-column: 2;
            grid-row: 1;
        }

        .seo-workflow-track>*:nth-child(3) {
            grid-column: 3;
            grid-row: 1;
        }

        .seo-workflow-track>*:nth-child(4) {
            grid-column: 4;
            grid-row: 1;
        }

        .seo-workflow-track>*:nth-child(5) {
            grid-column: 5;
            grid-row: 1;
        }

        .seo-workflow-track>*:nth-child(6) {
            grid-column: 6;
            grid-row: 1;
        }

        .seo-workflow-track>*:nth-child(7) {
            grid-column: 7;
            grid-row: 1;
        }

        .seo-workflow-track>*:nth-child(8) {
            grid-column: 7;
            grid-row: 2;
        }

        .seo-workflow-track>*:nth-child(9) {
            grid-column: 7;
            grid-row: 3;
        }

        .seo-workflow-track>*:nth-child(10) {
            grid-column: 6;
            grid-row: 3;
        }

        .seo-workflow-track>*:nth-child(11) {
            grid-column: 5;
            grid-row: 3;
        }

        .seo-workflow-track>*:nth-child(12) {
            grid-column: 4;
            grid-row: 3;
        }

        .seo-workflow-track>*:nth-child(13) {
            grid-column: 3;
            grid-row: 3;
        }

        .seo-workflow-track>*:nth-child(14) {
            grid-column: 2;
            grid-row: 3;
        }

        .seo-workflow-track>*:nth-child(15) {
            grid-column: 1;
            grid-row: 3;
        }
    }

    @media (min-width: 901px) and (max-width: 1023px) {
        .seo-workflow-step-description {
            font-size: 12.5px;
        }

        .seo-workflow-step-title {
            font-size: 16px;
        }
    }

    /* ---------------------------------------------------------
   REDUCED MOTION
   --------------------------------------------------------- */

    @media (prefers-reduced-motion: reduce) {

        .seo-workflow-step,
        .seo-workflow-step-number,
        .seo-workflow-step-icon,
        .seo-workflow-connector-fill,
        .seo-workflow-step-check {
            transition: none !important;
        }

        .seo-workflow-step.is-active {
            transform: none;
        }
    }
</style>

<!--
  SEO WORKFLOW SECTION
  Paste this block into the PHP page where the section should appear.
  Requires: seo-workflow.css (in <head> or before this block)
            seo-workflow.js  (before </body>, loaded with `defer`)
  All styles/scripts are scoped under .seo-workflow — safe to drop into
  an existing page without affecting other sections.
-->
<section class="seo-workflow" id="seo-workflow" aria-labelledby="seo-workflow-heading">

    <div class="seo-workflow-header">
        <span class="seo-workflow-label">SEO PROCESS</span>
        <h2 class="seo-workflow-heading" id="seo-workflow-heading">Our 8-Step SEO Workflow</h2>
        <p class="seo-workflow-description">
            A structured SEO process designed to turn search opportunities into measurable organic growth.
        </p>
    </div>

    <div class="seo-workflow-track" role="list" data-seo-workflow-track>

        <!-- STEP 01 -->
        <article class="seo-workflow-step" role="listitem" data-seo-workflow-step="0" tabindex="0">
            <div class="seo-workflow-step-inner">
                <div class="seo-workflow-step-top">
                    <div class="seo-workflow-step-number" data-seo-workflow-number>
                        <span class="seo-workflow-step-number-text">01</span>
                        <svg class="seo-workflow-step-check" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 12.5 9.5 18 20 6" />
                        </svg>
                    </div>
                    <div class="seo-workflow-step-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="10.5" cy="10.5" r="6.5" />
                            <line x1="20" y1="20" x2="15.3" y2="15.3" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-workflow-step-title">Keyword Research</h3>
                <p class="seo-workflow-step-description">
                    Identify high-value keywords, search opportunities, and phrases your target audience is actively searching for.
                </p>
            </div>
        </article>

        <div class="seo-workflow-connector seo-workflow-connector--right" data-seo-workflow-connector="0" aria-hidden="true">
            <span class="seo-workflow-connector-line"><span class="seo-workflow-connector-fill"></span></span>
            <span class="seo-workflow-connector-arrow"></span>
        </div>

        <!-- STEP 02 -->
        <article class="seo-workflow-step" role="listitem" data-seo-workflow-step="1" tabindex="0">
            <div class="seo-workflow-step-inner">
                <div class="seo-workflow-step-top">
                    <div class="seo-workflow-step-number" data-seo-workflow-number>
                        <span class="seo-workflow-step-number-text">02</span>
                        <svg class="seo-workflow-step-check" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 12.5 9.5 18 20 6" />
                        </svg>
                    </div>
                    <div class="seo-workflow-step-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="7.5" />
                            <circle cx="12" cy="12" r="3.5" />
                            <circle cx="12" cy="12" r="0.6" fill="currentColor" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-workflow-step-title">Search Intent Analysis</h3>
                <p class="seo-workflow-step-description">
                    Understand what users actually want when they search and classify the intent behind each target keyword.
                </p>
            </div>
        </article>

        <div class="seo-workflow-connector seo-workflow-connector--right" data-seo-workflow-connector="1" aria-hidden="true">
            <span class="seo-workflow-connector-line"><span class="seo-workflow-connector-fill"></span></span>
            <span class="seo-workflow-connector-arrow"></span>
        </div>

        <!-- STEP 03 -->
        <article class="seo-workflow-step" role="listitem" data-seo-workflow-step="2" tabindex="0">
            <div class="seo-workflow-step-inner">
                <div class="seo-workflow-step-top">
                    <div class="seo-workflow-step-number" data-seo-workflow-number>
                        <span class="seo-workflow-step-number-text">03</span>
                        <svg class="seo-workflow-step-check" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 12.5 9.5 18 20 6" />
                        </svg>
                    </div>
                    <div class="seo-workflow-step-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="4" y="13" width="3.4" height="7" />
                            <rect x="10.3" y="9" width="3.4" height="11" />
                            <rect x="16.6" y="4.5" width="3.4" height="15.5" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-workflow-step-title">Competitor &amp; SERP Analysis</h3>
                <p class="seo-workflow-step-description">
                    Analyze competing pages, search results, content gaps, rankings, and opportunities to outperform competitors.
                </p>
            </div>
        </article>

        <div class="seo-workflow-connector seo-workflow-connector--right" data-seo-workflow-connector="2" aria-hidden="true">
            <span class="seo-workflow-connector-line"><span class="seo-workflow-connector-fill"></span></span>
            <span class="seo-workflow-connector-arrow"></span>
        </div>

        <!-- STEP 04 -->
        <article class="seo-workflow-step" role="listitem" data-seo-workflow-step="3" tabindex="0">
            <div class="seo-workflow-step-inner">
                <div class="seo-workflow-step-top">
                    <div class="seo-workflow-step-number" data-seo-workflow-number>
                        <span class="seo-workflow-step-number-text">04</span>
                        <svg class="seo-workflow-step-check" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 12.5 9.5 18 20 6" />
                        </svg>
                    </div>
                    <div class="seo-workflow-step-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="5" cy="6" r="2.2" />
                            <circle cx="19" cy="6" r="2.2" />
                            <circle cx="12" cy="18" r="2.2" />
                            <path d="M6.9 7.3 10.4 16.2M17.1 7.3 13.6 16.2M7.2 6h9.6" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-workflow-step-title">Search Intent Mapping</h3>
                <p class="seo-workflow-step-description">
                    Map keywords and search intent to the right pages, topics, and content structure across the website.
                </p>
            </div>
        </article>

        <div class="seo-workflow-connector seo-workflow-connector--down" data-seo-workflow-connector="3" aria-hidden="true">
            <span class="seo-workflow-connector-line"><span class="seo-workflow-connector-fill"></span></span>
            <span class="seo-workflow-connector-arrow"></span>
        </div>

        <!-- STEP 05 -->
        <article class="seo-workflow-step" role="listitem" data-seo-workflow-step="4" tabindex="0">
            <div class="seo-workflow-step-inner">
                <div class="seo-workflow-step-top">
                    <div class="seo-workflow-step-number" data-seo-workflow-number>
                        <span class="seo-workflow-step-number-text">05</span>
                        <svg class="seo-workflow-step-check" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 12.5 9.5 18 20 6" />
                        </svg>
                    </div>
                    <div class="seo-workflow-step-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3.5c-3 0-5.4 2.3-5.4 5.4 0 2.1 1.1 3.4 2 4.3.6.6 1 1.1 1.1 1.8h4.6c0-.7.5-1.2 1.1-1.8.9-.9 2-2.2 2-4.3 0-3.1-2.4-5.4-5.4-5.4Z" />
                            <line x1="9.7" y1="18.2" x2="14.3" y2="18.2" />
                            <line x1="10.3" y1="20.5" x2="13.7" y2="20.5" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-workflow-step-title">Content Planning</h3>
                <p class="seo-workflow-step-description">
                    Build a strategic content roadmap based on keyword opportunities, user intent, and business goals.
                </p>
            </div>
        </article>

        <div class="seo-workflow-connector seo-workflow-connector--left" data-seo-workflow-connector="4" aria-hidden="true">
            <span class="seo-workflow-connector-line"><span class="seo-workflow-connector-fill"></span></span>
            <span class="seo-workflow-connector-arrow"></span>
        </div>

        <!-- STEP 06 -->
        <article class="seo-workflow-step" role="listitem" data-seo-workflow-step="5" tabindex="0">
            <div class="seo-workflow-step-inner">
                <div class="seo-workflow-step-top">
                    <div class="seo-workflow-step-number" data-seo-workflow-number>
                        <span class="seo-workflow-step-number-text">06</span>
                        <svg class="seo-workflow-step-check" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 12.5 9.5 18 20 6" />
                        </svg>
                    </div>
                    <div class="seo-workflow-step-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 4h8l4 4v12H6Z" />
                            <path d="M14 4v4h4" />
                            <path d="M9 20.5 8.1 22.8 5.6 22l.5-2.5 6-6 2.5.5-.5 2.5Z" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-workflow-step-title">Content Creation</h3>
                <p class="seo-workflow-step-description">
                    Create useful, authoritative, search-focused content designed for both users and search engines.
                </p>
            </div>
        </article>

        <div class="seo-workflow-connector seo-workflow-connector--left" data-seo-workflow-connector="5" aria-hidden="true">
            <span class="seo-workflow-connector-line"><span class="seo-workflow-connector-fill"></span></span>
            <span class="seo-workflow-connector-arrow"></span>
        </div>

        <!-- STEP 07 -->
        <article class="seo-workflow-step" role="listitem" data-seo-workflow-step="6" tabindex="0">
            <div class="seo-workflow-step-inner">
                <div class="seo-workflow-step-top">
                    <div class="seo-workflow-step-number" data-seo-workflow-number>
                        <span class="seo-workflow-step-number-text">07</span>
                        <svg class="seo-workflow-step-check" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 12.5 9.5 18 20 6" />
                        </svg>
                    </div>
                    <div class="seo-workflow-step-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="4" y="3.5" width="16" height="17" rx="1.2" />
                            <line x1="7" y1="8" x2="17" y2="8" />
                            <line x1="7" y1="11.3" x2="14" y2="11.3" />
                            <circle cx="15.5" cy="16.2" r="2.6" />
                            <line x1="17.4" y1="18.1" x2="19" y2="19.7" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-workflow-step-title">On-Page Optimization</h3>
                <p class="seo-workflow-step-description">
                    Optimize titles, headings, content, internal links, metadata, and other on-page SEO signals.
                </p>
            </div>
        </article>

        <div class="seo-workflow-connector seo-workflow-connector--left" data-seo-workflow-connector="6" aria-hidden="true">
            <span class="seo-workflow-connector-line"><span class="seo-workflow-connector-fill"></span></span>
            <span class="seo-workflow-connector-arrow"></span>
        </div>

        <!-- STEP 08 -->
        <article class="seo-workflow-step" role="listitem" data-seo-workflow-step="7" tabindex="0">
            <div class="seo-workflow-step-inner">
                <div class="seo-workflow-step-top">
                    <div class="seo-workflow-step-number" data-seo-workflow-number>
                        <span class="seo-workflow-step-number-text">08</span>
                        <svg class="seo-workflow-step-check" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M4 12.5 9.5 18 20 6" />
                        </svg>
                    </div>
                    <div class="seo-workflow-step-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2.5c2.8 1.6 4.6 4.6 4.6 8.7 0 3-1.4 6.6-2.6 8.3h-4c-1.2-1.7-2.6-5.3-2.6-8.3 0-4.1 1.8-7.1 4.6-8.7Z" />
                            <circle cx="12" cy="10.5" r="1.8" />
                            <path d="M8.2 16.7 5.5 19.4M15.8 16.7l2.7 2.7M9.3 21.5h5.4" />
                        </svg>
                    </div>
                </div>
                <h3 class="seo-workflow-step-title">Publish, Index &amp; Improve</h3>
                <p class="seo-workflow-step-description">
                    Publish the optimized content, monitor indexing and rankings, analyze performance, and continuously improve.
                </p>
            </div>
        </article>

    </div>

</section>

<script>
    /* =========================================================
   SEO WORKFLOW SECTION — vanilla JS state machine
   No dependencies. Scroll-triggered, loops while visible.
   ========================================================= */

    (function() {
        'use strict';

        var seoWorkflowSection = document.getElementById('seo-workflow');
        if (!seoWorkflowSection) return;

        var seoWorkflowTrack = seoWorkflowSection.querySelector('[data-seo-workflow-track]');
        var seoWorkflowSteps = Array.prototype.slice.call(
            seoWorkflowSection.querySelectorAll('[data-seo-workflow-step]')
        );
        var seoWorkflowConnectors = Array.prototype.slice.call(
            seoWorkflowSection.querySelectorAll('[data-seo-workflow-connector]')
        );

        var seoWorkflowPrefersReducedMotion =
            window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        var seoWorkflowSupportsHover =
            window.matchMedia && window.matchMedia('(hover: hover)').matches;

        var seoWorkflowStepDwellMs = 1000; // time a step stays active before advancing
        var seoWorkflowLoopPauseMs = 2000; // pause after step 8 before restarting
        var seoWorkflowIntroDelayMs = 200; // small breathing room before step 1 fires

        var seoWorkflowCurrentStep = -1; // -1 = nothing activated yet
        var seoWorkflowTimerId = null;
        var seoWorkflowIsRunning = false;
        var seoWorkflowIsPaused = false;
        var seoWorkflowIsVisible = false;
        var seoWorkflowHasStarted = false;

        /* ---------------------------------------------------------
           Render current state onto DOM (idempotent)
           --------------------------------------------------------- */
        function seoWorkflowRender() {
            seoWorkflowSteps.forEach(function(stepEl, index) {
                stepEl.classList.remove('is-active', 'is-completed');
                if (index < seoWorkflowCurrentStep) {
                    stepEl.classList.add('is-completed');
                } else if (index === seoWorkflowCurrentStep) {
                    stepEl.classList.add('is-active');
                }
            });

            seoWorkflowConnectors.forEach(function(connectorEl, index) {
                connectorEl.classList.remove('is-active', 'is-completed');
                if (index < seoWorkflowCurrentStep) {
                    connectorEl.classList.add('is-completed');
                } else if (index === seoWorkflowCurrentStep) {
                    // connector leading INTO the active step animates its fill
                    connectorEl.classList.add('is-active');
                }
            });
        }

        /* ---------------------------------------------------------
           Reduced motion: show a settled, fully-readable end state
           with no timers and no automatic transitions.
           --------------------------------------------------------- */
        function seoWorkflowRenderStatic() {
            seoWorkflowCurrentStep = seoWorkflowSteps.length - 1;
            seoWorkflowRender();
        }

        /* ---------------------------------------------------------
           Animation loop
           --------------------------------------------------------- */
        function seoWorkflowClearTimer() {
            if (seoWorkflowTimerId !== null) {
                clearTimeout(seoWorkflowTimerId);
                seoWorkflowTimerId = null;
            }
        }

        function seoWorkflowScheduleNext(delay) {
            seoWorkflowClearTimer();
            seoWorkflowTimerId = setTimeout(seoWorkflowAdvance, delay);
        }

        function seoWorkflowAdvance() {
            if (seoWorkflowIsPaused || !seoWorkflowIsVisible) return;

            if (seoWorkflowCurrentStep >= seoWorkflowSteps.length - 1) {
                // full sequence just finished displaying — reset for a fresh loop
                seoWorkflowCurrentStep = -1;
                seoWorkflowRender();
                seoWorkflowScheduleNext(seoWorkflowIntroDelayMs);
                return;
            }

            seoWorkflowCurrentStep += 1;
            seoWorkflowRender();

            var isLastStep = seoWorkflowCurrentStep === seoWorkflowSteps.length - 1;
            seoWorkflowScheduleNext(isLastStep ? seoWorkflowLoopPauseMs : seoWorkflowStepDwellMs);
        }

        function seoWorkflowStart() {
            if (seoWorkflowIsRunning || seoWorkflowPrefersReducedMotion) return;
            seoWorkflowIsRunning = true;
            seoWorkflowHasStarted = true;
            seoWorkflowCurrentStep = -1;
            seoWorkflowRender();
            seoWorkflowScheduleNext(seoWorkflowIntroDelayMs);
        }

        function seoWorkflowPause() {
            seoWorkflowIsPaused = true;
            seoWorkflowClearTimer();
        }

        function seoWorkflowResume() {
            if (!seoWorkflowIsRunning || !seoWorkflowIsPaused) return;
            seoWorkflowIsPaused = false;
            seoWorkflowScheduleNext(seoWorkflowStepDwellMs / 2);
        }

        /* ---------------------------------------------------------
           Scroll-triggered start via IntersectionObserver
           --------------------------------------------------------- */
        if (seoWorkflowPrefersReducedMotion) {
            seoWorkflowRenderStatic();
        } else if ('IntersectionObserver' in window) {
            var seoWorkflowObserver = new IntersectionObserver(
                function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting && entry.intersectionRatio >= 0.4) {
                            seoWorkflowIsVisible = true;
                            if (!seoWorkflowHasStarted) {
                                seoWorkflowStart();
                            } else if (seoWorkflowIsPaused) {
                                seoWorkflowResume();
                            }
                        } else if (!entry.isIntersecting) {
                            // fully out of view — stop the timer to save cycles
                            seoWorkflowIsVisible = false;
                            seoWorkflowPause();
                        }
                    });
                }, {
                    threshold: [0, 0.4]
                }
            );

            seoWorkflowObserver.observe(seoWorkflowSection);
        } else {
            // no IntersectionObserver support — just start once, no scroll gating
            seoWorkflowIsVisible = true;
            seoWorkflowStart();
        }

        /* ---------------------------------------------------------
           Hover pauses the automatic sequence (desktop only);
           it is never required to see the workflow progress.
           --------------------------------------------------------- */
        if (seoWorkflowSupportsHover && !seoWorkflowPrefersReducedMotion) {
            seoWorkflowSteps.forEach(function(stepEl) {
                stepEl.addEventListener('mouseenter', seoWorkflowPause);
                stepEl.addEventListener('mouseleave', function() {
                    if (seoWorkflowIsVisible) seoWorkflowResume();
                });
                stepEl.addEventListener('focus', seoWorkflowPause);
                stepEl.addEventListener('blur', function() {
                    if (seoWorkflowIsVisible) seoWorkflowResume();
                });
            });
        }
    })();
</script>