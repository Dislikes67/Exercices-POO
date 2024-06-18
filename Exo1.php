<h1>Exercice 1</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance.</p>



<?php

$naissance = 17/01/1985;
$date = 21/05/2018;

$age = date_diff($naissance, $date);

echo $age->format ("L'age de la personne est ");








?>