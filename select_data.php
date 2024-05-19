<?php

$server_name = "localhost";
$user_name = "root";
$pass = "";
$database = "cwhdb";


$conn = mysqli_connect($server_name, $user_name, $pass, $database);
if(!$conn){
    die("Database not connected");
}else{
    echo "Database connected successfully<br>";
}

$sql = "SELECT * from `contacts`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo "Total number of record found in contact table  " . $num;
echo "<br>";
if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    while($row = mysqli_fetch_assoc($result)){
        echo $row['serial number'] . " Hello ".$row['name'] . " Welcome to " .$row['Date'];
        echo "<br>";
    }
}

?>