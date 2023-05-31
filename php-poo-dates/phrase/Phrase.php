<?php

class Phrase {
    //Attributs
    private string $phrase;

    //Méthodes
    public function __construct(string $phrase) {
        $this->phrase = $phrase;
    }

    public function toString(): string {
        return $this->phrase;
    }

    public function calculerNombreMots(): int {
        $nbMots = explode(" ",$this->phrase);
        $compteur = 0;
        foreach ($nbMots as $mot) {
            $compteur ++;
        }
        return $compteur;
    }

    public function getMotPosition(int $position): string {
        $nbMots = explode(" ",$this->phrase);
        if ($position > count($nbMots)) {
            return "Il n'y a pas de mot à la position $position !";
        } else {
            return $nbMots[$position-1];
        }
    }

    public function getType(): string {
        $lastChr = substr($this->phrase,-1);
        if ($lastChr == ".") {
            return "Phrase déclarative";
        } elseif ($lastChr == "?") {
            return "Phrase interrogative";
        } elseif ($lastChr == "!") {
            return "Phrase exclamative";
        } else {
            return "Impossible de savoir";
        }
    }
    public function calculerNombreLettres(): int {
        $nbMots = explode(" ",$this->phrase);
        $nbLettres = 0;
        foreach ($nbMots as $mot) {
            $nbLettres += strlen($mot);
        }
        return $nbLettres;
    }

    public function getMotOccurrences(string $mot): int {
        $nbMots = explode(" ",$this->phrase);
        $occ = 0;
        foreach ($nbMots as $mots) {
            if ($mot == $mots) {
                $occ ++;
            }
        }
        return $occ;
    }
}