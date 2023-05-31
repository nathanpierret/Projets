<?php
session_start();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panier</title>
</head>
<body>

<h1>Mon panier</h1>
<ul>
<?php
    if (isset($_SESSION["panier"])) {
        foreach ($_SESSION["panier"] as $produit => $element) { ?>
        <li><?= $element["nom"]?> - <?= $element["prix"] ?> - Quantité : <?= $element["quantite"] ?></li>
<?php   }
    } else { ?>
    <p>Votre panier est vide !</p>
    <?php } ?>
</ul>

</body>
</html>