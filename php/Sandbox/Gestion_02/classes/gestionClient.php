<?php // Gestion Client


// include "../classes/client.php";
// include "../data/fileManager.php";
require_once "../data/dbConnection.php";

class GestionClient
{
    private $clientList = array();

    function insert()
    {
        // $clientList = array();
        // $clientList = unSerializeList();
        // $client = new Client(0, "anas", "Hey Dalia 699", "0661829837");

        try {
            $query = "INSERT INTO client (null, 'anas', 'hey dalia' , :tel)";
            // $list_vlaues = array(
            //     "nom" => "anas",
            //     "adress" => "Hey Dalia 699",
            //     "tel" => "0661829837"
            // );
            $requete = $pdo->query($query);
             $err = $e->getMessage();
            echo $err;
        }


        // array_push($clientList, $client);
        // $client = new Client(0, "mouad", "Hey Dalia 699", "066114699367");
        // array_push($clientList, $client);
        // serializeList($clientList);
    }
}
