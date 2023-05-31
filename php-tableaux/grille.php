<?php

$largeur = intval(readline("Saisir une largeur : "));
$hauteur = intval(readline("Saisir une hauteur : "));

const BLEU = "\033[34m";
const JAUNE = "\033[33m";
const NORMAL = "\033[0m";
const ROUGE = "\033[31m";

$grille = [];
const POSITION_VIDE = "-";
const PERSONNAGE_PRINCIPAL = "P";

for($i=0;$i<$hauteur;$i++) {
    $lignes = [];
    for($j=0;$j<$largeur;$j++){
        $lignes[] = POSITION_VIDE;
    }
    $grille[] = $lignes;
}

$grille[2][3] = PERSONNAGE_PRINCIPAL;

$nombreHauteur = 0;
$nombreLargeur = 0;

echo "      ";
for($k=0;$k<$largeur;$k++){
    $nombreColonne = sprintf("%'.02d  ",$nombreLargeur);
    echo BLEU . $nombreColonne;
    $nombreLargeur++;
}

echo PHP_EOL;

foreach($grille as $ligne){
    $nombreLigne = sprintf("%'.02d ",$nombreHauteur);
    echo BLEU . $nombreLigne . NORMAL . " | ";
    foreach($ligne as $valeur){
        if($valeur == PERSONNAGE_PRINCIPAL){
            echo ROUGE . PERSONNAGE_PRINCIPAL . NORMAL . " | ";
        } else {
            echo JAUNE . $valeur . NORMAL . " | ";
        }
    }
    echo PHP_EOL;
    $nombreHauteur++;
}