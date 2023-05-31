<?php

require_once "../src/Livre.php";
require_once "../src/Editeur.php";

$editeur = new Editeur("Gamillou","Besancon");
$livre = new Livre("2543-54-489","Les comptines de Michou",40,new DateTime());
$livre->setEditeur($editeur);

echo $livre->getEditeur()->getNom()." ".$livre->getEditeur()->getVille();