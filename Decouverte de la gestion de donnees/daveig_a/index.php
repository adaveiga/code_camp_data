<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>What's in my food</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>

  <body>

    <header>
      <div class="navbar-inverse navbar-fixed-top">
	<div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">What's in my food</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse" class="bg">
            <ul class="nav navbar-nav">
              <li><a href="#viandes"><?php
//header('Content-Type: application/json; charset=utf-8');

/*function lire_csv($nom_fichier, $separateur =";") {
    $row = 0;
    $donnee = array();    
    $f = fopen($nom_fichier,"r");
    $taille = filesize($nom_fichier)+1;
    while ($donnee = fgetcsv($f, $taille, $separateur)) {
    $result[$row] = $donnee;
    $row++;
    //$donnee[0] = utf8_encode("teét");
    //echo $donnee[0] . " => " . utf8_decode($donnee[0]);
    }
    fclose ($f);
    return $result;
}*/

$result = file_get_contents('liste_json.json');

$json = json_decode($result);

for ($x = 0; isset($json[0][$x]); $x++)
{
    $aliments = [];
    for ($i = 1; isset($json[$i][$x]); $i++)
    {
        $aliments[] = $json[$i][$x];
    }
    $tab[$json[0][$x]] = $aliments;
}

for ($x = 0; isset($tab['ORIGGPFR'][$x]); $x++)
{
    if ($tab['ORIGGPFR'][$x] == 'Abats')
        echo $x+1 . PHP_EOL;
}

// print_r($tab['ORIGGPFR']);

// print_r($json);

//$json = json_encode($result);

//file_put_contents("test.json", $json);

?></a></li>
              <li><a href="#legumes">Legumes</a></li>
              <li><a href="#fruits">Fruits</a></li>
              <form class="navbar-form navbar-right inline-form">
              <div class="form-group">
		<input type="search" class="input-sm form-control" placeholder="Recherche">
		<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
              </div>
            </form>
          </div>
	       </div>
      </div>
    </header>
    <center><div id="buttons">Test</div></center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="test.js"></script>
  </body>
</html>
