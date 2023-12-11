<?php
//try {
//    $fichier = fopen("test.txt", "r");
//
//    if (!$fichier) {
//        throw new Exception("the file not found");
//    }
//}catch (Exception $e) {
//    echo "Bonsoir : " . $e->getMessage();
//}

try {
    $fichier = fopen("test.txt", "r");

    if (!$fichier) {
        throw new Exception("the file not found");
    }
}catch (Exception $e) {
    echo "Bonsoir : " . $e->getMessage();
}



?>