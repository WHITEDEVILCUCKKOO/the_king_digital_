<style>
    :root {
        /* ========================================
       SOCIAL MEDIA MARKETING THEME
       ======================================== */

        /* Primary */
        --smm-primary: #7C3AED;
        --smm-primary-light: #A78BFA;
        --smm-primary-dark: #5B21B6;

        /* Secondary */
        --smm-secondary: #EC4899;
        --smm-secondary-light: #F9A8D4;
        --smm-secondary-dark: #BE185D;

        /* Accent */
        --smm-accent: #F97316;
        --smm-accent-light: #FDBA74;
        --smm-accent-dark: #EA580C;

        /* Gradient */
        --smm-gradient: linear-gradient(135deg, #7C3AED 0%, #EC4899 55%, #F97316 100%);
        --smm-gradient-soft: linear-gradient(135deg, #F5F3FF 0%, #FCE7F3 55%, #FFF7ED 100%);

        /* Backgrounds */
        --smm-bg: #FFFFFF;
        --smm-bg-soft: #FAF9FF;
        --smm-bg-purple: #F5F3FF;
        --smm-bg-pink: #FDF2F8;
        --smm-bg-orange: #FFF7ED;

        /* Dark Sections */
        --smm-dark: #181026;
        --smm-dark-2: #24163A;
        --smm-dark-card: #2D1B46;

        /* Text */
        --smm-text: #18181B;
        --smm-text-dark: #27272A;
        --smm-text-muted: #71717A;
        --smm-text-light: #A1A1AA;
        --smm-text-white: #FFFFFF;

        /* Borders */
        --smm-border: #E4E4E7;
        --smm-border-light: #F0ECF8;
        --smm-border-purple: #DDD6FE;

        /* Cards */
        --smm-card: #FFFFFF;
        --smm-card-hover: #FCFAFF;

        /* Status / Metrics */
        --smm-success: #22C55E;
        --smm-success-light: #DCFCE7;
        --smm-danger: #EF4444;
        --smm-warning: #F59E0B;
        --smm-info: #3B82F6;

        /* Shadows */
        --smm-shadow-sm: 0 2px 8px rgba(24, 16, 38, 0.05);
        --smm-shadow-md: 0 8px 30px rgba(24, 16, 38, 0.08);
        --smm-shadow-lg: 0 20px 50px rgba(124, 58, 237, 0.12);
        --smm-shadow-glow: 0 0 40px rgba(124, 58, 237, 0.18);

        /* Radius */
        --smm-radius-sm: 10px;
        --smm-radius-md: 16px;
        --smm-radius-lg: 24px;
        --smm-radius-xl: 32px;

        /* Spacing */
        --smm-section-space: clamp(70px, 8vw, 120px);

        /* Container */
        --smm-container: 1240px;
    }

    /* ========================================
       WHAT WE DO
       ======================================== */

    .ssm-wwd {
        position: relative;
        padding: 20px 0;
        background: var(--smm-bg);
    }

    .ssm-wwd_content {
        max-width: var(--smm-container);
        margin: 0 auto;
    }

    .ssm-wwd_content-heading {
        position: relative;
        margin: 0 0 10px;
        text-align: center;
        font-size: clamp(28px, 3.2vw, 42px);
        font-weight: 800;
        letter-spacing: -0.02em;
        color: var(--smm-text);
    }

    .ssm-wwd_content-heading::after {
        content: "";
        display: block;
        width: 64px;
        height: 4px;
        margin: 18px auto 0;
        border-radius: 999px;
        background: var(--smm-gradient);
    }

    .ssm-wwd_content-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 26px;
    }

    .ssm-wwd_content-cards {
        position: relative;
        padding: 30px 20px 25px;
        background: var(--smm-card);
        border: 1px solid var(--smm-border-light);
        border-radius: var(--smm-radius-lg);
        overflow: hidden;
        opacity: 0;
        transform: translateY(24px);
        animation: wwdFadeUp .7s cubic-bezier(.2, .8, .2, 1) forwards;
        animation-delay: calc(var(--wwd-i, 0) * 90ms);
        transition: transform .4s cubic-bezier(.2, .8, .2, 1),
            box-shadow .4s ease,
            border-color .4s ease;
    }

    .ssm-wwd_content-cards:nth-child(1) {
        --wwd-i: 1;
    }

    .ssm-wwd_content-cards:nth-child(2) {
        --wwd-i: 2;
    }

    .ssm-wwd_content-cards:nth-child(3) {
        --wwd-i: 3;
    }

    .ssm-wwd_content-cards:nth-child(4) {
        --wwd-i: 4;
    }

    .ssm-wwd_content-cards:nth-child(5) {
        --wwd-i: 5;
    }

    .ssm-wwd_content-cards:nth-child(6) {
        --wwd-i: 6;
    }

    @keyframes wwdFadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* soft glow that blooms in on hover */
    .ssm-wwd_content-cards::before {
        content: "";
        position: absolute;
        top: -60px;
        right: -60px;
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background: var(--smm-gradient);
        filter: blur(50px);
        opacity: 0;
        transform: scale(.6);
        transition: opacity .45s ease, transform .45s ease;
        pointer-events: none;
    }

    /* gradient underline that grows in on hover */
    .ssm-wwd_content-cards::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 0%;
        background: var(--smm-gradient);
        transition: width .5s cubic-bezier(.2, .8, .2, 1);
    }

    .ssm-wwd_content-cards:hover {
        transform: translateY(-8px);
        border-color: var(--smm-border-purple);
        box-shadow: var(--smm-shadow-lg);
    }

    .ssm-wwd_content-cards:hover::before {
        opacity: .16;
        transform: scale(1);
    }

    .ssm-wwd_content-cards:hover::after {
        width: 100%;
    }

    .ssm-wwd_content-cards span {
        position: relative;
        z-index: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 84px;
        height: 84px;
        margin-bottom: 24px;
        border-radius: var(--smm-radius-md);
        background: var(--smm-bg-purple);
        transition: transform .5s cubic-bezier(.34, 1.56, .64, 1),
            background .45s ease,
            box-shadow .45s ease;
    }

    .ssm-wwd_content-cards span svg {
        width: 38px;
        height: 38px;
    }

    .ssm-wwd_content-cards:hover span {
        transform: scale(1.1) rotate(-8deg);
        background: var(--smm-gradient-soft);
        box-shadow: var(--smm-shadow-glow);
    }

    .ssm-wwd_content-cards h3 {
        position: relative;
        z-index: 1;
        margin: 0 0 10px;
        font-size: 19px;
        font-weight: 700;
        color: var(--smm-text);
    }

    .ssm-wwd_content-cards p {
        position: relative;
        z-index: 1;
        margin: 0;
        font-size: 14.5px;
        line-height: 1.65;
        color: var(--smm-text-muted);
    }

    @media (max-width: 1024px) {
        .ssm-wwd_content-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 640px) {
        .ssm-wwd_content-container {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .ssm-wwd_content-cards {
            padding: 32px 22px 26px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .ssm-wwd_content-cards {
            opacity: 1;
            transform: none;
            animation: none;
            transition: none;
        }

        .ssm-wwd_content-cards::before,
        .ssm-wwd_content-cards::after,
        .ssm-wwd_content-cards span {
            transition: none;
        }
    }
</style>

<section class="ssm-wwd">
    <div class="ssm-wwd_content">
        <h2 class="ssm-wwd_content-heading">
            What We Do
        </h2>
        <div class="ssm-wwd_content-container">
            <div class="ssm-wwd_content-cards">
                <span>
                    <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000" transform="matrix(-1, 0, 0, 1, 0, 0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill="#b036d9" d="M32,0c-8.477,0-16.178,3.302-21.903,8.683L9,7.585V4.999c0-0.168-0.051-0.318-0.124-0.457 C8.862,4.479,8.827,4.411,8.747,4.331L4.708,0.292H4.707C4.526,0.11,4.276-0.001,4-0.001c-0.553,0-1,0.447-1,1v2H1 c-0.553,0-1,0.447-1,1c0,0.276,0.112,0.526,0.293,0.707v0.001l3.999,3.998c0.001,0.001,0.001,0.001,0.001,0.001l0.041,0.041 c0.08,0.08,0.147,0.115,0.21,0.129C4.682,8.948,4.833,8.999,5,8.999h2.586l1.097,1.098C3.303,15.821,0,23.522,0,32 c0,17.673,14.327,32,32,32s32-14.327,32-32S49.673,0,32,0z M32,59.999c-15.464,0-28-12.536-28-28c0-7.372,2.854-14.074,7.511-19.075 l2.828,2.829C10.405,20.026,8,25.731,8,31.999c0,13.255,10.745,24,24,24s24-10.745,24-24s-10.745-24-24-24 c-6.268,0-11.972,2.404-16.247,6.34l-2.828-2.829c5-4.657,11.703-7.511,19.075-7.511c15.464,0,28,12.536,28,28 S47.464,59.999,32,59.999z M20.013,21.426C17.523,24.247,16,27.94,16,31.999c0,8.837,7.163,16,16,16s16-7.163,16-16s-7.163-16-16-16 c-4.059,0-7.752,1.523-10.573,4.013l-2.828-2.828c3.548-3.212,8.238-5.185,13.401-5.185c11.046,0,20,8.954,20,20s-8.954,20-20,20 s-20-8.954-20-20c0-5.163,1.973-9.854,5.185-13.401L20.013,21.426z M25.687,27.1C24.633,28.454,24,30.151,24,32c0,4.418,3.582,8,8,8 s8-3.582,8-8s-3.582-8-8-8c-1.848,0-3.545,0.633-4.899,1.686l-2.845-2.845c2.091-1.77,4.791-2.842,7.744-2.842 c6.627,0,12,5.373,12,12s-5.373,12-12,12s-12-5.373-12-12c0-2.953,1.072-5.653,2.842-7.744L25.687,27.1z M31.293,32.706 c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414l-2.727-2.727C30.575,28.215,31.26,28,32,28c2.209,0,4,1.791,4,4s-1.791,4-4,4 s-4-1.791-4-4c0-0.741,0.215-1.426,0.566-2.021L31.293,32.706z"></path>
                        </g>
                    </svg>
                </span>
                <h3>Social Strategy</h3>
                <p>Data Driven strategies that align with you business goal.</p>
            </div>
            <div class="ssm-wwd_content-cards">
                <span>
                    <svg width="64px" height="64px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#d74eda">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M20 4h-3V3h-3a2 2 0 0 0-4 0H7v1H4v18h16zM8 4h3V2.615A.615.615 0 0 1 11.614 2h.771a.615.615 0 0 1 .615.615V4h3v2H8zm11 17H5V5h2v2h10V5h2zM7 18h5v1H7zm0-8h10v1H7zm0 4h10v1H7z"></path>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                        </g>
                    </svg>
                </span>
                <h3>Content Creation</h3>
                <p>Creative, Engaging content that captures attention and drive actions.</p>
            </div>
            <div class="ssm-wwd_content-cards">
                <span>
                    <svg fill="#d74eda" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.996 511.996" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path d="M455.87,153.215l-73.351,24.461c-3.109-7.935-10.815-13.563-19.852-13.563h-64v-42.667 c0-23.558-19.109-42.667-42.667-42.667H21.333C9.551,78.779,0,88.331,0,100.113c0,11.782,9.551,21.333,21.333,21.333H256v42.667 H21.333C9.551,164.113,0,173.664,0,185.446v213.333c0,11.782,9.551,21.333,21.333,21.333h341.333 c9.035,0,16.739-5.625,19.85-13.557l73.326,24.437c27.638,9.213,56.153-11.354,56.153-40.484v-196.8 C511.996,164.604,483.497,144.049,455.87,153.215z M42.667,206.779h298.663c0,0.002,0,0.004,0,0.006v170.66H42.667V206.779z M469.329,390.509c0,0.002-85.145-28.371-85.329-28.432V222.159l85.337-28.458C469.323,193.705,469.329,390.509,469.329,390.509z"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </span>
                <h3>Reels and Short Videos</h3>
                <p>High Performing short videos that increases reach and engagement.</p>
            </div>
            <div class="ssm-wwd_content-cards">
                <span>
                    <svg fill="#d74eda" width="64px" height="64px" viewBox="0 0 36 36" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>group-line</title>
                            <path class="clr-i-outline clr-i-outline-path-1" d="M17.9,17.3c2.7,0,4.8-2.2,4.8-4.9c0-2.7-2.2-4.8-4.9-4.8c-2.7,0-4.8,2.2-4.8,4.8C13,15.1,15.2,17.3,17.9,17.3z M17.8,9.6C17.9,9.6,17.9,9.6,17.8,9.6c1.6,0,2.9,1.3,2.9,2.9s-1.3,2.8-2.9,2.8c-1.6,0-2.8-1.3-2.8-2.8C15,10.9,16.3,9.6,17.8,9.6z"></path>
                            <path class="clr-i-outline clr-i-outline-path-2" d="M32.7,16.7c-1.9-1.7-4.4-2.6-7-2.5c-0.3,0-0.5,0-0.8,0c-0.2,0.8-0.5,1.5-0.9,2.1c0.6-0.1,1.1-0.1,1.7-0.1c1.9-0.1,3.8,0.5,5.3,1.6V25h2v-8L32.7,16.7z"></path>
                            <path class="clr-i-outline clr-i-outline-path-3" d="M23.4,7.8c0.5-1.2,1.9-1.8,3.2-1.3c1.2,0.5,1.8,1.9,1.3,3.2c-0.4,0.9-1.3,1.5-2.2,1.5c-0.2,0-0.5,0-0.7-0.1c0.1,0.5,0.1,1,0.1,1.4c0,0.2,0,0.4,0,0.6c0.2,0,0.4,0.1,0.6,0.1c2.5,0,4.5-2,4.5-4.4c0-2.5-2-4.5-4.4-4.5c-1.6,0-3,0.8-3.8,2.2C22.5,6.8,23,7.2,23.4,7.8z"></path>
                            <path class="clr-i-outline clr-i-outline-path-4" d="M12,16.4c-0.4-0.6-0.7-1.3-0.9-2.1c-0.3,0-0.5,0-0.8,0c-2.6-0.1-5.1,0.8-7,2.4L3,17v8h2v-7.2c1.6-1.1,3.4-1.7,5.3-1.6C10.9,16.2,11.5,16.3,12,16.4z"></path>
                            <path class="clr-i-outline clr-i-outline-path-5" d="M10.3,13.1c0.2,0,0.4,0,0.6-0.1c0-0.2,0-0.4,0-0.6c0-0.5,0-1,0.1-1.4c-0.2,0.1-0.5,0.1-0.7,0.1c-1.3,0-2.4-1.1-2.4-2.4c0-1.3,1.1-2.4,2.4-2.4c1,0,1.9,0.6,2.3,1.5c0.4-0.5,1-1,1.5-1.4c-1.3-2.1-4-2.8-6.1-1.5c-2.1,1.3-2.8,4-1.5,6.1C7.3,12.3,8.7,13.1,10.3,13.1z"></path>
                            <path class="clr-i-outline clr-i-outline-path-6" d="M26.1,22.7l-0.2-0.3c-2-2.2-4.8-3.5-7.8-3.4c-3-0.1-5.9,1.2-7.9,3.4L10,22.7v7.6c0,0.9,0.7,1.7,1.7,1.7c0,0,0,0,0,0h12.8c0.9,0,1.7-0.8,1.7-1.7c0,0,0,0,0,0V22.7z M24.1,30H12v-6.6c1.6-1.6,3.8-2.4,6.1-2.4c2.2-0.1,4.4,0.8,6,2.4V30z"></path>
                            <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
                        </g>
                    </svg>
                </span>
                <h3>Community Management</h3>
                <p>Build Relationships and nurture your community everyday.</p>
            </div>
            <div class="ssm-wwd_content-cards">
                <span>
                    <svg width="64px" height="64px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>horn_line</title>
                            <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Media" transform="translate(-816.000000, -96.000000)">
                                    <g id="horn_line" transform="translate(816.000000, 96.000000)">
                                        <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path>
                                        <path d="M21,3.42569 C21,2.48922 19.9951,1.86321 19.1486,2.32773 C18.0119,2.95158 14.6462,4.76973 12.6307,5.57069 C10.2859,6.50249 8.26651,6.85245 5.9533,6.95974 C4.34937,7.03413 3,8.32857 3,9.99999 L3,14 C3,15.6714 4.34937,16.9659 5.9533,17.0402 C6.22676,17.0529 6.49612,17.069 6.76239,17.089 L6.01942,20.8039 C5.91111,21.3454 6.26232,21.8723 6.80388,21.9806 C7.34544,22.0889 7.87227,21.7377 7.98058,21.1961 L8.75415,17.3283 C10.0174,17.5434 11.2692,17.8883 12.6307,18.4293 C14.6462,19.2303 18.0119,21.0484 19.1486,21.6723 C19.995,22.1368 21,21.5108 21,20.5743 L21,3.42569 Z M9,15.3416 C10.4181,15.5767 11.8333,15.9603 13.3693,16.5707 C15.0217,17.2274 17.4558,18.4899 19,19.3169 L19,4.68311 C17.4558,5.51005 15.0217,6.77263 13.3693,7.4293 C11.8333,8.03971 10.4181,8.42331 9,8.65843 L9,15.3416 Z M7,8.89857 C6.68528,8.92326 6.36769,8.94267 6.04595,8.95759 C5.44311,8.98555 5,9.46227 5,9.99999 L5,14 C5,14.5377 5.44311,15.0144 6.04596,15.0424 C6.36769,15.0573 6.68528,15.0767 7,15.1014 L7,8.89857 Z" id="形状" fill="#d74eda"> </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </span>
                <h3>Paid Social Advertising</h3>
                <p>Targeted Ad campaigns that diliver masuarable result.</p>
            </div>
            <div class="ssm-wwd_content-cards">
                <span>
                    <svg fill="#d74eda" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.004 512.004" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g>
                                    <path d="M136.535,230.403H68.269c-4.71,0-8.533,3.814-8.533,8.533v204.8c0,4.719,3.823,8.533,8.533,8.533h68.267 c4.71,0,8.533-3.814,8.533-8.533v-204.8C145.069,234.218,141.246,230.403,136.535,230.403z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M238.935,153.97h-68.267c-4.514,0-8.175,3.661-8.175,8.166v281.6c0,4.506,3.661,8.166,8.175,8.166h68.267 c4.514,0,8.175-3.661,8.175-8.166v-281.6C247.11,157.631,243.45,153.97,238.935,153.97z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M341.336,196.27h-68.267c-4.71,0-8.533,3.814-8.533,8.533v238.933c0,4.719,3.823,8.533,8.533,8.533h68.267 c4.71,0,8.533-3.814,8.533-8.533V204.803C349.869,200.084,346.046,196.27,341.336,196.27z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M443.735,110.937h-68.267c-4.71,0-8.533,3.814-8.533,8.533v324.267c0,4.719,3.823,8.533,8.533,8.533h68.267 c4.71,0,8.533-3.814,8.533-8.533V119.47C452.269,114.751,448.446,110.937,443.735,110.937z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M409.602,25.603h-51.2c-4.71,0-8.533,3.814-8.533,8.533s3.823,8.533,8.533,8.533h29.184l-81.826,66.961l-97.673-40.704 c-2.79-1.161-5.99-0.759-8.405,1.05l-102.4,76.8c-3.772,2.825-4.531,8.175-1.707,11.938c1.672,2.244,4.241,3.422,6.835,3.422 c1.775,0,3.575-0.555,5.111-1.707l98.5-73.873l97.894,40.789c2.918,1.229,6.255,0.725,8.687-1.263l88.465-72.38v23.1 c0,4.719,3.823,8.533,8.533,8.533s8.533-3.814,8.533-8.533V34.137C418.135,29.418,414.313,25.603,409.602,25.603z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M509.502,471.837l-25.6-25.6c-3.337-3.337-8.73-3.337-12.066,0c-3.337,3.336-3.337,8.73,0,12.066l11.034,11.034H42.669 V29.136L53.702,40.17c1.664,1.664,3.849,2.5,6.033,2.5s4.369-0.836,6.033-2.5c3.336-3.336,3.336-8.73,0-12.066l-25.6-25.6 c-3.336-3.336-8.73-3.336-12.066,0l-25.6,25.6c-3.336,3.337-3.336,8.73,0,12.066c3.337,3.337,8.73,3.337,12.066,0l11.034-11.034 V477.87c0,4.719,3.823,8.533,8.533,8.533h448.734l-11.034,11.034c-3.337,3.337-3.337,8.73,0,12.066 c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5l25.6-25.6C512.838,480.566,512.838,475.173,509.502,471.837z"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </span>
                <h3>Analytics & Reporting</h3>
                <p>Transparent reports and insights to track growth and ROI.</p>
            </div>
        </div>
    </div>
</section>