<?php
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

$result = file_get_contents('test.json');

$json = json_decode($result);



print_r($json);

//$json = json_encode($result);

//file_put_contents("test.json", $json);

?>