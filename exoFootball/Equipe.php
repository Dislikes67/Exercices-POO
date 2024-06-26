<?php

class Equipe {
    private Joueurs $joueurs
    private int $anneeCreation


    public function __construct(string $joueurs, int $anneeCreation){
        $this->joueurs = $joueurs
        $this->anneeCreation = $anneeCreation
    }

    public function getJoueurs(){
        return $this->joueurs;
    }
    public function setJoueurs($joueurs){
        $this->joueurs = $joueurs;
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