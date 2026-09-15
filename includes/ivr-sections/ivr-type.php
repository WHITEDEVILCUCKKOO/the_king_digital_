<style>
    /* //////////////////////////////////// IVR Types Section Start ///////////////////////////////////// */
    /* Uses the same :root variables defined in the hero/products sections (--ivr-primary, --ivr-gradient-*, etc.)
       Include this section alongside those, or copy the :root block here too. */

    .ivr-types {
        position: relative;
        overflow: hidden;
        padding: 40px 80px;
        background: var(--ivr-bg-light);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .ivr-types_content {
        position: relative;
        z-index: 10;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ivr-types_head {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 56px;
    }

    .ivr-types_head .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--ivr-primary-dark);
        background: var(--ivr-card);
        border: 1px solid var(--ivr-border-purple);
        padding: 6px 14px;
        border-radius: var(--ivr-radius-pill);
        box-shadow: var(--ivr-shadow-sm);
        margin-bottom: 20px;
    }

    .ivr-types_head .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-types_head h2 {
        font-size: clamp(28px, 3.4vw, 44px);
        line-height: 1.2;
        font-weight: 800;
        margin: 0 0 16px;
        color: var(--ivr-text-primary);
    }

    .ivr-types_head p {
        font-size: 16px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    .ivr-types_grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
    }

    .ivr-type-card {
        position: relative;
        background: var(--ivr-card);
        border: 1.5px solid var(--ivr-border);
        border-radius: var(--ivr-radius-lg);
        padding: 30px 26px 32px;
        overflow: hidden;
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast), border-color var(--ivr-transition-fast);
    }

    .ivr-type-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--ivr-gradient-ai);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .3s ease;
    }

    .ivr-type-card:hover {
        transform: translateY(-6px);
        border-color: rgba(99, 102, 241, .3);
        box-shadow: var(--ivr-shadow-lg);
    }

    .ivr-type-card:hover::before {
        transform: scaleX(1);
    }

    .ivr-type-card--num {
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.08em;
        color: var(--ivr-primary);
        margin-bottom: 14px;
    }

    .ivr-type-card--icon {
        width: 48px;
        height: 48px;
        border-radius: var(--ivr-radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        background: var(--ivr-bg-light);
        color: var(--ivr-primary-dark);
        font-size: 19px;
        border: 1px solid var(--ivr-border-purple);
    }

    .ivr-type-card h3 {
        font-size: 18.5px;
        font-weight: 700;
        margin: 0 0 10px;
        color: var(--ivr-text-primary);
    }

    .ivr-type-card--intro {
        font-size: 14.5px;
        line-height: 1.65;
        color: var(--ivr-text-secondary);
        margin: 0 0 20px;
    }

    .ivr-type-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .ivr-type-list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 13.5px;
        line-height: 1.6;
        color: var(--ivr-text-muted);
    }

    .ivr-type-list li i {
        flex: 0 0 auto;
        margin-top: 3px;
        font-size: 13px;
        color: var(--ivr-blue);
    }

    @media (max-width: 1000px) {
        .ivr-types_grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 900px) {
        .ivr-types {
            padding: 60px 20px;
        }
    }

    .decor-types-glow {
        position: absolute;
        top: -160px;
        right: -140px;
        width: 440px;
        height: 440px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .14;
        filter: blur(70px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 13s ease-in-out infinite;
    }

    .decor-types-grid {
        position: absolute;
        bottom: -10px;
        left: -20px;
        width: 220px;
        height: 200px;
        background-image: radial-gradient(circle, var(--ivr-primary) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        opacity: .22;
        z-index: 0;
        pointer-events: none;
    }

    /* //////////////////////////////////// IVR Types Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// IVR Types Section //////////////////////////////////////-->
<section class="ivr-types" id="types-section">
    <div class="decor-types-glow"></div>
    <div class="decor-types-grid"></div>

    <div class="ivr-types_content">
        <div class="ivr-types_head">
            <span class="eyebrow"><i></i>CHOOSE YOUR ARCHITECTURE</span>
            <h2>What Types of IVR Systems Are Available?</h2>
            <p>Selecting the right IVR architecture depends on your operational scale, technical infrastructure, and desired caller experience.</p>
        </div>

        <div class="ivr-types_grid">

            <div class="ivr-type-card">
                <div class="ivr-type-card--num">TYPE 01</div>
                <div class="ivr-type-card--icon">
                    <i class="fa-solid fa-cloud"></i>
                </div>
                <h3>Hosted Cloud IVR (Virtual IVR)</h3>
                <p class="ivr-type-card--intro">A voice solution completely isolated from any on-premises equipment, device maintenance, and complicated wiring requirements.</p>
                <ul class="ivr-type-list">
                    <li><i class="fa-solid fa-circle-check"></i>Controlled entirely through strong web dashboards.</li>
                    <li><i class="fa-solid fa-circle-check"></i>Lets remote or geographically dispersed contact center teams take calls from anywhere via softphone or mobile devices.</li>
                    <li><i class="fa-solid fa-circle-check"></i>Scales easily — businesses can add phone numbers or agent extensions without delay.</li>
                </ul>
            </div>

            <div class="ivr-type-card">
                <div class="ivr-type-card--num">TYPE 02</div>
                <div class="ivr-type-card--icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <h3>Multi-Level IVR</h3>
                <p class="ivr-type-card--intro">Built for business operations that follow a systematic pattern, where calls are managed through distinct divisions of the organization.</p>
                <ul class="ivr-type-list">
                    <li><i class="fa-solid fa-circle-check"></i>Contains several layers of sub-menus that help resolve difficult issues encountered by callers.</li>
                    <li><i class="fa-solid fa-circle-check"></i>Classifies calls step by step — e.g. "Press 1 for Billing → Press 2 for Invoices → Press 1 to Pay by Phone."</li>
                    <li><i class="fa-solid fa-circle-check"></i>Greatly relieves operators' workload since queries are sorted out during the first steps of the menu.</li>
                </ul>
            </div>

            <div class="ivr-type-card">
                <div class="ivr-type-card--num">TYPE 03</div>
                <div class="ivr-type-card--icon">
                    <i class="fa-solid fa-robot"></i>
                </div>
                <h3>AI-Powered Conversational IVR</h3>
                <p class="ivr-type-card--intro">Designed for corporate operations that take a step-by-step approach, ensuring calls are redirected to the right company departments.</p>
                <ul class="ivr-type-list">
                    <li><i class="fa-solid fa-circle-check"></i>Uses multiple layers of sub-menus to tackle complicated issues faced by callers.</li>
                    <li><i class="fa-solid fa-circle-check"></i>Classifies calls into steps such as "Press 1 for Billing → Press 2 for Invoices → Press 1 to Pay by Phone."</li>
                    <li><i class="fa-solid fa-circle-check"></i>Reduces operators' workload by resolving inquiries already at the early stages of the menu.</li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// IVR Types Section End ///////////////////////////////////////////-->