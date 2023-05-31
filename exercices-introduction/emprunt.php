<?php
$montantEmprunt = readline("Saisir le montant à emprunter : ");
$tauxInteret = readline("Saisir le taux d'intérêt (%) : ");
$dureeAnnee = readline("Saisir la durée (en année) : ");
$mensualiteEmprunt1 = $montantEmprunt*($tauxInteret/100)/12;
$mensualiteEmprunt2 = 1-(1+($tauxInteret/100)/12)**-(12*$dureeAnnee);
$mensualiteEmprunt = round($mensualiteEmprunt1/$mensualiteEmprunt2,2);
$coutTotal = floor(($mensualiteEmprunt*($dureeAnnee*12))-$montantEmprunt);
echo "La mensualité à rembourser est de $mensualiteEmprunt euros !";
echo PHP_EOL;
echo "le coût de l'emprunt est de $coutTotal euros";