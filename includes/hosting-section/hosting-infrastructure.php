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
       SECTION — dark infrastructure console
       ======================================== */

    .hosting-infrastructure {
        background: var(--host-dark);
        background-image:
            radial-gradient(circle at 15% 0%, rgba(249, 115, 22, 0.10), transparent 45%),
            radial-gradient(circle at 100% 30%, rgba(37, 99, 235, 0.14), transparent 45%);
        padding: var(--host-section-space) 24px;
    }

    .hi_content {
        max-width: var(--host-container);
        margin: 0 auto;
    }

    /* ---- heading ---- */

    .hi_content-heading {
        text-align: center;
        max-width: 640px;
        margin: 0 auto 56px;
    }

    .hi_content-heading .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        color: var(--host-primary-light);
        background: rgba(249, 115, 22, 0.12);
        border: 1px solid rgba(249, 115, 22, 0.3);
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 18px;
    }

    .hi_content-heading .eyebrow::before {
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--host-success);
        box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.25);
    }

    .hi_content-heading h2 {
        margin: 0 0 14px;
        font-size: clamp(28px, 3.4vw, 44px);
        line-height: 1.15;
        color: var(--host-white);
        font-weight: 700;
        letter-spacing: -0.01em;
    }

    .hi_content-heading h2 span {
        color: var(--host-primary-light);
    }

    .hi_content-heading p {
        margin: 0;
        font-size: 17px;
        line-height: 1.6;
        color: #9CA6B8;
    }

    /* ---- console panel ---- */

    .hi_console {
        display: grid;
        grid-template-columns: 1fr 1.15fr;
        gap: 0;
        background: var(--host-dark-2);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--host-radius-lg);
        overflow: hidden;
        box-shadow: var(--host-shadow-lg);
    }

    /* left: capability list */

    .hi_console-list {
        padding: 40px;
        border-right: 1px solid rgba(255, 255, 255, 0.08);
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .hi_console-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 16px 4px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }

    .hi_console-item:last-child {
        border-bottom: none;
    }

    .hi_console-item .icon {
        flex: none;
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--host-dark-card);
        color: var(--host-primary-light);
    }

    .hi_console-item .icon svg {
        width: 18px;
        height: 18px;
    }

    .hi_console-item.tone-blue .icon {
        color: var(--host-secondary-light);
    }

    .hi_console-item h4 {
        margin: 0 0 3px;
        font-size: 15px;
        font-weight: 600;
        color: var(--host-white);
    }

    .hi_console-item p {
        margin: 0;
        font-size: 13.5px;
        line-height: 1.5;
        color: #8B94A7;
    }

    .hi_content-cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 28px;
        padding: 13px 24px;
        border-radius: var(--host-radius-sm);
        background: var(--host-gradient);
        color: var(--host-white);
        font-weight: 600;
        font-size: 14.5px;
        text-decoration: none;
        box-shadow: var(--host-shadow-orange);
        transition: transform 0.15s ease, box-shadow 0.15s ease;
        align-self: flex-start;
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

    /* right: network map */

    .hi_console-map {
        position: relative;
        background:
            radial-gradient(circle at 30% 20%, rgba(37, 99, 235, 0.18), transparent 55%),
            var(--host-dark-card);
        padding: 32px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .hi_console-map svg {
        width: 100%;
        height: auto;
        display: block;
    }

    .map-dot {
        fill: var(--host-primary-light);
    }

    .map-dot.blue {
        fill: var(--host-secondary-light);
    }

    .map-pulse {
        fill: none;
        stroke: var(--host-primary-light);
        stroke-width: 1.5;
        opacity: 0.6;
    }

    .map-pulse.blue {
        stroke: var(--host-secondary-light);
    }

    /* stat chips over the map */

    .hi_console-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
    }

    .hi_console-stats .stat {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        padding: 14px 12px;
        text-align: center;
    }

    .hi_console-stats .stat strong {
        display: block;
        font-size: 20px;
        color: var(--host-white);
        letter-spacing: -0.01em;
    }

    .hi_console-stats .stat span {
        font-size: 11.5px;
        color: #8B94A7;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }

    @media (max-width: 860px) {
        .hi_console {
            grid-template-columns: 1fr;
        }

        .hi_console-list {
            border-right: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 32px 24px;
        }

        .hi_console-map {
            padding: 24px;
        }

        .hi_console-stats {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 520px) {
        .hi_console-stats {
            grid-template-columns: 1fr 1fr;
        }
    }
</style>

<section class="hosting-infrastructure">
    <div class="hi_content">

        <div class="hi_content-heading">
            <div class="eyebrow">All systems operational</div>
            <h2>World-class <span>infrastructure</span>, built for scale</h2>
            <p>Enterprise hardware, distributed data centers, and real-time monitoring keep every site we host fast and online.</p>
        </div>

        <div class="hi_console">

            <div class="hi_console-list">

                <div class="hi_console-item">
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="7" rx="1.5" />
                            <rect x="3" y="13" width="18" height="7" rx="1.5" />
                            <circle cx="7" cy="7.5" r="0.8" fill="currentColor" stroke="none" />
                            <circle cx="7" cy="16.5" r="0.8" fill="currentColor" stroke="none" />
                        </svg>
                    </span>
                    <div>
                        <h4>Enterprise hardware</h4>
                        <p>Dual-CPU servers with redundant power keep uptime consistent.</p>
                    </div>
                </div>

                <div class="hi_console-item tone-blue">
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18" />
                        </svg>
                    </span>
                    <div>
                        <h4>Multiple data centers</h4>
                        <p>Traffic is routed to the region closest to your visitors.</p>
                    </div>
                </div>

                <div class="hi_console-item">
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M13 2 4 14h7l-1 8 9-12h-7l1-8Z" />
                        </svg>
                    </span>
                    <div>
                        <h4>NVMe SSD storage</h4>
                        <p>Read and write speeds built for high-traffic applications.</p>
                    </div>
                </div>

                <div class="hi_console-item tone-blue">
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19V5m0 14h16M8 15l3-4 3 3 4-6" />
                        </svg>
                    </span>
                    <div>
                        <h4>Advanced caching</h4>
                        <p>Multi-layer caching serves pages before requests hit origin.</p>
                    </div>
                </div>

                <div class="hi_console-item">
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2 4 5v6c0 5 3.4 9 8 11 4.6-2 8-6 8-11V5l-8-3Z" />
                        </svg>
                    </span>
                    <div>
                        <h4>DDoS protection</h4>
                        <p>Traffic is filtered at the edge before it reaches your site.</p>
                    </div>
                </div>

                <a href="#" class="hi_content-cta">View infrastructure <span>→</span></a>
            </div>

            <div class="hi_console-map">
                <svg viewBox="0 0 400 220" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40 60 L90 40 L150 55 L210 35 L270 55 L330 45 L370 70 L360 110 L320 130 L290 160 L240 175 L190 165 L150 180 L100 160 L60 140 L30 100 Z"
                        fill="none" stroke="rgba(255,255,255,0.10)" stroke-width="1" />
                    <line x1="95" y1="70" x2="205" y2="60" stroke="rgba(96,165,250,0.35)" stroke-width="1" stroke-dasharray="3 3" />
                    <line x1="205" y1="60" x2="300" y2="90" stroke="rgba(251,146,60,0.35)" stroke-width="1" stroke-dasharray="3 3" />
                    <line x1="205" y1="60" x2="150" y2="140" stroke="rgba(96,165,250,0.35)" stroke-width="1" stroke-dasharray="3 3" />
                    <line x1="300" y1="90" x2="260" y2="150" stroke="rgba(251,146,60,0.35)" stroke-width="1" stroke-dasharray="3 3" />

                    <circle class="map-pulse" cx="95" cy="70" r="10" />
                    <circle class="map-dot" cx="95" cy="70" r="4" />

                    <circle class="map-pulse blue" cx="205" cy="60" r="10" />
                    <circle class="map-dot blue" cx="205" cy="60" r="4" />

                    <circle class="map-pulse" cx="300" cy="90" r="10" />
                    <circle class="map-dot" cx="300" cy="90" r="4" />

                    <circle class="map-pulse blue" cx="150" cy="140" r="10" />
                    <circle class="map-dot blue" cx="150" cy="140" r="4" />

                    <circle class="map-pulse" cx="260" cy="150" r="10" />
                    <circle class="map-dot" cx="260" cy="150" r="4" />
                </svg>

                <div class="hi_console-stats">
                    <div class="stat">
                        <strong>12+</strong>
                        <span>Data centers</span>
                    </div>
                    <div class="stat">
                        <strong>99.99%</strong>
                        <span>Uptime</span>
                    </div>
                    <div class="stat">
                        <strong>&lt;20ms</strong>
                        <span>Latency</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>