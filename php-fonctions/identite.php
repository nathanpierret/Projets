<?php

$prenom = readline("Saisir votre prénom : ");
$nom = readline("Saisir votre nom : ");

function getIdentite(string $prenom, string $nom) : string {
    $prenom = ucfirst(strtolower($prenom));
    $nom = strtoupper($nom);
    return "$prenom $nom";
}

echo "Votre identité est " . getIdentite($prenom,$nom) . ".";