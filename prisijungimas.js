/* https://stackoverflow.com/questions/18523569/storing-input-from-user-into-database */

$("#submit").click(function(){
	$.post($("#prisijungimas").attr("action"), $("#prisijungimas:input").serializeArray())
});

$("#prisijungimas").submit(function(){return false});
