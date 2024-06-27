<?php

class Joueur{
    private string $nom;
    private string $prenom;
    private string $origine;
    private int $age;
    private array $pays = [];


    public function __contruct(string $prenom, string $nom, int $age, string $origine){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }


    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }


    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }


    public function getAge(){
        return $this->age;
    }
    public function setAge(){
        $this->age = $age;
        return $this;
    }


    public function getOrigine(){
        return $this->origine;
    }
    public function setOrigine(){
        $this->origine = $origine;
        return $origine;
    }


    public function addPays(Pays $pays) {
        $this->pays[] = $pays;
    }



    public function __toString() {
        return $this->prenom ." ". $this->nom;
    }



}