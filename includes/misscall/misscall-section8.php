<!-- =========================================================
 KING DIGITAL - MISSED CALL SERVICE
 SECTION 08 - FAQ
 PREMIUM PURPLE / LAVENDER THEME
 ONE FAQ OPEN AT A TIME
 COMPLETE FINAL CODE
========================================================= -->

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>
    /* =========================================================
 RESET
========================================================= */

    .mcfaq-section,
    .mcfaq-section * {
        box-sizing: border-box;
    }


    /* =========================================================
 SECTION
========================================================= */

    .mcfaq-section {

        position: relative;
        isolation: isolate;

        width: 100%;
        overflow: hidden;

        padding: 58px 28px 65px;

        font-family: "Poppins", Arial, sans-serif;

        background:

            radial-gradient(circle at 93% 8%,
                rgba(126, 87, 216, .09),
                transparent 27%),

            radial-gradient(circle at 4% 92%,
                rgba(218, 78, 149, .045),
                transparent 26%),

            linear-gradient(135deg,
                #ffffff 0%,
                #fbf9ff 100%);

    }


    /* =========================================================
 GLOWS
========================================================= */

    .mcfaq-glow {

        position: absolute;

        pointer-events: none;

        border-radius: 50%;

        filter: blur(100px);

    }


    .mcfaq-glow-one {

        width: 350px;
        height: 350px;

        right: -190px;
        top: -180px;

        background:
            rgba(123, 84, 213, .08);

    }


    .mcfaq-glow-two {

        width: 300px;
        height: 300px;

        left: -180px;
        bottom: -170px;

        background:
            rgba(218, 78, 149, .04);

    }


    /* =========================================================
 CONTAINER
========================================================= */

    .mcfaq-container {

        position: relative;
        z-index: 3;

        width: 100%;
        max-width: 1280px;

        margin: 0 auto;

        display: grid;

        grid-template-columns:
            minmax(340px, .78fr) minmax(0, 1.22fr);

        align-items: start;

        gap: 75px;

    }


    /* =========================================================
 LEFT
========================================================= */

    .mcfaq-left {

        position: sticky;

        top: 110px;

        max-width: 480px;

    }


    /* =========================================================
 LABEL
========================================================= */

    .mcfaq-label {

        width: max-content;

        display: inline-flex;

        align-items: center;

        gap: 8px;

        margin-bottom: 15px;

        padding:
            6px 14px 6px 7px;

        border:
            1px solid rgba(116, 80, 201, .10);

        border-radius: 30px;

        background: #f1ecff;

        color: #704ec5;

        font-size: 9px;

        line-height: 1;

        font-weight: 750;

        letter-spacing: 1.3px;

    }


    .mcfaq-label>span {

        width: 28px;
        height: 28px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #ffffff;

        color: #7954d4;

    }


    /* =========================================================
 HEADING
========================================================= */

    .mcfaq-left h2 {

        margin:
            0 0 17px;

        color: #291d3f;

        font-size:
            clamp(35px,
                3.4vw,
                48px);

        line-height: 1.12;

        font-weight: 730;

        letter-spacing: -1.5px;

    }


    .mcfaq-left h2 span {

        display: block;

        margin-top: 5px;

        color: #7955d4;

    }


    /* =========================================================
 DESCRIPTION
========================================================= */

    .mcfaq-left>p {

        margin: 0;

        color: #716a79;

        font-size: 15px;

        line-height: 1.8;

    }


    /* =========================================================
 HELP BOX
========================================================= */

    .mcfaq-help {

        display: grid;

        grid-template-columns:
            48px 1fr;

        align-items: start;

        gap: 12px;

        margin-top: 27px;

        padding: 16px;

        border:
            1px solid rgba(116, 80, 201, .10);

        border-radius: 15px;

        background:

            linear-gradient(135deg,
                #f7f3ff,
                #ffffff);

    }


    /* HELP ICON */

    .mcfaq-help-icon {

        width: 48px;
        height: 48px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 13px;

        background:

            linear-gradient(135deg,
                #6847bd,
                #9067e8);

        color: #ffffff;

        font-size: 16px;

        box-shadow:
            0 10px 22px rgba(104, 72, 187, .17);

    }


    /* HELP TEXT */

    .mcfaq-help small,
    .mcfaq-help strong {

        display: block;

    }


    .mcfaq-help small {

        margin-bottom: 4px;

        color: #9e95a7;

        font-size: 7px;

        line-height: 1;

        font-weight: 700;

        letter-spacing: .7px;

    }


    .mcfaq-help strong {

        margin-bottom: 5px;

        color: #413053;

        font-size: 13px;

        line-height: 1.3;

        font-weight: 650;

    }


    .mcfaq-help p {

        margin: 0;

        color: #857d8a;

        font-size: 10.5px;

        line-height: 1.55;

    }


    /* =========================================================
 BUTTON
========================================================= */

    .mcfaq-btn,
    .mcfaq-btn:link,
    .mcfaq-btn:visited,
    .mcfaq-btn:hover,
    .mcfaq-btn:focus {

        min-height: 48px;

        width: max-content;

        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 9px;

        margin-top: 20px;

        padding:
            0 21px;

        border-radius: 9px;

        background:

            linear-gradient(100deg,
                #6545bd,
                #8a62ec);

        color: #ffffff !important;

        -webkit-text-fill-color: #ffffff !important;

        text-decoration: none !important;

        font-size: 12px;

        line-height: 1;

        font-weight: 650;

        box-shadow:
            0 11px 25px rgba(107, 74, 191, .19);

        transition:
            transform .3s ease,
            box-shadow .3s ease;

    }


    .mcfaq-btn:hover {

        transform:
            translateY(-2px);

        box-shadow:
            0 16px 30px rgba(107, 74, 191, .27);

    }


    /* =========================================================
 FAQ LIST
========================================================= */

    .mcfaq-list {

        width: 100%;

        display: grid;

        gap: 11px;

    }


    /* =========================================================
 FAQ ITEM
========================================================= */

    .mcfaq-item {

        position: relative;

        overflow: hidden;

        border:
            1px solid #ebe6f1;

        border-radius: 15px;

        background: #ffffff;

        box-shadow:
            0 8px 24px rgba(64, 44, 104, .035);

        transition:
            border-color .3s ease,
            box-shadow .3s ease,
            transform .3s ease;

    }


    .mcfaq-item:hover {

        border-color:
            rgba(120, 84, 209, .18);

    }


    /* ACTIVE */

    .mcfaq-item.active {

        border-color:
            rgba(121, 84, 211, .26);

        box-shadow:
            0 14px 32px rgba(66, 46, 108, .07);

    }


    /* =========================================================
 QUESTION BUTTON
========================================================= */

    .mcfaq-question {

        appearance: none;

        width: 100%;

        min-height: 72px;

        display: grid;

        grid-template-columns:
            38px 1fr 34px;

        align-items: center;

        gap: 13px;

        padding:
            14px 16px;

        border: 0 !important;

        outline: none !important;

        background: transparent !important;

        box-shadow: none !important;

        text-align: left;

        cursor: pointer;

        font-family: "Poppins", Arial, sans-serif;

    }


    /* =========================================================
 NUMBER
========================================================= */

    .mcfaq-number {

        width: 38px;
        height: 38px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 11px;

        background: #f1ecff;

        color: #7853d3;

        font-size: 9px;

        line-height: 1;

        font-weight: 750;

        transition:
            background .3s ease,
            color .3s ease;

    }


    .mcfaq-item.active .mcfaq-number {

        background:

            linear-gradient(135deg,
                #6847bd,
                #9067e8);

        color: #ffffff;

    }


    /* =========================================================
 QUESTION TEXT
========================================================= */

    .mcfaq-question-text {

        color: #443354;

        font-size: 14px;

        line-height: 1.45;

        font-weight: 620;

    }


    /* =========================================================
 TOGGLE ICON
========================================================= */

    .mcfaq-toggle {

        width: 34px;
        height: 34px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #f4f1f8;

        color: #7251c5;

        font-size: 10px;

        transition:
            transform .35s ease,
            background .3s ease,
            color .3s ease;

    }


    .mcfaq-item.active .mcfaq-toggle {

        transform:
            rotate(45deg);

        background: #eee8ff;

        color: #7854d4;

    }


    /* =========================================================
 ANSWER
========================================================= */

    .mcfaq-answer {

        max-height: 0;

        overflow: hidden;

        opacity: 0;

        transition:
            max-height .45s cubic-bezier(.2, .7, .3, 1),
            opacity .3s ease;

    }


    .mcfaq-item.active .mcfaq-answer {

        opacity: 1;

    }


    /* INNER */

    .mcfaq-answer-inner {

        padding:
            0 63px 18px 67px;

    }


    /* ANSWER TEXT */

    .mcfaq-answer-inner p {

        margin: 0;

        padding-top: 13px;

        border-top:
            1px solid #f0ecf4;

        color: #7d7584;

        font-size: 13px;

        line-height: 1.75;

    }


    /* =========================================================
 TABLET
========================================================= */

    @media(max-width:900px) {

        .mcfaq-section {

            padding:
                50px 20px;

        }


        .mcfaq-container {

            grid-template-columns: 1fr;

            gap: 35px;

        }


        .mcfaq-left {

            position: relative;

            top: auto;

            max-width: 700px;

            margin: 0 auto;

            text-align: center;

        }


        .mcfaq-label {

            margin-left: auto;
            margin-right: auto;

        }


        .mcfaq-help {

            max-width: 530px;

            margin-left: auto;
            margin-right: auto;

            text-align: left;

        }


        .mcfaq-btn {

            margin-left: auto;
            margin-right: auto;

        }


        .mcfaq-list {

            max-width: 760px;

            margin: 0 auto;

        }

    }


    /* =========================================================
 MOBILE
========================================================= */

    @media(max-width:600px) {

        .mcfaq-section {

            padding:
                40px 14px 45px;

        }


        .mcfaq-container {

            gap: 28px;

        }


        .mcfaq-left h2 {

            font-size: 29px;

            line-height: 1.15;

            letter-spacing: -1px;

        }


        .mcfaq-left>p {

            font-size: 13.5px;

            line-height: 1.72;

        }


        .mcfaq-help {

            grid-template-columns:
                43px 1fr;

            padding: 13px;

            margin-top: 21px;

        }


        .mcfaq-help-icon {

            width: 43px;
            height: 43px;

        }


        .mcfaq-help p {

            font-size: 10px;

        }


        .mcfaq-btn {

            min-height: 44px;

            margin-top: 17px;

            padding:
                0 17px;

            font-size: 10.5px;

        }


        /* FAQ */

        .mcfaq-list {

            gap: 8px;

        }


        .mcfaq-question {

            min-height: 65px;

            grid-template-columns:
                34px 1fr 31px;

            gap: 10px;

            padding:
                12px;

        }


        .mcfaq-number {

            width: 34px;
            height: 34px;

        }


        .mcfaq-question-text {

            font-size: 12.5px;

            line-height: 1.4;

        }


        .mcfaq-toggle {

            width: 31px;
            height: 31px;

        }


        .mcfaq-answer-inner {

            padding:
                0 53px 15px 56px;

        }


        .mcfaq-answer-inner p {

            padding-top: 11px;

            font-size: 11.5px;

            line-height: 1.7;

        }

    }


    /* =========================================================
 SMALL MOBILE
========================================================= */

    @media(max-width:390px) {

        .mcfaq-left h2 {

            font-size: 26px;

        }


        .mcfaq-question {

            grid-template-columns:
                32px 1fr 29px;

            padding:
                11px 10px;

            gap: 8px;

        }


        .mcfaq-number {

            width: 32px;
            height: 32px;

            font-size: 8px;

        }


        .mcfaq-question-text {

            font-size: 11.5px;

        }


        .mcfaq-toggle {

            width: 29px;
            height: 29px;

        }


        .mcfaq-answer-inner {

            padding:
                0 45px 14px 50px;

        }

    }
</style>


<section class="mcfaq-section">

    <!-- BACKGROUND DECORATION -->
    <div class="mcfaq-glow mcfaq-glow-one"></div>
    <div class="mcfaq-glow mcfaq-glow-two"></div>

    <div class="mcfaq-container">

        <!-- =================================================
             LEFT CONTENT
        ================================================== -->
        <div class="mcfaq-left">

            <div class="mcfaq-label">

                <span>
                    <i class="fa-solid fa-circle-question"></i>
                </span>

                FREQUENTLY ASKED QUESTIONS

            </div>


            <h2>
                Questions About
                <span>Missed Call Service?</span>
            </h2>


            <p>
                Find quick answers about how missed call services work,
                how leads are captured and how automated follow-up workflows
                can support your business.
            </p>


            <!-- SMALL CONTACT BOX -->
            <div class="mcfaq-help">

                <div class="mcfaq-help-icon">
                    <i class="fa-solid fa-headset"></i>
                </div>

                <div>

                    <small>
                        STILL HAVE QUESTIONS?
                    </small>

                    <strong>
                        Talk To Our Team
                    </strong>

                    <p>
                        Get help choosing the right missed call workflow
                        for your business.
                    </p>

                </div>

            </div>


            <!-- CTA -->
            <a href="#contact" class="mcfaq-btn">

                Request A Demo

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>



        <!-- =================================================
             RIGHT FAQ
        ================================================== -->
        <div class="mcfaq-list">


            <!-- =================================================
                 FAQ 01
            ================================================== -->
            <div class="mcfaq-item active">

                <button class="mcfaq-question" type="button">

                    <span class="mcfaq-number">
                        01
                    </span>

                    <span class="mcfaq-question-text">
                        What is a missed call service?
                    </span>

                    <span class="mcfaq-toggle">
                        <i class="fa-solid fa-plus"></i>
                    </span>

                </button>


                <div class="mcfaq-answer">

                    <div class="mcfaq-answer-inner">

                        <p>
                            A missed call service allows customers to connect
                            with your business by giving a missed call to a
                            dedicated number. The system captures the caller's
                            mobile number and can trigger actions such as lead
                            creation, SMS responses or callback workflows.
                        </p>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 FAQ 02
            ================================================== -->
            <div class="mcfaq-item">

                <button class="mcfaq-question" type="button">

                    <span class="mcfaq-number">
                        02
                    </span>

                    <span class="mcfaq-question-text">
                        How does a missed call generate a lead?
                    </span>

                    <span class="mcfaq-toggle">
                        <i class="fa-solid fa-plus"></i>
                    </span>

                </button>


                <div class="mcfaq-answer">

                    <div class="mcfaq-answer-inner">

                        <p>
                            When a customer gives a missed call, the incoming
                            phone number is detected and recorded automatically.
                            The captured number can then be stored as a lead,
                            added to your CRM or routed to your sales team.
                        </p>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 FAQ 03
            ================================================== -->
            <div class="mcfaq-item">

                <button class="mcfaq-question" type="button">

                    <span class="mcfaq-number">
                        03
                    </span>

                    <span class="mcfaq-question-text">
                        Can an automatic SMS be sent after a missed call?
                    </span>

                    <span class="mcfaq-toggle">
                        <i class="fa-solid fa-plus"></i>
                    </span>

                </button>


                <div class="mcfaq-answer">

                    <div class="mcfaq-answer-inner">

                        <p>
                            Yes. A missed call workflow can be configured to
                            trigger an automated SMS confirmation, campaign
                            message or other predefined response after the
                            customer's call is detected.
                        </p>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 FAQ 04
            ================================================== -->
            <div class="mcfaq-item">

                <button class="mcfaq-question" type="button">

                    <span class="mcfaq-number">
                        04
                    </span>

                    <span class="mcfaq-question-text">
                        Can missed call leads be connected with a CRM?
                    </span>

                    <span class="mcfaq-toggle">
                        <i class="fa-solid fa-plus"></i>
                    </span>

                </button>


                <div class="mcfaq-answer">

                    <div class="mcfaq-answer-inner">

                        <p>
                            Missed call data can be integrated with supported
                            CRM systems or business workflows so captured leads
                            can be organized, assigned and followed up by your
                            team more efficiently.
                        </p>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 FAQ 05
            ================================================== -->
            <div class="mcfaq-item">

                <button class="mcfaq-question" type="button">

                    <span class="mcfaq-number">
                        05
                    </span>

                    <span class="mcfaq-question-text">
                        Where can a missed call number be promoted?
                    </span>

                    <span class="mcfaq-toggle">
                        <i class="fa-solid fa-plus"></i>
                    </span>

                </button>


                <div class="mcfaq-answer">

                    <div class="mcfaq-answer-inner">

                        <p>
                            You can promote your dedicated missed call number
                            across websites, digital advertisements, social
                            media campaigns, printed materials, outdoor
                            advertising and other customer communication channels.
                        </p>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 FAQ 06
            ================================================== -->
            <div class="mcfaq-item">

                <button class="mcfaq-question" type="button">

                    <span class="mcfaq-number">
                        06
                    </span>

                    <span class="mcfaq-question-text">
                        Can missed call campaign activity be tracked?
                    </span>

                    <span class="mcfaq-toggle">
                        <i class="fa-solid fa-plus"></i>
                    </span>

                </button>


                <div class="mcfaq-answer">

                    <div class="mcfaq-answer-inner">

                        <p>
                            Yes. Your missed call workflow can provide call
                            activity and lead information that helps your team
                            monitor campaign responses and manage follow-up
                            actions from a structured system.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<script>
    (function() {

        const faqSections =
            document.querySelectorAll('.mcfaq-section');


        faqSections.forEach(function(section) {

            const items =
                section.querySelectorAll('.mcfaq-item');


            function openItem(item) {

                const answer =
                    item.querySelector('.mcfaq-answer');

                item.classList.add('active');

                answer.style.maxHeight =
                    answer.scrollHeight + 'px';

            }


            function closeItem(item) {

                const answer =
                    item.querySelector('.mcfaq-answer');

                item.classList.remove('active');

                answer.style.maxHeight =
                    '0px';

            }


            /* =====================================================
               INITIAL STATE
            ====================================================== */

            items.forEach(function(item, index) {

                const answer =
                    item.querySelector('.mcfaq-answer');

                const button =
                    item.querySelector('.mcfaq-question');


                button.setAttribute(
                    'aria-expanded',
                    index === 0 ?
                    'true' :
                    'false'
                );


                if (index === 0) {

                    item.classList.add('active');

                    requestAnimationFrame(function() {

                        answer.style.maxHeight =
                            answer.scrollHeight + 'px';

                    });

                } else {

                    item.classList.remove('active');

                    answer.style.maxHeight =
                        '0px';

                }


                /* =================================================
                   CLICK
                ================================================== */

                button.addEventListener(
                    'click',
                    function() {

                        const alreadyOpen =
                            item.classList.contains('active');


                        /* CLOSE ALL */
                        items.forEach(function(otherItem) {

                            closeItem(otherItem);

                            const otherButton =
                                otherItem.querySelector(
                                    '.mcfaq-question'
                                );

                            otherButton.setAttribute(
                                'aria-expanded',
                                'false'
                            );

                        });


                        /*
                         If clicked item was closed,
                         open it.
                         If it was already open,
                         all remain closed.
                        */

                        if (!alreadyOpen) {

                            openItem(item);

                            button.setAttribute(
                                'aria-expanded',
                                'true'
                            );

                        }

                    }
                );

            });


            /* =====================================================
               RECALCULATE OPEN FAQ ON RESIZE
            ====================================================== */

            window.addEventListener(
                'resize',
                function() {

                    const activeItem =
                        section.querySelector(
                            '.mcfaq-item.active'
                        );


                    if (activeItem) {

                        const activeAnswer =
                            activeItem.querySelector(
                                '.mcfaq-answer'
                            );

                        activeAnswer.style.maxHeight =
                            activeAnswer.scrollHeight + 'px';

                    }

                }
            );

        });

    })();
</script>