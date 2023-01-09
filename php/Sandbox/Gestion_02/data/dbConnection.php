<?php //Db Connection 

class Database
{
    private $host = "localhost";
    private $port = "3306";
    private $data = "commercial";
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

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->data;charset=$this->chrs", $this->user, $this->pass, $this->opts);
            echo "Connection Established";
        } catch (Exception $ex) {
            print "Erro!: " . $ex->getMessage() . "<br>";
            die();
        }
    }

    public final function execQuery($q)
    {
        $query = $this->pdo->prepare($q);
        $query->execute();
        $result = $query->fetchAll();
        print_r($result);
    }
}
