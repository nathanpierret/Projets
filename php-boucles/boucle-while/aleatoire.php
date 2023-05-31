<?php
echo "
Bienvenue sur le programme 'Aléatoire'\n 
-------------------------------\n 
1 . Nouvelle partie\n 
2 . Nombre de parties réalisées \n 
3 . Quitter\n
-------------------------------\n
";
$commandeMenu = intval(readline("Saisissez le numéro de la commande : "));

while($commandeMenu < 1 || $commandeMenu > 3){
    echo "Commande invalide !\n";
    $commandeMenu = intval(readline("Saisissez le numéro de la commande : "));
}

if($commandeMenu == 1){
    $fichier1 = "nb-parties.txt";
    $fichier2 = "parties-gagnes.txt";
    $fichier3 = "parties-perdues.txt";
    file_put_contents($fichier1, file_get_contents('./nb-parties.txt',true)+1);
    $nombreSaisi = intval(readline("Saisir un nombre entier entre 0 et 1000 : "));
    $nombreTentatives = 1;
    $essaiNombre = random_int(0,1000);

    while($nombreSaisi < 0 || $nombreSaisi > 1000){
        echo "Le nombre à deviner doit être compris entre 0 et 1000";
        echo PHP_EOL;
        $nombreSaisi = intval(readline("Saisir un nombre entier entre 0 et 1000 : "));
    }
    while($essaiNombre != $nombreSaisi){
        if($nombreTentatives == 200){
            break;
        }
        $nombreTentatives += 1;
        $essaiNombre = random_int(0,1000); 
    }
    if($nombreTentatives == 200){
        echo "Tu n'as pas deviné en moins de 200 coups !";
        file_put_contents($fichier3,file_get_contents('./parties-perdues.txt',true)+1);
    } else {
        echo "Le nombre à deviner a été trouvé en $nombreTentatives coups";
        file_put_contents($fichier2,file_get_contents('./parties-gagnes.txt',true)+1);
    }
} elseif($commandeMenu == 2) {
    echo "Nombre de parties jouées : " . file_get_contents('./nb-parties.txt',true);
    echo PHP_EOL;
    echo "Ratio de parties gagnées/parties perdues : " . file_get_contents('./parties-gagnes.txt',true) . "/" . file_get_contents('./parties-perdues.txt',true);
} else {
    exit;
}