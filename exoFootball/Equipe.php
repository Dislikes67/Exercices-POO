<?php

class Equipe {
    private Pays $pays;  // Lier pays à equipe étant donné que l'on a un tableau equipe dans pays
    private DateTime $anneeCreation;
    private string $nomEquipe;
    private array $carrieres = []; // Lier carriere à equipe 


    public function __construct(string $nomEquipe, int $anneeCreation, Pays $pays){
        $this->pays = $pays;
        $this->nomEquipe = $nomEquipe;
        $this->anneeCreation = new DateTime($anneeCreation);
        $this->pays->ajouterEquipe($this); // ajouter equipe depuis pays car c'est là qu'est le tableau equipe
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


    public function getAnneeCreation(){
        return $this->anneeCreation;
    }
    public function setAnneeCreation($anneeCreation){
        $this->anneeCreation = $anneeCreation;
        return $this;
    }


    public function ajouterCarriere(Carriere $carriere) {
        $this->carrieres[] = $carriere;
    }


    public function listeJoueur(){       //methode pour afficher la liste des joueurs d'une equipe 
        echo "<br> Les joueurs d'une équipe <br>";
        $carrieres = "" ;

        foreach($this->carrieres as $carriere){
            $carrieres.=$carriere->getJoueur()."<br>";
    }
        return $carrieres;

}    
    public function __toString(){
        return $this->nomEquipe."<br>";
    }


    public function afficherJoueur(){

        $result = "<ul> ";
            $this->nomEquipe 
            . $this->pays->getPays() . " - "
            . $this->anneeCreation->format('Y') . '</br>';  // ???????????????

        foreach($this->carrieres as $carriere){ 
            $result .= "<li>$carriere</li>";
        }
        $result = "</ul> ";
}





















}