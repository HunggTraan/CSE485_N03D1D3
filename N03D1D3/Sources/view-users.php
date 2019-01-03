<?php
session_start();
  $db = mysqli_connect("localhost", "Admin", "30@12@1998", "soulmate");
  $sql = "SELECT * FROM account";
  $records = mysqli_query($db,$sql);
/*  $field = mysqli_fetch_assoc($records);
  while($field === TRUE){
      echo "<tr>";
      echo "<td>".$rows['ID']."</td>";
      echo "<td>".$rows['Username']."</td>";
      echo "<td>".$rows['Fullname']."</td>";
      echo "<td>".$rows['Email']."</td>";
      echo "<td>".$rows['Address']."</td>";
      echo "<td>".$rows['ContactNumber']."</td>";
      echo "<td>".$rows['Age']."</td>";
      echo "<td>".$rows['AccessLevel']."</td>";
      echo "</tr>";
  } */
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <?php
 echo "<h1>Users</h1>";
 if (mysqli_num_rows($records) > 0) {
    echo "<table class='table table-hover table-responsive table-bordered'>";
     echo "<tr>";
        echo "<th>Username</th>";
        echo "<th>Fullname</th>";
        echo "<th>Email</th>";
        echo "<th>ContactNumber</th>";
        echo "<th>AccessLevel</th>";
    echo "</tr>";
    // output data of each row
    while($rows = mysqli_fetch_assoc($records)) {
         echo "<tr>";
            echo "<td>" .$rows["Username"];
            echo "<td>" .$rows["Fullname"];
            echo "<td>" .$rows["Email"];
            echo "<td>" .$rows["ContactNumber"];
            echo "<td>" .$rows["AccessLevel"];
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

 ?>
 <a href="adminpage.php" class="btn btn-info">Go back</a>
</body>
</html>