<style>
  /* ================= SSM HERO ================= */
  .ssm-hero {
    --ssm-bg: #0b0f17;
    --ssm-card: #111723;
    --ssm-line: rgba(255, 255, 255, .09);
    --ssm-orange: #ff7a1a;
    --ssm-text: #ffffff;
    --ssm-muted: #aab2c0;
    --ssm-green: #27d17f;
    position: relative;
    overflow: hidden;
    background:
      radial-gradient(900px 500px at 85% 20%, rgba(255, 122, 26, .10), transparent 60%),
      radial-gradient(700px 500px at 10% 90%, rgba(60, 90, 160, .18), transparent 60%),
      var(--ssm-bg);
    color: var(--ssm-text);
    padding: 40px 5%;
    box-sizing: border-box;
  }

  .ssm-hero * {
    box-sizing: border-box;
    margin: 0;
    padding: 0
  }

  .ssm-hero svg {
    display: block
  }

  .ssm-hero .ssm-wrap {
    max-width: 1240px;
    margin: 0 auto
  }

  /* ---------- top: two columns ---------- */
  .ssm-hero .ssm-main {
    display: grid;
    grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
    gap: 30px;
    align-items: center;
  }

  /* ---------- left copy ---------- */
  .ssm-hero .ssm-eyebrow {
    display: flex;
    align-items: center;
    gap: 14px;
    font-size: 12px;
    letter-spacing: .22em;
    color: var(--ssm-muted);
    text-transform: uppercase;
    margin-bottom: 26px;
  }

  .ssm-hero .ssm-eyebrow::before {
    content: "";
    width: 46px;
    height: 2px;
    background: var(--ssm-orange)
  }

  .ssm-hero h1 {
    font-size: clamp(38px, 5vw, 54px);
    line-height: 1.05;
    font-weight: 800;
    letter-spacing: -.02em;
    margin-bottom: 24px;
  }

  .ssm-hero h1 span {
    color: var(--ssm-orange);
    display: block
  }

  .ssm-hero .ssm-lead {
    font-size: 16px;
    line-height: 1.65;
    color: #c6ccd8;
    max-width: 470px;
    margin-bottom: 34px;
  }

  .ssm-hero .ssm-features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0;
    max-width: 520px;
  }

  .ssm-hero .ssm-feature {
    padding: 0 18px;
    border-left: 1px solid var(--ssm-line)
  }

  .ssm-hero .ssm-feature:first-child {
    padding-left: 0;
    border-left: 0
  }

  .ssm-hero .ssm-ficon {
    width: 38px;
    height: 38px;
    border: 1.5px solid var(--ssm-orange);
    border-radius: 8px;
    display: grid;
    place-items: center;
    color: var(--ssm-orange);
    margin-bottom: 12px;
  }

  .ssm-hero .ssm-feature h4 {
    font-size: 13px;
    letter-spacing: .08em;
    font-weight: 700;
    margin-bottom: 6px
  }

  .ssm-hero .ssm-feature p {
    font-size: 12.5px;
    line-height: 1.5;
    color: var(--ssm-muted)
  }

  /* ---------- right mockup cluster ---------- */
  .ssm-hero .ssm-visual {
    position: relative;
    height: 560px
  }

  .ssm-hero .ssm-card {
    position: absolute;
    background: #fff;
    color: #111;
    border-radius: 14px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, .55);
    overflow: hidden;
  }

  .ssm-hero .ssm-ph {
    background: linear-gradient(135deg, #e9ecf2, #cfd5e0);
    border-radius: 6px;
  }

  /* instagram (center) */
  .ssm-hero .ssm-ig {
    left: 25%;
    top: 0;
    width: 46%;
    height: 100%;
    z-index: 3;
    padding: 14px 16px;
    display: flex;
    flex-direction: column
  }

  .ssm-hero .ssm-ig-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 700;
    font-size: 15px;
    font-family: Georgia, serif;
    font-style: italic;
    margin-bottom: 12px
  }

  .ssm-hero .ssm-ig-head {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 8px
  }

  .ssm-hero .ssm-avatar {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: #0c1018;
    color: #fff;
    display: grid;
    place-items: center;
    font-weight: 800;
    font-size: 18px;
    border: 3px solid #fff;
    box-shadow: 0 0 0 2px #e1306c;
    flex: none;
  }

  .ssm-hero .ssm-ig-name {
    font-weight: 700;
    font-size: 14px
  }

  .ssm-hero .ssm-ig-sub {
    font-size: 11px;
    color: #666
  }

  .ssm-hero .ssm-ig-stats {
    display: flex;
    gap: 18px;
    font-size: 11px;
    color: #444;
    margin: 10px 0
  }

  .ssm-hero .ssm-ig-stats b {
    display: block;
    font-size: 13px;
    color: #111
  }

  .ssm-hero .ssm-ig-btns {
    display: grid;
    grid-template-columns: 1fr 1fr 32px;
    gap: 6px;
    margin-bottom: 12px
  }

  .ssm-hero .ssm-ig-btns span {
    height: 28px;
    border-radius: 7px;
    background: #eef0f4;
    font-size: 12px;
    font-weight: 600;
    display: grid;
    place-items: center;
  }

  .ssm-hero .ssm-ig-btns span:first-child {
    background: #3b82f6;
    color: #fff
  }

  .ssm-hero .ssm-grid {
    flex: 1;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(3, 1fr);
    gap: 4px;
    min-height: 0
  }

  .ssm-hero .ssm-tile {
    border-radius: 4px;
    padding: 8px;
    font-weight: 800;
    font-size: 12px;
    line-height: 1.15;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    color: #fff;
    background: linear-gradient(160deg, #141b29, #0a0e16);
  }

  .ssm-hero .ssm-tile em {
    font-style: normal;
    color: var(--ssm-orange)
  }

  .ssm-hero .ssm-tile.photo {
    background: linear-gradient(135deg, #8fa1b8, #4a5d78)
  }

  .ssm-hero .ssm-tile.photo2 {
    background: linear-gradient(135deg, #5b6f8a, #27364d)
  }

  .ssm-hero .ssm-tile.grad {
    background: linear-gradient(135deg, #fd9b2a, #e1306c 55%, #7b3fe4);
    align-items: center;
    justify-content: center
  }

  .ssm-hero .ssm-tile.orange {
    background: linear-gradient(160deg, #ff8a2a, #e55a00)
  }

  .ssm-hero .ssm-ig-nav {
    display: flex;
    justify-content: space-around;
    padding-top: 10px;
    color: #222
  }

  /* facebook (left) */
  .ssm-hero .ssm-fb {
    left: 0;
    top: 80px;
    width: 30%;
    height: 290px;
    z-index: 2;
    padding: 12px;
    transform: rotate(-1deg)
  }

  .ssm-hero .ssm-fb .ssm-fbhead {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px
  }

  .ssm-hero .ssm-fb .ssm-fbicon {
    width: 26px;
    height: 26px;
    border-radius: 6px;
    background: #1877f2;
    color: #fff;
    display: grid;
    place-items: center;
    font-weight: 800
  }

  .ssm-hero .ssm-fb .ssm-fbcover {
    height: 70px;
    margin-bottom: 10px;
    background: linear-gradient(135deg, #1c2433, #0d1320);
    border-radius: 6px;
    display: flex;
    align-items: flex-end;
    padding: 6px;
    color: #fff;
    font-size: 10px;
    font-weight: 700
  }

  .ssm-hero .ssm-line {
    height: 7px;
    border-radius: 4px;
    background: #e3e6ec;
    margin-bottom: 7px
  }

  .ssm-hero .ssm-line.s {
    width: 60%
  }

  .ssm-hero .ssm-fb .ssm-follow {
    height: 24px;
    border-radius: 6px;
    background: #1877f2;
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    display: grid;
    place-items: center;
    margin: 8px 0 12px
  }

  /* tiktok (right) */
  .ssm-hero .ssm-tt {
    right: 3%;
    top: 130px;
    width: 26%;
    height: 330px;
    z-index: 2;
    padding: 12px;
    transform: rotate(1.5deg);
    text-align: center
  }

  .ssm-hero .ssm-tt .ssm-ttbar {
    font-size: 11px;
    font-weight: 700;
    text-align: left;
    margin-bottom: 8px
  }

  .ssm-hero .ssm-tt .ssm-avatar {
    width: 48px;
    height: 48px;
    margin: 0 auto 6px;
    font-size: 14px;
    box-shadow: 0 0 0 2px #25f4ee, 3px 3px 0 2px #fe2c55
  }

  .ssm-hero .ssm-tt .ssm-ttnums {
    display: flex;
    justify-content: space-around;
    font-size: 10px;
    margin: 8px 0
  }

  .ssm-hero .ssm-tt .ssm-ttnums b {
    display: block;
    font-size: 12px
  }

  .ssm-hero .ssm-tt .ssm-ttbtn {
    height: 24px;
    background: #fe2c55;
    border-radius: 5px;
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    display: grid;
    place-items: center;
    margin-bottom: 10px
  }

  .ssm-hero .ssm-tt .ssm-minigrid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4px
  }

  .ssm-hero .ssm-tt .ssm-minigrid div {
    height: 62px;
    border-radius: 4px;
    background: linear-gradient(160deg, #141b29, #0a0e16);
    color: #fff;
    font-size: 9px;
    font-weight: 700;
    padding: 5px;
    text-align: left;
    display: flex;
    align-items: flex-end
  }

  .ssm-hero .ssm-tt .ssm-minigrid div:nth-child(2) {
    background: linear-gradient(135deg, #8fa1b8, #4a5d78)
  }

  /* reach card (top right) */
  .ssm-hero .ssm-reach {
    right: 0;
    top: 10px;
    width: 30%;
    z-index: 4;
    background: var(--ssm-card);
    color: #fff;
    border: 1px solid var(--ssm-line);
    padding: 14px 16px;
  }

  .ssm-hero .ssm-reach small {
    font-size: 11px;
    color: var(--ssm-muted)
  }

  .ssm-hero .ssm-reach strong {
    display: block;
    font-size: 24px;
    margin: 2px 0 6px;
    color: var(--ssm-green)
  }

  .ssm-hero .ssm-reach svg {
    width: 100%;
    height: 46px
  }

  /* linkedin (right-middle, behind) */
  .ssm-hero .ssm-li {
    right: 0;
    top: 190px;
    width: 22%;
    height: 150px;
    z-index: 1;
    padding: 10px;
    opacity: .95
  }

  .ssm-hero .ssm-li .ssm-lilogo {
    width: 20px;
    height: 20px;
    border-radius: 4px;
    background: #0a66c2;
    color: #fff;
    font-size: 11px;
    font-weight: 800;
    display: grid;
    place-items: center;
    margin-bottom: 8px
  }

  /* stories (bottom right) */
  .ssm-hero .ssm-stories {
    right: 0;
    bottom: 20px;
    width: 46%;
    z-index: 5;
    padding: 12px 14px;
    display: flex;
    justify-content: space-between;
    gap: 6px;
  }

  .ssm-hero .ssm-story {
    text-align: center;
    font-size: 9px;
    color: #444;
    flex: 1
  }

  .ssm-hero .ssm-story i {
    display: block;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    margin: 0 auto 5px;
    background: linear-gradient(135deg, #8fa1b8, #4a5d78);
    box-shadow: 0 0 0 2px #fff, 0 0 0 4px #e1306c;
  }

  .ssm-hero .ssm-story:first-child i {
    background: #2f6bff;
    box-shadow: 0 0 0 2px #fff, 0 0 0 4px #d6d9e0;
    color: #fff;
    display: grid;
    place-items: center;
    font-size: 20px;
    font-style: normal
  }

  /* ---------- stats bar ---------- */
  .ssm-hero .ssm-stats {
    margin-top: 34px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    background: rgba(17, 23, 35, .85);
    border: 1px solid var(--ssm-line);
    border-radius: 16px;
    backdrop-filter: blur(8px);
  }

  .ssm-hero .ssm-stat {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 22px 26px;
    border-left: 1px solid var(--ssm-line)
  }

  .ssm-hero .ssm-stat:first-child {
    border-left: 0
  }

  .ssm-hero .ssm-sicon {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    flex: none;
    color: var(--ssm-orange);
    background: rgba(255, 122, 26, .12);
    border: 1px solid rgba(255, 122, 26, .35);
  }

  .ssm-hero .ssm-sicon.blue {
    color: #5b9bff;
    background: rgba(91, 155, 255, .12);
    border-color: rgba(91, 155, 255, .35)
  }

  .ssm-hero .ssm-sicon.pink {
    color: #ff5b8a;
    background: rgba(255, 91, 138, .12);
    border-color: rgba(255, 91, 138, .35)
  }

  .ssm-hero .ssm-slabel {
    font-size: 12px;
    color: var(--ssm-muted);
    margin-bottom: 2px
  }

  .ssm-hero .ssm-snum {
    font-size: 28px;
    font-weight: 800;
    letter-spacing: -.01em;
    display: flex;
    align-items: baseline;
    gap: 10px
  }

  .ssm-hero .ssm-snum small {
    font-size: 12px;
    font-weight: 600;
    color: var(--ssm-green)
  }

  .ssm-hero .ssm-ssub {
    font-size: 11px;
    color: #7d8696
  }

  /* ---------- responsive ---------- */
  @media (max-width:1020px) {
    .ssm-hero .ssm-main {
      grid-template-columns: 1fr
    }

    .ssm-hero .ssm-visual {
      height: 520px;
      max-width: 640px;
      margin: 20px auto 0;
      width: 100%
    }

    .ssm-hero .ssm-stats {
      grid-template-columns: repeat(2, 1fr)
    }

    .ssm-hero .ssm-stat:nth-child(3) {
      border-left: 0
    }

    .ssm-hero .ssm-stat:nth-child(n+3) {
      border-top: 1px solid var(--ssm-line)
    }
  }

  @media (max-width:620px) {
    .ssm-hero {
      padding: 50px 20px 30px
    }

    .ssm-hero .ssm-features {
      grid-template-columns: 1fr;
      gap: 18px
    }

    .ssm-hero .ssm-feature {
      padding: 0;
      border-left: 0
    }

    .ssm-hero .ssm-visual {
      height: 480px
    }

    .ssm-hero .ssm-fb,
    .ssm-hero .ssm-li,
    .ssm-hero .ssm-tt {
      display: none
    }

    .ssm-hero .ssm-ig {
      left: 5%;
      width: 90%;
      height: auto;
      bottom: 70px
    }

    .ssm-hero .ssm-reach {
      display: none
    }

    .ssm-hero .ssm-stories {
      width: 100%
    }

    .ssm-hero .ssm-stats {
      grid-template-columns: 1fr
    }

    .ssm-hero .ssm-stat {
      border-left: 0;
      border-top: 1px solid var(--ssm-line)
    }

    .ssm-hero .ssm-stat:first-child {
      border-top: 0
    }
  }

  /* entrance animation */
  .ssm-hero .ssm-reveal {
    opacity: 0;
    transform: translateY(18px);
    transition: opacity .7s ease, transform .7s ease
  }

  .ssm-hero.is-in .ssm-reveal {
    opacity: 1;
    transform: none
  }

  .ssm-hero.is-in .ssm-reveal:nth-child(2) {
    transition-delay: .1s
  }

  .ssm-hero.is-in .ssm-reveal:nth-child(3) {
    transition-delay: .2s
  }

  .ssm-hero.is-in .ssm-reveal:nth-child(4) {
    transition-delay: .3s
  }

  @media (prefers-reduced-motion:reduce) {
    .ssm-hero .ssm-reveal {
      opacity: 1;
      transform: none;
      transition: none
    }
  }
</style>

<section class="ssm-hero">
  <div class="ssm-wrap">
    <div class="ssm-main">

      <!-- LEFT: copy -->
      <div class="ssm-copy">
        <div class="ssm-eyebrow ssm-reveal">Social Media That Works</div>
        <h1 class="ssm-reveal">Turn Scrollers Into <span>Customers.</span></h1>
        <p class="ssm-lead ssm-reveal">We create scroll-stopping content, manage your social channels and run data-backed campaigns that build your brand, grow your audience and bring real business results.</p>

        <div class="ssm-features ssm-reveal">
          <div class="ssm-feature">
            <div class="ssm-ficon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7" rx="1" />
                <rect x="14" y="3" width="7" height="7" rx="1" />
                <rect x="3" y="14" width="7" height="7" rx="1" />
                <rect x="14" y="14" width="7" height="7" rx="1" />
              </svg>
            </div>
            <h4>CONTENT</h4>
            <p>Engaging posts that build your brand.</p>
          </div>
          <div class="ssm-feature">
            <div class="ssm-ficon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="4" />
                <path d="M3 9h18M9 3l3 6M15 3l3 6" />
                <path d="M10 13l5 3-5 3z" />
              </svg>
            </div>
            <h4>REELS</h4>
            <p>Short videos that get real attention.</p>
          </div>
          <div class="ssm-feature">
            <div class="ssm-ficon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 11v2a1 1 0 001 1h3l8 4V6L7 10H4a1 1 0 00-1 1z" />
                <path d="M18 9a4 4 0 010 6" />
              </svg>
            </div>
            <h4>PAID SOCIAL</h4>
            <p>Targeted ads for better ROI.</p>
          </div>
        </div>
      </div>

      <!-- RIGHT: mockups -->
      <div class="ssm-visual ssm-reveal" aria-hidden="true">

        <!-- Facebook-style page -->
        <div class="ssm-card ssm-fb">
          <div class="ssm-fbhead">
            <div class="ssm-fbicon">f</div><b style="font-size:12px">King Digital</b>
          </div>
          <div class="ssm-fbcover">Social Media Marketing</div>
          <div class="ssm-follow">Follow</div>
          <div class="ssm-line"></div>
          <div class="ssm-line s"></div>
          <div class="ssm-ph" style="height:60px;margin-top:10px"></div>
        </div>

        <!-- Instagram-style profile -->
        <div class="ssm-card ssm-ig">
          <div class="ssm-ig-top"><span>Instagram</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="2">
              <path d="M6 8a6 6 0 0112 0c0 7 3 9 3 9H3s3-2 3-9" />
            </svg>
          </div>
          <div class="ssm-ig-head">
            <div class="ssm-avatar">VK</div>
            <div>
              <div class="ssm-ig-name">king.digital</div>
              <div class="ssm-ig-sub">Digital Marketing Agency</div>
            </div>
          </div>
          <div class="ssm-ig-stats">
            <div><b>482</b>posts</div>
            <div><b>12.6K</b>followers</div>
            <div><b>324</b>following</div>
          </div>
          <div class="ssm-ig-btns"><span>Follow</span><span>Message</span><span>+</span></div>
          <div class="ssm-grid">
            <div class="ssm-tile">Better Marketing. Bigger <em>Growth.</em></div>
            <div class="ssm-tile photo"></div>
            <div class="ssm-tile">Ideas To <em>Impact.</em></div>
            <div class="ssm-tile photo2"></div>
            <div class="ssm-tile grad">
              <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="5" />
                <path d="M10 8.5l5 3.5-5 3.5z" />
              </svg>
            </div>
            <div class="ssm-tile">Strategy Content Ads <em>Results</em></div>
            <div class="ssm-tile">Social Media Tips</div>
            <div class="ssm-tile photo"></div>
            <div class="ssm-tile orange">Your Growth Partner.</div>
          </div>
          <div class="ssm-ig-nav">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M3 11l9-8 9 8v10H3z" />
            </svg>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="11" cy="11" r="7" />
              <path d="M21 21l-5-5" />
            </svg>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="3" width="18" height="18" rx="5" />
              <path d="M12 8v8M8 12h8" />
            </svg>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="8" r="4" />
              <path d="M4 21c0-4 4-6 8-6s8 2 8 6" />
            </svg>
          </div>
        </div>

        <!-- Reach analytics -->
        <div class="ssm-card ssm-reach">
          <small>Reach</small>
          <strong>↑ 228%</strong>
          <svg viewBox="0 0 120 46" preserveAspectRatio="none">
            <path d="M0 40 L20 34 L40 36 L60 22 L80 26 L100 10 L120 4" fill="none" stroke="#3b82f6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M0 40 L20 34 L40 36 L60 22 L80 26 L100 10 L120 4 V46 H0Z" fill="rgba(59,130,246,.15)" />
          </svg>
        </div>

        <!-- LinkedIn-style card -->
        <div class="ssm-card ssm-li">
          <div class="ssm-lilogo">in</div>
          <div class="ssm-line"></div>
          <div class="ssm-line s"></div>
          <div class="ssm-ph" style="height:48px;margin-top:6px"></div>
        </div>

        <!-- TikTok-style profile -->
        <div class="ssm-card ssm-tt">
          <div class="ssm-ttbar">♪ TikTok</div>
          <div class="ssm-avatar">VK</div>
          <b style="font-size:11px">@king.digital</b>
          <div class="ssm-ttnums">
            <div><b>1,248</b>following</div>
            <div><b>12.6K</b>followers</div>
            <div><b>134.8K</b>likes</div>
          </div>
          <div class="ssm-ttbtn">Follow</div>
          <div class="ssm-minigrid">
            <div>Social Media Tips</div>
            <div></div>
            <div>Content that Converts</div>
            <div>Growth</div>
          </div>
        </div>

        <!-- Stories -->
        <div class="ssm-card ssm-stories">
          <div class="ssm-story"><i>+</i>Your story</div>
          <div class="ssm-story"><i></i>Success stories</div>
          <div class="ssm-story"><i></i>Content</div>
          <div class="ssm-story"><i></i>Client Work</div>
          <div class="ssm-story"><i></i>Tips</div>
        </div>
      </div>
    </div>

    <!-- STATS BAR -->
    <div class="ssm-stats ssm-reveal">
      <div class="ssm-stat">
        <div class="ssm-sicon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" />
            <circle cx="12" cy="12" r="3" />
          </svg></div>
        <div>
          <div class="ssm-slabel">Reach</div>
          <div class="ssm-snum"><span data-count="248" data-suffix="K">248K</span><small>↑ 312%</small></div>
          <div class="ssm-ssub">Last 28 days</div>
        </div>
      </div>
      <div class="ssm-stat">
        <div class="ssm-sicon pink"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 10-7.8 7.8l1 1.1L12 21l7.8-7.5 1-1.1a5.5 5.5 0 000-7.8z" />
          </svg></div>
        <div>
          <div class="ssm-slabel">Engagement</div>
          <div class="ssm-snum"><span data-count="21.6" data-suffix="K" data-dec="1">21.6K</span><small>↑ 187%</small></div>
          <div class="ssm-ssub">Last 28 days</div>
        </div>
      </div>
      <div class="ssm-stat">
        <div class="ssm-sicon blue"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="9" cy="8" r="3.5" />
            <path d="M2 20c0-3.5 3-6 7-6s7 2.5 7 6" />
            <circle cx="17.5" cy="9" r="2.5" />
            <path d="M18 14c2.5.3 4 2 4 5" />
          </svg></div>
        <div>
          <div class="ssm-slabel">Followers</div>
          <div class="ssm-snum"><span data-count="12.6" data-suffix="K" data-dec="1">12.6K</span><small>↑ 142%</small></div>
          <div class="ssm-ssub">Last 28 days</div>
        </div>
      </div>
      <div class="ssm-stat">
        <div class="ssm-sicon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 12a8 8 0 01-11.6 7.1L3 21l1.9-6.4A8 8 0 1121 12z" />
            <path d="M8 11h8M8 14h5" />
          </svg></div>
        <div>
          <div class="ssm-slabel">Leads</div>
          <div class="ssm-snum"><span data-count="892" data-suffix="">892</span><small>↑ 96%</small></div>
          <div class="ssm-ssub">Last 28 days</div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  (function() {
    var hero = document.querySelector('.ssm-hero');
    if (!hero) return;

    function countUp(el) {
      var target = parseFloat(el.getAttribute('data-count')),
        dec = parseInt(el.getAttribute('data-dec') || '0', 10),
        suf = el.getAttribute('data-suffix') || '',
        dur = 1400,
        start = null;

      function step(ts) {
        if (!start) start = ts;
        var p = Math.min((ts - start) / dur, 1),
          e = 1 - Math.pow(1 - p, 3);
        el.textContent = (target * e).toFixed(dec) + suf;
        if (p < 1) requestAnimationFrame(step);
      }
      requestAnimationFrame(step);
    }

    function run() {
      hero.classList.add('is-in');
      if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
      hero.querySelectorAll('[data-count]').forEach(countUp);
    }

    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function(entries) {
        if (entries[0].isIntersecting) {
          run();
          io.disconnect();
        }
      }, {
        threshold: .25
      });
      io.observe(hero);
    } else {
      run();
    }
  })();
</script>