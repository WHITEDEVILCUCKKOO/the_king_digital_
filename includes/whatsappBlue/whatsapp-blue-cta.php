<style>
    .whatsappBlue-finalCta {
        position: relative;
        padding: 40px 0 30px;
        background: linear-gradient(180deg, #0F172A 0%, #0B1220 100%);
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    .whatsappBlue-finalCta_bg {
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
    }

    .whatsappBlue-finalCta_circle {
        position: absolute;
        border-radius: 50%;
        filter: blur(70px);
    }

    .circle-1 {
        width: 420px;
        height: 420px;
        top: -160px;
        left: -120px;
        background: rgba(37, 211, 102, 0.18);
    }

    .circle-2 {
        width: 380px;
        height: 380px;
        bottom: -180px;
        right: -100px;
        background: rgba(37, 99, 235, 0.2);
    }

    .circle-3 {
        width: 240px;
        height: 240px;
        top: 40%;
        left: 55%;
        background: rgba(74, 222, 128, 0.1);
    }

    .whatsappBlue-finalCta .container {
        position: relative;
        z-index: 1;
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 24px;
    }

    .whatsappBlue-finalCta_wrapper {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 50px;
        align-items: center;
        margin-bottom: 64px;
    }

    /* ---------- LEFT ---------- */

    .whatsappBlue-finalCta_badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 18px 9px 16px;
        background: rgba(74, 222, 128, 0.12);
        border: 1px solid rgba(74, 222, 128, 0.25);
        color: var(--wa-green-light);
        font-size: 13px;
        font-weight: 600;
        border-radius: 18px 18px 18px 4px;
        margin-bottom: 24px;
    }

    .whatsappBlue-finalCta_badge i {
        font-size: 12px;
    }

    .whatsappBlue-finalCta_title {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 700;
        font-size: clamp(32px, 4vw, 46px);
        line-height: 1.2;
        letter-spacing: -0.5px;
        color: #fff;
        margin-bottom: 20px;
    }

    .whatsappBlue-finalCta_title span {
        display: block;
        background: var(--wa-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .whatsappBlue-finalCta_description {
        font-size: 16.5px;
        line-height: 1.75;
        color: #94A3B8;
        max-width: 50ch;
        margin-bottom: 34px;
    }

    .whatsappBlue-finalCta_actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
        margin-bottom: 36px;
    }

    .whatsappBlue-finalCta_btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 15px 26px;
        font-size: 15px;
        font-weight: 600;
        border-radius: 999px;
        text-decoration: none;
        white-space: nowrap;
        transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
    }

    .whatsappBlue-finalCta_btn.primary {
        background: var(--wa-green);
        color: #fff;
    }

    .whatsappBlue-finalCta_btn.primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 40px rgba(37, 211, 102, 0.35);
    }

    .whatsappBlue-finalCta_btn.secondary {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.16);
        color: #fff;
    }

    .whatsappBlue-finalCta_btn.secondary i {
        color: var(--wa-green-light);
    }

    .whatsappBlue-finalCta_btn.secondary:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    .whatsappBlue-finalCta_trust {
        display: flex;
        flex-wrap: wrap;
        gap: 22px;
    }

    .whatsappBlue-finalCta_trustItem {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 13.5px;
        color: #CBD5E1;
    }

    .whatsappBlue-finalCta_trustItem i {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: rgba(74, 222, 128, 0.16);
        color: var(--wa-green-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 9px;
        flex-shrink: 0;
    }

    /* ---------- RIGHT: visual ---------- */

    .whatsappBlue-finalCta_visual {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 380px;
    }

    .whatsappBlue-finalCta_glow {
        position: absolute;
        width: 300px;
        height: 300px;
        background: var(--wa-gradient-soft);
        border-radius: 50%;
        filter: blur(90px);
        opacity: 0.15;
    }

    /* verified badge orb with call-style pulse rings */

    .whatsappBlue-finalCta_orb {
        position: relative;
        width: 168px;
        height: 168px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .whatsappBlue-finalCta_orb-ring {
        position: absolute;
        inset: 0;
        border-radius: 50%;
        border: 1.5px solid rgba(74, 222, 128, 0.35);
        animation: whatsappBluePing 2.8s ease-out infinite;
    }

    .whatsappBlue-finalCta_orb-ring.ring-2 {
        animation-delay: 1.4s;
    }

    @keyframes whatsappBluePing {
        0% {
            transform: scale(1);
            opacity: 0.7;
        }

        100% {
            transform: scale(1.9);
            opacity: 0;
        }
    }

    .whatsappBlue-finalCta_tick {
        position: relative;
        z-index: 1;
        width: 104px;
        height: 104px;
        border-radius: 50%;
        background: var(--wa-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 38px;
        box-shadow: 0 20px 50px rgba(37, 211, 102, 0.35);
    }

    @media (prefers-reduced-motion: reduce) {
        .whatsappBlue-finalCta_orb-ring {
            animation: none;
            opacity: 0.35;
        }
    }

    /* floating business card */

    .whatsappBlue-finalCta_business {
        position: absolute;
        top: 6%;
        left: -4%;
        display: flex;
        align-items: center;
        gap: 12px;
        background: #fff;
        border-radius: 16px 16px 16px 4px;
        padding: 12px 16px;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.28);
        opacity: 0;
        transform: translateY(10px) scale(0.95);
        transition: opacity 0.5s ease, transform 0.5s ease;
        transition-delay: 0.5s;
    }

    .whatsappBlue-finalCta_visual.is-visible .whatsappBlue-finalCta_business {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .whatsappBlue-finalCta_business-avatar {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--wa-navy);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        flex-shrink: 0;
    }

    .whatsappBlue-finalCta_business-info strong {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 13.5px;
        font-weight: 700;
        color: var(--wa-text-primary);
    }

    .whatsappBlue-finalCta_miniTick {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: var(--wa-blue);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 8px;
    }

    .whatsappBlue-finalCta_business-info small {
        font-size: 11.5px;
        color: var(--wa-text-muted);
    }

    /* floating trust card */

    .whatsappBlue-finalCta_float {
        position: absolute;
        bottom: 8%;
        right: -6%;
        display: flex;
        align-items: center;
        gap: 12px;
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.14);
        backdrop-filter: blur(8px);
        border-radius: 16px 16px 4px 16px;
        padding: 12px 16px;
        opacity: 0;
        transform: translateY(10px) scale(0.95);
        transition: opacity 0.5s ease, transform 0.5s ease;
        transition-delay: 0.7s;
    }

    .whatsappBlue-finalCta_visual.is-visible .whatsappBlue-finalCta_float {
        opacity: 1;
        transform: translateY(0) scale(1);
    }

    .whatsappBlue-finalCta_float-icon {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: var(--wa-gradient-blue);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 13px;
        flex-shrink: 0;
    }

    .whatsappBlue-finalCta_float-content strong {
        display: block;
        font-size: 12.5px;
        font-weight: 700;
        color: #fff;
    }

    .whatsappBlue-finalCta_float-content span {
        font-size: 11px;
        color: #94A3B8;
    }

    /* small decorative tick */

    .whatsappBlue-finalCta_smallTick {
        position: absolute;
        top: 12%;
        right: 8%;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: var(--wa-blue);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        opacity: 0;
        transform: scale(0.7);
        transition: opacity 0.5s ease, transform 0.5s ease;
        transition-delay: 0.9s;
    }

    .whatsappBlue-finalCta_visual.is-visible .whatsappBlue-finalCta_smallTick {
        opacity: 1;
        transform: scale(1);
    }

    /* ---------- Disclaimer ---------- */

    .whatsappBlue-finalCta_disclaimer {
        display: flex;
        gap: 14px;
        align-items: flex-start;
        max-width: 780px;
        margin: 0 auto;
        padding: 20px 24px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--wa-radius-md);
    }

    .whatsappBlue-finalCta_disclaimer i {
        color: var(--wa-blue-light);
        font-size: 15px;
        padding-top: 2px;
        flex-shrink: 0;
    }

    .whatsappBlue-finalCta_disclaimer p {
        font-size: 13px;
        line-height: 1.7;
        color: #64748B;
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 960px) {
        .whatsappBlue-finalCta_wrapper {
            grid-template-columns: 1fr;
            gap: 60px;
        }

        .whatsappBlue-finalCta_visual {
            min-height: 300px;
        }

        .whatsappBlue-finalCta_business,
        .whatsappBlue-finalCta_float {
            position: static;
            margin-top: 16px;
            transform: none;
        }

        .whatsappBlue-finalCta_smallTick {
            display: none;
        }
    }

    @media (max-width: 560px) {
        .whatsappBlue-finalCta {
            padding: 90px 0 70px;
        }

        .whatsappBlue-finalCta_actions {
            flex-direction: column;
        }

        .whatsappBlue-finalCta_btn {
            justify-content: center;
            width: 100%;
        }
    }
</style>


<section class="whatsappBlue-finalCta" id="whatsappBlueFinalCta">

    <div class="whatsappBlue-finalCta_bg">
        <span class="whatsappBlue-finalCta_circle circle-1"></span>
        <span class="whatsappBlue-finalCta_circle circle-2"></span>
        <span class="whatsappBlue-finalCta_circle circle-3"></span>
    </div>

    <div class="container">

        <div class="whatsappBlue-finalCta_wrapper">

            <div class="whatsappBlue-finalCta_content">

                <span class="whatsappBlue-finalCta_badge">
                    <i class="fa-solid fa-circle-check"></i>
                    Build a more trusted presence
                </span>

                <h2 class="whatsappBlue-finalCta_title">
                    Ready to put your
                    <span>business on the map?</span>
                </h2>

                <p class="whatsappBlue-finalCta_description">
                    Get expert guidance for your WhatsApp verification
                    journey and prepare your business for a more
                    professional customer communication experience.
                </p>

                <div class="whatsappBlue-finalCta_actions">
                    <a href="#contact" class="whatsappBlue-finalCta_btn primary">
                        Start your verification
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="tel:+919999999999" class="whatsappBlue-finalCta_btn secondary">
                        <i class="fa-solid fa-phone"></i>
                        Talk to an expert
                    </a>
                </div>

                <div class="whatsappBlue-finalCta_trust">
                    <div class="whatsappBlue-finalCta_trustItem"><i class="fa-solid fa-check"></i><span>Expert guidance</span></div>
                    <div class="whatsappBlue-finalCta_trustItem"><i class="fa-solid fa-check"></i><span>Transparent process</span></div>
                    <div class="whatsappBlue-finalCta_trustItem"><i class="fa-solid fa-check"></i><span>No approval guarantees</span></div>
                </div>

            </div>


            <div class="whatsappBlue-finalCta_visual" id="whatsappBlueFinalVisual">

                <div class="whatsappBlue-finalCta_glow"></div>

                <div class="whatsappBlue-finalCta_orb">
                    <div class="whatsappBlue-finalCta_orb-ring ring-1"></div>
                    <div class="whatsappBlue-finalCta_orb-ring ring-2"></div>
                    <div class="whatsappBlue-finalCta_tick"><i class="fa-solid fa-check"></i></div>
                </div>

                <div class="whatsappBlue-finalCta_business">
                    <div class="whatsappBlue-finalCta_business-avatar"><i class="fa-solid fa-building"></i></div>
                    <div class="whatsappBlue-finalCta_business-info">
                        <strong>Your Business <span class="whatsappBlue-finalCta_miniTick"><i class="fa-solid fa-check"></i></span></strong>
                        <small>Verified business presence</small>
                    </div>
                </div>

                <div class="whatsappBlue-finalCta_float">
                    <div class="whatsappBlue-finalCta_float-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="whatsappBlue-finalCta_float-content">
                        <strong>Trust signal</strong>
                        <span>Professional presence</span>
                    </div>
                </div>

                <div class="whatsappBlue-finalCta_smallTick"><i class="fa-solid fa-check"></i></div>

            </div>

        </div>


        <!-- <div class="whatsappBlue-finalCta_disclaimer">
            <i class="fa-solid fa-circle-info"></i>
            <p>
                WhatsApp verification eligibility and approval are
                determined by WhatsApp and Meta according to their
                applicable policies and review criteria. King Digital
                provides assistance and guidance but cannot guarantee
                approval.
            </p>
        </div> -->

    </div>

</section>


<script>
    (function() {
        var visual = document.getElementById('whatsappBlueFinalVisual');
        if (!visual || typeof IntersectionObserver === 'undefined') return;

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    visual.classList.add('is-visible');
                    observer.unobserve(visual);
                }
            });
        }, {
            threshold: 0.3
        });

        observer.observe(visual);
    })();
</script>