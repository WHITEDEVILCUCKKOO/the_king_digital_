

<section class="kd-pod-about-light">

    <div class="kd-pod-about-light-wrap">

        <!-- =================================================
        LEFT IMAGE
        ================================================== -->

        <div class="kd-pod-about-light-visual kd-pod-about-light-reveal">

            <div class="kd-pod-about-light-image">

                <img
                    src="https://images.unsplash.com/photo-1589903308904-1010c2294adc?auto=format&fit=crop&w=1400&q=90"
                    alt="Professional podcast production studio"
                >

                <div class="kd-pod-about-light-image-overlay"></div>

                <div class="kd-pod-about-light-badge">
                    <span></span>
                    ABOUT PODCAST PRODUCTION
                </div>

                <div class="kd-pod-about-light-caption">

                    <small>
                        KING DIGITAL
                    </small>

                    <strong>
                        Stories That Deserve To Be Heard.
                    </strong>

                </div>

            </div>

            <div class="kd-pod-about-light-shape"></div>

        </div>


        <!-- =================================================
        RIGHT CONTENT
        ================================================== -->

        <div class="kd-pod-about-light-content kd-pod-about-light-reveal">

            <div class="kd-pod-about-light-eyebrow">
                <span></span>
                ABOUT OUR PODCAST SERVICES
            </div>

            <h2>
                More Than Recording.
                <span>
                    We Build Powerful Brand Conversations.
                </span>
            </h2>

            <p class="kd-pod-about-light-text">
                King Digital helps founders, experts and brands create
                professional podcasts that feel authentic, sound premium
                and connect with the right audience.
            </p>

            <p class="kd-pod-about-light-text kd-pod-about-light-text-two">
                From production planning to recording, editing and final
                delivery, we make sure every podcast reflects your voice
                and strengthens your brand presence.
            </p>


            <!-- =================================================
            3 FEATURE CARDS — ONE ROW
            ================================================== -->

            <div class="kd-pod-about-light-cards">


                <!-- CARD 01 -->

                <div class="kd-pod-about-light-card">

                    <div class="kd-pod-about-light-card-icon orange">

                        <svg viewBox="0 0 24 24" fill="none">

                            <rect
                                x="8"
                                y="3"
                                width="8"
                                height="12"
                                rx="4"
                                stroke="currentColor"
                                stroke-width="1.8"
                            />

                            <path
                                d="M5 11V12C5 15.9 8.1 19 12 19C15.9 19 19 15.9 19 12V11"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                            />

                            <path
                                d="M12 19V21"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                            />

                        </svg>

                    </div>

                    <h3>
                        Professional Production
                    </h3>

                    <p>
                        Clean recording, lighting and premium sound quality.
                    </p>

                </div>


                <!-- CARD 02 -->

                <div class="kd-pod-about-light-card">

                    <div class="kd-pod-about-light-card-icon purple">

                        <svg viewBox="0 0 24 24" fill="none">

                            <path
                                d="M5 7H19V16H10L6 19V16H5V7Z"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linejoin="round"
                            />

                            <path
                                d="M9 10H15M9 13H13"
                                stroke="currentColor"
                                stroke-width="1.6"
                                stroke-linecap="round"
                            />

                        </svg>

                    </div>

                    <h3>
                        Story-Led Content
                    </h3>

                    <p>
                        Conversations designed to keep audiences engaged.
                    </p>

                </div>


                <!-- CARD 03 -->

                <div class="kd-pod-about-light-card">

                    <div class="kd-pod-about-light-card-icon blue">

                        <svg viewBox="0 0 24 24" fill="none">

                            <path
                                d="M6 17L10 13L13 15L18 9"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />

                            <path
                                d="M15 9H18V12"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />

                        </svg>

                    </div>

                    <h3>
                        Brand-Ready Delivery
                    </h3>

                    <p>
                        Polished content prepared for your digital platforms.
                    </p>

                </div>

            </div>


            <!-- CTA -->

            <a href="#contact" class="kd-pod-about-light-btn">

                Create Your Podcast

                <svg viewBox="0 0 24 24" fill="none">

                    <path
                        d="M5 12H19M13 6L19 12L13 18"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />

                </svg>

            </a>

        </div>

    </div>

</section>


<style>

/* @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap'); */


.kd-pod-about-light,
.kd-pod-about-light *{
    box-sizing:border-box;
}

.kd-pod-about-light *{
    min-width:0;
}

.kd-pod-about-light{
    position:relative;
    width:100%;
    overflow:hidden;
    padding:58px 0;

    /* font-family:
        'Manrope',
        Arial,
        sans-serif; */

    background:
        radial-gradient(
            circle at 7% 10%,
            rgba(255,105,45,.065),
            transparent 25%
        ),
        radial-gradient(
            circle at 94% 88%,
            rgba(114,86,213,.06),
            transparent 28%
        ),
        linear-gradient(
            180deg,
            #ffffff 0%,
            #fcfbff 52%,
            #fffdfb 100%
        );
}


/* DOT PATTERN */

.kd-pod-about-light:before{
    content:"";
    position:absolute;
    inset:0;
    pointer-events:none;
    opacity:.15;

    background-image:
        radial-gradient(
            rgba(112,86,213,.20) .7px,
            transparent .7px
        );

    background-size:
        24px 24px;

    mask-image:
        linear-gradient(
            90deg,
            transparent,
            #000 18%,
            #000 82%,
            transparent
        );
}

.kd-pod-about-light-wrap{
    position:relative;
    z-index:2;

    width:min(
        1160px,
        calc(100% - 40px)
    );

    margin:0 auto;

    display:grid;

    grid-template-columns:
        minmax(0,1.02fr)
        minmax(0,.98fr);

    align-items:center;

    gap:54px;
}

.kd-pod-about-light-visual{
    position:relative;
    padding:
        0 15px 15px 0;
}

.kd-pod-about-light-image{
    position:relative;
    z-index:2;

    width:100%;
    height:445px;

    overflow:hidden;

    border-radius:20px;

    background:#edf0f5;

    border:
        1px solid
        rgba(23,30,43,.07);

    box-shadow:
        0 24px 55px
        rgba(25,33,48,.12);
}

.kd-pod-about-light-image img{
    display:block;

    width:100%;
    height:100%;

    object-fit:cover;
    object-position:center;

    transition:
        transform .8s
        cubic-bezier(.22,1,.36,1);
}

.kd-pod-about-light-image:hover img{
    transform:scale(1.035);
}


/* IMAGE OVERLAY */

.kd-pod-about-light-image-overlay{
    position:absolute;
    inset:0;

    background:
        linear-gradient(
            180deg,
            rgba(13,18,29,.03) 30%,
            rgba(13,18,29,.66) 100%
        );

    pointer-events:none;
}


/* TOP BADGE */

.kd-pod-about-light-badge{
    position:absolute;

    top:18px;
    left:18px;

    display:inline-flex;
    align-items:center;

    gap:8px;

    min-height:34px;

    padding:
        0 12px;

    border-radius:999px;

    background:
        rgba(255,255,255,.94);

    box-shadow:
        0 8px 22px
        rgba(0,0,0,.09);

    color:#202735;

    font-size:9px;
    line-height:1;

    font-weight:800;

    letter-spacing:.08em;
}

.kd-pod-about-light-badge span{
    width:7px;
    height:7px;

    border-radius:50%;

    background:
        linear-gradient(
            135deg,
            #ff6b30,
            #ee4a52
        );

    box-shadow:
        0 0 0 4px
        rgba(240,80,60,.10);
}


/* IMAGE CAPTION */

.kd-pod-about-light-caption{
    position:absolute;

    left:20px;
    right:20px;
    bottom:18px;

    display:flex;

    align-items:flex-end;
    justify-content:space-between;

    gap:15px;
}

.kd-pod-about-light-caption small{
    color:#ffbc47;

    font-size:9px;

    font-weight:800;

    letter-spacing:.10em;
}

.kd-pod-about-light-caption strong{
    max-width:255px;

    color:#fff;

    text-align:right;

    font-size:15px;
    line-height:1.3;

    font-weight:800;
}


/* BACK SHAPE */

.kd-pod-about-light-shape{
    position:absolute;

    z-index:1;

    right:0;
    bottom:0;

    width:58%;
    height:54%;

    border-radius:22px;

    background:
        linear-gradient(
            135deg,
            rgba(255,107,48,.13),
            rgba(238,74,82,.10) 42%,
            rgba(114,86,213,.13) 74%,
            rgba(101,164,255,.12)
        );
}

.kd-pod-about-light-content{
    width:100%;
}


/* EYEBROW */

.kd-pod-about-light-eyebrow{
    display:flex;

    align-items:center;

    gap:11px;

    color:#e85b31;

    font-size:10px;

    line-height:1.3;

    font-weight:800;

    letter-spacing:.10em;
}

.kd-pod-about-light-eyebrow span{
    width:33px;
    height:2px;

    flex:0 0 33px;

    border-radius:100px;

    background:
        linear-gradient(
            90deg,
            #ff6b30,
            #ee4a52
        );
}


/* HEADING */

.kd-pod-about-light-content h2{
    max-width:590px;

    margin:
        15px 0 0;

    color:#171e2b;

    font-size:44px;

    line-height:1.09;

    letter-spacing:-.045em;

    font-weight:800;
}

.kd-pod-about-light-content h2 span{
    display:block;

    margin-top:4px;

    background:
        linear-gradient(
            90deg,
            #f15c2c 0%,
            #e94b4e 38%,
            #785ad7 72%,
            #4f8eed 100%
        );

    -webkit-background-clip:text;
    background-clip:text;
    -webkit-text-fill-color:transparent;
}


/* TEXT */

.kd-pod-about-light-text{
    max-width:590px;

    margin:
        17px 0 0;

    color:#667080;

    font-size:13.5px;

    line-height:1.7;

    font-weight:500;
}

.kd-pod-about-light-text-two{
    margin-top:8px;
}

.kd-pod-about-light-cards{
    width:100%;

    margin-top:20px;

    display:grid;

    grid-template-columns:
        repeat(
            3,
            minmax(0,1fr)
        );

    gap:9px;
}


/* CARD */

.kd-pod-about-light-card{
    position:relative;

    min-height:142px;

    padding:
        15px 12px 14px;

    overflow:hidden;

    border:
        1px solid
        #e9edf2;

    border-radius:14px;

    background:
        rgba(255,255,255,.88);

    box-shadow:
        0 8px 22px
        rgba(30,38,52,.045);

    transition:
        border-color .25s ease,
        box-shadow .25s ease;
}

.kd-pod-about-light-card:hover{
    border-color:#dfe4eb;

    box-shadow:
        0 11px 26px
        rgba(30,38,52,.07);
}


/* SMALL TOP ACCENT */

.kd-pod-about-light-card:before{
    content:"";

    position:absolute;

    top:0;
    left:12px;
    right:12px;

    height:2px;

    border-radius:
        0 0 100px 100px;

    background:
        linear-gradient(
            90deg,
            #ff6b30,
            #ee4a52
        );
}

.kd-pod-about-light-card:nth-child(2):before{
    background:
        linear-gradient(
            90deg,
            #9277eb,
            #6851cf
        );
}

.kd-pod-about-light-card:nth-child(3):before{
    background:
        linear-gradient(
            90deg,
            #68a1f2,
            #3974d8
        );
}


/* ICON */

.kd-pod-about-light-card-icon{
    width:36px;
    height:36px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:9px;
}

.kd-pod-about-light-card-icon svg{
    width:17px;
    height:17px;
}

.kd-pod-about-light-card-icon.orange{
    color:#ee5a30;
    background:#fff0e9;
}

.kd-pod-about-light-card-icon.purple{
    color:#7159d6;
    background:#efedff;
}

.kd-pod-about-light-card-icon.blue{
    color:#3976d8;
    background:#edf4ff;
}


/* CARD HEADING */

.kd-pod-about-light-card h3{
    margin:
        11px 0 0;

    color:#262f3d;

    font-size:12px;

    line-height:1.28;

    font-weight:800;
}


/* CARD TEXT */

.kd-pod-about-light-card p{
    margin:
        5px 0 0;

    color:#7a8492;

    font-size:9px;

    line-height:1.5;

    font-weight:500;
}

.kd-pod-about-light-btn,
.kd-pod-about-light-btn:link,
.kd-pod-about-light-btn:visited{
    min-height:45px;

    margin-top:21px;

    padding:
        0 18px;

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    border-radius:9px;

    color:#fff !important;

    text-decoration:none !important;

    background:
        linear-gradient(
            135deg,
            #ff6928 0%,
            #ed4749 55%,
            #875ed9 100%
        );

    box-shadow:
        0 10px 24px
        rgba(235,74,51,.18);

    font-size:10px;

    font-weight:800;

    transition:
        transform .25s ease,
        box-shadow .25s ease;
}

.kd-pod-about-light-btn svg{
    width:14px;
    height:14px;
}

.kd-pod-about-light-btn:hover{
    color:#fff !important;

    transform:
        translateY(-2px);

    box-shadow:
        0 14px 30px
        rgba(235,74,51,.24);
}

.kd-pod-about-light-reveal{
    opacity:0;

    transform:
        translateY(18px);

    transition:
        opacity .7s ease,
        transform .7s
        cubic-bezier(.22,1,.36,1);
}

.kd-pod-about-light-reveal.kd-pod-about-light-show{
    opacity:1;
    transform:translateY(0);
}

.kd-pod-about-light-content.kd-pod-about-light-reveal{
    transition-delay:.10s;
}

@media(max-width:1024px){

    .kd-pod-about-light{
        padding:52px 0;
    }

    .kd-pod-about-light-wrap{
        width:min(
            960px,
            calc(100% - 36px)
        );

        gap:35px;
    }

    .kd-pod-about-light-image{
        height:405px;
    }

    .kd-pod-about-light-content h2{
        font-size:37px;
    }

    .kd-pod-about-light-card{
        min-height:150px;
        padding:14px 10px;
    }

    .kd-pod-about-light-card h3{
        font-size:11px;
    }

    .kd-pod-about-light-card p{
        font-size:8.5px;
    }

}

@media(max-width:767px){

    .kd-pod-about-light{
        padding:42px 0;
    }

    .kd-pod-about-light-wrap{
        width:calc(100% - 30px);
        max-width:600px;

        grid-template-columns:1fr;

        gap:28px;
    }

    .kd-pod-about-light-visual{
        padding:
            0 10px 10px 0;
    }

    .kd-pod-about-light-image{
        height:350px;
        border-radius:17px;
    }

    .kd-pod-about-light-content{
        text-align:center;
    }

    .kd-pod-about-light-eyebrow{
        justify-content:center;
    }

    .kd-pod-about-light-content h2{
        max-width:560px;

        margin-left:auto;
        margin-right:auto;

        font-size:32px;
    }

    .kd-pod-about-light-text{
        max-width:560px;

        margin-left:auto;
        margin-right:auto;

        font-size:14px;
    }


    /* MOBILE CARDS */

    .kd-pod-about-light-cards{
        max-width:520px;

        margin:
            19px auto 0;

        grid-template-columns:
            repeat(
                3,
                minmax(0,1fr)
            );

        gap:7px;

        text-align:left;
    }

    .kd-pod-about-light-card{
        min-height:138px;

        padding:
            12px 9px 11px;

        border-radius:12px;
    }

    .kd-pod-about-light-card-icon{
        width:32px;
        height:32px;
    }

    .kd-pod-about-light-card-icon svg{
        width:15px;
        height:15px;
    }

    .kd-pod-about-light-card h3{
        margin-top:9px;

        font-size:10px;

        line-height:1.25;
    }

    .kd-pod-about-light-card p{
        margin-top:4px;

        font-size:8px;

        line-height:1.4;
    }

    .kd-pod-about-light-btn{
        margin-left:auto;
        margin-right:auto;
    }

}

@media(max-width:480px){

    .kd-pod-about-light{
        padding:36px 0;
    }

    .kd-pod-about-light-wrap{
        width:calc(100% - 26px);
        gap:24px;
    }

    .kd-pod-about-light-image{
        height:300px;
        border-radius:15px;
    }

    .kd-pod-about-light-badge{
        top:12px;
        left:12px;

        min-height:30px;

        padding:0 9px;

        font-size:7px;
    }

    .kd-pod-about-light-caption{
        left:14px;
        right:14px;
        bottom:13px;
    }

    .kd-pod-about-light-caption small{
        font-size:7.5px;
    }

    .kd-pod-about-light-caption strong{
        max-width:175px;
        font-size:11px;
    }

    .kd-pod-about-light-eyebrow{
        gap:8px;
        font-size:8px;
    }

    .kd-pod-about-light-eyebrow span{
        width:24px;
        flex-basis:24px;
    }

    .kd-pod-about-light-content h2{
        margin-top:11px;

        font-size:27px;

        line-height:1.13;
    }

    .kd-pod-about-light-text{
        margin-top:13px;

        font-size:13.5px;

        line-height:1.65;
    }

    .kd-pod-about-light-text-two{
        margin-top:7px;
    }


    /* KEEP 3 CARDS IN SAME ROW */

    .kd-pod-about-light-cards{
        width:100%;

        grid-template-columns:
            repeat(
                3,
                minmax(0,1fr)
            );

        gap:6px;
    }

    .kd-pod-about-light-card{
        min-height:128px;

        padding:
            10px 7px 9px;
    }

    .kd-pod-about-light-card-icon{
        width:29px;
        height:29px;
    }

    .kd-pod-about-light-card-icon svg{
        width:14px;
        height:14px;
    }

    .kd-pod-about-light-card h3{
        margin-top:8px;

        font-size:9px;

        line-height:1.2;
    }

    .kd-pod-about-light-card p{
        font-size:7.5px;
        line-height:1.35;
    }

    .kd-pod-about-light-btn{
        min-height:43px;

        margin-top:18px;

        padding:0 15px;

        font-size:9.5px;
    }

}


@media(max-width:360px){

    .kd-pod-about-light-wrap{
        width:calc(100% - 22px);
    }

    .kd-pod-about-light-image{
        height:275px;
    }

    .kd-pod-about-light-content h2{
        font-size:25px;
    }

    .kd-pod-about-light-card{
        min-height:124px;

        padding:
            9px 6px;
    }

    .kd-pod-about-light-card h3{
        font-size:8.5px;
    }

    .kd-pod-about-light-card p{
        font-size:7px;
    }

}


@media(prefers-reduced-motion:reduce){

    .kd-pod-about-light-reveal{
        opacity:1;
        transform:none;
        transition:none;
    }

    .kd-pod-about-light-image img,
    .kd-pod-about-light-btn{
        transition:none;
    }

}

</style>


<script>

(function(){

    const section =
        document.querySelector(
            '.kd-pod-about-light'
        );

    if(!section){
        return;
    }

    const items =
        section.querySelectorAll(
            '.kd-pod-about-light-reveal'
        );


    if(
        'IntersectionObserver'
        in window
    ){

        const observer =
            new IntersectionObserver(

                function(entries){

                    entries.forEach(
                        function(entry){

                            if(
                                entry.isIntersecting
                            ){

                                items.forEach(
                                    function(item,index){

                                        setTimeout(
                                            function(){

                                                item
                                                    .classList
                                                    .add(
                                                        'kd-pod-about-light-show'
                                                    );

                                            },

                                            index * 90
                                        );

                                    }
                                );

                                observer.disconnect();

                            }

                        }
                    );

                },

                {
                    threshold:.15
                }

            );

        observer.observe(section);

    }

    else{

        items.forEach(
            function(item){

                item
                    .classList
                    .add(
                        'kd-pod-about-light-show'
                    );

            }
        );

    }

})();

</script>

<style>

.kd-pod-about-light{
    padding:52px 0 !important;
    background:
        radial-gradient(circle at 10% 14%, rgba(255,132,70,.13) 0%, rgba(255,132,70,.055) 22%, transparent 40%),
        radial-gradient(circle at 90% 16%, rgba(126,92,220,.13) 0%, rgba(126,92,220,.05) 22%, transparent 42%),
        radial-gradient(circle at 72% 88%, rgba(82,145,238,.09) 0%, transparent 34%),
        linear-gradient(135deg,#FFF9F5 0%,#FFFFFF 42%,#FAF8FF 72%,#F7FAFF 100%) !important;
}

.kd-pod-about-light:before{
    opacity:.22 !important;
    background-image:
        linear-gradient(rgba(118,96,166,.035) 1px,transparent 1px),
        linear-gradient(90deg,rgba(118,96,166,.035) 1px,transparent 1px) !important;
    background-size:34px 34px !important;
    mask-image:linear-gradient(90deg,transparent,#000 10%,#000 90%,transparent) !important;
}

/* soft glass halo behind image */
.kd-pod-about-light-visual:before{
    content:"";
    position:absolute;
    width:72%;
    height:72%;
    left:-7%;
    top:-8%;
    border-radius:34px;
    background:linear-gradient(135deg,rgba(255,119,61,.13),rgba(239,78,88,.07) 45%,rgba(126,91,216,.12));
    filter:blur(2px);
    z-index:0;
}

.kd-pod-about-light-visual{
    padding:0 18px 18px 0 !important;
}

.kd-pod-about-light-image{
    height:430px !important;
    border-radius:24px !important;
    border:1px solid rgba(34,41,56,.075) !important;
    box-shadow:
        0 28px 70px rgba(35,41,55,.13),
        0 2px 10px rgba(35,41,55,.05) !important;
}

.kd-pod-about-light-image-overlay{
    background:
        linear-gradient(180deg,rgba(15,20,30,.015) 28%,rgba(15,20,30,.16) 62%,rgba(15,20,30,.72) 100%) !important;
}

.kd-pod-about-light-badge{
    min-height:36px !important;
    padding:0 13px !important;
    border:1px solid rgba(255,255,255,.72) !important;
    background:rgba(255,255,255,.90) !important;
    box-shadow:0 10px 28px rgba(25,33,48,.10) !important;
    backdrop-filter:blur(10px);
}

.kd-pod-about-light-caption{
    left:22px !important;
    right:22px !important;
    bottom:20px !important;
}

.kd-pod-about-light-caption small{
    color:#FFB14B !important;
    font-size:9px !important;
}

.kd-pod-about-light-caption strong{
    max-width:285px !important;
    font-size:16px !important;
    line-height:1.35 !important;
}

.kd-pod-about-light-shape{
    right:0 !important;
    bottom:0 !important;
    width:68% !important;
    height:62% !important;
    border-radius:28px !important;
    background:
        linear-gradient(135deg,rgba(255,120,59,.16),rgba(242,82,91,.10) 38%,rgba(126,91,216,.14) 72%,rgba(88,145,238,.11)) !important;
}

/* right content */
.kd-pod-about-light-content{
    position:relative;
    padding:6px 0 4px !important;
}

.kd-pod-about-light-eyebrow{
    color:#E85B31 !important;
    font-size:10px !important;
    letter-spacing:.12em !important;
}

.kd-pod-about-light-content h2{
    margin-top:13px !important;
    font-size:clamp(35px,3.3vw,45px) !important;
    line-height:1.08 !important;
    letter-spacing:-.045em !important;
}

.kd-pod-about-light-content h2 span{
    margin-top:5px !important;
    background:linear-gradient(90deg,#F15D2C 0%,#EA4C50 35%,#805BD9 72%,#568FEA 100%) !important;
    -webkit-background-clip:text !important;
    background-clip:text !important;
    -webkit-text-fill-color:transparent !important;
}

.kd-pod-about-light-text{
    margin-top:15px !important;
    color:#667181 !important;
    font-size:15.5px !important;
    line-height:1.72 !important;
}

.kd-pod-about-light-text-two{
    margin-top:7px !important;
}

/* premium cards */
.kd-pod-about-light-cards{
    margin-top:19px !important;
    gap:10px !important;
}

.kd-pod-about-light-card{
    min-height:138px !important;
    padding:16px 13px 14px !important;
    border:1px solid rgba(45,55,72,.075) !important;
    border-radius:16px !important;
    background:
        linear-gradient(145deg,rgba(255,255,255,.96),rgba(249,249,253,.92)) !important;
    box-shadow:
        0 10px 30px rgba(30,38,52,.055),
        inset 0 1px 0 rgba(255,255,255,.9) !important;
    transition:transform .25s ease,border-color .25s ease,box-shadow .25s ease !important;
}

.kd-pod-about-light-card:hover{
    transform:translateY(-3px) !important;
    border-color:rgba(126,91,216,.16) !important;
    box-shadow:0 16px 38px rgba(30,38,52,.09) !important;
}

.kd-pod-about-light-card:before{
    left:13px !important;
    right:13px !important;
    height:2px !important;
}

.kd-pod-about-light-card-icon{
    width:38px !important;
    height:38px !important;
    border-radius:10px !important;
}

.kd-pod-about-light-card-icon svg{
    width:18px !important;
    height:18px !important;
}

.kd-pod-about-light-card-icon.orange{
    color:#ED5B31 !important;
    background:linear-gradient(135deg,#FFF1EA,#FFF7F2) !important;
}

.kd-pod-about-light-card-icon.purple{
    color:#735BD8 !important;
    background:linear-gradient(135deg,#F1EEFF,#F8F6FF) !important;
}

.kd-pod-about-light-card-icon.blue{
    color:#3F79DA !important;
    background:linear-gradient(135deg,#EDF4FF,#F7FAFF) !important;
}

.kd-pod-about-light-card h3{
    margin-top:11px !important;
    color:#252E3C !important;
    font-size:12.5px !important;
}

.kd-pod-about-light-card p{
    margin-top:5px !important;
    color:#7A8594 !important;
    font-size:9.5px !important;
    line-height:1.5 !important;
}

/* CTA */
.kd-pod-about-light-btn,
.kd-pod-about-light-btn:link,
.kd-pod-about-light-btn:visited{
    min-height:47px !important;
    margin-top:20px !important;
    padding:0 19px !important;
    border-radius:10px !important;
    background:linear-gradient(135deg,#FF6928 0%,#ED4749 54%,#875ED9 100%) !important;
    box-shadow:0 12px 28px rgba(235,74,51,.20) !important;
    font-size:10.5px !important;
}

.kd-pod-about-light-btn:hover{
    transform:translateY(-2px) !important;
    box-shadow:0 16px 34px rgba(235,74,51,.26) !important;
}

/* responsive */
@media(max-width:1024px){
    .kd-pod-about-light{
        padding:46px 0 !important;
    }
    .kd-pod-about-light-image{
        height:395px !important;
    }
    .kd-pod-about-light-wrap{
        gap:34px !important;
    }
}

@media(max-width:767px){
    .kd-pod-about-light{
        padding:38px 0 !important;
    }
    .kd-pod-about-light-wrap{
        gap:25px !important;
    }
    .kd-pod-about-light-image{
        height:340px !important;
    }
    .kd-pod-about-light-cards{
        gap:7px !important;
    }
    .kd-pod-about-light-card{
        min-height:134px !important;
        padding:12px 9px 11px !important;
    }
}

@media(max-width:480px){
    .kd-pod-about-light{
        padding:32px 0 !important;
    }
    .kd-pod-about-light-image{
        height:290px !important;
    }
    .kd-pod-about-light-content h2{
        font-size:28px !important;
    }
    .kd-pod-about-light-text{
        font-size:13.5px !important;
    }
    .kd-pod-about-light-card{
        min-height:126px !important;
    }
    .kd-pod-about-light-card h3{
        font-size:9px !important;
    }
    .kd-pod-about-light-card p{
        font-size:7.5px !important;
    }
}
</style>