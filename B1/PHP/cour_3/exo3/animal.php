<?php
/**
 * Classe Animal pour représenter un animal.
 */
class Animal {
    /** @var string $nom Nom de l'animal. */
    private $nom;

    /** @var int $age Âge actuel de l'animal. */
    private $age;

    /** @var int $ageMax Âge maximum que peut atteindre l'animal. */
    private $ageMax;

    /** @var array $regimeAlimentaire Liste des aliments consommés par l'animal. */
    private $regimeAlimentaire = [];

    /** @var string $etat État de l'animal (vivant ou mort). */
    private $etat = 'vivant';

    /**
     * Constructeur de la classe Animal.
     *
     * @param string $nom    Nom de l'animal.
     * @param int    $age    Âge initial de l'animal.
     * @param int    $ageMax Âge maximum que peut atteindre l'animal.
     */
    public function __construct($nom, $age, $ageMax) {
        $this->nom = $nom;
        $this->age = $age;
        $this->ageMax = $ageMax;  
    }

    /**
     * Méthode pour afficher les informations de l'animal.
     */
    public function lire_informations() {
        echo "Nom: " . $this->nom . ", Age: " . $this->age . ", Etat: " . $this->etat . "<br/>";
    }

    /**
     * Méthode pour ajouter un aliment au régime alimentaire de l'animal.
     *
     * @param string $aliment Nom de l'aliment à ajouter.
     */
    public function mange($aliment) {
        if ($this->etat === 'vivant') {
            $this->regimeAlimentaire[] = $aliment;
        }
    }

    /**
     * Méthode pour faire vieillir l'animal de plusieurs années.
     *
     * @param int $nbannees Nombre d'années à ajouter à l'âge de l'animal.
     */
    public function vieillir($nbannees) {
        $this->age += $nbannees;
        if ($this->age > $this->ageMax) {
            $this->etat = 'mort';
        }
    }

    /**
     * Méthode pour afficher le régime alimentaire de l'animal.
     */
    public function lire_regime() {
        echo "Régime alimentaire: " . implode(", ", $this->regimeAlimentaire) . "<br/>";
    }
}
?>
