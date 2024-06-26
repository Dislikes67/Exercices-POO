<?php

class Equipe {
    private string $joueurs
    private int $anneeCreation
}

    public function __construct(string $joueurs, int $anneeCreation){
        $this->joueurs = $joueurs
        $this->anneeCreation = $anneeCreation
    }