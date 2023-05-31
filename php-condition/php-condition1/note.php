<?php

$note = readline("Saisir une note : ");

if($note < 10) {
    echo "Vous n'avez pas la moyenne !";
} elseif($note == 10) {
    echo "Vous avez juste la moyenne !";
} else {
    echo "BRAVO ! Vous avez au dessus de la moyenne !";
}