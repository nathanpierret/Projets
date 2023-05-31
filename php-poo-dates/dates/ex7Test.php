<?php

/*
 * Exercice 7 : fuseau horaire d'un objet DateTime
 */

// Créer un objet DateTime avec la date du jour et l'heure courante
$dateCourante = new DateTime();
$fuseau = $dateCourante->getTimezone();
// Afficher le fuseau horaire de l'objet
echo $fuseau->getName();
echo PHP_EOL;
// Modifier le fuseau horaire de l'objet pour qu'il soit à New York
$fuseau2 = new DateTimeZone("America/New_York");
$dateCourante->setTimezone($fuseau2);
// Afficher la date du jour au format jj/mm/aaaa hh:mm
echo $dateCourante->format("d/m/Y H:i");
echo PHP_EOL;
// Créer un objet DateTime avec la date du jour et l'heure courante et le fuseau horaire de New York
$dateCourante2 = new DateTime("now",new DateTimeZone("America/New_York"));
// Afficher la date du jour au format jj/mm/aaaa hh:mm
echo $dateCourante2->format("d/m/Y H:i");
echo PHP_EOL;
