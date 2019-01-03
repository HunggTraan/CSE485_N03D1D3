<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Css/information.css">
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
						<a href="information.php" class="btn btn-link">Edit Profile</a>
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
					<h1>Change Password</h1>
					<form class="Password-Change-Form">
						<div class="Password-Div">
							<label for="Current-Password"><b>Current Password: </b></label>
							<div>
								<input type="Password" name="Current-Password">
							</div>
						</div>
						<div class="Password-Div">
							<label for="New-Password"><b>New Password: </b></label>
							<div>
								<input type="Password" name="New-Password">
							</div>
						</div>
						<div class="Password-Div">
							<label for="New-Password"><b>Retype New Password: </b></label>
							<div>
								<input type="Password" name="New-Password">
							</div>	
						</div>
						<div class="Button">
							<button class="btn btn-info">Change</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>