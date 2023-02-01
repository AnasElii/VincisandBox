<?php // Gestion Client

require_once "../data/dbConnection.php";
require_once "../classes/commande.php";

class GestionCommande
{
    public function insert($commande)
    {
        $valuesList = array(
            "date" => $commande->getDatCom(),
            "type" => $commande->getType(),
            "payee" => $commande->getPayee(),
            "clientID" => $commande->getClient()->getID()
        );
        echo $commande->getClient()->getID();
        $db = new Database();
        $db->execQuery("INSERT INTO commande VALUE (null, :date, :type, :payee, :clientID)", $valuesList);
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
        $db->execQuery("UPDATE commande SET nom = :nom, adresse = :adresse, tel = :tel WHERE id = :id", $valuesList);
    }


    public function delete($id)
    {
        $valuesList = array(
            "id" => $id,
        );
        $db = new Database();
        $db->execQuery("DELETE FROM commande WHERE id = :id", $valuesList);
    }

    public function getAll()
    {
        $db = new Database();
        $clietList = $db->execQuery("SELECT * FROM commande");
        return $clietList;
    }

    public function getClientById($clientID)
    {
        $valuesList = array(
            "id" => $clientID,
        );
        $db = new Database();
        $client = $db->execQuery("SELECT * FROM client WHERE id = :id", $valuesList);
        return $client;
    }
}
