<?php

spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

$joueurK = new Joueur ("Killian", "Mbappe", 24, "France");
$joueurC = new Joueur ("Cristiano", "Ronaldo", 37, "Portugal");
$joueurL = new Joueur ("Lionel", "Messi", 34, "Argentine");
$joueurN = new Joueur ("Neymar", "Junior", 32, "Bresil");

$equipeP = new Equipe ("PSG", 1970, $paysF);
$equipeRc = new Equipe ("Racing Club Stras", 1906, $paysF);
$equipeB = new Equipe ("FC Barcelone", 1899, $paysE);
$equipeJ = new Equipe ("Juventus", 1897, $paysI);
$equipeM = new Equipe ("Manchester United", 1878, $paysA);
$equipeRm = new Equipe ("PSG", 1902, $paysE);

$paysF = new Pays ("France");
$paysE = new Pays ("Espagne");
$paysA = new Pays ("Argentine");
$paysI = new Pays ("Italie");

