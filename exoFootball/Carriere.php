<?php

class Carriere{
    private DateTime $dateSaison;
    private Equipe $equipe;
    private Joueur $joueur;



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
    public function setDateSaison($dateSaison) {
        $this->dateSaison = $dateSaison;
        return $this;
    }


    public function getEquipe() {
        return $this->equipe;
    }
    public function setEquipe($equipe) {
        $this->equipe = $equipe;
        return $this;
    }


    public function getJoueur() {
        return $this->joueur;
    }
    public function setJoueur($joueur){
        $this->joueur = $joueur;
        return $this;
    }


    public function afficherDetails() {
        $resultat = $this->joueur->getPrenom() ." ". $this->joueur->getNom() . '<br>'.
                    $this->joueur->getOrigine() . " - " . $this->joueur->getAge() . " ans" . '<br>' .
                    $this->equipe->getNomEquipe() . " (" . $this->dateSaison->format('Y') . ")"; 
                    
                    
        return $resultat;
    }  
}


