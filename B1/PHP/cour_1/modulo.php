<?php


$a = readline("Entrez un nombre : ");

switch ($a) {
    case $a % 3 === 0 && $a % 5 === 0 :
        echo "$a 3 et 5";
        break;
    case $a % 3 === 0 :
        echo "$a 3";
        break;
    case $a % 5 === 0 :
        echo "$a 5";
        break;
}

//while ()

echo "fin";

?>