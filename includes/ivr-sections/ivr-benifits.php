<style>
    /* //////////////////////////////////// Key Benefits Section Start ///////////////////////////////////// */
    /* Uses the same :root variables defined in the hero/products sections (--ivr-primary, --ivr-gradient-*, etc.)
       Include this section alongside those, or copy the :root block here too. */

    .ivr-benefits {
        position: relative;
        overflow: hidden;
        padding: 40px 80px;
        background: var(--ivr-bg);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .ivr-benefits_content {
        position: relative;
        z-index: 10;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ivr-benefits_head {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 56px;
    }

    .ivr-benefits_head .eyebrow {
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

    .ivr-benefits_head .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-benefits_head h2 {
        font-size: clamp(28px, 3.4vw, 40px);
        line-height: 1.2;
        font-weight: 700;
        margin: 0;
        color: var(--ivr-text-primary);
    }

    .ivr-benefits_grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 22px;
    }

    .ivr-benefit-card {
        position: relative;
        background: var(--ivr-card);
        border: 1.5px solid var(--ivr-border);
        border-radius: var(--ivr-radius-lg);
        padding: 30px 26px;
        overflow: hidden;
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast), border-color var(--ivr-transition-fast);
    }

    .ivr-benefit-card::before {
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

    .ivr-benefit-card:hover {
        transform: translateY(-6px);
        border-color: rgba(99, 102, 241, .3);
        box-shadow: var(--ivr-shadow-lg);
    }

    .ivr-benefit-card:hover::before {
        transform: scaleX(1);
    }

    .ivr-benefit-card--icon {
        width: 50px;
        height: 50px;
        border-radius: var(--ivr-radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        background: var(--ivr-bg-light);
        color: var(--ivr-primary-dark);
        font-size: 20px;
        border: 1px solid var(--ivr-border-purple);
    }

    .ivr-benefit-card h3 {
        font-size: 16.5px;
        font-weight: 700;
        margin: 0 0 10px;
        color: var(--ivr-text-primary);
    }

    .ivr-benefit-card p {
        font-size: 14px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    /* the 5th card spans full width on the row where 4 fit + 1 remains, keeping the grid tidy */
    @media (min-width: 1000px) {
        .ivr-benefits_grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }

    @media (max-width: 900px) {
        .ivr-benefits {
            padding: 60px 20px;
        }
    }

    .decor-benefits-glow {
        position: absolute;
        top: -160px;
        left: -140px;
        width: 440px;
        height: 440px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .13;
        filter: blur(75px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 14s ease-in-out infinite;
    }

    .decor-benefits-dots {
        position: absolute;
        bottom: -10px;
        right: -10px;
        width: 220px;
        height: 200px;
        background-image: radial-gradient(circle, var(--ivr-blue) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at bottom right, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at bottom right, black 0%, black 25%, transparent 72%);
        opacity: .2;
        z-index: 0;
        pointer-events: none;
    }

    /* //////////////////////////////////// Key Benefits Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// Key Benefits Section //////////////////////////////////////-->
<section class="ivr-benefits" id="benefits-section">
    <div class="decor-benefits-glow"></div>
    <div class="decor-benefits-dots"></div>

    <div class="ivr-benefits_content">
        <div class="ivr-benefits_head">
            <span class="eyebrow"><i></i>THE BUSINESS CASE</span>
            <h2>Key Benefits of Implementing an Enterprise IVR Service</h2>
        </div>

        <div class="ivr-benefits_grid">

            <div class="ivr-benefit-card">
                <div class="ivr-benefit-card--icon"><i class="fa-solid fa-sack-dollar"></i></div>
                <h3>Cost Savings in Operations</h3>
                <p>Automating repetitive voice calls eliminates the need for large call center teams, cutting costs tied to labor and overhead.</p>
            </div>

            <div class="ivr-benefit-card">
                <div class="ivr-benefit-card--icon"><i class="fa-solid fa-gauge-high"></i></div>
                <h3>Improved Agent Efficiency</h3>
                <p>With fewer simple questions to field — like store hours or location — agents can dedicate their time to more important inquiries.</p>
            </div>

            <div class="ivr-benefit-card">
                <div class="ivr-benefit-card--icon"><i class="fa-solid fa-user-shield"></i></div>
                <h3>No More Human Error</h3>
                <p>Automated systems don't let customers reach the wrong extension or get left on hold for long stretches.</p>
            </div>

            <div class="ivr-benefit-card">
                <div class="ivr-benefit-card--icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
                <h3>Rapid Scalability</h3>
                <p>Handle a surge in call volume within seconds during promotional periods, with no need to buy extra phone lines or switches.</p>
            </div>

            <div class="ivr-benefit-card">
                <div class="ivr-benefit-card--icon"><i class="fa-solid fa-chart-pie"></i></div>
                <h3>Valuable Customer Insights</h3>
                <p>Detailed analysis of call statistics, calling patterns, and customer decision points gives managers actionable insight to improve service quality.</p>
            </div>

        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Key Benefits Section End ///////////////////////////////////////////-->