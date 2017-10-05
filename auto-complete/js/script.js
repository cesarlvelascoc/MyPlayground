$(document).ready(function(){

	//console.log("Test");

	//The keyup event occurs when a keyboard key is released.
	$("#input_search").keyup(function(){
		//console.log("value changed");
		var search_parameter = $(this).val();
		//console.log(search_parameter);

		$.ajax({
			url: "./fetch_countries.php",
			method: "POST",
			data: {"search_parameter_post" : search_parameter},
			success: function(html){

				//check if there is text inside the input field.
				//IF there is text inside
				if(search_parameter != ""){
					$("#countries_result_div").fadeIn();
					$("#clearText").fadeIn();
					$("#countries_result_div").html(html);
				}
				else{
					$("#clearText").fadeOut();
					$("#countries_result_div").html("");	
				}
			}
		});
	});

	$(document).on("click", "li", function(){
		$("#input_search").val($(this).text());
		$("#countries_result_div").fadeOut();
	});

	$("#clearText").click(function(){
		$("#input_search").val("");
		$("#countries_result_div").fadeOut();
		$("#clearText").fadeOut();
	});
});