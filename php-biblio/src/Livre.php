<?php
require_once "Auteur.php";
require_once "Categorie.php";
require_once "Editeur.php";

class Livre {
    private string $isbn;
    private string $titre;
    private int $nbPages;
    private DateTime $dateParution;
    //Association 0,1 avec la classe Auteur
    private ?Auteur $auteur;
    private ?Categorie $categorie;
    private ?Editeur $editeur;

    public function __construct(string $isbn, string $titre, int $nbPages, DateTime $dateParution, ?Auteur $auteur=null, ?Categorie $categorie=null, ?Editeur $editeur=null)
    {
        $this->isbn = $isbn;
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->dateParution = $dateParution;
        $this->auteur = $auteur;
        $this->categorie = $categorie;
        $this->editeur = $editeur;
    }

    public function setAuteur(?Auteur $auteur): void
    {
        $this->auteur = $auteur;
    }

    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): void
    {
        $this->categorie = $categorie;
    }

    public function getEditeur(): ?Editeur
    {
        return $this->editeur;
    }

    public function setEditeur(?Editeur $editeur): void
    {
        $this->editeur = $editeur;
    }


}