<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet";
$conn = new mysqli($servername, $username, $password, $dbname);

$x=$_POST["email"];
$y=$_POST["password"];
$sql="INSERT INTO logtb(email,password)VALUES('$x','$y')";
if ($conn->query($sql)===TRUE){
    echo"updated";
    header("refresh:1;url=index.html");
}else{
    echo"error".$conn->error;
}$conn->close();
?>