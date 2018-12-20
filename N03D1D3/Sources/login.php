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
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$result = mysqli_query($db,"SELECT * FROM account WHERE Username = '$Username' AND Password = '$Password'");
		$rows = mysqli_num_rows($result);
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['message'] = "logged in";
			$_SESSION['Username'] = $Username;
			$_SESSION['Email'] = $Email;
			$_SESSION['Address'] = $Address;
			$_SESSION['Fullname'] = $Fullname;
			$_SESSION['Age'] = $Age;
			header("location: homepage.php");}
			 else {
			$_SESSION['message'] = "Failed to login";
			echo "Failed to login";
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/information.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/Loginform.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Login</title>
</head>
<body class="main">
	<div class="Container padding">
		<form class="login_btn form-new" method="POST" action="login.php">
			</label>
			<div class="container">
				<div class="Table3">
					<img src="Pictures/logo.png">
					<?php
						if(isset($_SESSION['message'])) {
						echo "<div id='error-msg'>".$_SESSION['message']."</div>";
						unset($_SESSION['message']);
						}
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
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>