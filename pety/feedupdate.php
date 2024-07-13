<?php
session_start();
include("dbmain.php");

if (isset($_POST['update'])) {

    $Name = $_POST['Name'];
    $Feedback = $_POST['Feedback'];
    $feed_id = $_POST['feed_id'];

    $sql = "UPDATE feedtb SET name ='$Name', feedback = '$Feedback' WHERE id = '$feed_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record update suceesfully!";
        header('Location: feedback1.php');
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $feed_id = $_GET['id'];
    $sql = "SELECT * FROM feedtb WHERE id = '$feed_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $Name = $row['name'];
            $Feedback = $row['feedback'];
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
                <form action="feedupdate.php" method="post">
                    <input type="hidden" name="feed_id" class="contestant" value="<?php echo $feedback_ID; ?>">
                    <label>Name : </label>
                    <input type="text" id="Name" name="Name" value="<?php echo $Name ?>"><br><br>
                    <label>Feedback :</label>
                    <input type="text" id="Feedback" name="Feedback" value="<?php echo $Feedback ?>"><br>
                    <input type="submit" name="update" class="contestant" value="update">

                </form>
            </div>

        </body>

        </html>
<?php

    } else {
        header('Location: feedback1.php');
    }
}
?>