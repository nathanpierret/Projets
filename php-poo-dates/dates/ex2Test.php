<?php

/*
 * Exercice 2 : création d'objets DateTime
 */

// Créer un objet DateTime avec la date du 22/06/2019 à 9h15
// La date sera exprimée au format "aaaa-mm-jj hh:mm"
$dateDefinie = new DateTime("2019-06-22 09:15");
// Afficher la date au format "jj/mm/aaaa hh:mm"
echo $dateDefinie->format("d/m/Y H:i");
echo PHP_EOL;
// Créer un objet DateTime avec la date du 22/06/2019 à 9h15
// La date sera exprimée au format "jj/mm/aaaa hh:mm"
$dateDefinie2 = DateTime::createFromFormat("d/m/Y H:i","22/06/2019 09:15");
// Afficher la date au format jj/mm/aaaa hh:mm
echo $dateDefinie2->format("d/m/Y H:i");
echo PHP_EOL;
