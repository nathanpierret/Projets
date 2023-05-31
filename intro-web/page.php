<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Page</title>
</head>
<body>
<h1>Page exemple</h1>
<pre>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            echo "<p> La requête a été émise avec la méthode GET </p>";
        } else {
            echo "<p> La requête a été émise avec une autre méthode </p>";
        }
        $dateRequete = date("d/m/Y H:i:s" ,$_SERVER["REQUEST_TIME"]);
        echo $dateRequete;
    ?>
</pre>
</body>
</html>