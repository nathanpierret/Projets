<?php

$nombre = 0;
$nombreFinal = intval(readline("Saisissez le nombre de fin : "));

while($nombre <= $nombreFinal){
    if($nombre%2 == 0){
        echo $nombre.' ';
    }
    $nombre += 1;
}