<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require "fonctions.php";

/* Requête 2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création
*/

$categorieId = readline("Saisir l'id d'une catégorie : ");

$resultats = recupererArticleAvecCategorieDonnee($categorieId,$tableArticles);

// test
print_r($resultats);