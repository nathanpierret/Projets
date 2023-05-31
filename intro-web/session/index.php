<?php
session_start();
//Tableau des produits
$produits = [
    "p1" => ["nom" => "Produit 1", "prix" => 10],
    "p2" => ["nom" => "Produit 2", "prix" => 20],
    "p3" => ["nom" => "Produit 3", "prix" => 30],
    "p4" => ["nom" => "Produit 4", "prix" => 40],
    "p5" => ["nom" => "Produit 5", "prix" => 50]
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer l'id de produit ajouté
    $id = $_POST["produit-id"];
    // Ajouter si le panier existe ou pas dans la session
    if (!isset($_SESSION["panier"])) {
        $_SESSION["panier"] = [];
    }
    // Teste si le produit à ajouter est déjà présent dans le panier
    if (isset($_SESSION["panier"][$id])) {
        // S'il est présent, on incrémente sa quantité
        $_SESSION["panier"][$id]["quantite"] += 1;
    } else {
        // Sinon on ajoute le produit dans le panier avec une qté
        $_SESSION["panier"][$id]["nom"] = $produits[$id]["nom"];
        $_SESSION["panier"][$id]["prix"] = $produits[$id]["prix"];
        $_SESSION["panier"][$id]["quantite"] = 1;
    }


}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des articles</title>
</head>
<body>
<h1>Liste des produits</h1>
<ul>
    <?php
    foreach ($produits

    as $produit => $element) { ?>
    <li>
        <?= $element["nom"] ?> - <?= $element["prix"] ?>

        <form action="" method="post">
            <input type="hidden" name="produit-id" value="<?= $produit ?>">
            <button type="submit">Ajouter</button>
        </form>
    </li>
        <?php } ?>
        <a href="panier.php">
    <div>Visualiser le panier</div>
    </a>
</ul>

</body>
</html>