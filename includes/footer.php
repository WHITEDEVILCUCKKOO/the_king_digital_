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
                       <div class="f-sub-brands">
                           <span class="f-sub">staticking.com</span>
                           <span class="f-sub">kingdigitalstudio.in</span>
                           <span class="f-sub">ivrking.in</span>
                           <span class="f-sub">kingcloud.in</span>
                           <span class="f-sub">myraint.com</span>
                           <span class="f-sub">academy.kingdigital.in</span>
                       </div>
                       <div class="f-social">
                           <a href="https://www.facebook.com/KingDigitalPL/"><i class="fab fa-facebook-f"></i></a>
                           <a href="https://instagram.com/kingdigitalpl"><i class="fab fa-instagram"></i></a>
                           <a href="https://twitter.com/KINGDIGITALPL"><i class="fab fa-x-twitter"></i></a>
                           <a href="https://www.linkedin.com/company/kingdigitalpl"><i class="fab fa-linkedin-in"></i></a>
                           <a href="https://www.youtube.com/channel/UCz9Bekby1W-14f6Z0t7NeoQ"><i class="fab fa-youtube"></i></a>
                           <a href="https://t.me/kingdigitalpl"><i class="fab fa-telegram"></i></a>
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