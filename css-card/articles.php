<?php

$articles = [
    ["libelle" => "Nom article",
        "image" => "https://loremflickr.com/g/320/240/paris",
        "prix" => 49.99,
        "promo" => true,
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras 
        ac urna et nisl vehicula tincidunt. Ut at pharetra felis. Donec sollicitudin 
        molestie elit vel venenatis. Maecenas ullamcorper dapibus tortor quis lacinia. 
        Integer sit amet malesuada lacus. Nunc commodo, risus eget consectetur vulputate, 
        velit quam lobortis tellus, vel luctus erat dolor ut est. Duis et ex nec arcu 
        accumsan faucibus. Vestibulum a nulla ullamcorper felis consequat lobortis et eu 
        velit."
]];
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <title>Article</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <img class="card-img" src="<?php echo $articles[0]["image"] ?>" alt="Paris">
        </div>
        <div class="card-body">
            <h2 class="card-title"><?php echo $articles[0]["libelle"] ?></h2>
            <p class="card-price"><?php echo $articles[0]["prix"]." euros";
            if ($articles[0]["promo"]) {
                echo " <i class='fa-solid fa-tag'></i>";
            }?></p>
            <p class="card-text"><?php echo substr($articles[0]["description"],0,100);
            if (strlen($articles[0]["description"]) > 100) {
                echo "...";
            }?></p>
            <div class="card-btn-detail">
                <a href="#">Voir</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <img class="card-img" src="<?php echo $articles[0]["image"] ?>" alt="Paris">
        </div>
        <div class="card-body">
            <h2 class="card-title"><?php echo $articles[0]["libelle"] ?></h2>
            <p class="card-price"><?php echo $articles[0]["prix"]." euros";
                if ($articles[0]["promo"]) {
                    echo " <i class='fa-solid fa-tag'></i>";
                }?></p>
            <p class="card-text"><?php echo substr($articles[0]["description"],0,100);
                if (strlen($articles[0]["description"]) > 100) {
                    echo "...";
                }?></p>
            <div class="card-btn-detail">
                <a href="#">Voir</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <img class="card-img" src="<?php echo $articles[0]["image"] ?>" alt="Paris">
        </div>
        <div class="card-body">
            <h2 class="card-title"><?php echo $articles[0]["libelle"] ?></h2>
            <p class="card-price"><?php echo $articles[0]["prix"]." euros";
                if ($articles[0]["promo"]) {
                    echo " <i class='fa-solid fa-tag'></i>";
                }?></p>
            <p class="card-text"><?php echo substr($articles[0]["description"],0,100);
                if (strlen($articles[0]["description"]) > 100) {
                    echo "...";
                }?></p>
            <div class="card-btn-detail">
                <a href="#">Voir</a>
            </div>
        </div>
    </div>
</body>
</html>