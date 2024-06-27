<?php

class Equipe {
    private Pays $pays;  // Lier pays à equipe étant donné que l'on a un tableau equipe dans pays
    private int $anneeCreation;
    private string $nomEquipe;
    private array $joueurs = [];

    public function __construct(Pays $pays, string $nomEquipe, string $joueur, int $anneeCreation){
        $this->joueur = $joueur;
        $this->anneeCreation = $anneeCreation;
    }

    public function getPays(){
        return $this->pays;
    }
    public function setPays($pays){
        $this->pays = $pays;
        return $this;
    }


    public function getNomEquipe(){
        return $this->nomEquipe;
    }
    public function setNomEquipe($nomEquipe){
        $this->nomEquipe = $nomEquipe;
        return $this;
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
        return $this->nomEquipe;
    }
}