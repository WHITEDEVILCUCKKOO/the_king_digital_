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

        /* Backgrounds */
        --ivr-bg: #F8FAFC;
        --ivr-bg-light: #EEF2FF;
        --ivr-bg-blue: #E5EFFD;
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


    /* //////////////////////////////////// Hero Section Start Here ///////////////////////////////////// */

    .ivr-hero {
        position: relative;
        width: 100%;
        min-height: 578px;
        display: flex;
        align-items: center;
        padding: 35px 80px;
        overflow: hidden;
        background: var(--ivr-bg-blue);
        font-family: "Segoe UI", Roboto, sans-serif;
    }

    #canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .ivr-hero_content {
        position: relative;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 48px;
        max-width: 1200px;
        margin: 0 auto;
        width: 100%;
    }

    .ivr-hero_content-text {
        max-width: 560px;
    }

    .ivr-hero_content-text .eyebrow {
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

    .ivr-hero_content-text .eyebrow i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ivr-gradient-primary);
        display: inline-block;
    }

    .ivr-hero_content-text h1 {
        font-size: clamp(32px, 4vw, 48px);
        line-height: 1.15;
        font-weight: 700;
        margin: 0 0 20px;
        color: var(--ivr-text-primary);
    }

    .ivr-hero_content-text p {
        font-size: 17px;
        line-height: 1.6;
        color: var(--ivr-text-secondary);
        margin: 0 0 32px;
    }

    .ivr-hero_content--cta {
        display: flex;
        gap: 16px;
        flex-wrap: wrap;
    }

    .ivr-hero_content--cta-btn-one,
    .ivr-hero_content--cta-btn-two {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 14px 28px;
        border-radius: var(--ivr-radius-pill);
        font-weight: 600;
        font-size: 15px;
        text-decoration: none;
        transition: transform var(--ivr-transition-fast), box-shadow var(--ivr-transition-fast);
    }

    .ivr-hero_content--cta-btn-one {
        background: var(--ivr-gradient-primary);
        color: var(--ivr-text-light);
        box-shadow: var(--ivr-glow-purple);
    }

    .ivr-hero_content--cta-btn-one:hover {
        transform: translateY(-2px);
        box-shadow: var(--ivr-glow-blue);
    }

    .ivr-hero_content--cta-btn-two {
        background: var(--ivr-card);
        color: var(--ivr-text-primary);
        border: 1px solid var(--ivr-border);
    }

    .ivr-hero_content--cta-btn-two:hover {
        transform: translateY(-2px);
        box-shadow: var(--ivr-shadow-md);
    }

    .ivr-hero_content-visual {
        flex: 0 0 auto;
    }

    .ivr-hero_content-visual--img {
        width: 520px;
        /* max-width: 40vw; */
        border-radius: var(--ivr-radius-lg);
        overflow: hidden;
        box-shadow: var(--ivr-shadow-lg);
        background: var(--ivr-card);
    }

    .ivr-hero_content-visual--img img {
        display: block;
        width: 100%;
        height: auto;
    }

    @media (max-width: 900px) {
        .ivr-hero {
            padding: 90px 20px 40px;
        }

        .ivr-hero_content {
            flex-direction: column;
            text-align: center;
        }

        .ivr-hero_content-text {
            max-width: 100%;
        }

        .ivr-hero_content--cta {
            justify-content: center;
        }

        .ivr-hero_content-visual--img {
            width: 100%;
            max-width: 420px;
        }
    }

    .decor-hero-glow {
        position: absolute;
        top: -180px;
        left: -160px;
        width: 480px;
        height: 480px;
        border-radius: 50%;
        background: var(--ivr-gradient-glow);
        opacity: .18;
        filter: blur(60px);
        z-index: 0;
        pointer-events: none;
        animation: hero-glow-drift 12s ease-in-out infinite;
    }

    @keyframes hero-glow-drift {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        50% {
            transform: translate(30px, 20px) scale(1.08);
        }
    }

    .decor-hero-ring {
        position: absolute;
        top: -90px;
        right: -90px;
        width: 300px;
        height: 300px;
        border: 2px dashed var(--ivr-primary-light, #818CF8);
        border-radius: 50%;
        opacity: .3;
        z-index: 1;
        pointer-events: none;
        animation: hero-ring-spin 20s linear infinite;
    }

    .decor-hero-ring::before {
        content: '';
        position: absolute;
        inset: 34px;
        border: 2px dashed var(--ivr-cyan);
        border-radius: 50%;
        opacity: .6;
    }

    @keyframes hero-ring-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .decor-hero-grid {
        position: absolute;
        bottom: -20px;
        left: -20px;
        width: 260px;
        height: 220px;
        background-image: radial-gradient(circle, var(--ivr-primary) 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        opacity: .28;
        z-index: 0;
        pointer-events: none;
        animation: hero-grid-shift 9s ease-in-out infinite;
    }

    @keyframes hero-grid-shift {

        0%,
        100% {
            background-position: 0 0;
        }

        50% {
            background-position: 8px -8px;
        }
    }

    .decor-hero-orb {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        z-index: 1;
    }

    .decor-hero-orb.o1 {
        width: 14px;
        height: 14px;
        top: 40px;
        right: 70px;
        background: var(--ivr-purple);
        opacity: .5;
        animation: hero-orb-1 5s ease-in-out infinite;
    }

    .decor-hero-orb.o2 {
        width: 9px;
        height: 9px;
        bottom: 100px;
        right: 20px;
        background: var(--ivr-cyan);
        opacity: .5;
        animation: hero-orb-2 6s ease-in-out infinite .3s;
    }

    .decor-hero-orb.o3 {
        width: 20px;
        height: 20px;
        top: 200px;
        right: -10px;
        background: var(--ivr-blue);
        opacity: .3;
        animation: hero-orb-1 7s ease-in-out infinite .6s;
    }

    @keyframes hero-orb-1 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-10px, -14px);
        }
    }

    @keyframes hero-orb-2 {

        0%,
        100% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(-8px, 10px);
        }
    }
</style>

<!-- ////////////////////////////////////////////////// Hero Section //////////////////////////////////////-->
<section class="ivr-hero" id="first-section">
    <div class="decor-hero-glow"></div>
    <div class="decor-hero-ring"></div>
    <div class="decor-hero-grid"></div>
    <div class="decor-hero-orb o1"></div>
    <div class="decor-hero-orb o2"></div>
    <div class="decor-hero-orb o3"></div>
    <!-- <canvas id="canvas"></canvas> -->
    <div class="ivr-hero_content">
        <div class="ivr-hero_content-text">
            <span class="eyebrow"><i></i>IVR, VOICE & TELECOM</span>
            <h1>Power Every Conversation With Intelligent Voice Communication</h1>
            <p>Automate calls, connect customers, and streamline communication with powerful IVR, toll-free, missed-call, OBD voice and shortcode solutions.</p>
            <div class="ivr-hero_content--cta">
                <a href="#" class="ivr-hero_content--cta-btn-one">Get Started</a>
                <a href="#" class="ivr-hero_content--cta-btn-two">Explore More</a>
            </div>
        </div>
        <div class="ivr-hero_content-visual">
            <div class="ivr-hero_content-visual--img" style="background: var(--ivr-bg-blue);">
                <img src="assets/images/ivr1.png" alt="IVR platform preview" onerror="this.closest('.ivr-hero_content-visual--img').style.display='none'">
            </div>
        </div>
    </div>
</section>
<!-- ///////////////////////////////////////// Hero Section End ///////////////////////////////////////////-->

<script>
    (function() {
        const canvas = document.getElementById('canvas');
        const ctx = canvas.getContext('2d');
        const hero = document.querySelector('.ivr-hero');

        let width, height, dots = [],
            rafId = null;

        const SPACING = 20,
            BASE_RADIUS = 1,
            REPEL_RADIUS = 120,
            REPEL_STRENGTH = 40,
            EASE = 0.12;

        const mouse = {
            x: -9999,
            y: -9999
        };

        function resize() {
            width = canvas.width = hero.offsetWidth;
            height = canvas.height = hero.offsetHeight;
            initDots();
        }

        function initDots() {
            dots = [];
            const cols = Math.ceil(width / SPACING) + 1;
            const rows = Math.ceil(height / SPACING) + 1;
            for (let i = 0; i < cols; i++) {
                for (let j = 0; j < rows; j++) {
                    dots.push({
                        baseX: i * SPACING,
                        baseY: j * SPACING,
                        x: i * SPACING,
                        y: j * SPACING
                    });
                }
            }
        }

        function onMouseMove(e) {
            const rect = hero.getBoundingClientRect();
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
        }

        function onMouseLeave() {
            mouse.x = -9999;
            mouse.y = -9999;
        }

        function animate() {
            ctx.clearRect(0, 0, width, height);
            for (const dot of dots) {
                const dx = dot.baseX - mouse.x,
                    dy = dot.baseY - mouse.y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                let targetX = dot.baseX,
                    targetY = dot.baseY;
                if (dist < REPEL_RADIUS) {
                    const force = 1 - dist / REPEL_RADIUS;
                    const angle = Math.atan2(dy, dx);
                    targetX += Math.cos(angle) * force * REPEL_STRENGTH;
                    targetY += Math.sin(angle) * force * REPEL_STRENGTH;
                }
                dot.x += (targetX - dot.x) * EASE;
                dot.y += (targetY - dot.y) * EASE;
                ctx.beginPath();
                ctx.arc(dot.x, dot.y, BASE_RADIUS, 0, Math.PI * 2);
                ctx.fillStyle = '#818CF8';
                ctx.fill();
            }
            rafId = requestAnimationFrame(animate);
        }

        resize();
        window.addEventListener('resize', resize);
        hero.addEventListener('mousemove', onMouseMove);
        hero.addEventListener('mouseleave', onMouseLeave);
        animate();

        // Cleanup if this markup is ever removed from the DOM dynamically
        window.addEventListener('beforeunload', () => {
            if (rafId) cancelAnimationFrame(rafId);
            window.removeEventListener('resize', resize);
        });
    })();
</script>