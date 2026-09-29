<?php require_once __DIR__ . '/includes/header.php'; ?>

<main class="about-main">
    <style>
        :root {
            --orange: #ff6800;
            --navy: #0b1b2e;
            --cream: #fffaf4;
            --peach: #ffe9d6;
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
            line-height: 1.6;
            overflow-x: hidden;
            padding-top: env(safe-area-inset-top, 0px);
            padding-bottom: env(safe-area-inset-bottom, 0px)
        }

        h1,
        h2,
        h3,
        h4 {
            font-weight: 700;
            letter-spacing: -.02em;
            line-height: 1.1
        }

        :focus-visible {
            outline: 3px solid var(--navy);
            outline-offset: 4px
        }

        .wrap {
            width: min(1200px, 94%);
            margin: auto
        }

        .js .rv {
            opacity: 0;
            transform: translateY(26px);
            transition: opacity .7s ease, transform .7s ease
        }

        .js .rv.in {
            opacity: 1;
            transform: none
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 0
        }

        .logo {
            font-weight: 800;
            font-size: 21px;
            text-decoration: none;
            color: inherit;
            display: flex;
            align-items: center;
            gap: 10px
        }

        .logo svg {
            width: 34px;
            height: 34px
        }

        .pill {
            background: var(--navy);
            color: #fff;
            padding: 11px 22px;
            border-radius: 999px;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            transition: transform .2s
        }

        .pill:hover {
            transform: scale(1.06) rotate(-2deg)
        }

        /* HERO */
        .hero {
            text-align: center;
            padding: 40px 0 30px;
            position: relative
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

        .hero h1 {
            font-size: clamp(40px, 6.5vw, 80px);
            max-width: 11em;
            margin: 0 auto 20px
        }

        .hero h1 em {
            font-style: normal;
            color: var(--orange);
            position: relative;
            white-space: nowrap
        }

        .hero h1 em svg {
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 100%;
            height: 14px
        }

        .hero h1 em path {
            stroke-dasharray: 320;
            stroke-dashoffset: 320;
            animation: draw 1.2s .4s forwards
        }

        .hero p {
            color: var(--muted);
            font-size: 19px;
            max-width: 36em;
            margin: 0 auto 26px
        }

        .legend {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center
        }

        .legend span {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #fff;
            border: 1px solid var(--line);
            padding: 8px 16px;
            border-radius: 999px;
            font-weight: 600;
            font-size: 14px
        }

        .legend i {
            width: 11px;
            height: 11px;
            border-radius: 50%;
            display: block
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            animation: bob 6s ease-in-out infinite;
            z-index: -1
        }

        .o1 {
            width: 90px;
            height: 90px;
            background: #ffe0c2;
            left: 4%;
            top: 40px
        }

        .o2 {
            width: 44px;
            height: 44px;
            background: #d8f5f1;
            right: 9%;
            top: 30px;
            animation-delay: -2s
        }

        .o3 {
            width: 62px;
            height: 62px;
            background: #ffe3e9;
            right: 4%;
            bottom: 10px;
            animation-delay: -4s
        }

        .o4 {
            width: 28px;
            height: 28px;
            background: #fff2cc;
            left: 11%;
            bottom: 10px;
            animation-delay: -1s
        }

        @keyframes bob {
            50% {
                transform: translateY(-14px)
            }
        }

        @keyframes draw {
            to {
                stroke-dashoffset: 0
            }
        }

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }

        @keyframes sp {
            50% {
                transform: scale(1.35) rotate(20deg);
                opacity: .6
            }
        }

        /* FLIP PHOTOS */
        .flip {
            position: relative;
            width: var(--w);
            height: var(--h);
            perspective: 900px;
            cursor: pointer;
            border-radius: var(--r, 18px);
            margin: 0 auto;
            flex: none
        }

        .inner {
            position: absolute;
            inset: 0;
            transition: transform .8s cubic-bezier(.3, 1.25, .5, 1);
            transform-style: preserve-3d
        }

        .face {
            position: absolute;
            inset: 0;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            border-radius: var(--r, 18px);
            overflow: hidden;
            box-shadow: 0 12px 26px rgba(11, 27, 46, .16)
        }

        .face svg,
        .face img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block
        }

        .back {
            transform: rotateY(180deg)
        }

        .flip:focus-visible .inner,
        .flip.on .inner {
            transform: rotateY(180deg)
        }

        @media (hover:hover) {
            .flip:hover .inner {
                transform: rotateY(180deg)
            }
        }

        .sp {
            transform-origin: 14px 34px;
            animation: sp 2.4s ease-in-out infinite
        }

        /* TREE — desktop */
        .tree {
            padding: 30px 0 90px
        }

        .tree ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            position: relative;
            padding-top: 46px
        }

        .tree li {
            position: relative;
            padding: 46px 8px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center
        }

        .tree li::before,
        .tree li::after {
            content: "";
            position: absolute;
            top: 0;
            right: 50%;
            width: 50%;
            height: 46px;
            border-top: 3px solid var(--ac, var(--orange))
        }

        .tree li::after {
            right: auto;
            left: 50%;
            border-left: 3px solid var(--ac, var(--orange))
        }

        .tree li:only-child::before,
        .tree li:only-child::after {
            display: none
        }

        .tree li:first-child::before,
        .tree li:last-child::after {
            border: 0
        }

        .tree li:last-child::before {
            border-right: 3px solid var(--ac, var(--orange));
            border-radius: 0 14px 0 0
        }

        .tree li:first-child::after {
            border-radius: 14px 0 0 0
        }

        .tree ul::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            height: 46px;
            border-left: 3px solid var(--ac, var(--orange))
        }

        .tree ul.top {
            padding-top: 0;
            display: block
        }

        .tree ul.top::before,
        .tree li.root::before,
        .tree li.root::after {
            display: none !important
        }

        .tree li.root {
            padding-top: 0
        }

        .tree li.root>ul {
            margin-top: 0
        }

        .tree li li>ul::before {
            border-left-style: dashed
        }

        /* CHAIRMAN */
        .chair {
            display: grid;
            grid-template-columns: 1fr 280px 1fr;
            gap: 44px;
            align-items: center;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 40px;
            padding: 44px 48px;
            box-shadow: 0 30px 60px rgba(255, 104, 0, .10);
            position: relative;
            overflow: hidden;
            text-align: left;
            width: 100%
        }

        .chair:before {
            content: "";
            position: absolute;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: var(--peach);
            left: -110px;
            top: -110px;
            z-index: 0
        }

        .chair:after {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            border: 22px solid #fff1e6;
            right: -60px;
            bottom: -60px;
            z-index: 0
        }

        .chair>* {
            position: relative;
            z-index: 1
        }

        .c-left {
            text-align: right
        }

        .c-left .rank {
            display: inline-block;
            background: var(--navy);
            color: #fff;
            font-weight: 700;
            font-size: 12px;
            letter-spacing: .14em;
            text-transform: uppercase;
            padding: 7px 14px;
            border-radius: 999px;
            margin-bottom: 18px
        }

        .c-left h2 {
            font-size: clamp(34px, 4vw, 50px);
            margin-bottom: 10px
        }

        .c-left .role {
            color: var(--orange);
            font-weight: 700;
            font-size: 19px
        }

        .chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 20px;
            justify-content: flex-end
        }

        .chips b {
            background: var(--peach);
            color: #a44300;
            font-size: 13px;
            padding: 6px 13px;
            border-radius: 999px
        }

        .hint {
            display: block;
            margin-top: 14px;
            color: var(--muted);
            font-size: 13px;
            text-align: center
        }

        .c-right h3 {
            font-size: 24px;
            margin-bottom: 14px
        }

        .c-right p {
            color: var(--muted);
            margin-bottom: 12px
        }

        .quote {
            border-left: 4px solid var(--orange);
            padding: 4px 0 4px 16px;
            margin-top: 18px;
            font-weight: 600;
            font-style: italic;
            color: var(--ink)
        }

        /* DIRECTORS */
        .dir {
            width: 238px;
            background: #fff;
            border: 1px solid var(--line);
            border-top: 6px solid var(--ac);
            border-radius: 24px;
            padding: 20px 16px 20px;
            box-shadow: 0 14px 30px rgba(11, 27, 46, .07);
            transition: transform .3s, box-shadow .3s
        }

        .dir:hover {
            transform: translateY(-6px);
            box-shadow: 0 22px 40px rgba(11, 27, 46, .13)
        }

        .dir .flip {
            --w: 170px;
            --h: 190px;
            --r: 20px;
            margin-bottom: 16px
        }

        .dir h3 {
            font-size: 20px;
            margin-bottom: 6px
        }

        .role-pill {
            display: inline-block;
            background: var(--tint);
            color: var(--ink);
            font-weight: 700;
            font-size: 12.5px;
            padding: 5px 12px;
            border-radius: 999px;
            margin-bottom: 10px
        }

        .dir p {
            font-size: 14px;
            color: var(--muted);
            line-height: 1.5
        }

        /* EMPLOYEES */
        .emp {
            width: 118px;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 12px 8px 14px;
            transition: transform .3s
        }

        .emp:hover {
            transform: translateY(-5px)
        }

        .emp .flip {
            --w: 88px;
            --h: 98px;
            --r: 15px;
            margin-bottom: 10px
        }

        .emp h4 {
            font-size: 14px;
            margin-bottom: 3px
        }

        .emp span {
            display: block;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.35
        }

        /* FOOT */
        .final {
            padding: 0 0 90px
        }

        .box {
            background: linear-gradient(135deg, var(--orange), #ff9440);
            color: #fff;
            border-radius: 34px;
            padding: 64px 40px;
            text-align: center;
            position: relative;
            overflow: hidden
        }

        .box h2 {
            font-size: clamp(32px, 4.6vw, 54px);
            max-width: 13em;
            margin: 0 auto 14px;
            position: relative
        }

        .box p {
            max-width: 30em;
            margin: 0 auto 26px;
            opacity: .94;
            position: relative
        }

        .cta {
            display: inline-block;
            background: var(--navy);
            color: #fff;
            font-weight: 700;
            padding: 16px 30px;
            border-radius: 14px;
            text-decoration: none;
            box-shadow: 0 6px 0 #000;
            transition: transform .15s, box-shadow .15s;
            position: relative
        }

        .cta:hover {
            transform: translateY(3px);
            box-shadow: 0 3px 0 #000
        }

        .conf {
            position: absolute;
            border-radius: 50%;
            animation: bob 5s ease-in-out infinite
        }

        .c1 {
            width: 60px;
            height: 60px;
            background: #ffc23c;
            left: 6%;
            top: 16%
        }

        .c2 {
            width: 28px;
            height: 28px;
            background: #fff;
            right: 10%;
            top: 22%;
            animation-delay: -1.5s
        }

        .c3 {
            width: 44px;
            height: 44px;
            background: #19b6a6;
            right: 15%;
            bottom: 14%;
            animation-delay: -3s
        }

        footer {
            text-align: center;
            color: var(--muted);
            font-size: 14px;
            padding: 0 0 40px
        }

        /* TREE — tablet and mobile: vertical rail */
        @media (max-width:1240px) {
            .tree ul {
                display: block;
                padding: 0 0 0 20px;
                margin-left: 22px;
                border-left: 3px dashed var(--ac, var(--orange))
            }

            .tree ul.top {
                border: 0;
                margin: 0;
                padding: 0
            }

            .tree ul::before {
                display: none
            }

            .tree li {
                display: block;
                padding: 24px 0 0 20px;
                text-align: left
            }

            .tree li.root {
                padding: 0
            }

            .tree li::before,
            .tree li:first-child::before,
            .tree li:last-child::before,
            .tree li:only-child::before {
                display: block;
                content: "";
                left: 0;
                right: auto;
                top: 64px;
                width: 20px;
                height: 0;
                border: 0;
                border-top: 3px dashed var(--ac, var(--orange));
                border-radius: 0
            }

            .tree li::after,
            .tree li:first-child::after,
            .tree li:last-child::after,
            .tree li:only-child::after {
                display: none
            }

            .dir {
                width: 100%;
                display: grid;
                grid-template-columns: 110px 1fr;
                gap: 4px 16px;
                align-items: start;
                border-radius: 22px;
                padding: 16px
            }

            .dir .flip {
                --w: 110px;
                --h: 124px;
                grid-row: 1/4;
                margin: 0
            }

            .emp {
                width: 100%;
                display: flex;
                align-items: center;
                gap: 14px;
                padding: 10px 12px;
                text-align: left
            }

            .emp .flip {
                --w: 62px;
                --h: 70px;
                --r: 14px;
                margin: 0
            }
        }

        @media (max-width:860px) {
            .chair {
                grid-template-columns: 1fr;
                gap: 22px;
                padding: 34px 22px;
                text-align: center;
                border-radius: 30px
            }

            .c-left,
            .c-right {
                text-align: center
            }

            .chips {
                justify-content: center
            }

            .quote {
                text-align: left
            }

            .c-mid {
                order: -1
            }

            .chair .flip {
                --w: 230px !important;
                --h: 330px !important
            }

            .c-right h3 {
                font-size: 22px
            }
        }

        @media (max-width:520px) {
            .dir {
                grid-template-columns: 96px 1fr
            }

            .dir .flip {
                --w: 96px;
                --h: 110px
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

    <div class="wrap">
        <nav>
            <a class="logo" href="#"><svg viewBox="0 0 34 34">
                    <rect width="34" height="34" rx="10" fill="#ff6800" />
                    <path d="M7 25L5.500 11l7 6L17 8l4.500 9 7-6L27 25z" fill="#0b1b2e" />
                </svg>King Digital</a>
            <a class="pill" href="#join">Join the team</a>
        </nav>

        <header class="hero">
            <i class="orb o1"></i><i class="orb o2"></i><i class="orb o3"></i><i class="orb o4"></i>
            <span class="eyebrow">Meet the team</span>
            <h1>The people behind <em>King Digital<svg viewBox="0 0 300 14" preserveAspectRatio="none">
                        <path d="M3 9c60-8 140-8 294-2" fill="none" stroke="#ff6800" stroke-width="5" stroke-linecap="round" />
                    </svg></em></h1>
            <p>Every branch of our tree grows from the same root: helping local businesses thrive online. Hover over any photo to meet the person behind the profile.</p>
            <div class="legend"><span><i style="background:#ff6800"></i>Chairman</span><span><i style="background:#19b6a6"></i>Directors</span><span><i style="background:#ff5d7d"></i>Team members</span></div>
        </header>

        <main class="tree" id="tree"><noscript>Please enable JavaScript to see the team tree.</noscript></main>
    </div>

    <div class="final" id="join">
        <div class="wrap">
            <div class="box rv">
                <i class="conf c1"></i><i class="conf c2"></i><i class="conf c3"></i>
                <h2>Want to grow with us?</h2>
                <p>We're always happy to meet curious, kind and ambitious people. Say hello and tell us what you'd love to build.</p>
                <a class="cta" href="mailto:hello@yourdomain.com?subject=Joining%20the%20King%20Digital%20team">Say hello</a>
            </div>
        </div>
    </div>

    <script>
        document.documentElement.classList.add('js');

        /* =====================================================================
           EDIT YOUR TEAM HERE
           f = first photo URL, b = second (hover) photo URL.
           Leave f / b empty ("") to use the illustrated placeholder avatars.
           ===================================================================== */
        var CHAIRMAN = {
            n: "Chairman Name",
            role: "Founder & Chairman",
            f: "",
            b: "",
            chips: ["Vision", "Partnerships", "Growth"],
            head: "A few words from our chairman",
            bio: [
                "Write your chairman's story here: how King Digital began, what drives the company and what he or she believes about helping local businesses grow online.",
                "Add achievements, background and the values that guide every franchise partner. This is the space with the most room, so tell the story properly."
            ],
            quote: "Add a favourite line or company promise here."
        };
        var DIRECTORS = [{
                n: "Director Name",
                role: "Director · Operations",
                bio: "Keeps every franchise running smoothly, from onboarding to daily support.",
                f: "",
                b: "",
                ac: "#ff6800",
                tint: "#ffe9d6",
                team: [{
                    n: "Name Surname",
                    role: "Operations Executive"
                }, {
                    n: "Name Surname",
                    role: "Client Success Manager"
                }]
            },
            {
                n: "Director Name",
                role: "Director · Technology",
                bio: "Leads the developers who build fast, reliable websites and tools.",
                f: "",
                b: "",
                ac: "#19b6a6",
                tint: "#d8f5f1",
                team: [{
                    n: "Name Surname",
                    role: "Web Developer"
                }, {
                    n: "Name Surname",
                    role: "SEO Specialist"
                }]
            },
            {
                n: "Director Name",
                role: "Director · Creative",
                bio: "Shapes the design, content and social media that clients love.",
                f: "",
                b: "",
                ac: "#ff5d7d",
                tint: "#ffe3e9",
                team: [{
                    n: "Name Surname",
                    role: "Graphic Designer"
                }, {
                    n: "Name Surname",
                    role: "Social Media Manager"
                }]
            },
            {
                n: "Director Name",
                role: "Director · Franchise Partners",
                bio: "Welcomes new partners and helps each city launch with confidence.",
                f: "",
                b: "",
                ac: "#3b8be0",
                tint: "#dcebfb",
                team: [{
                    n: "Name Surname",
                    role: "Partner Onboarding Lead"
                }, {
                    n: "Name Surname",
                    role: "Training Coordinator"
                }]
            }
        ];

        /* ---------- illustrated placeholder avatars ---------- */
        var SK = ['#f2b990', '#8a5a3c', '#e8a97e', '#c68863', '#f5c9a5'],
            HR = ['#3a2a22', '#1b1b1b', '#b5581a', '#5a3a22', '#2b2b3a'];

        function av(o) {
            var h = o.tall ? 200 : 150,
                dy = o.tall ? 44 : 0,
                x = '';
            x += '<svg viewBox="0 0 120 ' + h + '" preserveAspectRatio="xMidYMid slice" role="img" aria-label="' + o.alt + '"><rect width="120" height="' + h + '" fill="' + o.bg + '"/>';
            x += '<circle cx="98" cy="' + (o.tall ? 52 : 34) + '" r="34" fill="#fff" opacity=".35"/><circle cx="14" cy="' + (h - 40) + '" r="20" fill="#fff" opacity=".25"/>';
            if (o.sm) x += '<path class="sp" d="M14 34l3 7 7 3-7 3-3 7-3-7-7-3 7-3z" fill="#fff" opacity=".9"/>';
            x += '<g transform="translate(0 ' + dy + ')"><path d="M6 160c0-38 22-58 54-58s54 20 54 58z" fill="' + o.shirt + '"/><rect x="6" y="158" width="108" height="90" fill="' + o.shirt + '"/>';
            x += '<rect x="52" y="90" width="16" height="20" fill="' + o.skin + '"/>';
            if (o.tie) x += '<path d="M44 104L60 124 76 104 66 100H54z" fill="#fff"/><path d="M57 120h6l3 26-6 7-6-7z" fill="' + o.tie + '"/>';
            x += '<circle cx="34" cy="70" r="5" fill="' + o.skin + '"/><circle cx="86" cy="70" r="5" fill="' + o.skin + '"/><ellipse cx="60" cy="68" rx="26" ry="29" fill="' + o.skin + '"/>';
            var H = ['M33 66c-3-26 13-39 28-39s31 11 26 39c-4-12-14-17-27-17s-23 5-27 17z', 'M30 90c-9-48 10-63 30-63s39 15 30 63c-3-10-5-24-6-32-12-2-24-8-30-18-4 10-14 16-18 18-1 8-3 22-6 32z', 'M33 68c-4-30 14-42 30-42 18 0 30 12 24 42-3-14-9-22-20-24-14 0-28 4-34 24z'];
            if (o.hs < 3) x += '<path d="' + H[o.hs] + '" fill="' + o.hair + '"/>';
            else x += '<g fill="' + o.hair + '"><circle cx="40" cy="46" r="12"/><circle cx="54" cy="38" r="13"/><circle cx="70" cy="38" r="13"/><circle cx="82" cy="47" r="12"/><circle cx="35" cy="60" r="9"/><circle cx="87" cy="60" r="9"/></g>';
            x += '<circle cx="50" cy="70" r="3" fill="#1b2430"/><circle cx="70" cy="70" r="3" fill="#1b2430"/><path d="M44 62q6-4 12 0M64 62q6-4 12 0" stroke="#1b2430" stroke-width="2" fill="none" stroke-linecap="round"/>';
            x += o.sm ? '<path d="M49 81q11 12 22 0z" fill="#fff" stroke="#1b2430" stroke-width="2" stroke-linejoin="round"/><circle cx="42" cy="79" r="4" fill="#ff8fa3" opacity=".55"/><circle cx="78" cy="79" r="4" fill="#ff8fa3" opacity=".55"/>' : '<path d="M52 84q8 4 16 0" stroke="#1b2430" stroke-width="2.500" fill="none" stroke-linecap="round"/>';
            if (o.gl) x += '<g fill="rgba(255,255,255,.25)" stroke="#1b2430" stroke-width="2.500"><circle cx="50" cy="70" r="9"/><circle cx="70" cy="70" r="9"/><path d="M59 70h2"/></g>';
            return x + '</g></svg>';
        }

        function photo(p, i, cls, tall, ac, tint, chair) {
            var base = {
                skin: SK[i % 5],
                hair: HR[(i * 2 + 1) % 5],
                hs: i % 4,
                tall: tall,
                alt: p.n
            };

            function face(side) {
                var u = side ? p.b : p.f;
                if (u) return '<img src="' + u + '" alt="' + p.n + (side ? ' (second photo)' : '') + '" loading="lazy">';
                var o = Object.assign({}, base);
                if (!side) {
                    o.bg = tint;
                    o.shirt = '#0b1b2e';
                    o.tie = ac;
                    o.sm = 0;
                    o.gl = i % 3 == 0
                } else {
                    o.bg = ac;
                    o.shirt = '#ffffff';
                    o.tie = null;
                    o.sm = 1;
                    o.gl = i % 3 != 0
                }
                return av(o);
            }
            return '<div class="flip ' + cls + '" tabindex="0" role="button" aria-label="' + p.n + ': flip photo"><div class="inner"><div class="face front">' + face(0) + '</div><div class="face back">' + face(1) + '</div></div></div>';
        }

        /* ---------- build the tree ---------- */
        var C = CHAIRMAN,
            k = 0,
            html = '';
        html += '<ul class="top"><li class="root" style="--ac:#ff6800"><article class="chair rv">' +
            '<div class="c-left"><span class="rank">Chairman</span><h2>' + C.n + '</h2><div class="role">' + C.role + '</div><div class="chips">' + C.chips.map(function(c) {
                return '<b>' + c + '</b>'
            }).join('') + '</div></div>' +
            '<div class="c-mid">' + photo(C, 0, '', true, '#ff6800', '#ffe9d6') + '<span class="hint">↻ Hover to see the other side</span></div>' +
            '<div class="c-right"><h3>' + C.head + '</h3>' + C.bio.map(function(t) {
                return '<p>' + t + '</p>'
            }).join('') + '<div class="quote">' + C.quote + '</div></div></article>';
        html += '<ul>';
        DIRECTORS.forEach(function(d, di) {
            k++;
            html += '<li style="--ac:' + d.ac + ';--tint:' + d.tint + '"><article class="dir rv">' + photo(d, k, '', false, d.ac, d.tint) + '<div><h3>' + d.n + '</h3><span class="role-pill">' + d.role + '</span><p>' + d.bio + '</p></div></article><ul>';
            d.team.forEach(function(e) {
                k++;
                html += '<li style="--ac:' + d.ac + '"><div class="emp rv">' + photo(e, k, '', false, d.ac, d.tint) + '<div><h4>' + e.n + '</h4><span>' + e.role + '</span></div></div></li>';
            });
            html += '</ul></li>';
        });
        html += '</ul></li></ul>';
        document.getElementById('tree').innerHTML = html;

        /* touch devices: tap to flip */
        var canHover = window.matchMedia('(hover:hover)').matches;
        document.querySelectorAll('.flip').forEach(function(f) {
            f.addEventListener('click', function() {
                if (!canHover) f.classList.toggle('on')
            });
            f.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    f.classList.toggle('on')
                }
            });
        });

        /* scroll reveal */
        var els = document.querySelectorAll('.rv');
        if (!('IntersectionObserver' in window)) {
            els.forEach(function(e) {
                e.classList.add('in')
            })
        } else {
            var io = new IntersectionObserver(function(en) {
                en.forEach(function(x) {
                    if (x.isIntersecting) {
                        x.target.classList.add('in');
                        io.unobserve(x.target)
                    }
                })
            }, {
                threshold: .12
            });
            els.forEach(function(e) {
                io.observe(e)
            })
        }
    </script>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>