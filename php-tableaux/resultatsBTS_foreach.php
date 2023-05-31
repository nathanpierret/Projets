<?php

$resultats = [
    ["Nom" => "Durand","Moyenne" => 15],
    ["Nom" => "Dupont","Moyenne" => 06],
    ["Nom" => "Martin","Moyenne" => 14],
    ["Nom" => "Perrin","Moyenne" => 10],
    ["Nom" => "Tuvant","Moyenne" => 17],
    ["Nom" => "Minaux","Moyenne" => 07]
];

foreach($resultats as $resultat){
    echo $resultat["Nom"] . " : " . $resultat["Moyenne"] . "\n";
}

foreach($resultats as $resultat){
    if($resultat["Moyenne"] >= 10){
        echo $resultat["Nom"] . " : " . $resultat["Moyenne"] . "\n";
    }
}

$eleveMajorde = "";
$noteMajorde = 0;

foreach($resultats as $resultat){
    if($resultat["Moyenne"] > $noteMajorde){
        $noteMajorde = $resultat["Moyenne"];
        $eleveMajorde = $resultat["Nom"];
    }
}

echo "Meilleure note : $noteMajorde obtenue par $eleveMajorde.";