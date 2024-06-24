<?php

spl_autoload_register(function($class_name){  // Fonction intégrée en PHP qui enregistre une fonction d'autochargement.
    include $class_name . '.php';  // Cette ligne inclut le fichier correspondant au nom de la classe avec l'extension .php.
});

$titulaire1 = new Titulaire("John", "Doe", "1994-12-29", "Strasbourg");
$compte1 = new Compte("Livret A", 85.50, "€", $titulaire1);
$compte2 = new Compte("LEP", 750, "€", $titulaire1);
echo $titulaire1->afficherTitulaire();

echo"<br>";

echo $compte1->afficherCompte();
$compte1->crediter(15.50);
echo $compte1->afficherCompte();
$compte1->debiter(50);
echo $compte1->afficherCompte();

echo"<br>";

$compte1->virer($compte2, 30);
echo $compte1->afficherCompte();
echo $compte2->afficherCompte();