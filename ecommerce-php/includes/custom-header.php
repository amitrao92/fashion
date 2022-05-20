<?php
if (isset($_GET['cid'])) {
  $idd = $_GET['cid'];
  //echo $idd;
}
?>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/main.app">
<!-- <link rel="stylesheet" href="css/media.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
<style>
  .headone .head_one_inner .right .search .seacrg_iin{
    width: calc(90% - 160px);
    float: left;
    margin-right: 15px;
}

.headone .head_one_inner .right .search .for_user {
     width: 450px !important; 
}
</style>
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
                        <a href="my-account.php"><i class="far fa-user"></i></a></li>
                        <?php if (strlen($_SESSION['login']) == 0) {   ?>
                         <li> <a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
                        <?php } else { ?>
                          <?php if (strlen($_SESSION['login'])) {   ?>
                           <li> <?php echo htmlentities($_SESSION['username']); ?></li>
                          <?php } ?>
                          <li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
                        <?php } ?>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">

        <?php if ($idd == 12) {
        ?>
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
           <?php } elseif ($idd == 13) { ?>
          <div class="navigation_inn for_women">
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
          </div> <?php } ?>

      </div>
    </div>
  </div>
</section>
<!-----------header--end-end----->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="js/cutome.js"></script>