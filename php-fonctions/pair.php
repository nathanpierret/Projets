<?php

function estPair(int $nbTest) : bool {
    return $nbTest%2 == 0;
}

$nbChoisi = readline("Saisir un nombre : ");

if(estPair($nbChoisi)){
    echo "Le nombre est pair !";
} else {
    echo "Le nombre est impair !";
}