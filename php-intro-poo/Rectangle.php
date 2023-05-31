<?php

class Rectangle {
    //Attributs
    private int $longueur;
    private int $largeur;
    private string $couleurFond;
    //Méthodes
    public function __construct(int $longueur, int $largeur, string $couleurFond) {
        if ($longueur > 0) {
            $this->longueur = $longueur;
        } else {
            $this->longueur = 0;
        }

        if ($largeur > 0) {
            $this->largeur = $largeur;
        } else {
            $this->largeur = 0;
        }

        if ($couleurFond <> "") {
            $this->couleurFond = $couleurFond;
        } else {
            $this->couleurFond = "Blanc";
        }
    }

    public function calculerSurface() : int {
        return $this->longueur * $this->largeur;
    }

    public function calculerPerimetre() : int {
        return 2*$this->longueur + 2*$this->largeur;
    }

    //Assesseur pour l'attribut longueur
    public function getLongueur(): int {
        return $this->longueur;
    }

    //Assesseur pour l'attribut largeur
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    //Mutateur pour l'attribut longueur
    public function setLongueur(int $longueur): void
    {
        if ($longueur > 0) {
            $this->longueur = $longueur;
        }
    }

    //Mutateur pour l'attribut largeur
    public function setLargeur(int $largeur): void
    {
        if ($largeur > 0) {
            $this->largeur = $largeur;
        }
    }

    public function getCouleurFond(): string
    {
        return $this->couleurFond;
    }

    public function setCouleurFond(string $couleurFond): void
    {
        $this->couleurFond = $couleurFond;
    }

    public function getInformations(): string {
        return "Dimensions : $this->longueur x $this->largeur \nCouleur de fond : $this->couleurFond";
    }
}