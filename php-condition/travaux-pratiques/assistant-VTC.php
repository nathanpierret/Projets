<?php

$adresseDepart = readline("Saisir l'adresse de départ : ");
$adresseArrivee = readline("Saisir l'adresse d'arrivée : ");
$solde = intval(readline("Saisir votre solde : "));
$avoir = intval(readline("Saisir votre avoir (max 10€): "));

$dernierEspaceArrivee = strripos($adresseArrivee," ");
$dernierEspaceDepart = strripos($adresseDepart," ");
$villeDepart = substr($adresseDepart,$dernierEspaceDepart+1);
$villeArrivee = substr($adresseArrivee,$dernierEspaceArrivee+1);

$trajetDansParis = $villeDepart == "Paris" && $villeArrivee == "Paris";
$trajetEnSortantParis = $villeDepart == "Paris" && $villeArrivee != "Paris";
$trajetEnEntrantParis = $villeDepart != "Paris" && $villeArrivee == "Paris";
$trajetInvalide = $villeDepart != "Paris" && $villeArrivee != "Paris";

$verificationSoldeTrajetDansParis = $solde >= 30;
$verificationSoldeTrajetEnSortantParis = $solde+$avoir >= 50;
$verificationSoldeTrajetEnEntrantParis = $solde+0.5*$avoir >= 40;

if($solde == 0) {
    echo "ERREUR : Votre solde ne doit pas être vide !";
}
if($avoir > 10) {
    echo "ERREUR : Votre avoir ne doit pas dépasser 10€ !";
}

if($trajetDansParis) {
    echo "Trajet à l'intérieur de Paris pour un montant de 30€";
    echo PHP_EOL;
    if($verificationSoldeTrajetDansParis) {
        $soldeNouveau = $solde - 30;
        echo "Votre nouveau solde est de $soldeNouveau € et votre nouvel avoir est de $avoir €";
    } else {
        echo "Désolé mais votre solde est insuffisant. Veuillez créditer votre solde.";
    }
} else {
    if($trajetEnSortantParis) {
        echo "Trajet de $villeDepart vers $villeArrivee pour un montant de 50€";
        echo PHP_EOL;
        if($verificationSoldeTrajetEnSortantParis) {
            $soldeNouveau = $solde - 50 + $avoir;
            $avoirNouveau = 0;
            echo "Votre nouveau solde est de $soldeNouveau € et votre nouvel avoir est de $avoirNouveau €";
        } else {
            echo "Désolé mais votre solde est insuffisant. Veuillez créditer votre solde.";
        }
    } else {
        if($trajetEnEntrantParis) {
            echo "Trajet de $villeDepart vers $villeArrivee pour un montant de 40€";
            echo PHP_EOL;
            if($verificationSoldeTrajetEnEntrantParis) {
                $soldeNouveau = $solde - 40 + 0.5*$avoir;
                $avoirNouveau = 0.5*$avoir;
                echo "Votre nouveau solde est de $soldeNouveau € et votre nouvel avoir est de $avoirNouveau €";
            } else {
                echo "Désolé mais votre solde est insuffisant. Veuillez créditer votre solde.";
            }
        } else {
            if($trajetInvalide) {
                echo "Trajet de $villeDepart vers $villeArrivee.";
                echo PHP_EOL;
                echo "Désolé mais les trajets hors Paris ne sont pas proposés par notre société.";
            }
        }
    }
}