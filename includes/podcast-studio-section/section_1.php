<!-- =========================================================
     VIDEO HERO SECTION
     Elementor HTML Widget - Complete Final Code
========================================================= -->

<section class="kd-video-hero">

    <!-- BACKGROUND VIDEO -->
    <video
        class="kd-hero-video"
        autoplay
        muted
        loop
        playsinline
        preload="auto"
        aria-hidden="true"
    >
        <source
            src="assets/videos/sqwe.mp4"
            type="video/webm"
        >
    </video>

    <!-- LIGHT DARK OVERLAY -->
    <div class="kd-video-overlay"></div>

</section>


<style>
/* =========================================================
   RESET
========================================================= */

.kd-video-hero,
.kd-video-hero * {
    box-sizing: border-box;
}


/* =========================================================
   HERO SECTION
========================================================= */

.kd-video-hero {
    position: relative;
    width: 100%;
    height: 100vh;
    min-height: 650px;

    overflow: hidden;

    background: #050505;

    margin: 0;
    padding: 0;

    isolation: isolate;
}


/* =========================================================
   BACKGROUND VIDEO
========================================================= */

.kd-hero-video {
    position: absolute;

    top: 50%;
    left: 50%;

    width: 100%;
    height: 100%;

    min-width: 100%;
    min-height: 100%;

    transform: translate(-50%, -50%);

    object-fit: cover;
    object-position: center center;

    border: 0;
    outline: none;

    z-index: 1;

    pointer-events: none;
}


/* =========================================================
   VIDEO OVERLAY
   Remove this div/CSS if you want original video brightness
========================================================= */

.kd-video-overlay {
    position: absolute;
    inset: 0;

    z-index: 2;

    pointer-events: none;

    background:
        linear-gradient(
            90deg,
            rgba(0, 0, 0, 0.18) 0%,
            rgba(0, 0, 0, 0.04) 50%,
            rgba(0, 0, 0, 0.18) 100%
        );
}


/* =========================================================
   LARGE DESKTOP
========================================================= */

@media (min-width: 1440px) {

    .kd-video-hero {
        height: 100vh;
        min-height: 720px;
    }

}


/* =========================================================
   LAPTOP
========================================================= */

@media (max-width: 1200px) {

    .kd-video-hero {
        height: 90vh;
        min-height: 620px;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 1024px) {

    .kd-video-hero {
        height: 80vh;
        min-height: 560px;
    }

    .kd-hero-video {
        object-position: center center;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .kd-video-hero {
        width: 100%;
        height: 72vh;
        min-height: 500px;
        max-height: 720px;
    }

    .kd-hero-video {
        width: 100%;
        height: 100%;

        object-fit: cover;
        object-position: center center;
    }

    .kd-video-overlay {
        background: rgba(0, 0, 0, 0.08);
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .kd-video-hero {
        height: 68vh;
        min-height: 460px;
    }

}


/* =========================================================
   REMOVE VIDEO DEFAULT CONTROLS
========================================================= */

.kd-hero-video::-webkit-media-controls {
    display: none !important;
}

.kd-hero-video::-webkit-media-controls-enclosure {
    display: none !important;
}

</style>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const heroVideo = document.querySelector(".kd-hero-video");

    if (!heroVideo) return;

    /* Always keep video muted for autoplay */
    heroVideo.muted = true;
    heroVideo.defaultMuted = true;

    /* Loop */
    heroVideo.loop = true;

    /* Mobile inline playback */
    heroVideo.setAttribute("playsinline", "");
    heroVideo.setAttribute("webkit-playsinline", "");

    /* Try autoplay */
    const playVideo = function () {

        const playPromise = heroVideo.play();

        if (playPromise !== undefined) {
            playPromise.catch(function () {
                /* Browser may temporarily block autoplay */
            });
        }
    };

    playVideo();

    /* Retry after first user interaction if required */
    const startVideo = function () {
        heroVideo.muted = true;
        playVideo();
    };

    document.addEventListener("touchstart", startVideo, {
        once: true,
        passive: true
    });

    document.addEventListener("click", startVideo, {
        once: true
    });

    /* Restart video if browser stops it at end */
    heroVideo.addEventListener("ended", function () {
        heroVideo.currentTime = 0;
        playVideo();
    });

});
</script>