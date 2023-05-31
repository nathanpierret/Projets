<?php

/*
 * Exercice 5 : Modification d'objets DateTime avec les méthodes add et sub
 */

// Créer un objet DateTime avec la date du 22/06/2019 à 9h15
$dateDefinie = DateTime::createFromFormat("d/m/Y H:i","22/06/2019 09:15");
// Ajouter 1 mois à la date
$intervalle = new DateInterval("P1M");
$dateDefinie->add($intervalle);
// Afficher la date au format jj/mm/aaaa hh:mm
echo $dateDefinie->format("d/m/Y H:i");
echo PHP_EOL;
// Ajouter 2 ans, 3 mois, 1 jour, 4 heures, 5 minutes et 6 secondes à la date
$intervalle2 = new DateInterval("P2Y3M1DT4H5M6S");
$dateDefinie->add($intervalle2);
// Afficher la date au format jj/mm/aaaa hh:mm
echo $dateDefinie->format("d/m/Y H:i");
echo PHP_EOL;
// Retirer 1 mois à la date et 2 heures et 30 minutes à la date
$intervalle3 = new DateInterval("P1MT2H30M");
$dateDefinie->sub($intervalle3);
// Afficher la date au format jj/mm/aaaa hh:mm
echo $dateDefinie->format("d/m/Y H:i");
echo PHP_EOL;
