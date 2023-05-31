<?php

class Client {

    private int $noClient;
    private string $nomClient;
    private string $rueAdrClient;
    private string $CPAdrClient;
    private string $villeAdrClient;
    private string $telClient;

    public function __construct(int $noClient, string $nomClient, string $rueAdrClient, string $CPAdrClient, string $villeAdrClient, string $telClient)
    {
        $this->noClient = $noClient;
        $this->nomClient = $nomClient;
        $this->rueAdrClient = $rueAdrClient;
        $this->CPAdrClient = $CPAdrClient;
        $this->villeAdrClient = $villeAdrClient;
        $this->telClient = $telClient;
    }

    public function getNoClient(): int
    {
        return $this->noClient;
    }

    public function setNoClient(int $noClient): void
    {
        $this->noClient = $noClient;
    }

    public function getNomClient(): string
    {
        return $this->nomClient;
    }

    public function setNomClient(string $nomClient): void
    {
        $this->nomClient = $nomClient;
    }

    public function getRueAdrClient(): string
    {
        return $this->rueAdrClient;
    }

    public function setRueAdrClient(string $rueAdrClient): void
    {
        $this->rueAdrClient = $rueAdrClient;
    }

    public function getCPAdrClient(): string
    {
        return $this->CPAdrClient;
    }

    public function setCPAdrClient(string $CPAdrClient): void
    {
        $this->CPAdrClient = $CPAdrClient;
    }

    public function getVilleAdrClient(): string
    {
        return $this->villeAdrClient;
    }

    public function setVilleAdrClient(string $villeAdrClient): void
    {
        $this->villeAdrClient = $villeAdrClient;
    }

    public function getTelClient(): string
    {
        return $this->telClient;
    }

    public function setTelClient(string $telClient): void
    {
        $this->telClient = $telClient;
    }

}