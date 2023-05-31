<?php
require_once "Phrase.php";

$phrase = new Phrase("Je suis en train d'apprendre le langage PHP et le langage javascript.");
echo $phrase->toString().PHP_EOL;
echo $phrase->calculerNombreMots().PHP_EOL;
echo $phrase->getMotPosition(12).PHP_EOL;
echo $phrase->getType().PHP_EOL;
echo $phrase->calculerNombreLettres().PHP_EOL;
echo $phrase->getMotOccurrences("le");