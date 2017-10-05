$(document).ready(function(){

	//get value of a class
	var byClassTxt = $(".testClass").val();
	//get value of a class
	var byIdTxt = $("#testId").val();
	//get class of an id
	var getClassByID = $("#testId").attr("class");	
	//get class of an id
	var getIdByClass = $(".testClass").attr("id");

	console.log("Get value by class:" + byClassTxt);
	console.log("Get value by id:" + byIdTxt);
	console.log("Get class of an id element:" + getClassByID);
	console.log("Get id of a class element:" + getIdByClass);

	document.getElementById("output_sec").innerHTML = "Get value by class:" + " " + byClassTxt + "<br/>" + "Get value by id:" + " " + byIdTxt + "<br/>" + "Get class by id:" + " " + getClassByID + "<br/>" + "Get id by class:" + " " + getIdByClass;

	//get what element id has been clicked inside a div id container
	$("#inputFields").on("click", "input", function(){
		var inputClicked = $(this).attr("id");
		alert(inputClicked);
	});
});