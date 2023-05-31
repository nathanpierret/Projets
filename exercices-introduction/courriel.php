<?php
$prenom = strtolower(readline("Saisir votre prénom : "));
$nom = strtolower(readline("Saisir votre nom : "));
$numero = strlen($nom);
$adresseMail = "$prenom.$nom$numero@societe.com";
echo "Votre adresse email est $adresseMail";