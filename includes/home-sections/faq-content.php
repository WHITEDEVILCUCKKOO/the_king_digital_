<style>
    :root {
        --blue: #1B3D7B;
        --blue-dk: #122954;
        --blue-md: #2451A0;
        --blue-lt: #E8EFFE;
        --blue-xl: #F0F4FF;
        --gold: #F97316;
        --gold-dk: #C45E0A;
        --gold-lt: #FFF4EC;
        --gold-mid: #FDBA74;
        --green: #059669;
        --white: #FFFFFF;
        --bg: #F6F8FD;
        --bg2: #EEF3FF;
        --txt: #0F172A;
        --txt2: #475569;
        --txt3: #94A3B8;
        --bdr: #E2E8F0;
        --r: 10px;
        --rlg: 16px;
        --sh: 0 2px 8px rgba(0, 0, 0, .06);
        --shlg: 0 8px 32px rgba(27, 61, 123, .12);
        --trans: all .22s ease;
    }



    /* Utilities */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
        font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .section {
        padding: 88px 0
    }

    .section-sm {
        padding: 56px 0
    }

    .flex {
        display: flex;
        align-items: center
    }

    .gap-8 {
        gap: 8px
    }

    .gap-12 {
        gap: 12px
    }

    .gap-16 {
        gap: 16px
    }

    .gap-24 {
        gap: 24px
    }

    .tag {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        font-family: 'Poppins', sans-serif;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        background: var(--blue-lt);
        color: var(--blue);
        padding: 5px 14px;
        border-radius: 20px;
        margin-bottom: 16px
    }

    .tag.orange {
        background: var(--gold-lt);
        color: var(--gold)
    }

    .tag .dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: currentColor;
        flex-shrink: 0
    }

    .sh {
        font-size: clamp(26px, 3.8vw, 40px);
        font-weight: 800;
        margin-bottom: 14px;
        letter-spacing: -.5px
    }

    .sub {
        font-size: 16px;
        color: var(--txt2);
        line-height: 1.85;
        max-width: 560px
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 600;
        padding: 11px 24px;
        border-radius: 8px;
        border: 2px solid transparent;
        cursor: pointer;
        transition: var(--trans);
        white-space: nowrap
    }

    .btn-primary {
        background: var(--gold);
        color: #fff;
        border-color: var(--gold)
    }

    .btn-primary:hover {
        background: var(--gold-dk);
        border-color: var(--gold-dk);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(249, 115, 22, .35)
    }

    .btn-blue {
        background: var(--blue);
        color: #fff;
        border-color: var(--blue)
    }

    .btn-blue:hover {
        background: var(--blue-dk);
        border-color: var(--blue-dk);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(27, 61, 123, .3)
    }

    .btn-outline {
        background: transparent;
        color: var(--blue);
        border-color: var(--blue)
    }

    .btn-outline:hover {
        background: var(--blue);
        color: #fff;
        transform: translateY(-2px)
    }

    .btn-white {
        background: #fff;
        color: var(--blue);
        border-color: #fff
    }

    .btn-white:hover {
        background: var(--blue-lt);
        transform: translateY(-2px)
    }

    .btn-sm {
        padding: 8px 18px;
        font-size: 13px
    }


    /* ════ FAQ ════ */
    .faq {
        background: var(--bg)
    }

    .faq-wrap {
        display: grid;
        grid-template-columns: 1.4fr 1fr;
        gap: 56px;
        align-items: start;
        margin-top: 52px
    }

    .faq-list {
        display: flex;
        flex-direction: column;
        gap: 10px
    }

    .faq-item {
        background: #fff;
        border: 1.5px solid var(--bdr);
        border-radius: var(--r);
        overflow: hidden;
        transition: border-color .2s
    }

    .faq-item.open {
        border-color: var(--blue)
    }

    .faq-q {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        padding: 18px 20px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 700;
        color: var(--txt)
    }

    .faq-q i {
        font-size: 13px;
        color: var(--txt3);
        transition: transform .25s;
        flex-shrink: 0
    }

    .faq-item.open .faq-q i {
        transform: rotate(180deg);
        color: var(--blue)
    }

    .faq-a {
        display: none;
        padding: 0 20px 18px;
        font-size: 14px;
        color: var(--txt2);
        line-height: 1.8
    }

    .faq-item.open .faq-a {
        display: block
    }

    .faq-cta-box {
        background: var(--blue);
        border-radius: 20px;
        padding: 32px;
        text-align: center;
        color: #fff;
        position: sticky;
        top: 90px
    }

    .faq-cta-box h3 {
        font-size: 22px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 10px
    }

    .faq-cta-box p {
        font-size: 14px;
        color: rgba(255, 255, 255, .7);
        margin-bottom: 24px;
        line-height: 1.75
    }

    .faq-cta-box .btn {
        width: 100%;
        justify-content: center;
        margin-bottom: 12px
    }

    .faq-cta-or {
        font-size: 13px;
        color: rgba(255, 255, 255, .5);
        margin: 14px 0
    }

    /* ════ CONTACT ════ */
    .contact {
        background: #fff
    }

    .contact-wrap {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 56px;
        margin-top: 52px;
        align-items: start
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        gap: 18px
    }

    .ci-item {
        display: flex;
        gap: 16px;
        align-items: flex-start;
        background: var(--bg);
        border: 1.5px solid var(--bdr);
        border-radius: var(--r);
        padding: 20px;
        transition: var(--trans)
    }

    .ci-item:hover {
        border-color: var(--blue-md);
        box-shadow: var(--sh)
    }

    .ci-ico {
        width: 44px;
        height: 44px;
        border-radius: 11px;
        background: var(--blue-lt);
        color: var(--blue);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 17px;
        flex-shrink: 0
    }

    .ci-item h4 {
        font-family: 'Poppins', sans-serif;
        font-size: 13px;
        font-weight: 700;
        color: var(--txt3);
        margin-bottom: 4px;
        text-transform: uppercase;
        letter-spacing: .5px
    }

    .ci-item p,
    .ci-item a {
        font-size: 15px;
        font-weight: 600;
        color: var(--txt)
    }

    .ci-item a:hover {
        color: var(--blue)
    }

    .contact-social {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 4px
    }

    .cs-link {
        width: 38px;
        height: 38px;
        border-radius: 9px;
        background: var(--bg2);
        border: 1.5px solid var(--bdr);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        color: var(--blue);
        transition: var(--trans)
    }

    .cs-link:hover {
        background: var(--blue);
        color: #fff;
        border-color: var(--blue)
    }

    .contact-form {
        background: var(--blue);
        border: 1.5px solid var(--bdr);
        border-radius: 20px;
        padding: 32px
    }

    .cf-title {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: 800;
        margin-bottom: 6px;
        color: var(--white);
    }

    .cf-sub {
        font-size: 14px;
        color: var(--txt2);
        margin-bottom: 28px;
        color: #8f8787;

    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px
    }

    .form-group {
        margin-bottom: 16px
    }

    .form-group label {
        display: block;
        font-size: 13px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        color: #e6e1e1c5;
        margin-bottom: 7px
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px 10px;
        border: 1.5px solid var(--bdr);
        border-radius: 8px;
        font-size: 14px;
        color: var(--txt);
        background: #fff;
        outline: none;
        transition: border-color .2s;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 3px rgba(27, 61, 123, .08)
    }

    .form-group textarea {
        resize: vertical;
        min-height: 100px
    }

    .form-submit {
        width: 100%;
        padding: 14px;
        font-size: 15px;
        font-weight: 700;
        justify-content: center;
        border: none;
        position: relative;
    }

    .submit_btn_animtion {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgb(255, 145, 0);
        border: 2px solid white;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 0px;
        left: -1000px;
        border-radius: 8px;
    }

    .submit_btn_animtion .sesa885 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        padding: 5px;
        animation: trailFade 3s ease-in-out infinite;
    }

    @keyframes trailFade {

        0% {

            opacity: .9;
        }

        18% {
            opacity: .9;
            transform: translate(-50%, -50%) rotate(24deg) scaleX(1);
        }

        26% {
            opacity: .9;
            transform: translate(10%, -120%) rotate(24deg) scaleX(1.4);
        }

        42% {
            opacity: 0;
            transform: translate(980%, -280%) rotate(0deg) scaleX(5.4);
        }

        43%,
        100% {
            opacity: 0;
        }
    }

    .submit_btn_animtion:hover {}

    /* ════ RESPONSIVE ════ */
    @media(max-width:960px) {
        .hero-grid {
            grid-template-columns: 1fr
        }

        .hero-card {
            display: none
        }

        .why-wrap {
            grid-template-columns: 1fr
        }

        .faq-wrap {
            grid-template-columns: 1fr
        }

        .faq-cta-box {
            position: static
        }

        .contact-wrap {
            grid-template-columns: 1fr
        }

        .footer-grid {
            grid-template-columns: 1fr 1fr
        }

        .wp-panel {
            position: static
        }

        .process-steps::before {
            display: none
        }
    }

    @media(max-width:640px) {

        .nav-links,
        .nav-right .btn-outline {
            display: none
        }

        .hamburger {
            display: flex
        }

        .topbar .tb-right {
            display: none
        }

        .section {
            padding: 60px 0
        }

        .form-row {
            grid-template-columns: 1fr
        }

        .footer-grid {
            grid-template-columns: 1fr
        }

        .hc-svcs {
            grid-template-columns: repeat(3, 1fr)
        }

        .rating-bar {
            flex-wrap: wrap
        }

        .rb-div {
            display: none
        }

        .recog-row {
            gap: 20px
        }
    }



    /* Container (Left-aligned as shown in image) */
    .reveal8494 {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        text-align: left;
        max-width: 650px;
    }

    /* FAQS Badge Tag */
    .tag9649 {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background-color: #EEF2FF;
        /* Light blue/lavender tint */
        color: #3538CD;
        /* Navy blue text */
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        padding: 6px 14px;
        border-radius: 50px;
        margin-bottom: 20px;
    }

    /* Dot Base with Wave Animation Support */
    .dot854 {
        width: 7px;
        height: 7px;
        background-color: #3538CD;
        border-radius: 50%;
        display: inline-block;
        position: relative;
        isolation: isolate;
    }

    /* Wave Animation (Before & After) */
    .dot854::before,
    .dot854::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        background-color: rgba(53, 56, 205, 0.4);
        border-radius: 50%;
        z-index: -1;
        transform: translate(-50%, -50%) scale(1);
        animation: dotWavePulse 2s infinite ease-out;
    }

    /* Second Wave Delay */
    .dot854::after {
        animation-delay: 1s;
    }

    /* Keyframes for Wave Effect */
    @keyframes dotWavePulse {
        0% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.8;
        }

        100% {
            transform: translate(-50%, -50%) scale(4);
            opacity: 0;
        }
    }

    /* Heading Styling */
    .sh84a {
        font-size: 44px;
        font-weight: 800;
        line-height: 1.15;
        color: #0F172A;
        /* Dark Navy Black */
        margin: 0 0 16px 0;
        letter-spacing: -1px;
    }

    /* Subtitle Paragraph */
    .subas84 {
        font-size: 18px;
        line-height: 1.5;
        color: #475569;
        /* Slate grey */
        margin: 0;
        font-weight: 400;
    }

    .faq {
        position: relative;
        overflow: hidden;
    }

    .faq .container {
        position: relative;
        z-index: 1;
    }

    /* big faint watermark */
    .decor-qmark-big {
        position: absolute;
        top: -70px;
        right: 40px;
        font-size: 280px;
        font-weight: 800;
        line-height: 1;
        color: var(--blue);
        opacity: .05;
        font-family: Georgia, serif;
        z-index: 0;
        pointer-events: none;
        animation: qmark-sway 10s ease-in-out infinite;
    }

    @keyframes qmark-sway {

        0%,
        100% {
            transform: rotate(-4deg) scale(1);
        }

        50% {
            transform: rotate(2deg) scale(1.03);
        }
    }

    /* scattered small marks */
    .decor-qmarks-scatter {
        position: absolute;
        bottom: -10px;
        left: -10px;
        width: 220px;
        height: 260px;
        pointer-events: none;
        z-index: 0;
    }

    .decor-qmark {
        position: absolute;
        font-weight: 800;
        font-family: Georgia, serif;
        line-height: 1;
    }

    .decor-qmark.q1 {
        font-size: 40px;
        bottom: 40px;
        left: 20px;
        color: var(--gold);
        opacity: .18;
        animation: qmark-float-1 6s ease-in-out infinite;
    }

    .decor-qmark.q2 {
        font-size: 26px;
        bottom: 130px;
        left: 90px;
        color: var(--blue-md);
        opacity: .16;
        animation: qmark-float-2 7s ease-in-out infinite .4s;
    }

    .decor-qmark.q3 {
        font-size: 56px;
        bottom: 60px;
        left: 140px;
        color: var(--blue);
        opacity: .1;
        animation: qmark-float-3 8s ease-in-out infinite .8s;
    }

    .decor-qmark.q4 {
        font-size: 20px;
        bottom: 190px;
        left: 40px;
        color: var(--gold);
        opacity: .2;
        animation: qmark-float-1 5.5s ease-in-out infinite .2s;
    }

    @keyframes qmark-float-1 {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        50% {
            transform: translate(8px, -14px) rotate(-8deg);
        }
    }

    @keyframes qmark-float-2 {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        50% {
            transform: translate(-10px, 10px) rotate(6deg);
        }
    }

    @keyframes qmark-float-3 {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        50% {
            transform: translate(6px, 12px) rotate(-4deg);
        }
    }
</style>


<!-- ════ FAQ ════ -->
<section class="faq section" id="faq">
    <div class="decor-qmark-big">?</div>
    <div class="decor-qmarks-scatter">
        <span class="decor-qmark q1">?</span>
        <span class="decor-qmark q2">?</span>
        <span class="decor-qmark q3">?</span>
        <span class="decor-qmark q4">?</span>
    </div>
    <div class="container">
        <div class="reveal8494">
            <div class="tag9649"><span class="dot854"></span>FAQs</div>
            <h2 class="sh84a">Frequently asked questions</h2>
            <p class="subas84">Everything you need to know before getting started with King Digital.</p>
        </div>
        <div class="faq-wrap">
            <div class="faq-list reveal">
                <div class="faq-item">
                    <div class="faq-q">Who is the best digital marketing company in Delhi?<i
                            class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">King Digital Pvt. Ltd. is widely recognised as Delhi's leading 360° digital
                        marketing company, serving 15,000+ clients since 2010 with services ranging from bulk SMS and
                        WhatsApp API to website design and SEO.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">What is DLT registration and why do I need it for bulk SMS?<i
                            class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">DLT (Distributed Ledger Technology) is a TRAI-mandated registration for all
                        commercial SMS senders in India. Without it, your messages won't be delivered. King Digital
                        handles your DLT registration as part of our bulk SMS onboarding — completely hassle-free.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">How long does it take to build a website?<i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">A standard business website takes 2–4 weeks from kickoff to launch. E-commerce
                        portals or custom web applications may take 4–8 weeks depending on complexity. We share a clear
                        timeline before starting.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">Do you provide WhatsApp Business API for small businesses?<i
                            class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">Yes! We provide official Meta-approved WhatsApp Business API (WABA) for
                        businesses of all sizes — from startups to enterprises. We handle the signup, verification, and
                        onboarding process end-to-end.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">What is your pricing for bulk SMS services?<i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">Our bulk SMS pricing starts at very competitive rates with volume-based
                        discounts. Pricing depends on SMS type (promotional/transactional/OTP), volume, and route.
                        Contact us for a custom quote tailored to your needs.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">Do you work with political parties and election campaigns?<i
                            class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">Yes. King Digital has extensive experience with election campaigns at the state
                        and national level, having worked with major political parties including AAP and BJP. We offer
                        voice blasts, SMS, WhatsApp, and social media services for campaigns.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-q">Do you provide support after the project is delivered?<i
                            class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">Absolutely. Every project comes with post-delivery support. We assign a dedicated
                        account manager and provide ongoing maintenance, updates, and technical support. Our team is
                        reachable via phone, WhatsApp, email, and online ticketing.</div>
                </div>
            </div>

            <div class="contact-form reveal">
                <div class="cf-title">Send us a message</div>
                <div class="cf-sub">We'll get back to you within 2 hours on business days.</div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Your Name *</label>
                        <input type="text" placeholder="Rajesh Sharma" required>
                    </div>
                    <div class="form-group">
                        <label>Mobile Number *</label>
                        <input type="tel" placeholder="+91 98765 43210" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" placeholder="rajesh@company.com">
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" placeholder="Your Company Pvt. Ltd.">
                    </div>
                </div>
                <div class="form-group">
                    <label>Service Required *</label>
                    <select>
                        <option value="">— Select a service —</option>
                        <option>Bulk SMS Services</option>
                        <option>WhatsApp Business API</option>
                        <option>Website Design & Development</option>
                        <option>SEO / SMO / PPC</option>
                        <option>IVR / Toll Free / Miss Call</option>
                        <option>Email Marketing</option>
                        <option>Hosting & Cloud Servers</option>
                        <option>Video / Audio Production</option>
                        <option>Digital Marketing Academy</option>
                        <option>Other / Multiple Services</option>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label>Your Message</label>
                    <textarea
                        placeholder="Tell us about your project — goals, timeline, budget, or any questions you have..."></textarea>
                </div> -->
                <button type="submit" class="btn btn-primary form-submit " onclick="flyr_tyse()">
                    Send Message — We'll Reply in 2 Hours
                    <!-- <div class="submit_btn_animtion">
                        <i class="fa-solid fa-paper-plane sesa885" ></i>
                    </div> -->
                </button>
            </div>

        </div>
    </div>
</section>



<!-- <script>

    function flyr_tyse(){
 let btn_sew = document.getElementsByClassName("submit_btn_animtion")

 btn_sew.style.left="0px"

    }


    /* ─ Scroll reveal ─ */
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => entry.target.classList.add('visible'), 60 * (entry.target.dataset.delay || 0));
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12
    });

    /* ─ FAQ accordion ─ */
    document.querySelectorAll('.faq-q').forEach(q => {
        q.addEventListener('click', () => {
            const item = q.parentElement;
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        });
    });
</script> -->