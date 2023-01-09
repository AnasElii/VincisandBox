<?php // Gestion Client

require_once "../data/dbConnection.php";

class GestionClient
{
    public function insert()
    {
        $db = new Database();
        $db->execQuery("INSERT INTO client VALUE (null, 'ikram', 'hey dalia' , '0661829837')");
        echo "<br>New client added successfully!";
    }
}

$g = new GestionClient();
$g->insert();
