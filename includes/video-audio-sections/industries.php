<?php
$industries = [
  ['home',  'Real Estate',       '<path d="M3.5 11.5L12 4l8.5 7.5"/><path d="M6 10v9.5h12V10"/><path d="M10 19.5v-5h4v5"/><path d="M16.5 6.5V4.5h2v4"/>'],
  ['heart', 'Healthcare',        '<path d="M12 20s-7.5-4.6-7.5-10.2A4.3 4.3 0 0 1 12 7.2a4.3 4.3 0 0 1 7.5 2.6C19.5 15.4 12 20 12 20z"/><path d="M12 10v5M9.5 12.5h5"/>'],
  ['cart',  'E-commerce',        '<path d="M3 4h2.5l2 10h10.5l2-7.5H6.4"/><circle cx="9" cy="18.6" r="1.4"/><circle cx="16.6" cy="18.6" r="1.4"/><path d="M9 9.5h9"/>'],
  ['food',  'Food & Beverage',   '<path d="M6 3v6.5a2.2 2.2 0 0 0 2.2 2.2H9V21"/><path d="M4 3v6.5M9 3v6.5M19 3c-2.2 1.4-3.2 3.8-3.2 6.8 0 1.5 1 2.4 3.2 2.4V21"/>'],
  ['edu',   'Education',         '<path d="M2.5 9L12 4.5 21.5 9 12 13.5z"/><path d="M6.5 11.2V16c0 1.4 2.5 2.7 5.5 2.7s5.5-1.3 5.5-2.7v-4.8"/><path d="M21.5 9v6"/>'],
  ['fash',  'Fashion & Lifestyle', '<path d="M12 8V6.6a2 2 0 1 1 2 2"/><path d="M12 8L3 15.3a1.2 1.2 0 0 0 .8 2.1h16.4a1.2 1.2 0 0 0 .8-2.1z"/>'],
  ['corp',  'Corporate',         '<rect x="5" y="3.5" width="9.5" height="17"/><path d="M14.5 9.5H19v11"/><path d="M8 7.5h3.5M8 11h3.5M8 14.5h3.5M16.7 13v.5M16.7 16.5v.5M3.5 20.5h17"/>'],
  ['tech',  'Technology',        '<rect x="7" y="7" width="10" height="10" rx="1.6"/><rect x="10.2" y="10.2" width="3.6" height="3.6"/><path d="M9.5 3.5V7M14.5 3.5V7M9.5 17v3.5M14.5 17v3.5M3.5 9.5H7M3.5 14.5H7M17 9.5h3.5M17 14.5h3.5"/>'],
];
?>

<style>

  .kd-ind {
    --kd-red: #f0141b;
    --kd-navy: #1d2b3a;
    --kd-slate: #56657a;
    position: relative;
    width: 100%;
    overflow: hidden;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(180deg, #f4f6f9 0%, #eef1f5 100%);
    padding: 40px 0;
  }

  .kd-ind__inner {
    position: relative;
    z-index: 3;
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 8% 0 6.6%;
    display: grid;
    grid-template-columns: 24% 1fr;
    gap: 4.5%;
    align-items: center;
  }

  /* ---------- text ---------- */
  .kd-ind__eyebrow {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 11.5px;
    font-weight: 500;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    color: var(--kd-navy);
    margin-bottom: 20px;
    white-space: nowrap;
  }

  .kd-ind__eyebrow::before {
    content: '';
    width: 34px;
    height: 2px;
    background: var(--kd-red);
  }

  .kd-ind__title {
    font-size: clamp(36px, 3.7vw, 56px);
    line-height: 1.08;
    font-weight: 800;
    letter-spacing: -1.4px;
    color: var(--kd-navy);
    margin-bottom: 20px;
  }

  .kd-ind__title span {
    color: var(--kd-red);
    display: block;
  }

  .kd-ind__desc {
    font-size: 14.5px;
    line-height: 1.65;
    color: var(--kd-slate);
    max-width: 300px;
  }

  /* ---------- cards ---------- */
  .kd-ind__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  .kd-ind-card {
    background: #fff;
    border-radius: 12px;
    padding: 22px 26px 20px;
    box-shadow: 0 8px 24px rgba(40, 56, 80, .07), 0 1px 2px rgba(40, 56, 80, .04);
    transition: transform .25s ease, box-shadow .25s ease;
  }

  .kd-ind-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 30px rgba(240, 20, 27, .12);
  }

  .kd-ind-card__icon {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: #ffe5e5;
    color: var(--kd-red);
    display: grid;
    place-items: center;
    margin-bottom: 16px;
  }

  .kd-ind-card__icon svg {
    width: 25px;
    height: 25px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.7;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .kd-ind-card__name {
    font-size: 14px;
    font-weight: 600;
    color: var(--kd-navy);
  }

  /* single entrance: cards appear once, staggered */
  .kd-ind.is-armed .kd-ind-card {
    opacity: 0;
    transform: translateY(16px);
  }

  .kd-ind.is-in .kd-ind-card {
    opacity: 1;
    transform: none;
    transition: opacity .55s ease var(--d, 0s), transform .55s ease var(--d, 0s), box-shadow .25s ease;
  }

  .kd-ind.is-in .kd-ind-card:hover {
    transform: translateY(-3px);
    transition-delay: 0s;
  }

  /* ---------- decorative stripes ---------- */
  .kd-ind__deco {
    position: absolute;
    z-index: 1;
    pointer-events: none;
  }

  .kd-ind__deco--g1 {
    left: -30px;
    top: -20px;
    width: 46px;
    height: 260px;
    background: #e6e9ee;
    transform: rotate(-32deg);
    transform-origin: top left;
  }

  .kd-ind__deco--g2 {
    left: 12px;
    top: -20px;
    width: 18px;
    height: 200px;
    background: #e9ecf1;
    transform: rotate(-32deg);
    transform-origin: top left;
  }

  .kd-ind__deco--g3 {
    right: 30px;
    bottom: -40px;
    width: 44px;
    height: 220px;
    background: #e3e6eb;
    transform: rotate(32deg);
    transform-origin: bottom right;
  }

  .kd-ind__deco--r1 {
    right: 14px;
    bottom: -30px;
    width: 20px;
    height: 190px;
    background: linear-gradient(180deg, #ff2a2f, #c80f15);
    border-radius: 12px;
    transform: rotate(32deg);
    transform-origin: bottom right;
  }

  .kd-ind__deco--r2 {
    right: -6px;
    bottom: -30px;
    width: 12px;
    height: 120px;
    background: #ff2a2f;
    border-radius: 12px;
    transform: rotate(32deg);
    transform-origin: bottom right;
  }

  /* ---------- responsive ---------- */
  @media (max-width: 1100px) {
    .kd-ind__inner {
      grid-template-columns: 1fr;
      gap: 36px;
      padding: 0 6%;
    }

    .kd-ind__desc {
      max-width: 520px;
    }

    .kd-ind__grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 520px) {
    .kd-ind {
      padding: 50px 0;
    }

    .kd-ind__grid {
      gap: 14px;
    }

    .kd-ind-card {
      padding: 18px 16px;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .kd-ind.is-armed .kd-ind-card {
      opacity: 1;
      transform: none;
    }

    .kd-ind-card {
      transition: none;
    }
  }
</style>

<section class="kd-ind" id="kd-ind">

  <div class="kd-ind__inner">
    <div class="kd-ind__text">
      <div class="kd-ind__eyebrow">Industries We Create For</div>
      <h2 class="kd-ind__title">Industries<span>We Serve.</span></h2>
      <p class="kd-ind__desc">From local businesses to global brands, we create content that helps every industry grow, connect and make an impact.</p>
    </div>

    <div class="kd-ind__grid">
      <?php foreach ($industries as $i => $ind): ?>
        <article class="kd-ind-card" style="--d: <?= number_format($i * 0.06, 2) ?>s">
          <div class="kd-ind-card__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><?= $ind[2] ?></svg></div>
          <h3 class="kd-ind-card__name"><?= htmlspecialchars($ind[1]) ?></h3>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script>
  (function() {
    var sec = document.getElementById('kd-ind');
    if (!sec) return;

    // Cards appear once, staggered, the first time the section is in view
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