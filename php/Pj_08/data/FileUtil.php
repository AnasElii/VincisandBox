<?php
function serializeArray($tables, $nom_ficher)
{
    $result = serialize($tables);
    file_put_contents($nom_ficher, $result);
}

function unserializeArray($nom_ficher)
{
    if (!file_exists("./" . $nom_ficher)) {
        $myfile = fopen($nom_ficher, "w");
        fclose($myfile);
        return array();
    }

    define("filePath", "./" . $nom_ficher);

    $data = file_get_contents(filePath);
    return unserialize($data);
}
