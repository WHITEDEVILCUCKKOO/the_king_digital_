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

        --host-gradient: linear-gradient(135deg, #F97316, #EA580C);
        --host-gradient-tech: linear-gradient(135deg, #F97316 0%, #F97316 65%, #2563EB 100%);
        --host-gradient-soft: linear-gradient(135deg, #FFF7ED, #FFFFFF);


        /* ========================================
       SHADOWS
        ======================================== */

        --host-shadow-sm: 0 2px 8px rgba(17, 24, 39, 0.05);
        --host-shadow-md: 0 10px 30px rgba(17, 24, 39, 0.08);
        --host-shadow-lg: 0 20px 50px rgba(249, 115, 22, 0.12);
        --host-shadow-orange: 0 12px 30px rgba(249, 115, 22, 0.20);


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
        --host-section-space: clamp(70px, 8vw, 120px);
    }

    /* ========================================
       SECTION
       ======================================== */

    .hosting-faq-section {
        background: var(--host-dark);
        background-image:
            radial-gradient(circle at 8% 10%, rgba(249, 115, 22, 0.10), transparent 45%),
            radial-gradient(circle at 95% 85%, rgba(37, 99, 235, 0.12), transparent 45%);
        padding: var(--host-section-space) 24px;
    }

    .hosting-faq-container {
        max-width: var(--host-container);
        margin: 0 auto;
    }

    /* header */

    .hosting-faq-header {
        text-align: center;
        max-width: 600px;
        margin: 0 auto 56px;
    }

    .hosting-faq-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 0.06em;
        color: var(--host-primary-light);
        background: rgba(249, 115, 22, 0.12);
        border: 1px solid rgba(249, 115, 22, 0.3);
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 18px;
    }

    .hosting-faq-header h2 {
        margin: 0 0 14px;
        font-size: clamp(28px, 3.4vw, 42px);
        line-height: 1.2;
        color: var(--host-white);
        font-weight: 700;
        letter-spacing: -0.01em;
    }

    .hosting-faq-header h2 span {
        color: var(--host-primary-light);
    }

    .hosting-faq-header p {
        margin: 0;
        font-size: 16.5px;
        line-height: 1.6;
        color: #9CA6B8;
    }

    /* wrapper */

    .hosting-faq-wrapper {
        display: grid;
        grid-template-columns: 0.85fr 1.15fr;
        gap: 40px;
        align-items: start;
    }

    /* ========================================
       LEFT — VISUAL
       ======================================== */

    .hosting-faq-visual {
        position: sticky;
        top: 24px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .hosting-faq-visual-card {
        background: var(--host-dark-2);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--host-radius-lg);
        padding: 32px 28px;
        box-shadow: var(--host-shadow-md);
    }

    .hosting-faq-icon {
        width: 52px;
        height: 52px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(249, 115, 22, 0.14);
        color: var(--host-primary-light);
        font-size: 20px;
        margin-bottom: 18px;
    }

    .hosting-faq-visual-card h3 {
        margin: 0 0 12px;
        font-size: 19px;
        line-height: 1.35;
        color: var(--host-white);
        font-weight: 700;
    }

    .hosting-faq-visual-card p {
        margin: 0 0 22px;
        font-size: 14px;
        line-height: 1.6;
        color: #8B94A7;
    }

    .hosting-faq-contact-btn {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 12px 20px;
        border-radius: var(--host-radius-sm);
        background: var(--host-gradient);
        color: var(--host-white);
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        box-shadow: var(--host-shadow-orange);
        transition: transform 0.15s ease, box-shadow 0.15s ease;
    }

    .hosting-faq-contact-btn i {
        transition: transform 0.15s ease;
    }

    .hosting-faq-contact-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--host-shadow-lg);
    }

    .hosting-faq-contact-btn:hover i {
        transform: translateX(3px);
    }

    /* decorative server */

    .hosting-faq-server {
        background: var(--host-dark-2);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--host-radius-lg);
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .faq-server-top {
        height: 6px;
        border-radius: 3px;
        background: linear-gradient(90deg, var(--host-primary), transparent);
        opacity: 0.6;
        margin-bottom: 4px;
    }

    .faq-server-unit {
        display: flex;
        align-items: center;
        gap: 8px;
        background: var(--host-dark-card);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 8px;
        padding: 10px 12px;
    }

    .faq-server-unit span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--host-primary-light);
        box-shadow: 0 0 6px rgba(251, 146, 60, 0.7);
        animation: blink 2.5s ease-in-out infinite;
    }

    .faq-server-unit span:nth-child(2) {
        animation-delay: 0.3s;
    }

    .faq-server-unit span:nth-child(3) {
        animation-delay: 0.6s;
    }

    .faq-server-unit:nth-child(3) span {
        animation-delay: 0.4s;
    }

    .faq-server-unit:nth-child(4) span {
        animation-delay: 0.8s;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.3;
        }
    }

    /* ========================================
       RIGHT — ACCORDION
       ======================================== */

    .hosting-faq-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .hosting-faq-item {
        background: var(--host-dark-2);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: var(--host-radius-md);
        overflow: hidden;
        transition: border-color 0.2s ease;
    }

    .hosting-faq-item.active {
        border-color: rgba(249, 115, 22, 0.35);
    }

    .hosting-faq-question {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        background: none;
        border: none;
        cursor: pointer;
        text-align: left;
        padding: 18px 20px;
        font-size: 15px;
        font-weight: 600;
        color: var(--host-white);
        font-family: inherit;
    }

    .hosting-faq-toggle {
        flex: none;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--host-dark-card);
        color: var(--host-primary-light);
        font-size: 12px;
        transition: background 0.2s ease, color 0.2s ease, transform 0.2s ease;
    }

    .hosting-faq-item.active .hosting-faq-toggle {
        background: var(--host-gradient);
        color: var(--host-white);
        transform: rotate(180deg);
    }

    .hosting-faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }

    .hosting-faq-answer p {
        margin: 0;
        padding: 0 20px 20px;
        font-size: 14px;
        line-height: 1.65;
        color: #9CA6B8;
    }

    .hosting-faq-item.active .hosting-faq-answer {
        max-height: 260px;
    }

    @media (max-width: 900px) {
        .hosting-faq-wrapper {
            grid-template-columns: 1fr;
        }

        .hosting-faq-visual {
            position: static;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-server-unit span {
            animation: none;
        }
    }
</style>

<!-- ==========================================
     FAQ SECTION
========================================== -->

<section class="hosting-faq-section">

    <div class="hosting-faq-container">

        <!-- SECTION HEADER -->
        <div class="hosting-faq-header">

            <span class="hosting-faq-eyebrow">
                HAVE QUESTIONS?
            </span>

            <h2>
                Frequently Asked
                <span>Questions</span>
            </h2>

            <p>
                Find answers to common questions about our hosting,
                cloud infrastructure, security, and support.
            </p>

        </div>


        <!-- FAQ CONTENT -->
        <div class="hosting-faq-wrapper">

            <!-- LEFT VISUAL -->
            <div class="hosting-faq-visual">

                <div class="hosting-faq-visual-card">

                    <div class="hosting-faq-icon">
                        <i class="fa-solid fa-circle-question"></i>
                    </div>

                    <h3>
                        Need Help Choosing
                        The Right Hosting?
                    </h3>

                    <p>
                        Our hosting experts can help you find the right
                        solution based on your website, traffic, and
                        business requirements.
                    </p>

                    <a href="#" class="hosting-faq-contact-btn">
                        Talk To An Expert
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>


                <!-- Decorative Server -->
                <div class="hosting-faq-server">

                    <div class="faq-server-top"></div>

                    <div class="faq-server-unit">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="faq-server-unit">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="faq-server-unit">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                </div>

            </div>


            <!-- RIGHT FAQ ACCORDION -->
            <div class="hosting-faq-list">


                <!-- FAQ ITEM -->
                <div class="hosting-faq-item active">

                    <button
                        class="hosting-faq-question"
                        type="button"
                        aria-expanded="true">

                        <span>
                            What type of hosting is right for my website?
                        </span>

                        <span class="hosting-faq-toggle">
                            <i class="fa-solid fa-minus"></i>
                        </span>

                    </button>

                    <div class="hosting-faq-answer">

                        <p>
                            The right hosting depends on your website's
                            traffic, resource requirements, and expected
                            growth. Shared hosting is suitable for smaller
                            websites, while VPS, cloud, or dedicated servers
                            are better for resource-intensive applications.
                        </p>

                    </div>

                </div>


                <!-- FAQ ITEM -->
                <div class="hosting-faq-item">

                    <button
                        class="hosting-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span>
                            Do you provide website migration?
                        </span>

                        <span class="hosting-faq-toggle">
                            <i class="fa-solid fa-plus"></i>
                        </span>

                    </button>

                    <div class="hosting-faq-answer">

                        <p>
                            Yes. Our team can help migrate your website,
                            files, databases, and other hosting configurations
                            with minimal disruption.
                        </p>

                    </div>

                </div>


                <!-- FAQ ITEM -->
                <div class="hosting-faq-item">

                    <button
                        class="hosting-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span>
                            What does 99.99% uptime mean?
                        </span>

                        <span class="hosting-faq-toggle">
                            <i class="fa-solid fa-plus"></i>
                        </span>

                    </button>

                    <div class="hosting-faq-answer">

                        <p>
                            A 99.99% uptime target means our infrastructure
                            is designed to keep your website and applications
                            available with minimal interruption.
                        </p>

                    </div>

                </div>


                <!-- FAQ ITEM -->
                <div class="hosting-faq-item">

                    <button
                        class="hosting-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span>
                            Are backups included with hosting?
                        </span>

                        <span class="hosting-faq-toggle">
                            <i class="fa-solid fa-plus"></i>
                        </span>

                    </button>

                    <div class="hosting-faq-answer">

                        <p>
                            Backup availability depends on the hosting plan.
                            Selected plans include automated backups to help
                            protect your website and application data.
                        </p>

                    </div>

                </div>


                <!-- FAQ ITEM -->
                <div class="hosting-faq-item">

                    <button
                        class="hosting-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span>
                            Can I upgrade my hosting plan later?
                        </span>

                        <span class="hosting-faq-toggle">
                            <i class="fa-solid fa-plus"></i>
                        </span>

                    </button>

                    <div class="hosting-faq-answer">

                        <p>
                            Yes. You can upgrade your hosting resources as
                            your website and business grow, allowing you to
                            scale without rebuilding your infrastructure.
                        </p>

                    </div>

                </div>


                <!-- FAQ ITEM -->
                <div class="hosting-faq-item">

                    <button
                        class="hosting-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span>
                            Do you provide SSL certificates?
                        </span>

                        <span class="hosting-faq-toggle">
                            <i class="fa-solid fa-plus"></i>
                        </span>

                    </button>

                    <div class="hosting-faq-answer">

                        <p>
                            SSL availability depends on the hosting plan.
                            Eligible plans include SSL protection to help
                            secure data transferred between your website
                            and its visitors.
                        </p>

                    </div>

                </div>


                <!-- FAQ ITEM -->
                <div class="hosting-faq-item">

                    <button
                        class="hosting-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span>
                            Is technical support available 24/7?
                        </span>

                        <span class="hosting-faq-toggle">
                            <i class="fa-solid fa-plus"></i>
                        </span>

                    </button>

                    <div class="hosting-faq-answer">

                        <p>
                            Our support team is available around the clock
                            to assist with hosting-related issues and
                            technical requirements.
                        </p>

                    </div>

                </div>


                <!-- FAQ ITEM -->
                <div class="hosting-faq-item">

                    <button
                        class="hosting-faq-question"
                        type="button"
                        aria-expanded="false">

                        <span>
                            Can you manage my server for me?
                        </span>

                        <span class="hosting-faq-toggle">
                            <i class="fa-solid fa-plus"></i>
                        </span>

                    </button>

                    <div class="hosting-faq-answer">

                        <p>
                            Yes. Our managed hosting services can cover
                            server monitoring, security updates, backups,
                            performance optimization, and technical support.
                        </p>

                    </div>

                </div>


            </div>

        </div>

    </div>

</section>

<script>
    document.querySelectorAll('.hosting-faq-question').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = btn.closest('.hosting-faq-item');
            var isActive = item.classList.contains('active');

            document.querySelectorAll('.hosting-faq-item').forEach(function(el) {
                el.classList.remove('active');
                el.querySelector('.hosting-faq-question').setAttribute('aria-expanded', 'false');
                el.querySelector('.hosting-faq-toggle i').className = 'fa-solid fa-plus';
            });

            if (!isActive) {
                item.classList.add('active');
                btn.setAttribute('aria-expanded', 'true');
                item.querySelector('.hosting-faq-toggle i').className = 'fa-solid fa-minus';
            }
        });
    });
</script>