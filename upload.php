<?php
session_start();
$db = mysqli_connect("localhost","root","","soulmate");
$msg = "";
if(isset($_POST['Submit'])) {
	$Imagesname = $_FILES['Imagesname']['name'];
	$target = "images/".basename($Imagesname);
	$About = $_POST['About'];
	$text = mysqli_real_escape_string($db,$_POST['About']); 
	$sql = "INSERT INTO photos (Image,About) VALUES ('$Imagesname,$text')";
	$sql = "INSERT INTO photos (Image, About) VALUES ('$Imagesname', '$text')";
	mysqli_query($db, $sql);
	if (move_uploaded_file($_FILES['Imagesname']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		error.html("<p>Upload ảnh thành công</p>");
	} else {
		$msg = "Failed to upload image";
		error.html("<p>Upload ảnh thành công</p>");
	}	
}
$result = mysqli_query($db, "SELECT * FROM photos");
$result = mysqli_query($db, "SELECT * FROM photos"); 
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
					<form method="Post" enctype="multipart/form-data" action="upload.php" onsubmit="return FormValidation();">
						<div class="row">
							<div class="col-md-3" style="margin-right: -460px;">
								<div class="form-group">
									<div style="width: 250px; height: 250px; border: 2px solid #000000; margin-bottom: 20px;">
										<img src="images/noimage.jpg" style="width: 250px; height: 250px;"><br><br>
									</div>
									<input type="file" accept="image/*" name="Imagesname" id="Imagesname" class="btn btn-success form-control" onchange="previewFile()" />
									<span id="lblmsg" style="color: red;"></span><br/>
									<label>Giới thiệu bản thân: </label><textarea rows="5" cols="100" name="About"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<input type="submit" name="Submit" id="Submit" value="Submit" class="btn btn-info">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		function previewFile() {
			var preview = document.querySelector('img');
			var file = document.querySelector('input[type=file]').files[0];
			var reader = new FileReader();
			reader.addEventListener("load", function () {
				preview.src = reader.result;
			}, false);
			if (file) {
				reader.readAsDataURL(file);
			}
		}

		function FormValidation() {
			rtn = true;
			var Imagesname = $("#Imagesname").val();
			if (Imagesname == "" || Imagesname == null) {
				$("#Imagesname").css("border", "2px solid red");
 		//$("#Imagesname").focus();
 		$("#lblmsg").html("Please Choose Gallery Image");
 		rtn = false;
 	} else {
 		$("#Imagesname").css("border", "1px solid #ccc");
 		$("#lblmsg").html("");
 	}
 	return rtn;
 }
</script>
</body>
</html>