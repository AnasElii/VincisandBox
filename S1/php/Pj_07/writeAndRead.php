<?php
define("filePath", "./data.txt");

function setData($list)
{
    $result = serialize($list);
    file_put_contents(filePath, $result);
}

function getData()
{
    if (file_exists(filePath)) {
        $data = file_get_contents(filePath);

        if ($data) {
            $newArray = unserialize($data);
            return $newArray;
        } else
            return array();
        echo "FIle Exist";
    } else
        return array();
    echo "file note exist";
}
