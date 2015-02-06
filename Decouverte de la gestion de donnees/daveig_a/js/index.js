$.ajax(
{
	url: "php/script.php",
	type: "GET",
	success : function (data) 
	{
		var tab = jQuery.parseJSON(data);
		var len = tab.length;
		console.log(tab);
		
		for (var i = 0; i < len; i++)
		{	
			if (tab.ORIGGPFR[i].substr(0, 8) == "Fromages"/* || 
				tab.ORIGGPFR[i].substr(0, 5) == "Laits" || 
				tab.ORIGFDNM[i].substr(0, 4) == "Lait" || 
				tab.ORIGGPFR[i].substr(0, 6) == "Yaourt" || 
				tab.ORIGFDNM[i].substr(0, 6) == "Yaourt" || 
				tab.ORIGFDNM[i].substr(0, 6) == "Beurre" || 
				tab.ORIGFDNM[i].substr(0, 6) == "Crème" || 
				tab.ORIGGPFR[i].substr(0, 6) == "Crème"*/)
			{
				jQuery('<div/>', {
					id: i
				}).insertBefore("#button1");
				$("#" + i).text(tab.ORIGFDNM[i]);
			}
		}
	},
	error : function (data)
	{
		console.log(data);
	}
});