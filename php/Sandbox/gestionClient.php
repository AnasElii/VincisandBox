<?php
class GestionClient
{
    private $clientList = array();


    function insert()
    {
        echo "Hello From Gestion Client";
    }
}

if (isset($_POST["insert"])) {
    $gs = new GestionClient();
    $gs->insert();
}
