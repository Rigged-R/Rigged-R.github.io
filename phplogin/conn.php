<?php
	$conn = mysqli_connect("localhost", "root", "", "phplogin");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>