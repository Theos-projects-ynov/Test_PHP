<?php 
require 'personne.php'; 

$etudiant=new Personne('Martin','Paul',19); echo $etudiant->sePresente().'<br>'; 

//$etudiant->nom='Durand'; 
$etudiant->setNom('Jordan');

echo $etudiant->sePresente().'<br>';


/*
Pourquoi l’exécution du code de seance3_exo1.php renvoie une erreur ?
Donnez une solution simple pour permettre l’exécution normale de ce code

1. Car nous essayons de modifier nom alors que dans personne.php elle est en privée donc elle n'est pas accées en dehors de sa classe
2. Créer une methode qui change le nom comme setName() est changer a partir de cette fonction puis enlever $etudiant->nom='Durand'; 

*/


?>

