<?php
require_once "../classes/commande.php";
require_once "../classes/client.php";
require_once "../classes/gestionCommande.php";


if (isset($_POST["insert"])) {

    $type = $_POST["type"];
    $payee = $_POST["payee"];
    $idClient = $_POST["idClient"];

    $gs = new GestionCommande();
    $clientArray = $gs->getClientById($idClient);
    foreach ($clientArray as $values) {
        $client = new Client($values["NOM"], $values["ADRESSE"], $values["TEL"]);
        $client->setID($idClient);
    }

    $commande = new Commande($type, $payee, $client);

    $gs->insert($commande);
    header("Location: http://localhost:90/view/ajoutCommande.php");
} else if (isset($_POST["update"])) {

    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $adress = $_POST["adress"];
    $tel = $_POST["tel"];
    $client = new Client($nom, $adress, $tel);

    $gs = new GestionClient();
    $gs->update($id, $client);
    header("Location: http://localhost:90/view/listeClients.php");
} else if (isset($_POST["delete"])) {

    $id = $_POST["id"];

    $gs = new GestionClient();
    $gs->delete($id);
    header("Location: http://localhost:90/view/listeClients.php");
}
