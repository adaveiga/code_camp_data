$.ajax(
    {
        url: "php/script.php",
        type: "GET",
        success : function (data)
        {
            var tab = jQuery.parseJSON(data);
	}
    });

function class_produits(tab_class)
{
    for (var i = 0; i < 1496; i++)
    {
	tab_class.ORIGFDNM[i];
    }
}