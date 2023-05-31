<?php
require_once "../CompteBancaire.php";

$compte1 = new CompteBancaire("Nathan","Pierret",200.50,100,5);

/*echo $compte1->getInformations();
echo $compte1->addMoney(100);
echo $compte1->takeMoney(305);
echo $compte1->takeMoney(200);
echo $compte1->isAccountGold();*/

$compte2 = new CompteBancaire("Odin", "Viennet", 15000, 2500, 12);

echo $compte2->getInformations();
echo $compte2->addMoney(1000);
echo $compte2->takeMoney(1000);
echo $compte2->isAccountGold();
echo $compte2->virementA1Compte(2000,$compte1);