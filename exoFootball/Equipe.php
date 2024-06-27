<?php

class Equipe {
    private Pays $pays;  // Lier pays à equipe étant donné que l'on a un tableau equipe dans pays
    private DateTime $anneeCreation;
    private string $nomEquipe;
    private array $carieres; // Lier carriere à equipe 


    public function __construct(Pays $pays, string $nomEquipe, int $anneeCreation){
        $this->pays = $pays;
        $this->anneeCreation = new DateTime($anneeCreation);
        $this->nomEquipe = $nomEquipe;
        $this->pays->ajouterEquipe($this); // ajouter equipe depuis pays car c'est là qu'est le tableau equipe
        $this->carieres = []; // ajouter le tableau carriere à equipe
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
        $carieres = "" ;

        foreach($this->carieres as $carriere){
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
            . $this->anneeCreation->format('Y') . '</br>';

        foreach($this->carrieres as $carriere){ 
            $result .= "<li>$carriere</li>";
        }
        $result = "</ul> ";
}





















}