<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    echo "<h3>From Post Method</h3>";
    echo "Your name is: " . $firstname . " " . $lastname . " | Post.php";
    exit;
} else {
    echo isset($_POST['firstname']);
    echo "not submit yet";
}
