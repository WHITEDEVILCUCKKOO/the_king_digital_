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

        padding: 100px 24px 100px 126px;
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
        content: "\f1d8";
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
    
    .bluk-titial em{
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
        width: 13px;
        height: 13px;
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
        width: 270px;
        bottom: 0;
        left: -73%;
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
        opacity: .28;
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
</style>
<section class="bluk-sms-hero cycle_animation">
    <div class="decor-hero-grid"></div>
    <div class="bluk-box">

        <div class="bluk_set">

            <div class="bluk-buage">
                <p>Enterprise Bulk SMS Gateways</p>
            </div>
            <div class="bluk-titial">
                <h1>Bulk SMS Solutions for <em> Every Business Need </em></h1>
            </div>

            <p class="tital_pera">
                Enterprise Bulk SMS Gateway
                Bulk SMS Solutions for <em> Every Business Need
                Send millions</em> of transactional <em> SMS , OTP </em>, and promotional messages instantly with <em>98.9% delivery rate.  </em> DLT compliant, fast, and <em>trusted by  10,000+ businesses. </em></p>


            <div class="bluk_tags_hero">
                <span> <em>✓</em> DLT Compliant </span>
                <span> <em>✓</em> 98.9% Delivery </span>
                <span> <em>✓</em> Sub-3s OTP SMS </span>
                <span> <em>✓</em> REST API + Webhooks </span>

            </div>

            <button class="bluk-trial_mess">Start Free Trial</button>
        </div>

        <div class="img_card  your-box-up-and_down-animation">

            <div class="hero_first_img your-box-up-and_down-animation">
                <img src="assets/images/gopk.png" alt="">
            </div>

            <div class="message_box_grid your-box-up-and_down-animation">

                <div class="top-box_for-hero_sole">
                    <div class="solte_srid">
                        <span>
                            <svg fill="#e6e7e7" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" transform="rotate(0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="4.095992000000001"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path d="M370.07,0H141.928c-24.247,0-43.971,19.725-43.971,43.971v424.057c0,24.245,19.725,43.971,43.971,43.971h228.144 c24.245,0,43.971-19.725,43.971-43.971V43.971C414.041,19.725,394.317,0,370.07,0z M380.65,468.029 c0,5.833-4.745,10.579-10.579,10.579H141.928c-5.833,0-10.579-4.746-10.579-10.579v-57.376H380.65V468.029z M380.65,377.262 H131.348V124.555H380.65V377.262z M380.651,91.163H131.348V43.971c0-5.833,4.745-10.58,10.579-10.58h228.144 c5.833,0,10.579,4.746,10.579,10.58V91.163z"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="208.884" y="45.581" width="94.23" height="33.391"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <circle cx="255.999" cy="443.96" r="20.191"></circle>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <div class="ih85saj2">
                            <h5>Bulk SMS Dashboard</h5>
                            <span><em></em>All systems operational</span>
                        </div>
                    </div>
                </div>

                <div class="seconde-box_for-hero_sole your-box-up-and_down-animation">

                    <div class="card_img_bluk_hero">
                        <div class="card_img_bluk_hero-1" style="background: #E7F2FF;color:#0B5CFF;">
                            <p>SMS Sent Today</p>
                            <h4><span class="qunik-count" data-target="1.2" data-suffix="M">0</span></h4>
                        </div>
                        <div class="card_img_bluk_hero-1" style="background: #ddeed6;color:green;">
                            <p>Delivery Rate</p>
                            <h4><span class="qunik-count" data-target="98.9" data-suffix="%">0</span></h4>
                        </div>
                    </div>

                </div>

                <h4 class="reni985">Recent Bulk SMS</h4>


                <div class="tharth-box_for-hero_sole your-box-up-and_down-animation">
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


                <div class="fourth-box_for-hero_sole your-box-up-and_down-animation">
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

                <div class="fourth-box_for-hero_sole your-box-up-and_down-animation">
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
                </div>




            </div>

        </div>
    </div>

</section>