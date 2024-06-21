<?php

require_once "Voiture2.php";
require_once "VoitureElec.php";



$voiture1 = new voiture2("Peugeot", "308");
$voitureElec = new voitureElec("BMW", "I3", 150);





echo $voiture1->afficherInfos() . "<br>";
echo $voitureElec->afficherInfos() . "<br>";



?>
