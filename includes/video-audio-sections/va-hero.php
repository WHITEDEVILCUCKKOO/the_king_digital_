<style>
    :root {
        --ink: #1B1613;
        --ink-soft: #241E19;
        --ink-line: rgba(243, 236, 223, 0.13);
        --paper: #F3ECDF;
        --paper-dim: #B9AF9E;
        --copper: #D3701F;
        --copper-dim: rgba(211, 112, 31, 0.18);
        --meter-green: #7FB86B;
        --meter-amber: #E8A23C;
        --meter-red: #D8503F;
        --radius-sm: 3px;
        --radius-md: 4px;
    }

    /* =========================================================
       SHELL
    ========================================================= */

    .st-hero {
        position: relative;
        background: var(--ink);
        color: var(--paper);
        overflow: hidden;
    }

    .st-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(243, 236, 223, 0.035) 1px, transparent 1px);
        background-size: 4px 4px;
        pointer-events: none;
    }

    .st-hero_grid {
        position: relative;
        max-width: 1280px;
        margin: 0 auto;
        padding: 56px 48px 64px;
        display: grid;
        grid-template-columns: 1fr 340px;
        gap: 64px;
        align-items: center;
        min-height: 560px;
    }

    /* =========================================================
       TOP STRIP — session readout
    ========================================================= */

    .st-session {
        position: absolute;
        top: 32px;
        left: 48px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: 'IBM Plex Mono', monospace;
        font-size: 12px;
        letter-spacing: 0.02em;
        color: var(--paper-dim);
    }

    .st-session_dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--meter-red);
        animation: stRecPulse 1.6s ease-in-out infinite;
        flex: none;
    }

    @keyframes stRecPulse {

        0%,
        100% {
            opacity: 1;
            box-shadow: 0 0 0 0 rgba(216, 80, 63, 0.5);
        }

        50% {
            opacity: 0.45;
            box-shadow: 0 0 0 5px rgba(216, 80, 63, 0);
        }
    }

    .st-session_label {
        color: var(--meter-red);
        font-weight: 600;
    }

    .st-session_time {
        color: var(--paper);
        font-weight: 600;
    }

    /* =========================================================
       LEFT — copy column
    ========================================================= */

    .st-copy {
        padding-top: 16px;
        max-width: 700px;
    }

    .st-copy_inner {
        transition: opacity 0.28s ease, transform 0.28s ease;
    }

    .st-copy_inner.is-leaving {
        opacity: 0;
        transform: translateY(6px);
    }

    .st-copy_tag {
        font-size: 12px;
        color: var(--copper);
        margin: 0 0 16px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .st-copy_tag::before {
        content: "";
        width: 18px;
        height: 1px;
        background: var(--copper);
        display: inline-block;
    }

    .st-copy h1 {
        font-weight: 800;
        font-size: clamp(38px, 4.6vw, 54px);
        line-height: 1.02;
        letter-spacing: -0.01em;
        margin: 0 0 22px;
        color: var(--paper);
    }

    .st-copy p {
        font-size: 17px;
        line-height: 1.65;
        color: var(--paper-dim);
        max-width: 46ch;
        margin: 0 0 34px;
    }

    .st-cta {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    .st-cta a {
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        padding: 15px 30px;
        border-radius: var(--radius-md);
        transition: background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
    }

    .st-cta a.primary {
        background: var(--copper);
        color: #1B1613;
    }

    .st-cta a.primary:hover {
        background: #E68A3E;
    }

    .st-cta a.secondary {
        border: 1px solid var(--ink-line);
        color: var(--paper);
    }

    .st-cta a.secondary:hover {
        border-color: var(--paper-dim);
    }

    /* =========================================================
       RIGHT — console panel
    ========================================================= */

    .st-console {
        border: 1px solid var(--ink-line);
        background: var(--ink-soft);
        padding: 6px;
    }

    .st-channel {
        display: block;
        width: 100%;
        text-align: left;
        background: transparent;
        border: none;
        border-bottom: 1px solid var(--ink-line);
        padding: 18px 16px;
        cursor: pointer;
        font-family: inherit;
        color: inherit;
        position: relative;
        transition: background 0.2s ease;
    }

    .st-channel:last-child {
        border-bottom: none;
    }

    .st-channel:hover {
        background: rgba(243, 236, 223, 0.03);
    }

    .st-channel.is-active {
        background: var(--copper-dim);
    }

    .st-channel.is-active::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: var(--copper);
    }

    .st-channel_head {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .st-channel_num {
        font-family: 'IBM Plex Mono', monospace;
        font-size: 11px;
        color: var(--paper-dim);
        letter-spacing: 0.04em;
    }

    .st-channel.is-active .st-channel_num {
        color: var(--copper);
    }

    .st-channel_name {
        font-family: 'Inter', sans-serif;
        font-size: 14.5px;
        font-weight: 600;
        color: var(--paper);
    }

    .st-meter {
        display: flex;
        gap: 2px;
        height: 14px;
        align-items: flex-end;
    }

    .st-meter_seg {
        flex: 1;
        height: 100%;
        border-radius: 1px;
        background: rgba(243, 236, 223, 0.08);
        transition: background 0.25s ease, opacity 0.25s ease;
    }

    .st-meter_seg.lit-green {
        background: var(--meter-green);
    }

    .st-meter_seg.lit-amber {
        background: var(--meter-amber);
    }

    .st-meter_seg.lit-red {
        background: var(--meter-red);
    }

    .st-meter_seg.dim {
        opacity: 0.35;
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 900px) {
        .st-hero_grid {
            grid-template-columns: 1fr;
            padding: 96px 24px 40px;
            gap: 36px;
        }

        .st-session {
            left: 24px;
        }

        .st-copy {
            padding-top: 0;
            max-width: 100%;
        }

        .st-copy h1 {
            max-width: 100%;
        }

        .st-console {
            order: 2;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .st-session_dot {
            animation: none;
        }

        .st-copy_inner {
            transition: none;
        }
    }
</style>


<section class="st-hero">
    <div class="st-session">
        <span class="st-session_dot"></span>
        <span class="st-session_label">REC</span>
        <span class="st-session_time" id="stSessionTime">00:00:00</span>
    </div>

    <div class="st-hero_grid">
        <div class="st-copy">
            <div class="st-copy_inner" id="stCopyInner">
                <p class="st-copy_tag">Audio &amp; video production studio</p>
                <h1 id="stHeadline">Record the conversation that gets people talking.</h1>
                <p id="stParagraph">Bring your podcast to life with a proper studio behind it — treated room, broadcast mics, and an engineer who knows how to make two people talking sound like something worth hearing.</p>
                <div class="st-cta">
                    <a href="contact.php" class="primary">Book the studio</a>
                    <a href="#va-service" class="secondary">See all services</a>
                </div>
            </div>
        </div>

        <div class="st-console" id="stConsole">
            <!-- channel strips injected by JS -->
        </div>
    </div>
</section>

<script>
    (function() {

        const channels = [{
                num: "CH.01",
                name: "Podcast",
                headline: "Record the conversation that gets people talking.",
                paragraph: "Bring your podcast to life with a proper studio behind it — treated room, broadcast mics, and an engineer who knows how to make two people talking sound like something worth hearing.",
                level: 14
            },
            {
                num: "CH.02",
                name: "Video",
                headline: "Shoot and cut video people actually finish watching.",
                paragraph: "From promos to social campaigns, we bring the camera, lighting, and edit team so the final cut looks like it cost more than it did.",
                level: 11
            },
            {
                num: "CH.03",
                name: "Voice-over",
                headline: "Give your brand a voice worth listening to.",
                paragraph: "Voice-over, dubbing, and multilingual audio recorded clean in a treated booth, so the words carry the brand instead of fighting the room.",
                level: 9
            }
        ];

        const SEGMENTS = 16;
        const consoleEl = document.getElementById("stConsole");
        const copyInner = document.getElementById("stCopyInner");
        const headlineEl = document.getElementById("stHeadline");
        const paragraphEl = document.getElementById("stParagraph");

        let active = 0;
        let meterTimer = null;

        function segmentClass(i) {
            if (i < 10) return "lit-green";
            if (i < 14) return "lit-amber";
            return "lit-red";
        }

        function buildMeter(level, isActive) {
            let html = "";
            for (let i = 0; i < SEGMENTS; i++) {
                const lit = i < level;
                const cls = lit ? segmentClass(i) : "";
                const dim = lit && !isActive ? " dim" : "";
                html += '<span class="st-meter_seg ' + cls + dim + '"></span>';
            }
            return html;
        }

        function render() {
            consoleEl.innerHTML = channels.map(function(ch, i) {
                const isActive = i === active;
                return (
                    '<button type="button" class="st-channel' + (isActive ? " is-active" : "") + '" data-index="' + i + '">' +
                    '<span class="st-channel_head">' +
                    '<span class="st-channel_num">' + ch.num + '</span>' +
                    '<span class="st-channel_name">' + ch.name + '</span>' +
                    '</span>' +
                    '<span class="st-meter" data-meter="' + i + '">' + buildMeter(ch.level, isActive) + '</span>' +
                    '</button>'
                );
            }).join("");

            Array.prototype.forEach.call(consoleEl.querySelectorAll(".st-channel"), function(btn) {
                btn.addEventListener("click", function() {
                    switchTo(parseInt(btn.getAttribute("data-index"), 10));
                });
            });
        }

        function switchTo(index) {
            if (index === active) return;
            active = index;

            copyInner.classList.add("is-leaving");
            setTimeout(function() {
                headlineEl.textContent = channels[active].headline;
                paragraphEl.textContent = channels[active].paragraph;
                copyInner.classList.remove("is-leaving");
            }, 180);

            render();
        }

        function jitterActiveMeter() {
            const meterEl = consoleEl.querySelector('[data-meter="' + active + '"]');
            if (!meterEl) return;
            const base = channels[active].level;
            const level = Math.max(6, Math.min(SEGMENTS - 1, base + Math.round((Math.random() - 0.5) * 4)));
            meterEl.innerHTML = buildMeter(level, true);
        }

        const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
        if (!prefersReducedMotion) {
            meterTimer = setInterval(jitterActiveMeter, 900);
        }

        // session timecode
        const timeEl = document.getElementById("stSessionTime");
        let seconds = 0;

        function pad(n) {
            return String(n).padStart(2, "0");
        }

        function tick() {
            seconds++;
            const h = Math.floor(seconds / 3600);
            const m = Math.floor((seconds % 3600) / 60);
            const s = seconds % 60;
            timeEl.textContent = pad(h) + ":" + pad(m) + ":" + pad(s);
        }
        if (!prefersReducedMotion) {
            setInterval(tick, 1000);
        }

        render();
    })();
</script>