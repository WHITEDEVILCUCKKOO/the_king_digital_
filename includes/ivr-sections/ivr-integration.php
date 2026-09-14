<style>
    /* //////////////////////////////////// Integrations / ROI Section Start ///////////////////////////////////// */
    /* Uses the same :root variables defined in the hero/products sections (--ivr-primary, --ivr-gradient-*, etc.)
       Include this section alongside those, or copy the :root block here too. */

    .ivr-integrations {
        position: relative;
        overflow: hidden;
        padding: 40px 80px;
        background: var(--ivr-bg);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .ivr-integrations_content {
        position: relative;
        z-index: 10;
        max-width: 1100px;
        margin: 0 auto;
    }

    .ivr-integrations_head {
        text-align: center;
        max-width: 720px;
        margin: 0 auto 72px;
    }

    .ivr-integrations_head .eyebrow {
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

    .ivr-integrations_head .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-integrations_head h2 {
        font-size: clamp(28px, 3.4vw, 40px);
        line-height: 1.2;
        font-weight: 700;
        margin: 0 0 16px;
        color: var(--ivr-text-primary);
    }

    .ivr-integrations_head p {
        font-size: 16px;
        line-height: 1.7;
        color: var(--ivr-text-secondary);
        margin: 0;
    }

    /* ── Vertical spine connecting the three integration rows ── */
    .ivr-integrations_list {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 56px;
    }

    .ivr-integrations_list::before {
        content: '';
        position: absolute;
        top: 34px;
        bottom: 34px;
        left: 50%;
        width: 2px;
        transform: translateX(-50%);
        background: repeating-linear-gradient(to bottom, var(--ivr-border-purple) 0 8px, transparent 8px 16px);
        z-index: 0;
    }

    .ivr-integration-row {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        gap: 40px;
    }

    .ivr-integration-row.reverse {
        flex-direction: row-reverse;
    }

    .ivr-integration-row--visual {
        flex: 0 0 auto;
    }

    .ivr-integration-row--icon {
        width: 92px;
        height: 92px;
        border-radius: var(--ivr-radius-xl);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 34px;
        color: var(--ivr-text-light);
        background: var(--ivr-gradient-ai);
        box-shadow: var(--ivr-glow-purple);
        border: 4px solid var(--ivr-bg-light);
    }

    .ivr-integration-row--card {
        flex: 1 1 auto;
        background: var(--ivr-card);
        border: 1.5px solid var(--ivr-border);
        border-radius: var(--ivr-radius-lg);
        padding: 28px 32px;
        box-shadow: var(--ivr-shadow-sm);
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast);
    }

    .ivr-integration-row--card:hover {
        transform: translateY(-4px);
        box-shadow: var(--ivr-shadow-md);
    }

    .ivr-integration-row--card .tag-top {
        display: inline-block;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .06em;
        text-transform: uppercase;
        color: var(--ivr-primary);
        margin-bottom: 10px;
    }

    .ivr-integration-row--card h3 {
        font-size: 19px;
        font-weight: 700;
        margin: 0 0 12px;
        color: var(--ivr-text-primary);
    }

    .ivr-integration-row--card p {
        font-size: 14.5px;
        line-height: 1.75;
        color: var(--ivr-text-secondary);
        margin: 0 0 16px;
    }

    .ivr-integration-row--card .ivr-tags {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
    }

    .ivr-integration-row--card .stag {
        font-size: 11px;
        font-weight: 600;
        color: var(--ivr-text-muted);
        background: var(--ivr-bg);
        padding: 3px 10px;
        border-radius: 20px;
        border: 1px solid var(--ivr-border);
    }

    @media (max-width: 860px) {
        .ivr-integrations {
            padding: 64px 20px;
        }

        .ivr-integrations_list::before {
            left: 45px;
        }

        .ivr-integration-row,
        .ivr-integration-row.reverse {
            flex-direction: row;
            align-items: flex-start;
            gap: 24px;
        }

        .ivr-integration-row--icon {
            width: 64px;
            height: 64px;
            font-size: 24px;
            border-width: 3px;
        }

        .ivr-integration-row--card {
            padding: 22px 20px;
        }
    }

    .decor-integrations-glow {
        position: absolute;
        top: -170px;
        right: -150px;
        width: 460px;
        height: 460px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .14;
        filter: blur(75px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 15s ease-in-out infinite;
    }

    .decor-integrations-grid {
        position: absolute;
        bottom: -20px;
        left: -20px;
        width: 220px;
        height: 200px;
        background-image: radial-gradient(circle, var(--ivr-primary) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        opacity: .2;
        z-index: 0;
        pointer-events: none;
    }

    /* //////////////////////////////////// Integrations / ROI Section End ///////////////////////////////////// */
</style>

<!-- ////////////////////////////////////////////////// Integrations / ROI Section //////////////////////////////////////-->
<section class="ivr-integrations" id="integrations-section">
    <div class="decor-integrations-glow"></div>
    <div class="decor-integrations-grid"></div>

    <div class="ivr-integrations_content">
        <div class="ivr-integrations_head">
            <span class="eyebrow"><i></i>CONNECT YOUR STACK</span>
            <h2>Maximizing Business ROI: IVR Integration Capabilities</h2>
            <p>An IVR system yields maximum strategic value when connected directly to your existing digital technology ecosystem.</p>
        </div>

        <div class="ivr-integrations_list">

            <div class="ivr-integration-row">
                <div class="ivr-integration-row--visual">
                    <div class="ivr-integration-row--icon"><i class="fa-solid fa-address-card"></i></div>
                </div>
                <div class="ivr-integration-row--card">
                    <span class="tag-top">Contextual Support</span>
                    <h3>IVR with CRM Integration</h3>
                    <p>Joining your telephony solution with CRM software like Salesforce, Zoho, or HubSpot creates a contextual support environment. The IVR checks the caller's number against your database, retrieves purchase history, open support tickets, and prior interaction logs — showing a screen pop to the agent before the call is even accepted. Customers never have to repeat their personal data, saving time and boosting satisfaction.</p>
                    <div class="ivr-tags">
                        <span class="stag">Salesforce</span>
                        <span class="stag">Zoho</span>
                        <span class="stag">HubSpot</span>
                        <span class="stag">Screen Pop</span>
                    </div>
                </div>
            </div>

            <div class="ivr-integration-row reverse">
                <div class="ivr-integration-row--visual">
                    <div class="ivr-integration-row--icon"><i class="fa-brands fa-whatsapp"></i></div>
                </div>
                <div class="ivr-integration-row--card">
                    <span class="tag-top">Omnichannel Handoff</span>
                    <h3>IVR with WhatsApp Integration</h3>
                    <p>Integrate standard voice systems with contemporary instant messaging platforms. When call traffic increases or customers prefer non-voice communication, the IVR menu can offer: "Press 1 to resume the conversation instantly on WhatsApp." Choosing this option triggers an automated API message that opens a WhatsApp chat, letting the customer receive messages, payment options, or live chat support immediately.</p>
                    <div class="ivr-tags">
                        <span class="stag">WhatsApp Business API</span>
                        <span class="stag">Automated Handoff</span>
                        <span class="stag">Non-Voice Support</span>
                    </div>
                </div>
            </div>

            <div class="ivr-integration-row">
                <div class="ivr-integration-row--visual">
                    <div class="ivr-integration-row--icon"><i class="fa-solid fa-tower-broadcast"></i></div>
                </div>
                <div class="ivr-integration-row--card">
                    <span class="tag-top">Outbound Engagement</span>
                    <h3>Automated Outbound IVR (Voice Broadcasting)</h3>
                    <p>IVR technology isn't just for receiving calls. Outbound IVR systems let companies send thousands of automated voice calls to communicate information to customers — payment reminders, event or candidate information, political campaigns, and customer satisfaction (CSAT) surveys — all without manual dialing.</p>
                    <div class="ivr-tags">
                        <span class="stag">Payment Reminders</span>
                        <span class="stag">Event Alerts</span>
                        <span class="stag">Political Campaigns</span>
                        <span class="stag">CSAT Surveys</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Integrations / ROI Section End ///////////////////////////////////////////-->