<?php

class Voiture2 {

    protected string $marque;
    protected string $modele;

    public function __construct(string $marque, string $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque() : string {
        return $this->marque;
    }

    public function getModele() : string {
        return $this->modele;
    }



    public function setMarque(string $marque){
        return $this->marque;
    }
    
    public function setModele(string $modele) {
        $this->modele = $modele;
    }


    public function afficherInfos() {
        return  "<p>Nom et modèle du véhicule : $this->marque $this->modele</p>";
    }

    public function __toString() {
        return "$this->marque $this->modele";
    }
}

$Voiture1 = new Voiture2("Peugeot", "308");
$VoitureElec = new VoitureElec("BMW", "I3 150");
echo $Voiture1->afficherInfos() . "<br>";
echo $VoitureElec->afficherInfos() . "<br>";
?>