<?php
session_start();
$Username = $_SESSION['Username'];
$db = mysqli_connect("localhost", "Admin", "30@12@1998", "soulmate");
$records = mysqli_query($db,"SELECT Image, About FROM `photos` ORDER BY RAND() LIMIT 1");
$rows = mysqli_num_rows($records);
if($rows==1){
		$field = mysqli_fetch_assoc($records);
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Css/style.css">
	<link rel="stylesheet" type="text/css" href="../Css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid finding-body">
		<div class="row">
			<div class="col-md-6">
				<h3 id="h3-text">
					Ồ, bạn đã tìm thấy một người này
				</h3>
				<div class="text-build" name="About"  >
					<?php echo $field['About']; ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="image-show">
					<img name="Image" src="../images/<?php echo $field['Image']; ?>" style="width: 400px; height: 500px" >
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn_finding">
					<a class="green_btn" href="../Messenger/index.php">Trò chuyện</a>
					<a class="org_btn" href="find.php">Tìm người khác</a>
				</div>
			</div>
			<div class="col-md-6">			
			</div>
		</div>
	</div>
</body>
</html>