<style>
    .rack-services {
        --ink: #1B1613;
        --ink-soft: #241E19;
        --ink-line: rgba(243, 236, 223, 0.13);
        --paper: #F3ECDF;
        --paper-dim: #B9AF9E;
        --copper: #D3701F;
        --copper-dim: rgba(211, 112, 31, 0.18);
        --meter-green: #7FB86B;
        --meter-red: #D8503F;

        position: relative;
        background: var(--ink);
        color: var(--paper);
        padding: 88px 0 96px;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    .rack-services::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(243, 236, 223, 0.035) 1px, transparent 1px);
        background-size: 4px 4px;
        pointer-events: none;
    }

    .rack-services__container {
        position: relative;
        z-index: 2;
        max-width: 1180px;
        margin-inline: auto;
        padding-inline: 24px;
    }

    /* ---------- Header ---------- */

    .rack-services__header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 40px;
        margin-bottom: 44px;
        padding-bottom: 24px;
        border-bottom: 1px solid var(--ink-line);
    }

    .rack-services__plate {
        font-family: 'IBM Plex Mono', monospace;
        font-size: 12px;
        color: var(--copper);
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
    }

    .rack-services__plate::before {
        content: "";
        width: 18px;
        height: 1px;
        background: var(--copper);
        display: inline-block;
    }

    .rack-services__title {
        font-family: 'Big Shoulders Display', sans-serif;
        font-weight: 800;
        font-size: clamp(28px, 3.2vw, 42px);
        line-height: 1.05;
        letter-spacing: -0.01em;
        color: var(--paper);
        max-width: 14ch;
    }

    .rack-services__subtitle {
        font-size: 14.5px;
        line-height: 1.65;
        color: var(--paper-dim);
        max-width: 30ch;
        text-align: right;
    }

    /* ---------- Rack frame ---------- */

    .rack-services__frame {
        position: relative;
        border: 1px solid var(--ink-line);
        padding: 2px 22px;
    }

    .rack-services__frame::before,
    .rack-services__frame::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 22px;
        background-image: radial-gradient(circle, var(--ink-line) 1.5px, transparent 1.5px);
        background-size: 100% 26px;
        background-position: center top;
    }

    .rack-services__frame::before {
        left: 0;
    }

    .rack-services__frame::after {
        right: 0;
    }

    .rack-services__grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    /* ---------- Module card ---------- */

    .rack-services__card {
        display: flex;
        flex-direction: column;
        position: relative;
        padding: 26px 22px 24px;
        text-decoration: none;
        color: inherit;
        border-right: 1px solid var(--ink-line);
        border-bottom: 1px solid var(--ink-line);
        transition: background 240ms ease;
    }

    .rack-services__grid .rack-services__card:nth-child(4n) {
        border-right: none;
    }

    .rack-services__grid .rack-services__card:nth-last-child(-n+4) {
        border-bottom: none;
    }

    .rack-services__card:hover {
        background: var(--ink-soft);
    }

    .rack-services__card-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .rack-services__num {
        font-family: 'IBM Plex Mono', monospace;
        font-size: 11px;
        color: var(--paper-dim);
        letter-spacing: 0.04em;
        transition: color 240ms ease;
    }

    .rack-services__card:hover .rack-services__num {
        color: var(--copper);
    }

    .rack-services__led {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--meter-green);
        opacity: 0.55;
        transition: opacity 240ms ease, box-shadow 240ms ease;
    }

    .rack-services__card:hover .rack-services__led {
        opacity: 1;
        box-shadow: 0 0 6px rgba(127, 184, 107, 0.7);
    }

    .rack-services__port {
        width: 44px;
        height: 44px;
        border: 1px solid var(--ink-line);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        color: var(--paper-dim);
        transition: border-color 240ms ease, color 240ms ease;
    }

    .rack-services__card:hover .rack-services__port {
        border-color: var(--copper);
        color: var(--copper);
    }

    .rack-services__port svg {
        width: 20px;
        height: 20px;
    }

    .rack-services__card-title {
        font-size: 15px;
        font-weight: 600;
        color: var(--paper);
        margin-bottom: 8px;
    }

    .rack-services__description {
        font-size: 12.5px;
        line-height: 1.6;
        color: var(--paper-dim);
        flex: 1;
        margin-bottom: 18px;
    }

    .rack-services__link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-family: 'IBM Plex Mono', monospace;
        font-size: 11px;
        letter-spacing: 0.03em;
        color: var(--copper);
        width: fit-content;
    }

    .rack-services__link svg {
        width: 12px;
        height: 12px;
        transition: transform 220ms ease;
    }

    .rack-services__card:hover .rack-services__link svg {
        transform: translateX(3px);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 980px) {
        .rack-services__grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .rack-services__grid .rack-services__card:nth-child(4n) {
            border-right: 1px solid var(--ink-line);
        }

        .rack-services__grid .rack-services__card:nth-child(2n) {
            border-right: none;
        }

        .rack-services__grid .rack-services__card:nth-last-child(-n+4) {
            border-bottom: 1px solid var(--ink-line);
        }

        .rack-services__grid .rack-services__card:nth-last-child(-n+2) {
            border-bottom: none;
        }

        .rack-services__header {
            flex-direction: column;
            align-items: flex-start;
        }

        .rack-services__subtitle {
            text-align: left;
        }
    }

    @media (max-width: 620px) {
        .rack-services {
            padding: 64px 0 72px;
        }

        .rack-services__frame {
            padding: 2px 16px;
        }

        .rack-services__frame::before,
        .rack-services__frame::after {
            width: 14px;
        }

        .rack-services__grid {
            grid-template-columns: 1fr;
        }

        .rack-services__grid .rack-services__card:nth-child(2n) {
            border-right: none;
        }

        .rack-services__grid .rack-services__card:nth-last-child(-n+2) {
            border-bottom: 1px solid var(--ink-line);
        }

        .rack-services__grid .rack-services__card:last-child {
            border-bottom: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .rack-services__card,
        .rack-services__num,
        .rack-services__led,
        .rack-services__port,
        .rack-services__link svg {
            transition: none;
        }
    }
</style>

<section class="rack-services">
    <div class="rack-services__container">

        <div class="rack-services__header">
            <div>
                <p class="rack-services__plate">Service rack</p>
                <h2 class="rack-services__title">Eight rooms, one studio.</h2>
            </div>
            <p class="rack-services__subtitle">Everything you need for professional audio and video production, under one roof.</p>
        </div>

        <div class="rack-services__frame">
            <div class="rack-services__grid">

                <a class="rack-services__card" href="#">
                    <span class="rack-services__card-head">
                        <span class="rack-services__num">CH.01</span>
                        <span class="rack-services__led"></span>
                    </span>
                    <span class="rack-services__port">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="9" y="2" width="6" height="12" rx="3" />
                            <path d="M5 10a7 7 0 0 0 14 0" />
                            <path d="M12 17v4" />
                            <path d="M9 21h6" />
                        </svg>
                    </span>
                    <h3 class="rack-services__card-title">Podcast production</h3>
                    <p class="rack-services__description">Recording, editing, mixing, and delivery-ready files for every major platform.</p>
                    <span class="rack-services__link">
                        Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </span>
                </a>

                <a class="rack-services__card" href="#">
                    <span class="rack-services__card-head">
                        <span class="rack-services__num">CH.02</span>
                        <span class="rack-services__led"></span>
                    </span>
                    <span class="rack-services__port">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 3v4M12 17v4M3 12h4M17 12h4" />
                            <path d="M7.5 7.5l2 2M14.5 14.5l2 2M16.5 7.5l-2 2M9.5 14.5l-2 2" />
                            <circle cx="12" cy="12" r="2.2" />
                        </svg>
                    </span>
                    <h3 class="rack-services__card-title">AI video production</h3>
                    <p class="rack-services__description">Scripts, voiceover, visuals, and music generated from a single prompt.</p>
                    <span class="rack-services__link">
                        Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </span>
                </a>

                <a class="rack-services__card" href="#">
                    <span class="rack-services__card-head">
                        <span class="rack-services__num">CH.03</span>
                        <span class="rack-services__led"></span>
                    </span>
                    <span class="rack-services__port">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 8h3l2-2h6l2 2h3v11H4z" />
                            <circle cx="12" cy="13" r="3.4" />
                        </svg>
                    </span>
                    <h3 class="rack-services__card-title">Studio rental</h3>
                    <p class="rack-services__description">Book the room, mics, and lighting rig for your own shoot or session.</p>
                    <span class="rack-services__link">
                        Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </span>
                </a>

                <a class="rack-services__card" href="#">
                    <span class="rack-services__card-head">
                        <span class="rack-services__num">CH.04</span>
                        <span class="rack-services__led"></span>
                    </span>
                    <span class="rack-services__port">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4.5" width="18" height="15" rx="1" />
                            <path d="M3 9h18M3 15h18M8 4.5v15M16 4.5v15" />
                        </svg>
                    </span>
                    <h3 class="rack-services__card-title">Video animation</h3>
                    <p class="rack-services__description">2D and 3D motion graphics that carry your story past a static screen.</p>
                    <span class="rack-services__link">
                        Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </span>
                </a>

                <a class="rack-services__card" href="#">
                    <span class="rack-services__card-head">
                        <span class="rack-services__num">CH.05</span>
                        <span class="rack-services__led"></span>
                    </span>
                    <span class="rack-services__port">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="6.5" width="12" height="11" rx="1" />
                            <path d="M15 10.2 21 7v10l-6-3.2Z" />
                        </svg>
                    </span>
                    <h3 class="rack-services__card-title">Video ad production</h3>
                    <p class="rack-services__description">Ads shot and cut for the platforms your audience actually watches.</p>
                    <span class="rack-services__link">
                        Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </span>
                </a>

                <a class="rack-services__card" href="#">
                    <span class="rack-services__card-head">
                        <span class="rack-services__num">CH.06</span>
                        <span class="rack-services__led"></span>
                    </span>
                    <span class="rack-services__port">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="9" y="2" width="6" height="12" rx="3" />
                            <path d="M5 10a7 7 0 0 0 14 0" />
                            <path d="M12 17v4" />
                            <path d="M9 21h6" />
                        </svg>
                    </span>
                    <h3 class="rack-services__card-title">Voice-over recording</h3>
                    <p class="rack-services__description">Ads, explainers, e-learning, and IVR voiced clean in a treated booth.</p>
                    <span class="rack-services__link">
                        Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </span>
                </a>

                <a class="rack-services__card" href="#">
                    <span class="rack-services__card-head">
                        <span class="rack-services__num">CH.07</span>
                        <span class="rack-services__led"></span>
                    </span>
                    <span class="rack-services__port">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.5 4.5 19 9l-9.5 9.5H5V14Z" />
                            <path d="M13 6l4.5 4.5" />
                        </svg>
                    </span>
                    <h3 class="rack-services__card-title">Scriptwriting &amp; translation</h3>
                    <p class="rack-services__description">Scripts written and translated so the words land in any language.</p>
                    <span class="rack-services__link">
                        Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </span>
                </a>

                <a class="rack-services__card" href="#">
                    <span class="rack-services__card-head">
                        <span class="rack-services__num">CH.08</span>
                        <span class="rack-services__led"></span>
                    </span>
                    <span class="rack-services__port">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 14v-2a8 8 0 0 1 16 0v2" />
                            <rect x="3" y="14" width="5" height="6" rx="2" />
                            <rect x="16" y="14" width="5" height="6" rx="2" />
                        </svg>
                    </span>
                    <h3 class="rack-services__card-title">Voice recording studio</h3>
                    <p class="rack-services__description">A soundproofed room built for nothing but clear, consistent voice.</p>
                    <span class="rack-services__link">
                        Learn more
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </span>
                </a>

            </div>
        </div>
    </div>
</section>