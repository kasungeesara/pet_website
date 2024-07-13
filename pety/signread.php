<?php
include("dbmain.php");
$sql = "SELECT * FROM logtb";
$result = $conn->query($sql);
?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>View contestant</title>
   
</head>

<body>
    <h1>Contestant</h1></br>
    <table border="1">
        <tr>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><a href="update.php?id=<?php echo $row['id']; ?>">update</a></td>
                            <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>

                        </tr>
                <?php        }
                }

                ?>
            </tbody>
        </tr>
    </table>
    <br>

    <a href="sign.html" class="btn">Add Contestant</a>

</body>

</html>