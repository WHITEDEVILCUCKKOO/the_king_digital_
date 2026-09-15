<style>
    /* //////////////////////////////////// FAQ Section Start ///////////////////////////////////// */
    /* Uses the same :root variables defined in the hero/products sections (--ivr-primary, --ivr-gradient-*, etc.)
       Include this section alongside those, or copy the :root block here too. */

    .ivr-faq {
        position: relative;
        overflow: hidden;
        padding: 40px 80px;
        background: var(--ivr-bg-light);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .ivr-faq_content {
        position: relative;
        z-index: 10;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ivr-faq_head {
        max-width: 620px;
        margin: 0 0 48px;
    }

    .ivr-faq_head .eyebrow {
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

    .ivr-faq_head .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-faq_head h2 {
        font-size: clamp(28px, 3.4vw, 44px);
        line-height: 1.2;
        font-weight: 800;
        margin: 0 0 14px;
        color: var(--ivr-text-primary);
    }

    .ivr-faq_head p {
        font-size: 16px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    /* ── Layout: accordion + sticky CTA ── */
    .ivr-faq_body {
        display: flex;
        align-items: flex-start;
        gap: 36px;
    }

    .ivr-faq_list {
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
        gap: 14px;
        min-width: 0;
    }

    .ivr-faq-item {
        background: var(--ivr-card);
        border: 1.5px solid var(--ivr-border);
        border-radius: var(--ivr-radius-md);
        overflow: hidden;
        transition: border-color var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast);
    }

    .ivr-faq-item.is-open {
        border-color: rgba(99, 102, 241, .35);
        box-shadow: var(--ivr-shadow-sm);
    }

    .ivr-faq-item--q {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        background: none;
        border: none;
        text-align: left;
        font-family: inherit;
        cursor: pointer;
        padding: 20px 22px;
    }

    .ivr-faq-item--q span {
        font-size: 15.5px;
        font-weight: 700;
        color: var(--ivr-text-primary);
        line-height: 1.5;
    }

    .ivr-faq-item--icon {
        flex: 0 0 auto;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--ivr-bg-light);
        color: var(--ivr-primary-dark);
        font-size: 13px;
        transition: transform var(--ivr-transition-fast), background var(--ivr-transition-fast), color var(--ivr-transition-fast);
    }

    .ivr-faq-item.is-open .ivr-faq-item--icon {
        transform: rotate(45deg);
        background: var(--ivr-gradient-primary);
        color: var(--ivr-text-light);
    }

    .ivr-faq-item--a-wrap {
        display: grid;
        grid-template-rows: 0fr;
        transition: grid-template-rows .3s ease;
    }

    .ivr-faq-item.is-open .ivr-faq-item--a-wrap {
        grid-template-rows: 1fr;
    }

    .ivr-faq-item--a-inner {
        overflow: hidden;
    }

    .ivr-faq-item--a {
        padding: 0 22px 22px;
        font-size: 14.5px;
        line-height: 1.75;
        color: var(--ivr-text-secondary);
    }

    /* ── Sticky expert CTA card ── */
    .ivr-faq_cta {
        flex: 0 0 600px;
        position: sticky;
        top: 32px;
        background: var(--ivr-gradient-dark);
        border-radius: var(--ivr-radius-lg);
        padding: 36px 28px;
        overflow: hidden;
        color: var(--ivr-text-light);
    }

    .ivr-faq_cta::before {
        content: '';
        position: absolute;
        top: -90px;
        right: -90px;
        width: 220px;
        height: 220px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .25;
        filter: blur(50px);
        pointer-events: none;
    }

    .ivr-faq_cta--icon {
        position: relative;
        width: 54px;
        height: 54px;
        border-radius: var(--ivr-radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        background: var(--ivr-gradient-ai);
        box-shadow: var(--ivr-glow-purple);
        margin-bottom: 22px;
    }

    .ivr-faq_cta h3 {
        position: relative;
        font-size: 21px;
        font-weight: 700;
        line-height: 1.3;
        margin: 0 0 12px;
    }

    .ivr-faq_cta p {
        position: relative;
        font-size: 14px;
        line-height: 1.7;
        color: rgba(248, 250, 252, 0.72);
        margin: 0 0 26px;
    }

    .ivr-faq_cta--btn {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 13px 20px;
        border-radius: var(--ivr-radius-pill);
        font-weight: 600;
        font-size: 14.5px;
        text-decoration: none;
        background: var(--ivr-gradient-primary);
        color: var(--ivr-text-light);
        box-shadow: var(--ivr-glow-purple);
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast);
        margin-bottom: 26px;
    }

    .ivr-faq_cta--btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--ivr-glow-blue);
    }

    .ivr-faq_cta--contacts {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 14px;
        border-top: 1px solid rgba(248, 250, 252, 0.14);
        padding-top: 22px;
    }

    .ivr-faq_cta--contact-row {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 13.5px;
        color: rgba(248, 250, 252, 0.85);
        text-decoration: none;
    }

    .ivr-faq_cta--contact-row i {
        flex: 0 0 auto;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(248, 250, 252, 0.08);
        font-size: 13px;
        color: var(--ivr-cyan);
    }

    @media (max-width: 1000px) {
        .ivr-faq_body {
            flex-direction: column;
        }

        .ivr-faq_cta {
            position: static;
            flex: 1 1 auto;
            width: 100%;
        }
    }

    @media (max-width: 900px) {
        .ivr-faq {
            padding: 60px 20px;
        }
    }

    .decor-faq-glow {
        position: absolute;
        bottom: -170px;
        left: -140px;
        width: 440px;
        height: 440px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .12;
        filter: blur(75px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 15s ease-in-out infinite;
    }

    .decor-faq-dots {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 200px;
        height: 190px;
        background-image: radial-gradient(circle, var(--ivr-primary) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at top right, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at top right, black 0%, black 25%, transparent 72%);
        opacity: .2;
        z-index: 0;
        pointer-events: none;
    }

    /* //////////////////////////////////// FAQ Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// FAQ Section //////////////////////////////////////-->
<section class="ivr-faq" id="faq-section">
    <div class="decor-faq-glow"></div>
    <div class="decor-faq-dots"></div>

    <div class="ivr-faq_content">
        <div class="ivr-faq_head">
            <span class="eyebrow"><i></i>GOT QUESTIONS?</span>
            <h2>Frequently Asked Questions</h2>
            <p>Everything you need to know about deploying and running a cloud IVR system.</p>
        </div>

        <div class="ivr-faq_body">
            <div class="ivr-faq_list" id="ivrFaqList">

                <div class="ivr-faq-item is-open">
                    <button type="button" class="ivr-faq-item--q">
                        <span>Q1. What is the difference between Single-Level IVR and Multi-Level IVR?</span>
                        <span class="ivr-faq-item--icon"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="ivr-faq-item--a-wrap">
                        <div class="ivr-faq-item--a-inner">
                            <div class="ivr-faq-item--a">Single-Level IVR provides a single simple menu selection (e.g., "Press 1 for Sales, Press 2 for Support") that routes the caller directly to a destination. Multi-Level IVR features nested sub-menus (e.g., "Press 2 for Support → Press 1 for Technical Support → Press 2 for Software Billing"), allowing businesses to categorize complex queries across detailed departments.</div>
                        </div>
                    </div>
                </div>

                <div class="ivr-faq-item">
                    <button type="button" class="ivr-faq-item--q">
                        <span>Q2. Can an IVR service handle multiple incoming calls simultaneously?</span>
                        <span class="ivr-faq-item--icon"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="ivr-faq-item--a-wrap">
                        <div class="ivr-faq-item--a-inner">
                            <div class="ivr-faq-item--a">Yes. A cloud-hosted IVR platform utilizes virtual channel infrastructure capable of receiving hundreds or thousands of calls at the exact same time on a single virtual number, completely eliminating busy signals for callers.</div>
                        </div>
                    </div>
                </div>

                <div class="ivr-faq-item">
                    <button type="button" class="ivr-faq-item--q">
                        <span>Q3. Do I need specialized hardware or landlines to run a Cloud IVR system?</span>
                        <span class="ivr-faq-item--icon"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="ivr-faq-item--a-wrap">
                        <div class="ivr-faq-item--a-inner">
                            <div class="ivr-faq-item--a">No hardware installation is required. Cloud IVR platforms run entirely on remote cloud servers. Calls can be answered by your agents using existing mobile phones, laptops, softphones, or IP desk phones via an internet connection.</div>
                        </div>
                    </div>
                </div>

                <div class="ivr-faq-item">
                    <button type="button" class="ivr-faq-item--q">
                        <span>Q4. How does CRM integration work with an IVR system?</span>
                        <span class="ivr-faq-item--icon"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="ivr-faq-item--a-wrap">
                        <div class="ivr-faq-item--a-inner">
                            <div class="ivr-faq-item--a">The IVR platform connects to your CRM database via secure APIs. When a customer calls, the system reads their caller ID, fetches their customer profile, and displays their order history or ticket details directly on the answering agent's screen in real time.</div>
                        </div>
                    </div>
                </div>

                <div class="ivr-faq-item">
                    <button type="button" class="ivr-faq-item--q">
                        <span>Q5. What happens to incoming calls outside of operational business hours?</span>
                        <span class="ivr-faq-item--icon"><i class="fa-solid fa-plus"></i></span>
                    </button>
                    <div class="ivr-faq-item--a-wrap">
                        <div class="ivr-faq-item--a-inner">
                            <div class="ivr-faq-item--a">You can configure custom after-hours call flows. The IVR can inform callers of your standard operating hours, offer automated self-service answers, collect voice messages, or route urgent emergency calls to dedicated mobile numbers.</div>
                        </div>
                    </div>
                </div>

            </div>

            <aside class="ivr-faq_cta">
                <div class="ivr-faq_cta--icon"><i class="fa-solid fa-headset"></i></div>
                <h3>Still Have Questions?</h3>
                <p>Talk to our IVR specialists and get a tailored recommendation for your call volume, use case, and budget — no obligation.</p>
                <a href="contact.php" class="ivr-faq_cta--btn"><i class="fa-solid fa-comments"></i> Talk to an Expert</a>
                <div class="ivr-faq_cta--contacts">
                    <a href="tel:+911800000000" class="ivr-faq_cta--contact-row">
                        <i class="fa-solid fa-phone"></i> +91 1800-000-000
                    </a>
                    <a href="mailto:support@example.com" class="ivr-faq_cta--contact-row">
                        <i class="fa-solid fa-envelope"></i> support@example.com
                    </a>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// FAQ Section End ///////////////////////////////////////////-->

<script>
    (function() {
        "use strict";

        var list = document.getElementById('ivrFaqList');
        if (!list) return;

        var items = list.querySelectorAll('.ivr-faq-item');

        items.forEach(function(item) {
            var q = item.querySelector('.ivr-faq-item--q');
            q.addEventListener('click', function() {
                var wasOpen = item.classList.contains('is-open');
                items.forEach(function(other) {
                    other.classList.remove('is-open');
                });
                if (!wasOpen) {
                    item.classList.add('is-open');
                }
            });
        });
    })();
</script>