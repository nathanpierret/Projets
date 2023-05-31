<?php

$tableauARemplir = [];
$texteRouge = "\033[31m";
$texteVert = "\033[32m";
$normal = "\033[0m";

echo "Début traitement\n";

for($i=0;$i<=100000;$i++) {
    $tableauARemplir[] = 1;
    $pourcentage = $i/1000;
    if ($pourcentage < 100) {
        $pourcentageColore = $normal . "En cours ". $texteRouge . floor($pourcentage) . "%" ;
        echo $pourcentageColore . "\r";
    } else {
        echo "                \r";
        $pourcentageColore = $texteVert . $pourcentage . "%" . $normal;
        echo $pourcentageColore . "\n";
    }

}

echo "Fin traitement \n";
echo PHP_EOL;
echo "100000 valeurs ont été traitées !";