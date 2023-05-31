<?php
$prixHT = readline("Saisir un prix HT : ");
$tauxTVA = readline("Saisir un taux de TVA (en pourcentage) : ");
$prixTTC = round((1+($tauxTVA/100))*$prixHT,2);
echo "Le prix TTC est de : $prixTTC";