<?php
	$db = mysqli_connect("localhost","root","","soulmate");
	if (isset($_POST['signup_btn'])) {
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
		$Password_Confirm = $_POST['Password_Confirm'];
		$Email = $_POST['Email'];
		$Fullname = $_POST['Fullname'];	
		$Address = $_POST['Address'];
		$ContactNumber = $_POST['ContactNumber'];
		$Age = $_POST['Age'];
		$AccessLevel = 'Member';
		if ($Password == $Password_Confirm) {
			$sql = "INSERT INTO account(Username, Password, Email, Fullname, Address, ContactNumber, Age, AccessLevel) values ('$Username', '$Password', '$Email', '$Fullname', '$Address', '$ContactNumber', '$Age', '$AccessLevel')";
		$users	= mysqli_query($db,$sql);
		if($users === TRUE) {
			echo "true";
		} else { echo "false" .$sql ."<br>" .$db->error;}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="right-table">
					<h1>Register</h1>
					<form method="POST" action="testing.php">
						<div class="input-form">
							<label for="Username"><b>Username: </b></label>
							<div>
								<input type="Text" placeholder="Enter Username" name="Username" pattern=".{6,}" required>
							</div>
						</div>
						<div class="input-form">
							<label for="Password"><b>Password: </b></label>
							<div>
								<input type="Password" placeholder="Enter Password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
							</div>
						</div>
						<div class="input-form">
							<label for="Password_Confirm"><b>Confirm Password: </b></label>
							<div>
								<input type="Password" placeholder="Enter Password Again " name="Password_Confirm" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
							</div>	
						</div>
						<div class="input-form">
							<label for="Email"><b>Email: </b></label>
							<div>
								<input type="Text" placeholder="Your email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
							</div>
						</div>
						<div class="input-form">
							<label for="Fullname"><b>Full Name: </b></label>
							<div>
								<input type="Text" placeholder="Your Full Name" name="Fullname">
							</div>
						</div>
						<div class="input-form">
							<label for="Address"><b>Address: </b></label>
							<div>
								<input type="Text" placeholder="Your Address" name="Address">
							</div>
						</div>
						<div class="input-form">
							<label for="ContactNumber"><b>Contact Number: </b></label>
							<div>
								<input type="Text" placeholder="Yoooo Number" name="ContactNumber">
							</div>
						</div>
						<div class="input-form">
							<label for="Age"><b>Age: </b></label>
							<div>
								<input type="Text" placeholder="Yoooo" name="Age">
							</div>
						</div>
						<div class="clearfix">
							<a href="index.php">Hủy bỏ</a>
							<button type="Submit" class="signup_btn" name="signup_btn">Đăng ký</button>
						</div>
					</form>
				</div>
</body>
</html>