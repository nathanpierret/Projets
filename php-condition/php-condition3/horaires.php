<?php

$heure = readline("Saisir une heure (h:mm) : ");
$heureSeule = intval(substr($heure,0,-3));
$formatIncorrect = substr($heure,-3,1) != ":";
$minutesInvalides = intval(substr($heure,-2,2)) >= 60;
$heureInvalide = $heureSeule >= 24;
$entre9Et12Heures = $heureSeule >= 9 && $heureSeule < 12;
$entre14Et19Heures = $heureSeule >= 14 && $heureSeule < 19;

if($formatIncorrect) {
    echo "ERREUR : Vous devez respecter le format demandé (h:mn) !";
} 
if($minutesInvalides || $heureInvalide) {
    echo "ERREUR : l'heure $heure est invalide !";
}
if($entre9Et12Heures || $entre14Et19Heures) {
    echo "Le magasin est ouvert";
} else {
    echo "Le magasin est fermé";
}
