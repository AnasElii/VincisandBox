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
        <div>
            <span>Type: </span>
            <input type="text" name="type">
        </div>
        <div>
            <span>Payee: </span>
            <input type="text" name="payee">
        </div>
        <div>
            <span>Client: </span>
            <input type="text" name="idClient">
        </div>
        <input type="submit" name="insert" value="Submit">
    </form>
</body>

</html>