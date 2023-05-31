<?php

/*
 * Exercice 4 : création d'objets DateInterval (intervalle de temps, durée) et formatage
 */

// Créer un objet DateInterval représentant un intervalle de 4 mois et 2 jours
$intervalle = new DateInterval("P4M2D");
// Afficher l'intervalle au format 4m2j
echo $intervalle->format("%mm%dj");
echo PHP_EOL;
// Créer un objet DateInterval représentant un intervalle de 2 jours, 3 heures et 5 minutes
$intervalle2 = new DateInterval("P2DT3H5M");
// Afficher l'intervalle au format 2j03h05mn
echo $intervalle2->format("%dj%Hh%Imn");
echo PHP_EOL;
// Créer un objet DateInterval représentant un intervalle 4 heures, 5 minutes et 6 secondes
$intervalle3 = new DateInterval("PT4H5M6S");
// Afficher l'intervalle au format 04h05mn06s
echo $intervalle3->format("%Hh%Imn%Ss");
echo PHP_EOL;
