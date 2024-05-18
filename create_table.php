<?php


$server_name = "localhost";
$user_name = "root";
$pass = "";
$database = "cwhdb";


    $conn = mysqli_connect($server_name, $user_name, $pass, $database);

    if(!$conn){
        die("server not connected");
   }
   else{
       echo "Server connected successfully<br>";
   }

   $sql = "CREATE TABLE `contacts` (`serial number` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `email` VARCHAR(30) NOT NULL , `Date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`serial number`))";

   $result = mysqli_query($conn, $sql);

   if($result){
        echo "The Database created successfully! <br>";
    }
    else{
        echo "The database was not created  ------>> " .mysqli_error($conn);
    }

?>