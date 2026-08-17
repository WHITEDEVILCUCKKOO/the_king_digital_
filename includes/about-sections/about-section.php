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


    .about-section {
        background: var(--color-bg);
        padding: 100px 40px;
        overflow: hidden;
    }

    .about-section_heading {
        max-width: 700px;
        margin: 0 auto 50px;
        text-align: center;
    }

    .about-section_heading h2 {
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--color-secondary-dark);
        margin: 0 auto;
        padding: 5px 15px;
        background: var(--color-primary-light);
        width: fit-content;
        text-align: center;
        border-radius: 20px;
    }

    .about-section_content {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 70px;
        align-items: center;
    }

    .about-section_content-text {
        opacity: 0;
        transform: translateX(-60px);
        transition: opacity var(--transition-slow), transform var(--transition-slow);
    }

    .about-section_content-text.in-view {
        opacity: 1;
        transform: translateX(0);
    }

    .about-section_content-text h2 {
        font-size: 42px;
        font-weight: 800;
        color: var(--color-text);
        margin: 0 0 20px;
        line-height: 1.3;
    }

    .about-section_content-text h2 span {
        background: var(--gradient-brand);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .about-section_content-text p {
        font-size: 16px;
        line-height: 1.75;
        color: var(--color-text-secondary);
        margin: 0;
    }

    .about-section_content-visual {
        position: relative;
        opacity: 0;
        transform: translateX(60px);
        transition: opacity var(--transition-slow), transform var(--transition-slow);
    }

    .about-section_content-visual.in-view {
        opacity: 1;
        transform: translateX(0);
    }

    .about-section_content-visual::before {
        content: "";
        position: absolute;
        inset: -20px;
        background: var(--gradient-glow-secondary);
        border-radius: var(--radius-xl);
        z-index: 0;
    }

    .about-section_content-visual img {
        position: relative;
        z-index: 1;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-lg);
    }

    @media (max-width: 900px) {
        .about-section {
            padding: 70px 24px;
        }

        .about-section_content {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .about-section_content-text,
        .about-section_content-visual {
            transform: translateY(40px);
        }

        .about-section_content-text.in-view,
        .about-section_content-visual.in-view {
            transform: translateY(0);
        }
    }
</style>

<section class="about-section">
    <div class="about-section_heading">
        <h2>About Us</h2>
    </div>
    <div class="about-section_content">
        <div class="about-section_content-text">
            <h2>Know About <span>KingDigital</span></h2>
            <p>King Digital Private Limited is a company that provides online marketing and digital services in Delhi. The company specialises in a range of web development and design processes, technical management of online accounts and digital marketing strategies. We strive to make the optimum use of technology for providing the best when it comes to creating a strong brand awareness for our clients at several levels. King Digital Private Limited ensures that the customers are able to enjoy maximum advantages for the growth and expansion of their businesses</p><br>
            <p>We have some of the best technical experts who are well experienced in their respective domains while possessing the perfect skills that are required at the professional front. Our team has a strong hold over the latest web technology and it is our constant endeavour to come up with the best in terms of quality and commitment. The dedicated team of King Digital Private Limited makes it an utmost priority to keep constant watch over the several online accounts that we manage on popular social networks and on other platforms. We ensure that we are able to exceed the expectations of our clients and also to prove our expertise in all the projects that we undertake.</p>
        </div>
        <div class="about-section_content-visual">
            <img src="assets/images/about1.png" alt="#">
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const revealTargets = document.querySelectorAll(
            '.about-section_content-text, .about-section_content-visual'
        );

        if (!revealTargets.length) return;

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                entry.target.classList.toggle('in-view', entry.isIntersecting);
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -10% 0px'
        });

        revealTargets.forEach((el) => revealObserver.observe(el));
    });
</script>