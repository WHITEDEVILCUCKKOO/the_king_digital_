<style>
/* =========================================================
   KING DIGITAL — BULK SMS HERO
   CLEAN PREMIUM FINAL
========================================================= */

.kdsms-hero,
.kdsms-hero *{
    box-sizing:border-box;
}

.kdsms-hero{
    --blue:#0A5CFF;
    --blue2:#4C7DFF;
    --navy:#101828;
    --text:#5F6878;
    --green:#18A765;

    position:relative;
    width:100%;
    overflow:hidden;

    padding:88px 48px;

    font-family:'Segoe UI',Roboto,Oxygen,Ubuntu,Cantarell,
    'Open Sans','Helvetica Neue',sans-serif;

    background:
        radial-gradient(circle at 88% 25%,
        rgba(67,116,255,.14),transparent 34%),

        radial-gradient(circle at 10% 92%,
        rgba(102,86,255,.10),transparent 32%),

        linear-gradient(
        135deg,
        #ffffff 0%,
        #f8faff 38%,
        #edf3ff 72%,
        #e7eeff 100%
        );
}


/* =========================================================
   DECORATION
========================================================= */

.kdsms-hero::before{
    content:"";
    position:absolute;

    width:430px;
    height:430px;

    right:-180px;
    top:-200px;

    border-radius:50%;

    border:1px dashed rgba(10,92,255,.13);

    animation:kdsmsRotate 28s linear infinite;
}

@keyframes kdsmsRotate{
    to{transform:rotate(360deg);}
}

.kdsms-dots{
    position:absolute;

    left:-30px;
    bottom:-45px;

    width:280px;
    height:230px;

    opacity:.18;

    background-image:
    radial-gradient(circle,#4F46E5 1.4px,transparent 1.4px);

    background-size:24px 24px;

    -webkit-mask-image:
    radial-gradient(ellipse at bottom left,#000,transparent 72%);

    mask-image:
    radial-gradient(ellipse at bottom left,#000,transparent 72%);
}


/* =========================================================
   MAIN GRID
========================================================= */

.kdsms-container{
    position:relative;
    z-index:5;

    width:100%;
    max-width:1380px;

    margin:auto;

    display:grid;

    grid-template-columns:
    minmax(0,1.08fr)
    minmax(500px,.92fr);

    align-items:center;

    gap:70px;
}


/* =========================================================
   LEFT
========================================================= */

.kdsms-content{
    width:100%;
}


/* badge */

.kdsms-badge{
    display:inline-flex;
    align-items:center;
    gap:8px;

    padding:7px 13px;

    border-radius:999px;

    background:#07355f21;

    color:#0A5CFF;

    font-size:13px;
    line-height:1.2;
    font-weight:600;
}

.kdsms-badge svg{
    width:15px;
    height:15px;
}


/* title */

.kdsms-title{
    max-width:760px;

    margin:15px 0 0;

    color:#111827;

    font-family:'Segoe UI',Roboto,Oxygen,Ubuntu,Cantarell,
    'Open Sans','Helvetica Neue',sans-serif;

    font-size:clamp(35px,3.5vw,44px);

    line-height:1.08;

    letter-spacing:-2px;

    font-weight:800;
}

.kdsms-title span{
    display:block;
    color:#0A5CFF;
}


/* description */

.kdsms-description{
    width:100%;
    max-width:720px;

    margin:18px 0 0;

    color:#606978;

    font-size:15px;

    line-height:1.75;
}

.kdsms-description strong{
    color:#101828;
}

.kdsms-extra{
    display:none;
}

#kdsmsRead{
    color:#0A5CFF;

    font-weight:700;

    cursor:pointer;

    white-space:nowrap;
}


/* =========================================================
   FEATURES
========================================================= */

.kdsms-features{
    display:flex;
    align-items:center;

    flex-wrap:wrap;

    gap:9px;

    margin-top:23px;
}

.kdsms-feature{
    display:flex;
    align-items:center;

    gap:7px;

    padding:7px 11px;

    border-radius:999px;

    background:rgba(255,255,255,.65);

    border:1px solid rgba(10,92,255,.18);

    color:#0A5CFF;

    font-size:12px;

    font-weight:600;

    transition:.25s ease;
}

.kdsms-feature span{
    width:17px;
    height:17px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:#E8F1FF;

    font-size:10px;
}

.kdsms-feature:hover{
    transform:translateY(-3px);

    background:#0A5CFF;

    color:#fff;
}

.kdsms-feature:hover span{
    background:rgba(255,255,255,.18);
}


/* =========================================================
   BUTTON
========================================================= */

.kdsms-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    gap:9px;

    margin-top:23px;

    padding:12px 27px;

    border:0;

    border-radius:999px;

    background:
    linear-gradient(135deg,#0B5CFF,#172A50);

    color:#fff;

    font-family:inherit;

    font-size:17px;

    font-weight:600;

    cursor:pointer;

    box-shadow:
    0 12px 28px rgba(10,92,255,.20);

    transition:.28s ease;
}

.kdsms-btn svg{
    width:17px;
    height:17px;

    transition:.28s ease;
}

.kdsms-btn:hover{
    transform:translateY(-4px);

    box-shadow:
    0 17px 35px rgba(10,92,255,.27);
}

.kdsms-btn:hover svg{
    transform:translateX(4px);
}


/* =========================================================
   RIGHT VISUAL STAGE
========================================================= */

.kdsms-visual{
    position:relative;

    width:520px;
    height:480px;

    max-width:100%;

    margin:auto;

    display:flex;
    align-items:center;
    justify-content:center;
}


/* background glow */

.kdsms-visual-glow{
    position:absolute;

    left:50%;
    top:50%;

    width:410px;
    height:410px;

    transform:translate(-50%,-50%);

    border-radius:50%;

    background:
    radial-gradient(
    circle,
    rgba(10,92,255,.16) 0%,
    rgba(10,92,255,.07) 38%,
    transparent 68%
    );

    animation:kdsmsGlow 4s ease-in-out infinite;
}

@keyframes kdsmsGlow{

    0%,100%{
        transform:
        translate(-50%,-50%)
        scale(.94);

        opacity:.75;
    }

    50%{
        transform:
        translate(-50%,-50%)
        scale(1.05);

        opacity:1;
    }
}


/* =========================================================
   MAIN COMPOSER CARD
========================================================= */

.kdsms-composer{
    position:relative;

    z-index:10;

    width:425px;

    padding:20px;

    border-radius:28px;

    background:
    linear-gradient(
    145deg,
    rgba(255,255,255,.96),
    rgba(248,251,255,.91)
    );

    border:1px solid rgba(10,92,255,.10);

    box-shadow:
    0 35px 75px rgba(35,64,116,.16);

    backdrop-filter:blur(18px);
    -webkit-backdrop-filter:blur(18px);

    animation:kdsmsCardFloat 5s ease-in-out infinite;
}

@keyframes kdsmsCardFloat{

    0%,100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-7px);
    }
}


/* =========================================================
   CARD HEADER
========================================================= */

.kdsms-composer-header{
    display:flex;
    align-items:center;
    justify-content:space-between;

    gap:15px;

    padding-bottom:16px;

    border-bottom:1px solid #EDF1F7;
}

.kdsms-brand{
    display:flex;
    align-items:center;

    gap:11px;
}

.kdsms-logo{
    width:44px;
    height:44px;

    flex:0 0 44px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:13px;

    background:
    linear-gradient(135deg,#0A5CFF,#5B82FF);

    color:#fff;

    font-size:18px;

    font-weight:800;

    box-shadow:
    0 8px 18px rgba(10,92,255,.20);
}

.kdsms-brand-copy strong{
    display:block;

    color:#101828;

    font-size:15px;

    line-height:1.2;
}

.kdsms-brand-copy span{
    display:flex;
    align-items:center;

    gap:5px;

    margin-top:4px;

    color:#18A765;

    font-size:11px;

    font-weight:600;
}

.kdsms-brand-copy span::before{
    content:"";

    width:7px;
    height:7px;

    border-radius:50%;

    background:#20C878;

    animation:kdsmsOnline 1.8s infinite;
}

@keyframes kdsmsOnline{

    0%{
        box-shadow:
        0 0 0 0 rgba(32,200,120,.4);
    }

    70%{
        box-shadow:
        0 0 0 7px rgba(32,200,120,0);
    }

    100%{
        box-shadow:
        0 0 0 0 rgba(32,200,120,0);
    }
}

.kdsms-live{
    padding:6px 10px;

    border-radius:999px;

    background:#EAF2FF;

    color:#0A5CFF;

    font-size:10px;

    font-weight:700;
}


/* =========================================================
   CAMPAIGN TYPE
========================================================= */

.kdsms-label{
    display:block;

    margin-top:17px;

    color:#8A94A6;

    font-size:11px;

    font-weight:600;
}

.kdsms-type-row{
    display:flex;

    gap:7px;

    margin-top:8px;
}

.kdsms-type{
    flex:1;

    padding:8px 5px;

    text-align:center;

    border-radius:10px;

    background:#F4F7FC;

    color:#7A8495;

    font-size:10px;

    font-weight:600;

    border:1px solid transparent;

    transition:.25s ease;
}

.kdsms-type.active{
    background:#EAF2FF;

    border-color:rgba(10,92,255,.13);

    color:#0A5CFF;
}


/* =========================================================
   MESSAGE PREVIEW
========================================================= */

.kdsms-message-box{
    position:relative;

    margin-top:14px;

    padding:17px;

    min-height:142px;

    border-radius:18px;

    overflow:hidden;

    background:
    linear-gradient(
    145deg,
    #F6F9FF,
    #EDF3FF
    );

    border:1px solid rgba(10,92,255,.08);
}

.kdsms-message-box::before{
    content:"";

    position:absolute;

    left:0;
    top:0;
    bottom:0;

    width:4px;

    background:
    linear-gradient(
    180deg,
    #0A5CFF,
    #6B88FF
    );
}

.kdsms-message-top{
    display:flex;
    align-items:center;
    justify-content:space-between;

    gap:10px;
}

.kdsms-sender{
    display:flex;
    align-items:center;

    gap:7px;

    color:#101828;

    font-size:12px;

    font-weight:700;
}

.kdsms-sender-icon{
    width:26px;
    height:26px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:8px;

    background:#fff;

    color:#0A5CFF;

    box-shadow:
    0 4px 12px rgba(30,62,120,.08);
}

.kdsms-sender-icon svg{
    width:13px;
    height:13px;
}

.kdsms-char{
    color:#9AA4B5;

    font-size:10px;
}

#kdsmsMessage{
    margin:13px 0 0;

    min-height:54px;

    color:#4E5A6D;

    font-size:13px;

    line-height:1.55;

    transition:
    opacity .22s ease,
    transform .22s ease;
}


/* =========================================================
   MESSAGE BOTTOM
========================================================= */

.kdsms-message-bottom{
    display:flex;
    align-items:center;
    justify-content:space-between;

    gap:10px;

    margin-top:13px;

    padding-top:11px;

    border-top:1px solid rgba(15,23,42,.06);
}

.kdsms-audience{
    display:flex;
    align-items:center;

    gap:6px;

    color:#7C8798;

    font-size:10px;
}

.kdsms-audience svg{
    width:13px;
    height:13px;

    color:#0A5CFF;
}

.kdsms-ready{
    display:flex;
    align-items:center;

    gap:5px;

    color:#18A765;

    font-size:10px;

    font-weight:700;
}

.kdsms-ready i{
    width:7px;
    height:7px;

    border-radius:50%;

    background:#20C878;
}


/* =========================================================
   SEND AREA
========================================================= */

.kdsms-send-area{
    display:flex;
    align-items:center;

    gap:11px;

    margin-top:15px;
}

.kdsms-send-button{
    position:relative;

    flex:1;

    height:48px;

    overflow:hidden;

    display:flex;
    align-items:center;
    justify-content:center;

    gap:8px;

    border-radius:13px;

    background:
    linear-gradient(135deg,#0A5CFF,#426FDD);

    color:#fff;

    font-size:13px;

    font-weight:700;

    box-shadow:
    0 10px 22px rgba(10,92,255,.20);
}

.kdsms-send-button svg{
    width:16px;
    height:16px;
}

.kdsms-send-shine{
    position:absolute;

    top:0;
    left:-80px;

    width:55px;
    height:100%;

    transform:skewX(-20deg);

    background:
    linear-gradient(
    90deg,
    transparent,
    rgba(255,255,255,.35),
    transparent
    );

    animation:kdsmsShine 3s infinite;
}

@keyframes kdsmsShine{

    0%,20%{
        left:-80px;
    }

    70%,100%{
        left:115%;
    }
}

.kdsms-speed{
    width:108px;
    height:48px;

    display:flex;
    flex-direction:column;

    align-items:center;
    justify-content:center;

    border-radius:13px;

    background:#F3F7FF;

    border:1px solid rgba(10,92,255,.07);
}

.kdsms-speed small{
    color:#98A2B3;

    font-size:9px;
}

.kdsms-speed strong{
    margin-top:2px;

    color:#101828;

    font-size:12px;
}


/* =========================================================
   PROGRESS
========================================================= */

.kdsms-progress{
    position:relative;

    width:100%;
    height:5px;

    margin-top:14px;

    overflow:hidden;

    border-radius:20px;

    background:#E8EDF6;
}

.kdsms-progress span{
    display:block;

    width:0;
    height:100%;

    border-radius:20px;

    background:
    linear-gradient(90deg,#0A5CFF,#5C83FF);

    animation:kdsmsProgress 3.6s ease-in-out infinite;
}

@keyframes kdsmsProgress{

    0%{
        width:0;
    }

    75%,100%{
        width:100%;
    }
}


/* =========================================================
   DELIVERY POPUP
========================================================= */

.kdsms-delivery{
    position:absolute;

    z-index:30;

    right:-16px;
    bottom:34px;

    width:180px;

    padding:13px;

    border-radius:16px;

    background:#fff;

    border:1px solid rgba(24,167,101,.13);

    box-shadow:
    0 18px 38px rgba(31,64,110,.15);

    animation:kdsmsDelivery 3.6s ease-in-out infinite;
}

@keyframes kdsmsDelivery{

    0%,15%{
        opacity:0;

        transform:
        translateY(14px)
        scale(.94);
    }

    28%,78%{
        opacity:1;

        transform:
        translateY(0)
        scale(1);
    }

    100%{
        opacity:0;

        transform:
        translateY(-8px)
        scale(.98);
    }
}

.kdsms-delivery-top{
    display:flex;
    align-items:center;

    gap:9px;
}

.kdsms-delivery-check{
    width:34px;
    height:34px;

    flex:0 0 34px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:#EAF8F1;

    color:#18A765;
}

.kdsms-delivery-check svg{
    width:17px;
    height:17px;
}

.kdsms-delivery-copy strong{
    display:block;

    color:#101828;

    font-size:12px;
}

.kdsms-delivery-copy span{
    display:block;

    margin-top:3px;

    color:#18A765;

    font-size:10px;

    font-weight:600;
}

.kdsms-delivery-number{
    margin-top:10px;

    padding-top:9px;

    border-top:1px solid #EEF1F5;

    display:flex;
    align-items:center;
    justify-content:space-between;

    color:#8D97A8;

    font-size:9px;
}

.kdsms-delivery-number strong{
    color:#101828;

    font-size:10px;
}


/* =========================================================
   SMALL TOP FLOAT
========================================================= */

.kdsms-small-float{
    position:absolute;

    z-index:20;

    left:-12px;
    top:45px;

    display:flex;
    align-items:center;

    gap:9px;

    padding:11px 13px;

    border-radius:15px;

    background:rgba(255,255,255,.96);

    border:1px solid rgba(10,92,255,.08);

    box-shadow:
    0 15px 32px rgba(35,64,110,.12);

    animation:kdsmsSmallFloat 4.5s ease-in-out infinite;
}

@keyframes kdsmsSmallFloat{

    0%,100%{
        transform:translate(0,0);
    }

    50%{
        transform:translate(5px,-7px);
    }
}

.kdsms-small-icon{
    width:35px;
    height:35px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:10px;

    background:#EAF2FF;

    color:#0A5CFF;
}

.kdsms-small-icon svg{
    width:16px;
    height:16px;
}

.kdsms-small-copy small{
    display:block;

    color:#98A2B3;

    font-size:9px;
}

.kdsms-small-copy strong{
    display:block;

    margin-top:2px;

    color:#101828;

    font-size:12px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:1150px){

    .kdsms-hero{
        padding:75px 30px;
    }

    .kdsms-container{
        grid-template-columns:
        minmax(0,1fr)
        470px;

        gap:40px;
    }

    .kdsms-title{
        font-size:46px;
    }

    .kdsms-visual{
        width:470px;
    }

    .kdsms-composer{
        width:400px;
    }
}


/* =========================================================
   TABLET
========================================================= */

@media(max-width:900px){

    .kdsms-hero{
        padding:60px 22px 50px;
    }

    .kdsms-container{
        grid-template-columns:1fr;

        gap:48px;
    }

    .kdsms-content{
        text-align:center;
    }

    .kdsms-badge{
        margin:auto;
    }

    .kdsms-title{
        margin-left:auto;
        margin-right:auto;
    }

    .kdsms-description{
        margin-left:auto;
        margin-right:auto;
    }

    .kdsms-features{
        justify-content:center;
    }

    .kdsms-visual{
        width:520px;
    }
}


/* =========================================================
   MOBILE
========================================================= */

@media(max-width:600px){

    .kdsms-hero{
        padding:46px 15px 38px;
    }

    .kdsms-container{
        gap:35px;
    }

    .kdsms-badge{
        font-size:11px;

        padding:6px 10px;
    }

    .kdsms-title{
        font-size:34px;

        line-height:1.14;

        letter-spacing:-1px;
    }

    .kdsms-description{
        margin-top:15px;

        font-size:14px;

        line-height:1.7;
    }

    .kdsms-features{
        display:grid;

        grid-template-columns:
        1fr 1fr;

        gap:7px;

        width:100%;
    }

    .kdsms-feature{
        width:100%;

        justify-content:center;

        padding:7px 4px;

        font-size:10px;
    }

    .kdsms-btn{
        margin-top:20px;

        padding:11px 22px;

        font-size:15px;
    }


    /* right */

    .kdsms-visual{
        width:100%;
        height:auto;

        padding:
        20px 0 62px;
    }

    .kdsms-visual-glow{
        width:300px;
        height:300px;
    }

    .kdsms-composer{
        width:100%;
        max-width:350px;

        padding:15px;

        border-radius:23px;
    }

    .kdsms-logo{
        width:38px;
        height:38px;

        flex-basis:38px;

        font-size:16px;
    }

    .kdsms-brand-copy strong{
        font-size:13px;
    }

    .kdsms-brand-copy span{
        font-size:9px;
    }

    .kdsms-live{
        font-size:8px;
    }

    .kdsms-type{
        font-size:8px;

        padding:7px 3px;
    }

    .kdsms-message-box{
        min-height:132px;

        padding:14px;
    }

    #kdsmsMessage{
        font-size:11px;
    }

    .kdsms-send-button{
        font-size:11px;
    }

    .kdsms-speed{
        width:90px;
    }

    .kdsms-small-float{
        display:none;
    }

    .kdsms-delivery{
        right:50%;
        bottom:0;

        width:175px;

        transform:translateX(50%);

        animation:kdsmsDeliveryMobile 3.6s ease-in-out infinite;
    }

    @keyframes kdsmsDeliveryMobile{

        0%,15%{
            opacity:0;

            transform:
            translateX(50%)
            translateY(12px)
            scale(.94);
        }

        28%,78%{
            opacity:1;

            transform:
            translateX(50%)
            translateY(0)
            scale(1);
        }

        100%{
            opacity:0;

            transform:
            translateX(50%)
            translateY(-6px)
            scale(.98);
        }
    }
}


/* =========================================================
   EXTRA SMALL
========================================================= */

@media(max-width:380px){

    .kdsms-title{
        font-size:31px;
    }

    .kdsms-composer{
        max-width:325px;
    }

    .kdsms-type-row{
        gap:4px;
    }

    .kdsms-type{
        font-size:7.5px;
    }
}


/* =========================================================
   ACCESSIBILITY
========================================================= */

@media(prefers-reduced-motion:reduce){

    .kdsms-hero *,
    .kdsms-hero *::before,
    .kdsms-hero *::after{

        animation-duration:.01ms !important;

        animation-iteration-count:1 !important;
    }
}

</style>


<!-- ======================================================
     COMPLETE HERO
======================================================= -->

<section class="kdsms-hero">

    <div class="kdsms-dots"></div>


    <div class="kdsms-container">


        <!-- =================================================
             LEFT CONTENT
        ================================================== -->

        <div class="kdsms-content">


            <div class="kdsms-badge">

                <svg viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">

                    <path d="m22 2-7 20-4-9-9-4Z"></path>

                    <path d="M22 2 11 13"></path>

                </svg>

                Bulk SMS Provider in Delhi

            </div>



            <h1 class="kdsms-title">

                Bulk SMS Service

                <span>
                    Provider in Delhi
                </span>

            </h1>



            <p class="kdsms-description">

                In a world where emails get buried and ad budgets burn fast
                without guaranteed returns, text messaging remains the single
                most effective way to grab immediate attention. Over 70% of
                text messages are opened within three minutes of delivery,
                making SMS the ultimate channel for urgent alerts, flash
                offers, and seamless customer communications.


            </p>



          



            <div class="kdsms-features">


                <div class="kdsms-feature">

                    <span>✓</span>

                    Bulk SMS

                </div>


                <div class="kdsms-feature">

                    <span>✓</span>

                    Promotional SMS

                </div>


                <div class="kdsms-feature">

                    <span>✓</span>

                    Transactional SMS

                </div>


                <div class="kdsms-feature">

                    <span>✓</span>

                    OTP SMS

                </div>


            </div>



            <button class="kdsms-btn">

                Start Free Trial

                <svg viewBox="0 0 24 24"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round">

                    <path d="M5 12h14"></path>

                    <path d="m13 6 6 6-6 6"></path>

                </svg>

            </button>


        </div>



        <!-- =================================================
             RIGHT SIDE
        ================================================== -->

        <div class="kdsms-visual">


            <div class="kdsms-visual-glow"></div>



            <!-- SMALL FLOAT -->

            <div class="kdsms-small-float">


                <div class="kdsms-small-icon">

                    <svg viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round">

                        <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"></path>

                    </svg>

                </div>


                <div class="kdsms-small-copy">

                    <small>
                        Campaign
                    </small>

                    <strong>
                        Bulk SMS Live
                    </strong>

                </div>


            </div>



            <!-- =================================================
                 MAIN COMPOSER
            ================================================== -->

            <div class="kdsms-composer">


                <!-- HEADER -->

                <div class="kdsms-composer-header">


                    <div class="kdsms-brand">


                        <div class="kdsms-logo">
                            K
                        </div>


                        <div class="kdsms-brand-copy">

                            <strong>
                                King Digital
                            </strong>

                            <span>
                                SMS Platform Online
                            </span>

                        </div>


                    </div>


                    <div class="kdsms-live">
                        LIVE
                    </div>


                </div>



                <!-- CAMPAIGN TYPE -->

                <span class="kdsms-label">
                    Campaign Type
                </span>


                <div class="kdsms-type-row">


                    <div class="kdsms-type active"
                         data-type="0">

                        Promotional

                    </div>


                    <div class="kdsms-type"
                         data-type="1">

                        OTP

                    </div>


                    <div class="kdsms-type"
                         data-type="2">

                        Transactional

                    </div>


                </div>



                <!-- MESSAGE -->

                <div class="kdsms-message-box">


                    <div class="kdsms-message-top">


                        <div class="kdsms-sender">


                            <div class="kdsms-sender-icon">

                                <svg viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round">

                                    <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"></path>

                                </svg>

                            </div>


                            <span id="kdsmsSender">
                                KINGDIGITAL
                            </span>


                        </div>


                        <span class="kdsms-char"
                              id="kdsmsChar">

                            118 / 160

                        </span>


                    </div>



                    <p id="kdsmsMessage">

                        Flash Sale is live! Get 30% OFF today.
                        Limited-time offer. Shop now and save more.

                    </p>



                    <div class="kdsms-message-bottom">


                        <div class="kdsms-audience">

                            <svg viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>

                                <circle cx="9" cy="7" r="4"></circle>

                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>

                            </svg>

                            <span id="kdsmsAudience">
                                25,000 recipients
                            </span>

                        </div>


                        <div class="kdsms-ready">

                            <i></i>

                            Ready to send

                        </div>


                    </div>


                </div>



                <!-- SEND -->

                <div class="kdsms-send-area">


                    <div class="kdsms-send-button">


                        <div class="kdsms-send-shine"></div>


                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <path d="m22 2-7 20-4-9-9-4Z"></path>

                            <path d="M22 2 11 13"></path>

                        </svg>


                        <span id="kdsmsSendText">
                            Sending Campaign
                        </span>


                    </div>



                    <div class="kdsms-speed">

                        <small>
                            Delivery
                        </small>

                        <strong>
                            Instant
                        </strong>

                    </div>


                </div>



                <div class="kdsms-progress">

                    <span></span>

                </div>


            </div>



            <!-- =================================================
                 DELIVERY POPUP
            ================================================== -->

            <div class="kdsms-delivery">


                <div class="kdsms-delivery-top">


                    <div class="kdsms-delivery-check">

                        <svg viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2.5"
                             stroke-linecap="round"
                             stroke-linejoin="round">

                            <path d="m20 6-11 11-5-5"></path>

                        </svg>

                    </div>


                    <div class="kdsms-delivery-copy">

                        <strong>
                            SMS Delivered
                        </strong>

                        <span>
                            Successfully sent
                        </span>

                    </div>


                </div>


                <div class="kdsms-delivery-number">

                    <span>
                        Delivery Rate
                    </span>

                    <strong>
                        98.9%
                    </strong>

                </div>


            </div>


        </div>


    </div>


</section>



<script>
(function(){





    /* =====================================================
       CAMPAIGN ANIMATION
    ===================================================== */

    var campaigns = [

        {
            type:0,

            sender:"KINGDIGITAL",

            text:
            "Flash Sale is live! Get 30% OFF today. Limited-time offer. Shop now and save more.",

            char:"118 / 160",

            audience:
            "25,000 recipients",

            send:
            "Sending Promotional SMS"
        },


        {
            type:1,

            sender:"KD-SECURE",

            text:
            "Your verification OTP is 482916. This code is valid for 10 minutes. Do not share it.",

            char:"104 / 160",

            audience:
            "Secure OTP delivery",

            send:
            "Sending Secure OTP"
        },


        {
            type:2,

            sender:"KD-UPDATE",

            text:
            "Your order has been shipped successfully and is on the way. Track your delivery now.",

            char:"109 / 160",

            audience:
            "Customer update",

            send:
            "Sending Transactional SMS"
        }

    ];


    var current = 0;


    var sender =
        document.getElementById("kdsmsSender");

    var message =
        document.getElementById("kdsmsMessage");

    var chars =
        document.getElementById("kdsmsChar");

    var audience =
        document.getElementById("kdsmsAudience");

    var sendText =
        document.getElementById("kdsmsSendText");

    var types =
        document.querySelectorAll(".kdsms-type");


    function updateCampaign(){


        current++;

        if(current >= campaigns.length){
            current = 0;
        }


        if(message){

            message.style.opacity = "0";

            message.style.transform =
                "translateY(6px)";

        }


        setTimeout(function(){


            var data =
                campaigns[current];


            if(sender){
                sender.textContent =
                    data.sender;
            }


            if(message){
                message.textContent =
                    data.text;

                message.style.opacity =
                    "1";

                message.style.transform =
                    "translateY(0)";
            }


            if(chars){
                chars.textContent =
                    data.char;
            }


            if(audience){
                audience.textContent =
                    data.audience;
            }


            if(sendText){
                sendText.textContent =
                    data.send;
            }


            types.forEach(
                function(item,index){

                    if(index === data.type){

                        item.classList.add(
                            "active"
                        );

                    }else{

                        item.classList.remove(
                            "active"
                        );

                    }

                }
            );


        },220);

    }


    setInterval(
        updateCampaign,
        3600
    );


})();
</script>


<!-- <style>
    .bluk-sms-hero {
        width: 100%;
        background:
            radial-gradient(circle at 15% 85%,
                rgba(110, 100, 255, 0.12) 0%,
                rgba(110, 100, 255, 0.06) 25%,
                transparent 50%),
            radial-gradient(circle at 85% 20%,
                rgba(70, 140, 255, 0.13) 0%,
                rgba(70, 140, 255, 0.06) 30%,
                transparent 60%),
            linear-gradient(135deg,
                #ffffff 0%,
                #f8faff 35%,
                #eef3ff 70%,
                #e5edff 100%);

        padding: 100px 24px 100px 126px;
        /* display: flex; */
        /* height: 75; */
    }



    .cycle_animation {
        position: relative;
    }

    .cycle_animation::before {
        content: "";
        position: absolute;
        top: -80px;
        right: -30px;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        border: 7.5px dashed rgba(7, 63, 167, 0.14);
        pointer-events: none;
        animation: decor-spin 16s linear infinite;
    }

    @keyframes decor-spin {

        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .bluk-sms-hero .bluk-box {

        margin: auto;
        width: 100%;
        display: grid;
        grid-template-columns: 1.5fr 0.8fr;
        padding: 10px;
    }


    .bluk_set {
        width: 100%;
    }

    .bluk-buage {
        background-color: #07355f21;
        position: relative;
        color: #0A5CFF;
        font-size: 12px;
        padding: 5px 10px;
        border-radius: 999px;
        width: max-content;


    }

    .bluk-buage::before {
        content: "\f1d8";
        position: absolute;
        left: 8px;
        font-family: "Font Awesome 5 Free";
        font-weight: 800;
        font-size: 12px;
    }

    .bluk-buage p {
        padding-left: 20px;
    }

    .bluk-titial h1 {
        width: 80%;
        font-size: 3rem;
        font-family: 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 800;

    }

    .bluk-titial em {
        background: linear-gradient(to bottom, #0A5CFF 0%, #0A5CFF 70%);

        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;

    }

    .bluk_set .tital_pera {
        margin-top: 10px;
        width: 70%;
        font-size: 13px;
        color: #666;
    }

    .tital_pera em {
        color: black;
        font-weight: 600;
    }

    .bluk_tags_hero {
        width: 100%;
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(7, 1fr);

        gap: 10px;

    }

    .bluk_tags_hero span {
        font-size: 12px;
        background-color: #fbfcffb0;
        width: max-content;
        padding: 5px 10px;
        border: 1px solid #13409b52;
        border-radius: 999px;
        color: #0B5CFF;
        font-weight: 600;
        transition: .25s ease;
    }

    .bluk_tags_hero span:hover {
        transform: translateY(-5px);
        transition: .25s ease;
        background: #0B5CFF;
        color: white;
    }


    .bluk_tags_hero span em {
        font-weight: bolder;
        font-size: 18px;
        margin-right: 5px;
    }

    .bluk-trial_mess {
        margin-top: 20px;
        background: linear-gradient(134deg, #0B5CFF 0%, #1b2436f2 100%);
        color: #e5edff;
        padding: 9px 27px;
        border-radius: 999px;
        transition: .25s ease;
        font-size: 20px;
        font-weight: 600;

    }

    .bluk-trial_mess:hover {
        transition: .25s ease;
        transform: translateY(-5px);
        box-shadow: 0px 3px 3px 2px #4c5b78;
    }


    .img_card {
        width: 60%;
        background-color: white;
        position: relative;
        border-radius: 15px;
        margin: auto;
        height: 100%;
    }

    .img_card .message_box_grid {
        padding: 20px;
        position: relative;
        z-index: 2;

    }

    .message_box_grid .reni985 {
        padding: 5px 0;
        font-size: 11px;
        font-weight: 600;
    }



    .top-box_for-hero_sole {
        width: 100%;
        padding-top: 10px;
        padding-bottom: 17px;
        border-bottom: 1px solid#6666664d
    }


    .solte_srid {
        width: 100%;
        display: grid;
        gap: 10px;
        grid-template-columns: 0.2fr 1.1fr;
    }

    .top-box_for-hero_sole span svg {
        width: 45px;
        padding: 7px;
        border-radius: 50%;
        background: linear-gradient(134deg, #0B5CFF 0%, #1b2436f2 100%);
        color: #0A5CFF;
    }

    .ih85saj2 h5 {

        font-weight: 800;
    }

    .ih85saj2 span {
        font-size: 12px;
        color: rgba(34, 197, 94, 0.86);
        /* position: relative; */
        display: flex;
        flex-direction: row;
        align-items: baseline;

        em {
            display: block;
            width: 10px;
            height: 10px;
            /* background-color: rgba(136, 218, 59, 0.86); */
            background-color: rgba(34, 197, 94, 0.86);

            border-radius: 50%;
            margin-right: 5px;
            box-shadow:
                0 0 5px rgba(34, 197, 94, 0.9),
                0 0 0 0 rgba(255, 255, 255, 0.8);

            animation: greenPulse 1.8s infinite;
        }

    }


    @keyframes greenPulse {
        0% {
            box-shadow:
                0 0 5px rgba(34, 197, 94, 0.9),
                0 0 0 0 rgba(255, 255, 255, 0.8);
        }

        70% {
            box-shadow:
                0 0 8px rgba(34, 197, 94, 0.6),
                0 0 0 9px rgba(255, 255, 255, 0);
        }

        100% {
            box-shadow:
                0 0 5px rgba(34, 197, 94, 0.9),
                0 0 0 0 rgba(255, 255, 255, 0);
        }
    }

    .card_img_bluk_hero {
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;

        margin-top: 17px;
    }

    .card_img_bluk_hero-1 {
        width: 100%;
        padding: 8px;
        border-radius: 8px;

        p {
            font-size: 10px;
            width: 100%;
        }
    }

    .gar_card_788 {
        display: grid;
        width: 100%;
        gap: 5px;
        grid-template-columns: 0.3fr 1.5fr 0.5fr;
        background-color: #F9FAFB;
        border-radius: 10px;
        align-items: start;
        padding: 10px 10px;
        margin: 5px 0;
    }

    .gar_card_788 span:first-child {
        color: #88e73b;
        width: 13px;
        height: 13px;
    }

    .gar_card_788 div {
        color: black;

        h6 {
            font-size: 9px;
        }

        p {
            font-size: 10px;
            color: #666669;
        }
    }

    .gar_card_788 span:last-child {
        color: #666669;
        font-size: 9px;
        text-align: center;
        padding-top: 7px;

    }

    .hero_first_img {
        position: absolute;
        width: 270px;
        bottom: 0;
        left: -210px;
        z-index: 0;
        box-shadow: inset 0 -15px 20px -15px rgb(252, 250, 250);
    }

    .hero_first_img img {
        /* box-shadow: inset 0 -15px 20px -15px rgb(252, 250, 250); */
        width: 100%;
        display: block;
        position: relative;
        z-index: 0;
    }

    /* Bottom blur + shadow */
    .hero_first_img::after {
        content: "";
        position: absolute;
        left: -5px;
        bottom: -27px;
        width: 100%;
        height: 48px;
        background: #E7EEFF;
        /* background: rgba(254, 254, 255, 0.99); */
        border-radius: 50%;
        filter: blur(8px);
        z-index: 1;
    }


    .your-box-up-and_down-animation {
        animation: softFloat 3s ease-in-out infinite;
    }

    @keyframes softFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-6px);
        }
    }

    @media (max-width: 991px) {
        .img_card {
            display: none;
        }

        .bluk-sms-hero .bluk-box {
            grid-template-columns: 1fr;
        }

        .bluk-titial h1 {
            width: 100%;
        }

        .bluk_set .tital_pera {
            width: 100%;
        }


    }

    @media (max-width:648px) {

        .bluk-titial h1 {
            width: 100%;
        }

        .bluk_set .tital_pera {
            width: 100%;
        }

        .bluk_tags_hero {
            grid-template-columns: repeat(2, 1fr);

            span {
                width: 100%;
                text-align: center;
            }
        }
    }

    .decor-hero-grid {
        position: absolute;
        bottom: -20px;
        left: -20px;
        width: 260px;
        height: 220px;
        background-image: radial-gradient(circle, #4F46E5 1.6px, transparent 1.6px);
        background-size: 24px 24px;
        -webkit-mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        mask-image: radial-gradient(ellipse at bottom left, black 0%, black 25%, transparent 72%);
        opacity: .28;
        z-index: 0;
        pointer-events: none;
        animation: hero-grid-shift 9s ease-in-out infinite;
    }


    @keyframes hero-grid-shift {

        0%,
        100% {
            background-position: 0 0;
        }

        50% {
            background-position: 8px -8px;
        }
    }
</style>
<section class="bluk-sms-hero cycle_animation">
    <div class="decor-hero-grid"></div>
    <div class="bluk-box">

        <div class="bluk_set">

            <div class="bluk-buage">
                <p>Bulk SMS Provider in Delhi</p>
            </div>
            <div class="bluk-titial">
                <h1>Bulk SMS Service <em> Provider in Delhi </em></h1>
            </div>

            <p class="tital_pera">
                In a world where emails get buried and ad budgets burn fast without guaranteed returns, text messaging remains the single most effective way to grab immediate attention. Over 70% of text messages are opened within three minutes of delivery making SMS the ultimate channel for urgent alerts, flash offers, and seamless customer communications. <span id="read_btn">Read More</span>
            </p>
            <p class="tital_pera" id="extr_texrt" style="display: none;">
                At <em>Kings Digital </em> , we operate as a premier <em> Bulk SMS Service Provider in Delhi </em>, delivering a high-speed, enterprise-grade messaging infrastructure designed to help your business reach thousands of customers instantly. Whether you run a bustling retail outlet in Lajpat Nagar, manage property leads across Dwarka, or coordinate corporate logistics in Cyber City, our platform turns direct mobile communication into measurable revenue growth all with 100% TRAI DLT compliance.
            </p>


            <div class="bluk_tags_hero">
                <span> <em>✓</em> Bulk SMS </span>
                <span> <em>✓</em> Promotional SMS </span>
                <span> <em>✓</em> Transactional SMS </span>
                <span> <em>✓</em> OTP SMS </span>

            </div>

            <button class="bluk-trial_mess">Start Free Trial</button>
        </div>

        <div class="img_card  your-box-up-and_down-animation">

            <div class="hero_first_img your-box-up-and_down-animation">
                <img src="assets/images/gopk.png" alt="">
            </div>

            <div class="message_box_grid your-box-up-and_down-animation">

                <div class="top-box_for-hero_sole">
                    <div class="solte_srid">
                        <span>
                            <svg fill="#e6e7e7" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.2 -51.2 614.40 614.40" xml:space="preserve" transform="rotate(0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="4.095992000000001"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path d="M370.07,0H141.928c-24.247,0-43.971,19.725-43.971,43.971v424.057c0,24.245,19.725,43.971,43.971,43.971h228.144 c24.245,0,43.971-19.725,43.971-43.971V43.971C414.041,19.725,394.317,0,370.07,0z M380.65,468.029 c0,5.833-4.745,10.579-10.579,10.579H141.928c-5.833,0-10.579-4.746-10.579-10.579v-57.376H380.65V468.029z M380.65,377.262 H131.348V124.555H380.65V377.262z M380.651,91.163H131.348V43.971c0-5.833,4.745-10.58,10.579-10.58h228.144 c5.833,0,10.579,4.746,10.579,10.58V91.163z"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="208.884" y="45.581" width="94.23" height="33.391"></rect>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <circle cx="255.999" cy="443.96" r="20.191"></circle>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <div class="ih85saj2">
                            <h5>Bulk SMS Dashboard</h5>
                            <span><em></em>All systems operational</span>
                        </div>
                    </div>
                </div>

                <div class="seconde-box_for-hero_sole your-box-up-and_down-animation">

                    <div class="card_img_bluk_hero">
                        <div class="card_img_bluk_hero-1" style="background: #E7F2FF;color:#0B5CFF;">
                            <p>SMS Sent Today</p>
                            <h4><span class="qunik-count" data-target="1.2" data-suffix="M">0</span></h4>
                        </div>
                        <div class="card_img_bluk_hero-1" style="background: #ddeed6;color:green;">
                            <p>Delivery Rate</p>
                            <h4><span class="qunik-count" data-target="98.9" data-suffix="%">0</span></h4>
                        </div>
                    </div>

                </div>

                <h4 class="reni985">Recent Bulk SMS</h4>


                <div class="tharth-box_for-hero_sole your-box-up-and_down-animation">
                    <div class="gar_card_788">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-5 h-5 text-green-500 flex-shrink-0">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                        </span>
                        <div>
                            <h6>Order confirmation SMS</h6>
                            <p>+917894561232</p>
                        </div>
                        <span>10s ago</span>
                    </div>
                </div>


                <div class="fourth-box_for-hero_sole your-box-up-and_down-animation">
                    <div class="gar_card_788">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-5 h-5 text-green-500 flex-shrink-0">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                        </span>
                        <div>
                            <h6>Order confirmation SMS</h6>
                            <p>+917894561230</p>
                        </div>
                        <span>1m ago</span>
                    </div>
                </div>

                <div class="fourth-box_for-hero_sole your-box-up-and_down-animation">
                    <div class="gar_card_788">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-5 h-5 text-green-500 flex-shrink-0">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                        </span>
                        <div>
                            <h6>Order confirmation SMS</h6>
                            <p>+917894561231</p>
                        </div>
                        <span>1m ago</span>
                    </div>
                </div>
                <div class="fourth-box_for-hero_sole your-box-up-and_down-animation">
                    <div class="gar_card_788">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-5 h-5 text-green-500 flex-shrink-0">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                        </span>
                        <div>
                            <h6>Order confirmation SMS</h6>
                            <p>+917894563231</p>
                        </div>
                        <span>2m ago</span>
                    </div>
                </div>
                <div class="fourth-box_for-hero_sole your-box-up-and_down-animation">
                    <div class="gar_card_788">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle w-5 h-5 text-green-500 flex-shrink-0">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                        </span>
                        <div>
                            <h6>Order confirmation SMS</h6>
                            <p>+917894578231</p>
                        </div>
                        <span>2m ago</span>
                    </div>
                </div>




            </div>

        </div>
    </div>

</section>


<script>

    let extr_texrt = document.getElementById("extr_texrt");
    let read_btn = document.getElementById("read_btn");

    document.addEventListener("click")
    
</script> -->