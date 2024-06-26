<?php

class Carriere{
    private int $dateSaison;
    private array $equipe = [];
    private array $joueur = [];
}


    public function __construct(int $dateSaison){
        $this->dateSaison = $datesaison;
    }


    public function getDateSaison() {
        return $this->dateSaison;
    }
    public function setDateSaison() {
        $this->dateSaison = $dateSaison;
        return $this;
    }


    public function addEquipe(Equipe $equipe) {
        $this->equipe[] = $equipe;
    }

    public function addJoueur(Joueur $joueur) {
        $this->joueur[] = $joueur;
    }


