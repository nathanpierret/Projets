<?php
    $categories = [
       ["id" => 1, "titre" => "Sports"],
       ["id" => 2, "titre" => "Musique"],
       ["id" => 3, "titre" => "Sciences"],
       ["id" => 4, "titre" => "Economie"],
       ["id" => 5, "titre" => "Histoire"],
       ["id" => 6, "titre" => "Politique"]
    ];

    //Tester si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $categorie = $_POST["categorie"];
        if (!empty($categorie)) {
            echo $categorie;
        } else {
            echo "Aucune catégorie sélectionnée !";
        }
    }

    if (isset($_POST["categories"])) {
        $categoriesPost = $_POST["categories"];
        print_r($categoriesPost);
    } else {
        echo "Aucune valeur sélectionnée !";
    }


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Listes déroulantes</title>
</head>
<body>
    <div class="container">
        <img src="../images/Avatar.png" alt="Avatar">
        <div class="form-container">
            <h1>Catégories</h1>
            <form method="post">
                <!-- Première liste déroulante -->
                <label for="categorie">Catégorie</label>
                <select name="categorie" id="categorie">
                    <option value="">Aucune</option>
                    <option value="1">Sports</option>
                    <option value="2">Musique</option>
                    <option value="3">Sciences</option>
                    <option value="4">Economie</option>
                    <option value="5">Histoire</option>
                    <option value="6">Politique</option>
                </select>
                <select name="categorie2" id="categorie2">
                    <option value="">Aucune</option>
                    <?php foreach ($categories as $category) { ?>
                    <option value="<?= $category["id"] ?>"><?= $category["titre"] ?></option>
                    <?php } ?>
                </select>
                <select name="categories[]" id="categorie3" multiple size="<?= count($categories) ?>">
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?= $category["id"] ?>"><?= $category["titre"] ?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
</body>
</html>
