<style>
    :root {
        /* PRIMARY */
        --color-primary: #25D366;
        --color-primary-light: #5BE58A;
        --color-primary-dark: #1DA851;

        /* SECONDARY / API */
        --color-secondary: #128C7E;
        --color-secondary-light: #25A99A;
        --color-secondary-dark: #075E54;

        /* BACKGROUNDS */
        --color-bg: #FFFFFF;
        --color-bg-soft: #F3FBF7;
        --color-bg-muted: #E8F5EF;

        --color-bg-dark: #061B16;
        --color-bg-dark-soft: #0B2922;

        /* TEXT */
        --color-text: #12231D;
        --color-text-secondary: #53665F;
        --color-text-muted: #82928C;

        --color-text-light: #FFFFFF;
        --color-text-light-secondary: #C7D8D2;

        /* BORDERS */
        --color-border: #D9EAE3;
        --color-border-dark: #25443B;

        /* GRADIENTS */
        --gradient-primary:
            linear-gradient(135deg,
                #1DA851 0%,
                #25D366 55%,
                #5BE58A 100%);

        --gradient-primary-dark:
            linear-gradient(135deg,
                #075E54 0%,
                #128C7E 55%,
                #1DA851 100%);

        --gradient-secondary:
            linear-gradient(135deg,
                #075E54 0%,
                #128C7E 50%,
                #25A99A 100%);

        --gradient-secondary-dark:
            linear-gradient(135deg,
                #043F39 0%,
                #075E54 100%);

        --gradient-brand:
            linear-gradient(135deg,
                #075E54 0%,
                #128C7E 35%,
                #25D366 75%,
                #5BE58A 100%);

        --gradient-brand-reverse:
            linear-gradient(135deg,
                #5BE58A 0%,
                #25D366 30%,
                #128C7E 70%,
                #075E54 100%);

        /* GLOW */
        --gradient-glow:
            radial-gradient(circle,
                rgba(37, 211, 102, 0.20) 0%,
                rgba(37, 211, 102, 0) 70%);

        --gradient-glow-secondary:
            radial-gradient(circle,
                rgba(18, 140, 126, 0.20) 0%,
                rgba(18, 140, 126, 0) 70%);

        /* MESSAGE */
        --gradient-message:
            linear-gradient(135deg,
                #E8FFF1 0%,
                #D7F9E5 100%);

        /* SHADOWS */
        --shadow-sm:
            0 2px 8px rgba(6, 27, 22, 0.06);

        --shadow-md:
            0 8px 24px rgba(6, 27, 22, 0.10);

        --shadow-lg:
            0 16px 40px rgba(6, 27, 22, 0.14);

        --shadow-green:
            0 10px 30px rgba(37, 211, 102, 0.20);

        --shadow-green-strong:
            0 12px 35px rgba(37, 211, 102, 0.28);

        --shadow-teal:
            0 10px 30px rgba(18, 140, 126, 0.18);

        /* RADIUS */
        --radius-sm: 6px;
        --radius-md: 10px;
        --radius-lg: 16px;
        --radius-xl: 24px;
        --radius-full: 999px;

        /* TRANSITIONS */
        --transition-fast: 150ms ease;
        --transition-normal: 250ms ease;
        --transition-slow: 400ms ease;

        --wa-bg: var(--color-bg);
        --wa-bg-soft: var(--color-bg-soft);

        --wa-green: var(--color-primary);
        --wa-green-soft: var(--color-bg-muted);
        --wa-green-pale: var(--color-primary-light);
        --wa-green-light: var(--color-primary-light);
        --wa-green-dark: var(--color-secondary-dark);

        --wa-blue: var(--color-secondary);
        --wa-blue-light: var(--color-primary-light);
        --wa-blue-pale: var(--color-primary-light);

        --wa-navy: var(--color-bg-dark);

        --wa-text-primary: var(--color-text);
        --wa-text-secondary: var(--color-text-secondary);
        --wa-text-muted: var(--color-text-muted);

        --wa-border: var(--color-border);

        --wa-gradient: var(--gradient-primary-dark);
        --wa-gradient-soft: var(--gradient-glow);

        --wa-radius-lg: var(--radius-lg);
        --wa-shadow-green: var(--shadow-green);
    }

    .whatsappapi-faq {
        position: relative;
        padding: 40px 0;
        background: var(--wa-bg);
    }

    .whatsappapi-faq .container {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* ---------- Header ---------- */

    .whatsappapi-faq_header {
        max-width: 640px;
        margin: 0 auto 64px;
        text-align: center;
    }

    .whatsappapi-faq .whatsappapi-section_badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 18px 9px 16px;
        background: var(--wa-green-soft);
        color: var(--wa-green-dark);
        font-size: 13px;
        font-weight: 600;
        border-radius: 18px 18px 4px 18px;
        margin-bottom: 22px;
    }

    .whatsappapi-faq .whatsappapi-section_badge i {
        font-size: 12px;
    }

    .whatsappapi-faq_title {
        font-weight: 800 !important;
        font-size: clamp(30px, 3.6vw, 40px);
        line-height: 1.25;
        letter-spacing: -0.4px;
        color: var(--wa-text-primary);
        margin-bottom: 18px;
    }

    .whatsappapi-faq_title span {
        display: block;
        background: var(--wa-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappapi-faq_description {
        font-size: 16px;
        line-height: 1.7;
        color: var(--wa-text-secondary);
    }

    /* ---------- Wrapper ---------- */

    .whatsappapi-faq_wrapper {
        display: grid;
        grid-template-columns: 1.5fr 1fr;
        gap: 40px;
        align-items: start;
    }

    /* ---------- FAQ list = chat exchange ---------- */

    .whatsappapi-faq_list {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .whatsappapi-faq_item {
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.45s ease, transform 0.45s ease;
        transition-delay: var(--d, 0s);
    }

    .whatsappapi-faq_list.is-visible .whatsappapi-faq_item {
        opacity: 1;
        transform: translateY(0);
    }

    .whatsappapi-faq_item:nth-child(1) {
        --d: 0.02s;
    }

    .whatsappapi-faq_item:nth-child(2) {
        --d: 0.08s;
    }

    .whatsappapi-faq_item:nth-child(3) {
        --d: 0.14s;
    }

    .whatsappapi-faq_item:nth-child(4) {
        --d: 0.2s;
    }

    .whatsappapi-faq_item:nth-child(5) {
        --d: 0.26s;
    }

    .whatsappapi-faq_item:nth-child(6) {
        --d: 0.32s;
    }

    .whatsappapi-faq_item:nth-child(7) {
        --d: 0.38s;
    }

    .whatsappapi-faq_item:nth-child(8) {
        --d: 0.44s;
    }

    /* question bubble — incoming */

    .whatsappapi-faq_question {
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100%;
        max-width: 92%;
        padding: 13px 14px 13px 12px;
        background: var(--wa-bg-soft);
        border: 1px solid var(--wa-border);
        border-radius: 4px 16px 16px 16px;
        cursor: pointer;
        text-align: left;
        font: inherit;
        transition: border-color 0.2s ease, background 0.2s ease;
    }

    .whatsappapi-faq_item.active .whatsappapi-faq_question {
        background: var(--wa-bg);
        border-color: var(--wa-blue-pale);
    }

    .whatsappapi-faq_number {
        width: 30px;
        height: 30px;
        border-radius: 9px;
        background: var(--wa-navy);
        color: var(--color-text-light);
        font-size: 11.5px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .whatsappapi-faq_question-text {
        flex: 1;
        font-size: 14.5px;
        font-weight: 600;
        color: var(--wa-text-primary);
    }

    .whatsappapi-faq_toggle {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: var(--wa-bg);
        border: 1px solid var(--wa-border);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        color: var(--wa-text-muted);
        flex-shrink: 0;
        transition: background 0.2s ease, color 0.2s ease, transform 0.2s ease;
    }

    .whatsappapi-faq_item.active .whatsappapi-faq_toggle {
        background: var(--wa-blue);
        border-color: var(--wa-blue);
        color: var(--color-text-light);
        transform: rotate(180deg);
    }

    /* answer bubble — outgoing reply */

    .whatsappapi-faq_answer {
        display: grid;
        grid-template-rows: 0fr;
        transition: grid-template-rows 0.35s ease;
    }

    .whatsappapi-faq_item.active .whatsappapi-faq_answer {
        grid-template-rows: 1fr;
    }

    .whatsappapi-faq_answer-inner {
        overflow: hidden;
    }

    .whatsappapi-faq_answer-bubble {
        max-width: 88%;
        margin: 10px 0 4px auto;
        background: var(--wa-green-soft);
        border: 1px solid var(--wa-green-pale);
        border-radius: 16px 16px 16px 4px;
        padding: 13px 15px 9px;
    }

    .whatsappapi-faq_answer-bubble p {
        font-size: 13.5px;
        line-height: 1.7;
        color: var(--wa-text-secondary);
        margin-bottom: 8px;
    }

    .whatsappapi-faq_answer-meta {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 6px;
    }

    .whatsappapi-faq_answer-meta time {
        font-size: 11px;
        color: var(--wa-text-muted);
    }

    .whatsappapi-tick2 {
        position: relative;
        display: inline-block;
        width: 18px;
        height: 12px;
        flex-shrink: 0;
    }

    .whatsappapi-tick2 i {
        position: absolute;
        top: 0;
        font-size: 12px;
        color: var(--wa-blue-light);
    }

    .whatsappapi-tick2 i:first-child {
        left: 0;
    }

    .whatsappapi-tick2 i:last-child {
        left: 6px;
    }

    /* ---------- Side card = chat CTA ---------- */

    .whatsappapi-faq_card-slot {
        position: relative;
    }

    .whatsappapi-faq_card {
        background: var(--wa-navy);
        border-radius: var(--wa-radius-lg);
        padding: 36px 30px;
        overflow: hidden;
    }

    .whatsappapi-faq_card-glow {
        position: absolute;
        top: -60px;
        right: -60px;
        width: 220px;
        height: 220px;
        background: var(--wa-gradient-soft);
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.6;
    }

    .whatsappapi-faq_card-icon {
        position: relative;
        width: 52px;
        height: 52px;
        border-radius: 15px;
        background: var(--wa-gradient);
        color: var(--color-text-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        margin-bottom: 20px;
    }

    .whatsappapi-faq_card-label {
        position: relative;
        display: block;
        font-size: 11.5px;
        font-weight: 700;
        letter-spacing: 0.6px;
        color: var(--wa-green-light);
        margin-bottom: 10px;
    }

    .whatsappapi-faq_card h3 {
        position: relative;
        font-weight: 800;
        font-size: 23px;
        line-height: 1.3;
        color: var(--color-text-light);
        margin-bottom: 12px;
    }

    .whatsappapi-faq_card p {
        position: relative;
        font-size: 14px;
        line-height: 1.7;
        color: var(--color-text-light-secondary);
        margin-bottom: 24px;
    }

    .whatsappapi-faq_card-btn {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 13px 22px 13px 20px;
        background: var(--wa-green);
        color: var(--color-text-light);
        font-size: 14.5px;
        font-weight: 600;
        border-radius: 999px;
        text-decoration: none;
        margin-bottom: 26px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .whatsappapi-faq_card-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--wa-shadow-green);
    }

    .whatsappapi-faq_card-btn i {
        font-size: 12px;
    }

    .whatsappapi-faq_card-note {
        position: relative;
        display: flex;
        gap: 10px;
        padding-top: 20px;
        border-top: 1px solid var(--color-border-dark);
    }

    .whatsappapi-faq_card-note i {
        color: var(--wa-blue-light);
        font-size: 14px;
        flex-shrink: 0;
        padding-top: 1px;
    }

    .whatsappapi-faq_card-note span {
        font-size: 12.5px;
        line-height: 1.6;
        color: var(--color-text-light-secondary);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 900px) {
        .whatsappapi-faq_wrapper {
            grid-template-columns: 1fr;
        }

        .whatsappapi-faq_question,
        .whatsappapi-faq_answer-bubble {
            max-width: 100%;
        }
    }

    @media (max-width: 560px) {
        .whatsappapi-faq {
            padding: 40px 0;
        }

        .whatsappapi-faq_question {
            padding: 12px;
            gap: 10px;
        }

        .whatsappapi-faq_question-text {
            font-size: 13.5px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .whatsappapi-faq_item,
        .whatsappapi-faq_answer,
        .whatsappapi-faq_toggle {
            transition: none;
        }
    }
</style>


<section class="whatsappapi-faq" id="whatsappapiFaq">

    <div class="container">

        <div class="whatsappapi-faq_header">
            <span class="whatsappapi-section_badge">
                <i class="fa-solid fa-circle-question"></i>
                Frequently asked questions
            </span>
            <h2 class="whatsappapi-faq_title">
                Everything you need to know
                <span>about WhatsApp Api</span>
            </h2>
            <p class="whatsappapi-faq_description">
                Have questions about API, the
                Process or our support? Find the answers below.
            </p>
        </div>


        <div class="whatsappapi-faq_wrapper" id="whatsappapiFaqWrapper">

            <div class="whatsappapi-faq_list" id="whatsappapiFaqList">

                <!-- 01 -->
                <div class="whatsappapi-faq_item active">
                    <button type="button" class="whatsappapi-faq_question" aria-expanded="true">
                        <span class="whatsappapi-faq_number">01</span>
                        <span class="whatsappapi-faq_question-text">What is the primary difference between the WhatsApp Business App and the WhatsApp Business API?</span>
                        <span class="whatsappapi-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappapi-faq_answer">
                        <div class="whatsappapi-faq_answer-inner">
                            <div class="whatsappapi-faq_answer-bubble">
                                <p>The standard app is a free mobile application created for small businesses to handle local customer conversations manually on up to 5 linked devices. The official <strong>WhatsApp Business API</strong> is an enterprise-grade cloud communication platform supporting unlimited multi-agent team logins, automated AI chatbots, custom CRM integrations, detailed performance analytics, and high-volume broadcast campaigns to opt-in customer databases.</p>
                                <div class="whatsappapi-faq_answer-meta">
                                    <time>09:12</time>
                                    <span class="whatsappapi-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 02 -->
                <div class="whatsappapi-faq_item">
                    <button type="button" class="whatsappapi-faq_question" aria-expanded="false">
                        <span class="whatsappapi-faq_number">02</span>
                        <span class="whatsappapi-faq_question-text">Is Meta Business Verification mandatory to use the official business whatsapp API?</span>
                        <span class="whatsappapi-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappapi-faq_answer">
                        <div class="whatsappapi-faq_answer-inner">
                            <div class="whatsappapi-faq_answer-bubble">
                                <p>Yes. Meta Business Verification is required to confirm your organization's legal identity, ensure platform security, unlock higher daily messaging volume tiers, and apply for the official Meta Green Tick verification badge.</p>
                                <div class="whatsappapi-faq_answer-meta">
                                    <time>09:12</time>
                                    <span class="whatsappapi-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 03 -->
                <div class="whatsappapi-faq_item">
                    <button type="button" class="whatsappapi-faq_question" aria-expanded="false">
                        <span class="whatsappapi-faq_number">03</span>
                        <span class="whatsappapi-faq_question-text">Can my existing corporate phone number be used for the WhatsApp Business API?</span>
                        <span class="whatsappapi-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappapi-faq_answer">
                        <div class="whatsappapi-faq_answer-inner">
                            <div class="whatsappapi-faq_answer-bubble">
                                <p>Yes, your existing corporate phone number can be used, provided it is first deleted or unlinked from any active standard WhatsApp or WhatsApp Business mobile app accounts prior to binding it to the enterprise API gateway.
                                </p>
                                <div class="whatsappapi-faq_answer-meta">
                                    <time>09:13</time>
                                    <span class="whatsappapi-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 04 -->
                <div class="whatsappapi-faq_item">
                    <button type="button" class="whatsappapi-faq_question" aria-expanded="false">
                        <span class="whatsappapi-faq_number">04</span>
                        <span class="whatsappapi-faq_question-text">How do messaging costs work on the WhatsApp Business API platform?</span>
                        <span class="whatsappapi-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappapi-faq_answer">
                        <div class="whatsappapi-faq_answer-inner">
                            <div class="whatsappapi-faq_answer-bubble">
                                <p>Messaging costs operate on Meta's conversation-based pricing model. Charges are calculated based on 24-hour conversation sessions and vary depending on the specific conversation category, Utility, Service, Marketing, or Authentication.</p>
                                <div class="whatsappapi-faq_answer-meta">
                                    <time>09:13</time>
                                    <span class="whatsappapi-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 05 -->
                <div class="whatsappapi-faq_item">
                    <button type="button" class="whatsappapi-faq_question" aria-expanded="false">
                        <span class="whatsappapi-faq_number">05</span>
                        <span class="whatsappapi-faq_question-text">Can we integrate the WhatsApp API with our internal CRM or e-commerce website?</span>
                        <span class="whatsappapi-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappapi-faq_answer">
                        <div class="whatsappapi-faq_answer-inner">
                            <div class="whatsappapi-faq_answer-bubble">
                                <p>Yes. King Digital provides developer-ready REST APIs, Webhooks, and pre-built connectors that integrate smoothly with major platforms like Salesforce, HubSpot, Zoho, Shopify, WooCommerce, custom ERPs, and billing software.</p>
                                <div class="whatsappapi-faq_answer-meta">
                                    <time>09:14</time>
                                    <span class="whatsappapi-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 06 -->
                <div class="whatsappapi-faq_item">
                    <button type="button" class="whatsappapi-faq_question" aria-expanded="false">
                        <span class="whatsappapi-faq_number">06</span>
                        <span class="whatsappapi-faq_question-text">How long does it take to activate an official WhatsApp Business API account?</span>
                        <span class="whatsappapi-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappapi-faq_answer">
                        <div class="whatsappapi-faq_answer-inner">
                            <div class="whatsappapi-faq_answer-bubble">
                                <p>Once your Meta Business Manager account verification details are submitted and your corporate phone number is connected, template setup, workflow configuration, and full account activation can typically be completed within a few business days.</p>
                                <div class="whatsappapi-faq_answer-meta">
                                    <time>09:14</time>
                                    <span class="whatsappapi-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="whatsappapi-faq_card-slot" id="whatsappapiFaqCardSlot">
                <aside class="whatsappapi-faq_card" id="whatsappapiFaqCard">
                    <div class="whatsappapi-faq_card-glow"></div>
                    <div class="whatsappapi-faq_card-icon"><i class="fa-brands fa-whatsapp"></i></div>
                    <span class="whatsappapi-faq_card-label">STILL HAVE QUESTIONS?</span>
                    <h3>Let's talk about your business</h3>
                    <p>Get guidance based on your business setup, WhatsApp presence and verification goals.</p>
                    <a href="#contact" class="whatsappapi-faq_card-btn">
                        Talk to an expert
                        <i class="fa-solid fa-paper-plane"></i>
                    </a>
                    <div class="whatsappapi-faq_card-note">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Clear guidance. No guaranteed-approval nonsense.</span>
                    </div>
                </aside>
            </div>

        </div>

    </div>

</section>


<script>
    (function() {
        var list = document.getElementById('whatsappapiFaqList');
        if (!list) return;

        var items = Array.prototype.slice.call(list.querySelectorAll('.whatsappapi-faq_item'));

        items.forEach(function(item) {
            var btn = item.querySelector('.whatsappapi-faq_question');
            btn.addEventListener('click', function() {
                var isActive = item.classList.contains('active');

                items.forEach(function(other) {
                    other.classList.remove('active');
                    other.querySelector('.whatsappapi-faq_question').setAttribute('aria-expanded', 'false');
                });

                if (!isActive) {
                    item.classList.add('active');
                    btn.setAttribute('aria-expanded', 'true');
                }
            });
        });

        if (typeof IntersectionObserver !== 'undefined') {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        list.classList.add('is-visible');
                        observer.unobserve(list);
                    }
                });
            }, {
                threshold: 0.15
            });
            observer.observe(list);
        }
    })();

    // Manually-managed sticky CTA card. We don't rely on CSS `position: sticky`
    // here because it silently breaks the moment any ancestor in the page
    // (common in WordPress/page-builder markup) sets `overflow` to anything
    // other than `visible`. This computes the same effect with scroll math,
    // and — importantly — releases the card once the question list ends so
    // it scrolls away with the rest of the page instead of staying pinned.
    (function() {
        var wrapper = document.getElementById('whatsappapiFaqWrapper');
        var slot = document.getElementById('whatsappapiFaqCardSlot');
        var card = document.getElementById('whatsappapiFaqCard');
        if (!wrapper || !slot || !card) return;

        var OFFSET = 100;
        var mq = window.matchMedia('(max-width: 900px)');
        var ticking = false;

        function reset() {
            card.style.position = '';
            card.style.top = '';
            card.style.left = '';
            card.style.width = '';
        }

        function update() {
            ticking = false;

            if (mq.matches) {
                reset();
                return;
            }

            var wrapperRect = wrapper.getBoundingClientRect();
            var slotRect = slot.getBoundingClientRect();
            var cardHeight = card.offsetHeight;
            var slotWidth = slot.offsetWidth;

            if (wrapperRect.top > OFFSET) {
                // Section hasn't reached the sticky point yet.
                reset();
            } else if (wrapperRect.bottom < OFFSET + cardHeight) {
                // Bottom of the list column has scrolled past — release the
                // card so it moves down with the page instead of staying pinned.
                card.style.position = 'absolute';
                card.style.left = '0';
                card.style.width = slotWidth + 'px';
                card.style.top = (wrapper.offsetHeight - cardHeight) + 'px';
            } else {
                // Pin to the viewport while the list scrolls underneath it.
                card.style.position = 'fixed';
                card.style.top = OFFSET + 'px';
                card.style.left = slotRect.left + 'px';
                card.style.width = slotWidth + 'px';
            }
        }

        function onScroll() {
            if (!ticking) {
                ticking = true;
                window.requestAnimationFrame(update);
            }
        }

        wrapper.style.position = 'relative';
        slot.style.position = 'relative';

        window.addEventListener('scroll', onScroll, {
            passive: true
        });
        window.addEventListener('resize', onScroll);
        if (mq.addEventListener) {
            mq.addEventListener('change', onScroll);
        } else if (mq.addListener) {
            mq.addListener(onScroll);
        }

        update();
    })();
</script>