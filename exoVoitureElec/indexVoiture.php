<?php

require_once "Voiture2.php";
require_once "VoitureElec.php";



$Voiture1 = new Voiture2("Peugeot", "308");
$VoitureElec = new VoitureElec("BMW", "I3", 150);





echo $Voiture1->afficherInfos() . "<br>";
echo $VoitureElec->afficherInfos() . "<br>";



?>
