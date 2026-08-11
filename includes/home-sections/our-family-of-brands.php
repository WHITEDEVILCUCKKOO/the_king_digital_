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

    /* Utilities */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px
    }

    .section {
        padding: 88px 0
    }

    .section-sm {
        padding: 56px 0
    }

    .flex {
        display: flex;
        align-items: center
    }

    .gap-8 {
        gap: 8px
    }

    .gap-12 {
        gap: 12px
    }

    .gap-16 {
        gap: 16px
    }

    .gap-24 {
        gap: 24px
    }

    .tag {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        font-family: 'Poppins', sans-serif;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        background: var(--blue-lt);
        color: var(--blue);
        padding: 5px 14px;
        border-radius: 20px;
        margin-bottom: 16px
    }

    .tag.orange {
        background: var(--gold-lt);
        color: var(--gold)
    }

    .tag .dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: currentColor;
        flex-shrink: 0
    }

    .sh {
        font-size: clamp(26px, 3.8vw, 40px);
        font-weight: 800;
        margin-bottom: 14px;
        letter-spacing: -.5px
    }

    .sub {
        font-size: 16px;
        color: var(--txt2);
        line-height: 1.85;
        max-width: 560px
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 600;
        padding: 11px 24px;
        border-radius: 8px;
        border: 2px solid transparent;
        cursor: pointer;
        transition: var(--trans);
        white-space: nowrap
    }

    .btn-primary {
        background: var(--gold);
        color: #fff;
        border-color: var(--gold)
    }

    .btn-primary:hover {
        background: var(--gold-dk);
        border-color: var(--gold-dk);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(249, 115, 22, .35)
    }

    .btn-blue {
        background: var(--blue);
        color: #fff;
        border-color: var(--blue)
    }

    .btn-blue:hover {
        background: var(--blue-dk);
        border-color: var(--blue-dk);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(27, 61, 123, .3)
    }

    .btn-outline {
        background: transparent;
        color: var(--blue);
        border-color: var(--blue)
    }

    .btn-outline:hover {
        background: var(--blue);
        color: #fff;
        transform: translateY(-2px)
    }

    .btn-white {
        background: #fff;
        color: var(--blue);
        border-color: #fff
    }

    .btn-white:hover {
        background: var(--blue-lt);
        transform: translateY(-2px)
    }

    .btn-sm {
        padding: 8px 18px;
        font-size: 13px
    }



    /* ════ PORTFOLIO ════ */
    .portfolio {
        background: var(--bg)
    }

    .port-tabs {
        display: flex;
        gap: 8px;
        margin-top: 16px;
        margin-bottom: 36px;
        flex-wrap: wrap
    }

    .port-tab {
        font-family: 'Poppins', sans-serif;
        font-size: 13px;
        font-weight: 600;
        padding: 8px 18px;
        border-radius: 7px;
        border: 1.5px solid var(--bdr);
        color: var(--txt2);
        cursor: pointer;
        transition: var(--trans);
        background: #fff
    }

    .port-tab:hover,
    .port-tab.active {
        background: var(--blue);
        color: #fff;
        border-color: var(--blue)
    }

    .port-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 18px
    }

    .port-card {
        background: #fff;
        border: 1.5px solid var(--bdr);
        border-radius: var(--rlg);
        overflow: hidden;
        cursor: pointer;
        transition: var(--trans)
    }

    .port-card:hover {
        box-shadow: var(--shlg);
        transform: translateY(-4px);
        border-color: rgba(27, 61, 123, .2)
    }

    .port-thumb {
        height: 168px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 44px;
        position: relative
    }

    .port-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        font-size: 10px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        padding: 4px 10px;
        border-radius: 20px;
        letter-spacing: .5px
    }

    .port-info {
        padding: 18px
    }

    .port-info h4 {
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 4px
    }

    .port-info p {
        font-size: 12px;
        color: var(--txt3)
    }

    .port-cta {
        text-align: center;
        margin-top: 36px
    }



    /* ════ RESPONSIVE ════ */
    @media(max-width:960px) {
        .hero-grid {
            grid-template-columns: 1fr
        }

        .hero-card {
            display: none
        }

        .why-wrap {
            grid-template-columns: 1fr
        }

        .faq-wrap {
            grid-template-columns: 1fr
        }

        .faq-cta-box {
            position: static
        }

        .contact-wrap {
            grid-template-columns: 1fr
        }

        .footer-grid {
            grid-template-columns: 1fr 1fr
        }

        .wp-panel {
            position: static
        }

        .process-steps::before {
            display: none
        }
    }

    @media(max-width:640px) {

        .nav-links,
        .nav-right .btn-outline {
            display: none
        }

        .hamburger {
            display: flex
        }

        .topbar .tb-right {
            display: none
        }

        .section {
            padding: 60px 0
        }

        .form-row {
            grid-template-columns: 1fr
        }

        .footer-grid {
            grid-template-columns: 1fr
        }

        .hc-svcs {
            grid-template-columns: repeat(3, 1fr)
        }

        .rating-bar {
            flex-wrap: wrap
        }

        .rb-div {
            display: none
        }

        .recog-row {
            gap: 20px
        }
    }
</style>


<!-- ════ PORTFOLIO ════ -->
<section class="portfolio section" id="portfolio">
    <div class="container">
        <div class="reveal">
            <div class="tag"><span class="dot"></span>Our Portfolio</div>
            <h2 class="sh">Work that delivers real results</h2>
        </div>
        <div class="port-tabs">
            <button class="port-tab active" onclick="filterPort(this,'all')">All Work</button>
            <button class="port-tab" onclick="filterPort(this,'website')">Websites</button>
            <button class="port-tab" onclick="filterPort(this,'sms')">SMS Campaigns</button>
            <button class="port-tab" onclick="filterPort(this,'video')">Video Production</button>
            <button class="port-tab" onclick="filterPort(this,'seo')">SEO Projects</button>
        </div>
        <div class="port-grid">
            <div class="port-card reveal" data-type="website">
                <div class="port-thumb" style="background:#E8F5FF;font-size:48px">🏛️
                    <span class="port-badge" style="background:#2563EB;color:#fff">Website</span>
                </div>
                <div class="port-info">
                    <h4>Lakshmibai College</h4>
                    <p>University website — Delhi University</p>
                </div>
            </div>
            <div class="port-card reveal" data-type="website">
                <div class="port-thumb" style="background:#ECFDF5;font-size:48px">⚡
                    <span class="port-badge" style="background:#059669;color:#fff">E-Commerce</span>
                </div>
                <div class="port-info">
                    <h4>Kumar Electric</h4>
                    <p>Product catalogue & B2B inquiry portal</p>
                </div>
            </div>
            <div class="port-card reveal" data-type="sms">
                <div class="port-thumb" style="background:#FFF0E6;font-size:48px">📱
                    <span class="port-badge" style="background:#F97316;color:#fff">SMS Campaign</span>
                </div>
                <div class="port-info">
                    <h4>State Assembly Campaign</h4>
                    <p>5 million+ targeted messages delivered</p>
                </div>
            </div>
            <div class="port-card reveal" data-type="video">
                <div class="port-thumb" style="background:#FEF3C7;font-size:48px">🎬
                    <span class="port-badge" style="background:#D97706;color:#fff">Video</span>
                </div>
                <div class="port-info">
                    <h4>FMCG Brand Film</h4>
                    <p>Corporate promotional & product videos</p>
                </div>
            </div>
            <div class="port-card reveal" data-type="seo">
                <div class="port-thumb" style="background:#EFF6FF;font-size:48px">📈
                    <span class="port-badge" style="background:#2563EB;color:#fff">SEO</span>
                </div>
                <div class="port-info">
                    <h4>Healthcare Brand</h4>
                    <p>Page 1 Google ranking in 90 days</p>
                </div>
            </div>
            <div class="port-card reveal" data-type="website">
                <div class="port-thumb" style="background:#F5F3FF;font-size:48px">🏥
                    <span class="port-badge" style="background:#7C3AED;color:#fff">Website</span>
                </div>
                <div class="port-info">
                    <h4>SERA CASDIM</h4>
                    <p>Institutional web design & development</p>
                </div>
            </div>
        </div>
        <div class="port-cta reveal">
            <a href="/portfolio.php" class="btn btn-outline"><i class="fas fa-eye"></i> View Full Portfolio</a>
        </div>
    </div>
</section>

<script>

    /* ─ Portfolio filter ─ */
    function filterPort(btn, type) {
        document.querySelectorAll('.port-tab').forEach(t => t.classList.remove('active'));
        btn.classList.add('active');
        document.querySelectorAll('.port-card').forEach(card => {
            if (type === 'all' || card.dataset.type === type) {
                card.style.display = 'block';
                card.style.animation = 'none';
                setTimeout(() => card.style.animation = '', 10);
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>