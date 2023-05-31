<?php

$nombreFinal = intval(readline("Saisissez le nombre final : "));

for($i = 0; $i <= $nombreFinal; $i ++){
    if($i%2 == 0){
        echo $i . " ";
    }
}