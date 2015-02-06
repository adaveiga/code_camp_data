$.ajax(
{
	url : "../php/script.php",
	type : "GET",
	success : function (data) 
	{
		console.log(data);
	}
});