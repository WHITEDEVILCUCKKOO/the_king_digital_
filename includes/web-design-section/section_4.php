<!-- ==================== SECTION 4: OUR RECENT PROJECTS ==================== -->

<style>
  .kdj-section { font-family: 'Segoe UI', Arial, sans-serif; background: #fff; padding: 56px 20px; }
  .kdj-container { max-width: 1180px; margin: 0 auto; }

  .kdj-top-row { display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 30px; flex-wrap: wrap; gap: 14px; }
  .kdj-eyebrow { font-size: 12.5px; font-weight: 700; letter-spacing: 1.5px; color: #2f6df3; margin: 0 0 6px; }
  .kdj-heading { font-size: 44px; line-height: 1.1; font-weight: 800; color: #101828; margin: 0; }
  .kdj-heading em { color: #4E8DFF; font-style: normal; }

  .kdj-view-all { padding: 9px 18px; border: 1.5px solid #2f6df3; border-radius: 20px; font-size: 12.5px; font-weight: 600; color: #2f6df3; background: #fff; cursor: pointer; text-decoration: none; transition: all .25s ease; }
  .kdj-view-all:hover { background: #2f6df3; color: #fff; transform: translateY(-2px); }

  .kdj-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }

  /* CARD */
  .kdj-card { border-radius: 12px; overflow: hidden; border: 1px solid #eaecf0; background: #fff; opacity: 0; transform: translateY(14px); animation: kdj-card-in .5s ease forwards; transition: transform .3s ease, box-shadow .3s ease; }
  @keyframes kdj-card-in { to { opacity: 1; transform: translateY(0); } }
  .kdj-card:nth-child(1) { animation-delay: .02s; }
  .kdj-card:nth-child(2) { animation-delay: .10s; }
  .kdj-card:nth-child(3) { animation-delay: .18s; }
  .kdj-card:nth-child(4) { animation-delay: .26s; }
  .kdj-card:hover { transform: translateY(-6px); box-shadow: 0 16px 32px rgba(16, 24, 40, .12); }

  /* IMAGE VIEWPORT */
  .kdj-thumb { --kdj-h: 230px; width: 100%; height: var(--kdj-h); position: relative; overflow: hidden; background: #f4f6f8; }

  /* !important: theme/bootstrap ke global img rules se bachne ke liye */
  .kdj-thumb img {
    display: block !important;
    width: 100% !important;
    height: auto !important;
    max-width: none !important;
    max-height: none !important;
    object-fit: initial !important;
    transform: translate3d(0, 0, 0);
    will-change: transform;
    user-select: none;
    pointer-events: none;
    /* mouse leave par wapas top */
    transition: transform .8s cubic-bezier(.25, .46, .45, .94);
  }

  /* HOVER: JS ne --kdj-scroll-distance aur --kdj-duration set kiya hota hai */
  .kdj-thumb.kdj-image-scroll img {
    transform: translate3d(0, var(--kdj-scroll-distance, 0px), 0);
    transition: transform var(--kdj-duration, 4s) linear;
  }

  /* INFO */
  .kdj-info { padding: 14px 16px; display: flex; justify-content: space-between; align-items: center; background: #fff; }
  .kdj-info-title { font-size: 14px; font-weight: 700; color: #101828; margin: 0 0 2px; }
  .kdj-info-sub { font-size: 11.5px; color: #667085; }
  .kdj-arrow { color: #2f6df3; font-size: 15px; transition: transform .25s ease; }
  .kdj-card:hover .kdj-arrow { transform: translateX(4px); }

  /* RESPONSIVE */
  @media (max-width: 1100px) { .kdj-grid { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 900px)  { .kdj-heading { font-size: 34px; } .kdj-thumb { --kdj-h: 260px; } }
  @media (max-width: 560px) {
    .kdj-section { padding: 40px 15px; }
    .kdj-grid { grid-template-columns: 1fr; }
    .kdj-heading { font-size: 26px; }
    .kdj-thumb { --kdj-h: 280px; }
    .kdj-top-row { align-items: flex-start; }
  }

  /* NOTE: purana "@media (hover: none)" block hata diya gaya hai.
     Wo kuch laptops / DevTools mode mein hover effect poora band kar deta tha. */
</style>


<section class="kdj-section">
  <div class="kdj-container">

    <div class="kdj-top-row">
      <div>
        <p class="kdj-eyebrow">OUR WORK</p>
        <h2 class="kdj-heading">Our Recent <em>Projects</em></h2>
      </div>
      <a class="kdj-view-all" href="portfolio.php">View All Projects &#8594;</a>
    </div>

    <div class="kdj-grid" id="kdjGrid">

      <div class="kdj-card">
        <div class="kdj-thumb">
          <img src="assets/images/website_img/extra_5.png" alt="Interior Design Website">
        </div>
        <div class="kdj-info">
          <div>
            <p class="kdj-info-title">Interior Design</p>
            <span class="kdj-info-sub">Web Design</span>
          </div>
          <span class="kdj-arrow">&#8594;</span>
        </div>
      </div>

      <div class="kdj-card">
        <div class="kdj-thumb">
          <img src="assets/images/website_img/extra_4.png" alt="Healthy Food Delivery Website">
        </div>
        <div class="kdj-info">
          <div>
            <p class="kdj-info-title">Healthy Food Delivery</p>
            <span class="kdj-info-sub">Web Development</span>
          </div>
          <span class="kdj-arrow">&#8594;</span>
        </div>
      </div>

      <div class="kdj-card">
        <div class="kdj-thumb">
          <img src="assets/images/website_img/extra_6.png" alt="Luxury Villas Website">
        </div>
        <div class="kdj-info">
          <div>
            <p class="kdj-info-title">Retire By Choice</p>
            <span class="kdj-info-sub">Web Design &amp; Development</span>
          </div>
          <span class="kdj-arrow">&#8594;</span>
        </div>
      </div>

      <div class="kdj-card">
        <div class="kdj-thumb">
          <img src="assets/images/website_img/extra_7.png" alt="Digital Agency Website">
        </div>
        <div class="kdj-info">
          <div>
            <p class="kdj-info-title">Home Insurance</p>
            <span class="kdj-info-sub">Web Development</span>
          </div>
          <span class="kdj-arrow">&#8594;</span>
        </div>
      </div>

    </div>
  </div>
</section>


<script>
(function () {
  'use strict';

  var thumbs = document.querySelectorAll('.kdj-thumb');
  var SPEED = 150; // px per second (kam = slow scroll, zyada = fast)

  /* Exact scroll distance nikalo (hidden hissa) */
  function calculateScroll(thumb) {
    var img = thumb.querySelector('img');
    if (!img || !img.naturalHeight) {
      thumb.dataset.scrollable = 'false';
      return false;
    }

    var imageHeight = img.getBoundingClientRect().height;
    var boxHeight = thumb.clientHeight;
    var distance = imageHeight - boxHeight;

    if (distance > 1) {
      thumb.style.setProperty('--kdj-scroll-distance', '-' + distance + 'px');
      // lambi image = zyada time, taaki speed har card mein same lage
      var secs = Math.min(Math.max(distance / SPEED, 2), 12);
      thumb.style.setProperty('--kdj-duration', secs.toFixed(2) + 's');
      thumb.dataset.scrollable = 'true';
      return true;
    }

    thumb.style.setProperty('--kdj-scroll-distance', '0px');
    thumb.dataset.scrollable = 'false';
    return false;
  }

  thumbs.forEach(function (thumb) {
    var img = thumb.querySelector('img');
    if (!img) return;

    /* Image load hone par calculate (cached image ho ya nahi) */
    if (img.complete) {
      calculateScroll(thumb);
    } else {
      img.addEventListener('load', function () { calculateScroll(thumb); }, { once: true });
    }

    /* Image path galat ho to console mein warning */
    img.addEventListener('error', function () {
      console.warn('KDJ: image load nahi hui ->', img.getAttribute('src'));
    });

    /* HOVER: top -> bottom */
    thumb.addEventListener('mouseenter', function () {
      if (!calculateScroll(thumb)) return;
      thumb.classList.remove('kdj-image-scroll');
      void thumb.offsetWidth; // reflow
      thumb.classList.add('kdj-image-scroll');
    });

    /* LEAVE: bottom -> top */
    thumb.addEventListener('mouseleave', function () {
      thumb.classList.remove('kdj-image-scroll');
    });
  });

  /* Resize par dobara calculate */
  var resizeTimer;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      thumbs.forEach(calculateScroll);
    }, 150);
  });

  /* Page poora load hone par ek baar aur calculate (fonts/layout shift ke baad) */
  window.addEventListener('load', function () {
    thumbs.forEach(calculateScroll);
  });
})();
</script>