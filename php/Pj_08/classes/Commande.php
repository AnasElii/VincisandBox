<?php
class Commande
{
    private $id = 0;
    private $date;
    private $type = false;
    private $payee = false;
    private $idClient;

    static private $idInc = 0;

    function __construct($date, $type, $payee, $idClient)
    {
        $this->id = self::$idInc;
        $this->date = $date;
        $this->type = $type;
        $this->payee = $payee;
        $this->idCLient = $idClient;
        self::$idInc++;
    }

    function __destruct()
    {
        self::$idInc--;
    }

    function GetID()
    {
        return $this->id;
    }

    function GetDate()
    {
        return $this->date;
    }
    function SetDate($date)
    {
        $this->date = $date;
    }

    function GetType()
    {
        return $this->type;
    }
    function SetType($type)
    {
        $this->type = $type;
    }


    function GetIdCLient()
    {
        return $this->idCLient;
    }
    function SetIdCLient($idCLient)
    {
        $this->idCLient = $idCLient;
    }
}
