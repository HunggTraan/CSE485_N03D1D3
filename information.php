<?php
	session_start();
	$Username = $_SESSION['Username'];
	$db = mysqli_connect("localhost","root","","soulmate");
	$records = mysqli_query($db,"SELECT * FROM account WHERE Username = '$Username'");
	$rows = mysqli_num_rows($records);
	if ($rows == 1) {
		$field = mysqli_fetch_assoc($records);
	}
	if(isset($_POST['submit'])) {
		$Fullname = $_POST['Fullname'];
		$Address = $_POST['Address'];
		$ContactNumber = $_POST['ContactNumber'];
		$Email = $_POST['Email'];
		$Age = $_POST['Age'];
		$query3 = mysqli_query($db, "UPDATE account SET Fullname ='$Fullname', Address = '$Address', ContactNumber = '$ContactNumber', Email = '$Email', Age ='$Age' WHERE Username = '$Username'");
    	$query2=mysqli_fetch_array($records); 
	} 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Css/Information.css">
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title> Information </title>
</head>
<body class="main">
	<div class="Container">
		<div class="Information-Form padding-top">
			<div class="Table Table2">
				<div class="Left-Table">
					<h1>User Profile</h1>
					<div>
						<a href="Information.php" class="btn btn-link">Edit Profile</a>
					</div>
					<div>
						<a href="upload.php" class="btn btn-link">Upload</a>
					</div>
					<div>
						<a href="changepass.php" class="btn btn-link">Change Password</a>
					</div>
					<div>
						<a href="homepage.php" class="btn btn-link">Go Back</a>
					</div>
				</div>
				<div class="Right-Table">
					<h1>Profile</h1>
					<form class="User-Profile-Form" method="POST" action="information.php">
						<div class="User-Profile-Table">
							<label for="Username"><b>Full Name: </b></label>
							<div>
								<input type="Text" name="Fullname" value="<?php echo $field['Fullname']; ?>">
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
							<input type="submit" name="submit" value="Edit User" class="btn btn-info">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>