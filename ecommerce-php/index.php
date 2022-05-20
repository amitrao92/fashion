<?php
session_start();
$idd = "cid=12";
error_reporting(0);
include('includes/config.php');
if (isset($_GET['action']) && $_GET['action'] == "add") {
  $id = intval($_GET['id']);
  if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['quantity']++;
  } else {
    $sql_p = "SELECT * FROM products WHERE id={$id}";
    $query_p = mysqli_query($con, $sql_p);
    if (mysqli_num_rows($query_p) != 0) {
      $row_p = mysqli_fetch_array($query_p);
      $_SESSION['cart'][$row_p['id']] = array("quantity" => 1, "price" => $row_p['productPrice']);
    } else {
      $message = "Product ID is invalid";
    }
  }
  echo "<script>alert('Product has been added to the cart')</script>";
  echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
  <title>WARDROBE</title>
</head>

<body>

  <!---------header--start-here----->
  <section class="header top-space">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="headone">
            <div class="head_one_inner">
              <div class="left">
                <div class="logo">
                  <a href="index.php"><img src="img/logo.jpg" alt=".." /></a>
                </div>
              </div>
              <div class="right">
                <div class="type">
                  <div class="women">
                    <p>
                      <a href="new_in.php?cid=13" id="women"> Women </a>
                    </p>
                  </div>
                  <div class="men">
                    <p>
                      <a href="new_in-m.php?cid=12" id="men">
                        men
                      </a>
                    </p>
                  </div>
                </div>
                <div class="search">
                  <div class="seacrg_iin">
                    <form name="search" method="post" action="search-result.php">
                      <div class="form-group">
                        <input type="text" class="form-control" id="search" name="product" placeholder="Search">
                      </div>
                    </form>
                  </div>
                  <div class="for_user">
                    <ul>
                      <li>
                        <a href="my-wishlist.php"><i class="far fa-heart"></i></a>
                      </li>
                      <li>
                        <?php
                        if (!empty($_SESSION['cart'])) {
                        ?>
                          <a href="my-cart.php"><span class="count"><?php echo $_SESSION['qnty']; ?></span><i class="far fa-shopping-bag"></i></a>
                        <?php } else { ?>
                          <a href="my-cart.php"><i class="far fa-shopping-bag"></i><span class="count">0</span></a>
                        <?php } ?>
                      </li>
                      <li>
                        <a href="my-account.php"><i class="far fa-user"></i></a>
                        <?php if (strlen($_SESSION['login']) == 0) {   ?>
                          <a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a>
                        <?php } else { ?>
                          <?php if (strlen($_SESSION['login'])) {   ?>
                            <?php echo htmlentities($_SESSION['username']); ?>
                          <?php } ?>
                          <a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a>
                        <?php } ?>
                        </li>
                    </ul>


                  </div><!-- /.cnt-account -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">


        <div class="navigation_inn for_men">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid px-0">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="new_in-m.php?cid=12">New in</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="clothing-m.php?cid=12">Clothing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="fashion-week-m.php?cid=12">Fashion week</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="mens.php?cid=12">Men's Sale</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
        <div class="navigation_inn for_women d-none">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid px-0">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="new_in.php?cid=13">New in</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="clothing.php?cid=13">Clothing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="fashion-week.php?cid=13">Fashion week</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="womens.php?cid=13">WomenMen Sale</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>






      </div>
    </div>
    </div>
  </section>
  <!-----------header--end-end----->

  <section class="off">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="off_sect">
            <h2>50% OFF ON EVERYTHING</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="banner_slide">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 p-0">
          <div class="slider_area">
            <div class="banner_sliders">
              <div class="img_area">
                <div class="img_box">
                  <img src="img/banner_01.jpg" alt=".." />
                </div>
              </div>
              <div class="img_area">
                <div class="img_box">
                  <img src="img/banner_02.jpg" alt=".." />
                </div>
              </div>
              <div class="img_area">
                <div class="img_box">
                  <img src="img/banner_03.jpg" alt=".." />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer>
    <div class="foot_in">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                <div class="row">
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="links">
                      <div class="head">
                        <h5>
                          Get Help
                        </h5>
                      </div>
                      <div class="link_under">
                        <ul>
                          <li>
                            <a href="#">help center</a>
                          </li>
                          <li>
                            <a href="javascript:;">track orders</a>
                          </li>
                          <li>
                            <a href="javascript:;">shipping info</a>
                          </li>
                          <li>
                            <a href="javascript:;">contact us</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="links">
                      <div class="head">
                        <h5>
                          Company
                        </h5>
                      </div>
                      <div class="link_under">
                        <ul>
                          <li>
                            <a href="javascript:;">Career</a>
                          </li>
                          <li>
                            <a href="javascript:;">About</a>
                          </li>
                          <li>
                            <a href="javascript:;">What to</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="links">
                      <div class="head">
                        <h5>
                          Quick links
                        </h5>
                      </div>
                      <div class="link_under">
                        <ul>
                          <li>
                            <a href="javascript:;">Gift Cards</a>
                          </li>
                          <li>
                            <a href="javascript:;">Size Guids</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12">
                <div class="links">
                  <div class="head">
                    <h5>
                      Sign up for Discount + updates
                    </h5>
                    <p>
                      By signup up for email , you agree to Fashion By signup up for email , you agree to Fashion
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="js/cutome.js"></script>
</body>

</html>