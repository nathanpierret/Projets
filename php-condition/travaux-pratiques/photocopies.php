<?php

$photocopiesRealisees = intval(readline("Saisir le nombre de photocopies réalisées : "));

if($photocopiesRealisees <= 10) {
    $prix = 0.30*$photocopiesRealisees;
    echo "Le prix des photocopies est de $prix €.";
} elseif($photocopiesRealisees <= 30) {
    $prix = 0.30*10 + 0.25*($photocopiesRealisees-10);
    echo "Le prix des photocopies est de $prix €.";
} else {
    $prix = 0.30*10 + 0.25*20 + 0.20*($photocopiesRealisees-30);
    if($prix > 50) {
        $prixReduit = 0.1*$prix;
        $prix = $prix - $prixReduit;
        echo "Le prix des photocopies est de $prix €.";
    } else {
        echo "Le prix des photocopies est de $prix €.";
    }
}