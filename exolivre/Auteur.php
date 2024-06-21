<?php

class Auteur{
    private string $prenom;
    private string $nom;

    public function __construct(string $prenom, string $nom){

        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    public function getPrenom() : string{
        return $this->prenom;
    }

    public function getNom() : string{
        return $this->nom;
    }



    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }


    public function afficherBibliographie(array $livres): string {
        $result = "Livres de" . $this->auteur."<br>";
        foreach ($livres as $livre) {
            if ($livre->getAuteur() == $this){
                $result .= $livre . "<br>"; 
            
            }
        }
        return $result;
    }

    public function __toString() : string {
        return "$this->auteur";
    }
}