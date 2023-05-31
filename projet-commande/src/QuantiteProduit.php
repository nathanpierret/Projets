<?php
require_once "./src/Produit.php";

class QuantiteProduit {

    private float $quantite;
    private Produit $produit;


    public function __construct(float $quantite, Produit $produit)
    {
        $this->quantite = $quantite;
        $this->produit = $produit;
    }

    public function getQuantite(): float
    {
        return $this->quantite;
    }

    public function setQuantite(float $quantite): void
    {
        $this->quantite = $quantite;
    }

    public function getProduit(): Produit
    {
        return $this->produit;
    }

    public function setProduit(Produit $produit): void
    {
        $this->produit = $produit;
    }

    public function totalHTProduit(): float {
        return $this->getQuantite() * $this->getProduit()->getPrixUnitHT();
    }

    public function totalTVAProduit(): float {
        return ($this->getProduit()->getPourcentageTVA()/100) * $this->totalHTProduit();
    }

    public function totalTTCProduit(): float {
        return $this->totalHTProduit() + $this->totalTVAProduit();
    }
}