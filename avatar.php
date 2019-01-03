
<html>
<head>
<title>PHP File Upload</title>
</head>
<body>
 
    <form action="avatar.php" enctype="multipart/form-data" method="post">
    Hobby: <input type="text" name="Hobby">
    About Yourself: <input type="textarea" name="About">
    Select image : <input type="file" name="file"><br/>
    <input type="Submit" value="Upload" name="Submit"> <br/>
    <?php
    if(isset($_POST['Submit']))
        { 

        $filepath = "images/" . $_FILES["file"]["name"];
        
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
            {
            echo "<img src=".$filepath." height=200 width=200 />";
            } 
        else 
            {
                echo "Error !!";
            }
        } 
    ?>
    </form>
</body>
</html>