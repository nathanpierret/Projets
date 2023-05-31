<?php

/*
 * Exercice 3 : création d'objets DateTime et différence de dates
 */

// Créer 2 objets DateTime :
// - le premier représente la date du jour et l'heure courante
// - le second représente la date du 22/06/2019 à 9h15
$dateCourante = new DateTime();
$dateDefinie = DateTime::createFromFormat("d/m/Y H:i","22/06/2019 09:15");
// Calculer la différence entre la date du jour et la date du 22/06/2019 à 9h15
$intervalle = $dateCourante->diff($dateDefinie);
// Afficher le nombre de jours entre les 2 dates
echo $intervalle->format("%a")." jours.";
echo PHP_EOL;
// Afficher le nombre d'années, mois et jours entre les 2 dates
echo $intervalle->format("%y"). " années, "
    .$intervalle->format("%m")." mois et "
    .$intervalle->format("%d")." jours.";
echo PHP_EOL;
// Afficher le nombre de jours, heures, minutes et secondes entre les 2 dates
echo $intervalle->format("%a")." jours, "
    .$intervalle->format("%h")." heures, "
    .$intervalle->format("%i")." minutes et "
    .$intervalle->format("%s")." secondes.";
echo PHP_EOL;
// Afficher le nombre de mois entre les 2 dates
$mois = (intval($intervalle->format("%m"))+intval($intervalle->format("%y"))*12)." mois.";
echo $mois;