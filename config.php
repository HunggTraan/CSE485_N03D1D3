<?php
$Hostname = "localhost";
$Username = "root";
$Password = "";
$db = "soulmate";
try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$Hostname;dbname=$db", $Username, $Password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} catch(PDOException $e) {
    //show error
    echo("Error: " . $e->getMessage());
}