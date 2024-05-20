<?php

// echo "Connecting to database <br>";

$server_name = "localhost";
$user_name = "root";
$pass = "";

$conn = mysqli_connect($server_name, $user_name, $pass);

if(!$conn){
 die("Database not connected");
}
else{
    echo "Database connected successfully<br>";
}

$sql = "CREATE DATABASE cwhdb";
$result = mysqli_query($conn, $sql);

if($result){
    echo "The Database created successfully! <br>";
}
else{
    echo "The database was not created  ---> " .mysqli_error($conn);
}

?>