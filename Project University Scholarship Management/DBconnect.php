<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usm";

//connecting db
$conn = new mysqli($servername, $username, $password);

//checking connection
if($conn->connect_error){
    die("Failed to connect". $conn->connect_error);
}
else{
    mysqli_select_db($conn, $dbname);
    //echo "Connection successful";
}
?>