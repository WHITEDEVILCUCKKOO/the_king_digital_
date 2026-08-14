<style>
    .home-about {
        width: 100%;
        font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        padding: 80px 0;
        background: linear-gradient(356deg, #b9c3e726, #535c7429);
    }

    .home-about_content {
        width: 90%;
        max-width: 1120px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .home-about_content--upper-feature {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;

        padding: 8px 18px;
        margin-bottom: 18px;

        border-radius: 999px;

        color: #041575;
        font-size: 14px;
        font-weight: 900;

        background: rgb(193 192 192 / 49%);
        border: 1px solid rgba(255, 255, 255, .18);

        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);

        overflow: hidden;
        isolation: isolate;
        z-index: 1;
    }

    /* .home-about_content--upper-feature::before, */
    .home-about_content--upper-feature::after {
        content: "";
        position: absolute;
        inset: 0;
        width: max-content;
        height: 7px;
        border-radius: 50%;
        background: #df4d0f31;
        z-index: -1;
        animation: homeAboutBlinkingDot 1.5s infinite;
    }

    .home-about_content--upper-feature::after {
        animation-delay: 1.2s;
    }

    @keyframes ripple {
        0% {
            transform: scale(1);
            opacity: .6;
        }

        100% {
            transform: scale(1.5);
            opacity: 0;
        }
    }



    .home-about_content--icon {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #0f31f0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;

    }

    .home-about_content--icon h3 {
        font-size: 12px;
    }


    .home-about_content--bullet {
        position: relative;
        width: 7px;
        height: 7px;
        background: #0f31f0;
        border-radius: 50%;
    }

    .home-about_content--bullet::after {
        content: "";
        position: absolute;
        inset: 0;
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #df4d0f31;
        animation: homeAboutBlinkingDot 1.5s infinite;
    }

    @keyframes homeAboutBlinkingDot {
        0% {
            transform: scale(1);
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0.62);
            opacity: .0;
        }

        70% {
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0);
            opacity: .55;
        }

        100% {
            transform: scale(2);
            box-shadow: 0 0 0 0 rgba(241, 91, 22, 0.52);
            opacity: .85;
        }
    }

    .home-about_content--heading {
        font-size: 48px;
        font-weight: 900;
        line-height: 1.2;
        color: #101827;
        margin-bottom: 20px;
        text-align: center;

        font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .home-about_content--heading span {
        background: linear-gradient(90deg, #ef560d 0%, #ff9448 31%, #123d6b 68%, #ef560d 100%);
        background-size: 250% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: aboutHeadingGradient 4s ease-in-out infinite;
    }

    @keyframes aboutHeadingGradient {
        0% {
            background-position: 0% center;
        }

        100% {
            background-position: 250% center;
        }
    }

    .home-about_content--para {
        font-size: 13px;
        line-height: 1.6;
        color: #424f63;
        margin-bottom: 20px;
        text-align: center;
    }

    /* ////////////////////////////////////////////////// About Styling End ////////////////////////////////////////// */

    /* ////////////////////////////////////////////////// About Content 2 Styling Start ////////////////////////////////////////// */


    /* ============ TABLET / SMALL LAPTOP (≤1100px) — replaces BOTH old 900px blocks ============ */

    @media (max-width: 1100px) {
        .home-about {
            padding: 60px 0;
        }

        .home-about_content--heading {
            font-size: 40px;
            /* 50px was too big for tablet, likely a typo from testing */
        }

        .home-about_content2 {
            width: 100%;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .home-about_content2--visual {
            min-height: 420px;
            width: 100%;
            height: 420px;
            margin: 0 auto;
            padding-left: 10px;
        }

        .home-about_content2--visual-img1 {
            margin: 0 auto;
            width: 100%;
            /* keep the original % — "100%" was making it fill the whole box, throwing off badge/img2 offsets */
        }

        .home-about_content2--visual-badge {
            width: 180px;
            height: 80px;
            left: 11px;
            top: 300px;
        }

    }

    /* ============ MOBILE (≤640px) — your block, mostly kept, two small fixes ============ */
    @media (max-width: 640px) {
        .home-about_content {
            width: 92%;
        }

        .home-about_content--heading {
            font-size: 24px;
        }

        .home-about_content--para {
            font-size: 13px;
            /* 12px was a bit too small to read comfortably */
        }

        .home-about_content2 {
            flex-direction: column;
        }

        .home-about_content2--visual {
            max-width: 400px;
            width: 100%;
            height: 350px;
        }

        .home-about_content2--visual-img1 img {
            height: 190px;
        }

        .home-about_content2--visual-badge {
            top: 215px;
            left: -12px;
            width: 170px;
            height: 70px;
            font-size: 18px;
        }

        .home-about_content2--visual-badge h4 {
            font-size: 15px;
        }

        .home-about_content2--visual-img2 {
            top: 115px;
            width: 40%;
        }

        .home-about_content2--visual-img2 img {
            height: 130px;
        }

        .home-about_content2--visual-img2--info h3 {
            font-size: 24px;
        }

        .home-about_content2--text {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .home-about_content2--heading {
            text-align: center;
            font-size: 24px;
        }

        .home-about_content2--para {
            text-align: center;
            font-size: 12px;
        }

        .home-about_content2--points-item p,
        .home-about_content2--features-items h4 {
            font-size: 14px;
        }

        .home-about_content2--cta {
            width: 100%;
            justify-content: center;
            padding: 15px 24px;
        }
    }

    /* ////////////////////////////////////////////////// Scroll Reveal Animations Start ////////////////////////////////////////// */

    /* Content 1 — fades + slides up when it enters the viewport, and reverses
       (fades back out / slides down) when it leaves the viewport in either direction */
    .home-about_content {
        opacity: 0;
        transform: translateY(60px);
        transition: opacity .8s cubic-bezier(.22, .61, .36, 1), transform .8s cubic-bezier(.22, .61, .36, 1);
        will-change: opacity, transform;
    }

    .home-about_content.in-view {
        opacity: 1;
        transform: translateY(0);
    }

    /* Content 2 — "door" animation: visual (left) and text (right) slide in from
       opposite sides toward the center, and slide back out the way they came when
       the section leaves the viewport */
    .home-about_content2--visual {
        opacity: 0;
        transform: translateX(-110px);
        transition: opacity .9s cubic-bezier(.22, .61, .36, 1), transform .9s cubic-bezier(.22, .61, .36, 1);
        will-change: opacity, transform;
    }

    .home-about_content2--text {
        opacity: 0;
        transform: translateX(110px);
        transition: opacity .9s cubic-bezier(.22, .61, .36, 1), transform .9s cubic-bezier(.22, .61, .36, 1);
        will-change: opacity, transform;
    }

    .home-about_content2.in-view .home-about_content2--visual,
    .home-about_content2.in-view .home-about_content2--text {
        opacity: 1;
        transform: translateX(0);
    }

    /* Respect users who prefer reduced motion — show content statically, no animation */
    @media (prefers-reduced-motion: reduce) {

        .home-about_content,
        .home-about_content2--visual,
        .home-about_content2--text {
            opacity: 1;
            transform: none;
            transition: none;
        }
    }

    .home-about-svg {
        position: absolute;
        left: -10px;
        top: -5px;

        width: 100px;
        height: 100px;

        transform: rotate(-15deg)
    }

    .home-about-svg img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .home-about-svg-2 {
        position: absolute;
        right: -10px;
        bottom: -60px;
        width: 100px;
        height: 100px;
        transform: rotate(15deg);
    }

    .home-about-svg-2 img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .about-float {
        animation: aboutFloat 5s ease-in-out infinite;
        will-change: transform;
    }

    @keyframes aboutFloat {

        0%,
        100% {
            transform: translate3d(0, 0, 0) rotate(0deg);
        }

        25% {
            transform: translate3d(4px, -10px, 0) rotate(0.5deg);
        }

        50% {
            transform: translate3d(0, -16px, 0) rotate(0deg);
        }

        75% {
            transform: translate3d(-4px, -9px, 0) rotate(-0.5deg);
        }
    }
</style>

<section class="home-about">
    <div class="home-about_content">
        <span class="home-about_content--upper-feature ">

            <span class="home-about_content--bullet"></span>
            <h3 style="font-size: 12px;">About King Digital</h3>


        </span>
        <h2 class="home-about_content--heading">
            <div class="home-about-svg about-float">
                <img src="assets/svg/about.svg">
            </div>

            <!-- <div class="hello_cont_box">
                <video autoplay muted loop playsinline>
                    <source src="assets/animtions_video/Mujhe_Ashe_same_animation_wali.mp4" type="video/webm">
                </video>
            </div> -->

            Your Trusted Partner for <span>Business Growth</span>
        </h2>
        <p class="home-about_content--para">
            King Digital is a full-service digital marketing, technology and business communication company dedicated to helping businesses establish a strong digital presence and achieve sustainable growth. We combine creative thinking, modern technology and result-focused strategies to develop solutions that support brand visibility, customer engagement, lead generation and long-term business performance.
        </p>
        <p class="home-about_content--para">
            Our complete range of services includes professional website development, landing page design,Google Ads, Meta Ads, search engine optimization, social media marketing, graphic designing, video production and digital branding. Every campaign and digital platform is planned according to the business objectives, target audience and market requirements of our clients.
        </p>

        <div class="home-about-svg-2 about-float">
            <img src="assets/svg/about-2.svg">
        </div>
    </div>




</section>

<script>
    // ////////////////////////////////////////////////// About Section Scroll Reveal //////////////////////////////////////////////////
    // Toggles `.in-view` on/off as the elements enter/leave the viewport, in EITHER
    // scroll direction — so content 1 fades up then fades back out, and content 2's
    // visual/text slide back off-screen the way they came, rather than staying visible
    // once revealed.
    document.addEventListener('DOMContentLoaded', function() {
        const aboutContent1 = document.querySelector('.home-about_content');


        if (!aboutContent1) return;

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                entry.target.classList.toggle('in-view', entry.isIntersecting);
            });
        }, {
            threshold: 0.2, // fires once ~20% of the block is visible
            rootMargin: '0px 0px -10% 0px'
        });

        if (aboutContent1) revealObserver.observe(aboutContent1);

    });
</script>