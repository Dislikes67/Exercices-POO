<?php

spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

$paysF = new Pays ("France");
$paysE = new Pays ("Espagne");
$paysA = new Pays ("Argentine");
$paysI = new Pays ("Italie");

$joueurK = new Joueur ("Killian", "Mbappe", 24, "France");
$joueurC = new Joueur ("Cristiano", "Ronaldo", 37, "Portugal");
$joueurL = new Joueur ("Lionel", "Messi", 34, "Argentine");
$joueurN = new Joueur ("Neymar", "Junior", 32, "Bresil");

$equipeP = new Equipe ("PSG", 1970, $paysF);
$equipeRc = new Equipe ("Racing Club Stras", 1906, $paysF);
$equipeB = new Equipe ("FC Barcelone", 1899, $paysE);
$equipeJ = new Equipe ("Juventus", 1897, $paysI);
$equipeM = new Equipe ("Manchester United", 1878, $paysA);
$equipeRm = new Equipe ("Real Madrid", 1902, $paysE);

$carriere1 = new Carriere ("2017-01-01",$equipeP, $joueurK);

$carriere2a = new Carriere ("2009-01-01",$equipeRm, $joueurC);
$carriere2b = new Carriere ("2018-01-01",$equipeJ, $joueurC);
$carriere2c = new Carriere ("2021-01-01",$equipeM, $joueurC);

$carriere3a = new Carriere ("2004-01-01",$equipeB, $joueurL);
$carriere3b = new Carriere ("2021-01-01",$equipeP, $joueurL);

$carriere4a = new Carriere ("2013-01-01",$equipeB, $joueurN);
$carriere4b = new Carriere ("2017-01-01",$equipeP, $joueurN);


//echo $paysE->equipesDuPays(); OK
echo $carriere2b->detailsCarriere(); // faire foreach
//echo $equipeP->detailsEquipe();


