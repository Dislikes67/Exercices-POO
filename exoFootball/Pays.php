<?php

class Pays{
    private string $nomPays;
    private array $equipes = [];
    


    public function __construct(string $nomPays){
        $this->nomPays = $nomPays;
    }


    public function getNomPays() {
        return $this->nomPays;
    }
    public function setNomPays($nomPays) {
        $this->nomPays = $nomPays;
        return $this;
    }

    
    public function ajouterEquipe(Equipe $equipe) {
        $this->equipes[] = $equipe;
    }
    

    public function ajouterPays(Pays $pays) {
        $this->pays[] = $pays;
    }

    public function equipesDuPays() {
        $resultat = $this->nomPays . "<br>";  // pour afficher le pays appeler directement $nomPays
        foreach($this->equipes as $equipe) {
        $resultat .= $equipe . "<br>";
        }
       return $resultat;
    }


    public function __toString(){
        return "$this->nomPays";
    }
}
