<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require "fonctions.php";

/* Requête 7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles
*/

$resultats = recupeperNombreArticlesPourChaqueAuteur($tableArticles, $tableAuteurs);

// test
print_r($resultats);