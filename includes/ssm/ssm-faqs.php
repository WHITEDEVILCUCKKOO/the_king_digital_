<!-- FONT AWESOME -->
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
    /* =========================================================
   COMPLETE FAQ SECTION
   ========================================================= */

    .kd-faq-section,
    .kd-faq-section * {
        box-sizing: border-box;
    }

    .kd-faq-section {
        position: relative;
        overflow: hidden;
        padding: 85px 0;
        background: #F8F8FA;
        font-family: Inter, "Segoe UI", Arial, sans-serif;
    }

    .kd-faq-container {
        position: relative;
        z-index: 2;
        width: min(1200px, calc(100% - 48px));
        margin: 0 auto;
    }


    /* =========================================================
   DECORATIVE QUESTION MARKS
   ========================================================= */

    .kd-faq-big-question {
        position: absolute;
        right: 4%;
        top: -85px;
        font-size: 300px;
        font-weight: 800;
        line-height: 1;

        color: #7C3AED;
        opacity: 0.045;

        pointer-events: none;
        user-select: none;

        animation: kdQuestionMove 9s ease-in-out infinite;
    }

    @keyframes kdQuestionMove {

        0%,
        100% {
            transform: rotate(-5deg) translateY(0);
        }

        50% {
            transform: rotate(4deg) translateY(10px);
        }
    }


    /* =========================================================
   SECTION HEADING
   ========================================================= */

    .kd-faq-heading {
        max-width: 680px;
        margin-bottom: 50px;
    }

    .kd-faq-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        margin-bottom: 18px;
        padding: 7px 14px;

        background: #F5F3FF;
        border: 1px solid #DDD6FE;
        border-radius: 100px;

        color: #7C3AED;

        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.2px;
        text-transform: uppercase;
    }

    .kd-faq-badge-dot {
        position: relative;

        width: 7px;
        height: 7px;

        border-radius: 50%;
        background: #7C3AED;
    }

    .kd-faq-badge-dot::before {
        content: "";
        position: absolute;

        inset: -4px;

        border-radius: 50%;
        border: 1px solid rgba(124, 58, 237, .25);

        animation: kdFaqPulse 1.8s ease-out infinite;
    }

    @keyframes kdFaqPulse {
        0% {
            transform: scale(.7);
            opacity: 1;
        }

        100% {
            transform: scale(1.8);
            opacity: 0;
        }
    }

    .kd-faq-heading h2 {
        margin: 0 0 15px;

        color: #18181B;

        font-size: clamp(34px, 4vw, 46px);
        font-weight: 800;
        line-height: 1.12;
        letter-spacing: -1.5px;
    }

    .kd-faq-heading h2 span {
        background: linear-gradient(90deg,
                #7C3AED,
                #EC4899,
                #F97316);

        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .kd-faq-heading p {
        max-width: 600px;
        margin: 0;

        color: #71717A;

        font-size: 16px;
        line-height: 1.7;
    }


    /* =========================================================
   TWO COLUMN LAYOUT
   ========================================================= */

    .kd-faq-grid {
        display: grid;
        grid-template-columns: minmax(0, 1.4fr) minmax(360px, 1fr);

        gap: 55px;
        align-items: start;
    }


    /* =========================================================
   FAQ ACCORDION
   ========================================================= */

    .kd-faq-list {
        display: flex;
        flex-direction: column;
        gap: 11px;
    }

    .kd-faq-item {
        overflow: hidden;

        background: #FFFFFF;

        border: 1px solid #E4E4E7;
        border-radius: 13px;

        box-shadow: 0 3px 12px rgba(24, 16, 38, .035);

        transition:
            border-color .25s ease,
            box-shadow .25s ease,
            transform .25s ease;
    }

    .kd-faq-item:hover {
        border-color: #DDD6FE;

        box-shadow:
            0 8px 25px rgba(24, 16, 38, .06);
    }

    .kd-faq-item.active {
        border-color: rgba(124, 58, 237, .35);

        box-shadow:
            0 10px 30px rgba(124, 58, 237, .08);
    }


    /* FAQ QUESTION */

    .kd-faq-question {
        width: 100%;

        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 20px;

        padding: 20px 21px;

        border: 0;
        outline: 0;

        background: transparent;

        color: #18181B;

        font-family: inherit;
        font-size: 14px;
        font-weight: 750;
        line-height: 1.5;

        text-align: left;
        cursor: pointer;
    }

    .kd-faq-question-text {
        display: flex;
        align-items: flex-start;
        gap: 12px;
    }

    .kd-faq-number {
        flex: 0 0 auto;

        color: #7C3AED;

        font-size: 12px;
        font-weight: 800;

        padding-top: 2px;
    }


    /* PLUS ICON */

    .kd-faq-icon {
        position: relative;
        flex: 0 0 30px;

        width: 30px;
        height: 30px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #F5F3FF;
        color: #7C3AED;

        transition:
            transform .3s ease,
            background .3s ease,
            color .3s ease;
    }

    .kd-faq-icon::before,
    .kd-faq-icon::after {
        content: "";

        position: absolute;

        width: 10px;
        height: 1.5px;

        border-radius: 10px;

        background: currentColor;

        transition: transform .3s ease;
    }

    .kd-faq-icon::after {
        transform: rotate(90deg);
    }

    .kd-faq-item.active .kd-faq-icon {
        background: #7C3AED;
        color: #FFFFFF;

        transform: rotate(180deg);
    }

    .kd-faq-item.active .kd-faq-icon::after {
        transform: rotate(0);
    }


    /* FAQ ANSWER */

    .kd-faq-answer {
        max-height: 0;
        overflow: hidden;

        transition:
            max-height .35s ease,
            opacity .3s ease;

        opacity: 0;
    }

    .kd-faq-answer-inner {
        padding:
            0 64px 20px 45px;

        color: #71717A;

        font-size: 14px;
        line-height: 1.75;
    }

    .kd-faq-item.active .kd-faq-answer {
        opacity: 1;
    }


    /* =========================================================
   PREMIUM CTA CARD
   ========================================================= */

    .kd-question-card {
        position: sticky;
        top: 90px;

        overflow: hidden;
        isolation: isolate;

        padding: 48px 38px 38px;

        border-radius: 24px;

        background:
            radial-gradient(circle at 50% -12%,
                rgba(124, 58, 237, .58) 0%,
                rgba(124, 58, 237, .20) 30%,
                transparent 55%),
            linear-gradient(145deg,
                #24163A 0%,
                #181026 52%,
                #0F0A18 100%);

        border: 1px solid rgba(255, 255, 255, .10);

        box-shadow:
            0 30px 70px rgba(24, 16, 38, .18),
            inset 0 1px 0 rgba(255, 255, 255, .08);

        text-align: center;
    }


    /* TOP ACCENT */

    .kd-question-card::before {
        content: "";

        position: absolute;
        top: 0;
        left: 50%;

        width: 115px;
        height: 3px;

        transform: translateX(-50%);

        border-radius: 0 0 20px 20px;

        background:
            linear-gradient(90deg,
                transparent,
                #F97316,
                #FDBA74,
                #F97316,
                transparent);

        box-shadow:
            0 0 22px rgba(249, 115, 22, .45);
    }


    /* PURPLE GLOW */

    .kd-question-card::after {
        content: "";

        position: absolute;

        width: 280px;
        height: 280px;

        top: -200px;
        left: 50%;

        transform: translateX(-50%);

        border-radius: 50%;

        background: rgba(124, 58, 237, .28);

        filter: blur(55px);

        pointer-events: none;
        z-index: -1;
    }


    /* CARD BADGE */

    .kd-question-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 8px;

        padding: 7px 13px;
        margin-bottom: 17px;

        border-radius: 50px;

        background: rgba(255, 255, 255, .07);
        border: 1px solid rgba(255, 255, 255, .10);

        color: rgba(255, 255, 255, .70);

        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1.4px;
        text-transform: uppercase;
    }

    .kd-question-badge span {
        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: #F97316;

        box-shadow:
            0 0 0 4px rgba(249, 115, 22, .10),
            0 0 14px rgba(249, 115, 22, .45);
    }


    /* CARD TITLE */

    .kd-question-title {
        margin: 0 0 13px;

        color: #FFFFFF;

        font-size: clamp(30px, 3.3vw, 40px);
        font-weight: 800;
        line-height: 1.12;
        letter-spacing: -1.2px;
    }

    .kd-question-line {
        width: 40px;
        height: 3px;

        margin: 0 auto 17px;

        border-radius: 20px;

        background: #F97316;
    }

    .kd-question-description {
        max-width: 500px;

        margin: 0 auto 27px;

        color: rgba(255, 255, 255, .64);

        font-size: 14px;
        line-height: 1.7;
    }


    /* =========================================================
   CTA BUTTONS
   ========================================================= */

    .kd-question-btn {
        width: 100%;
        min-height: 51px;

        display: flex;
        align-items: center;
        justify-content: center;

        gap: 9px;

        padding: 13px 18px;

        border-radius: 11px;

        text-decoration: none !important;

        font-size: 14px;
        font-weight: 700;

        transition:
            transform .25s ease,
            box-shadow .25s ease,
            background .25s ease;
    }


    /* MESSAGE */

    .kd-question-primary {
        color: #FFFFFF !important;

        background:
            linear-gradient(135deg,
                #7C3AED 0%,
                #6D28D9 55%,
                #5B21B6 100%);

        border: 1px solid rgba(255, 255, 255, .10);

        box-shadow:
            0 10px 25px rgba(91, 33, 182, .30);
    }

    .kd-question-primary:hover {
        transform: translateY(-2px);

        background:
            linear-gradient(135deg,
                #8B5CF6,
                #7C3AED 55%,
                #6D28D9);

        box-shadow:
            0 15px 32px rgba(91, 33, 182, .38);
    }

    .kd-question-arrow {
        width: 24px;
        height: 24px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: rgba(255, 255, 255, .13);

        font-size: 10px;

        transition: transform .25s ease;
    }

    .kd-question-primary:hover .kd-question-arrow {
        transform: translateX(3px);
    }


    /* OR */

    .kd-question-or {
        display: flex;
        align-items: center;

        gap: 13px;

        margin: 16px 0;

        color: rgba(255, 255, 255, .32);

        font-size: 11px;
        font-weight: 600;
    }

    .kd-question-or::before,
    .kd-question-or::after {
        content: "";

        flex: 1;

        height: 1px;

        background: rgba(255, 255, 255, .09);
    }


    /* CALL */

    .kd-question-call {
        background: #FFFFFF;

        border: 1px solid #FFFFFF;

        color: #24163A !important;

        box-shadow:
            0 8px 20px rgba(0, 0, 0, .12);
    }

    .kd-question-call i {
        color: #7C3AED;
    }

    .kd-question-call:hover {
        transform: translateY(-2px);

        color: #5B21B6 !important;

        box-shadow:
            0 13px 28px rgba(0, 0, 0, .17);
    }


    /* =========================================================
   BOTTOM CONTACTS
   ========================================================= */

    .kd-question-bottom {
        margin-top: 27px;
        padding-top: 22px;

        border-top: 1px solid rgba(255, 255, 255, .09);
    }

    .kd-question-bottom-title {
        margin-bottom: 13px;

        color: rgba(255, 255, 255, .38);

        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
    }

    .kd-question-small-buttons {
        display: flex;
        justify-content: center;

        gap: 9px;
    }

    .kd-question-small-btn {
        min-height: 41px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 7px;

        padding: 10px 15px;

        border-radius: 9px;

        text-decoration: none !important;

        font-size: 13px;
        font-weight: 700;

        transition:
            transform .25s ease,
            background .25s ease,
            border-color .25s ease;
    }


    /* WHATSAPP */

    .kd-question-whatsapp {
        background: #25D366;
        border: 1px solid #25D366;

        color: #FFFFFF !important;
    }

    .kd-question-whatsapp:hover {
        transform: translateY(-2px);

        background: #1FBD5B;

        color: #FFFFFF !important;
    }


    /* MEETING */

    .kd-question-meet {
        background: rgba(255, 255, 255, .07);

        border: 1px solid rgba(255, 255, 255, .11);

        color: rgba(255, 255, 255, .90) !important;
    }

    .kd-question-meet i {
        color: #A78BFA;
    }

    .kd-question-meet:hover {
        transform: translateY(-2px);

        background: rgba(124, 58, 237, .18);

        border-color: rgba(167, 139, 250, .35);

        color: #FFFFFF !important;
    }


    /* =========================================================
   RESPONSIVE
   ========================================================= */

    @media (max-width: 960px) {

        .kd-faq-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .kd-question-card {
            position: relative;
            top: auto;
        }

    }


    @media (max-width: 640px) {

        .kd-faq-section {
            padding: 60px 0;
        }

        .kd-faq-container {
            width: min(100% - 30px, 1200px);
        }

        .kd-faq-heading {
            margin-bottom: 35px;
        }

        .kd-faq-heading h2 {
            font-size: 34px;
        }

        .kd-faq-heading p {
            font-size: 14px;
        }

        .kd-faq-question {
            padding: 17px 16px;
        }

        .kd-faq-answer-inner {
            padding: 0 18px 18px 43px;
        }

        .kd-question-card {
            padding: 42px 21px 30px;
            border-radius: 20px;
        }

        .kd-question-title {
            font-size: 31px;
        }

        .kd-question-small-buttons {
            flex-direction: column;
        }

        .kd-question-small-btn {
            width: 100%;
        }

    }
</style>


<!-- =========================================================
     FAQ SECTION START
     ========================================================= -->

<section class="kd-faq-section" id="faq">

    <div class="kd-faq-big-question">?</div>


    <div class="kd-faq-container">


        <!-- SECTION HEADING -->

        <div class="kd-faq-heading">

            <div class="kd-faq-badge">
                <span class="kd-faq-badge-dot"></span>
                FAQs
            </div>

            <h2>
                Frequently Asked
                <span>Questions</span>
            </h2>

            <p>
                Everything you need to know before getting started
                with King Digital.
            </p>

        </div>


        <!-- GRID -->

        <div class="kd-faq-grid">


            <!-- =================================================
                 LEFT SIDE FAQS
                 ================================================= -->

            <div class="kd-faq-list">


                <!-- FAQ 1 -->

                <div class="kd-faq-item">

                    <button class="kd-faq-question" type="button">

                        <span class="kd-faq-question-text">

                            <span class="kd-faq-number">01</span>

                            <span>
                                What is Social Media Marketing?
                            </span>

                        </span>

                        <span class="kd-faq-icon"></span>

                    </button>

                    <div class="kd-faq-answer">

                        <div class="kd-faq-answer-inner">
                            Social media marketing is the process of using
                            platforms like Instagram, Facebook, LinkedIn,
                            and YouTube to build brand awareness, engage
                            your audience, generate leads, and drive
                            business growth through organic content and
                            paid campaigns.
                        </div>

                    </div>

                </div>


                <!-- FAQ 2 -->

                <div class="kd-faq-item">

                    <button class="kd-faq-question" type="button">

                        <span class="kd-faq-question-text">

                            <span class="kd-faq-number">02</span>

                            <span>
                                Which Social Media Platforms Should My Business Use?
                            </span>

                        </span>

                        <span class="kd-faq-icon"></span>

                    </button>

                    <div class="kd-faq-answer">

                        <div class="kd-faq-answer-inner">
                            It depends on your target audience, industry,
                            and business goals. Instagram and Facebook are
                            commonly used for consumer brands, LinkedIn is
                            strong for B2B businesses, while YouTube can
                            be effective for educational and long-form
                            video content.
                        </div>

                    </div>

                </div>


                <!-- FAQ 3 -->

                <div class="kd-faq-item">

                    <button class="kd-faq-question" type="button">

                        <span class="kd-faq-question-text">

                            <span class="kd-faq-number">03</span>

                            <span>
                                Do I Need to Post Every Day on Social Media?
                            </span>

                        </span>

                        <span class="kd-faq-icon"></span>

                    </button>

                    <div class="kd-faq-answer">

                        <div class="kd-faq-answer-inner">
                            No. Consistency and content quality are
                            generally more important than simply posting
                            every day. A well-planned content calendar
                            can combine posts, reels, stories, and other
                            formats based on your audience and objectives.
                        </div>

                    </div>

                </div>


                <!-- FAQ 4 -->

                <div class="kd-faq-item">

                    <button class="kd-faq-question" type="button">

                        <span class="kd-faq-question-text">

                            <span class="kd-faq-number">04</span>

                            <span>
                                What Type of Content Should My Business Post?
                            </span>

                        </span>

                        <span class="kd-faq-icon"></span>

                    </button>

                    <div class="kd-faq-answer">

                        <div class="kd-faq-answer-inner">
                            Your content should balance education,
                            entertainment, credibility, and promotion.
                            Depending on your business, this can include
                            reels, carousels, product demonstrations,
                            customer stories, behind-the-scenes content,
                            educational posts, testimonials, and
                            promotional campaigns.
                        </div>

                    </div>

                </div>


                <!-- FAQ 5 -->

                <div class="kd-faq-item">

                    <button class="kd-faq-question" type="button">

                        <span class="kd-faq-question-text">

                            <span class="kd-faq-number">05</span>

                            <span>
                                How Do Social Media Ads Generate Leads?
                            </span>

                        </span>

                        <span class="kd-faq-icon"></span>

                    </button>

                    <div class="kd-faq-answer">

                        <div class="kd-faq-answer-inner">
                            Paid social campaigns allow businesses to
                            target audiences based on factors such as
                            demographics, interests, behaviors, and
                            interactions. Campaigns can then direct users
                            toward actions such as filling out a form,
                            sending a WhatsApp message, visiting a
                            website, or making a purchase.
                        </div>

                    </div>

                </div>


                <!-- FAQ 6 -->

                <div class="kd-faq-item">

                    <button class="kd-faq-question" type="button">

                        <span class="kd-faq-question-text">

                            <span class="kd-faq-number">06</span>

                            <span>
                                How Do You Measure Social Media Marketing Performance?
                            </span>

                        </span>

                        <span class="kd-faq-icon"></span>

                    </button>

                    <div class="kd-faq-answer">

                        <div class="kd-faq-answer-inner">
                            Beyond followers and likes, we can track
                            metrics such as reach, engagement rate,
                            video views, profile visits, website traffic,
                            leads, cost per lead, conversions, and return
                            on ad spend (ROAS). The important metrics
                            depend on the campaign objective.
                        </div>

                    </div>

                </div>


                <!-- FAQ 7 -->

                <div class="kd-faq-item">

                    <button class="kd-faq-question" type="button">

                        <span class="kd-faq-question-text">

                            <span class="kd-faq-number">07</span>

                            <span>
                                How Can Social Media Marketing Be Optimized for Better ROI?
                            </span>

                        </span>

                        <span class="kd-faq-icon"></span>

                    </button>

                    <div class="kd-faq-answer">

                        <div class="kd-faq-answer-inner">
                            Advanced campaigns use audience segmentation,
                            A/B testing, retargeting, creative testing,
                            conversion tracking, and ongoing budget
                            optimization. Performance data can then be
                            used to identify which audiences, creatives,
                            platforms, and campaigns are producing
                            meaningful business results.
                        </div>

                    </div>

                </div>


            </div>


            <!-- =================================================
                 RIGHT SIDE PREMIUM CTA
                 ================================================= -->

            <div class="kd-question-card">


                <div class="kd-question-badge">

                    <span></span>

                    Let's Talk

                </div>


                <h3 class="kd-question-title">
                    Still have questions?
                </h3>


                <div class="kd-question-line"></div>


                <p class="kd-question-description">
                    Our team is here to help. Get a free 30-minute
                    consultation with our digital expert — no pressure,
                    no obligation.
                </p>


                <!-- MESSAGE -->

                <a
                    href="contact.php"
                    class="kd-question-btn kd-question-primary">

                    <i class="fa-solid fa-paper-plane"></i>

                    <span>
                        Send Us a Message
                    </span>

                    <span class="kd-question-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </span>

                </a>


                <!-- OR -->

                <div class="kd-question-or">
                    <span>OR</span>
                </div>


                <!-- CALL -->

                <a
                    href="tel:+919211339966"
                    class="kd-question-btn kd-question-call">

                    <i class="fa-solid fa-phone"></i>

                    <span>
                        Call Now
                    </span>

                </a>


                <!-- BOTTOM CONTACT -->

                <div class="kd-question-bottom">

                    <div class="kd-question-bottom-title">
                        Also reach us on
                    </div>


                    <div class="kd-question-small-buttons">


                        <!-- WHATSAPP -->

                        <a
                            href="https://wa.me/919211339966"
                            target="_blank"
                            rel="noopener"
                            class="kd-question-small-btn kd-question-whatsapp">

                            <i class="fa-brands fa-whatsapp"></i>

                            <span>WhatsApp</span>

                        </a>


                        <!-- MEET ONLINE -->

                        <a
                            href="https://kingdigital.in/online-meeting.php"
                            class="kd-question-small-btn kd-question-meet">

                            <i class="fa-solid fa-video"></i>

                            <span>Meet Online</span>

                        </a>


                    </div>

                </div>


            </div>


        </div>

    </div>

</section>


<!-- =========================================================
     FAQ SCRIPT
     ========================================================= -->

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const faqItems = document.querySelectorAll(".kd-faq-item");

        faqItems.forEach(function(item) {

            const question = item.querySelector(".kd-faq-question");
            const answer = item.querySelector(".kd-faq-answer");

            question.addEventListener("click", function() {

                const isActive = item.classList.contains("active");

                /* Close all FAQs */
                faqItems.forEach(function(otherItem) {

                    otherItem.classList.remove("active");

                    const otherAnswer =
                        otherItem.querySelector(".kd-faq-answer");

                    otherAnswer.style.maxHeight = null;

                });


                /* Open selected FAQ */
                if (!isActive) {

                    item.classList.add("active");

                    answer.style.maxHeight =
                        answer.scrollHeight + "px";

                }

            });

        });

    });
</script>