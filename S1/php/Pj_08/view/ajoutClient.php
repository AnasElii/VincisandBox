<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../data/GestionClients.php" method="post">
        <?php include "../classes/Client.php" ?>
        <?php $client = new Client("Anas", "Hey Dalia", "0610957256"); ?>
        <input type="submit" value="Submit" name="insertClient">
        <input type="hidden" name="insertData" value="<?php $gestionClient = new GestionClients();
                                                        $gestionClient->insert($client) ?>">
    </form>
</body>

</html>