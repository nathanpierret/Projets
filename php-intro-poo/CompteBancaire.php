<?php

class CompteBancaire {
    //Attributs
    private string $numeroCompte;
    private string $prenom;
    private string $nom;
    private float $solde;
    private float $decovertAutorise;
    private int $ageCompte;
    private bool $gold;

    //Méthodes

    public function __construct(string $prenom, string $nom, float $solde, float $decovertAutorise, int $ageCompte)
    {
        $this->numeroCompte = "FR-";
        for ($i=1;$i<=8;$i++) {
            $this->numeroCompte .= rand(0,9);
        }
        $this->prenom = $prenom;
        $this->nom = $nom;
        if ($solde > 0) {
            $this->solde = $solde;
        } else {
            $this->solde = 0;
        }

        if ($decovertAutorise > 0) {
            $this->decovertAutorise = $decovertAutorise;
        } else {
            $this->decovertAutorise = 0;
        }
        if ($ageCompte > 0) {
            $this->ageCompte = $ageCompte;
        } else {
            $this->ageCompte = 0;
        }

        if ($this->ageCompte >= 10) {
            $this->gold = true;
        } else {
            $this->gold = false;
        }
    }

    public function addMoney(float $money): string {
        $this->solde += $money;
        return "Nouveau solde : $this->solde\n";
    }

    public function takeMoney(float $money): string {
        if ($money <= $this->solde + $this->decovertAutorise) {
            $this->solde -= $money;
            return "Nouveau solde : $this->solde\n";
        } else {
            return "Le montant que vous voulez retirer vous fait dépasser votre découvert autorisé !\n";
        }
    }

    public function getInformations(): string {
        return "Numéro de compte : $this->numeroCompte \nTitulaire : $this->nom $this->prenom \nSolde : $this->solde \nDécouvert autorisé : $this->decovertAutorise \n";
    }

    public function isAccountGold(): string {
        if ($this->gold) {
            return "Votre compte est un compte GOLD.\n";
        } else {
            return "Votre compte n'est pas un compte GOLD.\n";
        }
    }

    public function virementA1Compte(float $money, CompteBancaire $compteBancaire ): string {
        if ($money <= $this->solde + $this->decovertAutorise) {
            $this->solde -= $money;
            $compteBancaire->solde += $money;
            return "Nouveau solde du compte $this->numeroCompte : $this->solde \nNouveau solde du compte $compteBancaire->numeroCompte : $compteBancaire->solde \n";
        } else {
            return "Le montant que vous voulez retirer vous fait dépasser votre découvert autorisé !\n";
        }
    }
}