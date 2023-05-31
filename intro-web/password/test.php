<?php

$password = "secret";
//Hachage de mot de passe avec Bcrypt
$hash = password_hash($password, PASSWORD_DEFAULT);
print $hash.PHP_EOL;
$hash = password_hash($password, PASSWORD_DEFAULT);
print $hash.PHP_EOL;
//Hachage de mot de passe avec Argon2i
$hash = password_hash($password, PASSWORD_ARGON2I);
print $hash.PHP_EOL;
$hash = password_hash($password, PASSWORD_ARGON2I);
print $hash.PHP_EOL;
//Hachage de mot de passe avec Argon2id
$hash = password_hash($password, PASSWORD_ARGON2ID);
print $hash.PHP_EOL;
$hash = password_hash($password, PASSWORD_ARGON2ID);
print $hash.PHP_EOL;

//Vérification du mot de passe
$password = "pass123"; //Mot de passe saisi
$hash = password_hash($password, PASSWORD_ARGON2I);
if (password_verify($password,$hash)) {
    echo "Connexion OK";
} else {
    echo "Connexion invalide";
}