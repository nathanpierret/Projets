<?php

require_once "../phrase/Phrase.php";

class Texte {
    //Attributs
    private array $texte;

    //Méthodes
    public function __construct()
    {
        $this->texte = [];
    }

    public function addPhrase(Phrase $phrase): void {
        $this->texte[] = $phrase;
    }

    public function addPhraseFromText(string $phrase): void {
        $this->texte[] = new Phrase($phrase);
    }

    public function toString(string $separateur): string {
        $texte = "";
        foreach ($this->texte as $phrase) {
            $texte .= $phrase->toString() . $separateur;
        }
        return $texte;
    }

    public function getNombreDePhrases(): int {
        return count($this->texte);
    }

    public function getNombreDeMots(): int {
        $compteur = 0;
        foreach ($this->texte as $phrase) {
            $nbMots = explode(" ",$phrase->toString());
            $compteur += count($nbMots);
        }
        return $compteur;
    }

    public function getNombreDeCaracteres(): int {
        $compteur = 0;
        foreach ($this->texte as $phrase) {
            $nbMots = explode(" ",$phrase->toString());
            foreach ($nbMots as $mot) {
                $compteur += strlen($mot);
            }
        }
        return $compteur;
    }

    public function getNombreDeclaratives(): int {
        $compteur = 0;
        foreach ($this->texte as $phrase) {
            if (str_ends_with($phrase->toString(), ".")) {
                $compteur ++;
            }
        }
        return $compteur;
    }

    public function getNombreInterrogatives(): int {
        $compteur = 0;
        foreach ($this->texte as $phrase) {
            if (str_ends_with($phrase->toString(), "?")) {
                $compteur ++;
            }
        }
        return $compteur;
    }

    public function getNombreExclamatives(): int {
        $compteur = 0;
        foreach ($this->texte as $phrase) {
            if (str_ends_with($phrase->toString(), "!")) {
                $compteur ++;
            }
        }
        return $compteur;
    }

    public function getNombreAllTypes(): array {
        $types = [];
        $types[] = "Déclarative(s) : ". $this->getNombreDeclaratives();
        $types[] = "Interrogative(s) : ". $this->getNombreInterrogatives();
        $types[] = "Exclamative(s) : ". $this->getNombreExclamatives();
        return $types;
    }
}