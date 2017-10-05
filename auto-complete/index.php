<?php
	
	include "db_connection.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Auto complete</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div id="container_box">
		<h1>Auto complete</h1>
		<div class="search_container_box">
			<span>Search</span>
			<input type="text" name="country_search_value" id="input_search" placeholder="Enter a country name..."/>
			<button id="clearText">X</button>
			<div id="countries_result_div"></div>
		</div>
	</div>
</body>
</html>