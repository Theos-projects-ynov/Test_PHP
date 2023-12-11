<?php

//$input = readline("Entrez un nombre : ");
$input = 15;


    $number = rand(1, $input);

do  {
    $number = rand(1, $input);
    echo "test with $number </br>";
}while($input % $number !== 0);

    echo "le multiple est : $number pour $input ";

?>