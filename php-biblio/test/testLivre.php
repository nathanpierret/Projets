<?php

require_once "../src/Auteur.php";
require_once "../src/Livre.php";

$auteur = new Auteur("Cramel","Michou");
$livre = new Livre("2543-54-489","Les comptines de Michou",40,new DateTime());
$livre->setAuteur($auteur);

echo $livre->getAuteur()->getNom();