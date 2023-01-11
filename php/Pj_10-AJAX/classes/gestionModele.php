<?php
require_once "./modele.php";
require_once "./marque.php";
require_once "../data/dbConnect.php";

class GestionModele
{
    private $list = array();

    public function getMarque($id)
    {
        $valuesList = array(
            "id" => $id
        );
        $db = new dbConnect();
        $marqueList  = $db->execQuery("SELECT * FROM marque WHERE id = :id", $valuesList);
        foreach ($marqueList as $marque) {
            $m = new Marque($marque["ID"], $marque["NOM"], $marque["PAYS"]);
            return $m;
        }
    }

    public function getAll()
    {
        $db = new dbConnect();
        $modeleList  = $db->execQuery("SELECT * FROM modele");
        foreach ($modeleList as $modele) {
            $m = new Modele($modele["ID"], $modele["NOM"], $modele["DATEEDITION"], $this->getMarque($modele["ID_MARQUE"]));
            array_push($this->list, $m);
        }
        return $this->list;
    }

    public function getList()
    {
        return $this->list;
    }
    public function setList($list)
    {
        $this->list = $list;
    }
}
