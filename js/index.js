var functions = {
	produits_laitiers: function (tab) {
		jQuery('<div/>', {
			id : "div1"
		}).insertBefore("#button1");
		jQuery('<img/>', {
			src: "img/icons/produits_laitiers.png"
		}).appendTo("#div1");
		jQuery('<br/>').appendTo("#div1");
		for (var i = 0; i < 1496; i++) {
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
		jQuery('<br/>').appendTo("#div1");
	},
	fruits_legumes: function (tab) {
	jQuery('<div/>', {
					id : "div2"
				}).insertBefore("#button2");
	jQuery('<img/>', {
			src: "img/icons/fruits_legumes.png"
		}).appendTo("#div2");
	jQuery('<br/>').appendTo("#div2");
	for (var i = 0; i < 1496; i++) {
			if (tab.ORIGGPFR[i].substr(0, 6) == "Fruits" || 
				tab.ORIGGPFR[i].substr(0, 8) == "Légumes" || 
				tab.ORIGGPFR[i].substr(0, 15) == "Pommes de terre") {
				jQuery('<a/>', {
					class : "item",
					id : i
				}).appendTo("#div2");
				jQuery('<br/>').appendTo("#div2");
				$("#" + i).text(tab.ORIGFDNM[i]);
			}
		}
		jQuery('<br/>').appendTo("#div2");
	},
	boissons: function(tab) {
	jQuery('<div/>', {
					id : "div3"
				}).insertBefore("#button3");
		jQuery('<img/>', {
			src: "img/icons/boissons.png"
		}).appendTo("#div3");
	jQuery('<br/>').appendTo("#div3");
	for (var i = 0; i < 1496; i++) {
			if (tab.ORIGFDNM[i] == "Eau du robinet" ||
				tab.ORIGGPFR[i].substr(0, 9) == "Cocktails" ||
				tab.ORIGGPFR[i].substr(0, 3) == "Jus" ||
				tab.ORIGGPFR[i].substr(0, 8) == "Liqueurs" ||
				tab.ORIGGPFR[i].substr(0, 4) == "Vins" ||
				tab.ORIGGPFR[i].slice(-6) == "alcool") {
				jQuery('<a/>', {
					class : "item",
					id : i
				}).appendTo("#div3");
				jQuery('<br/>').appendTo("#div3");
				$("#" + i).text(tab.ORIGFDNM[i]);
			}
		}
		jQuery('<br/>').appendTo("#div3");
	},
	viandes_poissons: function (tab) {
	jQuery('<div/>', {
					id : "div4"
				}).insertBefore("#button4");
	jQuery('<img/>', {
		src: "img/icons/viandes_poissons.png"
	}).appendTo("#div4");
	jQuery('<br/>').appendTo("#div4");
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
		jQuery('<br/>').appendTo("#div4");
	},
	plats: function (tab) {
	jQuery('<div/>', {
		id : "div5"
	}).insertBefore("#button5");
	jQuery('<img/>', {
		src: "img/icons/plats.png"
	}).appendTo("#div5");
	jQuery('<br/>').appendTo("#div5");
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
		jQuery('<br/>').appendTo("#div5");
	},
	autres: function(tab) {
	jQuery('<div/>', {
					id : "div6"
				}).insertBefore("#button6");
	jQuery('<img/>', {
		src: "img/icons/autres.png"
	}).appendTo("#div6");
	jQuery('<br/>').appendTo("#div6");
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
};

var func_array = { 
	0: functions.produits_laitiers,
	1: functions.fruits_legumes,
	2: functions.boissons,
	3: functions.viandes_poissons,
	4: functions.plats,
	5: functions.autres
};

function details(tab, id)
{
	var images = {  0 : "produits_laitiers", 1 : "fruits_legumes", 2 : "boissons",
					3 : "viandes_poissons", 4 : "plats", 5 : "autres"
	}
	var length = $('.item').length;
	for(i = 0; i < length; i++)
		(function (i){
			$($('.item')[i]).click(function(){
				$('#div'+ id).remove();
				var id_elem = ($(this).attr('id'));
				console.log(images[id_elem]);
				// jQuery("<img/>", {
				// 	src : "img/icons/" + images[id_elem - 1] + ".png"
				// }).insertBefore("#button" + id);
				jQuery("<h1>", {
					text : tab["ORIGFDNM"][id_elem],
					css : { color : 'green' }
				}).insertBefore("#button" + id);
				jQuery("<h3>", {
					text : tab["ORIGGPFR"][id_elem]
				}).insertBefore("#button" + id);
				jQuery("<table/>", {
				 	id : "table_details",
				 	class : "table"
				}).insertBefore("#button" + id);
				var x = 0;
				for (key in tab) {
					if (key != "ORIGFDCD" && key != "ORIGGPCD"
						&& key != "ORIGFDNM" && key != "ORIGGPFR"
				 		&& key.substr(0, 11) != "332 Energie"
						&& key.substr(0, 11) != "333 Energie") {
						$("#table_details").append("<tr class=\"tr1\">");
						$("#table_details > tbody > tr:last-child").append("<td>");
						$("#table_details > tbody > tr:last-child > td").text(key);
						$("#table_details > tbody > tr:last-child").append("<td>");
						$("#table_details > tbody > tr:last-child > td:last-child").text(tab[key][id_elem]);
					}
				}
			})
	}) (i);
}

$.ajax(
{
	url: "php/script.php",
	type: "GET",
	success : function (data) 
	{
		var tab = jQuery.parseJSON(data);
		var length = $('.portfolio-link').length;
		for(i = 0; i < length; i++)
			(function(i){
				$($('.portfolio-link')[i]).click(function(){
					window[func_array[i](tab)];
					details(tab, i + 1);
				});
			})(i);
	},
	error : function (data)
	{
		console.log(data);
	}});