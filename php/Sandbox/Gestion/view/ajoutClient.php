<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../controller/clientControlers.php" method="post">
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
        <input type="hidden" name="insert">
        <input type="submit" value="Submit">
    </form>
</body>

</html>