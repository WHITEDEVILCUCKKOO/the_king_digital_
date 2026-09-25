<!-- =========================================================
 KING DIGITAL - PREMIUM 404 PAGE
 FINAL COMPACT 4 + PERSON + 4 VERSION
 NAVY BLUE + ORANGE
========================================================= -->

<section class="kd404-section">

    <!-- BACKGROUND -->
    <div class="kd404-grid"></div>

    <div class="kd404-code-bg" aria-hidden="true">
        <span class="kd404-code c1">&lt;div class="page"&gt;</span>
        <span class="kd404-code c2">console.log("Page Not Found");</span>
        <span class="kd404-code c3">if(page === null) { return 404; }</span>
        <span class="kd404-code c4">&lt;/development&gt;</span>
        <span class="kd404-code c5">route.find();</span>
        <span class="kd404-code c6">error.handle(404);</span>
        <span class="kd404-code c7">const page = undefined;</span>
        <span class="kd404-code c8">redirect.home();</span>
    </div>

    <div class="kd404-orange-glow"></div>
    <div class="kd404-blue-glow"></div>


    <div class="kd404-container">

        <!-- =================================================
             LEFT CONTENT
        ================================================== -->
        <div class="kd404-content">

            <div class="kd404-tag">
                <span class="kd404-tag-dot"></span>
                ERROR 404
            </div>

            <h1>
                Oops! This Page
                <span>Took a Wrong Turn.</span>
            </h1>

            <p>
                The page you're looking for may have been moved, deleted,
                renamed or never existed. Don't worry — we'll help you
                get back on track.
            </p>


            <div class="kd404-actions">

                <a href="index.php" class="kd404-home-btn">

                    <span class="kd404-home-icon">
                        ⌂
                    </span>

                    <span>
                        Back to Homepage
                    </span>

                </a>


                <button
                    type="button"
                    class="kd404-back-btn"
                    onclick="kd404GoBack()"
                >
                    <span>←</span>
                    <span>Go Back</span>
                </button>

            </div>


            <div class="kd404-help">

                <span class="kd404-help-line"></span>

                <span>
                    Still lost? Visit our homepage and explore our digital services.
                </span>

            </div>

        </div>



        <!-- =================================================
             RIGHT VISUAL
        ================================================== -->
        <div class="kd404-visual">

            <!-- MAIN DECORATIVE CIRCLE -->
            <div class="kd404-main-circle"></div>

            <div class="kd404-ring kd404-ring-1"></div>
            <div class="kd404-ring kd404-ring-2"></div>


            <!-- =============================================
                 4 + PERSON + 4
            ============================================== -->
            <div class="kd404-number-wrap">

                <!-- LEFT 4 -->
                <span class="kd404-four kd404-four-left">
                    4
                </span>


                <!-- PERSON -->
                <div class="kd404-person">

                    <img
                        src="https://jatinkingdigital.hiralgems.com/wp-content/uploads/2026/09/c0ac368a-0a4b-4fe7-bb71-05e65b06c730.png"
                        alt="404 Page Not Found"
                    >

                </div>


                <!-- RIGHT 4 -->
                <span class="kd404-four kd404-four-right">
                    4
                </span>

            </div>


            <!-- FLOATING ERROR CARD -->
            <div class="kd404-float kd404-float-1">

                <div class="kd404-float-icon">
                    !
                </div>

                <div>
                    <small>PAGE STATUS</small>
                    <strong>Not Found</strong>
                </div>

            </div>


            <!-- FLOATING CODE CARD -->
            <div class="kd404-float kd404-float-2">

                <div class="kd404-float-code">
                    &lt;/&gt;
                </div>

                <div>
                    <small>ERROR CODE</small>
                    <strong>404</strong>
                </div>

            </div>


            <!-- BOTTOM URL CARD -->
            <div class="kd404-url-card">

                <span class="kd404-url-lock">
                    ⚠
                </span>

                <div>
                    <strong>Page unavailable</strong>
                    <span>/requested-page</span>
                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
 RESET
========================================================= */

*{
    margin: 0;padding: 0;
box-sizing: border-box;
}

.kd404-section,
.kd404-section *{
    box-sizing:border-box;
   
}


/* =========================================================
 MAIN SECTION
========================================================= */

.kd404-section{

    position:relative;

    isolation:isolate;

    width:100%;

    height: 100vh;
    /* min-height:710px; */

    overflow:hidden;

    display:flex;

    align-items:center;

    /* padding:48px 28px; */

    font-family:"Poppins", Arial, sans-serif;

    background:

        radial-gradient(
            circle at 89% 18%,
            rgba(242,103,34,.30),
            transparent 27%
        ),

        radial-gradient(
            circle at 73% 80%,
            rgba(33,92,176,.22),
            transparent 34%
        ),

        linear-gradient(
            118deg,
            #061429 0%,
            #092950 46%,
            #103c6f 74%,
            #8d4b30 128%
        );

}


/* =========================================================
 GRID
========================================================= */

.kd404-grid{

    position:absolute;

    inset:0;

    z-index:0;

    pointer-events:none;

    opacity:.045;

    background-image:

        linear-gradient(
            rgba(255,255,255,.55) 1px,
            transparent 1px
        ),

        linear-gradient(
            90deg,
            rgba(255,255,255,.55) 1px,
            transparent 1px
        );

    background-size:55px 55px;

}


/* =========================================================
 BACKGROUND CODE
========================================================= */

.kd404-code-bg{

    position:absolute;

    inset:0;

    z-index:0;

    pointer-events:none;

    overflow:hidden;

}


.kd404-code{

    position:absolute;

    color:rgba(137,198,255,.075);

    font-family:"Courier New", monospace;

    font-size:17px;

    line-height:1;

    font-weight:700;

    white-space:nowrap;

}


.c1{
    top:8%;
    left:3%;
}

.c2{
    top:20%;
    right:4%;
}

.c3{
    top:38%;
    left:6%;
}

.c4{
    top:53%;
    right:4%;
}

.c5{
    bottom:22%;
    left:2%;
}

.c6{
    bottom:9%;
    right:11%;
}

.c7{
    top:67%;
    left:38%;
}

.c8{
    top:9%;
    left:49%;
}


/* =========================================================
 GLOW
========================================================= */

.kd404-orange-glow{

    position:absolute;

    z-index:0;

    width:380px;

    height:380px;

    right:-100px;

    top:-120px;

    border-radius:50%;

    background:rgba(242,103,34,.18);

    filter:blur(90px);

    pointer-events:none;

}


.kd404-blue-glow{

    position:absolute;

    z-index:0;

    width:410px;

    height:410px;

    left:-170px;

    bottom:-190px;

    border-radius:50%;

    background:rgba(35,96,186,.14);

    filter:blur(90px);

    pointer-events:none;

}


/* =========================================================
 MAIN CONTAINER
========================================================= */

.kd404-container{

    position:relative;

    z-index:5;

    width:100%;

    max-width:1380px;

    margin:0 auto;

    display:grid;

    grid-template-columns:
        minmax(0,.88fr)
        minmax(570px,1.12fr);

    gap:35px;

    align-items:center;

}


/* =========================================================
 CONTENT
========================================================= */

.kd404-content{

    position:relative;

    z-index:10;

    max-width:570px;

}


/* TAG */

.kd404-tag{

    width:max-content;

    display:flex;

    align-items:center;

    gap:9px;

    margin-bottom:16px;

    padding:9px 15px;

    border:
        1px solid rgba(255,255,255,.10);

    border-radius:30px;

    background:rgba(255,255,255,.07);

    color:#ff8b4a;

    font-size:11px;

    line-height:1;

    font-weight:750;

    letter-spacing:1.7px;

    backdrop-filter:blur(8px);

}


.kd404-tag-dot{

    width:8px;

    height:8px;

    border-radius:50%;

    background:#f26722;

    box-shadow:
        0 0 0 5px rgba(242,103,34,.12);

}


/* =========================================================
 HEADING
========================================================= */

.kd404-content h1{

    margin:0 0 20px;

    padding:0;

    color:#ffffff;

    font-size:
        clamp(
            42px,
            4.2vw,
            63px
        );

    line-height:1.07;

    font-weight:750;

    letter-spacing:-2px;

}


.kd404-content h1 span{

    display:block;

    margin-top:5px;

    color:#f26722;

}


/* =========================================================
 PARAGRAPH
========================================================= */

.kd404-content > p{

    max-width:530px;

    margin:0;

    color:rgba(255,255,255,.72);

    font-size:15px;

    line-height:1.85;

}


/* =========================================================
 ACTION BUTTONS
========================================================= */

.kd404-actions{

    display:flex;

    align-items:center;

    flex-wrap:wrap;

    gap:12px;

    margin-top:28px;

}


/* HOME */

.kd404-home-btn,
.kd404-home-btn:link,
.kd404-home-btn:visited,
.kd404-home-btn:hover,
.kd404-home-btn:focus{

    min-height:50px;

    display:inline-flex;

    align-items:center;

    justify-content:center;

    gap:9px;

    padding:0 20px;

    border:none;

    border-radius:30px;

    text-decoration:none !important;

    background:

        linear-gradient(
            100deg,
            #f26722,
            #ff8847
        );

    color:#fff !important;

    -webkit-text-fill-color:#fff !important;

    font-family:inherit;

    font-size:13px;

    line-height:1;

    font-weight:650;

    box-shadow:
        0 12px 28px rgba(242,103,34,.23);

    transition:
        transform .3s ease,
        box-shadow .3s ease;

}


.kd404-home-btn:hover{

    transform:translateY(-3px);

    box-shadow:
        0 17px 35px rgba(242,103,34,.30);

}


.kd404-home-icon{

    width:27px;

    height:27px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:50%;

    background:rgba(255,255,255,.15);

    color:#fff;

    font-size:15px;

}


/* BACK */

.kd404-back-btn,
.kd404-back-btn:hover,
.kd404-back-btn:focus,
.kd404-back-btn:active{

    min-height:50px;

    margin:0 !important;

    padding:0 20px !important;

    display:inline-flex !important;

    align-items:center !important;

    justify-content:center !important;

    gap:8px;

    border:
        1px solid rgba(255,255,255,.17) !important;

    border-radius:30px !important;

    outline:none !important;

    background:
        rgba(255,255,255,.06) !important;

    color:#fff !important;

    -webkit-text-fill-color:#fff !important;

    font-family:inherit !important;

    font-size:13px !important;

    line-height:1 !important;

    font-weight:550 !important;

    box-shadow:none !important;

    cursor:pointer;

    backdrop-filter:blur(8px);

    transition:
        transform .3s ease,
        background .3s ease,
        border-color .3s ease;

}


.kd404-back-btn:hover{

    transform:translateY(-3px);

    background:
        rgba(255,255,255,.10) !important;

    border-color:
        rgba(255,255,255,.28) !important;

}


/* HELP */

.kd404-help{

    display:flex;

    align-items:center;

    gap:10px;

    margin-top:24px;

    color:rgba(255,255,255,.43);

    font-size:10px;

    line-height:1.5;

}


.kd404-help-line{

    width:34px;

    height:1px;

    background:#f26722;

}


/* =========================================================
 VISUAL AREA
========================================================= */

.kd404-visual{

    position:relative;

    min-height:610px;

    display:flex;

    align-items:flex-end;

    justify-content:center;

}


/* =========================================================
 CENTER BACKGROUND
========================================================= */

.kd404-main-circle{

    position:absolute;

    left:50%;

    top:50%;

    width:430px;

    height:430px;

    transform:
        translate(-50%,-43%);

    border-radius:50%;

    background:

        radial-gradient(
            circle at 40% 30%,
            rgba(255,255,255,.105),
            rgba(255,255,255,.035) 48%,
            rgba(255,255,255,.012) 72%
        );

    border:
        1px solid rgba(255,255,255,.07);

}


/* RINGS */

.kd404-ring{

    position:absolute;

    left:50%;

    top:50%;

    border-radius:50%;

    pointer-events:none;

}


.kd404-ring-1{

    width:475px;

    height:475px;

    transform:
        translate(-50%,-44%);

    border:
        1px dashed rgba(242,103,34,.27);

}


.kd404-ring-2{

    width:515px;

    height:515px;

    transform:
        translate(-50%,-45%);

    border:
        1px solid rgba(255,255,255,.05);

}


/* =========================================================
 NEW COMPACT 404 COMPOSITION
========================================================= */

.kd404-number-wrap{

    position:relative;

    z-index:4;

    width:100%;

    max-width:720px;

    min-height:590px;

    margin:0 auto;

    display:flex;

    align-items:flex-end;

    justify-content:center;

}


/* =========================================================
 PERSON
========================================================= */

.kd404-person{

    position:relative;

    z-index:8;

    width:335px;

    height:560px;

    display:flex;

    align-items:flex-end;

    justify-content:center;

}


.kd404-person img{

    width:auto;

    max-width:100%;

    height:545px;

    display:block;

    object-fit:contain;

    object-position:center bottom;

    filter:

        drop-shadow(
            0 20px 28px
            rgba(0,0,0,.25)
        );

}


/* =========================================================
 BIG 4 NUMBERS
 IMPORTANT FIX:
 NUMBERS ARE NOW POSITIONED CLOSE TO PERSON
========================================================= */

.kd404-four{

    position:absolute;

    z-index:5;

    top:49%;

    transform:
        translateY(-50%);

    margin:0;

    padding:0;

    font-size:
        clamp(
            165px,
            13vw,
            220px
        );

    line-height:.82;

    font-weight:900;

    letter-spacing:-12px;

    user-select:none;

    pointer-events:none;

}


/*
 LEFT 4:
 inner edge sits close to person's left side
*/

.kd404-four-left{

    left:
        calc(50% - 270px);

    color:transparent;

    -webkit-text-stroke:
        4px #f26722;

    text-shadow:
        0 0 38px rgba(242,103,34,.12);

}


/*
 RIGHT 4:
 sits equally close to person's right side
*/

.kd404-four-right{

    right:
        calc(50% - 270px);

    color:transparent;

    -webkit-text-stroke:
        4px rgba(255,255,255,.86);

    text-shadow:
        0 0 38px rgba(255,255,255,.075);

}


/* =========================================================
 SMALL ORANGE ACCENT BEHIND PERSON
========================================================= */

.kd404-number-wrap:before{

    content:"";

    position:absolute;

    z-index:2;

    left:50%;

    bottom:46px;

    width:330px;

    height:85px;

    transform:
        translateX(-50%);

    border-radius:50%;

    background:
        rgba(242,103,34,.10);

    filter:
        blur(32px);

}


/* =========================================================
 FLOATING CARDS
========================================================= */

.kd404-float{

    position:absolute;

    z-index:12;

    display:flex;

    align-items:center;

    gap:10px;

    padding:10px 13px;

    border:
        1px solid rgba(255,255,255,.10);

    border-radius:13px;

    background:
        rgba(8,25,54,.84);

    box-shadow:
        0 14px 30px rgba(0,0,0,.18);

    backdrop-filter:blur(12px);

    animation:
        kd404Floating 4.5s ease-in-out infinite;

}


.kd404-float-1{
    left: 13%;
    top: 76%;
}


.kd404-float-2{

        right: 17%;
    top: 20%;
    animation-delay: -2.2s;

}


.kd404-float-icon,
.kd404-float-code{

    flex:0 0 34px;

    width:34px;

    height:34px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:9px;

    color:#fff;

    font-weight:750;

}


.kd404-float-icon{

    background:

        linear-gradient(
            135deg,
            #f26722,
            #ff8b49
        );

    font-size:15px;

}


.kd404-float-code{

    background:#173f7a;

    color:#91b4ff;

    font-family:"Courier New", monospace;

    font-size:18px;

}


.kd404-float small,
.kd404-float strong{

    display:block;

}


.kd404-float small{

    margin-bottom:3px;

    color:rgba(255,255,255,.40);

    font-size:7px;

    line-height:1;

    letter-spacing:.7px;

}


.kd404-float strong{

    color:#fff;

    font-size:10px;

    line-height:1.2;

}


@keyframes kd404Floating{

    0%,
    100%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-8px);
    }

}


/* =========================================================
 URL CARD
========================================================= */

.kd404-url-card{

    position:absolute;

    z-index:13;

    left:50%;

    bottom:14px;

    transform:translateX(-50%);

    min-width:215px;

    display:flex;

    align-items:center;

    gap:10px;

    padding:10px 14px;

    border-radius:13px;

    border:
        1px solid rgba(255,255,255,.09);

    background:
        rgba(255,255,255,.07);

    box-shadow:
        0 15px 30px rgba(0,0,0,.13);

    backdrop-filter:blur(10px);

}


.kd404-url-lock{

    width:30px;

    height:30px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:8px;

    background:
        rgba(242,103,34,.13);

    color:#f26722;

    font-size:13px;

}


.kd404-url-card strong,
.kd404-url-card div > span{

    display:block;

}


.kd404-url-card strong{

    margin-bottom:3px;

    color:#fff;

    font-size:12px;

    line-height:1.2;

}


.kd404-url-card div > span{

    color:rgba(255,255,255,.38);

    font-family:"Courier New", monospace;

    font-size:12px;

}


/* =========================================================
 RESPONSIVE - LAPTOP
========================================================= */

@media(max-width:1150px){

    .kd404-container{

        grid-template-columns:
            minmax(0,.9fr)
            minmax(500px,1.1fr);

        gap:20px;

    }


    .kd404-person{

        width:300px;

        height:500px;

    }


    .kd404-person img{

        height:480px;

    }


    .kd404-number-wrap{

        min-height:520px;

    }


    .kd404-four{

        font-size:175px;

    }


    .kd404-four-left{

        left:
            calc(50% - 230px);

    }


    .kd404-four-right{

        right:
            calc(50% - 230px);

    }


    .kd404-main-circle{

        width:370px;

        height:370px;

    }


    .kd404-ring-1{

        width:410px;

        height:410px;

    }


    .kd404-ring-2{

        width:445px;

        height:445px;

    }

}


/* =========================================================
 TABLET
========================================================= */

@media(max-width:850px){

    .kd404-section{

        min-height:auto;

        padding:
            46px 20px
            35px;

    }


    .kd404-container{

        grid-template-columns:1fr;

        gap:10px;

    }


    .kd404-content{

        max-width:680px;

        margin:0 auto;

        text-align:center;

    }


    .kd404-tag{

        margin-left:auto;

        margin-right:auto;

    }


    .kd404-content > p{

        margin-left:auto;

        margin-right:auto;

    }


    .kd404-actions{

        justify-content:center;

    }


    .kd404-help{

        justify-content:center;

    }


    .kd404-visual{

        min-height:490px;

    }


    .kd404-number-wrap{

        max-width:590px;

        min-height:475px;

    }


    .kd404-person{

        width:275px;

        height:455px;

    }


    .kd404-person img{

        height:440px;

    }


    .kd404-four{

        font-size:155px;

    }


    .kd404-four-left{

        left:
            calc(50% - 205px);

    }


    .kd404-four-right{

        right:
            calc(50% - 205px);

    }


    .kd404-float{

        display:none;

    }

}


/* =========================================================
 MOBILE
========================================================= */

@media(max-width:600px){

    .kd404-section{

        padding:
            36px 14px
            25px;

    }


    .kd404-content h1{

        font-size:38px;

        line-height:1.1;

        letter-spacing:-1.4px;

    }


    .kd404-content > p{

        font-size:13px;

        line-height:1.75;

    }


    .kd404-actions{

        flex-direction:column;

        gap:9px;

    }


    .kd404-home-btn,
    .kd404-back-btn{

        width:100%;

        max-width:300px;

    }


    .kd404-help{

        display:none;

    }


    .kd404-visual{

        min-height:385px;

        margin-top:3px;

    }


    .kd404-number-wrap{

        min-height:375px;

        max-width:380px;

    }


    .kd404-person{

        width:205px;

        height:360px;

    }


    .kd404-person img{

        height:350px;

    }


    .kd404-four{

        top:51%;

        font-size:105px;

        line-height:.85;

        letter-spacing:-7px;

        -webkit-text-stroke-width:3px;

    }


    /*
      MOBILE ALSO CLOSE TO IMAGE
    */

    .kd404-four-left{

        left:
            calc(50% - 142px);

    }


    .kd404-four-right{

        right:
            calc(50% - 142px);

    }


    .kd404-main-circle{

        width:265px;

        height:265px;

    }


    .kd404-ring-1{

        width:292px;

        height:292px;

    }


    .kd404-ring-2{

        width:316px;

        height:316px;

    }


    .kd404-url-card{

        min-width:175px;

        bottom:5px;

        padding:
            8px 10px;

    }

}


/* =========================================================
 VERY SMALL MOBILE
========================================================= */

@media(max-width:390px){

    .kd404-content h1{

        font-size:33px;

    }


    .kd404-person{

        width:185px;

        height:330px;

    }


    .kd404-person img{

        height:320px;

    }


    .kd404-four{

        font-size:88px;

    }


    .kd404-four-left{

        left:
            calc(50% - 124px);

    }


    .kd404-four-right{

        right:
            calc(50% - 124px);

    }

}

</style>


<script>

function kd404GoBack(){

    if(window.history.length > 1){

        window.history.back();

    }else{

        window.location.href = "/";

    }

}

</script>