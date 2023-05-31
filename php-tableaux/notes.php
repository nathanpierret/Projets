<?php

$noteDemandee = readline("Saisir une note (q pour arrêter) : ");
$notes = [];
$compteNotes = 0;
$notesSaisies = "";
$notesPlusDeDix = [];
$compteNotesPlusDeDix = 0;
$moyennePlusDeDix = 0;

while ($noteDemandee != "q") {
    if (intval($noteDemandee) < 0 || intval($noteDemandee) > 20) {
        echo "La note saisie est incorrecte.\n";
        $noteDemandee = readline("Saisir une note (q pour arrêter) : ");
    } else {
        $notes[] = $noteDemandee;
        $compteNotes++;
        $noteDemandee = readline("Saisir une note (q pour arrêter) : ");
    }
}

foreach($notes as $note) {
    $notesSaisies = $notesSaisies . " " . $note;
    if (intval($note) >= 10) {
        $notesPlusDeDix[] = intval($note);
        $compteNotesPlusDeDix++;
    }
}
foreach ($notesPlusDeDix as $notePlusDeDix) {
    $moyennePlusDeDix = $moyennePlusDeDix + $notePlusDeDix;
}

echo "Vous avez saisi $compteNotes notes.\n";
echo "Les notes saisies sont$notesSaisies\n";
if ($compteNotesPlusDeDix == 0) {
    echo "Il n'y a aucune note supérieure ou égale à 10";
} else {
    $moyennePlusDeDix = round($moyennePlusDeDix/$compteNotesPlusDeDix,2);
    echo "La moyenne des notes supérieures ou égales à 10 est $moyennePlusDeDix";
}