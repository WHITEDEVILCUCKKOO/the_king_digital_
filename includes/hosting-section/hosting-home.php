<style>
    :root {

        /* ========================================
       PRIMARY — ORANGE
        ======================================== */

        --host-primary: #F97316;
        --host-primary-light: #FB923C;
        --host-primary-dark: #EA580C;

        --host-primary-soft: #FFF7ED;


        /* ========================================
       SECONDARY — BLUE
       Used sparingly for technology
        ======================================== */

        --host-secondary: #2563EB;
        --host-secondary-light: #60A5FA;
        --host-secondary-dark: #1D4ED8;

        --host-secondary-soft: #EFF6FF;


        /* ========================================
       DARK INFRASTRUCTURE
        ======================================== */

        --host-dark: #111827;
        --host-dark-2: #1F2937;
        --host-dark-card: #273449;


        /* ========================================
       BACKGROUNDS
        ======================================== */

        --host-bg: #FFFFFF;
        --host-bg-soft: #FAFAF9;
        --host-bg-orange: #FFF7ED;
        --host-bg-blue: #F8FAFF;


        /* ========================================
       TEXT
        ======================================== */

        --host-text: #111827;
        --host-text-secondary: #374151;
        --host-text-muted: #6B7280;

        --host-white: #FFFFFF;


        /* ========================================
       BORDERS
        ======================================== */

        --host-border: #E5E7EB;
        --host-border-orange: #FED7AA;
        --host-border-blue: #BFDBFE;


        /* ========================================
       STATUS
        ======================================== */

        --host-success: #16A34A;
        --host-warning: #F59E0B;
        --host-danger: #DC2626;


        /* ========================================
       GRADIENTS
        ======================================== */

        /* Main orange gradient */
        --host-gradient: linear-gradient(135deg,
                #F97316,
                #EA580C);

        /* Orange → subtle blue */
        --host-gradient-tech: linear-gradient(135deg,
                #F97316 0%,
                #F97316 65%,
                #2563EB 100%);

        /* Soft section background */
        --host-gradient-soft: linear-gradient(135deg,
                #FFF7ED,
                #FFFFFF);


        /* ========================================
       SHADOWS
        ======================================== */

        --host-shadow-sm:
            0 2px 8px rgba(17, 24, 39, 0.05);

        --host-shadow-md:
            0 10px 30px rgba(17, 24, 39, 0.08);

        --host-shadow-lg:
            0 20px 50px rgba(249, 115, 22, 0.12);

        --host-shadow-orange:
            0 12px 30px rgba(249, 115, 22, 0.20);


        /* ========================================
       RADIUS
        ======================================== */

        --host-radius-sm: 10px;
        --host-radius-md: 16px;
        --host-radius-lg: 24px;
        --host-radius-xl: 32px;


        /* ========================================
       LAYOUT
        ======================================== */

        --host-container: 1240px;

        --host-section-space:
            clamp(70px, 8vw, 120px);
    }


    /* ========================================
   HOSTING HERO
    ======================================== */

    .host-hero {
        position: relative;
        padding: 20px 0 40px;
        overflow: hidden;
        background: var(--host-bg);
    }

    /* subtle dot-grid backdrop for a modern SaaS feel */
    .host-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 0;
        background-image: radial-gradient(circle, var(--host-border) 1px, transparent 1px);
        background-size: 26px 26px;
        -webkit-mask-image: radial-gradient(ellipse 70% 60% at 30% 20%, #000 0%, transparent 72%);
        mask-image: radial-gradient(ellipse 70% 60% at 30% 20%, #000 0%, transparent 72%);
        opacity: .6;
    }

    .host-hero_container {
        position: relative;
        z-index: 1;
        width: min(calc(100% - 48px),
                var(--host-container));
        margin: 0 auto;
        display: grid;
        grid-template-columns:
            minmax(0, 0.95fr) minmax(0, 1.05fr);
        align-items: center;
        gap: 50px;
    }

    /* ========================================
   HERO CONTENT
    ======================================== */

    .host-hero_content {
        position: relative;
        z-index: 2;
    }


    /* Badge */

    .host-hero_badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        padding: 8px 14px;

        border: 1px solid var(--host-border-orange);

        border-radius: 999px;

        background: var(--host-bg-orange);

        color: var(--host-primary-dark);

        font-size: 12px;
        font-weight: 800;

        text-transform: uppercase;
        letter-spacing: 0.04em;

        opacity: 0;
        animation: hostRise .6s ease forwards;
    }

    .host-hero_badge i {
        font-size: 11px;
        animation: hostPulse 2s ease-in-out infinite;
    }


    /* Heading */

    .host-hero_title {
        max-width: 650px;

        margin: 22px 0 20px;

        color: var(--host-text);

        font-size: clamp(44px, 5vw, 68px);

        line-height: 1.04;

        letter-spacing: -0.045em;

        font-weight: 800;

        opacity: 0;
        animation: hostRise .6s ease .08s forwards;
    }

    .host-hero_title span {
        background: var(--host-gradient);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }


    /* Description */

    .host-hero_description {
        max-width: 570px;

        margin: 0 0 30px;

        color: var(--host-text-muted);

        font-size: 16px;

        line-height: 1.7;

        opacity: 0;
        animation: hostRise .6s ease .16s forwards;
    }

    /* ========================================
   HERO BUTTONS
    ======================================== */

    .host-hero_actions {
        display: flex;
        align-items: center;
        gap: 12px;

        flex-wrap: wrap;

        opacity: 0;
        animation: hostRise .6s ease .24s forwards;
    }


    .host-btn {
        min-height: 52px;

        padding: 0 21px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 9px;

        border-radius: 11px;

        font-size: 13px;
        font-weight: 700;

        text-decoration: none;

        transition:
            transform 0.25s ease,
            box-shadow 0.25s ease,
            background 0.25s ease;
    }


    .host-btn_primary {
        color: var(--host-white);

        background: var(--host-gradient);
        background-size: 160% 160%;
        background-position: 0% 50%;

        box-shadow: var(--host-shadow-orange);
    }


    .host-btn_secondary {
        color: var(--host-text);

        background: var(--host-white);

        border: 1px solid var(--host-border);
    }


    .host-btn:hover {
        transform: translateY(-3px);
    }


    .host-btn_primary:hover {
        background-position: 100% 50%;

        box-shadow:
            0 16px 34px rgba(249, 115, 22, 0.3);
    }

    .host-btn_secondary:hover {
        border-color: var(--host-border-orange);
        color: var(--host-primary-dark);
    }

    .host-btn_primary i {
        transition: transform .3s ease;
    }

    .host-btn_primary:hover i {
        transform: translateX(3px);
    }

    /* ========================================
   HERO TRUST
    ======================================== */

    .host-hero_trust {
        display: flex;
        align-items: center;
        gap: 13px;

        margin-top: 30px;

        opacity: 0;
        animation: hostRise .6s ease .32s forwards;
    }


    .host-hero_avatars {
        display: flex;
        align-items: center;
    }


    .host-hero_avatars span {
        width: 36px;
        height: 36px;

        margin-left: -9px;

        overflow: hidden;

        border: 3px solid var(--host-white);

        border-radius: 50%;

        background: var(--host-bg-orange);

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 11px;
        font-weight: 700;
        color: var(--host-primary-dark);
    }


    .host-hero_avatars span:first-child {
        margin-left: 0;
    }


    .host-hero_avatars img {
        width: 100%;
        height: 100%;

        object-fit: cover;
    }


    .host-hero_trust_text {
        display: flex;
        flex-direction: column;

        gap: 2px;
    }


    .host-hero_trust_text strong {
        color: var(--host-text);

        font-size: 14px;
    }


    .host-hero_trust_text span {
        color: var(--host-text-muted);

        font-size: 11px;
    }

    /* ========================================
   HERO VISUAL
    ======================================== */

    .host-hero_visual {
        position: relative;

        min-height: 560px;

        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* Glow */

    .host-hero_glow {
        position: absolute;

        width: 470px;
        height: 470px;

        border-radius: 50%;

        background:
            radial-gradient(circle,
                rgba(249, 115, 22, 0.18) 0%,
                rgba(37, 99, 235, 0.08) 45%,
                transparent 74%);

        filter: blur(8px);

        animation: hostGlowPulse 6s ease-in-out infinite;
    }

    /* ========================================
   CLOUD
    ======================================== */

    .host-cloud {
        position: relative;

        z-index: 2;

        width: 360px;

        opacity: 0;
        animation: hostScaleIn .7s cubic-bezier(.2, .8, .2, 1) .2s forwards;
    }


    .host-cloud_shape {
        position: relative;
        height: 220px;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .host-cloud_shape>i {
        position: absolute;

        color: var(--host-primary-light);

        font-size: 250px;

        filter:
            drop-shadow(0 18px 25px rgba(249, 115, 22, 0.22));

        animation: hostFloat 5s ease-in-out infinite;
    }


    .host-cloud_lock {
        position: relative;
        z-index: 2;
        width: 62px;
        height: 62px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid var(--host-primary);
        border-radius: 18px;
        background: var(--host-white);
        color: var(--host-secondary);
        box-shadow: var(--host-shadow-md);
        animation: hostFloat 5s ease-in-out infinite;
        animation-delay: .3s;
    }

    /* ========================================
   SERVERS
    ======================================== */

    .host-servers {
        position: relative;

        z-index: 3;

        display: flex;
        justify-content: center;

        gap: 12px;

        margin-top: -40px;
    }


    .host-server {
        width: 92px;
        height: 105px;

        padding: 15px 12px;

        display: flex;
        flex-direction: column;

        justify-content: center;

        gap: 10px;

        border: 1px solid var(--host-border);

        border-radius: 10px;

        background:
            linear-gradient(145deg,
                #FFFFFF,
                #FFF3E6);

        box-shadow: var(--host-shadow-lg);

        opacity: 0;
        transform: translateY(16px);
        animation: hostRiseUp .55s ease forwards;
        transition: transform .35s ease, box-shadow .35s ease;
    }

    .host-server:hover {
        transform: translateY(-5px);
        box-shadow: 0 24px 40px rgba(249, 115, 22, .2);
    }

    .host-server:nth-child(1) {
        animation-delay: .5s;
    }

    .host-server:nth-child(2) {
        animation-delay: .6s;
    }

    .host-server:nth-child(3) {
        animation-delay: .7s;
    }


    .host-server span {
        display: block;

        width: 100%;
        height: 7px;

        border-radius: 4px;

        background: var(--host-primary);
    }


    .host-server span:nth-child(2) {
        opacity: 0.65;
    }


    .host-server span:nth-child(3) {
        opacity: 0.35;
    }

    /* ========================================
   INFRASTRUCTURE NODES
    ======================================== */

    .host-node {
        position: absolute;

        z-index: 4;

        min-width: 105px;

        padding: 10px 14px;

        display: flex;
        flex-direction: column;
        align-items: center;

        gap: 7px;

        border: 1px solid var(--host-border);

        border-radius: 12px;

        background: var(--host-white);

        box-shadow: var(--host-shadow-md);

        opacity: 0;
        animation: hostScaleIn .5s cubic-bezier(.2, .8, .2, 1) forwards;
        transition: transform .35s ease, box-shadow .35s ease;
    }

    .host-node:hover {
        transform: translateY(-4px);
        box-shadow: 0 18px 32px rgba(17, 24, 39, .14);
    }


    .host-node_icon {
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 10px;

        background: var(--host-bg-orange);

        color: var(--host-primary);

        font-size: 15px;
    }


    .host-node span {
        color: var(--host-text);

        font-size: 11px;
        font-weight: 700;
    }


    .host-node--server {
        left: 5%;
        bottom: 100px;
        animation-delay: .55s;
    }


    .host-node--database {
        left: 42%;
        bottom: 35px;
        animation-delay: .68s;
    }


    .host-node--cdn {
        right: 3%;
        bottom: 100px;
        animation-delay: .8s;
    }

    /* ========================================
   FLOATING CARDS
    ======================================== */

    .host-floating_card {
        position: absolute;

        z-index: 5;

        display: flex;
        align-items: center;

        gap: 10px;

        padding: 12px 15px;

        border: 1px solid var(--host-border);

        border-radius: 13px;

        background: rgba(255, 255, 255, 0.94);

        box-shadow: var(--host-shadow-md);

        backdrop-filter: blur(10px);

        opacity: 0;
        animation: hostCardIn .6s cubic-bezier(.2, .8, .2, 1) forwards, hostFloat 5s ease-in-out infinite;
        transition: transform .35s ease, box-shadow .35s ease;
    }

    .host-floating_card:hover {
        transform: translateY(-6px) !important;
        box-shadow: 0 20px 36px rgba(17, 24, 39, .16);
    }


    .host-floating_icon {
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 10px;

        background: var(--host-bg-orange);

        color: var(--host-primary);

        font-size: 15px;
    }


    .host-floating_card div:last-child {
        display: flex;
        flex-direction: column;

        gap: 2px;
    }


    .host-floating_card strong {
        color: var(--host-text);

        font-size: 13px;
    }


    .host-floating_card span {
        color: var(--host-text-muted);

        font-size: 10px;
    }


    .host-floating_card--uptime {
        top: 105px;
        left: 2%;
        animation-delay: .3s, 1.2s;
    }


    .host-floating_card--support {
        top: 170px;
        right: 0;
        animation-delay: .45s, 1.6s;
    }


    .host-floating_card--speed {
        top: 45px;
        right: 12%;
        animation-delay: .6s, 2s;
    }

    /* ========================================
   KEYFRAMES
    ======================================== */

    @keyframes hostRise {
        from {
            opacity: 0;
            transform: translateY(14px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes hostRiseUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes hostScaleIn {
        from {
            opacity: 0;
            transform: scale(.85);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes hostCardIn {
        from {
            opacity: 0;
            transform: translateY(10px) scale(.92);
        }

        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    @keyframes hostFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-9px);
        }
    }

    @keyframes hostGlowPulse {

        0%,
        100% {
            transform: scale(1);
            opacity: .85;
        }

        50% {
            transform: scale(1.08);
            opacity: 1;
        }
    }

    @keyframes hostPulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: .45;
        }
    }

    /* ========================================
   RESPONSIVE
    ======================================== */

    @media (max-width: 1000px) {

        .host-hero {
            padding: 70px 0;
        }

        .host-hero_container {
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .host-hero_content {
            text-align: center;
        }

        .host-hero_badge,
        .host-hero_actions,
        .host-hero_trust {
            justify-content: center;
        }

        .host-hero_title,
        .host-hero_description {
            margin-left: auto;
            margin-right: auto;
        }

        .host-hero_visual {
            min-height: 500px;
        }
    }


    @media (max-width: 600px) {

        .host-hero {
            padding: 55px 0 40px;
        }

        .host-hero_container {
            width: min(calc(100% - 30px),
                    var(--host-container));
        }

        .host-hero_title {
            font-size: clamp(38px, 11vw, 52px);
        }

        .host-hero_description {
            font-size: 14px;
        }

        .host-btn {
            width: 100%;
        }

        .host-hero_actions {
            width: 100%;
            max-width: 360px;

            margin-left: auto;
            margin-right: auto;
        }

        .host-hero_visual {
            display: none;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .host-hero_badge,
        .host-hero_title,
        .host-hero_description,
        .host-hero_actions,
        .host-hero_trust,
        .host-cloud,
        .host-server,
        .host-node,
        .host-floating_card {
            opacity: 1;
            transform: none;
            animation: none;
        }

        .host-hero_glow,
        .host-cloud_shape>i,
        .host-cloud_lock,
        .host-hero_badge i {
            animation: none;
        }
    }
</style>

<section class="host-hero">
    <div class="host-hero_container">
        <!-- ========================================
             HERO CONTENT
        ========================================= -->
        <div class="host-hero_content">
            <span class="host-hero_badge">
                <i class="fa-solid fa-shield-halved"></i>
                Reliable. Secure. Scalable.
            </span>
            <h1 class="host-hero_title">
                Powerful Hosting
                <br>
                & <span>Cloud Solutions</span>
                <br>
                For Your Business
            </h1>
            <p class="host-hero_description">
                Blazing-fast servers, 99.99% uptime and
                enterprise-grade security to keep your
                websites and applications running smoothly,
                24/7.
            </p>
            <!-- Buttons -->
            <div class="host-hero_actions">
                <a href="#" class="host-btn host-btn_primary">
                    View Hosting Plans
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="#" class="host-btn host-btn_secondary">
                    Talk To An Expert
                    <i class="fa-regular fa-headset"></i>
                </a>
            </div>
            <!-- Trust -->
            <div class="host-hero_trust">
                <div class="host-hero_avatars">
                    <span>
                        <img src="assets/images/hosting/avatars/user-1.jpg" alt="">
                    </span>
                    <span>
                        <img src="assets/images/hosting/avatars/user-2.jpg" alt="">
                    </span>
                    <span>
                        <img src="assets/images/hosting/avatars/user-3.jpg" alt="">
                    </span>
                    <span>
                        <img src="assets/images/hosting/avatars/user-4.jpg" alt="">
                    </span>
                    <span>
                        <img src="assets/images/hosting/avatars/user-5.jpg" alt="">
                    </span>
                </div>
                <div class="host-hero_trust_text">
                    <strong>10,000+</strong>
                    <span>Happy Customers</span>
                </div>
            </div>
        </div>

        <!-- ========================================
             HERO VISUAL
        ========================================= -->

        <div class="host-hero_visual">
            <!-- Background glow -->
            <div class="host-hero_glow"></div>
            <!-- Uptime Card -->
            <div class="host-floating_card host-floating_card--uptime">
                <div class="host-floating_icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div>
                    <strong>99.99%</strong>
                    <span>Uptime Guarantee</span>
                </div>
            </div>
            <!-- Main Cloud -->
            <div class="host-cloud">
                <div class="host-cloud_shape">
                    <i class="fa-solid fa-cloud"></i>
                    <div class="host-cloud_lock">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                </div>
                <!-- Servers -->
                <div class="host-servers">
                    <div class="host-server">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="host-server">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="host-server">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- Infrastructure Nodes -->
            <div class="host-node host-node--server">
                <div class="host-node_icon">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <span>Web Server</span>
            </div>
            <div class="host-node host-node--database">
                <div class="host-node_icon">
                    <i class="fa-solid fa-database"></i>
                </div>
                <span>Database</span>
            </div>
            <div class="host-node host-node--cdn">
                <div class="host-node_icon">
                    <i class="fa-solid fa-network-wired"></i>
                </div>
                <span>CDN</span>
            </div>
            <!-- Support Card -->
            <div class="host-floating_card host-floating_card--support">
                <div class="host-floating_icon">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <div>
                    <strong>24/7/365</strong>
                    <span>Expert Support</span>
                </div>
            </div>
            <!-- Speed Card -->
            <div class="host-floating_card host-floating_card--speed">
                <div class="host-floating_icon">
                    <i class="fa-solid fa-gauge-high"></i>
                </div>
                <div>
                    <strong>Blazing Fast</strong>
                    <span>NVMe SSD Storage</span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Fallback avatars since /assets/images/hosting/avatars/*.jpg aren't present here.
    // Safe to remove once your real customer photos are in place.
    document.querySelectorAll('.host-hero_avatars img').forEach(function(img, i) {
        img.addEventListener('error', function() {
            var wrap = this.closest('span');
            wrap.textContent = '';
            wrap.appendChild(document.createTextNode('★'.slice(0, 0)));
            wrap.style.background = i % 2 ? 'var(--host-bg-orange)' : 'var(--host-bg-blue)';
            wrap.style.color = i % 2 ? 'var(--host-primary-dark)' : 'var(--host-secondary-dark)';
            wrap.textContent = String.fromCharCode(65 + i);
            this.remove();
        });
    });
</script>