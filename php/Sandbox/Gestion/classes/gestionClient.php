<?php

include "client.php";
include "fileManager.php";

class GestionClient
{
    private $clientList = array();


    function insert()
    {
        $clientList = array();
        $clientList = unSerializeList();
        $client = new Client(0, "anas", "Hey Dalia 699", "0661829837");
        array_push($clientList, $client);
        $client = new Client(0, "mouad", "Hey Dalia 699", "066114699367");
        array_push($clientList, $client);
        serializeList($clientList);
    }
}
