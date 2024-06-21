<?php

require_once "Livre.php";
require_once "Auteur.php";

$auteur = new Auteur ("Stephen", "King");

$livre1 = new livre ("Ca", 1986, 1138, 20);
$livre2 = new livre ("Simetierre",1983,374,15);
$livre3 = new livre ("Le Fléau",1978, 823,14);
$livre4 = new livre ("Shining", 1977,447,16);

$livres = [$livre1]

echo $livre1->afficherBibliographie();

