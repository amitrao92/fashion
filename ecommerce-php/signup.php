<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code user Registration
if (isset($_POST['submit'])) {
	// print_r($_POST);die();
	$name = $_POST['fullname'];
	$email = $_POST['emailid'];
	$faq_question = $_POST['faq_question'];
	$faq_answer = $_POST['faq_answer'];
	$contactno = $_POST['contactno'];
	//$password = md5($_POST['password']);
	$password= $_POST['password'];
if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password)){
		$password1 = md5($password);
$query = mysqli_query($con, "insert into users(name,email,contactno,password,faq_question,faq_answer) values('$name','$email','$contactno','$password1','$faq_question','$faq_answer')");
	if ($query) {
		echo "<script>alert('You are successfully register');</script>";
		echo "<script type='text/javascript'> document.location ='login.php'; </script>";

	} else {
		echo "<script>alert('Not register something went worng');</script>";
	}
} else {
	echo "<script>alert('Password must contain Atleast One Uppercase or Lowercase characters of letters, numbers and at least one special character');</script>";

}
	
}
// Code for User login
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<title> WARDROBE| Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />

	<!-- Icons/Glyphs -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">
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
		.col-md-6.col-sm-6.create-new-account {
			margin-left: 5;
			margin-left: 308px;
		}
	</style>

</head>

<body class="cnt-home">
		<div class="body-content outer-top-bd">
		<div class="container">
			<div class="sign-in-page inner-bottom-sm">
				<div class="row">
					<!-- create a new account -->
					<div class="col-md-6 col-sm-6 create-new-account">
					<br><br><br><br>

						<h2 style="text-align:center;" class="checkout-subtitle">SignUp</h2>
						<form class="register-form outer-top-xs" role="form" method="post" name="register" onSubmit="return valid();">
							<div class="form-group">
								<label class="info-title" for="fullname">Full Name <span>*</span></label>
								<input type="text" class="form-control unicase-form-control text-input" id="fullname" name="fullname" required="required">
							</div>


							<div class="form-group">
								<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
								<input type="email" class="form-control unicase-form-control text-input" id="email" onBlur="userAvailability()" name="emailid" required>
								<span id="user-availability-status1" style="font-size:12px;"></span>
							</div>

							<div class="form-group">
								<label class="info-title" for="contactno">Contact No. <span>*</span></label>
								<input type="text" class="form-control unicase-form-control text-input" id="contactno" name="contactno" maxlength="10" required>
							</div>
							
							<div class="form-group">
								<label class="info-title" for="faqquestion">FAQ Question <span>*</span></label>
							    <select  class="form-control" name="faq_question">
                                        <option value="your_nick_nane"> Your Nick Name</option>
										<option value="your_best_friend_nane"> Your Best Friend Name</option>
										<option value="your_favorite_food"> Your Favorite food </option>
								</select>
							</div>
							<div class="form-group">
								<label class="info-title" for="faqanswer">FAQ Answer <span>*</span></label>
								<input type="text" class="form-control unicase-form-control text-input"  name="faq_answer"  required>
							</div>

							<div class="form-group">
								<label class="info-title" for="password">Password. <span>*</span></label>
								<input type="password" class="form-control unicase-form-control text-input" id="password" name="password" required>
							</div>

							<div class="form-group">
								<label class="info-title" for="confirmpassword">Confirm Password. <span>*</span></label>
								<input type="password" class="form-control unicase-form-control text-input" id="confirmpassword" name="confirmpassword" required>
							</div>
							<button style="margin:20px;" type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button" id="submit">Sign Up</button>
						</form>
						<div class="col-12">
							<div style="text-align:center;" id="forget">
								<a  href="login.php">Login User</a>
							</div>
						</div>
					</div>
					<!-- create a new account -->
				</div><!-- /.row -->
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/cutome.js"></script>
	<!-- For demo purposes – can be removed on production : End -->
</body>

</html>