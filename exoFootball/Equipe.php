<?php

class Equipe {
    private Pays $pays;  // Lier pays à equipe étant donné que l'on a un tableau equipe dans pays
    private int $anneeCreation;
    private array $pays = [];

    public function __construct(string $joueur, int $anneeCreation){
        $this->joueur = $joueur;
        $this->anneeCreation = $anneeCreation;
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


    public function addPays(Pays $pays) {
        $this->pays[] = $pays;
    }


    public function __toString() : string{
        return $this->nomEquipe;
    }

    public function afficherEquipe() {
        $result="$this,
    }
}