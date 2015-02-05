<?php
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