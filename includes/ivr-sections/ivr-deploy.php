<style>
    /* //////////////////////////////////// Deployment Steps Section Start ///////////////////////////////////// */
    /* Uses the same :root variables defined in the hero/products sections (--ivr-primary, --ivr-gradient-*, etc.)
       Include this section alongside those, or copy the :root block here too. */

    .ivr-deploy {
        position: relative;
        overflow: hidden;
        padding: 40px 80px;
        background: var(--ivr-bg-light);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .ivr-deploy_content {
        position: relative;
        z-index: 10;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ivr-deploy_head {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 60px;
    }

    .ivr-deploy_head .eyebrow {
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

    .ivr-deploy_head .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-deploy_head h2 {
        font-size: clamp(28px, 3.4vw, 40px);
        line-height: 1.2;
        font-weight: 700;
        margin: 0 0 16px;
        color: var(--ivr-text-primary);
    }

    .ivr-deploy_head p {
        font-size: 16px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    .ivr-deploy_row {
        display: flex;
        align-items: stretch;
        gap: 0;
    }

    .ivr-deploy-card {
        position: relative;
        flex: 1 1 0;
        background: var(--ivr-card);
        border: 1.5px solid var(--ivr-border);
        border-radius: var(--ivr-radius-lg);
        padding: 30px 24px 28px;
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast), border-color var(--ivr-transition-fast);
    }

    .ivr-deploy-card:hover {
        transform: translateY(-6px);
        border-color: rgba(99, 102, 241, .3);
        box-shadow: var(--ivr-shadow-lg);
    }

    .ivr-deploy-card--num {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: 700;
        color: var(--ivr-text-light);
        background: var(--ivr-gradient-ai);
        box-shadow: var(--ivr-glow-purple);
        margin-bottom: 18px;
    }

    .ivr-deploy-card--icon {
        position: absolute;
        top: 28px;
        right: 24px;
        font-size: 22px;
        color: var(--ivr-border-purple);
    }

    .ivr-deploy-card h3 {
        font-size: 16.5px;
        font-weight: 700;
        margin: 0 0 10px;
        color: var(--ivr-text-primary);
        padding-right: 20px;
    }

    .ivr-deploy-card p {
        font-size: 13.5px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    .ivr-deploy_arrow {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        color: var(--ivr-primary-light);
        font-size: 18px;
    }

    @media (max-width: 1000px) {
        .ivr-deploy_row {
            flex-direction: column;
            gap: 20px;
        }

        .ivr-deploy_arrow {
            width: auto;
            height: 20px;
            transform: rotate(90deg);
        }

        .ivr-deploy-card:hover {
            transform: none;
        }
    }

    @media (max-width: 900px) {
        .ivr-deploy {
            padding: 60px 20px;
        }
    }

    .decor-deploy-glow {
        position: absolute;
        bottom: -170px;
        right: -140px;
        width: 440px;
        height: 440px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .13;
        filter: blur(75px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 15s ease-in-out infinite;
    }

    .decor-deploy-dots {
        position: absolute;
        top: -10px;
        left: -10px;
        width: 220px;
        height: 200px;
        background-image: radial-gradient(circle, var(--ivr-primary) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at top left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at top left, black 0%, black 25%, transparent 72%);
        opacity: .2;
        z-index: 0;
        pointer-events: none;
    }

    /* //////////////////////////////////// Deployment Steps Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// Deployment Steps Section //////////////////////////////////////-->
<section class="ivr-deploy" id="deploy-section">
    <div class="decor-deploy-glow"></div>
    <div class="decor-deploy-dots"></div>

    <div class="ivr-deploy_content">
        <div class="ivr-deploy_head">
            <span class="eyebrow"><i></i>GET STARTED</span>
            <h2>Steps to Deploy Your Hosted IVR Platform</h2>
            <p>Establishing a cloud IVR system through Kings Digital is an easy, straightforward process.</p>
        </div>

        <div class="ivr-deploy_row">

            <div class="ivr-deploy-card">
                <div class="ivr-deploy-card--icon"><i class="fa-solid fa-hashtag"></i></div>
                <div class="ivr-deploy-card--num">1</div>
                <h3>Choose Your Phone Numbers</h3>
                <p>Opt for local, national virtual, or toll-free (1800 series) numbers to serve as the core of your business contact.</p>
            </div>

            <div class="ivr-deploy_arrow"><i class="fa-solid fa-chevron-right"></i></div>

            <div class="ivr-deploy-card">
                <div class="ivr-deploy-card--icon"><i class="fa-solid fa-diagram-project"></i></div>
                <div class="ivr-deploy-card--num">2</div>
                <h3>Plan Your Call Flow</h3>
                <p>Create a blueprint for menus, priorities, agent capabilities, and after-hours call management.</p>
            </div>

            <div class="ivr-deploy_arrow"><i class="fa-solid fa-chevron-right"></i></div>

            <div class="ivr-deploy-card">
                <div class="ivr-deploy-card--icon"><i class="fa-solid fa-microphone"></i></div>
                <div class="ivr-deploy-card--num">3</div>
                <h3>Produce High-Quality Greetings</h3>
                <p>Provide studio-quality voice recordings in every language your callers need.</p>
            </div>

            <div class="ivr-deploy_arrow"><i class="fa-solid fa-chevron-right"></i></div>

            <div class="ivr-deploy-card">
                <div class="ivr-deploy-card--icon"><i class="fa-solid fa-plug"></i></div>
                <div class="ivr-deploy-card--num">4</div>
                <h3>Connect APIs & Test Your Setup</h3>
                <p>Link your IVR system with the required web services, databases, and communication channels. Run end-to-end tests before going live.</p>
            </div>

        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Deployment Steps Section End ///////////////////////////////////////////-->