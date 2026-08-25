<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?= $pageDescription ?? 'Welcome to King Digital, a leading digital marketing agency in Delhi. We are a team of professionals dedicated to providing top-notch digital marketing solution to businesses in Delhi and beyond. We aim to help our clients reach their business goals by leveraging the power of digital marketing.' ?>">

    <meta name="theme-color" content="#ffffff">

    <title>
        <?= $pageTitle ?? 'Website Name' ?>
    </title>

    <link rel="icon" type="image/png" href="assets/logo/king-digital-logo-2.png">

    <!-- All Local Css  -->
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">


    <!-- font awesome for icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



    <!-- ALL Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">


</head>

<body>


    <!-- ======================================================================================================================
                                                        Header 
    ======================================================================================================================-->

    <header class="header_top">
        <!-- ════ NAVIGATION ════ -->
        <nav id="main-nav">
            <div class="container">
                <div class="nav-in">

                    <a href="index.php" class="logo">


                        <img src="assets/images/logos/king-digital-logo.png" alt="">


                    </a>

                    <div class="nav-links">
                        <a href="index.php" class="bottom_link_78">Home</a>
                        <div class="has-dd">
                            <a href="#" class="botom_link_78">Services</a>
                            <div class="dd">
                                <a href="promotional-sms.php">
                                    <span class="dd-icon" style="background:#FFF0E6;color:#F97316"><i class="fas fa-comment-sms"></i></span>Promotional SMS
                                </a>
                                <a href="service-whatsAppApi.php">
                                    <span class="dd-icon" style="background:#ECFDF5;color:#059669"><i class="fab fa-whatsapp"></i></span>WhatsApp API
                                </a>
                                <a href="aggregator_platform.php">
                                    <span class="dd-icon" style="background:#EFF6FF;color:#2563EB"><i class="fa-solid fa-mobile-screen-button"></i></span>Aggregator Platform
                                </a>
                                <a href="/website-designing-company-india.html">
                                    <span class="dd-icon" style="background:#EEF2FF;color:#4F46E5"><i class="fas fa-globe"></i></span>Website Design
                                </a>
                                <a href="seo-service.php">
                                    <span class="dd-icon" style="background:#EFF6FF;color:#2563EB"><i class="fas fa-chart-line"></i></span>SEO Services
                                </a>
                                <div class="dd-sep"></div>
                                <a href="rcs-service.php">
                                    <span class="dd-icon" style="background:#FFF0E6;color:#F97316"><i class="fa-solid fa-mobile-screen-button"></i></span>RCS Service
                                </a>
                                <a href="service-ivr.php">
                                    <span class="dd-icon" style="background:#FEF3C7;color:#D97706"><i class="fas fa-phone-volume"></i></span>IVR & Voice
                                </a>
                                <a href="ai-voice.php">
                                    <span class="dd-icon" style="background:#FFF1F2;color:#E11D48"><i class="fa-solid fa-robot"></i></span>Ai Voice
                                </a>
                                <!-- <a href="/email-marketing-company-india.html">
                                    <span class="dd-icon" style="background:#F5F3FF;color:#7C3AED"><i class="fas fa-envelope-open"></i></span>Email Marketing
                                </a> -->
                                <a href="https://www.kingcloud.in/">
                                    <span class="dd-icon" style="background:#F0FDF4;color:#16A34A"><i class="fas fa-server"></i></span>Hosting & Cloud
                                </a>
                                <a href="https://kingdigitalstudio.in/">
                                    <span class="dd-icon" style="background:#FFF1F2;color:#E11D48"><i class="fas fa-video"></i></span>Video & Audio
                                </a>
                            </div>
                        </div>
                        <a href="/portfolio.php" class="bottom_link_78">Portfolio</a>
                        <a href="about.php" class="bottom_link_78">About</a>

                        <!-- <div class="has-dd">
                            <a href="#">Brands</a>
                            <div class="dd">
                                <a href="https://www.staticking.com/"><span class="dd-icon" style="background:#FFF0E6;color:#F97316"><i class="fas fa-bullhorn"></i></span>StaticKing</a>
                                <a href="https://kingdigitalstudio.in/"><span class="dd-icon" style="background:#FEF3C7;color:#D97706"><i class="fas fa-clapperboard"></i></span>King Digital Studio</a>
                                <a href="https://academy.kingdigital.in/"><span class="dd-icon" style="background:#EFF6FF;color:#2563EB"><i class="fas fa-graduation-cap"></i></span>KD Academy</a>
                                <a href="https://www.ivrking.in/"><span class="dd-icon" style="background:#ECFDF5;color:#059669"><i class="fas fa-phone-volume"></i></span>IVR King</a>
                                <a href="https://www.kingcloud.in/"><span class="dd-icon" style="background:#F5F3FF;color:#7C3AED"><i class="fas fa-cloud"></i></span>King Cloud</a>
                            </div>
                        </div> -->
                        <!-- <a href="/client.php">Clients</a> -->

                        <!-- <a href="/blog/">Blog</a> -->
                        <a href="contact.php" class="bottom_link_78">Contact</a>
                    </div>

                    <div class="nav-right">
                        <a href="tel:+919211339966" class="btn btn-outline btn-sm"><i class="fas fa-phone"></i>Call Now</a>
                        <a href="/enquiry.php" class="btn btn-primary btn-sm">Get a Quote <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <button class="hamburger" id="hamburger" aria-label="Menu">
                        <span></span><span></span><span></span>
                    </button>
                </div>
            </div>
            <!-- Mobile nav -->
            <div class="mob-nav" id="mob-nav">
                <div class="mob-nav-sep">Main</div>
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <!-- <a href="/client.php">Our Clients</a> -->
                <a href="/portfolio.php">Portfolio</a>
                <!-- <a href="/blog/">Blog</a> -->
                <a href="contact.php">Contact Us</a>
                <div class="mob-nav-sep">Services</div>
                <a href="promotional-sms.php">Promotional SMS</a>
                <a href="service-whatsAppApi.php">WhatsApp Business API</a>
                <a href="/website-designing-company-india.html">Website Design</a>
                <a href="seo-service.php">SEO Services</a>
                <a href="aggregator_platform.php">Aggregator Platform</a>
                <a href="service-ivr.php">IVR & Voice</a>
                <!-- <a href="/email-marketing-company-india.html">Email Marketing</a> -->
                <a href="https://www.kingcloud.in/">Hosting & Cloud</a>
                <div class="mob-nav-sep">Brands</div>
                <a href="https://www.staticking.com/">StaticKing</a>
                <a href="https://kingdigitalstudio.in/">King Digital Studio</a>
                <a href="https://academy.kingdigital.in/">KD Academy</a>
                <a href="https://www.ivrking.in/">IVR King</a>
                <a href="https://www.kingcloud.in/">King Cloud</a>
                <div class="mob-ctas">
                    <a href="tel:+919211339966" class="btn btn-outline btn-sm"><i class="fas fa-phone"></i>Call</a>
                    <a href="/enquiry.php" class="btn btn-primary btn-sm">Get a Quote</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- progrss bar here -->
    <style>
        .scroll-progress {
            position: fixed;
            /* top: 0; */
            left: 0;
            width: 0%;
            height: 5px;
            z-index: 999999;
            background: linear-gradient(90deg, #0043d2, #ff7300);
            box-shadow: 0 0 12px rgba(0, 210, 106, 0.6);
            transition: width 0.08s linear;
        }


        .scroll-progress img {
            position: absolute;
            right: -10px;
            /* image bar ke aage dikhegi */
            top: 60%;
            transform: translateY(-50%);
            width: 20px;
            /* apni image ke hisab se */
            height: auto;
            pointer-events: none;
            user-select: none;
        }
    </style>
    <div style="position: relative;">

        <div class="scroll-progress wdawsw94">
            <img class="wdasw94" src="assets/images/logos/king-digital-logo-2.png" alt="">
        </div>
    </div>

    <script>
        const progressBar = document.querySelector(".scroll-progress");

        window.addEventListener("scroll", () => {
            const scrollTop = window.scrollY;
            const docHeight =
                document.documentElement.scrollHeight - window.innerHeight;

            const progress = (scrollTop / docHeight) * 100;

            progressBar.style.width = progress + "%";
        });
    </script>