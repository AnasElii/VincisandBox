<?php
include_once 'FileUtil.php';

class GestionClients
{
    private $clientList = array();
    private $nom_ficher = "CLIENTS.txt";

    function __construct()
    {
    }
    function __destruct()
    {
    }

    function getAll()
    {
        return $this->clientList;
    }

    function insert($client)
    {
        $nom_ficher = "CLIENTS.txt";
        $clientList = unserializeArray($nom_ficher);
        array_push($clientList, $client);
        serializeArray($clientList, $nom_ficher);
    }

    function update($client)
    {
        $nom_ficher = "CLIENTS.txt";
        $clientList = unserializeArray($nom_ficher);
        foreach ($clientList as $value) {
            if ($value->GetID() == $client->GetID()) {
                $value->SetNom($client->GetNome());
                $value->SetAdresss($client->GetAdresss());
                $value->SetTel($client->GetTel());
            }
        }
        serializeArray($clientList, $nom_ficher);
    }
}
