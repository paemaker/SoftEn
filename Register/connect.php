<?php
	//for MySQLi OOP
	// $conn = new mysqli('localhost','i6133035_wp2','E.Pi4X94CF0KWQoF95S64','i6133035_wp2'); 
	$conn = new mysqli('127.0.0.1', 'root', '', 'soften');
	$conn->set_charset("utf8");
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
?>