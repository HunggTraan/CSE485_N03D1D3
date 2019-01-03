<?php 
session_start();
$db = mysqli_connect("localhost","root","","soulmate");
if(isset($_SESSION['Username'])) {
	header("location: homepage.php");
}
else if(isset($_SESSION['AccessLevel']) && $_SESSION['AccessLevel'] == "Admin") {
	header("location: adminpage.php");
}
else if(isset($_POST['login_btn'])){
	$Username = $_POST['txtUsername'];
	$Password = $_POST['txtPassword'];
	$result = mysqli_query($db,"SELECT * FROM account WHERE Username = '$Username' AND Password = '$Password'");
	$rows = mysqli_num_rows($result);
	if (mysqli_num_rows($result) == 1) {
		$logged_in_user = mysqli_fetch_assoc($result);
		if ($logged_in_user['AccessLevel'] == 'Admin') {

			$_SESSION['Username'] = $logged_in_user;
			header("location: adminpage.php");
		} else {
			$_SESSION['message'] = "";
			$_SESSION['Username'] = $Username;
			$_SESSION['Email'] = $Email;
			$_SESSION['Address'] = $Address;
			$_SESSION['Fullname'] = $Fullname;
			$_SESSION['Age'] = $Age;
			header("location: homepage.php");
		}
	}
	else {
		$_SESSION['message'] = "Failed to login";
	}
}
?>
<!-- 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Login</title>
</head>
<body>
	<div class="Login_container">
		<form class="login_btn form-new" method="POST" action="login.php">
			<div class="container">
				<div class="Table3">
					<img src="Pictures/logo.png">
					<?php
					//if(isset($_SESSION['message'])) {
					//	echo "<div id='error-msg'>".$_SESSION['message']."</div>";
					//	unset($_SESSION['message']);
					//}
					?>				
					<input type="text" placeholder="Username" name="Username">
					<input type="password" placeholder="Password" name="Password">
					<button class="green_btn login_btn" type="submit" name="login_btn">Đăng nhập</button><br>
					<a href="signup.php">Don't have an account ?</a><br>
					<a href="#">Forgot Password ?</a>
				</div>
			</div>
		</form>
	</div>

	<div align="center">
		form
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>


-->

<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="shortcut icon" type="image/x-icon" href="https://unsplash.com/favicon.ico">
</head>
<body >
	<div class="padding-login">
		<div class="container-fluid" align="center">
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<div id="form_login">
						<form class="login_btn form-new" method="POST" action="login.php">
							<div class="padding-sly" style="padding-bottom: 15px;padding-top: 50px">
								<h1 class="site-title" style="font-size: 65px">
									<a href="index.php">My Soulmate</a>
								</h1>
								<p class="site-tiny">Hello</p>
							</div>
							<b style="font-size:23px">Đăng nhập</b>
							<p style="margin-bottom: 34px; font-size: 14px;">Mừng bạn quay trở lại.</p>
							
								<div id="para">
									<p align="left" style="margin-bottom: 3px; margin-left: 28px;">Tài khoản </p>
									<input type="text" id="txtUsername" name="txtUsername" style="height: 40px;"/>
									<p align="left" style="margin-bottom: 3px; margin-left: 28px">Mật khẩu</p>
									<input type="password" id="txtPassword" name="txtPassword" style="height: 40px;"/>
								</div>
								<button class="green_btn login_btn" type="submit" name="login_btn">Đăng nhập</button><br>
							</div>
						</form>
					</div>

					<div class="col-md-3">
					</div>
				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="JS/customs.js"></script>
		<script src="JS/checklogin.js"></script>
	</body>
	</html>