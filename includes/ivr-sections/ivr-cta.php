<style>
    /* //////////////////////////////////// Closing CTA Section Start ///////////////////////////////////// */
    /* Uses the same :root variables defined in the hero/products sections (--ivr-primary, --ivr-gradient-*, etc.)
       Include this section alongside those, or copy the :root block here too. */

    .ivr-cta {
        position: relative;
        overflow: hidden;
        padding: 40px 80px;
        background: var(--ivr-gradient-dark);
        font-family: "Segoe UI", Roboto, sans-serif;
        text-align: center;
    }

    .ivr-cta_content {
        position: relative;
        z-index: 10;
        max-width: 780px;
        margin: 0 auto;
    }

    .ivr-cta_content .eyebrow {
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
        margin-bottom: 24px;
    }

    .ivr-cta_content .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        display: inline-block;
    }

    .ivr-cta_content h2 {
        font-size: clamp(28px, 4vw, 44px);
        line-height: 1.2;
        font-weight: 800;
        letter-spacing: -.5px;
        margin: 0 0 20px;
        color: var(--ivr-text-light);
    }

    .ivr-cta_content h2 span {
        background: var(--ivr-gradient-glow);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ivr-cta_content p {
        font-size: 16.5px;
        line-height: 1.75;
        color: rgba(248, 250, 252, 0.72);
        margin: 0 0 32px;
    }

    .ivr-cta_chips {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 36px;
    }

    .ivr-cta_chips span {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        font-size: 13px;
        font-weight: 600;
        color: rgba(248, 250, 252, 0.85);
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.12);
        padding: 7px 14px;
        border-radius: var(--ivr-radius-pill);
    }

    .ivr-cta_chips span i {
        font-size: 12px;
        color: var(--ivr-cyan);
    }

    .ivr-cta_btns {
        display: flex;
        justify-content: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .ivr-cta_btn-primary,
    .ivr-cta_btn-secondary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 15px 30px;
        border-radius: var(--ivr-radius-pill);
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast), background var(--ivr-transition-fast);
    }

    .ivr-cta_btn-primary {
        background: var(--ivr-gradient-primary);
        color: var(--ivr-text-light);
        box-shadow: var(--ivr-glow-purple);
    }

    .ivr-cta_btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--ivr-glow-blue);
    }

    .ivr-cta_btn-secondary {
        background: rgba(255, 255, 255, 0.06);
        border: 1.5px solid rgba(255, 255, 255, 0.22);
        color: var(--ivr-text-light);
    }

    .ivr-cta_btn-secondary:hover {
        transform: translateY(-2px);
        background: rgba(255, 255, 255, 0.12);
    }

    @media (max-width: 900px) {
        .ivr-cta {
            padding: 70px 20px;
        }
    }

    .decor-cta-glow-one {
        position: absolute;
        top: -180px;
        left: 10%;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .2;
        filter: blur(90px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 14s ease-in-out infinite;
    }

    .decor-cta-glow-two {
        position: absolute;
        bottom: -200px;
        right: 8%;
        width: 460px;
        height: 460px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        opacity: .2;
        filter: blur(100px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 17s ease-in-out infinite reverse;
    }

    .decor-cta-ring {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 640px;
        height: 640px;
        transform: translate(-50%, -50%);
        border: 1px dashed rgba(167, 139, 250, 0.15);
        border-radius: 50%;
        z-index: 0;
        pointer-events: none;
        animation: hero-ring-spin 40s linear infinite;
    }

    /* //////////////////////////////////// Closing CTA Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// Closing CTA Section //////////////////////////////////////-->
<section class="ivr-cta" id="cta-section">
    <div class="decor-cta-ring"></div>
    <div class="decor-cta-glow-one"></div>
    <div class="decor-cta-glow-two"></div>

    <div class="ivr-cta_content">
        <span class="eyebrow"><i></i>MAKE THE SWITCH</span>
        <h2>Transform Your Enterprise <span>Communication Infrastructure</span> Today</h2>
        <p>Got a problem with antiquated voice systems affecting customers or revenue goals? Migrate with Kings Digital to a modern cloud IVR — with 24/7 call handling, a scalable experience, integrated intelligent CRM data, and automated self-service processes that will boost your business.</p>

        <div class="ivr-cta_chips">
            <span><i class="fa-solid fa-circle-check"></i>24/7 Call Handling</span>
            <span><i class="fa-solid fa-circle-check"></i>Instantly Scalable</span>
            <span><i class="fa-solid fa-circle-check"></i>CRM-Integrated</span>
            <span><i class="fa-solid fa-circle-check"></i>Automated Self-Service</span>
        </div>

        <div class="ivr-cta_btns">
            <a href="contact.php" class="ivr-cta_btn-primary"><i class="fa-solid fa-rocket"></i> Get Started</a>
            <a href="contact.php" class="ivr-cta_btn-secondary"><i class="fa-solid fa-phone"></i> Talk to Sales</a>
        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Closing CTA Section End ///////////////////////////////////////////-->