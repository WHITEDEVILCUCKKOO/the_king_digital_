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

    .hosting-plan {
        padding: 60px 24px;
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

    .hosting-plan_content-heading h2 span {
        color: var(--host-primary);
        font-weight: 700;
        font-size: clamp(28px, 3.4vw, 44px);
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

    /* ========================================
   CARD ICON
======================================== */

    .card-icon {
        width: 52px;
        height: 52px;
        border-radius: var(--host-radius-sm);

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 18px;

        transition:
            background-color 0.25s ease,
            color 0.25s ease;
    }

    .card-icon svg {
        width: 26px;
        height: 26px;

        transition:
            color 0.25s ease,
            fill 0.25s ease,
            stroke 0.25s ease;
    }


    /* ========================================
   ORANGE THEME
======================================== */

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


    /* ORANGE ICON HOVER */

    .hosting-plan_content-cards.theme-orange:hover .card-icon {
        background: var(--host-primary-dark);
        color: var(--host-white);
    }


    /* ========================================
   BLUE THEME
======================================== */

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


    /* BLUE ICON HOVER */

    .hosting-plan_content-cards.theme-blue:hover .card-icon {
        background: var(--host-secondary-dark);
        color: var(--host-white);
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
            <h2>Choose the <span>Perfect Hosting</span> that fits your business</h2>
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
            <div class="hosting-plan_content-cards theme-blue">
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
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M18 7H18.01M15 7H15.01M18 17H18.01M15 17H15.01M6 10H18C18.9319 10 19.3978 10 19.7654 9.84776C20.2554 9.64477 20.6448 9.25542 20.8478 8.76537C21 8.39782 21 7.93188 21 7C21 6.06812 21 5.60218 20.8478 5.23463C20.6448 4.74458 20.2554 4.35523 19.7654 4.15224C19.3978 4 18.9319 4 18 4H6C5.06812 4 4.60218 4 4.23463 4.15224C3.74458 4.35523 3.35523 4.74458 3.15224 5.23463C3 5.60218 3 6.06812 3 7C3 7.93188 3 8.39782 3.15224 8.76537C3.35523 9.25542 3.74458 9.64477 4.23463 9.84776C4.60218 10 5.06812 10 6 10ZM6 20H18C18.9319 20 19.3978 20 19.7654 19.8478C20.2554 19.6448 20.6448 19.2554 20.8478 18.7654C21 18.3978 21 17.9319 21 17C21 16.0681 21 15.6022 20.8478 15.2346C20.6448 14.7446 20.2554 14.3552 19.7654 14.1522C19.3978 14 18.9319 14 18 14H6C5.06812 14 4.60218 14 4.23463 14.1522C3.74458 14.3552 3.35523 14.7446 3.15224 15.2346C3 15.6022 3 16.0681 3 17C3 17.9319 3 18.3978 3.15224 18.7654C3.35523 19.2554 3.74458 19.6448 4.23463 19.8478C4.60218 20 5.06812 20 6 20Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
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
            <div class="hosting-plan_content-cards theme-blue">
                <div class="card-icon">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M22 17.5L21.3083 7.46975C21.1997 5.89504 21.1454 5.10768 20.8041 4.51082C20.5036 3.98533 20.0512 3.56304 19.5062 3.29942C18.8873 3 18.0981 3 16.5196 3H7.48037C5.90191 3 5.11268 3 4.49376 3.29942C3.94884 3.56304 3.49642 3.98533 3.19594 4.51082C2.85464 5.10768 2.80034 5.89503 2.69174 7.46975L2 17.5M22 17.5C22 19.433 20.433 21 18.5 21H5.5C3.567 21 2 19.433 2 17.5M22 17.5C22 15.567 20.433 14 18.5 14H5.5C3.567 14 2 15.567 2 17.5M6 17.5H6.01M12 17.5H18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
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
            <div class="hosting-plan_content-cards theme-orange">
                <div class="card-icon">
                    <svg fill="#000000" width="64px" height="64px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M12.005 21.992v-3.877c4.104 0 7.288-4.068 5.714-8.388a5.81 5.81 0 0 0-3.457-3.446c-4.319-1.563-8.389 1.61-8.389 5.714H2.008c0-6.541 6.325-11.642 13.184-9.499 2.991.94 5.383 3.321 6.313 6.313 2.141 6.858-2.96 13.183-9.5 13.183z"></path>
                            <path d="M12.017 18.139H8.152v-3.866h3.865zm-3.865 2.959H5.193v-2.959h2.959zm-2.959-2.959H2.711v-2.483h2.482v2.483z"></path>
                        </g>
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
                    <svg width="64px" height="64px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g fill="#000000">
                                <path d="M4.51 7.687c0 .197.02.357.058.475.042.117.096.245.17.384a.233.233 0 01.037.123c0 .053-.032.107-.1.16l-.336.224a.255.255 0 01-.138.048c-.054 0-.107-.026-.16-.074a1.652 1.652 0 01-.192-.251 4.137 4.137 0 01-.164-.315c-.416.491-.937.737-1.565.737-.447 0-.804-.129-1.064-.385-.261-.256-.394-.598-.394-1.025 0-.454.16-.822.484-1.1.325-.278.756-.416 1.304-.416.18 0 .367.016.564.042.197.027.4.07.612.118v-.39c0-.406-.085-.689-.25-.854-.17-.166-.458-.246-.868-.246-.186 0-.377.022-.574.07a4.23 4.23 0 00-.575.181 1.525 1.525 0 01-.186.07.326.326 0 01-.085.016c-.075 0-.112-.054-.112-.166v-.262c0-.085.01-.15.037-.186a.399.399 0 01.15-.113c.185-.096.409-.176.67-.24.26-.07.537-.101.83-.101.633 0 1.096.144 1.394.432.293.288.442.726.442 1.314v1.73h.01zm-2.161.811c.175 0 .356-.032.548-.096.192-.064.362-.182.505-.342a.848.848 0 00.181-.341c.032-.129.054-.283.054-.465V7.03a4.43 4.43 0 00-.49-.09 3.996 3.996 0 00-.5-.033c-.357 0-.617.07-.793.214-.176.144-.26.347-.26.614 0 .25.063.437.196.566.128.133.314.197.559.197zm4.273.577c-.096 0-.16-.016-.202-.054-.043-.032-.08-.106-.112-.208l-1.25-4.127a.938.938 0 01-.048-.214c0-.085.042-.133.127-.133h.522c.1 0 .17.016.207.053.043.032.075.107.107.208l.894 3.535.83-3.535c.026-.106.058-.176.101-.208a.365.365 0 01.213-.053h.426c.1 0 .17.016.212.053.043.032.08.107.102.208l.84 3.578.92-3.578a.459.459 0 01.107-.208.347.347 0 01.208-.053h.495c.085 0 .133.043.133.133 0 .027-.006.054-.01.086a.768.768 0 01-.038.133l-1.283 4.127c-.031.107-.069.177-.111.209a.34.34 0 01-.203.053h-.457c-.101 0-.17-.016-.213-.053-.043-.038-.08-.107-.101-.214L8.213 5.37l-.82 3.439c-.026.107-.058.176-.1.213-.043.038-.118.054-.213.054h-.458zm6.838.144a3.51 3.51 0 01-.82-.096c-.266-.064-.473-.134-.612-.214-.085-.048-.143-.101-.165-.15a.38.38 0 01-.031-.149v-.272c0-.112.042-.166.122-.166a.3.3 0 01.096.016c.032.011.08.032.133.054.18.08.378.144.585.187.213.042.42.064.633.064.336 0 .596-.059.777-.176a.575.575 0 00.277-.508.52.52 0 00-.144-.373c-.095-.102-.276-.193-.537-.278l-.772-.24c-.388-.123-.676-.305-.851-.545a1.275 1.275 0 01-.266-.774c0-.224.048-.422.143-.593.096-.17.224-.32.384-.438.16-.122.34-.213.553-.277.213-.064.436-.091.67-.091.118 0 .24.005.357.021.122.016.234.038.346.06.106.026.208.052.303.085.096.032.17.064.224.096a.461.461 0 01.16.133.289.289 0 01.047.176v.251c0 .112-.042.171-.122.171a.552.552 0 01-.202-.064 2.428 2.428 0 00-1.022-.208c-.303 0-.543.048-.708.15-.165.1-.25.256-.25.475 0 .149.053.277.16.379.106.101.303.202.585.293l.756.24c.383.123.66.294.825.513.165.219.244.47.244.748 0 .23-.047.437-.138.619a1.435 1.435 0 01-.388.47c-.165.133-.362.23-.591.299-.24.075-.49.112-.761.112z"></path>
                                <path fill-rule="evenodd" d="M14.465 11.813c-1.75 1.297-4.294 1.986-6.481 1.986-3.065 0-5.827-1.137-7.913-3.027-.165-.15-.016-.353.18-.235 2.257 1.313 5.04 2.109 7.92 2.109 1.941 0 4.075-.406 6.039-1.239.293-.133.543.192.255.406z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M15.194 10.98c-.223-.287-1.479-.138-2.048-.069-.17.022-.197-.128-.043-.24 1-.705 2.645-.502 2.836-.267.192.24-.053 1.89-.99 2.68-.143.123-.281.06-.217-.1.212-.53.686-1.72.462-2.003z" clip-rule="evenodd"></path>
                            </g>
                        </g>
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
            <div class="hosting-plan_content-cards theme-orange">
                <div class="card-icon">
                    <svg width="64px" height="64px" viewBox="0 -25 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path d="M170.2517,56.8186 L192.5047,34.5656 L193.9877,25.1956 C153.4367,-11.6774 88.9757,-7.4964 52.4207,33.9196 C42.2667,45.4226 34.7337,59.7636 30.7167,74.5726 L38.6867,73.4496 L83.1917,66.1106 L86.6277,62.5966 C106.4247,40.8546 139.8977,37.9296 162.7557,56.4286 L170.2517,56.8186 Z" fill="#EA4335"> </path>
                                <path d="M224.2048,73.9182 C219.0898,55.0822 208.5888,38.1492 193.9878,25.1962 L162.7558,56.4282 C175.9438,67.2042 183.4568,83.4382 183.1348,100.4652 L183.1348,106.0092 C198.4858,106.0092 210.9318,118.4542 210.9318,133.8052 C210.9318,149.1572 198.4858,161.2902 183.1348,161.2902 L127.4638,161.2902 L121.9978,167.2242 L121.9978,200.5642 L127.4638,205.7952 L183.1348,205.7952 C223.0648,206.1062 255.6868,174.3012 255.9978,134.3712 C256.1858,110.1682 244.2528,87.4782 224.2048,73.9182" fill="#4285F4"> </path>
                                <path d="M71.8704,205.7957 L127.4634,205.7957 L127.4634,161.2897 L71.8704,161.2897 C67.9094,161.2887 64.0734,160.4377 60.4714,158.7917 L52.5844,161.2117 L30.1754,183.4647 L28.2234,191.0387 C40.7904,200.5277 56.1234,205.8637 71.8704,205.7957" fill="#34A853"> </path>
                                <path d="M71.8704,61.4255 C31.9394,61.6635 -0.2366,94.2275 0.0014,134.1575 C0.1344,156.4555 10.5484,177.4455 28.2234,191.0385 L60.4714,158.7915 C46.4804,152.4705 40.2634,136.0055 46.5844,122.0155 C52.9044,108.0255 69.3704,101.8085 83.3594,108.1285 C89.5244,110.9135 94.4614,115.8515 97.2464,122.0155 L129.4944,89.7685 C115.7734,71.8315 94.4534,61.3445 71.8704,61.4255" fill="#FBBC05"> </path>
                            </g>
                        </g>
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