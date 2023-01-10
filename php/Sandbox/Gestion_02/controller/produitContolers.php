<?php
require_once "../classes/client.php";
require_once "../classes/gestionClient.php";

if (isset($_POST["insert"])) {

    $nom = $_POST["nom"];
    $adress = $_POST["adress"];
    $tel = $_POST["tel"];

    $client = new Client($nom, $adress, $tel);

    $gs = new GestionClient();
    $gs->insert($client);
    header("Location: http://localhost:90/view/ajoutProduit.php");
} else if (isset($_POST["update"])) {

    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $adress = $_POST["adress"];
    $tel = $_POST["tel"];
    $client = new Client($nom, $adress, $tel);

    $gs = new GestionClient();
    $gs->update($id, $client);
    header("Location: http://localhost:90/view/listeProduits.php");
} else if (isset($_POST["delete"])) {

    $id = $_POST["id"];

    $gs = new GestionClient();
    $gs->delete($id);
    header("Location: http://localhost:90/view/listeProduits.php");
}
