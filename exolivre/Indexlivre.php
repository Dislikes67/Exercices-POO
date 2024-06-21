<?php

require_once "Livre.php";
require_once "Auteur.php";

$auteur1 = new Auteur ("Stephen", "King");  // instances d'auteurs

$livre1 = new Livre ("Ca", 1986, 1138, 20);
$livre2 = new Livre ("Simetierre",1983,374,15);
$livre3 = new Livre ("Le Fléau",1978, 823,14);  // instances livres
$livre4 = new Livre ("Shining", 1977,447,16);

$livres = [$livre1, $livre2, $livre3, $livre4, $livre5];

echo $auteur1->afficherBibliographie($livres) ."<br>";

