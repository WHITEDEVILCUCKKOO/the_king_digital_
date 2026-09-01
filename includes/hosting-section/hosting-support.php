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
       SECTION — light, orange-tinted
       ======================================== */

    .managed-hosting-section {
        background: var(--host-bg-orange);
        padding: var(--host-section-space) 24px;
    }

    .managed-hosting-container {
        max-width: var(--host-container);
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        align-items: center;
        gap: 72px;
    }

    /* ========================================
       LEFT — CONTENT
       ======================================== */

    .managed-hosting-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 0.06em;
        color: var(--host-primary-dark);
        background: var(--host-white);
        border: 1px solid var(--host-border-orange);
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 20px;
    }

    .managed-hosting-content h2 {
        margin: 0 0 16px;
        font-size: clamp(28px, 3.2vw, 42px);
        line-height: 1.22;
        color: var(--host-text);
        font-weight: 700;
        letter-spacing: -0.01em;
    }

    .managed-hosting-content h2 span {
        display: block;
        color: var(--host-primary);
    }

    .managed-hosting-description {
        margin: 0 0 32px;
        max-width: 50ch;
        font-size: 16.5px;
        line-height: 1.65;
        color: var(--host-text-secondary);
    }

    .managed-hosting-services {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 36px;
    }

    .managed-service-item {
        display: flex;
        gap: 14px;
        align-items: flex-start;
    }

    .managed-service-icon {
        flex: none;
        width: 42px;
        height: 42px;
        border-radius: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--host-white);
        border: 1px solid var(--host-border-orange);
        color: var(--host-primary);
        font-size: 16px;
    }

    .managed-service-text h3 {
        margin: 0 0 3px;
        font-size: 15.5px;
        font-weight: 600;
        color: var(--host-text);
    }

    .managed-service-text p {
        margin: 0;
        font-size: 14px;
        line-height: 1.55;
        color: var(--host-text-muted);
    }

    .managed-hosting-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
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

    .managed-hosting-btn i {
        transition: transform 0.15s ease;
    }

    .managed-hosting-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--host-shadow-lg);
    }

    .managed-hosting-btn:hover i {
        transform: translateX(3px);
    }

    /* ========================================
       RIGHT — VISUAL / DASHBOARD
       ======================================== */

    .managed-hosting-visual {
        position: relative;
        padding: 28px;
    }

    .managed-visual-glow {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 60% 30%, rgba(249, 115, 22, 0.22), transparent 60%);
        filter: blur(50px);
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
            transform: scale(1.05);
        }
    }

    .managed-dashboard {
        position: relative;
        z-index: 1;
        background: var(--host-dark-2);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--host-radius-lg);
        padding: 22px;
        box-shadow: var(--host-shadow-lg);
    }

    .managed-dashboard-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 18px;
    }

    .managed-dashboard-title {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 600;
        color: var(--host-white);
    }

    .status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--host-success);
        box-shadow: 0 0 0 0 rgba(22, 163, 74, 0.6);
        animation: pulse-dot 1.8s ease-out infinite;
    }

    @keyframes pulse-dot {
        0% {
            box-shadow: 0 0 0 0 rgba(22, 163, 74, 0.6);
        }

        70% {
            box-shadow: 0 0 0 8px rgba(22, 163, 74, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(22, 163, 74, 0);
        }
    }

    .managed-dashboard-live {
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: 0.08em;
        color: var(--host-primary-light);
        background: rgba(249, 115, 22, 0.14);
        border: 1px solid rgba(249, 115, 22, 0.3);
        padding: 3px 9px;
        border-radius: 999px;
    }

    /* server rack */

    .managed-server {
        background: var(--host-dark-card);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 12px;
        padding: 14px;
        margin-bottom: 16px;
    }

    .managed-server-rack {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .managed-server-unit {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 7px;
        padding: 9px 12px;
    }

    .managed-server-unit span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--host-primary-light);
        box-shadow: 0 0 6px rgba(251, 146, 60, 0.7);
        animation: blink 2.4s ease-in-out infinite;
    }

    .managed-server-unit span:nth-child(2) {
        animation-delay: 0.3s;
    }

    .managed-server-unit span:nth-child(3) {
        animation-delay: 0.6s;
    }

    .managed-server-unit:nth-child(2) span {
        animation-delay: 0.4s;
    }

    .managed-server-unit:nth-child(3) span {
        animation-delay: 0.8s;
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

    .managed-server-unit strong {
        margin-left: auto;
        font-size: 10.5px;
        letter-spacing: 0.05em;
        font-weight: 700;
        color: #8B94A7;
    }

    /* performance */

    .managed-performance {
        background: var(--host-dark-card);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 12px;
        padding: 14px 16px 12px;
        margin-bottom: 16px;
    }

    .performance-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 12px;
    }

    .performance-heading span {
        font-size: 12.5px;
        color: #8B94A7;
    }

    .performance-heading strong {
        font-size: 12.5px;
        font-weight: 700;
        color: var(--host-success);
    }

    .performance-chart {
        display: flex;
        align-items: flex-end;
        gap: 5px;
        height: 46px;
    }

    .performance-chart span {
        flex: 1;
        background: var(--host-primary);
        border-radius: 3px 3px 0 0;
        opacity: 0.85;
        animation: bar-grow 2.4s ease-in-out infinite;
        transform-origin: bottom;
    }

    .performance-chart span:nth-child(1) {
        height: 40%;
        animation-delay: 0s;
    }

    .performance-chart span:nth-child(2) {
        height: 65%;
        animation-delay: 0.1s;
    }

    .performance-chart span:nth-child(3) {
        height: 50%;
        animation-delay: 0.2s;
    }

    .performance-chart span:nth-child(4) {
        height: 80%;
        animation-delay: 0.3s;
    }

    .performance-chart span:nth-child(5) {
        height: 60%;
        animation-delay: 0.4s;
    }

    .performance-chart span:nth-child(6) {
        height: 90%;
        animation-delay: 0.5s;
    }

    .performance-chart span:nth-child(7) {
        height: 70%;
        animation-delay: 0.6s;
    }

    .performance-chart span:nth-child(8) {
        height: 100%;
        animation-delay: 0.7s;
    }

    .performance-chart span:nth-child(9) {
        height: 75%;
        animation-delay: 0.8s;
    }

    .performance-chart span:nth-child(10) {
        height: 85%;
        animation-delay: 0.9s;
    }

    @keyframes bar-grow {

        0%,
        100% {
            transform: scaleY(0.85);
        }

        50% {
            transform: scaleY(1);
        }
    }

    /* stats */

    .managed-dashboard-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    .managed-dashboard-stats div {
        background: var(--host-dark-card);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 10px;
        padding: 10px 6px;
        text-align: center;
    }

    .managed-dashboard-stats strong {
        display: block;
        font-size: 16px;
        color: var(--host-white);
        letter-spacing: -0.01em;
    }

    .managed-dashboard-stats span {
        font-size: 10.5px;
        color: #8B94A7;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }

    /* floating cards */

    .managed-floating-card {
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

    .managed-floating-icon {
        flex: none;
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .managed-floating-card strong {
        display: block;
        font-size: 14.5px;
        color: var(--host-text);
        line-height: 1.2;
    }

    .managed-floating-card span {
        font-size: 11.5px;
        color: var(--host-text-muted);
    }

    .managed-floating-card--security {
        top: 4px;
        left: -20px;
        animation-delay: 0s;
    }

    .managed-floating-card--security .managed-floating-icon {
        background: var(--host-bg-orange);
        color: var(--host-primary);
    }

    .managed-floating-card--backup {
        bottom: -6px;
        right: -18px;
        animation-delay: 1.6s;
    }

    .managed-floating-card--backup .managed-floating-icon {
        background: var(--host-bg-blue);
        color: var(--host-secondary);
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
        .managed-hosting-container {
            grid-template-columns: 1fr;
            gap: 90px;
        }

        .managed-hosting-visual {
            max-width: 420px;
            margin: 0 auto;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .managed-server-unit span,
        .performance-chart span,
        .status-dot,
        .managed-visual-glow,
        .managed-floating-card {
            animation: none;
        }
    }
</style>

<!-- ==========================================
     MANAGED HOSTING / SUPPORT
========================================== -->

<section class="managed-hosting-section">

    <div class="managed-hosting-container">

        <!-- LEFT: CONTENT -->
        <div class="managed-hosting-content">

            <span class="managed-hosting-eyebrow">
                FULLY MANAGED HOSTING
            </span>

            <h2>
                We Manage The Infrastructure.
                <span>You Grow Your Business.</span>
            </h2>

            <p class="managed-hosting-description">
                From server monitoring and security updates to backups
                and performance optimization, our team handles the
                technical side so you can focus on growing your business.
            </p>


            <!-- SERVICE LIST -->
            <div class="managed-hosting-services">

                <div class="managed-service-item">

                    <div class="managed-service-icon">
                        <i class="fa-solid fa-server"></i>
                    </div>

                    <div class="managed-service-text">
                        <h3>Server Management</h3>
                        <p>
                            We monitor and manage your server to keep
                            everything running smoothly.
                        </p>
                    </div>

                </div>


                <div class="managed-service-item">

                    <div class="managed-service-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div class="managed-service-text">
                        <h3>Security & Updates</h3>
                        <p>
                            Keep your infrastructure protected with
                            regular security updates and monitoring.
                        </p>
                    </div>

                </div>


                <div class="managed-service-item">

                    <div class="managed-service-icon">
                        <i class="fa-solid fa-database"></i>
                    </div>

                    <div class="managed-service-text">
                        <h3>Automated Backups</h3>
                        <p>
                            Protect your important website and application
                            data with reliable backups.
                        </p>
                    </div>

                </div>


                <div class="managed-service-item">

                    <div class="managed-service-icon">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>

                    <div class="managed-service-text">
                        <h3>Performance Monitoring</h3>
                        <p>
                            Continuously monitor performance and optimize
                            resources when needed.
                        </p>
                    </div>

                </div>


                <div class="managed-service-item">

                    <div class="managed-service-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <div class="managed-service-text">
                        <h3>24/7 Expert Support</h3>
                        <p>
                            Get assistance from experienced hosting
                            professionals whenever you need it.
                        </p>
                    </div>

                </div>

            </div>


            <!-- CTA -->
            <a href="#" class="managed-hosting-btn">
                Explore Managed Hosting
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <!-- RIGHT: VISUAL -->
        <div class="managed-hosting-visual">

            <div class="managed-visual-glow"></div>


            <!-- MAIN DASHBOARD -->
            <div class="managed-dashboard">

                <div class="managed-dashboard-header">

                    <div class="managed-dashboard-title">
                        <span class="status-dot"></span>
                        Server Status
                    </div>

                    <span class="managed-dashboard-live">
                        LIVE
                    </span>

                </div>


                <!-- SERVER -->
                <div class="managed-server">

                    <div class="managed-server-rack">

                        <div class="managed-server-unit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <strong>SERVER 01</strong>
                        </div>

                        <div class="managed-server-unit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <strong>SERVER 02</strong>
                        </div>

                        <div class="managed-server-unit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <strong>SERVER 03</strong>
                        </div>

                    </div>

                </div>


                <!-- PERFORMANCE -->
                <div class="managed-performance">

                    <div class="performance-heading">
                        <span>Performance</span>
                        <strong>Excellent</strong>
                    </div>

                    <div class="performance-chart">

                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>

                    </div>

                </div>


                <!-- DASHBOARD STATS -->
                <div class="managed-dashboard-stats">

                    <div>
                        <strong>99.99%</strong>
                        <span>Uptime</span>
                    </div>

                    <div>
                        <strong>24/7</strong>
                        <span>Monitoring</span>
                    </div>

                    <div>
                        <strong>100%</strong>
                        <span>Protected</span>
                    </div>

                </div>

            </div>


            <!-- FLOATING SECURITY -->
            <div class="managed-floating-card managed-floating-card--security">

                <div class="managed-floating-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div>
                    <strong>Protected</strong>
                    <span>Security Active</span>
                </div>

            </div>


            <!-- FLOATING BACKUP -->
            <div class="managed-floating-card managed-floating-card--backup">

                <div class="managed-floating-icon">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                </div>

                <div>
                    <strong>Backup Complete</strong>
                    <span>Just now</span>
                </div>

            </div>

        </div>

    </div>

</section>