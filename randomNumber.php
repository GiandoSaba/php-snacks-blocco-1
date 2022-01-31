<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$arrayRand = [];

while (count($arrayRand) < 15) {
    $num = rand(1, 100);
    if (!in_array($num, $arrayRand)) {
        $arrayRand[] = $num;
    }
}

var_dump($arrayRand);

?>