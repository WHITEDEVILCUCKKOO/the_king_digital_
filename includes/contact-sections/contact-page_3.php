
<style>
  :root{
    --blue:#2f6fed;
    --blue-dark:#0b2a5b;
    --text-dark:#0b2a5b;
    --text-body:#5b6474;
    --border:#e4e7ee;
    --bg-hero:#eef2fb;
    box-sizing:border-box;
  }
  *{box-sizing:border-box;}
  body{
    margin:0;
    font-family:'Segoe UI',Arial,Helvetica,sans-serif;
    color:var(--text-dark);
    background:#fff;
  }
  a{text-decoration:none;color:inherit;}

  /* ---- Hero ---- */
  .hero{
    background:var(--bg-hero);
    padding:56px 80px 64px;
    position:relative;
    overflow:hidden;
  }
  .breadcrumb{
    font-size:13px;
    letter-spacing:.05em;
    color:#8b93a3;
    font-weight:600;
    margin-bottom:18px;
  }
  .breadcrumb span{color:#8b93a3;}
  .hero h1{
    font-size:52px;
    margin:0 0 18px;
    font-weight:800;
    line-height:1.05;
  }
  .hero h1 .accent{color:var(--blue);}
  .hero p{
    max-width:560px;
    font-size:16px;
    color:var(--text-body);
    line-height:1.6;
    margin:0;
  }

  /* ---- Main section ---- */
  .contact-wrap{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:48px;
    padding:64px 80px;
    align-items:start;
  }

  /* Left column */
  .get-in-touch h2{
    font-size:28px;
    margin:0 0 14px;
    font-weight:800;
  }
  .get-in-touch > p{
    color:var(--text-body);
    font-size:15px;
    line-height:1.6;
    margin:0 0 32px;
    max-width:440px;
  }
  .info-row{
    display:flex;
    gap:18px;
    margin-bottom:26px;
  }
  .info-icon{
    width:48px;height:48px;
    border-radius:50%;
    display:flex;align-items:center;justify-content:center;
    flex-shrink:0;
    font-size:20px;
  }
  .icon-email{background:#e3edff;color:#2f6fed;}
  .icon-phone{background:#e4f8ec;color:#22a35a;}
  .icon-office{background:#ece4fb;color:#7c4fe0;}
  .info-row h3{
    margin:0 0 4px;
    font-size:16px;
    font-weight:700;
  }
  .info-row a.email-link{color:var(--blue);font-size:14.5px;}
  .info-row p{
    margin:2px 0 0;
    font-size:14px;
    color:var(--text-body);
    line-height:1.5;
  }

  .map-box{
    margin-top:8px;
    border:1px solid var(--border);
    border-radius:10px;
    overflow:hidden;
    position:relative;
    height:260px;
  }
  .map-box iframe{
    width:100%;height:100%;border:0;display:block;
  }

  /* Right column - form */
  .form-card{
    border:1px solid var(--border);
    border-radius:14px;
    padding:36px;
    box-shadow:0 10px 30px rgba(20,30,60,0.06);
  }
  .form-card h2{
    font-size:24px;
    margin:0 0 8px;
    font-weight:800;
  }
  .form-card > p{
    color:var(--text-body);
    font-size:14.5px;
    margin:0 0 26px;
  }
  .form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:18px 20px;
  }
  .field{display:flex;flex-direction:column;}
  .field.full{grid-column:1 / -1;}
  .field label{
    font-size:13.5px;
    font-weight:700;
    margin-bottom:7px;
  }
  .field label .req{color:#e05252;margin-left:2px;}
  .field input,
  .field select,
  .field textarea{
    border:1px solid var(--border);
    border-radius:8px;
    padding:11px 14px;
    font-size:14px;
    font-family:inherit;
    color:var(--text-dark);
    outline:none;
    width:100%;
  }
  .field input::placeholder,
  .field textarea::placeholder{color:#a7adba;}
  .field input:focus,
  .field select:focus,
  .field textarea:focus{
    border-color:var(--blue);
    box-shadow:0 0 0 3px rgba(47,111,237,0.12);
  }
  .phone-field{
    display:flex;
    gap:8px;
  }
  .phone-field select{
    width:78px;
    flex-shrink:0;
  }
  .checks{
    display:flex;
    flex-wrap:wrap;
    row-gap:14px;
    column-gap:34px;
  }
  .check-item{
    display:flex;
    align-items:center;
    gap:8px;
    font-size:14.5px;
  }
  .check-item input{
    width:16px;height:16px;
    accent-color:var(--blue);
    margin:0;
  }
  textarea{
    resize:vertical;
    min-height:100px;
  }
  .submit-btn{
    grid-column:1/-1;
    background:var(--blue);
    color:#fff;
    border:none;
    border-radius:8px;
    padding:15px;
    font-size:15.5px;
    font-weight:700;
    cursor:pointer;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    transition:background .15s ease;
  }
  .submit-btn:hover{background:#2557c7;}
  .footnote{
    grid-column:1/-1;
    text-align:center;
    font-size:12.5px;
    color:#9aa2b1;
    margin:2px 0 0;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:6px;
  }

  @media (max-width: 900px){
    .hero{padding:40px 24px 48px;}
    .hero h1{font-size:38px;}
    .contact-wrap{grid-template-columns:1fr;padding:40px 24px;}
    .form-grid{grid-template-columns:1fr;}
    .field.full{grid-column:1;}
    .phone-field select{width:70px;}
  }
</style>


  <section class="hero">
    <div class="breadcrumb">HOME <span>/ CONTACT</span></div>
    <h1>Contact <span class="accent">Us</span></h1>
    <p>We'd love to hear from you. Get in touch with our team for partnerships, bulk pricing, integrations, or any business-related questions.</p>
  </section>

  <section class="contact-wrap">
    <!-- Left: Get in touch -->
    <div class="get-in-touch">
      <h2>Get In Touch</h2>
      <p>Our team is here to help. Reach out to us through any of the channels below and we'll get back to you as soon as possible.</p>

      <div class="info-row">
        <div class="info-icon icon-email">✉️</div>
        <div>
          <h3>Email Us</h3>
          <a class="email-link" href="mailto:info@kingdigital.in">info@kingdigital.in</a> /
          <a class="email-link" href="mailto:support@kingdigital.com">support@kingdigital.com</a>
          <p>We'll respond within 24 hours.</p>
        </div>
      </div>

      <div class="info-row">
        <div class="info-icon icon-phone">📞</div>
        <div>
          <h3>Call Us</h3>
          <p style="color:var(--text-dark);font-weight:600;margin-bottom:2px;">+91-9211-33-9966 | +91-9210763636</p>
          <p>Mon – Fri, 9:00 AM – 6:00 PM (IST)</p>
        </div>
      </div>

      <div class="info-row">
        <div class="info-icon icon-office">📍</div>
        <div>
          <h3>Our Office</h3>
          <p>2nd Floor, Plot no- 456, Kakrola Housing complex,
                        Opposite Metro Pillar 796, Dwarka Mor, New Delhi-110078
                        INDIA</p>
        </div>
      </div>

      <div class="map-box">
        <iframe
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218.89753890086996!2d77.02833697199826!3d28.61895204856855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0313cad7ce3b%3A0xc015fca821293315!2sKING%20DIGITAL%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1787640188024!5m2!1sen!2sin">
        </iframe>
      </div>
    </div>

    <!-- Right: Form -->
    <div class="form-card">
      <h2>Send Us a Message</h2>
      <p>Fill out the form below and our team will get back to you shortly.</p>

      <form class="form-grid" onsubmit="event.preventDefault(); alert('Message sent!');">
        <div class="field">
          <label>Full Name<span class="req">*</span></label>
          <input type="text" placeholder="Enter your full name" required>
        </div>
        <div class="field">
          <label>Business Email<span class="req">*</span></label>
          <input type="email" placeholder="Enter your business email" required>
        </div>

        <div class="field">
          <label>Company Name<span class="req">*</span></label>
          <input type="text" placeholder="Enter your company name" required>
        </div>
        <div class="field">
          <label>Phone Number<span class="req">*</span></label>
          <div class="phone-field">
            <select>
              <option>🇮🇳 +91</option>
              <option>🇺🇸 +1</option>
              <option>🇬🇧 +44</option>
            </select>
            <input type="tel" placeholder="+91 98765 43210" required>
          </div>
        </div>

        <div class="field full">
          <label>Business Type<span class="req">*</span></label>
          <select required>
            <option value="" selected disabled>Select business type</option>
            <option>Startup</option>
            <option>Small Business</option>
            <option>Enterprise</option>
            <option>Agency</option>
            <option>Individual</option>
          </select>
        </div>

        <div class="field full">
          <label>Interested In<span class="req">*</span></label>
          <div class="checks">
            <label class="check-item"><input type="checkbox"> Partnership</label>
            <label class="check-item"><input type="checkbox"> Bulk Purchase</label>
            <label class="check-item"><input type="checkbox"> Integration</label>
            <label class="check-item"><input type="checkbox"> Reseller</label>
            <label class="check-item"><input type="checkbox"> Other</label>
          </div>
        </div>

        <div class="field full">
          <label>Message<span class="req">*</span></label>
          <textarea placeholder="Tell us more about your requirements..." required></textarea>
        </div>

        <button type="submit" class="submit-btn">➤ Send Message</button>
        <p class="footnote">🔒 Your information is safe with us. We never share your details.</p>
      </form>
    </div>
  </section>
