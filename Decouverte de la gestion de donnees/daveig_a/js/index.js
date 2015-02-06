$.ajax(
{
	url: "php/script.php",
	type: "GET",
	success : function (data) 
	{
		//console.log(data);
		//var tab = .parseJson(data);
		console.log(data);
		var len = data.length;
		for (var i = 0; i < len; i++)
		{
			if (data.ORIGGPFR[i].substr(0, 8) == "Fromages" /*|| 
				data->ORIGGPFR[i].substr(0, 5) == "Laits" || 
				data->ORIGFDNM[i].substr(0, 4) == "Lait" || 
				data->ORIGGPFR[i].substr(0, 6) == "Yaourt" || 
				data->ORIGFDNM[i].substr(0, 6) == "Yaourt" || 
				data->ORIGFDNM[i].substr(0, 6) == "Beurre" || 
				data->ORIGFDNM[i].substr(0, 6) == "Crème" || 
				data->ORIGGPFR[i].substr(0, 6) == "Crème"*/)
			{
				$.("#p1").append("div");
				$.("#p1 > div:last-child").attr("id", i);
				$.("#" + i).text(data->ORIGFDNM[i]);
			}
		}
	},
	error : function (data)
	{
		console.log(data);
	}
});