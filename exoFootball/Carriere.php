<?php

class Carriere{
    private DateTime $dateSaison;
    private Equipe $equipe;
    private Joueur $joueur;
}


    public function __construct(string $dateSaison, Equipe $equipe, Joueur $joueur){
        $this->dateSaison = new DateTime($dateSaison);
        $this->equipe = $equipe;
        $this->joueur = $joueur;

        $this->equipe->ajouterCarriere($this);
        $this->joueur->ajouterCarriere($this);
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

    public function afficherCarriere() {
        $result=
    }
