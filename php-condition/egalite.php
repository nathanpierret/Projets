<?php
//Saisir 2 nombres entiers et afficher s'ils sont égaux ou différents
$nombre1 = readline("Saisir le 1er nombre : ");
$nombre2 = readline("Saisir le 2e nombre : ");
if($nombre1 == $nombre2){
    echo "$nombre1 et $nombre2 sont égaux !";
}
else{
    echo "$nombre1 et $nombre2 sont différents !";
}