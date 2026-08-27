<style>
    .fp-section {
        --fp-orange: #FF6B1A;
        --fp-orange-soft: #FFF0E8;
        --fp-red-soft: #FDECEC;
        --fp-blue-soft: #EAF2FE;
        --fp-purple-soft: #F3EfFF;
        --fp-green-soft: #E9F8EF;
        --fp-orange-soft: #FFF0E8;
        --fp-ink: #14213D;
        --fp-muted: #6B7686;
        --fp-border: #ECEEF2;

        background: var(--fp-purple-soft);
        padding: 68px 0;
        overflow: hidden;
    }

    .fp-section::before {
        content: "";

        position: absolute;
        inset: 0;

        background-image:
            linear-gradient(rgba(99, 102, 241, 0.025) 1px,
                transparent 1px),
            linear-gradient(90deg,
                rgba(99, 102, 241, 0.025) 1px,
                transparent 1px);

        background-size: 36px 36px;

        pointer-events: none;
    }

    .fp-container {
        max-width: 1160px;
        margin-inline: auto;
        padding-inline: 24px;
    }

    /* ---------- Header ---------- */

    .fp-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .fp-eyebrow {
        display: block;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--fp-orange);
        margin-bottom: 8px;
    }

    .fp-title {
        font-size: clamp(24px, 3vw, 30px);
        font-weight: 800;
        color: var(--fp-ink);
    }

    /* ---------- Grid ---------- */

    .fp-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 18px;
        margin-bottom: 36px;
    }

    .fp-card {
        display: block;
    }

    .fp-card__thumb {
        position: relative;
        aspect-ratio: 4 / 3.3;
        border-radius: 14px;
        overflow: hidden;
        margin-bottom: 12px;
        background: var(--fp-border);
    }

    .fp-card__thumb video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        background: #000;
        transition: transform 400ms ease;
    }

    .fp-card__thumb:not(.is-playing):hover video {
        transform: scale(1.06);
    }

    .fp-card__play {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.92);
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 20px rgba(20, 33, 61, 0.22);
        transition: transform 280ms ease, background 280ms ease, opacity 200ms ease;
    }

    .fp-card__play svg {
        width: 15px;
        height: 15px;
        color: var(--fp-ink);
        margin-left: 2px;
    }

    .fp-card__thumb:hover .fp-card__play {
        transform: translate(-50%, -50%) scale(1.1);
        background: var(--fp-orange);
    }

    .fp-card__thumb:hover .fp-card__play svg {
        color: #FFFFFF;
    }

    /* Once playback starts, native video controls take over */
    .fp-card__thumb.is-playing .fp-card__play {
        opacity: 0;
        pointer-events: none;
    }

    .fp-card__title {
        font-size: 13.5px;
        font-weight: 700;
        color: var(--fp-ink);
        text-align: center;
        margin-bottom: 4px;
    }

    .fp-card__meta {
        font-size: 10.5px;
        color: var(--fp-muted);
        text-align: center;
    }

    /* ---------- View all button ---------- */

    .fp-cta {
        display: flex;
        justify-content: center;
    }

    .fp-cta a {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 13px 26px;
        border-radius: 999px;
        border: 1.5px solid var(--fp-orange);
        color: var(--fp-orange);
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        transition: background 260ms ease, color 260ms ease, transform 260ms ease;
    }

    .fp-cta a svg {
        width: 15px;
        height: 15px;
        transition: transform 220ms ease;
    }

    .fp-cta a:hover {
        background: var(--fp-orange);
        color: #FFFFFF;
        transform: translateY(-2px);
    }

    .fp-cta a:hover svg {
        transform: translateX(3px);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 980px) {
        .fp-grid {
            grid-template-columns: repeat(3, 1fr);
            row-gap: 28px;
        }
    }

    @media (max-width: 560px) {
        .fp-section {
            padding: 48px 0;
        }

        .fp-header {
            margin-bottom: 28px;
        }

        .fp-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
            row-gap: 24px;
        }

        .fp-card__title {
            font-size: 12.5px;
        }
    }
</style>

<section class="fp-section">
    <div class="fp-container">

        <div class="fp-header">
            <span class="fp-eyebrow">Our Work</span>
            <h2 class="fp-title">Featured Projects</h2>
        </div>

        <div class="fp-grid">

            <div class="fp-card">
                <div class="fp-card__thumb">
                    <video class="fp-card__video" poster="assets/images/project-podcast-poster.jpg" playsinline preload="metadata">
                        <source src="assets/videos/project-podcast.mp4" type="video/mp4">
                    </video>
                    <button type="button" class="fp-card__play" aria-label="Play Podcast Production video">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7Z" />
                        </svg>
                    </button>
                </div>
                <h3 class="fp-card__title">Podcast Production</h3>
                <p class="fp-card__meta">Recording • Editing • Publishing</p>
            </div>

            <div class="fp-card">
                <div class="fp-card__thumb">
                    <video class="fp-card__video" poster="assets/images/project-video-ads-poster.jpg" playsinline preload="metadata">
                        <source src="assets/videos/project-video-ads.mp4" type="video/mp4">
                    </video>
                    <button type="button" class="fp-card__play" aria-label="Play Video Ads video">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7Z" />
                        </svg>
                    </button>
                </div>
                <h3 class="fp-card__title">Video Ads</h3>
                <p class="fp-card__meta">Shoot • Edit • Color Grade</p>
            </div>

            <div class="fp-card">
                <div class="fp-card__thumb">
                    <video class="fp-card__video" poster="assets/images/project-animation-poster.jpg" playsinline preload="metadata">
                        <source src="assets/videos/project-animation.mp4" type="video/mp4">
                    </video>
                    <button type="button" class="fp-card__play" aria-label="Play Animation video">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7Z" />
                        </svg>
                    </button>
                </div>
                <h3 class="fp-card__title">Animation</h3>
                <p class="fp-card__meta">2D / 3D • Motion Graphics</p>
            </div>

            <div class="fp-card">
                <div class="fp-card__thumb">
                    <video class="fp-card__video" poster="assets/images/project-voiceover-poster.jpg" playsinline preload="metadata">
                        <source src="assets/videos/project-voiceover.mp4" type="video/mp4">
                    </video>
                    <button type="button" class="fp-card__play" aria-label="Play Voice Over video">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7Z" />
                        </svg>
                    </button>
                </div>
                <h3 class="fp-card__title">Voice Over</h3>
                <p class="fp-card__meta">Ads • Explainers • IVR</p>
            </div>

            <div class="fp-card">
                <div class="fp-card__thumb">
                    <video class="fp-card__video" poster="assets/images/project-voice-recording-poster.jpg" playsinline preload="metadata">
                        <source src="assets/videos/project-voice-recording.mp4" type="video/mp4">
                    </video>
                    <button type="button" class="fp-card__play" aria-label="Play Voice Recording video">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7Z" />
                        </svg>
                    </button>
                </div>
                <h3 class="fp-card__title">Voice Recording</h3>
                <p class="fp-card__meta">Studio • Dubbing • Narration</p>
            </div>

        </div>

        <div class="fp-cta">
            <a href="#">
                View All Projects
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M13 6l6 6-6 6" />
                </svg>
            </a>
        </div>

    </div>
</section>

<script>
    (function() {
        const thumbs = document.querySelectorAll(".fp-card__thumb");

        thumbs.forEach(function(thumb) {
            const video = thumb.querySelector(".fp-card__video");
            const button = thumb.querySelector(".fp-card__play");
            if (!video || !button) return;

            button.addEventListener("click", function() {
                // Pause any other video already playing in the grid.
                thumbs.forEach(function(otherThumb) {
                    if (otherThumb === thumb) return;
                    const otherVideo = otherThumb.querySelector(".fp-card__video");
                    if (otherVideo && !otherVideo.paused) {
                        otherVideo.pause();
                        otherThumb.classList.remove("is-playing");
                    }
                });

                // Hand off to native controls for a full watch experience
                // (seek, pause, volume, fullscreen) once playback starts.
                video.setAttribute("controls", "");
                video.play();
                thumb.classList.add("is-playing");
            });

            video.addEventListener("pause", function() {
                thumb.classList.remove("is-playing");
            });

            video.addEventListener("play", function() {
                thumb.classList.add("is-playing");
            });
        });
    })();
</script>