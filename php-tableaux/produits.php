<?php

$produits = [
    "P0001" => ["Désignation" => "Produit 1", "Prix" => 50.99, "Stock" => 10],
    "P0002" => ["Désignation" => "Produit 2", "Prix" => 99.99, "Stock" => 20],
    "P0003" => ["Désignation" => "Produit 3", "Prix" => 25.50, "Stock" => 6],
    "P0004" => ["Désignation" => "Produit 4", "Prix" => 130.99, "Stock" => 4]
];

foreach($produits as $reference => $produit){
    echo "$reference : " . $produit["Désignation"] . "\n";
}

$valeurProduit = 0;
$valeurStock = 0;

foreach($produits as $reference => $produit) {
    $valeurProduit = round($produit["Prix"] * $produit["Stock"], 2);
    $valeurStock = $valeurStock + $valeurProduit;
}

echo "La valeur du stock est de $valeurStock\n";

$faibleStock = [];

foreach($produits as $reference => $produit) {
    if($produit["Stock"] < 7){
        $faibleStock[] = $reference;
    }
}

print_r($faibleStock);

$referenceARemplir = readline("Saisir une référence : ");
$referenceValide = False;

foreach($produits as $reference => $produit){
    if($referenceARemplir == $reference){
        $referenceValide = True;
        $qteRemplissage = intval(readline("Saisir une quantité reçue : "));
        $produit["Stock"] = $produit["Stock"] + $qteRemplissage;
        echo "La quantité a bien été mise à jour !\n";
        echo $produit["Stock"];
    }
}
if($referenceValide == False){
    echo "La référence n'existe pas !";
}
