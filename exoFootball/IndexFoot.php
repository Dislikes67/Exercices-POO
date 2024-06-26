<?php

spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

$joueurK = new Joueur ("Killian", "Mbappe", 24, "France");
$joueurC = new Joueur ("Cristiano", "Ronaldo", 37, "Portugal");
$joueurL = new Joueur ("Lionel", "Messi", 34, "Argentine");
$joueurN = new Joueur ("Neymar", "Junior", 32, "Bresil");

$equipeP = new Equipe (PSG, )
$equipeRc = new
$equipeB = 
$equipeJ = 
$equipeM = 
$equipeRm = 

$paysF = new Pays ("France");
$paysE = new Pays ("Espagne");
$paysA = new Pays ("Argentine");
$paysI = new Pays ("Italie");

