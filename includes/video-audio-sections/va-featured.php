<style>
    .fp-section {
        --ink: #1B1613;
        --ink-soft: #241E19;
        --ink-line: rgba(243, 236, 223, 0.13);
        --paper: #F3ECDF;
        --paper-dim: #B9AF9E;
        --copper: #D3701F;
        --meter-red: #D8503F;
        --radius-sm: 3px;
        --radius-md: 4px;

        position: relative;
        background: var(--ink);
        color: var(--paper);
        padding: 88px 0 96px;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    .fp-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(243, 236, 223, 0.035) 1px, transparent 1px);
        background-size: 4px 4px;
        pointer-events: none;
    }

    .fp-container {
        position: relative;
        z-index: 1;
        max-width: 1180px;
        margin-inline: auto;
        padding-inline: 24px;
    }

    /* ---------- Header ---------- */

    .fp-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 40px;
        margin-bottom: 44px;
        padding-bottom: 24px;
        border-bottom: 1px solid var(--ink-line);
    }

    .fp-plate {
        font-family: 'IBM Plex Mono', monospace;
        font-size: 12px;
        color: var(--copper);
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 14px;
    }

    .fp-plate::before {
        content: "";
        width: 18px;
        height: 1px;
        background: var(--copper);
        display: inline-block;
    }

    .fp-title {
        font-family: 'Big Shoulders Display', sans-serif;
        font-weight: 800;
        font-size: clamp(28px, 3.2vw, 42px);
        line-height: 1.05;
        letter-spacing: -0.01em;
        color: var(--paper);
        max-width: 15ch;
    }

    .fp-subtitle {
        font-size: 14.5px;
        line-height: 1.65;
        color: var(--paper-dim);
        max-width: 30ch;
        text-align: right;
    }

    /* ---------- Grid ---------- */

    .fp-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 22px;
        margin-bottom: 40px;
    }

    .fp-card {
        display: block;
    }

    /* Monitor bezel */
    .fp-monitor {
        position: relative;
        aspect-ratio: 4 / 3.2;
        background: var(--ink-soft);
        border: 1px solid var(--ink-line);
        padding: 8px 8px 0;
        margin-bottom: 12px;
        transition: border-color 240ms ease;
    }

    .fp-card:hover .fp-monitor {
        border-color: var(--copper);
    }

    .fp-monitor__screen {
        position: relative;
        width: 100%;
        height: calc(100% - 8px);
        overflow: hidden;
        background: #000;
    }

    .fp-monitor__screen video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 400ms ease;
    }

    .fp-monitor__screen:not(.is-playing):hover video {
        transform: scale(1.05);
    }

    .fp-monitor__screen::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(27, 22, 19, 0) 55%, rgba(27, 22, 19, 0.5) 100%);
        pointer-events: none;
        transition: opacity 240ms ease;
    }

    .fp-monitor__screen.is-playing::after {
        opacity: 0;
    }

    /* Tally light — glows red only while this monitor is live */
    .fp-monitor__tally {
        position: absolute;
        top: 8px;
        left: 8px;
        z-index: 2;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--meter-red);
        opacity: 0.25;
        transition: opacity 240ms ease, box-shadow 240ms ease;
    }

    .fp-monitor__screen.is-playing~.fp-monitor__tally {
        opacity: 1;
    }

    .fp-monitor__play {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 38px;
        height: 38px;
        border-radius: var(--radius-sm);
        background: rgba(243, 236, 223, 0.92);
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        transition: transform 220ms ease, background 220ms ease, opacity 200ms ease;
    }

    .fp-monitor__play svg {
        width: 13px;
        height: 13px;
        color: var(--ink);
        margin-left: 2px;
    }

    .fp-monitor__screen:hover~.fp-monitor__play,
    .fp-monitor:hover .fp-monitor__play {
        background: var(--copper);
    }

    .fp-monitor:hover .fp-monitor__play svg {
        color: var(--paper);
    }

    .fp-monitor__screen.is-playing+.fp-monitor__play {
        opacity: 0;
        pointer-events: none;
    }

    .fp-card__num {
        font-family: 'IBM Plex Mono', monospace;
        font-size: 10.5px;
        color: var(--paper-dim);
        letter-spacing: 0.03em;
        margin-bottom: 6px;
    }

    .fp-card__title {
        font-size: 14px;
        font-weight: 600;
        color: var(--paper);
        margin-bottom: 4px;
    }

    .fp-card__meta {
        font-size: 11.5px;
        line-height: 1.5;
        color: var(--paper-dim);
    }

    /* ---------- CTA ---------- */

    .fp-cta {
        display: flex;
        justify-content: center;
    }

    .fp-cta a {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 24px;
        border-radius: var(--radius-md);
        border: 1px solid var(--ink-line);
        color: var(--paper);
        font-size: 14.5px;
        font-weight: 600;
        text-decoration: none;
        transition: border-color 220ms ease, color 220ms ease;
    }

    .fp-cta a svg {
        width: 15px;
        height: 15px;
        transition: transform 220ms ease;
    }

    .fp-cta a:hover {
        border-color: var(--copper);
        color: var(--copper);
    }

    .fp-cta a:hover svg {
        transform: translateX(3px);
    }

    /* ---------- Responsive ---------- */

    @media (max-width: 980px) {
        .fp-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .fp-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .fp-subtitle {
            text-align: left;
        }
    }

    @media (max-width: 560px) {
        .fp-section {
            padding: 64px 0 72px;
        }

        .fp-header {
            margin-bottom: 28px;
        }

        .fp-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }

        .fp-card__title {
            font-size: 13px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .fp-monitor,
        .fp-monitor__screen video,
        .fp-monitor__play,
        .fp-monitor__tally,
        .fp-cta a {
            transition: none;
        }
    }
</style>

<section class="fp-section">
    <div class="fp-container">

        <div class="fp-header">
            <div>
                <p class="fp-plate">Screening room</p>
                <h2 class="fp-title">Recent work, reel by reel.</h2>
            </div>
            <p class="fp-subtitle">A few sessions pulled straight from the monitors.</p>
        </div>

        <div class="fp-grid">

            <div class="fp-card">
                <div class="fp-monitor">
                    <div class="fp-monitor__screen fp-card__video-wrap">
                        <video class="fp-card__video" poster="assets/images/project-podcast-poster.jpg" playsinline preload="metadata">
                            <source src="assets/videos/project-podcast.mp4" type="video/mp4">
                        </video>
                    </div>
                    <span class="fp-monitor__tally"></span>
                    <button type="button" class="fp-monitor__play" aria-label="Play Podcast Production video">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7Z" />
                        </svg>
                    </button>
                </div>
                <p class="fp-card__num">REEL.01</p>
                <h3 class="fp-card__title">Podcast production</h3>
                <p class="fp-card__meta">A weekly show recorded, edited, and shipped to every platform.</p>
            </div>

            <div class="fp-card">
                <div class="fp-monitor">
                    <div class="fp-monitor__screen fp-card__video-wrap">
                        <video class="fp-card__video" poster="assets/images/project-video-ads-poster.jpg" playsinline preload="metadata">
                            <source src="assets/videos/project-video-ads.mp4" type="video/mp4">
                        </video>
                    </div>
                    <span class="fp-monitor__tally"></span>
                    <button type="button" class="fp-monitor__play" aria-label="Play Video Ads video">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7Z" />
                        </svg>
                    </button>
                </div>
                <p class="fp-card__num">REEL.02</p>
                <h3 class="fp-card__title">Video ads</h3>
                <p class="fp-card__meta">Shot, cut, and graded for a launch campaign across three platforms.</p>
            </div>

            <div class="fp-card">
                <div class="fp-monitor">
                    <div class="fp-monitor__screen fp-card__video-wrap">
                        <video class="fp-card__video" poster="assets/images/project-animation-poster.jpg" playsinline preload="metadata">
                            <source src="assets/videos/project-animation.mp4" type="video/mp4">
                        </video>
                    </div>
                    <span class="fp-monitor__tally"></span>
                    <button type="button" class="fp-monitor__play" aria-label="Play Animation video">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7Z" />
                        </svg>
                    </button>
                </div>
                <p class="fp-card__num">REEL.03</p>
                <h3 class="fp-card__title">Animation</h3>
                <p class="fp-card__meta">2D and 3D motion graphics built to carry a product story.</p>
            </div>

            <div class="fp-card">
                <div class="fp-monitor">
                    <div class="fp-monitor__screen fp-card__video-wrap">
                        <video class="fp-card__video" poster="assets/images/project-voiceover-poster.jpg" playsinline preload="metadata">
                            <source src="assets/videos/project-voiceover.mp4" type="video/mp4">
                        </video>
                    </div>
                    <span class="fp-monitor__tally"></span>
                    <button type="button" class="fp-monitor__play" aria-label="Play Voice Over video">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7Z" />
                        </svg>
                    </button>
                </div>
                <p class="fp-card__num">REEL.04</p>
                <h3 class="fp-card__title">Voice-over</h3>
                <p class="fp-card__meta">Ads, explainers, and IVR lines voiced clean in a treated booth.</p>
            </div>

            <div class="fp-card">
                <div class="fp-monitor">
                    <div class="fp-monitor__screen fp-card__video-wrap">
                        <video class="fp-card__video" poster="assets/images/project-voice-recording-poster.jpg" playsinline preload="metadata">
                            <source src="assets/videos/project-voice-recording.mp4" type="video/mp4">
                        </video>
                    </div>
                    <span class="fp-monitor__tally"></span>
                    <button type="button" class="fp-monitor__play" aria-label="Play Voice Recording video">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M8 5v14l11-7Z" />
                        </svg>
                    </button>
                </div>
                <p class="fp-card__num">REEL.05</p>
                <h3 class="fp-card__title">Voice recording</h3>
                <p class="fp-card__meta">Studio narration and dubbing recorded for a training series.</p>
            </div>

        </div>

        <div class="fp-cta">
            <a href="#">
                View all projects
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M13 6l6 6-6 6" />
                </svg>
            </a>
        </div>

    </div>
</section>

<script>
    (function() {
        const monitors = document.querySelectorAll(".fp-monitor");

        monitors.forEach(function(monitor) {
            const screen = monitor.querySelector(".fp-monitor__screen");
            const video = monitor.querySelector(".fp-card__video");
            const button = monitor.querySelector(".fp-monitor__play");
            if (!screen || !video || !button) return;

            button.addEventListener("click", function() {
                monitors.forEach(function(otherMonitor) {
                    if (otherMonitor === monitor) return;
                    const otherVideo = otherMonitor.querySelector(".fp-card__video");
                    const otherScreen = otherMonitor.querySelector(".fp-monitor__screen");
                    if (otherVideo && !otherVideo.paused) {
                        otherVideo.pause();
                        otherScreen.classList.remove("is-playing");
                    }
                });

                video.setAttribute("controls", "");
                video.play();
                screen.classList.add("is-playing");
            });

            video.addEventListener("pause", function() {
                screen.classList.remove("is-playing");
            });

            video.addEventListener("play", function() {
                screen.classList.add("is-playing");
            });
        });
    })();
</script>