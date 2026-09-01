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
       SECTION — deep navy
       ======================================== */

    .hosting-final-cta {
        background: var(--host-dark);
        background-image:
            radial-gradient(circle at 12% 15%, rgba(249, 115, 22, 0.12), transparent 45%),
            radial-gradient(circle at 90% 90%, rgba(249, 115, 22, 0.08), transparent 45%);
        padding: var(--host-section-space) 24px;
    }

    .hosting-final-cta-container {
        max-width: var(--host-container);
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        align-items: center;
        gap: 72px;
    }

    /* ========================================
       LEFT — CONTENT
       ======================================== */

    .hosting-final-cta-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 0.06em;
        color: var(--host-primary-light);
        background: rgba(249, 115, 22, 0.12);
        border: 1px solid rgba(249, 115, 22, 0.3);
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 20px;
    }

    .hosting-final-cta-content h2 {
        margin: 0 0 16px;
        font-size: clamp(28px, 3.4vw, 44px);
        line-height: 1.2;
        color: var(--host-white);
        font-weight: 700;
        letter-spacing: -0.01em;
    }

    .hosting-final-cta-content h2 span {
        display: block;
        color: var(--host-primary-light);
    }

    .hosting-final-cta-content>p {
        margin: 0 0 34px;
        max-width: 48ch;
        font-size: 16.5px;
        line-height: 1.65;
        color: #A3ABBB;
    }

    /* buttons */

    .hosting-final-cta-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-bottom: 34px;
    }

    .hosting-final-cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 26px;
        border-radius: var(--host-radius-sm);
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
    }

    .hosting-final-cta-btn--primary {
        background: var(--host-gradient);
        color: var(--host-white);
        box-shadow: var(--host-shadow-orange);
    }

    .hosting-final-cta-btn--primary i {
        transition: transform 0.15s ease;
    }

    .hosting-final-cta-btn--primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--host-shadow-lg);
    }

    .hosting-final-cta-btn--primary:hover i {
        transform: translateX(3px);
    }

    .hosting-final-cta-btn--secondary {
        background: transparent;
        color: var(--host-white);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .hosting-final-cta-btn--secondary:hover {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(255, 255, 255, 0.32);
    }

    /* trust points */

    .hosting-final-cta-trust {
        display: flex;
        flex-wrap: wrap;
        gap: 20px 28px;
    }

    .hosting-final-cta-trust span {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 500;
        color: #C4CAD6;
    }

    .hosting-final-cta-trust i {
        color: var(--host-primary-light);
        font-size: 15px;
    }

    /* ========================================
       RIGHT — VISUAL
       ======================================== */

    .hosting-final-cta-visual {
        position: relative;
        min-height: 380px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .hosting-final-cta-glow {
        position: absolute;
        inset: 10%;
        background: radial-gradient(circle, rgba(249, 115, 22, 0.22), transparent 65%);
        filter: blur(45px);
        z-index: 0;
        animation: glow-pulse 5s ease-in-out infinite;
    }

    @keyframes glow-pulse {

        0%,
        100% {
            opacity: 0.7;
            transform: scale(1);
        }

        50% {
            opacity: 1;
            transform: scale(1.06);
        }
    }

    /* cloud */

    .cta-cloud {
        position: relative;
        z-index: 2;
        margin-bottom: 8px;
    }

    .cta-cloud-body {
        position: relative;
        width: 92px;
        height: 92px;
        border-radius: 50%;
        background: var(--host-white);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: var(--host-shadow-lg);
        animation: cloud-bob 4s ease-in-out infinite;
    }

    @keyframes cloud-bob {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }
    }

    .cta-cloud-body>i {
        font-size: 34px;
        color: var(--host-primary);
    }

    .cta-cloud-lock {
        position: absolute;
        bottom: -4px;
        right: -4px;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: var(--host-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--host-white);
        font-size: 12px;
        box-shadow: var(--host-shadow-orange);
        border: 3px solid var(--host-dark);
    }

    /* connection lines */

    .cta-connection {
        position: relative;
        z-index: 1;
        width: 2px;
        height: 46px;
        margin: 0 auto;
        background: repeating-linear-gradient(to bottom,
                var(--host-primary-light) 0,
                var(--host-primary-light) 6px,
                transparent 6px,
                transparent 12px);
        background-size: 2px 24px;
        animation: flow-down 0.8s linear infinite;
        opacity: 0.75;
    }

    @keyframes flow-down {
        to {
            background-position: 0 24px;
        }
    }

    /* server rack */

    .cta-server-rack {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 280px;
        background: linear-gradient(180deg, var(--host-dark-card), var(--host-dark-2));
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: var(--host-radius-lg);
        padding: 16px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        box-shadow: var(--host-shadow-lg);
    }

    .cta-server-unit {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.07);
        border-radius: 8px;
        padding: 11px 14px;
    }

    .cta-server-status {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--host-success);
        box-shadow: 0 0 6px rgba(22, 163, 74, 0.7);
        animation: blink 2.4s ease-in-out infinite;
        margin-right: 4px;
    }

    .cta-server-unit:nth-child(2) .cta-server-status {
        animation-delay: 0.3s;
    }

    .cta-server-unit:nth-child(3) .cta-server-status {
        animation-delay: 0.6s;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.3;
        }
    }

    .cta-server-unit span {
        width: 22px;
        height: 5px;
        border-radius: 2px;
        background: rgba(255, 255, 255, 0.14);
    }

    /* floating cards */

    .cta-floating-card {
        position: absolute;
        z-index: 3;
        display: flex;
        align-items: center;
        gap: 12px;
        background: var(--host-white);
        border-radius: var(--host-radius-md);
        padding: 12px 16px;
        box-shadow: var(--host-shadow-lg);
        animation: badge-float 4s ease-in-out infinite;
    }

    .cta-floating-icon {
        flex: none;
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--host-bg-orange);
        color: var(--host-primary);
        font-size: 16px;
    }

    .cta-floating-card strong {
        display: block;
        font-size: 14.5px;
        color: var(--host-text);
        line-height: 1.2;
    }

    .cta-floating-card span {
        font-size: 11.5px;
        color: var(--host-text-muted);
    }

    .cta-floating-card--uptime {
        top: 6px;
        right: -6px;
        animation-delay: 0s;
    }

    .cta-floating-card--security {
        bottom: 10px;
        left: -14px;
        animation-delay: 1.6s;
    }

    @keyframes badge-float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }

    @media (max-width: 900px) {
        .hosting-final-cta-container {
            grid-template-columns: 1fr;
            gap: 80px;
        }

        .hosting-final-cta-visual {
            max-width: 380px;
            margin: 0 auto;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .cta-cloud-body,
        .hosting-final-cta-glow,
        .cta-connection,
        .cta-server-status,
        .cta-floating-card {
            animation: none;
        }
    }
</style>

<!-- ==========================================
     FINAL CTA
========================================== -->

<section class="hosting-final-cta">

    <div class="hosting-final-cta-container">

        <!-- LEFT CONTENT -->
        <div class="hosting-final-cta-content">

            <span class="hosting-final-cta-eyebrow">
                READY TO GET STARTED?
            </span>

            <h2>
                Power Your Business
                <span>With Better Hosting.</span>
            </h2>

            <p>
                Fast, secure, and reliable hosting built to keep your
                website running smoothly and your business moving forward.
            </p>


            <!-- CTA BUTTONS -->
            <div class="hosting-final-cta-actions">

                <a href="#" class="hosting-final-cta-btn hosting-final-cta-btn--primary">
                    Get Started
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="#" class="hosting-final-cta-btn hosting-final-cta-btn--secondary">
                    Talk To An Expert
                    <i class="fa-regular fa-comments"></i>
                </a>

            </div>


            <!-- TRUST POINTS -->
            <div class="hosting-final-cta-trust">

                <span>
                    <i class="fa-solid fa-circle-check"></i>
                    99.99% Uptime
                </span>

                <span>
                    <i class="fa-solid fa-circle-check"></i>
                    24/7 Support
                </span>

                <span>
                    <i class="fa-solid fa-circle-check"></i>
                    Secure Infrastructure
                </span>

            </div>

        </div>


        <!-- RIGHT VISUAL -->
        <div class="hosting-final-cta-visual">

            <div class="hosting-final-cta-glow"></div>


            <!-- CLOUD -->
            <div class="cta-cloud">

                <div class="cta-cloud-body">

                    <i class="fa-solid fa-cloud"></i>

                    <div class="cta-cloud-lock">
                        <i class="fa-solid fa-lock"></i>
                    </div>

                </div>

            </div>

            <div class="cta-connection cta-connection--left"></div>


            <!-- SERVER RACK -->
            <div class="cta-server-rack">

                <div class="cta-server-unit">

                    <div class="cta-server-status"></div>

                    <span></span>
                    <span></span>
                    <span></span>

                </div>

                <div class="cta-server-unit">

                    <div class="cta-server-status"></div>

                    <span></span>
                    <span></span>
                    <span></span>

                </div>

                <div class="cta-server-unit">

                    <div class="cta-server-status"></div>

                    <span></span>
                    <span></span>
                    <span></span>

                </div>

            </div>


            <!-- FLOATING CARDS -->

            <div class="cta-floating-card cta-floating-card--uptime">

                <div class="cta-floating-icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>

                <div>
                    <strong>99.99%</strong>
                    <span>Uptime</span>
                </div>

            </div>


            <div class="cta-floating-card cta-floating-card--security">

                <div class="cta-floating-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div>
                    <strong>Secure</strong>
                    <span>Infrastructure</span>
                </div>

            </div>

        </div>

    </div>

</section>