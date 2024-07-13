<?php
session_start();
include("dbmain.php");

if (isset($_POST['update'])) {

    $Name = $_POST['Name'];
    $lname = $_POST['Lname'];
    $feed_id = $_POST['feed_id'];
    $city=$_POST['City'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];



    $sql = "UPDATE reg SET fname ='$Name', lname = '$lname',city='$City',email='$Email',password='$Password' WHERE id = '$feed_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record update suceesfully!";
        header('Location: regread.php');
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $feed_id = $_GET['id'];
    $sql = "SELECT * FROM reg WHERE id = '$feed_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $Name = $row['fname'];
            $Lname = $row['lname'];
            $City=$row['city'];
            $Email=$row['email'];
            $Password=$row['password']
            $feedback_ID = $row['id'];
        }

?>

        <!DOCTYPE html>

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../style/adminpage.css">
            <title>Update feedback</title>
            <style>
                label{
                    width: 100px;
                    display: inline-block;
                }
            </style>

        </head>

        <body>
            <h2>Update contestant</h2>
            <div class="container">
                <form action="regupdate.php" method="post">
                    <input type="hidden" name="feed_id" class="contestant" value="<?php echo $feedback_ID; ?>">
                    <label>FName : </label>
                    <input type="text" id="Name" name="Name" value="<?php echo $Name ?>"><br><br>
                    <label>Lname :</label>
                    <input type="text" id="Feedback" name="Feedback" value="<?php echo $Lname ?>"><br>
                    <label>city : </label>
                    <input type="text" id="city" name="city" value="<?php echo $City ?>"><br><br>
                    <label>Email : </label>
                    <input type="text" id="email" name="email" value="<?php echo $Email ?>"><br><br>
                    <label>Password : </label>
                    <input type="text" id="password" name="password" value="<?php echo $Password ?>"><br><br>
                    <input type="submit" name="update" class="contestant" value="update">

                </form>
            </div>

        </body>

        </html>
<?php

    } else {
        header('Location: regread.php');
    }
}
?>