<?php
/**
 * Classe Animal pour représenter un animal.
 */
class Animal {
    /** @var string $name Nom de l'animal. */
    private $name;

    /** @var string $race Race de l'animal. */
    private $race;

    /** @var int $age Âge de l'animal en années. */
    private $age;

    /** @var float $weight Poids de l'animal en kilogrammes. */
    private $weight;

    /**
     * Constructeur de la classe Animal.
     *
     * @param string $name   Nom de l'animal.
     * @param string $race   Race de l'animal.
     * @param int    $age    Âge initial de l'animal en années.
     * @param float  $weight Poids initial de l'animal en kilogrammes.
     */
    public function __construct($name, $race, $age, $weight) {
        $this->name = $name;
        $this->race = $race;
        $this->age = $age;
        $this->weight = $weight;
    }

    /**
     * Méthode pour afficher les détails de l'animal.
     */
    public function print() {
        echo "Nom: {$this->name}, Race: {$this->race}, Âge: {$this->age} ans, Poids: {$this->weight} Kg <br/>";
    }

    /**
     * Méthode pour augmenter l'âge de l'animal d'une année.
     */
    public function birthday() {
        $this->age++;
    }

    /**
     * Méthode pour modifier le poids de l'animal.
     *
     * @param float $weight Variation de poids à ajouter (positif) ou soustraire (négatif).
     */
    public function changeWeight($weight) {
        $this->weight += $weight;
    }
}

$chien1 = new Animal('Jordanne', "Saint-Bernard", 3, 5);
$chien2 = new Animal('Florients', "Shiba Inu", 16, 10);

$chien1->print();
$chien2->print();

$chien1->birthday();
$chien1->print();

$chien1->changeWeight(-2);
$chien2->changeWeight(1.5);

$chien1->print();
$chien2->print();
?>
