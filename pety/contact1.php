<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet";
$conn = new mysqli($servername, $username, $password, $dbname);

$x=$_POST["name"];
$y=$_POST["subject"];
$z=$_POST["email"];
$k=$_POST["message"];
$sql="INSERT INTO contact(name,subject,email,message)VALUES('$x','$y','$z','$k')";
if ($conn->query($sql)===TRUE){
    echo"updated";
    header("refresh:1;url=index.html");
}else{
    echo"error".$conn->error;
}$conn->close();
?>