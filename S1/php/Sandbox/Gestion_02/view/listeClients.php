<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Clients</title>
</head>

<body>
    <?php
    require_once "../classes/gestionClient.php";
    $g = new GestionClient();
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>ADRESSE</th>
                <th>TEL</th>
                <th>OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($g->getAll() as $cliet) { ?>
                <tr>
                    <?php foreach ($cliet as $key => $value) {
                        if ($key == "ID") {
                            $id = $value;
                        }

                    ?>
                        <td><?php echo $value ?></td>
                    <?php } ?>
                    <td>
                        <input type="hidden" name="afficheCommandes">
                        <input type="submit" value="Afficher Commandes">
                    </td>
                    <td>
                        <form action="../view/editClient.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="update" value="Editer">
                        </form>
                    </td>
                    <td>
                        <form action="../controller/clientControlers.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="delete" value="Supprimer">
                        </form>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>