<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code contactus
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message =  $_POST['message'];
	$query = mysqli_query($con, "insert into contact_equiry(fname,lname,email,phone,message) values('$fname','$lname','$email','$phone','$message')");
	if ($query) {
		echo "<script>alert(' successfull');</script>";
	} else {
		echo "<script>alert(' something went worng');</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="robots" content="all">

	<title>Contact Us</title>

	<!-- Bootstrap Core CSS -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

	<!-- Customizable CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/app.css">

	<link rel="stylesheet" href="assets/css/green.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.transitions.css">
	<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
	<link href="assets/css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/rateit.css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

	<!-- Demo Purpose Only. Should be removed in production -->
	<link rel="stylesheet" href="assets/css/config.css">

	<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
	<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
	<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
	<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
	<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
	<!-- Demo Purpose Only. Should be removed in production : END -->


	<!-- Icons/Glyphs -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">



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
	<div class="body-content outer-top-xs">
		<div class='container-flude'>
			<section class="login_set">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="row">
								<div class=" col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-12">
									<div class="login_set_inn">
										<div class="head text-start">
											<h5>
												Contact us
											</h5>
										</div>
										<form method="post" action="">
											<div class="row">
												<div class="col-12">
													<div class="form-group">
														<input type="text" class="form-control" id="firsr" name="fname" placeholder="First" required>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<input type="text" class="form-control" id="Last" name="lname" placeholder="Last Name" required>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<input type="tel" class="js-input-mobile form-control" id="number" name="phone" maxlength="10" placeholder="Phone Number" required>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<textarea class="form-control" rows="4" placeholder="Message" name="message" required id="floatingTextarea"></textarea>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<button type="submit" name="submit" class="btn-primary">Send</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class=" col-xxl-7 col-xl-7 col-lg-7 col-md-6 col-12">
									<div class="map_area">
										<div class="map">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d178790.95737339216!2d-73.87072979478495!3d45.55819642583336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a541c64b70d%3A0x654e3138211fefef!2sMontreal%2C%20QC%2C%20Canada!5e0!3m2!1sen!2sin!4v1647108431096!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section </div>
		</div>
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

		<script>
  $('body').on('keyup', '.js-input-mobile', function () {
    var $input = $(this),
        value = $input.val(),
        length = value.length,
        inputCharacter = parseInt(value.slice(-1));

    if (!((length > 1 && inputCharacter >= 0 && inputCharacter <= 9) || (length === 1 && inputCharacter >= 7 && inputCharacter <= 9))) {
        $input.val(value.substring(1, length - 1));
     }
  });
  </script>

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

		
// To ensure only valid mobile numbers(7000000000 to 9999999999) are entered

		<!-- For demo purposes – can be removed on production : End -->
</body>

</html>