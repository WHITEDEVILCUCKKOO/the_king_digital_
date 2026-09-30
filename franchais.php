<?php require_once __DIR__ . '/includes/header.php' ?>

<style>
    :root {
        --orange: #ff6800;
        --navy: #0b1b2e;
        --cream: #fffaf4;
        --peach: #ffe9d6;
        --teal: #19b6a6;
        --sun: #ffc23c;
        --pink: #ff8fa3;
        --sky: #dff3f8;
        --ink: #1b2430;
        --muted: #5b6673;
        --line: #f0e2d3;
        --font: "Segoe UI", "Segoe UI Variable Text", system-ui, -apple-system, Roboto, "Helvetica Neue", Arial, sans-serif
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

    a {
        color: inherit
    }

    :focus-visible {
        outline: 3px solid var(--navy);
        outline-offset: 3px
    }

    .wrap {
        width: min(1120px, 90%);
        margin: auto
    }

    h1,
    h2,
    h3 {
        font-weight: 800;
        letter-spacing: -.02em;
        line-height: 1.08
    }

    h2 {
        font-size: clamp(32px, 4.4vw, 52px)
    }

    .ic {
        width: 26px;
        height: 26px;
        fill: none;
        stroke: currentColor;
        stroke-width: 1.8;
        stroke-linecap: round;
        stroke-linejoin: round
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

    .hero {
        position: relative
    }

    .hero .wrap {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        align-items: center;
        padding: 36px 0 90px
    }

    .tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--peach);
        color: #a44300;
        font-weight: 600;
        font-size: 14px;
        padding: 8px 16px;
        border-radius: 999px;
        margin-bottom: 22px
    }

    .tag i {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--orange);
        animation: ping 1.6s infinite
    }

    .hero h1 {
        font-size: clamp(42px, 6vw, 52px);
        margin-bottom: 22px
    }

    .hero h1 span {
        position: relative;
        white-space: nowrap
    }

    .hero p {
        color: var(--muted);
        font-size: 20px;
        max-width: 30em;
        margin-bottom: 32px
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
        margin-left: 20px;
        font-weight: 600;
        text-decoration: none;
        border-bottom: 2px solid var(--orange)
    }

    .art svg {
        width: 100%;
        height: auto;
        display: block;
        overflow: visible
    }

    .float {
        animation: bob 4.5s ease-in-out infinite
    }

    .float2 {
        animation: bob 5.5s -2s ease-in-out infinite
    }

    .float3 {
        animation: bob 6s -3.5s ease-in-out infinite
    }

    .cloud {
        animation: drift 14s ease-in-out infinite alternate
    }

    .cloud2 {
        animation: drift 18s -6s ease-in-out infinite alternate
    }

    .win {
        animation: twinkle 3s infinite
    }

    .w2 {
        animation-delay: .7s
    }

    .w3 {
        animation-delay: 1.5s
    }

    .w4 {
        animation-delay: 2.2s
    }

    .spin {
        transform-origin: center;
        transform-box: fill-box;
        animation: spin 30s linear infinite
    }

    .pulse {
        transform-origin: center;
        transform-box: fill-box;
        animation: ring 2.4s ease-out infinite
    }

    .pulse.p2 {
        animation-delay: .8s
    }

    .pulse.p3 {
        animation-delay: 1.6s
    }

    @keyframes bob {
        50% {
            transform: translateY(-14px)
        }
    }

    @keyframes drift {
        to {
            transform: translateX(34px)
        }
    }

    @keyframes twinkle {

        0%,
        100% {
            opacity: 1
        }

        50% {
            opacity: .25
        }
    }

    @keyframes spin {
        to {
            transform: rotate(360deg)
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

    @keyframes ping {
        50% {
            transform: scale(1.7);
            opacity: .4
        }
    }

    @keyframes draw {
        to {
            stroke-dashoffset: 0
        }
    }

    .strip {
        background: var(--navy);
        color: #fff;
        overflow: hidden;
        transform: rotate(-1.2deg) scale(1.03);
        padding: 18px 0;
        margin: 10px 0
    }

    .track {
        display: flex;
        width: max-content;
        animation: slide 30s linear infinite
    }

    .strip:hover .track {
        animation-play-state: paused
    }

    .track span {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 0 30px;
        font-weight: 600;
        font-size: 18px;
        white-space: nowrap
    }

    .track .ic {
        color: var(--sun)
    }

    @keyframes slide {
        to {
            transform: translateX(-50%)
        }
    }

    section {
        padding: 40px 0;
        position: relative
    }

    .head {
        max-width: 640px;
        margin-bottom: 52px
    }

    .head p {
        color: var(--muted);
        margin-top: 14px
    }

    .franchise {
        width: 100%;
        background: #fffaf5
    }

    .franchise>img {
        margin: 0 auto;
    }

    #services {
        position: relative;
        padding: 40px 20px;
        background: #fffaf5
    }

    #services::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: #ff6800;
        border-radius: 10px
    }

    #services .wrap {
        width: 100%;
        max-width: 1100px;
        margin: 0 auto
    }

    #services .head {
        max-width: 700px;
        margin: 0 auto 42px;
        text-align: center
    }

    #services .eyebrow {
        display: inline-block;
        margin-bottom: 12px;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #ff6800
    }

    #services .head h2 {
        margin: 0 0 14px;
        font-size: clamp(32px, 4vw, 48px);
        line-height: 1.08;
        font-weight: 800;
        color: #07111f
    }

    #services .head p {
        max-width: 620px;
        margin: 0 auto;
        font-size: 15px;
        line-height: 1.7;
        color: #66717e
    }

    #services .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px
    }

    #services .card {
        background: #fff;
        border: 1px solid #eadfd5;
        border-radius: 16px;
        padding: 26px;
        transition: .3s ease
    }

    #services .card:hover {
        transform: translateY(-6px);
        border-color: #ff6800;
        box-shadow: 0 18px 35px rgba(255, 104, 0, .12)
    }

    #services .badge {
        width: 48px;
        height: 48px;
        border-radius: 13px;
        display: grid;
        place-items: center;
        margin-bottom: 18px
    }

    #services .badge .ic {
        width: 22px;
        height: 22px
    }

    #services .b-o {
        background: #ffe5d2;
        color: #ff6800
    }

    #services .b-p {
        background: #ffe1e7;
        color: #d43d5e
    }

    #services .b-s {
        background: #fff0c9;
        color: #b98300
    }

    #services .b-b {
        background: #dff3fb;
        color: #2779a0
    }

    #services .b-t {
        background: #d8f5f1;
        color: #0c8a7d
    }

    #services .b-n {
        background: #e3e8ee;
        color: #07111f
    }

    #services .card h3 {
        color: #07111f;
        margin-bottom: 8px
    }

    #services .card p {
        color: #66717e
    }

    #services .badge {
        width: 48px;
        height: 48px;
        margin-bottom: 18px;
        border-radius: 13px;
        display: grid;
        place-items: center;
        transition: transform .3s ease
    }

    #services .card:hover .badge {
        transform: scale(1.08) rotate(-4deg)
    }

    #services .badge .ic {
        width: 22px;
        height: 22px
    }

    #services .card h3 {
        margin: 0 0 8px;
        font-size: 18px;
        line-height: 1.2;
        font-weight: 800;
        color: #07111f
    }

    #services .card p {
        margin: 0;
        font-size: 13px;
        line-height: 1.6;
        color: #737d89
    }

    @media (max-width:900px) {
        /* .franchise>img {
            max-height: 350px
        } */

        #services {
            padding: 40px 20px
        }

        #services .grid {
            grid-template-columns: repeat(2, 1fr)
        }
    }

    @media (max-width:600px) {
        .franchise>img {
            width: 90%;
            margin-top: 18px;
            border-radius: 14px
        }

        #services {
            padding: 50px 16px 60px
        }

        #services .head {
            margin-bottom: 30px
        }

        #services .head h2 {
            font-size: 30px
        }

        #services .grid {
            grid-template-columns: 1fr
        }

        #services .card {
            min-height: auto;
            padding: 22px
        }
    }

    .terr {
        background: var(--sky)
    }

    .terr .wrap {
        display: grid;
        grid-template-columns: 1.05fr .95fr;
        gap: 60px;
        align-items: center
    }

    .terr p {
        color: #3f5566;
        margin: 16px 0 24px
    }

    .list {
        list-style: none;
        padding: 0;
        display: grid;
        gap: 12px
    }

    .list li {
        display: flex;
        gap: 12px;
        align-items: center;
        font-weight: 600
    }

    .list .ic {
        background: #fff;
        border-radius: 50%;
        padding: 5px;
        width: 32px;
        height: 32px;
        color: var(--teal);
        flex: none
    }

    .map {
        background: #fff;
        border-radius: 28px;
        padding: 14px;
        box-shadow: 0 24px 50px rgba(39, 121, 160, .18);
        transform: rotate(1.5deg)
    }

    .map svg {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 18px
    }

    .steps {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        position: relative
    }

    .steps:before {
        content: "";
        position: absolute;
        left: 8%;
        right: 8%;
        top: 38px;
        border-top: 3px dotted var(--orange);
        opacity: .5
    }

    .step {
        text-align: center;
        position: relative
    }

    .step .bub {
        width: 76px;
        height: 76px;
        border-radius: 50%;
        background: var(--orange);
        color: #fff;
        display: grid;
        place-items: center;
        margin: 0 auto 18px;
        box-shadow: 0 0 0 8px var(--cream);
        position: relative;
        transition: transform .3s
    }

    .step:nth-child(2) .bub {
        background: var(--teal)
    }

    .step:nth-child(3) .bub {
        background: var(--sun);
        color: var(--navy)
    }

    .step:nth-child(4) .bub {
        background: var(--navy)
    }

    .step:hover .bub {
        transform: scale(1.12) rotate(6deg)
    }

    .bub .ic {
        width: 32px;
        height: 32px
    }

    .step h3 {
        font-size: 21px;
        margin-bottom: 6px
    }

    .step p {
        color: var(--muted);
        font-size: 15.5px
    }

    .team {
        background: var(--peach);
        overflow: hidden
    }

    .team .wrap {
        display: grid;
        grid-template-columns: .9fr 1.1fr;
        gap: 60px;
        align-items: center
    }

    .team p {
        color: #7a4a25;
        margin-top: 16px;
        max-width: 32em
    }

    .faces {
        display: flex;
        gap: 18px;
        justify-content: center
    }

    .faces svg {
        width: 31%;
        height: auto;
        border-radius: 28px;
        background: #fff;
        box-shadow: 0 14px 30px rgba(164, 67, 0, .15)
    }

    .faces svg:nth-child(2) {
        margin-top: 34px
    }

    .faq details {
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 16px;
        margin-bottom: 12px;
        max-width: 780px
    }

    .faq summary {
        cursor: pointer;
        list-style: none;
        padding: 20px 24px;
        font-weight: 600;
        font-size: 18px;
        display: flex;
        justify-content: space-between;
        gap: 16px
    }

    .faq summary::-webkit-details-marker {
        display: none
    }

    .faq summary:after {
        content: "+";
        color: var(--orange);
        font-size: 28px;
        line-height: 1;
        transition: transform .25s
    }

    .faq details[open] summary:after {
        transform: rotate(45deg)
    }

    .faq details p {
        padding: 0 24px 22px;
        color: var(--muted)
    }

    .final {
        padding: 30px 0 100px
    }

    .box {
        background: linear-gradient(135deg, var(--orange), #ff9440);
        color: #fff;
        border-radius: 34px;
        padding: 80px 60px;
        position: relative;
        overflow: hidden;
        text-align: center
    }

    .box h2 {
        position: relative;
        max-width: 14em;
        margin: 0 auto 16px
    }

    .box p {
        position: relative;
        opacity: .92;
        max-width: 30em;
        margin: 0 auto 30px
    }

    .box .cta {
        background: var(--navy);
        box-shadow: 0 6px 0 #000;
        position: relative
    }

    .box .cta:hover {
        box-shadow: 0 3px 0 #000
    }

    .conf {
        position: absolute;
        border-radius: 50%;
        animation: bob 5s ease-in-out infinite
    }

    .c1 {
        width: 70px;
        height: 70px;
        background: var(--sun);
        left: 6%;
        top: 14%
    }

    .c2 {
        width: 34px;
        height: 34px;
        background: #fff;
        right: 10%;
        top: 20%;
        animation-delay: -1.5s
    }

    .c3 {
        width: 48px;
        height: 48px;
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

    .c5 {
        width: 120px;
        height: 120px;
        border: 14px solid rgba(255, 255, 255, .22);
        left: -30px;
        bottom: -30px
    }

    footer {
        text-align: center;
        color: var(--muted);
        font-size: 14px;
        padding: 0 0 40px
    }

    @media (max-width:860px) {

        .hero .wrap,
        .terr .wrap,
        .team .wrap {
            grid-template-columns: 1fr
        }

        .grid {
            grid-template-columns: 1fr
        }

        .steps {
            grid-template-columns: 1fr 1fr;
            row-gap: 36px
        }

        .steps:before {
            display: none
        }

        section {
            padding: 70px 0
        }

        .box {
            padding: 56px 26px
        }

        .ghost {
            display: inline-block;
            margin: 18px 0 0
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

    .jump {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center
    }

    .jump a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 20px;
        border-radius: 16px;
        background: #fff;
        font-weight: 700;
        text-decoration: none;
        border: 2px solid var(--c);
        color: var(--c);
        transition: transform .25s, background .25s, color .25s
    }

    .jump a:hover {
        transform: translateY(-6px) rotate(-2deg);
        background: var(--c);
        color: #fff
    }

    .jump small {
        font-weight: 500;
        opacity: .8
    }

    .city {
        border-radius: 38px;
        margin-bottom: 34px;
        position: relative;
        overflow: hidden;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        align-items: center;
        padding: 56px;
        background-color: var(--bg);
        border: 1px solid rgba(0, 0, 0, .05)
    }

    .city.rev .txt {
        order: 2
    }

    .delhi {
        --bg: #fff0dc;
        --ac: #c8402a;
        background-image: radial-gradient(#ecc79b 1.6px, transparent 1.8px);
        background-size: 24px 24px
    }

    .lucknow {
        --bg: #e4f5eb;
        --ac: #0d7a5a;
        background-image: radial-gradient(rgba(13, 122, 90, .2) 2px, transparent 2.4px);
        background-size: 30px 30px
    }

    .patna {
        --bg: #efe8fb;
        --ac: #6b46c1;
        background-image: repeating-linear-gradient(45deg, transparent 0 14px, rgba(107, 70, 193, .09) 14px 16px)
    }

    .fl2 {
        transform-box: fill-box;
        transform-origin: 50% 100%;
        animation: flk .6s ease-in-out infinite alternate
    }

    @keyframes flk {
        from {
            transform: scale(1, .8)
        }

        to {
            transform: scale(1.15, 1.15)
        }
    }

    .txt {
        position: relative;
        z-index: 2
    }

    .live {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        background: #fff;
        color: #0d6b3a;
        font-weight: 700;
        font-size: 14px;
        padding: 7px 15px;
        border-radius: 999px;
        margin-bottom: 20px
    }

    .live i {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: var(--green);
        animation: ping 1.6s infinite
    }

    .city h2 {
        font-size: clamp(54px, 8vw, 100px);
        color: var(--ac);
        line-height: .95
    }

    .hi {
        font-size: 26px;
        font-weight: 600;
        color: var(--ac);
        opacity: .75;
        margin: 6px 0 18px
    }

    .city p {
        color: #3d4753;
        max-width: 30em;
        margin-bottom: 24px
    }

    .chips {
        display: flex;
        flex-wrap: wrap;
        gap: 10px
    }

    .chip {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #fff;
        color: var(--ac);
        font-weight: 700;
        font-size: 14.5px;
        padding: 9px 16px 9px 12px;
        border-radius: 999px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, .06);
        transition: transform .25s
    }

    .chip:hover {
        transform: translateY(-4px) rotate(-3deg)
    }

    .chip .ic {
        width: 20px;
        height: 20px
    }

    .scene {
        position: relative;
        z-index: 2
    }

    .scene svg {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 28px;
        box-shadow: 0 24px 50px rgba(0, 0, 0, .14);
        transition: transform .5s
    }

    .city:hover .scene svg {
        transform: scale(1.02) rotate(.6deg)
    }

    .deco {
        position: absolute;
        color: var(--ac);
        opacity: .13;
        width: 120px;
        height: 120px;
        stroke-width: 1.2;
        animation: spin 40s linear infinite
    }

    .deco.d1 {
        right: -30px;
        bottom: -30px;
        width: 190px;
        height: 190px
    }

    .deco.d2 {
        left: -24px;
        top: -24px;
        animation-direction: reverse
    }

    .bob {
        animation: bob 4.5s ease-in-out infinite
    }

    .fly {
        animation: fly 15s linear infinite
    }

    .fly.f2 {
        animation-duration: 22s;
        animation-delay: -8s
    }

    .tw {
        animation: tw 3s infinite
    }

    .tw2 {
        animation-delay: 1s
    }

    .tw3 {
        animation-delay: 2s
    }

    .swing {
        animation: swing 3.6s ease-in-out infinite alternate
    }

    .swing.s2 {
        animation-delay: -1.8s
    }

    .flame {
        transform-origin: 210px 246px;
        animation: flame .7s ease-in-out infinite alternate
    }

    .wave {
        transform-origin: 210px 40px;
        animation: wave 1.2s ease-in-out infinite alternate
    }

    .glow {
        animation: glow 3.5s ease-in-out infinite
    }

    .waves {
        animation: waves 4s linear infinite
    }

    .waves.w2 {
        animation-duration: 6s;
        animation-direction: reverse;
        opacity: .5
    }

    .kite {
        animation: kite 6s ease-in-out infinite alternate
    }

    .kite.k2 {
        animation-delay: -2s
    }

    .kite.k3 {
        animation-delay: -4s
    }

    .lit {
        animation: tw 2.6s infinite
    }

    .lit.l2 {
        animation-delay: 1.3s
    }

    .shim {
        animation: tw 4s infinite
    }

    @keyframes bob {
        50% {
            transform: translateY(-12px)
        }
    }

    @keyframes fly {
        from {
            transform: translateX(-60px)
        }

        to {
            transform: translateX(480px)
        }
    }

    @keyframes tw {

        0%,
        100% {
            opacity: 1
        }

        50% {
            opacity: .2
        }
    }

    @keyframes swing {
        from {
            transform: rotate(-9deg)
        }

        to {
            transform: rotate(9deg)
        }
    }

    @keyframes flame {
        from {
            transform: scale(1, .85)
        }

        to {
            transform: scale(1.15, 1.1)
        }
    }

    @keyframes wave {
        from {
            transform: scaleX(1) skewY(-4deg)
        }

        to {
            transform: scaleX(.82) skewY(5deg)
        }
    }

    @keyframes glow {
        50% {
            transform: scale(1.08);
            opacity: .8
        }
    }

    @keyframes waves {
        to {
            transform: translateX(-80px)
        }
    }

    @keyframes kite {
        from {
            transform: translate(0, 0) rotate(-6deg)
        }

        to {
            transform: translate(10px, -16px) rotate(6deg)
        }
    }

    @keyframes spin {
        to {
            transform: rotate(360deg)
        }
    }

    @keyframes ping {
        50% {
            transform: scale(1.7);
            opacity: .4
        }
    }

    @keyframes draw {
        to {
            stroke-dashoffset: 0
        }
    }

    .gl {
        transform-box: fill-box;
        transform-origin: center
    }

    :root {
        --green: #1a9f5a
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

    /* PROGRESS (horizontal), DOCUMENTS, APPLY FORM */
    .proc,
    .docs,
    .apply {
        padding: 40px 0
    }

    .proc .head p,
    .docs .head p {
        margin-inline: auto
    }

    .steps {
        display: flex;
        margin-top: 46px;
        overflow-x: auto;
        padding-bottom: 14px;
    }

    .ps {
        position: relative;
        flex: 1 0 210px;
        text-align: center;
        padding: 0 14px;
        scroll-snap-align: center
    }

    .ps::before {
        content: "";
        position: absolute;
        top: 27px;
        left: -50%;
        width: 100%;
        height: 4px;
        border-radius: 4px;
        background: var(--orange)
    }

    .ps:first-child::before {
        display: none
    }

    .js .ps::before {
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .7s ease calc(var(--i) * .25s)
    }

    .js .steps.in .ps::before {
        transform: scaleX(1)
    }

    .ps b {
        position: relative;
        z-index: 1;
        display: grid;
        place-items: center;
        width: 58px;
        height: 58px;
        margin: 0 auto 16px;
        border-radius: 50%;
        background: var(--orange);
        color: #fff;
        font-size: 22px;
        box-shadow: 0 0 0 7px var(--peach)
    }

    .ps:last-child b {
        background: var(--navy)
    }

    .ps h3 {
        font-size: 19px;
        color: var(--navy);
        margin-bottom: 4px
    }

    .ps p {
        color: var(--muted);
        font-size: 15.5px
    }

    .dgrid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
        margin-top: 40px
    }

    .doc {
        background: #fff;
        border: 2px solid var(--line);
        border-radius: 22px;
        padding: 24px;
        display: flex;
        gap: 16px
    }

    .doc .di {
        flex: none;
        display: grid;
        place-items: center;
        width: 46px;
        height: 46px;
        border-radius: 14px;
        background: var(--peach);
        color: var(--orange)
    }

    .doc h3 {
        font-size: 18px;
        color: var(--navy)
    }

    .doc p {
        color: var(--muted);
        font-size: 15.5px
    }

    .doc em {
        display: inline-block;
        margin-top: 8px;
        font-style: normal;
        font-size: 13px;
        font-weight: 700;
        color: var(--teal)
    }

    .apply .wrap {
        display: grid;
        grid-template-columns: .9fr 1.1fr;
        gap: 56px;
        align-items: center
    }

    .apply .head p {
        max-width: 28em
    }

    .fc {
        display: grid;
        perspective: 1400px
    }

    .fc .face {
        grid-area: 1/1;
        border-radius: 30px;
        padding: 36px;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        transition: transform .9s cubic-bezier(.3, 1.2, .5, 1), visibility 0s
    }

    .fc .front {
        background: #fff;
        border: 2px solid var(--line);
        box-shadow: 0 24px 50px -24px rgba(255, 104, 0, .45)
    }

    .fc .back {
        background: var(--navy);
        color: #fff;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transform: rotateY(-180deg);
        visibility: hidden
    }

    .fc.done .front {
        transform: rotateY(180deg);
        visibility: hidden;
        transition: transform .9s cubic-bezier(.3, 1.2, .5, 1), visibility 0s .45s
    }

    .fc.done .back {
        transform: none;
        visibility: visible;
        transition: transform .9s cubic-bezier(.3, 1.2, .5, 1), visibility 0s 0s
    }

    .front label {
        display: block;
        font-weight: 700;
        font-size: 15px;
        color: var(--navy);
        margin-bottom: 6px
    }

    .front input {
        width: 100%;
        font: inherit;
        padding: 13px 16px;
        border: 2px solid var(--line);
        border-radius: 14px;
        background: var(--cream);
        margin-bottom: 18px
    }

    .front input:focus {
        outline: 0;
        border-color: var(--orange)
    }

    .fbtn {
        display: inline-block;
        width: 100%;
        font: inherit;
        font-weight: 700;
        cursor: pointer;
        border: 0;
        border-radius: 14px;
        padding: 15px 24px;
        background: var(--orange);
        color: #fff;
        box-shadow: 0 6px 0 #c24e00
    }

    .fbtn:active {
        transform: translateY(3px);
        box-shadow: 0 3px 0 #c24e00
    }

    .front small {
        display: block;
        margin-top: 14px;
        color: var(--muted);
        font-size: 14px
    }

    .back .ok {
        display: grid;
        place-items: center;
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: var(--teal);
        margin-bottom: 18px
    }

    .back .ok .ic {
        width: 36px;
        height: 36px
    }

    .back h3 {
        font-size: 26px;
        margin-bottom: 10px
    }

    .back p {
        color: #cfd8e6;
        margin-bottom: 24px
    }

    .blinks {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center
    }

    .blinks a {
        font-weight: 700;
        text-decoration: none;
        padding: 12px 22px;
        border-radius: 12px;
        background: var(--orange);
        color: #fff
    }

    .blinks a+a {
        background: transparent;
        border: 2px solid #fff
    }

    @media (max-width:860px) {

        .dgrid,
        .apply .wrap {
            grid-template-columns: 1fr
        }

        .apply .wrap {
            gap: 30px
        }

        .fc .face {
            padding: 26px 22px
        }
    }

    @media (prefers-reduced-motion:reduce) {

        .fc .face,
        .js .ps::before {
            transition-duration: .01s !important
        }
    }

    /* SERVICES: two equal columns (popular left, all services right) */
    .duo {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 26px;
        margin-top: 42px;
        align-items: stretch
    }

    .pn {
        display: flex;
        flex-direction: column;
        border-radius: 32px;
        padding: 32px
    }

    .pn>h3 {
        font-size: 24px;
        color: var(--navy)
    }

    .pn .sub {
        color: var(--muted);
        margin: 4px 0 22px
    }

    .pop {
        background: var(--peach)
    }

    .all {
        background: #fff;
        border: 2px solid var(--line)
    }

    .pl {
        flex: 1;
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-auto-rows: 1fr;
        gap: 14px
    }

    .pi {
        background: #fff;
        border-radius: 22px;
        padding: 20px;
        box-shadow: 0 10px 22px -16px rgba(11, 27, 46, .4)
    }

    .pi h4 {
        font-size: 18px;
        color: var(--navy);
        margin: 12px 0 4px
    }

    .pi p {
        color: var(--muted);
        font-size: 15px;
        line-height: 1.5
    }

    .tile {
        display: inline-grid;
        place-items: center;
        flex: none;
        width: 40px;
        height: 40px;
        border-radius: 12px;
        color: var(--c);
        background: var(--b)
    }

    .tile .ic {
        width: 21px;
        height: 21px
    }

    .al {
        list-style: none;
        padding: 0;
        margin: 0 0 24px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px 16px
    }

    .al li {
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 600;
        font-size: 15.5px;
        color: #3d4a5c
    }

    .vall {
        margin-top: auto;
        text-align: center;
        text-decoration: none;
        font-weight: 700;
        background: var(--navy);
        color: #fff;
        padding: 15px 24px;
        border-radius: 14px;
        box-shadow: 0 6px 0 #000;
        transition: transform .15s
    }

    .vall:hover {
        transform: translateY(-2px)
    }

    /* FORM: one wide card, orange panel on the left, fields on the right */
    .apply .wrap {
        display: block;
        max-width: 1000px
    }

    .fc .front {
        display: grid;
        grid-template-columns: .9fr 1.1fr;
        padding: 0;
        overflow: hidden;
        border: 0;
        box-shadow: 0 30px 60px -28px rgba(255, 104, 0, .55)
    }

    .fl {
        color: #fff;
        padding: 44px 38px;
        background: radial-gradient(circle at 110% 110%, rgba(255, 255, 255, .25) 0 26%, transparent 27%), radial-gradient(circle at -10% -10%, rgba(255, 255, 255, .18) 0 20%, transparent 21%), linear-gradient(150deg, var(--orange), #ff9a3c)
    }

    .fl .eyebrow {
        color: #fff;
        opacity: .9
    }

    .fl h2 {
        font-size: clamp(26px, 3vw, 36px);
        margin-bottom: 14px
    }

    .fl p {
        opacity: .95;
        margin-bottom: 22px
    }

    .fchips {
        display: flex;
        gap: 10px;
        flex-wrap: wrap
    }

    .fchips span {
        background: rgba(255, 255, 255, .22);
        padding: 6px 16px;
        border-radius: 999px;
        font-weight: 700;
        font-size: 14px
    }

    .fr {
        padding: 40px 38px
    }

    @media (max-width:860px) {

        .duo,
        .pl,
        .al,
        .fc .front {
            grid-template-columns: 1fr
        }

        .pn {
            padding: 24px 20px
        }

        .fl,
        .fr {
            padding: 28px 22px
        }
    }

    .cities {
        padding: 40px 0 70px;
        background: linear-gradient(180deg, var(--cream), #fff3e6 55%, var(--cream))
    }

    .cities .head p {
        margin-inline: auto
    }

    .jump {
        margin-bottom: 44px
    }

    @media (max-width:860px) {
        .city {
            grid-template-columns: 1fr;
            padding: 34px 22px;
            border-radius: 28px
        }

        .city.rev .txt {
            order: 0
        }

        .deco {
            width: 90px;
            height: 90px
        }

        .cities {
            padding: 70px 0 40px
        }
    }
</style>

<svg width="0" height="0" style="position:absolute" aria-hidden="true">
    <symbol id="web" viewBox="0 0 24 24">
        <rect x="3" y="4" width="18" height="16" rx="3" />
        <path d="M3 9h18M7 6.5h.01M10 6.5h.01" />
    </symbol>
    <symbol id="heart" viewBox="0 0 24 24">
        <path d="M12 20s-7-4.5-7-10a4 4 0 0 1 7-2.5A4 4 0 0 1 19 10c0 5.5-7 10-7 10z" />
    </symbol>
    <symbol id="mega" viewBox="0 0 24 24">
        <path d="M3 11v2a1 1 0 0 0 1 1h2l5 4V6L6 10H4a1 1 0 0 0-1 1zM15 9a4 4 0 0 1 0 6M18 6a8 8 0 0 1 0 12" />
    </symbol>
    <symbol id="search" viewBox="0 0 24 24">
        <circle cx="11" cy="11" r="6.5" />
        <path d="M16 16l5 5" />
    </symbol>
    <symbol id="pen" viewBox="0 0 24 24">
        <path d="M4 20l1-4L16 5l3 3L8 19zM14 7l3 3" />
    </symbol>
    <symbol id="chart" viewBox="0 0 24 24">
        <path d="M5 20v-7M11 20V5M17 20v-10M3 20h18" />
    </symbol>
    <symbol id="pin" viewBox="0 0 24 24">
        <path d="M12 21s7-6 7-11a7 7 0 0 0-14 0c0 5 7 11 7 11z" />
        <circle cx="12" cy="10" r="2.5" />
    </symbol>
    <symbol id="chat" viewBox="0 0 24 24">
        <path d="M4 5h16v11H9l-5 4z" />
    </symbol>
    <symbol id="eye" viewBox="0 0 24 24">
        <path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12z" />
        <circle cx="12" cy="12" r="3" />
    </symbol>
    <symbol id="rocket" viewBox="0 0 24 24">
        <path d="M5 19c0-3 1-4 3-5m-2 5c3 0 4-1 5-3M14 14l-4-4c1-4 5-7 10-7 0 5-3 9-7 10zM15 8.5h.01" />
    </symbol>
    <symbol id="check" viewBox="0 0 24 24">
        <path d="M5 12.5l4.5 4.5L19 7.5" />
    </symbol>
    <symbol id="users" viewBox="0 0 24 24">
        <circle cx="9" cy="8" r="3.5" />
        <path d="M2.5 20a6.5 6.5 0 0 1 13 0M16 4.8a3.5 3.5 0 0 1 0 6.4M18 14.5a6.5 6.5 0 0 1 3.5 5.5" />
    </symbol>
    <symbol id="star" viewBox="0 0 24 24">
        <path d="M12 3l2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17l-5.4 2.9 1-6.1L3.2 9.5l6.1-.9z" />
    </symbol>
    <symbol id="landmark" viewBox="0 0 24 24">
        <path d="M3 21h18M5 21V10M9 21V10M15 21V10M19 21V10M2 10l10-6 10 6z" />
    </symbol>
    <symbol id="train" viewBox="0 0 24 24">
        <rect x="5" y="3" width="14" height="14" rx="3" />
        <path d="M5 11h14M8 21l2-4M16 21l-2-4M9 14h.01M15 14h.01" />
    </symbol>
    <symbol id="shop" viewBox="0 0 24 24">
        <path d="M4 9l1.5-5h13L20 9M4 9h16v11H4zM4 9c0 2 3 2 4 0 1 2 3 2 4 0 1 2 3 2 4 0 1 2 4 2 4 0M10 20v-6h4v6" />
    </symbol>
    <symbol id="arch" viewBox="0 0 24 24">
        <path d="M5 21V11a7 7 0 0 1 14 0v10M2 21h20M9 21v-6a3 3 0 0 1 6 0v6" />
    </symbol>
    <symbol id="flower" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="2.5" />
        <path d="M12 9.5V3M12 14.5V21M9.5 12H3M14.5 12H21M10.2 10.2L5.5 5.5M13.8 13.8l4.700 4.700M13.8 10.2l4.700-4.700M10.2 13.8l-4.700 4.700" />
    </symbol>
    <symbol id="lantern" viewBox="0 0 24 24">
        <path d="M9 3h6M12 3v2M8 9a4 4 0 0 1 8 0v6a4 4 0 0 1-8 0zM10 19v2h4v-2M8 12h8" />
    </symbol>
    <symbol id="kite" viewBox="0 0 24 24">
        <path d="M12 2l6 8-6 9-6-9zM12 2v17M6 10h12M12 19c0 2 2 2 2 4" />
    </symbol>
    <symbol id="wave" viewBox="0 0 24 24">
        <path d="M2 9c3-4 5 4 8 0s5 4 8 0 3-2 4-1M2 16c3-4 5 4 8 0s5 4 8 0 3-2 4-1" />
    </symbol>
    <symbol id="boat" viewBox="0 0 24 24">
        <path d="M3 17h18l-3 4H6zM12 3v14M12 4l6 10h-6M11 7L6 14h5" />
    </symbol>
    <symbol id="sun" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="4" />
        <path d="M12 2v3M12 19v3M2 12h3M19 12h3M5 5l2 2M17 17l2 2M19 5l-2 2M7 17l-2 2" />
    </symbol>
</svg>

<div class="hero">
    <div class="wrap">
        <div>
            <div class="tag"><i></i>Live in Delhi, Lucknow &amp; Patna</div>
            <h1>Your digital business, <span style="color: var(--orange);">right at home</span></h1>
            <p>Partner with King Digital in your territory. You bring the local relationships, we bring the tools, the training and a team that has your back.</p>
            <a class="cta" href="contact.php">Start the conversation <svg class="ic">
                    <use href="#rocket" />
                </svg></a><a class="ghost" href="#cities">Meet our live cities</a>
        </div>
        <div class="art">
            <svg viewBox="0 0 520 470" role="img" aria-label="Illustration of a city skyline with floating website, chart and message cards">
                <circle cx="260" cy="250" r="200" fill="#ffe9d6" />
                <g class="spin">
                    <circle cx="260" cy="250" r="225" fill="none" stroke="#ff6800" stroke-opacity=".35" stroke-width="2" stroke-dasharray="4 14" stroke-linecap="round" />
                </g>
                <circle cx="430" cy="90" r="34" fill="#ffc23c" />
                <g class="cloud" fill="#fff">
                    <ellipse cx="90" cy="110" rx="46" ry="16" />
                    <ellipse cx="120" cy="98" rx="30" ry="17" />
                </g>
                <g class="cloud2" fill="#fff">
                    <ellipse cx="380" cy="160" rx="40" ry="13" />
                    <ellipse cx="402" cy="150" rx="24" ry="14" />
                </g>
                <rect x="70" y="300" width="70" height="110" rx="6" fill="#0b1b2e" />
                <rect x="150" y="250" width="80" height="160" rx="6" fill="#19b6a6" />
                <rect x="240" y="200" width="90" height="210" rx="6" fill="#0b1b2e" />
                <rect x="340" y="275" width="70" height="135" rx="6" fill="#ff6800" />
                <rect x="415" y="320" width="45" height="90" rx="6" fill="#ffc23c" />
                <g fill="#fff">
                    <rect class="win" x="84" y="318" width="14" height="14" rx="3" />
                    <rect class="win w3" x="112" y="318" width="14" height="14" rx="3" />
                    <rect class="win w2" x="84" y="348" width="14" height="14" rx="3" />
                    <rect class="win w4" x="112" y="348" width="14" height="14" rx="3" />
                    <rect class="win w2" x="166" y="268" width="14" height="14" rx="3" />
                    <rect class="win" x="198" y="268" width="14" height="14" rx="3" />
                    <rect class="win w4" x="166" y="300" width="14" height="14" rx="3" />
                    <rect class="win w3" x="198" y="300" width="14" height="14" rx="3" />
                    <rect class="win" x="166" y="332" width="14" height="14" rx="3" />
                    <rect class="win w3" x="258" y="220" width="14" height="14" rx="3" />
                    <rect class="win w2" x="284" y="220" width="14" height="14" rx="3" />
                    <rect class="win" x="258" y="252" width="14" height="14" rx="3" />
                    <rect class="win w4" x="284" y="252" width="14" height="14" rx="3" />
                    <rect class="win w2" x="258" y="284" width="14" height="14" rx="3" />
                    <rect class="win w3" x="284" y="284" width="14" height="14" rx="3" />
                    <rect class="win w4" x="354" y="292" width="14" height="14" rx="3" />
                    <rect class="win" x="380" y="292" width="14" height="14" rx="3" />
                    <rect class="win w2" x="354" y="324" width="14" height="14" rx="3" />
                </g>
                <rect x="40" y="408" width="440" height="10" rx="5" fill="#0b1b2e" opacity=".12" />
                <g class="float">
                    <path d="M285 100c-26 0-46 19-46 44 0 32 46 68 46 68s46-36 46-68c0-25-20-44-46-44z" fill="#ff6800" />
                    <path d="M262 148l-3-24 14 12 12-18 12 18 14-12-3 24z" fill="#fff" />
                </g>
                <g class="float2">
                    <rect x="24" y="190" width="120" height="76" rx="14" fill="#fff" />
                    <rect x="24" y="190" width="120" height="20" rx="14" fill="#dff3f8" />
                    <circle cx="40" cy="200" r="3" fill="#ff6800" />
                    <circle cx="52" cy="200" r="3" fill="#ffc23c" />
                    <rect x="38" y="222" width="60" height="8" rx="4" fill="#0b1b2e" />
                    <rect x="38" y="238" width="90" height="6" rx="3" fill="#cfd8df" />
                    <rect x="38" y="250" width="44" height="6" rx="3" fill="#cfd8df" />
                </g>
                <g class="float3">
                    <rect x="390" y="196" width="112" height="84" rx="14" fill="#fff" />
                    <rect x="406" y="240" width="14" height="24" rx="3" fill="#19b6a6" />
                    <rect x="428" y="226" width="14" height="38" rx="3" fill="#ffc23c" />
                    <rect x="450" y="212" width="14" height="52" rx="3" fill="#ff6800" />
                    <rect x="472" y="230" width="14" height="34" rx="3" fill="#0b1b2e" />
                </g>
                <g class="float">
                    <path d="M150 60h96a12 12 0 0 1 12 12v34a12 12 0 0 1-12 12h-66l-22 16v-16h-8a12 12 0 0 1-12-12V72a12 12 0 0 1 12-12z" fill="#0b1b2e" />
                    <rect x="166" y="76" width="62" height="7" rx="3.500" fill="#fff" />
                    <rect x="166" y="92" width="40" height="7" rx="3.500" fill="#ff8a32" />
                </g>
                <g class="float2">
                    <circle cx="466" cy="120" r="24" fill="#ff8fa3" />
                    <path d="M466 132s-11-7-11-15a6 6 0 0 1 11-3 6 6 0 0 1 11 3c0 8-11 15-11 15z" fill="#fff" />
                </g>
            </svg>
        </div>
    </div>
</div>

<div class="strip" aria-hidden="true">
    <div class="track">
        <span><svg class="ic">
                <use href="#web" />
            </svg>Websites</span><span><svg class="ic">
                <use href="#heart" />
            </svg>Social media</span><span><svg class="ic">
                <use href="#mega" />
            </svg>Advertising</span><span><svg class="ic">
                <use href="#search" />
            </svg>Search visibility</span><span><svg class="ic">
                <use href="#pen" />
            </svg>Branding</span><span><svg class="ic">
                <use href="#chart" />
            </svg>Reporting</span>
        <span><svg class="ic">
                <use href="#web" />
            </svg>Websites</span><span><svg class="ic">
                <use href="#heart" />
            </svg>Social media</span><span><svg class="ic">
                <use href="#mega" />
            </svg>Advertising</span><span><svg class="ic">
                <use href="#search" />
            </svg>Search visibility</span><span><svg class="ic">
                <use href="#pen" />
            </svg>Branding</span><span><svg class="ic">
                <use href="#chart" />
            </svg>Reporting</span>
    </div>
</div>

<div class="franchise">
    <img src="assets/images/franchaise.png" alt="King Digital office with social media and advertising signage" loading="lazy">
    <section id="services">
        <div class="wrap">
            <div class="head rv"><span class="eyebrow">What you'll offer</span>
                <h2>Everything your clients need, ready to offer</h2>
                <p>Every local business wants to be found and remembered. You bring the conversation, we deliver the work.</p>
            </div>
            <?php
            /* icon symbol, title, text, text colour, tile colour */
            $pop = [
                ['web', 'Websites', 'Clean, fast sites that make a small business look like a big one.', '#4f46e5', '#e0e7ff'],
                ['heart', 'Social media', 'Posts, stories and a steady voice that keeps customers coming back.', '#e11d48', '#ffe4e6'],
                ['mega', 'Advertising', 'Ads that reach the right neighbours without wasting a budget.', '#ea580c', '#ffedd5'],
                ['search', 'Search visibility', 'Help customers find your clients first when they search nearby.', '#2563eb', '#dbeafe'],
                ['pen', 'Branding', 'Logos, colours and a look people remember.', '#16a34a', '#dcfce7'],
                ['chart', 'Clear reports', 'Simple numbers you can explain over a coffee.', '#c026d3', '#fae8ff'],
            ];
            $all = [
                ['chat', 'Bulk SMS', '#ea580c', '#ffedd5'],
                ['chat', 'WhatsApp API', '#16a34a', '#dcfce7'],
                ['chart', 'Aggregator Platform', '#2563eb', '#dbeafe'],
                ['web', 'Website Design', '#4f46e5', '#e0e7ff'],
                ['search', 'SEO Services', '#2563eb', '#dbeafe'],
                ['chat', 'RCS Service', '#ea580c', '#ffedd5'],
                ['mega', 'IVR & Voice', '#d97706', '#fef3c7'],
                ['mega', 'AI Voice', '#e11d48', '#ffe4e6'],
                ['web', 'Hosting & Cloud', '#16a34a', '#dcfce7'],
                ['eye', 'Video Production', '#e11d48', '#ffe4e6'],
                ['rocket', 'App Development', '#ca8a04', '#fef9c3'],
                ['mega', 'Podcast Studio', '#4f46e5', '#e0e7ff'],
                ['heart', 'Social Media', '#16a34a', '#dcfce7'],
                ['pin', 'Missed Call Alert', '#e11d48', '#ffe4e6'],
                ['star', 'AI Services', '#c026d3', '#fae8ff'],
            ];

            ?>
            <div class="duo">
                <div class="pn pop rv">
                    <h3>Most popular digital marketing</h3>
                    <p class="sub">The services local businesses ask for first.</p>
                    <div class="pl">
                        <?php foreach ($pop as $x): ?>
                            <div class="pi">
                                <span class="tile" style="--c:<?= $x[3] ?>;--b:<?= $x[4] ?>"><svg class="ic">
                                        <use href="#<?= $x[0] ?>" />
                                    </svg></span>
                                <h4><?= $x[1] ?></h4>
                                <p><?= $x[2] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="pn all rv">
                    <h3>All our services</h3>
                    <p class="sub">Fifteen ways we help a business grow.</p>
                    <ul class="al">
                        <?php foreach ($all as $x): ?>
                            <li><span class="tile" style="--c:<?= $x[2] ?>;--b:<?= $x[3] ?>"><svg class="ic">
                                        <use href="#<?= $x[0] ?>" />
                                    </svg></span><?= htmlspecialchars($x[1]) ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a class="vall" href="contact.php">Talk to Expert</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
/* ---- edit these ---- */
$wa_number = '918178819623'; // WhatsApp number that receives the enquiry: country code + number, no + or spaces
$steps = [
    ['Enquire', 'Tell us about yourself and the city you want to serve.'],
    ['Talk to us', 'A short call to match your plans with our franchise model.'],
    ['Sign up', 'Complete the paperwork and confirm your territory.'],
    ['Get trained', 'Learn the tools, the pitch and the process with our team.'],
    ['Go live', 'Launch in your city with King Digital behind you.'],
];
$docs = [
    ['users', 'Identity proof', 'Aadhaar card or passport of the owner.', 'Required'],
    ['check', 'PAN card', 'PAN of the owner or of the firm.', 'Required'],
    ['pin', 'Address proof', 'Utility bill or rent agreement for your office or home.', 'Required'],
    ['shop', 'Business registration', 'GST, Udyam or firm registration.', 'If you have one'],
    ['chart', 'Bank details', 'Cancelled cheque or first page of the passbook.', 'Required'],
    ['star', 'Passport-size photo', 'A recent photograph of the owner.', 'Required'],
];
?>
<div class="proc" id="process">
    <div class="wrap">
        <div class="head rv" style="text-align:center;margin-inline:auto;max-width:720px"><span class="eyebrow">How it works</span>
            <h2>Five steps from hello to live</h2>
            <p>No long waiting and no confusing paperwork. Here is the road to opening your franchise.</p>
        </div>
        <div class="steps rv">
            <?php foreach ($steps as $i => $st): ?>
                <div class="ps" style="--i:<?= $i ?>"><b><?= $i + 1 ?></b>
                    <h3><?= $st[0] ?></h3>
                    <p><?= $st[1] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="docs" id="documents">
    <div class="wrap">
        <div class="head rv" style="text-align:center;margin-inline:auto;max-width:720px"><span class="eyebrow">Documentation</span>
            <h2>Keep these documents ready</h2>
            <p>Having them at hand makes sign-up quick. Scans or clear phone photos are fine.</p>
        </div>
        <div class="dgrid">
            <?php foreach ($docs as $d): ?>
                <div class="doc rv">
                    <span class="di"><svg class="ic">
                            <use href="#<?= $d[0] ?>" />
                        </svg></span>
                    <div>
                        <h3><?= $d[1] ?></h3>
                        <p><?= $d[2] ?></p><em><?= $d[3] ?></em>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="apply" id="apply">
    <div class="wrap">
        <div class="fc rv" id="apply-card">
            <div class="face front">
                <div class="fl">
                    <span class="eyebrow">Get started</span>
                    <h2>Share your details, we'll take it from here</h2>
                    <p>Fill in three fields and your enquiry opens in WhatsApp, ready to send to our team.</p>
                    <div class="fchips"><span>Name</span><span>Phone</span><span>Email</span></div>
                </div>
                <form class="fr" id="apply-form" data-wa="<?= $wa_number ?>" novalidate>
                    <label for="f-name">Name</label>
                    <input id="f-name" name="name" type="text" autocomplete="name" required placeholder="Your full name">
                    <label for="f-phone">Phone number</label>
                    <input id="f-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" required pattern="[0-9+\s\-]{10,15}" placeholder="10-digit mobile number">
                    <label for="f-email">Email</label>
                    <input id="f-email" name="email" type="email" autocomplete="email" required placeholder="you@example.com">
                    <button class="fbtn" type="submit">Send on WhatsApp</button>
                    <small>We only use your details to contact you about the franchise.</small>
                </form>
            </div>
            <div class="face back" id="apply-done" tabindex="-1" aria-live="polite">
                <span class="ok"><svg class="ic">
                        <use href="#check" />
                    </svg></span>
                <h3>Thank you for choosing King Digital</h3>
                <p>Our team will contact you as soon as possible.</p>
                <div class="blinks"><a href="#documents">See Documents</a><a href="contact.php">Talk to Expert</a></div>
            </div>
        </div>
    </div>
</div>
<script>
    (function() {
        var f = document.getElementById('apply-form'),
            c = document.getElementById('apply-card');
        f.addEventListener('submit', function(e) {
            e.preventDefault();
            if (!f.checkValidity()) {
                f.reportValidity();
                return;
            }
            var d = new FormData(f),
                msg = 'Hi King Digital, I am interested in a franchise.\nName: ' + d.get('name') + '\nPhone: ' + d.get('phone') + '\nEmail: ' + d.get('email'),
                w = window.open('https://wa.me/' + f.dataset.wa + '?text=' + encodeURIComponent(msg), '_blank');
            if (w) w.opener = null;
            c.classList.add('done');
            setTimeout(function() {
                document.getElementById('apply-done').focus()
            }, 500);
        });
    })();
</script>

<div class="cities" id="cities">
    <div class="wrap">
        <div class="head rv" style="text-align:center;margin-inline:auto;max-width:720px"><span class="eyebrow">Already live</span>
            <h2>Four cities, four different flavours</h2>
            <p>Every city has its own character, and so does every King Digital partner. Here's where our franchises are already helping local businesses grow.</p>
        </div>
        <div class="jump rv">
            <a href="#delhi" style="--c:#c8402a"><svg class="ic">
                    <use href="#landmark" />
                </svg>Delhi <small>दिल्ली</small></a>
            <a href="#lucknow" style="--c:#0d7a5a"><svg class="ic">
                    <use href="#arch" />
                </svg>Lucknow <small>लखनऊ</small></a>
            <a href="#patna" style="--c:#6b46c1"><svg class="ic">
                    <use href="#landmark" />
                </svg>Patna <small>पटना</small></a>
        </div>

        <section class="city delhi rv" id="delhi">
            <svg class="ic deco d1">
                <use href="#landmark" />
            </svg><svg class="ic deco d2">
                <use href="#sun" />
            </svg>
            <div class="txt">
                <div class="live"><i></i>Franchise active</div>
                <h2>Delhi</h2>
                <div class="hi">दिल्ली · The capital</div>
                <p>From Connaught Place cafés to the lanes of Chandni Chowk, our Delhi partner helps busy local businesses stand out in the country's busiest market.</p>
                <div class="chips"><span class="chip"><svg class="ic">
                            <use href="#landmark" />
                        </svg>India Gate</span><span class="chip"><svg class="ic">
                            <use href="#train" />
                        </svg>Metro city</span><span class="chip"><svg class="ic">
                            <use href="#shop" />
                        </svg>Bustling bazaars</span></div>
            </div>
            <div class="scene">
                <svg viewBox="0 0 420 320" role="img" aria-label="Illustration of India Gate in Delhi with tricolour flag and eternal flame">
                    <rect width="420" height="320" fill="#ffd9a8" />
                    <circle class="glow gl" cx="315" cy="90" r="46" fill="#ffb347" />
                    <circle cx="315" cy="90" r="70" fill="#ffb347" opacity=".2" />
                    <g class="fly">
                        <path d="M40 60q6-8 12 0q6-8 12 0" stroke="#5a2a14" stroke-width="2.500" fill="none" stroke-linecap="round" />
                        <path d="M80 80q5-7 10 0q5-7 10 0" stroke="#5a2a14" stroke-width="2.500" fill="none" stroke-linecap="round" />
                    </g>
                    <g class="fly f2">
                        <path d="M20 110q5-7 10 0q5-7 10 0" stroke="#5a2a14" stroke-width="2.500" fill="none" stroke-linecap="round" />
                    </g>
                    <rect y="250" width="420" height="70" fill="#7fb069" />
                    <polygon points="188,250 232,250 300,320 120,320" fill="#d9b48a" />
                    <circle cx="62" cy="228" r="28" fill="#4f8f4a" />
                    <rect x="59" y="240" width="6" height="16" fill="#6b4226" />
                    <circle cx="360" cy="228" r="28" fill="#4f8f4a" />
                    <rect x="357" y="240" width="6" height="16" fill="#6b4226" />
                    <rect x="150" y="100" width="120" height="150" fill="#c98b5b" />
                    <rect x="140" y="88" width="140" height="16" fill="#a86a3f" />
                    <rect x="160" y="72" width="100" height="16" fill="#b87748" />
                    <rect x="166" y="118" width="88" height="6" fill="#a86a3f" />
                    <rect x="166" y="132" width="88" height="4" fill="#a86a3f" />
                    <path d="M182 250V170a28 28 0 0 1 56 0V250z" fill="#5a2a14" />
                    <path class="flame" d="M210 246c-9-6-8-15 0-24 1 7 8 9 8 17 0 4-3 7-8 7z" fill="#ff6b1a" />
                    <path class="flame" d="M210 246c-4-3-4-8 0-12 1 3 4 5 4 8 0 2-2 4-4 4z" fill="#ffd166" />
                    <line x1="210" y1="72" x2="210" y2="32" stroke="#5a2a14" stroke-width="3" />
                    <g class="wave">
                        <rect x="210" y="34" width="38" height="7" fill="#ff9933" />
                        <rect x="210" y="41" width="38" height="7" fill="#fff" />
                        <rect x="210" y="48" width="38" height="7" fill="#138808" />
                        <circle cx="229" cy="44.500" r="2.500" fill="none" stroke="#1b3a8a" stroke-width="1" />
                    </g>
                </svg>
            </div>
        </section>

        <section class="city lucknow rev rv" id="lucknow">
            <svg class="ic deco d1">
                <use href="#flower" />
            </svg><svg class="ic deco d2">
                <use href="#lantern" />
            </svg>
            <div class="txt">
                <div class="live"><i></i>Franchise active</div>
                <h2>Lucknow</h2>
                <div class="hi">लखनऊ · City of Nawabs</div>
                <p>A city of grace, good food and fine craft. Our Lucknow partner helps its boutiques, restaurants and family businesses shine online with the same warmth the city is known for.</p>
                <div class="chips"><span class="chip"><svg class="ic">
                            <use href="#arch" />
                        </svg>Nawabi heritage</span><span class="chip"><svg class="ic">
                            <use href="#flower" />
                        </svg>Chikankari craft</span><span class="chip"><svg class="ic">
                            <use href="#lantern" />
                        </svg>Tehzeeb</span></div>
            </div>
            <div class="scene">
                <svg viewBox="0 0 420 320" role="img" aria-label="Illustration of a Lucknow Nawabi arched gateway at night with swinging lanterns and moon">
                    <rect width="420" height="320" fill="#0f4d4a" />
                    <circle cx="330" cy="66" r="28" fill="#f6d98a" />
                    <circle cx="342" cy="58" r="24" fill="#0f4d4a" />
                    <g fill="#f6d98a">
                        <circle class="tw" cx="60" cy="50" r="2.500" />
                        <circle class="tw tw2" cx="120" cy="80" r="2" />
                        <circle class="tw tw3" cx="250" cy="40" r="2.500" />
                        <circle class="tw" cx="290" cy="100" r="2" />
                        <circle class="tw tw2" cx="390" cy="130" r="2.500" />
                        <circle class="tw tw3" cx="30" cy="140" r="2" />
                        <circle class="tw" cx="200" cy="70" r="2" />
                    </g>
                    <g style="transform-origin:96px 0px" class="swing">
                        <line x1="96" y1="0" x2="96" y2="46" stroke="#d9a441" stroke-width="2" />
                        <rect x="88" y="44" width="16" height="6" rx="2" fill="#d9a441" />
                        <path d="M87 62a9 9 0 0 1 18 0v14a9 9 0 0 1-18 0z" fill="#ff9d42" />
                        <path d="M92 66a4 4 0 0 1 8 0v8a4 4 0 0 1-8 0z" fill="#ffe08a" />
                    </g>
                    <g style="transform-origin:324px 0px" class="swing s2">
                        <line x1="324" y1="0" x2="324" y2="36" stroke="#d9a441" stroke-width="2" />
                        <rect x="316" y="34" width="16" height="6" rx="2" fill="#d9a441" />
                        <path d="M315 52a9 9 0 0 1 18 0v14a9 9 0 0 1-18 0z" fill="#ff9d42" />
                        <path d="M320 56a4 4 0 0 1 8 0v8a4 4 0 0 1-8 0z" fill="#ffe08a" />
                    </g>
                    <rect x="70" y="170" width="280" height="100" fill="#f1e2bd" />
                    <rect x="160" y="126" width="100" height="144" fill="#f1e2bd" />
                    <path d="M172 126a38 32 0 0 1 76 0z" fill="#d9a441" />
                    <line x1="210" y1="94" x2="210" y2="78" stroke="#d9a441" stroke-width="3" />
                    <circle cx="210" cy="76" r="4" fill="#d9a441" />
                    <path d="M78 170a20 18 0 0 1 40 0z" fill="#d9a441" />
                    <path d="M302 170a20 18 0 0 1 40 0z" fill="#d9a441" />
                    <path d="M184 270V206a26 26 0 0 1 52 0V270z" fill="#0f4d4a" />
                    <path d="M194 270V210a16 16 0 0 1 32 0V270z" fill="#12665f" />
                    <path d="M96 270V222a18 18 0 0 1 36 0V270z" fill="#0f4d4a" />
                    <path d="M288 270V222a18 18 0 0 1 36 0V270z" fill="#0f4d4a" />
                    <g fill="#d9a441">
                        <circle cx="210" cy="150" r="5" />
                        <circle cx="186" cy="150" r="3" />
                        <circle cx="234" cy="150" r="3" />
                        <rect x="100" y="188" width="28" height="4" />
                        <rect x="292" y="188" width="28" height="4" />
                    </g>
                    <rect y="270" width="420" height="50" fill="#0a3a37" />
                    <rect class="shim" x="170" y="280" width="80" height="26" rx="8" fill="#f6d98a" opacity=".3" />
                </svg>
            </div>
        </section>

        <section class="city patna rv" id="patna">
            <svg class="ic deco d1">
                <use href="#wave" />
            </svg><svg class="ic deco d2">
                <use href="#sun" />
            </svg>
            <div class="txt">
                <div class="live"><i></i>Franchise active</div>
                <h2>Patna</h2>
                <div class="hi">पटना · City on the Ganga</div>
                <p>One of the world's oldest living cities, and one of India's fastest-growing markets. Our Patna partner helps local shops, coaching centres, restaurants and family brands turn a proud heritage into a confident digital presence.</p>
                <div class="chips"><span class="chip"><svg class="ic">
                            <use href="#landmark" />
                        </svg>Golghar</span><span class="chip"><svg class="ic">
                            <use href="#wave" />
                        </svg>Ganga ghats</span><span class="chip"><svg class="ic">
                            <use href="#sun" />
                        </svg>Chhath Puja</span></div>
            </div>
            <div class="scene">
                <svg viewBox="0 0 420 320" role="img" aria-label="Illustration of the Golghar in Patna beside the Ganga at sunrise with floating lamps and a boat">
                    <defs>
                        <linearGradient id="pgsky" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0" stop-color="#6b46c1" />
                            <stop offset=".6" stop-color="#f08a7e" />
                            <stop offset="1" stop-color="#ffd08a" />
                        </linearGradient>
                    </defs>
                    <rect width="420" height="320" fill="url(#pgsky)" />
                    <g fill="#fff">
                        <circle class="tw" cx="50" cy="40" r="2" />
                        <circle class="tw tw2" cx="130" cy="24" r="2.5" />
                        <circle class="tw tw3" cx="250" cy="44" r="2" />
                        <circle class="tw" cx="380" cy="30" r="2" />
                    </g>
                    <circle cx="335" cy="150" r="70" fill="#ffd166" opacity=".25" />
                    <circle class="glow gl" cx="335" cy="150" r="44" fill="#ffd166" />
                    <g class="fly">
                        <path d="M30 70q7-9 14 0q7-9 14 0" stroke="#fff" stroke-width="3" fill="none" stroke-linecap="round" />
                        <path d="M90 96q6-8 12 0q6-8 12 0" stroke="#fff" stroke-width="3" fill="none" stroke-linecap="round" />
                    </g>
                    <g class="fly f2">
                        <path d="M10 50q6-8 12 0q6-8 12 0" stroke="#fff" stroke-width="3" fill="none" stroke-linecap="round" />
                    </g>
                    <path d="M132 214c0-96 44-130 78-130s78 34 78 130z" fill="#f4e8d2" />
                    <path d="M210 84c34 0 78 34 78 130h-78z" fill="#e6d3b0" opacity=".75" />
                    <g fill="none" stroke="#b98f5a" stroke-linecap="round">
                        <path d="M140 208Q160 130 204 96" stroke-width="4" />
                        <path d="M280 208Q260 130 216 96" stroke-width="4" />
                        <path d="M152 210Q172 134 208 102" stroke-width="2" stroke-dasharray="3 6" />
                        <path d="M268 210Q248 134 212 102" stroke-width="2" stroke-dasharray="3 6" />
                    </g>
                    <rect x="200" y="76" width="20" height="10" rx="3" fill="#b98f5a" />
                    <path d="M203 76a7 7 0 0 1 14 0z" fill="#b98f5a" />
                    <path d="M196 214v-22a14 14 0 0 1 28 0v22z" fill="#5a3a22" />
                    <rect y="214" width="420" height="38" fill="#e0cfae" />
                    <path d="M0 224h420M0 234h420M0 244h420" stroke="#c9b48b" stroke-width="2" />
                    <rect y="252" width="420" height="68" fill="#4a5fc8" />
                    <g fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round">
                        <g class="waves" opacity=".6">
                            <path d="M-80 270q20-12 40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0" />
                        </g>
                        <g class="waves w2">
                            <path d="M-80 298q20-12 40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0t40 0" />
                        </g>
                    </g>
                    <g class="bob">
                        <ellipse cx="90" cy="284" rx="12" ry="5" fill="#ff8a32" />
                        <path class="fl2" d="M90 279c-4-3-3-8 0-11 1 3 4 4 4 7 0 2-2 4-4 4z" fill="#ffd166" />
                    </g>
                    <g class="bob" style="animation-delay:-1.5s">
                        <ellipse cx="180" cy="302" rx="12" ry="5" fill="#ff8a32" />
                        <path class="fl2" d="M180 297c-4-3-3-8 0-11 1 3 4 4 4 7 0 2-2 4-4 4z" fill="#ffd166" />
                    </g>
                    <g class="bob" style="animation-delay:-3s">
                        <ellipse cx="250" cy="280" rx="12" ry="5" fill="#ff8a32" />
                        <path class="fl2" d="M250 275c-4-3-3-8 0-11 1 3 4 4 4 7 0 2-2 4-4 4z" fill="#ffd166" />
                    </g>
                    <g class="bob">
                        <g transform="translate(305 264)">
                            <path d="M0 0h72l-10 16H10z" fill="#f4e8d2" />
                            <rect x="34" y="-24" width="4" height="24" fill="#5a3a22" />
                            <path d="M38 -24l24 9-24 9z" fill="#ffb347" />
                        </g>
                    </g>
                </svg>
            </div>
        </section>
    </div>
</div>

<script>
    document.documentElement.classList.add('js');
    (function() {
        var els = document.querySelectorAll('.rv');
        if (!('IntersectionObserver' in window)) {
            els.forEach(function(e) {
                e.classList.add('in')
            });
            return
        }
        var io = new IntersectionObserver(function(en) {
            en.forEach(function(x) {
                if (x.isIntersecting) {
                    x.target.classList.add('in');
                    io.unobserve(x.target)
                }
            })
        }, {
            threshold: .15
        });
        els.forEach(function(e, i) {
            e.style.transitionDelay = ((i % 3) * 90) + 'ms';
            io.observe(e)
        });
    })();
</script>

<?php require_once __DIR__ . '/includes/footer.php' ?>