<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football</title>
    <link href="exoFootball.css" rel="stylesheet">
</head>
<body>
    
<?php

class Equipe {
    private Pays $pays;  // Lier pays à equipe étant donné que l'on a un tableau equipe dans pays
    private int $anneeCreation;
    private string $nomEquipe;
    private array $carrieres = []; // Lier carriere à equipe 


    public function __construct(string $nomEquipe, int $anneeCreation, Pays $pays){
        $this->pays = $pays;
        $this->nomEquipe = $nomEquipe;
        $this->anneeCreation =$anneeCreation;
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


    public function detailsEquipe(){

        $result = "<div class='card'>";     //Inclusion de class CSS type 'card'
        $result .= "<h2>$this->nomEquipe</h2>"
            . $this->pays . " - "
            . $this->anneeCreation . '<br><br><br>';

        $result .= "<ul>";
        foreach($this->carrieres as $carriere){ 
        $result .= "<li>".$carriere->getJoueur()." ".$carriere->getAnneeSaison()."</li>";
        }
        $result .= "</ul>";
        $result .= "</div>";
       return $result;
    }

    public function __toString() {
        return $this->nomEquipe;
    }
}

?>

</body>
</html>



































