/* https://stackoverflow.com/questions/18523569/storing-input-from-user-into-database */

$("#submit").click(function(){
	$.post($("#registracija").attr("action"), $("#registracija:input").serializeArray())
});

$("#registracija").submit(function(){return false});
