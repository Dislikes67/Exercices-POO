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

    public function getAnneeSaison() {
        return $this->dateSaison->format("Y");
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
    
    public function detailsCarrieres(): string {
        $result = $this->joueur() . '<br>'.
                        $this->joueur->getOrigine() . " - " . $this->joueur->getAge() . " ans" . '<br>' .
                        $this->equipe->getNomEquipe() . " (" . $this->dateSaison->format('Y') . ")";
        }

}
?>

</body>
</html>
