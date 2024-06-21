<?php

class Livre extends Auteur {
    private string $titre;
    private int $parution;
    private int $nbPages;
    private int $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $parution, int $nbPages, int $prix, Auteur $auteur){

            $this->titre = $titre;
            $this->parution = $parution;
            $this->nbPages = $nbPages;
            $this->prix = $prix;
            $this->auteur = $auteur;
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

    public function getAuteur() : Auteur {
        return $this->auteur;
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

    public function setAuteur(Auteur $auteur){
        $this ->auteur = $auteur;
    }


    public function __toString(){
        return "$this->titre $this->parution $this->nbPages $this->prix";
    }
}

?>