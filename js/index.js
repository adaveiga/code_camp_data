$.ajax(
{
	url: "php/script.php",
	type: "GET",
	success : function (data) 
	{
		var tab = jQuery.parseJSON(data);
		//var len = tab.length;
		var length = $('.portfolio-link').length;
		for(i = 1; i <= length; i++)
		(function(i){
			var functions = ["produits_laitiers", "fruits_legumes", "boissons", "viandes_poissons", "plats", "autres"];
			$($('.portfolio-link')[i]).click(function(){
				$('#div' + i).remove();
				console.log(functions[i - 1]);
				details(tab, i);
			})
		})(i);
		/*$("#p1").click(function() {
			$('#div1').remove();
			produits_laitiers(tab);
			details(tab, 1);
		});
		$("#p2").click(function() {
			$('#div2').remove();
			fruits_legumes(tab);
			details(tab, 2);
		});
		$("#p3").click(function() {
			$('#div3').remove();
			boissons(tab);
			details(tab, 3);
		});
		$("#p4").click(function() {
			$('#div4').remove();
			viandes_poissons(tab);
			details(tab, 4);
		});
		$("#p5").click(function() {
			$('#div5').remove();
			plats(tab);
			details(tab, 5);
		});
		$("#p6").click(function() {
			$('#div6').remove();
			autres(tab);
			details(tab, 6);
		});*/
	},
	error : function (data)
	{
		console.log(data);
	}});

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
					class : "item",
					id : i
				}).appendTo("#div1");
				jQuery('<br/>').appendTo("#div1");
				$("#" + i).text(tab.ORIGFDNM[i]);
			}
		}
}

function fruits_legumes(tab)
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
					class : "item",
					id : i
				}).appendTo("#div2");
				jQuery('<br/>').appendTo("#div2");
				$("#" + i).text(tab.ORIGFDNM[i]);
		}
	}
}

function boissons(tab)
{
	jQuery('<div/>', {
					id : "div3"
				}).insertBefore("#button3");
	for (var i = 0; i < 1496; i++)
		{
			if (tab.ORIGFDNM[i] == "Eau du robinet" ||
				tab.ORIGGPFR[i].substr(0, 9) == "Cocktails" ||
				tab.ORIGGPFR[i].substr(0, 3) == "Jus" ||
				tab.ORIGGPFR[i].substr(0, 8) == "Liqueurs" ||
				tab.ORIGGPFR[i].substr(0, 4) == "Vins" ||
				tab.ORIGGPFR[i].slice(-6) == "alcool")
			{
				jQuery('<a/>', {
					class : "item",
					id : i
				}).appendTo("#div3");
				jQuery('<br/>').appendTo("#div3");
				$("#" + i).text(tab.ORIGFDNM[i]);
		}
	}
}

function viandes_poissons(tab)
{
	jQuery('<div/>', {
					id : "div4"
				}).insertBefore("#button4");
	for (var i = 0; i < 1496; i++)
		{
			if (tab.ORIGGPFR[i] == "Abats" ||
				tab.ORIGGPFR[i] == "Viandes" ||
				tab.ORIGGPFR[i] == "Volailles" ||
				tab.ORIGGPFR[i].substr(0, 12) == "Charcuteries"||
				tab.ORIGGPFR[i].substr(0, 8) == "Poissons" ||
				tab.ORIGGPFR[i].slice(-8) == "poissons")
			{
				jQuery('<a/>', {
					class : "item",
					id : i
				}).appendTo("#div4");
				jQuery('<br/>').appendTo("#div4");
				$("#" + i).text(tab.ORIGFDNM[i]);
		}
	}
}

function plats(tab)
{
	jQuery('<div/>', {
					id : "div5"
				}).insertBefore("#button5");
	for (var i = 0; i < 1496; i++)
		{
			if (tab.ORIGGPFR[i].substr(0, 5) == "Plats" ||
				tab.ORIGGPFR[i].substr(0, 6) == "Pizzas")
			{
				jQuery('<a/>', {
					class : "item",
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
			if (tab.ORIGGPFR[i].substr(0, 5) != "Plats" && tab.ORIGGPFR[i].substr(0, 6) != "Pizzas" &&
				tab.ORIGGPFR[i] != "Abats" && tab.ORIGGPFR[i] != "Viandes" &&
				tab.ORIGGPFR[i] != "Volailles" && tab.ORIGGPFR[i].substr(0, 12) != "Charcuteries" &&
				tab.ORIGGPFR[i].substr(0, 8) != "Poissons" && tab.ORIGGPFR[i].substr(-8) != "poissons" &&
				tab.ORIGGPFR[i] != "Eaux" && tab.ORIGGPFR[i].substr(0, 9) != "Cocktails" &&
				tab.ORIGGPFR[i].substr(0, 3) != "Jus" && tab.ORIGGPFR[i].substr(0, 8) != "Liqueurs" &&
				tab.ORIGGPFR[i].substr(0, 4) != "Vins" && tab.ORIGGPFR[i].slice(-6) != "alcool" &&
				tab.ORIGGPFR[i].substr(0, 6) != "Fruits" &&	tab.ORIGGPFR[i].substr(0, 8) != "Légumes" &&
				tab.ORIGGPFR[i].substr(0, 15) != "Pommes de terre" && tab.ORIGGPFR[i].substr(0, 8) != "Fromages" &&
				tab.ORIGGPFR[i].substr(0, 5) != "Laits" && tab.ORIGFDNM[i].substr(0, 4) != "Lait" &&
				tab.ORIGGPFR[i].substr(0, 6) != "Yaourt" && tab.ORIGFDNM[i].substr(0, 6) != "Yaourt" &&
				tab.ORIGFDNM[i].substr(0, 6) != "Beurre" && tab.ORIGFDNM[i].substr(0, 6) != "Crème" &&
				tab.ORIGGPFR[i].substr(0, 6) != "Crème" && tab.ORIGGPFR[i].slice(-4) != "Inca")
			{
				jQuery('<a/>', {
					class : "item",
					id : i
				}).appendTo("#div6");
				jQuery('<br/>').appendTo("#div6");
				$("#" + i).text(tab.ORIGFDNM[i]);
		}
	}
}

function details(tab, id)
{
	var length = $('.item').length;
	for(i = 0; i < length; i++)
		(function(i){
			$($('.item')[i]).click(function(){
				$('#div'+ id).remove();
				var id_elem = ($(this).attr('id'));
				jQuery("<div/>",{
					id : "div" + id
				}).insertBefore("#button" + id);
				for (var x = 1; x < 63; x++)
				{
				 	jQuery("<p/>",{
				 		id : "c" + x
				 	}).appendTo("#div" + id);
				}
				var i = 1;
				for (key in tab)
				{
					if (key == "ORIGGPFR")
						$("#c" + i).text('Sous catégorie : ' + tab[key][id_elem]);
					else if (key == "ORIGFDNM")
						$("#c" + i).text('Produit : ' + tab[key][id_elem]);
					else if (key != "ORIGFDCD" && key != "ORIGGPCD"
						&& key.substr(0, 11) != "332 Energie"
						&& key.substr(0, 11) != "333 Energie")
					{
						$("#c" + i).text(key + ' : ' + tab[key][id_elem]);
					}
					i++;
				}
			})
		})(i);
}