<?php

class Equipe {
    private Joueur $joueur
    private int $anneeCreation


    public function __construct(string $joueur, int $anneeCreation){
        $this->joueur = $joueur
        $this->anneeCreation = $anneeCreation
    }

    public function getJoueur(){
        return $this->joueur;
    }
    public function setJoueur($joueur){
        $this->joueur = $joueur;
        return $this;
    }


    public function getAnneeCreation(){
        return $this->anneeCreation;
    }
    public function setAnneeCreation($anneeCreation){
        $this->anneeCreation = $anneeCreation;
        return $this;
    }

    public function __toString() : string{
        return "$this->"
    }

    public function afficherEquipe() {
        $result="$this,
    }
}