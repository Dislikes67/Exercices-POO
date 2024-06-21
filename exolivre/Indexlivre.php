<?php

require_once "Livre.php";
require_once "Auteur.php";

$auteur = new Auteur ("Stephen", "King");

$Livre1 = new Livre ("Ca", 1986, 1138, 20);
$Livre2 = new Livre ("Simetierre",1983,374,15);
$Livre3 = new Livre ("Le Fléau",1978, 823,14);
$Livre4 = new Livre ("Shining", 1977,447,16);

echo $Livre1->afficherBibliographie();

