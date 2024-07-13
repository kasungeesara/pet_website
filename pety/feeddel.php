<?php

include "dbmain.php";

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM feedtb WHERE id ='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "Record deleted successfully.";
        header('Location: feedback1.php');
    } else {
        echo "Record deleted unsuccessfully.";
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
