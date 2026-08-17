<style>
 
    .about-hero {
        position: relative;
        width: 100%;
        aspect-ratio: 16/9;
        overflow: hidden;
    }
 
    .about-hero_video {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }
 
</style>

<section class="about-hero" id="first-section">
    <video
        class="about-hero_video"
        autoplay
        muted
        loop
        playsinline
        preload="auto"
        poster="assets/images/hero-poster.jpg">
        <source src="assets/videos/SAMPLE_1_HHLKD.mp4" type="video/mp4">
    </video>
    <div class="about-hero_overlay"></div>
</section>