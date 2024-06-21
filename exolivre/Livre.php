<h1>Créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.</h1>


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
        return "<h1>Livres de Stephen King</h1>
                <p>$this->titre</p>
                <p>( $this->parution )</p>
                <p>$this->nbPages pages</p>
                <p>$this->prix €</p>";
    }

    public function __toString(){
        return "$this->titre $this->parution $this->nbPages $this->prix";
    }
}






















?>