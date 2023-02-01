<?php

class Marque
{
    private $id;
    private $nom;
    private $pays;

    public function __construct($id, $nom, $pays)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->pays = $pays;
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

    public function getPays()
    {
        return $this->pays;
    }
    public function setPays($pays)
    {
        $this->pays = $pays;
    }
}
