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
            padding: 50px 30px 90px;
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
            background: linear-gradient(135deg, #055096 0%, #0d8494 100%);
            /* background: linear-gradient(135deg, #059669 0%, #0d9488 100%); */
            color: #ffffff !important;
            font-weight: 700;
            padding: 10px 16px;
            margin: 4px 0;
            border-radius: 10px;
            box-shadow: 0 6px 16px rgba(5, 63, 150, 0.25);
        }


        .subbox_link.active:hover {
            background: linear-gradient(135deg, #055096 0%, #0d8494 100%);
            /* background: linear-gradient(135deg, #059669 0%, #0d9488 100%); */
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
            /* background: #313030; */
            display: flex;
            align-items: start;
            justify-content: center;
            margin: 25px 25px 25px 375px;

        }

        .all_sejmca8974 {

            /* #overview_contect_box { */
            margin-top: 25px;

            border: 1px solid #6666663d;
            /* background: #c0b9b9; */
            background: #fff;
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
            animation: to_wm95 0.55s ease forwards;
        }

        @keyframes to_wm95 {
            from {
                transform: translateY(110px);
                opacity: 0;
                transition: .25s ease;
            }

            to {
                transition: .25s ease;
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* show section after click css end */


        /* secton 2 login */
        .login_hero {
            margin: auto;
            width: 80%;
            display: block;
            color: #0284c7;
            font-size: 13px;
        }


        .brad_kaem {
            font-size: 13px;
            color: #0284c7;
            cursor: pointer;
        }

        .brad_kaem:nth-child(2) {
            content: "";
        }

        .loging_title {
            width: 80%;
            margin: auto;
            margin-top: 15px;
            position: relative;
            padding-left: 15px;
        }


        .loging_title::before {
            content: "";
            position: absolute;
            width: 10px;
            height: 10px;
            background: #0284c7;
            display: block;
            border-radius: 50%;
            left: 5px;
            top: 50%;
            transform: translate(-50%, -50%);

            /* margin-right: 10px; */
        }

        .loging_title h4 {
            color: #0284c7;
            font-size: 14px;
        }

        #login_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #login_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }

        .all_drive_box {
            width: 80%;
            margin: auto;
            margin-top: 20px;
            overflow: hidden;
            border-radius: 15px;
            transition: transform 0.25s ease;
        }

        .img_box img {
            width: 100%;
            display: block;
        }

        .all_drive_box:hover {
            transform: scale(1.02);
               box-shadow: 0 0px 13px 2px #00000059;
        }

        .qunike-table-container {
            width: 80%;
            margin: auto;
            margin-top: 30px;
        }

        .qunike-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border: 1px solid #dce3ec;
            border-radius: 9px;
            overflow: hidden;
            background: #ffffff;
        }

        .qunike-table th,
        .qunike-table td {
            box-sizing: border-box;
        }

        .qunike-table th {
            padding: 13px 18px;
            background: #f1f5f9;
            color: #8a9bb3;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.6px;
            text-align: left;
            border-bottom: 1px solid #dce3ec;
        }

        .qunike-table th:first-child {
            width: 27%;
        }

        .qunike-table th:last-child {
            width: 73%;
        }

        .qunike-table td {
            padding: 12px 18px;
            font-size: 14px;
            line-height: 1.5;
            border-bottom: 1px solid #dce3ec;
        }

        .qunike-table td:first-child {
            font-weight: 600;
            color: #20283a;
        }

        .qunike-table td:nth-child(2) {
            color: #59677d;
            font-weight: 400;
        }

        .qunike-table tr:last-child td {
            border-bottom: none;
        }

        @media (max-width: 992px) {

            .qunike-table-container {
                width: 90%;
            }

            .qunike-table th {
                padding: 12px 15px;
                font-size: 12px;
            }

            .qunike-table td {
                padding: 11px 15px;
                font-size: 13px;
            }
        }

        @media (max-width: 768px) {

            .qunike-table-container {
                width: 94%;
                margin: auto;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .qunike-table {
                min-width: 620px;
            }

            .qunike-table th {
                padding: 11px 14px;
                font-size: 12px;
            }

            .qunike-table td {
                padding: 11px 14px;
                font-size: 13px;
            }
        }

        @media (max-width: 480px) {

            .qunike-table-container {
                width: 96%;
            }

            .qunike-table {
                min-width: 560px;
            }

            .qunike-table th {
                padding: 10px 12px;
                font-size: 11px;
            }

            .qunike-table td {
                padding: 10px 12px;
                font-size: 12px;
            }
        }

        .om-guide-shell {
            width: 80%;
            margin: auto;
            padding: 40px 0;
        }

        .om-title-bar {
            text-align: center;
            margin-bottom: 8px;
        }

        .om-main-heading {
            font-size: 26px;
            color: #1e293b;
            margin: 0;
        }

        .om-thin-strip {
            display: block;
            width: 70px;
            height: 4px;
            margin: 12px auto 0 auto;
            border-radius: 4px;
            background: linear-gradient(90deg, #22c55e, #16a34a);
        }

        .om-sub-caption {
            text-align: center;
            font-size: 14px;
            color: #8a94a6;
            margin: 10px 0 30px 0;
        }

        /* ===== single step card ===== */
        .om-step-card {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            background: #ffffff;
            border: 1px solid #e2e6ee;
            border-left: 4px solid #224ec5;
            border-radius: 12px;
            padding: 20px 22px;
            margin-bottom: 16px;
            box-shadow: 0 4px 14px rgba(30, 41, 59, 0.08);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .om-step-card:hover {
            transform: translateX(6px);
            box-shadow: 0 6px 20px rgba(34, 72, 197, 0.18);
        }

        .om-circle-badge {
            flex-shrink: 0;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: linear-gradient(135deg, #224ec5, #1637a3);
            color: #ffffff;
            font-size: 16px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(34, 37, 197, 0.35);
        }

        .om-card-left {
            flex: 1;
        }

        .om-step-title {
            font-size: 15px;
            font-weight: 700;
            color: #162b65;
            margin: 0 0 6px 0;
        }

        .om-step-detail {
            font-size: 13px;
            color: #666666;
            line-height: 1.6;
            margin: 0 !important;
        }

        .om-link-tag {
            color: #4f6ef7;
            font-weight: 600;
            text-decoration: none;
        }

        .om-link-tag:hover {
            text-decoration: underline;
        }

        .om-code-chip {
            display: inline-block;
            padding: 2px 10px;

            font-size: 13px;
            color: #3b3f8f;
            background: #eef2ff;
            border: 1px solid #c7d2fe;
            border-radius: 6px;
        }

        .om-note-tag {
            display: inline-block;
            padding: 2px 10px;
            font-size: 12px;
            font-weight: 600;
            color: #92400e;
            background: #fef3c7;
            border: 1px solid #fcd34d;
            border-radius: 6px;
            margin-left: 6px;
        }


        .hdah651 {
            width: 80%;
            margin: auto;
        }

        /* secton 3 dashbord */
        #dashbord_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #dashbord_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }

        #dashbord_contect_box h5 {
            margin: auto;
            width: 80%;
            margin-top: 30px;
            font-size: 16px;
        }

        /* secton 4 SMS */
        #sms_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #sms_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }

        /* secton 5 RCS */
        #rcs_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #rcs_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }


        /* secton 6 whatsapp */
        #whatsapp_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #whatsapp_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }


        /* secton 7 voice */
        #voice_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #voice_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }


        /* secton 8 ivr */
        #ivr_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #ivr_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }


        /* secton 9 click to call */
        #click_to_call_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #click_to_call_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }


        .sndinli li::marker {
            color: #03810a !important;
        }

        /* secton 10 text to speech */
        #text_to_speech_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #text_to_speech_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }






        /* secton 11 ai agent */
        #ai_agent_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #ai_agent_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }


        /* secton 12 jourany */
        #journeys_contect_box h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        #journeys_contect_box p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;

        }

        .diaod98641 {
            width: 80%;
            margin: auto;


        }

        /* Sub links  */

        .auto_margin_notwa h2 {
            width: 80%;
            font-size: 40px;
            margin: auto;
        }

        .auto_margin_notwa p {
            font-size: 14px;
            width: 80%;
            margin: auto;
            color: #666666;
        }

        .line_rola span {
            left: -10px !important;

            font-weight: 700;

        }


        /* sms  */
        .sole78m {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 7px 18px;
            font-size: 12.5px;
            color: #94a3b8;
            cursor: pointer;
            text-decoration: none;
            border-left: 3px solid transparent;
            transition: all .13s;
            user-select: none;
            position: relative;
            left: 25px;
        }

        .sole78m::before {
            content: '';
            position: absolute;
            left: 8px;
            top: 50%;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #cbd5e1;
            transform: translateY(-50%);
            transition: background .13s;
        }

        .sole78m:not(.active):hover {
            background: #f1f5f9;
            color: #0f172a;
        }


        .sole78m.active {
            background: linear-gradient(135deg, #055096 0%, #0d8494 100%);
            box-shadow: 0 8px 20px rgba(10, 37, 191, 0.18);
            color: #ffffff !important;
            font-weight: 700;
            border: none;
            border-radius: 10px;
            animation: sole78mTransform 0.6s ease forwards;
        }

        @keyframes sole78mTransform {
            0% {
                transform: translateX(-15px) scale(0.95);
                opacity: 0.6;
            }

            100% {
                transform: translateX(0) scale(1);
                opacity: 1;
            }
        }

        .sole78m.active:hover {
            background: #0a58bf;
            color: #fff;
            border-radius: 10px;
        }

        .sub_links_of_allawn {
            display: none;
        }

        .sub_links_of_show_box {
            display: block;
        }

        .step_impear {
            margin: 30px;
            border-radius: 15px;
            overflow: hidden;
            transition: .25s ease;
        }
        .step_impear:hover {
            transition: .25s ease;
            transform: scale(1.02);
                box-shadow: 0 0px 13px 2px #00000059;
        }
    </style>

    <section class="application_section">

        <!-- left side  -->
        <section class="left_section_1" id="left_section_box">

            <h6>Getting Started</h6>

            <ul class="top_nave_appli">
                <li class="subbox_link active" id="overview_btn_124" data-set="overview" onclick="show_this_box(this); close_all_sub_links_ha()">
                    <span class="svg_icon_box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg svg_icon_color-active" data-subset="icon_1">
                            <path d="M298.2 72.6C310.5 61.2 329.5 61.2 341.7 72.6L432 156.3L432 144C432 126.3 446.3 112 464 112L496 112C513.7 112 528 126.3 528 144L528 245.5L565.8 280.6C575.4 289.6 578.6 303.5 573.8 315.7C569 327.9 557.2 336 544 336L528 336L528 512C528 547.3 499.3 576 464 576L176 576C140.7 576 112 547.3 112 512L112 336L96 336C82.8 336 71 327.9 66.2 315.7C61.4 303.5 64.6 289.5 74.2 280.6L298.2 72.6zM304 384C277.5 384 256 405.5 256 432L256 528L384 528L384 432C384 405.5 362.5 384 336 384L304 384z" />
                        </svg>
                    </span>

                    Overview
                </li>
                <li class="subbox_link" id="login_btn_124" data-set="login" onclick="show_this_box(this); close_all_sub_links_ha()">
                    <span class="svg_icon_box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_2">
                            <path d="M256 160L256 224L384 224L384 160C384 124.7 355.3 96 320 96C284.7 96 256 124.7 256 160zM192 224L192 160C192 89.3 249.3 32 320 32C390.7 32 448 89.3 448 160L448 224C483.3 224 512 252.7 512 288L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 288C128 252.7 156.7 224 192 224z" />
                        </svg>
                    </span>
                    Login
                </li>
                <li class="subbox_link" id="dashbord_btn_124" data-set="dashbord" onclick="show_this_box(this); close_all_sub_links_ha()">
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
                    <li class="subbox_link" id="sms_btn_124" onclick="show_this_box(this); show_sub_link(this);" data-set="sms">
                        <span class="svg_icon_box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_4">
                                <path d="M576 304C576 436.5 461.4 544 320 544C282.9 544 247.7 536.6 215.9 523.3L97.5 574.1C88.1 578.1 77.3 575.8 70.4 568.3C63.5 560.8 62 549.8 66.8 540.8L115.6 448.6C83.2 408.3 64 358.3 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304z" />
                            </svg>
                        </span>
                        SMS
                    </li>

                    <!-- sms sub link -->
                    <div class="sub_links_of_allawn" id="sms_sub_box" data-set="sms-sub">
                        <ul>
                            <li class="sole78m" id="contect__1" onclick="link_sole_action(this)" data-set="contect-1">SMS Dashbord</li>
                            <li class="sole78m" id="contect__2" onclick="link_sole_action(this)" data-set="contect-2">Create SMS Campaign</li>
                            <li class="sole78m" id="contect__3" onclick="link_sole_action(this)" data-set="contect-3">Tiny Campaign( Smart URL )</li>
                            <li class="sole78m" id="contect__4" onclick="link_sole_action(this)" data-set="contect-4">Manage Sender ID</li>
                            <li class="sole78m" id="contect__5" onclick="link_sole_action(this)" data-set="contect-5">Manage Template</li>
                            <li class="sole78m" id="contect__6" onclick="link_sole_action(this)" data-set="contect-6">My Routes</li>
                            <li class="sole78m" id="contect__7" onclick="link_sole_action(this)" data-set="contect-7">Contact Manager</li>
                            <li class="sole78m" id="contect__8" onclick="link_sole_action(this)" data-set="contect-8">Manage Group</li>
                            <li class="sole78m" id="contect__9" onclick="link_sole_action(this)" data-set="contect-9">Blacklist Numbers</li>
                            <li class="sole78m" id="contect__10" onclick="link_sole_action(this)" data-set="contect-10">SMS Reports</li>
                            <li class="sole78m" id="contect__11" onclick="link_sole_action(this)" data-set="contect-11">SMS API Integration</li>
                        </ul>
                    </div>

                    <li class="subbox_link" id="rcs_btn_124" data-set="rcs" onclick="show_this_box(this); show_sub_link(this);">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_5">
                                <path d="M144 128C144 92.7 172.7 64 208 64L432 64C467.3 64 496 92.7 496 128L496 512C496 547.3 467.3 576 432 576L208 576C172.7 576 144 547.3 144 512L144 128zM256 504C256 517.3 266.7 528 280 528L360 528C373.3 528 384 517.3 384 504C384 490.7 373.3 480 360 480L280 480C266.7 480 256 490.7 256 504zM432 128L208 128L208 432L432 432L432 128z" />
                            </svg></span>
                        RCS
                    </li>

                    <!-- Rcs sub link -->
                    <div class="sub_links_of_allawn" id="rcs_sub_box" data-set="rcs-sub">
                        <ul>
                            <li class="sole78m" id="contect__12" onclick="link_sole_action(this)" data-set="contect-12">RCS Dashbord</li>
                            <li class="sole78m" id="contect__13" onclick="link_sole_action(this)" data-set="contect-13">RCS Agent</li>
                            <li class="sole78m" id="contect__14" onclick="link_sole_action(this)" data-set="contect-14">Templates</li>
                            <li class="sole78m" id="contect__15" onclick="link_sole_action(this)" data-set="contect-15">Create Campaign</li>
                            <li class="sole78m" id="contect__16" onclick="link_sole_action(this)" data-set="contect-16">Manage Group</li>
                            <li class="sole78m" id="contect__17" onclick="link_sole_action(this)" data-set="contect-17">Blacklist Numbers</li>
                            <li class="sole78m" id="contect__18" onclick="link_sole_action(this)" data-set="contect-18">RCS Reports</li>
                            <li class="sole78m" id="contect__19" onclick="link_sole_action(this)" data-set="contect-19">Chatbot Automation</li>
                        </ul>
                    </div>

                    <li class="subbox_link" id="whatsapp_btn_124" data-set="whatsapp" onclick="show_this_box(this); show_sub_link(this);">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_6">
                                <path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z" />
                            </svg></span>
                        WhatsApp
                    </li>

                    <!-- whatsapp sub link -->
                    <div class="sub_links_of_allawn" id="whatsapp_sub_box" data-set="whatsapp-sub">
                        <ul>
                            <li class="sole78m" id="contect__20" onclick="link_sole_action(this)" data-set="contect-20">WhatsApp Onboarding</li>
                            <li class="sole78m" id="contect__21" onclick="link_sole_action(this)" data-set="contect-21">Dashbord</li>
                            <li class="sole78m" id="contect__22" onclick="link_sole_action(this)" data-set="contect-22">Templates</li>
                            <li class="sole78m" id="contect__23" onclick="link_sole_action(this)" data-set="contect-23">Campaign</li>
                            <li class="sole78m" id="contect__24" onclick="link_sole_action(this)" data-set="contect-24">Reports</li>
                            <li class="sole78m" id="contect__25" onclick="link_sole_action(this)" data-set="contect-25">Agent</li>
                            <li class="sole78m" id="contect__26" onclick="link_sole_action(this)" data-set="contect-26">Chatbot Builder</li>
                            <li class="sole78m" id="contect__27" onclick="link_sole_action(this)" data-set="contect-27">Payment</li>
                            <li class="sole78m" id="contect__28" onclick="link_sole_action(this)" data-set="contect-28">Catalogue</li>
                        </ul>
                    </div>




                    <li class="subbox_link" id="voice_btn_124" data-set="voice" onclick="show_this_box(this); show_sub_link(this);">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_7">
                                <path d="M376 32C504.1 32 608 135.9 608 264C608 277.3 597.3 288 584 288C570.7 288 560 277.3 560 264C560 162.4 477.6 80 376 80C362.7 80 352 69.3 352 56C352 42.7 362.7 32 376 32zM384 224C401.7 224 416 238.3 416 256C416 273.7 401.7 288 384 288C366.3 288 352 273.7 352 256C352 238.3 366.3 224 384 224zM352 152C352 138.7 362.7 128 376 128C451.1 128 512 188.9 512 264C512 277.3 501.3 288 488 288C474.7 288 464 277.3 464 264C464 215.4 424.6 176 376 176C362.7 176 352 165.3 352 152zM176.1 65.4C195.8 60 216.4 70.1 224.2 88.9L264.7 186.2C271.6 202.7 266.8 221.8 252.9 233.2L208.8 269.3C241.3 340.9 297.8 399.3 368.1 434.2L406.7 387C418 373.1 437.1 368.4 453.7 375.2L551 415.8C569.8 423.6 579.9 444.2 574.5 463.9L573 469.4C555.4 534.1 492.9 589.3 416.6 573.2C241.6 536.1 103.9 398.4 66.8 223.4C50.7 147.1 105.9 84.6 170.5 66.9L176 65.4z" />
                            </svg></span>
                        Voice
                    </li>

                    <!-- voice sub link -->
                    <div class="sub_links_of_allawn" id="voice_sub_box" data-set="voice-sub">
                        <ul>
                            <li class="sole78m" id="contect__29" onclick="link_sole_action(this)" data-set="contect-29">Voice Dashbord</li>
                            <li class="sole78m" id="contect__30" onclick="link_sole_action(this)" data-set="contect-30">Voice Files</li>
                            <li class="sole78m" id="contect__31" onclick="link_sole_action(this)" data-set="contect-31">Components</li>
                            <li class="sole78m" id="contect__32" onclick="link_sole_action(this)" data-set="contect-32">Voice Campaign Management</li>
                            <li class="sole78m" id="contect__33" onclick="link_sole_action(this)" data-set="contect-33">Agent Monitoring</li>
                            <li class="sole78m" id="contect__34" onclick="link_sole_action(this)" data-set="contect-34">Report</li>
                            <li class="sole78m" id="contect__35" onclick="link_sole_action(this)" data-set="contect-35">Manage Agents</li>
                            <li class="sole78m" id="contect__36" onclick="link_sole_action(this)" data-set="contect-36">Manage Remarks</li>
                        </ul>
                    </div>

                    <li class="subbox_link" id="ivr_btn_124" data-set="ivr" onclick="show_this_box(this); show_sub_link(this);">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_8">
                                <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                            </svg></span>
                        IVR
                    </li>

                    <!-- IVR / Campaign -->
                    <div class="sub_links_of_allawn" id="ivr_sub_box" data-set="ivr-sub">
                        <ul>
                            <li class="sole78m" id="contect__37" onclick="link_sole_action(this)" data-set="contect-37">Dashboard</li>
                            <li class="sole78m" id="contect__38" onclick="link_sole_action(this)" data-set="contect-38">Campaign</li>
                            <li class="sole78m" id="contect__39" onclick="link_sole_action(this)" data-set="contect-39">Voice Files</li>
                            <li class="sole78m" id="contect__40" onclick="link_sole_action(this)" data-set="contect-40">Components</li>
                            <li class="sole78m" id="contect__41" onclick="link_sole_action(this)" data-set="contect-41">Manage Agent</li>
                            <li class="sole78m" id="contect__42" onclick="link_sole_action(this)" data-set="contect-42">Manage Remarks</li>
                            <li class="sole78m" id="contect__43" onclick="link_sole_action(this)" data-set="contect-43">Report</li>
                        </ul>
                    </div>

                    <li class="subbox_link" id="click_to_call_btn_124" data-set="click_to_call" onclick="show_this_box(this); show_sub_link(this);">
                        <span class="svg_icon_box">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_9">
                                <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                            </svg>
                        </span>
                        Click To Call
                    </li>

                    <!-- Click To Call -->
                    <div class="sub_links_of_allawn" id="click_to_call_sub_box" data-set="click_to_call-sub">
                        <ul>
                            <li class="sole78m" id="contect__44" onclick="link_sole_action(this)" data-set="contect-44">Dashboard</li>
                            <li class="sole78m" id="contect__45" onclick="link_sole_action(this)" data-set="contect-45">Manage Agent</li>
                            <li class="sole78m" id="contect__46" onclick="link_sole_action(this)" data-set="contect-46">Campaign</li>
                            <li class="sole78m" id="contect__47" onclick="link_sole_action(this)" data-set="contect-47">Agent Monitoring</li>
                            <li class="sole78m" id="contect__48" onclick="link_sole_action(this)" data-set="contect-48">Manage Remarks</li>
                            <li class="sole78m" id="contect__49" onclick="link_sole_action(this)" data-set="contect-49">Report</li>
                        </ul>
                    </div>

                    <li class="subbox_link" id="text_to_speech_btn_124" data-set="text_to_speech" onclick="show_this_box(this); show_sub_link(this);">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_10">
                                <path d="M112 416L160 416L294.1 535.2C300.5 540.9 308.7 544 317.2 544C336.4 544 352 528.4 352 509.2L352 130.8C352 111.6 336.4 96 317.2 96C308.7 96 300.5 99.1 294.1 104.8L160 224L112 224C85.5 224 64 245.5 64 272L64 368C64 394.5 85.5 416 112 416zM505.1 171C494.8 162.6 479.7 164.2 471.3 174.5C462.9 184.8 464.5 199.9 474.8 208.3C507.3 234.7 528 274.9 528 320C528 365.1 507.3 405.3 474.8 431.8C464.5 440.2 463 455.3 471.3 465.6C479.6 475.9 494.8 477.4 505.1 469.1C548.3 433.9 576 380.2 576 320.1C576 260 548.3 206.3 505.1 171.1zM444.6 245.5C434.3 237.1 419.2 238.7 410.8 249C402.4 259.3 404 274.4 414.3 282.8C425.1 291.6 432 305 432 320C432 335 425.1 348.4 414.3 357.3C404 365.7 402.5 380.8 410.8 391.1C419.1 401.4 434.3 402.9 444.6 394.6C466.1 376.9 480 350.1 480 320C480 289.9 466.1 263.1 444.5 245.5z" />
                            </svg></span>
                        Text To Speech
                    </li>

                    <!-- Text To Speech -->
                    <div class="sub_links_of_allawn" id="text_to_speech_sub_box" data-set="text_to_speech-sub">
                        <ul>
                            <li class="sole78m" id="contect__50" onclick="link_sole_action(this)" data-set="contect-50">Dashboard</li>
                            <li class="sole78m" id="contect__51" onclick="link_sole_action(this)" data-set="contect-51">Voice Files</li>
                            <li class="sole78m" id="contect__52" onclick="link_sole_action(this)" data-set="contect-52">Manage TTS Template</li>
                            <li class="sole78m" id="contect__53" onclick="link_sole_action(this)" data-set="contect-53">Create Campaign</li>
                            <li class="sole78m" id="contect__54" onclick="link_sole_action(this)" data-set="contect-54">Report</li>
                            <li class="sole78m" id="contect__55" onclick="link_sole_action(this)" data-set="contect-55">Manage Remarks</li>
                        </ul>
                    </div>

                    <li class="subbox_link" id="ai_agent_btn_124" data-set="ai_agent" onclick="show_this_box(this); show_sub_link(this);">
                        <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_11">
                                <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z" />
                            </svg></span>
                        Ai Agent
                    </li>


                    <!-- AI Agent -->
                    <div class="sub_links_of_allawn" id="ai_agent_sub_box" data-set="ai_agent-sub">
                        <ul>
                            <li class="sole78m" id="contect__56" onclick="link_sole_action(this)" data-set="contect-56">Dashboard</li>
                            <li class="sole78m" id="contect__57" onclick="link_sole_action(this)" data-set="contect-57">AI Agent Campaign</li>
                            <li class="sole78m" id="contect__58" onclick="link_sole_action(this)" data-set="contect-58">Report</li>
                        </ul>
                    </div>

                </ul>
            </div>

            <div class="line_rola"></div>

            <h6>Utilities</h6>
            <ul class="top_nave_appli">
                <li class="subbox_link" id="journeys_btn_124" data-set="journeys" onclick="window.show_this_box(this); show_sub_link(this);">
                    <span class="svg_icon_box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="sub_set_iocn_svg" data-subset="icon_12">
                            <path d="M576 160C576 210.2 516.9 285.1 491.4 315C487.6 319.4 482 321.1 476.9 320L384 320C366.3 320 352 334.3 352 352C352 369.7 366.3 384 384 384L480 384C533 384 576 427 576 480C576 533 533 576 480 576L203.6 576C212.3 566.1 222.9 553.4 233.6 539.2C239.9 530.8 246.4 521.6 252.6 512L480 512C497.7 512 512 497.7 512 480C512 462.3 497.7 448 480 448L384 448C331 448 288 405 288 352C288 299 331 256 384 256L423.8 256C402.8 224.5 384 188.3 384 160C384 107 427 64 480 64C533 64 576 107 576 160zM181.1 553.1C177.3 557.4 173.9 561.2 171 564.4L169.2 566.4L169 566.2C163 570.8 154.4 570.2 149 564.4C123.8 537 64 466.5 64 416C64 363 107 320 160 320C213 320 256 363 256 416C256 446 234.9 483 212.5 513.9C201.8 528.6 190.8 541.9 181.7 552.4L181.1 553.1zM192 416C192 398.3 177.7 384 160 384C142.3 384 128 398.3 128 416C128 433.7 142.3 448 160 448C177.7 448 192 433.7 192 416zM480 192C497.7 192 512 177.7 512 160C512 142.3 497.7 128 480 128C462.3 128 448 142.3 448 160C448 177.7 462.3 192 480 192z" />
                        </svg></span>
                    Journeys
                </li>

                <!-- Journeys -->
                <div class="sub_links_of_allawn" id="journeys_sub_box" data-set="journeys-sub">
                    <ul>
                        <li class="sole78m" id="contect__59" onclick="link_sole_action(this)" data-set="contect-59">Journey Campaign</li>
                        <li class="sole78m" id="contect__60" onclick="link_sole_action(this)" data-set="contect-60">Journey Reports</li>
                    </ul>
                </div>

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
            <section id="overview_contect_box" class="section_sub_with all_sejmca8974 ">

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
                    <a href="#" class="chrono-portal align-port-left" style="display: none;">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Overview</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a href="#" class="chrono-portal align-port-right" onclick="event.preventDefault(); document.getElementById('login_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Dashboard</span>
                    </a>
                </div>

            </section>

            <!-- section 2 Login -->
            <section id="login_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Login
                    </span>
                </div>

                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>Authentication</h4>
                </div>

                <h2>Login</h2>

                <p>The Login page allows authorized users to securely access Omni Portal and manage communication services, campaigns, reports, and integrations.</p>

                <div class="all_drive_box">
                    <span class="img_box">
                        <img src="assets/appliction_imgs/login/login_section_img.png" alt="">
                    </span>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Login Page Components
                    </span>
                </div>

                <div class="qunike-table-container">
                    <table class="qunike-table">
                        <thead>
                            <tr>
                                <th>COMPONENT</th>
                                <th>DESCRIPTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Username</td>
                                <td>Enter the registered username provided by the administrator.</td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>Enter the associated account password.</td>
                            </tr>
                            <tr>
                                <td>Keep Me Signed In</td>
                                <td>Allows users to remain logged in on the current device across sessions.</td>
                            </tr>
                            <tr>
                                <td>Forgot Password</td>
                                <td>Reset the password if login credentials are forgotten.</td>
                            </tr>
                            <tr>
                                <td>CAPTCHA Verification</td>
                                <td>Enter the displayed verification code before signing in. Mandatory.</td>
                            </tr>
                            <tr>
                                <td>Sign In Button</td>
                                <td>Authenticates the user and redirects to the Dashboard on success.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Steps to Login
                    </span>
                </div>

                <div class="om-guide-shell">

                    <!-- Step 1 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">1</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Open the Omni Portal URL</h3>
                            <p class="om-step-detail">Open your browser and visit the Omni Portal at
                                <a class="om-link-tag" href="#" target="_blank">https://kdcpaas.ai</a>
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">2</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Enter your Username</h3>
                            <p class="om-step-detail">Provide the username assigned to you by the administrator in the Username field.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">3</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Enter your Password</h3>
                            <p class="om-step-detail">Type your associated account password in the Password field.
                                <span class="om-note-tag">Case Sensitive</span>
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">4</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Complete CAPTCHA Verification</h3>
                            <p class="om-step-detail">Enter the verification code exactly as shown on screen in the CAPTCHA field.
                                <span class="om-code-chip">Required</span>
                            </p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">5</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Click Sign In</h3>
                            <p class="om-step-detail">After successful authentication, you will be redirected to the Dashboard.</p>
                        </div>
                    </div>
                </div>


                <div class="hdah651">
                    <div class="om-step-card" style="border-left: 8px solid #e6b103;">
                        <div class="">⚠️</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #954516  ;">Important</h3>
                            <p class="om-step-detail" style="color: #965631;">Username and Password are case-sensitive. CAPTCHA verification is mandatory on every login. Invalid credentials will prevent access.

                            </p>
                        </div>
                    </div>
                </div>



                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('overview_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Overview</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('dashbord_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Dashboard</span>
                    </a>


                </div>

            </section>

            <!-- section 3 Dashbord -->
            <section id="dashbord_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Dashbord
                    </span>
                </div>

                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>Navigation Hub</h4>
                </div>


                <h2>Dashbord</h2>

                <p>The Dashboard is the central control panel of Omni Portal. It provides quick access to communication channels, utilities, plugins, reports, and account management from a single screen.</p>


                <div class="all_drive_box">
                    <span class="img_box">
                        <img src="assets/appliction_imgs/dashboard/dashboard-page1.png" alt="">
                    </span>
                </div>


                <div class="all_drive_box">
                    <span class="img_box">
                        <img src="assets/appliction_imgs/dashboard/dashboard-page2.png" alt="">
                    </span>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Steps to Login
                    </span>
                </div>


                <h5>Channels</h5>
                <p>Access and manage all communication services. Create and run campaigns directly from each channel card.</p>


                <div class="void-horizon" style="margin: 0 auto;">
                    <!-- Grid Layout -->
                    <div class="cyber-grid-array">

                        <!-- Row 1 Items -->
                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-shopify">
                                <svg width="25px" fill="#96bf48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M115.9 448.9C83.3 408.6 64 358.4 64 304C64 171.5 178.6 64 320 64C461.4 64 576 171.5 576 304C576 436.5 461.4 544 320 544C283.5 544 248.8 536.8 217.4 524L101 573.9C97.3 575.5 93.5 576 89.5 576C75.4 576 64 564.6 64 550.5C64 546.2 65.1 542 67.1 538.3L115.9 448.9zM153.2 418.7C165.4 433.8 167.3 454.8 158 471.9L140 505L198.5 479.9C210.3 474.8 223.7 474.7 235.6 479.6C261.3 490.1 289.8 496 319.9 496C437.7 496 527.9 407.2 527.9 304C527.9 200.8 437.8 112 320 112C202.2 112 112 200.8 112 304C112 346.8 127.1 386.4 153.2 418.7z" />
                                </svg>
                            </div>
                            <span class="data-tag">RCS</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-webengage">
                                <svg width="25px" fill="#2d3e50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg>
                            </div>
                            <span class="data-tag">IVR</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-shopify">
                                <svg width="25px" fill="#96bf48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M144 128C144 92.7 172.7 64 208 64L432 64C467.3 64 496 92.7 496 128L496 512C496 547.3 467.3 576 432 576L208 576C172.7 576 144 547.3 144 512L144 128zM208 128L208 432L432 432L432 128L208 128zM320 536C337.7 536 352 521.7 352 504C352 486.3 337.7 472 320 472C302.3 472 288 486.3 288 504C288 521.7 302.3 536 320 536z" />
                                </svg>
                            </div>
                            <span class="data-tag">RCS</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-clevertap">
                                <svg width="25px" fill="#267e03" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z" />
                                </svg>
                            </div>
                            <span class="data-tag">Whatsapp</span>
                        </a>



                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-moengage">
                                <svg width="25px" fill="#e63b26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg>
                            </div>
                            <span class="data-tag">Voice</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zohoflow">
                                <svg width="25px" fill="#d88b00" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M533.6 96.5C523.3 88.1 508.2 89.7 499.8 100C491.4 110.3 493 125.4 503.3 133.8C557.5 177.8 592 244.8 592 320C592 395.2 557.5 462.2 503.3 506.3C493 514.7 491.5 529.8 499.8 540.1C508.1 550.4 523.3 551.9 533.6 543.6C598.5 490.7 640 410.2 640 320C640 229.8 598.5 149.2 533.6 96.5zM473.1 171C462.8 162.6 447.7 164.2 439.3 174.5C430.9 184.8 432.5 199.9 442.8 208.3C475.3 234.7 496 274.9 496 320C496 365.1 475.3 405.3 442.8 431.8C432.5 440.2 431 455.3 439.3 465.6C447.6 475.9 462.8 477.4 473.1 469.1C516.3 433.9 544 380.2 544 320.1C544 260 516.3 206.3 473.1 171.1zM412.6 245.5C402.3 237.1 387.2 238.7 378.8 249C370.4 259.3 372 274.4 382.3 282.8C393.1 291.6 400 305 400 320C400 335 393.1 348.4 382.3 357.3C372 365.7 370.5 380.8 378.8 391.1C387.1 401.4 402.3 402.9 412.6 394.6C434.1 376.9 448 350.1 448 320C448 289.9 434.1 263.1 412.6 245.5zM80 416L128 416L262.1 535.2C268.5 540.9 276.7 544 285.2 544C304.4 544 320 528.4 320 509.2L320 130.8C320 111.6 304.4 96 285.2 96C276.7 96 268.5 99.1 262.1 104.8L128 224L80 224C53.5 224 32 245.5 32 272L32 368C32 394.5 53.5 416 80 416z" />
                                </svg>
                            </div>
                            <span class="data-tag">Text To Speech</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zoho-int">
                                <svg width="25" fill="#6a3ab2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg>
                            </div>
                            <span class="data-tag">Click To Call</span>
                        </a>

                        <!-- Row 2 Items -->
                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-pabbly">
                                <svg width="25" fill="#ef4444" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M112 128C85.5 128 64 149.5 64 176C64 191.1 71.1 205.3 83.2 214.4L291.2 370.4C308.3 383.2 331.7 383.2 348.8 370.4L556.8 214.4C568.9 205.3 576 191.1 576 176C576 149.5 554.5 128 528 128L112 128zM64 260L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 260L377.6 408.8C343.5 434.4 296.5 434.4 262.4 408.8L64 260z" />
                                </svg>
                            </div>
                            <span class="data-tag">Email</span>
                        </a>

                    </div>
                </div>


                <h5>Utilities</h5>
                <p>Supporting tools for campaign management, automation, and administration.</p>


                <div class="void-horizon" style="margin: 0 auto;">
                    <!-- Grid Layout -->
                    <div class="cyber-grid-array">

                        <!-- Row 1 Items -->
                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-shopify">
                                <svg width="25px" fill="#96bf48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M451.5 160C434.9 160 418.8 164.5 404.7 172.7C388.9 156.7 370.5 143.3 350.2 133.2C378.4 109.2 414.3 96 451.5 96C537.9 96 608 166 608 252.5C608 294 591.5 333.8 562.2 363.1L491.1 434.2C461.8 463.5 422 480 380.5 480C294.1 480 224 410 224 323.5C224 322 224 320.5 224.1 319C224.6 301.3 239.3 287.4 257 287.9C274.7 288.4 288.6 303.1 288.1 320.8C288.1 321.7 288.1 322.6 288.1 323.4C288.1 374.5 329.5 415.9 380.6 415.9C405.1 415.9 428.6 406.2 446 388.8L517.1 317.7C534.4 300.4 544.2 276.8 544.2 252.3C544.2 201.2 502.8 159.8 451.7 159.8zM307.2 237.3C305.3 236.5 303.4 235.4 301.7 234.2C289.1 227.7 274.7 224 259.6 224C235.1 224 211.6 233.7 194.2 251.1L123.1 322.2C105.8 339.5 96 363.1 96 387.6C96 438.7 137.4 480.1 188.5 480.1C205 480.1 221.1 475.7 235.2 467.5C251 483.5 269.4 496.9 289.8 507C261.6 530.9 225.8 544.2 188.5 544.2C102.1 544.2 32 474.2 32 387.7C32 346.2 48.5 306.4 77.8 277.1L148.9 206C178.2 176.7 218 160.2 259.5 160.2C346.1 160.2 416 230.8 416 317.1C416 318.4 416 319.7 416 321C415.6 338.7 400.9 352.6 383.2 352.2C365.5 351.8 351.6 337.1 352 319.4C352 318.6 352 317.9 352 317.1C352 283.4 334 253.8 307.2 237.5z" />
                                </svg>
                            </div>
                            <span class="data-tag">Tiny URL</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-webengage">
                                <svg width="25px" fill="#2d3e50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M576 112C576 103.7 571.7 96 564.7 91.6C557.7 87.2 548.8 86.8 541.4 90.5L416.5 152.1L244 93.4C230.3 88.7 215.3 89.6 202.1 95.7L77.8 154.3C69.4 158.2 64 166.7 64 176L64 528C64 536.2 68.2 543.9 75.1 548.3C82 552.7 90.7 553.2 98.2 549.7L225.5 489.8L396.2 546.7C409.9 551.3 424.7 550.4 437.8 544.2L562.2 485.7C570.6 481.7 576 473.3 576 464L576 112zM208 146.1L208 445.1L112 490.3L112 191.3L208 146.1zM256 449.4L256 148.3L384 191.8L384 492.1L256 449.4zM432 198L528 150.6L528 448.8L432 494L432 198z" />
                                </svg>
                            </div>
                            <span class="data-tag">Journeys</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-shopify">
                                <svg width="25px" fill="#96bf48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M360 160L280 160C266.7 160 256 149.3 256 136C256 122.7 266.7 112 280 112L360 112C373.3 112 384 122.7 384 136C384 149.3 373.3 160 360 160zM360 208C397.1 208 427.6 180 431.6 144L448 144C456.8 144 464 151.2 464 160L464 512C464 520.8 456.8 528 448 528L192 528C183.2 528 176 520.8 176 512L176 160C176 151.2 183.2 144 192 144L208.4 144C212.4 180 242.9 208 280 208L360 208zM419.9 96C407 76.7 385 64 360 64L280 64C255 64 233 76.7 220.1 96L192 96C156.7 96 128 124.7 128 160L128 512C128 547.3 156.7 576 192 576L448 576C483.3 576 512 547.3 512 512L512 160C512 124.7 483.3 96 448 96L419.9 96z" />
                                </svg>
                            </div>
                            <span class="data-tag">Template Category</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-clevertap">
                                <svg width="25px" fill="#267e03" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M119.7 263.7L150.6 294.6C156.6 300.6 164.7 304 173.2 304L194.7 304C203.2 304 211.3 307.4 217.3 313.4L246.6 342.7C252.6 348.7 256 356.8 256 365.3L256 402.8C256 411.3 259.4 419.4 265.4 425.4L278.7 438.7C284.7 444.7 288.1 452.8 288.1 461.3L288.1 480C288.1 497.7 302.4 512 320.1 512C337.8 512 352.1 497.7 352.1 480L352.1 477.3C352.1 468.8 355.5 460.7 361.5 454.7L406.8 409.4C412.8 403.4 416.2 395.3 416.2 386.8L416.2 352.1C416.2 334.4 401.9 320.1 384.2 320.1L301.5 320.1C293 320.1 284.9 316.7 278.9 310.7L262.9 294.7C258.7 290.5 256.3 284.7 256.3 278.7C256.3 266.2 266.4 256.1 278.9 256.1L313.6 256.1C326.1 256.1 336.2 246 336.2 233.5C336.2 227.5 333.8 221.7 329.6 217.5L309.9 197.8C306 194 304 189.1 304 184C304 178.9 306 174 309.7 170.3L327 153C332.8 147.2 336.1 139.3 336.1 131.1C336.1 123.9 333.7 117.4 329.7 112.2C326.5 112.1 323.3 112 320.1 112C224.7 112 144.4 176.2 119.8 263.7zM528 320C528 285.4 519.6 252.8 504.6 224.2C498.2 225.1 491.9 228.1 486.7 233.3L473.3 246.7C467.3 252.7 463.9 260.8 463.9 269.3L463.9 304C463.9 321.7 478.2 336 495.9 336L520 336C522.5 336 525 335.7 527.3 335.2C527.7 330.2 527.8 325.1 527.8 320zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320z" />
                                </svg>
                            </div>
                            <span class="data-tag">APIs</span>
                        </a>



                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-moengage">
                                <svg width="25px" fill="#e63b26" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">

                                    <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                    <g id="SVGRepo_iconCarrier">

                                        <path d="M432.4 453.5l-17 46.7h34.4z" fill="#FFFFFF" />

                                        <path d="M725.3 259.7H312.2c-16.5 0-30 13.5-30 30v413.1c0 16.5 13.5 30 30 30h413.1c16.5 0 30-13.5 30-30V289.7c0-16.6-13.5-30-30-30z m-98.8 164.5h25.4V550h-25.4V424.2z m-116.5 0h40.8c15.5 0 25.5 0.6 30.2 1.9 7.2 1.9 13.2 6 18.1 12.3 4.9 6.3 7.3 14.5 7.3 24.5 0 7.7-1.4 14.2-4.2 19.5s-6.4 9.4-10.7 12.4c-4.3 3-8.7 5-13.2 6-6.1 1.2-14.8 1.8-26.4 1.8h-16.6V550H510V424.2z m-90.7 0h26.9L496.5 550h-27.6l-11-28.6h-50.3L397.2 550h-27l49.1-125.8z m229.1 273.3H352.6c-19.4 0-35.1-15.7-35.1-35.1v-295c0-5.5 4.5-10 10-10s10 4.5 10 10v295c0 8.3 6.8 15.1 15.1 15.1h295.8c5.5 0 10 4.5 10 10s-4.4 10-10 10z" fill="#FFFFFF" />

                                        <path d="M569.4 479.2c3.4-1.3 6-3.4 7.9-6.2 1.9-2.8 2.9-6.1 2.9-9.8 0-4.6-1.3-8.4-4-11.3-2.7-3-6.1-4.8-10.2-5.6-3-0.6-9.1-0.9-18.3-0.9h-12.3v35.7h13.9c10 0.1 16.7-0.6 20.1-1.9z" fill="#FFFFFF" />

                                        <path d="M648.4 677.5H352.6c-8.3 0-15.1-6.8-15.1-15.1v-295c0-5.5-4.5-10-10-10s-10 4.5-10 10v295c0 19.4 15.7 35.1 35.1 35.1h295.8c5.5 0 10-4.5 10-10s-4.4-10-10-10z" fill="#e63b26" />

                                        <path d="M865 386.5c11 0 20-9 20-20s-9-20-20-20h-69.7v-56.8c0-38.6-31.4-70-70-70h-27.8v-67.3c0-11-9-20-20-20s-20 9-20 20v67.3H611v-67.3c0-11-9-20-20-20s-20 9-20 20v67.3h-46.5v-67.3c0-11-9-20-20-20s-20 9-20 20v67.3H438v-67.3c0-11-9-20-20-20s-20 9-20 20v67.3h-85.8c-38.6 0-70 31.4-70 70v56.8h-69.7c-11 0-20 9-20 20s9 20 20 20h69.7V433h-69.7c-11 0-20 9-20 20s9 20 20 20h69.7v46.5h-69.7c-11 0-20 9-20 20s9 20 20 20h69.7V606h-69.7c-11 0-20 9-20 20s9 20 20 20h69.7v56.8c0 38.6 31.4 70 70 70H343v72.5c0 11 9 20 20 20s20-9 20-20v-72.5h46.5v72.5c0 11 9 20 20 20s20-9 20-20v-72.5H516v72.5c0 11 9 20 20 20s20-9 20-20v-72.5h46.5v72.5c0 11 9 20 20 20s20-9 20-20v-72.5h82.8c38.6 0 70-31.4 70-70V646H865c11 0 20-9 20-20s-9-20-20-20h-69.7v-46.5H865c11 0 20-9 20-20s-9-20-20-20h-69.7V473H865c11 0 20-9 20-20s-9-20-20-20h-69.7v-46.5H865zM755.3 702.7c0 16.5-13.5 30-30 30H312.2c-16.5 0-30-13.5-30-30v-413c0-16.5 13.5-30 30-30h413.1c16.5 0 30 13.5 30 30v413z" fill="#e63b26" />

                                        <path d="M407.6 521.4h50.3l11 28.6h27.6l-50.4-125.8h-26.9l-49 125.8h27l10.4-28.6z m24.8-67.9l17.3 46.7h-34.3l17-46.7zM535.4 502.6H552c11.5 0 20.3-0.6 26.4-1.8 4.5-1 8.9-3 13.2-6 4.3-3 7.9-7.1 10.7-12.4s4.2-11.8 4.2-19.5c0-10-2.4-18.2-7.3-24.5-4.9-6.3-10.9-10.4-18.1-12.3-4.7-1.3-14.8-1.9-30.2-1.9H510V550h25.4v-47.4z m0-57.1h12.3c9.2 0 15.2 0.3 18.3 0.9 4.1 0.7 7.5 2.6 10.2 5.6 2.7 3 4 6.8 4 11.3 0 3.7-1 7-2.9 9.8-1.9 2.8-4.6 4.9-7.9 6.2-3.4 1.3-10.1 2-20.1 2h-13.9v-35.8zM626.5 424.2h25.4V550h-25.4z" fill="#000000" />

                                    </g>

                                </svg>
                            </div>
                            <span class="data-tag">API Logs Reports</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zohoflow">
                                <svg width="25px" fill="#d88b00" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M480 272C480 317.9 465.1 360.3 440 394.7L566.6 521.4C579.1 533.9 579.1 554.2 566.6 566.7C554.1 579.2 533.8 579.2 521.3 566.7L394.7 440C360.3 465.1 317.9 480 272 480C157.1 480 64 386.9 64 272C64 157.1 157.1 64 272 64C386.9 64 480 157.1 480 272zM272 416C351.5 416 416 351.5 416 272C416 192.5 351.5 128 272 128C192.5 128 128 192.5 128 272C128 351.5 192.5 416 272 416z" />
                                </svg>
                            </div>
                            <span class="data-tag">System Audit</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zoho-int">
                                <svg width="25" fill="#6a3ab2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M128 128C128 92.7 156.7 64 192 64L341.5 64C358.5 64 374.8 70.7 386.8 82.7L493.3 189.3C505.3 201.3 512 217.6 512 234.6L512 512C512 547.3 483.3 576 448 576L192 576C156.7 576 128 547.3 128 512L128 128zM336 122.5L336 216C336 229.3 346.7 240 360 240L453.5 240L336 122.5zM303 505C312.4 514.4 327.6 514.4 336.9 505L400.9 441C410.3 431.6 410.3 416.4 400.9 407.1C391.5 397.8 376.3 397.7 367 407.1L344 430.1L344 344C344 330.7 333.3 320 320 320C306.7 320 296 330.7 296 344L296 430.1L273 407.1C263.6 397.7 248.4 397.7 239.1 407.1C229.8 416.5 229.7 431.7 239.1 441L303.1 505z" />
                                </svg>
                            </div>
                            <span class="data-tag">Download Center</span>
                        </a>

                    </div>
                </div>


                <h5>Plugins</h5>
                <p>Third-party platform integrations available directly from the dashboard.</p>


                <div class="void-horizon" style="margin: 0 auto;">
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


                    </div>
                </div>


                <div class="hdah651">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">💡</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #954516  ;display:none;">Important</h3>
                            <p class="om-step-detail" style="color: #31964f;">The top navigation bar shows the logged-in user profile and provides access to admin functions and campaign approvals. Each channel card has a Campaign button for quick access.

                            </p>
                        </div>
                    </div>
                </div>


                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('login_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Login</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('sms_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">SMS</span>
                    </a>


                </div>




            </section>

            <!-- section 4 SMS -->
            <section id="sms_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channel
                    </span>/
                    <span class="brad_kaem">
                        SMS
                    </span>
                </div>


                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>CHANNEL</h4>
                </div>



                <h2>SMS</h2>

                <p>The SMS module is a comprehensive communication solution that enables businesses to create, schedule, manage, and monitor SMS campaigns for effective customer engagement. It provides an easy-to-use interface for sending promotional, transactional, and informational messages to individual contacts, multiple recipients, or large contact groups. Users can upload contact lists, organize recipients into groups, configure Sender IDs, select message routes, and use approved DLT templates to ensure regulatory compliance. The module also supports Smart URL (Tiny Campaign) creation for trackable links, blacklist management to prevent messages from being sent to restricted numbers, and detailed campaign reports for monitoring delivery status and performance. With its centralized dashboard and powerful campaign management tools, the SMS module helps organizations streamline communication, improve customer reach, and efficiently manage every stage of the SMS campaign lifecycle.</p>



                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg fill="#197553" xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 640 640">
                                    <path d="M352 173.3L352 384C352 401.7 337.7 416 320 416C302.3 416 288 401.7 288 384L288 173.3L246.6 214.7C234.1 227.2 213.8 227.2 201.3 214.7C188.8 202.2 188.8 181.9 201.3 169.4L297.3 73.4C309.8 60.9 330.1 60.9 342.6 73.4L438.6 169.4C451.1 181.9 451.1 202.2 438.6 214.7C426.1 227.2 405.8 227.2 393.3 214.7L352 173.3zM320 464C364.2 464 400 428.2 400 384L480 384C515.3 384 544 412.7 544 448L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 448C96 412.7 124.7 384 160 384L240 384C240 428.2 275.8 464 320 464zM464 488C477.3 488 488 477.3 488 464C488 450.7 477.3 440 464 440C450.7 440 440 450.7 440 464C440 477.3 450.7 488 464 488z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Create Campaign</h5>
                        <p class="c-desc12 " style="margin:0;">Configure Sender ID, route, DLT template and recipient list.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M451.5 160C434.9 160 418.8 164.5 404.7 172.7C388.9 156.7 370.5 143.3 350.2 133.2C378.4 109.2 414.3 96 451.5 96C537.9 96 608 166 608 252.5C608 294 591.5 333.8 562.2 363.1L491.1 434.2C461.8 463.5 422 480 380.5 480C294.1 480 224 410 224 323.5C224 322 224 320.5 224.1 319C224.6 301.3 239.3 287.4 257 287.9C274.7 288.4 288.6 303.1 288.1 320.8C288.1 321.7 288.1 322.6 288.1 323.4C288.1 374.5 329.5 415.9 380.6 415.9C405.1 415.9 428.6 406.2 446 388.8L517.1 317.7C534.4 300.4 544.2 276.8 544.2 252.3C544.2 201.2 502.8 159.8 451.7 159.8zM307.2 237.3C305.3 236.5 303.4 235.4 301.7 234.2C289.1 227.7 274.7 224 259.6 224C235.1 224 211.6 233.7 194.2 251.1L123.1 322.2C105.8 339.5 96 363.1 96 387.6C96 438.7 137.4 480.1 188.5 480.1C205 480.1 221.1 475.7 235.2 467.5C251 483.5 269.4 496.9 289.8 507C261.6 530.9 225.8 544.2 188.5 544.2C102.1 544.2 32 474.2 32 387.7C32 346.2 48.5 306.4 77.8 277.1L148.9 206C178.2 176.7 218 160.2 259.5 160.2C346.1 160.2 416 230.8 416 317.1C416 318.4 416 319.7 416 321C415.6 338.7 400.9 352.6 383.2 352.2C365.5 351.8 351.6 337.1 352 319.4C352 318.6 352 317.9 352 317.1C352 283.4 334 253.8 307.2 237.5z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Tiny Campaign</h5>
                        <p class="c-desc12 " style="margin:0;">Shorten long URLs into tracked Smart URLs for cleaner messages.</p>
                    </div>

                    <!-- card 3 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M80 480L80 224L560 224L560 480C560 488.8 552.8 496 544 496L352 496C352 451.8 316.2 416 272 416L208 416C163.8 416 128 451.8 128 496L96 496C87.2 496 80 488.8 80 480zM96 96C60.7 96 32 124.7 32 160L32 480C32 515.3 60.7 544 96 544L544 544C579.3 544 608 515.3 608 480L608 160C608 124.7 579.3 96 544 96L96 96zM240 376C270.9 376 296 350.9 296 320C296 289.1 270.9 264 240 264C209.1 264 184 289.1 184 320C184 350.9 209.1 376 240 376zM408 272C394.7 272 384 282.7 384 296C384 309.3 394.7 320 408 320L488 320C501.3 320 512 309.3 512 296C512 282.7 501.3 272 488 272L408 272zM408 368C394.7 368 384 378.7 384 392C384 405.3 394.7 416 408 416L488 416C501.3 416 512 405.3 512 392C512 378.7 501.3 368 488 368L408 368z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Sender ID</h5>
                        <p class="c-desc12 " style="margin:0;">Create and manage approved Sender IDs for campaigns.</p>
                    </div>

                    <!-- card 4 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M535.6 85.7C513.7 63.8 478.3 63.8 456.4 85.7L432 110.1L529.9 208L554.3 183.6C576.2 161.7 576.2 126.3 554.3 104.4L535.6 85.7zM236.4 305.7C230.3 311.8 225.6 319.3 222.9 327.6L193.3 416.4C190.4 425 192.7 434.5 199.1 441C205.5 447.5 215 449.7 223.7 446.8L312.5 417.2C320.7 414.5 328.2 409.8 334.4 403.7L496 241.9L398.1 144L236.4 305.7zM160 128C107 128 64 171 64 224L64 480C64 533 107 576 160 576L416 576C469 576 512 533 512 480L512 384C512 366.3 497.7 352 480 352C462.3 352 448 366.3 448 384L448 480C448 497.7 433.7 512 416 512L160 512C142.3 512 128 497.7 128 480L128 224C128 206.3 142.3 192 160 192L256 192C273.7 192 288 177.7 288 160C288 142.3 273.7 128 256 128L160 128z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Templates</h5>
                        <p class="c-desc12 " style="margin:0;">Manage reusable, DLT-compliant SMS message templates.</p>
                    </div>

                    <!-- card 5 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>

                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M96 192C96 130.1 146.1 80 208 80C269.9 80 320 130.1 320 192C320 253.9 269.9 304 208 304C146.1 304 96 253.9 96 192zM32 528C32 430.8 110.8 352 208 352C305.2 352 384 430.8 384 528L384 534C384 557.2 365.2 576 342 576L74 576C50.8 576 32 557.2 32 534L32 528zM464 128C517 128 560 171 560 224C560 277 517 320 464 320C411 320 368 277 368 224C368 171 411 128 464 128zM464 368C543.5 368 608 432.5 608 512L608 534.4C608 557.4 589.4 576 566.4 576L421.6 576C428.2 563.5 432 549.2 432 534L432 528C432 476.5 414.6 429.1 385.5 391.3C408.1 376.6 435.1 368 464 368z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Contact Manager</h5>
                        <p class="c-desc12 " style="margin:0;">Create groups and manage blacklisted numbers.</p>
                    </div>

                    <!-- card 6 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Reports</h5>
                        <p class="c-desc12 " style="margin:0;">Delivery stats, campaign activity, archive reports and more.</p>
                    </div>


                    <!-- card 7 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M287.9 96L211.7 96C182.3 96 156.6 116.1 149.6 144.6L65.4 484.5C57.9 514.7 80.8 544 112 544L287.9 544L287.9 480C287.9 462.3 302.2 448 319.9 448C337.6 448 351.9 462.3 351.9 480L351.9 544L528 544C559.2 544 582.1 514.7 574.6 484.5L490.5 144.6C483.4 116.1 457.8 96 428.3 96L351.9 96L351.9 160C351.9 177.7 337.6 192 319.9 192C302.2 192 287.9 177.7 287.9 160L287.9 96zM351.9 288L351.9 352C351.9 369.7 337.6 384 319.9 384C302.2 384 287.9 369.7 287.9 352L287.9 288C287.9 270.3 302.2 256 319.9 256C337.6 256 351.9 270.3 351.9 288z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">My Routes</h5>
                        <p class="c-desc12 " style="margin:0;">View and manage available SMS routes for message delivery.</p>
                    </div>

                    <!-- card 8 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M129.5 464L179.5 304L558.9 304L508.9 464L129.5 464zM320.2 512L509 512C530 512 548.6 498.4 554.8 478.3L604.8 318.3C614.5 287.4 591.4 256 559 256L179.6 256C158.6 256 140 269.6 133.8 289.7L112.2 358.4L112.2 160C112.2 151.2 119.4 144 128.2 144L266.9 144C270.4 144 273.7 145.1 276.5 147.2L314.9 176C328.7 186.4 345.6 192 362.9 192L480.2 192C489 192 496.2 199.2 496.2 208L544.2 208C544.2 172.7 515.5 144 480.2 144L362.9 144C356 144 349.2 141.8 343.7 137.6L305.3 108.8C294.2 100.5 280.8 96 266.9 96L128.2 96C92.9 96 64.2 124.7 64.2 160L64.2 448C64.2 483.3 92.9 512 128.2 512L320.2 512z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Manage Group</h5>
                        <p class="c-desc12 " style="margin:0;">Organize, edit, and maintain contact groups.</p>
                    </div>

                    <!-- card 9 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M73 39.1C63.6 29.7 48.4 29.7 39.1 39.1C29.8 48.5 29.7 63.7 39 73.1L567 601.1C576.4 610.5 591.6 610.5 600.9 601.1C610.2 591.7 610.3 576.5 600.9 567.2L343.5 309.7C398.5 298.8 440 250.2 440 192C440 125.7 386.3 72 320 72C261.8 72 213.2 113.5 202.3 168.5L73 39.1zM267.6 369.4C179.9 380.6 112 455.5 112 546.3C112 562.7 125.3 576 141.7 576L474.2 576L267.6 369.4z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Blacklist Numbers</h5>
                        <p class="c-desc12 " style="margin:0;">Prevent messages from being sent to blocked numbers.</p>
                    </div>

                    <!-- card 10 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224 32C241.7 32 256 46.3 256 64L256 160L384 160L384 64C384 46.3 398.3 32 416 32C433.7 32 448 46.3 448 64L448 160L512 160C529.7 160 544 174.3 544 192C544 209.7 529.7 224 512 224L512 288C512 383.1 442.8 462.1 352 477.3L352 544C352 561.7 337.7 576 320 576C302.3 576 288 561.7 288 544L288 477.3C197.2 462.1 128 383.1 128 288L128 224C110.3 224 96 209.7 96 192C96 174.3 110.3 160 128 160L192 160L192 64C192 46.3 206.3 32 224 32z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">SMS API Integration</h5>
                        <p class="c-desc12 " style="margin:0;">Integrate SMS services using REST APIs and API credentials.</p>
                    </div>

                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('dashbord_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Dashbord</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('contect__1').click(); document.getElementById('sms_btn_124').classList.add('active'); ">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">SMS Dashbord</span>
                    </a>

                </div>

            </section>

            <!-- section 5 RCS -->
            <section id="rcs_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channel
                    </span>/
                    <span class="brad_kaem">
                        RCS
                    </span>
                </div>


                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>CHANNEL</h4>
                </div>

                <h2>RCS</h2>

                <p>RCS (Rich Communication Services) is an advanced messaging protocol that enables businesses to send rich and interactive messages through supported smartphone messaging applications. Unlike traditional SMS, RCS supports images, videos, PDF files, buttons, carousels and dynamic variables for a more engaging customer experience.</p>
                <br>

                <p>The RCS ecosystem is supported by Google and mobile network operators, allowing businesses to communicate with customers through verified business messaging channels. Through RCS Business Messaging, organizations can deliver promotional campaigns, notifications, customer support interactions, and other business communications using rich media and interactive elements.</p>
                <br>

                <p>The platform operates within the RCS Business Messaging ecosystem and supports communication through telecom operators such as Jio and Vodafone Idea (Vi). Operator-specific platforms, including Jio JBM and Jio CX, may be utilized for agent management, message delivery, campaign execution, and customer engagement workflows.</p>
                <br>

                <div class="hdah651">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">💡</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #954516  ;display:none;">Important</h3>
                            <p class="om-step-detail" style="color: #31964f;">RCS Business Messaging allows organizations to deliver promotional campaigns, notifications, customer support interactions and rich media communication through verified business messaging channels.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Key Features
                    </span>
                </div>

                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">RCS Agent</h5>
                        <p class="c-desc12 " style="margin:0;">Create and manage verified business agents that represent your brand.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M176 544C96.5 544 32 479.5 32 400C32 336.6 73 282.8 129.9 263.5C128.6 255.8 128 248 128 240C128 160.5 192.5 96 272 96C327.4 96 375.5 127.3 399.6 173.1C413.8 164.8 430.4 160 448 160C501 160 544 203 544 256C544 271.7 540.2 286.6 533.5 299.7C577.5 320 608 364.4 608 416C608 486.7 550.7 544 480 544L176 544zM337 255C327.6 245.6 312.4 245.6 303.1 255L231.1 327C221.7 336.4 221.7 351.6 231.1 360.9C240.5 370.2 255.7 370.3 265 360.9L296 329.9L296 432C296 445.3 306.7 456 320 456C333.3 456 344 445.3 344 432L344 329.9L375 360.9C384.4 370.3 399.6 370.3 408.9 360.9C418.2 351.5 418.3 336.3 408.9 327L336.9 255z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Templates</h5>
                        <p class="c-desc12 " style="margin:0;">Manage reusable, DLT-compliant SMS message templates.</p>
                    </div>


                    <!-- card 3 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M80 480L80 224L560 224L560 480C560 488.8 552.8 496 544 496L352 496C352 451.8 316.2 416 272 416L208 416C163.8 416 128 451.8 128 496L96 496C87.2 496 80 488.8 80 480zM96 96C60.7 96 32 124.7 32 160L32 480C32 515.3 60.7 544 96 544L544 544C579.3 544 608 515.3 608 480L608 160C608 124.7 579.3 96 544 96L96 96zM240 376C270.9 376 296 350.9 296 320C296 289.1 270.9 264 240 264C209.1 264 184 289.1 184 320C184 350.9 209.1 376 240 376zM408 272C394.7 272 384 282.7 384 296C384 309.3 394.7 320 408 320L488 320C501.3 320 512 309.3 512 296C512 282.7 501.3 272 488 272L408 272zM408 368C394.7 368 384 378.7 384 392C384 405.3 394.7 416 408 416L488 416C501.3 416 512 405.3 512 392C512 378.7 501.3 368 488 368L408 368z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Create Campaign</h5>
                        <p class="c-desc12 " style="margin:0;">Launch One-to-Many and Many-to-Many RCS campaigns.</p>
                    </div>

                    <!-- card 4 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M73 39.1C63.6 29.7 48.4 29.7 39.1 39.1C29.8 48.5 29.7 63.7 39 73.1L567 601.1C576.4 610.5 591.6 610.5 600.9 601.1C610.2 591.7 610.3 576.5 600.9 567.2L343.5 309.7C398.5 298.8 440 250.2 440 192C440 125.7 386.3 72 320 72C261.8 72 213.2 113.5 202.3 168.5L73 39.1zM267.6 369.4C179.9 380.6 112 455.5 112 546.3C112 562.7 125.3 576 141.7 576L474.2 576L267.6 369.4z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Blacklist Numbers</h5>
                        <p class="c-desc12 " style="margin:0;">Prevent messages from being sent to blocked numbers.</p>
                    </div>


                    <!-- card 5 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">RCS Dashboard</h5>
                        <p class="c-desc12 " style="margin:0;">Monitor campaign activity and delivery performance.</p>
                    </div>


                    <!-- card 6 -->

                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M96 192C96 130.1 146.1 80 208 80C269.9 80 320 130.1 320 192C320 253.9 269.9 304 208 304C146.1 304 96 253.9 96 192zM32 528C32 430.8 110.8 352 208 352C305.2 352 384 430.8 384 528L384 534C384 557.2 365.2 576 342 576L74 576C50.8 576 32 557.2 32 534L32 528zM464 128C517 128 560 171 560 224C560 277 517 320 464 320C411 320 368 277 368 224C368 171 411 128 464 128zM464 368C543.5 368 608 432.5 608 512L608 534.4C608 557.4 589.4 576 566.4 576L421.6 576C428.2 563.5 432 549.2 432 534L432 528C432 476.5 414.6 429.1 385.5 391.3C408.1 376.6 435.1 368 464 368z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Manage Group</h5>
                        <p class="c-desc12 " style="margin:0;">Create, organize and manage recipient groups for RCS campaigns.</p>
                    </div>



                    <!-- card 7 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M96 96C113.7 96 128 110.3 128 128L128 464C128 472.8 135.2 480 144 480L544 480C561.7 480 576 494.3 576 512C576 529.7 561.7 544 544 544L144 544C99.8 544 64 508.2 64 464L64 128C64 110.3 78.3 96 96 96zM208 288C225.7 288 240 302.3 240 320L240 384C240 401.7 225.7 416 208 416C190.3 416 176 401.7 176 384L176 320C176 302.3 190.3 288 208 288zM352 224L352 384C352 401.7 337.7 416 320 416C302.3 416 288 401.7 288 384L288 224C288 206.3 302.3 192 320 192C337.7 192 352 206.3 352 224zM432 256C449.7 256 464 270.3 464 288L464 384C464 401.7 449.7 416 432 416C414.3 416 400 401.7 400 384L400 288C400 270.3 414.3 256 432 256zM576 160L576 384C576 401.7 561.7 416 544 416C526.3 416 512 401.7 512 384L512 160C512 142.3 526.3 128 544 128C561.7 128 576 142.3 576 160z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">RCS Reports</h5>
                        <p class="c-desc12 " style="margin:0;">View campaign reports, delivery statistics, API CTA reports and day-wise analytics.</p>
                    </div>

                    <!-- card 8 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M267.7 576.9C267.7 576.9 267.7 576.9 267.7 576.9L229.9 603.6C222.6 608.8 213 609.4 205 605.3C197 601.2 192 593 192 584L192 512L160 512C107 512 64 469 64 416L64 192C64 139 107 96 160 96L480 96C533 96 576 139 576 192L576 416C576 469 533 512 480 512L359.6 512L267.7 576.9zM332 472.8C340.1 467.1 349.8 464 359.7 464L480 464C506.5 464 528 442.5 528 416L528 192C528 165.5 506.5 144 480 144L160 144C133.5 144 112 165.5 112 192L112 416C112 442.5 133.5 464 160 464L216 464C226.4 464 235.3 470.6 238.6 479.9C239.5 482.4 240 485.1 240 488L240 537.7C272.7 514.6 303.3 493 331.9 472.8z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Chatbot Automation</h5>
                        <p class="c-desc12 " style="margin:0;">Design automated RCS chatbot journeys to engage customers and handle conversations.</p>
                    </div>

                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        RCS Workflow
                    </span>
                </div>


                <div class="om-guide-shell">

                    <!-- Step 1 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">1</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Create RCS Agent</h3>
                            <p class="om-step-detail">Create a verified business agent that represents your organization.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">2</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Create Template</h3>
                            <p class="om-step-detail">Create Rich Card, Carousel or Text Message templates.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">3</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Get Template Approval</h3>
                            <p class="om-step-detail">Submit templates for approval before campaign usage.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">4</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Create Campaign</h3>
                            <p class="om-step-detail">Select Agent, Template and Recipients to send RCS messages.</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <!-- <div class="om-step-card">
                        <div class="om-circle-badge">5</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Click Sign In</h3>
                            <p class="om-step-detail">After successful authentication, you will be redirected to the Dashboard.</p>
                        </div>
                    </div> -->
                </div>

                <div class="hdah651">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">✅</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #954516  ;display:none;">Important</h3>
                            <p class="om-step-detail" style="color: #31964f;">Before creating an RCS Campaign, an RCS Agent and an approved Template must be created.</p>
                        </div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('sms_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">SMS</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('whatsapp_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">WhatsApp</span>
                    </a>

                </div>

            </section>

            <!-- section 6 Whatsapp -->
            <section id="whatsapp_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channel
                    </span>/
                    <span class="brad_kaem">
                        WhapsApp
                    </span>
                </div>


                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>CHANNEL</h4>
                </div>

                <h2>WhapsApp</h2>

                <p>The WhatsApp module enables businesses to communicate with customers using the WhatsApp Business API through a centralized platform. It provides everything required to configure and manage your WhatsApp Business Account (WABA), create and approve message templates, send campaigns, automate customer interactions, manage live chat agents, and monitor messaging performance.</p>
                <br>

                <p>Whether you're sending promotional campaigns, transactional notifications, authentication messages, or providing real-time customer support, the WhatsApp module offers the tools needed to streamline communication, improve customer engagement, and scale business conversations securely through Meta's WhatsApp Business Platform.</p>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        WhatsApp Features
                    </span>
                </div>

                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M192 384L88.5 384C63.6 384 48.3 356.9 61.1 335.5L114 247.3C122.7 232.8 138.3 224 155.2 224L250.2 224C326.3 95.1 439.8 88.6 515.7 99.7C528.5 101.6 538.5 111.6 540.3 124.3C551.4 200.2 544.9 313.7 416 389.8L416 484.8C416 501.7 407.2 517.3 392.7 526L304.5 578.9C283.2 591.7 256 576.3 256 551.5L256 448C256 412.7 227.3 384 192 384L191.9 384zM464 224C464 197.5 442.5 176 416 176C389.5 176 368 197.5 368 224C368 250.5 389.5 272 416 272C442.5 272 464 250.5 464 224z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">WhatsApp Onboarding</h5>
                        <p class="c-desc12 " style="margin:0;">Connect and verify your WhatsApp Business Account (WABA) with Meta.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M360 160L280 160C266.7 160 256 149.3 256 136C256 122.7 266.7 112 280 112L360 112C373.3 112 384 122.7 384 136C384 149.3 373.3 160 360 160zM360 208C397.1 208 427.6 180 431.6 144L448 144C456.8 144 464 151.2 464 160L464 512C464 520.8 456.8 528 448 528L192 528C183.2 528 176 520.8 176 512L176 160C176 151.2 183.2 144 192 144L208.4 144C212.4 180 242.9 208 280 208L360 208zM419.9 96C407 76.7 385 64 360 64L280 64C255 64 233 76.7 220.1 96L192 96C156.7 96 128 124.7 128 160L128 512C128 547.3 156.7 576 192 576L448 576C483.3 576 512 547.3 512 512L512 160C512 124.7 483.3 96 448 96L419.9 96z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Templates</h5>
                        <p class="c-desc12 " style="margin:0;">Create, manage and use approved WhatsApp message templates.</p>
                    </div>


                    <!-- card 3 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M352 173.3L352 384C352 401.7 337.7 416 320 416C302.3 416 288 401.7 288 384L288 173.3L246.6 214.7C234.1 227.2 213.8 227.2 201.3 214.7C188.8 202.2 188.8 181.9 201.3 169.4L297.3 73.4C309.8 60.9 330.1 60.9 342.6 73.4L438.6 169.4C451.1 181.9 451.1 202.2 438.6 214.7C426.1 227.2 405.8 227.2 393.3 214.7L352 173.3zM320 464C364.2 464 400 428.2 400 384L480 384C515.3 384 544 412.7 544 448L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 448C96 412.7 124.7 384 160 384L240 384C240 428.2 275.8 464 320 464zM464 488C477.3 488 488 477.3 488 464C488 450.7 477.3 440 464 440C450.7 440 440 450.7 440 464C440 477.3 450.7 488 464 488z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Campaigns</h5>
                        <p class="c-desc12 " style="margin:0;">Send promotional, utility and authentication campaigns to customers.</p>
                    </div>

                    <!-- card 4 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M32 400C32 479.5 96.5 544 176 544L480 544C550.7 544 608 486.7 608 416C608 364.4 577.5 319.9 533.5 299.7C540.2 286.6 544 271.7 544 256C544 203 501 160 448 160C430.3 160 413.8 164.8 399.6 173.1C375.5 127.3 327.4 96 272 96C192.5 96 128 160.5 128 240C128 248 128.7 255.9 129.9 263.5C73 282.7 32 336.6 32 400z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Live Agent</h5>
                        <p class="c-desc12 " style="margin:0;">Handle customer conversations through a centralized live chat interface.</p>
                    </div>


                    <!-- card 5 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Chatbot Builder</h5>
                        <p class="c-desc12 " style="margin:0;">Automate customer interactions using chatbot flows, menus and quick replies.</p>
                    </div>


                    <!-- card 6 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 144C256 117.5 277.5 96 304 96L336 96C362.5 96 384 117.5 384 144L384 496C384 522.5 362.5 544 336 544L304 544C277.5 544 256 522.5 256 496L256 144zM64 336C64 309.5 85.5 288 112 288L144 288C170.5 288 192 309.5 192 336L192 496C192 522.5 170.5 544 144 544L112 544C85.5 544 64 522.5 64 496L64 336zM496 160L528 160C554.5 160 576 181.5 576 208L576 496C576 522.5 554.5 544 528 544L496 544C469.5 544 448 522.5 448 496L448 208C448 181.5 469.5 160 496 160z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Reports & Analytics</h5>
                        <p class="c-desc12 " style="margin:0;">Track message delivery, read status, campaign performance and customer engagement.</p>
                    </div>

                    <!-- card 7 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M512 176C520.8 176 528 183.2 528 192L528 224L112 224L112 192C112 183.2 119.2 176 128 176L512 176zM528 288L528 448C528 456.8 520.8 464 512 464L128 464C119.2 464 112 456.8 112 448L112 288L528 288zM128 128C92.7 128 64 156.7 64 192L64 448C64 483.3 92.7 512 128 512L512 512C547.3 512 576 483.3 576 448L576 192C576 156.7 547.3 128 512 128L128 128zM144 408C144 421.3 154.7 432 168 432L216 432C229.3 432 240 421.3 240 408C240 394.7 229.3 384 216 384L168 384C154.7 384 144 394.7 144 408zM288 408C288 421.3 298.7 432 312 432L376 432C389.3 432 400 421.3 400 408C400 394.7 389.3 384 376 384L312 384C298.7 384 288 394.7 288 408z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Payments</h5>
                        <p class="c-desc12 " style="margin:0;">Collect customer payments directly within WhatsApp conversations.</p>
                    </div>

                    <!-- card 8 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 144C256 108.7 284.7 80 320 80C355.3 80 384 108.7 384 144L384 192L256 192L256 144zM208 192L144 192C117.5 192 96 213.5 96 240L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 240C544 213.5 522.5 192 496 192L432 192L432 144C432 82.1 381.9 32 320 32C258.1 32 208 82.1 208 144L208 192zM232 240C245.3 240 256 250.7 256 264C256 277.3 245.3 288 232 288C218.7 288 208 277.3 208 264C208 250.7 218.7 240 232 240zM384 264C384 250.7 394.7 240 408 240C421.3 240 432 250.7 432 264C432 277.3 421.3 288 408 288C394.7 288 384 277.3 384 264z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Catalogue</h5>
                        <p class="c-desc12 " style="margin:0;">Showcase products and services through WhatsApp Business Catalogue.</p>
                    </div>

                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Module Capabilities
                    </span>
                </div>


                <div class="void-horizon" style="margin: 0 auto;">
                    <!-- Grid Layout -->
                    <div class="cyber-grid-array">

                        <!-- Row 1 Items -->
                        <a class="nano-brick-unit">
                            <span class="data-tag">WhatsApp Business API</span>
                        </a>

                        <a class="nano-brick-unit">
                            <span class="data-tag">WABA Management</span>
                        </a>

                        <a class="nano-brick-unit">
                            <span class="data-tag">Message Templates</span>
                        </a>

                        <a class="nano-brick-unit">
                            <span class="data-tag">Campaigns</span>
                        </a>

                        <a class="nano-brick-unit">
                            <span class="data-tag">Live Chat</span>
                        </a>

                        <a class="nano-brick-unit">
                            <span class="data-tag">Chatbot</span>
                        </a>

                        <!-- Row 2 Items -->
                        <a class="nano-brick-unit">
                            <span class="data-tag">Reports</span>
                        </a>

                        <a class="nano-brick-unit">
                            <span class="data-tag">Payments</span>
                        </a>

                        <a class="nano-brick-unit">
                            <span class="data-tag">Catalogue</span>
                        </a>


                    </div>
                </div>

                <div class="hdah651">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">💡</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #169527  ;">Tip</h3>
                            <p class="om-step-detail" style="color: #31964f;">Start by completing the WhatsApp Onboarding process. Once your WhatsApp Business Account (WABA) is connected and verified, you can create templates, send campaigns, automate conversations, and manage customer chats from a single platform.</p>
                        </div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('rcs_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">RCS</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('voice_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Voice</span>
                    </a>

                </div>

            </section>

            <!-- section 7 Voice -->
            <section id="voice_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channel
                    </span>/
                    <span class="brad_kaem">
                        Voice
                    </span>
                </div>


                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>CHANNEL</h4>
                </div>

                <h2>Voice</h2>

                <p>The Voice module enables businesses to create and manage outbound voice campaigns, upload voice files,monitor live agents, and analyze campaign performance through dashboards and reports.</p>

                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 144C256 117.5 277.5 96 304 96L336 96C362.5 96 384 117.5 384 144L384 496C384 522.5 362.5 544 336 544L304 544C277.5 544 256 522.5 256 496L256 144zM64 336C64 309.5 85.5 288 112 288L144 288C170.5 288 192 309.5 192 336L192 496C192 522.5 170.5 544 144 544L112 544C85.5 544 64 522.5 64 496L64 336zM496 160L528 160C554.5 160 576 181.5 576 208L576 496C576 522.5 554.5 544 528 544L496 544C469.5 544 448 522.5 448 496L448 208C448 181.5 469.5 160 496 160z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Dashboard</h5>
                        <p class="c-desc12 " style="margin:0;">View real-time Voice campaign statistics and performance.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M532 71C539.6 77.1 544 86.3 544 96L544 400C544 444.2 501 480 448 480C395 480 352 444.2 352 400C352 355.8 395 320 448 320C459.2 320 470 321.6 480 324.6L480 207.9L256 257.7L256 464C256 508.2 213 544 160 544C107 544 64 508.2 64 464C64 419.8 107 384 160 384C171.2 384 182 385.6 192 388.6L192 160C192 145 202.4 132 217.1 128.8L505.1 64.8C514.6 62.7 524.5 65 532.1 71.1z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Voice Files</h5>
                        <p class="c-desc12 " style="margin:0;">Upload and manage audio files used in Voice campaigns.</p>
                    </div>


                    <!-- card 3 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M288 64C323.3 64 352 85.5 352 112C352 122.4 347.6 132 340 139.9C333.4 146.8 328 155.2 328 164.8C328 179.8 340.2 192 355.2 192L400 192C426.5 192 448 213.5 448 240L448 284.8C448 299.8 460.2 312 475.2 312C484.7 312 493.2 306.6 500.1 300C508 292.5 517.6 288 528 288C554.5 288 576 316.7 576 352C576 387.3 554.5 416 528 416C517.6 416 507.9 411.6 500.1 404C493.2 397.4 484.8 392 475.2 392C460.2 392 448 404.2 448 419.2L448 528C448 554.5 426.5 576 400 576L343.2 576C330.4 576 320 565.6 320 552.8C320 543.6 325.8 535.5 333.2 530C344.8 521.3 352 509.3 352 496C352 469.5 323.3 448 288 448C252.7 448 224 469.5 224 496C224 509.3 231.2 521.3 242.8 530C250.2 535.5 256 543.5 256 552.8C256 565.6 245.6 576 232.8 576L112 576C85.5 576 64 554.5 64 528L64 407.2C64 394.4 74.4 384 87.2 384C96.4 384 104.5 389.8 110 397.2C118.7 408.8 130.7 416 144 416C170.5 416 192 387.3 192 352C192 316.7 170.5 288 144 288C130.7 288 118.7 295.2 110 306.8C104.5 314.2 96.5 320 87.2 320C74.4 320 64 309.6 64 296.8L64 240C64 213.5 85.5 192 112 192L220.8 192C235.8 192 248 179.8 248 164.8C248 155.3 242.6 146.8 236 139.9C228.5 132 224 122.4 224 112C224 85.5 252.7 64 288 64z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Components</h5>
                        <p class="c-desc12 " style="margin:0;">Configure Voice Campaign Flow, Agents, and Remarks.</p>
                    </div>

                    <!-- card 4 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M160 288C160 199.6 231.6 128 320 128C408.4 128 480 199.6 480 288L480 325.5C470 322 459.2 320 448 320L432 320C405.5 320 384 341.5 384 368L384 496C384 522.5 405.5 544 432 544L448 544C501 544 544 501 544 448L544 288C544 164.3 443.7 64 320 64C196.3 64 96 164.3 96 288L96 448C96 501 139 544 192 544L208 544C234.5 544 256 522.5 256 496L256 368C256 341.5 234.5 320 208 320L192 320C180.8 320 170 321.9 160 325.5L160 288z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Agent Monitoring</h5>
                        <p class="c-desc12 " style="margin:0;">Monitor live agent calls and supervise ongoing conversations.</p>
                    </div>


                    <!-- card 5 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M129.9 292.5C143.2 199.5 223.3 128 320 128C373 128 421 149.5 455.8 184.2C456 184.4 456.2 184.6 456.4 184.8L464 192L416.1 192C398.4 192 384.1 206.3 384.1 224C384.1 241.7 398.4 256 416.1 256L544.1 256C561.8 256 576.1 241.7 576.1 224L576.1 96C576.1 78.3 561.8 64 544.1 64C526.4 64 512.1 78.3 512.1 96L512.1 149.4L500.8 138.7C454.5 92.6 390.5 64 320 64C191 64 84.3 159.4 66.6 283.5C64.1 301 76.2 317.2 93.7 319.7C111.2 322.2 127.4 310 129.9 292.6zM573.4 356.5C575.9 339 563.7 322.8 546.3 320.3C528.9 317.8 512.6 330 510.1 347.4C496.8 440.4 416.7 511.9 320 511.9C267 511.9 219 490.4 184.2 455.7C184 455.5 183.8 455.3 183.6 455.1L176 447.9L223.9 447.9C241.6 447.9 255.9 433.6 255.9 415.9C255.9 398.2 241.6 383.9 223.9 383.9L96 384C87.5 384 79.3 387.4 73.3 393.5C67.3 399.6 63.9 407.7 64 416.3L65 543.3C65.1 561 79.6 575.2 97.3 575C115 574.8 129.2 560.4 129 542.7L128.6 491.2L139.3 501.3C185.6 547.4 249.5 576 320 576C449 576 555.7 480.6 573.4 356.5z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Resend Voice</h5>
                        <p class="c-desc12 " style="margin:0;">Retrieve and resend previously executed Voice campaigns.</p>
                    </div>


                    <!-- card 6 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Voice Campaign Flow</h5>
                        <p class="c-desc12 " style="margin:0;">Design and configure the complete workflow for outbound voice campaigns.</p>
                    </div>

                    <!-- card 7 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Reports</h5>
                        <p class="c-desc12 " style="margin:0;">View campaign reports, call statistics, and detailed performance analytics.</p>
                    </div>

                    <!-- card 8 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M240 192C240 147.8 275.8 112 320 112C364.2 112 400 147.8 400 192C400 236.2 364.2 272 320 272C275.8 272 240 236.2 240 192zM448 192C448 121.3 390.7 64 320 64C249.3 64 192 121.3 192 192C192 262.7 249.3 320 320 320C390.7 320 448 262.7 448 192zM144 544C144 473.3 201.3 416 272 416L368 416C438.7 416 496 473.3 496 544L496 552C496 565.3 506.7 576 520 576C533.3 576 544 565.3 544 552L544 544C544 446.8 465.2 368 368 368L272 368C174.8 368 96 446.8 96 544L96 552C96 565.3 106.7 576 120 576C133.3 576 144 565.3 144 552L144 544z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Manage Agent</h5>
                        <p class="c-desc12 " style="margin:0;">Add, update, and manage agents participating in voice campaigns.</p>
                    </div>

                    <!-- card 9 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M360 160L280 160C266.7 160 256 149.3 256 136C256 122.7 266.7 112 280 112L360 112C373.3 112 384 122.7 384 136C384 149.3 373.3 160 360 160zM360 208C397.1 208 427.6 180 431.6 144L448 144C456.8 144 464 151.2 464 160L464 512C464 520.8 456.8 528 448 528L192 528C183.2 528 176 520.8 176 512L176 160C176 151.2 183.2 144 192 144L208.4 144C212.4 180 242.9 208 280 208L360 208zM419.9 96C407 76.7 385 64 360 64L280 64C255 64 233 76.7 220.1 96L192 96C156.7 96 128 124.7 128 160L128 512C128 547.3 156.7 576 192 576L448 576C483.3 576 512 547.3 512 512L512 160C512 124.7 483.3 96 448 96L419.9 96z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Manage Remarks</h5>
                        <p class="c-desc12 " style="margin:0;">Create and maintain call remarks used for campaign tracking and reporting.</p>
                    </div>

                </div>


                <div class="hdah651" style="    margin-top: 30px;">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">📌</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #169527  ;">Important</h3>
                            <p class="om-step-detail" style="color: #31964f;">Before creating a Voice campaign, ensure that all required voice files, campaign components, and agent configurations are completed. Proper configuration helps improve call delivery, campaign performance, and overall customer experience.</p>
                        </div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('whatsapp_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">WhatsApp</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('ivr_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">IVR</span>
                    </a>

                </div>

            </section>

            <!-- section 8 IVR -->
            <section id="ivr_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channel
                    </span>/
                    <span class="brad_kaem">
                        IVR
                    </span>
                </div>


                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>CHANNEL</h4>
                </div>

                <h2>Interactive Voice Response (IVR)</h2>

                <p>The Interactive Voice Response (IVR) module enables businesses to automate inbound and outbound customer interactions using voice prompts, keypad (DTMF) inputs, and intelligent call routing. It helps organizations provide self-service options, reduce agent workload, and deliver a seamless customer experience.</p>


                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Key Features
                    </span>
                </div>

                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 144C256 117.5 277.5 96 304 96L336 96C362.5 96 384 117.5 384 144L384 496C384 522.5 362.5 544 336 544L304 544C277.5 544 256 522.5 256 496L256 144zM64 336C64 309.5 85.5 288 112 288L144 288C170.5 288 192 309.5 192 336L192 496C192 522.5 170.5 544 144 544L112 544C85.5 544 64 522.5 64 496L64 336zM496 160L528 160C554.5 160 576 181.5 576 208L576 496C576 522.5 554.5 544 528 544L496 544C469.5 544 448 522.5 448 496L448 208C448 181.5 469.5 160 496 160z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Dashboard</h5>
                        <p class="c-desc12 " style="margin:0;">Monitor IVR traffic, call statistics, answered calls, abandoned calls, and overall system performance in real time.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Campaign</h5>
                        <p class="c-desc12 " style="margin:0;">Create and manage IVR campaigns for customer surveys, notifications, reminders, and automated voice interactions.</p>
                    </div>


                    <!-- card 3 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M532 71C539.6 77.1 544 86.3 544 96L544 400C544 444.2 501 480 448 480C395 480 352 444.2 352 400C352 355.8 395 320 448 320C459.2 320 470 321.6 480 324.6L480 207.9L256 257.7L256 464C256 508.2 213 544 160 544C107 544 64 508.2 64 464C64 419.8 107 384 160 384C171.2 384 182 385.6 192 388.6L192 160C192 145 202.4 132 217.1 128.8L505.1 64.8C514.6 62.7 524.5 65 532.1 71.1z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Voice Files</h5>
                        <p class="c-desc12 " style="margin:0;">Upload, organize, and manage audio files used in IVR menus and campaign announcements.</p>
                    </div>

                    <!-- card 4 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M259.1 73.5C262.1 58.7 275.2 48 290.4 48L350.2 48C365.4 48 378.5 58.7 381.5 73.5L396 143.5C410.1 149.5 423.3 157.2 435.3 166.3L503.1 143.8C517.5 139 533.3 145 540.9 158.2L570.8 210C578.4 223.2 575.7 239.8 564.3 249.9L511 297.3C511.9 304.7 512.3 312.3 512.3 320C512.3 327.7 511.8 335.3 511 342.7L564.4 390.2C575.8 400.3 578.4 417 570.9 430.1L541 481.9C533.4 495 517.6 501.1 503.2 496.3L435.4 473.8C423.3 482.9 410.1 490.5 396.1 496.6L381.7 566.5C378.6 581.4 365.5 592 350.4 592L290.6 592C275.4 592 262.3 581.3 259.3 566.5L244.9 496.6C230.8 490.6 217.7 482.9 205.6 473.8L137.5 496.3C123.1 501.1 107.3 495.1 99.7 481.9L69.8 430.1C62.2 416.9 64.9 400.3 76.3 390.2L129.7 342.7C128.8 335.3 128.4 327.7 128.4 320C128.4 312.3 128.9 304.7 129.7 297.3L76.3 249.8C64.9 239.7 62.3 223 69.8 209.9L99.7 158.1C107.3 144.9 123.1 138.9 137.5 143.7L205.3 166.2C217.4 157.1 230.6 149.5 244.6 143.4L259.1 73.5zM320.3 400C364.5 399.8 400.2 363.9 400 319.7C399.8 275.5 363.9 239.8 319.7 240C275.5 240.2 239.8 276.1 240 320.3C240.2 364.5 276.1 400.2 320.3 400z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Components</h5>
                        <p class="c-desc12 " style="margin:0;">Configure IVR building blocks such as menus, prompts, input options, call routing, and workflow logic.</p>
                    </div>


                    <!-- card 5 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M240 192C240 147.8 275.8 112 320 112C364.2 112 400 147.8 400 192C400 236.2 364.2 272 320 272C275.8 272 240 236.2 240 192zM448 192C448 121.3 390.7 64 320 64C249.3 64 192 121.3 192 192C192 262.7 249.3 320 320 320C390.7 320 448 262.7 448 192zM144 544C144 473.3 201.3 416 272 416L368 416C438.7 416 496 473.3 496 544L496 552C496 565.3 506.7 576 520 576C533.3 576 544 565.3 544 552L544 544C544 446.8 465.2 368 368 368L272 368C174.8 368 96 446.8 96 544L96 552C96 565.3 106.7 576 120 576C133.3 576 144 565.3 144 552L144 544z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Manage Agents</h5>
                        <p class="c-desc12 " style="margin:0;">Add, edit, and organize call center agents who receive transferred IVR calls.</p>
                    </div>


                    <!-- card 6 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M360 160L280 160C266.7 160 256 149.3 256 136C256 122.7 266.7 112 280 112L360 112C373.3 112 384 122.7 384 136C384 149.3 373.3 160 360 160zM360 208C397.1 208 427.6 180 431.6 144L448 144C456.8 144 464 151.2 464 160L464 512C464 520.8 456.8 528 448 528L192 528C183.2 528 176 520.8 176 512L176 160C176 151.2 183.2 144 192 144L208.4 144C212.4 180 242.9 208 280 208L360 208zM419.9 96C407 76.7 385 64 360 64L280 64C255 64 233 76.7 220.1 96L192 96C156.7 96 128 124.7 128 160L128 512C128 547.3 156.7 576 192 576L448 576C483.3 576 512 547.3 512 512L512 160C512 124.7 483.3 96 448 96L419.9 96z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Manage Remarks</h5>
                        <p class="c-desc12 " style="margin:0;">Create and maintain predefined call remarks for consistent call logging and reporting.</p>
                    </div>

                    <!-- card 7 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Reports</h5>
                        <p class="c-desc12 " style="margin:0;">View IVR call reports, CDR reports, campaign statistics, and detailed performance analytics.</p>
                    </div>

                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Benefits of IVR
                    </span>
                </div>


                <div class="void-horizon" style="margin: 0 auto;">
                    <!-- Grid Layout -->
                    <div class="cyber-grid-array">

                        <!-- Row 1 Items -->
                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-shopify">
                                <svg width="20" fill="#96bf48" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M514.2 330.8C530 337.3 548.3 331.1 556.8 316.2L559.2 312C587.1 263.1 582.8 193.2 527.9 157.5C401.9 75.5 238.3 75.5 112.3 157.5C57.4 193.2 53 263.2 81 312L83.4 316.2C91.9 331.1 110.1 337.3 126 330.8L207.9 297.1C221.8 291.4 230.3 277.2 228.8 262.2L223.7 211.2C286.2 190.2 354.5 191.3 416.3 214.5L411.5 262.2C410 277.2 418.5 291.4 432.4 297.1L514.3 330.8zM96 416C96 433.7 110.3 448 128 448C145.7 448 160 433.7 160 416C160 398.3 145.7 384 128 384C110.3 384 96 398.3 96 416zM192 416C192 433.7 206.3 448 224 448C241.7 448 256 433.7 256 416C256 398.3 241.7 384 224 384C206.3 384 192 398.3 192 416zM128 480C110.3 480 96 494.3 96 512C96 529.7 110.3 544 128 544C145.7 544 160 529.7 160 512C160 494.3 145.7 480 128 480zM480 512C480 529.7 494.3 544 512 544C529.7 544 544 529.7 544 512C544 494.3 529.7 480 512 480C494.3 480 480 494.3 480 512zM320 384C302.3 384 288 398.3 288 416C288 433.7 302.3 448 320 448C337.7 448 352 433.7 352 416C352 398.3 337.7 384 320 384zM384 416C384 433.7 398.3 448 416 448C433.7 448 448 433.7 448 416C448 398.3 433.7 384 416 384C398.3 384 384 398.3 384 416zM512 384C494.3 384 480 398.3 480 416C480 433.7 494.3 448 512 448C529.7 448 544 433.7 544 416C544 398.3 529.7 384 512 384zM192 512C192 529.7 206.3 544 224 544L416 544C433.7 544 448 529.7 448 512C448 494.3 433.7 480 416 480L224 480C206.3 480 192 494.3 192 512z" />
                                </svg>
                            </div>
                            <span class="data-tag">Automated Call Handling</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-clevertap">
                                <svg width="20" fill="#f47b20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M264.5 64C251.2 64 240.5 74.7 240.5 88C240.5 101.3 251.2 112 264.5 112L296.5 112L296.5 137.3C188.5 149.2 104.5 240.8 104.5 352C104.5 471.3 201.2 568 320.5 568C439.8 568 536.5 471.3 536.5 352C536.5 312.2 525.7 274.9 506.9 242.8L535.1 214.6C547.6 202.1 547.6 181.8 535.1 169.3C522.6 156.8 502.3 156.8 489.8 169.3L466.4 192.7C433.5 162.5 391.2 142.4 344.4 137.2L344.4 111.9L376.4 111.9C389.7 111.9 400.4 101.2 400.4 87.9C400.4 74.6 389.7 63.9 376.4 63.9L264.4 63.9zM344.5 248L344.5 352C344.5 365.3 333.8 376 320.5 376C307.2 376 296.5 365.3 296.5 352L296.5 248C296.5 234.7 307.2 224 320.5 224C333.8 224 344.5 234.7 344.5 248z" />
                                </svg>
                            </div>
                            <span class="data-tag">Reduced Wait Time</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-moengage">
                                <svg width="20" fill="#e63b26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 144C256 117.5 277.5 96 304 96L336 96C362.5 96 384 117.5 384 144L384 496C384 522.5 362.5 544 336 544L304 544C277.5 544 256 522.5 256 496L256 144zM64 336C64 309.5 85.5 288 112 288L144 288C170.5 288 192 309.5 192 336L192 496C192 522.5 170.5 544 144 544L112 544C85.5 544 64 522.5 64 496L64 336zM496 160L528 160C554.5 160 576 181.5 576 208L576 496C576 522.5 554.5 544 528 544L496 544C469.5 544 448 522.5 448 496L448 208C448 181.5 469.5 160 496 160z" />
                                </svg>
                            </div>
                            <span class="data-tag">Real-time Reporting</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-webengage">
                                <svg width="20" fill="#2d3e50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M512 320C512 214 426 128 320 128C214 128 128 214 128 320C128 426 214 512 320 512C426 512 512 426 512 320zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320zM320 400C364.2 400 400 364.2 400 320C400 275.8 364.2 240 320 240C275.8 240 240 275.8 240 320C240 364.2 275.8 400 320 400zM320 176C399.5 176 464 240.5 464 320C464 399.5 399.5 464 320 464C240.5 464 176 399.5 176 320C176 240.5 240.5 176 320 176zM288 320C288 302.3 302.3 288 320 288C337.7 288 352 302.3 352 320C352 337.7 337.7 352 320 352C302.3 352 288 337.7 288 320z" />
                                </svg>
                            </div>
                            <span class="data-tag">Intelligent Call Routing</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zohoflow">
                                <svg width="20" fill="#d88b00" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg>

                            </div>
                            <span class="data-tag">24×7 Customer Support</span>
                        </a>

                        <a class="nano-brick-unit">
                            <div class="visual-core chroma-zoho-int">

                                <svg width="20" fill="#6a3ab2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M264 112L376 112C380.4 112 384 115.6 384 120L384 160L256 160L256 120C256 115.6 259.6 112 264 112zM208 120L208 160L128 160C92.7 160 64 188.7 64 224L64 320L576 320L576 224C576 188.7 547.3 160 512 160L432 160L432 120C432 89.1 406.9 64 376 64L264 64C233.1 64 208 89.1 208 120zM576 368L384 368L384 384C384 401.7 369.7 416 352 416L288 416C270.3 416 256 401.7 256 384L256 368L64 368L64 480C64 515.3 92.7 544 128 544L512 544C547.3 544 576 515.3 576 480L576 368z" />
                                </svg>
                            </div>
                            <span class="data-tag">Improved Agent Productivity</span>
                        </a>

                    </div>
                </div>

                <div class="hdah651">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">💡</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #169527  ;display:none;">Important</h3>
                            <p class="om-step-detail" style="color: #31964f;">IVR automates customer interactions by allowing callers to navigate voice menus, access information, or connect to the appropriate department without requiring manual assistance.</p>
                        </div>
                    </div>
                </div>



                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('voice_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Voice</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('click_to_call_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Click To Call</span>
                    </a>

                </div>


            </section>

            <!-- section 9 Click To Call -->
            <section id="click_to_call_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channel
                    </span>/
                    <span class="brad_kaem">
                        click To Call
                    </span>
                </div>


                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>Communication Channel</h4>
                </div>

                <h2>Click To Call (CTC)</h2>

                <p>The <strong>Click To Call (CTC)</strong> module enables businesses to instantly connect with customers by initiating phone calls directly from the Omni Portal. It simplifies customer communication by allowing users to launch, monitor, and manage click-to-call campaigns from a single platform.</p>


                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Overview
                    </span>
                </div>

                <p style="margin-top: 30px;">The <strong>Click To Call (CTC)</strong> module enables organizations to initiate outbound calls directly from the Omni Portal. It provides a centralized interface to manage agents, create campaigns, monitor live call activities, configure call remarks, and analyze campaign performance through comprehensive reports. The module helps improve customer communication while providing supervisors with complete visibility into Click To Call operations.</p>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Key Features
                    </span>
                </div>

                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>

                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 144C256 117.5 277.5 96 304 96L336 96C362.5 96 384 117.5 384 144L384 496C384 522.5 362.5 544 336 544L304 544C277.5 544 256 522.5 256 496L256 144zM64 336C64 309.5 85.5 288 112 288L144 288C170.5 288 192 309.5 192 336L192 496C192 522.5 170.5 544 144 544L112 544C85.5 544 64 522.5 64 496L64 336zM496 160L528 160C554.5 160 576 181.5 576 208L576 496C576 522.5 554.5 544 528 544L496 544C469.5 544 448 522.5 448 496L448 208C448 181.5 469.5 160 496 160z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Dashboard</h5>
                        <p class="c-desc12 " style="margin:0;">View the overall Click To Call activity, campaign status, and system statistics.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M240 192C240 147.8 275.8 112 320 112C364.2 112 400 147.8 400 192C400 236.2 364.2 272 320 272C275.8 272 240 236.2 240 192zM448 192C448 121.3 390.7 64 320 64C249.3 64 192 121.3 192 192C192 262.7 249.3 320 320 320C390.7 320 448 262.7 448 192zM144 544C144 473.3 201.3 416 272 416L368 416C438.7 416 496 473.3 496 544L496 552C496 565.3 506.7 576 520 576C533.3 576 544 565.3 544 552L544 544C544 446.8 465.2 368 368 368L272 368C174.8 368 96 446.8 96 544L96 552C96 565.3 106.7 576 120 576C133.3 576 144 565.3 144 552L144 544z" />
                                </svg>


                            </span>
                        </div>

                        <h5 class="c-title12">Agent</h5>
                        <p class="c-desc12 " style="margin:0;">Configure and manage agents participating in Click To Call operations.</p>
                    </div>


                    <!-- card 3 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>

                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Campaign</h5>
                        <p class="c-desc12 " style="margin:0;">Create, configure, and manage Click To Call campaigns.</p>
                    </div>

                    <!-- card 4 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span><svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M360 160L280 160C266.7 160 256 149.3 256 136C256 122.7 266.7 112 280 112L360 112C373.3 112 384 122.7 384 136C384 149.3 373.3 160 360 160zM360 208C397.1 208 427.6 180 431.6 144L448 144C456.8 144 464 151.2 464 160L464 512C464 520.8 456.8 528 448 528L192 528C183.2 528 176 520.8 176 512L176 160C176 151.2 183.2 144 192 144L208.4 144C212.4 180 242.9 208 280 208L360 208zM419.9 96C407 76.7 385 64 360 64L280 64C255 64 233 76.7 220.1 96L192 96C156.7 96 128 124.7 128 160L128 512C128 547.3 156.7 576 192 576L448 576C483.3 576 512 547.3 512 512L512 160C512 124.7 483.3 96 448 96L419.9 96z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Manage Remarks</h5>
                        <p class="c-desc12 " style="margin:0;">Create and maintain predefined remarks used during customer interactions.</p>
                    </div>


                    <!-- card 5 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Reports</h5>
                        <p class="c-desc12 " style="margin:0;">Analyze campaign performance, call records, and call statistics.</p>
                    </div>


                    <!-- card 6 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M144 288C144 190.8 222.8 112 320 112C417.2 112 496 190.8 496 288L496 332.8C481.9 324.6 465.5 320 448 320L432 320C405.5 320 384 341.5 384 368L384 496C384 522.5 405.5 544 432 544L448 544C501 544 544 501 544 448L544 288C544 164.3 443.7 64 320 64C196.3 64 96 164.3 96 288L96 448C96 501 139 544 192 544L208 544C234.5 544 256 522.5 256 496L256 368C256 341.5 234.5 320 208 320L192 320C174.5 320 158.1 324.7 144 332.8L144 288zM144 416C144 389.5 165.5 368 192 368L208 368L208 496L192 496C165.5 496 144 474.5 144 448L144 416zM496 416L496 448C496 474.5 474.5 496 448 496L432 496L432 368L448 368C474.5 368 496 389.5 496 416z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Agent Monitoring</h5>
                        <p class="c-desc12 " style="margin:0;">Monitor live agent calls and perform supervisory actions such as Listen and Barge.</p>
                    </div>



                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Capabilities
                    </span>
                </div>

                <div class="qunike-table-container">
                    <table class="qunike-table">
                        <thead>
                            <tr>
                                <th>MODULE</th>
                                <th>DESCRIPTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Dashboard</td>
                                <td>Provides a real-time overview of Click To Call campaign activity.</td>
                            </tr>
                            <tr>
                                <td>Campaign</td>
                                <td>Allows users to create, configure, and manage Click To Call campaigns.</td>
                            </tr>
                            <tr>
                                <td>Reports</td>
                                <td>Displays campaign performance, call statistics, and detailed call records.</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Benefits
                    </span>
                </div>


                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M434.8 54.1C446.7 62.7 451.1 78.3 445.7 91.9L367.3 288L512 288C525.5 288 537.5 296.4 542.1 309.1C546.7 321.8 542.8 336 532.5 344.6L244.5 584.6C233.2 594 217.1 594.5 205.2 585.9C193.3 577.3 188.9 561.7 194.3 548.1L272.7 352L128 352C114.5 352 102.5 343.6 97.9 330.9C93.3 318.2 97.2 304 107.5 295.4L395.5 55.4C406.8 46 422.9 45.5 434.8 54.1z" />
                                </svg>


                            </span>
                        </div>

                        <h5 class="c-title12">Dashboard</h5>
                        <p class="c-desc12 " style="margin:0;">View the overall Click To Call activity, campaign status, and system statistics.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>

                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 144C256 117.5 277.5 96 304 96L336 96C362.5 96 384 117.5 384 144L384 496C384 522.5 362.5 544 336 544L304 544C277.5 544 256 522.5 256 496L256 144zM64 336C64 309.5 85.5 288 112 288L144 288C170.5 288 192 309.5 192 336L192 496C192 522.5 170.5 544 144 544L112 544C85.5 544 64 522.5 64 496L64 336zM496 160L528 160C554.5 160 576 181.5 576 208L576 496C576 522.5 554.5 544 528 544L496 544C469.5 544 448 522.5 448 496L448 208C448 181.5 469.5 160 496 160z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Agent</h5>
                        <p class="c-desc12 " style="margin:0;">Configure and manage agents participating in Click To Call operations.</p>
                    </div>


                    <!-- card 3 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>

                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Campaign</h5>
                        <p class="c-desc12 " style="margin:0;">Create, configure, and manage Click To Call campaigns.</p>
                    </div>

                    <!-- card 4 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span><svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M360 160L280 160C266.7 160 256 149.3 256 136C256 122.7 266.7 112 280 112L360 112C373.3 112 384 122.7 384 136C384 149.3 373.3 160 360 160zM360 208C397.1 208 427.6 180 431.6 144L448 144C456.8 144 464 151.2 464 160L464 512C464 520.8 456.8 528 448 528L192 528C183.2 528 176 520.8 176 512L176 160C176 151.2 183.2 144 192 144L208.4 144C212.4 180 242.9 208 280 208L360 208zM419.9 96C407 76.7 385 64 360 64L280 64C255 64 233 76.7 220.1 96L192 96C156.7 96 128 124.7 128 160L128 512C128 547.3 156.7 576 192 576L448 576C483.3 576 512 547.3 512 512L512 160C512 124.7 483.3 96 448 96L419.9 96z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Manage Remarks</h5>
                        <p class="c-desc12 " style="margin:0;">Create and maintain predefined remarks used during customer interactions.</p>
                    </div>

                </div>


                <div class="hdah651" style="margin-top: 30px;">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">💡</div>
                        <div class="om-card-left">
                            <ul style="list-style:disc;" class="sndin">
                                <li>
                                    <p class="om-step-detail">Click To Call provides quick customer connectivity without manual dialing.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Campaigns can be monitored using the Dashboard.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Reports help evaluate campaign performance and call statistics.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Ensure the recipient phone numbers are valid before launching campaigns.</p>
                                </li>
                            </ul>
                            <!-- <p class="om-step-detail" >IVR automates customer interactions by allowing callers to navigate voice menus, access information, or connect to the appropriate department without requiring manual assistance.</p> -->
                        </div>
                    </div>
                </div>



                <div class="hdah651">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">💡</div>
                        <div class="om-card-left">
                            <h5 style="color: #116916;">Best Practice</h5>
                            <ul style="list-style:disc;" class="sndin">
                                <li>
                                    <p class="om-step-detail">Click To Call provides quick customer connectivity without manual dialing.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Campaigns can be monitored using the Dashboard.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Reports help evaluate campaign performance and call statistics.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Ensure the recipient phone numbers are valid before launching campaigns.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Ensure the recipient phone numbers are valid before launching campaigns.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('ivr_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">IVR</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('text_to_speech_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Text To Speech</span>
                    </a>

                </div>


            </section>

            <!-- section 10 Text To Speech -->
            <section id="text_to_speech_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channel
                    </span>/
                    <span class="brad_kaem">
                        Text To Speech (TTS)
                    </span>
                </div>


                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>Channel</h4>
                </div>

                <h2>Text To Speech (TTS)</h2>

                <p>The Text-to-Speech (TTS) module enables users to create automated outbound voice campaigns by converting written text into natural-sounding speech. Users can upload voice files, create reusable TTS templates, configure campaigns, and monitor campaign performance from a single interface.</p>


                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>

                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 144C256 117.5 277.5 96 304 96L336 96C362.5 96 384 117.5 384 144L384 496C384 522.5 362.5 544 336 544L304 544C277.5 544 256 522.5 256 496L256 144zM64 336C64 309.5 85.5 288 112 288L144 288C170.5 288 192 309.5 192 336L192 496C192 522.5 170.5 544 144 544L112 544C85.5 544 64 522.5 64 496L64 336zM496 160L528 160C554.5 160 576 181.5 576 208L576 496C576 522.5 554.5 544 528 544L496 544C469.5 544 448 522.5 448 496L448 208C448 181.5 469.5 160 496 160z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Dashboard</h5>
                        <p class="c-desc12 " style="margin:0;">View real-time campaign statistics, call status, outbound distribution, and overall TTS performance.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M532 71C539.6 77.1 544 86.3 544 96L544 400C544 444.2 501 480 448 480C395 480 352 444.2 352 400C352 355.8 395 320 448 320C459.2 320 470 321.6 480 324.6L480 207.9L256 257.7L256 464C256 508.2 213 544 160 544C107 544 64 508.2 64 464C64 419.8 107 384 160 384C171.2 384 182 385.6 192 388.6L192 160C192 145 202.4 132 217.1 128.8L505.1 64.8C514.6 62.7 524.5 65 532.1 71.1z" />
                                </svg>


                            </span>
                        </div>

                        <h5 class="c-title12">Voice Files</h5>
                        <p class="c-desc12 " style="margin:0;">Configure and manage agents participating in Click To Call operations.</p>
                    </div>


                    <!-- card 3 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M360 160L280 160C266.7 160 256 149.3 256 136C256 122.7 266.7 112 280 112L360 112C373.3 112 384 122.7 384 136C384 149.3 373.3 160 360 160zM360 208C397.1 208 427.6 180 431.6 144L448 144C456.8 144 464 151.2 464 160L464 512C464 520.8 456.8 528 448 528L192 528C183.2 528 176 520.8 176 512L176 160C176 151.2 183.2 144 192 144L208.4 144C212.4 180 242.9 208 280 208L360 208zM419.9 96C407 76.7 385 64 360 64L280 64C255 64 233 76.7 220.1 96L192 96C156.7 96 128 124.7 128 160L128 512C128 547.3 156.7 576 192 576L448 576C483.3 576 512 547.3 512 512L512 160C512 124.7 483.3 96 448 96L419.9 96z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Manage TTS Template</h5>
                        <p class="c-desc12 " style="margin:0;">Create, edit, test, and manage reusable Text-to-Speech templates with variables and audio blocks.</p>
                    </div>

                    <!-- card 4 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M525.2 82.9C536.7 88 544 99.4 544 112L544 528C544 540.6 536.7 552 525.2 557.1C513.7 562.2 500.4 560.3 490.9 552L444.3 511.3C400.7 473.2 345.6 451 287.9 448.3L287.9 544C287.9 561.7 273.6 576 255.9 576L223.9 576C206.2 576 191.9 561.7 191.9 544L191.9 448C121.3 448 64 390.7 64 320C64 249.3 121.3 192 192 192L276.5 192C338.3 191.8 397.9 169.3 444.4 128.7L491 88C500.4 79.7 513.9 77.8 525.3 82.9zM288 384L288 384.2C358.3 386.9 425.8 412.7 480 457.6L480 182.3C425.8 227.2 358.3 253 288 255.7L288 384z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Create Campaign</h5>
                        <p class="c-desc12 " style="margin:0;">Configure and launch automated Text-to-Speech campaigns using approved templates.</p>
                    </div>


                    <!-- card 5 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Reports</h5>
                        <p class="c-desc12 " style="margin:0;">Review campaign execution, call status, delivery reports, and campaign history.</p>
                    </div>

                </div>


                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Features
                    </span>
                </div>


                <div class="qunike-table-container">
                    <table class="qunike-table">
                        <thead>
                            <tr>
                                <th>FEATURE</th>
                                <th>DESCRIPTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Voice Files</td>
                                <td>Upload WAV audio files for use in TTS templates.</td>
                            </tr>
                            <tr>
                                <td>TTS Templates</td>
                                <td>Create reusable templates with variables and static audio blocks.</td>
                            </tr>
                            <tr>
                                <td>Dynamic Variables</td>
                                <td>Personalize voice messages using variables such as names, OTPs, and account numbers.</td>
                            </tr>

                            <tr>
                                <td>Campaign Management</td>
                                <td>Create Single or Bulk voice campaigns.</td>
                            </tr>

                            <tr>
                                <td>Scheduling</td>
                                <td>Run campaigns immediately or schedule them for later execution.</td>
                            </tr>

                            <tr>
                                <td>Reports</td>
                                <td>Monitor campaign performance and outbound call statistics.</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="hdah651" style="margin-top: 30px;">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">💡</div>
                        <div class="om-card-left">
                            <h5 style="color: #116916;">Best Practice</h5>
                            <ul style="list-style:disc;" class="sndin">
                                <li>
                                    <p class="om-step-detail">Upload Voice Files.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Create a TTS Template.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Submit the template for approval.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Create a TTS Campaign.</p>
                                </li>
                                <li>
                                    <p class="om-step-detail">Monitor campaign status from Dashboard and Reports.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('click_to_call_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Click To Call</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('ai_agent_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Ai Agent</span>
                    </a>

                </div>

            </section>

            <!-- section 11 Ai Agent -->
            <section id="ai_agent_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channel
                    </span>/
                    <span class="brad_kaem">
                        AI Agent
                    </span>
                </div>


                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>Channel</h4>
                </div>

                <h2>AI Agent</h2>

                <p>The AI Agent Campaign enables businesses to automate customer interactions using AI-powered virtual assistants. Before creating an AI Agent Campaign, at least one AI Agent must be configured in the system. Each AI Agent defines its knowledge, personality, behavior, and response settings, allowing organizations to deliver intelligent and personalized customer conversations across supported channels.</p>

                <div class="hdah651" style="margin-top: 30px;">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">💡</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #954516  ;display:none;">Important</h3>
                            <p class="om-step-detail" style="color: #31964f;"><span style="color: #064e1e;"><b>Note :</b></span> An AI Agent must be created and configured before launching an AI Agent Campaign.</p>
                        </div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Modules
                    </span>
                </div>



                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>

                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 144C256 117.5 277.5 96 304 96L336 96C362.5 96 384 117.5 384 144L384 496C384 522.5 362.5 544 336 544L304 544C277.5 544 256 522.5 256 496L256 144zM64 336C64 309.5 85.5 288 112 288L144 288C170.5 288 192 309.5 192 336L192 496C192 522.5 170.5 544 144 544L112 544C85.5 544 64 522.5 64 496L64 336zM496 160L528 160C554.5 160 576 181.5 576 208L576 496C576 522.5 554.5 544 528 544L496 544C469.5 544 448 522.5 448 496L448 208C448 181.5 469.5 160 496 160z" />
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Dashboard</h5>
                        <p class="c-desc12 " style="margin:0;">View AI Agent statistics, approval status, channel distribution, and fleet activity from a centralized dashboard.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z" />
                                </svg>


                            </span>
                        </div>

                        <h5 class="c-title12">AI Agent Campaign</h5>
                        <p class="c-desc12 " style="margin:0;">Create, configure, and manage AI-powered campaigns using intelligent AI Agents for automated customer interactions.</p>
                    </div>

                    <!-- card 5 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M128 128C128 110.3 113.7 96 96 96C78.3 96 64 110.3 64 128L64 464C64 508.2 99.8 544 144 544L544 544C561.7 544 576 529.7 576 512C576 494.3 561.7 480 544 480L144 480C135.2 480 128 472.8 128 464L128 128zM534.6 214.6C547.1 202.1 547.1 181.8 534.6 169.3C522.1 156.8 501.8 156.8 489.3 169.3L384 274.7L326.6 217.4C314.1 204.9 293.8 204.9 281.3 217.4L185.3 313.4C172.8 325.9 172.8 346.2 185.3 358.7C197.8 371.2 218.1 371.2 230.6 358.7L304 285.3L361.4 342.7C373.9 355.2 394.2 355.2 406.7 342.7L534.7 214.7z" />
                                </svg>
                            </span>
                        </div>

                        <h5 class="c-title12">Reports</h5>
                        <p class="c-desc12 " style="margin:0;">Analyze conversations, monitor delivery statistics, review error logs, and evaluate AI Agent performance.</p>
                    </div>

                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Prerequisite
                    </span>
                </div>

                <div class="hdah651" style="margin-top: 30px;">
                    <div class="om-step-card" style="border-left: 8px solid #e6b103;">
                        <div class="">⚠️</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #954516  ;display:none;">Important</h3>
                            <p class="om-step-detail" style="color: #965631;">
                                Before creating an AI Agent Campaign, at least one AI Agent must exist in the system.

                            </p>
                        </div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('text_to_speech_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Text To Speech</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('journeys_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Journeys</span>
                    </a>

                </div>


            </section>

            <!-- section 12 Journeys -->
            <section id="journeys_contect_box" class="section_sub_with all_sejmca8974 ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Utilities
                    </span>/
                    <span class="brad_kaem">
                        Journeys
                    </span>
                </div>


                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>Utilities</h4>
                </div>

                <h2>Journeys</h2>

                <p>The Journeys module enables businesses to create intelligent, multi-channel customer communication workflows. It combines messaging services such as RCS, SMS, and WhatsApp into a single automated journey, allowing messages to be delivered using Sequential, Parallel, or Fallback communication strategies.</p>

                <div class="hdah651" style="margin-top: 30px;">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">💡</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #954516  ;display:none;">Important</h3>
                            <p class="om-step-detail" style="color: #31964f;">
                                Journeys simplify customer engagement by automating message delivery across multiple communication channels while providing centralized monitoring and reporting.</p>
                        </div>
                    </div>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Module Overview
                    </span>
                </div>

                <p style="margin-top: 30px;">The Journeys module provides a complete solution for designing, executing, and monitoring customer communication workflows. Users can create reusable journeys, configure message templates for multiple channels, launch campaigns, and review execution reports from a single interface.</p>

                <div class="h8wh74523">

                    <!-- width="30" fill="#197553" -->

                    <!-- card 1 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>

                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M256 144C256 117.5 277.5 96 304 96L336 96C362.5 96 384 117.5 384 144L384 496C384 522.5 362.5 544 336 544L304 544C277.5 544 256 522.5 256 496L256 144zM64 336C64 309.5 85.5 288 112 288L144 288C170.5 288 192 309.5 192 336L192 496C192 522.5 170.5 544 144 544L112 544C85.5 544 64 522.5 64 496L64 336zM496 160L528 160C554.5 160 576 181.5 576 208L576 496C576 522.5 554.5 544 528 544L496 544C469.5 544 448 522.5 448 496L448 208C448 181.5 469.5 160 496 160z"></path>
                                </svg>

                            </span>
                        </div>

                        <h5 class="c-title12">Journey Campaign</h5>
                        <p class="c-desc12 " style="margin:0;">Create, configure, execute, and manage automated Journey Campaigns using multiple communication channels.</p>
                    </div>

                    <!-- card 2 -->
                    <div class="uhujh2294sas">
                        <div class="aseh" style="padding: 15px 0">
                            <span>
                                <svg width="30" fill="#197553" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M352 64C352 46.3 337.7 32 320 32C302.3 32 288 46.3 288 64L288 128L192 128C139 128 96 171 96 224L96 448C96 501 139 544 192 544L448 544C501 544 544 501 544 448L544 224C544 171 501 128 448 128L352 128L352 64zM160 432C160 418.7 170.7 408 184 408L216 408C229.3 408 240 418.7 240 432C240 445.3 229.3 456 216 456L184 456C170.7 456 160 445.3 160 432zM280 432C280 418.7 290.7 408 304 408L336 408C349.3 408 360 418.7 360 432C360 445.3 349.3 456 336 456L304 456C290.7 456 280 445.3 280 432zM400 432C400 418.7 410.7 408 424 408L456 408C469.3 408 480 418.7 480 432C480 445.3 469.3 456 456 456L424 456C410.7 456 400 445.3 400 432zM224 240C250.5 240 272 261.5 272 288C272 314.5 250.5 336 224 336C197.5 336 176 314.5 176 288C176 261.5 197.5 240 224 240zM368 288C368 261.5 389.5 240 416 240C442.5 240 464 261.5 464 288C464 314.5 442.5 336 416 336C389.5 336 368 314.5 368 288zM64 288C64 270.3 49.7 256 32 256C14.3 256 0 270.3 0 288L0 384C0 401.7 14.3 416 32 416C49.7 416 64 401.7 64 384L64 288zM608 256C590.3 256 576 270.3 576 288L576 384C576 401.7 590.3 416 608 416C625.7 416 640 401.7 640 384L640 288C640 270.3 625.7 256 608 256z"></path>
                                </svg>


                            </span>
                        </div>

                        <h5 class="c-title12">Journey Reports</h5>
                        <p class="c-desc12 " style="margin:0;">Review campaign execution details, delivery statistics, execution timelines, and channel-wise performance reports.</p>
                    </div>

                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Key Features
                    </span>
                </div>

                <div class="qunike-table-container">
                    <table class="qunike-table">
                        <thead>
                            <tr>
                                <th>FEATURE</th>
                                <th>DESCRIPTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Multi-Channel Messaging</td>
                                <td>Combine RCS, SMS, and WhatsApp into a single customer communication workflow.</td>
                            </tr>
                            <tr>
                                <td>Journey Builder</td>
                                <td>Design communication flows using configurable message components.</td>
                            </tr>
                            <tr>
                                <td>Flexible Sending Styles</td>
                                <td>Support Sequential, Parallel, and Fallback delivery methods.</td>
                            </tr>

                            <tr>
                                <td>Campaign Execution</td>
                                <td>Launch Journey Campaigns immediately or schedule them for future execution.</td>
                            </tr>

                            <tr>
                                <td>Campaign Monitoring</td>
                                <td>Monitor campaign progress and execution status in real-time.</td>
                            </tr>

                            <tr>
                                <td>Comprehensive Reports</td>
                                <td>Analyze Journey performance using detailed execution reports and delivery statistics.</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Journey Workflow
                    </span>
                </div>

                <p style="margin-top: 20px;color: #000000;">A typical Journey consists of the following stages:</p>

                <div class="diaod98641" style="margin-top: 15px;">
                    <ul style="list-style: decimal;">
                        <li>
                            <p style="margin: 0;color: #000000;">Create a Journey.</p>
                        </li>
                        <li>
                            <p style="margin: 0;color: #000000;">Configure Journey Information.</p>
                        </li>
                        <li>
                            <p style="margin: 0;color: #000000;">Select the Sending Style.</p>
                        </li>
                        <li>
                            <p style="margin: 0;color: #000000;">Add communication components.</p>
                        </li>
                        <li>
                            <p style="margin: 0;color: #000000;">Assign templates for each channel.</p>
                        </li>
                        <li>
                            <p style="margin: 0;color: #000000;">Save the Journey.</p>
                        </li>
                        <li>
                            <p style="margin: 0;color: #000000;">Execute the Journey Campaign.</p>
                        </li>
                        <li>
                            <p style="margin: 0;color: #000000;">Monitor execution progress.</p>
                        </li>
                        <li>
                            <p style="margin: 0;color: #000000;">Review Journey Reports.</p>
                        </li>
                    </ul>
                </div>

                <div class="hdah651" style="margin-top: 30px;">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">✅</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #954516  ;display:none;">Important</h3>
                            <p class="om-step-detail" style="color: #31964f;">
                                Journeys provide a centralized platform for planning, executing, and monitoring customer communication campaigns across multiple messaging channels.</p>
                        </div>
                    </div>
                </div>


                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('ai_agent_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Ai Agent</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a style="display: none;" class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('journeys_btn_124').click();">
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Journeys</span>
                    </a>

                </div>


            </section>


            <!-- sublink box 1 -->
            <section id="contect_1_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channels
                    </span>/
                    <span class="brad_kaem">
                        SMS

                    </span>/
                    <span class="brad_kaem">
                        Dashboard
                    </span>
                </div>

                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>SMS Analytics</h4>
                </div>

                <h2>SMS Dashboard</h2>

                <p>The SMS Dashboard provides a summary of SMS campaign performance, message delivery statistics, and status-wise analytics.</p>

                <!-- img -->
                <div class="all_drive_box">
                    <span class="img_box">
                        <img src="assets/appliction_imgs/sms/sms_contect_1/img_1.png" alt="">
                    </span>
                </div>

                <!-- line -->
                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Delivery Analytics
                    </span>
                </div>

                <p style="margin-top: 30px;">The dashboard displays a graphical representation of SMS delivery performance over a selected period.</p>

                <!-- ul -->
                <div class="diaod98641" style="margin-top: 15px;">
                    <ul style="list-style: disc;padding-left: 20px;">
                        <li>
                            <p style="margin: 0;color: #000000;">Delivered Messages</p>
                        </li>
                        <li>
                            <p style="margin: 0;color: #000000;">Failed Messages</p>
                        </li>
                    </ul>
                </div>


                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Message Statistics
                    </span>
                </div>

                <p style="margin-top: 30px;">The dashboard provides a quick summary of SMS activity.</p>

                <!-- table  -->
                <div class="qunike-table-container">
                    <table class="qunike-table">
                        <thead>
                            <tr>
                                <th>METRIC</th>
                                <th>DESCRIPTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Today Sent</td>
                                <td>Total SMS messages sent today</td>
                            </tr>
                            <tr>
                                <td>Delivered</td>
                                <td>Successfully delivered messages</td>
                            </tr>
                            <tr>
                                <td>Undelivered</td>
                                <td>Messages not delivered</td>
                            </tr>

                            <tr>
                                <td>Failed</td>
                                <td>Messages that failed during processing</td>


                        </tbody>
                    </table>
                </div>

                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Status Wise Count
                    </span>
                </div>

                <p style="margin-top: 20px;color: #000000;">The Status Wise Count section displays message status distribution.</p>

                <!-- no icon box  -->
                <div class="void-horizon" style="margin: 0 auto;">
                    <!-- Grid Layout -->
                    <div class="cyber-grid-array">

                        <!-- Row 1 Items -->
                        <a class="nano-brick-unit">
                            <span class="data-tag">Delivered</span>
                        </a>

                        <a class="nano-brick-unit">
                            <span class="data-tag">Expired</span>
                        </a>

                        <a class="nano-brick-unit">
                            <span class="data-tag">Rejected</span>
                        </a>

                        <a class="nano-brick-unit">
                            <span class="data-tag">Undelivered</span>
                        </a>

                    </div>
                </div>


                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Benefits
                    </span>
                </div>


                <!-- steps  -->
                <div class="om-guide-shell">

                    <!-- Step 1 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">1</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Monitor Campaign Performance</h3>
                            <p class="om-step-detail">rack campaign activity from a single dashboard.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">2</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Track Delivery Success Rates</h3>
                            <p class="om-step-detail">Measure successful message delivery.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">3</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Identify Failed Messages</h3>
                            <p class="om-step-detail">Quickly identify failed or undelivered SMS.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">4</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Analyze Messaging Trends</h3>
                            <p class="om-step-detail">Review SMS performance trends over time.</p>
                        </div>
                    </div>

                </div>


                <!--notification -->
                <div class="hdah651" style="margin-top: 30px;">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">✅</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #0c4b07  ;">Expected Result</h3>
                            <p class="om-step-detail" style="color: #31964f;">
                                Users can quickly review SMS campaign activity and delivery performance from a single dashboard.</p>
                        </div>
                    </div>
                </div>


                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <!-- <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Available Plugins
                    </span> -->
                </div>

                <!-- preview and next btn -->
                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('sms_btn_124').click();">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">SMS</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('contect__2').click(); document.getElementById('sms_btn_124').classList.add('active'); document.getElementById('sms_sub_box').classList.add('sub_links_of_show_box'); ">

                        <!-- event.preventDefault(); document.getElementById('contect__2').click(); document.getElementById('sms_btn_124').click(); -->
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Create Campaign</span>
                    </a>

                </div>

            </section>

            <!-- sublink box 2 -->
            <section id="contect_2_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa ">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channels
                    </span>/
                    <span class="brad_kaem">
                        SMS

                    </span>/
                    <span class="brad_kaem">
                        Create Campaign
                    </span>
                </div>

                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>SMS Campaign</h4>
                </div>

                <h2>Create SMS Campaign</h2>

                <p>The SMS Dashboard provides a summary of SMS campaign performance, message delivery statistics, and status-wise analytics.</p>

                <!-- img -->
                <div class="all_drive_box">
                    <span class="img_box">
                        <img src="assets/appliction_imgs/sms/sms_contect_2/img_1.png" alt="">
                    </span>
                </div>

                <!-- img -->
                <div class="all_drive_box">
                    <span class="img_box">
                        <img src="assets/appliction_imgs/sms/sms_contect_2/img_2.png" alt="">
                    </span>
                </div>

                <!-- line -->
                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Campaign Details
                    </span>
                </div>

                <!-- table  -->
                <div class="qunike-table-container">
                    <table class="qunike-table">
                        <thead>
                            <tr>
                                <th>FIELD</th>
                                <th>DESCRIPTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Campaign Name</td>
                                <td>User-defined name for the campaign. Auto-filled with timestamp.</td>
                            </tr>
                            <tr>
                                <td>Route</td>
                                <td>Message delivery route — select from available routing options.</td>
                            </tr>
                            <tr>
                                <td>Sender ID</td>
                                <td>Sender identity displayed to recipients (6–8 character alpha code).</td>
                            </tr>

                            <tr>
                                <td>Language</td>
                                <td>Preferred language for the message content (e.g. English).</td>

                            </tr>

                            <tr>
                                <td>DLT Template ID</td>
                                <td>Government-approved Distributed Ledger Technology template identifier.</td>
                            </tr>

                            <tr>
                                <td>Select Template</td>
                                <td>Choose a predefined SMS template. Message text auto-fills from selection.</td>
                            </tr>

                            <tr>
                                <td>Message Text</td>
                                <td>SMS content to be delivered. Shows Length, MaxLength, Segments, Chars Left.</td>
                            </tr>

                            <tr>
                                <td>Numbers</td>
                                <td>Recipient mobile numbers — up to 5,000 comma-separated entries.</td>
                            </tr>

                        </tbody>
                    </table>
                </div>


                <!-- line -->
                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Steps to Create a Campaign
                    </span>
                </div>


                <!-- steps  -->
                <div class="om-guide-shell">

                    <!-- Step 1 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">1</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Enter Campaign Name</h3>
                            <p class="om-step-detail">rack campaign activity from a single dashboard.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">2</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Select Route & Sender ID</h3>
                            <p class="om-step-detail">Measure successful message delivery.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">3</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Select Template</h3>
                            <p class="om-step-detail">Quickly identify failed or undelivered SMS.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">4</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Add Recipients</h3>
                            <p class="om-step-detail">Review SMS performance trends over time.</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">5</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Click Send Now</h3>
                            <p class="om-step-detail">Campaign is submitted for processing and delivery to all selected recipients.</p>
                        </div>
                    </div>

                </div>

                <!-- preview and next btn -->
                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('contect__1').click(); document.getElementById('sms_btn_124').classList.add('active'); document.getElementById('sms_sub_box').classList.add('sub_links_of_show_box'); ">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Sms Dashbord</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('contect__3').click(); document.getElementById('sms_btn_124').classList.add('active'); document.getElementById('sms_sub_box').classList.add('sub_links_of_show_box'); ">

                        <!-- event.preventDefault(); document.getElementById('contect__2').click(); document.getElementById('sms_btn_124').click(); -->
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Tirny Campaign</span>
                    </a>

                </div>


            </section>

            <!-- sublink box 3 -->
            <section id="contect_3_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa show_active">

                <div class="login_hero">
                    <span class="brad_kaem">
                        Docs
                    </span>/
                    <span class="brad_kaem">
                        Channels
                    </span>/
                    <span class="brad_kaem">
                        SMS

                    </span>/
                    <span class="brad_kaem">
                        Tiny Campaign
                    </span>
                </div>

                <div class="loging_title">
                    <span class="green_dot_585"></span>
                    <h4>SMS Campaign</h4>
                </div>

                <h2>Tiny Campaign (Smart URL)</h2>

                <p>The Tiny Campaign feature is used when a URL is very long. Instead of sending the complete URL in the SMS message, the system generates a Smart URL (short URL), making messages cleaner, easier to read, and trackable.</p>


                <!-- line -->
                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Purpose
                    </span>
                </div>

                <!--notification green-->
                <div class="hdah651" style="margin-top: 30px;">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">💡</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #0c4b07;display:none; ">Expected Result</h3>
                            <p class="om-step-detail" style="color: #31964f;">
                                Tiny Campaign reduces SMS length, improves readability, and provides click tracking using Smart URLs.</p>
                        </div>
                    </div>
                </div>

                <!-- line -->
                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Step 1: Create Smart URL
                    </span>
                </div>

                <p style="margin-top: 30px;">Navigation: <b>HomeHome → Utilities → Tiny URL</b></p>

                <!-- steps with img -->
                <div class="om-guide-shell">

                    <!-- Step 1 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">1</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Open Tiny URL</h3>
                            <p class="om-step-detail">Navigate to Tiny URL under Utilities.</p>
                        </div>
                    </div>

                    <!-- img step -->
                    <div class="step_impear">
                        <span class="img_box">
                            <img src="assets/appliction_imgs/sms/sms_contect_3/img_1.png" alt="">
                        </span>
                    </div>

                    <!-- Step 2 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">2</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Create Smart URL</h3>
                            <p class="om-step-detail">Click New Smart URL.</p>
                        </div>
                    </div>

                    <!-- img step -->
                    <div class="step_impear">
                        <span class="img_box">
                            <img src="assets/appliction_imgs/sms/sms_contect_3/img_2.png" alt="">
                        </span>
                    </div>

                    <!-- Step 3 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">3</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Configure Smart URL</h3>
                            <p class="om-step-detail">Enter URL details and Smart URL settings.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">4</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Generate URL</h3>
                            <p class="om-step-detail">Paste the long URL and click Generate.</p>
                        </div>
                    </div>

                    <!-- img step -->
                    <div class="step_impear">
                        <span class="img_box">
                            <img src="assets/appliction_imgs/sms/sms_contect_3/img_3.png" alt="">
                        </span>
                    </div>
                    
                    <!-- img step -->
                    <div class="step_impear">
                        <span class="img_box">
                            <img src="assets/appliction_imgs/sms/sms_contect_3/img_4.png" alt="">
                        </span>
                    </div>

                    <!-- Step 5 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">5</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Save Smart URL</h3>
                            <p class="om-step-detail">Verify generated Smart URL and click Save.</p>
                        </div>
                    </div>

                    <!-- img step -->
                    <div class="step_impear">
                        <span class="img_box">
                            <img src="assets/appliction_imgs/sms/sms_contect_3/img_5.png" alt="">
                        </span>
                    </div>

                </div>

                <!-- line -->
                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Smart URL Fields
                    </span>
                </div>

                <!-- table  -->
                <div class="qunike-table-container">
                    <table class="qunike-table">
                        <thead>
                            <tr>
                                <th>FIELD</th>
                                <th>DESCRIPTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>Website or campaign name</td>
                            </tr>
                            <tr>
                                <td>Domain Name</td>
                                <td>Select the domain created earlier</td>
                            </tr>
                            <tr>
                                <td>URL Type</td>
                                <td>Static or Dynamic</td>
                            </tr>

                            <tr>
                                <td>Tiny URL Name</td>
                                <td>Custom short URL name</td>

                            </tr>

                            <tr>
                                <td>Expiry Date</td>
                                <td>Expiration date of Smart URL</td>
                            </tr>

                            <tr>
                                <td>Web Address</td>
                                <td>Paste the long URL</td>
                            </tr>

                           
                        </tbody>
                    </table>
                </div>

                <!-- line -->
                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Step 2: Use Smart URL in SMS Campaign
                    </span>
                </div>

                <p style="margin-top: 30px;">Navigation: <b>Campaign  → SMS Campaign</b></p>

                <!-- steps with img -->
                <div class="om-guide-shell">

                    <!-- Step 1 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">1</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Open Campaign Page</h3>
                            <p class="om-step-detail">Open the SMS Campaign page.</p>
                        </div>
                    </div>

                    

                    <!-- Step 2 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">2</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Enable Tiny Campaign</h3>
                            <p class="om-step-detail">Enable the Tiny Campaign option.</p>
                        </div>
                    </div>

                    <!-- img step -->
                    <div class="step_impear">
                        <span class="img_box">
                            <img src="assets/appliction_imgs/sms/sms_contect_3/img_6.png" alt="">
                        </span>
                    </div>

                    <!-- Step 3 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">3</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Click Insert Link</h3>
                            <p class="om-step-detail">Click Insert Link below the Message Text area.</p>
                        </div>
                    </div>

                    <!-- img step -->
                    <div class="step_impear">
                        <span class="img_box">
                            <img src="assets/appliction_imgs/sms/sms_contect_3/img_7.png" alt="">
                        </span>
                    </div>

                    <!-- Step 4 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">4</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Select Smart URL</h3>
                            <p class="om-step-detail">A popup window will display all available Smart URLs. Select the required Smart URL.</p>
                        </div>
                    </div>

                   
                    <!-- Step 5 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">5</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Insert URL into Message</h3>
                            <p class="om-step-detail">The selected Smart URL will automatically be inserted into the message.</p>
                        </div>
                    </div>

                    

                </div>

                <!--notification yellow -->
                <div class="hdah651" style="margin-top: 10px;">
                    <div class="om-step-card" style="border-left: 8px solid #a76e04; background: #fdf3e7;">
                        <div class="">⚠️</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #0c4b07;display:none; ">Expected Result</h3>
                            <p class="om-step-detail" style="color: #967331;">
                                If Tiny Campaign is not enabled, the Insert Link option will not be available.</p>
                        </div>
                    </div>
                </div>

                    <!-- line -->
                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Step 3: Select SMS Template
                    </span>
                </div>

                
                <!-- steps with img -->
                <div class="om-guide-shell">

                    <!-- Step 1 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">1</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Select Sender ID</h3>
                            <p class="om-step-detail">Select the required Sender ID.</p>
                        </div>
                    </div>

                     <!-- img step -->
                    <div class="step_impear">
                        <span class="img_box">
                            <img src="assets/appliction_imgs/sms/sms_contect_3/img_8.png" alt="">
                        </span>
                    </div>

                    <!-- Step 2 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">2</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Click Select Template</h3>
                            <p class="om-step-detail">Click Select Template.</p>
                        </div>
                    </div>

                    

                    <!-- Step 3 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">3</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Open DLT Template Window</h3>
                            <p class="om-step-detail">The Select DLT Template window will open.</p>
                        </div>
                    </div>

                   

                    <!-- Step 4 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">4</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Choose Template</h3>
                            <p class="om-step-detail">Select the required DLT-approved template.</p>
                        </div>
                    </div>

                   
                    <!-- Step 5 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">5</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Confirm Selection</h3>
                            <p class="om-step-detail">Click to confirm the selected template.</p>
                        </div>
                    </div>

                    

                </div>


                <!-- line -->
                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Step 4: Replace the Numeric Placeholder
                    </span>
                </div>

                
                <!-- steps with img -->
                <div class="om-guide-shell">

                    <!-- Step 1 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">1</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Locate Placeholder</h3>
                            <p class="om-step-detail">Locate the {#numeric#} placeholder in the SMS template.</p>
                        </div>
                    </div>

                     <!-- img step -->
                    <div class="step_impear">
                        <span class="img_box">
                            <img src="assets/appliction_imgs/sms/sms_contect_3/img_9.png" alt="">
                        </span>
                    </div>

                    <!-- Step 2 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">2</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Replace Placeholder</h3>
                            <p class="om-step-detail">Replace the placeholder with the generated Smart URL.</p>
                        </div>
                    </div>

                      <!-- img step -->
                    <div class="step_impear">
                        <span class="img_box">
                            <img src="assets/appliction_imgs/sms/sms_contect_3/img_10.png" alt="">
                        </span>
                    </div>

                    <!-- Step 3 -->
                    <div class="om-step-card">
                        <div class="om-circle-badge">3</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title">Verify Preview</h3>
                            <p class="om-step-detail">The SMS preview will immediately reflect the updated message.</p>
                        </div>
                    </div>

                </div>

                <!-- line -->
                <div class="line_rola" style="width: 80%;margin:auto;margin-top: 30px;">
                    <span style="position: absolute;top: -15px;left: 0;background: #fff;padding: 1px 10px;">
                        Final Result
                    </span>
                </div>

                <!--notification -->
                <div class="hdah651" style="margin-top: 30px;">
                    <div class="om-step-card" style="border-left: 8px solid #03810a; background: #e7fde8;">
                        <div class="">✅</div>
                        <div class="om-card-left">
                            <h3 class="om-step-title" style="color: #0c4b07;">Final Result</h3>
                            <p class="om-step-detail" style="color: #31964f;">
                                The recipient receives a message containing a Smart URL instead of a long URL. This reduces SMS length, improves readability, and provides click tracking.</p>
                        </div>
                    </div>
                </div>

                 <!-- preview and next btn -->
                <div class="void-control-deck">

                    <!-- Left Button (Previous) -->
                    <a class="chrono-portal align-port-left " onclick="event.preventDefault(); document.getElementById('contect__2').click(); document.getElementById('sms_btn_124').classList.add('active'); document.getElementById('sms_sub_box').classList.add('sub_links_of_show_box'); ">
                        <span class="ghost-ink">← PREVIOUS</span>
                        <span class="solid-ink">Create Campaign</span>
                    </a>

                    <!-- Right Button (Next) -->
                    <a class="chrono-portal align-port-right " onclick="event.preventDefault(); document.getElementById('contect__4').click(); document.getElementById('sms_btn_124').classList.add('active'); document.getElementById('sms_sub_box').classList.add('sub_links_of_show_box'); ">

                        <!-- event.preventDefault(); document.getElementById('contect__2').click(); document.getElementById('sms_btn_124').click(); -->
                        <span class="ghost-ink">NEXT →</span>
                        <span class="solid-ink">Manage Sender ID</span>
                    </a>

                </div>



            </section>

            <!-- sublink box 4 -->
            <section id="contect_4_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                4
            </section>

            <!-- sublink box 5 -->
            <section id="contect_5_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                5
            </section>

            <!-- sublink box 6 -->
            <section id="contect_6_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                6
            </section>

            <!-- sublink box 7 -->
            <section id="contect_7_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                7
            </section>

            <!-- sublink box 8 -->
            <section id="contect_8_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                8
            </section>

            <!-- sublink box 9 -->
            <section id="contect_9_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                9
            </section>

            <!-- sublink box 10 -->
            <section id="contect_10_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                10
            </section>

            <!-- sublink box 11 -->
            <section id="contect_11_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                11
            </section>

            <!-- sublink box 12 -->
            <section id="contect_12_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                12
            </section>

            <!-- sublink box 13 -->
            <section id="contect_13_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                13
            </section>

            <!-- sublink box 14 -->
            <section id="contect_14_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                14
            </section>

            <!-- sublink box 15 -->
            <section id="contect_15_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                15
            </section>

            <!-- sublink box 16 -->
            <section id="contect_16_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                16
            </section>

            <!-- sublink box 17 -->
            <section id="contect_17_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                17
            </section>

            <!-- sublink box 18 -->
            <section id="contect_18_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                18
            </section>

            <!-- sublink box 19 -->
            <section id="contect_19_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                19
            </section>

            <!-- sublink box 20 -->
            <section id="contect_20_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                20
            </section>

            <!-- sublink box 21 -->
            <section id="contect_21_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                21
            </section>

            <!-- sublink box 22 -->
            <section id="contect_22_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                22
            </section>

            <!-- sublink box 23 -->
            <section id="contect_23_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                23
            </section>

            <!-- sublink box 24 -->
            <section id="contect_24_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                24
            </section>

            <!-- sublink box 25 -->
            <section id="contect_25_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                25
            </section>

            <!-- sublink box 26 -->
            <section id="contect_26_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                26
            </section>

            <!-- sublink box 27 -->
            <section id="contect_27_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                27
            </section>

            <!-- sublink box 28 -->
            <section id="contect_28_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                28
            </section>

            <!-- sublink box 29 -->
            <section id="contect_29_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                29
            </section>

            <!-- sublink box 30 -->
            <section id="contect_30_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                30
            </section>

            <!-- sublink box 31 -->
            <section id="contect_31_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                31
            </section>

            <!-- sublink box 32 -->
            <section id="contect_32_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                32
            </section>

            <!-- sublink box 33 -->
            <section id="contect_33_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                33
            </section>

            <!-- sublink box 34 -->
            <section id="contect_34_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                34
            </section>

            <!-- sublink box 35 -->
            <section id="contect_35_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                35
            </section>

            <!-- sublink box 36 -->
            <section id="contect_36_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                36
            </section>

            <!-- sublink box 37 -->
            <section id="contect_37_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                37
            </section>

            <!-- sublink box 38 -->
            <section id="contect_38_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                38
            </section>

            <!-- sublink box 39 -->
            <section id="contect_39_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                39
            </section>

            <!-- sublink box 40 -->
            <section id="contect_40_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                40
            </section>

            <!-- sublink box 41 -->
            <section id="contect_41_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                41
            </section>

            <!-- sublink box 42 -->
            <section id="contect_42_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                42
            </section>

            <!-- sublink box 43 -->
            <section id="contect_43_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                43
            </section>

            <!-- sublink box 44 -->
            <section id="contect_44_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                44
            </section>

            <!-- sublink box 45 -->
            <section id="contect_45_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                45
            </section>

            <!-- sublink box 46 -->
            <section id="contect_46_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                46
            </section>

            <!-- sublink box 47 -->
            <section id="contect_47_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                47
            </section>

            <!-- sublink box 48 -->
            <section id="contect_48_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                48
            </section>

            <!-- sublink box 49 -->
            <section id="contect_49_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                49
            </section>

            <!-- sublink box 50 -->
            <section id="contect_50_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                50
            </section>

            <!-- sublink box 51 -->
            <section id="contect_51_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                51
            </section>

            <!-- sublink box 52 -->
            <section id="contect_52_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                52
            </section>

            <!-- sublink box 53 -->
            <section id="contect_53_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                53
            </section>

            <!-- sublink box 54 -->
            <section id="contect_54_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                54
            </section>

            <!-- sublink box 55 -->
            <section id="contect_55_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                55
            </section>

            <!-- sublink box 56 -->
            <section id="contect_56_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                56
            </section>

            <!-- sublink box 57 -->
            <section id="contect_57_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                57
            </section>

            <!-- sublink box 58 -->
            <section id="contect_58_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                58
            </section>

            <!-- sublink box 59 -->
            <section id="contect_59_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                59
            </section>

            <!-- sublink box 60 -->
            <section id="contect_60_contect_box" class="section_sub_with all_sejmca8974 auto_margin_notwa">
                60
            </section>


        </section>

    </section>
    <script>
        const haamer_id_btn = document.getElementById("haamer_id_adase");
        let dash_box_slie = document.getElementById("left_section_box");
        let close_linw969 = document.getElementById("close_linw969");
        let haw_linw969 = document.getElementById("haw_linw969");

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


            // btn sole here 
            let overview_btn_124 = document.getElementById("overview_btn_124");
            let login_btn_124 = document.getElementById("login_btn_124");
            let dashbord_btn_124 = document.getElementById("dashbord_btn_124");

            let sms_btn_124 = document.getElementById("sms_btn_124");
            let rcs_btn_124 = document.getElementById("rcs_btn_124");
            let whatsapp_btn_124 = document.getElementById("whatsapp_btn_124");
            let voice_btn_124 = document.getElementById("voice_btn_124");
            let ivr_btn_124 = document.getElementById("ivr_btn_124");
            let click_to_call_btn_124 = document.getElementById("click_to_call_btn_124");
            let text_to_speech_btn_124 = document.getElementById("text_to_speech_btn_124");
            let ai_agent_btn_124 = document.getElementById("ai_agent_btn_124");

            let journeys_btn_124 = document.getElementById("journeys_btn_124");


            // if koi btn pa click kar to ya chale ga 
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

            // all sub btn 
            let contect__1 = document.getElementById("contect__1");
            let contect__2 = document.getElementById("contect__2");
            let contect__3 = document.getElementById("contect__3");
            let contect__4 = document.getElementById("contect__4");
            let contect__5 = document.getElementById("contect__5");
            let contect__6 = document.getElementById("contect__6");
            let contect__7 = document.getElementById("contect__7");
            let contect__8 = document.getElementById("contect__8");
            let contect__9 = document.getElementById("contect__9");
            let contect__10 = document.getElementById("contect__10");
            let contect__11 = document.getElementById("contect__11");
            let contect__12 = document.getElementById("contect__12");
            let contect__13 = document.getElementById("contect__13");
            let contect__14 = document.getElementById("contect__14");
            let contect__15 = document.getElementById("contect__15");
            let contect__16 = document.getElementById("contect__16");
            let contect__17 = document.getElementById("contect__17");
            let contect__18 = document.getElementById("contect__18");
            let contect__19 = document.getElementById("contect__19");
            let contect__20 = document.getElementById("contect__20");
            let contect__21 = document.getElementById("contect__21");
            let contect__22 = document.getElementById("contect__22");
            let contect__23 = document.getElementById("contect__23");
            let contect__24 = document.getElementById("contect__24");
            let contect__25 = document.getElementById("contect__25");
            let contect__26 = document.getElementById("contect__26");
            let contect__27 = document.getElementById("contect__27");
            let contect__28 = document.getElementById("contect__28");
            let contect__29 = document.getElementById("contect__29");
            let contect__30 = document.getElementById("contect__30");
            let contect__31 = document.getElementById("contect__31");
            let contect__32 = document.getElementById("contect__32");
            let contect__33 = document.getElementById("contect__33");
            let contect__34 = document.getElementById("contect__34");
            let contect__35 = document.getElementById("contect__35");
            let contect__36 = document.getElementById("contect__36");
            let contect__37 = document.getElementById("contect__37");
            let contect__38 = document.getElementById("contect__38");
            let contect__39 = document.getElementById("contect__39");
            let contect__40 = document.getElementById("contect__40");
            let contect__41 = document.getElementById("contect__41");
            let contect__42 = document.getElementById("contect__42");
            let contect__43 = document.getElementById("contect__43");
            let contect__44 = document.getElementById("contect__44");
            let contect__45 = document.getElementById("contect__45");
            let contect__46 = document.getElementById("contect__46");
            let contect__47 = document.getElementById("contect__47");
            let contect__48 = document.getElementById("contect__48");
            let contect__49 = document.getElementById("contect__49");
            let contect__50 = document.getElementById("contect__50");
            let contect__51 = document.getElementById("contect__51");
            let contect__52 = document.getElementById("contect__52");
            let contect__53 = document.getElementById("contect__53");
            let contect__54 = document.getElementById("contect__54");
            let contect__55 = document.getElementById("contect__55");
            let contect__56 = document.getElementById("contect__56");
            let contect__57 = document.getElementById("contect__57");
            let contect__58 = document.getElementById("contect__58");
            let contect__59 = document.getElementById("contect__59");
            let contect__60 = document.getElementById("contect__60");

            contect__1.classList.remove("active");
            contect__2.classList.remove("active");
            contect__3.classList.remove("active");
            contect__4.classList.remove("active");
            contect__5.classList.remove("active");
            contect__6.classList.remove("active");
            contect__7.classList.remove("active");
            contect__8.classList.remove("active");
            contect__9.classList.remove("active");
            contect__10.classList.remove("active");
            contect__11.classList.remove("active");
            contect__12.classList.remove("active");
            contect__13.classList.remove("active");
            contect__14.classList.remove("active");
            contect__15.classList.remove("active");
            contect__16.classList.remove("active");
            contect__17.classList.remove("active");
            contect__18.classList.remove("active");
            contect__19.classList.remove("active");
            contect__20.classList.remove("active");
            contect__21.classList.remove("active");
            contect__22.classList.remove("active");
            contect__23.classList.remove("active");
            contect__24.classList.remove("active");
            contect__25.classList.remove("active");
            contect__26.classList.remove("active");
            contect__27.classList.remove("active");
            contect__28.classList.remove("active");
            contect__29.classList.remove("active");
            contect__30.classList.remove("active");
            contect__31.classList.remove("active");
            contect__32.classList.remove("active");
            contect__33.classList.remove("active");
            contect__34.classList.remove("active");
            contect__35.classList.remove("active");
            contect__36.classList.remove("active");
            contect__37.classList.remove("active");
            contect__38.classList.remove("active");
            contect__39.classList.remove("active");
            contect__40.classList.remove("active");
            contect__41.classList.remove("active");
            contect__42.classList.remove("active");
            contect__43.classList.remove("active");
            contect__44.classList.remove("active");
            contect__45.classList.remove("active");
            contect__46.classList.remove("active");
            contect__47.classList.remove("active");
            contect__48.classList.remove("active");
            contect__49.classList.remove("active");
            contect__50.classList.remove("active");
            contect__51.classList.remove("active");
            contect__52.classList.remove("active");
            contect__53.classList.remove("active");
            contect__54.classList.remove("active");
            contect__55.classList.remove("active");
            contect__56.classList.remove("active");
            contect__57.classList.remove("active");
            contect__58.classList.remove("active");
            contect__59.classList.remove("active");
            contect__60.classList.remove("active");
            // all sub boxs 
            let contect_box_1 = document.getElementById("contect_1_contect_box");
            let contect_box_2 = document.getElementById("contect_2_contect_box");
            let contect_box_3 = document.getElementById("contect_3_contect_box");
            let contect_box_4 = document.getElementById("contect_4_contect_box");
            let contect_box_5 = document.getElementById("contect_5_contect_box");
            let contect_box_6 = document.getElementById("contect_6_contect_box");
            let contect_box_7 = document.getElementById("contect_7_contect_box");
            let contect_box_8 = document.getElementById("contect_8_contect_box");
            let contect_box_9 = document.getElementById("contect_9_contect_box");
            let contect_box_10 = document.getElementById("contect_10_contect_box");
            let contect_box_11 = document.getElementById("contect_11_contect_box");
            let contect_box_12 = document.getElementById("contect_12_contect_box");
            let contect_box_13 = document.getElementById("contect_13_contect_box");
            let contect_box_14 = document.getElementById("contect_14_contect_box");
            let contect_box_15 = document.getElementById("contect_15_contect_box");
            let contect_box_16 = document.getElementById("contect_16_contect_box");
            let contect_box_17 = document.getElementById("contect_17_contect_box");
            let contect_box_18 = document.getElementById("contect_18_contect_box");
            let contect_box_19 = document.getElementById("contect_19_contect_box");
            let contect_box_20 = document.getElementById("contect_20_contect_box");
            let contect_box_21 = document.getElementById("contect_21_contect_box");
            let contect_box_22 = document.getElementById("contect_22_contect_box");
            let contect_box_23 = document.getElementById("contect_23_contect_box");
            let contect_box_24 = document.getElementById("contect_24_contect_box");
            let contect_box_25 = document.getElementById("contect_25_contect_box");
            let contect_box_26 = document.getElementById("contect_26_contect_box");
            let contect_box_27 = document.getElementById("contect_27_contect_box");
            let contect_box_28 = document.getElementById("contect_28_contect_box");
            let contect_box_29 = document.getElementById("contect_29_contect_box");
            let contect_box_30 = document.getElementById("contect_30_contect_box");
            let contect_box_31 = document.getElementById("contect_31_contect_box");
            let contect_box_32 = document.getElementById("contect_32_contect_box");
            let contect_box_33 = document.getElementById("contect_33_contect_box");
            let contect_box_34 = document.getElementById("contect_34_contect_box");
            let contect_box_35 = document.getElementById("contect_35_contect_box");
            let contect_box_36 = document.getElementById("contect_36_contect_box");
            let contect_box_37 = document.getElementById("contect_37_contect_box");
            let contect_box_38 = document.getElementById("contect_38_contect_box");
            let contect_box_39 = document.getElementById("contect_39_contect_box");
            let contect_box_40 = document.getElementById("contect_40_contect_box");
            let contect_box_41 = document.getElementById("contect_41_contect_box");
            let contect_box_42 = document.getElementById("contect_42_contect_box");
            let contect_box_43 = document.getElementById("contect_43_contect_box");
            let contect_box_44 = document.getElementById("contect_44_contect_box");
            let contect_box_45 = document.getElementById("contect_45_contect_box");
            let contect_box_46 = document.getElementById("contect_46_contect_box");
            let contect_box_47 = document.getElementById("contect_47_contect_box");
            let contect_box_48 = document.getElementById("contect_48_contect_box");
            let contect_box_49 = document.getElementById("contect_49_contect_box");
            let contect_box_50 = document.getElementById("contect_50_contect_box");
            let contect_box_51 = document.getElementById("contect_51_contect_box");
            let contect_box_52 = document.getElementById("contect_52_contect_box");
            let contect_box_53 = document.getElementById("contect_53_contect_box");
            let contect_box_54 = document.getElementById("contect_54_contect_box");
            let contect_box_55 = document.getElementById("contect_55_contect_box");
            let contect_box_56 = document.getElementById("contect_56_contect_box");
            let contect_box_57 = document.getElementById("contect_57_contect_box");
            let contect_box_58 = document.getElementById("contect_58_contect_box");
            let contect_box_59 = document.getElementById("contect_59_contect_box");
            let contect_box_60 = document.getElementById("contect_60_contect_box");


            contect_box_1.classList.remove("show_active");
            contect_box_2.classList.remove("show_active");
            contect_box_3.classList.remove("show_active");
            contect_box_4.classList.remove("show_active");
            contect_box_5.classList.remove("show_active");
            contect_box_6.classList.remove("show_active");
            contect_box_7.classList.remove("show_active");
            contect_box_8.classList.remove("show_active");
            contect_box_9.classList.remove("show_active");
            contect_box_10.classList.remove("show_active");
            contect_box_11.classList.remove("show_active");
            contect_box_12.classList.remove("show_active");
            contect_box_13.classList.remove("show_active");
            contect_box_14.classList.remove("show_active");
            contect_box_15.classList.remove("show_active");
            contect_box_16.classList.remove("show_active");
            contect_box_17.classList.remove("show_active");
            contect_box_18.classList.remove("show_active");
            contect_box_19.classList.remove("show_active");
            contect_box_20.classList.remove("show_active");
            contect_box_21.classList.remove("show_active");
            contect_box_22.classList.remove("show_active");
            contect_box_23.classList.remove("show_active");
            contect_box_24.classList.remove("show_active");
            contect_box_25.classList.remove("show_active");
            contect_box_26.classList.remove("show_active");
            contect_box_27.classList.remove("show_active");
            contect_box_28.classList.remove("show_active");
            contect_box_29.classList.remove("show_active");
            contect_box_30.classList.remove("show_active");
            contect_box_31.classList.remove("show_active");
            contect_box_32.classList.remove("show_active");
            contect_box_33.classList.remove("show_active");
            contect_box_34.classList.remove("show_active");
            contect_box_35.classList.remove("show_active");
            contect_box_36.classList.remove("show_active");
            contect_box_37.classList.remove("show_active");
            contect_box_38.classList.remove("show_active");
            contect_box_39.classList.remove("show_active");
            contect_box_40.classList.remove("show_active");
            contect_box_41.classList.remove("show_active");
            contect_box_42.classList.remove("show_active");
            contect_box_43.classList.remove("show_active");
            contect_box_44.classList.remove("show_active");
            contect_box_45.classList.remove("show_active");
            contect_box_46.classList.remove("show_active");
            contect_box_47.classList.remove("show_active");
            contect_box_48.classList.remove("show_active");
            contect_box_49.classList.remove("show_active");
            contect_box_50.classList.remove("show_active");
            contect_box_51.classList.remove("show_active");
            contect_box_52.classList.remove("show_active");
            contect_box_53.classList.remove("show_active");
            contect_box_54.classList.remove("show_active");
            contect_box_55.classList.remove("show_active");
            contect_box_56.classList.remove("show_active");
            contect_box_57.classList.remove("show_active");
            contect_box_58.classList.remove("show_active");
            contect_box_59.classList.remove("show_active");
            contect_box_60.classList.remove("show_active");

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

                dash_box_slie.classList.toggle("dashbord_revile_gl");
                haamer_id_btn.classList.toggle("haamer_btn_nikw5");

                if (haamer_id_btn.classList.contains("haamer_btn_nikw5")) {

                    close_linw969.style.display = "flex";
                    haw_linw969.style.display = "none";

                } else {

                    close_linw969.style.display = "none";
                    haw_linw969.style.display = "flex";

                }
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


        function show_sub_link(el) {

            let sms_sub_box = document.getElementById("sms_sub_box");
            let rcs_sub_box = document.getElementById("rcs_sub_box");
            let whatsapp_sub_box = document.getElementById("whatsapp_sub_box");
            let voice_sub_box = document.getElementById("voice_sub_box");
            let ivr_sub_box = document.getElementById("ivr_sub_box");
            let click_to_call_sub_box = document.getElementById("click_to_call_sub_box");
            let text_to_speech_sub_box = document.getElementById("text_to_speech_sub_box");
            let ai_agent_sub_box = document.getElementById("ai_agent_sub_box");
            let journeys_sub_box = document.getElementById("journeys_sub_box");

            let sub_value = el.dataset.set;

            sms_sub_box.classList.remove("sub_links_of_show_box");
            rcs_sub_box.classList.remove("sub_links_of_show_box");
            whatsapp_sub_box.classList.remove("sub_links_of_show_box");
            voice_sub_box.classList.remove("sub_links_of_show_box");
            ivr_sub_box.classList.remove("sub_links_of_show_box");
            click_to_call_sub_box.classList.remove("sub_links_of_show_box");
            text_to_speech_sub_box.classList.remove("sub_links_of_show_box");
            ai_agent_sub_box.classList.remove("sub_links_of_show_box");
            journeys_sub_box.classList.remove("sub_links_of_show_box");



            // sub_links_of_show_box
            if (sub_value === "sms") {
                sms_sub_box.classList.toggle("sub_links_of_show_box")
            }

            if (sub_value === "rcs") {
                rcs_sub_box.classList.toggle("sub_links_of_show_box")

            }

            if (sub_value === "whatsapp") {
                whatsapp_sub_box.classList.toggle("sub_links_of_show_box")

            }

            if (sub_value === "voice") {
                voice_sub_box.classList.toggle("sub_links_of_show_box")

            }

            if (sub_value === "ivr") {
                ivr_sub_box.classList.toggle("sub_links_of_show_box")

            }

            if (sub_value === "click_to_call") {
                click_to_call_sub_box.classList.toggle("sub_links_of_show_box")

            }

            if (sub_value === "text_to_speech") {
                text_to_speech_sub_box.classList.toggle("sub_links_of_show_box")

            }
            if (sub_value === "ai_agent") {
                ai_agent_sub_box.classList.toggle("sub_links_of_show_box")

            }
            if (sub_value === "journeys") {
                journeys_sub_box.classList.toggle("sub_links_of_show_box")

            }

        }


        function link_sole_action(el) {

            let box_id = el.dataset.set;

            // Jis submenu ke andar clicked item hai
            let parent_box = el.closest(".sub_links_of_allawn");

            if (parent_box) {

                // Pehle sabhi items se active hatao
                parent_box.querySelectorAll(".sole78m").forEach(function(item) {
                    item.classList.remove("active");
                });

                // Sirf clicked item ko active karo
                el.classList.add("active");
            }

            // all sub boxs 
            let contect_box_1 = document.getElementById("contect_1_contect_box");
            let contect_box_2 = document.getElementById("contect_2_contect_box");
            let contect_box_3 = document.getElementById("contect_3_contect_box");
            let contect_box_4 = document.getElementById("contect_4_contect_box");
            let contect_box_5 = document.getElementById("contect_5_contect_box");
            let contect_box_6 = document.getElementById("contect_6_contect_box");
            let contect_box_7 = document.getElementById("contect_7_contect_box");
            let contect_box_8 = document.getElementById("contect_8_contect_box");
            let contect_box_9 = document.getElementById("contect_9_contect_box");
            let contect_box_10 = document.getElementById("contect_10_contect_box");
            let contect_box_11 = document.getElementById("contect_11_contect_box");
            let contect_box_12 = document.getElementById("contect_12_contect_box");
            let contect_box_13 = document.getElementById("contect_13_contect_box");
            let contect_box_14 = document.getElementById("contect_14_contect_box");
            let contect_box_15 = document.getElementById("contect_15_contect_box");
            let contect_box_16 = document.getElementById("contect_16_contect_box");
            let contect_box_17 = document.getElementById("contect_17_contect_box");
            let contect_box_18 = document.getElementById("contect_18_contect_box");
            let contect_box_19 = document.getElementById("contect_19_contect_box");
            let contect_box_20 = document.getElementById("contect_20_contect_box");
            let contect_box_21 = document.getElementById("contect_21_contect_box");
            let contect_box_22 = document.getElementById("contect_22_contect_box");
            let contect_box_23 = document.getElementById("contect_23_contect_box");
            let contect_box_24 = document.getElementById("contect_24_contect_box");
            let contect_box_25 = document.getElementById("contect_25_contect_box");
            let contect_box_26 = document.getElementById("contect_26_contect_box");
            let contect_box_27 = document.getElementById("contect_27_contect_box");
            let contect_box_28 = document.getElementById("contect_28_contect_box");
            let contect_box_29 = document.getElementById("contect_29_contect_box");
            let contect_box_30 = document.getElementById("contect_30_contect_box");
            let contect_box_31 = document.getElementById("contect_31_contect_box");
            let contect_box_32 = document.getElementById("contect_32_contect_box");
            let contect_box_33 = document.getElementById("contect_33_contect_box");
            let contect_box_34 = document.getElementById("contect_34_contect_box");
            let contect_box_35 = document.getElementById("contect_35_contect_box");
            let contect_box_36 = document.getElementById("contect_36_contect_box");
            let contect_box_37 = document.getElementById("contect_37_contect_box");
            let contect_box_38 = document.getElementById("contect_38_contect_box");
            let contect_box_39 = document.getElementById("contect_39_contect_box");
            let contect_box_40 = document.getElementById("contect_40_contect_box");
            let contect_box_41 = document.getElementById("contect_41_contect_box");
            let contect_box_42 = document.getElementById("contect_42_contect_box");
            let contect_box_43 = document.getElementById("contect_43_contect_box");
            let contect_box_44 = document.getElementById("contect_44_contect_box");
            let contect_box_45 = document.getElementById("contect_45_contect_box");
            let contect_box_46 = document.getElementById("contect_46_contect_box");
            let contect_box_47 = document.getElementById("contect_47_contect_box");
            let contect_box_48 = document.getElementById("contect_48_contect_box");
            let contect_box_49 = document.getElementById("contect_49_contect_box");
            let contect_box_50 = document.getElementById("contect_50_contect_box");
            let contect_box_51 = document.getElementById("contect_51_contect_box");
            let contect_box_52 = document.getElementById("contect_52_contect_box");
            let contect_box_53 = document.getElementById("contect_53_contect_box");
            let contect_box_54 = document.getElementById("contect_54_contect_box");
            let contect_box_55 = document.getElementById("contect_55_contect_box");
            let contect_box_56 = document.getElementById("contect_56_contect_box");
            let contect_box_57 = document.getElementById("contect_57_contect_box");
            let contect_box_58 = document.getElementById("contect_58_contect_box");
            let contect_box_59 = document.getElementById("contect_59_contect_box");
            let contect_box_60 = document.getElementById("contect_60_contect_box");


            contect_box_1.classList.remove("show_active");
            contect_box_2.classList.remove("show_active");
            contect_box_3.classList.remove("show_active");
            contect_box_4.classList.remove("show_active");
            contect_box_5.classList.remove("show_active");
            contect_box_6.classList.remove("show_active");
            contect_box_7.classList.remove("show_active");
            contect_box_8.classList.remove("show_active");
            contect_box_9.classList.remove("show_active");
            contect_box_10.classList.remove("show_active");
            contect_box_11.classList.remove("show_active");
            contect_box_12.classList.remove("show_active");
            contect_box_13.classList.remove("show_active");
            contect_box_14.classList.remove("show_active");
            contect_box_15.classList.remove("show_active");
            contect_box_16.classList.remove("show_active");
            contect_box_17.classList.remove("show_active");
            contect_box_18.classList.remove("show_active");
            contect_box_19.classList.remove("show_active");
            contect_box_20.classList.remove("show_active");
            contect_box_21.classList.remove("show_active");
            contect_box_22.classList.remove("show_active");
            contect_box_23.classList.remove("show_active");
            contect_box_24.classList.remove("show_active");
            contect_box_25.classList.remove("show_active");
            contect_box_26.classList.remove("show_active");
            contect_box_27.classList.remove("show_active");
            contect_box_28.classList.remove("show_active");
            contect_box_29.classList.remove("show_active");
            contect_box_30.classList.remove("show_active");
            contect_box_31.classList.remove("show_active");
            contect_box_32.classList.remove("show_active");
            contect_box_33.classList.remove("show_active");
            contect_box_34.classList.remove("show_active");
            contect_box_35.classList.remove("show_active");
            contect_box_36.classList.remove("show_active");
            contect_box_37.classList.remove("show_active");
            contect_box_38.classList.remove("show_active");
            contect_box_39.classList.remove("show_active");
            contect_box_40.classList.remove("show_active");
            contect_box_41.classList.remove("show_active");
            contect_box_42.classList.remove("show_active");
            contect_box_43.classList.remove("show_active");
            contect_box_44.classList.remove("show_active");
            contect_box_45.classList.remove("show_active");
            contect_box_46.classList.remove("show_active");
            contect_box_47.classList.remove("show_active");
            contect_box_48.classList.remove("show_active");
            contect_box_49.classList.remove("show_active");
            contect_box_50.classList.remove("show_active");
            contect_box_51.classList.remove("show_active");
            contect_box_52.classList.remove("show_active");
            contect_box_53.classList.remove("show_active");
            contect_box_54.classList.remove("show_active");
            contect_box_55.classList.remove("show_active");
            contect_box_56.classList.remove("show_active");
            contect_box_57.classList.remove("show_active");
            contect_box_58.classList.remove("show_active");
            contect_box_59.classList.remove("show_active");
            contect_box_60.classList.remove("show_active");

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

            contect_box_1.classList.remove("show_active");
            contect_box_2.classList.remove("show_active");
            contect_box_3.classList.remove("show_active");
            contect_box_4.classList.remove("show_active");
            contect_box_5.classList.remove("show_active");
            contect_box_6.classList.remove("show_active");
            contect_box_7.classList.remove("show_active");
            contect_box_8.classList.remove("show_active");
            contect_box_9.classList.remove("show_active");
            contect_box_10.classList.remove("show_active");
            contect_box_11.classList.remove("show_active");
            contect_box_12.classList.remove("show_active");
            contect_box_13.classList.remove("show_active");
            contect_box_14.classList.remove("show_active");
            contect_box_15.classList.remove("show_active");
            contect_box_16.classList.remove("show_active");
            contect_box_17.classList.remove("show_active");
            contect_box_18.classList.remove("show_active");
            contect_box_19.classList.remove("show_active");
            contect_box_20.classList.remove("show_active");
            contect_box_21.classList.remove("show_active");
            contect_box_22.classList.remove("show_active");
            contect_box_23.classList.remove("show_active");
            contect_box_24.classList.remove("show_active");
            contect_box_25.classList.remove("show_active");
            contect_box_26.classList.remove("show_active");
            contect_box_27.classList.remove("show_active");
            contect_box_28.classList.remove("show_active");
            contect_box_29.classList.remove("show_active");
            contect_box_30.classList.remove("show_active");
            contect_box_31.classList.remove("show_active");
            contect_box_32.classList.remove("show_active");
            contect_box_33.classList.remove("show_active");
            contect_box_34.classList.remove("show_active");
            contect_box_35.classList.remove("show_active");
            contect_box_36.classList.remove("show_active");
            contect_box_37.classList.remove("show_active");
            contect_box_38.classList.remove("show_active");
            contect_box_39.classList.remove("show_active");
            contect_box_40.classList.remove("show_active");
            contect_box_41.classList.remove("show_active");
            contect_box_42.classList.remove("show_active");
            contect_box_43.classList.remove("show_active");
            contect_box_44.classList.remove("show_active");
            contect_box_45.classList.remove("show_active");
            contect_box_46.classList.remove("show_active");
            contect_box_47.classList.remove("show_active");
            contect_box_48.classList.remove("show_active");
            contect_box_49.classList.remove("show_active");
            contect_box_50.classList.remove("show_active");
            contect_box_51.classList.remove("show_active");
            contect_box_52.classList.remove("show_active");
            contect_box_53.classList.remove("show_active");
            contect_box_54.classList.remove("show_active");
            contect_box_55.classList.remove("show_active");
            contect_box_56.classList.remove("show_active");
            contect_box_57.classList.remove("show_active");
            contect_box_58.classList.remove("show_active");
            contect_box_59.classList.remove("show_active");
            contect_box_60.classList.remove("show_active");




            if (box_id === "contect-1") {
                contect_box_1.classList.toggle("show_active");
            }

            if (box_id === "contect-2") {
                contect_box_2.classList.toggle("show_active");
            }

            if (box_id === "contect-3") {
                contect_box_3.classList.toggle("show_active");
            }

            if (box_id === "contect-4") {
                contect_box_4.classList.toggle("show_active");
            }

            if (box_id === "contect-5") {
                contect_box_5.classList.toggle("show_active");
            }

            if (box_id === "contect-6") {
                contect_box_6.classList.toggle("show_active");
            }

            if (box_id === "contect-7") {
                contect_box_7.classList.toggle("show_active");
            }

            if (box_id === "contect-8") {
                contect_box_8.classList.toggle("show_active");
            }

            if (box_id === "contect-9") {
                contect_box_9.classList.toggle("show_active");
            }

            if (box_id === "contect-10") {
                contect_box_10.classList.toggle("show_active");
            }

            if (box_id === "contect-11") {
                contect_box_11.classList.toggle("show_active");
            }

            if (box_id === "contect-12") {
                contect_box_12.classList.toggle("show_active");
            }

            if (box_id === "contect-13") {
                contect_box_13.classList.toggle("show_active");
            }

            if (box_id === "contect-14") {
                contect_box_14.classList.toggle("show_active");
            }

            if (box_id === "contect-15") {
                contect_box_15.classList.toggle("show_active");
            }

            if (box_id === "contect-16") {
                contect_box_16.classList.toggle("show_active");
            }

            if (box_id === "contect-17") {
                contect_box_17.classList.toggle("show_active");
            }

            if (box_id === "contect-18") {
                contect_box_18.classList.toggle("show_active");
            }

            if (box_id === "contect-19") {
                contect_box_19.classList.toggle("show_active");
            }

            if (box_id === "contect-20") {
                contect_box_20.classList.toggle("show_active");
            }

            if (box_id === "contect-21") {
                contect_box_21.classList.toggle("show_active");
            }

            if (box_id === "contect-22") {
                contect_box_22.classList.toggle("show_active");
            }

            if (box_id === "contect-23") {
                contect_box_23.classList.toggle("show_active");
            }

            if (box_id === "contect-24") {
                contect_box_24.classList.toggle("show_active");
            }

            if (box_id === "contect-25") {
                contect_box_25.classList.toggle("show_active");
            }

            if (box_id === "contect-26") {
                contect_box_26.classList.toggle("show_active");
            }

            if (box_id === "contect-27") {
                contect_box_27.classList.toggle("show_active");
            }

            if (box_id === "contect-28") {
                contect_box_28.classList.toggle("show_active");
            }

            if (box_id === "contect-29") {
                contect_box_29.classList.toggle("show_active");
            }

            if (box_id === "contect-30") {
                contect_box_30.classList.toggle("show_active");
            }

            if (box_id === "contect-31") {
                contect_box_31.classList.toggle("show_active");
            }

            if (box_id === "contect-32") {
                contect_box_32.classList.toggle("show_active");
            }

            if (box_id === "contect-33") {
                contect_box_33.classList.toggle("show_active");
            }

            if (box_id === "contect-34") {
                contect_box_34.classList.toggle("show_active");
            }

            if (box_id === "contect-35") {
                contect_box_35.classList.toggle("show_active");
            }

            if (box_id === "contect-36") {
                contect_box_36.classList.toggle("show_active");
            }

            if (box_id === "contect-37") {
                contect_box_37.classList.toggle("show_active");
            }

            if (box_id === "contect-38") {
                contect_box_38.classList.toggle("show_active");
            }

            if (box_id === "contect-39") {
                contect_box_39.classList.toggle("show_active");
            }

            if (box_id === "contect-40") {
                contect_box_40.classList.toggle("show_active");
            }

            if (box_id === "contect-41") {
                contect_box_41.classList.toggle("show_active");
            }

            if (box_id === "contect-42") {
                contect_box_42.classList.toggle("show_active");
            }

            if (box_id === "contect-43") {
                contect_box_43.classList.toggle("show_active");
            }

            if (box_id === "contect-44") {
                contect_box_44.classList.toggle("show_active");
            }

            if (box_id === "contect-45") {
                contect_box_45.classList.toggle("show_active");
            }

            if (box_id === "contect-46") {
                contect_box_46.classList.toggle("show_active");
            }

            if (box_id === "contect-47") {
                contect_box_47.classList.toggle("show_active");
            }

            if (box_id === "contect-48") {
                contect_box_48.classList.toggle("show_active");
            }

            if (box_id === "contect-49") {
                contect_box_49.classList.toggle("show_active");
            }

            if (box_id === "contect-50") {
                contect_box_50.classList.toggle("show_active");
            }

            if (box_id === "contect-51") {
                contect_box_51.classList.toggle("show_active");
            }

            if (box_id === "contect-52") {
                contect_box_52.classList.toggle("show_active");
            }

            if (box_id === "contect-53") {
                contect_box_53.classList.toggle("show_active");
            }

            if (box_id === "contect-54") {
                contect_box_54.classList.toggle("show_active");
            }

            if (box_id === "contect-55") {
                contect_box_55.classList.toggle("show_active");
            }

            if (box_id === "contect-56") {
                contect_box_56.classList.toggle("show_active");
            }

            if (box_id === "contect-57") {
                contect_box_57.classList.toggle("show_active");
            }

            if (box_id === "contect-58") {
                contect_box_58.classList.toggle("show_active");
            }

            if (box_id === "contect-59") {
                contect_box_59.classList.toggle("show_active");
            }

                if (box_id === "contect-60") {
                    contect_box_60.classList.toggle("show_active");
                }

        }


        function close_all_sub_links_ha() {
            let sms_sub_box = document.getElementById("sms_sub_box");
            let rcs_sub_box = document.getElementById("rcs_sub_box");
            let whatsapp_sub_box = document.getElementById("whatsapp_sub_box");
            let voice_sub_box = document.getElementById("voice_sub_box");
            let ivr_sub_box = document.getElementById("ivr_sub_box");
            let click_to_call_sub_box = document.getElementById("click_to_call_sub_box");
            let text_to_speech_sub_box = document.getElementById("text_to_speech_sub_box");
            let ai_agent_sub_box = document.getElementById("ai_agent_sub_box");
            let journeys_sub_box = document.getElementById("journeys_sub_box");

            sms_sub_box.classList.remove("sub_links_of_show_box");
            rcs_sub_box.classList.remove("sub_links_of_show_box");
            whatsapp_sub_box.classList.remove("sub_links_of_show_box");
            voice_sub_box.classList.remove("sub_links_of_show_box");
            ivr_sub_box.classList.remove("sub_links_of_show_box");
            click_to_call_sub_box.classList.remove("sub_links_of_show_box");
            text_to_speech_sub_box.classList.remove("sub_links_of_show_box");
            ai_agent_sub_box.classList.remove("sub_links_of_show_box");
            journeys_sub_box.classList.remove("sub_links_of_show_box");

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


<!-- Image Preview -->
<style>
    .qunike-img-preview {
        position: fixed;
        inset: 0;
        z-index: 999999;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 30px;
        background: rgba(0, 0, 0, 0.78);
        backdrop-filter: blur(3px);
    }

    .qunike-img-preview.qunike-img-preview-show {
        display: flex;
    }

    .qunike-img-preview-box {
        width: 90%;
        height: 90%;
        max-width: 1600px;
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 70px rgba(0, 0, 0, 0.35);
        animation: qunikeImageOpen 0.3s ease forwards;
    }

    .qunike-img-preview-top {
        height: 58px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 22px;
        background: #fff;
        border-bottom: 1px solid #e8e8e8;
    }

    .qunike-img-preview-title {
        font-size: 17px;
        font-weight: 600;
        color: #20283a;
    }

    .qunike-img-preview-close {
        width: 38px;
        height: 38px;
        border: none;
        border-radius: 50%;
        background: #f2f3f5;
        color: #20283a;
        font-size: 28px;
        line-height: 1;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.25s ease;
    }

    .qunike-img-preview-close:hover {
        background: #20283a;
        color: #fff;
        transform: rotate(90deg);
    }

    .qunike-img-preview-content {
        width: 100%;
        height: calc(100% - 58px);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 25px;
        box-sizing: border-box;
        background: #f8f9fa;
    }

    .qunike-img-preview-content img {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
        border-radius: 8px;
        animation: qunikeImageZoom 0.35s ease forwards;
    }

    @keyframes qunikeImageOpen {
        from {
            opacity: 0;
            transform: scale(0.94) translateY(15px);
        }

        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    @keyframes qunikeImageZoom {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }


    /* Mobile */

    @media (max-width: 768px) {

        .qunike-img-preview {
            padding: 15px;
        }

        .qunike-img-preview-box {
            width: 96%;
            height: 85%;
            border-radius: 14px;
        }

        .qunike-img-preview-top {
            height: 52px;
            padding: 0 15px;
        }

        .qunike-img-preview-title {
            font-size: 15px;
        }

        .qunike-img-preview-content {
            height: calc(100% - 52px);
            padding: 12px;
        }
    }
</style>
<div class="qunike-img-preview" id="qunikeImgPreview">
    <div class="qunike-img-preview-box">

        <div class="qunike-img-preview-top">
            <span class="qunike-img-preview-title">Image Preview</span>

            <button type="button"
                class="qunike-img-preview-close"
                onclick="qunikeCloseImage()">
                ×
            </button>
        </div>

        <div class="qunike-img-preview-content">
            <img id="qunikePreviewImage" src="" alt="Preview">
        </div>

    </div>
</div>
<script>
    function qunikeOpenImage(img) {

        const previewBox = document.getElementById("qunikeImgPreview");
        const previewImage = document.getElementById("qunikePreviewImage");

        if (!previewBox || !previewImage) return;

        previewImage.src = img.currentSrc || img.src;
        previewImage.alt = img.alt || "Image Preview";

        previewBox.classList.add("qunike-img-preview-show");

        document.body.style.overflow = "hidden";
    }


    function qunikeCloseImage() {

        const previewBox = document.getElementById("qunikeImgPreview");
        const previewImage = document.getElementById("qunikePreviewImage");

        if (!previewBox) return;

        previewBox.classList.remove("qunike-img-preview-show");

        if (previewImage) {
            previewImage.src = "";
        }

        document.body.style.overflow = "";
    }


    /* Automatically make every image clickable */

    document.addEventListener("click", function(e) {

        const clickedImage = e.target.closest("img");

        if (!clickedImage) return;

        /*
           Preview ke andar wali image par dobara open nahi hoga
        */
        if (clickedImage.id === "qunikePreviewImage") return;

        qunikeOpenImage({
            currentSrc: clickedImage.currentSrc,
            src: clickedImage.src,
            alt: clickedImage.alt
        });

    });


    /* Outside click se close */

    document.getElementById("qunikeImgPreview").addEventListener("click", function(e) {

        if (e.target === this) {
            qunikeCloseImage();
        }

    });


    /* ESC se close */

    document.addEventListener("keydown", function(e) {

        if (e.key === "Escape") {
            qunikeCloseImage();
        }

    });
</script>