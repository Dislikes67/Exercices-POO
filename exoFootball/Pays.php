<?php

class Pays{
    private string $nomsPays


    public function __construct(string $nomsPays){
        $this->nomPays = $nomsPays;
    }

    public function getNomsPays() {
        return $this->nomsPays;
    }
    public function setNomsPays($nomsPays) {
        $this->nomsPays = $nomsPays;
        return $this;
    }

    public function addPays(Pays $pays) {
        $this->pays[] = $pays;
    }

    public function _toString(){
        return "$this->nomsPays";
    }

}