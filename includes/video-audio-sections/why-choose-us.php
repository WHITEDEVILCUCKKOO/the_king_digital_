<?php
// King Digital – "Why Choose King Digital" section
$side_image = 'hero-video.png'; // studio photo shown on the right (same folder as this file)

$features = [
  ['target', 'Strategy-First Production',     'Every video starts with a clear goal and plan.'],
  ['team',   'Professional Production Team',  'Skilled directors, camera crew, editors and creatives.'],
  ['bulb',   'Creative Direction',            'Fresh ideas that bring your brand to life.'],
  ['mic',    'Professional Sound & Lighting', 'Clear audio and cinematic visuals, always.'],
  ['star',   'VFX & Motion Graphics',         'Add the wow factor with stunning visual effects.'],
  ['social', 'Social-First Content',          'Optimized for Instagram, YouTube, Reels and more.'],
  ['chart',  'Ad-Ready Creatives',            'Built for performance across all platforms.'],
  ['clock',  'End-to-End Production',         'From concept to delivery, we handle it all.'],
];

$icons = [
  'target' => '<circle cx="12" cy="12" r="8.5"/><circle cx="12" cy="12" r="4.8"/><circle cx="12" cy="12" r="1.2" fill="currentColor"/><path d="M12 12l7-7M16.5 3.5v3.5H20"/>',
  'team'   => '<circle cx="12" cy="8.5" r="3"/><circle cx="5.5" cy="10" r="2.1"/><circle cx="18.5" cy="10" r="2.1"/><path d="M6.8 19c0-3.2 2.4-5.2 5.2-5.2s5.2 2 5.2 5.2M1.8 17.5c0-2 1.4-3.4 3.4-3.4M22.2 17.5c0-2-1.4-3.4-3.4-3.4"/>',
  'bulb'   => '<path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-3.6 10.8c.7.6 1.1 1.3 1.1 2.2h5c0-.9.4-1.6 1.1-2.2A6 6 0 0 0 12 3z"/><path d="M12 7.5v3.2M12 10.7l-1.4-1.3M12 10.7l1.4-1.3"/>',
  'mic'    => '<rect x="9" y="3" width="6" height="11" rx="3"/><path d="M5.5 11.5a6.5 6.5 0 0 0 13 0M12 18v3M8.5 21h7"/>',
  'star'   => '<path d="M12 3.2l2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17.2l-5.4 2.9 1-6.1-4.4-4.3 6.1-.9z"/>',
  'social' => '<rect x="5" y="2.8" width="14" height="18.4" rx="3"/><path d="M9.3 9.5h5.4v4.6a2.7 2.7 0 1 1-2.7-2.7"/><path d="M11 18h2"/>',
  'chart'  => '<path d="M4 20h16M6 16l4.2-4.4 3 3L19 8.5M15 8h4.2v4.2"/>',
  'clock'  => '<circle cx="12" cy="12" r="8.5"/><path d="M12 7v5.2l3.4 2"/>',
];
?>

<style>

  .kd-why {
    --kd-red: #d7141a;
    --kd-ink: #2b2f3a;
    --kd-text: #5b606b;
    position: relative;
    width: 100%;
    overflow: hidden;
    background: linear-gradient(100deg, #ffffff 0%, #f4f4f5 60%, #ececee 100%);
    padding: 40px 0;
  }

  .kd-why__inner {
    position: relative;
    z-index: 3;
    padding: 0 0 0 5%;
    width: 76%;
    max-width: 1150px;
  }

  /* ---------- heading ---------- */
  .kd-why__eyebrow {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 11.5px;
    font-weight: 500;
    letter-spacing: 1.6px;
    text-transform: uppercase;
    color: var(--kd-text);
    margin-bottom: 18px;
  }

  .kd-why__eyebrow::before {
    content: '';
    width: 34px;
    height: 2px;
    background: var(--kd-red);
  }

  .kd-why__title {
    font-size: clamp(34px, 3.9vw, 56px);
    line-height: 1.1;
    font-weight: 800;
    letter-spacing: -1.1px;
    color: var(--kd-ink);
    margin-bottom: 16px;
  }

  .kd-why__title span {
    color: var(--kd-red);
    display: block;
  }

  .kd-why__desc {
    font-size: 15.5px;
    line-height: 1.6;
    color: var(--kd-text);
    max-width: 640px;
    margin-bottom: 46px;
  }

  /* ---------- features ---------- */
  .kd-why__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    row-gap: 40px;
  }

  .kd-feat {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 4px 22px;
  }

  .kd-feat:nth-child(4n + 1) {
    padding-left: 0;
  }

  .kd-feat:nth-child(4n + 2),
  .kd-feat:nth-child(4n + 3),
  .kd-feat:nth-child(4n) {
    border-left: 1px solid #dcdde1;
  }

  .kd-feat__icon {
    flex: none;
    width: 46px;
    height: 46px;
    border-radius: 12px;
    background: #ffe6e6;
    color: var(--kd-red);
    display: grid;
    place-items: center;
  }

  .kd-feat__icon svg {
    width: 23px;
    height: 23px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.7;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .kd-feat__title {
    font-size: 14.5px;
    font-weight: 600;
    line-height: 1.3;
    color: var(--kd-ink);
    margin-bottom: 6px;
  }

  .kd-feat__text {
    font-size: 12.5px;
    line-height: 1.55;
    color: var(--kd-text);
    max-width: 170px;
  }

  /* ---------- side photo ---------- */
  .kd-why__media {
    position: absolute;
    z-index: 1;
    top: 0;
    right: 0;
    bottom: 0;
    width: 27%;
  }

  .kd-why__media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: 100% 50%;
    display: block;
    clip-path: polygon(24% 0, 100% 0, 100% 100%, 0 100%);
  }

  .kd-why__slash {
    position: absolute;
    z-index: 2;
    top: 0;
    left: 15%;
    width: 54px;
    height: 92px;
    background: linear-gradient(180deg, #e3161c, #b80e13);
    clip-path: polygon(62% 0, 100% 0, 38% 100%, 0 100%);
    transform: translateX(2px);
  }

  .kd-why__badge {
    position: absolute;
    z-index: 3;
    top: 9%;
    right: 6%;
    transform: rotate(-9deg);
    text-align: center;
    font-family: 'Caveat', cursive;
    font-weight: 700;
    font-size: clamp(22px, 2.4vw, 34px);
    line-height: 1.1;
    color: var(--kd-ink);
    text-shadow: 0 0 10px rgba(255, 255, 255, .8);
  }

  .kd-why__badge svg {
    display: block;
    width: 100%;
    margin-top: 2px;
  }

  /* ---------- bottom-left accent ---------- */
  .kd-why__bar {
    position: absolute;
    z-index: 2;
    left: 0;
    bottom: 0;
    width: 22%;
    height: 5px;
    background: linear-gradient(90deg, #7d0b10, var(--kd-red) 60%, transparent);
  }

  /* single entrance: features appear once, staggered */
  .kd-why.is-armed .kd-feat {
    opacity: 0;
    transform: translateY(16px);
  }

  .kd-why.is-in .kd-feat {
    opacity: 1;
    transform: none;
    transition: opacity .55s ease var(--d, 0s), transform .55s ease var(--d, 0s);
  }

  /* ---------- responsive ---------- */
  @media (max-width: 1100px) {
    .kd-why__inner {
      width: 100%;
      padding: 0 5%;
    }

    .kd-why__media {
      width: 100%;
      opacity: .12;
    }

    .kd-why__media img {
      clip-path: none;
    }

    .kd-why__badge,
    .kd-why__slash {
      display: none;
    }

    .kd-why__grid {
      grid-template-columns: repeat(2, 1fr);
      row-gap: 30px;
    }

    .kd-feat,
    .kd-feat:nth-child(n) {
      border-left: 0;
      padding: 0 20px 0 0;
    }
  }

  @media (max-width: 560px) {
    .kd-why {
      padding: 50px 0 60px;
    }

    .kd-why__grid {
      grid-template-columns: 1fr;
    }

    .kd-feat__text {
      max-width: none;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .kd-why.is-armed .kd-feat {
      opacity: 1;
      transform: none;
    }
  }
</style>

<section class="kd-why" id="kd-why">
  <div class="kd-why__media">
    <img src="<?= htmlspecialchars($side_image) ?>" alt="Video camera and studio lighting on a King Digital shoot">
    <span class="kd-why__slash"></span>
    <div class="kd-why__badge" aria-hidden="true">
      Better Videos.<br>Bigger Results.
      <svg viewBox="0 0 140 12" fill="none">
        <path d="M4 8 C 40 2, 90 2, 136 5" stroke="#e3161c" stroke-width="3" stroke-linecap="round" />
      </svg>
    </div>
  </div>
  <span class="kd-why__bar"></span>

  <div class="kd-why__inner">
    <div class="kd-why__eyebrow">Why Choose King Digital</div>
    <h2 class="kd-why__title">Your Vision.<span>Our Production Power.</span></h2>
    <p class="kd-why__desc">We combine creativity, technology and experience to deliver videos that not only look amazing but also achieve your business goals.</p>

    <div class="kd-why__grid">
      <?php foreach ($features as $i => $f): ?>
        <div class="kd-feat" style="--d: <?= number_format($i * 0.06, 2) ?>s">
          <div class="kd-feat__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><?= $icons[$f[0]] ?></svg></div>
          <div>
            <h3 class="kd-feat__title"><?= htmlspecialchars($f[1]) ?></h3>
            <p class="kd-feat__text"><?= htmlspecialchars($f[2]) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
  (function() {
    var sec = document.getElementById('kd-why');
    if (!sec) return;

    // Features appear once, staggered, the first time the section is in view
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      sec.classList.add('is-armed');
      var io = new IntersectionObserver(function(entries) {
        if (entries[0].isIntersecting) {
          sec.classList.add('is-in');
          io.disconnect();
        }
      }, {
        threshold: .25
      });
      io.observe(sec);
    }
  })();
</script>