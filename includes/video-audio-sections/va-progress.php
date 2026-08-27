<style>
    .hiw-section {
        --hiw-orange: #FF6B1A;
        --hiw-red: #E24B4B;
        --hiw-blue: #3B7DDB;
        --hiw-red-soft: #FDECEC;
        --hiw-blue-soft: #EAF2FE;
        --hiw-purple-soft: #F3EEFF;
        --hiw-green-soft: #E9F8EF;
        --hiw-orange-soft: #FFF0E8;
        --hiw-purple: #8B5CF6;
        --hiw-green: #22A65A;

        --hiw-ink: #14213D;
        --hiw-muted: #6B7686;
        --hiw-line: #E3E7EE;

        background: #fff;
        padding: 68px 0;
        position: relative;
        z-index: 2;
        overflow: hidden;
    }

    .hiw-section::before {
        content: "";

        position: absolute;

        width: 500px;
        height: 180px;

        left: 50%;
        top: 45%;

        transform: translate(-50%, -50%);

        background: rgba(59, 130, 246, 0.035);

        border-radius: 50%;

        filter: blur(30px);

        pointer-events: none;
    }

    /* Two faint corner glows to frame the section without
       competing with the steps themselves */
    .hiw-section::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        z-index: 0;
        background:
            radial-gradient(circle, rgba(226, 75, 75, 0.05) 0%, rgba(226, 75, 75, 0) 70%) -120px -100px / 320px 320px no-repeat,
            radial-gradient(circle, rgba(34, 166, 90, 0.05) 0%, rgba(34, 166, 90, 0) 70%) calc(100% + 120px) calc(100% + 100px) / 320px 320px no-repeat;
    }

    .hiw-container {
        max-width: 1160px;
        margin-inline: auto;
        padding-inline: 24px;
        position: relative;
        z-index: 1;
    }

    /* ---------- Header ---------- */

    .hiw-header {
        text-align: center;
        margin-bottom: 52px;
    }

    .hiw-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--hiw-orange);
        margin-bottom: 8px;
    }

    .hiw-eyebrow::before,
    .hiw-eyebrow::after {
        content: "";
        width: 14px;
        height: 1.5px;
        border-radius: 2px;
        background: linear-gradient(90deg, transparent, var(--hiw-orange));
    }

    .hiw-eyebrow::after {
        background: linear-gradient(90deg, var(--hiw-orange), transparent);
    }

    .hiw-title {
        font-size: clamp(24px, 3vw, 30px);
        font-weight: 800;
        color: var(--hiw-ink);
    }

    /* ---------- Steps row ---------- */

    .hiw-steps {
        position: relative;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
    }

    /* Dotted connector threads through the icon centers.
       5 equal columns => first icon center sits at 10%, last at 90%,
       so a line spanning left:10% to right:10% lines up exactly. */
    .hiw-steps::before {
        content: "";
        position: absolute;
        top: 32px;
        left: 10%;
        right: 10%;
        border-top: 2px dotted var(--hiw-line);
        z-index: 0;
    }

    /* Soft gradient wash over the connector so it feels like a single
       thread of "flow" rather than a flat grey rule */
    .hiw-steps::after {
        content: "";
        position: absolute;
        top: 22px;
        left: 10%;
        right: 10%;
        height: 20px;
        background: linear-gradient(90deg,
            rgba(226, 75, 75, 0.08) 0%,
            rgba(59, 125, 219, 0.08) 25%,
            rgba(139, 92, 246, 0.08) 50%,
            rgba(34, 166, 90, 0.08) 75%,
            rgba(255, 107, 26, 0.08) 100%);
        filter: blur(10px);
        z-index: 0;
        pointer-events: none;
    }

    .hiw-step {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 14px 12px;
        border-radius: 16px;
        transition: transform 280ms ease;
    }

    .hiw-step:hover {
        transform: translateY(-3px);
    }

    .hiw-step__icon {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
        background: #FBFBFC;
        box-shadow: 0 0 0 6px #FBFBFC;
        transition: transform 280ms ease, box-shadow 280ms ease;
    }

    .hiw-step:hover .hiw-step__icon {
        transform: scale(1.07);
    }

    .hiw-step__icon svg {
        width: 24px;
        height: 24px;
    }

    .hiw-step--red .hiw-step__icon {
        background: var(--hiw-red-soft);
        color: var(--hiw-red);
        box-shadow: 0 0 0 6px #FBFBFC;
    }

    .hiw-step--red:hover .hiw-step__icon {
        box-shadow: 0 0 0 6px #FBFBFC, 0 8px 18px rgba(226, 75, 75, 0.25);
    }

    .hiw-step--blue .hiw-step__icon {
        background: var(--hiw-blue-soft);
        color: var(--hiw-blue);
    }

    .hiw-step--blue:hover .hiw-step__icon {
        box-shadow: 0 0 0 6px #FBFBFC, 0 8px 18px rgba(59, 125, 219, 0.25);
    }

    .hiw-step--purple .hiw-step__icon {
        background: var(--hiw-purple-soft);
        color: var(--hiw-purple);
    }

    .hiw-step--purple:hover .hiw-step__icon {
        box-shadow: 0 0 0 6px #FBFBFC, 0 8px 18px rgba(139, 92, 246, 0.25);
    }

    .hiw-step--green .hiw-step__icon {
        background: var(--hiw-green-soft);
        color: var(--hiw-green);
    }

    .hiw-step--green:hover .hiw-step__icon {
        box-shadow: 0 0 0 6px #FBFBFC, 0 8px 18px rgba(34, 166, 90, 0.25);
    }

    .hiw-step--orange .hiw-step__icon {
        background: var(--hiw-orange-soft);
        color: var(--hiw-orange);
    }

    .hiw-step--orange:hover .hiw-step__icon {
        box-shadow: 0 0 0 6px #FBFBFC, 0 8px 18px rgba(255, 107, 26, 0.25);
    }

    .hiw-step__number {
        display: inline-block;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.04em;
        margin-bottom: 10px;
        padding: 3px 11px;
        border-radius: 999px;
    }

    .hiw-step--red .hiw-step__number {
        color: var(--hiw-red);
        background: var(--hiw-red-soft);
    }

    .hiw-step--blue .hiw-step__number {
        color: var(--hiw-blue);
        background: var(--hiw-blue-soft);
    }

    .hiw-step--purple .hiw-step__number {
        color: var(--hiw-purple);
        background: var(--hiw-purple-soft);
    }

    .hiw-step--green .hiw-step__number {
        color: var(--hiw-green);
        background: var(--hiw-green-soft);
    }

    .hiw-step--orange .hiw-step__number {
        color: var(--hiw-orange);
        background: var(--hiw-orange-soft);
    }

    .hiw-step__title {
        font-size: 15px;
        font-weight: 700;
        color: var(--hiw-ink);
        margin-bottom: 8px;
    }

    .hiw-step__desc {
        font-size: 12px;
        line-height: 1.6;
        color: var(--hiw-muted);
        max-width: 190px;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 900px) {
        .hiw-steps {
            grid-template-columns: repeat(3, 1fr);
            row-gap: 40px;
        }

        .hiw-steps::before,
        .hiw-steps::after {
            display: none;
        }

        .hiw-section::after {
            background:
                radial-gradient(circle, rgba(226, 75, 75, 0.05) 0%, rgba(226, 75, 75, 0) 70%) -100px -80px / 240px 240px no-repeat,
                radial-gradient(circle, rgba(34, 166, 90, 0.05) 0%, rgba(34, 166, 90, 0) 70%) calc(100% + 100px) calc(100% + 80px) / 240px 240px no-repeat;
        }
    }

    @media (max-width: 560px) {
        .hiw-section {
            padding: 48px 0;
        }

        .hiw-header {
            margin-bottom: 36px;
        }

        .hiw-steps {
            grid-template-columns: 1fr;
            row-gap: 32px;
        }

        .hiw-step__desc {
            max-width: 280px;
        }

        .hiw-step:hover {
            transform: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .hiw-step,
        .hiw-step__icon {
            transition: none;
        }
    }
</style>

<section class="hiw-section">
    <div class="hiw-container">

        <div class="hiw-header">
            <span class="hiw-eyebrow">Our Process</span>
            <h2 class="hiw-title">How It Works</h2>
        </div>

        <div class="hiw-steps">

            <div class="hiw-step hiw-step--red">
                <span class="hiw-step__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 5h16v11H9l-4 3.5V16H4Z" />
                        <path d="M8.5 10h.01M12 10h.01M15.5 10h.01" />
                    </svg>
                </span>
                <span class="hiw-step__number">01</span>
                <h3 class="hiw-step__title">Consult & Plan</h3>
                <p class="hiw-step__desc">We understand your idea and requirements to plan the perfect approach.</p>
            </div>

            <div class="hiw-step hiw-step--blue">
                <span class="hiw-step__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7 3h7l4 4v14H7Z" />
                        <path d="M14 3v4h4" />
                        <path d="M9.5 12h5M9.5 15.5h5M9.5 8.5h2" />
                    </svg>
                </span>
                <span class="hiw-step__number">02</span>
                <h3 class="hiw-step__title">Script & Prepare</h3>
                <p class="hiw-step__desc">Our team creates the script, prepares the setup and gets everything ready.</p>
            </div>

            <div class="hiw-step hiw-step--purple">
                <span class="hiw-step__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 8h3l2-2h6l2 2h3v11H4z" />
                        <circle cx="12" cy="13" r="3.4" />
                    </svg>
                </span>
                <span class="hiw-step__number">03</span>
                <h3 class="hiw-step__title">Record / Shoot</h3>
                <p class="hiw-step__desc">We record audio or shoot video using professional equipment in our studio.</p>
            </div>

            <div class="hiw-step hiw-step--green">
                <span class="hiw-step__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 20V10M12 20V4M18 20v-7" />
                        <circle cx="6" cy="8" r="1.6" fill="currentColor" stroke="none" />
                        <circle cx="12" cy="14" r="1.6" fill="currentColor" stroke="none" />
                        <circle cx="18" cy="10.5" r="1.6" fill="currentColor" stroke="none" />
                    </svg>
                </span>
                <span class="hiw-step__number">04</span>
                <h3 class="hiw-step__title">Edit & Produce</h3>
                <p class="hiw-step__desc">Editing, sound design, color grading and finishing to perfection.</p>
            </div>

            <div class="hiw-step hiw-step--orange">
                <span class="hiw-step__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m21 3-9.5 9.5" />
                        <path d="M21 3 14.5 21l-3-7.5L4 10.5Z" />
                    </svg>
                </span>
                <span class="hiw-step__number">05</span>
                <h3 class="hiw-step__title">Deliver</h3>
                <p class="hiw-step__desc">Final content delivered in the format you need, on time.</p>
            </div>

        </div>
    </div>
</section>