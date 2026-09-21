<!-- =========================================================
 KING DIGITAL PORTFOLIO
 PREMIUM MEDIA SHOWCASE
 YOUTUBE / REELS / IMAGES / EDUCATION / ANCHOR
 4 EQUAL CARDS PER ROW
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

#kd-portfolio-showcase,
#kd-portfolio-showcase *{
    box-sizing:border-box;
}

#kd-portfolio-showcase{

    --navy:#060F3E;
    --navy2:#0B2148;
    --navy3:#12365E;

    --orange:#F47B20;
    --orange2:#FF9145;
    --orange3:#FFB36F;
    --coral:#FF6548;
    --gold:#FFB84D;

    --text:#667085;
    --muted:#98A2B3;
    --line:#E4E8ED;

    position:relative;

    width:100%;

    /* TOP PADDING REDUCED */
    padding:38px 46px 55px;

    overflow:hidden;

    font-family:'Manrope',sans-serif;

    background:
        radial-gradient(
            circle at 94% 3%,
            rgba(244,123,32,.09),
            transparent 24%
        ),
        radial-gradient(
            circle at 4% 88%,
            rgba(6,15,62,.045),
            transparent 26%
        ),
        linear-gradient(
            180deg,
            #FFFFFF 0%,
            #F9FBFD 100%
        );
}


/* =========================================================
 BACKGROUND
========================================================= */

#kd-portfolio-showcase .kdps-grid-bg{

    position:absolute;
    inset:0;

    pointer-events:none;

    opacity:.28;

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

    background-size:56px 56px;

    -webkit-mask-image:
        linear-gradient(
            to bottom,
            #000,
            transparent 82%
        );

    mask-image:
        linear-gradient(
            to bottom,
            #000,
            transparent 82%
        );
}


#kd-portfolio-showcase .kdps-circle{

    position:absolute;

    right:-180px;
    top:100px;

    width:320px;
    height:320px;

    border-radius:50%;

    border:1px solid rgba(244,123,32,.08);

    box-shadow:
        0 0 0 45px rgba(244,123,32,.014),
        0 0 0 90px rgba(244,123,32,.007);

    pointer-events:none;
}


#kd-portfolio-showcase .kdps-dots{

    position:absolute;

    left:25px;
    bottom:35px;

    width:90px;
    height:90px;

    opacity:.12;

    pointer-events:none;

    background-image:
        radial-gradient(
            var(--orange) 1px,
            transparent 1px
        );

    background-size:14px 14px;
}


/* =========================================================
 CONTAINER
========================================================= */

#kd-portfolio-showcase .kdps-container{

    position:relative;
    z-index:2;

    width:100%;
    max-width:1380px;

    margin:0 auto;
}


/* =========================================================
 HEADER
========================================================= */

#kd-portfolio-showcase .kdps-header{

    max-width:880px;

    margin:0 auto 25px;

    text-align:center;

    overflow:visible!important;
}


/* EYEBROW */

#kd-portfolio-showcase .kdps-eyebrow{

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    margin-bottom:11px;

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
            #FFF1E7
        );

    border:
        1px solid rgba(244,123,32,.16);

    box-shadow:
        0 5px 16px rgba(244,123,32,.05);
}


#kd-portfolio-showcase .kdps-eyebrow-dot{

    width:6px;
    height:6px;

    flex:0 0 6px;

    border-radius:50%;

    background:var(--orange);

    box-shadow:
        0 0 0 4px rgba(244,123,32,.10);
}


/* =========================================================
 SINGLE-LINE HEADING
========================================================= */

#kd-portfolio-showcase .kdps-title{

    display:block;

    margin:0;

    padding:3px 5px 7px;

    overflow:visible!important;

    color:var(--navy);

    font-size:45px;

    line-height:1.18;

    font-weight:800;

    letter-spacing:-1.8px;

    white-space:nowrap;
}


#kd-portfolio-showcase .kdps-title-gradient{

    display:inline;

    color:transparent;

    background:
        linear-gradient(
            100deg,
            #D9500C 0%,
            #F36D16 20%,
            #FF8A32 42%,
            #FF6548 64%,
            #FFB84D 100%
        );

    background-size:200% 100%;

    -webkit-background-clip:text;
    background-clip:text;

    -webkit-text-fill-color:transparent;

    animation:
        kdpsGradientMove 7s ease-in-out infinite alternate;
}


@keyframes kdpsGradientMove{

    from{
        background-position:0% 50%;
    }

    to{
        background-position:100% 50%;
    }
}


/* DESCRIPTION */

#kd-portfolio-showcase .kdps-description{

    max-width:700px;

    margin:8px auto 0;

    color:var(--text);

    font-size:15px;

    line-height:1.7;

    font-weight:500;
}


/* =========================================================
 TABS
========================================================= */

#kd-portfolio-showcase .kdps-tabs-wrap{

    display:flex;

    justify-content:center;

    margin-bottom:28px;
}


#kd-portfolio-showcase .kdps-tabs{

    display:flex;

    align-items:center;

    justify-content:center;

    flex-wrap:wrap;

    gap:5px;

    padding:6px;

    border-radius:14px;

    background:rgba(244,246,248,.94);

    border:1px solid #E4E8ED;

    box-shadow:
        0 8px 25px rgba(6,15,62,.045);
}


#kd-portfolio-showcase .kdps-tab{

    min-width:135px;

    height:43px;

    padding:0 15px;

    border:0;
    outline:0;

    display:flex;

    align-items:center;
    justify-content:center;

    gap:7px;

    border-radius:9px;

    cursor:pointer;

    color:#687485;

    font-family:'Manrope',sans-serif;

    font-size:11px;

    line-height:1;

    font-weight:800;

    background:transparent;

    transition:
        color .25s ease,
        background .25s ease,
        box-shadow .25s ease,
        transform .25s ease;
}


#kd-portfolio-showcase .kdps-tab i{

    font-size:11px;
}


#kd-portfolio-showcase .kdps-tab:hover{

    color:var(--navy);

    background:#FFFFFF;
}


#kd-portfolio-showcase .kdps-tab.active{

    color:#FFFFFF;

    background:
        linear-gradient(
            135deg,
            #DE570E 0%,
            var(--orange) 50%,
            var(--orange2) 100%
        );

    box-shadow:
        0 8px 20px rgba(244,123,32,.22);
}


/* =========================================================
 PANELS
========================================================= */

#kd-portfolio-showcase .kdps-panel{

    display:none;
}


#kd-portfolio-showcase .kdps-panel.active{

    display:block;

    animation:
        kdpsPanelShow .4s ease both;
}


@keyframes kdpsPanelShow{

    from{
        opacity:0;
        transform:translateY(7px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }
}


/* =========================================================
 4 EQUAL COLUMNS
========================================================= */

#kd-portfolio-showcase .kdps-media-grid{

    display:grid;

    grid-template-columns:
        repeat(4,minmax(0,1fr));

    gap:17px;

    align-items:stretch;
}


/* =========================================================
 YOUTUBE CARD
========================================================= */

#kd-portfolio-showcase .kdps-youtube-card{

    min-width:0;

    overflow:hidden;

    border-radius:16px;

    background:#FFFFFF;

    border:1px solid var(--line);

    box-shadow:
        0 8px 25px rgba(6,15,62,.055);

    transition:
        transform .32s ease,
        box-shadow .32s ease,
        border-color .32s ease;
}


#kd-portfolio-showcase .kdps-youtube-card:hover{

    transform:translateY(-5px);

    border-color:
        rgba(244,123,32,.30);

    box-shadow:
        0 19px 40px rgba(6,15,62,.11);
}


#kd-portfolio-showcase .kdps-youtube-media{

    position:relative;

    width:100%;

    aspect-ratio:16/9;

    overflow:hidden;

    background:
        linear-gradient(
            135deg,
            #07172F,
            #0D2A50
        );

    cursor:pointer;
}


#kd-portfolio-showcase .kdps-youtube-media video{

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;

    transition:transform .5s ease;
}


#kd-portfolio-showcase .kdps-youtube-card:hover video{

    transform:scale(1.025);
}


#kd-portfolio-showcase .kdps-youtube-media::after{

    content:"";

    position:absolute;

    z-index:2;

    inset:0;

    pointer-events:none;

    background:
        linear-gradient(
            to top,
            rgba(4,13,35,.35),
            transparent 55%
        );
}


/* =========================================================
 BADGE
========================================================= */

#kd-portfolio-showcase .kdps-badge{

    position:absolute;

    z-index:7;

    left:11px;
    top:11px;

    min-height:28px;

    padding:0 9px;

    display:flex;

    align-items:center;

    gap:6px;

    border-radius:7px;

    color:var(--navy);

    font-size:9px;

    line-height:1;

    font-weight:800;

    letter-spacing:.05em;

    text-transform:uppercase;

    background:rgba(255,255,255,.94);

    box-shadow:
        0 5px 15px rgba(6,15,62,.11);

    backdrop-filter:blur(8px);
}


#kd-portfolio-showcase .kdps-badge i{

    color:var(--orange);

    font-size:10px;
}


/* =========================================================
 PLAY BUTTON
========================================================= */

#kd-portfolio-showcase .kdps-play,
#kd-portfolio-showcase .kdps-reel-play{

    position:absolute;

    z-index:8;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:50%;

    color:#FFFFFF;

    background:
        linear-gradient(
            135deg,
            var(--orange),
            var(--orange2)
        );

    box-shadow:
        0 8px 22px rgba(0,0,0,.22);

    pointer-events:none;

    transition:
        opacity .25s ease,
        transform .25s ease;
}


#kd-portfolio-showcase .kdps-play{

    left:50%;
    top:50%;

    width:46px;
    height:46px;

    transform:translate(-50%,-50%);

    font-size:11px;

    box-shadow:
        0 9px 24px rgba(0,0,0,.20),
        0 0 0 6px rgba(255,255,255,.14);
}


#kd-portfolio-showcase .kdps-reel-play{

    right:13px;
    top:13px;

    width:39px;
    height:39px;

    font-size:10px;
}


#kd-portfolio-showcase .kdps-playing .kdps-play{

    opacity:0;

    transform:
        translate(-50%,-50%)
        scale(.75);
}


#kd-portfolio-showcase .kdps-playing .kdps-reel-play{

    opacity:0;

    transform:scale(.75);
}


/* =========================================================
 YOUTUBE CONTENT
========================================================= */

#kd-portfolio-showcase .kdps-video-content{

    padding:15px 16px 17px;
}


#kd-portfolio-showcase .kdps-label{

    margin-bottom:5px;

    color:var(--orange);

    font-size:9px;

    line-height:1.2;

    font-weight:800;

    letter-spacing:.10em;

    text-transform:uppercase;
}


#kd-portfolio-showcase .kdps-card-title{

    margin:0;

    color:var(--navy);

    font-size:17px;

    line-height:1.38;

    font-weight:800;

    letter-spacing:-.3px;
}


#kd-portfolio-showcase .kdps-card-text{

    margin:6px 0 0;

    color:var(--text);

    font-size:12px;

    line-height:1.62;

    font-weight:500;
}


/* =========================================================
 VERTICAL VIDEO CARDS
 REELS / EDUCATION / ANCHOR
========================================================= */

#kd-portfolio-showcase .kdps-reel-card{

    position:relative;

    width:100%;

    min-width:0;

    aspect-ratio:9/13;

    overflow:hidden;

    border-radius:16px;

    background:
        linear-gradient(
            145deg,
            #07172F,
            #0B274B
        );

    border:
        1px solid rgba(6,15,62,.08);

    box-shadow:
        0 9px 27px rgba(6,15,62,.09);

    cursor:pointer;

    transition:
        transform .32s ease,
        box-shadow .32s ease,
        border-color .32s ease;
}


#kd-portfolio-showcase .kdps-reel-card:hover{

    transform:translateY(-5px);

    border-color:
        rgba(244,123,32,.30);

    box-shadow:
        0 20px 40px rgba(6,15,62,.15);
}


#kd-portfolio-showcase .kdps-reel-card video{

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;

    transition:transform .55s ease;
}


#kd-portfolio-showcase .kdps-reel-card:hover video{

    transform:scale(1.025);
}


#kd-portfolio-showcase .kdps-reel-card::after{

    content:"";

    position:absolute;

    z-index:2;

    inset:0;

    pointer-events:none;

    background:
        linear-gradient(
            to top,
            rgba(4,12,31,.84) 0%,
            rgba(4,12,31,.26) 41%,
            transparent 67%
        );
}


/* TYPE BADGE */

#kd-portfolio-showcase .kdps-vertical-badge{

    position:absolute;

    z-index:7;

    left:13px;
    top:13px;

    min-height:28px;

    padding:0 9px;

    display:flex;

    align-items:center;

    gap:6px;

    border-radius:7px;

    color:#FFFFFF;

    font-size:8px;

    line-height:1;

    font-weight:800;

    letter-spacing:.06em;

    text-transform:uppercase;

    background:
        rgba(6,15,62,.68);

    border:
        1px solid rgba(255,255,255,.13);

    backdrop-filter:blur(8px);
}


#kd-portfolio-showcase .kdps-vertical-badge i{

    color:#FFAC70;
}


/* REEL TEXT */

#kd-portfolio-showcase .kdps-reel-info{

    position:absolute;

    z-index:7;

    left:17px;
    right:17px;
    bottom:16px;

    color:#FFFFFF;
}


#kd-portfolio-showcase .kdps-reel-info span{

    display:block;

    margin-bottom:5px;

    color:#FFB078;

    font-size:10px;

    line-height:1.2;

    font-weight:800;

    letter-spacing:.10em;

    text-transform:uppercase;
}


#kd-portfolio-showcase .kdps-reel-info strong{

    display:block;

    font-size:17px;

    line-height:1.35;

    font-weight:800;

    letter-spacing:-.2px;
}


/* =========================================================
 IMAGE CARDS
========================================================= */

#kd-portfolio-showcase .kdps-image-card{

    position:relative;

    width:100%;

    min-width:0;

    aspect-ratio:1/1;

    overflow:hidden;

    border-radius:16px;

    background:#ECEFF2;

    border:1px solid var(--line);

    box-shadow:
        0 8px 25px rgba(6,15,62,.065);

    transition:
        transform .32s ease,
        box-shadow .32s ease,
        border-color .32s ease;
}


#kd-portfolio-showcase .kdps-image-card:hover{

    transform:translateY(-5px);

    border-color:
        rgba(244,123,32,.30);

    box-shadow:
        0 20px 40px rgba(6,15,62,.13);
}


#kd-portfolio-showcase .kdps-image-card img{

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;

    transition:
        transform .6s cubic-bezier(.2,.7,.2,1);
}


#kd-portfolio-showcase .kdps-image-card:hover img{

    transform:scale(1.045);
}


#kd-portfolio-showcase .kdps-image-card::after{

    content:"";

    position:absolute;

    z-index:2;

    inset:0;

    pointer-events:none;

    background:
        linear-gradient(
            to top,
            rgba(4,13,35,.80) 0%,
            rgba(4,13,35,.15) 46%,
            transparent 70%
        );
}


#kd-portfolio-showcase .kdps-image-info{

    position:absolute;

    z-index:7;

    left:17px;
    right:17px;
    bottom:16px;

    color:#FFFFFF;
}


#kd-portfolio-showcase .kdps-image-info span{

    display:block;

    margin-bottom:5px;

    color:#FFB078;

    font-size:10px;

    line-height:1.2;

    font-weight:800;

    letter-spacing:.10em;

    text-transform:uppercase;
}


#kd-portfolio-showcase .kdps-image-info strong{

    display:block;

    font-size:17px;

    line-height:1.35;

    font-weight:800;
}


/* =========================================================
 TABLET
========================================================= */

@media(max-width:1050px){

    #kd-portfolio-showcase{

        padding:
            34px 28px 48px;
    }


    #kd-portfolio-showcase .kdps-title{

        font-size:38px;
    }


    #kd-portfolio-showcase .kdps-description{

        font-size:14px;
    }


    #kd-portfolio-showcase .kdps-media-grid{

        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:16px;
    }


    #kd-portfolio-showcase .kdps-tabs{

        max-width:720px;
    }


    #kd-portfolio-showcase .kdps-reel-card{

        aspect-ratio:9/12;
    }

}


/* =========================================================
 MOBILE
========================================================= */

@media(max-width:620px){

    #kd-portfolio-showcase{

        padding:
            29px 16px 36px;
    }


    #kd-portfolio-showcase .kdps-header{

        margin-bottom:19px;
    }


    #kd-portfolio-showcase .kdps-eyebrow{

        margin-bottom:9px;

        padding:7px 10px;

        font-size:8px;
    }


    #kd-portfolio-showcase .kdps-title{

        padding-bottom:5px;

        font-size:29px;

        line-height:1.22;

        letter-spacing:-.9px;

        white-space:normal;
    }


    #kd-portfolio-showcase .kdps-description{

        margin-top:5px;

        font-size:12.5px;

        line-height:1.65;
    }


    /* TABS HORIZONTAL SCROLL */

    #kd-portfolio-showcase .kdps-tabs-wrap{

        display:block;

        width:100%;

        margin-bottom:19px;

        overflow-x:auto;

        scrollbar-width:none;

        -webkit-overflow-scrolling:touch;
    }


    #kd-portfolio-showcase .kdps-tabs-wrap::-webkit-scrollbar{

        display:none;
    }


    #kd-portfolio-showcase .kdps-tabs{

        width:max-content;

        min-width:100%;

        flex-wrap:nowrap;

        justify-content:flex-start;

        gap:3px;

        padding:4px;

        border-radius:11px;
    }


    #kd-portfolio-showcase .kdps-tab{

        min-width:max-content;

        height:38px;

        padding:0 11px;

        gap:5px;

        font-size:8px;

        border-radius:7px;
    }


    #kd-portfolio-showcase .kdps-tab i{

        font-size:8px;
    }


    /* 2 CARDS */

    #kd-portfolio-showcase .kdps-media-grid{

        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:10px;
    }


    /* YOUTUBE */

    #kd-portfolio-showcase .kdps-youtube-card{

        border-radius:12px;
    }


    #kd-portfolio-showcase .kdps-video-content{

        padding:10px 10px 12px;
    }


    #kd-portfolio-showcase .kdps-label{

        font-size:7px;
    }


    #kd-portfolio-showcase .kdps-card-title{

        font-size:12px;
    }


    #kd-portfolio-showcase .kdps-card-text{

        margin-top:4px;

        font-size:9px;

        line-height:1.5;
    }


    #kd-portfolio-showcase .kdps-play{

        width:34px;
        height:34px;

        font-size:8px;

        box-shadow:
            0 7px 17px rgba(0,0,0,.20),
            0 0 0 4px rgba(255,255,255,.13);
    }


    #kd-portfolio-showcase .kdps-badge{

        left:7px;
        top:7px;

        min-height:22px;

        padding:0 6px;

        font-size:6px;
    }


    /* VERTICAL */

    #kd-portfolio-showcase .kdps-reel-card{

        aspect-ratio:9/13;

        border-radius:12px;
    }


    #kd-portfolio-showcase .kdps-reel-info{

        left:10px;
        right:10px;
        bottom:10px;
    }


    #kd-portfolio-showcase .kdps-reel-info span{

        margin-bottom:3px;

        font-size:7px;
    }


    #kd-portfolio-showcase .kdps-reel-info strong{

        font-size:12px;
    }


    #kd-portfolio-showcase .kdps-reel-play{

        width:30px;
        height:30px;

        right:8px;
        top:8px;

        font-size:7px;
    }


    #kd-portfolio-showcase .kdps-vertical-badge{

        left:8px;
        top:8px;

        min-height:22px;

        padding:0 6px;

        font-size:6px;
    }


    /* IMAGES */

    #kd-portfolio-showcase .kdps-image-card{

        border-radius:12px;
    }


    #kd-portfolio-showcase .kdps-image-info{

        left:10px;
        right:10px;
        bottom:10px;
    }


    #kd-portfolio-showcase .kdps-image-info span{

        margin-bottom:3px;

        font-size:7px;
    }


    #kd-portfolio-showcase .kdps-image-info strong{

        font-size:12px;
    }


    #kd-portfolio-showcase .kdps-dots{

        display:none;
    }

}


@media(max-width:380px){

    #kd-portfolio-showcase .kdps-title{

        font-size:26px;
    }

}


/* =========================================================
 REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #kd-portfolio-showcase *,
    #kd-portfolio-showcase *::before,
    #kd-portfolio-showcase *::after{

        animation:none!important;

        transition:none!important;
    }

}

</style>


<section id="kd-portfolio-showcase">


    <div class="kdps-grid-bg"></div>

    <div class="kdps-circle"></div>

    <div class="kdps-dots"></div>


    <div class="kdps-container">


        <!-- ================================================
             HEADER
        ================================================= -->

        <div class="kdps-header">


            <div class="kdps-eyebrow">

                <span class="kdps-eyebrow-dot"></span>

                OUR CREATIVE WORK

            </div>


            <h2 class="kdps-title">

                Explore Our

                <span class="kdps-title-gradient">
                    Creative Work
                </span>

            </h2>


            <p class="kdps-description">

                Explore selected videos, reels and creative work
                produced across brands, campaigns and digital platforms.

            </p>


        </div>


        <!-- ================================================
             5 TABS
        ================================================= -->

        <div class="kdps-tabs-wrap">

            <div class="kdps-tabs">


                <button
                    class="kdps-tab active"
                    type="button"
                    data-tab="youtube">

                    <i class="fa-brands fa-youtube"></i>

                    YouTube Videos

                </button>


                <button
                    class="kdps-tab"
                    type="button"
                    data-tab="reels">

                    <i class="fa-solid fa-mobile-screen-button"></i>

                    Reels

                </button>


                <button
                    class="kdps-tab"
                    type="button"
                    data-tab="images">

                    <i class="fa-regular fa-images"></i>

                    Images

                </button>


                <button
                    class="kdps-tab"
                    type="button"
                    data-tab="education">

                    <i class="fa-solid fa-graduation-cap"></i>

                    Education Videos

                </button>


                <button
                    class="kdps-tab"
                    type="button"
                    data-tab="anchor">

                    <i class="fa-solid fa-microphone-lines"></i>

                    Anchor Videos

                </button>


            </div>

        </div>


        <!-- ================================================
             YOUTUBE VIDEOS
             REPLACE src="" WITH YOUR 16:9 MP4 URL
        ================================================= -->

        <div
            class="kdps-panel active"
            data-panel="youtube">

            <div class="kdps-media-grid">


                <!-- YOUTUBE VIDEO 01 -->

                <article class="kdps-youtube-card kdps-video-item">

                    <div class="kdps-youtube-media">

                        <video
                            muted
                            loop
                            playsinline
                            preload="metadata">

                            <source
                                src=""
                                type="video/mp4">

                        </video>

                        <div class="kdps-badge">
                            <i class="fa-brands fa-youtube"></i>
                            YouTube
                        </div>

                        <div class="kdps-play">
                            <i class="fa-solid fa-play"></i>
                        </div>

                    </div>

                    <div class="kdps-video-content">

                        <div class="kdps-label">
                            YOUTUBE VIDEO
                        </div>

                        <h3 class="kdps-card-title">
                            Brand Storytelling
                        </h3>

                        <p class="kdps-card-text">
                            Professional long-form video content
                            created for digital audiences.
                        </p>

                    </div>

                </article>


                <!-- YOUTUBE VIDEO 02 -->

                <article class="kdps-youtube-card kdps-video-item">

                    <div class="kdps-youtube-media">

                        <video
                            muted
                            loop
                            playsinline
                            preload="metadata">

                            <source
                                src=""
                                type="video/mp4">

                        </video>

                        <div class="kdps-badge">
                            <i class="fa-brands fa-youtube"></i>
                            YouTube
                        </div>

                        <div class="kdps-play">
                            <i class="fa-solid fa-play"></i>
                        </div>

                    </div>

                    <div class="kdps-video-content">

                        <div class="kdps-label">
                            BRAND VIDEO
                        </div>

                        <h3 class="kdps-card-title">
                            Campaign Creative
                        </h3>

                        <p class="kdps-card-text">
                            Campaign-focused content built around
                            clear brand communication.
                        </p>

                    </div>

                </article>


                <!-- YOUTUBE VIDEO 03 -->

                <article class="kdps-youtube-card kdps-video-item">

                    <div class="kdps-youtube-media">

                        <video
                            muted
                            loop
                            playsinline
                            preload="metadata">

                            <source
                                src=""
                                type="video/mp4">

                        </video>

                        <div class="kdps-badge">
                            <i class="fa-solid fa-clapperboard"></i>
                            Video
                        </div>

                        <div class="kdps-play">
                            <i class="fa-solid fa-play"></i>
                        </div>

                    </div>

                    <div class="kdps-video-content">

                        <div class="kdps-label">
                            DIGITAL VIDEO
                        </div>

                        <h3 class="kdps-card-title">
                            Video Production
                        </h3>

                        <p class="kdps-card-text">
                            Clean video production with thoughtful
                            visuals and professional editing.
                        </p>

                    </div>

                </article>


                <!-- YOUTUBE VIDEO 04 -->

                <article class="kdps-youtube-card kdps-video-item">

                    <div class="kdps-youtube-media">

                        <video
                            muted
                            loop
                            playsinline
                            preload="metadata">

                            <source
                                src=""
                                type="video/mp4">

                        </video>

                        <div class="kdps-badge">
                            <i class="fa-solid fa-film"></i>
                            Creative
                        </div>

                        <div class="kdps-play">
                            <i class="fa-solid fa-play"></i>
                        </div>

                    </div>

                    <div class="kdps-video-content">

                        <div class="kdps-label">
                            CREATIVE VIDEO
                        </div>

                        <h3 class="kdps-card-title">
                            Visual Creative
                        </h3>

                        <p class="kdps-card-text">
                            Modern video content created for
                            engaging digital communication.
                        </p>

                    </div>

                </article>


                <!-- YOUTUBE VIDEO 05 -->

                <article class="kdps-youtube-card kdps-video-item">

                    <div class="kdps-youtube-media">

                        <video muted loop playsinline preload="metadata">
                            <source src="" type="video/mp4">
                        </video>

                        <div class="kdps-badge">
                            <i class="fa-brands fa-youtube"></i>
                            YouTube
                        </div>

                        <div class="kdps-play">
                            <i class="fa-solid fa-play"></i>
                        </div>

                    </div>

                    <div class="kdps-video-content">

                        <div class="kdps-label">
                            PROMOTIONAL
                        </div>

                        <h3 class="kdps-card-title">
                            Promotional Video
                        </h3>

                        <p class="kdps-card-text">
                            Promotional content for campaigns,
                            products and brand communication.
                        </p>

                    </div>

                </article>


                <!-- YOUTUBE VIDEO 06 -->

                <article class="kdps-youtube-card kdps-video-item">

                    <div class="kdps-youtube-media">

                        <video muted loop playsinline preload="metadata">
                            <source src="" type="video/mp4">
                        </video>

                        <div class="kdps-badge">
                            <i class="fa-solid fa-circle-play"></i>
                            Content
                        </div>

                        <div class="kdps-play">
                            <i class="fa-solid fa-play"></i>
                        </div>

                    </div>

                    <div class="kdps-video-content">

                        <div class="kdps-label">
                            BRAND CONTENT
                        </div>

                        <h3 class="kdps-card-title">
                            Brand Video
                        </h3>

                        <p class="kdps-card-text">
                            Video content built around the
                            brand message and audience.
                        </p>

                    </div>

                </article>


                <!-- YOUTUBE VIDEO 07 -->

                <article class="kdps-youtube-card kdps-video-item">

                    <div class="kdps-youtube-media">

                        <video muted loop playsinline preload="metadata">
                            <source src="" type="video/mp4">
                        </video>

                        <div class="kdps-badge">
                            <i class="fa-solid fa-video"></i>
                            Digital
                        </div>

                        <div class="kdps-play">
                            <i class="fa-solid fa-play"></i>
                        </div>

                    </div>

                    <div class="kdps-video-content">

                        <div class="kdps-label">
                            DIGITAL CONTENT
                        </div>

                        <h3 class="kdps-card-title">
                            Digital Story
                        </h3>

                        <p class="kdps-card-text">
                            Story-led content for today's
                            digital-first audiences.
                        </p>

                    </div>

                </article>


                <!-- YOUTUBE VIDEO 08 -->

                <article class="kdps-youtube-card kdps-video-item">

                    <div class="kdps-youtube-media">

                        <video muted loop playsinline preload="metadata">
                            <source src="" type="video/mp4">
                        </video>

                        <div class="kdps-badge">
                            <i class="fa-solid fa-play"></i>
                            Video
                        </div>

                        <div class="kdps-play">
                            <i class="fa-solid fa-play"></i>
                        </div>

                    </div>

                    <div class="kdps-video-content">

                        <div class="kdps-label">
                            VIDEO CONTENT
                        </div>

                        <h3 class="kdps-card-title">
                            Creative Story
                        </h3>

                        <p class="kdps-card-text">
                            Professional content with a clean,
                            modern visual presentation.
                        </p>

                    </div>

                </article>


            </div>

        </div>


        <!-- ================================================
             REELS
             ADD VERTICAL 9:16 MP4 URL IN src=""
        ================================================= -->

        <div
            class="kdps-panel"
            data-panel="reels">

            <div class="kdps-media-grid">


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-mobile-screen"></i>
                        Reel
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Social Reel</span>
                        <strong>Short-Form Creative</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-mobile-screen"></i>
                        Reel
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Brand Reel</span>
                        <strong>Visual Storytelling</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-mobile-screen"></i>
                        Reel
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Campaign Reel</span>
                        <strong>Promotional Content</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-mobile-screen"></i>
                        Reel
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Creative Reel</span>
                        <strong>Digital Content</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-mobile-screen"></i>
                        Reel
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Product Reel</span>
                        <strong>Product Creative</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-mobile-screen"></i>
                        Reel
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Digital Reel</span>
                        <strong>Modern Content</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-mobile-screen"></i>
                        Reel
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Creative Reel</span>
                        <strong>Visual Campaign</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-mobile-screen"></i>
                        Reel
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Social Content</span>
                        <strong>Short Video</strong>
                    </div>

                </article>


            </div>

        </div>


        <!-- ================================================
             IMAGES
             REPLACE IMAGE URL IN src=""
        ================================================= -->

        <div
            class="kdps-panel"
            data-panel="images">

            <div class="kdps-media-grid">


                <article class="kdps-image-card">

                    <img
                        src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=900"
                        alt="Campaign creative"
                        loading="lazy">

                    <div class="kdps-image-info">
                        <span>Campaign</span>
                        <strong>Campaign Visual</strong>
                    </div>

                </article>


                <article class="kdps-image-card">

                    <img
                        src="https://images.pexels.com/photos/4009402/pexels-photo-4009402.jpeg?auto=compress&cs=tinysrgb&w=900"
                        alt="Social design"
                        loading="lazy">

                    <div class="kdps-image-info">
                        <span>Social Media</span>
                        <strong>Social Design</strong>
                    </div>

                </article>


                <article class="kdps-image-card">

                    <img
                        src="https://images.pexels.com/photos/3379943/pexels-photo-3379943.jpeg?auto=compress&cs=tinysrgb&w=900"
                        alt="Brand creative"
                        loading="lazy">

                    <div class="kdps-image-info">
                        <span>Branding</span>
                        <strong>Brand Creative</strong>
                    </div>

                </article>


                <article class="kdps-image-card">

                    <img
                        src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&cs=tinysrgb&w=900"
                        alt="Digital campaign"
                        loading="lazy">

                    <div class="kdps-image-info">
                        <span>Digital</span>
                        <strong>Digital Campaign</strong>
                    </div>

                </article>


                <article class="kdps-image-card">

                    <img
                        src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=900"
                        alt="Creative visual"
                        loading="lazy">

                    <div class="kdps-image-info">
                        <span>Creative</span>
                        <strong>Visual Content</strong>
                    </div>

                </article>


                <article class="kdps-image-card">

                    <img
                        src="https://images.pexels.com/photos/3205735/pexels-photo-3205735.jpeg?auto=compress&cs=tinysrgb&w=900"
                        alt="Digital visual"
                        loading="lazy">

                    <div class="kdps-image-info">
                        <span>Content</span>
                        <strong>Digital Visual</strong>
                    </div>

                </article>


                <article class="kdps-image-card">

                    <img
                        src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=900"
                        alt="Website design"
                        loading="lazy">

                    <div class="kdps-image-info">
                        <span>Website</span>
                        <strong>Web Experience</strong>
                    </div>

                </article>


                <article class="kdps-image-card">

                    <img
                        src="https://images.pexels.com/photos/3861958/pexels-photo-3861958.jpeg?auto=compress&cs=tinysrgb&w=900"
                        alt="Creative direction"
                        loading="lazy">

                    <div class="kdps-image-info">
                        <span>Design</span>
                        <strong>Creative Direction</strong>
                    </div>

                </article>


            </div>

        </div>


        <!-- ================================================
             EDUCATION VIDEOS
             VERTICAL / REEL FORMAT
             ADD MP4 URL IN src=""
        ================================================= -->

        <div
            class="kdps-panel"
            data-panel="education">

            <div class="kdps-media-grid">


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Education
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Educational Video</span>
                        <strong>Expert Insights</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Education
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Knowledge Content</span>
                        <strong>Learn Something New</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Education
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Explainer Video</span>
                        <strong>Simple & Informative</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Education
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Educational Reel</span>
                        <strong>Quick Learning</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Education
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Expert Content</span>
                        <strong>Professional Guidance</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Education
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Information Video</span>
                        <strong>Knowledge That Connects</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Education
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Learning Content</span>
                        <strong>Clear Explanations</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Education
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Educational Content</span>
                        <strong>Ideas Made Simple</strong>
                    </div>

                </article>


            </div>

        </div>


        <!-- ================================================
             ANCHOR VIDEOS
             VERTICAL / REEL FORMAT
             ADD MP4 URL IN src=""
        ================================================= -->

        <div
            class="kdps-panel"
            data-panel="anchor">

            <div class="kdps-media-grid">


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-microphone-lines"></i>
                        Anchor
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Anchor Video</span>
                        <strong>Brand Presentation</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-microphone-lines"></i>
                        Anchor
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Presenter Video</span>
                        <strong>Professional Delivery</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-microphone-lines"></i>
                        Anchor
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Anchor Content</span>
                        <strong>Campaign Presenter</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-microphone-lines"></i>
                        Anchor
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Host Video</span>
                        <strong>Audience Communication</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-microphone-lines"></i>
                        Anchor
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Brand Anchor</span>
                        <strong>Direct To Camera</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-microphone-lines"></i>
                        Anchor
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Presenter Content</span>
                        <strong>Clear Brand Message</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-microphone-lines"></i>
                        Anchor
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Anchor Reel</span>
                        <strong>Engaging Presentation</strong>
                    </div>

                </article>


                <article class="kdps-reel-card kdps-video-item">

                    <video muted loop playsinline preload="metadata">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="kdps-vertical-badge">
                        <i class="fa-solid fa-microphone-lines"></i>
                        Anchor
                    </div>

                    <div class="kdps-reel-play">
                        <i class="fa-solid fa-play"></i>
                    </div>

                    <div class="kdps-reel-info">
                        <span>Host Content</span>
                        <strong>Professional Presence</strong>
                    </div>

                </article>


            </div>

        </div>


    </div>

</section>


<script>

(function(){

    const section =
        document.querySelector('#kd-portfolio-showcase');

    if(!section) return;


    /* =====================================================
       TABS
    ====================================================== */

    const tabs =
        section.querySelectorAll('.kdps-tab');

    const panels =
        section.querySelectorAll('.kdps-panel');


    function stopAllVideos(){

        section
        .querySelectorAll('video')
        .forEach(function(video){

            video.pause();

            try{
                video.currentTime = 0;
            }catch(e){}

            const item =
                video.closest('.kdps-video-item');

            if(item){
                item.classList.remove('kdps-playing');
            }

        });

    }


    tabs.forEach(function(tab){

        tab.addEventListener('click',function(){

            const target =
                this.getAttribute('data-tab');

            stopAllVideos();


            tabs.forEach(function(button){

                button.classList.remove('active');

            });


            panels.forEach(function(panel){

                panel.classList.remove('active');

            });


            this.classList.add('active');


            const targetPanel =
                section.querySelector(
                    '[data-panel="' + target + '"]'
                );


            if(targetPanel){

                targetPanel.classList.add('active');

            }

        });

    });


    /* =====================================================
       VIDEO PLAY / PAUSE
    ====================================================== */

    const videoItems =
        section.querySelectorAll('.kdps-video-item');


    videoItems.forEach(function(item){

        const video =
            item.querySelector('video');

        if(!video) return;


        function stopOtherVideos(){

            section
            .querySelectorAll('video')
            .forEach(function(otherVideo){

                if(otherVideo !== video){

                    otherVideo.pause();

                    const parent =
                        otherVideo.closest(
                            '.kdps-video-item'
                        );

                    if(parent){

                        parent.classList.remove(
                            'kdps-playing'
                        );

                    }

                }

            });

        }


        function playVideo(){

            const source =
                video.querySelector('source');

            /*
             Prevent error when src="" has not
             yet been replaced with your video.
            */

            if(
                !source ||
                !source.getAttribute('src') ||
                source.getAttribute('src').trim() === ''
            ){
                return;
            }


            stopOtherVideos();


            const promise =
                video.play();


            if(promise !== undefined){

                promise
                .then(function(){

                    item.classList.add(
                        'kdps-playing'
                    );

                })
                .catch(function(){});

            }

        }


        function pauseVideo(){

            video.pause();

            item.classList.remove(
                'kdps-playing'
            );

        }


        /* DESKTOP HOVER */

        item.addEventListener(
            'mouseenter',
            function(){

                if(window.innerWidth > 768){

                    playVideo();

                }

            }
        );


        item.addEventListener(
            'mouseleave',
            function(){

                if(window.innerWidth > 768){

                    pauseVideo();

                }

            }
        );


        /* CLICK / MOBILE */

        item.addEventListener(
            'click',
            function(){

                if(video.paused){

                    playVideo();

                }else{

                    pauseVideo();

                }

            }
        );

    });

})();

</script>