<?php require_once __DIR__ . '/includes/header.php'; ?>

<main class="about-main">

        <style>
            :root {
                --orange: #ff6800;
                --navy: #0b1b2e;
                --navy2: #12304d;
                --cream: #fffaf4;
                --peach: #ffe9d6;
                --teal: #19b6a6;
                --sun: #ffc23c;
                --pink: #ff5d7d;
                --blue: #3b8be0;
                --ink: #1b2430;
                --muted: #5b6673;
                --line: #f0e2d3;
                --font: "Segoe UI", "Segoe UI Variable Text", system-ui, -apple-system, Roboto, "Helvetica Neue", Arial, sans-serif;
            }

            html {
                scroll-behavior: smooth
            }

            * {
                box-sizing: border-box;
                margin: 0
            }

            body {
                background: var(--cream);
                color: var(--ink);
                font-family: var(--font);
                font-size: 17px;
                line-height: 1.65;
                overflow-x: hidden;
                padding-top: env(safe-area-inset-top, 0px);
                padding-bottom: env(safe-area-inset-bottom, 0px)
            }

            a {
                color: inherit
            }

            h1,
            h2,
            h3,
            h4 {
                font-weight: 700;
                letter-spacing: -.02em;
                line-height: 1.08
            }

            h2 {
                font-size: clamp(32px, 4.4vw, 54px)
            }

            :focus-visible {
                outline: 3px solid var(--navy);
                outline-offset: 3px
            }

            .wrap {
                width: min(1180px, 92%);
                margin: auto
            }

            .ic {
                width: 24px;
                height: 24px;
                fill: none;
                stroke: currentColor;
                stroke-width: 1.8;
                stroke-linecap: round;
                stroke-linejoin: round;
                flex: none
            }

            .eyebrow {
                display: inline-block;
                font-size: 13px;
                font-weight: 700;
                letter-spacing: .14em;
                text-transform: uppercase;
                color: var(--orange);
                margin-bottom: 14px
            }

            .js .rv {
                opacity: 0;
                transform: translateY(28px);
                transition: opacity .7s ease, transform .7s ease
            }

            .js .rv.in {
                opacity: 1;
                transform: none
            }

            section {
                padding: 40px 0;
                position: relative
            }

            .head {
                max-width: 680px;
                margin-bottom: 52px
            }

            .head p {
                color: var(--muted);
                margin-top: 14px
            }

            .center {
                text-align: center;
                margin-inline: auto
            }

            .logo {
                font-weight: 800;
                font-size: 21px;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 10px
            }

            .logo svg {
                width: 34px;
                height: 34px
            }

            .links {
                display: flex;
                gap: 26px;
                align-items: center;
                font-weight: 600;
                font-size: 15px
            }

            .links a {
                text-decoration: none
            }

            .links a:hover {
                color: var(--orange)
            }

            .pill {
                background: var(--navy);
                color: #fff !important;
                padding: 11px 22px;
                border-radius: 999px;
                transition: transform .2s
            }

            .pill:hover {
                transform: scale(1.06) rotate(-2deg)
            }

            /* HERO */
            .hero .wrap.h {
                display: grid;
                grid-template-columns: 1.05fr .95fr;
                gap: 40px;
                align-items: center;
                padding: 40px 0 90px
            }

            .hero h1 {
                font-size: 44px;
                margin-bottom: 22px
            }

            .hero h1 em {
                font-style: normal;
                color: var(--orange);
                position: relative;
                white-space: nowrap
            }

            .hero p {
                color: var(--muted);
                font-size: 20px;
                max-width: 30em;
                margin-bottom: 30px
            }

            .btns {
                display: flex;
                flex-wrap: wrap;
                gap: 16px;
                align-items: center
            }

            .cta {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                background: var(--orange);
                color: #fff;
                font-weight: 700;
                padding: 16px 30px;
                border-radius: 14px;
                text-decoration: none;
                box-shadow: 0 6px 0 #c94f00;
                transition: transform .15s, box-shadow .15s
            }

            .cta:hover {
                transform: translateY(3px);
                box-shadow: 0 3px 0 #c94f00
            }

            .ghost {
                font-weight: 600;
                text-decoration: none;
                border-bottom: 2px solid var(--orange)
            }

            .proof {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                margin-top: 34px
            }

            .proof span {
                display: flex;
                align-items: center;
                gap: 8px;
                background: #fff;
                border: 1px solid var(--line);
                padding: 8px 16px 8px 12px;
                border-radius: 999px;
                font-weight: 600;
                font-size: 14px
            }

            .proof .ic {
                width: 20px;
                height: 20px;
                color: var(--orange)
            }

            .globe svg {
                width: 100%;
                height: auto;
                display: block;
                overflow: visible
            }

            .arc {
                stroke-dasharray: 5 9;
                animation: dash 2.5s linear infinite
            }

            .pulse {
                transform-box: fill-box;
                transform-origin: center;
                animation: ring 2.4s ease-out infinite
            }

            .pulse.p2 {
                animation-delay: .8s
            }

            .pulse.p3 {
                animation-delay: 1.6s
            }

            .floaty {
                animation: bob 5s ease-in-out infinite
            }

            .floaty.f2 {
                animation-delay: -2s
            }

            .floaty.f3 {
                animation-delay: -3.5s
            }

            @keyframes dash {
                to {
                    stroke-dashoffset: -56
                }
            }

            @keyframes ring {
                0% {
                    transform: scale(.4);
                    opacity: .9
                }

                100% {
                    transform: scale(2.4);
                    opacity: 0
                }
            }

            @keyframes bob {
                50% {
                    transform: translateY(-12px)
                }
            }

            @keyframes draw {
                to {
                    stroke-dashoffset: 0
                }
            }

            @keyframes slide {
                to {
                    transform: translateX(-50%)
                }
            }

            @keyframes spin {
                to {
                    transform: rotate(360deg)
                }
            }

            /* STRIP */
            .strip {
                background: var(--navy);
                color: #fff;
                overflow: hidden;
                transform: rotate(-1.2deg) scale(1.03);
                padding: 17px 0;
                margin: 6px 0
            }

            .track {
                display: flex;
                width: max-content;
                animation: slide 34s linear infinite
            }

            .track span {
                display: flex;
                align-items: center;
                gap: 26px;
                padding: 0 13px;
                font-weight: 700;
                font-size: 19px;
                white-space: nowrap
            }

            .track b {
                color: var(--sun);
                font-size: 13px
            }

            /* STORY */
            .story .wrap {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 70px;
                align-items: start
            }

            .story p {
                color: var(--muted);
                margin-top: 18px;
                max-width: 34em
            }

            .tl {
                list-style: none;
                padding: 0;
                position: relative
            }

            .tl:before {
                content: "";
                position: absolute;
                left: 23px;
                top: 18px;
                bottom: 18px;
                border-left: 3px dotted var(--orange)
            }

            .tl li {
                display: grid;
                grid-template-columns: 48px 1fr;
                gap: 22px;
                padding: 14px 0
            }

            .tl .dot {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                background: var(--orange);
                color: #fff;
                display: grid;
                place-items: center;
                font-weight: 800;
                font-size: 13px;
                position: relative;
                box-shadow: 0 0 0 7px var(--cream)
            }

            .tl li:nth-child(2) .dot {
                background: var(--teal)
            }

            .tl li:nth-child(3) .dot {
                background: var(--sun);
                color: var(--navy)
            }

            .tl li:nth-child(4) .dot {
                background: var(--navy)
            }

            .tl h4 {
                font-size: 21px;
                margin-bottom: 3px
            }

            .tl p {
                margin: 0;
                font-size: 15.5px
            }

            /* STATS */
            .stats {
                background: var(--navy);
                color: #fff;
                overflow: hidden
            }

            .stats:before {
                content: "";
                position: absolute;
                right: -140px;
                top: -140px;
                width: 420px;
                height: 420px;
                border-radius: 50%;
                border: 2px dashed rgba(255, 255, 255, .12);
                animation: spin 50s linear infinite
            }

            .stats .head p {
                color: #a9b8c8
            }

            .sgrid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 24px;
                position: relative
            }

            .stat {
                border-top: 3px solid var(--c);
                padding-top: 20px
            }

            .stat b {
                display: block;
                font-size: clamp(44px, 6vw, 72px);
                line-height: 1;
                color: #fff;
                letter-spacing: -.03em
            }

            .stat b i {
                font-style: normal;
                color: var(--c)
            }

            .stat>span {
                display: block;
                color: #a9b8c8;
                margin-top: 10px;
                font-size: 15.5px
            }

            .reach {
                margin-top: 60px;
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                align-items: center;
                position: relative
            }

            .reach h4 {
                width: 100%;
                font-size: 16px;
                color: #a9b8c8;
                font-weight: 600;
                margin-bottom: 6px
            }

            .reach a,
            .reach span {
                display: flex;
                align-items: center;
                gap: 8px;
                background: rgba(255, 255, 255, .08);
                border: 1px solid rgba(255, 255, 255, .14);
                padding: 9px 18px;
                border-radius: 999px;
                font-weight: 600;
                text-decoration: none
            }

            .reach .ic {
                width: 19px;
                height: 19px;
                color: var(--sun)
            }

            .reach .next {
                border-style: dashed;
                color: var(--sun)
            }

            /* SERVICES */
            .grid4 {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px
            }

            .card {
                background: #fff;
                border: 1px solid var(--line);
                border-radius: 22px;
                padding: 28px 24px;
                transition: transform .3s, box-shadow .3s
            }

            .card:hover {
                transform: translateY(-8px);
                box-shadow: 0 22px 40px rgba(255, 104, 0, .12)
            }

            .badge {
                width: 54px;
                height: 54px;
                border-radius: 16px;
                display: grid;
                place-items: center;
                margin-bottom: 18px;
                background: var(--t);
                color: var(--c);
                transition: transform .4s
            }

            .card:hover .badge {
                transform: rotate(-10deg) scale(1.1)
            }

            .badge .ic {
                width: 27px;
                height: 27px
            }

            .card h3 {
                font-size: 20px;
                margin-bottom: 8px
            }

            .card p {
                color: var(--muted);
                font-size: 15px;
                line-height: 1.55
            }

            /* MISSION */
            .mv {
                background: var(--peach)
            }

            .mvg {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 24px;
                margin-bottom: 24px
            }

            .mvc {
                border-radius: 30px;
                padding: 44px;
                position: relative;
                overflow: hidden
            }

            .mvc.a {
                background: var(--orange);
                color: #fff
            }

            .mvc.b {
                background: var(--navy);
                color: #fff
            }

            .mvc:after {
                content: "";
                position: absolute;
                right: -50px;
                bottom: -50px;
                width: 180px;
                height: 180px;
                border-radius: 50%;
                border: 22px solid rgba(255, 255, 255, .14)
            }

            .mvc .ic {
                width: 38px;
                height: 38px;
                margin-bottom: 18px
            }

            .mvc h3 {
                font-size: 30px;
                margin-bottom: 12px
            }

            .mvc p {
                opacity: .92;
                max-width: 30em
            }

            .vals {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 16px
            }

            .val {
                background: #fff;
                border-radius: 20px;
                padding: 22px;
                display: flex;
                gap: 14px;
                align-items: flex-start
            }

            .val .ic {
                color: var(--orange);
                margin-top: 2px
            }

            .val b {
                display: block;
                margin-bottom: 2px
            }

            .val span {
                color: var(--muted);
                font-size: 14.5px;
                line-height: 1.5;
                display: block
            }

            /* GROUP TREE */
            .gt {
                display: flex;
                flex-direction: column;
                align-items: center
            }

            .hub {
                width: 190px;
                height: 190px;
                border-radius: 50%;
                background: var(--orange);
                color: #fff;
                display: grid;
                place-items: center;
                text-align: center;
                font-weight: 800;
                font-size: 22px;
                line-height: 1.1;
                position: relative;
                box-shadow: 0 0 0 12px #ffe1cc, 0 24px 50px rgba(255, 104, 0, .3)
            }

            .hub:before {
                content: "";
                position: absolute;
                inset: -26px;
                border-radius: 50%;
                border: 2px dashed rgba(255, 104, 0, .5);
                animation: spin 24s linear infinite
            }

            .hub small {
                display: block;
                font-weight: 600;
                font-size: 12px;
                letter-spacing: .14em;
                text-transform: uppercase;
                opacity: .9;
                margin-top: 6px
            }

            .gt ul {
                list-style: none;
                padding: 46px 0 0;
                display: flex;
                justify-content: center;
                position: relative;
                width: 100%
            }

            .gt ul:before {
                content: "";
                position: absolute;
                top: 0;
                left: 50%;
                height: 46px;
                border-left: 3px solid var(--orange)
            }

            .gt li {
                position: relative;
                padding: 46px 10px 0;
                display: flex;
                justify-content: center;
                flex: 1;
                max-width: 290px
            }

            .gt li:before,
            .gt li:after {
                content: "";
                position: absolute;
                top: 0;
                right: 50%;
                width: 50%;
                height: 46px;
                border-top: 3px solid var(--c)
            }

            .gt li:after {
                right: auto;
                left: 50%;
                border-left: 3px solid var(--c)
            }

            .gt li:first-child:before,
            .gt li:last-child:after {
                border: 0
            }

            .gt li:last-child:before {
                border-right: 3px solid var(--c);
                border-radius: 0 14px 0 0
            }

            .gt li:first-child:after {
                border-radius: 14px 0 0 0
            }

            .sis {
                background: #fff;
                border: 1px solid var(--line);
                border-top: 6px solid var(--c);
                border-radius: 24px;
                padding: 26px 22px;
                width: 100%;
                box-shadow: 0 14px 30px rgba(11, 27, 46, .07);
                transition: transform .3s
            }

            .sis:hover {
                transform: translateY(-8px)
            }

            .sis .badge {
                margin-bottom: 14px
            }

            .sis h3 {
                font-size: 21px;
                margin-bottom: 8px
            }

            .tag {
                display: inline-block;
                background: var(--t);
                font-weight: 700;
                font-size: 12.5px;
                padding: 5px 12px;
                border-radius: 999px;
                margin-bottom: 10px
            }

            .sis p {
                color: var(--muted);
                font-size: 14.5px;
                line-height: 1.5
            }

            /* CLIENTS */
            .clients {
                background: #fff;
                padding: 90px 0;
                overflow: hidden
            }

            .row {
                display: flex;
                width: max-content;
                gap: 16px;
                margin-bottom: 16px;
                animation: slide 45s linear infinite
            }

            .row.r2 {
                animation-direction: reverse;
                animation-duration: 55s
            }

            .clients:hover .row {
                animation-play-state: paused
            }

            .cl {
                display: flex;
                align-items: center;
                gap: 12px;
                background: var(--cream);
                border: 1px solid var(--line);
                border-radius: 18px;
                padding: 16px 26px 16px 16px;
                font-weight: 700;
                white-space: nowrap
            }

            .cl i {
                width: 42px;
                height: 42px;
                border-radius: 12px;
                background: var(--c);
                color: #fff;
                display: grid;
                place-items: center;
                font-style: normal;
                font-size: 16px
            }

            .quote {
                margin: 60px auto 0;
                max-width: 820px;
                text-align: center;
                padding: 0 16px
            }

            .quote p {
                font-size: clamp(22px, 3vw, 32px);
                font-weight: 600;
                letter-spacing: -.01em;
                line-height: 1.35
            }

            .quote p:before {
                content: "\201C";
                display: block;
                font-size: 80px;
                line-height: .6;
                color: var(--orange);
                font-family: Georgia, serif
            }

            .quote span {
                display: block;
                margin-top: 18px;
                color: var(--muted);
                font-size: 15px
            }

            /* PARTNERS */
            .pgrid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 18px
            }

            .pt {
                background: #fff;
                border: 1px solid var(--line);
                border-radius: 20px;
                padding: 24px;
                display: flex;
                align-items: center;
                gap: 16px;
                transition: transform .3s, border-color .3s
            }

            .pt:hover {
                transform: translateY(-6px);
                border-color: var(--c)
            }

            .pt .badge {
                margin: 0;
                flex: none
            }

            .pt b {
                display: block;
                font-size: 17px
            }

            .pt span {
                color: var(--muted);
                font-size: 13.5px
            }

            /* CTA */
            .final {
                padding: 20px 0 90px
            }

            .box {
                background: linear-gradient(135deg, var(--orange), #ff9440);
                color: #fff;
                border-radius: 34px;
                padding: 76px 40px;
                text-align: center;
                position: relative;
                overflow: hidden
            }

            .box h2 {
                max-width: 13em;
                margin: 0 auto 14px;
                position: relative
            }

            .box p {
                max-width: 32em;
                margin: 0 auto 30px;
                opacity: .94;
                position: relative
            }

            .box .btns {
                justify-content: center;
                position: relative
            }

            .box .cta {
                background: var(--navy);
                box-shadow: 0 6px 0 #000
            }

            .box .cta:hover {
                box-shadow: 0 3px 0 #000
            }

            .box .ghost {
                border-color: #fff
            }

            .conf {
                position: absolute;
                border-radius: 50%;
                animation: bob 5s ease-in-out infinite
            }

            .c1 {
                width: 64px;
                height: 64px;
                background: var(--sun);
                left: 6%;
                top: 14%
            }

            .c2 {
                width: 30px;
                height: 30px;
                background: #fff;
                right: 10%;
                top: 20%;
                animation-delay: -1.5s
            }

            .c3 {
                width: 46px;
                height: 46px;
                background: var(--teal);
                right: 16%;
                bottom: 14%;
                animation-delay: -3s
            }

            .c4 {
                width: 22px;
                height: 22px;
                background: var(--navy);
                left: 14%;
                bottom: 18%;
                animation-delay: -2s
            }

            footer {
                text-align: center;
                color: var(--muted);
                font-size: 14px;
                padding: 0 0 40px
            }

            @media (max-width:1100px) {

                .grid4,
                .pgrid,
                .vals {
                    grid-template-columns: 1fr 1fr
                }

                .gt ul {
                    flex-wrap: wrap;
                    gap: 20px;
                    padding-top: 36px
                }

                .gt ul:before,
                .gt li:before,
                .gt li:after {
                    display: none
                }

                .gt li {
                    padding-top: 0;
                    flex: 1 1 240px
                }

                .hub {
                    margin-bottom: 0
                }
            }

            @media (max-width:860px) {
                section {
                    padding: 70px 0
                }

                .links a:not(.pill) {
                    display: none
                }

                .hero .wrap.h,
                .story .wrap,
                .mvg {
                    grid-template-columns: 1fr
                }

                .hero .wrap.h {
                    padding: 20px 0 70px
                }

                .sgrid {
                    grid-template-columns: 1fr 1fr
                }

                .mvc {
                    padding: 32px 26px
                }

                .box {
                    padding: 52px 24px
                }
            }

            @media (max-width:560px) {

                .grid4,
                .pgrid,
                .vals {
                    grid-template-columns: 1fr
                }
            }

            @media (prefers-reduced-motion:reduce) {

                *,
                *:before,
                *:after {
                    animation: none !important;
                    transition: none !important
                }

                .js .rv {
                    opacity: 1;
                    transform: none
                }
            }
        </style>

        <svg width="0" height="0" style="position:absolute" aria-hidden="true">
            <symbol id="globe" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="9" />
                <path d="M3 12h18M12 3c3.500 3 3.500 15 0 18M12 3c-3.500 3-3.500 15 0 18" />
            </symbol>
            <symbol id="bulb" viewBox="0 0 24 24">
                <path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-4 10.500c.8.800 1 1.500 1 2.500h6c0-1 .2-1.700 1-2.500A6 6 0 0 0 12 3z" />
            </symbol>
            <symbol id="code" viewBox="0 0 24 24">
                <path d="M8 8l-5 4 5 4M16 8l5 4-5 4M14 5l-4 14" />
            </symbol>
            <symbol id="search" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="6.500" />
                <path d="M16 16l5 5" />
            </symbol>
            <symbol id="mega" viewBox="0 0 24 24">
                <path d="M3 11v2a1 1 0 0 0 1 1h2l5 4V6L6 10H4a1 1 0 0 0-1 1zM15 9a4 4 0 0 1 0 6M18 6a8 8 0 0 1 0 12" />
            </symbol>
            <symbol id="heart" viewBox="0 0 24 24">
                <path d="M12 20s-7-4.500-7-10a4 4 0 0 1 7-2.500A4 4 0 0 1 19 10c0 5.500-7 10-7 10z" />
            </symbol>
            <symbol id="video" viewBox="0 0 24 24">
                <rect x="3" y="6" width="13" height="12" rx="2" />
                <path d="M16 10l5-3v10l-5-3z" />
            </symbol>
            <symbol id="chart" viewBox="0 0 24 24">
                <path d="M5 20v-7M11 20V5M17 20v-10M3 20h18" />
            </symbol>
            <symbol id="layers" viewBox="0 0 24 24">
                <path d="M12 3l9 5-9 5-9-5zM3 13l9 5 9-5" />
            </symbol>
            <symbol id="target" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="9" />
                <circle cx="12" cy="12" r="5" />
                <circle cx="12" cy="12" r="1" />
            </symbol>
            <symbol id="eye" viewBox="0 0 24 24">
                <path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12z" />
                <circle cx="12" cy="12" r="3" />
            </symbol>
            <symbol id="users" viewBox="0 0 24 24">
                <circle cx="9" cy="8" r="3.500" />
                <path d="M2.500 20a6.500 6.500 0 0 1 13 0M16 4.800a3.500 3.500 0 0 1 0 6.400M18 14.500a6.500 6.500 0 0 1 3.500 5.500" />
            </symbol>
            <symbol id="shield" viewBox="0 0 24 24">
                <path d="M12 3l8 3v6c0 5-3.500 8-8 9-4.500-1-8-4-8-9V6zM9 12l2 2 4-4" />
            </symbol>
            <symbol id="building" viewBox="0 0 24 24">
                <path d="M4 21V5h9v16M13 9h7v12M8 9h1M8 13h1M8 17h1M16 13h1M16 17h1M3 21h18" />
            </symbol>
            <symbol id="rocket" viewBox="0 0 24 24">
                <path d="M5 19c0-3 1-4 3-5m-2 5c3 0 4-1 5-3M14 14l-4-4c1-4 5-7 10-7 0 5-3 9-7 10zM15 8.500h.01" />
            </symbol>
            <symbol id="star" viewBox="0 0 24 24">
                <path d="M12 3l2.700 5.600 6.100.9-4.400 4.300 1 6.100L12 17l-5.400 2.900 1-6.100L3.200 9.500l6.100-.9z" />
            </symbol>
            <symbol id="pin" viewBox="0 0 24 24">
                <path d="M12 21s7-6 7-11a7 7 0 0 0-14 0c0 5 7 11 7 11z" />
                <circle cx="12" cy="10" r="2.500" />
            </symbol>
            <symbol id="check" viewBox="0 0 24 24">
                <path d="M5 12.500l4.500 4.500L19 7.500" />
            </symbol>
            <symbol id="chat" viewBox="0 0 24 24">
                <path d="M4 5h16v11H9l-5 4z" />
            </symbol>
            <symbol id="pen" viewBox="0 0 24 24">
                <path d="M4 20l1-4L16 5l3 3L8 19zM14 7l3 3" />
            </symbol>
            <symbol id="link" viewBox="0 0 24 24">
                <path d="M10 14a4 4 0 0 0 5.700 0l3-3a4 4 0 0 0-5.700-5.700l-1 1M14 10a4 4 0 0 0-5.700 0l-3 3a4 4 0 0 0 5.700 5.700l1-1" />
            </symbol>
        </svg>

        <header class="hero">

            <div class="wrap h">
                <div>
                    <span class="eyebrow">About King Digital</span>
                    <h1>Digital marketing <em>without borders</em></h1>
                    <p>King Digital is a full-service digital marketing group. Strategy, creative, technology and media live under one roof, for brands that want to be seen well beyond their own backyard.</p>
                    <div class="btns"><a class="cta" href="#group">Explore our group <svg class="ic">
                                <use href="#globe" />
                            </svg></a><a class="ghost" href="king-digital-team.html">Meet our leadership</a></div>
                    <div class="proof"><span><svg class="ic">
                                <use href="#layers" />
                            </svg>Full-service</span><span><svg class="ic">
                                <use href="#building" />
                            </svg>Group of companies</span><span><svg class="ic">
                                <use href="#pin" />
                            </svg>Franchise network</span><span><svg class="ic">
                                <use href="#globe" />
                            </svg>Global mindset</span></div>
                </div>

                <div class="globe">
                    <svg viewBox="0 0 480 480" role="img" aria-label="Animated globe with connected locations">
                        <defs>
                            <radialGradient id="gg" cx="35%" cy="30%" r="80%">
                                <stop offset="0" stop-color="#1d4468" />
                                <stop offset="1" stop-color="#0b1b2e" />
                            </radialGradient>
                            <pattern id="dots" width="14" height="14" patternUnits="userSpaceOnUse">
                                <circle cx="7" cy="7" r="1.600" fill="#fff" opacity=".2" />
                                <animateTransform attributeName="patternTransform" type="translate" from="0 0" to="14 0" dur="3s" repeatCount="indefinite" />
                            </pattern>
                            <clipPath id="cp">
                                <circle cx="240" cy="240" r="200" />
                            </clipPath>
                        </defs>
                        <circle cx="240" cy="240" r="228" fill="#ffe9d6" />
                        <circle cx="240" cy="240" r="200" fill="url(#gg)" />
                        <rect x="40" y="40" width="400" height="400" fill="url(#dots)" clip-path="url(#cp)" />
                        <g fill="none" stroke="#fff" stroke-opacity=".28" stroke-width="1.500">
                            <ellipse cx="240" cy="240" rx="200" ry="200" />
                            <path d="M45 190h390M45 290h390M75 130h330M75 350h330" />
                            <ellipse cx="240" cy="240" rx="200" ry="200">
                                <animate attributeName="rx" values="200;0;200" dur="14s" repeatCount="indefinite" />
                            </ellipse>
                            <ellipse cx="240" cy="240" rx="200" ry="200">
                                <animate attributeName="rx" values="200;0;200" dur="14s" begin="-3.500s" repeatCount="indefinite" />
                            </ellipse>
                            <ellipse cx="240" cy="240" rx="200" ry="200">
                                <animate attributeName="rx" values="200;0;200" dur="14s" begin="-7s" repeatCount="indefinite" />
                            </ellipse>
                            <ellipse cx="240" cy="240" rx="200" ry="200">
                                <animate attributeName="rx" values="200;0;200" dur="14s" begin="-10.500s" repeatCount="indefinite" />
                            </ellipse>
                        </g>
                        <g fill="none" stroke="#ff8a32" stroke-width="2.500" stroke-linecap="round">
                            <path class="arc" d="M150 170Q220 90 300 150" />
                            <path class="arc" d="M300 150Q385 200 340 265" />
                            <path class="arc" d="M340 265Q290 340 210 325" />
                            <path class="arc" d="M210 325Q130 340 120 280" />
                            <path class="arc" d="M120 280Q95 215 150 170" />
                            <path class="arc" d="M150 170Q250 230 340 265" />
                        </g>
                        <g fill="#ffc23c">
                            <circle class="pulse" cx="150" cy="170" r="10" />
                            <circle class="pulse p2" cx="300" cy="150" r="10" />
                            <circle class="pulse p3" cx="340" cy="265" r="10" />
                            <circle class="pulse p2" cx="210" cy="325" r="10" />
                            <circle class="pulse" cx="120" cy="280" r="10" />
                            <circle cx="150" cy="170" r="6" />
                            <circle cx="300" cy="150" r="6" />
                            <circle cx="340" cy="265" r="6" />
                            <circle cx="210" cy="325" r="6" />
                            <circle cx="120" cy="280" r="6" />
                        </g>
                        <circle cx="240" cy="225" r="9" fill="#ff6800" />
                        <circle class="pulse" cx="240" cy="225" r="9" fill="#ff6800" />
                        <g transform="rotate(-22 240 240)">
                            <ellipse cx="240" cy="240" rx="232" ry="70" fill="none" stroke="#ff6800" stroke-opacity=".5" stroke-width="2" stroke-dasharray="3 10" stroke-linecap="round" />
                            <circle r="8" fill="#ff6800">
                                <animateMotion dur="9s" repeatCount="indefinite" path="M8 240a232 70 0 1 1 464 0a232 70 0 1 1-464 0" />
                            </circle>
                        </g>
                        <g class="floaty">
                            <rect x="10" y="60" width="118" height="46" rx="14" fill="#fff" />
                            <circle cx="34" cy="83" r="10" fill="#19b6a6" />
                            <rect x="52" y="73" width="60" height="7" rx="3.500" fill="#0b1b2e" />
                            <rect x="52" y="88" width="40" height="6" rx="3" fill="#cfd8df" />
                        </g>
                        <g class="floaty f2">
                            <rect x="352" y="96" width="118" height="46" rx="14" fill="#fff" />
                            <rect x="368" y="116" width="10" height="14" rx="2" fill="#ffc23c" />
                            <rect x="384" y="108" width="10" height="22" rx="2" fill="#ff6800" />
                            <rect x="400" y="100" width="10" height="30" rx="2" fill="#19b6a6" />
                            <rect x="420" y="108" width="36" height="7" rx="3.500" fill="#0b1b2e" />
                        </g>
                        <g class="floaty f3">
                            <rect x="330" y="385" width="126" height="46" rx="14" fill="#0b1b2e" />
                            <circle cx="354" cy="408" r="10" fill="#ff5d7d" />
                            <rect x="372" y="398" width="66" height="7" rx="3.500" fill="#fff" />
                            <rect x="372" y="413" width="44" height="6" rx="3" fill="#ff8a32" />
                        </g>
                    </svg>
                </div>
            </div>
        </header>

        <div class="strip" aria-hidden="true">
            <div class="track" id="strip"></div>
        </div>

        <section class="story" id="story">
            <div class="wrap">
                <div class="rv">
                    <span class="eyebrow">Our story</span>
                    <h2>A simple idea, built into a group</h2>
                    <!-- REPLACE the two paragraphs below with your real founding story -->
                    <p>King Digital began with a belief that every business deserves marketing that is smart, honest and measurable, whether it sells from one street corner or to customers across the world.</p>
                    <p>Today that belief runs through a full-service agency, a network of franchise partners and a family of sister companies, all working to the same standard.</p>
                </div>
                <ul class="tl rv" id="timeline"></ul>
            </div>
        </section>

        <section class="stats">
            <div class="wrap">
                <div class="head rv"><span class="eyebrow">By the numbers</span>
                    <h2>Scale you can rely on</h2>
                    <p>A growing group with the people, process and reach to handle brands of any size.</p>
                </div>
                <div class="sgrid" id="stats"></div>
                <div class="reach rv" id="reach"></div>
            </div>
        </section>

        <section id="services">
            <div class="wrap">
                <div class="head center rv"><span class="eyebrow">What we do</span>
                    <h2>Everything a brand needs, under one roof</h2>
                    <p>One team, one plan and one report. No juggling five agencies.</p>
                </div>
                <div class="grid4" id="svc"></div>
            </div>
        </section>

        <section class="mv">
            <div class="wrap">
                <div class="mvg">
                    <div class="mvc a rv"><svg class="ic">
                            <use href="#target" />
                        </svg>
                        <h3>Our mission</h3>
                        <p>To give every business, in every market, access to world-class digital marketing that is clear, creative and accountable.</p>
                    </div>
                    <div class="mvc b rv"><svg class="ic">
                            <use href="#eye" />
                        </svg>
                        <h3>Our vision</h3>
                        <p>To be the digital partner brands trust across borders, known as much for our people as for our results.</p>
                    </div>
                </div>
                <div class="vals" id="vals"></div>
            </div>
        </section>

        <section id="group">
            <div class="wrap">
                <div class="head center rv"><span class="eyebrow">The King Digital Group</span>
                    <h2>One family of companies. One standard.</h2>
                    <p>Our sister companies each go deep in their own field, and together they cover the whole journey from idea to impact.</p>
                </div>
                <div class="gt rv">
                    <div class="hub">
                        <div>King Digital<small>Group</small></div>
                    </div>
                    <ul id="sis"></ul>
                </div>
            </div>
        </section>

        <section class="clients" id="clients">
            <div class="wrap">
                <div class="head center rv"><span class="eyebrow">Trusted by</span>
                    <h2>Brands that grow with us</h2>
                </div>
            </div>
            <div class="row" id="row1"></div>
            <div class="row r2" id="row2"></div>
            <div class="quote rv" id="quote"></div>
        </section>

        <section id="partners">
            <div class="wrap">
                <div class="head center rv"><span class="eyebrow">Our partners</span>
                    <h2>Better together</h2>
                    <p>We work alongside leading platforms, technology providers and media partners to get our clients further.</p>
                </div>
                <div class="pgrid" id="pt"></div>
            </div>
        </section>

        <div class="final" id="talk">
            <div class="wrap">
                <div class="box rv">
                    <i class="conf c1"></i><i class="conf c2"></i><i class="conf c3"></i><i class="conf c4"></i>
                    <h2>Ready to take your brand further?</h2>
                    <p>Tell us where you are and where you want to be. A real person from our team will reply, usually within a day.</p>
                    <div class="btns"><a class="cta" href="mailto:hello@yourdomain.com?subject=Working%20with%20King%20Digital">Start a conversation <svg class="ic">
                                <use href="#chat" />
                            </svg></a><a class="ghost" href="king-digital-team.html">Meet the team</a></div>
                </div>
            </div>
        </div>

        <script>
            document.documentElement.classList.add('js');

            /* =====================================================================
               EDIT YOUR COMPANY INFORMATION HERE
               Everything marked SAMPLE is placeholder text. Replace it with your
               real facts before publishing. Never publish numbers you can't prove.
               ===================================================================== */
            var STATS = [ /* SAMPLE numbers */ {
                    v: 10,
                    s: "+",
                    l: "Years of experience",
                    c: "#ff6800"
                },
                {
                    v: 250,
                    s: "+",
                    l: "Projects delivered",
                    c: "#19b6a6"
                },
                {
                    v: 50,
                    s: "+",
                    l: "Team members",
                    c: "#ff5d7d"
                },
                {
                    v: 4,
                    s: "",
                    l: "Group companies",
                    c: "#ffc23c"
                }
            ];
            var REACH = ["Delhi", "Lucknow"]; /* franchise cities that are live. Add countries / cities you serve */
            var TIMELINE = [ /* SAMPLE milestones */ {
                    y: "20XX",
                    t: "King Digital is founded",
                    d: "Add a line about how it all began."
                },
                {
                    y: "20XX",
                    t: "First franchise partner",
                    d: "Add a line about your first partner city."
                },
                {
                    y: "20XX",
                    t: "Group companies launch",
                    d: "Add a line about your sister companies."
                },
                {
                    y: "20XX",
                    t: "Working across borders",
                    d: "Add a line about your international clients."
                }
            ];
            var SERVICES = [
                ["bulb", "Strategy & Branding", "Positioning, identity and a plan that fits your market.", "#ff6800", "#ffe9d6"],
                ["code", "Websites & Apps", "Fast, beautiful digital products built to convert.", "#19b6a6", "#d8f5f1"],
                ["search", "Search (SEO)", "Be found first by customers who are already looking.", "#3b8be0", "#dcebfb"],
                ["mega", "Paid Media", "Ads across search, social and video, tuned for return.", "#ff5d7d", "#ffe3e9"],
                ["heart", "Social Media", "Content and community that people follow and share.", "#b98300", "#fff2cc"],
                ["video", "Content & Video", "Stories, films and creative that stop the scroll.", "#ff6800", "#ffe9d6"],
                ["chart", "Analytics & Reporting", "Clear dashboards that show what is really working.", "#19b6a6", "#d8f5f1"],
                ["layers", "Marketing Automation", "Smart journeys that nurture customers on autopilot.", "#3b8be0", "#dcebfb"]
            ];
            var VALUES = [
                ["users", "People first", "Great work comes from happy, respected teams."],
                ["target", "Results you can measure", "We track what matters and tell you the truth."],
                ["globe", "Global standards, local heart", "World-class craft with real understanding of each market."],
                ["shield", "Honest partnership", "Clear terms, clear reports, no surprises."]
            ];
            var SISTERS = [ /* SAMPLE sister companies: replace names and descriptions */ {
                    n: "Sister Company One",
                    tag: "Web & App Development",
                    d: "One line about what this company does.",
                    ic: "code",
                    c: "#ff6800",
                    t: "#ffe9d6"
                },
                {
                    n: "Sister Company Two",
                    tag: "Media & Production",
                    d: "One line about what this company does.",
                    ic: "video",
                    c: "#19b6a6",
                    t: "#d8f5f1"
                },
                {
                    n: "Sister Company Three",
                    tag: "Training & Education",
                    d: "One line about what this company does.",
                    ic: "users",
                    c: "#ff5d7d",
                    t: "#ffe3e9"
                },
                {
                    n: "Sister Company Four",
                    tag: "Technology & Data",
                    d: "One line about what this company does.",
                    ic: "chart",
                    c: "#3b8be0",
                    t: "#dcebfb"
                }
            ];
            var CLIENTS = ["Client One", "Client Two", "Client Three", "Client Four", "Client Five", "Client Six", "Client Seven", "Client Eight", "Client Nine", "Client Ten"]; /* SAMPLE: real client names */
            var TESTIMONIAL = {
                q: "Add a real testimonial from one of your clients here. Short, specific and honest works best.",
                n: "Client name",
                r: "Role, Company"
            };
            var PARTNERS = [ /* SAMPLE partners: replace names */
                ["Partner Name", "Platform partner", "globe", "#ff6800", "#ffe9d6"],
                ["Partner Name", "Technology partner", "code", "#19b6a6", "#d8f5f1"],
                ["Partner Name", "Media partner", "mega", "#ff5d7d", "#ffe3e9"],
                ["Partner Name", "Analytics partner", "chart", "#3b8be0", "#dcebfb"],
                ["Partner Name", "Cloud partner", "layers", "#b98300", "#fff2cc"],
                ["Partner Name", "Payments partner", "shield", "#ff6800", "#ffe9d6"],
                ["Partner Name", "Education partner", "users", "#19b6a6", "#d8f5f1"],
                ["Partner Name", "Creative partner", "pen", "#ff5d7d", "#ffe3e9"]
            ];
            /* ===================================================================== */

            function I(n) {
                return '<svg class="ic"><use href="#' + n + '"/></svg>'
            }

            function $(id) {
                return document.getElementById(id)
            }
            var PAL = ["#ff6800", "#19b6a6", "#ff5d7d", "#3b8be0", "#b98300", "#0b1b2e"];

            /* strip */
            var caps = ["Strategy", "Branding", "Websites", "SEO", "Paid Media", "Social", "Content", "Video", "Analytics", "Automation"],
                s = '';
            for (var r = 0; r < 2; r++) s += caps.map(function(c) {
                return '<span>' + c + ' <b>✦</b></span>'
            }).join('');
            $('strip').innerHTML = s + s;

            /* timeline */
            $('timeline').innerHTML = TIMELINE.map(function(x) {
                return '<li><span class="dot">' + x.y + '</span><div><h4>' + x.t + '</h4><p>' + x.d + '</p></div></li>'
            }).join('');

            /* stats + reach */
            $('stats').innerHTML = STATS.map(function(x) {
                return '<div class="stat rv" style="--c:' + x.c + '"><b><span class="cnt" data-v="' + x.v + '">0</span><i>' + x.s + '</i></b><span>' + x.l + '</span></div>'
            }).join('');
            $('reach').innerHTML = '<h4>Where we operate</h4>' + REACH.map(function(p) {
                return '<span>' + I('pin') + p + '</span>'
            }).join('') + '<a class="next" href="#talk">' + I('rocket') + 'Your city next?</a>';

            /* services */
            $('svc').innerHTML = SERVICES.map(function(x) {
                return '<div class="card rv" style="--c:' + x[3] + ';--t:' + x[4] + '"><div class="badge">' + I(x[0]) + '</div><h3>' + x[1] + '</h3><p>' + x[2] + '</p></div>'
            }).join('');

            /* values */
            $('vals').innerHTML = VALUES.map(function(x) {
                return '<div class="val rv">' + I(x[0]) + '<div><b>' + x[1] + '</b><span>' + x[2] + '</span></div></div>'
            }).join('');

            /* sister companies */
            $('sis').innerHTML = SISTERS.map(function(x) {
                return '<li style="--c:' + x.c + ';--t:' + x.t + '"><div class="sis"><div class="badge">' + I(x.ic) + '</div><h3>' + x.n + '</h3><span class="tag">' + x.tag + '</span><p>' + x.d + '</p></div></li>'
            }).join('');

            /* clients */
            function cl(n, i) {
                return '<div class="cl" style="--c:' + PAL[i % PAL.length] + '"><i>' + n.charAt(0) + '</i>' + n + '</div>'
            }
            var c1 = CLIENTS.map(cl).join(''),
                c2 = CLIENTS.slice().reverse().map(function(n, i) {
                    return cl(n, i + 2)
                }).join('');
            $('row1').innerHTML = c1 + c1 + c1;
            $('row2').innerHTML = c2 + c2 + c2;
            $('quote').innerHTML = '<p>' + TESTIMONIAL.q + '</p><span><b>' + TESTIMONIAL.n + '</b> · ' + TESTIMONIAL.r + '</span>';

            /* partners */
            $('pt').innerHTML = PARTNERS.map(function(x) {
                return '<div class="pt rv" style="--c:' + x[3] + ';--t:' + x[4] + '"><div class="badge">' + I(x[2]) + '</div><div><b>' + x[0] + '</b><span>' + x[1] + '</span></div></div>'
            }).join('');

            /* reveal + counters */
            var reduce = window.matchMedia('(prefers-reduced-motion:reduce)').matches;
            if (reduce) document.querySelectorAll('svg').forEach(function(v) {
                if (v.pauseAnimations) v.pauseAnimations()
            });

            function count(el) {
                var t = +el.dataset.v;
                if (reduce) {
                    el.textContent = t;
                    return
                }
                var st = null;
                (function f(ts) {
                    if (!st) st = ts;
                    var p = Math.min((ts - st) / 1600, 1);
                    el.textContent = Math.round(t * (1 - Math.pow(1 - p, 3)));
                    if (p < 1) requestAnimationFrame(f)
                })(performance.now());
            }
            var els = document.querySelectorAll('.rv');
            if (!('IntersectionObserver' in window)) {
                els.forEach(function(e) {
                    e.classList.add('in')
                });
                document.querySelectorAll('.cnt').forEach(function(e) {
                    e.textContent = e.dataset.v
                })
            } else {
                var io = new IntersectionObserver(function(en) {
                    en.forEach(function(x) {
                        if (x.isIntersecting) {
                            x.target.classList.add('in');
                            x.target.querySelectorAll('.cnt').forEach(count);
                            io.unobserve(x.target)
                        }
                    })
                }, {
                    threshold: .15
                });
                els.forEach(function(e, i) {
                    io.observe(e)
                })
            }
        </script>


    <!-- section 1 ( Hero ) -->
    <?php //require_once __DIR__ . '/includes/about-sections/about-hero-section.php'; 
    ?>

    <!-- section 2 ( Stats ) -->
    <?php //require_once __DIR__ . '/includes/about-sections/about-stats-section.php'; 
    ?>

    <!-- section 3 ( About Us ) -->
    <?php //require_once __DIR__ . '/includes/about-sections/about-section.php'; 
    ?>

    <!-- section 4 ( why Choose ) -->
    <?php //require_once __DIR__ . '/includes/about-sections/about-why-section.php'; 
    ?>

    <!-- section 5 ( Testimonials ) -->
    <?php //require_once __DIR__ . '/includes/about-sections/about-testimonial.php'; 
    ?>

    <!-- section 3 ( Team Member ) -->
    <?php //require_once __DIR__ . '/includes/about-sections/about-team-section.php'; 
    ?>





    <!-- section 3 ( Office Gallery ) -->
    <?php //require_once __DIR__ . '/includes/about-sections/office-gallery-section.php'; 
    ?>

    <!-- section  ( Why Choose Us ) -->
    <?php //require_once __DIR__ . '/includes/about-sections/why-choose-us.php'; 
    ?>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>