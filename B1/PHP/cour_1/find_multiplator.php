<?php

//$input = readline("Entrez un nombre : ");
$input = 15;
$number = rand(1, $input);

while ($input % $number !== 0) {
    $number = rand(1, $input);
    echo "test with $number </br>";
}

    echo "le multiple est : $number pour $input ";

?>