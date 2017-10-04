<?php
	include "db_connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Search Filter</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">

		body{
			padding: 0;
			margin: 0;
		}

		.search_sec{
			margin-right: auto;
			margin-left: auto;
			width: 80%;
			padding: 10px;
			display: flex;
		}

		input[type=text]{
			width: 100%;
			padding: 10px;
		}

		.key_input{			
		}

		.filter_container{
			color: #000;
			height: auto;
			margin-right: auto;
			margin-left: auto;
			width: 80%;
			padding: 30px;
		}

		.filter_fixedTxt{
			background: #ccc;
			padding: 10px;
			float: left;
			border: 1px solid #ABB2B9;
			border-radius: 10px 0 0 10px;
		}


	</style>

<script type="text/javascript">
	$(document).ready(function(){
			var entered_filtered_value = $(".key_input").attr("value");
			console.log(entered_filtered_value);

		$(".key_input").on("keyup",function(){
			//console.log("test");
			var entered_filtered_value = $(this).val();
			//console.log(entered_filtered_value);

			$.ajax({
				url: "display_data.php",
				method: "post",
				data: {"filtered_value" : entered_filtered_value},
				success: function(data){
					if(entered_filtered_value != ""){
						$("#display_sec").html(data);
					}
					else{
						$("#display_sec").html("");
					}
				}
			});
		});
	});
</script>
</head>
<body>

	<div class="filter_container">
	<form method="post" action="index.php">
		<div class="search_sec">
			<span class="filter_fixedTxt">Search</span>
			<input type="text" name="key_input" class="key_input" value="">
		</div>
	</form>
	</div>

	<div>
		<p id="display_sec"></p>
	</div>
</body>
</html>