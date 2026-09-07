<?php require_once __DIR__ . '/includes/header.php'; ?>

<style>
    .contact-main {
        font-family: 'Segoe UI', Roboto, Tahoma, Geneva, Verdana, sans-serif;


    }
</style>

<main class="contact-main">


    <!-- section 1 ( Hero ) -->
    <style>
        :root {
            --bg-color: #f0f2f5;
            /* Light grey background */
            --card-bg: #ffffff;
            /* White card background */
            --text-primary: #111827;
            /* Dark text for titles */
            --text-secondary: #6b7280;
            /* Lighter text for descriptions */
            --accent-color: #3b82f6;
            /* Primary blue accent */
            --radius: 16px;
            /* Rounded corners */
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        }

        .application_section {
            width: 100%;
            height: 100%;
            background-color: #F8FAFC;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: row;
        }


        /* left silde */
        .left_section_1 {
            position: fixed;
            width: 350px;
            z-index: 10;
            height: 100%;
            border-right: 1px solid #ccc;
            padding: 50px 30px;
            height: 100%;
            background: #fff;
            overflow: auto;
        }

        .left_section_1 h6 {
            color: #9EA3B8;
            letter-spacing: 1.3px;
            text-transform: uppercase;
            font-size: .67rem;
            margin: 10px 0;
        }

        .top_nave_appli {}

        .subbox_link {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 7px 16px;
            font-size: .855rem;
            color: var(--text2);
            cursor: pointer;
            text-decoration: none;
            border-left: 3px solid transparent;
            transition: all .13s;
            user-select: none;
            margin: 4px 0;
        }

        .subbox_link:not(.active):hover {
            background: #f1f5f9;
            color: #0f172a;
        }

        .subbox_link.active {
            background: linear-gradient(135deg, #059669 0%, #0d9488 100%);
            color: #ffffff !important;
            font-weight: 700;
            padding: 10px 16px;
            margin: 4px 0;
            border-radius: 10px;
            box-shadow: 0 6px 16px rgba(5, 150, 105, 0.25);
        }


        .subbox_link.active:hover {
            background: linear-gradient(135deg, #059669 0%, #0d9488 100%);
            color: #fff;
        }

        /* .sub_box_link:hover {} */

        .svg_icon_box {
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
        }

        .svg_icon_box svg {
            width: 20px;
            height: 20px;
            padding: 1.5px;
            fill: #087553;
            pointer-events: none;
        }

        .svg_icon_color-active {
            fill: white !important;
        }

        .line_rola {
            border-top: 1px solid #ccc;
            position: relative;
        }

        .hammer_btn {
            display: none;
        }

        .haamer_btn_nikw5 {
            left: 309px !important;
            transition: .25s ease !important;
        }

        .dashbord_revile_gl {
            left: 0 !important;
            transition: .25s ease !important;
        }

        #close_linw969 {
            display: none;
            font-size: 20px;
            text-align: center;
        }

        #haw_linw969 {
            font-size: 20px;
            text-align: center;
        }

        @media (max-width:640px) {
            .left_section_1 {
                position: fixed;
                left: -350px;
                width: 310px;
                z-index: 10;
            }

            .hammer_btn {
                display: flex;
                flex-direction: column;
                gap: 5px;
                position: fixed;
                padding: 5px 15px;
                transition: .25s ease;
                justify-content: center;
                transition: .25s ease;
                top: 100px;
                left: 0;
                width: 50px;
                height: 50px;
                border-radius: 0 10px 10px 0;
                border: 1px outset #6666663d;
                background-color: #fff;
                z-index: 10;

            }
        }






        /* right slide */
        .right_section_1 {
            width: 90%;
            /* height: 20px; */
            /* margin: auto; */
            border-radius: 10px;
            /* height: 1000px; */
            /* overflow-y: auto; */
            /* overflow-x: hidden; */
            background: #313030;
            display: flex;
            align-items: start;
            justify-content: center;
            margin: 25px 25px 25px 375px;

        }

        .all_sejmca8974 {

            /* #overview_contect_box { */
            margin-top: 25px;

            border: 1px solid #6666663d;
            background: #c0b9b9;
            width: 100%;
            border-radius: 15px;
            width: 95%;
            padding: 25px 0;
            /* margin: 25px; */







        }

        .overview_hero {
            background: linear-gradient(135deg, #0d1b2a 0%, #1a2f42 60%, #0d3d2a 100%);
            border-radius: 12px;
            padding: 40px 40px 36px;
            margin-bottom: 36px;
            /* padding: 70px; */
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, .08);
            text-align: center;
            position: relative;
            overflow: hidden;
            width: 80%;
            margin: auto;
            background: linear-gradient(135deg, #0f172a 0%, #111827 60%, #0b3d2e 100%);
            color: white;
            box-shadow: 0 25px 80px rgba(15, 23, 42, .25);

            /* margin: auto; */
            /* padding: 25px; */
        }

        .htaw85 {
            font-size: 44px;
        }

        .jsb8520 {
            color: #33BF74;
        }


        .overview_hero p {
            font: 35px;
            color: #c4c2c2;
            padding: 10px 0;
        }

        .btna1sa {
            color: #000000;
            background: #31BA74;
            padding: 8px 25px;
            border-radius: 15px;
            font-weight: 600;
            margin-top: 10px;
        }

        .counrt_grid_wer854_card {
            width: 80%;
            display: grid;
            gap: 25px;
            grid-template-columns: repeat(4, 1fr);
            margin: auto;
            margin-top: 25px;

        }


        .sole_89_Card {
            background-color: white;
            border-radius: 15px;
            border: 1px solid #DFE4EB;
            /* display: flex; */
            text-align: center;
        }

        .hwqih95a {
            font-size: 44px;
            font-weight: 800;
            background: linear-gradient(to bottom, #31BA74 46%, rgb(7 9 9));
            background-clip: text;
            --webkit-text-fill-color: transparent;
            color: transparent;
        }

        .tiawn98631ijas {
            margin: 5px 10px;
            font-size: 18px;
            font-weight: 400;
            color: rgba(85, 102, 102, 0.73);
        }

        .h8wh74523 {

            width: 80%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin: auto;
            margin-top: 30px;

        }

        .uhujh2294sas {
            background: #F8FAFC;
            border: 1px solid #b0b1b3;
            border-radius: 20px;
            padding: 32px;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .06);
            transition: background .3s, border .3s, transform .3s, box-shadow .3s;

        }

        .uhujh2294sas:hover {
            border-color: #a7ddf3;
            background: #ecf7fd;
        }


        .c-title12 {
            font-size: .9rem;
            font-weight: 700;
            /* color: #0d1b2a; */
            color: #064e3b;
            margin-bottom: 5px;
        }

        .c-desc12 {
            font-size: .8rem;
            color: #94a3b8;
            line-height: 1.5;
        }







        .container9789674 {
            width: 80%;

            /* Limits width like a mobile view or sidebar */
            background-color: transparent;
            margin: auto;
            padding: 40px 0;
        }


        /* Card Styles */
        .service-card {
            background-color: var(--card-bg);
            border-radius: var(--radius);
            padding: 20px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            /* Vertically center content */
            justify-content: space-between;
            box-shadow: var(--shadow);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;
            border: 1px solid rgba(0, 0, 0, 0.02);
            text-decoration: none;
            /* Remove underline if used as link */
            color: inherit;
        }

        .service-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            /* border-color: rgba(59, 130, 246, 0.2); */
            border-color: #a7ddf3;
            background: #ecf7fd;
        }

        /* Left Section: Icon */
        .icon-box {
            flex-shrink: 0;
            width: 30px;
            height: 30px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-right: 16px;
        }

        /* Specific Icon Colors & Backgrounds */
        .icon-sms {
            background-color: #e0f2fe;
            color: #0284c7;
        }

        .icon-rcs {
            background-color: #f3e8ff;
            color: #9333ea;
        }

        .icon-wa {
            background-color: #dcfce7;
            color: #16a34a;
        }

        .icon-voice {
            background-color: #ffedd5;
            color: #ea580c;
        }

        .icon-email {
            background-color: #fee2e2;
            color: #dc2626;
        }

        /* Middle Section: Text */
        .content-box {
            flex-grow: 1;
            /* Takes available space */
            min-width: 0;
            /* Prevents text overflow issues */
        }

        .content-box h3 {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 4px;
            line-height: 1.2;
        }

        .content-box p {
            font-size: 12.5px;
            font-weight: 400;
            color: var(--text-secondary);
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Limits text to 2 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Right Section: Arrow */
        .arrow-box {
            flex-shrink: 0;
            margin-left: 12px;
            color: #d1d5db;
            font-size: 14px;
            transition: color 0.2s ease;
        }

        .service-card:hover .arrow-box {
            color: var(--accent-color);
        }

        /* Mobile Responsiveness */
        @media (max-width: 400px) {
            .service-card {
                padding: 16px;
            }

            .icon-box {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }
        }

        .void-horizon {
            width: 80%;
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
        }

        .cyber-grid-array {
            display: grid;
            /* 6 columns per row jaisi image mein dikh raha hai (responsive ke liye auto-fit use kiya hai) */
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            gap: 10px;
        }

        .nano-brick-unit {
            background-color: #ffffff;
            border-radius: 16px;
            padding: 10px 9px;
            display: flex;
            gap: 5px;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border: 1px solid #e5e7eb;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            overflow: hidden;
        }

        .nano-brick-unit:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
            /* border-color: #d1d5db; */
            border-color: #a7ddf3;
            background: #ecf7fd;


        }

        /* Icon Styling */
        .visual-core {
            font-size: 12px;
            /* margin-bottom: 12px; */
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #f9fafb;
            /* Subtle circle background for icon */
            transition: transform 0.3s ease;
        }

        .nano-brick-unit:hover .visual-core {
            transform: scale(1.1);
            background-color: #f3f4f6;
        }

        /* Text Styling */
        .data-tag {

            font-size: 12px;
            font-weight: 600;
            color: #374151;
            letter-spacing: 0.3px;
        }


        /* HubSpot Orange */

        /* Media Query for smaller screens to adjust grid */
        @media (max-width: 768px) {
            .cyber-grid-array {
                grid-template-columns: repeat(auto-fill, minmax(110px, 1fr));
                gap: 16px;
            }

            .visual-core {
                width: 50px;
                height: 50px;
                font-size: 24px;
            }

            .data-tag {
                font-size: 12px;
            }
        }



        .void-control-deck {
            max-width: 900px;
            margin: 80px auto;
            /* Centered vertically and horizontally */
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            /* Space out the two buttons */
            gap: 24px;
        }

        .chrono-portal {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            /* Light gray border */
            border-radius: 12px;
            padding: 24px 32px;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 48%;
            /* Split almost half width */
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .chrono-portal:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            /* border-color: #d1d5db; */
            border-color: #a7ddf3;
            background: #ecf7fd;
        }

        /* Alignment Modifiers */
        .align-port-left {
            align-items: flex-start;
            text-align: left;
        }

        .align-port-right {
            align-items: flex-end;
            text-align: right;
        }

        /* Typography Styles */
        .ghost-ink {
            /* font-family: sans-serif; */
            font-size: 12px;
            font-weight: 600;
            color: #9ca3af;
            /* Grey text */
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 6px;
            display: block;
        }

        .solid-ink {
            /* font-family: sans-serif; */
            font-size: 18px;
            font-weight: 700;
            color: #111827;
            /* Black/Dark Grey text */
            display: block;
        }

        /* Mobile Responsiveness */
        @media (max-width: 600px) {
            .void-control-deck {
                flex-direction: column;
            }

            .chrono-portal {
                width: 100%;
            }

            .align-port-right {
                align-items: flex-start;
                /* Reset alignment on mobile stack */
                text-align: left;
            }
        }







        @media (max-width:990px) {

            .counrt_grid_wer854_card {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width:640px) {
            .widh_wmob {
                width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
            }

            .section_sub_with {
                width: 90% !important;
                padding: 25px 0px;
            }

            /* this is change everr time that change section */

            .htaw85 {
                font-size: 30px;
            }

            .counrt_grid_wer854_card {
                grid-template-columns: repeat(1, 1fr);
            }

            .h8wh74523 {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        /* show section after click css start */
        .section_sub_with {
            display: none;
        }

        .show_active {
            display: block !important;
        }

        /* show section after click css end */


        /* secton 1 login */
    </style>

    <section class="application_section">

        <!-- left side  -->
        <section class="left_section_1" id="left_section_box">

            <h6>Getting Started</h6>

            <ul class="top_nave_appli">
                <li class="subbox_link active" data-set="overview" onclick="show_this_box(this)">
                    <span class="svg_icon_box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg svg_icon_color-active" data-subset="icon_1">
                            <path d="M298.2 72.6C310.5 61.2 329.5 61.2 341.7 72.6L432 156.3L432 144C432 126.3 446.3 112 464 112L496 112C513.7 112 528 126.3 528 144L528 245.5L565.8 280.6C575.4 289.6 578.6 303.5 573.8 315.7C569 327.9 557.2 336 544 336L528 336L528 512C528 547.3 499.3 576 464 576L176 576C140.7 576 112 547.3 112 512L112 336L96 336C82.8 336 71 327.9 66.2 315.7C61.4 303.5 64.6 289.5 74.2 280.6L298.2 72.6zM304 384C277.5 384 256 405.5 256 432L256 528L384 528L384 432C384 405.5 362.5 384 336 384L304 384z" />
                        </svg>
                    </span>

                    Overview
                </li>
                <li class="subbox_link" data-set="login" onclick="show_this_box(this)">
                    <span class="svg_icon_box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_2">
                            <path d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z" />
                        </svg>
                    </span>
                    Login
                </li>
                <li class="subbox_link" data-set="dashbord" onclick="show_this_box(this)">
                    <span class="svg_icon_box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_3">
                            <path d="M96 96C113.7 96 128 110.3 128 128L128 464C128 472.8 135.2 480 144 480L544 480C561.7 480 576 494.3 576 512C576 529.7 561.7 544 544 544L144 544C99.8 544 64 508.2 64 464L64 128C64 110.3 78.3 96 96 96zM208 288C225.7 288 240 302.3 240 320L240 384C240 401.7 225.7 416 208 416C190.3 416 176 401.7 176 384L176 320C176 302.3 190.3 288 208 288zM352 224L352 384C352 401.7 337.7 416 320 416C302.3 416 288 401.7 288 384L288 224C288 206.3 302.3 192 320 192C337.7 192 352 206.3 352 224zM432 256C449.7 256 464 270.3 464 288L464 384C464 401.7 449.7 416 432 416C414.3 416 400 401.7 400 384L400 288C400 270.3 414.3 256 432 256zM576 160L576 384C576 401.7 561.7 416 544 416C526.3 416 512 401.7 512 384L512 160C512 142.3 526.3 128 544 128C561.7 128 576 142.3 576 160z" />
                        </svg>
                    </span>
                    Dashboard
                </li>
            </ul>

            <div class="line_rola"></div>

            <div class="bottom_nave_apli">
                <h6>Channels</h6>
                <ul class="mosd82">
                    <li class="subbox_link" onclick="show_this_box(this)" data-set="sms">
                        <span class="svg_icon_box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_4">
                                <path d="M576 304C576 436.5 461.4 544 320 544C282.9 544 247.7 536.6 215.9 523.3L97.5 574.1C88.1 578.1 77.3 575.8 70.4 568.3C63.5 560.8 62 549.8 66.8 540.8L115.6 448.6C83.2 408.3 64 358.3 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304z" />
                            </svg>
                        </span>
                        SMS
                    </li>
                    <li class="subbox_link" data-set="rcs" onclick="show_this_box(this)">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_5">
                                <path d="M144 128C144 92.7 172.7 64 208 64L432 64C467.3 64 496 92.7 496 128L496 512C496 547.3 467.3 576 432 576L208 576C172.7 576 144 547.3 144 512L144 128zM256 504C256 517.3 266.7 528 280 528L360 528C373.3 528 384 517.3 384 504C384 490.7 373.3 480 360 480L280 480C266.7 480 256 490.7 256 504zM432 128L208 128L208 432L432 432L432 128z" />
                            </svg></span>
                        RCS
                    </li>
                    <li class="subbox_link" data-set="whatsapp" onclick="show_this_box(this)">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_6">
                                <path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z" />
                            </svg></span>
                        WhatsApp
                    </li>
                    <li class="subbox_link" data-set="voice" onclick="show_this_box(this)">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_7">
                                <path d="M376 32C504.1 32 608 135.9 608 264C608 277.3 597.3 288 584 288C570.7 288 560 277.3 560 264C560 162.4 477.6 80 376 80C362.7 80 352 69.3 352 56C352 42.7 362.7 32 376 32zM384 224C401.7 224 416 238.3 416 256C416 273.7 401.7 288 384 288C366.3 288 352 273.7 352 256C352 238.3 366.3 224 384 224zM352 152C352 138.7 362.7 128 376 128C451.1 128 512 188.9 512 264C512 277.3 501.3 288 488 288C474.7 288 464 277.3 464 264C464 215.4 424.6 176 376 176C362.7 176 352 165.3 352 152zM176.1 65.4C195.8 60 216.4 70.1 224.2 88.9L264.7 186.2C271.6 202.7 266.8 221.8 252.9 233.2L208.8 269.3C241.3 340.9 297.8 399.3 368.1 434.2L406.7 387C418 373.1 437.1 368.4 453.7 375.2L551 415.8C569.8 423.6 579.9 444.2 574.5 463.9L573 469.4C555.4 534.1 492.9 589.3 416.6 573.2C241.6 536.1 103.9 398.4 66.8 223.4C50.7 147.1 105.9 84.6 170.5 66.9L176 65.4z" />
                            </svg></span>
                        Voice
                    </li>
                    <li class="subbox_link" data-set="ivr" onclick="show_this_box(this)">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_8">
                                <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                            </svg></span>
                        IVR
                    </li>
                    <li class="subbox_link" data-set="click_to_call" onclick="show_this_box(this)">
                        <span class="svg_icon_box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_9">
                                <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                            </svg>
                        </span>
                        Click To Call
                    </li>
                    <li class="subbox_link" data-set="text_to_speech" onclick="show_this_box(this)">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_10">
                                <path d="M112 416L160 416L294.1 535.2C300.5 540.9 308.7 544 317.2 544C336.4 544 352 528.4 352 509.2L352 130.8C352 111.6 336.4 96 317.2 96C308.7 96 300.5 99.1 294.1 104.8L160 224L112 224C85.5 224 64 245.5 64 272L64 368C64 394.5 85.5 416 112 416zM505.1 171C494.8 162.6 479.7 164.2 471.3 174.5C462.9 184.8 464.5 199.9 474.8 208.3C507.3 234.7 528 274.9 528 320C528 365.1 507.3 405.3 474.8 431.8C464.5 440.2 463 455.3 471.3 465.6C479.6 475.9 494.8 477.4 505.1 469.1C548.3 433.9 576 380.2 576 320.1C576 260 548.3 206.3 505.1 171.1zM444.6 245.5C434.3 237.1 419.2 238.7 410.8 249C402.4 259.3 404 274.4 414.3 282.8C425.1 291.6 432 305 432 320C432 335 425.1 348.4 414.3 357.3C404 365.7 402.5 380.8 410.8 391.1C419.1 401.4 434.3 402.9 444.6 394.6C466.1 376.9 480 350.1 480 320C480 289.9 466.1 263.1 444.5 245.5z" />
                            </svg></span>
                        Text To Speech
                    </li>
                    <li class="subbox_link" data-set="ai_agent" onclick="show_this_box(this)">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_11">
                                <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z" />
                            </svg></span>
                        Ai Agent
                    </li>
                </ul>
            </div>

            <div class="line_rola"></div>

            <h6>Utilities</h6>
            <ul class="top_nave_appli">
                <li class="subbox_link" data-set="journeys" onclick="window.show_this_box(this)">
                    <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_12">
                            <path d="M576 160C576 210.2 516.9 285.1 491.4 315C487.6 319.4 482 321.1 476.9 320L384 320C366.3 320 352 334.3 352 352C352 369.7 366.3 384 384 384L480 384C533 384 576 427 576 480C576 533 533 576 480 576L203.6 576C212.3 566.1 222.9 553.4 233.6 539.2C239.9 530.8 246.4 521.6 252.6 512L480 512C497.7 512 512 497.7 512 480C512 462.3 497.7 448 480 448L384 448C331 448 288 405 288 352C288 299 331 256 384 256L423.8 256C402.8 224.5 384 188.3 384 160C384 107 427 64 480 64C533 64 576 107 576 160zM181.1 553.1C177.3 557.4 173.9 561.2 171 564.4L169.2 566.4L169 566.2C163 570.8 154.4 570.2 149 564.4C123.8 537 64 466.5 64 416C64 363 107 320 160 320C213 320 256 363 256 416C256 446 234.9 483 212.5 513.9C201.8 528.6 190.8 541.9 181.7 552.4L181.1 553.1zM192 416C192 398.3 177.7 384 160 384C142.3 384 128 398.3 128 416C128 433.7 142.3 448 160 448C177.7 448 192 433.7 192 416zM480 192C497.7 192 512 177.7 512 160C512 142.3 497.7 128 480 128C462.3 128 448 142.3 448 160C448 177.7 462.3 192 480 192z" />
                        </svg></span>
                    Journeys
                </li>
            </ul>

        </section>

        <span class="hammer_btn" id="haamer_id_adase">
            <div id="haw_linw969">
                &#9776;
            </div>
            <div id="close_linw969">
                &#10005;

            </div>
        </span>

        <!-- right side  -->
        <section class="right_section_1 widh_wmob">

            <!-- section 1 overview -->
            <section id="overview_contect_box" class="section_sub_with all_sejmca8974 show_active">

                <div class="overview_hero">
                    <h3 class="htaw85">Omni Portal</h3>
                    <h3 class="htaw85">Build Powerful</h3>
                    <h3 class="htaw85 jsb8520">Communication</h3>
                    <h3 class="htaw85 jsb8520">Experiences</h3>

                    <p>SMS, RCS, WhatsApp, Voice and APIs from one platform.</p>
                    <br>
                    <a href="" class="btna1sa">
                        Get Started &#10170;
                    </a>
                </div>

                <div class="counrt_grid_wer854_card">
                    <div class="sole_89_Card">
                        <span class="qunik-count_version_2_onlyfor_appliction_page hwqih95a" data-target="50" data-suffix="M+">0</span>
                        <div class="tiawn98631ijas">Messages Sent</div>
                    </div>
                    <div class="sole_89_Card">
                        <span class="qunik-count_version_2_onlyfor_appliction_page hwqih95a" data-target="99.9" data-suffix="%">0</span>
                        <div class="tiawn98631ijas">Delivery Rate</div>
                    </div>
                    <div class="sole_89_Card">
                        <span class="qunik-count_version_2_onlyfor_appliction_page hwqih95a" data-target="20" data-suffix="+">0</span>
                        <div class="tiawn98631ijas">Integrations</div>
                    </div>
                    <div class="sole_89_Card">
                        <span class="qunik-count_version_2_onlyfor_appliction_page hwqih95a" data-target="24" data-suffix="/">0</span>
                        <span class="qunik-count_version_2_onlyfor_appliction_page hwqih95a" data-target="7">0</span>
                        <div class="tiawn98631ijas">Support</div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Platform Capabilities
                    </span>
                </div>

                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30">
                                    <path d="M119.9 75.5C108.6 68.6 93.8 72.3 86.9 83.6C62.1 124.6 47.9 172.7 47.9 224C47.9 275.3 62.1 323.4 86.9 364.4C93.8 375.7 108.5 379.4 119.9 372.5C131.3 365.6 134.9 350.9 128 339.5C107.7 305.9 96 266.3 96 224C96 181.7 107.7 142.1 128.1 108.4C135 97.1 131.3 82.3 120 75.4zM520 75.5C508.7 82.4 505 97.1 511.9 108.5C532.3 142.2 544 181.8 544 224.1C544 266.4 532.3 306 511.9 339.7C505 351 508.7 365.8 520 372.7C531.3 379.6 546.1 375.9 553 364.6C577.8 323.6 592 275.5 592 224.2C592 172.9 577.8 124.6 553 83.6C546.1 72.3 531.4 68.6 520 75.5zM352 279.4C371.1 268.3 384 247.7 384 224C384 188.7 355.3 160 320 160C284.7 160 256 188.7 256 224C256 247.7 268.9 268.4 288 279.4L288 544C288 561.7 302.3 576 320 576C337.7 576 352 561.7 352 544L352 279.4zM212.2 155C219.4 143.8 216.1 129 205 121.8C193.9 114.6 179 117.9 171.8 129C154.2 156.4 144 189 144 224C144 259 154.2 291.6 171.8 319C179 330.2 193.8 333.4 205 326.2C216.2 319 219.4 304.2 212.2 293C199.4 273.1 192 249.4 192 224C192 198.6 199.4 174.9 212.2 155zM468.2 129C461 117.8 446.2 114.6 435 121.8C423.8 129 420.6 143.8 427.8 155C440.6 174.9 448 198.6 448 224C448 249.4 440.6 273.1 427.8 293C420.6 304.2 423.9 319 435 326.2C446.1 333.4 461 330.1 468.2 319C485.8 291.6 496 259 496 224C496 189 485.8 156.4 468.2 129z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Multi-Channel Messaging</h5>
                        <p class="c-desc12 ">SMS, RCS, WhatsApp, Voice, IVR, Email and ClickToCall from one unified interface.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30" fill="#197553">
                                    <path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Analytics & Reporting</h5>
                        <p class="c-desc12 ">Real-time dashboards, delivery statistics, archive reports and status-wise analytics.</p>
                    </div>

                    <!-- card 3 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30" fill="#197553">
                                    <path d="M119.7 263.7L150.6 294.6C156.6 300.6 164.7 304 173.2 304L194.7 304C203.2 304 211.3 307.4 217.3 313.4L246.6 342.7C252.6 348.7 256 356.8 256 365.3L256 402.8C256 411.3 259.4 419.4 265.4 425.4L278.7 438.7C284.7 444.7 288.1 452.8 288.1 461.3L288.1 480C288.1 497.7 302.4 512 320.1 512C337.8 512 352.1 497.7 352.1 480L352.1 477.3C352.1 468.8 355.5 460.7 361.5 454.7L406.8 409.4C412.8 403.4 416.2 395.3 416.2 386.8L416.2 352.1C416.2 334.4 401.9 320.1 384.2 320.1L301.5 320.1C293 320.1 284.9 316.7 278.9 310.7L262.9 294.7C258.7 290.5 256.3 284.7 256.3 278.7C256.3 266.2 266.4 256.1 278.9 256.1L313.6 256.1C326.1 256.1 336.2 246 336.2 233.5C336.2 227.5 333.8 221.7 329.6 217.5L309.9 197.8C306 194 304 189.1 304 184C304 178.9 306 174 309.7 170.3L327 153C332.8 147.2 336.1 139.3 336.1 131.1C336.1 123.9 333.7 117.4 329.7 112.2C326.5 112.1 323.3 112 320.1 112C224.7 112 144.4 176.2 119.8 263.7zM528 320C528 285.4 519.6 252.8 504.6 224.2C498.2 225.1 491.9 228.1 486.7 233.3L473.3 246.7C467.3 252.7 463.9 260.8 463.9 269.3L463.9 304C463.9 321.7 478.2 336 495.9 336L520 336C522.5 336 525 335.7 527.3 335.2C527.7 330.2 527.8 325.1 527.8 320zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">API Integration</h5>
                        <p class="c-desc12 ">Secure REST APIs, full API logs, audit trails and developer-friendly documentation.</p>
                    </div>

                    <!-- card 4 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30" fill="#197553">
                                    <path d="M224 32C241.7 32 256 46.3 256 64L256 160L384 160L384 64C384 46.3 398.3 32 416 32C433.7 32 448 46.3 448 64L448 160L512 160C529.7 160 544 174.3 544 192C544 209.7 529.7 224 512 224L512 288C512 383.1 442.8 462.1 352 477.3L352 544C352 561.7 337.7 576 320 576C302.3 576 288 561.7 288 544L288 477.3C197.2 462.1 128 383.1 128 288L128 224C110.3 224 96 209.7 96 192C96 174.3 110.3 160 128 160L192 160L192 64C192 46.3 206.3 32 224 32z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Third-Party Plugins</h5>
                        <p class="c-desc12 ">Shopify, Zoho, HubSpot, Zapier, MoEngage, WooCommerce and 10+ more integrations.</p>
                    </div>

                    <!-- card 5 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30" fill="#197553">
                                    <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Workflow Automation</h5>
                        <p class="c-desc12 ">Journeys, automated routing, scheduled campaigns and smart fallback flows.</p>
                    </div>

                    <!-- card 6 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30" fill="#197553">
                                    <path d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Compliance & Audit</h5>
                        <p class="c-desc12 ">System audit logs, DLT compliance, blacklist management and full message tracking.</p>
                    </div>

                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Communication Channels
                    </span>
                </div>

                <div class="container9789674">

                    <!-- Item 1: SMS -->
                    <a class="service-card">
                        <div class="icon-box icon-sms">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_4" width="20px" fill="#087553">
                                <path d="M576 304C576 436.5 461.4 544 320 544C282.9 544 247.7 536.6 215.9 523.3L97.5 574.1C88.1 578.1 77.3 575.8 70.4 568.3C63.5 560.8 62 549.8 66.8 540.8L115.6 448.6C83.2 408.3 64 358.3 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304z"></path>
                            </svg>
                        </div>
                        <div class="content-box">
                            <h3>SMS</h3>
                            <p>Instant, reliable messaging to any phone number. DLT-compliant campaigns with Smart URL support.</p>
                        </div>
                        <div class="arrow-box">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>

                    <!-- Item 2: RCS -->
                    <a class="service-card">
                        <div class="icon-box icon-rcs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_5" width="20px" fill="#75085a">
                                <path d="M144 128C144 92.7 172.7 64 208 64L432 64C467.3 64 496 92.7 496 128L496 512C496 547.3 467.3 576 432 576L208 576C172.7 576 144 547.3 144 512L144 128zM256 504C256 517.3 266.7 528 280 528L360 528C373.3 528 384 517.3 384 504C384 490.7 373.3 480 360 480L280 480C266.7 480 256 490.7 256 504zM432 128L208 128L208 432L432 432L432 128z"></path>
                            </svg>
                        </div>
                        <div class="content-box">
                            <h3>RCS – Rich Communication Services</h3>
                            <p>Interactive messaging with images, carousels, buttons and read receipts via Jio & Vi.</p>
                        </div>
                        <div class="arrow-box">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>

                    <!-- Item 3: WhatsApp -->
                    <a class="service-card">
                        <div class="icon-box icon-wa">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_6" width="20px" fill="#087553">
                                <path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"></path>
                            </svg>
                        </div>
                        <div class="content-box">
                            <h3>WhatsApp</h3>
                            <p>Secure, trusted messaging on the world's largest messaging platform.</p>
                        </div>
                        <div class="arrow-box">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>

                    <!-- Item 4: Voice & IVR -->
                    <a class="service-card">
                        <div class="icon-box icon-voice">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_7" width="20px" fill="#753d08">
                                <path d="M376 32C504.1 32 608 135.9 608 264C608 277.3 597.3 288 584 288C570.7 288 560 277.3 560 264C560 162.4 477.6 80 376 80C362.7 80 352 69.3 352 56C352 42.7 362.7 32 376 32zM384 224C401.7 224 416 238.3 416 256C416 273.7 401.7 288 384 288C366.3 288 352 273.7 352 256C352 238.3 366.3 224 384 224zM352 152C352 138.7 362.7 128 376 128C451.1 128 512 188.9 512 264C512 277.3 501.3 288 488 288C474.7 288 464 277.3 464 264C464 215.4 424.6 176 376 176C362.7 176 352 165.3 352 152zM176.1 65.4C195.8 60 216.4 70.1 224.2 88.9L264.7 186.2C271.6 202.7 266.8 221.8 252.9 233.2L208.8 269.3C241.3 340.9 297.8 399.3 368.1 434.2L406.7 387C418 373.1 437.1 368.4 453.7 375.2L551 415.8C569.8 423.6 579.9 444.2 574.5 463.9L573 469.4C555.4 534.1 492.9 589.3 416.6 573.2C241.6 536.1 103.9 398.4 66.8 223.4C50.7 147.1 105.9 84.6 170.5 66.9L176 65.4z"></path>
                            </svg>
                        </div>
                        <div class="content-box">
                            <h3>Voice & IVR</h3>
                            <p>Smart call routing with voice menus and outbound voice campaigns.</p>
                        </div>
                        <div class="arrow-box">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>

                    <!-- Item 5: Email -->
                    <a class="service-card">
                        <div class="icon-box icon-email">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20px" fill="#75083f">
                                <path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z" />
                            </svg>
                        </div>
                        <div class="content-box">
                            <h3>Email</h3>
                            <p>Email marketing strategies for better conversations and campaign tracking.</p>
                        </div>
                        <div class="arrow-box">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>

                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span>
                </div>

                <div class="void-horizon">

                    <!-- Grid Layout -->
                    <div class="cyber-grid-array">

                        <!-- Row 1 Items -->
                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-shopify">
                                <svg width="25px" fill="#96bf48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M484.5 168.1C484.3 167 483.8 166 483 165.3C482.2 164.6 481.2 164.1 480.1 164.1C478.1 164.1 442.9 163.3 442.9 163.3C442.9 163.3 421.3 142.5 413.3 134.5L413.3 567.2L539 536C539 536 485 170.5 484.6 168.1zM384.9 134.5C383 128.4 380.6 122.6 377.7 116.9C367.3 96.9 351.7 86 333.3 86C332 86 330.6 86.1 329.3 86.4C328.9 85.6 328.1 85.2 327.7 84.4C319.7 75.6 309.3 71.6 296.9 72C272.9 72.8 248.9 90 229.7 120.8C216.1 142.4 205.7 169.6 202.9 190.9C175.3 199.3 156.1 205.3 155.7 205.7C141.7 210.1 141.3 210.5 139.7 223.7C138.5 233.7 101.7 515.5 101.7 515.5L404.3 568L404.3 129.7C402.8 129.8 401.4 129.9 399.9 130.1C399.9 130.1 394.3 131.7 385.1 134.5zM329.6 151.7C313.6 156.5 296 162.1 278.8 167.3C283.6 148.5 293.2 129.7 304.4 117.3C308.8 112.9 314.8 107.7 321.6 104.5C328.4 118.9 330 138.5 329.6 151.7zM296.8 88.4C301.8 88.2 306.8 89.5 311.2 92C304.8 95.2 298.4 100.4 292.4 106.4C277.2 122.8 265.6 148.4 260.8 172.9C246.4 177.3 232 181.7 218.8 185.7C227.6 147.3 260 89.3 296.8 88.5zM250.4 308.6C252 334.2 319.6 339.8 323.6 400.3C326.4 447.9 298.4 480.4 258 482.8C209.2 486 182.4 457.2 182.4 457.2L192.8 413.2C192.8 413.2 219.6 433.6 241.2 432C255.2 431.2 260.4 419.6 260 411.6C258 378 202.8 380 199.2 324.7C196 278.3 226.4 231.4 293.7 227C319.7 225.4 332.9 231.8 332.9 231.8L317.7 289.4C317.7 289.4 300.5 281.4 280.1 283C250.5 285 250.1 303.8 250.5 308.6zM345.6 146.9C345.6 134.9 344 117.7 338.4 103.3C356.8 106.9 365.6 127.3 369.6 139.7C362.4 141.7 354.4 144.1 345.6 146.9z" />
                                </svg>
                            </div>
                            <span class="data-tag">Shopify</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-clevertap">
                                <svg width="25px" fill="#f47b20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M112 320C112 205.1 205.1 112 320 112C383.1 112 439.6 140.1 477.8 184.5C486.4 194.6 501.6 195.7 511.6 187.1C521.6 178.5 522.8 163.3 514.2 153.3C467.3 98.6 397.7 64 320 64C178.6 64 64 178.6 64 320L64 360C64 373.3 74.7 384 88 384C101.3 384 112 373.3 112 360L112 320zM570.5 267.1C567.8 254.1 555 245.8 542.1 248.6C529.2 251.4 520.8 264.1 523.6 277C526.5 290.9 528.1 305.3 528.1 320.1L528.1 360.1C528.1 373.4 538.8 384.1 552.1 384.1C565.4 384.1 576.1 373.4 576.1 360.1L576.1 320.1C576.1 302 574.2 284.3 570.6 267.2zM320 144C301 144 282.6 147 265.5 152.6C250.3 157.6 246.8 176.3 257.2 188.5C264.3 196.8 276 199.3 286.6 196.4C297.2 193.5 308.4 192 320 192C390.7 192 448 249.3 448 320L448 344.9C448 370.1 446.5 395.2 443.6 420.2C441.9 434.8 453 448 467.8 448C479.6 448 489.7 439.4 491.1 427.7C494.4 400.3 496.1 372.7 496.1 345L496.1 320.1C496.1 222.9 417.3 144.1 320.1 144.1zM214.7 212.7C205.6 202.1 189.4 201.3 180.8 212.3C157.7 242.1 144 279.4 144 320L144 344.9C144 369.1 141.4 393.3 136.2 416.8C132.8 432.4 144.1 447.9 160.1 447.9C170.6 447.9 180 440.9 182.3 430.6C188.7 402.5 192 373.8 192 344.8L192 319.9C192 292.7 200.5 267.5 214.9 246.8C222.1 236.4 222.9 222.2 214.7 212.6zM320 224C267 224 224 267 224 320L224 344.9C224 380.8 219.4 416.4 210.2 451C206.4 465.3 216.9 480 231.7 480C241.2 480 249.6 473.8 252.1 464.6C262.6 425.6 268 385.4 268 344.9L268 320C268 291.3 291.3 268 320 268C348.7 268 372 291.3 372 320L372 344.9C372 381.2 368.5 417.3 361.6 452.8C358.9 466.7 369.3 480 383.4 480C393.6 480 402.4 473 404.4 463C412.1 424.2 416 384.7 416 344.9L416 320C416 267 373 224 320 224zM344 320C344 306.7 333.3 296 320 296C306.7 296 296 306.7 296 320L296 344.9C296 404.8 285 464.2 263.5 520.1L257.6 535.4C252.8 547.8 259 561.7 271.4 566.4C283.8 571.1 297.7 565 302.4 552.6L308.3 537.3C331.9 475.9 344 410.7 344 344.9L344 320z" />
                                </svg>
                            </div>
                            <span class="data-tag">CleverTap</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-moengage">
                                <svg width="25px" fill="#e63b26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M544.4 304L368.4 304C350.7 304 336.4 289.7 336.4 272L336.4 96C336.4 78.3 350.8 63.8 368.3 66.1C475.3 80.3 560.1 165.1 574.3 272.1C576.6 289.6 562.1 304 544.4 304zM254.6 101.2C272.7 97.4 288.4 112.2 288.4 130.7L288.4 328C288.4 333.6 290.4 339 293.9 343.3L426 502.7C437.7 516.8 435.2 538.1 419.1 546.8C385 565.4 345.9 576 304.4 576C171.9 576 64.4 468.5 64.4 336C64.4 220.5 145.9 124.1 254.6 101.2zM509.8 352L573.8 352C592.3 352 607.1 367.7 603.3 385.8C593.1 434.2 568.3 477.2 533.7 510C521.4 521.7 502.1 519.2 491.3 506.1L406.9 404.4C389.6 383.5 404.5 352 431.5 352L509.7 352z" />
                                </svg>
                            </div>
                            <span class="data-tag">MoEngage</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-webengage">
                                <svg width="25px" fill="#2d3e50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M416 208C416 305.2 330 384 224 384C197.3 384 171.9 379 148.8 370L67.2 413.2C57.9 418.1 46.5 416.4 39 409C31.5 401.6 29.8 390.1 34.8 380.8L70.4 313.6C46.3 284.2 32 247.6 32 208C32 110.8 118 32 224 32C330 32 416 110.8 416 208zM416 576C321.9 576 243.6 513.9 227.2 432C347.2 430.5 451.5 345.1 463 229.3C546.3 248.5 608 317.6 608 400C608 439.6 593.7 476.2 569.6 505.6L605.2 572.8C610.1 582.1 608.4 593.5 601 601C593.6 608.5 582.1 610.2 572.8 605.2L491.2 562C468.1 571 442.7 576 416 576z" />
                                </svg>
                            </div>
                            <span class="data-tag">WebEngage</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zohoflow">
                                <svg width="25px" fill="#d88b00" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 128C256 110.3 270.3 96 288 96L352 96C369.7 96 384 110.3 384 128L384 192C384 209.7 369.7 224 352 224L344 224L344 288L464 288C503.8 288 536 320.2 536 360L536 416L544 416C561.7 416 576 430.3 576 448L576 512C576 529.7 561.7 544 544 544L480 544C462.3 544 448 529.7 448 512L448 448C448 430.3 462.3 416 480 416L488 416L488 360C488 346.7 477.3 336 464 336L344 336L344 416L352 416C369.7 416 384 430.3 384 448L384 512C384 529.7 369.7 544 352 544L288 544C270.3 544 256 529.7 256 512L256 448C256 430.3 270.3 416 288 416L296 416L296 336L176 336C162.7 336 152 346.7 152 360L152 416L160 416C177.7 416 192 430.3 192 448L192 512C192 529.7 177.7 544 160 544L96 544C78.3 544 64 529.7 64 512L64 448C64 430.3 78.3 416 96 416L104 416L104 360C104 320.2 136.2 288 176 288L296 288L296 224L288 224C270.3 224 256 209.7 256 192L256 128z" />
                                </svg>
                            </div>
                            <span class="data-tag">Zoho Flow</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zoho-int">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="25" fill="#6a3ab2">
                                    <path d="M224 32C241.7 32 256 46.3 256 64L256 160L384 160L384 64C384 46.3 398.3 32 416 32C433.7 32 448 46.3 448 64L448 160L512 160C529.7 160 544 174.3 544 192C544 209.7 529.7 224 512 224L512 288C512 383.1 442.8 462.1 352 477.3L352 544C352 561.7 337.7 576 320 576C302.3 576 288 561.7 288 544L288 477.3C197.2 462.1 128 383.1 128 288L128 224C110.3 224 96 209.7 96 192C96 174.3 110.3 160 128 160L192 160L192 64C192 46.3 206.3 32 224 32z"></path>
                                </svg>
                            </div>
                            <span class="data-tag">Zoho Integration</span>
                        </a>

                        <!-- Row 2 Items -->
                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-pabbly">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="25" fill="#ef4444">
                                    <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z"></path>
                                </svg>
                            </div>
                            <span class="data-tag">Pabbly</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zapier">
                                <svg width="25px" fill="#ff4a00" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M434.8 54.1C446.7 62.7 451.1 78.3 445.7 91.9L367.3 288L512 288C525.5 288 537.5 296.4 542.1 309.1C546.7 321.8 542.8 336 532.5 344.6L244.5 584.6C233.2 594 217.1 594.5 205.2 585.9C193.3 577.3 188.9 561.7 194.3 548.1L272.7 352L128 352C114.5 352 102.5 343.6 97.9 330.9C93.3 318.2 97.2 304 107.5 295.4L395.5 55.4C406.8 46 422.9 45.5 434.8 54.1z" />
                                </svg>
                            </div>
                            <span class="data-tag">Zapier</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-gsheets">
                                <svg width="25px" fill="#0f9d58" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M480 96C515.3 96 544 124.7 544 160L544 480C544 515.3 515.3 544 480 544L160 544L153.5 543.7C121.2 540.4 96 513.1 96 480L96 160C96 124.7 124.7 96 160 96L480 96zM160 384L160 480L288 480L288 384L160 384zM352 384L352 480L480 480L480 384L352 384zM160 320L288 320L288 224L160 224L160 320zM352 320L480 320L480 224L352 224L352 320z" />
                                </svg>
                            </div>
                            <span class="data-tag">Google Sheets</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-woo">
                                <svg width="25px" fill="#96588a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M320 72C183 72 72 183 72 320C72 457 183 568 320 568C457 568 568 457 568 320C568 183 457 72 320 72zM97 320C97 287.7 103.9 257 116.3 229.3L222.7 520.7C148.3 484.5 97 408.2 97 320zM320 543C298.1 543 277 539.8 257 533.9L323.9 339.5L392.4 527.3C392.9 528.4 393.4 529.4 394 530.4C370.9 538.5 346 543 320 543zM350.7 215.5C364.1 214.8 376.2 213.4 376.2 213.4C388.2 212 386.8 194.3 374.8 195C374.8 195 338.7 197.8 315.4 197.8C293.5 197.8 256.7 195 256.7 195C244.7 194.3 243.3 212.7 255.3 213.4C255.3 213.4 266.7 214.8 278.7 215.5L313.4 310.7L264.6 457L183.4 215.5C196.8 214.8 208.9 213.4 208.9 213.4C220.9 212 219.5 194.3 207.5 195C207.5 195 171.4 197.8 148.1 197.8C143.9 197.8 139 197.7 133.7 197.5C173.6 137 242.1 97 320 97C378 97 430.9 119.2 470.6 155.5C469.6 155.4 468.7 155.3 467.7 155.3C445.8 155.3 430.3 174.4 430.3 194.9C430.3 213.3 440.9 228.8 452.2 247.2C460.7 262 470.6 281.1 470.6 308.7C470.6 327.8 463.3 349.9 453.6 380.8L431.4 455.1L350.7 215.5zM432.1 512.7L500.2 315.8C512.9 284 517.2 258.6 517.2 235.9C517.2 227.7 516.7 220.1 515.7 213C533.1 244.8 543 281.2 543 320C543 402.3 498.4 474.1 432.1 512.7z" />
                                </svg>
                            </div>
                            <span class="data-tag">WooCommerce</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-hubspot">
                                <svg width="25px" fill="#ff7a59" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M331.8 275.6C306.7 299.3 291 332.9 291 370.2C291 399.5 300.7 426.5 317 448.2L267.5 498C263.1 496.4 258.4 495.5 253.5 495.5C242.7 495.5 232.6 499.7 225 507.3C217.4 514.9 213.2 525.1 213.2 535.9C213.2 546.7 217.4 556.8 225 564.4C232.6 572 242.8 576 253.5 576C264.3 576 274.4 572.1 282.1 564.4C289.7 556.8 293.9 546.6 293.9 535.9C293.9 531.7 293.3 527.7 292 523.8L342 473.6C364 490.5 391.4 500.5 421.3 500.5C493.2 500.5 551.3 442.2 551.3 370.3C551.3 305.1 503.6 251.1 441.1 241.6L441.1 180C458.6 172.6 469.3 156.2 469.3 137.1C469.3 111 448.4 89.2 422.3 89.2C396.2 89.2 375.6 111 375.6 137.1C375.6 156.2 386.3 172.6 403.8 180L403.8 241.2C388.6 243.3 374.2 247.9 361.1 254.8C333.5 233.9 243.6 169.1 192.2 130C193.4 125.6 194.2 121 194.2 116.2C194.2 87.4 170.7 64 141.8 64C113 64 89.6 87.4 89.6 116.2C89.6 145.1 113 168.5 141.8 168.5C151.6 168.5 160.7 165.6 168.6 160.9L331.8 275.6zM421.3 301.2C459.4 301.2 490.3 332.1 490.3 370.2C490.3 408.3 459.4 439.2 421.3 439.2C383.2 439.2 352.3 408.3 352.3 370.2C352.3 332.1 383.2 301.2 421.3 301.2z" />
                                </svg>
                            </div>
                            <span class="data-tag">HubSpot</span>
                        </a>

                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a href="#" class="chrono-portal align-port-left">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Overview</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a href="#" class="chrono-portal align-port-right">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Dashboard</span>
                    </a>

                </div>

            </section>

            <!-- section 2 Login -->
            <section id="login_contect_box" class="section_sub_with all_sejmca8974">

                <div class="overview_hero" style="display: none;">
                    <h3 class="htaw85">Omni Portal</h3>
                    <h3 class="htaw85">Build Powerful</h3>
                    <h3 class="htaw85 jsb8520">Communication</h3>
                    <h3 class="htaw85 jsb8520">Experiences</h3>

                    <p>SMS, RCS, WhatsApp, Voice and APIs from one platform.</p>
                    <br>
                    <a href="" class="btna1sa">
                        Get Started &#10170;
                    </a>
                </div>

                <div class="counrt_grid_wer854_card">
                    <div class="sole_89_Card">
                        <span class="qunik-count_version_2_onlyfor_appliction_page hwqih95a" data-target="50" data-suffix="M+">0</span>
                        <div class="tiawn98631ijas">Messages Sent</div>
                    </div>
                    <div class="sole_89_Card">
                        <span class="qunik-count_version_2_onlyfor_appliction_page hwqih95a" data-target="99.9" data-suffix="%">0</span>
                        <div class="tiawn98631ijas">Delivery Rate</div>
                    </div>
                    <div class="sole_89_Card">
                        <span class="qunik-count_version_2_onlyfor_appliction_page hwqih95a" data-target="20" data-suffix="+">0</span>
                        <div class="tiawn98631ijas">Integrations</div>
                    </div>
                    <div class="sole_89_Card">
                        <span class="qunik-count_version_2_onlyfor_appliction_page hwqih95a" data-target="24" data-suffix="/">0</span>
                        <span class="qunik-count_version_2_onlyfor_appliction_page hwqih95a" data-target="7">0</span>
                        <div class="tiawn98631ijas">Support</div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Platform Capabilities
                    </span>
                </div>

                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30">
                                    <path d="M119.9 75.5C108.6 68.6 93.8 72.3 86.9 83.6C62.1 124.6 47.9 172.7 47.9 224C47.9 275.3 62.1 323.4 86.9 364.4C93.8 375.7 108.5 379.4 119.9 372.5C131.3 365.6 134.9 350.9 128 339.5C107.7 305.9 96 266.3 96 224C96 181.7 107.7 142.1 128.1 108.4C135 97.1 131.3 82.3 120 75.4zM520 75.5C508.7 82.4 505 97.1 511.9 108.5C532.3 142.2 544 181.8 544 224.1C544 266.4 532.3 306 511.9 339.7C505 351 508.7 365.8 520 372.7C531.3 379.6 546.1 375.9 553 364.6C577.8 323.6 592 275.5 592 224.2C592 172.9 577.8 124.6 553 83.6C546.1 72.3 531.4 68.6 520 75.5zM352 279.4C371.1 268.3 384 247.7 384 224C384 188.7 355.3 160 320 160C284.7 160 256 188.7 256 224C256 247.7 268.9 268.4 288 279.4L288 544C288 561.7 302.3 576 320 576C337.7 576 352 561.7 352 544L352 279.4zM212.2 155C219.4 143.8 216.1 129 205 121.8C193.9 114.6 179 117.9 171.8 129C154.2 156.4 144 189 144 224C144 259 154.2 291.6 171.8 319C179 330.2 193.8 333.4 205 326.2C216.2 319 219.4 304.2 212.2 293C199.4 273.1 192 249.4 192 224C192 198.6 199.4 174.9 212.2 155zM468.2 129C461 117.8 446.2 114.6 435 121.8C423.8 129 420.6 143.8 427.8 155C440.6 174.9 448 198.6 448 224C448 249.4 440.6 273.1 427.8 293C420.6 304.2 423.9 319 435 326.2C446.1 333.4 461 330.1 468.2 319C485.8 291.6 496 259 496 224C496 189 485.8 156.4 468.2 129z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Multi-Channel Messaging</h5>
                        <p class="c-desc12 ">SMS, RCS, WhatsApp, Voice, IVR, Email and ClickToCall from one unified interface.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30" fill="#197553">
                                    <path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Analytics & Reporting</h5>
                        <p class="c-desc12 ">Real-time dashboards, delivery statistics, archive reports and status-wise analytics.</p>
                    </div>

                    <!-- card 3 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30" fill="#197553">
                                    <path d="M119.7 263.7L150.6 294.6C156.6 300.6 164.7 304 173.2 304L194.7 304C203.2 304 211.3 307.4 217.3 313.4L246.6 342.7C252.6 348.7 256 356.8 256 365.3L256 402.8C256 411.3 259.4 419.4 265.4 425.4L278.7 438.7C284.7 444.7 288.1 452.8 288.1 461.3L288.1 480C288.1 497.7 302.4 512 320.1 512C337.8 512 352.1 497.7 352.1 480L352.1 477.3C352.1 468.8 355.5 460.7 361.5 454.7L406.8 409.4C412.8 403.4 416.2 395.3 416.2 386.8L416.2 352.1C416.2 334.4 401.9 320.1 384.2 320.1L301.5 320.1C293 320.1 284.9 316.7 278.9 310.7L262.9 294.7C258.7 290.5 256.3 284.7 256.3 278.7C256.3 266.2 266.4 256.1 278.9 256.1L313.6 256.1C326.1 256.1 336.2 246 336.2 233.5C336.2 227.5 333.8 221.7 329.6 217.5L309.9 197.8C306 194 304 189.1 304 184C304 178.9 306 174 309.7 170.3L327 153C332.8 147.2 336.1 139.3 336.1 131.1C336.1 123.9 333.7 117.4 329.7 112.2C326.5 112.1 323.3 112 320.1 112C224.7 112 144.4 176.2 119.8 263.7zM528 320C528 285.4 519.6 252.8 504.6 224.2C498.2 225.1 491.9 228.1 486.7 233.3L473.3 246.7C467.3 252.7 463.9 260.8 463.9 269.3L463.9 304C463.9 321.7 478.2 336 495.9 336L520 336C522.5 336 525 335.7 527.3 335.2C527.7 330.2 527.8 325.1 527.8 320zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">API Integration</h5>
                        <p class="c-desc12 ">Secure REST APIs, full API logs, audit trails and developer-friendly documentation.</p>
                    </div>

                    <!-- card 4 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30" fill="#197553">
                                    <path d="M224 32C241.7 32 256 46.3 256 64L256 160L384 160L384 64C384 46.3 398.3 32 416 32C433.7 32 448 46.3 448 64L448 160L512 160C529.7 160 544 174.3 544 192C544 209.7 529.7 224 512 224L512 288C512 383.1 442.8 462.1 352 477.3L352 544C352 561.7 337.7 576 320 576C302.3 576 288 561.7 288 544L288 477.3C197.2 462.1 128 383.1 128 288L128 224C110.3 224 96 209.7 96 192C96 174.3 110.3 160 128 160L192 160L192 64C192 46.3 206.3 32 224 32z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Third-Party Plugins</h5>
                        <p class="c-desc12 ">Shopify, Zoho, HubSpot, Zapier, MoEngage, WooCommerce and 10+ more integrations.</p>
                    </div>

                    <!-- card 5 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30" fill="#197553">
                                    <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Workflow Automation</h5>
                        <p class="c-desc12 ">Journeys, automated routing, scheduled campaigns and smart fallback flows.</p>
                    </div>

                    <!-- card 6 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="30" fill="#197553">
                                    <path d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Compliance & Audit</h5>
                        <p class="c-desc12 ">System audit logs, DLT compliance, blacklist management and full message tracking.</p>
                    </div>

                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Communication Channels
                    </span>
                </div>

                <div class="container9789674">

                    <!-- Item 1: SMS -->
                    <a class="service-card">
                        <div class="icon-box icon-sms">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_4" width="20px" fill="#087553">
                                <path d="M576 304C576 436.5 461.4 544 320 544C282.9 544 247.7 536.6 215.9 523.3L97.5 574.1C88.1 578.1 77.3 575.8 70.4 568.3C63.5 560.8 62 549.8 66.8 540.8L115.6 448.6C83.2 408.3 64 358.3 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304z"></path>
                            </svg>
                        </div>
                        <div class="content-box">
                            <h3>SMS</h3>
                            <p>Instant, reliable messaging to any phone number. DLT-compliant campaigns with Smart URL support.</p>
                        </div>
                        <div class="arrow-box">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>

                    <!-- Item 2: RCS -->
                    <a class="service-card">
                        <div class="icon-box icon-rcs">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_5" width="20px" fill="#75085a">
                                <path d="M144 128C144 92.7 172.7 64 208 64L432 64C467.3 64 496 92.7 496 128L496 512C496 547.3 467.3 576 432 576L208 576C172.7 576 144 547.3 144 512L144 128zM256 504C256 517.3 266.7 528 280 528L360 528C373.3 528 384 517.3 384 504C384 490.7 373.3 480 360 480L280 480C266.7 480 256 490.7 256 504zM432 128L208 128L208 432L432 432L432 128z"></path>
                            </svg>
                        </div>
                        <div class="content-box">
                            <h3>RCS – Rich Communication Services</h3>
                            <p>Interactive messaging with images, carousels, buttons and read receipts via Jio & Vi.</p>
                        </div>
                        <div class="arrow-box">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>

                    <!-- Item 3: WhatsApp -->
                    <a class="service-card">
                        <div class="icon-box icon-wa">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_6" width="20px" fill="#087553">
                                <path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"></path>
                            </svg>
                        </div>
                        <div class="content-box">
                            <h3>WhatsApp</h3>
                            <p>Secure, trusted messaging on the world's largest messaging platform.</p>
                        </div>
                        <div class="arrow-box">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>

                    <!-- Item 4: Voice & IVR -->
                    <a class="service-card">
                        <div class="icon-box icon-voice">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_7" width="20px" fill="#753d08">
                                <path d="M376 32C504.1 32 608 135.9 608 264C608 277.3 597.3 288 584 288C570.7 288 560 277.3 560 264C560 162.4 477.6 80 376 80C362.7 80 352 69.3 352 56C352 42.7 362.7 32 376 32zM384 224C401.7 224 416 238.3 416 256C416 273.7 401.7 288 384 288C366.3 288 352 273.7 352 256C352 238.3 366.3 224 384 224zM352 152C352 138.7 362.7 128 376 128C451.1 128 512 188.9 512 264C512 277.3 501.3 288 488 288C474.7 288 464 277.3 464 264C464 215.4 424.6 176 376 176C362.7 176 352 165.3 352 152zM176.1 65.4C195.8 60 216.4 70.1 224.2 88.9L264.7 186.2C271.6 202.7 266.8 221.8 252.9 233.2L208.8 269.3C241.3 340.9 297.8 399.3 368.1 434.2L406.7 387C418 373.1 437.1 368.4 453.7 375.2L551 415.8C569.8 423.6 579.9 444.2 574.5 463.9L573 469.4C555.4 534.1 492.9 589.3 416.6 573.2C241.6 536.1 103.9 398.4 66.8 223.4C50.7 147.1 105.9 84.6 170.5 66.9L176 65.4z"></path>
                            </svg>
                        </div>
                        <div class="content-box">
                            <h3>Voice & IVR</h3>
                            <p>Smart call routing with voice menus and outbound voice campaigns.</p>
                        </div>
                        <div class="arrow-box">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>

                    <!-- Item 5: Email -->
                    <a class="service-card">
                        <div class="icon-box icon-email">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20px" fill="#75083f">
                                <path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z" />
                            </svg>
                        </div>
                        <div class="content-box">
                            <h3>Email</h3>
                            <p>Email marketing strategies for better conversations and campaign tracking.</p>
                        </div>
                        <div class="arrow-box">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </a>

                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span>
                </div>

                <div class="void-horizon">

                    <!-- Grid Layout -->
                    <div class="cyber-grid-array">

                        <!-- Row 1 Items -->
                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-shopify">
                                <svg width="25px" fill="#96bf48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M484.5 168.1C484.3 167 483.8 166 483 165.3C482.2 164.6 481.2 164.1 480.1 164.1C478.1 164.1 442.9 163.3 442.9 163.3C442.9 163.3 421.3 142.5 413.3 134.5L413.3 567.2L539 536C539 536 485 170.5 484.6 168.1zM384.9 134.5C383 128.4 380.6 122.6 377.7 116.9C367.3 96.9 351.7 86 333.3 86C332 86 330.6 86.1 329.3 86.4C328.9 85.6 328.1 85.2 327.7 84.4C319.7 75.6 309.3 71.6 296.9 72C272.9 72.8 248.9 90 229.7 120.8C216.1 142.4 205.7 169.6 202.9 190.9C175.3 199.3 156.1 205.3 155.7 205.7C141.7 210.1 141.3 210.5 139.7 223.7C138.5 233.7 101.7 515.5 101.7 515.5L404.3 568L404.3 129.7C402.8 129.8 401.4 129.9 399.9 130.1C399.9 130.1 394.3 131.7 385.1 134.5zM329.6 151.7C313.6 156.5 296 162.1 278.8 167.3C283.6 148.5 293.2 129.7 304.4 117.3C308.8 112.9 314.8 107.7 321.6 104.5C328.4 118.9 330 138.5 329.6 151.7zM296.8 88.4C301.8 88.2 306.8 89.5 311.2 92C304.8 95.2 298.4 100.4 292.4 106.4C277.2 122.8 265.6 148.4 260.8 172.9C246.4 177.3 232 181.7 218.8 185.7C227.6 147.3 260 89.3 296.8 88.5zM250.4 308.6C252 334.2 319.6 339.8 323.6 400.3C326.4 447.9 298.4 480.4 258 482.8C209.2 486 182.4 457.2 182.4 457.2L192.8 413.2C192.8 413.2 219.6 433.6 241.2 432C255.2 431.2 260.4 419.6 260 411.6C258 378 202.8 380 199.2 324.7C196 278.3 226.4 231.4 293.7 227C319.7 225.4 332.9 231.8 332.9 231.8L317.7 289.4C317.7 289.4 300.5 281.4 280.1 283C250.5 285 250.1 303.8 250.5 308.6zM345.6 146.9C345.6 134.9 344 117.7 338.4 103.3C356.8 106.9 365.6 127.3 369.6 139.7C362.4 141.7 354.4 144.1 345.6 146.9z" />
                                </svg>
                            </div>
                            <span class="data-tag">Shopify</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-clevertap">
                                <svg width="25px" fill="#f47b20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M112 320C112 205.1 205.1 112 320 112C383.1 112 439.6 140.1 477.8 184.5C486.4 194.6 501.6 195.7 511.6 187.1C521.6 178.5 522.8 163.3 514.2 153.3C467.3 98.6 397.7 64 320 64C178.6 64 64 178.6 64 320L64 360C64 373.3 74.7 384 88 384C101.3 384 112 373.3 112 360L112 320zM570.5 267.1C567.8 254.1 555 245.8 542.1 248.6C529.2 251.4 520.8 264.1 523.6 277C526.5 290.9 528.1 305.3 528.1 320.1L528.1 360.1C528.1 373.4 538.8 384.1 552.1 384.1C565.4 384.1 576.1 373.4 576.1 360.1L576.1 320.1C576.1 302 574.2 284.3 570.6 267.2zM320 144C301 144 282.6 147 265.5 152.6C250.3 157.6 246.8 176.3 257.2 188.5C264.3 196.8 276 199.3 286.6 196.4C297.2 193.5 308.4 192 320 192C390.7 192 448 249.3 448 320L448 344.9C448 370.1 446.5 395.2 443.6 420.2C441.9 434.8 453 448 467.8 448C479.6 448 489.7 439.4 491.1 427.7C494.4 400.3 496.1 372.7 496.1 345L496.1 320.1C496.1 222.9 417.3 144.1 320.1 144.1zM214.7 212.7C205.6 202.1 189.4 201.3 180.8 212.3C157.7 242.1 144 279.4 144 320L144 344.9C144 369.1 141.4 393.3 136.2 416.8C132.8 432.4 144.1 447.9 160.1 447.9C170.6 447.9 180 440.9 182.3 430.6C188.7 402.5 192 373.8 192 344.8L192 319.9C192 292.7 200.5 267.5 214.9 246.8C222.1 236.4 222.9 222.2 214.7 212.6zM320 224C267 224 224 267 224 320L224 344.9C224 380.8 219.4 416.4 210.2 451C206.4 465.3 216.9 480 231.7 480C241.2 480 249.6 473.8 252.1 464.6C262.6 425.6 268 385.4 268 344.9L268 320C268 291.3 291.3 268 320 268C348.7 268 372 291.3 372 320L372 344.9C372 381.2 368.5 417.3 361.6 452.8C358.9 466.7 369.3 480 383.4 480C393.6 480 402.4 473 404.4 463C412.1 424.2 416 384.7 416 344.9L416 320C416 267 373 224 320 224zM344 320C344 306.7 333.3 296 320 296C306.7 296 296 306.7 296 320L296 344.9C296 404.8 285 464.2 263.5 520.1L257.6 535.4C252.8 547.8 259 561.7 271.4 566.4C283.8 571.1 297.7 565 302.4 552.6L308.3 537.3C331.9 475.9 344 410.7 344 344.9L344 320z" />
                                </svg>
                            </div>
                            <span class="data-tag">CleverTap</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-moengage">
                                <svg width="25px" fill="#e63b26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M544.4 304L368.4 304C350.7 304 336.4 289.7 336.4 272L336.4 96C336.4 78.3 350.8 63.8 368.3 66.1C475.3 80.3 560.1 165.1 574.3 272.1C576.6 289.6 562.1 304 544.4 304zM254.6 101.2C272.7 97.4 288.4 112.2 288.4 130.7L288.4 328C288.4 333.6 290.4 339 293.9 343.3L426 502.7C437.7 516.8 435.2 538.1 419.1 546.8C385 565.4 345.9 576 304.4 576C171.9 576 64.4 468.5 64.4 336C64.4 220.5 145.9 124.1 254.6 101.2zM509.8 352L573.8 352C592.3 352 607.1 367.7 603.3 385.8C593.1 434.2 568.3 477.2 533.7 510C521.4 521.7 502.1 519.2 491.3 506.1L406.9 404.4C389.6 383.5 404.5 352 431.5 352L509.7 352z" />
                                </svg>
                            </div>
                            <span class="data-tag">MoEngage</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-webengage">
                                <svg width="25px" fill="#2d3e50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M416 208C416 305.2 330 384 224 384C197.3 384 171.9 379 148.8 370L67.2 413.2C57.9 418.1 46.5 416.4 39 409C31.5 401.6 29.8 390.1 34.8 380.8L70.4 313.6C46.3 284.2 32 247.6 32 208C32 110.8 118 32 224 32C330 32 416 110.8 416 208zM416 576C321.9 576 243.6 513.9 227.2 432C347.2 430.5 451.5 345.1 463 229.3C546.3 248.5 608 317.6 608 400C608 439.6 593.7 476.2 569.6 505.6L605.2 572.8C610.1 582.1 608.4 593.5 601 601C593.6 608.5 582.1 610.2 572.8 605.2L491.2 562C468.1 571 442.7 576 416 576z" />
                                </svg>
                            </div>
                            <span class="data-tag">WebEngage</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zohoflow">
                                <svg width="25px" fill="#d88b00" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 128C256 110.3 270.3 96 288 96L352 96C369.7 96 384 110.3 384 128L384 192C384 209.7 369.7 224 352 224L344 224L344 288L464 288C503.8 288 536 320.2 536 360L536 416L544 416C561.7 416 576 430.3 576 448L576 512C576 529.7 561.7 544 544 544L480 544C462.3 544 448 529.7 448 512L448 448C448 430.3 462.3 416 480 416L488 416L488 360C488 346.7 477.3 336 464 336L344 336L344 416L352 416C369.7 416 384 430.3 384 448L384 512C384 529.7 369.7 544 352 544L288 544C270.3 544 256 529.7 256 512L256 448C256 430.3 270.3 416 288 416L296 416L296 336L176 336C162.7 336 152 346.7 152 360L152 416L160 416C177.7 416 192 430.3 192 448L192 512C192 529.7 177.7 544 160 544L96 544C78.3 544 64 529.7 64 512L64 448C64 430.3 78.3 416 96 416L104 416L104 360C104 320.2 136.2 288 176 288L296 288L296 224L288 224C270.3 224 256 209.7 256 192L256 128z" />
                                </svg>
                            </div>
                            <span class="data-tag">Zoho Flow</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zoho-int">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="25" fill="#6a3ab2">
                                    <path d="M224 32C241.7 32 256 46.3 256 64L256 160L384 160L384 64C384 46.3 398.3 32 416 32C433.7 32 448 46.3 448 64L448 160L512 160C529.7 160 544 174.3 544 192C544 209.7 529.7 224 512 224L512 288C512 383.1 442.8 462.1 352 477.3L352 544C352 561.7 337.7 576 320 576C302.3 576 288 561.7 288 544L288 477.3C197.2 462.1 128 383.1 128 288L128 224C110.3 224 96 209.7 96 192C96 174.3 110.3 160 128 160L192 160L192 64C192 46.3 206.3 32 224 32z"></path>
                                </svg>
                            </div>
                            <span class="data-tag">Zoho Integration</span>
                        </a>

                        <!-- Row 2 Items -->
                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-pabbly">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="25" fill="#ef4444">
                                    <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z"></path>
                                </svg>
                            </div>
                            <span class="data-tag">Pabbly</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zapier">
                                <svg width="25px" fill="#ff4a00" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M434.8 54.1C446.7 62.7 451.1 78.3 445.7 91.9L367.3 288L512 288C525.5 288 537.5 296.4 542.1 309.1C546.7 321.8 542.8 336 532.5 344.6L244.5 584.6C233.2 594 217.1 594.5 205.2 585.9C193.3 577.3 188.9 561.7 194.3 548.1L272.7 352L128 352C114.5 352 102.5 343.6 97.9 330.9C93.3 318.2 97.2 304 107.5 295.4L395.5 55.4C406.8 46 422.9 45.5 434.8 54.1z" />
                                </svg>
                            </div>
                            <span class="data-tag">Zapier</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-gsheets">
                                <svg width="25px" fill="#0f9d58" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M480 96C515.3 96 544 124.7 544 160L544 480C544 515.3 515.3 544 480 544L160 544L153.5 543.7C121.2 540.4 96 513.1 96 480L96 160C96 124.7 124.7 96 160 96L480 96zM160 384L160 480L288 480L288 384L160 384zM352 384L352 480L480 480L480 384L352 384zM160 320L288 320L288 224L160 224L160 320zM352 320L480 320L480 224L352 224L352 320z" />
                                </svg>
                            </div>
                            <span class="data-tag">Google Sheets</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-woo">
                                <svg width="25px" fill="#96588a" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M320 72C183 72 72 183 72 320C72 457 183 568 320 568C457 568 568 457 568 320C568 183 457 72 320 72zM97 320C97 287.7 103.9 257 116.3 229.3L222.7 520.7C148.3 484.5 97 408.2 97 320zM320 543C298.1 543 277 539.8 257 533.9L323.9 339.5L392.4 527.3C392.9 528.4 393.4 529.4 394 530.4C370.9 538.5 346 543 320 543zM350.7 215.5C364.1 214.8 376.2 213.4 376.2 213.4C388.2 212 386.8 194.3 374.8 195C374.8 195 338.7 197.8 315.4 197.8C293.5 197.8 256.7 195 256.7 195C244.7 194.3 243.3 212.7 255.3 213.4C255.3 213.4 266.7 214.8 278.7 215.5L313.4 310.7L264.6 457L183.4 215.5C196.8 214.8 208.9 213.4 208.9 213.4C220.9 212 219.5 194.3 207.5 195C207.5 195 171.4 197.8 148.1 197.8C143.9 197.8 139 197.7 133.7 197.5C173.6 137 242.1 97 320 97C378 97 430.9 119.2 470.6 155.5C469.6 155.4 468.7 155.3 467.7 155.3C445.8 155.3 430.3 174.4 430.3 194.9C430.3 213.3 440.9 228.8 452.2 247.2C460.7 262 470.6 281.1 470.6 308.7C470.6 327.8 463.3 349.9 453.6 380.8L431.4 455.1L350.7 215.5zM432.1 512.7L500.2 315.8C512.9 284 517.2 258.6 517.2 235.9C517.2 227.7 516.7 220.1 515.7 213C533.1 244.8 543 281.2 543 320C543 402.3 498.4 474.1 432.1 512.7z" />
                                </svg>
                            </div>
                            <span class="data-tag">WooCommerce</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-hubspot">
                                <svg width="25px" fill="#ff7a59" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M331.8 275.6C306.7 299.3 291 332.9 291 370.2C291 399.5 300.7 426.5 317 448.2L267.5 498C263.1 496.4 258.4 495.5 253.5 495.5C242.7 495.5 232.6 499.7 225 507.3C217.4 514.9 213.2 525.1 213.2 535.9C213.2 546.7 217.4 556.8 225 564.4C232.6 572 242.8 576 253.5 576C264.3 576 274.4 572.1 282.1 564.4C289.7 556.8 293.9 546.6 293.9 535.9C293.9 531.7 293.3 527.7 292 523.8L342 473.6C364 490.5 391.4 500.5 421.3 500.5C493.2 500.5 551.3 442.2 551.3 370.3C551.3 305.1 503.6 251.1 441.1 241.6L441.1 180C458.6 172.6 469.3 156.2 469.3 137.1C469.3 111 448.4 89.2 422.3 89.2C396.2 89.2 375.6 111 375.6 137.1C375.6 156.2 386.3 172.6 403.8 180L403.8 241.2C388.6 243.3 374.2 247.9 361.1 254.8C333.5 233.9 243.6 169.1 192.2 130C193.4 125.6 194.2 121 194.2 116.2C194.2 87.4 170.7 64 141.8 64C113 64 89.6 87.4 89.6 116.2C89.6 145.1 113 168.5 141.8 168.5C151.6 168.5 160.7 165.6 168.6 160.9L331.8 275.6zM421.3 301.2C459.4 301.2 490.3 332.1 490.3 370.2C490.3 408.3 459.4 439.2 421.3 439.2C383.2 439.2 352.3 408.3 352.3 370.2C352.3 332.1 383.2 301.2 421.3 301.2z" />
                                </svg>
                            </div>
                            <span class="data-tag">HubSpot</span>
                        </a>

                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a href="#" class="chrono-portal align-port-left">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Overview</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a href="#" class="chrono-portal align-port-right">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Dashboard</span>
                    </a>

                </div>

            </section>

            <!-- section 3 Dashbord -->
            <section id="dashbord_contect_box" class="section_sub_with all_sejmca8974">
                3
            </section>

            <!-- section 4 SMS -->
            <section id="sms_contect_box" class="section_sub_with all_sejmca8974">
                4
            </section>

            <!-- section 5 RCS -->
            <section id="rcs_contect_box" class="section_sub_with all_sejmca8974">
                5   
            </section>

            <!-- section 6 Whatsapp -->
            <section id="whatsapp_contect_box" class="section_sub_with all_sejmca8974">
                6
            </section>

            <!-- section 7 Voice -->
            <section id="voice_contect_box" class="section_sub_with all_sejmca8974">
                7
            </section>

            <!-- section 8 IVR -->
            <section id="ivr_contect_box" class="section_sub_with all_sejmca8974">
                8
            </section>

            <!-- section 9 Click To Call -->
            <section id="click_to_call_contect_box" class="section_sub_with all_sejmca8974">
                9
            </section>

            <!-- section 10 Text To Speech -->
            <section id="text_to_speech_contect_box" class="section_sub_with all_sejmca8974">
                10
            </section>

            <!-- section 11 Ai Agent -->
            <section id="ai_agent_contect_box" class="section_sub_with all_sejmca8974">
                11
            </section>

            <!-- section 12 Journeys -->
            <section id="journeys_contect_box" class="section_sub_with all_sejmca8974">
                12
            </section>


        </section>

    </section>
    <script>
        const haamer_id_btn = document.getElementById("haamer_id_adase");
        let dash_box_slie = document.getElementById("left_section_box");
        let close_linw969 = document.getElementById("close_linw969");
        let haw_linw969 = document.getElementById("haw_linw969");





        haamer_id_btn.addEventListener("click", () => {

            dash_box_slie.classList.toggle("dashbord_revile_gl");
            haamer_id_btn.classList.toggle("haamer_btn_nikw5");

            if (haamer_id_btn.classList.contains("haamer_btn_nikw5")) {

                close_linw969.style.display = "flex";
                haw_linw969.style.display = "none";

            } else {

                close_linw969.style.display = "none";
                haw_linw969.style.display = "flex";

            }

        });


        function show_this_box(el) {

            let overview_box_show = document.getElementById("overview_contect_box");
            let login_contect_box = document.getElementById("login_contect_box");
            let dashbord_contect_box = document.getElementById("dashbord_contect_box");
            let sms_contect_box = document.getElementById("sms_contect_box");
            let rcs_contect_box = document.getElementById("rcs_contect_box");
            let whatsapp_contect_box = document.getElementById("whatsapp_contect_box");
            let voice_contect_box = document.getElementById("voice_contect_box");
            let ivr_contect_box = document.getElementById("ivr_contect_box");
            let click_to_call_contect_box = document.getElementById("click_to_call_contect_box");
            let text_to_speech_contect_box = document.getElementById("text_to_speech_contect_box");
            let ai_agent_contect_box = document.getElementById("ai_agent_contect_box");
            let journeys_contect_box = document.getElementById("journeys_contect_box");
            
            document.querySelectorAll('.subbox_link').forEach(item => {
                item.classList.remove('active');

                let svg = item.querySelector('.sub_set_iocn_svg');

                if (svg) {
                    svg.classList.remove('svg_icon_color-active');
                }
            });

            el.classList.add('active');

            let icon = el.querySelector('.sub_set_iocn_svg');

            if (icon) {
                icon.classList.add('svg_icon_color-active');
            }

            // set defulte none on all box 
            overview_box_show.classList.remove("show_active")
            login_contect_box.classList.remove("show_active")
            dashbord_contect_box.classList.remove("show_active")
            sms_contect_box.classList.remove("show_active")
            rcs_contect_box.classList.remove("show_active")
            whatsapp_contect_box.classList.remove("show_active")
            voice_contect_box.classList.remove("show_active")
            ivr_contect_box.classList.remove("show_active")
            click_to_call_contect_box.classList.remove("show_active")
            text_to_speech_contect_box.classList.remove("show_active")
            ai_agent_contect_box.classList.remove("show_active")
            journeys_contect_box.classList.remove("show_active")
            
            let value = el.dataset.set;

            if (value === "overview") {
                overview_box_show.classList.add("show_active")
            }

            if (value === "login") {
                login_contect_box.classList.add("show_active")
            }

            if (value === "dashbord") {
                dashbord_contect_box.classList.add("show_active")
            }

            if (value === "sms") {
                sms_contect_box.classList.add("show_active")
            }

            if (value === "rcs") {
                rcs_contect_box.classList.add("show_active")
            }

            if (value === "whatsapp") {
                whatsapp_contect_box.classList.add("show_active")
            }

            if (value === "voice") {
                voice_contect_box.classList.add("show_active")
            }

            if (value === "ivr") {
                ivr_contect_box.classList.add("show_active")
            }

            if (value === "click_to_call") {
                click_to_call_contect_box.classList.add("show_active")
            }

            if (value === "text_to_speech") {
                text_to_speech_contect_box.classList.add("show_active")
            }
            if (value === "ai_agent") {
                ai_agent_contect_box.classList.add("show_active")
            }
            if (value === "journeys") {
                journeys_contect_box.classList.add("show_active")
            }
        }
    </script>


    <script>
        function startOverviewCounters() {

            const sections = document.querySelectorAll(".counrt_grid_wer854_card");

            if (!sections.length) return;

            sections.forEach((section) => {

                // Is section ke andar ke counters only
                const counters = section.querySelectorAll(".qunik-count_version_2_onlyfor_appliction_page");

                if (!counters.length) return;

                const runCounter = (counter) => {

                    // Already started hai to dobara mat chalao
                    if (counter.dataset.counterStarted === "true") return;

                    counter.dataset.counterStarted = "true";

                    const target = parseFloat(counter.dataset.target);

                    if (isNaN(target)) return;

                    const suffix = counter.dataset.suffix || "";
                    const duration = 1800;
                    const start = performance.now();

                    function animateCounter(time) {

                        const progress = Math.min(
                            (time - start) / duration,
                            1
                        );

                        // Smooth animation
                        const ease = 1 - Math.pow(1 - progress, 3);

                        const currentValue = target * ease;

                        if (target % 1 !== 0) {

                            counter.textContent =
                                currentValue.toFixed(1) + suffix;

                        } else {

                            counter.textContent =
                                Math.floor(currentValue) + suffix;
                        }

                        if (progress < 1) {

                            requestAnimationFrame(animateCounter);

                        } else {

                            // Exact final value
                            counter.textContent =
                                (target % 1 !== 0 ?
                                    target.toFixed(1) :
                                    target
                                ) + suffix;
                        }
                    }

                    requestAnimationFrame(animateCounter);
                };


                // Section visible hone ka wait karega
                const observer = new IntersectionObserver(
                    (entries, obs) => {

                        entries.forEach((entry) => {

                            if (!entry.isIntersecting) return;

                            // Sirf isi section ke counters
                            counters.forEach((counter) => {
                                runCounter(counter);
                            });

                            // Ek baar chalne ke baad observer remove
                            obs.unobserve(entry.target);
                        });

                    }, {
                        threshold: 0.25
                    }
                );

                observer.observe(section);
            });
        }


        // Page load ke baad function run
        document.addEventListener("DOMContentLoaded", () => {
            startOverviewCounters();
        });
    </script>

</main>