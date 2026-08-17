   <style>
       /* ========================================
   FOOTER WAVE WRAPPER
======================================== */

       .Footer-module__Grjkva__waveWrap {
           position: absolute;

           left: -5%;
           bottom: 0;

           width: 110%;
           height: 180px;

           z-index: 10;

           pointer-events: none;
       }


       /* ========================================
   FOOTER WAVE SVG
======================================== */

       .Footer-module__Grjkva__waveSvg {
           position: absolute;

           left: 0;
           bottom: 0;

           width: 100%;
           height: 180px;

           display: block;

           overflow: visible;
       }


       /* ========================================
   BACK WAVE
======================================== */

       .Footer-module__Grjkva__back {
           transform-origin: center bottom;

           animation:
               footerWaveBack 12s ease-in-out infinite;
       }


       /* ========================================
   MIDDLE WAVE
======================================== */

       .Footer-module__Grjkva__mid {
           transform-origin: center bottom;

           animation:
               footerWaveMid 9s ease-in-out infinite;
       }


       /* ========================================
   FRONT WAVE
======================================== */

       .Footer-module__Grjkva__top {
           transform-origin: center bottom;

           animation:
               footerWaveTop 7s ease-in-out infinite;
       }


       /* ========================================
   BACK ANIMATION
======================================== */

       @keyframes footerWaveBack {

           0%,
           100% {
               transform:
                   translateX(-2%) scaleX(1.02);
           }

           25% {
               transform:
                   translateX(2%) scaleX(1.06);
           }

           50% {
               transform:
                   translateX(-1%) scaleX(1.03);
           }

           75% {
               transform:
                   translateX(3%) scaleX(1.07);
           }
       }


       /* ========================================
   MIDDLE ANIMATION
======================================== */

       @keyframes footerWaveMid {

           0%,
           100% {
               transform:
                   translateX(2%) scaleX(1.04);
           }

           25% {
               transform:
                   translateX(-3%) scaleX(1.08);
           }

           50% {
               transform:
                   translateX(3%) scaleX(1.05);
           }

           75% {
               transform:
                   translateX(-2%) scaleX(1.09);
           }
       }


       /* ========================================
   FRONT ANIMATION
======================================== */

       @keyframes footerWaveTop {

           0%,
           100% {
               transform:
                   translateX(-5%) scaleX(1.5);
           }

           20% {
               transform:
                   translateX(30%) scaleX(2);
           }

           40% {
               transform:
                   translateX(-1%) scaleX(1.2);
           }

           60% {
               transform:
                   translateX(9%) scaleX(1.11);
           }

           80% {
               transform:
                   translateX(-10%) scaleX(1.6);
           }
       }


       /* ========================================
   SHIMMER
======================================== */

       .Footer-module__Grjkva__shimmer {
           stroke-dasharray: 180 900;

           animation:
               footerShimmer 5s linear infinite;
       }


       @keyframes footerShimmer {

           0% {
               stroke-dashoffset: 1000;
               opacity: 0.15;
           }

           50% {
               opacity: 0.45;
           }

           100% {
               stroke-dashoffset: 0;
               opacity: 0.15;
           }
       }

       .card {
           /* ========================================
       COLORS
    ======================================== */

           --white: hsl(0, 0%, 100%);
           --black: #0b112b;
           --paragraph: hsl(225, 15%, 78%);
           --line: rgba(255, 255, 255, 0.12);

           --primary: #5d26c1;


           /* ========================================
       CARD
    ======================================== */

           position: relative;

           display: flex;
           flex-direction: column;
           gap: 1rem;

           padding: 1rem;
           width: fit-content;

           background:
               linear-gradient(135deg,
                   #0b112b 0%,
                   #3b1f8f 38%,
                   #5d26c1 58%,
                   #2152ff 100%);

           border-radius: 1rem;

           box-shadow:
               0 -16px 24px rgba(255, 255, 255, 0.12) inset;
       }


       /* ========================================
   CARD BORDER
======================================== */

       .card .card__border {
           overflow: hidden;
           pointer-events: none;

           position: absolute;
           z-index: -10;

           top: 50%;
           left: 50%;

           transform: translate(-50%, -50%);

           width: calc(100% + 2px);
           height: calc(100% + 2px);

           background-image:
               linear-gradient(135deg,
                   #0b112b 0%,
                   #3b1f8f 38%,
                   #5d26c1 58%,
                   #2152ff 100%);

           border-radius: 1rem;
       }


       /* ========================================
   ANIMATED BORDER
======================================== */

       .card .card__border::before {
           content: "";

           pointer-events: none;

           position: absolute;

           z-index: 200;

           top: 50%;
           left: 50%;

           transform:
               translate(-50%, -50%) rotate(0deg);

           transform-origin: left;

           width: 200%;
           height: 10rem;

           background-image:
               linear-gradient(0deg,
                   rgba(255, 255, 255, 0) 0%,
                   #3b1f8f 25%,
                   #5d26c1 45%,
                   #2152ff 60%,
                   rgba(255, 255, 255, 0) 100%);

           animation: rotate 8s linear infinite;
       }


       @keyframes rotate {

           to {
               transform:
                   translate(-50%, -50%) rotate(360deg);
           }
       }

       .card_title__container {
           display: flex;
           justify-content: center;
           align-items: center;
           position: relative;
       }

       .footer-card-img {
           width: 95px;
           position: absolute;
           top: -11%;
           right: -9%;
       }

       .footer-card-img img {
           width: 100%;
           height: 100%;
           object-fit: fill;
       }

       /* ========================================
   TITLE CONTAINER
======================================== */

       .card .card_title__container {
           position: relative;
           z-index: 2;
       }


       /* ========================================
   TITLE
======================================== */

       .card .card_title__container .card_title {
           font-size: 1rem;
           color: var(--white);
       }


       /* ========================================
   PARAGRAPH
======================================== */

       .card .card_title__container .card_paragraph {
           margin-top: 0.25rem;

           width: 65%;

           font-size: 0.5rem;
           line-height: 1.5;

           color: var(--paragraph);
       }


       /* ========================================
   LINE
======================================== */

       .card .line {
           width: 100%;
           height: 0.1rem;

           background-color: var(--line);

           border: none;
       }


       /* ========================================
   LIST
======================================== */

       .card .card__list {
           display: flex;
           flex-direction: column;
           gap: 0.5rem;
       }


       /* ========================================
   LIST ITEM
======================================== */

       .card .card__list .card__list_item {
           display: flex;
           align-items: center;
           gap: 0.5rem;
       }


       /* ========================================
   CHECK
======================================== */

       .card .card__list .card__list_item .check {
           display: flex;
           justify-content: center;
           align-items: center;

           width: 1rem;
           height: 1rem;

           background:
               linear-gradient(135deg,
                   #5d26c1 0%,
                   #2152ff 100%);

           border-radius: 50%;

           box-shadow:
               0 0 12px rgba(33, 82, 255, 0.35);
       }


       /* ========================================
   CHECK SVG
======================================== */

       .card .card__list .card__list_item .check .check_svg {
           width: 0.75rem;
           height: 0.75rem;

           fill: var(--white);
       }


       /* ========================================
   LIST TEXT
======================================== */

       .card .card__list .card__list_item .list_text {
           font-size: 0.75rem;

           color: var(--white);
       }


       /* ========================================
   BUTTON
======================================== */

       .button {
           display: flex;
           justify-content: center;
           gap: 10px;
       }


       .card .button {
           cursor: pointer;

           position: relative;
           z-index: 2;

           padding: 0.5rem;

           width: 100%;

           background:
               linear-gradient(135deg,
                   #3b1f8f 0%,
                   #5d26c1 45%,
                   #2152ff 100%);

           font-size: 0.75rem;

           color: var(--white);

           border: 0;
           border-radius: 9999px;

           box-shadow:
               inset 0 -2px 25px -4px rgba(255, 255, 255, 0.45),
               0 8px 24px rgba(33, 82, 255, 0.25);

           transition:
               transform 250ms ease,
               box-shadow 250ms ease;
       }


       /* ========================================
   BUTTON HOVER
======================================== */

       .card .button:hover {
           transform: translateY(-2px);

           box-shadow:
               inset 0 -2px 25px -4px rgba(255, 255, 255, 0.55),
               0 12px 30px rgba(33, 82, 255, 0.35);
       }


 .footer_card_2 {
     display: none;
     width: 100%;
    }
    .footer_card_2 .footer-card-img{
        right: -4%;
    }
    .footer_card_2 .card_title__container{
        justify-content: start;
    }
    
    @media (max-width: 636px) {
    .footer_card_1 {
        display: none;
    }

    .footer_card_2 {
        display: flex;
    }
}
   </style>

   <!-- ======================================================================================================================
                                                        Header 
    ======================================================================================================================-->


   <footer style="position:relative; overflow: hidden;">
       <div class="footer-top">
           <div class="container">
               <div class="footer-grid">
                   <div>
                       <div class="f-brand"><img src="assets/images/logos/king-digital-logo.png" alt=""></div>
                       <div class="f-tagline">Delhi's #1 360° digital marketing company since 2010. Serving 15,000+ businesses across India with websites, SMS, WhatsApp, IVR, SEO, hosting, and more.</div>
                       <!-- <div class="f-sub-brands">
                           <span class="f-sub">staticking.com</span>
                           <span class="f-sub">kingdigitalstudio.in</span>
                           <span class="f-sub">ivrking.in</span>
                           <span class="f-sub">kingcloud.in</span>
                           <span class="f-sub">myraint.com</span>
                           <span class="f-sub">academy.kingdigital.in</span>
                       </div> -->
                       <div class="f-social" style="margin-bottom: 20px;">
                           <a href="https://www.facebook.com/KingDigitalPL/"><i class="fab fa-facebook-f"></i></a>
                           <a href="https://instagram.com/kingdigitalpl"><i class="fab fa-instagram"></i></a>
                           <a href="https://twitter.com/KINGDIGITALPL"><i class="fab fa-x-twitter"></i></a>
                           <a href="https://www.linkedin.com/company/kingdigitalpl"><i class="fab fa-linkedin-in"></i></a>
                           <a href="https://www.youtube.com/channel/UCz9Bekby1W-14f6Z0t7NeoQ"><i class="fab fa-youtube"></i></a>
                           <a href="https://t.me/kingdigitalpl"><i class="fab fa-telegram"></i></a>
                       </div>
                       <div class="card footer_card_1">
                           <div class="card__border"></div>
                           <div class="card_title__container">
                               <div class="card-heading">
                                   <span class="card_title">For Leads
                                   </span>
                                   <p class="card_paragraph">
                                       Perfect for your next Market, leave to us and enjoy the result!
                                   </p>
                               </div>
                               <div class="footer-card-img">
                                   <img src="assets/images/Rocket+icon.png">
                               </div>
                           </div>
                           <hr class="line" />
                           <ul class="card__list">
                               <li class="card__list_item">
                                   <span class="check">
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           viewBox="0 0 16 16"
                                           fill="currentColor"
                                           class="check_svg">
                                           <path
                                               fill-rule="evenodd"
                                               d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                               clip-rule="evenodd"></path>
                                       </svg>
                                   </span>
                                   <span class="list_text">Fast Leads</span>
                               </li>
                               <li class="card__list_item">
                                   <span class="check">
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           viewBox="0 0 16 16"
                                           fill="currentColor"
                                           class="check_svg">
                                           <path
                                               fill-rule="evenodd"
                                               d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                               clip-rule="evenodd"></path>
                                       </svg>
                                   </span>
                                   <span class="list_text">Ai Powered</span>
                               </li>
                           </ul>
                           <button class="button">Book a Demo
                               <svg viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                                   <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                               </svg>
                           </button>
                       </div>


                   </div>
                   <div>
                       <h4>Our Services</h4>
                       <ul>
                           <li><a class="bottom_link_79" href="/website-designing-company-india.html">Website Design</a></li>
                           <li><a class="bottom_link_79" href="https://www.staticking.com/bulk-sms.shtml">Bulk SMS</a></li>
                           <li><a class="bottom_link_79" href="/wabasignup.html">WhatsApp Business API</a></li>
                           <li><a class="bottom_link_79" href="/social-media-marketing-agency-in-delhi.html">Social Media</a></li>
                           <li><a class="bottom_link_79" href="/seo-service-company-in-delhi.html">SEO Services</a></li>
                           <li><a class="bottom_link_79" href="https://www.ivrking.in/">IVR & Voice</a></li>
                           <li><a class="bottom_link_79" href="/email-marketing-company-india.html">Email Marketing</a></li>
                           <li><a class="bottom_link_79" href="https://www.kingcloud.in/">Hosting & Cloud</a></li>
                           <li><a class="bottom_link_79" href="/rich-communication-services.html">RCS Messaging</a></li>
                       </ul>
                   </div>
                   <div>
                       <h4>Company</h4>
                       <ul>
                           <li><a class="bottom_link_79" href="/who-we-are.html">Who We Are</a></li>
                           <li><a class="bottom_link_79" href="/client.php">Our Clients</a></li>
                           <li><a class="bottom_link_79" href="/portfolio.php">Portfolio</a></li>
                           <li><a class="bottom_link_79" href="/blog/">Blog</a></li>
                           <li><a class="bottom_link_79" href="https://academy.kingdigital.in/">Academy</a></li>
                           <li><a class="bottom_link_79" href="https://www.linkedin.com/company/kingdigitalpl/jobs/">Careers</a></li>
                           <li><a class="bottom_link_79" href="/contactus.html">Contact Us</a></li>
                       </ul>
                   </div>
                   <div>
                       <h4>Account & Help</h4>
                       <ul>
                           <li><a class="bottom_link_79" href="/enquiry.php">Get a Quote</a></li>
                           <li><a class="bottom_link_79" href="/pay/">Pay Now</a></li>
                           <li><a class="bottom_link_79" href="/my-account.html">Login</a></li>
                           <li><a class="bottom_link_79" href="/online-meeting.php">Online Meeting</a></li>
                           <li><a class="bottom_link_79" href="/clients/submitticket.php?step=2&deptid=26">Support Ticket</a></li>
                           <li><a class="bottom_link_79" href="/term-and-condition.html">Terms of Service</a></li>
                           <li><a class="bottom_link_79" href="/privacy-policy.html">Privacy Policy</a></li>
                           <li><a class="bottom_link_79" href="/term-and-condition.html">Refund Policy</a></li>
                       </ul>
                   </div>

                      <div class="card footer_card_2">
                           <div class="card__border"></div>
                           <div class="card_title__container">
                               <div class="card-heading">
                                   <span class="card_title">For Leads
                                   </span>
                                   <p class="card_paragraph">
                                       Perfect for your next Market, leave to us and enjoy the result!
                                   </p>
                               </div>
                               <div class="footer-card-img">
                                   <img src="assets/images/Rocket+icon.png">
                               </div>
                           </div>
                           <hr class="line" />
                           <ul class="card__list">
                               <li class="card__list_item">
                                   <span class="check">
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           viewBox="0 0 16 16"
                                           fill="currentColor"
                                           class="check_svg">
                                           <path
                                               fill-rule="evenodd"
                                               d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                               clip-rule="evenodd"></path>
                                       </svg>
                                   </span>
                                   <span class="list_text">Fast Leads</span>
                               </li>
                               <li class="card__list_item">
                                   <span class="check">
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           viewBox="0 0 16 16"
                                           fill="currentColor"
                                           class="check_svg">
                                           <path
                                               fill-rule="evenodd"
                                               d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z"
                                               clip-rule="evenodd"></path>
                                       </svg>
                                   </span>
                                   <span class="list_text">Ai Powered</span>
                               </li>
                           </ul>
                           <button class="button">Book a Demo
                               <svg viewBox="0 0 20 20" fill="currentColor" width="18" height="18" aria-hidden="true">
                                   <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                               </svg>
                           </button>
                       </div>
               </div>
           </div>
       </div>
       <div class="footer-bottom" style="padding-bottom: 80px;">
           <div class="container">
               <div class="footer-bottom-in">
                   <p>© 2010–2026 King Digital Pvt. Ltd. All Rights Reserved &nbsp;|&nbsp; CIN: U72300DL2014PTC264951 &nbsp;|&nbsp; MSME Registered</p>
                   <div style="display:flex;gap:16px;flex-wrap:wrap">
                       <a href="/privacy-policy.html">Privacy</a>
                       <a href="/term-and-condition.html">Terms</a>
                       <a href="/term-and-condition.html">Anti-Spam</a>
                       <a href="/contactus.html">Contact</a>
                   </div>
               </div>
           </div>
       </div>
       

       <div class="Footer-module__Grjkva__waveWrap" aria-hidden="true">

           <svg
               class="Footer-module__Grjkva__waveSvg"
               viewBox="0 0 1200 280"
               preserveAspectRatio="none">

               <defs>

                   <!-- BLOOM -->
                   <filter
                       id="bloom"
                       x="-20%"
                       y="-20%"
                       width="140%"
                       height="140%">
                       <feGaussianBlur
                           stdDeviation="8"
                           result="blur"></feGaussianBlur>

                       <feColorMatrix
                           in="blur"
                           type="matrix"
                           values="
                            1 0 0 0 0
                            0 1 0 0 0
                            0 0 1 0 0
                            0 0 0 0.9 0
                        "
                           result="glow"></feColorMatrix>

                       <feMerge>
                           <feMergeNode in="glow"></feMergeNode>
                           <feMergeNode in="SourceGraphic"></feMergeNode>
                       </feMerge>
                   </filter>


                   <!-- DEEP -->
                   <linearGradient
                       id="deep"
                       x1="0"
                       y1="0"
                       x2="1"
                       y2="0">
                       <stop
                           offset="0%"
                           stop-color="#0B4BFF"
                           stop-opacity="0.25"></stop>

                       <stop
                           offset="60%"
                           stop-color="#2E7BFF"
                           stop-opacity="0.30"></stop>

                       <stop
                           offset="100%"
                           stop-color="#6BB6FF"
                           stop-opacity="0.22"></stop>
                   </linearGradient>


                   <!-- MID -->
                   <linearGradient
                       id="mid"
                       x1="0"
                       y1="0"
                       x2="1"
                       y2="0">
                       <stop
                           offset="0%"
                           stop-color="#0B4BFF"
                           stop-opacity="0.45"></stop>

                       <stop
                           offset="60%"
                           stop-color="#2E7BFF"
                           stop-opacity="0.55"></stop>

                       <stop
                           offset="100%"
                           stop-color="#6BB6FF"
                           stop-opacity="0.40"></stop>
                   </linearGradient>


                   <!-- TOP -->
                   <linearGradient
                       id="top"
                       x1="0"
                       y1="0"
                       x2="1"
                       y2="0">
                       <stop
                           offset="0%"
                           stop-color="#2E7BFF"
                           stop-opacity="0.85"></stop>

                       <stop
                           offset="60%"
                           stop-color="#5AA8FF"
                           stop-opacity="0.95"></stop>

                       <stop
                           offset="100%"
                           stop-color="#8CD0FF"
                           stop-opacity="0.78"></stop>
                   </linearGradient>


                   <!-- WAVE -->
                   <path
                       id="w"
                       d="
                        M0,170
                        C120,140 240,220 360,190
                        C480,160 600,220 720,185
                        C840,150 960,225 1080,185
                        C1140,165 1170,165 1200,175
                        L1200,280
                        L0,280
                        Z
                    "></path>

               </defs>


               <!-- BACK -->
               <g
                   class="
                    Footer-module__Grjkva__wave
                    Footer-module__Grjkva__layer
                    Footer-module__Grjkva__back
                "
                   filter="url(#bloom)">
                   <use
                       href="#w"
                       fill="url(#deep)"></use>
               </g>


               <!-- MIDDLE -->
               <g
                   class="
                    Footer-module__Grjkva__wave
                    Footer-module__Grjkva__layer
                    Footer-module__Grjkva__mid
                "
                   filter="url(#bloom)">
                   <use
                       href="#w"
                       fill="url(#mid)"></use>
               </g>


               <!-- FRONT -->
               <g
                   class="
                    Footer-module__Grjkva__wave
                    Footer-module__Grjkva__layer
                    Footer-module__Grjkva__top
                "
                   filter="url(#bloom)">
                   <use
                       href="#w"
                       fill="url(#top)"></use>
               </g>


               <!-- SHIMMER -->
               <path
                   class="Footer-module__Grjkva__shimmer"
                   d="
                    M0,175
                    C120,145 240,225 360,195
                    C480,165 600,225 720,190
                    C840,155 960,230 1080,190
                    C1140,170 1170,170 1200,180
                "
                   fill="none"
                   stroke="rgba(255,255,255,0.35)"
                   stroke-width="2"
                   stroke-linecap="round"
                   filter="url(#bloom)"></path>

           </svg>

       </div>
   </footer>



   <script src="assets/js/global.js" defer></script>

   </body>

   </html>