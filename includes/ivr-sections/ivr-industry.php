<style>
    /* //////////////////////////////////// Industry Applications Section Start ///////////////////////////////////// */
    /* Uses the same :root variables defined in the hero/products sections (--ivr-primary, --ivr-gradient-*, etc.)
       Include this section alongside those, or copy the :root block here too. */

    .ivr-industries {
        position: relative;
        overflow: hidden;
        padding: 40px 80px;
        background: var(--ivr-bg-light);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .ivr-industries_content {
        position: relative;
        z-index: 10;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ivr-industries_head {
        text-align: center;
        max-width: 820px;
        margin: 0 auto 56px;
    }

    .ivr-industries_head .eyebrow {
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

    .ivr-industries_head .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-industries_head h2 {
        font-size: clamp(28px, 3.4vw, 44px);
        line-height: 1.2;
        font-weight: 800;
        margin: 0 0 16px;
        color: var(--ivr-text-primary);
    }

    .ivr-industries_head p {
        font-size: 16px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    /* ── Layout: nav + panel ── */
    .ivr-industries_body {
        display: flex;
        gap: 32px;
        align-items: flex-start;
    }

    .ivr-industries_nav {
        flex: 0 0 300px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .ivr-ind-tab {
        display: flex;
        align-items: center;
        gap: 14px;
        width: 100%;
        text-align: left;
        background: var(--ivr-card);
        border: 1.5px solid var(--ivr-border);
        border-radius: var(--ivr-radius-md);
        padding: 16px 18px;
        cursor: pointer;
        font-family: inherit;
        transition: border-color var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast), background var(--ivr-transition-fast), transform var(--ivr-transition-fast);
    }

    .ivr-ind-tab:hover {
        transform: translateX(4px);
        box-shadow: var(--ivr-shadow-sm);
    }

    .ivr-ind-tab--icon {
        flex: 0 0 auto;
        width: 40px;
        height: 40px;
        border-radius: var(--ivr-radius-sm);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        background: var(--ivr-bg-light);
        color: var(--ivr-primary-dark);
        transition: background var(--ivr-transition-fast), color var(--ivr-transition-fast);
    }

    .ivr-ind-tab--label {
        font-size: 14.5px;
        font-weight: 600;
        color: var(--ivr-text-primary);
        line-height: 1.35;
    }

    .ivr-ind-tab.is-active {
        border-color: transparent;
        background: var(--ivr-gradient-primary);
        box-shadow: var(--ivr-glow-purple);
    }

    .ivr-ind-tab.is-active .ivr-ind-tab--icon {
        background: rgba(255, 255, 255, 0.18);
        color: var(--ivr-text-light);
    }

    .ivr-ind-tab.is-active .ivr-ind-tab--label {
        color: var(--ivr-text-light);
    }

    .ivr-industries_panels {
        flex: 1 1 auto;
        position: relative;
        min-height: 340px;
    }

    .ivr-ind-panel {
        display: none;
        background: var(--ivr-card);
        border: 1.5px solid var(--ivr-border);
        border-radius: var(--ivr-radius-lg);
        padding: 38px 40px;
        box-shadow: var(--ivr-shadow-sm);
        opacity: 0;
        transform: translateY(10px);
        animation: ivr-panel-in .35s ease forwards;
    }

    .ivr-ind-panel.is-active {
        display: block;
    }

    @keyframes ivr-panel-in {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .ivr-ind-panel--icon {
        width: 54px;
        height: 54px;
        border-radius: var(--ivr-radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        background: var(--ivr-gradient-ai);
        color: var(--ivr-text-light);
        box-shadow: var(--ivr-glow-purple);
        margin-bottom: 20px;
    }

    .ivr-ind-panel h3 {
        font-size: 22px;
        font-weight: 700;
        margin: 0 0 22px;
        color: var(--ivr-text-primary);
    }

    .ivr-ind-panel_list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .ivr-ind-panel_list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 15px;
        line-height: 1.65;
        color: var(--ivr-text-secondary);
    }

    .ivr-ind-panel_list li i {
        flex: 0 0 auto;
        margin-top: 4px;
        font-size: 14px;
        color: var(--ivr-blue);
    }

    @media (max-width: 900px) {
        .ivr-industries {
            padding: 60px 20px;
        }

        .ivr-industries_body {
            flex-direction: column;
        }

        .ivr-industries_nav {
            flex: 0 0 auto;
            flex-direction: row;
            overflow-x: auto;
            width: 100%;
            padding-bottom: 6px;
            -webkit-overflow-scrolling: touch;
        }

        .ivr-ind-tab {
            flex: 0 0 auto;
            white-space: nowrap;
        }

        .ivr-ind-tab:hover {
            transform: none;
        }

        .ivr-ind-panel {
            padding: 28px 24px;
        }
    }

    .decor-industries-glow {
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

    .decor-industries-dots {
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

    /* //////////////////////////////////// Industry Applications Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// Industry Applications Section //////////////////////////////////////-->
<section class="ivr-industries" id="industries-section">
    <div class="decor-industries-glow"></div>
    <div class="decor-industries-dots"></div>

    <div class="ivr-industries_content">
        <div class="ivr-industries_head">
            <span class="eyebrow"><i></i>BUILT FOR EVERY SECTOR</span>
            <h2>Industry Applications: How Different Sectors Use IVR Services</h2>
            <p>Custom IVR workflows adapt to the unique customer engagement needs of diverse business sectors.</p>
        </div>

        <div class="ivr-industries_body">
            <div class="ivr-industries_nav" id="ivrIndNav">
                <button type="button" class="ivr-ind-tab is-active" data-target="ivr-ind-ecommerce">
                    <span class="ivr-ind-tab--icon"><i class="fa-solid fa-cart-shopping"></i></span>
                    <span class="ivr-ind-tab--label">E-Commerce & Retail Outlets</span>
                </button>
                <button type="button" class="ivr-ind-tab" data-target="ivr-ind-bfsi">
                    <span class="ivr-ind-tab--icon"><i class="fa-solid fa-building-columns"></i></span>
                    <span class="ivr-ind-tab--label">Banking, Financial Services & Insurance</span>
                </button>
                <button type="button" class="ivr-ind-tab" data-target="ivr-ind-healthcare">
                    <span class="ivr-ind-tab--icon"><i class="fa-solid fa-notes-medical"></i></span>
                    <span class="ivr-ind-tab--label">Healthcare Facilities & Diagnostic Labs</span>
                </button>
                <button type="button" class="ivr-ind-tab" data-target="ivr-ind-realestate">
                    <span class="ivr-ind-tab--icon"><i class="fa-solid fa-city"></i></span>
                    <span class="ivr-ind-tab--label">Real Estate & Property Developers</span>
                </button>
                <button type="button" class="ivr-ind-tab" data-target="ivr-ind-education">
                    <span class="ivr-ind-tab--icon"><i class="fa-solid fa-graduation-cap"></i></span>
                    <span class="ivr-ind-tab--label">Education Institutes & EdTech Platforms</span>
                </button>
            </div>

            <div class="ivr-industries_panels" id="ivrIndPanels">
                <div class="ivr-ind-panel is-active" id="ivr-ind-ecommerce">
                    <div class="ivr-ind-panel--icon"><i class="fa-solid fa-cart-shopping"></i></div>
                    <h3>E-Commerce & Retail Outlets</h3>
                    <ul class="ivr-ind-panel_list">
                        <li><i class="fa-solid fa-circle-check"></i>Automated order status updates, package delivery tracking, and payment confirmation checks.</li>
                        <li><i class="fa-solid fa-circle-check"></i>Automated abandoned cart phone reminders featuring single-tap agent connections.</li>
                        <li><i class="fa-solid fa-circle-check"></i>Multi-lingual customer support routing for exchange, return, and refund queries.</li>
                    </ul>
                </div>

                <div class="ivr-ind-panel" id="ivr-ind-bfsi">
                    <div class="ivr-ind-panel--icon"><i class="fa-solid fa-building-columns"></i></div>
                    <h3>Banking, Financial Services, and Insurance (BFSI)</h3>
                    <ul class="ivr-ind-panel_list">
                        <li><i class="fa-solid fa-circle-check"></i>Instant credit/debit card activation, PIN generation, and account balance queries over secure encrypted IVR pathways.</li>
                        <li><i class="fa-solid fa-circle-check"></i>Sub-second transmission of One-Time Passwords (OTPs) and account security alerts.</li>
                        <li><i class="fa-solid fa-circle-check"></i>Priority routing for high-net-worth clients or urgent fraud reporting lines.</li>
                    </ul>
                </div>

                <div class="ivr-ind-panel" id="ivr-ind-healthcare">
                    <div class="ivr-ind-panel--icon"><i class="fa-solid fa-notes-medical"></i></div>
                    <h3>Healthcare Facilities & Diagnostic Labs</h3>
                    <ul class="ivr-ind-panel_list">
                        <li><i class="fa-solid fa-circle-check"></i>Automated patient appointment scheduling, doctor availability checks, and consultation reminders.</li>
                        <li><i class="fa-solid fa-circle-check"></i>Secure delivery of diagnostic lab test results via automated SMS/voice download links.</li>
                        <li><i class="fa-solid fa-circle-check"></i>Immediate emergency call redirection to dedicated on-call medical personnel.</li>
                    </ul>
                </div>

                <div class="ivr-ind-panel" id="ivr-ind-realestate">
                    <div class="ivr-ind-panel--icon"><i class="fa-solid fa-city"></i></div>
                    <h3>Real Estate & Property Developers</h3>
                    <ul class="ivr-ind-panel_list">
                        <li><i class="fa-solid fa-circle-check"></i>Instant virtual lead capture from digital advertisements and signboards.</li>
                        <li><i class="fa-solid fa-circle-check"></i>Automated dispatch of project floor plans, digital brochures, and pricing lists via WhatsApp or SMS integration.</li>
                        <li><i class="fa-solid fa-circle-check"></i>Automated scheduling of site visits with assigned sales representatives based on property location.</li>
                    </ul>
                </div>

                <div class="ivr-ind-panel" id="ivr-ind-education">
                    <div class="ivr-ind-panel--icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h3>Education Institutes & EdTech Platforms</h3>
                    <ul class="ivr-ind-panel_list">
                        <li><i class="fa-solid fa-circle-check"></i>Streamlined prospective student intake, program selection guidance, and admission status inquiries.</li>
                        <li><i class="fa-solid fa-circle-check"></i>Automated notifications for fee due dates, exam schedules, and campus events.</li>
                        <li><i class="fa-solid fa-circle-check"></i>Parent-teacher communication portals with multi-language voice notifications.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Industry Applications Section End ///////////////////////////////////////////-->

<script>
    (function() {
        "use strict";

        var nav = document.getElementById('ivrIndNav');
        var panelsWrap = document.getElementById('ivrIndPanels');
        if (!nav || !panelsWrap) return;

        var tabs = nav.querySelectorAll('.ivr-ind-tab');
        var panels = panelsWrap.querySelectorAll('.ivr-ind-panel');

        function activate(targetId) {
            tabs.forEach(function(tab) {
                tab.classList.toggle('is-active', tab.getAttribute('data-target') === targetId);
            });
            panels.forEach(function(panel) {
                if (panel.id === targetId) {
                    panel.classList.add('is-active');
                    // restart the fade-in animation each time it's shown
                    panel.style.animation = 'none';
                    void panel.offsetWidth; // reflow to restart animation
                    panel.style.animation = '';
                } else {
                    panel.classList.remove('is-active');
                }
            });
        }

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                activate(tab.getAttribute('data-target'));
            });
        });
    })();
</script>