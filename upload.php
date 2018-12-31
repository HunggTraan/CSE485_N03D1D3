
<!DOCTYPE html>
<html>
<head>
	<title>Gallery Image Insert</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/...">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax..."></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div>
					<h1>Gallery Image Insert</h1>
				</div>
				<form method="Post" enctype="multipart/form-data" onsubmit="return FormValidation();">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="Issue">Gallery Image:</label><br>
								<div style="width: 250px; height: 250px; border: 2px solid #000000; margin-bottom: 20px;">
									<img src="images/noimage.png" style="width: 250px; height: 250px;"><br><br>
								</div>
								<input type="file" accept="image/*" name="ImagesName" id="ImagesName" class="btn btn-success form-control" onchange="previewFile()" />
								<span id="lblmsg" style="color: red;"></span>
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

<!-- IMAGE PREVIEW JAVASCRIPT CODE START HERE -->
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
	var ImagesName = $("#ImagesName").val();
	if (ImagesName == "" || ImagesName == null) {
		$("#ImagesName").css("border", "2px solid red");
		//$("#ImagesName").focus();
		$("#lblmsg").html("Please Choose Gallery Image");
		rtn = false;
		} else {
			$("#ImagesName").css("border", "1px solid #ccc");
			$("#lblmsg").html("");
			}
	return rtn;
}
</script>
</body>
</html>