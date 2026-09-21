<!-- =========================================================
 KING DIGITAL — PORTFOLIO HERO
 COMPLETE FINAL COPY-PASTE CODE
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

#kd-portfolio-hero,
#kd-portfolio-hero *{
    box-sizing:border-box;
}

#kd-portfolio-hero{

    --navy:#060F3E;
    --navy2:#0B2148;
    --navy3:#12365E;

    --orange:#F47B20;
    --orange2:#FF9145;
    --orange3:#FFB36F;
    --coral:#FF6548;
    --gold:#FFB84D;

    --text:#5F6B7C;
    --muted:#8C96A5;
    --line:#E4E8ED;

    position:relative;

    width:100%;
    min-height:630px;

    padding:58px 50px 60px;

    overflow:hidden;

    font-family:'Manrope',sans-serif;

    background:
        radial-gradient(
            circle at 90% 12%,
            rgba(255,145,69,.15),
            transparent 28%
        ),
        radial-gradient(
            circle at 5% 90%,
            rgba(11,33,72,.06),
            transparent 30%
        ),
        linear-gradient(
            125deg,
            #FFFFFF 0%,
            #FCFDFE 39%,
            #F5F8FB 73%,
            #FFF9F5 100%
        );
}


/* =========================================================
 BACKGROUND
========================================================= */

#kd-portfolio-hero .kdph-grid{

    position:absolute;
    inset:0;

    pointer-events:none;

    opacity:.28;

    background-image:
        linear-gradient(
            rgba(6,15,62,.025) 1px,
            transparent 1px
        ),
        linear-gradient(
            90deg,
            rgba(6,15,62,.025) 1px,
            transparent 1px
        );

    background-size:54px 54px;

    -webkit-mask-image:
        linear-gradient(
            90deg,
            #000,
            rgba(0,0,0,.45) 55%,
            transparent 96%
        );

    mask-image:
        linear-gradient(
            90deg,
            #000,
            rgba(0,0,0,.45) 55%,
            transparent 96%
        );
}


#kd-portfolio-hero .kdph-orbit{

    position:absolute;

    width:420px;
    height:420px;

    right:-185px;
    top:-190px;

    border-radius:50%;

    border:1px solid rgba(244,123,32,.10);

    box-shadow:
        0 0 0 52px rgba(244,123,32,.023),
        0 0 0 104px rgba(244,123,32,.010);

    pointer-events:none;
}


#kd-portfolio-hero .kdph-dots{

    position:absolute;

    left:25px;
    bottom:30px;

    width:100px;
    height:100px;

    opacity:.15;

    pointer-events:none;

    background-image:
        radial-gradient(
            var(--orange) 1px,
            transparent 1px
        );

    background-size:15px 15px;
}


/* =========================================================
 MAIN CONTAINER
========================================================= */

#kd-portfolio-hero .kdph-container{

    position:relative;
    z-index:5;

    width:100%;
    max-width:1360px;
    min-height:510px;

    margin:0 auto;

    display:grid;

    grid-template-columns:
        minmax(500px,1.04fr)
        minmax(460px,.96fr);

    align-items:center;

    gap:64px;
}


/* =========================================================
 LEFT CONTENT
========================================================= */

#kd-portfolio-hero .kdph-content{

    width:100%;
    max-width:690px;

    overflow:visible!important;
}


/* =========================================================
 EYEBROW
========================================================= */

#kd-portfolio-hero .kdph-eyebrow{

    display:inline-flex;

    align-items:center;

    gap:9px;

    margin-bottom:17px;

    padding:9px 13px;

    border-radius:100px;

    color:var(--orange);

    font-size:10px;

    line-height:1;

    font-weight:800;

    letter-spacing:.12em;

    text-transform:uppercase;

    background:
        rgba(244,123,32,.07);

    border:
        1px solid rgba(244,123,32,.15);
}


#kd-portfolio-hero .kdph-live{

    position:relative;

    width:7px;
    height:7px;

    flex:0 0 7px;

    border-radius:50%;

    background:var(--orange);
}


#kd-portfolio-hero .kdph-live::after{

    content:"";

    position:absolute;

    inset:-4px;

    border-radius:50%;

    border:
        1px solid rgba(244,123,32,.30);

    animation:
        kdphPulse 1.8s ease-out infinite;
}


@keyframes kdphPulse{

    0%{
        opacity:.9;
        transform:scale(.4);
    }

    100%{
        opacity:0;
        transform:scale(1.8);
    }

}


/* =========================================================
 HEADING — EXACTLY 2 ROWS
========================================================= */

#kd-portfolio-hero .kdph-title{

    width:100%;
    max-width:680px;

    margin:0;

    padding:3px 0 9px;

    overflow:visible!important;

    color:var(--navy);

    font-size:50px;

    line-height:1.10;

    font-weight:800;

    letter-spacing:-2.2px;
}


#kd-portfolio-hero .kdph-title-main{

    display:block;

    padding-bottom:4px;

    line-height:1.10;

    white-space:nowrap;
}


#kd-portfolio-hero .kdph-title-gradient{

    display:block;

    width:max-content;
    max-width:100%;

    padding:
        2px 5px 7px 0;

    overflow:visible!important;

    line-height:1.12;

    white-space:nowrap;

    color:transparent;

    background:
        linear-gradient(
            100deg,
            #D9500C 0%,
            #F36D16 17%,
            #FF8A32 35%,
            #FF6249 53%,
            #FF8E3D 70%,
            #FFB13D 86%,
            #F47B20 100%
        );

    background-size:220% 100%;

    -webkit-background-clip:text;
    background-clip:text;

    -webkit-text-fill-color:transparent;

    animation:
        kdphGradient 6s ease-in-out infinite alternate;
}


@keyframes kdphGradient{

    from{
        background-position:0% 50%;
    }

    to{
        background-position:100% 50%;
    }

}


/* =========================================================
 DESCRIPTION
========================================================= */

#kd-portfolio-hero .kdph-desc{

    max-width:635px;

    margin:14px 0 0;

    color:var(--text);

    font-size:16px;

    line-height:1.72;

    font-weight:500;
}


/* =========================================================
 SERVICE CHIPS
========================================================= */

#kd-portfolio-hero .kdph-services{

    display:flex;

    flex-wrap:wrap;

    gap:8px;

    margin-top:22px;
}


#kd-portfolio-hero .kdph-service{

    min-height:39px;

    padding:0 13px;

    display:flex;

    align-items:center;

    gap:8px;

    border-radius:9px;

    color:#596476;

    font-size:11px;

    font-weight:700;

    background:
        rgba(255,255,255,.90);

    border:
        1px solid #E4E8ED;

    box-shadow:
        0 5px 15px rgba(6,15,62,.025);

    transition:
        transform .28s ease,
        color .28s ease,
        border-color .28s ease,
        box-shadow .28s ease;
}


#kd-portfolio-hero .kdph-service i{

    color:var(--orange);

    font-size:10px;
}


#kd-portfolio-hero .kdph-service:hover{

    transform:translateY(-2px);

    color:var(--navy);

    border-color:
        rgba(244,123,32,.30);

    box-shadow:
        0 10px 23px rgba(6,15,62,.06);
}


/* =========================================================
 BUTTONS
========================================================= */

#kd-portfolio-hero .kdph-actions{

    display:flex;

    align-items:center;

    flex-wrap:wrap;

    gap:10px;

    margin-top:26px;
}


#kd-portfolio-hero .kdph-btn{

    min-height:50px;

    padding:0 22px;

    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:9px;

    border-radius:10px;

    text-decoration:none!important;

    font-size:12px;

    font-weight:800;

    transition:
        transform .3s ease,
        box-shadow .3s ease,
        border-color .3s ease;
}


#kd-portfolio-hero .kdph-btn-primary{

    color:#FFFFFF!important;

    background:
        linear-gradient(
            135deg,
            #E85D10,
            var(--orange) 52%,
            var(--orange2)
        );

    box-shadow:
        0 13px 28px rgba(244,123,32,.23);
}


#kd-portfolio-hero .kdph-btn-primary:hover{

    transform:translateY(-3px);

    box-shadow:
        0 18px 36px rgba(244,123,32,.32);
}


#kd-portfolio-hero .kdph-btn-primary i{

    transition:transform .3s ease;
}


#kd-portfolio-hero .kdph-btn-primary:hover i{

    transform:translateX(3px);
}


#kd-portfolio-hero .kdph-btn-secondary{

    color:var(--navy)!important;

    background:#FFFFFF;

    border:
        1px solid #DDE2E8;

    box-shadow:
        0 6px 18px rgba(6,15,62,.04);
}


#kd-portfolio-hero .kdph-btn-secondary:hover{

    transform:translateY(-3px);

    border-color:
        rgba(244,123,32,.30);

    box-shadow:
        0 11px 26px rgba(6,15,62,.08);
}


/* =========================================================
 RIGHT SHOWCASE AREA
========================================================= */

#kd-portfolio-hero .kdph-showcase-area{

    position:relative;

    width:100%;
    min-height:475px;

    display:flex;

    align-items:center;
    justify-content:center;
}


#kd-portfolio-hero .kdph-showcase-glow{

    position:absolute;

    left:50%;
    top:50%;

    width:430px;
    height:430px;

    transform:
        translate(-50%,-50%);

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(255,145,69,.18),
            rgba(255,145,69,.055) 43%,
            transparent 70%
        );

    animation:
        kdphGlow 5.5s ease-in-out infinite;
}


@keyframes kdphGlow{

    50%{

        transform:
            translate(-50%,-50%)
            scale(1.06);
    }

}


/* =========================================================
 PORTFOLIO WINDOW
========================================================= */

#kd-portfolio-hero .kdph-portfolio-window{

    position:relative;
    z-index:5;

    width:485px;
    max-width:95%;

    overflow:hidden;

    border-radius:21px;

    background:#FFFFFF;

    border:
        1px solid rgba(6,15,62,.08);

    box-shadow:
        0 28px 65px rgba(6,15,62,.16);
}


/* =========================================================
 WINDOW TOP
========================================================= */

#kd-portfolio-hero .kdph-window-top{

    height:53px;

    padding:0 16px;

    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:15px;

    border-bottom:
        1px solid #EAEDF1;

    background:
        rgba(255,255,255,.98);
}


#kd-portfolio-hero .kdph-top-left{

    display:flex;

    align-items:center;

    gap:11px;
}


#kd-portfolio-hero .kdph-browser-dots{

    display:flex;

    gap:5px;
}


#kd-portfolio-hero .kdph-browser-dots span{

    width:7px;
    height:7px;

    border-radius:50%;

    background:#D7DBE1;
}


#kd-portfolio-hero .kdph-browser-dots span:first-child{

    background:var(--orange);
}


#kd-portfolio-hero .kdph-window-name{

    color:#6D7787;

    font-size:10px;

    font-weight:800;
}


#kd-portfolio-hero .kdph-selected{

    display:flex;

    align-items:center;

    gap:6px;

    padding:7px 9px;

    border-radius:7px;

    color:#168C59;

    font-size:8px;

    font-weight:800;

    background:#ECFAF3;
}


#kd-portfolio-hero .kdph-selected span{

    width:6px;
    height:6px;

    border-radius:50%;

    background:#20B26B;

    animation:
        kdphStatus 1.4s ease infinite;
}


@keyframes kdphStatus{

    50%{
        opacity:.35;
    }

}


/* =========================================================
 CATEGORY NAVIGATION
========================================================= */

#kd-portfolio-hero .kdph-categories{

    height:54px;

    padding:0 13px;

    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    align-items:center;

    gap:5px;

    background:#FCFCFD;

    border-bottom:
        1px solid #EAEDF1;
}


#kd-portfolio-hero .kdph-category{

    height:32px;

    display:flex;

    align-items:center;
    justify-content:center;

    gap:5px;

    border-radius:7px;

    color:#8A94A3;

    font-size:8px;

    font-weight:800;

    cursor:pointer;

    transition:
        color .4s ease,
        background .4s ease,
        box-shadow .4s ease;
}


#kd-portfolio-hero .kdph-category i{

    font-size:8px;
}


#kd-portfolio-hero .kdph-category.active{

    color:#FFFFFF;

    background:
        linear-gradient(
            135deg,
            var(--navy2),
            var(--navy3)
        );

    box-shadow:
        0 6px 14px rgba(6,15,62,.13);
}


#kd-portfolio-hero .kdph-category.active i{

    color:var(--orange2);
}


/* =========================================================
 PROJECT VIEW
========================================================= */

#kd-portfolio-hero .kdph-view{

    position:relative;

    height:315px;

    overflow:hidden;

    background:
        radial-gradient(
            circle at 92% 3%,
            rgba(244,123,32,.07),
            transparent 28%
        ),
        #F5F7F9;
}


#kd-portfolio-hero .kdph-slide{

    position:absolute;

    inset:0;

    padding:16px;

    opacity:0;

    visibility:hidden;

    transform:
        translateX(18px)
        scale(.985);

    transition:
        opacity .6s ease,
        transform .6s ease,
        visibility .6s ease;
}


#kd-portfolio-hero .kdph-slide.active{

    opacity:1;

    visibility:visible;

    transform:
        translateX(0)
        scale(1);
}


/* =========================================================
 PROJECT HEADER
========================================================= */

#kd-portfolio-hero .kdph-slide-head{

    height:40px;

    display:flex;

    align-items:flex-start;
    justify-content:space-between;

    gap:15px;
}


#kd-portfolio-hero .kdph-slide-head small{

    display:block;

    margin-bottom:3px;

    color:var(--orange);

    font-size:7px;

    font-weight:800;

    letter-spacing:.09em;

    text-transform:uppercase;
}


#kd-portfolio-hero .kdph-slide-head strong{

    display:block;

    color:var(--navy);

    font-size:14px;

    line-height:1.25;

    font-weight:800;
}


#kd-portfolio-hero .kdph-project-count{

    padding:6px 8px;

    border-radius:6px;

    color:#6C7686;

    font-size:7px;

    font-weight:800;

    background:#FFFFFF;

    border:1px solid #E3E7EC;
}


/* =========================================================
 WEBSITE PROJECT
========================================================= */

#kd-portfolio-hero .kdph-web-project{

    position:relative;

    height:230px;

    overflow:hidden;

    border-radius:12px;

    background:#FFFFFF;

    border:1px solid #E0E5EA;

    box-shadow:
        0 9px 24px rgba(6,15,62,.07);
}


#kd-portfolio-hero .kdph-web-bar{

    height:30px;

    padding:0 10px;

    display:flex;

    align-items:center;
    justify-content:space-between;

    background:#FAFBFC;

    border-bottom:
        1px solid #EEF0F3;
}


#kd-portfolio-hero .kdph-web-logo{

    display:flex;

    align-items:center;

    gap:6px;

    color:var(--navy);

    font-size:7px;

    font-weight:800;
}


#kd-portfolio-hero .kdph-web-logo span{

    width:18px;
    height:18px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:5px;

    color:#FFFFFF;

    font-size:6px;

    background:
        linear-gradient(
            135deg,
            var(--orange),
            var(--orange2)
        );
}


#kd-portfolio-hero .kdph-web-nav{

    display:flex;

    gap:5px;
}


#kd-portfolio-hero .kdph-web-nav i{

    display:block;

    width:19px;
    height:4px;

    border-radius:20px;

    background:#D7DCE3;
}


#kd-portfolio-hero .kdph-web-hero{

    position:relative;

    height:200px;

    overflow:hidden;

    padding:25px 21px;

    background:
        radial-gradient(
            circle at 85% 20%,
            rgba(255,145,69,.44),
            transparent 28%
        ),
        linear-gradient(
            135deg,
            #071A3A,
            #103A64
        );
}


#kd-portfolio-hero .kdph-web-copy{

    position:relative;
    z-index:3;

    width:60%;
}


#kd-portfolio-hero .kdph-web-copy span{

    display:block;

    margin-bottom:8px;

    color:#FF9A56;

    font-size:7px;

    font-weight:800;

    letter-spacing:.10em;
}


#kd-portfolio-hero .kdph-web-copy h4{

    margin:0;

    color:#FFFFFF;

    font-size:21px;

    line-height:1.16;

    font-weight:800;

    letter-spacing:-.6px;
}


#kd-portfolio-hero .kdph-web-copy h4 em{

    color:#FF9A56;

    font-style:normal;
}


#kd-portfolio-hero .kdph-web-copy p{

    margin:8px 0 0;

    color:
        rgba(255,255,255,.66);

    font-size:8px;

    line-height:1.55;
}


#kd-portfolio-hero .kdph-web-button{

    width:68px;
    height:22px;

    margin-top:13px;

    border-radius:6px;

    background:
        linear-gradient(
            135deg,
            var(--orange),
            var(--orange2)
        );

    box-shadow:
        0 8px 18px rgba(244,123,32,.24);
}


#kd-portfolio-hero .kdph-web-art{

    position:absolute;

    right:-10px;
    top:18px;

    width:160px;
    height:160px;

    border-radius:
        48% 52% 62% 38%
        / 43% 45% 55% 57%;

    background:
        linear-gradient(
            145deg,
            #FFBD83,
            #FF9145 45%,
            #F47B20
        );

    animation:
        kdphMorph 7s ease-in-out infinite;
}


#kd-portfolio-hero .kdph-web-art::before{

    content:"";

    position:absolute;

    width:85px;
    height:85px;

    left:34px;
    top:35px;

    border-radius:50%;

    background:
        rgba(255,255,255,.13);

    border:
        1px solid rgba(255,255,255,.22);
}


@keyframes kdphMorph{

    50%{

        transform:
            translateY(-6px)
            rotate(4deg);

        border-radius:
            58% 42% 40% 60%
            / 48% 58% 42% 52%;
    }

}


/* =========================================================
 SOCIAL PROJECT
========================================================= */

#kd-portfolio-hero .kdph-social-project{

    height:230px;

    display:grid;

    grid-template-columns:
        .72fr 1fr 1fr;

    gap:9px;
}


#kd-portfolio-hero .kdph-social-card{

    position:relative;

    overflow:hidden;

    border-radius:11px;

    box-shadow:
        0 9px 20px rgba(6,15,62,.08);

    animation:
        kdphCardFloat 5s ease-in-out infinite;
}


#kd-portfolio-hero .kdph-social-card:nth-child(2){

    animation-delay:-1.5s;
}


#kd-portfolio-hero .kdph-social-card:nth-child(3){

    animation-delay:-3s;
}


@keyframes kdphCardFloat{

    50%{
        transform:translateY(-5px);
    }

}


#kd-portfolio-hero .kdph-social-one{

    background:
        linear-gradient(
            160deg,
            #071A3B,
            #123C68
        );
}


#kd-portfolio-hero .kdph-social-two{

    background:
        linear-gradient(
            160deg,
            #FFB477,
            #F47B20
        );
}


#kd-portfolio-hero .kdph-social-three{

    background:
        linear-gradient(
            155deg,
            #FFFFFF,
            #FFF0E5
        );

    border:1px solid #E5E8EC;
}


#kd-portfolio-hero .kdph-social-mini{

    position:absolute;

    left:12px;
    right:12px;
    bottom:13px;
}


#kd-portfolio-hero .kdph-social-mini small{

    display:block;

    margin-bottom:5px;

    color:#FF9A56;

    font-size:6px;

    font-weight:800;

    letter-spacing:.08em;
}


#kd-portfolio-hero .kdph-social-one strong,
#kd-portfolio-hero .kdph-social-two strong{

    display:block;

    color:#FFFFFF;

    font-size:12px;

    line-height:1.25;
}


#kd-portfolio-hero .kdph-social-two small{

    color:
        rgba(255,255,255,.80);
}


#kd-portfolio-hero .kdph-social-three small{

    color:var(--orange);
}


#kd-portfolio-hero .kdph-social-three strong{

    display:block;

    color:var(--navy);

    font-size:12px;

    line-height:1.25;
}


#kd-portfolio-hero .kdph-social-shape{

    position:absolute;

    width:82px;
    height:82px;

    left:50%;
    top:35px;

    transform:
        translateX(-50%);

    border-radius:50%;

    background:
        rgba(255,255,255,.13);

    border:
        1px solid rgba(255,255,255,.18);

    animation:
        kdphSocialPulse 3s ease-in-out infinite;
}


#kd-portfolio-hero .kdph-social-three .kdph-social-shape{

    background:
        linear-gradient(
            135deg,
            #FFE2CF,
            #FFB67E
        );

    border:0;
}


@keyframes kdphSocialPulse{

    50%{

        transform:
            translateX(-50%)
            scale(1.08);
    }

}


/* =========================================================
 VIDEO PROJECT
========================================================= */

#kd-portfolio-hero .kdph-video-project{

    height:230px;

    display:grid;

    grid-template-columns:
        .72fr 1.28fr;

    gap:12px;
}


#kd-portfolio-hero .kdph-reel-phone{

    position:relative;

    width:112px;
    height:225px;

    margin:auto;

    padding:5px;

    border-radius:19px;

    background:#07152E;

    box-shadow:
        0 14px 30px rgba(6,15,62,.18);

    transform:rotate(-2deg);

    animation:
        kdphPhone 5s ease-in-out infinite;
}


@keyframes kdphPhone{

    50%{

        transform:
            translateY(-5px)
            rotate(1deg);
    }

}


#kd-portfolio-hero .kdph-reel-screen{

    position:relative;

    width:100%;
    height:100%;

    overflow:hidden;

    border-radius:15px;

    background:
        radial-gradient(
            circle at 50% 34%,
            rgba(255,255,255,.18),
            transparent 30%
        ),
        linear-gradient(
            165deg,
            #FFAF6D,
            #F47B20 58%,
            #E95D12
        );
}


#kd-portfolio-hero .kdph-reel-screen::before{

    content:"";

    position:absolute;

    width:65px;
    height:65px;

    left:50%;
    top:50px;

    transform:translateX(-50%);

    border-radius:50%;

    border:
        1px solid rgba(255,255,255,.30);

    background:
        rgba(255,255,255,.13);

    animation:
        kdphReelCircle 2.8s ease-in-out infinite;
}


@keyframes kdphReelCircle{

    50%{

        transform:
            translateX(-50%)
            scale(1.09);
    }

}


#kd-portfolio-hero .kdph-reel-copy{

    position:absolute;

    left:13px;
    right:13px;
    bottom:21px;
}


#kd-portfolio-hero .kdph-reel-copy span{

    display:block;

    color:
        rgba(255,255,255,.75);

    font-size:6px;

    font-weight:800;

    letter-spacing:.08em;
}


#kd-portfolio-hero .kdph-reel-copy strong{

    display:block;

    margin-top:5px;

    color:#FFFFFF;

    font-size:11px;

    line-height:1.25;
}


#kd-portfolio-hero .kdph-video-editor{

    overflow:hidden;

    border-radius:11px;

    background:#071A3A;

    box-shadow:
        0 10px 24px rgba(6,15,62,.13);
}


#kd-portfolio-hero .kdph-video-preview{

    position:relative;

    height:153px;

    overflow:hidden;

    background:
        radial-gradient(
            circle at 83% 25%,
            rgba(255,145,69,.44),
            transparent 28%
        ),
        linear-gradient(
            135deg,
            #081B3B,
            #123B66
        );
}


#kd-portfolio-hero .kdph-video-copy{

    position:absolute;

    left:16px;
    top:18px;

    max-width:150px;
}


#kd-portfolio-hero .kdph-video-copy small{

    color:#FF9A56;

    font-size:6px;

    font-weight:800;

    letter-spacing:.08em;
}


#kd-portfolio-hero .kdph-video-copy strong{

    display:block;

    margin-top:6px;

    color:#FFFFFF;

    font-size:15px;

    line-height:1.25;
}


#kd-portfolio-hero .kdph-video-copy p{

    margin:5px 0 0;

    color:
        rgba(255,255,255,.60);

    font-size:7px;

    line-height:1.45;
}


#kd-portfolio-hero .kdph-video-play{

    position:absolute;

    right:20px;
    top:50%;

    width:42px;
    height:42px;

    transform:
        translateY(-50%);

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:50%;

    color:#FFFFFF;

    font-size:10px;

    background:
        linear-gradient(
            135deg,
            var(--orange),
            var(--orange2)
        );

    box-shadow:
        0 10px 22px rgba(244,123,32,.28);

    animation:
        kdphPlay 2s ease-in-out infinite;
}


@keyframes kdphPlay{

    50%{

        transform:
            translateY(-50%)
            scale(1.08);
    }

}


#kd-portfolio-hero .kdph-timeline{

    position:relative;

    height:77px;

    padding:11px;

    display:grid;

    grid-template-columns:
        1.2fr .75fr 1fr;

    gap:5px;

    background:#F7F8FA;
}


#kd-portfolio-hero .kdph-track{

    position:relative;

    height:32px;

    overflow:hidden;

    border-radius:5px;

    background:#FFE0CB;
}


#kd-portfolio-hero .kdph-track:nth-child(2){

    background:#DCE6F0;
}


#kd-portfolio-hero .kdph-track:nth-child(3){

    background:#FFECDD;
}


#kd-portfolio-hero .kdph-track::after{

    content:"";

    position:absolute;

    left:-35%;
    top:0;

    width:30%;
    height:100%;

    transform:skewX(-15deg);

    background:
        rgba(255,255,255,.48);

    animation:
        kdphScan 2.3s linear infinite;
}


@keyframes kdphScan{

    to{
        left:120%;
    }

}


#kd-portfolio-hero .kdph-playhead{

    position:absolute;

    z-index:5;

    left:12px;
    top:6px;

    width:2px;
    height:46px;

    background:var(--orange);

    animation:
        kdphPlayhead 4s linear infinite;
}


@keyframes kdphPlayhead{

    from{
        left:12px;
    }

    to{
        left:95%;
    }

}


/* =========================================================
 BRAND PROJECT
========================================================= */

#kd-portfolio-hero .kdph-brand-project{

    height:230px;

    display:grid;

    grid-template-columns:
        1.1fr .9fr;

    gap:10px;
}


#kd-portfolio-hero .kdph-brand-main{

    position:relative;

    overflow:hidden;

    border-radius:11px;

    background:
        linear-gradient(
            145deg,
            #071A3B,
            #103C68
        );

    box-shadow:
        0 10px 24px rgba(6,15,62,.12);
}


#kd-portfolio-hero .kdph-brand-main::before{

    content:"";

    position:absolute;

    width:150px;
    height:150px;

    right:-70px;
    top:-60px;

    border-radius:50%;

    background:
        rgba(244,123,32,.12);
}


#kd-portfolio-hero .kdph-brand-mark{

    position:absolute;

    left:50%;
    top:46%;

    width:90px;
    height:90px;

    transform:
        translate(-50%,-50%);

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:26px;

    color:#FFFFFF;

    font-size:28px;

    font-weight:800;

    background:
        linear-gradient(
            135deg,
            var(--orange),
            var(--orange2)
        );

    box-shadow:
        0 15px 35px rgba(244,123,32,.28);

    animation:
        kdphBrandMark 4s ease-in-out infinite;
}


@keyframes kdphBrandMark{

    50%{

        transform:
            translate(-50%,-55%)
            rotate(4deg);
    }

}


#kd-portfolio-hero .kdph-brand-name{

    position:absolute;

    left:0;
    right:0;
    bottom:18px;

    text-align:center;

    color:
        rgba(255,255,255,.75);

    font-size:8px;

    font-weight:800;

    letter-spacing:.12em;
}


#kd-portfolio-hero .kdph-brand-side{

    display:grid;

    grid-template-rows:
        1fr 1fr;

    gap:10px;
}


#kd-portfolio-hero .kdph-brand-card{

    position:relative;

    overflow:hidden;

    border-radius:11px;

    padding:15px;

    background:#FFFFFF;

    border:1px solid #E2E6EB;

    box-shadow:
        0 8px 20px rgba(6,15,62,.05);
}


#kd-portfolio-hero .kdph-brand-card:first-child{

    background:
        linear-gradient(
            145deg,
            #FFF5ED,
            #FFE4D0
        );
}


#kd-portfolio-hero .kdph-brand-card small{

    color:var(--orange);

    font-size:6px;

    font-weight:800;

    letter-spacing:.08em;
}


#kd-portfolio-hero .kdph-brand-card strong{

    display:block;

    margin-top:7px;

    color:var(--navy);

    font-size:12px;

    line-height:1.25;
}


#kd-portfolio-hero .kdph-colors{

    display:flex;

    gap:6px;

    margin-top:13px;
}


#kd-portfolio-hero .kdph-colors i{

    width:19px;
    height:19px;

    display:block;

    border-radius:50%;
}


#kd-portfolio-hero .kdph-colors i:nth-child(1){
    background:var(--navy);
}

#kd-portfolio-hero .kdph-colors i:nth-child(2){
    background:var(--orange);
}

#kd-portfolio-hero .kdph-colors i:nth-child(3){
    background:var(--orange2);
}

#kd-portfolio-hero .kdph-colors i:nth-child(4){
    background:#F2F4F7;
}


/* =========================================================
 BOTTOM STATUS
========================================================= */

#kd-portfolio-hero .kdph-bottom{

    min-height:65px;

    padding:11px 16px;

    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:15px;

    background:#FFFFFF;

    border-top:
        1px solid #EAEDF1;
}


#kd-portfolio-hero .kdph-bottom-copy small{

    display:block;

    color:#929BA9;

    font-size:7px;

    font-weight:800;

    letter-spacing:.08em;

    text-transform:uppercase;
}


#kd-portfolio-hero .kdph-bottom-copy strong{

    display:block;

    margin-top:5px;

    color:var(--navy);

    font-size:10px;

    font-weight:800;
}


#kd-portfolio-hero .kdph-progress{

    width:145px;
}


#kd-portfolio-hero .kdph-progress-info{

    display:flex;

    align-items:center;
    justify-content:space-between;

    margin-bottom:6px;

    color:#828C9B;

    font-size:7px;

    font-weight:700;
}


#kd-portfolio-hero .kdph-progress-track{

    height:5px;

    overflow:hidden;

    border-radius:20px;

    background:#ECEFF2;
}


#kd-portfolio-hero .kdph-progress-track span{

    display:block;

    width:25%;
    height:100%;

    border-radius:20px;

    background:
        linear-gradient(
            90deg,
            var(--orange),
            var(--coral),
            var(--orange2)
        );

    transition:
        width .65s ease;
}


/* =========================================================
 FLOATING PORTFOLIO CARD
========================================================= */

#kd-portfolio-hero .kdph-floating{

    position:absolute;

    z-index:10;

    right:-8px;
    bottom:55px;

    min-width:164px;

    padding:11px 13px;

    display:flex;

    align-items:center;

    gap:10px;

    border-radius:12px;

    background:
        rgba(255,255,255,.97);

    border:
        1px solid rgba(6,15,62,.07);

    box-shadow:
        0 16px 36px rgba(6,15,62,.12);

    backdrop-filter:blur(12px);

    animation:
        kdphFloating 5.5s ease-in-out infinite;
}


@keyframes kdphFloating{

    50%{
        transform:translateY(7px);
    }

}


#kd-portfolio-hero .kdph-floating-icon{

    width:38px;
    height:38px;

    flex:0 0 38px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:9px;

    color:#FFFFFF;

    font-size:11px;

    background:
        linear-gradient(
            135deg,
            var(--orange),
            var(--orange2)
        );

    box-shadow:
        0 8px 18px rgba(244,123,32,.20);
}


#kd-portfolio-hero .kdph-floating-copy small{

    display:block;

    color:#8A94A3;

    font-size:7px;

    font-weight:700;
}


#kd-portfolio-hero .kdph-floating-copy strong{

    display:block;

    margin-top:3px;

    color:var(--navy);

    font-size:10px;

    font-weight:800;
}


/* =========================================================
 TABLET
========================================================= */

@media(max-width:1150px){

    #kd-portfolio-hero{

        padding:
            52px 30px 56px;
    }


    #kd-portfolio-hero .kdph-container{

        grid-template-columns:
            minmax(390px,1fr)
            minmax(420px,.95fr);

        gap:36px;
    }


    #kd-portfolio-hero .kdph-title{

        font-size:45px;

        letter-spacing:-1.8px;
    }


    #kd-portfolio-hero .kdph-desc{

        font-size:15px;
    }


    #kd-portfolio-hero .kdph-portfolio-window{

        width:455px;
    }

}


/* =========================================================
 STACKED TABLET
========================================================= */

@media(max-width:900px){

    #kd-portfolio-hero{

        min-height:0;

        padding:
            48px 28px 55px;
    }


    #kd-portfolio-hero .kdph-container{

        min-height:0;

        grid-template-columns:1fr;

        gap:38px;

        text-align:center;
    }


    #kd-portfolio-hero .kdph-content{

        max-width:720px;

        margin:auto;
    }


    #kd-portfolio-hero .kdph-title{

        max-width:680px;

        margin-left:auto;
        margin-right:auto;
    }


    #kd-portfolio-hero .kdph-title-gradient{

        margin-left:auto;
        margin-right:auto;
    }


    #kd-portfolio-hero .kdph-desc{

        margin-left:auto;
        margin-right:auto;
    }


    #kd-portfolio-hero .kdph-services,
    #kd-portfolio-hero .kdph-actions{

        justify-content:center;
    }


    #kd-portfolio-hero .kdph-showcase-area{

        max-width:570px;

        margin:auto;
    }


    #kd-portfolio-hero .kdph-portfolio-window{

        width:485px;
    }

}


/* =========================================================
 MOBILE
========================================================= */

@media(max-width:600px){

    #kd-portfolio-hero{

        padding:
            38px 17px 44px;
    }


    #kd-portfolio-hero .kdph-dots{

        display:none;
    }


    #kd-portfolio-hero .kdph-container{

        gap:28px;
    }


    #kd-portfolio-hero .kdph-eyebrow{

        margin-bottom:12px;

        padding:7px 9px;

        font-size:8px;
    }


    /* HEADING */

    #kd-portfolio-hero .kdph-title{

        font-size:34px;

        line-height:1.14;

        letter-spacing:-1.2px;
    }


    #kd-portfolio-hero .kdph-title-main{

        padding-bottom:2px;

        white-space:normal;
    }


    #kd-portfolio-hero .kdph-title-gradient{

        width:auto;

        padding-bottom:5px;

        line-height:1.15;

        white-space:normal;
    }


    #kd-portfolio-hero .kdph-desc{

        margin-top:8px;

        font-size:13.5px;

        line-height:1.68;
    }


    /* CHIPS */

    #kd-portfolio-hero .kdph-services{

        margin-top:18px;

        justify-content:center;

        gap:6px;
    }


    #kd-portfolio-hero .kdph-service{

        min-height:34px;

        padding:0 9px;

        font-size:8px;
    }


    /* BUTTONS */

    #kd-portfolio-hero .kdph-actions{

        margin-top:21px;

        gap:7px;

        flex-wrap:nowrap;
    }


    #kd-portfolio-hero .kdph-btn{

        flex:1;

        min-width:0;

        min-height:46px;

        padding:0 8px;

        font-size:9px;
    }


    /* SHOWCASE */

    #kd-portfolio-hero .kdph-showcase-area{

        min-height:385px;
    }


    #kd-portfolio-hero .kdph-showcase-glow{

        width:300px;
        height:300px;
    }


    #kd-portfolio-hero .kdph-portfolio-window{

        width:100%;
        max-width:365px;

        border-radius:15px;
    }


    #kd-portfolio-hero .kdph-window-top{

        height:43px;

        padding:0 9px;
    }


    #kd-portfolio-hero .kdph-window-name{

        font-size:7px;
    }


    #kd-portfolio-hero .kdph-selected{

        padding:5px 6px;

        font-size:6px;
    }


    /* CATEGORY */

    #kd-portfolio-hero .kdph-categories{

        height:46px;

        padding:0 6px;

        gap:3px;
    }


    #kd-portfolio-hero .kdph-category{

        height:29px;

        gap:3px;

        font-size:5px;
    }


    #kd-portfolio-hero .kdph-category i{

        font-size:6px;
    }


    /* VIEW */

    #kd-portfolio-hero .kdph-view{

        height:245px;
    }


    #kd-portfolio-hero .kdph-slide{

        padding:10px;
    }


    #kd-portfolio-hero .kdph-slide-head{

        height:32px;
    }


    #kd-portfolio-hero .kdph-slide-head small{

        font-size:5px;
    }


    #kd-portfolio-hero .kdph-slide-head strong{

        font-size:10px;
    }


    #kd-portfolio-hero .kdph-project-count{

        padding:4px 5px;

        font-size:5px;
    }


    /* WEBSITE */

    #kd-portfolio-hero .kdph-web-project{

        height:193px;
    }


    #kd-portfolio-hero .kdph-web-bar{

        height:25px;
    }


    #kd-portfolio-hero .kdph-web-logo{

        font-size:5px;
    }


    #kd-portfolio-hero .kdph-web-logo span{

        width:14px;
        height:14px;
    }


    #kd-portfolio-hero .kdph-web-nav i{

        width:13px;
        height:3px;
    }


    #kd-portfolio-hero .kdph-web-hero{

        height:168px;

        padding:17px 14px;
    }


    #kd-portfolio-hero .kdph-web-copy span{

        font-size:5px;
    }


    #kd-portfolio-hero .kdph-web-copy h4{

        font-size:15px;
    }


    #kd-portfolio-hero .kdph-web-copy p{

        font-size:6px;
    }


    #kd-portfolio-hero .kdph-web-button{

        width:45px;
        height:15px;

        margin-top:9px;
    }


    #kd-portfolio-hero .kdph-web-art{

        width:115px;
        height:115px;
    }


    /* SOCIAL */

    #kd-portfolio-hero .kdph-social-project{

        height:193px;

        gap:6px;
    }


    #kd-portfolio-hero .kdph-social-mini{

        left:7px;
        right:7px;
        bottom:9px;
    }


    #kd-portfolio-hero .kdph-social-mini small{

        font-size:4px;
    }


    #kd-portfolio-hero .kdph-social-mini strong{

        font-size:8px;
    }


    #kd-portfolio-hero .kdph-social-shape{

        width:52px;
        height:52px;

        top:32px;
    }


    /* VIDEO */

    #kd-portfolio-hero .kdph-video-project{

        height:193px;

        gap:7px;
    }


    #kd-portfolio-hero .kdph-reel-phone{

        width:78px;
        height:187px;

        border-radius:13px;
    }


    #kd-portfolio-hero .kdph-reel-screen{

        border-radius:9px;
    }


    #kd-portfolio-hero .kdph-reel-screen::before{

        width:45px;
        height:45px;

        top:42px;
    }


    #kd-portfolio-hero .kdph-reel-copy{

        left:8px;
        right:8px;
        bottom:14px;
    }


    #kd-portfolio-hero .kdph-reel-copy span{

        font-size:4px;
    }


    #kd-portfolio-hero .kdph-reel-copy strong{

        font-size:7px;
    }


    #kd-portfolio-hero .kdph-video-preview{

        height:125px;
    }


    #kd-portfolio-hero .kdph-video-copy{

        left:10px;
        top:13px;

        max-width:100px;
    }


    #kd-portfolio-hero .kdph-video-copy small{

        font-size:4px;
    }


    #kd-portfolio-hero .kdph-video-copy strong{

        font-size:9px;
    }


    #kd-portfolio-hero .kdph-video-copy p{

        font-size:5px;
    }


    #kd-portfolio-hero .kdph-video-play{

        right:11px;

        width:29px;
        height:29px;

        font-size:7px;
    }


    #kd-portfolio-hero .kdph-timeline{

        height:68px;

        padding:8px;
    }


    #kd-portfolio-hero .kdph-track{

        height:25px;
    }


    /* BRAND */

    #kd-portfolio-hero .kdph-brand-project{

        height:193px;

        gap:6px;
    }


    #kd-portfolio-hero .kdph-brand-mark{

        width:65px;
        height:65px;

        border-radius:18px;

        font-size:20px;
    }


    #kd-portfolio-hero .kdph-brand-name{

        bottom:12px;

        font-size:5px;
    }


    #kd-portfolio-hero .kdph-brand-side{

        gap:6px;
    }


    #kd-portfolio-hero .kdph-brand-card{

        padding:9px;
    }


    #kd-portfolio-hero .kdph-brand-card small{

        font-size:4px;
    }


    #kd-portfolio-hero .kdph-brand-card strong{

        margin-top:4px;

        font-size:8px;
    }


    #kd-portfolio-hero .kdph-colors{

        margin-top:8px;

        gap:4px;
    }


    #kd-portfolio-hero .kdph-colors i{

        width:12px;
        height:12px;
    }


    /* BOTTOM */

    #kd-portfolio-hero .kdph-bottom{

        min-height:52px;

        padding:8px 10px;
    }


    #kd-portfolio-hero .kdph-bottom-copy small{

        font-size:5px;
    }


    #kd-portfolio-hero .kdph-bottom-copy strong{

        margin-top:3px;

        font-size:7px;
    }


    #kd-portfolio-hero .kdph-progress{

        width:90px;
    }


    #kd-portfolio-hero .kdph-progress-info{

        font-size:5px;
    }


    /* FLOATING */

    #kd-portfolio-hero .kdph-floating{

        right:0;
        bottom:44px;

        min-width:120px;

        padding:7px 8px;

        gap:6px;
    }


    #kd-portfolio-hero .kdph-floating-icon{

        width:28px;
        height:28px;

        flex-basis:28px;

        font-size:8px;
    }


    #kd-portfolio-hero .kdph-floating-copy small{

        font-size:5px;
    }


    #kd-portfolio-hero .kdph-floating-copy strong{

        font-size:7px;
    }

}


@media(max-width:380px){

    #kd-portfolio-hero .kdph-title{

        font-size:31px;
    }

}


/* =========================================================
 REDUCED MOTION
========================================================= */

@media(prefers-reduced-motion:reduce){

    #kd-portfolio-hero *,
    #kd-portfolio-hero *::before,
    #kd-portfolio-hero *::after{

        animation:none!important;

        transition:none!important;
    }

}

</style>


<!-- =========================================================
 HERO HTML
========================================================= -->

<section id="kd-portfolio-hero">


    <div class="kdph-grid"></div>

    <div class="kdph-orbit"></div>

    <div class="kdph-dots"></div>


    <div class="kdph-container">


        <!-- =================================================
             LEFT CONTENT
        ================================================== -->

        <div class="kdph-content">


            <div class="kdph-eyebrow">

                <span class="kdph-live"></span>

                KING DIGITAL PORTFOLIO

            </div>


            <!-- EXACTLY 2 ROW HEADING -->

            <h1 class="kdph-title">

                <span class="kdph-title-main">
                    Creative Work.
                </span>

                <span class="kdph-title-gradient">
                    Built To Make An Impact.
                </span>

            </h1>


            <p class="kdph-desc">

                Explore selected work from King Digital across web design,
                digital marketing, creative content and video — thoughtfully
                created to give brands a stronger, sharper and more memorable
                digital presence.

            </p>


            <!-- SERVICES -->

            <div class="kdph-services">


                <div class="kdph-service">

                    <i class="fa-solid fa-laptop-code"></i>

                    Web Design

                </div>


                <div class="kdph-service">

                    <i class="fa-solid fa-chart-line"></i>

                    Digital Marketing

                </div>


                <div class="kdph-service">

                    <i class="fa-solid fa-pen-ruler"></i>

                    Creative Design

                </div>


                <div class="kdph-service">

                    <i class="fa-solid fa-video"></i>

                    Video Content

                </div>


            </div>


            <!-- BUTTONS -->

            <div class="kdph-actions">


                <a
                    href="#kd-portfolio-showcase"
                    class="kdph-btn kdph-btn-primary">

                    Explore Our Work

                    <i class="fa-solid fa-arrow-right"></i>

                </a>


                <a
                    href="/enquiry.php"
                    class="kdph-btn kdph-btn-secondary">

                    <i class="fa-regular fa-paper-plane"></i>

                    Start A Project

                </a>


            </div>


        </div>


        <!-- =================================================
             RIGHT PORTFOLIO SHOWCASE
        ================================================== -->

        <div class="kdph-showcase-area">


            <div class="kdph-showcase-glow"></div>


            <div class="kdph-portfolio-window">


                <!-- TOP BAR -->

                <div class="kdph-window-top">


                    <div class="kdph-top-left">


                        <div class="kdph-browser-dots">

                            <span></span>
                            <span></span>
                            <span></span>

                        </div>


                        <div class="kdph-window-name">

                            King Digital / Selected Work

                        </div>


                    </div>


                    <div class="kdph-selected">

                        <span></span>

                        PORTFOLIO LIVE

                    </div>


                </div>


                <!-- CATEGORIES -->

                <div class="kdph-categories">


                    <div class="kdph-category active">

                        <i class="fa-solid fa-laptop-code"></i>

                        Website

                    </div>


                    <div class="kdph-category">

                        <i class="fa-regular fa-images"></i>

                        Social

                    </div>


                    <div class="kdph-category">

                        <i class="fa-solid fa-video"></i>

                        Video

                    </div>


                    <div class="kdph-category">

                        <i class="fa-solid fa-pen-ruler"></i>

                        Branding

                    </div>


                </div>


                <!-- =================================================
                     PORTFOLIO VIEW
                ================================================== -->

                <div class="kdph-view">


                    <!-- =============================================
                         WEBSITE
                    ============================================== -->

                    <div class="kdph-slide active">


                        <div class="kdph-slide-head">


                            <div>

                                <small>
                                    FEATURED WEBSITE
                                </small>

                                <strong>
                                    Premium Digital Experience
                                </strong>

                            </div>


                            <div class="kdph-project-count">

                                01 / 04

                            </div>


                        </div>


                        <div class="kdph-web-project">


                            <div class="kdph-web-bar">


                                <div class="kdph-web-logo">

                                    <span>K</span>

                                    KING DIGITAL

                                </div>


                                <div class="kdph-web-nav">

                                    <i></i>
                                    <i></i>
                                    <i></i>

                                </div>


                            </div>


                            <div class="kdph-web-hero">


                                <div class="kdph-web-copy">


                                    <span>
                                        DIGITAL EXPERIENCE
                                    </span>


                                    <h4>

                                        Ideas Built For

                                        <em>
                                            Digital Growth.
                                        </em>

                                    </h4>


                                    <p>

                                        Clean, modern and
                                        conversion-focused web
                                        experiences.

                                    </p>


                                    <div class="kdph-web-button"></div>


                                </div>


                                <div class="kdph-web-art"></div>


                            </div>


                        </div>


                    </div>


                    <!-- =============================================
                         SOCIAL
                    ============================================== -->

                    <div class="kdph-slide">


                        <div class="kdph-slide-head">


                            <div>

                                <small>
                                    SOCIAL CREATIVE
                                </small>

                                <strong>
                                    Content Made To Stand Out
                                </strong>

                            </div>


                            <div class="kdph-project-count">

                                02 / 04

                            </div>


                        </div>


                        <div class="kdph-social-project">


                            <div class="kdph-social-card kdph-social-one">


                                <div class="kdph-social-shape"></div>


                                <div class="kdph-social-mini">

                                    <small>
                                        BRAND STORY
                                    </small>

                                    <strong>
                                        Creative That Connects.
                                    </strong>

                                </div>


                            </div>


                            <div class="kdph-social-card kdph-social-two">


                                <div class="kdph-social-shape"></div>


                                <div class="kdph-social-mini">

                                    <small>
                                        SOCIAL MEDIA
                                    </small>

                                    <strong>
                                        Stop The Scroll.
                                    </strong>

                                </div>


                            </div>


                            <div class="kdph-social-card kdph-social-three">


                                <div class="kdph-social-shape"></div>


                                <div class="kdph-social-mini">

                                    <small>
                                        CAMPAIGN
                                    </small>

                                    <strong>
                                        Built For Attention.
                                    </strong>

                                </div>


                            </div>


                        </div>


                    </div>


                    <!-- =============================================
                         VIDEO
                    ============================================== -->

                    <div class="kdph-slide">


                        <div class="kdph-slide-head">


                            <div>

                                <small>
                                    VIDEO & REELS
                                </small>

                                <strong>
                                    Stories Designed In Motion
                                </strong>

                            </div>


                            <div class="kdph-project-count">

                                03 / 04

                            </div>


                        </div>


                        <div class="kdph-video-project">


                            <!-- REEL PHONE -->

                            <div class="kdph-reel-phone">


                                <div class="kdph-reel-screen">


                                    <div class="kdph-reel-copy">

                                        <span>
                                            SOCIAL REEL
                                        </span>

                                        <strong>
                                            Content That Moves.
                                        </strong>

                                    </div>


                                </div>


                            </div>


                            <!-- EDITOR -->

                            <div class="kdph-video-editor">


                                <div class="kdph-video-preview">


                                    <div class="kdph-video-copy">

                                        <small>
                                            VIDEO CREATIVE
                                        </small>

                                        <strong>
                                            Motion That Makes
                                            The Message Move.
                                        </strong>

                                        <p>

                                            Creative visuals,
                                            pacing and editing.

                                        </p>

                                    </div>


                                    <div class="kdph-video-play">

                                        <i class="fa-solid fa-play"></i>

                                    </div>


                                </div>


                                <div class="kdph-timeline">


                                    <div class="kdph-track"></div>

                                    <div class="kdph-track"></div>

                                    <div class="kdph-track"></div>


                                    <div class="kdph-playhead"></div>


                                </div>


                            </div>


                        </div>


                    </div>


                    <!-- =============================================
                         BRANDING
                    ============================================== -->

                    <div class="kdph-slide">


                        <div class="kdph-slide-head">


                            <div>

                                <small>
                                    BRAND CREATIVE
                                </small>

                                <strong>
                                    A Consistent Visual Identity
                                </strong>

                            </div>


                            <div class="kdph-project-count">

                                04 / 04

                            </div>


                        </div>


                        <div class="kdph-brand-project">


                            <div class="kdph-brand-main">


                                <div class="kdph-brand-mark">

                                    K

                                </div>


                                <div class="kdph-brand-name">

                                    KING DIGITAL

                                </div>


                            </div>


                            <div class="kdph-brand-side">


                                <div class="kdph-brand-card">


                                    <small>
                                        BRAND PALETTE
                                    </small>


                                    <strong>
                                        Strong Visual Direction
                                    </strong>


                                    <div class="kdph-colors">

                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>

                                    </div>


                                </div>


                                <div class="kdph-brand-card">


                                    <small>
                                        CREATIVE SYSTEM
                                    </small>


                                    <strong>
                                        Consistent Across Platforms
                                    </strong>


                                </div>


                            </div>


                        </div>


                    </div>


                </div>


                <!-- =================================================
                     BOTTOM STATUS
                ================================================== -->

                <div class="kdph-bottom">


                    <div class="kdph-bottom-copy">

                        <small>
                            NOW SHOWING
                        </small>

                        <strong class="kdph-current-project">
                            Website Experience
                        </strong>

                    </div>


                    <div class="kdph-progress">


                        <div class="kdph-progress-info">

                            <span>
                                Portfolio
                            </span>

                            <span class="kdph-progress-number">
                                25%
                            </span>

                        </div>


                        <div class="kdph-progress-track">

                            <span></span>

                        </div>


                    </div>


                </div>


            </div>


            <!-- =================================================
                 FLOATING STATUS
            ================================================== -->

            <div class="kdph-floating">


                <div class="kdph-floating-icon">

                    <i class="fa-solid fa-layer-group"></i>

                </div>


                <div class="kdph-floating-copy">

                    <small>
                        Selected Portfolio
                    </small>

                    <strong class="kdph-floating-text">
                        Web Experience
                    </strong>

                </div>


            </div>


        </div>


    </div>


</section>


<!-- =========================================================
 PORTFOLIO ANIMATION SCRIPT
========================================================= -->

<script>

(function(){

    const hero =
        document.querySelector('#kd-portfolio-hero');

    if(!hero){
        return;
    }


    const slides =
        hero.querySelectorAll('.kdph-slide');

    const categories =
        hero.querySelectorAll('.kdph-category');

    const progressBar =
        hero.querySelector('.kdph-progress-track span');

    const progressNumber =
        hero.querySelector('.kdph-progress-number');

    const currentProject =
        hero.querySelector('.kdph-current-project');

    const floatingText =
        hero.querySelector('.kdph-floating-text');


    const projectData = [

        {
            name:'Website Experience',
            floating:'Web Experience',
            progress:25
        },

        {
            name:'Social Media Creative',
            floating:'Social Creative',
            progress:50
        },

        {
            name:'Video & Reel Creative',
            floating:'Video Production',
            progress:75
        },

        {
            name:'Brand Identity',
            floating:'Brand Creative',
            progress:100
        }

    ];


    let current = 0;

    let timer = null;


    function showProject(index){

        current = index;


        slides.forEach(function(slide,i){

            if(i === current){

                slide.classList.add('active');

            }else{

                slide.classList.remove('active');

            }

        });


        categories.forEach(function(category,i){

            if(i === current){

                category.classList.add('active');

            }else{

                category.classList.remove('active');

            }

        });


        const data =
            projectData[current];


        if(progressBar){

            progressBar.style.width =
                data.progress + '%';

        }


        if(progressNumber){

            progressNumber.textContent =
                data.progress + '%';

        }


        if(currentProject){

            currentProject.textContent =
                data.name;

        }


        if(floatingText){

            floatingText.textContent =
                data.floating;

        }

    }


    function nextProject(){

        const next =
            (current + 1) % slides.length;

        showProject(next);

    }


    function startAutoPlay(){

        if(timer){

            clearInterval(timer);

        }


        timer =
            setInterval(
                nextProject,
                3600
            );

    }


    /* CATEGORY MANUAL CLICK */

    categories.forEach(
        function(category,index){

            category.addEventListener(
                'click',
                function(){

                    showProject(index);

                    startAutoPlay();

                }
            );

        }
    );


    /* INITIAL */

    showProject(0);

    startAutoPlay();


    /* TAB VISIBILITY */

    document.addEventListener(
        'visibilitychange',
        function(){

            if(document.hidden){

                if(timer){

                    clearInterval(timer);

                }

            }else{

                startAutoPlay();

            }

        }
    );


})();

</script>