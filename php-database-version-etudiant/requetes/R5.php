<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require "fonctions.php";

/* Requête 5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie
*/

$resultats = recupererArticlesOrdonnesPartitre($tableArticles, $tableCategories);

// test
print_r($resultats);
