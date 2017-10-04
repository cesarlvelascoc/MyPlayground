<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_schema = "finalproject_test";


	$connect = mysqli_connect($servername, $username, $password, $db_schema);

	if(!$connect){
		echo "Not possible to connect to db";
	}

?>