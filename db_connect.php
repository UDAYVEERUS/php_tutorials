<?php

echo "Connecting to database <br>";

$server_name = "localhost";
$user_name = "root";
$pass = "";

$conn = mysqli_connect($server_name, $user_name, $pass);

if(!$conn){
 die("Database not connected" .mysqli_connect_error());
}
else{
    echo "Database connected successfully";
}
?>