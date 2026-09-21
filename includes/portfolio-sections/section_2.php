<!-- =========================================================
 KING DIGITAL PORTFOLIO
 CONTINUOUS DARK MARQUEE
 HOVER PAR PAUSE NAHI HOGA
 COMPLETE FINAL CODE
========================================================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">

<style>

#kd-portfolio-marquee,
#kd-portfolio-marquee *{
    box-sizing:border-box;
}

#kd-portfolio-marquee{
    --navy:#060F3E;
    --navy2:#0A2147;
    --navy3:#10345D;

    --orange:#F47B20;
    --orange2:#FF9145;
    --gold:#FFB84D;

    position:relative;

    width:100%;
    height:72px;

    display:flex;
    align-items:center;

    overflow:hidden;

    font-family:'Manrope',sans-serif;

    background:
        radial-gradient(
            circle at 18% 0%,
            rgba(244,123,32,.13),
            transparent 26%
        ),
        radial-gradient(
            circle at 82% 100%,
            rgba(255,145,69,.08),
            transparent 25%
        ),
        linear-gradient(
            110deg,
            #050D2E 0%,
            #06163B 36%,
            #0A2449 70%,
            #071735 100%
        );

    border-top:1px solid rgba(255,255,255,.05);
    border-bottom:1px solid rgba(255,255,255,.05);
}


/* =========================================================
 ORANGE TOP LINE
========================================================= */

#kd-portfolio-marquee::before{
    content:"";

    position:absolute;

    z-index:5;

    left:0;
    top:0;

    width:100%;
    height:2px;

    pointer-events:none;

    background:
        linear-gradient(
            90deg,
            transparent 0%,
            rgba(244,123,32,.30) 15%,
            var(--orange) 42%,
            var(--orange2) 60%,
            rgba(244,123,32,.30) 85%,
            transparent 100%
        );
}


/* =========================================================
 SUBTLE GRID
========================================================= */

#kd-portfolio-marquee .kdpm-grid{
    position:absolute;

    inset:0;

    pointer-events:none;

    opacity:.12;

    background-image:
        linear-gradient(
            rgba(255,255,255,.07) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(255,255,255,.07) 1px,
            transparent 1px
        );

    background-size:42px 42px;
}


/* =========================================================
 SIDE FADES
========================================================= */

#kd-portfolio-marquee .kdpm-fade-left,
#kd-portfolio-marquee .kdpm-fade-right{
    position:absolute;

    z-index:4;

    top:0;

    width:90px;
    height:100%;

    pointer-events:none;
}

#kd-portfolio-marquee .kdpm-fade-left{
    left:0;

    background:
        linear-gradient(
            90deg,
            #050D2E 0%,
            rgba(5,13,46,.82) 38%,
            transparent 100%
        );
}

#kd-portfolio-marquee .kdpm-fade-right{
    right:0;

    background:
        linear-gradient(
            270deg,
            #071735 0%,
            rgba(7,23,53,.82) 38%,
            transparent 100%
        );
}


/* =========================================================
 MARQUEE WINDOW
========================================================= */

#kd-portfolio-marquee .kdpm-window{
    position:relative;

    z-index:2;

    width:100%;

    overflow:hidden;
}


/* =========================================================
 CONTINUOUS TRACK
========================================================= */

#kd-portfolio-marquee .kdpm-track{
    display:flex;

    align-items:center;

    width:max-content;

    will-change:transform;

    animation:
        kdpmContinuousScroll 28s linear infinite;

    /*
       IMPORTANT:
       Hover pause intentionally removed.
       Animation always keeps running.
    */
}


/* =========================================================
 GROUP
========================================================= */

#kd-portfolio-marquee .kdpm-group{
    display:flex;

    align-items:center;

    flex-shrink:0;
}


/* =========================================================
 TEXT ITEM
========================================================= */

#kd-portfolio-marquee .kdpm-item{
    display:flex;

    align-items:center;

    flex-shrink:0;

    white-space:nowrap;

    color:#FFFFFF;

    font-size:14px;
    line-height:1;

    font-weight:700;

    letter-spacing:-.1px;
}

#kd-portfolio-marquee .kdpm-item strong{
    color:#FFFFFF;

    font-weight:700;
}


/* =========================================================
 ORANGE DIAMOND SEPARATOR
========================================================= */

#kd-portfolio-marquee .kdpm-separator{
    position:relative;

    width:28px;
    height:28px;

    margin:0 22px;

    flex:0 0 28px;

    display:flex;

    align-items:center;
    justify-content:center;
}

#kd-portfolio-marquee .kdpm-separator::before{
    content:"";

    position:absolute;

    left:50%;
    top:50%;

    width:9px;
    height:9px;

    border-radius:3px;

    transform:
        translate(-50%,-50%)
        rotate(45deg);

    background:
        linear-gradient(
            135deg,
            var(--orange),
            var(--orange2),
            var(--gold)
        );

    box-shadow:
        0 0 14px rgba(244,123,32,.35);
}

#kd-portfolio-marquee .kdpm-separator::after{
    content:"";

    position:absolute;

    left:50%;
    top:50%;

    width:3px;
    height:3px;

    border-radius:50%;

    transform:
        translate(-50%,-50%);

    background:#FFFFFF;
}


/* =========================================================
 SEAMLESS ANIMATION
========================================================= */

@keyframes kdpmContinuousScroll{

    0%{
        transform:translate3d(0,0,0);
    }

    100%{
        transform:translate3d(-50%,0,0);
    }

}


/* =========================================================
 MOBILE
========================================================= */

@media(max-width:700px){

    #kd-portfolio-marquee{
        height:60px;
    }

    #kd-portfolio-marquee .kdpm-item{
        font-size:12px;
    }

    #kd-portfolio-marquee .kdpm-separator{
        width:23px;
        height:23px;

        flex-basis:23px;

        margin:0 15px;
    }

    #kd-portfolio-marquee .kdpm-separator::before{
        width:7px;
        height:7px;
    }

    #kd-portfolio-marquee .kdpm-fade-left,
    #kd-portfolio-marquee .kdpm-fade-right{
        width:38px;
    }

    #kd-portfolio-marquee .kdpm-track{
        animation-duration:23s;
    }

}

</style>


<section id="kd-portfolio-marquee">

    <!-- BACKGROUND GRID -->

    <div class="kdpm-grid"></div>


    <!-- SIDE FADES -->

    <div class="kdpm-fade-left"></div>

    <div class="kdpm-fade-right"></div>


    <!-- MARQUEE -->

    <div class="kdpm-window">


        <div class="kdpm-track">


            <!-- =========================================
                 GROUP 01
            ========================================== -->

            <div class="kdpm-group">


                <div class="kdpm-item">
                    <strong>Web Design</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Digital Marketing</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Creative Design</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Social Media</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Performance Marketing</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Video Content</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Reels & Shorts</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>AI Video</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Brand Creative</strong>
                </div>

                <div class="kdpm-separator"></div>


            </div>


            <!-- =========================================
                 GROUP 02
                 DUPLICATE FOR SEAMLESS LOOP
            ========================================== -->

            <div
                class="kdpm-group"
                aria-hidden="true">


                <div class="kdpm-item">
                    <strong>Web Design</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Digital Marketing</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Creative Design</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Social Media</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Performance Marketing</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Video Content</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Reels & Shorts</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>AI Video</strong>
                </div>

                <div class="kdpm-separator"></div>


                <div class="kdpm-item">
                    <strong>Brand Creative</strong>
                </div>

                <div class="kdpm-separator"></div>


            </div>


        </div>


    </div>


</section>