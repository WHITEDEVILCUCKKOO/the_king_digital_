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

    /* =============================================================
       HERO SECTION
    ============================================================= */

    .va-hero {
        position: relative;
        background: var(--video-bg);
        padding: var(--video-space-3xl) var(--video-space-xl);
        overflow: hidden;
    }

    .va-hero_content {
        position: relative;
        max-width: var(--video-container);
        margin: 0 auto;
    }

    /* Each slide is absolutely stacked on top of the next; JS toggles
       the .is-active class so only one slide is laid out/visible at a time. */
    .va-hero_content-slide1,
    .va-hero_content-slide2,
    .va-hero_content-slide3 {
        display: none;
        grid-template-columns: minmax(0, 460px) 1fr;
        align-items: center;
        gap: var(--video-space-2xl);
    }

    .va-hero_content-slide1.is-active,
    .va-hero_content-slide2.is-active,
    .va-hero_content-slide3.is-active {
        display: grid;
        animation: vaFadeIn var(--video-transition-slow);
    }

    @keyframes vaFadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* =============================================================
       TEXT COLUMN
    ============================================================= */

    .va-hero_content--text-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: var(--video-space-sm);
        color: var(--video-primary);
        font-size: var(--video-text-xs);
        font-weight: 800;
        letter-spacing: .14em;
        text-transform: uppercase;
        margin: 0 0 var(--video-space-md);
    }

    .va-hero_content--text-eyebrow span {
        width: 22px;
        height: 2px;
        background: var(--video-primary);
        border-radius: var(--video-radius-pill);
    }

    .va-hero_content--text--heading {
        font-size: var(--video-heading-xl);
        line-height: 1.04;
        letter-spacing: -.02em;
        font-weight: 800;
        color: var(--video-secondary);
        margin: 0 0 var(--video-space-md);
        text-transform: uppercase;
    }

    .va-hero_content--text--heading br {
        content: "";
    }

    /* last line of the heading (INSPIRE / DELIVER / ENGAGE) rendered in orange */
    .va-hero_content--text--heading .va-heading-accent {
        display: block;
        color: var(--video-primary);
    }

    .va-hero_content--text-para {
        max-width: 420px;
        font-size: var(--video-text-md);
        line-height: 1.7;
        color: var(--video-text-secondary);
        margin: 0 0 var(--video-space-xl);
    }

    /* =============================================================
       CTA BUTTONS
    ============================================================= */

    .va-hero_content--text-cta {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: var(--video-space-md);
        margin-bottom: var(--video-space-xl);
    }

    .va-hero_content--text-cta a {
        display: inline-flex;
        align-items: center;
        gap: var(--video-space-sm);
        height: 52px;
        padding: 0 var(--video-space-lg);
        border-radius: var(--video-radius-md);
        font-size: var(--video-text-sm);
        font-weight: 700;
        text-decoration: none;
        transition: transform var(--video-transition-fast), box-shadow var(--video-transition-fast), background var(--video-transition-fast);
        white-space: nowrap;
    }

    /* primary = solid orange, arrow icon */
    .va-hero_content--text-cta a:first-child {
        color: var(--video-text-light);
        background: var(--video-gradient-primary);
        box-shadow: var(--video-shadow-orange);
    }

    .va-hero_content--text-cta a:first-child span {
        width: 16px;
        height: 16px;
        flex: none;
        background: currentColor;
        -webkit-mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2.4' stroke-linecap='round' stroke-linejoin='round'><line x1='5' y1='12' x2='19' y2='12'/><polyline points='12 5 19 12 12 19'/></svg>") center / contain no-repeat;
        mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2.4' stroke-linecap='round' stroke-linejoin='round'><line x1='5' y1='12' x2='19' y2='12'/><polyline points='12 5 19 12 12 19'/></svg>") center / contain no-repeat;
    }

    .va-hero_content--text-cta a:first-child:hover {
        transform: translateY(-2px);
        box-shadow: 0 14px 32px rgba(255, 107, 26, .28);
    }

    /* secondary = white outline, calendar icon */
    .va-hero_content--text-cta a:last-child {
        color: var(--video-secondary);
        background: var(--video-bg);
        border: 1.5px solid var(--video-border);
    }

    .va-hero_content--text-cta a:last-child span {
        width: 16px;
        height: 16px;
        flex: none;
        background: currentColor;
        -webkit-mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2.2' stroke-linecap='round' stroke-linejoin='round'><rect x='3' y='4' width='18' height='18' rx='3'/><line x1='16' y1='2' x2='16' y2='6'/><line x1='8' y1='2' x2='8' y2='6'/><line x1='3' y1='10' x2='21' y2='10'/></svg>") center / contain no-repeat;
        mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2.2' stroke-linecap='round' stroke-linejoin='round'><rect x='3' y='4' width='18' height='18' rx='3'/><line x1='16' y1='2' x2='16' y2='6'/><line x1='8' y1='2' x2='8' y2='6'/><line x1='3' y1='10' x2='21' y2='10'/></svg>") center / contain no-repeat;
    }

    .va-hero_content--text-cta a:last-child:hover {
        transform: translateY(-2px);
        border-color: var(--video-secondary);
    }

    /* =============================================================
       FEATURES ROW (Professional Equipment / Creative Experts / High Quality Delivery)
    ============================================================= */

    .va-hero_content--text-features {
        display: flex;
        flex-wrap: wrap;
        gap: var(--video-space-lg);
    }

    .va-hero_content--text-features-item {
        display: flex;
        align-items: center;
        gap: var(--video-space-sm);
    }

    .va-hero_content--text-features-item span {
        display: grid;
        place-items: center;
        flex: none;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 1.5px dashed var(--video-primary-light);
        color: var(--video-primary);
    }

    .va-hero_content--text-features-item span svg {
        width: 16px;
        height: 16px;
    }

    .va-hero_content--text-features-item p {
        margin: 0;
        font-size: 12.5px;
        line-height: 1.35;
        font-weight: 700;
        color: var(--video-text);
    }

    /* =============================================================
       VISUAL COLUMN
    ============================================================= */

    .va-hero_content--visual {
        position: relative;
        min-height: 420px;
        display: flex;
        align-items: center;
    }

    /* dot-grid accent between the copy and the photo */
    .va-hero_content--visual:before {
        content: "";
        position: absolute;
        left: -6px;
        top: -6px;
        width: 84px;
        height: 64px;
        background-image: radial-gradient(var(--video-border-dark) 1.4px, transparent 1.4px);
        background-size: 12px 12px;
        opacity: .35;
        z-index: 1;
    }

    .va-hero_content--visual-image {
        position: relative;
        width: 100%;
        height: 420px;
        border-radius: var(--video-radius-2xl) var(--video-radius-2xl) var(--video-radius-2xl) 140px;
        overflow: hidden;
        box-shadow: var(--video-shadow-lg);
        background: var(--video-bg-soft);
    }

    .va-hero_content--visual-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* concentric orange sound-wave rings, bottom right of the photo */
    .va-hero_content--visual-image:after {
        content: "";
        position: absolute;
        right: 22px;
        bottom: 22px;
        width: 46px;
        height: 46px;
        border-radius: 50%;
        border: 2px solid rgba(255, 107, 26, .55);
        box-shadow:
            0 0 0 10px rgba(255, 107, 26, .28),
            0 0 0 20px rgba(255, 107, 26, .14);
        pointer-events: none;
    }

    /* =============================================================
       SLIDE CONTROLS
    ============================================================= */

    .va-hero_content-slide-control {
        display: flex;
        align-items: center;
        gap: var(--video-space-lg);
        margin-top: var(--video-space-2xl);
    }

    .va-hero_content-slide-control-btn {
        display: flex;
        gap: var(--video-space-sm);
    }

    .va-hero_content-slide-control-btn button {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 1.5px solid var(--video-border);
        background: var(--video-bg);
        color: var(--video-secondary);
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        display: grid;
        place-items: center;
        transition: background var(--video-transition-fast), color var(--video-transition-fast), border-color var(--video-transition-fast), transform var(--video-transition-fast);
    }

    .va-hero_content-slide-control-btn button:hover {
        background: var(--video-gradient-primary);
        border-color: transparent;
        color: var(--video-text-light);
        transform: translateY(-2px);
    }

    .va-hero_content-slide-control-pignation {
        display: flex;
        align-items: center;
        gap: var(--video-space-sm);
    }

    .va-hero_content-slide-control-pignation button {
        width: 9px;
        height: 9px;
        padding: 0;
        border-radius: var(--video-radius-pill);
        border: none;
        background: var(--video-border);
        cursor: pointer;
        transition: width var(--video-transition-normal), background var(--video-transition-normal);
    }

    .va-hero_content-slide-control-pignation button.is-active {
        width: 26px;
        background: var(--video-gradient-primary);
    }

    /* =============================================================
       RESPONSIVE
    ============================================================= */

    @media (max-width: 980px) {

        .va-hero_content-slide1.is-active,
        .va-hero_content-slide2.is-active,
        .va-hero_content-slide3.is-active {
            grid-template-columns: 1fr;
        }

        .va-hero_content--visual {
            min-height: 320px;
            order: -1;
        }

        .va-hero_content--visual-image {
            height: 300px;
        }

        .va-hero_content--text--heading {
            font-size: var(--video-heading-lg);
        }
    }

    @media (max-width: 560px) {
        .va-hero {
            padding: var(--video-space-2xl) var(--video-space-md);
        }

        .va-hero_content--text--heading {
            font-size: 36px;
        }

        .va-hero_content--text-cta a {
            flex: 1;
            justify-content: center;
        }

        .va-hero_content--text-features {
            gap: var(--video-space-md);
        }
    }
</style>

<section class="va-hero" id="vaHeroSlider">
    <div class="va-hero_content">

        <div class="va-hero_content-slide1 is-active">
            <div class="va-hero_content--text">
                <p class="va-hero_content--text-eyebrow">
                    <span></span>
                    Audio & Video Production Studio
                </p>
                <h1 class="va-hero_content--text--heading">
                    CREATE.<br>
                    RECORD.<br>
                    <span class="va-heading-accent">INSPIRE.</span>
                </h1>
                <p class="va-hero_content--text-para">
                    From podcasts and interviews to branded audio content, we provide the studio, equipment, and production expertise to bring your ideas to life.
                </p>
                <div class="va-hero_content--text-cta">
                    <a href="contect.php"><span></span>Book Studio</a>
                    <a href="#va-service"><span></span>Check Other Services</a>
                </div>
                <div class="va-hero_content--text-features">
                    <div class="va-hero_content--text-features-item">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="9" y="2" width="6" height="12" rx="3"></rect>
                                <path d="M5 10a7 7 0 0 0 14 0"></path>
                                <line x1="12" y1="17" x2="12" y2="22"></line>
                            </svg></span>
                        <p>Professional<br>Equipment</p>
                    </div>
                    <div class="va-hero_content--text-features-item">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="9" cy="8" r="3.2"></circle>
                                <path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"></path>
                                <circle cx="18" cy="9" r="2.4"></circle>
                                <path d="M15.5 14.2c2.6.3 4.5 2.6 4.5 5.3"></path>
                            </svg></span>
                        <p>Creative<br>Experts</p>
                    </div>
                    <div class="va-hero_content--text-features-item">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3l2.4 5 5.6.6-4.1 3.9 1 5.5L12 15.6 7.1 18l1-5.5L4 8.6 9.6 8z"></path>
                            </svg></span>
                        <p>High Quality<br>Delivery</p>
                    </div>
                </div>
            </div>
            <div class="va-hero_content--visual">
                <div class="va-hero_content--visual-image">
                    <img src="assets/images/va-slide1.png" alt="Recording studio with microphone and editing setup">
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
                    SHOOT.<br>
                    EDIT.<br>
                    <span class="va-heading-accent">DELIVER.</span>
                </h1>
                <p class="va-hero_content--text-para">
                    From promotional videos to social media campaigns, create professional visual content with our production setup and creative team.
                </p>
                <div class="va-hero_content--text-cta">
                    <a href="contect.php"><span></span>Book Studio</a>
                    <a href="#va-service"><span></span>Check Other Services</a>
                </div>
                <div class="va-hero_content--text-features">
                    <div class="va-hero_content--text-features-item">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                                <path d="M16 10l5.2-3v10L16 14"></path>
                            </svg></span>
                        <p>Pro Camera<br>Gear</p>
                    </div>
                    <div class="va-hero_content--text-features-item">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="9" cy="8" r="3.2"></circle>
                                <path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"></path>
                                <circle cx="18" cy="9" r="2.4"></circle>
                                <path d="M15.5 14.2c2.6.3 4.5 2.6 4.5 5.3"></path>
                            </svg></span>
                        <p>Creative<br>Editors</p>
                    </div>
                    <div class="va-hero_content--text-features-item">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3l2.4 5 5.6.6-4.1 3.9 1 5.5L12 15.6 7.1 18l1-5.5L4 8.6 9.6 8z"></path>
                            </svg></span>
                        <p>Fast<br>Turnaround</p>
                    </div>
                </div>
            </div>
            <div class="va-hero_content--visual">
                <div class="va-hero_content--visual-image">
                    <img src="assets/images/va-slide2.png" alt="Video production camera and lighting setup">
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
                    SPEAK.<br>
                    CONNECT.<br>
                    <span class="va-heading-accent">ENGAGE.</span>
                </h1>
                <p class="va-hero_content--text-para">
                    Professional voice recording, voice-over production, dubbing, and multilingual audio for brands that need to be heard clearly.
                </p>
                <div class="va-hero_content--text-cta">
                    <a href="contect.php"><span></span>Book Studio</a>
                    <a href="#va-service"><span></span>Check Other Services</a>
                </div>
                <div class="va-hero_content--text-features">
                    <div class="va-hero_content--text-features-item">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="9" y="2" width="6" height="12" rx="3"></rect>
                                <path d="M5 10a7 7 0 0 0 14 0"></path>
                                <line x1="12" y1="17" x2="12" y2="22"></line>
                            </svg></span>
                        <p>Studio Grade<br>Mics</p>
                    </div>
                    <div class="va-hero_content--text-features-item">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 12h3l2-6 4 12 2-8 2 4h3"></path>
                            </svg></span>
                        <p>Native<br>Voice Talent</p>
                    </div>
                    <div class="va-hero_content--text-features-item">
                        <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="9"></circle>
                                <path d="M3 12h18M12 3c2.4 2.6 3.6 5.7 3.6 9s-1.2 6.4-3.6 9c-2.4-2.6-3.6-5.7-3.6-9S9.6 5.6 12 3z"></path>
                            </svg></span>
                        <p>Multilingual<br>Audio</p>
                    </div>
                </div>
            </div>
            <div class="va-hero_content--visual">
                <div class="va-hero_content--visual-image">
                    <img src="assets/images/va-slide3.png" alt="Voice-over recording booth with microphone">
                </div>
            </div>
        </div>

        <div class="va-hero_content-slide-control">
            <div class="va-hero_content-slide-control-btn">
                <button type="button" data-va-prev aria-label="Previous slide">&lt;</button>
                <button type="button" data-va-next aria-label="Next slide">&gt;</button>
            </div>
            <div class="va-hero_content-slide-control-pignation" data-va-dots></div>
        </div>

    </div>
</section>

<script>
    (function() {
        // Scoped strictly to this section instance.
        var root = document.getElementById('vaHeroSlider');
        if (!root) return;

        var slides = Array.prototype.slice.call(
            root.querySelectorAll('.va-hero_content-slide1, .va-hero_content-slide2, .va-hero_content-slide3')
        );
        if (!slides.length) return;

        var prevBtn = root.querySelector('[data-va-prev]');
        var nextBtn = root.querySelector('[data-va-next]');
        var dotsWrap = root.querySelector('[data-va-dots]');

        var current = slides.findIndex(function(s) {
            return s.classList.contains('is-active');
        });
        if (current < 0) current = 0;

        var autoplayMs = 6000;
        var timer = null;

        // Build pagination dots to match however many slides exist.
        var dots = slides.map(function(_, i) {
            var b = document.createElement('button');
            b.type = 'button';
            b.setAttribute('aria-label', 'Go to slide ' + (i + 1));
            b.addEventListener('click', function() {
                goTo(i);
                restartAutoplay();
            });
            dotsWrap.appendChild(b);
            return b;
        });

        function render() {
            slides.forEach(function(s, i) {
                s.classList.toggle('is-active', i === current);
            });
            dots.forEach(function(d, i) {
                d.classList.toggle('is-active', i === current);
            });
        }

        function goTo(i) {
            current = (i + slides.length) % slides.length;
            render();
        }

        function next() {
            goTo(current + 1);
        }

        function prevSlide() {
            goTo(current - 1);
        }

        function startAutoplay() {
            timer = window.setInterval(next, autoplayMs);
        }

        function restartAutoplay() {
            if (timer) window.clearInterval(timer);
            startAutoplay();
        }

        if (prevBtn) prevBtn.addEventListener('click', function() {
            prevSlide();
            restartAutoplay();
        });
        if (nextBtn) nextBtn.addEventListener('click', function() {
            next();
            restartAutoplay();
        });

        // Pause autoplay while the user's mouse is over the hero.
        root.addEventListener('mouseenter', function() {
            if (timer) window.clearInterval(timer);
        });
        root.addEventListener('mouseleave', startAutoplay);

        render();
        startAutoplay();
    })();
</script>