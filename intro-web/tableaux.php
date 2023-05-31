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
    <title>Tableaux</title>
</head>
<body>
<h1>Les tableaux</h1>
<div class="retour-sommaire">
    <i class="fa-solid fa-house"></i>
    <a href="index.php">Retour au sommaire</a>
</div>

<div class="execution">
    <?php $noms = ['Dupont','Martin','Durant','Odin','Arthur','Esteban'];
    foreach ($noms as $nom) {
        echo "<p>Je m'appelle $nom.</p>";
    }
    ?>
</div>

<div class="execution">
    <?php
    $noms = ['Dupont','Martin','Durant','Odin','Arthur','Esteban'];
    foreach ($noms as $nom) { ?>
        <p>Je m'appelle <?=$nom?></p>
    <?php } ?>
</div>

<h2>Génération d'une liste :</h2>
<?php $noms = ['Dupont','Martin','Durant','Odin','Arthur','Esteban'];
?>
<ul>
    <?php foreach ($noms as $nom) { ?>
        <li><?= $nom ?></li>
    <?php } ?>
</ul>

<h2>Génération d'une table :</h2>

<div class="execution">
    <?php
    $comptes = [
        ["Prénom" => "Nathan", "Nom" => "Pierret", "Email" => "pierret@test.fr", "Premium" => true],
        ["Prénom" => "Lucy", "Nom" => "Stinzer", "Email" => "stinzer@test.fr", "Premium" => true],
        ["Prénom" => "Danny", "Nom" => "Karlov", "Email" => "karlov@test.fr", "Premium" => true],
        ["Prénom" => "Megan", "Nom" => "Ovania", "Email" => "ovania@test.fr", "Premium" => false],
        ["Prénom" => "Kat", "Nom" => "Hid", "Email" => "hid@test.fr", "Premium" => false],
        ["Prénom" => "Gaben", "Nom" => "Carter", "Email" => "carter@test.fr", "Premium" => false],
    ]
    ?>
    <table>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Premium</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($comptes as $cle => $valeur) {?>
            <tr>
                <td><?= $valeur["Prénom"]?></td>
                <td><?= $valeur["Nom"]?></td>
                <td><?= $valeur["Email"]?></td>
                <td><?= ($valeur["Premium"]) ? "Oui" : "Non"?></td>
                <td class="action"><a href="#" class="bouton">Supprimer</a> <a href="#" class="bouton">Modifier</a> <?= (!$valeur["Premium"]) ? "<a href='#' class='premium'>Premium</a>" : null ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>