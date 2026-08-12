

<style>
:root{
  --blue:     #1B3D7B;
  --blue-dk:  #122954;
  --blue-md:  #2451A0;
  --blue-lt:  #E8EFFE;
  --blue-xl:  #F0F4FF;
  --gold:     #F97316;
  --gold-dk:  #C45E0A;
  --gold-lt:  #FFF4EC;
  --gold-mid: #FDBA74;
  --green:    #059669;
  --white:    #FFFFFF;
  --bg:       #F6F8FD;
  --bg2:      #EEF3FF;
  --txt:      #0F172A;
  --txt2:     #475569;
  --txt3:     #94A3B8;
  --bdr:      #E2E8F0;
  --r:        10px;
  --rlg:      16px;
  --sh:       0 2px 8px rgba(0,0,0,.06);
  --shlg:     0 8px 32px rgba(27,61,123,.12);
  --trans:    all .22s ease;
}
/* Utilities */
.container{max-width:1200px;margin:0 auto;padding:0 24px}
.section{padding:88px 0}
.section-sm{padding:56px 0}
.flex{display:flex;align-items:center}
.gap-8{gap:8px} .gap-12{gap:12px} .gap-16{gap:16px} .gap-24{gap:24px}
.tag{display:inline-flex;align-items:center;gap:7px;font-family:'Poppins',sans-serif;font-size:11px;font-weight:700;letter-spacing:1.2px;text-transform:uppercase;background:var(--blue-lt);color:var(--blue);padding:5px 14px;border-radius:20px;margin-bottom:16px}
.tag.orange{background:var(--gold-lt);color:var(--gold)}
.tag .dot{width:6px;height:6px;border-radius:50%;background:currentColor;flex-shrink:0}
.sh{font-size:clamp(26px,3.8vw,40px);font-weight:800;margin-bottom:14px;letter-spacing:-.5px}
.sub{font-size:16px;color:var(--txt2);line-height:1.85;max-width:560px}
.btn{display:inline-flex;align-items:center;gap:9px;font-family:'Poppins',sans-serif;font-size:14px;font-weight:600;padding:11px 24px;border-radius:8px;border:2px solid transparent;cursor:pointer;transition:var(--trans);white-space:nowrap}
.btn-primary{background:var(--gold);color:#fff;border-color:var(--gold)}
.btn-primary:hover{background:var(--gold-dk);border-color:var(--gold-dk);transform:translateY(-2px);box-shadow:0 6px 20px rgba(249,115,22,.35)}
.btn-blue{background:var(--blue);color:#fff;border-color:var(--blue)}
.btn-blue:hover{background:var(--blue-dk);border-color:var(--blue-dk);transform:translateY(-2px);box-shadow:0 6px 20px rgba(27,61,123,.3)}
.btn-outline{background:transparent;color:var(--blue);border-color:var(--blue)}
.btn-outline:hover{background:var(--blue);color:#fff;transform:translateY(-2px)}
.btn-white{background:#fff;color:var(--blue);border-color:#fff}
.btn-white:hover{background:var(--blue-lt);transform:translateY(-2px)}
.btn-sm{padding:8px 18px;font-size:13px}


/* ════ PROCESS ════ */
.process{background:#fff}
.process-steps{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:0;margin-top:52px;position:relative}
.process-steps::before{content:'';position:absolute;top:30px;left:60px;right:60px;height:2px;background:linear-gradient(90deg,var(--blue-lt),var(--bdr));z-index:0;border-top:2px dashed var(--bdr)}
.proc-step{text-align:center;position:relative;z-index:1;padding:0 16px}
.proc-num{width:60px;height:60px;border-radius:50%;background:var(--blue);color:#fff;font-family:'Poppins',sans-serif;font-size:20px;font-weight:800;display:flex;align-items:center;justify-content:center;margin:0 auto 18px;border:4px solid #fff;box-shadow:0 0 0 2px var(--blue)}
.proc-step h4{font-size:15px;font-weight:700;margin-bottom:7px}
.proc-step p{font-size:13px;color:var(--txt2);line-height:1.7}
.proc-step:nth-child(2) .proc-num{background:var(--blue-md)}
.proc-step:nth-child(3) .proc-num{background:var(--gold)}
.proc-step:nth-child(4) .proc-num{background:var(--green)}



  /* ════ RESPONSIVE ════ */
  @media(max-width:960px){
    .hero-grid{grid-template-columns:1fr}
    .hero-card{display:none} 
    .why-wrap{grid-template-columns:1fr}
    .faq-wrap{grid-template-columns:1fr}
    .faq-cta-box{position:static}
    .contact-wrap{grid-template-columns:1fr}
    .footer-grid{grid-template-columns:1fr 1fr}
    .wp-panel{position:static}
    .process-steps::before{display:none}
  }
  @media(max-width:640px){
    .nav-links,.nav-right .btn-outline{display:none}
    .hamburger{display:flex}
    .topbar .tb-right{display:none}
    .section{padding:60px 0}
    .form-row{grid-template-columns:1fr}
    .footer-grid{grid-template-columns:1fr}
    .hc-svcs{grid-template-columns:repeat(3,1fr)}
    .rating-bar{flex-wrap:wrap}
    .rb-div{display:none}
    .recog-row{gap:20px}
  }

</style>

<!-- ════ HOW WE WORK ════ -->
<section class="process section" id="process">
  <div class="container">
    <div class="reveal" style="text-align:center;max-width:560px;margin:0 auto 0">
      <div class="tag orange"><span class="dot"></span>How We Work</div>
      <h2 class="sh">Simple process. Powerful results.</h2>
      <p class="sub" style="max-width:100%">From the first call to live delivery — here's exactly how we work with every client.</p>
    </div>
    <div class="process-steps">
      <div class="proc-step reveal">
        <div class="proc-num">1</div>
        <h4>Consultation & Discovery</h4>
        <p>We understand your business goals, target audience, and current challenges in a free 30-minute call.</p>
      </div>
      <div class="proc-step reveal">
        <div class="proc-num">2</div>
        <h4>Strategy & Proposal</h4>
        <p>Our team designs a custom digital strategy and shares a clear proposal with timeline and pricing.</p>
      </div>
      <div class="proc-step reveal">
        <div class="proc-num">3</div>
        <h4>Design & Development</h4>
        <p>We build, test, and review your solution — keeping you in the loop at every stage with regular updates.</p>
      </div>
      <div class="proc-step reveal">
        <div class="proc-num">4</div>
        <h4>Launch & Support</h4>
        <p>We go live, train your team, and provide dedicated post-launch support to ensure everything runs perfectly.</p>
      </div>
    </div>
  </div>
</section>
