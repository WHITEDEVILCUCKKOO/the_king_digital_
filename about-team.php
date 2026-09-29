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

        /* wider container just for the tree so all employees fit in one row */
        .wrap-wide {
            width: min(1400px, 96%);
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
            font-size: 52px;
            max-width: 11em;
            font-weight: 800;
            margin: 0 auto 20px
        }

        .hero h1 em {
            font-style: normal;
            color: var(--orange);
            position: relative;
            white-space: nowrap
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
            border-radius: 50%;
            display: block;
            background: var(--navy)
        }

        /* legend dots shrink with the level, like the tree */
        .legend .l1 {
            width: 15px;
            height: 15px
        }

        .legend .l2 {
            width: 12px;
            height: 12px
        }

        .legend .l3 {
            width: 9px;
            height: 9px
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
            padding: 46px 3px 0;
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

        /* level 3 (employees) hang from team leaders with dashed lines */
        .tree li li>ul::before {
            border-left-style: dashed
        }

        /* TOP LEVEL = directors side by side, no connector lines above them */
        /* equal-width columns keep the 3 director cards evenly spaced and centered,
           no matter how wide their opened branches are */
        .tree ul.top {
            padding-top: 0;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            align-items: start;
            justify-items: center;
            gap: 18px
        }

        .tree ul.top::before {
            display: none
        }

        .tree ul.top>li {
            padding: 0 8px
        }

        .tree ul.top>li::before,
        .tree ul.top>li::after {
            display: none !important
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

        /* TEAM LEADERS + EMPLOYEES: big photo-first cards.
           The photo fills the whole card, name and role sit on a gradient at the bottom. */
        .lead,
        .emp {
            position: relative;
            background: var(--ac);
            transition: transform .3s
        }

        .lead {
            width: 210px;
            height: 300px;
            border-radius: 26px;
            box-shadow: 0 0 0 4px var(--ac), 0 18px 34px rgba(11, 27, 46, .18)
        }

        .emp {
            width: 156px;
            height: 218px;
            border-radius: 22px;
            box-shadow: 0 0 0 3px #fff, 0 12px 24px rgba(11, 27, 46, .16)
        }

        .lead .flip,
        .emp .flip {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            margin: 0
        }

        .lead .flip {
            --r: 26px
        }

        .emp .flip {
            --r: 22px
        }

        .lead .face,
        .emp .face {
            box-shadow: none
        }

        .js .rv.in.lead:hover,
        .js .rv.in.emp:hover {
            transform: translateY(-6px)
        }

        .cap {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 2;
            padding: 60px 12px 14px;
            text-align: center;
            color: #fff;
            background: linear-gradient(to top, rgba(11, 27, 46, .95) 0%, rgba(11, 27, 46, .72) 55%, rgba(11, 27, 46, 0) 100%);
            pointer-events: none
        }

        .lead .cap {
            border-radius: 0 0 26px 26px
        }

        .emp .cap {
            padding: 46px 8px 12px;
            border-radius: 0 0 22px 22px
        }

        .cap h4 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 7px
        }

        .emp .cap h4 {
            font-size: 14px;
            margin-bottom: 5px
        }

        .cap .role-pill {
            background: var(--tint);
            color: var(--ink);
            font-size: 12px;
            padding: 4px 12px;
            margin-bottom: 0
        }

        .emp .cap span {
            display: inline-block;
            background: var(--ac);
            color: #fff;
            font-weight: 700;
            font-size: 11px;
            line-height: 1.3;
            padding: 3px 10px;
            border-radius: 999px
        }

        /* EXPAND / COLLAPSE */
        .tools {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 8px
        }

        .tools button {
            font: inherit;
            cursor: pointer;
            background: #fff;
            color: var(--ink);
            border: 1px solid var(--line);
            border-radius: 999px;
            padding: 8px 18px;
            font-weight: 600;
            font-size: 14px;
            transition: background .2s, color .2s
        }

        .tools button:hover {
            background: var(--navy);
            color: #fff
        }

        .toggle {
            font: inherit;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            width: 100%;
            margin-top: 12px;
            background: var(--tint, var(--peach));
            color: var(--ink);
            border: 0;
            border-radius: 12px;
            padding: 8px 12px;
            font-weight: 700;
            font-size: 13px;
            transition: background .2s, color .2s
        }

        .toggle:hover {
            background: var(--ac);
            color: #fff
        }

        .toggle i {
            width: 8px;
            height: 8px;
            border-right: 3px solid currentColor;
            border-bottom: 3px solid currentColor;
            transform: rotate(45deg) translateY(-2px);
            transition: transform .3s;
            flex: none
        }

        .node.open>article .toggle i {
            transform: rotate(225deg) translateY(-2px)
        }

        .tree .node:not(.open)>ul {
            display: none
        }

        .node.open>ul {
            animation: pop .35s ease
        }

        @keyframes pop {
            from {
                opacity: 0;
                transform: translateY(-8px)
            }
        }

        .cap .toggle {
            pointer-events: auto;
            margin-top: 10px;
            padding: 7px 12px;
            font-size: 12.5px;
            background: #fff;
            color: var(--ink)
        }

        .cap .toggle:hover {
            background: var(--ac);
            color: #fff
        }

        /* the open director gets a ring so it is clear whose team is showing */
        .node.open>.dir {
            box-shadow: 0 0 0 3px var(--ac), 0 18px 36px rgba(11, 27, 46, .12)
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

        /* DESKTOP: the 3 directors sit in one row; only ONE director's team is open at a time,
           shown in a wide panel underneath that spans the full width */
        @media (min-width:1301px) {
            .tree ul.top {
                grid-template-columns: repeat(var(--n, 3), minmax(0, 1fr))
            }

            .tree ul.top>li {
                display: contents
            }

            .tree ul.top>li>article {
                grid-row: 1;
                justify-self: center
            }

            .tree ul.top>li>ul {
                grid-column: 1/-1;
                grid-row: 2;
                width: 100%;
                margin-top: 14px;
                padding: 46px 24px 40px;
                border-top: 4px solid var(--ac);
                border-radius: 34px;
                background: var(--tint);
                background: color-mix(in srgb, var(--ac) 8%, #fff)
            }

            /* little arrow pointing up at the open director */
            .tree ul.top>li>ul::after {
                content: "";
                position: absolute;
                top: -14px;
                left: var(--pos, 50%);
                width: 22px;
                height: 22px;
                background: var(--ac);
                border-radius: 5px 0 0 0;
                transform: translateX(-50%) rotate(45deg)
            }
        }

        /* TREE — tablet and mobile: vertical rail (Director > Team Leader > Employee) */
        @media (max-width:1300px) {
            .tree ul {
                display: block;
                padding: 0 0 0 20px;
                margin-left: 22px;
                border-left: 3px dashed var(--ac, var(--orange))
            }

            .tree ul.top {
                display: block;
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

            .tree ul.top>li {
                padding: 0 0 30px
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

            .tree ul.top>li::before,
            .tree ul.top>li::after {
                display: none !important
            }

            .dir {
                width: 100%;
                display: grid;
                grid-template-columns: 110px 1fr;
                gap: 4px 16px;
                align-items: start;
                border-radius: 22px;
                padding: 16px;
                text-align: left
            }

            .dir .flip {
                --w: 110px;
                --h: 124px;
                grid-row: 1/4;
                margin: 0
            }

            .lead {
                width: 200px;
                height: 286px
            }

            .emp {
                width: 156px;
                height: 218px
            }
        }

                @media (max-width:520px) {
            .hero h1 {
                font-size: 38px
            }

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
        <header class="hero">
            <i class="orb o1"></i><i class="orb o2"></i><i class="orb o3"></i><i class="orb o4"></i>
            <span class="eyebrow">Meet the team</span>
            <h1>The people behind <em>King Digital</em></h1>
            <p>Every branch of our tree grows from the same root: helping local businesses thrive online.</p>
            <div class="legend">
                <span><i class="l1"></i>Directors</span>
                <span><i class="l2"></i>Team Leaders</span>
                <span><i class="l3"></i>Team members</span>
            </div>
        </header>
    </div>

    <div class="wrap-wide">
        <div class="tree" id="tree"><noscript>Please enable JavaScript to see the team tree.</noscript></div>
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

        /* =====================================================
           EDIT YOUR TEAM HERE
           Director > leaders (Team Leaders) > team (Employees)
           f = front photo URL, b = back photo URL (leave "" for the illustrated avatar)
           Add or remove any { ... } block and the tree lines redraw themselves.
           ===================================================== */
        var P = function(role) {
            return {
                n: "Name Surname",
                role: role,
                f: "",
                b: ""
            }
        };

        var DIRECTORS = [{
                n: "Director Name",
                role: "Director · Operations",
                bio: "Keeps every franchise running smoothly.",
                f: "",
                b: "",
                ac: "#ff6800",
                tint: "#ffe9d6",
                leaders: [{
                        n: "TL Name",
                        role: "Team Leader",
                        f: "",
                        b: "",
                        team: [P("Executive"), P("Executive")]
                    },
                    {
                        n: "TL Name",
                        role: "Team Leader",
                        f: "",
                        b: "",
                        team: [P("Executive"), P("Executive")]
                    },
                    {
                        n: "TL Name",
                        role: "Team Leader",
                        f: "",
                        b: "",
                        team: [P("Executive"), P("Executive")]
                    }
                ]
            },
            {
                n: "Director Name",
                role: "Director · Technology",
                bio: "Leads the developers who build fast, reliable websites.",
                f: "",
                b: "",
                ac: "#19b6a6",
                tint: "#d8f5f1",
                leaders: [{
                        n: "TL Name",
                        role: "Team Leader",
                        f: "",
                        b: "",
                        team: [P("Web Developer"), P("Web Developer")]
                    },
                    {
                        n: "TL Name",
                        role: "Team Leader",
                        f: "",
                        b: "",
                        team: [P("SEO Specialist"), P("SEO Specialist")]
                    }
                ]
            },
            {
                n: "Director Name",
                role: "Director · Creative",
                bio: "Shapes the design, content and social media clients love.",
                f: "",
                b: "",
                ac: "#ff5d7d",
                tint: "#ffe3e9",
                leaders: [{
                    n: "TL Name",
                    role: "Team Leader",
                    f: "",
                    b: "",
                    team: [P("Designer"), P("Designer"), P("Content Writer"), P("Social Media")]
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

        function photo(p, i, cls, tall, ac, tint) {
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

        /* ---------- build the tree: Director > Team Leader > Employee ---------- */
        var k = 0,
            uid = 0,
            html = '<ul class="top" style="--n:' + DIRECTORS.length + '">';

        function toggle(label, count, id) {
            return '<button class="toggle" type="button" aria-expanded="false" aria-controls="' + id + '"><span>' + label + ' (' + count + ')</span><i></i></button>';
        }

        function caption(inner) {
            return '<div class="cap">' + inner + '</div>';
        }

        DIRECTORS.forEach(function(d, di) {
            k++;
            var did = 'b' + (++uid),
                n = DIRECTORS.length,
                pos = 'calc((100% - ' + ((n - 1) * 18) + 'px) / ' + n + ' * ' + (di + .5) + ' + ' + (di * 18) + 'px)';
            /* the first director starts open, the others closed */
            html += '<li class="node' + (di === 0 ? ' open' : '') + '" style="--ac:' + d.ac + ';--tint:' + d.tint + '">' +
                '<article class="dir rv" style="grid-column:' + (di + 1) + '">' + photo(d, k, '', false, d.ac, d.tint) +
                '<div><h3>' + d.n + '</h3><span class="role-pill">' + d.role + '</span><p>' + d.bio + '</p>' +
                toggle('Team leaders', d.leaders.length, did) + '</div></article><ul id="' + did + '" style="--pos:' + pos + '">';

            d.leaders.forEach(function(l) {
                k++;
                var lid = 'b' + (++uid);
                html += '<li class="node"><article class="lead rv">' + photo(l, k, '', false, d.ac, d.tint) +
                    caption('<h4>' + l.n + '</h4><span class="role-pill">' + l.role + '</span>' +
                        toggle('Team', l.team.length, lid)) + '</article><ul id="' + lid + '">';

                l.team.forEach(function(e) {
                    k++;
                    html += '<li><div class="emp rv">' + photo(e, k, '', false, d.ac, d.tint) +
                        caption('<h4>' + e.n + '</h4><span>' + e.role + '</span>') + '</div></li>';
                });

                html += '</ul></li>';
            });

            html += '</ul></li>';
        });

        html += '</ul>';
        document.getElementById('tree').innerHTML = html;

        /* open / close branches */
        function sync() {
            document.querySelectorAll('.toggle').forEach(function(b) {
                b.setAttribute('aria-expanded', b.closest('.node').classList.contains('open'));
            });
        }
        document.querySelectorAll('.toggle').forEach(function(b) {
            b.addEventListener('click', function() {
                var node = b.closest('.node');
                node.classList.toggle('open');
                /* directors work as an accordion: only one team can be active */
                if (node.parentElement.classList.contains('top') && node.classList.contains('open')) {
                    node.parentElement.querySelectorAll(':scope > .node').forEach(function(o) {
                        if (o !== node) o.classList.remove('open');
                    });
                }
                sync();
            });
        });
        sync();

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