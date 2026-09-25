<!-- =========================================================
 KING DIGITAL - APP DEVELOPMENT HERO
 FINAL FIXED VERSION
 Orange + Navy Blue
 Moving Code Behind Content
========================================================= -->

<section class="kd-app-hero">

    <!-- MOVING CODE - ALWAYS BEHIND CONTENT -->
    <div class="kd-code-bg" id="kdCodeBg" aria-hidden="true"></div>

    <!-- STRONG SOFT OVERLAY ABOVE CODE -->
    <div class="kd-bg-overlay"></div>


    <div class="kd-app-container">

        <!-- =================================================
             LEFT CONTENT
        ================================================== -->
        <div class="kd-app-content">

            <!-- SLOW AUTO CHANGING SUB HEADING -->
            <div class="kd-changing-title">
                <span id="kdChangingTitle">
                    App Development
                </span>
            </div>


            <!-- GREEN LABEL -->
            <div class="kd-app-label">
                <span>APP DEVELOPMENT COMPANY</span>
            </div>


            <!-- MAIN HEADING -->
            <h1 class="kd-app-heading">

                <span>
                    Customized mobile apps developed
                </span>

                <span>
                    to grow your business.
                </span>

            </h1>


            <!-- DESCRIPTION -->
            <p class="kd-app-description">
                King Digital creates powerful, scalable and user-friendly
                mobile applications tailored to your business needs.
                From Android and iOS apps to cross-platform solutions,
                we transform your ideas into high-performing digital experiences.
            </p>

        </div>



        <!-- =================================================
             RIGHT FORM
        ================================================== -->
        <div class="kd-form-wrapper">

            <div class="kd-form-label">
                Sales Call Back
            </div>


            <div class="kd-form-box">

                <form id="kdAppForm">


                    <!-- NAME -->
                    <div class="kd-field">

                        <input
                            type="text"
                            name="name"
                            placeholder="Name/Company Name*"
                            required
                        >

                    </div>


                    <!-- PHONE -->
                    <div class="kd-field">

                        <input
                            type="tel"
                            name="phone"
                            placeholder="Contact Number*"
                            required
                        >

                    </div>


                    <!-- EMAIL -->
                    <div class="kd-field">

                        <input
                            type="email"
                            name="email"
                            placeholder="Business/Company Email*"
                            required
                        >

                    </div>


                    <!-- SERVICE -->
                    <div class="kd-field">

                        <select
                            name="service"
                            required
                        >

                            <option
                                value=""
                                selected
                                disabled
                            >
                                --Select Requirement--
                            </option>

                            <option>
                                Android App Development
                            </option>

                            <option>
                                iOS App Development
                            </option>

                            <option>
                                Cross-Platform App
                            </option>

                            <option>
                                Custom Business App
                            </option>

                            <option>
                                E-commerce App Development
                            </option>

                            <option>
                                App UI / UX Design
                            </option>

                        </select>

                    </div>


                    <!-- CAPTCHA -->
                    <div class="kd-captcha-row">

                        <input
                            type="text"
                            id="kdCaptchaInput"
                            placeholder="Enter the CAPTCHA"
                            required
                        >


                        <div class="kd-captcha-box">

                            <span id="kdCaptchaText">
                                63854
                            </span>

                            <span class="kd-captcha-line kd-line-one"></span>

                            <span class="kd-captcha-line kd-line-two"></span>

                            <span class="kd-captcha-line kd-line-three"></span>

                        </div>


                        <button
                            type="button"
                            class="kd-refresh"
                            id="kdRefresh"
                            aria-label="Refresh Captcha"
                        >
                            ↻
                        </button>

                    </div>


                    <!-- FORM BUTTONS -->
                    <div class="kd-form-actions">


                        <button
                            type="submit"
                            class="kd-submit"
                        >
                            <span>SUBMIT</span>
                        </button>


                        <span class="kd-or">
                            OR
                        </span>


                        <a
                            href="https://wa.me/919999999999?text=Hello%20King%20Digital,%20I%20am%20interested%20in%20App%20Development."
                            target="_blank"
                            rel="noopener"
                            class="kd-whatsapp"
                        >

                            <span class="kd-wa-symbol">
                                ☏
                            </span>

                            <span class="kd-whatsapp-text">
                                WHATSAPP
                            </span>

                        </a>


                    </div>

                </form>

            </div>

        </div>

    </div>

</section>



<style>

/* =========================================================
 RESET / ISOLATION
========================================================= */

.kd-app-hero,
.kd-app-hero *{
    box-sizing:border-box;
}


.kd-app-hero{

    position:relative;

    isolation:isolate;

    width:100%;

    min-height:570px;

    overflow:hidden;

    display:flex;

    align-items:center;

    padding:50px 55px;

    font-family:
        "Poppins",
        Arial,
        sans-serif;

    background:

        radial-gradient(
            circle at 95% 30%,
            rgba(241,112,39,.42) 0%,
            rgba(235,110,39,.18) 22%,
            transparent 43%
        ),

        radial-gradient(
            circle at 8% 88%,
            rgba(35,94,166,.18),
            transparent 38%
        ),

        linear-gradient(
            110deg,
            #081a3d 0%,
            #0b2b5c 42%,
            #144979 70%,
            #c96732 118%
        );

}


/* =========================================================
 MOVING CODE BACKGROUND
========================================================= */

.kd-code-bg{

    position:absolute;

    inset:0;

    z-index:0;

    overflow:hidden;

    pointer-events:none;

    user-select:none;

    /*
       Main fix:
       complete code layer stays visually soft.
    */

    opacity:.62;

}


/*
 Extra shade directly over code.
 This makes code visible but prevents it
 from competing with heading/form.
*/

.kd-code-bg:after{

    content:"";

    position:absolute;

    inset:0;

    z-index:5;

    pointer-events:none;

    background:

        linear-gradient(
            90deg,
            rgba(5,20,55,.38) 0%,
            rgba(10,40,83,.36) 45%,
            rgba(18,62,101,.34) 70%,
            rgba(124,67,47,.34) 100%
        );

}


/* =========================================================
 OVERLAY BETWEEN CODE AND CONTENT
========================================================= */

.kd-bg-overlay{

    position:absolute;

    inset:0;

    z-index:1;

    pointer-events:none;

    background:

        linear-gradient(
            90deg,
            rgba(5,20,55,.24) 0%,
            rgba(7,31,70,.17) 48%,
            rgba(13,48,82,.13) 70%,
            rgba(140,69,42,.10) 100%
        );

}


/* =========================================================
 CONTENT CONTAINER
========================================================= */

.kd-app-container{

    position:relative;

    z-index:10;

    width:100%;

    max-width:1500px;

    margin:0 auto;

    display:grid;

    grid-template-columns:
        minmax(0,1.45fr)
        minmax(430px,.82fr);

    align-items:center;

    gap:75px;

}


/* =========================================================
 LEFT CONTENT
========================================================= */

.kd-app-content{

    position:relative;

    z-index:20;

    color:#fff;

}


/* =========================================================
 CHANGING SUB HEADING
========================================================= */

.kd-changing-title{

    min-height:48px;

    display:flex;

    align-items:center;

    margin-bottom:15px;

    overflow:hidden;

}


#kdChangingTitle{

    display:inline-block;

    margin:0;

    padding:0;

    color:#ffffff;

    font-size:
        clamp(
            31px,
            2.4vw,
            40px
        );

    line-height:1.15;

    font-weight:700;

    letter-spacing:-.8px;

    text-shadow:
        0 4px 18px
        rgba(0,0,0,.18);

    /*
       slower smooth transition
    */

    transition:
        opacity .55s ease,
        transform .55s ease,
        filter .55s ease;

}


#kdChangingTitle.kd-title-hide{

    opacity:0;

    transform:
        translateY(12px);

    filter:
        blur(2px);

}


/* =========================================================
 GREEN LABEL
========================================================= */

.kd-app-label{

    position:relative;

    width:490px;

    max-width:100%;

    min-height:38px;

    overflow:hidden;

    display:flex;

    align-items:center;

    margin-bottom:19px;

    padding:
        5px 37px;

    border-radius:
        0 42px 0 42px;

    background:

        linear-gradient(
            90deg,
            #91f223 0%,
            #d5ff00 100%
        );

}


.kd-app-label:after{

    content:"";

    position:absolute;

    right:-25px;

    bottom:-34px;

    width:76px;

    height:68px;

    background:#113161;

    transform:
        rotate(34deg);

}


.kd-app-label span{

    position:relative;

    z-index:2;

    color:#050505;

    font-size:19px;

    line-height:1.2;

    font-weight:700;

    white-space:nowrap;

}


/* =========================================================
 MAIN HEADING
========================================================= */

.kd-app-heading{

    max-width:850px;

    margin:
        0 0
        23px;

    padding:0;

    color:#fff;

    font-size:
        clamp(
            35px,
            3vw,
            44px
        );

    line-height:1.25;

    font-weight:400;

    letter-spacing:-1px;

    text-shadow:
        0 3px 18px
        rgba(0,0,0,.10);

}


.kd-app-heading span{

    display:block;

    white-space:nowrap;

}


/* =========================================================
 DESCRIPTION
========================================================= */

.kd-app-description{

    max-width:830px;

    margin:0;

    color:
        rgba(255,255,255,.96);

    font-size:17px;

    line-height:1.85;

    font-weight:400;

    text-shadow:
        0 2px 10px
        rgba(0,0,0,.10);

}


/* =========================================================
 FORM WRAPPER
========================================================= */

.kd-form-wrapper{

    position:relative;

    z-index:30;

    width:100%;

    max-width:500px;

    margin-left:auto;

    padding-top:19px;

}


/* =========================================================
 SALES CALLBACK LABEL
========================================================= */

.kd-form-label{

    position:absolute;

    z-index:40;

    top:0;

    right:15%;

    width:215px;

    height:41px;

    display:flex;

    align-items:center;

    justify-content:center;

    padding:0;

    color:#fff;

    font-size:17px;

    line-height:1;

    font-weight:600;

    background:

        linear-gradient(
            95deg,
            #ef1f59 0%,
            #ff5b30 100%
        );

    border-radius:
        0 42px 0 42px;

}


/* =========================================================
 FORM BOX
========================================================= */

.kd-form-box{

    position:relative;

    z-index:30;

    width:100%;

    padding:
        45px 39px
        30px;

    background:#fff;

    border-radius:13px;

    box-shadow:

        0 20px 50px
        rgba(0,0,0,.15);

}


/* =========================================================
 FORM FIELDS
========================================================= */

.kd-field{

    width:100%;

    margin-bottom:14px;

}


.kd-field input,
.kd-field select{

    width:100%;

    height:47px;

    margin:0;

    padding:
        0 14px;

    outline:none;

    border:
        1px solid #cacaca;

    border-radius:5px;

    background:#fff;

    color:#555;

    font-family:inherit;

    font-size:14px;

    line-height:47px;

    box-shadow:none;

    transition:
        border .2s ease,
        box-shadow .2s ease;

}


.kd-field input::placeholder{

    color:#999;

    opacity:1;

}


.kd-field input:focus,
.kd-field select:focus{

    border-color:#345fa6;

    box-shadow:

        0 0 0 3px
        rgba(43,88,160,.07);

}


/* =========================================================
 CAPTCHA
========================================================= */

.kd-captcha-row{

    display:grid;

    grid-template-columns:
        minmax(0,1.2fr)
        105px
        31px;

    gap:16px;

    align-items:center;

    margin:
        2px 0
        21px;

}


.kd-captcha-row > input{

    width:100%;

    height:46px;

    margin:0;

    padding:
        0 13px;

    border:
        1px solid #cacaca;

    border-radius:5px;

    outline:none;

    background:#fff;

    font-family:inherit;

    font-size:13px;

    line-height:46px;

    color:#555;

}


.kd-captcha-row > input::placeholder{

    color:#999;

    opacity:1;

}


/* Captcha image */

.kd-captcha-box{

    position:relative;

    height:46px;

    overflow:hidden;

    display:flex;

    align-items:center;

    justify-content:center;

    background:

        repeating-linear-gradient(
            -20deg,
            #f6f6f6 0,
            #f6f6f6 9px,
            #e9e9e9 10px,
            #e9e9e9 11px
        );

}


#kdCaptchaText{

    position:relative;

    z-index:4;

    color:#111;

    font-family:
        Georgia,
        serif;

    font-size:25px;

    font-style:italic;

    line-height:1;

    letter-spacing:-2px;

    transform:
        rotate(-4deg);

}


.kd-captcha-line{

    position:absolute;

    z-index:5;

    height:1px;

    background:
        rgba(80,80,80,.70);

}


.kd-line-one{

    width:75px;

    transform:
        rotate(-37deg);

}


.kd-line-two{

    width:72px;

    transform:
        rotate(27deg);

}


.kd-line-three{

    width:82px;

    transform:
        rotate(-10deg);

    opacity:.4;

}


/* =========================================================
 CAPTCHA REFRESH
========================================================= */

.kd-refresh,
.kd-refresh:hover,
.kd-refresh:focus,
.kd-refresh:active{

    width:31px !important;

    height:44px !important;

    min-width:31px !important;

    min-height:44px !important;

    margin:0 !important;

    padding:0 !important;

    display:flex !important;

    align-items:center !important;

    justify-content:center !important;

    border:none !important;

    outline:none !important;

    box-shadow:none !important;

    background:transparent !important;

    color:#111 !important;

    font-family:
        Arial,
        sans-serif !important;

    font-size:30px !important;

    line-height:1 !important;

    cursor:pointer;

}


.kd-refresh{

    transition:
        transform .4s ease;

}


.kd-refresh:hover{

    transform:
        rotate(180deg);

}


/* =========================================================
 FORM ACTIONS
========================================================= */

.kd-form-actions{

    width:100%;

    display:grid;

    grid-template-columns:
        minmax(0,1fr)
        48px
        minmax(0,1fr);

    align-items:center;

    gap:8px;

}


/* =========================================================
 SUBMIT BUTTON
 FIXED TEXT VERTICAL ALIGNMENT
========================================================= */

.kd-submit,
.kd-submit:hover,
.kd-submit:focus,
.kd-submit:focus-visible,
.kd-submit:active{

    width:100% !important;

    height:45px !important;

    min-height:45px !important;

    margin:0 !important;

    padding:
        0 18px !important;

    display:flex !important;

    align-items:center !important;

    justify-content:center !important;

    vertical-align:middle !important;

    border:
        2px solid #1749bd !important;

    border-radius:
        28px !important;

    outline:none !important;

    text-decoration:none !important;

    text-transform:none !important;

    box-shadow:none;

    background:

        linear-gradient(
            90deg,
            #19129b 0%,
            #155ade 100%
        ) !important;

    color:#ffffff !important;

    -webkit-text-fill-color:#ffffff !important;

    font-family:
        "Poppins",
        Arial,
        sans-serif !important;

    font-size:14px !important;

    line-height:1 !important;

    font-weight:700 !important;

    letter-spacing:0 !important;

    cursor:pointer;

    appearance:none;

    -webkit-appearance:none;

}


.kd-submit{

    transition:
        transform .25s ease,
        box-shadow .25s ease;

}


.kd-submit span{

    display:block;

    margin:0;

    padding:0;

    color:#fff !important;

    -webkit-text-fill-color:#fff !important;

    line-height:1 !important;

}


.kd-submit:hover{

    transform:
        translateY(-2px);

    color:#fff !important;

    -webkit-text-fill-color:#fff !important;

    box-shadow:

        0 8px 20px
        rgba(20,65,170,.22) !important;

}


.kd-submit:hover span,
.kd-submit:focus span,
.kd-submit:active span{

    color:#ffffff !important;

    -webkit-text-fill-color:#ffffff !important;

}


/* =========================================================
 OR
========================================================= */

.kd-or{

    width:48px;

    height:45px;

    display:flex;

    align-items:center;

    justify-content:center;

    margin:0;

    padding:0;

    color:#111;

    font-size:14px;

    line-height:1;

    text-align:center;

}


/* =========================================================
 WHATSAPP BUTTON
 FIXED TEXT VERTICAL ALIGNMENT + HOVER COLOR
========================================================= */

.kd-whatsapp,
.kd-whatsapp:link,
.kd-whatsapp:visited,
.kd-whatsapp:hover,
.kd-whatsapp:focus,
.kd-whatsapp:focus-visible,
.kd-whatsapp:active{

    width:100% !important;

    height:45px !important;

    min-height:45px !important;

    margin:0 !important;

    padding:
        0 16px !important;

    display:flex !important;

    align-items:center !important;

    justify-content:center !important;

    gap:7px !important;

    vertical-align:middle !important;

    border:
        0 !important;

    border-radius:
        28px !important;

    outline:none !important;

    text-decoration:none !important;

    text-transform:none !important;

    background:
        #18b928 !important;

    color:
        #ffffff !important;

    -webkit-text-fill-color:
        #ffffff !important;

    font-family:
        "Poppins",
        Arial,
        sans-serif !important;

    font-size:
        14px !important;

    line-height:
        1 !important;

    font-weight:
        600 !important;

    letter-spacing:
        0 !important;

    box-shadow:none;

}


.kd-whatsapp{

    transition:
        transform .25s ease,
        background .25s ease,
        box-shadow .25s ease;

}


.kd-whatsapp:hover{

    transform:
        translateY(-2px);

    background:
        #0eaa1e !important;

    color:
        #ffffff !important;

    -webkit-text-fill-color:
        #ffffff !important;

    box-shadow:

        0 8px 20px
        rgba(16,170,31,.18) !important;

}


.kd-whatsapp-text{

    display:block;

    margin:0;

    padding:0;

    line-height:1 !important;

    color:#fff !important;

    -webkit-text-fill-color:
        #fff !important;

}


.kd-whatsapp:hover
.kd-whatsapp-text,
.kd-whatsapp:focus
.kd-whatsapp-text,
.kd-whatsapp:active
.kd-whatsapp-text{

    color:#ffffff !important;

    -webkit-text-fill-color:
        #ffffff !important;

}


/* WhatsApp symbol */

.kd-wa-symbol{

    flex:
        0 0
        18px;

    width:18px;

    height:18px;

    margin:0;

    padding:0;

    display:flex;

    align-items:center;

    justify-content:center;

    border:
        1.5px solid #fff;

    border-radius:50%;

    color:#fff !important;

    -webkit-text-fill-color:
        #fff !important;

    font-size:9px;

    line-height:1 !important;

}


/* =========================================================
 CODE COLUMNS
========================================================= */

.kd-code-column{

    position:absolute;

    top:0;

    bottom:0;

    width:235px;

    overflow:hidden;

    /*
       lower opacity prevents code overlay feel
    */

    opacity:.30;

}


.kd-code-stream{

    position:absolute;

    z-index:1;

    width:100%;

    left:0;

    top:0;

    color:
        rgba(143,207,255,.42);

    font-family:
        "Courier New",
        monospace;

    font-size:14px;

    line-height:1.74;

    font-weight:600;

    white-space:nowrap;

    text-shadow:none;

    animation:
        kdCodeUp
        linear infinite;

}


.kd-code-column:nth-child(2n)
.kd-code-stream{

    color:
        rgba(255,187,138,.35);

}


.kd-code-column:nth-child(3n)
.kd-code-stream{

    color:
        rgba(132,213,246,.38);

}


.kd-code-column:nth-child(4n)
.kd-code-stream{

    color:
        rgba(255,210,169,.30);

}


.kd-code-line{

    display:block;

    min-height:26px;

    padding-left:4px;

}


/* =========================================================
 CODE ANIMATION
========================================================= */

@keyframes kdCodeUp{

    0%{

        transform:
            translate3d(
                0,
                8%,
                0
            );

    }

    100%{

        transform:
            translate3d(
                0,
                -50%,
                0
            );

    }

}


/* =========================================================
 OPTIONAL STATIC CODE
========================================================= */

.kd-code-bg:before{

    content:
        "const app = buildIdea();   <MobileApp />   android.build();   ios.deploy();   API.connect();   UI.create();   UX.optimize();   flutter.run();";

    position:absolute;

    z-index:1;

    left:-3%;

    top:43%;

    width:110%;

    color:
        rgba(255,255,255,.035);

    font-family:
        "Courier New",
        monospace;

    font-size:25px;

    line-height:2;

    white-space:nowrap;

    transform:
        rotate(-4deg);

}


/* =========================================================
 RESPONSIVE
========================================================= */

@media(max-width:1150px){

    .kd-app-hero{

        padding:
            50px 30px;

    }


    .kd-app-container{

        grid-template-columns:
            minmax(0,1fr)
            430px;

        gap:45px;

    }


    .kd-app-heading{

        font-size:35px;

    }


    .kd-app-description{

        font-size:15px;

    }


    .kd-app-label{

        width:445px;

    }


    .kd-app-label span{

        font-size:17px;

    }

}


/* =========================================================
 TABLET
========================================================= */

@media(max-width:920px){

    .kd-app-container{

        grid-template-columns:1fr;

        gap:55px;

    }


    .kd-form-wrapper{

        margin:
            0 auto;

    }


    .kd-app-heading span{

        white-space:normal;

    }

}


/* =========================================================
 MOBILE
========================================================= */

@media(max-width:600px){

    .kd-app-hero{

        min-height:auto;

        padding:
            45px 16px
            55px;

    }


    .kd-changing-title{

        min-height:40px;

        margin-bottom:13px;

    }


    #kdChangingTitle{

        font-size:28px;

    }


    .kd-app-label{

        width:100%;

        min-height:35px;

        padding:
            5px 20px;

    }


    .kd-app-label span{

        font-size:13px;

    }


    .kd-app-heading{

        margin-top:17px;

        font-size:29px;

        line-height:1.28;

    }


    .kd-app-heading span{

        white-space:normal;

    }


    .kd-app-description{

        font-size:14px;

        line-height:1.75;

    }


    .kd-form-wrapper{

        max-width:100%;

        padding-top:18px;

    }


    .kd-form-label{

        width:195px;

        right:10%;

        height:39px;

        font-size:15px;

    }


    .kd-form-box{

        padding:
            45px 18px
            25px;

    }


    .kd-field{

        margin-bottom:12px;

    }


    .kd-field input,
    .kd-field select{

        height:46px;

        font-size:13px;

    }


    .kd-captcha-row{

        grid-template-columns:
            1fr
            95px
            27px;

        gap:7px;

    }


    .kd-captcha-row > input{

        height:45px;

        padding:
            0 9px;

        font-size:11px;

    }


    .kd-captcha-box{

        height:45px;

    }


    #kdCaptchaText{

        font-size:22px;

    }


    .kd-refresh{

        font-size:28px !important;

    }


    /*
      Mobile: stack buttons cleanly.
    */

    .kd-form-actions{

        grid-template-columns:1fr;

        gap:9px;

    }


    .kd-submit,
    .kd-submit:hover,
    .kd-submit:focus,
    .kd-submit:active,
    .kd-whatsapp,
    .kd-whatsapp:hover,
    .kd-whatsapp:focus,
    .kd-whatsapp:active{

        height:45px !important;

        min-height:45px !important;

    }


    .kd-or{

        width:100%;

        height:18px;

        line-height:1;

    }


    .kd-code-column{

        width:190px;

        opacity:.22;

    }


    .kd-code-stream{

        font-size:11px;

    }

}

</style>



<script>

(function(){


/* =========================================================
 AUTO CHANGING SUB HEADING
 SLOWER SPEED
========================================================= */

const changingTitle =
    document.getElementById(
        "kdChangingTitle"
    );


const titles = [

    "App Development",

    "Android App Development",

    "iOS App Development",

    "Cross-Platform Development",

    "Custom Mobile Applications",

    "Business App Solutions"

];


let titleIndex = 0;


if(changingTitle){

    /*
      OLD = 2200ms
      NEW = 4500ms
      Much slower and easier to read.
    */

    setInterval(
        function(){

            changingTitle.classList.add(
                "kd-title-hide"
            );


            setTimeout(
                function(){

                    titleIndex =
                        (
                            titleIndex + 1
                        )
                        %
                        titles.length;


                    changingTitle.textContent =
                        titles[
                            titleIndex
                        ];


                    changingTitle.classList.remove(
                        "kd-title-hide"
                    );

                },

                550

            );

        },

        4500

    );

}



/* =========================================================
 DENSE MOVING CODE BACKGROUND
========================================================= */

const codeBg =
    document.getElementById(
        "kdCodeBg"
    );


const codeLines = [

    '&lt;div class="application"&gt;',

    'const app = buildIdea();',

    'import React from "react";',

    'import Flutter from "mobile";',

    'function createApp(){',

    'return digitalExperience;',

    '}',

    '&lt;MobileApplication /&gt;',

    'android.build();',

    'ios.deploy();',

    'flutter.run();',

    'reactNative.start();',

    'API.connect("business");',

    'UI.create();',

    'UX.optimize();',

    'database.connect();',

    'authentication.start();',

    'user.login();',

    'cloud.sync();',

    'const performance = "fast";',

    'const security = true;',

    'business.scale();',

    'npm run build',

    '&lt;CustomApp&gt;',

    '&lt;/CustomApp&gt;',

    'responsive = true;',

    'payment.integrate();',

    'notifications.send();',

    'analytics.track();',

    'server.connect();',

    'app.launch();',

    'if(idea){',

    'developApplication();',

    '}',

    'mobile.optimize();',

    'interface.design();',

    'data.fetch();',

    'userExperience.start();',

    'technology.scale();',

    'console.log("King Digital");',

    '&lt;/development&gt;',

    'deploy.production();'

];


if(codeBg){

    /*
      Prevent duplicate code columns
      if Elementor executes script again.
    */

    codeBg
        .querySelectorAll(
            ".kd-code-column"
        )
        .forEach(
            function(item){

                item.remove();

            }
        );


    const totalColumns = 12;


    for(
        let i = 0;
        i < totalColumns;
        i++
    ){

        const column =
            document.createElement(
                "div"
            );


        column.className =
            "kd-code-column";


        column.style.left =
            (
                i * 9
            )
            +
            "%";


        const stream =
            document.createElement(
                "div"
            );


        stream.className =
            "kd-code-stream";


        /*
          Slower background movement
          so code doesn't feel distracting.
        */

        stream.style.animationDuration =
            (
                38 +
                (
                    i % 5
                )
                *
                5
            )
            +
            "s";


        stream.style.animationDelay =
            (
                -i * 5
            )
            +
            "s";


        let html = "";


        for(
            let repeat = 0;
            repeat < 4;
            repeat++
        ){

            codeLines.forEach(
                function(
                    line,
                    index
                ){

                    const current =
                        (
                            index +
                            i * 4
                        )
                        %
                        codeLines.length;


                    html +=
                        '<span class="kd-code-line">'
                        +
                        codeLines[
                            current
                        ]
                        +
                        '</span>';

                }
            );

        }


        stream.innerHTML =
            html;


        column.appendChild(
            stream
        );


        codeBg.appendChild(
            column
        );

    }

}



/* =========================================================
 CAPTCHA
========================================================= */

const captchaText =
    document.getElementById(
        "kdCaptchaText"
    );


const captchaInput =
    document.getElementById(
        "kdCaptchaInput"
    );


const refresh =
    document.getElementById(
        "kdRefresh"
    );


let captchaValue = "";


function generateCaptcha(){

    captchaValue =
        Math.floor(
            10000 +
            Math.random() *
            90000
        )
        .toString();


    if(captchaText){

        captchaText.textContent =
            captchaValue;

    }


    if(captchaInput){

        captchaInput.value = "";

    }

}


generateCaptcha();


if(refresh){

    refresh.addEventListener(
        "click",
        generateCaptcha
    );

}



/* =========================================================
 FORM SUBMISSION
========================================================= */

const form =
    document.getElementById(
        "kdAppForm"
    );


if(form){

    form.addEventListener(
        "submit",
        function(e){

            e.preventDefault();


            if(
                !captchaInput ||
                captchaInput.value.trim()
                !==
                captchaValue
            ){

                alert(
                    "Please enter the correct CAPTCHA."
                );


                generateCaptcha();


                return;

            }


            alert(
                "Thank you! Your enquiry has been received."
            );


            form.reset();


            generateCaptcha();

        }
    );

}


})();

</script>