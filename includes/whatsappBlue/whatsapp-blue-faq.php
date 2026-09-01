<style>

    .whatsappBlue-faq {
        position: relative;
        padding: 40px 0;
        background: var(--wa-bg);
        font-family: 'Inter', sans-serif;
    }

    .whatsappBlue-faq .container {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 24px;
    }

    /* ---------- Header ---------- */

    .whatsappBlue-faq_header {
        max-width: 640px;
        margin: 0 auto 64px;
        text-align: center;
    }

    .whatsappBlue-faq .whatsappBlue-section_badge {
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

    .whatsappBlue-faq .whatsappBlue-section_badge i {
        font-size: 12px;
    }

    .whatsappBlue-faq_title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: clamp(30px, 3.6vw, 40px);
        line-height: 1.25;
        letter-spacing: -0.4px;
        color: var(--wa-text-primary);
        margin-bottom: 18px;
    }

    .whatsappBlue-faq_title span {
        display: block;
        background: var(--wa-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappBlue-faq_description {
        font-size: 16px;
        line-height: 1.7;
        color: var(--wa-text-secondary);
    }

    /* ---------- Wrapper ---------- */

    .whatsappBlue-faq_wrapper {
        display: grid;
        grid-template-columns: 1.5fr 1fr;
        gap: 40px;
        align-items: start;
    }

    /* ---------- FAQ list = chat exchange ---------- */

    .whatsappBlue-faq_list {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .whatsappBlue-faq_item {
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.45s ease, transform 0.45s ease;
        transition-delay: var(--d, 0s);
    }

    .whatsappBlue-faq_list.is-visible .whatsappBlue-faq_item {
        opacity: 1;
        transform: translateY(0);
    }

    .whatsappBlue-faq_item:nth-child(1) {
        --d: 0.02s;
    }

    .whatsappBlue-faq_item:nth-child(2) {
        --d: 0.08s;
    }

    .whatsappBlue-faq_item:nth-child(3) {
        --d: 0.14s;
    }

    .whatsappBlue-faq_item:nth-child(4) {
        --d: 0.2s;
    }

    .whatsappBlue-faq_item:nth-child(5) {
        --d: 0.26s;
    }

    .whatsappBlue-faq_item:nth-child(6) {
        --d: 0.32s;
    }

    .whatsappBlue-faq_item:nth-child(7) {
        --d: 0.38s;
    }

    .whatsappBlue-faq_item:nth-child(8) {
        --d: 0.44s;
    }

    /* question bubble — incoming */

    .whatsappBlue-faq_question {
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

    .whatsappBlue-faq_item.active .whatsappBlue-faq_question {
        background: var(--wa-bg);
        border-color: var(--wa-blue-pale);
    }

    .whatsappBlue-faq_number {
        width: 30px;
        height: 30px;
        border-radius: 9px;
        background: var(--wa-navy);
        color: #fff;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 11.5px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .whatsappBlue-faq_question-text {
        flex: 1;
        font-size: 14.5px;
        font-weight: 600;
        color: var(--wa-text-primary);
    }

    .whatsappBlue-faq_toggle {
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

    .whatsappBlue-faq_item.active .whatsappBlue-faq_toggle {
        background: var(--wa-blue);
        border-color: var(--wa-blue);
        color: #fff;
        transform: rotate(180deg);
    }

    /* answer bubble — outgoing reply */

    .whatsappBlue-faq_answer {
        display: grid;
        grid-template-rows: 0fr;
        transition: grid-template-rows 0.35s ease;
    }

    .whatsappBlue-faq_item.active .whatsappBlue-faq_answer {
        grid-template-rows: 1fr;
    }

    .whatsappBlue-faq_answer-inner {
        overflow: hidden;
    }

    .whatsappBlue-faq_answer-bubble {
        max-width: 88%;
        margin: 10px 0 4px auto;
        background: var(--wa-green-soft);
        border: 1px solid var(--wa-green-pale);
        border-radius: 16px 16px 16px 4px;
        padding: 13px 15px 9px;
    }

    .whatsappBlue-faq_answer-bubble p {
        font-size: 13.5px;
        line-height: 1.7;
        color: var(--wa-text-secondary);
        margin-bottom: 8px;
    }

    .whatsappBlue-faq_answer-meta {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 6px;
    }

    .whatsappBlue-faq_answer-meta time {
        font-size: 11px;
        color: var(--wa-text-muted);
    }

    .whatsappBlue-tick2 {
        position: relative;
        display: inline-block;
        width: 18px;
        height: 12px;
        flex-shrink: 0;
    }

    .whatsappBlue-tick2 i {
        position: absolute;
        top: 0;
        font-size: 12px;
        color: var(--wa-blue-light);
    }

    .whatsappBlue-tick2 i:first-child {
        left: 0;
    }

    .whatsappBlue-tick2 i:last-child {
        left: 6px;
    }

    /* ---------- Side card = chat CTA ---------- */

    .whatsappBlue-faq_card {
        position: sticky;
        top: 100px;
        background: var(--wa-navy);
        border-radius: var(--wa-radius-lg);
        padding: 36px 30px;
        overflow: hidden;
    }

    .whatsappBlue-faq_card-glow {
        position: absolute;
        top: -60px;
        right: -60px;
        width: 220px;
        height: 220px;
        background: var(--wa-gradient-soft);
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.25;
    }

    .whatsappBlue-faq_card-icon {
        position: relative;
        width: 52px;
        height: 52px;
        border-radius: 15px;
        background: var(--wa-gradient);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        margin-bottom: 20px;
    }

    .whatsappBlue-faq_card-label {
        position: relative;
        display: block;
        font-size: 11.5px;
        font-weight: 700;
        letter-spacing: 0.6px;
        color: var(--wa-green-light);
        margin-bottom: 10px;
    }

    .whatsappBlue-faq_card h3 {
        position: relative;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: 23px;
        line-height: 1.3;
        color: #fff;
        margin-bottom: 12px;
    }

    .whatsappBlue-faq_card p {
        position: relative;
        font-size: 14px;
        line-height: 1.7;
        color: #94A3B8;
        margin-bottom: 24px;
    }

    .whatsappBlue-faq_card-btn {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 13px 22px 13px 20px;
        background: var(--wa-green);
        color: #fff;
        font-size: 14.5px;
        font-weight: 600;
        border-radius: 999px;
        text-decoration: none;
        margin-bottom: 26px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .whatsappBlue-faq_card-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--wa-shadow-green);
    }

    .whatsappBlue-faq_card-btn i {
        font-size: 12px;
    }

    .whatsappBlue-faq_card-note {
        position: relative;
        display: flex;
        gap: 10px;
        padding-top: 20px;
        border-top: 1px solid #1E293B;
    }

    .whatsappBlue-faq_card-note i {
        color: var(--wa-blue-light);
        font-size: 14px;
        flex-shrink: 0;
        padding-top: 1px;
    }

    .whatsappBlue-faq_card-note span {
        font-size: 12.5px;
        line-height: 1.6;
        color: #64748B;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 900px) {
        .whatsappBlue-faq_wrapper {
            grid-template-columns: 1fr;
        }

        .whatsappBlue-faq_card {
            position: static;
        }

        .whatsappBlue-faq_question,
        .whatsappBlue-faq_answer-bubble {
            max-width: 100%;
        }
    }

    @media (max-width: 560px) {
        .whatsappBlue-faq {
            padding: 90px 0;
        }

        .whatsappBlue-faq_question {
            padding: 12px;
            gap: 10px;
        }

        .whatsappBlue-faq_question-text {
            font-size: 13.5px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .whatsappBlue-faq_item,
        .whatsappBlue-faq_answer,
        .whatsappBlue-faq_toggle {
            transition: none;
        }
    }
</style>


<section class="whatsappBlue-faq" id="whatsappBlueFaq">

    <div class="container">

        <div class="whatsappBlue-faq_header">
            <span class="whatsappBlue-section_badge">
                <i class="fa-solid fa-circle-question"></i>
                Frequently asked questions
            </span>
            <h2 class="whatsappBlue-faq_title">
                Everything you need to know
                <span>about WhatsApp verification</span>
            </h2>
            <p class="whatsappBlue-faq_description">
                Have questions about eligibility, the verification
                process or our support? Find the answers below.
            </p>
        </div>


        <div class="whatsappBlue-faq_wrapper">

            <div class="whatsappBlue-faq_list" id="whatsappBlueFaqList">

                <!-- 01 -->
                <div class="whatsappBlue-faq_item active">
                    <button type="button" class="whatsappBlue-faq_question" aria-expanded="true">
                        <span class="whatsappBlue-faq_number">01</span>
                        <span class="whatsappBlue-faq_question-text">What is the WhatsApp Blue Tick?</span>
                        <span class="whatsappBlue-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappBlue-faq_answer">
                        <div class="whatsappBlue-faq_answer-inner">
                            <div class="whatsappBlue-faq_answer-bubble">
                                <p>The WhatsApp Blue Tick is a verification signal associated with an eligible business presence. It helps customers identify a recognized business presence on WhatsApp.</p>
                                <div class="whatsappBlue-faq_answer-meta">
                                    <time>09:12</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 02 -->
                <div class="whatsappBlue-faq_item">
                    <button type="button" class="whatsappBlue-faq_question" aria-expanded="false">
                        <span class="whatsappBlue-faq_number">02</span>
                        <span class="whatsappBlue-faq_question-text">Can you guarantee WhatsApp verification?</span>
                        <span class="whatsappBlue-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappBlue-faq_answer">
                        <div class="whatsappBlue-faq_answer-inner">
                            <div class="whatsappBlue-faq_answer-bubble">
                                <p>No. Verification approval is determined by WhatsApp and Meta according to their applicable eligibility and review criteria. No third party can legitimately guarantee approval.</p>
                                <div class="whatsappBlue-faq_answer-meta">
                                    <time>09:12</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 03 -->
                <div class="whatsappBlue-faq_item">
                    <button type="button" class="whatsappBlue-faq_question" aria-expanded="false">
                        <span class="whatsappBlue-faq_number">03</span>
                        <span class="whatsappBlue-faq_question-text">Who can apply for WhatsApp verification?</span>
                        <span class="whatsappBlue-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappBlue-faq_answer">
                        <div class="whatsappBlue-faq_answer-inner">
                            <div class="whatsappBlue-faq_answer-bubble">
                                <p>Eligibility depends on the applicable WhatsApp and Meta requirements, your business setup and the verification route available to your account.</p>
                                <div class="whatsappBlue-faq_answer-meta">
                                    <time>09:13</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 04 -->
                <div class="whatsappBlue-faq_item">
                    <button type="button" class="whatsappBlue-faq_question" aria-expanded="false">
                        <span class="whatsappBlue-faq_number">04</span>
                        <span class="whatsappBlue-faq_question-text">What documents or information are required?</span>
                        <span class="whatsappBlue-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappBlue-faq_answer">
                        <div class="whatsappBlue-faq_answer-inner">
                            <div class="whatsappBlue-faq_answer-bubble">
                                <p>Requirements can vary depending on your business and verification route. You may need accurate business information and supporting details or documentation when requested.</p>
                                <div class="whatsappBlue-faq_answer-meta">
                                    <time>09:13</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 05 -->
                <div class="whatsappBlue-faq_item">
                    <button type="button" class="whatsappBlue-faq_question" aria-expanded="false">
                        <span class="whatsappBlue-faq_number">05</span>
                        <span class="whatsappBlue-faq_question-text">How long does the verification process take?</span>
                        <span class="whatsappBlue-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappBlue-faq_answer">
                        <div class="whatsappBlue-faq_answer-inner">
                            <div class="whatsappBlue-faq_answer-bubble">
                                <p>Processing times can vary based on the verification route, account status and review requirements. There is no universal guaranteed approval timeline.</p>
                                <div class="whatsappBlue-faq_answer-meta">
                                    <time>09:14</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 06 -->
                <div class="whatsappBlue-faq_item">
                    <button type="button" class="whatsappBlue-faq_question" aria-expanded="false">
                        <span class="whatsappBlue-faq_number">06</span>
                        <span class="whatsappBlue-faq_question-text">What happens if my verification is rejected?</span>
                        <span class="whatsappBlue-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappBlue-faq_answer">
                        <div class="whatsappBlue-faq_answer-inner">
                            <div class="whatsappBlue-faq_answer-bubble">
                                <p>A rejection does not necessarily mean your business can never qualify. The next steps depend on the reason for the decision and the applicable reapplication or review options.</p>
                                <div class="whatsappBlue-faq_answer-meta">
                                    <time>09:14</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 07 -->
                <div class="whatsappBlue-faq_item">
                    <button type="button" class="whatsappBlue-faq_question" aria-expanded="false">
                        <span class="whatsappBlue-faq_number">07</span>
                        <span class="whatsappBlue-faq_question-text">Can King Digital help with the application?</span>
                        <span class="whatsappBlue-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappBlue-faq_answer">
                        <div class="whatsappBlue-faq_answer-inner">
                            <div class="whatsappBlue-faq_answer-bubble">
                                <p>Yes. Our team can help you understand the process, prepare relevant business information and provide guidance through the applicable verification journey.</p>
                                <div class="whatsappBlue-faq_answer-meta">
                                    <time>09:15</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 08 -->
                <div class="whatsappBlue-faq_item">
                    <button type="button" class="whatsappBlue-faq_question" aria-expanded="false">
                        <span class="whatsappBlue-faq_number">08</span>
                        <span class="whatsappBlue-faq_question-text">Does the Blue Tick guarantee more sales?</span>
                        <span class="whatsappBlue-faq_toggle"><i class="fa-solid fa-chevron-down"></i></span>
                    </button>
                    <div class="whatsappBlue-faq_answer">
                        <div class="whatsappBlue-faq_answer-inner">
                            <div class="whatsappBlue-faq_answer-bubble">
                                <p>No. Verification can contribute to a more recognizable and professional business presence, but it does not guarantee increased sales, engagement or conversions.</p>
                                <div class="whatsappBlue-faq_answer-meta">
                                    <time>09:15</time>
                                    <span class="whatsappBlue-tick2"><i class="fa-solid fa-check"></i><i class="fa-solid fa-check"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <aside class="whatsappBlue-faq_card">
                <div class="whatsappBlue-faq_card-glow"></div>
                <div class="whatsappBlue-faq_card-icon"><i class="fa-brands fa-whatsapp"></i></div>
                <span class="whatsappBlue-faq_card-label">STILL HAVE QUESTIONS?</span>
                <h3>Let's talk about your business</h3>
                <p>Get guidance based on your business setup, WhatsApp presence and verification goals.</p>
                <a href="#contact" class="whatsappBlue-faq_card-btn">
                    Talk to an expert
                    <i class="fa-solid fa-paper-plane"></i>
                </a>
                <div class="whatsappBlue-faq_card-note">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Clear guidance. No guaranteed-approval nonsense.</span>
                </div>
            </aside>

        </div>

    </div>

</section>


<script>
    (function() {
        var list = document.getElementById('whatsappBlueFaqList');
        if (!list) return;

        var items = Array.prototype.slice.call(list.querySelectorAll('.whatsappBlue-faq_item'));

        items.forEach(function(item) {
            var btn = item.querySelector('.whatsappBlue-faq_question');
            btn.addEventListener('click', function() {
                var isActive = item.classList.contains('active');

                items.forEach(function(other) {
                    other.classList.remove('active');
                    other.querySelector('.whatsappBlue-faq_question').setAttribute('aria-expanded', 'false');
                });

                if (!isActive) {
                    item.classList.add('active');
                    btn.setAttribute('aria-expanded', 'true');
                }
            });
        });

        if (typeof IntersectionObserver === 'undefined') return;
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
    })();
</script>