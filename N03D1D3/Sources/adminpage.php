<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin page</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="Css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Css/Login.css">
	<script src="js/Login.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body style="overflow: hidden;">
	<?php
	if(isset($_SESSION['message'])) {
		echo "<div id='error-msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
	?>
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container box_1620">
					<a class="navbar-brand logo_h" href="index.php"><img style="width: 50%" src="Pictures/logo.png" alt=""></a>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="homepage.php">Trang chủ</a></li> 
							<li class="nav-item"><a class="nav-link" href="view-users.php">Thành viên</a></li>
							<li class="nav-item"><a class="nav-link" href="logout.php">Đăng xuất</a></li>
							</ul>
						</div> 
					</div>
				</nav>
			</div>
		</header>

		<section class="home_banner_area">
			<div class="banner_inner d-flex align-items-center">
				<div class="overlay bg-parallax"></div>
				<div class="container">
			</section>

		</body>
		</html>