<style>
  .qk-features-wrap {
    background-color: white;
    padding: 40px 20px;
    font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  }

  .qk-features-grid {
    max-width: 1157px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    /* height: max-content; */
    padding: 40px;
  }

  .qk-feature-card {
    position: relative;
    background: #fff;
    border: 1px solid #ececec;
    border-radius: 18px;
    padding: 28px 26px 24px;
    overflow: hidden;
    display: flex;
    flex-direction: column;

    opacity: 0;
    transform: translateY(40px);

    transition:
      opacity .6s ease,
      transform .25s ease,
      box-shadow .25s ease,
      border-color .25s ease;
  }

  .qk-feature-card:nth-child(1) {
    transition-delay: .1s;
  }

  .qk-feature-card:nth-child(2) {
    transition-delay: .2s;
  }

  .qk-feature-card:nth-child(3) {
    transition-delay: .3s;
  }

  .qk-feature-card:nth-child(4) {
    transition-delay: .4s;
  }

  .qk-feature-card:nth-child(5) {
    transition-delay: .5s;
  }

  .qk-feature-card:nth-child(6) {
    transition-delay: .6s;
  }

  @keyframes qkFadeInUp {
    from {
      opacity: 0;
      transform: translateY(28px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }


  .qk-feature-card.show {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 0s !important;
  }

  .qk-feature-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, .09);
    border-color: #e2e2e2;
  }

  .qk-feature-blob {
    position: absolute;
    top: -30px;
    right: -30px;
    width: 110px;
    height: 110px;
    border-radius: 50%;
    opacity: 0.55;
    transition: transform 0.5s ease;
    z-index: 0;
  }

  .qk-feature-card:hover .qk-feature-blob {
    transform: scale(1.25) translate(-6px, 6px);
  }

  .qk-blob-purple {
    background: #ecdffb;
  }

  .qk-blob-green {
    background: #d9f2e3;
  }

  .qk-blob-blue {
    background: #dde6fb;
  }

  .qk-blob-yellow {
    background: #faedc4;
  }

  .qk-blob-pink {
    background: #fbdfe8;
  }

  .qk-blob-teal {
    background: #d7f1f2;
  }

  .qk-feature-icon {
    position: relative;
    z-index: 1;
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  }

  .qk-feature-card:hover .qk-feature-icon {
    transform: rotate(-6deg) scale(1.08);
  }

  .qk-icon-purple {
    background: #f2e6fc;
    color: #8b3fe8;
  }

  .qk-icon-green {
    background: #e2f7ea;
    color: #1f9d55;
  }

  .qk-icon-blue {
    background: #e5eaff;
    color: #3654e0;
  }

  .qk-icon-yellow {
    background: #fdf1cf;
    color: #d99a11;
  }

  .qk-icon-pink {
    background: #fce3ec;
    color: #e0447e;
  }

  .qk-icon-teal {
    background: #dbf4f5;
    color: #0f9aa6;
  }

  .qk-feature-icon svg {
    width: 24px;
    height: 24px;
  }

  .qk-feature-title {
    position: relative;
    z-index: 1;
    font-size: 20px;
    font-weight: 700;
    color: #16181d;
    margin: 0 0 12px;
  }

  .qk-feature-desc {
    position: relative;
    z-index: 1;
    font-size: 14.5px;
    line-height: 1.6;
    color: #6b6f76;
    margin: 0 0 22px;
    flex-grow: 1;
  }

  .qk-feature-footer {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 18px;
    border-top: 1px solid #eeeeee;
  }

  .qk-feature-tag {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.4px;
    padding: 6px 12px;
    border-radius: 999px;
  }

  .qk-tag-purple {
    background: #f2e6fc;
    color: #8b3fe8;
  }

  .qk-tag-green {
    background: #e2f7ea;
    color: #1f9d55;
  }

  .qk-tag-blue {
    background: #e5eaff;
    color: #3654e0;
  }

  .qk-tag-yellow {
    background: #fdf1cf;
    color: #b9860a;
  }

  .qk-tag-pink {
    background: #fce3ec;
    color: #e0447e;
  }

  .qk-tag-teal {
    background: #dbf4f5;
    color: #0f9aa6;
  }

  .qk-feature-link {
    font-size: 13.5px;
    font-weight: 600;
    color: #52565e;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
    transition: color 0.25s ease, gap 0.25s ease;
  }

  .qk-feature-link .qk-arrow {
    transition: transform 0.3s ease;
    display: inline-block;
  }

  .qk-feature-link:hover {
    color: #16181d;
  }

  .qk-feature-link:hover .qk-arrow {
    transform: translateX(4px);
  }

  /* ---------- Responsive ---------- */

  @media (max-width: 980px) {
    .qk-features-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 620px) {
    .qk-features-wrap {
      padding: 45px 16px;
    }

    .qk-features-grid {
      grid-template-columns: 1fr;
      gap: 18px;
    }

    .qk-feature-card {
      padding: 24px 20px 20px;
    }

    .qk-feature-title {
      font-size: 18px;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .qk-feature-card {
      animation: none;
      opacity: 1;
      transform: none;
    }

    .qk-feature-card:hover {
      transform: none;
    }
  }

  .ai_headeing {
    width: 100%;
    padding: 40px 20px;

  }

  .ait_3854 {
    width: 100%;
    margin: auto;
    display: flex;
    font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 900;
    align-items: center;
    justify-content: center;
  }

  .ai-content--heading {

    font-size: 48px;
    font-weight: 900;
    line-height: 1.2;
    color: #101827;
    margin-bottom: 20px;
    text-align: center;
  }

  .ait_3854 h2 {
    background: linear-gradient(90deg, #ef560d 0%, #ff9448 31%, #123d6b 68%, #ef560d 100%);
    background-size: 250% 100%;
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: aboutHeadingGradient 4s ease-in-out infinite;
    margin-right: 10px;
  }

  .dmi941 {
    width: 70%;
    display: block;
    margin: auto;
    /* background: saddlebrown; */
    text-align: center;

    p {
      width: 100%;
      font-size: 14px;
      line-height: 1.6;
      color: #424f63;
    }

  }


  .jsidfj91 {
    width: 100%;
    display: flex;
    display: none;


  }

  .home-about_content--upper-feature {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;

    padding: 8px 18px;
    /* margin-bottom: 18px; */
    margin: auto;

    border-radius: 999px;

    color: #041575;
    font-size: 14px;
    font-weight: 900;

    background: rgb(193 192 192 / 49%);
    border: 1px solid rgba(255, 255, 255, .18);

    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);

    overflow: hidden;
    isolation: isolate;
    z-index: 1;
  }

  /* .home-about_content--upper-feature::before, */
  .home-about_content--upper-feature::after {
    content: "";
    position: absolute;
    inset: 0;
    width: max-content;
    height: 7px;
    border-radius: 50%;
    background: #df4d0f31;
    z-index: -1;
    animation: homeAboutBlinkingDot 1.5s infinite;
  }

  .home-about_content--upper-feature::after {
    animation-delay: 1.2s;
  }

  @keyframes ripple {
    0% {
      transform: scale(1);
      opacity: .6;
    }

    100% {
      transform: scale(1.5);
      opacity: 0;
    }
  }

  .ai_headeing{
    opacity:0;
    transform:translateY(60px);
    transition:.8s ease;
}

.ai_headeing.in-view{
    opacity:1;
    transform:translateY(0);
}
</style>

<section class="qk-features-wrap">
  <div class="jsidfj91">
    <span class="home-about_content--upper-feature ">
      <span class="home-about_content--bullet"></span>
      <h3 style="font-size: 12px;">Ai</h3>
    </span>
  </div>

  <div class="ai_headeing">
    <div class="ait_3854">
      <h2 class="ai-content--heading">
        Ai
      </h2>
      <span class="ai-content--heading">Services</span>
    </div>

    <span class="dmi941">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto consequuntur minus eaque similique nam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus doloremque ratione rerum rem reiciendis natus veniam ipsum eaque, ut earum tempora consectetur adipisci doloribus sunt quos. Sit voluptas eum quam.</p>
    </span>

  </div>

  <div class="qk-features-grid" id="qkFeaturesGrid">

    <!-- Card 1 : AI Agent -->
    <div class="qk-feature-card">
      <div class="qk-feature-blob qk-blob-purple"></div>
      <div class="qk-feature-icon qk-icon-purple">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="8" width="18" height="12" rx="2" />
          <circle cx="9" cy="14" r="1" />
          <circle cx="15" cy="14" r="1" />
          <path d="M12 8V4" />
          <circle cx="12" cy="3" r="1" />
        </svg>
      </div>
      <h3 class="qk-feature-title">AI Agent</h3>
      <p class="qk-feature-desc">Build and deploy autonomous agents that handle support, sales, and follow-ups across every channel — no code required.</p>
      <div class="qk-feature-footer">
        <span class="qk-feature-tag qk-tag-purple">BUILD · DEPLOY</span>
        <a href="#" class="qk-feature-link">Learn more <span class="qk-arrow">→</span></a>
      </div>
    </div>

    <!-- Card 2 : AI Chatbot -->
    <div class="qk-feature-card">
      <div class="qk-feature-blob qk-blob-green"></div>
      <div class="qk-feature-icon qk-icon-green">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
        </svg>
      </div>
      <h3 class="qk-feature-title">AI Chatbot</h3>
      <p class="qk-feature-desc">Converse naturally on WhatsApp, RCS and web chat — with context carried across the whole conversation, not just one turn.</p>
      <div class="qk-feature-footer">
        <span class="qk-feature-tag qk-tag-green">CONVERSE · ENGAGE</span>
        <a href="#" class="qk-feature-link">Learn more <span class="qk-arrow">→</span></a>
      </div>
    </div>

    <!-- Card 3 : Knowledge Base -->
    <div class="qk-feature-card">
      <div class="qk-feature-blob qk-blob-blue"></div>
      <div class="qk-feature-icon qk-icon-blue">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
          <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
        </svg>
      </div>
      <h3 class="qk-feature-title">Knowledge Base</h3>
      <p class="qk-feature-desc">Feed your docs, tickets and product data into a RAG-powered base so every AI answer is grounded in your own content.</p>
      <div class="qk-feature-footer">
        <span class="qk-feature-tag qk-tag-blue">DOCS · TRAIN</span>
        <a href="#" class="qk-feature-link">Learn more <span class="qk-arrow">→</span></a>
      </div>
    </div>

    <!-- Card 4 : Voice AI -->
    <div class="qk-feature-card">
      <div class="qk-feature-blob qk-blob-yellow"></div>
      <div class="qk-feature-icon qk-icon-yellow">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" />
          <path d="M19 10v2a7 7 0 0 1-14 0v-2" />
          <line x1="12" y1="19" x2="12" y2="23" />
          <line x1="8" y1="23" x2="16" y2="23" />
        </svg>
      </div>
      <h3 class="qk-feature-title">Voice AI</h3>
      <p class="qk-feature-desc">Natural text-to-speech and speech-to-text built for call flows — deploy voice bots that sound like a real agent.</p>
      <div class="qk-feature-footer">
        <span class="qk-feature-tag qk-tag-yellow">SPEECH · TTS · STT</span>
        <a href="#" class="qk-feature-link">Learn more <span class="qk-arrow">→</span></a>
      </div>
    </div>

    <!-- Card 5 : Prompt Studio -->
    <div class="qk-feature-card">
      <div class="qk-feature-blob qk-blob-pink"></div>
      <div class="qk-feature-icon qk-icon-pink">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="4" y1="21" x2="4" y2="14" />
          <line x1="4" y1="10" x2="4" y2="3" />
          <line x1="12" y1="21" x2="12" y2="12" />
          <line x1="12" y1="8" x2="12" y2="3" />
          <line x1="20" y1="21" x2="20" y2="16" />
          <line x1="20" y1="12" x2="20" y2="3" />
          <line x1="1" y1="14" x2="7" y2="14" />
          <line x1="9" y1="8" x2="15" y2="8" />
          <line x1="17" y1="16" x2="23" y2="16" />
        </svg>
      </div>
      <h3 class="qk-feature-title">Prompt Studio</h3>
      <p class="qk-feature-desc">Design, version, and A/B test prompts visually — then push updates to live agents without a redeploy.</p>
      <div class="qk-feature-footer">
        <span class="qk-feature-tag qk-tag-pink">DESIGN · TEST</span>
        <a href="#" class="qk-feature-link">Learn more <span class="qk-arrow">→</span></a>
      </div>
    </div>

    <!-- Card 6 : AI Workflow -->
    <div class="qk-feature-card">
      <div class="qk-feature-blob qk-blob-teal"></div>
      <div class="qk-feature-icon qk-icon-teal">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="2" width="8" height="8" rx="2" />
          <rect x="14" y="14" width="8" height="8" rx="2" />
          <path d="M6 10v4a2 2 0 0 0 2 2h4" />
          <path d="M18 14v-2a2 2 0 0 0-2-2h-4" />
        </svg>
      </div>
      <h3 class="qk-feature-title">AI Workflow</h3>
      <p class="qk-feature-desc">Orchestrate multi-step automations that hand off between AI and human agents the moment a conversation needs one.</p>
      <div class="qk-feature-footer">
        <span class="qk-feature-tag qk-tag-teal">AUTOMATE · ORCHESTRATE</span>
        <a href="#" class="qk-feature-link">Learn more <span class="qk-arrow">→</span></a>
      </div>
    </div>

  </div>
</section>
<!-- 
<script>
  (function qkFeaturesInit() {
    var qkCards = document.querySelectorAll('.qk-feature-card');

    var qkObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.style.animationPlayState = 'running';
          qkObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.15
    });

    qkCards.forEach(function(qkCard) {
      qkObserver.observe(qkCard);
    });
  })();




  const cards = document.querySelectorAll(".qk-feature-card");

  const observer = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

      if (entry.isIntersecting) {

        entry.target.classList.add("show");

      } else {

        entry.target.classList.remove("show");

      }

    });

  }, {
    threshold: 0.25
  });

  cards.forEach(card => observer.observe(card));
</script> -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const aboutContent2 = document.querySelector('.ai_headeing');

    console.log(aboutContent2)

    if (!aboutContent2) return;

    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        entry.target.classList.toggle('in-view', entry.isIntersecting);
      });
    }, {
      threshold: 0.2, // fires once ~20% of the block is visible
      rootMargin: '0px 0px -10% 0px'
    });

    if (aboutContent2) revealObserver.observe(aboutContent2);

  });


  const cards = document.querySelectorAll(".qk-feature-card");

  const observer = new IntersectionObserver((entries) => {

    entries.forEach((entry) => {

      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        entry.target.classList.remove("show");
      }

    });

  }, {
    threshold: 0.2
  });

  cards.forEach((card) => {
    observer.observe(card);
  });
</script>