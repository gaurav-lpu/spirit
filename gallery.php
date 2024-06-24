<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets ============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet"
		type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
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
	<script src="js/jquery.magnific-popup.min.js"></script>

	<!-- Document Title ============================================= -->
	<title>Erasmus + Spirit</title>

	<style>
		.gallery-container {
			display: flex;
			flex-wrap: wrap;
			gap: 40px;
			/* Space between images */
			justify-content: center;
			padding: 40px;
			border: 5px solid #ccc;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
		}

		.gallery-item {
			width: 300px;
			/* Fixed width for each gallery item */
			height: 200px;
			/* Fixed height for each gallery item */
			margin: 20px;
			/* Space around each gallery item */
			overflow: hidden;
			/* Ensure images don't overflow the fixed size */
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.gallery-item img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			/* Ensure images cover the area without stretching */
		}

		@media (max-width: 768px) {
			.gallery-item {
				width: calc(50% - 40px);
				/* Adjust for 2 images per row on smaller screens */
			}
		}

		@media (max-width: 480px) {
			.gallery-item {
				width: calc(100% - 40px);
				/* Adjust for 1 image per row on extra small screens */
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

	<!-- Document Wrapper ============================================= -->
	<div id="wrapper" class="clearfix">
		<?php include ('header.php'); ?>

		<section id="page-title" class="page-title-parallax page-title-dark"
			data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px 55.082px;">
			<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);z-index:0;"></div>
			<div class="container clearfix">
				<!-- <div class="float-left slider-caption "> -->
					<h1 style="text-align: center">Gallery - The gallery showcases various significant moments from our SPIRIT project journey.</h1>
				<!-- </div> -->
			</div>
		</section>

		<section class="lpu-top-bottom-new">
			<div class="container">
				<div class="gallery-container">
					<a href="images/SUSL.jpg" class="gallery-item">
						<img src="images/SUSL.jpg" alt="Image 1">
					</a>
					<a href="images/USU.jpeg" class="gallery-item">
						<img src="images/USU.jpeg" alt="Image 2">
					</a>
					<a href="images/VALENCIA.jpeg" class="gallery-item">
						<img src="images/VALENCIA.jpeg" alt="Image 3">
					</a>
					<a href="images/LPU_img.jpg" class="gallery-item">
						<img src="images/LPU_img.jpg" alt="Image 4">
					</a>
					<a href="images/BVD.jpeg" class="gallery-item">
						<img src="images/BVD.jpeg" alt="Image 5">
					</a>
					<a href="images/bangaloreimg.jpeg" class="gallery-item">
						<img src="images/bangaloreimg.jpeg" alt="Image 6">
					</a>
					<a href="images/upv-silder1.jpg" class="gallery-item">
						<img src="images/upv-silder1.jpg" alt="Image 7">
					</a>
					<a href="images/usk-silder2.jpg" class="gallery-item">
						<img src="images/usk-silder2.jpg" alt="Image 8">
					</a>
					<a href="images/USU-img.jpeg" class="gallery-item">
						<img src="images/USU-img.jpeg" alt="Image 9">
					</a>
					<a href="images/gallery/3.jpg" class="gallery-item">
						<img src="images/gallery/3.jpg" alt="Image 10">
					</a>
					<a href="images/gallery/6.jpg" class="gallery-item">
						<img src="images/gallery/6.jpg" alt="Image 11">
					</a>
					<a href="images/3.jpg" class="gallery-item">
						<img src="images/3.jpg" alt="Image 12">
					</a>
					<a href="images/kandy.jpg" class="gallery-item">
						<img src="images/kandy.jpg" alt="Image 13">
					</a>
					<a href="images/walkathon.jpeg" class="gallery-item">
						<img src="images/walkathon.jpeg" alt="Image 14">
					</a>
					<a href="images/isbr-img.jpeg" class="gallery-item">
						<img src="images/isbr-img.jpeg" alt="Image 15">
					</a>
				</div>
			</div>
		</section>

	</div>

	<!-- Footer ============================================= -->
	<?php include ('footer.php'); ?>
	</div><!-- #wrapper end -->

	<!-- Go To Top ============================================= -->
	<div id="gotoTop" class="icon-line-arrow-up"></div>

	<!-- JavaScripts ============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

	<!-- Footer Scripts ============================================= -->
	<script src="js/functions.js"></script>

	<script>
		$(document).ready(function () {
			$('.gallery-container').magnificPopup({
				delegate: 'a', // child items selector, by clicking on it popup will open
				type: 'image',
				gallery: {
					enabled: true // enable gallery mode
				},
				closeOnContentClick: true, // Close when clicking on the content (image)
				closeOnBgClick: true // Close when clicking on the background (outside the image)
			});
		});
	</script>

</body>

</html>