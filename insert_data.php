<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server_name = "localhost";
$user_name = "root";
$pass = "";
$database = "cwhdb";

$conn = mysqli_connect($server_name, $user_name, $pass, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Server connected successfully<br>";
}

$sql = "INSERT INTO `contacts` (`name`, `email`, `Date`) VALUES ('Mona', 'mona@example.com', current_timestamp())";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Data inserted successfully! <br>";
} else {
    echo "Failed to insert data: " . mysqli_error($conn);
}
?>
