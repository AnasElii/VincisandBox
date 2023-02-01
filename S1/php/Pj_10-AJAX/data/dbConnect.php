<?php

class DBConnect
{
    private $host = "localhost";
    private $port = "3306";
    private $data = "voiture";
    private $user = "root";
    private $pass = "1234";
    private $chrs = "utf8mb4";
    private $opts =
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    private $pdo;

    function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:hodt=$this->host;port=$this->port;dbname=$this->data;charset=$this->chrs", $this->user, $this->pass, $this->opts);
            echo "Connection Established<br>";
        } catch (Exception $e) {
            print "Error" . $e->getMessage() . "<br>";
            die();
        }
    }

    public final function execQuery($q, $array = [])
    {
        $query = $this->pdo->prepare($q);
        $query->execute($array);
        $result = $query->fetchAll();
        return $result;
    }
}
