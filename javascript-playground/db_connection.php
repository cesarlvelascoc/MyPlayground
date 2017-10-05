<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$schema = "myplayground";

	$connect = mysqli_connect($servername, $username, $password, $schema);

	if(!$connect){
		echo "Error connecting to database schema".mysqli_connect_error();
	}

?>