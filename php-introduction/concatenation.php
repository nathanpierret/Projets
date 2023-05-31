<?php
$prenom = "Louis";
$presentation = "Bonjour, je m'appelle " . $prenom;
echo $presentation;

$nombre = 10;
echo PHP_EOL;
echo "Le nombre est égal à " . $nombre;

$age = 21;
echo PHP_EOL;
echo $presentation . " et j'ai " . $age . " ans.";
echo PHP_EOL;
//Interpolation
echo "$presentation et j'ai $age ans.";
echo PHP_EOL;
echo "Je suis $prenom.";
echo PHP_EOL;
//La variable $prenom n'est pas interpolée (interprétée)
echo 'Je suis $prenom.';
