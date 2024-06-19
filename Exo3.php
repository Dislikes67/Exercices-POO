<h1>Exercice 3</h1>

<p>Créer une classe Personne (nom,prénom et date de naissance).<br> Instancier 2 personnes et afficher leurs informations.</p>


<?php

class Personne {
    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;

    public function __construct(string $nom, string $prenom, string $dateDeNaissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
    }

    public function afficherInformations(): string {
        return $this->nom . "\n" .
               $this->prenom . " a\n" .
               $this->calculerAge() . " ans\n";
    }

    public function calculerAge(): int {
        $date = new DateTime();
        $age = $this->dateDeNaissance->diff($date)->y;
        return $age;
    }
}   

$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

echo $p1->afficherInformations();
echo "<br>";
echo $p2->afficherInformations();

?>