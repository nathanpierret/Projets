<?php

$destinataire = "dest@test.fr";
$objet = "Test maildev";
$message = "Contenu du mail avec des caractères accentués";
$emetteur = "emetteur@test.fr";

//Définir l'adresse de l'émetteur (from)
//Positionner les entêtes de mail
$entetes = [
    "from" => $emetteur,
    //"text/plain" correspond au type MIME du contenu
    "content-type" => "text/html; charset=utf-8",
    "bcc" => "copie1@test.fr,copie2@test.fr"
];

/*if (mail($destinataire,$objet,$message,$entetes)) {
    echo "Le mail a bien été envoyé";
} else {
    echo "Un problème est survenu lors de l'envoi du mail.";
}*/

//Envoi d'un message dont le contenu est en HTML
$message = "
    <h1>Contenu du mail</h1>
    <p>Ceci est un message en HTML</p>
";

if (mail($destinataire,$objet,$message,$entetes)) {
    echo "Le mail a bien été envoyé";
} else {
    echo "Un problème est survenu lors de l'envoi du mail.";
}