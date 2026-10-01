<style>
  .kd-hero {
    --kd-red: #d7141a;
    --kd-red-dark: #b50f14;
    --kd-ink: #2b2f3a;
    --kd-text: #4a4f5a;
    position: relative;
    width: 100%;
    overflow: hidden;
    background: linear-gradient(100deg, #ffffff 0%, #f4f4f5 45%, #e9e9eb 100%);
    display: flex;
    align-items: center;
  }

  /* ---------- photo (right) ---------- */
  .kd-hero__media {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 62%;
    z-index: 1;
  }

  .kd-hero__media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: right center;
    display: block;
    -webkit-mask-image: linear-gradient(to right, transparent 0%, rgba(0, 0, 0, .55) 18%, #000 42%);
    mask-image: linear-gradient(to right, transparent 0%, rgba(0, 0, 0, .55) 18%, #000 42%);
  }

  /* ---------- content ---------- */
  .kd-hero__inner {
    position: relative;
    z-index: 3;
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 40px 6%;
  }

  .kd-hero__content {
    max-width: 640px;
  }

  .kd-hero__eyebrow {
    display: flex;
    align-items: center;
    gap: 16px;
    font-size: 12.5px;
    font-weight: 500;
    letter-spacing: 1.6px;
    text-transform: uppercase;
    color: var(--kd-text);
    margin-bottom: 26px;
  }

  .kd-hero__eyebrow::before {
    content: '';
    width: 34px;
    height: 2px;
    background: var(--kd-red);
  }

  .kd-hero__title {
    font-size: 52px;
    line-height: 1.12;
    font-weight: 800;
    letter-spacing: -1.2px;
    color: var(--kd-ink);
    margin-bottom: 26px;
  }

  .kd-hero__title span {
    color: var(--kd-red);
    display: inline;
  }

  .kd-hero__desc {
    font-size: 16px;
    line-height: 1.65;
    color: var(--kd-text);
    max-width: 560px;
    margin-bottom: 36px;
  }

  .kd-hero__actions {
    display: flex;
    flex-wrap: wrap;
    gap: 18px;
    margin-bottom: 48px;
  }

  .kd-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    height: 54px;
    padding: 0 34px;
    border-radius: 40px;
    text-decoration: none;
    cursor: pointer;
    transition: transform .2s ease, background .2s ease, box-shadow .2s ease, color .2s ease;
  }

  .kd-btn--primary {
    background: var(--kd-red);
    color: #fff;
    border: 2px solid var(--kd-red);
    box-shadow: 0 10px 22px rgba(215, 20, 26, .28);
  }

  .kd-btn--primary:hover {
    background: var(--kd-red-dark);
    border-color: var(--kd-red-dark);
    transform: translateY(-2px);
  }

  .kd-btn--ghost {
    background: rgba(255, 255, 255, .75);
    color: var(--kd-ink);
    border: 1.5px solid var(--kd-red);
  }

  .kd-btn--ghost:hover {
    background: var(--kd-red);
    color: #fff;
    transform: translateY(-2px);
  }

  .kd-btn--ghost svg {
    fill: var(--kd-red);
    transition: fill .2s;
  }

  .kd-btn--ghost:hover svg {
    fill: #fff;
  }

  .kd-btn:focus-visible {
    outline: 3px solid rgba(215, 20, 26, .4);
    outline-offset: 3px;
  }

  /* ---------- stats ---------- */
  .kd-stats {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
  }

  .kd-stat {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 0 34px;
  }

  .kd-stat:first-child {
    padding-left: 0;
  }

  .kd-stat+.kd-stat {
    border-left: 1px solid #d3d4d8;
  }

  .kd-stat__icon {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    border: 1.5px solid var(--kd-red);
    color: var(--kd-red);
    display: grid;
    place-items: center;
    flex: none;
  }

  .kd-stat__icon svg {
    width: 21px;
    height: 21px;
  }

  .kd-stat__num--hero {
    font-size: 18px;
    font-weight: 700;
    color: var(--kd-red-dark);
    line-height: 1.2;
  }

  .kd-stat__label--hero {
    font-size: 13px;
    color: var(--kd-red);
    line-height: 1.3;
  }

  /* ---------- tag badge ---------- */
  /* .kd-badge {
    position: absolute;
    z-index: 3;
    top: 8%;
    right: 3.2%;
    transform: rotate(-14deg);
    font-family: 'Caveat', cursive;
    font-weight: 700;
    font-size: clamp(22px, 2.3vw, 34px);
    line-height: 1.12;
    color: #fff;
    text-align: center;
    text-shadow: 0 2px 8px rgba(0, 0, 0, .4);
  }

  .kd-badge svg {
    display: block;
    margin: 4px auto 0;
    width: 110%;
    margin-left: -5%;
  } */

  /* ---------- responsive ---------- */
  @media (max-width: 1100px) {
    .kd-hero__media {
      width: 70%;
      opacity: .55;
    }

    .kd-badge {
      display: none;
    }
  }

  @media (max-width: 720px) {
    .kd-hero {
      min-height: 0;
    }

    .kd-hero__inner {
      padding: 60px 24px 120px;
    }

    .kd-hero__media {
      width: 100%;
      opacity: .22;
    }

    .kd-hero__actions {
      gap: 12px;
      margin-bottom: 36px;
    }

    .kd-btn {
      height: 50px;
      padding: 0 24px;
    }

    .kd-stats {
      gap: 18px;
    }

    .kd-stat {
      padding: 0;
      border: 0 !important;
    }

    .kd-hero__shape--a {
      width: 260px;
      height: 80px;
    }

    .kd-hero__shape--b {
      width: 140px;
      height: 120px;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .kd-btn {
      transition: none;
    }
  }
</style>

<section class="kd-hero" id="kd-hero">
  <div class="kd-hero__media">
    <img src="assets/images/video-image.jpg" alt="King Digital videographer shooting an interview in a studio">
  </div>

  <div class="kd-hero__inner">
    <div class="kd-hero__content">
      <div class="kd-hero__eyebrow">Video Production Services</div>

      <h1 class="kd-hero__title">
        Videos Get
        <span>Attention.</span><br>
        Stories
        <span>Drive Growth.</span>
      </h1>

      <p class="kd-hero__desc">
        From concept to final production, we create high-quality videos for brands,
        businesses, products and digital campaigns.
      </p>

      <div class="kd-hero__actions">
        <a href="contact.php" class="kd-btn kd-btn--primary">
          Start Your Video Project
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 12h16M14 6l6 6-6 6" />
          </svg>
        </a>
        <a href="portfolio.php" class="kd-btn kd-btn--ghost">
          <svg width="16" height="16" viewBox="0 0 24 24">
            <path d="M5 3l16 9-16 9z" />
          </svg>
          View Our Portfolio
        </a>
      </div>

      <div class="kd-stats">
        <div class="kd-stat">
          <div class="kd-stat__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="16" rx="2" />
              <path d="M10 9l5 3-5 3z" fill="currentColor" />
            </svg>
          </div>
          <div>
            <div class="kd-stat__num--hero"><span data-count="100">100</span></div>
            <div class="kd-stat__label--hero">Video Projects</div>
          </div>
        </div>
        <div class="kd-stat">
          <div class="kd-stat__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="8" r="3" />
              <circle cx="5" cy="10" r="2" />
              <circle cx="19" cy="10" r="2" />
              <path d="M6.5 19c0-3 2.5-5 5.5-5s5.5 2 5.5 5M1.5 17c0-2 1.5-3.5 3.5-3.5M22.5 17c0-2-1.5-3.5-3.5-3.5" />
            </svg>
          </div>
          <div>
            <div class="kd-stat__num--hero"><span data-count="50">50</span></div>
            <div class="kd-stat__label--hero">Happy Clients</div>
          </div>
        </div>
        <div class="kd-stat">
          <div class="kd-stat__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round">
              <path d="M12 3l2.7 5.6 6.1.9-4.4 4.3 1 6.1L12 17l-5.4 2.9 1-6.1L3.2 9.5l6.1-.9z" />
            </svg>
          </div>
          <div>
            <div class="kd-stat__num--hero"><span data-count="100">100</span>%</div>
            <div class="kd-stat__label--hero">Creative Focus</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  (function() {
    var hero = document.getElementById('kd-hero');
    if (!hero) return;

    // Count-up for the stats when the hero first enters view
    var nums = hero.querySelectorAll('[data-count]');
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function run() {
      nums.forEach(function(el) {
        var target = parseInt(el.getAttribute('data-count'), 10),
          start = null,
          dur = 1400;
        if (reduce) {
          el.textContent = target;
          return;
        }

        function step(ts) {
          if (!start) start = ts;
          var p = Math.min((ts - start) / dur, 1);
          el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3)));
          if (p < 1) requestAnimationFrame(step);
        }
        el.textContent = 0;
        requestAnimationFrame(step);
      });
    }

    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function(e) {
        if (e[0].isIntersecting) {
          run();
          io.disconnect();
        }
      }, {
        threshold: .35
      });
      io.observe(hero);
    } else {
      run();
    }

    // Smooth scroll for in-page buttons
    hero.querySelectorAll('a[href^="#"]').forEach(function(a) {
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