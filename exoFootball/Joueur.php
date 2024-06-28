<?php

class Joueur{
    private string $nom;
    private string $prenom;
    private int $age;
    private string $origine;
    private array $carrieres = [];


    public function __construct(string $prenom, string $nom, int $age, string $origine){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->origine = $origine;
    }


    public function getPrenom(): string{
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }


    public function getNom(): string{
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }


    public function getAge(): int{
        return $this->age;
    }
    public function setAge(){
        $this->age = $age;
        return $this;
    }


    public function getOrigine(): string{
        return $this->origine;
    }
    public function setOrigine(){
        $this->origine = $origine;
        return $origine;
    }


    public function ajouterCarriere(Carriere $carriere) {
        $this->carrieres[] = $carriere;
    }


    public function getCarrieres(): array {
        return $this->carrieres;
    }


    public function detailsCarrieres(): string {
        $result = "<h2>" . $this->joueur() . "</h2><ul>";

            foreach($this->carrieres as $carriere){ 
            $result .= "<li>".$carriere->getEquipe()->getNomEquipe() . " ".$carriere->getAnneeSaison()."</li>";
            }
            $result .= "</ul>";      //???????
            return $resultat;
            return $result;
    }


    public function __toString() {
        return $this->prenom ." ". $this->nom;
    }

      

}