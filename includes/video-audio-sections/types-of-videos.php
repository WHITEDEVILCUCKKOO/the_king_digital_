<?php

$icons = [
  'clap'   => '<path d="M4 9h16v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1z"/><path d="M4 9l2.5-5 3 .8L7 9.5M10 9l2.5-5 3 .8L13 9.5M16 9l2.3-4.6 1.7.4V9"/><path d="M10.5 13.5l3 1.8-3 1.8z" fill="currentColor"/>',
  'build'  => '<rect x="4" y="3" width="10" height="18" rx="1"/><path d="M14 9h6v12h-6M7.5 7h3M7.5 11h3M7.5 15h3M17 13v1M17 17v1"/>',
  'box'    => '<path d="M12 3l8 4.2v9.6L12 21l-8-4.2V7.2z"/><path d="M4 7.2l8 4.3 8-4.3M12 11.5V21M8 5l8 4.3"/>',
  'phone'  => '<rect x="6.5" y="2.5" width="11" height="19" rx="2.5"/><path d="M10 18.5h4"/><path d="M10.6 8.8l3.2 1.9-3.2 1.9z" fill="currentColor"/>',
  'mega'   => '<path d="M4 10v4a1 1 0 0 0 1 1h2l8 4V5L7 9H5a1 1 0 0 0-1 1z"/><path d="M18 9.5a3.5 3.5 0 0 1 0 5M7 15l1 5h2.5l-1-4.5"/>',
  'yt'     => '<rect x="3" y="5" width="18" height="14" rx="4"/><path d="M10.3 9.3l4.4 2.7-4.4 2.7z" fill="currentColor"/>',
  'event'  => '<rect x="9" y="2" width="6" height="12" rx="3"/><path d="M5 11a7 7 0 0 0 14 0"/><path d="M12 18v3M8 21h8"/>',
  'motion' => '<rect x="3" y="4" width="18" height="12" rx="2"/><path d="M8 20h8M12 16v4"/><path d="M12 7l1.2 2.3 2.5.4-1.8 1.8.4 2.5-2.3-1.2-2.3 1.2.4-2.5-1.8-1.8 2.5-.4z"/>',
];

$cards = [
  ['clap',   'Ad Film Production',        'High-impact promotional videos that grab attention and drive action.'],
  ['build',  'Corporate Films',           'Company profile, culture, presentations and internal communications.'],
  ['box',    'Product Videos',            'Product stories, launches and showcase videos that sell.'],
  ['phone',  'Social Media Videos',       'Reels, Shorts, Instagram, Facebook and platform-specific content.'],
  ['mega',   'Brand Films',               'Emotional storytelling and visual identity that builds trust.'],
  ['yt',     'YouTube Production',        'Episodes, explainers and branded content for your channel.'],
  ['event',  'Podcast Production',        'Audio and video podcasts, live streams and hybrid events.'],
  ['motion', 'Animation & Motion Graphics', 'Explainers, graphics, shape effects and animated storytelling.'],
];
?>

<style>

  .kd-types {
    --kd-red: #d7141a;
    --kd-ink: #2b2f3a;
    --kd-text: #5b606b;
    position: relative;
    width: 100%;
    overflow: hidden;
    background: linear-gradient(180deg, #ffffff 0%, #f5f5f6 100%);
    padding: 40px 0;
  }

  .kd-types__inner {
    position: relative;
    z-index: 3;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 28px;
  }

  /* ---------- top row ---------- */
  .kd-types__top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    margin-bottom: 44px;
  }

  .kd-types__intro {
    flex: 0 0 auto;
    max-width: 520px;
  }

  .kd-types__eyebrow {
    display: flex;
    align-items: center;
    gap: 14px;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 1.6px;
    text-transform: uppercase;
    color: var(--kd-text);
    margin-bottom: 22px;
  }

  .kd-types__eyebrow::before {
    content: '';
    width: 30px;
    height: 2px;
    background: var(--kd-red);
  }

  .kd-types__title {
    font-size: clamp(36px, 4.2vw, 56px);
    line-height: 1.12;
    font-weight: 800;
    letter-spacing: -1.2px;
    color: var(--kd-ink);
    margin-bottom: 20px;
  }

  .kd-types__title span {
    color: var(--kd-red);
  }

  .kd-types__desc {
    font-size: 15.5px;
    line-height: 1.65;
    color: var(--kd-text);
    max-width: 470px;
  }

  /* ---------- slanted photo ---------- */
  .kd-types__media {
    position: relative;
    flex: 1 1 auto;
    max-width: 720px;
    height: 270px;
  }

  .kd-types__photo {
    position: absolute;
    inset: 0;
    clip-path: polygon(8% 0, 100% 0, 92% 100%, 0 100%);
    background: #111;
  }

  .kd-types__photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    filter: saturate(1.05) contrast(1.05);
  }

  .kd-types__photo::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(0, 0, 0, .05), rgba(0, 0, 0, .35));
  }

  .kd-types__stripe {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 34px;
    height: 58%;
    background: linear-gradient(180deg, transparent, var(--kd-red));
    clip-path: polygon(70% 0, 100% 0, 30% 100%, 0 100%);
    transform: translateX(10px);
  }

  .kd-types__play {
    position: absolute;
    z-index: 4;
    left: 40%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 62px;
    height: 62px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    background: var(--kd-red);
    box-shadow: 0 0 0 9px rgba(215, 20, 26, .25), 0 10px 26px rgba(0, 0, 0, .4);
    transition: transform .2s ease;
  }

  .kd-types__play:hover {
    transform: translate(-50%, -50%) scale(1.08);
  }

  .kd-types__play:focus-visible {
    outline: 3px solid #fff;
    outline-offset: 4px;
  }

  .kd-types__play svg {
    width: 22px;
    height: 22px;
    fill: #fff;
    margin-left: 3px;
  }

  /* ---------- cards ---------- */
  .kd-types__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 22px;
  }

  .kd-card {
    background: #fff;
    border-radius: 14px;
    padding: 26px 24px 22px;
    border: 1px solid #efeff1;
    box-shadow: 0 10px 28px rgba(30, 34, 50, .07);
    display: flex;
    flex-direction: column;
    transition: transform .25s ease, box-shadow .25s ease;
  }

  .kd-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 34px rgba(215, 20, 26, .14);
  }

  .kd-card__icon {
    width: 46px;
    height: 46px;
    border-radius: 12px;
    background: #ffe8e8;
    color: var(--kd-red);
    display: grid;
    place-items: center;
    margin-bottom: 18px;
  }

  .kd-card__icon svg {
    width: 24px;
    height: 24px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.7;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .kd-card__title {
    font-size: 16.5px;
    font-weight: 600;
    color: var(--kd-ink);
    margin-bottom: 8px;
  }

  .kd-card__text {
    font-size: 13.5px;
    line-height: 1.6;
    color: var(--kd-text);
    margin-bottom: 20px;
    flex: 1;
  }

  .kd-card__link {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    align-self: flex-start;
    font-size: 13px;
    font-weight: 600;
    color: var(--kd-ink);
    text-decoration: none;
  }

  .kd-card__arrow {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    border: 1.5px solid var(--kd-red);
    color: var(--kd-red);
    display: grid;
    place-items: center;
    transition: background .2s, color .2s;
  }

  .kd-card__arrow svg {
    width: 13px;
    height: 13px;
    fill: none;
    stroke: currentColor;
    stroke-width: 2.4;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .kd-card__link:hover .kd-card__arrow,
  .kd-card__link:focus-visible .kd-card__arrow {
    background: var(--kd-red);
    color: #fff;
  }

  .kd-card__link:focus-visible {
    outline: 2px solid var(--kd-red);
    outline-offset: 4px;
    border-radius: 6px;
  }

  /* single entrance: cards rise in once */
  .kd-types.is-armed .kd-card {
    opacity: 0;
    transform: translateY(22px);
  }

  .kd-types.is-in .kd-card {
    opacity: 1;
    transform: none;
    transition: opacity .6s ease var(--d, 0s), transform .6s ease var(--d, 0s), box-shadow .25s ease;
  }

  .kd-types.is-in .kd-card:hover {
    transform: translateY(-4px);
    transition-delay: 0s;
  }

  /* ---------- responsive ---------- */
  @media (max-width: 1100px) {
    .kd-types__grid {
      grid-template-columns: repeat(2, 1fr);
    }

    .kd-types__top {
      flex-direction: column;
      align-items: flex-start;
    }

    .kd-types__media {
      width: 100%;
      max-width: none;
    }
  }

  @media (max-width: 620px) {
    .kd-types {
      padding: 56px 0 90px;
    }

    .kd-types__grid {
      grid-template-columns: 1fr;
    }

    .kd-types__media {
      height: 210px;
    }

  }

  @media (prefers-reduced-motion: reduce) {
    .kd-types.is-armed .kd-card {
      opacity: 1;
      transform: none;
    }

    .kd-card,
    .kd-types__play {
      transition: none;
    }
  }
</style>

<section class="kd-types" id="kd-types">

  <div class="kd-types__inner">
    <div class="kd-types__top">
      <div class="kd-types__intro">
        <div class="kd-types__eyebrow">What We Create</div>
        <h2 class="kd-types__title">Types of Videos<br><span>We Produce</span></h2>
        <p class="kd-types__desc">From brand storytelling to performance-driven ads, we create videos for every platform and purpose.</p>
      </div>

      <div class="kd-types__media">
        <div class="kd-types__photo">
          <img src="assets/images/hero-video.png" alt="Professional video camera on a studio set">
        </div>
        <span class="kd-types__stripe"></span>
        <a class="kd-types__play" href="portfolio.php" aria-label="Watch our work">
          <svg viewBox="0 0 24 24">
            <path d="M5 3l16 9-16 9z" />
          </svg>
        </a>
      </div>
    </div>

    <div class="kd-types__grid">
      <?php foreach ($cards as $i => $c): ?>
        <article class="kd-card" style="--d: <?= number_format($i * 0.07, 2) ?>s">
          <div class="kd-card__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><?= $icons[$c[0]] ?></svg></div>
          <h3 class="kd-card__title"><?= htmlspecialchars($c[1]) ?></h3>
          <p class="kd-card__text"><?= htmlspecialchars($c[2]) ?></p>
          <a class="kd-card__link" href="contact.php">
            Learn More
            <span class="kd-card__arrow"><svg viewBox="0 0 24 24">
                <path d="M4 12h16M14 6l6 6-6 6" />
              </svg></span>
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
  (function() {
    var sec = document.getElementById('kd-types');
    if (!sec) return;

    // Cards rise in once, staggered, the first time the section is visible
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      sec.classList.add('is-armed');
      var io = new IntersectionObserver(function(entries) {
        if (entries[0].isIntersecting) {
          sec.classList.add('is-in');
          io.disconnect();
        }
      }, {
        threshold: .2
      });
      io.observe(sec);
    }

    // Smooth scroll for in-page links
    sec.querySelectorAll('a[href^="#"]').forEach(function(a) {
      a.addEventListener('click', function(ev) {
        var t = document.querySelector(a.getAttribute('href'));
        if (t) {
          ev.preventDefault();
          t.scrollIntoView({
            behavior: 'smooth'
          });
        }
      });
    });
  })();
</script>