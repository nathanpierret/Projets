<?php

class Personne {
    private string $nom;
    private string $prenom;

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getIdentity(): string {
        return $this->prenom . ' ' . $this->nom;
    }
}
