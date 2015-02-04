<?php
	$lol = file_get_contents("Ciqual_2013.csv");
	preg_match_all("/;(.)*;/", $lol, $matches);
var_dump($matches[1]);