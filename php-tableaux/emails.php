<?php
$emails = [
    "Martin" => "martin@free.fr",
    "Dupont" => "dupont@gmail.com",
    "Lamvar" => "lamvar@laposte.net",
    "Galmiche" => "galmiche@gmail.com",
    "Taumon" => "taumon@free.fr",
    "Finet" => "finet@laposte.net"
];

foreach($emails as $nom => $email){
    echo "$nom : $email";
    echo PHP_EOL;
}

$domaine = strtolower(readline("Saisissez un nom de domaine : (tout attaché)"));
$noms = [];

foreach($emails as $nom => $email){
    if(str_contains($email,$domaine)){
        $noms[] = $nom;
    }
}
if(count($noms) == 0){
    echo "Aucune personne n'a ce nom de domaine dans son adresse !";
} else {
    foreach($noms as $nom){
        echo $nom;
        echo PHP_EOL;
    }
}