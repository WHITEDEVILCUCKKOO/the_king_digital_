

<section class="promo-sms-services" id="promoSmsServices">

  <div class="promo-sms-services__container">

    <!-- ================= LEFT IMAGE ================= -->
    <div class="promo-sms-services__image-wrap">

      <div class="promo-sms-services__image-bg"></div>

      <div class="promo-sms-services__image-card">
        <img
          src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=1400&q=90"
          alt="SMS Marketing and Mobile Communication Services"
          loading="lazy"
        >
      </div>

      <!-- Decorative SMS Badge -->
      <div class="promo-sms-services__floating-badge promo-sms-services__floating-badge--sms">
        <span class="promo-sms-services__badge-icon">✉</span>
        <div>
          <strong>Smart SMS</strong>
          <small>Fast Communication</small>
        </div>
      </div>

      <!-- Decorative Delivery Badge -->
      <div class="promo-sms-services__floating-badge promo-sms-services__floating-badge--delivery">
        <span class="promo-sms-services__delivery-check">✓</span>
        <div>
          <strong>High Delivery</strong>
          <small>Reliable Service</small>
        </div>
      </div>

    </div>


    <!-- ================= RIGHT CONTENT ================= -->
    <div class="promo-sms-services__content">

      <span class="promo-sms-services__eyebrow">
        OUR SMS SERVICES
      </span>

      <h2>
        Powerful SMS Solutions for
        <span>Every Business Need</span>
      </h2>

      <p class="promo-sms-services__intro">
        Choose the right SMS solution to connect with your customers,
        send important updates, promote your business and deliver
        time-sensitive information instantly.
      </p>


      <!-- ================= SERVICE 1 ================= -->
      <a
        href="service-bluk-sms.php"
        class="promo-sms-services__service-card"
        aria-label="Explore Bulk SMS Service"
      >

        <div class="promo-sms-services__service-icon">
          <span>01</span>
        </div>

        <div class="promo-sms-services__service-content">
          <h3>Bulk SMS Service</h3>
          <p>
            Reach a large audience instantly with fast, reliable and
            scalable bulk SMS campaigns for your business.
          </p>
        </div>

        <div class="promo-sms-services__arrow">
          →
        </div>

      </a>


      <!-- ================= SERVICE 2 ================= -->
      <a
        href="/transactional-sms/"
        class="promo-sms-services__service-card"
        aria-label="Explore Transactional SMS Service"
      >

        <div class="promo-sms-services__service-icon">
          <span>02</span>
        </div>

        <div class="promo-sms-services__service-content">
          <h3>Transactional SMS</h3>
          <p>
            Send important alerts, confirmations, account updates and
            other essential information directly to your customers.
          </p>
        </div>

        <div class="promo-sms-services__arrow">
          →
        </div>

      </a>


      <!-- ================= SERVICE 3 ================= -->
      <a
        href="/otp-sms/"
        class="promo-sms-services__service-card"
        aria-label="Explore OTP SMS Service"
      >

        <div class="promo-sms-services__service-icon">
          <span>03</span>
        </div>

        <div class="promo-sms-services__service-content">
          <h3>OTP SMS Service</h3>
          <p>
            Deliver secure one-time passwords instantly to support safe
            logins, verification and authentication processes.
          </p>
        </div>

        <div class="promo-sms-services__arrow">
          →
        </div>

      </a>

    </div>

  </div>

</section>


<style>

#promoSmsServices {
  --ps-red: #b61f29;
  --ps-red-dark: #94151e;
  --ps-navy: #243348;
  --ps-text: #5e6d7e;
  --ps-border: #e0e5ea;
  --ps-white: #ffffff;

  position: relative;
  width: 100%;
  overflow: hidden;
  padding: 55px 24px;
  background:
    radial-gradient(
      circle at 8% 50%,
      rgba(182, 31, 41, 0.055) 0%,
      transparent 28%
    ),
    linear-gradient(
      135deg,
      #f7f8fa 0%,
      #ffffff 52%,
      #f8f8f9 100%
    );

  font-family: 'Segoe UI', Roboto, Helvetica Neue, Arial, sans-serif;
}



#promoSmsServices .promo-sms-services__container {
  width: 100%;
  max-width: 1240px;
  margin: 0 auto;

  display: grid;
  grid-template-columns: minmax(400px, 1fr) minmax(500px, 1fr);
  align-items: center;
  gap: 70px;
}


#promoSmsServices .promo-sms-services__image-wrap {
  position: relative;
  width: 100%;
  min-height: 430px;

  display: flex;
  align-items: center;
  justify-content: center;
}


/* Background Circle */

#promoSmsServices .promo-sms-services__image-bg {
  position: absolute;

  width: 390px;
  height: 390px;

  border-radius: 50%;

  background:
    radial-gradient(
      circle at center,
      rgba(199, 216, 235, 0.72) 0%,
      rgba(218, 229, 240, 0.5) 55%,
      rgba(255, 255, 255, 0) 72%
    );

  border: 1px solid rgba(182, 31, 41, 0.06);
}


/* Main Image Card */

#promoSmsServices .promo-sms-services__image-card {
  position: relative;
  z-index: 2;

  width: 330px;
  height: 400px;

  overflow: hidden;

  border-radius: 26px;

  background: #ffffff;

  box-shadow:
    0 25px 60px rgba(29, 43, 59, 0.16),
    0 0 0 7px rgba(255, 255, 255, 0.65);
}


#promoSmsServices .promo-sms-services__image-card::after {
  content: "";

  position: absolute;
  inset: 0;

  pointer-events: none;

  background:
    linear-gradient(
      180deg,
      rgba(30, 45, 65, 0.02) 0%,
      rgba(30, 45, 65, 0.12) 100%
    );
}


#promoSmsServices .promo-sms-services__image-card img {
  width: 100%;
  height: 100%;

  display: block;

  object-fit: cover;
  object-position: center;

  transform: scale(1.03);

  transition: transform 0.5s ease;
}


#promoSmsServices .promo-sms-services__image-wrap:hover
.promo-sms-services__image-card img {
  transform: scale(1.08);
}



#promoSmsServices .promo-sms-services__floating-badge {
  position: absolute;
  z-index: 4;

  display: flex;
  align-items: center;
  gap: 11px;

  padding: 12px 15px;

  border: 1px solid rgba(220, 226, 232, 0.95);
  border-radius: 16px;

  background: rgba(255, 255, 255, 0.94);

  box-shadow:
    0 15px 35px rgba(27, 39, 54, 0.12);

  backdrop-filter: blur(10px);
}


#promoSmsServices .promo-sms-services__floating-badge strong {
  display: block;

  color: var(--ps-navy);

  font-size: 12px;
  font-weight: 700;
}


#promoSmsServices .promo-sms-services__floating-badge small {
  display: block;

  margin-top: 3px;

  color: #8793a0;

  font-size: 9px;
}


#promoSmsServices .promo-sms-services__badge-icon {
  width: 40px;
  height: 40px;

  display: flex;
  align-items: center;
  justify-content: center;

  flex: 0 0 40px;

  border-radius: 11px;

  color: #ffffff;

  background:
    linear-gradient(
      135deg,
      #c72b35,
      #9d1620
    );

  font-size: 17px;
}


#promoSmsServices .promo-sms-services__delivery-check {
  width: 40px;
  height: 40px;

  display: flex;
  align-items: center;
  justify-content: center;

  flex: 0 0 40px;

  border-radius: 50%;

  color: #ffffff;

  background:
    linear-gradient(
      135deg,
      #3f9b71,
      #247052
    );

  font-size: 18px;
  font-weight: 700;
}


#promoSmsServices .promo-sms-services__floating-badge--sms {
  top: 38px;
  left: 5%;
}


#promoSmsServices .promo-sms-services__floating-badge--delivery {
  right: 0;
  bottom: 45px;
}


#promoSmsServices .promo-sms-services__content {
  width: 100%;
}


#promoSmsServices .promo-sms-services__eyebrow {
  display: inline-flex;

  align-items: center;

  margin-bottom: 12px;

  color: var(--ps-red);

  font-size: 11px;
  font-weight: 800;

  letter-spacing: 1.6px;
}


#promoSmsServices .promo-sms-services__content h2 {
  max-width: 560px;

  margin: 0 0 14px;

  color: black; 

  font-size: clamp(30px, 3vw, 44px);
  line-height: 1.2;

  font-weight: 800;

  letter-spacing: -1.1px;
}


#promoSmsServices .promo-sms-services__content h2 span {
  color: var(--ps-red);
}


#promoSmsServices .promo-sms-services__intro {
  max-width: 600px;

  margin: 0 0 24px;

  color: var(--ps-text);

  font-size: 15px;
  line-height: 1.75;
}


#promoSmsServices .promo-sms-services__service-card {
  position: relative;

  width: 100%;

  display: flex;
  align-items: center;

  gap: 16px;

  margin-top: 12px;

  padding: 17px 18px;

  border: 1px solid var(--ps-border);
  border-radius: 16px;

  background: rgba(255, 255, 255, 0.88);

  text-decoration: none !important;

  box-shadow:
    0 8px 22px rgba(30, 42, 56, 0.035);

  transition:
    transform 0.25s ease,
    border-color 0.25s ease,
    box-shadow 0.25s ease,
    background 0.25s ease;
}


#promoSmsServices .promo-sms-services__service-card:hover {
  transform: translateY(-3px);

  border-color: rgba(182, 31, 41, 0.35);

  background: #ffffff;

  box-shadow:
    0 15px 32px rgba(182, 31, 41, 0.1);
}


/* Number Icon */

#promoSmsServices .promo-sms-services__service-icon {
  width: 48px;
  height: 48px;

  flex: 0 0 48px;

  display: flex;
  align-items: center;
  justify-content: center;

  border-radius: 14px;

  color: var(--ps-red);

  background:
    linear-gradient(
      135deg,
      #faeeee,
      #f8e2e4
    );
}


#promoSmsServices .promo-sms-services__service-icon span {
  font-size: 14px;
  font-weight: 800;
}


/* Service Text */

#promoSmsServices .promo-sms-services__service-content {
  flex: 1;
  min-width: 0;
}


#promoSmsServices .promo-sms-services__service-content h3 {
  margin: 0 0 5px;

  color: var(--ps-navy);

  font-size: 16px;
  line-height: 1.3;

  font-weight: 750;
}


#promoSmsServices .promo-sms-services__service-content p {
  margin: 0;

  color: var(--ps-text);

  font-size: 12px;
  line-height: 1.55;
}


/* Arrow */

#promoSmsServices .promo-sms-services__arrow {
  width: 36px;
  height: 36px;

  flex: 0 0 36px;

  display: flex;
  align-items: center;
  justify-content: center;

  border-radius: 50%;

  color: var(--ps-red);

  background: #f9eeee;

  font-size: 20px;

  transition:
    color 0.25s ease,
    background 0.25s ease,
    transform 0.25s ease;
}


#promoSmsServices .promo-sms-services__service-card:hover
.promo-sms-services__arrow {
  color: #ffffff;

  background: var(--ps-red);

  transform: translateX(3px);
}


/* =========================================================
TABLET
========================================================= */

@media (max-width: 1024px) {

  #promoSmsServices {
    padding: 50px 24px;
  }


  #promoSmsServices .promo-sms-services__container {
    grid-template-columns: 1fr;

    max-width: 760px;

    gap: 40px;
  }


  #promoSmsServices .promo-sms-services__image-wrap {
    min-height: 390px;
  }


  #promoSmsServices .promo-sms-services__content {
    max-width: 700px;

    margin: 0 auto;
  }

}


/* =========================================================
MOBILE
========================================================= */

@media (max-width: 767px) {

  #promoSmsServices {
    padding: 40px 16px;
  }


  #promoSmsServices .promo-sms-services__container {
    gap: 32px;
  }


  /* Image Area */

  #promoSmsServices .promo-sms-services__image-wrap {
    min-height: 330px;
  }


  #promoSmsServices .promo-sms-services__image-bg {
    width: 300px;
    height: 300px;
  }


  #promoSmsServices .promo-sms-services__image-card {
    width: 250px;
    height: 300px;

    border-radius: 22px;
  }


  /* Floating Badges */

  #promoSmsServices .promo-sms-services__floating-badge {
    gap: 8px;

    padding: 9px 10px;

    border-radius: 13px;
  }


  #promoSmsServices .promo-sms-services__badge-icon,
  #promoSmsServices .promo-sms-services__delivery-check {
    width: 32px;
    height: 32px;

    flex: 0 0 32px;

    font-size: 14px;
  }


  #promoSmsServices .promo-sms-services__floating-badge strong {
    font-size: 9px;
  }


  #promoSmsServices .promo-sms-services__floating-badge small {
    font-size: 7px;
  }


  #promoSmsServices .promo-sms-services__floating-badge--sms {
    top: 18px;
    left: 0;
  }


  #promoSmsServices .promo-sms-services__floating-badge--delivery {
    right: 0;
    bottom: 22px;
  }


  /* Content */

  #promoSmsServices .promo-sms-services__content {
    text-align: center;
  }


  #promoSmsServices .promo-sms-services__eyebrow {
    justify-content: center;

    margin-bottom: 10px;

    font-size: 10px;
  }


  #promoSmsServices .promo-sms-services__content h2 {
    margin-left: auto;
    margin-right: auto;

    font-size: clamp(27px, 8vw, 34px);

    letter-spacing: -0.7px;
  }


  #promoSmsServices .promo-sms-services__intro {
    margin-left: auto;
    margin-right: auto;

    margin-bottom: 20px;

    font-size: 14px;
    line-height: 1.7;
  }


  /* Service Cards */

  #promoSmsServices .promo-sms-services__service-card {
    align-items: flex-start;

    gap: 11px;

    padding: 14px 12px;

    text-align: left;
  }


  #promoSmsServices .promo-sms-services__service-icon {
    width: 42px;
    height: 42px;

    flex: 0 0 42px;

    border-radius: 12px;
  }


  #promoSmsServices .promo-sms-services__service-icon span {
    font-size: 12px;
  }


  #promoSmsServices .promo-sms-services__service-content h3 {
    margin-bottom: 4px;

    font-size: 14px;
  }


  #promoSmsServices .promo-sms-services__service-content p {
    font-size: 11px;
    line-height: 1.5;
  }


  #promoSmsServices .promo-sms-services__arrow {
    width: 30px;
    height: 30px;

    flex: 0 0 30px;

    margin-top: 4px;

    font-size: 17px;
  }

}


/* =========================================================
SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

  #promoSmsServices {
    padding: 35px 14px;
  }


  #promoSmsServices .promo-sms-services__image-wrap {
    min-height: 300px;
  }


  #promoSmsServices .promo-sms-services__image-card {
    width: 225px;
    height: 275px;
  }


  #promoSmsServices .promo-sms-services__image-bg {
    width: 270px;
    height: 270px;
  }


  #promoSmsServices .promo-sms-services__floating-badge--sms {
    left: -4px;
  }


  #promoSmsServices .promo-sms-services__floating-badge--delivery {
    right: -4px;
  }


  #promoSmsServices .promo-sms-services__service-card {
    padding: 13px 10px;
  }

}

</style>