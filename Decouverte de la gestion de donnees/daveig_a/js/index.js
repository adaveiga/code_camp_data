var tab = [];
$.ajax(
{
	url : "../php/script.php",
	type : "GET",
	success : function (data) 
	{
		tab.push(data);
	}
});
console.log(tab);