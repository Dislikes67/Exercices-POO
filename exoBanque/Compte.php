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


    public function









































}