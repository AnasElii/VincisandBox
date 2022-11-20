<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "<h3> Get Data from html using $ _GET </h3>";
    echo "your name: " . $name . "<br/>your email: " . $email;
}
