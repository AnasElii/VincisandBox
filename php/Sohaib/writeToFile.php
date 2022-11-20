<?php

$modules = array(
    "id" => 0,
    "Math" => 16,
    "Science" => 13,
);

$result = serialize($modules);
file_put_contents('test.txt', $result);

define("filePath", "./test.txt");

$data = file_get_contents(filePath);
$newArrayModules = unserialize($data);


foreach ($newArrayModules as $key => $value) {
    echo ($key . ": " . $value . "<br/>");
}
