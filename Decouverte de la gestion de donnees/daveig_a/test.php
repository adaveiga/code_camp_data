<?php
function lire_csv($nom_fichier, $separateur =";"){
    $row = 0;
    $donnee = array();    
    $f = fopen($nom_fichier,"r");
    $taille = filesize($nom_fichier)+1;
    while ($donnee = fgetcsv($f, $taille, $separateur)) {
        $result[$row] = $donnee;
        $row++;
    }
    fclose ($f);
    return $result;
}

$result = lire_csv('Ciqual_2013.csv');
var_dump($result);

?>