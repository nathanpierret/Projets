<?php

$notes = [10,12.5,14,7,15,9.5,8];

// Version boucle
$moyenne = 0;
$diviseur = 0;
foreach ($notes as $note) {
    $moyenne = $moyenne + $note;
    $diviseur++;
}
$moyenne = round($moyenne/$diviseur,2);
echo "-------------------- Version boucle -----------------------\n";
echo "La moyenne de votre examen final est de $moyenne\n";

// Version fonction PHP
$moyennePHP = round(array_sum($notes)/count($notes),2);
echo "----------------- Version fonction PHP --------------------\n";
echo "La moyenne de votre examen final est de $moyennePHP\n";
if ($moyennePHP < 10) {
    echo "Vous n'avez pas votre diplôme.";
} elseif ($moyennePHP >= 10 && $moyennePHP < 12) {
    echo "Mention passable";
} elseif ($moyennePHP >= 12 && $moyennePHP < 14) {
    echo "Mention assez bien";
} elseif ($moyennePHP >= 14 && $moyennePHP < 16) {
    echo "Mention bien";
} else {
    echo "Mention très bien";
}