<?php

class Auteur {
    private string $prenom;
    private string $nom;
// Création du tableau
    private array $bibliographie;


    public function __construct(string $prenom, string $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->bibliographie = [];
    }
                                                        
    public function getPrenom() : string{
        return $this->prenom;
    }

    public function getNom() : string{
        return $this->nom;
    }

    public function getBiblio(): array{
        return $this->bibliographie;
    }


    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }

    public function setBiblio(array $bibliographie){
        $this->bibliographie = $bibliographie;
        return $this;
    }

//Méthode qui permet d'ajouter un objet livre au tableau dés qu'il est crée avec l'objet auteur en paramètre
    public function addLivre(Livre $livre) {
        $this->bibliographie[] = $livre;
    }

    public function afficherBiblio(): string {
        $result = "<h1>Livres de $this</h1><br><br>";
        foreach ($this->bibliographie as $livre){
                $result .= $livre . "<br>"; 
            
            }
        return $result;
    }

    public function __toString() : string {
        return $this->prenom . " " . $this->nom;
    }
}