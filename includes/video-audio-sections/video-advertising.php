<?php
// King Digital – "Video + Advertising" section
$video_image = 'hero-video.png'; // photo inside the tilted video frame (same folder as this file)

// Simple inline brand-style icons (no external files needed)
$svg = [
  'meta'  => '<svg viewBox="0 0 24 24" fill="none" stroke="#0866ff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12c-2-2.8-3.8-5-6-5a4 4 0 0 0 0 10c2.2 0 4-2.2 6-5zm0 0c2 2.8 3.8 5 6 5a4 4 0 0 0 0-10c-2.2 0-4 2.2-6 5z"/></svg>',
  'ig'    => '<svg viewBox="0 0 24 24"><defs><linearGradient id="kdIg" x1="0" y1="1" x2="1" y2="0"><stop offset="0" stop-color="#feda75"/><stop offset=".35" stop-color="#fa7e1e"/><stop offset=".65" stop-color="#d62976"/><stop offset="1" stop-color="#4f5bd5"/></linearGradient></defs><rect x="2" y="2" width="20" height="20" rx="6" fill="url(#kdIg)"/><rect x="6.2" y="6.2" width="11.6" height="11.6" rx="3.6" fill="none" stroke="#fff" stroke-width="1.8"/><circle cx="12" cy="12" r="2.8" fill="none" stroke="#fff" stroke-width="1.8"/><circle cx="16.3" cy="7.7" r="1" fill="#fff"/></svg>',
  'yt'    => '<svg viewBox="0 0 24 24"><rect x="1.5" y="4.5" width="21" height="15" rx="4.5" fill="#ff0000"/><path d="M10 8.8l5.4 3.2-5.4 3.2z" fill="#fff"/></svg>',
  'gads'  => '<svg viewBox="0 0 24 24"><rect x="9.6" y="1.5" width="6" height="15.5" rx="3" transform="rotate(30 12.6 9.3)" fill="#fbbc04"/><rect x="2.4" y="7.5" width="6" height="15.5" rx="3" transform="rotate(-30 5.4 15.3)" fill="#4285f4"/><circle cx="18.4" cy="19.2" r="3.3" fill="#34a853"/></svg>',
  'clap'  => '<svg viewBox="0 0 24 24" fill="none" stroke="#d7141a" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M4 9h16v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1z"/><path d="M4 9l2.5-5 3 .8L7 9.5M10 9l2.5-5 3 .8L13 9.5M16 9l2.3-4.6 1.7.4V9"/><path d="M10.5 13.5l3 1.8-3 1.8z" fill="#d7141a"/></svg>',
  'bulb'  => '<svg viewBox="0 0 24 24" fill="none" stroke="#2b2f3a" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-3.6 10.8c.7.6 1.1 1.3 1.1 2.2h5c0-.9.4-1.6 1.1-2.2A6 6 0 0 0 12 3z"/><path d="M12 7.5v3.2"/></svg>',
  'chart' => '<svg viewBox="0 0 24 24" fill="none" stroke="#d7141a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16M6 16l4.2-4.4 3 3L19 8.5M15 8h4.2v4.2"/></svg>',
  'target'=> '<svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8.5"/><circle cx="12" cy="12" r="4.8"/><circle cx="12" cy="12" r="1.2" fill="#fff"/><path d="M12 12l7.5-7.5M16.5 3.5v4H20.5"/></svg>',
];

$steps = [
  ['clap',  'pink', 'Video Production', 'High-quality videos that tell your brand story and grab attention.'],
  ['bulb',  '',     'Creative Assets',  'Multiple formats and versions for every platform and audience.'],
  ['meta',  '',     'Meta Ads',         'Targeted campaigns on Facebook & Instagram to reach the right people.'],
  ['ig',    '',     'Instagram',        'Engaging reels, stories and ads to grow your audience.'],
  ['yt',    '',     'YouTube Ads',      'Skippable and non-skippable ads to build brand and generate leads.'],
  ['gads',  '',     'Google Display',   'Reach potential customers across millions of websites and apps.'],
  ['chart', 'pink', 'Leads / Sales',    'More visibility. More engagement. More revenue.'],
];
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Caveat:wght@600;700&display=swap" rel="stylesheet">

<style>
  .kd-adv, .kd-adv * { box-sizing: border-box; margin: 0; padding: 0; }
  .kd-adv {
    --kd-red: #d7141a; --kd-ink: #2b2f3a; --kd-text: #5b606b;
    position: relative; width: 100%; overflow: hidden;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(180deg, #ffffff 0%, #f4f4f6 100%);
    padding: 70px 0 70px;
  }
  .kd-adv__inner { position: relative; z-index: 3; max-width: 1380px; margin: 0 auto; padding: 0 5%; }

  /* ---------- top ---------- */
  .kd-adv__top { display: grid; grid-template-columns: 1.15fr .85fr; gap: 30px; align-items: center; margin-bottom: 40px; }
  .kd-adv__eyebrow { display: flex; align-items: center; gap: 12px; font-size: 11px; font-weight: 500; letter-spacing: 1.6px; text-transform: uppercase; color: var(--kd-text); margin-bottom: 18px; }
  .kd-adv__eyebrow::before { content: ''; width: 34px; height: 2px; background: var(--kd-red); }
  .kd-adv__title { font-size: clamp(28px, 3.3vw, 47px); line-height: 1.14; font-weight: 700; letter-spacing: -1px; color: var(--kd-ink); margin-bottom: 18px; }
  .kd-adv__title span { color: var(--kd-red); display: block; }
  .kd-adv__desc { font-size: 15px; line-height: 1.65; color: var(--kd-text); max-width: 560px; }

  /* ---------- collage ---------- */
  .kd-adv__collage { position: relative; height: 380px; }
  .kd-adv__frame {
    position: absolute; left: 6%; top: 17%; width: 68%; height: 62%; border-radius: 14px; overflow: hidden;
    background: #111; box-shadow: 0 22px 44px rgba(20,24,40,.3);
    transform: perspective(1000px) rotateY(5deg);
  }
  .kd-adv__frame img { width: 100%; height: 100%; object-fit: cover; display: block; }
  .kd-adv__play {
    position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);
    width: 54px; height: 54px; border-radius: 50%; background: var(--kd-red);
    display: grid; place-items: center; box-shadow: 0 0 0 8px rgba(215,20,26,.28);
    border: 0; cursor: pointer; transition: transform .2s;
  }
  .kd-adv__play:hover { transform: translate(-50%, -50%) scale(1.1); }
  .kd-adv__play:focus-visible { outline: 3px solid #fff; outline-offset: 4px; }
  .kd-adv__play svg { width: 20px; height: 20px; fill: #fff; margin-left: 3px; }
  .kd-adv__pill {
    position: absolute; z-index: 4; display: flex; align-items: center; gap: 8px; background: #fff; border-radius: 12px;
    padding: 9px 16px; font-weight: 600; font-size: 15px; color: var(--kd-ink); box-shadow: 0 10px 26px rgba(20,24,40,.2);
  }
  .kd-adv__pill svg { width: 24px; height: 24px; }
  .kd-adv__pill--meta { left: 24%; top: 2%; }
  .kd-adv__pill--gads { left: 62%; top: 0; }
  .kd-adv__tile { position: absolute; z-index: 4; width: 54px; height: 54px; border-radius: 15px; background: #fff; display: grid; place-items: center; box-shadow: 0 10px 26px rgba(20,24,40,.22); }
  .kd-adv__tile svg { width: 34px; height: 34px; }
  .kd-adv__tile--ig { left: -1%; top: 27%; }
  .kd-adv__tile--yt { left: 2%; bottom: 3%; }

  .kd-adv__phone {
    position: absolute; z-index: 3; right: 15%; top: 14%; width: 27%; height: 76%;
    border-radius: 26px; background: #0f1116; padding: 6px; box-shadow: 0 22px 44px rgba(20,24,40,.35);
  }
  .kd-adv__screen { width: 100%; height: 100%; border-radius: 21px; background: #fff; overflow: hidden; display: flex; flex-direction: column; }
  .kd-adv__screen-bar { height: 22px; display: flex; align-items: center; gap: 6px; padding: 0 10px; font-size: 8px; color: var(--kd-ink); font-weight: 600; }
  .kd-adv__screen-bar i { width: 10px; height: 10px; border-radius: 50%; background: var(--kd-red); display: block; }
  .kd-adv__screen-img { flex: 1; background: radial-gradient(circle at 50% 55%, #6b1a1a 0, #24090b 55%, #0e0506 100%); position: relative; margin: 0 8px; border-radius: 8px; }
  .kd-adv__screen-img::after { content: ''; position: absolute; left: 50%; top: 22%; width: 30%; height: 52%; transform: translateX(-50%); border-radius: 8px 8px 12px 12px; background: linear-gradient(90deg, #1b1b1f, #4a4a52 45%, #141417); }
  .kd-adv__screen-cta { margin: 8px; text-align: center; font-size: 9px; font-weight: 600; color: #fff; background: var(--kd-red); border-radius: 6px; padding: 7px 0; }

  .kd-adv__badge {
    position: absolute; z-index: 4; right: -2%; top: 14%; transform: rotate(-9deg); text-align: center;
    font-family: 'Caveat', cursive; font-weight: 700; font-size: clamp(18px, 1.9vw, 27px); line-height: 1.12; color: var(--kd-ink);
  }
  .kd-adv__badge svg { display: block; width: 100%; margin-top: 2px; }

  /* ---------- flow ---------- */
  .kd-adv__flow { display: grid; grid-template-columns: repeat(7, 1fr); gap: 0; margin-bottom: 44px; }
  .kd-step { position: relative; padding-right: 22px; }
  .kd-step:not(:last-child)::after {
    content: ''; position: absolute; top: 28px; right: 14%; width: 9px; height: 9px;
    border-top: 2.5px solid var(--kd-red); border-right: 2.5px solid var(--kd-red); transform: rotate(45deg);
  }
  .kd-step__icon { width: 62px; height: 62px; border-radius: 50%; background: #ececef; display: grid; place-items: center; margin-bottom: 16px; box-shadow: inset 0 0 0 1px rgba(0,0,0,.03); }
  .kd-step__icon--pink { background: #ffe3e3; }
  .kd-step__icon svg { width: 28px; height: 28px; }
  .kd-step__title { font-size: 12px; font-weight: 700; letter-spacing: .5px; text-transform: uppercase; color: var(--kd-ink); margin-bottom: 8px; }
  .kd-step__text { font-size: 12px; line-height: 1.55; color: var(--kd-text); max-width: 160px; }

  /* ---------- CTA ---------- */
  .kd-adv__cta {
    display: flex; align-items: center; gap: 22px; max-width: 880px; margin: 0 auto;
    background: linear-gradient(100deg, #0d1017, #1a1d26); border-radius: 14px; padding: 22px 28px;
    box-shadow: 0 18px 40px rgba(10,12,20,.3);
  }
  .kd-adv__cta-icon { flex: none; width: 54px; height: 54px; border-radius: 50%; background: var(--kd-red); display: grid; place-items: center; box-shadow: 0 0 0 6px rgba(215,20,26,.2); }
  .kd-adv__cta-icon svg { width: 28px; height: 28px; }
  .kd-adv__cta-text { flex: 1; color: #fff; padding-left: 22px; border-left: 1px solid rgba(255,255,255,.15); }
  .kd-adv__cta-title { font-size: 19px; font-weight: 600; margin-bottom: 4px; }
  .kd-adv__cta-sub { font-size: 12.5px; color: #b7bbc4; }
  .kd-adv__cta-btn {
    flex: none; display: inline-flex; align-items: center; gap: 10px; height: 46px; padding: 0 26px; border-radius: 30px;
    background: var(--kd-red); color: #fff; font-weight: 600; font-size: 13.5px; text-decoration: none; transition: background .2s, transform .2s;
  }
  .kd-adv__cta-btn:hover { background: #b50f14; transform: translateY(-2px); }
  .kd-adv__cta-btn:focus-visible { outline: 3px solid #fff; outline-offset: 3px; }
  .kd-adv__cta-btn svg { width: 16px; height: 16px; fill: none; stroke: #fff; stroke-width: 2.4; stroke-linecap: round; stroke-linejoin: round; }

  /* ---------- corner shapes ---------- */
  .kd-adv__shape { position: absolute; z-index: 1; pointer-events: none; }
  .kd-adv__shape--tl1 { left: 0; top: 0; width: 110px; height: 110px; background: var(--kd-red); clip-path: polygon(0 0, 52% 0, 0 52%); }
  .kd-adv__shape--tl2 { left: 0; top: 0; width: 110px; height: 110px; background: #b00e13; clip-path: polygon(60% 0, 74% 0, 0 74%, 0 60%); }
  .kd-adv__shape--tr { right: 0; top: 0; width: 60px; height: 120px; background: linear-gradient(180deg, #e3161c, #b80e13); clip-path: polygon(100% 0, 100% 100%, 0 0); opacity: .92; }
  .kd-adv__shape--br1 { right: 0; bottom: 0; width: 80px; height: 140px; background: linear-gradient(180deg, transparent, var(--kd-red)); clip-path: polygon(100% 0, 100% 100%, 0 100%); }
  .kd-adv__shape--br2 { right: 38px; bottom: 0; width: 18px; height: 110px; background: var(--kd-red); transform: skewX(-28deg); }

  /* single entrance: flow steps appear in sequence, once */
  .kd-adv.is-armed .kd-step { opacity: 0; transform: translateY(16px); }
  .kd-adv.is-in .kd-step { opacity: 1; transform: none; transition: opacity .55s ease var(--d, 0s), transform .55s ease var(--d, 0s); }

  /* ---------- responsive ---------- */
  @media (max-width: 1100px) {
    .kd-adv__top { grid-template-columns: 1fr; }
    .kd-adv__collage { max-width: 640px; margin: 0 auto; width: 100%; }
    .kd-adv__flow { grid-template-columns: repeat(4, 1fr); row-gap: 34px; }
    .kd-step::after { display: none; }
  }
  @media (max-width: 680px) {
    .kd-adv { padding: 56px 0; }
    .kd-adv__collage { height: 300px; }
    .kd-adv__badge { display: none; }
    .kd-adv__flow { grid-template-columns: repeat(2, 1fr); }
    .kd-adv__cta { flex-direction: column; text-align: center; padding: 26px 20px; }
    .kd-adv__cta-text { padding: 0; border: 0; }
  }
  @media (prefers-reduced-motion: reduce) {
    .kd-adv.is-armed .kd-step { opacity: 1; transform: none; }
    .kd-adv__play, .kd-adv__cta-btn { transition: none; }
  }
</style>

<section class="kd-adv" id="kd-adv">
  <span class="kd-adv__shape kd-adv__shape--tl1"></span>
  <span class="kd-adv__shape kd-adv__shape--tl2"></span>
  <span class="kd-adv__shape kd-adv__shape--tr"></span>
  <span class="kd-adv__shape kd-adv__shape--br1"></span>
  <span class="kd-adv__shape kd-adv__shape--br2"></span>

  <div class="kd-adv__inner">
    <div class="kd-adv__top">
      <div>
        <div class="kd-adv__eyebrow">Video + Advertising</div>
        <h2 class="kd-adv__title">We Don’t Just Make Videos.<span>We Turn Them Into Campaigns.</span></h2>
        <p class="kd-adv__desc">From powerful video production to high-performing ads, we create and distribute content that gets seen, engages audiences and drives real business results.</p>
      </div>

      <div class="kd-adv__collage">
        <div class="kd-adv__pill kd-adv__pill--meta"><?= $svg['meta'] ?>Meta</div>
        <div class="kd-adv__pill kd-adv__pill--gads"><?= $svg['gads'] ?>Google Ads</div>
        <div class="kd-adv__tile kd-adv__tile--ig"><?= $svg['ig'] ?></div>
        <div class="kd-adv__tile kd-adv__tile--yt"><?= $svg['yt'] ?></div>

        <div class="kd-adv__frame">
          <img src="<?= htmlspecialchars($video_image) ?>" alt="Studio video shoot">
          <a class="kd-adv__play" href="#work" aria-label="Watch our work"><svg viewBox="0 0 24 24"><path d="M6 3.5l14 8.5-14 8.5z"/></svg></a>
        </div>

        <div class="kd-adv__phone" aria-hidden="true">
          <div class="kd-adv__screen">
            <div class="kd-adv__screen-bar"><i></i>Sponsored</div>
            <div class="kd-adv__screen-img"></div>
            <div class="kd-adv__screen-cta">Shop Now</div>
          </div>
        </div>

        <div class="kd-adv__badge" aria-hidden="true">
          More<br>Views.<br>More<br>Reach.<br>More<br>Leads.<br>More<br>Sales.
          <svg viewBox="0 0 100 10" fill="none"><path d="M3 7 C 30 2, 65 2, 97 4" stroke="#e3161c" stroke-width="3" stroke-linecap="round"/></svg>
        </div>
      </div>
    </div>

    <div class="kd-adv__flow">
      <?php foreach ($steps as $i => $s): ?>
        <div class="kd-step" style="--d: <?= number_format($i * 0.08, 2) ?>s">
          <div class="kd-step__icon<?= $s[1] ? ' kd-step__icon--pink' : '' ?>"><?= $svg[$s[0]] ?></div>
          <h3 class="kd-step__title"><?= htmlspecialchars($s[2]) ?></h3>
          <p class="kd-step__text"><?= htmlspecialchars($s[3]) ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="kd-adv__cta">
      <div class="kd-adv__cta-icon"><?= $svg['target'] ?></div>
      <div class="kd-adv__cta-text">
        <div class="kd-adv__cta-title">Ready to Grow with Video + Ads?</div>
        <div class="kd-adv__cta-sub">Let’s create, promote and scale your next campaign — together.</div>
      </div>
      <a class="kd-adv__cta-btn" href="#contact">
        Get a Free Strategy Call
        <svg viewBox="0 0 24 24"><path d="M4 12h16M14 6l6 6-6 6"/></svg>
      </a>
    </div>
  </div>
</section>

<script>
(function () {
  var sec = document.getElementById('kd-adv');
  if (!sec) return;

  // Flow steps appear in sequence once, the first time the section is in view
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    sec.classList.add('is-armed');
    var io = new IntersectionObserver(function (entries) {
      if (entries[0].isIntersecting) { sec.classList.add('is-in'); io.disconnect(); }
    }, { threshold: .25 });
    io.observe(sec);
  }

  // Smooth scroll for in-page links
  sec.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (ev) {
      var t = document.querySelector(a.getAttribute('href'));
      if (t) { ev.preventDefault(); t.scrollIntoView({ behavior: 'smooth' }); }
    });
  });
})();
</script>
