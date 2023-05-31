<?php

$nombreMin = intval(readline("Saisir un nombre minimum : "));
$nombreMax = intval(readline("Saisir un nombre maximum : "));
$nombreActuel = $nombreMin;

while($nombreActuel < $nombreMax){
    if($nombreActuel%15 == 0) {
        echo "FizzBuzz" . " ";
    } elseif($nombreActuel%3 == 0) {
        echo "Fizz" . " ";
    } elseif($nombreActuel%5 == 0) {
        echo "Buzz" . " ";
    } else {
        echo $nombreActuel . " ";
    }
    $nombreActuel += 1;
}