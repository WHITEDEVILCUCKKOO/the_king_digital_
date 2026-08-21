
<style>



#kdPromotionalSmsCta {
  --kd-red: #b61f29;
  --kd-red-dark: #971923;
  --kd-navy: #000000;
  --kd-text: #657285;
  --kd-white: #ffffff;

  position: relative;
  width: 100%;
  overflow: hidden;

  padding: 54px 20px;

  background:
    radial-gradient(
      circle at 8% 50%,
      rgba(182, 31, 41, 0.08),
      transparent 24%
    ),
    radial-gradient(
      circle at 92% 50%,
      rgba(182, 31, 41, 0.05),
      transparent 22%
    ),
    linear-gradient(
      135deg,
      #ffffff 0%,
      #fafafa 48%,
      #ffffff 100%
    );


}



#kdPromotionalSmsCta .kd-promotional-cta__shape {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
}

#kdPromotionalSmsCta .kd-promotional-cta__shape--one {
  width: 260px;
  height: 260px;

  top: -175px;
  left: -100px;

  border: 1px solid rgba(182, 31, 41, 0.10);
}

#kdPromotionalSmsCta .kd-promotional-cta__shape--two {
  width: 300px;
  height: 300px;

  right: -160px;
  bottom: -210px;

  background: rgba(182, 31, 41, 0.035);
}

#kdPromotionalSmsCta .kd-promotional-cta__container {
  position: relative;
  z-index: 2;

  width: 100%;
  max-width: 920px;

  margin: 0 auto;

  display: flex;
  flex-direction: column;
  align-items: center;

  text-align: center;
}




#kdPromotionalSmsCta .kd-promotional-cta__badge {
  display: inline-flex;
  align-items: center;
  justify-content: center;

  gap: 8px;

  min-height: 34px;

  padding: 8px 15px;

  margin-bottom: 17px;

  border: 1px solid rgba(182, 31, 41, 0.18);
  border-radius: 8px;

  color: var(--kd-red);

  background: rgba(182, 31, 41, 0.055);

  box-shadow:
    0 8px 22px rgba(182, 31, 41, 0.06);

  font-size: 10px;
  font-weight: 800;
  letter-spacing: 0.8px;
  line-height: 1.2;
}

#kdPromotionalSmsCta .kd-promotional-cta__badge-dot {
  width: 7px;
  height: 7px;

  flex: 0 0 7px;

  border-radius: 50%;

  background: var(--kd-red);

  box-shadow:
    0 0 0 4px rgba(182, 31, 41, 0.10);
}


#kdPromotionalSmsCta .kd-promotional-cta__title {
  max-width: 760px;

  margin: 0;

  color: var(--kd-navy);

  font-size: clamp(30px, 4vw, 44px);
  font-weight: 800;
  line-height: 1.15;
  letter-spacing: -1.4px;
}

#kdPromotionalSmsCta .kd-promotional-cta__title span {
  color: var(--kd-red);
}

#kdPromotionalSmsCta .kd-promotional-cta__description {
  max-width: 690px;

  margin: 16px auto 0;

  color: var(--kd-text);

  font-size: 15px;
  font-weight: 400;
  line-height: 1.75;
}



#kdPromotionalSmsCta .kd-promotional-cta__button {
  position: relative;

  display: inline-flex;
  align-items: center;
  justify-content: center;

  gap: 10px;

  min-height: 43px;

  padding: 9px 17px;

  margin-top: 22px;

  border-radius: 7px;

  color: #ffffff !important;

  background:
    linear-gradient(
      135deg,
      #c62832 0%,
      #b61f29 55%,
      #971923 100%
    );

  box-shadow:
    0 8px 20px rgba(182, 31, 41, 0.20);

  text-decoration: none !important;

  font-size: 12px;
  font-weight: 700;
  line-height: 1;

  animation: kdPromotionalButtonBlink 1.8s ease-in-out infinite;

  transition:
    transform 0.25s ease,
    box-shadow 0.25s ease,
    background 0.25s ease;
}

#kdPromotionalSmsCta .kd-promotional-cta__button:hover {
  color: #ffffff !important;

  animation-play-state: paused;

  transform: translateY(-3px);

  box-shadow:
    0 13px 28px rgba(182, 31, 41, 0.30);
}

#kdPromotionalSmsCta .kd-promotional-cta__arrow {
  display: inline-block;

  font-size: 17px;
  line-height: 1;

  transition: transform 0.25s ease;
}

#kdPromotionalSmsCta .kd-promotional-cta__button:hover
.kd-promotional-cta__arrow {
  transform: translateX(4px);
}



@keyframes kdPromotionalButtonBlink {

  0%,
  100% {
    transform: scale(1);
    box-shadow:
      0 8px 20px rgba(182, 31, 41, 0.20);
  }

  50% {
    transform: scale(1.035);
    box-shadow:
      0 0 0 7px rgba(182, 31, 41, 0.07),
      0 12px 28px rgba(182, 31, 41, 0.30);
  }

}



@media (max-width: 1024px) {

  #kdPromotionalSmsCta {
    padding: 48px 20px;
  }

  #kdPromotionalSmsCta .kd-promotional-cta__description {
    max-width: 650px;
  }

}


@media (max-width: 767px) {

  #kdPromotionalSmsCta {
    padding: 42px 16px;
  }

  #kdPromotionalSmsCta .kd-promotional-cta__badge {
    min-height: 32px;

    padding: 7px 12px;

    margin-bottom: 15px;

    font-size: 9px;
  }

  #kdPromotionalSmsCta .kd-promotional-cta__title {
    font-size: 31px;
    line-height: 1.18;
    letter-spacing: -0.9px;
  }

  #kdPromotionalSmsCta .kd-promotional-cta__description {
    margin-top: 14px;

    font-size: 13px;
    line-height: 1.7;
  }

  #kdPromotionalSmsCta .kd-promotional-cta__button {
    min-height: 42px;

    padding: 9px 16px;

    margin-top: 20px;

    font-size: 11px;
  }

}


@media (max-width: 480px) {

  #kdPromotionalSmsCta {
    padding: 38px 12px;
  }

  #kdPromotionalSmsCta .kd-promotional-cta__title {
    font-size: 27px;
    letter-spacing: -0.6px;
  }

  #kdPromotionalSmsCta .kd-promotional-cta__description {
    max-width: 350px;

    font-size: 12px;
  }

  #kdPromotionalSmsCta .kd-promotional-cta__badge {
    font-size: 8.5px;
    letter-spacing: 0.6px;
  }

}

</style>
<section class="kd-promotional-cta" id="kdPromotionalSmsCta">

  <div class="kd-promotional-cta__shape kd-promotional-cta__shape--one"></div>
  <div class="kd-promotional-cta__shape kd-promotional-cta__shape--two"></div>

  <div class="kd-promotional-cta__container">

    <!-- Service Label -->
    <div class="kd-promotional-cta__badge">
      <span class="kd-promotional-cta__badge-dot"></span>
      PROMOTIONAL SMS SERVICE
    </div>

    <!-- Heading -->
    <h2 class="kd-promotional-cta__title">
      Reach More Customers With
      <span>Powerful Promotional SMS</span>
    </h2>

    <!-- Description -->
    <p class="kd-promotional-cta__description">
      Promote your offers, discounts, launches and campaigns with fast,
      reliable and scalable SMS solutions designed to help your business
      connect with the right audience at the right time.
    </p>

    <!-- Small CTA Button -->
    <a href="#enquiry" class="kd-promotional-cta__button">
      Get Started Today
      <span class="kd-promotional-cta__arrow">→</span>
    </a>

  </div>

</section>

