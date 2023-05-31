<?php
$phrase = readline("Saisir une phrase : ");
$mot = readline("Saisir un mot : ");
$nombreOccurences = substr_count(strtolower($phrase),strtolower($mot));
echo "Le mot '$mot' apparait $nombreOccurences fois dans la phrase";