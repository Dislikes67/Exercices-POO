<h1>Exercice 4</h1>

<p>Créer une classe voiture possédant les propriétés suivantes: marques, modèle, nbPortes, et vitesse actuelle ainsi que les méthodes démarrer(), accelerer() et stopper() en plus des accesseurs get et set traditionnels.</p>

<?php

class Voiture {
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;
    private bool $onOff;

    public function __construct(string $marque, string $modele, int $nbPortes) {

        $this->marque = $marque;
        $this->modele = $modele;        //Non modifiable
        $this->nbPortes = $nbPortes;

        $this->vitesseActuelle = 0;
        $this->onOff = false;           //Modifiable
    }
    
    public function getMarque() : string{
    return $this->marque;
    }

    public function getModele() : string{
        return $this->modele;
    }
                                                // Getters
    public function getNbPortes() : int {
        return $this->nbPortes;
    }

    public function getVitesseActuelle() : int {
        return $this->vitesseActuelle;
    }

    public function getOnOff() : bool {
        return $this->onOff;
    }



    public function setModele(string $modele){
        $this->modele = $modele;
    }

    public function setMarque(string $marque){
        $this->marque = $marque;
    }
                                                    // Setters
    public function setNbPortes(int $nbPortes){
        $this->nbPortes = $nbPortes;
    }

    public function setVitesseActuelle(int $vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
    }

    public function setOnOff(bool $onOff){
        $this->onOff = $onOff;
    }

        // Method

    public function demarrer() {

        if (!$this->onOff) {    
             $this->onOff = true;

            echo "<p>Le véhicule $this démarre.</p>";
        }
        else {
            echo "<p>Le véhicule est déjà démarré !</p>";
        
        }
    }

    public function stopper() {

        if ($this->onOff) {
            $this->onOff = false;
            $this->vitesseActuelle = 0;

            echo "<p>Le véhicule $this est stoppé.
                Sa vitesse est de $this->vitesseActuelle km / h </p>";
        }
        else {
            echo "<p>Le véhicule est déjà à l'arrêt !</p>";   
        }
    }

    public function accelerer(int $acceleration) {

        if ($this->onOff) {
            $this->vitesseActuelle += $acceleration; //cette ligne augmente la vitesse actuelle de la voiture en ajoutant la valeur de acceleration.        
        
            echo "<p>Le véhicule $this accélère de $acceleration km / h</p>";
        }

        else{
            echo "<p>Pour accélérer il faut démarrer le véhicule $this !</p>";
        }   
    }

    public function ralentir(int $ralentissement) {

        if ($ralentissement > $this->vitesseActuelle) {
            echo "Le véhicule ne peut pas ralentir d'avantage !";
        }
        elseif ($this->vitesseActuelle > 0){
            $this->vitesseActuelle -= $ralentissement;
            echo "<p> Le véhicule $this ralenti de $ralentissement. Sa nouvelle vitesse est de $this->vitesseActuelle km / h</p>";
        }
        else {
            echo"<p> Pour ralentir, il faut démarrer le véhicule $this !</p>";
        }
    }

    public function afficherInfos() {

        $etat = ($this->onOff) ? "démarrée" : "à l'arrêt";

        return "<p>Nom et modèle du véhicule : $this->marque $this->modele</p>
                <p>Nombre de portes : $this->nbPortes</p>
                <p>Le véhicule est $etat</p>
                <p> Sa vitesse actuelle est de : $this->vitesseActuelle km / h</p>";
    }

    public function __toString(){ //permet d'afficher directement les informations de la voiture (marque et modèle) en utilisant l'objet dans un contexte de chaîne de caractères.
        return "$this->marque $this->modele $this->nbPortes";
    }
}

$Voiture1 = new Voiture("Audi", "A5", 4);
$Voiture2 = new Voiture("Citroen", "C3", 4);
$Voiture3 = new Voiture("Fiat", "Multipla", 4);
$Voiture4 = new Voiture("Toyota", "Prius", 4);
$Voiture5 = new Voiture("Triumph", "Spitfire", 2);

$Voiture3->demarrer();
$Voiture3->accelerer(50);
$Voiture3->ralentir(20);
$Voiture3->accelerer(170);
echo $Voiture3->afficherInfos();
$Voiture3->stopper();
$Voiture3->accelerer(50);
echo $Voiture3->afficherInfos(  );



// méthode magique : comment on veut représenter l'objet sous forme de string
    //pour pouvoir afficher marque + modele en évitant les répétitions









?>