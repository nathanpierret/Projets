<?php

$prix = intval(readline("Saisir le prix de l'article : "));
$remise1 = 0.05;
$remise2 = 0.1;
$remise3 = 0.2;
if($prix < 1000) {
    $prixReduit = round($remise1*$prix,2);
    $prix = round($prix-$prixReduit,2);
    $remise1 = $remise1*100;
    echo "La remise est de $remise1% soit $prixReduit euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de $prix euros";
} elseif($prix >= 1000 and $prix < 5000) {
    $prixReduit = round($remise2*$prix,2);
    $prix = round($prix-$prixReduit,2);
    $remise2 = $remise2*100;
    echo "La remise est de $remise2% soit $prixReduit euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de $prix euros";
} else {
    $prixReduit = round($remise3*$prix,2);
    $prix = round($prix-$prixReduit,2);
    $remise3 = $remise3*100;
    echo "La remise est de $remise3% soit $prixReduit euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de $prix euros";
}