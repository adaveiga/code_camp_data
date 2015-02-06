$.ajax(function()
{
	url: "php/script.php",
	type: "GET",
	success : function (data) 
	{
		var tab = jQuery.parseJSON(data);
		var len = tab.length;
		$("#p1").click(function() {
			$('#div1').remove();
			produits_laitiers(tab);
		});
		$("#p2").click(function() {
			$('#div2').remove();
			fruits_legumes(tab);
		});
		$("#p3").click(function() {
			$('#div3').remove();
			boissons(tab);
		});
		$("#p4").click(function() {
			$('#div4').remove();
			viandes_poissons(tab);
		});
		$("#p5").click(function() {
			$('#div5').remove();
			plats(tab);
		});
		$("#p6").click(function() {
			$('#div6').remove();
			autres(tab);
	},
	error : function (data)
	{
		console.log(data);
	}
});

function produits_laitiers(tab)
{
	jQuery('<div/>', {
					id : "div1"
				}).insertBefore("#button1");
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
				}).appendTo("#div1");
				jQuery('<br/>').appendTo("#div1");
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

/*function fruits_legumes(tab)
{
	jQuery('<div/>', {
					id : "div2"
				}).insertBefore("#button2");
	for (var i = 0; i < 1496; i++)
		{
			if (tab.ORIGGPFR[i].substr(0, 6) == "Fruits" || 
				tab.ORIGGPFR[i].substr(0, 8) == "Légumes" || 
				tab.ORIGGPFR[i].substr(0, 15) == "Pommes de terre")
			{
				jQuery('<a/>', {
					id : i
				}).appendTo("#div2");
				jQuery('<br/>').appendTo("#div2");
				$("#" + i).text(tab.ORIGFDNM[i]);
		}
	}
}

function fruits_legumes(tab)
{
	jQuery('<div/>', {
					id : "div3"
				}).insertBefore("#button3");
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
				}).appendTo("#div3");
				jQuery('<br/>').appendTo("#div3");
				$("#" + i).text(tab.ORIGFDNM[i]);
		}
	}
}

function fruits_legumes(tab)
{
	jQuery('<div/>', {
					id : "div4"
				}).insertBefore("#button4");
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
				}).appendTo("#div4");
				jQuery('<br/>').appendTo("#div4");
				$("#" + i).text(tab.ORIGFDNM[i]);
		}
	}
}

function fruits_legumes(tab)
{
	jQuery('<div/>', {
					id : "div5"
				}).insertBefore("#button5");
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
				}).appendTo("#div5");
				jQuery('<br/>').appendTo("#div5");
				$("#" + i).text(tab.ORIGFDNM[i]);
		}
	}
}

function autres(tab)
{
	jQuery('<div/>', {
					id : "div6"
				}).insertBefore("#button6");
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
				}).appendTo("#div6");
				jQuery('<br/>').appendTo("#div6");
				$("#" + i).text(tab.ORIGFDNM[i]);
		}
	}
}

*/