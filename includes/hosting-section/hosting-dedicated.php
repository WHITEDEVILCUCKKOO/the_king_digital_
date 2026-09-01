
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
       SECTION
       ======================================== */

    .dedicated-section {
        background: var(--host-dark);
        background-image:
            radial-gradient(circle at 10% 20%, rgba(249, 115, 22, 0.10), transparent 45%),
            radial-gradient(circle at 90% 80%, rgba(37, 99, 235, 0.12), transparent 45%);
        padding: var(--host-section-space) 24px;
    }

    .dedicated-container {
        max-width: var(--host-container);
        margin: 0 auto;
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        align-items: center;
        gap: 72px;
    }

    /* ========================================
       LEFT — VISUAL
       ======================================== */

    .dedicated-visual {
        position: relative;
        padding: 20px;
    }

    .dedicated-glow {
        position: absolute;
        inset: -20px;
        background: radial-gradient(circle at 35% 30%, rgba(249, 115, 22, 0.28), transparent 60%);
        filter: blur(40px);
        z-index: 0;
        animation: glow-pulse 5s ease-in-out infinite;
    }

    @keyframes glow-pulse {
        0%, 100% { opacity: 0.7; transform: scale(1); }
        50% { opacity: 1; transform: scale(1.06); }
    }

    .server-rack {
        position: relative;
        z-index: 1;
        background: var(--host-dark-2);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--host-radius-lg);
        padding: 22px;
        box-shadow: var(--host-shadow-lg);
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .server-unit {
        display: flex;
        align-items: center;
        gap: 10px;
        background: var(--host-dark-card);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 8px;
        padding: 12px 14px;
    }

    .server-unit::before {
        content: "";
        width: 26px;
        height: 4px;
        border-radius: 2px;
        background: rgba(255, 255, 255, 0.12);
        margin-right: 4px;
    }

    .server-light {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--host-success);
        box-shadow: 0 0 6px rgba(22, 163, 74, 0.7);
        animation: blink 2.6s ease-in-out infinite;
    }

    .server-unit:nth-child(odd) .server-light:nth-child(3) {
        background: var(--host-primary-light);
        box-shadow: 0 0 6px rgba(251, 146, 60, 0.7);
    }

    .server-light:nth-child(1) { animation-delay: 0s; }
    .server-light:nth-child(2) { animation-delay: 0.4s; }
    .server-light:nth-child(3) { animation-delay: 0.8s; }
    .server-light:nth-child(4) { animation-delay: 1.2s; }

    .server-unit:nth-child(2) .server-light { animation-delay: 0.3s; }
    .server-unit:nth-child(3) .server-light { animation-delay: 0.6s; }
    .server-unit:nth-child(4) .server-light { animation-delay: 0.9s; }
    .server-unit:nth-child(5) .server-light { animation-delay: 1.2s; }

    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.25; }
    }

    /* floating badges */

    .dedicated-badge {
        position: absolute;
        z-index: 2;
        display: flex;
        align-items: center;
        gap: 12px;
        background: var(--host-white);
        border-radius: var(--host-radius-md);
        padding: 12px 16px;
        box-shadow: var(--host-shadow-lg);
        animation: badge-float 4s ease-in-out infinite;
    }

    .dedicated-badge-icon {
        flex: none;
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .dedicated-badge strong {
        display: block;
        font-size: 16px;
        color: var(--host-text);
        line-height: 1.2;
    }

    .dedicated-badge span {
        font-size: 12px;
        color: var(--host-text-muted);
    }

    .dedicated-badge--uptime {
        top: -18px;
        right: -18px;
        animation-delay: 0s;
    }

    .dedicated-badge--uptime .dedicated-badge-icon {
        background: var(--host-bg-orange);
        color: var(--host-primary);
    }

    .dedicated-badge--security {
        bottom: -18px;
        left: -18px;
        animation-delay: 1.5s;
    }

    .dedicated-badge--security .dedicated-badge-icon {
        background: var(--host-bg-blue);
        color: var(--host-secondary);
    }

    @keyframes badge-float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }

    /* ========================================
       RIGHT — CONTENT
       ======================================== */

    .dedicated-eyebrow {
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

    .dedicated-content h2 {
        margin: 0 0 16px;
        font-size: clamp(28px, 3.2vw, 42px);
        line-height: 1.2;
        color: var(--host-white);
        font-weight: 700;
        letter-spacing: -0.01em;
    }

    .dedicated-content h2 span {
        display: block;
        color: var(--host-primary-light);
    }

    .dedicated-description {
        margin: 0 0 36px;
        max-width: 48ch;
        font-size: 16.5px;
        line-height: 1.65;
        color: #9CA6B8;
    }

    /* features grid */

    .dedicated-features {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 22px;
        margin-bottom: 32px;
    }

    .dedicated-feature {
        display: flex;
        gap: 12px;
        align-items: flex-start;
    }

    .dedicated-feature-icon {
        flex: none;
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--host-dark-card);
        color: var(--host-primary-light);
        font-size: 15px;
    }

    .dedicated-feature:nth-child(2n) .dedicated-feature-icon {
        color: var(--host-secondary-light);
    }

    .dedicated-feature h3 {
        margin: 0 0 4px;
        font-size: 15px;
        font-weight: 600;
        color: var(--host-white);
    }

    .dedicated-feature p {
        margin: 0;
        font-size: 13.5px;
        line-height: 1.55;
        color: #8B94A7;
    }

    /* checklist */

    .dedicated-list {
        list-style: none;
        margin: 0 0 36px;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        gap: 14px 28px;
    }

    .dedicated-list li {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14.5px;
        font-weight: 500;
        color: #D5DAE3;
    }

    .dedicated-list i {
        color: var(--host-success);
        font-size: 15px;
    }

    /* actions */

    .dedicated-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    .dedicated-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 24px;
        border-radius: var(--host-radius-sm);
        font-weight: 600;
        font-size: 14.5px;
        text-decoration: none;
        transition: transform 0.15s ease, box-shadow 0.15s ease, background 0.15s ease;
    }

    .dedicated-btn--primary {
        background: var(--host-gradient);
        color: var(--host-white);
        box-shadow: var(--host-shadow-orange);
    }

    .dedicated-btn--primary i {
        transition: transform 0.15s ease;
    }

    .dedicated-btn--primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--host-shadow-lg);
    }

    .dedicated-btn--primary:hover i {
        transform: translateX(3px);
    }

    .dedicated-btn--secondary {
        background: transparent;
        color: var(--host-white);
        border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .dedicated-btn--secondary:hover {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(255, 255, 255, 0.3);
    }

    @media (max-width: 900px) {
        .dedicated-container {
            grid-template-columns: 1fr;
            gap: 90px;
        }

        .dedicated-visual {
            max-width: 400px;
            margin: 0 auto;
        }

        .dedicated-features {
            grid-template-columns: 1fr;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .server-light, .dedicated-glow, .dedicated-badge {
            animation: none;
        }
    }
</style>

<!-- ==========================================
     DEDICATED SERVERS
========================================== -->

<section class="dedicated-section">

    <div class="dedicated-container">

        <!-- LEFT: SERVER VISUAL -->
        <div class="dedicated-visual">

            <div class="dedicated-glow"></div>

            <div class="server-rack">

                <div class="server-unit">
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                </div>

                <div class="server-unit">
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                </div>

                <div class="server-unit">
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                </div>

                <div class="server-unit">
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                </div>

                <div class="server-unit">
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                    <span class="server-light"></span>
                </div>

            </div>

            <!-- Floating uptime badge -->
            <div class="dedicated-badge dedicated-badge--uptime">

                <div class="dedicated-badge-icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>

                <div>
                    <strong>99.99%</strong>
                    <span>Uptime</span>
                </div>

            </div>


            <!-- Floating security badge -->
            <div class="dedicated-badge dedicated-badge--security">

                <div class="dedicated-badge-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div>
                    <strong>Enterprise</strong>
                    <span>Security</span>
                </div>

            </div>

        </div>


        <!-- RIGHT: CONTENT -->
        <div class="dedicated-content">

            <span class="dedicated-eyebrow">
                DEDICATED INFRASTRUCTURE
            </span>

            <h2>
                Need More Power?
                <span>Go Dedicated.</span>
            </h2>

            <p class="dedicated-description">
                Get the performance, control, and resources your
                high-traffic websites and mission-critical applications
                demand.
            </p>


            <!-- FEATURES -->
            <div class="dedicated-features">

                <div class="dedicated-feature">

                    <div class="dedicated-feature-icon">
                        <i class="fa-solid fa-server"></i>
                    </div>

                    <div>
                        <h3>Dedicated Resources</h3>
                        <p>
                            Get the entire server's resources without
                            sharing them with other websites.
                        </p>
                    </div>

                </div>


                <div class="dedicated-feature">

                    <div class="dedicated-feature-icon">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>

                    <div>
                        <h3>Maximum Performance</h3>
                        <p>
                            Powerful hardware built for demanding
                            applications and high traffic.
                        </p>
                    </div>

                </div>


                <div class="dedicated-feature">

                    <div class="dedicated-feature-icon">
                        <i class="fa-solid fa-sliders"></i>
                    </div>

                    <div>
                        <h3>Complete Control</h3>
                        <p>
                            Configure your server exactly the way
                            your business requires.
                        </p>
                    </div>

                </div>


                <div class="dedicated-feature">

                    <div class="dedicated-feature-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>

                    <div>
                        <h3>Advanced Security</h3>
                        <p>
                            Enterprise-grade protection keeps your
                            applications and data secure.
                        </p>
                    </div>

                </div>

            </div>


            <!-- CHECKLIST -->
            <ul class="dedicated-list">

                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    Full Root Access
                </li>

                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    NVMe SSD Storage
                </li>

                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    Unmetered Bandwidth
                </li>

                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    24/7 Expert Support
                </li>

            </ul>


            <!-- CTA -->
            <div class="dedicated-actions">

                <a href="#" class="dedicated-btn dedicated-btn--primary">
                    Explore Dedicated Servers
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="#" class="dedicated-btn dedicated-btn--secondary">
                    Talk To An Expert
                    <i class="fa-regular fa-comments"></i>
                </a>

            </div>

        </div>

    </div>

</section>