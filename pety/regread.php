<?php
include("dbmain.php");
$sql = "SELECT * FROM reg";
$result = $conn->query($sql);
?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>View contestant</title>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid #ccc;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}
    </style>
   
</head>

<body>
    <h1>Contestant</h1></br>
    <table border="1">
        <tr>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Frist name</th>
                    <th>Last name</th>
                    <th>City</th>
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
                            <td><?php echo $row['fname']; ?></td>
                            <td><?php echo $row['lname']; ?></td>
                            <td><?php echo $row['city']; ?></td>
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

    <a href="reg.php" class="btn">Add Contestant</a>

</body>

</html>