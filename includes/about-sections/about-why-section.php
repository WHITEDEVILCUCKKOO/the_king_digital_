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

    .about-why {
        background: var(--color-bg-muted);
        padding: 100px 40px;
        overflow: hidden;
    }

    .about-why_heading {
        max-width: 700px;
        margin: 0 auto 60px;
        text-align: center;
    }

    .about-why_heading span {
        display: inline-block;
        padding: 6px 18px;
        margin-bottom: 16px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
        color: var(--color-primary-dark);
        background: rgba(244, 123, 32, 0.1);
        border-radius: var(--radius-full);
    }

    .about-why_heading span::before {
        content: "KingDigital";
    }

    .about-why_heading h1 {
        font-size: 42px;
        font-weight: 700;
        margin: 0 0 10px;
        line-height: 1.2;
        background: var(--gradient-brand-reverse);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }


    .about-why_content {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 70px;
        align-items: center;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity var(--transition-slow), transform var(--transition-slow);
    }

    .about-why_content.in-view {
        opacity: 1;
        transform: translateY(0);
    }

    .about-why_content-visual {
        position: relative;
    }

    .about-why_content-visual::before {
        content: "";
        position: absolute;
        inset: -20px;
        background: var(--gradient-glow);
        border-radius: var(--radius-xl);
        z-index: 0;
    }

    .about-why_content-visual-img {
        position: relative;
        z-index: 1;
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-lg);
    }

    .about-why_content-visual-img img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .about-why_content-text h2 {
        font-size: 30px;
        font-weight: 800;
        color: var(--color-text);
        margin: 0 0 20px;
        line-height: 1.3;
    }

    .about-why_content-text h2 span {
        background: var(--gradient-brand);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .about-why_content-text p {
        font-size: 16px;
        line-height: 1.75;
        color: var(--color-text-secondary);
        margin: 0;
    }

    @media (max-width: 900px) {
        .about-why {
            padding: 70px 24px;
        }

        .about-why_heading h1 {
            font-size: 32px;
        }

        .about-why_content {
            grid-template-columns: 1fr;
            gap: 36px;
        }
    }
</style>

<section class="about-why">
    <div class="about-why_heading">
        <span></span>
        <h1>Why Choose Us</h1>
    </div>
    <div class="about-why_content">
        <div class="about-why_content-visual">
            <div class="about-why_content-visual-img">
                <img src="assets/images/about2.png" alt="">
            </div>
        </div>
        <div class="about-why_content-text">
            <h2>Why Choose <span>KingDigital</span></h2>
            <p>King Digital Private Limited lays equal emphasis on the core values of dedication and a united effort towards achieving the goals regardless of whether those goals are set on a long term or short term basis. We believe in emerging as a knowledge based enterprise with an emphasis on making our ultimate vision a reality.</p><br>
            <p>In addition to the convenient web and marketing solutions that we provide, there are other ways in which we extend our help to all our clients. Not only can they turn to us for a round the clock support for any of the features that they have paid for but they can also ask us for making any changes or updates in case they are not satisfied with any of our services which they have opted for. Our efforts are directed towards building up the strength of the organisations who choose to believe in us.</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const aboutContent1 = document.querySelector('.about-why_content-visual');
        const aboutContent2 = document.querySelector('.about-why_content-text');
        const aboutWhyContent = document.querySelector('.about-why_content');

        if (aboutContent1 || aboutContent2 || aboutWhyContent) {
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
            if (aboutWhyContent) revealObserver.observe(aboutWhyContent);
        }
    });
</script>