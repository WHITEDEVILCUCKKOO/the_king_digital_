<?php
// King Digital – "Our Featured Work" section
// Put your thumbnails in the same folder (or change the paths). If a file is missing, a dark gradient is shown instead.
// 'video' = mp4 URL or YouTube/Vimeo embed URL; leave empty to keep the play button inactive.

$featured = [
  'img' => 'work-featured.jpg',
  'tag' => 'Featured',
  'title' => 'Brand Campaign',
  'sub' => 'Fashion & Lifestyle | Brand Film',
  'time' => '02:45',
  'video' => '',
  'grad' => 'linear-gradient(120deg,#3a0f12 0%,#8f1a1f 55%,#c9444a 100%)',
];

$projects = [
  ['img' => 'work-1.jpg', 'tag' => 'Corporate',  'title' => 'Real Estate Project', 'sub' => 'Real Estate | Corporate Video',  'time' => '03:12', 'cat' => 'corporate', 'video' => '', 'grad' => 'linear-gradient(160deg,#1c2c44,#3c5a7d 60%,#8aa3bd)'],
  ['img' => 'work-2.jpg', 'tag' => 'Product',    'title' => 'Product Launch',      'sub' => 'Health & Wellness | Product Video', 'time' => '01:58', 'cat' => 'product',   'video' => '', 'grad' => 'linear-gradient(160deg,#0f1f17,#2d4a35 60%,#6b7a5c)'],
  ['img' => 'work-3.jpg', 'tag' => 'Commercial', 'title' => 'Ad Film',             'sub' => 'Food & Beverage | TVC',            'time' => '02:20', 'cat' => 'ad',        'video' => '', 'grad' => 'linear-gradient(160deg,#1a1d26,#3a3f4d 60%,#6b7080)'],
  ['img' => 'work-4.jpg', 'tag' => 'Social Media', 'title' => 'Instagram Reels',    'sub' => 'Social Media | Short Video',       'time' => '00:45', 'cat' => 'social reels', 'video' => '', 'grad' => 'linear-gradient(160deg,#0d2a2e,#245056 60%,#5d8a8f)'],
];

$filters = [
  'all' => 'All',
  'brand' => 'Brand Films',
  'social' => 'Social Media',
  'ad' => 'Ad Films',
  'product' => 'Product Videos',
  'corporate' => 'Corporate Videos',
  'youtube' => 'YouTube Videos',
  'reels' => 'Reels & Shorts',
];

function kd_bg($img, $grad)
{
  $url = (is_file(__DIR__ . '/' . $img)) ? "url('" . htmlspecialchars($img, ENT_QUOTES) . "') center/cover no-repeat, " : '';
  return $url . $grad;
}
$play = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 4l13 8-13 8z"/></svg>';
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

  .kd-work {
    --kd-red: #e3161c;
    position: relative;
    width: 100%;
    overflow: hidden;
    color: #fff;
    background:
      radial-gradient(ellipse 60% 50% at 15% 20%, rgba(255, 255, 255, .07), transparent 70%),
      radial-gradient(ellipse 50% 60% at 95% 10%, rgba(255, 255, 255, .05), transparent 70%),
      #0c0e13;
    padding: 40px 0;
  }

  .kd-work__inner {
    position: relative;
    z-index: 3;
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 5%;
  }

  /* ---------- top ---------- */
  .kd-work__top {
    display: grid;
    grid-template-columns: 0.9fr 1.1fr;
    gap: 60px;
    align-items: center;
    margin-bottom: 34px;
  }

  .kd-work__eyebrow {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 11px;
    letter-spacing: 1.6px;
    text-transform: uppercase;
    color: #b9bcc4;
    margin-bottom: 20px;
  }

  .kd-work__eyebrow::before {
    content: '';
    width: 26px;
    height: 2px;
    background: var(--kd-red);
  }

  .kd-work__title {
    font-size: clamp(34px, 4.2vw, 56px);
    line-height: 1.1;
    font-weight: 800;
    letter-spacing: -1.2px;
    margin-bottom: 20px;
  }

  .kd-work__title span {
    color: var(--kd-red);
  }

  .kd-work__desc {
    font-size: 14.5px;
    line-height: 1.65;
    color: #c4c7cf;
    max-width: 440px;
    margin-bottom: 30px;
  }

  .kd-work__btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    height: 50px;
    padding: 0 32px;
    border-radius: 40px;
    background: var(--kd-red);
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    box-shadow: 0 10px 26px rgba(227, 22, 28, .35);
    transition: transform .2s, background .2s;
  }

  .kd-work__btn:hover {
    background: #c40f15;
    transform: translateY(-2px);
  }

  .kd-work__btn:focus-visible,
  .kd-chip:focus-visible,
  .kd-vid__play:focus-visible {
    outline: 3px solid rgba(255, 255, 255, .7);
    outline-offset: 3px;
  }

  .kd-work__btn svg {
    width: 17px;
    height: 17px;
    fill: none;
    stroke: #fff;
    stroke-width: 2.3;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  /* ---------- video tiles ---------- */
  .kd-vid {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, .1);
    background-color: #15181f;
    isolation: isolate;
  }

  .kd-vid::before {
    content: '';
    position: absolute;
    inset: 0;
    z-index: 1;
    background: linear-gradient(to top, rgba(0, 0, 0, .85) 0%, rgba(0, 0, 0, .25) 45%, rgba(0, 0, 0, 0) 70%);
  }

  .kd-vid__tag {
    position: absolute;
    z-index: 3;
    top: 12px;
    left: 12px;
    padding: 5px 13px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 500;
    background: rgba(20, 22, 28, .78);
    border: 1px solid rgba(255, 255, 255, .14);
    backdrop-filter: blur(4px);
  }

  .kd-vid--featured .kd-vid__tag {
    background: var(--kd-red);
    border-color: transparent;
    font-weight: 600;
  }

  .kd-vid__play {
    position: absolute;
    z-index: 3;
    left: 50%;
    top: 42%;
    transform: translate(-50%, -50%);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1.5px solid rgba(255, 255, 255, .75);
    background: rgba(20, 22, 28, .55);
    backdrop-filter: blur(3px);
    display: grid;
    place-items: center;
    cursor: pointer;
    color: #fff;
    transition: transform .2s, background .2s;
  }

  .kd-vid__play svg {
    width: 15px;
    height: 15px;
    fill: #fff;
    margin-left: 2px;
  }

  .kd-vid:hover .kd-vid__play {
    transform: translate(-50%, -50%) scale(1.1);
    background: rgba(227, 22, 28, .85);
    border-color: transparent;
  }

  .kd-vid--featured .kd-vid__play {
    width: 54px;
    height: 54px;
    top: 46%;
    background: var(--kd-red);
    border-color: transparent;
    box-shadow: 0 0 0 8px rgba(227, 22, 28, .25);
  }

  .kd-vid--featured .kd-vid__play svg {
    width: 20px;
    height: 20px;
  }

  .kd-vid__info {
    position: absolute;
    z-index: 3;
    left: 14px;
    right: 14px;
    bottom: 12px;
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 10px;
  }

  .kd-vid__title {
    font-size: 13px;
    font-weight: 600;
    line-height: 1.3;
  }

  .kd-vid__sub {
    font-size: 10.5px;
    color: #c9ccd3;
    margin-top: 2px;
  }

  .kd-vid__time {
    flex: none;
    font-size: 10.5px;
    padding: 3px 9px;
    border-radius: 6px;
    background: rgba(10, 11, 15, .75);
    border: 1px solid rgba(255, 255, 255, .12);
  }

  .kd-vid--featured {
    aspect-ratio: 2.25 / 1;
    min-height: 220px;
  }

  .kd-vid--featured .kd-vid__info {
    left: 22px;
    right: 22px;
    bottom: 18px;
  }

  .kd-vid--featured .kd-vid__title {
    font-size: 21px;
    font-weight: 600;
  }

  .kd-vid--featured .kd-vid__sub {
    font-size: 12px;
    margin-top: 4px;
  }

  .kd-vid--featured .kd-vid__time {
    font-size: 11.5px;
    padding: 4px 11px;
  }

  .kd-work__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
  }

  .kd-work__grid .kd-vid {
    aspect-ratio: 1.6 / 1;
  }

  .kd-work__grid .kd-vid[hidden] {
    display: none;
  }

  .kd-work__empty {
    grid-column: 1 / -1;
    text-align: center;
    padding: 40px 0;
    font-size: 14px;
    color: #9a9ea8;
  }

  /* ---------- filters ---------- */
  .kd-work__more {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 18px;
    margin: 42px 0 20px;
    font-size: 10.5px;
    letter-spacing: 1.6px;
    text-transform: uppercase;
    color: #a3a7b0;
  }

  .kd-work__more::before,
  .kd-work__more::after {
    content: '';
    width: 90px;
    height: 1px;
    background: rgba(255, 255, 255, .18);
  }

  .kd-work__chips {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
  }

  .kd-chip {
    font: 500 11.5px 'Poppins', sans-serif;
    color: #e3e5ea;
    cursor: pointer;
    padding: 7px 17px;
    border-radius: 30px;
    background: rgba(255, 255, 255, .04);
    border: 1px solid rgba(255, 255, 255, .2);
    transition: background .2s, border-color .2s;
  }

  .kd-chip:hover {
    border-color: rgba(255, 255, 255, .5);
  }

  .kd-chip.is-active {
    background: var(--kd-red);
    border-color: var(--kd-red);
    color: #fff;
  }

  /* ---------- corner shapes ---------- */
  .kd-work__shape {
    position: absolute;
    z-index: 1;
    pointer-events: none;
  }

  .kd-work__shape--tl1 {
    left: 0;
    top: 0;
    width: 70px;
    height: 70px;
    background: var(--kd-red);
    clip-path: polygon(0 0, 55% 0, 0 55%);
  }

  .kd-work__shape--tl2 {
    left: 0;
    top: 0;
    width: 70px;
    height: 70px;
    background: #9c0d12;
    clip-path: polygon(62% 0, 78% 0, 0 78%, 0 62%);
  }

  .kd-work__shape--br1 {
    right: 0;
    bottom: 0;
    width: 110px;
    height: 110px;
    background: #eceef2;
    clip-path: polygon(100% 0, 100% 100%, 12% 100%);
  }

  .kd-work__shape--br2 {
    right: 0;
    bottom: 0;
    width: 110px;
    height: 110px;
    background: var(--kd-red);
    clip-path: polygon(100% 8%, 100% 40%, 40% 100%, 6% 100%);
  }

  .kd-work__shape--br3 {
    right: 0;
    bottom: 0;
    width: 110px;
    height: 110px;
    background: #7d0b10;
    clip-path: polygon(100% 40%, 100% 52%, 52% 100%, 40% 100%);
  }

  /* ---------- modal ---------- */
  .kd-modal {
    border: 0;
    padding: 0;
    background: #000;
    border-radius: 12px;
    width: min(900px, 92vw);
    overflow: hidden;
  }

  .kd-modal::backdrop {
    background: rgba(0, 0, 0, .8);
  }

  .kd-modal__body {
    aspect-ratio: 16/9;
  }

  .kd-modal__body iframe,
  .kd-modal__body video {
    width: 100%;
    height: 100%;
    border: 0;
    display: block;
  }

  .kd-modal__close {
    position: absolute;
    top: 8px;
    right: 8px;
    z-index: 2;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    border: 0;
    background: rgba(0, 0, 0, .7);
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }

  /* ---------- responsive ---------- */
  @media (max-width: 1000px) {
    .kd-work__top {
      grid-template-columns: 1fr;
      gap: 34px;
    }

    .kd-work__grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 560px) {
    .kd-work {
      padding: 56px 0 100px;
    }

    .kd-work__grid {
      grid-template-columns: 1fr;
    }

    .kd-work__more::before,
    .kd-work__more::after {
      width: 30px;
    }
  }

  @media (prefers-reduced-motion: reduce) {

    .kd-vid__play,
    .kd-work__btn,
    .kd-chip {
      transition: none;
    }
  }
</style>

<section class="kd-work" id="kd-work">
  <span class="kd-work__shape kd-work__shape--tl1"></span>
  <span class="kd-work__shape kd-work__shape--tl2"></span>
  <span class="kd-work__shape kd-work__shape--br1"></span>
  <span class="kd-work__shape kd-work__shape--br2"></span>
  <span class="kd-work__shape kd-work__shape--br3"></span>

  <div class="kd-work__inner">
    <div class="kd-work__top">
      <div>
        <div class="kd-work__eyebrow">Our Featured Work</div>
        <h2 class="kd-work__title">Ideas We’ve<br><span>Brought to Life</span></h2>
        <p class="kd-work__desc">From brand stories to product launches, explore our latest video projects and see how we turn ideas into powerful visuals that get results.</p>
        <a class="kd-work__btn" href="#work-all">
          View All Projects
          <svg viewBox="0 0 24 24">
            <path d="M4 12h16M14 6l6 6-6 6" />
          </svg>
        </a>
      </div>

      <article class="kd-vid kd-vid--featured" style="background: <?= kd_bg($featured['img'], $featured['grad']) ?>">
        <span class="kd-vid__tag"><?= htmlspecialchars($featured['tag']) ?></span>
        <button class="kd-vid__play" type="button" data-video="<?= htmlspecialchars($featured['video']) ?>" aria-label="Play <?= htmlspecialchars($featured['title']) ?>"><?= $play ?></button>
        <div class="kd-vid__info">
          <div>
            <div class="kd-vid__title"><?= htmlspecialchars($featured['title']) ?></div>
            <div class="kd-vid__sub"><?= htmlspecialchars($featured['sub']) ?></div>
          </div>
          <span class="kd-vid__time"><?= $featured['time'] ?></span>
        </div>
      </article>
    </div>

    <div class="kd-work__grid" id="kd-grid">
      <?php foreach ($projects as $p): ?>
        <article class="kd-vid" data-cat="<?= $p['cat'] ?>" style="background: <?= kd_bg($p['img'], $p['grad']) ?>">
          <span class="kd-vid__tag"><?= htmlspecialchars($p['tag']) ?></span>
          <button class="kd-vid__play" type="button" data-video="<?= htmlspecialchars($p['video']) ?>" aria-label="Play <?= htmlspecialchars($p['title']) ?>"><?= $play ?></button>
          <div class="kd-vid__info">
            <div>
              <div class="kd-vid__title"><?= htmlspecialchars($p['title']) ?></div>
              <div class="kd-vid__sub"><?= htmlspecialchars($p['sub']) ?></div>
            </div>
            <span class="kd-vid__time"><?= $p['time'] ?></span>
          </div>
        </article>
      <?php endforeach; ?>
      <p class="kd-work__empty" id="kd-empty" hidden>No projects in this category yet.</p>
    </div>

    <div class="kd-work__more" id="work-all">Explore More Projects</div>
    <div class="kd-work__chips" role="group" aria-label="Filter projects">
      <?php foreach ($filters as $key => $label): ?>
        <button type="button" class="kd-chip<?= $key === 'all' ? ' is-active' : '' ?>" data-filter="<?= $key ?>" aria-pressed="<?= $key === 'all' ? 'true' : 'false' ?>"><?= htmlspecialchars($label) ?></button>
      <?php endforeach; ?>
    </div>
  </div>

  <dialog class="kd-modal" id="kd-modal">
    <button class="kd-modal__close" type="button" aria-label="Close video">×</button>
    <div class="kd-modal__body" id="kd-modal-body"></div>
  </dialog>
</section>

<script>
  (function() {
    var sec = document.getElementById('kd-work');
    if (!sec) return;

    // Category filter for the project tiles
    var chips = sec.querySelectorAll('.kd-chip'),
      tiles = sec.querySelectorAll('#kd-grid .kd-vid'),
      empty = document.getElementById('kd-empty');

    chips.forEach(function(chip) {
      chip.addEventListener('click', function() {
        var f = chip.getAttribute('data-filter'),
          shown = 0;
        chips.forEach(function(c) {
          var on = c === chip;
          c.classList.toggle('is-active', on);
          c.setAttribute('aria-pressed', on);
        });
        tiles.forEach(function(t) {
          var match = f === 'all' || (' ' + t.getAttribute('data-cat') + ' ').indexOf(' ' + f + ' ') > -1;
          t.hidden = !match;
          if (match) shown++;
        });
        empty.hidden = shown > 0;
      });
    });

    // Video lightbox (only opens when a video URL is set on the tile)
    var modal = document.getElementById('kd-modal'),
      body = document.getElementById('kd-modal-body');

    function closeModal() {
      body.innerHTML = '';
      if (modal.open) modal.close();
    }

    sec.querySelectorAll('.kd-vid__play').forEach(function(btn) {
      btn.addEventListener('click', function() {
        var src = btn.getAttribute('data-video');
        if (!src) return;
        body.innerHTML = /\.(mp4|webm)(\?|$)/i.test(src) ?
          '<video src="' + src + '" controls autoplay></video>' :
          '<iframe src="' + src + '" allow="autoplay; fullscreen" allowfullscreen></iframe>';
        modal.showModal();
      });
    });
    modal.querySelector('.kd-modal__close').addEventListener('click', closeModal);
    modal.addEventListener('click', function(e) {
      if (e.target === modal) closeModal();
    });
    modal.addEventListener('close', function() {
      body.innerHTML = '';
    });
  })();
</script>