<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code for User login
if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$status = 0;
	$query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' and password='$password' and status ='$status' ");
	$num = mysqli_fetch_array($query);
	if ($num > 0) {
		$extra = "index.php";
		$_SESSION['login'] = $_POST['email'];
		$_SESSION['id'] = $num['id'];
		$_SESSION['username'] = $num['name'];
		$uip = $_SERVER['REMOTE_ADDR'];
		$status = 1;
		$log = mysqli_query($con, "insert into userlog(userEmail,userip,status) values('" . $_SESSION['login'] . "','$uip','$status')");
		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("location:http://$host$uri/$extra");
		exit();
	} else {
		$extra = "login.php";
		$email = $_POST['email'];
		$uip = $_SERVER['REMOTE_ADDR'];
		$status = 0;
		$log = mysqli_query($con, "insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("location:http://$host$uri/$extra");
		$_SESSION['errmsg'] = "Invalid email id or Password";
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/media.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
		<title>WARDROBE</title>
		<script type="text/javascript">
			function valid() {
				if (document.register.password.value != document.register.confirmpassword.value) {
					alert("Password and Confirm Password Field do not match  !!");
					document.register.confirmpassword.focus();
					return false;
				}
				return true;
			}
		</script>
		<script>
			function userAvailability() {
				$("#loaderIcon").show();
				jQuery.ajax({
					url: "check_availability.php",
					data: 'email=' + $("#email").val(),
					type: "POST",
					success: function(data) {
						$("#user-availability-status1").html(data);
						$("#loaderIcon").hide();
					},
					error: function() {}
				});
			}
		</script>

		<style>
			.user i {
				font-size: 160px;
				margin-left: 590px;
			}

			.head h5 {
				font-size: 43px;
				margin-left: 591px;
			}

			div#forgetss {
				margin-left: 178px;
				padding: 10px;
				font-size: 17px;
			}

			div#forget {
				margin-left: 205px;
				font-size: 17px;
			}

			button.btn-upper.btn.btn-primary.checkout-page-button {
				margin-left: 220px;
				background-color: black;
				padding: 6px 17px;
				font-size: 12px;
			}

			.outer-top-xs {
				margin-top: 30px;
				margin-left: 409px;
				margin-right: 400px;
			}
		</style>

	</head>

<body class="cnt-home">

	<div class="body-content outer-top-bd">
		<div class="container-fluid">
			<div class="sign-in-page inner-bottom-sm">
				<div class="row">
					<!-- Sign-in -->
					<div class="col-md-12 col-sm-12 sign-in ">
						<div class="head">
							<h5>
								Login
							</h5>
						</div><br>
						<div class="user">
							<i class="fas fa-user"></i>
						</div>
						<form class="register-form outer-top-xs" method="post">
							<span style="color:red;">
								<?php
								echo htmlentities($_SESSION['errmsg']);
								?>
								<?php
								echo htmlentities($_SESSION['errmsg'] = "");
								?>
							</span>
							<div class="form-group">
								<label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
								<input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
							</div>
							<div class="form-group">
								<label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
								<input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
							</div>

							<button style="margin:20px;" type="submit" class="btn-upper btn btn-primary checkout-page-button" name="login">Login</button>
							<div class="col-12">
								<div class="forget" id="forgetss">
									<a href="forgot-password.php">Forget Password</a>
								</div>
							</div>
							<div class="col-12">
								<div id="forget">
									<a href="signup.php">New User</a>
								</div>
							</div>
						</form>
					</div>
					<!-- Sign-in -->

				</div><!-- /.row -->
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/cutome.js"></script>
</body>

</html>