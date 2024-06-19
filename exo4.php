<h1>Exercice 4</h1>

<p>Créer une classe voiture possédant les propriétés suivantes: marques, modèle, nbPortes, et vitesseActuelle ainsi que les méthodes démarrer(), accelerer() et stopper() en plus des accesseurs get et set traditionnels.</p>

<?php

class Voiture {
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitessActuelle;
    private bool $OnOff;

    public function __construct(int $numero, string $marque, string $modele, int $nbPortes) {

        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;

        $this->vitesseActuelle = 0;
        $this->OnOff = false;
    }

public function getMarque() : string{
    return $this->marque;
}

public function getModele() : string{
    return $this->modele;
}

public function getNbPortes() : int {
    return $this->nbPortes;
}

public function getVitesseActuelle() : int {
    return $this->vitesseActuelle;
}

public function getOnOff() : bool {
    return $this->onOff;
}
 




}









































?>