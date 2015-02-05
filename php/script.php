<?php
$json = file_get_contents('liste_json.json');
$tab = json_decode($json);
echo $tab;
?>