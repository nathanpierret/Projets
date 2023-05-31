<?php

require "fonctions.php";
require "constantes.php";

$cheatBonus = false;
$largeur = intval(readline("Saisir une largeur : "));
$hauteur = intval(readline("Saisir une hauteur : "));
$nomHeros = readline("Saisir le nom du héros : ");
$cheatCode = strtoupper(readline("Saisir 'BONUS' pour un bonus (Seulement pour les néophytes) : "));
if ($cheatCode == "BONUS") {
    $cheatBonus = true;
}
$energie = rand(floor(($largeur*$hauteur)/3),floor(($largeur*$hauteur)/2));
$estArrive = false;
$aQuitte = false;
$etoile = false;
$rang = 0;

$obstaclesDetruits = 0;
$energieNecessaire = floor($energie*0.15);
$nombreObstacles = ceil(($largeur*$hauteur)*0.15);
$deplacementsRestants = $nombreObstacles+15;
$obstaclesADetruire = floor($nombreObstacles/4);
$grilleJeu = creerGrille($largeur,$hauteur);
$positionHeros = positionnerHeros( $grilleJeu);
$positionObstacles = positionnerObstacles($grilleJeu);
$positionArrivee = positionnerArrivee($grilleJeu);

echo GREEN."$nomHeros est positionné en ($positionHeros[1],$positionHeros[0])".RESET.PHP_EOL;
echo BLUE."$nomHeros a encore $energie d'énergie.".RESET.PHP_EOL;
echo RED."Il reste encore $nombreObstacles obstacles.".RESET.PHP_EOL;
if ($obstaclesDetruits < $obstaclesADetruire) {
    echo RED."Objectif bonus : Obstacles détruits $obstaclesDetruits/$obstaclesADetruire".RESET.PHP_EOL;
    $objectifObstacle = false;
} else {
    echo GREEN."Objectif atteint !".RESET.PHP_EOL;
    $objectifObstacle = true;
}
if ($deplacementsRestants > 0){
    echo GREEN."Objectif bonus : Déplacements restants : $deplacementsRestants".RESET.PHP_EOL;
    $objectifDeplacements = true;
} else {
    echo RED."Objectif échoué...".RESET.PHP_EOL;
    $objectifDeplacements = false;
}
if ($energie > $energieNecessaire) {
    echo GREEN."Objectif bonus : Finir avec $energieNecessaire d'énergie".RESET.PHP_EOL;
    $objectifEnergie = true;
} else {
    echo RED."Objectif échoué...".RESET.PHP_EOL;
    $objectifEnergie = false;
}
echo getGrille($grilleJeu,$largeur);
$deplacement = "";

while ($estArrive == false && $aQuitte == false && $energie > 0) {
    if ($nombreObstacles == 0) {
        $etoile = true;
    }
    if (testerArrivee($grilleJeu)) {
        $estArrive = true;
    } else {
        $deplacement = strtoupper(readline("Déplacement de $nomHeros (N,E,S,O,Q -> Quitter) : "));
        if ($deplacement == "N") {
            $testDeplacement = deplacerHerosVersNord($grilleJeu,$positionHeros,$nomHeros,$energie, false);
            $direction = "le Nord";
            if ($cheatBonus) {
                $energie = $energie+3;
            }
            $deplacementsRestants --;
        } elseif ($deplacement == "E") {
            $testDeplacement = deplacerHerosVersEst($grilleJeu,$positionHeros,$nomHeros,$energie, false);
            $direction = "l'Est";
            if ($cheatBonus) {
                $energie = $energie+3;
            }
            $deplacementsRestants --;
        } elseif ($deplacement == "S") {
            $testDeplacement = deplacerHerosVersSud($grilleJeu,$positionHeros,$nomHeros,$energie, false);
            $direction = "le Sud";
            if ($cheatBonus) {
                $energie = $energie+3;
            }
            $deplacementsRestants --;
        } elseif ($deplacement == "O") {
            $testDeplacement = deplacerHerosVersOuest($grilleJeu,$positionHeros,$nomHeros,$energie, false);
            $direction = "l'Ouest";
            if ($cheatBonus) {
                $energie = $energie+3;
            }
            $deplacementsRestants --;
        } elseif ($deplacement == "Q") {
            $aQuitte = true;
            $testDeplacement = true;
        }
        if (is_string($testDeplacement)) {
            echo GREEN."$nomHeros veut se déplacer vers $direction !".RESET.PHP_EOL;
            echo $testDeplacement;
        } elseif (!$testDeplacement) {
            echo RED."Il y a un obstacle !".RESET.PHP_EOL;
            $confirmation = strtoupper(readline("Voulez-vous quand même traverser l'obstacle ? (O -> Oui, N -> Non) : "));
            if ($confirmation == "O") {
                if ($deplacement == "N") {
                    $testDeplacement = deplacerHerosVersNord($grilleJeu,$positionHeros,$nomHeros,$energie, true);
                    $direction = "le Nord";
                    $nombreObstacles --;
                    $obstaclesDetruits ++;
                    if ($cheatBonus) {
                        $energie = $energie+6;
                    }
                    $deplacementsRestants --;
                } elseif ($deplacement == "E") {
                    $testDeplacement = deplacerHerosVersEst($grilleJeu,$positionHeros,$nomHeros,$energie, true);
                    $direction = "l'Est";
                    $nombreObstacles --;
                    $obstaclesDetruits ++;
                    if ($cheatBonus) {
                        $energie = $energie+6;
                    }
                    $deplacementsRestants --;
                } elseif ($deplacement == "S") {
                    $testDeplacement = deplacerHerosVersSud($grilleJeu,$positionHeros,$nomHeros,$energie, true);
                    $direction = "le Sud";
                    $nombreObstacles --;
                    $obstaclesDetruits ++;
                    if ($cheatBonus) {
                        $energie = $energie+6;
                    }
                    $deplacementsRestants --;
                } elseif ($deplacement == "O") {
                    $testDeplacement = deplacerHerosVersOuest($grilleJeu,$positionHeros,$nomHeros,$energie, true);
                    $direction = "l'Ouest";
                    $nombreObstacles --;
                    $obstaclesDetruits ++;
                    if ($cheatBonus) {
                        $energie = $energie+6;
                    }
                    $deplacementsRestants --;
                }
                effacerEcran();
                echo GREEN."$nomHeros est positionné en ($positionHeros[1],$positionHeros[0])".RESET.PHP_EOL;
                echo BLUE."$nomHeros a encore $energie d'énergie.".RESET.PHP_EOL;
                echo RED."Il reste encore $nombreObstacles obstacles.".RESET.PHP_EOL;
                if ($obstaclesDetruits < $obstaclesADetruire) {
                    echo RED."Objectif bonus : Obstacles détruits $obstaclesDetruits/$obstaclesADetruire".RESET.PHP_EOL;
                    $objectifObstacle = false;
                } else {
                    echo GREEN."Objectif atteint !".RESET.PHP_EOL;
                    $objectifObstacle = true;
                }
                if ($deplacementsRestants > 0){
                    echo GREEN."Bonus : Déplacements restants : $deplacementsRestants".RESET.PHP_EOL;
                    $objectifDeplacements = true;
                } else {
                    echo RED."Objectif échoué...".RESET.PHP_EOL;
                    $objectifDeplacements = false;
                }
                if ($energie > $energieNecessaire) {
                    echo GREEN."Objectif bonus : Finir avec $energieNecessaire d'énergie".RESET.PHP_EOL;
                    $objectifEnergie = true;
                } else {
                    echo RED."Objectif échoué...".RESET.PHP_EOL;
                    $objectifEnergie = false;
                }
                echo getGrille($grilleJeu,$largeur);
            }
        } else {
            effacerEcran();
            echo GREEN."$nomHeros est positionné en ($positionHeros[1],$positionHeros[0])".RESET.PHP_EOL;
            echo BLUE."$nomHeros a encore $energie d'énergie.".RESET.PHP_EOL;
            echo RED."Il reste encore $nombreObstacles obstacles.".RESET.PHP_EOL;
            if ($obstaclesDetruits < $obstaclesADetruire) {
                echo RED."Objectif bonus : Obstacles détruits $obstaclesDetruits/$obstaclesADetruire".RESET.PHP_EOL;
                $objectifObstacle = false;
            } else {
                echo GREEN."Objectif atteint !".RESET.PHP_EOL;
                $objectifObstacle = true;
            }
            if ($deplacementsRestants > 0){
                echo GREEN."Bonus : Déplacements restants : $deplacementsRestants".RESET.PHP_EOL;
                $objectifDeplacements = true;
            } else {
                echo RED."Objectif échoué...".RESET.PHP_EOL;
                $objectifDeplacements = false;
            }
            if ($energie > $energieNecessaire) {
                echo GREEN."Objectif bonus : Finir avec $energieNecessaire d'énergie".RESET.PHP_EOL;
                $objectifEnergie = true;
            } else {
                echo RED."Objectif échoué...".RESET.PHP_EOL;
                $objectifEnergie = false;
            }
            echo getGrille($grilleJeu,$largeur);
        }
    }
}
if ($estArrive) {
    echo BLUE."$nomHeros a atteint l'arrivée !".RESET.PHP_EOL;
    if ($objectifObstacle) {
        $rang ++;
    }
    if ($objectifDeplacements) {
        $rang ++;
    }
    if ($objectifEnergie) {
        $rang ++;
    }
    if ($rang == 3) {
        echo BLUE."Rang : S | Objectifs bonus : 3/3".RESET;
    } elseif ($rang == 2) {
        echo GREEN."Rang : A | Objectifs bonus : 2/3".RESET;
    } elseif ($rang == 1) {
        echo YELLOW."Rang : B | Objectifs bonus : 1/3".RESET;
    } else {
        echo GREY."Rang : C | Objectifs bonus : 0/3".RESET;
    }
} elseif ($energie <= 0){
    echo RED."GAME OVER : $nomHeros est épuisé et ne peut plus continuer...".RESET;
} else {
    echo YELLOW."Vous avez quitté la partie...".RESET;
}