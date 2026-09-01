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
            ======================================= */

        --host-container: 1240px;
        --host-section-space: clamp(70px, 8vw, 120px);
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        color: var(--host-text);
        background: var(--host-bg-soft);
    }

    .hosting-why {
        padding: var(--host-section-space) 24px;
    }

    .hosting-why_content {
        max-width: var(--host-container);
        margin: 0 auto;
    }

    .hosting-why_content--heading {
        text-align: center;
        max-width: 620px;
        margin: 0 auto 56px;
    }

    .hosting-eyebrow {
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 8px;
        background: var(--host-primary-light);
        padding: 4px 12px;
        border-radius: 999px;
    }



    .hosting-why_content--heading h2 {
        font-size: clamp(28px, 3.4vw, 40px);
        line-height: 1.2;
        margin: 0 0 12px;
        letter-spacing: -0.01em;
    }

    .hosting-why_content--heading p {
        color: var(--host-text-muted);
        font-size: 17px;
        margin: 0;
    }

    .hosting-why_content--container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .hosting-why_content--card {
        background: var(--host-white);
        border: 1px solid var(--host-border);
        border-radius: var(--host-radius-md);
        padding: 28px 24px;
        transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
    }

    .hosting-why_content--card:hover {
        transform: translateY(-4px);
        box-shadow: var(--host-shadow-md);
    }

    .hosting-why_content--card span {
        width: 52px;
        height: 52px;
        border-radius: var(--host-radius-sm);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
    }

    .hosting-why_content--card span svg {
        width: 26px;
        height: 26px;
    }

    .hosting-why_content--card h3 {
        margin: 0 0 8px;
        font-size: 18px;
        letter-spacing: -0.01em;
    }

    .hosting-why_content--card p {
        margin: 0;
        font-size: 14px;
        line-height: 1.6;
        color: var(--host-text-secondary);
    }

    /* orange theme */
    .hosting-why_content--card.theme-orange {
        border-top: 3px solid var(--host-primary);
    }

    .hosting-why_content--card.theme-orange:hover {
        border-color: var(--host-border-orange);
        border-top-color: var(--host-primary);
    }

    .hosting-why_content--card.theme-orange span {
        background: var(--host-bg-orange);
        color: var(--host-primary);
    }

    /* blue theme */
    .hosting-why_content--card.theme-blue {
        border-top: 3px solid var(--host-secondary);
    }

    .hosting-why_content--card.theme-blue:hover {
        border-color: var(--host-border-blue);
        border-top-color: var(--host-secondary);
    }

    .hosting-why_content--card.theme-blue span {
        background: var(--host-bg-blue);
        color: var(--host-secondary);
    }

    @media (max-width: 900px) {
        .hosting-why_content--container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 560px) {
        .hosting-why_content--container {
            grid-template-columns: 1fr;
        }
    }
</style>

<section class="hosting-why">
    <div class="hosting-why_content">
        <div class="hosting-why_content--heading">
            <span class="hosting-eyebrow">
                Why choose <strong>The King Digital</strong> for hosting?
            </span>
            <h2>More than just hosting</h2>
            <p>Everything you need to keep your digital presence fast, secure, and online.</p>
        </div>
        <div class="hosting-why_content--container">

            <div class="hosting-why_content--card theme-orange">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M13 2 4 14h7l-1 8 9-12h-7l1-8Z" />
                    </svg>
                </span>
                <h3>Lightning-fast performance</h3>
                <p>Optimized infrastructure and NVMe storage keep your websites responsive.</p>
            </div>

            <div class="hosting-why_content--card theme-blue">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2 4 5v6c0 5 3.4 9 8 11 4.6-2 8-6 8-11V5l-8-3Z" />
                    </svg>
                </span>
                <h3>Enterprise-grade security</h3>
                <p>Protection designed to keep your website and data safe.</p>
            </div>

            <div class="hosting-why_content--card theme-orange">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <ellipse cx="12" cy="5" rx="8" ry="3" />
                        <path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5" />
                        <path d="M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6" />
                    </svg>
                </span>
                <h3>Automated backups</h3>
                <p>Regular backups help protect your data from unexpected problems.</p>
            </div>

            <div class="hosting-why_content--card theme-blue">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="9" />
                        <path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18" />
                    </svg>
                </span>
                <h3>Global infrastructure</h3>
                <p>Reliable infrastructure built to serve visitors wherever they are.</p>
            </div>

            <div class="hosting-why_content--card theme-orange">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 13a8 8 0 0 1 16 0" />
                        <path d="M20 19a2 2 0 0 1-2 2h-1v-6h1a2 2 0 0 1 2 2v2Z" />
                        <path d="M4 19a2 2 0 0 0 2 2h1v-6H6a2 2 0 0 0-2 2v2Z" />
                    </svg>
                </span>
                <h3>24/7 expert support</h3>
                <p>Real people ready to help when something goes wrong.</p>
            </div>

            <div class="hosting-why_content--card theme-blue">
                <span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m3 17 6-6 4 4 8-8" />
                        <path d="M15 7h6v6" />
                    </svg>
                </span>
                <h3>Built to scale</h3>
                <p>Upgrade your resources as your business grows.</p>
            </div>

        </div>
    </div>
</section>