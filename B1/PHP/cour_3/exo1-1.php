<?php
/**
 * Classe Vehicule pour représenter un véhicule.
 */
class Vehicule {
    /** @var string $mark Marque du véhicule. */
    private $mark;

    /** @var int $power Puissance du véhicule en CV. */
    private $power;

    /** @var int $mileage Kilométrage du véhicule en miles. */
    private $mileage;

    /**
     * Constructeur de la classe Vehicule.
     *
     * @param string $mark    Marque du véhicule.
     * @param int    $power   Puissance du véhicule en CV.
     * @param int    $mileage Kilométrage initial du véhicule en miles.
     */
    public function __construct($mark, $power, $mileage) {
        $this->mark = $mark;
        $this->power = $power;
        $this->mileage = $mileage;
    }

    /**
     * Méthode pour afficher les détails du véhicule.
     */
    public function print() {
        echo "Marque: {$this->mark}, Puissance: {$this->power} CV, Kilométrage: {$this->mileage} Miles<br/>";
    }

    /**
     * Méthode pour mettre à jour le kilométrage du véhicule.
     *
     * @param int $distance Distance parcourue à ajouter au kilométrage.
     */
    public function use($distance) {
        $this->mileage += $distance;
    }
}

$vehicule1 = new Vehicule('RENAULT', 90, 15000);
$vehicule2 = new Vehicule('PEUGEOT', 110, 20000);

$vehicule1->print();
$vehicule2->print();

echo "<br/>----------------<br/><br/>";

$vehicule1->use(3500);
$vehicule1->use(1500);

$vehicule1->print();
$vehicule2->print();
?>
