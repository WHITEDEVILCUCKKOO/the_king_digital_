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

    .ssm-platform {
        position: relative;
        padding: 20px 24px;
        background: var(--smm-gradient-soft);
        overflow: hidden;
    }

    .ssm-platform::before,
    .ssm-platform::after {
        content: "";
        position: absolute;
        width: 320px;
        height: 320px;
        border-radius: 50%;
        filter: blur(90px);
        opacity: .35;
        pointer-events: none;
        z-index: 0;
    }

    .ssm-platform::before {
        top: -120px;
        left: -80px;
        background: var(--smm-primary-light);
    }

    .ssm-platform::after {
        bottom: -140px;
        right: -100px;
        background: var(--smm-accent-light);
    }

    .ssm-platform_content {
        position: relative;
        z-index: 1;
        max-width: var(--smm-container);
        margin: 0 auto;
    }

    .ssm-platform_content-heading {
        text-align: center;
        margin-bottom: 20px;
    }

    .ssm-platform_content-heading p {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        /* margin: 0 0 18px; */
        padding: 8px 18px 8px 14px;
        border-radius: 999px;
        background: var(--smm-bg-purple);
        border: 1px solid var(--smm-border-purple);
        color: var(--smm-primary-dark);
        font-size: 10px;
        font-weight: 600;
        letter-spacing: .08em;
        text-transform: uppercase;
    }

    .ssm-platform_content-heading p span {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--smm-gradient);
        box-shadow: 0 0 0 4px rgba(124, 58, 237, .14);
    }

    .ssm-platform_content-heading h2 {
        margin: 0;
        font-size: clamp(28px, 3.2vw, 38px);
        font-weight: 700;
        letter-spacing: -0.02em;
        color: var(--smm-text-dark);
    }

    .ssm-platform_content-container {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 20px;
    }

    .ssm-platform_content-card {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 16px;
        padding: 25px 15px;
        background: var(--smm-card);
        border: 1px solid var(--smm-border-light);
        border-radius: var(--smm-radius-lg);
        box-shadow: var(--smm-shadow-sm);
        transition: transform .35s cubic-bezier(.2, .8, .2, 1),
            box-shadow .35s ease,
            border-color .35s ease;
    }

    /* gradient ring that fades in on hover, sitting on the border */
    .ssm-platform_content-card::before {
        content: "";
        position: absolute;
        inset: 0;
        padding: 1.5px;
        border-radius: inherit;
        background: var(--smm-gradient);
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        opacity: 0;
        transition: opacity .35s ease;
        pointer-events: none;
    }

    .ssm-platform_content-card:hover {
        transform: translateY(-8px);
        border-color: transparent;
        box-shadow: var(--smm-shadow-lg);
    }

    .ssm-platform_content-card:hover::before {
        opacity: 1;
    }

    .ssm-platform_content-card span {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: var(--smm-bg-purple);
        transition: background .35s ease, transform .35s ease;
    }

    .ssm-platform_content-card:hover span {
        background: var(--smm-gradient);
        transform: scale(1.08) rotate(-6deg);
    }

    .ssm-platform_content-card img {
        width: 32px;
        height: 32px;
        object-fit: contain;
        filter: grayscale(1) opacity(.7);
        transition: filter .35s ease;
    }

    .ssm-platform_content-card:hover img {
        filter: none;
    }

    .ssm-platform_content-card p {
        margin: 0;
        font-size: 15px;
        font-weight: 600;
        color: var(--smm-text-dark);
    }

    @media (max-width: 1024px) {
        .ssm-platform_content-container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 640px) {
        .ssm-platform_content-container {
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }

        .ssm-platform_content-card {
            padding: 28px 14px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .ssm-platform_content-card,
        .ssm-platform_content-card span,
        .ssm-platform_content-card::before,
        .ssm-platform_content-card img {
            transition: none;
        }
    }
</style>

<section class="ssm-platform">
    <div class="ssm-platform_content">
        <div class="ssm-platform_content-heading">
            <p>
                <span></span>
                Social Platform
            </p>
            <h2>Platform We Manage</h2>
        </div>
        <div class="ssm-platform_content-container">
            <div class="ssm-platform_content-card">
                <span>
                    <img src="assets/images/logos/facebook.png" alt="Facebook Logo">
                </span>
                <p>Facebook</p>
            </div>
            <div class="ssm-platform_content-card">
                <span>
                    <img src="assets/images/logos/instagram.png" alt="Instagram Logo">
                </span>
                <p>Instagram</p>
            </div>
            <div class="ssm-platform_content-card">
                <span>
                    <img src="assets/images/logos/twitter.png" alt="Twitter Logo">
                </span>
                <p>Twitter</p>
            </div>
            <div class="ssm-platform_content-card">
                <span>
                    <img src="assets/images/logos/linkedin.png" alt="Linkedin Logo">
                </span>
                <p>LinkedIn</p>
            </div>
            <div class="ssm-platform_content-card">
                <span>
                    <img src="assets/images/logos/pintrest.png" alt="pintrest Logo">
                </span>
                <p>Pintrest</p>
            </div>
            <div class="ssm-platform_content-card">
                <span>
                    <img src="assets/images/logos/youtube.png" alt="Youtube Logo">
                </span>
                <p>Youtube</p>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.ssm-platform_content-card img').forEach(function(img) {
        img.addEventListener('error', function() {
            var label = this.closest('.ssm-platform_content-card').querySelector('p').textContent.trim();
            var letter = label.charAt(0).toUpperCase();
            var svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">' +
                '<text x="16" y="22" text-anchor="middle" font-size="16" font-weight="700" fill="%237C3AED">' + letter + '</text></svg>';
            this.src = 'data:image/svg+xml,' + encodeURIComponent(svg);
            this.style.filter = 'none';
        });
    });
</script>