<?php
	session_start();
	$Username = $_SESSION['Username'];
	$db = mysqli_connect("localhost","root","","soulmate");
	$records = mysqli_query($db,"SELECT * FROM account WHERE Username = '$Username'");
	$rows = mysqli_num_rows($records);
	if ($rows == 1) {
		$field = mysqli_fetch_assoc($records);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/information.css">
	<title> Information </title>
</head>
<body class="main">
	<div class="Container">
		<div class="Information-Form padding-top">
			<div class="Table Table2">
				<div class="Left-Table">
					<h1>User Profile</h1>
					<div>
						<a href=""><img src="doge.jpg"></a>
					</div>
					<div>
						<a href="Information.php">Edit Profile</a>
					</div>
					<div>
						<a href="changepass.php">Change Password</a>
					</div>
				</div>
				<div class="Right-Table">
					<h1>Profile</h1>
					<form class="User-Profile-Form">
						<div class="User-Profile-Table">
							<label for="Username"><b>Full Name: </b></label>
							<div>
								<input type="Text" name="Full name" value="<?php echo $field['Fullname']; ?>">
							</div>
						</div>
						<div class="User-Profile-Table">
							<label for="Address"><b>Address: </b></label>
							<div>
								<input type="Text" name="Address" value="<?php echo $field['Address']; ?>">
							</div>
						</div>
						<div class="User-Profile-Table">
							<label for="ContactNumber"><b>Contact Number: </b></label>
							<div>
								<input type="Text" name="ContactNumber" value="<?php echo $field['ContactNumber']; ?>">
							</div>	
						</div>
						<div class="User-Profile-Table">
							<label for="Email"><b>Email: </b></label>
							<div>
								<input type="Text" name="Email" value="<?php echo $field['Email']; ?>">
							</div>
						</div>
						<div class="User-Profile-Table">
							<label for="Age"><b>Age: </b></label>
							<div>
								<input type="Text" placeholder="Yoooo" name="Age" value="<?php echo $field['Age']; ?>">
							</div>
						</div>
						<div class="Button">
							<button class="Edit">Edit User</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>