<?php
	include "db_connection.php";

	$passed_value = $_POST["filtered_value"];

	$sql = "SELECT ID, FName FROM users WHERE FName LIKE '$passed_value%'";
	$result = mysqli_query($connect, $sql);

	if($passed_value != ""){
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo $row["ID"]." ".$row["FName"];
			}
		}
	}
?>