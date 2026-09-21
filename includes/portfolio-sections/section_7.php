<!-- =========================================================
 KING DIGITAL PORTFOLIO
 FINAL PREMIUM CTA
 NO GIF / NO MOCKUP / CLEAN & PROFESSIONAL
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

/* =========================================================
 BASE
========================================================= */

#kd-final-portfolio-cta,
#kd-final-portfolio-cta *{
    box-sizing:border-box;
}

#kd-final-portfolio-cta{

    --navy:#060F3E;
    --navy2:#0B2148;
    --navy3:#12365E;

    --orange:#F47B20;
    --orange2:#FF9145;
    --orange3:#FFB36F;
    --coral:#FF6548;
    --gold:#FFB84D;

    position:relative;
    width:100%;

    padding:58px 42px;

    overflow:hidden;

    font-family:'Manrope',sans-serif;

    background:#F7F9FC;
}


/* =========================================================
 CTA WRAPPER
========================================================= */

#kd-final-portfolio-cta .kdfcta-box{

    position:relative;

    width:100%;
    max-width:1320px;

    margin:0 auto;

    padding:68px 50px 55px;

    overflow:hidden;

    border-radius:25px;

    text-align:center;

    background:
        radial-gradient(
            circle at 10% 90%,
            rgba(244,123,32,.13),
            transparent 30%
        ),
        radial-gradient(
            circle at 88% 15%,
            rgba(255,145,69,.14),
            transparent 27%
        ),
        linear-gradient(
            125deg,
            #040B2B 0%,
            #060F3E 34%,
            #0A2147 69%,
            #0D3159 100%
        );

    box-shadow:
        0 24px 55px rgba(6,15,62,.17);
}


/* =========================================================
 SUBTLE TOP BORDER
========================================================= */

#kd-final-portfolio-cta .kdfcta-box::before{

    content:"";

    position:absolute;

    left:12%;
    right:12%;
    top:0;

    height:2px;

    background:
        linear-gradient(
            90deg,
            transparent,
            var(--orange),
            var(--orange2),
            var(--gold),
            transparent
        );
}


/* =========================================================
 SUBTLE GRID
========================================================= */

#kd-final-portfolio-cta .kdfcta-grid{

    position:absolute;
    inset:0;

    pointer-events:none;

    opacity:.055;

    background-image:
        linear-gradient(
            rgba(255,255,255,.20) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,.20) 1px,
            transparent 1px
        );

    background-size:52px 52px;
}


/* =========================================================
 DECORATIVE CIRCLES
========================================================= */

#kd-final-portfolio-cta .kdfcta-circle-one{

    position:absolute;

    left:7%;
    top:47px;

    width:29px;
    height:29px;

    border-radius:50%;

    border:
        1px solid rgba(255,145,69,.40);

    pointer-events:none;
}


#kd-final-portfolio-cta .kdfcta-circle-two{

    position:absolute;

    right:7%;
    top:58px;

    width:45px;
    height:45px;

    border-radius:50%;

    border:
        1px solid rgba(255,255,255,.11);

    box-shadow:
        inset 0 0 0 8px rgba(255,255,255,.018);

    pointer-events:none;
}


/* =========================================================
 ORANGE GLOW
========================================================= */

#kd-final-portfolio-cta .kdfcta-glow{

    position:absolute;

    left:50%;
    bottom:-230px;

    width:650px;
    height:400px;

    transform:translateX(-50%);

    pointer-events:none;

    border-radius:50%;

    background:
        radial-gradient(
            ellipse,
            rgba(244,123,32,.15),
            rgba(244,123,32,.045) 40%,
            transparent 70%
        );
}


/* =========================================================
 CONTENT
========================================================= */

#kd-final-portfolio-cta .kdfcta-content{

    position:relative;

    z-index:3;

    width:100%;
    max-width:850px;

    margin:0 auto;
}


/* =========================================================
 EYEBROW
========================================================= */

#kd-final-portfolio-cta .kdfcta-eyebrow{

    display:inline-flex;

    align-items:center;

    justify-content:center;

    gap:8px;

    min-height:31px;

    margin-bottom:15px;

    padding:0 13px;

    border-radius:100px;

    color:#FFB078;

    font-size:9px;

    line-height:1;

    font-weight:800;

    letter-spacing:.13em;

    text-transform:uppercase;

    background:
        rgba(244,123,32,.09);

    border:
        1px solid rgba(255,145,69,.20);
}


#kd-final-portfolio-cta .kdfcta-eyebrow i{

    font-size:8px;
}


/* =========================================================
 HEADING
========================================================= */

#kd-final-portfolio-cta .kdfcta-title{

    display:block;

    max-width:800px;

    margin:0 auto;

    padding:3px 4px 9px;

    overflow:visible!important;

    color:#FFFFFF;

    font-size:52px;

    line-height:1.12;

    font-weight:800;

    letter-spacing:-2.2px;

    text-wrap:balance;
}


#kd-final-portfolio-cta .kdfcta-highlight{

    display:block;

    width:max-content;
    max-width:100%;

    margin:0 auto;

    padding:2px 4px 7px;

    line-height:1.18;

    color:transparent;

    background:
        linear-gradient(
            100deg,
            #E65D10 0%,
            #F47B20 22%,
            #FF9145 45%,
            #FF6548 67%,
            #FFB84D 100%
        );

    -webkit-background-clip:text;
    background-clip:text;

    -webkit-text-fill-color:transparent;
}


/* =========================================================
 DESCRIPTION
========================================================= */

#kd-final-portfolio-cta .kdfcta-description{

    max-width:690px;

    margin:10px auto 0;

    color:rgba(255,255,255,.68);

    font-size:15.5px;

    line-height:1.78;

    font-weight:500;
}


/* =========================================================
 BUTTONS
========================================================= */

#kd-final-portfolio-cta .kdfcta-actions{

    display:flex;

    align-items:center;

    justify-content:center;

    flex-wrap:wrap;

    gap:12px;

    margin-top:28px;
}


#kd-final-portfolio-cta .kdfcta-btn{

    min-width:180px;
    min-height:50px;

    padding:0 20px;

    display:inline-flex;

    align-items:center;

    justify-content:center;

    gap:9px;

    border-radius:11px;

    font-size:11px;

    line-height:1;

    font-weight:800;

    text-decoration:none;

    transition:
        transform .28s ease,
        box-shadow .28s ease,
        background .28s ease,
        border-color .28s ease;
}


/* PRIMARY */

#kd-final-portfolio-cta .kdfcta-primary{

    color:#FFFFFF;

    background:
        linear-gradient(
            135deg,
            #DD570F 0%,
            var(--orange) 45%,
            var(--orange2) 100%
        );

    border:
        1px solid rgba(255,255,255,.07);

    box-shadow:
        0 12px 28px rgba(244,123,32,.27);
}


#kd-final-portfolio-cta .kdfcta-primary:hover{

    transform:translateY(-3px);

    box-shadow:
        0 17px 34px rgba(244,123,32,.36);
}


/* SECONDARY */

#kd-final-portfolio-cta .kdfcta-secondary{

    color:#FFFFFF;

    background:
        rgba(255,255,255,.065);

    border:
        1px solid rgba(255,255,255,.16);
}


#kd-final-portfolio-cta .kdfcta-secondary:hover{

    transform:translateY(-3px);

    background:
        rgba(255,255,255,.11);

    border-color:
        rgba(255,255,255,.27);
}


#kd-final-portfolio-cta .kdfcta-btn i{

    font-size:10px;

    transition:transform .28s ease;
}


#kd-final-portfolio-cta .kdfcta-btn:hover i{

    transform:translateX(3px);
}


/* =========================================================
 TRUST POINTS
========================================================= */

#kd-final-portfolio-cta .kdfcta-points{

    position:relative;

    display:flex;

    align-items:center;

    justify-content:center;

    flex-wrap:wrap;

    gap:28px;

    margin-top:34px;

    padding-top:22px;
}


#kd-final-portfolio-cta .kdfcta-points::before{

    content:"";

    position:absolute;

    left:50%;
    top:0;

    width:410px;
    max-width:75%;

    height:1px;

    transform:translateX(-50%);

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.14),
            transparent
        );
}


#kd-final-portfolio-cta .kdfcta-point{

    display:flex;

    align-items:center;

    gap:7px;

    color:rgba(255,255,255,.58);

    font-size:10px;

    line-height:1.4;

    font-weight:600;
}


#kd-final-portfolio-cta .kdfcta-check{

    width:19px;
    height:19px;

    flex:0 0 19px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:50%;

    color:#FFFFFF;

    font-size:7px;

    background:
        rgba(244,123,32,.16);

    border:
        1px solid rgba(255,145,69,.25);
}


#kd-final-portfolio-cta .kdfcta-check i{

    color:#FF9B56;
}


/* =========================================================
 SMALL BOTTOM LABEL
========================================================= */

#kd-final-portfolio-cta .kdfcta-bottom{

    margin-top:16px;

    color:rgba(255,255,255,.34);

    font-size:8px;

    line-height:1.5;

    font-weight:700;

    letter-spacing:.09em;

    text-transform:uppercase;
}


/* =========================================================
 TABLET
========================================================= */

@media(max-width:900px){

    #kd-final-portfolio-cta{

        padding:48px 28px;
    }


    #kd-final-portfolio-cta .kdfcta-box{

        padding:
            60px 35px 49px;

        border-radius:23px;
    }


    #kd-final-portfolio-cta .kdfcta-title{

        font-size:45px;
    }


    #kd-final-portfolio-cta .kdfcta-description{

        max-width:620px;

        font-size:15px;
    }

}


/* =========================================================
 MOBILE
========================================================= */

@media(max-width:600px){

    #kd-final-portfolio-cta{

        padding:
            34px 14px;
    }


    #kd-final-portfolio-cta .kdfcta-box{

        padding:
            43px 18px 34px;

        border-radius:19px;
    }


    #kd-final-portfolio-cta .kdfcta-circle-one{

        left:20px;
        top:22px;

        width:20px;
        height:20px;
    }


    #kd-final-portfolio-cta .kdfcta-circle-two{

        right:19px;
        top:25px;

        width:29px;
        height:29px;
    }


    #kd-final-portfolio-cta .kdfcta-eyebrow{

        min-height:28px;

        margin-bottom:12px;

        padding:0 10px;

        font-size:7.5px;
    }


    #kd-final-portfolio-cta .kdfcta-title{

        padding-bottom:5px;

        font-size:32px;

        line-height:1.20;

        letter-spacing:-1px;
    }


    #kd-final-portfolio-cta .kdfcta-highlight{

        line-height:1.23;
    }


    #kd-final-portfolio-cta .kdfcta-description{

        margin-top:7px;

        font-size:13px;

        line-height:1.72;
    }


    #kd-final-portfolio-cta .kdfcta-actions{

        flex-wrap:nowrap;

        gap:7px;

        margin-top:22px;
    }


    #kd-final-portfolio-cta .kdfcta-btn{

        min-width:0;

        min-height:44px;

        padding:0 12px;

        font-size:9px;
    }


    #kd-final-portfolio-cta .kdfcta-points{

        gap:11px 17px;

        margin-top:26px;

        padding-top:19px;
    }


    #kd-final-portfolio-cta .kdfcta-point{

        font-size:8.5px;
    }


    #kd-final-portfolio-cta .kdfcta-check{

        width:17px;
        height:17px;

        flex-basis:17px;
    }


    #kd-final-portfolio-cta .kdfcta-bottom{

        margin-top:13px;

        font-size:7px;
    }

}


/* =========================================================
 SMALL MOBILE
========================================================= */

@media(max-width:390px){

    #kd-final-portfolio-cta .kdfcta-title{

        font-size:29px;
    }


    #kd-final-portfolio-cta .kdfcta-actions{

        flex-direction:column;
    }


    #kd-final-portfolio-cta .kdfcta-btn{

        width:100%;
    }


    #kd-final-portfolio-cta .kdfcta-points{

        flex-direction:column;

        align-items:flex-start;

        width:max-content;

        margin-left:auto;
        margin-right:auto;

        gap:9px;
    }

}


/* =========================================================
 REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #kd-final-portfolio-cta *,
    #kd-final-portfolio-cta *::before,
    #kd-final-portfolio-cta *::after{

        transition:none!important;
    }

}

</style>


<section id="kd-final-portfolio-cta">

    <div class="kdfcta-box">


        <!-- BACKGROUND -->

        <div class="kdfcta-grid"></div>

        <div class="kdfcta-circle-one"></div>

        <div class="kdfcta-circle-two"></div>

        <div class="kdfcta-glow"></div>


        <!-- CONTENT -->

        <div class="kdfcta-content">


            <!-- EYEBROW -->

            <div class="kdfcta-eyebrow">

                <i class="fa-regular fa-star"></i>

                LET'S WORK TOGETHER

            </div>


            <!-- HEADING -->

            <h2 class="kdfcta-title">

                Let's Build Something

                <span class="kdfcta-highlight">
                    Extraordinary Together.
                </span>

            </h2>


            <!-- DESCRIPTION -->

            <p class="kdfcta-description">

                Have a project, campaign or idea in mind?
                Partner with King Digital to turn it into a
                professional digital experience built with
                strategy, creativity and purpose.

            </p>


            <!-- BUTTONS -->

            <div class="kdfcta-actions">


                <a
                    href="/enquiry.php"
                    class="kdfcta-btn kdfcta-primary">

                    Start Your Project

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


                <a
                    href="/contact.php"
                    class="kdfcta-btn kdfcta-secondary">

                    <i class="fa-regular fa-comments"></i>

                    Let's Talk

                </a>


            </div>


            <!-- TRUST POINTS -->

            <div class="kdfcta-points">


                <div class="kdfcta-point">

                    <span class="kdfcta-check">

                        <i class="fa-solid fa-check"></i>

                    </span>

                    Creative Strategy

                </div>


                <div class="kdfcta-point">

                    <span class="kdfcta-check">

                        <i class="fa-solid fa-check"></i>

                    </span>

                    Professional Execution

                </div>


                <div class="kdfcta-point">

                    <span class="kdfcta-check">

                        <i class="fa-solid fa-check"></i>

                    </span>

                    Dedicated Support

                </div>


            </div>


            <!-- SMALL BOTTOM TEXT -->

            <div class="kdfcta-bottom">

                Web • Marketing • Creative • Video

            </div>


        </div>

    </div>

</section>