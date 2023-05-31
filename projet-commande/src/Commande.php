<?php
require_once "./src/Client.php";
require_once "./src/QuantiteProduit.php";
require_once "./src/Produit.php";

class Commande {

    private int $noCommande;
    private DateTime $dateCommande;
    private Client $client;
    private array $listeProduitsComms;

    public function __construct(int $noCommande, DateTime $dateCommande, Client $client)
    {
        $this->dateCommande = $dateCommande;
        $this->noCommande = $noCommande;
        $this->client = $client;
        $this->listeProduitsComms = [];
    }

    public function getNoCommande(): int
    {
        return $this->noCommande;
    }

    public function setNoCommande(int $noCommande): void
    {
        $this->noCommande = $noCommande;
    }

    public function getDateCommande(): DateTime
    {
        return $this->dateCommande;
    }

    public function setDateCommande(DateTime $dateCommande): void
    {
        $this->dateCommande = $dateCommande;
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function setNoClient(Client $client): void
    {
        $this->client = $client;
    }

    public function ajouterProduit(Produit $produit, int $quantite): void {
        $produitComm = new QuantiteProduit($quantite, $produit);
        $this->listeProduitsComms[] = $produitComm;
    }

    private function totalHT(): float {
        $totalHT = 0;
        foreach ($this->listeProduitsComms as $produitComm) {
            $totalHT += $produitComm->totalHTProduit();
        }
        return $totalHT;
    }

    private function totalTVA(): float {
        $totalTVA = 0;
        foreach ($this->listeProduitsComms as $produitComm) {
            $totalTVA += $produitComm->totalTVAProduit();
        }
        return $totalTVA;
    }

    private function totalTTC(): float {
        $totalTTC = 0;
        foreach ($this->listeProduitsComms as $produitComm) {
            $totalTTC += $produitComm->totalTTCProduit();
        }
        return $totalTTC;
    }

    public function editer(): void {
        echo "Commande n°".$this->noCommande." du ".$this->dateCommande->format("d/m/Y").PHP_EOL.
            "Client : ".$this->client->getNomClient()." (".$this->client->getNoClient().")".PHP_EOL.
            "\t".$this->client->getRueAdrClient().PHP_EOL.
            "\t".$this->client->getCPAdrClient()." ".$this->client->getVilleAdrClient().PHP_EOL.PHP_EOL;
        foreach ($this->listeProduitsComms as $produitComm) {
            echo $produitComm->getProduit()->getRefProduit()." - ".$produitComm->getProduit()->getDescription()." - ".$produitComm->getQuantite()." - "
                .$produitComm->getProduit()->getUnite()." - ".$produitComm->getProduit()->getPrixUnitHT()."€ - ".$produitComm->getProduit()->getPourcentageTVA().
                "% - ".$produitComm->totalTVAProduit()."€ - ".$produitComm->totalTTCProduit()."€".PHP_EOL;
        }
        echo "\t\t\t"."Total HT : ".$this->totalHT()."€".PHP_EOL.
            "\t\t\t"."Total TVA : ".$this->totalTVA()."€".PHP_EOL.
            "\t\t\t"."Total TTC : ".$this->totalTTC()."€";
    }
}