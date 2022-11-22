<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css" />

</head>

<body>
    <div class="container">
        <h1>Add Clients</h1>
        <form action="" method="get">

            <div class="enterData">
                <div class="form-control">
                    <input type="text" name="name" required>
                    <label>Name</label>
                </div>

                <div class="form-control">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <button class="btn" name="submate">Add</button>
            </div>

            <?php
            $clientList = array();
            $index = count($clientList);

            $client = array(
                "id" => $index,
                "name" => "Anas",
                "email" => "aninosspro@gmail.com",
            );
            array_push($clientList,  $client);
            ?>
        </form>

        <form>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gmail</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($clientList as $client) {
                        $id;


                    ?>
                        <tr>
                            <?php
                            foreach ($client as $key => $value) {
                                if ($key !== "id") {


                            ?>
                                    <td><?php echo  $value ?></td>
                            <?php
                                } else {

                                    $id = $value;
                                }
                            }
                            ?>

                            <td><button class="btn updateeBtn" name="update">Update</button></td>
                            <td><button class="btn deleteBtn" name="delete">Delete</button></td>
                        </tr>
                    <?php

                    }
                    ?>
                </tbody>
            </table>
        </form>

        <?php
        if (isset($_GET["submate"])) {

            $name = $_GET["name"];
            $email = $_GET["email"];
        }
        ?>
    </div>
    <script src="script.js"></script>
</body>

</html>