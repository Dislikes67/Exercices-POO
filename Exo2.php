<h1>Exercice 2</h1>

<p>Ecrire une fonction personnalisé qui affiche une date en français (en toutes lettres) à partir d'une chaîne de caractères représentant une date.</p>


<?php

class FormateurDateFr{  //Cette classe est conçue pour formater une date en français.
    private $date;  //Cette propriété privée stocke la date.

    public function __construct($date) { //Le constructeur initialise la propriété $date en créant un objet DateTime à partir de la chaîne de caractères passée en paramètre.
        $this-> date = new DateTime($date);
    }

    public function formaterDateFr() {
        $formateurDate = new IntlDateFormatter(
        'fr_FR',                        //Cette méthode crée un IntlDateFormatter pour formater la date selon le format français (fr_FR).
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE);
        return $formateurDate->format($this->date); // Elle utilise la propriété $date pour obtenir la date à formater.
        }
}

$date = "2018-02-23";        //Ici, une instance de la classe FormateurDateFr est créée avec la date définie.
                            // Ensuite, la méthode formaterDateFr est appelée sur cette instance pour formater et afficher la date en français.
$formateur = new FormateurDateFr($date);
echo $formateur->formaterDateFr();

?>