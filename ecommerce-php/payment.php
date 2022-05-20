<?php
session_start();
error_reporting(0);
//$user_id = $_SESSION['id'];

include('includes/config.php');
	// Code contactus
  $user_id = $_GET['user_id'];

if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address =  $_POST['address'];
  $country =  $_POST['country'];
	$provienc =  $_POST['provienc'];
	$cardholder_name =  $_POST['cardholder_name'];
	$card_num =  $_POST['card_num'];
	$expire_date =  $_POST['expire_date'];
  $cvv =  $_POST['cvv'];
  $user_id = $_POST['user_id'];

	$query = mysqli_query($con, "insert into online_payment(fname,lname,email,phone,address,country,provienc,cardholder_name,card_num,expire_date,cvv,user_id)
   values('$fname','$lname','$email','$phone','$address','$country','$provienc','$cardholder_name','$card_num','$expire_date','$cvv','$user_id')");
   
		mysqli_query($con, "update orders set 	paymentMethod='" . $_POST['paymethod'] . "' where userId='" . $_SESSION['id'] . "' and paymentMethod is null ");
		unset($_SESSION['cart']);
	if ($query) {
		echo "<script>alert(' successfull');</script>";
    		//header('location:order-history.php');

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
	<meta name="description" content="">

	<title>My Cart</title>
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

	<link rel="stylesheet" href="assets/css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />

	<!-- Demo Purpose Only. Should be removed in production -->
	<link rel="stylesheet" href="assets/css/config.css">
	<!-- Icons/Glyphs -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">
	<style>
    .form-group {
    padding: 7px;
}
#myline{
  border: 1px solid green;;
}
button#procees {
    padding: 10px;
}
  </style>
</head>
<body class="cnt-home">
	<!-- ============================================== HEADER ============================================== -->
	<header class="header-style-1">
		<?php include('includes/top-header.php'); ?>
		<?php include('includes/main-header.php'); ?>
		<?php //include('includes/menu-bar.php');
		?>
	</header>
  <br id="myline">
  <hr style="border:1px solid balack;">
  <section class="login_set" id="Payment">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="row">
                      <div class=" col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-12 m-auto">
                          <div class="login_set_inn">
                              <div class="head">
                                  <h5>
                                     Payment details
                                  </h5>
                              </div>
                              <form method="post" action="">
                                  <div class="row">
                                    <input type="hidden" name="user_id" value="<?php echo $user_id?>">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="firsr" name="fname" placeholder="First"  required />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="form-group">
                                              <input type="text" class="form-control" id="Last" name="lname" placeholder="Last Name"  required />
                                          </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"  required />
                                        </div>
                                    </div>
                                      <div class="col-12">
                                        <div class="form-group">
                                            <input type="tel" class="form-control js-input-mobile"  maxlength="10" id="number" name="phone" placeholder="Phone Number"  required />
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Address"  required />
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                        <select class="form-select" aria-label="Default select example" name="country"  required / >
                                            <option selected>Country</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Uk">Uk</option>
                                            <option value="China">China</option>
                                            </select>
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                          <select class="form-select" aria-label="Default select example" name="provienc"  required />
                                            <option selected>Province</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                      </div>
                                        
                                        <div class="col-12">

                                            <div class="form-group">
                                                <input type="text" class="form-control" id="Cardholder" name="cardholder_name" placeholder="Cardholder name"  required />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="form-group">
                                              <input type="tel"  class="js-input-mobile form-control" maxlength="16" id="Cardnumber" name="card_num" placeholder="Card Number"  required />
                                          </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                            <input type="tel" minlength="1" maxlength="5" class="js-input-mobile form-control" id="date" name="expire_date" placeholder="Exp Dte"  required />
                                        </div>
                                      </div>
                                      <div class="col-6">
                                        <div class="form-group">
                                            <input type="tel" maxlength="3" class="js-input-mobile form-control" id="cvv" name="cvv" placeholder="CVV"  required />
                                        </div>
                                      </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" name="submit" class="btn-primary" id="procees">Procees to Payment</button>
                                            </div>
                                        </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <?php include('includes/footer.php'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/cutome.js"></script>



</body>

</html>