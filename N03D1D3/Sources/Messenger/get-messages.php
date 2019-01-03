<?php
$db = new mysqli("localhost", "Admin", "30@12@1998", "soulmate");

if ($db->connect_error) {
	die("Sorry, there was a problem connecting to our database.");
}

$Username = stripslashes(htmlspecialchars($_GET['Username']));

$result = $db->prepare("SELECT * FROM messages");
$result->execute();

$result = $result->get_result();
while ($r = $result->fetch_row()) {
	echo $r[1];
	echo "\\";
	echo $r[2];
	echo "\n";
}