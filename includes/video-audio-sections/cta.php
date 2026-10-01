<?php

$points = [
  'Free strategy call',
  'Reply within 24 hours',
  'No-obligation quote',
];
?>

<style>

  .kd-cta {
    --kd-red: #e3161c;
    position: relative;
    width: 100%;
    overflow: hidden;
    isolation: isolate;
    color: #fff;
    background:
      radial-gradient(ellipse 55% 80% at 8% 0%, rgba(227, 22, 28, .22), transparent 65%),
      linear-gradient(110deg, #0b0d12 0%, #12151c 60%, #1a1d26 100%);
    padding: 40px 0;
  }

  .kd-cta__inner {
    position: relative;
    z-index: 3;
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 6%;
    display: grid;
    grid-template-columns: 1.05fr .95fr;
    gap: 50px;
    align-items: center;
  }

  /* ---------- content ---------- */
  .kd-cta__eyebrow {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 11.5px;
    font-weight: 500;
    letter-spacing: 1.6px;
    text-transform: uppercase;
    color: #c3c6ce;
    margin-bottom: 22px;
  }

  .kd-cta__eyebrow::before {
    content: '';
    width: 34px;
    height: 2px;
    background: var(--kd-red);
  }

  .kd-cta__title {
    font-size: clamp(34px, 4.2vw, 56px);
    line-height: 1.1;
    font-weight: 800;
    letter-spacing: -1.4px;
    margin-bottom: 22px;
  }

  .kd-cta__title span {
    color: var(--kd-red);
  }

  .kd-cta__desc {
    font-size: 16px;
    line-height: 1.7;
    color: #c9ccd4;
    max-width: 520px;
    margin-bottom: 34px;
  }

  .kd-cta__actions {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin-bottom: 30px;
  }

  .kd-cta__btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    height: 56px;
    padding: 0 34px;
    border-radius: 40px;
    font: 600 15px 'Poppins', sans-serif;
    text-decoration: none;
    cursor: pointer;
    transition: transform .2s ease, background .2s ease, border-color .2s ease, box-shadow .2s ease;
  }

  .kd-cta__btn svg {
    width: 18px;
    height: 18px;
    fill: none;
    stroke: currentColor;
    stroke-width: 2.3;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: transform .2s ease;
  }

  .kd-cta__btn--primary {
    background: var(--kd-red);
    color: #fff;
    border: 2px solid var(--kd-red);
    box-shadow: 0 12px 28px rgba(227, 22, 28, .4);
  }

  .kd-cta__btn--primary:hover {
    background: #c40f15;
    border-color: #c40f15;
    transform: translateY(-2px);
  }

  .kd-cta__btn--primary:hover svg {
    transform: translateX(4px);
  }

  .kd-cta__btn--ghost {
    color: #fff;
    background: rgba(255, 255, 255, .04);
    border: 1.5px solid rgba(255, 255, 255, .28);
  }

  .kd-cta__btn--ghost:hover {
    border-color: #fff;
    background: rgba(255, 255, 255, .1);
    transform: translateY(-2px);
  }

  .kd-cta__btn:focus-visible {
    outline: 3px solid rgba(255, 255, 255, .75);
    outline-offset: 3px;
  }

  .kd-cta__points {
    display: flex;
    flex-wrap: wrap;
    gap: 12px 28px;
    list-style: none;
    margin-bottom: 30px;
  }

  .kd-cta__points li {
    display: flex;
    align-items: center;
    gap: 9px;
    font-size: 13.5px;
    color: #dfe1e6;
  }

  .kd-cta__points svg {
    width: 18px;
    height: 18px;
    flex: none;
    fill: none;
    stroke: var(--kd-red);
    stroke-width: 2.6;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .kd-cta__call {
    font-size: 14px;
    color: #aeb2bc;
  }

  .kd-cta__call a {
    color: #fff;
    font-weight: 600;
    text-decoration: none;
    border-bottom: 1px solid var(--kd-red);
    padding-bottom: 1px;
  }

  .kd-cta__call a:hover {
    color: var(--kd-red);
  }

  .kd-cta__call a:focus-visible {
    outline: 2px solid #fff;
    outline-offset: 3px;
  }

  /* ---------- media ---------- */
  .kd-cta__media {
    position: relative;
    height: 420px;
  }

  .kd-cta__photo {
    position: absolute;
    inset: 0;
    clip-path: polygon(10% 0, 100% 0, 90% 100%, 0 100%);
    background: #000;
    box-shadow: 0 30px 60px rgba(0, 0, 0, .5);
  }

  .kd-cta__photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .kd-cta__photo::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg, rgba(12, 14, 19, .55), rgba(12, 14, 19, 0) 55%);
  }

  .kd-cta__stripe {
    position: absolute;
    z-index: 2;
    left: -6px;
    bottom: 0;
    width: 46px;
    height: 62%;
    background: linear-gradient(0deg, var(--kd-red), transparent);
    clip-path: polygon(0 100%, 55% 0, 100% 0, 45% 100%);
  }

  .kd-cta__chip {
    position: absolute;
    z-index: 3;
    left: 12%;
    bottom: -18px;
    display: flex;
    align-items: center;
    gap: 14px;
    background: #fff;
    color: #1d2230;
    border-radius: 14px;
    padding: 14px 20px;
    box-shadow: 0 16px 36px rgba(0, 0, 0, .35);
  }

  .kd-cta__chip strong {
    font-size: 24px;
    font-weight: 700;
    color: var(--kd-red);
    line-height: 1;
  }

  .kd-cta__chip span {
    font-size: 12.5px;
    line-height: 1.35;
    color: #4a5060;
  }

  /* ---------- decoration ---------- */
  .kd-cta__shape {
    position: absolute;
    z-index: 1;
    pointer-events: none;
  }

  .kd-cta__shape--tl1 {
    left: 0;
    top: 0;
    width: 90px;
    height: 90px;
    background: var(--kd-red);
    clip-path: polygon(0 0, 52% 0, 0 52%);
  }

  .kd-cta__shape--tl2 {
    left: 0;
    top: 0;
    width: 90px;
    height: 90px;
    background: #8d0b10;
    clip-path: polygon(60% 0, 74% 0, 0 74%, 0 60%);
  }

  .kd-cta__shape--br1 {
    right: 0;
    bottom: 0;
    width: 110px;
    height: 110px;
    background: #eceef2;
    clip-path: polygon(100% 0, 100% 100%, 12% 100%);
  }

  .kd-cta__shape--br2 {
    right: 0;
    bottom: 0;
    width: 110px;
    height: 110px;
    background: var(--kd-red);
    clip-path: polygon(100% 8%, 100% 40%, 40% 100%, 6% 100%);
  }

  /* single entrance: content rises in once */
  .kd-cta.is-armed .kd-cta__inner>* {
    opacity: 0;
    transform: translateY(20px);
  }

  .kd-cta.is-in .kd-cta__inner>* {
    opacity: 1;
    transform: none;
    transition: opacity .7s ease, transform .7s ease;
  }

  .kd-cta.is-in .kd-cta__inner>*:nth-child(2) {
    transition-delay: .15s;
  }

  /* ---------- responsive ---------- */
  @media (max-width: 1000px) {
    .kd-cta {
      padding: 70px 0;
    }

    .kd-cta__inner {
      grid-template-columns: 1fr;
      gap: 60px;
    }

    .kd-cta__media {
      height: 320px;
    }
  }

  @media (max-width: 560px) {
    .kd-cta__btn {
      width: 100%;
    }

    .kd-cta__media {
      height: 240px;
    }

    .kd-cta__chip {
      left: 6%;
      padding: 12px 16px;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .kd-cta.is-armed .kd-cta__inner>* {
      opacity: 1;
      transform: none;
    }

    .kd-cta__btn,
    .kd-cta__btn svg {
      transition: none;
    }
  }
</style>

<section class="kd-cta" id="kd-cta">

  <div class="kd-cta__inner">
    <div class="kd-cta__content">
      <div class="kd-cta__eyebrow">Let’s Work Together</div>
      <h2 class="kd-cta__title">Ready to Create Videos That <span>Drive Growth?</span></h2>
      <p class="kd-cta__desc">Tell us about your brand and goals. We’ll come back with a clear plan, a transparent quote and ideas worth shooting.</p>

      <div class="kd-cta__actions">
        <a class="kd-cta__btn kd-cta__btn--primary" href="contact.php">
          Start Your Video Project
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M4 12h16M14 6l6 6-6 6" />
          </svg>
        </a>
        <a class="kd-cta__btn kd-cta__btn--ghost" href="https://wa.me/919211339966" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M4 20l1.3-4.2A8 8 0 1 1 8.4 18.8z" />
            <path d="M9.2 9.2c0 3 2.6 5.6 5.6 5.6l1.1-1.3-1.8-1-.8.6a3.2 3.2 0 0 1-1.6-1.6l.6-.8-1-1.8z" />
          </svg>
          Chat on WhatsApp
        </a>
      </div>

      <ul class="kd-cta__points">
        <?php foreach ($points as $pt): ?>
          <li><svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M5 12.5l4.5 4.5L19 7.5" />
            </svg><?= htmlspecialchars($pt) ?></li>
        <?php endforeach; ?>
      </ul>

      <p class="kd-cta__call">Prefer to talk? Call us on <a href="tel:+919210763636">+91-9210-76-3636</a></p>
    </div>

    <div class="kd-cta__media">
      <div class="kd-cta__photo"><img src="assets/images/hero-video.png" alt="King Digital crew filming in a studio"></div>
      <span class="kd-cta__stripe"></span>
      <div class="kd-cta__chip"><strong>100+</strong><span>video projects<br>delivered</span></div>
    </div>
  </div>
</section>

<script>
  (function() {
    var sec = document.getElementById('kd-cta');
    if (!sec) return;

    // Content rises in once, the first time the section is in view
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