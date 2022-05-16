<?php
	require 'conn.php';
 
	$password = $_POST['password'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	if(ISSET($_POST['register'])){
		$username = $_POST['username'];
		$hashed_password;
		$email = $_POST['email'];
 
		mysqli_query($conn, "INSERT INTO `accounts` VALUES('', '$username', '$hashed_password', '$email')") or die(mysqli_error());
		
	}
	
?>