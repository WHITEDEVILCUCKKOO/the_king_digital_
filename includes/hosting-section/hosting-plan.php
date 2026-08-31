
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

        .hosting-plan {
            padding: var(--host-section-space) 24px;
        }

        .hosting-plan_content {
            max-width: var(--host-container);
            margin: 0 auto;
        }

        .hosting-plan_content-heading {
            text-align: center;
            max-width: 620px;
            margin: 0 auto 56px;
        }

        .hosting-plan_content-heading h2 {
            font-size: clamp(28px, 3.4vw, 40px);
            line-height: 1.2;
            margin: 0 0 12px;
            letter-spacing: -0.01em;
        }

        .hosting-plan_content-heading p {
            color: var(--host-text-muted);
            font-size: 17px;
            margin: 0;
        }

        .hosting-plan_content-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .hosting-plan_content-cards {
            background: var(--host-white);
            border: 1px solid var(--host-border);
            border-radius: var(--host-radius-md);
            padding: 28px 24px 24px;
            display: flex;
            flex-direction: column;
            transition: border-color 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
        }

        .hosting-plan_content-cards:hover {
            transform: translateY(-4px);
            box-shadow: var(--host-shadow-md);
        }

        /* orange theme — traditional hosting */
        .hosting-plan_content-cards.theme-orange {
            border-top: 3px solid var(--host-primary);
        }

        .hosting-plan_content-cards.theme-orange:hover {
            border-color: var(--host-border-orange);
            border-top-color: var(--host-primary);
        }

        .hosting-plan_content-cards.theme-orange .card-icon {
            background: var(--host-bg-orange);
            color: var(--host-primary);
        }

        .hosting-plan_content-cards.theme-orange .card-points li::before {
            background: var(--host-primary);
        }

        /* blue theme — cloud & platforms */
        .hosting-plan_content-cards.theme-blue {
            border-top: 3px solid var(--host-secondary);
        }

        .hosting-plan_content-cards.theme-blue:hover {
            border-color: var(--host-border-blue);
            border-top-color: var(--host-secondary);
        }

        .hosting-plan_content-cards.theme-blue .card-icon {
            background: var(--host-bg-blue);
            color: var(--host-secondary);
        }

        .hosting-plan_content-cards.theme-blue .card-points li::before {
            background: var(--host-secondary);
        }

        .card-icon {
            width: 52px;
            height: 52px;
            border-radius: var(--host-radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
        }

        .card-icon svg {
            width: 26px;
            height: 26px;
        }

        .hosting-plan_content-cards h3 {
            margin: 0 0 4px;
            font-size: 19px;
            letter-spacing: -0.01em;
        }

        .hosting-plan_content-cards h3 span {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: var(--host-text-muted);
            margin-bottom: 2px;
        }

        .card-points {
            list-style: none;
            margin: 14px 0 22px;
            padding: 0;
            flex-grow: 1;
        }

        .card-points li {
            position: relative;
            padding-left: 18px;
            font-size: 14px;
            line-height: 1.5;
            color: var(--host-text-secondary);
            margin-bottom: 9px;
        }

        .card-points li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 7px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .plan-card-cta {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            color: var(--host-text);
            font-size: 14px;
            font-weight: 600;
            border: 1px solid var(--host-border);
            border-radius: var(--host-radius-sm);
            padding: 11px 16px;
            transition: background 0.2s ease, border-color 0.2s ease, color 0.2s ease;
        }

        .plan-card-cta svg {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
        }

        .theme-orange .plan-card-cta:hover {
            background: var(--host-primary);
            border-color: var(--host-primary);
            color: var(--host-white);
        }

        .theme-blue .plan-card-cta:hover {
            background: var(--host-secondary);
            border-color: var(--host-secondary);
            color: var(--host-white);
        }

        @media (max-width: 980px) {
            .hosting-plan_content-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 560px) {
            .hosting-plan_content-container {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="hosting-plan">
        <div class="hosting-plan_content">
            <div class="hosting-plan_content-heading">
                <h2>Choose the hosting that fits your business</h2>
                <p>Simple, transparent plans built for websites of every size.</p>
            </div>
            <div class="hosting-plan_content-container">

                <!-- Shared Hosting -->
                <div class="hosting-plan_content-cards theme-orange">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="6" rx="1.5" />
                            <rect x="2" y="15" width="20" height="6" rx="1.5" />
                            <circle cx="6" cy="6" r="1" fill="currentColor" stroke="none" />
                            <circle cx="6" cy="18" r="1" fill="currentColor" stroke="none" />
                        </svg>
                    </div>
                    <h3><span>Shared</span>Hosting</h3>
                    <ul class="card-points">
                        <li>Best for blogs and small business sites</li>
                        <li>One-click WordPress install</li>
                        <li>Free SSL certificate included</li>
                        <li>24/7 support included</li>
                    </ul>
                    <a href="#" class="plan-card-cta">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 5a2 2 0 0 1 2-2h3l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" />
                        </svg>
                        Talk to Expert
                    </a>
                </div>

                <!-- Reseller Hosting -->
                <div class="hosting-plan_content-cards theme-orange">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" />
                            <circle cx="10" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M17 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>
                    <h3><span>Reseller</span>Hosting</h3>
                    <ul class="card-points">
                        <li>White-label control panel for clients</li>
                        <li>Manage unlimited client accounts</li>
                        <li>Dedicated IP addresses included</li>
                        <li>Priority partner support line</li>
                    </ul>
                    <a href="#" class="plan-card-cta">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 5a2 2 0 0 1 2-2h3l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" />
                        </svg>
                        Talk to Expert
                    </a>
                </div>

                <!-- VPS Server -->
                <div class="hosting-plan_content-cards theme-orange">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="4" y="4" width="16" height="16" rx="2" />
                            <path d="M4 10h16M10 4v16" />
                        </svg>
                    </div>
                    <h3><span>VPS</span>Server</h3>
                    <ul class="card-points">
                        <li>Guaranteed, isolated resources</li>
                        <li>Full root access and control</li>
                        <li>Scale CPU and RAM on demand</li>
                        <li>Choice of Linux or Windows OS</li>
                    </ul>
                    <a href="#" class="plan-card-cta">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 5a2 2 0 0 1 2-2h3l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" />
                        </svg>
                        Talk to Expert
                    </a>
                </div>

                <!-- Dedicated Server -->
                <div class="hosting-plan_content-cards theme-orange">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="2" />
                            <path d="M9 6h6M9 10h6M9 14h2" />
                        </svg>
                    </div>
                    <h3><span>Dedicated</span>Server</h3>
                    <ul class="card-points">
                        <li>Entire physical server, just for you</li>
                        <li>Maximum performance and security</li>
                        <li>Custom hardware configurations</li>
                        <li>Managed setup available</li>
                    </ul>
                    <a href="#" class="plan-card-cta">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 5a2 2 0 0 1 2-2h3l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" />
                        </svg>
                        Talk to Expert
                    </a>
                </div>

                <!-- Cloud Server -->
                <div class="hosting-plan_content-cards theme-blue">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17.5 19a4.5 4.5 0 0 0 0-9 6 6 0 0 0-11.6 1.5A4 4 0 0 0 6.5 19h11Z" />
                        </svg>
                    </div>
                    <h3><span>Cloud</span>Server</h3>
                    <ul class="card-points">
                        <li>Instant scaling as traffic grows</li>
                        <li>Pay only for what you use</li>
                        <li>Automatic failover across nodes</li>
                        <li>Real-time usage dashboard</li>
                    </ul>
                    <a href="#" class="plan-card-cta">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 5a2 2 0 0 1 2-2h3l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" />
                        </svg>
                        Talk to Expert
                    </a>
                </div>

                <!-- DigitalOcean -->
                <div class="hosting-plan_content-cards theme-blue">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm0 5a5 5 0 1 1 0 10" />
                        </svg>
                    </div>
                    <h3><span>Digital</span>Ocean</h3>
                    <ul class="card-points">
                        <li>Droplets deployed in under a minute</li>
                        <li>Simple, predictable pricing</li>
                        <li>Global data center regions</li>
                        <li>Built-in monitoring and alerts</li>
                    </ul>
                    <a href="#" class="plan-card-cta">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 5a2 2 0 0 1 2-2h3l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" />
                        </svg>
                        Talk to Expert
                    </a>
                </div>

                <!-- AWS Cloud -->
                <div class="hosting-plan_content-cards theme-blue">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 16.5V9.5L12 5l9 4.5v7L12 21l-9-4.5Z" />
                            <path d="M3 9.5 12 14l9-4.5M12 14v7" />
                        </svg>
                    </div>
                    <h3><span>AWS</span>Cloud</h3>
                    <ul class="card-points">
                        <li>200+ managed cloud services</li>
                        <li>Enterprise-grade compliance</li>
                        <li>Auto-scaling infrastructure</li>
                        <li>Migration assistance included</li>
                    </ul>
                    <a href="#" class="plan-card-cta">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 5a2 2 0 0 1 2-2h3l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" />
                        </svg>
                        Talk to Expert
                    </a>
                </div>

                <!-- Google Cloud -->
                <div class="hosting-plan_content-cards theme-blue">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20M2 12h20M4.9 4.9l14.2 14.2M19.1 4.9 4.9 19.1" />
                            <circle cx="12" cy="12" r="9" />
                        </svg>
                    </div>
                    <h3><span>Google</span>Cloud</h3>
                    <ul class="card-points">
                        <li>Powered by Google's global network</li>
                        <li>Industry-leading data analytics</li>
                        <li>Per-second billing</li>
                        <li>Kubernetes-native deployments</li>
                    </ul>
                    <a href="#" class="plan-card-cta">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 5a2 2 0 0 1 2-2h3l2 5-2 1a11 11 0 0 0 5 5l1-2 5 2v3a2 2 0 0 1-2 2A16 16 0 0 1 3 5Z" />
                        </svg>
                        Talk to Expert
                    </a>
                </div>

            </div>
        </div>
    </section>