<?php

$noteSaisie = intval(readline("Saisir une note : "));
while($noteSaisie < 0 || $noteSaisie > 20){
    echo "La note saisie est incorrecte !";
    echo PHP_EOL;
    $noteSaisie = intval(readline("Saisir une note : "));
}
echo "La note saisie est correcte !";