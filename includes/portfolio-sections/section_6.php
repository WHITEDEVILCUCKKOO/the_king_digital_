<!-- =========================================================
 KING DIGITAL PORTFOLIO
 FEATURED SERVICES SECTION
 INSPIRED BY PROVIDED REFERENCE IMAGE
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

#kd-featured-services,
#kd-featured-services *{
    box-sizing:border-box;
}

#kd-featured-services{

    --navy:#060F3E;
    --navy2:#0B2148;
    --navy3:#12365E;

    --orange:#F47B20;
    --orange2:#FF9145;
    --orange3:#FFB36F;

    --coral:#FF6548;
    --gold:#FFB84D;

    --text:#626D7D;
    --muted:#8B95A4;
    --line:#E4E8ED;

    position:relative;

    width:100%;

    padding:62px 45px 56px;

    overflow:hidden;

    font-family:'Manrope',sans-serif;

    background:
        radial-gradient(
            circle at 8% 7%,
            rgba(244,123,32,.07),
            transparent 23%
        ),
        radial-gradient(
            circle at 94% 88%,
            rgba(6,15,62,.045),
            transparent 26%
        ),
        linear-gradient(
            180deg,
            #F9FAFC 0%,
            #FFFFFF 48%,
            #F8FAFC 100%
        );
}


/* =========================================================
 BACKGROUND
========================================================= */

#kd-featured-services .kdfs-grid-bg{

    position:absolute;

    inset:0;

    pointer-events:none;

    opacity:.24;

    background-image:
        linear-gradient(
            rgba(6,15,62,.021) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(6,15,62,.021) 1px,
            transparent 1px
        );

    background-size:58px 58px;

    -webkit-mask-image:
        radial-gradient(
            ellipse at center,
            #000,
            transparent 78%
        );

    mask-image:
        radial-gradient(
            ellipse at center,
            #000,
            transparent 78%
        );
}


#kd-featured-services .kdfs-circle{

    position:absolute;

    left:7%;
    top:35px;

    width:29px;
    height:29px;

    border-radius:50%;

    border:
        1px solid rgba(244,123,32,.40);

    pointer-events:none;
}


#kd-featured-services .kdfs-dots{

    position:absolute;

    right:28px;
    bottom:30px;

    width:88px;
    height:88px;

    opacity:.11;

    pointer-events:none;

    background-image:
        radial-gradient(
            var(--orange) 1.1px,
            transparent 1.1px
        );

    background-size:14px 14px;
}


/* =========================================================
 CONTAINER
========================================================= */

#kd-featured-services .kdfs-container{

    position:relative;

    z-index:2;

    width:100%;

    max-width:1220px;

    margin:0 auto;
}


/* =========================================================
 HEADER
========================================================= */

#kd-featured-services .kdfs-header{

    max-width:790px;

    margin:0 auto 38px;

    text-align:center;

    overflow:visible!important;
}


/* BADGE */

#kd-featured-services .kdfs-eyebrow{

    display:inline-flex;

    align-items:center;

    justify-content:center;

    gap:8px;

    margin-bottom:13px;

    padding:8px 14px;

    border-radius:100px;

    color:var(--orange);

    font-size:10px;

    line-height:1;

    font-weight:800;

    letter-spacing:.10em;

    text-transform:uppercase;

    background:
        linear-gradient(
            135deg,
            #FFF8F3,
            #FFF0E5
        );

    border:
        1px solid rgba(244,123,32,.17);

    box-shadow:
        0 5px 16px rgba(244,123,32,.05);
}


#kd-featured-services .kdfs-eyebrow i{

    font-size:9px;
}


/* =========================================================
 TITLE
========================================================= */

#kd-featured-services .kdfs-title{

    display:block;

    margin:0;

    padding:3px 4px 8px;

    overflow:visible!important;

    color:var(--navy);

    font-size:47px;

    line-height:1.15;

    font-weight:800;

    letter-spacing:-2px;

    text-wrap:balance;
}


#kd-featured-services .kdfs-gradient{

    display:inline-block;

    padding:1px 3px 5px;

    line-height:1.20;

    color:transparent;

    background:
        linear-gradient(
            100deg,
            #D9500C 0%,
            #F36D16 20%,
            #FF8A32 39%,
            #FF6548 58%,
            #FF9145 78%,
            #FFB84D 100%
        );

    background-size:200% 100%;

    -webkit-background-clip:text;
    background-clip:text;

    -webkit-text-fill-color:transparent;

    animation:
        kdfsGradient 7s ease-in-out infinite alternate;
}


@keyframes kdfsGradient{

    from{
        background-position:0% 50%;
    }

    to{
        background-position:100% 50%;
    }

}


/* DESCRIPTION */

#kd-featured-services .kdfs-description{

    max-width:700px;

    margin:9px auto 0;

    color:var(--text);

    font-size:15px;

    line-height:1.72;

    font-weight:500;
}


/* =========================================================
 CARDS GRID
========================================================= */

#kd-featured-services .kdfs-grid{

    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    gap:20px;

    align-items:stretch;
}


/* =========================================================
 CARD
========================================================= */

#kd-featured-services .kdfs-card{

    position:relative;

    min-width:0;

    overflow:hidden;

    border-radius:19px;

    background:#FFFFFF;

    border:
        1px solid #E2E6EB;

    box-shadow:
        0 9px 27px rgba(6,15,62,.07);

    transition:
        transform .35s ease,
        box-shadow .35s ease,
        border-color .35s ease;
}


#kd-featured-services .kdfs-card:hover{

    transform:translateY(-7px);

    border-color:
        rgba(244,123,32,.30);

    box-shadow:
        0 22px 46px rgba(6,15,62,.13);
}


/* =========================================================
 IMAGE
========================================================= */

#kd-featured-services .kdfs-image{

    position:relative;

    width:100%;

    height:245px;

    overflow:hidden;

    background:#E9EDF1;
}


#kd-featured-services .kdfs-image img{

    display:block;

    width:100%;
    height:100%;

    object-fit:cover;

    transition:
        transform .7s cubic-bezier(.2,.7,.2,1);
}


#kd-featured-services .kdfs-card:hover
.kdfs-image img{

    transform:scale(1.055);
}


#kd-featured-services .kdfs-image::after{

    content:"";

    position:absolute;

    z-index:2;

    inset:0;

    pointer-events:none;

    background:
        linear-gradient(
            to top,
            rgba(6,15,62,.18),
            transparent 45%
        );
}


/* =========================================================
 FEATURED BADGE
========================================================= */

#kd-featured-services .kdfs-featured{

    position:absolute;

    z-index:5;

    right:16px;
    top:16px;

    min-height:31px;

    padding:0 11px;

    display:flex;

    align-items:center;

    justify-content:center;

    gap:6px;

    border-radius:100px;

    color:var(--navy);

    font-size:9px;

    line-height:1;

    font-weight:800;

    letter-spacing:.04em;

    text-transform:uppercase;

    background:
        linear-gradient(
            135deg,
            #FFD84B,
            #FFB800
        );

    box-shadow:
        0 7px 18px rgba(0,0,0,.14);
}


#kd-featured-services .kdfs-featured i{

    font-size:9px;
}


/* =========================================================
 CARD BODY
========================================================= */

#kd-featured-services .kdfs-body{

    padding:25px 27px 23px;
}


/* CATEGORY */

#kd-featured-services .kdfs-category{

    width:max-content;

    max-width:100%;

    min-height:28px;

    padding:0 11px;

    display:flex;

    align-items:center;

    gap:7px;

    margin-bottom:14px;

    border-radius:100px;

    color:var(--orange);

    font-size:9px;

    line-height:1;

    font-weight:800;

    letter-spacing:.05em;

    text-transform:uppercase;

    background:#FFF3EA;

    border:
        1px solid rgba(244,123,32,.13);
}


#kd-featured-services .kdfs-category-dot{

    width:6px;
    height:6px;

    flex:0 0 6px;

    border-radius:50%;

    background:var(--orange);
}


/* TITLE */

#kd-featured-services .kdfs-card-title{

    margin:0;

    color:var(--navy);

    font-size:23px;

    line-height:1.3;

    font-weight:800;

    letter-spacing:-.65px;
}


/* TEXT */

#kd-featured-services .kdfs-card-text{

    min-height:67px;

    margin:8px 0 0;

    color:var(--text);

    font-size:13px;

    line-height:1.7;

    font-weight:500;
}


/* =========================================================
 TAGS
========================================================= */

#kd-featured-services .kdfs-tags{

    display:flex;

    align-items:center;

    flex-wrap:wrap;

    gap:6px;

    margin-top:16px;
}


#kd-featured-services .kdfs-tag{

    min-height:29px;

    padding:0 10px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:7px;

    color:#526071;

    font-size:9px;

    line-height:1;

    font-weight:700;

    background:#F6F8FA;

    border:
        1px solid #DDE2E8;
}


/* =========================================================
 DIVIDER
========================================================= */

#kd-featured-services .kdfs-divider{

    width:100%;
    height:1px;

    margin:20px 0 16px;

    background:#E7EAEF;
}


/* =========================================================
 BOTTOM META
========================================================= */

#kd-featured-services .kdfs-meta{

    display:grid;

    grid-template-columns:
        repeat(3,minmax(0,1fr));

    gap:7px;
}


#kd-featured-services .kdfs-meta-item{

    display:flex;

    align-items:center;

    gap:7px;

    min-width:0;

    color:var(--navy);

    font-size:10px;

    line-height:1.35;

    font-weight:800;
}


#kd-featured-services .kdfs-meta-item i{

    width:16px;

    flex:0 0 16px;

    text-align:center;

    color:var(--orange);

    font-size:11px;
}


/* =========================================================
 CARD LINK
========================================================= */

#kd-featured-services .kdfs-link{

    position:absolute;

    z-index:10;

    inset:0;
}


/* =========================================================
 DIFFERENT SUBTLE CATEGORY ACCENTS
========================================================= */

#kd-featured-services .kdfs-card:nth-child(2)
.kdfs-category{

    color:#087A68;

    background:#EBFAF6;

    border-color:
        rgba(8,122,104,.13);
}


#kd-featured-services .kdfs-card:nth-child(2)
.kdfs-category-dot{

    background:#08A789;
}


#kd-featured-services .kdfs-card:nth-child(3)
.kdfs-category{

    color:#C65317;

    background:#FFF3EB;

    border-color:
        rgba(244,123,32,.14);
}


/* =========================================================
 TABLET
========================================================= */

@media(max-width:1050px){

    #kd-featured-services{

        padding:
            54px 28px 48px;
    }


    #kd-featured-services .kdfs-title{

        font-size:41px;
    }


    #kd-featured-services .kdfs-grid{

        grid-template-columns:
            repeat(2,minmax(0,1fr));

        gap:17px;
    }


    #kd-featured-services .kdfs-card:last-child{

        grid-column:1 / -1;

        width:calc(50% - 8.5px);

        margin:0 auto;
    }

}


/* =========================================================
 MOBILE
========================================================= */

@media(max-width:650px){

    #kd-featured-services{

        padding:
            42px 17px 36px;
    }


    #kd-featured-services .kdfs-header{

        margin-bottom:25px;
    }


    #kd-featured-services .kdfs-eyebrow{

        margin-bottom:10px;

        padding:7px 10px;

        font-size:8px;
    }


    #kd-featured-services .kdfs-title{

        padding-bottom:5px;

        font-size:31px;

        line-height:1.22;

        letter-spacing:-.9px;
    }


    #kd-featured-services .kdfs-description{

        margin-top:7px;

        font-size:13.5px;

        line-height:1.7;
    }


    /* ONE CARD PER ROW */

    #kd-featured-services .kdfs-grid{

        grid-template-columns:1fr;

        gap:13px;
    }


    #kd-featured-services .kdfs-card:last-child{

        grid-column:auto;

        width:100%;
    }


    #kd-featured-services .kdfs-card{

        border-radius:15px;
    }


    #kd-featured-services .kdfs-image{

        height:215px;
    }


    #kd-featured-services .kdfs-body{

        padding:
            20px 19px 19px;
    }


    #kd-featured-services .kdfs-category{

        margin-bottom:11px;
    }


    #kd-featured-services .kdfs-card-title{

        font-size:20px;
    }


    #kd-featured-services .kdfs-card-text{

        min-height:0;

        font-size:12.5px;

        line-height:1.65;
    }


    #kd-featured-services .kdfs-tags{

        margin-top:13px;
    }


    #kd-featured-services .kdfs-divider{

        margin:
            16px 0 14px;
    }


    #kd-featured-services .kdfs-featured{

        right:12px;
        top:12px;

        min-height:28px;

        font-size:8px;
    }


    #kd-featured-services .kdfs-dots{

        display:none;
    }

}


@media(max-width:380px){

    #kd-featured-services .kdfs-title{

        font-size:28px;
    }


    #kd-featured-services .kdfs-meta{

        grid-template-columns:1fr;

        gap:8px;
    }

}


/* =========================================================
 REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #kd-featured-services *,
    #kd-featured-services *::before,
    #kd-featured-services *::after{

        animation:none!important;

        transition:none!important;
    }

}

</style>


<section id="kd-featured-services">


    <!-- BACKGROUND -->

    <div class="kdfs-grid-bg"></div>

    <div class="kdfs-circle"></div>

    <div class="kdfs-dots"></div>


    <div class="kdfs-container">


        <!-- =================================================
             HEADER
        ================================================== -->

        <div class="kdfs-header">


            <div class="kdfs-eyebrow">

                <i class="fa-regular fa-star"></i>

                FEATURED SERVICES

            </div>


            <h2 class="kdfs-title">

                Digital Services Built For

                <span class="kdfs-gradient">
                    Modern Brands.
                </span>

            </h2>


            <p class="kdfs-description">

                From building your digital presence to promoting it
                with the right creative and performance strategy,
                King Digital brings design, marketing and content
                together under one creative direction.

            </p>


        </div>


        <!-- =================================================
             CARDS
        ================================================== -->

        <div class="kdfs-grid">


            <!-- =================================================
                 CARD 01
                 WEBSITE
            ================================================== -->

            <article class="kdfs-card">


                <div class="kdfs-image">


                    <img
                        src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=1200"
                        alt="Website Design and Development"
                        loading="lazy">


                    <div class="kdfs-featured">

                        <i class="fa-regular fa-lightbulb"></i>

                        Featured

                    </div>


                </div>


                <div class="kdfs-body">


                    <div class="kdfs-category">

                        <span class="kdfs-category-dot"></span>

                        Web Solutions

                    </div>


                    <h3 class="kdfs-card-title">

                        Website Design & Development

                    </h3>


                    <p class="kdfs-card-text">

                        Professional, responsive and user-focused
                        websites designed to give your business
                        a stronger and more polished digital presence.

                    </p>


                    <div class="kdfs-tags">

                        <span class="kdfs-tag">
                            WordPress
                        </span>

                        <span class="kdfs-tag">
                            UI / UX
                        </span>

                        <span class="kdfs-tag">
                            Responsive
                        </span>

                        <span class="kdfs-tag">
                            Business Sites
                        </span>

                    </div>


                    <div class="kdfs-divider"></div>


                    <div class="kdfs-meta">


                        <div class="kdfs-meta-item">

                            <i class="fa-solid fa-laptop-code"></i>

                            Custom Design

                        </div>


                        <div class="kdfs-meta-item">

                            <i class="fa-solid fa-mobile-screen"></i>

                            Responsive

                        </div>


                        <div class="kdfs-meta-item">

                            <i class="fa-solid fa-rocket"></i>

                            Launch Ready

                        </div>


                    </div>


                </div>


                <a
                    href="/enquiry.php"
                    class="kdfs-link"
                    aria-label="Website Design and Development">
                </a>


            </article>


            <!-- =================================================
                 CARD 02
                 PERFORMANCE MARKETING
            ================================================== -->

            <article class="kdfs-card">


                <div class="kdfs-image">


                    <img
                        src="https://images.pexels.com/photos/590016/pexels-photo-590016.jpeg?auto=compress&cs=tinysrgb&w=1200"
                        alt="Performance Marketing"
                        loading="lazy">


                    <div class="kdfs-featured">

                        <i class="fa-regular fa-lightbulb"></i>

                        Featured

                    </div>


                </div>


                <div class="kdfs-body">


                    <div class="kdfs-category">

                        <span class="kdfs-category-dot"></span>

                        Digital Marketing

                    </div>


                    <h3 class="kdfs-card-title">

                        Performance Marketing

                    </h3>


                    <p class="kdfs-card-text">

                        Strategic paid campaigns built around
                        your business goals, target audience
                        and the digital platforms that matter
                        to your brand.

                    </p>


                    <div class="kdfs-tags">

                        <span class="kdfs-tag">
                            Meta Ads
                        </span>

                        <span class="kdfs-tag">
                            Google Ads
                        </span>

                        <span class="kdfs-tag">
                            Lead Generation
                        </span>

                        <span class="kdfs-tag">
                            Campaigns
                        </span>

                    </div>


                    <div class="kdfs-divider"></div>


                    <div class="kdfs-meta">


                        <div class="kdfs-meta-item">

                            <i class="fa-solid fa-bullseye"></i>

                            Targeted

                        </div>


                        <div class="kdfs-meta-item">

                            <i class="fa-solid fa-chart-line"></i>

                            Optimized

                        </div>


                        <div class="kdfs-meta-item">

                            <i class="fa-solid fa-chart-simple"></i>

                            Measurable

                        </div>


                    </div>


                </div>


                <a
                    href="/enquiry.php"
                    class="kdfs-link"
                    aria-label="Performance Marketing">
                </a>


            </article>


            <!-- =================================================
                 CARD 03
                 CREATIVE + VIDEO
            ================================================== -->

            <article class="kdfs-card">


                <div class="kdfs-image">


                    <img
                        src="https://images.pexels.com/photos/3379943/pexels-photo-3379943.jpeg?auto=compress&cs=tinysrgb&w=1200"
                        alt="Creative and Video Content"
                        loading="lazy">


                    <div class="kdfs-featured">

                        <i class="fa-regular fa-lightbulb"></i>

                        Featured

                    </div>


                </div>


                <div class="kdfs-body">


                    <div class="kdfs-category">

                        <span class="kdfs-category-dot"></span>

                        Creative Content

                    </div>


                    <h3 class="kdfs-card-title">

                        Creative & Video Content

                    </h3>


                    <p class="kdfs-card-text">

                        Social creatives, reels and video content
                        developed around your brand message,
                        campaign requirements and digital audience.

                    </p>


                    <div class="kdfs-tags">

                        <span class="kdfs-tag">
                            Reels
                        </span>

                        <span class="kdfs-tag">
                            Video
                        </span>

                        <span class="kdfs-tag">
                            Social Media
                        </span>

                        <span class="kdfs-tag">
                            AI Creative
                        </span>

                    </div>


                    <div class="kdfs-divider"></div>


                    <div class="kdfs-meta">


                        <div class="kdfs-meta-item">

                            <i class="fa-solid fa-pen-ruler"></i>

                            Creative

                        </div>


                        <div class="kdfs-meta-item">

                            <i class="fa-solid fa-clapperboard"></i>

                            Video Ready

                        </div>


                        <div class="kdfs-meta-item">

                            <i class="fa-solid fa-share-nodes"></i>

                            Social Ready

                        </div>


                    </div>


                </div>


                <a
                    href="/enquiry.php"
                    class="kdfs-link"
                    aria-label="Creative and Video Content">
                </a>


            </article>


        </div>


    </div>

</section>