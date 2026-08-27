<style>
    .studio-services {
        --studio-orange: #FF6B1A;
        --studio-orange-dark: #E95508;
        --studio-orange-soft: #FFF0E8;
        --studio-blue: #3B7DDB;
        --studio-blue-soft: #EAF2FE;
        --studio-purple: #8B5CF6;
        --studio-purple-soft: #F3EEFF;
        --studio-green: #22A65A;
        --studio-green-soft: #E9F8EF;
        --studio-red: #E24B4B;
        --studio-red-soft: #FDECEC;
        --studio-yellow: #D69A1F;
        --studio-yellow-soft: #FDF3E1;

        --studio-ink: #14213D;
        --studio-muted: #6B7686;
        --studio-border: #ECEEF2;
        --studio-shadow: 0 6px 18px rgba(20, 33, 61, 0.06);
        --studio-shadow-hover: 0 14px 30px rgba(20, 33, 61, 0.10);

        position: relative;
        /* background: var(--studio-blue-soft); */
        background:
            radial-gradient(circle at 8% 20%,
                rgba(59, 130, 246, 0.08),
                transparent 25%),
            radial-gradient(circle at 92% 75%,
                rgba(37, 211, 102, 0.045),
                transparent 25%),
            #eef5ff;
        padding: 72px 0;
        overflow: hidden;
    }

    .studio-services::after {
        content: "";

        position: absolute;

        width: 120px;
        height: 120px;

        right: 25px;
        bottom: 60px;

        background-image: radial-gradient(rgba(255, 102, 40, 0.25) 1px,
                transparent 1px);

        background-size: 8px 8px;

        opacity: 0.45;

        pointer-events: none;
    }

    .studio-services__container {
        position: relative;
        z-index: 2;
        max-width: 1100px;
        margin-inline: auto;
        padding-inline: 24px;
    }

    /* ---------- Header ---------- */

    .studio-services__header {
        text-align: center;
        max-width: 560px;
        margin: 0 auto 36px;
    }

    .studio-services__eyebrow {
        display: block;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--studio-orange);
        margin-bottom: 8px;
    }

    .studio-services__title {
        font-size: clamp(24px, 3vw, 30px);
        line-height: 1.2;
        font-weight: 800;
        color: var(--studio-ink);
        margin-bottom: 8px;
    }

    .studio-services__subtitle {
        font-size: 13.5px;
        line-height: 1.6;
        color: var(--studio-muted);
    }

    .studio-services__grid {
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        gap: 20px;
    }

    .studio-services__card {
        grid-column: span 2;
    }

    .studio-services__card:nth-child(5) {
        grid-column: 2 / span 2;
    }

    /* ---------- Card ---------- */

    .studio-services__card {
        display: flex;
        flex-direction: column;
        background: #FFFFFF;
        border: 1px solid var(--studio-border);
        border-radius: 12px;
        box-shadow: var(--studio-shadow);
        padding: 22px 20px;
        text-decoration: none;
        transition: transform 280ms ease, box-shadow 280ms ease, border-color 280ms ease, background 280ms ease;
    }

    .studio-services__card:hover {
        transform: translateY(-4px);
        box-shadow: var(--studio-shadow-hover);
        background: var(--studio-ink);
        border-color: var(--studio-ink);
    }

    .studio-services__icon {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 14px;
        transition: transform 280ms ease;
    }

    .studio-services__card:hover .studio-services__icon {
        transform: scale(1.06);
        background: rgba(255, 255, 255, 0.14);
    }

    .studio-services__icon svg {
        width: 19px;
        height: 19px;
    }

    .studio-services__icon--orange {
        background: var(--studio-orange-soft);
        color: var(--studio-orange);
    }

    .studio-services__icon--blue {
        background: var(--studio-blue-soft);
        color: var(--studio-blue);
    }

    .studio-services__icon--purple {
        background: var(--studio-purple-soft);
        color: var(--studio-purple);
    }

    .studio-services__icon--green {
        background: var(--studio-green-soft);
        color: var(--studio-green);
    }

    .studio-services__icon--red {
        background: var(--studio-red-soft);
        color: var(--studio-red);
    }

    .studio-services__icon--yellow {
        background: var(--studio-yellow-soft);
        color: var(--studio-yellow);
    }

    .studio-services__card-title {
        font-size: 14.5px;
        font-weight: 700;
        color: var(--studio-ink);
        margin-bottom: 8px;
        transition: color 280ms ease;
    }

    .studio-services__card:hover .studio-services__card-title {
        color: #FFFFFF;
    }

    .studio-services__description {
        font-size: 10.5px;
        line-height: 1.6;
        color: var(--studio-muted);
        margin-bottom: 16px;
        flex: 1;
        transition: color 280ms ease;
    }

    .studio-services__card:hover .studio-services__description {
        color: rgba(255, 255, 255, 0.72);
    }

    .studio-services__link {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 11px;
        font-weight: 600;
        color: var(--studio-orange);
        text-decoration: none;
        width: fit-content;
        transition: color 280ms ease;
    }

    .studio-services__link svg {
        width: 12px;
        height: 12px;
        transition: transform 220ms ease;
    }

    .studio-services__card:hover .studio-services__link {
        color: #FFA35E;
    }

    .studio-services__card:hover .studio-services__link svg {
        transform: translateX(3px);
    }

    /* ---------- Decorative elements ---------- */

    .studio-services__decor {
        position: absolute;
        pointer-events: none;
        z-index: 1;
    }

    .studio-services__decor--blob {
        left: -60px;
        bottom: -70px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(59, 125, 219, 0.06) 0%, rgba(59, 125, 219, 0) 70%);
    }

    .studio-services__decor--dots {
        right: 0;
        top: 46%;
        width: 130px;
        height: 130px;
        background-image: radial-gradient(circle, rgba(255, 107, 26, 0.45) 1.4px, transparent 1.4px);
        background-size: 13px 13px;
        -webkit-mask-image: radial-gradient(circle at 70% 30%, #000 0%, #000 35%, transparent 72%);
        mask-image: radial-gradient(circle at 70% 30%, #000 0%, #000 35%, transparent 72%);
        opacity: 0.7;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 900px) {
        .studio-services {
            padding: 56px 0;
        }

        .studio-services__grid {
            grid-template-columns: repeat(6, 1fr);
        }

        .studio-services__card {
            grid-column: span 2;
        }

        .studio-services__card:nth-child(5) {
            grid-column: span 2;
        }

        /* 3 + 3 + 1: center the last card on its own row */
        .studio-services__card:nth-child(7) {
            grid-column: 3 / span 2;
        }

        .studio-services__decor--dots {
            width: 100px;
            height: 100px;
        }
    }

    @media (max-width: 640px) {
        .studio-services {
            padding: 48px 0;
        }

        .studio-services__header {
            margin-bottom: 28px;
        }

        .studio-services__grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }

        .studio-services__card,
        .studio-services__card:nth-child(5),
        .studio-services__card:nth-child(7) {
            grid-column: 1 / -1;
        }

        .studio-services__decor--dots {
            display: none;
        }

        .studio-services__decor--blob {
            width: 160px;
            height: 160px;
            left: -50px;
            bottom: -50px;
        }
    }
</style>

<section class="studio-services">
    <div class="studio-services__container">

        <div class="studio-services__header">
            <span class="studio-services__eyebrow">What We Do</span>
            <h2 class="studio-services__title">Our Studio Services</h2>
            <p class="studio-services__subtitle">Everything you need for professional audio and video production under one roof.</p>
        </div>

        <div class="studio-services__grid">

            <a class="studio-services__card" href="#">
                <span class="studio-services__icon studio-services__icon--orange">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="9" y="2" width="6" height="12" rx="3" />
                        <path d="M5 10a7 7 0 0 0 14 0" />
                        <path d="M12 17v4" />
                        <path d="M9 21h6" />
                    </svg>
                </span>
                <h3 class="studio-services__card-title">Podcast Services</h3>
                <p class="studio-services__description">End-to-end podcast production including recording, editing, mixing and publishing for all major platforms.</p>
                <span class="studio-services__link">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </span>
            </a>

            <a class="studio-services__card" href="#">
                <span class="studio-services__icon studio-services__icon--blue">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 8h3l2-2h6l2 2h3v11H4z" />
                        <circle cx="12" cy="13" r="3.4" />
                    </svg>
                </span>
                <h3 class="studio-services__card-title">Studio on Rent</h3>
                <p class="studio-services__description">Rent our premium studio space equipped with professional gear for your shoots, podcasts and interviews.</p>
                <span class="studio-services__link">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </span>
            </a>

            <a class="studio-services__card" href="#">
                <span class="studio-services__icon studio-services__icon--purple">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4.5" width="18" height="15" rx="2" />
                        <path d="M3 9h18M3 15h18M8 4.5v15M16 4.5v15" />
                    </svg>
                </span>
                <h3 class="studio-services__card-title">Video Animation</h3>
                <p class="studio-services__description">Engaging 2D/3D animation and motion graphics to make your brand story come alive.</p>
                <span class="studio-services__link">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </span>
            </a>

            <a class="studio-services__card" href="#">
                <span class="studio-services__icon studio-services__icon--green">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="6.5" width="12" height="11" rx="2" />
                        <path d="M15 10.2 21 7v10l-6-3.2Z" />
                    </svg>
                </span>
                <h3 class="studio-services__card-title">Video Ads Shoot</h3>
                <p class="studio-services__description">High-quality video ads that capture attention and deliver results across all digital platforms.</p>
                <span class="studio-services__link">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </span>
            </a>

            <a class="studio-services__card" href="#">
                <span class="studio-services__icon studio-services__icon--red">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="9" y="2" width="6" height="12" rx="3" />
                        <path d="M5 10a7 7 0 0 0 14 0" />
                        <path d="M12 17v4" />
                        <path d="M9 21h6" />
                    </svg>
                </span>
                <h3 class="studio-services__card-title">Voice Over Recording</h3>
                <p class="studio-services__description">Professional voice overs for ads, explainers, IVR, e-learning and corporate videos.</p>
                <span class="studio-services__link">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </span>
            </a>

            <a class="studio-services__card" href="#">
                <span class="studio-services__icon studio-services__icon--yellow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.5 4.5 19 9l-9.5 9.5H5V14Z" />
                        <path d="M13 6l4.5 4.5" />
                    </svg>
                </span>
                <h3 class="studio-services__card-title">Scriptwriting & Translation</h3>
                <p class="studio-services__description">Creative scriptwriting and accurate translation to connect with your audience in any language.</p>
                <span class="studio-services__link">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </span>
            </a>

            <a class="studio-services__card" href="#">
                <span class="studio-services__icon studio-services__icon--blue">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 14v-2a8 8 0 0 1 16 0v2" />
                        <rect x="3" y="14" width="5" height="6" rx="2" />
                        <rect x="16" y="14" width="5" height="6" rx="2" />
                    </svg>
                </span>
                <h3 class="studio-services__card-title">Voice Recording Studio</h3>
                <p class="studio-services__description">Soundproof studio with industry-standard equipment for crystal clear voice recordings.</p>
                <span class="studio-services__link">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </span>
            </a>

        </div>
    </div>

    <span class="studio-services__decor studio-services__decor--blob"></span>
    <span class="studio-services__decor studio-services__decor--dots"></span>
</section>