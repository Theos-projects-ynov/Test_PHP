<?php
include('chien.php');

$bestiole = new Animal('Une drôle de bête', 1, 10);
$bestiole->mange('fruits');
$bestiole->mange('légumes');
echo $bestiole->lire_regime();
echo $bestiole->lire_informations();
$bestiole->vieillir(4);
echo $bestiole->lire_informations();
$bestiole->vieillir(6);
echo $bestiole->lire_informations();

$chien1 = new Chien('Chien', 2, 'Médor');
$chien1->vieillir(1);

echo $chien1->seNomme() . "\n";
$chien1->mange('viande');
$chien1->mange('croquettes');
echo $chien1->lire_regime();
echo $chien1->lire_informations();
?>

