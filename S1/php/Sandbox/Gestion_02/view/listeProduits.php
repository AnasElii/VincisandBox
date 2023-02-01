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
    require_once "../classes/gestionProduit.php";
    $g = new GestionProduit();
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>DESIGNATION</th>
                <th>QTE_STOCK</th>
                <th>PRIX_UNIT</th>
                <th>OPTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($g->getAll() as $produit) { ?>
                <tr>
                    <?php foreach ($produit as $key => $value) {
                        if ($key == "ID") {
                            $id = $value;
                        }

                    ?>
                        <td><?php echo $value ?></td>
                    <?php } ?>
                    <td>
                        <form action="../view/editProduit.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="update" value="Editer">
                        </form>
                    </td>
                    <td>
                        <form action="../controller/produitContolers.php" method="post">
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