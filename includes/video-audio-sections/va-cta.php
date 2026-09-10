<style>
    .cta-section {
        --ink: #1B1613;
        --ink-soft: #241E19;
        --ink-line: rgba(243, 236, 223, 0.13);
        --paper: #F3ECDF;
        --paper-dim: #B9AF9E;
        --copper: #D3701F;
        --copper-light: #E68A3E;
        --meter-green: #7FB86B;
        --radius-sm: 3px;
        --radius-md: 4px;

        position: relative;
        background: var(--ink);
        color: var(--paper);
        padding: 64px 0 88px;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    .cta-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(243, 236, 223, 0.035) 1px, transparent 1px);
        background-size: 4px 4px;
        pointer-events: none;
    }

    .cta-container {
        position: relative;
        z-index: 1;
        max-width: 1180px;
        margin-inline: auto;
        padding-inline: 24px;
    }

    .cta-panel {
        position: relative;
        border: 1px solid var(--ink-line);
        background: var(--ink-soft);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 48px;
        padding: 48px 52px;
    }

    /* ---------- Text ---------- */

    .cta-text {
        max-width: 440px;
    }

    .cta-plate {
        font-family: 'IBM Plex Mono', monospace;
        font-size: 12px;
        color: var(--copper);
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 16px;
    }

    .cta-plate::before {
        content: "";
        width: 18px;
        height: 1px;
        background: var(--copper);
        display: inline-block;
    }

    .cta-heading {
        font-family: 'Big Shoulders Display', sans-serif;
        font-weight: 800;
        font-size: clamp(26px, 3vw, 36px);
        line-height: 1.08;
        letter-spacing: -0.01em;
        color: var(--paper);
        margin-bottom: 14px;
    }

    .cta-subtitle {
        font-size: 14.5px;
        line-height: 1.65;
        color: var(--paper-dim);
        max-width: 40ch;
    }

    /* ---------- Action ---------- */

    .cta-action {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 20px;
        flex: none;
    }

    .cta-status {
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: 'IBM Plex Mono', monospace;
        font-size: 11.5px;
        letter-spacing: 0.03em;
        color: var(--paper-dim);
    }

    .cta-status_dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--meter-green);
        box-shadow: 0 0 6px rgba(127, 184, 107, 0.7);
    }

    .cta-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 17px 30px;
        border-radius: var(--radius-md);
        background: var(--copper);
        color: var(--ink);
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        white-space: nowrap;
        transition: background 220ms ease, transform 220ms ease;
    }

    .cta-btn:hover {
        background: var(--copper-light);
        transform: translateY(-2px);
    }

    .cta-btn:active {
        transform: translateY(0);
    }

    .cta-btn svg {
        width: 16px;
        height: 16px;
        transition: transform 220ms ease;
    }

    .cta-btn:hover svg {
        transform: translateX(3px);
    }

    .cta-specs {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .cta-specs span {
        font-size: 12px;
        color: var(--paper-dim);
        white-space: nowrap;
    }

    .cta-specs .divider {
        width: 1px;
        height: 14px;
        background: var(--ink-line);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 780px) {
        .cta-panel {
            flex-direction: column;
            align-items: flex-start;
            padding: 36px 28px;
        }

        .cta-text {
            max-width: 100%;
        }

        .cta-action {
            align-items: flex-start;
            width: 100%;
        }

        .cta-btn {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .cta-section {
            padding: 48px 0 64px;
        }

        .cta-panel {
            padding: 28px 20px;
        }

        .cta-specs {
            flex-wrap: wrap;
            row-gap: 8px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .cta-btn,
        .cta-btn svg {
            transition: none;
        }
    }
</style>

<section class="cta-section">
    <div class="cta-container">
        <div class="cta-panel">

            <div class="cta-text">
                <p class="cta-plate">Get started</p>
                <h2 class="cta-heading">Let's get your next session booked.</h2>
                <p class="cta-subtitle">Tell us what you're making and we'll match you with the room, the gear, and the crew it needs.</p>
            </div>

            <div class="cta-action">
                <span class="cta-status">
                    <span class="cta-status_dot"></span>
                    Studio open for booking
                </span>
                <a class="cta-btn" href="#contact">
                    Book a session
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </a>
                <div class="cta-specs">
                    <span>Replies within a day</span>
                    <span class="divider"></span>
                    <span>No hidden costs</span>
                </div>
            </div>

        </div>
    </div>
</section>