<?php
//check if the form submit 
if (isset($_REQUEST['submit'])) {
    // retrieve the form data by using the element’s name attributes value as key
    echo "<h3>form data retrieved by using the $ _REQUEST variable</h3>";
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];

    // display the result
    echo "your name is: " . $firstname . " " . $lastname;

    // check if the post method is used to submit the form
}

if (filter_has_var(INPUT_POST, 'submit')) {
    // retrieve the form data by using the element’s name attributes value as key
    echo "<h3>form data retrieved by using the INPUT_POST variable</h3>";
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    // display the result
    echo "your name is: " . $firstname . " " . $lastname;
}

if (filter_has_var(INPUT_GET, 'submit')) {
    // retrieve the form data by using the element’s name attributes value as key
    echo "<h3>form data retrieved by using the INPUT_GET variable</h3>";
    $firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];

    // display the result
    echo "your name is: " . $firstname . " " . $lastname;
}
//Regular Replace Expression

if (isset($_REQUEST['submit'])) {
    // retrieve the form data by using the element’s name attributes value as key
    echo "<h3>form data retrieved by using the Regular Replace variable</h3>";
    $firstname = preg_replace("#[^\w]#", "", $_REQUEST["firstname"]);
    $lastname = $_REQUEST["lastname"];

    // display the result
    echo "your name is: " . $firstname . " " . $lastname;
}
