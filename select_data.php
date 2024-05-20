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

// find how many rows in the table
$num = mysqli_num_rows($result);
echo "Total number of record found in contact table  " . $num;
echo "<br>";
$number = 1;
if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    while($row = mysqli_fetch_assoc($result)){
        echo $number . ": Hello ".$row['name'] . " Your Email is " .$row['email'];
        echo "<br>";
        $number = $number + 1;
    }
}
else{
    echo "NO RECORD FOUND";
}

?>