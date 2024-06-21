<?php

require_once "voiture2.php";
require_once "voitureElec.php";



$Voiture1 = new Voiture2("Peugeot", "308");
$VoitureElec = new VoitureElec("BMW", "I3", 150);





echo $Voiture1->afficherInfos() . "<br>";
echo $VoitureElec->afficherInfos() . "<br>";



?>
