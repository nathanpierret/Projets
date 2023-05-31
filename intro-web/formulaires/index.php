<?php
    //Initialiser les valeurs du formulaire
    $rue = null;
    $codePostal = null;
    $ville = null;
    $erreurs = []; //Tableau qui va contenir les erreurs

    //Le formulaire est-il soumis ?
    //Regarder la méthode HTTP utilisée
    //GET -> affichage du formulaire
    //POST -> soumission du formulaire
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //Le formulaire est soumis
        //Tester si tous les champs obligatoires sont saisis

        //Tester la rue
        if (empty(trim($_POST["rue"]))) {
            $erreurs["rue"] = "La rue est obligatoire !";
        } else {
            $rue = trim($_POST["rue"]);
        }

        //Tester le code postal
        if (empty(trim($_POST["code-postal"]))) {
            $erreurs["codePostal"] = "Le code postal est obligatoire !";
        } else {
            $codePostal = trim($_POST["code-postal"]);
        }

        //Tester la ville
        if (empty(trim($_POST["ville"]))) {
            $erreurs["ville"] = "La ville est obligatoire !";
        } else {
            $ville = trim($_POST["ville"]);
        }

        //Tester si la photo a été envoyée
        if (empty($_FILES["photo"]["name"])) {
            $erreurs["photo"] = "La photo est obligatoire !";
        } else {
            //La photo est présente
            //Récupérer les infos liées à la photo
            $nomFichier = $_FILES["photo"]["name"];
            $typeFichier = $_FILES["photo"]["type"];
            $tmpFichier = $_FILES["photo"]["tmp_name"];
            $tailleFichier = $_FILES["photo"]["size"];
            $extensionFichier = pathinfo($nomFichier,PATHINFO_EXTENSION);

            //Tester si le fichier est une image
            if (!str_contains($typeFichier, "image")) {
                $erreurs["photo"] = "Seules les images sont acceptées !";
            } else {
                //Tester la taille du fichier
                if ($tailleFichier > 500 * 1024) {
                    $erreurs["photo"] = "Une image ne doit pas dépasser 500 kB !";
                } else {
                    //Générer un nom de fichier unique
                    $nomFichier = uniqid().".".$extensionFichier;
                    //Déplacer le fichier dans le dossier Images
                    if (!move_uploaded_file($tmpFichier,"../images/$nomFichier")) {
                        $erreurs["photo"] = "Un problème interne est survenu !";
                    }
                }
            }
        }

        //Tester s'il n'y a pas d'erreurs
        if (empty($erreurs)) {
            //Traitement des données saisies
            //Renvoyer une réponse HTTP au
            //navigateur en lui demandant une requête HTTP vers accueil.php
            header("Location: accueil.php");

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
    <link rel="stylesheet" href="style.css">
    <title>Formulaires</title>
</head>
<body>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="rue">Rue*</label>
            <input type="text" id="rue" name="rue" value="<?= $rue ?>">

            <?php if (isset($erreurs["rue"])) {?>
            <p class="erreur-validation"><?= $erreurs["rue"] ?></p>
            <?php } ?>

            <label for="code-postal">Code postal*</label>
            <input type="text" id="code-postal" name="code-postal" value="<?= $codePostal ?>">

            <?php if (isset($erreurs["codePostal"])) {?>
                <p class="erreur-validation"><?= $erreurs["codePostal"] ?></p>
            <?php } ?>

            <label for="ville">Ville*</label>
            <input type="text" id="ville" name="ville" value="<?= $ville ?>">

            <?php if (isset($erreurs["ville"])) {?>
                <p class="erreur-validation"><?= $erreurs["ville"] ?></p>
            <?php } ?>

            <label for="photo">Photo*</label>
            <input type="file" name="photo" id="photo" accept="image/png, image/jpg, image/jpeg">

            <?php if (isset($erreurs["photo"])) {?>
                <p class="erreur-validation"><?= $erreurs["photo"] ?></p>
            <?php } ?>

            <p>* : Champ obligatoire</p>

            <input type="submit" value="Envoyer">
        </form>
    </div>
</body>
</html>