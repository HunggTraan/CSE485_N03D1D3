<?php
	session_start();
	session_destroy();
	$_SESSION['message'] = 'Logged out';
	header("location: index.php");
?>