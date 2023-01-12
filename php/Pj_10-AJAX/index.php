<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./classes/gestionMarque.php";
    ?>
    <select name="" id="">
        <?php
        $g = new GestionMarque();
        foreach ($g->getAll() as $value) {
        ?>
            <option value=""><?php echo $value->getNom(); ?></option>
        <?php } ?>
    </select>
    <input type="button" value="Button">
</body>
<script src="./jquery-3.6.3.min.js"></script>
<script src="./main.js"></script>

</html>