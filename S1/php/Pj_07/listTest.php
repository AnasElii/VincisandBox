<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="name">
        <input type="text" name="email">
        <button type="submit" name="submit">Button</button>
        <button type="submit" name="display">Display</button>
        <?php
        include "writeAndRead.php";

        if (isset($_GET["submit"])) {
            $clientList = getData();

            $name = $_GET["name"];
            $email = $_GET["email"];

            $newClient = array(
                "name" => $name,
                "email" => $email
            );

            array_push($clientList, $newClient);
            setData($clientList);
        }

        if (isset($_GET["display"])) {
            $newClientList = getData();

            echo "<br>" . "==============" . "<br>";
            foreach ($newClientList as $client) {
                foreach ($client as $key => $value) {
                    echo $key . " => " . $value . " || ";
                }
                echo  "<br>";
            }
        }



        ?>
    </form>
</body>

</html>