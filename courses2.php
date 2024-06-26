<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="SemiColonWeb" />

  <!-- Stylesheets ============================================= -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet"
    type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="stylesheet" href="css/dark.css" type="text/css" />
  <link rel="stylesheet" href="css/swiper.css" type="text/css" />
  <!-- Crowdfunding Demo Specific Stylesheet -->
  <link rel="stylesheet" href="demos/crowdfunding/crowdfunding.css" type="text/css" />
  <link rel="stylesheet" href="demos/crowdfunding/css/fonts.css" type="text/css" />
  <!-- / -->
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

  <!-- Document Title ============================================= -->
  <!-- <title>LPU</title> -->
  <style>
    .read-more {
      background-color: #fff;
      border: 0px;
      border-bottom: 1px solid #1b439b;
      color: #1b439b;
      padding: 0 2px;
      font-style: italic;
    }

    .content-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
      z-index: 10;
    }

    .bubble-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 130px;
      /* Adjust the gap between bubbles as needed */
      margin-top: 50px;
      /* Adjust the top margin as needed */
    }

    .bubble {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 200px;
      height: 200px;
      margin: 20px;
      border-radius: 50%;
      background-color: lightblue;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: center;
      font-size: 1.2em;
      color: #333;
      transition: transform 0.3s, background-color 0.3s;
      cursor: pointer;
      overflow: hidden;
      /* Ensures content stays within the bubble */
      padding: 10px;
      /* Adds some padding for better text spacing */
    }

    .bubble p {
      margin: 0;
      /* Remove default margins for paragraphs */
      padding: 0 10px;
      /* Add padding for better text spacing */
      word-wrap: break-word;
      /* Ensure long words break to the next line */
      text-align: center;
      /* Center the text */
    }

    .bubble:hover {
      background-color: whitesmoke;
      transform: scale(1.05);
    }

    /* .bubble p {
      margin: 0;
      padding: 20px;
    } */

    .popup-content {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, 50%);
      background-color: white;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      z-index: 1000;
      opacity: 0;
      transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
    }

    .popup-content.active {
      display: block;
      opacity: 1;
      transform: translate(-50%, -50%);
    }

    @keyframes slideInFromBottom {
      0% {
        transform: translate(-50%, 50%);
        opacity: 0;
      }

      100% {
        transform: translate(-50%, -50%);
        opacity: 1;
      }
    }

    @keyframes slideOutToBottom {
      0% {
        transform: translate(-50%, -50%);
        opacity: 1;
      }

      100% {
        transform: translate(-50%, 50%);
        opacity: 0;
      }
    }

    .popup-content.active {
      animation: slideInFromBottom 0.3s forwards;
    }

    .popup-content:not(.active) {
      animation: slideOutToBottom 0.3s forwards;
    }

    .universities-slider {
      overflow: hidden;
      position: relative;
    }

    .universities {
      display: flex;
      animation: slide-in 20s infinite linear;
    }

    .universities img {
      width: 200px;
      /* Adjust width as needed */
      margin: 0 20px;
      /* Adjust margin as needed */
    }

    @keyframes slide-in {
      0% {
        transform: translateX(100%);
      }

      100% {
        transform: translateX(-100%);
      }
    }
  </style>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-S7PE0LWDGE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-S7PE0LWDGE');
  </script>
</head>

<body class="stretched">
  <div id="wrapper" class="clearfix">
    <?php include ('header.php'); ?>

    <section id="slider" class="slider-element swiper_wrapper min-vh-50">
      <div class="slider-inner">
        <div class="swiper-container swiper-parent">
          <div class="swiper-wrapper">
            <div class="swiper-slide dark">
              <div class="swiper-slide-bg"
                style="background-image: url('images/Lifelong-learning.png'); background-position: center -110px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt10">
      <div class="container clearfix">
        <div class="heading-block center mb20">
          <h2 style="text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.5);">Life Long Learning Courses</h2>
        </div>
      </div>
      <div class="universities-slider">
        <div class="universities">
          <img src="images/logo/1.jpg" alt="University 1">
          <img src="images/logo/2.jpg" alt="University 2">
          <img src="images/logo/3.jpg" alt="University 3">
          <img src="images/logo/4.jpg" alt="University 4">
          <img src="images/logo/5.jpg" alt="University 5">
          <img src="images/logo/6.jpg" alt="University 6">
          <img src="images/logo/7.jpg" alt="University 7">
          <img src="images/logo/8.jpg" alt="University 8">
          <img src="images/logo/9.jpg" alt="University 9">
          <img src="images/logo/10.jpg" alt="University 10">
          <img src="images/logo/11.jpg" alt="University 11">
        </div>
      </div>
    </section>

    <div class="bubble-container">
      <div class="bubble" onclick="showPopup('what')">
        <p style="font-size: 25px">What is LLL?</p>
      </div>
      <div class="bubble" onclick="showPopup('why')">
        <p style="font-size: 23px">Why are LLL courses essential to learn?</p>
      </div>
      <div class="bubble" onclick="showPopup('login')">
        <a href="https://courses.unic.ac.cy/pages/login.php" target="_blank"
          style="font-size: 20px; text-decoration: none; color: inherit;">
          Click Here to checkout courses from different universities.
        </a>
      </div>

      <div id="popup-what" class="popup-content" onclick="event.stopPropagation()">
        <h3>What is LLL?</h3>
        <p>Life Long Learning (LLL) is the ongoing, voluntary, and self-motivated pursuit of knowledge for personal or
          professional development. It enhances social inclusion, active citizenship, and personal development, as well
          as
          competitiveness and employability.</p>
      </div>

      <div id="popup-why" class="popup-content" onclick="event.stopPropagation()">
        <h3>Why are LLL courses essential to learn?</h3>
        <p>LLL is crucial in today's fast-changing world. It helps individuals stay relevant, adapt to changes, and be
          proactive in their personal and professional lives. It fosters a culture of continuous improvement and
          innovation.</p>
      </div>

      <script>
        function showPopup(type) {
          var popups = document.querySelectorAll('.popup-content');
          for (var i = 0; i < popups.length; i++) {
            popups[i].classList.remove('active');
          }

          var popup = document.getElementById('popup-' + type);
          if (popup) {
            popup.classList.add('active');
          }

          // Add event listener to close popup when clicking outside with a slight delay
          setTimeout(function () {
            document.addEventListener('click', function (event) {
              var isClickInside = popup.contains(event.target);

              if (!isClickInside) {
                popup.classList.remove('active');
                document.removeEventListener('click', arguments.callee);
              }
            });
          }, 0);
        }
      </script>
    </div>
</body>

</html>