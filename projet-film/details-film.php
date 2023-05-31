<?php
    include_once "./donnees/films.php";
    include_once "fonctions.php";
    $idFilm = null;
    $erreur = null;
    if (!empty($_GET['id'])) {
        $idFilm = $_GET['id'];
    } else {
        $erreur = "URL demandée non valide.";
    }
    $film = rechercherFilmParID($filmsTable,$idFilm);
    $acteurs = "";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
    <title>Détails film</title>
</head>
<body>
<h1>Détails film</h1>
<div class="conteneur">
<?php
if (isset($erreur)) { ?>
    <div class="erreur">
        <h2>Erreur</h2>
        <p><?= $erreur ?></p>
    </div>
<?php } else {
    include "./partials/card2.php";
}
?>
</div>
</body>
</html>
