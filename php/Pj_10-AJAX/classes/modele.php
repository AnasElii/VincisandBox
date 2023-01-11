<?php
class Modele
{
    private $id;
    private $nom;
    private $dateEdition;
    private $marque;

    function __construct($id, $nom, $dateEdition, $marque)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->dateEdition = $dateEdition;
        $this->marque = $marque;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getDateEdition()
    {
        return $this->dateEdition;
    }
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;
    }

    public function getMarque()
    {
        return $this->marque;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
}
