<?php
class Client
{
    private $id;
    private $nom;
    private $adresse;
    private $tel;

    function __construct($nom, $adresse, $tel)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->tel = $tel;
    }

    function GetID()
    {
        return $this->id;
    }

    function GetNom()
    {
        return $this->nom;
    }
    function SetNom($nom)
    {
        $this->nom = $nom;
    }
    function GetAdresse()
    {
        return $this->adress;
    }
    function SetAdress($adress)
    {
        $this->adress = $adress;
    }
    function GetTel()
    {
        return $this->tel;
    }
    function SetTel($tel)
    {
        $this->tel = $tel;
    }
}
