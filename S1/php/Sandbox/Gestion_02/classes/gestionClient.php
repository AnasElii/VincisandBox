<?php // Gestion Client

require_once "../data/dbConnection.php";
require_once "../classes/client.php";

class GestionClient
{
    public function insert($client)
    {
        $valuesList = array(
            "nom" => $client->getNom(),
            "adresse" => $client->getAdresse(),
            "tel" => $client->getTel()
        );
        $db = new Database();
        $db->execQuery("INSERT INTO client VALUE (null, :nom, :adresse, :tel)", $valuesList);
    }

    public function update($id, $client)
    {
        $valuesList = array(
            "id" => $id,
            "nom" => $client->getNom(),
            "adresse" => $client->getAdresse(),
            "tel" => $client->getTel()
        );
        $db = new Database();
        $db->execQuery("UPDATE client SET nom = :nom, adresse = :adresse, tel = :tel WHERE id = :id", $valuesList);
    }


    public function delete($id)
    {
        $valuesList = array(
            "id" => $id,
        );
        $db = new Database();
        $db->execQuery("DELETE FROM client WHERE id = :id", $valuesList);
    }

    public function getAll()
    {
        $db = new Database();
        $clietList = $db->execQuery("SELECT * FROM client");
        return $clietList;
    }
}
