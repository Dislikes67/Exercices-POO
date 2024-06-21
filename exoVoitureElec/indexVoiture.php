<?php

require_once "Voiture2.php";
require_once "VoitureElec.php";



$voiture1 = new Voiture2("Peugeot", "308");
$voitureElec = new VoitureElec("BMW", "I3", 150);





echo $voiture1->afficherInfos() . "<br>";
echo $voitureElec->afficherInfos() . "<br>";



?>
