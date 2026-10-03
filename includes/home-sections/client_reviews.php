<!-- slider -->
<style>
    .kdts-section {
        --kdts-orange: #ff7a1a;
        --kdts-orange-dark: #f2660a;
        --kdts-ink: #1c2230;
        --kdts-sub: #6b7280;
        --kdts-duration: 40s;

        position: relative;
        overflow: hidden;
        padding: 20px 0;
        font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        background-color: #EAE9EF;
        background-position: center;
        background-size: 100% 100%;
    }

    .kdts-header {
        max-width: 720px;
        margin: 0 auto clamp(32px, 6vw, 56px);
        padding: 0 20px;
        text-align: center;
    }

    .kdts-logo-row { display: flex; justify-content: center; margin-bottom: 18px; }
    .kdts-logo-slot { height: 34px; width: auto; max-width: 180px; object-fit: contain; }

    .kdts-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #ffffff;
        border: 1px solid #f0e4da;
        color: var(--kdts-orange-dark);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.3px;
        padding: 8px 18px;
        border-radius: 999px;
        box-shadow: 0 6px 16px rgba(255, 122, 26, 0.12);
        margin-bottom: 18px;
    }

    .kdts-title {
        font-size: clamp(26px, 4.2vw, 42px);
        line-height: 1.2;
        font-weight: 800;
        color: var(--kdts-ink);
        margin: 0 0 14px;
    }

    .kdts-title-accent { color: var(--kdts-orange); }

    .kdts-subtitle {
        font-size: clamp(14px, 1.6vw, 16px);
        color: var(--kdts-sub);
        margin: 0;
        line-height: 1.6;
    }

    /* ---------------- TRACK / MARQUEE ---------------- */

    .kdts-viewport {
        position: relative;
        margin: auto;
        -webkit-mask-image: linear-gradient(to right, #000 5%, #000 95%);
        mask-image: linear-gradient(to right, #000 5%, #000 95%);
    }

    .kdts-track {
        display: flex;
        width: max-content;
        padding-top: 12px;
        animation: kdts-scroll var(--kdts-duration) linear infinite;
    }

    .kdts-track-group {
        display: flex;
        gap: 22px;
        padding: 10px 11px 30px;
    }

    @keyframes kdts-scroll {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }

    /* ---------------- CARD ---------------- */

    .kdts-card {
        position: relative;
        width: 250px;
        min-height: 180px;
        padding: 9px 25px 10px;
        border-radius: 24px;
        overflow: hidden;
        isolation: isolate;
        background: linear-gradient(145deg, rgba(255, 255, 255, .96), rgba(255, 248, 244, .78)), rgba(255, 255, 255, .88);
        border: 1px solid rgba(239, 86, 13, .13);
        backdrop-filter: blur(24px) saturate(180%);
        -webkit-backdrop-filter: blur(24px) saturate(180%);
        box-shadow: 0 14px 32px rgba(15, 23, 42, .055), 0 8px 22px rgba(239, 86, 13, .055), inset 0 1px 1px rgba(255, 255, 255, .98);
        transition: transform .75s cubic-bezier(.22, 1, .36, 1), box-shadow .75s cubic-bezier(.22, 1, .36, 1), border-color .75s ease, background .75s ease;
        animation: kdFloatCard 8s ease-in-out infinite;
        cursor: pointer;
    }

    .kdts-card > * { position: relative; z-index: 2; }

    .kdts-card::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 0;
        opacity: 0;
        background: radial-gradient(circle at 18% 15%, rgba(255, 255, 255, .38), transparent 35%), linear-gradient(135deg, #ffefe6 0%, #ff9b5a 48%, #ef560d 100%);
        transition: opacity .75s cubic-bezier(.22, 1, .36, 1);
    }

    .kdts-card::after {
        content: "";
        position: absolute;
        top: -100%;
        left: -150%;
        width: 46%;
        height: 300%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .62), transparent);
        transform: rotate(25deg);
        transition: 1.25s ease;
        z-index: 5;
        pointer-events: none;
    }

    .kdts-card:hover::after { left: 170%; }

    .kdts-card:hover {
        transform: translateY(-12px) scale(1.035) rotateX(3deg);
        border-color: rgba(255, 255, 255, .58);
        box-shadow: 0 28px 58px rgba(239, 86, 13, .23), inset 0 1px 1px rgba(255, 255, 255, .58);
    }

    .kdts-card:hover::before { opacity: 1; }

    .kdts-card-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 5px;
        position: relative;
    }

    .kdts-stars { color: rgb(255, 208, 0); font-size: 16px; letter-spacing: 2px; }

    .kdts-quote-icon {
        position: absolute;
    top: -47px;
    right: -5px;
    width: 20px;
    }

    .kdts-quote-icon img { width: 100%; display: block; }

    .kdts-text {
        font-size: 11.4px;
        line-height: 1.65;
        color: #384153;
        font-style: italic;
        margin: 0;
    }

    .kdts-footer {
        display: flex;
        align-items: center;
        gap: 12px;
        padding-top: 16px;
        padding-bottom: 8px;
    }

    /* Letter avatar (Google style) */
    .kdts-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .kdts-name { font-size: 14px; font-weight: 700; color: var(--kdts-ink); margin: 0; }
    .kdts-role { font-size: 12.5px; font-weight: 700; color: var(--kdts-orange-dark); margin: 2px 0 0; }

    .kdts-card:hover .kdts-text,
    .kdts-card:hover .kdts-name,
    .kdts-card:hover .kdts-role { color: #fff; }

    /* ---------------- DECOR ---------------- */

    .kdts-header, .kdts-viewport { position: relative; z-index: 1; }

    .kdts-decor-blob, .kdts-decor-ring, .kdts-decor-dots {
        position: absolute;
        z-index: 0;
        pointer-events: none;
    }

    .kdts-decor-blob {
        top: -120px;
        left: -100px;
        width: 320px;
        height: 320px;
        border-radius: 42% 58% 63% 37% / 55% 45% 55% 45%;
        background: radial-gradient(circle at 35% 30%, var(--kdts-orange) 0%, var(--kdts-orange-dark) 55%, transparent 75%);
        opacity: 0.16;
        filter: blur(28px);
        animation: kdts-blob-drift 14s ease-in-out infinite;
    }

    @keyframes kdts-blob-drift {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50%      { transform: translate(24px, 18px) scale(1.08); }
    }

    .kdts-decor-ring {
        bottom: -60px;
        right: 6%;
        width: 180px;
        height: 180px;
        border: 2px dashed var(--kdts-orange);
        border-radius: 50%;
        opacity: 0.22;
        animation: kdts-ring-spin 22s linear infinite;
    }

    @keyframes kdts-ring-spin {
        from { transform: rotate(0deg); }
        to   { transform: rotate(360deg); }
    }

    .kdts-decor-dots {
        top: 6%;
        left: 14.28%;
        transform: translateX(-50%);
        width: 260px;
        height: 180px;
        background-image: radial-gradient(circle, var(--kdts-orange-dark) 1.6px, transparent 1.6px);
        background-size: 22px 22px;
        opacity: 0.25;
        -webkit-mask-image: radial-gradient(ellipse at center, #000 0%, transparent 75%);
        mask-image: radial-gradient(ellipse at center, #000 0%, transparent 75%);
    }

    /* ---------------- RESPONSIVE ---------------- */

    @media (max-width: 1024px) {
        .kdts-card { width: clamp(220px, 40vw, 280px); }
        .kdts-section { --kdts-duration: 32s; }
    }

    @media (max-width: 640px) {
        .kdts-card { width: 76vw; padding: 22px 20px 18px; }
        .kdts-track-group { gap: 16px; padding: 8px 8px 26px; }
        .kdts-section { --kdts-duration: 26s; }
        .kdts-text { font-size: 14px; }
        .kdts-decor-blob { width: 200px; height: 200px; top: -80px; left: -70px; }
        .kdts-decor-ring { width: 120px; height: 120px; right: 2%; bottom: -40px; }
        .kdts-decor-dots { display: none; }
    }

    @media (prefers-reduced-motion: reduce) {
        .kdts-track, .kdts-decor-blob, .kdts-decor-ring { animation: none; }
    }
</style>

<section class="kdts-section">

    <div class="kdts-decor-blob"></div>
    <div class="kdts-decor-ring"></div>
    <div class="kdts-decor-dots"></div>

    <div class="kdts-header">
        <div class="kdts-logo-row"></div>
        <span class="kdts-badge">★★★★★ Client Reviews</span>
        <h2 class="kdts-title">What Our <span class="kdts-title-accent">Customers Say</span></h2>
        <p class="kdts-subtitle">Real Google reviews from real clients of King Digital.</p>
    </div>

    <div class="kdts-viewport">
        <div class="kdts-track" id="kdtsTrack">

            <!-- GROUP A: sirf yahin cards add/edit karo.
                 Group B (loop duplicate) neeche wali script khud bana deti hai. -->
            <div class="kdts-track-group" id="kdts-group-a">

                <!-- card 1 -->
                <div class="kdts-card" onclick="window.open('https://g.page/r/CRUzKSGo_BXAEAE/review', '_blank')">
                    <div class="kdts-footer">
                        <div class="kdts-avatar" style="background:#78909c">T</div>
                        <div>
                            <p class="kdts-name">Tia Arora</p>
                            <p class="kdts-role">Google Review</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="assets/images/img/google_icon_png.png" alt=""></span>
                    </div>
                    <p class="kdts-text">Their Google Ads management is outstanding. They optimised our campaigns and helped us generate quality leads while keeping the budget under control.</p>
                </div>

                <!-- card 2 -->
                <div class="kdts-card" onclick="window.open('https://g.page/r/CRUzKSGo_BXAEAE/review', '_blank')">
                    <div class="kdts-footer">
                        <div class="kdts-avatar" style="background:#6a5fc1">K</div>
                        <div>
                            <p class="kdts-name">Kirthana Nair</p>
                            <p class="kdts-role">Google Review</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="assets/images/img/google_icon_png.png" alt=""></span>
                    </div>
                    <p class="kdts-text">We partnered with KING DIGITAL for SEO, and within a few months we started seeing noticeable improvements in our website traffic. Great experience.</p>
                </div>

                <!-- card 3 -->
                <div class="kdts-card" onclick="window.open('https://g.page/r/CRUzKSGo_BXAEAE/review', '_blank')">
                    <div class="kdts-footer">
                        <div class="kdts-avatar" style="background:#4b7f52">T</div>
                        <div>
                            <p class="kdts-name">Tushar Sinha</p>
                            <p class="kdts-role">Google Review</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="assets/images/img/google_icon_png.png" alt=""></span>
                    </div>
                    <p class="kdts-text">Excellent service and a highly professional team. They delivered our website on time and exceeded our expectations.</p>
                </div>

                <!-- card 4 -->
                <div class="kdts-card" onclick="window.open('https://g.page/r/CRUzKSGo_BXAEAE/review', '_blank')">
                    <div class="kdts-footer">
                        <div class="kdts-avatar" style="background:#3d3a6b">J</div>
                        <div>
                            <p class="kdts-name">Jatin</p>
                            <p class="kdts-role">Google Review</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="assets/images/img/google_icon_png.png" alt=""></span>
                    </div>
                    <p class="kdts-text">Boht acha support mila King Digital se WhatsApp API service ke liye, thank you so much! 🙌</p>
                </div>

                <!-- card 5 -->
                <div class="kdts-card" onclick="window.open('https://g.page/r/CRUzKSGo_BXAEAE/review', '_blank')">
                    <div class="kdts-footer">
                        <div class="kdts-avatar" style="background:#8a6d5a">M</div>
                        <div>
                            <p class="kdts-name">Mr Mukke</p>
                            <p class="kdts-role">Google Review</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="assets/images/img/google_icon_png.png" alt=""></span>
                    </div>
                    <p class="kdts-text">I received excellent service for bulk SMS and WhatsApp SMS from King Digital. Great support from Kirti. Thank you so much!</p>
                </div>

                <!-- card 6 -->
                <div class="kdts-card" onclick="window.open('https://g.page/r/CRUzKSGo_BXAEAE/review', '_blank')">
                    <div class="kdts-footer">
                        <div class="kdts-avatar" style="background:#8d6e63">U</div>
                        <div>
                            <p class="kdts-name">Udika Singh</p>
                            <p class="kdts-role">Google Review</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="assets/images/img/google_icon_png.png" alt=""></span>
                    </div>
                    <p class="kdts-text">Very good services &amp; great support specially by Pooja Maam. Thanks King Digital, keep it up.</p>
                </div>

                <!-- card 7 -->
                <div class="kdts-card" onclick="window.open('https://g.page/r/CRUzKSGo_BXAEAE/review', '_blank')">
                    <div class="kdts-footer">
                        <div class="kdts-avatar" style="background:#0097a7">M</div>
                        <div>
                            <p class="kdts-name">Motivational Status</p>
                            <p class="kdts-role">Google Review</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="assets/images/img/google_icon_png.png" alt=""></span>
                    </div>
                    <p class="kdts-text">Good service and your team are fully prepared, greatest knowledge Pooja mam 🌹💗💗</p>
                </div>

                <!-- card 8 -->
                <div class="kdts-card" onclick="window.open('https://g.page/r/CRUzKSGo_BXAEAE/review', '_blank')">
                    <div class="kdts-footer">
                        <div class="kdts-avatar" style="background:#ef6c00">K</div>
                        <div>
                            <p class="kdts-name">Kajal Rani</p>
                            <p class="kdts-role">Google Review</p>
                        </div>
                    </div>
                    <div class="kdts-card-top">
                        <span class="kdts-stars">★★★★★</span>
                        <span class="kdts-quote-icon"><img src="assets/images/img/google_icon_png.png" alt=""></span>
                    </div>
                    <p class="kdts-text">I recieved owsm service and well management thank you.</p>
                </div>

            </div>
            <!-- GROUP B yahan JS se auto-generate hota hai -->
        </div>
    </div>

</section>

<script>
(function () {
    var track = document.getElementById('kdtsTrack');
    var groupA = document.getElementById('kdts-group-a');
    if (!track || !groupA) return;

    // Seamless loop ke liye Group A ki exact copy
    var groupB = groupA.cloneNode(true);
    groupB.id = 'kdts-group-b';
    groupB.setAttribute('aria-hidden', 'true');
    track.appendChild(groupB);
})();
</script>