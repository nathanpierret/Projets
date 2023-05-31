<?php

$notes = [10,12.5,14,7,15,9.5,8];
$noteMax = 0;

// Version Boucle
foreach ($notes as $note) {
    if ($note > $noteMax) {
        $noteMax = $note;
    }
}
echo "--------- Version Boucle ----------\n";
echo "La note la plus haute est $noteMax\n";

// Version fonction PHP
$noteMax = max($notes);
echo "------ Version fonction PHP ------\n";
echo "La note la plus haute est $noteMax";