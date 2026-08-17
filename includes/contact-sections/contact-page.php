<!-- ------------- Section 1 -------------- -->

<style>
    .boxES2 {
        background-color: #e7e7e7;
        width: 100%;
    }

    .boxES23 {
        display: grid;
        grid-template-columns: 1fr;
        width: 100%;
        padding: 30px 0;
        gap: 10px;
    }


    .boxES23 .sde {
        text-align: center;
        width: 100%;
        font-size: 2.5rem;
        color: black;
        font-weight: 800;
        color: rgb(255, 94, 0);
    }

    .boxES23 .sde34 {
        width: 100%;
        font-size: 16px;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
    }

    .boxES23 .sde34 a {
        color: black;
        font-size: 12px;
    }

    .boxES23 .sde34 a {
        color: black;
        font-size: 12px;
    }
</style>

<section class="boxES2">
    <div class="boxES23">
        <div class="sde">
            Contact Us
        </div>
        <div class="sde34">
            <span><a href="index.php">Home </a></span>
            <span>></span>
            <span><a href="#">Contact Us</a></span>
        </div>
    </div>
</section>



<section id="tlbc-contact-root" class="tlbc-section">

    <style>
        /* All rules scoped under #tlbc-contact-root — no global selectors. */

        #tlbc-contact-root {
            --tlbc-paper: #FAF7F2;
            --tlbc-ink: #1A1A1A;
            --tlbc-rust: rgb(255, 94, 0);
            --tlbc-rust-dim: #a36b16;
            --tlbc-muted: #6B6B63;
            --tlbc-line: #e8d6d6;
            --tlbc-card-bg: #FFFFFF;
            --tlbc-error: #b3721e;
            --tlbc-success: #3F6B4A;

            /* background-color: var(--tlbc-paper); */
            color: var(--tlbc-ink);
            /* font-family: -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; */
            padding: 64px 24px 96px;
            box-sizing: border-box;
            overflow-x: hidden;
        }

        #tlbc-contact-root .tlbc-container {
            max-width: 1180px;
            margin: 0 auto;
        }

        /* ---------- Heading ---------- */
        #tlbc-contact-root .tlbc-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--tlbc-rust);
            margin: 0 0 14px;
            opacity: 0;
            transform: translateY(10px);
            animation: tlbc-fade-up 0.6s ease forwards;
        }

        #tlbc-contact-root .tlbc-eyebrow::before {
            content: "";
            width: 28px;
            height: 1px;
            background: var(--tlbc-rust);
            display: inline-block;
        }

        #tlbc-contact-root .tlbc-heading-row {
            margin-bottom: 48px;
            border-bottom: 1px solid var(--tlbc-line);
            padding-bottom: 28px;
        }

        #tlbc-contact-root .tlbc-title {
            /* font-family: Georgia, "Times New Roman", serif; */
            font-size: clamp(32px, 5vw, 52px);
            line-height: 1.08;
            font-weight: 400;
            margin: 0 0 14px;
            letter-spacing: -0.01em;
            opacity: 0;
            transform: translateY(14px);
            animation: tlbc-fade-up 0.7s ease 0.08s forwards;
            font-weight: 800;
        }

        #tlbc-contact-root .tlbc-title em {
            font-style: italic;
            color: var(--tlbc-rust);
        }

        #tlbc-contact-root .tlbc-subtext {
            font-size: 15px;
            color: var(--tlbc-muted);
            max-width: 480px;
            line-height: 1.6;
            margin: 0;
            opacity: 0;
            transform: translateY(14px);
            animation: tlbc-fade-up 0.7s ease 0.16s forwards;
        }

        /* ---------- Info cards ---------- */
        #tlbc-contact-root .tlbc-info-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 56px;
        }

        #tlbc-contact-root .tlbc-info-card {
            background: var(--tlbc-card-bg);
            border: 1px solid var(--tlbc-line);
            border-radius: 14px;
            padding: 28px 26px;
            opacity: 0;
            transform: translateY(18px);
            transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1), box-shadow 0.4s ease, border-color 0.4s ease;
        }

        #tlbc-contact-root .tlbc-info-card.tlbc-in-view {
            animation: tlbc-fade-up 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }

        #tlbc-contact-root .tlbc-info-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 30px rgba(26, 26, 26, 0.07);
            border-color: var(--tlbc-rust);
        }

        #tlbc-contact-root .tlbc-info-icon {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(160, 87, 4, 0.1);
            color: var(--tlbc-rust);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        #tlbc-contact-root .tlbc-info-card:hover .tlbc-info-icon {
            background: var(--tlbc-rust);
            color: #FFFFFF;
            transform: rotate(-6deg) scale(1.05);
        }

        #tlbc-contact-root .tlbc-info-icon svg {
            width: 19px;
            height: 19px;
        }

        #tlbc-contact-root .tlbc-info-label {
            font-size: 11.5px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--tlbc-rust);
            margin: 0 0 8px;
        }

        #tlbc-contact-root .tlbc-info-value {
            /* font-family: Georgia, serif; */
            font-size: 17px;
            line-height: 1.45;
            margin: 0 0 4px;
        }

        #tlbc-contact-root .tlbc-info-sub {
            font-size: 13px;
            color: var(--tlbc-muted);
            margin: 0;
            line-height: 1.5;
        }

        /* ---------- Main two-column layout: form + map ---------- */
        #tlbc-contact-root .tlbc-main-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 40px;
            margin-bottom: 72px;
            align-items: start;
        }

        #tlbc-contact-root .tlbc-form-card {
            background: var(--tlbc-card-bg);
            border: 1px solid var(--tlbc-line);
            border-radius: 14px;
            padding: 36px;
            opacity: 0;
            transform: translateY(16px);
        }

        #tlbc-contact-root .tlbc-form-card.tlbc-in-view {
            animation: tlbc-fade-up 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }

        #tlbc-contact-root .tlbc-form-title {
            /* font-family: Georgia, serif; */
            font-size: 22px;
            margin: 0 0 6px;
        }

        #tlbc-contact-root .tlbc-form-desc {
            font-size: 13.5px;
            color: var(--tlbc-muted);
            margin: 0 0 26px;
            line-height: 1.55;
        }

        #tlbc-contact-root .tlbc-field {
            margin-bottom: 22px;
        }

        #tlbc-contact-root .tlbc-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        #tlbc-contact-root .tlbc-label {
            display: block;
            font-size: 12.5px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--tlbc-ink);
            margin-bottom: 9px;
        }

        #tlbc-contact-root .tlbc-input,
        #tlbc-contact-root .tlbc-textarea {
            width: 100%;
            box-sizing: border-box;
            /* font-family: inherit; */
            font-size: 14.5px;
            color: var(--tlbc-ink);
            background: var(--tlbc-paper);
            border: 1px solid var(--tlbc-line);
            border-radius: 9px;
            padding: 12px 14px;
            transition: border-color 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
        }

        #tlbc-contact-root .tlbc-textarea {
            resize: vertical;
            min-height: 110px;
            line-height: 1.55;
        }

        #tlbc-contact-root .tlbc-input:focus,
        #tlbc-contact-root .tlbc-textarea:focus {
            outline: none;
            border-color: var(--tlbc-rust);
            box-shadow: 0 0 0 3px rgba(194, 73, 29, 0.13);
            background: #FFFFFF;
        }

        #tlbc-contact-root .tlbc-input.tlbc-invalid,
        #tlbc-contact-root .tlbc-textarea.tlbc-invalid {
            border-color: var(--tlbc-error);
        }

        #tlbc-contact-root .tlbc-error-msg {
            font-size: 12.5px;
            color: var(--tlbc-error);
            margin: 7px 0 0;
            display: none;
        }

        #tlbc-contact-root .tlbc-error-msg.tlbc-show {
            display: block;
            animation: tlbc-shake 0.4s ease;
        }

        #tlbc-contact-root .tlbc-submit-btn {
            /* font-family: inherit; */
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #FFFFFF;
            background: var(--tlbc-rust);
            border: none;
            border-radius: 999px;
            padding: 14px 34px;
            cursor: pointer;
            transition: background 0.25s ease, transform 0.15s ease, box-shadow 0.25s ease;
            width: 100%;
        }

        #tlbc-contact-root .tlbc-submit-btn:hover {
            background: var(--tlbc-rust-dim);
            box-shadow: 0 6px 18px rgba(194, 73, 29, 0.25);
        }

        #tlbc-contact-root .tlbc-submit-btn:active {
            transform: scale(0.98);
        }

        #tlbc-contact-root .tlbc-submit-btn:disabled {
            opacity: 0.55;
            cursor: default;
            box-shadow: none;
        }

        /* ---------- Map card ---------- */
        #tlbc-contact-root .tlbc-map-card {
            border: 1px solid var(--tlbc-line);
            border-radius: 14px;
            overflow: hidden;
            opacity: 0;
            transform: translateY(16px);
            background: var(--tlbc-card-bg);
            height: 100%;
        }

        #tlbc-contact-root .tlbc-map-card.tlbc-in-view {
            animation: tlbc-fade-up 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.1s forwards;
        }

        #tlbc-contact-root .tlbc-map-frame-wrap {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 4.1;
            background: var(--tlbc-line);
        }

        #tlbc-contact-root .tlbc-map-frame-wrap iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(15%) contrast(1.02);
        }

        #tlbc-contact-root .tlbc-map-footer {
            padding: 20px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        #tlbc-contact-root .tlbc-map-footer-text {
            font-size: 13px;
            color: var(--tlbc-muted);
            margin: 0;
            line-height: 1.5;
        }

        #tlbc-contact-root .tlbc-map-link {
            font-size: 12.5px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            color: var(--tlbc-ink);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            flex-shrink: 0;
            transition: color 0.25s ease;
        }

        #tlbc-contact-root .tlbc-map-link:hover {
            color: var(--tlbc-rust);
        }

        #tlbc-contact-root .tlbc-map-link-arrow {
            transition: transform 0.3s cubic-bezier(0.22, 1, 0.36, 1);
            display: inline-block;
        }

        #tlbc-contact-root .tlbc-map-link:hover .tlbc-map-link-arrow {
            transform: translateX(4px);
        }

        /* ---------- FAQ ---------- */
        #tlbc-contact-root .tlbc-faq-heading-row {
            margin-bottom: 28px;
        }

        #tlbc-contact-root .tlbc-faq-title {
            /* font-family: Georgia, serif; */
            font-size: clamp(24px, 3.4vw, 32px);
            font-weight: 800;
            margin: 0 0 8px;
        }

        #tlbc-contact-root .tlbc-faq-sub {
            font-size: 14px;
            color: var(--tlbc-muted);
            margin: 0;
        }

        #tlbc-contact-root .tlbc-faq-list {
            border-top: 1px solid var(--tlbc-line);
        }

        #tlbc-contact-root .tlbc-faq-item {
            border-bottom: 1px solid var(--tlbc-line);
            opacity: 0;
            transform: translateY(14px);
        }

        #tlbc-contact-root .tlbc-faq-item.tlbc-in-view {
            animation: tlbc-fade-up 0.55s ease forwards;
        }

        #tlbc-contact-root .tlbc-faq-question {
            width: 100%;
            text-align: left;
            background: transparent;
            border: none;
            /* font-family: inherit; */
            font-size: 16px;
            color: var(--tlbc-ink);
            padding: 22px 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            transition: color 0.25s ease;
        }

        #tlbc-contact-root .tlbc-faq-question:hover {
            color: var(--tlbc-rust);
        }

        #tlbc-contact-root .tlbc-faq-question-text {
            /* font-family: Georgia, serif; */
        }

        #tlbc-contact-root .tlbc-faq-icon {
            flex-shrink: 0;
            width: 22px;
            height: 22px;
            position: relative;
        }

        #tlbc-contact-root .tlbc-faq-icon::before,
        #tlbc-contact-root .tlbc-faq-icon::after {
            content: "";
            position: absolute;
            background: var(--tlbc-ink);
            transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1), background 0.25s ease;
        }

        #tlbc-contact-root .tlbc-faq-icon::before {
            top: 50%;
            left: 0;
            width: 100%;
            height: 1.5px;
            transform: translateY(-50%);
        }

        #tlbc-contact-root .tlbc-faq-icon::after {
            top: 0;
            left: 50%;
            width: 1.5px;
            height: 100%;
            transform: translateX(-50%);
        }

        #tlbc-contact-root .tlbc-faq-question:hover .tlbc-faq-icon::before,
        #tlbc-contact-root .tlbc-faq-question:hover .tlbc-faq-icon::after {
            background: var(--tlbc-rust);
        }

        #tlbc-contact-root .tlbc-faq-item.tlbc-faq-open .tlbc-faq-icon::after {
            transform: translateX(-50%) rotate(90deg);
            opacity: 0;
        }

        #tlbc-contact-root .tlbc-faq-answer-wrap {
            height: 0;
            overflow: hidden;
            transition: height 0.35s cubic-bezier(0.22, 1, 0.36, 1);
        }

        #tlbc-contact-root .tlbc-faq-answer {
            font-size: 14px;
            line-height: 1.65;
            color: #4A4A45;
            padding: 0 4px 22px;
            max-width: 700px;
        }

        /* ---------- Toast ---------- */
        #tlbc-contact-root .tlbc-toast {
            position: fixed;
            bottom: 28px;
            left: 50%;
            transform: translate(-50%, 16px);
            background: var(--tlbc-ink);
            color: #FFFFFF;
            font-size: 13.5px;
            font-weight: 600;
            padding: 14px 24px;
            border-radius: 999px;
            display: flex;
            align-items: center;
            gap: 10px;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.35s ease, transform 0.35s cubic-bezier(0.22, 1, 0.36, 1);
            z-index: 50;
            max-width: 90vw;
            box-sizing: border-box;
        }

        #tlbc-contact-root .tlbc-toast.tlbc-toast-show {
            opacity: 1;
            transform: translate(-50%, 0);
        }

        #tlbc-contact-root .tlbc-toast-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--tlbc-success);
            flex-shrink: 0;
        }

        /* ---------- Keyframes (uniquely named) ---------- */
        @keyframes tlbc-fade-up {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes tlbc-shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-4px);
            }

            75% {
                transform: translateX(4px);
            }
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 980px) {
            #tlbc-contact-root .tlbc-info-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            #tlbc-contact-root .tlbc-main-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }

            #tlbc-contact-root .tlbc-title {
                font-size: clamp(28px, 6vw, 40px);
            }
        }

        @media (max-width: 620px) {
            #tlbc-contact-root {
                padding: 44px 18px 64px;
            }

            #tlbc-contact-root .tlbc-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            #tlbc-contact-root .tlbc-form-card {
                padding: 24px;
            }

            #tlbc-contact-root .tlbc-heading-row {
                margin-bottom: 32px;
                padding-bottom: 22px;
            }

            #tlbc-contact-root .tlbc-main-grid {
                margin-bottom: 56px;
            }

            #tlbc-contact-root .tlbc-faq-question {
                padding: 18px 2px;
                font-size: 15px;
            }
        }

        /* ---------- Reduced motion respect ---------- */
        @media (prefers-reduced-motion: reduce) {

            #tlbc-contact-root .tlbc-eyebrow,
            #tlbc-contact-root .tlbc-title,
            #tlbc-contact-root .tlbc-subtext,
            #tlbc-contact-root .tlbc-info-card,
            #tlbc-contact-root .tlbc-form-card,
            #tlbc-contact-root .tlbc-map-card,
            #tlbc-contact-root .tlbc-faq-item {
                animation: none !important;
                opacity: 1 !important;
                transform: none !important;
            }

            #tlbc-contact-root .tlbc-error-msg.tlbc-show {
                animation: none !important;
            }
        }
    </style>

    <div class="tlbc-container">

        <div class="tlbc-heading-row">
            <p class="tlbc-eyebrow">Get In Touch</p>
            <h2 class="tlbc-title">We'd love to hear <em>from you.</em></h2>
            <p class="tlbc-subtext">Questions about an order, a product, or just want to say hello — drop us a note and we'll get back within one business day.</p>
        </div>

        <!-- Info cards -->
        <div class="tlbc-info-grid" id="tlbc-info-grid">

            <div class="tlbc-info-card" data-tlbc-reveal>
                <div class="tlbc-info-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 1 1 18 0Z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                </div>
                <p class="tlbc-info-label">Visit Us</p>
                <p class="tlbc-info-value">2nd Floor, Plot no- 456, Kakrola Housing complex, Opposite Metro Pillar 796, </p>
                <p class="tlbc-info-sub"> Dwarka Mor, New Delhi-11007 India.</p>
            </div>

            <div class="tlbc-info-card" data-tlbc-reveal>
                <div class="tlbc-info-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92Z" />
                    </svg>
                </div>
                <p class="tlbc-info-label">Call Us</p>
                <p class="tlbc-info-value"> +91-92-11-33-99-66</p>
                <p class="tlbc-info-sub">Mon – Sat, 9:00 AM to 7:00 PM</p>
            </div>

            <div class="tlbc-info-card" data-tlbc-reveal>
                <div class="tlbc-info-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16v16H4z" opacity="0" />
                        <path d="M22 6 12 13 2 6" />
                        <path d="M2 6h20v12H2Z" />
                    </svg>
                </div>
                <p class="tlbc-info-label">Email Us</p>
                <p class="tlbc-info-value">info@kingdigital.in</p>
                <p class="tlbc-info-sub">We reply within 24 hours</p>
            </div>

        </div>

        <!-- Form + Map -->
        <div class="tlbc-main-grid">

            <div class="tlbc-form-card" data-tlbc-reveal>
                <h3 class="tlbc-form-title">Send a message</h3>
                <p class="tlbc-form-desc">Fill in the details below and we'll get back to you shortly. This is a demo form — nothing is sent or stored.</p>

                <form action="" method="POST" id="tlbc-form" novalidate>

                    <div class="tlbc-row">
                        <div class="tlbc-field">
                            <label class="tlbc-label" for="tlbc-name-input">Full Name</label>
                            <input class="tlbc-input" name="first_name" type="text" id="tlbc-name-input" maxlength="60" placeholder="Jordan Lee" autocomplete="off">
                            <p class="tlbc-error-msg" id="tlbc-name-error">Please enter your name.</p>
                        </div>
                        <div class="tlbc-field">
                            <label class="tlbc-label" for="tlbc-email-input">Email Address</label>
                            <input class="tlbc-input" name="customer_email" type="email" id="tlbc-email-input" maxlength="80" placeholder="jordan@email.com" autocomplete="off">
                            <p class="tlbc-error-msg" id="tlbc-email-error">Please enter a valid email.</p>
                        </div>
                    </div>

                    <div class="tlbc-field">
                        <label class="tlbc-label" for="tlbc-subject-input">Subject</label>
                        <input class="tlbc-input" name="subject_contact" type="text" id="tlbc-subject-input" maxlength="90" placeholder="What's this about?" autocomplete="off">
                    </div>

                    <div class="tlbc-field">
                        <label class="tlbc-label" for="tlbc-message-input">Message</label>
                        <textarea class="tlbc-textarea" name="messege_contect" id="tlbc-message-input" maxlength="600" placeholder="Tell us a bit more..."></textarea>
                        <p class="tlbc-error-msg" id="tlbc-message-error">Please write a short message.</p>
                    </div>

                    <button type="submit" name="submit_email_for_contect" class="tlbc-submit-btn" id="tlbc-submit-btn">Send Message</button>
                </form>
            </div>

            <div class="tlbc-map-card" data-tlbc-reveal>
                <div class="tlbc-map-frame-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1751.1800134971945!2d77.02611629839475!3d28.618969900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0313cad7ce3b%3A0xc015fca821293315!2sKING%20DIGITAL%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1786966162541!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
                <div class="tlbc-map-footer">
                    <p class="tlbc-map-footer-text">60 29th Street, San Francisco, CA 94110</p>
                    <a class="tlbc-map-link" href="https://maps.app.goo.gl/L1oH79oNvH1mLEKM8" target="_blank" rel="noopener">
                        Get Directions <span class="tlbc-map-link-arrow">→</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- FAQ -->
        <div class="tlbc-faq-heading-row">
            <h3 class="tlbc-faq-title">Frequently asked questions</h3>
            <p class="tlbc-faq-sub">Can't find what you're looking for? Send us a message above.</p>
        </div>

        <div class="tlbc-faq-list" id="tlbc-faq-list">

            <div class="tlbc-faq-item" data-tlbc-reveal>
                <button class="tlbc-faq-question" type="button" data-tlbc-faq-trigger>
                    <span class="tlbc-faq-question-text">How long does it take to get a reply?</span>
                    <span class="tlbc-faq-icon"></span>
                </button>
                <div class="tlbc-faq-answer-wrap">
                    <p class="tlbc-faq-answer">We aim to respond to every message within one business day. For order-related questions, having your order number ready speeds things up considerably.</p>
                </div>
            </div>

            <div class="tlbc-faq-item" data-tlbc-reveal>
                <button class="tlbc-faq-question" type="button" data-tlbc-faq-trigger>
                    <span class="tlbc-faq-question-text">Can I track my order through this form?</span>
                    <span class="tlbc-faq-icon"></span>
                </button>
                <div class="tlbc-faq-answer-wrap">
                    <p class="tlbc-faq-answer">This form is best for general questions and feedback. For live order tracking, use the order tracking page in your account — it gives real-time status faster than a message reply.</p>
                </div>
            </div>

            <div class="tlbc-faq-item" data-tlbc-reveal>
                <button class="tlbc-faq-question" type="button" data-tlbc-faq-trigger>
                    <span class="tlbc-faq-question-text">Do you offer phone support on weekends?</span>
                    <span class="tlbc-faq-icon"></span>
                </button>
                <div class="tlbc-faq-answer-wrap">
                    <p class="tlbc-faq-answer">Phone support runs Monday through Saturday, 9 AM to 7 PM. On Sundays, the message form remains the fastest way to reach the team.</p>
                </div>
            </div>

            <div class="tlbc-faq-item" data-tlbc-reveal>
                <button class="tlbc-faq-question" type="button" data-tlbc-faq-trigger>
                    <span class="tlbc-faq-question-text">Can I visit the store in person?</span>
                    <span class="tlbc-faq-icon"></span>
                </button>
                <div class="tlbc-faq-answer-wrap">
                    <p class="tlbc-faq-answer">Absolutely — our San Francisco location welcomes walk-ins during business hours. For larger orders or consultations, booking ahead helps us prepare for you.</p>
                </div>
            </div>

        </div>

    </div>

    <div class="tlbc-toast" id="tlbc-toast">
        <span class="tlbc-toast-dot"></span>
        <span id="tlbc-toast-text">Message sent — we'll be in touch soon.</span>
    </div>

</section>

<script>
    /* Wrapped in its own IIFE — no globals leak, no document-level
     DOMContentLoaded listener. Everything lives in this closure. */
    (function tlbcContactInit() {

        var tlbcRoot = document.getElementById("tlbc-contact-root");
        if (!tlbcRoot) return;

        /* ---------- Scroll-triggered reveal ---------- */
        var revealEls = tlbcRoot.querySelectorAll("[data-tlbc-reveal]");

        if ("IntersectionObserver" in window) {
            var tlbcObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var el = entry.target;
                        el.classList.add("tlbc-in-view");
                        tlbcObserver.unobserve(el);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: "0px 0px -40px 0px"
            });

            revealEls.forEach(function(el, idx) {
                el.style.animationDelay = (idx % 3) * 80 + "ms";
                tlbcObserver.observe(el);
            });
        } else {
            revealEls.forEach(function(el) {
                el.classList.add("tlbc-in-view");
            });
        }

        /* ---------- Form validation + demo submit ---------- */
        //   var form = document.getElementById("tlbc-form");
        //   var nameInput = document.getElementById("tlbc-name-input");
        //   var emailInput = document.getElementById("tlbc-email-input");
        //   var messageInput = document.getElementById("tlbc-message-input");
        //   var nameError = document.getElementById("tlbc-name-error");
        //   var emailError = document.getElementById("tlbc-email-error");
        //   var messageError = document.getElementById("tlbc-message-error");
        //   var submitBtn = document.getElementById("tlbc-submit-btn");
        //   var toast = document.getElementById("tlbc-toast");
        //   var toastText = document.getElementById("tlbc-toast-text");
        //   var tlbcToastTimer = null;

        //   function tlbcShowFieldError(input, errorEl) {
        //     input.classList.add("tlbc-invalid");
        //     errorEl.classList.add("tlbc-show");
        //   }

        //   function tlbcClearFieldError(input, errorEl) {
        //     input.classList.remove("tlbc-invalid");
        //     errorEl.classList.remove("tlbc-show");
        //   }

        //   function tlbcIsValidEmail(value) {
        //     return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
        //   }

        //   nameInput.addEventListener("input", function() {
        //     tlbcClearFieldError(nameInput, nameError);
        //   });
        //   emailInput.addEventListener("input", function() {
        //     tlbcClearFieldError(emailInput, emailError);
        //   });
        //   messageInput.addEventListener("input", function() {
        //     tlbcClearFieldError(messageInput, messageError);
        //   });

        //   function tlbcShowToast(message, isError) {
        //     toastText.textContent = message;
        //     toast.style.background = isError ? "#B3261E" : "";
        //     toast.classList.add("tlbc-toast-show");

        //     if (tlbcToastTimer) clearTimeout(tlbcToastTimer);
        //     tlbcToastTimer = setTimeout(function() {
        //       toast.classList.remove("tlbc-toast-show");
        //     }, 3200);
        //   }

        //   form.addEventListener("submit", function(e) {
        //     e.preventDefault();

        //     var valid = true;

        //     if (!nameInput.value.trim()) {
        //       tlbcShowFieldError(nameInput, nameError);
        //       valid = false;
        //     }
        //     if (!emailInput.value.trim() || !tlbcIsValidEmail(emailInput.value.trim())) {
        //       tlbcShowFieldError(emailInput, emailError);
        //       valid = false;
        //     }
        //     if (!messageInput.value.trim()) {
        //       tlbcShowFieldError(messageInput, messageError);
        //       valid = false;
        //     }

        //     if (!valid) {
        //       tlbcShowToast("Please check the highlighted fields.", true);
        //       return;
        //     }

        //     submitBtn.disabled = true;
        //     submitBtn.textContent = "Sending...";

        //     /* Demo only — simulate a brief send delay, then reset.
        //       No data is stored or transmitted anywhere. */
        //     setTimeout(function() {
        //       tlbcShowToast("Message sent — we'll be in touch soon.", false);
        //       form.reset();
        //       submitBtn.disabled = false;
        //       submitBtn.textContent = "Send Message";
        //     }, 600);
        //   });

        /* ---------- FAQ accordion ---------- */
        var faqList = document.getElementById("tlbc-faq-list");

        faqList.addEventListener("click", function(e) {
            var trigger = e.target.closest("[data-tlbc-faq-trigger]");
            if (!trigger) return;

            var item = trigger.closest(".tlbc-faq-item");
            var answerWrap = item.querySelector(".tlbc-faq-answer-wrap");
            var isOpen = item.classList.contains("tlbc-faq-open");

            /* close any other open item for a clean single-open accordion */
            faqList.querySelectorAll(".tlbc-faq-item.tlbc-faq-open").forEach(function(openItem) {
                if (openItem !== item) {
                    openItem.classList.remove("tlbc-faq-open");
                    openItem.querySelector(".tlbc-faq-answer-wrap").style.height = "0px";
                }
            });

            if (isOpen) {
                item.classList.remove("tlbc-faq-open");
                answerWrap.style.height = "0px";
            } else {
                item.classList.add("tlbc-faq-open");
                answerWrap.style.height = answerWrap.scrollHeight + "px";
            }
        });

    })();
</script>