<?php
class Evenement {
    //Attributs
    private string $nomEvenement;
    private DateTime $dateEvenement;

    //Méthodes
    public function __construct(string $nomEvenement, string $dateEvenement)
    {
        $this->nomEvenement = $nomEvenement;
        $this->dateEvenement = DateTime::createFromFormat("d/m/Y H:i",$dateEvenement." 00:00");
    }

    public function getNom(): string
    {
        return $this->nomEvenement;
    }

    public function getDate(): string
    {
        return $this->dateEvenement->format("d/m/Y");
    }

    public function getNbJours(): string
    {
        $dateCourante = new DateTime();
        return $dateCourante->diff($this->dateEvenement)->format("%a");
    }

    public function getCompteARebours(): string
    {
        $dateCourante = new DateTime();
        return $dateCourante->diff($this->dateEvenement)->format("%a jours, %h heures, %i minutes et %s secondes");
    }
}