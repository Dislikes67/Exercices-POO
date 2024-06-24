<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$auteur1 = new Auteur ("Stephen", "King");  // instances d'auteurs

$livre1 = new Livre ("Ca", 1986, 1138, 20, $auteur1);
$livre2 = new Livre ("Simetierre",1983,374,15, $auteur1);
$livre3 = new Livre ("Le Fléau",1978, 823,14, $auteur1);  // instances livres
$livre4 = new Livre ("Shining", 1977,447,16, $auteur1);
$livre = new Livre ("Test", 2024,447,16, $auteur1);

echo $auteur1->afficherBiblio() ."<br>";

