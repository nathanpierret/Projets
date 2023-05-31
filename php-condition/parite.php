<?php
// Saisir un nombre et afficher si le nombre est pair ou impair
$nombre = readline("Saisir un nombre : ");
$condition = $nombre%2 == 0;
var_dump($condition);
if($nombre%2 == 0){
    echo "$nombre est pair !";
} else {
    echo "$nombre est impair ! ";
}