<?php

class Compte extends Titulaire{
    private string $libelle;
    private float $soldeInit;
    private string $devise;
    private Titulaire $titulaire;


    public function __construct(string $libelle, float $soldeInit, string $devise, Titulaire $titulaire){
        $this->libelle = $libelle;
        $this->soldeInit = $soldeInit;
        $this->devise = $devise;
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
        $this->SoldInit = $soldeInit;
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
        $this->soldeInit = $this->soldInit + $credit;
        echo "compte crédité de $credit €.<br>";
    }


    public function debiter(float $debit){
        if($debit <= $this->soldeInit){
            $this->soldeInit = $this->soldeInit - $debit;
            echo "compte débité de $debit €.<br>";
        }
        else{
            echo "somme à débiter trop élevée.";
        }
    }


    public function virer(Compte $compte, float $virement){
        if ($virement <= $this->soldInit){
            $this->soldeInit = $this->soldeInit - $virement;
            $compte->soldeInit = $compte->soldeInit + $virement;
            echo "virement de $virement € du $this au $compte->libelle de $compte->titulaire.<br>";
        }
        else {
            echo "somme à virer trop élevée.";
        }
    }


    public function __toStrin(): string{
        return "$this->libelle de $this->titulaire";
    }


    public function afficherCompte(){
        $result= "$this, au solde de : $this->soldeInit $this->devise<br>";
        return $result;
    }
}