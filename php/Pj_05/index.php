<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integration of Php with Html input</title>
</head>

<body>
    <!-- <form action="/index.php" method="GET">

       <h3>Enter your name: </h3>
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <button type="submit">Show name Query</button>
        <div> 


    <div><?php //echo " the name is: $getName"; 
            ?></div>
    </form> -->

    <form action="request-script.php" method="POST">
        <input type="text" name="firstname" placeholder="First Name" />
        <input type="text" name="lastname" placeholder="Last Name" />
        <button type="submit" name="submit" />Submit Query</button>


    </form>


    </div>
</body>

</html>