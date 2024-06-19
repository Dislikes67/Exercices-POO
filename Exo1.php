<h1>Exercice 1</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance.</p>



<?php

class CalculerAge{                   // Création d'une class.
    private $naissance;               // La classe contient deux propriétés privées qui stock dates de naissance + date actuelle.
    private $date;                   


    public function __construct($naissance,$date) {
        $this-> naissance = new DateTime($naissance); //Le constructeur initialise les propriétés $naissance et $date -
        $this-> date = new DateTime($date);             //- en créant des objets DateTime à partir des chaînes de caractères passées en paramètres.
    }

    public function calculerAge() {             //Cette méthode calcule la différence date de naissance et date de référence en utilisant la - 
        $age = $this-> naissance->diff($this->date); //- méthode diff de la classe DateTime.Le résultat est un objet DateInterval qui est ensuite
        return $age->format('%y ans, %m mois, %d jours'); //- formaté en années, mois et jours à l'aide de la méthode format.
    }
}


$naissance = '17-01-1985';  // On crée une instance de la classe CalculerAge en passant les deux dates
$date = '21-05-2018';        
$CalculerAge = new CalculerAge($naissance,$date);   // On appelle la méthode calculerAge pour obtenir l'âge de la personne et on l'affiche.

echo "Age de la personne :" . $CalculerAge->calculerAge();


?>