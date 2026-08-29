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
   HOSTING STATS
    ======================================== */

    .hosting-stats {
        position: relative;
        overflow: hidden;
        background: var(--host-dark);
    }

    .hosting-stats::before,
    .hosting-stats::after {
        content: "";
        position: absolute;
        border-radius: 50%;
        filter: blur(110px);
        opacity: .3;
        pointer-events: none;
    }

    .hosting-stats::before {
        width: 380px;
        height: 380px;
        top: -160px;
        left: -80px;
        background: var(--host-primary);
    }

    .hosting-stats::after {
        width: 340px;
        height: 340px;
        bottom: -170px;
        right: -60px;
        background: var(--host-secondary);
    }

    .hosting-stats_content {
        position: relative;
        z-index: 1;
        max-width: var(--host-container);
        margin: 0 auto;
    }

    .hosting-stats_content-card-contatiner {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
    }

    .hosting-stats_content-card {
        position: relative;
        text-align: center;
        padding: 8px 20px;
        opacity: 0;
        transform: translateY(16px);
        transition: opacity .6s ease, transform .6s ease;
    }

    .hosting-stats_content-card-contatiner.is-visible .hosting-stats_content-card {
        opacity: 1;
        transform: translateY(0);
    }

    .hosting-stats_content-card:nth-child(1) {
        transition-delay: .05s;
    }

    .hosting-stats_content-card:nth-child(2) {
        transition-delay: .15s;
    }

    .hosting-stats_content-card:nth-child(3) {
        transition-delay: .25s;
    }

    .hosting-stats_content-card:nth-child(4) {
        transition-delay: .35s;
    }

    .hosting-stats_content-card:nth-child(5) {
        transition-delay: .45s;
    }

    .hosting-stats_content-card+.hosting-stats_content-card {
        border-left: 1px solid rgba(255, 255, 255, .1);
    }

    .hosting-stats_content-card strong {
        display: block;
        margin-bottom: 8px;
        background: var(--host-gradient-tech);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: clamp(28px, 3vw, 40px);
        font-weight: 800;
        letter-spacing: -0.02em;
        font-variant-numeric: tabular-nums;
    }

    .hosting-stats_content-card p {
        margin: 0;
        color: rgba(255, 255, 255, .62);
        font-size: 13.5px;
        font-weight: 600;
        letter-spacing: .01em;
    }

    /* ========================================
   RESPONSIVE
   Keep 5-column layout at every size
   Only scale the content down
    ======================================== */

    @media (max-width: 900px) {

        .hosting-stats_content {
            padding: 0 20px;
        }

        .hosting-stats_content-card-contatiner {
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 0;
        }

        .hosting-stats_content-card {
            padding: 6px 12px;
        }

        .hosting-stats_content-card strong {
            font-size: 28px;
            margin-bottom: 5px;
        }

        .hosting-stats_content-card p {
            font-size: 11px;
            line-height: 1.3;
        }
    }


    /* ========================================
   MOBILE
    ======================================== */

    @media (max-width: 520px) {

        .hosting-stats_content {
            padding: 0 10px;
        }

        .hosting-stats_content-card-contatiner {
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 0;
        }

        .hosting-stats_content-card {
            padding: 5px 6px;
        }

        .hosting-stats_content-card strong {
            font-size: 16px;
            margin-bottom: 4px;
            letter-spacing: -0.03em;
        }

        .hosting-stats_content-card p {
            font-size: 9px;
            line-height: 1.25;
            white-space: normal;
        }

        .hosting-stats_content-card+.hosting-stats_content-card {
            border-left: 1px solid rgba(255, 255, 255, .1);
        }
    }


    /* ========================================
   VERY SMALL MOBILE
    ======================================== */

    @media (max-width: 380px) {

        .hosting-stats_content {
            padding: 0 6px;
        }

        .hosting-stats_content-card {
            padding: 4px 3px;
        }

        .hosting-stats_content-card strong {
            font-size: 14px;
        }

        .hosting-stats_content-card p {
            font-size: 8px;
            line-height: 1.2;
        }
    }
</style>

<section class="hosting-stats">
    <div class="hosting-stats_content">
        <div class="hosting-stats_content-card-contatiner">
            <div class="hosting-stats_content-card">
                <strong data-count="15000">0+</strong>
                <p>Happy Customers</p>
            </div>
            <div class="hosting-stats_content-card">
                <strong data-count="25000">0+</strong>
                <p>Websites Hosted</p>
            </div>
            <div class="hosting-stats_content-card">
                <strong data-count="99.99">0%</strong>
                <p>Uptime Guarantee</p>
            </div>
            <div class="hosting-stats_content-card">
                <strong data-count="100">0%</strong>
                <p>Secure & Reliable</p>
            </div>
            <div class="hosting-stats_content-card">
                <strong>24/7</strong>
                <p>Expert Support</p>
            </div>
        </div>
    </div>
</section>

<script>
    (function hostingStatsCounter() {
        var root = document.querySelector('.hosting-stats');
        if (!root) return;

        var container = root.querySelector('.hosting-stats_content-card-contatiner');
        if (!container || container.dataset.hostingStatsBound === '1') return;
        container.dataset.hostingStatsBound = '1';

        var targets = Array.prototype.slice.call(container.querySelectorAll('[data-count]'));

        function suffixOf(el) {
            var raw = el.textContent.trim();
            var digits = raw.match(/^[0-9.]+/);
            return digits ? raw.slice(digits[0].length) : raw;
        }

        function decimalsOf(value) {
            var parts = value.split('.');
            return parts.length > 1 ? parts[1].length : 0;
        }

        function formatNumber(value, decimals) {
            return value.toLocaleString(undefined, {
                minimumFractionDigits: decimals,
                maximumFractionDigits: decimals
            });
        }

        function easeOutQuad(t) {
            return 1 - (1 - t) * (1 - t);
        }

        function runCount(el) {
            var target = parseFloat(el.getAttribute('data-count'));
            if (isNaN(target)) return;

            var suffix = suffixOf(el);
            var decimals = decimalsOf(el.getAttribute('data-count'));
            var duration = 1600;
            var startTime = null;

            function frame(now) {
                if (startTime === null) startTime = now;
                var progress = Math.min((now - startTime) / duration, 1);
                var eased = easeOutQuad(progress);
                var current = target * eased;
                el.textContent = formatNumber(Number(current.toFixed(decimals)), decimals) + suffix;
                if (progress < 1) {
                    requestAnimationFrame(frame);
                } else {
                    el.textContent = formatNumber(target, decimals) + suffix;
                }
            }

            requestAnimationFrame(frame);
        }

        function start() {
            container.classList.add('is-visible');
            targets.forEach(runCount);
        }

        if (!('IntersectionObserver' in window)) {
            start();
            return;
        }

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    start();
                    observer.disconnect();
                }
            });
        }, {
            threshold: 0.35
        });

        observer.observe(container);
    })();
</script>