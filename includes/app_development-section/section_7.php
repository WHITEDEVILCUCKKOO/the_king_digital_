<!-- =========================================================
 KING DIGITAL - TECHNOLOGIES WE USE
 PREMIUM INTERACTIVE SECTION
 ORANGE + NAVY BLUE
 COMPLETE FINAL CODE
========================================================= -->

<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
/>

<section class="kdtech-section">

    <!-- Background Decoration -->
    <div class="kdtech-orb kdtech-orb-one"></div>
    <div class="kdtech-orb kdtech-orb-two"></div>
    <div class="kdtech-dots"></div>

    <div class="kdtech-container">

        <!-- =========================
             SECTION HEADER
        ========================== -->
        <div class="kdtech-header">

            <span class="kdtech-kicker">
                <i class="fa-solid fa-layer-group"></i>
                TECHNOLOGY STACK
            </span>

            <h2>
                Proven Technologies We Trust For
                <span>App Development</span>
            </h2>

            <p>
                We work with modern, reliable and scalable technologies to build
                applications that are secure, high-performing and ready for future growth.
            </p>

        </div>


        <!-- =========================
             MAIN AREA
        ========================== -->
        <div class="kdtech-layout">

            <!-- ==================================
                 LEFT CATEGORY NAVIGATION
            =================================== -->
            <div class="kdtech-sidebar">

                <div class="kdtech-sidebar-title">
                    <span>Technology Domains</span>
                    <i class="fa-solid fa-grid-2"></i>
                </div>

                <button class="kdtech-tab active" data-tab="transformation">
                    <span class="kdtech-tab-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </span>

                    <span>Digital Transformation</span>

                    <i class="fa-solid fa-chevron-right kdtech-arrow"></i>
                </button>


                <button class="kdtech-tab" data-tab="ai">
                    <span class="kdtech-tab-icon">
                        <i class="fa-solid fa-brain"></i>
                    </span>

                    <span>AI & Automation</span>

                    <i class="fa-solid fa-chevron-right kdtech-arrow"></i>
                </button>


                <button class="kdtech-tab" data-tab="software">
                    <span class="kdtech-tab-icon">
                        <i class="fa-solid fa-code"></i>
                    </span>

                    <span>Custom Software</span>

                    <i class="fa-solid fa-chevron-right kdtech-arrow"></i>
                </button>


                <button class="kdtech-tab" data-tab="ecommerce">
                    <span class="kdtech-tab-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </span>

                    <span>eCommerce Development</span>

                    <i class="fa-solid fa-chevron-right kdtech-arrow"></i>
                </button>


                <button class="kdtech-tab" data-tab="mobile">
                    <span class="kdtech-tab-icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </span>

                    <span>Mobile Apps</span>

                    <i class="fa-solid fa-chevron-right kdtech-arrow"></i>
                </button>


                <button class="kdtech-tab" data-tab="cloud">
                    <span class="kdtech-tab-icon">
                        <i class="fa-solid fa-cloud"></i>
                    </span>

                    <span>DevOps & Cloud</span>

                    <i class="fa-solid fa-chevron-right kdtech-arrow"></i>
                </button>


                <button class="kdtech-tab" data-tab="design">
                    <span class="kdtech-tab-icon">
                        <i class="fa-solid fa-pen-ruler"></i>
                    </span>

                    <span>UI / UX Design</span>

                    <i class="fa-solid fa-chevron-right kdtech-arrow"></i>
                </button>

            </div>


            <!-- ==================================
                 RIGHT CONTENT PANEL
            =================================== -->
            <div class="kdtech-panel">

                <!-- PANEL HEADER -->
                <div class="kdtech-panel-header">

                    <div class="kdtech-panel-icon" id="kdtechPanelIcon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>

                    <div class="kdtech-panel-heading">

                        <span class="kdtech-panel-small">
                            SELECTED TECHNOLOGY DOMAIN
                        </span>

                        <h3 id="kdtechTitle">
                            Digital Transformation
                        </h3>

                        <p id="kdtechDescription">
                            Modern platforms and tools designed to streamline
                            processes, improve efficiency and support digital growth.
                        </p>

                    </div>

                </div>


                <!-- DIVIDER -->
                <div class="kdtech-orange-line"></div>


                <!-- TECHNOLOGY GRID -->
                <div
                    class="kdtech-technology-grid"
                    id="kdtechGrid"
                ></div>


                <!-- BOTTOM -->
                <div class="kdtech-panel-bottom">

                    <div class="kdtech-bottom-info">
                        <i class="fa-solid fa-circle-check"></i>

                        <span>
                            Technologies selected according to your project requirements.
                        </span>
                    </div>

                    <a href="/contact-us/" class="kdtech-cta">
                        Discuss Your Project

                        <span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


<style>

/* =========================================================
 RESET
========================================================= */

.kdtech-section,
.kdtech-section *{
    box-sizing:border-box;
}


/* =========================================================
 MAIN SECTION
========================================================= */

.kdtech-section{

    position:relative;

    width:100%;

    overflow:hidden;

    padding:52px 24px 65px;

    font-family:
        "Poppins",
        Arial,
        sans-serif;

    background:

        radial-gradient(
            circle at 0% 0%,
            rgba(14,49,91,.07),
            transparent 28%
        ),

        radial-gradient(
            circle at 100% 10%,
            rgba(242,103,34,.08),
            transparent 30%
        ),

        linear-gradient(
            180deg,
            #f8fafc 0%,
            #ffffff 55%,
            #f8fafc 100%
        );

}


/* =========================================================
 DECORATION
========================================================= */

.kdtech-orb{

    position:absolute;

    pointer-events:none;

    border-radius:50%;

}


.kdtech-orb-one{

    width:340px;

    height:340px;

    left:-220px;

    top:-190px;

    border:
        60px solid
        rgba(10,44,85,.025);

}


.kdtech-orb-two{

    width:320px;

    height:320px;

    right:-190px;

    bottom:-180px;

    border:
        55px solid
        rgba(242,103,34,.035);

}


.kdtech-dots{

    position:absolute;

    right:4%;

    top:18%;

    width:130px;

    height:130px;

    opacity:.09;

    pointer-events:none;

    background-image:

        radial-gradient(
            #f26722 1.4px,
            transparent 1.4px
        );

    background-size:
        15px 15px;

}


/* =========================================================
 CONTAINER
========================================================= */

.kdtech-container{

    position:relative;

    z-index:2;

    width:100%;

    max-width:1180px;

    margin:0 auto;

}


/* =========================================================
 HEADER
========================================================= */

.kdtech-header{

    max-width:880px;

    margin:
        0 auto
        36px;

    text-align:center;

}


.kdtech-kicker{

    display:inline-flex;

    align-items:center;

    justify-content:center;

    gap:7px;

    margin-bottom:9px;

    padding:
        7px 15px;

    border-radius:30px;

    background:
        rgba(242,103,34,.08);

    color:#f26722;

    font-size:10px;

    line-height:1;

    font-weight:750;

    letter-spacing:1.7px;

}


.kdtech-kicker i{

    font-size:11px;

}


/* =========================================================
 MAIN HEADING
========================================================= */

.kdtech-header h2{

    margin:
        0 0
        13px;

    color:#0a2c55;

    font-size:
        clamp(
            30px,
            3vw,
            40px
        );

    line-height:1.2;

    font-weight:750;

    letter-spacing:-1px;

}


.kdtech-header h2 span{

    color:#f26722;

}


/* =========================================================
 HEADER DESCRIPTION
========================================================= */

.kdtech-header p{

    max-width:760px;

    margin:0 auto;

    color:#697587;

    font-size:14px;

    line-height:1.75;

}


/* =========================================================
 MAIN LAYOUT
========================================================= */

.kdtech-layout{

    display:grid;

    grid-template-columns:
        310px
        minmax(0,1fr);

    gap:20px;

    align-items:start;

}


/* =========================================================
 SIDEBAR
========================================================= */

.kdtech-sidebar{

    position:relative;

    padding:
        20px 17px;

    border-radius:18px;

    border:
        1px solid
        rgba(10,44,85,.07);

    background:

        linear-gradient(
            145deg,
            #ffffff 0%,
            #fff7f2 100%
        );

    box-shadow:

        0 15px 38px
        rgba(10,44,85,.07);

}


/* =========================================================
 SIDEBAR TITLE
========================================================= */

.kdtech-sidebar-title{

    display:flex;

    align-items:center;

    justify-content:space-between;

    padding:
        2px 4px
        15px;

    margin-bottom:5px;

    color:#0a2c55;

    font-size:15px;

    font-weight:700;

}


.kdtech-sidebar-title i{

    color:#f26722;

}


/* =========================================================
 TAB BUTTON
========================================================= */

.kdtech-tab{

    width:100%;

    min-height:51px;

    display:grid;

    grid-template-columns:
        34px
        1fr
        14px;

    gap:9px;

    align-items:center;

    margin-bottom:6px;

    padding:
        8px 11px;

    border:none;

    outline:none;

    border-radius:11px;

    background:transparent;

    color:#344256;

    text-align:left;

    font-family:inherit;

    font-size:12px;

    font-weight:500;

    cursor:pointer;

    transition:
        background .3s ease,
        color .3s ease,
        transform .3s ease,
        box-shadow .3s ease;

}


.kdtech-tab:last-child{

    margin-bottom:0;

}


/* tab icon */

.kdtech-tab-icon{

    width:32px;

    height:32px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:9px;

    color:#0a3768;

    background:
        rgba(10,55,104,.06);

    font-size:13px;

    transition:
        .3s ease;

}


.kdtech-arrow{

    color:#a5adb7;

    font-size:9px;

    transition:
        transform .3s ease,
        color .3s ease;

}


/* hover */

.kdtech-tab:hover{

    background:
        rgba(242,103,34,.055);

    transform:
        translateX(3px);

}


/* active */

.kdtech-tab.active{

    color:#fff;

    background:

        linear-gradient(
            100deg,
            #f26722 0%,
            #ff8d4b 100%
        );

    box-shadow:

        0 9px 22px
        rgba(242,103,34,.20);

}


.kdtech-tab.active
.kdtech-tab-icon{

    background:
        rgba(255,255,255,.17);

    color:#fff;

}


.kdtech-tab.active
.kdtech-arrow{

    color:#fff;

    transform:
        translateX(2px);

}


/* =========================================================
 RIGHT PANEL
========================================================= */

.kdtech-panel{

    position:relative;

    min-height:540px;

    padding:
        25px;

    overflow:hidden;

    border-radius:20px;

    border:
        1px solid
        rgba(10,44,85,.07);

    background:
        rgba(255,255,255,.96);

    box-shadow:

        0 18px 45px
        rgba(10,44,85,.085);

}


/* subtle corner shape */

.kdtech-panel:before{

    content:"";

    position:absolute;

    width:190px;

    height:190px;

    right:-95px;

    top:-95px;

    border-radius:50%;

    background:

        radial-gradient(
            circle,
            rgba(242,103,34,.09),
            transparent 68%
        );

    pointer-events:none;

}


/* =========================================================
 PANEL HEADER
========================================================= */

.kdtech-panel-header{

    position:relative;

    z-index:2;

    display:flex;

    align-items:center;

    gap:16px;

}


/* big icon */

.kdtech-panel-icon{

    flex:
        0 0
        54px;

    width:54px;

    height:54px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:14px;

    color:#fff;

    font-size:21px;

    background:

        linear-gradient(
            135deg,
            #f26722,
            #ff8a46
        );

    box-shadow:

        0 9px 22px
        rgba(242,103,34,.22);

}


/* panel text */

.kdtech-panel-heading{

    flex:1;

}


.kdtech-panel-small{

    display:block;

    margin-bottom:4px;

    color:#9ba4b0;

    font-size:8px;

    line-height:1;

    font-weight:700;

    letter-spacing:1.4px;

}


.kdtech-panel-heading h3{

    margin:
        0 0
        5px;

    color:#0a2c55;

    font-size:23px;

    line-height:1.25;

    font-weight:700;

}


.kdtech-panel-heading p{

    margin:0;

    color:#758092;

    font-size:12px;

    line-height:1.55;

}


/* =========================================================
 ORANGE DIVIDER
========================================================= */

.kdtech-orange-line{

    width:100%;

    height:1px;

    margin:
        18px 0
        20px;

    background:

        linear-gradient(
            90deg,
            #f26722,
            rgba(242,103,34,.18),
            transparent
        );

}


/* =========================================================
 TECHNOLOGY GRID
========================================================= */

.kdtech-technology-grid{

    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    gap:12px;

}


/* =========================================================
 TECHNOLOGY CARD
========================================================= */

.kdtech-item{

    position:relative;

    min-height:102px;

    display:flex;

    flex-direction:column;

    align-items:center;

    justify-content:center;

    gap:9px;

    padding:
        13px 8px;

    overflow:hidden;

    border-radius:12px;

    border:
        1px solid
        #e6e9ee;

    background:

        linear-gradient(
            145deg,
            #fbfcfe,
            #f5f7fa
        );

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease,
        background .3s ease;

}


/* orange hover line */

.kdtech-item:after{

    content:"";

    position:absolute;

    left:0;

    bottom:0;

    width:0;

    height:3px;

    background:#f26722;

    transition:
        width .3s ease;

}


.kdtech-item:hover{

    transform:
        translateY(-5px);

    background:#fff;

    border-color:
        rgba(242,103,34,.20);

    box-shadow:

        0 12px 25px
        rgba(10,44,85,.09);

}


.kdtech-item:hover:after{

    width:100%;

}


/* =========================================================
 TECHNOLOGY ICON
========================================================= */

.kdtech-item-icon{

    width:39px;

    height:39px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:10px;

    color:#fff;

    font-size:15px;

    background:

        linear-gradient(
            135deg,
            #0a2c55,
            #164d83
        );

    box-shadow:

        0 6px 15px
        rgba(10,44,85,.13);

    transition:
        background .3s ease,
        transform .3s ease;

}


.kdtech-item:hover
.kdtech-item-icon{

    transform:
        translateY(-2px);

    background:

        linear-gradient(
            135deg,
            #f26722,
            #ff8c49
        );

}


/* =========================================================
 TECHNOLOGY NAME
========================================================= */

.kdtech-item-name{

    color:#1d2d43;

    text-align:center;

    font-size:10px;

    line-height:1.35;

    font-weight:600;

}


/* =========================================================
 PANEL BOTTOM
========================================================= */

.kdtech-panel-bottom{

    display:flex;

    align-items:center;

    justify-content:space-between;

    gap:20px;

    margin-top:21px;

    padding-top:18px;

    border-top:
        1px solid #edf0f3;

}


/* bottom info */

.kdtech-bottom-info{

    display:flex;

    align-items:center;

    gap:7px;

    color:#7c8796;

    font-size:10px;

    line-height:1.5;

}


.kdtech-bottom-info i{

    color:#f26722;

    font-size:12px;

}


/* CTA */

.kdtech-cta{

    min-height:42px;

    display:inline-flex;

    align-items:center;

    justify-content:center;

    gap:10px;

    padding:
        0 17px;

    border-radius:30px;

    color:#fff !important;

    text-decoration:none !important;

    background:

        linear-gradient(
            100deg,
            #f26722,
            #ff8541
        );

    font-size:11px;

    font-weight:650;

    box-shadow:

        0 8px 20px
        rgba(242,103,34,.18);

    transition:
        transform .3s ease,
        box-shadow .3s ease;

}


.kdtech-cta span{

    width:24px;

    height:24px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:50%;

    background:
        rgba(255,255,255,.15);

    font-size:9px;

}


.kdtech-cta:hover{

    transform:
        translateY(-2px);

    box-shadow:

        0 12px 25px
        rgba(242,103,34,.25);

}


/* =========================================================
 CONTENT ANIMATION
========================================================= */

.kdtech-panel.kdtech-changing
.kdtech-technology-grid{

    opacity:0;

    transform:
        translateY(8px);

}


.kdtech-technology-grid{

    opacity:1;

    transform:
        translateY(0);

    transition:
        opacity .22s ease,
        transform .22s ease;

}


/* =========================================================
 TABLET
========================================================= */

@media(max-width:950px){

    .kdtech-layout{

        grid-template-columns:
            260px
            1fr;

    }


    .kdtech-technology-grid{

        grid-template-columns:
            repeat(3,1fr);

    }

}


/* =========================================================
 SMALL TABLET
========================================================= */

@media(max-width:760px){

    .kdtech-layout{

        grid-template-columns:1fr;

    }


    .kdtech-sidebar{

        display:grid;

        grid-template-columns:
            repeat(2,1fr);

        gap:7px;

    }


    .kdtech-sidebar-title{

        grid-column:
            1 / -1;

    }


    .kdtech-tab{

        margin-bottom:0;

    }

}


/* =========================================================
 MOBILE
========================================================= */

@media(max-width:600px){

    .kdtech-section{

        padding:
            38px 15px
            45px;

    }


    .kdtech-header{

        margin-bottom:27px;

    }


    .kdtech-header h2{

        font-size:28px;

    }


    .kdtech-header p{

        font-size:13px;

        line-height:1.7;

    }


    .kdtech-sidebar{

        grid-template-columns:1fr;

        padding:
            14px;

    }


    .kdtech-panel{

        min-height:auto;

        padding:
            19px 15px;

    }


    .kdtech-panel-header{

        align-items:flex-start;

        gap:11px;

    }


    .kdtech-panel-icon{

        flex-basis:46px;

        width:46px;

        height:46px;

        font-size:18px;

    }


    .kdtech-panel-heading h3{

        font-size:19px;

    }


    .kdtech-technology-grid{

        grid-template-columns:
            repeat(2,1fr);

        gap:9px;

    }


    .kdtech-item{

        min-height:95px;

    }


    .kdtech-panel-bottom{

        flex-direction:column;

        align-items:flex-start;

    }


    .kdtech-cta{

        width:100%;

    }

}

</style>


<script>

(function(){

    /* =====================================================
       TECHNOLOGY DATA
    ===================================================== */

    const kdTechData = {

        transformation: {

            title: "Digital Transformation",

            description:
                "Modern platforms and tools designed to streamline processes, improve efficiency and support digital growth.",

            icon:
                "fa-solid fa-chart-line",

            technologies: [

                ["Salesforce", "fa-solid fa-cloud"],

                ["SAP S/4HANA", "fa-solid fa-building"],

                ["Microsoft Dynamics", "fa-brands fa-microsoft"],

                ["ServiceNow", "fa-solid fa-gears"],

                ["Mendix", "fa-solid fa-cubes"],

                ["OutSystems", "fa-solid fa-diagram-project"],

                ["Zoho", "fa-solid fa-briefcase"],

                ["Power BI", "fa-solid fa-chart-column"],

                ["AWS", "fa-brands fa-aws"],

                ["Microsoft Azure", "fa-brands fa-microsoft"],

                ["UiPath", "fa-solid fa-robot"],

                ["Google Cloud", "fa-brands fa-google"]

            ]

        },


        ai: {

            title: "AI & Automation",

            description:
                "Intelligent technologies that help automate workflows, analyse information and create smarter digital experiences.",

            icon:
                "fa-solid fa-brain",

            technologies: [

                ["OpenAI", "fa-solid fa-brain"],

                ["Machine Learning", "fa-solid fa-microchip"],

                ["Automation", "fa-solid fa-robot"],

                ["Computer Vision", "fa-solid fa-eye"],

                ["Chatbots", "fa-solid fa-comments"],

                ["NLP", "fa-solid fa-language"],

                ["Predictive AI", "fa-solid fa-chart-line"],

                ["AI Analytics", "fa-solid fa-chart-pie"],

                ["Python", "fa-brands fa-python"],

                ["TensorFlow", "fa-solid fa-network-wired"],

                ["API Integration", "fa-solid fa-plug"],

                ["Cloud AI", "fa-solid fa-cloud"]

            ]

        },


        software: {

            title: "Custom Software Development",

            description:
                "Flexible technologies selected to build secure, scalable and business-specific software solutions.",

            icon:
                "fa-solid fa-code",

            technologies: [

                ["PHP", "fa-brands fa-php"],

                ["Laravel", "fa-brands fa-laravel"],

                ["Node.js", "fa-brands fa-node-js"],

                ["Python", "fa-brands fa-python"],

                ["React", "fa-brands fa-react"],

                ["JavaScript", "fa-brands fa-js"],

                ["Java", "fa-brands fa-java"],

                ["Database", "fa-solid fa-database"],

                ["REST APIs", "fa-solid fa-plug"],

                ["Git", "fa-brands fa-git-alt"],

                ["Linux", "fa-brands fa-linux"],

                ["Cloud Hosting", "fa-solid fa-server"]

            ]

        },


        ecommerce: {

            title: "eCommerce Development",

            description:
                "Technology solutions for building fast, secure and conversion-focused online shopping experiences.",

            icon:
                "fa-solid fa-cart-shopping",

            technologies: [

                ["Shopify", "fa-brands fa-shopify"],

                ["WooCommerce", "fa-brands fa-wordpress"],

                ["WordPress", "fa-brands fa-wordpress"],

                ["Magento", "fa-solid fa-store"],

                ["Payment APIs", "fa-solid fa-credit-card"],

                ["Stripe", "fa-brands fa-stripe"],

                ["Inventory", "fa-solid fa-boxes-stacked"],

                ["CRM", "fa-solid fa-users"],

                ["Analytics", "fa-solid fa-chart-line"],

                ["Automation", "fa-solid fa-gears"],

                ["Cloud", "fa-solid fa-cloud"],

                ["Security", "fa-solid fa-shield-halved"]

            ]

        },


        mobile: {

            title: "Mobile App Development",

            description:
                "Modern mobile frameworks and technologies for building intuitive, fast and scalable Android and iOS applications.",

            icon:
                "fa-solid fa-mobile-screen-button",

            technologies: [

                ["Android", "fa-brands fa-android"],

                ["iOS", "fa-brands fa-apple"],

                ["Flutter", "fa-solid fa-mobile-screen"],

                ["React Native", "fa-brands fa-react"],

                ["Swift", "fa-brands fa-swift"],

                ["Java", "fa-brands fa-java"],

                ["Kotlin", "fa-solid fa-k"],

                ["Firebase", "fa-solid fa-fire"],

                ["REST API", "fa-solid fa-plug"],

                ["Push Notifications", "fa-solid fa-bell"],

                ["Payment Gateway", "fa-solid fa-credit-card"],

                ["Cloud Storage", "fa-solid fa-cloud-arrow-up"]

            ]

        },


        cloud: {

            title: "DevOps & Cloud",

            description:
                "Cloud and DevOps technologies designed for secure deployment, scalable infrastructure and reliable application performance.",

            icon:
                "fa-solid fa-cloud",

            technologies: [

                ["AWS", "fa-brands fa-aws"],

                ["Azure", "fa-brands fa-microsoft"],

                ["Google Cloud", "fa-brands fa-google"],

                ["Docker", "fa-brands fa-docker"],

                ["Linux", "fa-brands fa-linux"],

                ["GitHub", "fa-brands fa-github"],

                ["CI / CD", "fa-solid fa-arrows-rotate"],

                ["Cloud Hosting", "fa-solid fa-cloud"],

                ["Monitoring", "fa-solid fa-chart-line"],

                ["Security", "fa-solid fa-shield-halved"],

                ["Server", "fa-solid fa-server"],

                ["Backup", "fa-solid fa-database"]

            ]

        },


        design: {

            title: "UI / UX Design",

            description:
                "Creative tools and design systems used to deliver intuitive, attractive and user-focused digital experiences.",

            icon:
                "fa-solid fa-pen-ruler",

            technologies: [

                ["Figma", "fa-brands fa-figma"],

                ["Adobe XD", "fa-solid fa-pen-nib"],

                ["Photoshop", "fa-solid fa-image"],

                ["Illustrator", "fa-solid fa-bezier-curve"],

                ["Wireframes", "fa-solid fa-table-columns"],

                ["Prototype", "fa-solid fa-object-group"],

                ["Mobile UI", "fa-solid fa-mobile-screen"],

                ["Web UI", "fa-solid fa-display"],

                ["Design System", "fa-solid fa-layer-group"],

                ["User Flow", "fa-solid fa-route"],

                ["UX Research", "fa-solid fa-magnifying-glass"],

                ["Responsive Design", "fa-solid fa-laptop-mobile"]

            ]

        }

    };


    /* =====================================================
       ELEMENTS
    ===================================================== */

    const tabs =
        document.querySelectorAll(
            ".kdtech-tab"
        );


    const panel =
        document.querySelector(
            ".kdtech-panel"
        );


    const title =
        document.getElementById(
            "kdtechTitle"
        );


    const description =
        document.getElementById(
            "kdtechDescription"
        );


    const panelIcon =
        document.getElementById(
            "kdtechPanelIcon"
        );


    const grid =
        document.getElementById(
            "kdtechGrid"
        );


    /* =====================================================
       RENDER
    ===================================================== */

    function renderTechnology(key){

        const data =
            kdTechData[key];


        if(!data){
            return;
        }


        panel.classList.add(
            "kdtech-changing"
        );


        setTimeout(function(){

            title.textContent =
                data.title;


            description.textContent =
                data.description;


            panelIcon.innerHTML =
                '<i class="' +
                data.icon +
                '"></i>';


            grid.innerHTML = "";


            data.technologies.forEach(
                function(item){

                    const card =
                        document.createElement(
                            "div"
                        );


                    card.className =
                        "kdtech-item";


                    card.innerHTML =

                        '<div class="kdtech-item-icon">' +

                            '<i class="' +
                            item[1] +
                            '"></i>' +

                        '</div>' +

                        '<div class="kdtech-item-name">' +

                            item[0] +

                        '</div>';


                    grid.appendChild(
                        card
                    );

                }
            );


            panel.classList.remove(
                "kdtech-changing"
            );

        },180);

    }


    /* =====================================================
       TAB CLICK
    ===================================================== */

    tabs.forEach(
        function(tab){

            tab.addEventListener(
                "click",
                function(){

                    tabs.forEach(
                        function(btn){

                            btn.classList.remove(
                                "active"
                            );

                        }
                    );


                    tab.classList.add(
                        "active"
                    );


                    renderTechnology(
                        tab.dataset.tab
                    );

                }
            );

        }
    );


    /* =====================================================
       DEFAULT
    ===================================================== */

    renderTechnology(
        "transformation"
    );

})();

</script>   