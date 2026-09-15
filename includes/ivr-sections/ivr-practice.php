<style>
    /* //////////////////////////////////// Best Practices Section Start ///////////////////////////////////// */
    /* Uses the same :root variables defined in the hero/products sections (--ivr-primary, --ivr-gradient-*, etc.)
       Include this section alongside those, or copy the :root block here too. */

    .ivr-practices {
        position: relative;
        overflow: hidden;
        padding: 40px 80px;
        background: var(--ivr-bg);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .ivr-practices_content {
        position: relative;
        z-index: 10;
        max-width: 900px;
        margin: 0 auto;
    }

    .ivr-practices_head {
        text-align: center;
        margin: 0 auto 56px;
    }

    .ivr-practices_head .eyebrow {
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

    .ivr-practices_head .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-practices_head h2 {
        font-size: clamp(28px, 3.4vw, 44px);
        line-height: 1.2;
        font-weight: 800;
        margin: 0 0 16px;
        color: var(--ivr-text-primary);
    }

    .ivr-practices_head p {
        font-size: 16px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    .ivr-practices_list {
        display: flex;
        flex-direction: column;
    }

    .ivr-practice-row {
        position: relative;
        display: flex;
        align-items: flex-start;
        gap: 22px;
        padding: 26px 20px 26px 16px;
        border-bottom: 1px solid var(--ivr-border);
        border-left: 3px solid transparent;
        transition: border-color var(--ivr-transition-fast), background var(--ivr-transition-fast), padding-left var(--ivr-transition-fast);
    }

    .ivr-practice-row:first-child {
        border-top: 1px solid var(--ivr-border);
    }

    .ivr-practice-row:hover {
        border-left-color: var(--ivr-primary);
        background: var(--ivr-card);
        padding-left: 22px;
    }

    .ivr-practice-row--icon {
        flex: 0 0 auto;
        width: 48px;
        height: 48px;
        border-radius: var(--ivr-radius-md);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
        background: var(--ivr-bg-light);
        color: var(--ivr-primary-dark);
        border: 1px solid var(--ivr-border-purple);
    }

    .ivr-practice-row--text h3 {
        font-size: 16.5px;
        font-weight: 700;
        margin: 0 0 6px;
        color: var(--ivr-text-primary);
    }

    .ivr-practice-row--text p {
        font-size: 14px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    @media (max-width: 900px) {
        .ivr-practices {
            padding: 60px 20px;
        }

        .ivr-practice-row {
            gap: 16px;
            padding: 22px 12px;
        }

        .ivr-practice-row:hover {
            padding-left: 16px;
        }
    }

    .decor-practices-glow {
        position: absolute;
        top: -160px;
        right: -140px;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .12;
        filter: blur(75px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 14s ease-in-out infinite;
    }

    .decor-practices-dots {
        position: absolute;
        bottom: -10px;
        left: -10px;
        width: 200px;
        height: 190px;
        background-image: radial-gradient(circle, var(--ivr-blue) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        opacity: .2;
        z-index: 0;
        pointer-events: none;
    }

    /* //////////////////////////////////// Best Practices Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// Best Practices Section //////////////////////////////////////-->
<section class="ivr-practices" id="practices-section">
    <div class="decor-practices-glow"></div>
    <div class="decor-practices-dots"></div>

    <div class="ivr-practices_content">
        <div class="ivr-practices_head">
            <span class="eyebrow"><i></i>DESIGN PRINCIPLES</span>
            <h2>Best Practices for Designing an Effective IVR Menu</h2>
            <p>To minimize caller frustration and boost self-service acceptance, apply these IVR UX design principles that have proven effective time and again.</p>
        </div>

        <div class="ivr-practices_list">

            <div class="ivr-practice-row">
                <div class="ivr-practice-row--icon"><i class="fa-solid fa-list-ol"></i></div>
                <div class="ivr-practice-row--text">
                    <h3>Keep Options to a Minimum</h3>
                    <p>Limit basic menu choices to no more than four or five. Long lists cause confusion among callers and lead to more dropped calls.</p>
                </div>
            </div>

            <div class="ivr-practice-row">
                <div class="ivr-practice-row--icon"><i class="fa-solid fa-arrow-up-wide-short"></i></div>
                <div class="ivr-practice-row--text">
                    <h3>Put Frequently Used Options First</h3>
                    <p>Order menu options according to call statistics, with the most-requested option — like "Order Status" — presented first.</p>
                </div>
            </div>

            <div class="ivr-practice-row">
                <div class="ivr-practice-row--icon"><i class="fa-solid fa-headset"></i></div>
                <div class="ivr-practice-row--text">
                    <h3>Include a Live Agent Option</h3>
                    <p>Always allow customers to reach a real agent by pressing a single button, at any point in the menu.</p>
                </div>
            </div>

            <div class="ivr-practice-row">
                <div class="ivr-practice-row--icon"><i class="fa-solid fa-wave-square"></i></div>
                <div class="ivr-practice-row--text">
                    <h3>Stay Consistent with Voice</h3>
                    <p>Use a unified voice across voice prompts and live updates so the experience feels coherent from start to finish.</p>
                </div>
            </div>

            <div class="ivr-practice-row">
                <div class="ivr-practice-row--icon"><i class="fa-solid fa-mobile-screen"></i></div>
                <div class="ivr-practice-row--text">
                    <h3>Be Mobile Friendly</h3>
                    <p>Make sure the technology is in place for instant reply and SMS responses to customers calling from mobile phones.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Best Practices Section End ///////////////////////////////////////////-->