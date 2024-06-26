<?php

class Joueurs{
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance


    public function __contruct(string $prenom, string $nom, string $dateNaissance){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
    }


    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom
        return $this;
    }


    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }


    public function getDateNaissance(){
        return $this->dateNaissance->format("d/m/Y");
    }
    public function setDateNaissance(){
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

}