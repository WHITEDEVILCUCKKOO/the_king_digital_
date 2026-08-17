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

    .about-testimonial {
        background: var(--color-bg);
        padding: 100px 40px;
    }

    .about-testimonial_content {
        max-width: 1200px;
        margin: 0 auto;
        overflow: hidden;
    }

    .about-testimonial_content-heading h1 {
        font-size: 30px;
        font-weight: 800;
        color: var(--color-text);
        margin: 0 0 20px;
        line-height: 1.3;
    }

    .about-testimonial_content-heading h1 span {
        background: var(--gradient-brand);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .about-testimonial_content-grid {
        display: flex;
        gap: 24px;
        transition: transform var(--transition-slow);
        will-change: transform;
    }

    .about-testimonial_content-card {
        flex: 0 0 calc((100% - 48px) / 3);
        background: var(--color-bg-soft);
        border: 1px solid var(--color-border);
        border-radius: var(--radius-lg);
        padding: 28px;
        box-sizing: border-box;
    }

    .testimonial-heading {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 18px;
    }

    .testimonial-heading span {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: var(--gradient-primary);
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-text-light);
        font-size: 12px;
        font-weight: 600;
        overflow: hidden;
    }

    .testimonial-heading span img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
    }

    .testimonial-heading h2 {
        font-size: 16px;
        font-weight: 700;
        color: var(--color-text);
        margin: 0;
    }

    .testimonial-content p {
        font-size: 14px;
        line-height: 1.75;
        color: var(--color-text-secondary);
        margin: 0 0 14px;
    }

    .testimonial-content > span {
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.3px;
        text-transform: uppercase;
        color: var(--color-primary-dark);
    }

    .about-testimonial_dots {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-top: 36px;
    }

    .about-testimonial_dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--color-border);
        cursor: pointer;
        transition: background var(--transition-normal), transform var(--transition-normal);
    }

    .about-testimonial_dot.active {
        background: var(--color-primary);
        transform: scale(1.3);
    }

    @media (max-width: 900px) {
        .about-testimonial_content-card {
            flex: 0 0 calc((100% - 24px) / 2);
        }
    }

    @media (max-width: 640px) {
        .about-testimonial {
            padding: 70px 24px;
        }

        .about-testimonial_content-card {
            flex: 0 0 100%;
        }
    }
</style>

<section class="about-testimonial">
    <div class="about-testimonial_content">
        <div class="about-testimonial_content-heading">
            <h1>What Client Say About <span>KingDigital</span></h1>
        </div>
        <div class="about-testimonial_content-grid" id="atTrack">
            <div class="about-testimonial_content-card">
                <div class="testimonial-heading">
                    <span>RS</span>
                    <h2>Rahul Sharma</h2>
                </div>
                <div class="testimonial-content">
                    <p>King Digital transformed our online presence completely. Their team delivered a website and marketing strategy that actually brought in real leads within weeks.</p>
                    <span>Founder, Sharma Enterprises</span>
                </div>
            </div>
            <div class="about-testimonial_content-card">
                <div class="testimonial-heading">
                    <span>PK</span>
                    <h2>Priya Kapoor</h2>
                </div>
                <div class="testimonial-content">
                    <p>The WhatsApp API and bulk SMS setup was seamless. Support has been consistently responsive whenever we've needed changes or troubleshooting.</p>
                    <span>Marketing Head, Kapoor Retail</span>
                </div>
            </div>
            <div class="about-testimonial_content-card">
                <div class="testimonial-heading">
                    <span>AV</span>
                    <h2>Amit Verma</h2>
                </div>
                <div class="testimonial-content">
                    <p>Our SEO rankings improved dramatically in just three months. The team clearly knows what they're doing and communicates progress clearly.</p>
                    <span>CEO, Verma Logistics</span>
                </div>
            </div>
            <div class="about-testimonial_content-card">
                <div class="testimonial-heading">
                    <span>SN</span>
                    <h2>Sneha Nair</h2>
                </div>
                <div class="testimonial-content">
                    <p>Hosting has been rock solid with zero downtime issues since we switched. Their cloud servers gave us the reliability our old provider never did.</p>
                    <span>Operations Lead, Nair Textiles</span>
                </div>
            </div>
        </div>
        <div class="about-testimonial_dots" id="atDots"></div>
    </div>
</section>

<script>
    (function() {
        "use strict";

        var atTrack = document.getElementById('atTrack');
        var atDotsWrap = document.getElementById('atDots');
        var atOriginalCards = Array.prototype.slice.call(atTrack.children);
        var atTotal = atOriginalCards.length;
        var atInterval = 3500;
        var atIndex = 0;
        var atTimer = null;

        function atCardsPerView() {
            if (window.innerWidth <= 640) return 1;
            if (window.innerWidth <= 900) return 2;
            return 3;
        }

        atOriginalCards.forEach(function(card, i) {
            var dot = document.createElement('div');
            dot.className = 'about-testimonial_dot' + (i === 0 ? ' active' : '');
            dot.addEventListener('click', function() {
                atIndex = i;
                atGoTo(atIndex);
                atResetTimer();
            });
            atDotsWrap.appendChild(dot);
        });

        var atClonesFront = atOriginalCards.slice(0, atCardsPerView()).map(function(c) {
            return c.cloneNode(true);
        });
        atClonesFront.forEach(function(c) {
            atTrack.appendChild(c);
        });

        function atUpdateDots() {
            var dots = atDotsWrap.children;
            for (var i = 0; i < dots.length; i++) {
                dots[i].classList.toggle('active', i === (atIndex % atTotal));
            }
        }

        function atGoTo(i, animate) {
            var perView = atCardsPerView();
            var cardWidth = atTrack.children[0].getBoundingClientRect().width;
            var gap = 24;
            var offset = (cardWidth + gap) * i;
            atTrack.style.transition = animate === false ? 'none' : '';
            atTrack.style.transform = 'translateX(-' + offset + 'px)';
            atUpdateDots();
        }

        function atNext() {
            atIndex++;
            atGoTo(atIndex);

            if (atIndex === atTotal) {
                setTimeout(function() {
                    atIndex = 0;
                    atGoTo(atIndex, false);
                }, 350);
            }
        }

        function atResetTimer() {
            clearInterval(atTimer);
            atTimer = setInterval(atNext, atInterval);
        }

        atTrack.parentElement.addEventListener('mouseenter', function() {
            clearInterval(atTimer);
        });

        atTrack.parentElement.addEventListener('mouseleave', function() {
            atResetTimer();
        });

        window.addEventListener('resize', function() {
            atGoTo(atIndex, false);
        });

        atGoTo(0, false);
        atResetTimer();
    })();
</script>