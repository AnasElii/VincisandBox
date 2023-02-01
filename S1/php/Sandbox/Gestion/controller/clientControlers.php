<?php

include "gestionClient.php";

if (isset($_POST["insert"])) {
    $gs = new GestionClient();
    $gs->insert();
    echo "New Client Add";
}
