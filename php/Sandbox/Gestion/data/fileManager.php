<?php


function serializeList($list)
{
    $newList = serialize($list);
    file_put_contents("client.txt", $newList);
}

function unSerializeList()
{
    define("filePath", "./client.txt");

    $data = file_get_contents(filePath);

    if (!empty($data)) {
        $newArray = unserialize($data);
        return $newArray;
    }

    return array();
}

//header("Location: http://localhost:90/index.php");
