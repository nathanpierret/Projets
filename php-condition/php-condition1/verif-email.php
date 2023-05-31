<?php
$adresseMail = readline("Saisir une adresse email : ");
if(filter_var($adresseMail,FILTER_VALIDATE_EMAIL)){
    echo "L'adresse $adresseMail est valide !";
}else{
    echo "L'adresse $adresseMail est invalide !";
}