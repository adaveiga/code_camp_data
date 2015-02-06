$.ajax(
{
	url: "php/script.php",
	type: "GET",
	success : function (data) 
	{
		//console.log(data);
		var tab = $.parseJson(data);
		console.log(data);
	},
	error : function (data)
	{
		console.log(data);
	}
});