<?php
$max = readline("Entrez un nombre : ");

$count = 0;
$pair = null;
$odd = null;
$odd2 = null;

while ($pair === null || $odd === null || $odd2 === null) {
    $number = rand(1, $max);

    if ($number % 2 == 0) {
        $pair = $number;
    }

    if ($number % 2 == 1) {
        if ($pair !== null) {
            $odd = $number;
        } else {
            $odd2 = $number;
        }
    }
    $count++;
}
echo "La suite est : $pair, $odd, $odd2.";
echo "Le nombre de tirages aléatoires effectués est : $count.";

?>