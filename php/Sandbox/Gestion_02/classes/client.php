<!-- This class wont be touched from the Interface :) -->
<?php
class Client
{
    private $id;
    private $nom;
    private $adresse;
    private $tel;

    private static $clientNumber = 0;

    function __construct($nom, $adresse, $tel)
    {
        $this->id = self::$clientNumber;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->tel = $tel;
        self::$clientNumber++;
    }

    function __destruct()
    {
        self::$clientNumber--;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
}
