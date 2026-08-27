<style>
    :root {

        /* =========================================================
       BRAND / PRIMARY
        ========================================================= */

        --video-primary: #FF6B1A;
        --video-primary-light: #FF8A45;
        --video-primary-dark: #E95508;

        --video-secondary: #111A33;
        --video-secondary-light: #1C2948;
        --video-secondary-dark: #080E21;


        /* =========================================================
       BACKGROUNDS
        ========================================================= */

        --video-bg: #FFFFFF;
        --video-bg-soft: #f1e7df;
        --video-bg-muted: #e0eaf7;

        --video-bg-dark: #111A33;
        --video-bg-dark-soft: #18223D;


        /* =========================================================
       TEXT
        ========================================================= */

        --video-text: #14213D;
        --video-text-secondary: #52627A;
        --video-text-muted: #8290A3;

        --video-text-light: #FFFFFF;
        --video-text-light-secondary: #C7CFDC;


        /* =========================================================
       BORDERS
        ========================================================= */

        --video-border: #E4E8EE;
        --video-border-light: #EDF0F4;
        --video-border-dark: #303A52;


        /* =========================================================
       ORANGE GRADIENTS
        ========================================================= */

        --video-gradient-primary:
            linear-gradient(135deg,
                #E95508 0%,
                #FF6B1A 55%,
                #FF8A45 100%);


        --video-gradient-orange-soft:
            linear-gradient(135deg,
                #FFF1E8 0%,
                #FFE4D3 100%);


        /* =========================================================
       DARK CTA GRADIENT
        ========================================================= */

        --video-gradient-dark:
            linear-gradient(135deg,
                #080E21 0%,
                #111A33 55%,
                #1C2948 100%);


        /* =========================================================
       HERO OVERLAY
        ========================================================= */

        --video-gradient-hero:
            linear-gradient(90deg,
                rgba(255, 255, 255, 0.98) 0%,
                rgba(255, 255, 255, 0.94) 35%,
                rgba(255, 255, 255, 0.30) 65%,
                rgba(255, 255, 255, 0) 100%);


        /* =========================================================
       SOFT GLOWS
        ========================================================= */

        --video-glow-orange:
            radial-gradient(circle,
                rgba(255, 107, 26, 0.16) 0%,
                rgba(255, 107, 26, 0) 70%);


        --video-glow-blue:
            radial-gradient(circle,
                rgba(66, 133, 244, 0.12) 0%,
                rgba(66, 133, 244, 0) 70%);


        --video-glow-purple:
            radial-gradient(circle,
                rgba(139, 92, 246, 0.12) 0%,
                rgba(139, 92, 246, 0) 70%);


        /* =========================================================
       SERVICE ACCENT COLORS
       Used for individual service cards/icons
        ========================================================= */

        --service-orange: #FF6B1A;
        --service-orange-soft: #FFF0E8;

        --service-blue: #4285F4;
        --service-blue-soft: #EDF4FF;

        --service-purple: #8B5CF6;
        --service-purple-soft: #F3EEFF;

        --service-green: #22C55E;
        --service-green-soft: #ECFDF3;

        --service-pink: #EC4899;
        --service-pink-soft: #FDF0F7;


        /* =========================================================
       STATUS / UI COLORS
        ========================================================= */

        --video-success: #22C55E;
        --video-warning: #F59E0B;
        --video-danger: #EF4444;
        --video-info: #4285F4;


        /* =========================================================
       SHADOWS
        ========================================================= */

        --video-shadow-sm:
            0 3px 10px rgba(17, 26, 51, 0.06);

        --video-shadow-md:
            0 8px 24px rgba(17, 26, 51, 0.09);

        --video-shadow-lg:
            0 16px 40px rgba(17, 26, 51, 0.12);

        --video-shadow-orange:
            0 10px 28px rgba(255, 107, 26, 0.20);


        /* =========================================================
       RADIUS
        ========================================================= */

        --video-radius-sm: 8px;
        --video-radius-md: 12px;
        --video-radius-lg: 18px;
        --video-radius-xl: 24px;
        --video-radius-2xl: 32px;

        --video-radius-pill: 999px;


        /* =========================================================
       SPACING
        ========================================================= */

        --video-space-xs: 4px;
        --video-space-sm: 8px;
        --video-space-md: 16px;
        --video-space-lg: 24px;
        --video-space-xl: 32px;
        --video-space-2xl: 48px;
        --video-space-3xl: 64px;
        --video-space-4xl: 96px;


        /* =========================================================
       TRANSITIONS
        ========================================================= */

        --video-transition-fast: 150ms ease;
        --video-transition-normal: 250ms ease;
        --video-transition-slow: 400ms ease;


        /* =========================================================
       FONT SIZES
        ========================================================= */

        --video-text-xs: 11px;
        --video-text-sm: 13px;
        --video-text-md: 15px;
        --video-text-lg: 18px;

        --video-heading-sm: 24px;
        --video-heading-md: 32px;
        --video-heading-lg: 48px;
        --video-heading-xl: 64px;


        /* =========================================================
       CONTAINER
        ========================================================= */

        --video-container: 1280px;

    }

    /* =========================================================
       HERO SHELL
    ========================================================= */

    .va-hero {
        position: relative;
        background: var(--video-bg-soft);
        overflow: hidden;
    }

    /* ========================================
   HERO DECORATION
======================================== */

    .va-hero::before {
        content: "";
        position: absolute;

        width: 320px;
        height: 320px;

        top: -140px;
        right: -100px;

        background: rgba(255, 112, 40, 0.07);
        border-radius: 50%;

        filter: blur(10px);
        pointer-events: none;
    }

    .va-hero::after {
        content: "";
        position: absolute;

        width: 220px;
        height: 220px;

        bottom: -100px;
        left: -80px;

        background: rgba(255, 177, 90, 0.08);
        border-radius: 50%;

        filter: blur(12px);
        pointer-events: none;
    }

    .va-hero_content {
        position: relative;
        max-width: var(--video-container);
        margin: 0 auto;
        min-height: 600px;
        padding: 0 64px;
    }

    /* =========================================================
       SLIDES
       Stacked in normal flow; only .is-active is shown, so the
       section height always tracks whichever slide is visible.
    ========================================================= */

    .va-hero_content-slide1,
    .va-hero_content-slide2,
    .va-hero_content-slide3 {
        display: none;
        grid-template-columns: 1.05fr 0.95fr;
        align-items: center;
        gap: 48px;
        min-height: 600px;
    }

    .va-hero_content-slide1.is-active,
    .va-hero_content-slide2.is-active,
    .va-hero_content-slide3.is-active {
        display: grid;
        animation: vaSlideIn 0.6s ease both;
    }

    @keyframes vaSlideIn {
        from {
            opacity: 0;
            transform: translateY(14px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ---------- Text column ---------- */

    .va-hero_content--text {
        position: relative;
        z-index: 2;
        max-width: 560px;
        /* padding: var(--video-space-4xl) 0; */
    }

    .va-hero_content--text-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: var(--video-text-xs);
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--video-primary);
        margin-bottom: var(--video-space-lg);
    }

    .va-hero_content--text-eyebrow span {
        width: 8px;
        height: 8px;
        border-radius: 2px;
        background: var(--video-gradient-primary);
        flex: none;
    }

    .va-hero_content--text--heading {
        font-size: clamp(34px, 4vw, var(--video-heading-xl));
        line-height: 1.06;
        font-weight: 800;
        letter-spacing: -0.02em;
        color: var(--video-text);
        margin-bottom: var(--video-space-lg);
    }

    .va-hero_content--text--heading .row {
        display: block;
    }

    .va-hero_content--text--heading .row.accent {
        color: var(--video-primary);
    }

    .va-hero_content--text-para {
        font-size: var(--video-text-lg);
        line-height: 1.7;
        color: var(--video-text-secondary);
        max-width: 460px;
        margin-bottom: var(--video-space-xl);
    }

    /* ---------- CTA buttons ---------- */

    .va-hero_content--text-cta {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: var(--video-space-md);
        margin-bottom: var(--video-space-2xl);
    }

    .va-hero_content--text-cta a {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 15px 26px;
        border-radius: var(--video-radius-pill);
        font-size: var(--video-text-md);
        font-weight: 700;
        text-decoration: none;
        transition: transform var(--video-transition-normal), box-shadow var(--video-transition-normal), background var(--video-transition-normal);
    }

    /* First CTA — primary, orange */
    .va-hero_content--text-cta a:first-child {
        background: var(--video-gradient-primary);
        color: var(--video-text-light);
        box-shadow: var(--video-shadow-orange);
    }

    .va-hero_content--text-cta a:first-child:hover {
        transform: translateY(-2px);
        box-shadow: 0 14px 34px rgba(255, 107, 26, 0.28);
    }

    .va-hero_content--text-cta a:first-child span {
        width: 16px;
        height: 16px;
        flex: none;
        position: relative;
    }

    .va-hero_content--text-cta a:first-child span::before,
    .va-hero_content--text-cta a:first-child span::after {
        content: "";
        position: absolute;
        background: currentColor;
    }

    .va-hero_content--text-cta a:first-child span::before {
        top: 50%;
        left: 0;
        width: 100%;
        height: 2px;
        transform: translateY(-50%);
    }

    .va-hero_content--text-cta a:first-child span::after {
        top: 50%;
        right: 0;
        width: 7px;
        height: 7px;
        border-top: 2px solid currentColor;
        border-right: 2px solid currentColor;
        background: none;
        transform: translateY(-50%) rotate(45deg);
    }

    /* Second CTA — outline */
    .va-hero_content--text-cta a:last-child {
        background: var(--video-bg);
        color: var(--video-text);
        border: 1.5px solid var(--video-border);
    }

    .va-hero_content--text-cta a:last-child:hover {
        transform: translateY(-2px);
        border-color: var(--video-primary);
        color: var(--video-primary-dark);
    }

    .va-hero_content--text-cta a:last-child span {
        width: 15px;
        height: 15px;
        flex: none;
        border: 2px solid currentColor;
        border-radius: 3px;
        position: relative;
    }

    .va-hero_content--text-cta a:last-child span::before {
        content: "";
        position: absolute;
        top: -4px;
        left: 2px;
        width: 2px;
        height: 4px;
        background: currentColor;
        box-shadow: 6px 0 0 currentColor;
    }

    /* ---------- Trust / feature strip (kept minimal; empty by default) ---------- */

    .va-hero_content--text-features {
        display: flex;
        align-items: center;
        gap: 10px;
        min-height: 1px;
    }

    .va-hero_content--text-features span:empty,
    .va-hero_content--text-features p:empty {
        display: none;
    }

    /* ---------- Visual column ---------- */

    .va-hero_content--visual {
        position: relative;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .va-hero_content--visual-image {
        position: relative;
        width: 100%;
        aspect-ratio: 4 / 3.1;
        border-radius: var(--video-radius-2xl);
        overflow: hidden;
        box-shadow: var(--video-shadow-lg);
    }

    .va-hero_content--visual-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Fade the photo into the text column, like the reference */
    .va-hero_content--visual-image::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg,
                var(--video-bg-soft) 0%,
                rgba(241, 231, 223, 0.35) 18%,
                rgba(241, 231, 223, 0) 42%);
        pointer-events: none;
    }

    /* =========================================================
       SLIDE CONTROLS
       Positioned independently of the grid so the arrows can sit
       on the section edges and the counter under the text column.
    ========================================================= */

    .va-hero_content-slide-control {
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 3;
    }

    .va-hero_content-slide-control-btn {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .va-hero_content-slide-control-btn button {
        pointer-events: auto;
        width: 52px;
        height: 52px;
        border-radius: 50%;
        border: 1px solid rgba(20, 33, 61, 0.10);
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(6px);
        color: var(--video-text);
        font-size: 18px;
        font-weight: 700;
        cursor: pointer;
        box-shadow: var(--video-shadow-md);
        transition: background var(--video-transition-normal), color var(--video-transition-normal), transform var(--video-transition-normal);
    }

    .va-hero_content-slide-control-btn button:hover {
        background: var(--video-gradient-primary);
        color: var(--video-text-light);
        transform: scale(1.06);
    }

    /* Half the button hangs off the section edge */
    .va-hero_content-slide-control-btn button:first-child {
        margin-left: -26px;
    }

    .va-hero_content-slide-control-btn button:last-child {
        margin-right: -26px;
    }

    .va-hero_content-slide-control-pignation {
        pointer-events: auto;
        position: absolute;
        left: 64px;
        bottom: 40px;
        display: flex;
        align-items: baseline;
        gap: 8px;
        font-size: var(--video-text-sm);
        font-weight: 700;
        color: var(--video-text-muted);
    }

    .va-hero_content-slide-control-pignation .va-pg-current {
        font-size: 15px;
        color: var(--video-text);
    }

    .va-hero_content-slide-control-pignation .va-pg-sep {
        color: var(--video-border-dark);
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 1100px) {
        .va-hero_content {
            padding: 0 40px;
        }

        .va-hero_content-slide1,
        .va-hero_content-slide2,
        .va-hero_content-slide3 {
            gap: 32px;
        }

        .va-hero_content--text--heading {
            font-size: clamp(30px, 5vw, 52px);
        }
    }

    @media (max-width: 900px) {
        .va-hero_content {
            min-height: 0;
            padding: 88px 24px 60px;
        }

        .va-hero_content-slide1,
        .va-hero_content-slide2,
        .va-hero_content-slide3 {
            grid-template-columns: 1fr;
            min-height: 0;
            gap: 32px;
        }

        .va-hero_content--text {
            max-width: 100%;
            padding: 0;
            order: 1;
            text-align: center;
        }

        .va-hero_content--text-eyebrow,
        .va-hero_content--text-cta {
            justify-content: center;
        }

        .va-hero_content--text-para {
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .va-hero_content--visual {
            order: 0;
        }

        .va-hero_content--visual-image {
            aspect-ratio: 16 / 10;
        }

        .va-hero_content--visual-image::before {
            background: linear-gradient(180deg,
                    var(--video-bg-soft) 0%,
                    rgba(241, 231, 223, 0) 35%);
        }

        .va-hero_content-slide-control-btn {
            top: auto;
            bottom: 16px;
            inset: auto 24px 16px 24px;
            justify-content: center;
            gap: 16px;
        }

        .va-hero_content-slide-control-btn button:first-child,
        .va-hero_content-slide-control-btn button:last-child {
            margin: 0;
        }

        .va-hero_content-slide-control-pignation {
            left: 50%;
            bottom: 78px;
            transform: translateX(-50%);
        }
    }

    @media (max-width: 480px) {
        .va-hero_content {
            padding: 76px 18px 130px;
        }

        .va-hero_content--text--heading {
            font-size: clamp(28px, 9vw, 38px);
        }

        .va-hero_content--text-para {
            font-size: var(--video-text-md);
        }

        .va-hero_content--text-cta a {
            padding: 13px 20px;
            font-size: var(--video-text-sm);
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .va-hero_content-slide1.is-active,
        .va-hero_content-slide2.is-active,
        .va-hero_content-slide3.is-active {
            animation: none;
        }
    }
</style>

<section class="va-hero">
    <div class="va-hero_content" id="vaHeroContent">
        <div class="va-hero_content-slide1">
            <div class="va-hero_content--text">
                <p class="va-hero_content--text-eyebrow">
                    <span></span>
                    Audio & Video Production Studio
                </p>
                <h1 class="va-hero_content--text--heading">
                    <span class="row">CREATE.</span>
                    <span class="row">RECORD.</span>
                    <span class="row accent">INSPIRE.</span>
                </h1>
                <p class="va-hero_content--text-para">
                    From podcasts and interviews to branded audio content, we provide the studio, equipment, and production expertise to bring your ideas to life.
                </p>
                <div class="va-hero_content--text-cta">
                    <a href="contect.php"><span></span>Book Studio</a>
                    <a href="#va-service"><span></span>Check Other Services</a>
                </div>
                <div class="va-hero_content--text-features">
                    <span></span>
                    <p></p>
                </div>
            </div>
            <div class="va-hero_content--visual">
                <div class="va-hero_content--visual-image">
                    <img src="assets/images/va-slide1.png" alt="Podcast recording studio with professional microphone">
                </div>
            </div>
        </div>
        <div class="va-hero_content-slide2">
            <div class="va-hero_content--text">
                <p class="va-hero_content--text-eyebrow">
                    <span></span>
                    Audio & Video Production Studio
                </p>
                <h1 class="va-hero_content--text--heading">
                    <span class="row">SHOOT.</span>
                    <span class="row">EDIT.</span>
                    <span class="row accent">DELIVER.</span>
                </h1>
                <p class="va-hero_content--text-para">
                    From promotional videos to social media campaigns, create professional visual content with our production setup and creative team.
                </p>
                <div class="va-hero_content--text-cta">
                    <a href="contect.php"><span></span>Book Studio</a>
                    <a href="#va-service"><span></span>Check Other Services</a>
                </div>
                <div class="va-hero_content--text-features">
                    <span></span>
                    <p></p>
                </div>
            </div>
            <div class="va-hero_content--visual">
                <div class="va-hero_content--visual-image">
                    <img src="assets/images/va-slide2.png" alt="Video production camera setup on set">
                </div>
            </div>
        </div>
        <div class="va-hero_content-slide3">
            <div class="va-hero_content--text">
                <p class="va-hero_content--text-eyebrow">
                    <span></span>
                    Audio & Video Production Studio
                </p>
                <h1 class="va-hero_content--text--heading">
                    <span class="row">SPEAK.</span>
                    <span class="row">CONNECT.</span>
                    <span class="row accent">ENGAGE.</span>
                </h1>
                <p class="va-hero_content--text-para">
                    Professional voice recording, voice-over production, dubbing, and multilingual audio for brands that need to be heard clearly.
                </p>
                <div class="va-hero_content--text-cta">
                    <a href="contect.php"><span></span>Book Studio</a>
                    <a href="#va-service"><span></span>Check Other Services</a>
                </div>
                <div class="va-hero_content--text-features">
                    <span></span>
                    <p></p>
                </div>
            </div>
            <div class="va-hero_content--visual">
                <div class="va-hero_content--visual-image">
                    <img src="assets/images/va-slide3.png" alt="Voice-over artist recording in booth">
                </div>
            </div>
        </div>
        <div class="va-hero_content-slide-control">
            <div class="va-hero_content-slide-control-btn">
                <button type="button" aria-label="Previous slide">&lt;</button>
                <button type="button" aria-label="Next slide">&gt;</button>
            </div>
            <div class="va-hero_content-slide-control-pignation"></div>
        </div>
    </div>
</section>

<script>
    (function() {
        const root = document.getElementById("vaHeroContent");
        if (!root) return;

        const slides = [
            root.querySelector(".va-hero_content-slide1"),
            root.querySelector(".va-hero_content-slide2"),
            root.querySelector(".va-hero_content-slide3")
        ].filter(Boolean);

        if (!slides.length) return;

        const prevBtn = root.querySelector(".va-hero_content-slide-control-btn button:first-child");
        const nextBtn = root.querySelector(".va-hero_content-slide-control-btn button:last-child");
        const pagination = root.querySelector(".va-hero_content-slide-control-pignation");

        let current = 0;
        let autoplayTimer = null;
        const AUTOPLAY_DELAY = 6000;

        function pad(n) {
            return String(n + 1).padStart(2, "0");
        }

        function renderPagination() {
            if (!pagination) return;
            pagination.innerHTML =
                '<span class="va-pg-current">' + pad(current) + '</span>' +
                '<span class="va-pg-sep">—</span>' +
                '<span class="va-pg-total">' + pad(slides.length - 1) + '</span>';
        }

        function goTo(index) {
            slides[current].classList.remove("is-active");
            current = (index + slides.length) % slides.length;
            slides[current].classList.add("is-active");
            renderPagination();
        }

        function next() {
            goTo(current + 1);
        }

        function prev() {
            goTo(current - 1);
        }

        function startAutoplay() {
            stopAutoplay();
            autoplayTimer = setInterval(next, AUTOPLAY_DELAY);
        }

        function stopAutoplay() {
            if (autoplayTimer) {
                clearInterval(autoplayTimer);
                autoplayTimer = null;
            }
        }

        if (nextBtn) {
            nextBtn.addEventListener("click", function() {
                next();
                startAutoplay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener("click", function() {
                prev();
                startAutoplay();
            });
        }

        root.addEventListener("mouseenter", stopAutoplay);
        root.addEventListener("mouseleave", startAutoplay);

        // Initial state
        slides.forEach(function(slide) {
            slide.classList.remove("is-active");
        });
        slides[0].classList.add("is-active");
        renderPagination();

        const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
        if (!prefersReducedMotion) {
            startAutoplay();
        }
    })();
</script>