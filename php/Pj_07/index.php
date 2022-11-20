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
                    <input type="text" required>
                    <label>Name</label>
                </div>

                <div class="form-control">
                    <input type="email" required>
                    <label>Email</label>
                </div>

                <button class="btn">Add</button>
            </div>

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
                    <tr>
                        <td>Anas</td>
                        <td>aninosspro@gamil.com</td>
                        <td><button class="btn updateeBtn">Update</button></td>
                        <td><button class="btn deleteBtn">Delete</button></td>
                    </tr>
                    <tr>
                        <td>Anas</td>
                        <td>aninosspro@gamil.com</td>
                        <td><button class="btn updateeBtn">Update</button></td>
                        <td><button class="btn deleteBtn">Delete</button></td>
                    </tr>
                    <tr>
                        <td>Anas</td>
                        <td>aninosspro@gamil.com</td>
                        <td><button class="btn updateeBtn">Update</button></td>
                        <td><button class="btn deleteBtn">Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>