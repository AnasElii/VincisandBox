<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Client</title>
</head>

<body>
    <form action="login.php" method="POST">
        <h1>Login</h1>
        <div style="display:flex; align-items: center;">
            <p>ID:</p>
            <input name="id" type="text" />
        </div>
        <div style="display:flex; align-items: center;">
            <p>Nom:</p>
            <input name="nom" type="text" />
        </div>
        <div style="display:flex; align-items: center;">
            <p>Ville:</p>
            <input name="ville" type="text" />
        </div>

        <button type="submit">Ajoute</button>
        <?php

        ?>
    </form>
</body>

</html>