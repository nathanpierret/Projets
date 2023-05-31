<?php
require_once "../Rectangle.php";

//Création d'une instance dans une référence

$rect1 = new Rectangle(20,10,"");
$rect2 = new Rectangle(56,23,"");

//$rect1 est une référence d'un objet de la classe Rectangle

//Calculer la surface du rectangle

/*echo $rect1->calculerSurface();
echo PHP_EOL;
echo $rect2->calculerSurface();
echo PHP_EOL;
echo $rect1->getLargeur();
echo PHP_EOL;
echo $rect1->getLongueur();
echo PHP_EOL;
echo $rect1->calculerPerimetre();*/

//Exo 2

$rect3 = new Rectangle(60,30,"Orange");

echo $rect3->getLongueur();
echo PHP_EOL;
echo $rect3->getLargeur();
echo PHP_EOL;
echo $rect3->getCouleurFond();
echo PHP_EOL;
echo $rect3->getInformations();
