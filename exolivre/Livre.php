<?php

class Livre extends Auteur {
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



    public function setTitre(string $titre){
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
        $result = "Livres de" . $this->auteur."<br>";
        foreach (){
            $result .= $this "<br>";
        }
        return $result;
    
    public function __toString(){
        return "$this->titre $this->parution $this->nbPages $this->prix";
    }
}
}

?>