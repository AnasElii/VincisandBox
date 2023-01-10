<?php
class GestionProduit
{
    public function insert($produit)
    {
        $valuesList = array(
            "designation" => $produit->getDesignation(),
            "qteStock" => $produit->getQteStock(),
            "prixUnit" => $produit->getPtixUnit()
        );
        $db = new Database();
        $db->execQuery("INSERT INTO produit VALUE (null, :designation, :qteStock, :prixUnit)", $valuesList);
    }

    public function update($id, $produit)
    {
        $valuesList = array(
            "id" => $id,
            "designation" => $produit->getDesignation(),
            "qteStock" => $produit->getQteStock(),
            "prixUnit" => $produit->getPtixUnit()
        );
        $db = new Database();
        $db->execQuery("UPDATE produit SET designation = :designation, qte_stock = :qteStock, prix_unit = :prixUnit WHERE id = :id", $valuesList);
    }


    public function delete($id)
    {
        $valuesList = array(
            "id" => $id,
        );
        $db = new Database();
        $db->execQuery("DELETE FROM produit WHERE id = :id", $valuesList);
    }

    public function getAll()
    {
        $db = new Database();
        $clietList = $db->execQuery("SELECT * FROM produit");
        return $clietList;
    }
}
