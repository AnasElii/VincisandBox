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

            <?php include "writeAndRead.php"; ?>

            <div class="enterData">
                <div class="form-control">
                    <input type="text" name="name" required>
                    <label>Name</label>
                </div>

                <div class="form-control">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <button class="btn" name="submit">Add</button>
            </div>
        </form>


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
                $clientList = getData();

                foreach ($clientList as $client) {
                ?>
                    <tr>
                        <?php
                        foreach ($client as $key => $value) {
                            echo "<td>" . $value . "</td>";
                        }
                        ?>
                        <td>
                            <form action="" method="get">
                                <input class="btn updateeBtn" type="submit" name="update" value="Update" />
                                <input type="hidden" name="updateId" value="<?php echo $client["email"]; ?>">
                            </form>
                        </td>
                        <td><button class="btn deleteBtn" name="delete">Delete</button></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
    <?php
    $clientList = getData();

    if (isset($_GET["submit"])) {

        $name = $_GET["name"];
        $email = $_GET["email"];

        $newClient = array(
            "name" => $name,
            "email" => $email,
        );

        array_push($clientList, $newClient);
        setData($clientList);
        header("location: index.php");
    }

    if (isset($_GET["update"])) {
        $id = $_GET["updateId"];
        foreach ($clientList as $client) {
            if ($id == $client["email"]) {
            }
        }
    }

    ?>
    <script src="script.js"></script>
</body>

</html>