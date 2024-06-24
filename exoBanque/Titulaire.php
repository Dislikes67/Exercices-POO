<?php

class Titulaire{
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $compte;

    public function __construct(string $prenom, string $nom, string $dateNaissance, string $ville){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville = $ville;
    }

    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }


    public function getPrenom() {
        return $this->prenom;
    }
    public function setPrenom() {
        $this->prenom = $prenom;
        return $this;
    }


    public function getDateNaissance() {
        return $this->dateNaissance->format("d/m/Y");
    }
    public function setDteNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }


    public function getVille() {
        return $this->ville;
    }
    public function setVille($ville) {
        $this->ville = $ville;
        return $this;   
    }

//calculer l'age du titulaire à partir de sa date de naissance
    public function getAge(): string{
        $age = date_diff(($this->dateNaissance), new DateTime());
        return $age->format("%Y ans");
    }

//ajouter un compte à chaque fois que l'on en crée un au nom de ce titulaire
    public function addCompte(Compte $compte) {
        $this->comptes[] = $compte;
    }

    public function __toString() {
        return "$this->prenom $this->nom";
    }

    public function afficherTitulaire() {
        $result="$this, né(e) le : ".$this->getDateNaissance()." (".$this->getAge()."), habitant à $this->ville, est titulaire des comptes suivants :<br>";
        foreach($this->comptes as $compte){
            $result.=$compte."<br>";
        }
        return $result;
    }
}