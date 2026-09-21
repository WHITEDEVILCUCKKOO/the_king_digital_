<!-- =========================================================
 KING DIGITAL PORTFOLIO
 HOW WE CREATE — FINAL VERSION
 ALL 4 CARDS SAME DESIGN
 BOTTOM CTA REMOVED
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

#kd-portfolio-process,
#kd-portfolio-process *{
    box-sizing:border-box;
}

#kd-portfolio-process{

    --navy:#060F3E;
    --navy2:#0B2148;
    --navy3:#12365E;

    --orange:#F47B20;
    --orange2:#FF9145;
    --orange3:#FFB36F;
    --coral:#FF6548;
    --gold:#FFB84D;

    --text:#626D7D;
    --muted:#8D97A5;
    --line:#E4E8ED;

    position:relative;
    width:100%;

    padding:64px 46px 48px;

    overflow:hidden;

    font-family:'Manrope',sans-serif;

    background:
        radial-gradient(
            circle at 8% 10%,
            rgba(244,123,32,.075),
            transparent 23%
        ),
        radial-gradient(
            circle at 94% 88%,
            rgba(6,15,62,.045),
            transparent 25%
        ),
        linear-gradient(
            180deg,
            #FFFFFF 0%,
            #F8FAFC 100%
        );
}


/* =========================================================
 BACKGROUND GRID
========================================================= */

#kd-portfolio-process .kdpp-grid{

    position:absolute;
    inset:0;

    pointer-events:none;

    opacity:.25;

    background-image:
        linear-gradient(
            rgba(6,15,62,.022) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(6,15,62,.022) 1px,
            transparent 1px
        );

    background-size:58px 58px;

    -webkit-mask-image:
        radial-gradient(
            ellipse at center,
            #000 0%,
            transparent 78%
        );

    mask-image:
        radial-gradient(
            ellipse at center,
            #000 0%,
            transparent 78%
        );
}


/* =========================================================
 DECORATIONS
========================================================= */

#kd-portfolio-process .kdpp-dots{

    position:absolute;

    right:28px;
    top:32px;

    width:92px;
    height:92px;

    opacity:.13;

    pointer-events:none;

    background-image:
        radial-gradient(
            var(--orange) 1.2px,
            transparent 1.2px
        );

    background-size:14px 14px;
}


#kd-portfolio-process .kdpp-orbit{

    position:absolute;

    left:-155px;
    bottom:-165px;

    width:330px;
    height:330px;

    border-radius:50%;

    border:
        1px solid rgba(244,123,32,.08);

    box-shadow:
        0 0 0 45px rgba(244,123,32,.012),
        0 0 0 90px rgba(244,123,32,.006);

    pointer-events:none;
}


/* =========================================================
 CONTAINER
========================================================= */

#kd-portfolio-process .kdpp-container{

    position:relative;
    z-index:2;

    width:100%;
    max-width:1320px;

    margin:0 auto;
}


/* =========================================================
 TOP INTRO
========================================================= */

#kd-portfolio-process .kdpp-intro{

    display:grid;

    grid-template-columns:
        minmax(0,.95fr)
        minmax(380px,.72fr);

    align-items:end;

    gap:70px;

    margin-bottom:42px;
}


/* =========================================================
 EYEBROW
========================================================= */

#kd-portfolio-process .kdpp-eyebrow{

    display:inline-flex;

    align-items:center;

    gap:8px;

    margin-bottom:14px;

    padding:8px 13px;

    border-radius:100px;

    color:var(--orange);

    font-size:10px;
    line-height:1;

    font-weight:800;

    letter-spacing:.13em;

    text-transform:uppercase;

    background:
        linear-gradient(
            135deg,
            #FFF8F3,
            #FFF0E5
        );

    border:
        1px solid rgba(244,123,32,.16);

    box-shadow:
        0 5px 16px rgba(244,123,32,.045);
}


#kd-portfolio-process .kdpp-dot{

    position:relative;

    width:6px;
    height:6px;

    flex:0 0 6px;

    border-radius:50%;

    background:var(--orange);
}


#kd-portfolio-process .kdpp-dot::after{

    content:"";

    position:absolute;

    inset:-4px;

    border-radius:50%;

    border:
        1px solid rgba(244,123,32,.22);
}


/* =========================================================
 HEADING
========================================================= */

#kd-portfolio-process .kdpp-title{

    display:block;

    max-width:720px;

    margin:0;

    padding:3px 4px 8px;

    overflow:visible!important;

    color:var(--navy);

    font-size:48px;
    line-height:1.14;

    font-weight:800;

    letter-spacing:-2px;

    text-wrap:balance;
}


#kd-portfolio-process .kdpp-gradient{

    display:block;

    width:max-content;
    max-width:100%;

    padding:1px 3px 6px;

    line-height:1.20;

    color:transparent;

    background:
        linear-gradient(
            100deg,
            #D9500C 0%,
            #F36D16 19%,
            #FF8A32 37%,
            #FF6548 56%,
            #FF9145 76%,
            #FFB84D 100%
        );

    background-size:200% 100%;

    -webkit-background-clip:text;
    background-clip:text;

    -webkit-text-fill-color:transparent;

    animation:
        kdppGradient 7s ease-in-out infinite alternate;
}


@keyframes kdppGradient{

    from{
        background-position:0% 50%;
    }

    to{
        background-position:100% 50%;
    }

}


/* =========================================================
 RIGHT INTRO
========================================================= */

#kd-portfolio-process .kdpp-intro-right{

    padding-bottom:7px;
}


#kd-portfolio-process .kdpp-description{

    margin:0;

    color:var(--text);

    font-size:15px;
    line-height:1.75;

    font-weight:500;
}


#kd-portfolio-process .kdpp-mini-line{

    display:flex;

    align-items:center;

    gap:11px;

    margin-top:16px;

    color:var(--navy);

    font-size:12px;
    line-height:1.4;

    font-weight:800;
}


#kd-portfolio-process .kdpp-mini-line::before{

    content:"";

    width:38px;
    height:2px;

    flex:0 0 38px;

    border-radius:50px;

    background:
        linear-gradient(
            90deg,
            var(--orange),
            var(--orange2)
        );
}


/* =========================================================
 PROCESS GRID
========================================================= */

#kd-portfolio-process .kdpp-process{

    position:relative;

    display:grid;

    grid-template-columns:
        repeat(4,minmax(0,1fr));

    gap:16px;

    padding-top:31px;
}


/* =========================================================
 CONNECTING LINE
========================================================= */

#kd-portfolio-process .kdpp-process-line{

    position:absolute;

    z-index:0;

    left:10%;
    right:10%;

    top:13px;

    height:2px;

    overflow:hidden;

    border-radius:50px;

    background:#E2E7EC;
}


#kd-portfolio-process .kdpp-process-line::before{

    content:"";

    position:absolute;

    left:0;
    top:0;

    width:100%;
    height:100%;

    opacity:.28;

    background:
        linear-gradient(
            90deg,
            var(--orange),
            var(--orange2),
            var(--gold)
        );
}


#kd-portfolio-process .kdpp-process-line::after{

    content:"";

    position:absolute;

    left:-28%;
    top:0;

    width:28%;
    height:100%;

    border-radius:50px;

    background:
        linear-gradient(
            90deg,
            transparent,
            var(--orange),
            var(--orange2),
            transparent
        );

    animation:
        kdppLineMove 4s linear infinite;
}


@keyframes kdppLineMove{

    from{
        left:-28%;
    }

    to{
        left:100%;
    }

}


/* =========================================================
 ALL 4 CARDS — SAME DESIGN
========================================================= */

#kd-portfolio-process .kdpp-card{

    position:relative;

    z-index:2;

    min-width:0;
    min-height:304px;

    padding:26px 23px 22px;

    overflow:hidden;

    border-radius:17px;

    background:
        linear-gradient(
            180deg,
            #FFFFFF 0%,
            #FCFDFE 100%
        );

    border:
        1px solid var(--line);

    box-shadow:
        0 9px 28px rgba(6,15,62,.055);

    transition:
        transform .32s ease,
        border-color .32s ease,
        box-shadow .32s ease;
}


#kd-portfolio-process .kdpp-card:hover{

    transform:translateY(-7px);

    border-color:
        rgba(244,123,32,.30);

    box-shadow:
        0 20px 42px rgba(6,15,62,.11);
}


/* TOP ACCENT */

#kd-portfolio-process .kdpp-card::before{

    content:"";

    position:absolute;

    left:0;
    top:0;

    width:100%;
    height:3px;

    transform:scaleX(.24);

    transform-origin:left center;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--orange),
            var(--orange2),
            var(--gold)
        );

    transition:
        transform .4s ease;
}


#kd-portfolio-process .kdpp-card:hover::before{

    transform:scaleX(1);
}


/* SUBTLE GLOW */

#kd-portfolio-process .kdpp-card::after{

    content:"";

    position:absolute;

    right:-70px;
    top:-70px;

    width:150px;
    height:150px;

    border-radius:50%;

    pointer-events:none;

    opacity:0;

    background:
        radial-gradient(
            circle,
            rgba(244,123,32,.09),
            transparent 68%
        );

    transition:opacity .35s ease;
}


#kd-portfolio-process .kdpp-card:hover::after{

    opacity:1;
}


/* =========================================================
 CONNECTING NODE
========================================================= */

#kd-portfolio-process .kdpp-node{

    position:absolute;

    z-index:5;

    left:50%;
    top:-26px;

    width:18px;
    height:18px;

    transform:translateX(-50%);

    border-radius:50%;

    background:#FFFFFF;

    border:4px solid var(--orange);

    box-shadow:
        0 0 0 5px rgba(244,123,32,.10);
}


/* =========================================================
 CARD TOP
========================================================= */

#kd-portfolio-process .kdpp-card-top{

    position:relative;
    z-index:2;

    display:flex;

    align-items:center;

    justify-content:space-between;

    gap:12px;

    margin-bottom:23px;
}


/* NUMBER */

#kd-portfolio-process .kdpp-number{

    color:#D7DDE5;

    font-size:39px;
    line-height:1;

    font-weight:800;

    letter-spacing:-2px;

    transition:
        color .3s ease;
}


#kd-portfolio-process .kdpp-card:hover
.kdpp-number{

    color:
        rgba(244,123,32,.24);
}


/* ICON */

#kd-portfolio-process .kdpp-icon{

    width:49px;
    height:49px;

    flex:0 0 49px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:13px;

    color:var(--orange);

    font-size:17px;

    background:
        linear-gradient(
            135deg,
            #FFF8F3,
            #FFF0E5
        );

    border:
        1px solid rgba(244,123,32,.14);

    box-shadow:
        0 5px 15px rgba(244,123,32,.045);

    transition:
        transform .3s ease,
        color .3s ease,
        background .3s ease,
        box-shadow .3s ease;
}


#kd-portfolio-process .kdpp-card:hover
.kdpp-icon{

    color:#FFFFFF;

    transform:
        translateY(-2px)
        rotate(-4deg);

    background:
        linear-gradient(
            135deg,
            #E66013,
            var(--orange),
            var(--orange2)
        );

    box-shadow:
        0 9px 20px rgba(244,123,32,.22);
}


/* =========================================================
 CARD CONTENT
========================================================= */

#kd-portfolio-process .kdpp-card-content{

    position:relative;
    z-index:2;
}


#kd-portfolio-process .kdpp-label{

    margin-bottom:7px;

    color:var(--orange);

    font-size:10px;
    line-height:1.2;

    font-weight:800;

    letter-spacing:.12em;

    text-transform:uppercase;
}


#kd-portfolio-process .kdpp-card-title{

    margin:0;

    color:var(--navy);

    font-size:20px;
    line-height:1.35;

    font-weight:800;

    letter-spacing:-.45px;
}


#kd-portfolio-process .kdpp-card-text{

    margin:9px 0 0;

    color:var(--text);

    font-size:13px;
    line-height:1.68;

    font-weight:500;
}


/* =========================================================
 CARD FOOTER
========================================================= */

#kd-portfolio-process .kdpp-card-footer{

    position:absolute;

    z-index:2;

    left:23px;
    right:23px;
    bottom:21px;

    min-height:42px;

    display:flex;

    align-items:center;

    justify-content:space-between;

    gap:10px;

    padding-top:13px;

    border-top:
        1px solid #ECEFF3;
}


#kd-portfolio-process .kdpp-card-footer span{

    color:#7E8998;

    font-size:10px;
    line-height:1.4;

    font-weight:700;
}


#kd-portfolio-process .kdpp-arrow{

    width:31px;
    height:31px;

    flex:0 0 31px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:50%;

    color:var(--orange);

    font-size:9px;

    background:#FFF4EC;

    border:
        1px solid rgba(244,123,32,.08);

    transition:
        color .3s ease,
        background .3s ease,
        transform .3s ease;
}


#kd-portfolio-process .kdpp-card:hover
.kdpp-arrow{

    color:#FFFFFF;

    background:var(--orange);

    transform:translateX(3px);
}


/* =========================================================
 TABLET
========================================================= */

@media(max-width:1100px){

    #kd-portfolio-process{

        padding:
            54px 30px 44px;
    }


    #kd-portfolio-process .kdpp-intro{

        grid-template-columns:1fr;

        gap:14px;

        max-width:780px;

        margin:
            0 auto 35px;

        text-align:center;
    }


    #kd-portfolio-process .kdpp-title{

        max-width:760px;

        margin:0 auto;

        font-size:42px;
    }


    #kd-portfolio-process .kdpp-gradient{

        margin-left:auto;
        margin-right:auto;
    }


    #kd-portfolio-process .kdpp-description{

        max-width:680px;

        margin:0 auto;
    }


    #kd-portfolio-process .kdpp-mini-line{

        justify-content:center;
    }


    #kd-portfolio-process .kdpp-process{

        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:15px;

        padding-top:0;
    }


    #kd-portfolio-process .kdpp-process-line,
    #kd-portfolio-process .kdpp-node{

        display:none;
    }


    #kd-portfolio-process .kdpp-card{

        min-height:286px;
    }

}


/* =========================================================
 MOBILE
========================================================= */

@media(max-width:620px){

    #kd-portfolio-process{

        padding:
            41px 17px 32px;
    }


    #kd-portfolio-process .kdpp-intro{

        gap:10px;

        margin-bottom:25px;
    }


    #kd-portfolio-process .kdpp-eyebrow{

        margin-bottom:10px;

        padding:7px 10px;

        font-size:8px;
    }


    #kd-portfolio-process .kdpp-title{

        padding-bottom:5px;

        font-size:31px;
        line-height:1.22;

        letter-spacing:-.9px;
    }


    #kd-portfolio-process .kdpp-gradient{

        line-height:1.24;
    }


    #kd-portfolio-process .kdpp-description{

        font-size:13.5px;
        line-height:1.7;
    }


    #kd-portfolio-process .kdpp-mini-line{

        margin-top:11px;

        font-size:10px;
    }


    #kd-portfolio-process .kdpp-mini-line::before{

        width:28px;

        flex-basis:28px;
    }


    /* GRID */

    #kd-portfolio-process .kdpp-process{

        grid-template-columns:1fr;

        gap:10px;
    }


    /* CARD */

    #kd-portfolio-process .kdpp-card{

        min-height:0;

        padding:
            18px 17px 17px;

        border-radius:14px;
    }


    #kd-portfolio-process .kdpp-card-top{

        margin-bottom:14px;
    }


    #kd-portfolio-process .kdpp-number{

        font-size:31px;
    }


    #kd-portfolio-process .kdpp-icon{

        width:43px;
        height:43px;

        flex-basis:43px;

        border-radius:11px;

        font-size:15px;
    }


    #kd-portfolio-process .kdpp-label{

        margin-bottom:5px;

        font-size:8px;
    }


    #kd-portfolio-process .kdpp-card-title{

        font-size:18px;
    }


    #kd-portfolio-process .kdpp-card-text{

        margin-top:6px;

        font-size:12px;
        line-height:1.63;
    }


    #kd-portfolio-process .kdpp-card-footer{

        position:relative;

        left:auto;
        right:auto;
        bottom:auto;

        min-height:0;

        margin-top:14px;

        padding-top:11px;
    }


    #kd-portfolio-process .kdpp-card-footer span{

        font-size:9px;
    }


    #kd-portfolio-process .kdpp-arrow{

        width:29px;
        height:29px;

        flex-basis:29px;
    }


    #kd-portfolio-process .kdpp-dots{

        display:none;
    }

}


@media(max-width:380px){

    #kd-portfolio-process .kdpp-title{

        font-size:28px;
    }

}


/* =========================================================
 REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #kd-portfolio-process *,
    #kd-portfolio-process *::before,
    #kd-portfolio-process *::after{

        animation:none!important;

        transition:none!important;
    }

}

</style>


<section id="kd-portfolio-process">


    <!-- BACKGROUND -->

    <div class="kdpp-grid"></div>

    <div class="kdpp-dots"></div>

    <div class="kdpp-orbit"></div>


    <div class="kdpp-container">


        <!-- =================================================
             INTRO
        ================================================== -->

        <div class="kdpp-intro">


            <div class="kdpp-intro-left">


                <div class="kdpp-eyebrow">

                    <span class="kdpp-dot"></span>

                    HOW WE CREATE

                </div>


                <h2 class="kdpp-title">

                    From A Clear Idea To

                    <span class="kdpp-gradient">
                        Work Ready To Go Live.
                    </span>

                </h2>


            </div>


            <div class="kdpp-intro-right">


                <p class="kdpp-description">

                    Every strong project needs more than good visuals.
                    We understand the objective, shape the right creative
                    direction and build each element with consistency —
                    from the first idea to the final delivery.

                </p>


                <div class="kdpp-mini-line">

                    Strategy. Creativity. Execution.

                </div>


            </div>


        </div>


        <!-- =================================================
             4 STEP PROCESS
        ================================================== -->

        <div class="kdpp-process">


            <div class="kdpp-process-line"></div>


            <!-- =================================================
                 CARD 01
            ================================================== -->

            <article class="kdpp-card">


                <span class="kdpp-node"></span>


                <div class="kdpp-card-top">


                    <div class="kdpp-number">
                        01
                    </div>


                    <div class="kdpp-icon">

                        <i class="fa-regular fa-comments"></i>

                    </div>


                </div>


                <div class="kdpp-card-content">


                    <div class="kdpp-label">
                        DISCOVER
                    </div>


                    <h3 class="kdpp-card-title">

                        Understand The Brief

                    </h3>


                    <p class="kdpp-card-text">

                        We begin by understanding the brand,
                        audience, objective and exactly what
                        the project needs to communicate.

                    </p>


                </div>


                <div class="kdpp-card-footer">

                    <span>
                        Brand • Audience • Goal
                    </span>


                    <div class="kdpp-arrow">

                        <i class="fa-solid fa-arrow-right"></i>

                    </div>

                </div>


            </article>


            <!-- =================================================
                 CARD 02
            ================================================== -->

            <article class="kdpp-card">


                <span class="kdpp-node"></span>


                <div class="kdpp-card-top">


                    <div class="kdpp-number">
                        02
                    </div>


                    <div class="kdpp-icon">

                        <i class="fa-regular fa-lightbulb"></i>

                    </div>


                </div>


                <div class="kdpp-card-content">


                    <div class="kdpp-label">
                        DIRECTION
                    </div>


                    <h3 class="kdpp-card-title">

                        Shape The Right Idea

                    </h3>


                    <p class="kdpp-card-text">

                        The message, visual language and
                        creative direction are shaped around
                        the project and its digital platform.

                    </p>


                </div>


                <div class="kdpp-card-footer">

                    <span>
                        Concept • Message • Style
                    </span>


                    <div class="kdpp-arrow">

                        <i class="fa-solid fa-arrow-right"></i>

                    </div>

                </div>


            </article>


            <!-- =================================================
                 CARD 03
                 SAME COLOR AS ALL OTHER CARDS
            ================================================== -->

            <article class="kdpp-card">


                <span class="kdpp-node"></span>


                <div class="kdpp-card-top">


                    <div class="kdpp-number">
                        03
                    </div>


                    <div class="kdpp-icon">

                        <i class="fa-solid fa-wand-magic-sparkles"></i>

                    </div>


                </div>


                <div class="kdpp-card-content">


                    <div class="kdpp-label">
                        CREATE
                    </div>


                    <h3 class="kdpp-card-title">

                        Bring It To Life

                    </h3>


                    <p class="kdpp-card-text">

                        Design, content, visuals and video
                        come together with a consistent look,
                        feel and creative direction.

                    </p>


                </div>


                <div class="kdpp-card-footer">

                    <span>
                        Design • Content • Video
                    </span>


                    <div class="kdpp-arrow">

                        <i class="fa-solid fa-arrow-right"></i>

                    </div>

                </div>


            </article>


            <!-- =================================================
                 CARD 04
            ================================================== -->

            <article class="kdpp-card">


                <span class="kdpp-node"></span>


                <div class="kdpp-card-top">


                    <div class="kdpp-number">
                        04
                    </div>


                    <div class="kdpp-icon">

                        <i class="fa-solid fa-circle-check"></i>

                    </div>


                </div>


                <div class="kdpp-card-content">


                    <div class="kdpp-label">
                        DELIVER
                    </div>


                    <h3 class="kdpp-card-title">

                        Polish & Go Live

                    </h3>


                    <p class="kdpp-card-text">

                        Every detail is reviewed, polished
                        and prepared in the right format
                        for publishing, campaigns or launch.

                    </p>


                </div>


                <div class="kdpp-card-footer">

                    <span>
                        Review • Polish • Deliver
                    </span>


                    <div class="kdpp-arrow">

                        <i class="fa-solid fa-arrow-right"></i>

                    </div>

                </div>


            </article>


        </div>


    </div>

</section>