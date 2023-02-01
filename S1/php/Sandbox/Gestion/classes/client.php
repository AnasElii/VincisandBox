<!-- This class wont be touched from the Interface :) -->
<?php
class Client
{
    private $id;
    private $nom;
    private $adress;
    private $tel;

    function __construct($id, $name, $adress, $tel)
    {
        $this->id = $id;
        $this->name = $name;
        $this->adress = $adress;
        $this->tel = $tel;
    }
}
