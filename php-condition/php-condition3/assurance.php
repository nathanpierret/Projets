<?php

$ageAssureur = intval(readline("Veuillez saisir votre âge : "));
$sexeAssureur = readline("Veuillez saisie votre sexe (M ou F) : ");
$estUnHomme = $sexeAssureur == "M";
$estUneFemme = $sexeAssureur == "F";
$entre20Et30Ans = $ageAssureur >= 20 && $ageAssureur <= 30;
$plusDe22Ans = $ageAssureur > 22;
$hommeDePlusDe22Ans = $plusDe22Ans && $estUnHomme;
$femmeEntre20Et30Ans =  $entre20Et30Ans && $estUneFemme;

if($hommeDePlusDe22Ans || $femmeEntre20Et30Ans) {
    echo "Vous devez payer la surprime !";
} else {
    echo "Vous n'avez pas à payer la surprime !";
}