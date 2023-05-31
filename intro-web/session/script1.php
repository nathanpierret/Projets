<?php
    //Créer une session
    //ATTENTION : 1ere instruction PHP
    session_start();

    //Stocker une valeur dans la session de l'utilisateur
    $_SESSION["prenom"] = "Nathan";
    $_SESSION["nom"] = "Pierret";
    $_SESSION["majeur"] = true;
    $_SESSION["p1"] = "Produit 1";
    $_SESSION["p2"] = "Produit 2";

    $_SESSION["utilisateur"]["prenom"] = "Nathan";
    $_SESSION["utilisateur"]["nom"] = "Pierret";
    $_SESSION["utilisateur"]["majeur"] = true;
    $_SESSION["panier"]["p1"] = "Produit 1";
    $_SESSION["panier"]["p2"] = "Produit 2";

    //Supprimer de la session toutes les infos liées à l'utilisateur
    unset($_SESSION["utilisateur"]);
    //Supprimer le panier
    unset($_SESSION["panier"]);
    unset($_SESSION);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer une session</title>
</head>

<body>
    <h1>Session</h1>
    <p>Permet de créer une nouvelle session</p>
</body>

</html>