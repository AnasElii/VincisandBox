<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../controller/commandeControlers.php" method="post">
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
            <span>Nom: </span>
            <input type="text" name="nom">
        </div>
        <div>
            <span>Adress: </span>
            <input type="text" name="adress">
        </div>
        <div>
            <span>Tel: </span>
            <input type="text" name="tel">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="update">
        <input type="submit" value="Update">
    </form>
</body>

</html>