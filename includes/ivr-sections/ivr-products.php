<style>
    :root {
        /* Primary */
        --ivr-primary: #6366F1;
        --ivr-primary-dark: #4F46E5;
        --ivr-primary-light: #818CF8;

        /* Secondary */
        --ivr-blue: #2563EB;
        --ivr-blue-dark: #1D4ED8;
        --ivr-blue-light: #60A5FA;

        /* Accent */
        --ivr-cyan: #22D3EE;
        --ivr-purple: #8B5CF6;
        --ivr-violet: #A78BFA;
        --ivr-gold: #F97316;

        /* Backgrounds */
        --ivr-bg: #F8FAFC;
        --ivr-bg-light: #EEF2FF;
        --ivr-bg-blue: #EFF6FF;
        --ivr-bg-dark: #0F172A;
        --ivr-bg-dark-alt: #111827;

        /* Cards */
        --ivr-card: #FFFFFF;
        --ivr-card-dark: #1E293B;
        --ivr-border: #E2E8F0;
        --ivr-border-purple: #C7D2FE;

        /* Text */
        --ivr-text-primary: #0F172A;
        --ivr-text-secondary: #475569;
        --ivr-text-muted: #64748B;
        --ivr-text-light: #F8FAFC;
        --ivr-text-muted-light: #A5B4CB;

        /* Gradients */
        --ivr-gradient-primary: linear-gradient(135deg, #6366F1 0%, #2563EB 100%);
        --ivr-gradient-ai: linear-gradient(135deg, #8B5CF6 0%, #6366F1 45%, #2563EB 100%);
        --ivr-gradient-glow: linear-gradient(135deg, #A78BFA 0%, #22D3EE 100%);
        --ivr-gradient-dark: linear-gradient(135deg, #0F172A 0%, #1E1B4B 50%, #172554 100%);

        /* Glows */
        --ivr-glow-purple: 0 0 40px rgba(139, 92, 246, 0.25);
        --ivr-glow-blue: 0 0 40px rgba(37, 99, 235, 0.25);
        --ivr-glow-cyan: 0 0 40px rgba(34, 211, 238, 0.20);

        /* Shadows */
        --ivr-shadow-sm: 0 4px 12px rgba(15, 23, 42, 0.06);
        --ivr-shadow-md: 0 10px 30px rgba(15, 23, 42, 0.10);
        --ivr-shadow-lg: 0 20px 50px rgba(15, 23, 42, 0.14);

        /* Border Radius */
        --ivr-radius-sm: 8px;
        --ivr-radius-md: 14px;
        --ivr-radius-lg: 20px;
        --ivr-radius-xl: 28px;
        --ivr-radius-pill: 999px;

        /* Animation */
        --ivr-transition-fast: 0.2s ease;
        --ivr-transition: 0.35s ease;
        --ivr-transition-slow: 0.6s ease;
    }

    /* //////////////////////////////////// Products Section Start ///////////////////////////////////// */

    .ivr-products {
        position: relative;
        overflow: hidden;
        padding: 88px 80px;
        background: var(--ivr-bg);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    .ivr-product_content {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
    }

    .ivr-product_content--heading {
        text-align: center;
        max-width: 680px;
        margin: 0 auto 12px;
    }

    .ivr-product_content--heading h1 {
        font-size: clamp(28px, 3.6vw, 42px);
        line-height: 1.2;
        font-weight: 800;
        letter-spacing: -.5px;
        color: var(--ivr-text-primary);
        margin: 0;
    }

    .ivr-product_content--heading h1 span {
        background: var(--ivr-gradient-ai);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ivr-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
        gap: 18px;
        margin-top: 52px
    }

    .ivr-card {
        background: var(--ivr-card);
        border: 1.5px solid var(--ivr-border);
        border-radius: var(--ivr-radius-lg);
        padding: 28px;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        transition: var(--ivr-transition)
    }

    .ivr-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--ivr-gold);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .25s ease
    }

    .ivr-card:hover {
        border-color: rgba(37, 99, 235, .25);
        box-shadow: var(--ivr-shadow-lg);
        transform: translateY(-4px)
    }

    .ivr-card:hover::after {
        transition: 1s ease;
        transform: scaleX(1)
    }

    .ivr-ico {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        margin-bottom: 20px
    }

    .ivr-name {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 9px;
        color: var(--ivr-text-primary);
    }

    .ivr-desc {
        font-size: 14px;
        color: var(--ivr-text-secondary);
        line-height: 1.75;
        margin-bottom: 18px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .ivr-tags {
        display: flex;
        gap: 6px;
        flex-wrap: wrap
    }

    .stag {
        font-size: 11px;
        font-weight: 600;
        color: var(--ivr-text-muted);
        background: var(--ivr-bg);
        padding: 3px 10px;
        border-radius: 20px;
        border: 1px solid var(--ivr-border)
    }

    .ivr-link {
        position: absolute;
        top: 24px;
        right: 24px;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 1.5px solid var(--ivr-border);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        color: var(--ivr-text-muted);
        text-decoration: none;
        transition: var(--ivr-transition)
    }

    .ivr-card:hover .ivr-link {
        background: var(--ivr-blue);
        border-color: var(--ivr-blue);
        color: #fff
    }

    /* cursor-follow glow — spreads outward from wherever the cursor enters the card */
    .icp-cursor-glow {
        position: absolute;
        left: 0;
        top: 0;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.2) 0%, rgba(139, 92, 246, .22) 30%, rgba(34, 211, 238, .08) 55%, rgba(34, 211, 238, 0) 72%);
        opacity: 0;
        pointer-events: none;
        transition: opacity .35s ease;
        z-index: 0;
    }

    /* ── Decor 1: top-left rotating dashed ring ── */
    .decor-tl {
        position: absolute;
        top: -110px;
        left: -110px;
        width: 220px;
        height: 220px;
        border: 2px dashed var(--ivr-primary);
        border-radius: 50%;
        opacity: .25;
        animation: decor-spin 18s linear infinite;
        pointer-events: none;
        z-index: 0;
    }

    @keyframes decor-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* ── Decor 2: top-right fading dot-grid ── */
    .decor-tr {
        position: absolute;
        top: -20px;
        right: -20px;
        width: 220px;
        height: 200px;
        background-image: radial-gradient(circle, var(--ivr-blue) 1.6px, transparent 1.6px);
        background-size: 22px 22px;
        -webkit-mask-image: radial-gradient(ellipse at top right, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at top right, black 0%, black 25%, transparent 72%);
        opacity: .3;
        pointer-events: none;
        z-index: 0;
        animation: grid-shift 10s ease-in-out infinite;
    }

    @keyframes grid-shift {

        0%,
        100% {
            background-position: 0 0;
        }

        50% {
            background-position: -8px 8px;
        }
    }

    /* ── Decor 3: bottom-left floating sparkle dots ── */
    .decor-bl {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 200px;
        height: 220px;
        pointer-events: none;
        z-index: 0;
    }

    .decor-dot {
        position: absolute;
        border-radius: 50%;
        background: var(--ivr-gold);
    }

    .decor-dot.d1 {
        width: 12px;
        height: 12px;
        bottom: 30px;
        left: 26px;
        opacity: .35;
        animation: dot-bob-1 5.5s ease-in-out infinite;
    }

    .decor-dot.d2 {
        width: 8px;
        height: 8px;
        bottom: 90px;
        left: 70px;
        opacity: .3;
        background: var(--ivr-primary);
        animation: dot-bob-2 6.5s ease-in-out infinite;
    }

    .decor-dot.d3 {
        width: 16px;
        height: 16px;
        bottom: 50px;
        left: 120px;
        opacity: .24;
        animation: dot-bob-3 7.5s ease-in-out infinite;
    }

    .decor-dot.d4 {
        width: 9px;
        height: 9px;
        bottom: 140px;
        left: 40px;
        opacity: .28;
        background: var(--ivr-primary);
        animation: dot-bob-1 6s ease-in-out infinite .4s;
    }

    @keyframes dot-bob-1 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(10px, -16px);
        }
    }

    @keyframes dot-bob-2 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-12px, 10px);
        }
    }

    @keyframes dot-bob-3 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(8px, 14px);
        }
    }

    /* ── Decor 4: bottom-right soft ambient glow ── */
    .decor-br {
        position: absolute;
        bottom: -180px;
        right: -150px;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.16) 0%, rgba(37, 99, 235, 0.10) 45%, rgba(255, 255, 255, 0) 72%);
        filter: blur(8px);
        pointer-events: none;
        z-index: 0;
        animation: glow-pulse 9s ease-in-out infinite;
    }

    @keyframes glow-pulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.08);
            opacity: .85;
        }
    }

    /* ════ RESPONSIVE ════ */
    @media (max-width: 900px) {
        .ivr-products {
            padding: 60px 24px;
        }
    }

    @media(max-width:640px) {
        .section {
            padding: 60px 0
        }
    }
</style>

<!-- ////////////////////////////////////////////////// Products Section //////////////////////////////////////-->
<section class="ivr-products" id="products">
    <div class="decor-tl"></div>
    <div class="decor-tr"></div>
    <div class="decor-bl">
        <div class="decor-dot d1"></div>
        <div class="decor-dot d2"></div>
        <div class="decor-dot d3"></div>
        <div class="decor-dot d4"></div>
    </div>
    <div class="decor-br"></div>

    <div class="ivr-product_content">
        <div class="ivr-product_content--heading">
            <h1>Everything You Need for <span>Business Voice Communication</span></h1>
        </div>
        <div class="ivr-product_content--cards">
            <div class="ivr-grid">
                <div class="ivr-card reveal">
                    <a href="#" class="ivr-link"><i class="fas fa-arrow-right"></i></a>
                    <div class="ivr-ico" style="background:#EEF2FF;color:#4F46E5"><i class="fa-solid fa-phone-volume"></i></div>
                    <div class="ivr-name">Hosted IVR</div>
                    <div class="ivr-desc">Hosted IVR is a cloud-managed automated phone system that greets callers with pre-recorded voice menus and routes their calls based on keypad inputs or voice commands.</div>
                    <div class="ivr-tags">
                        <span class="stag">Cloud IVR</span>
                        <span class="stag">IVR call routing</span>
                        <span class="stag">24/7 customer support automation</span>
                        <span class="stag">Best hosted IVR providers</span>
                    </div>
                </div>
                <div class="ivr-card reveal">
                    <a href="#" class="ivr-link"><i class="fas fa-arrow-right"></i></a>
                    <div class="ivr-ico" style="background:#EEF2FF;color:#4F46E5"><i class="fa-solid fa-square-poll-horizontal"></i></div>
                    <div class="ivr-name">Toll-Free</div>
                    <div class="ivr-desc">A toll-free number is a special telephone number that allows callers to reach a business or organization without being charged.</div>
                    <div class="ivr-tags">
                        <span class="stag">Buy toll-free number</span>
                        <span class="stag">Free toll-free number trial</span>
                        <span class="stag">Customer care number</span>
                        <span class="stag">Call tracking marketing</span>
                    </div>
                </div>
                <div class="ivr-card reveal">
                    <a href="#" class="ivr-link"><i class="fas fa-arrow-right"></i></a>
                    <div class="ivr-ico" style="background:#EEF2FF;color:#4F46E5"><i class="fa-solid fa-voicemail"></i></div>
                    <div class="ivr-name">Missed Call Alert</div>
                    <div class="ivr-desc">It is a cloud tool that logs customer numbers for free lead generation and auto-replies.</div>
                    <div class="ivr-tags">
                        <span class="stag">Virtual Mobile Number (VMN)</span>
                        <span class="stag">Lead Capture</span>
                        <span class="stag">Auto Callback</span>
                        <span class="stag">Toll-Free</span>
                    </div>
                </div>
                <div class="ivr-card reveal">
                    <a href="#" class="ivr-link"><i class="fas fa-arrow-right"></i></a>
                    <div class="ivr-ico" style="background:#EEF2FF;color:#4F46E5"><i class="fa-solid fa-phone-volume"></i></div>
                    <div class="ivr-name">OBD Voice</div>
                    <div class="ivr-desc">An automated communication technology that dials a list of phone numbers and plays a pre-recorded audio message or text-to-speech alert to thousands of recipients simultaneously without manual intervention.</div>
                    <div class="ivr-tags">
                        <span class="stag">Outbound Dialing (OBD)</span>
                        <span class="stag">Voice SMS</span>
                        <span class="stag">Live Agent Transfer</span>
                        <span class="stag">Call Delivery Reports (CDR)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Products Section End ///////////////////////////////////////////-->

<script>
    /* ===========================
       PRODUCTS HEADING SCROLL EFFECT
    =========================== */

    var ivrProductsSection = document.querySelector(".ivr-products");

    if (ivrProductsSection) {
        var ivrProductsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show-animation");
                }
            });
        }, {
            threshold: 0.35
        });

        ivrProductsObserver.observe(ivrProductsSection);
    }

    (function() {
        "use strict";

        var icpCards = document.querySelectorAll('.ivr-card');
        var icpGlowRadius = 230; // px — soft glow that spreads out from the cursor's corner
        var icpMaxTilt = 12; // deg — max corner tilt

        icpCards.forEach(function(card) {

            // create the cursor-follow glow layer once per card
            var icpGlow = document.createElement('div');
            icpGlow.className = 'icp-cursor-glow';
            icpGlow.style.width = (icpGlowRadius * 0.5) + 'px';
            icpGlow.style.height = (icpGlowRadius * 0.5) + 'px';
            card.appendChild(icpGlow);

            card.addEventListener('mousemove', function(e) {
                var rect = card.getBoundingClientRect();
                var x = e.clientX - rect.left;
                var y = e.clientY - rect.top;

                // 3D tilt — rotate toward whichever corner/edge the cursor is near
                var px = (x / rect.width) - 0.5; // -0.5 .. 0.5
                var py = (y / rect.height) - 0.5; // -0.5 .. 0.5
                var rotateY = px * icpMaxTilt * 2;
                var rotateX = py * -icpMaxTilt * 2;
                card.style.transform =
                    'perspective(800px) rotateX(' + rotateX.toFixed(2) + 'deg) rotateY(' + rotateY.toFixed(2) + 'deg) translateZ(-6px) translateY(-4px)';

                // glow following the cursor, clipped to a 50px radius
                icpGlow.style.left = x + 'px';
                icpGlow.style.top = y + 'px';
                icpGlow.style.opacity = '1';
            });

            card.addEventListener('mouseleave', function() {
                card.style.transform = '';
                icpGlow.style.opacity = '0';
            });
        });

    })();
</script>