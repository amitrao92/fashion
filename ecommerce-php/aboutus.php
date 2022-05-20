<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="robots" content="all">

	<title>About US</title>

	<!-- Bootstrap Core CSS -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

	<!-- Customizable CSS -->
	<link rel="stylesheet" href="assets/css/main.css">

	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.transitions.css">
	<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
	<link href="assets/css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/rateit.css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

	<!-- Demo Purpose Only. Should be removed in production -->
	<link rel="stylesheet" href="assets/css/config.css">

	<!-- Demo Purpose Only. Should be removed in production : END -->


	<!-- Icons/Glyphs -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	<style>
		.aboutus_wrap {
			padding: 40px 0;
		}

		.aboutus_wrap .img_rea {
			width: 100%;
			border-radius: 15px;
			overflow: hidden;
		}

		.aboutus_wrap .img_rea img {
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
	</style>
</head>

<body class="cnt-home">

	<header class="header-style-1">

		<!-- ============================================== TOP MENU ============================================== -->
		<?php include('includes/top-header.php'); ?>
		<!-- ============================================== TOP MENU : END ============================================== -->
		<?php include('includes/main-header.php'); ?>
		<!-- ============================================== NAVBAR ============================================== -->
		<?php //include('includes/menu-bar.php');
		?>
		<!-- ============================================== NAVBAR : END ============================================== -->

	</header>
	<!-- ============================================== HEADER : END ============================================== -->
	</div><!-- /.breadcrumb -->
	<section class="aboutus_wrap" id="about_us_sid">
		<div class="container">
			<div class="row">
				<div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
					<div class="img_rea">
						<img src="img/banner_01.jpg" alt=".." />
					</div>
				</div>
				<div class="col-xxl-7 col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12">
					<div class="content">
						<p>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem recusandae explicabo aut, quisquam delectus blanditiis debitis nesciunt! Beatae consequatur recusandae magnam distinctio deserunt quam aperiam officia inventore! Ut, vero!
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae quidem hic, molestiae id architecto nobis suscipit repudiandae placeat ratione reprehenderit aperiam minima dolorem delectus provident dolores, cupiditate, quibusdam corrupti labore.
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim deleniti minima impedit voluptas cupiditate quasi, nesciunt architecto consectetur aliquid vitae laudantium temporibus, doloremque reiciendis laborum error accusamus veniam a. Sunt.
						</p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<?php include('includes/footer.php'); ?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>

	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>

	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
	<script src="assets/js/jquery.rateit.min.js"></script>
	<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->

	<script src="switchstylesheet/switchstylesheet.js"></script>

	<script>
		$(document).ready(function() {
			$(".changecolor").switchstylesheet({
				seperator: "color"
			});
			$('.show-theme-options').click(function() {
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
			$('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->



</body>

</html>