<?php
require 'personne2.php'; 
$etudiant=new Personne2('Martin','Paul',19); 

echo $etudiant->sePresente().'<br>';

$etudiant->setNom('Durand'); 

echo $etudiant->sePresente().'<br>'; 
