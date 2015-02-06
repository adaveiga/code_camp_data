$.ajax(
{
	url: "php/script.php",
	type: "GET",
	success : function (data) 
	{
		var tab = jQuery.parseJSON(data);
		var len = tab.length;
		$("#p1").click(function() {
			if ($('#p1').child != undefined)
				$('#p1').child.remove();
			produits_laitiers(tab);
		});	
	},
	error : function (data)
	{
		console.log(data);
	}
});

function produits_laitiers(tab)
{
for (var i = 0; i < 1496; i++)
		{
			if (tab.ORIGGPFR[i].substr(0, 8) == "Fromages" || 
				tab.ORIGGPFR[i].substr(0, 5) == "Laits" || 
				tab.ORIGFDNM[i].substr(0, 4) == "Lait" || 
				tab.ORIGGPFR[i].substr(0, 6) == "Yaourt" || 
				tab.ORIGFDNM[i].substr(0, 6) == "Yaourt" || 
				tab.ORIGFDNM[i].substr(0, 6) == "Beurre" || 
				tab.ORIGFDNM[i].substr(0, 6) == "Crème" || 
				tab.ORIGGPFR[i].substr(0, 6) == "Crème")
			{
				jQuery('<a/>', {
					id : i
				}).insertBefore("#button1");
				jQuery('<br/>').insertBefore("#button1");
				$("#" + i).text(tab.ORIGFDNM[i]);
			}
	// 		$("#" + i).click(function(){
	// 			element(i);
	// 		});
		}
	// $("#button1").click(function (){
	// 	$("#pf1").remove("div");
	//});
}

//element
