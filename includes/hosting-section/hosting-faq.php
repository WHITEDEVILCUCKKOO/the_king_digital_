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

        --host-whatsapp: #25D366;
        --host-whatsapp-dark: #1DA851;
        --host-navy: #0F1E3D;
        --host-navy-dark: #0A1530;


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

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
    }

    /* ========================================
       SECTION
       ======================================== */

    .hosting-faq-section {
        background: var(--host-bg-soft);
        padding: 60px 24px;
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
        color: var(--host-primary-dark);
        background: var(--host-white);
        border: 1px solid var(--host-border-orange);
        padding: 6px 14px;
        border-radius: 999px;
        margin-bottom: 18px;
    }

    .hosting-faq-header h2 {
        margin: 0 0 14px;
        font-size: clamp(28px, 3.4vw, 42px);
        line-height: 1.2;
        color: var(--host-text);
        font-weight: 700;
        letter-spacing: -0.01em;
    }

    .hosting-faq-header h2 span {
        color: var(--host-primary);
    }

    .hosting-faq-header p {
        margin: 0;
        font-size: 16.5px;
        line-height: 1.6;
        color: var(--host-text-muted);
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
        background: var(--host-white);
        border: 1px solid var(--host-border);
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
        background: var(--host-bg-orange);
        color: var(--host-primary);
        margin-bottom: 18px;
    }

    .hosting-faq-icon svg {
        width: 22px;
        height: 22px;
    }

    .hosting-faq-visual-card h3 {
        margin: 0 0 12px;
        font-size: 19px;
        line-height: 1.35;
        color: var(--host-text);
        font-weight: 700;
    }

    .hosting-faq-visual-card p {
        margin: 0 0 22px;
        font-size: 14px;
        line-height: 1.6;
        color: var(--host-text-muted);
    }

    .hosting-faq-contact-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        width: 100%;
        padding: 12px 20px;
        border-radius: var(--host-radius-sm);
        background: var(--host-gradient);
        color: var(--host-white);
        font-weight: 600;
        font-size: 14px;
        text-decoration: none;
        box-shadow: var(--host-shadow-orange);
        transition: transform 0.15s ease, box-shadow 0.15s ease;
        border: none;
        cursor: pointer;
        font-family: inherit;
    }

    .hosting-faq-contact-btn svg {
        width: 14px;
        height: 14px;
        transition: transform 0.15s ease;
    }

    .hosting-faq-contact-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--host-shadow-lg);
    }

    .hosting-faq-contact-btn:hover svg {
        transform: translateX(3px);
    }

    /* quick contact row — combined with hosting card */

    .hosting-faq-quickrow {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 14px;
    }

    .hosting-faq-quickrow::before,
    .hosting-faq-quickrow::after {
        content: "";
        flex: 1;
        height: 1px;
        background: var(--host-border);
    }

    .hosting-faq-quickrow span {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.06em;
        color: var(--host-text-muted);
        text-transform: uppercase;
        white-space: nowrap;
    }

    .hosting-faq-quicklinks {
        display: flex;
        gap: 8px;
        margin-top: 12px;
    }

    .hosting-faq-quicklink {
        flex: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 7px;
        padding: 10px 10px;
        border-radius: var(--host-radius-sm);
        font-size: 12.5px;
        font-weight: 700;
        text-decoration: none;
        color: var(--host-white);
        border: none;
        transition: transform 0.15s ease, box-shadow 0.15s ease;
    }

    .hosting-faq-quicklink svg {
        width: 13px;
        height: 13px;
        flex: none;
    }

    .hosting-faq-quicklink:hover {
        transform: translateY(-2px);
    }

    .hosting-faq-quicklink--whatsapp {
        background: var(--host-whatsapp);
        box-shadow: 0 8px 18px rgba(37, 211, 102, 0.3);
    }

    .hosting-faq-quicklink--whatsapp:hover {
        background: var(--host-whatsapp-dark);
    }

    .hosting-faq-quicklink--meet {
        background: var(--host-navy);
        box-shadow: 0 8px 18px rgba(15, 30, 61, 0.35);
    }

    .hosting-faq-quicklink--meet:hover {
        background: var(--host-navy-dark);
    }

    /* decorative server */

    .hosting-faq-server {
        background: var(--host-white);
        border: 1px solid var(--host-border);
        border-radius: var(--host-radius-lg);
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        box-shadow: var(--host-shadow-sm);
    }

    .faq-server-top {
        height: 6px;
        border-radius: 3px;
        background: linear-gradient(90deg, var(--host-primary), transparent);
        opacity: 0.5;
        margin-bottom: 4px;
    }

    .faq-server-unit {
        display: flex;
        align-items: center;
        gap: 8px;
        background: var(--host-bg-soft);
        border: 1px solid var(--host-border);
        border-radius: 8px;
        padding: 10px 12px;
    }

    .faq-server-unit span {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--host-primary);
        box-shadow: 0 0 6px rgba(249, 115, 22, 0.5);
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
        background: var(--host-white);
        border: 1px solid var(--host-border);
        border-radius: var(--host-radius-md);
        overflow: hidden;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .hosting-faq-item.active {
        border-color: var(--host-border-orange);
        box-shadow: var(--host-shadow-sm);
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
        color: var(--host-text);
        font-family: inherit;
    }

    .hosting-faq-toggle {
        position: relative;
        flex: none;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--host-bg-orange);
        transition: background 0.2s ease, transform 0.2s ease;
    }

    .hosting-faq-toggle-h,
    .hosting-faq-toggle-v {
        position: absolute;
        border-radius: 2px;
        background: var(--host-primary);
        transition: opacity 0.2s ease, background 0.2s ease;
    }

    .hosting-faq-toggle-h {
        width: 12px;
        height: 2px;
    }

    .hosting-faq-toggle-v {
        width: 2px;
        height: 12px;
    }

    .hosting-faq-item.active .hosting-faq-toggle {
        background: var(--host-gradient);
        transform: rotate(180deg);
    }

    .hosting-faq-item.active .hosting-faq-toggle-h,
    .hosting-faq-item.active .hosting-faq-toggle-v {
        background: var(--host-white);
    }

    .hosting-faq-item.active .hosting-faq-toggle-v {
        opacity: 0;
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
        color: var(--host-text-secondary);
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

    @media (max-width: 480px) {
        .hosting-faq-quicklink {
            font-size: 11.5px;
            padding: 10px 6px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .faq-server-unit span {
            animation: none;
        }

        .hosting-faq-contact-btn,
        .hosting-faq-quicklink,
        .hosting-faq-toggle,
        .hosting-faq-toggle-h,
        .hosting-faq-toggle-v {
            transition: none;
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
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <line x1="12" y1="17" x2="12.01" y2="17" />
                        </svg>
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

                    <a href="contact.php" class="hosting-faq-contact-btn">
                        Talk To An Expert
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <polyline points="12 5 19 12 12 19" />
                        </svg>
                    </a>

                    <!-- combined quick-contact row -->
                    <div class="hosting-faq-quickrow">
                        <span>Or Reach Us On</span>
                    </div>

                    <div class="hosting-faq-quicklinks">
                        <a href="https://wa.me/919211339966?text=Hi%2C%20I%20would%20like%20to%20know%20more%20about%20your%20services." class="hosting-faq-quicklink hosting-faq-quicklink--whatsapp">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.29-1.39a9.9 9.9 0 0 0 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.13-2.9-7C17.19 3.03 14.7 2 12.04 2zm0 18.06h-.01a8.2 8.2 0 0 1-4.18-1.15l-.3-.18-3.14.82.84-3.06-.2-.31a8.15 8.15 0 0 1-1.25-4.34c0-4.53 3.69-8.22 8.24-8.22 2.2 0 4.27.86 5.82 2.42a8.17 8.17 0 0 1 2.41 5.81c0 4.54-3.7 8.21-8.23 8.21zm4.52-6.16c-.25-.12-1.46-.72-1.68-.8-.23-.08-.39-.12-.56.13-.16.24-.64.8-.78.96-.15.16-.29.18-.54.06-.25-.12-1.04-.38-1.98-1.22-.73-.65-1.23-1.46-1.37-1.7-.15-.25-.02-.38.11-.51.11-.11.25-.29.37-.43.12-.14.16-.25.24-.4.08-.16.04-.3-.02-.42-.06-.12-.56-1.34-.76-1.84-.2-.48-.41-.42-.56-.42-.15 0-.31-.02-.48-.02-.16 0-.43.06-.66.3-.23.25-.86.84-.86 2.04 0 1.2.88 2.36 1 2.52.12.16 1.73 2.64 4.2 3.7.59.25 1.05.4 1.41.52.59.19 1.13.16 1.55.1.47-.07 1.46-.6 1.67-1.18.2-.58.2-1.08.14-1.18-.06-.1-.22-.16-.47-.28z" />
                            </svg>
                            WhatsApp
                        </a>
                        <a href="#" class="hosting-faq-quicklink hosting-faq-quicklink--meet">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17 10.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-3.5l4 4v-11l-4 4z" />
                            </svg>
                            Meet Online
                        </a>
                    </div>

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
                            <span class="hosting-faq-toggle-h"></span>
                            <span class="hosting-faq-toggle-v"></span>
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
                            <span class="hosting-faq-toggle-h"></span>
                            <span class="hosting-faq-toggle-v"></span>
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
                            <span class="hosting-faq-toggle-h"></span>
                            <span class="hosting-faq-toggle-v"></span>
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
                            <span class="hosting-faq-toggle-h"></span>
                            <span class="hosting-faq-toggle-v"></span>
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
                            <span class="hosting-faq-toggle-h"></span>
                            <span class="hosting-faq-toggle-v"></span>
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
                            <span class="hosting-faq-toggle-h"></span>
                            <span class="hosting-faq-toggle-v"></span>
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
                            <span class="hosting-faq-toggle-h"></span>
                            <span class="hosting-faq-toggle-v"></span>
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
                            <span class="hosting-faq-toggle-h"></span>
                            <span class="hosting-faq-toggle-v"></span>
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
            });

            if (!isActive) {
                item.classList.add('active');
                btn.setAttribute('aria-expanded', 'true');
            }
        });
    });
</script>