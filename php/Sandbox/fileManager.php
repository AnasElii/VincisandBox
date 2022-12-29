<?php

define("filePath", "./client.txt");

function serializeList()
{
    $list = array("anas", "Mouad", "Ikram", "Aicha", "Sihmed");
    $newList = serialize($list);

    file_put_contents("client.txt", $newList);
}

function unSerializeList()
{
    $data = file_get_contents(filePath);
    $newArray = unserialize($data);
    return $newArray;
}

header("Location: http://localhost:90/index.php");
exit();
