<?php
$db = new mysqli("localhost", "Admin", "30@12@1998", "soulmate");

if ($db->connect_error) {
	die("Sorry, there was a problem connecting to our database.");
}

$Username = stripslashes(htmlspecialchars($_GET['Username']));
$message = stripslashes(htmlspecialchars($_GET['message']));

if ($message == "" || $Username == "") {
	die();
}

$result = $db->prepare("INSERT INTO messages VALUES('',?,?)");
$result->bind_param('ss', $Username, $message);
$result->execute();