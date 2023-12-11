

<?php
include('animal.php');

/**
 * Class MyClass
 *
 * This class represents a MyClass object.
 */
class Chien extends Animal {
    private $nomFamilier;

    public function __construct($nom, $age, $nomFamilier, $ageMax = 18) {
        parent::__construct($nom, $age, $ageMax); 
        $this->nomFamilier = $nomFamilier;
    }

    public function seNomme() {
        return $this->nomFamilier;
    }

    public function lire_informations() {
        parent::lire_informations();
        echo "Nom familier: " . $this->nomFamilier . "\n";
    }
}
?>
