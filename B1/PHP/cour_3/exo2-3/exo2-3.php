<?php 

require 'connexion_sql.php'; 

$connexion1=new Connexion_SQL('127.0.1.1','test','root',''); 

echo $connexion1->lire_connexion(); 

$connexion2=new Connexion_SQL('serveur','test','root','');

echo $connexion2->lire_connexion(); 
?>