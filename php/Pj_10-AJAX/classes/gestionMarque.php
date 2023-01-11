<?php
require_once "./marque.php";
require_once "../data/dbConnect.php";

class GestionMarque
{
    private $list = array();

    public function getAll()
    {
        $db = new dbConnect();
        $marqueList  = $db->execQuery("SELECT * FROM marque");
        foreach ($marqueList as $marque) {
            $m = new Marque($marque["ID"], $marque["NOM"], $marque["PAYS"]);
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
