<?php

if (isset($_Get['action'])) {
	if (!empty($_SESSION['cart'])) {
		foreach ($_POST['quantity'] as $key => $val) {
			if ($val == 0) {
				unset($_SESSION['cart'][$key]);
			} else {
				$_SESSION['cart'][$key]['quantity'] = $val;
			}
		}
	}
}
?>
<style type="text/css">
	.nav-bg-class {
		background-color: black;
	}


	.headone .head_one_inner {
		display: flex;
		align-items: center;
	}

	.headone .head_one_inner .left {
		width: 100px;
		float: left;
	}

	.headone .head_one_inner .left .logo {
		width: 100px;
		height: 100px;
		border-radius: 50%;
		overflow: hidden;
	}

	.headone .head_one_inner .left .logo a img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.headone .head_one_inner .right {
		width: calc(100% - 100px);
		float: left;
		padding-left: 30px;
		margin-top: 15px;
	}

	.headone .head_one_inner .right .type {
		display: flex;
		float: left;
		width: 170px;
	}

	.headone .head_one_inner .right .type .women {
		margin-right: 10px;
	}

	.headone .head_one_inner .right .type .women p a {
		color: #000;
	}

	.headone .head_one_inner .right .type .men p a {
		color: #000;
	}

	.headone .head_one_inner .right .name {
		float: left;
	}

	.headone .head_one_inner .right .name p {
		font-size: 20px;
		font-weight: 600;
	}

	.headone .head_one_inner .right .search {
		float: left;
		width: calc(100% - 170px);
		display: flex;
	}
	.navigation_inn .navbar-nav .nav-item a {
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    height: 100%;
}
	.headone .head_one_inner .right .search .login {
		border: 2px solid #f87b29;
		padding: 5px 30px;
		text-align: center;
		color: #000;
		transition: 0.3s ease;
	}

	.headone .head_one_inner .right .search .login:hover {
		background-color: #f87b29;
		transition: 0.3s ease;
	}

	.headone .head_one_inner .right .search .login a {
		color: #000;
	}

	.headone .head_one_inner .right .search .seacrg_iin {
		width: calc(100% - 160px);
		float: left;
		margin-right: 15px;
	}

	.headone .head_one_inner .right .search .for_user {
		width: 200px;
		float: left;
	}

	.headone .head_one_inner .right .search .for_user ul li {
		display: inline-block;
		padding-right: 20px;
	}

	.headone .head_one_inner .right .search .for_user ul li a {
		color: #000;
		font-size: 20px;
	}

	.navigation_inn {
		margin-top: 10px;
		background-color: #000;
		padding-left: 150px;
	}
</style>
<?php include('includes/custom-header.php'); ?>


		