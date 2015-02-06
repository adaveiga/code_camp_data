$.ajax(
{
	url: "php/script.php",
	type: "GET",
	success : function (data) 
	{
		var tab = jQuery.parseJSON(data);
		var len = tab.length;
		console.log(len);
		//var test = 1;
		// for (var i = 0; i < len; i++)
		// {	
		// 	if (test == 1tab.ORIGGPFR[i].substr(0, 8) == "Fromages" || 
		// 		tab.ORIGGPFR[i].substr(0, 5) == "Laits" || 
		// 		tab.ORIGFDNM[i].substr(0, 4) == "Lait" || 
		// 		tab.ORIGGPFR[i].substr(0, 6) == "Yaourt" || 
		// 		tab.ORIGFDNM[i].substr(0, 6) == "Yaourt" || 
		// 		tab.ORIGFDNM[i].substr(0, 6) == "Beurre" || 
		// 		tab.ORIGFDNM[i].substr(0, 6) == "Crème" || 
		// 		tab.ORIGGPFR[i].substr(0, 6) == "Crème")
		// 	}
		// 		console.log("ok");
		// 		jQuery('<div/>', {
		// 		}).insertBefore("#button1");
		// 		$("#p1").text(tab.ORIGFDNM[i]);
		// 	}
		// }
	},
	error : function (data)
	{
		console.log(data);
	}
});