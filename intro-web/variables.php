<?php
$nom = "Dupont";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Variables</title>
</head>
<body>
<h1>Les variables</h1>
<div class="retour-sommaire">
    <i class="fa-solid fa-house"></i>
    <a href="index.php">Retour au sommaire</a>
</div>
<div class="execution">
    <p><?php echo "Bonjour, je m'appelle $nom." ?></p>
    <p><?= "Bonjour, je m'appelle $nom." ?></p>
    <p>Bonjour, je m'appelle <?= $nom ?></p>
    <p>Bonjour, je m'appelle <?= strtoupper($nom) ?></p>
    <p>Il y a <?= strlen($nom) ?> lettres dans le nom <?= $nom ?></p>
    <p>Bonjour, je m'appelle <span class="texte_bleu"><?= $nom ?></span>.</p>
</div>
</body>
</html>
