<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../controller/produitContolers.php" method="post">
        <?php
        if (isset($_POST["update"])) {
            $id = $_POST["id"];
        }
        ?>
        <div>
            <span>id: </span>
            <input type="text" value="<?php echo $id; ?>" disabled>
        </div>
        <div>
            <span>Designation: </span>
            <input type="text" name="designation">
        </div>
        <div>
            <span>Qte Stock: </span>
            <input type="text" name="qteStock">
        </div>
        <div>
            <span>Prix Unit: </span>
            <input type="text" name="prixUnit">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="update" value="Update">
    </form>
</body>

</html>