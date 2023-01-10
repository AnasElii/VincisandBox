<?php
require_once "../classes/produit.php";
require_once "../classes/gestionProduit.php";

if (isset($_POST["insert"])) {

    $designation = $_POST["designation"];
    $qteStock = $_POST["qteStock"];
    $prixUnit = $_POST["prixUnit"];

    $produit = new Produit($designation, $qteStock, $prixUnit);

    $gp = new GestionProduit();
    $gp->insert($produit);
    header("Location: http://localhost:90/view/ajoutProduit.php");
} else if (isset($_POST["update"])) {

    $id = $_POST["id"];
    $designation = $_POST["designation"];
    $qteStock = $_POST["qteStock"];
    $prixUnit = $_POST["prixUnit"];
    $produit = new Produit($designation, $qteStock, $prixUnit);

    $gp = new GestionProduit();
    $gp->update($id, $produit);
} else if (isset($_POST["delete"])) {

    $id = $_POST["id"];

    $gp = new GestionProduit();
    $gp->delete($id);
}
header("Location: http://localhost:90/view/listeProduits.php");
