<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require "fonctions.php";

/* Requête 3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie
*/

$resultats = recupererEnsembleArticles($tableArticles,$tableCategories);

// test
print_r($resultats);