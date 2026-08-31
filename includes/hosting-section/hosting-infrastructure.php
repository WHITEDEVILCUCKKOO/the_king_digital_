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

        --host-gradient: linear-gradient(135deg, #F97316, #EA580C);
        --host-gradient-tech: linear-gradient(135deg, #F97316 0%, #F97316 65%, #2563EB 100%);
        --host-gradient-soft: linear-gradient(135deg, #FFF7ED, #FFFFFF);


        /* ========================================
       SHADOWS
        ======================================== */

        --host-shadow-sm: 0 2px 8px rgba(17, 24, 39, 0.05);
        --host-shadow-md: 0 10px 30px rgba(17, 24, 39, 0.08);
        --host-shadow-lg: 0 20px 50px rgba(249, 115, 22, 0.12);
        --host-shadow-orange: 0 12px 30px rgba(249, 115, 22, 0.20);


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
        --host-section-space: clamp(70px, 8vw, 120px);
    }

    /* ========================================
       SECTION — light theme
       ======================================== */

    .hosting-infrastructure {
        background: var(--host-gradient-soft);
        padding: 16px 24px;
    }

    .hosting-infrastructure .hi_content {
        max-width: var(--host-container);
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        gap: 64px;
    }

    .hi_content-text h2 {
        margin: 0 0 16px;
        font-size: clamp(28px, 3.2vw, 44px);
        line-height: 1.15;
        color: var(--host-text);
        font-weight: 700;
        letter-spacing: -0.01em;
    }

    .hi_content-text > p {
        margin: 0 0 32px;
        max-width: 46ch;
        font-size: 17px;
        line-height: 1.6;
        color: var(--host-text-secondary);
    }

    .hi_content-pointer {
        display: grid;
        grid-template-columns: 1fr 1fr;
        row-gap: 16px;
        column-gap: 24px;
        margin-bottom: 36px;
    }

    .hi_content-pointer p {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
        font-size: 15px;
        color: var(--host-text);
        font-weight: 500;
    }

    .hi_content-pointer span {
        flex: none;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #09e92e98;
        color: #fff;
        box-shadow: 0 0 0 4px var(--host-primary-soft);
    }

    .hi_content-cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 26px;
        border-radius: var(--host-radius-sm);
        background: var(--host-gradient);
        color: var(--host-white);
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        box-shadow: var(--host-shadow-orange);
        transition: transform 0.15s ease, box-shadow 0.15s ease;
    }

    .hi_content-cta:hover {
        transform: translateY(-2px);
        box-shadow: var(--host-shadow-lg);
    }

    .hi_content-cta span {
        transition: transform 0.15s ease;
    }

    .hi_content-cta:hover span {
        transform: translateX(3px);
    }

    .hi_content-visual {
        background: var(--host-bg);
        border: 1px solid var(--host-border-orange);
        border-radius: var(--host-radius-lg);
        box-shadow: var(--host-shadow-md);
        padding: 16px;
    }

    .hi_content-visual img {
        display: block;
        width: 100%;
        height: auto;
        border-radius: var(--host-radius-md);
        background: var(--host-bg-blue);
        aspect-ratio: 4 / 3;
        object-fit: cover;
    }

    @media (max-width: 860px) {
        .hosting-infrastructure .hi_content {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .hi_content-visual {
            order: -1;
        }

        .hi_content-pointer {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="hosting-infrastructure">
    <div class="hi_content">
        <div class="hi_content-text">
            <h2>World-class infrastructure</h2>
            <p>Built on enterprise-grade
                infrastructure for fast,
                reliable performance.
            </p>
            <div class="hi_content-pointer">
                <p><span>✔</span>Enterprise Hardware</p>
                <p><span>✔</span>Multiple Data Centers</p>
                <p><span>✔</span>NVMe SSD Storage</p>
                <p><span>✔</span>Advanced Caching</p>
                <p><span>✔</span>DDoS Protection</p>
            </div>
            <a href="#" class="hi_content-cta">View Infrastructure <span>→</span></a>
        </div>
        <div class="hi_content-visual">
            <img src="assets/images/about2.png" alt="Infrastructure preview">
        </div>
    </div>
</section>