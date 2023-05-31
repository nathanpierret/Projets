<?php

class DateFr {
    //Attributs
    private DateTime $dateFr;

    //Méthodes
    public function __construct(string $dateFr)
    {
        $this->dateFr = DateTime::createFromFormat("d/m/Y",$dateFr);
    }

    public function format(): string {
        return $this->dateFr->format("d/m/Y");
    }

    public function ajouterJour(int $jours): void {
        $this->dateFr->add(new DateInterval("P$jours"."D"));
    }

    public function ajouterMois(int $mois): void {
        $this->dateFr->add(new DateInterval("P$mois"."M"));
    }

    public function soustraireJours(int $jours): void {
        $this->dateFr->sub(new DateInterval("P$jours"."D"));
    }

    public function soustraireMois(int $mois): void {
        $this->dateFr->sub(new DateInterval("P$mois"."M"));
    }

    public function diffJours(DateFr $datefr):string {
        return $this->dateFr->diff($datefr->dateFr)->format("%a");
    }
}