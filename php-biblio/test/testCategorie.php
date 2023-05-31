<?php

require_once "../src/Livre.php";
require_once "../src/Categorie.php";

$categorie = new Categorie("Livre pour enfants");
$livre = new Livre("2543-54-489","Les comptines de Michou",40,new DateTime());
$livre->setCategorie($categorie);

echo $livre->getCategorie()->getLibelle();