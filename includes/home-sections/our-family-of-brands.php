<style>
    :root {
        --blue: #1B3D7B;
        --blue-dk: #122954;
        --blue-md: #2451A0;
        --blue-lt: #E8EFFE;
        --blue-xl: #F0F4FF;
        --gold: #F97316;
        --gold-dk: #C45E0A;
        --gold-lt: #FFF4EC;
        --gold-mid: #FDBA74;
        --green: #059669;
        --white: #FFFFFF;
        --bg: #F6F8FD;
        --bg2: #EEF3FF;
        --txt: #0F172A;
        --txt2: #475569;
        --txt3: #94A3B8;
        --bdr: #E2E8F0;
        --r: 10px;
        --rlg: 16px;
        --sh: 0 2px 8px rgba(0, 0, 0, .06);
        --shlg: 0 8px 32px rgba(27, 61, 123, .12);
        --trans: all .22s ease;
    }

    .container { max-width: 1200px; margin: 0 auto; padding: 0 24px }
    .section { padding: 88px 0 }
    .flex { display: flex; align-items: center }
    .gap-8 { gap: 8px } .gap-12 { gap: 12px } .gap-16 { gap: 16px } .gap-24 { gap: 24px }

    .tag, .tagq {
        display: inline-flex; align-items: center; gap: 7px;
        font-family: 'Poppins', sans-serif; font-size: 11px; font-weight: 700;
        letter-spacing: 1.2px; text-transform: uppercase;
        background: var(--blue-lt); color: var(--blue);
        padding: 5px 14px; border-radius: 20px; margin-bottom: 16px;
    }

    .sh, .shas {
        font-size: clamp(26px, 3.8vw, 40px);
        font-weight: 800;
        margin-bottom: 14px;
        letter-spacing: -.5px;
    }
    .shas { font-family: Poppins-bold; }

    .btn {
        display: inline-flex; align-items: center; gap: 9px;
        font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600;
        padding: 11px 24px; border-radius: 8px; border: 2px solid transparent;
        cursor: pointer; transition: var(--trans); white-space: nowrap;
    }
    .btn-outline { background: transparent; color: var(--blue); border-color: var(--blue) }
    .btn-outline:hover { background: var(--blue); color: #fff; transform: translateY(-2px) }

    /* ════ PORTFOLIO ════ */
    .portfolio { background: var(--bg); position: relative; overflow: hidden; }
    .portfolio .container { position: relative; z-index: 1; }

    .port-tabs { display: flex; gap: 8px; margin-top: 16px; margin-bottom: 36px; flex-wrap: wrap }

    .port-tab {
        font-family: 'Poppins', sans-serif; font-size: 13px; font-weight: 600;
        padding: 8px 18px; border-radius: 7px; border: 1.5px solid var(--bdr);
        color: var(--txt2); cursor: pointer; transition: var(--trans); background: #fff;
    }
    .port-tab:hover, .port-tab.active { background: var(--blue); color: #fff; border-color: var(--blue) }

    .port-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 18px }

    .port-card {
        background: #fff; border: 1.5px solid var(--bdr); border-radius: var(--rlg);
        overflow: hidden; cursor: pointer; transition: var(--trans);
    }
    .port-card:hover { box-shadow: var(--shlg); transform: translateY(-4px); border-color: rgba(27, 61, 123, .2) }

    .port-thumb { position: relative; height: 195px; overflow: hidden; background: #E8F5FF; padding: 0; }
    .img_box { width: 100%; height: 100%; overflow: hidden; }
    .pic { width: 100%; display: block; transform: translateY(0); transition: transform 8s linear; }
    .img_box:hover .pic { transform: translateY(calc(-100% + 260px)); }

    .port-badge {
        position: absolute; top: 12px; left: 12px; z-index: 2;
        background: #2563EB; color: #fff; padding: 6px 12px; border-radius: 20px;
        font-size: 12px; font-weight: 600;
    }

    .img_box_static { width: 100%; height: 195px; overflow: hidden; background: #E8F5FF; }
    .pic_static { width: 100%; height: 100%; object-fit: cover; display: block; transform: scale(1); transition: transform .6s ease; }
    .img_box_static:hover .pic_static { transform: scale(1.08); }

    .video_box { position: relative; width: 100%; height: 260px; overflow: hidden; }
    .video_thumb, .card_video { position: absolute; inset: 0; width: 100%; height: 100%; }
    .video_thumb { object-fit: cover; object-position: center top; transition: opacity .3s; z-index: 1; }
    .card_video { object-fit: cover; }

    .port-info { padding: 18px }
    .port-info h4 { font-size: 15px; font-weight: 700; margin-bottom: 4px }
    .port-info p { font-size: 12px; color: var(--txt3) }
    .port-cta { text-align: center; margin-top: 36px }

    .dot-99 {
        width: 6px; height: 6px; border-radius: 50%; background: currentColor;
        flex-shrink: 0; position: relative; isolation: isolate;
    }
    .dot-99::after, .dot-99::before {
        content: ''; position: absolute; top: 50%; left: 50%; width: 100%; height: 100%;
        background-color: rgb(27 61 123 / 19%); border-radius: 50%; z-index: -1;
        transform: translate(-50%, -50%) scale(1); animation: wavePulse 2s infinite ease-out;
    }
    .dot-99::after { animation-delay: 1s; }
    @keyframes wavePulse {
        0% { transform: translate(-50%, -50%) scale(1); opacity: 1; }
        100% { transform: translate(-50%, -50%) scale(4.5); opacity: 0; }
    }

    .icp-cursor-glow {
        position: absolute; left: 0; top: 0; transform: translate(-50%, -50%);
        border-radius: 50%;
        background: radial-gradient(circle, rgba(34, 197, 94, 0.2) 0%, rgba(45, 190, 150, .22) 30%, rgba(34, 197, 94, .08) 55%, rgba(34, 197, 94, 0) 72%);
        opacity: 0; pointer-events: none; transition: opacity .35s ease; z-index: 0;
    }

    .decor-tl {
        position: absolute; top: -220px; left: -220px; width: 440px; height: 440px;
        border: 3px dashed var(--blue); border-radius: 50%; opacity: .28;
        animation: decor-spin 22s linear infinite; pointer-events: none; z-index: 0;
    }
    .decor-tl::before {
        content: ''; position: absolute; inset: 46px; border: 3px dashed var(--gold);
        border-radius: 50%; opacity: .6;
    }
    @keyframes decor-spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }

    .decor-tr {
        position: absolute; top: -40px; right: -40px; width: 420px; height: 380px;
        background-image: radial-gradient(circle, var(--blue) 2px, transparent 2px);
        background-size: 30px 30px;
        -webkit-mask-image: radial-gradient(ellipse at top right, black 0%, black 30%, transparent 75%);
        mask-image: radial-gradient(ellipse at top right, black 0%, black 30%, transparent 75%);
        opacity: .4; pointer-events: none; z-index: 0; animation: grid-shift 11s ease-in-out infinite;
    }
    @keyframes grid-shift { 0%,100% { background-position: 0 0; } 50% { background-position: -12px 12px; } }

    .decor-bl { position: absolute; bottom: -40px; left: -20px; width: 380px; height: 420px; pointer-events: none; z-index: 0; }
    .decor-dot { position: absolute; border-radius: 50%; background: var(--gold); }
    .decor-dot.d1 { width: 26px; height: 26px; bottom: 60px; left: 40px; opacity: .38; animation: dot-bob-1 6s ease-in-out infinite; }
    .decor-dot.d2 { width: 16px; height: 16px; bottom: 170px; left: 130px; opacity: .3; background: var(--blue-md); animation: dot-bob-2 7s ease-in-out infinite; }
    .decor-dot.d3 { width: 34px; height: 34px; bottom: 90px; left: 220px; opacity: .24; animation: dot-bob-3 8s ease-in-out infinite; }
    .decor-dot.d4 { width: 18px; height: 18px; bottom: 260px; left: 70px; opacity: .28; background: var(--blue-md); animation: dot-bob-1 6.5s ease-in-out infinite .5s; }
    .decor-dot.d5 { width: 12px; height: 12px; bottom: 320px; left: 180px; opacity: .32; animation: dot-bob-2 5.5s ease-in-out infinite .3s; }
    @keyframes dot-bob-1 { 0%,100% { transform: translate(0, 0); } 50% { transform: translate(18px, -26px); } }
    @keyframes dot-bob-2 { 0%,100% { transform: translate(0, 0); } 50% { transform: translate(-20px, 18px); } }
    @keyframes dot-bob-3 { 0%,100% { transform: translate(0, 0); } 50% { transform: translate(16px, 22px); } }

    .decor-br {
        position: absolute; bottom: -280px; right: -240px; width: 640px; height: 640px; border-radius: 50%;
        background: radial-gradient(circle, rgba(249, 115, 22, 0.18) 0%, rgba(27, 61, 123, 0.12) 45%, rgba(255, 255, 255, 0) 72%);
        filter: blur(10px); pointer-events: none; z-index: 0; animation: glow-pulse 10s ease-in-out infinite;
    }
    @keyframes glow-pulse { 0%,100% { transform: scale(1); opacity: 1; } 50% { transform: scale(1.08); opacity: .85; } }

    @media(max-width:960px) { .hero-grid { grid-template-columns: 1fr } .hero-card { display: none } }
    @media(max-width:640px) { .section { padding: 60px 0 } }
</style>

<!-- ════ PORTFOLIO ════ -->
<section class="portfolio section" id="portfolio">

    <div class="decor-tl"></div>
    <div class="decor-tr"></div>
    <div class="decor-bl">
        <div class="decor-dot d1"></div>
        <div class="decor-dot d2"></div>
        <div class="decor-dot d3"></div>
        <div class="decor-dot d4"></div>
        <div class="decor-dot d5"></div>
    </div>
    <div class="decor-br"></div>

    <div class="container">
        <div class="revealqw">
            <div class="tagq"><span class="dot-99"></span>Our Portfolio</div>
            <h2 class="shas">Work that delivers <span class="">real results</span></h2>
        </div>

        <div class="port-tabs">
            <button class="port-tab active" onclick="filterPort(this,'all')">All Work</button>
            <button class="port-tab" onclick="filterPort(this,'website')">Websites</button>
            <button class="port-tab" onclick="filterPort(this,'sms')">SMS Campaigns</button>
            <button class="port-tab" onclick="filterPort(this,'video')">Video Production</button>
            <button class="port-tab" onclick="filterPort(this,'seo')">SEO Projects</button>
        </div>

        <div class="port-grid">

            <!-- ============ NORMAL CARDS (hamesha "All Work" par bhi dikhte hain) ============ -->

            <div class="port-card reveal tlasma-card" data-type="website">
                <div class="port-thumb" style="background:#E8F5FF;font-size:48px">
                    <span class="port-badge" style="background:#2563EB;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/lakshmibaicollege.in_.png" alt="Lakshmibai College" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Lakshmibai College</h4>
                    <p>University website — Delhi University</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card" data-type="website">
                <div class="port-thumb" style="background:#ECFDF5;font-size:48px">
                    <span class="port-badge" style="background:#059669;color:#fff">E-Commerce</span>
                    <div class="img_box_static">
                        <img src="assets/images/img/Kumar Electric Product 2.png" alt="Kumar Electric" class="pic_static">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Kumar Electric</h4>
                    <p>Product catalogue & B2B inquiry portal</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card" data-type="sms">
                <div class="port-thumb" style="background:#FFF0E6;font-size:48px">
                    <span class="port-badge" style="background:#F97316;color:#fff">SMS Campaign</span>
                    <div class="img_box_static">
                        <img src="assets/images/img/bulk_sms_banner.jpg" alt="State Assembly Campaign" class="pic_static">
                    </div>
                </div>
                <div class="port-info">
                    <h4>State Assembly Campaign</h4>
                    <p>5 million+ targeted messages delivered</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card" data-type="video">
                <div class="port-thumb" style="background:#FEF3C7;font-size:48px">
                    <span class="port-badge" style="background:#D97706;color:#fff">Video</span>
                    <div class="video_box">
                        <img src="assets/images/img/e5cnis_sdh.png" class="video_thumb" alt="">
                        <video class="card_video" muted playsinline preload="metadata">
                            <source src="assets/images/img/vidssave.com Static King _ Bulk SMS Company India 1080P.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="port-info">
                    <h4>FMCG Brand Film</h4>
                    <p>Corporate promotional & product videos</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card" data-type="seo">
                <div class="port-thumb" style="background:#EFF6FF;font-size:48px">
                    <span class="port-badge" style="background:#2563EB;color:#fff">SEO</span>
                    <div class="img_box_static">
                        <img src="assets/images/img/seo_banner.jpg" alt="Healthcare Brand" class="pic_static">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Healthcare Brand</h4>
                    <p>Page 1 Google ranking in 90 days</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card" data-type="website">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/sera_casdime521.png" alt="SERA CASDIM" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>SERA CASDIM</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card" data-type="video">
                <div class="port-thumb" style="background:#FEF3C7;font-size:48px">
                    <span class="port-badge" style="background:#D97706;color:#fff">Video</span>
                    <div class="video_box">
                        <img src="assets/images/img/360° Digital Marketing Company and Institute _ King Digital themb.png" class="video_thumb" alt="">
                        <video class="card_video" muted playsinline preload="metadata">
                            <source src="assets/images/img/360° Digital Marketing Company and Institute _ King Digital.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="port-info">
                    <h4>Brand Film</h4>
                    <p>Corporate promotional & product videos</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card" data-type="website">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/www.staticking.com_.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>


            <!-- ============ EXTRA CARDS ============
                 Yahan "extra-card" class + style="display:none" lagaya hai.
                 Ye "All Work" par kabhi nahi dikhenge.
                 Jis category ka data-type hoga, sirf uss tab pe click karne par dikhenge.
                 Website ke alawa SMS / Video / SEO extra cards banane ho to
                 bas data-type badal do aur extra-card class + display:none rakho — kaam khud ho jayega.
            -->

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/extra_1.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/extra_2.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/extra_3.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/extra_4.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/extra_5.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/extra_6.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/extra_7.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/extra_8.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/extra_9.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/extra_10.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <div class="port-card reveal tlasma-card extra-card" data-type="website" style="display:none">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                    <div class="img_box">
                        <img src="assets/images/website_img/11.png" alt="Static King" class="pic">
                    </div>
                </div>
                <div class="port-info">
                    <h4>Static King</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>

            <!--
                Future mein SMS / Video / SEO ke extra cards yahan isi tarah add karo:
                <div class="port-card reveal tlasma-card extra-card" data-type="sms" style="display:none"> ... </div>
                <div class="port-card reveal tlasma-card extra-card" data-type="video" style="display:none"> ... </div>
                <div class="port-card reveal tlasma-card extra-card" data-type="seo" style="display:none"> ... </div>
                JS automatically handle karega, kuch aur change nahi karna padega.
            -->

        </div>

        <div class="port-cta reveal">
            <a href="/portfolio.php" class="btn btn-outline"><i class="fas fa-eye"></i> View Full Portfolio</a>
        </div>
    </div>
</section>

<script>
    /* ─ Portfolio filter (generic — sab category ke extra cards ke liye kaam karega) ─ */
    function filterPort(btn, type) {
        document.querySelectorAll('.port-tab').forEach(t => t.classList.remove('active'));
        btn.classList.add('active');

        document.querySelectorAll('.port-card').forEach(card => {
            var isExtra = card.classList.contains('extra-card');
            var matchesType = (card.dataset.type === type);
            var shouldShow;

            if (type === 'all') {
                // "All Work" par extra cards kabhi nahi dikhte, chahe wo kisi bhi category ke ho
                shouldShow = !isExtra;
                
            } else {
                // kisi specific tab par — extra ho ya normal, agar type match karta hai to dikhega
                shouldShow = matchesType;
            }

            if (shouldShow) {
                card.style.display = 'block';
                card.style.animation = 'none';
                setTimeout(() => card.style.animation = '', 10);
            } else {
                card.style.display = 'none';
            }
        });
    }

    /* ─ Card tilt + cursor glow effect ─ */
    (function() {
        "use strict";
        var icpCards = document.querySelectorAll('.tlasma-card');
        var icpGlowRadius = 230;
        var icpMaxTilt = 12;

        icpCards.forEach(function(card) {
            var icpGlow = document.createElement('div');
            icpGlow.className = 'icp-cursor-glow';
            icpGlow.style.width = (icpGlowRadius * 0.5) + 'px';
            icpGlow.style.height = (icpGlowRadius * 0.5) + 'px';
            card.appendChild(icpGlow);

            card.addEventListener('mousemove', function(e) {
                var rect = card.getBoundingClientRect();
                var x = e.clientX - rect.left;
                var y = e.clientY - rect.top;

                var px = (x / rect.width) - 0.5;
                var py = (y / rect.height) - 0.5;
                var rotateY = px * icpMaxTilt * 2;
                var rotateX = py * -icpMaxTilt * 2;
                card.style.transform =
                    'perspective(800px) rotateX(' + rotateX.toFixed(2) + 'deg) rotateY(' + rotateY.toFixed(2) + 'deg) translateZ(-6px) translateY(-4px)';

                icpGlow.style.left = x + 'px';
                icpGlow.style.top = y + 'px';
                icpGlow.style.opacity = '1';
            });

            card.addEventListener('mouseleave', function() {
                card.style.transform = '';
                icpGlow.style.opacity = '0';
            });
        });
    })();

    /* ─ Video hover play/pause ─ */
    document.querySelectorAll(".video_box").forEach(box => {
        const video = box.querySelector(".card_video");
        const thumb = box.querySelector(".video_thumb");

        box.addEventListener("mouseenter", () => {
            thumb.style.opacity = "0";
            video.play();
        });

        box.addEventListener("mouseleave", () => {
            video.pause();
            video.currentTime = 0;
            thumb.style.opacity = "1";
        });
    });
</script>