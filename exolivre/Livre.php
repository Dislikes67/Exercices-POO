    <?php

class Livre extends Auteur {
    private string $titre;
    private int $parution;
    private int $nbPages;
    private float $prix;
//Attribut de type auteur pour assigner un objet auteur au livre, pour l'ajouter a bibliographie
    private Auteur $auteur;

    public function __construct(string $titre, int $parution, int $nbPages, float $prix, Auteur $auteur){

            $this->titre = $titre;
            $this->parution = $parution;
            $this->nbPages = $nbPages;                  //add livre to auteur 
            $this->prix = $prix;
            $this->auteur = $auteur;
            $auteur->addLivre($this);
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

    public function getPrix() : float{
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

    public function setPrix(float $prix){
        $this->prix = $prix;
    }

    public function setAuteur(Auteur $auteur){
        $this ->auteur = $auteur;
    }

// Affiche les infos de l'objet livre
    public function __toString(){
        return "$this->titre ($this->parution) : $this->nbPages pages / $this->prix €";
    }
}

