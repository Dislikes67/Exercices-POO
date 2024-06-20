<h1>Exercice 5</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une classe VoitureElec qui hérite de la classe Voiture et qui a une propriété supplémentaire (autonomie).</p>

<?php

class VoitureElec  extends Voiture2 {

    private int $autonomie;

    public function __construct(string $marque, string $modele, int $autonomie) {
        parent::__construct($marque, $modele);
        $this->autonomie = $autonomie;
    }

    public function getAutonomie(): int {
        return $this->autonomie;
    }

    public function setAutonomie() {
        $this->autonomie = $autonomie;
    }

    public function afficherInfos() {
        return parent::infos() . "Autonomie du véhicule : $this->autonomie";
    }























}
    




















?>


