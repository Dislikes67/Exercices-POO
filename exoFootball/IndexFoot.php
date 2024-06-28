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

$carriere1 = new Carriere (2017,$equipeP, $joueurK);

$carriere2a = new Carriere (2009,$equipeRm, $joueurC);
$carriere2b = new Carriere (2018,$equipeJ, $joueurC);
$carriere2c = new Carriere (2021,$equipeM, $joueurC);

$carriere3a = new Carriere (2004,$equipeB, $joueurL);
$carriere3b = new Carriere (2021,$equipeP, $joueurL);

$carriere4a = new Carriere (2013,$equipeB, $joueurN);
$carriere4b = new Carriere (2017,$equipeP, $joueurN);


//echo $paysE->equipesDuPays(); OK
echo $carriere2a->afficherDetails();
