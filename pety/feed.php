<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet";
$conn = new mysqli($servername, $username, $password, $dbname);

$x=$_POST["name"];
$y=$_POST["feedback"];
$sql="INSERT INTO feedtb(name,feedback)VALUES('$x','$y')";
if ($conn->query($sql)===TRUE){
    echo"updated";
    header("refresh:0;url=feedback1.php");
}else{
    echo"error".$conn->error;
}$conn->close();
?>