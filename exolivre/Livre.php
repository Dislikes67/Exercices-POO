<?php

class Livre {
    private string $titre;
    private int $parution;
    private int $nbPages;
    private int $prix;

    public function __construct(string $titre, int $parution, int $nbPages, int $prix){

            $this->titre = $titre;
            $this->parution = $parution;
            $this->nbPages = $nbPages;
            $this->prix = $prix;
    } 


    public function getTitre() : string{
        return $this->titre;
    }

    public function getParution() : int{
        return $this->parution;
    }
    
    public function getNbPages() : int{
        return $this->nbPages;
    }

    public function getPrix() : int{
        return $this->prix;
    }



    public function setTitre(string $Titre){
        $this->titre = $titre;
    }

    public function setParution(int $parution){
        $this->parution = $parution;
    }
    
    public function setNbPages(int $nbPages){
        $this->nbPages = $nbPages;
}

public function setPrix(int $prix){
        $this->prix = $prix;
    }
 
    
    
    public function afficherBibliographie(){
        return "<h2>Livres de Stephen King</h2>
                $this->titre
                ( $this->parution ) :
                $this->nbPages pages
                $this->prix €";
    }

    public function __toString(){
        return "$this->titre $this->parution $this->nbPages $this->prix";
    }
}

$Livre1 = new Livre ("Ca", 1986, 1138, 20);
$Livre2 = new Livre ("Simetierre",1983,374,15);
$Livre3 = new Livre ("Le Fléau",1978, 823,14);
$Livre4 = new Livre ("Shining", 1977,447,16);

echo $Livre1->afficherBibliographie();


?>