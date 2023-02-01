<?php

class Produit
{
    private $id;
    private $designation;
    private $qteStock;
    private $prixUnit;

    private static $produitNumber = 0;

    function __construct($designation, $qteStock, $prixUnit)
    {
        $id = self::$produitNumber;
        $this->designation = $designation;
        $this->qteStock = $qteStock;
        $this->prixUnit = $prixUnit;
        self::$produitNumber++;
    }

    function __destruct()
    {
        self::$produitNumber--;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getDesignation()
    {
        return $this->designation;
    }
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    public function getQteStock()
    {
        return $this->qteStock;
    }
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;
    }

    public function getPtixUnit()
    {
        return $this->prixUnit;
    }
    public function setPrexUnit($prixUnit)
    {
        $this->prixUnit = $prixUnit;
    }
}
