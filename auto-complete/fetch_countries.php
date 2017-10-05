<?php
	
	include "db_connection.php";

	$search_paremeter_value = $_POST['search_parameter_post'];

	$sql = "SELECT country_name FROM countries WHERE country_name LIKE '$search_paremeter_value%'";
	$result = mysqli_query($connect, $sql);

	if(mysqli_num_rows($result) > 0){
		echo "<ul>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<li>";
			echo $row['country_name'];
			echo "</li>";
		}
		echo "</ul>";
	}
?>