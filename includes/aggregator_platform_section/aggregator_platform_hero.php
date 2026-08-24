<style>
    .bluk-sms-hero {
        width: 100%;
        background:
            radial-gradient(circle at 15% 85%,
                rgba(110, 100, 255, 0.12) 0%,
                rgba(110, 100, 255, 0.06) 25%,
                transparent 50%),
            radial-gradient(circle at 85% 20%,
                rgba(70, 140, 255, 0.13) 0%,
                rgba(70, 140, 255, 0.06) 30%,
                transparent 60%),
            linear-gradient(135deg,
                #ffffff 0%,
                #f8faff 35%,
                #eef3ff 70%,
                #e5edff 100%);

        padding: 100px 24px 40px 126px;
        /* display: flex; */
        /* height: 75; */
    }



    .cycle_animation {
        position: relative;
    }

    .cycle_animation::before {
        content: "";
        position: absolute;
        top: -80px;
        right: -30px;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        border: 7.5px dashed rgba(7, 63, 167, 0.14);
        pointer-events: none;
        animation: decor-spin 16s linear infinite;
    }

    @keyframes decor-spin {

        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .bluk-sms-hero .bluk-box {

        margin: auto;
        width: 100%;
        display: grid;
        grid-template-columns: 1.5fr 0.8fr;
        padding: 10px;
    }


    .bluk_set {
        width: 100%;
    }

    .bluk-buage {
        background-color: #07355f21;
        position: relative;
        color: #0A5CFF;
        font-size: 12px;
        padding: 5px 10px;
        border-radius: 999px;
        width: max-content;


    }

    .bluk-buage::before {
        content: "\f233";
        position: absolute;
        left: 8px;
        font-family: "Font Awesome 5 Free";
        font-weight: 800;
        font-size: 12px;
    }

    .bluk-buage p {
        padding-left: 20px;
    }

    .bluk-titial h1 {
        width: 80%;
        font-size: 3rem;
        font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 800;

    }

    .bluk-titial em {
        background: linear-gradient(to bottom, #0A5CFF 0%, #0A5CFF 70%);

        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;

    }

    .bluk_set .tital_pera {
        margin-top: 10px;
        width: 70%;
        font-size: 13px;
        color: #666;
    }

    .tital_pera em {
        color: black;
        font-weight: 600;
    }

    .bluk_tags_hero {
        width: 100%;
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(7, 1fr);

        gap: 10px;

    }

    .bluk_tags_hero span {
        font-size: 11px;
        background-color: #fbfcffb0;
        width: max-content;
        padding: 5px 10px;
        border: 1px solid #13409b52;
        border-radius: 999px;
        color: #0B5CFF;
    }

    .bluk_tags_hero span em {
        font-weight: bolder;
        font-size: 15px;
        margin-right: 5px;
    }

    .bluk-trial_mess {
        margin-top: 20px;
        background: linear-gradient(134deg, #0B5CFF 0%, #1b2436f2 100%);
        color: #e5edff;
        padding: 8px 15px;
        border-radius: 999px;
        transition: .25s ease;
        font-size: 14px;

    }

    .bluk-trial_mess:hover {
        transition: .25s ease;
        transform: translateY(-5px);
        box-shadow: 0px 3px 3px 2px #4c5b78;
    }


    .img_card {
        width: 60%;
        background-color: white;
        position: relative;
        border-radius: 15px;
        margin: auto;
        height: 100%;
    }

    .img_card .message_box_grid {
        padding: 20px;
        position: relative;
        z-index: 2;

    }

    .message_box_grid .reni985 {
        padding: 5px 0;
        font-size: 11px;
        font-weight: 600;
    }



    .top-box_for-hero_sole {
        width: 100%;
        padding-top: 10px;
        padding-bottom: 17px;
        border-bottom: 1px solid#6666664d
    }


    .solte_srid {
        width: 100%;
        display: grid;
        gap: 10px;
        grid-template-columns: 0.2fr 1.1fr;
    }

    .top-box_for-hero_sole span svg {
        width: 45px;
        padding: 7px;
        border-radius: 50%;
        background: linear-gradient(134deg, #0B5CFF 0%, #1b2436f2 100%);
        color: #0A5CFF;
    }

    .ih85saj2 h5 {

        font-weight: 800;
    }

    .ih85saj2 span {
        font-size: 12px;
        color: rgba(34, 197, 94, 0.86);
        /* position: relative; */
        display: flex;
        flex-direction: row;
        align-items: baseline;

        em {
            display: block;
            width: 10px;
            height: 10px;
            /* background-color: rgba(136, 218, 59, 0.86); */
            background-color: rgba(34, 197, 94, 0.86);

            border-radius: 50%;
            margin-right: 5px;
            box-shadow:
                0 0 5px rgba(34, 197, 94, 0.9),
                0 0 0 0 rgba(255, 255, 255, 0.8);

            animation: greenPulse 1.8s infinite;
        }

    }


    @keyframes greenPulse {
        0% {
            box-shadow:
                0 0 5px rgba(34, 197, 94, 0.9),
                0 0 0 0 rgba(255, 255, 255, 0.8);
        }

        70% {
            box-shadow:
                0 0 8px rgba(34, 197, 94, 0.6),
                0 0 0 9px rgba(255, 255, 255, 0);
        }

        100% {
            box-shadow:
                0 0 5px rgba(34, 197, 94, 0.9),
                0 0 0 0 rgba(255, 255, 255, 0);
        }
    }

    .card_img_bluk_hero {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;

        margin-top: 17px;
    }

    .card_img_bluk_hero-1 {
        width: 100%;
        height: 60px;
        padding: 8px;
        border-radius: 8px;

        p {
            font-size: 10px;
            width: 100%;
        }
    }

    .gar_card_788 {
        display: grid;
        width: 100%;
        gap: 5px;
        grid-template-columns: 0.3fr 1.5fr 0.5fr;
        background-color: #F9FAFB;
        border-radius: 10px;
        align-items: start;
        padding: 10px 10px;
        margin: 5px 0;
    }

    .gar_card_788 span:first-child {
        color: #88e73b;
        /* width: 13px;
        height: 13px; */
    }

    .gar_card_788 div {
        color: black;

        h6 {
            font-size: 9px;
        }

        p {
            font-size: 10px;
            color: #666669;
        }
    }

    .gar_card_788 span:last-child {
        color: #666669;
        font-size: 9px;
        text-align: center;
        padding-top: 7px;

    }

    .hero_first_img {
        position: absolute;
        width: 228px;
        bottom: -21px;
        left: -172px;

        z-index: 0;
        box-shadow: inset 0 -15px 20px -15px rgb(252, 250, 250);
    }

    .hero_first_img img {
        /* box-shadow: inset 0 -15px 20px -15px rgb(252, 250, 250); */
        width: 100%;
        display: block;
        position: relative;
        z-index: 0;
    }

    /* Bottom blur + shadow */
    .hero_first_img::after {
        content: "";
        position: absolute;
        left: -5px;
        bottom: -27px;
        width: 100%;
        height: 48px;
        background: #E7EEFF;
        /* background: rgba(254, 254, 255, 0.99); */
        border-radius: 50%;
        filter: blur(8px);
        z-index: 1;
    }


    .your-box-up-and_down-animation {
        animation: softFloat 3s ease-in-out infinite;
    }

    @keyframes softFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }
    }

    @media (max-width: 991px) {
        .img_card {
            display: none;
        }

        .bluk-sms-hero .bluk-box {
            grid-template-columns: 1fr;
        }

        .bluk-titial h1 {
            width: 100%;
        }

        .bluk_set .tital_pera {
            width: 100%;
        }


    }

    @media (max-width:648px) {

        .bluk-titial h1 {
            width: 100%;
        }

        .bluk_set .tital_pera {
            width: 100%;
        }

        .bluk_tags_hero {
            grid-template-columns: repeat(2, 1fr);

            span {
                width: 100%;
                text-align: center;
            }
        }
    }

    .decor-hero-grid {
        position: absolute;
        bottom: -20px;
        left: -20px;
        width: 260px;
        height: 220px;
        background-image: radial-gradient(circle, #4F46E5 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        opacity: .88;
        z-index: 0;
        pointer-events: none;
        animation: hero-grid-shift 9s ease-in-out infinite;
    }


    @keyframes hero-grid-shift {

        0%,
        100% {
            background-position: 0 0;
        }

        50% {
            background-position: 8px -8px;
        }
    }

    .svg_ass_sizo {
        width: 30px;
        height: 30px;
        display: block;


    }

    .cell_789 {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        height: 100%;
        gap: 10px;
    }

    .q585as {}

    .active_mpawn55 {
        color: #666666;
        position: relative;
    }

    .active_mpawn55::before {
        position: absolute;
        content: "●";
        left: -8px;
        /* width: 2px;
        height: 2px; */
        /* border-radius:50% ; */
        /* background-color: #666666; */
    }

    .active_mpawn556 {
        color: #666666;
        position: relative;
        font-size: 24px !important;
    }


    /* =================================== */
    .trust-section {
  width: 100%;
  /* padding: 40px 20px; */
  background-color: transparent; /* Light blue/purple bg tone */
  font-family: system-ui, -apple-system, sans-serif;
}

.trust-container {
  /* max-width: 1200px; */
  margin: 0 auto;
  text-align: center;
}

.badge-wrapper {
  display: flex;
  justify-content: center;
  margin-bottom: 12px;
}

.trust-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background-color: rgba(79, 56, 217, 0.12);
  color: #4f38d9;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 0.8px;
  padding: 6px 16px;
  border-radius: 50px;
}

.shield-icon {
  width: 16px;
  height: 16px;
}

.trust-subtitle {
  color: #556070;
  font-size: 15px;
  font-weight: 500;
  margin: 0 0 35px 0;
}

.logo-grid {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  gap: 78px;
}

.logo-grid img {
  max-height: 15%;
  width: auto;
  opacity: 0.65;
  filter: grayscale(100%);
  transition: all 0.3s ease;
}

.logo-grid img:hover {
  opacity: 1;
  filter: grayscale(0%);
}
</style>
<section class="bluk-sms-hero cycle_animation">
    <div class="decor-hero-grid"></div>
    <div class="bluk-box">

        <div class="bluk_set">

            <div class="bluk-buage">
                <p>White-Label Aggregator Platform</p>
            </div>
            <div class="bluk-titial">
                <h1>Your Business. Your  <em> Communication Platform</em></h1>
            </div>

            <p class="tital_pera">
                Launch your aggregator business with a complete white-label platform. Manage SMS, RCS, WhatsApp, and Voice from your own server with total control and data ownership.</p>


            <div class="bluk_tags_hero" style="display: none;">
                <span> <em>✓</em> DLT Compliant </span>
                <span> <em>✓</em> 98.9% Delivery </span>
                <span> <em>✓</em> Sub-3s OTP SMS </span>
                <span> <em>✓</em> REST API + Webhooks </span>

            </div>

            <button class="bluk-trial_mess">Request Demo &#10170;</button>
        </div>

        <div class="img_card  your-box-up-and_down-animation">

            <div class="hero_first_img your-box-up-and_down-animation">
                <img src="assets/images/gopk_2.png" alt="">
            </div>

            <div class="message_box_grid your-box-up-and_down-animation">

                <div class="top-box_for-hero_sole">
                    <div class="solte_srid">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="white">
                                <path d="M544 269.8C529.2 279.6 512.2 287.5 494.5 293.8C447.5 310.6 385.8 320 320 320C254.2 320 192.4 310.5 145.5 293.8C127.9 287.5 110.8 279.6 96 269.8L96 352C96 396.2 196.3 432 320 432C443.7 432 544 396.2 544 352L544 269.8zM544 192L544 144C544 99.8 443.7 64 320 64C196.3 64 96 99.8 96 144L96 192C96 236.2 196.3 272 320 272C443.7 272 544 236.2 544 192zM494.5 453.8C447.6 470.5 385.9 480 320 480C254.1 480 192.4 470.5 145.5 453.8C127.9 447.5 110.8 439.6 96 429.8L96 496C96 540.2 196.3 576 320 576C443.7 576 544 540.2 544 496L544 429.8C529.2 439.6 512.2 447.5 494.5 453.8z" />
                            </svg>
                        </span>
                        <div class="ih85saj2">
                            <h5>Aggregator Dashboard</h5>
                            <span><em></em>All systems active</span>
                        </div>
                    </div>
                </div>

                <div class="seconde-box_for-hero_sole your-box-up-and_down-animation">

                    <div class="card_img_bluk_hero">
                        <div class="card_img_bluk_hero-1" style="background: #E7F2FF;color:#0B5CFF;">
                            <div class="cell_789">
                                <span class="svg_ass_sizo">
                                    <svg fill="#0B5CFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path d="M320 544C461.4 544 576 436.5 576 304C576 171.5 461.4 64 320 64C178.6 64 64 171.5 64 304C64 358.3 83.2 408.3 115.6 448.5L66.8 540.8C62 549.8 63.5 560.8 70.4 568.3C77.3 575.8 88.2 578.1 97.5 574.1L215.9 523.4C247.7 536.6 282.9 544 320 544zM192 272C209.7 272 224 286.3 224 304C224 321.7 209.7 336 192 336C174.3 336 160 321.7 160 304C160 286.3 174.3 272 192 272zM320 272C337.7 272 352 286.3 352 304C352 321.7 337.7 336 320 336C302.3 336 288 321.7 288 304C288 286.3 302.3 272 320 272zM416 304C416 286.3 430.3 272 448 272C465.7 272 480 286.3 480 304C480 321.7 465.7 336 448 336C430.3 336 416 321.7 416 304z" />
                                    </svg>
                                </span>

                                <div class="q585as">
                                    <p>SMS</p>
                                    <p style="color:#666666;" class="active_mpawn55">Active</p>
                                </div>
                            </div>
                        </div>
                        <div class="card_img_bluk_hero-1" style="background: #ddeed6;color:green;">
                            <div class="cell_789">
                                <span class="svg_ass_sizo">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="green">
                                        <path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z" />
                                    </svg>
                                </span>
                                <div class="q585as">
                                    <p>WhatsApp</p>
                                    <p style="color:#666666;" class="active_mpawn55">Active</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="seconde-box_for-hero_sole your-box-up-and_down-animation">

                    <div class="card_img_bluk_hero">
                        <div class="card_img_bluk_hero-1" style="background: #FFF3E4;color:#EC6120;">
                            <div class="cell_789">
                                <span class="svg_ass_sizo">
                                    <svg fill="#EC6120" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                    </svg>

                                </span>
                                <div class="q585as">
                                    <p>Voice</p>
                                    <p style="color:#666666;" class="active_mpawn55">Active</p>
                                </div>
                            </div>
                        </div>
                        <div class="card_img_bluk_hero-1" style="background: #F7EFFF;color:#B563F3;">
                            <div class="cell_789">
                                <span class="svg_ass_sizo">
                                    <svg fill="#B563F3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                        <path d="M115.9 448.9C83.3 408.6 64 358.4 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304C576 436.5 461.4 544 320 544C283.5 544 248.8 536.8 217.4 524L101 573.9C97.3 575.5 93.5 576 89.5 576C75.4 576 64 564.6 64 550.5C64 546.2 65.1 542 67.1 538.3L115.9 448.9zM153.2 418.7C165.4 433.8 167.3 454.8 158 471.9L140 505L198.5 479.9C210.3 474.8 223.7 474.7 235.6 479.6C261.3 490.1 289.8 496 319.9 496C437.7 496 527.9 407.2 527.9 304C527.9 200.8 437.8 112 320 112C202.2 112 112 200.8 112 304C112 346.8 127.1 386.4 153.2 418.7z" />
                                    </svg>
                                </span>

                                <div class="q585as">
                                    <p>RCS</p>
                                    <p style="color:#666666;" class="active_mpawn55">Active</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="fourth-box_for-hero_sole your-box-up-and_down-animation" style="width: 100%;">
                    <div class="gar_card_788" style="display: block;padding: 10px 0px; background:none;">
                        <div class="card_img_bluk_hero-1" style="background: #ddeed6;color:green;">
                            <div class="cell_789" style="justify-content: space-around;">
                                <span class="svg_ass_sizo">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="green" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity w-8 h-8 text-blue-600">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                    </svg>
                                </span>
                                <div class="q585as">
                                    <p style="color: green;">Total Messages</p>
                                    <p style="color:#666666;" class="active_mpawn556"><span class="qunik-count" data-target="5.9" data-suffix="M" style="font-size: 22px;color:#2d2a2a;font-weight: 700;">0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- <h4 class="reni985" style="display:none;">Recent Bulk SMS</h4>


                <div class="tharth-box_for-hero_sole your-box-up-and_down-animation" style="display:none;">
                    <div class="gar_card_788">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-5 h-5 text-green-500 flex-shrink-0">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                        </span>
                        <div>
                            <h6>Order confirmation SMS</h6>
                            <p>+917894561232</p>
                        </div>
                        <span>10s ago</span>
                    </div>
                </div>


                <div class="fourth-box_for-hero_sole your-box-up-and_down-animation" style="display:none;">
                    <div class="gar_card_788">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-5 h-5 text-green-500 flex-shrink-0">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                        </span>
                        <div>
                            <h6>Order confirmation SMS</h6>
                            <p>+917894561230</p>
                        </div>
                        <span>1m ago</span>
                    </div>
                </div>

                <div class="fourth-box_for-hero_sole your-box-up-and_down-animation" style="display:none;">
                    <div class="gar_card_788">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-5 h-5 text-green-500 flex-shrink-0">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                        </span>
                        <div>
                            <h6>Order confirmation SMS</h6>
                            <p>+917894561231</p>
                        </div>
                        <span>1m ago</span>
                    </div>
                </div> -->




            </div>

        </div>
    </div>

    <div class="trust-section">
  <div class="trust-container">
    
    <!-- Badge -->
    <!-- <div class="badge-wrapper">
      <span class="trust-badge">
        <svg class="shield-icon" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-5.45 9-12V5l-9-4zm-1 14.5l-3.5-3.5 1.41-1.41L11 13.67l5.09-5.09 1.41 1.41L11 15.5z"/>
        </svg>
        CLIENT TRUST
      </span>
    </div> -->

    <!-- Subtitle -->
    <!-- <p class="trust-subtitle">Trusted by 100+ global partners</p> -->

    <!-- Logos Grid -->
    <div class="logo-grid">
      <img src="assets/images/logos/1.png" alt="king digital video">
      <img src="assets/images/logos/2.png" alt="king digital web">
      <img src="assets/images/logos/4.png" alt="king digital sociol">
      <img src="assets/images/logos/5.png" alt="static king">
      <img src="" alt="">
      <!-- <img src="path/to/tiratned.png" alt="Tiratned Companies">
      <img src="path/to/eao-program.png" alt="Eao Program">
      <img src="path/to/sap.png" alt="SAP"> -->
    </div>

  </div>
</div>

</section>