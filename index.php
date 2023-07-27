<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
	============================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="style2.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />


    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />
    <!-- Crowdfunding Demo Specific Stylesheet -->
    <link rel="stylesheet" href="demos/crowdfunding/crowdfunding.css" type="text/css" />
    <link rel="stylesheet" href="demos/crowdfunding/css/fonts.css" type="text/css" /> <!-- / -->
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <link rel="stylesheet" href="css/team-silder.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

    <!--	<link rel="stylesheet" href="css/colors.php?color=209EBB" type="text/css" />-->






    <!-- Document Title
	============================================= -->
    <title>Erasmus + Spirit</title>
    <style>
        h3 {
            color: #444;
             !important;
        }

        .heading-block h3,
        .heading-block h4,
        .emphasis-title h1,
        .emphasis-title h2 {
            margin-bottom: 0;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #444;
        }

        .mt0 {
            margin: 0px 0 !important;
        }

        .pt50 {
            padding-top: 50px !important;
        }

        .pb50 {
            padding-bottom: 50px !important;
        }

        .about-section-cl {
            background-color: #f2f2f2 !important;
            margin-top: 80px !important;
        }

        .home-video-desc-big {
            position: absolute;
            color: #fff;
            margin-top: 8%;
            padding: 44px 23px 13px;
            font-size: 27px;
            left: 5%;
            right: 0;
            line-height: 37px;
            z-index: 9;
        }

        .slider-content .margin-caption {
            margin-top: 35%;
            margin-left: 50%;
        }

        .testi-content h2 {
            font-size: 24px;
        }

        .services-grid .feature-box {
            background-color: #fff;
        }

        .dark .services-grid .feature-box .fbox-icon i {
            background-color: #1b439b !important;
        }

        .dark .services-grid .feature-box .fbox-icon i {
            background-color: #1b439b !important;
            font-size: 40px;
            color: #fff !important;
            font-weight: bold;
            text-align: center;
        }

        .color-h2-font {
            color: #1b439b !important;
        }

        .dark .fbox-content p {
            color: #000;
        }

        .testi-content h1 {
            font-size: 20px;
            color: #333;
        }

        .testi-content p {
            padding-top: 5px;
            font-style: normal;
            font-size: 14px;
        }

        .testimonial.testimonial-full .flex-control-nav {
            position: relative;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            height: 6px;
            margin-top: 10px;
        }

        .owl-stage-outer {
            width: 100%;
            margin: 0 auto;
            margin-bottom: 10px;
            padding: 15px;
        }




        /* Popup Css start here
		============================================================================ */
        
        /* Styles for the pop-up container 
        .popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color:  #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
*/
        /* Styles for the pop-up content 
        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
    */
        /* Popup Css end here
		============================================================================ */

        /* Styles for the pop-up container */
        .popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color:  #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        /* Styles for the pop-up content */
        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
    
        .popup-content {
    background-color: #fff;
    padding: 50px;
    border-radius: 5px;
    text-align: center;
}

.popup-content h2 {
    margin-bottom: 10px;
}

.popup-content form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}

.popup-content input[type="email"] {
    padding: 5px;
    margin-right: 10px;
    border-radius: 3px;
}

.popup-content button {
    padding: 5px 10px;
    background-color: #4d4bcb;
    border: none;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
}



    </style>
</head>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S7PE0LWDGE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S7PE0LWDGE');
</script>



<body class="stretched">





    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <?php include('header.php'); ?>

        <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60">
            <div class="slider-inner">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark">
                            <div class="row">
                                <div class="home-video-desc-big">
                                    <h1 class="mb0">MOU Signing Ceremony</h1>
                                    <p style="font-size:18px;" class="d-none d-sm-block ">Virtual MOU Signing Ceremony
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg" style="background-image: url('images/silder.jpg');"></div>
                        </div>
                        <div class="swiper-slide dark">
                            <div class="row">
                                <div class="home-video-desc-big">
                                    <h1 class="mb0">Mou signing ceremony hosted by LPU</h1>
                                    <p style="font-size:18px;" class="d-none d-sm-block ">Mrs. Supriya Mathews ( Deputy
                                        Director-International Affairs)<br>Mr. Aman Mittal ( Director - International
                                        Affairs)</p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg" style="background-image: url('images/silder1.jpg');"></div>
                        </div>
                        <div class="swiper-slide dark">
                            <div class="row">
                                <div class="home-video-desc-big">
                                    <h1 class="mb0">Para Athletic Event</h1>
                                    <p style="font-size:18px;" class="d-none d-sm-block ">Para Athletic Event conducting
                                        by LPU 2019-20</p>
                                </div>
                            </div>
                            <div class="swiper-slide-bg" style="background-image: url('images/silder2.jpg');"></div>
                        </div>
                    </div>
                    <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
                    <div class="slide-number">
                        <div class="slide-number-current"></div><span>/</span>
                        <div class="slide-number-total"></div>
                    </div>
                </div>

            </div>
        </section>

        <!--pop-up email id
        =========================================================-->
        <!-- <div id="popup">
        <div class="popup-container" id="popupContainer">
        <div class="popup-content">
            <h2>Welcome to SPIRIT ERASMUS +</h2>
            <p>Please enter your email address:</p>
            <form action="save_email.php" method="post">
                <input type="email" name="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
</div>
</div>
</div> -->

<div id="popup">
<div class="popup-container" id="popupContainer">
        <div class="popup-content">
        <h2>Welcome to SPIRIT ERASMUS +</h2>
            <p>Please enter your email address:</p>
            <form id="emailForm">
                <input type="email" name="email" id="emailInput" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>
</div>
    <!--pop-up email id
        =========================================================-->

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap pt50">
                <div class="container mw-md ">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-12 text-center">
                            <h3 class="nott center" style="font-size: 35px; letter-spacing: -1px;">Upcoming <span>
                                    Events </span></h3>
                            </div>

                        <div class="col-md-12 mt-4 mt-md-0">
                            <div class="fslider testimonial testimonial-full grid-outer " data-animation="fade"
                                data-arrows="false">
                                <div class="flexslider">
                                    <div class="slider-wrap">

                                        <!--<div class="slide">
												<div class="testi-content">
													<h1 class="mb0">Survey and report with recommendation for implementation of SPIRIT curriculum package</h1>
													<p class="center">(MAY 2021)</p>
												</div>
											</div>-->
                                        <div class="slide">
                                            <div class="testi-content">
                                                <h2 class="mb0">Curriculum development strategy meeting for selected
                                                    modular courses</h2>
                                                <p style="" class="center">(DEC 2021)</p>
                                            </div>
                                        </div>

                                        <div class="slide">
                                            <div class="testi-content">
                                                <h2 class="mb0">Designing of training programs.</h2>
                                                <p class="center">(JUNE 2021- SEPT 2021)</p>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-content">
                                                <h2 class="mb0">Sport club’s creation</h2>
                                                <p class="center">(JUNE 2021 – DEC 2021)</p>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-content">
                                                <h2 class="mb0">Training of selected teachers in Europe and Asia</h2>
                                                <p class="center">(JULY, SEPT, NOV 2021)</p>
                                            </div>
                                        </div>
                                        <div class="slide">
                                            <div class="testi-content">
                                                <h2 class="mb0">Training on VLE by UNIC</h2>
                                                <p class="center">(SEPT, NOV 2021)</p>
                                            </div>
                                        </div>
                                        <!--<div class="slide">
												<div class="testi-content">
													<h2 class="mb0">Round tables, job fairs, participation in sport events to raise awareness of
benefits of sport and healthy lifestyle.</h2>
													<p class="center">(NOV, DEC 2021)</p>
												</div>
											</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <section class="about-section-cl" id="content">
                    <div class="content-wrap pb " style="padding-top: 0px; padding-bottom:0px;">

                        <div class="row align-items-stretch responsive">
                            <div class="col-md-5 col-padding min-vh-75"
                                style="background: url('images/about-us.jpg') center center no-repeat; background-size: cover;">
                            </div>
                            <div class="col-md-7 col-padding">
                                <div>
                                    <div class="col-lg-12">
                                        <!--<span class="before-heading color">CEO &amp; Co-Founder</span>-->
                                        <h3 class="nott" style="font-size: 35px; letter-spacing: -1px;">About <span>
                                                Project </span></h3>

                                    </div>

                                    <div class="row col-mb-50">
                                        <div class="col-lg-12">
                                            <p>This project is a part of ERASMUS+ program titled “Sport and physical
                                                education as a vehicle for Inclusion and Recognition in India, Indonesia
                                                and Sri Lanka / SPIRIT”. <br><br>The project tries to address two
                                                existing problems in the 3 partner countries involved (Sri Lanka, India
                                                and Indonesia): 1. Growing chronic noncommunicable diseases (NCDs) have
                                                emerged as a huge global health problem in low- and middle-income
                                                countries. The magnitude of the rise of NCDs is particularly visible in
                                                Southeast Asia where limited resources have been used to address this
                                                rising epidemic.</p>
                                            <a href="about.php"
                                                class="button button-reveal button-small button-circle text-right m-0"><i
                                                    class="icon-angle-right"></i><span>Read More</span></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Content
		============================================= -->
                <section id="content">

                    <section id="explore_area" class="section_padding_top">
                        <div class="container">
                            <!-- Section Heading -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section_heading_center">
                                        <h2>PROJECT OBJECTIVES</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <div class="theme_nav_tab">
                                        <nav class="theme_nav_tab_item">
                                            <div class="nav nav-tabs" id="nav-tab1" role="tablist">

                                                <button class="nav-link active" id="nav-asian-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-asian" type="button" role="tab"
                                                    aria-controls="nav-asian" aria-selected="true">ASIAN</button>

                                                <button class="nav-link" id="nav-european-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-european" type="button" role="tab"
                                                    aria-controls="nav-european" aria-selected="false">EUROPEAN</button>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-asian" role="tabpanel"
                                            aria-labelledby="nav-asian-tab">
                                            <div class="row">

                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                    <div class="theme_common_box_two img_hover">
                                                        <div class="theme_two_box_img">
                                                            <a href="#"><img src="images/partner/delhi.jpg"
                                                                    alt="img"></a>
                                                        </div>
                                                        <div class="theme_two_box_content">
                                                            <h4><a href="#">India</a></h4>
                                                            <p><span class="review_rating">EDULAB-ISBR-LPU<br>BHARATI
                                                                    VIDYAPEETH UNIVERSITY</span></p>
                                                            <h3><span>the upcoming meeting agenda</span></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                    <div class="theme_common_box_two img_hover">
                                                        <div class="theme_two_box_img">
                                                            <a href="hotel-details2.html">
                                                                <img src="images/partner/colombo.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="theme_two_box_content">
                                                            <h4><a href="#">Sri Lanka</a></h4>
                                                            <p><span class="review_rating">THE SABARAGAMUWA UNVIERSITY
                                                                    OF SRI LANKA <br>UNIVERSITY OF PERADENIYA</span></p>
                                                            <h3><span>the upcoming meeting agenda</span></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                    <div class="theme_common_box_two img_hover">
                                                        <div class="theme_two_box_img">
                                                            <a href="#">
                                                                <img src="images/partner/jakarta.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="theme_two_box_content">
                                                            <h4><a href="#">Indonesia</a></h4>
                                                            <p><span class="review_rating">Univeristas Sumatera Utara
                                                                    -University Syiah Kuala<br> Insititut Pertanian
                                                                    Bogor University</span></p>
                                                            <h3><span>the upcoming meeting agenda</span></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="nav-european" role="tabpanel"
                                            aria-labelledby="nav-european-tab">
                                            <div class="row">

                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                    <div class="theme_common_box_two img_hover">
                                                        <div class="theme_two_box_img">
                                                            <a href="#">
                                                                <img src="images/partner/madrid.jpg" alt="img"></a>
                                                        </div>
                                                        <div class="theme_two_box_content">
                                                            <h4><a href="#">Spain</a></h4>
                                                            <p><span class="review_rating">Universitat Politecnica de
                                                                    Valencia</span></p>
                                                            <h3><span>the upcoming meeting agenda</span></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                    <div class="theme_common_box_two img_hover">
                                                        <div class="theme_two_box_img">
                                                            <a href="#"><img src="images/partner/lisbon.jpg"
                                                                    alt="img"></a>
                                                        </div>
                                                        <div class="theme_two_box_content">
                                                            <h4><a href="#">Portugal</a></h4>
                                                            <p><span class="review_rating">Universidade de Lisboa</span>
                                                            </p>
                                                            <h3><span>the upcoming meeting agenda</span></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                    <div class="theme_common_box_two img_hover">
                                                        <div class="theme_two_box_img">
                                                            <a href="#"><img src="images/partner/nicosia.jpg"
                                                                    alt="img"></a>
                                                        </div>
                                                        <div class="theme_two_box_content">
                                                            <h4><a href="#">Cyprus</a></h4>
                                                            <p><span class="review_rating">University of Nicosia</span>
                                                            </p>
                                                            <h3><span>the upcoming meeting agenda</span></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
    </div>
    </section>

    </div>
    </section>




    <section class="pt50 pb50" id="content">
        <div class="content-wrap">
            <div class="heading-block center">
                <h3 class="nott center" style="font-size: 35px; letter-spacing: -1px;">Our Partners </span></h3>
            </div>
            <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget"
                data-margin="30" data-nav="true" data-pagi="false" data-autoplay="5000" data-items-xs="3"
                data-items-sm="3" data-items-md="5" data-items-lg="6" data-items-xl="7">
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/1.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/2.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/3.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/lpu.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/4.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/5.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/6.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/7.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/8.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/9.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/10.jpg" alt="Logo"></a></div>
                <div class="oc-item grid-outer"><a href="#"><img src="images/logo/11.jpg" alt="Logo"></a></div>
            </div>
        </div>
    </section>

    
    <!-- Footer
		============================================= -->
    <?php include('footer.php');?>

    </div>
    <!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-line-arrow-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.bundle.js"></script>
    <!-- Meanu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- wow.js -->
    <script src="js/wow.min.js"></script>
    <!-- Custom js -->
    <script src="js/custom.js"></script>
    <script src="js/add-form.js"></script>
    <script src="js/form-dropdown.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/script.js"></script>

    <!-- ADD-ONS JS FILES -->
    <script>
        jQuery(window).on('pluginCarouselReady', function () {
            $('#oc-features').owlCarousel({
                items: 1,
                margin: 60,
                nav: true,
                navText: ['<i class="icon-line-arrow-left"></i>',
                    '<i class="icon-line-arrow-right"></i>'
                ],
                dots: false,
                stagePadding: 30,
                responsive: {
                    768: {
                        items: 2
                    },
                    1200: {
                        stagePadding: 200
                    }
                },
            });
        });
    </script>
    <script>
 // Function to set a cookie with the given name and value
        // function setCookie(name, value) {
        //     var date = new Date();
        //     date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000)); // Set cookie expiration to 1 year
        //     var expires = "expires=" + date.toUTCString();
        //     document.cookie = name + "=" + value + ";" + expires + ";path=/";
        // }

        // Function to get the value of a cookie by name
        // function getCookie(name) {
        //     var value = "; " + document.cookie;
        //     var parts = value.split("; " + name + "=");
        //     if (parts.length === 2) return parts.pop().split(";").shift();
        // }

        //Show the pop-up if the cookie is not set 
        // window.onload = function() {
        //     var popupContainer = document.getElementById("popupContainer");
        //     if (!getCookie("popupShown")) {
        //         popupContainer.style.display = "block";
        //         setCookie("popupShown", "true"); // Set the cookie to indicate that the pop-up has been shown
        //     }
        // };




        // Function to set a cookie with the given name and value
        function setCookie(name, value) {
            var date = new Date();
            date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000)); // Set cookie expiration to 1 year
            var expires = "expires=" + date.toUTCString();
            document.cookie = name + "=" + value + ";" + expires + ";path=/";
        }

        // Function to get the value of a cookie by name
        function getCookie(name) {
            var value = "; " + document.cookie;
            var parts = value.split("; " + name + "=");
            if (parts.length === 2) return parts.pop().split(";").shift();
        }

        // Show the pop-up if the cookie is not set
        window.onload = function() {
            var popupContainer = document.getElementById("popupContainer");
            if (!getCookie("popupShown")) {
                popupContainer.style.display = "block";
            }
        };

        // Handle form submission
        document.getElementById("emailForm").addEventListener("submit", function(event) {
            event.preventDefault();

            var emailInput = document.getElementById("emailInput");
            var email = emailInput.value;

            // Send the email to the server via AJAX (you can use jQuery for simplicity)
            // Replace "save_email.php" with the path to your PHP file
            $.ajax({
                type: "POST",
                url: "save_email.php",
                data: { email: email },
                success: function(response) {
                    // On successful submission, hide the pop-up and set the cookie
                    document.getElementById("popupContainer").style.display = "none";
                    setCookie("popupShown", "true"); // Set the cookie to indicate that the pop-up has been shown
                },
                error: function(xhr, status, error) {
                    // Handle errors if needed
                }
            });
        });
    </script>

    <!-- Add jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </script>
</body>

</html>