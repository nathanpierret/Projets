<?php
$a = intval(readline("Entrer le coefficient a : "));
$b = intval(readline("Entrer le coefficient b : "));
$c = intval(readline("Entrer le coefficient c : "));

echo "Résolution de l'équation $a" . "x*2 + $b" . "x + $c = 0";
echo PHP_EOL;

$delta = $b**2-4*$a*$c;
if($delta > 0) {
    $x1 = (-$b+sqrt($delta))/(2*$a);
    $x2 = (-$b-sqrt($delta))/(2*$a);
    echo "Il y a 2 solutions distinctes : ";
    echo PHP_EOL;
    echo "x1 = $x1";
    echo PHP_EOL;
    echo "x2 = $x2";
} elseif($delta == 0) {
    $x = -$b/(2*$a);
    echo "Il y a 1 solution : ";
    echo PHP_EOL;
    echo "x = $x";
} else {
    echo "Il n'existe pas de solution ! ";
}
