<?php
    if (isset($_GET["submit"])) {
        $name = $_GET["name"];
        $email = $_GET["email"];

        echo "<h3> Get Data from html using $ _GET </h3>";
        echo "your name: " . $name . "<br/>your email: " . $email;
    }
