<?php

require_once "./dbConnection.php";

try {
    $pdo = new PDO($attr, $user, $pass, $opts);
    echo "Connection established";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

$query = "INSERT INTO client VALUE (null, 'anas','hey dalia','0661829837')";
$requete = $pdo->query($query);
echo "<br>New CLient Added";
