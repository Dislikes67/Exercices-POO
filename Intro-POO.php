<?php

class Calculatrice {        //class = plan de construction
    
    function additionner (int $a, int $b): int (        
        return $a + $b;
    ) 
                                            //Définir les fonctionnalitées à l'intérieur 
    function afficher (int $n):{
        echo $n 
    }
        

}

$calc = new Calculatrice();         //Avec new on appelle le constructeur (instanciation) on l'utilise en lui affectant une variable 
$c = $calc->additionner(1, 4);         // On peut ensuite utiliser ses fonctionnalités 
$calc->afficher($c);

    












