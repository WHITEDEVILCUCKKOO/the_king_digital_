<?php

$features = [
  ['rocket',  'Proven Results',        'We deliver measurable growth with data-driven strategies and real business impact.'],
  ['team',    'Expert Team',           'A skilled team of designers, marketers, developers and AI specialists — all under one roof.'],
  ['gear',    'End-to-End Support',    'From strategy to execution, we’re with you at every step of your journey.'],
  ['bulb',    'Innovative Approach',   'We use the latest tools and trends to keep your brand ahead of the competition.'],
  ['shield',  'Transparent Process',   'No hidden costs, no false promises — just honest work and clear communication.'],
  ['hand',    'Long-Term Partnership', 'Your growth is our goal. We build relationships, not just projects.'],
];

$stats = [
  ['case',  '500+',   'Happy Clients'],
  ['play',  '1,200+', 'Projects Delivered'],
  ['badge', '98%',    'Client Satisfaction'],
  ['chart', '3x',     'Average Growth'],
];

$icons = [
  'rocket' => '<path d="M14.5 4.5c3-1.6 5-1.5 5-1.5s.1 2-1.5 5l-5 5-3.5-3.5z"/><path d="M9 9.5 6 10l-2 3 4 .5M14.5 15l-.5 3-3 2-.5-4"/><path d="M6.5 17.5c-1 .5-2 1.5-2.5 3 1.5-.5 2.5-1.5 3-2.5"/><circle cx="15.2" cy="8.8" r="1.1"/>',
  'team'   => '<circle cx="12" cy="8" r="3"/><circle cx="5.5" cy="10" r="2.1"/><circle cx="18.5" cy="10" r="2.1"/><path d="M6.8 19c0-3.2 2.4-5.2 5.2-5.2s5.2 2 5.2 5.2M1.8 17.5c0-2 1.4-3.4 3.4-3.4M22.2 17.5c0-2-1.4-3.4-3.4-3.4"/>',
  'gear'   => '<circle cx="12" cy="12" r="3.2"/><path d="M12 2.8l1.6 2.2 2.7-.5.9 2.6 2.6.9-.5 2.7L21.5 12l-2.2 1.6.5 2.7-2.6.9-.9 2.6-2.7-.5L12 21.2l-1.6-2.2-2.7.5-.9-2.6-2.6-.9.5-2.7L2.5 12l2.2-1.6-.5-2.7 2.6-.9.9-2.6 2.7.5z"/>',
  'bulb'   => '<path d="M9 18h6M10 21h4M12 3a6 6 0 0 0-3.6 10.8c.7.6 1.1 1.3 1.1 2.2h5c0-.9.4-1.6 1.1-2.2A6 6 0 0 0 12 3z"/><path d="M12 7.5v3.2M12 10.7l-1.4-1.3M12 10.7l1.4-1.3"/>',
  'shield' => '<path d="M12 2.8 19.5 5.6v5.6c0 4.6-3.1 8.3-7.5 10-4.4-1.7-7.5-5.4-7.5-10V5.6z"/><path d="m8.6 12 2.5 2.6 4.4-5"/>',
  'hand'   => '<path d="M2.5 11.5 6 8l4-1 3 1.5 3-1.5 3.5 1.5 2 3.5-5.5 6.5-3.2.7-2-1.5"/><path d="M6 8 2.5 11.5l5 5M10.5 13l2.5 2M13 8.5l-3 3 2 2 3.5-3"/>',
  'case'   => '<rect x="3" y="7.5" width="18" height="12.5" rx="2.2"/><path d="M8.5 7.5V5.8c0-.9.7-1.6 1.6-1.6h3.8c.9 0 1.6.7 1.6 1.6v1.7M3 13h18M10.5 13v1.8h3V13"/>',
  'play'   => '<rect x="3" y="5" width="18" height="14" rx="3"/><path d="m10.2 9.2 4.6 2.8-4.6 2.8z" fill="currentColor"/>',
  'badge'  => '<rect x="3.5" y="3.5" width="17" height="17" rx="3"/><path d="m12 7.2 1.5 3.1 3.4.5-2.5 2.4.6 3.4-3-1.6-3 1.6.6-3.4-2.5-2.4 3.4-.5z" fill="currentColor"/>',
  'chart'  => '<path d="M4 20h16M5.5 16.5l4.2-4.4 3 3L19 8M14.5 7.5H19.4V12.4"/><path d="M5 20v-2.5M9 20v-4M13 20v-3M17 20v-6" />',
];
?>

<style>
  .kd-why {
    --kd-red: #e0141b;
    --kd-ink: #1f2430;
    --kd-text: #5c6270;
    --kd-navy: #18202e;
    position: relative;
    width: 100%;
    overflow: hidden;
    background: #fff;
    padding: 40px 60px;
    box-sizing: border-box;
  }

  /* ---------- corner accents ---------- */
  .kd-why__c {
    position: absolute;
    pointer-events: none;
    z-index: 1;
  }

  .kd-why__c--tl-grey {
    top: 0;
    left: 0;
    width: 7%;
    height: 15%;
    background: #e9eaee;
    clip-path: polygon(0 0, 100% 0, 40% 100%, 0 100%);
    opacity: .8;
  }

  .kd-why__c--tl-red {
    top: 0;
    left: 0;
    width: 4.5%;
    height: 11%;
    background: linear-gradient(135deg, #e0141b, #b50d12);
    clip-path: polygon(0 0, 100% 0, 35% 100%, 0 100%);
  }

  .kd-why__c--bl-red {
    bottom: 0;
    left: 0;
    width: 4%;
    height: 12%;
    background: linear-gradient(135deg, #e0141b, #b50d12);
    clip-path: polygon(0 0, 100% 100%, 0 100%);
  }

  .kd-why__c--bl-grey {
    bottom: 0;
    left: 0;
    width: 8%;
    height: 22%;
    background: #eceef2;
    clip-path: polygon(0 0, 100% 100%, 0 100%);
    opacity: .8;
  }

  .kd-why__c--br-red {
    bottom: 0;
    right: 0;
    width: 3.5%;
    height: 13%;
    background: linear-gradient(135deg, #e0141b, #b50d12);
    clip-path: polygon(100% 0, 100% 100%, 0 100%);
  }

  .kd-why__c--br-grey {
    bottom: 0;
    right: 0;
    width: 8%;
    height: 26%;
    background: #eceef2;
    clip-path: polygon(100% 0, 100% 100%, 0 100%);
    opacity: .8;
  }

  .kd-why__c--r-red {
    top: 21%;
    right: 0;
    width: 1.6%;
    height: 17%;
    background: var(--kd-red);
    clip-path: polygon(100% 0, 100% 100%, 0 100%, 40% 40%);
  }

  /* ---------- hero (text + photo) ---------- */
  .kd-why__hero {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 24px;
    min-height: 290px;
  }

  .kd-why__text {
    flex: 0 1 50%;
    padding-top: 24px;
  }

  .kd-why__eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 10.5px;
    font-weight: 500;
    letter-spacing: .9px;
    text-transform: uppercase;
    color: var(--kd-text);
    margin: 0 0 14px;
  }

  .kd-why__eyebrow::before {
    content: '';
    width: 28px;
    height: 2px;
    background: var(--kd-red);
  }

  .kd-why__title {
    margin: 0 0 18px;
    font-size: clamp(36px, 4.6vw, 64px);
    line-height: 1.12;
    font-weight: 700;
    letter-spacing: -1.2px;
    color: var(--kd-ink);
  }

  .kd-why__title span {
    display: block;
    color: var(--kd-red);
  }

  .kd-why__desc {
    margin: 0;
    font-size: clamp(12.5px, 1.05vw, 15px);
    line-height: 1.6;
    color: var(--kd-text);
    max-width: 480px;
  }

  .kd-why__media {
    position: relative;
    flex: 0 0 49%;
    margin-right: -5%;
    margin-top: -72px;
    height: 330px;
    filter: drop-shadow(-5px 0 0 var(--kd-red));
  }

  .kd-why__media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: 50% 40%;
    display: block;
    clip-path: polygon(16% 0, 100% 0, 100% 100%, 9% 100%, 0 52%);
  }

  /* ---------- feature cards ---------- */
  .kd-why__grid {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 14px;
    margin-top: 22px;
  }

  .kd-feat {
    background: #fff;
    border: 1px solid #ececf0;
    border-radius: 8px;
    padding: 18px 14px 22px;
    box-shadow: 0 6px 18px rgba(30, 36, 50, .06);
  }

  .kd-feat__icon {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #ffe9e9;
    color: var(--kd-red);
    display: grid;
    place-items: center;
    margin-bottom: 14px;
  }

  .kd-feat__icon svg,
  .kd-stat__icon svg {
    width: 22px;
    height: 22px;
    fill: none;
    stroke: currentColor;
    stroke-width: 1.7;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .kd-feat__title {
    margin: 0 0 8px;
    font-size: 13px;
    font-weight: 600;
    line-height: 1.3;
    color: var(--kd-ink);
  }

  .kd-feat__text {
    margin: 0;
    font-size: 10.5px;
    line-height: 1.55;
    color: var(--kd-text);
  }

  /* ---------- bottom row ---------- */
  .kd-why__bottom {
    position: relative;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 28px;
    margin-top: 28px;
  }

  .kd-why__stats {
    flex: 0 0 56%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    background: var(--kd-navy);
    border-radius: 8px;
    padding: 20px 8px;
  }

  .kd-stat {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 0 8px;
  }

  .kd-stat+.kd-stat {
    border-left: 1px solid rgba(255, 255, 255, .18);
  }

  .kd-stat__icon {
    color: var(--kd-red);
    flex: none;
  }

  .kd-stat__icon svg {
    width: 30px;
    height: 30px;
    stroke-width: 1.8;
  }

  .kd-stat__num {
    display: block;
    font-size: 18px;
    font-weight: 700;
    line-height: 1.1;
    color: #fff;
  }

  .kd-stat__label {
    display: block;
    font-size: 9.5px;
    line-height: 1.3;
    color: #c6cad3;
    margin-top: 3px;
  }

  .kd-why__cta {
    display: flex;
    align-items: center;
    gap: 34px;
    flex: 1 1 auto;
    justify-content: flex-end;
  }

  .kd-why__script {
    font-family: 'Caveat', cursive;
    font-weight: 700;
    font-size: clamp(22px, 2.3vw, 32px);
    line-height: 1.05;
    color: var(--kd-ink);
    transform: rotate(-4deg);
    text-align: center;
  }

  .kd-why__script svg {
    display: block;
    width: 82%;
    margin: 2px auto 0;
    color: var(--kd-red);
  }

  .kd-why__btn {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: var(--kd-red);
    color: #fff;
    font-family: inherit;
    font-size: 12.5px;
    font-weight: 600;
    text-decoration: none;
    padding: 14px 26px;
    border-radius: 999px;
    white-space: nowrap;
    box-shadow: 0 8px 18px rgba(224, 20, 27, .28);
    transition: background .2s ease;
  }

  .kd-why__btn:hover {
    background: #bd0e14;
  }

  .kd-why__btn:focus-visible {
    outline: 3px solid var(--kd-ink);
    outline-offset: 3px;
  }

  .kd-why__btn svg {
    width: 16px;
    height: 16px;
    fill: none;
    stroke: currentColor;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  /* ---------- responsive ---------- */
  @media (max-width: 1100px) {
    .kd-why__grid {
      grid-template-columns: repeat(3, 1fr);
    }

    .kd-why__bottom {
      flex-direction: column;
      align-items: stretch;
    }

    .kd-why__stats {
      flex-basis: auto;
    }

    .kd-why__cta {
      justify-content: center;
    }
  }

  @media (max-width: 820px) {
    .kd-why {
      padding-top: 56px;
    }

    .kd-why__hero {
      flex-direction: column;
    }

    .kd-why__text {
      flex-basis: auto;
      padding-top: 0;
    }

    .kd-why__media {
      flex-basis: auto;
      width: 110%;
      margin: 0 -5% 0 0;
      height: 240px;
    }

    .kd-why__grid {
      grid-template-columns: repeat(2, 1fr);
    }

    .kd-why__stats {
      grid-template-columns: repeat(2, 1fr);
      row-gap: 18px;
    }

    .kd-stat:nth-child(3) {
      border-left: 0;
    }
  }

  @media (max-width: 520px) {
    .kd-why__grid {
      grid-template-columns: 1fr;
    }

    .kd-why__cta {
      flex-direction: column;
      gap: 18px;
    }
  }
</style>

<section class="kd-why" id="kd-why">

  <div class="kd-why__hero">
    <div class="kd-why__text">
      <div class="kd-why__eyebrow">Why Choose King Digital</div>
      <h2 class="kd-why__title">Your Success<span>Is Our Priority.</span></h2>
      <p class="kd-why__desc">We’re not just a service provider — we’re your digital growth partner. Here’s why businesses trust King Digital for their marketing and AI needs.</p>
    </div>

    <div class="kd-why__media">
      <img src="assets/images/video-image.jpg" alt="King Digital team editing video in the studio">
    </div>
  </div>

  <div class="kd-why__grid">
    <?php foreach ($features as $f): ?>
      <div class="kd-feat">
        <div class="kd-feat__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><?= $icons[$f[0]] ?></svg></div>
        <h3 class="kd-feat__title"><?= htmlspecialchars($f[1]) ?></h3>
        <p class="kd-feat__text"><?= htmlspecialchars($f[2]) ?></p>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="kd-why__bottom">
    <div class="kd-why__stats">
      <?php foreach ($stats as $s): ?>
        <div class="kd-stat">
          <div class="kd-stat__icon"><svg viewBox="0 0 24 24" aria-hidden="true"><?= $icons[$s[0]] ?></svg></div>
          <div>
            <span class="kd-stat__num"><?= htmlspecialchars($s[1]) ?></span>
            <span class="kd-stat__label"><?= htmlspecialchars($s[2]) ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="kd-why__cta">
      <a class="kd-why__btn" href="contact.php">Get Started Today
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M4 12h16M14 6l6 6-6 6" />
        </svg>
      </a>
    </div>
  </div>
</section>