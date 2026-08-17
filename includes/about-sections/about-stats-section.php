<style>
    :root {

        /* ========================================
       BRAND COLORS
         ======================================== */

        --color-primary: #F47B20;
        --color-primary-light: #FF9A4A;
        --color-primary-dark: #D85F0B;

        --color-secondary: #4F7FF7;
        --color-secondary-light: #7FA3FF;
        --color-secondary-dark: #315FCC;


        /* ========================================
       BACKGROUNDS
        ======================================== */

        --color-bg: #FFFFFF;
        --color-bg-soft: #F7F8FA;
        --color-bg-muted: #EEF1F5;

        --color-bg-dark: #1C3D7B;
        --color-bg-dark-soft: #1A2233;


        /* ========================================
       TEXT
        ======================================== */

        --color-text: #171B26;
        --color-text-secondary: #5F6673;
        --color-text-muted: #8A919D;

        --color-text-light: #FFFFFF;
        --color-text-light-secondary: #C4C9D2;


        /* ========================================
       BORDERS
        ======================================== */

        --color-border: #E3E7ED;
        --color-border-dark: #30394A;


        /* ========================================
       PRIMARY GRADIENTS
    ======================================== */

        --gradient-primary:
            linear-gradient(135deg,
                #F47B20 0%,
                #FF9A4A 100%);

        --gradient-primary-dark:
            linear-gradient(135deg,
                #D85F0B 0%,
                #F47B20 100%);


        /* ========================================
       SECONDARY GRADIENTS
    ======================================== */

        --gradient-secondary:
            linear-gradient(135deg,
                #315FCC 0%,
                #4F7FF7 50%,
                #7FA3FF 100%);

        --gradient-secondary-dark:
            linear-gradient(135deg,
                #244BA5 0%,
                #315FCC 100%);


        /* ========================================
       BRAND GRADIENTS
    ======================================== */

        --gradient-brand:
            linear-gradient(135deg,
                #F47B20 0%,
                #FF9A4A 45%,
                #4F7FF7 100%);

        --gradient-brand-reverse:
            linear-gradient(135deg,
                #4F7FF7 0%,
                #7FA3FF 55%,
                #F47B20 100%);


        /* ========================================
       DARK GRADIENTS
    ======================================== */

        --gradient-dark:
            linear-gradient(135deg,
                #111827 0%,
                #1A2233 100%);


        /* ========================================
       GLOW
    ======================================== */

        --gradient-glow:
            radial-gradient(circle,
                rgba(244, 123, 32, 0.16) 0%,
                rgba(244, 123, 32, 0) 70%);

        --gradient-glow-secondary:
            radial-gradient(circle,
                rgba(79, 127, 247, 0.18) 0%,
                rgba(79, 127, 247, 0) 70%);


        /* ========================================
       STATUS COLORS
    ======================================== */

        --color-success: #16A34A;
        --color-warning: #D99100;
        --color-danger: #DC2626;
        --color-info: #4F7FF7;


        /* ========================================
       SHADOWS
    ======================================== */

        --shadow-sm:
            0 2px 8px rgba(15, 23, 42, 0.06);

        --shadow-md:
            0 8px 24px rgba(15, 23, 42, 0.10);

        --shadow-lg:
            0 16px 40px rgba(15, 23, 42, 0.14);

        --shadow-orange:
            0 10px 30px rgba(244, 123, 32, 0.18);

        --shadow-blue:
            0 10px 30px rgba(79, 127, 247, 0.18);


        /* ========================================
       RADIUS
    ======================================== */

        --radius-sm: 6px;
        --radius-md: 10px;
        --radius-lg: 16px;
        --radius-xl: 24px;
        --radius-full: 999px;


        /* ========================================
       TRANSITIONS
    ======================================== */

        --transition-fast: 150ms ease;
        --transition-normal: 250ms ease;
        --transition-slow: 400ms ease;
    }

    .about-stats {
        background: var(--color-bg-dark);
        padding: 40px 20px;
    }

    .about-stats_content {
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        gap: 30px;
    }

    .about-stats_item {
        text-align: left;
    }

    .about-stats_number {
        display: flex;
        align-items: baseline;
        font-size: 40px;
        font-weight: 800;
        color: #ffffff;
        line-height: 1;
        margin: 0 0 14px;
    }

    .about-stats_number .about-count-suffix {
        font-size: 40px;
        font-weight: 800;
        color: #ffffff;
    }

    .about-stats_label {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #8b87a3;
        margin: 0;
    }

    @media (max-width: 900px) {
        .about-stats_number {
            display: flex;
            font-size: 24px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1;
            margin: 0 0 14px;
        }

        .about-stats_number .about-count-suffix {
            font-size: 24px;
            font-weight: 800;
            color: #ffffff;
        }

        .about-stats_label {
            font-size: 8px;
            font-weight: 600;
        }
    }

    @media (max-width: 450px) {
        .about-stats_number {
            display: flex;
            font-size: 12px;
            font-weight: 600;
            color: #ffffff;
            line-height: 1;
            margin: 0 0 14px;
        }

        .about-stats_number .about-count-suffix {
            font-size: 12px;
            font-weight: 600;
            color: #ffffff;
        }

        .about-stats_label {
            font-size: 8px;
            font-weight: 600;
        }
    }
</style>

<section class="about-stats">
    <div class="about-stats_content">
        <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="15000">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Happy Customer Worldwide</p>
        </div>
        <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="7500">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Websites Done</p>
        </div>
        <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="15">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Year of Services</p>
        </div>
        <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="30">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Team Members</p>
        </div>
        <!-- <div class="about-stats_item">
            <p class="about-stats_number"><span class="about-count" data-count="10">0</span><span class="about-count-suffix">+</span></p>
            <p class="about-stats_label">Countries Served</p>
        </div> -->
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const aboutContent1 = document.querySelector('.home-about_content');
        const aboutContent2 = document.querySelector('.home-about_content2');

        if (aboutContent1 || aboutContent2) {
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    entry.target.classList.toggle('in-view', entry.isIntersecting);
                });
            }, {
                threshold: 0.2,
                rootMargin: '0px 0px -10% 0px'
            });

            if (aboutContent1) revealObserver.observe(aboutContent1);
            if (aboutContent2) revealObserver.observe(aboutContent2);
        }

        const counters = document.querySelectorAll(".about-count");

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;

                const counter = entry.target;
                const target = +counter.dataset.count;
                const duration = 2000;
                let startTime = null;

                function tick(timestamp) {
                    if (startTime === null) startTime = timestamp;
                    const elapsed = timestamp - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    const current = Math.floor(progress * target);
                    counter.textContent = current.toLocaleString();

                    if (progress < 1) {
                        requestAnimationFrame(tick);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                }

                requestAnimationFrame(tick);
                counterObserver.unobserve(counter);
            });
        }, {
            threshold: 0.5
        });

        counters.forEach(counter => counterObserver.observe(counter));
    });
</script>