
<style>

  .qtest-wrap {
    background: linear-gradient(135deg, #f6f8fd 0%, #ffffff 55%, #f8f7fd 100%);
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    padding: 80px 20px;
  }

  .qtest-inner {
    max-width: 1180px;
    margin: 0 auto;
  }

  .qtest-title {
    text-align: center;
    font-size: 40px;
    font-weight: 800;
    letter-spacing: -0.5px;
    color: #171a2b;
    margin: 0 0 50px;
    opacity: 0;
    transform: translateY(18px);
    animation: qtestFadeUp 0.7s ease forwards;
  }

  @keyframes qtestFadeUp {
    from { opacity: 0; transform: translateY(18px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .qtest-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }

  .qtest-card {
    background: #ffffff;
    border: 1px solid #ececf5;
    border-radius: 18px;
    padding: 30px 28px 26px;
    opacity: 0;
    transform: translateY(24px);
    transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
  }

  .qtest-card.qtest-in-view {
    animation: qtestCardIn 0.55s ease forwards;
  }

  .qtest-card:nth-child(1) { animation-delay: 0.05s; }
  .qtest-card:nth-child(2) { animation-delay: 0.15s; }
  .qtest-card:nth-child(3) { animation-delay: 0.25s; }

  @keyframes qtestCardIn {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .qtest-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(30,34,90,0.09);
    border-color: #dfe1f2;
  }

  .qtest-stars {
    display: flex;
    gap: 3px;
    margin-bottom: 18px;
  }

  .qtest-stars svg {
    width: 18px;
    height: 18px;
    color: #f5b942;
    opacity: 0;
    transform: scale(0.4) rotate(-20deg);
  }

  .qtest-card.qtest-in-view .qtest-stars svg {
    animation: qtestStarPop 0.4s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
  }

  .qtest-card.qtest-in-view .qtest-stars svg:nth-child(1) { animation-delay: 0.3s; }
  .qtest-card.qtest-in-view .qtest-stars svg:nth-child(2) { animation-delay: 0.37s; }
  .qtest-card.qtest-in-view .qtest-stars svg:nth-child(3) { animation-delay: 0.44s; }
  .qtest-card.qtest-in-view .qtest-stars svg:nth-child(4) { animation-delay: 0.51s; }
  .qtest-card.qtest-in-view .qtest-stars svg:nth-child(5) { animation-delay: 0.58s; }

  @keyframes qtestStarPop {
    from { opacity: 0; transform: scale(0.4) rotate(-20deg); }
    to   { opacity: 1; transform: scale(1) rotate(0deg); }
  }

  .qtest-quote {
    font-size: 14.5px;
    line-height: 1.7;
    font-style: italic;
    color: #40445a;
    margin: 0 0 26px;
  }

  .qtest-author {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .qtest-avatar {
    flex-shrink: 0;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: linear-gradient(135deg, #6d5bf5, #7b4ef2);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    font-weight: 700;
    transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .qtest-card:hover .qtest-avatar {
    transform: scale(1.1) rotate(-5deg);
  }

  .qtest-author-info {
    min-width: 0;
  }

  .qtest-author-name {
    font-size: 14.5px;
    font-weight: 700;
    color: #171a2b;
    margin: 0 0 3px;
  }

  .qtest-author-role {
    font-size: 12.5px;
    color: #7c7f92;
    margin: 0;
  }

  /* ---------- Responsive ---------- */

  @media (max-width: 900px) {
    .qtest-grid { grid-template-columns: 1fr; gap: 20px; }
    .qtest-title { font-size: 30px; }
  }

  @media (max-width: 480px) {
    .qtest-wrap { padding: 56px 16px; }
    .qtest-title { font-size: 24px; margin-bottom: 36px; }
    .qtest-card { padding: 24px 20px 22px; }
  }

  @media (prefers-reduced-motion: reduce) {
    .qtest-title, .qtest-card, .qtest-stars svg {
      animation: none !important;
      opacity: 1 !important;
      transform: none !important;
    }
    .qtest-card:hover { transform: none; }
    .qtest-card:hover .qtest-avatar { transform: none; }
  }

</style>

<section class="qtest-wrap">
  <div class="qtest-inner">

    <h2 class="qtest-title">What Our Bulk SMS Customers Say</h2>

    <div class="qtest-grid" id="qtestGrid">

      <div class="qtest-card">
        <div class="qtest-stars">
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        </div>
        <p class="qtest-quote">"Switched from our previous bulk SMS provider and saw immediate improvements in delivery rates. The SMS API is incredibly easy to integrate."</p>
        <div class="qtest-author">
          <div class="qtest-avatar">P</div>
          <div class="qtest-author-info">
            <p class="qtest-author-name">Priya Sharma</p>
            <p class="qtest-author-role">CTO, ShopNow</p>
          </div>
        </div>
      </div>

      <div class="qtest-card">
        <div class="qtest-stars">
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        </div>
        <p class="qtest-quote">"Their OTP SMS service is rock solid. We've sent millions of authentication codes with sub-3 second delivery and zero failures."</p>
        <div class="qtest-author">
          <div class="qtest-avatar">R</div>
          <div class="qtest-author-info">
            <p class="qtest-author-name">Rajesh Kumar</p>
            <p class="qtest-author-role">Head of Engineering, PaySecure</p>
          </div>
        </div>
      </div>

      <div class="qtest-card">
        <div class="qtest-stars">
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          <svg viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        </div>
        <p class="qtest-quote">"Best DLT-compliant bulk SMS gateway we've used. The real-time analytics dashboard gives us complete visibility into every campaign."</p>
        <div class="qtest-author">
          <div class="qtest-avatar">A</div>
          <div class="qtest-author-info">
            <p class="qtest-author-name">Anita Desai</p>
            <p class="qtest-author-role">Marketing Director, FashionHub</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  (function qtestInit() {
    var qtestCards = document.querySelectorAll('.qtest-card');

    var qtestObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('qtest-in-view');
          qtestObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    qtestCards.forEach(function (card) {
      qtestObserver.observe(card);
    });
  })();
</script>