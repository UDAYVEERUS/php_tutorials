<?php

echo "Connectiong to database <br>";

$server_name = "localhost";
$user_name = "root";
$password = "";

$conn = mysqli_connect($server_name, $user_name, $password);
if(!$conn){
    die("Sorry database not connect" .mysql_connect_error());
}
else{
    echo "Databae connected successfully";
}


?>
