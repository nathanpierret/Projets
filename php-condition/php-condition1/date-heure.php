<?php
$date = date('d/m/Y');
$heure = date("H\hi");
echo "Aujourd'hui nous sommes le $date";
echo PHP_EOL;
echo "Il est actuellement $heure";
echo PHP_EOL;
if(date('H')<13){
    echo "Je vous souhaite une bonne matinée !";
}else{
    echo "Je vous souhaite un bon après-midi ! ";
}