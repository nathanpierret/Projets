<?php

$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];
$equipeChoisie = readline("Saisir une équipe : ");
$participe = False;

// Version boucle
foreach ($equipes as $equipe) {
    if ($equipeChoisie == $equipe) {
        $participe = True;
    }
}
if ($participe) {
    echo "-------------------- Version boucle -----------------------\n";
    echo "$equipeChoisie sera présente à la prochaine coupe du monde !\n";
} else {
    echo "-------------------- Version boucle -----------------------\n";
    echo "$equipeChoisie ne sera pas présente à la prochaine coupe du monde !\n";
}

// Version fonction PHP
$participePHP = in_array($equipeChoisie,$equipes);

if ($participePHP) {
    echo "----------------- Version fonction PHP --------------------\n";
    echo "$equipeChoisie sera présente à la prochaine coupe du monde !\n";
} else {
    echo "----------------- Version fonction PHP --------------------\n";
    echo "$equipeChoisie ne sera pas présente à la prochaine coupe du monde !\n";
}