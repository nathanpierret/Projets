<?php

$date = date("d/m/Y");
$jourSemaine = date("l");
echo "Aujourd'hui nous sommes le $date";
echo PHP_EOL;
if($jourSemaine == "Saturday") {
    echo "Je vous souhaite un bon week-end";
} elseif($jourSemaine == "Sunday") {
    echo "Je vous souhaite un bon dimanche";
} else {
    echo "Je vous souhaite une bonne journée";
}