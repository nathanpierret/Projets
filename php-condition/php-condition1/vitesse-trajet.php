<?php
$distance = intval(readline("Saisir la distance du trajet (kms) : "));
$duree = readline("Saisir la durée du trajet (h:mn) : ");
$dureeHeure = intval(substr($duree,0,-3));
$dureeMinute = intval(substr($duree,-2,2))/60;
$dureeConvertie = $dureeHeure+$dureeMinute;
$vitesseTrajet = ceil($distance/$dureeConvertie);
$fondRouge = "\033[41m";
$fondVert = "\033[42m";
$texteRouge = "\033[31m";
$normal = "\033[0m";
if(substr($duree,-3,1) != ":"){
    echo $texteRouge."ERREUR : Vous devez respecter le format demandé (h:mn) !".$normal;
}elseif(intval(substr($duree,-2,2))>=60){
    echo $texteRouge."ERREUR : la durée $duree est invalide !".$normal;
}else{
    echo "La vitesse moyenne du trajet est de $vitesseTrajet km/h";
    echo PHP_EOL;
    if($vitesseTrajet>90){
        echo $fondRouge."Vous êtes au dessus des 90 km/h".$normal;
    }else{
        echo $fondVert."Vous êtes en dessous des 90 km/h".$normal;
    }
}