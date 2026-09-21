<!-- =========================================================
 KING DIGITAL PORTFOLIO
 ABOUT OUR WORK — PREMIUM COMPACT SECTION
 COMPLETE FINAL CODE
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

#kd-portfolio-about,
#kd-portfolio-about *{
    box-sizing:border-box;
}

#kd-portfolio-about{

    --navy:#060F3E;
    --navy2:#0B2148;
    --navy3:#12365E;

    --orange:#F47B20;
    --orange2:#FF9145;
    --coral:#FF6548;
    --gold:#FFB84D;

    --text:#626D7D;
    --line:#E7EAF0;

    position:relative;

    width:100%;

    overflow:hidden;

    /*
       REDUCED BOTTOM PADDING
    */
    padding:54px 40px 35px;

    font-family:'Manrope',sans-serif;

    background:
        radial-gradient(
            circle at 7% 15%,
            rgba(244,123,32,.075),
            transparent 24%
        ),
        radial-gradient(
            circle at 93% 80%,
            rgba(6,15,62,.045),
            transparent 25%
        ),
        linear-gradient(
            180deg,
            #FFFFFF 0%,
            #FBFCFE 100%
        );
}


/* =========================================================
 BACKGROUND GRID
========================================================= */

#kd-portfolio-about .kdpa-grid{

    position:absolute;

    inset:0;

    pointer-events:none;

    opacity:.26;

    background-image:

        linear-gradient(
            rgba(6,15,62,.020) 1px,
            transparent 1px
        ),

        linear-gradient(
            90deg,
            rgba(6,15,62,.020) 1px,
            transparent 1px
        );

    background-size:56px 56px;

    -webkit-mask-image:
        radial-gradient(
            ellipse at center,
            #000 0%,
            transparent 72%
        );

    mask-image:
        radial-gradient(
            ellipse at center,
            #000 0%,
            transparent 72%
        );
}


/* =========================================================
 LEFT DECORATION
========================================================= */

#kd-portfolio-about .kdpa-orbit{

    position:absolute;

    left:-120px;

    top:44%;

    width:230px;
    height:230px;

    border-radius:50%;

    border:
        1px solid rgba(244,123,32,.09);

    box-shadow:

        0 0 0 38px
        rgba(244,123,32,.015),

        0 0 0 76px
        rgba(244,123,32,.007);

    pointer-events:none;
}


/* =========================================================
 RIGHT DOTS
========================================================= */

#kd-portfolio-about .kdpa-dots{

    position:absolute;

    right:32px;
    top:30px;

    width:88px;
    height:88px;

    pointer-events:none;

    opacity:.12;

    background-image:

        radial-gradient(
            var(--orange) 1px,
            transparent 1px
        );

    background-size:14px 14px;
}


/* =========================================================
 SMALL FLOATING PLUS
========================================================= */

#kd-portfolio-about .kdpa-plus{

    position:absolute;

    right:9%;

    bottom:30px;

    width:18px;
    height:18px;

    opacity:.28;

    pointer-events:none;
}

#kd-portfolio-about .kdpa-plus::before,
#kd-portfolio-about .kdpa-plus::after{

    content:"";

    position:absolute;

    left:50%;
    top:50%;

    border-radius:20px;

    background:var(--orange);

    transform:translate(-50%,-50%);
}

#kd-portfolio-about .kdpa-plus::before{

    width:18px;
    height:2px;
}

#kd-portfolio-about .kdpa-plus::after{

    width:2px;
    height:18px;
}


/* =========================================================
 CONTAINER
========================================================= */

#kd-portfolio-about .kdpa-container{

    position:relative;

    z-index:2;

    width:100%;

    max-width:1020px;

    margin:0 auto;

    text-align:center;
}


/* =========================================================
 EYEBROW
========================================================= */

#kd-portfolio-about .kdpa-eyebrow{

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    margin-bottom:13px;

    padding:8px 13px;

    border-radius:100px;

    color:var(--orange);

    font-size:9px;
    line-height:1;

    font-weight:800;

    letter-spacing:.13em;

    text-transform:uppercase;

    background:
        linear-gradient(
            135deg,
            #FFF8F3,
            #FFF1E7
        );

    border:
        1px solid rgba(244,123,32,.15);

    box-shadow:
        0 5px 18px rgba(244,123,32,.05);
}


#kd-portfolio-about .kdpa-eyebrow-dot{

    position:relative;

    width:6px;
    height:6px;

    flex:0 0 6px;

    border-radius:50%;

    background:var(--orange);
}


#kd-portfolio-about .kdpa-eyebrow-dot::after{

    content:"";

    position:absolute;

    inset:-4px;

    border-radius:50%;

    border:
        1px solid rgba(244,123,32,.20);
}


/* =========================================================
 HEADING
========================================================= */

#kd-portfolio-about .kdpa-title{

    display:block;

    max-width:930px;

    margin:0 auto;

    padding:3px 5px 8px;

    overflow:visible!important;

    color:var(--navy);

    font-size:44px;

    line-height:1.16;

    font-weight:800;

    letter-spacing:-1.8px;

    text-wrap:balance;
}


#kd-portfolio-about .kdpa-gradient{

    display:block;

    width:max-content;

    max-width:100%;

    margin:2px auto 0;

    padding:1px 4px 5px;

    line-height:1.20;

    color:transparent;

    background:

        linear-gradient(
            100deg,
            #D84E0A 0%,
            #F36D16 20%,
            #FF8A32 39%,
            #FF6548 57%,
            #FF9145 76%,
            #FFB84D 100%
        );

    background-size:190% 100%;

    -webkit-background-clip:text;

    background-clip:text;

    -webkit-text-fill-color:transparent;

    animation:
        kdpaGradientMove
        7s
        ease-in-out
        infinite
        alternate;
}


@keyframes kdpaGradientMove{

    0%{
        background-position:0% 50%;
    }

    100%{
        background-position:100% 50%;
    }

}


/* =========================================================
 DESCRIPTION
========================================================= */

#kd-portfolio-about .kdpa-description{

    max-width:835px;

    margin:11px auto 0;

    color:var(--text);

    font-size:14.5px;

    line-height:1.78;

    font-weight:500;
}


/* =========================================================
 CENTER ACCENT
========================================================= */

#kd-portfolio-about .kdpa-accent{

    position:relative;

    width:82px;
    height:2px;

    margin:19px auto 18px;

    overflow:visible;

    border-radius:50px;

    background:#E7EAF0;
}


#kd-portfolio-about .kdpa-accent::before{

    content:"";

    position:absolute;

    left:50%;
    top:50%;

    width:48px;
    height:3px;

    border-radius:50px;

    transform:translate(-50%,-50%);

    background:

        linear-gradient(
            90deg,
            var(--orange),
            var(--orange2),
            var(--gold)
        );

    box-shadow:
        0 2px 8px rgba(244,123,32,.16);
}


#kd-portfolio-about .kdpa-accent::after{

    content:"";

    position:absolute;

    left:50%;
    top:50%;

    width:7px;
    height:7px;

    border-radius:50%;

    transform:translate(-50%,-50%);

    background:#FFFFFF;

    border:2px solid var(--orange);
}


/* =========================================================
 SERVICE PILLS
========================================================= */

#kd-portfolio-about .kdpa-services{

    display:flex;

    align-items:center;
    justify-content:center;

    flex-wrap:wrap;

    gap:8px;

    max-width:850px;

    margin:0 auto;
}


#kd-portfolio-about .kdpa-service{

    position:relative;

    min-height:38px;

    padding:0 13px;

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    overflow:hidden;

    border-radius:9px;

    color:var(--navy);

    font-size:10px;

    line-height:1;

    font-weight:700;

    background:
        rgba(255,255,255,.88);

    border:
        1px solid var(--line);

    box-shadow:
        0 5px 16px rgba(6,15,62,.035);

    transition:
        transform .28s ease,
        border-color .28s ease,
        box-shadow .28s ease,
        color .28s ease;
}


#kd-portfolio-about .kdpa-service::before{

    content:"";

    position:absolute;

    left:0;
    bottom:0;

    width:0;
    height:2px;

    border-radius:10px;

    background:

        linear-gradient(
            90deg,
            var(--orange),
            var(--orange2)
        );

    transition:
        width .32s ease;
}


#kd-portfolio-about .kdpa-service i{

    color:var(--orange);

    font-size:10px;

    transition:
        transform .28s ease;
}


#kd-portfolio-about .kdpa-service:hover{

    transform:translateY(-3px);

    border-color:
        rgba(244,123,32,.28);

    box-shadow:
        0 10px 24px rgba(6,15,62,.075);
}


#kd-portfolio-about .kdpa-service:hover::before{

    width:100%;
}


#kd-portfolio-about .kdpa-service:hover i{

    transform:scale(1.12);
}


/* =========================================================
 TABLET
========================================================= */

@media(max-width:900px){

    #kd-portfolio-about{

        padding:
            48px 28px 31px;
    }


    #kd-portfolio-about .kdpa-title{

        font-size:38px;

        letter-spacing:-1.3px;
    }


    #kd-portfolio-about .kdpa-description{

        max-width:730px;

        font-size:14px;
    }

}


/* =========================================================
 MOBILE
========================================================= */

@media(max-width:600px){

    #kd-portfolio-about{

        padding:
            39px 17px 25px;
    }


    #kd-portfolio-about .kdpa-eyebrow{

        margin-bottom:10px;

        padding:7px 10px;

        font-size:8px;
    }


    #kd-portfolio-about .kdpa-title{

        padding-bottom:5px;

        font-size:30px;

        line-height:1.22;

        letter-spacing:-.9px;
    }


    #kd-portfolio-about .kdpa-gradient{

        margin-top:1px;

        line-height:1.24;
    }


    #kd-portfolio-about .kdpa-description{

        margin-top:7px;

        font-size:13px;

        line-height:1.72;
    }


    #kd-portfolio-about .kdpa-accent{

        margin:
            16px auto 15px;
    }


    #kd-portfolio-about .kdpa-services{

        gap:6px;
    }


    #kd-portfolio-about .kdpa-service{

        min-height:35px;

        padding:0 10px;

        gap:6px;

        font-size:9px;

        border-radius:8px;
    }


    #kd-portfolio-about .kdpa-service i{

        font-size:9px;
    }


    #kd-portfolio-about .kdpa-dots{

        display:none;
    }


    #kd-portfolio-about .kdpa-plus{

        display:none;
    }

}


@media(max-width:380px){

    #kd-portfolio-about .kdpa-title{

        font-size:27px;
    }

}


/* =========================================================
 REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #kd-portfolio-about *,
    #kd-portfolio-about *::before,
    #kd-portfolio-about *::after{

        animation:none!important;

        transition:none!important;
    }

}

</style>


<section id="kd-portfolio-about">


    <!-- BACKGROUND -->

    <div class="kdpa-grid"></div>

    <div class="kdpa-orbit"></div>

    <div class="kdpa-dots"></div>

    <div class="kdpa-plus"></div>


    <div class="kdpa-container">


        <!-- EYEBROW -->

        <div class="kdpa-eyebrow">

            <span class="kdpa-eyebrow-dot"></span>

            ABOUT OUR WORK

        </div>


        <!-- HEADING -->

        <h2 class="kdpa-title">

            Ideas Are Just The Beginning.

            <span class="kdpa-gradient">
                We Turn Them Into Digital Experiences.
            </span>

        </h2>


        <!-- DESCRIPTION -->

        <p class="kdpa-description">

            At King Digital, every project begins with understanding
            the brand, its audience and what it needs to communicate.
            From websites and digital campaigns to creative designs,
            reels and video content, we combine strategy, creativity
            and execution to build a clear, consistent and engaging
            digital presence.

        </p>


        <!-- CENTER ACCENT -->

        <div class="kdpa-accent"></div>


        <!-- SERVICES -->

        <div class="kdpa-services">


            <div class="kdpa-service">

                <i class="fa-solid fa-laptop-code"></i>

                <span>Web Design</span>

            </div>


            <div class="kdpa-service">

                <i class="fa-solid fa-chart-line"></i>

                <span>Digital Marketing</span>

            </div>


            <div class="kdpa-service">

                <i class="fa-solid fa-pen-ruler"></i>

                <span>Creative Design</span>

            </div>


            <div class="kdpa-service">

                <i class="fa-solid fa-mobile-screen-button"></i>

                <span>Reels & Social</span>

            </div>


            <div class="kdpa-service">

                <i class="fa-solid fa-clapperboard"></i>

                <span>Video Content</span>

            </div>


        </div>


    </div>

</section>