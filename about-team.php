<?php require_once __DIR__ . '/includes/header.php'; ?>

<main class="about-main">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,700;12..96,800&display=swap">
    <style>
        :root {
            --bg: #0a1024;
            --panel: #111a36;
            --ink: #e8ecf8;
            --muted: #9aa6c8;
            --head: "Segoe UI", system-ui, sans-serif;
            --font: "Segoe UI", system-ui, -apple-system, Roboto, Arial, sans-serif
        }

        .about-main {
            background: var(--bg);
            color: var(--ink)
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: var(--head);
            font-weight: 800;
            letter-spacing: -.02em;
            line-height: 1.1
        }

        :focus-visible {
            outline: 3px solid #fff;
            outline-offset: 3px
        }

        .wrap {
            width: min(1200px, 94%);
            margin: auto
        }

        /* BANNER: set your own picture in --banner-img (path relative to this page) */
        .banner {
            --banner-img: url('assets/img/team-banner.jpg');
            position: relative;
            min-height: 440px;
            display: grid;
            place-items: center;
            text-align: center;
            color: #fff;
            padding: 70px 20px 140px;
            clip-path: polygon(0 0, 100% 0, 100% 86%, 0 100%);
            background:
                linear-gradient(rgba(10, 16, 36, .55), rgba(10, 16, 36, .85)),
                var(--banner-img) center/cover,
                radial-gradient(circle at 12% 30%, rgba(234, 88, 12, .6), transparent 40%),
                radial-gradient(circle at 50% 90%, rgba(192, 38, 211, .5), transparent 42%),
                radial-gradient(circle at 88% 25%, rgba(13, 148, 136, .6), transparent 42%),
                var(--bg)
        }

        .banner h1 {
            font-size: clamp(38px, 6vw, 70px);
            max-width: 12em;
            margin: 0 auto 18px
        }

        .banner p {
            font-size: 19px;
            max-width: 34em;
            margin: 0 auto;
            color: #d5def2
        }

        /* DIRECTOR SWITCHER: only the chosen director's pyramid is shown */
        .tabs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: -36px;
            position: relative;
            z-index: 2
        }

        .tab {
            font: inherit;
            color: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(255, 255, 255, .09);
            -webkit-backdrop-filter: blur(12px);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 999px;
            padding: 8px 24px 8px 8px;
            transition: background .2s, box-shadow .2s
        }

        .tab .ph {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            overflow: hidden;
            flex: none;
            background: var(--tint);
            border: 3px solid var(--ac)
        }

        .tab .ph svg,
        .tab .ph img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block
        }

        .tab b {
            display: block;
            font: 800 17px/1.1 var(--head);
            text-align: left
        }

        .tab small {
            font-size: 13px;
            opacity: .85
        }

        .tab:hover {
            border-color: var(--ac)
        }

        .tab[aria-selected="true"] {
            background: linear-gradient(120deg, var(--ac), var(--ac2));
            border-color: transparent;
            box-shadow: 0 12px 30px -8px var(--ac2)
        }

        .tab[aria-selected="true"] .ph {
            border-color: #fff
        }

        /* STAGE: dotted dark board with a glowing pyramid behind the tree */
        .stage {
            position: relative;
            overflow: hidden;
            margin: 30px 0 80px;
            border-radius: 32px;
            padding: 34px 0 54px;
            border: 1px solid rgba(255, 255, 255, .08);
            background: radial-gradient(circle at 1px 1px, rgba(255, 255, 255, .08) 1px, transparent 0) 0 0/22px 22px, var(--panel);
            animation: in .4s ease
        }

        .stage[hidden] {
            display: none
        }

        .stage::before {
            content: "";
            position: absolute;
            inset: 0;
            opacity: .22;
            background: linear-gradient(180deg, var(--ac), var(--ac2));
            clip-path: polygon(38% 0, 62% 0, 100% 100%, 0 100%)
        }

        .stage>* {
            position: relative
        }

        @keyframes in {
            from {
                opacity: 0;
                transform: translateY(10px)
            }
        }

        .intro {
            text-align: center;
            max-width: 34em;
            margin: 0 auto 28px;
            color: var(--muted);
            padding: 0 20px
        }

        .scroll {
            overflow-x: auto;
            padding: 6px 24px 14px
        }

        .tree {
            width: max-content;
            margin: 0 auto
        }

        .hint {
            display: none;
            text-align: center;
            font-size: 14px;
            color: var(--muted);
            margin-top: 8px
        }

        /* ROOT TREE: Director > Team Leaders > Team members */
        .tree ul {
            display: flex;
            justify-content: center;
            position: relative;
            padding: 30px 0 0;
            list-style: none
        }

        .tree li {
            list-style: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            padding: 30px 12px 0
        }

        .tree ul::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            height: 30px;
            border-left: 3px solid var(--ac);
            transform: translateX(-1.5px)
        }

        .tree li::before,
        .tree li::after {
            content: "";
            position: absolute;
            top: 0;
            width: 50%;
            height: 30px;
            border-top: 3px solid var(--ac)
        }

        .tree li::before {
            right: 50%;
            border-right: 3px solid var(--ac)
        }

        .tree li::after {
            left: 50%
        }

        .tree li:first-child::before,
        .tree li:last-child::after {
            border-top: 0
        }

        .tree li:last-child::before {
            border-radius: 0 14px 0 0
        }

        .tree li:first-child::after {
            border-left: 3px solid var(--ac);
            border-radius: 14px 0 0 0
        }

        .tree li:only-child {
            padding-top: 0
        }

        .tree li:only-child::before,
        .tree li:only-child::after {
            display: none
        }

        .tree ul.root {
            padding: 0
        }

        .tree ul.root::before,
        .tree ul.root>li::before,
        .tree ul.root>li::after {
            display: none
        }

        .tree ul.root>li {
            padding-top: 0
        }

        /* CARDS: gradient frame, photo is about 75% of the card, name and role underneath */
        .card {
            width: var(--w);
            flex: none;
            padding: 3px;
            border-radius: 24px;
            background: linear-gradient(150deg, var(--ac), var(--ac2));
            transition: transform .25s, box-shadow .25s
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 36px -12px var(--ac2)
        }

        .card .in {
            background: #0e1630;
            border-radius: 21px;
            padding: 6px 6px 0;
            overflow: hidden
        }

        .card.dir {
            --w: 250px;
            padding: 4px;
            box-shadow: 0 0 0 6px rgba(255, 255, 255, .06), 0 24px 50px -14px var(--ac2)
        }

        .card.lead {
            --w: 206px
        }

        .card.emp {
            --w: 150px;
            padding: 2px;
            border-radius: 20px
        }

        .emp .in {
            border-radius: 18px;
            padding: 5px 5px 0
        }

        .flip {
            position: relative;
            aspect-ratio: 4/5;
            cursor: pointer;
            perspective: 900px;
            border-radius: 16px
        }

        .inner {
            position: absolute;
            inset: 0;
            transform-style: preserve-3d;
            transition: transform .8s cubic-bezier(.3, 1.25, .5, 1)
        }

        .face {
            position: absolute;
            inset: 0;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            overflow: hidden;
            border-radius: 16px;
            background: var(--tint)
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

        .info {
            padding: 11px 4px 13px;
            text-align: center
        }

        .info h4 {
            color: #fff;
            font-size: 14px;
            margin-bottom: 6px
        }

        .info span {
            display: inline-block;
            font-size: 12px;
            font-weight: 700;
            line-height: 1.3;
            color: #fff;
            padding: 3px 11px;
            border-radius: 999px;
            background: linear-gradient(120deg, var(--ac), var(--ac2))
        }

        .dir .info h4 {
            font-size: 23px
        }

        .dir .info span {
            font-size: 13.5px;
            padding: 4px 14px
        }

        .lead .info h4 {
            font-size: 18px
        }

        .lead .info span {
            font-size: 13px
        }

        /* CTA */
        .final {
            padding: 0 0 90px
        }

        .box {
            background: linear-gradient(120deg, #ea580c, #c026d3 55%, #4f46e5);
            color: #fff;
            border-radius: 40px 12px 40px 12px;
            padding: 56px 40px;
            text-align: center
        }

        .box h2 {
            font-size: clamp(30px, 4vw, 46px);
            margin-bottom: 12px
        }

        .box p {
            max-width: 30em;
            margin: 0 auto 24px
        }

        .cta {
            display: inline-block;
            background: #fff;
            color: #1b1140;
            font-weight: 700;
            padding: 15px 30px;
            border-radius: 12px;
            text-decoration: none
        }

        .cta:hover {
            filter: brightness(.94)
        }

        @media (max-width:900px) {
            .hint {
                display: block
            }

            .tab small {
                display: none
            }

            .tab {
                padding-right: 18px
            }
        }

        @media (prefers-reduced-motion:reduce) {
            * {
                animation: none !important;
                transition: none !important
            }
        }
    </style>

    <header class="banner">
        <div>
            <h1>The people behind King Digital</h1>
            <p>Three directors, their team leaders and the specialists who help local businesses grow online. Pick a director to meet their team.</p>
        </div>
    </header>

    <div class="wrap" id="team"><noscript>Please enable JavaScript to see the team.</noscript></div>

    <div class="final" id="join">
        <div class="wrap">
            <div class="box">
                <h2>Want to grow with us?</h2>
                <p>We're always happy to meet curious, kind and ambitious people. Tell us what you'd love to build.</p>
                <a class="cta" href="mailto:hello@yourdomain.com?subject=Joining%20the%20King%20Digital%20team">Email the team</a>
            </div>
        </div>
    </div>

    <script>
        /* =====================================================
           EDIT YOUR TEAM HERE:  Director > leaders > team
           f = front photo URL, b = back photo URL ("" = illustrated avatar)
           Use portrait photos (about 3:4) so faces fit the arch.
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
            role: "Director of Operations",
            bio: "Keeps every franchise running smoothly.",
            f: "",
            b: "",
            ac: "#ea580c",
            ac2: "#dc2626",
            tint: "#ffe0cc",
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
        }, {
            n: "Director Name",
            role: "Director of Technology",
            bio: "Leads the developers who build fast, reliable websites.",
            f: "",
            b: "",
            ac: "#0d9488",
            ac2: "#2563eb",
            tint: "#d3f3ff",
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
        }, {
            n: "Director Name",
            role: "Director of Creative",
            bio: "Shapes the design, content and social media clients love.",
            f: "",
            b: "",
            ac: "#c026d3",
            ac2: "#6d28d9",
            tint: "#f7d9fb",
            leaders: [{
                n: "TL Name",
                role: "Team Leader",
                f: "",
                b: "",
                team: [P("Designer"), P("Designer"), P("Content Writer"), P("Social Media")]
            }]
        }];

        /* ---------- placeholder avatar (shown until you add photos) ---------- */
        var SK = ['#f2b990', '#8a5a3c', '#e8a97e', '#c68863', '#f5c9a5'],
            HR = ['#3a2a22', '#1b1b1b', '#b5581a', '#5a3a22', '#2b2b3a'];

        function av(i, bg, shirt, smile) {
            var sk = SK[i % 5];
            return '<svg viewBox="0 0 120 150" preserveAspectRatio="xMidYMid slice" aria-hidden="true"><rect width="120" height="150" fill="' + bg + '"/>' +
                '<path d="M8 150c0-36 22-52 52-52s52 16 52 52z" fill="' + shirt + '"/><rect x="52" y="84" width="16" height="20" fill="' + sk + '"/>' +
                '<ellipse cx="60" cy="62" rx="26" ry="29" fill="' + sk + '"/><path d="M33 60c-3-28 14-40 28-40s31 12 26 40c-5-12-14-17-27-17s-21 5-27 17z" fill="' + HR[(i * 2 + 1) % 5] + '"/>' +
                '<circle cx="50" cy="66" r="3" fill="#1b2430"/><circle cx="70" cy="66" r="3" fill="#1b2430"/>' +
                '<path d="' + (smile ? 'M50 78q10 10 20 0' : 'M52 79q8 4 16 0') + '" stroke="#1b2430" stroke-width="2.5" fill="none" stroke-linecap="round"/></svg>';
        }

        function face(p, i, side, d) {
            var u = side ? p.b : p.f;
            if (u) return '<img src="' + u + '" alt="' + p.n + '" loading="lazy">';
            return side ? av(i, d.ac2, '#fff', 1) : av(i, d.tint, '#0b1b2e', 0);
        }

        function flip(p, i, d) {
            return '<div class="flip" tabindex="0" role="button" aria-label="' + p.n + ': flip photo"><div class="inner"><div class="face">' + face(p, i, 0, d) + '</div><div class="face back">' + face(p, i, 1, d) + '</div></div></div>';
        }

        /* ---------- build: director switcher + one pyramid per director ---------- */
        var k = 0,
            tabs = '',
            stages = '';

        function card(cls, p, i, d) {
            return '<div class="card ' + cls + '"><div class="in">' + flip(p, i, d) + '<div class="info"><h4>' + p.n + '</h4><span>' + p.role + '</span></div></div></div>';
        }

        DIRECTORS.forEach(function(d, di) {
            k++;
            var people = 0,
                kids = '';
            var mini = d.f ? '<img src="' + d.f + '" alt="">' : av(k, d.tint, '#0b1b2e', 0);
            var top = card('dir', d, k, d);

            d.leaders.forEach(function(l) {
                k++;
                var team = '';
                l.team.forEach(function(e) {
                    k++;
                    people++;
                    team += '<li>' + card('emp', e, k, d) + '</li>'
                });
                kids += '<li>' + card('lead', l, k, d) + (team ? '<ul>' + team + '</ul>' : '') + '</li>';
            });

            tabs += '<button class="tab" role="tab" id="t' + di + '" aria-controls="s' + di + '" aria-selected="false" style="--ac:' + d.ac + ';--ac2:' + d.ac2 + ';--tint:' + d.tint + '">' +
                '<span class="ph">' + mini + '</span><span><b>' + d.n + '</b><small>' + d.role + '</small></span></button>';

            stages += '<section class="stage" role="tabpanel" id="s' + di + '" aria-labelledby="t' + di + '" hidden style="--ac:' + d.ac + ';--ac2:' + d.ac2 + ';--tint:' + d.tint + '">' +
                '<p class="intro">' + d.bio + ' ' + d.leaders.length + ' team leader' + (d.leaders.length > 1 ? 's' : '') + ' and ' + people + ' team members.</p>' +
                '<div class="scroll"><div class="tree"><ul class="root"><li>' + top + '<ul>' + kids + '</ul></li></ul></div></div>' +
                '<p class="hint">Swipe sideways to see the whole team</p></section>';
        });

        document.getElementById('team').innerHTML = '<div class="tabs" role="tablist" aria-label="Directors">' + tabs + '</div>' + stages;

        /* only one director's team is active at a time */
        var T = document.querySelectorAll('.tab'),
            S = document.querySelectorAll('.stage');

        function show(n) {
            T.forEach(function(t, i) {
                t.setAttribute('aria-selected', i === n);
                S[i].hidden = i !== n;
            });
            var sc = S[n].querySelector('.scroll');
            sc.scrollLeft = (sc.scrollWidth - sc.clientWidth) / 2;
        }
        T.forEach(function(t, i) {
            t.addEventListener('click', function() {
                show(i)
            });
            t.addEventListener('keydown', function(e) {
                var j = e.key === 'ArrowRight' ? i + 1 : e.key === 'ArrowLeft' ? i - 1 : -1;
                if (j >= 0 && j < T.length) {
                    show(j);
                    T[j].focus()
                }
            });
        });
        show(0);

        /* touch devices: tap a photo to flip it */
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
    </script>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>