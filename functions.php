<?php


// sum of the marks 
function processMarks($marks){
    $sum = 0;
    foreach($marks as $value){
        $sum = $sum + $value;
    }
    return $sum;
}

$uday = [34,56,76,56,99];
$sumMarks = processMarks($uday);

$diksha = [9,97,96,54,92];
$sumMarksHistory = processMarks($diksha);
echo "Total numebr of marks of uday $sumMarks / 500  <br>";
echo "Total numebr of marks of diksha  $sumMarksHistory / 500 <br>";


// calculate sum
function calculateSum(){
    $a = 5;
    $b = 999;

    $sum = $a + $b;
    echo "Total sum of A and B = $sum <br>"; 
}
calculateSum();

// increamenr function 

// call by value
function incr($i)  
{  
    $i++;  
}  
$i = 5;  
incr($i);  
echo $i; 
echo "<br>";


// call by reference 

function increment($i)  
{  
    $i++;  
}  
$i = 5;  
increment($i);  
echo $i; 
echo "<br>";

// Default Argument Values
function Hello($name = "Udayveer"){
    echo "Hello $name <br>";
}
Hello("Diksha");
Hello(); //passing no value  
Hello("Mona");

// Variable Length Argument
function add(...$nums){
    $sum = 0;

    foreach($nums as $n){
        $sum = $sum + $n;
    }
    return $sum;
}
echo add(1,2,3,4,5,18,4697,29,2874,762,2399,36);  // output 10830
?>