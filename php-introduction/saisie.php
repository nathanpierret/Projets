<?php

// Saisie de données par l'utilisateur
$prenom = readline("Saisir votre prénom : ");
echo "Je m'appelle $prenom.";
echo PHP_EOL;
echo "Je m'appelle " . strtoupper($prenom);
echo PHP_EOL;
echo "Je m'appelle " . ucfirst($prenom);
$prenom = ucfirst(strtolower($prenom));
echo PHP_EOL;
echo "Je m'appelle $prenom";
$longueurPrenom = strlen($prenom);
echo PHP_EOL;
echo "La longueur du prénom est : $longueurPrenom";
echo PHP_EOL;
$morceauPrenom = substr($prenom,0,2);
echo "Les 2 premières lettres de $prenom sont : $morceauPrenom";