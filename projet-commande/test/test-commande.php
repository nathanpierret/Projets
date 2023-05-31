<?php
require_once "./src/Client.php";
require_once "./src/QuantiteProduit.php";
require_once "./src/Produit.php";
require_once "./src/Commande.php";

//Création d'un client
$client = new Client(1,'Lefebvre','1 rue de la Paix','59000','Lille','0320000000');
//Création de 2 produits
$produit1 = new Produit(1,'Clavier','pcs',10,20);
$produit2 = new Produit(2,'Souris','pcs',5,20);
//Création d'une commande
$commande = new Commande(1,new DateTime(),$client);
//Ajout de 2 lignes de commande
$commande->ajouterProduit($produit1,2);
$commande->ajouterProduit($produit2,1);

//Editer la commande
$commande->editer();