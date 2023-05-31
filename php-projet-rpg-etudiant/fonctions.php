<?php

// Fonction permettant d'effacer l'écran
function effacerEcran() : void {
    echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
}

function creerGrille(int $largeur, int $hauteur) : array {
    $grille = [];
    for($i=0; $i<$hauteur; $i++) {
        // Parcours de chaque colonne
        for($j=0; $j<$largeur; $j++) {
            $grille[$i][$j] = POSITION_VIDE;
        }
    }
    return $grille;
}

function getGrille(array $grille, int $largeur) : string {
    $numerosColonne = str_repeat(' ',5) ;
    for ($i=0; $i < $largeur; $i++) {
        $numerosColonne .= BLUE . sprintf('%02d  ', $i) . RESET;
    }
    $numerosColonne .= PHP_EOL;

    $lignes = '';
    foreach ($grille  as $numero=>$ligne) {
        $uneLigne = BLUE . sprintf('%02d', $numero) . RESET;
        foreach ($ligne as $position) {
            if ($position == HEROS){
                $uneLigne .= " | " . GREEN.HEROS.RESET ;
            } elseif ($position == OBSTACLES) {
                $uneLigne .= " | " . RED.OBSTACLES.RESET ;
            } elseif ($position == ARRIVEE){
                $uneLigne .= " | " . BLUE.ARRIVEE.RESET ;
            } else {
                $uneLigne .= ' | ' . YELLOW.POSITION_VIDE.RESET ;
            }
        }
        $lignes .= $uneLigne . ' | ' . PHP_EOL;}
    return $numerosColonne . $lignes;
}

function positionnerHeros(array &$grille) : array {
    $largeurAleatoire = rand(0,count($grille[0])-1);
    $hauteurAleatoire = rand(0,count($grille)-1);
    while ($grille[$hauteurAleatoire][$largeurAleatoire] != POSITION_VIDE) {
        $largeurAleatoire = rand(0,count($grille[0])-1);
        $hauteurAleatoire = rand(0,count($grille)-1);
    }
    $grille[$hauteurAleatoire][$largeurAleatoire] = HEROS;
    return [$largeurAleatoire, $hauteurAleatoire];
}

function positionnerObstacles(array &$grille) : array {
    $largeur = count($grille[0]);
    $hauteur = count($grille);
    $nombreObstacles = ceil(($largeur*$hauteur)*0.15);
    for($i=0; $i<$nombreObstacles; $i++) {
        $largeurAleatoire = rand(0,$largeur-1);
        $hauteurAleatoire = rand(0,$hauteur-1);
        while ($grille[$hauteurAleatoire][$largeurAleatoire] != POSITION_VIDE) {
            $largeurAleatoire = rand(0,$largeur-1);
            $hauteurAleatoire = rand(0,$hauteur-1);
        }
        $grille[$hauteurAleatoire][$largeurAleatoire] = OBSTACLES;
    }
    return [$largeurAleatoire,$hauteurAleatoire];
}

function positionnerArrivee(array &$grille) : array {
    $largeurAleatoire = rand(0,count($grille[0])-1);
    $hauteurAleatoire = rand(0,count($grille)-1);
    while ($grille[$hauteurAleatoire][$largeurAleatoire] != POSITION_VIDE) {
        $largeurAleatoire = rand(0,count($grille[0])-1);
        $hauteurAleatoire = rand(0,count($grille)-1);
    }
    $grille[$hauteurAleatoire][$largeurAleatoire] = ARRIVEE;
    return [$largeurAleatoire, $hauteurAleatoire];
}

function deplacerHerosVersNord(array &$grille, array &$positionHeros, string $nomHeros, int &$energie, bool $passerObstacle) : bool | string {
    $largeurHeros = $positionHeros[0];
    $hauteurheros = $positionHeros[1];
    if ($hauteurheros-1 < 0) {
        return RED."Déplacement en dehors de l'espace de jeu impossible !".RESET.PHP_EOL;
    } elseif ($grille[$hauteurheros-1][$largeurHeros] == OBSTACLES && !$passerObstacle) {
        return false;
    } elseif ($grille[$hauteurheros-1][$largeurHeros] == OBSTACLES && $passerObstacle) {
        $coutEnergie = rand(-8,10);
        $grille[$hauteurheros-1][$largeurHeros] = HEROS;
        $grille[$hauteurheros][$largeurHeros] = POSITION_VIDE;
        $positionHeros = [$largeurHeros, $hauteurheros-1];
        $energie = $energie-$coutEnergie;
        return true;
    } else {
        $coutEnergie = rand(1,5);
        $grille[$hauteurheros-1][$largeurHeros] = HEROS;
        $grille[$hauteurheros][$largeurHeros] = POSITION_VIDE;
        $positionHeros = [$largeurHeros, $hauteurheros-1];
        $energie = $energie-$coutEnergie;
        return true;
    }
}

function deplacerHerosVersEst(array &$grille, array &$positionHeros, string $nomHeros, int &$energie, bool $passerObstacle) : bool | string {
    $largeurHeros = $positionHeros[0];
    $hauteurheros = $positionHeros[1];
    if ($largeurHeros+1 > count($grille[0])-1) {
        return RED."Déplacement en dehors de l'espace de jeu impossible !".RESET.PHP_EOL;
    } elseif ($grille[$hauteurheros][$largeurHeros+1] == OBSTACLES && !$passerObstacle) {
        return false;
    } elseif ($grille[$hauteurheros][$largeurHeros+1] == OBSTACLES && $passerObstacle) {
        $coutEnergie = rand(-8,10);
        $grille[$hauteurheros][$largeurHeros+1] = HEROS;
        $grille[$hauteurheros][$largeurHeros] = POSITION_VIDE;
        $positionHeros = [$largeurHeros+1, $hauteurheros];
        $energie = $energie-$coutEnergie;
        return true;
    } else {
        $coutEnergie = rand(1,5);
        $grille[$hauteurheros][$largeurHeros+1] = HEROS;
        $grille[$hauteurheros][$largeurHeros] = POSITION_VIDE;
        $positionHeros = [$largeurHeros+1, $hauteurheros];
        $energie = $energie-$coutEnergie;
        return true;
    }
}

function deplacerHerosVersSud(array &$grille, array &$positionHeros, string $nomHeros, int &$energie, bool $passerObstacle) : bool | string {
    $largeurHeros = $positionHeros[0];
    $hauteurheros = $positionHeros[1];
    if ($hauteurheros+1 > count($grille)-1) {
        return RED."Déplacement en dehors de l'espace de jeu impossible !".RESET.PHP_EOL;
    } elseif ($grille[$hauteurheros+1][$largeurHeros] == OBSTACLES && !$passerObstacle) {
        return false;
    } elseif ($grille[$hauteurheros+1][$largeurHeros] == OBSTACLES && $passerObstacle) {
        $coutEnergie = rand(-8,10);
        $grille[$hauteurheros+1][$largeurHeros] = HEROS;
        $grille[$hauteurheros][$largeurHeros] = POSITION_VIDE;
        $positionHeros = [$largeurHeros, $hauteurheros+1];
        $energie = $energie-$coutEnergie;
        return true;
    } else {
        $coutEnergie = rand(1,5);
        $grille[$hauteurheros+1][$largeurHeros] = HEROS;
        $grille[$hauteurheros][$largeurHeros] = POSITION_VIDE;
        $positionHeros = [$largeurHeros, $hauteurheros+1];
        $energie = $energie-$coutEnergie;
        return true;
    }
}

function deplacerHerosVersOuest(array &$grille, array &$positionHeros, string $nomHeros, int &$energie, bool $passerObstacle) : bool | string {
    $largeurHeros = $positionHeros[0];
    $hauteurheros = $positionHeros[1];
    if ($largeurHeros-1 < 0) {
        return RED."Déplacement en dehors de l'espace de jeu impossible !".RESET.PHP_EOL;
    } elseif ($grille[$hauteurheros][$largeurHeros-1] == OBSTACLES && !$passerObstacle) {
        return false;
    } elseif ($grille[$hauteurheros][$largeurHeros-1] == OBSTACLES && $passerObstacle) {
        $coutEnergie = rand(-8,10);
        $grille[$hauteurheros][$largeurHeros-1] = HEROS;
        $grille[$hauteurheros][$largeurHeros] = POSITION_VIDE;
        $positionHeros = [$largeurHeros-1, $hauteurheros];
        $energie = $energie-$coutEnergie;
        return true;
    } else {
        $coutEnergie = rand(1,5);
        $grille[$hauteurheros][$largeurHeros-1] = HEROS;
        $grille[$hauteurheros][$largeurHeros] = POSITION_VIDE;
        $positionHeros = [$largeurHeros-1, $hauteurheros];
        $energie = $energie-$coutEnergie;
        return true;
    }
}

function testerArrivee(array $grille) : bool {
    foreach ($grille as $position) {
        foreach ($position as $valeur) {
            if($valeur == ARRIVEE){
                return false;
            }
        }
    }
    return true;
}