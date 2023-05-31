<?php

$resultats = [
    ["Nom" => "Durand","Moyenne" => 15],
    ["Nom" => "Dupont","Moyenne" => 06],
    ["Nom" => "Martin","Moyenne" => 14],
    ["Nom" => "Perrin","Moyenne" => 10],
    ["Nom" => "Tuvant","Moyenne" => 17],
    ["Nom" => "Minaux","Moyenne" => 07]
];

for($i=0;$i<count($resultats);$i++){
    echo $resultats[$i]["Nom"] . " : " . $resultats[$i]["Moyenne"] . "\n";
}

for($i=0;$i<count($resultats);$i++){
    if($resultats[$i]["Moyenne"] >= 10){
        echo $resultats[$i]["Nom"] . " : " . $resultats[$i]["Moyenne"] . "\n";
    }
}

$eleveMajorde = "";
$noteMajorde = 0;

for($i=0;$i<count($resultats);$i++) {
    if ($resultats[$i]["Moyenne"] > $noteMajorde) {
        $noteMajorde = $resultats[$i]["Moyenne"];
        $eleveMajorde = $resultats[$i]["Nom"];
    }
}

echo "Meilleure note : $noteMajorde obtenue par $eleveMajorde.";