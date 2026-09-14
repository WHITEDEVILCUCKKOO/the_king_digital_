<style>

    .ivr-why {
        position: relative;
        width: 100%;
        padding: 40px 80px;
        overflow: hidden;
        background: var(--ivr-gradient-dark);
    }

    .ivr-why_head {
        position: relative;
        z-index: 10;
        max-width: 720px;
        margin: 0 auto 40px;
        text-align: center;
    }

    .ivr-why_head .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--ivr-violet);
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(167, 139, 250, 0.35);
        padding: 6px 14px;
        border-radius: var(--ivr-radius-pill);
        margin-bottom: 20px;
    }

    .ivr-why_head .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        display: inline-block;
    }

    .ivr-why_head h2 {
        font-size: clamp(28px, 3.4vw, 44px);
        line-height: 1.2;
        font-weight: 700;
        margin: 0 0 18px;
        color: var(--ivr-text-light);
    }

    .ivr-why_head p {
        font-size: 16px;
        line-height: 1.75;
        color: rgba(248, 250, 252, 0.72);
        margin: 0;
    }

    .ivr-why_cards {
        position: relative;
        z-index: 10;
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
    }

    .ivr-why-card {
        position: relative;
        background: var(--ivr-card-dark);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--ivr-radius-lg);
        padding: 30px 26px;
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast), border-color var(--ivr-transition-fast);
    }

    .ivr-why-card:hover {
        transform: translateY(-6px);
        border-color: rgba(167, 139, 250, 0.4);
        box-shadow: var(--ivr-glow-purple);
    }

    .ivr-why-card--step {
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.08em;
        color: var(--ivr-primary-light);
        margin-bottom: 14px;
    }

    .ivr-why-card--icon {
        width: 48px;
        height: 48px;
        border-radius: var(--ivr-radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        background: var(--ivr-gradient-ai);
        color: var(--ivr-text-light);
        font-size: 19px;
        box-shadow: var(--ivr-glow-purple);
    }

    .ivr-why-card h3 {
        font-size: 18px;
        font-weight: 700;
        margin: 0 0 10px;
        color: var(--ivr-text-light);
    }

    .ivr-why-card p {
        font-size: 14.5px;
        line-height: 1.7;
        color: rgba(248, 250, 252, 0.62);
        margin: 0;
    }

    .ivr-why_subhead {
        position: relative;
        z-index: 10;
        max-width: 680px;
        margin: 80px auto 40px;
        text-align: center;
    }

    .ivr-why_subhead h3 {
        font-size: clamp(22px, 2.6vw, 30px);
        line-height: 1.25;
        font-weight: 700;
        margin: 0;
        color: var(--ivr-text-light);
    }

    .ivr-why_cards-secondary {
        position: relative;
        z-index: 10;
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 22px;
    }

    .ivr-why-card.compact {
        padding: 26px 22px;
    }

    .ivr-why-card.compact .ivr-why-card--icon {
        width: 42px;
        height: 42px;
        font-size: 17px;
        margin-bottom: 16px;
    }

    .ivr-why-card.compact h3 {
        font-size: 16px;
        margin-bottom: 8px;
    }

    .ivr-why-card.compact p {
        font-size: 14px;
        line-height: 1.65;
    }

    @media (max-width: 900px) {
        .ivr-why {
            padding: 64px 20px;
        }

        .ivr-why_cards {
            grid-template-columns: 1fr;
        }

        .ivr-why_subhead {
            margin: 56px auto 32px;
        }

        .ivr-why_cards-secondary {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 560px) {
        .ivr-why_cards-secondary {
            grid-template-columns: 1fr;
        }
    }

    .decor-why-glow-one {
        position: absolute;
        top: -140px;
        left: -120px;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .22;
        filter: blur(80px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 13s ease-in-out infinite;
    }

    .decor-why-glow-two {
        position: absolute;
        bottom: -160px;
        right: -140px;
        width: 460px;
        height: 460px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        opacity: .18;
        filter: blur(90px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 16s ease-in-out infinite reverse;
    }

    .decor-why-grid {
        position: absolute;
        top: 30%;
        right: 4%;
        width: 220px;
        height: 220px;
        background-image: radial-gradient(circle, var(--ivr-cyan) 1.6px, transparent 1.6px);
        background-size: 26px 26px;
        -webkit-mask-image: radial-gradient(ellipse at center, black 0%, black 20%, transparent 70%);
        mask-image: radial-gradient(ellipse at center, black 0%, black 20%, transparent 70%);
        opacity: .18;
        z-index: 0;
        pointer-events: none;
    }

    /* //////////////////////////////////// Why IVR (Dark) Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// Why IVR (Dark) Section //////////////////////////////////////-->
<section class="ivr-why" id="why-section">
    <div class="decor-why-glow-one"></div>
    <div class="decor-why-glow-two"></div>
    <div class="decor-why-grid"></div>

    <div class="ivr-why_head">
        <span class="eyebrow"><i></i>WHY UPGRADE</span>
        <h2>Why Every Business Needs an Advanced IVR Service</h2>
        <p>Switching from standard phone systems or physical PBXs to a cloud technology-based IVR system enables flexibility and scalability in call management. Where a receptionist once directed every call manually, an intelligent IVR now handles it end to end.</p>
    </div>

    <div class="ivr-why_cards">
        <div class="ivr-why-card">
            <div class="ivr-why-card--step">STEP 01</div>
            <div class="ivr-why-card--icon">
                <i class="fa-solid fa-microphone-lines"></i>
            </div>
            <h3>Greet Callers Instantly</h3>
            <p>Welcome every caller with pre-recorded, professional voice menus — no receptionist required, available 24/7.</p>
        </div>

        <div class="ivr-why-card">
            <div class="ivr-why-card--step">STEP 02</div>
            <div class="ivr-why-card--icon">
                <i class="fa-solid fa-keyboard"></i>
            </div>
            <h3>Capture Info with DTMF & NLP</h3>
            <p>Gather caller details using simple keypad (DTMF) inputs or natural language processing for a more human interaction.</p>
        </div>

        <div class="ivr-why-card">
            <div class="ivr-why-card--step">STEP 03</div>
            <div class="ivr-why-card--icon">
                <i class="fa-solid fa-diagram-project"></i>
            </div>
            <h3>Route to the Right Person</h3>
            <p>Automatically transfer each call to the correct department or employee, cutting down manual handling and wait times.</p>
        </div>
    </div>

    <div class="ivr-why_subhead">
        <h3>What Makes Automated Voice Infrastructure Essential?</h3>
    </div>

    <div class="ivr-why_cards-secondary">
        <div class="ivr-why-card compact">
            <div class="ivr-why-card--icon">
                <i class="fa-solid fa-clock"></i>
            </div>
            <h3>Constantly Available for Customers</h3>
            <p>Your virtual receptionist operates around the clock — automated FAQs, self-service menus, and call forwarding keep you reachable after hours.</p>
        </div>

        <div class="ivr-why-card compact">
            <div class="ivr-why-card--icon">
                <i class="fa-solid fa-bullseye"></i>
            </div>
            <h3>Immediate Call Resolution</h3>
            <p>Instantly connect incoming calls to the agent with the right skills, minimizing back-and-forth transfers.</p>
        </div>

        <div class="ivr-why-card compact">
            <div class="ivr-why-card--icon">
                <i class="fa-solid fa-phone-volume"></i>
            </div>
            <h3>No Missed Business Opportunities</h3>
            <p>High-capacity parallel call processing guarantees no customer ever hears a busy signal.</p>
        </div>

        <div class="ivr-why-card compact">
            <div class="ivr-why-card--icon">
                <i class="fa-solid fa-award"></i>
            </div>
            <h3>Improved Brand Image</h3>
            <p>Greet every caller with a professional, corporate, and consistent introduction that reflects well on your company.</p>
        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Why IVR (Dark) Section End ///////////////////////////////////////////-->