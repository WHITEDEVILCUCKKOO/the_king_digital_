<?php
// Shared AI interaction cube (color-themed nested-cube animation).
// Adjust this path to wherever ai-interaction-widget.php lives in the
// project's include structure -- it currently assumes it sits next to
// this file.
require_once __DIR__ . '/ai-interaction-widget.php';
ai_interaction_assets_once();
?>

<style>
    :root {

        /* ========================================
       BRAND COLORS
         ======================================== */

        --color-primary: #F47B20;
        --color-primary-light: #FF9A4A;
        --color-primary-dark: #D85F0B;

        --color-secondary: #4F7FF7;
        --color-secondary-light: #7FA3FF;
        --color-secondary-dark: #315FCC;


        /* ========================================
       BACKGROUNDS
        ======================================== */

        --color-bg: #FFFFFF;
        --color-bg-soft: #F7F8FA;
        --color-bg-muted: #EEF1F5;

        --color-bg-dark: #1C3D7B;
        --color-bg-dark-soft: #1A2233;


        /* ========================================
       TEXT
        ======================================== */

        --color-text: #171B26;
        --color-text-secondary: #5F6673;
        --color-text-muted: #8A919D;

        --color-text-light: #FFFFFF;
        --color-text-light-secondary: #C4C9D2;


        /* ========================================
       BORDERS
        ======================================== */

        --color-border: #E3E7ED;
        --color-border-dark: #30394A;


        /* ========================================
       PRIMARY GRADIENTS
    ======================================== */

        --gradient-primary:
            linear-gradient(135deg,
                #F47B20 0%,
                #FF9A4A 100%);

        --gradient-primary-dark:
            linear-gradient(135deg,
                #D85F0B 0%,
                #F47B20 100%);


        /* ========================================
       SECONDARY GRADIENTS
    ======================================== */

        --gradient-secondary:
            linear-gradient(135deg,
                #315FCC 0%,
                #4F7FF7 50%,
                #7FA3FF 100%);

        --gradient-secondary-dark:
            linear-gradient(135deg,
                #244BA5 0%,
                #315FCC 100%);


        /* ========================================
       BRAND GRADIENTS
    ======================================== */

        --gradient-brand:
            linear-gradient(135deg,
                #F47B20 0%,
                #FF9A4A 45%,
                #4F7FF7 100%);

        --gradient-brand-reverse:
            linear-gradient(135deg,
                #4F7FF7 0%,
                #7FA3FF 55%,
                #F47B20 100%);


        /* ========================================
       DARK GRADIENTS
    ======================================== */

        --gradient-dark:
            linear-gradient(135deg,
                #111827 0%,
                #1A2233 100%);


        /* ========================================
       GLOW
    ======================================== */

        --gradient-glow:
            radial-gradient(circle,
                rgba(244, 123, 32, 0.16) 0%,
                rgba(244, 123, 32, 0) 70%);

        --gradient-glow-secondary:
            radial-gradient(circle,
                rgba(79, 127, 247, 0.18) 0%,
                rgba(79, 127, 247, 0) 70%);


        /* ========================================
       STATUS COLORS
    ======================================== */

        --color-success: #16A34A;
        --color-warning: #D99100;
        --color-danger: #DC2626;
        --color-info: #4F7FF7;


        /* ========================================
       SHADOWS
    ======================================== */

        --shadow-sm:
            0 2px 8px rgba(15, 23, 42, 0.06);

        --shadow-md:
            0 8px 24px rgba(15, 23, 42, 0.10);

        --shadow-lg:
            0 16px 40px rgba(15, 23, 42, 0.14);

        --shadow-orange:
            0 10px 30px rgba(244, 123, 32, 0.18);

        --shadow-blue:
            0 10px 30px rgba(79, 127, 247, 0.18);


        /* ========================================
       RADIUS
    ======================================== */

        --radius-sm: 6px;
        --radius-md: 10px;
        --radius-lg: 16px;
        --radius-xl: 24px;
        --radius-full: 999px;


        /* ========================================
       TRANSITIONS
    ======================================== */

        --transition-fast: 150ms ease;
        --transition-normal: 250ms ease;
        --transition-slow: 400ms ease;
    }


    #home-hero-section {
        position: relative;
        background: radial-gradient(ellipse 90% 70% at 15% 15%, #081742 0%, #254295 45%, #08384e 75%, #082146 100%);
        padding: 60px;
        overflow: hidden;
        font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    #home-hero-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 78% 45%, rgba(56, 191, 140, 0.18) 0%, transparent 45%);
        pointer-events: none;
    }

    /* ---------- Floating background AI-cube accents ---------- */

    .home-hero-cubes {
        position: absolute;
        inset: 0;
        z-index: 1;
        overflow: hidden;
        pointer-events: none;
        /* perspective adds subtle depth to the parallax tilt on hover/move */
        perspective: 900px;
    }

    /* Outer wrapper: purely positional + parallax (moved by JS on mousemove).
       Kept separate from the drift/hover transforms below so the two never
       fight over the `transform` property. */
    .home-hero-cube {
        position: absolute;
        width: 46px;
        height: 46px;
        will-change: transform;
        transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    /* Inner wrapper: idle drift animation + all interactive states
       (hover/focus/active). This is the part the user can actually click
       and hover, same spirit as the AI Assistant card's cube. */
    .home-hero-cube__inner {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
        opacity: 0.55;
        cursor: pointer;
        pointer-events: auto;
        animation-name: hero-cube-drift;
        animation-timing-function: ease-in-out;
        animation-iteration-count: infinite;
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1),
            opacity 0.3s ease,
            filter 0.3s ease;
    }

    .home-hero-cube__inner:hover,
    .home-hero-cube__inner:focus-visible,
    .home-hero-cube__inner.is-active {
        opacity: 1;
        transform: scale(1.45) rotate(6deg);
        filter: drop-shadow(0 0 14px var(--cube-glow, rgba(255, 255, 255, 0.8))) brightness(1.15);
        animation-play-state: paused;
        outline: none;
        z-index: 3;
    }

    .home-hero-cube__inner:active,
    .home-hero-cube__inner.is-clicked {
        transform: scale(1.2) rotate(-4deg);
    }

    /* Expanding "ping" ring, fired on click — echoes the AI card's own
       pulse-wave rings so the two feel like one interactive family. */
    .home-hero-cube__ring {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 1.5px solid var(--cube-glow, rgba(255, 255, 255, 0.8));
        transform: translate(-50%, -50%) scale(0.4);
        opacity: 0;
        pointer-events: none;
    }

    .home-hero-cube__ring.is-pinging {
        animation: hero-cube-ping 0.7s ease-out;
    }

    @keyframes hero-cube-ping {
        0% {
            transform: translate(-50%, -50%) scale(0.4);
            opacity: 0.7;
        }

        100% {
            transform: translate(-50%, -50%) scale(2.6);
            opacity: 0;
        }
    }

    @keyframes hero-cube-drift {
        0% {
            transform: translate(0, 0);
        }

        50% {
            transform: translate(var(--cube-drift-x, 8px), var(--cube-drift-y, -16px));
        }

        100% {
            transform: translate(0, 0);
        }
    }

    /* Per-theme glow color used by the hover/click states above */
    .home-hero-cube--theme-orange {
        --cube-glow: rgba(244, 123, 32, 0.85);
    }

    .home-hero-cube--theme-blue {
        --cube-glow: rgba(79, 127, 247, 0.85);
    }

    .home-hero-cube--theme-green {
        --cube-glow: rgba(58, 199, 150, 0.85);
    }

    .home-hero-cube--theme-purple {
        --cube-glow: rgba(168, 85, 247, 0.85);
    }

    .home-hero-cube--theme-cyan {
        --cube-glow: rgba(34, 211, 238, 0.85);
    }

    .home-hero-cube--1 {
        top: 8%;
        left: 6%;
        width: 40px;
        height: 40px;
    }

    .home-hero-cube--1 .home-hero-cube__inner {
        --cube-drift-x: 10px;
        --cube-drift-y: -14px;
        animation-duration: 7.5s;
        animation-delay: 0s;
    }

    .home-hero-cube--2 {
        top: 12%;
        left: 88%;
        width: 34px;
        height: 34px;
    }

    .home-hero-cube--2 .home-hero-cube__inner {
        --cube-drift-x: -10px;
        --cube-drift-y: 12px;
        animation-duration: 6.8s;
        animation-delay: 0.5s;
    }

    .home-hero-cube--3 {
        top: 46%;
        left: 3%;
        width: 44px;
        height: 44px;
    }

    .home-hero-cube--3 .home-hero-cube__inner {
        --cube-drift-x: 8px;
        --cube-drift-y: 14px;
        animation-duration: 8.2s;
        animation-delay: 1s;
    }

    .home-hero-cube--4 {
        top: 60%;
        left: 92%;
        width: 36px;
        height: 36px;
    }

    .home-hero-cube--4 .home-hero-cube__inner {
        --cube-drift-x: -8px;
        --cube-drift-y: -12px;
        animation-duration: 7.1s;
        animation-delay: 1.4s;
    }

    .home-hero-cube--5 {
        top: 82%;
        left: 18%;
        width: 38px;
        height: 38px;
    }

    .home-hero-cube--5 .home-hero-cube__inner {
        --cube-drift-x: 9px;
        --cube-drift-y: -10px;
        animation-duration: 6.5s;
        animation-delay: 0.8s;
    }

    .home-hero-cube--6 {
        top: 24%;
        left: 40%;
        width: 26px;
        height: 26px;
    }

    .home-hero-cube--6 .home-hero-cube__inner {
        --cube-drift-x: 7px;
        --cube-drift-y: 10px;
        animation-duration: 6.2s;
        animation-delay: 0.3s;
    }

    .home-hero-cube--7 {
        top: 68%;
        left: 42%;
        width: 30px;
        height: 30px;
    }

    .home-hero-cube--7 .home-hero-cube__inner {
        --cube-drift-x: -9px;
        --cube-drift-y: -11px;
        animation-duration: 7.8s;
        animation-delay: 1.6s;
    }

    .home-hero-cube--8 {
        top: 4%;
        left: 62%;
        width: 28px;
        height: 28px;
    }

    .home-hero-cube--8 .home-hero-cube__inner {
        --cube-drift-x: 11px;
        --cube-drift-y: -8px;
        animation-duration: 6.9s;
        animation-delay: 1.1s;
    }

    .home-hero-cube--9 {
        top: 92%;
        left: 68%;
        width: 32px;
        height: 32px;
    }

    .home-hero-cube--9 .home-hero-cube__inner {
        --cube-drift-x: -7px;
        --cube-drift-y: 13px;
        animation-duration: 7.3s;
        animation-delay: 0.2s;
    }

    .home-hero-cube--10 {
        top: 34%;
        left: 96%;
        width: 24px;
        height: 24px;
    }

    .home-hero-cube--10 .home-hero-cube__inner {
        --cube-drift-x: -8px;
        --cube-drift-y: 9px;
        animation-duration: 6.4s;
        animation-delay: 1.8s;
    }

    @media (prefers-reduced-motion: reduce) {
        .home-hero-cube__inner {
            animation: none;
        }

        .home-hero-cube {
            transition: none;
        }
    }

    @media (max-width: 768px) {
        .home-hero-cubes {
            display: none;
        }
    }


    .home-hero-section_conetent {
        position: relative;
        z-index: 1;
        max-width: 1280px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 30px;
        align-items: center;
    }

    /* ---------- Left info column ---------- */

    .home-hero-section_info {
        display: flex;
        flex-direction: column;
        align-items: flex-start;

    }

    .home-hero-section_badge {
        display: flex;
        align-items: center;
        gap: 10px;
        background: rgba(255, 255, 255, 0.35);
        border: 1px solid rgba(255, 255, 255, 0.14);
        padding: 7px 14px 7px 10px;
        border-radius: 999px;
        margin-bottom: 18px;
    }

    .home-hero-section_badge-google {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        font-weight: 700;
        color: var(--color-text-light);
    }

    .home-hero-section_badge-google-icon {
        width: 15px;
        height: 15px;
        display: inline-flex;
    }

    .home-hero-section_badge-google-icon img {
        width: 100%;
        height: 100%;
        display: block;
    }

    .home-hero-section_badge-stars {
        display: inline-flex;
        gap: 2px;
        padding-left: 8px;
        border-left: 1px solid rgba(255, 255, 255, 0.2);
        font-size: 12px;
        color: yellow;
    }

    .home-hero-section_badge-stars::before {
        content: none;
    }

    .home-hero-section_badge-stars span {
        display: inline-block;
    }

    .home-hero-section_badge-rating {
        font-size: 12px;
        color: var(--color-bg-muted);
    }

    .home-hero-section_badge-rating span {
        color: #ffffff;
        font-weight: 800;
    }

    .home-hero-section_title {
        margin: 0 0 18px;
        font-size: 50px;
        line-height: 1.18;
        font-weight: bolder;
        color: var(--color-text-light);
        letter-spacing: -0.5px;
        /* font-family: Manrope; */
    }

    .home-hero-section_title span {
        font-size: 50px;
        background: var(--gradient-brand);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        color: transparent;
    }

    .home-hero-section_autotyping {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 20px;
        font-weight: 700;
        color: var(--color-bg-soft);
        margin-bottom: 18px;
        min-height: 22px;
    }

    .home-hero-section_autotyping .typing {
        color: var(--color-text-light-secondary);
        border-right: 2px solid #7fe3bd;
        padding-right: 3px;
        animation: blink-caret 0.8s step-end infinite;
        white-space: nowrap;
    }

    @keyframes blink-caret {

        0%,
        100% {
            border-color: #7fe3bd;
        }

        50% {
            border-color: transparent;
        }
    }

    .home-hero-section_description {
        font-size: 15px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.62);
        max-width: 460px;
        margin: 0 0 34px;
    }

    .home-hero-section_cta-section {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .home-hero-section_cta-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 16px 40px;
        border-radius: 999px;
        font-size: 20px;
        font-weight: 800;
        text-decoration: none;
        transition: transform 0.2s ease, background 0.2s ease, opacity 0.2s ease;
    }

    a.home-hero-section_cta-button:first-of-type {
        background: #ffffff;
        color: var(--color-text);
    }

    a.home-hero-section_cta-button:first-of-type:hover {
        transform: translateY(-2px);
        opacity: 0.92;
        background: var(--color-info);
        color: var(--color-text-light);

    }

    a.home-hero-section_cta-button:last-of-type {
        background: transparent;
        color: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.4);
    }

    a.home-hero-section_cta-button:last-of-type:hover {
        transform: translateY(-2px);
        border-color: #ffffff;
    }

    /* ---------- Right AI card ---------- */

    .home-hero-section_ai {
        display: flex;
        justify-content: center;
    }

    /* NOTE: overflow is intentionally NOT hidden here anymore — that was clipping/hiding
     the agent dropdown when it opened. Rounding is instead handled per-section below. */
    .home-hero-section_ai-card {
        position: relative;
        width: 100%;
        max-width: 450px;
        background: var(--gradient-secondary-dark);
        filter: blur(0.2);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 22px;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.35);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .home-hero-section_ai-card h3 {
        width: 100%;
        margin: 0;
        text-align: center;
        background: var(--gradient-secondary);
        color: var(--color-text-light);
        font-size: 14px;
        padding: 14px 0;
        border-radius: 22px 22px 0 0;
    }

    .ai-assistant-card {
        position: relative;
        width: 100%;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: radial-gradient(circle at center, rgba(58, 199, 150, 0.16) 0%, transparent 65%);
        overflow: hidden;
    }

    /* ---- pulse waves ---- */
    .ai-assistant-card>span {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        border: 1px solid;
        transform: translate(-50%, -50%) scale(0.15);
        opacity: 0;
        pointer-events: none;
        animation: ai-ripple 4s linear infinite;
    }

    .ai-assistant-card>span:nth-of-type(1) {
        border-color: rgba(255, 255, 255, 0.5);
        animation-delay: 0s;
    }

    .ai-assistant-card>span:nth-of-type(2) {
        border-color: rgba(250, 204, 21, 0.5);
        animation-delay: 1s;
    }

    .ai-assistant-card>span:nth-of-type(3) {
        border-color: rgba(239, 68, 68, 0.5);
        animation-delay: 2s;
    }

    .ai-assistant-card>span:nth-of-type(4) {
        border-color: rgba(59, 130, 246, 0.5);
        animation-delay: 3s;
    }

    @keyframes ai-ripple {
        0% {
            transform: translate(-50%, -50%) scale(0.15);
            opacity: 0;
            border-width: 1px;
        }

        10% {
            transform: translate(-50%, -50%) scale(0.35);
            opacity: 0.18;
            border-width: 1px;
        }

        20% {
            transform: translate(-50%, -50%) scale(0.7);
            opacity: 0.32;
            border-width: 1.5px;
        }

        30% {
            transform: translate(-50%, -50%) scale(1.15);
            opacity: 0.48;
            border-width: 1.7px;
        }

        40% {
            transform: translate(-50%, -50%) scale(1.7);
            opacity: 0.58;
            border-width: 2px;
        }

        50% {
            transform: translate(-50%, -50%) scale(2.3);
            opacity: 0.5;
            border-width: 1.5px;
        }

        60% {
            transform: translate(-50%, -50%) scale(3);
            opacity: 0.38;
            border-width: 1.4px;
        }

        70% {
            transform: translate(-50%, -50%) scale(3.8);
            opacity: 0.25;
            border-width: 1.2px;
        }

        80% {
            transform: translate(-50%, -50%) scale(4.6);
            opacity: 0.14;
            border-width: 1px;
        }

        90% {
            transform: translate(-50%, -50%) scale(5.3);
            opacity: 0.06;
            border-width: 1px;
        }

        100% {
            transform: translate(-50%, -50%) scale(6);
            opacity: 0;
            border-width: 1px;
        }
    }

    /* NOTE: the AI Assistant card's visual is the gooey CSS/SVG blob below
       (.chatbot_loader), driven live by ai-assistant-blob-driver.js, which
       reads phase/level off ai-assistant-icpaas-adapter.js. No three.js /
       WebGL involved, which also sidesteps the CDN + CSP issues the earlier
       orb build ran into. The nested cube widget (ai-interaction-widget.php)
       is still used separately for the decorative background cubes. */

    /* Registering the five gradient stops as real <color> custom properties
       lets the browser interpolate them (and anything that reads them --
       the box-shadow glow, the box gradient) instead of hard-cutting when
       ai-assistant-blob-driver.js swaps palettes. Safari < 16.4 and older
       Firefox ignore @property and just snap instantly -- harmless. */
    @property --color-one {
        syntax: '<color>';
        inherits: true;
        initial-value: #D6E8FF;
    }

    @property --color-two {
        syntax: '<color>';
        inherits: true;
        initial-value: #8BB9F7;
    }

    @property --color-three {
        syntax: '<color>';
        inherits: true;
        initial-value: #4F8FEF;
    }

    @property --color-four {
        syntax: '<color>';
        inherits: true;
        initial-value: #2864C7;
    }

    @property --color-five {
        syntax: '<color>';
        inherits: true;
        initial-value: #123A7A;
    }

    .chatbot_loader {
        --color-one: #D6E8FF;
        --color-two: #8BB9F7;
        --color-three: #4F8FEF;
        --color-four: #2864C7;
        --color-five: #123A7A;
        --time-animation: 5s;
        --size: 1.4;
        --tilt-x: 0px;
        --tilt-y: 0px;
        position: relative;
        border-radius: 50%;
        transform: scale(var(--size)) translate(var(--tilt-x), var(--tilt-y));
        box-shadow:
            0 0 25px 0 var(--color-three),
            0 20px 50px 0 var(--color-four);
        animation: colorize calc(var(--time-animation) * 3) ease-in-out infinite;
        transition:
            --color-one 0.7s ease,
            --color-two 0.7s ease,
            --color-three 0.7s ease,
            --color-four 0.7s ease,
            --color-five 0.7s ease,
            filter 0.25s ease;
    }

    /* Cheap, CSS-only reaction to a plain hover -- the JS-driven cursor
       parallax (--tilt-x/--tilt-y) handles movement, this just adds a
       touch of extra brightness so the blob visibly "wakes up". */
    .chatbot_loader:hover {
        filter: brightness(1.08);
    }

    /* .chatbot_loader is 100x100 pre-transform; --size scales the whole
       thing (blur/shadow included) to fit the card without touching the
       mask coordinate space below. */
    .home-hero-section_ai-card .chatbot_loader {
        margin: 40px 0;
    }

    .chatbot_loader::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border-top: solid 1px var(--color-one);
        border-bottom: solid 1px var(--color-two);
        background: linear-gradient(180deg, var(--color-five), var(--color-four));
        box-shadow:
            inset 0 10px 10px 0 var(--color-three),
            inset 0 -10px 10px 0 var(--color-four);
    }

    .chatbot_loader .box {
        width: 100px;
        height: 100px;
        background: linear-gradient(180deg,
                var(--color-one) 30%,
                var(--color-two) 70%);
        mask: url(#aiChatbotLoaderClip);
        -webkit-mask: url(#aiChatbotLoaderClip);
    }

    .chatbot_loader svg {
        position: absolute;
    }

    .chatbot_loader svg #aiChatbotLoaderClip {
        filter: contrast(15);
        animation: roundness calc(var(--time-animation) / 2) linear infinite;
    }

    .chatbot_loader svg #aiChatbotLoaderClip polygon {
        filter: blur(7px);
    }

    .chatbot_loader svg #aiChatbotLoaderClip polygon:nth-child(1) {
        transform-origin: 75% 25%;
        transform: rotate(90deg);
    }

    .chatbot_loader svg #aiChatbotLoaderClip polygon:nth-child(2) {
        transform-origin: 50% 50%;
        animation: rotation var(--time-animation) linear infinite reverse;
    }

    .chatbot_loader svg #aiChatbotLoaderClip polygon:nth-child(3) {
        transform-origin: 50% 60%;
        animation: rotation var(--time-animation) linear infinite;
        animation-delay: calc(var(--time-animation) / -3);
    }

    .chatbot_loader svg #aiChatbotLoaderClip polygon:nth-child(4) {
        transform-origin: 40% 40%;
        animation: rotation var(--time-animation) linear infinite reverse;
    }

    .chatbot_loader svg #aiChatbotLoaderClip polygon:nth-child(5) {
        transform-origin: 40% 40%;
        animation: rotation var(--time-animation) linear infinite reverse;
        animation-delay: calc(var(--time-animation) / -2);
    }

    .chatbot_loader svg #aiChatbotLoaderClip polygon:nth-child(6) {
        transform-origin: 60% 40%;
        animation: rotation var(--time-animation) linear infinite;
    }

    .chatbot_loader svg #aiChatbotLoaderClip polygon:nth-child(7) {
        transform-origin: 60% 40%;
        animation: rotation var(--time-animation) linear infinite;
        animation-delay: calc(var(--time-animation) / -1.5);
    }

    @keyframes rotation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes roundness {
        0% {
            filter: contrast(15);
        }

        20% {
            filter: contrast(3);
        }

        40% {
            filter: contrast(3);
        }

        60% {
            filter: contrast(15);
        }

        100% {
            filter: contrast(15);
        }
    }

    @keyframes colorize {
        0% {
            filter: hue-rotate(-10deg);
        }

        20% {
            filter: hue-rotate(5deg);
        }

        40% {
            filter: hue-rotate(20deg);
        }

        60% {
            filter: hue-rotate(10deg);
        }

        80% {
            filter: hue-rotate(-5deg);
        }

        100% {
            filter: hue-rotate(-10deg);
        }
    }


    .home-hero-section_ai-card>p {
        font-size: 12px;
        font-style: italic;
        color: var(--color-text-muted);
        margin: 0 0 18px;
        transition: color var(--transition-fast);
    }

    .home-hero-section_ai-card>p.status-error {
        color: var(--color-danger);
        font-style: normal;
        font-weight: 600;
    }

    .home-hero-section_ai-card>p.status-live {
        color: var(--color-success);
        font-style: normal;
        font-weight: 600;
    }

    /* ---- Select Agent trigger button ---- */
    .ai-assistant-options {
        padding: 0;
        width: 100%;
    }

    .ai-assistant-options>button {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.16);
        color: #ffffff;
        font-size: 13px;
        font-weight: 600;
        padding: 10px 16px;
        border-radius: 999px;
        cursor: pointer;
        width: 100%;
        justify-content: center;
    }

    .ai-assistant-options>button span:first-child {
        width: 14px;
        height: 14px;
        display: inline-flex;
        background: rgba(255, 255, 255, 0.7);
        -webkit-mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.5c-3.5 0-10.4 1.7-10.4 5.2v2.1h20.8v-2.1c0-3.5-6.9-5.2-10.4-5.2z'/></svg>") center / contain no-repeat;
        mask: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.5c-3.5 0-10.4 1.7-10.4 5.2v2.1h20.8v-2.1c0-3.5-6.9-5.2-10.4-5.2z'/></svg>") center / contain no-repeat;
    }

    .ai-assistant-options>button span:last-child {
        width: 10px;
        height: 10px;
        border-right: 2px solid rgba(255, 255, 255, 0.7);
        border-bottom: 2px solid rgba(255, 255, 255, 0.7);
        transform: rotate(45deg);
        margin-top: -4px;
        transition: transform 0.2s ease;
    }

    .ai-assistant-options.open>button span:last-child {
        transform: rotate(-135deg);
        margin-top: 4px;
    }

    /* Positioned relative to the whole card (not the half-width button column)
     so it spans the full card width and is never clipped. */
    .ai-assistant-options_list {
        position: absolute;
        bottom: 126px;
        /* clears the action row (12px pad + ~42px) + the mode switch (64px) + 8px gap */
        left: 20px;
        right: 20px;
        max-height: 260px;
        overflow-y: auto;
        background: radial-gradient(ellipse 90% 70% at 15% 15%, #081742 0%, #254295 45%, #08384e 75%, #082146 100%);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 6px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(8px);
        transition: opacity 0.2s ease, transform 0.2s ease;
        z-index: 20;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
    }

    .ai-assistant-options.open .ai-assistant-options_list {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .ai-assistant-options_item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px;
        border-radius: 10px;
        cursor: pointer;
    }

    .ai-assistant-options_item:hover {
        background: rgba(255, 255, 255, 0.05);
    }

    .ai-assistant-options_item.is-selected {
        background: rgba(255, 255, 255, 0.09);
    }

    .ai-assistant-options_item-icon {
        width: 26px;
        height: 26px;
        flex-shrink: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ai-assistant-options_item-icon svg {
        width: 12px;
        height: 12px;
        fill: rgba(255, 255, 255, 0.6);
    }

    .ai-assistant-options_item-text {
        flex: 1;
        min-width: 0;
    }

    .ai-assistant-options_item-text strong {
        display: block;
        font-size: 12.5px;
        line-height: 1.3;
        color: #ffffff;
        font-weight: 700;
        white-space: nowrap;
    }

    .ai-assistant-options_item-text small {
        display: block;
        font-size: 10.5px;
        line-height: 1.3;
        color: rgba(255, 255, 255, 0.5);
        margin-top: 1px;
        white-space: nowrap;
    }

    .ai-assistant-options_item-tag {
        flex-shrink: 0;
        font-size: 9px;
        font-weight: 800;
        padding: 2px 6px;
        border-radius: 4px;
        letter-spacing: 0.3px;
    }

    .ai-assistant-options_item-tag.ind {
        background: var(--color-primary);
        color: var(--color-bg-soft);
    }

    .ai-assistant-options_item-tag.eng {
        background: var(--color-primary-light);
        color: var(--color-bg-soft);
    }

    /* ---- Talk With AI button ---- */
    .buttons-row>button {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: var(--gradient-primary);
        color: #ffffff;
        border: none;
        font-size: 13px;
        font-weight: 700;
        padding: 11px 20px;
        border-radius: 999px;
        cursor: pointer;
        flex: 1;
        transition: background var(--transition-fast), opacity var(--transition-fast);
    }

    .buttons-row>button::before {
        content: "";
        width: 0;
        height: 0;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        border-left: 8px solid #ffffff;
        transition: border-color var(--transition-fast);
    }

    .buttons-row>button:disabled {
        opacity: 0.45;
        cursor: not-allowed;
    }

    /* When a call is active, swap the "play" triangle for a "stop" square
       and shift the button to a danger color so it reads as "End Call". */
    .buttons-row>button.in-call {
        background: var(--color-danger);
    }

    .buttons-row>button.in-call::before {
        border-left: none;
        width: 9px;
        height: 9px;
        background: #ffffff;
        border-radius: 2px;
    }

    .home-hero-section_ai-card .buttons-row {
        display: flex;
        gap: 10px;
        padding: 0 20px 20px;
        width: 100%;
    }

    .buttons-row .ai-assistant-options {
        flex: 1;
    }

    /* ==========================================================
       AI Assistant card -- mode switch (AI Voice Chat / Text Chat)
       ========================================================== */

    /* The voice orb and the text chat share one 300px slot and the
       action row / composer share one row, so the card NEVER changes
       height when the visitor switches modes. Which one shows is driven
       purely by data-mode on .home-hero-section_ai-card. */
    .ai-stage {
        position: relative;
        width: 100%;
        height: 300px;
    }

    .ai-stage>.ai-assistant-card {
        position: absolute;
        inset: 0;
        height: auto;
        transition: opacity var(--transition-slow), transform var(--transition-slow), visibility var(--transition-slow);
    }

    .home-hero-section_ai-card[data-mode="text"] .ai-stage>.ai-assistant-card {
        opacity: 0;
        visibility: hidden;
        transform: scale(0.94);
        pointer-events: none;
    }

    /* One status line per mode, same slot, same styling (the shared
       ".home-hero-section_ai-card>p" rules above apply to both). */
    .home-hero-section_ai-card[data-mode="text"]>#aiAssistantStatus,
    .home-hero-section_ai-card[data-mode="voice"]>#aiTextStatus {
        display: none;
    }

    /* Bottom action slot: voice buttons OR the message composer.
       Opacity-only swap on purpose -- a transform here would trap the
       agent dropdown (position:absolute, relative to the card). */
    .ai-controls {
        display: grid;
        width: 100%;
    }

    .ai-controls>* {
        grid-area: 1 / 1;
        transition: opacity var(--transition-normal), visibility var(--transition-normal);
    }

    .ai-controls>.buttons-row {
        box-sizing: border-box;
        padding-bottom: 12px;
    }

    .home-hero-section_ai-card[data-mode="text"] .ai-controls>.buttons-row,
    .home-hero-section_ai-card[data-mode="voice"] .ai-controls>.ai-text-composer {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }

    /* ---- The two mode buttons ---- */
    .ai-mode-switch-wrap {
        width: 100%;
        box-sizing: border-box;
        padding: 0 20px 20px;
    }

    .ai-mode-switch {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr;
        height: 44px;
        box-sizing: border-box;
        padding: 4px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.16);
        border-radius: 999px;
    }

    .ai-mode-switch__thumb {
        position: absolute;
        top: 4px;
        left: 4px;
        width: calc(50% - 4px);
        height: calc(100% - 8px);
        background: #ffffff;
        border-radius: 999px;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.28);
        transition: transform 0.38s cubic-bezier(0.34, 1.25, 0.64, 1);
        pointer-events: none;
    }

    .ai-mode-switch[data-active="text"] .ai-mode-switch__thumb {
        transform: translateX(100%);
    }

    .ai-mode-btn {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin: 0;
        padding: 0 10px;
        background: none;
        border: none;
        border-radius: 999px;
        font-family: inherit;
        font-size: 13px;
        font-weight: 700;
        line-height: 1;
        color: rgba(255, 255, 255, 0.75);
        cursor: pointer;
        white-space: nowrap;
        transition: color var(--transition-normal);
    }

    .ai-mode-btn svg {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        fill: currentColor;
    }

    .ai-mode-btn:hover {
        color: #ffffff;
    }

    .ai-mode-btn.is-active,
    .ai-mode-btn.is-active:hover {
        color: var(--color-text);
    }

    .ai-mode-btn:focus-visible {
        outline: 2px solid var(--color-secondary-light);
        outline-offset: 2px;
    }

    .ai-mode-btn:disabled {
        opacity: 0.45;
        cursor: not-allowed;
    }

    /* ==========================================================
       Text chat panel
       ========================================================== */

    .ai-text-chat {
        position: absolute;
        inset: 0;
        display: flex;
        flex-direction: column;
        min-height: 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: opacity var(--transition-slow), transform 0.4s cubic-bezier(0.22, 1, 0.36, 1), visibility var(--transition-slow);
    }

    .home-hero-section_ai-card[data-mode="text"] .ai-text-chat {
        opacity: 1;
        visibility: visible;
        transform: none;
    }

    .ai-text-chat__bar {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 14px 10px 18px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        background: rgba(255, 255, 255, 0.03);
    }

    .ai-text-chat__dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #3ac796;
        box-shadow: 0 0 0 0 rgba(58, 199, 150, 0.6);
        animation: ai-online-pulse 2.4s ease-out infinite;
    }

    .ai-text-chat__title {
        flex: 1;
        min-width: 0;
        font-size: 12px;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: 0.2px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .ai-text-chat__clear {
        display: flex;
        align-items: center;
        gap: 5px;
        margin: 0;
        padding: 4px 9px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.14);
        border-radius: 999px;
        font-family: inherit;
        font-size: 11px;
        font-weight: 600;
        line-height: 1;
        color: rgba(255, 255, 255, 0.85);
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: opacity var(--transition-normal), background var(--transition-fast);
    }

    .ai-text-chat__clear svg {
        width: 12px;
        height: 12px;
        fill: currentColor;
    }

    .ai-text-chat.has-messages .ai-text-chat__clear {
        opacity: 1;
        visibility: visible;
    }

    .ai-text-chat__clear:hover {
        background: rgba(255, 255, 255, 0.18);
    }

    .ai-text-chat__clear:focus-visible,
    .ai-chip:focus-visible,
    .ai-msg__retry:focus-visible,
    .ai-text-composer button:focus-visible {
        outline: 2px solid var(--color-secondary-light);
        outline-offset: 2px;
    }

    .ai-text-chat__body {
        position: relative;
        flex: 1;
        min-height: 0;
    }

    /* ---- Welcome screen (until the first message) ---- */
    .ai-text-chat__welcome {
        position: absolute;
        inset: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 6px;
        padding: 0 22px 6px;
        text-align: center;
    }

    .ai-text-chat.has-messages .ai-text-chat__welcome {
        display: none;
    }

    .ai-text-chat__orb,
    .ai-msg__avatar {
        border-radius: 50%;
        background: radial-gradient(circle at 35% 30%, #ffffff 0%, var(--color-secondary-light) 38%, var(--color-secondary-dark) 100%);
        box-shadow: 0 0 14px rgba(127, 163, 255, 0.55);
    }

    .ai-text-chat__orb {
        width: 46px;
        height: 46px;
        margin-bottom: 6px;
        animation: ai-orb-float 4s ease-in-out infinite;
    }

    .ai-text-chat__hello {
        font-size: 15px;
        font-weight: 700;
        color: #ffffff;
    }

    .ai-text-chat__hint {
        font-size: 12px;
        line-height: 1.5;
        color: rgba(255, 255, 255, 0.7);
        max-width: 300px;
        text-wrap: balance;
    }

    .ai-text-chat__chips {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 6px;
        margin-top: 10px;
    }

    .ai-chip {
        margin: 0;
        padding: 7px 11px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.18);
        border-radius: 999px;
        font-family: inherit;
        font-size: 12px;
        font-weight: 600;
        line-height: 1;
        color: #ffffff;
        cursor: pointer;
        transition: background var(--transition-fast), border-color var(--transition-fast), transform var(--transition-fast);
    }

    .ai-chip:hover {
        background: rgba(255, 255, 255, 0.17);
        border-color: rgba(255, 255, 255, 0.4);
        transform: translateY(-1px);
    }

    /* ---- Message thread ---- */
    .ai-text-chat__thread {
        position: absolute;
        inset: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 14px 14px 10px 16px;
        overflow-y: auto;
        overscroll-behavior: contain;
        scrollbar-width: thin;
        scrollbar-color: rgba(255, 255, 255, 0.28) transparent;
        -webkit-mask-image: linear-gradient(to bottom, transparent 0, #000 12px, #000 calc(100% - 8px), transparent 100%);
        mask-image: linear-gradient(to bottom, transparent 0, #000 12px, #000 calc(100% - 8px), transparent 100%);
    }

    .ai-text-chat__thread::-webkit-scrollbar {
        width: 6px;
    }

    .ai-text-chat__thread::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.28);
        border-radius: 999px;
    }

    .ai-msg {
        display: flex;
        align-items: flex-end;
        gap: 8px;
        flex-shrink: 0;
        animation: ai-msg-in 0.32s cubic-bezier(0.22, 1, 0.36, 1) both;
    }

    .ai-msg--user {
        justify-content: flex-end;
    }

    .ai-msg__avatar {
        width: 24px;
        height: 24px;
        flex-shrink: 0;
    }

    .ai-msg__bubble {
        max-width: 82%;
        padding: 9px 13px;
        font-size: 13px;
        line-height: 1.5;
        border-radius: 16px;
        overflow-wrap: anywhere;
        white-space: pre-wrap;
    }

    .ai-msg--assistant .ai-msg__bubble {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.13);
        color: #ffffff;
        border-bottom-left-radius: 5px;
        white-space: normal;
    }

    .ai-msg--user .ai-msg__bubble {
        background: #ffffff;
        color: var(--color-text);
        border-bottom-right-radius: 5px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .ai-msg__bubble p {
        margin: 0;
    }

    .ai-msg__bubble p+p,
    .ai-msg__bubble p+ul,
    .ai-msg__bubble p+ol,
    .ai-msg__bubble ul+p,
    .ai-msg__bubble ol+p {
        margin-top: 6px;
    }

    .ai-msg__bubble ul,
    .ai-msg__bubble ol {
        margin: 6px 0 0;
        padding-left: 18px;
    }

    .ai-msg__bubble li {
        margin: 2px 0;
    }

    .ai-msg__bubble strong {
        font-weight: 700;
    }

    .ai-msg__bubble a {
        color: #ffd2a6;
        text-decoration: underline;
        text-underline-offset: 2px;
    }

    .ai-msg__bubble code {
        padding: 1px 5px;
        background: rgba(0, 0, 0, 0.28);
        border-radius: 4px;
        font-size: 12px;
    }

    /* Error bubble + retry */
    .ai-msg--error .ai-msg__bubble {
        background: rgba(220, 38, 38, 0.18);
        border-color: rgba(252, 165, 165, 0.45);
        color: #ffe1e1;
    }

    .ai-msg__retry {
        display: inline-block;
        margin: 8px 0 0;
        padding: 5px 12px;
        background: rgba(255, 255, 255, 0.14);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 999px;
        font-family: inherit;
        font-size: 11px;
        font-weight: 700;
        line-height: 1;
        color: #ffffff;
        cursor: pointer;
        transition: background var(--transition-fast);
    }

    .ai-msg__error-text {
        display: block;
    }

    .ai-msg__retry:hover {
        background: rgba(255, 255, 255, 0.26);
    }

    /* Typing indicator */
    .ai-msg--typing .ai-msg__bubble {
        padding: 12px 14px;
    }

    .ai-typing {
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }

    .ai-typing__dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.8);
        animation: ai-typing-bounce 1.2s ease-in-out infinite;
    }

    .ai-typing__dot:nth-child(2) {
        animation-delay: 0.15s;
    }

    .ai-typing__dot:nth-child(3) {
        animation-delay: 0.3s;
    }

    /* ---- Composer ---- */
    .ai-text-composer {
        display: flex;
        align-items: center;
        gap: 10px;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding: 0 20px 12px;
    }

    .ai-text-composer input {
        flex: 1;
        min-width: 0;
        height: 42px;
        box-sizing: border-box;
        margin: 0;
        padding: 0 18px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.16);
        border-radius: 999px;
        box-shadow: none;
        outline: none;
        -webkit-appearance: none;
        appearance: none;
        font-family: inherit;
        font-size: 13px;
        color: #ffffff;
        transition: border-color var(--transition-fast), background var(--transition-fast), box-shadow var(--transition-fast);
    }

    .ai-text-composer input::placeholder {
        color: rgba(255, 255, 255, 0.55);
    }

    .ai-text-composer input:focus {
        background: rgba(255, 255, 255, 0.13);
        border-color: rgba(255, 255, 255, 0.5);
        box-shadow: 0 0 0 3px rgba(127, 163, 255, 0.28);
    }

    .ai-text-composer button {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 42px;
        height: 42px;
        margin: 0;
        padding: 0;
        background: var(--gradient-primary);
        border: none;
        border-radius: 50%;
        cursor: pointer;
        transition: transform var(--transition-fast), opacity var(--transition-fast), box-shadow var(--transition-fast);
    }

    .ai-text-composer button svg {
        width: 18px;
        height: 18px;
        margin-left: 2px;
        fill: #ffffff;
    }

    .ai-text-composer button:not(:disabled):hover {
        transform: translateY(-1px) scale(1.06);
        box-shadow: var(--shadow-orange);
    }

    .ai-text-composer button:disabled {
        opacity: 0.45;
        cursor: not-allowed;
    }

    @keyframes ai-msg-in {
        from {
            opacity: 0;
            transform: translateY(8px) scale(0.98);
        }

        to {
            opacity: 1;
            transform: none;
        }
    }

    @keyframes ai-typing-bounce {

        0%,
        60%,
        100% {
            transform: translateY(0);
            opacity: 0.45;
        }

        30% {
            transform: translateY(-4px);
            opacity: 1;
        }
    }

    @keyframes ai-online-pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(58, 199, 150, 0.55);
        }

        70%,
        100% {
            box-shadow: 0 0 0 7px rgba(58, 199, 150, 0);
        }
    }

    @keyframes ai-orb-float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .ai-msg,
        .ai-text-chat__dot,
        .ai-text-chat__orb,
        .ai-typing__dot {
            animation: none;
        }

        .ai-stage>.ai-assistant-card,
        .ai-text-chat,
        .ai-controls>*,
        .ai-mode-switch__thumb {
            transition: none;
        }
    }

    @media (max-width: 900px) {
        .home-hero-section_conetent {
            grid-template-columns: 1fr;
        }

        .home-hero-section_info {
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .home-hero-section_title {
            /* text-align: center; */
            font-size: 34px;
        }

        .home-hero-section_title span {
            display: block;
            /* text-align: center; */
        }

        #home-hero-section {
            padding: 60px 24px;
        }

        .home-hero-section_ai {
            display: none;
        }
    }

    @media (max-width: 900px) {
        .home-hero-section_info {
            text-align: center;
        }

        .home-hero-section_title {
            font-size: 28px;
        }

        .home-hero-section_title span {
            font-size: 30px;
        }

        .home-hero-section_description {
            font-size: 20px;
        }

        .home-hero-section_cta-button {
            padding: 12px 24px;
            border-radius: 999px;
            font-size: 10px;
        }

        .home-hero-section_autotyping {
            font-size: 15px;
        }
    }
</style>

<section class="home-hero-section" id="home-hero-section">
    <div class="home-hero-cubes" id="homeHeroCubes" aria-hidden="true">
        <?php
        // Each background cube: outer div handles mouse-parallax (JS),
        // inner div handles idle drift + hover/click states (CSS), ring
        // handles the click "ping" pulse. data-depth controls how strongly
        // a cube reacts to the parallax — bigger/closer cubes move more.
        $home_hero_bg_cubes = [
            ['n' => 1,  'theme' => 'orange', 'unit' => 8, 'depth' => 22],
            ['n' => 2,  'theme' => 'blue',   'unit' => 7, 'depth' => 16],
            ['n' => 3,  'theme' => 'green',  'unit' => 8, 'depth' => 24],
            ['n' => 4,  'theme' => 'purple', 'unit' => 7, 'depth' => 14],
            ['n' => 5,  'theme' => 'cyan',   'unit' => 7, 'depth' => 18],
            ['n' => 6,  'theme' => 'blue',   'unit' => 5, 'depth' => 10],
            ['n' => 7,  'theme' => 'orange', 'unit' => 6, 'depth' => 12],
            ['n' => 8,  'theme' => 'purple', 'unit' => 5, 'depth' => 9],
            ['n' => 9,  'theme' => 'cyan',   'unit' => 6, 'depth' => 13],
            ['n' => 10, 'theme' => 'green',  'unit' => 4, 'depth' => 8],
        ];
        foreach ($home_hero_bg_cubes as $cube):
        ?>
            <div class="home-hero-cube home-hero-cube--<?php echo $cube['n']; ?> home-hero-cube--theme-<?php echo $cube['theme']; ?>"
                data-depth="<?php echo $cube['depth']; ?>">
                <div class="home-hero-cube__inner" tabindex="-1">
                    <?php echo render_ai_interaction([
                        'id'    => 'heroCubeBg' . $cube['n'],
                        'theme' => $cube['theme'],
                        'unit'  => $cube['unit'],
                    ]); ?>
                    <span class="home-hero-cube__ring"></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="home-hero-section_conetent">
        <div class="home-hero-section_info">
            <div class="home-hero-section_badge" style="display: none;">
                <div class="home-hero-section_badge-google">
                    <span class="home-hero-section_badge-google-icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google Icon">
                    </span>
                    <span>Google</span>
                </div>
                <span class="home-hero-section_badge-stars">★★★★★</span>
                <div class="home-hero-section_badge-rating"><span>4.5</span> Customer Rating</div>
            </div>
            <h1 class="home-hero-section_title">
                Powering Better Business Communication
                <span>AI-Driven KingDigital</span>
            </h1>
            <div class="home-hero-section_autotyping">
                <span class="typed">Smart Solutions for</span>
                <span class="typing"></span>
            </div>
            <p class="home-hero-section_description">
                Reach your audience through SMS, WhatsApp, voice, and other communication channels with solutions built around the way your business actually works.
            </p>
            <div class="home-hero-section_cta-section">
                <a href="contact.php" class="home-hero-section_cta-button">Get Started</a>
                <a href="#services" class="home-hero-section_cta-button">Explore Services</a>
            </div>
        </div>
        <div class="home-hero-section_ai">
            <div class="home-hero-section_ai-card" id="aiAssistantRoot" data-mode="voice">
                <h3>AI Assistant</h3>
                <!-- Stage: the voice orb and the text chat share this one slot. -->
                <div class="ai-stage">
                    <div class="ai-assistant-card" id="aiAssistantCard">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>

                        <!-- Gooey CSS/SVG blob, driven live by ai-assistant-blob-driver.js
                         (reads phase/level off ai-assistant-icpaas-adapter.js, which
                         listens for the KD widget's kd:state / kd:level events).
                         See the wiring script near the bottom of this file. -->
                        <div class="chatbot_loader" id="aiChatbotLoader">
                            <svg width="100" height="100" viewBox="0 0 100 100">
                                <defs>
                                    <mask id="aiChatbotLoaderClip">
                                        <polygon points="0,0 100,0 100,100 0,100" fill="black"></polygon>
                                        <polygon points="25,25 75,25 50,75" fill="white"></polygon>
                                        <polygon points="50,25 75,75 25,75" fill="white"></polygon>
                                        <polygon points="35,35 65,35 50,65" fill="white"></polygon>
                                        <polygon points="35,35 65,35 50,65" fill="white"></polygon>
                                        <polygon points="35,35 65,35 50,65" fill="white"></polygon>
                                        <polygon points="35,35 65,35 50,65" fill="white"></polygon>
                                    </mask>
                                </defs>
                            </svg>
                            <div class="box"></div>
                        </div>

                    </div>

                    <!-- ============ Text chat panel (mode = text) ============ -->
                    <div class="ai-text-chat" data-ai-panel>
                        <div class="ai-text-chat__bar">
                            <span class="ai-text-chat__dot" aria-hidden="true"></span>
                            <span class="ai-text-chat__title">King Digital Assistant</span>
                            <button type="button" class="ai-text-chat__clear" data-ai-clear aria-label="Start a new chat" title="Start a new chat">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M17.65 6.35A7.96 7.96 0 0 0 12 4a8 8 0 1 0 7.73 10h-2.08A6 6 0 1 1 12 6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z" />
                                </svg>
                                New chat
                            </button>
                        </div>
                        <div class="ai-text-chat__body">
                            <div class="ai-text-chat__thread" data-ai-thread role="log" aria-live="polite" aria-label="Conversation"></div>
                            <div class="ai-text-chat__welcome" data-ai-welcome>
                                <div class="ai-text-chat__orb" aria-hidden="true"></div>
                                <div class="ai-text-chat__hello">Hi, I'm the King Digital Assistant</div>
                                <div class="ai-text-chat__hint">Ask me about our services, pricing or how to get started.</div>
                                <div class="ai-text-chat__chips">
                                    <button type="button" class="ai-chip" data-ai-chip="Tell me about your Bulk SMS service">Bulk SMS</button>
                                    <button type="button" class="ai-chip" data-ai-chip="How does the Business WhatsApp API work?">WhatsApp API</button>
                                    <button type="button" class="ai-chip" data-ai-chip="What IVR solutions do you offer?">IVR solutions</button>
                                    <button type="button" class="ai-chip" data-ai-chip="How can I get started with KingDigital?">Get started</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.ai-stage -->

                <p id="aiAssistantStatus">Select an agent, then Talk With AI</p>
                <p id="aiTextStatus">Ask anything about our services</p>

                <!-- Bottom action slot: voice buttons OR the message composer -->
                <div class="ai-controls">
                    <div class="buttons-row">
                        <div class="ai-assistant-options" id="agentDropdown">
                            <button type="button" id="agentDropdownToggle">
                                <span></span>
                                <span id="agentDropdownLabel">Select Agent</span>
                                <span></span>
                            </button>
                            <div class="ai-assistant-options_list">
                                <div class="ai-assistant-options_item" data-persona="IND_Female">
                                    <div class="ai-assistant-options_item-icon">
                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                        </svg>
                                    </div>
                                    <div class="ai-assistant-options_item-text">
                                        <strong>AI Assistant</strong>
                                        <small>Female · Hinglish</small>
                                    </div>
                                    <span class="ai-assistant-options_item-tag ind">IND</span>
                                </div>
                                <div class="ai-assistant-options_item" data-persona="IND_Male">
                                    <div class="ai-assistant-options_item-icon">
                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                        </svg>
                                    </div>
                                    <div class="ai-assistant-options_item-text">
                                        <strong>AI Assistant</strong>
                                        <small>Male · Hinglish</small>
                                    </div>
                                    <span class="ai-assistant-options_item-tag ind">IND</span>
                                </div>
                                <div class="ai-assistant-options_item" data-persona="ENG_Male">
                                    <div class="ai-assistant-options_item-icon">
                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                        </svg>
                                    </div>
                                    <div class="ai-assistant-options_item-text">
                                        <strong>AI Assistant</strong>
                                        <small>Male · English</small>
                                    </div>
                                    <span class="ai-assistant-options_item-tag eng">ENG</span>
                                </div>
                                <div class="ai-assistant-options_item" data-persona="ENG_Female">
                                    <div class="ai-assistant-options_item-icon">
                                        <svg viewBox="0 0 24 24">
                                            <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                                        </svg>
                                    </div>
                                    <div class="ai-assistant-options_item-text">
                                        <strong>AI Assistant</strong>
                                        <small>Female · English</small>
                                    </div>
                                    <span class="ai-assistant-options_item-tag eng">ENG</span>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="talkWithAiBtn" disabled>
                            <span id="talkWithAiLabel">Talk With AI</span>
                        </button>
                    </div>

                    <form class="ai-text-composer" data-ai-form autocomplete="off">
                        <input type="text" data-ai-input placeholder="Type your message…" maxlength="1000" aria-label="Type your message">
                        <button type="submit" data-ai-send aria-label="Send message" disabled>
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M2.01 21 23 12 2.01 3 2 10l15 2-15 2z" />
                            </svg>
                        </button>
                    </form>
                </div><!-- /.ai-controls -->

                <!-- The two mode buttons -->
                <div class="ai-mode-switch-wrap">
                    <div class="ai-mode-switch" id="aiModeSwitch" role="group" aria-label="Choose how to chat" data-active="voice">
                        <span class="ai-mode-switch__thumb" aria-hidden="true"></span>
                        <button type="button" class="ai-mode-btn is-active" data-ai-mode="voice" aria-pressed="true">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 14a3 3 0 0 0 3-3V6a3 3 0 0 0-6 0v5a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.92V21h2v-3.08A7 7 0 0 0 19 11h-2z" />
                            </svg>
                            <span>AI Voice Chat</span>
                        </button>
                        <button type="button" class="ai-mode-btn" data-ai-mode="text" aria-pressed="false">
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20 2H4a2 2 0 0 0-2 2v18l4-4h14a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z" />
                            </svg>
                            <span>Text Chat</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script src="assets/js/ai-assistant-icpaas-adapter.js"></script>
<script src="assets/js/ai-assistant-blob-driver.js"></script>
<script src="assets/js/ai-assistant-text-chat.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        /* ---- Autotyping effect ---- */
        var phrases = ["Business WhatsApp API", "IVR Solutions", "Bulk SMS"];
        var typingEl = document.querySelector('.home-hero-section_autotyping .typing');
        var phraseIndex = 0;
        var charIndex = 0;
        var deleting = false;

        function tick() {
            var current = phrases[phraseIndex];

            if (!deleting) {
                charIndex++;
                typingEl.textContent = current.substring(0, charIndex);
                if (charIndex === current.length) {
                    deleting = true;
                    setTimeout(tick, 1400);
                    return;
                }
            } else {
                charIndex--;
                typingEl.textContent = current.substring(0, charIndex);
                if (charIndex === 0) {
                    deleting = false;
                    phraseIndex = (phraseIndex + 1) % phrases.length;
                }
            }

            setTimeout(tick, deleting ? 40 : 80);
        }

        tick();

        /* ---- Background cubes: mouse-parallax + click ping ---- */
        var heroSection = document.getElementById('home-hero-section');
        var cubesLayer = document.getElementById('homeHeroCubes');
        var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (heroSection && cubesLayer) {
            var bgCubes = Array.prototype.slice.call(cubesLayer.querySelectorAll('.home-hero-cube'));
            var rafId = null;
            var pointerX = 0.5; // 0..1 across the section
            var pointerY = 0.5;

            function applyParallax() {
                rafId = null;
                bgCubes.forEach(function(cube) {
                    var depth = parseFloat(cube.getAttribute('data-depth')) || 12;
                    var dx = (pointerX - 0.5) * 2 * depth;
                    var dy = (pointerY - 0.5) * 2 * depth;
                    cube.style.transform = 'translate3d(' + dx.toFixed(1) + 'px, ' + dy.toFixed(1) + 'px, 0)';
                });
            }

            if (!reduceMotion) {
                heroSection.addEventListener('mousemove', function(e) {
                    var rect = heroSection.getBoundingClientRect();
                    pointerX = (e.clientX - rect.left) / rect.width;
                    pointerY = (e.clientY - rect.top) / rect.height;
                    if (rafId === null) {
                        rafId = requestAnimationFrame(applyParallax);
                    }
                });

                heroSection.addEventListener('mouseleave', function() {
                    pointerX = 0.5;
                    pointerY = 0.5;
                    if (rafId === null) {
                        rafId = requestAnimationFrame(applyParallax);
                    }
                });
            }

            // Click / tap on a cube: brief highlight + expanding ring pulse.
            bgCubes.forEach(function(cube) {
                var inner = cube.querySelector('.home-hero-cube__inner');
                var ring = cube.querySelector('.home-hero-cube__ring');
                if (!inner) return;

                inner.addEventListener('click', function() {
                    inner.classList.add('is-active', 'is-clicked');
                    if (ring) {
                        ring.classList.remove('is-pinging');
                        // restart the animation even on rapid repeat clicks
                        void ring.offsetWidth;
                        ring.classList.add('is-pinging');
                    }
                    setTimeout(function() {
                        inner.classList.remove('is-active', 'is-clicked');
                    }, 550);
                });
            });
        }

        /* ---- Agent dropdown toggle ---- */
        var dropdown = document.getElementById('agentDropdown');
        var toggle = document.getElementById('agentDropdownToggle');
        var toggleLabel = document.getElementById('agentDropdownLabel');

        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            dropdown.classList.toggle('open');
        });

        document.addEventListener('click', function() {
            dropdown.classList.remove('open');
        });

        /* ---- ICPaaS AI Connector (Voice) wiring ---- */
        var statusEl = document.getElementById('aiAssistantStatus');
        var talkBtn = document.getElementById('talkWithAiBtn');
        var talkLabel = document.getElementById('talkWithAiLabel');

        var selectedPersona = null;
        var defaultStatusText = 'Select an agent, then Talk With AI';

        // Assigned further down once ai-assistant-icpaas-adapter.js /
        // ai-assistant-blob-driver.js are confirmed loaded. Declared here
        // (rather than with `var` down where they're created) so the click
        // handlers above that point in the file can still reference them --
        // by the time a user can actually click anything, this whole
        // DOMContentLoaded callback has already run once, top to bottom.
        var aiAdapter = null;
        var blobDriver = null;

        function setStatus(text, kind) {
            statusEl.textContent = text;
            statusEl.classList.remove('status-error', 'status-live');
            if (kind) {
                statusEl.classList.add(kind === 'error' ? 'status-error' : 'status-live');
            }
        }

        // Wraps aiAdapter.forcePhase() so a blob/visual failure -- a stale
        // adapter file without this method, a future bug in it, anything --
        // can NEVER take down the actual KD call flow below. Purely
        // cosmetic, purely best-effort.
        function safeForcePhase(phase) {
            if (!aiAdapter || typeof aiAdapter.forcePhase !== 'function') return;
            try {
                aiAdapter.forcePhase(phase);
            } catch (err) {
                console.error('[HomeHero] aiAdapter.forcePhase failed (non-fatal):', err);
            }
        }

        // Same idea as safeForcePhase() above -- never let a blob/visual
        // failure block the actual agent-selection logic below it.
        function safePulse() {
            if (!blobDriver || typeof blobDriver.pulse !== 'function') return;
            try {
                blobDriver.pulse();
            } catch (err) {
                console.error('[HomeHero] blobDriver.pulse failed (non-fatal):', err);
            }
        }

        dropdown.querySelectorAll('.ai-assistant-options_item').forEach(function(item) {
            item.addEventListener('click', function() {
                var name = item.querySelector('strong').textContent;
                var sub = item.querySelector('small').textContent;
                var persona = item.getAttribute('data-persona');

                toggleLabel.textContent = name + ' — ' + sub;
                dropdown.classList.remove('open');

                dropdown.querySelectorAll('.ai-assistant-options_item').forEach(function(el) {
                    el.classList.remove('is-selected');
                });
                item.classList.add('is-selected');

                selectedPersona = persona;
                talkBtn.disabled = false;

                // Visible acknowledgment right on the blob for this
                // discrete action, independent of any KD call state.
                safePulse();

                if (window.KD && typeof window.KD.setPersona === 'function') {
                    try {
                        window.KD.setPersona(persona);
                        if (!(window.KD.inCall)) {
                            setStatus('Agent set: ' + sub + '. Tap "Talk With AI" to start.');
                        }
                    } catch (err) {
                        setStatus('Could not set agent voice. Please retry.', 'error');
                        console.error('KD.setPersona failed:', err);
                    }
                } else {
                    // Widget script not loaded yet (or missing API key) — still
                    // remember the choice so it applies once KD becomes available.
                    setStatus('Agent selected: ' + sub + '. Connecting…');
                }
            });
        });

        /* ---- Talk With AI button: start/stop a voice call via KD ---- */
        talkBtn.addEventListener('click', function() {
            if (!window.KD) {
                setStatus('AI voice assistant is not available right now.', 'error');
                return;
            }
            if (!selectedPersona) {
                setStatus('Please select an agent first.', 'error');
                return;
            }

            try {
                if (window.KD.inCall) {
                    // Snap the blob back down immediately -- don't wait for
                    // KD's own kd:state event to confirm the call ended.
                    safeForcePhase('idle');
                    window.KD.end();
                } else {
                    // Optimistically switch the blob into "listening" the
                    // instant the user taps this button, rather than sitting
                    // static until KD's kd:state event round-trips. The real
                    // event (whatever phase KD actually reports) still wins
                    // once it arrives.
                    safeForcePhase('listening');
                    window.KD.setPersona(selectedPersona);
                    window.KD.start();
                }
            } catch (err) {
                safeForcePhase('idle');
                setStatus('Something went wrong starting the call.', 'error');
                console.error('KD call toggle failed:', err);
            }
        });

        /* ---- Reflect KD call state on the button + status text ---- */
        function refreshCallUi() {
            if (!window.KD) return;

            if (window.KD.inCall) {
                talkBtn.classList.add('in-call');
                talkLabel.textContent = 'End Call';
            } else {
                talkBtn.classList.remove('in-call');
                talkLabel.textContent = 'Talk With AI';
            }
        }

        window.addEventListener('kd:state', refreshCallUi);

        // In case the widget script loads after this one and already has a
        // state by the time everything settles, sync the UI once on load.
        setTimeout(refreshCallUi, 500);

        /* ---- Blob: single source of truth for phase/level ----
           ai-assistant-icpaas-adapter.js listens for kd:state / kd:level
           itself (see that file), normalizes them into one of
           idle/listening/thinking/speaking + a 0..1 level, and calls back
           on every change. ai-assistant-blob-driver.js reads that same
           adapter once per animation frame to drive the blob's colors,
           tempo and size. The status text below piggybacks on the same
           adapter callback instead of re-parsing KD events itself, so
           there's only one place that decides what "listening" etc. means. */
        var loaderEl = document.getElementById('aiChatbotLoader');

        if (!loaderEl) {
            console.error('[HomeHero] #aiChatbotLoader not found in markup.');
        } else if (!window.AIAssistantBlobDriver || !window.AIAssistantICPaaSAdapter) {
            console.error(
                '[HomeHero] AIAssistantBlobDriver / AIAssistantICPaaSAdapter not found on window ' +
                '-- check that ai-assistant-icpaas-adapter.js and ai-assistant-blob-driver.js ' +
                'are loading (in that order) before this script.'
            );
        } else {
            aiAdapter = new AIAssistantICPaaSAdapter({
                onChange: function(state) {
                    if (!window.KD) return;

                    if (state.phase === 'listening') {
                        setStatus('Listening…', 'live');
                    } else if (state.phase === 'speaking') {
                        setStatus('Speaking…', 'live');
                    } else if (state.phase === 'thinking') {
                        setStatus('Thinking…', 'live');
                    } else if (window.KD.inCall) {
                        setStatus('Connected.', 'live');
                    } else {
                        setStatus(defaultStatusText);
                    }
                }
            });

            // pointerEl = the whole card, not just the blob, so the cursor
            // parallax reacts across the full card area, not only when
            // hovering the small blob itself.
            blobDriver = new AIAssistantBlobDriver(loaderEl, aiAdapter, {
                pointerEl: document.getElementById('aiAssistantCard')
            });
        }

        /* ---- Mode switch: AI Voice Chat <-> Text Chat ----
           Two buttons under the card. data-mode on the card drives ALL the
           show/hide (orb <-> chat panel, voice buttons <-> composer), so
           this is just state + the side effects that CSS can't do:
           hanging up an active call before leaving voice mode, and waking
           the text chat up when it's shown. */
        var aiRoot = document.getElementById('aiAssistantRoot');
        var modeSwitch = document.getElementById('aiModeSwitch');
        var textStatusEl = document.getElementById('aiTextStatus');
        var modeBtns = modeSwitch ? Array.prototype.slice.call(modeSwitch.querySelectorAll('[data-ai-mode]')) : [];
        var currentMode = 'voice';
        var textChat = null;

        function setTextStatus(text, kind) {
            if (!textStatusEl) return;
            textStatusEl.textContent = text;
            textStatusEl.classList.remove('status-error', 'status-live');
            if (kind) {
                textStatusEl.classList.add(kind === 'error' ? 'status-error' : 'status-live');
            }
        }

        if (aiRoot && modeSwitch) {
            if (window.AIAssistantTextChat) {
                try {
                    textChat = new AIAssistantTextChat({
                        root: aiRoot,
                        onStatus: setTextStatus
                    });
                } catch (err) {
                    console.error('[HomeHero] Could not start text chat (non-fatal):', err);
                }
            } else {
                console.error(
                    '[HomeHero] AIAssistantTextChat not found on window -- check that ' +
                    'assets/js/ai-assistant-text-chat.js is loading before this script.'
                );
            }

            // Text mode can't work without the module, so don't offer a dead button.
            if (!textChat) {
                modeBtns.forEach(function(btn) {
                    if (btn.getAttribute('data-ai-mode') === 'text') {
                        btn.disabled = true;
                        btn.title = 'Text chat is unavailable right now';
                    }
                });
            }

            function setMode(mode) {
                if (mode === currentMode) return;
                if (mode === 'text' && !textChat) return;

                if (mode === 'text') {
                    dropdown.classList.remove('open');

                    // Leaving voice mode hangs up any live call so the mic
                    // never stays open behind the text UI.
                    if (window.KD && window.KD.inCall) {
                        safeForcePhase('idle');
                        try {
                            window.KD.end();
                        } catch (err) {
                            console.error('KD.end failed while switching to text chat:', err);
                        }
                        setStatus(defaultStatusText);
                    }
                }

                currentMode = mode;
                aiRoot.setAttribute('data-mode', mode);
                modeSwitch.setAttribute('data-active', mode);

                modeBtns.forEach(function(btn) {
                    var on = btn.getAttribute('data-ai-mode') === mode;
                    btn.classList.toggle('is-active', on);
                    btn.setAttribute('aria-pressed', on ? 'true' : 'false');
                });

                safePulse(); // the blob visibly reacts to the switch too

                if (mode === 'text') textChat.open();
            }

            modeBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    setMode(btn.getAttribute('data-ai-mode'));
                });
            });
        }
    });
</script>