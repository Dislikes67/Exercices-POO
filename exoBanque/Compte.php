<?php

class Compte {
    private string $libelle;
    private float $soldeInit;
    private string $devise;
    private Titulaire $titulaire;


    public function __construct(string $libelle, float $soldeInit, string $devise, Titulaire $titulaire) {
        $this->libelle = $libelle;
        $this->soldeInit = $soldeInit;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
    }


    public function getLibelle(){
        return $this->libelle;
    }
    public function setLibelle($libelle){
        $this->libelle = $libelle;
        return $this;
    }


    public function getSoldeInit(){
        return $this->soldeInit;
    }
    public function setSoldeInit($soldeInit){
        $this->soldeInit = $soldeInit;
        return $this;
    }


    public function getDevise(){
        return $this->devise;
    }
    public function setDevise($devise){
        $this->devise = $devise;
        return $this;
    }


    public function getTitulaire(){
        return $this->titulaire;
    }
    public function setTitulaire($titulaire){
        $this->titulaire = $titulaire;
        return $this;
    }


    public function crediter(float $credit){
        $this->soldeInit += $credit;
        echo "Compte crédité de $credit €.<br>";
    }


    public function debiter(float $debit){
        if($debit <= $this->soldeInit){
            $this->soldeInit -= $debit;
            echo "Compte débité de $debit €.<br>";
        }
        else{
            echo "Somme à débiter trop élevée.";
        }
    }


    public function virer(Compte $compte, float $virement){
        if ($virement <= $this->soldeInit){
            $this->debiter($virement);
            $compte->crediter($virement);
            echo "Virement de $virement € de $this->libelle au $compte->libelle  de " . $compte->getTitulaire()->__toString() ."<br>";
        }
        else {
            echo "Somme à virer trop élevée.<br>";
        }
    }


    public function __toString(): string{
        return "$this->libelle de $this->titulaire";
    }


    public function afficherCompte(){
        $result= "$this, au solde de : $this->soldeInit $this->devise<br>";
        return $result;
    }
}