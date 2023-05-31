<?php



function recupererArticlesActifs(array $tableau) : array {
    $resultats = [];

    foreach($tableau as $clePrimaire => $champ){
        if($champ["actif"]){
            $resultats[] = ["Id" => $clePrimaire, "Titre" => $champ["titre"], "Contenu" => $champ["contenu"], "Date de création" => $champ["date_creation"]];
        }
    }
    return $resultats;
}

function recupererArticleAvecCategorieDonnee(string $categorieId, array $tableau) : array {
    $resultats = [];

    foreach($tableau as $clePrimaire => $champ){
        if($champ["id_categorie"] == $categorieId){
            $resultats[] = ["Id" => $clePrimaire, "Titre" => $champ["titre"], "Contenu" => $champ["contenu"], "Date de création" => $champ["date_creation"]];
        }
    }
    return $resultats;
}

function recupererEnsembleArticles(array $tableau, array $tableau2) : array {
    $resultats = [];

    foreach($tableau as $clePrimaire => $champ){
        $resultats[] = ["Id" => $clePrimaire, "Titre" => $champ["titre"], "Contenu" => $champ["contenu"], "Date de création" => $champ["date_creation"], "Catégorie" => $tableau2[$champ["id_categorie"]]["libelle"]];
    }
    return $resultats;
}

function recupererArcticleAvecDateSuperieureQueDateDonnee(array $tableau, array $tableau2, string $dateCreation) : array {
    $resultats = [];
    $dateCreation = strtotime($dateCreation);

    foreach($tableau as $clePrimaire => $champ){
        $dateArticle = strtotime($champ["date_creation"]);
        if($dateArticle>$dateCreation){
            $resultats[] = ["Id" => $clePrimaire, "Titre" => $champ["titre"], "Contenu" => $champ["contenu"], "Date de création" => $champ["date_creation"], "Prénom de l'auteur" => $tableau2[$champ["id_auteur"]]["prenom"], "Nom de l'auteur" => $tableau2[$champ["id_auteur"]]["nom"]];
        }
    }
    return $resultats;
}

function recupererArticlesOrdonnesPartitre(array $tableau, array $tableau2) : array {
    $resultats = [];

    foreach($tableau as $clePrimaire => $champ){
        $resultats[] = ["Id" => $clePrimaire, "Titre" => $champ["titre"], "Date de création" => $champ["date_creation"], "Catégorie" => $tableau2[$champ["id_categorie"]]["libelle"]];
    }

    $colonne = array_column($resultats,"Titre");
    array_multisort($colonne, SORT_ASC,$resultats);
    return $resultats;
}

function recupererNombreArticlesParUnAuteur(array $tableau, int $auteurId) : int {
    $resultat = 0;

    foreach($tableau as $clePrimaire => $champ){
        if($champ["id_auteur"] == $auteurId){
            $resultat++;
        }
    }
    return $resultat;
}

function recupeperNombreArticlesPourChaqueAuteur(array $tableau, array $tableau2) : array {
    $resultats = [];

    foreach($tableau2 as $clePrimaire1 => $champ1){
        $resultat = 0;
        $auteurId = $clePrimaire1;
        foreach($tableau as $clePrimaire2 => $champ2){
            if($champ2["id_auteur"] == $auteurId){
                $resultat++;
            }
        }
        $resultats[] = ["Id" => $clePrimaire1, "Prénom" => $champ1["prenom"], "Nom" => $champ1["nom"], "Nombre d'articles" => $resultat];
    }
    return $resultats;
}