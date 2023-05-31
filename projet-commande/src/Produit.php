<?php

class Produit {

    private int $refProduit;
    private string $description;
    private string $unite;
    private float $prixUnitHT;
    private int $pourcentageTVA;

    public function __construct(int $refProduit, string $description, string $unite, float $prixUnitHT, int $pourcentageTVA)
    {
        $this->refProduit = $refProduit;
        $this->description = $description;
        $this->unite = $unite;
        $this->prixUnitHT = $prixUnitHT;
        $this->pourcentageTVA = $pourcentageTVA;
    }

    public function getRefProduit(): int
    {
        return $this->refProduit;
    }

    public function setRefProduit(int $refProduit): void
    {
        $this->refProduit = $refProduit;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getUnite(): string
    {
        return $this->unite;
    }

    public function setUnite(string $unite): void
    {
        $this->unite = $unite;
    }

    public function getPrixUnitHT(): float
    {
        return $this->prixUnitHT;
    }

    public function setPrixUnitHT(float $prixUnitHT): void
    {
        $this->prixUnitHT = $prixUnitHT;
    }

    public function getPourcentageTVA(): int
    {
        return $this->pourcentageTVA;
    }

    public function setPourcentageTVA(int $pourcentageTVA): void
    {
        $this->pourcentageTVA = $pourcentageTVA;
    }
}