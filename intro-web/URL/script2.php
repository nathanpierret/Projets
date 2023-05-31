<?php
$nom = null;
$prenom = null;
$erreur = null;
if (!empty($_GET['nom']) && !empty($_GET['prenom'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
} else {
    $erreur = "URL demandée non valide.";
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Script 2</title>
</head>
<body>
    <!--- Test de l'erreur --->
    <?php
        if (isset($erreur)) { ?>
            <div class="erreur">
                <h2>Erreur</h2>
                <p><?= $erreur ?></p>
            </div>
        <?php } else { ?>
    <h1>Script 2</h1>
    <p>Bonjour je m'appelle <?= $nom ?></p>
    <a href="script1.php">Lien vers le script 1</a>
<?php } ?>
</body>
</html>