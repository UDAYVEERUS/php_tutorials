<?php

// Array 
// An array is a collection of data items of the same data type. And it is also known as a subscript variable.
$age = array("Uday"=>"23", "Diksha => 24", "Mona => 25");
echo "Uday is " . $age['Uday'] . "years old.";
echo "<br>";

// Numeric Array 
$bike = array("TVS", "YAMAHA", "APACHE" ,"PULSAR");
echo "I Like" . $bike[1] . "," . $bike[2] . " and " . $bike[3] . " Bike.";
echo "<br>";

// Associative Array
$age = array("Ben" => "35" , "Stokes" => "37" , "Jimi" => "43");
echo "Ben is " . $age["Ben"] . " Years old.";
echo "<br>";
// Multidimensional Arrays
$cars = array(
    array("volvo" ,22 , 48),
    array("BMW", 15, 13),
    array("Saab" , 45,64),
    array("Mercedez" , 75,84)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";

?>