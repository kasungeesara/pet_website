<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet";
$conn = new mysqli($servername, $username, $password, $dbname);

$x=$_POST["fname"];
$y=$_POST["lname"];
$z=$_POST["city"];
$k=$_POST["email"];
$t=$_POST["password"];
$sql="INSERT INTO reg(fname,lname,city,email,password)VALUES('$x','$y','$z','$k','$t')";
if ($conn->query($sql)===TRUE){
    echo"updated";
    header("refresh:1;url=sign.html");
}else{
    echo"error".$conn->error;
}$conn->close();
?>


