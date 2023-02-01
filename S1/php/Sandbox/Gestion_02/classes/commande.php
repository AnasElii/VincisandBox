<!-- This class wont be touched from the Interface :) -->
<?php
class Commande
{
    private $id;
    private $dateCom;
    private $type;
    private $payee;
    private $client;

    private static $commandeNumber = 0;

    function __construct($type, $payee, $client)
    {
        $this->id = self::$commandeNumber;
        $this->dateCom = date("Y-m-d H:i:s");
        $this->type = $type;
        $this->payee = $payee;
        $this->client = $client;
        self::$commandeNumber++;
    }

    function __destruct()
    {
        self::$commandeNumber--;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getDatCom()
    {
        return $this->dateCom;
    }
    public function setDatCom($dateCom)
    {
        $this->dateCom = $dateCom;
    }

    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getPayee()
    {
        return $this->payee;
    }
    public function setPayee($payee)
    {
        $this->payee = $payee;
    }

    public function getClient()
    {
        return $this->client;
    }
    public function setClient($client)
    {
        $this->client = $client;
    }
}
