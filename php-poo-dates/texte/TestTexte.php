<?php

require_once "Texte.php";
require_once "../phrase/Phrase.php";

$texte = new Texte();

$texte->addPhraseFromText("Salut, je m'appelle Nathan.");
$texte->addPhrase(new Phrase("Je suis en BTS SIO."));
$texte->addPhraseFromText("Tu veux en savoir plus?");
$texte->addPhraseFromText("Je ne te dirai rien!");
$texte->addPhraseFromText("Tu insistes en plus?");
$texte->addPhraseFromText("J'ai dis NON.");

echo $texte->toString(PHP_EOL).PHP_EOL;
echo $texte->getNombreDePhrases().PHP_EOL;
echo $texte->getNombreDeMots().PHP_EOL;
echo $texte->getNombreDeCaracteres().PHP_EOL;
echo $texte->getNombreDeclaratives().PHP_EOL;
echo $texte->getNombreInterrogatives().PHP_EOL;
echo $texte->getNombreExclamatives().PHP_EOL;
var_dump($texte->getNombreAllTypes());