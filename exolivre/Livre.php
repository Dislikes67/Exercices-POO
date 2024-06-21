<h1>Créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.</h1>


<?php

class Livre {
    private string $titre;
    private int $nbPages;
    private int $parution;
    private int $prix;

    public function __construct(string $titre, int $nbPages, int $parution, int $prix){

            $this->titre = $titre;
            $this->nbPages = $nbPages;
            $this->parution = $parution;
            $this->prix = $prix;
    } 


    public function getTitre() : string{
        return $this->titre;
    }

    public function getNbPages() : int{
        return $this->nbPages;
    }

    public function getParution() : int{
        return $this->parution;
    }

    public function getPrix() : int{
        return $this->prix;
    }



    public function setTitre(string $Titre){
        $this->titre = $titre;
    }

    public function setNbPages(int $nbPages){
        $this->nbPages = $nbPages;
    }

    public function setParution(int $parution){
        $this->parution = $parution;
    }

    public function setPrix(int $prix){
        $this->prix = $prix;
    }
 
    
    
    public function afficherBibliographie(){
        return "<h1>Livre de Stephen King</h1>
                <p>$this->titre</p>
                <p>$this->nbPages</p>
                <p>$this->parution</p>
                <p>$this->prix</p>";
    }
}






















?>